<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\DomainKnowledgeRetrieveRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\DomainKnowledgeRetrieveResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceResponse;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceShrinkRequest;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferOutByAuthorizationCodeRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferOutByAuthorizationCodeResponse;
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
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForTransferOutByAuthorizationCodeRequest;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveSingleTaskForTransferOutByAuthorizationCodeResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Domain extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'domain.aliyuncs.com',
            'ap-southeast-1' => 'domain-intl.aliyuncs.com',
        ];
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Invoke AcknowledgeTaskResult to confirm the task detail result.
     *
     * @remarks
     * After the task detail result is confirmed, it can no longer be queried from the [PollTaskResult](https://help.aliyun.com/document_detail/69361.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke AcknowledgeTaskResult to confirm the task detail result.
     *
     * @remarks
     * After the task detail result is confirmed, it can no longer be queried from the [PollTaskResult](https://help.aliyun.com/document_detail/69361.html) API.
     *
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
     * You can invoke BatchFuzzyMatchDomainSensitiveWord to batch check whether domain names contain sensitive words.
     *
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
            'version' => '2018-01-29',
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
     * You can invoke BatchFuzzyMatchDomainSensitiveWord to batch check whether domain names contain sensitive words.
     *
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
     * Cancels real-name verification for a domain name.
     *
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
            'version' => '2018-01-29',
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
     * Cancels real-name verification for a domain name.
     *
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
     * Invoke the CancelOperationAudit API to cancel a self-service operation audit.
     *
     * @param request - CancelOperationAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOperationAuditResponse
     *
     * @param CancelOperationAuditRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelOperationAuditResponse
     */
    public function cancelOperationAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditRecordId) {
            @$query['AuditRecordId'] = $request->auditRecordId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelOperationAudit',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelOperationAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the CancelOperationAudit API to cancel a self-service operation audit.
     *
     * @param request - CancelOperationAuditRequest
     *
     * @returns CancelOperationAuditResponse
     *
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
     * Cancel the qualification verification for ".restaurant" and ".trademark" domain names.
     *
     * @param request - CancelQualificationVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelQualificationVerificationResponse
     *
     * @param CancelQualificationVerificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CancelQualificationVerificationResponse
     */
    public function cancelQualificationVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->qualificationType) {
            @$query['QualificationType'] = $request->qualificationType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelQualificationVerification',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelQualificationVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel the qualification verification for ".restaurant" and ".trademark" domain names.
     *
     * @param request - CancelQualificationVerificationRequest
     *
     * @returns CancelQualificationVerificationResponse
     *
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
     * Invoke CancelTask to cancel an ongoing job.
     *
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
            'version' => '2018-01-29',
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
     * Invoke CancelTask to cancel an ongoing job.
     *
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
     * Modify the resource group to which a domain name belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the resource group to which a domain name belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
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
     * Invoke the CheckDomain API to check whether a domain name can be registered.
     *
     * @remarks
     * For the legitimacy requirements of domain names, see [Domain Name Legitimacy](https://help.aliyun.com/document_detail/67788.html).
     * > The CheckDomain API has a frequency limit. The combined queries per second (QPS) limit for an Alibaba Cloud account and its RAM users is 10, and the total QPS limit for this API is 100.
     *
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDomain',
            'version' => '2018-01-29',
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
     * Invoke the CheckDomain API to check whether a domain name can be registered.
     *
     * @remarks
     * For the legitimacy requirements of domain names, see [Domain Name Legitimacy](https://help.aliyun.com/document_detail/67788.html).
     * > The CheckDomain API has a frequency limit. The combined queries per second (QPS) limit for an Alibaba Cloud account and its RAM users is 10, and the total QPS limit for this API is 100.
     *
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
     * Query the trademark keyword key based on the provided domain name.
     *
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
            'version' => '2018-01-29',
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
     * Query the trademark keyword key based on the provided domain name.
     *
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
     * Calls CheckIntlFixPriceDomainStatus to check the status and price of an international fixed-price domain name that is on sale.
     *
     * @param request - CheckIntlFixPriceDomainStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckIntlFixPriceDomainStatusResponse
     *
     * @param CheckIntlFixPriceDomainStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CheckIntlFixPriceDomainStatusResponse
     */
    public function checkIntlFixPriceDomainStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckIntlFixPriceDomainStatus',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckIntlFixPriceDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls CheckIntlFixPriceDomainStatus to check the status and price of an international fixed-price domain name that is on sale.
     *
     * @param request - CheckIntlFixPriceDomainStatusRequest
     *
     * @returns CheckIntlFixPriceDomainStatusResponse
     *
     * @param CheckIntlFixPriceDomainStatusRequest $request
     *
     * @return CheckIntlFixPriceDomainStatusResponse
     */
    public function checkIntlFixPriceDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkIntlFixPriceDomainStatusWithOptions($request, $runtime);
    }

    /**
     * Detects the maximum number of years for which a domain name can be purchased or renewed.
     *
     * @param request - CheckMaxYearOfServerLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckMaxYearOfServerLockResponse
     *
     * @param CheckMaxYearOfServerLockRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckMaxYearOfServerLockResponse
     */
    public function checkMaxYearOfServerLockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkAction) {
            @$query['CheckAction'] = $request->checkAction;
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
            'action' => 'CheckMaxYearOfServerLock',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckMaxYearOfServerLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects the maximum number of years for which a domain name can be purchased or renewed.
     *
     * @param request - CheckMaxYearOfServerLockRequest
     *
     * @returns CheckMaxYearOfServerLockResponse
     *
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
     * Checks whether the domain name has a registry lock service request with the **Processing** status at the domain name registry.
     *
     * @param request - CheckProcessingServerLockApplyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckProcessingServerLockApplyResponse
     *
     * @param CheckProcessingServerLockApplyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CheckProcessingServerLockApplyResponse
     */
    public function checkProcessingServerLockApplyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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
            'action' => 'CheckProcessingServerLockApply',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckProcessingServerLockApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the domain name has a registry lock service request with the **Processing** status at the domain name registry.
     *
     * @param request - CheckProcessingServerLockApplyRequest
     *
     * @returns CheckProcessingServerLockApplyResponse
     *
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
     * Invoke the CheckTransferInFeasibility API to validate whether a domain name can be transferred in.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the CheckTransferInFeasibility API to validate whether a domain name can be transferred in.
     *
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
     * Invoke ConfirmTransferInEmail to confirm the transfer-in mailbox.
     *
     * @remarks
     * Directly confirm the transfer-in mailbox.
     *
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
            'version' => '2018-01-29',
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
     * Invoke ConfirmTransferInEmail to confirm the transfer-in mailbox.
     *
     * @remarks
     * Directly confirm the transfer-in mailbox.
     *
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
     * Creates an international fixed-price domain name order by calling CreateIntlFixedPriceDomainOrder.
     *
     * @param request - CreateIntlFixedPriceDomainOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIntlFixedPriceDomainOrderResponse
     *
     * @param CreateIntlFixedPriceDomainOrderRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateIntlFixedPriceDomainOrderResponse
     */
    public function createIntlFixedPriceDomainOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->expectedPrice) {
            @$query['ExpectedPrice'] = $request->expectedPrice;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIntlFixedPriceDomainOrder',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIntlFixedPriceDomainOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an international fixed-price domain name order by calling CreateIntlFixedPriceDomainOrder.
     *
     * @param request - CreateIntlFixedPriceDomainOrderRequest
     *
     * @returns CreateIntlFixedPriceDomainOrderResponse
     *
     * @param CreateIntlFixedPriceDomainOrderRequest $request
     *
     * @return CreateIntlFixedPriceDomainOrderResponse
     */
    public function createIntlFixedPriceDomainOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntlFixedPriceDomainOrderWithOptions($request, $runtime);
    }

    /**
     * Batch delete domain contact templates.
     *
     * @param request - DeleteContactTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactTemplatesResponse
     *
     * @param DeleteContactTemplatesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContactTemplatesResponse
     */
    public function deleteContactTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->registrantProfileIds) {
            @$query['RegistrantProfileIds'] = $request->registrantProfileIds;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactTemplates',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch delete domain contact templates.
     *
     * @param request - DeleteContactTemplatesRequest
     *
     * @returns DeleteContactTemplatesResponse
     *
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
     * Deleting a group containing more than 1,000 domain names is an asynchronous procedure. You must wait for the system to process the request.
     *
     * @param request - DeleteDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainGroupResponse
     *
     * @param DeleteDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainGroupId) {
            @$query['DomainGroupId'] = $request->domainGroupId;
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
            'action' => 'DeleteDomainGroup',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deleting a group containing more than 1,000 domain names is an asynchronous procedure. You must wait for the system to process the request.
     *
     * @param request - DeleteDomainGroupRequest
     *
     * @returns DeleteDomainGroupResponse
     *
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
     * Invoke the DeleteEmailVerification API to delete an email address that has passed verification.
     *
     * @remarks
     * > If you want to use the email address again after deletion, you must complete email verification again.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the DeleteEmailVerification API to delete an email address that has passed verification.
     *
     * @remarks
     * > If you want to use the email address again after deletion, you must complete email verification again.
     *
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
     * Invoke the DeleteRegistrantProfile API to delete a specified domain name registrant profile.
     *
     * @remarks
     * > If the API call succeeds, the System immediately deletes the corresponding domain name registrant profile.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the DeleteRegistrantProfile API to delete a specified domain name registrant profile.
     *
     * @remarks
     * > If the API call succeeds, the System immediately deletes the corresponding domain name registrant profile.
     *
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
     * 域名知识库检索.
     *
     * @param request - DomainKnowledgeRetrieveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DomainKnowledgeRetrieveResponse
     *
     * @param DomainKnowledgeRetrieveRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DomainKnowledgeRetrieveResponse
     */
    public function domainKnowledgeRetrieveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalTopN) {
            @$query['GlobalTopN'] = $request->globalTopN;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->site) {
            @$query['Site'] = $request->site;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DomainKnowledgeRetrieve',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DomainKnowledgeRetrieveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 域名知识库检索.
     *
     * @param request - DomainKnowledgeRetrieveRequest
     *
     * @returns DomainKnowledgeRetrieveResponse
     *
     * @param DomainKnowledgeRetrieveRequest $request
     *
     * @return DomainKnowledgeRetrieveResponse
     */
    public function domainKnowledgeRetrieve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->domainKnowledgeRetrieveWithOptions($request, $runtime);
    }

    /**
     * Cancel the special business process for a domain name.
     *
     * @param request - DomainSpecialBizCancelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DomainSpecialBizCancelResponse
     *
     * @param DomainSpecialBizCancelRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DomainSpecialBizCancelResponse
     */
    public function domainSpecialBizCancelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DomainSpecialBizCancel',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DomainSpecialBizCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel the special business process for a domain name.
     *
     * @param request - DomainSpecialBizCancelRequest
     *
     * @returns DomainSpecialBizCancelResponse
     *
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
     * 邮箱验证通过.
     *
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
            'version' => '2018-01-29',
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
     * 邮箱验证通过.
     *
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
     * Invoke FuzzyMatchDomainSensitiveWord to check whether a domain name contains sensitive words.
     *
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
            'version' => '2018-01-29',
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
     * Invoke FuzzyMatchDomainSensitiveWord to check whether a domain name contains sensitive words.
     *
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
     * Queries the list of domain names for fixed-price orders at the international site (alibabacloud.com).
     *
     * @param request - GetIntlFixPriceDomainListUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntlFixPriceDomainListUrlResponse
     *
     * @param GetIntlFixPriceDomainListUrlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetIntlFixPriceDomainListUrlResponse
     */
    public function getIntlFixPriceDomainListUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listDate) {
            @$query['ListDate'] = $request->listDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIntlFixPriceDomainListUrl',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIntlFixPriceDomainListUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of domain names for fixed-price orders at the international site (alibabacloud.com).
     *
     * @param request - GetIntlFixPriceDomainListUrlRequest
     *
     * @returns GetIntlFixPriceDomainListUrlResponse
     *
     * @param GetIntlFixPriceDomainListUrlRequest $request
     *
     * @return GetIntlFixPriceDomainListUrlResponse
     */
    public function getIntlFixPriceDomainListUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntlFixPriceDomainListUrlWithOptions($request, $runtime);
    }

    /**
     * Invoke GetOperationOssUploadPolicy to obtain the storage information for review materials.
     *
     * @param request - GetOperationOssUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOperationOssUploadPolicyResponse
     *
     * @param GetOperationOssUploadPolicyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetOperationOssUploadPolicyResponse
     */
    public function getOperationOssUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditType) {
            @$query['AuditType'] = $request->auditType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOperationOssUploadPolicy',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOperationOssUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke GetOperationOssUploadPolicy to obtain the storage information for review materials.
     *
     * @param request - GetOperationOssUploadPolicyRequest
     *
     * @returns GetOperationOssUploadPolicyResponse
     *
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
     * Obtain the authorization policy corresponding to the ".restaurant" and ".trademark" domain names.
     *
     * @param request - GetQualificationUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualificationUploadPolicyResponse
     *
     * @param GetQualificationUploadPolicyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetQualificationUploadPolicyResponse
     */
    public function getQualificationUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'GetQualificationUploadPolicy',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualificationUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the authorization policy corresponding to the ".restaurant" and ".trademark" domain names.
     *
     * @param request - GetQualificationUploadPolicyRequest
     *
     * @returns GetQualificationUploadPolicyResponse
     *
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
     * Invoke the ListEmailVerification API to query the email verification list.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the ListEmailVerification API to query the email verification list.
     *
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
     * Queries information about domain names for which registry locks are enabled.
     *
     * @param request - ListServerLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerLockResponse
     *
     * @param ListServerLockRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListServerLockResponse
     */
    public function listServerLockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginStartDate) {
            @$query['BeginStartDate'] = $request->beginStartDate;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endExpireDate) {
            @$query['EndExpireDate'] = $request->endExpireDate;
        }

        if (null !== $request->endStartDate) {
            @$query['EndStartDate'] = $request->endStartDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lockProductId) {
            @$query['LockProductId'] = $request->lockProductId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderByType) {
            @$query['OrderByType'] = $request->orderByType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serverLockStatus) {
            @$query['ServerLockStatus'] = $request->serverLockStatus;
        }

        if (null !== $request->startExpireDate) {
            @$query['StartExpireDate'] = $request->startExpireDate;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServerLock',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServerLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about domain names for which registry locks are enabled.
     *
     * @param request - ListServerLockRequest
     *
     * @returns ListServerLockResponse
     *
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
     * Call `LookupTmchNotice` to look up a trademark term from the TMCH by passing it as the `key`.
     *
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
            'version' => '2018-01-29',
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
     * Call `LookupTmchNotice` to look up a trademark term from the TMCH by passing it as the `key`.
     *
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
     * Invoke PollTaskResult to obtain a list of domain name job details that have completed execution (including jobs that succeeded or failed and exceeded the retry count).
     *
     * @remarks
     * This API must be used together with [AcknowledgeTaskResult](~~AcknowledgeTaskResult~~) to confirm job results. Once a job result is confirmed, the corresponding job record can no longer be queried through this API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke PollTaskResult to obtain a list of domain name job details that have completed execution (including jobs that succeeded or failed and exceeded the retry count).
     *
     * @remarks
     * This API must be used together with [AcknowledgeTaskResult](~~AcknowledgeTaskResult~~) to confirm job results. Once a job result is confirmed, the corresponding job record can no longer be queried through this API.
     *
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
     * Invoke QueryAdvancedDomainList to perform an advanced search of the domain name list.
     *
     * @remarks
     * Search for domain names under your current Alibaba Cloud account that meet specific conditions. A maximum of **5000** entries are displayed. If the result reaches **5000** entries, narrow your search scope.
     *
     * @param request - QueryAdvancedDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAdvancedDomainListResponse
     *
     * @param QueryAdvancedDomainListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAdvancedDomainListResponse
     */
    public function queryAdvancedDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainGroupId) {
            @$query['DomainGroupId'] = $request->domainGroupId;
        }

        if (null !== $request->domainNameSort) {
            @$query['DomainNameSort'] = $request->domainNameSort;
        }

        if (null !== $request->domainStatus) {
            @$query['DomainStatus'] = $request->domainStatus;
        }

        if (null !== $request->endExpirationDate) {
            @$query['EndExpirationDate'] = $request->endExpirationDate;
        }

        if (null !== $request->endLength) {
            @$query['EndLength'] = $request->endLength;
        }

        if (null !== $request->endRegistrationDate) {
            @$query['EndRegistrationDate'] = $request->endRegistrationDate;
        }

        if (null !== $request->excluded) {
            @$query['Excluded'] = $request->excluded;
        }

        if (null !== $request->excludedPrefix) {
            @$query['ExcludedPrefix'] = $request->excludedPrefix;
        }

        if (null !== $request->excludedSuffix) {
            @$query['ExcludedSuffix'] = $request->excludedSuffix;
        }

        if (null !== $request->expirationDateSort) {
            @$query['ExpirationDateSort'] = $request->expirationDateSort;
        }

        if (null !== $request->form) {
            @$query['Form'] = $request->form;
        }

        if (null !== $request->isPremiumDomain) {
            @$query['IsPremiumDomain'] = $request->isPremiumDomain;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->keyWordPrefix) {
            @$query['KeyWordPrefix'] = $request->keyWordPrefix;
        }

        if (null !== $request->keyWordSuffix) {
            @$query['KeyWordSuffix'] = $request->keyWordSuffix;
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

        if (null !== $request->productDomainType) {
            @$query['ProductDomainType'] = $request->productDomainType;
        }

        if (null !== $request->productDomainTypeSort) {
            @$query['ProductDomainTypeSort'] = $request->productDomainTypeSort;
        }

        if (null !== $request->registrationDateSort) {
            @$query['RegistrationDateSort'] = $request->registrationDateSort;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startExpirationDate) {
            @$query['StartExpirationDate'] = $request->startExpirationDate;
        }

        if (null !== $request->startLength) {
            @$query['StartLength'] = $request->startLength;
        }

        if (null !== $request->startRegistrationDate) {
            @$query['StartRegistrationDate'] = $request->startRegistrationDate;
        }

        if (null !== $request->suffixs) {
            @$query['Suffixs'] = $request->suffixs;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tradeType) {
            @$query['TradeType'] = $request->tradeType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAdvancedDomainList',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAdvancedDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke QueryAdvancedDomainList to perform an advanced search of the domain name list.
     *
     * @remarks
     * Search for domain names under your current Alibaba Cloud account that meet specific conditions. A maximum of **5000** entries are displayed. If the result reaches **5000** entries, narrow your search scope.
     *
     * @param request - QueryAdvancedDomainListRequest
     *
     * @returns QueryAdvancedDomainListResponse
     *
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
     * Invoke the QueryArtExtension API to query Art extension information.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the QueryArtExtension API to query Art extension information.
     *
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
     * Call QueryChangeLogList to get a paginated list of the operation logs.
     *
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
            'version' => '2018-01-29',
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
     * Call QueryChangeLogList to get a paginated list of the operation logs.
     *
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
     * Invoke QueryContactInfo to query domain contact information.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryContactInfo to query domain contact information.
     *
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
     * Invoke QueryDSRecord to query the DS records of a domain name.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryDSRecord to query the DS records of a domain name.
     *
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
     * Queries the DNS host for a domain name.
     *
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
            'version' => '2018-01-29',
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
     * Queries the DNS host for a domain name.
     *
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
     * Invoke the QueryDomainAdminDivision API to query Chinese administrative regions.
     *
     * @param request - QueryDomainAdminDivisionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainAdminDivisionResponse
     *
     * @param QueryDomainAdminDivisionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDomainAdminDivisionResponse
     */
    public function queryDomainAdminDivisionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'QueryDomainAdminDivision',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainAdminDivisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the QueryDomainAdminDivision API to query Chinese administrative regions.
     *
     * @param request - QueryDomainAdminDivisionRequest
     *
     * @returns QueryDomainAdminDivisionResponse
     *
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
     * Call `QueryDomainByDomainName` to retrieve information about a domain name.
     *
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
            'version' => '2018-01-29',
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
     * Call `QueryDomainByDomainName` to retrieve information about a domain name.
     *
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
     * Call `QueryDomainByInstanceId` to retrieve the basic information of a domain name by instance ID.
     *
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
            'version' => '2018-01-29',
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
     * Call `QueryDomainByInstanceId` to retrieve the basic information of a domain name by instance ID.
     *
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
     * Queries a list of domain groups.
     *
     * @param request - QueryDomainGroupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainGroupListResponse
     *
     * @param QueryDomainGroupListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDomainGroupListResponse
     */
    public function queryDomainGroupListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainGroupName) {
            @$query['DomainGroupName'] = $request->domainGroupName;
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

        if (null !== $request->showDeletingGroup) {
            @$query['ShowDeletingGroup'] = $request->showDeletingGroup;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainGroupList',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of domain groups.
     *
     * @param request - QueryDomainGroupListRequest
     *
     * @returns QueryDomainGroupListResponse
     *
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
     * Returns a paginated list of domain names in your account.
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
        if (null !== $request->autoRenewEnabled) {
            @$query['AutoRenewEnabled'] = $request->autoRenewEnabled;
        }

        if (null !== $request->ccompany) {
            @$query['Ccompany'] = $request->ccompany;
        }

        if (null !== $request->dns) {
            @$query['Dns'] = $request->dns;
        }

        if (null !== $request->domainGroupId) {
            @$query['DomainGroupId'] = $request->domainGroupId;
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

        if (null !== $request->registrar) {
            @$query['Registrar'] = $request->registrar;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startExpirationDate) {
            @$query['StartExpirationDate'] = $request->startExpirationDate;
        }

        if (null !== $request->startRegistrationDate) {
            @$query['StartRegistrationDate'] = $request->startRegistrationDate;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainList',
            'version' => '2018-01-29',
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
     * Returns a paginated list of domain names in your account.
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
     * Invoke QueryDomainRealNameVerificationInfo to query real-name verification information for a domain name.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryDomainRealNameVerificationInfo to query real-name verification information for a domain name.
     *
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
     * 实时查询域名价格
     *
     * @param tmpReq - QueryDomainRealTimePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainRealTimePriceResponse
     *
     * @param QueryDomainRealTimePriceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDomainRealTimePriceResponse
     */
    public function queryDomainRealTimePriceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryDomainRealTimePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->domainItem) {
            $request->domainItemShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->domainItem, 'DomainItem', 'json');
        }

        $query = [];
        if (null !== $request->currency) {
            @$query['Currency'] = $request->currency;
        }

        if (null !== $request->domainItemShrink) {
            @$query['DomainItem'] = $request->domainItemShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainRealTimePrice',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainRealTimePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实时查询域名价格
     *
     * @param request - QueryDomainRealTimePriceRequest
     *
     * @returns QueryDomainRealTimePriceResponse
     *
     * @param QueryDomainRealTimePriceRequest $request
     *
     * @return QueryDomainRealTimePriceResponse
     */
    public function queryDomainRealTimePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainRealTimePriceWithOptions($request, $runtime);
    }

    /**
     * Query domain name special business details.
     *
     * @param request - QueryDomainSpecialBizDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainSpecialBizDetailResponse
     *
     * @param QueryDomainSpecialBizDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDomainSpecialBizDetailResponse
     */
    public function queryDomainSpecialBizDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDomainSpecialBizDetail',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainSpecialBizDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query domain name special business details.
     *
     * @param request - QueryDomainSpecialBizDetailRequest
     *
     * @returns QueryDomainSpecialBizDetailResponse
     *
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
     * Query domain special business details by domain name.
     *
     * @param request - QueryDomainSpecialBizInfoByDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainSpecialBizInfoByDomainResponse
     *
     * @param QueryDomainSpecialBizInfoByDomainRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryDomainSpecialBizInfoByDomainResponse
     */
    public function queryDomainSpecialBizInfoByDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDomainSpecialBizInfoByDomain',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainSpecialBizInfoByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query domain special business details by domain name.
     *
     * @param request - QueryDomainSpecialBizInfoByDomainRequest
     *
     * @returns QueryDomainSpecialBizInfoByDomainResponse
     *
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
     * Queries the available domain name suffixes.
     *
     * @param request - QueryDomainSuffixRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainSuffixResponse
     *
     * @param QueryDomainSuffixRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDomainSuffixResponse
     */
    public function queryDomainSuffixWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'QueryDomainSuffix',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainSuffixResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available domain name suffixes.
     *
     * @param request - QueryDomainSuffixRequest
     *
     * @returns QueryDomainSuffixResponse
     *
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
     * Invoke the QueryEmailVerification API to query the email verification result.
     *
     * @param request - QueryEmailVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEmailVerificationResponse
     *
     * @param QueryEmailVerificationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryEmailVerificationResponse
     */
    public function queryEmailVerificationWithOptions($request, $runtime)
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
            'action' => 'QueryEmailVerification',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEmailVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the QueryEmailVerification API to query the email verification result.
     *
     * @param request - QueryEmailVerificationRequest
     *
     * @returns QueryEmailVerificationResponse
     *
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
     * Invoke the QueryEnsAssociation API to query the wallet address attached in the ENS system.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the QueryEnsAssociation API to query the wallet address attached in the ENS system.
     *
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
     * Query the reasons for real-name verification (including naming review) failure for a domain name.
     *
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
            'version' => '2018-01-29',
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
     * Query the reasons for real-name verification (including naming review) failure for a domain name.
     *
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
     * Invoke the QueryFailReasonForRegistrantProfileRealNameVerification API to query the reasons why identity verification for an information template failed the Review.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the QueryFailReasonForRegistrantProfileRealNameVerification API to query the reasons why identity verification for an information template failed the Review.
     *
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
     * Query the reasons for qualification verification failure for ".restaurant" and ".trademark" domain names.
     *
     * @param request - QueryFailingReasonListForQualificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFailingReasonListForQualificationResponse
     *
     * @param QueryFailingReasonListForQualificationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return QueryFailingReasonListForQualificationResponse
     */
    public function queryFailingReasonListForQualificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->qualificationType) {
            @$query['QualificationType'] = $request->qualificationType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFailingReasonListForQualification',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFailingReasonListForQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the reasons for qualification verification failure for ".restaurant" and ".trademark" domain names.
     *
     * @param request - QueryFailingReasonListForQualificationRequest
     *
     * @returns QueryFailingReasonListForQualificationResponse
     *
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
     * Queries the list of international fixed-price orders by calling QueryIntlFixedPriceOrderList.
     *
     * @param request - QueryIntlFixedPriceOrderListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIntlFixedPriceOrderListResponse
     *
     * @param QueryIntlFixedPriceOrderListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryIntlFixedPriceOrderListResponse
     */
    public function queryIntlFixedPriceOrderListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryIntlFixedPriceOrderList',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryIntlFixedPriceOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of international fixed-price orders by calling QueryIntlFixedPriceOrderList.
     *
     * @param request - QueryIntlFixedPriceOrderListRequest
     *
     * @returns QueryIntlFixedPriceOrderListResponse
     *
     * @param QueryIntlFixedPriceOrderListRequest $request
     *
     * @return QueryIntlFixedPriceOrderListResponse
     */
    public function queryIntlFixedPriceOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntlFixedPriceOrderListWithOptions($request, $runtime);
    }

    /**
     * Invoke QueryLocalEnsAssociation to query the ENS binding address recorded in the Alibaba Cloud system.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryLocalEnsAssociation to query the ENS binding address recorded in the Alibaba Cloud system.
     *
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
     * Invoke the QueryOperationAuditInfoDetail API to query the details of a self-service operation review record.
     *
     * @param request - QueryOperationAuditInfoDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOperationAuditInfoDetailResponse
     *
     * @param QueryOperationAuditInfoDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryOperationAuditInfoDetailResponse
     */
    public function queryOperationAuditInfoDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditRecordId) {
            @$query['AuditRecordId'] = $request->auditRecordId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOperationAuditInfoDetail',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOperationAuditInfoDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the QueryOperationAuditInfoDetail API to query the details of a self-service operation review record.
     *
     * @param request - QueryOperationAuditInfoDetailRequest
     *
     * @returns QueryOperationAuditInfoDetailResponse
     *
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
     * You can invoke QueryOperationAuditInfoList to query the list of review records for self-service operations.
     *
     * @param request - QueryOperationAuditInfoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOperationAuditInfoListResponse
     *
     * @param QueryOperationAuditInfoListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryOperationAuditInfoListResponse
     */
    public function queryOperationAuditInfoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->auditType) {
            @$query['AuditType'] = $request->auditType;
        }

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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOperationAuditInfoList',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOperationAuditInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can invoke QueryOperationAuditInfoList to query the list of review records for self-service operations.
     *
     * @param request - QueryOperationAuditInfoListRequest
     *
     * @returns QueryOperationAuditInfoListResponse
     *
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
     * Query the qualification verification details of ".restaurant" and ".trademark" domain names.
     *
     * @param request - QueryQualificationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryQualificationDetailResponse
     *
     * @param QueryQualificationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryQualificationDetailResponse
     */
    public function queryQualificationDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->qualificationType) {
            @$query['QualificationType'] = $request->qualificationType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryQualificationDetail',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryQualificationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the qualification verification details of ".restaurant" and ".trademark" domain names.
     *
     * @param request - QueryQualificationDetailRequest
     *
     * @returns QueryQualificationDetailResponse
     *
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
     * Invoke the QueryRegistrantProfileRealNameVerificationInfo API to query the identity verification documents of an information template.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the QueryRegistrantProfileRealNameVerificationInfo API to query the identity verification documents of an information template.
     *
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
     * Call the QueryRegistrantProfiles API to query the domain information templates in your account.
     *
     * @remarks
     * You can use optional parameters to refine your search for information templates. For example:
     * - If you know the information template ID, you can provide it to retrieve its details.
     * - If you do not know the information template ID, you can provide other parameters, such as the registrant name, to retrieve template details.
     *
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

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRegistrantProfiles',
            'version' => '2018-01-29',
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
     * Call the QueryRegistrantProfiles API to query the domain information templates in your account.
     *
     * @remarks
     * You can use optional parameters to refine your search for information templates. For example:
     * - If you know the information template ID, you can provide it to retrieve its details.
     * - If you do not know the information template ID, you can provide other parameters, such as the registrant name, to retrieve template details.
     *
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
     * Query the registry lock details of a domain name.
     *
     * @param request - QueryServerLockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryServerLockResponse
     *
     * @param QueryServerLockRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryServerLockResponse
     */
    public function queryServerLockWithOptions($request, $runtime)
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
            'action' => 'QueryServerLock',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryServerLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the registry lock details of a domain name.
     *
     * @param request - QueryServerLockRequest
     *
     * @returns QueryServerLockResponse
     *
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
     * You can invoke QueryTaskDetailHistory to perform a paged query on the detail history list of a specified domain name job.
     *
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
            'version' => '2018-01-29',
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
     * You can invoke QueryTaskDetailHistory to perform a paged query on the detail history list of a specified domain name job.
     *
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
     * Call `QueryTaskDetailList` to retrieve a paginated list of task details for a specified domain name.
     *
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
            'version' => '2018-01-29',
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
     * Call `QueryTaskDetailList` to retrieve a paginated list of task details for a specified domain name.
     *
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
     * You can invoke QueryTaskInfoHistory to perform a paged query of the domain name job history list under your account.
     *
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
            'version' => '2018-01-29',
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
     * You can invoke QueryTaskInfoHistory to perform a paged query of the domain name job history list under your account.
     *
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
     * Invoke QueryTaskList to perform a paged query of the domain name job list under your account.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryTaskList to perform a paged query of the domain name job list under your account.
     *
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
     * Invoke QueryTransferInByInstanceId to query domain name transfer-in information by instance ID.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryTransferInByInstanceId to query domain name transfer-in information by instance ID.
     *
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
     * Invoke QueryTransferInList to query the domain name transfer-in list.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryTransferInList to query the domain name transfer-in list.
     *
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
     * Invoke QueryTransferOutInfo to query domain name transfer-out information.
     *
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
            'version' => '2018-01-29',
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
     * Invoke QueryTransferOutInfo to query domain name transfer-out information.
     *
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
     * Invoke the RegistrantProfileRealNameVerification API to submit real-name verification for an information template.
     *
     * @remarks
     * - Identity verification document review takes 3 to 5 business days. After the authority completes the review, you can invoke the [QueryRegistrantProfiles](https://help.aliyun.com/document_detail/67701.html) API to query the identity verification result.
     * - If identity verification fails, refer to [Reasons for Identity Verification Failure and Solutions](https://help.aliyun.com/document_detail/35885.html) for troubleshooting and resolution.
     * > You must invoke this API using the POST method; otherwise, the invocation will fail. When using a software development kit (SDK), set the **method** parameter of the request object to **POST**.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the RegistrantProfileRealNameVerification API to submit real-name verification for an information template.
     *
     * @remarks
     * - Identity verification document review takes 3 to 5 business days. After the authority completes the review, you can invoke the [QueryRegistrantProfiles](https://help.aliyun.com/document_detail/67701.html) API to query the identity verification result.
     * - If identity verification fails, refer to [Reasons for Identity Verification Failure and Solutions](https://help.aliyun.com/document_detail/35885.html) for troubleshooting and resolution.
     * > You must invoke this API using the POST method; otherwise, the invocation will fail. When using a software development kit (SDK), set the **method** parameter of the request object to **POST**.
     *
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
     * Invoke the ResendEmailVerification API to resend the verification email.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the ResendEmailVerification API to resend the verification email.
     *
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
     * Reset the qualification verification status for .restaurant and .trademark domain names.
     *
     * @param request - ResetQualificationVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetQualificationVerificationResponse
     *
     * @param ResetQualificationVerificationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ResetQualificationVerificationResponse
     */
    public function resetQualificationVerificationWithOptions($request, $runtime)
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
            'action' => 'ResetQualificationVerification',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetQualificationVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reset the qualification verification status for .restaurant and .trademark domain names.
     *
     * @param request - ResetQualificationVerificationRequest
     *
     * @returns ResetQualificationVerificationResponse
     *
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
     * Invoke SaveBatchDomainRemark to batch save domain name remarks.
     *
     * @param request - SaveBatchDomainRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchDomainRemarkResponse
     *
     * @param SaveBatchDomainRemarkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveBatchDomainRemarkResponse
     */
    public function saveBatchDomainRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchDomainRemark',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchDomainRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke SaveBatchDomainRemark to batch save domain name remarks.
     *
     * @param request - SaveBatchDomainRemarkRequest
     *
     * @returns SaveBatchDomainRemarkResponse
     *
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
     * Submits a batch task to quickly transfer out domain names.
     *
     * @remarks
     * This is an asynchronous operation. To query the result of the task, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) operation.
     *
     * @param request - SaveBatchTaskForApplyQuickTransferOutOpenlyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
     *
     * @param SaveBatchTaskForApplyQuickTransferOutOpenlyRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveBatchTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
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
            'action' => 'SaveBatchTaskForApplyQuickTransferOutOpenly',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForApplyQuickTransferOutOpenlyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a batch task to quickly transfer out domain names.
     *
     * @remarks
     * This is an asynchronous operation. To query the result of the task, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) operation.
     *
     * @param request - SaveBatchTaskForApplyQuickTransferOutOpenlyRequest
     *
     * @returns SaveBatchTaskForApplyQuickTransferOutOpenlyResponse
     *
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
     * Submit a batch domain name registration job.
     *
     * @remarks
     * Starting March 1, 2022, you can register domain names only by using an identity-verified domain name registrant profile. Passing in registrant information directly during registration is no longer supported.
     * To register a domain name, you must provide the domain name you want to register, the registrant information, and DNS settings. You must associate the registrant information with a verified domain name registrant profile ID. For DNS, you can either use the default Alibaba Cloud DNS or specify a custom DNS.
     * > - The total number of domain names registered per week cannot exceed 100,000.
     * > - Payment for registration can only be made using the cash balance in your account; credit is not supported.
     * > - The format of request parameters for the **SaveBatchTaskForCreatingOrderActivate** API is OrderActivateParam.N.*, where N represents the index of the domain name being passed in.
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Submit a batch domain name registration job.
     *
     * @remarks
     * Starting March 1, 2022, you can register domain names only by using an identity-verified domain name registrant profile. Passing in registrant information directly during registration is no longer supported.
     * To register a domain name, you must provide the domain name you want to register, the registrant information, and DNS settings. You must associate the registrant information with a verified domain name registrant profile ID. For DNS, you can either use the default Alibaba Cloud DNS or specify a custom DNS.
     * > - The total number of domain names registered per week cannot exceed 100,000.
     * > - Payment for registration can only be made using the cash balance in your account; credit is not supported.
     * > - The format of request parameters for the **SaveBatchTaskForCreatingOrderActivate** API is OrderActivateParam.N.*, where N represents the index of the domain name being passed in.
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveBatchTaskForCreatingOrderRedeem API to submit a batch domain redeem job.
     *
     * @remarks
     * You can query the job execution result by using the [Query Task Detail List](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveBatchTaskForCreatingOrderRedeem API to submit a batch domain redeem job.
     *
     * @remarks
     * You can query the job execution result by using the [Query Task Detail List](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Submits a batch domain name renewal task.
     *
     * @remarks
     * To query the task result, call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) operation.
     *
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
            'version' => '2018-01-29',
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
     * Submits a batch domain name renewal task.
     *
     * @remarks
     * To query the task result, call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) operation.
     *
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
     * Invoke the SaveBatchTaskForCreatingOrderTransfer API to submit a batch domain name transfer-in job.
     *
     * @remarks
     * You can query the job execution result by invoking the QueryTaskDetailList API. For more information, see [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.htm?spm=a2c4g.11186623.0.0.5096389cgV6sng).
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveBatchTaskForCreatingOrderTransfer API to submit a batch domain name transfer-in job.
     *
     * @remarks
     * You can query the job execution result by invoking the QueryTaskDetailList API. For more information, see [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.htm?spm=a2c4g.11186623.0.0.5096389cgV6sng).
     *
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
     * Invoke the SaveBatchTaskForDomainNameProxyService API to submit a batch domain name proxy service job.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
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
            'action' => 'SaveBatchTaskForDomainNameProxyService',
            'version' => '2018-01-29',
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
     * Invoke the SaveBatchTaskForDomainNameProxyService API to submit a batch domain name proxy service job.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * 提交批量生成证书的任务
     *
     * @param tmpReq - SaveBatchTaskForGenerateDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForGenerateDomainCertificateResponse
     *
     * @param SaveBatchTaskForGenerateDomainCertificateRequest $tmpReq
     * @param RuntimeOptions                                   $runtime
     *
     * @return SaveBatchTaskForGenerateDomainCertificateResponse
     */
    public function saveBatchTaskForGenerateDomainCertificateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveBatchTaskForGenerateDomainCertificateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->domainNames) {
            $request->domainNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->domainNames, 'DomainNames', 'json');
        }

        $query = [];
        if (null !== $request->domainNamesShrink) {
            @$query['DomainNames'] = $request->domainNamesShrink;
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
            'action' => 'SaveBatchTaskForGenerateDomainCertificate',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForGenerateDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交批量生成证书的任务
     *
     * @param request - SaveBatchTaskForGenerateDomainCertificateRequest
     *
     * @returns SaveBatchTaskForGenerateDomainCertificateResponse
     *
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
     * Submits a batch task to modify the DNS servers for the specified domain names.
     *
     * @remarks
     * To query the task result, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
            'version' => '2018-01-29',
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
     * Submits a batch task to modify the DNS servers for the specified domain names.
     *
     * @remarks
     * To query the task result, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
     * Call the SaveBatchTaskForReserveDropListDomain API to submit a batch task for domain reservation.
     *
     * @remarks
     * To query task execution results, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
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
            'version' => '2018-01-29',
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
     * Call the SaveBatchTaskForReserveDropListDomain API to submit a batch task for domain reservation.
     *
     * @remarks
     * To query task execution results, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
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
     * Submits a batch transfer-out task for multiple domain names using their authorization codes.
     *
     * @remarks
     * This is an asynchronous operation. After submitting the task, call `QueryTaskDetailList` to check its status.
     *
     * @param request - SaveBatchTaskForTransferOutByAuthorizationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForTransferOutByAuthorizationCodeResponse
     *
     * @param SaveBatchTaskForTransferOutByAuthorizationCodeRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return SaveBatchTaskForTransferOutByAuthorizationCodeResponse
     */
    public function saveBatchTaskForTransferOutByAuthorizationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->transferOutParamList) {
            @$query['TransferOutParamList'] = $request->transferOutParamList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForTransferOutByAuthorizationCode',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForTransferOutByAuthorizationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a batch transfer-out task for multiple domain names using their authorization codes.
     *
     * @remarks
     * This is an asynchronous operation. After submitting the task, call `QueryTaskDetailList` to check its status.
     *
     * @param request - SaveBatchTaskForTransferOutByAuthorizationCodeRequest
     *
     * @returns SaveBatchTaskForTransferOutByAuthorizationCodeResponse
     *
     * @param SaveBatchTaskForTransferOutByAuthorizationCodeRequest $request
     *
     * @return SaveBatchTaskForTransferOutByAuthorizationCodeResponse
     */
    public function saveBatchTaskForTransferOutByAuthorizationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForTransferOutByAuthorizationCodeWithOptions($request, $runtime);
    }

    /**
     * Call SaveBatchTaskForTransferProhibitionLock to enable or disable the transfer prohibition lock for multiple domain names.
     *
     * @remarks
     * To check the result of the task, call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Call SaveBatchTaskForTransferProhibitionLock to enable or disable the transfer prohibition lock for multiple domain names.
     *
     * @remarks
     * To check the result of the task, call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Submits a batch task to enable or disable the update prohibition lock for one or more domain names.
     *
     * @remarks
     * To check the status of the task, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) operation.
     *
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
            'version' => '2018-01-29',
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
     * Submits a batch task to enable or disable the update prohibition lock for one or more domain names.
     *
     * @remarks
     * To check the status of the task, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) operation.
     *
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
     * Submit a domain information modification job with new contact information.
     *
     * @remarks
     * You can query the job execution result by using the [Query Task Detail List](https://help.aliyun.com/document_detail/67710.html) API.
     *
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

        if (null !== $request->zhAddress) {
            @$query['ZhAddress'] = $request->zhAddress;
        }

        if (null !== $request->zhCity) {
            @$query['ZhCity'] = $request->zhCity;
        }

        if (null !== $request->zhProvince) {
            @$query['ZhProvince'] = $request->zhProvince;
        }

        if (null !== $request->zhRegistrantName) {
            @$query['ZhRegistrantName'] = $request->zhRegistrantName;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBatchTaskForUpdatingContactInfoByNewContact',
            'version' => '2018-01-29',
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
     * Submit a domain information modification job with new contact information.
     *
     * @remarks
     * You can query the job execution result by using the [Query Task Detail List](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Call SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId to update the contact information of one or more domain names by using a registrant profile.
     *
     * @remarks
     * To check the task result, call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) operation.
     *
     * @param request - SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
     *
     * @param SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest $request
     * @param RuntimeOptions                                                  $runtime
     *
     * @return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
     */
    public function saveBatchTaskForUpdatingContactInfoByRegistrantProfileIdWithOptions($request, $runtime)
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
            'action' => 'SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId to update the contact information of one or more domain names by using a registrant profile.
     *
     * @remarks
     * To check the task result, call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) operation.
     *
     * @param request - SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest
     *
     * @returns SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse
     *
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
     * Invoke the SaveDomainGroup API to create or update a domain name group.
     *
     * @param request - SaveDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveDomainGroupResponse
     *
     * @param SaveDomainGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveDomainGroupResponse
     */
    public function saveDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainGroupId) {
            @$query['DomainGroupId'] = $request->domainGroupId;
        }

        if (null !== $request->domainGroupName) {
            @$query['DomainGroupName'] = $request->domainGroupName;
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
            'action' => 'SaveDomainGroup',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the SaveDomainGroup API to create or update a domain name group.
     *
     * @param request - SaveDomainGroupRequest
     *
     * @returns SaveDomainGroupResponse
     *
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
     * Invoke the SaveRegistrantProfile API to create or update a domain name registrant profile.
     *
     * @remarks
     * The domain name registrant profile contains registrant information. When you create or update a registrant profile, we recommend that you fill in all registrant information according to your actual situation and ensure consistency between the Chinese and English versions. To avoid faults during domain name registry review, we recommend entering all English registrant information in lowercase letters. For specific requirements, see the parameter descriptions below.
     *
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

        if (null !== $request->zhAddress) {
            @$query['ZhAddress'] = $request->zhAddress;
        }

        if (null !== $request->zhCity) {
            @$query['ZhCity'] = $request->zhCity;
        }

        if (null !== $request->zhProvince) {
            @$query['ZhProvince'] = $request->zhProvince;
        }

        if (null !== $request->zhRegistrantName) {
            @$query['ZhRegistrantName'] = $request->zhRegistrantName;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveRegistrantProfile',
            'version' => '2018-01-29',
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
     * Invoke the SaveRegistrantProfile API to create or update a domain name registrant profile.
     *
     * @remarks
     * The domain name registrant profile contains registrant information. When you create or update a registrant profile, we recommend that you fill in all registrant information according to your actual situation and ensure consistency between the Chinese and English versions. To avoid faults during domain name registry review, we recommend entering all English registrant information in lowercase letters. For specific requirements, see the parameter descriptions below.
     *
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
     * Invoke the SaveRegistrantProfileRealNameVerification API to save domain contact and certificate information.
     *
     * @param request - SaveRegistrantProfileRealNameVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveRegistrantProfileRealNameVerificationResponse
     *
     * @param SaveRegistrantProfileRealNameVerificationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return SaveRegistrantProfileRealNameVerificationResponse
     */
    public function saveRegistrantProfileRealNameVerificationWithOptions($request, $runtime)
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

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->identityCredential) {
            @$query['IdentityCredential'] = $request->identityCredential;
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

        if (null !== $request->zhAddress) {
            @$query['ZhAddress'] = $request->zhAddress;
        }

        if (null !== $request->zhCity) {
            @$query['ZhCity'] = $request->zhCity;
        }

        if (null !== $request->zhProvince) {
            @$query['ZhProvince'] = $request->zhProvince;
        }

        if (null !== $request->zhRegistrantName) {
            @$query['ZhRegistrantName'] = $request->zhRegistrantName;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveRegistrantProfileRealNameVerification',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveRegistrantProfileRealNameVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the SaveRegistrantProfileRealNameVerification API to save domain contact and certificate information.
     *
     * @param request - SaveRegistrantProfileRealNameVerificationRequest
     *
     * @returns SaveRegistrantProfileRealNameVerificationResponse
     *
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
     * Invoke the SaveSingleTaskForAddingDSRecord API to submit a job for creating a DS record.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForAddingDSRecord API to submit a job for creating a DS record.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
     * Submits a task for a quick transfer-out of a domain name.
     *
     * @remarks
     * This is an asynchronous operation. To check the task\\"s status, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
     * @param request - SaveSingleTaskForApplyQuickTransferOutOpenlyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
     *
     * @param SaveSingleTaskForApplyQuickTransferOutOpenlyRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
     */
    public function saveSingleTaskForApplyQuickTransferOutOpenlyWithOptions($request, $runtime)
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
            'action' => 'SaveSingleTaskForApplyQuickTransferOutOpenly',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForApplyQuickTransferOutOpenlyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a task for a quick transfer-out of a domain name.
     *
     * @remarks
     * This is an asynchronous operation. To check the task\\"s status, call the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
     * @param request - SaveSingleTaskForApplyQuickTransferOutOpenlyRequest
     *
     * @returns SaveSingleTaskForApplyQuickTransferOutOpenlyResponse
     *
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
     * 确认转出.
     *
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
            'version' => '2018-01-29',
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
     * 确认转出.
     *
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
     * Submit a job to attach an ENS address.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Submit a job to attach an ENS address.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForCancelingTransferIn API to submit a job to cancel a domain name transfer-in.
     *
     * @remarks
     * You can query the job execution result by invoking the QueryTaskDetailList API (~~67710~~).
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForCancelingTransferIn API to submit a job to cancel a domain name transfer-in.
     *
     * @remarks
     * You can query the job execution result by invoking the QueryTaskDetailList API (~~67710~~).
     *
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
     * Invoke the SaveSingleTaskForCancelingTransferOut API to submit a job to cancel a domain name transfer-out.
     *
     * @remarks
     * You can query the job execution result by invoking the QueryTaskDetailList API (~~67710~~).
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForCancelingTransferOut API to submit a job to cancel a domain name transfer-out.
     *
     * @remarks
     * You can query the job execution result by invoking the QueryTaskDetailList API (~~67710~~).
     *
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
     * Invoke SaveSingleTaskForCreatingDnsHost to submit a single job for creating a DNS host.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke SaveSingleTaskForCreatingDnsHost to submit a single job for creating a DNS host.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Submit a domain name registration job.
     *
     * @remarks
     * Starting March 1, 2022, you can register a domain name only by using a domain name registrant profile that has passed identity verification. Submitting registrant information directly during registration is no longer supported.
     * To register a domain name, you must provide the domain name you want to register, the registrant information, and DNS settings. You must associate the registrant information with a verified domain name registrant profile by specifying its ID. For DNS, you can either use Alibaba Cloud DNS by default or specify a Custom DNS.
     * You can query the job execution result by calling the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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

        if (null !== $request->zhAddress) {
            @$query['ZhAddress'] = $request->zhAddress;
        }

        if (null !== $request->zhCity) {
            @$query['ZhCity'] = $request->zhCity;
        }

        if (null !== $request->zhProvince) {
            @$query['ZhProvince'] = $request->zhProvince;
        }

        if (null !== $request->zhRegistrantName) {
            @$query['ZhRegistrantName'] = $request->zhRegistrantName;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForCreatingOrderActivate',
            'version' => '2018-01-29',
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
     * Submit a domain name registration job.
     *
     * @remarks
     * Starting March 1, 2022, you can register a domain name only by using a domain name registrant profile that has passed identity verification. Submitting registrant information directly during registration is no longer supported.
     * To register a domain name, you must provide the domain name you want to register, the registrant information, and DNS settings. You must associate the registrant information with a verified domain name registrant profile by specifying its ID. For DNS, you can either use Alibaba Cloud DNS by default or specify a Custom DNS.
     * You can query the job execution result by calling the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke SaveSingleTaskForCreatingOrderRedeem to submit a domain redeem job.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke SaveSingleTaskForCreatingOrderRedeem to submit a domain redeem job.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Use SaveSingleTaskForCreatingOrderRenew to submit a domain name renewal task.
     *
     * @remarks
     * To check the execution results of the task, call [QueryTaskDetailList](~~QueryTaskDetailList~~).
     *
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

        if (null !== $request->permitPremiumRenew) {
            @$query['PermitPremiumRenew'] = $request->permitPremiumRenew;
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
            'version' => '2018-01-29',
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
     * Use SaveSingleTaskForCreatingOrderRenew to submit a domain name renewal task.
     *
     * @remarks
     * To check the execution results of the task, call [QueryTaskDetailList](~~QueryTaskDetailList~~).
     *
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
     * Invoke the SaveSingleTaskForCreatingOrderTransfer API to submit a domain name transfer-in job.
     *
     * @remarks
     * You can query the task execution result by calling the QueryTaskDetailList API (~~67710~~).
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForCreatingOrderTransfer API to submit a domain name transfer-in job.
     *
     * @remarks
     * You can query the task execution result by calling the QueryTaskDetailList API (~~67710~~).
     *
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
     * Invoke the SaveSingleTaskForDeletingDSRecord API to submit a job for deleting a DS record.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForDeletingDSRecord API to submit a job for deleting a DS record.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
     * Invoke the SaveSingleTaskForDeletingDnsHost API to submit a job for deleting a DNS host.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForDeletingDnsHost API to submit a job for deleting a DNS host.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
     * Invoke the SaveSingleTaskForDisassociatingEns API to submit a job for detaching an ENS address.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForDisassociatingEns API to submit a job for detaching an ENS address.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForDomainNameProxyService API to submit a domain name proxy service job.
     *
     * @remarks
     * Invoke the SaveSingleTaskForDomainNameProxyService API to submit a domain name proxy service job.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForDomainNameProxyService API to submit a domain name proxy service job.
     *
     * @remarks
     * Invoke the SaveSingleTaskForDomainNameProxyService API to submit a domain name proxy service job.
     *
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
     * 提交生成域名证书任务
     *
     * @param request - SaveSingleTaskForGenerateDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForGenerateDomainCertificateResponse
     *
     * @param SaveSingleTaskForGenerateDomainCertificateRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return SaveSingleTaskForGenerateDomainCertificateResponse
     */
    public function saveSingleTaskForGenerateDomainCertificateWithOptions($request, $runtime)
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
            'action' => 'SaveSingleTaskForGenerateDomainCertificate',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForGenerateDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交生成域名证书任务
     *
     * @param request - SaveSingleTaskForGenerateDomainCertificateRequest
     *
     * @returns SaveSingleTaskForGenerateDomainCertificateResponse
     *
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
     * Invoke SaveSingleTaskForModifyingDSRecord to submit a job for modifying a DS record.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke SaveSingleTaskForModifyingDSRecord to submit a job for modifying a DS record.
     *
     * @remarks
     * You can query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForModifyingDnsHost API to submit a job for modifying a DNS host.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForModifyingDnsHost API to submit a job for modifying a DNS host.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForQueryingTransferAuthorizationCode API to submit a job for retrieving the domain name transfer password.
     *
     * @remarks
     * You can query the job execution result by calling the QueryTaskDetailList API (~~67710~~). The transfer password is returned in the TaskResult field of the corresponding job.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForQueryingTransferAuthorizationCode API to submit a job for retrieving the domain name transfer password.
     *
     * @remarks
     * You can query the job execution result by calling the QueryTaskDetailList API (~~67710~~). The transfer password is returned in the TaskResult field of the corresponding job.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForSaveArtExtension API to submit a job for creating Art extension information.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForSaveArtExtension API to submit a job for creating Art extension information.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForSynchronizingDSRecord API to submit a job for synchronizing a DS record.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForSynchronizingDSRecord API to submit a job for synchronizing a DS record.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForSynchronizingDnsHost API to submit a DNS host synchronization job. This is used to handle cases such as missing or inconsistent DNS hosts.
     *
     * @remarks
     * You can query the job execution result by using the [Query Task Detail List](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForSynchronizingDnsHost API to submit a DNS host synchronization job. This is used to handle cases such as missing or inconsistent DNS hosts.
     *
     * @remarks
     * You can query the job execution result by using the [Query Task Detail List](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Submits a single transfer-out task based on the transfer key of a domain name.
     *
     * @remarks
     * The task ID.
     *
     * @param request - SaveSingleTaskForTransferOutByAuthorizationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSingleTaskForTransferOutByAuthorizationCodeResponse
     *
     * @param SaveSingleTaskForTransferOutByAuthorizationCodeRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return SaveSingleTaskForTransferOutByAuthorizationCodeResponse
     */
    public function saveSingleTaskForTransferOutByAuthorizationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationCode) {
            @$query['AuthorizationCode'] = $request->authorizationCode;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSingleTaskForTransferOutByAuthorizationCode',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSingleTaskForTransferOutByAuthorizationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a single transfer-out task based on the transfer key of a domain name.
     *
     * @remarks
     * The task ID.
     *
     * @param request - SaveSingleTaskForTransferOutByAuthorizationCodeRequest
     *
     * @returns SaveSingleTaskForTransferOutByAuthorizationCodeResponse
     *
     * @param SaveSingleTaskForTransferOutByAuthorizationCodeRequest $request
     *
     * @return SaveSingleTaskForTransferOutByAuthorizationCodeResponse
     */
    public function saveSingleTaskForTransferOutByAuthorizationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSingleTaskForTransferOutByAuthorizationCodeWithOptions($request, $runtime);
    }

    /**
     * Invoke the SaveSingleTaskForTransferProhibitionLock API to submit a transfer prohibition lock job.
     *
     * @remarks
     * You can query the task execution result by using the [List Task Details](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForTransferProhibitionLock API to submit a transfer prohibition lock job.
     *
     * @remarks
     * You can query the task execution result by using the [List Task Details](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Invoke the SaveSingleTaskForUpdateProhibitionLock API to submit a task for the Update Prohibition Lock.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForUpdateProhibitionLock API to submit a task for the Update Prohibition Lock.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](~~QueryTaskDetailList~~) API.
     *
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
     * Invoke the SaveSingleTaskForUpdatingContactInfo API to submit a domain contact information update job.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SaveSingleTaskForUpdatingContactInfo API to submit a domain contact information update job.
     *
     * @remarks
     * You can query the job execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Submit a domain deletion job. Only whitelist users can access this API.
     *
     * @remarks
     * Invoke SaveTaskForSubmittingDomainDelete to submit a domain deletion job.
     *
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
            'version' => '2018-01-29',
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
     * Submit a domain deletion job. Only whitelist users can access this API.
     *
     * @remarks
     * Invoke SaveTaskForSubmittingDomainDelete to submit a domain deletion job.
     *
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
     * Submits real-name verification information for one or more domain names in bulk.
     *
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
            'version' => '2018-01-29',
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
     * Submits real-name verification information for one or more domain names in bulk.
     *
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
     * Creates a task to submit real-name verification information for a domain name by using a specified registrant profile.
     *
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
            'version' => '2018-01-29',
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
     * Creates a task to submit real-name verification information for a domain name by using a specified registrant profile.
     *
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
     * Invoke the SaveTaskForUpdatingRegistrantInfoByIdentityCredential API to submit a batch job for updating registrant contact information by providing contact details and required documentation. You must provide the corresponding documentation as required.
     *
     * @remarks
     * Query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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

        if (null !== $request->zhAddress) {
            @$query['ZhAddress'] = $request->zhAddress;
        }

        if (null !== $request->zhCity) {
            @$query['ZhCity'] = $request->zhCity;
        }

        if (null !== $request->zhProvince) {
            @$query['ZhProvince'] = $request->zhProvince;
        }

        if (null !== $request->zhRegistrantName) {
            @$query['ZhRegistrantName'] = $request->zhRegistrantName;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
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
            'version' => '2018-01-29',
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
     * Invoke the SaveTaskForUpdatingRegistrantInfoByIdentityCredential API to submit a batch job for updating registrant contact information by providing contact details and required documentation. You must provide the corresponding documentation as required.
     *
     * @remarks
     * Query the task execution result by using the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.html) API.
     *
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
     * Submits a task to update registrant information using a registrant profile ID.
     *
     * @remarks
     * Call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.htm?spm=a2c4g.11186623.0.0.33f47edeV0nkFx) API to check the task result. After a successful update, the registrant information for the domain name is updated to match the registrant profile. If the domain name requires real-name verification, it becomes verified.
     *
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
            'version' => '2018-01-29',
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
     * Submits a task to update registrant information using a registrant profile ID.
     *
     * @remarks
     * Call the [QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.htm?spm=a2c4g.11186623.0.0.33f47edeV0nkFx) API to check the task result. After a successful update, the registrant information for the domain name is updated to match the registrant profile. If the domain name requires real-name verification, it becomes verified.
     *
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
     * Traverses domain names.
     *
     * @remarks
     * If you have a large number of domain names, a slow response may occur when you call an API operation to query domain names. In this case, you can call this operation to query domain names more quickly. When you call this operation for the first time, specify the request parameters except ScrollId. A scroll ID is returned without other data. In the second request, use the scroll ID obtained from the previous response. In subsequent requests, the newly specified request parameters do not take effect, and the request parameters that are specified in the first request prevail.
     *
     * @param request - ScrollDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScrollDomainListResponse
     *
     * @param ScrollDomainListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ScrollDomainListResponse
     */
    public function scrollDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainGroupId) {
            @$query['DomainGroupId'] = $request->domainGroupId;
        }

        if (null !== $request->domainStatus) {
            @$query['DomainStatus'] = $request->domainStatus;
        }

        if (null !== $request->endExpirationDate) {
            @$query['EndExpirationDate'] = $request->endExpirationDate;
        }

        if (null !== $request->endLength) {
            @$query['EndLength'] = $request->endLength;
        }

        if (null !== $request->endRegistrationDate) {
            @$query['EndRegistrationDate'] = $request->endRegistrationDate;
        }

        if (null !== $request->excluded) {
            @$query['Excluded'] = $request->excluded;
        }

        if (null !== $request->excludedPrefix) {
            @$query['ExcludedPrefix'] = $request->excludedPrefix;
        }

        if (null !== $request->excludedSuffix) {
            @$query['ExcludedSuffix'] = $request->excludedSuffix;
        }

        if (null !== $request->form) {
            @$query['Form'] = $request->form;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->keyWordPrefix) {
            @$query['KeyWordPrefix'] = $request->keyWordPrefix;
        }

        if (null !== $request->keyWordSuffix) {
            @$query['KeyWordSuffix'] = $request->keyWordSuffix;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productDomainType) {
            @$query['ProductDomainType'] = $request->productDomainType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scrollId) {
            @$query['ScrollId'] = $request->scrollId;
        }

        if (null !== $request->startExpirationDate) {
            @$query['StartExpirationDate'] = $request->startExpirationDate;
        }

        if (null !== $request->startLength) {
            @$query['StartLength'] = $request->startLength;
        }

        if (null !== $request->startRegistrationDate) {
            @$query['StartRegistrationDate'] = $request->startRegistrationDate;
        }

        if (null !== $request->suffixs) {
            @$query['Suffixs'] = $request->suffixs;
        }

        if (null !== $request->tradeType) {
            @$query['TradeType'] = $request->tradeType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScrollDomainList',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScrollDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Traverses domain names.
     *
     * @remarks
     * If you have a large number of domain names, a slow response may occur when you call an API operation to query domain names. In this case, you can call this operation to query domain names more quickly. When you call this operation for the first time, specify the request parameters except ScrollId. A scroll ID is returned without other data. In the second request, use the scroll ID obtained from the previous response. In subsequent requests, the newly specified request parameters do not take effect, and the request parameters that are specified in the first request prevail.
     *
     * @param request - ScrollDomainListRequest
     *
     * @returns ScrollDomainListResponse
     *
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
     * Invoke the SetDefaultRegistrantProfile API to set the default contact template for a domain name.
     *
     * @param request - SetDefaultRegistrantProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultRegistrantProfileResponse
     *
     * @param SetDefaultRegistrantProfileRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDefaultRegistrantProfileResponse
     */
    public function setDefaultRegistrantProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'SetDefaultRegistrantProfile',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultRegistrantProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the SetDefaultRegistrantProfile API to set the default contact template for a domain name.
     *
     * @param request - SetDefaultRegistrantProfileRequest
     *
     * @returns SetDefaultRegistrantProfileResponse
     *
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
     * Use this operation to enable or disable auto-renewal for a domain.
     *
     * @remarks
     * This operation currently supports only domains on the Mainland China site.
     * **Before you call this operation, review the billing methods and [price](https://wanwang.aliyun.com/help/price.html?spm=5176.22941859.J_9989412330.10.68a51838KnzTeD) for the domain product.**
     *
     * @param request - SetupDomainAutoRenewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetupDomainAutoRenewResponse
     *
     * @param SetupDomainAutoRenewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetupDomainAutoRenewResponse
     */
    public function setupDomainAutoRenewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetupDomainAutoRenew',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetupDomainAutoRenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Use this operation to enable or disable auto-renewal for a domain.
     *
     * @remarks
     * This operation currently supports only domains on the Mainland China site.
     * **Before you call this operation, review the billing methods and [price](https://wanwang.aliyun.com/help/price.html?spm=5176.22941859.J_9989412330.10.68a51838KnzTeD) for the domain product.**
     *
     * @param request - SetupDomainAutoRenewRequest
     *
     * @returns SetupDomainAutoRenewResponse
     *
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
     * Submit documentation for special domain name services.
     *
     * @param request - SubmitDomainSpecialBizCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDomainSpecialBizCredentialsResponse
     *
     * @param SubmitDomainSpecialBizCredentialsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SubmitDomainSpecialBizCredentialsResponse
     */
    public function submitDomainSpecialBizCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->credentials) {
            @$body['Credentials'] = $request->credentials;
        }

        if (null !== $request->extend) {
            @$body['Extend'] = $request->extend;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitDomainSpecialBizCredentials',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDomainSpecialBizCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submit documentation for special domain name services.
     *
     * @param request - SubmitDomainSpecialBizCredentialsRequest
     *
     * @returns SubmitDomainSpecialBizCredentialsResponse
     *
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
     * Invoke the SubmitEmailVerification API to send an email verification message.
     *
     * @remarks
     * After receiving the verification email, you must log on to your mailbox and complete verification within 3 days. If the verification email has expired, you can invoke the [ResendEmailVerification](https://help.aliyun.com/document_detail/67734.html) API to resend the verification email.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the SubmitEmailVerification API to send an email verification message.
     *
     * @remarks
     * After receiving the verification email, you must log on to your mailbox and complete verification within 3 days. If the verification email has expired, you can invoke the [ResendEmailVerification](https://help.aliyun.com/document_detail/67734.html) API to resend the verification email.
     *
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
     * Invoke the SubmitOperationAuditInfo API to submit self-service business review information.
     *
     * @param request - SubmitOperationAuditInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitOperationAuditInfoResponse
     *
     * @param SubmitOperationAuditInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitOperationAuditInfoResponse
     */
    public function submitOperationAuditInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditInfo) {
            @$query['AuditInfo'] = $request->auditInfo;
        }

        if (null !== $request->auditType) {
            @$query['AuditType'] = $request->auditType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitOperationAuditInfo',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitOperationAuditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the SubmitOperationAuditInfo API to submit self-service business review information.
     *
     * @param request - SubmitOperationAuditInfoRequest
     *
     * @returns SubmitOperationAuditInfoResponse
     *
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
     * Invoke the SubmitOperationCredentials API to submit certificate materials for self-service operations pending review.
     *
     * @param request - SubmitOperationCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitOperationCredentialsResponse
     *
     * @param SubmitOperationCredentialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitOperationCredentialsResponse
     */
    public function submitOperationCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditRecordId) {
            @$query['AuditRecordId'] = $request->auditRecordId;
        }

        if (null !== $request->auditType) {
            @$query['AuditType'] = $request->auditType;
        }

        if (null !== $request->credentials) {
            @$query['Credentials'] = $request->credentials;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regType) {
            @$query['RegType'] = $request->regType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitOperationCredentials',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitOperationCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the SubmitOperationCredentials API to submit certificate materials for self-service operations pending review.
     *
     * @param request - SubmitOperationCredentialsRequest
     *
     * @returns SubmitOperationCredentialsResponse
     *
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
     * Calls the TransferInCheckMailToken operation to verify the email token of a domain name registrant.
     *
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
            'version' => '2018-01-29',
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
     * Calls the TransferInCheckMailToken operation to verify the email token of a domain name registrant.
     *
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
     * Invoke the TransferInReenterTransferAuthorizationCode API to re-enter the transfer password for domain name transfer-in.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the TransferInReenterTransferAuthorizationCode API to re-enter the transfer password for domain name transfer-in.
     *
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
     * Invoke TransferInRefetchWhoisEmail to perform email verification for domain transfer-in.
     *
     * @remarks
     * The system automatically retrieves the registrant\\"s email address from WHOIS. If the email address is incorrect or cannot be retrieved, the system will re-scrape the WHOIS email address.
     *
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
            'version' => '2018-01-29',
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
     * Invoke TransferInRefetchWhoisEmail to perform email verification for domain transfer-in.
     *
     * @remarks
     * The system automatically retrieves the registrant\\"s email address from WHOIS. If the email address is incorrect or cannot be retrieved, the system will re-scrape the WHOIS email address.
     *
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
     * Invoke the TransferInResendMailToken API to resend the verification email for domain transfer-in.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the TransferInResendMailToken API to resend the verification email for domain transfer-in.
     *
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
     * If you use file upload to replace more than 1,000 domain names in a domain name group, the operation is asynchronous. The result is available only after the request is processed.
     *
     * @param request - UpdateDomainToDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainToDomainGroupResponse
     *
     * @param UpdateDomainToDomainGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateDomainToDomainGroupResponse
     */
    public function updateDomainToDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSource) {
            @$query['DataSource'] = $request->dataSource;
        }

        if (null !== $request->domainGroupId) {
            @$query['DomainGroupId'] = $request->domainGroupId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->replace) {
            @$query['Replace'] = $request->replace;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $body = [];
        if (null !== $request->fileToUpload) {
            @$body['FileToUpload'] = $request->fileToUpload;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainToDomainGroup',
            'version' => '2018-01-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainToDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you use file upload to replace more than 1,000 domain names in a domain name group, the operation is asynchronous. The result is available only after the request is processed.
     *
     * @param request - UpdateDomainToDomainGroupRequest
     *
     * @returns UpdateDomainToDomainGroupResponse
     *
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
     * Whether some parameters are required depends on the requirements of the domain name registry. This API validates the compliance and validity of the input parameters and does not perform validation against actual domain information.
     *
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

        if (null !== $request->zhAddress) {
            @$query['ZhAddress'] = $request->zhAddress;
        }

        if (null !== $request->zhCity) {
            @$query['ZhCity'] = $request->zhCity;
        }

        if (null !== $request->zhProvince) {
            @$query['ZhProvince'] = $request->zhProvince;
        }

        if (null !== $request->zhRegistrantName) {
            @$query['ZhRegistrantName'] = $request->zhRegistrantName;
        }

        if (null !== $request->zhRegistrantOrganization) {
            @$query['ZhRegistrantOrganization'] = $request->zhRegistrantOrganization;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyContactField',
            'version' => '2018-01-29',
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
     * Whether some parameters are required depends on the requirements of the domain name registry. This API validates the compliance and validity of the input parameters and does not perform validation against actual domain information.
     *
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
     * Invoke the VerifyEmail API to submit email verification.
     *
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
            'version' => '2018-01-29',
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
     * Invoke the VerifyEmail API to submit email verification.
     *
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
