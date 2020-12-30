<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody\pushInfos;
use AlibabaCloud\Tea\Model;

class QueryPushRecordsResponseBody extends Model
{
    /**
     * @var pushInfos
     */
    public $pushInfos;

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
    protected $_name = [
        'pushInfos' => 'PushInfos',
        'nextToken' => 'NextToken',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'total'     => 'Total',
        'page'      => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushInfos) {
            $res['PushInfos'] = null !== $this->pushInfos ? $this->pushInfos->toMap() : null;
        }
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
        if (isset($map['PushInfos'])) {
            $model->pushInfos = pushInfos::fromMap($map['PushInfos']);
        }
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

        return $model;
    }
}
