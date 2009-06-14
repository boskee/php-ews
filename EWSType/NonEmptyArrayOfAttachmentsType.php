<?php
/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfAttachmentsType {
	/**
	 * ItemAttachment property
	 * 
	 * @var EWSType_ItemAttachmentType
	 */
	public $ItemAttachment;

	/**
	 * FileAttachment property
	 * 
	 * @var EWSType_FileAttachmentType
	 */
	public $FileAttachment;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemAttachment',
				'required' => false,
				'type' => 'ItemAttachmentType',
			),
			array(
				'name' => 'FileAttachment',
				'required' => false,
				'type' => 'FileAttachmentType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfAttachmentsType