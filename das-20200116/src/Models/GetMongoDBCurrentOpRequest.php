<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetMongoDBCurrentOpRequest extends Model
{
    /**
     * @description The `db.currentOp()` command that is used to filter sessions. For more information, see [db.currentOp()](https://docs.mongodb.com/manual/reference/method/db.currentOp/) of MongoDB Documentation.
     *
     * @example { "active" : true }
     *
     * @var string
     */
    public $filterDoc;

    /**
     * @description The instance ID.
     *
     * @example dds-uf608087********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  If you do not specify a node ID, the sessions of the primary node are queried by default.
     * @example 23302531
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description A reserved parameter. You do not need to specify the parameter.
     *
     * @example None
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'filterDoc'  => 'FilterDoc',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'role'       => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterDoc) {
            $res['FilterDoc'] = $this->filterDoc;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMongoDBCurrentOpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterDoc'])) {
            $model->filterDoc = $map['FilterDoc'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
