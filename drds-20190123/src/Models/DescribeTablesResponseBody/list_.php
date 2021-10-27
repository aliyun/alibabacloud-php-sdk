<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $allowFullTableScan;

    /**
     * @var bool
     */
    public $broadcast;

    /**
     * @var int
     */
    public $dbInstType;

    /**
     * @var bool
     */
    public $isLocked;

    /**
     * @var bool
     */
    public $isShard;

    /**
     * @var string
     */
    public $shardKey;

    /**
     * @var int
     */
    public $status;

    /**
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
