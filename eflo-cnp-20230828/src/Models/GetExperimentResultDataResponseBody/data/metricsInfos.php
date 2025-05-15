<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class metricsInfos extends Model
{
    /**
     * @var string
     */
    public $gpuNum;

    /**
     * @var int
     */
    public $iteration;

    /**
     * @var float
     */
    public $tflops;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'gpuNum' => 'Gpu_num',
        'iteration' => 'Iteration',
        'tflops' => 'Tflops',
        'timestamp' => 'Timestamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
