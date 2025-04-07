<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class OAuth2TokenEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'expiresIn' => 'ExpiresIn',
        'refreshToken' => 'RefreshToken',
        'requestId' => 'RequestId',
        'scope' => 'Scope',
        'tokenType' => 'TokenType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
