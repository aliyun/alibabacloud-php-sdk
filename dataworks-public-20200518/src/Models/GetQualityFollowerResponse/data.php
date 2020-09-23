<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $entityId;

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
        'tableName'   => 'TableName',
        'id'          => 'Id',
        'entityId'    => 'EntityId',
        'follower'    => 'Follower',
        'alarmMode'   => 'AlarmMode',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('follower', $this->follower, true);
        Model::validateRequired('alarmMode', $this->alarmMode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
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
