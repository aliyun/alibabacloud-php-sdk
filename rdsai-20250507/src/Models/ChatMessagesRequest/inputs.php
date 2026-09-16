<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesRequest;

use AlibabaCloud\Dara\Model;

class inputs extends Model
{
    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $enableThinking;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resumeCallId;

    /**
     * @var string
     */
    public $thinkEffort;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $toolApprovalMode;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'customAgentId' => 'CustomAgentId',
        'enableThinking' => 'EnableThinking',
        'language' => 'Language',
        'modelId' => 'ModelId',
        'regionId' => 'RegionId',
        'resumeCallId' => 'ResumeCallId',
        'thinkEffort' => 'ThinkEffort',
        'timezone' => 'Timezone',
        'toolApprovalMode' => 'ToolApprovalMode',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->enableThinking) {
            $res['EnableThinking'] = $this->enableThinking;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resumeCallId) {
            $res['ResumeCallId'] = $this->resumeCallId;
        }

        if (null !== $this->thinkEffort) {
            $res['ThinkEffort'] = $this->thinkEffort;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->toolApprovalMode) {
            $res['ToolApprovalMode'] = $this->toolApprovalMode;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['EnableThinking'])) {
            $model->enableThinking = $map['EnableThinking'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResumeCallId'])) {
            $model->resumeCallId = $map['ResumeCallId'];
        }

        if (isset($map['ThinkEffort'])) {
            $model->thinkEffort = $map['ThinkEffort'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['ToolApprovalMode'])) {
            $model->toolApprovalMode = $map['ToolApprovalMode'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
