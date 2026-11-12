<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CmsV1MigrationTaskView extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var bool
     */
    public $canRecover;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $observeGroupId;

    /**
     * @var string
     */
    public $originGroupId;

    /**
     * @var bool
     */
    public $sourceReadOnly;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $takeoverStage;

    /**
     * @var string
     */
    public $targetGroupName;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId' => 'batchId',
        'canRecover' => 'canRecover',
        'errorMessage' => 'errorMessage',
        'groupName' => 'groupName',
        'observeGroupId' => 'observeGroupId',
        'originGroupId' => 'originGroupId',
        'sourceReadOnly' => 'sourceReadOnly',
        'status' => 'status',
        'takeoverStage' => 'takeoverStage',
        'targetGroupName' => 'targetGroupName',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->canRecover) {
            $res['canRecover'] = $this->canRecover;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->observeGroupId) {
            $res['observeGroupId'] = $this->observeGroupId;
        }

        if (null !== $this->originGroupId) {
            $res['originGroupId'] = $this->originGroupId;
        }

        if (null !== $this->sourceReadOnly) {
            $res['sourceReadOnly'] = $this->sourceReadOnly;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->takeoverStage) {
            $res['takeoverStage'] = $this->takeoverStage;
        }

        if (null !== $this->targetGroupName) {
            $res['targetGroupName'] = $this->targetGroupName;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['canRecover'])) {
            $model->canRecover = $map['canRecover'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['observeGroupId'])) {
            $model->observeGroupId = $map['observeGroupId'];
        }

        if (isset($map['originGroupId'])) {
            $model->originGroupId = $map['originGroupId'];
        }

        if (isset($map['sourceReadOnly'])) {
            $model->sourceReadOnly = $map['sourceReadOnly'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['takeoverStage'])) {
            $model->takeoverStage = $map['takeoverStage'];
        }

        if (isset($map['targetGroupName'])) {
            $model->targetGroupName = $map['targetGroupName'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
