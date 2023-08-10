<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataInitializationDetailList;

use AlibabaCloud\Tea\Model;

class dataInitializationDetail extends Model
{
    /**
     * @description The name of the database to which the migration object in the destination instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @description The error message returned if full data migration failed.
     *
     * @example java.lang.NumberFormatException: For input string: ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The number of records that have been migrated.
     *
     * @example 200001
     *
     * @var string
     */
    public $finishRowNum;

    /**
     * @description The time taken by full data migration.
     *
     * @example 0.0
     *
     * @var string
     */
    public $migrationTime;

    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The status of full data migration. Valid values:
     *
     * - **NotStarted**: Full data migration is not started.
     * - **Migrating**: Full data migration is in progress.
     * - **Failed**: Full data migration failed.
     * - **Finished**: Full data migration is completed.
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The table name.
     *
     * @example customer
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The total number of records that are supposed to be migrated by the task.
     *
     * @example 201477
     *
     * @var string
     */
    public $totalRowNum;
    protected $_name = [
        'destinationOwnerDBName' => 'DestinationOwnerDBName',
        'errorMessage'           => 'ErrorMessage',
        'finishRowNum'           => 'FinishRowNum',
        'migrationTime'          => 'MigrationTime',
        'sourceOwnerDBName'      => 'SourceOwnerDBName',
        'status'                 => 'Status',
        'tableName'              => 'TableName',
        'totalRowNum'            => 'TotalRowNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationOwnerDBName) {
            $res['DestinationOwnerDBName'] = $this->destinationOwnerDBName;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->finishRowNum) {
            $res['FinishRowNum'] = $this->finishRowNum;
        }
        if (null !== $this->migrationTime) {
            $res['MigrationTime'] = $this->migrationTime;
        }
        if (null !== $this->sourceOwnerDBName) {
            $res['SourceOwnerDBName'] = $this->sourceOwnerDBName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->totalRowNum) {
            $res['TotalRowNum'] = $this->totalRowNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInitializationDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationOwnerDBName'])) {
            $model->destinationOwnerDBName = $map['DestinationOwnerDBName'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FinishRowNum'])) {
            $model->finishRowNum = $map['FinishRowNum'];
        }
        if (isset($map['MigrationTime'])) {
            $model->migrationTime = $map['MigrationTime'];
        }
        if (isset($map['SourceOwnerDBName'])) {
            $model->sourceOwnerDBName = $map['SourceOwnerDBName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TotalRowNum'])) {
            $model->totalRowNum = $map['TotalRowNum'];
        }

        return $model;
    }
}
