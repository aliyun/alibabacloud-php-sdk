<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Tea\Model;

class ListRunningAppsRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example 370b56f8-2812-4b6c-bfa6-2560791cad88
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 22.21.2.32
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example windows_"Windows 10 Enterprise" 10.0 (Build 18363)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 0.1.0-R-20220512.175656
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v1124500957832f30b3e716406562071655aa43b2a723ed2be0837815483d54e025db13ba5469f06f2410d0efc4d302e36
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example a863f4c3-2f1d-4971-8cf7-e2b92ae97764
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 1735953493960828
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 470E8C12AB78CE9C3F6627DD0409E51D
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'bizRegionId'   => 'BizRegionId',
        'clientId'      => 'ClientId',
        'clientIp'      => 'ClientIp',
        'clientOS'      => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'endUserId'     => 'EndUserId',
        'loginRegionId' => 'LoginRegionId',
        'loginToken'    => 'LoginToken',
        'productType'   => 'ProductType',
        'sessionId'     => 'SessionId',
        'tenantId'      => 'TenantId',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRunningAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
