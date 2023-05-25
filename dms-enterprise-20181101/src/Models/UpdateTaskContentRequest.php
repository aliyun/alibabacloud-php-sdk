<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskContentRequest extends Model
{
    /**
     * @description The node configurations after modification.
     *
     * @example { "dbId":12****, "sql":"select * from test_table",   "dbType":"lindorm_sql"  }
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The ID of the task node. You can call the [GetTaskInstanceRelation](~~424711~~) operation to query the node ID.
     *
     * @example 43****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the ["View information about the current tenant"](~~181330~~) section of the Manage DMS tenants topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeContent' => 'NodeContent',
        'nodeId'      => 'NodeId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
