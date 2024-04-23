<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsResponseBody\resourceEvents;
use AlibabaCloud\Tea\Model;

class DescribeEventsResponseBody extends Model
{
    /**
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceEvents[]
     */
    public $resourceEvents;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'resourceEvents' => 'ResourceEvents',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceEvents) {
            $res['ResourceEvents'] = [];
            if (null !== $this->resourceEvents && \is_array($this->resourceEvents)) {
                $n = 0;
                foreach ($this->resourceEvents as $item) {
                    $res['ResourceEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceEvents'])) {
            if (!empty($map['ResourceEvents'])) {
                $model->resourceEvents = [];
                $n                     = 0;
                foreach ($map['ResourceEvents'] as $item) {
                    $model->resourceEvents[$n++] = null !== $item ? resourceEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
