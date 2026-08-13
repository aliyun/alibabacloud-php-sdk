<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListScheduledTasksResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $description;

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
    public $name;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'creator' => 'creator',
        'cronExpression' => 'cronExpression',
        'description' => 'description',
        'executionCount' => 'executionCount',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'isOpen' => 'isOpen',
        'name' => 'name',
        'taskId' => 'taskId',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
