<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateQualityEntityRequest extends Model
{
    /**
     * @var int
     */
    public $entityLevel;

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
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'entityLevel' => 'EntityLevel',
        'envType' => 'EnvType',
        'matchExpression' => 'MatchExpression',
        'projectId' => 'ProjectId',
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
