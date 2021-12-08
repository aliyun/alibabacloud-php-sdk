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
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ConfirmSendSmsRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ConfirmSendSmsResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillShrinkRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateSubscriptionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateSubscriptionResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretBlacklistRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\DeleteSecretBlacklistResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetFaceVerifyRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetFaceVerifyResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSubscriptionDetailRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSubscriptionDetailResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\InitFaceVerifyRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\InitFaceVerifyResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\LockSecretNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\LockSecretNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateAxgGroupResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateBlackNoRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\OperateBlackNoResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryCallStatusRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryCallStatusResponse;
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
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateDefaultBRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateDefaultBResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdatePhoneNumberRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdatePhoneNumberResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdatePhoneSwitchRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdatePhoneSwitchResponse;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateSubscriptionResponse;
use AlibabaCloud\Tea\Tea;
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SubsId']               = $request->subsId;
        $query['trackNo']              = $request->trackNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddAxnTrackNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['BlackNo']    = $request->blackNo;
        $query['BlackType']  = $request->blackType;
        $query['PoolKey']    = $request->poolKey;
        $query['Remark']     = $request->remark;
        $query['WayControl'] = $request->wayControl;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddSecretBlacklist',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['ASRModelId']           = $request->ASRModelId;
        $query['ASRStatus']            = $request->ASRStatus;
        $query['CallDisplayType']      = $request->callDisplayType;
        $query['CallRestrict']         = $request->callRestrict;
        $query['CallTimeout']          = $request->callTimeout;
        $query['ExpectCity']           = $request->expectCity;
        $query['Expiration']           = $request->expiration;
        $query['IsRecordingEnabled']   = $request->isRecordingEnabled;
        $query['OutId']                = $request->outId;
        $query['OutOrderId']           = $request->outOrderId;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoA']             = $request->phoneNoA;
        $query['PhoneNoB']             = $request->phoneNoB;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RingConfig']           = $request->ringConfig;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BindAxb',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['ASRModelId']           = $request->ASRModelId;
        $query['ASRStatus']            = $request->ASRStatus;
        $query['CallDisplayType']      = $request->callDisplayType;
        $query['CallRestrict']         = $request->callRestrict;
        $query['ExpectCity']           = $request->expectCity;
        $query['Expiration']           = $request->expiration;
        $query['GroupId']              = $request->groupId;
        $query['IsRecordingEnabled']   = $request->isRecordingEnabled;
        $query['OutId']                = $request->outId;
        $query['OutOrderId']           = $request->outOrderId;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoA']             = $request->phoneNoA;
        $query['PhoneNoB']             = $request->phoneNoB;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RingConfig']           = $request->ringConfig;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BindAxg',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['ASRModelId']           = $request->ASRModelId;
        $query['ASRStatus']            = $request->ASRStatus;
        $query['CallDisplayType']      = $request->callDisplayType;
        $query['CallRestrict']         = $request->callRestrict;
        $query['CallTimeout']          = $request->callTimeout;
        $query['ExpectCity']           = $request->expectCity;
        $query['Expiration']           = $request->expiration;
        $query['IsRecordingEnabled']   = $request->isRecordingEnabled;
        $query['NoType']               = $request->noType;
        $query['OutId']                = $request->outId;
        $query['OutOrderId']           = $request->outOrderId;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoA']             = $request->phoneNoA;
        $query['PhoneNoB']             = $request->phoneNoB;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RingConfig']           = $request->ringConfig;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BindAxn',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['ASRModelId']           = $request->ASRModelId;
        $query['ASRStatus']            = $request->ASRStatus;
        $query['CallDisplayType']      = $request->callDisplayType;
        $query['CallRestrict']         = $request->callRestrict;
        $query['ExpectCity']           = $request->expectCity;
        $query['Expiration']           = $request->expiration;
        $query['Extension']            = $request->extension;
        $query['IsRecordingEnabled']   = $request->isRecordingEnabled;
        $query['OutId']                = $request->outId;
        $query['OutOrderId']           = $request->outOrderId;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoA']             = $request->phoneNoA;
        $query['PhoneNoB']             = $request->phoneNoB;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RingConfig']           = $request->ringConfig;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BindAxnExtension',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param BuySecretNoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BuySecretNoResponse
     */
    public function buySecretNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['City']                 = $request->city;
        $query['DisplayPool']          = $request->displayPool;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SpecId']               = $request->specId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BuySecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['CancelDesc']           = $request->cancelDesc;
        $query['OuterOrderCode']       = $request->outerOrderCode;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelPickUpWaybill',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ConfirmSendSmsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConfirmSendSmsResponse
     */
    public function confirmSendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['CallId']               = $request->callId;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ConfirmSendSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfirmSendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmSendSmsRequest $request
     *
     * @return ConfirmSendSmsResponse
     */
    public function confirmSendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmSendSmsWithOptions($request, $runtime);
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
        $query                         = [];
        $query['Name']                 = $request->name;
        $query['Numbers']              = $request->numbers;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['Remark']               = $request->remark;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAxgGroup',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            $request->consigneeAddressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->consigneeAddress), 'ConsigneeAddress', 'json');
        }
        if (!Utils::isUnset($tmpReq->goodsInfos)) {
            $request->goodsInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->goodsInfos, 'GoodsInfos', 'json');
        }
        if (!Utils::isUnset($tmpReq->sendAddress)) {
            $request->sendAddressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->sendAddress), 'SendAddress', 'json');
        }
        $query                     = [];
        $query['ConsigneeAddress'] = $request->consigneeAddressShrink;
        $query['ConsigneeMobile']  = $request->consigneeMobile;
        $query['ConsigneeName']    = $request->consigneeName;
        $query['ConsigneePhone']   = $request->consigneePhone;
        $query['CpCode']           = $request->cpCode;
        $query['GoodsInfos']       = $request->goodsInfosShrink;
        $query['OrderChannels']    = $request->orderChannels;
        $query['OuterOrderCode']   = $request->outerOrderCode;
        $query['Remark']           = $request->remark;
        $query['SendAddress']      = $request->sendAddressShrink;
        $query['SendMobile']       = $request->sendMobile;
        $query['SendName']         = $request->sendName;
        $query['SendPhone']        = $request->sendPhone;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreatePickUpWaybill',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param CreateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['BindToken']            = $request->bindToken;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNo']              = $request->phoneNo;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscription',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubscriptionRequest $request
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscriptionWithOptions($request, $runtime);
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
        $query               = [];
        $query['BlackNo']    = $request->blackNo;
        $query['BlackType']  = $request->blackType;
        $query['PoolKey']    = $request->poolKey;
        $query['Remark']     = $request->remark;
        $query['WayControl'] = $request->wayControl;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecretBlacklist',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param GetFaceVerifyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFaceVerifyResponse
     */
    public function getFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['VerifyToken']          = $request->verifyToken;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetFaceVerify',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFaceVerifyRequest $request
     *
     * @return GetFaceVerifyResponse
     */
    public function getFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceVerifyWithOptions($request, $runtime);
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
        $query             = [];
        $query['CallId']   = $request->callId;
        $query['CallTime'] = $request->callTime;
        $query['PoolKey']  = $request->poolKey;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetSecretAsrDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param GetSubscriptionDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSubscriptionDetailResponse
     */
    public function getSubscriptionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetSubscriptionDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSubscriptionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubscriptionDetailRequest $request
     *
     * @return GetSubscriptionDetailResponse
     */
    public function getSubscriptionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionDetailWithOptions($request, $runtime);
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
        $query                         = [];
        $query['CallId']               = $request->callId;
        $query['CallTime']             = $request->callTime;
        $query['CheckSubs']            = $request->checkSubs;
        $query['OwnerId']              = $request->ownerId;
        $query['PartnerKey']           = $request->partnerKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTotalPublicUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param InitFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['MetaInfo']             = $request->metaInfo;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'InitFaceVerify',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InitFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitFaceVerifyRequest $request
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initFaceVerifyWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'LockSecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['GroupId']              = $request->groupId;
        $query['Numbers']              = $request->numbers;
        $query['OperateType']          = $request->operateType;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'OperateAxgGroup',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['BlackNo']              = $request->blackNo;
        $query['OperateType']          = $request->operateType;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Tips']                 = $request->tips;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'OperateBlackNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param QueryCallStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryCallStatusResponse
     */
    public function queryCallStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['CallNo']               = $request->callNo;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryCallStatus',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryCallStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCallStatusRequest $request
     *
     * @return QueryCallStatusResponse
     */
    public function queryCallStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallStatusWithOptions($request, $runtime);
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
        $query                         = [];
        $query['CabinetNo']            = $request->cabinetNo;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['trackNo']              = $request->trackNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryPhoneNoAByTrackNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['CallId']               = $request->callId;
        $query['CallTime']             = $request->callTime;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ProductType']          = $request->productType;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordFileDownloadUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySecretNoDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['City']                 = $request->city;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SpecId']               = $request->specId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySecretNoRemain',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySubsId',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ProductType']          = $request->productType;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySubscriptionDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseSecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ProductType']          = $request->productType;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UnbindSubscription',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UnlockSecretNo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param UpdateDefaultBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateDefaultBResponse
     */
    public function updateDefaultBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNo']              = $request->phoneNo;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateDefaultB',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDefaultBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDefaultBRequest $request
     *
     * @return UpdateDefaultBResponse
     */
    public function updateDefaultB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDefaultBWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePhoneNumberRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdatePhoneNumberResponse
     */
    public function updatePhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['BindToken']            = $request->bindToken;
        $query['NewPhoneNo']           = $request->newPhoneNo;
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdatePhoneNumber',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePhoneNumberRequest $request
     *
     * @return UpdatePhoneNumberResponse
     */
    public function updatePhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneNumberWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePhoneSwitchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdatePhoneSwitchResponse
     */
    public function updatePhoneSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PoolKey']              = $request->poolKey;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecretNo']             = $request->secretNo;
        $query['SubsId']               = $request->subsId;
        $query['SwitchStatus']         = $request->switchStatus;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdatePhoneSwitch',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePhoneSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePhoneSwitchRequest $request
     *
     * @return UpdatePhoneSwitchResponse
     */
    public function updatePhoneSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneSwitchWithOptions($request, $runtime);
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
        $query                         = [];
        $query['ASRModelId']           = $request->ASRModelId;
        $query['ASRStatus']            = $request->ASRStatus;
        $query['CallDisplayType']      = $request->callDisplayType;
        $query['CallRestrict']         = $request->callRestrict;
        $query['Expiration']           = $request->expiration;
        $query['GroupId']              = $request->groupId;
        $query['IsRecordingEnabled']   = $request->isRecordingEnabled;
        $query['OperateType']          = $request->operateType;
        $query['OutId']                = $request->outId;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNoA']             = $request->phoneNoA;
        $query['PhoneNoB']             = $request->phoneNoB;
        $query['PhoneNoX']             = $request->phoneNoX;
        $query['PoolKey']              = $request->poolKey;
        $query['ProductType']          = $request->productType;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RingConfig']           = $request->ringConfig;
        $query['SubsId']               = $request->subsId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubscription',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
