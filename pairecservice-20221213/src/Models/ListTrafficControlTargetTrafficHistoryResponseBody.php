<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTargetTrafficHistoryResponseBody\trafficControlTaskTrafficHistories;

class ListTrafficControlTargetTrafficHistoryResponseBody extends Model
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
     * @var trafficControlTaskTrafficHistories[]
     */
    public $trafficControlTaskTrafficHistories;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trafficControlTaskTrafficHistories' => 'TrafficControlTaskTrafficHistories',
    ];

    public function validate()
    {
        if (\is_array($this->trafficControlTaskTrafficHistories)) {
            Model::validateArray($this->trafficControlTaskTrafficHistories);
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

        if (null !== $this->trafficControlTaskTrafficHistories) {
            if (\is_array($this->trafficControlTaskTrafficHistories)) {
                $res['TrafficControlTaskTrafficHistories'] = [];
                $n1 = 0;
                foreach ($this->trafficControlTaskTrafficHistories as $item1) {
                    $res['TrafficControlTaskTrafficHistories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TrafficControlTaskTrafficHistories'])) {
            if (!empty($map['TrafficControlTaskTrafficHistories'])) {
                $model->trafficControlTaskTrafficHistories = [];
                $n1 = 0;
                foreach ($map['TrafficControlTaskTrafficHistories'] as $item1) {
                    $model->trafficControlTaskTrafficHistories[$n1++] = trafficControlTaskTrafficHistories::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
