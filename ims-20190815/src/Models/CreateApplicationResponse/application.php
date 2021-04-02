<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponse;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponse\application\delegatedScope;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponse\application\redirectUris;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $secretRequired;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $isMultiTenant;

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
    public $appType;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var delegatedScope
     */
    public $delegatedScope;

    /**
     * @var redirectUris
     */
    public $redirectUris;
    protected $_name = [
        'updateDate'           => 'UpdateDate',
        'accountId'            => 'AccountId',
        'appId'                => 'AppId',
        'secretRequired'       => 'SecretRequired',
        'displayName'          => 'DisplayName',
        'isMultiTenant'        => 'IsMultiTenant',
        'accessTokenValidity'  => 'AccessTokenValidity',
        'refreshTokenValidity' => 'RefreshTokenValidity',
        'appType'              => 'AppType',
        'createDate'           => 'CreateDate',
        'appName'              => 'AppName',
        'delegatedScope'       => 'DelegatedScope',
        'redirectUris'         => 'RedirectUris',
    ];

    public function validate()
    {
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('secretRequired', $this->secretRequired, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('isMultiTenant', $this->isMultiTenant, true);
        Model::validateRequired('accessTokenValidity', $this->accessTokenValidity, true);
        Model::validateRequired('refreshTokenValidity', $this->refreshTokenValidity, true);
        Model::validateRequired('appType', $this->appType, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('delegatedScope', $this->delegatedScope, true);
        Model::validateRequired('redirectUris', $this->redirectUris, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->isMultiTenant) {
            $res['IsMultiTenant'] = $this->isMultiTenant;
        }
        if (null !== $this->accessTokenValidity) {
            $res['AccessTokenValidity'] = $this->accessTokenValidity;
        }
        if (null !== $this->refreshTokenValidity) {
            $res['RefreshTokenValidity'] = $this->refreshTokenValidity;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->delegatedScope) {
            $res['DelegatedScope'] = null !== $this->delegatedScope ? $this->delegatedScope->toMap() : null;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = null !== $this->redirectUris ? $this->redirectUris->toMap() : null;
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IsMultiTenant'])) {
            $model->isMultiTenant = $map['IsMultiTenant'];
        }
        if (isset($map['AccessTokenValidity'])) {
            $model->accessTokenValidity = $map['AccessTokenValidity'];
        }
        if (isset($map['RefreshTokenValidity'])) {
            $model->refreshTokenValidity = $map['RefreshTokenValidity'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DelegatedScope'])) {
            $model->delegatedScope = delegatedScope::fromMap($map['DelegatedScope']);
        }
        if (isset($map['RedirectUris'])) {
            $model->redirectUris = redirectUris::fromMap($map['RedirectUris']);
        }

        return $model;
    }
}
