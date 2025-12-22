<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListFeedbacksResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $userRating;

    /**
     * @var string
     */
    public $userResponse;
    protected $_name = [
        'contactId' => 'ContactId',
        'instanceId' => 'InstanceId',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'userRating' => 'UserRating',
        'userResponse' => 'UserResponse',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->userRating) {
            $res['UserRating'] = $this->userRating;
        }

        if (null !== $this->userResponse) {
            $res['UserResponse'] = $this->userResponse;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['UserRating'])) {
            $model->userRating = $map['UserRating'];
        }

        if (isset($map['UserResponse'])) {
            $model->userResponse = $map['UserResponse'];
        }

        return $model;
    }
}
