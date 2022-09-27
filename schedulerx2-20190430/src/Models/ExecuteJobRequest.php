<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ExecuteJobRequest extends Model
{
    /**
     * @var bool
     */
    public $checkJobStatus;

    /**
     * @var int
     */
    public $designateType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceParameters;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $regionId;

    /**
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
