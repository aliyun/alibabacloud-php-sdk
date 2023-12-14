<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\tasks\activity;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example manager123
     *
     * @var string
     */
    public $actionerId;

    /**
     * @var activity
     */
    public $activity;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example 792
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'actionerId' => 'ActionerId',
        'activity'   => 'Activity',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionerId) {
            $res['ActionerId'] = $this->actionerId;
        }
        if (null !== $this->activity) {
            $res['Activity'] = null !== $this->activity ? $this->activity->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionerId'])) {
            $model->actionerId = $map['ActionerId'];
        }
        if (isset($map['Activity'])) {
            $model->activity = activity::fromMap($map['Activity']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
