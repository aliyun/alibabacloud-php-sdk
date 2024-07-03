<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Tea\Model;

class UnbindRequest extends Model
{
    /**
     * @example ca-fxwp4koxs8hopi94e
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example aig-e1l4kqqykxt4uzdx9
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @example eac19bef-1e45-4190-a03a-4ea74b699ca7
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 139.129.223.122
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example windows_\\"Windows 10 Pro\\" 10.0 (Build 19041)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 2.0.1-D-20220303.171122
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example test.test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @description This parameter is required.
     *
     * @example v1e9c8e83d83ea11270871640059145702bde8c5be8c6b9a854ffb6a43bd2673c19a5551c83800724e024f488dbfb0b247
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @description This parameter is required.
     *
     * @example 11040139-4fb4-4b35-9b44-6c07c746a43e
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 1569416393841402
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'appId'              => 'AppId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'clientId'           => 'ClientId',
        'clientIp'           => 'ClientIp',
        'clientOS'           => 'ClientOS',
        'clientVersion'      => 'ClientVersion',
        'endUserId'          => 'EndUserId',
        'loginRegionId'      => 'LoginRegionId',
        'loginToken'         => 'LoginToken',
        'productType'        => 'ProductType',
        'sessionId'          => 'SessionId',
        'tenantId'           => 'TenantId',
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
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
