<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;

class DataResultsTaskIndividualResultMapValue extends Model
{
    /**
     * @var int
     */
    public $experimentId;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var int
     */
    public $gpuNum;

    /**
     * @var string
     */
    public $gpuName;

    /**
     * @var bool
     */
    public $warningFlag;

    /**
     * @var string
     */
    public $warningMsg;

    /**
     * @var bool
     */
    public $errorFlag;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var float
     */
    public $tflops;

    /**
     * @var float
     */
    public $samplesPerSecond;
    protected $_name = [
        'experimentId' => 'ExperimentId',
        'hostname' => 'Hostname',
        'podName' => 'PodName',
        'gpuNum' => 'GpuNum',
        'gpuName' => 'GpuName',
        'warningFlag' => 'WarningFlag',
        'warningMsg' => 'WarningMsg',
        'errorFlag' => 'ErrorFlag',
        'errorMsg' => 'ErrorMsg',
        'tflops' => 'Tflops',
        'samplesPerSecond' => 'SamplesPerSecond',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->gpuNum) {
            $res['GpuNum'] = $this->gpuNum;
        }

        if (null !== $this->gpuName) {
            $res['GpuName'] = $this->gpuName;
        }

        if (null !== $this->warningFlag) {
            $res['WarningFlag'] = $this->warningFlag;
        }

        if (null !== $this->warningMsg) {
            $res['WarningMsg'] = $this->warningMsg;
        }

        if (null !== $this->errorFlag) {
            $res['ErrorFlag'] = $this->errorFlag;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->tflops) {
            $res['Tflops'] = $this->tflops;
        }

        if (null !== $this->samplesPerSecond) {
            $res['SamplesPerSecond'] = $this->samplesPerSecond;
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
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['GpuNum'])) {
            $model->gpuNum = $map['GpuNum'];
        }

        if (isset($map['GpuName'])) {
            $model->gpuName = $map['GpuName'];
        }

        if (isset($map['WarningFlag'])) {
            $model->warningFlag = $map['WarningFlag'];
        }

        if (isset($map['WarningMsg'])) {
            $model->warningMsg = $map['WarningMsg'];
        }

        if (isset($map['ErrorFlag'])) {
            $model->errorFlag = $map['ErrorFlag'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['Tflops'])) {
            $model->tflops = $map['Tflops'];
        }

        if (isset($map['SamplesPerSecond'])) {
            $model->samplesPerSecond = $map['SamplesPerSecond'];
        }

        return $model;
    }
}
