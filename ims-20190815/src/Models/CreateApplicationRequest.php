<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $appPrincipalName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $redirectUris;

    /**
     * @var bool
     */
    public $secretRequired;

    /**
     * @var int
     */
    public $accessTokenValidity;

    /**
     * @var int
     */
    public $refreshTokenValidity;

    /**
     * @var string
     */
    public $predefinedScopes;

    /**
     * @var bool
     */
    public $isMultiTenant;

    /**
     * @var string
     */
    public $akProxySuffix;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'displayName'          => 'DisplayName',
        'appPrincipalName'     => 'AppPrincipalName',
        'appType'              => 'AppType',
        'redirectUris'         => 'RedirectUris',
        'secretRequired'       => 'SecretRequired',
        'accessTokenValidity'  => 'AccessTokenValidity',
        'refreshTokenValidity' => 'RefreshTokenValidity',
        'predefinedScopes'     => 'PredefinedScopes',
        'isMultiTenant'        => 'IsMultiTenant',
        'akProxySuffix'        => 'AkProxySuffix',
        'appName'              => 'AppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->appPrincipalName) {
            $res['AppPrincipalName'] = $this->appPrincipalName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = $this->redirectUris;
        }
        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
        }
        if (null !== $this->accessTokenValidity) {
            $res['AccessTokenValidity'] = $this->accessTokenValidity;
        }
        if (null !== $this->refreshTokenValidity) {
            $res['RefreshTokenValidity'] = $this->refreshTokenValidity;
        }
        if (null !== $this->predefinedScopes) {
            $res['PredefinedScopes'] = $this->predefinedScopes;
        }
        if (null !== $this->isMultiTenant) {
            $res['IsMultiTenant'] = $this->isMultiTenant;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['AppPrincipalName'])) {
            $model->appPrincipalName = $map['AppPrincipalName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['RedirectUris'])) {
            $model->redirectUris = $map['RedirectUris'];
        }
        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }
        if (isset($map['AccessTokenValidity'])) {
            $model->accessTokenValidity = $map['AccessTokenValidity'];
        }
        if (isset($map['RefreshTokenValidity'])) {
            $model->refreshTokenValidity = $map['RefreshTokenValidity'];
        }
        if (isset($map['PredefinedScopes'])) {
            $model->predefinedScopes = $map['PredefinedScopes'];
        }
        if (isset($map['IsMultiTenant'])) {
            $model->isMultiTenant = $map['IsMultiTenant'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
