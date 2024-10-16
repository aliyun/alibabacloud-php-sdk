<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListListenersResponseBody\listeners;
use AlibabaCloud\Tea\Model;

class ListListenersResponseBody extends Model
{
    /**
     * @var listeners[]
     */
    public $listeners;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 5c281c0a0d6bfb6355ed088c2108aca8e0b5e8707e68****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 7DBFC67C-A272-5952-8287-6C3EBE4E04D9
     *
     * @var string
     */
    public $requestId;

    /**
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
