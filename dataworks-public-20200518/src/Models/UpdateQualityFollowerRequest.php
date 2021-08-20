<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateQualityFollowerRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $followerId;

    /**
     * @var string
     */
    public $follower;

    /**
     * @var int
     */
    public $alarmMode;
    protected $_name = [
        'projectName' => 'ProjectName',
        'followerId'  => 'FollowerId',
        'follower'    => 'Follower',
        'alarmMode'   => 'AlarmMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->followerId) {
            $res['FollowerId'] = $this->followerId;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }
        if (null !== $this->alarmMode) {
            $res['AlarmMode'] = $this->alarmMode;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['FollowerId'])) {
            $model->followerId = $map['FollowerId'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }

        return $model;
    }
}
