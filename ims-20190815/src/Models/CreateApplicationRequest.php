<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var int
     */
    public $accessTokenValidity;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var bool
     */
    public $isMultiTenant;
    /**
     * @var string
     */
    public $predefinedScopes;
    /**
     * @var string
     */
    public $redirectUris;
    /**
     * @var int
     */
    public $refreshTokenValidity;
    /**
     * @var string
     */
    public $requiredScopes;
    /**
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
        'requiredScopes'       => 'RequiredScopes',
        'secretRequired'       => 'SecretRequired',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->requiredScopes) {
            $res['RequiredScopes'] = $this->requiredScopes;
        }

        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
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

        if (isset($map['RequiredScopes'])) {
            $model->requiredScopes = $map['RequiredScopes'];
        }

        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }

        return $model;
    }
}
