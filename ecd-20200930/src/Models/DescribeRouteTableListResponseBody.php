<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRouteTableListResponseBody\routeTableList;
use AlibabaCloud\Tea\Model;

class DescribeRouteTableListResponseBody extends Model
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
    public $requestId;

    /**
     * @var routeTableList[]
     */
    public $routeTableList;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'routeTableList' => 'RouteTableList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeTableList) {
            $res['RouteTableList'] = [];
            if (null !== $this->routeTableList && \is_array($this->routeTableList)) {
                $n = 0;
                foreach ($this->routeTableList as $item) {
                    $res['RouteTableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteTableListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteTableList'])) {
            if (!empty($map['RouteTableList'])) {
                $model->routeTableList = [];
                $n = 0;
                foreach ($map['RouteTableList'] as $item) {
                    $model->routeTableList[$n++] = null !== $item ? routeTableList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
