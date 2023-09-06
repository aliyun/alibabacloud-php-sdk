<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SubmitServerlessJobShrinkRequest extends Model
{
    /**
     * @description The configuration of the array job.
     *
     * >
     *
     *   The index value of an array job is passed to the serverless job container by using the environment variable **EHPC_JOB_ARRAY_INDEX** to allow access to the array job from business programs.
     *
     * @var string
     */
    public $arrayPropertiesShrink;

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
     * @var string
     */
    public $containerShrink;

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
     * @var string
     */
    public $dependsOnShrink;

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
     * @var string
     */
    public $instanceTypeShrink;

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
     * @var string
     */
    public $retryStrategyShrink;

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
     * @example SpotPriceLimit
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
     * @var string
     */
    public $vSwitchIdShrink;
    protected $_name = [
        'arrayPropertiesShrink' => 'ArrayProperties',
        'clusterId'             => 'ClusterId',
        'containerShrink'       => 'Container',
        'cpu'                   => 'Cpu',
        'dependsOnShrink'       => 'DependsOn',
        'ephemeralStorage'      => 'EphemeralStorage',
        'instanceTypeShrink'    => 'InstanceType',
        'jobName'               => 'JobName',
        'jobPriority'           => 'JobPriority',
        'memory'                => 'Memory',
        'ramRoleName'           => 'RamRoleName',
        'retryStrategyShrink'   => 'RetryStrategy',
        'spotPriceLimit'        => 'SpotPriceLimit',
        'spotStrategy'          => 'SpotStrategy',
        'timeout'               => 'Timeout',
        'vSwitchIdShrink'       => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitServerlessJobShrinkRequest
     */
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
