<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescribeInitializationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class dataInitializationDetails extends Model
{
    /**
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishRowNum;

    /**
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $totalRowNum;

    /**
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
