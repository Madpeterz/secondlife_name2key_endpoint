<?php
	// Do not edit this file, rerun gen.php to update!
	class group_o_set extends collectionSet
	{
		public function get_object_by_field(string $fieldname,$value) : ?group_o
		{
			return parent::get_object_by_field($fieldname,$value);
		}
		public function get_object_by_id($id=null) : ?group_o
		{
			return parent::get_object_by_id($id);
		}
		public function get_first() : ?group_o
		{
			return parent::get_first();
		}
	}
	
	class group_o extends genClass
	{
		protected $use_table = "group_o";
		protected $dataset = array(
			"id" => array("type"=>"int","value"=>null),
			"uuid" => array("type"=>"str","value"=>null),
			"name" => array("type"=>"str","value"=>null),
		);
		public function get_id() : ?int
		{
			return $this->get_field("id");
		}
		public function get_uuid() : ?string
		{
			return $this->get_field("uuid");
		}
		public function get_name() : ?string
		{
			return $this->get_field("name");
		}
	}
?>