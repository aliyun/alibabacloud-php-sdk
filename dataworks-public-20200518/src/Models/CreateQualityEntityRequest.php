<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityEntityRequest extends Model
{
    /**
     * @description Valid values: 0 (corrected when SQl is completed) and 1 (corrected when task is completed).
     *
     * @example 0
     *
     * @var int
     */
    public $entityLevel;

    /**
     * @description The engine or data source type.
     *
     * @example ODPS
     *
     * @var string
     */
    public $envType;

    /**
     * @description The partition expression.
     *
     * @example dt=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the maxcompute project or data source.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the table.
     *
     * @example dual
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'entityLevel'     => 'EntityLevel',
        'envType'         => 'EnvType',
        'matchExpression' => 'MatchExpression',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityLevel) {
            $res['EntityLevel'] = $this->entityLevel;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityLevel'])) {
            $model->entityLevel = $map['EntityLevel'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
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

        return $model;
    }
}
