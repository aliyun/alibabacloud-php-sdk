<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkflowInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkflowInstancesResponseBody\items\currentNode;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkflowInstancesResponseBody\items\currentNodes;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkflowInstancesResponseBody\items\progress;

class items extends Model
{
    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var currentNode
     */
    public $currentNode;

    /**
     * @var currentNodes[]
     */
    public $currentNodes;

    /**
     * @var string
     */
    public $endedAt;

    /**
     * @var string
     */
    public $initiator;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $pauseScope;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var progress
     */
    public $progress;

    /**
     * @var string
     */
    public $reviewStatus;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $runtimeStatus;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var int
     */
    public $stateVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workItemId;
    protected $_name = [
        'businessId' => 'businessId',
        'collaborationGroupId' => 'collaborationGroupId',
        'createdAt' => 'createdAt',
        'currentNode' => 'currentNode',
        'currentNodes' => 'currentNodes',
        'endedAt' => 'endedAt',
        'initiator' => 'initiator',
        'instanceId' => 'instanceId',
        'pauseScope' => 'pauseScope',
        'planId' => 'planId',
        'progress' => 'progress',
        'reviewStatus' => 'reviewStatus',
        'revision' => 'revision',
        'runId' => 'runId',
        'runtimeStatus' => 'runtimeStatus',
        'startedAt' => 'startedAt',
        'stateVersion' => 'stateVersion',
        'status' => 'status',
        'templateId' => 'templateId',
        'title' => 'title',
        'workItemId' => 'workItemId',
    ];

    public function validate()
    {
        if (null !== $this->currentNode) {
            $this->currentNode->validate();
        }
        if (\is_array($this->currentNodes)) {
            Model::validateArray($this->currentNodes);
        }
        if (null !== $this->progress) {
            $this->progress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['businessId'] = $this->businessId;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->currentNode) {
            $res['currentNode'] = null !== $this->currentNode ? $this->currentNode->toArray($noStream) : $this->currentNode;
        }

        if (null !== $this->currentNodes) {
            if (\is_array($this->currentNodes)) {
                $res['currentNodes'] = [];
                $n1 = 0;
                foreach ($this->currentNodes as $item1) {
                    $res['currentNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endedAt) {
            $res['endedAt'] = $this->endedAt;
        }

        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->pauseScope) {
            $res['pauseScope'] = $this->pauseScope;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->progress) {
            $res['progress'] = null !== $this->progress ? $this->progress->toArray($noStream) : $this->progress;
        }

        if (null !== $this->reviewStatus) {
            $res['reviewStatus'] = $this->reviewStatus;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->runtimeStatus) {
            $res['runtimeStatus'] = $this->runtimeStatus;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->stateVersion) {
            $res['stateVersion'] = $this->stateVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
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
        if (isset($map['businessId'])) {
            $model->businessId = $map['businessId'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['currentNode'])) {
            $model->currentNode = currentNode::fromMap($map['currentNode']);
        }

        if (isset($map['currentNodes'])) {
            if (!empty($map['currentNodes'])) {
                $model->currentNodes = [];
                $n1 = 0;
                foreach ($map['currentNodes'] as $item1) {
                    $model->currentNodes[$n1] = currentNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['endedAt'])) {
            $model->endedAt = $map['endedAt'];
        }

        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['pauseScope'])) {
            $model->pauseScope = $map['pauseScope'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['progress'])) {
            $model->progress = progress::fromMap($map['progress']);
        }

        if (isset($map['reviewStatus'])) {
            $model->reviewStatus = $map['reviewStatus'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['runtimeStatus'])) {
            $model->runtimeStatus = $map['runtimeStatus'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['stateVersion'])) {
            $model->stateVersion = $map['stateVersion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
        }

        return $model;
    }
}
