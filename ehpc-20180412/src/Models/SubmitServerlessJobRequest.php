<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\arrayProperties;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\dependsOn;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\retryStrategy;
use AlibabaCloud\Tea\Model;

class SubmitServerlessJobRequest extends Model
{
    /**
     * @description The configuration of the array job.
     *
     * >  The value of an array job index is passed to a serverless job container through the environment variable `EHPC_ARRAY_TASK_ID`. Users can access the container from business programs.
     * @var arrayProperties
     */
    public $arrayProperties;

    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The properties of the serverless job container.
     *
     * @var container
     */
    public $container;

    /**
     * @description The vCPU size of the serverless job container. Unit: cores.
     *
     * @example 2
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The serverless job dependencies.
     *
     * @var dependsOn[]
     */
    public $dependsOn;

    /**
     * @description The size of the temporary storage that is added to the serverless job container. Unit: GiB.
     *
     * >  By default, the serverless job container provides 30 GiB of free storage quota. If you require storage of more than 30 GiB, you can use this parameter to specify the temporary storage to add to the job container.
     * @example 200
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The ECS instance types used by the serverless job container.
     *
     * @var string[]
     */
    public $instanceType;

    /**
     * @description The name of the serverless job.
     *
     * @example testjob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The scheduling priority of the serverless job. Valid values: 0 to 999. A greater value indicates a higher priority.
     *
     * @example 10
     *
     * @var int
     */
    public $jobPriority;

    /**
     * @description The memory size of the serverless job container. Unit: GiB.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the RAM role that is associated with the serverless job container.
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @var retryStrategy
     */
    public $retryStrategy;

    /**
     * @description The maximum hourly price of the preemptible instance. The value can contain up to three decimal places.
     *
     * If you set SpotStrategy to SpotWithPriceLimit, you must specify the SpotPriceLimit parameter.
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for the instance. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot.
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The validity period of the serverless job. After the validity period expires, the job is forcibly terminated. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The IDs of the vSwitches to which the serverless job container belongs.
     *
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
        'retryStrategy'    => 'RetryStrategy',
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
        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toMap() : null;
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
                $model->vSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
