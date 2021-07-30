<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody\pushInfos;
use AlibabaCloud\Tea\Model;

class QueryPushRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $page;

    /**
     * @var pushInfos
     */
    public $pushInfos;
    protected $_name = [
        'nextToken' => 'NextToken',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'total'     => 'Total',
        'page'      => 'Page',
        'pushInfos' => 'PushInfos',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pushInfos) {
            $res['PushInfos'] = null !== $this->pushInfos ? $this->pushInfos->toMap() : null;
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PushInfos'])) {
            $model->pushInfos = pushInfos::fromMap($map['PushInfos']);
        }

        return $model;
    }
}
