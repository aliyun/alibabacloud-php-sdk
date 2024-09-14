<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ScheduledPlanAppliedInfo extends Model
{
    /**
     * @example 00000000-0000-0000-0000-000000000001
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $expectedState;

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
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example f3b4ec1e-85dc-4b1d-9726-1d7f4c37****
     *
     * @var string
     */
    public $scheduledPlanId;

    /**
     * @example test-scheduled-plan
     *
     * @var string
     */
    public $scheduledPlanName;

    /**
     * @example WAITING
     *
     * @var string
     */
    public $statusState;

    /**
     * @example edcef******b4f
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ScheduledPlanAppliedInfo
     */
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
