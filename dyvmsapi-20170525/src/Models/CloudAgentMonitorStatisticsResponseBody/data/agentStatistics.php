<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentMonitorStatisticsResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentStatistics extends Model
{
    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $currentState;

    /**
     * @var string
     */
    public $gno;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $idleCount;

    /**
     * @var string
     */
    public $idleTime;

    /**
     * @var string
     */
    public $maxIdleTime;

    /**
     * @var string
     */
    public $maxObBridgeTime;

    /**
     * @var string
     */
    public $maxObCallingTime;

    /**
     * @var string
     */
    public $maxObWrapupTime;

    /**
     * @var string
     */
    public $minIdleTime;

    /**
     * @var string
     */
    public $minObBridgeTime;

    /**
     * @var string
     */
    public $minObCallingTime;

    /**
     * @var string
     */
    public $minObWrapupTime;

    /**
     * @var string
     */
    public $obBridgeCount;

    /**
     * @var string
     */
    public $obBridgeTime;

    /**
     * @var string
     */
    public $obCallingCount;

    /**
     * @var string
     */
    public $obCallingTime;

    /**
     * @var string
     */
    public $obWrapupCount;

    /**
     * @var string
     */
    public $obWrapupTime;

    /**
     * @var string
     */
    public $previewObAgentAnsweredCount;

    /**
     * @var string
     */
    public $previewObBothAnsweredCount;

    /**
     * @var string
     */
    public $previewObMaxBridgeTime;

    /**
     * @var string
     */
    public $previewObMinBridgeTime;

    /**
     * @var string
     */
    public $previewObTotalBridgeTime;

    /**
     * @var string
     */
    public $previewObTotalCount;

    /**
     * @var string
     */
    public $previewObValidCalls;

    /**
     * @var string
     */
    public $previewObValidTotalBridgeTime;

    /**
     * @var string
     */
    public $queueName;
    protected $_name = [
        'cno' => 'Cno',
        'currentState' => 'CurrentState',
        'gno' => 'Gno',
        'groupName' => 'GroupName',
        'idleCount' => 'Idle_count',
        'idleTime' => 'Idle_time',
        'maxIdleTime' => 'Max_idle_time',
        'maxObBridgeTime' => 'Max_ob_bridge_time',
        'maxObCallingTime' => 'Max_ob_calling_time',
        'maxObWrapupTime' => 'Max_ob_wrapup_time',
        'minIdleTime' => 'Min_idle_time',
        'minObBridgeTime' => 'Min_ob_bridge_time',
        'minObCallingTime' => 'Min_ob_calling_time',
        'minObWrapupTime' => 'Min_ob_wrapup_time',
        'obBridgeCount' => 'Ob_bridge_count',
        'obBridgeTime' => 'Ob_bridge_time',
        'obCallingCount' => 'Ob_calling_count',
        'obCallingTime' => 'Ob_calling_time',
        'obWrapupCount' => 'Ob_wrapup_count',
        'obWrapupTime' => 'Ob_wrapup_time',
        'previewObAgentAnsweredCount' => 'Preview_ob_agent_answered_count',
        'previewObBothAnsweredCount' => 'Preview_ob_both_answered_count',
        'previewObMaxBridgeTime' => 'Preview_ob_max_bridge_time',
        'previewObMinBridgeTime' => 'Preview_ob_min_bridge_time',
        'previewObTotalBridgeTime' => 'Preview_ob_total_bridge_time',
        'previewObTotalCount' => 'Preview_ob_total_count',
        'previewObValidCalls' => 'Preview_ob_valid_calls',
        'previewObValidTotalBridgeTime' => 'Preview_ob_valid_total_bridge_time',
        'queueName' => 'QueueName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->currentState) {
            $res['CurrentState'] = $this->currentState;
        }

        if (null !== $this->gno) {
            $res['Gno'] = $this->gno;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->idleCount) {
            $res['Idle_count'] = $this->idleCount;
        }

        if (null !== $this->idleTime) {
            $res['Idle_time'] = $this->idleTime;
        }

        if (null !== $this->maxIdleTime) {
            $res['Max_idle_time'] = $this->maxIdleTime;
        }

        if (null !== $this->maxObBridgeTime) {
            $res['Max_ob_bridge_time'] = $this->maxObBridgeTime;
        }

        if (null !== $this->maxObCallingTime) {
            $res['Max_ob_calling_time'] = $this->maxObCallingTime;
        }

        if (null !== $this->maxObWrapupTime) {
            $res['Max_ob_wrapup_time'] = $this->maxObWrapupTime;
        }

        if (null !== $this->minIdleTime) {
            $res['Min_idle_time'] = $this->minIdleTime;
        }

        if (null !== $this->minObBridgeTime) {
            $res['Min_ob_bridge_time'] = $this->minObBridgeTime;
        }

        if (null !== $this->minObCallingTime) {
            $res['Min_ob_calling_time'] = $this->minObCallingTime;
        }

        if (null !== $this->minObWrapupTime) {
            $res['Min_ob_wrapup_time'] = $this->minObWrapupTime;
        }

        if (null !== $this->obBridgeCount) {
            $res['Ob_bridge_count'] = $this->obBridgeCount;
        }

        if (null !== $this->obBridgeTime) {
            $res['Ob_bridge_time'] = $this->obBridgeTime;
        }

        if (null !== $this->obCallingCount) {
            $res['Ob_calling_count'] = $this->obCallingCount;
        }

        if (null !== $this->obCallingTime) {
            $res['Ob_calling_time'] = $this->obCallingTime;
        }

        if (null !== $this->obWrapupCount) {
            $res['Ob_wrapup_count'] = $this->obWrapupCount;
        }

        if (null !== $this->obWrapupTime) {
            $res['Ob_wrapup_time'] = $this->obWrapupTime;
        }

        if (null !== $this->previewObAgentAnsweredCount) {
            $res['Preview_ob_agent_answered_count'] = $this->previewObAgentAnsweredCount;
        }

        if (null !== $this->previewObBothAnsweredCount) {
            $res['Preview_ob_both_answered_count'] = $this->previewObBothAnsweredCount;
        }

        if (null !== $this->previewObMaxBridgeTime) {
            $res['Preview_ob_max_bridge_time'] = $this->previewObMaxBridgeTime;
        }

        if (null !== $this->previewObMinBridgeTime) {
            $res['Preview_ob_min_bridge_time'] = $this->previewObMinBridgeTime;
        }

        if (null !== $this->previewObTotalBridgeTime) {
            $res['Preview_ob_total_bridge_time'] = $this->previewObTotalBridgeTime;
        }

        if (null !== $this->previewObTotalCount) {
            $res['Preview_ob_total_count'] = $this->previewObTotalCount;
        }

        if (null !== $this->previewObValidCalls) {
            $res['Preview_ob_valid_calls'] = $this->previewObValidCalls;
        }

        if (null !== $this->previewObValidTotalBridgeTime) {
            $res['Preview_ob_valid_total_bridge_time'] = $this->previewObValidTotalBridgeTime;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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
        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CurrentState'])) {
            $model->currentState = $map['CurrentState'];
        }

        if (isset($map['Gno'])) {
            $model->gno = $map['Gno'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Idle_count'])) {
            $model->idleCount = $map['Idle_count'];
        }

        if (isset($map['Idle_time'])) {
            $model->idleTime = $map['Idle_time'];
        }

        if (isset($map['Max_idle_time'])) {
            $model->maxIdleTime = $map['Max_idle_time'];
        }

        if (isset($map['Max_ob_bridge_time'])) {
            $model->maxObBridgeTime = $map['Max_ob_bridge_time'];
        }

        if (isset($map['Max_ob_calling_time'])) {
            $model->maxObCallingTime = $map['Max_ob_calling_time'];
        }

        if (isset($map['Max_ob_wrapup_time'])) {
            $model->maxObWrapupTime = $map['Max_ob_wrapup_time'];
        }

        if (isset($map['Min_idle_time'])) {
            $model->minIdleTime = $map['Min_idle_time'];
        }

        if (isset($map['Min_ob_bridge_time'])) {
            $model->minObBridgeTime = $map['Min_ob_bridge_time'];
        }

        if (isset($map['Min_ob_calling_time'])) {
            $model->minObCallingTime = $map['Min_ob_calling_time'];
        }

        if (isset($map['Min_ob_wrapup_time'])) {
            $model->minObWrapupTime = $map['Min_ob_wrapup_time'];
        }

        if (isset($map['Ob_bridge_count'])) {
            $model->obBridgeCount = $map['Ob_bridge_count'];
        }

        if (isset($map['Ob_bridge_time'])) {
            $model->obBridgeTime = $map['Ob_bridge_time'];
        }

        if (isset($map['Ob_calling_count'])) {
            $model->obCallingCount = $map['Ob_calling_count'];
        }

        if (isset($map['Ob_calling_time'])) {
            $model->obCallingTime = $map['Ob_calling_time'];
        }

        if (isset($map['Ob_wrapup_count'])) {
            $model->obWrapupCount = $map['Ob_wrapup_count'];
        }

        if (isset($map['Ob_wrapup_time'])) {
            $model->obWrapupTime = $map['Ob_wrapup_time'];
        }

        if (isset($map['Preview_ob_agent_answered_count'])) {
            $model->previewObAgentAnsweredCount = $map['Preview_ob_agent_answered_count'];
        }

        if (isset($map['Preview_ob_both_answered_count'])) {
            $model->previewObBothAnsweredCount = $map['Preview_ob_both_answered_count'];
        }

        if (isset($map['Preview_ob_max_bridge_time'])) {
            $model->previewObMaxBridgeTime = $map['Preview_ob_max_bridge_time'];
        }

        if (isset($map['Preview_ob_min_bridge_time'])) {
            $model->previewObMinBridgeTime = $map['Preview_ob_min_bridge_time'];
        }

        if (isset($map['Preview_ob_total_bridge_time'])) {
            $model->previewObTotalBridgeTime = $map['Preview_ob_total_bridge_time'];
        }

        if (isset($map['Preview_ob_total_count'])) {
            $model->previewObTotalCount = $map['Preview_ob_total_count'];
        }

        if (isset($map['Preview_ob_valid_calls'])) {
            $model->previewObValidCalls = $map['Preview_ob_valid_calls'];
        }

        if (isset($map['Preview_ob_valid_total_bridge_time'])) {
            $model->previewObValidTotalBridgeTime = $map['Preview_ob_valid_total_bridge_time'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        return $model;
    }
}
