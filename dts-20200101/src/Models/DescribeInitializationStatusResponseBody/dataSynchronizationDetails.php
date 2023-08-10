<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class dataSynchronizationDetails extends Model
{
    /**
     * @description The name of the database to which the object in the destination instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @description The error message returned if incremental data synchronization failed.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the database to which the object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The status of incremental data synchronization. Valid values:
     *
     *   **NotStarted**
     *   **Migrating**
     *   **Failed**
     *   **Finished**
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
     * @return dataSynchronizationDetails
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
