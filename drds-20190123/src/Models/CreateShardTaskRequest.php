<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateShardTaskRequest extends Model
{
    /**
     * @description The name of the DRDS database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the DRDS instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region where the resource group resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the source table.
     *
     * @example test_tb1
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The name of the destination table.
     *
     * @example test_tb2
     *
     * @var string
     */
    public $targetTableName;

    /**
     * @description The type of the task. Valid values:`  SHARD_TO_SINGLE `,`  SINGLE_TO_SHARD `,`  SHARD_TO_SHARD `.
     *
     * @example SINGLE_TO_SHARD
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'dbName'          => 'DbName',
        'drdsInstanceId'  => 'DrdsInstanceId',
        'regionId'        => 'RegionId',
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateShardTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
