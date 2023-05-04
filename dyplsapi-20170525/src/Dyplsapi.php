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
     * @param AddAxnTrackNoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddAxnTrackNoResponse
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
     * @param AddSecretBlacklistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSecretBlacklistResponse
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
     * @param BindAxbRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindAxbResponse
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
     * @param BindAxgRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindAxgResponse
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
     * @param BindAxnRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindAxnResponse
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
     * @param BindAxnExtensionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindAxnExtensionResponse
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
     * @param BindBatchAxgRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return BindBatchAxgResponse
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
     * @param BuySecretNoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BuySecretNoResponse
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
     * @param CancelPickUpWaybillRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelPickUpWaybillResponse
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
     * @param CreateAxgGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAxgGroupResponse
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
     * @param CreatePickUpWaybillRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePickUpWaybillResponse
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
     * @param CreatePickUpWaybillPreQueryRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreatePickUpWaybillPreQueryResponse
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
     * @param DeleteAxgGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAxgGroupResponse
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
     * @param DeleteSecretBlacklistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecretBlacklistResponse
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
     * @param GetSecretAsrDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSecretAsrDetailResponse
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
     * @param GetTotalPublicUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTotalPublicUrlResponse
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
     * @param LockSecretNoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LockSecretNoResponse
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
     * @param OperateAxgGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OperateAxgGroupResponse
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
     * @param OperateBlackNoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OperateBlackNoResponse
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
     * @param QueryPhoneNoAByTrackNoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPhoneNoAByTrackNoResponse
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
     * @param QueryRecordFileDownloadUrlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryRecordFileDownloadUrlResponse
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
     * @param QuerySecretNoDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySecretNoDetailResponse
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
     * @param QuerySecretNoRemainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySecretNoRemainResponse
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
     * @param QuerySubsIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QuerySubsIdResponse
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
     * @param QuerySubscriptionDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySubscriptionDetailResponse
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
     * @param ReleaseSecretNoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseSecretNoResponse
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
     * @param UnbindSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindSubscriptionResponse
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
     * @param UnlockSecretNoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnlockSecretNoResponse
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
     * @param UpdateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
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
