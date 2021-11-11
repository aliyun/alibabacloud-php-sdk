<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\FetchAccessTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $idToken;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken'  => 'Access_token',
        'expiresIn'    => 'Expires_in',
        'idToken'      => 'Id_token',
        'refreshToken' => 'Refresh_token',
        'scope'        => 'Scope',
        'tokenType'    => 'Token_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['Access_token'] = $this->accessToken;
        }
        if (null !== $this->expiresIn) {
            $res['Expires_in'] = $this->expiresIn;
        }
        if (null !== $this->idToken) {
            $res['Id_token'] = $this->idToken;
        }
        if (null !== $this->refreshToken) {
            $res['Refresh_token'] = $this->refreshToken;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->tokenType) {
            $res['Token_type'] = $this->tokenType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Access_token'])) {
            $model->accessToken = $map['Access_token'];
        }
        if (isset($map['Expires_in'])) {
            $model->expiresIn = $map['Expires_in'];
        }
        if (isset($map['Id_token'])) {
            $model->idToken = $map['Id_token'];
        }
        if (isset($map['Refresh_token'])) {
            $model->refreshToken = $map['Refresh_token'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Token_type'])) {
            $model->tokenType = $map['Token_type'];
        }

        return $model;
    }
}
