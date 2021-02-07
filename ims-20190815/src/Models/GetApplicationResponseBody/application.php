<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponseBody\application\delegatedScope;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponseBody\application\redirectUris;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $accessTokenValidity;

    /**
     * @var bool
     */
    public $secretRequired;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var redirectUris
     */
    public $redirectUris;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var delegatedScope
     */
    public $delegatedScope;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $refreshTokenValidity;

    /**
     * @var bool
     */
    public $isMultiTenant;

    /**
     * @var string
     */
    public $appType;
    protected $_name = [
        'displayName'          => 'DisplayName',
        'accessTokenValidity'  => 'AccessTokenValidity',
        'secretRequired'       => 'SecretRequired',
        'accountId'            => 'AccountId',
        'createDate'           => 'CreateDate',
        'appName'              => 'AppName',
        'redirectUris'         => 'RedirectUris',
        'updateDate'           => 'UpdateDate',
        'delegatedScope'       => 'DelegatedScope',
        'appId'                => 'AppId',
        'refreshTokenValidity' => 'RefreshTokenValidity',
        'isMultiTenant'        => 'IsMultiTenant',
        'appType'              => 'AppType',
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
        if (null !== $this->accessTokenValidity) {
            $res['AccessTokenValidity'] = $this->accessTokenValidity;
        }
        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = null !== $this->redirectUris ? $this->redirectUris->toMap() : null;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->delegatedScope) {
            $res['DelegatedScope'] = null !== $this->delegatedScope ? $this->delegatedScope->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->refreshTokenValidity) {
            $res['RefreshTokenValidity'] = $this->refreshTokenValidity;
        }
        if (null !== $this->isMultiTenant) {
            $res['IsMultiTenant'] = $this->isMultiTenant;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['AccessTokenValidity'])) {
            $model->accessTokenValidity = $map['AccessTokenValidity'];
        }
        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['RedirectUris'])) {
            $model->redirectUris = redirectUris::fromMap($map['RedirectUris']);
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['DelegatedScope'])) {
            $model->delegatedScope = delegatedScope::fromMap($map['DelegatedScope']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RefreshTokenValidity'])) {
            $model->refreshTokenValidity = $map['RefreshTokenValidity'];
        }
        if (isset($map['IsMultiTenant'])) {
            $model->isMultiTenant = $map['IsMultiTenant'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        return $model;
    }
}
