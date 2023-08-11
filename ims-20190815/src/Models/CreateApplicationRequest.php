<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @description The validity period of the access token.
     *
     * Default value: 3600.
     * @example 3600
     *
     * @var int
     */
    public $accessTokenValidity;

    /**
     * @description The name of the application.
     *
     * The name can be up to 64 characters in length. The name can contain letters, digits, periods (.), underscores (\_), and hyphens (-).
     * @example myapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The type of the application. Valid values:
     *
     *   WebApp: a web application that interacts with a browser.
     *   NativeApp: a native application that runs on an operating system, such as a desktop operating system or a mobile operating system.
     *   ServerApp: an application that accesses Alibaba Cloud services without the need of manual user logon. User provisioning is automated based on the System for Cross-Domain Identity Management (SCIM) protocol.
     *
     * @example WebApp
     *
     * @var string
     */
    public $appType;

    /**
     * @description The display name of the application.
     *
     * The name can be up to 24 characters in length.
     * @example myapp
     *
     * @var string
     */
    public $displayName;

    /**
     * @description Indicates whether the application can be installed by using other Alibaba Cloud accounts. Valid values:
     *
     *   true: If you do not set this parameter for applications of the NativeApp and ServerApp types, true is used.
     *   false: If you do not set this parameter for applications of the WebApp type, false is used.
     *
     * @example false
     *
     * @var bool
     */
    public $isMultiTenant;

    /**
     * @description The scope of application permissions.
     *
     * If you enter multiple permission scopes, separate them with semicolons (;).
     * @example aliuid
     *
     * @var string
     */
    public $predefinedScopes;

    /**
     * @description The callback URL.
     *
     * If you enter multiple callback URLs, separate them with semicolons (;).
     * @example https://www.example.com
     *
     * @var string
     */
    public $redirectUris;

    /**
     * @description The validity period of the refreshed token.
     *
     * Default value:
     *
     *   For applications of the WebApp and ServerApp types, if this parameter is left empty, the value 2592000 is used. The value 2592000 indicates that the validity period of the refreshed token is 30 days.
     *   For applications of the NativeApp type, if this parameter is left empty, the value 7776000 is used. The value 7776000 indicates that the validity period of the refreshed token is 90 days.
     *
     * @example 2592000
     *
     * @var int
     */
    public $refreshTokenValidity;

    /**
     * @description Indicates whether a secret is required. Valid values:
     *
     *   true
     *   false
     *
     * >
     *
     *   For applications of the WebApp and ServerApp types, this parameter is automatically set to true and cannot be changed.
     *   For applications of the NativeApp type, this parameter can be set to true or false. If you do not set this parameter, false is used. Applications of the NativeApp type run in untrusted environments and the secrets of these applications are not protected. Therefore, we recommend that you do not set this parameter to true unless otherwise specified. For more information, see [Use an application of the NativeApp type to log on to Alibaba Cloud](~~93697~~).
     *
     * @example true
     *
     * @var bool
     */
    public $secretRequired;
    protected $_name = [
        'accessTokenValidity'  => 'AccessTokenValidity',
        'appName'              => 'AppName',
        'appType'              => 'AppType',
        'displayName'          => 'DisplayName',
        'isMultiTenant'        => 'IsMultiTenant',
        'predefinedScopes'     => 'PredefinedScopes',
        'redirectUris'         => 'RedirectUris',
        'refreshTokenValidity' => 'RefreshTokenValidity',
        'secretRequired'       => 'SecretRequired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokenValidity) {
            $res['AccessTokenValidity'] = $this->accessTokenValidity;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->isMultiTenant) {
            $res['IsMultiTenant'] = $this->isMultiTenant;
        }
        if (null !== $this->predefinedScopes) {
            $res['PredefinedScopes'] = $this->predefinedScopes;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = $this->redirectUris;
        }
        if (null !== $this->refreshTokenValidity) {
            $res['RefreshTokenValidity'] = $this->refreshTokenValidity;
        }
        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
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
        if (isset($map['AccessTokenValidity'])) {
            $model->accessTokenValidity = $map['AccessTokenValidity'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IsMultiTenant'])) {
            $model->isMultiTenant = $map['IsMultiTenant'];
        }
        if (isset($map['PredefinedScopes'])) {
            $model->predefinedScopes = $map['PredefinedScopes'];
        }
        if (isset($map['RedirectUris'])) {
            $model->redirectUris = $map['RedirectUris'];
        }
        if (isset($map['RefreshTokenValidity'])) {
            $model->refreshTokenValidity = $map['RefreshTokenValidity'];
        }
        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }

        return $model;
    }
}
