<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ScheduledPlanAppliedInfo extends Model
{
    /**
     * @var string
     */
    public $deploymentId;
    /**
     * @var string
     */
    public $expectedState;
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
    public $namespace;
    /**
     * @var string
     */
    public $scheduledPlanId;
    /**
     * @var string
     */
    public $scheduledPlanName;
    /**
     * @var string
     */
    public $statusState;
    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'deploymentId'      => 'deploymentId',
        'expectedState'     => 'expectedState',
        'modifiedAt'        => 'modifiedAt',
        'modifier'          => 'modifier',
        'modifierName'      => 'modifierName',
        'namespace'         => 'namespace',
        'scheduledPlanId'   => 'scheduledPlanId',
        'scheduledPlanName' => 'scheduledPlanName',
        'statusState'       => 'statusState',
        'workspace'         => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->expectedState) {
            $res['expectedState'] = $this->expectedState;
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

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->scheduledPlanId) {
            $res['scheduledPlanId'] = $this->scheduledPlanId;
        }

        if (null !== $this->scheduledPlanName) {
            $res['scheduledPlanName'] = $this->scheduledPlanName;
        }

        if (null !== $this->statusState) {
            $res['statusState'] = $this->statusState;
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
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['expectedState'])) {
            $model->expectedState = $map['expectedState'];
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

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['scheduledPlanId'])) {
            $model->scheduledPlanId = $map['scheduledPlanId'];
        }

        if (isset($map['scheduledPlanName'])) {
            $model->scheduledPlanName = $map['scheduledPlanName'];
        }

        if (isset($map['statusState'])) {
            $model->statusState = $map['statusState'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
