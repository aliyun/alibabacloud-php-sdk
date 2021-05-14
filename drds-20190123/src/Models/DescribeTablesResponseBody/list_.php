<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $isLocked;

    /**
     * @var string
     */
    public $shardKey;

    /**
     * @var bool
     */
    public $isShard;

    /**
     * @var bool
     */
    public $broadcast;

    /**
     * @var bool
     */
    public $allowFullTableScan;

    /**
     * @var string
     */
    public $table;

    /**
     * @var int
     */
    public $dbInstType;
    protected $_name = [
        'status'             => 'Status',
        'isLocked'           => 'IsLocked',
        'shardKey'           => 'ShardKey',
        'isShard'            => 'IsShard',
        'broadcast'          => 'Broadcast',
        'allowFullTableScan' => 'AllowFullTableScan',
        'table'              => 'Table',
        'dbInstType'         => 'DbInstType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isLocked) {
            $res['IsLocked'] = $this->isLocked;
        }
        if (null !== $this->shardKey) {
            $res['ShardKey'] = $this->shardKey;
        }
        if (null !== $this->isShard) {
            $res['IsShard'] = $this->isShard;
        }
        if (null !== $this->broadcast) {
            $res['Broadcast'] = $this->broadcast;
        }
        if (null !== $this->allowFullTableScan) {
            $res['AllowFullTableScan'] = $this->allowFullTableScan;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsLocked'])) {
            $model->isLocked = $map['IsLocked'];
        }
        if (isset($map['ShardKey'])) {
            $model->shardKey = $map['ShardKey'];
        }
        if (isset($map['IsShard'])) {
            $model->isShard = $map['IsShard'];
        }
        if (isset($map['Broadcast'])) {
            $model->broadcast = $map['Broadcast'];
        }
        if (isset($map['AllowFullTableScan'])) {
            $model->allowFullTableScan = $map['AllowFullTableScan'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }

        return $model;
    }
}
