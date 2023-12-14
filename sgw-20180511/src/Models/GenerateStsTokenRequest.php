<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class GenerateStsTokenRequest extends Model
{
    /**
     * @var int
     */
    public $expireInSeconds;

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
    public $tokenType;
    protected $_name = [
        'expireInSeconds' => 'ExpireInSeconds',
        'gatewayId'       => 'GatewayId',
        'securityToken'   => 'SecurityToken',
        'tokenType'       => 'TokenType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireInSeconds) {
            $res['ExpireInSeconds'] = $this->expireInSeconds;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateStsTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireInSeconds'])) {
            $model->expireInSeconds = $map['ExpireInSeconds'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        return $model;
    }
}
