<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataSynchronizationDetailList;

use AlibabaCloud\Tea\Model;

class dataSynchronizationDetail extends Model
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
     * @description The error message returned if incremental data migration failed.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The status of incremental data migration. Valid values:
     *
     *   **NotStarted**: Incremental data migration is not started.
     *   **Migrating**: Incremental data migration is in progress.
     *   **Failed**: Incremental data migration failed.
     *   **Finished**: Incremental data migration is completed.
     *
     * @example Migrating
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
    protected $_name = [
        'destinationOwnerDBName' => 'DestinationOwnerDBName',
        'errorMessage'           => 'ErrorMessage',
        'sourceOwnerDBName'      => 'SourceOwnerDBName',
        'status'                 => 'Status',
        'tableName'              => 'TableName',
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
        if (null !== $this->sourceOwnerDBName) {
            $res['SourceOwnerDBName'] = $this->sourceOwnerDBName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSynchronizationDetail
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
        if (isset($map['SourceOwnerDBName'])) {
            $model->sourceOwnerDBName = $map['SourceOwnerDBName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
