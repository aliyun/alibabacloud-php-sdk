<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the partition filter expression was created.
     *
     * @example 1593964800000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The level of the partition filter expression. Valid values:
     *
     *   0: The partition filter expression is at the SQL level. This indicates that the system checks data quality after each SQL statement is executed.
     *   1: The partition filter expression is at the node level. This indicates that the system checks data quality after all the SQL statements for a node are executed.
     *
     * @example 0
     *
     * @var int
     */
    public $entityLevel;

    /**
     * @description The type of the compute engine instance or data source.
     *
     * @example odps
     *
     * @var string
     */
    public $envType;

    /**
     * @description The ID of the Alibaba Cloud account that is used to receive alert notifications.
     *
     * @example 1822931****
     *
     * @var string
     */
    public $followers;

    /**
     * @description Indicates whether the partition filter expression is associated with a node. Valid values:
     *
     *   true: The partition filter expression is associated with a node.
     *   false: The partition filter expression is not associated with a node.
     *
     * @example true
     *
     * @var bool
     */
    public $hasRelativeNode;

    /**
     * @description The ID of the partition filter expression.
     *
     * @example 4003918
     *
     * @var int
     */
    public $id;

    /**
     * @description The partition filter expression.
     *
     * @example dt=$[yyyymmdd-1]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @description The time when the partition filter expression was modified.
     *
     * @example 1593964800000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to modify the partition filter expression.
     *
     * @example 1822931****
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The ID of the Alibaba Cloud account that is used to configure the partition filter expression.
     *
     * @example 1822931****
     *
     * @var string
     */
    public $onDuty;

    /**
     * @description The name of the Alibaba Cloud account that is used to configure the partition filter expression.
     *
     * @example test
     *
     * @var string
     */
    public $onDutyAccountName;

    /**
     * @description The name of the compute engine instance or data source.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The information about the node with which the partition filter expression is associated. The information includes the following items:
     *
     *   ProjectName: the name of the workspace to which the node belongs.
     *   NodeID: the ID of the node.
     *
     * @example [{"projectName":"xc_DP****","nodeId":7000026****}]
     *
     * @var string
     */
    public $relativeNode;

    /**
     * @description Indicates that the partition filter expression is at the SQL level.
     *
     * @example 0
     *
     * @var int
     */
    public $sql;

    /**
     * @description The name of the partitioned table.
     *
     * @example test_dqc_de****
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The node.
     *
     * @example 0
     *
     * @var int
     */
    public $task;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'entityLevel'       => 'EntityLevel',
        'envType'           => 'EnvType',
        'followers'         => 'Followers',
        'hasRelativeNode'   => 'HasRelativeNode',
        'id'                => 'Id',
        'matchExpression'   => 'MatchExpression',
        'modifyTime'        => 'ModifyTime',
        'modifyUser'        => 'ModifyUser',
        'onDuty'            => 'OnDuty',
        'onDutyAccountName' => 'OnDutyAccountName',
        'projectName'       => 'ProjectName',
        'relativeNode'      => 'RelativeNode',
        'sql'               => 'Sql',
        'tableName'         => 'TableName',
        'task'              => 'Task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->entityLevel) {
            $res['EntityLevel'] = $this->entityLevel;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->followers) {
            $res['Followers'] = $this->followers;
        }
        if (null !== $this->hasRelativeNode) {
            $res['HasRelativeNode'] = $this->hasRelativeNode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->onDutyAccountName) {
            $res['OnDutyAccountName'] = $this->onDutyAccountName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->relativeNode) {
            $res['RelativeNode'] = $this->relativeNode;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EntityLevel'])) {
            $model->entityLevel = $map['EntityLevel'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Followers'])) {
            $model->followers = $map['Followers'];
        }
        if (isset($map['HasRelativeNode'])) {
            $model->hasRelativeNode = $map['HasRelativeNode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['OnDutyAccountName'])) {
            $model->onDutyAccountName = $map['OnDutyAccountName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RelativeNode'])) {
            $model->relativeNode = $map['RelativeNode'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        return $model;
    }
}
