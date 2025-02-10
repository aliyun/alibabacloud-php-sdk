<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody\virtualPhysicalConnections;

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
        if (\is_array($this->virtualPhysicalConnections)) {
            Model::validateArray($this->virtualPhysicalConnections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->virtualPhysicalConnections)) {
                $res['VirtualPhysicalConnections'] = [];
                $n1                                = 0;
                foreach ($this->virtualPhysicalConnections as $item1) {
                    $res['VirtualPhysicalConnections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                                = 0;
                foreach ($map['VirtualPhysicalConnections'] as $item1) {
                    $model->virtualPhysicalConnections[$n1++] = virtualPhysicalConnections::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
