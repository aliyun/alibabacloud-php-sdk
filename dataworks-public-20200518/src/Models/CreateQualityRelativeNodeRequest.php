<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityRelativeNodeRequest extends Model
{
    /**
     * @description The type of the compute engine or data source.
     *
     * This parameter is required.
     * @example ODPS
     *
     * @var string
     */
    public $envType;

    /**
     * @description The partition filter expression.
     *
     * This parameter is required.
     * @example dt=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @description The node ID. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 12321
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the compute engine or data source.
     *
     * This parameter is required.
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the table.
     *
     * This parameter is required.
     * @example dual
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the workspace to which the node belongs.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $targetNodeProjectId;

    /**
     * @description The name of the workspace to which the node to be associated with the partition filter expression belongs.
     *
     * This parameter is required.
     * @example autotest
     *
     * @var string
     */
    public $targetNodeProjectName;
    protected $_name = [
        'envType'               => 'EnvType',
        'matchExpression'       => 'MatchExpression',
        'nodeId'                => 'NodeId',
        'projectId'             => 'ProjectId',
        'projectName'           => 'ProjectName',
        'tableName'             => 'TableName',
        'targetNodeProjectId'   => 'TargetNodeProjectId',
        'targetNodeProjectName' => 'TargetNodeProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->targetNodeProjectId) {
            $res['TargetNodeProjectId'] = $this->targetNodeProjectId;
        }
        if (null !== $this->targetNodeProjectName) {
            $res['TargetNodeProjectName'] = $this->targetNodeProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityRelativeNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TargetNodeProjectId'])) {
            $model->targetNodeProjectId = $map['TargetNodeProjectId'];
        }
        if (isset($map['TargetNodeProjectName'])) {
            $model->targetNodeProjectName = $map['TargetNodeProjectName'];
        }

        return $model;
    }
}
