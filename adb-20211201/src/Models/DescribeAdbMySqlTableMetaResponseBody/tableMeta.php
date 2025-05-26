<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlTableMetaResponseBody;

use AlibabaCloud\Dara\Model;

class tableMeta extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $distributeColumn;

    /**
     * @var string
     */
    public $distributeType;

    /**
     * @var bool
     */
    public $isAllIndex;

    /**
     * @var bool
     */
    public $isDictEncode;

    /**
     * @var bool
     */
    public $isFullTextDict;

    /**
     * @var bool
     */
    public $isHidden;

    /**
     * @var string
     */
    public $partitionColumn;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $primaryKeyColumn;

    /**
     * @var string
     */
    public $tableEngine;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableSchema;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'distributeColumn' => 'DistributeColumn',
        'distributeType' => 'DistributeType',
        'isAllIndex' => 'IsAllIndex',
        'isDictEncode' => 'IsDictEncode',
        'isFullTextDict' => 'IsFullTextDict',
        'isHidden' => 'IsHidden',
        'partitionColumn' => 'PartitionColumn',
        'partitionType' => 'PartitionType',
        'primaryKeyColumn' => 'PrimaryKeyColumn',
        'tableEngine' => 'TableEngine',
        'tableName' => 'TableName',
        'tableSchema' => 'TableSchema',
        'tableType' => 'TableType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->distributeColumn) {
            $res['DistributeColumn'] = $this->distributeColumn;
        }

        if (null !== $this->distributeType) {
            $res['DistributeType'] = $this->distributeType;
        }

        if (null !== $this->isAllIndex) {
            $res['IsAllIndex'] = $this->isAllIndex;
        }

        if (null !== $this->isDictEncode) {
            $res['IsDictEncode'] = $this->isDictEncode;
        }

        if (null !== $this->isFullTextDict) {
            $res['IsFullTextDict'] = $this->isFullTextDict;
        }

        if (null !== $this->isHidden) {
            $res['IsHidden'] = $this->isHidden;
        }

        if (null !== $this->partitionColumn) {
            $res['PartitionColumn'] = $this->partitionColumn;
        }

        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }

        if (null !== $this->primaryKeyColumn) {
            $res['PrimaryKeyColumn'] = $this->primaryKeyColumn;
        }

        if (null !== $this->tableEngine) {
            $res['TableEngine'] = $this->tableEngine;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableSchema) {
            $res['TableSchema'] = $this->tableSchema;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DistributeColumn'])) {
            $model->distributeColumn = $map['DistributeColumn'];
        }

        if (isset($map['DistributeType'])) {
            $model->distributeType = $map['DistributeType'];
        }

        if (isset($map['IsAllIndex'])) {
            $model->isAllIndex = $map['IsAllIndex'];
        }

        if (isset($map['IsDictEncode'])) {
            $model->isDictEncode = $map['IsDictEncode'];
        }

        if (isset($map['IsFullTextDict'])) {
            $model->isFullTextDict = $map['IsFullTextDict'];
        }

        if (isset($map['IsHidden'])) {
            $model->isHidden = $map['IsHidden'];
        }

        if (isset($map['PartitionColumn'])) {
            $model->partitionColumn = $map['PartitionColumn'];
        }

        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }

        if (isset($map['PrimaryKeyColumn'])) {
            $model->primaryKeyColumn = $map['PrimaryKeyColumn'];
        }

        if (isset($map['TableEngine'])) {
            $model->tableEngine = $map['TableEngine'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableSchema'])) {
            $model->tableSchema = $map['TableSchema'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
