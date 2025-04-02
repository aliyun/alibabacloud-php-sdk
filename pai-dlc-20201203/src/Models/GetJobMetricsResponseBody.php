<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetJobMetricsResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var PodMetric[]
     */
    public $podMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId' => 'JobId',
        'podMetrics' => 'PodMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->podMetrics)) {
            Model::validateArray($this->podMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->podMetrics) {
            if (\is_array($this->podMetrics)) {
                $res['PodMetrics'] = [];
                $n1 = 0;
                foreach ($this->podMetrics as $item1) {
                    $res['PodMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['PodMetrics'])) {
            if (!empty($map['PodMetrics'])) {
                $model->podMetrics = [];
                $n1 = 0;
                foreach ($map['PodMetrics'] as $item1) {
                    $model->podMetrics[$n1++] = PodMetric::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
