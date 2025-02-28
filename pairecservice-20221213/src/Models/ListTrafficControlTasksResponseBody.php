<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksResponseBody\trafficControlTasks;

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
        if (\is_array($this->trafficControlTasks)) {
            Model::validateArray($this->trafficControlTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trafficControlTasks) {
            if (\is_array($this->trafficControlTasks)) {
                $res['TrafficControlTasks'] = [];
                $n1                         = 0;
                foreach ($this->trafficControlTasks as $item1) {
                    $res['TrafficControlTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrafficControlTasks'])) {
            if (!empty($map['TrafficControlTasks'])) {
                $model->trafficControlTasks = [];
                $n1                         = 0;
                foreach ($map['TrafficControlTasks'] as $item1) {
                    $model->trafficControlTasks[$n1++] = trafficControlTasks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
