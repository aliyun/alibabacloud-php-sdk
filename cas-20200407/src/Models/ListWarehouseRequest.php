<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class ListWarehouseRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $warehouseInstanceIds;

    /**
     * @var string[]
     */
    public $warehouseTypes;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'warehouseInstanceIds' => 'WarehouseInstanceIds',
        'warehouseTypes' => 'WarehouseTypes',
    ];

    public function validate()
    {
        if (\is_array($this->warehouseInstanceIds)) {
            Model::validateArray($this->warehouseInstanceIds);
        }
        if (\is_array($this->warehouseTypes)) {
            Model::validateArray($this->warehouseTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->warehouseInstanceIds) {
            if (\is_array($this->warehouseInstanceIds)) {
                $res['WarehouseInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->warehouseInstanceIds as $item1) {
                    $res['WarehouseInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warehouseTypes) {
            if (\is_array($this->warehouseTypes)) {
                $res['WarehouseTypes'] = [];
                $n1 = 0;
                foreach ($this->warehouseTypes as $item1) {
                    $res['WarehouseTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['WarehouseInstanceIds'])) {
            if (!empty($map['WarehouseInstanceIds'])) {
                $model->warehouseInstanceIds = [];
                $n1 = 0;
                foreach ($map['WarehouseInstanceIds'] as $item1) {
                    $model->warehouseInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WarehouseTypes'])) {
            if (!empty($map['WarehouseTypes'])) {
                $model->warehouseTypes = [];
                $n1 = 0;
                foreach ($map['WarehouseTypes'] as $item1) {
                    $model->warehouseTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
