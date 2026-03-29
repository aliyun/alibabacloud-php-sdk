<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetDataDiagnosisResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $cycleTime;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $leftTableMetaId;

    /**
     * @var string
     */
    public $leftTablePartitionField;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $partitionField;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rightTableMetaId;

    /**
     * @var string
     */
    public $rightTablePartitionField;

    /**
     * @var string
     */
    public $tableMetaId;

    /**
     * @var string
     */
    public $tableMetaName;

    /**
     * @var int
     */
    public $topNQuantity;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'cycleTime' => 'CycleTime',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'leftTableMetaId' => 'LeftTableMetaId',
        'leftTablePartitionField' => 'LeftTablePartitionField',
        'name' => 'Name',
        'partitionField' => 'PartitionField',
        'requestId' => 'RequestId',
        'rightTableMetaId' => 'RightTableMetaId',
        'rightTablePartitionField' => 'RightTablePartitionField',
        'tableMetaId' => 'TableMetaId',
        'tableMetaName' => 'TableMetaName',
        'topNQuantity' => 'TopNQuantity',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->cycleTime) {
            $res['CycleTime'] = $this->cycleTime;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->leftTableMetaId) {
            $res['LeftTableMetaId'] = $this->leftTableMetaId;
        }

        if (null !== $this->leftTablePartitionField) {
            $res['LeftTablePartitionField'] = $this->leftTablePartitionField;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partitionField) {
            $res['PartitionField'] = $this->partitionField;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rightTableMetaId) {
            $res['RightTableMetaId'] = $this->rightTableMetaId;
        }

        if (null !== $this->rightTablePartitionField) {
            $res['RightTablePartitionField'] = $this->rightTablePartitionField;
        }

        if (null !== $this->tableMetaId) {
            $res['TableMetaId'] = $this->tableMetaId;
        }

        if (null !== $this->tableMetaName) {
            $res['TableMetaName'] = $this->tableMetaName;
        }

        if (null !== $this->topNQuantity) {
            $res['TopNQuantity'] = $this->topNQuantity;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['CycleTime'])) {
            $model->cycleTime = $map['CycleTime'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['LeftTableMetaId'])) {
            $model->leftTableMetaId = $map['LeftTableMetaId'];
        }

        if (isset($map['LeftTablePartitionField'])) {
            $model->leftTablePartitionField = $map['LeftTablePartitionField'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartitionField'])) {
            $model->partitionField = $map['PartitionField'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RightTableMetaId'])) {
            $model->rightTableMetaId = $map['RightTableMetaId'];
        }

        if (isset($map['RightTablePartitionField'])) {
            $model->rightTablePartitionField = $map['RightTablePartitionField'];
        }

        if (isset($map['TableMetaId'])) {
            $model->tableMetaId = $map['TableMetaId'];
        }

        if (isset($map['TableMetaName'])) {
            $model->tableMetaName = $map['TableMetaName'];
        }

        if (isset($map['TopNQuantity'])) {
            $model->topNQuantity = $map['TopNQuantity'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
