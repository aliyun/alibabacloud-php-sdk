<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateRequestDiagnosisRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example das
     *
     * @var string
     */
    public $database;

    /**
     * @description The instance ID.
     *
     * @example rm-0iwhhl8gx0ld6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified for PolarDB for MySQL, PolarDB for PostgreSQL (Compatible with Oracle), and ApsaraDB for MongoDB instances.
     * @example 202****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The SQL statement that you want to diagnose.
     *
     * @example select * from test where name = \"mockUser\"
     *
     * @var string
     */
    public $sql;
    protected $_name = [
        'database'   => 'Database',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'sql'        => 'Sql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRequestDiagnosisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}
