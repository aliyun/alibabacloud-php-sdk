<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIPatternUpdateEntryRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $patternDescription;

    /**
     * @var string
     */
    public $patternParams;

    /**
     * @var string
     */
    public $patternQuestion;

    /**
     * @var string
     */
    public $patternSql;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dbName' => 'DbName',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'patternDescription' => 'PatternDescription',
        'patternParams' => 'PatternParams',
        'patternQuestion' => 'PatternQuestion',
        'patternSql' => 'PatternSql',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->patternDescription) {
            $res['PatternDescription'] = $this->patternDescription;
        }

        if (null !== $this->patternParams) {
            $res['PatternParams'] = $this->patternParams;
        }

        if (null !== $this->patternQuestion) {
            $res['PatternQuestion'] = $this->patternQuestion;
        }

        if (null !== $this->patternSql) {
            $res['PatternSql'] = $this->patternSql;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PatternDescription'])) {
            $model->patternDescription = $map['PatternDescription'];
        }

        if (isset($map['PatternParams'])) {
            $model->patternParams = $map['PatternParams'];
        }

        if (isset($map['PatternQuestion'])) {
            $model->patternQuestion = $map['PatternQuestion'];
        }

        if (isset($map['PatternSql'])) {
            $model->patternSql = $map['PatternSql'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
