<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList\structureInitializationDetail\constraintList;
use AlibabaCloud\Tea\Model;

class structureInitializationDetail extends Model
{
    /**
     * @description The schema of the migration object.
     *
     * @var constraintList
     */
    public $constraintList;

    /**
     * @description The status of schema migration. Valid values:
     *
     * - **NotStarted**: Schema migration is not started.
     * - **Migrating**: Schema migration is in progress.
     * - **Failed**: Schema migration failed.
     * - **Finished**: Schema migration is completed.
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @description The details of schema migration.
     *
     * @example DTS-1020042 Execute sql error sql: DTS-1020042 Execute sql error sql: ERROR: column \\"id\\" named in key does not exist
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The task has failed for too long and cannot be restored
     *
     * @example CREATE TABLE `dtstestdata`.`customer` (\\n`runoob_id`  int(10) unsigned   auto_increment  COMMENT \\"\\"   NOT NULL   , \\n`runoob_title`  varchar(100)  CHARSET `utf8` COLLATE `utf8_general_ci`    COMMENT \\"\\"   NOT NULL   , \\n`runoob_author1216`  varchar(40)  CHARSET `utf8` COLLATE `utf8_general_ci`    COMMENT \\"\\"   NOT NULL   , \\n`submission_date1216`  date     COMMENT \\"\\"   NULL   \\n, PRIMARY KEY (`runoob_id`)) engine=InnoDB AUTO_INCREMENT=200001 DEFAULT CHARSET=`utf8` DEFAULT COLLATE `utf8_general_ci` ROW_FORMAT= Dynamic comment = \\"\\" ;\\n
     *
     * @var string
     */
    public $objectDefinition;

    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example customer
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The name of the database to which the migration object in the destination instance belongs.
     *
     * @example Table
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The error message returned if incremental data migration failed.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The table name.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'constraintList'         => 'ConstraintList',
        'destinationOwnerDBName' => 'DestinationOwnerDBName',
        'errorMessage'           => 'ErrorMessage',
        'objectDefinition'       => 'ObjectDefinition',
        'objectName'             => 'ObjectName',
        'objectType'             => 'ObjectType',
        'sourceOwnerDBName'      => 'SourceOwnerDBName',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraintList) {
            $res['ConstraintList'] = null !== $this->constraintList ? $this->constraintList->toMap() : null;
        }
        if (null !== $this->destinationOwnerDBName) {
            $res['DestinationOwnerDBName'] = $this->destinationOwnerDBName;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->objectDefinition) {
            $res['ObjectDefinition'] = $this->objectDefinition;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->sourceOwnerDBName) {
            $res['SourceOwnerDBName'] = $this->sourceOwnerDBName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structureInitializationDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstraintList'])) {
            $model->constraintList = constraintList::fromMap($map['ConstraintList']);
        }
        if (isset($map['DestinationOwnerDBName'])) {
            $model->destinationOwnerDBName = $map['DestinationOwnerDBName'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ObjectDefinition'])) {
            $model->objectDefinition = $map['ObjectDefinition'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['SourceOwnerDBName'])) {
            $model->sourceOwnerDBName = $map['SourceOwnerDBName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
