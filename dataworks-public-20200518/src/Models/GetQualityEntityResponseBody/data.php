<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $relativeNode;

    /**
     * @var string
     */
    public $onDutyAccountName;

    /**
     * @var int
     */
    public $task;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $followers;

    /**
     * @var string
     */
    public $onDuty;

    /**
     * @var string
     */
    public $matchExpression;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $hasRelativeNode;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $entityLevel;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var int
     */
    public $sql;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;
    protected $_name = [
        'relativeNode'      => 'RelativeNode',
        'onDutyAccountName' => 'OnDutyAccountName',
        'task'              => 'Task',
        'tableName'         => 'TableName',
        'followers'         => 'Followers',
        'onDuty'            => 'OnDuty',
        'matchExpression'   => 'MatchExpression',
        'createTime'        => 'CreateTime',
        'projectName'       => 'ProjectName',
        'hasRelativeNode'   => 'HasRelativeNode',
        'envType'           => 'EnvType',
        'entityLevel'       => 'EntityLevel',
        'modifyUser'        => 'ModifyUser',
        'sql'               => 'Sql',
        'id'                => 'Id',
        'modifyTime'        => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relativeNode) {
            $res['RelativeNode'] = $this->relativeNode;
        }
        if (null !== $this->onDutyAccountName) {
            $res['OnDutyAccountName'] = $this->onDutyAccountName;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->followers) {
            $res['Followers'] = $this->followers;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->hasRelativeNode) {
            $res['HasRelativeNode'] = $this->hasRelativeNode;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->entityLevel) {
            $res['EntityLevel'] = $this->entityLevel;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['RelativeNode'])) {
            $model->relativeNode = $map['RelativeNode'];
        }
        if (isset($map['OnDutyAccountName'])) {
            $model->onDutyAccountName = $map['OnDutyAccountName'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Followers'])) {
            $model->followers = $map['Followers'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['HasRelativeNode'])) {
            $model->hasRelativeNode = $map['HasRelativeNode'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['EntityLevel'])) {
            $model->entityLevel = $map['EntityLevel'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
