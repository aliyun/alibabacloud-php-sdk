<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskConfigRequest extends Model
{
    /**
     * @description The advanced configuration for the node. The value of this parameter must be a JSON string.
     *
     * This parameter is required.
     * @example { "rerun":{ "rerunEnable":true,  "rerunCount":1,   "rerunInterval":10 } }
     *
     * @var string
     */
    public $nodeConfig;

    /**
     * @description The ID of the task node. You can call the [GetTaskInstanceRelation](https://help.aliyun.com/document_detail/424711.html) operation to query the node ID.
     *
     * This parameter is required.
     * @example 43****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeConfig' => 'NodeConfig',
        'nodeId'     => 'NodeId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeConfig) {
            $res['NodeConfig'] = $this->nodeConfig;
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
     * @return UpdateTaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeConfig'])) {
            $model->nodeConfig = $map['NodeConfig'];
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
