<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Tea\Model;

class ModifyNodeNumberPreCheckRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example c-b25e21e24388****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The warehouse ID.
     *
     * This parameter is required.
     *
     * @example ng-3d5ce6454354****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The number of nodes to which you want to change to.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $target;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeGroupId' => 'NodeGroupId',
        'target' => 'Target',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodeNumberPreCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
