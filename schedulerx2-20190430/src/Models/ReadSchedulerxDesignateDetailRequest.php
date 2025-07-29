<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ReadSchedulerxDesignateDetailRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $designateType;

    /**
     * @description This parameter is required.
     *
     * @example test.defalutGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description This parameter is required.
     *
     * @example 368
     *
     * @var int
     */
    public $jobId;

    /**
     * @description This parameter is required.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'designateType' => 'DesignateType',
        'groupId' => 'GroupId',
        'jobId' => 'JobId',
        'namespace' => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReadSchedulerxDesignateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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

        return $model;
    }
}
