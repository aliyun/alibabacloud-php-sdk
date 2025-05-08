<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponseBody;

use AlibabaCloud\Dara\Model;

class riskyTasks extends Model
{
    /**
     * @var string
     */
    public $API;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string[]
     */
    public $task;

    /**
     * @var string[]
     */
    public $template;
    protected $_name = [
        'API' => 'API',
        'service' => 'Service',
        'task' => 'Task',
        'template' => 'Template',
    ];

    public function validate()
    {
        if (\is_array($this->task)) {
            Model::validateArray($this->task);
        }
        if (\is_array($this->template)) {
            Model::validateArray($this->template);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->API) {
            $res['API'] = $this->API;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->task) {
            if (\is_array($this->task)) {
                $res['Task'] = [];
                $n1 = 0;
                foreach ($this->task as $item1) {
                    $res['Task'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->template) {
            if (\is_array($this->template)) {
                $res['Template'] = [];
                $n1 = 0;
                foreach ($this->template as $item1) {
                    $res['Template'][$n1++] = $item1;
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
        if (isset($map['API'])) {
            $model->API = $map['API'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = [];
                $n1 = 0;
                foreach ($map['Task'] as $item1) {
                    $model->task[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Template'])) {
            if (!empty($map['Template'])) {
                $model->template = [];
                $n1 = 0;
                foreach ($map['Template'] as $item1) {
                    $model->template[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
