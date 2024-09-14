<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ScheduledPlanExecutedInfo extends Model
{
    /**
     * @example 1723197248
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 27846363877456****
     *
     * @var string
     */
    public $creator;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 00000000-0000-0000-0000-000000000001
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example 0e6d3bab-2277-4ed1-b573-9de6413d****
     *
     * @var string
     */
    public $jobResourceUpgradingId;

    /**
     * @example 1723197248
     *
     * @var string
     */
    public $modifiedAt;

    /**
     * @example 27846363877456****
     *
     * @var string
     */
    public $modifier;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $modifierName;

    /**
     * @example test-scheduled-plan
     *
     * @var string
     */
    public $name;

    /**
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example SCHEDULED_PLAN
     *
     * @var string
     */
    public $origin;

    /**
     * @example f8a2d5d9-9fc5-4273-bfcc-2a3cd354****
     *
     * @var string
     */
    public $originJobId;

    /**
     * @var ScheduledPlanExecutedStatus
     */
    public $status;

    /**
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createdAt'              => 'createdAt',
        'creator'                => 'creator',
        'creatorName'            => 'creatorName',
        'deploymentId'           => 'deploymentId',
        'jobResourceUpgradingId' => 'jobResourceUpgradingId',
        'modifiedAt'             => 'modifiedAt',
        'modifier'               => 'modifier',
        'modifierName'           => 'modifierName',
        'name'                   => 'name',
        'namespace'              => 'namespace',
        'origin'                 => 'origin',
        'originJobId'            => 'originJobId',
        'status'                 => 'status',
        'workspace'              => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->jobResourceUpgradingId) {
            $res['jobResourceUpgradingId'] = $this->jobResourceUpgradingId;
        }
        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->originJobId) {
            $res['originJobId'] = $this->originJobId;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduledPlanExecutedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['jobResourceUpgradingId'])) {
            $model->jobResourceUpgradingId = $map['jobResourceUpgradingId'];
        }
        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }
        if (isset($map['originJobId'])) {
            $model->originJobId = $map['originJobId'];
        }
        if (isset($map['status'])) {
            $model->status = ScheduledPlanExecutedStatus::fromMap($map['status']);
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
