<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTargetTrafficHistoryResponseBody\trafficControlTaskTrafficHistories;
use AlibabaCloud\Tea\Model;

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
        'requestId'                          => 'RequestId',
        'totalCount'                         => 'TotalCount',
        'trafficControlTaskTrafficHistories' => 'TrafficControlTaskTrafficHistories',
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
        if (null !== $this->trafficControlTaskTrafficHistories) {
            $res['TrafficControlTaskTrafficHistories'] = [];
            if (null !== $this->trafficControlTaskTrafficHistories && \is_array($this->trafficControlTaskTrafficHistories)) {
                $n = 0;
                foreach ($this->trafficControlTaskTrafficHistories as $item) {
                    $res['TrafficControlTaskTrafficHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficControlTargetTrafficHistoryResponseBody
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
        if (isset($map['TrafficControlTaskTrafficHistories'])) {
            if (!empty($map['TrafficControlTaskTrafficHistories'])) {
                $model->trafficControlTaskTrafficHistories = [];
                $n                                         = 0;
                foreach ($map['TrafficControlTaskTrafficHistories'] as $item) {
                    $model->trafficControlTaskTrafficHistories[$n++] = null !== $item ? trafficControlTaskTrafficHistories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
