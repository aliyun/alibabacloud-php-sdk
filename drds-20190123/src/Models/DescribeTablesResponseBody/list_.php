<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description Indicates whether full table scanning is allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $allowFullTableScan;

    /**
     * @description Indicates whether the table is a replicated table.
     *
     * @example false
     *
     * @var bool
     */
    public $broadcast;

    /**
     * @description The type of the PolarDB-X 1.0 instance. Valid values:
     *
     *   0: The instance is a dedicated instance.
     *   1: The instance is a shard instance.
     *
     * @example 0
     *
     * @var int
     */
    public $dbInstType;

    /**
     * @description Indicates whether the table is locked.
     *
     * @example false
     *
     * @var bool
     */
    public $isLocked;

    /**
     * @description Indicates whether the table is sharded.
     *
     * @example false
     *
     * @var bool
     */
    public $isShard;

    /**
     * @description The shard key of the table.
     *
     * @example null
     *
     * @var string
     */
    public $shardKey;

    /**
     * @description Indicates whether sharding tasks are performed on the table. Valid values:
     *
     *   0: No sharding task is performed on the table.
     *   1: Sharding tasks are performed on the table.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'allowFullTableScan' => 'AllowFullTableScan',
        'broadcast'          => 'Broadcast',
        'dbInstType'         => 'DbInstType',
        'isLocked'           => 'IsLocked',
        'isShard'            => 'IsShard',
        'shardKey'           => 'ShardKey',
        'status'             => 'Status',
        'table'              => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowFullTableScan) {
            $res['AllowFullTableScan'] = $this->allowFullTableScan;
        }
        if (null !== $this->broadcast) {
            $res['Broadcast'] = $this->broadcast;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->isLocked) {
            $res['IsLocked'] = $this->isLocked;
        }
        if (null !== $this->isShard) {
            $res['IsShard'] = $this->isShard;
        }
        if (null !== $this->shardKey) {
            $res['ShardKey'] = $this->shardKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowFullTableScan'])) {
            $model->allowFullTableScan = $map['AllowFullTableScan'];
        }
        if (isset($map['Broadcast'])) {
            $model->broadcast = $map['Broadcast'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['IsLocked'])) {
            $model->isLocked = $map['IsLocked'];
        }
        if (isset($map['IsShard'])) {
            $model->isShard = $map['IsShard'];
        }
        if (isset($map['ShardKey'])) {
            $model->shardKey = $map['ShardKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
