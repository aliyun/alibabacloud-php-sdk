<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class AddCustomAuthPermissionRequest extends Model
{
    /**
     * @description Specify whether to allow or deny the permissions.
     *
     * This parameter is required.
     * @example ALLOW
     *
     * @var string
     */
    public $effect;

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
     * @description The identity type. Valid values: USER and CLIENT.
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
     * @example mqtt-cn-0pp12gl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The permissions that you want to add.
     *
     * This parameter is required.
     * @example PUB_SUB
     *
     * @var string
     */
    public $permitAction;

    /**
     * @description The topic on which you want to add the permissions. Multi-level topics and wildcard characters are supported.
     *
     * This parameter is required.
     * @example test/t1
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'effect'       => 'Effect',
        'identity'     => 'Identity',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'permitAction' => 'PermitAction',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permitAction) {
            $res['PermitAction'] = $this->permitAction;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomAuthPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermitAction'])) {
            $model->permitAction = $map['PermitAction'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
