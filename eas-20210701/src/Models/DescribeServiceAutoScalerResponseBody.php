<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponseBody\currentMetrics;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponseBody\scaleStrategies;

class DescribeServiceAutoScalerResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $behavior;

    /**
     * @var currentMetrics[]
     */
    public $currentMetrics;

    /**
     * @var int
     */
    public $maxReplica;

    /**
     * @var int
     */
    public $minReplica;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scaleStrategies[]
     */
    public $scaleStrategies;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'behavior' => 'Behavior',
        'currentMetrics' => 'CurrentMetrics',
        'maxReplica' => 'MaxReplica',
        'minReplica' => 'MinReplica',
        'requestId' => 'RequestId',
        'scaleStrategies' => 'ScaleStrategies',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        if (\is_array($this->behavior)) {
            Model::validateArray($this->behavior);
        }
        if (\is_array($this->currentMetrics)) {
            Model::validateArray($this->currentMetrics);
        }
        if (\is_array($this->scaleStrategies)) {
            Model::validateArray($this->scaleStrategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->behavior) {
            if (\is_array($this->behavior)) {
                $res['Behavior'] = [];
                foreach ($this->behavior as $key1 => $value1) {
                    $res['Behavior'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->currentMetrics) {
            if (\is_array($this->currentMetrics)) {
                $res['CurrentMetrics'] = [];
                $n1 = 0;
                foreach ($this->currentMetrics as $item1) {
                    $res['CurrentMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->scaleStrategies)) {
                $res['ScaleStrategies'] = [];
                $n1 = 0;
                foreach ($this->scaleStrategies as $item1) {
                    $res['ScaleStrategies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['Behavior'])) {
            if (!empty($map['Behavior'])) {
                $model->behavior = [];
                foreach ($map['Behavior'] as $key1 => $value1) {
                    $model->behavior[$key1] = $value1;
                }
            }
        }

        if (isset($map['CurrentMetrics'])) {
            if (!empty($map['CurrentMetrics'])) {
                $model->currentMetrics = [];
                $n1 = 0;
                foreach ($map['CurrentMetrics'] as $item1) {
                    $model->currentMetrics[$n1++] = currentMetrics::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['ScaleStrategies'] as $item1) {
                    $model->scaleStrategies[$n1++] = scaleStrategies::fromMap($item1);
                }
            }
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
