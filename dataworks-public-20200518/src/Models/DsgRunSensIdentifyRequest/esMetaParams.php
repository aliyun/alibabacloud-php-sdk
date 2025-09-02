<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgRunSensIdentifyRequest;

use AlibabaCloud\Dara\Model;

class esMetaParams extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string[]
     */
    public $tableNameList;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dbType' => 'DbType',
        'instanceId' => 'InstanceId',
        'projectName' => 'ProjectName',
        'schemaName' => 'SchemaName',
        'tableName' => 'TableName',
        'tableNameList' => 'TableNameList',
        'user' => 'User',
    ];

    public function validate()
    {
        if (\is_array($this->tableNameList)) {
            Model::validateArray($this->tableNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableNameList) {
            if (\is_array($this->tableNameList)) {
                $res['TableNameList'] = [];
                $n1 = 0;
                foreach ($this->tableNameList as $item1) {
                    $res['TableNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableNameList'])) {
            if (!empty($map['TableNameList'])) {
                $model->tableNameList = [];
                $n1 = 0;
                foreach ($map['TableNameList'] as $item1) {
                    $model->tableNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
