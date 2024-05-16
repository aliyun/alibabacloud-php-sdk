<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityFollowerRequest extends Model
{
    /**
     * @description The notification method. Valid values: 1, 2, 4, and 5. 1 indicates that the notification is sent by email. 2 indicates that the notification is sent by email and text message. 4 indicates that the notification is sent by a DingTalk chatbot. 5 indicates that the notification is sent by a DingTalk chatbot to all members in a DingTalk group.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $alarmMode;

    /**
     * @description The ID of the partition filter expression.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The user ID of the subscriber.
     *
     * This parameter is required.
     * @example 123
     *
     * @var string
     */
    public $follower;

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
        'entityId'    => 'EntityId',
        'follower'    => 'Follower',
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
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
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
     * @return CreateQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
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
