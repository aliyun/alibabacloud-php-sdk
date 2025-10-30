<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddAxnTrackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddAxnTrackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddSecretBlacklistRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddSecretBlacklistResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxb700Request;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxb700Response;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAXBCallRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAXBCallResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbFixedLineShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxgRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxgResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionFixedLineShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnFixedLineShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindGxb700Request;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindGxb700Response;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindXBRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindXBResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ConfigXRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ConfigXResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ConfigXShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateFixedNoAReportRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateFixedNoAReportResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePhoneNoAReportRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePhoneNoAReportResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateSmsSignRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateSmsSignResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxbBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxbBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxnBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxnBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxnExtensionBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxnExtensionBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretAPhoneNoToCustRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretAPhoneNoToCustResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretBlacklistRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretBlacklistResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetDyplsOSSInfoForUploadFileRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetDyplsOSSInfoForUploadFileResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXConfigResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ListXTelephonesRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ListXTelephonesResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\LockSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\LockSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateBlackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateBlackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxbBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxbBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnExtensionBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnExtensionBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryRecordFileDownloadUrlRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryRecordFileDownloadUrlResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretAPhoneNoToCustRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretAPhoneNoToCustResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySoundRecordRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySoundRecordResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubsIdRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubsIdResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ReleaseSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ReleaseSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnBindAXBRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnBindAXBResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnbindSubs700Request;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnbindSubs700Response;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnbindSubscriptionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnbindSubscriptionResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnBindXBRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnBindXBResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnlockSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnlockSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxbBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxbBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxbBindFixedLineShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxnBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxnBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxnBindFixedLineShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxnExtensionBindFixedLineRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxnExtensionBindFixedLineResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxnExtensionBindFixedLineShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubs700Request;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubs700Response;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubscriptionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dyplsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyplsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds a tracking number for a private number in the AXN binding.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddAxnTrackNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAxnTrackNoResponse
     *
     * @param AddAxnTrackNoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddAxnTrackNoResponse
     */
    public function addAxnTrackNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subsId) {
            @$query['SubsId'] = $request->subsId;
        }

        if (null !== $request->trackNo) {
            @$query['trackNo'] = $request->trackNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAxnTrackNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAxnTrackNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a tracking number for a private number in the AXN binding.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddAxnTrackNoRequest
     *
     * @returns AddAxnTrackNoResponse
     *
     * @param AddAxnTrackNoRequest $request
     *
     * @return AddAxnTrackNoResponse
     */
    public function addAxnTrackNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAxnTrackNoWithOptions($request, $runtime);
    }

    /**
     * Adds a blacklist.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddSecretBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSecretBlacklistResponse
     *
     * @param AddSecretBlacklistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSecretBlacklistResponse
     */
    public function addSecretBlacklistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blackNo) {
            @$query['BlackNo'] = $request->blackNo;
        }

        if (null !== $request->blackType) {
            @$query['BlackType'] = $request->blackType;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->wayControl) {
            @$query['WayControl'] = $request->wayControl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSecretBlacklist',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSecretBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a blacklist.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddSecretBlacklistRequest
     *
     * @returns AddSecretBlacklistResponse
     *
     * @param AddSecretBlacklistRequest $request
     *
     * @return AddSecretBlacklistResponse
     */
    public function addSecretBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecretBlacklistWithOptions($request, $runtime);
    }

    /**
     * 调用本接口向工作号平台请求为员工B的工作号X建立呼叫绑定（B，X，A），允许B通过X呼叫客户A.
     *
     * @param request - BindAXBCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAXBCallResponse
     *
     * @param BindAXBCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindAXBCallResponse
     */
    public function bindAXBCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authId) {
            @$query['AuthId'] = $request->authId;
        }

        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAXBCall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAXBCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用本接口向工作号平台请求为员工B的工作号X建立呼叫绑定（B，X，A），允许B通过X呼叫客户A.
     *
     * @param request - BindAXBCallRequest
     *
     * @returns BindAXBCallResponse
     *
     * @param BindAXBCallRequest $request
     *
     * @return BindAXBCallResponse
     */
    public function bindAXBCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAXBCallWithOptions($request, $runtime);
    }

    /**
     * Adds an AXB binding.
     *
     * @remarks
     * Before you add an AXB binding, we recommend that you specify role A and role B in the AXB device certificate (ProductKey, DeviceName, and DeviceSecret) in your business scenario. For example, in a taxi-hailing scenario, role A is the passenger and role B is the driver.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BindAxbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxbResponse
     *
     * @param BindAxbRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindAxbResponse
     */
    public function bindAxbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ASRModelId) {
            @$query['ASRModelId'] = $request->ASRModelId;
        }

        if (null !== $request->ASRStatus) {
            @$query['ASRStatus'] = $request->ASRStatus;
        }

        if (null !== $request->callDisplayType) {
            @$query['CallDisplayType'] = $request->callDisplayType;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->callTimeout) {
            @$query['CallTimeout'] = $request->callTimeout;
        }

        if (null !== $request->dtmfConfig) {
            @$query['DtmfConfig'] = $request->dtmfConfig;
        }

        if (null !== $request->expectCity) {
            @$query['ExpectCity'] = $request->expectCity;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->isRecordingEnabled) {
            @$query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->outOrderId) {
            @$query['OutOrderId'] = $request->outOrderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->phoneNoB) {
            @$query['PhoneNoB'] = $request->phoneNoB;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ringConfig) {
            @$query['RingConfig'] = $request->ringConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AXB binding.
     *
     * @remarks
     * Before you add an AXB binding, we recommend that you specify role A and role B in the AXB device certificate (ProductKey, DeviceName, and DeviceSecret) in your business scenario. For example, in a taxi-hailing scenario, role A is the passenger and role B is the driver.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BindAxbRequest
     *
     * @returns BindAxbResponse
     *
     * @param BindAxbRequest $request
     *
     * @return BindAxbResponse
     */
    public function bindAxb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxbWithOptions($request, $runtime);
    }

    /**
     * 创建700绑定关系.
     *
     * @param request - BindAxb700Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxb700Response
     *
     * @param BindAxb700Request $request
     * @param RuntimeOptions    $runtime
     *
     * @return BindAxb700Response
     */
    public function bindAxb700WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asrModelId) {
            @$query['AsrModelId'] = $request->asrModelId;
        }

        if (null !== $request->audio) {
            @$query['Audio'] = $request->audio;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->callTimeout) {
            @$query['CallTimeout'] = $request->callTimeout;
        }

        if (null !== $request->dtmfConfig) {
            @$query['DtmfConfig'] = $request->dtmfConfig;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->industrialId) {
            @$query['IndustrialId'] = $request->industrialId;
        }

        if (null !== $request->needAsr) {
            @$query['NeedAsr'] = $request->needAsr;
        }

        if (null !== $request->needRecord) {
            @$query['NeedRecord'] = $request->needRecord;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->outOrderId) {
            @$query['OutOrderId'] = $request->outOrderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->recType) {
            @$query['RecType'] = $request->recType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxb700',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxb700Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建700绑定关系.
     *
     * @param request - BindAxb700Request
     *
     * @returns BindAxb700Response
     *
     * @param BindAxb700Request $request
     *
     * @return BindAxb700Response
     */
    public function bindAxb700($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxb700WithOptions($request, $runtime);
    }

    /**
     * 固话AxB绑定.
     *
     * @param tmpReq - BindAxbFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxbFixedLineResponse
     *
     * @param BindAxbFixedLineRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BindAxbFixedLineResponse
     */
    public function bindAxbFixedLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BindAxbFixedLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        $query = [];
        if (null !== $request->anucode) {
            @$query['Anucode'] = $request->anucode;
        }

        if (null !== $request->anucodecalled) {
            @$query['Anucodecalled'] = $request->anucodecalled;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->areacode) {
            @$query['Areacode'] = $request->areacode;
        }

        if (null !== $request->bindType) {
            @$query['BindType'] = $request->bindType;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extraShrink) {
            @$query['Extra'] = $request->extraShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subts) {
            @$query['Subts'] = $request->subts;
        }

        if (null !== $request->TAnucodeConnect) {
            @$query['TAnucodeConnect'] = $request->TAnucodeConnect;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxbFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxbFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 固话AxB绑定.
     *
     * @param request - BindAxbFixedLineRequest
     *
     * @returns BindAxbFixedLineResponse
     *
     * @param BindAxbFixedLineRequest $request
     *
     * @return BindAxbFixedLineResponse
     */
    public function bindAxbFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxbFixedLineWithOptions($request, $runtime);
    }

    /**
     * Adds an AXG binding.
     *
     * @remarks
     * An AXG protection solution can be configured to meet the requirements for grading users, limiting the scope of calls, and restricting order snatching. The letter G represents a phone number group to which you can add phone numbers as needed.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BindAxgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxgResponse
     *
     * @param BindAxgRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindAxgResponse
     */
    public function bindAxgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ASRModelId) {
            @$query['ASRModelId'] = $request->ASRModelId;
        }

        if (null !== $request->ASRStatus) {
            @$query['ASRStatus'] = $request->ASRStatus;
        }

        if (null !== $request->callDisplayType) {
            @$query['CallDisplayType'] = $request->callDisplayType;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->expectCity) {
            @$query['ExpectCity'] = $request->expectCity;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->isRecordingEnabled) {
            @$query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->outOrderId) {
            @$query['OutOrderId'] = $request->outOrderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->phoneNoB) {
            @$query['PhoneNoB'] = $request->phoneNoB;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ringConfig) {
            @$query['RingConfig'] = $request->ringConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxg',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AXG binding.
     *
     * @remarks
     * An AXG protection solution can be configured to meet the requirements for grading users, limiting the scope of calls, and restricting order snatching. The letter G represents a phone number group to which you can add phone numbers as needed.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BindAxgRequest
     *
     * @returns BindAxgResponse
     *
     * @param BindAxgRequest $request
     *
     * @return BindAxgResponse
     */
    public function bindAxg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxgWithOptions($request, $runtime);
    }

    /**
     * Adds an AXN binding.
     *
     * @remarks
     * >  An AXN private number is a dedicated private number assigned to phone number A. When an N-side number is used to call phone number X, the call is forwarded to phone number A.
     *
     * @param request - BindAxnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxnResponse
     *
     * @param BindAxnRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindAxnResponse
     */
    public function bindAxnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ASRModelId) {
            @$query['ASRModelId'] = $request->ASRModelId;
        }

        if (null !== $request->ASRStatus) {
            @$query['ASRStatus'] = $request->ASRStatus;
        }

        if (null !== $request->callDisplayType) {
            @$query['CallDisplayType'] = $request->callDisplayType;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->callTimeout) {
            @$query['CallTimeout'] = $request->callTimeout;
        }

        if (null !== $request->expectCity) {
            @$query['ExpectCity'] = $request->expectCity;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->isRecordingEnabled) {
            @$query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }

        if (null !== $request->noType) {
            @$query['NoType'] = $request->noType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->outOrderId) {
            @$query['OutOrderId'] = $request->outOrderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->phoneNoB) {
            @$query['PhoneNoB'] = $request->phoneNoB;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ringConfig) {
            @$query['RingConfig'] = $request->ringConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxn',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AXN binding.
     *
     * @remarks
     * >  An AXN private number is a dedicated private number assigned to phone number A. When an N-side number is used to call phone number X, the call is forwarded to phone number A.
     *
     * @param request - BindAxnRequest
     *
     * @returns BindAxnResponse
     *
     * @param BindAxnRequest $request
     *
     * @return BindAxnResponse
     */
    public function bindAxn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxnWithOptions($request, $runtime);
    }

    /**
     * Adds an AXN extension binding.
     *
     * @remarks
     * Before you add an AXN extension binding, confirm phone number A and phone number N in the business scenario. Phone number A belongs to a customer, and phone number X is the private number assigned to the customer. When any other phone number is used to call phone number X and the extension, the call is transferred to phone number A. When phone number A is used to call phone number X, the call is transferred to the default phone number B that is specified during the phone number binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BindAxnExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxnExtensionResponse
     *
     * @param BindAxnExtensionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindAxnExtensionResponse
     */
    public function bindAxnExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ASRModelId) {
            @$query['ASRModelId'] = $request->ASRModelId;
        }

        if (null !== $request->ASRStatus) {
            @$query['ASRStatus'] = $request->ASRStatus;
        }

        if (null !== $request->callDisplayType) {
            @$query['CallDisplayType'] = $request->callDisplayType;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->expectCity) {
            @$query['ExpectCity'] = $request->expectCity;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

        if (null !== $request->isRecordingEnabled) {
            @$query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->outOrderId) {
            @$query['OutOrderId'] = $request->outOrderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->phoneNoB) {
            @$query['PhoneNoB'] = $request->phoneNoB;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ringConfig) {
            @$query['RingConfig'] = $request->ringConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxnExtension',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxnExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AXN extension binding.
     *
     * @remarks
     * Before you add an AXN extension binding, confirm phone number A and phone number N in the business scenario. Phone number A belongs to a customer, and phone number X is the private number assigned to the customer. When any other phone number is used to call phone number X and the extension, the call is transferred to phone number A. When phone number A is used to call phone number X, the call is transferred to the default phone number B that is specified during the phone number binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BindAxnExtensionRequest
     *
     * @returns BindAxnExtensionResponse
     *
     * @param BindAxnExtensionRequest $request
     *
     * @return BindAxnExtensionResponse
     */
    public function bindAxnExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxnExtensionWithOptions($request, $runtime);
    }

    /**
     * AXN分机号-号码绑定.
     *
     * @param tmpReq - BindAxnExtensionFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxnExtensionFixedLineResponse
     *
     * @param BindAxnExtensionFixedLineRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return BindAxnExtensionFixedLineResponse
     */
    public function bindAxnExtensionFixedLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BindAxnExtensionFixedLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extraaxx) {
            $request->extraaxxShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extraaxx, 'Extraaxx', 'json');
        }

        $query = [];
        if (null !== $request->anucode) {
            @$query['Anucode'] = $request->anucode;
        }

        if (null !== $request->anucodecalled) {
            @$query['Anucodecalled'] = $request->anucodecalled;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->areacode) {
            @$query['Areacode'] = $request->areacode;
        }

        if (null !== $request->bindType) {
            @$query['BindType'] = $request->bindType;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extraaxxShrink) {
            @$query['Extraaxx'] = $request->extraaxxShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subts) {
            @$query['Subts'] = $request->subts;
        }

        if (null !== $request->TAnucodeConnect) {
            @$query['TAnucodeConnect'] = $request->TAnucodeConnect;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        if (null !== $request->telXext) {
            @$query['TelXext'] = $request->telXext;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxnExtensionFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxnExtensionFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AXN分机号-号码绑定.
     *
     * @param request - BindAxnExtensionFixedLineRequest
     *
     * @returns BindAxnExtensionFixedLineResponse
     *
     * @param BindAxnExtensionFixedLineRequest $request
     *
     * @return BindAxnExtensionFixedLineResponse
     */
    public function bindAxnExtensionFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxnExtensionFixedLineWithOptions($request, $runtime);
    }

    /**
     * AXN模式绑定，分配X号码
     *
     * @param tmpReq - BindAxnFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAxnFixedLineResponse
     *
     * @param BindAxnFixedLineRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BindAxnFixedLineResponse
     */
    public function bindAxnFixedLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BindAxnFixedLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        $query = [];
        if (null !== $request->anucode) {
            @$query['Anucode'] = $request->anucode;
        }

        if (null !== $request->anucodecalled) {
            @$query['Anucodecalled'] = $request->anucodecalled;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->areacode) {
            @$query['Areacode'] = $request->areacode;
        }

        if (null !== $request->bindType) {
            @$query['BindType'] = $request->bindType;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extraShrink) {
            @$query['Extra'] = $request->extraShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subts) {
            @$query['Subts'] = $request->subts;
        }

        if (null !== $request->TAnucodeConnect) {
            @$query['TAnucodeConnect'] = $request->TAnucodeConnect;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAxnFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAxnFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AXN模式绑定，分配X号码
     *
     * @param request - BindAxnFixedLineRequest
     *
     * @returns BindAxnFixedLineResponse
     *
     * @param BindAxnFixedLineRequest $request
     *
     * @return BindAxnFixedLineResponse
     */
    public function bindAxnFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxnFixedLineWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - BindBatchAxgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindBatchAxgResponse
     *
     * @param BindBatchAxgRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return BindBatchAxgResponse
     */
    public function bindBatchAxgWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BindBatchAxgShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->axgBindList) {
            $request->axgBindListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->axgBindList, 'AxgBindList', 'json');
        }

        $query = [];
        if (null !== $request->axgBindListShrink) {
            @$query['AxgBindList'] = $request->axgBindListShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindBatchAxg',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindBatchAxgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindBatchAxgRequest
     *
     * @returns BindBatchAxgResponse
     *
     * @param BindBatchAxgRequest $request
     *
     * @return BindBatchAxgResponse
     */
    public function bindBatchAxg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindBatchAxgWithOptions($request, $runtime);
    }

    /**
     * 创建700Gxb绑定关系.
     *
     * @param request - BindGxb700Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindGxb700Response
     *
     * @param BindGxb700Request $request
     * @param RuntimeOptions    $runtime
     *
     * @return BindGxb700Response
     */
    public function bindGxb700WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asrModelId) {
            @$query['AsrModelId'] = $request->asrModelId;
        }

        if (null !== $request->audio) {
            @$query['Audio'] = $request->audio;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->callTimeout) {
            @$query['CallTimeout'] = $request->callTimeout;
        }

        if (null !== $request->defaultA) {
            @$query['DefaultA'] = $request->defaultA;
        }

        if (null !== $request->dtmfConfig) {
            @$query['DtmfConfig'] = $request->dtmfConfig;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->industrialId) {
            @$query['IndustrialId'] = $request->industrialId;
        }

        if (null !== $request->needAsr) {
            @$query['NeedAsr'] = $request->needAsr;
        }

        if (null !== $request->needRecord) {
            @$query['NeedRecord'] = $request->needRecord;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->outOrderId) {
            @$query['OutOrderId'] = $request->outOrderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->recType) {
            @$query['RecType'] = $request->recType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindGxb700',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindGxb700Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建700Gxb绑定关系.
     *
     * @param request - BindGxb700Request
     *
     * @returns BindGxb700Response
     *
     * @param BindGxb700Request $request
     *
     * @return BindGxb700Response
     */
    public function bindGxb700($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindGxb700WithOptions($request, $runtime);
    }

    /**
     * 平台指定工作号X 和员工号B建立关联，完成X 实名认证，绑定生效后，所有X 的呼叫都会转接到B.
     *
     * @param request - BindXBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindXBResponse
     *
     * @param BindXBRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return BindXBResponse
     */
    public function bindXBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindXB',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindXBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 平台指定工作号X 和员工号B建立关联，完成X 实名认证，绑定生效后，所有X 的呼叫都会转接到B.
     *
     * @param request - BindXBRequest
     *
     * @returns BindXBResponse
     *
     * @param BindXBRequest $request
     *
     * @return BindXBResponse
     */
    public function bindXB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindXBWithOptions($request, $runtime);
    }

    /**
     * Purchases a phone number.
     *
     * @remarks
     *   After you create a phone number pool in the Phone Number Protection console, the phone number pool is empty by default. You must purchase phone numbers and add them to the phone number pool.
     * *   Before you call this operation, make sure that you are familiar with the [pricing](https://help.aliyun.com/document_detail/59825.html) of Phone Number Protection.
     * *   When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before you call this operation to purchase a phone number, check the quantity of phone numbers available for purchase by using the [QuerySecretNoRemain](https://help.aliyun.com/document_detail/111699.html) operation.
     * *   The account used to purchase a phone number must be an enterprise account that has passed real-name verification. For more information about how to perform real-name verification, see [Enterprise verification FAQs](https://help.aliyun.com/document_detail/37172.html).
     *
     * @param request - BuySecretNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuySecretNoResponse
     *
     * @param BuySecretNoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BuySecretNoResponse
     */
    public function buySecretNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->displayPool) {
            @$query['DisplayPool'] = $request->displayPool;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        if (null !== $request->specId) {
            @$query['SpecId'] = $request->specId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BuySecretNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BuySecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchases a phone number.
     *
     * @remarks
     *   After you create a phone number pool in the Phone Number Protection console, the phone number pool is empty by default. You must purchase phone numbers and add them to the phone number pool.
     * *   Before you call this operation, make sure that you are familiar with the [pricing](https://help.aliyun.com/document_detail/59825.html) of Phone Number Protection.
     * *   When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before you call this operation to purchase a phone number, check the quantity of phone numbers available for purchase by using the [QuerySecretNoRemain](https://help.aliyun.com/document_detail/111699.html) operation.
     * *   The account used to purchase a phone number must be an enterprise account that has passed real-name verification. For more information about how to perform real-name verification, see [Enterprise verification FAQs](https://help.aliyun.com/document_detail/37172.html).
     *
     * @param request - BuySecretNoRequest
     *
     * @returns BuySecretNoResponse
     *
     * @param BuySecretNoRequest $request
     *
     * @return BuySecretNoResponse
     */
    public function buySecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buySecretNoWithOptions($request, $runtime);
    }

    /**
     * Cancels a door-to-door delivery order.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CancelPickUpWaybillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPickUpWaybillResponse
     *
     * @param CancelPickUpWaybillRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelPickUpWaybillResponse
     */
    public function cancelPickUpWaybillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cancelDesc) {
            @$query['CancelDesc'] = $request->cancelDesc;
        }

        if (null !== $request->outerOrderCode) {
            @$query['OuterOrderCode'] = $request->outerOrderCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelPickUpWaybill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPickUpWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a door-to-door delivery order.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CancelPickUpWaybillRequest
     *
     * @returns CancelPickUpWaybillResponse
     *
     * @param CancelPickUpWaybillRequest $request
     *
     * @return CancelPickUpWaybillResponse
     */
    public function cancelPickUpWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPickUpWaybillWithOptions($request, $runtime);
    }

    /**
     * 配置X号码，单独对工作号的话音呼叫、企业名片等通信功能进行配置操作.
     *
     * @param tmpReq - ConfigXRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigXResponse
     *
     * @param ConfigXRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ConfigXResponse
     */
    public function configXWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ConfigXShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sequenceCalls) {
            $request->sequenceCallsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sequenceCalls, 'SequenceCalls', 'json');
        }

        $query = [];
        if (null !== $request->callAbility) {
            @$query['CallAbility'] = $request->callAbility;
        }

        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->GNFlag) {
            @$query['GNFlag'] = $request->GNFlag;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sequenceCallsShrink) {
            @$query['SequenceCalls'] = $request->sequenceCallsShrink;
        }

        if (null !== $request->sequenceMode) {
            @$query['SequenceMode'] = $request->sequenceMode;
        }

        if (null !== $request->smsAbility) {
            @$query['SmsAbility'] = $request->smsAbility;
        }

        if (null !== $request->smsSignMode) {
            @$query['SmsSignMode'] = $request->smsSignMode;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigX',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigXResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置X号码，单独对工作号的话音呼叫、企业名片等通信功能进行配置操作.
     *
     * @param request - ConfigXRequest
     *
     * @returns ConfigXResponse
     *
     * @param ConfigXRequest $request
     *
     * @return ConfigXResponse
     */
    public function configX($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configXWithOptions($request, $runtime);
    }

    /**
     * Creates number group G.
     *
     * @remarks
     * Before you add an AXG binding, you must purchase phone number X, create number group G, and then add phone numbers to number group G. If you do not add phone numbers to number group G after you create number group G, you can call the [OperateAxgGroup](https://help.aliyun.com/document_detail/110252.htm) operation to add phone numbers to number group G.
     * >  Up to 2,000 number groups G can be added for a single phone number pool.
     *
     * @param request - CreateAxgGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAxgGroupResponse
     *
     * @param CreateAxgGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAxgGroupResponse
     */
    public function createAxgGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->numbers) {
            @$query['Numbers'] = $request->numbers;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAxgGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAxgGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates number group G.
     *
     * @remarks
     * Before you add an AXG binding, you must purchase phone number X, create number group G, and then add phone numbers to number group G. If you do not add phone numbers to number group G after you create number group G, you can call the [OperateAxgGroup](https://help.aliyun.com/document_detail/110252.htm) operation to add phone numbers to number group G.
     * >  Up to 2,000 number groups G can be added for a single phone number pool.
     *
     * @param request - CreateAxgGroupRequest
     *
     * @returns CreateAxgGroupResponse
     *
     * @param CreateAxgGroupRequest $request
     *
     * @return CreateAxgGroupResponse
     */
    public function createAxgGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAxgGroupWithOptions($request, $runtime);
    }

    /**
     * 通过API收集小号a号码固话.
     *
     * @param request - CreateFixedNoAReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFixedNoAReportResponse
     *
     * @param CreateFixedNoAReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateFixedNoAReportResponse
     */
    public function createFixedNoAReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ANoWhiteGroupId) {
            @$query['ANoWhiteGroupId'] = $request->ANoWhiteGroupId;
        }

        if (null !== $request->custName) {
            @$query['CustName'] = $request->custName;
        }

        if (null !== $request->custPhoneNo) {
            @$query['CustPhoneNo'] = $request->custPhoneNo;
        }

        if (null !== $request->custType) {
            @$query['CustType'] = $request->custType;
        }

        if (null !== $request->documentNumber) {
            @$query['DocumentNumber'] = $request->documentNumber;
        }

        if (null !== $request->documentType) {
            @$query['DocumentType'] = $request->documentType;
        }

        if (null !== $request->fixedLineWorkId) {
            @$query['FixedLineWorkId'] = $request->fixedLineWorkId;
        }

        if (null !== $request->fixedNoA) {
            @$query['FixedNoA'] = $request->fixedNoA;
        }

        if (null !== $request->idCardAlivePhoto) {
            @$query['IdCardAlivePhoto'] = $request->idCardAlivePhoto;
        }

        if (null !== $request->idCardBackPhoto) {
            @$query['IdCardBackPhoto'] = $request->idCardBackPhoto;
        }

        if (null !== $request->idCardFrontPhoto) {
            @$query['IdCardFrontPhoto'] = $request->idCardFrontPhoto;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFixedNoAReport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFixedNoAReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过API收集小号a号码固话.
     *
     * @param request - CreateFixedNoAReportRequest
     *
     * @returns CreateFixedNoAReportResponse
     *
     * @param CreateFixedNoAReportRequest $request
     *
     * @return CreateFixedNoAReportResponse
     */
    public function createFixedNoAReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFixedNoAReportWithOptions($request, $runtime);
    }

    /**
     * 通过API收集小号a号码手机号.
     *
     * @param request - CreatePhoneNoAReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePhoneNoAReportResponse
     *
     * @param CreatePhoneNoAReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePhoneNoAReportResponse
     */
    public function createPhoneNoAReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ANoWhiteGroupId) {
            @$query['ANoWhiteGroupId'] = $request->ANoWhiteGroupId;
        }

        if (null !== $request->custName) {
            @$query['CustName'] = $request->custName;
        }

        if (null !== $request->documentNumber) {
            @$query['DocumentNumber'] = $request->documentNumber;
        }

        if (null !== $request->documentType) {
            @$query['DocumentType'] = $request->documentType;
        }

        if (null !== $request->idCardAlivePhoto) {
            @$query['IdCardAlivePhoto'] = $request->idCardAlivePhoto;
        }

        if (null !== $request->idCardBackPhoto) {
            @$query['IdCardBackPhoto'] = $request->idCardBackPhoto;
        }

        if (null !== $request->idCardFrontPhoto) {
            @$query['IdCardFrontPhoto'] = $request->idCardFrontPhoto;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePhoneNoAReport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePhoneNoAReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过API收集小号a号码手机号.
     *
     * @param request - CreatePhoneNoAReportRequest
     *
     * @returns CreatePhoneNoAReportResponse
     *
     * @param CreatePhoneNoAReportRequest $request
     *
     * @return CreatePhoneNoAReportResponse
     */
    public function createPhoneNoAReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhoneNoAReportWithOptions($request, $runtime);
    }

    /**
     * Creates a door-to-door delivery order.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - CreatePickUpWaybillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePickUpWaybillResponse
     *
     * @param CreatePickUpWaybillRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePickUpWaybillResponse
     */
    public function createPickUpWaybillWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePickUpWaybillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->consigneeAddress) {
            $request->consigneeAddressShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->consigneeAddress, 'ConsigneeAddress', 'json');
        }

        if (null !== $tmpReq->goodsInfos) {
            $request->goodsInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->goodsInfos, 'GoodsInfos', 'json');
        }

        if (null !== $tmpReq->sendAddress) {
            $request->sendAddressShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sendAddress, 'SendAddress', 'json');
        }

        $query = [];
        if (null !== $request->appointGotEndTime) {
            @$query['AppointGotEndTime'] = $request->appointGotEndTime;
        }

        if (null !== $request->appointGotStartTime) {
            @$query['AppointGotStartTime'] = $request->appointGotStartTime;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->consigneeAddressShrink) {
            @$query['ConsigneeAddress'] = $request->consigneeAddressShrink;
        }

        if (null !== $request->consigneeMobile) {
            @$query['ConsigneeMobile'] = $request->consigneeMobile;
        }

        if (null !== $request->consigneeName) {
            @$query['ConsigneeName'] = $request->consigneeName;
        }

        if (null !== $request->consigneePhone) {
            @$query['ConsigneePhone'] = $request->consigneePhone;
        }

        if (null !== $request->cpCode) {
            @$query['CpCode'] = $request->cpCode;
        }

        if (null !== $request->goodsInfosShrink) {
            @$query['GoodsInfos'] = $request->goodsInfosShrink;
        }

        if (null !== $request->orderChannels) {
            @$query['OrderChannels'] = $request->orderChannels;
        }

        if (null !== $request->outerOrderCode) {
            @$query['OuterOrderCode'] = $request->outerOrderCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sendAddressShrink) {
            @$query['SendAddress'] = $request->sendAddressShrink;
        }

        if (null !== $request->sendMobile) {
            @$query['SendMobile'] = $request->sendMobile;
        }

        if (null !== $request->sendName) {
            @$query['SendName'] = $request->sendName;
        }

        if (null !== $request->sendPhone) {
            @$query['SendPhone'] = $request->sendPhone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePickUpWaybill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePickUpWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a door-to-door delivery order.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreatePickUpWaybillRequest
     *
     * @returns CreatePickUpWaybillResponse
     *
     * @param CreatePickUpWaybillRequest $request
     *
     * @return CreatePickUpWaybillResponse
     */
    public function createPickUpWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPickUpWaybillWithOptions($request, $runtime);
    }

    /**
     * Queries a pickup order.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - CreatePickUpWaybillPreQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePickUpWaybillPreQueryResponse
     *
     * @param CreatePickUpWaybillPreQueryRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreatePickUpWaybillPreQueryResponse
     */
    public function createPickUpWaybillPreQueryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePickUpWaybillPreQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->consigneeInfo) {
            $request->consigneeInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->consigneeInfo, 'ConsigneeInfo', 'json');
        }

        if (null !== $tmpReq->senderInfo) {
            $request->senderInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->senderInfo, 'SenderInfo', 'json');
        }

        $query = [];
        if (null !== $request->consigneeInfoShrink) {
            @$query['ConsigneeInfo'] = $request->consigneeInfoShrink;
        }

        if (null !== $request->cpCode) {
            @$query['CpCode'] = $request->cpCode;
        }

        if (null !== $request->orderChannels) {
            @$query['OrderChannels'] = $request->orderChannels;
        }

        if (null !== $request->outerOrderCode) {
            @$query['OuterOrderCode'] = $request->outerOrderCode;
        }

        if (null !== $request->preWeight) {
            @$query['PreWeight'] = $request->preWeight;
        }

        if (null !== $request->senderInfoShrink) {
            @$query['SenderInfo'] = $request->senderInfoShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePickUpWaybillPreQuery',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePickUpWaybillPreQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a pickup order.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreatePickUpWaybillPreQueryRequest
     *
     * @returns CreatePickUpWaybillPreQueryResponse
     *
     * @param CreatePickUpWaybillPreQueryRequest $request
     *
     * @return CreatePickUpWaybillPreQueryResponse
     */
    public function createPickUpWaybillPreQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPickUpWaybillPreQueryWithOptions($request, $runtime);
    }

    /**
     * B向A 发短信，客户端获取“短信标签”，尾部添加“标签”。通过“标签”解析被叫A，发短信到A。
     *
     * @param request - CreateSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNo) {
            @$query['CalledNo'] = $request->calledNo;
        }

        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->callingNo) {
            @$query['CallingNo'] = $request->callingNo;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSign',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * B向A 发短信，客户端获取“短信标签”，尾部添加“标签”。通过“标签”解析被叫A，发短信到A。
     *
     * @param request - CreateSmsSignRequest
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $request
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSignWithOptions($request, $runtime);
    }

    /**
     * 固话AxB解绑.
     *
     * @param request - DeleteAxbBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAxbBindFixedLineResponse
     *
     * @param DeleteAxbBindFixedLineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAxbBindFixedLineResponse
     */
    public function deleteAxbBindFixedLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAxbBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAxbBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 固话AxB解绑.
     *
     * @param request - DeleteAxbBindFixedLineRequest
     *
     * @returns DeleteAxbBindFixedLineResponse
     *
     * @param DeleteAxbBindFixedLineRequest $request
     *
     * @return DeleteAxbBindFixedLineResponse
     */
    public function deleteAxbBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAxbBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAxgGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAxgGroupResponse
     *
     * @param DeleteAxgGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAxgGroupResponse
     */
    public function deleteAxgGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAxgGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAxgGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAxgGroupRequest
     *
     * @returns DeleteAxgGroupResponse
     *
     * @param DeleteAxgGroupRequest $request
     *
     * @return DeleteAxgGroupResponse
     */
    public function deleteAxgGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAxgGroupWithOptions($request, $runtime);
    }

    /**
     * 解绑已有Axn绑定.
     *
     * @param request - DeleteAxnBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAxnBindFixedLineResponse
     *
     * @param DeleteAxnBindFixedLineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAxnBindFixedLineResponse
     */
    public function deleteAxnBindFixedLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAxnBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAxnBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑已有Axn绑定.
     *
     * @param request - DeleteAxnBindFixedLineRequest
     *
     * @returns DeleteAxnBindFixedLineResponse
     *
     * @param DeleteAxnBindFixedLineRequest $request
     *
     * @return DeleteAxnBindFixedLineResponse
     */
    public function deleteAxnBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAxnBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * 解绑已有AXN分机号绑定.
     *
     * @param request - DeleteAxnExtensionBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAxnExtensionBindFixedLineResponse
     *
     * @param DeleteAxnExtensionBindFixedLineRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteAxnExtensionBindFixedLineResponse
     */
    public function deleteAxnExtensionBindFixedLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAxnExtensionBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAxnExtensionBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑已有AXN分机号绑定.
     *
     * @param request - DeleteAxnExtensionBindFixedLineRequest
     *
     * @returns DeleteAxnExtensionBindFixedLineResponse
     *
     * @param DeleteAxnExtensionBindFixedLineRequest $request
     *
     * @return DeleteAxnExtensionBindFixedLineResponse
     */
    public function deleteAxnExtensionBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAxnExtensionBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * A号码报备数据删除.
     *
     * @param request - DeleteSecretAPhoneNoToCustRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretAPhoneNoToCustResponse
     *
     * @param DeleteSecretAPhoneNoToCustRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSecretAPhoneNoToCustResponse
     */
    public function deleteSecretAPhoneNoToCustWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ANoWhiteGroupId) {
            @$query['ANoWhiteGroupId'] = $request->ANoWhiteGroupId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecretAPhoneNoToCust',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecretAPhoneNoToCustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A号码报备数据删除.
     *
     * @param request - DeleteSecretAPhoneNoToCustRequest
     *
     * @returns DeleteSecretAPhoneNoToCustResponse
     *
     * @param DeleteSecretAPhoneNoToCustRequest $request
     *
     * @return DeleteSecretAPhoneNoToCustResponse
     */
    public function deleteSecretAPhoneNoToCust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretAPhoneNoToCustWithOptions($request, $runtime);
    }

    /**
     * Deletes a blacklist.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteSecretBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretBlacklistResponse
     *
     * @param DeleteSecretBlacklistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecretBlacklistResponse
     */
    public function deleteSecretBlacklistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blackNo) {
            @$query['BlackNo'] = $request->blackNo;
        }

        if (null !== $request->blackType) {
            @$query['BlackType'] = $request->blackType;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->wayControl) {
            @$query['WayControl'] = $request->wayControl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecretBlacklist',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecretBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a blacklist.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteSecretBlacklistRequest
     *
     * @returns DeleteSecretBlacklistResponse
     *
     * @param DeleteSecretBlacklistRequest $request
     *
     * @return DeleteSecretBlacklistResponse
     */
    public function deleteSecretBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretBlacklistWithOptions($request, $runtime);
    }

    /**
     * 隐私号上传文件，获取 OSS 信息.
     *
     * @param request - GetDyplsOSSInfoForUploadFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDyplsOSSInfoForUploadFileResponse
     *
     * @param GetDyplsOSSInfoForUploadFileRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDyplsOSSInfoForUploadFileResponse
     */
    public function getDyplsOSSInfoForUploadFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDyplsOSSInfoForUploadFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDyplsOSSInfoForUploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 隐私号上传文件，获取 OSS 信息.
     *
     * @param request - GetDyplsOSSInfoForUploadFileRequest
     *
     * @returns GetDyplsOSSInfoForUploadFileResponse
     *
     * @param GetDyplsOSSInfoForUploadFileRequest $request
     *
     * @return GetDyplsOSSInfoForUploadFileResponse
     */
    public function getDyplsOSSInfoForUploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDyplsOSSInfoForUploadFileWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of the automatic speech recognition (ASR) result.
     *
     * @remarks
     * Before you call the GetSecretAsrDetail operation, set the ASRStatus parameter to true in the [BindAxn operation](https://help.aliyun.com/document_detail/400483.html). This ensures that you can obtain the ASR result properly.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetSecretAsrDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretAsrDetailResponse
     *
     * @param GetSecretAsrDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSecretAsrDetailResponse
     */
    public function getSecretAsrDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->callTime) {
            @$query['CallTime'] = $request->callTime;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretAsrDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretAsrDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of the automatic speech recognition (ASR) result.
     *
     * @remarks
     * Before you call the GetSecretAsrDetail operation, set the ASRStatus parameter to true in the [BindAxn operation](https://help.aliyun.com/document_detail/400483.html). This ensures that you can obtain the ASR result properly.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetSecretAsrDetailRequest
     *
     * @returns GetSecretAsrDetailResponse
     *
     * @param GetSecretAsrDetailRequest $request
     *
     * @return GetSecretAsrDetailResponse
     */
    public function getSecretAsrDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretAsrDetailWithOptions($request, $runtime);
    }

    /**
     * Obtains the download URL of a recorded ringing tone.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetTotalPublicUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTotalPublicUrlResponse
     *
     * @param GetTotalPublicUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTotalPublicUrlResponse
     */
    public function getTotalPublicUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->callTime) {
            @$query['CallTime'] = $request->callTime;
        }

        if (null !== $request->checkSubs) {
            @$query['CheckSubs'] = $request->checkSubs;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->partnerKey) {
            @$query['PartnerKey'] = $request->partnerKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTotalPublicUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTotalPublicUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the download URL of a recorded ringing tone.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetTotalPublicUrlRequest
     *
     * @returns GetTotalPublicUrlResponse
     *
     * @param GetTotalPublicUrlRequest $request
     *
     * @return GetTotalPublicUrlResponse
     */
    public function getTotalPublicUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTotalPublicUrlWithOptions($request, $runtime);
    }

    /**
     * 获取X号码配置信息.
     *
     * @param request - GetXConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetXConfigResponse
     *
     * @param GetXConfigRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetXConfigResponse
     */
    public function getXConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetXConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetXConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取X号码配置信息.
     *
     * @param request - GetXConfigRequest
     *
     * @returns GetXConfigResponse
     *
     * @param GetXConfigRequest $request
     *
     * @return GetXConfigResponse
     */
    public function getXConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getXConfigWithOptions($request, $runtime);
    }

    /**
     * 获取X号码默认配置信息.
     *
     * @param request - GetXDefaultConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetXDefaultConfigResponse
     *
     * @param GetXDefaultConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetXDefaultConfigResponse
     */
    public function getXDefaultConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetXDefaultConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetXDefaultConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取X号码默认配置信息.
     *
     * @param request - GetXDefaultConfigRequest
     *
     * @returns GetXDefaultConfigResponse
     *
     * @param GetXDefaultConfigRequest $request
     *
     * @return GetXDefaultConfigResponse
     */
    public function getXDefaultConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getXDefaultConfigWithOptions($request, $runtime);
    }

    /**
     * 查询客户名下X号码列表.
     *
     * @param request - ListXTelephonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListXTelephonesResponse
     *
     * @param ListXTelephonesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListXTelephonesResponse
     */
    public function listXTelephonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListXTelephones',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListXTelephonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询客户名下X号码列表.
     *
     * @param request - ListXTelephonesRequest
     *
     * @returns ListXTelephonesResponse
     *
     * @param ListXTelephonesRequest $request
     *
     * @return ListXTelephonesResponse
     */
    public function listXTelephones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listXTelephonesWithOptions($request, $runtime);
    }

    /**
     * Locks a phone number.
     *
     * @remarks
     * After a phone number is locked, the locked phone number cannot be selected when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - LockSecretNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LockSecretNoResponse
     *
     * @param LockSecretNoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LockSecretNoResponse
     */
    public function lockSecretNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LockSecretNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockSecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Locks a phone number.
     *
     * @remarks
     * After a phone number is locked, the locked phone number cannot be selected when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - LockSecretNoRequest
     *
     * @returns LockSecretNoResponse
     *
     * @param LockSecretNoRequest $request
     *
     * @return LockSecretNoResponse
     */
    public function lockSecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockSecretNoWithOptions($request, $runtime);
    }

    /**
     * Modifies number group G.
     *
     * @remarks
     * After you create number group G, you can call the OperateAxgGroup operation to modify number group G. For example, you can add phone numbers to number group G, delete phone numbers from number group G, and replace all phone numbers in number group G.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - OperateAxgGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAxgGroupResponse
     *
     * @param OperateAxgGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OperateAxgGroupResponse
     */
    public function operateAxgGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->numbers) {
            @$query['Numbers'] = $request->numbers;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAxgGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAxgGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies number group G.
     *
     * @remarks
     * After you create number group G, you can call the OperateAxgGroup operation to modify number group G. For example, you can add phone numbers to number group G, delete phone numbers from number group G, and replace all phone numbers in number group G.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - OperateAxgGroupRequest
     *
     * @returns OperateAxgGroupResponse
     *
     * @param OperateAxgGroupRequest $request
     *
     * @return OperateAxgGroupResponse
     */
    public function operateAxgGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAxgGroupWithOptions($request, $runtime);
    }

    /**
     * Adds a phone number to a blacklist or deletes a phone number from a blacklist.
     *
     * @remarks
     * The OperateBlackNo operation supports the following number pool types: AXN, AXN extension, and 95AXN.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - OperateBlackNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateBlackNoResponse
     *
     * @param OperateBlackNoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OperateBlackNoResponse
     */
    public function operateBlackNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blackNo) {
            @$query['BlackNo'] = $request->blackNo;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tips) {
            @$query['Tips'] = $request->tips;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateBlackNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateBlackNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a phone number to a blacklist or deletes a phone number from a blacklist.
     *
     * @remarks
     * The OperateBlackNo operation supports the following number pool types: AXN, AXN extension, and 95AXN.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - OperateBlackNoRequest
     *
     * @returns OperateBlackNoResponse
     *
     * @param OperateBlackNoRequest $request
     *
     * @return OperateBlackNoResponse
     */
    public function operateBlackNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateBlackNoWithOptions($request, $runtime);
    }

    /**
     * 固话AxB查询.
     *
     * @param request - QueryAxbBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAxbBindFixedLineResponse
     *
     * @param QueryAxbBindFixedLineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAxbBindFixedLineResponse
     */
    public function queryAxbBindFixedLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAxbBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAxbBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 固话AxB查询.
     *
     * @param request - QueryAxbBindFixedLineRequest
     *
     * @returns QueryAxbBindFixedLineResponse
     *
     * @param QueryAxbBindFixedLineRequest $request
     *
     * @return QueryAxbBindFixedLineResponse
     */
    public function queryAxbBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAxbBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * 查询Axn绑定关系.
     *
     * @param request - QueryAxnBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAxnBindFixedLineResponse
     *
     * @param QueryAxnBindFixedLineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAxnBindFixedLineResponse
     */
    public function queryAxnBindFixedLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAxnBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAxnBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Axn绑定关系.
     *
     * @param request - QueryAxnBindFixedLineRequest
     *
     * @returns QueryAxnBindFixedLineResponse
     *
     * @param QueryAxnBindFixedLineRequest $request
     *
     * @return QueryAxnBindFixedLineResponse
     */
    public function queryAxnBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAxnBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * 查询AXN分机号绑定关系.
     *
     * @param request - QueryAxnExtensionBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAxnExtensionBindFixedLineResponse
     *
     * @param QueryAxnExtensionBindFixedLineRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryAxnExtensionBindFixedLineResponse
     */
    public function queryAxnExtensionBindFixedLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAxnExtensionBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAxnExtensionBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AXN分机号绑定关系.
     *
     * @param request - QueryAxnExtensionBindFixedLineRequest
     *
     * @returns QueryAxnExtensionBindFixedLineResponse
     *
     * @param QueryAxnExtensionBindFixedLineRequest $request
     *
     * @return QueryAxnExtensionBindFixedLineResponse
     */
    public function queryAxnExtensionBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAxnExtensionBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a tracking number.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryPhoneNoAByTrackNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPhoneNoAByTrackNoResponse
     *
     * @param QueryPhoneNoAByTrackNoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPhoneNoAByTrackNoResponse
     */
    public function queryPhoneNoAByTrackNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cabinetNo) {
            @$query['CabinetNo'] = $request->cabinetNo;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->trackNo) {
            @$query['trackNo'] = $request->trackNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPhoneNoAByTrackNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPhoneNoAByTrackNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a tracking number.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryPhoneNoAByTrackNoRequest
     *
     * @returns QueryPhoneNoAByTrackNoResponse
     *
     * @param QueryPhoneNoAByTrackNoRequest $request
     *
     * @return QueryPhoneNoAByTrackNoResponse
     */
    public function queryPhoneNoAByTrackNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneNoAByTrackNoWithOptions($request, $runtime);
    }

    /**
     * Obtains the download URL of a recording file.
     *
     * @remarks
     * If the recording feature is enabled for a binding, all calls made by the bound phone numbers are recorded. You can obtain the download URL of a recording file by calling the QueryRecordFileDownloadUrl operation and download the recording file.
     * >  We recommend that you subscribe to [the recording status report SecretRecording](https://help.aliyun.com/document_detail/109198.html). The values of the response parameters in SecretRecording can be used as the values of the request parameters for downloading a recording file.
     * ### [](#)Procedure for obtaining a recording file
     * 1.  Specify the request parameter in an update or binding operation to enable the recording feature.
     * 2.  Subscribe to recording message receipts in the Phone Number Protection console.
     * 3.  After a recording message receipt is returned, call the QueryRecordFileDownloadUrl operation to obtain the download URL of the recording file, and download the recording file.
     * >
     * *   A download URL is valid for 2 hours. Download the recording file as soon as possible after obtaining a download URL.
     * *   The storage period of recording files is 30 days. You can download only the recording files of calls recorded in the last 30 days.
     *
     * @param request - QueryRecordFileDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRecordFileDownloadUrlResponse
     *
     * @param QueryRecordFileDownloadUrlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryRecordFileDownloadUrlResponse
     */
    public function queryRecordFileDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->callTime) {
            @$query['CallTime'] = $request->callTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRecordFileDownloadUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRecordFileDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the download URL of a recording file.
     *
     * @remarks
     * If the recording feature is enabled for a binding, all calls made by the bound phone numbers are recorded. You can obtain the download URL of a recording file by calling the QueryRecordFileDownloadUrl operation and download the recording file.
     * >  We recommend that you subscribe to [the recording status report SecretRecording](https://help.aliyun.com/document_detail/109198.html). The values of the response parameters in SecretRecording can be used as the values of the request parameters for downloading a recording file.
     * ### [](#)Procedure for obtaining a recording file
     * 1.  Specify the request parameter in an update or binding operation to enable the recording feature.
     * 2.  Subscribe to recording message receipts in the Phone Number Protection console.
     * 3.  After a recording message receipt is returned, call the QueryRecordFileDownloadUrl operation to obtain the download URL of the recording file, and download the recording file.
     * >
     * *   A download URL is valid for 2 hours. Download the recording file as soon as possible after obtaining a download URL.
     * *   The storage period of recording files is 30 days. You can download only the recording files of calls recorded in the last 30 days.
     *
     * @param request - QueryRecordFileDownloadUrlRequest
     *
     * @returns QueryRecordFileDownloadUrlResponse
     *
     * @param QueryRecordFileDownloadUrlRequest $request
     *
     * @return QueryRecordFileDownloadUrlResponse
     */
    public function queryRecordFileDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordFileDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * A号码报备状态查询.
     *
     * @param request - QuerySecretAPhoneNoToCustRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySecretAPhoneNoToCustResponse
     *
     * @param QuerySecretAPhoneNoToCustRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySecretAPhoneNoToCustResponse
     */
    public function querySecretAPhoneNoToCustWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ANoWhiteGroupId) {
            @$query['ANoWhiteGroupId'] = $request->ANoWhiteGroupId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySecretAPhoneNoToCust',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySecretAPhoneNoToCustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A号码报备状态查询.
     *
     * @param request - QuerySecretAPhoneNoToCustRequest
     *
     * @returns QuerySecretAPhoneNoToCustResponse
     *
     * @param QuerySecretAPhoneNoToCustRequest $request
     *
     * @return QuerySecretAPhoneNoToCustResponse
     */
    public function querySecretAPhoneNoToCust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecretAPhoneNoToCustWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of a private number.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QuerySecretNoDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySecretNoDetailResponse
     *
     * @param QuerySecretNoDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySecretNoDetailResponse
     */
    public function querySecretNoDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySecretNoDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySecretNoDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of a private number.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QuerySecretNoDetailRequest
     *
     * @returns QuerySecretNoDetailResponse
     *
     * @param QuerySecretNoDetailRequest $request
     *
     * @return QuerySecretNoDetailResponse
     */
    public function querySecretNoDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecretNoDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the quantity of remaining phone numbers available for online purchase.
     *
     * @remarks
     * When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before calling the [BuySecretNo](~~BuySecretNo~~) operation to purchase a phone number, call the [QuerySecretNoRemain](~~QuerySecretNoRemain~~) operation to query the quantity of remaining phone numbers available for online purchase.
     *
     * @param request - QuerySecretNoRemainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySecretNoRemainResponse
     *
     * @param QuerySecretNoRemainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySecretNoRemainResponse
     */
    public function querySecretNoRemainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        if (null !== $request->specId) {
            @$query['SpecId'] = $request->specId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySecretNoRemain',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySecretNoRemainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quantity of remaining phone numbers available for online purchase.
     *
     * @remarks
     * When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before calling the [BuySecretNo](~~BuySecretNo~~) operation to purchase a phone number, call the [QuerySecretNoRemain](~~QuerySecretNoRemain~~) operation to query the quantity of remaining phone numbers available for online purchase.
     *
     * @param request - QuerySecretNoRemainRequest
     *
     * @returns QuerySecretNoRemainResponse
     *
     * @param QuerySecretNoRemainRequest $request
     *
     * @return QuerySecretNoRemainResponse
     */
    public function querySecretNoRemain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecretNoRemainWithOptions($request, $runtime);
    }

    /**
     * 查询通话录音链接.
     *
     * @param request - QuerySoundRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySoundRecordResponse
     *
     * @param QuerySoundRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySoundRecordResponse
     */
    public function querySoundRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySoundRecord',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySoundRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询通话录音链接.
     *
     * @param request - QuerySoundRecordRequest
     *
     * @returns QuerySoundRecordResponse
     *
     * @param QuerySoundRecordRequest $request
     *
     * @return QuerySoundRecordResponse
     */
    public function querySoundRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySoundRecordWithOptions($request, $runtime);
    }

    /**
     * Queries binding IDs.
     *
     * @remarks
     * You can query binding IDs by phone number X. In the AXB product, multiple bindings may exist for the same phone number X. In this case, multiple binding IDs may be obtained for the same phone number X.
     *
     * @param request - QuerySubsIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySubsIdResponse
     *
     * @param QuerySubsIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QuerySubsIdResponse
     */
    public function querySubsIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySubsId',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySubsIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries binding IDs.
     *
     * @remarks
     * You can query binding IDs by phone number X. In the AXB product, multiple bindings may exist for the same phone number X. In this case, multiple binding IDs may be obtained for the same phone number X.
     *
     * @param request - QuerySubsIdRequest
     *
     * @returns QuerySubsIdResponse
     *
     * @param QuerySubsIdRequest $request
     *
     * @return QuerySubsIdResponse
     */
    public function querySubsId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySubsIdWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a phone number binding.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#poolkeyproducttype)Limits on PoolKey and ProductType
     * You must specify either PoolKey or ProductType. If both parameters are not specified, an error is reported when you call the QuerySubscriptionDetail operation. We recommend that you specify the ProductType parameter for the original key accounts of Alibaba Cloud and the PoolKey parameter for Alibaba Cloud users.
     *
     * @param request - QuerySubscriptionDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySubscriptionDetailResponse
     *
     * @param QuerySubscriptionDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySubscriptionDetailResponse
     */
    public function querySubscriptionDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subsId) {
            @$query['SubsId'] = $request->subsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySubscriptionDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySubscriptionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a phone number binding.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#poolkeyproducttype)Limits on PoolKey and ProductType
     * You must specify either PoolKey or ProductType. If both parameters are not specified, an error is reported when you call the QuerySubscriptionDetail operation. We recommend that you specify the ProductType parameter for the original key accounts of Alibaba Cloud and the PoolKey parameter for Alibaba Cloud users.
     *
     * @param request - QuerySubscriptionDetailRequest
     *
     * @returns QuerySubscriptionDetailResponse
     *
     * @param QuerySubscriptionDetailRequest $request
     *
     * @return QuerySubscriptionDetailResponse
     */
    public function querySubscriptionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySubscriptionDetailWithOptions($request, $runtime);
    }

    /**
     * Releases a phone number.
     *
     * @remarks
     *   After a phone number is released, it will no longer be charged from the following month.
     * *   Before you release a phone number, log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) to check whether the phone number is bound to other phone numbers. The phone number can be released only if it is not bound to other phone numbers.
     *
     * @param request - ReleaseSecretNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseSecretNoResponse
     *
     * @param ReleaseSecretNoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseSecretNoResponse
     */
    public function releaseSecretNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseSecretNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseSecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a phone number.
     *
     * @remarks
     *   After a phone number is released, it will no longer be charged from the following month.
     * *   Before you release a phone number, log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) to check whether the phone number is bound to other phone numbers. The phone number can be released only if it is not bound to other phone numbers.
     *
     * @param request - ReleaseSecretNoRequest
     *
     * @returns ReleaseSecretNoResponse
     *
     * @param ReleaseSecretNoRequest $request
     *
     * @return ReleaseSecretNoResponse
     */
    public function releaseSecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseSecretNoWithOptions($request, $runtime);
    }

    /**
     * 解除指定的呼叫绑定关系（A，X，B），解决呼叫绑定关系后，员工B不能通过工作号X呼叫到客户A。
     *
     * @param request - UnBindAXBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnBindAXBResponse
     *
     * @param UnBindAXBRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UnBindAXBResponse
     */
    public function unBindAXBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindId) {
            @$query['BindId'] = $request->bindId;
        }

        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnBindAXB',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnBindAXBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解除指定的呼叫绑定关系（A，X，B），解决呼叫绑定关系后，员工B不能通过工作号X呼叫到客户A。
     *
     * @param request - UnBindAXBRequest
     *
     * @returns UnBindAXBResponse
     *
     * @param UnBindAXBRequest $request
     *
     * @return UnBindAXBResponse
     */
    public function unBindAXB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unBindAXBWithOptions($request, $runtime);
    }

    /**
     * 调用本接口可取消工作号X与员工号码B的绑定。绑定解除后，对X的呼叫都不会转接给B。
     *
     * @param request - UnBindXBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnBindXBResponse
     *
     * @param UnBindXBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return UnBindXBResponse
     */
    public function unBindXBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authId) {
            @$query['AuthId'] = $request->authId;
        }

        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->customerPoolKey) {
            @$query['CustomerPoolKey'] = $request->customerPoolKey;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnBindXB',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnBindXBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用本接口可取消工作号X与员工号码B的绑定。绑定解除后，对X的呼叫都不会转接给B。
     *
     * @param request - UnBindXBRequest
     *
     * @returns UnBindXBResponse
     *
     * @param UnBindXBRequest $request
     *
     * @return UnBindXBResponse
     */
    public function unBindXB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unBindXBWithOptions($request, $runtime);
    }

    /**
     * 解除700绑定关系.
     *
     * @param request - UnbindSubs700Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindSubs700Response
     *
     * @param UnbindSubs700Request $request
     * @param RuntimeOptions       $runtime
     *
     * @return UnbindSubs700Response
     */
    public function unbindSubs700WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subsId) {
            @$query['SubsId'] = $request->subsId;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindSubs700',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindSubs700Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解除700绑定关系.
     *
     * @param request - UnbindSubs700Request
     *
     * @returns UnbindSubs700Response
     *
     * @param UnbindSubs700Request $request
     *
     * @return UnbindSubs700Response
     */
    public function unbindSubs700($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindSubs700WithOptions($request, $runtime);
    }

    /**
     * Unbinds a phone number.
     *
     * @remarks
     * Before releasing a phone number, you must call the UnbindSubscription operation to unbind the phone number.
     *
     * @param request - UnbindSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindSubscriptionResponse
     *
     * @param UnbindSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindSubscriptionResponse
     */
    public function unbindSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        if (null !== $request->subsId) {
            @$query['SubsId'] = $request->subsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindSubscription',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a phone number.
     *
     * @remarks
     * Before releasing a phone number, you must call the UnbindSubscription operation to unbind the phone number.
     *
     * @param request - UnbindSubscriptionRequest
     *
     * @returns UnbindSubscriptionResponse
     *
     * @param UnbindSubscriptionRequest $request
     *
     * @return UnbindSubscriptionResponse
     */
    public function unbindSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Unlocks a phone number.
     *
     * @remarks
     * After a phone number is unlocked, you can reselect the unlocked phone number when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UnlockSecretNoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockSecretNoResponse
     *
     * @param UnlockSecretNoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnlockSecretNoResponse
     */
    public function unlockSecretNoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secretNo) {
            @$query['SecretNo'] = $request->secretNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockSecretNo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockSecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlocks a phone number.
     *
     * @remarks
     * After a phone number is unlocked, you can reselect the unlocked phone number when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UnlockSecretNoRequest
     *
     * @returns UnlockSecretNoResponse
     *
     * @param UnlockSecretNoRequest $request
     *
     * @return UnlockSecretNoResponse
     */
    public function unlockSecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockSecretNoWithOptions($request, $runtime);
    }

    /**
     * 固话AxB绑定更新.
     *
     * @param tmpReq - UpdateAxbBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAxbBindFixedLineResponse
     *
     * @param UpdateAxbBindFixedLineRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAxbBindFixedLineResponse
     */
    public function updateAxbBindFixedLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAxbBindFixedLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        $query = [];
        if (null !== $request->anucode) {
            @$query['Anucode'] = $request->anucode;
        }

        if (null !== $request->anucodecalled) {
            @$query['Anucodecalled'] = $request->anucodecalled;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extraShrink) {
            @$query['Extra'] = $request->extraShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->subts) {
            @$query['Subts'] = $request->subts;
        }

        if (null !== $request->TAnucodeConnect) {
            @$query['TAnucodeConnect'] = $request->TAnucodeConnect;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAxbBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAxbBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 固话AxB绑定更新.
     *
     * @param request - UpdateAxbBindFixedLineRequest
     *
     * @returns UpdateAxbBindFixedLineResponse
     *
     * @param UpdateAxbBindFixedLineRequest $request
     *
     * @return UpdateAxbBindFixedLineResponse
     */
    public function updateAxbBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAxbBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * 更新Axn绑定关系.
     *
     * @param tmpReq - UpdateAxnBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAxnBindFixedLineResponse
     *
     * @param UpdateAxnBindFixedLineRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAxnBindFixedLineResponse
     */
    public function updateAxnBindFixedLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAxnBindFixedLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        $query = [];
        if (null !== $request->anucode) {
            @$query['Anucode'] = $request->anucode;
        }

        if (null !== $request->anucodecalled) {
            @$query['Anucodecalled'] = $request->anucodecalled;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extraShrink) {
            @$query['Extra'] = $request->extraShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->subts) {
            @$query['Subts'] = $request->subts;
        }

        if (null !== $request->TAnucodeConnect) {
            @$query['TAnucodeConnect'] = $request->TAnucodeConnect;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAxnBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAxnBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Axn绑定关系.
     *
     * @param request - UpdateAxnBindFixedLineRequest
     *
     * @returns UpdateAxnBindFixedLineResponse
     *
     * @param UpdateAxnBindFixedLineRequest $request
     *
     * @return UpdateAxnBindFixedLineResponse
     */
    public function updateAxnBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAxnBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * 更新AXN分机号绑定关系.
     *
     * @param tmpReq - UpdateAxnExtensionBindFixedLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAxnExtensionBindFixedLineResponse
     *
     * @param UpdateAxnExtensionBindFixedLineRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateAxnExtensionBindFixedLineResponse
     */
    public function updateAxnExtensionBindFixedLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAxnExtensionBindFixedLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extraaxx) {
            $request->extraaxxShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extraaxx, 'Extraaxx', 'json');
        }

        $query = [];
        if (null !== $request->anucode) {
            @$query['Anucode'] = $request->anucode;
        }

        if (null !== $request->anucodecalled) {
            @$query['Anucodecalled'] = $request->anucodecalled;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->extraaxxShrink) {
            @$query['Extraaxx'] = $request->extraaxxShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subId) {
            @$query['SubId'] = $request->subId;
        }

        if (null !== $request->subts) {
            @$query['Subts'] = $request->subts;
        }

        if (null !== $request->TAnucodeConnect) {
            @$query['TAnucodeConnect'] = $request->TAnucodeConnect;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->ts) {
            @$query['Ts'] = $request->ts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAxnExtensionBindFixedLine',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAxnExtensionBindFixedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AXN分机号绑定关系.
     *
     * @param request - UpdateAxnExtensionBindFixedLineRequest
     *
     * @returns UpdateAxnExtensionBindFixedLineResponse
     *
     * @param UpdateAxnExtensionBindFixedLineRequest $request
     *
     * @return UpdateAxnExtensionBindFixedLineResponse
     */
    public function updateAxnExtensionBindFixedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAxnExtensionBindFixedLineWithOptions($request, $runtime);
    }

    /**
     * 更新700绑定关系.
     *
     * @param request - UpdateSubs700Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubs700Response
     *
     * @param UpdateSubs700Request $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSubs700Response
     */
    public function updateSubs700WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asrModelId) {
            @$query['AsrModelId'] = $request->asrModelId;
        }

        if (null !== $request->audio) {
            @$query['Audio'] = $request->audio;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->defaultA) {
            @$query['DefaultA'] = $request->defaultA;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->industrialId) {
            @$query['IndustrialId'] = $request->industrialId;
        }

        if (null !== $request->needAsr) {
            @$query['NeedAsr'] = $request->needAsr;
        }

        if (null !== $request->needRecord) {
            @$query['NeedRecord'] = $request->needRecord;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subsId) {
            @$query['SubsId'] = $request->subsId;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        if (null !== $request->telX) {
            @$query['TelX'] = $request->telX;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSubs700',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSubs700Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新700绑定关系.
     *
     * @param request - UpdateSubs700Request
     *
     * @returns UpdateSubs700Response
     *
     * @param UpdateSubs700Request $request
     *
     * @return UpdateSubs700Response
     */
    public function updateSubs700($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubs700WithOptions($request, $runtime);
    }

    /**
     * Modifies a phone number binding.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 10,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param UpdateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ASRModelId) {
            @$query['ASRModelId'] = $request->ASRModelId;
        }

        if (null !== $request->ASRStatus) {
            @$query['ASRStatus'] = $request->ASRStatus;
        }

        if (null !== $request->callDisplayType) {
            @$query['CallDisplayType'] = $request->callDisplayType;
        }

        if (null !== $request->callRestrict) {
            @$query['CallRestrict'] = $request->callRestrict;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->isRecordingEnabled) {
            @$query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNoA) {
            @$query['PhoneNoA'] = $request->phoneNoA;
        }

        if (null !== $request->phoneNoB) {
            @$query['PhoneNoB'] = $request->phoneNoB;
        }

        if (null !== $request->phoneNoX) {
            @$query['PhoneNoX'] = $request->phoneNoX;
        }

        if (null !== $request->poolKey) {
            @$query['PoolKey'] = $request->poolKey;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ringConfig) {
            @$query['RingConfig'] = $request->ringConfig;
        }

        if (null !== $request->subsId) {
            @$query['SubsId'] = $request->subsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSubscription',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a phone number binding.
     *
     * @remarks
     * ### [](#qps)QPS limits
     * You can call this operation up to 10,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateSubscriptionRequest
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubscriptionWithOptions($request, $runtime);
    }
}
