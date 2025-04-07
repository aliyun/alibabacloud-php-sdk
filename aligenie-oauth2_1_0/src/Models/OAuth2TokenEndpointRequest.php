<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class OAuth2TokenEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $grantType;

    /**
     * @var string
     */
    public $redirectUri;

    /**
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'code' => 'Code',
        'grantType' => 'GrantType',
        'redirectUri' => 'RedirectUri',
        'refreshToken' => 'RefreshToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }

        if (null !== $this->redirectUri) {
            $res['RedirectUri'] = $this->redirectUri;
        }

        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        if (isset($map['RedirectUri'])) {
            $model->redirectUri = $map['RedirectUri'];
        }

        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }

        return $model;
    }
}
