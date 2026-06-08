<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalTasks\approvalNode;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalTasks\taskCandidates;

class approvalTasks extends Model
{
    /**
     * @var string
     */
    public $approvalComment;

    /**
     * @var string
     */
    public $approvalDecision;

    /**
     * @var approvalNode
     */
    public $approvalNode;

    /**
     * @var string
     */
    public $assignee;

    /**
     * @var string
     */
    public $assigneeName;

    /**
     * @var int
     */
    public $completeTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var taskCandidates[]
     */
    public $taskCandidates;
    protected $_name = [
        'approvalComment' => 'ApprovalComment',
        'approvalDecision' => 'ApprovalDecision',
        'approvalNode' => 'ApprovalNode',
        'assignee' => 'Assignee',
        'assigneeName' => 'AssigneeName',
        'completeTime' => 'CompleteTime',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'status' => 'Status',
        'taskCandidates' => 'TaskCandidates',
    ];

    public function validate()
    {
        if (null !== $this->approvalNode) {
            $this->approvalNode->validate();
        }
        if (\is_array($this->taskCandidates)) {
            Model::validateArray($this->taskCandidates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalComment) {
            $res['ApprovalComment'] = $this->approvalComment;
        }

        if (null !== $this->approvalDecision) {
            $res['ApprovalDecision'] = $this->approvalDecision;
        }

        if (null !== $this->approvalNode) {
            $res['ApprovalNode'] = null !== $this->approvalNode ? $this->approvalNode->toArray($noStream) : $this->approvalNode;
        }

        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }

        if (null !== $this->assigneeName) {
            $res['AssigneeName'] = $this->assigneeName;
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskCandidates) {
            if (\is_array($this->taskCandidates)) {
                $res['TaskCandidates'] = [];
                $n1 = 0;
                foreach ($this->taskCandidates as $item1) {
                    $res['TaskCandidates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApprovalComment'])) {
            $model->approvalComment = $map['ApprovalComment'];
        }

        if (isset($map['ApprovalDecision'])) {
            $model->approvalDecision = $map['ApprovalDecision'];
        }

        if (isset($map['ApprovalNode'])) {
            $model->approvalNode = approvalNode::fromMap($map['ApprovalNode']);
        }

        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }

        if (isset($map['AssigneeName'])) {
            $model->assigneeName = $map['AssigneeName'];
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskCandidates'])) {
            if (!empty($map['TaskCandidates'])) {
                $model->taskCandidates = [];
                $n1 = 0;
                foreach ($map['TaskCandidates'] as $item1) {
                    $model->taskCandidates[$n1] = taskCandidates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
