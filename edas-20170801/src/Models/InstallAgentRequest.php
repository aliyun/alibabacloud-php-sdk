<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InstallAgentRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example b3e3f77b-462e-****-****-bec8727a4dc8
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is discontinued.
     *
     * @example true
     *
     * @var bool
     */
    public $doAsync;

    /**
     * @description The ID of the ECS instance. Separate multiple IDs with commas (,). Example: instanceId1,instanceId2.
     *
     * @example 2ze7s2v0b789k60pk1af
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'doAsync'     => 'DoAsync',
        'instanceIds' => 'InstanceIds',
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
        if (null !== $this->doAsync) {
            $res['DoAsync'] = $this->doAsync;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DoAsync'])) {
            $model->doAsync = $map['DoAsync'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
