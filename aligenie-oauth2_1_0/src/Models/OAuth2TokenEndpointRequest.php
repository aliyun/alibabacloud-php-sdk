<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class OAuth2TokenEndpointRequest extends Model
{
    /**
     * @example rf3mi4JOU-xRIX2zEuRLHi-U9mPnvISeSphbwiBHJ5mEKZtG-xJsbBWrq8RmhQEPRYh0JOd3DaS_VZ90soD_YrsT4OBtgD06DmdIKL2_5KFfI6p_SjXX2-UMJuGfXDkB
     *
     * @var string
     */
    public $code;

    /**
     * @example authorization_code
     *
     * @var string
     */
    public $grantType;

    /**
     * @example https://xxx.xxx.com/xxx
     *
     * @var string
     */
    public $redirectUri;

    /**
     * @example zsEcmaUeb8-NZW4IIUDD7qdgBNflrj6fH8BXJYbW9iXihZTgvbcr1_utC9p5HJLn_lXVwhfivBTgUQZBCGvGl5lxqaxFhmFtt-OrBduFQKL9x8p2lpEMKlxuKHZZZJ3A
     *
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'code'         => 'Code',
        'grantType'    => 'GrantType',
        'redirectUri'  => 'RedirectUri',
        'refreshToken' => 'RefreshToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return OAuth2TokenEndpointRequest
     */
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
