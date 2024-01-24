<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ValidateShardTaskRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds23ds****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region where the PolarDB-X 1.0 instance is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the table or table shard on which you want to perform the task.
     *
     * @example buyer
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The name of the table or table shard on which you perform the task.
     *
     * @example buyer_new
     *
     * @var string
     */
    public $targetTableName;

    /**
     * @description The type of the task. Valid values:
     *
     *   **SINGLE_TO_SHARD**: converts a single table to a table shard.
     *   **SHARD_TO_SINGLE**: converts a table shard to a single table.
     *   **SHARD_TO_SHARD**: converts a table shard to another table shard.
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
     * @return ValidateShardTaskRequest
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
