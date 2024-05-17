<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ExecuteJobRequest extends Model
{
    /**
     * @description Specifies whether to check the job status. Valid values: -**true**: The job can be run only if the job is enabled. -**false**: The job can be run even if the job is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $checkJobStatus;

    /**
     * @description The type of the designated machine. Valid values: -**1**: worker. -**2**: label.
     *
     * @example 1
     *
     * @var int
     */
    public $designateType;

    /**
     * @description The application ID. You can obtain the application ID on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The parameters that are passed to trigger the job to run. The input value can be a random string. The parameters that are passed are obtained by calling the `context.getInstanceParameters()` class in the `processor` code. The parameters are different from custom parameters for creating jobs.
     *
     * @example test
     *
     * @var string
     */
    public $instanceParameters;

    /**
     * @description The job ID. You can obtain the job ID on the Task Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example 92583
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The label of the worker.
     *
     * @example gray
     *
     * @var string
     */
    public $label;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The worker address of the application. To query the worker address, call the GetWokerList operation.
     *
     * @example xxxxxxx@127.0.0.1:222
     *
     * @var string
     */
    public $worker;
    protected $_name = [
        'checkJobStatus'     => 'CheckJobStatus',
        'designateType'      => 'DesignateType',
        'groupId'            => 'GroupId',
        'instanceParameters' => 'InstanceParameters',
        'jobId'              => 'JobId',
        'label'              => 'Label',
        'namespace'          => 'Namespace',
        'namespaceSource'    => 'NamespaceSource',
        'regionId'           => 'RegionId',
        'worker'             => 'Worker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkJobStatus) {
            $res['CheckJobStatus'] = $this->checkJobStatus;
        }
        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceParameters) {
            $res['InstanceParameters'] = $this->instanceParameters;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->worker) {
            $res['Worker'] = $this->worker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckJobStatus'])) {
            $model->checkJobStatus = $map['CheckJobStatus'];
        }
        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceParameters'])) {
            $model->instanceParameters = $map['InstanceParameters'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Worker'])) {
            $model->worker = $map['Worker'];
        }

        return $model;
    }
}
