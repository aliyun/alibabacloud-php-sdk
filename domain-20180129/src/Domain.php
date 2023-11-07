<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ChangeResourceGroupResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteContactTemplatesRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteContactTemplatesResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteDomainGroupRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteDomainGroupResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteEmailVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteEmailVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteRegistrantProfileRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteRegistrantProfileResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\DomainSpecialBizCancelRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DomainSpecialBizCancelResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForApplyQuickTransferOutOpenlyRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForApplyQuickTransferOutOpenlyResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForGenerateDomainCertificateRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForGenerateDomainCertificateResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForGenerateDomainCertificateShrinkRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForModifyingDomainDnsRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForModifyingDomainDnsResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForReserveDropListDomainRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForReserveDropListDomainResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveRegistrantProfileRealNameVerificationRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveRegistrantProfileRealNameVerificationResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveRegistrantProfileRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveRegistrantProfileResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForAddingDSRecordRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForAddingDSRecordResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForApplyQuickTransferOutOpenlyRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForApplyQuickTransferOutOpenlyResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForGenerateDomainCertificateRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForGenerateDomainCertificateResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SetDefaultRegistrantProfileRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SetDefaultRegistrantProfileResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SetupDomainAutoRenewRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SetupDomainAutoRenewResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitDomainSpecialBizCredentialsRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitDomainSpecialBizCredentialsResponse;
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
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskDetailNo)) {
            $query['TaskDetailNo'] = $request->taskDetailNo;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcknowledgeTaskResult',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcknowledgeTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchFuzzyMatchDomainSensitiveWord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchFuzzyMatchDomainSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDomainVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDomainVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->auditRecordId)) {
            $query['AuditRecordId'] = $request->auditRecordId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOperationAudit',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOperationAuditResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->qualificationType)) {
            $query['QualificationType'] = $request->qualificationType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelQualificationVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelQualificationVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskNo)) {
            $query['TaskNo'] = $request->taskNo;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelTask',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->feeCommand)) {
            $query['FeeCommand'] = $request->feeCommand;
        }
        if (!Utils::isUnset($request->feeCurrency)) {
            $query['FeeCurrency'] = $request->feeCurrency;
        }
        if (!Utils::isUnset($request->feePeriod)) {
            $query['FeePeriod'] = $request->feePeriod;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomain',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomainSunriseClaim',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDomainSunriseClaimResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->checkAction)) {
            $query['CheckAction'] = $request->checkAction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckMaxYearOfServerLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMaxYearOfServerLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->feePeriod)) {
            $query['FeePeriod'] = $request->feePeriod;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckProcessingServerLockApply',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckProcessingServerLockApplyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->transferAuthorizationCode)) {
            $query['TransferAuthorizationCode'] = $request->transferAuthorizationCode;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckTransferInFeasibility',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckTransferInFeasibilityResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmTransferInEmail',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmTransferInEmailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteContactTemplatesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContactTemplatesResponse
     */
    public function deleteContactTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->registrantProfileIds)) {
            $query['RegistrantProfileIds'] = $request->registrantProfileIds;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContactTemplates',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactTemplatesRequest $request
     *
     * @return DeleteContactTemplatesResponse
     */
    public function deleteContactTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactTemplatesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->domainGroupId)) {
            $query['DomainGroupId'] = $request->domainGroupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainGroup',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEmailVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRegistrantProfile',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRegistrantProfileResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DomainSpecialBizCancelRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DomainSpecialBizCancelResponse
     */
    public function domainSpecialBizCancelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DomainSpecialBizCancel',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DomainSpecialBizCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DomainSpecialBizCancelRequest $request
     *
     * @return DomainSpecialBizCancelResponse
     */
    public function domainSpecialBizCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->domainSpecialBizCancelWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EmailVerified',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EmailVerifiedResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FuzzyMatchDomainSensitiveWord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FuzzyMatchDomainSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->auditType)) {
            $query['AuditType'] = $request->auditType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOperationOssUploadPolicy',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOperationOssUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualificationUploadPolicy',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualificationUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->beginCreateTime)) {
            $query['BeginCreateTime'] = $request->beginCreateTime;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->endCreateTime)) {
            $query['EndCreateTime'] = $request->endCreateTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->verificationStatus)) {
            $query['VerificationStatus'] = $request->verificationStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEmailVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->beginStartDate)) {
            $query['BeginStartDate'] = $request->beginStartDate;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endExpireDate)) {
            $query['EndExpireDate'] = $request->endExpireDate;
        }
        if (!Utils::isUnset($request->endStartDate)) {
            $query['EndStartDate'] = $request->endStartDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lockProductId)) {
            $query['LockProductId'] = $request->lockProductId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderByType)) {
            $query['OrderByType'] = $request->orderByType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serverLockStatus)) {
            $query['ServerLockStatus'] = $request->serverLockStatus;
        }
        if (!Utils::isUnset($request->startExpireDate)) {
            $query['StartExpireDate'] = $request->startExpireDate;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServerLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->claimKey)) {
            $query['ClaimKey'] = $request->claimKey;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LookupTmchNotice',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LookupTmchNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskNo)) {
            $query['TaskNo'] = $request->taskNo;
        }
        if (!Utils::isUnset($request->taskResultStatus)) {
            $query['TaskResultStatus'] = $request->taskResultStatus;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PollTaskResult',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PollTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainGroupId)) {
            $query['DomainGroupId'] = $request->domainGroupId;
        }
        if (!Utils::isUnset($request->domainNameSort)) {
            $query['DomainNameSort'] = $request->domainNameSort;
        }
        if (!Utils::isUnset($request->domainStatus)) {
            $query['DomainStatus'] = $request->domainStatus;
        }
        if (!Utils::isUnset($request->endExpirationDate)) {
            $query['EndExpirationDate'] = $request->endExpirationDate;
        }
        if (!Utils::isUnset($request->endLength)) {
            $query['EndLength'] = $request->endLength;
        }
        if (!Utils::isUnset($request->endRegistrationDate)) {
            $query['EndRegistrationDate'] = $request->endRegistrationDate;
        }
        if (!Utils::isUnset($request->excluded)) {
            $query['Excluded'] = $request->excluded;
        }
        if (!Utils::isUnset($request->excludedPrefix)) {
            $query['ExcludedPrefix'] = $request->excludedPrefix;
        }
        if (!Utils::isUnset($request->excludedSuffix)) {
            $query['ExcludedSuffix'] = $request->excludedSuffix;
        }
        if (!Utils::isUnset($request->expirationDateSort)) {
            $query['ExpirationDateSort'] = $request->expirationDateSort;
        }
        if (!Utils::isUnset($request->form)) {
            $query['Form'] = $request->form;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->keyWordPrefix)) {
            $query['KeyWordPrefix'] = $request->keyWordPrefix;
        }
        if (!Utils::isUnset($request->keyWordSuffix)) {
            $query['KeyWordSuffix'] = $request->keyWordSuffix;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productDomainType)) {
            $query['ProductDomainType'] = $request->productDomainType;
        }
        if (!Utils::isUnset($request->productDomainTypeSort)) {
            $query['ProductDomainTypeSort'] = $request->productDomainTypeSort;
        }
        if (!Utils::isUnset($request->registrationDateSort)) {
            $query['RegistrationDateSort'] = $request->registrationDateSort;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startExpirationDate)) {
            $query['StartExpirationDate'] = $request->startExpirationDate;
        }
        if (!Utils::isUnset($request->startLength)) {
            $query['StartLength'] = $request->startLength;
        }
        if (!Utils::isUnset($request->startRegistrationDate)) {
            $query['StartRegistrationDate'] = $request->startRegistrationDate;
        }
        if (!Utils::isUnset($request->suffixs)) {
            $query['Suffixs'] = $request->suffixs;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tradeType)) {
            $query['TradeType'] = $request->tradeType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAdvancedDomainList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAdvancedDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryArtExtension',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryArtExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryChangeLogList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryChangeLogListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->contactType)) {
            $query['ContactType'] = $request->contactType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryContactInfo',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryContactInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDSRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryDSRecordResponse
     */
    public function queryDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDSRecord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDnsHostRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDnsHostResponse
     */
    public function queryDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDnsHost',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainAdminDivision',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainAdminDivisionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainByDomainName',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainByDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainByInstanceId',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainGroupName)) {
            $query['DomainGroupName'] = $request->domainGroupName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->showDeletingGroup)) {
            $query['ShowDeletingGroup'] = $request->showDeletingGroup;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainGroupList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainGroupId)) {
            $query['DomainGroupId'] = $request->domainGroupId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endExpirationDate)) {
            $query['EndExpirationDate'] = $request->endExpirationDate;
        }
        if (!Utils::isUnset($request->endRegistrationDate)) {
            $query['EndRegistrationDate'] = $request->endRegistrationDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderByType)) {
            $query['OrderByType'] = $request->orderByType;
        }
        if (!Utils::isUnset($request->orderKeyType)) {
            $query['OrderKeyType'] = $request->orderKeyType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productDomainType)) {
            $query['ProductDomainType'] = $request->productDomainType;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startExpirationDate)) {
            $query['StartExpirationDate'] = $request->startExpirationDate;
        }
        if (!Utils::isUnset($request->startRegistrationDate)) {
            $query['StartRegistrationDate'] = $request->startRegistrationDate;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->fetchImage)) {
            $query['FetchImage'] = $request->fetchImage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainRealNameVerificationInfo',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainRealNameVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDomainSpecialBizDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDomainSpecialBizDetailResponse
     */
    public function queryDomainSpecialBizDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainSpecialBizDetail',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainSpecialBizDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDomainSpecialBizDetailRequest $request
     *
     * @return QueryDomainSpecialBizDetailResponse
     */
    public function queryDomainSpecialBizDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainSpecialBizDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainSpecialBizInfoByDomainRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryDomainSpecialBizInfoByDomainResponse
     */
    public function queryDomainSpecialBizInfoByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainSpecialBizInfoByDomain',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainSpecialBizInfoByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDomainSpecialBizInfoByDomainRequest $request
     *
     * @return QueryDomainSpecialBizInfoByDomainResponse
     */
    public function queryDomainSpecialBizInfoByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainSpecialBizInfoByDomainWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainSuffix',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainSuffixResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryEmailVerificationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryEmailVerificationResponse
     */
    public function queryEmailVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEmailVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEnsAssociation',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEnsAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryFailReasonForDomainRealNameVerificationRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return QueryFailReasonForDomainRealNameVerificationResponse
     */
    public function queryFailReasonForDomainRealNameVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->realNameVerificationAction)) {
            $query['RealNameVerificationAction'] = $request->realNameVerificationAction;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFailReasonForDomainRealNameVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFailReasonForDomainRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileID)) {
            $query['RegistrantProfileID'] = $request->registrantProfileID;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFailReasonForRegistrantProfileRealNameVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFailReasonForRegistrantProfileRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryFailingReasonListForQualificationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return QueryFailingReasonListForQualificationResponse
     */
    public function queryFailingReasonListForQualificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->qualificationType)) {
            $query['QualificationType'] = $request->qualificationType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFailingReasonListForQualification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFailingReasonListForQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryLocalEnsAssociationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryLocalEnsAssociationResponse
     */
    public function queryLocalEnsAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryLocalEnsAssociation',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLocalEnsAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->auditRecordId)) {
            $query['AuditRecordId'] = $request->auditRecordId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOperationAuditInfoDetail',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOperationAuditInfoDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->auditType)) {
            $query['AuditType'] = $request->auditType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOperationAuditInfoList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOperationAuditInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->qualificationType)) {
            $query['QualificationType'] = $request->qualificationType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryQualificationDetail',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryQualificationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fetchImage)) {
            $query['FetchImage'] = $request->fetchImage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRegistrantProfileRealNameVerificationInfo',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRegistrantProfileRealNameVerificationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->defaultRegistrantProfile)) {
            $query['DefaultRegistrantProfile'] = $request->defaultRegistrantProfile;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->realNameStatus)) {
            $query['RealNameStatus'] = $request->realNameStatus;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->registrantProfileType)) {
            $query['RegistrantProfileType'] = $request->registrantProfileType;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRegistrantProfiles',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRegistrantProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryServerLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryServerLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainNameCursor)) {
            $query['DomainNameCursor'] = $request->domainNameCursor;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskDetailNoCursor)) {
            $query['TaskDetailNoCursor'] = $request->taskDetailNoCursor;
        }
        if (!Utils::isUnset($request->taskNo)) {
            $query['TaskNo'] = $request->taskNo;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskDetailHistory',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskDetailHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskNo)) {
            $query['TaskNo'] = $request->taskNo;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskDetailList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->beginCreateTime)) {
            $query['BeginCreateTime'] = $request->beginCreateTime;
        }
        if (!Utils::isUnset($request->createTimeCursor)) {
            $query['CreateTimeCursor'] = $request->createTimeCursor;
        }
        if (!Utils::isUnset($request->endCreateTime)) {
            $query['EndCreateTime'] = $request->endCreateTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskNoCursor)) {
            $query['TaskNoCursor'] = $request->taskNoCursor;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskInfoHistory',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskInfoHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->beginCreateTime)) {
            $query['BeginCreateTime'] = $request->beginCreateTime;
        }
        if (!Utils::isUnset($request->endCreateTime)) {
            $query['EndCreateTime'] = $request->endCreateTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTransferInByInstanceId',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransferInByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->simpleTransferInStatus)) {
            $query['SimpleTransferInStatus'] = $request->simpleTransferInStatus;
        }
        if (!Utils::isUnset($request->submissionEndDate)) {
            $query['SubmissionEndDate'] = $request->submissionEndDate;
        }
        if (!Utils::isUnset($request->submissionStartDate)) {
            $query['SubmissionStartDate'] = $request->submissionStartDate;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTransferInList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransferInListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTransferOutInfo',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransferOutInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->identityCredentialNo)) {
            $query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }
        if (!Utils::isUnset($request->identityCredentialType)) {
            $query['IdentityCredentialType'] = $request->identityCredentialType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileID)) {
            $query['RegistrantProfileID'] = $request->registrantProfileID;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->identityCredential)) {
            $body['IdentityCredential'] = $request->identityCredential;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegistrantProfileRealNameVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegistrantProfileRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResendEmailVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResendEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetQualificationVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetQualificationVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchDomainRemark',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchDomainRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveBatchTaskForApplyQuickTransferOutOpenlyRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveBatchTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForApplyQuickTransferOutOpenly',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveBatchTaskForApplyQuickTransferOutOpenlyRequest $request
     *
     * @return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveBatchTaskForApplyQuickTransferOutOpenly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderActivateParam)) {
            $query['OrderActivateParam'] = $request->orderActivateParam;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForCreatingOrderActivate',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderActivateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderRedeemParam)) {
            $query['OrderRedeemParam'] = $request->orderRedeemParam;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForCreatingOrderRedeem',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderRedeemResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderRenewParam)) {
            $query['OrderRenewParam'] = $request->orderRenewParam;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForCreatingOrderRenew',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderRenewResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderTransferParam)) {
            $query['OrderTransferParam'] = $request->orderTransferParam;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForCreatingOrderTransfer',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForCreatingOrderTransferResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForDomainNameProxyService',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForDomainNameProxyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveBatchTaskForGenerateDomainCertificateRequest $tmpReq
     * @param RuntimeOptions                                   $runtime
     *
     * @return SaveBatchTaskForGenerateDomainCertificateResponse
     */
    public function saveBatchTaskForGenerateDomainCertificateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveBatchTaskForGenerateDomainCertificateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domainNames)) {
            $request->domainNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domainNames, 'DomainNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->domainNamesShrink)) {
            $query['DomainNames'] = $request->domainNamesShrink;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForGenerateDomainCertificate',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForGenerateDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveBatchTaskForGenerateDomainCertificateRequest $request
     *
     * @return SaveBatchTaskForGenerateDomainCertificateResponse
     */
    public function saveBatchTaskForGenerateDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForGenerateDomainCertificateWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->aliyunDns)) {
            $query['AliyunDns'] = $request->aliyunDns;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainNameServer)) {
            $query['DomainNameServer'] = $request->domainNameServer;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForModifyingDomainDns',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForModifyingDomainDnsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveBatchTaskForReserveDropListDomainRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveBatchTaskForReserveDropListDomainResponse
     */
    public function saveBatchTaskForReserveDropListDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactTemplateId)) {
            $query['ContactTemplateId'] = $request->contactTemplateId;
        }
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForReserveDropListDomain',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForReserveDropListDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveBatchTaskForTransferProhibitionLockRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return SaveBatchTaskForTransferProhibitionLockResponse
     */
    public function saveBatchTaskForTransferProhibitionLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForTransferProhibitionLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForTransferProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForUpdateProhibitionLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForUpdateProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->contactType)) {
            $query['ContactType'] = $request->contactType;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->postalCode)) {
            $query['PostalCode'] = $request->postalCode;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->registrantName)) {
            $query['RegistrantName'] = $request->registrantName;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->telArea)) {
            $query['TelArea'] = $request->telArea;
        }
        if (!Utils::isUnset($request->telExt)) {
            $query['TelExt'] = $request->telExt;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->transferOutProhibited)) {
            $query['TransferOutProhibited'] = $request->transferOutProhibited;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhAddress)) {
            $query['ZhAddress'] = $request->zhAddress;
        }
        if (!Utils::isUnset($request->zhCity)) {
            $query['ZhCity'] = $request->zhCity;
        }
        if (!Utils::isUnset($request->zhProvince)) {
            $query['ZhProvince'] = $request->zhProvince;
        }
        if (!Utils::isUnset($request->zhRegistrantName)) {
            $query['ZhRegistrantName'] = $request->zhRegistrantName;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForUpdatingContactInfoByNewContact',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForUpdatingContactInfoByNewContactResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->contactType)) {
            $query['ContactType'] = $request->contactType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->transferOutProhibited)) {
            $query['TransferOutProhibited'] = $request->transferOutProhibited;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainGroupId)) {
            $query['DomainGroupId'] = $request->domainGroupId;
        }
        if (!Utils::isUnset($request->domainGroupName)) {
            $query['DomainGroupName'] = $request->domainGroupName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveDomainGroup',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->defaultRegistrantProfile)) {
            $query['DefaultRegistrantProfile'] = $request->defaultRegistrantProfile;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->postalCode)) {
            $query['PostalCode'] = $request->postalCode;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->registrantName)) {
            $query['RegistrantName'] = $request->registrantName;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->registrantProfileType)) {
            $query['RegistrantProfileType'] = $request->registrantProfileType;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->telArea)) {
            $query['TelArea'] = $request->telArea;
        }
        if (!Utils::isUnset($request->telExt)) {
            $query['TelExt'] = $request->telExt;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhAddress)) {
            $query['ZhAddress'] = $request->zhAddress;
        }
        if (!Utils::isUnset($request->zhCity)) {
            $query['ZhCity'] = $request->zhCity;
        }
        if (!Utils::isUnset($request->zhProvince)) {
            $query['ZhProvince'] = $request->zhProvince;
        }
        if (!Utils::isUnset($request->zhRegistrantName)) {
            $query['ZhRegistrantName'] = $request->zhRegistrantName;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveRegistrantProfile',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveRegistrantProfileResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveRegistrantProfileRealNameVerificationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return SaveRegistrantProfileRealNameVerificationResponse
     */
    public function saveRegistrantProfileRealNameVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->identityCredential)) {
            $query['IdentityCredential'] = $request->identityCredential;
        }
        if (!Utils::isUnset($request->identityCredentialNo)) {
            $query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }
        if (!Utils::isUnset($request->identityCredentialType)) {
            $query['IdentityCredentialType'] = $request->identityCredentialType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->postalCode)) {
            $query['PostalCode'] = $request->postalCode;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->registrantName)) {
            $query['RegistrantName'] = $request->registrantName;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->registrantProfileType)) {
            $query['RegistrantProfileType'] = $request->registrantProfileType;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->telArea)) {
            $query['TelArea'] = $request->telArea;
        }
        if (!Utils::isUnset($request->telExt)) {
            $query['TelExt'] = $request->telExt;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhAddress)) {
            $query['ZhAddress'] = $request->zhAddress;
        }
        if (!Utils::isUnset($request->zhCity)) {
            $query['ZhCity'] = $request->zhCity;
        }
        if (!Utils::isUnset($request->zhProvince)) {
            $query['ZhProvince'] = $request->zhProvince;
        }
        if (!Utils::isUnset($request->zhRegistrantName)) {
            $query['ZhRegistrantName'] = $request->zhRegistrantName;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveRegistrantProfileRealNameVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveRegistrantProfileRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveRegistrantProfileRealNameVerificationRequest $request
     *
     * @return SaveRegistrantProfileRealNameVerificationResponse
     */
    public function saveRegistrantProfileRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRegistrantProfileRealNameVerificationWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->digest)) {
            $query['Digest'] = $request->digest;
        }
        if (!Utils::isUnset($request->digestType)) {
            $query['DigestType'] = $request->digestType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->keyTag)) {
            $query['KeyTag'] = $request->keyTag;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForAddingDSRecord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForAddingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForApplyQuickTransferOutOpenlyRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveSingleTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForApplyQuickTransferOutOpenly',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveSingleTaskForApplyQuickTransferOutOpenlyRequest $request
     *
     * @return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveSingleTaskForApplyQuickTransferOutOpenly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForApprovingTransferOut',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForApprovingTransferOutResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForAssociatingEns',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForAssociatingEnsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCancelingTransferIn',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCancelingTransferInResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCancelingTransferOut',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCancelingTransferOutResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dnsName)) {
            $query['DnsName'] = $request->dnsName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCreatingDnsHost',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCreatingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->aliyunDns)) {
            $query['AliyunDns'] = $request->aliyunDns;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->dns1)) {
            $query['Dns1'] = $request->dns1;
        }
        if (!Utils::isUnset($request->dns2)) {
            $query['Dns2'] = $request->dns2;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->enableDomainProxy)) {
            $query['EnableDomainProxy'] = $request->enableDomainProxy;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->permitPremiumActivation)) {
            $query['PermitPremiumActivation'] = $request->permitPremiumActivation;
        }
        if (!Utils::isUnset($request->postalCode)) {
            $query['PostalCode'] = $request->postalCode;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->registrantName)) {
            $query['RegistrantName'] = $request->registrantName;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionDuration)) {
            $query['SubscriptionDuration'] = $request->subscriptionDuration;
        }
        if (!Utils::isUnset($request->telArea)) {
            $query['TelArea'] = $request->telArea;
        }
        if (!Utils::isUnset($request->telExt)) {
            $query['TelExt'] = $request->telExt;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->trademarkDomainActivation)) {
            $query['TrademarkDomainActivation'] = $request->trademarkDomainActivation;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhAddress)) {
            $query['ZhAddress'] = $request->zhAddress;
        }
        if (!Utils::isUnset($request->zhCity)) {
            $query['ZhCity'] = $request->zhCity;
        }
        if (!Utils::isUnset($request->zhProvince)) {
            $query['ZhProvince'] = $request->zhProvince;
        }
        if (!Utils::isUnset($request->zhRegistrantName)) {
            $query['ZhRegistrantName'] = $request->zhRegistrantName;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCreatingOrderActivate',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderActivateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->currentExpirationDate)) {
            $query['CurrentExpirationDate'] = $request->currentExpirationDate;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCreatingOrderRedeem',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderRedeemResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->currentExpirationDate)) {
            $query['CurrentExpirationDate'] = $request->currentExpirationDate;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->subscriptionDuration)) {
            $query['SubscriptionDuration'] = $request->subscriptionDuration;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCreatingOrderRenew',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderRenewResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->authorizationCode)) {
            $query['AuthorizationCode'] = $request->authorizationCode;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->permitPremiumTransfer)) {
            $query['PermitPremiumTransfer'] = $request->permitPremiumTransfer;
        }
        if (!Utils::isUnset($request->promotionNo)) {
            $query['PromotionNo'] = $request->promotionNo;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $query['UseCoupon'] = $request->useCoupon;
        }
        if (!Utils::isUnset($request->usePromotion)) {
            $query['UsePromotion'] = $request->usePromotion;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCreatingOrderTransfer',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForCreatingOrderTransferResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForDeletingDSRecordRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForDeletingDSRecordResponse
     */
    public function saveSingleTaskForDeletingDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->keyTag)) {
            $query['KeyTag'] = $request->keyTag;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForDeletingDSRecord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForDeletingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForDeletingDnsHostRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveSingleTaskForDeletingDnsHostResponse
     */
    public function saveSingleTaskForDeletingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dnsName)) {
            $query['DnsName'] = $request->dnsName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForDeletingDnsHost',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForDeletingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForDisassociatingEnsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SaveSingleTaskForDisassociatingEnsResponse
     */
    public function saveSingleTaskForDisassociatingEnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForDisassociatingEns',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForDisassociatingEnsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForDomainNameProxyService',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForDomainNameProxyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForGenerateDomainCertificateRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return SaveSingleTaskForGenerateDomainCertificateResponse
     */
    public function saveSingleTaskForGenerateDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForGenerateDomainCertificate',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForGenerateDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveSingleTaskForGenerateDomainCertificateRequest $request
     *
     * @return SaveSingleTaskForGenerateDomainCertificateResponse
     */
    public function saveSingleTaskForGenerateDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForGenerateDomainCertificateWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->digest)) {
            $query['Digest'] = $request->digest;
        }
        if (!Utils::isUnset($request->digestType)) {
            $query['DigestType'] = $request->digestType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->keyTag)) {
            $query['KeyTag'] = $request->keyTag;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForModifyingDSRecord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForModifyingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForModifyingDnsHostRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveSingleTaskForModifyingDnsHostResponse
     */
    public function saveSingleTaskForModifyingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dnsName)) {
            $query['DnsName'] = $request->dnsName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForModifyingDnsHost',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForModifyingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForQueryingTransferAuthorizationCodeRequest $request
     * @param RuntimeOptions                                            $runtime
     *
     * @return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     */
    public function saveSingleTaskForQueryingTransferAuthorizationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForQueryingTransferAuthorizationCode',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dateOrPeriod)) {
            $query['DateOrPeriod'] = $request->dateOrPeriod;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->features)) {
            $query['Features'] = $request->features;
        }
        if (!Utils::isUnset($request->inscriptionsAndMarkings)) {
            $query['InscriptionsAndMarkings'] = $request->inscriptionsAndMarkings;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maker)) {
            $query['Maker'] = $request->maker;
        }
        if (!Utils::isUnset($request->materialsAndTechniques)) {
            $query['MaterialsAndTechniques'] = $request->materialsAndTechniques;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->reference)) {
            $query['Reference'] = $request->reference;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForSaveArtExtension',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForSaveArtExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForSynchronizingDSRecordRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SaveSingleTaskForSynchronizingDSRecordResponse
     */
    public function saveSingleTaskForSynchronizingDSRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForSynchronizingDSRecord',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForSynchronizingDSRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForSynchronizingDnsHostRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SaveSingleTaskForSynchronizingDnsHostResponse
     */
    public function saveSingleTaskForSynchronizingDnsHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForSynchronizingDnsHost',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForSynchronizingDnsHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveSingleTaskForTransferProhibitionLockRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return SaveSingleTaskForTransferProhibitionLockResponse
     */
    public function saveSingleTaskForTransferProhibitionLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForTransferProhibitionLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForTransferProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForUpdateProhibitionLock',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForUpdateProhibitionLockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->addTransferLock)) {
            $query['AddTransferLock'] = $request->addTransferLock;
        }
        if (!Utils::isUnset($request->contactType)) {
            $query['ContactType'] = $request->contactType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForUpdatingContactInfo',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForUpdatingContactInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTaskForSubmittingDomainDelete',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskForSubmittingDomainDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->identityCredentialNo)) {
            $query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }
        if (!Utils::isUnset($request->identityCredentialType)) {
            $query['IdentityCredentialType'] = $request->identityCredentialType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->identityCredential)) {
            $body['IdentityCredential'] = $request->identityCredential;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->identityCredentialNo)) {
            $query['IdentityCredentialNo'] = $request->identityCredentialNo;
        }
        if (!Utils::isUnset($request->identityCredentialType)) {
            $query['IdentityCredentialType'] = $request->identityCredentialType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->postalCode)) {
            $query['PostalCode'] = $request->postalCode;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->registrantName)) {
            $query['RegistrantName'] = $request->registrantName;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->telArea)) {
            $query['TelArea'] = $request->telArea;
        }
        if (!Utils::isUnset($request->telExt)) {
            $query['TelExt'] = $request->telExt;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->transferOutProhibited)) {
            $query['TransferOutProhibited'] = $request->transferOutProhibited;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhAddress)) {
            $query['ZhAddress'] = $request->zhAddress;
        }
        if (!Utils::isUnset($request->zhCity)) {
            $query['ZhCity'] = $request->zhCity;
        }
        if (!Utils::isUnset($request->zhProvince)) {
            $query['ZhProvince'] = $request->zhProvince;
        }
        if (!Utils::isUnset($request->zhRegistrantName)) {
            $query['ZhRegistrantName'] = $request->zhRegistrantName;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $body = [];
        if (!Utils::isUnset($request->identityCredential)) {
            $body['IdentityCredential'] = $request->identityCredential;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveTaskForUpdatingRegistrantInfoByIdentityCredential',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->transferOutProhibited)) {
            $query['TransferOutProhibited'] = $request->transferOutProhibited;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainGroupId)) {
            $query['DomainGroupId'] = $request->domainGroupId;
        }
        if (!Utils::isUnset($request->domainStatus)) {
            $query['DomainStatus'] = $request->domainStatus;
        }
        if (!Utils::isUnset($request->endExpirationDate)) {
            $query['EndExpirationDate'] = $request->endExpirationDate;
        }
        if (!Utils::isUnset($request->endLength)) {
            $query['EndLength'] = $request->endLength;
        }
        if (!Utils::isUnset($request->endRegistrationDate)) {
            $query['EndRegistrationDate'] = $request->endRegistrationDate;
        }
        if (!Utils::isUnset($request->excluded)) {
            $query['Excluded'] = $request->excluded;
        }
        if (!Utils::isUnset($request->excludedPrefix)) {
            $query['ExcludedPrefix'] = $request->excludedPrefix;
        }
        if (!Utils::isUnset($request->excludedSuffix)) {
            $query['ExcludedSuffix'] = $request->excludedSuffix;
        }
        if (!Utils::isUnset($request->form)) {
            $query['Form'] = $request->form;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->keyWordPrefix)) {
            $query['KeyWordPrefix'] = $request->keyWordPrefix;
        }
        if (!Utils::isUnset($request->keyWordSuffix)) {
            $query['KeyWordSuffix'] = $request->keyWordSuffix;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productDomainType)) {
            $query['ProductDomainType'] = $request->productDomainType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scrollId)) {
            $query['ScrollId'] = $request->scrollId;
        }
        if (!Utils::isUnset($request->startExpirationDate)) {
            $query['StartExpirationDate'] = $request->startExpirationDate;
        }
        if (!Utils::isUnset($request->startLength)) {
            $query['StartLength'] = $request->startLength;
        }
        if (!Utils::isUnset($request->startRegistrationDate)) {
            $query['StartRegistrationDate'] = $request->startRegistrationDate;
        }
        if (!Utils::isUnset($request->suffixs)) {
            $query['Suffixs'] = $request->suffixs;
        }
        if (!Utils::isUnset($request->tradeType)) {
            $query['TradeType'] = $request->tradeType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScrollDomainList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScrollDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SetDefaultRegistrantProfileRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDefaultRegistrantProfileResponse
     */
    public function setDefaultRegistrantProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->registrantProfileId)) {
            $query['RegistrantProfileId'] = $request->registrantProfileId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultRegistrantProfile',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultRegistrantProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDefaultRegistrantProfileRequest $request
     *
     * @return SetDefaultRegistrantProfileResponse
     */
    public function setDefaultRegistrantProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultRegistrantProfileWithOptions($request, $runtime);
    }

    /**
     * @param SetupDomainAutoRenewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetupDomainAutoRenewResponse
     */
    public function setupDomainAutoRenewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetupDomainAutoRenew',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetupDomainAutoRenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupDomainAutoRenewRequest $request
     *
     * @return SetupDomainAutoRenewResponse
     */
    public function setupDomainAutoRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupDomainAutoRenewWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDomainSpecialBizCredentialsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SubmitDomainSpecialBizCredentialsResponse
     */
    public function submitDomainSpecialBizCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->credentials)) {
            $body['Credentials'] = $request->credentials;
        }
        if (!Utils::isUnset($request->extend)) {
            $body['Extend'] = $request->extend;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitDomainSpecialBizCredentials',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDomainSpecialBizCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitDomainSpecialBizCredentialsRequest $request
     *
     * @return SubmitDomainSpecialBizCredentialsResponse
     */
    public function submitDomainSpecialBizCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDomainSpecialBizCredentialsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sendIfExist)) {
            $query['SendIfExist'] = $request->sendIfExist;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitEmailVerification',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->auditInfo)) {
            $query['AuditInfo'] = $request->auditInfo;
        }
        if (!Utils::isUnset($request->auditType)) {
            $query['AuditType'] = $request->auditType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitOperationAuditInfo',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitOperationAuditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->auditRecordId)) {
            $query['AuditRecordId'] = $request->auditRecordId;
        }
        if (!Utils::isUnset($request->auditType)) {
            $query['AuditType'] = $request->auditType;
        }
        if (!Utils::isUnset($request->credentials)) {
            $query['Credentials'] = $request->credentials;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regType)) {
            $query['RegType'] = $request->regType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitOperationCredentials',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitOperationCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferInCheckMailToken',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferInCheckMailTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->transferAuthorizationCode)) {
            $query['TransferAuthorizationCode'] = $request->transferAuthorizationCode;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferInReenterTransferAuthorizationCode',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferInReenterTransferAuthorizationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferInRefetchWhoisEmail',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferInRefetchWhoisEmailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferInResendMailToken',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferInResendMailTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dataSource)) {
            $query['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->domainGroupId)) {
            $query['DomainGroupId'] = $request->domainGroupId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->replace)) {
            $query['Replace'] = $request->replace;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $body = [];
        if (!Utils::isUnset($request->fileToUpload)) {
            $body['FileToUpload'] = $request->fileToUpload;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomainToDomainGroup',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainToDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->postalCode)) {
            $query['PostalCode'] = $request->postalCode;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->registrantName)) {
            $query['RegistrantName'] = $request->registrantName;
        }
        if (!Utils::isUnset($request->registrantOrganization)) {
            $query['RegistrantOrganization'] = $request->registrantOrganization;
        }
        if (!Utils::isUnset($request->registrantType)) {
            $query['RegistrantType'] = $request->registrantType;
        }
        if (!Utils::isUnset($request->telArea)) {
            $query['TelArea'] = $request->telArea;
        }
        if (!Utils::isUnset($request->telExt)) {
            $query['TelExt'] = $request->telExt;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zhAddress)) {
            $query['ZhAddress'] = $request->zhAddress;
        }
        if (!Utils::isUnset($request->zhCity)) {
            $query['ZhCity'] = $request->zhCity;
        }
        if (!Utils::isUnset($request->zhProvince)) {
            $query['ZhProvince'] = $request->zhProvince;
        }
        if (!Utils::isUnset($request->zhRegistrantName)) {
            $query['ZhRegistrantName'] = $request->zhRegistrantName;
        }
        if (!Utils::isUnset($request->zhRegistrantOrganization)) {
            $query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyContactField',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyContactFieldResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyEmail',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyEmailResponse::fromMap($this->callApi($params, $req, $runtime));
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
