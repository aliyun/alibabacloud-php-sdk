<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationRequest extends Model
{
    /**
     * @example 472457090344041****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 3600
     *
     * @var int
     */
    public $newAccessTokenValidity;

    /**
     * @example NewApp
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @example true
     *
     * @var bool
     */
    public $newIsMultiTenant;

    /**
     * @example openid
     *
     * @var string
     */
    public $newPredefinedScopes;

    /**
     * @example https://www.example.com
     *
     * @var string
     */
    public $newRedirectUris;

    /**
     * @example 7776000
     *
     * @var int
     */
    public $newRefreshTokenValidity;

    /**
     * @example true
     *
     * @var bool
     */
    public $newSecretRequired;
    protected $_name = [
        'appId'                   => 'AppId',
        'newAccessTokenValidity'  => 'NewAccessTokenValidity',
        'newDisplayName'          => 'NewDisplayName',
        'newIsMultiTenant'        => 'NewIsMultiTenant',
        'newPredefinedScopes'     => 'NewPredefinedScopes',
        'newRedirectUris'         => 'NewRedirectUris',
        'newRefreshTokenValidity' => 'NewRefreshTokenValidity',
        'newSecretRequired'       => 'NewSecretRequired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->newAccessTokenValidity) {
            $res['NewAccessTokenValidity'] = $this->newAccessTokenValidity;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->newIsMultiTenant) {
            $res['NewIsMultiTenant'] = $this->newIsMultiTenant;
        }
        if (null !== $this->newPredefinedScopes) {
            $res['NewPredefinedScopes'] = $this->newPredefinedScopes;
        }
        if (null !== $this->newRedirectUris) {
            $res['NewRedirectUris'] = $this->newRedirectUris;
        }
        if (null !== $this->newRefreshTokenValidity) {
            $res['NewRefreshTokenValidity'] = $this->newRefreshTokenValidity;
        }
        if (null !== $this->newSecretRequired) {
            $res['NewSecretRequired'] = $this->newSecretRequired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['NewAccessTokenValidity'])) {
            $model->newAccessTokenValidity = $map['NewAccessTokenValidity'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['NewIsMultiTenant'])) {
            $model->newIsMultiTenant = $map['NewIsMultiTenant'];
        }
        if (isset($map['NewPredefinedScopes'])) {
            $model->newPredefinedScopes = $map['NewPredefinedScopes'];
        }
        if (isset($map['NewRedirectUris'])) {
            $model->newRedirectUris = $map['NewRedirectUris'];
        }
        if (isset($map['NewRefreshTokenValidity'])) {
            $model->newRefreshTokenValidity = $map['NewRefreshTokenValidity'];
        }
        if (isset($map['NewSecretRequired'])) {
            $model->newSecretRequired = $map['NewSecretRequired'];
        }

        return $model;
    }
}
