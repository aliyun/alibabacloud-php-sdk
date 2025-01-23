<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateQualityFollowerRequest extends Model
{
    /**
     * @var int
     */
    public $alarmMode;
    /**
     * @var int
     */
    public $entityId;
    /**
     * @var string
     */
    public $follower;
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
        'entityId'    => 'EntityId',
        'follower'    => 'Follower',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
