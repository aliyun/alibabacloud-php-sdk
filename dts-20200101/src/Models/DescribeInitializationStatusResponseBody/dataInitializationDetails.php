<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class dataInitializationDetails extends Model
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
     * @description The error message returned if initial full data synchronization failed.
     *
     * @example java.lang.NumberFormatException: For input string: ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The total number of rows that are actually synchronized.
     *
     * >  This parameter indicates the total number of actually synchronized rows. In contrast, the value of the **TotalRowNum** parameter is calculated based on the system tables in the source database. The values of the two parameters may be different due to time difference.
     * @example 9993
     *
     * @var string
     */
    public $finishRowNum;

    /**
     * @description The name of the database to which the object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The status of initial full data synchronization. Valid values:
     *
     *   **NotStarted**
     *   **Migrating**
     *   **Failed**
     *   **Finished**
     *
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
     * @description The total number of rows that are supposed to be synchronized.
     *
     * >  The value of this parameter is calculated based on the system tables in the source database. In contrast, the **FinishRowNum** parameter indicates the total number of actually synchronized rows. The values of the two parameters may be different due to time difference.
     * @example 9981
     *
     * @var string
     */
    public $totalRowNum;

    /**
     * @description The time spent on full data synchronization.
     *
     * @example 0.0
     *
     * @var string
     */
    public $usedTime;
    protected $_name = [
        'destinationOwnerDBName' => 'DestinationOwnerDBName',
        'errorMessage'           => 'ErrorMessage',
        'finishRowNum'           => 'FinishRowNum',
        'sourceOwnerDBName'      => 'SourceOwnerDBName',
        'status'                 => 'Status',
        'tableName'              => 'TableName',
        'totalRowNum'            => 'TotalRowNum',
        'usedTime'               => 'UsedTime',
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
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInitializationDetails
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
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
