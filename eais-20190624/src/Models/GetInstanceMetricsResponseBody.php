<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponseBody\podMetrics;
use AlibabaCloud\Tea\Model;

class GetInstanceMetricsResponseBody extends Model
{
    /**
     * @example eais-bj8b53it29hfhj******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var podMetrics[]
     */
    public $podMetrics;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'podMetrics' => 'PodMetrics',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return GetInstanceMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PodMetrics'])) {
            if (!empty($map['PodMetrics'])) {
                $model->podMetrics = [];
                $n                 = 0;
                foreach ($map['PodMetrics'] as $item) {
                    $model->podMetrics[$n++] = null !== $item ? podMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
