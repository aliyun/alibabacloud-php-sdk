<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkflowRequest extends Model
{
    /**
     * @description The description of the workflow.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The application group ID. You can obtain the ID on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The maximum number of workflow instances that can be run at the same time. Default value: 1. The value 1 indicates that only one workflow instance is allowed. In this case, if the triggered workflow instance is still ongoing, no more workflow instances can be triggered even the time to schedule the next workflow arrives.
     *
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description The name of the workflow.
     *
     * This parameter is required.
     * @example helloworld
     *
     * @var string
     */
    public $name;

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
     * @description The time expression. You can set the time expression based on the selected method that is used to specify time.
     *
     *   If you set the TimeType parameter to cron, you need to enter a standard cron expression. Online verification is supported.
     *   If you set the TimeType parameter to api, no time expression is required.
     *
     * @example 0 0/10 * * * ?
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The method that is used to specify the time. Valid values:
     *
     *   1: cron
     *   100: api
     *
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @description The time zone.
     *
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
