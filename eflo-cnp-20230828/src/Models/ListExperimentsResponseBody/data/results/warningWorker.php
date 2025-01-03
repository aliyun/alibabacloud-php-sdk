<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results;

use AlibabaCloud\Tea\Model;

class warningWorker extends Model
{
    /**
     * @description Whether there is an error
     *
     * @example false
     *
     * @var bool
     */
    public $errorFlag;

    /**
     * @description Error message
     *
     * @example error msg
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Experiment ID
     *
     * @example 113
     *
     * @var int
     */
    public $experimentId;

    /**
     * @description GPU name
     *
     * @example 8x OAM 810 GPU
     *
     * @var string
     */
    public $gpuName;

    /**
     * @description Number of GPUs
     *
     * @example 90
     *
     * @var int
     */
    public $gpuNum;

    /**
     * @description Host IP
     *
     * @example 101.66.165.102
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Pod name
     *
     * @example hzs-forge-sdxl-online-7ff4d86444-pc95h
     *
     * @var string
     */
    public $podName;

    /**
     * @description Throughput
     *
     * @example 53
     *
     * @var float
     */
    public $samplesPerSecond;

    /**
     * @description TFLOPS value
     *
     * @example 43
     *
     * @var float
     */
    public $tflops;

    /**
     * @description Whether there is an alarm
     *
     * @example false
     *
     * @var bool
     */
    public $warningFlag;

    /**
     * @description Alarm message
     *
     * @example warning msg
     *
     * @var string
     */
    public $warningMsg;
    protected $_name = [
        'errorFlag'        => 'ErrorFlag',
        'errorMsg'         => 'ErrorMsg',
        'experimentId'     => 'ExperimentId',
        'gpuName'          => 'GpuName',
        'gpuNum'           => 'GpuNum',
        'hostname'         => 'Hostname',
        'podName'          => 'PodName',
        'samplesPerSecond' => 'SamplesPerSecond',
        'tflops'           => 'Tflops',
        'warningFlag'      => 'WarningFlag',
        'warningMsg'       => 'WarningMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorFlag) {
            $res['ErrorFlag'] = $this->errorFlag;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->gpuName) {
            $res['GpuName'] = $this->gpuName;
        }
        if (null !== $this->gpuNum) {
            $res['GpuNum'] = $this->gpuNum;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->samplesPerSecond) {
            $res['SamplesPerSecond'] = $this->samplesPerSecond;
        }
        if (null !== $this->tflops) {
            $res['Tflops'] = $this->tflops;
        }
        if (null !== $this->warningFlag) {
            $res['WarningFlag'] = $this->warningFlag;
        }
        if (null !== $this->warningMsg) {
            $res['WarningMsg'] = $this->warningMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningWorker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorFlag'])) {
            $model->errorFlag = $map['ErrorFlag'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['GpuName'])) {
            $model->gpuName = $map['GpuName'];
        }
        if (isset($map['GpuNum'])) {
            $model->gpuNum = $map['GpuNum'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['SamplesPerSecond'])) {
            $model->samplesPerSecond = $map['SamplesPerSecond'];
        }
        if (isset($map['Tflops'])) {
            $model->tflops = $map['Tflops'];
        }
        if (isset($map['WarningFlag'])) {
            $model->warningFlag = $map['WarningFlag'];
        }
        if (isset($map['WarningMsg'])) {
            $model->warningMsg = $map['WarningMsg'];
        }

        return $model;
    }
}
