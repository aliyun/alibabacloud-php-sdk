<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class SimpleTask extends Model
{
    /**
     * @var bool
     */
    public $archived;

    /**
     * @var string
     */
    public $archivedInfos;

    /**
     * @var SimpleUser
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $labelStyle;

    /**
     * @var SimpleUser
     */
    public $modifier;

    /**
     * @var string
     */
    public $refTaskId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var string[]
     */
    public $workflowNodes;
    protected $_name = [
        'archived' => 'Archived',
        'archivedInfos' => 'ArchivedInfos',
        'creator' => 'Creator',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labelStyle' => 'LabelStyle',
        'modifier' => 'Modifier',
        'refTaskId' => 'RefTaskId',
        'remark' => 'Remark',
        'stage' => 'Stage',
        'status' => 'Status',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'templateId' => 'TemplateId',
        'tenantId' => 'TenantId',
        'UUID' => 'UUID',
        'workflowNodes' => 'WorkflowNodes',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->workflowNodes)) {
            Model::validateArray($this->workflowNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archived) {
            $res['Archived'] = $this->archived;
        }

        if (null !== $this->archivedInfos) {
            $res['ArchivedInfos'] = $this->archivedInfos;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->labelStyle) {
            $res['LabelStyle'] = $this->labelStyle;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->refTaskId) {
            $res['RefTaskId'] = $this->refTaskId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }

        if (null !== $this->workflowNodes) {
            if (\is_array($this->workflowNodes)) {
                $res['WorkflowNodes'] = [];
                $n1 = 0;
                foreach ($this->workflowNodes as $item1) {
                    $res['WorkflowNodes'][$n1] = $item1;
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
        if (isset($map['Archived'])) {
            $model->archived = $map['Archived'];
        }

        if (isset($map['ArchivedInfos'])) {
            $model->archivedInfos = $map['ArchivedInfos'];
        }

        if (isset($map['Creator'])) {
            $model->creator = SimpleUser::fromMap($map['Creator']);
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['LabelStyle'])) {
            $model->labelStyle = $map['LabelStyle'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = SimpleUser::fromMap($map['Modifier']);
        }

        if (isset($map['RefTaskId'])) {
            $model->refTaskId = $map['RefTaskId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        if (isset($map['WorkflowNodes'])) {
            if (!empty($map['WorkflowNodes'])) {
                $model->workflowNodes = [];
                $n1 = 0;
                foreach ($map['WorkflowNodes'] as $item1) {
                    $model->workflowNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
