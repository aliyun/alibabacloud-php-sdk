<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupRequest;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateAxgGroupResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAxnTrackNoResponse::fromMap($this->doRPCRequest('AddAxnTrackNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSecretBlacklistResponse::fromMap($this->doRPCRequest('AddSecretBlacklist', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindAxbResponse::fromMap($this->doRPCRequest('BindAxb', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindAxgResponse::fromMap($this->doRPCRequest('BindAxg', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindAxnResponse::fromMap($this->doRPCRequest('BindAxn', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindAxnExtensionResponse::fromMap($this->doRPCRequest('BindAxnExtension', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BuySecretNoResponse::fromMap($this->doRPCRequest('BuySecretNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAxgGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAxgGroupResponse
     */
    public function createAxgGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAxgGroupResponse::fromMap($this->doRPCRequest('CreateAxgGroup', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSubscriptionResponse::fromMap($this->doRPCRequest('CreateSubscription', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSecretBlacklistResponse::fromMap($this->doRPCRequest('DeleteSecretBlacklist', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFaceVerifyResponse::fromMap($this->doRPCRequest('GetFaceVerify', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSecretAsrDetailResponse::fromMap($this->doRPCRequest('GetSecretAsrDetail', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSubscriptionDetailResponse::fromMap($this->doRPCRequest('GetSubscriptionDetail', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTotalPublicUrlResponse::fromMap($this->doRPCRequest('GetTotalPublicUrl', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitFaceVerifyResponse::fromMap($this->doRPCRequest('InitFaceVerify', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LockSecretNoResponse::fromMap($this->doRPCRequest('LockSecretNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperateAxgGroupResponse::fromMap($this->doRPCRequest('OperateAxgGroup', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperateBlackNoResponse::fromMap($this->doRPCRequest('OperateBlackNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCallStatusResponse::fromMap($this->doRPCRequest('QueryCallStatus', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPhoneNoAByTrackNoResponse::fromMap($this->doRPCRequest('QueryPhoneNoAByTrackNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordFileDownloadUrlResponse::fromMap($this->doRPCRequest('QueryRecordFileDownloadUrl', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySecretNoRemainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySecretNoRemainResponse
     */
    public function querySecretNoRemainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySecretNoRemainResponse::fromMap($this->doRPCRequest('QuerySecretNoRemain', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySubscriptionDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySubscriptionDetailResponse
     */
    public function querySubscriptionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySubscriptionDetailResponse::fromMap($this->doRPCRequest('QuerySubscriptionDetail', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySubsIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QuerySubsIdResponse
     */
    public function querySubsIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySubsIdResponse::fromMap($this->doRPCRequest('QuerySubsId', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReleaseSecretNoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseSecretNoResponse
     */
    public function releaseSecretNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseSecretNoResponse::fromMap($this->doRPCRequest('ReleaseSecretNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindSubscriptionResponse::fromMap($this->doRPCRequest('UnbindSubscription', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnlockSecretNoResponse::fromMap($this->doRPCRequest('UnlockSecretNo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDefaultBResponse::fromMap($this->doRPCRequest('UpdateDefaultB', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePhoneNumberResponse::fromMap($this->doRPCRequest('UpdatePhoneNumber', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePhoneSwitchResponse::fromMap($this->doRPCRequest('UpdatePhoneSwitch', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSubscriptionResponse::fromMap($this->doRPCRequest('UpdateSubscription', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
