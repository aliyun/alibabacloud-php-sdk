<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRouteTableListResponseBody\routeTableList;

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

    public function validate()
    {
        if (\is_array($this->routeTableList)) {
            Model::validateArray($this->routeTableList);
        }
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routeTableList) {
            if (\is_array($this->routeTableList)) {
                $res['RouteTableList'] = [];
                $n1 = 0;
                foreach ($this->routeTableList as $item1) {
                    $res['RouteTableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouteTableList'])) {
            if (!empty($map['RouteTableList'])) {
                $model->routeTableList = [];
                $n1 = 0;
                foreach ($map['RouteTableList'] as $item1) {
                    $model->routeTableList[$n1] = routeTableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
