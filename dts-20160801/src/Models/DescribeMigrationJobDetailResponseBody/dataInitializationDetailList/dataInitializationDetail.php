<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobDetailResponseBody\dataInitializationDetailList;

use AlibabaCloud\Tea\Model;

class dataInitializationDetail extends Model
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
    public $migrationTime;

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
