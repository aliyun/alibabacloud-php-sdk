<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponseBody;

use AlibabaCloud\Tea\Model;

class riskyTasks extends Model
{
    /**
     * @description The name of the operation that the high-risk task calls.
     *
     * @example DeleteInstance
     *
     * @var string
     */
    public $API;

    /**
     * @description The cloud service in which the high-risk task runs.
     *
     * @example ECS
     *
     * @var string
     */
    public $service;

    /**
     * @description The details of the high-risk task.
     *
     * @var string[]
     */
    public $task;

    /**
     * @description The details of templates to which the high-risk task belongs.
     *
     * @var string[]
     */
    public $template;
    protected $_name = [
        'API'      => 'API',
        'service'  => 'Service',
        'task'     => 'Task',
        'template' => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->API) {
            $res['API'] = $this->API;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['API'])) {
            $model->API = $map['API'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
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
