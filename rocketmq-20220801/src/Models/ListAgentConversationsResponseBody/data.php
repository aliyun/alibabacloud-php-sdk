<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAgentConversationsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed
     */
    public $access;

    /**
     * @var mixed
     */
    public $agent;

    /**
     * @var mixed
     */
    public $analysisCoverage;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $currentRunStatus;

    /**
     * @var string
     */
    public $editMonitorId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed
     */
    public $owner;

    /**
     * @var mixed
     */
    public $project;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $shareScope;

    /**
     * @var string
     */
    public $sourceSessionId;

    /**
     * @var mixed
     */
    public $tagging;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $toolCallCount;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string[]
     */
    public $usedSkills;
    protected $_name = [
        'access' => 'access',
        'agent' => 'agent',
        'analysisCoverage' => 'analysisCoverage',
        'conversationId' => 'conversationId',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'currentRunStatus' => 'currentRunStatus',
        'editMonitorId' => 'editMonitorId',
        'id' => 'id',
        'owner' => 'owner',
        'project' => 'project',
        'scenarioId' => 'scenarioId',
        'shareScope' => 'shareScope',
        'sourceSessionId' => 'sourceSessionId',
        'tagging' => 'tagging',
        'title' => 'title',
        'toolCallCount' => 'toolCallCount',
        'updatedAt' => 'updatedAt',
        'usedSkills' => 'usedSkills',
    ];

    public function validate()
    {
        if (\is_array($this->usedSkills)) {
            Model::validateArray($this->usedSkills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->access) {
            $res['access'] = $this->access;
        }

        if (null !== $this->agent) {
            $res['agent'] = $this->agent;
        }

        if (null !== $this->analysisCoverage) {
            $res['analysisCoverage'] = $this->analysisCoverage;
        }

        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->currentRunStatus) {
            $res['currentRunStatus'] = $this->currentRunStatus;
        }

        if (null !== $this->editMonitorId) {
            $res['editMonitorId'] = $this->editMonitorId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->scenarioId) {
            $res['scenarioId'] = $this->scenarioId;
        }

        if (null !== $this->shareScope) {
            $res['shareScope'] = $this->shareScope;
        }

        if (null !== $this->sourceSessionId) {
            $res['sourceSessionId'] = $this->sourceSessionId;
        }

        if (null !== $this->tagging) {
            $res['tagging'] = $this->tagging;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->toolCallCount) {
            $res['toolCallCount'] = $this->toolCallCount;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->usedSkills) {
            if (\is_array($this->usedSkills)) {
                $res['usedSkills'] = [];
                $n1 = 0;
                foreach ($this->usedSkills as $item1) {
                    $res['usedSkills'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['access'])) {
            $model->access = $map['access'];
        }

        if (isset($map['agent'])) {
            $model->agent = $map['agent'];
        }

        if (isset($map['analysisCoverage'])) {
            $model->analysisCoverage = $map['analysisCoverage'];
        }

        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['currentRunStatus'])) {
            $model->currentRunStatus = $map['currentRunStatus'];
        }

        if (isset($map['editMonitorId'])) {
            $model->editMonitorId = $map['editMonitorId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['scenarioId'])) {
            $model->scenarioId = $map['scenarioId'];
        }

        if (isset($map['shareScope'])) {
            $model->shareScope = $map['shareScope'];
        }

        if (isset($map['sourceSessionId'])) {
            $model->sourceSessionId = $map['sourceSessionId'];
        }

        if (isset($map['tagging'])) {
            $model->tagging = $map['tagging'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['toolCallCount'])) {
            $model->toolCallCount = $map['toolCallCount'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['usedSkills'])) {
            if (!empty($map['usedSkills'])) {
                $model->usedSkills = [];
                $n1 = 0;
                foreach ($map['usedSkills'] as $item1) {
                    $model->usedSkills[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
