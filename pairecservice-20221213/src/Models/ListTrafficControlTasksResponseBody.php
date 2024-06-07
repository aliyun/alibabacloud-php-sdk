<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksResponseBody\trafficControlTasks;
use AlibabaCloud\Tea\Model;

class ListTrafficControlTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var trafficControlTasks[]
     */
    public $trafficControlTasks;
    protected $_name = [
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
        'trafficControlTasks' => 'TrafficControlTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trafficControlTasks) {
            $res['TrafficControlTasks'] = [];
            if (null !== $this->trafficControlTasks && \is_array($this->trafficControlTasks)) {
                $n = 0;
                foreach ($this->trafficControlTasks as $item) {
                    $res['TrafficControlTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficControlTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrafficControlTasks'])) {
            if (!empty($map['TrafficControlTasks'])) {
                $model->trafficControlTasks = [];
                $n                          = 0;
                foreach ($map['TrafficControlTasks'] as $item) {
                    $model->trafficControlTasks[$n++] = null !== $item ? trafficControlTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
