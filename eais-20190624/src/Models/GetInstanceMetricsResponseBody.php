<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponseBody\podMetrics;

class GetInstanceMetricsResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var podMetrics[]
     */
    public $podMetrics;
    /**
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
        if (\is_array($this->podMetrics)) {
            Model::validateArray($this->podMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->podMetrics) {
            if (\is_array($this->podMetrics)) {
                $res['PodMetrics'] = [];
                $n1                = 0;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PodMetrics'])) {
            if (!empty($map['PodMetrics'])) {
                $model->podMetrics = [];
                $n1                = 0;
                foreach ($map['PodMetrics'] as $item1) {
                    $model->podMetrics[$n1++] = podMetrics::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
