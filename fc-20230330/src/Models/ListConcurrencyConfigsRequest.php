<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListConcurrencyConfigsRequest extends Model
{
    /**
     * @description The function name. If you leave this parameter empty, the concurrency configurations of all functions are returned.
     *
     * @example my-func
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The maximum number of entries returned.
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
        'functionName' => 'functionName',
        'limit'        => 'limit',
        'nextToken'    => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
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
     * @return ListConcurrencyConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
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
