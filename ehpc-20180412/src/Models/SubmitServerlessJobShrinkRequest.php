<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class SubmitServerlessJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $arrayPropertiesShrink;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $containerShrink;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $dependsOnShrink;

    /**
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var string
     */
    public $instanceTypeShrink;

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
     * @var string
     */
    public $retryStrategyShrink;

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
     * @var string
     */
    public $vSwitchIdShrink;
    protected $_name = [
        'arrayPropertiesShrink' => 'ArrayProperties',
        'clusterId' => 'ClusterId',
        'containerShrink' => 'Container',
        'cpu' => 'Cpu',
        'dependsOnShrink' => 'DependsOn',
        'ephemeralStorage' => 'EphemeralStorage',
        'instanceTypeShrink' => 'InstanceType',
        'jobName' => 'JobName',
        'jobPriority' => 'JobPriority',
        'memory' => 'Memory',
        'ramRoleName' => 'RamRoleName',
        'retryStrategyShrink' => 'RetryStrategy',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'timeout' => 'Timeout',
        'vSwitchIdShrink' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayPropertiesShrink) {
            $res['ArrayProperties'] = $this->arrayPropertiesShrink;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->containerShrink) {
            $res['Container'] = $this->containerShrink;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->dependsOnShrink) {
            $res['DependsOn'] = $this->dependsOnShrink;
        }

        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }

        if (null !== $this->instanceTypeShrink) {
            $res['InstanceType'] = $this->instanceTypeShrink;
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

        if (null !== $this->retryStrategyShrink) {
            $res['RetryStrategy'] = $this->retryStrategyShrink;
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

        if (null !== $this->vSwitchIdShrink) {
            $res['VSwitchId'] = $this->vSwitchIdShrink;
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
            $model->arrayPropertiesShrink = $map['ArrayProperties'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Container'])) {
            $model->containerShrink = $map['Container'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DependsOn'])) {
            $model->dependsOnShrink = $map['DependsOn'];
        }

        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceTypeShrink = $map['InstanceType'];
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
            $model->retryStrategyShrink = $map['RetryStrategy'];
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
            $model->vSwitchIdShrink = $map['VSwitchId'];
        }

        return $model;
    }
}
