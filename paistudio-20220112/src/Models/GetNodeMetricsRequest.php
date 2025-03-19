<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetNodeMetricsRequest extends Model
{
    /**
     * @example 2024-07-10T10:17:06
     *
     * @var string
     */
    public $endTime;

    /**
     * @example V100
     *
     * @var string
     */
    public $GPUType;

    /**
     * @example 2024-07-08T02:23:30.292Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1h
     *
     * @var string
     */
    public $timeStep;

    /**
     * @example true
     *
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'endTime' => 'EndTime',
        'GPUType' => 'GPUType',
        'startTime' => 'StartTime',
        'timeStep' => 'TimeStep',
        'verbose' => 'Verbose',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeStep) {
            $res['TimeStep'] = $this->timeStep;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeStep'])) {
            $model->timeStep = $map['TimeStep'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
