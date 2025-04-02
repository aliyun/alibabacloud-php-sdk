<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\tasks\activity;

class tasks extends Model
{
    /**
     * @var string
     */
    public $actionerId;

    /**
     * @var activity
     */
    public $activity;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'actionerId' => 'ActionerId',
        'activity' => 'Activity',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->activity) {
            $this->activity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionerId) {
            $res['ActionerId'] = $this->actionerId;
        }

        if (null !== $this->activity) {
            $res['Activity'] = null !== $this->activity ? $this->activity->toArray($noStream) : $this->activity;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
