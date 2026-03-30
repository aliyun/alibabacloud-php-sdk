<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class ListWarehouseShrinkRequest extends Model
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
     * @var string
     */
    public $warehouseInstanceIdsShrink;

    /**
     * @var string
     */
    public $warehouseTypesShrink;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'warehouseInstanceIdsShrink' => 'WarehouseInstanceIds',
        'warehouseTypesShrink' => 'WarehouseTypes',
    ];

    public function validate()
    {
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

        if (null !== $this->warehouseInstanceIdsShrink) {
            $res['WarehouseInstanceIds'] = $this->warehouseInstanceIdsShrink;
        }

        if (null !== $this->warehouseTypesShrink) {
            $res['WarehouseTypes'] = $this->warehouseTypesShrink;
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
            $model->warehouseInstanceIdsShrink = $map['WarehouseInstanceIds'];
        }

        if (isset($map['WarehouseTypes'])) {
            $model->warehouseTypesShrink = $map['WarehouseTypes'];
        }

        return $model;
    }
}
