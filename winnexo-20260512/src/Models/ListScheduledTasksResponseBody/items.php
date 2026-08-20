<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListScheduledTasksResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $abnormalReason;

    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var bool
     */
    public $canEdit;

    /**
     * @var bool
     */
    public $canExecute;

    /**
     * @var bool
     */
    public $canToggle;

    /**
     * @var string
     */
    public $collaborationGroupId;

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
    public $cronExpression;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $digitalEmployeeName;

    /**
     * @var int
     */
    public $executionCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $isOpen;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string[]
     */
    public $visibleMemberUserIds;
    protected $_name = [
        'abnormalReason' => 'abnormalReason',
        'canDelete' => 'canDelete',
        'canEdit' => 'canEdit',
        'canExecute' => 'canExecute',
        'canToggle' => 'canToggle',
        'collaborationGroupId' => 'collaborationGroupId',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'cronExpression' => 'cronExpression',
        'description' => 'description',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'executionCount' => 'executionCount',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'isOpen' => 'isOpen',
        'model' => 'model',
        'name' => 'name',
        'status' => 'status',
        'taskId' => 'taskId',
        'triggerType' => 'triggerType',
        'visibility' => 'visibility',
        'visibleMemberUserIds' => 'visibleMemberUserIds',
    ];

    public function validate()
    {
        if (\is_array($this->digitalEmployeeName)) {
            Model::validateArray($this->digitalEmployeeName);
        }
        if (\is_array($this->visibleMemberUserIds)) {
            Model::validateArray($this->visibleMemberUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalReason) {
            $res['abnormalReason'] = $this->abnormalReason;
        }

        if (null !== $this->canDelete) {
            $res['canDelete'] = $this->canDelete;
        }

        if (null !== $this->canEdit) {
            $res['canEdit'] = $this->canEdit;
        }

        if (null !== $this->canExecute) {
            $res['canExecute'] = $this->canExecute;
        }

        if (null !== $this->canToggle) {
            $res['canToggle'] = $this->canToggle;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->digitalEmployeeName) {
            if (\is_array($this->digitalEmployeeName)) {
                $res['digitalEmployeeName'] = [];
                $n1 = 0;
                foreach ($this->digitalEmployeeName as $item1) {
                    $res['digitalEmployeeName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executionCount) {
            $res['executionCount'] = $this->executionCount;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isOpen) {
            $res['isOpen'] = $this->isOpen;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
        }

        if (null !== $this->visibleMemberUserIds) {
            if (\is_array($this->visibleMemberUserIds)) {
                $res['visibleMemberUserIds'] = [];
                $n1 = 0;
                foreach ($this->visibleMemberUserIds as $item1) {
                    $res['visibleMemberUserIds'][$n1] = $item1;
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
        if (isset($map['abnormalReason'])) {
            $model->abnormalReason = $map['abnormalReason'];
        }

        if (isset($map['canDelete'])) {
            $model->canDelete = $map['canDelete'];
        }

        if (isset($map['canEdit'])) {
            $model->canEdit = $map['canEdit'];
        }

        if (isset($map['canExecute'])) {
            $model->canExecute = $map['canExecute'];
        }

        if (isset($map['canToggle'])) {
            $model->canToggle = $map['canToggle'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['digitalEmployeeName'])) {
            if (!empty($map['digitalEmployeeName'])) {
                $model->digitalEmployeeName = [];
                $n1 = 0;
                foreach ($map['digitalEmployeeName'] as $item1) {
                    $model->digitalEmployeeName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['executionCount'])) {
            $model->executionCount = $map['executionCount'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['isOpen'])) {
            $model->isOpen = $map['isOpen'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['visibility'])) {
            $model->visibility = $map['visibility'];
        }

        if (isset($map['visibleMemberUserIds'])) {
            if (!empty($map['visibleMemberUserIds'])) {
                $model->visibleMemberUserIds = [];
                $n1 = 0;
                foreach ($map['visibleMemberUserIds'] as $item1) {
                    $model->visibleMemberUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
