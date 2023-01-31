<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetTaskByUuidRequest extends Model
{
    /**
     * @example 024f8cf0-c842-4c01-b74b-c8667e4579c7
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 15160071061
     *
     * @var string
     */
    public $taskId;

    /**
     * @example true
     *
     * @var bool
     */
    public $withConversations;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'taskId'            => 'TaskId',
        'withConversations' => 'WithConversations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->withConversations) {
            $res['WithConversations'] = $this->withConversations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskByUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WithConversations'])) {
            $model->withConversations = $map['WithConversations'];
        }

        return $model;
    }
}
