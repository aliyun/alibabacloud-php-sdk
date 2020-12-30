<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Domain\V20180129\Models\AcknowledgeTaskResultRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\AcknowledgeTaskResultResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelDomainVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelDomainVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelOperationAuditRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelOperationAuditResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelQualificationVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelQualificationVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainSunriseClaimRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainSunriseClaimResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckMaxYearOfServerLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckMaxYearOfServerLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckProcessingServerLockApplyRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckProcessingServerLockApplyResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckTransferInFeasibilityRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckTransferInFeasibilityResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteDomainGroupRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteDomainGroupResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteEmailVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteEmailVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteRegistrantProfileRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteRegistrantProfileResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\EmailVerifiedRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\EmailVerifiedResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\GetOperationOssUploadPolicyRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\GetOperationOssUploadPolicyResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\GetQualificationUploadPolicyRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\GetQualificationUploadPolicyResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ListEmailVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ListEmailVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ListServerLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ListServerLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\PollTaskResultRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\PollTaskResultResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryAdvancedDomainListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryAdvancedDomainListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryArtExtensionRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryArtExtensionResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryChangeLogListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryChangeLogListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryContactInfoRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryContactInfoResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDnsHostRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDnsHostResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByInstanceIdRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByInstanceIdResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainGroupListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainGroupListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealNameVerificationInfoRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealNameVerificationInfoResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSuffixRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSuffixResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDSRecordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDSRecordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryEmailVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryEmailVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryEnsAssociationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryEnsAssociationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailingReasonListForQualificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailingReasonListForQualificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForDomainRealNameVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForDomainRealNameVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForRegistrantProfileRealNameVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForRegistrantProfileRealNameVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryLocalEnsAssociationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryLocalEnsAssociationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryOperationAuditInfoDetailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryOperationAuditInfoDetailResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryOperationAuditInfoListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryOperationAuditInfoListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfileRealNameVerificationInfoRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfileRealNameVerificationInfoResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryServerLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryServerLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskInfoHistoryRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskInfoHistoryResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInByInstanceIdRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInByInstanceIdResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferOutInfoRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferOutInfoResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\RegistrantProfileRealNameVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\RegistrantProfileRealNameVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ResendEmailVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ResendEmailVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ResetQualificationVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ResetQualificationVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchDomainRemarkRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchDomainRemarkResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRedeemRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRedeemResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRenewRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRenewResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderTransferRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderTransferResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForDomainNameProxyServiceRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForDomainNameProxyServiceResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForModifyingDomainDnsRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForModifyingDomainDnsResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferProhibitionLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferProhibitionLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForUpdateProhibitionLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForUpdateProhibitionLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForUpdatingContactInfoByNewContactRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForUpdatingContactInfoByNewContactResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveDomainGroupRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveDomainGroupResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveRegistrantProfileRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveRegistrantProfileResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForAddingDSRecordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForAddingDSRecordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForApprovingTransferOutRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForApprovingTransferOutResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForAssociatingEnsRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForAssociatingEnsResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCancelingTransferInRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCancelingTransferInResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCancelingTransferOutRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCancelingTransferOutResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingDnsHostRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingDnsHostResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderActivateRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderActivateResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderRedeemRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderRedeemResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderRenewRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderRenewResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderTransferRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForCreatingOrderTransferResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDeletingDnsHostRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDeletingDnsHostResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDeletingDSRecordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDeletingDSRecordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDisassociatingEnsRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDisassociatingEnsResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDomainNameProxyServiceRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForDomainNameProxyServiceResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForModifyingDnsHostRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForModifyingDnsHostResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForModifyingDSRecordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForModifyingDSRecordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForQueryingTransferAuthorizationCodeRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForQueryingTransferAuthorizationCodeResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForSaveArtExtensionRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForSaveArtExtensionResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForSynchronizingDnsHostRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForSynchronizingDnsHostResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForSynchronizingDSRecordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForSynchronizingDSRecordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForTransferProhibitionLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForTransferProhibitionLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForUpdateProhibitionLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForUpdateProhibitionLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForUpdatingContactInfoRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForUpdatingContactInfoResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForSubmittingDomainDeleteRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForSubmittingDomainDeleteResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitEmailVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitEmailVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitOperationAuditInfoRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitOperationAuditInfoResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitOperationCredentialsRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitOperationCredentialsResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInCheckMailTokenRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInCheckMailTokenResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInReenterTransferAuthorizationCodeRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInReenterTransferAuthorizationCodeResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInRefetchWhoisEmailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInRefetchWhoisEmailResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInResendMailTokenRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\TransferInResendMailTokenResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\UpdateDomainToDomainGroupRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\UpdateDomainToDomainGroupResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\VerifyContactFieldRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\VerifyContactFieldResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\VerifyEmailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\VerifyEmailResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Domain extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('domain', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcknowledgeTaskResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AcknowledgeTaskResultResponse
     */
    public function acknowledgeTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AcknowledgeTaskResultResponse::fromMap($this->doRPCRequest('AcknowledgeTaskResult', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param BatchFuzzyMatchDomainSensitiveWordRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return BatchFuzzyMatchDomainSensitiveWordResponse
     */
    public function batchFuzzyMatchDomainSensitiveWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchFuzzyMatchDomainSensitiveWordResponse::fromMap($this->doRPCRequest('BatchFuzzyMatchDomainSensitiveWord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CancelDomainVerificationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelDomainVerificationResponse
     */
    public function cancelDomainVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelDomainVerificationResponse::fromMap($this->doRPCRequest('CancelDomainVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CancelOperationAuditRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelOperationAuditResponse
     */
    public function cancelOperationAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOperationAuditResponse::fromMap($this->doRPCRequest('CancelOperationAudit', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelOperationAuditRequest $request
     *
     * @return CancelOperationAuditResponse
     */
    public function cancelOperationAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOperationAuditWithOptions($request, $runtime);
    }

    /**
     * @param CancelQualificationVerificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CancelQualificationVerificationResponse
     */
    public function cancelQualificationVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelQualificationVerificationResponse::fromMap($this->doRPCRequest('CancelQualificationVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelQualificationVerificationRequest $request
     *
     * @return CancelQualificationVerificationResponse
     */
    public function cancelQualificationVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelQualificationVerificationWithOptions($request, $runtime);
    }

    /**
     * @param CancelTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelTaskResponse::fromMap($this->doRPCRequest('CancelTask', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CheckDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDomainResponse::fromMap($this->doRPCRequest('CheckDomain', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CheckDomainSunriseClaimRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckDomainSunriseClaimResponse
     */
    public function checkDomainSunriseClaimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDomainSunriseClaimResponse::fromMap($this->doRPCRequest('CheckDomainSunriseClaim', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CheckMaxYearOfServerLockRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckMaxYearOfServerLockResponse
     */
    public function checkMaxYearOfServerLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckMaxYearOfServerLockResponse::fromMap($this->doRPCRequest('CheckMaxYearOfServerLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckMaxYearOfServerLockRequest $request
     *
     * @return CheckMaxYearOfServerLockResponse
     */
    public function checkMaxYearOfServerLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMaxYearOfServerLockWithOptions($request, $runtime);
    }

    /**
     * @param CheckProcessingServerLockApplyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CheckProcessingServerLockApplyResponse
     */
    public function checkProcessingServerLockApplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckProcessingServerLockApplyResponse::fromMap($this->doRPCRequest('CheckProcessingServerLockApply', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckProcessingServerLockApplyRequest $request
     *
     * @return CheckProcessingServerLockApplyResponse
     */
    public function checkProcessingServerLockApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkProcessingServerLockApplyWithOptions($request, $runtime);
    }

    /**
     * @param CheckTransferInFeasibilityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CheckTransferInFeasibilityResponse
     */
    public function checkTransferInFeasibilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckTransferInFeasibilityResponse::fromMap($this->doRPCRequest('CheckTransferInFeasibility', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ConfirmTransferInEmailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfirmTransferInEmailResponse
     */
    public function confirmTransferInEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmTransferInEmailResponse::fromMap($this->doRPCRequest('ConfirmTransferInEmail', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainGroupResponse::fromMap($this->doRPCRequest('DeleteDomainGroup', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDomainGroupRequest $request
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEmailVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteEmailVerificationResponse
     */
    public function deleteEmailVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEmailVerificationResponse::fromMap($this->doRPCRequest('DeleteEmailVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteRegistrantProfileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRegistrantProfileResponse
     */
    public function deleteRegistrantProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRegistrantProfileResponse::fromMap($this->doRPCRequest('DeleteRegistrantProfile', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param EmailVerifiedRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EmailVerifiedResponse
     */
    public function emailVerifiedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EmailVerifiedResponse::fromMap($this->doRPCRequest('EmailVerified', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param FuzzyMatchDomainSensitiveWordRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return FuzzyMatchDomainSensitiveWordResponse
     */
    public function fuzzyMatchDomainSensitiveWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FuzzyMatchDomainSensitiveWordResponse::fromMap($this->doRPCRequest('FuzzyMatchDomainSensitiveWord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetOperationOssUploadPolicyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetOperationOssUploadPolicyResponse
     */
    public function getOperationOssUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOperationOssUploadPolicyResponse::fromMap($this->doRPCRequest('GetOperationOssUploadPolicy', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOperationOssUploadPolicyRequest $request
     *
     * @return GetOperationOssUploadPolicyResponse
     */
    public function getOperationOssUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperationOssUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetQualificationUploadPolicyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetQualificationUploadPolicyResponse
     */
    public function getQualificationUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualificationUploadPolicyResponse::fromMap($this->doRPCRequest('GetQualificationUploadPolicy', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualificationUploadPolicyRequest $request
     *
     * @return GetQualificationUploadPolicyResponse
     */
    public function getQualificationUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualificationUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ListEmailVerificationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEmailVerificationResponse
     */
    public function listEmailVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEmailVerificationResponse::fromMap($this->doRPCRequest('ListEmailVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListServerLockRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListServerLockResponse
     */
    public function listServerLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServerLockResponse::fromMap($this->doRPCRequest('ListServerLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServerLockRequest $request
     *
     * @return ListServerLockResponse
     */
    public function listServerLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerLockWithOptions($request, $runtime);
    }

    /**
     * @param LookupTmchNoticeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return LookupTmchNoticeResponse
     */
    public function lookupTmchNoticeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LookupTmchNoticeResponse::fromMap($this->doRPCRequest('LookupTmchNotice', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PollTaskResultRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PollTaskResultResponse
     */
    public function pollTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PollTaskResultResponse::fromMap($this->doRPCRequest('PollTaskResult', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryAdvancedDomainListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAdvancedDomainListResponse
     */
    public function queryAdvancedDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAdvancedDomainListResponse::fromMap($this->doRPCRequest('QueryAdvancedDomainList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAdvancedDomainListRequest $request
     *
     * @return QueryAdvancedDomainListResponse
     */
    public function queryAdvancedDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAdvancedDomainListWithOptions($request, $runtime);
    }

    /**
     * @param QueryArtExtensionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryArtExtensionResponse
     */
    public function queryArtExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryArtExtensionResponse::fromMap($this->doRPCRequest('QueryArtExtension', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryChangeLogListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryChangeLogListResponse
     */
    public function queryChangeLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryChangeLogListResponse::fromMap($this->doRPCRequest('QueryChangeLogList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryContactInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryContactInfoResponse
     */
    public function queryContactInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryContactInfoResponse::fromMap($this->doRPCRequest('QueryContactInfo', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryDnsHostRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDnsHostResponse
     */
    public function queryDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDnsHostResponse::fromMap($this->doRPCRequest('QueryDnsHost', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryDomainAdminDivisionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDomainAdminDivisionResponse
     */
    public function queryDomainAdminDivisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainAdminDivisionResponse::fromMap($this->doRPCRequest('QueryDomainAdminDivision', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDomainAdminDivisionRequest $request
     *
     * @return QueryDomainAdminDivisionResponse
     */
    public function queryDomainAdminDivision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainAdminDivisionWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainByDomainNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDomainByDomainNameResponse
     */
    public function queryDomainByDomainNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainByDomainNameResponse::fromMap($this->doRPCRequest('QueryDomainByDomainName', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryDomainByInstanceIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDomainByInstanceIdResponse
     */
    public function queryDomainByInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainByInstanceIdResponse::fromMap($this->doRPCRequest('QueryDomainByInstanceId', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryDomainGroupListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDomainGroupListResponse
     */
    public function queryDomainGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainGroupListResponse::fromMap($this->doRPCRequest('QueryDomainGroupList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDomainGroupListRequest $request
     *
     * @return QueryDomainGroupListResponse
     */
    public function queryDomainGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainGroupListWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainListResponse::fromMap($this->doRPCRequest('QueryDomainList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryDomainRealNameVerificationInfoRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryDomainRealNameVerificationInfoResponse
     */
    public function queryDomainRealNameVerificationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainRealNameVerificationInfoResponse::fromMap($this->doRPCRequest('QueryDomainRealNameVerificationInfo', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryDomainSuffixRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDomainSuffixResponse
     */
    public function queryDomainSuffixWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainSuffixResponse::fromMap($this->doRPCRequest('QueryDomainSuffix', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDomainSuffixRequest $request
     *
     * @return QueryDomainSuffixResponse
     */
    public function queryDomainSuffix($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainSuffixWithOptions($request, $runtime);
    }

    /**
     * @param QueryDSRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryDSRecordResponse
     */
    public function queryDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDSRecordResponse::fromMap($this->doRPCRequest('QueryDSRecord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryEmailVerificationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryEmailVerificationResponse
     */
    public function queryEmailVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEmailVerificationResponse::fromMap($this->doRPCRequest('QueryEmailVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryEmailVerificationRequest $request
     *
     * @return QueryEmailVerificationResponse
     */
    public function queryEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryEnsAssociationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEnsAssociationResponse
     */
    public function queryEnsAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEnsAssociationResponse::fromMap($this->doRPCRequest('QueryEnsAssociation', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryFailingReasonListForQualificationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return QueryFailingReasonListForQualificationResponse
     */
    public function queryFailingReasonListForQualificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFailingReasonListForQualificationResponse::fromMap($this->doRPCRequest('QueryFailingReasonListForQualification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFailingReasonListForQualificationRequest $request
     *
     * @return QueryFailingReasonListForQualificationResponse
     */
    public function queryFailingReasonListForQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailingReasonListForQualificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryFailReasonForDomainRealNameVerificationRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return QueryFailReasonForDomainRealNameVerificationResponse
     */
    public function queryFailReasonForDomainRealNameVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFailReasonForDomainRealNameVerificationResponse::fromMap($this->doRPCRequest('QueryFailReasonForDomainRealNameVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryFailReasonForRegistrantProfileRealNameVerificationRequest $request
     * @param RuntimeOptions                                                 $runtime
     *
     * @return QueryFailReasonForRegistrantProfileRealNameVerificationResponse
     */
    public function queryFailReasonForRegistrantProfileRealNameVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFailReasonForRegistrantProfileRealNameVerificationResponse::fromMap($this->doRPCRequest('QueryFailReasonForRegistrantProfileRealNameVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryLocalEnsAssociationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryLocalEnsAssociationResponse
     */
    public function queryLocalEnsAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryLocalEnsAssociationResponse::fromMap($this->doRPCRequest('QueryLocalEnsAssociation', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryOperationAuditInfoDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryOperationAuditInfoDetailResponse
     */
    public function queryOperationAuditInfoDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOperationAuditInfoDetailResponse::fromMap($this->doRPCRequest('QueryOperationAuditInfoDetail', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOperationAuditInfoDetailRequest $request
     *
     * @return QueryOperationAuditInfoDetailResponse
     */
    public function queryOperationAuditInfoDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOperationAuditInfoDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryOperationAuditInfoListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryOperationAuditInfoListResponse
     */
    public function queryOperationAuditInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOperationAuditInfoListResponse::fromMap($this->doRPCRequest('QueryOperationAuditInfoList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOperationAuditInfoListRequest $request
     *
     * @return QueryOperationAuditInfoListResponse
     */
    public function queryOperationAuditInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOperationAuditInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryQualificationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryQualificationDetailResponse
     */
    public function queryQualificationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryQualificationDetailResponse::fromMap($this->doRPCRequest('QueryQualificationDetail', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryQualificationDetailRequest $request
     *
     * @return QueryQualificationDetailResponse
     */
    public function queryQualificationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryQualificationDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryRegistrantProfileRealNameVerificationInfoRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return QueryRegistrantProfileRealNameVerificationInfoResponse
     */
    public function queryRegistrantProfileRealNameVerificationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRegistrantProfileRealNameVerificationInfoResponse::fromMap($this->doRPCRequest('QueryRegistrantProfileRealNameVerificationInfo', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRegistrantProfilesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryRegistrantProfilesResponse
     */
    public function queryRegistrantProfilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRegistrantProfilesResponse::fromMap($this->doRPCRequest('QueryRegistrantProfiles', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryServerLockRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryServerLockResponse
     */
    public function queryServerLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryServerLockResponse::fromMap($this->doRPCRequest('QueryServerLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryServerLockRequest $request
     *
     * @return QueryServerLockResponse
     */
    public function queryServerLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServerLockWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskDetailHistoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryTaskDetailHistoryResponse
     */
    public function queryTaskDetailHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskDetailHistoryResponse::fromMap($this->doRPCRequest('QueryTaskDetailHistory', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTaskDetailListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTaskDetailListResponse
     */
    public function queryTaskDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskDetailListResponse::fromMap($this->doRPCRequest('QueryTaskDetailList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTaskInfoHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTaskInfoHistoryResponse
     */
    public function queryTaskInfoHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskInfoHistoryResponse::fromMap($this->doRPCRequest('QueryTaskInfoHistory', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTaskListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskListResponse::fromMap($this->doRPCRequest('QueryTaskList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTransferInByInstanceIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryTransferInByInstanceIdResponse
     */
    public function queryTransferInByInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTransferInByInstanceIdResponse::fromMap($this->doRPCRequest('QueryTransferInByInstanceId', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTransferInListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTransferInListResponse
     */
    public function queryTransferInListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTransferInListResponse::fromMap($this->doRPCRequest('QueryTransferInList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTransferOutInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTransferOutInfoResponse
     */
    public function queryTransferOutInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTransferOutInfoResponse::fromMap($this->doRPCRequest('QueryTransferOutInfo', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RegistrantProfileRealNameVerificationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RegistrantProfileRealNameVerificationResponse
     */
    public function registrantProfileRealNameVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegistrantProfileRealNameVerificationResponse::fromMap($this->doRPCRequest('RegistrantProfileRealNameVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ResendEmailVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResendEmailVerificationResponse
     */
    public function resendEmailVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResendEmailVerificationResponse::fromMap($this->doRPCRequest('ResendEmailVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ResetQualificationVerificationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ResetQualificationVerificationResponse
     */
    public function resetQualificationVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetQualificationVerificationResponse::fromMap($this->doRPCRequest('ResetQualificationVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetQualificationVerificationRequest $request
     *
     * @return ResetQualificationVerificationResponse
     */
    public function resetQualificationVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetQualificationVerificationWithOptions($request, $runtime);
    }

    /**
     * @param SaveBatchDomainRemarkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveBatchDomainRemarkResponse
     */
    public function saveBatchDomainRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchDomainRemarkResponse::fromMap($this->doRPCRequest('SaveBatchDomainRemark', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveBatchDomainRemarkRequest $request
     *
     * @return SaveBatchDomainRemarkResponse
     */
    public function saveBatchDomainRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * @param SaveBatchTaskForCreatingOrderActivateRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForCreatingOrderActivateResponse
     */
    public function saveBatchTaskForCreatingOrderActivateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForCreatingOrderActivateResponse::fromMap($this->doRPCRequest('SaveBatchTaskForCreatingOrderActivate', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForCreatingOrderRedeemRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SaveBatchTaskForCreatingOrderRedeemResponse
     */
    public function saveBatchTaskForCreatingOrderRedeemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForCreatingOrderRedeemResponse::fromMap($this->doRPCRequest('SaveBatchTaskForCreatingOrderRedeem', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForCreatingOrderRenewRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveBatchTaskForCreatingOrderRenewResponse
     */
    public function saveBatchTaskForCreatingOrderRenewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForCreatingOrderRenewResponse::fromMap($this->doRPCRequest('SaveBatchTaskForCreatingOrderRenew', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForCreatingOrderTransferRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForCreatingOrderTransferResponse
     */
    public function saveBatchTaskForCreatingOrderTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForCreatingOrderTransferResponse::fromMap($this->doRPCRequest('SaveBatchTaskForCreatingOrderTransfer', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForDomainNameProxyServiceRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveBatchTaskForDomainNameProxyServiceResponse
     */
    public function saveBatchTaskForDomainNameProxyServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForDomainNameProxyServiceResponse::fromMap($this->doRPCRequest('SaveBatchTaskForDomainNameProxyService', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForModifyingDomainDnsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveBatchTaskForModifyingDomainDnsResponse
     */
    public function saveBatchTaskForModifyingDomainDnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForModifyingDomainDnsResponse::fromMap($this->doRPCRequest('SaveBatchTaskForModifyingDomainDns', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForTransferProhibitionLockRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return SaveBatchTaskForTransferProhibitionLockResponse
     */
    public function saveBatchTaskForTransferProhibitionLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForTransferProhibitionLockResponse::fromMap($this->doRPCRequest('SaveBatchTaskForTransferProhibitionLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForUpdateProhibitionLockRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForUpdateProhibitionLockResponse
     */
    public function saveBatchTaskForUpdateProhibitionLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForUpdateProhibitionLockResponse::fromMap($this->doRPCRequest('SaveBatchTaskForUpdateProhibitionLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForUpdatingContactInfoByNewContactRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return SaveBatchTaskForUpdatingContactInfoByNewContactResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByNewContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForUpdatingContactInfoByNewContactResponse::fromMap($this->doRPCRequest('SaveBatchTaskForUpdatingContactInfoByNewContact', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest $request
     * @param RuntimeOptions                                                  $runtime
     *
     * @return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByRegistrantProfileIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse::fromMap($this->doRPCRequest('SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest $request
     *
     * @return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByRegistrantProfileId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdatingContactInfoByRegistrantProfileIdWithOptions($request, $runtime);
    }

    /**
     * @param SaveDomainGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveDomainGroupResponse
     */
    public function saveDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveDomainGroupResponse::fromMap($this->doRPCRequest('SaveDomainGroup', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveDomainGroupRequest $request
     *
     * @return SaveDomainGroupResponse
     */
    public function saveDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param SaveRegistrantProfileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveRegistrantProfileResponse
     */
    public function saveRegistrantProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveRegistrantProfileResponse::fromMap($this->doRPCRequest('SaveRegistrantProfile', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForAddingDSRecordRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SaveSingleTaskForAddingDSRecordResponse
     */
    public function saveSingleTaskForAddingDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForAddingDSRecordResponse::fromMap($this->doRPCRequest('SaveSingleTaskForAddingDSRecord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForApprovingTransferOutRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForApprovingTransferOutResponse
     */
    public function saveSingleTaskForApprovingTransferOutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForApprovingTransferOutResponse::fromMap($this->doRPCRequest('SaveSingleTaskForApprovingTransferOut', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForAssociatingEnsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SaveSingleTaskForAssociatingEnsResponse
     */
    public function saveSingleTaskForAssociatingEnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForAssociatingEnsResponse::fromMap($this->doRPCRequest('SaveSingleTaskForAssociatingEns', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCancelingTransferInRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveSingleTaskForCancelingTransferInResponse
     */
    public function saveSingleTaskForCancelingTransferInWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCancelingTransferInResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCancelingTransferIn', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCancelingTransferOutRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForCancelingTransferOutResponse
     */
    public function saveSingleTaskForCancelingTransferOutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCancelingTransferOutResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCancelingTransferOut', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCreatingDnsHostRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveSingleTaskForCreatingDnsHostResponse
     */
    public function saveSingleTaskForCreatingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCreatingDnsHostResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCreatingDnsHost', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCreatingOrderActivateRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForCreatingOrderActivateResponse
     */
    public function saveSingleTaskForCreatingOrderActivateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCreatingOrderActivateResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCreatingOrderActivate', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCreatingOrderRedeemRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveSingleTaskForCreatingOrderRedeemResponse
     */
    public function saveSingleTaskForCreatingOrderRedeemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCreatingOrderRedeemResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCreatingOrderRedeem', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCreatingOrderRenewRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SaveSingleTaskForCreatingOrderRenewResponse
     */
    public function saveSingleTaskForCreatingOrderRenewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCreatingOrderRenewResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCreatingOrderRenew', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForCreatingOrderTransferRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForCreatingOrderTransferResponse
     */
    public function saveSingleTaskForCreatingOrderTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForCreatingOrderTransferResponse::fromMap($this->doRPCRequest('SaveSingleTaskForCreatingOrderTransfer', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForDeletingDnsHostRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveSingleTaskForDeletingDnsHostResponse
     */
    public function saveSingleTaskForDeletingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForDeletingDnsHostResponse::fromMap($this->doRPCRequest('SaveSingleTaskForDeletingDnsHost', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForDeletingDSRecordRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForDeletingDSRecordResponse
     */
    public function saveSingleTaskForDeletingDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForDeletingDSRecordResponse::fromMap($this->doRPCRequest('SaveSingleTaskForDeletingDSRecord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForDisassociatingEnsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveSingleTaskForDisassociatingEnsResponse
     */
    public function saveSingleTaskForDisassociatingEnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForDisassociatingEnsResponse::fromMap($this->doRPCRequest('SaveSingleTaskForDisassociatingEns', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForDomainNameProxyServiceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return SaveSingleTaskForDomainNameProxyServiceResponse
     */
    public function saveSingleTaskForDomainNameProxyServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForDomainNameProxyServiceResponse::fromMap($this->doRPCRequest('SaveSingleTaskForDomainNameProxyService', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForModifyingDnsHostRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForModifyingDnsHostResponse
     */
    public function saveSingleTaskForModifyingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForModifyingDnsHostResponse::fromMap($this->doRPCRequest('SaveSingleTaskForModifyingDnsHost', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForModifyingDSRecordRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveSingleTaskForModifyingDSRecordResponse
     */
    public function saveSingleTaskForModifyingDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForModifyingDSRecordResponse::fromMap($this->doRPCRequest('SaveSingleTaskForModifyingDSRecord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForQueryingTransferAuthorizationCodeRequest $request
     * @param RuntimeOptions                                            $runtime
     *
     * @return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     */
    public function saveSingleTaskForQueryingTransferAuthorizationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse::fromMap($this->doRPCRequest('SaveSingleTaskForQueryingTransferAuthorizationCode', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForSaveArtExtensionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForSaveArtExtensionResponse
     */
    public function saveSingleTaskForSaveArtExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForSaveArtExtensionResponse::fromMap($this->doRPCRequest('SaveSingleTaskForSaveArtExtension', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForSynchronizingDnsHostRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForSynchronizingDnsHostResponse
     */
    public function saveSingleTaskForSynchronizingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForSynchronizingDnsHostResponse::fromMap($this->doRPCRequest('SaveSingleTaskForSynchronizingDnsHost', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForSynchronizingDSRecordRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForSynchronizingDSRecordResponse
     */
    public function saveSingleTaskForSynchronizingDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForSynchronizingDSRecordResponse::fromMap($this->doRPCRequest('SaveSingleTaskForSynchronizingDSRecord', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForTransferProhibitionLockRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return SaveSingleTaskForTransferProhibitionLockResponse
     */
    public function saveSingleTaskForTransferProhibitionLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForTransferProhibitionLockResponse::fromMap($this->doRPCRequest('SaveSingleTaskForTransferProhibitionLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForUpdateProhibitionLockRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForUpdateProhibitionLockResponse
     */
    public function saveSingleTaskForUpdateProhibitionLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForUpdateProhibitionLockResponse::fromMap($this->doRPCRequest('SaveSingleTaskForUpdateProhibitionLock', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveSingleTaskForUpdatingContactInfoRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveSingleTaskForUpdatingContactInfoResponse
     */
    public function saveSingleTaskForUpdatingContactInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveSingleTaskForUpdatingContactInfoResponse::fromMap($this->doRPCRequest('SaveSingleTaskForUpdatingContactInfo', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveTaskForSubmittingDomainDeleteRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveTaskForSubmittingDomainDeleteResponse
     */
    public function saveTaskForSubmittingDomainDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskForSubmittingDomainDeleteResponse::fromMap($this->doRPCRequest('SaveTaskForSubmittingDomainDelete', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest $request
     * @param RuntimeOptions                                                             $runtime
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse::fromMap($this->doRPCRequest('SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest $request
     * @param RuntimeOptions                                                              $runtime
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse::fromMap($this->doRPCRequest('SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByIdentityCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse::fromMap($this->doRPCRequest('SaveTaskForUpdatingRegistrantInfoByIdentityCredential', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest $request
     * @param RuntimeOptions                                                $runtime
     *
     * @return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByRegistrantProfileIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse::fromMap($this->doRPCRequest('SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ScrollDomainListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ScrollDomainListResponse
     */
    public function scrollDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ScrollDomainListResponse::fromMap($this->doRPCRequest('ScrollDomainList', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ScrollDomainListRequest $request
     *
     * @return ScrollDomainListResponse
     */
    public function scrollDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scrollDomainListWithOptions($request, $runtime);
    }

    /**
     * @param SubmitEmailVerificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitEmailVerificationResponse
     */
    public function submitEmailVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitEmailVerificationResponse::fromMap($this->doRPCRequest('SubmitEmailVerification', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SubmitOperationAuditInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitOperationAuditInfoResponse
     */
    public function submitOperationAuditInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitOperationAuditInfoResponse::fromMap($this->doRPCRequest('SubmitOperationAuditInfo', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitOperationAuditInfoRequest $request
     *
     * @return SubmitOperationAuditInfoResponse
     */
    public function submitOperationAuditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOperationAuditInfoWithOptions($request, $runtime);
    }

    /**
     * @param SubmitOperationCredentialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitOperationCredentialsResponse
     */
    public function submitOperationCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitOperationCredentialsResponse::fromMap($this->doRPCRequest('SubmitOperationCredentials', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitOperationCredentialsRequest $request
     *
     * @return SubmitOperationCredentialsResponse
     */
    public function submitOperationCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOperationCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param TransferInCheckMailTokenRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TransferInCheckMailTokenResponse
     */
    public function transferInCheckMailTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferInCheckMailTokenResponse::fromMap($this->doRPCRequest('TransferInCheckMailToken', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param TransferInReenterTransferAuthorizationCodeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return TransferInReenterTransferAuthorizationCodeResponse
     */
    public function transferInReenterTransferAuthorizationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferInReenterTransferAuthorizationCodeResponse::fromMap($this->doRPCRequest('TransferInReenterTransferAuthorizationCode', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param TransferInRefetchWhoisEmailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TransferInRefetchWhoisEmailResponse
     */
    public function transferInRefetchWhoisEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferInRefetchWhoisEmailResponse::fromMap($this->doRPCRequest('TransferInRefetchWhoisEmail', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param TransferInResendMailTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TransferInResendMailTokenResponse
     */
    public function transferInResendMailTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferInResendMailTokenResponse::fromMap($this->doRPCRequest('TransferInResendMailToken', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateDomainToDomainGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateDomainToDomainGroupResponse
     */
    public function updateDomainToDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDomainToDomainGroupResponse::fromMap($this->doRPCRequest('UpdateDomainToDomainGroup', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDomainToDomainGroupRequest $request
     *
     * @return UpdateDomainToDomainGroupResponse
     */
    public function updateDomainToDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainToDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param VerifyContactFieldRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return VerifyContactFieldResponse
     */
    public function verifyContactFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyContactFieldResponse::fromMap($this->doRPCRequest('VerifyContactField', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param VerifyEmailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return VerifyEmailResponse
     */
    public function verifyEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyEmailResponse::fromMap($this->doRPCRequest('VerifyEmail', '2018-01-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
