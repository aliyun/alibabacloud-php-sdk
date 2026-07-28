<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy;

use AlibabaCloud\Dara\Model;

class limits extends Model
{
    /**
     * @var int
     */
    public $coolDownMinutes;

    /**
     * @var float
     */
    public $jobMaxCpu;

    /**
     * @var string
     */
    public $jobMaxMemory;

    /**
     * @var int
     */
    public $jobMaxParallelism;

    /**
     * @var int
     */
    public $jobMinParallelism;
    protected $_name = [
        'coolDownMinutes' => 'coolDownMinutes',
        'jobMaxCpu' => 'jobMaxCpu',
        'jobMaxMemory' => 'jobMaxMemory',
        'jobMaxParallelism' => 'jobMaxParallelism',
        'jobMinParallelism' => 'jobMinParallelism',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coolDownMinutes) {
            $res['coolDownMinutes'] = $this->coolDownMinutes;
        }

        if (null !== $this->jobMaxCpu) {
            $res['jobMaxCpu'] = $this->jobMaxCpu;
        }

        if (null !== $this->jobMaxMemory) {
            $res['jobMaxMemory'] = $this->jobMaxMemory;
        }

        if (null !== $this->jobMaxParallelism) {
            $res['jobMaxParallelism'] = $this->jobMaxParallelism;
        }

        if (null !== $this->jobMinParallelism) {
            $res['jobMinParallelism'] = $this->jobMinParallelism;
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
        if (isset($map['coolDownMinutes'])) {
            $model->coolDownMinutes = $map['coolDownMinutes'];
        }

        if (isset($map['jobMaxCpu'])) {
            $model->jobMaxCpu = $map['jobMaxCpu'];
        }

        if (isset($map['jobMaxMemory'])) {
            $model->jobMaxMemory = $map['jobMaxMemory'];
        }

        if (isset($map['jobMaxParallelism'])) {
            $model->jobMaxParallelism = $map['jobMaxParallelism'];
        }

        if (isset($map['jobMinParallelism'])) {
            $model->jobMinParallelism = $map['jobMinParallelism'];
        }

        return $model;
    }
}
