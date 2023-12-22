<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Tea\Model;

class ListLFUAppRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $clientChannel;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientOS;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $extendsAccessToken;

    /**
     * @var string
     */
    public $idpId;

    /**
     * @var string
     */
    public $loginRegionId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'aliUid'             => 'AliUid',
        'apiType'            => 'ApiType',
        'bizRegionId'        => 'BizRegionId',
        'clientChannel'      => 'ClientChannel',
        'clientId'           => 'ClientId',
        'clientIp'           => 'ClientIp',
        'clientOS'           => 'ClientOS',
        'clientVersion'      => 'ClientVersion',
        'endUserId'          => 'EndUserId',
        'extendsAccessToken' => 'ExtendsAccessToken',
        'idpId'              => 'IdpId',
        'loginRegionId'      => 'LoginRegionId',
        'loginToken'         => 'LoginToken',
        'productType'        => 'ProductType',
        'regionId'           => 'RegionId',
        'sessionId'          => 'SessionId',
        'traceId'            => 'TraceId',
        'uuid'               => 'Uuid',
        'wyId'               => 'WyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->clientChannel) {
            $res['ClientChannel'] = $this->clientChannel;
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
        if (null !== $this->extendsAccessToken) {
            $res['ExtendsAccessToken'] = $this->extendsAccessToken;
        }
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLFUAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ClientChannel'])) {
            $model->clientChannel = $map['ClientChannel'];
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
        if (isset($map['ExtendsAccessToken'])) {
            $model->extendsAccessToken = $map['ExtendsAccessToken'];
        }
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
