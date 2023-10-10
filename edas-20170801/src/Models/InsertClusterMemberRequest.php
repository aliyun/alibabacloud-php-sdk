<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertClusterMemberRequest extends Model
{
    /**
     * @description The ID of the cluster into which you want to import ECS instances.
     *
     * @example b3e3f77b-462e-****-****-bec8727a4dc8
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the ECS instance that you want to import into the cluster. Separate multiple IDs with commas (,).
     *
     * @example i-2ze7s2v0b789k60p****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The logon password of the ECS instance that you want to import into the cluster.
     *
     * @example YourPassword
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'clusterId'   => 'clusterId',
        'instanceIds' => 'instanceIds',
        'password'    => 'password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertClusterMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['instanceIds'])) {
            $model->instanceIds = $map['instanceIds'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}
