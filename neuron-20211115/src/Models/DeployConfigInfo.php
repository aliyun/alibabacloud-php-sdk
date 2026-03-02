<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class DeployConfigInfo extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $deploymentType;

    /**
     * @var string
     */
    public $env;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $isMonitorEnable;

    /**
     * @var int
     */
    public $isServiceGroupEnable;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'cpu' => 'cpu',
        'deploymentId' => 'deploymentId',
        'deploymentType' => 'deploymentType',
        'env' => 'env',
        'finish' => 'finish',
        'instanceCount' => 'instanceCount',
        'isMonitorEnable' => 'isMonitorEnable',
        'isServiceGroupEnable' => 'isServiceGroupEnable',
        'memory' => 'memory',
        'pipelineId' => 'pipelineId',
        'preStop' => 'preStop',
        'serviceGroupId' => 'serviceGroupId',
        'serviceId' => 'serviceId',
        'timeout' => 'timeout',
        'times' => 'times',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->deploymentType) {
            $res['deploymentType'] = $this->deploymentType;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->finish) {
            $res['finish'] = $this->finish;
        }

        if (null !== $this->instanceCount) {
            $res['instanceCount'] = $this->instanceCount;
        }

        if (null !== $this->isMonitorEnable) {
            $res['isMonitorEnable'] = $this->isMonitorEnable;
        }

        if (null !== $this->isServiceGroupEnable) {
            $res['isServiceGroupEnable'] = $this->isServiceGroupEnable;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }

        if (null !== $this->preStop) {
            $res['preStop'] = $this->preStop;
        }

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['deploymentType'])) {
            $model->deploymentType = $map['deploymentType'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['finish'])) {
            $model->finish = $map['finish'];
        }

        if (isset($map['instanceCount'])) {
            $model->instanceCount = $map['instanceCount'];
        }

        if (isset($map['isMonitorEnable'])) {
            $model->isMonitorEnable = $map['isMonitorEnable'];
        }

        if (isset($map['isServiceGroupEnable'])) {
            $model->isServiceGroupEnable = $map['isServiceGroupEnable'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }

        if (isset($map['preStop'])) {
            $model->preStop = $map['preStop'];
        }

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
