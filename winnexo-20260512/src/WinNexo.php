<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CheckHealthRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CheckHealthResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateConversationRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateConversationResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateConversationShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateCustomOrgRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateCustomOrgResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseAliDingDocRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseAliDingDocResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseFileRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseFileResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseTextRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseTextResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingDocRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingDocResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingMeetingRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingMeetingResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkMeetingRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkMeetingResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFeishuMinuteRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFeishuMinuteResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFileRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFileResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalTextRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalTextResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalVoiceMeetingHeaders;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalVoiceMeetingRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalVoiceMeetingResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateTenantDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateTenantDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateUserRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateUserResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateUserShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteChatSessionRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteChatSessionResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteTenantDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteTenantDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DisableTokenRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\DisableTokenResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\EnableTokenRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\EnableTokenResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetChatSessionRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetChatSessionResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetGraphSchemaRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetGraphSchemaResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetInstanceExpireTimeRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetInstanceExpireTimeResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionRecordsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionRecordsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskUnderstandDetailRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskUnderstandDetailResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskUnderstandDetailShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSkillRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSkillResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSkillRunRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSkillRunResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceUploadSignatureRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceUploadSignatureResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTokenInfoRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTokenInfoResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserCreditUsageRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserCreditUsageResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserInfoRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GrantAgentUsersRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GrantAgentUsersResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GrantAgentUsersShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAdminKnowledgeBasesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAdminKnowledgeBasesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAdminKnowledgeBasesShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAgentsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAgentsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAuthorizedAgentsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAuthorizedAgentsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAuthorizedUsersRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAuthorizedUsersResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAvailableConfigsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAvailableConfigsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListBillingRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListBillingResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListChatSessionsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListChatSessionsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListGraphsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListGraphsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListKnowledgeBaseDirectoriesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListKnowledgeBaseDirectoriesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListPersonalDirectoryContentsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListPersonalDirectoryContentsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListPersonalDirectoryContentsShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListRolesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListRolesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListScheduledTasksRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListScheduledTasksResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListSkillsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListSkillsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListSkillsShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListTenantDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListTenantDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUsersRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUsersResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUsersShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBaseContentsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBaseContentsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBasesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBasesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBaseContentsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBaseContentsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBaseContentsShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBasesHeaders;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBasesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBasesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\MoveKnowledgeBaseResourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\MoveKnowledgeBaseResourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\MoveResourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\MoveResourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewKnowledgeBaseSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewKnowledgeBaseSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewPersonalSourceHeaders;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewPersonalSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewPersonalSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QueryPrimaryObjectDataRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QueryPrimaryObjectDataResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySemanticKnowledgeRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySemanticKnowledgeResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySyncResultRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySyncResultResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RemoveUserRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RemoveUserResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RenameKnowledgeBaseSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RenameKnowledgeBaseSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RenameSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RenameSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReparseSourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReparseSourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceKnowledgeBaseSourceFileRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceKnowledgeBaseSourceFileResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceObjectBindingsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceObjectBindingsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceObjectBindingsShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceSourceFileRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceSourceFileResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetPasswordRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetPasswordResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetTokenRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetTokenResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RetryDirectoryFailedSourcesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RetryDirectoryFailedSourcesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RetryKnowledgeBaseFailedSourcesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RetryKnowledgeBaseFailedSourcesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RevokeAgentUsersRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RevokeAgentUsersResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RevokeAgentUsersShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RunSkillRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RunSkillResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RunSkillShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SaveOutputFileToResourceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SaveOutputFileToResourceResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SaveOutputFileToResourceShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendAsyncChatMessageRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendAsyncChatMessageResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendAsyncChatMessageShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\StopChatMessageRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\StopChatMessageResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\StreamChatMessageRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\StreamChatMessageResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\TogglePrimaryObjectFavoriteRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\TogglePrimaryObjectFavoriteResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\TogglePrimaryObjectFavoriteShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateAgentAuthModeRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateAgentAuthModeResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateChatSessionRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateChatSessionResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSourceContentRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSourceContentResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSourceTagsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateKnowledgeBaseSourceTagsResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateSourceContentRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateSourceContentResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateTenantDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateTenantDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateUserInfoRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateUserInfoResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateUserRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateUserResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateUserShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UploadChatFileAdvanceRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UploadChatFileRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UploadChatFileResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class WinNexo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('winnexo', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $tmp = '' . @$form['host'];
                $host = '' . $bucketName . '.' . $tmp . '';
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => $host,
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_runtime['stream'] = true;
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * 服务健康检查.
     *
     * @param Request - CheckHealthRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckHealthResponse
     *
     * @param CheckHealthRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CheckHealthResponse
     */
    public function checkHealthWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckHealth',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/checkHealth',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 服务健康检查.
     *
     * @param Request - CheckHealthRequest
     *
     * @returns CheckHealthResponse
     *
     * @param CheckHealthRequest $request
     *
     * @return CheckHealthResponse
     */
    public function checkHealth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkHealthWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建会话.
     *
     * @param tmpReq - CreateConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConversationResponse
     *
     * @param CreateConversationRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateConversationResponse
     */
    public function createConversationWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateConversationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operatingObjectName) {
            $request->operatingObjectNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operatingObjectName, 'operatingObjectName', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->objectId) {
            @$body['objectId'] = $request->objectId;
        }

        if (null !== $request->operatingObjectNameShrink) {
            @$body['operatingObjectName'] = $request->operatingObjectNameShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConversation',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createConversation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建会话.
     *
     * @param Request - CreateConversationRequest
     *
     * @returns CreateConversationResponse
     *
     * @param CreateConversationRequest $request
     *
     * @return CreateConversationResponse
     */
    public function createConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * 注册纯自定义组织.
     *
     * @remarks
     * 注册一个纯自定义组织，用于后续通过 syncOrgStructure 推送部门树。
     *     注册逻辑：
     *     1. 校验 corpId 格式（小写字母/数字开头，3-64 位，允许中划线）
     *     2. 委托 OrgSyncAuthorizedService 执行注册（内含权限校验 + 租户内唯一性检查）
     *     3. 返回注册结果
     *     注意：纯自定义组织仅支持部门树同步，不支持成员关系同步。
     *
     * @param Request - CreateCustomOrgRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomOrgResponse
     *
     * @param CreateCustomOrgRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCustomOrgResponse
     */
    public function createCustomOrgWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->corpId) {
            @$body['corpId'] = $request->corpId;
        }

        if (null !== $request->corpName) {
            @$body['corpName'] = $request->corpName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomOrg',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createCustomOrg',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册纯自定义组织.
     *
     * @remarks
     * 注册一个纯自定义组织，用于后续通过 syncOrgStructure 推送部门树。
     *     注册逻辑：
     *     1. 校验 corpId 格式（小写字母/数字开头，3-64 位，允许中划线）
     *     2. 委托 OrgSyncAuthorizedService 执行注册（内含权限校验 + 租户内唯一性检查）
     *     3. 返回注册结果
     *     注意：纯自定义组织仅支持部门树同步，不支持成员关系同步。
     *
     * @param Request - CreateCustomOrgRequest
     *
     * @returns CreateCustomOrgResponse
     *
     * @param CreateCustomOrgRequest $request
     *
     * @return CreateCustomOrgResponse
     */
    public function createCustomOrg($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomOrgWithOptions($request, $headers, $runtime);
    }

    /**
     * 将阿里钉在线文档上传到企业知识库，需管理权限。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于将阿里钉在线文档添加到指定的企业知识库中。
     * - 调用者必须具备`DEVELOPMENT_KB_MANAGE`功能权限。
     * - `source_type`固定为`ONLINE_DOC`，`platform`固定为`ALI_DING`，`scope`固定为`TENANT`。
     * - 如果不提供`directoryId`，则默认绑定到当前数字员工的根目录；若提供，则必须是当前租户下的有效目录ID。
     * - `filePublicUrl`参数是必需的，表示要上传的阿里钉在线文档的公开访问URL。
     * - 可选参数包括`operatingObjectName`（数字员工名称）、`description`（资源描述）、`knowledgeId`（知识库ID）和`sourceTags`（资源标签）等。
     * - 成功响应会返回新创建资源的相关信息，如`sourceId`、`name`、`status`、`directoryId`及创建时间等。
     *
     * @param Request - CreateKnowledgeBaseAliDingDocRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseAliDingDocResponse
     *
     * @param CreateKnowledgeBaseAliDingDocRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateKnowledgeBaseAliDingDocResponse
     */
    public function createKnowledgeBaseAliDingDocWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->filePublicUrl) {
            @$body['filePublicUrl'] = $request->filePublicUrl;
        }

        if (null !== $request->knowledgeId) {
            @$body['knowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBaseAliDingDoc',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createKnowledgeBaseAlidingDoc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseAliDingDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将阿里钉在线文档上传到企业知识库，需管理权限。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于将阿里钉在线文档添加到指定的企业知识库中。
     * - 调用者必须具备`DEVELOPMENT_KB_MANAGE`功能权限。
     * - `source_type`固定为`ONLINE_DOC`，`platform`固定为`ALI_DING`，`scope`固定为`TENANT`。
     * - 如果不提供`directoryId`，则默认绑定到当前数字员工的根目录；若提供，则必须是当前租户下的有效目录ID。
     * - `filePublicUrl`参数是必需的，表示要上传的阿里钉在线文档的公开访问URL。
     * - 可选参数包括`operatingObjectName`（数字员工名称）、`description`（资源描述）、`knowledgeId`（知识库ID）和`sourceTags`（资源标签）等。
     * - 成功响应会返回新创建资源的相关信息，如`sourceId`、`name`、`status`、`directoryId`及创建时间等。
     *
     * @param Request - CreateKnowledgeBaseAliDingDocRequest
     *
     * @returns CreateKnowledgeBaseAliDingDocResponse
     *
     * @param CreateKnowledgeBaseAliDingDocRequest $request
     *
     * @return CreateKnowledgeBaseAliDingDocResponse
     */
    public function createKnowledgeBaseAliDingDoc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseAliDingDocWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于在企业知识库中创建新的分类目录。
     *
     * @remarks
     * ## 请求说明
     * - 该接口允许具有`DEVELOPMENT_KB_MANAGE`权限的用户为企业知识库创建新的分类。
     * - 创建时可指定父分类ID，若未指定，则新分类将直接挂载于企业知识库根目录下。
     * - 系统会自动检查同名冲突及目录深度限制等问题。
     * - `tenant_id`和`user_id`仅通过鉴权身份获取，请求体中即使提供也会被忽略。
     * - 需要确保提供的`parentDirectoryId`（如果有的话）属于当前租户。
     *
     * @param Request - CreateKnowledgeBaseDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseDirectoryResponse
     *
     * @param CreateKnowledgeBaseDirectoryRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateKnowledgeBaseDirectoryResponse
     */
    public function createKnowledgeBaseDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentDirectoryId) {
            @$body['parentDirectoryId'] = $request->parentDirectoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBaseDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createKnowledgeBaseDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于在企业知识库中创建新的分类目录。
     *
     * @remarks
     * ## 请求说明
     * - 该接口允许具有`DEVELOPMENT_KB_MANAGE`权限的用户为企业知识库创建新的分类。
     * - 创建时可指定父分类ID，若未指定，则新分类将直接挂载于企业知识库根目录下。
     * - 系统会自动检查同名冲突及目录深度限制等问题。
     * - `tenant_id`和`user_id`仅通过鉴权身份获取，请求体中即使提供也会被忽略。
     * - 需要确保提供的`parentDirectoryId`（如果有的话）属于当前租户。
     *
     * @param Request - CreateKnowledgeBaseDirectoryRequest
     *
     * @returns CreateKnowledgeBaseDirectoryResponse
     *
     * @param CreateKnowledgeBaseDirectoryRequest $request
     *
     * @return CreateKnowledgeBaseDirectoryResponse
     */
    public function createKnowledgeBaseDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 将指定文件上传至企业知识库，需具备管理权限。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于向企业知识库中上传文件。
     * - 需要拥有`DEVELOPMENT_KB_MANAGE`功能权限才能调用此API。
     * - 文件上传时必须提供文件的OSS持久化地址(`filePath`)。
     * - 可选参数包括文件公开访问URL、原始文件名等，以增强文件信息的完整性。
     * - 如果指定了`directoryId`，则文件会被放置在对应的企业知识库目录下；否则，默认绑定到当前数字员工默认根目录。
     * - 支持通过`sourceTags`为资源添加标签，便于后续管理和检索。
     * - 本操作会启动计费账单（UNSTRUCTURED_PARSE），请确保账户余额充足。
     *
     * @param Request - CreateKnowledgeBaseFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseFileResponse
     *
     * @param CreateKnowledgeBaseFileRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKnowledgeBaseFileResponse
     */
    public function createKnowledgeBaseFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->fileExt) {
            @$body['fileExt'] = $request->fileExt;
        }

        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->filePublicUrl) {
            @$body['filePublicUrl'] = $request->filePublicUrl;
        }

        if (null !== $request->fileRecordId) {
            @$body['fileRecordId'] = $request->fileRecordId;
        }

        if (null !== $request->knowledgeId) {
            @$body['knowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBaseFile',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createKnowledgeBaseFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将指定文件上传至企业知识库，需具备管理权限。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于向企业知识库中上传文件。
     * - 需要拥有`DEVELOPMENT_KB_MANAGE`功能权限才能调用此API。
     * - 文件上传时必须提供文件的OSS持久化地址(`filePath`)。
     * - 可选参数包括文件公开访问URL、原始文件名等，以增强文件信息的完整性。
     * - 如果指定了`directoryId`，则文件会被放置在对应的企业知识库目录下；否则，默认绑定到当前数字员工默认根目录。
     * - 支持通过`sourceTags`为资源添加标签，便于后续管理和检索。
     * - 本操作会启动计费账单（UNSTRUCTURED_PARSE），请确保账户余额充足。
     *
     * @param Request - CreateKnowledgeBaseFileRequest
     *
     * @returns CreateKnowledgeBaseFileResponse
     *
     * @param CreateKnowledgeBaseFileRequest $request
     *
     * @return CreateKnowledgeBaseFileResponse
     */
    public function createKnowledgeBaseFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 将纯文本内容添加至指定的企业知识库中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于向企业知识库上传纯文本信息，要求调用者具备相应的管理权限。
     * - `textContent`字段为必填项，代表要上传的纯文本内容。
     * - 可选参数包括数字员工名称(`operatingObjectName`)、资源描述(`description`)等，允许用户自定义更多细节。
     * - 如果提供了`directoryId`，则会将上传的文本绑定到指定的知识库目录下；若未提供，则默认绑定到当前数字员工的根目录。
     * - 支持通过`sourceTags`给资源打标签，方便后续管理和检索。
     * - 调用此接口前，请确保已正确配置身份验证方式（支持AK、BearerToken及APP认证）并拥有`DEVELOPMENT_KB_MANAGE`权限。
     *
     * @param Request - CreateKnowledgeBaseTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseTextResponse
     *
     * @param CreateKnowledgeBaseTextRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKnowledgeBaseTextResponse
     */
    public function createKnowledgeBaseTextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->knowledgeId) {
            @$body['knowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        if (null !== $request->textContent) {
            @$body['textContent'] = $request->textContent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBaseText',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createKnowledgeBaseText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将纯文本内容添加至指定的企业知识库中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于向企业知识库上传纯文本信息，要求调用者具备相应的管理权限。
     * - `textContent`字段为必填项，代表要上传的纯文本内容。
     * - 可选参数包括数字员工名称(`operatingObjectName`)、资源描述(`description`)等，允许用户自定义更多细节。
     * - 如果提供了`directoryId`，则会将上传的文本绑定到指定的知识库目录下；若未提供，则默认绑定到当前数字员工的根目录。
     * - 支持通过`sourceTags`给资源打标签，方便后续管理和检索。
     * - 调用此接口前，请确保已正确配置身份验证方式（支持AK、BearerToken及APP认证）并拥有`DEVELOPMENT_KB_MANAGE`权限。
     *
     * @param Request - CreateKnowledgeBaseTextRequest
     *
     * @returns CreateKnowledgeBaseTextResponse
     *
     * @param CreateKnowledgeBaseTextRequest $request
     *
     * @return CreateKnowledgeBaseTextResponse
     */
    public function createKnowledgeBaseText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 将阿里钉会议文件上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将阿里钉会议相关资料（如音视频、闪记链接等）上传至指定数字员工的“我的资源”中。
     * - `source_type` 固定为 `ALI_DING_MEETING`，且作用范围 `scope` 固定为 `PERSONAL`。
     * - 必须提供公开的音视频OSS地址 (`ossUrl`) 和原始的闪记链接 (`shanjiUrl`)。
     * - 可选地，可以指定目标个人目录ID (`directoryId`)；若未指定，则自动绑定到当前数字员工默认根目录。
     * - 支持添加资源描述 (`description`) 和会议笔记内容 (`notes`)，其中会议笔记可用于辅助分析。
     * - 此操作需要相应的权限认证，支持AK、BearerToken和APP三种认证方式之一。
     *
     * @param Request - CreatePersonalAliDingMeetingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalAliDingMeetingResponse
     *
     * @param CreatePersonalAliDingMeetingRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreatePersonalAliDingMeetingResponse
     */
    public function createPersonalAliDingMeetingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->notes) {
            @$body['notes'] = $request->notes;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->shanjiUrl) {
            @$body['shanjiUrl'] = $request->shanjiUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalAliDingMeeting',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalAliDingMeeting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalAliDingMeetingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将阿里钉会议文件上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将阿里钉会议相关资料（如音视频、闪记链接等）上传至指定数字员工的“我的资源”中。
     * - `source_type` 固定为 `ALI_DING_MEETING`，且作用范围 `scope` 固定为 `PERSONAL`。
     * - 必须提供公开的音视频OSS地址 (`ossUrl`) 和原始的闪记链接 (`shanjiUrl`)。
     * - 可选地，可以指定目标个人目录ID (`directoryId`)；若未指定，则自动绑定到当前数字员工默认根目录。
     * - 支持添加资源描述 (`description`) 和会议笔记内容 (`notes`)，其中会议笔记可用于辅助分析。
     * - 此操作需要相应的权限认证，支持AK、BearerToken和APP三种认证方式之一。
     *
     * @param Request - CreatePersonalAliDingMeetingRequest
     *
     * @returns CreatePersonalAliDingMeetingResponse
     *
     * @param CreatePersonalAliDingMeetingRequest $request
     *
     * @return CreatePersonalAliDingMeetingResponse
     */
    public function createPersonalAliDingMeeting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalAliDingMeetingWithOptions($request, $headers, $runtime);
    }

    /**
     * 将阿里钉在线文档上传至当前数字员工的个人资源中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将阿里钉在线文档添加到指定数字员工的"我的资源"中。
     * - 固定参数包括 `source_type=ONLINE_DOC`、`platform=ALI_DING` 和 `scope=PERSONAL`。
     * - 如果未提供`directoryId`，则默认绑定到当前数字员工的根目录；若提供了，则需确保该目录属于当前用户且在当前数字员工下存在。
     * - 调用过程中会启动计量并记录相关操作日志。
     * - 安全性方面，`tenant_id`和`user_id`仅从鉴权身份获取，调用方提供的这些字段值将被忽略。
     * - 任何校验或执行失败都会通过服务抛出异常，并转换为POP错误码返回给调用者。
     *
     * @param Request - CreatePersonalAlidingDocRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalAlidingDocResponse
     *
     * @param CreatePersonalAlidingDocRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePersonalAlidingDocResponse
     */
    public function createPersonalAlidingDocWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->filePublicUrl) {
            @$body['filePublicUrl'] = $request->filePublicUrl;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalAlidingDoc',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalAliDingDoc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalAlidingDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将阿里钉在线文档上传至当前数字员工的个人资源中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将阿里钉在线文档添加到指定数字员工的"我的资源"中。
     * - 固定参数包括 `source_type=ONLINE_DOC`、`platform=ALI_DING` 和 `scope=PERSONAL`。
     * - 如果未提供`directoryId`，则默认绑定到当前数字员工的根目录；若提供了，则需确保该目录属于当前用户且在当前数字员工下存在。
     * - 调用过程中会启动计量并记录相关操作日志。
     * - 安全性方面，`tenant_id`和`user_id`仅从鉴权身份获取，调用方提供的这些字段值将被忽略。
     * - 任何校验或执行失败都会通过服务抛出异常，并转换为POP错误码返回给调用者。
     *
     * @param Request - CreatePersonalAlidingDocRequest
     *
     * @returns CreatePersonalAlidingDocResponse
     *
     * @param CreatePersonalAlidingDocRequest $request
     *
     * @return CreatePersonalAlidingDocResponse
     */
    public function createPersonalAlidingDoc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalAlidingDocWithOptions($request, $headers, $runtime);
    }

    /**
     * 将阿里钉整体知识库添加到当前数字员工的个人资源中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于创建一个阿里钉知识库，并将其挂载到指定数字员工的个人资源目录下。
     * - `platform`固定为`ALI_DING`，`directory_type`固定为`PERSONAL`。
     * - 如果提供了`directoryId`，则会验证该目录是否存在且属于当前租户和个人类型。
     * - 创建过程中会初始化知识库根目录（状态设置为`RUNNING`），并根据提供的同步配置派发后台任务以拉取远程目录树和创建子节点。
     * - 安全性方面，`tenant_id`与`user_id`仅从鉴权身份获取，请求体中的这些字段会被忽略。
     * - 同步配置可选，若启用需提供cron表达式；未传或禁用时，默认不进行定时同步。
     * - 知识库名称可以自定义，如果不提供，则会在后台同步后自动填充。
     * - 支持多值对象绑定，相关信息将被序列化并存储于知识库元数据中。
     *
     * @param tmpReq - CreatePersonalAlidingKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalAlidingKnowledgeBaseResponse
     *
     * @param CreatePersonalAlidingKnowledgeBaseRequest $tmpReq
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return CreatePersonalAlidingKnowledgeBaseResponse
     */
    public function createPersonalAlidingKnowledgeBaseWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePersonalAlidingKnowledgeBaseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->objectBindings) {
            $request->objectBindingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectBindings, 'objectBindings', 'json');
        }

        if (null !== $tmpReq->syncConfig) {
            $request->syncConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->syncConfig, 'syncConfig', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->kbName) {
            @$body['kbName'] = $request->kbName;
        }

        if (null !== $request->kbUrl) {
            @$body['kbUrl'] = $request->kbUrl;
        }

        if (null !== $request->objectBindingsShrink) {
            @$body['objectBindings'] = $request->objectBindingsShrink;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->syncConfigShrink) {
            @$body['syncConfig'] = $request->syncConfigShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalAlidingKnowledgeBase',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalAliDingKnowledgeBase',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalAlidingKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将阿里钉整体知识库添加到当前数字员工的个人资源中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于创建一个阿里钉知识库，并将其挂载到指定数字员工的个人资源目录下。
     * - `platform`固定为`ALI_DING`，`directory_type`固定为`PERSONAL`。
     * - 如果提供了`directoryId`，则会验证该目录是否存在且属于当前租户和个人类型。
     * - 创建过程中会初始化知识库根目录（状态设置为`RUNNING`），并根据提供的同步配置派发后台任务以拉取远程目录树和创建子节点。
     * - 安全性方面，`tenant_id`与`user_id`仅从鉴权身份获取，请求体中的这些字段会被忽略。
     * - 同步配置可选，若启用需提供cron表达式；未传或禁用时，默认不进行定时同步。
     * - 知识库名称可以自定义，如果不提供，则会在后台同步后自动填充。
     * - 支持多值对象绑定，相关信息将被序列化并存储于知识库元数据中。
     *
     * @param Request - CreatePersonalAlidingKnowledgeBaseRequest
     *
     * @returns CreatePersonalAlidingKnowledgeBaseResponse
     *
     * @param CreatePersonalAlidingKnowledgeBaseRequest $request
     *
     * @return CreatePersonalAlidingKnowledgeBaseResponse
     */
    public function createPersonalAlidingKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalAlidingKnowledgeBaseWithOptions($request, $headers, $runtime);
    }

    /**
     * 将钉钉会议上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于将钉钉会议作为资源上传到指定数字员工的“我的资源”中。
     * - `source_type` 固定为 `DINGTALK_MEETING`，`scope` 固定为 `PERSONAL`。
     * - 如果不提供 `credentialId`，则使用系统默认配置。
     * - 当未指定 `directoryId` 时，资源将自动绑定到当前数字员工的默认根目录下；若指定，则必须是调用者在该数字员工下的已有个人目录。
     * - 可选参数 `description` 和 `notes` 分别用于描述资源和记录会议笔记，其中 `notes` 会参与辅助分析。
     *
     * @param Request - CreatePersonalDingtalkMeetingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalDingtalkMeetingResponse
     *
     * @param CreatePersonalDingtalkMeetingRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreatePersonalDingtalkMeetingResponse
     */
    public function createPersonalDingtalkMeetingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->credentialId) {
            @$body['credentialId'] = $request->credentialId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->notes) {
            @$body['notes'] = $request->notes;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->roomCode) {
            @$body['roomCode'] = $request->roomCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalDingtalkMeeting',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalDingtalkMeeting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalDingtalkMeetingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将钉钉会议上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于将钉钉会议作为资源上传到指定数字员工的“我的资源”中。
     * - `source_type` 固定为 `DINGTALK_MEETING`，`scope` 固定为 `PERSONAL`。
     * - 如果不提供 `credentialId`，则使用系统默认配置。
     * - 当未指定 `directoryId` 时，资源将自动绑定到当前数字员工的默认根目录下；若指定，则必须是调用者在该数字员工下的已有个人目录。
     * - 可选参数 `description` 和 `notes` 分别用于描述资源和记录会议笔记，其中 `notes` 会参与辅助分析。
     *
     * @param Request - CreatePersonalDingtalkMeetingRequest
     *
     * @returns CreatePersonalDingtalkMeetingResponse
     *
     * @param CreatePersonalDingtalkMeetingRequest $request
     *
     * @return CreatePersonalDingtalkMeetingResponse
     */
    public function createPersonalDingtalkMeeting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalDingtalkMeetingWithOptions($request, $headers, $runtime);
    }

    /**
     * 在我的资源下创建个人目录（分类）.
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于在“我的资源”下创建个人目录（分类）。
     * - 若未传 `parentDirectoryId`，系统将自动使用或创建当前数字员工的默认根目录作为父目录。
     * - 若传入 `parentDirectoryId`，则必须是当前用户在当前数字员工下的已有个人目录。
     * - `tenant_id` 和 `user_id` 仅来自鉴权身份，调用方在请求体中传入这些字段会被忽略。
     *
     * @param Request - CreatePersonalDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalDirectoryResponse
     *
     * @param CreatePersonalDirectoryRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreatePersonalDirectoryResponse
     */
    public function createPersonalDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->parentDirectoryId) {
            @$body['parentDirectoryId'] = $request->parentDirectoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在我的资源下创建个人目录（分类）.
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于在“我的资源”下创建个人目录（分类）。
     * - 若未传 `parentDirectoryId`，系统将自动使用或创建当前数字员工的默认根目录作为父目录。
     * - 若传入 `parentDirectoryId`，则必须是当前用户在当前数字员工下的已有个人目录。
     * - `tenant_id` 和 `user_id` 仅来自鉴权身份，调用方在请求体中传入这些字段会被忽略。
     *
     * @param Request - CreatePersonalDirectoryRequest
     *
     * @returns CreatePersonalDirectoryResponse
     *
     * @param CreatePersonalDirectoryRequest $request
     *
     * @return CreatePersonalDirectoryResponse
     */
    public function createPersonalDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 将飞书妙记会议文件上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于将飞书妙记中的会议记录上传至指定数字员工的"我的资源"中。通过提供必要的参数，如飞书妙记的唯一标识符（`minuteToken`）和凭证 ID（`credentialId`），可以实现会议内容的迁移与保存。若未指定目标目录，则默认绑定到当前数字员工下的根目录。
     * - `operatingObjectName`：执行操作的数字员工名称。
     * - `name`：上传后资源在系统内的显示名称。
     * - `minuteToken`：来自飞书妙记平台的会议唯一标识符。
     * - `credentialId`：关联到特定认证信息的ID，用于验证请求合法性。
     * - `directoryId`（可选）：指定要存放资源的目标个人目录ID；如果省略此字段，则资源将被自动放置于默认位置。
     * - `description`（可选）：对所上传资源的简短描述或备注。
     * 注意事项：
     * - 确保提供的 `minuteToken` 和 `credentialId` 的有效性。
     * - 当指定了 `directoryId` 时，请确认其属于调用者在当前数字员工环境下的可用个人目录之一。
     *
     * @param Request - CreatePersonalFeishuMinuteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalFeishuMinuteResponse
     *
     * @param CreatePersonalFeishuMinuteRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePersonalFeishuMinuteResponse
     */
    public function createPersonalFeishuMinuteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->credentialId) {
            @$body['credentialId'] = $request->credentialId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->minuteToken) {
            @$body['minuteToken'] = $request->minuteToken;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalFeishuMinute',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalFeishuMinute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalFeishuMinuteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将飞书妙记会议文件上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于将飞书妙记中的会议记录上传至指定数字员工的"我的资源"中。通过提供必要的参数，如飞书妙记的唯一标识符（`minuteToken`）和凭证 ID（`credentialId`），可以实现会议内容的迁移与保存。若未指定目标目录，则默认绑定到当前数字员工下的根目录。
     * - `operatingObjectName`：执行操作的数字员工名称。
     * - `name`：上传后资源在系统内的显示名称。
     * - `minuteToken`：来自飞书妙记平台的会议唯一标识符。
     * - `credentialId`：关联到特定认证信息的ID，用于验证请求合法性。
     * - `directoryId`（可选）：指定要存放资源的目标个人目录ID；如果省略此字段，则资源将被自动放置于默认位置。
     * - `description`（可选）：对所上传资源的简短描述或备注。
     * 注意事项：
     * - 确保提供的 `minuteToken` 和 `credentialId` 的有效性。
     * - 当指定了 `directoryId` 时，请确认其属于调用者在当前数字员工环境下的可用个人目录之一。
     *
     * @param Request - CreatePersonalFeishuMinuteRequest
     *
     * @returns CreatePersonalFeishuMinuteResponse
     *
     * @param CreatePersonalFeishuMinuteRequest $request
     *
     * @return CreatePersonalFeishuMinuteResponse
     */
    public function createPersonalFeishuMinute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalFeishuMinuteWithOptions($request, $headers, $runtime);
    }

    /**
     * 将文件上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将文件上传到指定数字员工的"我的资源"中。
     * - `source_type` 固定为 `FILE`，`scope` 固定为 `PERSONAL`，`platform` 固定为 `LOCAL`。
     * - 文件必须提供OSS持久化地址 (`filePath`)，其他如公开访问URL、原始文件名等信息可选提供。
     * - 如果不指定目标目录ID (`directoryId`)，则文件会被自动绑定到当前数字员工默认根目录下；如果指定，则需确保该目录属于调用者的个人目录。
     * - 支持通过多种认证方式（AK、BearerToken、APP）进行安全验证。
     * - 操作类型为写入(`write`)，并记录操作日志以供后续审计使用。
     *
     * @param Request - CreatePersonalFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalFileResponse
     *
     * @param CreatePersonalFileRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePersonalFileResponse
     */
    public function createPersonalFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->fileExt) {
            @$body['fileExt'] = $request->fileExt;
        }

        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->filePublicUrl) {
            @$body['filePublicUrl'] = $request->filePublicUrl;
        }

        if (null !== $request->fileRecordId) {
            @$body['fileRecordId'] = $request->fileRecordId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalFile',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将文件上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将文件上传到指定数字员工的"我的资源"中。
     * - `source_type` 固定为 `FILE`，`scope` 固定为 `PERSONAL`，`platform` 固定为 `LOCAL`。
     * - 文件必须提供OSS持久化地址 (`filePath`)，其他如公开访问URL、原始文件名等信息可选提供。
     * - 如果不指定目标目录ID (`directoryId`)，则文件会被自动绑定到当前数字员工默认根目录下；如果指定，则需确保该目录属于调用者的个人目录。
     * - 支持通过多种认证方式（AK、BearerToken、APP）进行安全验证。
     * - 操作类型为写入(`write`)，并记录操作日志以供后续审计使用。
     *
     * @param Request - CreatePersonalFileRequest
     *
     * @returns CreatePersonalFileResponse
     *
     * @param CreatePersonalFileRequest $request
     *
     * @return CreatePersonalFileResponse
     */
    public function createPersonalFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 将纯文本内容上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于向指定数字员工的个人资源中添加纯文本内容。
     * - `source_type` 固定为 `TEXT`，`scope` 固定为 `PERSONAL`。
     * - 如果不提供`directoryId`，则默认绑定到当前数字员工的根目录；若提供，则必须是调用者在该数字员工下的已有个人目录。
     * - `tenant_id` 和 `user_id` 只能来自鉴权身份信息，通过请求体传递这些参数将被忽略。
     * - 调用过程中会启动计量并生成相应的`billing_id`。
     * - 文本内容将被写入`unstructured_docs`，并生成初始资源记录。
     * - 任何校验或执行失败都将抛出`RobjectException`异常，并由全局中间件转换为POP错误码返回给调用方。
     *
     * @param Request - CreatePersonalTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalTextResponse
     *
     * @param CreatePersonalTextRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePersonalTextResponse
     */
    public function createPersonalTextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->textContent) {
            @$body['textContent'] = $request->textContent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalText',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将纯文本内容上传至当前数字员工的个人资源库。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于向指定数字员工的个人资源中添加纯文本内容。
     * - `source_type` 固定为 `TEXT`，`scope` 固定为 `PERSONAL`。
     * - 如果不提供`directoryId`，则默认绑定到当前数字员工的根目录；若提供，则必须是调用者在该数字员工下的已有个人目录。
     * - `tenant_id` 和 `user_id` 只能来自鉴权身份信息，通过请求体传递这些参数将被忽略。
     * - 调用过程中会启动计量并生成相应的`billing_id`。
     * - 文本内容将被写入`unstructured_docs`，并生成初始资源记录。
     * - 任何校验或执行失败都将抛出`RobjectException`异常，并由全局中间件转换为POP错误码返回给调用方。
     *
     * @param Request - CreatePersonalTextRequest
     *
     * @returns CreatePersonalTextResponse
     *
     * @param CreatePersonalTextRequest $request
     *
     * @return CreatePersonalTextResponse
     */
    public function createPersonalText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 将离线会议音频文件上传至当前数字员工的个人资源中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将离线会议的音频文件上传到指定数字员工的“我的资源”中。
     * - `source_type`固定为`VOICE_MEETING`，`scope`固定为`PERSONAL`，且`voice_meeting_type`固定为`OFFLINE`。
     * - 如果请求体中未提供`directoryId`，则资源将自动绑定到默认根目录；若提供了`directoryId`，则必须是当前用户在当前数字员工下的已有个人目录。
     * - 调用此接口会启动一个后台流程来处理音频文件转写，并返回新建资源的相关信息。
     * - 安全性方面，`tenant_id`和`user_id`仅从鉴权身份获取，即使请求体中包含这些字段也会被忽略。
     * - 任何校验或执行失败都会抛出`RobjectException`，并通过全局中间件转换为POP错误码。
     *
     * @param Request - CreatePersonalVoiceMeetingRequest
     * @param headers - CreatePersonalVoiceMeetingHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalVoiceMeetingResponse
     *
     * @param CreatePersonalVoiceMeetingRequest $request
     * @param CreatePersonalVoiceMeetingHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePersonalVoiceMeetingResponse
     */
    public function createPersonalVoiceMeetingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->fileUrl) {
            @$body['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->requestId) {
            @$realHeaders['requestId'] = '' . $headers->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalVoiceMeeting',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalVoiceMeeting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalVoiceMeetingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将离线会议音频文件上传至当前数字员工的个人资源中。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将离线会议的音频文件上传到指定数字员工的“我的资源”中。
     * - `source_type`固定为`VOICE_MEETING`，`scope`固定为`PERSONAL`，且`voice_meeting_type`固定为`OFFLINE`。
     * - 如果请求体中未提供`directoryId`，则资源将自动绑定到默认根目录；若提供了`directoryId`，则必须是当前用户在当前数字员工下的已有个人目录。
     * - 调用此接口会启动一个后台流程来处理音频文件转写，并返回新建资源的相关信息。
     * - 安全性方面，`tenant_id`和`user_id`仅从鉴权身份获取，即使请求体中包含这些字段也会被忽略。
     * - 任何校验或执行失败都会抛出`RobjectException`，并通过全局中间件转换为POP错误码。
     *
     * @param Request - CreatePersonalVoiceMeetingRequest
     *
     * @returns CreatePersonalVoiceMeetingResponse
     *
     * @param CreatePersonalVoiceMeetingRequest $request
     *
     * @return CreatePersonalVoiceMeetingResponse
     */
    public function createPersonalVoiceMeeting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreatePersonalVoiceMeetingHeaders([]);

        return $this->createPersonalVoiceMeetingWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建定时任务
     *
     * @param tmpReq - CreateScheduledTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateScheduledTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->description) {
            $request->descriptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->description, 'description', 'json');
        }

        if (null !== $tmpReq->digitalEmployeeName) {
            $request->digitalEmployeeNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->digitalEmployeeName, 'digitalEmployeeName', 'json');
        }

        if (null !== $tmpReq->segments) {
            $request->segmentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->segments, 'segments', 'json');
        }

        if (null !== $tmpReq->taskDetail) {
            $request->taskDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskDetail, 'taskDetail', 'json');
        }

        if (null !== $tmpReq->triggerConfig) {
            $request->triggerConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->triggerConfig, 'triggerConfig', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->collaborationGroupId) {
            @$body['collaborationGroupId'] = $request->collaborationGroupId;
        }

        if (null !== $request->descriptionShrink) {
            @$body['description'] = $request->descriptionShrink;
        }

        if (null !== $request->digitalEmployeeNameShrink) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeNameShrink;
        }

        if (null !== $request->isOpen) {
            @$body['isOpen'] = $request->isOpen;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->segmentsShrink) {
            @$body['segments'] = $request->segmentsShrink;
        }

        if (null !== $request->taskDetailShrink) {
            @$body['taskDetail'] = $request->taskDetailShrink;
        }

        if (null !== $request->triggerConfigShrink) {
            @$body['triggerConfig'] = $request->triggerConfigShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledTask',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createScheduledTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建定时任务
     *
     * @param Request - CreateScheduledTaskRequest
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $request
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 使用租户和用户信息创建企业知识库目录。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于在指定租户下创建新的企业知识库目录。
     * - 可以通过设置 `parentId` 参数来指定新目录的父目录，如果不传则默认创建为根目录。
     * - `path` 参数可选，不提供时系统会根据父目录自动计算路径。
     * - 调用此接口需要具备相应的权限，并且支持多种认证方式包括 AK、BearerToken 和 APP 认证。
     * - 创建成功后返回新目录的相关信息，如目录 ID、名称等。
     *
     * @param Request - CreateTenantDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTenantDirectoryResponse
     *
     * @param CreateTenantDirectoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTenantDirectoryResponse
     */
    public function createTenantDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTenantDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createTenantDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTenantDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 使用租户和用户信息创建企业知识库目录。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于在指定租户下创建新的企业知识库目录。
     * - 可以通过设置 `parentId` 参数来指定新目录的父目录，如果不传则默认创建为根目录。
     * - `path` 参数可选，不提供时系统会根据父目录自动计算路径。
     * - 调用此接口需要具备相应的权限，并且支持多种认证方式包括 AK、BearerToken 和 APP 认证。
     * - 创建成功后返回新目录的相关信息，如目录 ID、名称等。
     *
     * @param Request - CreateTenantDirectoryRequest
     *
     * @returns CreateTenantDirectoryResponse
     *
     * @param CreateTenantDirectoryRequest $request
     *
     * @return CreateTenantDirectoryResponse
     */
    public function createTenantDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTenantDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建用户并加入租户.
     *
     * @remarks
     * OpenAPI 创建用户。
     *     业务编排：
     *     1. 解析 roleCodes → role_ids（系统角色枚举校验）
     *     2. 判断用户是否已存在（用于返回 isNewUser 标记）
     *     3. 调用 UserManagementService.add_tenant_member 完成创建/加入（密码由调用方强制传入 RSA 密文）
     *     4. 返回创建结果（含 isNewUser 标记）
     *     错误码：
     *     - ERR.User.DeactivatedInTenant: 用户在租户中已停用，请使用 updateUser 恢复
     *     - ERR.User.AlreadyInTenant: 用户已是租户活跃成员
     *     - ERR.User.DisplayNameDuplicateInTenant: 租户内显示名重复
     *
     * @param tmpReq - CreateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'roleCodes', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->passwordEncrypted) {
            @$body['passwordEncrypted'] = $request->passwordEncrypted;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['roleCodes'] = $request->roleCodesShrink;
        }

        if (null !== $request->wnAccountId) {
            @$body['wnAccountId'] = $request->wnAccountId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建用户并加入租户.
     *
     * @remarks
     * OpenAPI 创建用户。
     *     业务编排：
     *     1. 解析 roleCodes → role_ids（系统角色枚举校验）
     *     2. 判断用户是否已存在（用于返回 isNewUser 标记）
     *     3. 调用 UserManagementService.add_tenant_member 完成创建/加入（密码由调用方强制传入 RSA 密文）
     *     4. 返回创建结果（含 isNewUser 标记）
     *     错误码：
     *     - ERR.User.DeactivatedInTenant: 用户在租户中已停用，请使用 updateUser 恢复
     *     - ERR.User.AlreadyInTenant: 用户已是租户活跃成员
     *     - ERR.User.DisplayNameDuplicateInTenant: 租户内显示名重复
     *
     * @param Request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除会话.
     *
     * @param Request - DeleteChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChatSessionResponse
     *
     * @param DeleteChatSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteChatSessionResponse
     */
    public function deleteChatSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChatSession',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/deleteChatSession',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除会话.
     *
     * @param Request - DeleteChatSessionRequest
     *
     * @returns DeleteChatSessionResponse
     *
     * @param DeleteChatSessionRequest $request
     *
     * @return DeleteChatSessionResponse
     */
    public function deleteChatSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteChatSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除当前租户内的指定资源（知识）。
     *
     * @remarks
     * ## 请求说明
     * - `tenantId` 仅来自鉴权身份；调用方传入会被忽略。
     * - `sourceId` 通过 body 传递，注册路径为扁平的 `/openapi/deleteSource`，不含 `{sourceId}` 路径模板；请勿以路径段形式追加资源 ID，网关按扁平 URI 精确路由，会回 `InvalidAction.NotFound`。
     * - 删除为不可逆操作，资源关联的解析结果与绑定关系会一并失效。
     *
     * @param Request - DeleteSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSourceResponse
     *
     * @param DeleteSourceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSourceResponse
     */
    public function deleteSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/deleteSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除当前租户内的指定资源（知识）。
     *
     * @remarks
     * ## 请求说明
     * - `tenantId` 仅来自鉴权身份；调用方传入会被忽略。
     * - `sourceId` 通过 body 传递，注册路径为扁平的 `/openapi/deleteSource`，不含 `{sourceId}` 路径模板；请勿以路径段形式追加资源 ID，网关按扁平 URI 精确路由，会回 `InvalidAction.NotFound`。
     * - 删除为不可逆操作，资源关联的解析结果与绑定关系会一并失效。
     *
     * @param Request - DeleteSourceRequest
     *
     * @returns DeleteSourceResponse
     *
     * @param DeleteSourceRequest $request
     *
     * @return DeleteSourceResponse
     */
    public function deleteSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于删除指定的企业知识库目录，支持不同删除模式。
     *
     * @remarks
     * ## 请求说明
     * - 该API允许用户删除特定的企业知识库目录。
     * - 用户可以通过设置`deleteMode`参数来选择不同的删除策略，包括拒绝删除（reject）、递归删除（recursive）或将目录移动到根目录（move_to_root）。
     * - 如果不提供`deleteMode`，默认行为是拒绝删除。
     * - 删除操作前会校验企业目录边界。
     *
     * @param Request - DeleteTenantDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTenantDirectoryResponse
     *
     * @param DeleteTenantDirectoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteTenantDirectoryResponse
     */
    public function deleteTenantDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->deleteMode) {
            @$body['deleteMode'] = $request->deleteMode;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTenantDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/deleteTenantDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTenantDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于删除指定的企业知识库目录，支持不同删除模式。
     *
     * @remarks
     * ## 请求说明
     * - 该API允许用户删除特定的企业知识库目录。
     * - 用户可以通过设置`deleteMode`参数来选择不同的删除策略，包括拒绝删除（reject）、递归删除（recursive）或将目录移动到根目录（move_to_root）。
     * - 如果不提供`deleteMode`，默认行为是拒绝删除。
     * - 删除操作前会校验企业目录边界。
     *
     * @param Request - DeleteTenantDirectoryRequest
     *
     * @returns DeleteTenantDirectoryResponse
     *
     * @param DeleteTenantDirectoryRequest $request
     *
     * @return DeleteTenantDirectoryResponse
     */
    public function deleteTenantDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTenantDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 关闭 API Token.
     *
     * @remarks
     * 关闭用户的 INSTANCE Token。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 调用 disable_token（ACTIVE → INACTIVE）
     *     4. 返回 disabled=True
     *     幂等性：若当前无 ACTIVE Token，deactivate_all 影响 0 行，不报错。
     *
     * @param Request - DisableTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableTokenResponse
     *
     * @param DisableTokenRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DisableTokenResponse
     */
    public function disableTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableToken',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/disableToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭 API Token.
     *
     * @remarks
     * 关闭用户的 INSTANCE Token。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 调用 disable_token（ACTIVE → INACTIVE）
     *     4. 返回 disabled=True
     *     幂等性：若当前无 ACTIVE Token，deactivate_all 影响 0 行，不报错。
     *
     * @param Request - DisableTokenRequest
     *
     * @returns DisableTokenResponse
     *
     * @param DisableTokenRequest $request
     *
     * @return DisableTokenResponse
     */
    public function disableToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 开启 API Token.
     *
     * @remarks
     * 开启用户的 INSTANCE Token（幂等）。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 调用 enable_token：
     *        - 已有 ACTIVE → 幂等返回（仅脱敏值，不重复下发明文）
     *        - 有 INACTIVE → 重新激活（返回明文）
     *        - 都没有 → 新建（返回明文）
     *     安全约束：Token 明文仅在首次开启时返回一次，后续幂等调用不再下发明文。
     *
     * @param Request - EnableTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableTokenResponse
     *
     * @param EnableTokenRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return EnableTokenResponse
     */
    public function enableTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableToken',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/enableToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启 API Token.
     *
     * @remarks
     * 开启用户的 INSTANCE Token（幂等）。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 调用 enable_token：
     *        - 已有 ACTIVE → 幂等返回（仅脱敏值，不重复下发明文）
     *        - 有 INACTIVE → 重新激活（返回明文）
     *        - 都没有 → 新建（返回明文）
     *     安全约束：Token 明文仅在首次开启时返回一次，后续幂等调用不再下发明文。
     *
     * @param Request - EnableTokenRequest
     *
     * @returns EnableTokenResponse
     *
     * @param EnableTokenRequest $request
     *
     * @return EnableTokenResponse
     */
    public function enableToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取会话详情.
     *
     * @param Request - GetChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatSessionResponse
     *
     * @param GetChatSessionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetChatSessionResponse
     */
    public function getChatSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChatSession',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getChatSession',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话详情.
     *
     * @param Request - GetChatSessionRequest
     *
     * @returns GetChatSessionResponse
     *
     * @param GetChatSessionRequest $request
     *
     * @return GetChatSessionResponse
     */
    public function getChatSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前用户可读的 active Graph Schema.
     *
     * @remarks
     * 读取 active schema_content，并按 Token 用户的语义资源 READ 权限安全裁剪。
     *
     * @param Request - GetGraphSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGraphSchemaResponse
     *
     * @param GetGraphSchemaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetGraphSchemaResponse
     */
    public function getGraphSchemaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->graphName) {
            @$body['graphName'] = $request->graphName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGraphSchema',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getGraphSchema',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGraphSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取当前用户可读的 active Graph Schema.
     *
     * @remarks
     * 读取 active schema_content，并按 Token 用户的语义资源 READ 权限安全裁剪。
     *
     * @param Request - GetGraphSchemaRequest
     *
     * @returns GetGraphSchemaResponse
     *
     * @param GetGraphSchemaRequest $request
     *
     * @return GetGraphSchemaResponse
     */
    public function getGraphSchema($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGraphSchemaWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询租户最新创建的标准包实例的过期时间。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于查询指定租户下最新创建的标准包实例的过期时间。
     * - 如果未找到相关标准包实例，`found` 字段将返回 `False`。
     * - 支持通过 `tenantId` 参数指定查询的租户ID，默认使用调用方的租户ID。
     * - 请求方法为 POST，且需要通过 HTTPS 协议进行调用。
     * - 需要提供有效的认证信息（如 AK、BearerToken 或 APP）以完成请求。
     *
     * @param Request - GetInstanceExpireTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceExpireTimeResponse
     *
     * @param GetInstanceExpireTimeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceExpireTimeResponse
     */
    public function getInstanceExpireTimeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceExpireTime',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getInstanceExpireTime',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询租户最新创建的标准包实例的过期时间。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于查询指定租户下最新创建的标准包实例的过期时间。
     * - 如果未找到相关标准包实例，`found` 字段将返回 `False`。
     * - 支持通过 `tenantId` 参数指定查询的租户ID，默认使用调用方的租户ID。
     * - 请求方法为 POST，且需要通过 HTTPS 协议进行调用。
     * - 需要提供有效的认证信息（如 AK、BearerToken 或 APP）以完成请求。
     *
     * @param Request - GetInstanceExpireTimeRequest
     *
     * @returns GetInstanceExpireTimeResponse
     *
     * @param GetInstanceExpireTimeRequest $request
     *
     * @return GetInstanceExpireTimeResponse
     */
    public function getInstanceExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceExpireTimeWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询指定知识在企业知识库中的详细信息。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于获取企业知识库下特定知识的详情。
     * - 调用此接口需要具备 `DEVELOPMENT_KB_VIEW` 功能权限。
     * - 知识详情包括但不限于知识类型、名称、描述等。
     * - 请求时必须提供 `sourceId` 参数，标识要查询的知识。
     * - `tenantId` 是可选参数，默认使用调用方的租户ID。
     * - 支持通过 `AK`、`BearerToken` 或 `APP` 方式进行鉴权。
     * - 安全约束：`tenant_id` 和 `user_id` 只能来自鉴权身份。
     *
     * @param Request - GetKnowledgeBaseSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseSourceResponse
     *
     * @param GetKnowledgeBaseSourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetKnowledgeBaseSourceResponse
     */
    public function getKnowledgeBaseSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeBaseSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getKnowledgeBaseSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBaseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定知识在企业知识库中的详细信息。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于获取企业知识库下特定知识的详情。
     * - 调用此接口需要具备 `DEVELOPMENT_KB_VIEW` 功能权限。
     * - 知识详情包括但不限于知识类型、名称、描述等。
     * - 请求时必须提供 `sourceId` 参数，标识要查询的知识。
     * - `tenantId` 是可选参数，默认使用调用方的租户ID。
     * - 支持通过 `AK`、`BearerToken` 或 `APP` 方式进行鉴权。
     * - 安全约束：`tenant_id` 和 `user_id` 只能来自鉴权身份。
     *
     * @param Request - GetKnowledgeBaseSourceRequest
     *
     * @returns GetKnowledgeBaseSourceResponse
     *
     * @param GetKnowledgeBaseSourceRequest $request
     *
     * @return GetKnowledgeBaseSourceResponse
     */
    public function getKnowledgeBaseSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取定时任务执行详情.
     *
     * @param Request - GetScheduledTaskExecutionDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledTaskExecutionDetailResponse
     *
     * @param GetScheduledTaskExecutionDetailRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetScheduledTaskExecutionDetailResponse
     */
    public function getScheduledTaskExecutionDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executionId) {
            @$query['executionId'] = $request->executionId;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledTaskExecutionDetail',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getScheduledTaskExecutionDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScheduledTaskExecutionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取定时任务执行详情.
     *
     * @param Request - GetScheduledTaskExecutionDetailRequest
     *
     * @returns GetScheduledTaskExecutionDetailResponse
     *
     * @param GetScheduledTaskExecutionDetailRequest $request
     *
     * @return GetScheduledTaskExecutionDetailResponse
     */
    public function getScheduledTaskExecutionDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduledTaskExecutionDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取定时任务执行记录.
     *
     * @param Request - GetScheduledTaskExecutionRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledTaskExecutionRecordsResponse
     *
     * @param GetScheduledTaskExecutionRecordsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetScheduledTaskExecutionRecordsResponse
     */
    public function getScheduledTaskExecutionRecordsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collaborationGroupId) {
            @$query['collaborationGroupId'] = $request->collaborationGroupId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledTaskExecutionRecords',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getScheduledTaskExecutionRecords',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScheduledTaskExecutionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取定时任务执行记录.
     *
     * @param Request - GetScheduledTaskExecutionRecordsRequest
     *
     * @returns GetScheduledTaskExecutionRecordsResponse
     *
     * @param GetScheduledTaskExecutionRecordsRequest $request
     *
     * @return GetScheduledTaskExecutionRecordsResponse
     */
    public function getScheduledTaskExecutionRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduledTaskExecutionRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取定时任务理解详情.
     *
     * @param tmpReq - GetScheduledTaskUnderstandDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledTaskUnderstandDetailResponse
     *
     * @param GetScheduledTaskUnderstandDetailRequest $tmpReq
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetScheduledTaskUnderstandDetailResponse
     */
    public function getScheduledTaskUnderstandDetailWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetScheduledTaskUnderstandDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->digitalEmployeeName) {
            $request->digitalEmployeeNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->digitalEmployeeName, 'digitalEmployeeName', 'json');
        }

        if (null !== $tmpReq->segments) {
            $request->segmentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->segments, 'segments', 'json');
        }

        $query = [];
        if (null !== $request->collaborationGroupId) {
            @$query['collaborationGroupId'] = $request->collaborationGroupId;
        }

        if (null !== $request->digitalEmployeeNameShrink) {
            @$query['digitalEmployeeName'] = $request->digitalEmployeeNameShrink;
        }

        if (null !== $request->segmentsShrink) {
            @$query['segments'] = $request->segmentsShrink;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->userInput) {
            @$query['userInput'] = $request->userInput;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledTaskUnderstandDetail',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getScheduledTaskUnderstandDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScheduledTaskUnderstandDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取定时任务理解详情.
     *
     * @param Request - GetScheduledTaskUnderstandDetailRequest
     *
     * @returns GetScheduledTaskUnderstandDetailResponse
     *
     * @param GetScheduledTaskUnderstandDetailRequest $request
     *
     * @return GetScheduledTaskUnderstandDetailResponse
     */
    public function getScheduledTaskUnderstandDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduledTaskUnderstandDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取技能详情。
     *
     * @remarks
     * ## 请求说明
     * 根据 SkillCode 或 SkillName 查询技能详情，包括元数据、入参 Schema、SKILL.md 摘要等。
     * - **TenantId**：可选公共参数，由网关透传到后端 Header；不传时使用当前调用方的默认租户。
     * - **SkillCode**：与 SkillName 二选一；同时传入时 SkillCode 优先。
     * - **SkillName**：与 SkillCode 二选一；租户内不唯一时返回 `ERR.SkillHub.SkillNameAmbiguous`。
     * - **ViewMode**：可选，`draft`（草稿/编辑视角）或 `published`（已发布视角，默认）。
     * - **IncludeSkillFiles**：可选，是否返回完整技能文件树（SKILL.md / scripts / templates），默认 `false`。
     *
     * @param Request - GetSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetSkillResponse
     */
    public function getSkillWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->includeSkillFiles) {
            @$body['includeSkillFiles'] = $request->includeSkillFiles;
        }

        if (null !== $request->skillCode) {
            @$body['skillCode'] = $request->skillCode;
        }

        if (null !== $request->skillName) {
            @$body['skillName'] = $request->skillName;
        }

        if (null !== $request->viewMode) {
            @$body['viewMode'] = $request->viewMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSkill',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getSkill',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取技能详情。
     *
     * @remarks
     * ## 请求说明
     * 根据 SkillCode 或 SkillName 查询技能详情，包括元数据、入参 Schema、SKILL.md 摘要等。
     * - **TenantId**：可选公共参数，由网关透传到后端 Header；不传时使用当前调用方的默认租户。
     * - **SkillCode**：与 SkillName 二选一；同时传入时 SkillCode 优先。
     * - **SkillName**：与 SkillCode 二选一；租户内不唯一时返回 `ERR.SkillHub.SkillNameAmbiguous`。
     * - **ViewMode**：可选，`draft`（草稿/编辑视角）或 `published`（已发布视角，默认）。
     * - **IncludeSkillFiles**：可选，是否返回完整技能文件树（SKILL.md / scripts / templates），默认 `false`。
     *
     * @param Request - GetSkillRequest
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     *
     * @return GetSkillResponse
     */
    public function getSkill($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSkillWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询技能执行结果。
     *
     * @remarks
     * ## 请求说明
     * 通过 `RunId` 查询异步任务的当前状态与结果。
     * - **状态机**：Running（PENDING/RUNNING）→ Succeeded / Failed / Cancelled
     * - **TenantId**：可选公共参数，由网关透传；后端会校验 RunId 必须属于当前租户，否则统一返回 `ERR.SkillHub.RunNotFound`（避免泄漏存在性）。
     * - **IncludeLogs**：可选，是否返回执行日志，默认 `false`。
     * 执行成功时 `Result.Content[]` 为 MCP 风格 Content 块数组（Text / File / Image）。
     *
     * @param Request - GetSkillRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillRunResponse
     *
     * @param GetSkillRunRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetSkillRunResponse
     */
    public function getSkillRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->includeLogs) {
            @$body['includeLogs'] = $request->includeLogs;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSkillRun',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getSkillRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询技能执行结果。
     *
     * @remarks
     * ## 请求说明
     * 通过 `RunId` 查询异步任务的当前状态与结果。
     * - **状态机**：Running（PENDING/RUNNING）→ Succeeded / Failed / Cancelled
     * - **TenantId**：可选公共参数，由网关透传；后端会校验 RunId 必须属于当前租户，否则统一返回 `ERR.SkillHub.RunNotFound`（避免泄漏存在性）。
     * - **IncludeLogs**：可选，是否返回执行日志，默认 `false`。
     * 执行成功时 `Result.Content[]` 为 MCP 风格 Content 块数组（Text / File / Image）。
     *
     * @param Request - GetSkillRunRequest
     *
     * @returns GetSkillRunResponse
     *
     * @param GetSkillRunRequest $request
     *
     * @return GetSkillRunResponse
     */
    public function getSkillRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSkillRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询指定资源（知识）的详细信息，支持按需返回大体积明细字段。
     *
     * @remarks
     * ## 请求说明
     * - `tenant_id` 仅来自鉴权身份；调用方在 body 中传入会被忽略。
     * - 出参不暴露 `creator` / `modifier` 等审计字段；`unstructured_docs[ ].content` 默认不返回，以避免大体积响应。
     * - 通过设置 `includeDetails` 参数为 `True` 可以获取包括 `settings`, `notes`, `structuredTables`, 和 `unstructuredDocs` 在内的更多细节信息。
     *
     * @param Request - GetSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSourceResponse
     *
     * @param GetSourceRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetSourceResponse
     */
    public function getSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->includeDetails) {
            @$body['includeDetails'] = $request->includeDetails;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定资源（知识）的详细信息，支持按需返回大体积明细字段。
     *
     * @remarks
     * ## 请求说明
     * - `tenant_id` 仅来自鉴权身份；调用方在 body 中传入会被忽略。
     * - 出参不暴露 `creator` / `modifier` 等审计字段；`unstructured_docs[ ].content` 默认不返回，以避免大体积响应。
     * - 通过设置 `includeDetails` 参数为 `True` 可以获取包括 `settings`, `notes`, `structuredTables`, 和 `unstructuredDocs` 在内的更多细节信息。
     *
     * @param Request - GetSourceRequest
     *
     * @returns GetSourceResponse
     *
     * @param GetSourceRequest $request
     *
     * @return GetSourceResponse
     */
    public function getSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 生成用于直接上传文件到OSS的签名URL。
     *
     * @remarks
     * ## 请求说明
     * 该API允许调用方根据提供的文件名等信息，获取一个可用于直接上传文件至阿里云OSS（对象存储服务）的签名URL。通过此URL，用户可以将文件直接上传至指定的OSS位置而无需经过中间服务器转发，从而提高效率和安全性。
     * - **安全约束**：`tenant_id`/`user_id`仅来自鉴权身份，即使在请求体中提供也会被忽略。
     * - **默认值**：如果未指定`expires`参数，则默认过期时间为3600秒（即1小时）。
     * - **Content-Type**：如果不提供`contentType`，系统会尝试自动推断文件类型。
     * - **归属范围**：通过`scope`参数定义数据源是属于个人还是企业知识库，默认情况下可能不需要设置。
     *
     * @param Request - GetSourceUploadSignatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSourceUploadSignatureResponse
     *
     * @param GetSourceUploadSignatureRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSourceUploadSignatureResponse
     */
    public function getSourceUploadSignatureWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->expires) {
            @$body['expires'] = $request->expires;
        }

        if (null !== $request->filename) {
            @$body['filename'] = $request->filename;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSourceUploadSignature',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getSourceUploadSignature',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSourceUploadSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成用于直接上传文件到OSS的签名URL。
     *
     * @remarks
     * ## 请求说明
     * 该API允许调用方根据提供的文件名等信息，获取一个可用于直接上传文件至阿里云OSS（对象存储服务）的签名URL。通过此URL，用户可以将文件直接上传至指定的OSS位置而无需经过中间服务器转发，从而提高效率和安全性。
     * - **安全约束**：`tenant_id`/`user_id`仅来自鉴权身份，即使在请求体中提供也会被忽略。
     * - **默认值**：如果未指定`expires`参数，则默认过期时间为3600秒（即1小时）。
     * - **Content-Type**：如果不提供`contentType`，系统会尝试自动推断文件类型。
     * - **归属范围**：通过`scope`参数定义数据源是属于个人还是企业知识库，默认情况下可能不需要设置。
     *
     * @param Request - GetSourceUploadSignatureRequest
     *
     * @returns GetSourceUploadSignatureResponse
     *
     * @param GetSourceUploadSignatureRequest $request
     *
     * @return GetSourceUploadSignatureResponse
     */
    public function getSourceUploadSignature($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSourceUploadSignatureWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询用户的 Token 状态
     *
     * @remarks
     * 查询用户的 INSTANCE Token 状态。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 查询 ACTIVE INSTANCE Token
     *     4. 存在 → 返回 enabled=True + 脱敏值 + 创建时间
     *     5. 不存在 → 返回 enabled=False
     *
     * @param Request - GetTokenInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenInfoResponse
     *
     * @param GetTokenInfoRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetTokenInfoResponse
     */
    public function getTokenInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTokenInfo',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getTokenInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户的 Token 状态
     *
     * @remarks
     * 查询用户的 INSTANCE Token 状态。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 查询 ACTIVE INSTANCE Token
     *     4. 存在 → 返回 enabled=True + 脱敏值 + 创建时间
     *     5. 不存在 → 返回 enabled=False
     *
     * @param Request - GetTokenInfoRequest
     *
     * @returns GetTokenInfoResponse
     *
     * @param GetTokenInfoRequest $request
     *
     * @return GetTokenInfoResponse
     */
    public function getTokenInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询用户详情.
     *
     * @remarks
     * OpenAPI 查询用户详情。
     *     业务编排：
     *     1. 按 wnUserId 或 accountId 定位用户
     *     2. 查询用户在当前租户的映射信息（状态、加入时间、最后登录）
     *     3. 查询用户在当前租户的角色列表
     *     4. 查询用户在当前租户的用户组列表
     *     5. 组装响应
     *     错误码：
     *     - ERR.User.NotFound: 用户不存在
     *     - ERR.User.NotInTenant: 用户不在当前租户下
     *
     * @param Request - GetUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->wnAccountId) {
            @$query['wnAccountId'] = $request->wnAccountId;
        }

        if (null !== $request->wnUserId) {
            @$query['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户详情.
     *
     * @remarks
     * OpenAPI 查询用户详情。
     *     业务编排：
     *     1. 按 wnUserId 或 accountId 定位用户
     *     2. 查询用户在当前租户的映射信息（状态、加入时间、最后登录）
     *     3. 查询用户在当前租户的角色列表
     *     4. 查询用户在当前租户的用户组列表
     *     5. 组装响应
     *     错误码：
     *     - ERR.User.NotFound: 用户不存在
     *     - ERR.User.NotInTenant: 用户不在当前租户下
     *
     * @param Request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询当前登录用户的实时信用消耗、限额及剩余情况。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取当前登录用户的信用使用详情，包括信用限额、已消耗的信用额度以及剩余信用额度。
     * - 数据来源于Redis实时缓存，确保了信息的即时性。
     * - 支持通过租户ID来指定查询特定租户下的用户信用使用情况，默认情况下将使用调用方的默认租户。
     * - 请求时可选择提供`RequestId`作为请求标识符，但这不是必需的。
     *
     * @param Request - GetUserCreditUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserCreditUsageResponse
     *
     * @param GetUserCreditUsageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserCreditUsageResponse
     */
    public function getUserCreditUsageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserCreditUsage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getUserCreditUsage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserCreditUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前登录用户的实时信用消耗、限额及剩余情况。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取当前登录用户的信用使用详情，包括信用限额、已消耗的信用额度以及剩余信用额度。
     * - 数据来源于Redis实时缓存，确保了信息的即时性。
     * - 支持通过租户ID来指定查询特定租户下的用户信用使用情况，默认情况下将使用调用方的默认租户。
     * - 请求时可选择提供`RequestId`作为请求标识符，但这不是必需的。
     *
     * @param Request - GetUserCreditUsageRequest
     *
     * @returns GetUserCreditUsageResponse
     *
     * @param GetUserCreditUsageRequest $request
     *
     * @return GetUserCreditUsageResponse
     */
    public function getUserCreditUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserCreditUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过OpenAPI获取鉴权用户的完整信息，包括基本信息、租户列表等。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于返回当前鉴权用户的详细信息。
     * - 当租户信息失效时，将返回对应的错误信息。
     * - `tenantId`为可选参数，若未提供，则使用调用方默认的租户ID。
     * - 支持多种认证方式：AK、BearerToken和APP认证。
     * - 返回的数据中包含了用户的个人资料（如用户名、头像链接）、角色偏好设置以及所属的所有租户详情。
     * - 特别注意，如果当前登录的租户是系统租户（即`tenantId=10000`），则会在响应中明确标识出来。
     *
     * @param Request - GetUserInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserInfoResponse
     *
     * @param GetUserInfoRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserInfo',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/getUserInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过OpenAPI获取鉴权用户的完整信息，包括基本信息、租户列表等。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于返回当前鉴权用户的详细信息。
     * - 当租户信息失效时，将返回对应的错误信息。
     * - `tenantId`为可选参数，若未提供，则使用调用方默认的租户ID。
     * - 支持多种认证方式：AK、BearerToken和APP认证。
     * - 返回的数据中包含了用户的个人资料（如用户名、头像链接）、角色偏好设置以及所属的所有租户详情。
     * - 特别注意，如果当前登录的租户是系统租户（即`tenantId=10000`），则会在响应中明确标识出来。
     *
     * @param Request - GetUserInfoRequest
     *
     * @returns GetUserInfoResponse
     *
     * @param GetUserInfoRequest $request
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 授权用户/用户组使用数字员工.
     *
     * @remarks
     * 授权用户或用户组使用指定数字员工。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 请求体互斥校验：userIds / userGroupIds 二选一
     *     3. 委托 AgentAuthorizationAuthorizedService.grant_authorization 执行
     *     4. 前置校验：MANAGE 权限 + agent 存在性（由 AuthorizedService 层执行，先鉴权后暴露存在性）
     *     5. 已存在的授权记录会被更新（expire_date / permissions）
     *
     * @param tmpReq - GrantAgentUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantAgentUsersResponse
     *
     * @param GrantAgentUsersRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GrantAgentUsersResponse
     */
    public function grantAgentUsersWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GrantAgentUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'permissions', 'json');
        }

        if (null !== $tmpReq->userGroupIds) {
            $request->userGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userGroupIds, 'userGroupIds', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'userIds', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->expireDate) {
            @$body['expireDate'] = $request->expireDate;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->permissionsShrink) {
            @$body['permissions'] = $request->permissionsShrink;
        }

        if (null !== $request->userGroupIdsShrink) {
            @$body['userGroupIds'] = $request->userGroupIdsShrink;
        }

        if (null !== $request->userIdsShrink) {
            @$body['userIds'] = $request->userIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantAgentUsers',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/grantAgentUsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantAgentUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权用户/用户组使用数字员工.
     *
     * @remarks
     * 授权用户或用户组使用指定数字员工。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 请求体互斥校验：userIds / userGroupIds 二选一
     *     3. 委托 AgentAuthorizationAuthorizedService.grant_authorization 执行
     *     4. 前置校验：MANAGE 权限 + agent 存在性（由 AuthorizedService 层执行，先鉴权后暴露存在性）
     *     5. 已存在的授权记录会被更新（expire_date / permissions）
     *
     * @param Request - GrantAgentUsersRequest
     *
     * @returns GrantAgentUsersResponse
     *
     * @param GrantAgentUsersRequest $request
     *
     * @return GrantAgentUsersResponse
     */
    public function grantAgentUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantAgentUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于查询或下钻查看租户的企业知识库列表。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 支持两种模式：当 `directoryId` 为空或为 'root' 时，返回知识库的顶层列表；当 `directoryId` 有具体值时，则进行下钻操作，返回指定目录下的子目录和资源。
     * - `tenantId` 作为公共参数，若未提供则默认使用调用方的租户 ID。
     * - 在下钻模式下（即 `directoryId` 非空），可以通过 `sourceTypes` 参数来过滤特定类型的资源。
     * - 排序字段 (`sortField`) 和排序方向 (`sortOrder`) 可以自定义，但非法值将被重置为默认设置。
     * - 搜索功能仅在获取顶层列表时有效，并且只支持模糊匹配名称或描述。
     * - 安全性方面，`tenant_id` 严格从鉴权身份中获取，不允许通过请求体传递。
     *
     * @param tmpReq - ListAdminKnowledgeBasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAdminKnowledgeBasesResponse
     *
     * @param ListAdminKnowledgeBasesRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAdminKnowledgeBasesResponse
     */
    public function listAdminKnowledgeBasesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAdminKnowledgeBasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceTypes) {
            $request->sourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTypes, 'sourceTypes', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortField) {
            @$body['sortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['sortOrder'] = $request->sortOrder;
        }

        if (null !== $request->sourceTypesShrink) {
            @$body['sourceTypes'] = $request->sourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAdminKnowledgeBases',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listAdminKnowledgeBases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAdminKnowledgeBasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于查询或下钻查看租户的企业知识库列表。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 支持两种模式：当 `directoryId` 为空或为 'root' 时，返回知识库的顶层列表；当 `directoryId` 有具体值时，则进行下钻操作，返回指定目录下的子目录和资源。
     * - `tenantId` 作为公共参数，若未提供则默认使用调用方的租户 ID。
     * - 在下钻模式下（即 `directoryId` 非空），可以通过 `sourceTypes` 参数来过滤特定类型的资源。
     * - 排序字段 (`sortField`) 和排序方向 (`sortOrder`) 可以自定义，但非法值将被重置为默认设置。
     * - 搜索功能仅在获取顶层列表时有效，并且只支持模糊匹配名称或描述。
     * - 安全性方面，`tenant_id` 严格从鉴权身份中获取，不允许通过请求体传递。
     *
     * @param Request - ListAdminKnowledgeBasesRequest
     *
     * @returns ListAdminKnowledgeBasesResponse
     *
     * @param ListAdminKnowledgeBasesRequest $request
     *
     * @return ListAdminKnowledgeBasesResponse
     */
    public function listAdminKnowledgeBases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAdminKnowledgeBasesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询租户全量数字员工列表.
     *
     * @remarks
     * 查询租户下全部数字员工列表（含停用）。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.list_agents 完成权限校验（APPLICATION_AGENT_VIEW）
     *     3. 返回租户全量数字员工的富字段（operatingObjectName / displayName / authMode / isActive）
     *     4. 系统级 Token 通过 ctx.skip_permission 自动放行
     *     与 listAuthorizedAgents 区别：本接口返回租户全量（含停用、不做授权过滤），
     *     并携带 displayName / isActive 等富字段，供管理端展示。
     *
     * @param Request - ListAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAgentsResponse
     */
    public function listAgentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgents',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listAgents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询租户全量数字员工列表.
     *
     * @remarks
     * 查询租户下全部数字员工列表（含停用）。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.list_agents 完成权限校验（APPLICATION_AGENT_VIEW）
     *     3. 返回租户全量数字员工的富字段（operatingObjectName / displayName / authMode / isActive）
     *     4. 系统级 Token 通过 ctx.skip_permission 自动放行
     *     与 listAuthorizedAgents 区别：本接口返回租户全量（含停用、不做授权过滤），
     *     并携带 displayName / isActive 等富字段，供管理端展示。
     *
     * @param Request - ListAgentsRequest
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     *
     * @return ListAgentsResponse
     */
    public function listAgents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询调用方有指定权限的数字员工名称列表.
     *
     * @remarks
     * 查询当前调用方（或指定目标用户）拥有指定权限（USE/MANAGE）的数字员工名称列表。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.list_authorized_agents 执行查询
     *     3. skip_permission=True 时返回租户全量活跃 agent
     *     4. 普通用户根据授权记录 + auth_mode 过滤
     *     5. 传入 targetUserId（代查他人）时需 APPLICATION_AGENT_VIEW 门控，查询限定本租户；
     *        目标用户非本租户成员时抛 USER_NOT_IN_TENANT（不静默返回空列表）
     *
     * @param Request - ListAuthorizedAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedAgentsResponse
     *
     * @param ListAuthorizedAgentsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAuthorizedAgentsResponse
     */
    public function listAuthorizedAgentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->permission) {
            @$body['permission'] = $request->permission;
        }

        if (null !== $request->targetUserId) {
            @$body['targetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedAgents',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listAuthorizedAgents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询调用方有指定权限的数字员工名称列表.
     *
     * @remarks
     * 查询当前调用方（或指定目标用户）拥有指定权限（USE/MANAGE）的数字员工名称列表。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.list_authorized_agents 执行查询
     *     3. skip_permission=True 时返回租户全量活跃 agent
     *     4. 普通用户根据授权记录 + auth_mode 过滤
     *     5. 传入 targetUserId（代查他人）时需 APPLICATION_AGENT_VIEW 门控，查询限定本租户；
     *        目标用户非本租户成员时抛 USER_NOT_IN_TENANT（不静默返回空列表）
     *
     * @param Request - ListAuthorizedAgentsRequest
     *
     * @returns ListAuthorizedAgentsResponse
     *
     * @param ListAuthorizedAgentsRequest $request
     *
     * @return ListAuthorizedAgentsResponse
     */
    public function listAuthorizedAgents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorizedAgentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询数字员工已授权的用户/用户组列表.
     *
     * @remarks
     * 查询某数字员工已授权的用户/用户组列表。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.list_authorized_users 执行查询
     *     3. 权限校验由 AuthorizedService 层 @require_permission(APPLICATION_AGENT_VIEW) 完成
     *     4. auth_mode=ALL_USERS 时仅展示有 MANAGE 权限的记录
     *
     * @param Request - ListAuthorizedUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedUsersResponse
     *
     * @param ListAuthorizedUsersRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAuthorizedUsersResponse
     */
    public function listAuthorizedUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->granteeType) {
            @$body['granteeType'] = $request->granteeType;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->permission) {
            @$body['permission'] = $request->permission;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedUsers',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listAuthorizedUsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数字员工已授权的用户/用户组列表.
     *
     * @remarks
     * 查询某数字员工已授权的用户/用户组列表。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.list_authorized_users 执行查询
     *     3. 权限校验由 AuthorizedService 层 @require_permission(APPLICATION_AGENT_VIEW) 完成
     *     4. auth_mode=ALL_USERS 时仅展示有 MANAGE 权限的记录
     *
     * @param Request - ListAuthorizedUsersRequest
     *
     * @returns ListAuthorizedUsersResponse
     *
     * @param ListAuthorizedUsersRequest $request
     *
     * @return ListAuthorizedUsersResponse
     */
    public function listAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorizedUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 枚举可用的组织同步配置.
     *
     * @remarks
     * 枚举当前租户下所有可用的组织同步配置。
     *     返回统一格式的 configs 列表，涵盖四种平台类型：
     *     - **wecom**：从 SsoProviderRegistry 获取活跃的企微 SSO 配置
     *     - **saml**：从 SsoProviderRegistry 获取活跃的 SAML SSO 配置，corpId 取 idpEntityId
     *     - **oauth2**：从 SsoProviderRegistry 获取活跃的 OAuth2 SSO 配置，corpId 取 clientId
     *     - **custom**：从数据库查询该租户已注册的纯自定义组织
     *     客户端根据返回的 platformType 区分处理逻辑，corpId 为后续同步接口的必传参数。
     *
     * @param Request - ListAvailableConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableConfigsResponse
     *
     * @param ListAvailableConfigsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAvailableConfigsResponse
     */
    public function listAvailableConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvailableConfigs',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listAvailableConfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAvailableConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 枚举可用的组织同步配置.
     *
     * @remarks
     * 枚举当前租户下所有可用的组织同步配置。
     *     返回统一格式的 configs 列表，涵盖四种平台类型：
     *     - **wecom**：从 SsoProviderRegistry 获取活跃的企微 SSO 配置
     *     - **saml**：从 SsoProviderRegistry 获取活跃的 SAML SSO 配置，corpId 取 idpEntityId
     *     - **oauth2**：从 SsoProviderRegistry 获取活跃的 OAuth2 SSO 配置，corpId 取 clientId
     *     - **custom**：从数据库查询该租户已注册的纯自定义组织
     *     客户端根据返回的 platformType 区分处理逻辑，corpId 为后续同步接口的必传参数。
     *
     * @param Request - ListAvailableConfigsRequest
     *
     * @returns ListAvailableConfigsResponse
     *
     * @param ListAvailableConfigsRequest $request
     *
     * @return ListAvailableConfigsResponse
     */
    public function listAvailableConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过OpenAPI查询并筛选账单列表，支持多种条件过滤。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询指定条件下的账单列表。
     * - 支持按租户、用户、操作类型、状态、时间范围、业务来源等条件进行筛选。
     * - 分页返回账单数据，默认每页显示20条记录。
     * - 可选择是否过滤掉credit消耗为0的账单，默认过滤。
     * - 请求时需提供必要的认证信息（如AK、BearerToken或APP认证）。
     *
     * @param Request - ListBillingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBillingResponse
     *
     * @param ListBillingRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListBillingResponse
     */
    public function listBillingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->bizId) {
            @$body['bizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->ignoreZero) {
            @$body['ignoreZero'] = $request->ignoreZero;
        }

        if (null !== $request->operation) {
            @$body['operation'] = $request->operation;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBilling',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listBilling',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBillingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过OpenAPI查询并筛选账单列表，支持多种条件过滤。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询指定条件下的账单列表。
     * - 支持按租户、用户、操作类型、状态、时间范围、业务来源等条件进行筛选。
     * - 分页返回账单数据，默认每页显示20条记录。
     * - 可选择是否过滤掉credit消耗为0的账单，默认过滤。
     * - 请求时需提供必要的认证信息（如AK、BearerToken或APP认证）。
     *
     * @param Request - ListBillingRequest
     *
     * @returns ListBillingResponse
     *
     * @param ListBillingRequest $request
     *
     * @return ListBillingResponse
     */
    public function listBilling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBillingWithOptions($request, $headers, $runtime);
    }

    /**
     * 按创建时间倒序列出当前用户的聊天会话。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 支持通过多种参数进行过滤和排序，包括租户 ID、分页大小、分页令牌、关键词搜索、数字员工名称以及更新时间区间。
     * - 默认情况下，结果将按照 `UpdatedAt` 字段降序排列。
     * - 如果提供了无效的 `NextToken` 或者 `PageSize` 超出了允许范围（1-100），API 将返回 400 错误。
     *
     * @param Request - ListChatSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatSessionsResponse
     *
     * @param ListChatSessionsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListChatSessionsResponse
     */
    public function listChatSessionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->digitalEmployeeName) {
            @$query['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatSessions',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listChatSessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChatSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按创建时间倒序列出当前用户的聊天会话。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 支持通过多种参数进行过滤和排序，包括租户 ID、分页大小、分页令牌、关键词搜索、数字员工名称以及更新时间区间。
     * - 默认情况下，结果将按照 `UpdatedAt` 字段降序排列。
     * - 如果提供了无效的 `NextToken` 或者 `PageSize` 超出了允许范围（1-100），API 将返回 400 错误。
     *
     * @param Request - ListChatSessionsRequest
     *
     * @returns ListChatSessionsResponse
     *
     * @param ListChatSessionsRequest $request
     *
     * @return ListChatSessionsResponse
     */
    public function listChatSessions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChatSessionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询租户可用于语义查询的图谱列表.
     *
     * @remarks
     * 列出身份租户下的已发布图谱。
     *     CLI 映射为 ``winnexo graph list``；``tenantId`` 是必传公共参数，不进入请求体。
     *     返回的 ``graphName`` 可直接用于 ``querySemanticKnowledge``。该查询与现有前台
     *     图谱列表保持一致，不做数字员工权限过滤；具体语义查询仍会校验 agent USE 权限。
     *     数据库异常直接进入统一 5xx 错误处理，不会伪装为成功空列表。
     *
     * @param Request - ListGraphsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGraphsResponse
     *
     * @param ListGraphsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListGraphsResponse
     */
    public function listGraphsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGraphs',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listGraphs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGraphsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询租户可用于语义查询的图谱列表.
     *
     * @remarks
     * 列出身份租户下的已发布图谱。
     *     CLI 映射为 ``winnexo graph list``；``tenantId`` 是必传公共参数，不进入请求体。
     *     返回的 ``graphName`` 可直接用于 ``querySemanticKnowledge``。该查询与现有前台
     *     图谱列表保持一致，不做数字员工权限过滤；具体语义查询仍会校验 agent USE 权限。
     *     数据库异常直接进入统一 5xx 错误处理，不会伪装为成功空列表。
     *
     * @param Request - ListGraphsRequest
     *
     * @returns ListGraphsResponse
     *
     * @param ListGraphsRequest $request
     *
     * @return ListGraphsResponse
     */
    public function listGraphs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGraphsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询企业知识库的分类目录树，支持按指定字段排序。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于获取企业知识库的分类列表（子目录树），需要具备知识库查看权限。
     * - 如果未提供 `directoryId` 参数，则返回企业知识库根目录下的所有分类树；如果提供了 `directoryId`，则以该目录为根返回其子目录树。
     * - 支持通过 `sortField` 和 `sortOrder` 参数对结果进行排序，默认按照创建时间降序排列。
     * - 安全约束：`tenant_id` 和 `user_id` 仅来自鉴权身份，并且调用者必须拥有 `DEVELOPMENT_KB_VIEW` 功能权限。
     *
     * @param Request - ListKnowledgeBaseDirectoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBaseDirectoriesResponse
     *
     * @param ListKnowledgeBaseDirectoriesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListKnowledgeBaseDirectoriesResponse
     */
    public function listKnowledgeBaseDirectoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->sortField) {
            @$body['sortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['sortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBaseDirectories',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listKnowledgeBaseDirectories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBaseDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询企业知识库的分类目录树，支持按指定字段排序。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于获取企业知识库的分类列表（子目录树），需要具备知识库查看权限。
     * - 如果未提供 `directoryId` 参数，则返回企业知识库根目录下的所有分类树；如果提供了 `directoryId`，则以该目录为根返回其子目录树。
     * - 支持通过 `sortField` 和 `sortOrder` 参数对结果进行排序，默认按照创建时间降序排列。
     * - 安全约束：`tenant_id` 和 `user_id` 仅来自鉴权身份，并且调用者必须拥有 `DEVELOPMENT_KB_VIEW` 功能权限。
     *
     * @param Request - ListKnowledgeBaseDirectoriesRequest
     *
     * @returns ListKnowledgeBaseDirectoriesResponse
     *
     * @param ListKnowledgeBaseDirectoriesRequest $request
     *
     * @return ListKnowledgeBaseDirectoriesResponse
     */
    public function listKnowledgeBaseDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBaseDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询当前用户的产出列表，支持按条件过滤和分页。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于查询当前登录用户的产出列表。
     * - `tenantId`作为公共参数，缺省时使用调用方默认租户。
     * - 支持通过`operatingObjectName`、`itemType`、`keyword`等参数进行过滤查询。
     * - 可以设置`sharedOnly`为`true`来仅展示开启分享的产出。
     * - 分页信息通过`page`（页码）和`pageSize`（每页数量）控制，默认从第1页开始，每页显示20条记录。
     * - 默认按更新时间倒序排列。
     * - 调用者在请求体中传入的`tenant_id`或`user_id`将被忽略，这些信息仅来自鉴权身份。
     *
     * @param Request - ListOutputFilesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutputFilesResponse
     *
     * @param ListOutputFilesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListOutputFilesResponse
     */
    public function listOutputFilesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->itemType) {
            @$body['itemType'] = $request->itemType;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sharedOnly) {
            @$body['sharedOnly'] = $request->sharedOnly;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOutputFiles',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listOutputFiles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutputFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前用户的产出列表，支持按条件过滤和分页。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于查询当前登录用户的产出列表。
     * - `tenantId`作为公共参数，缺省时使用调用方默认租户。
     * - 支持通过`operatingObjectName`、`itemType`、`keyword`等参数进行过滤查询。
     * - 可以设置`sharedOnly`为`true`来仅展示开启分享的产出。
     * - 分页信息通过`page`（页码）和`pageSize`（每页数量）控制，默认从第1页开始，每页显示20条记录。
     * - 默认按更新时间倒序排列。
     * - 调用者在请求体中传入的`tenant_id`或`user_id`将被忽略，这些信息仅来自鉴权身份。
     *
     * @param Request - ListOutputFilesRequest
     *
     * @returns ListOutputFilesResponse
     *
     * @param ListOutputFilesRequest $request
     *
     * @return ListOutputFilesResponse
     */
    public function listOutputFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOutputFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询指定数字员工资源目录下的子目录与资源。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于下钻查询"我的资源"目录下的子目录与资源。
     * - 当 `directoryId` 设置为 'root' 时，服务将自动解析并返回当前数字员工默认根目录下的内容；若提供具体的目录 ID，则返回该目录下的子目录和资源。
     * - 安全约束：`tenant_id` 和 `user_id` 只能来自鉴权身份信息，调用方在请求体中提供的这些字段将被忽略。
     * - 支持通过 `sourceTypes` 参数筛选特定类型的资源，当此参数有值时，仅返回符合类型条件的资源而不包含子目录。
     * - 排序支持按名称 (`name`)、创建时间 (`gmt_create`) 或修改时间 (`gmt_modified`) 进行升序或降序排列。
     * - 分页功能允许用户自定义每页显示的数量（最大100）及当前查看的页码。
     *
     * @param tmpReq - ListPersonalDirectoryContentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPersonalDirectoryContentsResponse
     *
     * @param ListPersonalDirectoryContentsRequest $tmpReq
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListPersonalDirectoryContentsResponse
     */
    public function listPersonalDirectoryContentsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPersonalDirectoryContentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceTypes) {
            $request->sourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTypes, 'sourceTypes', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortField) {
            @$body['sortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['sortOrder'] = $request->sortOrder;
        }

        if (null !== $request->sourceTypesShrink) {
            @$body['sourceTypes'] = $request->sourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPersonalDirectoryContents',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listPersonalDirectoryContents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPersonalDirectoryContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定数字员工资源目录下的子目录与资源。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于下钻查询"我的资源"目录下的子目录与资源。
     * - 当 `directoryId` 设置为 'root' 时，服务将自动解析并返回当前数字员工默认根目录下的内容；若提供具体的目录 ID，则返回该目录下的子目录和资源。
     * - 安全约束：`tenant_id` 和 `user_id` 只能来自鉴权身份信息，调用方在请求体中提供的这些字段将被忽略。
     * - 支持通过 `sourceTypes` 参数筛选特定类型的资源，当此参数有值时，仅返回符合类型条件的资源而不包含子目录。
     * - 排序支持按名称 (`name`)、创建时间 (`gmt_create`) 或修改时间 (`gmt_modified`) 进行升序或降序排列。
     * - 分页功能允许用户自定义每页显示的数量（最大100）及当前查看的页码。
     *
     * @param Request - ListPersonalDirectoryContentsRequest
     *
     * @returns ListPersonalDirectoryContentsResponse
     *
     * @param ListPersonalDirectoryContentsRequest $request
     *
     * @return ListPersonalDirectoryContentsResponse
     */
    public function listPersonalDirectoryContents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPersonalDirectoryContentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询系统内置角色列表.
     *
     * @remarks
     * 查询系统内置角色列表。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 UserManagementAuthorizedService.list_system_roles 完成权限校验（PLATFORM_USER_VIEW）
     *     3. 按请求 Accept-Language 渲染角色名称与说明
     *     4. 返回固定的 7 个系统内置角色
     *     返回字段 roleCode 可直接用于 createUser / updateUser 的 roleCodes 参数。
     *
     * @param Request - ListRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listRoles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询系统内置角色列表.
     *
     * @remarks
     * 查询系统内置角色列表。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 UserManagementAuthorizedService.list_system_roles 完成权限校验（PLATFORM_USER_VIEW）
     *     3. 按请求 Accept-Language 渲染角色名称与说明
     *     4. 返回固定的 7 个系统内置角色
     *     返回字段 roleCode 可直接用于 createUser / updateUser 的 roleCodes 参数。
     *
     * @param Request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取定时任务列表.
     *
     * @param Request - ListScheduledTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledTasksResponse
     *
     * @param ListScheduledTasksRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collaborationGroupId) {
            @$query['collaborationGroupId'] = $request->collaborationGroupId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledTasks',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listScheduledTasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取定时任务列表.
     *
     * @param Request - ListScheduledTasksRequest
     *
     * @returns ListScheduledTasksResponse
     *
     * @param ListScheduledTasksRequest $request
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScheduledTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出当前租户可见的技能。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于获取当前租户下所有可见的技能列表。支持按数字员工绑定关系、技能来源、标签、关键词等条件进行过滤，并支持分页。
     * ### 入参
     * - **TenantId**：可选，公共参数，由网关透传到后端 Header；不传时使用当前调用方所属的默认租户。
     * - **FilterType**：可选，技能筛选维度。可选值：`ALL`(全部已发布)、`BUILTIN`(内置已发布)、`CUSTOM`(自定义已发布)、`DRAFT`(草稿箱，含未发布修改的已发布技能)。默认 `ALL`。
     * - **Tags**：可选，按标签过滤，数组任一命中即匹配。
     * - **Keyword**：可选，按技能名称或描述模糊匹配。
     * - **Page**：可选，页码，最小 1，默认 1。
     * - **PageSize**：可选，每页数量，范围 1~100，默认 20。
     * - **OperatingObjectName**：可选，数字员工名称，传入时按绑定关系过滤；必须配合 `BindStatus` 使用。
     * - **BindStatus**：可选，绑定状态。可选值：`BOUND`(已绑定)、`UNBOUND`(未绑定的全局技能)。
     * ### 出参
     * 响应包含技能列表 `items`、总数 `total`、当前页 `page` 与每页数量 `pageSize`。
     *
     * @param tmpReq - ListSkillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListSkillsResponse
     */
    public function listSkillsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSkillsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->bindStatus) {
            @$body['bindStatus'] = $request->bindStatus;
        }

        if (null !== $request->filterType) {
            @$body['filterType'] = $request->filterType;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSkills',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listSkills',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出当前租户可见的技能。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于获取当前租户下所有可见的技能列表。支持按数字员工绑定关系、技能来源、标签、关键词等条件进行过滤，并支持分页。
     * ### 入参
     * - **TenantId**：可选，公共参数，由网关透传到后端 Header；不传时使用当前调用方所属的默认租户。
     * - **FilterType**：可选，技能筛选维度。可选值：`ALL`(全部已发布)、`BUILTIN`(内置已发布)、`CUSTOM`(自定义已发布)、`DRAFT`(草稿箱，含未发布修改的已发布技能)。默认 `ALL`。
     * - **Tags**：可选，按标签过滤，数组任一命中即匹配。
     * - **Keyword**：可选，按技能名称或描述模糊匹配。
     * - **Page**：可选，页码，最小 1，默认 1。
     * - **PageSize**：可选，每页数量，范围 1~100，默认 20。
     * - **OperatingObjectName**：可选，数字员工名称，传入时按绑定关系过滤；必须配合 `BindStatus` 使用。
     * - **BindStatus**：可选，绑定状态。可选值：`BOUND`(已绑定)、`UNBOUND`(未绑定的全局技能)。
     * ### 出参
     * 响应包含技能列表 `items`、总数 `total`、当前页 `page` 与每页数量 `pageSize`。
     *
     * @param Request - ListSkillsRequest
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     *
     * @return ListSkillsResponse
     */
    public function listSkills($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSkillsWithOptions($request, $headers, $runtime);
    }

    /**
     * 按管理端口径分页查询企业知识库目录与资源。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于分页查询企业知识库中的目录内容和资源。
     * - 支持通过多种参数进行过滤和排序，如`directoryId`、`page`、`pageSize`、`sortField`、`sortOrder`等。
     * - `sourceTypes`参数允许用户根据资源类型进行过滤，多个类型使用逗号分隔。
     * - 当不传或传入`root`作为`directoryId`时，默认查询知识库根目录列表。
     * - 默认的排序字段为`name`，默认排序方向为升序（`asc`）。
     *
     * @param Request - ListTenantDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTenantDirectoryResponse
     *
     * @param ListTenantDirectoryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListTenantDirectoryResponse
     */
    public function listTenantDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortField) {
            @$body['sortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['sortOrder'] = $request->sortOrder;
        }

        if (null !== $request->sourceTypes) {
            @$body['sourceTypes'] = $request->sourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTenantDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listTenantDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTenantDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按管理端口径分页查询企业知识库目录与资源。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于分页查询企业知识库中的目录内容和资源。
     * - 支持通过多种参数进行过滤和排序，如`directoryId`、`page`、`pageSize`、`sortField`、`sortOrder`等。
     * - `sourceTypes`参数允许用户根据资源类型进行过滤，多个类型使用逗号分隔。
     * - 当不传或传入`root`作为`directoryId`时，默认查询知识库根目录列表。
     * - 默认的排序字段为`name`，默认排序方向为升序（`asc`）。
     *
     * @param Request - ListTenantDirectoryRequest
     *
     * @returns ListTenantDirectoryResponse
     *
     * @param ListTenantDirectoryRequest $request
     *
     * @return ListTenantDirectoryResponse
     */
    public function listTenantDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTenantDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询当前 OpenAPI 用户可见知识库目录内容。
     *
     * @remarks
     * ## 请求说明
     * - 本接口按企业知识库前台口径返回指定目录的子目录和 READY 资源。
     * - 用户身份与目录可见范围均来自 OpenAPI 鉴权上下文。
     * - `sourceTypes` 有值时仅返回资源；`keyword` 仅搜索当前目录层级。
     *
     * @param Request - ListUserVisibleKnowledgeBaseContentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserVisibleKnowledgeBaseContentsResponse
     *
     * @param ListUserVisibleKnowledgeBaseContentsRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListUserVisibleKnowledgeBaseContentsResponse
     */
    public function listUserVisibleKnowledgeBaseContentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortField) {
            @$body['sortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['sortOrder'] = $request->sortOrder;
        }

        if (null !== $request->sourceTypes) {
            @$body['sourceTypes'] = $request->sourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserVisibleKnowledgeBaseContents',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listUserVisibleKnowledgeBaseContents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserVisibleKnowledgeBaseContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前 OpenAPI 用户可见知识库目录内容。
     *
     * @remarks
     * ## 请求说明
     * - 本接口按企业知识库前台口径返回指定目录的子目录和 READY 资源。
     * - 用户身份与目录可见范围均来自 OpenAPI 鉴权上下文。
     * - `sourceTypes` 有值时仅返回资源；`keyword` 仅搜索当前目录层级。
     *
     * @param Request - ListUserVisibleKnowledgeBaseContentsRequest
     *
     * @returns ListUserVisibleKnowledgeBaseContentsResponse
     *
     * @param ListUserVisibleKnowledgeBaseContentsRequest $request
     *
     * @return ListUserVisibleKnowledgeBaseContentsResponse
     */
    public function listUserVisibleKnowledgeBaseContents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserVisibleKnowledgeBaseContentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询当前 OpenAPI 用户可见的企业知识库列表。
     *
     * @remarks
     * ## 请求说明
     * - 本接口按 OpenAPI 鉴权身份映射的平台用户查询其可见企业知识库。
     * - 租户和用户身份均由鉴权上下文确定，调用方不能通过业务参数扩大可见范围。
     * - `tenantId` 为可选公共参数；`keyword` 可按知识库名称或描述过滤。
     *
     * @param Request - ListUserVisibleKnowledgeBasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserVisibleKnowledgeBasesResponse
     *
     * @param ListUserVisibleKnowledgeBasesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListUserVisibleKnowledgeBasesResponse
     */
    public function listUserVisibleKnowledgeBasesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserVisibleKnowledgeBases',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listUserVisibleKnowledgeBases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserVisibleKnowledgeBasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前 OpenAPI 用户可见的企业知识库列表。
     *
     * @remarks
     * ## 请求说明
     * - 本接口按 OpenAPI 鉴权身份映射的平台用户查询其可见企业知识库。
     * - 租户和用户身份均由鉴权上下文确定，调用方不能通过业务参数扩大可见范围。
     * - `tenantId` 为可选公共参数；`keyword` 可按知识库名称或描述过滤。
     *
     * @param Request - ListUserVisibleKnowledgeBasesRequest
     *
     * @returns ListUserVisibleKnowledgeBasesResponse
     *
     * @param ListUserVisibleKnowledgeBasesRequest $request
     *
     * @return ListUserVisibleKnowledgeBasesResponse
     */
    public function listUserVisibleKnowledgeBases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserVisibleKnowledgeBasesWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询租户成员列表.
     *
     * @remarks
     * OpenAPI 分页查询租户成员列表。
     *     业务编排：
     *     1. 解析筛选条件（roleCodes → role_ids）
     *     2. 调用 UserTenantMappingRepository.query_paged_tenant_members 分页查询
     *     3. 将结果中的 role_id 转为 roleCode 并组装响应
     *     错误码：
     *     - 非法 roleCode 参数时抛出错误
     *
     * @param tmpReq - ListUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'accountIds', 'json');
        }

        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'roleCodes', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->accountIdsShrink) {
            @$body['accountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->isActive) {
            @$body['isActive'] = $request->isActive;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['roleCodes'] = $request->roleCodesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listUsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询租户成员列表.
     *
     * @remarks
     * OpenAPI 分页查询租户成员列表。
     *     业务编排：
     *     1. 解析筛选条件（roleCodes → role_ids）
     *     2. 调用 UserTenantMappingRepository.query_paged_tenant_members 分页查询
     *     3. 将结果中的 role_id 转为 roleCode 并组装响应
     *     错误码：
     *     - 非法 roleCode 参数时抛出错误
     *
     * @param Request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 下钻查询指定数字员工可见的知识库目录下的子目录与资源。
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于查询特定数字员工在指定知识库目录下的所有子目录和资源。
     * - 用户需拥有对目标数字员工的USE权限，且该数字员工必须有权访问请求中指定的目录及其子目录。
     * - 请求时需要提供数字员工名称（`operatingObjectName`）及要查询的目录ID（`directoryId`），其他参数如分页信息、排序方式等为可选项。
     * - 接口返回结果包括目录下的子目录和资源列表，并支持按页码分页显示。
     * - `sourceStatus`字段固定过滤值为`READY`状态的资源。
     * - 安全性方面，`tenant_id`与`user_id`仅从鉴权身份获取，调用方即使在请求体中传递也会被忽略。
     *
     * @param tmpReq - ListVisibleKnowledgeBaseContentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVisibleKnowledgeBaseContentsResponse
     *
     * @param ListVisibleKnowledgeBaseContentsRequest $tmpReq
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListVisibleKnowledgeBaseContentsResponse
     */
    public function listVisibleKnowledgeBaseContentsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListVisibleKnowledgeBaseContentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceTypes) {
            $request->sourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTypes, 'sourceTypes', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortField) {
            @$body['sortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['sortOrder'] = $request->sortOrder;
        }

        if (null !== $request->sourceTypesShrink) {
            @$body['sourceTypes'] = $request->sourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVisibleKnowledgeBaseContents',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listVisibleKnowledgeBaseContents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVisibleKnowledgeBaseContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下钻查询指定数字员工可见的知识库目录下的子目录与资源。
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于查询特定数字员工在指定知识库目录下的所有子目录和资源。
     * - 用户需拥有对目标数字员工的USE权限，且该数字员工必须有权访问请求中指定的目录及其子目录。
     * - 请求时需要提供数字员工名称（`operatingObjectName`）及要查询的目录ID（`directoryId`），其他参数如分页信息、排序方式等为可选项。
     * - 接口返回结果包括目录下的子目录和资源列表，并支持按页码分页显示。
     * - `sourceStatus`字段固定过滤值为`READY`状态的资源。
     * - 安全性方面，`tenant_id`与`user_id`仅从鉴权身份获取，调用方即使在请求体中传递也会被忽略。
     *
     * @param Request - ListVisibleKnowledgeBaseContentsRequest
     *
     * @returns ListVisibleKnowledgeBaseContentsResponse
     *
     * @param ListVisibleKnowledgeBaseContentsRequest $request
     *
     * @return ListVisibleKnowledgeBaseContentsResponse
     */
    public function listVisibleKnowledgeBaseContents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVisibleKnowledgeBaseContentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询数字员工可访问的企业知识库顶层目录。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取指定数字员工（运营对象）在企业内可见的知识库顶层目录列表。
     *
     * @param Request - ListVisibleKnowledgeBasesRequest
     * @param headers - ListVisibleKnowledgeBasesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVisibleKnowledgeBasesResponse
     *
     * @param ListVisibleKnowledgeBasesRequest $request
     * @param ListVisibleKnowledgeBasesHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListVisibleKnowledgeBasesResponse
     */
    public function listVisibleKnowledgeBasesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->requestId) {
            @$realHeaders['requestId'] = '' . $headers->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVisibleKnowledgeBases',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/listVisibleKnowledgeBases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVisibleKnowledgeBasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数字员工可访问的企业知识库顶层目录。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取指定数字员工（运营对象）在企业内可见的知识库顶层目录列表。
     *
     * @param Request - ListVisibleKnowledgeBasesRequest
     *
     * @returns ListVisibleKnowledgeBasesResponse
     *
     * @param ListVisibleKnowledgeBasesRequest $request
     *
     * @return ListVisibleKnowledgeBasesResponse
     */
    public function listVisibleKnowledgeBases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListVisibleKnowledgeBasesHeaders([]);

        return $this->listVisibleKnowledgeBasesWithOptions($request, $headers, $runtime);
    }

    /**
     * 在企业知识库目录间移动指定资源，需具备管理权限。
     *
     * @remarks
     * ## 请求说明
     * - **鉴权流程**：
     *   1. 基础鉴权由根 router 统一完成（`request.state.openapi_identity`）。
     *   2. 本 handler 校验 `DEVELOPMENT_KB_MANAGE` 功能权限。
     * - **操作步骤**：
     *   1. 检查源目录与目标目录不能相同。
     *   2. 确认目标目录存在。
     *   3. 验证待移动的资源确实位于源目录中。
     *   4. 更新资源的目录绑定关系。
     *   5. 尽力更新 `source.settings["knowledge_id"]` 为目标知识库 ID。
     *   6. 尽力通知 DocumentAgent 同步 `knowledge_id` 和 `update_time`。
     * - **安全约束**：
     *   - `tenant_id` 和 `user_id` 必须来自鉴权身份。
     *   - 调用者需要拥有 KB 管理权限。
     *
     * @param Request - MoveKnowledgeBaseResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveKnowledgeBaseResourceResponse
     *
     * @param MoveKnowledgeBaseResourceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return MoveKnowledgeBaseResourceResponse
     */
    public function moveKnowledgeBaseResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['knowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->sourceDirectoryId) {
            @$body['sourceDirectoryId'] = $request->sourceDirectoryId;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        if (null !== $request->targetDirectoryId) {
            @$body['targetDirectoryId'] = $request->targetDirectoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveKnowledgeBaseResource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/moveKnowledgeBaseResource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveKnowledgeBaseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在企业知识库目录间移动指定资源，需具备管理权限。
     *
     * @remarks
     * ## 请求说明
     * - **鉴权流程**：
     *   1. 基础鉴权由根 router 统一完成（`request.state.openapi_identity`）。
     *   2. 本 handler 校验 `DEVELOPMENT_KB_MANAGE` 功能权限。
     * - **操作步骤**：
     *   1. 检查源目录与目标目录不能相同。
     *   2. 确认目标目录存在。
     *   3. 验证待移动的资源确实位于源目录中。
     *   4. 更新资源的目录绑定关系。
     *   5. 尽力更新 `source.settings["knowledge_id"]` 为目标知识库 ID。
     *   6. 尽力通知 DocumentAgent 同步 `knowledge_id` 和 `update_time`。
     * - **安全约束**：
     *   - `tenant_id` 和 `user_id` 必须来自鉴权身份。
     *   - 调用者需要拥有 KB 管理权限。
     *
     * @param Request - MoveKnowledgeBaseResourceRequest
     *
     * @returns MoveKnowledgeBaseResourceResponse
     *
     * @param MoveKnowledgeBaseResourceRequest $request
     *
     * @return MoveKnowledgeBaseResourceResponse
     */
    public function moveKnowledgeBaseResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->moveKnowledgeBaseResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 在用户的个人目录之间移动指定资源。
     *
     * @remarks
     * ## 请求说明
     * - **源目录与目标目录不能相同**，否则将返回 `ERR.Robject.UserDirectory.InvalidOperation` 错误。
     * - **目标目录必须存在**，如果不存在则会返回 `ERR.Robject.UserDirectory.DirectoryNotFound` 错误。
     * - **待移动的资源必须存在于源目录中**，若不在源目录中，则会收到 `ERR.Robject.UserDirectory.ResourceNotInDirectory` 错误。
     * - 成功移动后，系统会尝试通知 DocumentAgent 更新资源的新路径 (`source_path`)，但此步骤为尽力而为（best-effort），即使失败也不会影响整体操作的成功状态，仅记录错误日志。
     * - 安全性方面，`tenant_id` 的值只能来源于鉴权身份信息。
     *
     * @param Request - MoveResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceResponse
     *
     * @param MoveResourceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return MoveResourceResponse
     */
    public function moveResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->sourceDirectoryId) {
            @$body['sourceDirectoryId'] = $request->sourceDirectoryId;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        if (null !== $request->targetDirectoryId) {
            @$body['targetDirectoryId'] = $request->targetDirectoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveResource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/moveResource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在用户的个人目录之间移动指定资源。
     *
     * @remarks
     * ## 请求说明
     * - **源目录与目标目录不能相同**，否则将返回 `ERR.Robject.UserDirectory.InvalidOperation` 错误。
     * - **目标目录必须存在**，如果不存在则会返回 `ERR.Robject.UserDirectory.DirectoryNotFound` 错误。
     * - **待移动的资源必须存在于源目录中**，若不在源目录中，则会收到 `ERR.Robject.UserDirectory.ResourceNotInDirectory` 错误。
     * - 成功移动后，系统会尝试通知 DocumentAgent 更新资源的新路径 (`source_path`)，但此步骤为尽力而为（best-effort），即使失败也不会影响整体操作的成功状态，仅记录错误日志。
     * - 安全性方面，`tenant_id` 的值只能来源于鉴权身份信息。
     *
     * @param Request - MoveResourceRequest
     *
     * @returns MoveResourceResponse
     *
     * @param MoveResourceRequest $request
     *
     * @return MoveResourceResponse
     */
    public function moveResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->moveResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 预览指定企业知识库下的知识内容.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于预览企业知识库下指定知识的内容。
     * - 需要具备`DEVELOPMENT_KB_VIEW`功能权限才能调用此API。
     * - `sourceId`是必需参数，用来标识要预览的知识条目。
     * - 可选参数`tenantId`允许指定租户ID；若未提供，则使用调用方默认的租户ID。
     * - 支持多种类型的预览，包括但不限于图片、音频、视频及文本等。
     *
     * @param Request - PreviewKnowledgeBaseSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewKnowledgeBaseSourceResponse
     *
     * @param PreviewKnowledgeBaseSourceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return PreviewKnowledgeBaseSourceResponse
     */
    public function previewKnowledgeBaseSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PreviewKnowledgeBaseSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/previewKnowledgeBaseSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreviewKnowledgeBaseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预览指定企业知识库下的知识内容.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于预览企业知识库下指定知识的内容。
     * - 需要具备`DEVELOPMENT_KB_VIEW`功能权限才能调用此API。
     * - `sourceId`是必需参数，用来标识要预览的知识条目。
     * - 可选参数`tenantId`允许指定租户ID；若未提供，则使用调用方默认的租户ID。
     * - 支持多种类型的预览，包括但不限于图片、音频、视频及文本等。
     *
     * @param Request - PreviewKnowledgeBaseSourceRequest
     *
     * @returns PreviewKnowledgeBaseSourceResponse
     *
     * @param PreviewKnowledgeBaseSourceRequest $request
     *
     * @return PreviewKnowledgeBaseSourceResponse
     */
    public function previewKnowledgeBaseSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewKnowledgeBaseSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 允许用户预览其个人目录下的指定知识内容。
     *
     * @remarks
     * ## 请求说明
     * - 该接口仅允许用户预览属于自己的个人目录下的资源。
     * - 鉴权流程包括基础鉴权和数据源归属校验，确保请求者只能访问其个人目录中的知识。
     * - 请求时需提供知识的唯一标识 `sourceId`，系统将根据此ID及用户的租户信息查询并返回相应的预览信息。
     * - 支持多种类型的预览，如图片、音频、视频等，并根据不同类型返回对应的预览URL或直接的内容展示。
     *
     * @param Request - PreviewPersonalSourceRequest
     * @param headers - PreviewPersonalSourceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewPersonalSourceResponse
     *
     * @param PreviewPersonalSourceRequest $request
     * @param PreviewPersonalSourceHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return PreviewPersonalSourceResponse
     */
    public function previewPersonalSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->requestId) {
            @$realHeaders['requestId'] = '' . $headers->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PreviewPersonalSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/previewPersonalSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreviewPersonalSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 允许用户预览其个人目录下的指定知识内容。
     *
     * @remarks
     * ## 请求说明
     * - 该接口仅允许用户预览属于自己的个人目录下的资源。
     * - 鉴权流程包括基础鉴权和数据源归属校验，确保请求者只能访问其个人目录中的知识。
     * - 请求时需提供知识的唯一标识 `sourceId`，系统将根据此ID及用户的租户信息查询并返回相应的预览信息。
     * - 支持多种类型的预览，如图片、音频、视频等，并根据不同类型返回对应的预览URL或直接的内容展示。
     *
     * @param Request - PreviewPersonalSourceRequest
     *
     * @returns PreviewPersonalSourceResponse
     *
     * @param PreviewPersonalSourceRequest $request
     *
     * @return PreviewPersonalSourceResponse
     */
    public function previewPersonalSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PreviewPersonalSourceHeaders([]);

        return $this->previewPersonalSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过运营对象名称分页查询主对象数据，支持过滤和搜索。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于根据给定的运营对象名称（如 `customer_1`）分页查询相关的主对象数据。
     * - 支持通过关键字进行搜索，并且可以设置是否仅返回被标记为关注的对象。
     * - 可以使用复杂的过滤条件来进一步筛选结果，包括但不限于等于、不等于、大于、小于等逻辑操作符。
     * - 如果没有配置主对象类型，则会返回一个空的结果集。
     * - 请求中包含的数据将经过鉴权与过滤处理，确保安全性和准确性。
     *
     * @param Request - QueryPrimaryObjectDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPrimaryObjectDataResponse
     *
     * @param QueryPrimaryObjectDataRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPrimaryObjectDataResponse
     */
    public function queryPrimaryObjectDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->onlyFavorites) {
            @$body['onlyFavorites'] = $request->onlyFavorites;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPrimaryObjectData',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/queryPrimaryObjectData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPrimaryObjectDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过运营对象名称分页查询主对象数据，支持过滤和搜索。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于根据给定的运营对象名称（如 `customer_1`）分页查询相关的主对象数据。
     * - 支持通过关键字进行搜索，并且可以设置是否仅返回被标记为关注的对象。
     * - 可以使用复杂的过滤条件来进一步筛选结果，包括但不限于等于、不等于、大于、小于等逻辑操作符。
     * - 如果没有配置主对象类型，则会返回一个空的结果集。
     * - 请求中包含的数据将经过鉴权与过滤处理，确保安全性和准确性。
     *
     * @param Request - QueryPrimaryObjectDataRequest
     *
     * @returns QueryPrimaryObjectDataResponse
     *
     * @param QueryPrimaryObjectDataRequest $request
     *
     * @return QueryPrimaryObjectDataResponse
     */
    public function queryPrimaryObjectData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPrimaryObjectDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询与用户问题相关的语义知识.
     *
     * @remarks
     * 仅开放 smart-query 的 schema_knowledge 语义召回能力。
     *     CLI 映射为 ``winnexo semantic query``。``tenantId`` 由公共参数传入，``userId``
     *     仅从 Token 身份读取，禁止请求体覆盖。服务会校验 ``graphName + agentName`` 归属、
     *     active graph、数字员工启用状态及当前用户 USE 权限；跨图同名 agent 会失败关闭，
     *     随后固定 ``outputs=[schema_knowledge]``。
     *
     * @param Request - QuerySemanticKnowledgeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySemanticKnowledgeResponse
     *
     * @param QuerySemanticKnowledgeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySemanticKnowledgeResponse
     */
    public function querySemanticKnowledgeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

        if (null !== $request->graphName) {
            @$body['graphName'] = $request->graphName;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QuerySemanticKnowledge',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/querySemanticKnowledge',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySemanticKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询与用户问题相关的语义知识.
     *
     * @remarks
     * 仅开放 smart-query 的 schema_knowledge 语义召回能力。
     *     CLI 映射为 ``winnexo semantic query``。``tenantId`` 由公共参数传入，``userId``
     *     仅从 Token 身份读取，禁止请求体覆盖。服务会校验 ``graphName + agentName`` 归属、
     *     active graph、数字员工启用状态及当前用户 USE 权限；跨图同名 agent 会失败关闭，
     *     随后固定 ``outputs=[schema_knowledge]``。
     *
     * @param Request - QuerySemanticKnowledgeRequest
     *
     * @returns QuerySemanticKnowledgeResponse
     *
     * @param QuerySemanticKnowledgeRequest $request
     *
     * @return QuerySemanticKnowledgeResponse
     */
    public function querySemanticKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySemanticKnowledgeWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询组织同步结果.
     *
     * @remarks
     * 根据 taskId 查询组织同步任务的执行状态和结果。
     *     任务状态流转：PENDING → RUNNING → COMPLETED / FAILED / TIMEOUT / CANCELED
     *     建议客户端轮询间隔：3-5 秒。
     *
     * @param Request - QuerySyncResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySyncResultResponse
     *
     * @param QuerySyncResultRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySyncResultResponse
     */
    public function querySyncResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QuerySyncResult',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/querySyncResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组织同步结果.
     *
     * @remarks
     * 根据 taskId 查询组织同步任务的执行状态和结果。
     *     任务状态流转：PENDING → RUNNING → COMPLETED / FAILED / TIMEOUT / CANCELED
     *     建议客户端轮询间隔：3-5 秒。
     *
     * @param Request - QuerySyncResultRequest
     *
     * @returns QuerySyncResultResponse
     *
     * @param QuerySyncResultRequest $request
     *
     * @return QuerySyncResultResponse
     */
    public function querySyncResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySyncResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 从租户移除用户.
     *
     * @remarks
     * OpenAPI 从租户移除用户。
     *     业务编排：
     *     1. 从 identity 获取 tenant_id
     *     2. 调用 delete_user_from_tenant（内部含最后超管保护）
     *     3. 返回成功
     *     该操作会：
     *     - 移除用户在租户下的所有角色关联
     *     - 移除用户在租户下的所有用户组关联
     *     - 撤销用户在租户下的全部数字员工使用授权
     *     - 删除用户-租户映射
     *
     * @param Request - RemoveUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserResponse
     *
     * @param RemoveUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveUserResponse
     */
    public function removeUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->wnUserId) {
            @$query['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUser',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/removeUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从租户移除用户.
     *
     * @remarks
     * OpenAPI 从租户移除用户。
     *     业务编排：
     *     1. 从 identity 获取 tenant_id
     *     2. 调用 delete_user_from_tenant（内部含最后超管保护）
     *     3. 返回成功
     *     该操作会：
     *     - 移除用户在租户下的所有角色关联
     *     - 移除用户在租户下的所有用户组关联
     *     - 撤销用户在租户下的全部数字员工使用授权
     *     - 删除用户-租户映射
     *
     * @param Request - RemoveUserRequest
     *
     * @returns RemoveUserResponse
     *
     * @param RemoveUserRequest $request
     *
     * @return RemoveUserResponse
     */
    public function removeUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于更改指定企业知识库内数据源的名称。
     *
     * @remarks
     * ## 请求说明
     * - 该接口允许具有相应权限的用户修改企业知识库中的特定数据源名称。
     * - 需要提供待修改的数据源ID(``sourceId``)及新的名称(``newName``)。
     * - 修改操作仅更新数据源的名字字段，不会触发其他处理流程。
     * - 成功执行后，系统会发布``SOURCE_CHANGED``事件以供前端刷新显示，并尝试通知DocumentAgent同步最新的source_name信息，但此步骤失败不会影响主流程的完成状态。
     * - 如果提供的``sourceId``不存在，则返回错误码``ERR.Robject.Source.NotFound``。
     * - 此API调用需具备``DEVELOPMENT_KB_MANAGE``功能权限。
     * - 支持通过AK、BearerToken或APP方式进行身份验证。
     *
     * @param Request - RenameKnowledgeBaseSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenameKnowledgeBaseSourceResponse
     *
     * @param RenameKnowledgeBaseSourceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RenameKnowledgeBaseSourceResponse
     */
    public function renameKnowledgeBaseSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->newName) {
            @$body['newName'] = $request->newName;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenameKnowledgeBaseSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/renameKnowledgeBaseSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenameKnowledgeBaseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于更改指定企业知识库内数据源的名称。
     *
     * @remarks
     * ## 请求说明
     * - 该接口允许具有相应权限的用户修改企业知识库中的特定数据源名称。
     * - 需要提供待修改的数据源ID(``sourceId``)及新的名称(``newName``)。
     * - 修改操作仅更新数据源的名字字段，不会触发其他处理流程。
     * - 成功执行后，系统会发布``SOURCE_CHANGED``事件以供前端刷新显示，并尝试通知DocumentAgent同步最新的source_name信息，但此步骤失败不会影响主流程的完成状态。
     * - 如果提供的``sourceId``不存在，则返回错误码``ERR.Robject.Source.NotFound``。
     * - 此API调用需具备``DEVELOPMENT_KB_MANAGE``功能权限。
     * - 支持通过AK、BearerToken或APP方式进行身份验证。
     *
     * @param Request - RenameKnowledgeBaseSourceRequest
     *
     * @returns RenameKnowledgeBaseSourceResponse
     *
     * @param RenameKnowledgeBaseSourceRequest $request
     *
     * @return RenameKnowledgeBaseSourceResponse
     */
    public function renameKnowledgeBaseSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renameKnowledgeBaseSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于更改指定数据源的名称，支持轻量级操作。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 仅更新数据源的 `name` 字段，不会触发 `process_source`。
     * - 成功后会发布 `SOURCE_CHANGED` 事件供前端刷新显示。
     * - 将尽力通知 DocumentAgent 同步新的 `source_name`，即使同步失败也不会阻断主流程。
     * - 如果指定的数据源不存在，则抛出 `ERR.Robject.Source.NotFound` 错误，并由全局中间件统一转换为 POP 错误码。
     * - 安全约束：`tenant_id` 和 `user_id` 必须来自鉴权身份。
     *
     * @param Request - RenameSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenameSourceResponse
     *
     * @param RenameSourceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RenameSourceResponse
     */
    public function renameSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->newName) {
            @$body['newName'] = $request->newName;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenameSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/renameSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenameSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于更改指定数据源的名称，支持轻量级操作。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 仅更新数据源的 `name` 字段，不会触发 `process_source`。
     * - 成功后会发布 `SOURCE_CHANGED` 事件供前端刷新显示。
     * - 将尽力通知 DocumentAgent 同步新的 `source_name`，即使同步失败也不会阻断主流程。
     * - 如果指定的数据源不存在，则抛出 `ERR.Robject.Source.NotFound` 错误，并由全局中间件统一转换为 POP 错误码。
     * - 安全约束：`tenant_id` 和 `user_id` 必须来自鉴权身份。
     *
     * @param Request - RenameSourceRequest
     *
     * @returns RenameSourceResponse
     *
     * @param RenameSourceRequest $request
     *
     * @return RenameSourceResponse
     */
    public function renameSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renameSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 重新解析当前租户内的指定数据源。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于重新解析指定的数据源，支持同步或异步执行。请求时需提供数据源 ID，并可选择是否同步等待解析完成，默认为异步入队处理。此外，可以通过 `tenantId` 参数指定租户ID，但此参数非必填。
     * - **forceSync**：若设置为 `true`，则会同步等待重新解析操作完成；默认值为 `false`，表示以异步方式处理请求。
     * - 当服务返回 `None` 时，将被转换成 `SourceNotFound` 异常；其他异常情况将由 OpenAPI 的全局异常链进行处理。
     *
     * @param Request - ReparseSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReparseSourceResponse
     *
     * @param ReparseSourceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ReparseSourceResponse
     */
    public function reparseSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->forceSync) {
            @$body['forceSync'] = $request->forceSync;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReparseSource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/reparseSource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReparseSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新解析当前租户内的指定数据源。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于重新解析指定的数据源，支持同步或异步执行。请求时需提供数据源 ID，并可选择是否同步等待解析完成，默认为异步入队处理。此外，可以通过 `tenantId` 参数指定租户ID，但此参数非必填。
     * - **forceSync**：若设置为 `true`，则会同步等待重新解析操作完成；默认值为 `false`，表示以异步方式处理请求。
     * - 当服务返回 `None` 时，将被转换成 `SourceNotFound` 异常；其他异常情况将由 OpenAPI 的全局异常链进行处理。
     *
     * @param Request - ReparseSourceRequest
     *
     * @returns ReparseSourceResponse
     *
     * @param ReparseSourceRequest $request
     *
     * @return ReparseSourceResponse
     */
    public function reparseSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reparseSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于替换指定的企业知识库中的FILE资源并触发重新解析。
     *
     * @remarks
     * ## 请求说明
     * 该API允许用户更新企业自建知识库中特定的FILE类型的数据源，并通过提供新的文件路径和公开访问URL来触发系统对该数据源的重新解析。支持同步或异步模式下的操作执行，其中同步模式下客户端将等待直到解析过程完成。
     * - **forceSync** 参数控制是否采用同步方式处理请求，默认为 `false`，即以异步方式进行。
     * - 当不提供 **fileName** 或其值为空时，新上传的文件将保留原有的文件名。
     * - 必须确保提供的 **filePath** 和 **filePublicUrl** 是有效的且指向同一个文件实体。
     *
     * @param Request - ReplaceKnowledgeBaseSourceFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceKnowledgeBaseSourceFileResponse
     *
     * @param ReplaceKnowledgeBaseSourceFileRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ReplaceKnowledgeBaseSourceFileResponse
     */
    public function replaceKnowledgeBaseSourceFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->filePublicUrl) {
            @$body['filePublicUrl'] = $request->filePublicUrl;
        }

        if (null !== $request->fileRecordId) {
            @$body['fileRecordId'] = $request->fileRecordId;
        }

        if (null !== $request->forceSync) {
            @$body['forceSync'] = $request->forceSync;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReplaceKnowledgeBaseSourceFile',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/replaceKnowledgeBaseSourceFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceKnowledgeBaseSourceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于替换指定的企业知识库中的FILE资源并触发重新解析。
     *
     * @remarks
     * ## 请求说明
     * 该API允许用户更新企业自建知识库中特定的FILE类型的数据源，并通过提供新的文件路径和公开访问URL来触发系统对该数据源的重新解析。支持同步或异步模式下的操作执行，其中同步模式下客户端将等待直到解析过程完成。
     * - **forceSync** 参数控制是否采用同步方式处理请求，默认为 `false`，即以异步方式进行。
     * - 当不提供 **fileName** 或其值为空时，新上传的文件将保留原有的文件名。
     * - 必须确保提供的 **filePath** 和 **filePublicUrl** 是有效的且指向同一个文件实体。
     *
     * @param Request - ReplaceKnowledgeBaseSourceFileRequest
     *
     * @returns ReplaceKnowledgeBaseSourceFileResponse
     *
     * @param ReplaceKnowledgeBaseSourceFileRequest $request
     *
     * @return ReplaceKnowledgeBaseSourceFileResponse
     */
    public function replaceKnowledgeBaseSourceFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceKnowledgeBaseSourceFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于全量替换指定数据源下的对象绑定信息。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于全量替换特定数据源的对象绑定（先删除现有绑定，再插入新的绑定）。如果传入空列表，则表示清空所有绑定。
     * - **安全约束**：`tenant_id` 和 `user_id` 必须来自鉴权身份。
     * - **错误处理**：若指定的数据源不存在，将抛出 `ERR.Robject.InvalidParameter` 错误，并由全局中间件转换为 POP 错误码。
     * - **同步通知**：替换成功后会尽力同步通知 DocumentAgent 更新 `semantics.object_bindings`，但失败仅记录日志，不会阻断主流程。
     *
     * @param tmpReq - ReplaceObjectBindingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceObjectBindingsResponse
     *
     * @param ReplaceObjectBindingsRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ReplaceObjectBindingsResponse
     */
    public function replaceObjectBindingsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ReplaceObjectBindingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->objectBindings) {
            $request->objectBindingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectBindings, 'objectBindings', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->objectBindingsShrink) {
            @$body['objectBindings'] = $request->objectBindingsShrink;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReplaceObjectBindings',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/replaceObjectBindings',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceObjectBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于全量替换指定数据源下的对象绑定信息。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于全量替换特定数据源的对象绑定（先删除现有绑定，再插入新的绑定）。如果传入空列表，则表示清空所有绑定。
     * - **安全约束**：`tenant_id` 和 `user_id` 必须来自鉴权身份。
     * - **错误处理**：若指定的数据源不存在，将抛出 `ERR.Robject.InvalidParameter` 错误，并由全局中间件转换为 POP 错误码。
     * - **同步通知**：替换成功后会尽力同步通知 DocumentAgent 更新 `semantics.object_bindings`，但失败仅记录日志，不会阻断主流程。
     *
     * @param Request - ReplaceObjectBindingsRequest
     *
     * @returns ReplaceObjectBindingsResponse
     *
     * @param ReplaceObjectBindingsRequest $request
     *
     * @return ReplaceObjectBindingsResponse
     */
    public function replaceObjectBindings($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceObjectBindingsWithOptions($request, $headers, $runtime);
    }

    /**
     * 允许用户替换其创建的个人文件资源，并触发系统重新解析该文件。
     *
     * @remarks
     * ## 请求说明
     * - 此 API 用于替换当前平台用户创建的个人 FILE 资源，并触发系统对该文件的重新解析。
     * - `tenant_id`、操作人和创建者约束只读取鉴权身份。缺少平台用户时请求将被拒绝，以防止绕过所有权校验。
     * - 如果服务端返回 `None`，则会被转换为 `NotFound` 异常；其他异常由 OpenAPI 全局异常链处理。
     * - 该接口支持同步或异步等待重新解析完成，默认为异步入队（通过设置 `forceSync` 参数控制）。
     *
     * @param Request - ReplaceSourceFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceSourceFileResponse
     *
     * @param ReplaceSourceFileRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ReplaceSourceFileResponse
     */
    public function replaceSourceFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->filePublicUrl) {
            @$body['filePublicUrl'] = $request->filePublicUrl;
        }

        if (null !== $request->fileRecordId) {
            @$body['fileRecordId'] = $request->fileRecordId;
        }

        if (null !== $request->forceSync) {
            @$body['forceSync'] = $request->forceSync;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReplaceSourceFile',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/replaceSourceFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceSourceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 允许用户替换其创建的个人文件资源，并触发系统重新解析该文件。
     *
     * @remarks
     * ## 请求说明
     * - 此 API 用于替换当前平台用户创建的个人 FILE 资源，并触发系统对该文件的重新解析。
     * - `tenant_id`、操作人和创建者约束只读取鉴权身份。缺少平台用户时请求将被拒绝，以防止绕过所有权校验。
     * - 如果服务端返回 `None`，则会被转换为 `NotFound` 异常；其他异常由 OpenAPI 全局异常链处理。
     * - 该接口支持同步或异步等待重新解析完成，默认为异步入队（通过设置 `forceSync` 参数控制）。
     *
     * @param Request - ReplaceSourceFileRequest
     *
     * @returns ReplaceSourceFileResponse
     *
     * @param ReplaceSourceFileRequest $request
     *
     * @return ReplaceSourceFileResponse
     */
    public function replaceSourceFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceSourceFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 重置用户密码
     *
     * @remarks
     * OpenAPI 重置用户密码。
     *     业务编排：
     *     1. 调用 UserManagementService.reset_member_password 传入 password_encrypted（必填）
     *        → service 内部完成 RSA 解密 + 复杂度校验 + bcrypt hash + 写入
     *     2. 返回重置结果
     *     错误码：
     *     - ERR.User.NotFound: 用户不存在
     *     - ERR.User.NotInTenant: 用户不在当前租户下
     *     - ERR.User.WinnexoPasswordRequired: 用户无密码凭证（非 WINNEXO 类型）
     *
     * @param Request - ResetPasswordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetPasswordResponse
     *
     * @param ResetPasswordRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ResetPasswordResponse
     */
    public function resetPasswordWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->passwordEncrypted) {
            @$body['passwordEncrypted'] = $request->passwordEncrypted;
        }

        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetPassword',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/resetPassword',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置用户密码
     *
     * @remarks
     * OpenAPI 重置用户密码。
     *     业务编排：
     *     1. 调用 UserManagementService.reset_member_password 传入 password_encrypted（必填）
     *        → service 内部完成 RSA 解密 + 复杂度校验 + bcrypt hash + 写入
     *     2. 返回重置结果
     *     错误码：
     *     - ERR.User.NotFound: 用户不存在
     *     - ERR.User.NotInTenant: 用户不在当前租户下
     *     - ERR.User.WinnexoPasswordRequired: 用户无密码凭证（非 WINNEXO 类型）
     *
     * @param Request - ResetPasswordRequest
     *
     * @returns ResetPasswordResponse
     *
     * @param ResetPasswordRequest $request
     *
     * @return ResetPasswordResponse
     */
    public function resetPassword($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetPasswordWithOptions($request, $headers, $runtime);
    }

    /**
     * 重置 API Token.
     *
     * @remarks
     * 重置用户的 INSTANCE Token。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 调用 reset_token：
     *        - 旧 ACTIVE Token → RESET（永久失效）
     *        - 生成新 ACTIVE Token
     *     4. 返回新 Token 明文 + 脱敏值
     *     注意：重置后旧 Token 永久失效且不可恢复。新 Token 明文仅在本次响应中返回。
     *
     * @param Request - ResetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetTokenResponse
     *
     * @param ResetTokenRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ResetTokenResponse
     */
    public function resetTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetToken',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/resetToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置 API Token.
     *
     * @remarks
     * 重置用户的 INSTANCE Token。
     *     业务逻辑：
     *     1. 从 identity 取 user_id（强制 caller_type=user）
     *     2. 构造 AuthContext，委托 UserTokenAuthorizedService 完成权限校验
     *     3. 调用 reset_token：
     *        - 旧 ACTIVE Token → RESET（永久失效）
     *        - 生成新 ACTIVE Token
     *     4. 返回新 Token 明文 + 脱敏值
     *     注意：重置后旧 Token 永久失效且不可恢复。新 Token 明文仅在本次响应中返回。
     *
     * @param Request - ResetTokenRequest
     *
     * @returns ResetTokenResponse
     *
     * @param ResetTokenRequest $request
     *
     * @return ResetTokenResponse
     */
    public function resetToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量重试指定目录及其子目录下的所有失败数据源。
     *
     * @remarks
     * ## 请求说明
     * 该API用于获取并重试指定用户个人目录（包括其所有子目录）中状态为FAILED的数据源。请求将立即返回，实际的重试任务将在后台异步执行。请注意，只有当前登录用户有权访问且属于其创建的资源才能被重试。
     * ### 安全与权限
     * - 此操作需要适当的RAM权限。
     * - 只能对当前用户所属租户内的资源进行操作。
     * - 确保`tenantId`和`userId`来自经过验证的身份信息。
     * ### 注意事项
     * - `directoryId`是必需参数，指定了要检查和重试失败数据源的目标目录。
     * - 如果没有提供`tenantId`，则默认使用调用方的租户ID。
     * - API支持多种认证方式，包括AK、BearerToken以及APP认证。
     *
     * @param Request - RetryDirectoryFailedSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryDirectoryFailedSourcesResponse
     *
     * @param RetryDirectoryFailedSourcesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return RetryDirectoryFailedSourcesResponse
     */
    public function retryDirectoryFailedSourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetryDirectoryFailedSources',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/retryDirectoryFailedSources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryDirectoryFailedSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量重试指定目录及其子目录下的所有失败数据源。
     *
     * @remarks
     * ## 请求说明
     * 该API用于获取并重试指定用户个人目录（包括其所有子目录）中状态为FAILED的数据源。请求将立即返回，实际的重试任务将在后台异步执行。请注意，只有当前登录用户有权访问且属于其创建的资源才能被重试。
     * ### 安全与权限
     * - 此操作需要适当的RAM权限。
     * - 只能对当前用户所属租户内的资源进行操作。
     * - 确保`tenantId`和`userId`来自经过验证的身份信息。
     * ### 注意事项
     * - `directoryId`是必需参数，指定了要检查和重试失败数据源的目标目录。
     * - 如果没有提供`tenantId`，则默认使用调用方的租户ID。
     * - API支持多种认证方式，包括AK、BearerToken以及APP认证。
     *
     * @param Request - RetryDirectoryFailedSourcesRequest
     *
     * @returns RetryDirectoryFailedSourcesResponse
     *
     * @param RetryDirectoryFailedSourcesRequest $request
     *
     * @return RetryDirectoryFailedSourcesResponse
     */
    public function retryDirectoryFailedSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryDirectoryFailedSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量重试指定目录下所有失败状态的数据源.
     *
     * @remarks
     * ## 请求说明
     * 该API用于获取并重试指定企业知识库目录（包括其子目录）下的所有处于FAILED状态的数据源。请求将立即返回，实际的重试操作将在后台异步执行。
     * - **鉴权**：除了基础鉴权外，还需具备`DEVELOPMENT_KB_MANAGE`权限。
     * - **安全约束**：仅允许具有相应租户和用户身份的调用者访问，并且需要KB管理权限；管理员可以对任何用户的失败资源发起重试。
     * - **参数**：
     *   - `directoryId` (必填)：指定要检查和重试失败数据源的企业知识库目录ID。
     *   - `tenantId` (可选)：指定租户ID，默认使用调用方的默认租户。
     * - **响应**：成功时返回已入队等待重试的数据源数量及详情等信息。
     *
     * @param Request - RetryKnowledgeBaseFailedSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryKnowledgeBaseFailedSourcesResponse
     *
     * @param RetryKnowledgeBaseFailedSourcesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return RetryKnowledgeBaseFailedSourcesResponse
     */
    public function retryKnowledgeBaseFailedSourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetryKnowledgeBaseFailedSources',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/retryKnowledgeBaseFailedSources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryKnowledgeBaseFailedSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量重试指定目录下所有失败状态的数据源.
     *
     * @remarks
     * ## 请求说明
     * 该API用于获取并重试指定企业知识库目录（包括其子目录）下的所有处于FAILED状态的数据源。请求将立即返回，实际的重试操作将在后台异步执行。
     * - **鉴权**：除了基础鉴权外，还需具备`DEVELOPMENT_KB_MANAGE`权限。
     * - **安全约束**：仅允许具有相应租户和用户身份的调用者访问，并且需要KB管理权限；管理员可以对任何用户的失败资源发起重试。
     * - **参数**：
     *   - `directoryId` (必填)：指定要检查和重试失败数据源的企业知识库目录ID。
     *   - `tenantId` (可选)：指定租户ID，默认使用调用方的默认租户。
     * - **响应**：成功时返回已入队等待重试的数据源数量及详情等信息。
     *
     * @param Request - RetryKnowledgeBaseFailedSourcesRequest
     *
     * @returns RetryKnowledgeBaseFailedSourcesResponse
     *
     * @param RetryKnowledgeBaseFailedSourcesRequest $request
     *
     * @return RetryKnowledgeBaseFailedSourcesResponse
     */
    public function retryKnowledgeBaseFailedSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryKnowledgeBaseFailedSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 撤销用户/用户组的数字员工使用权限.
     *
     * @remarks
     * 撤销用户或用户组对指定数字员工的使用权限。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 请求体互斥校验：userIds / userGroupIds 二选一
     *     3. 委托 AgentAuthorizationAuthorizedService.revoke_authorization 执行
     *     4. 前置校验：MANAGE 权限 + agent 存在性（由 AuthorizedService 层执行，先鉴权后暴露存在性）
     *     5. 撤销用户直接授权后，用户可能仍通过用户组获得授权
     *
     * @param tmpReq - RevokeAgentUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeAgentUsersResponse
     *
     * @param RevokeAgentUsersRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RevokeAgentUsersResponse
     */
    public function revokeAgentUsersWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RevokeAgentUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userGroupIds) {
            $request->userGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userGroupIds, 'userGroupIds', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'userIds', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->userGroupIdsShrink) {
            @$body['userGroupIds'] = $request->userGroupIdsShrink;
        }

        if (null !== $request->userIdsShrink) {
            @$body['userIds'] = $request->userIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeAgentUsers',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/revokeAgentUsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeAgentUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 撤销用户/用户组的数字员工使用权限.
     *
     * @remarks
     * 撤销用户或用户组对指定数字员工的使用权限。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 请求体互斥校验：userIds / userGroupIds 二选一
     *     3. 委托 AgentAuthorizationAuthorizedService.revoke_authorization 执行
     *     4. 前置校验：MANAGE 权限 + agent 存在性（由 AuthorizedService 层执行，先鉴权后暴露存在性）
     *     5. 撤销用户直接授权后，用户可能仍通过用户组获得授权
     *
     * @param Request - RevokeAgentUsersRequest
     *
     * @returns RevokeAgentUsersResponse
     *
     * @param RevokeAgentUsersRequest $request
     *
     * @return RevokeAgentUsersResponse
     */
    public function revokeAgentUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeAgentUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 异步触发技能执行，立即返回 RunId。
     *
     * @remarks
     * ## 请求说明
     * 本接口仅支持异步模式：提交后立即返回 `RunId` 和 `Status=Running`，客户端通过 `GetSkillRun` 轮询最终结果。
     * - **TenantId**：可选公共参数，由网关透传到后端 Header。
     * - **SkillCode** / **SkillName**：二选一；SkillCode 优先；SkillName 不唯一时返回 `ERR.SkillHub.SkillNameAmbiguous`。
     * - **Arguments**：必填，技能入参对象，结构由 `GetSkill` 返回的 inputConfig 描述。
     * - **ClientToken**：可选幂等键；当前版本仅记录到任务元数据，不做强幂等去重。
     * 注意：同步模式（Async=false）、Stream、CallbackUrl 一期不支持，将在后续版本提供。
     *
     * @param tmpReq - RunSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSkillResponse
     *
     * @param RunSkillRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RunSkillResponse
     */
    public function runSkillWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->arguments) {
            $request->argumentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->arguments, 'arguments', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->argumentsShrink) {
            @$body['arguments'] = $request->argumentsShrink;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->skillCode) {
            @$body['skillCode'] = $request->skillCode;
        }

        if (null !== $request->skillName) {
            @$body['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSkill',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/runSkill',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 异步触发技能执行，立即返回 RunId。
     *
     * @remarks
     * ## 请求说明
     * 本接口仅支持异步模式：提交后立即返回 `RunId` 和 `Status=Running`，客户端通过 `GetSkillRun` 轮询最终结果。
     * - **TenantId**：可选公共参数，由网关透传到后端 Header。
     * - **SkillCode** / **SkillName**：二选一；SkillCode 优先；SkillName 不唯一时返回 `ERR.SkillHub.SkillNameAmbiguous`。
     * - **Arguments**：必填，技能入参对象，结构由 `GetSkill` 返回的 inputConfig 描述。
     * - **ClientToken**：可选幂等键；当前版本仅记录到任务元数据，不做强幂等去重。
     * 注意：同步模式（Async=false）、Stream、CallbackUrl 一期不支持，将在后续版本提供。
     *
     * @param Request - RunSkillRequest
     *
     * @returns RunSkillResponse
     *
     * @param RunSkillRequest $request
     *
     * @return RunSkillResponse
     */
    public function runSkill($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runSkillWithOptions($request, $headers, $runtime);
    }

    /**
     * 将产出明细批量保存为个人资源，支持链接或复制模式。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将一批产出明细保存为用户的个人资源。
     * - 支持两种保存方式：`link`（链接）和`copy`（复制）。选择`link`时，编辑产出会同步到资源；选择`copy`则创建快照，不限次数。
     * - `tenant_id` 和 `user_id` 仅来自鉴权身份。
     * - 如果批内 `operating_object` 不一致且未传 `directoryId`，则整批请求前置失败。
     * - 单条记录的处理结果不会影响其他记录的结果，单条失败信息会在响应中返回。
     * - 批量操作最多支持50条记录。
     * - 整批前置失败的情况由全局异常中间件统一返回POP兼容错误格式。
     *
     * @param tmpReq - SaveOutputFileToResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveOutputFileToResourceResponse
     *
     * @param SaveOutputFileToResourceRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SaveOutputFileToResourceResponse
     */
    public function saveOutputFileToResourceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveOutputFileToResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->itemIds) {
            $request->itemIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'itemIds', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->itemIdsShrink) {
            @$body['itemIds'] = $request->itemIdsShrink;
        }

        if (null !== $request->mode) {
            @$body['mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveOutputFileToResource',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/saveOutputFileToResource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveOutputFileToResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将产出明细批量保存为个人资源，支持链接或复制模式。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于将一批产出明细保存为用户的个人资源。
     * - 支持两种保存方式：`link`（链接）和`copy`（复制）。选择`link`时，编辑产出会同步到资源；选择`copy`则创建快照，不限次数。
     * - `tenant_id` 和 `user_id` 仅来自鉴权身份。
     * - 如果批内 `operating_object` 不一致且未传 `directoryId`，则整批请求前置失败。
     * - 单条记录的处理结果不会影响其他记录的结果，单条失败信息会在响应中返回。
     * - 批量操作最多支持50条记录。
     * - 整批前置失败的情况由全局异常中间件统一返回POP兼容错误格式。
     *
     * @param Request - SaveOutputFileToResourceRequest
     *
     * @returns SaveOutputFileToResourceResponse
     *
     * @param SaveOutputFileToResourceRequest $request
     *
     * @return SaveOutputFileToResourceResponse
     */
    public function saveOutputFileToResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveOutputFileToResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 异步发送会话消息.
     *
     * @param tmpReq - SendAsyncChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendAsyncChatMessageResponse
     *
     * @param SendAsyncChatMessageRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SendAsyncChatMessageResponse
     */
    public function sendAsyncChatMessageWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendAsyncChatMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->digitalEmployeeName) {
            $request->digitalEmployeeNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->digitalEmployeeName, 'digitalEmployeeName', 'json');
        }

        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'files', 'json');
        }

        if (null !== $tmpReq->taskExecution) {
            $request->taskExecutionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskExecution, 'taskExecution', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->digitalEmployeeNameShrink) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeNameShrink;
        }

        if (null !== $request->directChat) {
            @$body['directChat'] = $request->directChat;
        }

        if (null !== $request->filesShrink) {
            @$body['files'] = $request->filesShrink;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->reuseLastSession) {
            @$body['reuseLastSession'] = $request->reuseLastSession;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->taskExecutionShrink) {
            @$body['taskExecution'] = $request->taskExecutionShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendAsyncChatMessage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/sendAsyncChatMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendAsyncChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 异步发送会话消息.
     *
     * @param Request - SendAsyncChatMessageRequest
     *
     * @returns SendAsyncChatMessageResponse
     *
     * @param SendAsyncChatMessageRequest $request
     *
     * @return SendAsyncChatMessageResponse
     */
    public function sendAsyncChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendAsyncChatMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送消息.
     *
     * @param tmpReq - SendChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendChatMessageResponse
     *
     * @param SendChatMessageRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SendChatMessageResponse
     */
    public function sendChatMessageWithSSE($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendChatMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->digitalEmployeeName) {
            $request->digitalEmployeeNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->digitalEmployeeName, 'digitalEmployeeName', 'json');
        }

        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'files', 'json');
        }

        if (null !== $tmpReq->taskExecution) {
            $request->taskExecutionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskExecution, 'taskExecution', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->digitalEmployeeNameShrink) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeNameShrink;
        }

        if (null !== $request->directChat) {
            @$body['directChat'] = $request->directChat;
        }

        if (null !== $request->filesShrink) {
            @$body['files'] = $request->filesShrink;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->reuseLastSession) {
            @$body['reuseLastSession'] = $request->reuseLastSession;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->taskExecutionShrink) {
            @$body['taskExecution'] = $request->taskExecutionShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendChatMessage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/sendChatMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield SendChatMessageResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * 发送消息.
     *
     * @param tmpReq - SendChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendChatMessageResponse
     *
     * @param SendChatMessageRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SendChatMessageResponse
     */
    public function sendChatMessageWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendChatMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->digitalEmployeeName) {
            $request->digitalEmployeeNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->digitalEmployeeName, 'digitalEmployeeName', 'json');
        }

        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'files', 'json');
        }

        if (null !== $tmpReq->taskExecution) {
            $request->taskExecutionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskExecution, 'taskExecution', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->digitalEmployeeNameShrink) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeNameShrink;
        }

        if (null !== $request->directChat) {
            @$body['directChat'] = $request->directChat;
        }

        if (null !== $request->filesShrink) {
            @$body['files'] = $request->filesShrink;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->reuseLastSession) {
            @$body['reuseLastSession'] = $request->reuseLastSession;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->taskExecutionShrink) {
            @$body['taskExecution'] = $request->taskExecutionShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendChatMessage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/sendChatMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送消息.
     *
     * @param Request - SendChatMessageRequest
     *
     * @returns SendChatMessageResponse
     *
     * @param SendChatMessageRequest $request
     *
     * @return SendChatMessageResponse
     */
    public function sendChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendChatMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 停止对话生成.
     *
     * @param Request - StopChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopChatMessageResponse
     *
     * @param StopChatMessageRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopChatMessageResponse
     */
    public function stopChatMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopChatMessage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/stopChatMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止对话生成.
     *
     * @param Request - StopChatMessageRequest
     *
     * @returns StopChatMessageResponse
     *
     * @param StopChatMessageRequest $request
     *
     * @return StopChatMessageResponse
     */
    public function stopChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopChatMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 订阅会话消息流
     *
     * @param Request - StreamChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StreamChatMessageResponse
     *
     * @param string                   $messageId
     * @param StreamChatMessageRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return StreamChatMessageResponse
     */
    public function streamChatMessageWithSSE($messageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lastEventId) {
            @$query['lastEventId'] = $request->lastEventId;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StreamChatMessage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/streamChatMessage/' . Url::percentEncode($messageId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield StreamChatMessageResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * 订阅会话消息流
     *
     * @param Request - StreamChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StreamChatMessageResponse
     *
     * @param string                   $messageId
     * @param StreamChatMessageRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return StreamChatMessageResponse
     */
    public function streamChatMessageWithOptions($messageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lastEventId) {
            @$query['lastEventId'] = $request->lastEventId;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StreamChatMessage',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/streamChatMessage/' . Url::percentEncode($messageId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StreamChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 订阅会话消息流
     *
     * @param Request - StreamChatMessageRequest
     *
     * @returns StreamChatMessageResponse
     *
     * @param string                   $messageId
     * @param StreamChatMessageRequest $request
     *
     * @return StreamChatMessageResponse
     */
    public function streamChatMessage($messageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->streamChatMessageWithOptions($messageId, $request, $headers, $runtime);
    }

    /**
     * 推送组织架构同步.
     *
     * @remarks
     * 接收客户端推送的部门树和成员关系，创建异步同步任务。
     *     处理流程：
     *     1. 校验 platformType（仅允许 saml / oauth2 / custom）
     *     2. 校验数据量限制（departments + members <= 50000）
     *     3. 校验 syncMembers 与 platformType 的兼容性
     *     4. SAML/OAuth2 场景：解析或自动推导 ssoSettingsId
     *     5. Custom 场景：校验 corpId 已通过 createCustomOrg 注册
     *     6. 委托 OrgSyncAuthorizedService 创建任务（内含权限校验）
     *     7. 返回 taskId 供轮询
     *
     * @param tmpReq - SyncOrgStructureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncOrgStructureResponse
     *
     * @param SyncOrgStructureRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SyncOrgStructureResponse
     */
    public function syncOrgStructureWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncOrgStructureShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->departments) {
            $request->departmentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->departments, 'departments', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'members', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->corpId) {
            @$body['corpId'] = $request->corpId;
        }

        if (null !== $request->departmentsShrink) {
            @$body['departments'] = $request->departmentsShrink;
        }

        if (null !== $request->membersShrink) {
            @$body['members'] = $request->membersShrink;
        }

        if (null !== $request->platformType) {
            @$body['platformType'] = $request->platformType;
        }

        if (null !== $request->ssoSettingsId) {
            @$body['ssoSettingsId'] = $request->ssoSettingsId;
        }

        if (null !== $request->syncMembers) {
            @$body['syncMembers'] = $request->syncMembers;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncOrgStructure',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/syncOrgStructure',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncOrgStructureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送组织架构同步.
     *
     * @remarks
     * 接收客户端推送的部门树和成员关系，创建异步同步任务。
     *     处理流程：
     *     1. 校验 platformType（仅允许 saml / oauth2 / custom）
     *     2. 校验数据量限制（departments + members <= 50000）
     *     3. 校验 syncMembers 与 platformType 的兼容性
     *     4. SAML/OAuth2 场景：解析或自动推导 ssoSettingsId
     *     5. Custom 场景：校验 corpId 已通过 createCustomOrg 注册
     *     6. 委托 OrgSyncAuthorizedService 创建任务（内含权限校验）
     *     7. 返回 taskId 供轮询
     *
     * @param Request - SyncOrgStructureRequest
     *
     * @returns SyncOrgStructureResponse
     *
     * @param SyncOrgStructureRequest $request
     *
     * @return SyncOrgStructureResponse
     */
    public function syncOrgStructure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncOrgStructureWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过此API可以对指定的主对象执行关注或取消关注操作。
     *
     * @remarks
     * ## 请求说明
     * - **Precheck**:
     *   1. 添加关注时：系统会检查是否已对该主对象进行了关注以防止重复，并且会验证该主对象是否存在。
     *   2. 取消关注时：这是一个幂等操作，无论用户之前是否已经关注了该对象，都会返回 `success=true`。
     * - **安全性**：支持AK、BearerToken和APP三种认证方式。
     * - **请求频率限制**：每秒最多可发送100次请求。
     * - **响应日志**：开启响应日志记录功能。
     * - **租户相关性**：此API与特定租户相关联，默认使用调用方的租户ID。
     * - **操作类型**：属于写入型操作。
     * - **后端服务**：请求将被转发至内部服务进行处理，超时时间为3秒。
     *
     * @param tmpReq - TogglePrimaryObjectFavoriteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TogglePrimaryObjectFavoriteResponse
     *
     * @param TogglePrimaryObjectFavoriteRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return TogglePrimaryObjectFavoriteResponse
     */
    public function togglePrimaryObjectFavoriteWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TogglePrimaryObjectFavoriteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->objectIds) {
            $request->objectIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectIds, 'objectIds', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->objectIdsShrink) {
            @$body['objectIds'] = $request->objectIdsShrink;
        }

        if (null !== $request->objectType) {
            @$body['objectType'] = $request->objectType;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TogglePrimaryObjectFavorite',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/togglePrimaryObjectFavorite',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TogglePrimaryObjectFavoriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过此API可以对指定的主对象执行关注或取消关注操作。
     *
     * @remarks
     * ## 请求说明
     * - **Precheck**:
     *   1. 添加关注时：系统会检查是否已对该主对象进行了关注以防止重复，并且会验证该主对象是否存在。
     *   2. 取消关注时：这是一个幂等操作，无论用户之前是否已经关注了该对象，都会返回 `success=true`。
     * - **安全性**：支持AK、BearerToken和APP三种认证方式。
     * - **请求频率限制**：每秒最多可发送100次请求。
     * - **响应日志**：开启响应日志记录功能。
     * - **租户相关性**：此API与特定租户相关联，默认使用调用方的租户ID。
     * - **操作类型**：属于写入型操作。
     * - **后端服务**：请求将被转发至内部服务进行处理，超时时间为3秒。
     *
     * @param Request - TogglePrimaryObjectFavoriteRequest
     *
     * @returns TogglePrimaryObjectFavoriteResponse
     *
     * @param TogglePrimaryObjectFavoriteRequest $request
     *
     * @return TogglePrimaryObjectFavoriteResponse
     */
    public function togglePrimaryObjectFavorite($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->togglePrimaryObjectFavoriteWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新数字员工使用权限授权模式.
     *
     * @remarks
     * 切换数字员工的使用权限授权模式。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.update_auth_mode 执行
     *     3. 前置校验：MANAGE 权限 + agent 存在性（由 AuthorizedService 层执行，先鉴权后暴露存在性）
     *     4. SPECIFIED_USERS：需显式授权才能使用
     *     5. ALL_USERS：所有用户无需授权即可使用（管理权限不受影响）
     *
     * @param Request - UpdateAgentAuthModeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentAuthModeResponse
     *
     * @param UpdateAgentAuthModeRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAgentAuthModeResponse
     */
    public function updateAgentAuthModeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->authMode) {
            @$body['authMode'] = $request->authMode;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentAuthMode',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateAgentAuthMode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentAuthModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数字员工使用权限授权模式.
     *
     * @remarks
     * 切换数字员工的使用权限授权模式。
     *     业务逻辑：
     *     1. 从 identity 构造 AuthContext
     *     2. 委托 AgentAuthorizationAuthorizedService.update_auth_mode 执行
     *     3. 前置校验：MANAGE 权限 + agent 存在性（由 AuthorizedService 层执行，先鉴权后暴露存在性）
     *     4. SPECIFIED_USERS：需显式授权才能使用
     *     5. ALL_USERS：所有用户无需授权即可使用（管理权限不受影响）
     *
     * @param Request - UpdateAgentAuthModeRequest
     *
     * @returns UpdateAgentAuthModeResponse
     *
     * @param UpdateAgentAuthModeRequest $request
     *
     * @return UpdateAgentAuthModeResponse
     */
    public function updateAgentAuthMode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentAuthModeWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新会话.
     *
     * @param Request - UpdateChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateChatSessionResponse
     *
     * @param UpdateChatSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateChatSessionResponse
     */
    public function updateChatSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateChatSession',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateChatSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新会话.
     *
     * @param Request - UpdateChatSessionRequest
     *
     * @returns UpdateChatSessionResponse
     *
     * @param UpdateChatSessionRequest $request
     *
     * @return UpdateChatSessionResponse
     */
    public function updateChatSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateChatSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于更新用户的个人目录基础信息。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于更新指定用户的个人目录信息，包括名称、描述、父目录等。请求时需确保提供的 `directoryId` 对应的目录存在且属于当前用户。此外，如果更改了目录的 `name` 或 `path`，系统将自动递归更新所有子目录的路径以保持一致性。特别注意，在调整父目录时，必须保证新父目录的有效性（即非自身或不会导致循环引用）。
     * - **安全约束**：`tenant_id` 和 `user_id` 必须来自于鉴权身份。
     * - **权限要求**：执行此操作需要相应的 RAM 权限。
     * - **输入参数**：
     *   - `directoryId`：必填，表示要更新的目录唯一标识。
     *   - `name`：选填，设置新的目录名称。
     *   - `description`：选填，提供新的目录描述。
     *   - `parentId`：选填，指定新的父目录ID。
     *   - `path`：选填，当传入时会级联更新当前及所有子目录的路径。
     *
     * @param Request - UpdateDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDirectoryResponse
     *
     * @param UpdateDirectoryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDirectoryResponse
     */
    public function updateDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于更新用户的个人目录基础信息。
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于更新指定用户的个人目录信息，包括名称、描述、父目录等。请求时需确保提供的 `directoryId` 对应的目录存在且属于当前用户。此外，如果更改了目录的 `name` 或 `path`，系统将自动递归更新所有子目录的路径以保持一致性。特别注意，在调整父目录时，必须保证新父目录的有效性（即非自身或不会导致循环引用）。
     * - **安全约束**：`tenant_id` 和 `user_id` 必须来自于鉴权身份。
     * - **权限要求**：执行此操作需要相应的 RAM 权限。
     * - **输入参数**：
     *   - `directoryId`：必填，表示要更新的目录唯一标识。
     *   - `name`：选填，设置新的目录名称。
     *   - `description`：选填，提供新的目录描述。
     *   - `parentId`：选填，指定新的父目录ID。
     *   - `path`：选填，当传入时会级联更新当前及所有子目录的路径。
     *
     * @param Request - UpdateDirectoryRequest
     *
     * @returns UpdateDirectoryResponse
     *
     * @param UpdateDirectoryRequest $request
     *
     * @return UpdateDirectoryResponse
     */
    public function updateDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新指定的企业知识库分类信息，包括名称、描述及父目录。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于修改企业知识库中的某个分类。
     * - 需要具有`DEVELOPMENT_KB_MANAGE`功能权限才能调用此API。
     * - `tenantId`参数为可选，若未提供，则默认使用调用者的租户ID。
     * - 必须提供待修改的`directoryId`，而`name`、`description`和`parentDirectoryId`均为可选项，不提供则表示这些字段保持不变。
     * - 当指定了新的`parentDirectoryId`时，系统会检查新父目录是否属于当前租户，并且不会导致循环引用问题。
     * - 安全性方面，本API支持多种认证方式（AK、BearerToken、APP），并启用了RAM权限控制与操作审计。
     *
     * @param Request - UpdateKnowledgeBaseDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseDirectoryResponse
     *
     * @param UpdateKnowledgeBaseDirectoryRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateKnowledgeBaseDirectoryResponse
     */
    public function updateKnowledgeBaseDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentDirectoryId) {
            @$body['parentDirectoryId'] = $request->parentDirectoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBaseDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateKnowledgeBaseDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定的企业知识库分类信息，包括名称、描述及父目录。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于修改企业知识库中的某个分类。
     * - 需要具有`DEVELOPMENT_KB_MANAGE`功能权限才能调用此API。
     * - `tenantId`参数为可选，若未提供，则默认使用调用者的租户ID。
     * - 必须提供待修改的`directoryId`，而`name`、`description`和`parentDirectoryId`均为可选项，不提供则表示这些字段保持不变。
     * - 当指定了新的`parentDirectoryId`时，系统会检查新父目录是否属于当前租户，并且不会导致循环引用问题。
     * - 安全性方面，本API支持多种认证方式（AK、BearerToken、APP），并启用了RAM权限控制与操作审计。
     *
     * @param Request - UpdateKnowledgeBaseDirectoryRequest
     *
     * @returns UpdateKnowledgeBaseDirectoryResponse
     *
     * @param UpdateKnowledgeBaseDirectoryRequest $request
     *
     * @return UpdateKnowledgeBaseDirectoryResponse
     */
    public function updateKnowledgeBaseDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于编辑企业自建知识库中的资源正文并触发重新解析。
     *
     * @remarks
     * ## 请求说明
     * 本接口允许用户更新指定的企业知识库数据源的正文内容，并可选择是否同步等待解析完成。通过设置`forceSync`参数，可以控制解析过程是同步还是异步执行，默认为异步处理。
     * - **注意**：当`content`字段为空字符串时，表示清空原有内容。
     * - **权限要求**：调用此接口需要具备相应的RAM操作权限（`winnexo:UpdateKnowledgeBaseSourceContent`）。
     *
     * @param Request - UpdateKnowledgeBaseSourceContentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseSourceContentResponse
     *
     * @param UpdateKnowledgeBaseSourceContentRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateKnowledgeBaseSourceContentResponse
     */
    public function updateKnowledgeBaseSourceContentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->forceSync) {
            @$body['forceSync'] = $request->forceSync;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBaseSourceContent',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateKnowledgeBaseSourceContent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseSourceContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于编辑企业自建知识库中的资源正文并触发重新解析。
     *
     * @remarks
     * ## 请求说明
     * 本接口允许用户更新指定的企业知识库数据源的正文内容，并可选择是否同步等待解析完成。通过设置`forceSync`参数，可以控制解析过程是同步还是异步执行，默认为异步处理。
     * - **注意**：当`content`字段为空字符串时，表示清空原有内容。
     * - **权限要求**：调用此接口需要具备相应的RAM操作权限（`winnexo:UpdateKnowledgeBaseSourceContent`）。
     *
     * @param Request - UpdateKnowledgeBaseSourceContentRequest
     *
     * @returns UpdateKnowledgeBaseSourceContentResponse
     *
     * @param UpdateKnowledgeBaseSourceContentRequest $request
     *
     * @return UpdateKnowledgeBaseSourceContentResponse
     */
    public function updateKnowledgeBaseSourceContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseSourceContentWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新指定企业知识库数据源的资源标签。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于更新企业知识库中特定数据源的标签。
     * - 需要具备知识库管理权限才能调用此接口。
     * - `sourceTags` 参数接受 JSON 字符串列表形式，例如 `["tagA", "tagB"]`；若传入 `null` 则表示清空所有现有标签。
     * - 更新操作仅影响 `sourceTags` 和 `gmt_modified` 字段，并不会触发 `process_source` 流程。
     * - 如果指定的数据源不存在，则会抛出 `ERR.Robject.Source.NotFound` 错误。
     * - 接口支持通过 AK、BearerToken 或 APP 方式进行身份验证。
     * - 调用时需确保 `tenant_id` 和 `user_id` 来自有效的鉴权身份信息。
     *
     * @param Request - UpdateKnowledgeBaseSourceTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseSourceTagsResponse
     *
     * @param UpdateKnowledgeBaseSourceTagsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateKnowledgeBaseSourceTagsResponse
     */
    public function updateKnowledgeBaseSourceTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBaseSourceTags',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateKnowledgeBaseSourceTags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseSourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定企业知识库数据源的资源标签。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于更新企业知识库中特定数据源的标签。
     * - 需要具备知识库管理权限才能调用此接口。
     * - `sourceTags` 参数接受 JSON 字符串列表形式，例如 `["tagA", "tagB"]`；若传入 `null` 则表示清空所有现有标签。
     * - 更新操作仅影响 `sourceTags` 和 `gmt_modified` 字段，并不会触发 `process_source` 流程。
     * - 如果指定的数据源不存在，则会抛出 `ERR.Robject.Source.NotFound` 错误。
     * - 接口支持通过 AK、BearerToken 或 APP 方式进行身份验证。
     * - 调用时需确保 `tenant_id` 和 `user_id` 来自有效的鉴权身份信息。
     *
     * @param Request - UpdateKnowledgeBaseSourceTagsRequest
     *
     * @returns UpdateKnowledgeBaseSourceTagsResponse
     *
     * @param UpdateKnowledgeBaseSourceTagsRequest $request
     *
     * @return UpdateKnowledgeBaseSourceTagsResponse
     */
    public function updateKnowledgeBaseSourceTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseSourceTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新定时任务
     *
     * @param tmpReq - UpdateScheduledTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduledTaskResponse
     *
     * @param UpdateScheduledTaskRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateScheduledTaskResponse
     */
    public function updateScheduledTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateScheduledTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->description) {
            $request->descriptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->description, 'description', 'json');
        }

        if (null !== $tmpReq->digitalEmployeeName) {
            $request->digitalEmployeeNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->digitalEmployeeName, 'digitalEmployeeName', 'json');
        }

        if (null !== $tmpReq->segments) {
            $request->segmentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->segments, 'segments', 'json');
        }

        if (null !== $tmpReq->taskDetail) {
            $request->taskDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskDetail, 'taskDetail', 'json');
        }

        if (null !== $tmpReq->triggerConfig) {
            $request->triggerConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->triggerConfig, 'triggerConfig', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->descriptionShrink) {
            @$body['description'] = $request->descriptionShrink;
        }

        if (null !== $request->digitalEmployeeNameShrink) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeNameShrink;
        }

        if (null !== $request->isOpen) {
            @$body['isOpen'] = $request->isOpen;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->segmentsShrink) {
            @$body['segments'] = $request->segmentsShrink;
        }

        if (null !== $request->taskDetailShrink) {
            @$body['taskDetail'] = $request->taskDetailShrink;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->triggerConfigShrink) {
            @$body['triggerConfig'] = $request->triggerConfigShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduledTask',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateScheduledTask',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新定时任务
     *
     * @param Request - UpdateScheduledTaskRequest
     *
     * @returns UpdateScheduledTaskResponse
     *
     * @param UpdateScheduledTaskRequest $request
     *
     * @return UpdateScheduledTaskResponse
     */
    public function updateScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateScheduledTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新租户内可编辑数据源的正文并触发重新解析。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于更新指定租户内的数据源内容，并根据需要触发同步或异步的数据源重新解析。
     * - `tenant_id` 和 `user_id` 仅用于鉴权，不参与实际业务逻辑处理。
     * - 当提供的正文为空字符串时，系统将按照现有服务契约执行操作。
     * - 如果指定的数据源不存在，则返回标准的NotFound错误；其他异常情况则由全局异常链处理。
     * - 可通过设置`forceSync`参数来决定是否等待解析过程完成（默认为异步入队）。
     *
     * @param Request - UpdateSourceContentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSourceContentResponse
     *
     * @param UpdateSourceContentRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateSourceContentResponse
     */
    public function updateSourceContentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->forceSync) {
            @$body['forceSync'] = $request->forceSync;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSourceContent',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateSourceContent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSourceContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新租户内可编辑数据源的正文并触发重新解析。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于更新指定租户内的数据源内容，并根据需要触发同步或异步的数据源重新解析。
     * - `tenant_id` 和 `user_id` 仅用于鉴权，不参与实际业务逻辑处理。
     * - 当提供的正文为空字符串时，系统将按照现有服务契约执行操作。
     * - 如果指定的数据源不存在，则返回标准的NotFound错误；其他异常情况则由全局异常链处理。
     * - 可通过设置`forceSync`参数来决定是否等待解析过程完成（默认为异步入队）。
     *
     * @param Request - UpdateSourceContentRequest
     *
     * @returns UpdateSourceContentResponse
     *
     * @param UpdateSourceContentRequest $request
     *
     * @return UpdateSourceContentResponse
     */
    public function updateSourceContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSourceContentWithOptions($request, $headers, $runtime);
    }

    /**
     * 用于更新指定的企业知识库目录信息。
     *
     * @remarks
     * ## 请求说明
     *
     * @param Request - UpdateTenantDirectoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTenantDirectoryResponse
     *
     * @param UpdateTenantDirectoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateTenantDirectoryResponse
     */
    public function updateTenantDirectoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTenantDirectory',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateTenantDirectory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTenantDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于更新指定的企业知识库目录信息。
     *
     * @remarks
     * ## 请求说明
     *
     * @param Request - UpdateTenantDirectoryRequest
     *
     * @returns UpdateTenantDirectoryResponse
     *
     * @param UpdateTenantDirectoryRequest $request
     *
     * @return UpdateTenantDirectoryResponse
     */
    public function updateTenantDirectory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTenantDirectoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改用户信息（含启停用）.
     *
     * @remarks
     * OpenAPI 修改用户信息。
     *     业务编排：
     *     1. 解析 roleCodes → role_ids
     *     2. 若 isActive 有变更，先执行状态切换（含最后超管保护）
     *     3. 调用 update_tenant_member 修改其他字段（displayName / roleCodes / userGroupIds）
     *     4. 全部成功返回 HTTP 200
     *     执行顺序说明：
     *     - isActive 状态变更先于其他字段写入。两步不在同一事务中。
     *     - 校验失败（如最后超管保护）→ 抛出异常，后续步骤不执行。
     *     - 若 isActive 变更已落库但后续步骤异常，isActive 不会回滚。
     *
     * @param tmpReq - UpdateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'roleCodes', 'json');
        }

        if (null !== $tmpReq->userGroupIds) {
            $request->userGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userGroupIds, 'userGroupIds', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->isActive) {
            @$body['isActive'] = $request->isActive;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['roleCodes'] = $request->roleCodesShrink;
        }

        if (null !== $request->userGroupIdsShrink) {
            @$body['userGroupIds'] = $request->userGroupIdsShrink;
        }

        if (null !== $request->wnUserId) {
            @$body['wnUserId'] = $request->wnUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改用户信息（含启停用）.
     *
     * @remarks
     * OpenAPI 修改用户信息。
     *     业务编排：
     *     1. 解析 roleCodes → role_ids
     *     2. 若 isActive 有变更，先执行状态切换（含最后超管保护）
     *     3. 调用 update_tenant_member 修改其他字段（displayName / roleCodes / userGroupIds）
     *     4. 全部成功返回 HTTP 200
     *     执行顺序说明：
     *     - isActive 状态变更先于其他字段写入。两步不在同一事务中。
     *     - 校验失败（如最后超管保护）→ 抛出异常，后续步骤不执行。
     *     - 若 isActive 变更已落库但后续步骤异常，isActive 不会回滚。
     *
     * @param Request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 支持部分字段更新当前用户信息，并返回完整用户信息。
     *
     * @remarks
     * ## 请求说明
     * - 该API允许调用者更新指定用户的部分或全部可选字段，未提供的字段将保持原有值。
     * - 支持通过`tenantId`参数指定租户ID；若省略，则默认使用调用方的默认租户。
     * - 更新成功后，响应体中会包含完整的用户信息对象。
     * - 此接口要求认证，支持AK、BearerToken和APP三种安全方案。
     * - 接口消费类型为JSON格式，且仅在HTTPS协议下可用。
     * - 特别注意：`profileRoleInfo`字段仅当用户角色设置为Others时有效，用于描述用户的具体角色信息。
     *
     * @param Request - UpdateUserInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserInfoResponse
     *
     * @param UpdateUserInfoRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateUserInfoResponse
     */
    public function updateUserInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->avatar) {
            @$body['avatar'] = $request->avatar;
        }

        if (null !== $request->languagePreference) {
            @$body['languagePreference'] = $request->languagePreference;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->offering) {
            @$body['offering'] = $request->offering;
        }

        if (null !== $request->profileRoleInfo) {
            @$body['profileRoleInfo'] = $request->profileRoleInfo;
        }

        if (null !== $request->selfIntroduction) {
            @$body['selfIntroduction'] = $request->selfIntroduction;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserInfo',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/updateUserInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 支持部分字段更新当前用户信息，并返回完整用户信息。
     *
     * @remarks
     * ## 请求说明
     * - 该API允许调用者更新指定用户的部分或全部可选字段，未提供的字段将保持原有值。
     * - 支持通过`tenantId`参数指定租户ID；若省略，则默认使用调用方的默认租户。
     * - 更新成功后，响应体中会包含完整的用户信息对象。
     * - 此接口要求认证，支持AK、BearerToken和APP三种安全方案。
     * - 接口消费类型为JSON格式，且仅在HTTPS协议下可用。
     * - 特别注意：`profileRoleInfo`字段仅当用户角色设置为Others时有效，用于描述用户的具体角色信息。
     *
     * @param Request - UpdateUserInfoRequest
     *
     * @returns UpdateUserInfoResponse
     *
     * @param UpdateUserInfoRequest $request
     *
     * @return UpdateUserInfoResponse
     */
    public function updateUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 会话上传本地文件.
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于上传会话临时文件，采用**文件中转上传**模式（`fileTransfer`）：文件二进制不经本 API 的请求体传输，而是先落到 OSS，再把 OSS 地址通过 `FileUrl` 入参交给后端；后端从该地址取回字节并写入自己的 OSS，创建会话临时文件记录。
     * ### 调用方式
     * - **推荐**：使用 SDK 生成的 `UploadChatFileAdvance` 方法，传入本地文件流，SDK 自动完成中转上传并回填 `FileUrl`。
     * - **直传**：自行将文件上传到可被服务端访问的 OSS 地址，然后直接调用本 API 并传入 `FileUrl`。
     * ### 入参
     * - **FileUrl**：必填，文件的 OSS 地址。使用 Advance 方法时由 SDK 自动回填，无需手动赋值。
     * - **FileName**：必填，原始文件名（含后缀，如 `report.pdf`）。中转生成的 OSS 地址不携带原始文件名，后端据此确定文件后缀与展示名，因此必须显式传入。
     * - **ContentType**：可选，文件 MIME 类型；不传时按 `application/octet-stream` 处理。
     * - **OperatingObjectName**：可选，Agent 命名空间标识，决定文件入库路径。
     * ### 出参
     * 返回 OSS 对象路径 `objectName`、入库地址 `fileUrl`、公开访问地址 `filePublicUrl`（有效期 1 小时）、文件记录 ID `fileRecordId` 等；`uploadSignatureUrl` 在本模式下恒为空。
     *
     * @param Request - UploadChatFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadChatFileResponse
     *
     * @param UploadChatFileRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UploadChatFileResponse
     */
    public function uploadChatFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$body['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadChatFile',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/uploadChatFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadChatFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 会话上传本地文件.
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于上传会话临时文件，采用**文件中转上传**模式（`fileTransfer`）：文件二进制不经本 API 的请求体传输，而是先落到 OSS，再把 OSS 地址通过 `FileUrl` 入参交给后端；后端从该地址取回字节并写入自己的 OSS，创建会话临时文件记录。
     * ### 调用方式
     * - **推荐**：使用 SDK 生成的 `UploadChatFileAdvance` 方法，传入本地文件流，SDK 自动完成中转上传并回填 `FileUrl`。
     * - **直传**：自行将文件上传到可被服务端访问的 OSS 地址，然后直接调用本 API 并传入 `FileUrl`。
     * ### 入参
     * - **FileUrl**：必填，文件的 OSS 地址。使用 Advance 方法时由 SDK 自动回填，无需手动赋值。
     * - **FileName**：必填，原始文件名（含后缀，如 `report.pdf`）。中转生成的 OSS 地址不携带原始文件名，后端据此确定文件后缀与展示名，因此必须显式传入。
     * - **ContentType**：可选，文件 MIME 类型；不传时按 `application/octet-stream` 处理。
     * - **OperatingObjectName**：可选，Agent 命名空间标识，决定文件入库路径。
     * ### 出参
     * 返回 OSS 对象路径 `objectName`、入库地址 `fileUrl`、公开访问地址 `filePublicUrl`（有效期 1 小时）、文件记录 ID `fileRecordId` 等；`uploadSignatureUrl` 在本模式下恒为空。
     *
     * @param Request - UploadChatFileRequest
     *
     * @returns UploadChatFileResponse
     *
     * @param UploadChatFileRequest $request
     *
     * @return UploadChatFileResponse
     */
    public function uploadChatFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadChatFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UploadChatFileAdvanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UploadChatFileResponse
     */
    public function uploadChatFileAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'WinNexo',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $uploadChatFileReq = new UploadChatFileRequest([]);
        Utils::convert($request, $uploadChatFileReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $uploadChatFileReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadChatFileWithOptions($uploadChatFileReq, $headers, $runtime);
    }
}
