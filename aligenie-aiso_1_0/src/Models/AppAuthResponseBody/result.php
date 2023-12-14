<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\AppAuthResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $accessTokenExpire;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var int
     */
    public $refreshTokenExpire;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accessKey'          => 'AccessKey',
        'accessToken'        => 'AccessToken',
        'accessTokenExpire'  => 'AccessTokenExpire',
        'appId'              => 'AppId',
        'refreshToken'       => 'RefreshToken',
        'refreshTokenExpire' => 'RefreshTokenExpire',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->accessTokenExpire) {
            $res['AccessTokenExpire'] = $this->accessTokenExpire;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->refreshTokenExpire) {
            $res['RefreshTokenExpire'] = $this->refreshTokenExpire;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AccessTokenExpire'])) {
            $model->accessTokenExpire = $map['AccessTokenExpire'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['RefreshTokenExpire'])) {
            $model->refreshTokenExpire = $map['RefreshTokenExpire'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
