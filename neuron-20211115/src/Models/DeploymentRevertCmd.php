<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class DeploymentRevertCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

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
    public $description;

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
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $times;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId' => 'accountId',
        'cpu' => 'cpu',
        'deploymentId' => 'deploymentId',
        'description' => 'description',
        'instanceCount' => 'instanceCount',
        'isMonitorEnable' => 'isMonitorEnable',
        'isServiceGroupEnable' => 'isServiceGroupEnable',
        'memory' => 'memory',
        'timeout' => 'timeout',
        'times' => 'times',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
