<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Tea\Model;

class StopAppRequest extends Model
{
    /**
     * @example 1924794279035094
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example AnonymousUserAPI
     *
     * @var string
     */
    public $apiType;

    /**
     * @example ca-fxwp4koywsglzvvex
     *
     * @var string
     */
    public $appId;

    /**
     * @example aig-89ibriac2wudyph38
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-d297eyf83g5niwnjl
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example pc
     *
     * @var string
     */
    public $clientChannel;

    /**
     * @example 91b79184-51d0-42ad-8475-78cae95b0aa6
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 22.21.2.79
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example windows_"Windows 10 Enterprise" 10.0 (Build 19042)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 3.1.1-R-20211022.144255
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
     * @example false
     *
     * @var bool
     */
    public $forceStop;

    /**
     * @example idp-9ie5smicnct2xodn2
     *
     * @var string
     */
    public $idpId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v185fdd7f6d39fa7861981639366085772e150a390a5bb7b43c4e62440d94fc392b945770e1596cebe90085ce0af4d330e
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 597e869d-ea14-4b83-9490-714f68bfe935
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 2943802884B27030B6759F9132B26903
     *
     * @var string
     */
    public $uuid;

    /**
     * @example ac3cb49059261898
     *
     * @var string
     */
    public $wyId;
    protected $_name = [
        'aliUid'             => 'AliUid',
        'apiType'            => 'ApiType',
        'appId'              => 'AppId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'bizRegionId'        => 'BizRegionId',
        'clientChannel'      => 'ClientChannel',
        'clientId'           => 'ClientId',
        'clientIp'           => 'ClientIp',
        'clientOS'           => 'ClientOS',
        'clientVersion'      => 'ClientVersion',
        'endUserId'          => 'EndUserId',
        'forceStop'          => 'ForceStop',
        'idpId'              => 'IdpId',
        'loginRegionId'      => 'LoginRegionId',
        'loginToken'         => 'LoginToken',
        'productType'        => 'ProductType',
        'regionId'           => 'RegionId',
        'sessionId'          => 'SessionId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
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
        if (null !== $this->forceStop) {
            $res['ForceStop'] = $this->forceStop;
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
     * @return StopAppRequest
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
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
        if (isset($map['ForceStop'])) {
            $model->forceStop = $map['ForceStop'];
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
