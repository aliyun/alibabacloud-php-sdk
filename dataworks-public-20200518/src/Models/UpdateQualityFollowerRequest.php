<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateQualityFollowerRequest extends Model
{
    /**
     * @var int
     */
    public $alarmMode;

    /**
     * @var string
     */
    public $follower;

    /**
     * @var int
     */
    public $followerId;

    /**
     * @var int
     */
    public $projectId;

    /**
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
