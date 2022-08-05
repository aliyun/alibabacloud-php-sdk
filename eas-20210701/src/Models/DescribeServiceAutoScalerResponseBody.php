<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceAutoScalerResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $behavior;

    /**
     * @var mixed[]
     */
    public $currentValues;

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
     * @var string
     */
    public $serviceName;

    /**
     * @var mixed[]
     */
    public $strategies;
    protected $_name = [
        'behavior'      => 'Behavior',
        'currentValues' => 'CurrentValues',
        'maxReplica'    => 'MaxReplica',
        'minReplica'    => 'MinReplica',
        'requestId'     => 'RequestId',
        'serviceName'   => 'ServiceName',
        'strategies'    => 'Strategies',
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
        if (null !== $this->currentValues) {
            $res['CurrentValues'] = $this->currentValues;
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->strategies) {
            $res['Strategies'] = $this->strategies;
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
        if (isset($map['CurrentValues'])) {
            $model->currentValues = $map['CurrentValues'];
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Strategies'])) {
            $model->strategies = $map['Strategies'];
        }

        return $model;
    }
}
