<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $followerAccountName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $alarmMode;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $follower;
    protected $_name = [
        'followerAccountName' => 'FollowerAccountName',
        'tableName'           => 'TableName',
        'alarmMode'           => 'AlarmMode',
        'entityId'            => 'EntityId',
        'projectName'         => 'ProjectName',
        'id'                  => 'Id',
        'follower'            => 'Follower',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->followerAccountName) {
            $res['FollowerAccountName'] = $this->followerAccountName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->alarmMode) {
            $res['AlarmMode'] = $this->alarmMode;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FollowerAccountName'])) {
            $model->followerAccountName = $map['FollowerAccountName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }

        return $model;
    }
}
