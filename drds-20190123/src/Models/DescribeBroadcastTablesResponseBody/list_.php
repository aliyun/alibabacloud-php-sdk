<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBroadcastTablesResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $broadcast;

    /**
     * @var string
     */
    public $broadcastType;

    /**
     * @var int
     */
    public $dbInstType;

    /**
     * @var bool
     */
    public $isShard;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'broadcast' => 'Broadcast',
        'broadcastType' => 'BroadcastType',
        'dbInstType' => 'DbInstType',
        'isShard' => 'IsShard',
        'status' => 'Status',
        'table' => 'Table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
