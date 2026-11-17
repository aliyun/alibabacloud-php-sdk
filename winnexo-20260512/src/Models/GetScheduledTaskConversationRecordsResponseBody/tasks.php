<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskConversationRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskConversationRecordsResponseBody\tasks\conversations;

class tasks extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var conversations[]
     */
    public $conversations;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $description;

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
    public $taskId;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'conversations' => 'conversations',
        'cronExpression' => 'cronExpression',
        'description' => 'description',
        'isOpen' => 'isOpen',
        'model' => 'model',
        'name' => 'name',
        'taskId' => 'taskId',
        'timezone' => 'timezone',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        if (\is_array($this->conversations)) {
            Model::validateArray($this->conversations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->conversations) {
            if (\is_array($this->conversations)) {
                $res['conversations'] = [];
                $n1 = 0;
                foreach ($this->conversations as $item1) {
                    $res['conversations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['conversations'])) {
            if (!empty($map['conversations'])) {
                $model->conversations = [];
                $n1 = 0;
                foreach ($map['conversations'] as $item1) {
                    $model->conversations[$n1] = conversations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
