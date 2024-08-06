<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ListFlowsRequest extends Model
{
    /**
     * @description The number of workflows that you want to query. Valid values: 1 - 999. Default value: 60.
     *
     * @example 1
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token to start the query.
     *
     * @example flow_nextxxx
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'limit'     => 'Limit',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
