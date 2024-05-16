<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateQualityFollowerRequest extends Model
{
    /**
     * @description The notification method. Valid values: 1, 2, 4, and 5. 1 indicates that the notification is sent by email. 2 indicates that the notification is sent by email and text message. 4 indicates that the notification is sent by a DingTalk chatbot. 5 indicates that the notification is sent by a DingTalk chatbot to all members in a DingTalk group.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $alarmMode;

    /**
     * @description The name of the subscriber.
     *
     * This parameter is required.
     * @example 1912232****
     *
     * @var string
     */
    public $follower;

    /**
     * @description The ID of the subscription relationship.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $followerId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the computing engine instance or data source.
     *
     * This parameter is required.
     * @example autotest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'alarmMode'   => 'AlarmMode',
        'follower'    => 'Follower',
        'followerId'  => 'FollowerId',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmMode) {
            $res['AlarmMode'] = $this->alarmMode;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }
        if (null !== $this->followerId) {
            $res['FollowerId'] = $this->followerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }
        if (isset($map['FollowerId'])) {
            $model->followerId = $map['FollowerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
