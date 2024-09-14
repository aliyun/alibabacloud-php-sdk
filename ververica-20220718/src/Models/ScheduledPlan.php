<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ScheduledPlan extends Model
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
     * @example USER_DEFINED
     *
     * @var string
     */
    public $origin;

    /**
     * @var PeriodicSchedulingPolicy[]
     */
    public $periodicSchedulingPolicies;

    /**
     * @example f3b4ec1e-85dc-4b1d-9726-1d7f4c37****
     *
     * @var string
     */
    public $scheduledPlanId;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $updatedByUser;

    /**
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createdAt'                  => 'createdAt',
        'creator'                    => 'creator',
        'creatorName'                => 'creatorName',
        'deploymentId'               => 'deploymentId',
        'modifiedAt'                 => 'modifiedAt',
        'modifier'                   => 'modifier',
        'modifierName'               => 'modifierName',
        'name'                       => 'name',
        'namespace'                  => 'namespace',
        'origin'                     => 'origin',
        'periodicSchedulingPolicies' => 'periodicSchedulingPolicies',
        'scheduledPlanId'            => 'scheduledPlanId',
        'status'                     => 'status',
        'updatedByUser'              => 'updatedByUser',
        'workspace'                  => 'workspace',
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
        if (null !== $this->periodicSchedulingPolicies) {
            $res['periodicSchedulingPolicies'] = [];
            if (null !== $this->periodicSchedulingPolicies && \is_array($this->periodicSchedulingPolicies)) {
                $n = 0;
                foreach ($this->periodicSchedulingPolicies as $item) {
                    $res['periodicSchedulingPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scheduledPlanId) {
            $res['scheduledPlanId'] = $this->scheduledPlanId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updatedByUser) {
            $res['updatedByUser'] = $this->updatedByUser;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduledPlan
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
        if (isset($map['periodicSchedulingPolicies'])) {
            if (!empty($map['periodicSchedulingPolicies'])) {
                $model->periodicSchedulingPolicies = [];
                $n                                 = 0;
                foreach ($map['periodicSchedulingPolicies'] as $item) {
                    $model->periodicSchedulingPolicies[$n++] = null !== $item ? PeriodicSchedulingPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['scheduledPlanId'])) {
            $model->scheduledPlanId = $map['scheduledPlanId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updatedByUser'])) {
            $model->updatedByUser = $map['updatedByUser'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
