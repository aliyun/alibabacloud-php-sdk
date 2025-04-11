<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody\transitRouterRouteEntries;

class ListTransitRouterRouteEntriesResponseBody extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var transitRouterRouteEntries[]
     */
    public $transitRouterRouteEntries;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'transitRouterRouteEntries' => 'TransitRouterRouteEntries',
    ];

    public function validate()
    {
        if (\is_array($this->transitRouterRouteEntries)) {
            Model::validateArray($this->transitRouterRouteEntries);
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->transitRouterRouteEntries) {
            if (\is_array($this->transitRouterRouteEntries)) {
                $res['TransitRouterRouteEntries'] = [];
                $n1 = 0;
                foreach ($this->transitRouterRouteEntries as $item1) {
                    $res['TransitRouterRouteEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TransitRouterRouteEntries'])) {
            if (!empty($map['TransitRouterRouteEntries'])) {
                $model->transitRouterRouteEntries = [];
                $n1 = 0;
                foreach ($map['TransitRouterRouteEntries'] as $item1) {
                    $model->transitRouterRouteEntries[$n1++] = transitRouterRouteEntries::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
