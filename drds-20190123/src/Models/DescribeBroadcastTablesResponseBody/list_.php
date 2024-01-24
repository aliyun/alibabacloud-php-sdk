<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBroadcastTablesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description Indicates whether a table is a broadcast table.
     *
     * @example true
     *
     * @var bool
     */
    public $broadcast;

    /**
     * @description Indicates the type of the broadcast table. Valid values:
     *
     *   **1**: multi-write mode
     *   **2**: synchronous mode
     *
     * @example 1
     *
     * @var string
     */
    public $broadcastType;

    /**
     * @description Indicates the storage type of the database. Valid values:
     *
     *   **0**: RDS
     *   **4**: PolarDB
     *
     * @example 0
     *
     * @var int
     */
    public $dbInstType;

    /**
     * @description Indicates whether the broadcast table was sharded.
     *
     * @example false
     *
     * @var bool
     */
    public $isShard;

    /**
     * @description Indicates the activation state of the broadcast table. Valid values:
     *
     *   **1**: The broadcast table is activated.
     *   **2**: The broadcast table is being activated.
     *   **3**: An exception occurs when the broadcast table is being activated.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description Indicates the name of the table.
     *
     * @example nation
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'broadcast'     => 'Broadcast',
        'broadcastType' => 'BroadcastType',
        'dbInstType'    => 'DbInstType',
        'isShard'       => 'IsShard',
        'status'        => 'Status',
        'table'         => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->broadcast) {
            $res['Broadcast'] = $this->broadcast;
        }
        if (null !== $this->broadcastType) {
            $res['BroadcastType'] = $this->broadcastType;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->isShard) {
            $res['IsShard'] = $this->isShard;
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
        if (isset($map['Broadcast'])) {
            $model->broadcast = $map['Broadcast'];
        }
        if (isset($map['BroadcastType'])) {
            $model->broadcastType = $map['BroadcastType'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['IsShard'])) {
            $model->isShard = $map['IsShard'];
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
