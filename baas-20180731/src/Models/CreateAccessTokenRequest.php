<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessTokenRequest extends Model
{
    /**
     * @var string
     */
    public $accessTokenLifetime;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $refreshTokenLifetime;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'accessTokenLifetime'  => 'AccessTokenLifetime',
        'organizationId'       => 'OrganizationId',
        'refreshTokenLifetime' => 'RefreshTokenLifetime',
        'scope'                => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokenLifetime) {
            $res['AccessTokenLifetime'] = $this->accessTokenLifetime;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->refreshTokenLifetime) {
            $res['RefreshTokenLifetime'] = $this->refreshTokenLifetime;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokenLifetime'])) {
            $model->accessTokenLifetime = $map['AccessTokenLifetime'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RefreshTokenLifetime'])) {
            $model->refreshTokenLifetime = $map['RefreshTokenLifetime'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
