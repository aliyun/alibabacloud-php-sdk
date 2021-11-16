<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityRelativeNodeRequest extends Model
{
    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $matchExpression;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $projectId;

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
    public $targetNodeProjectId;

    /**
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
     * @return DeleteQualityRelativeNodeRequest
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
