<?php
/*
**************************************************************************************************************************
** CORAL Management Module v. 1.0
**
** Copyright (c) 2010 University of Notre Dame
**
** This file is part of CORAL.
**
** CORAL is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
**
** CORAL is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License along with CORAL.  If not, see <http://www.gnu.org/licenses/>.
**
**************************************************************************************************************************
*/


class Note extends DatabaseObject {

	protected function defineRelationships() {}

	protected function overridePrimaryKeyName() {}

	public function getTypes() {
		$sql = "SELECT * FROM `document_notes_types` ORDER BY `name`";
		if ($result = $this->db->processQuery($sql,'assoc')) {
			if (sizeof($result) > 1) {
				$temp = array();
				foreach ($result as $row) {
					$temp[$row['typeID']] = $row['name'];				
				}				
				return $temp;
			} else {
				return array($result['typeID']=>$result['name']);				
			}
		}
		return false;
	}
}

?>