<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DeleteNodeGroupRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i114444141733395242745
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The node group ID.
     *
     * @example i121824791737080429819
     *
     * @var string
     */
    public $nodeGroupId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'nodeGroupId' => 'NodeGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNodeGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        return $model;
    }
}
