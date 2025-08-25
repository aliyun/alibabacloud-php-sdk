<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class AnalyzeConversationRequest extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $fieldListJson;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskListJson;
    protected $_name = [
        'contactId' => 'ContactId',
        'fieldListJson' => 'FieldListJson',
        'instanceId' => 'InstanceId',
        'taskListJson' => 'TaskListJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->fieldListJson) {
            $res['FieldListJson'] = $this->fieldListJson;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->taskListJson) {
            $res['TaskListJson'] = $this->taskListJson;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['FieldListJson'])) {
            $model->fieldListJson = $map['FieldListJson'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TaskListJson'])) {
            $model->taskListJson = $map['TaskListJson'];
        }

        return $model;
    }
}
