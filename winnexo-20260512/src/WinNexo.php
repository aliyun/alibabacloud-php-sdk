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
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateGroupAliDingChatRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateGroupAliDingChatResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateGroupAliDingChatShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseAliDingDocRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseAliDingDocResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseFileRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseFileResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseTextRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateKnowledgeBaseTextResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingChatRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingChatResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingChatShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingDocRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingDocResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseShrinkRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingMeetingRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAliDingMeetingResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkMeetingRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkMeetingResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkMinutesRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDingtalkMinutesResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDirectoryRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalDirectoryResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFeishuChatRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFeishuChatResponse;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalFeishuChatShrinkRequest;
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
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListScheduledTasksShrinkRequest;
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
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RecommendNextActionsRequest;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RecommendNextActionsResponse;
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
        $this->_endpointRule = 'regional';
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
     * Performs a service health check.
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
     * Performs a service health check.
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
     * Creates a session.
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
     * Creates a session.
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
     * Registers a custom-only organization.
     *
     * @remarks
     * Registers a custom-only organization for subsequent department tree push through syncOrgStructure.
     *     Registration logic:
     *     1. Validates the corpId format (must start with a lowercase letter or digit, 3-64 characters, hyphens allowed).
     *     2. Delegates to OrgSyncAuthorizedService to execute registration (includes permission verification and tenant-level uniqueness check).
     *     3. Returns the registration result.
     *     Note: Custom-only organizations support only department tree synchronization. Member relationship synchronization is not supported.
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
     * Registers a custom-only organization.
     *
     * @remarks
     * Registers a custom-only organization for subsequent department tree push through syncOrgStructure.
     *     Registration logic:
     *     1. Validates the corpId format (must start with a lowercase letter or digit, 3-64 characters, hyphens allowed).
     *     2. Delegates to OrgSyncAuthorizedService to execute registration (includes permission verification and tenant-level uniqueness check).
     *     3. Returns the registration result.
     *     Note: Custom-only organizations support only department tree synchronization. Member relationship synchronization is not supported.
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
     * Creates a DingTalk group chat knowledge resource in a group.
     *
     * @remarks
     * ## Operation description
     * - Connects a specified DingTalk group chat to a group knowledge base that the caller has joined.
     * - The resource type is fixed to ALI_DING, the scope is fixed to GROUP, and the owning user is resolved from the gateway authentication identity.
     * - groupId, chatId, and historyStartTime are required.
     * - updateFrequency can be configured by using a preset or a five-field cron expression for subsequent synchronization frequency.
     * - The server verifies the caller\\"s group membership, the target group directory permissions, and the uniqueness of chatId within the scope.
     *
     * @param tmpReq - CreateGroupAliDingChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupAliDingChatResponse
     *
     * @param CreateGroupAliDingChatRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGroupAliDingChatResponse
     */
    public function createGroupAliDingChatWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateGroupAliDingChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->updateFrequency) {
            $request->updateFrequencyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateFrequency, 'updateFrequency', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->chatName) {
            @$body['chatName'] = $request->chatName;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$body['groupId'] = $request->groupId;
        }

        if (null !== $request->historyStartTime) {
            @$body['historyStartTime'] = $request->historyStartTime;
        }

        if (null !== $request->notes) {
            @$body['notes'] = $request->notes;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        if (null !== $request->updateFrequencyShrink) {
            @$body['updateFrequency'] = $request->updateFrequencyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGroupAliDingChat',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createGroupAliDingChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGroupAliDingChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a DingTalk group chat knowledge resource in a group.
     *
     * @remarks
     * ## Operation description
     * - Connects a specified DingTalk group chat to a group knowledge base that the caller has joined.
     * - The resource type is fixed to ALI_DING, the scope is fixed to GROUP, and the owning user is resolved from the gateway authentication identity.
     * - groupId, chatId, and historyStartTime are required.
     * - updateFrequency can be configured by using a preset or a five-field cron expression for subsequent synchronization frequency.
     * - The server verifies the caller\\"s group membership, the target group directory permissions, and the uniqueness of chatId within the scope.
     *
     * @param Request - CreateGroupAliDingChatRequest
     *
     * @returns CreateGroupAliDingChatResponse
     *
     * @param CreateGroupAliDingChatRequest $request
     *
     * @return CreateGroupAliDingChatResponse
     */
    public function createGroupAliDingChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupAliDingChatWithOptions($request, $headers, $runtime);
    }

    /**
     * Uploads an AliDing online document to the enterprise knowledge base. Management permissions are required.
     *
     * @remarks
     * ## Request description
     * - This operation adds an AliDing online document to a specified enterprise knowledge base.
     * - The caller must have the `DEVELOPMENT_KB_MANAGE` permission.
     * - `source_type` is fixed to `ONLINE_DOC`, `platform` is fixed to `ALI_DING`, and `scope` is fixed to `TENANT`.
     * - If `directoryId` is not provided, the document is bound to the root directory of the current digital employee by default. If provided, it must be a valid directory ID under the current tenant.
     * - The `filePublicUrl` parameter is required and specifies the publicly accessible URL of the AliDing online document to upload.
     * - Optional parameters include `operatingObjectName` (digital employee name), `description` (resource description), `knowledgeId` (knowledge base ID), and `sourceTags` (resource tags).
     * - A successful response returns information about the newly created resource, such as `sourceId`, `name`, `status`, `directoryId`, and creation time.
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
     * Uploads an AliDing online document to the enterprise knowledge base. Management permissions are required.
     *
     * @remarks
     * ## Request description
     * - This operation adds an AliDing online document to a specified enterprise knowledge base.
     * - The caller must have the `DEVELOPMENT_KB_MANAGE` permission.
     * - `source_type` is fixed to `ONLINE_DOC`, `platform` is fixed to `ALI_DING`, and `scope` is fixed to `TENANT`.
     * - If `directoryId` is not provided, the document is bound to the root directory of the current digital employee by default. If provided, it must be a valid directory ID under the current tenant.
     * - The `filePublicUrl` parameter is required and specifies the publicly accessible URL of the AliDing online document to upload.
     * - Optional parameters include `operatingObjectName` (digital employee name), `description` (resource description), `knowledgeId` (knowledge base ID), and `sourceTags` (resource tags).
     * - A successful response returns information about the newly created resource, such as `sourceId`, `name`, `status`, `directoryId`, and creation time.
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
     * Creates a category directory in the enterprise knowledge base.
     *
     * @remarks
     * ## Request description
     * - This operation allows users with the `DEVELOPMENT_KB_MANAGE` permission to create a category for the enterprise knowledge base.
     * - You can specify a parent category ID when creating a category. If no parent category ID is specified, the new category is mounted directly under the root directory of the enterprise knowledge base.
     * - The system automatically checks for name conflicts and directory depth limits.
     * - `tenant_id` and `user_id` are obtained only through authentication. These parameters are ignored even if they are provided in the request body.
     * - Ensure that the specified `parentDirectoryId` (if any) belongs to the current tenant.
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
     * Creates a category directory in the enterprise knowledge base.
     *
     * @remarks
     * ## Request description
     * - This operation allows users with the `DEVELOPMENT_KB_MANAGE` permission to create a category for the enterprise knowledge base.
     * - You can specify a parent category ID when creating a category. If no parent category ID is specified, the new category is mounted directly under the root directory of the enterprise knowledge base.
     * - The system automatically checks for name conflicts and directory depth limits.
     * - `tenant_id` and `user_id` are obtained only through authentication. These parameters are ignored even if they are provided in the request body.
     * - Ensure that the specified `parentDirectoryId` (if any) belongs to the current tenant.
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
     * Uploads a specified file to the enterprise knowledge base. Management permissions are required.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to the enterprise knowledge base.
     * - The `DEVELOPMENT_KB_MANAGE` permission is required to call this operation.
     * - You must provide the Object Storage Service (OSS) persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can use `sourceTags` to add labels to resources for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Ensure that your account balance is sufficient.
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
     * Uploads a specified file to the enterprise knowledge base. Management permissions are required.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to the enterprise knowledge base.
     * - The `DEVELOPMENT_KB_MANAGE` permission is required to call this operation.
     * - You must provide the Object Storage Service (OSS) persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can use `sourceTags` to add labels to resources for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Ensure that your account balance is sufficient.
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
     * Adds plain text content to a specified enterprise knowledge base.
     *
     * @remarks
     * ## Operation description
     * - This API is used to upload plain text information to an enterprise knowledge base. The caller must have the required management permissions.
     * - The `textContent` field is required and represents the plain text content to upload.
     * - Optional parameters include the digital employee name (`operatingObjectName`) and resource description (`description`), which allow users to customize additional details.
     * - If `directoryId` is provided, the uploaded text is attached to the specified knowledge base folder. If not provided, the text is attached to the root folder of the current digital employee by default.
     * - You can use `sourceTags` to add labels to resources for easier management and retrieval.
     * - Before invoking this operation, make sure that you have correctly configured the authentication method (AK, BearerToken, and APP authentication are supported) and have the `DEVELOPMENT_KB_MANAGE` permission.
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
     * Adds plain text content to a specified enterprise knowledge base.
     *
     * @remarks
     * ## Operation description
     * - This API is used to upload plain text information to an enterprise knowledge base. The caller must have the required management permissions.
     * - The `textContent` field is required and represents the plain text content to upload.
     * - Optional parameters include the digital employee name (`operatingObjectName`) and resource description (`description`), which allow users to customize additional details.
     * - If `directoryId` is provided, the uploaded text is attached to the specified knowledge base folder. If not provided, the text is attached to the root folder of the current digital employee by default.
     * - You can use `sourceTags` to add labels to resources for easier management and retrieval.
     * - Before invoking this operation, make sure that you have correctly configured the authentication method (AK, BearerToken, and APP authentication are supported) and have the `DEVELOPMENT_KB_MANAGE` permission.
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
     * Creates a personal AliDing group chat knowledge resource.
     *
     * @remarks
     * ## Request description
     * - Connects the specified AliDing group chat to the current user\\"s personal knowledge base.
     * - The resource type is fixed to ALI_DING, the scope is fixed to PERSONAL, and the owning user is parsed from the gateway authentication identity.
     * - historyStartTime is required and supports YYYY-MM-DD or YYYY-MM-DD HH:MM:SS format.
     * - updateFrequency can be configured with a preset or a five-field cron expression for subsequent synchronization frequency.
     * - chatId must be unique within the target personal scope.
     *
     * @param tmpReq - CreatePersonalAliDingChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalAliDingChatResponse
     *
     * @param CreatePersonalAliDingChatRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePersonalAliDingChatResponse
     */
    public function createPersonalAliDingChatWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePersonalAliDingChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->updateFrequency) {
            $request->updateFrequencyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateFrequency, 'updateFrequency', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->chatName) {
            @$body['chatName'] = $request->chatName;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->historyStartTime) {
            @$body['historyStartTime'] = $request->historyStartTime;
        }

        if (null !== $request->notes) {
            @$body['notes'] = $request->notes;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        if (null !== $request->updateFrequencyShrink) {
            @$body['updateFrequency'] = $request->updateFrequencyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalAliDingChat',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalAliDingChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalAliDingChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a personal AliDing group chat knowledge resource.
     *
     * @remarks
     * ## Request description
     * - Connects the specified AliDing group chat to the current user\\"s personal knowledge base.
     * - The resource type is fixed to ALI_DING, the scope is fixed to PERSONAL, and the owning user is parsed from the gateway authentication identity.
     * - historyStartTime is required and supports YYYY-MM-DD or YYYY-MM-DD HH:MM:SS format.
     * - updateFrequency can be configured with a preset or a five-field cron expression for subsequent synchronization frequency.
     * - chatId must be unique within the target personal scope.
     *
     * @param Request - CreatePersonalAliDingChatRequest
     *
     * @returns CreatePersonalAliDingChatResponse
     *
     * @param CreatePersonalAliDingChatRequest $request
     *
     * @return CreatePersonalAliDingChatResponse
     */
    public function createPersonalAliDingChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalAliDingChatWithOptions($request, $headers, $runtime);
    }

    /**
     * Uploads an AliDing meeting file to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API uploads AliDing meeting materials (such as audio/video files and Shanji links) to the "My Resources" section of a specified digital employee.
     * - The `source_type` is fixed to `ALI_DING_MEETING`, and the `scope` is fixed to `PERSONAL`.
     * - You must provide a public audio/video OSS URL (`ossUrl`) and the original Shanji link (`shanjiUrl`).
     * - Optionally, you can specify a target personal directory ID (`directoryId`). If not specified, the resource is automatically bound to the default root directory of the current digital employee.
     * - You can add a resource description (`description`) and meeting notes (`notes`). The meeting notes can be used for auxiliary analysis.
     * - This operation requires authentication. AK, BearerToken, and APP authentication methods are supported.
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
     * Uploads an AliDing meeting file to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API uploads AliDing meeting materials (such as audio/video files and Shanji links) to the "My Resources" section of a specified digital employee.
     * - The `source_type` is fixed to `ALI_DING_MEETING`, and the `scope` is fixed to `PERSONAL`.
     * - You must provide a public audio/video OSS URL (`ossUrl`) and the original Shanji link (`shanjiUrl`).
     * - Optionally, you can specify a target personal directory ID (`directoryId`). If not specified, the resource is automatically bound to the default root directory of the current digital employee.
     * - You can add a resource description (`description`) and meeting notes (`notes`). The meeting notes can be used for auxiliary analysis.
     * - This operation requires authentication. AK, BearerToken, and APP authentication methods are supported.
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
     * Uploads an AliDing online document to the personal resources of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API is used to add an AliDing online document to the "My Resources" section of a specified digital employee.
     * - Fixed parameters include `source_type=ONLINE_DOC`, `platform=ALI_DING`, and `scope=PERSONAL`.
     * - If `directoryId` is not provided, the document is attached to the root folder of the current digital employee by default. If provided, ensure that the folder belongs to the current user and exists under the current digital employee.
     * - During the invoke process, metering is started and related operation logs are recorded.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authentication identity. Values provided by the caller for these fields are ignored.
     * - Any validation or execute failure is thrown as an exception by the service and transformed into a POP error code returned to the caller.
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
     * Uploads an AliDing online document to the personal resources of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API is used to add an AliDing online document to the "My Resources" section of a specified digital employee.
     * - Fixed parameters include `source_type=ONLINE_DOC`, `platform=ALI_DING`, and `scope=PERSONAL`.
     * - If `directoryId` is not provided, the document is attached to the root folder of the current digital employee by default. If provided, ensure that the folder belongs to the current user and exists under the current digital employee.
     * - During the invoke process, metering is started and related operation logs are recorded.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authentication identity. Values provided by the caller for these fields are ignored.
     * - Any validation or execute failure is thrown as an exception by the service and transformed into a POP error code returned to the caller.
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
     * Adds an AliDing knowledge base to the personal resources of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API creates an AliDing knowledge base and mounts it to the personal resource directory of the specified digital employee.
     * - `platform` is fixed to `ALI_DING`, and `directory_type` is fixed to `PERSONAL`.
     * - If `directoryId` is provided, the system verifies that the directory exists and belongs to the current tenant and is of the personal type.
     * - During creation, the knowledge base root directory is initialized (with the status set to `RUNNING`), and background tasks are dispatched based on the provided synchronization configuration to pull the remote directory tree and create child nodes.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authenticated identity. These fields in the request body are ignored.
     * - The synchronization configuration is optional. If enabled, a cron expression must be provided. If not provided or disabled, scheduled synchronization is not performed by default.
     * - The knowledge base name can be customized. If not provided, it is automatically populated after background synchronization.
     * - Multi-value object binding is supported. Related information is serialized and stored in the knowledge base metadata.
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
     * Adds an AliDing knowledge base to the personal resources of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API creates an AliDing knowledge base and mounts it to the personal resource directory of the specified digital employee.
     * - `platform` is fixed to `ALI_DING`, and `directory_type` is fixed to `PERSONAL`.
     * - If `directoryId` is provided, the system verifies that the directory exists and belongs to the current tenant and is of the personal type.
     * - During creation, the knowledge base root directory is initialized (with the status set to `RUNNING`), and background tasks are dispatched based on the provided synchronization configuration to pull the remote directory tree and create child nodes.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authenticated identity. These fields in the request body are ignored.
     * - The synchronization configuration is optional. If enabled, a cron expression must be provided. If not provided or disabled, scheduled synchronization is not performed by default.
     * - The knowledge base name can be customized. If not provided, it is automatically populated after background synchronization.
     * - Multi-value object binding is supported. Related information is serialized and stored in the knowledge base metadata.
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
     * Uploads a DingTalk meeting to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This operation uploads a DingTalk meeting as a resource to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `DINGTALK_MEETING`, and `scope` is fixed to `PERSONAL`.
     * - If `credentialId` is not provided, the system default configurations are used.
     * - If `directoryId` is not specified, the resource is automatically attached to the default root folder of the current digital employee. If specified, it must be an existing personal folder of the invoker under the digital employee.
     * - The optional parameters `description` and `notes` are used to describe the resource and record meeting notes, respectively. The `notes` value is used for auxiliary analysis.
     *
     * @deprecated OpenAPI CreatePersonalDingtalkMeeting is deprecated
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

    // Deprecated
    /**
     * Uploads a DingTalk meeting to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This operation uploads a DingTalk meeting as a resource to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `DINGTALK_MEETING`, and `scope` is fixed to `PERSONAL`.
     * - If `credentialId` is not provided, the system default configurations are used.
     * - If `directoryId` is not specified, the resource is automatically attached to the default root folder of the current digital employee. If specified, it must be an existing personal folder of the invoker under the digital employee.
     * - The optional parameters `description` and `notes` are used to describe the resource and record meeting notes, respectively. The `notes` value is used for auxiliary analysis.
     *
     * @deprecated OpenAPI CreatePersonalDingtalkMeeting is deprecated
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
     * Uploads a meeting to the current user\\"s personal knowledge base by using a standard DingTalk Shanji URL.
     *
     * @remarks
     * ## Request description
     * - This API creates a meeting resource by using a standard DingTalk Shanji link. The collection method is fixed to the DWS corresponding to personal OAuth.
     * - `source_type` is fixed to `DINGTALK_MEETING`, and `scope` is fixed to `PERSONAL`.
     * - You must provide a standard DingTalk Shanji link or taskUuid (`shanjiUrl`).
     * - Optionally specify a target personal directory ID (`directoryId`). If not specified, the default root directory of the current digital employee is used.
     * - You can add a resource description (`description`) and meeting notes (`notes`).
     * - This operation supports one of the following authentication methods: AK, BearerToken, or APP.
     *
     * @param Request - CreatePersonalDingtalkMinutesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalDingtalkMinutesResponse
     *
     * @param CreatePersonalDingtalkMinutesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreatePersonalDingtalkMinutesResponse
     */
    public function createPersonalDingtalkMinutesWithOptions($request, $headers, $runtime)
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
            'action' => 'CreatePersonalDingtalkMinutes',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalDingtalkMinutes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalDingtalkMinutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a meeting to the current user\\"s personal knowledge base by using a standard DingTalk Shanji URL.
     *
     * @remarks
     * ## Request description
     * - This API creates a meeting resource by using a standard DingTalk Shanji link. The collection method is fixed to the DWS corresponding to personal OAuth.
     * - `source_type` is fixed to `DINGTALK_MEETING`, and `scope` is fixed to `PERSONAL`.
     * - You must provide a standard DingTalk Shanji link or taskUuid (`shanjiUrl`).
     * - Optionally specify a target personal directory ID (`directoryId`). If not specified, the default root directory of the current digital employee is used.
     * - You can add a resource description (`description`) and meeting notes (`notes`).
     * - This operation supports one of the following authentication methods: AK, BearerToken, or APP.
     *
     * @param Request - CreatePersonalDingtalkMinutesRequest
     *
     * @returns CreatePersonalDingtalkMinutesResponse
     *
     * @param CreatePersonalDingtalkMinutesRequest $request
     *
     * @return CreatePersonalDingtalkMinutesResponse
     */
    public function createPersonalDingtalkMinutes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalDingtalkMinutesWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a personal folder (category) under My Resources.
     *
     * @remarks
     * ## Request description
     * - This API is used to create a personal folder (category) under "My Resources".
     * - If `parentDirectoryId` is not specified, the system automatically uses or creates the default root folder of the current digital human as the parent folder.
     * - If `parentDirectoryId` is specified, it must be an existing personal folder of the current user under the current digital human.
     * - `tenant_id` and `user_id` are derived from the authentication identity only. These fields are ignored if included in the request body.
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
     * Creates a personal folder (category) under My Resources.
     *
     * @remarks
     * ## Request description
     * - This API is used to create a personal folder (category) under "My Resources".
     * - If `parentDirectoryId` is not specified, the system automatically uses or creates the default root folder of the current digital human as the parent folder.
     * - If `parentDirectoryId` is specified, it must be an existing personal folder of the current user under the current digital human.
     * - `tenant_id` and `user_id` are derived from the authentication identity only. These fields are ignored if included in the request body.
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
     * Creates a personal knowledge resource from a single Lark group chat using the current user\\"s Lark authorization.
     *
     * @remarks
     * ## Request description
     * This API uses the Lark application connection managed by the user corresponding to the current OpenAPI identity. It pulls the name and historical messages of the specified group chat through the built-in CLI of the project and creates a knowledge resource in the user\\"s personal knowledge base.
     * - `chatId`: The Lark group chat ID. Must start with `oc_`.
     * - `directoryId` (optional): The target personal directory ID. If omitted, the current user\\"s default personal root directory is used.
     * - `historyStartTime` (optional): The start time for historical messages. Supports `YYYY-MM-DD` or `YYYY-MM-DD HH:MM:SS`.
     * - `updateFrequency` (optional): The Source-level scheduled synchronization configuration. Supports preset frequencies or five-field cron expressions.
     * - `description`, `operatingObjectName`, `notes`, `sourceTags`: Optional Source metadata.
     * Security constraints: The Source Type is fixed to FEISHU, and the knowledge scope is fixed to PERSONAL. The Lark connector user is determined by the POP trusted identity. Credentials or user IDs passed by the caller are not accepted.
     *
     * @param tmpReq - CreatePersonalFeishuChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalFeishuChatResponse
     *
     * @param CreatePersonalFeishuChatRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePersonalFeishuChatResponse
     */
    public function createPersonalFeishuChatWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePersonalFeishuChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->updateFrequency) {
            $request->updateFrequencyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateFrequency, 'updateFrequency', 'json');
        }

        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        if (null !== $request->historyStartTime) {
            @$body['historyStartTime'] = $request->historyStartTime;
        }

        if (null !== $request->notes) {
            @$body['notes'] = $request->notes;
        }

        if (null !== $request->operatingObjectName) {
            @$body['operatingObjectName'] = $request->operatingObjectName;
        }

        if (null !== $request->sourceTags) {
            @$body['sourceTags'] = $request->sourceTags;
        }

        if (null !== $request->updateFrequencyShrink) {
            @$body['updateFrequency'] = $request->updateFrequencyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalFeishuChat',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/createPersonalFeishuChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePersonalFeishuChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a personal knowledge resource from a single Lark group chat using the current user\\"s Lark authorization.
     *
     * @remarks
     * ## Request description
     * This API uses the Lark application connection managed by the user corresponding to the current OpenAPI identity. It pulls the name and historical messages of the specified group chat through the built-in CLI of the project and creates a knowledge resource in the user\\"s personal knowledge base.
     * - `chatId`: The Lark group chat ID. Must start with `oc_`.
     * - `directoryId` (optional): The target personal directory ID. If omitted, the current user\\"s default personal root directory is used.
     * - `historyStartTime` (optional): The start time for historical messages. Supports `YYYY-MM-DD` or `YYYY-MM-DD HH:MM:SS`.
     * - `updateFrequency` (optional): The Source-level scheduled synchronization configuration. Supports preset frequencies or five-field cron expressions.
     * - `description`, `operatingObjectName`, `notes`, `sourceTags`: Optional Source metadata.
     * Security constraints: The Source Type is fixed to FEISHU, and the knowledge scope is fixed to PERSONAL. The Lark connector user is determined by the POP trusted identity. Credentials or user IDs passed by the caller are not accepted.
     *
     * @param Request - CreatePersonalFeishuChatRequest
     *
     * @returns CreatePersonalFeishuChatResponse
     *
     * @param CreatePersonalFeishuChatRequest $request
     *
     * @return CreatePersonalFeishuChatResponse
     */
    public function createPersonalFeishuChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPersonalFeishuChatWithOptions($request, $headers, $runtime);
    }

    /**
     * Uploads a Lark Minutes meeting file to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * This API uploads a meeting record from Lark Minutes to the "My Resources" section of a specified digital employee. By providing the required parameters, such as the unique identifier of the Lark Minutes record (`minuteToken`) and the credential ID (`credentialId`), you can migrate and save meeting content. If no target directory is specified, the resource is bound to the root directory of the current digital employee by default.
     * - `operatingObjectName`: The name of the digital employee that performs the operation.
     * - `name`: The display name of the uploaded resource in the system.
     * - `minuteToken`: The unique identifier of the meeting from the Lark Minutes platform.
     * - `credentialId`: The ID associated with specific authentication information, used to verify the validity of the request.
     * - `directoryId` (optional): The ID of the target personal directory where the resource is stored. If this field is omitted, the resource is automatically placed in the default location.
     * - `description` (optional): A brief description or note about the uploaded resource.
     * Precautions:
     * - Ensure that the provided `minuteToken` and `credentialId` are valid.
     * - If `directoryId` is specified, confirm that it belongs to one of the available personal directories of the caller in the current digital employee environment.
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
     * Uploads a Lark Minutes meeting file to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * This API uploads a meeting record from Lark Minutes to the "My Resources" section of a specified digital employee. By providing the required parameters, such as the unique identifier of the Lark Minutes record (`minuteToken`) and the credential ID (`credentialId`), you can migrate and save meeting content. If no target directory is specified, the resource is bound to the root directory of the current digital employee by default.
     * - `operatingObjectName`: The name of the digital employee that performs the operation.
     * - `name`: The display name of the uploaded resource in the system.
     * - `minuteToken`: The unique identifier of the meeting from the Lark Minutes platform.
     * - `credentialId`: The ID associated with specific authentication information, used to verify the validity of the request.
     * - `directoryId` (optional): The ID of the target personal directory where the resource is stored. If this field is omitted, the resource is automatically placed in the default location.
     * - `description` (optional): A brief description or note about the uploaded resource.
     * Precautions:
     * - Ensure that the provided `minuteToken` and `credentialId` are valid.
     * - If `directoryId` is specified, confirm that it belongs to one of the available personal directories of the caller in the current digital employee environment.
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
     * Uploads a file to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - The file must include an OSS persistent address (`filePath`). Other information such as the public access URL and original file name is optional.
     * - If the target folder ID (`directoryId`) is not specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the personal folder of the caller.
     * - Security authentication is supported through multiple authentication methods (AK, BearerToken, and APP) to authenticate requests.
     * - The operation type is write (`write`), and operation logs are recorded for subsequent auditing.
     * To invoke this operation, you can use AK, BearerToken, or APP authentication.
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
     * Uploads a file to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Request description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - The file must include an OSS persistent address (`filePath`). Other information such as the public access URL and original file name is optional.
     * - If the target folder ID (`directoryId`) is not specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the personal folder of the caller.
     * - Security authentication is supported through multiple authentication methods (AK, BearerToken, and APP) to authenticate requests.
     * - The operation type is write (`write`), and operation logs are recorded for subsequent auditing.
     * To invoke this operation, you can use AK, BearerToken, or APP authentication.
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
     * Uploads plain text content to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Operation description
     * - This API is used to add plain text content to the personal resources of a specified digital employee.
     * - `source_type` is fixed to `TEXT`, and `scope` is fixed to `PERSONAL`.
     * - If `directoryId` is not provided, the content is bound to the root directory of the current digital employee by default. If provided, it must be an existing personal directory of the caller under the digital employee.
     * - `tenant_id` and `user_id` can only be obtained from the authentication identity information. These parameters are ignored if passed in the request body.
     * - The call initiates metering and generates a corresponding `billing_id`.
     * - The text content is written to `unstructured_docs`, and an initial resource record is generated.
     * - Any validation or execution failure throws a `RobjectException`, which is converted to a POP error code by the global middleware and returned to the caller.
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
     * Uploads plain text content to the personal resource library of the current digital employee.
     *
     * @remarks
     * ## Operation description
     * - This API is used to add plain text content to the personal resources of a specified digital employee.
     * - `source_type` is fixed to `TEXT`, and `scope` is fixed to `PERSONAL`.
     * - If `directoryId` is not provided, the content is bound to the root directory of the current digital employee by default. If provided, it must be an existing personal directory of the caller under the digital employee.
     * - `tenant_id` and `user_id` can only be obtained from the authentication identity information. These parameters are ignored if passed in the request body.
     * - The call initiates metering and generates a corresponding `billing_id`.
     * - The text content is written to `unstructured_docs`, and an initial resource record is generated.
     * - Any validation or execution failure throws a `RobjectException`, which is converted to a POP error code by the global middleware and returned to the caller.
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
     * Uploads an offline meeting audio file to the personal resources of the current digital employee.
     *
     * @remarks
     * ## Operation description
     * - This API operation uploads an offline meeting audio file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `VOICE_MEETING`, `scope` is fixed to `PERSONAL`, and `voice_meeting_type` is fixed to `OFFLINE`.
     * - If `directoryId` is not provided in the request body, the resource is automatically bound to the default root directory. If `directoryId` is provided, it must be an existing personal directory of the current user under the current digital employee.
     * - Calling this operation starts a background process to transcribe the audio file and returns information about the newly created resource.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authenticated identity. These fields are ignored even if they are included in the request body.
     * - Any validation or execution failure throws a `RobjectException`, which is converted to a POP error code through the global middleware.
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
     * Uploads an offline meeting audio file to the personal resources of the current digital employee.
     *
     * @remarks
     * ## Operation description
     * - This API operation uploads an offline meeting audio file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `VOICE_MEETING`, `scope` is fixed to `PERSONAL`, and `voice_meeting_type` is fixed to `OFFLINE`.
     * - If `directoryId` is not provided in the request body, the resource is automatically bound to the default root directory. If `directoryId` is provided, it must be an existing personal directory of the current user under the current digital employee.
     * - Calling this operation starts a background process to transcribe the audio file and returns information about the newly created resource.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authenticated identity. These fields are ignored even if they are included in the request body.
     * - Any validation or execution failure throws a `RobjectException`, which is converted to a POP error code through the global middleware.
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
     * Creates a scheduled task.
     *
     * @remarks
     * ## Operation description
     * - This operation is used to upload files to an enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL of the file and the original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee by default.
     * - You can add tags to resources by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Make sure that your account balance is sufficient.
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

        if (null !== $tmpReq->visibleMemberUserIds) {
            $request->visibleMemberUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->visibleMemberUserIds, 'visibleMemberUserIds', 'json');
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

        if (null !== $request->visibility) {
            @$body['visibility'] = $request->visibility;
        }

        if (null !== $request->visibleMemberUserIdsShrink) {
            @$body['visibleMemberUserIds'] = $request->visibleMemberUserIdsShrink;
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
     * Creates a scheduled task.
     *
     * @remarks
     * ## Operation description
     * - This operation is used to upload files to an enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL of the file and the original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee by default.
     * - You can add tags to resources by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Make sure that your account balance is sufficient.
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
     * Adds a knowledge base and knowledge base categories.
     *
     * @remarks
     * ## Request description
     * - This API is used to create a new enterprise knowledge base directory under a specified tenant.
     * - You can specify the parent directory of the new directory by setting the `parentId` parameter. If this parameter is not specified, the directory is created as a root directory by default.
     * - The `path` parameter is optional. If this parameter is not specified, the system automatically calculates the path based on the parent directory.
     * - Calling this operation requires the corresponding permissions. Multiple authentication methods are supported, including AK, BearerToken, and APP authentication.
     * - After the directory is created, the related information of the new directory is returned, such as the directory ID and name.
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
     * Adds a knowledge base and knowledge base categories.
     *
     * @remarks
     * ## Request description
     * - This API is used to create a new enterprise knowledge base directory under a specified tenant.
     * - You can specify the parent directory of the new directory by setting the `parentId` parameter. If this parameter is not specified, the directory is created as a root directory by default.
     * - The `path` parameter is optional. If this parameter is not specified, the system automatically calculates the path based on the parent directory.
     * - Calling this operation requires the corresponding permissions. Multiple authentication methods are supported, including AK, BearerToken, and APP authentication.
     * - After the directory is created, the related information of the new directory is returned, such as the directory ID and name.
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
     * Creates a user and adds the user to a tenant.
     *
     * @remarks
     * Creates a user by using OpenAPI.
     *     Business orchestration:
     *     1. Parses roleCodes → role_ids (validates against system role enumerations).
     *     2. Checks whether the user already exists (used to return the isNewUser flag).
     *     3. Calls UserManagementService.add_tenant_member to create or add the user (the password must be passed in as an RSA ciphertext by the caller).
     *     4. Returns the creation result (including the isNewUser flag).
     *     Error codes:
     *     - ERR.User.DeactivatedInTenant: The user is deactivated in the tenant. Use updateUser to resume the user.
     *     - ERR.User.AlreadyInTenant: The user is already an active member of the tenant.
     *     - ERR.User.DisplayNameDuplicateInTenant: The display name is duplicate within the tenant.
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
     * Creates a user and adds the user to a tenant.
     *
     * @remarks
     * Creates a user by using OpenAPI.
     *     Business orchestration:
     *     1. Parses roleCodes → role_ids (validates against system role enumerations).
     *     2. Checks whether the user already exists (used to return the isNewUser flag).
     *     3. Calls UserManagementService.add_tenant_member to create or add the user (the password must be passed in as an RSA ciphertext by the caller).
     *     4. Returns the creation result (including the isNewUser flag).
     *     Error codes:
     *     - ERR.User.DeactivatedInTenant: The user is deactivated in the tenant. Use updateUser to resume the user.
     *     - ERR.User.AlreadyInTenant: The user is already an active member of the tenant.
     *     - ERR.User.DisplayNameDuplicateInTenant: The display name is duplicate within the tenant.
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
     * Deletes a session.
     *
     * @remarks
     * ## Request description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - The file must include an OSS persistent address (`filePath`). Other information such as the public access URL and original file name is optional.
     * - If the target directory ID (`directoryId`) is not specified, the file is automatically attached to the default root directory of the current digital employee. If specified, ensure that the directory belongs to the personal directory of the caller.
     * - Security authentication is supported through multiple methods (AK, BearerToken, APP).
     * - The operation type is write (`write`), and operation logs are recorded for subsequent auditing.
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
     * Deletes a session.
     *
     * @remarks
     * ## Request description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - The file must include an OSS persistent address (`filePath`). Other information such as the public access URL and original file name is optional.
     * - If the target directory ID (`directoryId`) is not specified, the file is automatically attached to the default root directory of the current digital employee. If specified, ensure that the directory belongs to the personal directory of the caller.
     * - Security authentication is supported through multiple methods (AK, BearerToken, APP).
     * - The operation type is write (`write`), and operation logs are recorded for subsequent auditing.
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
     * Deletes a specified source.
     *
     * @remarks
     * ## Operation description
     * - `tenantId` is derived from the authenticated identity only. Any value passed by the caller is ignored.
     * - `sourceId` is passed through the request body. The registration path is the flat URI `/openapi/deleteSource` and does not contain a `{sourceId}` path template. Do not append the resource ID as a path segment. The gateway performs exact routing based on the flat URI and returns `InvalidAction.NotFound` if the path does not match.
     * - Deletion is irreversible. The parsing results and bindings associated with the resource are invalidated.
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
     * Deletes a specified source.
     *
     * @remarks
     * ## Operation description
     * - `tenantId` is derived from the authenticated identity only. Any value passed by the caller is ignored.
     * - `sourceId` is passed through the request body. The registration path is the flat URI `/openapi/deleteSource` and does not contain a `{sourceId}` path template. Do not append the resource ID as a path segment. The gateway performs exact routing based on the flat URI and returns `InvalidAction.NotFound` if the path does not match.
     * - Deletion is irreversible. The parsing results and bindings associated with the resource are invalidated.
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
     * Deletes an enterprise knowledge base and its subdirectories.
     *
     * @remarks
     * ## Request description
     * - This API allows you to delete a specific enterprise knowledge base directory.
     * - Set the `deleteMode` parameter to select different deletion strategies, including reject deletion (reject), recursive deletion (recursive), or move the directory to the root directory (move_to_root).
     * - If `deleteMode` is not provided, the default behavior is to reject deletion.
     * - The enterprise directory boundary is validated before the deletion operation.
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
     * Deletes an enterprise knowledge base and its subdirectories.
     *
     * @remarks
     * ## Request description
     * - This API allows you to delete a specific enterprise knowledge base directory.
     * - Set the `deleteMode` parameter to select different deletion strategies, including reject deletion (reject), recursive deletion (recursive), or move the directory to the root directory (move_to_root).
     * - If `deleteMode` is not provided, the default behavior is to reject deletion.
     * - The enterprise directory boundary is validated before the deletion operation.
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
     * Disables an API token.
     *
     * @remarks
     * Disables the INSTANCE token of a user.
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is enforced).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Calls disable_token (ACTIVE → INACTIVE).
     *     4. Returns disabled=True.
     *     Idempotence: If no ACTIVE token exists, deactivate_all affects 0 rows and does not return an error.
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
     * Disables an API token.
     *
     * @remarks
     * Disables the INSTANCE token of a user.
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is enforced).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Calls disable_token (ACTIVE → INACTIVE).
     *     4. Returns disabled=True.
     *     Idempotence: If no ACTIVE token exists, deactivate_all affects 0 rows and does not return an error.
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
     * Enables an API token.
     *
     * @remarks
     * Enables the INSTANCE token for a user (idempotent).
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is required).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Calls enable_token:
     *        - If an ACTIVE token exists, returns idempotently (only the masked value is returned, and the plaintext is not issued again).
     *        - If an INACTIVE token exists, reactivates it (returns the plaintext).
     *        - If no token exists, creates one (returns the plaintext).
     *     Security constraint: The token plaintext is returned only once when the token is first enabled. Subsequent idempotent calls do not return the plaintext.
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
     * Enables an API token.
     *
     * @remarks
     * Enables the INSTANCE token for a user (idempotent).
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is required).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Calls enable_token:
     *        - If an ACTIVE token exists, returns idempotently (only the masked value is returned, and the plaintext is not issued again).
     *        - If an INACTIVE token exists, reactivates it (returns the plaintext).
     *        - If no token exists, creates one (returns the plaintext).
     *     Security constraint: The token plaintext is returned only once when the token is first enabled. Subsequent idempotent calls do not return the plaintext.
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
     * Retrieves session details.
     *
     * @remarks
     * ## Request description
     * - This API uploads a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - The file must include an OSS persistent address (`filePath`). Other information such as the public access URL and original file name is optional.
     * - If no target folder ID (`directoryId`) is specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the invoker\\"s personal folder.
     * - Security verification is supported through multiple authenticate methods (AK, BearerToken, APP).
     * - The operation type is write (`write`), and operation logs are recorded for subsequent auditing.
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
     * Retrieves session details.
     *
     * @remarks
     * ## Request description
     * - This API uploads a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - The file must include an OSS persistent address (`filePath`). Other information such as the public access URL and original file name is optional.
     * - If no target folder ID (`directoryId`) is specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the invoker\\"s personal folder.
     * - Security verification is supported through multiple authenticate methods (AK, BearerToken, APP).
     * - The operation type is write (`write`), and operation logs are recorded for subsequent auditing.
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
     * Retrieves the active Graph Schema that is readable by the current user.
     *
     * @remarks
     * Reads the active schema_content and securely trims it based on the token user\\"s semantic resource READ permissions.
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
     * Retrieves the active Graph Schema that is readable by the current user.
     *
     * @remarks
     * Reads the active schema_content and securely trims it based on the token user\\"s semantic resource READ permissions.
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
     * Queries the expiration time of the most recently created standard package instance for a tenant.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries the expiration time of the most recently created standard package instance for a specified tenant.
     * - If no standard package instance is found, the `found` field returns `False`.
     * - You can use the `tenantId` parameter to specify the tenant ID. By default, the tenant ID of the caller is used.
     * - The request method is POST and must be called over HTTPS.
     * - Valid authentication information (such as AK, BearerToken, or APP) is required to complete the request.
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
     * Queries the expiration time of the most recently created standard package instance for a tenant.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries the expiration time of the most recently created standard package instance for a specified tenant.
     * - If no standard package instance is found, the `found` field returns `False`.
     * - You can use the `tenantId` parameter to specify the tenant ID. By default, the tenant ID of the caller is used.
     * - The request method is POST and must be called over HTTPS.
     * - Valid authentication information (such as AK, BearerToken, or APP) is required to complete the request.
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
     * Queries the details of a specified knowledge item in the enterprise knowledge base.
     *
     * @remarks
     * ## Operation description
     * - This API operation retrieves the details of a specific knowledge item in the enterprise knowledge base.
     * - Calling this operation requires the `DEVELOPMENT_KB_VIEW` feature permission.
     * - Knowledge details include but are not limited to the knowledge type, name, and description.
     * - The `sourceId` parameter is required to identify the knowledge item to query.
     * - `tenantId` is an optional parameter. The tenant ID of the caller is used by default.
     * - Authentication is supported through `AK`, `BearerToken`, or `APP` methods.
     * - Security constraint: `tenant_id` and `user_id` can only be derived from the authenticated identity.
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
     * Queries the details of a specified knowledge item in the enterprise knowledge base.
     *
     * @remarks
     * ## Operation description
     * - This API operation retrieves the details of a specific knowledge item in the enterprise knowledge base.
     * - Calling this operation requires the `DEVELOPMENT_KB_VIEW` feature permission.
     * - Knowledge details include but are not limited to the knowledge type, name, and description.
     * - The `sourceId` parameter is required to identify the knowledge item to query.
     * - `tenantId` is an optional parameter. The tenant ID of the caller is used by default.
     * - Authentication is supported through `AK`, `BearerToken`, or `APP` methods.
     * - Security constraint: `tenant_id` and `user_id` can only be derived from the authenticated identity.
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
     * Retrieves the execution details of a scheduled task.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to an enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Make sure your account balance is sufficient.
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
     * Retrieves the execution details of a scheduled task.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to an enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Make sure your account balance is sufficient.
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
     * Retrieves execution records of scheduled tasks.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to the enterprise knowledge base.
     * - The `DEVELOPMENT_KB_MANAGE` feature permission is required to call this API.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Ensure that your account balance is sufficient.
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

        if (null !== $request->initiatorUserId) {
            @$query['initiatorUserId'] = $request->initiatorUserId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
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
     * Retrieves execution records of scheduled tasks.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to the enterprise knowledge base.
     * - The `DEVELOPMENT_KB_MANAGE` feature permission is required to call this API.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Ensure that your account balance is sufficient.
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
     * Retrieves the details of scheduled task understanding.
     *
     * @remarks
     * ## Request description
     * - This operation uploads a file to the enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL of the file and the original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee by default.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Ensure that your account balance is sufficient.
     *
     * @deprecated OpenAPI GetScheduledTaskUnderstandDetail is deprecated
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

    // Deprecated
    /**
     * Retrieves the details of scheduled task understanding.
     *
     * @remarks
     * ## Request description
     * - This operation uploads a file to the enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL of the file and the original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee by default.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Ensure that your account balance is sufficient.
     *
     * @deprecated OpenAPI GetScheduledTaskUnderstandDetail is deprecated
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
     * Retrieves skill details.
     *
     * @remarks
     * ## Request description
     * Queries skill details by SkillCode or SkillName, including metadata, input parameter schema, and SKILL.md summary.
     * - **TenantId**: Optional common parameter passed through by the gateway to the backend header. If not specified, the default tenant of the current caller is used.
     * - **SkillCode**: Mutually exclusive with SkillName. If both are specified, SkillCode takes precedence.
     * - **SkillName**: Mutually exclusive with SkillCode. If the name is not unique within the tenant, `ERR.SkillHub.SkillNameAmbiguous` is returned.
     * - **ViewMode**: Optional. Valid values: `draft` (draft/editing view) or `published` (published view, default).
     * - **IncludeSkillFiles**: Optional. Specifies whether to return the complete skill file tree (SKILL.md / scripts / templates). Default value: `false`.
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
     * Retrieves skill details.
     *
     * @remarks
     * ## Request description
     * Queries skill details by SkillCode or SkillName, including metadata, input parameter schema, and SKILL.md summary.
     * - **TenantId**: Optional common parameter passed through by the gateway to the backend header. If not specified, the default tenant of the current caller is used.
     * - **SkillCode**: Mutually exclusive with SkillName. If both are specified, SkillCode takes precedence.
     * - **SkillName**: Mutually exclusive with SkillCode. If the name is not unique within the tenant, `ERR.SkillHub.SkillNameAmbiguous` is returned.
     * - **ViewMode**: Optional. Valid values: `draft` (draft/editing view) or `published` (published view, default).
     * - **IncludeSkillFiles**: Optional. Specifies whether to return the complete skill file tree (SKILL.md / scripts / templates). Default value: `false`.
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
     * Queries the execution result of a skill.
     *
     * @remarks
     * ## Request description
     * Queries the current status and result of an asynchronous task by `RunId`.
     * - **State machine**: Running (PENDING/RUNNING) → Succeeded / Failed / Cancelled
     * - **TenantId**: An optional common parameter passed through by the gateway. The backend verifies that the RunId belongs to the current tenant. Otherwise, `ERR.SkillHub.RunNotFound` is returned to avoid exposing existence information.
     * - **IncludeLogs**: Optional. Specifies whether to return execution logs. Default value: `false`.
     * When execution succeeds, `Result.Content[]` is an MCP-style Content block array (Text / File / Image).
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
     * Queries the execution result of a skill.
     *
     * @remarks
     * ## Request description
     * Queries the current status and result of an asynchronous task by `RunId`.
     * - **State machine**: Running (PENDING/RUNNING) → Succeeded / Failed / Cancelled
     * - **TenantId**: An optional common parameter passed through by the gateway. The backend verifies that the RunId belongs to the current tenant. Otherwise, `ERR.SkillHub.RunNotFound` is returned to avoid exposing existence information.
     * - **IncludeLogs**: Optional. Specifies whether to return execution logs. Default value: `false`.
     * When execution succeeds, `Result.Content[]` is an MCP-style Content block array (Text / File / Image).
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
     * Queries the details of a specified resource (knowledge), with support for returning large detail fields on demand.
     *
     * @remarks
     * ## Operation description
     * - `tenant_id` is derived from the authenticated identity only. Any value passed in the body is ignored.
     * - Response parameters do not expose audit fields such as `creator` or `modifier`. The `unstructured_docs[ ].content` field is not returned by default to avoid large responses.
     * - Set the `includeDetails` parameter to `True` to retrieve additional details including `settings`, `notes`, `structuredTables`, and `unstructuredDocs`.
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
     * Queries the details of a specified resource (knowledge), with support for returning large detail fields on demand.
     *
     * @remarks
     * ## Operation description
     * - `tenant_id` is derived from the authenticated identity only. Any value passed in the body is ignored.
     * - Response parameters do not expose audit fields such as `creator` or `modifier`. The `unstructured_docs[ ].content` field is not returned by default to avoid large responses.
     * - Set the `includeDetails` parameter to `True` to retrieve additional details including `settings`, `notes`, `structuredTables`, and `unstructuredDocs`.
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
     * Generates a signed URL for directly uploading files to OSS.
     *
     * @remarks
     * ## Operation description
     * This API allows callers to obtain a signed URL for directly uploading files to Alibaba Cloud Object Storage Service (OSS) based on the provided file name and other information. With this URL, users can upload files directly to the specified OSS location without routing through an intermediate server, which improves efficiency and security.
     * - **Security constraint**: `tenant_id`/`user_id` are derived only from the authenticated identity. Values provided in the request body are ignored.
     * - **Default value**: If the `expires` parameter is not specified, the default expiration time is 3600 seconds (1 hour).
     * - **Content-Type**: If `contentType` is not provided, the system attempts to automatically infer the file type.
     * - **Scope**: The `scope` parameter defines whether the data source belongs to a personal or enterprise knowledge base. In most cases, this does not need to be set.
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
     * Generates a signed URL for directly uploading files to OSS.
     *
     * @remarks
     * ## Operation description
     * This API allows callers to obtain a signed URL for directly uploading files to Alibaba Cloud Object Storage Service (OSS) based on the provided file name and other information. With this URL, users can upload files directly to the specified OSS location without routing through an intermediate server, which improves efficiency and security.
     * - **Security constraint**: `tenant_id`/`user_id` are derived only from the authenticated identity. Values provided in the request body are ignored.
     * - **Default value**: If the `expires` parameter is not specified, the default expiration time is 3600 seconds (1 hour).
     * - **Content-Type**: If `contentType` is not provided, the system attempts to automatically infer the file type.
     * - **Scope**: The `scope` parameter defines whether the data source belongs to a personal or enterprise knowledge base. In most cases, this does not need to be set.
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
     * Queries the token status of a user.
     *
     * @remarks
     * Queries the INSTANCE token status of a user.
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is required).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Queries the ACTIVE INSTANCE token.
     *     4. If the token exists, returns enabled=True with the masked value and creation time.
     *     5. If the token does not exist, returns enabled=False.
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
     * Queries the token status of a user.
     *
     * @remarks
     * Queries the INSTANCE token status of a user.
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is required).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Queries the ACTIVE INSTANCE token.
     *     4. If the token exists, returns enabled=True with the masked value and creation time.
     *     5. If the token does not exist, returns enabled=False.
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
     * Queries user details.
     *
     * @remarks
     * Queries user details through OpenAPI.
     *     Business orchestration:
     *     1. Locate the user by wnUserId or accountId.
     *     2. Query the user mapping information in the current tenant (status, join time, and last logon time).
     *     3. Query the role list of the user in the current tenant.
     *     4. Query the user group list of the user in the current tenant.
     *     5. Assemble the response.
     *     Error codes:
     *     - ERR.User.NotFound: The user does not exist.
     *     - ERR.User.NotInTenant: The user does not belong to the current tenant.
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
     * Queries user details.
     *
     * @remarks
     * Queries user details through OpenAPI.
     *     Business orchestration:
     *     1. Locate the user by wnUserId or accountId.
     *     2. Query the user mapping information in the current tenant (status, join time, and last logon time).
     *     3. Query the role list of the user in the current tenant.
     *     4. Query the user group list of the user in the current tenant.
     *     5. Assemble the response.
     *     Error codes:
     *     - ERR.User.NotFound: The user does not exist.
     *     - ERR.User.NotInTenant: The user does not belong to the current tenant.
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
     * Queries the real-time credit consumption, limit, and remaining balance of the current logged-on user.
     *
     * @remarks
     * ## Request description
     * - This API is used to retrieve the credit usage details of the current logged-on user, including the credit limit, consumed credits, and remaining credits.
     * - Data is sourced from a real-time Redis cache, ensuring information immediacy.
     * - You can specify a tenant ID to query the credit usage of a user under a specific tenant. By default, the caller\\"s default tenant is used.
     * - You can optionally provide a `RequestId` as a request identifier, but this is not required.
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
     * Queries the real-time credit consumption, limit, and remaining balance of the current logged-on user.
     *
     * @remarks
     * ## Request description
     * - This API is used to retrieve the credit usage details of the current logged-on user, including the credit limit, consumed credits, and remaining credits.
     * - Data is sourced from a real-time Redis cache, ensuring information immediacy.
     * - You can specify a tenant ID to query the credit usage of a user under a specific tenant. By default, the caller\\"s default tenant is used.
     * - You can optionally provide a `RequestId` as a request identifier, but this is not required.
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
     * Retrieves the complete information of the authenticated user through OpenAPI, including basic information and tenant list.
     *
     * @remarks
     * ## Request description
     * - This operation returns the detailed information of the current authenticated user.
     * - If the tenant information is invalid, the corresponding error message is returned.
     * - `tenantId` is an optional parameter. If not provided, the default tenant ID of the caller is used.
     * - Multiple authentication methods are supported: AK, BearerToken, and APP authentication.
     * - The returned data includes the user profile (such as username and profile picture URL), role preference settings, and details of all tenants to which the user belongs.
     * - If the current logon tenant is the system tenant (that is, `tenantId=10000`), this is explicitly indicated in the response.
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
     * Retrieves the complete information of the authenticated user through OpenAPI, including basic information and tenant list.
     *
     * @remarks
     * ## Request description
     * - This operation returns the detailed information of the current authenticated user.
     * - If the tenant information is invalid, the corresponding error message is returned.
     * - `tenantId` is an optional parameter. If not provided, the default tenant ID of the caller is used.
     * - Multiple authentication methods are supported: AK, BearerToken, and APP authentication.
     * - The returned data includes the user profile (such as username and profile picture URL), role preference settings, and details of all tenants to which the user belongs.
     * - If the current logon tenant is the system tenant (that is, `tenantId=10000`), this is explicitly indicated in the response.
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
     * Grants authorization to authorized users or user groups to use a digital human.
     *
     * @remarks
     * Grants authorization to authorized users or user groups to use a specified digital human.
     *     Business logic:
     *     1. Constructs an AuthContext from identity.
     *     2. Performs mutual exclusion validation on the request body: specify either userIds or userGroupIds.
     *     3. Delegates to AgentAuthorizationAuthorizedService.grant_authorization to execute.
     *     4. Pre-validation: verifies MANAGE permission and agent existence (performed at the AuthorizedService layer, which performs authentication first before it exposes existence).
     *     5. Existing authorization records are updated (expire_date / permissions).
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
     * Grants authorization to authorized users or user groups to use a digital human.
     *
     * @remarks
     * Grants authorization to authorized users or user groups to use a specified digital human.
     *     Business logic:
     *     1. Constructs an AuthContext from identity.
     *     2. Performs mutual exclusion validation on the request body: specify either userIds or userGroupIds.
     *     3. Delegates to AgentAuthorizationAuthorizedService.grant_authorization to execute.
     *     4. Pre-validation: verifies MANAGE permission and agent existence (performed at the AuthorizedService layer, which performs authentication first before it exposes existence).
     *     5. Existing authorization records are updated (expire_date / permissions).
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
     * Queries or drills down into the enterprise knowledge base list of a tenant.
     *
     * @remarks
     * ## Operation description
     * - This API supports two modes: when `directoryId` is empty or set to \\"root\\", the top-level knowledge base list is returned. When `directoryId` has a specific value, a drill-down operation is performed to return subdirectories and resources under the specified directory.
     * - `tenantId` is a common parameter. If not provided, the caller\\"s tenant ID is used by default.
     * - In drill-down mode (when `directoryId` is not empty), use the `sourceTypes` parameter to filter resources by specific types.
     * - The sort field (`sortField`) and sort order (`sortOrder`) can be customized. Invalid values are reset to default settings.
     * - The search feature is only effective when retrieving the top-level list and supports only fuzzy matching on names or descriptions.
     * - For security purposes, `tenant_id` is strictly obtained from the authenticated identity and cannot be passed through the request body.
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
     * Queries or drills down into the enterprise knowledge base list of a tenant.
     *
     * @remarks
     * ## Operation description
     * - This API supports two modes: when `directoryId` is empty or set to \\"root\\", the top-level knowledge base list is returned. When `directoryId` has a specific value, a drill-down operation is performed to return subdirectories and resources under the specified directory.
     * - `tenantId` is a common parameter. If not provided, the caller\\"s tenant ID is used by default.
     * - In drill-down mode (when `directoryId` is not empty), use the `sourceTypes` parameter to filter resources by specific types.
     * - The sort field (`sortField`) and sort order (`sortOrder`) can be customized. Invalid values are reset to default settings.
     * - The search feature is only effective when retrieving the top-level list and supports only fuzzy matching on names or descriptions.
     * - For security purposes, `tenant_id` is strictly obtained from the authenticated identity and cannot be passed through the request body.
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
     * Queries the full list of digital employees for a tenant.
     *
     * @remarks
     * Queries the full list of digital employees under a tenant, including deactivated ones.
     *     Business logic:
     *     1. Constructs AuthContext from identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.list_agents to complete permission verification (APPLICATION_AGENT_VIEW).
     *     3. Returns rich fields for all digital employees of the tenant (operatingObjectName / displayName / authMode / isActive).
     *     4. System-level tokens are automatically allowed through ctx.skip_permission.
     *     Difference from listAuthorizedAgents: This operation returns all digital employees of the tenant (including deactivated ones, without authorization filtering) and includes rich fields such as displayName and isActive for management console display.
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
     * Queries the full list of digital employees for a tenant.
     *
     * @remarks
     * Queries the full list of digital employees under a tenant, including deactivated ones.
     *     Business logic:
     *     1. Constructs AuthContext from identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.list_agents to complete permission verification (APPLICATION_AGENT_VIEW).
     *     3. Returns rich fields for all digital employees of the tenant (operatingObjectName / displayName / authMode / isActive).
     *     4. System-level tokens are automatically allowed through ctx.skip_permission.
     *     Difference from listAuthorizedAgents: This operation returns all digital employees of the tenant (including deactivated ones, without authorization filtering) and includes rich fields such as displayName and isActive for management console display.
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
     * Queries the list of digital human names for which the caller has specified permissions.
     *
     * @remarks
     * Queries the list of digital human names for which the current caller (or a specified target user) has specified permissions (USE/MANAGE).
     *     Business logic:
     *     1. Constructs an AuthContext from the identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.list_authorized_agents to execute the query.
     *     3. When skip_permission=True, returns all active agents for the tenant.
     *     4. Regular users are filtered based on authorization records and auth_mode.
     *     5. When targetUserId is specified (querying on behalf of another user), the APPLICATION_AGENT_VIEW gate is required, and the query is restricted to the current tenant. If the target user is not a member of the current tenant, a USER_NOT_IN_TENANT error is thrown (an empty list is not silently returned).
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
     * Queries the list of digital human names for which the caller has specified permissions.
     *
     * @remarks
     * Queries the list of digital human names for which the current caller (or a specified target user) has specified permissions (USE/MANAGE).
     *     Business logic:
     *     1. Constructs an AuthContext from the identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.list_authorized_agents to execute the query.
     *     3. When skip_permission=True, returns all active agents for the tenant.
     *     4. Regular users are filtered based on authorization records and auth_mode.
     *     5. When targetUserId is specified (querying on behalf of another user), the APPLICATION_AGENT_VIEW gate is required, and the query is restricted to the current tenant. If the target user is not a member of the current tenant, a USER_NOT_IN_TENANT error is thrown (an empty list is not silently returned).
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
     * Queries the list of authorized users or user groups for a digital employee.
     *
     * @remarks
     * Queries the list of authorized users or user groups for a specified digital employee.
     *     Business logic:
     *     1. Constructs an AuthContext from the identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.list_authorized_users to execute the query.
     *     3. Permission verification is performed at the AuthorizedService layer by @require_permission(APPLICATION_AGENT_VIEW).
     *     4. When auth_mode=ALL_USERS, only records with MANAGE permissions are displayed.
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
     * Queries the list of authorized users or user groups for a digital employee.
     *
     * @remarks
     * Queries the list of authorized users or user groups for a specified digital employee.
     *     Business logic:
     *     1. Constructs an AuthContext from the identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.list_authorized_users to execute the query.
     *     3. Permission verification is performed at the AuthorizedService layer by @require_permission(APPLICATION_AGENT_VIEW).
     *     4. When auth_mode=ALL_USERS, only records with MANAGE permissions are displayed.
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
     * Enumerates available organization synchronization configurations.
     *
     * @remarks
     * Enumerates all available organization synchronization configurations under the current tenant.
     *     Returns a unified configs list covering four platform types:
     *     - **wecom**: Retrieves active WeCom SSO configurations from SsoProviderRegistry.
     *     - **saml**: Retrieves active SAML SSO configurations from SsoProviderRegistry. The corpId is set to idpEntityId.
     *     - **oauth2**: Retrieves active OAuth2 SSO configurations from SsoProviderRegistry. The corpId is set to clientId.
     *     - **custom**: Queries the database for pure custom organizations registered under the tenant.
     *     The client distinguishes processing logic based on the returned platformType. The corpId is a required parameter for subsequent synchronization operations.
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
     * Enumerates available organization synchronization configurations.
     *
     * @remarks
     * Enumerates all available organization synchronization configurations under the current tenant.
     *     Returns a unified configs list covering four platform types:
     *     - **wecom**: Retrieves active WeCom SSO configurations from SsoProviderRegistry.
     *     - **saml**: Retrieves active SAML SSO configurations from SsoProviderRegistry. The corpId is set to idpEntityId.
     *     - **oauth2**: Retrieves active OAuth2 SSO configurations from SsoProviderRegistry. The corpId is set to clientId.
     *     - **custom**: Queries the database for pure custom organizations registered under the tenant.
     *     The client distinguishes processing logic based on the returned platformType. The corpId is a required parameter for subsequent synchronization operations.
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
     * Queries and filters the bill list through OpenAPI with support for multiple filter conditions.
     *
     * @remarks
     * ## Operation description
     * - This operation queries the bill list based on specified conditions.
     * - Supports filtering by tenant, user, operation type, status, time range, business source, and other conditions.
     * - Returns bill data in pages. The default page size is 20 records.
     * - You can choose whether to filter out bills with zero credit consumption. By default, such bills are filtered out.
     * - Authentication information (such as AK, BearerToken, or APP authentication) is required in the request.
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
     * Queries and filters the bill list through OpenAPI with support for multiple filter conditions.
     *
     * @remarks
     * ## Operation description
     * - This operation queries the bill list based on specified conditions.
     * - Supports filtering by tenant, user, operation type, status, time range, business source, and other conditions.
     * - Returns bill data in pages. The default page size is 20 records.
     * - You can choose whether to filter out bills with zero credit consumption. By default, such bills are filtered out.
     * - Authentication information (such as AK, BearerToken, or APP authentication) is required in the request.
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
     * Lists chat sessions of the current user in reverse chronological order by creation time.
     *
     * @remarks
     * ## Operation description
     * - This API supports filtering and sorting by multiple parameters, including tenant ID, page size, pagination token, keyword search, digital employee name, and update time range.
     * - By default, results are sorted in descending order by the `UpdatedAt` field.
     * - If an invalid `NextToken` is provided or `PageSize` exceeds the allowed range (1-100), the API returns a 400 error.
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
     * Lists chat sessions of the current user in reverse chronological order by creation time.
     *
     * @remarks
     * ## Operation description
     * - This API supports filtering and sorting by multiple parameters, including tenant ID, page size, pagination token, keyword search, digital employee name, and update time range.
     * - By default, results are sorted in descending order by the `UpdatedAt` field.
     * - If an invalid `NextToken` is provided or `PageSize` exceeds the allowed range (1-100), the API returns a 400 error.
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
     * Queries the list of knowledge graphs available for semantic queries under a tenant.
     *
     * @remarks
     * Lists published knowledge graphs under an identity tenant.
     *     CLI mapping: ``winnexo graph list``. ``tenantId`` is a required common parameter and is not included in the request body.
     *     The returned ``graphName`` can be used directly in ``querySemanticKnowledge``. This query is consistent with the existing frontend knowledge graph list and does not apply digital worker permission filtering. Specific semantic queries still verify agent USE permissions.
     *     Database exceptions go directly into unified 5xx error handling and are not disguised as a successful empty list.
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
     * Queries the list of knowledge graphs available for semantic queries under a tenant.
     *
     * @remarks
     * Lists published knowledge graphs under an identity tenant.
     *     CLI mapping: ``winnexo graph list``. ``tenantId`` is a required common parameter and is not included in the request body.
     *     The returned ``graphName`` can be used directly in ``querySemanticKnowledge``. This query is consistent with the existing frontend knowledge graph list and does not apply digital worker permission filtering. Specific semantic queries still verify agent USE permissions.
     *     Database exceptions go directly into unified 5xx error handling and are not disguised as a successful empty list.
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
     * Queries the category directory tree of an enterprise knowledge base, with support for sorting by a specified field.
     *
     * @remarks
     * ## Request description
     * - This API retrieves the category list (subdirectory tree) of an enterprise knowledge base. You must have the knowledge base view permission.
     * - If the `directoryId` parameter is not provided, the API returns all category trees under the root directory of the enterprise knowledge base. If `directoryId` is provided, the API returns the subdirectory tree rooted at the specified directory.
     * - You can sort results by using the `sortField` and `sortOrder` parameters. By default, results are sorted by creation time in descending order.
     * - Security constraints: `tenant_id` and `user_id` are derived only from the authenticated identity, and the caller must have the `DEVELOPMENT_KB_VIEW` feature permission.
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
     * Queries the category directory tree of an enterprise knowledge base, with support for sorting by a specified field.
     *
     * @remarks
     * ## Request description
     * - This API retrieves the category list (subdirectory tree) of an enterprise knowledge base. You must have the knowledge base view permission.
     * - If the `directoryId` parameter is not provided, the API returns all category trees under the root directory of the enterprise knowledge base. If `directoryId` is provided, the API returns the subdirectory tree rooted at the specified directory.
     * - You can sort results by using the `sortField` and `sortOrder` parameters. By default, results are sorted by creation time in descending order.
     * - Security constraints: `tenant_id` and `user_id` are derived only from the authenticated identity, and the caller must have the `DEVELOPMENT_KB_VIEW` feature permission.
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
     * Queries the output list of the current user with support for conditional filtering and pagination.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries the output list of the current logon user.
     * - `tenantId` is a common parameter. If this parameter is not specified, the default tenant of the caller is used.
     * - You can filter results by using parameters such as `operatingObjectName`, `itemType`, and `keyword`.
     * - Set `sharedOnly` to `true` to display only shared outputs.
     * - Pagination is controlled by `page` (page number) and `pageSize` (number of entries per page). By default, the first page is returned with 20 records per page.
     * - Results are sorted by update time in descending order by default.
     * - The `tenant_id` or `user_id` values passed in the request body are ignored. This information is obtained only from the authenticated identity.
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
     * Queries the output list of the current user with support for conditional filtering and pagination.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries the output list of the current logon user.
     * - `tenantId` is a common parameter. If this parameter is not specified, the default tenant of the caller is used.
     * - You can filter results by using parameters such as `operatingObjectName`, `itemType`, and `keyword`.
     * - Set `sharedOnly` to `true` to display only shared outputs.
     * - Pagination is controlled by `page` (page number) and `pageSize` (number of entries per page). By default, the first page is returned with 20 records per page.
     * - Results are sorted by update time in descending order by default.
     * - The `tenant_id` or `user_id` values passed in the request body are ignored. This information is obtained only from the authenticated identity.
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
     * Queries subdirectories and resources under a specified digital employee resource directory.
     *
     * @remarks
     * ## Operation description
     * - This API is used to drill down and query subdirectories and resources under the "My Resources" directory.
     * - When `directoryId` is set to \\"root\\", the service automatically resolves and returns the content under the current digital employee\\"s default root directory. If a specific directory ID is provided, the subdirectories and resources under that directory are returned.
     * - Security constraint: `tenant_id` and `user_id` can only come from the authenticated identity information. These fields provided by the caller in the request body are ignored.
     * - You can use the `sourceTypes` parameter to filter resources of specific types. When this parameter has a value, only resources that match the type condition are returned, and subdirectories are not included.
     * - Sorting supports ascending or descending order by name (`name`), creation time (`gmt_create`), or modification time (`gmt_modified`).
     * - The pagination feature allows you to customize the number of items displayed per page (maximum 100) and the current page number.
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
     * Queries subdirectories and resources under a specified digital employee resource directory.
     *
     * @remarks
     * ## Operation description
     * - This API is used to drill down and query subdirectories and resources under the "My Resources" directory.
     * - When `directoryId` is set to \\"root\\", the service automatically resolves and returns the content under the current digital employee\\"s default root directory. If a specific directory ID is provided, the subdirectories and resources under that directory are returned.
     * - Security constraint: `tenant_id` and `user_id` can only come from the authenticated identity information. These fields provided by the caller in the request body are ignored.
     * - You can use the `sourceTypes` parameter to filter resources of specific types. When this parameter has a value, only resources that match the type condition are returned, and subdirectories are not included.
     * - Sorting supports ascending or descending order by name (`name`), creation time (`gmt_create`), or modification time (`gmt_modified`).
     * - The pagination feature allows you to customize the number of items displayed per page (maximum 100) and the current page number.
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
     * Queries the list of system built-in roles.
     *
     * @remarks
     * Queries the list of system built-in roles.
     *     Business logic:
     *     1. Constructs AuthContext from identity.
     *     2. Delegates to UserManagementAuthorizedService.list_system_roles for permission verification (PLATFORM_USER_VIEW).
     *     3. Renders role names and descriptions based on the request Accept-Language header.
     *     4. Returns a fixed set of 7 system built-in roles.
     *     The returned roleCode field can be directly used as the roleCodes parameter for createUser or updateUser.
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
     * Queries the list of system built-in roles.
     *
     * @remarks
     * Queries the list of system built-in roles.
     *     Business logic:
     *     1. Constructs AuthContext from identity.
     *     2. Delegates to UserManagementAuthorizedService.list_system_roles for permission verification (PLATFORM_USER_VIEW).
     *     3. Renders role names and descriptions based on the request Accept-Language header.
     *     4. Returns a fixed set of 7 system built-in roles.
     *     The returned roleCode field can be directly used as the roleCodes parameter for createUser or updateUser.
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
     * Retrieves a list of scheduled tasks.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to an enterprise knowledge base.
     * - The `DEVELOPMENT_KB_MANAGE` permission is required to call this API.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Make sure your account balance is sufficient.
     *
     * @param tmpReq - ListScheduledTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledTasksResponse
     *
     * @param ListScheduledTasksRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListScheduledTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->visibilities) {
            $request->visibilitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->visibilities, 'visibilities', 'json');
        }

        $query = [];
        if (null !== $request->collaborationGroupId) {
            @$query['collaborationGroupId'] = $request->collaborationGroupId;
        }

        if (null !== $request->creatorOnly) {
            @$query['creatorOnly'] = $request->creatorOnly;
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

        if (null !== $request->visibilitiesShrink) {
            @$query['visibilities'] = $request->visibilitiesShrink;
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
     * Retrieves a list of scheduled tasks.
     *
     * @remarks
     * ## Operation description
     * - This operation uploads a file to an enterprise knowledge base.
     * - The `DEVELOPMENT_KB_MANAGE` permission is required to call this API.
     * - You must provide the OSS persistent address (`filePath`) of the file when uploading.
     * - Optional parameters include the public access URL and original file name to enhance the completeness of file information.
     * - If `directoryId` is specified, the file is placed in the corresponding enterprise knowledge base directory. Otherwise, the file is bound to the default root directory of the current digital employee.
     * - You can add tags to the resource by using `sourceTags` for subsequent management and retrieval.
     * - This operation initiates a billing item (UNSTRUCTURED_PARSE). Make sure your account balance is sufficient.
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
     * Lists the skills visible to the current tenant.
     *
     * @remarks
     * ## Request description
     * This API retrieves all visible skills under the current tenant. It supports filtering by digital employee binding relationship, skill source, tags, keywords, and other conditions, and supports pagination.
     * ### Request parameters
     * - **TenantId**: Optional. A common parameter passed through by the gateway to the backend header. If not specified, the default tenant of the current caller is used.
     * - **FilterType**: Optional. The skill filtering dimension. Valid values: `ALL` (all published), `BUILTIN` (built-in published), `CUSTOM` (custom published), `DRAFT` (drafts, including published skills with unpublished modifications). Default value: `ALL`.
     * - **Tags**: Optional. Filters by tags. A match occurs if any tag in the array is hit.
     * - **Keyword**: Optional. Performs fuzzy matching by skill name or description.
     * - **Page**: Optional. The page number. Minimum value: 1. Default value: 1.
     * - **PageSize**: Optional. The number of entries per page. Value range: 1 to 100. Default value: 20.
     * - **OperatingObjectName**: Optional. The digital employee name. If specified, filters by binding relationship. Must be used together with `BindStatus`.
     * - **BindStatus**: Optional. The binding status. Valid values: `BOUND` (bound), `UNBOUND` (unbound global skills).
     * ### Response parameters
     * The response contains the skill list `items`, total count `total`, current page `page`, and page size `pageSize`.
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
     * Lists the skills visible to the current tenant.
     *
     * @remarks
     * ## Request description
     * This API retrieves all visible skills under the current tenant. It supports filtering by digital employee binding relationship, skill source, tags, keywords, and other conditions, and supports pagination.
     * ### Request parameters
     * - **TenantId**: Optional. A common parameter passed through by the gateway to the backend header. If not specified, the default tenant of the current caller is used.
     * - **FilterType**: Optional. The skill filtering dimension. Valid values: `ALL` (all published), `BUILTIN` (built-in published), `CUSTOM` (custom published), `DRAFT` (drafts, including published skills with unpublished modifications). Default value: `ALL`.
     * - **Tags**: Optional. Filters by tags. A match occurs if any tag in the array is hit.
     * - **Keyword**: Optional. Performs fuzzy matching by skill name or description.
     * - **Page**: Optional. The page number. Minimum value: 1. Default value: 1.
     * - **PageSize**: Optional. The number of entries per page. Value range: 1 to 100. Default value: 20.
     * - **OperatingObjectName**: Optional. The digital employee name. If specified, filters by binding relationship. Must be used together with `BindStatus`.
     * - **BindStatus**: Optional. The binding status. Valid values: `BOUND` (bound), `UNBOUND` (unbound global skills).
     * ### Response parameters
     * The response contains the skill list `items`, total count `total`, current page `page`, and page size `pageSize`.
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
     * Retrieves the list of knowledge bases.
     *
     * @remarks
     * ## Request description
     * - This API is used to perform a paging query on the folder content and resources in an enterprise knowledge base.
     * - Multiple parameters are supported for filtering and sorting, such as `directoryId`, `page`, `pageSize`, `sortField`, `sortOrder`, and others.
     * - The `sourceTypes` parameter allows you to filter by resource type. Separate multiple types with commas.
     * - When `directoryId` is not specified or set to `root`, the root folder list of the knowledge base is queried by default.
     * - The default sort field is `name`, and the default sort order is ascending (`asc`).
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
     * Retrieves the list of knowledge bases.
     *
     * @remarks
     * ## Request description
     * - This API is used to perform a paging query on the folder content and resources in an enterprise knowledge base.
     * - Multiple parameters are supported for filtering and sorting, such as `directoryId`, `page`, `pageSize`, `sortField`, `sortOrder`, and others.
     * - The `sourceTypes` parameter allows you to filter by resource type. Separate multiple types with commas.
     * - When `directoryId` is not specified or set to `root`, the root folder list of the knowledge base is queried by default.
     * - The default sort field is `name`, and the default sort order is ascending (`asc`).
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
     * Queries the knowledge base directory content visible to the current OpenAPI user.
     *
     * @remarks
     * ## Operation description
     * - This operation returns subdirectories and READY resources under the specified directory based on the enterprise knowledge base frontend scope.
     * - The user identity and directory visibility scope are derived from the OpenAPI authentication context.
     * - When `sourceTypes` has a value, only resources are returned. `keyword` searches only the current directory level.
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
     * Queries the knowledge base directory content visible to the current OpenAPI user.
     *
     * @remarks
     * ## Operation description
     * - This operation returns subdirectories and READY resources under the specified directory based on the enterprise knowledge base frontend scope.
     * - The user identity and directory visibility scope are derived from the OpenAPI authentication context.
     * - When `sourceTypes` has a value, only resources are returned. `keyword` searches only the current directory level.
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
     * Queries the list of enterprise knowledge bases visible to the current OpenAPI user.
     *
     * @remarks
     * ## Operation description
     * - This operation queries the enterprise knowledge bases visible to the platform user mapped from the OpenAPI authentication identity.
     * - Both the tenant and user identities are determined by the authentication context. Callers cannot expand the visible scope through business parameters.
     * - `tenantId` is an optional common parameter. `keyword` can filter by knowledge base name or description.
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
     * Queries the list of enterprise knowledge bases visible to the current OpenAPI user.
     *
     * @remarks
     * ## Operation description
     * - This operation queries the enterprise knowledge bases visible to the platform user mapped from the OpenAPI authentication identity.
     * - Both the tenant and user identities are determined by the authentication context. Callers cannot expand the visible scope through business parameters.
     * - `tenantId` is an optional common parameter. `keyword` can filter by knowledge base name or description.
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
     * Queries tenant members by paging.
     *
     * @remarks
     * Queries a paged list of tenant members by using OpenAPI.
     *     Business orchestration:
     *     1. Parse filter conditions (roleCodes → role_ids).
     *     2. Call UserTenantMappingRepository.query_paged_tenant_members to perform a paged query.
     *     3. Convert role_id in the results to roleCode and assemble the response.
     *     Error codes:
     *     - An error is thrown when an invalid roleCode parameter is specified.
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
     * Queries tenant members by paging.
     *
     * @remarks
     * Queries a paged list of tenant members by using OpenAPI.
     *     Business orchestration:
     *     1. Parse filter conditions (roleCodes → role_ids).
     *     2. Call UserTenantMappingRepository.query_paged_tenant_members to perform a paged query.
     *     3. Convert role_id in the results to roleCode and assemble the response.
     *     Error codes:
     *     - An error is thrown when an invalid roleCode parameter is specified.
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
     * Drills down to query subdirectories and resources under a specified knowledge base directory visible to a specified digital employee.
     *
     * @remarks
     * ## Operation description
     * - This operation queries all subdirectories and resources under a specified knowledge base directory for a specific digital employee.
     * - The user must have the USE permission on the target digital employee, and the digital employee must have access to the directory and its subdirectories specified in the request.
     * - You must provide the digital employee name (`operatingObjectName`) and the directory ID (`directoryId`) to query. Other parameters such as pagination information and sorting method are optional.
     * - The response includes the list of subdirectories and resources under the directory, and supports pagination.
     * - The `sourceStatus` field filters only resources in the `READY` state.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authenticated identity. Values passed in the request body by the caller are ignored.
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
     * Drills down to query subdirectories and resources under a specified knowledge base directory visible to a specified digital employee.
     *
     * @remarks
     * ## Operation description
     * - This operation queries all subdirectories and resources under a specified knowledge base directory for a specific digital employee.
     * - The user must have the USE permission on the target digital employee, and the digital employee must have access to the directory and its subdirectories specified in the request.
     * - You must provide the digital employee name (`operatingObjectName`) and the directory ID (`directoryId`) to query. Other parameters such as pagination information and sorting method are optional.
     * - The response includes the list of subdirectories and resources under the directory, and supports pagination.
     * - The `sourceStatus` field filters only resources in the `READY` state.
     * - For security purposes, `tenant_id` and `user_id` are obtained only from the authenticated identity. Values passed in the request body by the caller are ignored.
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
     * Queries the top-level directories of enterprise knowledge bases accessible to a digital employee.
     *
     * @remarks
     * ## Request description
     * - This API operation retrieves the list of top-level knowledge base directories visible to a specified digital employee (operating object) within the enterprise.
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
     * Queries the top-level directories of enterprise knowledge bases accessible to a digital employee.
     *
     * @remarks
     * ## Request description
     * - This API operation retrieves the list of top-level knowledge base directories visible to a specified digital employee (operating object) within the enterprise.
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
     * Moves a specified resource between enterprise knowledge base directories. Management permissions are required.
     *
     * @remarks
     * ## Operation description
     * - **Authentication flow**:
     *   1. Basic authentication is performed by the root router (`request.state.openapi_identity`).
     *   2. This handler checks the `DEVELOPMENT_KB_MANAGE` feature permission.
     * - **Procedure**:
     *   1. Check that the source directory and target directory are not the same.
     *   2. Confirm that the target directory exists.
     *   3. Verify that the resource to be moved is in the source directory.
     *   4. Update the directory binding of the resource.
     *   5. Best-effort update of `source.settings["knowledge_id"]` to the target knowledge base ID.
     *   6. Best-effort notification to DocumentAgent to sync `knowledge_id` and `update_time`.
     * - **Security constraints**:
     *   - `tenant_id` and `user_id` must come from the authenticated identity.
     *   - The caller must have KB management permissions.
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
     * Moves a specified resource between enterprise knowledge base directories. Management permissions are required.
     *
     * @remarks
     * ## Operation description
     * - **Authentication flow**:
     *   1. Basic authentication is performed by the root router (`request.state.openapi_identity`).
     *   2. This handler checks the `DEVELOPMENT_KB_MANAGE` feature permission.
     * - **Procedure**:
     *   1. Check that the source directory and target directory are not the same.
     *   2. Confirm that the target directory exists.
     *   3. Verify that the resource to be moved is in the source directory.
     *   4. Update the directory binding of the resource.
     *   5. Best-effort update of `source.settings["knowledge_id"]` to the target knowledge base ID.
     *   6. Best-effort notification to DocumentAgent to sync `knowledge_id` and `update_time`.
     * - **Security constraints**:
     *   - `tenant_id` and `user_id` must come from the authenticated identity.
     *   - The caller must have KB management permissions.
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
     * Moves a specified resource between personal directories of a user.
     *
     * @remarks
     * ## Request description
     * - **The source directory and target directory cannot be the same**. Otherwise, the `ERR.Robject.UserDirectory.InvalidOperation` error is returned.
     * - **The target directory must exist**. If it does not exist, the `ERR.Robject.UserDirectory.DirectoryNotFound` error is returned.
     * - **The resource to be moved must exist in the source directory**. If it is not in the source directory, the `ERR.Robject.UserDirectory.ResourceNotInDirectory` error is returned.
     * - After a successful move, the system attempts to notify DocumentAgent to update the new path (`source_path`) of the resource. This step is best-effort. Even if it fails, the overall operation success status is not affected. Only an error log is recorded.
     * - For security purposes, the value of `tenant_id` can only be derived from the authenticated identity information.
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
     * Moves a specified resource between personal directories of a user.
     *
     * @remarks
     * ## Request description
     * - **The source directory and target directory cannot be the same**. Otherwise, the `ERR.Robject.UserDirectory.InvalidOperation` error is returned.
     * - **The target directory must exist**. If it does not exist, the `ERR.Robject.UserDirectory.DirectoryNotFound` error is returned.
     * - **The resource to be moved must exist in the source directory**. If it is not in the source directory, the `ERR.Robject.UserDirectory.ResourceNotInDirectory` error is returned.
     * - After a successful move, the system attempts to notify DocumentAgent to update the new path (`source_path`) of the resource. This step is best-effort. Even if it fails, the overall operation success status is not affected. Only an error log is recorded.
     * - For security purposes, the value of `tenant_id` can only be derived from the authenticated identity information.
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
     * Previews the knowledge content in a specified enterprise knowledge base.
     *
     * @remarks
     * ## Operation description
     * - This operation previews the content of a specified knowledge entry in an enterprise knowledge base.
     * - The `DEVELOPMENT_KB_VIEW` permission is required to call this API.
     * - `sourceId` is a required parameter that identifies the knowledge entry to preview.
     * - The optional parameter `tenantId` specifies the tenant ID. If not provided, the default tenant ID of the caller is used.
     * - Multiple preview types are supported, including but not limited to images, audio, video, and text.
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
     * Previews the knowledge content in a specified enterprise knowledge base.
     *
     * @remarks
     * ## Operation description
     * - This operation previews the content of a specified knowledge entry in an enterprise knowledge base.
     * - The `DEVELOPMENT_KB_VIEW` permission is required to call this API.
     * - `sourceId` is a required parameter that identifies the knowledge entry to preview.
     * - The optional parameter `tenantId` specifies the tenant ID. If not provided, the default tenant ID of the caller is used.
     * - Multiple preview types are supported, including but not limited to images, audio, video, and text.
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
     * Allows a user to preview specified knowledge content in their personal directory.
     *
     * @remarks
     * ## Request description
     * - This operation only allows a user to preview resources in their own personal directory.
     * - The authentication process includes basic authentication and data source ownership verification to ensure that the requester can only access knowledge in their personal directory.
     * - You must provide the unique identifier `sourceId` of the knowledge content in the request. The system queries and returns the corresponding preview information based on this ID and the user\\"s tenant information.
     * - Multiple preview types are supported, such as image, audio, and video. The system returns the corresponding preview URL or direct content display based on the type.
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
     * Allows a user to preview specified knowledge content in their personal directory.
     *
     * @remarks
     * ## Request description
     * - This operation only allows a user to preview resources in their own personal directory.
     * - The authentication process includes basic authentication and data source ownership verification to ensure that the requester can only access knowledge in their personal directory.
     * - You must provide the unique identifier `sourceId` of the knowledge content in the request. The system queries and returns the corresponding preview information based on this ID and the user\\"s tenant information.
     * - Multiple preview types are supported, such as image, audio, and video. The system returns the corresponding preview URL or direct content display based on the type.
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
     * Queries primary object data by operating object name with paging support, including filtering and search.
     *
     * @remarks
     * ## Operation description
     * - This API queries primary object data by a specified operating object name (such as `customer_1`) with paging.
     * - Keyword-based search is supported. You can set whether to return only objects marked as favorites in Settings.
     * - Complex filter conditions can be used to further narrow results, including but not limited to equal to, not equal to, greater than, and less than operators.
     * - If no primary object type is configured, an empty result set is returned.
     * - Data in the request undergoes authentication and filtering to ensure security and accuracy.
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
     * Queries primary object data by operating object name with paging support, including filtering and search.
     *
     * @remarks
     * ## Operation description
     * - This API queries primary object data by a specified operating object name (such as `customer_1`) with paging.
     * - Keyword-based search is supported. You can set whether to return only objects marked as favorites in Settings.
     * - Complex filter conditions can be used to further narrow results, including but not limited to equal to, not equal to, greater than, and less than operators.
     * - If no primary object type is configured, an empty result set is returned.
     * - Data in the request undergoes authentication and filtering to ensure security and accuracy.
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
     * Queries semantic knowledge related to a user question.
     *
     * @remarks
     * Exposes only the schema_knowledge semantic recall capability of smart-query.
     *     CLI mapping: ``winnexo semantic query``. ``tenantId`` is passed through common parameters. ``userId``
     *     is read only from the Token identity and cannot be overridden by the request body. The service validates
     *     the ownership of ``graphName + agentName``, active graph status, digital human enablement status, and
     *     the current user\\"s USE permission. A cross-graph agent with the same name will fail and be closed.
     *     Then ``outputs=[schema_knowledge]`` is fixed.
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
     * Queries semantic knowledge related to a user question.
     *
     * @remarks
     * Exposes only the schema_knowledge semantic recall capability of smart-query.
     *     CLI mapping: ``winnexo semantic query``. ``tenantId`` is passed through common parameters. ``userId``
     *     is read only from the Token identity and cannot be overridden by the request body. The service validates
     *     the ownership of ``graphName + agentName``, active graph status, digital human enablement status, and
     *     the current user\\"s USE permission. A cross-graph agent with the same name will fail and be closed.
     *     Then ``outputs=[schema_knowledge]`` is fixed.
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
     * Queries the result of an organization synchronization task.
     *
     * @remarks
     * Queries the execution status and result of an organization synchronization task based on the task ID.
     *     Task status transitions: PENDING → RUNNING → COMPLETED / FAILED / TIMEOUT / CANCELED
     *     Recommended client polling interval: 3 to 5 seconds.
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
     * Queries the result of an organization synchronization task.
     *
     * @remarks
     * Queries the execution status and result of an organization synchronization task based on the task ID.
     *     Task status transitions: PENDING → RUNNING → COMPLETED / FAILED / TIMEOUT / CANCELED
     *     Recommended client polling interval: 3 to 5 seconds.
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
     * Generates next-step recommendations for a session.
     *
     * @remarks
     * ## Request description
     * Based on the most recent N messages in a session and the skills attached to the agent, this operation invokes an LLM to generate 0 to 3 next-step recommendations (follow-up questions or recommended skills to execute).
     * - `sessionId`: The session ID. Required. Only sessions that the currently authenticated user has permission to access are allowed.
     * - `recentMessageCount`: The number of recent messages used to assemble contextual information. Valid values: 1 to 30. Default value: 10 (approximately 5 rounds of user+assistant conversation).
     * - `customPrompt`: A custom recommendation instruction (up to 10,000 characters). This is injected into the default recommendation template as a custom instruction (before the output format constraints). The output is still subject to the JSON format and type constraints of the template.
     * - `outputType`: The output type filter. followUpOnly = follow-up recommendations only (default). skillOnly = skill recommendations only. both = generate both types.
     * Unlike internal endpoints, API calls are not restricted by the next-step recommendation toggle in user personal settings and always execute recommendation generation.
     *
     * @param Request - RecommendNextActionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecommendNextActionsResponse
     *
     * @param RecommendNextActionsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RecommendNextActionsResponse
     */
    public function recommendNextActionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->customPrompt) {
            @$body['customPrompt'] = $request->customPrompt;
        }

        if (null !== $request->outputType) {
            @$body['outputType'] = $request->outputType;
        }

        if (null !== $request->recentMessageCount) {
            @$body['recentMessageCount'] = $request->recentMessageCount;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecommendNextActions',
            'version' => '2026-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/recommendNextActions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecommendNextActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates next-step recommendations for a session.
     *
     * @remarks
     * ## Request description
     * Based on the most recent N messages in a session and the skills attached to the agent, this operation invokes an LLM to generate 0 to 3 next-step recommendations (follow-up questions or recommended skills to execute).
     * - `sessionId`: The session ID. Required. Only sessions that the currently authenticated user has permission to access are allowed.
     * - `recentMessageCount`: The number of recent messages used to assemble contextual information. Valid values: 1 to 30. Default value: 10 (approximately 5 rounds of user+assistant conversation).
     * - `customPrompt`: A custom recommendation instruction (up to 10,000 characters). This is injected into the default recommendation template as a custom instruction (before the output format constraints). The output is still subject to the JSON format and type constraints of the template.
     * - `outputType`: The output type filter. followUpOnly = follow-up recommendations only (default). skillOnly = skill recommendations only. both = generate both types.
     * Unlike internal endpoints, API calls are not restricted by the next-step recommendation toggle in user personal settings and always execute recommendation generation.
     *
     * @param Request - RecommendNextActionsRequest
     *
     * @returns RecommendNextActionsResponse
     *
     * @param RecommendNextActionsRequest $request
     *
     * @return RecommendNextActionsResponse
     */
    public function recommendNextActions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recommendNextActionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes a user from a tenant.
     *
     * @remarks
     * Removes a user from a tenant.
     *     Business orchestration:
     *     1. Obtains tenant_id from identity.
     *     2. Calls delete_user_from_tenant (includes last admin protection).
     *     3. Returns success.
     *     This operation:
     *     - Removes all role associations of the user under the tenant.
     *     - Removes all user group associations of the user under the tenant.
     *     - Revokes all digital employee usage authorizations of the user under the tenant.
     *     - Deletes the user-tenant mapping.
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
     * Removes a user from a tenant.
     *
     * @remarks
     * Removes a user from a tenant.
     *     Business orchestration:
     *     1. Obtains tenant_id from identity.
     *     2. Calls delete_user_from_tenant (includes last admin protection).
     *     3. Returns success.
     *     This operation:
     *     - Removes all role associations of the user under the tenant.
     *     - Removes all user group associations of the user under the tenant.
     *     - Revokes all digital employee usage authorizations of the user under the tenant.
     *     - Deletes the user-tenant mapping.
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
     * Renames a data source in a specified enterprise knowledge base.
     *
     * @remarks
     * ## Request description
     * - This operation allows users with the required permissions to modify the name of a specific data source in an enterprise knowledge base.
     * - You must provide the ID of the data source to be renamed (sourceId) and the new name (newName).
     * - The rename operation only updates the name field of the data source and does not trigger other processing flows.
     * - After successful execution, the system publishes a `SOURCE_CHANGED` event for frontend display refresh and attempts to notify DocumentAgent to synchronize the latest source_name information. However, if this step fails, it does not affect the completion status of the main flow.
     * - If the specified sourceId does not exist, the error code `ERR.Robject.Source.NotFound` is returned.
     * - To invoke this API, you must have the `DEVELOPMENT_KB_MANAGE` feature permission.
     * - Identity verification is supported through AccessKey, BearerToken, or APP methods to authenticate requests.
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
     * Renames a data source in a specified enterprise knowledge base.
     *
     * @remarks
     * ## Request description
     * - This operation allows users with the required permissions to modify the name of a specific data source in an enterprise knowledge base.
     * - You must provide the ID of the data source to be renamed (sourceId) and the new name (newName).
     * - The rename operation only updates the name field of the data source and does not trigger other processing flows.
     * - After successful execution, the system publishes a `SOURCE_CHANGED` event for frontend display refresh and attempts to notify DocumentAgent to synchronize the latest source_name information. However, if this step fails, it does not affect the completion status of the main flow.
     * - If the specified sourceId does not exist, the error code `ERR.Robject.Source.NotFound` is returned.
     * - To invoke this API, you must have the `DEVELOPMENT_KB_MANAGE` feature permission.
     * - Identity verification is supported through AccessKey, BearerToken, or APP methods to authenticate requests.
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
     * Renames a specified data source. This is a lightweight operation.
     *
     * @remarks
     * ## Operation description
     * - This API updates only the `name` field of the data source and does not trigger `process_source`.
     * - After a successful update, a `SOURCE_CHANGED` event is published for the frontend to refresh the display.
     * - The system makes a best-effort attempt to notify DocumentAgent to sync the new `source_name`. Even if the sync fails, the main process is not blocked.
     * - If the specified data source does not exist, the `ERR.Robject.Source.NotFound` error is returned. The global middleware converts this error into a POP error code.
     * - Security constraint: `tenant_id` and `user_id` must be derived from the authenticated identity.
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
     * Renames a specified data source. This is a lightweight operation.
     *
     * @remarks
     * ## Operation description
     * - This API updates only the `name` field of the data source and does not trigger `process_source`.
     * - After a successful update, a `SOURCE_CHANGED` event is published for the frontend to refresh the display.
     * - The system makes a best-effort attempt to notify DocumentAgent to sync the new `source_name`. Even if the sync fails, the main process is not blocked.
     * - If the specified data source does not exist, the `ERR.Robject.Source.NotFound` error is returned. The global middleware converts this error into a POP error code.
     * - Security constraint: `tenant_id` and `user_id` must be derived from the authenticated identity.
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
     * Re-parses a resource.
     *
     * @remarks
     * ## Operation description
     * This API operation re-parses a specified data source. You can choose synchronous or asynchronous execution. You must provide the data source ID in the request. You can optionally specify whether to synchronously wait for parsing to complete. By default, the request is processed asynchronously by being added to a queue. You can also use the `tenantId` parameter to specify a tenant ID, but this parameter is optional.
     * - **forceSync**: If set to `true`, the operation synchronously waits for the re-parsing to complete. Default value: `false`, which indicates that the request is processed asynchronously.
     * - When the service returns `None`, it is converted to a `SourceNotFound` exception. Other exceptions are handled by the OpenAPI global exception chain.
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
     * Re-parses a resource.
     *
     * @remarks
     * ## Operation description
     * This API operation re-parses a specified data source. You can choose synchronous or asynchronous execution. You must provide the data source ID in the request. You can optionally specify whether to synchronously wait for parsing to complete. By default, the request is processed asynchronously by being added to a queue. You can also use the `tenantId` parameter to specify a tenant ID, but this parameter is optional.
     * - **forceSync**: If set to `true`, the operation synchronously waits for the re-parsing to complete. Default value: `false`, which indicates that the request is processed asynchronously.
     * - When the service returns `None`, it is converted to a `SourceNotFound` exception. Other exceptions are handled by the OpenAPI global exception chain.
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
     * Replaces a FILE resource in a specified enterprise knowledge base and triggers re-parsing.
     *
     * @remarks
     * ## Request description
     * This API allows you to update a specific FILE-type data source in a self-built enterprise knowledge base and trigger the system to re-parse the data source by providing a new file path and public access URL. Operations can be performed in synchronous or asynchronous mode. In synchronous mode, the client waits until the parsing process is complete.
     * - The **forceSync** parameter controls whether the request is processed synchronously. The default value is `false`, which indicates asynchronous processing.
     * - If **fileName** is not provided or its value is empty, the newly uploaded file retains the original file name.
     * - Ensure that the provided **filePath** and **filePublicUrl** are valid and point to the same file entity.
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
     * Replaces a FILE resource in a specified enterprise knowledge base and triggers re-parsing.
     *
     * @remarks
     * ## Request description
     * This API allows you to update a specific FILE-type data source in a self-built enterprise knowledge base and trigger the system to re-parse the data source by providing a new file path and public access URL. Operations can be performed in synchronous or asynchronous mode. In synchronous mode, the client waits until the parsing process is complete.
     * - The **forceSync** parameter controls whether the request is processed synchronously. The default value is `false`, which indicates asynchronous processing.
     * - If **fileName** is not provided or its value is empty, the newly uploaded file retains the original file name.
     * - Ensure that the provided **filePath** and **filePublicUrl** are valid and point to the same file entity.
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
     * Replaces all object binding information under a specified data source.
     *
     * @remarks
     * ## Operation description
     * This API performs a full replacement of object bindings for a specified data source (deletes existing bindings first, then inserts new bindings). If an empty list is passed, all bindings are cleared.
     * - **Security constraints**: `tenant_id` and `user_id` must come from the authenticated identity.
     * - **Error handling**: If the specified data source does not exist, an `ERR.Robject.InvalidParameter` error is thrown and converted to a POP error code by the global middleware.
     * - **Synchronous notification**: After a successful replacement, the system makes a best-effort synchronous notification to DocumentAgent to update `semantics.object_bindings`. However, failures are only logged and do not block the main process.
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
     * Replaces all object binding information under a specified data source.
     *
     * @remarks
     * ## Operation description
     * This API performs a full replacement of object bindings for a specified data source (deletes existing bindings first, then inserts new bindings). If an empty list is passed, all bindings are cleared.
     * - **Security constraints**: `tenant_id` and `user_id` must come from the authenticated identity.
     * - **Error handling**: If the specified data source does not exist, an `ERR.Robject.InvalidParameter` error is thrown and converted to a POP error code by the global middleware.
     * - **Synchronous notification**: After a successful replacement, the system makes a best-effort synchronous notification to DocumentAgent to update `semantics.object_bindings`. However, failures are only logged and do not block the main process.
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
     * Allows a user to replace a personal file resource that they created and triggers the system to re-parse the file.
     *
     * @remarks
     * ## Operation description
     * - This API operation replaces a personal FILE resource created by the current platform user and triggers the system to re-parse the file.
     * - The `tenant_id`, operator, and creator constraints are read only from the authenticated identity. Requests without a platform user are rejected to prevent bypassing ownership verification.
     * - If the server returns `None`, it is converted to a `NotFound` exception. Other exceptions are handled by the OpenAPI global exception chain.
     * - This operation supports synchronous or asynchronous waiting for re-parsing to complete. The default behavior is asynchronous queuing (controlled by the `forceSync` parameter).
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
     * Allows a user to replace a personal file resource that they created and triggers the system to re-parse the file.
     *
     * @remarks
     * ## Operation description
     * - This API operation replaces a personal FILE resource created by the current platform user and triggers the system to re-parse the file.
     * - The `tenant_id`, operator, and creator constraints are read only from the authenticated identity. Requests without a platform user are rejected to prevent bypassing ownership verification.
     * - If the server returns `None`, it is converted to a `NotFound` exception. Other exceptions are handled by the OpenAPI global exception chain.
     * - This operation supports synchronous or asynchronous waiting for re-parsing to complete. The default behavior is asynchronous queuing (controlled by the `forceSync` parameter).
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
     * Resets the password of a user.
     *
     * @remarks
     * Resets the password of a user through OpenAPI.
     *     Business orchestration:
     *     1. Call UserManagementService.reset_member_password with password_encrypted (required).
     *        The service internally performs RSA decryption, complexity validation, bcrypt hashing, and writes the result.
     *     2. Returns the reset result.
     *     Error codes:
     *     - ERR.User.NotFound: The user does not exist.
     *     - ERR.User.NotInTenant: The user does not belong to the current tenant.
     *     - ERR.User.WinnexoPasswordRequired: The user does not have password credentials (non-WINNEXO type).
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
     * Resets the password of a user.
     *
     * @remarks
     * Resets the password of a user through OpenAPI.
     *     Business orchestration:
     *     1. Call UserManagementService.reset_member_password with password_encrypted (required).
     *        The service internally performs RSA decryption, complexity validation, bcrypt hashing, and writes the result.
     *     2. Returns the reset result.
     *     Error codes:
     *     - ERR.User.NotFound: The user does not exist.
     *     - ERR.User.NotInTenant: The user does not belong to the current tenant.
     *     - ERR.User.WinnexoPasswordRequired: The user does not have password credentials (non-WINNEXO type).
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
     * Resets an API token.
     *
     * @remarks
     * Resets the token of a user.
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is required).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Calls reset_token:
     *        - Changes the old ACTIVE token to RESET (permanently invalidated).
     *        - Generates a new ACTIVE token.
     *     4. Returns the new token in plaintext and the masked value.
     *     Note: After the reset, the old token is permanently invalidated and cannot be recovered. The new token in plaintext is returned only in this response.
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
     * Resets an API token.
     *
     * @remarks
     * Resets the token of a user.
     *     Business logic:
     *     1. Retrieves user_id from identity (caller_type=user is required).
     *     2. Constructs an AuthContext and delegates permission verification to UserTokenAuthorizedService.
     *     3. Calls reset_token:
     *        - Changes the old ACTIVE token to RESET (permanently invalidated).
     *        - Generates a new ACTIVE token.
     *     4. Returns the new token in plaintext and the masked value.
     *     Note: After the reset, the old token is permanently invalidated and cannot be recovered. The new token in plaintext is returned only in this response.
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
     * Retries all failed data sources in a specified folder and its subfolders in batch.
     *
     * @remarks
     * ## Request description
     * This API retrieves and retries data sources with a FAILED status in the specified personal folder of a user (including all subfolders). The request returns immediately, and the actual retry tasks are executed asynchronously in the background. Only resources that the current logged-in user has access to and that were created by the user can be retried.
     * ### Security and permissions
     * - This operation requires appropriate RAM permissions.
     * - You can only operate on resources within the tenant to which the current user belongs.
     * - Ensure that `tenantId` and `userId` come from verified identity information.
     * ### Precautions
     * - `directoryId` is a required parameter that specifies the target folder in which to check and retry failed data sources.
     * - If `tenantId` is not provided, the tenant ID of the caller is used by default.
     * - The API supports multiple authentication methods, including AccessKey, BearerToken, and APP authentication.
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
     * Retries all failed data sources in a specified folder and its subfolders in batch.
     *
     * @remarks
     * ## Request description
     * This API retrieves and retries data sources with a FAILED status in the specified personal folder of a user (including all subfolders). The request returns immediately, and the actual retry tasks are executed asynchronously in the background. Only resources that the current logged-in user has access to and that were created by the user can be retried.
     * ### Security and permissions
     * - This operation requires appropriate RAM permissions.
     * - You can only operate on resources within the tenant to which the current user belongs.
     * - Ensure that `tenantId` and `userId` come from verified identity information.
     * ### Precautions
     * - `directoryId` is a required parameter that specifies the target folder in which to check and retry failed data sources.
     * - If `tenantId` is not provided, the tenant ID of the caller is used by default.
     * - The API supports multiple authentication methods, including AccessKey, BearerToken, and APP authentication.
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
     * Retries all data sources in failed status under a specified directory in batch.
     *
     * @remarks
     * ## Request description
     * This API retrieves and retries all data sources in FAILED status under a specified enterprise knowledge base directory (including its subdirectories). The request returns immediately, and the actual retry operations are executed asynchronously in the background.
     * - **Authentication**: In addition to basic authentication, the `DEVELOPMENT_KB_MANAGE` permission is required.
     * - **Security constraints**: Only callers with the corresponding tenant and user identity are allowed access, and KB management permission is required. Administrators can initiate retries for failed resources of any user.
     * - **Parameters**:
     *   - `directoryId` (required): The ID of the enterprise knowledge base directory for which to check and retry failed data sources.
     *   - `tenantId` (optional): The tenant ID. The default tenant of the caller is used if this parameter is not specified.
     * - **Response**: On success, returns the number of data sources enqueued for retry and related details.
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
     * Retries all data sources in failed status under a specified directory in batch.
     *
     * @remarks
     * ## Request description
     * This API retrieves and retries all data sources in FAILED status under a specified enterprise knowledge base directory (including its subdirectories). The request returns immediately, and the actual retry operations are executed asynchronously in the background.
     * - **Authentication**: In addition to basic authentication, the `DEVELOPMENT_KB_MANAGE` permission is required.
     * - **Security constraints**: Only callers with the corresponding tenant and user identity are allowed access, and KB management permission is required. Administrators can initiate retries for failed resources of any user.
     * - **Parameters**:
     *   - `directoryId` (required): The ID of the enterprise knowledge base directory for which to check and retry failed data sources.
     *   - `tenantId` (optional): The tenant ID. The default tenant of the caller is used if this parameter is not specified.
     * - **Response**: On success, returns the number of data sources enqueued for retry and related details.
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
     * Revokes the usage permissions of a user or user group on a digital human.
     *
     * @remarks
     * Revokes the usage permissions of a user or user group on a specified digital human.
     *     Business logic:
     *     1. Constructs an AuthContext from identity.
     *     2. Performs mutual exclusion validation on the request body: either userIds or userGroupIds must be specified.
     *     3. Delegates to AgentAuthorizationAuthorizedService.revoke_authorization for execution.
     *     4. Pre-validation: MANAGE permission + agent existence check (performed by the AuthorizedService layer, which authenticates before exposing existence).
     *     5. After direct user authorization is revoked, the user may still have access through user group authorization.
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
     * Revokes the usage permissions of a user or user group on a digital human.
     *
     * @remarks
     * Revokes the usage permissions of a user or user group on a specified digital human.
     *     Business logic:
     *     1. Constructs an AuthContext from identity.
     *     2. Performs mutual exclusion validation on the request body: either userIds or userGroupIds must be specified.
     *     3. Delegates to AgentAuthorizationAuthorizedService.revoke_authorization for execution.
     *     4. Pre-validation: MANAGE permission + agent existence check (performed by the AuthorizedService layer, which authenticates before exposing existence).
     *     5. After direct user authorization is revoked, the user may still have access through user group authorization.
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
     * Asynchronously triggers skill execution and immediately returns a RunId.
     *
     * @remarks
     * ## Request description
     * This operation supports only asynchronous mode. After submission, the operation immediately returns a `RunId` and `Status=Running`. The client polls for the final result by calling `GetSkillRun`.
     * - **TenantId**: An optional common parameter that the gateway passes through to the backend header.
     * - **SkillCode** / **SkillName**: Specify one of the two parameters. SkillCode takes priority. If SkillName is not unique, `ERR.SkillHub.SkillNameAmbiguous` is returned.
     * - **Arguments**: Required. The skill input parameter object. The structure is described by the inputConfig returned by `GetSkill`.
     * - **ClientToken**: An optional idempotency key. In the current version, this value is only recorded in the task metadata and is not used for strict idempotency deduplication.
     * Note: Synchronous mode (Async=false), Stream, and CallbackUrl are not supported in the first release and will be available in later versions.
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
     * Asynchronously triggers skill execution and immediately returns a RunId.
     *
     * @remarks
     * ## Request description
     * This operation supports only asynchronous mode. After submission, the operation immediately returns a `RunId` and `Status=Running`. The client polls for the final result by calling `GetSkillRun`.
     * - **TenantId**: An optional common parameter that the gateway passes through to the backend header.
     * - **SkillCode** / **SkillName**: Specify one of the two parameters. SkillCode takes priority. If SkillName is not unique, `ERR.SkillHub.SkillNameAmbiguous` is returned.
     * - **Arguments**: Required. The skill input parameter object. The structure is described by the inputConfig returned by `GetSkill`.
     * - **ClientToken**: An optional idempotency key. In the current version, this value is only recorded in the task metadata and is not used for strict idempotency deduplication.
     * Note: Synchronous mode (Async=false), Stream, and CallbackUrl are not supported in the first release and will be available in later versions.
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
     * Saves output details in batch as personal resources. Supports link or copy mode.
     *
     * @remarks
     * ## Operation description
     * - This API saves a batch of output details as personal resources for the user.
     * - Two save modes are supported: `link` and `copy`. When `link` is selected, edits to the output are synchronized to the resource. When `copy` is selected, a snapshot is created with no limit on the number of copies.
     * - `tenant_id` and `user_id` are derived only from the authenticated identity.
     * - If `operating_object` values are inconsistent within the batch and `directoryId` is not specified, the entire batch fails with a pre-check error.
     * - The processing result of a single record does not affect other records. Failure information for individual records is returned in the response.
     * - A maximum of 50 records are supported per batch operation.
     * - Batch-level pre-check failures are returned in a POP-compatible error format by the global exception middleware.
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
     * Saves output details in batch as personal resources. Supports link or copy mode.
     *
     * @remarks
     * ## Operation description
     * - This API saves a batch of output details as personal resources for the user.
     * - Two save modes are supported: `link` and `copy`. When `link` is selected, edits to the output are synchronized to the resource. When `copy` is selected, a snapshot is created with no limit on the number of copies.
     * - `tenant_id` and `user_id` are derived only from the authenticated identity.
     * - If `operating_object` values are inconsistent within the batch and `directoryId` is not specified, the entire batch fails with a pre-check error.
     * - The processing result of a single record does not affect other records. Failure information for individual records is returned in the response.
     * - A maximum of 50 records are supported per batch operation.
     * - Batch-level pre-check failures are returned in a POP-compatible error format by the global exception middleware.
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
     * Asynchronously sends a session message.
     *
     * @remarks
     * Asynchronously sends a session message.
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
     * Asynchronously sends a session message.
     *
     * @remarks
     * Asynchronously sends a session message.
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
     * Sends a message.
     *
     * @remarks
     * ## Operation description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - A persistent OSS address (`filePath`) must be provided for the file. Other information such as the public access URL and original file name is optional.
     * - If the target folder ID (`directoryId`) is not specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the invoker\\"s personal folder.
     * - Multiple authentication methods (AK, BearerToken, APP) are supported to authenticate requests.
     * - The operation type is write, and operation logs are recorded for subsequent auditing.
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
     * Sends a message.
     *
     * @remarks
     * ## Operation description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - A persistent OSS address (`filePath`) must be provided for the file. Other information such as the public access URL and original file name is optional.
     * - If the target folder ID (`directoryId`) is not specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the invoker\\"s personal folder.
     * - Multiple authentication methods (AK, BearerToken, APP) are supported to authenticate requests.
     * - The operation type is write, and operation logs are recorded for subsequent auditing.
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
     * Sends a message.
     *
     * @remarks
     * ## Operation description
     * - This API is used to upload a file to the "My Resources" section of a specified digital employee.
     * - `source_type` is fixed to `FILE`, `scope` is fixed to `PERSONAL`, and `platform` is fixed to `LOCAL`.
     * - A persistent OSS address (`filePath`) must be provided for the file. Other information such as the public access URL and original file name is optional.
     * - If the target folder ID (`directoryId`) is not specified, the file is automatically attached to the default root folder of the current digital employee. If specified, ensure that the folder belongs to the invoker\\"s personal folder.
     * - Multiple authentication methods (AK, BearerToken, APP) are supported to authenticate requests.
     * - The operation type is write, and operation logs are recorded for subsequent auditing.
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
     * Stops conversation generation.
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
     * Stops conversation generation.
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
     * Subscribes to a conversation message stream.
     *
     * @remarks
     * Subscribes to a conversation message stream.
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
     * Subscribes to a conversation message stream.
     *
     * @remarks
     * Subscribes to a conversation message stream.
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
     * Subscribes to a conversation message stream.
     *
     * @remarks
     * Subscribes to a conversation message stream.
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
     * Pushes organizational structure synchronization.
     *
     * @remarks
     * Accepts a department tree and member relationships pushed from the client and creates an asynchronous synchronization task.
     *     Processing flow:
     *     1. Validates platformType (only saml, oauth2, or custom are allowed).
     *     2. Validates data volume limits (departments + members <= 50000).
     *     3. Validates the compatibility between syncMembers and platformType.
     *     4. SAML/OAuth2 scenario: Parses or automatically derives ssoSettingsId.
     *     5. Custom scenario: Validates that corpId has been registered through createCustomOrg.
     *     6. Delegates to OrgSyncAuthorizedService to create the task (which includes permission verification).
     *     7. Returns taskId for polling.
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
     * Pushes organizational structure synchronization.
     *
     * @remarks
     * Accepts a department tree and member relationships pushed from the client and creates an asynchronous synchronization task.
     *     Processing flow:
     *     1. Validates platformType (only saml, oauth2, or custom are allowed).
     *     2. Validates data volume limits (departments + members <= 50000).
     *     3. Validates the compatibility between syncMembers and platformType.
     *     4. SAML/OAuth2 scenario: Parses or automatically derives ssoSettingsId.
     *     5. Custom scenario: Validates that corpId has been registered through createCustomOrg.
     *     6. Delegates to OrgSyncAuthorizedService to create the task (which includes permission verification).
     *     7. Returns taskId for polling.
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
     * Follows or unfollows a specified primary object.
     *
     * @remarks
     * ## Request description
     * - **Precheck**:
     *   1. When adding a follow: The system checks whether the primary object is already followed to prevent duplicates, and authenticates that the primary object exists.
     *   2. When unfollowing: This is an idempotent operation. Regardless of whether the user has previously followed the object, `success=true` is returned.
     * - **Security**: Three authentication methods are supported: AK, BearerToken, and APP.
     * - **Request frequency limit**: A maximum of 100 requests can be send per second.
     * - **Response log**: The response log record feature is enabled.
     * - **Tenant relevance**: This API is associated with a specific tenant. The tenant ID of the invoker is used by default.
     * - **Operation type**: Write operation.
     * - **Backend service**: Requests are forwarded to an internal service for processing. The timeout period is 3 seconds.
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
     * Follows or unfollows a specified primary object.
     *
     * @remarks
     * ## Request description
     * - **Precheck**:
     *   1. When adding a follow: The system checks whether the primary object is already followed to prevent duplicates, and authenticates that the primary object exists.
     *   2. When unfollowing: This is an idempotent operation. Regardless of whether the user has previously followed the object, `success=true` is returned.
     * - **Security**: Three authentication methods are supported: AK, BearerToken, and APP.
     * - **Request frequency limit**: A maximum of 100 requests can be send per second.
     * - **Response log**: The response log record feature is enabled.
     * - **Tenant relevance**: This API is associated with a specific tenant. The tenant ID of the invoker is used by default.
     * - **Operation type**: Write operation.
     * - **Backend service**: Requests are forwarded to an internal service for processing. The timeout period is 3 seconds.
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
     * Updates the authorization mode for digital employee usage permissions.
     *
     * @remarks
     * Switches the authorization mode for digital employee usage permissions.
     *     Business logic:
     *     1. Constructs an AuthContext from the identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.update_auth_mode for execution.
     *     3. Pre-validation: MANAGE permission + agent existence check (performed by the AuthorizedService layer, which authenticates before exposing existence).
     *     4. SPECIFIED_USERS: Explicit authorization is required before usage.
     *     5. ALL_USERS: All users can use the digital employee without authorization (management permissions are not affected).
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
     * Updates the authorization mode for digital employee usage permissions.
     *
     * @remarks
     * Switches the authorization mode for digital employee usage permissions.
     *     Business logic:
     *     1. Constructs an AuthContext from the identity.
     *     2. Delegates to AgentAuthorizationAuthorizedService.update_auth_mode for execution.
     *     3. Pre-validation: MANAGE permission + agent existence check (performed by the AuthorizedService layer, which authenticates before exposing existence).
     *     4. SPECIFIED_USERS: Explicit authorization is required before usage.
     *     5. ALL_USERS: All users can use the digital employee without authorization (management permissions are not affected).
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
     * Updates a session.
     *
     * @remarks
     * Updates a session.
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
     * Updates a session.
     *
     * @remarks
     * Updates a session.
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
     * Updates the basic information of a user\\"s personal directory.
     *
     * @remarks
     * ## Operation description
     * This API operation updates the personal directory information of a specified user, including the name, description, and parent directory. Ensure that the directory corresponding to the provided `directoryId` exists and belongs to the current user. If the `name` or `path` of the directory is changed, the system automatically and recursively updates the paths of all subdirectories to maintain consistency. When adjusting the parent directory, ensure the validity of the new parent directory (that is, it is not the directory itself and does not cause a circular dependency).
     * - **Security constraints**: `tenant_id` and `user_id` must be derived from the authenticated identity.
     * - **Permission requirements**: Corresponding RAM permissions are required to perform this operation.
     * - **Input parameters**:
     *   - `directoryId`: Required. The unique identifier of the directory to update.
     *   - `name`: Optional. The new directory name.
     *   - `description`: Optional. The new directory description.
     *   - `parentId`: Optional. The ID of the new parent directory.
     *   - `path`: Optional. When specified, the system cascades the update to the paths of the current directory and all its subdirectories.
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
     * Updates the basic information of a user\\"s personal directory.
     *
     * @remarks
     * ## Operation description
     * This API operation updates the personal directory information of a specified user, including the name, description, and parent directory. Ensure that the directory corresponding to the provided `directoryId` exists and belongs to the current user. If the `name` or `path` of the directory is changed, the system automatically and recursively updates the paths of all subdirectories to maintain consistency. When adjusting the parent directory, ensure the validity of the new parent directory (that is, it is not the directory itself and does not cause a circular dependency).
     * - **Security constraints**: `tenant_id` and `user_id` must be derived from the authenticated identity.
     * - **Permission requirements**: Corresponding RAM permissions are required to perform this operation.
     * - **Input parameters**:
     *   - `directoryId`: Required. The unique identifier of the directory to update.
     *   - `name`: Optional. The new directory name.
     *   - `description`: Optional. The new directory description.
     *   - `parentId`: Optional. The ID of the new parent directory.
     *   - `path`: Optional. When specified, the system cascades the update to the paths of the current directory and all its subdirectories.
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
     * Updates the information of a specified enterprise knowledge base directory, including the name, description, and parent directory.
     *
     * @remarks
     * ## Operation description
     * - This operation modifies a directory in the enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - The `tenantId` parameter is optional. If not provided, the tenant ID of the caller is used by default.
     * - You must specify the `directoryId` of the directory to modify. The `name`, `description`, and `parentDirectoryId` parameters are optional. If not provided, the corresponding fields remain unchanged.
     * - When a new `parentDirectoryId` is specified, the system checks whether the new parent directory belongs to the current tenant and does not cause a circular dependency.
     * - This API operation supports multiple authentication methods (AK, BearerToken, APP) and has RAM permission control and operation auditing enabled.
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
     * Updates the information of a specified enterprise knowledge base directory, including the name, description, and parent directory.
     *
     * @remarks
     * ## Operation description
     * - This operation modifies a directory in the enterprise knowledge base.
     * - You must have the `DEVELOPMENT_KB_MANAGE` permission to call this API operation.
     * - The `tenantId` parameter is optional. If not provided, the tenant ID of the caller is used by default.
     * - You must specify the `directoryId` of the directory to modify. The `name`, `description`, and `parentDirectoryId` parameters are optional. If not provided, the corresponding fields remain unchanged.
     * - When a new `parentDirectoryId` is specified, the system checks whether the new parent directory belongs to the current tenant and does not cause a circular dependency.
     * - This API operation supports multiple authentication methods (AK, BearerToken, APP) and has RAM permission control and operation auditing enabled.
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
     * Edits the body content of a resource in an enterprise self-built knowledge base and triggers re-parsing.
     *
     * @remarks
     * ## Request description
     * This operation allows you to update the body content of a specified enterprise knowledge base data source and optionally wait synchronously for parsing to complete. By setting the `forceSync` parameter, you can control whether the parsing process is executed synchronously or asynchronously. The default is asynchronous processing.
     * - **Note**: When the `content` field is an empty string, the original content is cleared.
     * - **Permission requirement**: Calling this operation requires the corresponding RAM action permission (`winnexo:UpdateKnowledgeBaseSourceContent`).
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
     * Edits the body content of a resource in an enterprise self-built knowledge base and triggers re-parsing.
     *
     * @remarks
     * ## Request description
     * This operation allows you to update the body content of a specified enterprise knowledge base data source and optionally wait synchronously for parsing to complete. By setting the `forceSync` parameter, you can control whether the parsing process is executed synchronously or asynchronously. The default is asynchronous processing.
     * - **Note**: When the `content` field is an empty string, the original content is cleared.
     * - **Permission requirement**: Calling this operation requires the corresponding RAM action permission (`winnexo:UpdateKnowledgeBaseSourceContent`).
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
     * Updates the resource tags of a specified data source in an enterprise knowledge base.
     *
     * @remarks
     * ## Request description
     * - This operation updates the labels of a specific data source in an enterprise knowledge base.
     * - You must have knowledge base management permissions to invoke this operation.
     * - The `sourceTags` parameter accepts a JSON character string list, such as `["tagA", "tagB"]`. If you set this parameter to `null`, all existing labels are cleared.
     * - The update operation affects only the `sourceTags` and `gmt_modified` fields and does not trigger the `process_source` workflow.
     * - If the specified data source does not exist, the `ERR.Robject.Source.NotFound` fault is returned.
     * - This operation supports authentication through AccessKey, BearerToken, or APP methods.
     * - When you invoke this operation, make sure that `tenant_id` and `user_id` are from valid authentication identity information.
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
     * Updates the resource tags of a specified data source in an enterprise knowledge base.
     *
     * @remarks
     * ## Request description
     * - This operation updates the labels of a specific data source in an enterprise knowledge base.
     * - You must have knowledge base management permissions to invoke this operation.
     * - The `sourceTags` parameter accepts a JSON character string list, such as `["tagA", "tagB"]`. If you set this parameter to `null`, all existing labels are cleared.
     * - The update operation affects only the `sourceTags` and `gmt_modified` fields and does not trigger the `process_source` workflow.
     * - If the specified data source does not exist, the `ERR.Robject.Source.NotFound` fault is returned.
     * - This operation supports authentication through AccessKey, BearerToken, or APP methods.
     * - When you invoke this operation, make sure that `tenant_id` and `user_id` are from valid authentication identity information.
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
     * Updates a scheduled task.
     *
     * @remarks
     * Updates a scheduled task.
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

        if (null !== $tmpReq->visibleMemberUserIds) {
            $request->visibleMemberUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->visibleMemberUserIds, 'visibleMemberUserIds', 'json');
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

        if (null !== $request->visibility) {
            @$body['visibility'] = $request->visibility;
        }

        if (null !== $request->visibleMemberUserIdsShrink) {
            @$body['visibleMemberUserIds'] = $request->visibleMemberUserIdsShrink;
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
     * Updates a scheduled task.
     *
     * @remarks
     * Updates a scheduled task.
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
     * Updates the content of an editable data source within a tenant and triggers re-parsing.
     *
     * @remarks
     * ## Operation description
     * - This API operation updates the content of a data source within a specified tenant and triggers synchronous or asynchronous re-parsing of the data source as needed.
     * - `tenant_id` and `user_id` are used only for authentication and are not involved in actual business logic processing.
     * - When the provided content is an empty string, the system performs the operation according to the existing service contract.
     * - If the specified data source does not exist, a standard NotFound error is returned. Other exceptions are handled by the global exception chain.
     * - Set the `forceSync` parameter to determine whether to wait for the parsing process to complete. The default behavior is asynchronous queuing.
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
     * Updates the content of an editable data source within a tenant and triggers re-parsing.
     *
     * @remarks
     * ## Operation description
     * - This API operation updates the content of a data source within a specified tenant and triggers synchronous or asynchronous re-parsing of the data source as needed.
     * - `tenant_id` and `user_id` are used only for authentication and are not involved in actual business logic processing.
     * - When the provided content is an empty string, the system performs the operation according to the existing service contract.
     * - If the specified data source does not exist, a standard NotFound error is returned. Other exceptions are handled by the global exception chain.
     * - Set the `forceSync` parameter to determine whether to wait for the parsing process to complete. The default behavior is asynchronous queuing.
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
     * Modifies knowledge base folder information.
     *
     * @remarks
     * Modifies knowledge base folder information.
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
     * Modifies knowledge base folder information.
     *
     * @remarks
     * Modifies knowledge base folder information.
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
     * Modifies user information, including enabling or disabling the user.
     *
     * @remarks
     * Modifies user information through OpenAPI.
     *     Business orchestration:
     *     1. Parse roleCodes → role_ids
     *     2. If isActive has changed, perform the status switch first (including last super admin protection)
     *     3. Call update_tenant_member to modify other fields (displayName / roleCodes / userGroupIds)
     *     4. Return HTTP 200 if all steps succeed
     *     Execution order notes:
     *     - The isActive status change is performed before other field writes. The two steps are not in the same transaction.
     *     - If validation fails (such as last super admin protection) → an exception is thrown and subsequent steps are not executed.
     *     - If the isActive change has been persisted but a subsequent step fails, the isActive change is not rolled back.
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
     * Modifies user information, including enabling or disabling the user.
     *
     * @remarks
     * Modifies user information through OpenAPI.
     *     Business orchestration:
     *     1. Parse roleCodes → role_ids
     *     2. If isActive has changed, perform the status switch first (including last super admin protection)
     *     3. Call update_tenant_member to modify other fields (displayName / roleCodes / userGroupIds)
     *     4. Return HTTP 200 if all steps succeed
     *     Execution order notes:
     *     - The isActive status change is performed before other field writes. The two steps are not in the same transaction.
     *     - If validation fails (such as last super admin protection) → an exception is thrown and subsequent steps are not executed.
     *     - If the isActive change has been persisted but a subsequent step fails, the isActive change is not rolled back.
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
     * Updates partial fields of the current user information and returns the complete user information.
     *
     * @remarks
     * ## Request description
     * - This API allows the caller to update some or all optional fields of a specified user. Fields that are not provided retain their original values.
     * - Use the `tenantId` parameter to specify a tenant ID. If omitted, the default tenant of the caller is used.
     * - After a successful update, the response body contains the complete user information object.
     * - This operation requires authentication and supports AK, BearerToken, and APP security schemes.
     * - The request content type is JSON, and the operation is available only over HTTPS.
     * - Note: The `profileRoleInfo` field is valid only when the user role is set to Others. It describes the specific role information of the user.
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
     * Updates partial fields of the current user information and returns the complete user information.
     *
     * @remarks
     * ## Request description
     * - This API allows the caller to update some or all optional fields of a specified user. Fields that are not provided retain their original values.
     * - Use the `tenantId` parameter to specify a tenant ID. If omitted, the default tenant of the caller is used.
     * - After a successful update, the response body contains the complete user information object.
     * - This operation requires authentication and supports AK, BearerToken, and APP security schemes.
     * - The request content type is JSON, and the operation is available only over HTTPS.
     * - Note: The `profileRoleInfo` field is valid only when the user role is set to Others. It describes the specific role information of the user.
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
     * Uploads a local file in a session.
     *
     * @remarks
     * ## Operation description
     * This API is used to upload a session temporary file by using the **file transfer upload** mode (`fileTransfer`). The file binary data is not transmitted through the request body of this API. Instead, the file is first uploaded to Object Storage Service (OSS), and then the OSS address is passed to the backend through the `FileUrl` parameter. The backend retrieves the bytes from that address, writes them to its own OSS, and creates a session temporary file record.
     * ### Call methods
     * - **Recommended**: Use the `UploadChatFileAdvance` method generated by the SDK. Pass in the local file stream, and the SDK automatically completes the transfer upload and populates `FileUrl`.
     * - **Direct upload**: Upload the file to an OSS address accessible by the server, and then directly call this API with the `FileUrl` parameter.
     * ### Request parameters
     * - **FileUrl**: Required. The OSS address of the file. When you use the Advance method, the SDK automatically populates this parameter. You do not need to manually assign a value.
     * - **FileName**: Required. The original file name including the extension, such as `report.pdf`. The OSS address generated during transfer does not carry the original file name. The backend uses this parameter to determine the file extension and display name. Therefore, you must explicitly pass in this parameter.
     * - **ContentType**: Optional. The MIME type of the file. If this parameter is not specified, `application/octet-stream` is used.
     * - **OperatingObjectName**: Optional. The Agent namespace identifier that determines the file storage path.
     * ### Response parameters
     * The response includes the OSS object path `objectName`, the storage address `fileUrl`, the public access address `filePublicUrl` (valid for 1 hour), and the file record ID `fileRecordId`. The `uploadSignatureUrl` parameter is always empty in this mode.
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
     * Uploads a local file in a session.
     *
     * @remarks
     * ## Operation description
     * This API is used to upload a session temporary file by using the **file transfer upload** mode (`fileTransfer`). The file binary data is not transmitted through the request body of this API. Instead, the file is first uploaded to Object Storage Service (OSS), and then the OSS address is passed to the backend through the `FileUrl` parameter. The backend retrieves the bytes from that address, writes them to its own OSS, and creates a session temporary file record.
     * ### Call methods
     * - **Recommended**: Use the `UploadChatFileAdvance` method generated by the SDK. Pass in the local file stream, and the SDK automatically completes the transfer upload and populates `FileUrl`.
     * - **Direct upload**: Upload the file to an OSS address accessible by the server, and then directly call this API with the `FileUrl` parameter.
     * ### Request parameters
     * - **FileUrl**: Required. The OSS address of the file. When you use the Advance method, the SDK automatically populates this parameter. You do not need to manually assign a value.
     * - **FileName**: Required. The original file name including the extension, such as `report.pdf`. The OSS address generated during transfer does not carry the original file name. The backend uses this parameter to determine the file extension and display name. Therefore, you must explicitly pass in this parameter.
     * - **ContentType**: Optional. The MIME type of the file. If this parameter is not specified, `application/octet-stream` is used.
     * - **OperatingObjectName**: Optional. The Agent namespace identifier that determines the file storage path.
     * ### Response parameters
     * The response includes the OSS object path `objectName`, the storage address `fileUrl`, the public access address `filePublicUrl` (valid for 1 hour), and the file record ID `fileRecordId`. The `uploadSignatureUrl` parameter is always empty in this mode.
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
