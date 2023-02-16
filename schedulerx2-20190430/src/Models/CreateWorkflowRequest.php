<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkflowRequest extends Model
{
    /**
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @example helloworld
     *
     * @var string
     */
    public $name;

    /**
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 0 0/10 * * * ?
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @example GMT+8
     *
     * @var string
     */
    public $timezone;
    protected $_name = [
        'description'     => 'Description',
        'groupId'         => 'GroupId',
        'maxConcurrency'  => 'MaxConcurrency',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
        'timeExpression'  => 'TimeExpression',
        'timeType'        => 'TimeType',
        'timezone'        => 'Timezone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->timeExpression) {
            $res['TimeExpression'] = $this->timeExpression;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['TimeExpression'])) {
            $model->timeExpression = $map['TimeExpression'];
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
