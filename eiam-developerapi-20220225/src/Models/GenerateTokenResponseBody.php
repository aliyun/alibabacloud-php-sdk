<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GenerateTokenResponseBody extends Model
{
    /**
     * @description The access token.
     *
     * @example ATxxx
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description The time when the token expires. This value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1653288641
     *
     * @var int
     */
    public $expiresAt;

    /**
     * @description The remaining validity period of the token. Unit: seconds.
     *
     * @example 1200
     *
     * @var int
     */
    public $expiresIn;

    /**
     * @description The ID token.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $idToken;

    /**
     * @description The refresh token.
     *
     * @example RTxxx
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @description The type of the token. Valid values: Basic Bearer
     *
     * @example Bearer
     *
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken' => 'access_token',
        'expiresAt' => 'expires_at',
        'expiresIn' => 'expires_in',
        'idToken' => 'id_token',
        'refreshToken' => 'refresh_token',
        'tokenType' => 'token_type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        if (null !== $this->expiresAt) {
            $res['expires_at'] = $this->expiresAt;
        }
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        if (null !== $this->idToken) {
            $res['id_token'] = $this->idToken;
        }
        if (null !== $this->refreshToken) {
            $res['refresh_token'] = $this->refreshToken;
        }
        if (null !== $this->tokenType) {
            $res['token_type'] = $this->tokenType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_token'])) {
            $model->accessToken = $map['access_token'];
        }
        if (isset($map['expires_at'])) {
            $model->expiresAt = $map['expires_at'];
        }
        if (isset($map['expires_in'])) {
            $model->expiresIn = $map['expires_in'];
        }
        if (isset($map['id_token'])) {
            $model->idToken = $map['id_token'];
        }
        if (isset($map['refresh_token'])) {
            $model->refreshToken = $map['refresh_token'];
        }
        if (isset($map['token_type'])) {
            $model->tokenType = $map['token_type'];
        }

        return $model;
    }
}
