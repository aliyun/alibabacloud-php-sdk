<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\arrayProperties;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\dependsOn;
use AlibabaCloud\Tea\Model;

class SubmitServerlessJobRequest extends Model
{
    /**
     * @var arrayProperties
     */
    public $arrayProperties;

    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var container
     */
    public $container;

    /**
     * @example 2
     *
     * @var float
     */
    public $cpu;

    /**
     * @var dependsOn[]
     */
    public $dependsOn;

    /**
     * @example 200
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var string[]
     */
    public $instanceType;

    /**
     * @example testjob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 10
     *
     * @var int
     */
    public $jobPriority;

    /**
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @example SpotPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'arrayProperties'  => 'ArrayProperties',
        'clusterId'        => 'ClusterId',
        'container'        => 'Container',
        'cpu'              => 'Cpu',
        'dependsOn'        => 'DependsOn',
        'ephemeralStorage' => 'EphemeralStorage',
        'instanceType'     => 'InstanceType',
        'jobName'          => 'JobName',
        'jobPriority'      => 'JobPriority',
        'memory'           => 'Memory',
        'ramRoleName'      => 'RamRoleName',
        'spotPriceLimit'   => 'SpotPriceLimit',
        'spotStrategy'     => 'SpotStrategy',
        'timeout'          => 'Timeout',
        'vSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayProperties) {
            $res['ArrayProperties'] = null !== $this->arrayProperties ? $this->arrayProperties->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->dependsOn) {
            $res['DependsOn'] = [];
            if (null !== $this->dependsOn && \is_array($this->dependsOn)) {
                $n = 0;
                foreach ($this->dependsOn as $item) {
                    $res['DependsOn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitServerlessJobRequest
     */
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
                $n                = 0;
                foreach ($map['DependsOn'] as $item) {
                    $model->dependsOn[$n++] = null !== $item ? dependsOn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }
        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = $map['InstanceType'];
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
                $model->vSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
