<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners;
use AlibabaCloud\Tea\Model;

class ListListenersResponseBody extends Model
{
    /**
     * @description The listeners.
     *
     * @var listeners[]
     */
    public $listeners;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The position where the query stopped. If this parameter is not returned, all data is queried.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'listeners'  => 'Listeners',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = [];
            if (null !== $this->listeners && \is_array($this->listeners)) {
                $n = 0;
                foreach ($this->listeners as $item) {
                    $res['Listeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListListenersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            if (!empty($map['Listeners'])) {
                $model->listeners = [];
                $n                = 0;
                foreach ($map['Listeners'] as $item) {
                    $model->listeners[$n++] = null !== $item ? listeners::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
