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
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckIntlFixPriceDomainStatusRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckIntlFixPriceDomainStatusResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckMaxYearOfServerLockRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckMaxYearOfServerLockResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckProcessingServerLockApplyRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckProcessingServerLockApplyResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckTransferInFeasibilityRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckTransferInFeasibilityResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\CreateIntlFixedPriceDomainOrderRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\CreateIntlFixedPriceDomainOrderResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\GetIntlFixPriceDomainListUrlRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\GetIntlFixPriceDomainListUrlResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryIntlFixedPriceOrderListRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryIntlFixedPriceOrderListResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForReserveDropListDomainRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForReserveDropListDomainResponse;
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
     * @summary 确认任务结果
     *  *
     * @param AcknowledgeTaskResultRequest $request AcknowledgeTaskResultRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AcknowledgeTaskResultResponse AcknowledgeTaskResultResponse
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
     * @summary 确认任务结果
     *  *
     * @param AcknowledgeTaskResultRequest $request AcknowledgeTaskResultRequest
     *
     * @return AcknowledgeTaskResultResponse AcknowledgeTaskResultResponse
     */
    public function acknowledgeTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acknowledgeTaskResultWithOptions($request, $runtime);
    }

    /**
     * @summary 通过关键字进行批量模糊匹配
     *  *
     * @param BatchFuzzyMatchDomainSensitiveWordRequest $request BatchFuzzyMatchDomainSensitiveWordRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchFuzzyMatchDomainSensitiveWordResponse BatchFuzzyMatchDomainSensitiveWordResponse
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
     * @summary 通过关键字进行批量模糊匹配
     *  *
     * @param BatchFuzzyMatchDomainSensitiveWordRequest $request BatchFuzzyMatchDomainSensitiveWordRequest
     *
     * @return BatchFuzzyMatchDomainSensitiveWordResponse BatchFuzzyMatchDomainSensitiveWordResponse
     */
    public function batchFuzzyMatchDomainSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchFuzzyMatchDomainSensitiveWordWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels real-name verification for a domain name.
     *  *
     * @param CancelDomainVerificationRequest $request CancelDomainVerificationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDomainVerificationResponse CancelDomainVerificationResponse
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
     * @summary Cancels real-name verification for a domain name.
     *  *
     * @param CancelDomainVerificationRequest $request CancelDomainVerificationRequest
     *
     * @return CancelDomainVerificationResponse CancelDomainVerificationResponse
     */
    public function cancelDomainVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDomainVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 取消审核
     *  *
     * @param CancelOperationAuditRequest $request CancelOperationAuditRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelOperationAuditResponse CancelOperationAuditResponse
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
     * @summary 取消审核
     *  *
     * @param CancelOperationAuditRequest $request CancelOperationAuditRequest
     *
     * @return CancelOperationAuditResponse CancelOperationAuditResponse
     */
    public function cancelOperationAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOperationAuditWithOptions($request, $runtime);
    }

    /**
     * @param CancelQualificationVerificationRequest $request CancelQualificationVerificationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelQualificationVerificationResponse CancelQualificationVerificationResponse
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
     * @param CancelQualificationVerificationRequest $request CancelQualificationVerificationRequest
     *
     * @return CancelQualificationVerificationResponse CancelQualificationVerificationResponse
     */
    public function cancelQualificationVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelQualificationVerificationWithOptions($request, $runtime);
    }

    /**
     * @param CancelTaskRequest $request CancelTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelTaskResponse CancelTaskResponse
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
     * @param CancelTaskRequest $request CancelTaskRequest
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例所在资源组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
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
     * @summary 修改实例所在资源组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CheckDomainRequest $request CheckDomainRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDomainResponse CheckDomainResponse
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
     * @param CheckDomainRequest $request CheckDomainRequest
     *
     * @return CheckDomainResponse CheckDomainResponse
     */
    public function checkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckDomainSunriseClaimRequest $request CheckDomainSunriseClaimRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDomainSunriseClaimResponse CheckDomainSunriseClaimResponse
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
     * @param CheckDomainSunriseClaimRequest $request CheckDomainSunriseClaimRequest
     *
     * @return CheckDomainSunriseClaimResponse CheckDomainSunriseClaimResponse
     */
    public function checkDomainSunriseClaim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainSunriseClaimWithOptions($request, $runtime);
    }

    /**
     * @summary 校验在售国际一口价域名状态和询价
     *  *
     * @param CheckIntlFixPriceDomainStatusRequest $request CheckIntlFixPriceDomainStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckIntlFixPriceDomainStatusResponse CheckIntlFixPriceDomainStatusResponse
     */
    public function checkIntlFixPriceDomainStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckIntlFixPriceDomainStatus',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckIntlFixPriceDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验在售国际一口价域名状态和询价
     *  *
     * @param CheckIntlFixPriceDomainStatusRequest $request CheckIntlFixPriceDomainStatusRequest
     *
     * @return CheckIntlFixPriceDomainStatusResponse CheckIntlFixPriceDomainStatusResponse
     */
    public function checkIntlFixPriceDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkIntlFixPriceDomainStatusWithOptions($request, $runtime);
    }

    /**
     * @param CheckMaxYearOfServerLockRequest $request CheckMaxYearOfServerLockRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckMaxYearOfServerLockResponse CheckMaxYearOfServerLockResponse
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
     * @param CheckMaxYearOfServerLockRequest $request CheckMaxYearOfServerLockRequest
     *
     * @return CheckMaxYearOfServerLockResponse CheckMaxYearOfServerLockResponse
     */
    public function checkMaxYearOfServerLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMaxYearOfServerLockWithOptions($request, $runtime);
    }

    /**
     * @param CheckProcessingServerLockApplyRequest $request CheckProcessingServerLockApplyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckProcessingServerLockApplyResponse CheckProcessingServerLockApplyResponse
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
     * @param CheckProcessingServerLockApplyRequest $request CheckProcessingServerLockApplyRequest
     *
     * @return CheckProcessingServerLockApplyResponse CheckProcessingServerLockApplyResponse
     */
    public function checkProcessingServerLockApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkProcessingServerLockApplyWithOptions($request, $runtime);
    }

    /**
     * @param CheckTransferInFeasibilityRequest $request CheckTransferInFeasibilityRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckTransferInFeasibilityResponse CheckTransferInFeasibilityResponse
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
     * @param CheckTransferInFeasibilityRequest $request CheckTransferInFeasibilityRequest
     *
     * @return CheckTransferInFeasibilityResponse CheckTransferInFeasibilityResponse
     */
    public function checkTransferInFeasibility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTransferInFeasibilityWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmTransferInEmailRequest $request ConfirmTransferInEmailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmTransferInEmailResponse ConfirmTransferInEmailResponse
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
     * @param ConfirmTransferInEmailRequest $request ConfirmTransferInEmailRequest
     *
     * @return ConfirmTransferInEmailResponse ConfirmTransferInEmailResponse
     */
    public function confirmTransferInEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmTransferInEmailWithOptions($request, $runtime);
    }

    /**
     * @summary 创建国际一口价订单
     *  *
     * @param CreateIntlFixedPriceDomainOrderRequest $request CreateIntlFixedPriceDomainOrderRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIntlFixedPriceDomainOrderResponse CreateIntlFixedPriceDomainOrderResponse
     */
    public function createIntlFixedPriceDomainOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->expectedPrice)) {
            $query['ExpectedPrice'] = $request->expectedPrice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIntlFixedPriceDomainOrder',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntlFixedPriceDomainOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建国际一口价订单
     *  *
     * @param CreateIntlFixedPriceDomainOrderRequest $request CreateIntlFixedPriceDomainOrderRequest
     *
     * @return CreateIntlFixedPriceDomainOrderResponse CreateIntlFixedPriceDomainOrderResponse
     */
    public function createIntlFixedPriceDomainOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntlFixedPriceDomainOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除联系人模板
     *  *
     * @param DeleteContactTemplatesRequest $request DeleteContactTemplatesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactTemplatesResponse DeleteContactTemplatesResponse
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
     * @summary 批量删除联系人模板
     *  *
     * @param DeleteContactTemplatesRequest $request DeleteContactTemplatesRequest
     *
     * @return DeleteContactTemplatesResponse DeleteContactTemplatesResponse
     */
    public function deleteContactTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除域名分组
     *  *
     * @param DeleteDomainGroupRequest $request DeleteDomainGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainGroupResponse DeleteDomainGroupResponse
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
     * @summary 删除域名分组
     *  *
     * @param DeleteDomainGroupRequest $request DeleteDomainGroupRequest
     *
     * @return DeleteDomainGroupResponse DeleteDomainGroupResponse
     */
    public function deleteDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除邮箱验证
     *  *
     * @param DeleteEmailVerificationRequest $request DeleteEmailVerificationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEmailVerificationResponse DeleteEmailVerificationResponse
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
     * @summary 删除邮箱验证
     *  *
     * @param DeleteEmailVerificationRequest $request DeleteEmailVerificationRequest
     *
     * @return DeleteEmailVerificationResponse DeleteEmailVerificationResponse
     */
    public function deleteEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 删除联系人模板
     *  *
     * @param DeleteRegistrantProfileRequest $request DeleteRegistrantProfileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRegistrantProfileResponse DeleteRegistrantProfileResponse
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
     * @summary 删除联系人模板
     *  *
     * @param DeleteRegistrantProfileRequest $request DeleteRegistrantProfileRequest
     *
     * @return DeleteRegistrantProfileResponse DeleteRegistrantProfileResponse
     */
    public function deleteRegistrantProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRegistrantProfileWithOptions($request, $runtime);
    }

    /**
     * @summary 取消域名特殊业务流程
     *  *
     * @param DomainSpecialBizCancelRequest $request DomainSpecialBizCancelRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DomainSpecialBizCancelResponse DomainSpecialBizCancelResponse
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
     * @summary 取消域名特殊业务流程
     *  *
     * @param DomainSpecialBizCancelRequest $request DomainSpecialBizCancelRequest
     *
     * @return DomainSpecialBizCancelResponse DomainSpecialBizCancelResponse
     */
    public function domainSpecialBizCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->domainSpecialBizCancelWithOptions($request, $runtime);
    }

    /**
     * @summary 邮箱验证通过
     *  *
     * @param EmailVerifiedRequest $request EmailVerifiedRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return EmailVerifiedResponse EmailVerifiedResponse
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
     * @summary 邮箱验证通过
     *  *
     * @param EmailVerifiedRequest $request EmailVerifiedRequest
     *
     * @return EmailVerifiedResponse EmailVerifiedResponse
     */
    public function emailVerified($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emailVerifiedWithOptions($request, $runtime);
    }

    /**
     * @summary 通过关键字进行模糊匹配
     *  *
     * @param FuzzyMatchDomainSensitiveWordRequest $request FuzzyMatchDomainSensitiveWordRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return FuzzyMatchDomainSensitiveWordResponse FuzzyMatchDomainSensitiveWordResponse
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
     * @summary 通过关键字进行模糊匹配
     *  *
     * @param FuzzyMatchDomainSensitiveWordRequest $request FuzzyMatchDomainSensitiveWordRequest
     *
     * @return FuzzyMatchDomainSensitiveWordResponse FuzzyMatchDomainSensitiveWordResponse
     */
    public function fuzzyMatchDomainSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fuzzyMatchDomainSensitiveWordWithOptions($request, $runtime);
    }

    /**
     * @summary 查询国际一口价在售域名列表
     *  *
     * @param GetIntlFixPriceDomainListUrlRequest $request GetIntlFixPriceDomainListUrlRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIntlFixPriceDomainListUrlResponse GetIntlFixPriceDomainListUrlResponse
     */
    public function getIntlFixPriceDomainListUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listDate)) {
            $query['ListDate'] = $request->listDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIntlFixPriceDomainListUrl',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntlFixPriceDomainListUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询国际一口价在售域名列表
     *  *
     * @param GetIntlFixPriceDomainListUrlRequest $request GetIntlFixPriceDomainListUrlRequest
     *
     * @return GetIntlFixPriceDomainListUrlResponse GetIntlFixPriceDomainListUrlResponse
     */
    public function getIntlFixPriceDomainListUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntlFixPriceDomainListUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetOperationOssUploadPolicyRequest $request GetOperationOssUploadPolicyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOperationOssUploadPolicyResponse GetOperationOssUploadPolicyResponse
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
     * @param GetOperationOssUploadPolicyRequest $request GetOperationOssUploadPolicyRequest
     *
     * @return GetOperationOssUploadPolicyResponse GetOperationOssUploadPolicyResponse
     */
    public function getOperationOssUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperationOssUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetQualificationUploadPolicyRequest $request GetQualificationUploadPolicyRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualificationUploadPolicyResponse GetQualificationUploadPolicyResponse
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
     * @param GetQualificationUploadPolicyRequest $request GetQualificationUploadPolicyRequest
     *
     * @return GetQualificationUploadPolicyResponse GetQualificationUploadPolicyResponse
     */
    public function getQualificationUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualificationUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ListEmailVerificationRequest $request ListEmailVerificationRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEmailVerificationResponse ListEmailVerificationResponse
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
     * @param ListEmailVerificationRequest $request ListEmailVerificationRequest
     *
     * @return ListEmailVerificationResponse ListEmailVerificationResponse
     */
    public function listEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about domain names for which registry locks are enabled.
     *  *
     * @param ListServerLockRequest $request ListServerLockRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServerLockResponse ListServerLockResponse
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
     * @summary Queries information about domain names for which registry locks are enabled.
     *  *
     * @param ListServerLockRequest $request ListServerLockRequest
     *
     * @return ListServerLockResponse ListServerLockResponse
     */
    public function listServerLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerLockWithOptions($request, $runtime);
    }

    /**
     * @param LookupTmchNoticeRequest $request LookupTmchNoticeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return LookupTmchNoticeResponse LookupTmchNoticeResponse
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
     * @param LookupTmchNoticeRequest $request LookupTmchNoticeRequest
     *
     * @return LookupTmchNoticeResponse LookupTmchNoticeResponse
     */
    public function lookupTmchNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lookupTmchNoticeWithOptions($request, $runtime);
    }

    /**
     * @param PollTaskResultRequest $request PollTaskResultRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PollTaskResultResponse PollTaskResultResponse
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
     * @param PollTaskResultRequest $request PollTaskResultRequest
     *
     * @return PollTaskResultResponse PollTaskResultResponse
     */
    public function pollTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pollTaskResultWithOptions($request, $runtime);
    }

    /**
     * @summary 搜索域名列表
     *  *
     * @param QueryAdvancedDomainListRequest $request QueryAdvancedDomainListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAdvancedDomainListResponse QueryAdvancedDomainListResponse
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
        if (!Utils::isUnset($request->isPremiumDomain)) {
            $query['IsPremiumDomain'] = $request->isPremiumDomain;
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
     * @summary 搜索域名列表
     *  *
     * @param QueryAdvancedDomainListRequest $request QueryAdvancedDomainListRequest
     *
     * @return QueryAdvancedDomainListResponse QueryAdvancedDomainListResponse
     */
    public function queryAdvancedDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAdvancedDomainListWithOptions($request, $runtime);
    }

    /**
     * @param QueryArtExtensionRequest $request QueryArtExtensionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryArtExtensionResponse QueryArtExtensionResponse
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
     * @param QueryArtExtensionRequest $request QueryArtExtensionRequest
     *
     * @return QueryArtExtensionResponse QueryArtExtensionResponse
     */
    public function queryArtExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryArtExtensionWithOptions($request, $runtime);
    }

    /**
     * @param QueryChangeLogListRequest $request QueryChangeLogListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryChangeLogListResponse QueryChangeLogListResponse
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
     * @param QueryChangeLogListRequest $request QueryChangeLogListRequest
     *
     * @return QueryChangeLogListResponse QueryChangeLogListResponse
     */
    public function queryChangeLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChangeLogListWithOptions($request, $runtime);
    }

    /**
     * @param QueryContactInfoRequest $request QueryContactInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryContactInfoResponse QueryContactInfoResponse
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
     * @param QueryContactInfoRequest $request QueryContactInfoRequest
     *
     * @return QueryContactInfoResponse QueryContactInfoResponse
     */
    public function queryContactInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryDSRecordRequest $request QueryDSRecordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDSRecordResponse QueryDSRecordResponse
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
     * @param QueryDSRecordRequest $request QueryDSRecordRequest
     *
     * @return QueryDSRecordResponse QueryDSRecordResponse
     */
    public function queryDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDSRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryDnsHostRequest $request QueryDnsHostRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDnsHostResponse QueryDnsHostResponse
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
     * @param QueryDnsHostRequest $request QueryDnsHostRequest
     *
     * @return QueryDnsHostResponse QueryDnsHostResponse
     */
    public function queryDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainAdminDivisionRequest $request QueryDomainAdminDivisionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainAdminDivisionResponse QueryDomainAdminDivisionResponse
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
     * @param QueryDomainAdminDivisionRequest $request QueryDomainAdminDivisionRequest
     *
     * @return QueryDomainAdminDivisionResponse QueryDomainAdminDivisionResponse
     */
    public function queryDomainAdminDivision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainAdminDivisionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a domain name.
     *  *
     * @param QueryDomainByDomainNameRequest $request QueryDomainByDomainNameRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainByDomainNameResponse QueryDomainByDomainNameResponse
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
     * @summary Queries the information about a domain name.
     *  *
     * @param QueryDomainByDomainNameRequest $request QueryDomainByDomainNameRequest
     *
     * @return QueryDomainByDomainNameResponse QueryDomainByDomainNameResponse
     */
    public function queryDomainByDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainByDomainNameWithOptions($request, $runtime);
    }

    /**
     * @summary 根据实例id查询域名信息
     *  *
     * @param QueryDomainByInstanceIdRequest $request QueryDomainByInstanceIdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainByInstanceIdResponse QueryDomainByInstanceIdResponse
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
     * @summary 根据实例id查询域名信息
     *  *
     * @param QueryDomainByInstanceIdRequest $request QueryDomainByInstanceIdRequest
     *
     * @return QueryDomainByInstanceIdResponse QueryDomainByInstanceIdResponse
     */
    public function queryDomainByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainGroupListRequest $request QueryDomainGroupListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainGroupListResponse QueryDomainGroupListResponse
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
     * @param QueryDomainGroupListRequest $request QueryDomainGroupListRequest
     *
     * @return QueryDomainGroupListResponse QueryDomainGroupListResponse
     */
    public function queryDomainGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainGroupListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of domain names within your Alibaba Cloud account by page.
     *  *
     * @param QueryDomainListRequest $request QueryDomainListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainListResponse QueryDomainListResponse
     */
    public function queryDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ccompany)) {
            $query['Ccompany'] = $request->ccompany;
        }
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
     * @summary Queries a list of domain names within your Alibaba Cloud account by page.
     *  *
     * @param QueryDomainListRequest $request QueryDomainListRequest
     *
     * @return QueryDomainListResponse QueryDomainListResponse
     */
    public function queryDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainListWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainRealNameVerificationInfoRequest $request QueryDomainRealNameVerificationInfoRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainRealNameVerificationInfoResponse QueryDomainRealNameVerificationInfoResponse
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
     * @param QueryDomainRealNameVerificationInfoRequest $request QueryDomainRealNameVerificationInfoRequest
     *
     * @return QueryDomainRealNameVerificationInfoResponse QueryDomainRealNameVerificationInfoResponse
     */
    public function queryDomainRealNameVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainRealNameVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询域名特殊业务详情
     *  *
     * @param QueryDomainSpecialBizDetailRequest $request QueryDomainSpecialBizDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainSpecialBizDetailResponse QueryDomainSpecialBizDetailResponse
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
     * @summary 查询域名特殊业务详情
     *  *
     * @param QueryDomainSpecialBizDetailRequest $request QueryDomainSpecialBizDetailRequest
     *
     * @return QueryDomainSpecialBizDetailResponse QueryDomainSpecialBizDetailResponse
     */
    public function queryDomainSpecialBizDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainSpecialBizDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 通过域名查询域名特殊业务详情
     *  *
     * @param QueryDomainSpecialBizInfoByDomainRequest $request QueryDomainSpecialBizInfoByDomainRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainSpecialBizInfoByDomainResponse QueryDomainSpecialBizInfoByDomainResponse
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
     * @summary 通过域名查询域名特殊业务详情
     *  *
     * @param QueryDomainSpecialBizInfoByDomainRequest $request QueryDomainSpecialBizInfoByDomainRequest
     *
     * @return QueryDomainSpecialBizInfoByDomainResponse QueryDomainSpecialBizInfoByDomainResponse
     */
    public function queryDomainSpecialBizInfoByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainSpecialBizInfoByDomainWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainSuffixRequest $request QueryDomainSuffixRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainSuffixResponse QueryDomainSuffixResponse
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
     * @param QueryDomainSuffixRequest $request QueryDomainSuffixRequest
     *
     * @return QueryDomainSuffixResponse QueryDomainSuffixResponse
     */
    public function queryDomainSuffix($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainSuffixWithOptions($request, $runtime);
    }

    /**
     * @summary 查询邮箱验证状态
     *  *
     * @param QueryEmailVerificationRequest $request QueryEmailVerificationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEmailVerificationResponse QueryEmailVerificationResponse
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
     * @summary 查询邮箱验证状态
     *  *
     * @param QueryEmailVerificationRequest $request QueryEmailVerificationRequest
     *
     * @return QueryEmailVerificationResponse QueryEmailVerificationResponse
     */
    public function queryEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryEnsAssociationRequest $request QueryEnsAssociationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEnsAssociationResponse QueryEnsAssociationResponse
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
     * @param QueryEnsAssociationRequest $request QueryEnsAssociationRequest
     *
     * @return QueryEnsAssociationResponse QueryEnsAssociationResponse
     */
    public function queryEnsAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEnsAssociationWithOptions($request, $runtime);
    }

    /**
     * @param QueryFailReasonForDomainRealNameVerificationRequest $request QueryFailReasonForDomainRealNameVerificationRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryFailReasonForDomainRealNameVerificationResponse QueryFailReasonForDomainRealNameVerificationResponse
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
     * @param QueryFailReasonForDomainRealNameVerificationRequest $request QueryFailReasonForDomainRealNameVerificationRequest
     *
     * @return QueryFailReasonForDomainRealNameVerificationResponse QueryFailReasonForDomainRealNameVerificationResponse
     */
    public function queryFailReasonForDomainRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailReasonForDomainRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryFailReasonForRegistrantProfileRealNameVerificationRequest $request QueryFailReasonForRegistrantProfileRealNameVerificationRequest
     * @param RuntimeOptions                                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryFailReasonForRegistrantProfileRealNameVerificationResponse QueryFailReasonForRegistrantProfileRealNameVerificationResponse
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
     * @param QueryFailReasonForRegistrantProfileRealNameVerificationRequest $request QueryFailReasonForRegistrantProfileRealNameVerificationRequest
     *
     * @return QueryFailReasonForRegistrantProfileRealNameVerificationResponse QueryFailReasonForRegistrantProfileRealNameVerificationResponse
     */
    public function queryFailReasonForRegistrantProfileRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailReasonForRegistrantProfileRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @param QueryFailingReasonListForQualificationRequest $request QueryFailingReasonListForQualificationRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryFailingReasonListForQualificationResponse QueryFailingReasonListForQualificationResponse
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
     * @param QueryFailingReasonListForQualificationRequest $request QueryFailingReasonListForQualificationRequest
     *
     * @return QueryFailingReasonListForQualificationResponse QueryFailingReasonListForQualificationResponse
     */
    public function queryFailingReasonListForQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailingReasonListForQualificationWithOptions($request, $runtime);
    }

    /**
     * @summary 查询国际一口价订单列表
     *  *
     * @param QueryIntlFixedPriceOrderListRequest $request QueryIntlFixedPriceOrderListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryIntlFixedPriceOrderListResponse QueryIntlFixedPriceOrderListResponse
     */
    public function queryIntlFixedPriceOrderListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIntlFixedPriceOrderList',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIntlFixedPriceOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询国际一口价订单列表
     *  *
     * @param QueryIntlFixedPriceOrderListRequest $request QueryIntlFixedPriceOrderListRequest
     *
     * @return QueryIntlFixedPriceOrderListResponse QueryIntlFixedPriceOrderListResponse
     */
    public function queryIntlFixedPriceOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntlFixedPriceOrderListWithOptions($request, $runtime);
    }

    /**
     * @param QueryLocalEnsAssociationRequest $request QueryLocalEnsAssociationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryLocalEnsAssociationResponse QueryLocalEnsAssociationResponse
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
     * @param QueryLocalEnsAssociationRequest $request QueryLocalEnsAssociationRequest
     *
     * @return QueryLocalEnsAssociationResponse QueryLocalEnsAssociationResponse
     */
    public function queryLocalEnsAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLocalEnsAssociationWithOptions($request, $runtime);
    }

    /**
     * @param QueryOperationAuditInfoDetailRequest $request QueryOperationAuditInfoDetailRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOperationAuditInfoDetailResponse QueryOperationAuditInfoDetailResponse
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
     * @param QueryOperationAuditInfoDetailRequest $request QueryOperationAuditInfoDetailRequest
     *
     * @return QueryOperationAuditInfoDetailResponse QueryOperationAuditInfoDetailResponse
     */
    public function queryOperationAuditInfoDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOperationAuditInfoDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryOperationAuditInfoListRequest $request QueryOperationAuditInfoListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOperationAuditInfoListResponse QueryOperationAuditInfoListResponse
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
     * @param QueryOperationAuditInfoListRequest $request QueryOperationAuditInfoListRequest
     *
     * @return QueryOperationAuditInfoListResponse QueryOperationAuditInfoListResponse
     */
    public function queryOperationAuditInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOperationAuditInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryQualificationDetailRequest $request QueryQualificationDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryQualificationDetailResponse QueryQualificationDetailResponse
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
     * @param QueryQualificationDetailRequest $request QueryQualificationDetailRequest
     *
     * @return QueryQualificationDetailResponse QueryQualificationDetailResponse
     */
    public function queryQualificationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryQualificationDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryRegistrantProfileRealNameVerificationInfoRequest $request QueryRegistrantProfileRealNameVerificationInfoRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRegistrantProfileRealNameVerificationInfoResponse QueryRegistrantProfileRealNameVerificationInfoResponse
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
     * @param QueryRegistrantProfileRealNameVerificationInfoRequest $request QueryRegistrantProfileRealNameVerificationInfoRequest
     *
     * @return QueryRegistrantProfileRealNameVerificationInfoResponse QueryRegistrantProfileRealNameVerificationInfoResponse
     */
    public function queryRegistrantProfileRealNameVerificationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRegistrantProfileRealNameVerificationInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryRegistrantProfilesRequest $request QueryRegistrantProfilesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRegistrantProfilesResponse QueryRegistrantProfilesResponse
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
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
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
     * @param QueryRegistrantProfilesRequest $request QueryRegistrantProfilesRequest
     *
     * @return QueryRegistrantProfilesResponse QueryRegistrantProfilesResponse
     */
    public function queryRegistrantProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRegistrantProfilesWithOptions($request, $runtime);
    }

    /**
     * @param QueryServerLockRequest $request QueryServerLockRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryServerLockResponse QueryServerLockResponse
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
     * @param QueryServerLockRequest $request QueryServerLockRequest
     *
     * @return QueryServerLockResponse QueryServerLockResponse
     */
    public function queryServerLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServerLockWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskDetailHistoryRequest $request QueryTaskDetailHistoryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskDetailHistoryResponse QueryTaskDetailHistoryResponse
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
     * @param QueryTaskDetailHistoryRequest $request QueryTaskDetailHistoryRequest
     *
     * @return QueryTaskDetailHistoryResponse QueryTaskDetailHistoryResponse
     */
    public function queryTaskDetailHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskDetailHistoryWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskDetailListRequest $request QueryTaskDetailListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskDetailListResponse QueryTaskDetailListResponse
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
     * @param QueryTaskDetailListRequest $request QueryTaskDetailListRequest
     *
     * @return QueryTaskDetailListResponse QueryTaskDetailListResponse
     */
    public function queryTaskDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskDetailListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskInfoHistoryRequest $request QueryTaskInfoHistoryRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskInfoHistoryResponse QueryTaskInfoHistoryResponse
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
     * @param QueryTaskInfoHistoryRequest $request QueryTaskInfoHistoryRequest
     *
     * @return QueryTaskInfoHistoryResponse QueryTaskInfoHistoryResponse
     */
    public function queryTaskInfoHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskInfoHistoryWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskListRequest $request QueryTaskListRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskListResponse QueryTaskListResponse
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
     * @param QueryTaskListRequest $request QueryTaskListRequest
     *
     * @return QueryTaskListResponse QueryTaskListResponse
     */
    public function queryTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransferInByInstanceIdRequest $request QueryTransferInByInstanceIdRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTransferInByInstanceIdResponse QueryTransferInByInstanceIdResponse
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
     * @param QueryTransferInByInstanceIdRequest $request QueryTransferInByInstanceIdRequest
     *
     * @return QueryTransferInByInstanceIdResponse QueryTransferInByInstanceIdResponse
     */
    public function queryTransferInByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferInByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransferInListRequest $request QueryTransferInListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTransferInListResponse QueryTransferInListResponse
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
     * @param QueryTransferInListRequest $request QueryTransferInListRequest
     *
     * @return QueryTransferInListResponse QueryTransferInListResponse
     */
    public function queryTransferInList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferInListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransferOutInfoRequest $request QueryTransferOutInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTransferOutInfoResponse QueryTransferOutInfoResponse
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
     * @param QueryTransferOutInfoRequest $request QueryTransferOutInfoRequest
     *
     * @return QueryTransferOutInfoResponse QueryTransferOutInfoResponse
     */
    public function queryTransferOutInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferOutInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 保存联系人模板实名资料
     *  *
     * @param RegistrantProfileRealNameVerificationRequest $request RegistrantProfileRealNameVerificationRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return RegistrantProfileRealNameVerificationResponse RegistrantProfileRealNameVerificationResponse
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
     * @summary 保存联系人模板实名资料
     *  *
     * @param RegistrantProfileRealNameVerificationRequest $request RegistrantProfileRealNameVerificationRequest
     *
     * @return RegistrantProfileRealNameVerificationResponse RegistrantProfileRealNameVerificationResponse
     */
    public function registrantProfileRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registrantProfileRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 重新发送验证邮件
     *  *
     * @param ResendEmailVerificationRequest $request ResendEmailVerificationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ResendEmailVerificationResponse ResendEmailVerificationResponse
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
     * @summary 重新发送验证邮件
     *  *
     * @param ResendEmailVerificationRequest $request ResendEmailVerificationRequest
     *
     * @return ResendEmailVerificationResponse ResendEmailVerificationResponse
     */
    public function resendEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 重置资质审核状态
     *  *
     * @param ResetQualificationVerificationRequest $request ResetQualificationVerificationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetQualificationVerificationResponse ResetQualificationVerificationResponse
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
     * @summary 重置资质审核状态
     *  *
     * @param ResetQualificationVerificationRequest $request ResetQualificationVerificationRequest
     *
     * @return ResetQualificationVerificationResponse ResetQualificationVerificationResponse
     */
    public function resetQualificationVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetQualificationVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 批量保存域名备注信息
     *  *
     * @param SaveBatchDomainRemarkRequest $request SaveBatchDomainRemarkRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchDomainRemarkResponse SaveBatchDomainRemarkResponse
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
     * @summary 批量保存域名备注信息
     *  *
     * @param SaveBatchDomainRemarkRequest $request SaveBatchDomainRemarkRequest
     *
     * @return SaveBatchDomainRemarkResponse SaveBatchDomainRemarkResponse
     */
    public function saveBatchDomainRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary 批量申请域名快速转出
     *  *
     * @param SaveBatchTaskForApplyQuickTransferOutOpenlyRequest $request SaveBatchTaskForApplyQuickTransferOutOpenlyRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
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
     * @summary 批量申请域名快速转出
     *  *
     * @param SaveBatchTaskForApplyQuickTransferOutOpenlyRequest $request SaveBatchTaskForApplyQuickTransferOutOpenlyRequest
     *
     * @return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveBatchTaskForApplyQuickTransferOutOpenly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime);
    }

    /**
     * @summary 保存批量任务-注册订单
     *  *
     * @param SaveBatchTaskForCreatingOrderActivateRequest $request SaveBatchTaskForCreatingOrderActivateRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForCreatingOrderActivateResponse SaveBatchTaskForCreatingOrderActivateResponse
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
     * @summary 保存批量任务-注册订单
     *  *
     * @param SaveBatchTaskForCreatingOrderActivateRequest $request SaveBatchTaskForCreatingOrderActivateRequest
     *
     * @return SaveBatchTaskForCreatingOrderActivateResponse SaveBatchTaskForCreatingOrderActivateResponse
     */
    public function saveBatchTaskForCreatingOrderActivate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderActivateWithOptions($request, $runtime);
    }

    /**
     * @param SaveBatchTaskForCreatingOrderRedeemRequest $request SaveBatchTaskForCreatingOrderRedeemRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForCreatingOrderRedeemResponse SaveBatchTaskForCreatingOrderRedeemResponse
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
     * @param SaveBatchTaskForCreatingOrderRedeemRequest $request SaveBatchTaskForCreatingOrderRedeemRequest
     *
     * @return SaveBatchTaskForCreatingOrderRedeemResponse SaveBatchTaskForCreatingOrderRedeemResponse
     */
    public function saveBatchTaskForCreatingOrderRedeem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderRedeemWithOptions($request, $runtime);
    }

    /**
     * @summary 保存批量任务-续费订单
     *  *
     * @param SaveBatchTaskForCreatingOrderRenewRequest $request SaveBatchTaskForCreatingOrderRenewRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForCreatingOrderRenewResponse SaveBatchTaskForCreatingOrderRenewResponse
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
     * @summary 保存批量任务-续费订单
     *  *
     * @param SaveBatchTaskForCreatingOrderRenewRequest $request SaveBatchTaskForCreatingOrderRenewRequest
     *
     * @return SaveBatchTaskForCreatingOrderRenewResponse SaveBatchTaskForCreatingOrderRenewResponse
     */
    public function saveBatchTaskForCreatingOrderRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderRenewWithOptions($request, $runtime);
    }

    /**
     * @param SaveBatchTaskForCreatingOrderTransferRequest $request SaveBatchTaskForCreatingOrderTransferRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForCreatingOrderTransferResponse SaveBatchTaskForCreatingOrderTransferResponse
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
     * @param SaveBatchTaskForCreatingOrderTransferRequest $request SaveBatchTaskForCreatingOrderTransferRequest
     *
     * @return SaveBatchTaskForCreatingOrderTransferResponse SaveBatchTaskForCreatingOrderTransferResponse
     */
    public function saveBatchTaskForCreatingOrderTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForCreatingOrderTransferWithOptions($request, $runtime);
    }

    /**
     * @summary 保存批量任务-开启/关闭whois隐私保护锁
     *  *
     * @param SaveBatchTaskForDomainNameProxyServiceRequest $request SaveBatchTaskForDomainNameProxyServiceRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForDomainNameProxyServiceResponse SaveBatchTaskForDomainNameProxyServiceResponse
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
     * @summary 保存批量任务-开启/关闭whois隐私保护锁
     *  *
     * @param SaveBatchTaskForDomainNameProxyServiceRequest $request SaveBatchTaskForDomainNameProxyServiceRequest
     *
     * @return SaveBatchTaskForDomainNameProxyServiceResponse SaveBatchTaskForDomainNameProxyServiceResponse
     */
    public function saveBatchTaskForDomainNameProxyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForDomainNameProxyServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 提交批量生成证书的任务
     *  *
     * @param SaveBatchTaskForGenerateDomainCertificateRequest $tmpReq  SaveBatchTaskForGenerateDomainCertificateRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForGenerateDomainCertificateResponse SaveBatchTaskForGenerateDomainCertificateResponse
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
     * @summary 提交批量生成证书的任务
     *  *
     * @param SaveBatchTaskForGenerateDomainCertificateRequest $request SaveBatchTaskForGenerateDomainCertificateRequest
     *
     * @return SaveBatchTaskForGenerateDomainCertificateResponse SaveBatchTaskForGenerateDomainCertificateResponse
     */
    public function saveBatchTaskForGenerateDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForGenerateDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 批量修改dns
     *  *
     * @param SaveBatchTaskForModifyingDomainDnsRequest $request SaveBatchTaskForModifyingDomainDnsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForModifyingDomainDnsResponse SaveBatchTaskForModifyingDomainDnsResponse
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
     * @summary 批量修改dns
     *  *
     * @param SaveBatchTaskForModifyingDomainDnsRequest $request SaveBatchTaskForModifyingDomainDnsRequest
     *
     * @return SaveBatchTaskForModifyingDomainDnsResponse SaveBatchTaskForModifyingDomainDnsResponse
     */
    public function saveBatchTaskForModifyingDomainDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForModifyingDomainDnsWithOptions($request, $runtime);
    }

    /**
     * @param SaveBatchTaskForReserveDropListDomainRequest $request SaveBatchTaskForReserveDropListDomainRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForReserveDropListDomainResponse SaveBatchTaskForReserveDropListDomainResponse
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
     * @param SaveBatchTaskForReserveDropListDomainRequest $request SaveBatchTaskForReserveDropListDomainRequest
     *
     * @return SaveBatchTaskForReserveDropListDomainResponse SaveBatchTaskForReserveDropListDomainResponse
     */
    public function saveBatchTaskForReserveDropListDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForReserveDropListDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 保存批量任务-开启/关闭禁止转移锁
     *  *
     * @param SaveBatchTaskForTransferProhibitionLockRequest $request SaveBatchTaskForTransferProhibitionLockRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForTransferProhibitionLockResponse SaveBatchTaskForTransferProhibitionLockResponse
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
     * @summary 保存批量任务-开启/关闭禁止转移锁
     *  *
     * @param SaveBatchTaskForTransferProhibitionLockRequest $request SaveBatchTaskForTransferProhibitionLockRequest
     *
     * @return SaveBatchTaskForTransferProhibitionLockResponse SaveBatchTaskForTransferProhibitionLockResponse
     */
    public function saveBatchTaskForTransferProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForTransferProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @param SaveBatchTaskForUpdateProhibitionLockRequest $request SaveBatchTaskForUpdateProhibitionLockRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForUpdateProhibitionLockResponse SaveBatchTaskForUpdateProhibitionLockResponse
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
     * @param SaveBatchTaskForUpdateProhibitionLockRequest $request SaveBatchTaskForUpdateProhibitionLockRequest
     *
     * @return SaveBatchTaskForUpdateProhibitionLockResponse SaveBatchTaskForUpdateProhibitionLockResponse
     */
    public function saveBatchTaskForUpdateProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdateProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @summary 使用联系人信息修改联系人的批量任务
     *  *
     * @param SaveBatchTaskForUpdatingContactInfoByNewContactRequest $request SaveBatchTaskForUpdatingContactInfoByNewContactRequest
     * @param RuntimeOptions                                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForUpdatingContactInfoByNewContactResponse SaveBatchTaskForUpdatingContactInfoByNewContactResponse
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
     * @summary 使用联系人信息修改联系人的批量任务
     *  *
     * @param SaveBatchTaskForUpdatingContactInfoByNewContactRequest $request SaveBatchTaskForUpdatingContactInfoByNewContactRequest
     *
     * @return SaveBatchTaskForUpdatingContactInfoByNewContactResponse SaveBatchTaskForUpdatingContactInfoByNewContactResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByNewContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdatingContactInfoByNewContactWithOptions($request, $runtime);
    }

    /**
     * @summary 使用模板修改联系人的批量任务
     *  *
     * @param SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest $request SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest
     * @param RuntimeOptions                                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
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
     * @summary 使用模板修改联系人的批量任务
     *  *
     * @param SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest $request SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest
     *
     * @return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByRegistrantProfileId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdatingContactInfoByRegistrantProfileIdWithOptions($request, $runtime);
    }

    /**
     * @summary 创建/更新域名分组
     *  *
     * @param SaveDomainGroupRequest $request SaveDomainGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveDomainGroupResponse SaveDomainGroupResponse
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
     * @summary 创建/更新域名分组
     *  *
     * @param SaveDomainGroupRequest $request SaveDomainGroupRequest
     *
     * @return SaveDomainGroupResponse SaveDomainGroupResponse
     */
    public function saveDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 保存联系人模板
     *  *
     * @param SaveRegistrantProfileRequest $request SaveRegistrantProfileRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveRegistrantProfileResponse SaveRegistrantProfileResponse
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
     * @summary 保存联系人模板
     *  *
     * @param SaveRegistrantProfileRequest $request SaveRegistrantProfileRequest
     *
     * @return SaveRegistrantProfileResponse SaveRegistrantProfileResponse
     */
    public function saveRegistrantProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRegistrantProfileWithOptions($request, $runtime);
    }

    /**
     * @summary 保存联系人模板和凭据
     *  *
     * @param SaveRegistrantProfileRealNameVerificationRequest $request SaveRegistrantProfileRealNameVerificationRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveRegistrantProfileRealNameVerificationResponse SaveRegistrantProfileRealNameVerificationResponse
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
     * @summary 保存联系人模板和凭据
     *  *
     * @param SaveRegistrantProfileRealNameVerificationRequest $request SaveRegistrantProfileRealNameVerificationRequest
     *
     * @return SaveRegistrantProfileRealNameVerificationResponse SaveRegistrantProfileRealNameVerificationResponse
     */
    public function saveRegistrantProfileRealNameVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRegistrantProfileRealNameVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 添加dnsSec记录
     *  *
     * @param SaveSingleTaskForAddingDSRecordRequest $request SaveSingleTaskForAddingDSRecordRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForAddingDSRecordResponse SaveSingleTaskForAddingDSRecordResponse
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
     * @summary 添加dnsSec记录
     *  *
     * @param SaveSingleTaskForAddingDSRecordRequest $request SaveSingleTaskForAddingDSRecordRequest
     *
     * @return SaveSingleTaskForAddingDSRecordResponse SaveSingleTaskForAddingDSRecordResponse
     */
    public function saveSingleTaskForAddingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForAddingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 申请域名快速转出
     *  *
     * @param SaveSingleTaskForApplyQuickTransferOutOpenlyRequest $request SaveSingleTaskForApplyQuickTransferOutOpenlyRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
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
     * @summary 申请域名快速转出
     *  *
     * @param SaveSingleTaskForApplyQuickTransferOutOpenlyRequest $request SaveSingleTaskForApplyQuickTransferOutOpenlyRequest
     *
     * @return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveSingleTaskForApplyQuickTransferOutOpenly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime);
    }

    /**
     * @summary 确认转出
     *  *
     * @param SaveSingleTaskForApprovingTransferOutRequest $request SaveSingleTaskForApprovingTransferOutRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForApprovingTransferOutResponse SaveSingleTaskForApprovingTransferOutResponse
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
     * @summary 确认转出
     *  *
     * @param SaveSingleTaskForApprovingTransferOutRequest $request SaveSingleTaskForApprovingTransferOutRequest
     *
     * @return SaveSingleTaskForApprovingTransferOutResponse SaveSingleTaskForApprovingTransferOutResponse
     */
    public function saveSingleTaskForApprovingTransferOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForApprovingTransferOutWithOptions($request, $runtime);
    }

    /**
     * @param SaveSingleTaskForAssociatingEnsRequest $request SaveSingleTaskForAssociatingEnsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForAssociatingEnsResponse SaveSingleTaskForAssociatingEnsResponse
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
     * @param SaveSingleTaskForAssociatingEnsRequest $request SaveSingleTaskForAssociatingEnsRequest
     *
     * @return SaveSingleTaskForAssociatingEnsResponse SaveSingleTaskForAssociatingEnsResponse
     */
    public function saveSingleTaskForAssociatingEns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForAssociatingEnsWithOptions($request, $runtime);
    }

    /**
     * @param SaveSingleTaskForCancelingTransferInRequest $request SaveSingleTaskForCancelingTransferInRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCancelingTransferInResponse SaveSingleTaskForCancelingTransferInResponse
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
     * @param SaveSingleTaskForCancelingTransferInRequest $request SaveSingleTaskForCancelingTransferInRequest
     *
     * @return SaveSingleTaskForCancelingTransferInResponse SaveSingleTaskForCancelingTransferInResponse
     */
    public function saveSingleTaskForCancelingTransferIn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCancelingTransferInWithOptions($request, $runtime);
    }

    /**
     * @summary 取消转出
     *  *
     * @param SaveSingleTaskForCancelingTransferOutRequest $request SaveSingleTaskForCancelingTransferOutRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCancelingTransferOutResponse SaveSingleTaskForCancelingTransferOutResponse
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
     * @summary 取消转出
     *  *
     * @param SaveSingleTaskForCancelingTransferOutRequest $request SaveSingleTaskForCancelingTransferOutRequest
     *
     * @return SaveSingleTaskForCancelingTransferOutResponse SaveSingleTaskForCancelingTransferOutResponse
     */
    public function saveSingleTaskForCancelingTransferOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCancelingTransferOutWithOptions($request, $runtime);
    }

    /**
     * @summary 保存创建dns服务器的任务请求
     *  *
     * @param SaveSingleTaskForCreatingDnsHostRequest $request SaveSingleTaskForCreatingDnsHostRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCreatingDnsHostResponse SaveSingleTaskForCreatingDnsHostResponse
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
     * @summary 保存创建dns服务器的任务请求
     *  *
     * @param SaveSingleTaskForCreatingDnsHostRequest $request SaveSingleTaskForCreatingDnsHostRequest
     *
     * @return SaveSingleTaskForCreatingDnsHostResponse SaveSingleTaskForCreatingDnsHostResponse
     */
    public function saveSingleTaskForCreatingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @summary 保存单个任务-注册订单
     *  *
     * @param SaveSingleTaskForCreatingOrderActivateRequest $request SaveSingleTaskForCreatingOrderActivateRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCreatingOrderActivateResponse SaveSingleTaskForCreatingOrderActivateResponse
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
     * @summary 保存单个任务-注册订单
     *  *
     * @param SaveSingleTaskForCreatingOrderActivateRequest $request SaveSingleTaskForCreatingOrderActivateRequest
     *
     * @return SaveSingleTaskForCreatingOrderActivateResponse SaveSingleTaskForCreatingOrderActivateResponse
     */
    public function saveSingleTaskForCreatingOrderActivate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderActivateWithOptions($request, $runtime);
    }

    /**
     * @param SaveSingleTaskForCreatingOrderRedeemRequest $request SaveSingleTaskForCreatingOrderRedeemRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCreatingOrderRedeemResponse SaveSingleTaskForCreatingOrderRedeemResponse
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
     * @param SaveSingleTaskForCreatingOrderRedeemRequest $request SaveSingleTaskForCreatingOrderRedeemRequest
     *
     * @return SaveSingleTaskForCreatingOrderRedeemResponse SaveSingleTaskForCreatingOrderRedeemResponse
     */
    public function saveSingleTaskForCreatingOrderRedeem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderRedeemWithOptions($request, $runtime);
    }

    /**
     * @summary 保存单个任务-续费订单
     *  *
     * @param SaveSingleTaskForCreatingOrderRenewRequest $request SaveSingleTaskForCreatingOrderRenewRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCreatingOrderRenewResponse SaveSingleTaskForCreatingOrderRenewResponse
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
     * @summary 保存单个任务-续费订单
     *  *
     * @param SaveSingleTaskForCreatingOrderRenewRequest $request SaveSingleTaskForCreatingOrderRenewRequest
     *
     * @return SaveSingleTaskForCreatingOrderRenewResponse SaveSingleTaskForCreatingOrderRenewResponse
     */
    public function saveSingleTaskForCreatingOrderRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderRenewWithOptions($request, $runtime);
    }

    /**
     * @param SaveSingleTaskForCreatingOrderTransferRequest $request SaveSingleTaskForCreatingOrderTransferRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForCreatingOrderTransferResponse SaveSingleTaskForCreatingOrderTransferResponse
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
     * @param SaveSingleTaskForCreatingOrderTransferRequest $request SaveSingleTaskForCreatingOrderTransferRequest
     *
     * @return SaveSingleTaskForCreatingOrderTransferResponse SaveSingleTaskForCreatingOrderTransferResponse
     */
    public function saveSingleTaskForCreatingOrderTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForCreatingOrderTransferWithOptions($request, $runtime);
    }

    /**
     * @summary 删除dnsSec记录
     *  *
     * @param SaveSingleTaskForDeletingDSRecordRequest $request SaveSingleTaskForDeletingDSRecordRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForDeletingDSRecordResponse SaveSingleTaskForDeletingDSRecordResponse
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
     * @summary 删除dnsSec记录
     *  *
     * @param SaveSingleTaskForDeletingDSRecordRequest $request SaveSingleTaskForDeletingDSRecordRequest
     *
     * @return SaveSingleTaskForDeletingDSRecordResponse SaveSingleTaskForDeletingDSRecordResponse
     */
    public function saveSingleTaskForDeletingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDeletingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 删除DNS HOST任务
     *  *
     * @param SaveSingleTaskForDeletingDnsHostRequest $request SaveSingleTaskForDeletingDnsHostRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForDeletingDnsHostResponse SaveSingleTaskForDeletingDnsHostResponse
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
     * @summary 删除DNS HOST任务
     *  *
     * @param SaveSingleTaskForDeletingDnsHostRequest $request SaveSingleTaskForDeletingDnsHostRequest
     *
     * @return SaveSingleTaskForDeletingDnsHostResponse SaveSingleTaskForDeletingDnsHostResponse
     */
    public function saveSingleTaskForDeletingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDeletingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @param SaveSingleTaskForDisassociatingEnsRequest $request SaveSingleTaskForDisassociatingEnsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForDisassociatingEnsResponse SaveSingleTaskForDisassociatingEnsResponse
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
     * @param SaveSingleTaskForDisassociatingEnsRequest $request SaveSingleTaskForDisassociatingEnsRequest
     *
     * @return SaveSingleTaskForDisassociatingEnsResponse SaveSingleTaskForDisassociatingEnsResponse
     */
    public function saveSingleTaskForDisassociatingEns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDisassociatingEnsWithOptions($request, $runtime);
    }

    /**
     * @summary 保存单个任务-开启/关闭whois隐私保护锁
     *  *
     * @param SaveSingleTaskForDomainNameProxyServiceRequest $request SaveSingleTaskForDomainNameProxyServiceRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForDomainNameProxyServiceResponse SaveSingleTaskForDomainNameProxyServiceResponse
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
     * @summary 保存单个任务-开启/关闭whois隐私保护锁
     *  *
     * @param SaveSingleTaskForDomainNameProxyServiceRequest $request SaveSingleTaskForDomainNameProxyServiceRequest
     *
     * @return SaveSingleTaskForDomainNameProxyServiceResponse SaveSingleTaskForDomainNameProxyServiceResponse
     */
    public function saveSingleTaskForDomainNameProxyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForDomainNameProxyServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 提交生成域名证书任务
     *  *
     * @param SaveSingleTaskForGenerateDomainCertificateRequest $request SaveSingleTaskForGenerateDomainCertificateRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForGenerateDomainCertificateResponse SaveSingleTaskForGenerateDomainCertificateResponse
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
     * @summary 提交生成域名证书任务
     *  *
     * @param SaveSingleTaskForGenerateDomainCertificateRequest $request SaveSingleTaskForGenerateDomainCertificateRequest
     *
     * @return SaveSingleTaskForGenerateDomainCertificateResponse SaveSingleTaskForGenerateDomainCertificateResponse
     */
    public function saveSingleTaskForGenerateDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForGenerateDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 修改DnsSec记录
     *  *
     * @param SaveSingleTaskForModifyingDSRecordRequest $request SaveSingleTaskForModifyingDSRecordRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForModifyingDSRecordResponse SaveSingleTaskForModifyingDSRecordResponse
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
     * @summary 修改DnsSec记录
     *  *
     * @param SaveSingleTaskForModifyingDSRecordRequest $request SaveSingleTaskForModifyingDSRecordRequest
     *
     * @return SaveSingleTaskForModifyingDSRecordResponse SaveSingleTaskForModifyingDSRecordResponse
     */
    public function saveSingleTaskForModifyingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForModifyingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 保存修改dns服务器的任务请求
     *  *
     * @param SaveSingleTaskForModifyingDnsHostRequest $request SaveSingleTaskForModifyingDnsHostRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForModifyingDnsHostResponse SaveSingleTaskForModifyingDnsHostResponse
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
     * @summary 保存修改dns服务器的任务请求
     *  *
     * @param SaveSingleTaskForModifyingDnsHostRequest $request SaveSingleTaskForModifyingDnsHostRequest
     *
     * @return SaveSingleTaskForModifyingDnsHostResponse SaveSingleTaskForModifyingDnsHostResponse
     */
    public function saveSingleTaskForModifyingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForModifyingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @summary 发送转移码
     *  *
     * @param SaveSingleTaskForQueryingTransferAuthorizationCodeRequest $request SaveSingleTaskForQueryingTransferAuthorizationCodeRequest
     * @param RuntimeOptions                                            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
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
     * @summary 发送转移码
     *  *
     * @param SaveSingleTaskForQueryingTransferAuthorizationCodeRequest $request SaveSingleTaskForQueryingTransferAuthorizationCodeRequest
     *
     * @return SaveSingleTaskForQueryingTransferAuthorizationCodeResponse SaveSingleTaskForQueryingTransferAuthorizationCodeResponse
     */
    public function saveSingleTaskForQueryingTransferAuthorizationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForQueryingTransferAuthorizationCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 单笔抢注批量接口
     *  *
     * @param SaveSingleTaskForReserveDropListDomainRequest $request SaveSingleTaskForReserveDropListDomainRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForReserveDropListDomainResponse SaveSingleTaskForReserveDropListDomainResponse
     */
    public function saveSingleTaskForReserveDropListDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactTemplateId)) {
            $query['ContactTemplateId'] = $request->contactTemplateId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForReserveDropListDomain',
            'version'     => '2018-01-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSingleTaskForReserveDropListDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 单笔抢注批量接口
     *  *
     * @param SaveSingleTaskForReserveDropListDomainRequest $request SaveSingleTaskForReserveDropListDomainRequest
     *
     * @return SaveSingleTaskForReserveDropListDomainResponse SaveSingleTaskForReserveDropListDomainResponse
     */
    public function saveSingleTaskForReserveDropListDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForReserveDropListDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 保存art扩展信息任务
     *  *
     * @param SaveSingleTaskForSaveArtExtensionRequest $request SaveSingleTaskForSaveArtExtensionRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForSaveArtExtensionResponse SaveSingleTaskForSaveArtExtensionResponse
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
     * @summary 保存art扩展信息任务
     *  *
     * @param SaveSingleTaskForSaveArtExtensionRequest $request SaveSingleTaskForSaveArtExtensionRequest
     *
     * @return SaveSingleTaskForSaveArtExtensionResponse SaveSingleTaskForSaveArtExtensionResponse
     */
    public function saveSingleTaskForSaveArtExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForSaveArtExtensionWithOptions($request, $runtime);
    }

    /**
     * @summary 同步DnsSec记录
     *  *
     * @param SaveSingleTaskForSynchronizingDSRecordRequest $request SaveSingleTaskForSynchronizingDSRecordRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForSynchronizingDSRecordResponse SaveSingleTaskForSynchronizingDSRecordResponse
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
     * @summary 同步DnsSec记录
     *  *
     * @param SaveSingleTaskForSynchronizingDSRecordRequest $request SaveSingleTaskForSynchronizingDSRecordRequest
     *
     * @return SaveSingleTaskForSynchronizingDSRecordResponse SaveSingleTaskForSynchronizingDSRecordResponse
     */
    public function saveSingleTaskForSynchronizingDSRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForSynchronizingDSRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 保存同步dns服务器的任务请求
     *  *
     * @param SaveSingleTaskForSynchronizingDnsHostRequest $request SaveSingleTaskForSynchronizingDnsHostRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForSynchronizingDnsHostResponse SaveSingleTaskForSynchronizingDnsHostResponse
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
     * @summary 保存同步dns服务器的任务请求
     *  *
     * @param SaveSingleTaskForSynchronizingDnsHostRequest $request SaveSingleTaskForSynchronizingDnsHostRequest
     *
     * @return SaveSingleTaskForSynchronizingDnsHostResponse SaveSingleTaskForSynchronizingDnsHostResponse
     */
    public function saveSingleTaskForSynchronizingDnsHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForSynchronizingDnsHostWithOptions($request, $runtime);
    }

    /**
     * @summary 保存单个任务-开启/关闭禁止转移锁
     *  *
     * @param SaveSingleTaskForTransferProhibitionLockRequest $request SaveSingleTaskForTransferProhibitionLockRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForTransferProhibitionLockResponse SaveSingleTaskForTransferProhibitionLockResponse
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
     * @summary 保存单个任务-开启/关闭禁止转移锁
     *  *
     * @param SaveSingleTaskForTransferProhibitionLockRequest $request SaveSingleTaskForTransferProhibitionLockRequest
     *
     * @return SaveSingleTaskForTransferProhibitionLockResponse SaveSingleTaskForTransferProhibitionLockResponse
     */
    public function saveSingleTaskForTransferProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForTransferProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @summary 保存单个任务-开启/关闭信息安全锁
     *  *
     * @param SaveSingleTaskForUpdateProhibitionLockRequest $request SaveSingleTaskForUpdateProhibitionLockRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForUpdateProhibitionLockResponse SaveSingleTaskForUpdateProhibitionLockResponse
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
     * @summary 保存单个任务-开启/关闭信息安全锁
     *  *
     * @param SaveSingleTaskForUpdateProhibitionLockRequest $request SaveSingleTaskForUpdateProhibitionLockRequest
     *
     * @return SaveSingleTaskForUpdateProhibitionLockResponse SaveSingleTaskForUpdateProhibitionLockResponse
     */
    public function saveSingleTaskForUpdateProhibitionLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForUpdateProhibitionLockWithOptions($request, $runtime);
    }

    /**
     * @summary 保存修改联系人的任务
     *  *
     * @param SaveSingleTaskForUpdatingContactInfoRequest $request SaveSingleTaskForUpdatingContactInfoRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSingleTaskForUpdatingContactInfoResponse SaveSingleTaskForUpdatingContactInfoResponse
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
     * @summary 保存修改联系人的任务
     *  *
     * @param SaveSingleTaskForUpdatingContactInfoRequest $request SaveSingleTaskForUpdatingContactInfoRequest
     *
     * @return SaveSingleTaskForUpdatingContactInfoResponse SaveSingleTaskForUpdatingContactInfoResponse
     */
    public function saveSingleTaskForUpdatingContactInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForUpdatingContactInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 保存删除域名的任务
     *  *
     * @param SaveTaskForSubmittingDomainDeleteRequest $request SaveTaskForSubmittingDomainDeleteRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTaskForSubmittingDomainDeleteResponse SaveTaskForSubmittingDomainDeleteResponse
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
     * @summary 保存删除域名的任务
     *  *
     * @param SaveTaskForSubmittingDomainDeleteRequest $request SaveTaskForSubmittingDomainDeleteRequest
     *
     * @return SaveTaskForSubmittingDomainDeleteResponse SaveTaskForSubmittingDomainDeleteResponse
     */
    public function saveTaskForSubmittingDomainDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainDeleteWithOptions($request, $runtime);
    }

    /**
     * @summary 批量提交域名资料
     *  *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest $request SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest
     * @param RuntimeOptions                                                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
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
     * @summary 批量提交域名资料
     *  *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest $request SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByIdentityCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary 根据模板保存域名的实名认证信息
     *  *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest $request SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest
     * @param RuntimeOptions                                                              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
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
     * @summary 根据模板保存域名的实名认证信息
     *  *
     * @param SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest $request SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse
     */
    public function saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDWithOptions($request, $runtime);
    }

    /**
     * @summary 根据联系人信息批量修改注册联系人信息
     *  *
     * @param SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest $request SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest
     * @param RuntimeOptions                                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
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
     * @summary 根据联系人信息批量修改注册联系人信息
     *  *
     * @param SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest $request SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest
     *
     * @return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByIdentityCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForUpdatingRegistrantInfoByIdentityCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary 根据模板批量修改注册联系人
     *  *
     * @param SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest $request SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest
     * @param RuntimeOptions                                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
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
     * @summary 根据模板批量修改注册联系人
     *  *
     * @param SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest $request SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest
     *
     * @return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse
     */
    public function saveTaskForUpdatingRegistrantInfoByRegistrantProfileID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForUpdatingRegistrantInfoByRegistrantProfileIDWithOptions($request, $runtime);
    }

    /**
     * @summary Traverses domain names.
     *  *
     * @description If you have a large number of domain names, a slow response may occur when you call an API operation to query domain names. In this case, you can call this operation to query domain names more quickly. When you call this operation for the first time, specify the request parameters except ScrollId. A scroll ID is returned without other data. In the second request, use the scroll ID obtained from the previous response. In subsequent requests, the newly specified request parameters do not take effect, and the request parameters that are specified in the first request prevail.
     *  *
     * @param ScrollDomainListRequest $request ScrollDomainListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ScrollDomainListResponse ScrollDomainListResponse
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
     * @summary Traverses domain names.
     *  *
     * @description If you have a large number of domain names, a slow response may occur when you call an API operation to query domain names. In this case, you can call this operation to query domain names more quickly. When you call this operation for the first time, specify the request parameters except ScrollId. A scroll ID is returned without other data. In the second request, use the scroll ID obtained from the previous response. In subsequent requests, the newly specified request parameters do not take effect, and the request parameters that are specified in the first request prevail.
     *  *
     * @param ScrollDomainListRequest $request ScrollDomainListRequest
     *
     * @return ScrollDomainListResponse ScrollDomainListResponse
     */
    public function scrollDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scrollDomainListWithOptions($request, $runtime);
    }

    /**
     * @summary 设置默认模板
     *  *
     * @param SetDefaultRegistrantProfileRequest $request SetDefaultRegistrantProfileRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultRegistrantProfileResponse SetDefaultRegistrantProfileResponse
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
     * @summary 设置默认模板
     *  *
     * @param SetDefaultRegistrantProfileRequest $request SetDefaultRegistrantProfileRequest
     *
     * @return SetDefaultRegistrantProfileResponse SetDefaultRegistrantProfileResponse
     */
    public function setDefaultRegistrantProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultRegistrantProfileWithOptions($request, $runtime);
    }

    /**
     * @summary 域名设置自动续费
     *  *
     * @param SetupDomainAutoRenewRequest $request SetupDomainAutoRenewRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetupDomainAutoRenewResponse SetupDomainAutoRenewResponse
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
     * @summary 域名设置自动续费
     *  *
     * @param SetupDomainAutoRenewRequest $request SetupDomainAutoRenewRequest
     *
     * @return SetupDomainAutoRenewResponse SetupDomainAutoRenewResponse
     */
    public function setupDomainAutoRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupDomainAutoRenewWithOptions($request, $runtime);
    }

    /**
     * @summary 域名特殊业务提交资料
     *  *
     * @param SubmitDomainSpecialBizCredentialsRequest $request SubmitDomainSpecialBizCredentialsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDomainSpecialBizCredentialsResponse SubmitDomainSpecialBizCredentialsResponse
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
     * @summary 域名特殊业务提交资料
     *  *
     * @param SubmitDomainSpecialBizCredentialsRequest $request SubmitDomainSpecialBizCredentialsRequest
     *
     * @return SubmitDomainSpecialBizCredentialsResponse SubmitDomainSpecialBizCredentialsResponse
     */
    public function submitDomainSpecialBizCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDomainSpecialBizCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary 提交邮箱验证
     *  *
     * @param SubmitEmailVerificationRequest $request SubmitEmailVerificationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitEmailVerificationResponse SubmitEmailVerificationResponse
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
     * @summary 提交邮箱验证
     *  *
     * @param SubmitEmailVerificationRequest $request SubmitEmailVerificationRequest
     *
     * @return SubmitEmailVerificationResponse SubmitEmailVerificationResponse
     */
    public function submitEmailVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEmailVerificationWithOptions($request, $runtime);
    }

    /**
     * @summary 提交申请信息
     *  *
     * @param SubmitOperationAuditInfoRequest $request SubmitOperationAuditInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitOperationAuditInfoResponse SubmitOperationAuditInfoResponse
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
     * @summary 提交申请信息
     *  *
     * @param SubmitOperationAuditInfoRequest $request SubmitOperationAuditInfoRequest
     *
     * @return SubmitOperationAuditInfoResponse SubmitOperationAuditInfoResponse
     */
    public function submitOperationAuditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOperationAuditInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 提交证件资料
     *  *
     * @param SubmitOperationCredentialsRequest $request SubmitOperationCredentialsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitOperationCredentialsResponse SubmitOperationCredentialsResponse
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
     * @summary 提交证件资料
     *  *
     * @param SubmitOperationCredentialsRequest $request SubmitOperationCredentialsRequest
     *
     * @return SubmitOperationCredentialsResponse SubmitOperationCredentialsResponse
     */
    public function submitOperationCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOperationCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param TransferInCheckMailTokenRequest $request TransferInCheckMailTokenRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferInCheckMailTokenResponse TransferInCheckMailTokenResponse
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
     * @param TransferInCheckMailTokenRequest $request TransferInCheckMailTokenRequest
     *
     * @return TransferInCheckMailTokenResponse TransferInCheckMailTokenResponse
     */
    public function transferInCheckMailToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInCheckMailTokenWithOptions($request, $runtime);
    }

    /**
     * @param TransferInReenterTransferAuthorizationCodeRequest $request TransferInReenterTransferAuthorizationCodeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferInReenterTransferAuthorizationCodeResponse TransferInReenterTransferAuthorizationCodeResponse
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
     * @param TransferInReenterTransferAuthorizationCodeRequest $request TransferInReenterTransferAuthorizationCodeRequest
     *
     * @return TransferInReenterTransferAuthorizationCodeResponse TransferInReenterTransferAuthorizationCodeResponse
     */
    public function transferInReenterTransferAuthorizationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInReenterTransferAuthorizationCodeWithOptions($request, $runtime);
    }

    /**
     * @param TransferInRefetchWhoisEmailRequest $request TransferInRefetchWhoisEmailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferInRefetchWhoisEmailResponse TransferInRefetchWhoisEmailResponse
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
     * @param TransferInRefetchWhoisEmailRequest $request TransferInRefetchWhoisEmailRequest
     *
     * @return TransferInRefetchWhoisEmailResponse TransferInRefetchWhoisEmailResponse
     */
    public function transferInRefetchWhoisEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInRefetchWhoisEmailWithOptions($request, $runtime);
    }

    /**
     * @param TransferInResendMailTokenRequest $request TransferInResendMailTokenRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferInResendMailTokenResponse TransferInResendMailTokenResponse
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
     * @param TransferInResendMailTokenRequest $request TransferInResendMailTokenRequest
     *
     * @return TransferInResendMailTokenResponse TransferInResendMailTokenResponse
     */
    public function transferInResendMailToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInResendMailTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 向分组设置域名
     *  *
     * @param UpdateDomainToDomainGroupRequest $request UpdateDomainToDomainGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainToDomainGroupResponse UpdateDomainToDomainGroupResponse
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
     * @summary 向分组设置域名
     *  *
     * @param UpdateDomainToDomainGroupRequest $request UpdateDomainToDomainGroupRequest
     *
     * @return UpdateDomainToDomainGroupResponse UpdateDomainToDomainGroupResponse
     */
    public function updateDomainToDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainToDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 校验联系人信息
     *  *
     * @param VerifyContactFieldRequest $request VerifyContactFieldRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyContactFieldResponse VerifyContactFieldResponse
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
     * @summary 校验联系人信息
     *  *
     * @param VerifyContactFieldRequest $request VerifyContactFieldRequest
     *
     * @return VerifyContactFieldResponse VerifyContactFieldResponse
     */
    public function verifyContactField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyContactFieldWithOptions($request, $runtime);
    }

    /**
     * @summary 验证邮箱Token
     *  *
     * @param VerifyEmailRequest $request VerifyEmailRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyEmailResponse VerifyEmailResponse
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
     * @summary 验证邮箱Token
     *  *
     * @param VerifyEmailRequest $request VerifyEmailRequest
     *
     * @return VerifyEmailResponse VerifyEmailResponse
     */
    public function verifyEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyEmailWithOptions($request, $runtime);
    }
}
