<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody\virtualPhysicalConnections;
use AlibabaCloud\Tea\Model;

class ListVirtualPhysicalConnectionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

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
     * @var virtualPhysicalConnections[]
     */
    public $virtualPhysicalConnections;
    protected $_name = [
        'count'                      => 'Count',
        'nextToken'                  => 'NextToken',
        'requestId'                  => 'RequestId',
        'totalCount'                 => 'TotalCount',
        'virtualPhysicalConnections' => 'VirtualPhysicalConnections',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (null !== $this->virtualPhysicalConnections) {
            $res['VirtualPhysicalConnections'] = [];
            if (null !== $this->virtualPhysicalConnections && \is_array($this->virtualPhysicalConnections)) {
                $n = 0;
                foreach ($this->virtualPhysicalConnections as $item) {
                    $res['VirtualPhysicalConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualPhysicalConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['VirtualPhysicalConnections'])) {
            if (!empty($map['VirtualPhysicalConnections'])) {
                $model->virtualPhysicalConnections = [];
                $n                                 = 0;
                foreach ($map['VirtualPhysicalConnections'] as $item) {
                    $model->virtualPhysicalConnections[$n++] = null !== $item ? virtualPhysicalConnections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
