<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class OAuth2TokenEndpointResponseBody extends Model
{
    /**
     * @example UJMiksSwuMJvwXrJLULMykSw6qZ6VqaxOkN4qd5cW1Q4HhsLxvUR5xVOIv1WB3br5LoP20lPa8xiYLSMbt8JqHACXdSdw7fNkhRTIHnadxWW5jfDg7BELUB0FcFfPiv0
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 604799
     *
     * @var int
     */
    public $expiresIn;

    /**
     * @example zsEcmaUeb8-NZW4IIUDD7qdgBNflrj6fH8BXJYbW9iXihZTgvbcr1_utC9p5HJLn_lXVwhfivBTgUQZBCGvGl5lxqaxFhmFtt-OrBduFQKL9x8p2lpEMKlxuKHZZZJ3A
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @example 4070039E-5822-1F32-9295-1D2883E48BA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example aligenie:user:basic:read aligenie:iot:scene:read
     *
     * @var string
     */
    public $scope;

    /**
     * @example Bearer
     *
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken'  => 'AccessToken',
        'expiresIn'    => 'ExpiresIn',
        'refreshToken' => 'RefreshToken',
        'requestId'    => 'RequestId',
        'scope'        => 'Scope',
        'tokenType'    => 'TokenType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->expiresIn) {
            $res['ExpiresIn'] = $this->expiresIn;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OAuth2TokenEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['ExpiresIn'])) {
            $model->expiresIn = $map['ExpiresIn'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        return $model;
    }
}
