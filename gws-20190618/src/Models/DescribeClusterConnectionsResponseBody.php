<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterConnectionsResponseBody\connections;
use AlibabaCloud\Tea\Model;

class DescribeClusterConnectionsResponseBody extends Model
{
    /**
     * @var connections[]
     */
    public $connections;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $taskFinished;
    protected $_name = [
        'connections'  => 'Connections',
        'totalCount'   => 'TotalCount',
        'taskId'       => 'TaskId',
        'requestId'    => 'RequestId',
        'taskFinished' => 'TaskFinished',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }

        return $model;
    }
}
