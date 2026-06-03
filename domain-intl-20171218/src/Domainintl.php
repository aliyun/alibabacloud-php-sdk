<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\AcknowledgeTaskResultRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\AcknowledgeTaskResultResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\BatchFuzzyMatchDomainSensitiveWordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\BatchFuzzyMatchDomainSensitiveWordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CancelDomainVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CancelDomainVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CheckDomainSunriseClaimRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CheckDomainSunriseClaimResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CheckTransferInFeasibilityRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\CheckTransferInFeasibilityResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ConfirmTransferInEmailRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ConfirmTransferInEmailResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\DeleteEmailVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\DeleteEmailVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\DeleteRegistrantProfileRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\DeleteRegistrantProfileResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\EmailVerifiedRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\EmailVerifiedResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\FuzzyMatchDomainSensitiveWordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\FuzzyMatchDomainSensitiveWordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ListEmailVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ListEmailVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\PollTaskResultRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\PollTaskResultResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryArtExtensionRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryArtExtensionResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryChangeLogListRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryChangeLogListResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryContactInfoRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryContactInfoResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDnsHostRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDnsHostResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainByDomainNameRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainByDomainNameResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainByInstanceIdRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainByInstanceIdResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainListRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainListResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainRealNameVerificationInfoRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainRealNameVerificationInfoResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDSRecordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDSRecordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryEnsAssociationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryEnsAssociationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryFailReasonForDomainRealNameVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryFailReasonForDomainRealNameVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryFailReasonForRegistrantProfileRealNameVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryFailReasonForRegistrantProfileRealNameVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryLocalEnsAssociationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryLocalEnsAssociationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfileRealNameVerificationInfoRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfileRealNameVerificationInfoResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfilesRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfilesResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskDetailHistoryRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskDetailHistoryResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskDetailListRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskDetailListResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskListRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskListResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTransferInByInstanceIdRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTransferInByInstanceIdResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTransferInListRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTransferInListResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTransferOutInfoRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTransferOutInfoResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\RegistrantProfileRealNameVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\RegistrantProfileRealNameVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ResendEmailVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ResendEmailVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderActivateRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderActivateResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderRedeemRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderRedeemResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderRenewRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderRenewResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderTransferRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderTransferResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForDomainNameProxyServiceRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForDomainNameProxyServiceResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForModifyingDomainDnsRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForModifyingDomainDnsResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForReserveDropListDomainRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForReserveDropListDomainResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForTransferProhibitionLockRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForTransferProhibitionLockResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForUpdateProhibitionLockRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForUpdateProhibitionLockResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForUpdatingContactInfoByNewContactRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForUpdatingContactInfoByNewContactResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForUpdatingContactInfoRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForUpdatingContactInfoResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveRegistrantProfileRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveRegistrantProfileResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForAddingDSRecordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForAddingDSRecordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForApprovingTransferOutRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForApprovingTransferOutResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForAssociatingEnsRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForAssociatingEnsResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCancelingTransferInRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCancelingTransferInResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCancelingTransferOutRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCancelingTransferOutResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingDnsHostRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingDnsHostResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderActivateRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderActivateResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderRedeemRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderRedeemResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderRenewRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderRenewResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderTransferRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForCreatingOrderTransferResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDeletingDnsHostRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDeletingDnsHostResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDeletingDSRecordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDeletingDSRecordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDisassociatingEnsRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDisassociatingEnsResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDomainNameProxyServiceRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForDomainNameProxyServiceResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForModifyingDnsHostRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForModifyingDnsHostResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForModifyingDSRecordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForModifyingDSRecordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForQueryingTransferAuthorizationCodeRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForQueryingTransferAuthorizationCodeResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForReserveDropListDomainRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForReserveDropListDomainResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForSaveArtExtensionRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForSaveArtExtensionResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForSynchronizingDnsHostRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForSynchronizingDnsHostResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForSynchronizingDSRecordRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForSynchronizingDSRecordResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForTransferProhibitionLockRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForTransferProhibitionLockResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForUpdateProhibitionLockRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForUpdateProhibitionLockResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForUpdatingContactInfoRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveSingleTaskForUpdatingContactInfoResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForSubmittingDomainDeleteRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForSubmittingDomainDeleteResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SubmitEmailVerificationRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\SubmitEmailVerificationResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInCheckMailTokenRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInCheckMailTokenResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInReenterTransferAuthorizationCodeRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInReenterTransferAuthorizationCodeResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInRefetchWhoisEmailRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInRefetchWhoisEmailResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInResendMailTokenRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\TransferInResendMailTokenResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\VerifyContactFieldRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\VerifyContactFieldResponse;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\VerifyEmailRequest;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\VerifyEmailResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Domainintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('domain-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AcknowledgeTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcknowledgeTaskResultResponse
     *
     * @param AcknowledgeTaskResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AcknowledgeTaskResultResponse
     */
    public function acknowledgeTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->taskDetailNo) {
            @$query['TaskDetailNo'] = $request->taskDetailNo;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AcknowledgeTaskResult',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcknowledgeTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AcknowledgeTaskResultRequest
     *
     * @returns AcknowledgeTaskResultResponse
     *
     * @param AcknowledgeTaskResultRequest $request
     *
     * @return AcknowledgeTaskResultResponse
     */
    public function acknowledgeTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acknowledgeTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchFuzzyMatchDomainSensitiveWordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchFuzzyMatchDomainSensitiveWordResponse
     *
     * @param BatchFuzzyMatchDomainSensitiveWordRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return BatchFuzzyMatchDomainSensitiveWordResponse
     */
    public function batchFuzzyMatchDomainSensitiveWordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchFuzzyMatchDomainSensitiveWord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchFuzzyMatchDomainSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchFuzzyMatchDomainSensitiveWordRequest
     *
     * @returns BatchFuzzyMatchDomainSensitiveWordResponse
     *
     * @param BatchFuzzyMatchDomainSensitiveWordRequest $request
     *
     * @return BatchFuzzyMatchDomainSensitiveWordResponse
     */
    public function batchFuzzyMatchDomainSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchFuzzyMatchDomainSensitiveWordWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelDomainVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDomainVerificationResponse
     *
     * @param CancelDomainVerificationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelDomainVerificationResponse
     */
    public function cancelDomainVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDomainVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelDomainVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelDomainVerificationRequest
     *
     * @returns CancelDomainVerificationResponse
     *
     * @param CancelDomainVerificationRequest $request
     *
     * @return CancelDomainVerificationResponse
     */
    public function cancelDomainVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDomainVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param CancelTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->taskNo) {
            @$query['TaskNo'] = $request->taskNo;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelTask',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelTaskRequest
     *
     * @returns CancelTaskResponse
     *
     * @param CancelTaskRequest $request
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDomainResponse
     *
     * @param CheckDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->feeCommand) {
            @$query['FeeCommand'] = $request->feeCommand;
        }

        if (null !== $request->feeCurrency) {
            @$query['FeeCurrency'] = $request->feeCurrency;
        }

        if (null !== $request->feePeriod) {
            @$query['FeePeriod'] = $request->feePeriod;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDomain',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckDomainRequest
     *
     * @returns CheckDomainResponse
     *
     * @param CheckDomainRequest $request
     *
     * @return CheckDomainResponse
     */
    public function checkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckDomainSunriseClaimRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDomainSunriseClaimResponse
     *
     * @param CheckDomainSunriseClaimRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckDomainSunriseClaimResponse
     */
    public function checkDomainSunriseClaimWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDomainSunriseClaim',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDomainSunriseClaimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckDomainSunriseClaimRequest
     *
     * @returns CheckDomainSunriseClaimResponse
     *
     * @param CheckDomainSunriseClaimRequest $request
     *
     * @return CheckDomainSunriseClaimResponse
     */
    public function checkDomainSunriseClaim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainSunriseClaimWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckTransferInFeasibilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckTransferInFeasibilityResponse
     *
     * @param CheckTransferInFeasibilityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CheckTransferInFeasibilityResponse
     */
    public function checkTransferInFeasibilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->transferAuthorizationCode) {
            @$query['TransferAuthorizationCode'] = $request->transferAuthorizationCode;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckTransferInFeasibility',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckTransferInFeasibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckTransferInFeasibilityRequest
     *
     * @returns CheckTransferInFeasibilityResponse
     *
     * @param CheckTransferInFeasibilityRequest $request
     *
     * @return CheckTransferInFeasibilityResponse
     */
    public function checkTransferInFeasibility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTransferInFeasibilityWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfirmTransferInEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmTransferInEmailResponse
     *
     * @param ConfirmTransferInEmailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfirmTransferInEmailResponse
     */
    public function confirmTransferInEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmTransferInEmail',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfirmTransferInEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ConfirmTransferInEmailRequest
     *
     * @returns ConfirmTransferInEmailResponse
     *
     * @param ConfirmTransferInEmailRequest $request
     *
     * @return ConfirmTransferInEmailResponse
     */
    public function confirmTransferInEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmTransferInEmailWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteEmailVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEmailVerificationResponse
     *
     * @param DeleteEmailVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteEmailVerificationResponse
     */
    public function deleteEmailVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEmailVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteEmailVerificationRequest
     *
     * @returns DeleteEmailVerificationResponse
     *
     * @param DeleteEmailVerificationRequest $request
     *
     * @return DeleteEmailVerificationResponse
     */
    public function deleteEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteRegistrantProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistrantProfileResponse
     *
     * @param DeleteRegistrantProfileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRegistrantProfileResponse
     */
    public function deleteRegistrantProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRegistrantProfile',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRegistrantProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteRegistrantProfileRequest
     *
     * @returns DeleteRegistrantProfileResponse
     *
     * @param DeleteRegistrantProfileRequest $request
     *
     * @return DeleteRegistrantProfileResponse
     */
    public function deleteRegistrantProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRegistrantProfileWithOptions($request, $runtime);
    }

    /**
     * @param request - EmailVerifiedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EmailVerifiedResponse
     *
     * @param EmailVerifiedRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EmailVerifiedResponse
     */
    public function emailVerifiedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EmailVerified',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EmailVerifiedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EmailVerifiedRequest
     *
     * @returns EmailVerifiedResponse
     *
     * @param EmailVerifiedRequest $request
     *
     * @return EmailVerifiedResponse
     */
    public function emailVerified($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emailVerifiedWithOptions($request, $runtime);
    }

    /**
     * @param request - FuzzyMatchDomainSensitiveWordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FuzzyMatchDomainSensitiveWordResponse
     *
     * @param FuzzyMatchDomainSensitiveWordRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return FuzzyMatchDomainSensitiveWordResponse
     */
    public function fuzzyMatchDomainSensitiveWordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FuzzyMatchDomainSensitiveWord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FuzzyMatchDomainSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FuzzyMatchDomainSensitiveWordRequest
     *
     * @returns FuzzyMatchDomainSensitiveWordResponse
     *
     * @param FuzzyMatchDomainSensitiveWordRequest $request
     *
     * @return FuzzyMatchDomainSensitiveWordResponse
     */
    public function fuzzyMatchDomainSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fuzzyMatchDomainSensitiveWordWithOptions($request, $runtime);
    }

    /**
     * @param request - ListEmailVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEmailVerificationResponse
     *
     * @param ListEmailVerificationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEmailVerificationResponse
     */
    public function listEmailVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginCreateTime) {
            @$query['BeginCreateTime'] = $request->beginCreateTime;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->endCreateTime) {
            @$query['EndCreateTime'] = $request->endCreateTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->verificationStatus) {
            @$query['VerificationStatus'] = $request->verificationStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEmailVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListEmailVerificationRequest
     *
     * @returns ListEmailVerificationResponse
     *
     * @param ListEmailVerificationRequest $request
     *
     * @return ListEmailVerificationResponse
     */
    public function listEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - LookupTmchNoticeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LookupTmchNoticeResponse
     *
     * @param LookupTmchNoticeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return LookupTmchNoticeResponse
     */
    public function lookupTmchNoticeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->claimKey) {
            @$query['ClaimKey'] = $request->claimKey;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LookupTmchNotice',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LookupTmchNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - LookupTmchNoticeRequest
     *
     * @returns LookupTmchNoticeResponse
     *
     * @param LookupTmchNoticeRequest $request
     *
     * @return LookupTmchNoticeResponse
     */
    public function lookupTmchNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lookupTmchNoticeWithOptions($request, $runtime);
    }

    /**
     * @param request - PollTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PollTaskResultResponse
     *
     * @param PollTaskResultRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PollTaskResultResponse
     */
    public function pollTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskNo) {
            @$query['TaskNo'] = $request->taskNo;
        }

        if (null !== $request->taskResultStatus) {
            @$query['TaskResultStatus'] = $request->taskResultStatus;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PollTaskResult',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PollTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PollTaskResultRequest
     *
     * @returns PollTaskResultResponse
     *
     * @param PollTaskResultRequest $request
     *
     * @return PollTaskResultResponse
     */
    public function pollTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pollTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryArtExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryArtExtensionResponse
     *
     * @param QueryArtExtensionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryArtExtensionResponse
     */
    public function queryArtExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryArtExtension',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryArtExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryArtExtensionRequest
     *
     * @returns QueryArtExtensionResponse
     *
     * @param QueryArtExtensionRequest $request
     *
     * @return QueryArtExtensionResponse
     */
    public function queryArtExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryArtExtensionWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryChangeLogListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryChangeLogListResponse
     *
     * @param QueryChangeLogListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryChangeLogListResponse
     */
    public function queryChangeLogListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryChangeLogList',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryChangeLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryChangeLogListRequest
     *
     * @returns QueryChangeLogListResponse
     *
     * @param QueryChangeLogListRequest $request
     *
     * @return QueryChangeLogListResponse
     */
    public function queryChangeLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChangeLogListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryContactInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryContactInfoResponse
     *
     * @param QueryContactInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryContactInfoResponse
     */
    public function queryContactInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryContactInfo',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryContactInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryContactInfoRequest
     *
     * @returns QueryContactInfoResponse
     *
     * @param QueryContactInfoRequest $request
     *
     * @return QueryContactInfoResponse
     */
    public function queryContactInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDSRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDSRecordResponse
     *
     * @param QueryDSRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryDSRecordResponse
     */
    public function queryDSRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDSRecord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDSRecordRequest
     *
     * @returns QueryDSRecordResponse
     *
     * @param QueryDSRecordRequest $request
     *
     * @return QueryDSRecordResponse
     */
    public function queryDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDSRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDnsHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDnsHostResponse
     *
     * @param QueryDnsHostRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDnsHostResponse
     */
    public function queryDnsHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDnsHost',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDnsHostRequest
     *
     * @returns QueryDnsHostResponse
     *
     * @param QueryDnsHostRequest $request
     *
     * @return QueryDnsHostResponse
     */
    public function queryDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDomainByDomainNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainByDomainNameResponse
     *
     * @param QueryDomainByDomainNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDomainByDomainNameResponse
     */
    public function queryDomainByDomainNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainByDomainName',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainByDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDomainByDomainNameRequest
     *
     * @returns QueryDomainByDomainNameResponse
     *
     * @param QueryDomainByDomainNameRequest $request
     *
     * @return QueryDomainByDomainNameResponse
     */
    public function queryDomainByDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainByDomainNameWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDomainByInstanceIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainByInstanceIdResponse
     *
     * @param QueryDomainByInstanceIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDomainByInstanceIdResponse
     */
    public function queryDomainByInstanceIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainByInstanceId',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDomainByInstanceIdRequest
     *
     * @returns QueryDomainByInstanceIdResponse
     *
     * @param QueryDomainByInstanceIdRequest $request
     *
     * @return QueryDomainByInstanceIdResponse
     */
    public function queryDomainByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - QueryDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainListResponse
     *
     * @param QueryDomainListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ccompany) {
            @$query['Ccompany'] = $request->ccompany;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endExpirationDate) {
            @$query['EndExpirationDate'] = $request->endExpirationDate;
        }

        if (null !== $request->endRegistrationDate) {
            @$query['EndRegistrationDate'] = $request->endRegistrationDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderByType) {
            @$query['OrderByType'] = $request->orderByType;
        }

        if (null !== $request->orderKeyType) {
            @$query['OrderKeyType'] = $request->orderKeyType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productDomainType) {
            @$query['ProductDomainType'] = $request->productDomainType;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startExpirationDate) {
            @$query['StartExpirationDate'] = $request->startExpirationDate;
        }

        if (null !== $request->startRegistrationDate) {
            @$query['StartRegistrationDate'] = $request->startRegistrationDate;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainList',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - QueryDomainListRequest
     *
     * @returns QueryDomainListResponse
     *
     * @param QueryDomainListRequest $request
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDomainRealNameVerificationInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainRealNameVerificationInfoResponse
     *
     * @param QueryDomainRealNameVerificationInfoRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryDomainRealNameVerificationInfoResponse
     */
    public function queryDomainRealNameVerificationInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->fetchImage) {
            @$query['FetchImage'] = $request->fetchImage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainRealNameVerificationInfo',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainRealNameVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDomainRealNameVerificationInfoRequest
     *
     * @returns QueryDomainRealNameVerificationInfoResponse
     *
     * @param QueryDomainRealNameVerificationInfoRequest $request
     *
     * @return QueryDomainRealNameVerificationInfoResponse
     */
    public function queryDomainRealNameVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainRealNameVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryEnsAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEnsAssociationResponse
     *
     * @param QueryEnsAssociationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEnsAssociationResponse
     */
    public function queryEnsAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEnsAssociation',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEnsAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryEnsAssociationRequest
     *
     * @returns QueryEnsAssociationResponse
     *
     * @param QueryEnsAssociationRequest $request
     *
     * @return QueryEnsAssociationResponse
     */
    public function queryEnsAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEnsAssociationWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryFailReasonForDomainRealNameVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFailReasonForDomainRealNameVerificationResponse
     *
     * @param QueryFailReasonForDomainRealNameVerificationRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return QueryFailReasonForDomainRealNameVerificationResponse
     */
    public function queryFailReasonForDomainRealNameVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->realNameVerificationAction) {
            @$query['RealNameVerificationAction'] = $request->realNameVerificationAction;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFailReasonForDomainRealNameVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFailReasonForDomainRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryFailReasonForDomainRealNameVerificationRequest
     *
     * @returns QueryFailReasonForDomainRealNameVerificationResponse
     *
     * @param QueryFailReasonForDomainRealNameVerificationRequest $request
     *
     * @return QueryFailReasonForDomainRealNameVerificationResponse
     */
    public function queryFailReasonForDomainRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailReasonForDomainRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryFailReasonForRegistrantProfileRealNameVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFailReasonForRegistrantProfileRealNameVerificationResponse
     *
     * @param QueryFailReasonForRegistrantProfileRealNameVerificationRequest $request
     * @param RuntimeOptions                                                 $runtime
     *
     * @return QueryFailReasonForRegistrantProfileRealNameVerificationResponse
     */
    public function queryFailReasonForRegistrantProfileRealNameVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileID) {
            @$query['RegistrantProfileID'] = $request->registrantProfileID;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFailReasonForRegistrantProfileRealNameVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFailReasonForRegistrantProfileRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryFailReasonForRegistrantProfileRealNameVerificationRequest
     *
     * @returns QueryFailReasonForRegistrantProfileRealNameVerificationResponse
     *
     * @param QueryFailReasonForRegistrantProfileRealNameVerificationRequest $request
     *
     * @return QueryFailReasonForRegistrantProfileRealNameVerificationResponse
     */
    public function queryFailReasonForRegistrantProfileRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailReasonForRegistrantProfileRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryLocalEnsAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLocalEnsAssociationResponse
     *
     * @param QueryLocalEnsAssociationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryLocalEnsAssociationResponse
     */
    public function queryLocalEnsAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryLocalEnsAssociation',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLocalEnsAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryLocalEnsAssociationRequest
     *
     * @returns QueryLocalEnsAssociationResponse
     *
     * @param QueryLocalEnsAssociationRequest $request
     *
     * @return QueryLocalEnsAssociationResponse
     */
    public function queryLocalEnsAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLocalEnsAssociationWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryRegistrantProfileRealNameVerificationInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRegistrantProfileRealNameVerificationInfoResponse
     *
     * @param QueryRegistrantProfileRealNameVerificationInfoRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return QueryRegistrantProfileRealNameVerificationInfoResponse
     */
    public function queryRegistrantProfileRealNameVerificationInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fetchImage) {
            @$query['FetchImage'] = $request->fetchImage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRegistrantProfileRealNameVerificationInfo',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRegistrantProfileRealNameVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryRegistrantProfileRealNameVerificationInfoRequest
     *
     * @returns QueryRegistrantProfileRealNameVerificationInfoResponse
     *
     * @param QueryRegistrantProfileRealNameVerificationInfoRequest $request
     *
     * @return QueryRegistrantProfileRealNameVerificationInfoResponse
     */
    public function queryRegistrantProfileRealNameVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRegistrantProfileRealNameVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryRegistrantProfilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRegistrantProfilesResponse
     *
     * @param QueryRegistrantProfilesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryRegistrantProfilesResponse
     */
    public function queryRegistrantProfilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultRegistrantProfile) {
            @$query['DefaultRegistrantProfile'] = $request->defaultRegistrantProfile;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->realNameStatus) {
            @$query['RealNameStatus'] = $request->realNameStatus;
        }

        if (null !== $request->registrantOrganization) {
            @$query['RegistrantOrganization'] = $request->registrantOrganization;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->registrantProfileType) {
            @$query['RegistrantProfileType'] = $request->registrantProfileType;
        }

        if (null !== $request->registrantType) {
            @$query['RegistrantType'] = $request->registrantType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRegistrantProfiles',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRegistrantProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryRegistrantProfilesRequest
     *
     * @returns QueryRegistrantProfilesResponse
     *
     * @param QueryRegistrantProfilesRequest $request
     *
     * @return QueryRegistrantProfilesResponse
     */
    public function queryRegistrantProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRegistrantProfilesWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTaskDetailHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskDetailHistoryResponse
     *
     * @param QueryTaskDetailHistoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryTaskDetailHistoryResponse
     */
    public function queryTaskDetailHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainNameCursor) {
            @$query['DomainNameCursor'] = $request->domainNameCursor;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskDetailNoCursor) {
            @$query['TaskDetailNoCursor'] = $request->taskDetailNoCursor;
        }

        if (null !== $request->taskNo) {
            @$query['TaskNo'] = $request->taskNo;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskDetailHistory',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskDetailHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTaskDetailHistoryRequest
     *
     * @returns QueryTaskDetailHistoryResponse
     *
     * @param QueryTaskDetailHistoryRequest $request
     *
     * @return QueryTaskDetailHistoryResponse
     */
    public function queryTaskDetailHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskDetailHistoryWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTaskDetailListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskDetailListResponse
     *
     * @param QueryTaskDetailListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTaskDetailListResponse
     */
    public function queryTaskDetailListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskNo) {
            @$query['TaskNo'] = $request->taskNo;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskDetailList',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTaskDetailListRequest
     *
     * @returns QueryTaskDetailListResponse
     *
     * @param QueryTaskDetailListRequest $request
     *
     * @return QueryTaskDetailListResponse
     */
    public function queryTaskDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskDetailListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTaskInfoHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskInfoHistoryResponse
     *
     * @param QueryTaskInfoHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTaskInfoHistoryResponse
     */
    public function queryTaskInfoHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginCreateTime) {
            @$query['BeginCreateTime'] = $request->beginCreateTime;
        }

        if (null !== $request->createTimeCursor) {
            @$query['CreateTimeCursor'] = $request->createTimeCursor;
        }

        if (null !== $request->endCreateTime) {
            @$query['EndCreateTime'] = $request->endCreateTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskNoCursor) {
            @$query['TaskNoCursor'] = $request->taskNoCursor;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskInfoHistory',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskInfoHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTaskInfoHistoryRequest
     *
     * @returns QueryTaskInfoHistoryResponse
     *
     * @param QueryTaskInfoHistoryRequest $request
     *
     * @return QueryTaskInfoHistoryResponse
     */
    public function queryTaskInfoHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskInfoHistoryWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskListResponse
     *
     * @param QueryTaskListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginCreateTime) {
            @$query['BeginCreateTime'] = $request->beginCreateTime;
        }

        if (null !== $request->endCreateTime) {
            @$query['EndCreateTime'] = $request->endCreateTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskList',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTaskListRequest
     *
     * @returns QueryTaskListResponse
     *
     * @param QueryTaskListRequest $request
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTransferInByInstanceIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTransferInByInstanceIdResponse
     *
     * @param QueryTransferInByInstanceIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryTransferInByInstanceIdResponse
     */
    public function queryTransferInByInstanceIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTransferInByInstanceId',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTransferInByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTransferInByInstanceIdRequest
     *
     * @returns QueryTransferInByInstanceIdResponse
     *
     * @param QueryTransferInByInstanceIdRequest $request
     *
     * @return QueryTransferInByInstanceIdResponse
     */
    public function queryTransferInByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferInByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTransferInListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTransferInListResponse
     *
     * @param QueryTransferInListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTransferInListResponse
     */
    public function queryTransferInListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->simpleTransferInStatus) {
            @$query['SimpleTransferInStatus'] = $request->simpleTransferInStatus;
        }

        if (null !== $request->submissionEndDate) {
            @$query['SubmissionEndDate'] = $request->submissionEndDate;
        }

        if (null !== $request->submissionStartDate) {
            @$query['SubmissionStartDate'] = $request->submissionStartDate;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTransferInList',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTransferInListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTransferInListRequest
     *
     * @returns QueryTransferInListResponse
     *
     * @param QueryTransferInListRequest $request
     *
     * @return QueryTransferInListResponse
     */
    public function queryTransferInList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferInListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTransferOutInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTransferOutInfoResponse
     *
     * @param QueryTransferOutInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTransferOutInfoResponse
     */
    public function queryTransferOutInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTransferOutInfo',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTransferOutInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTransferOutInfoRequest
     *
     * @returns QueryTransferOutInfoResponse
     *
     * @param QueryTransferOutInfoRequest $request
     *
     * @return QueryTransferOutInfoResponse
     */
    public function queryTransferOutInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferOutInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - RegistrantProfileRealNameVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegistrantProfileRealNameVerificationResponse
     *
     * @param RegistrantProfileRealNameVerificationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RegistrantProfileRealNameVerificationResponse
     */
    public function registrantProfileRealNameVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identityCredentialNo) {
            @$query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }

        if (null !== $request->identityCredentialType) {
            @$query['IdentityCredentialType'] = $request->identityCredentialType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileID) {
            @$query['RegistrantProfileID'] = $request->registrantProfileID;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->identityCredential) {
            @$body['IdentityCredential'] = $request->identityCredential;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RegistrantProfileRealNameVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegistrantProfileRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RegistrantProfileRealNameVerificationRequest
     *
     * @returns RegistrantProfileRealNameVerificationResponse
     *
     * @param RegistrantProfileRealNameVerificationRequest $request
     *
     * @return RegistrantProfileRealNameVerificationResponse
     */
    public function registrantProfileRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registrantProfileRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - ResendEmailVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResendEmailVerificationResponse
     *
     * @param ResendEmailVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResendEmailVerificationResponse
     */
    public function resendEmailVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResendEmailVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResendEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResendEmailVerificationRequest
     *
     * @returns ResendEmailVerificationResponse
     *
     * @param ResendEmailVerificationRequest $request
     *
     * @return ResendEmailVerificationResponse
     */
    public function resendEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderActivateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForCreatingOrderActivateResponse
     *
     * @param SaveBatchTaskForCreatingOrderActivateRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForCreatingOrderActivateResponse
     */
    public function saveBatchTaskForCreatingOrderActivateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderActivateParam) {
            @$query['OrderActivateParam'] = $request->orderActivateParam;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForCreatingOrderActivate',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderActivateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderActivateRequest
     *
     * @returns SaveBatchTaskForCreatingOrderActivateResponse
     *
     * @param SaveBatchTaskForCreatingOrderActivateRequest $request
     *
     * @return SaveBatchTaskForCreatingOrderActivateResponse
     */
    public function saveBatchTaskForCreatingOrderActivate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderActivateWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderRedeemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForCreatingOrderRedeemResponse
     *
     * @param SaveBatchTaskForCreatingOrderRedeemRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SaveBatchTaskForCreatingOrderRedeemResponse
     */
    public function saveBatchTaskForCreatingOrderRedeemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderRedeemParam) {
            @$query['OrderRedeemParam'] = $request->orderRedeemParam;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForCreatingOrderRedeem',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderRedeemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderRedeemRequest
     *
     * @returns SaveBatchTaskForCreatingOrderRedeemResponse
     *
     * @param SaveBatchTaskForCreatingOrderRedeemRequest $request
     *
     * @return SaveBatchTaskForCreatingOrderRedeemResponse
     */
    public function saveBatchTaskForCreatingOrderRedeem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderRedeemWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderRenewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForCreatingOrderRenewResponse
     *
     * @param SaveBatchTaskForCreatingOrderRenewRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveBatchTaskForCreatingOrderRenewResponse
     */
    public function saveBatchTaskForCreatingOrderRenewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderRenewParam) {
            @$query['OrderRenewParam'] = $request->orderRenewParam;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForCreatingOrderRenew',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderRenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderRenewRequest
     *
     * @returns SaveBatchTaskForCreatingOrderRenewResponse
     *
     * @param SaveBatchTaskForCreatingOrderRenewRequest $request
     *
     * @return SaveBatchTaskForCreatingOrderRenewResponse
     */
    public function saveBatchTaskForCreatingOrderRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderRenewWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForCreatingOrderTransferResponse
     *
     * @param SaveBatchTaskForCreatingOrderTransferRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForCreatingOrderTransferResponse
     */
    public function saveBatchTaskForCreatingOrderTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderTransferParam) {
            @$query['OrderTransferParam'] = $request->orderTransferParam;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForCreatingOrderTransfer',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForCreatingOrderTransferRequest
     *
     * @returns SaveBatchTaskForCreatingOrderTransferResponse
     *
     * @param SaveBatchTaskForCreatingOrderTransferRequest $request
     *
     * @return SaveBatchTaskForCreatingOrderTransferResponse
     */
    public function saveBatchTaskForCreatingOrderTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderTransferWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForDomainNameProxyServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForDomainNameProxyServiceResponse
     *
     * @param SaveBatchTaskForDomainNameProxyServiceRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveBatchTaskForDomainNameProxyServiceResponse
     */
    public function saveBatchTaskForDomainNameProxyServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForDomainNameProxyService',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForDomainNameProxyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForDomainNameProxyServiceRequest
     *
     * @returns SaveBatchTaskForDomainNameProxyServiceResponse
     *
     * @param SaveBatchTaskForDomainNameProxyServiceRequest $request
     *
     * @return SaveBatchTaskForDomainNameProxyServiceResponse
     */
    public function saveBatchTaskForDomainNameProxyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForDomainNameProxyServiceWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForModifyingDomainDnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForModifyingDomainDnsResponse
     *
     * @param SaveBatchTaskForModifyingDomainDnsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveBatchTaskForModifyingDomainDnsResponse
     */
    public function saveBatchTaskForModifyingDomainDnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunDns) {
            @$query['AliyunDns'] = $request->aliyunDns;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainNameServer) {
            @$query['DomainNameServer'] = $request->domainNameServer;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForModifyingDomainDns',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForModifyingDomainDnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForModifyingDomainDnsRequest
     *
     * @returns SaveBatchTaskForModifyingDomainDnsResponse
     *
     * @param SaveBatchTaskForModifyingDomainDnsRequest $request
     *
     * @return SaveBatchTaskForModifyingDomainDnsResponse
     */
    public function saveBatchTaskForModifyingDomainDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForModifyingDomainDnsWithOptions($request, $runtime);
    }

    /**
     * 国际站删除抢注批量接口.
     *
     * @param request - SaveBatchTaskForReserveDropListDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForReserveDropListDomainResponse
     *
     * @param SaveBatchTaskForReserveDropListDomainRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForReserveDropListDomainResponse
     */
    public function saveBatchTaskForReserveDropListDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForReserveDropListDomain',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForReserveDropListDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际站删除抢注批量接口.
     *
     * @param request - SaveBatchTaskForReserveDropListDomainRequest
     *
     * @returns SaveBatchTaskForReserveDropListDomainResponse
     *
     * @param SaveBatchTaskForReserveDropListDomainRequest $request
     *
     * @return SaveBatchTaskForReserveDropListDomainResponse
     */
    public function saveBatchTaskForReserveDropListDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForReserveDropListDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForTransferProhibitionLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForTransferProhibitionLockResponse
     *
     * @param SaveBatchTaskForTransferProhibitionLockRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return SaveBatchTaskForTransferProhibitionLockResponse
     */
    public function saveBatchTaskForTransferProhibitionLockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForTransferProhibitionLock',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForTransferProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForTransferProhibitionLockRequest
     *
     * @returns SaveBatchTaskForTransferProhibitionLockResponse
     *
     * @param SaveBatchTaskForTransferProhibitionLockRequest $request
     *
     * @return SaveBatchTaskForTransferProhibitionLockResponse
     */
    public function saveBatchTaskForTransferProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForTransferProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForUpdateProhibitionLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForUpdateProhibitionLockResponse
     *
     * @param SaveBatchTaskForUpdateProhibitionLockRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForUpdateProhibitionLockResponse
     */
    public function saveBatchTaskForUpdateProhibitionLockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForUpdateProhibitionLock',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForUpdateProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForUpdateProhibitionLockRequest
     *
     * @returns SaveBatchTaskForUpdateProhibitionLockResponse
     *
     * @param SaveBatchTaskForUpdateProhibitionLockRequest $request
     *
     * @return SaveBatchTaskForUpdateProhibitionLockResponse
     */
    public function saveBatchTaskForUpdateProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdateProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForUpdatingContactInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForUpdatingContactInfoResponse
     *
     * @param SaveBatchTaskForUpdatingContactInfoRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SaveBatchTaskForUpdatingContactInfoResponse
     */
    public function saveBatchTaskForUpdatingContactInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addTransferLock) {
            @$query['AddTransferLock'] = $request->addTransferLock;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForUpdatingContactInfo',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForUpdatingContactInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForUpdatingContactInfoRequest
     *
     * @returns SaveBatchTaskForUpdatingContactInfoResponse
     *
     * @param SaveBatchTaskForUpdatingContactInfoRequest $request
     *
     * @return SaveBatchTaskForUpdatingContactInfoResponse
     */
    public function saveBatchTaskForUpdatingContactInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdatingContactInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBatchTaskForUpdatingContactInfoByNewContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForUpdatingContactInfoByNewContactResponse
     *
     * @param SaveBatchTaskForUpdatingContactInfoByNewContactRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return SaveBatchTaskForUpdatingContactInfoByNewContactResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByNewContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->postalCode) {
            @$query['PostalCode'] = $request->postalCode;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->registrantName) {
            @$query['RegistrantName'] = $request->registrantName;
        }

        if (null !== $request->registrantOrganization) {
            @$query['RegistrantOrganization'] = $request->registrantOrganization;
        }

        if (null !== $request->telArea) {
            @$query['TelArea'] = $request->telArea;
        }

        if (null !== $request->telExt) {
            @$query['TelExt'] = $request->telExt;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        if (null !== $request->transferOutProhibited) {
            @$query['TransferOutProhibited'] = $request->transferOutProhibited;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForUpdatingContactInfoByNewContact',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForUpdatingContactInfoByNewContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveBatchTaskForUpdatingContactInfoByNewContactRequest
     *
     * @returns SaveBatchTaskForUpdatingContactInfoByNewContactResponse
     *
     * @param SaveBatchTaskForUpdatingContactInfoByNewContactRequest $request
     *
     * @return SaveBatchTaskForUpdatingContactInfoByNewContactResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByNewContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdatingContactInfoByNewContactWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveRegistrantProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveRegistrantProfileResponse
     *
     * @param SaveRegistrantProfileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveRegistrantProfileResponse
     */
    public function saveRegistrantProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->defaultRegistrantProfile) {
            @$query['DefaultRegistrantProfile'] = $request->defaultRegistrantProfile;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->postalCode) {
            @$query['PostalCode'] = $request->postalCode;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->registrantName) {
            @$query['RegistrantName'] = $request->registrantName;
        }

        if (null !== $request->registrantOrganization) {
            @$query['RegistrantOrganization'] = $request->registrantOrganization;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->registrantProfileType) {
            @$query['RegistrantProfileType'] = $request->registrantProfileType;
        }

        if (null !== $request->registrantType) {
            @$query['RegistrantType'] = $request->registrantType;
        }

        if (null !== $request->telArea) {
            @$query['TelArea'] = $request->telArea;
        }

        if (null !== $request->telExt) {
            @$query['TelExt'] = $request->telExt;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveRegistrantProfile',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveRegistrantProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveRegistrantProfileRequest
     *
     * @returns SaveRegistrantProfileResponse
     *
     * @param SaveRegistrantProfileRequest $request
     *
     * @return SaveRegistrantProfileResponse
     */
    public function saveRegistrantProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRegistrantProfileWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForAddingDSRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForAddingDSRecordResponse
     *
     * @param SaveSingleTaskForAddingDSRecordRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SaveSingleTaskForAddingDSRecordResponse
     */
    public function saveSingleTaskForAddingDSRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->digestType) {
            @$query['DigestType'] = $request->digestType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->keyTag) {
            @$query['KeyTag'] = $request->keyTag;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForAddingDSRecord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForAddingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForAddingDSRecordRequest
     *
     * @returns SaveSingleTaskForAddingDSRecordResponse
     *
     * @param SaveSingleTaskForAddingDSRecordRequest $request
     *
     * @return SaveSingleTaskForAddingDSRecordResponse
     */
    public function saveSingleTaskForAddingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForAddingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForApprovingTransferOutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForApprovingTransferOutResponse
     *
     * @param SaveSingleTaskForApprovingTransferOutRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForApprovingTransferOutResponse
     */
    public function saveSingleTaskForApprovingTransferOutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForApprovingTransferOut',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForApprovingTransferOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForApprovingTransferOutRequest
     *
     * @returns SaveSingleTaskForApprovingTransferOutResponse
     *
     * @param SaveSingleTaskForApprovingTransferOutRequest $request
     *
     * @return SaveSingleTaskForApprovingTransferOutResponse
     */
    public function saveSingleTaskForApprovingTransferOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForApprovingTransferOutWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForAssociatingEnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForAssociatingEnsResponse
     *
     * @param SaveSingleTaskForAssociatingEnsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SaveSingleTaskForAssociatingEnsResponse
     */
    public function saveSingleTaskForAssociatingEnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForAssociatingEns',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForAssociatingEnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForAssociatingEnsRequest
     *
     * @returns SaveSingleTaskForAssociatingEnsResponse
     *
     * @param SaveSingleTaskForAssociatingEnsRequest $request
     *
     * @return SaveSingleTaskForAssociatingEnsResponse
     */
    public function saveSingleTaskForAssociatingEns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForAssociatingEnsWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCancelingTransferInRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCancelingTransferInResponse
     *
     * @param SaveSingleTaskForCancelingTransferInRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveSingleTaskForCancelingTransferInResponse
     */
    public function saveSingleTaskForCancelingTransferInWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCancelingTransferIn',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCancelingTransferInResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCancelingTransferInRequest
     *
     * @returns SaveSingleTaskForCancelingTransferInResponse
     *
     * @param SaveSingleTaskForCancelingTransferInRequest $request
     *
     * @return SaveSingleTaskForCancelingTransferInResponse
     */
    public function saveSingleTaskForCancelingTransferIn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCancelingTransferInWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCancelingTransferOutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCancelingTransferOutResponse
     *
     * @param SaveSingleTaskForCancelingTransferOutRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForCancelingTransferOutResponse
     */
    public function saveSingleTaskForCancelingTransferOutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCancelingTransferOut',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCancelingTransferOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCancelingTransferOutRequest
     *
     * @returns SaveSingleTaskForCancelingTransferOutResponse
     *
     * @param SaveSingleTaskForCancelingTransferOutRequest $request
     *
     * @return SaveSingleTaskForCancelingTransferOutResponse
     */
    public function saveSingleTaskForCancelingTransferOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCancelingTransferOutWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCreatingDnsHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCreatingDnsHostResponse
     *
     * @param SaveSingleTaskForCreatingDnsHostRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveSingleTaskForCreatingDnsHostResponse
     */
    public function saveSingleTaskForCreatingDnsHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnsName) {
            @$query['DnsName'] = $request->dnsName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCreatingDnsHost',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCreatingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCreatingDnsHostRequest
     *
     * @returns SaveSingleTaskForCreatingDnsHostResponse
     *
     * @param SaveSingleTaskForCreatingDnsHostRequest $request
     *
     * @return SaveSingleTaskForCreatingDnsHostResponse
     */
    public function saveSingleTaskForCreatingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderActivateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCreatingOrderActivateResponse
     *
     * @param SaveSingleTaskForCreatingOrderActivateRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForCreatingOrderActivateResponse
     */
    public function saveSingleTaskForCreatingOrderActivateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->aliyunDns) {
            @$query['AliyunDns'] = $request->aliyunDns;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->dns1) {
            @$query['Dns1'] = $request->dns1;
        }

        if (null !== $request->dns2) {
            @$query['Dns2'] = $request->dns2;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->enableDomainProxy) {
            @$query['EnableDomainProxy'] = $request->enableDomainProxy;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->permitPremiumActivation) {
            @$query['PermitPremiumActivation'] = $request->permitPremiumActivation;
        }

        if (null !== $request->postalCode) {
            @$query['PostalCode'] = $request->postalCode;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->registrantName) {
            @$query['RegistrantName'] = $request->registrantName;
        }

        if (null !== $request->registrantOrganization) {
            @$query['RegistrantOrganization'] = $request->registrantOrganization;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->registrantType) {
            @$query['RegistrantType'] = $request->registrantType;
        }

        if (null !== $request->subscriptionDuration) {
            @$query['SubscriptionDuration'] = $request->subscriptionDuration;
        }

        if (null !== $request->telArea) {
            @$query['TelArea'] = $request->telArea;
        }

        if (null !== $request->telExt) {
            @$query['TelExt'] = $request->telExt;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        if (null !== $request->trademarkDomainActivation) {
            @$query['TrademarkDomainActivation'] = $request->trademarkDomainActivation;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCreatingOrderActivate',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderActivateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderActivateRequest
     *
     * @returns SaveSingleTaskForCreatingOrderActivateResponse
     *
     * @param SaveSingleTaskForCreatingOrderActivateRequest $request
     *
     * @return SaveSingleTaskForCreatingOrderActivateResponse
     */
    public function saveSingleTaskForCreatingOrderActivate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderActivateWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderRedeemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCreatingOrderRedeemResponse
     *
     * @param SaveSingleTaskForCreatingOrderRedeemRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveSingleTaskForCreatingOrderRedeemResponse
     */
    public function saveSingleTaskForCreatingOrderRedeemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->currentExpirationDate) {
            @$query['CurrentExpirationDate'] = $request->currentExpirationDate;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCreatingOrderRedeem',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderRedeemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderRedeemRequest
     *
     * @returns SaveSingleTaskForCreatingOrderRedeemResponse
     *
     * @param SaveSingleTaskForCreatingOrderRedeemRequest $request
     *
     * @return SaveSingleTaskForCreatingOrderRedeemResponse
     */
    public function saveSingleTaskForCreatingOrderRedeem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderRedeemWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderRenewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCreatingOrderRenewResponse
     *
     * @param SaveSingleTaskForCreatingOrderRenewRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SaveSingleTaskForCreatingOrderRenewResponse
     */
    public function saveSingleTaskForCreatingOrderRenewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->currentExpirationDate) {
            @$query['CurrentExpirationDate'] = $request->currentExpirationDate;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->subscriptionDuration) {
            @$query['SubscriptionDuration'] = $request->subscriptionDuration;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCreatingOrderRenew',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderRenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderRenewRequest
     *
     * @returns SaveSingleTaskForCreatingOrderRenewResponse
     *
     * @param SaveSingleTaskForCreatingOrderRenewRequest $request
     *
     * @return SaveSingleTaskForCreatingOrderRenewResponse
     */
    public function saveSingleTaskForCreatingOrderRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderRenewWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForCreatingOrderTransferResponse
     *
     * @param SaveSingleTaskForCreatingOrderTransferRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForCreatingOrderTransferResponse
     */
    public function saveSingleTaskForCreatingOrderTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationCode) {
            @$query['AuthorizationCode'] = $request->authorizationCode;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->permitPremiumTransfer) {
            @$query['PermitPremiumTransfer'] = $request->permitPremiumTransfer;
        }

        if (null !== $request->promotionNo) {
            @$query['PromotionNo'] = $request->promotionNo;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->useCoupon) {
            @$query['UseCoupon'] = $request->useCoupon;
        }

        if (null !== $request->usePromotion) {
            @$query['UsePromotion'] = $request->usePromotion;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCreatingOrderTransfer',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForCreatingOrderTransferRequest
     *
     * @returns SaveSingleTaskForCreatingOrderTransferResponse
     *
     * @param SaveSingleTaskForCreatingOrderTransferRequest $request
     *
     * @return SaveSingleTaskForCreatingOrderTransferResponse
     */
    public function saveSingleTaskForCreatingOrderTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderTransferWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForDeletingDSRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForDeletingDSRecordResponse
     *
     * @param SaveSingleTaskForDeletingDSRecordRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForDeletingDSRecordResponse
     */
    public function saveSingleTaskForDeletingDSRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->keyTag) {
            @$query['KeyTag'] = $request->keyTag;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForDeletingDSRecord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForDeletingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForDeletingDSRecordRequest
     *
     * @returns SaveSingleTaskForDeletingDSRecordResponse
     *
     * @param SaveSingleTaskForDeletingDSRecordRequest $request
     *
     * @return SaveSingleTaskForDeletingDSRecordResponse
     */
    public function saveSingleTaskForDeletingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDeletingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForDeletingDnsHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForDeletingDnsHostResponse
     *
     * @param SaveSingleTaskForDeletingDnsHostRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveSingleTaskForDeletingDnsHostResponse
     */
    public function saveSingleTaskForDeletingDnsHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnsName) {
            @$query['DnsName'] = $request->dnsName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForDeletingDnsHost',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForDeletingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForDeletingDnsHostRequest
     *
     * @returns SaveSingleTaskForDeletingDnsHostResponse
     *
     * @param SaveSingleTaskForDeletingDnsHostRequest $request
     *
     * @return SaveSingleTaskForDeletingDnsHostResponse
     */
    public function saveSingleTaskForDeletingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDeletingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForDisassociatingEnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForDisassociatingEnsResponse
     *
     * @param SaveSingleTaskForDisassociatingEnsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveSingleTaskForDisassociatingEnsResponse
     */
    public function saveSingleTaskForDisassociatingEnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForDisassociatingEns',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForDisassociatingEnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForDisassociatingEnsRequest
     *
     * @returns SaveSingleTaskForDisassociatingEnsResponse
     *
     * @param SaveSingleTaskForDisassociatingEnsRequest $request
     *
     * @return SaveSingleTaskForDisassociatingEnsResponse
     */
    public function saveSingleTaskForDisassociatingEns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDisassociatingEnsWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForDomainNameProxyServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForDomainNameProxyServiceResponse
     *
     * @param SaveSingleTaskForDomainNameProxyServiceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return SaveSingleTaskForDomainNameProxyServiceResponse
     */
    public function saveSingleTaskForDomainNameProxyServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForDomainNameProxyService',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForDomainNameProxyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForDomainNameProxyServiceRequest
     *
     * @returns SaveSingleTaskForDomainNameProxyServiceResponse
     *
     * @param SaveSingleTaskForDomainNameProxyServiceRequest $request
     *
     * @return SaveSingleTaskForDomainNameProxyServiceResponse
     */
    public function saveSingleTaskForDomainNameProxyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDomainNameProxyServiceWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForModifyingDSRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForModifyingDSRecordResponse
     *
     * @param SaveSingleTaskForModifyingDSRecordRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveSingleTaskForModifyingDSRecordResponse
     */
    public function saveSingleTaskForModifyingDSRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->digestType) {
            @$query['DigestType'] = $request->digestType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->keyTag) {
            @$query['KeyTag'] = $request->keyTag;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForModifyingDSRecord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForModifyingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForModifyingDSRecordRequest
     *
     * @returns SaveSingleTaskForModifyingDSRecordResponse
     *
     * @param SaveSingleTaskForModifyingDSRecordRequest $request
     *
     * @return SaveSingleTaskForModifyingDSRecordResponse
     */
    public function saveSingleTaskForModifyingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForModifyingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForModifyingDnsHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForModifyingDnsHostResponse
     *
     * @param SaveSingleTaskForModifyingDnsHostRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForModifyingDnsHostResponse
     */
    public function saveSingleTaskForModifyingDnsHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnsName) {
            @$query['DnsName'] = $request->dnsName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForModifyingDnsHost',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForModifyingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForModifyingDnsHostRequest
     *
     * @returns SaveSingleTaskForModifyingDnsHostResponse
     *
     * @param SaveSingleTaskForModifyingDnsHostRequest $request
     *
     * @return SaveSingleTaskForModifyingDnsHostResponse
     */
    public function saveSingleTaskForModifyingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForModifyingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForQueryingTransferAuthorizationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     *
     * @param SaveSingleTaskForQueryingTransferAuthorizationCodeRequest $request
     * @param RuntimeOptions                                            $runtime
     *
     * @return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     */
    public function saveSingleTaskForQueryingTransferAuthorizationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForQueryingTransferAuthorizationCode',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForQueryingTransferAuthorizationCodeRequest
     *
     * @returns SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     *
     * @param SaveSingleTaskForQueryingTransferAuthorizationCodeRequest $request
     *
     * @return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     */
    public function saveSingleTaskForQueryingTransferAuthorizationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForQueryingTransferAuthorizationCodeWithOptions($request, $runtime);
    }

    /**
     * 单笔抢注批量接口.
     *
     * @param request - SaveSingleTaskForReserveDropListDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForReserveDropListDomainResponse
     *
     * @param SaveSingleTaskForReserveDropListDomainRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForReserveDropListDomainResponse
     */
    public function saveSingleTaskForReserveDropListDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactTemplateId) {
            @$query['ContactTemplateId'] = $request->contactTemplateId;
        }

        if (null !== $request->dns1) {
            @$query['Dns1'] = $request->dns1;
        }

        if (null !== $request->dns2) {
            @$query['Dns2'] = $request->dns2;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForReserveDropListDomain',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForReserveDropListDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单笔抢注批量接口.
     *
     * @param request - SaveSingleTaskForReserveDropListDomainRequest
     *
     * @returns SaveSingleTaskForReserveDropListDomainResponse
     *
     * @param SaveSingleTaskForReserveDropListDomainRequest $request
     *
     * @return SaveSingleTaskForReserveDropListDomainResponse
     */
    public function saveSingleTaskForReserveDropListDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForReserveDropListDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForSaveArtExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForSaveArtExtensionResponse
     *
     * @param SaveSingleTaskForSaveArtExtensionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForSaveArtExtensionResponse
     */
    public function saveSingleTaskForSaveArtExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dateOrPeriod) {
            @$query['DateOrPeriod'] = $request->dateOrPeriod;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->features) {
            @$query['Features'] = $request->features;
        }

        if (null !== $request->inscriptionsAndMarkings) {
            @$query['InscriptionsAndMarkings'] = $request->inscriptionsAndMarkings;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maker) {
            @$query['Maker'] = $request->maker;
        }

        if (null !== $request->materialsAndTechniques) {
            @$query['MaterialsAndTechniques'] = $request->materialsAndTechniques;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->reference) {
            @$query['Reference'] = $request->reference;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForSaveArtExtension',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForSaveArtExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForSaveArtExtensionRequest
     *
     * @returns SaveSingleTaskForSaveArtExtensionResponse
     *
     * @param SaveSingleTaskForSaveArtExtensionRequest $request
     *
     * @return SaveSingleTaskForSaveArtExtensionResponse
     */
    public function saveSingleTaskForSaveArtExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForSaveArtExtensionWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForSynchronizingDSRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForSynchronizingDSRecordResponse
     *
     * @param SaveSingleTaskForSynchronizingDSRecordRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForSynchronizingDSRecordResponse
     */
    public function saveSingleTaskForSynchronizingDSRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForSynchronizingDSRecord',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForSynchronizingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForSynchronizingDSRecordRequest
     *
     * @returns SaveSingleTaskForSynchronizingDSRecordResponse
     *
     * @param SaveSingleTaskForSynchronizingDSRecordRequest $request
     *
     * @return SaveSingleTaskForSynchronizingDSRecordResponse
     */
    public function saveSingleTaskForSynchronizingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForSynchronizingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForSynchronizingDnsHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForSynchronizingDnsHostResponse
     *
     * @param SaveSingleTaskForSynchronizingDnsHostRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForSynchronizingDnsHostResponse
     */
    public function saveSingleTaskForSynchronizingDnsHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForSynchronizingDnsHost',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForSynchronizingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForSynchronizingDnsHostRequest
     *
     * @returns SaveSingleTaskForSynchronizingDnsHostResponse
     *
     * @param SaveSingleTaskForSynchronizingDnsHostRequest $request
     *
     * @return SaveSingleTaskForSynchronizingDnsHostResponse
     */
    public function saveSingleTaskForSynchronizingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForSynchronizingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForTransferProhibitionLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForTransferProhibitionLockResponse
     *
     * @param SaveSingleTaskForTransferProhibitionLockRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return SaveSingleTaskForTransferProhibitionLockResponse
     */
    public function saveSingleTaskForTransferProhibitionLockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForTransferProhibitionLock',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForTransferProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForTransferProhibitionLockRequest
     *
     * @returns SaveSingleTaskForTransferProhibitionLockResponse
     *
     * @param SaveSingleTaskForTransferProhibitionLockRequest $request
     *
     * @return SaveSingleTaskForTransferProhibitionLockResponse
     */
    public function saveSingleTaskForTransferProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForTransferProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForUpdateProhibitionLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForUpdateProhibitionLockResponse
     *
     * @param SaveSingleTaskForUpdateProhibitionLockRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForUpdateProhibitionLockResponse
     */
    public function saveSingleTaskForUpdateProhibitionLockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForUpdateProhibitionLock',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForUpdateProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForUpdateProhibitionLockRequest
     *
     * @returns SaveSingleTaskForUpdateProhibitionLockResponse
     *
     * @param SaveSingleTaskForUpdateProhibitionLockRequest $request
     *
     * @return SaveSingleTaskForUpdateProhibitionLockResponse
     */
    public function saveSingleTaskForUpdateProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForUpdateProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveSingleTaskForUpdatingContactInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForUpdatingContactInfoResponse
     *
     * @param SaveSingleTaskForUpdatingContactInfoRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveSingleTaskForUpdatingContactInfoResponse
     */
    public function saveSingleTaskForUpdatingContactInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addTransferLock) {
            @$query['AddTransferLock'] = $request->addTransferLock;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForUpdatingContactInfo',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForUpdatingContactInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveSingleTaskForUpdatingContactInfoRequest
     *
     * @returns SaveSingleTaskForUpdatingContactInfoResponse
     *
     * @param SaveSingleTaskForUpdatingContactInfoRequest $request
     *
     * @return SaveSingleTaskForUpdatingContactInfoResponse
     */
    public function saveSingleTaskForUpdatingContactInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForUpdatingContactInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveTaskForSubmittingDomainDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForSubmittingDomainDeleteResponse
     *
     * @param SaveTaskForSubmittingDomainDeleteRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveTaskForSubmittingDomainDeleteResponse
     */
    public function saveTaskForSubmittingDomainDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForSubmittingDomainDelete',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForSubmittingDomainDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveTaskForSubmittingDomainDeleteRequest
     *
     * @returns SaveTaskForSubmittingDomainDeleteResponse
     *
     * @param SaveTaskForSubmittingDomainDeleteRequest $request
     *
     * @return SaveTaskForSubmittingDomainDeleteResponse
     */
    public function saveTaskForSubmittingDomainDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainDeleteWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
     *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest $request
     * @param RuntimeOptions                                                             $runtime
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->identityCredentialNo) {
            @$query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }

        if (null !== $request->identityCredentialType) {
            @$query['IdentityCredentialType'] = $request->identityCredentialType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->identityCredential) {
            @$body['IdentityCredential'] = $request->identityCredential;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest
     *
     * @returns SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
     *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest $request
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByIdentityCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
     *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest $request
     * @param RuntimeOptions                                                              $runtime
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest
     *
     * @returns SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
     *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest $request
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
     *
     * @param SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByIdentityCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->identityCredentialNo) {
            @$query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }

        if (null !== $request->identityCredentialType) {
            @$query['IdentityCredentialType'] = $request->identityCredentialType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->postalCode) {
            @$query['PostalCode'] = $request->postalCode;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->registrantName) {
            @$query['RegistrantName'] = $request->registrantName;
        }

        if (null !== $request->registrantOrganization) {
            @$query['RegistrantOrganization'] = $request->registrantOrganization;
        }

        if (null !== $request->registrantType) {
            @$query['RegistrantType'] = $request->registrantType;
        }

        if (null !== $request->telArea) {
            @$query['TelArea'] = $request->telArea;
        }

        if (null !== $request->telExt) {
            @$query['TelExt'] = $request->telExt;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        if (null !== $request->transferOutProhibited) {
            @$query['TransferOutProhibited'] = $request->transferOutProhibited;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->identityCredential) {
            @$body['IdentityCredential'] = $request->identityCredential;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForUpdatingRegistrantInfoByIdentityCredential',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest
     *
     * @returns SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
     *
     * @param SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest $request
     *
     * @return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByIdentityCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForUpdatingRegistrantInfoByIdentityCredentialWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
     *
     * @param SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest $request
     * @param RuntimeOptions                                                $runtime
     *
     * @return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByRegistrantProfileIDWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->registrantProfileId) {
            @$query['RegistrantProfileId'] = $request->registrantProfileId;
        }

        if (null !== $request->transferOutProhibited) {
            @$query['TransferOutProhibited'] = $request->transferOutProhibited;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest
     *
     * @returns SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
     *
     * @param SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest $request
     *
     * @return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByRegistrantProfileID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForUpdatingRegistrantInfoByRegistrantProfileIDWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitEmailVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitEmailVerificationResponse
     *
     * @param SubmitEmailVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitEmailVerificationResponse
     */
    public function submitEmailVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sendIfExist) {
            @$query['SendIfExist'] = $request->sendIfExist;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitEmailVerification',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitEmailVerificationRequest
     *
     * @returns SubmitEmailVerificationResponse
     *
     * @param SubmitEmailVerificationRequest $request
     *
     * @return SubmitEmailVerificationResponse
     */
    public function submitEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - TransferInCheckMailTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferInCheckMailTokenResponse
     *
     * @param TransferInCheckMailTokenRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TransferInCheckMailTokenResponse
     */
    public function transferInCheckMailTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferInCheckMailToken',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferInCheckMailTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TransferInCheckMailTokenRequest
     *
     * @returns TransferInCheckMailTokenResponse
     *
     * @param TransferInCheckMailTokenRequest $request
     *
     * @return TransferInCheckMailTokenResponse
     */
    public function transferInCheckMailToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInCheckMailTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - TransferInReenterTransferAuthorizationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferInReenterTransferAuthorizationCodeResponse
     *
     * @param TransferInReenterTransferAuthorizationCodeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return TransferInReenterTransferAuthorizationCodeResponse
     */
    public function transferInReenterTransferAuthorizationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->transferAuthorizationCode) {
            @$query['TransferAuthorizationCode'] = $request->transferAuthorizationCode;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferInReenterTransferAuthorizationCode',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferInReenterTransferAuthorizationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TransferInReenterTransferAuthorizationCodeRequest
     *
     * @returns TransferInReenterTransferAuthorizationCodeResponse
     *
     * @param TransferInReenterTransferAuthorizationCodeRequest $request
     *
     * @return TransferInReenterTransferAuthorizationCodeResponse
     */
    public function transferInReenterTransferAuthorizationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInReenterTransferAuthorizationCodeWithOptions($request, $runtime);
    }

    /**
     * @param request - TransferInRefetchWhoisEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferInRefetchWhoisEmailResponse
     *
     * @param TransferInRefetchWhoisEmailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TransferInRefetchWhoisEmailResponse
     */
    public function transferInRefetchWhoisEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferInRefetchWhoisEmail',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferInRefetchWhoisEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TransferInRefetchWhoisEmailRequest
     *
     * @returns TransferInRefetchWhoisEmailResponse
     *
     * @param TransferInRefetchWhoisEmailRequest $request
     *
     * @return TransferInRefetchWhoisEmailResponse
     */
    public function transferInRefetchWhoisEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInRefetchWhoisEmailWithOptions($request, $runtime);
    }

    /**
     * @param request - TransferInResendMailTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferInResendMailTokenResponse
     *
     * @param TransferInResendMailTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TransferInResendMailTokenResponse
     */
    public function transferInResendMailTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferInResendMailToken',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferInResendMailTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TransferInResendMailTokenRequest
     *
     * @returns TransferInResendMailTokenResponse
     *
     * @param TransferInResendMailTokenRequest $request
     *
     * @return TransferInResendMailTokenResponse
     */
    public function transferInResendMailToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInResendMailTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - VerifyContactFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyContactFieldResponse
     *
     * @param VerifyContactFieldRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return VerifyContactFieldResponse
     */
    public function verifyContactFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->postalCode) {
            @$query['PostalCode'] = $request->postalCode;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->registrantName) {
            @$query['RegistrantName'] = $request->registrantName;
        }

        if (null !== $request->registrantOrganization) {
            @$query['RegistrantOrganization'] = $request->registrantOrganization;
        }

        if (null !== $request->registrantType) {
            @$query['RegistrantType'] = $request->registrantType;
        }

        if (null !== $request->telArea) {
            @$query['TelArea'] = $request->telArea;
        }

        if (null !== $request->telExt) {
            @$query['TelExt'] = $request->telExt;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyContactField',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyContactFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - VerifyContactFieldRequest
     *
     * @returns VerifyContactFieldResponse
     *
     * @param VerifyContactFieldRequest $request
     *
     * @return VerifyContactFieldResponse
     */
    public function verifyContactField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyContactFieldWithOptions($request, $runtime);
    }

    /**
     * @param request - VerifyEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyEmailResponse
     *
     * @param VerifyEmailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return VerifyEmailResponse
     */
    public function verifyEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyEmail',
            'version' => '2017-12-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - VerifyEmailRequest
     *
     * @returns VerifyEmailResponse
     *
     * @param VerifyEmailRequest $request
     *
     * @return VerifyEmailResponse
     */
    public function verifyEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyEmailWithOptions($request, $runtime);
    }
}
