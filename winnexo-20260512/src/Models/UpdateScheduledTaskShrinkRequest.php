<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateScheduledTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $autoPreference;

    /**
     * @var string
     */
    public $descriptionShrink;

    /**
     * @var string
     */
    public $digitalEmployeeNameShrink;

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
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $outputMode;

    /**
     * @var string
     */
    public $segmentsShrink;

    /**
     * @var string
     */
    public $taskDetailShrink;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $triggerConfigShrink;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $visibleMemberUserIdsShrink;
    protected $_name = [
        'appToken' => 'appToken',
        'autoPreference' => 'autoPreference',
        'descriptionShrink' => 'description',
        'digitalEmployeeNameShrink' => 'digitalEmployeeName',
        'isOpen' => 'isOpen',
        'model' => 'model',
        'name' => 'name',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'outputMode' => 'outputMode',
        'segmentsShrink' => 'segments',
        'taskDetailShrink' => 'taskDetail',
        'taskId' => 'taskId',
        'tenantId' => 'tenantId',
        'triggerConfigShrink' => 'triggerConfig',
        'visibility' => 'visibility',
        'visibleMemberUserIdsShrink' => 'visibleMemberUserIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->autoPreference) {
            $res['autoPreference'] = $this->autoPreference;
        }

        if (null !== $this->descriptionShrink) {
            $res['description'] = $this->descriptionShrink;
        }

        if (null !== $this->digitalEmployeeNameShrink) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeNameShrink;
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

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->outputMode) {
            $res['outputMode'] = $this->outputMode;
        }

        if (null !== $this->segmentsShrink) {
            $res['segments'] = $this->segmentsShrink;
        }

        if (null !== $this->taskDetailShrink) {
            $res['taskDetail'] = $this->taskDetailShrink;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->triggerConfigShrink) {
            $res['triggerConfig'] = $this->triggerConfigShrink;
        }

        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
        }

        if (null !== $this->visibleMemberUserIdsShrink) {
            $res['visibleMemberUserIds'] = $this->visibleMemberUserIdsShrink;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['autoPreference'])) {
            $model->autoPreference = $map['autoPreference'];
        }

        if (isset($map['description'])) {
            $model->descriptionShrink = $map['description'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeNameShrink = $map['digitalEmployeeName'];
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

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['outputMode'])) {
            $model->outputMode = $map['outputMode'];
        }

        if (isset($map['segments'])) {
            $model->segmentsShrink = $map['segments'];
        }

        if (isset($map['taskDetail'])) {
            $model->taskDetailShrink = $map['taskDetail'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['triggerConfig'])) {
            $model->triggerConfigShrink = $map['triggerConfig'];
        }

        if (isset($map['visibility'])) {
            $model->visibility = $map['visibility'];
        }

        if (isset($map['visibleMemberUserIds'])) {
            $model->visibleMemberUserIdsShrink = $map['visibleMemberUserIds'];
        }

        return $model;
    }
}
