<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionVersionsRequest extends Model
{
    /**
     * @description The sorting mode of function versions. Valid values: BACKWARD and FORWARD.
     *
     * @example BACKWARD
     *
     * @var string
     */
    public $direction;

    /**
     * @description The number of function versions that are returned.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'direction' => 'direction',
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
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
     * @return ListFunctionVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
