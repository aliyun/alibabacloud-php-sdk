<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomAuthIdentityRequest extends Model
{
    /**
     * @description The client ID if you set IdentityType to CLIENT.
     *
     * @example GID_test@@@test
     *
     * @var string
     */
    public $clientId;

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
     * @example post-111****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The AccessKey secret.
     *
     * This parameter is required.
     * @example xxxx
     *
     * @var string
     */
    public $secret;

    /**
     * @description The signature verification mode. ORIGIN: compares the password and AccessKey secret. SIGNED: uses the HMAC_SHA1 algorithm to sign the client ID to obtain a password and then compares the password.
     *
     * This parameter is required.
     * @example SIGNED
     *
     * @var string
     */
    public $signMode;

    /**
     * @description The username.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'clientId'     => 'ClientId',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'secret'       => 'Secret',
        'signMode'     => 'SignMode',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }
        if (null !== $this->signMode) {
            $res['SignMode'] = $this->signMode;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomAuthIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }
        if (isset($map['SignMode'])) {
            $model->signMode = $map['SignMode'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
