<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairSkvDdbTableResponseBody\tables;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairSkvDdbTableResponseBody\tables\table\globalSecondaryIndexList;

class table extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var globalSecondaryIndexList
     */
    public $globalSecondaryIndexList;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'connections' => 'Connections',
        'globalSecondaryIndexList' => 'GlobalSecondaryIndexList',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (null !== $this->globalSecondaryIndexList) {
            $this->globalSecondaryIndexList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }

        if (null !== $this->globalSecondaryIndexList) {
            $res['GlobalSecondaryIndexList'] = null !== $this->globalSecondaryIndexList ? $this->globalSecondaryIndexList->toArray($noStream) : $this->globalSecondaryIndexList;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }

        if (isset($map['GlobalSecondaryIndexList'])) {
            $model->globalSecondaryIndexList = globalSecondaryIndexList::fromMap($map['GlobalSecondaryIndexList']);
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
