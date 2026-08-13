<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest\description;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest\segments;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest\taskDetail;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest\triggerConfig;

class CreateScheduledTaskRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var description[]
     */
    public $description;

    /**
     * @var string[]
     */
    public $digitalEmployeeName;

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
     * @var segments[]
     */
    public $segments;

    /**
     * @var taskDetail
     */
    public $taskDetail;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var triggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'description' => 'description',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'isOpen' => 'isOpen',
        'model' => 'model',
        'name' => 'name',
        'segments' => 'segments',
        'taskDetail' => 'taskDetail',
        'tenantId' => 'tenantId',
        'triggerConfig' => 'triggerConfig',
    ];

    public function validate()
    {
        if (\is_array($this->description)) {
            Model::validateArray($this->description);
        }
        if (\is_array($this->digitalEmployeeName)) {
            Model::validateArray($this->digitalEmployeeName);
        }
        if (\is_array($this->segments)) {
            Model::validateArray($this->segments);
        }
        if (null !== $this->taskDetail) {
            $this->taskDetail->validate();
        }
        if (null !== $this->triggerConfig) {
            $this->triggerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->description) {
            if (\is_array($this->description)) {
                $res['description'] = [];
                $n1 = 0;
                foreach ($this->description as $item1) {
                    $res['description'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->isOpen) {
            $res['isOpen'] = $this->isOpen;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->segments) {
            if (\is_array($this->segments)) {
                $res['segments'] = [];
                $n1 = 0;
                foreach ($this->segments as $item1) {
                    $res['segments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskDetail) {
            $res['taskDetail'] = null !== $this->taskDetail ? $this->taskDetail->toArray($noStream) : $this->taskDetail;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toArray($noStream) : $this->triggerConfig;
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
            if (!empty($map['description'])) {
                $model->description = [];
                $n1 = 0;
                foreach ($map['description'] as $item1) {
                    $model->description[$n1] = description::fromMap($item1);
                    ++$n1;
                }
            }
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
            if (!empty($map['segments'])) {
                $model->segments = [];
                $n1 = 0;
                foreach ($map['segments'] as $item1) {
                    $model->segments[$n1] = segments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskDetail'])) {
            $model->taskDetail = taskDetail::fromMap($map['taskDetail']);
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = triggerConfig::fromMap($map['triggerConfig']);
        }

        return $model;
    }
}
