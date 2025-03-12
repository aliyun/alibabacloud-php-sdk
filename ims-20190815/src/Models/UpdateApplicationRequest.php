<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 472457090344041****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The validity period of the access token.
     *
     * Valid values: 900 to 10800. Unit: seconds.
     * @example 3600
     *
     * @var int
     */
    public $newAccessTokenValidity;

    /**
     * @description The display name.
     *
     * @example NewApp
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @description Specifies whether the application can be installed by using other Alibaba Cloud accounts. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $newIsMultiTenant;

    /**
     * @description The permission that is granted on the application.
     *
     * The new value of this parameter overwrites the original value, and the permission specified by the new value takes effect. For example, if the original value is `/acs/ccc`, and the new value is `/acs/alidns`, `/acs/alidns` takes effect. If you want to retain the original permission and the `/acs/alidns` permission, set the value to `/acs/ccc;/acs/alidns`.
     * @example openid
     *
     * @var string
     */
    public $newPredefinedScopes;

    /**
     * @description The callback URL.
     *
     * If you enter multiple callback URLs, separate them with semicolons (;).
     * @example https://www.example.com
     *
     * @var string
     */
    public $newRedirectUris;

    /**
     * @description The validity period of the refresh token.
     *
     * Valid values: 7200 to 31536000. Unit: seconds.
     * @example 7776000
     *
     * @var int
     */
    public $newRefreshTokenValidity;

    /**
     * @description The required permission.
     *
     * >  If the permission that you specify for the `RequiredScopes` parameter is not included in value of the `PredefinedScopes` parameter, the permission does not take effect.
     * @example profile;aliuid
     *
     * @var string
     */
    public $newRequiredScopes;

    /**
     * @description Specifies whether a secret is required. Valid values:
     *
     *   true
     *   false
     *
     * >
     *
     *   For applications of the WebApp and ServerApp types, this parameter is automatically set to true and cannot be changed.
     *   For applications of the NativeApp type, this parameter can be set to true or false. If you do not set this parameter, false is used. Applications of the NativeApp type run in untrusted environments and the secrets of these applications are not protected. Therefore, we recommend that you do not set this parameter to true unless otherwise specified. For more information, see [Use an application of the NativeApp type to log on to Alibaba Cloud](https://help.aliyun.com/document_detail/93697.html).
     *
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
        'newRequiredScopes'       => 'NewRequiredScopes',
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
        if (null !== $this->newRequiredScopes) {
            $res['NewRequiredScopes'] = $this->newRequiredScopes;
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
        if (isset($map['NewRequiredScopes'])) {
            $model->newRequiredScopes = $map['NewRequiredScopes'];
        }
        if (isset($map['NewSecretRequired'])) {
            $model->newSecretRequired = $map['NewSecretRequired'];
        }

        return $model;
    }
}
