<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeOnlineUserCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $adAssignedUserCount;

    /**
     * @var int
     */
    public $assignedUserCount;

    /**
     * @var int
     */
    public $onlineUserCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $simpleAssignedUserCount;
    protected $_name = [
        'adAssignedUserCount' => 'AdAssignedUserCount',
        'assignedUserCount' => 'AssignedUserCount',
        'onlineUserCount' => 'OnlineUserCount',
        'requestId' => 'RequestId',
        'simpleAssignedUserCount' => 'SimpleAssignedUserCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adAssignedUserCount) {
            $res['AdAssignedUserCount'] = $this->adAssignedUserCount;
        }

        if (null !== $this->assignedUserCount) {
            $res['AssignedUserCount'] = $this->assignedUserCount;
        }

        if (null !== $this->onlineUserCount) {
            $res['OnlineUserCount'] = $this->onlineUserCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->simpleAssignedUserCount) {
            $res['SimpleAssignedUserCount'] = $this->simpleAssignedUserCount;
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
        if (isset($map['AdAssignedUserCount'])) {
            $model->adAssignedUserCount = $map['AdAssignedUserCount'];
        }

        if (isset($map['AssignedUserCount'])) {
            $model->assignedUserCount = $map['AssignedUserCount'];
        }

        if (isset($map['OnlineUserCount'])) {
            $model->onlineUserCount = $map['OnlineUserCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SimpleAssignedUserCount'])) {
            $model->simpleAssignedUserCount = $map['SimpleAssignedUserCount'];
        }

        return $model;
    }
}
