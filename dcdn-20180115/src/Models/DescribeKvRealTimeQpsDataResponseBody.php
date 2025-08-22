<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvRealTimeQpsDataResponseBody\aggregateData;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvRealTimeQpsDataResponseBody\kvQpsData;

class DescribeKvRealTimeQpsDataResponseBody extends Model
{
    /**
     * @var aggregateData[]
     */
    public $aggregateData;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var kvQpsData[]
     */
    public $kvQpsData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'aggregateData' => 'AggregateData',
        'endTime' => 'EndTime',
        'kvQpsData' => 'KvQpsData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->aggregateData)) {
            Model::validateArray($this->aggregateData);
        }
        if (\is_array($this->kvQpsData)) {
            Model::validateArray($this->kvQpsData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregateData) {
            if (\is_array($this->aggregateData)) {
                $res['AggregateData'] = [];
                $n1 = 0;
                foreach ($this->aggregateData as $item1) {
                    $res['AggregateData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->kvQpsData) {
            if (\is_array($this->kvQpsData)) {
                $res['KvQpsData'] = [];
                $n1 = 0;
                foreach ($this->kvQpsData as $item1) {
                    $res['KvQpsData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AggregateData'])) {
            if (!empty($map['AggregateData'])) {
                $model->aggregateData = [];
                $n1 = 0;
                foreach ($map['AggregateData'] as $item1) {
                    $model->aggregateData[$n1] = aggregateData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['KvQpsData'])) {
            if (!empty($map['KvQpsData'])) {
                $model->kvQpsData = [];
                $n1 = 0;
                foreach ($map['KvQpsData'] as $item1) {
                    $model->kvQpsData[$n1] = kvQpsData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
