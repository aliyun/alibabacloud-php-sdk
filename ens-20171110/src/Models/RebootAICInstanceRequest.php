<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RebootAICInstanceRequest extends Model
{
    /**
     * @description The ID of the AIC instance.
     *
     * @example aic-instance****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IDs of the AIC instance groups.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the server.
     *
     * @example cas-instance****
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'instanceIds' => 'InstanceIds',
        'serverId'    => 'ServerId',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootAICInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
