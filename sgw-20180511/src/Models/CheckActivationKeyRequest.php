<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CheckActivationKeyRequest extends Model
{
    /**
     * @var string
     */
    public $cryptKey;

    /**
     * @var string
     */
    public $cryptText;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'cryptKey'      => 'CryptKey',
        'cryptText'     => 'CryptText',
        'gatewayId'     => 'GatewayId',
        'securityToken' => 'SecurityToken',
        'token'         => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cryptKey) {
            $res['CryptKey'] = $this->cryptKey;
        }
        if (null !== $this->cryptText) {
            $res['CryptText'] = $this->cryptText;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckActivationKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CryptKey'])) {
            $model->cryptKey = $map['CryptKey'];
        }
        if (isset($map['CryptText'])) {
            $model->cryptText = $map['CryptText'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
