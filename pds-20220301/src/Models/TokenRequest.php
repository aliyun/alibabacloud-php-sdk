<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class TokenRequest extends Model
{
    /**
     * @example ey***asd
     *
     * @var string
     */
    public $assertion;

    /**
     * @example 1Zu***flH
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 80D***3i5
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @example 0045157fa8e24f4f9a0d9e3ff158c1e0
     *
     * @var string
     */
    public $code;

    /**
     * @example refresh_token
     *
     * @var string
     */
    public $grantType;

    /**
     * @example https://aliyun.com/pds
     *
     * @var string
     */
    public $redirectUri;

    /**
     * @example 399623e13353490391266c7d48a13ed1
     *
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'assertion'    => 'assertion',
        'clientId'     => 'client_id',
        'clientSecret' => 'client_secret',
        'code'         => 'code',
        'grantType'    => 'grant_type',
        'redirectUri'  => 'redirect_uri',
        'refreshToken' => 'refresh_token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assertion) {
            $res['assertion'] = $this->assertion;
        }
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['client_secret'] = $this->clientSecret;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->grantType) {
            $res['grant_type'] = $this->grantType;
        }
        if (null !== $this->redirectUri) {
            $res['redirect_uri'] = $this->redirectUri;
        }
        if (null !== $this->refreshToken) {
            $res['refresh_token'] = $this->refreshToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assertion'])) {
            $model->assertion = $map['assertion'];
        }
        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }
        if (isset($map['client_secret'])) {
            $model->clientSecret = $map['client_secret'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['grant_type'])) {
            $model->grantType = $map['grant_type'];
        }
        if (isset($map['redirect_uri'])) {
            $model->redirectUri = $map['redirect_uri'];
        }
        if (isset($map['refresh_token'])) {
            $model->refreshToken = $map['refresh_token'];
        }

        return $model;
    }
}
