<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody\virtualPhysicalConnections;
use AlibabaCloud\Tea\Model;

class ListVirtualPhysicalConnectionsResponseBody extends Model
{
    /**
     * @description The number of entries returned in this query.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If the value of **NextToken** is not returned, it indicates that no next query is to be sent.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example dd20****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 2A55F69E-EE3D-5CBE-8805-734F7D5B46B9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The list of hosted connections returned.
     *
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
