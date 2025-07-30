<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobMetricsResponseBody extends Model
{
    /**
     * @description The job ID.
     *
     * @example dlc-20210126170216-*******
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The monitoring metrics of the job.
     *
     * @var PodMetric[]
     */
    public $podMetrics;

    /**
     * @description The request ID. You can troubleshoot issues based on the request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId' => 'JobId',
        'podMetrics' => 'PodMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->podMetrics) {
            $res['PodMetrics'] = [];
            if (null !== $this->podMetrics && \is_array($this->podMetrics)) {
                $n = 0;
                foreach ($this->podMetrics as $item) {
                    $res['PodMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PodMetrics'])) {
            if (!empty($map['PodMetrics'])) {
                $model->podMetrics = [];
                $n = 0;
                foreach ($map['PodMetrics'] as $item) {
                    $model->podMetrics[$n++] = null !== $item ? PodMetric::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
