<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTimeSeriesDataResponseBody\data;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTimeSeriesDataResponseBody\summarizedData;

class DescribeSiteTimeSeriesDataResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $samplingRate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var summarizedData[]
     */
    public $summarizedData;
    protected $_name = [
        'data' => 'Data',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'requestId' => 'RequestId',
        'samplingRate' => 'SamplingRate',
        'startTime' => 'StartTime',
        'summarizedData' => 'SummarizedData',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->summarizedData)) {
            Model::validateArray($this->summarizedData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->summarizedData) {
            if (\is_array($this->summarizedData)) {
                $res['SummarizedData'] = [];
                $n1 = 0;
                foreach ($this->summarizedData as $item1) {
                    $res['SummarizedData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SummarizedData'])) {
            if (!empty($map['SummarizedData'])) {
                $model->summarizedData = [];
                $n1 = 0;
                foreach ($map['SummarizedData'] as $item1) {
                    $model->summarizedData[$n1] = summarizedData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
