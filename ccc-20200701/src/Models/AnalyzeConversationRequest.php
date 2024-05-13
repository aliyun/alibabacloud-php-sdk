<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeConversationRequest extends Model
{
    /**
     * @example job-10963442671187****
     *
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $fieldListJson;

    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["keywords"]
     *
     * @var string
     */
    public $taskListJson;
    protected $_name = [
        'contactId'     => 'ContactId',
        'fieldListJson' => 'FieldListJson',
        'instanceId'    => 'InstanceId',
        'taskListJson'  => 'TaskListJson',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AnalyzeConversationRequest
     */
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
