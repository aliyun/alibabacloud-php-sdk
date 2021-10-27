<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitTableShardingKeyModifyRequest extends Model
{
    /**
     * @var string
     */
    public $dbComputeLength;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $dbRightShiftOffset;

    /**
     * @var string
     */
    public $dbShardingColumnList;

    /**
     * @var string
     */
    public $dbShardingFunction;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var bool
     */
    public $isShard;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $srcTableName;

    /**
     * @var string
     */
    public $targetTableName;

    /**
     * @var string
     */
    public $tbComputeLength;

    /**
     * @var string
     */
    public $tbPartitions;

    /**
     * @var string
     */
    public $tbRightShiftOffset;

    /**
     * @var string
     */
    public $tbShardingColumnList;

    /**
     * @var string
     */
    public $tbShardingFunction;
    protected $_name = [
        'dbComputeLength'      => 'DbComputeLength',
        'dbName'               => 'DbName',
        'dbRightShiftOffset'   => 'DbRightShiftOffset',
        'dbShardingColumnList' => 'DbShardingColumnList',
        'dbShardingFunction'   => 'DbShardingFunction',
        'drdsInstanceId'       => 'DrdsInstanceId',
        'isShard'              => 'IsShard',
        'regionId'             => 'RegionId',
        'srcTableName'         => 'SrcTableName',
        'targetTableName'      => 'TargetTableName',
        'tbComputeLength'      => 'TbComputeLength',
        'tbPartitions'         => 'TbPartitions',
        'tbRightShiftOffset'   => 'TbRightShiftOffset',
        'tbShardingColumnList' => 'TbShardingColumnList',
        'tbShardingFunction'   => 'TbShardingFunction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbComputeLength) {
            $res['DbComputeLength'] = $this->dbComputeLength;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbRightShiftOffset) {
            $res['DbRightShiftOffset'] = $this->dbRightShiftOffset;
        }
        if (null !== $this->dbShardingColumnList) {
            $res['DbShardingColumnList'] = $this->dbShardingColumnList;
        }
        if (null !== $this->dbShardingFunction) {
            $res['DbShardingFunction'] = $this->dbShardingFunction;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->isShard) {
            $res['IsShard'] = $this->isShard;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcTableName) {
            $res['SrcTableName'] = $this->srcTableName;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }
        if (null !== $this->tbComputeLength) {
            $res['TbComputeLength'] = $this->tbComputeLength;
        }
        if (null !== $this->tbPartitions) {
            $res['TbPartitions'] = $this->tbPartitions;
        }
        if (null !== $this->tbRightShiftOffset) {
            $res['TbRightShiftOffset'] = $this->tbRightShiftOffset;
        }
        if (null !== $this->tbShardingColumnList) {
            $res['TbShardingColumnList'] = $this->tbShardingColumnList;
        }
        if (null !== $this->tbShardingFunction) {
            $res['TbShardingFunction'] = $this->tbShardingFunction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTableShardingKeyModifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbComputeLength'])) {
            $model->dbComputeLength = $map['DbComputeLength'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbRightShiftOffset'])) {
            $model->dbRightShiftOffset = $map['DbRightShiftOffset'];
        }
        if (isset($map['DbShardingColumnList'])) {
            $model->dbShardingColumnList = $map['DbShardingColumnList'];
        }
        if (isset($map['DbShardingFunction'])) {
            $model->dbShardingFunction = $map['DbShardingFunction'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['IsShard'])) {
            $model->isShard = $map['IsShard'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcTableName'])) {
            $model->srcTableName = $map['SrcTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }
        if (isset($map['TbComputeLength'])) {
            $model->tbComputeLength = $map['TbComputeLength'];
        }
        if (isset($map['TbPartitions'])) {
            $model->tbPartitions = $map['TbPartitions'];
        }
        if (isset($map['TbRightShiftOffset'])) {
            $model->tbRightShiftOffset = $map['TbRightShiftOffset'];
        }
        if (isset($map['TbShardingColumnList'])) {
            $model->tbShardingColumnList = $map['TbShardingColumnList'];
        }
        if (isset($map['TbShardingFunction'])) {
            $model->tbShardingFunction = $map['TbShardingFunction'];
        }

        return $model;
    }
}
