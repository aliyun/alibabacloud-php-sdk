<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionRecordsResponseBody\tasks\timeline;

class tasks extends Model
{
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
    public $name;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var timeline[]
     */
    public $timeline;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'cronExpression' => 'cronExpression',
        'description' => 'description',
        'isOpen' => 'isOpen',
        'name' => 'name',
        'taskId' => 'taskId',
        'timeline' => 'timeline',
        'timezone' => 'timezone',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        if (\is_array($this->timeline)) {
            Model::validateArray($this->timeline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->timeline) {
            if (\is_array($this->timeline)) {
                $res['timeline'] = [];
                $n1 = 0;
                foreach ($this->timeline as $item1) {
                    $res['timeline'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['timeline'])) {
            if (!empty($map['timeline'])) {
                $model->timeline = [];
                $n1 = 0;
                foreach ($map['timeline'] as $item1) {
                    $model->timeline[$n1] = timeline::fromMap($item1);
                    ++$n1;
                }
            }
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
