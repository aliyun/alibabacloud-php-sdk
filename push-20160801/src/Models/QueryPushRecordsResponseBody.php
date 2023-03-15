<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody\pushInfos;
use AlibabaCloud\Tea\Model;

class QueryPushRecordsResponseBody extends Model
{
    /**
     * @example i91D***********kXIh/dVBEQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 11
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var pushInfos
     */
    public $pushInfos;

    /**
     * @example 9B24B396-249D-55E4-8CA1-66C9B50BB734
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 193
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'nextToken' => 'NextToken',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'pushInfos' => 'PushInfos',
        'requestId' => 'RequestId',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pushInfos) {
            $res['PushInfos'] = null !== $this->pushInfos ? $this->pushInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPushRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PushInfos'])) {
            $model->pushInfos = pushInfos::fromMap($map['PushInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
