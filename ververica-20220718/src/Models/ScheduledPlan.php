<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ScheduledPlan extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var PeriodicSchedulingPolicy[]
     */
    public $periodicSchedulingPolicies;

    /**
     * @var string
     */
    public $scheduledPlanId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $updatedByUser;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createdAt' => 'createdAt',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'deploymentId' => 'deploymentId',
        'modifiedAt' => 'modifiedAt',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'name' => 'name',
        'namespace' => 'namespace',
        'origin' => 'origin',
        'periodicSchedulingPolicies' => 'periodicSchedulingPolicies',
        'scheduledPlanId' => 'scheduledPlanId',
        'status' => 'status',
        'updatedByUser' => 'updatedByUser',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->periodicSchedulingPolicies)) {
            Model::validateArray($this->periodicSchedulingPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->periodicSchedulingPolicies)) {
                $res['periodicSchedulingPolicies'] = [];
                $n1 = 0;
                foreach ($this->periodicSchedulingPolicies as $item1) {
                    $res['periodicSchedulingPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['periodicSchedulingPolicies'] as $item1) {
                    $model->periodicSchedulingPolicies[$n1] = PeriodicSchedulingPolicy::fromMap($item1);
                    ++$n1;
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
