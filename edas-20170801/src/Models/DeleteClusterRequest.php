<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example 8b96ade0-0a07-****-af9d-5ed83640d076
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster ID. Valid values:
     *
     *   0: specifies the ID of the cluster in Enterprise Distributed Application Service (EDAS).
     *   1: specifies the ID of the ACK cluster.
     *
     * @example 0
     *
     * @var int
     */
    public $mode;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'mode'      => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
