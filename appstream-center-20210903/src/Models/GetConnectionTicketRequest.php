<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketRequest extends Model
{
    /**
     * @example ca-etn4zizgaezo9gis9
     *
     * @var string
     */
    public $appId;

    /**
     * @example aig-bw1o1gcwvd3e1ipeu
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @example 1.0.0.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example f2463208-ec89-4309-8e8c-8b17acdcab93
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 22.21.2.21
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example windows_"Windows 10 Enterprise LTSC 2019" 10.0 (Build 17763)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 2.0.1-D-20211008.101607
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $connectionProperties;

    /**
     * @example test.test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v1c4e2ef03d620f0f6cb41634196161219054e12d8aa5a13deb9ed14eebb76d674559115ad2e27a57f6820c1fd33e0ca36
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example /home/test/test.jpg
     *
     * @var string
     */
    public $param;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @example 09e2b2e6-3181-4c84-9539-6fc9f1c3199e
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 6f41731b-7091-4954-80c8-1d1e0b3ebb48
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1126819517152528
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example A8B35215993FBF283F28D617975204C4
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appId'                => 'AppId',
        'appInstanceGroupId'   => 'AppInstanceGroupId',
        'appInstanceId'        => 'AppInstanceId',
        'appVersion'           => 'AppVersion',
        'bizRegionId'          => 'BizRegionId',
        'clientId'             => 'ClientId',
        'clientIp'             => 'ClientIp',
        'clientOS'             => 'ClientOS',
        'clientVersion'        => 'ClientVersion',
        'connectionProperties' => 'ConnectionProperties',
        'endUserId'            => 'EndUserId',
        'loginRegionId'        => 'LoginRegionId',
        'loginToken'           => 'LoginToken',
        'param'                => 'Param',
        'productType'          => 'ProductType',
        'resourceId'           => 'ResourceId',
        'sessionId'            => 'SessionId',
        'taskId'               => 'TaskId',
        'tenantId'             => 'TenantId',
        'uuid'                 => 'Uuid',
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
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
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
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
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
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectionTicketRequest
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
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
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
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
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
