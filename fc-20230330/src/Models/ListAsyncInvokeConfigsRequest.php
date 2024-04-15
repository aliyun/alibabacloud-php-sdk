<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListAsyncInvokeConfigsRequest extends Model
{
    /**
     * @description The function name. If you do not configure this parameter, the asynchronous invocation configurations of all functions are displayed.
     *
     * @example my-func
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The maximum number of entries to be returned.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The paging information. This parameter specifies the start point of the query.
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
     * @return ListAsyncInvokeConfigsRequest
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
