<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomAuthPermissionRequest extends Model
{
    /**
     * @description The username or client ID.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $identity;

    /**
     * @description The identity type. Valid values:
     *
     *   USER
     *   CLIENT
     *
     * This parameter is required.
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance.
     *
     * This parameter is required.
     * @example mqtt-cn-0pp1ldu****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The topic on which you want to grant permissions. Multi-level topics and Wildcard characters are supported.
     *
     * This parameter is required.
     * @example test/t1
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'identity'     => 'Identity',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomAuthPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
