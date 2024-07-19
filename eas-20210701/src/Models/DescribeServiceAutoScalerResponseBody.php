<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponseBody\currentMetrics;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponseBody\scaleStrategies;
use AlibabaCloud\Tea\Model;

class DescribeServiceAutoScalerResponseBody extends Model
{
    /**
     * @description The additional information about the Autoscaler policy, such as the interval of triggering Autoscaler.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $behavior;

    /**
     * @description The metrics.
     *
     * @var currentMetrics[]
     */
    public $currentMetrics;

    /**
     * @description The maximum number of instances in the service.
     *
     * @example 8
     *
     * @var int
     */
    public $maxReplica;

    /**
     * @description The minimum number of instances in the service.
     *
     * @example 3
     *
     * @var int
     */
    public $minReplica;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The auto scaling policies.
     *
     * @var scaleStrategies[]
     */
    public $scaleStrategies;

    /**
     * @description The service name.
     *
     * @example foo
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'behavior'        => 'Behavior',
        'currentMetrics'  => 'CurrentMetrics',
        'maxReplica'      => 'MaxReplica',
        'minReplica'      => 'MinReplica',
        'requestId'       => 'RequestId',
        'scaleStrategies' => 'ScaleStrategies',
        'serviceName'     => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->behavior) {
            $res['Behavior'] = $this->behavior;
        }
        if (null !== $this->currentMetrics) {
            $res['CurrentMetrics'] = [];
            if (null !== $this->currentMetrics && \is_array($this->currentMetrics)) {
                $n = 0;
                foreach ($this->currentMetrics as $item) {
                    $res['CurrentMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxReplica) {
            $res['MaxReplica'] = $this->maxReplica;
        }
        if (null !== $this->minReplica) {
            $res['MinReplica'] = $this->minReplica;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaleStrategies) {
            $res['ScaleStrategies'] = [];
            if (null !== $this->scaleStrategies && \is_array($this->scaleStrategies)) {
                $n = 0;
                foreach ($this->scaleStrategies as $item) {
                    $res['ScaleStrategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceAutoScalerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Behavior'])) {
            $model->behavior = $map['Behavior'];
        }
        if (isset($map['CurrentMetrics'])) {
            if (!empty($map['CurrentMetrics'])) {
                $model->currentMetrics = [];
                $n                     = 0;
                foreach ($map['CurrentMetrics'] as $item) {
                    $model->currentMetrics[$n++] = null !== $item ? currentMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxReplica'])) {
            $model->maxReplica = $map['MaxReplica'];
        }
        if (isset($map['MinReplica'])) {
            $model->minReplica = $map['MinReplica'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaleStrategies'])) {
            if (!empty($map['ScaleStrategies'])) {
                $model->scaleStrategies = [];
                $n                      = 0;
                foreach ($map['ScaleStrategies'] as $item) {
                    $model->scaleStrategies[$n++] = null !== $item ? scaleStrategies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
