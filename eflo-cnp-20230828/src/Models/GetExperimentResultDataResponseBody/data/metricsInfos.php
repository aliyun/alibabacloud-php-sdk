<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class metricsInfos extends Model
{
    /**
     * @description gpu
     *
     * @example 8
     *
     * @var string
     */
    public $gpuNum;

    /**
     * @description iteration
     *
     * @example 100
     *
     * @var int
     */
    public $iteration;

    /**
     * @description TFLOPS
     *
     * @example 43
     *
     * @var float
     */
    public $tflops;

    /**
     * @example 1715393860
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 126
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'gpuNum'    => 'Gpu_num',
        'iteration' => 'Iteration',
        'tflops'    => 'Tflops',
        'timestamp' => 'Timestamp',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpuNum) {
            $res['Gpu_num'] = $this->gpuNum;
        }
        if (null !== $this->iteration) {
            $res['Iteration'] = $this->iteration;
        }
        if (null !== $this->tflops) {
            $res['Tflops'] = $this->tflops;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricsInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gpu_num'])) {
            $model->gpuNum = $map['Gpu_num'];
        }
        if (isset($map['Iteration'])) {
            $model->iteration = $map['Iteration'];
        }
        if (isset($map['Tflops'])) {
            $model->tflops = $map['Tflops'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
