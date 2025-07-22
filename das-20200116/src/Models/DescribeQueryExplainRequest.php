<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeQueryExplainRequest extends Model
{
    /**
     * @example dbtest01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description This parameter is required.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example pi-bp1v203xzzh0a****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @description This parameter is required.
     *
     * @example select * from test where name = \\"mockUser\\"
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeQueryExplainRequest
     */
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
