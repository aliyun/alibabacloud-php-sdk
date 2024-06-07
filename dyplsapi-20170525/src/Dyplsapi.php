<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddAxnTrackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddAxnTrackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddSecretBlacklistRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\AddSecretBlacklistResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxgRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxgResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretBlacklistRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretBlacklistResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\LockSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\LockSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateBlackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateBlackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryRecordFileDownloadUrlRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryRecordFileDownloadUrlResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubsIdRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubsIdResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ReleaseSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ReleaseSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnbindSubscriptionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnbindSubscriptionResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnlockSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UnlockSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubscriptionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dyplsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'central';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds a tracking number for a private number in the AXN binding.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddAxnTrackNoRequest $request AddAxnTrackNoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAxnTrackNoResponse AddAxnTrackNoResponse
     */
    public function addAxnTrackNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subsId)) {
            $query['SubsId'] = $request->subsId;
        }
        if (!Utils::isUnset($request->trackNo)) {
            $query['trackNo'] = $request->trackNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAxnTrackNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAxnTrackNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a tracking number for a private number in the AXN binding.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddAxnTrackNoRequest $request AddAxnTrackNoRequest
     *
     * @return AddAxnTrackNoResponse AddAxnTrackNoResponse
     */
    public function addAxnTrackNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAxnTrackNoWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a blacklist.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddSecretBlacklistRequest $request AddSecretBlacklistRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSecretBlacklistResponse AddSecretBlacklistResponse
     */
    public function addSecretBlacklistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackNo)) {
            $query['BlackNo'] = $request->blackNo;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->wayControl)) {
            $query['WayControl'] = $request->wayControl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSecretBlacklist',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSecretBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a blacklist.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddSecretBlacklistRequest $request AddSecretBlacklistRequest
     *
     * @return AddSecretBlacklistResponse AddSecretBlacklistResponse
     */
    public function addSecretBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecretBlacklistWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an AXB binding.
     *  *
     * @description Before you add an AXB binding, we recommend that you specify role A and role B in the AXB device certificate (ProductKey, DeviceName, and DeviceSecret) in your business scenario. For example, in a taxi-hailing scenario, role A is the passenger and role B is the driver.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BindAxbRequest $request BindAxbRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAxbResponse BindAxbResponse
     */
    public function bindAxbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ASRModelId)) {
            $query['ASRModelId'] = $request->ASRModelId;
        }
        if (!Utils::isUnset($request->ASRStatus)) {
            $query['ASRStatus'] = $request->ASRStatus;
        }
        if (!Utils::isUnset($request->callDisplayType)) {
            $query['CallDisplayType'] = $request->callDisplayType;
        }
        if (!Utils::isUnset($request->callRestrict)) {
            $query['CallRestrict'] = $request->callRestrict;
        }
        if (!Utils::isUnset($request->callTimeout)) {
            $query['CallTimeout'] = $request->callTimeout;
        }
        if (!Utils::isUnset($request->dtmfConfig)) {
            $query['DtmfConfig'] = $request->dtmfConfig;
        }
        if (!Utils::isUnset($request->expectCity)) {
            $query['ExpectCity'] = $request->expectCity;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->isRecordingEnabled)) {
            $query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['OutOrderId'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ringConfig)) {
            $query['RingConfig'] = $request->ringConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAxb',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAxbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an AXB binding.
     *  *
     * @description Before you add an AXB binding, we recommend that you specify role A and role B in the AXB device certificate (ProductKey, DeviceName, and DeviceSecret) in your business scenario. For example, in a taxi-hailing scenario, role A is the passenger and role B is the driver.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BindAxbRequest $request BindAxbRequest
     *
     * @return BindAxbResponse BindAxbResponse
     */
    public function bindAxb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxbWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an AXG binding.
     *  *
     * @description An AXG protection solution can be configured to meet the requirements for grading users, limiting the scope of calls, and restricting order snatching. The letter G represents a phone number group to which you can add phone numbers as needed.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BindAxgRequest $request BindAxgRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAxgResponse BindAxgResponse
     */
    public function bindAxgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ASRModelId)) {
            $query['ASRModelId'] = $request->ASRModelId;
        }
        if (!Utils::isUnset($request->ASRStatus)) {
            $query['ASRStatus'] = $request->ASRStatus;
        }
        if (!Utils::isUnset($request->callDisplayType)) {
            $query['CallDisplayType'] = $request->callDisplayType;
        }
        if (!Utils::isUnset($request->callRestrict)) {
            $query['CallRestrict'] = $request->callRestrict;
        }
        if (!Utils::isUnset($request->expectCity)) {
            $query['ExpectCity'] = $request->expectCity;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isRecordingEnabled)) {
            $query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['OutOrderId'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ringConfig)) {
            $query['RingConfig'] = $request->ringConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAxg',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAxgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an AXG binding.
     *  *
     * @description An AXG protection solution can be configured to meet the requirements for grading users, limiting the scope of calls, and restricting order snatching. The letter G represents a phone number group to which you can add phone numbers as needed.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BindAxgRequest $request BindAxgRequest
     *
     * @return BindAxgResponse BindAxgResponse
     */
    public function bindAxg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxgWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an AXN binding.
     *  *
     * @description >  An AXN private number is a dedicated private number assigned to phone number A. When an N-side number is used to call phone number X, the call is forwarded to phone number A.
     *  *
     * @param BindAxnRequest $request BindAxnRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAxnResponse BindAxnResponse
     */
    public function bindAxnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ASRModelId)) {
            $query['ASRModelId'] = $request->ASRModelId;
        }
        if (!Utils::isUnset($request->ASRStatus)) {
            $query['ASRStatus'] = $request->ASRStatus;
        }
        if (!Utils::isUnset($request->callDisplayType)) {
            $query['CallDisplayType'] = $request->callDisplayType;
        }
        if (!Utils::isUnset($request->callRestrict)) {
            $query['CallRestrict'] = $request->callRestrict;
        }
        if (!Utils::isUnset($request->callTimeout)) {
            $query['CallTimeout'] = $request->callTimeout;
        }
        if (!Utils::isUnset($request->expectCity)) {
            $query['ExpectCity'] = $request->expectCity;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->isRecordingEnabled)) {
            $query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }
        if (!Utils::isUnset($request->noType)) {
            $query['NoType'] = $request->noType;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['OutOrderId'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ringConfig)) {
            $query['RingConfig'] = $request->ringConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAxn',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAxnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an AXN binding.
     *  *
     * @description >  An AXN private number is a dedicated private number assigned to phone number A. When an N-side number is used to call phone number X, the call is forwarded to phone number A.
     *  *
     * @param BindAxnRequest $request BindAxnRequest
     *
     * @return BindAxnResponse BindAxnResponse
     */
    public function bindAxn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxnWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an AXN extension binding.
     *  *
     * @description Before you add an AXN extension binding, confirm phone number A and phone number N in the business scenario. Phone number A belongs to a customer, and phone number X is the private number assigned to the customer. When any other phone number is used to call phone number X and the extension, the call is transferred to phone number A. When phone number A is used to call phone number X, the call is transferred to the default phone number B that is specified during the phone number binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BindAxnExtensionRequest $request BindAxnExtensionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAxnExtensionResponse BindAxnExtensionResponse
     */
    public function bindAxnExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ASRModelId)) {
            $query['ASRModelId'] = $request->ASRModelId;
        }
        if (!Utils::isUnset($request->ASRStatus)) {
            $query['ASRStatus'] = $request->ASRStatus;
        }
        if (!Utils::isUnset($request->callDisplayType)) {
            $query['CallDisplayType'] = $request->callDisplayType;
        }
        if (!Utils::isUnset($request->callRestrict)) {
            $query['CallRestrict'] = $request->callRestrict;
        }
        if (!Utils::isUnset($request->expectCity)) {
            $query['ExpectCity'] = $request->expectCity;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->extension)) {
            $query['Extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->isRecordingEnabled)) {
            $query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['OutOrderId'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ringConfig)) {
            $query['RingConfig'] = $request->ringConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAxnExtension',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAxnExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an AXN extension binding.
     *  *
     * @description Before you add an AXN extension binding, confirm phone number A and phone number N in the business scenario. Phone number A belongs to a customer, and phone number X is the private number assigned to the customer. When any other phone number is used to call phone number X and the extension, the call is transferred to phone number A. When phone number A is used to call phone number X, the call is transferred to the default phone number B that is specified during the phone number binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BindAxnExtensionRequest $request BindAxnExtensionRequest
     *
     * @return BindAxnExtensionResponse BindAxnExtensionResponse
     */
    public function bindAxnExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAxnExtensionWithOptions($request, $runtime);
    }

    /**
     * @param BindBatchAxgRequest $tmpReq  BindBatchAxgRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return BindBatchAxgResponse BindBatchAxgResponse
     */
    public function bindBatchAxgWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BindBatchAxgShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->axgBindList)) {
            $request->axgBindListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->axgBindList, 'AxgBindList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->axgBindListShrink)) {
            $query['AxgBindList'] = $request->axgBindListShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindBatchAxg',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindBatchAxgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindBatchAxgRequest $request BindBatchAxgRequest
     *
     * @return BindBatchAxgResponse BindBatchAxgResponse
     */
    public function bindBatchAxg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindBatchAxgWithOptions($request, $runtime);
    }

    /**
     * @summary Purchases a phone number.
     *  *
     * @description *   After you create a phone number pool in the Phone Number Protection console, the phone number pool is empty by default. You must purchase phone numbers and add them to the phone number pool.
     * *   Before you call this operation, make sure that you are familiar with the [pricing](https://help.aliyun.com/document_detail/59825.html) of Phone Number Protection.
     * *   When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before you call this operation to purchase a phone number, check the quantity of phone numbers available for purchase by using the [QuerySecretNoRemain](https://help.aliyun.com/document_detail/111699.html) operation.
     * *   The account used to purchase a phone number must be an enterprise account that has passed real-name verification. For more information about how to perform real-name verification, see [Enterprise verification FAQs](https://help.aliyun.com/document_detail/37172.html).
     *  *
     * @param BuySecretNoRequest $request BuySecretNoRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BuySecretNoResponse BuySecretNoResponse
     */
    public function buySecretNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->displayPool)) {
            $query['DisplayPool'] = $request->displayPool;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BuySecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BuySecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchases a phone number.
     *  *
     * @description *   After you create a phone number pool in the Phone Number Protection console, the phone number pool is empty by default. You must purchase phone numbers and add them to the phone number pool.
     * *   Before you call this operation, make sure that you are familiar with the [pricing](https://help.aliyun.com/document_detail/59825.html) of Phone Number Protection.
     * *   When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before you call this operation to purchase a phone number, check the quantity of phone numbers available for purchase by using the [QuerySecretNoRemain](https://help.aliyun.com/document_detail/111699.html) operation.
     * *   The account used to purchase a phone number must be an enterprise account that has passed real-name verification. For more information about how to perform real-name verification, see [Enterprise verification FAQs](https://help.aliyun.com/document_detail/37172.html).
     *  *
     * @param BuySecretNoRequest $request BuySecretNoRequest
     *
     * @return BuySecretNoResponse BuySecretNoResponse
     */
    public function buySecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buySecretNoWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a door-to-door delivery order.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CancelPickUpWaybillRequest $request CancelPickUpWaybillRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelPickUpWaybillResponse CancelPickUpWaybillResponse
     */
    public function cancelPickUpWaybillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cancelDesc)) {
            $query['CancelDesc'] = $request->cancelDesc;
        }
        if (!Utils::isUnset($request->outerOrderCode)) {
            $query['OuterOrderCode'] = $request->outerOrderCode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelPickUpWaybill',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelPickUpWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels a door-to-door delivery order.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CancelPickUpWaybillRequest $request CancelPickUpWaybillRequest
     *
     * @return CancelPickUpWaybillResponse CancelPickUpWaybillResponse
     */
    public function cancelPickUpWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPickUpWaybillWithOptions($request, $runtime);
    }

    /**
     * @summary Creates number group G.
     *  *
     * @description Before you add an AXG binding, you must purchase phone number X, create number group G, and then add phone numbers to number group G. If you do not add phone numbers to number group G after you create number group G, you can call the [OperateAxgGroup](https://help.aliyun.com/document_detail/110252.htm) operation to add phone numbers to number group G.
     * >  Up to 2,000 number groups G can be added for a single phone number pool.
     *  *
     * @param CreateAxgGroupRequest $request CreateAxgGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAxgGroupResponse CreateAxgGroupResponse
     */
    public function createAxgGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->numbers)) {
            $query['Numbers'] = $request->numbers;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAxgGroup',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAxgGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates number group G.
     *  *
     * @description Before you add an AXG binding, you must purchase phone number X, create number group G, and then add phone numbers to number group G. If you do not add phone numbers to number group G after you create number group G, you can call the [OperateAxgGroup](https://help.aliyun.com/document_detail/110252.htm) operation to add phone numbers to number group G.
     * >  Up to 2,000 number groups G can be added for a single phone number pool.
     *  *
     * @param CreateAxgGroupRequest $request CreateAxgGroupRequest
     *
     * @return CreateAxgGroupResponse CreateAxgGroupResponse
     */
    public function createAxgGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAxgGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a door-to-door delivery order.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreatePickUpWaybillRequest $tmpReq  CreatePickUpWaybillRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePickUpWaybillResponse CreatePickUpWaybillResponse
     */
    public function createPickUpWaybillWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePickUpWaybillShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->consigneeAddress)) {
            $request->consigneeAddressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->consigneeAddress, 'ConsigneeAddress', 'json');
        }
        if (!Utils::isUnset($tmpReq->goodsInfos)) {
            $request->goodsInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->goodsInfos, 'GoodsInfos', 'json');
        }
        if (!Utils::isUnset($tmpReq->sendAddress)) {
            $request->sendAddressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sendAddress, 'SendAddress', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appointGotEndTime)) {
            $query['AppointGotEndTime'] = $request->appointGotEndTime;
        }
        if (!Utils::isUnset($request->appointGotStartTime)) {
            $query['AppointGotStartTime'] = $request->appointGotStartTime;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->consigneeAddressShrink)) {
            $query['ConsigneeAddress'] = $request->consigneeAddressShrink;
        }
        if (!Utils::isUnset($request->consigneeMobile)) {
            $query['ConsigneeMobile'] = $request->consigneeMobile;
        }
        if (!Utils::isUnset($request->consigneeName)) {
            $query['ConsigneeName'] = $request->consigneeName;
        }
        if (!Utils::isUnset($request->consigneePhone)) {
            $query['ConsigneePhone'] = $request->consigneePhone;
        }
        if (!Utils::isUnset($request->cpCode)) {
            $query['CpCode'] = $request->cpCode;
        }
        if (!Utils::isUnset($request->goodsInfosShrink)) {
            $query['GoodsInfos'] = $request->goodsInfosShrink;
        }
        if (!Utils::isUnset($request->orderChannels)) {
            $query['OrderChannels'] = $request->orderChannels;
        }
        if (!Utils::isUnset($request->outerOrderCode)) {
            $query['OuterOrderCode'] = $request->outerOrderCode;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sendAddressShrink)) {
            $query['SendAddress'] = $request->sendAddressShrink;
        }
        if (!Utils::isUnset($request->sendMobile)) {
            $query['SendMobile'] = $request->sendMobile;
        }
        if (!Utils::isUnset($request->sendName)) {
            $query['SendName'] = $request->sendName;
        }
        if (!Utils::isUnset($request->sendPhone)) {
            $query['SendPhone'] = $request->sendPhone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePickUpWaybill',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePickUpWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a door-to-door delivery order.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreatePickUpWaybillRequest $request CreatePickUpWaybillRequest
     *
     * @return CreatePickUpWaybillResponse CreatePickUpWaybillResponse
     */
    public function createPickUpWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPickUpWaybillWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a pickup order.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreatePickUpWaybillPreQueryRequest $tmpReq  CreatePickUpWaybillPreQueryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePickUpWaybillPreQueryResponse CreatePickUpWaybillPreQueryResponse
     */
    public function createPickUpWaybillPreQueryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePickUpWaybillPreQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->consigneeInfo)) {
            $request->consigneeInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->consigneeInfo, 'ConsigneeInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->senderInfo)) {
            $request->senderInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->senderInfo, 'SenderInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->consigneeInfoShrink)) {
            $query['ConsigneeInfo'] = $request->consigneeInfoShrink;
        }
        if (!Utils::isUnset($request->cpCode)) {
            $query['CpCode'] = $request->cpCode;
        }
        if (!Utils::isUnset($request->orderChannels)) {
            $query['OrderChannels'] = $request->orderChannels;
        }
        if (!Utils::isUnset($request->outerOrderCode)) {
            $query['OuterOrderCode'] = $request->outerOrderCode;
        }
        if (!Utils::isUnset($request->preWeight)) {
            $query['PreWeight'] = $request->preWeight;
        }
        if (!Utils::isUnset($request->senderInfoShrink)) {
            $query['SenderInfo'] = $request->senderInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePickUpWaybillPreQuery',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePickUpWaybillPreQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a pickup order.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreatePickUpWaybillPreQueryRequest $request CreatePickUpWaybillPreQueryRequest
     *
     * @return CreatePickUpWaybillPreQueryResponse CreatePickUpWaybillPreQueryResponse
     */
    public function createPickUpWaybillPreQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPickUpWaybillPreQueryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAxgGroupRequest $request DeleteAxgGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAxgGroupResponse DeleteAxgGroupResponse
     */
    public function deleteAxgGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAxgGroup',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAxgGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAxgGroupRequest $request DeleteAxgGroupRequest
     *
     * @return DeleteAxgGroupResponse DeleteAxgGroupResponse
     */
    public function deleteAxgGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAxgGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a blacklist.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteSecretBlacklistRequest $request DeleteSecretBlacklistRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecretBlacklistResponse DeleteSecretBlacklistResponse
     */
    public function deleteSecretBlacklistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackNo)) {
            $query['BlackNo'] = $request->blackNo;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->wayControl)) {
            $query['WayControl'] = $request->wayControl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecretBlacklist',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecretBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a blacklist.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteSecretBlacklistRequest $request DeleteSecretBlacklistRequest
     *
     * @return DeleteSecretBlacklistResponse DeleteSecretBlacklistResponse
     */
    public function deleteSecretBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretBlacklistWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of the automatic speech recognition (ASR) result.
     *  *
     * @description Before you call the GetSecretAsrDetail operation, set the ASRStatus parameter to true in the [BindAxn operation](https://help.aliyun.com/document_detail/400483.html). This ensures that you can obtain the ASR result properly.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetSecretAsrDetailRequest $request GetSecretAsrDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecretAsrDetailResponse GetSecretAsrDetailResponse
     */
    public function getSecretAsrDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->callTime)) {
            $query['CallTime'] = $request->callTime;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecretAsrDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecretAsrDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of the automatic speech recognition (ASR) result.
     *  *
     * @description Before you call the GetSecretAsrDetail operation, set the ASRStatus parameter to true in the [BindAxn operation](https://help.aliyun.com/document_detail/400483.html). This ensures that you can obtain the ASR result properly.
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetSecretAsrDetailRequest $request GetSecretAsrDetailRequest
     *
     * @return GetSecretAsrDetailResponse GetSecretAsrDetailResponse
     */
    public function getSecretAsrDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretAsrDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the download URL of a recorded ringing tone.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetTotalPublicUrlRequest $request GetTotalPublicUrlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTotalPublicUrlResponse GetTotalPublicUrlResponse
     */
    public function getTotalPublicUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->callTime)) {
            $query['CallTime'] = $request->callTime;
        }
        if (!Utils::isUnset($request->checkSubs)) {
            $query['CheckSubs'] = $request->checkSubs;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->partnerKey)) {
            $query['PartnerKey'] = $request->partnerKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTotalPublicUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTotalPublicUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the download URL of a recorded ringing tone.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetTotalPublicUrlRequest $request GetTotalPublicUrlRequest
     *
     * @return GetTotalPublicUrlResponse GetTotalPublicUrlResponse
     */
    public function getTotalPublicUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTotalPublicUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Locks a phone number.
     *  *
     * @description After a phone number is locked, the locked phone number cannot be selected when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param LockSecretNoRequest $request LockSecretNoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return LockSecretNoResponse LockSecretNoResponse
     */
    public function lockSecretNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockSecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockSecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Locks a phone number.
     *  *
     * @description After a phone number is locked, the locked phone number cannot be selected when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param LockSecretNoRequest $request LockSecretNoRequest
     *
     * @return LockSecretNoResponse LockSecretNoResponse
     */
    public function lockSecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockSecretNoWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies number group G.
     *  *
     * @description After you create number group G, you can call the OperateAxgGroup operation to modify number group G. For example, you can add phone numbers to number group G, delete phone numbers from number group G, and replace all phone numbers in number group G.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param OperateAxgGroupRequest $request OperateAxgGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateAxgGroupResponse OperateAxgGroupResponse
     */
    public function operateAxgGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->numbers)) {
            $query['Numbers'] = $request->numbers;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateAxgGroup',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateAxgGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies number group G.
     *  *
     * @description After you create number group G, you can call the OperateAxgGroup operation to modify number group G. For example, you can add phone numbers to number group G, delete phone numbers from number group G, and replace all phone numbers in number group G.
     * ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param OperateAxgGroupRequest $request OperateAxgGroupRequest
     *
     * @return OperateAxgGroupResponse OperateAxgGroupResponse
     */
    public function operateAxgGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAxgGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a phone number to a blacklist or deletes a phone number from a blacklist.
     *  *
     * @description The OperateBlackNo operation supports the following number pool types: AXN, AXN extension, and 95AXN.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param OperateBlackNoRequest $request OperateBlackNoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateBlackNoResponse OperateBlackNoResponse
     */
    public function operateBlackNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackNo)) {
            $query['BlackNo'] = $request->blackNo;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tips)) {
            $query['Tips'] = $request->tips;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateBlackNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateBlackNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a phone number to a blacklist or deletes a phone number from a blacklist.
     *  *
     * @description The OperateBlackNo operation supports the following number pool types: AXN, AXN extension, and 95AXN.
     * ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param OperateBlackNoRequest $request OperateBlackNoRequest
     *
     * @return OperateBlackNoResponse OperateBlackNoResponse
     */
    public function operateBlackNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateBlackNoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a tracking number.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryPhoneNoAByTrackNoRequest $request QueryPhoneNoAByTrackNoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPhoneNoAByTrackNoResponse QueryPhoneNoAByTrackNoResponse
     */
    public function queryPhoneNoAByTrackNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cabinetNo)) {
            $query['CabinetNo'] = $request->cabinetNo;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->trackNo)) {
            $query['trackNo'] = $request->trackNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPhoneNoAByTrackNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPhoneNoAByTrackNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a tracking number.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryPhoneNoAByTrackNoRequest $request QueryPhoneNoAByTrackNoRequest
     *
     * @return QueryPhoneNoAByTrackNoResponse QueryPhoneNoAByTrackNoResponse
     */
    public function queryPhoneNoAByTrackNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneNoAByTrackNoWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the download URL of a recording file.
     *  *
     * @description If the recording feature is enabled for a binding, all calls made by the bound phone numbers are recorded. You can obtain the download URL of a recording file by calling the QueryRecordFileDownloadUrl operation and download the recording file.
     * >  We recommend that you subscribe to [the recording status report SecretRecording](https://help.aliyun.com/document_detail/109198.html). The values of the response parameters in SecretRecording can be used as the values of the request parameters for downloading a recording file.
     * ### [](#)Procedure for obtaining a recording file
     * 1.  Specify the request parameter in an update or binding operation to enable the recording feature.
     * 2.  Subscribe to recording message receipts in the Phone Number Protection console.
     * 3.  After a recording message receipt is returned, call the QueryRecordFileDownloadUrl operation to obtain the download URL of the recording file, and download the recording file.
     * >
     * *   A download URL is valid for 2 hours. Download the recording file as soon as possible after obtaining a download URL.
     * *   The storage period of recording files is 30 days. You can download only the recording files of calls recorded in the last 30 days.
     *  *
     * @param QueryRecordFileDownloadUrlRequest $request QueryRecordFileDownloadUrlRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRecordFileDownloadUrlResponse QueryRecordFileDownloadUrlResponse
     */
    public function queryRecordFileDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->callTime)) {
            $query['CallTime'] = $request->callTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordFileDownloadUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordFileDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the download URL of a recording file.
     *  *
     * @description If the recording feature is enabled for a binding, all calls made by the bound phone numbers are recorded. You can obtain the download URL of a recording file by calling the QueryRecordFileDownloadUrl operation and download the recording file.
     * >  We recommend that you subscribe to [the recording status report SecretRecording](https://help.aliyun.com/document_detail/109198.html). The values of the response parameters in SecretRecording can be used as the values of the request parameters for downloading a recording file.
     * ### [](#)Procedure for obtaining a recording file
     * 1.  Specify the request parameter in an update or binding operation to enable the recording feature.
     * 2.  Subscribe to recording message receipts in the Phone Number Protection console.
     * 3.  After a recording message receipt is returned, call the QueryRecordFileDownloadUrl operation to obtain the download URL of the recording file, and download the recording file.
     * >
     * *   A download URL is valid for 2 hours. Download the recording file as soon as possible after obtaining a download URL.
     * *   The storage period of recording files is 30 days. You can download only the recording files of calls recorded in the last 30 days.
     *  *
     * @param QueryRecordFileDownloadUrlRequest $request QueryRecordFileDownloadUrlRequest
     *
     * @return QueryRecordFileDownloadUrlResponse QueryRecordFileDownloadUrlResponse
     */
    public function queryRecordFileDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordFileDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attributes of a private number.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySecretNoDetailRequest $request QuerySecretNoDetailRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySecretNoDetailResponse QuerySecretNoDetailResponse
     */
    public function querySecretNoDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySecretNoDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySecretNoDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attributes of a private number.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QuerySecretNoDetailRequest $request QuerySecretNoDetailRequest
     *
     * @return QuerySecretNoDetailResponse QuerySecretNoDetailResponse
     */
    public function querySecretNoDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecretNoDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quantity of remaining phone numbers available for online purchase.
     *  *
     * @description When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before calling the [BuySecretNo](~~BuySecretNo~~) operation to purchase a phone number, call the [QuerySecretNoRemain](~~QuerySecretNoRemain~~) operation to query the quantity of remaining phone numbers available for online purchase.
     *  *
     * @param QuerySecretNoRemainRequest $request QuerySecretNoRemainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySecretNoRemainResponse QuerySecretNoRemainResponse
     */
    public function querySecretNoRemainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySecretNoRemain',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySecretNoRemainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quantity of remaining phone numbers available for online purchase.
     *  *
     * @description When purchasing a phone number, specify the home location. If no sufficient phone numbers are available for purchase in the home location, the purchase of the phone number fails. Before calling the [BuySecretNo](~~BuySecretNo~~) operation to purchase a phone number, call the [QuerySecretNoRemain](~~QuerySecretNoRemain~~) operation to query the quantity of remaining phone numbers available for online purchase.
     *  *
     * @param QuerySecretNoRemainRequest $request QuerySecretNoRemainRequest
     *
     * @return QuerySecretNoRemainResponse QuerySecretNoRemainResponse
     */
    public function querySecretNoRemain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecretNoRemainWithOptions($request, $runtime);
    }

    /**
     * @summary Queries binding IDs.
     *  *
     * @description You can query binding IDs by phone number X. In the AXB product, multiple bindings may exist for the same phone number X. In this case, multiple binding IDs may be obtained for the same phone number X.
     *  *
     * @param QuerySubsIdRequest $request QuerySubsIdRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySubsIdResponse QuerySubsIdResponse
     */
    public function querySubsIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySubsId',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySubsIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries binding IDs.
     *  *
     * @description You can query binding IDs by phone number X. In the AXB product, multiple bindings may exist for the same phone number X. In this case, multiple binding IDs may be obtained for the same phone number X.
     *  *
     * @param QuerySubsIdRequest $request QuerySubsIdRequest
     *
     * @return QuerySubsIdResponse QuerySubsIdResponse
     */
    public function querySubsId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySubsIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a phone number binding.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#poolkeyproducttype)Limits on PoolKey and ProductType
     * You must specify either PoolKey or ProductType. If both parameters are not specified, an error is reported when you call the QuerySubscriptionDetail operation. We recommend that you specify the ProductType parameter for the original key accounts of Alibaba Cloud and the PoolKey parameter for Alibaba Cloud users.
     *  *
     * @param QuerySubscriptionDetailRequest $request QuerySubscriptionDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySubscriptionDetailResponse QuerySubscriptionDetailResponse
     */
    public function querySubscriptionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subsId)) {
            $query['SubsId'] = $request->subsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySubscriptionDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySubscriptionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a phone number binding.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#poolkeyproducttype)Limits on PoolKey and ProductType
     * You must specify either PoolKey or ProductType. If both parameters are not specified, an error is reported when you call the QuerySubscriptionDetail operation. We recommend that you specify the ProductType parameter for the original key accounts of Alibaba Cloud and the PoolKey parameter for Alibaba Cloud users.
     *  *
     * @param QuerySubscriptionDetailRequest $request QuerySubscriptionDetailRequest
     *
     * @return QuerySubscriptionDetailResponse QuerySubscriptionDetailResponse
     */
    public function querySubscriptionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySubscriptionDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a phone number.
     *  *
     * @description *   After a phone number is released, it will no longer be charged from the following month.
     * *   Before you release a phone number, log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) to check whether the phone number is bound to other phone numbers. The phone number can be released only if it is not bound to other phone numbers.
     *  *
     * @param ReleaseSecretNoRequest $request ReleaseSecretNoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseSecretNoResponse ReleaseSecretNoResponse
     */
    public function releaseSecretNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseSecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseSecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a phone number.
     *  *
     * @description *   After a phone number is released, it will no longer be charged from the following month.
     * *   Before you release a phone number, log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) to check whether the phone number is bound to other phone numbers. The phone number can be released only if it is not bound to other phone numbers.
     *  *
     * @param ReleaseSecretNoRequest $request ReleaseSecretNoRequest
     *
     * @return ReleaseSecretNoResponse ReleaseSecretNoResponse
     */
    public function releaseSecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseSecretNoWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds a phone number.
     *  *
     * @description Before releasing a phone number, you must call the UnbindSubscription operation to unbind the phone number.
     *  *
     * @param UnbindSubscriptionRequest $request UnbindSubscriptionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindSubscriptionResponse UnbindSubscriptionResponse
     */
    public function unbindSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        if (!Utils::isUnset($request->subsId)) {
            $query['SubsId'] = $request->subsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindSubscription',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds a phone number.
     *  *
     * @description Before releasing a phone number, you must call the UnbindSubscription operation to unbind the phone number.
     *  *
     * @param UnbindSubscriptionRequest $request UnbindSubscriptionRequest
     *
     * @return UnbindSubscriptionResponse UnbindSubscriptionResponse
     */
    public function unbindSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Unlocks a phone number.
     *  *
     * @description After a phone number is unlocked, you can reselect the unlocked phone number when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UnlockSecretNoRequest $request UnlockSecretNoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockSecretNoResponse UnlockSecretNoResponse
     */
    public function unlockSecretNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockSecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockSecretNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unlocks a phone number.
     *  *
     * @description After a phone number is unlocked, you can reselect the unlocked phone number when you call an operation to create a binding.
     * ### [](#qps)QPS limits
     * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UnlockSecretNoRequest $request UnlockSecretNoRequest
     *
     * @return UnlockSecretNoResponse UnlockSecretNoResponse
     */
    public function unlockSecretNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockSecretNoWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a phone number binding.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 10,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateSubscriptionRequest $request UpdateSubscriptionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSubscriptionResponse UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ASRModelId)) {
            $query['ASRModelId'] = $request->ASRModelId;
        }
        if (!Utils::isUnset($request->ASRStatus)) {
            $query['ASRStatus'] = $request->ASRStatus;
        }
        if (!Utils::isUnset($request->callDisplayType)) {
            $query['CallDisplayType'] = $request->callDisplayType;
        }
        if (!Utils::isUnset($request->callRestrict)) {
            $query['CallRestrict'] = $request->callRestrict;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isRecordingEnabled)) {
            $query['IsRecordingEnabled'] = $request->isRecordingEnabled;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->phoneNoX)) {
            $query['PhoneNoX'] = $request->phoneNoX;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ringConfig)) {
            $query['RingConfig'] = $request->ringConfig;
        }
        if (!Utils::isUnset($request->subsId)) {
            $query['SubsId'] = $request->subsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubscription',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a phone number binding.
     *  *
     * @description ### [](#qps)QPS limits
     * You can call this operation up to 10,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateSubscriptionRequest $request UpdateSubscriptionRequest
     *
     * @return UpdateSubscriptionResponse UpdateSubscriptionResponse
     */
    public function updateSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubscriptionWithOptions($request, $runtime);
    }
}
