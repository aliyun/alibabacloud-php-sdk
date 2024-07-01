<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomain',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
        if (!Utils::isUnset($request->startExpirationDate)) {
            $query['StartExpirationDate'] = $request->startExpirationDate;
        }
        if (!Utils::isUnset($request->startRegistrationDate)) {
            $query['StartRegistrationDate'] = $request->startRegistrationDate;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainList',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRegistrantProfiles',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForDomainNameProxyService',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
     * @summary 国际站删除抢注批量接口
     *  *
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
            'version'     => '2017-12-18',
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
     * @summary 国际站删除抢注批量接口
     *  *
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
     * @param SaveBatchTaskForUpdatingContactInfoRequest $request SaveBatchTaskForUpdatingContactInfoRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBatchTaskForUpdatingContactInfoResponse SaveBatchTaskForUpdatingContactInfoResponse
     */
    public function saveBatchTaskForUpdatingContactInfoWithOptions($request, $runtime)
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
            'action'      => 'SaveBatchTaskForUpdatingContactInfo',
            'version'     => '2017-12-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBatchTaskForUpdatingContactInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveBatchTaskForUpdatingContactInfoRequest $request SaveBatchTaskForUpdatingContactInfoRequest
     *
     * @return SaveBatchTaskForUpdatingContactInfoResponse SaveBatchTaskForUpdatingContactInfoResponse
     */
    public function saveBatchTaskForUpdatingContactInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBatchTaskForUpdatingContactInfoWithOptions($request, $runtime);
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveBatchTaskForUpdatingContactInfoByNewContact',
            'version'     => '2017-12-18',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveRegistrantProfile',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSingleTaskForCreatingOrderActivate',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'action'      => 'SaveSingleTaskForDeletingDnsHost',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyContactField',
            'version'     => '2017-12-18',
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
            'version'     => '2017-12-18',
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
