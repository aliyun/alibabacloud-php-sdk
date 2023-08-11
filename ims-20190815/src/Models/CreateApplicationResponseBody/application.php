<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application\delegatedScope;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application\redirectUris;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The validity period of the access token. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $accessTokenValidity;

    /**
     * @description The ID of the Alibaba Cloud account to which the application belongs.
     *
     * @example 177242285274****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the application.
     *
     * @example 472457090344041****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example myapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The type of the application.
     *
     * @example WebApp
     *
     * @var string
     */
    public $appType;

    /**
     * @description The creation time.
     *
     * @example 2020-10-23T08:06:57Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The information of application permissions.
     *
     * @var delegatedScope
     */
    public $delegatedScope;

    /**
     * @description The display name of the application.
     *
     * @example myapp
     *
     * @var string
     */
    public $displayName;

    /**
     * @description Indicates whether the application can be installed by using other Alibaba Cloud accounts.
     *
     * @example true
     *
     * @var bool
     */
    public $isMultiTenant;

    /**
     * @description The callback URL.
     *
     * @var redirectUris
     */
    public $redirectUris;

    /**
     * @description The validity period of the refreshed token. Unit: seconds.
     *
     * @example 7776000
     *
     * @var int
     */
    public $refreshTokenValidity;

    /**
     * @description Indicates whether a secret is required.
     *
     * @example true
     *
     * @var bool
     */
    public $secretRequired;

    /**
     * @description The update time.
     *
     * @example 2020-10-23T08:06:57Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'accessTokenValidity'  => 'AccessTokenValidity',
        'accountId'            => 'AccountId',
        'appId'                => 'AppId',
        'appName'              => 'AppName',
        'appType'              => 'AppType',
        'createDate'           => 'CreateDate',
        'delegatedScope'       => 'DelegatedScope',
        'displayName'          => 'DisplayName',
        'isMultiTenant'        => 'IsMultiTenant',
        'redirectUris'         => 'RedirectUris',
        'refreshTokenValidity' => 'RefreshTokenValidity',
        'secretRequired'       => 'SecretRequired',
        'updateDate'           => 'UpdateDate',
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
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->delegatedScope) {
            $res['DelegatedScope'] = null !== $this->delegatedScope ? $this->delegatedScope->toMap() : null;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->isMultiTenant) {
            $res['IsMultiTenant'] = $this->isMultiTenant;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = null !== $this->redirectUris ? $this->redirectUris->toMap() : null;
        }
        if (null !== $this->refreshTokenValidity) {
            $res['RefreshTokenValidity'] = $this->refreshTokenValidity;
        }
        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokenValidity'])) {
            $model->accessTokenValidity = $map['AccessTokenValidity'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DelegatedScope'])) {
            $model->delegatedScope = delegatedScope::fromMap($map['DelegatedScope']);
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IsMultiTenant'])) {
            $model->isMultiTenant = $map['IsMultiTenant'];
        }
        if (isset($map['RedirectUris'])) {
            $model->redirectUris = redirectUris::fromMap($map['RedirectUris']);
        }
        if (isset($map['RefreshTokenValidity'])) {
            $model->refreshTokenValidity = $map['RefreshTokenValidity'];
        }
        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
