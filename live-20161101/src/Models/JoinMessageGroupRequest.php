<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class JoinMessageGroupRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example a494caec-***-695ef345db77
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to broadcast statistical messages. If you set the value to true, statistical messages of the message group are broadcasted after the users join the message group. The client can receive and process these messages. Valid values:
     *
     *   true: broadcasts statistical messages.
     *   false: does not broadcast statistical messages.
     *
     * @example true
     *
     * @var bool
     */
    public $broadCastStatistics;

    /**
     * @description The mode in which system messages are broadcasted. Valid values:
     *
     *   0: specifies that system messages are not broadcasted. This is the default value.
     *   1: specifies that system messages are broadcasted to specified users.
     *   2: specifies that system messages are broadcasted to the message group.
     *
     * @example 2
     *
     * @var int
     */
    public $broadCastType;

    /**
     * @description The ID of the message group to join.
     *
     * This parameter is required.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the user. Each user has a unique ID in the application. The ID can be up to 32 characters in length and can contain lowercase letters, digits, underscores (_), and periods (.). You can specify multiple user IDs.
     *
     * This parameter is required.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastStatistics' => 'BroadCastStatistics',
        'broadCastType' => 'BroadCastType',
        'groupId' => 'GroupId',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->broadCastStatistics) {
            $res['BroadCastStatistics'] = $this->broadCastStatistics;
        }
        if (null !== $this->broadCastType) {
            $res['BroadCastType'] = $this->broadCastType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinMessageGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BroadCastStatistics'])) {
            $model->broadCastStatistics = $map['BroadCastStatistics'];
        }
        if (isset($map['BroadCastType'])) {
            $model->broadCastType = $map['BroadCastType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
