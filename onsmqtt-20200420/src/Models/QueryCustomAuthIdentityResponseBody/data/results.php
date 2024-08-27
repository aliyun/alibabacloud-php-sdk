<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthIdentityResponseBody\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The client ID if IdentityType is set to CLIENT.
     *
     * @example GID_ICP@@@4d378084
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
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @description The AccessKey secret.
     *
     * @example 62a5916d71767185b48907d85c2efae2
     *
     * @var string
     */
    public $secret;

    /**
     * @description The signature verification mode. ORIGIN: compares the password and the AccessKey secret. SIGNED: uses the HMAC_SHA1 algorithm to sign the client ID to obtain a password and then compares the password.
     *
     * @example SIGNED
     *
     * @var string
     */
    public $signMode;

    /**
     * @description The username.
     *
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'clientId'     => 'ClientId',
        'identityType' => 'IdentityType',
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
     * @return results
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
