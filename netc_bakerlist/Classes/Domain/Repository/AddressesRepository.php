<?php
namespace Netcbakerlist\NetcBakerlist\Domain\Repository;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * The repository for Addresses
 */
class AddressesRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
	// public function findAll()
	// {
	// 	$query = $this->createQuery();
	// 	$query->getQuerySettings()->setRespectSysLanguage(FALSE);	
	// 	$query->getQuerySettings()->setSysLanguageUid(0);
	// 	return $query->execute();
	// }
	// public function show()
	// {
	// 	$query = $this->createQuery();
	// 	$query->getQuerySettings()->setRespectSysLanguage(FALSE);	
	// 	$query->getQuerySettings()->setSysLanguageUid(0);
	// 	return $query->execute();
	// }

    public function findortBy($backeryname,$ort,$country,$GlutenfreiesBrot,$startpos) {
    	$query = $this->createQuery();
		// $query->getQuerySettings()->setRespectSysLanguage(FALSE);	
		// $query->getQuerySettings()->setSysLanguageUid(0);

    	if($startpos==''){
			$startpos = 0;
			$backeryname2 = $backeryname;
			$ort2 = $ort;
			$country2 = $country;
			$GlutenfreiesBrot2 = $GlutenfreiesBrot;
		}else{
			$startpos = ($startpos-1) * 20;
			$startpos = $startpos + 1;
			// $backeryname = $backeryname2;
			// $ort = $ort2;
			// $country = $country2;
			// $GlutenfreiesBrot = $GlutenfreiesBrot2;
		}
		
        if($GlutenfreiesBrot==''){
        	$GlutenfreiesBrot = 0;
        }

        if($backeryname!='' && $ort!='' && $country!=''){

			$query->matching(
	     		$query->logicalAnd(
	 				$query->like('title','%' . $backeryname . '%' ,$caseSensitive = TRUE),
	 				$query->like('ort', '%' . $ort . '%' , $caseSensitive = TRUE),
	 				$query->like('region', '%' . $country . '%' , $caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }elseif($backeryname!='' && $ort=='' && $country==''){
        	$query->matching(
	     		$query->logicalAnd(
	 				$query->like('title','%' . $backeryname . '%' ,$caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }elseif($backeryname=='' && $ort!='' && $country==''){
        	$query->matching(
	     		$query->logicalAnd(
	 				$query->like('ort','%' . $ort . '%' ,$caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }elseif($backeryname=='' && $ort=='' && $country!=''){
        	//print_r($country);die;
        	$query->matching(
	     		$query->logicalAnd(
	 				$query->like('region','%' . $country . '%' ,$caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }elseif($backeryname!='' && $ort!='' && $country==''){
        	$query->matching(
	     		$query->logicalAnd(
	 				$query->like('title','%' . $backeryname . '%' ,$caseSensitive = TRUE),
	 				$query->like('ort','%' . $ort . '%' ,$caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }elseif($backeryname!='' && $ort=='' && $country!=''){
        	$query->matching(
	     		$query->logicalAnd(
	 				$query->like('title','%' . $backeryname . '%' ,$caseSensitive = TRUE),
	 				$query->like('region','%' . $country . '%' ,$caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }elseif($backeryname=='' && $ort!='' && $country!=''){
        	$query->matching(
	     		$query->logicalAnd(
	 				$query->like('ort','%' . $ort . '%' ,$caseSensitive = TRUE),
	 				$query->like('region','%' . $country . '%' ,$caseSensitive = TRUE),
		        	$query->equals('glutenfrei', $GlutenfreiesBrot)
			    )
			);
        }else{
        	$query->matching($query->equals('glutenfrei', $GlutenfreiesBrot));
        }
        $totalrec = count($query->execute());
        if($totalrec>20){
        	$pagecount = $totalrec / 20;	
        }else{
        	$pagecount = 0;
        }

        $query->setOffset($startpos);
		$query->setLimit(20);

		// $query->setOrderings(
		//     array(
		//         'title' => \Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
		//     )
		// );

		$result['data'] = $query->execute();

		$cont = 1;
		if($pagecount!=0){
			while($cont <= (int)ceil($pagecount)){
				$cont = $cont+1;
				$result['page'][] = $cont;
			}
			$result['backeryname'] = $backeryname;
			$result['ort'] = $ort;
			$result['country'] = $country;
			$result['GlutenfreiesBrot'] = $GlutenfreiesBrot;
		}

        return $result;
    }
}