<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListReservedCapacitiesRequest extends Model
{
    /**
     * @description The maximum number of resources to return. Valid values: 1 to 100.
     *
     * @example 20
     *
     * @var string
     */
    public $limit;

    /**
     * @description The token that determines the start point of the query.
     *
     * @example 8bj81uI8n****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReservedCapacitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
