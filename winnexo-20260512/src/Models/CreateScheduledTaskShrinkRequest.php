<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduledTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

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
    public $segmentsShrink;

    /**
     * @var string
     */
    public $taskDetailShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $triggerConfigShrink;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'descriptionShrink' => 'description',
        'digitalEmployeeNameShrink' => 'digitalEmployeeName',
        'isOpen' => 'isOpen',
        'model' => 'model',
        'name' => 'name',
        'segmentsShrink' => 'segments',
        'taskDetailShrink' => 'taskDetail',
        'tenantId' => 'tenantId',
        'triggerConfigShrink' => 'triggerConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
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

        if (null !== $this->segmentsShrink) {
            $res['segments'] = $this->segmentsShrink;
        }

        if (null !== $this->taskDetailShrink) {
            $res['taskDetail'] = $this->taskDetailShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->triggerConfigShrink) {
            $res['triggerConfig'] = $this->triggerConfigShrink;
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
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

        if (isset($map['segments'])) {
            $model->segmentsShrink = $map['segments'];
        }

        if (isset($map['taskDetail'])) {
            $model->taskDetailShrink = $map['taskDetail'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['triggerConfig'])) {
            $model->triggerConfigShrink = $map['triggerConfig'];
        }

        return $model;
    }
}
