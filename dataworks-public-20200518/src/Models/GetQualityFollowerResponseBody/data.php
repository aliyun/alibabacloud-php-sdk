<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $alarmMode;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $follower;

    /**
     * @var string
     */
    public $followerAccountName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'alarmMode' => 'AlarmMode',
        'createTime' => 'CreateTime',
        'entityId' => 'EntityId',
        'follower' => 'Follower',
        'followerAccountName' => 'FollowerAccountName',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'projectName' => 'ProjectName',
        'tableName' => 'TableName',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }

        if (null !== $this->followerAccountName) {
            $res['FollowerAccountName'] = $this->followerAccountName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }

        if (isset($map['FollowerAccountName'])) {
            $model->followerAccountName = $map['FollowerAccountName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
