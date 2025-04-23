<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\arrayProperties;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\dependsOn;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\retryStrategy;

class SubmitServerlessJobRequest extends Model
{
    /**
     * @var arrayProperties
     */
    public $arrayProperties;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var container
     */
    public $container;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var dependsOn[]
     */
    public $dependsOn;

    /**
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var string[]
     */
    public $instanceType;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $jobPriority;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var retryStrategy
     */
    public $retryStrategy;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'arrayProperties' => 'ArrayProperties',
        'clusterId' => 'ClusterId',
        'container' => 'Container',
        'cpu' => 'Cpu',
        'dependsOn' => 'DependsOn',
        'ephemeralStorage' => 'EphemeralStorage',
        'instanceType' => 'InstanceType',
        'jobName' => 'JobName',
        'jobPriority' => 'JobPriority',
        'memory' => 'Memory',
        'ramRoleName' => 'RamRoleName',
        'retryStrategy' => 'RetryStrategy',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'timeout' => 'Timeout',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->arrayProperties) {
            $this->arrayProperties->validate();
        }
        if (null !== $this->container) {
            $this->container->validate();
        }
        if (\is_array($this->dependsOn)) {
            Model::validateArray($this->dependsOn);
        }
        if (\is_array($this->instanceType)) {
            Model::validateArray($this->instanceType);
        }
        if (null !== $this->retryStrategy) {
            $this->retryStrategy->validate();
        }
        if (\is_array($this->vSwitchId)) {
            Model::validateArray($this->vSwitchId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayProperties) {
            $res['ArrayProperties'] = null !== $this->arrayProperties ? $this->arrayProperties->toArray($noStream) : $this->arrayProperties;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toArray($noStream) : $this->container;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->dependsOn) {
            if (\is_array($this->dependsOn)) {
                $res['DependsOn'] = [];
                $n1 = 0;
                foreach ($this->dependsOn as $item1) {
                    $res['DependsOn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }

        if (null !== $this->instanceType) {
            if (\is_array($this->instanceType)) {
                $res['InstanceType'] = [];
                $n1 = 0;
                foreach ($this->instanceType as $item1) {
                    $res['InstanceType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobPriority) {
            $res['JobPriority'] = $this->jobPriority;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toArray($noStream) : $this->retryStrategy;
        }

        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->vSwitchId) {
            if (\is_array($this->vSwitchId)) {
                $res['VSwitchId'] = [];
                $n1 = 0;
                foreach ($this->vSwitchId as $item1) {
                    $res['VSwitchId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ArrayProperties'])) {
            $model->arrayProperties = arrayProperties::fromMap($map['ArrayProperties']);
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DependsOn'])) {
            if (!empty($map['DependsOn'])) {
                $model->dependsOn = [];
                $n1 = 0;
                foreach ($map['DependsOn'] as $item1) {
                    $model->dependsOn[$n1++] = dependsOn::fromMap($item1);
                }
            }
        }

        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }

        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = [];
                $n1 = 0;
                foreach ($map['InstanceType'] as $item1) {
                    $model->instanceType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobPriority'])) {
            $model->jobPriority = $map['JobPriority'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['RetryStrategy'])) {
            $model->retryStrategy = retryStrategy::fromMap($map['RetryStrategy']);
        }

        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = [];
                $n1 = 0;
                foreach ($map['VSwitchId'] as $item1) {
                    $model->vSwitchId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
