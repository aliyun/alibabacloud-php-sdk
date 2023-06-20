<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class RollbackCurrentProjectNodeRequest extends Model
{
    /**
     * @example 4****89
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1925
     *
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackCurrentProjectNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
