<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponseBody;

use AlibabaCloud\Tea\Model;

class riskyTasks extends Model
{
    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $API;

    /**
     * @var string[]
     */
    public $task;

    /**
     * @var string[]
     */
    public $template;
    protected $_name = [
        'service'  => 'Service',
        'API'      => 'API',
        'task'     => 'Task',
        'template' => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->API) {
            $res['API'] = $this->API;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskyTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['API'])) {
            $model->API = $map['API'];
        }
        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = $map['Task'];
            }
        }
        if (isset($map['Template'])) {
            if (!empty($map['Template'])) {
                $model->template = $map['Template'];
            }
        }

        return $model;
    }
}
