<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class DescribeQueryExplainRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $sql;
    protected $_name = [
        'dbName' => 'DbName',
        'instanceId' => 'InstanceId',
        'nodeId' => 'NodeId',
        'schema' => 'Schema',
        'sql' => 'Sql',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}
