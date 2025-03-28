<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data\tableEntityList;

use AlibabaCloud\Dara\Model;

class entityContent extends Model
{
    /**
     * @var string
     */
    public $dataSourceQualifiedName;

    /**
     * @var string
     */
    public $dataSourceUniqueId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataSourceQualifiedName' => 'DataSourceQualifiedName',
        'dataSourceUniqueId' => 'DataSourceUniqueId',
        'databaseName' => 'DatabaseName',
        'instanceId' => 'InstanceId',
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
        if (null !== $this->dataSourceQualifiedName) {
            $res['DataSourceQualifiedName'] = $this->dataSourceQualifiedName;
        }

        if (null !== $this->dataSourceUniqueId) {
            $res['DataSourceUniqueId'] = $this->dataSourceUniqueId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['DataSourceQualifiedName'])) {
            $model->dataSourceQualifiedName = $map['DataSourceQualifiedName'];
        }

        if (isset($map['DataSourceUniqueId'])) {
            $model->dataSourceUniqueId = $map['DataSourceUniqueId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
