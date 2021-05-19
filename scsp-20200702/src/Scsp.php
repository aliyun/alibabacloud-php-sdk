<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Scsp\V20200702\Models\AnswerCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\AnswerCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\AppMessagePushRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\AppMessagePushResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\AssignTicketRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\AssignTicketResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ChangeChatAgentStatusRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ChangeChatAgentStatusResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CloseTicketRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CloseTicketResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateCustomerRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateCustomerResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateEntityIvrRouteRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateEntityIvrRouteResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateOuterCallCenterDataRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateOuterCallCenterDataResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateRoleRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateRoleResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateThirdSsoAgentRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateThirdSsoAgentResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateTicketWithBizDataRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\CreateTicketWithBizDataResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\DeleteEntityRouteRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\DeleteEntityRouteResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\DisableRoleRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\DisableRoleResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\EditEntityRouteRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\EditEntityRouteResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\EnableRoleRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\EnableRoleResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ExecuteActivityRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ExecuteActivityResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\FetchCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\FetchCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\FinishHotlineServiceRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\FinishHotlineServiceResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GenerateWebSocketSignRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GenerateWebSocketSignResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetAgentRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetAgentResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetAuthInfoRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetAuthInfoResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetCallsPerDayRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetCallsPerDayResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetCMSIdByForeignIdRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetCMSIdByForeignIdResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteListRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteListResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityTagRelationRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityTagRelationResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetGrantedRoleIdsRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetGrantedRoleIdsResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineAgentDetailReportRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineAgentDetailReportResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineAgentDetailRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineAgentDetailResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineAgentStatusRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineAgentStatusResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineGroupDetailReportRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineGroupDetailReportResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineWaitingNumberRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetHotlineWaitingNumberResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetNumLocationRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetNumLocationResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetOutbounNumListRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetOutbounNumListResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetOuterCallCenterDataListRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetOuterCallCenterDataListResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetTagListRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetTagListResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetTicketTemplateSchemaRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetTicketTemplateSchemaResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetUserTokenRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GetUserTokenResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GrantRolesRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\GrantRolesResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\HangupCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\HangupCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\HangupThirdCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\HangupThirdCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\HoldCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\HoldCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\JoinThirdCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\JoinThirdCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListAgentBySkillGroupIdRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListAgentBySkillGroupIdResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListHotlineRecordRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListHotlineRecordResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListOutboundPhoneNumberRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListOutboundPhoneNumberResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListSkillGroupRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\ListSkillGroupResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryHotlineSessionRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryHotlineSessionResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryRingDetailListRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryRingDetailListResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryRingDetailListShrinkRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryServiceConfigRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryServiceConfigResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QuerySkillGroupsRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QuerySkillGroupsResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketActionsRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketActionsResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketCountRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketCountResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketsRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketsResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\QueryTicketsShrinkRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\RemoveSkillGroupRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\RemoveSkillGroupResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByPhoneRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByPhoneResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketListRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketListResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SendHotlineHeartBeatRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SendHotlineHeartBeatResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SendOutboundCommandRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SendOutboundCommandResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartCallV2Request;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartCallV2Response;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartChatWorkRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartChatWorkResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartHotlineServiceRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\StartHotlineServiceResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SuspendHotlineServiceRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SuspendHotlineServiceResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferCallToAgentRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferCallToAgentResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferCallToPhoneRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferCallToPhoneResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferCallToSkillGroupRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferCallToSkillGroupResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferToThirdCallRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\TransferToThirdCallResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateCustomerRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateCustomerResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateEntityTagRelationRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateEntityTagRelationResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateRingStatusRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateRingStatusResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateSkillGroupRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateSkillGroupResponse;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateTicketRequest;
use AlibabaCloud\SDK\Scsp\V20200702\Models\UpdateTicketResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Scsp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-shanghai' => 'scsp-vpc.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('scsp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetUserTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetUserTokenResponse
     */
    public function getUserTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserTokenResponse::fromMap($this->doRPCRequest('GetUserToken', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserTokenRequest $request
     *
     * @return GetUserTokenResponse
     */
    public function getUserToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTokenWithOptions($request, $runtime);
    }

    /**
     * @param SearchTicketListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchTicketListResponse
     */
    public function searchTicketListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SearchTicketListResponse::fromMap($this->doRPCRequest('SearchTicketList', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTicketListRequest $request
     *
     * @return SearchTicketListResponse
     */
    public function searchTicketList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTicketListWithOptions($request, $runtime);
    }

    /**
     * @param SendHotlineHeartBeatRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendHotlineHeartBeatResponse::fromMap($this->doRPCRequest('SendHotlineHeartBeat', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendHotlineHeartBeatRequest $request
     *
     * @return SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendHotlineHeartBeatWithOptions($request, $runtime);
    }

    /**
     * @param TransferCallToSkillGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferCallToSkillGroupResponse::fromMap($this->doRPCRequest('TransferCallToSkillGroup', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferCallToSkillGroupRequest $request
     *
     * @return TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferCallToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param EditEntityRouteRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EditEntityRouteResponse
     */
    public function editEntityRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditEntityRouteResponse::fromMap($this->doRPCRequest('EditEntityRoute', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditEntityRouteRequest $request
     *
     * @return EditEntityRouteResponse
     */
    public function editEntityRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editEntityRouteWithOptions($request, $runtime);
    }

    /**
     * @param GetTagListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetTagListResponse
     */
    public function getTagListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTagListResponse::fromMap($this->doRPCRequest('GetTagList', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTagListRequest $request
     *
     * @return GetTagListResponse
     */
    public function getTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateTicketResponse
     */
    public function updateTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTicketResponse::fromMap($this->doRPCRequest('UpdateTicket', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTicketRequest $request
     *
     * @return UpdateTicketResponse
     */
    public function updateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundPhoneNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListOutboundPhoneNumberResponse::fromMap($this->doRPCRequest('ListOutboundPhoneNumber', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOutboundPhoneNumberRequest $request
     *
     * @return ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveSkillGroupResponse
     */
    public function removeSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSkillGroupResponse::fromMap($this->doRPCRequest('RemoveSkillGroup', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveSkillGroupRequest $request
     *
     * @return RemoveSkillGroupResponse
     */
    public function removeSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListAgentBySkillGroupIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAgentBySkillGroupIdResponse::fromMap($this->doRPCRequest('ListAgentBySkillGroupId', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAgentBySkillGroupIdRequest $request
     *
     * @return ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentBySkillGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryHotlineSessionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryHotlineSessionResponse
     */
    public function queryHotlineSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryHotlineSessionResponse::fromMap($this->doRPCRequest('QueryHotlineSession', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryHotlineSessionRequest $request
     *
     * @return QueryHotlineSessionResponse
     */
    public function queryHotlineSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHotlineSessionWithOptions($request, $runtime);
    }

    /**
     * @param StartChatWorkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartChatWorkResponse
     */
    public function startChatWorkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartChatWorkResponse::fromMap($this->doRPCRequest('StartChatWork', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartChatWorkRequest $request
     *
     * @return StartChatWorkResponse
     */
    public function startChatWork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChatWorkWithOptions($request, $runtime);
    }

    /**
     * @param HangupThirdCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return HangupThirdCallResponse
     */
    public function hangupThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HangupThirdCallResponse::fromMap($this->doRPCRequest('HangupThirdCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HangupThirdCallRequest $request
     *
     * @return HangupThirdCallResponse
     */
    public function hangupThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param StartHotlineServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartHotlineServiceResponse
     */
    public function startHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartHotlineServiceResponse::fromMap($this->doRPCRequest('StartHotlineService', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartHotlineServiceRequest $request
     *
     * @return StartHotlineServiceResponse
     */
    public function startHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param StartCallV2Request $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartCallV2Response
     */
    public function startCallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCallV2Response::fromMap($this->doRPCRequest('StartCallV2', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartCallV2Request $request
     *
     * @return StartCallV2Response
     */
    public function startCallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCallV2WithOptions($request, $runtime);
    }

    /**
     * @param EnableRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableRoleResponse
     */
    public function enableRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableRoleResponse::fromMap($this->doRPCRequest('EnableRole', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableRoleRequest $request
     *
     * @return EnableRoleResponse
     */
    public function enableRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRoleWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAgentResponse::fromMap($this->doRPCRequest('GetAgent', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * @param GetCMSIdByForeignIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCMSIdByForeignIdResponse
     */
    public function getCMSIdByForeignIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCMSIdByForeignIdResponse::fromMap($this->doRPCRequest('GetCMSIdByForeignId', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCMSIdByForeignIdRequest $request
     *
     * @return GetCMSIdByForeignIdResponse
     */
    public function getCMSIdByForeignId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCMSIdByForeignIdWithOptions($request, $runtime);
    }

    /**
     * @param TransferToThirdCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TransferToThirdCallResponse
     */
    public function transferToThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferToThirdCallResponse::fromMap($this->doRPCRequest('TransferToThirdCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferToThirdCallRequest $request
     *
     * @return TransferToThirdCallResponse
     */
    public function transferToThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferToThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAgentResponse::fromMap($this->doRPCRequest('UpdateAgent', '2020-07-02', 'HTTPS', 'PUT', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAgentRequest $request
     *
     * @return UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * @param ChangeChatAgentStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeChatAgentStatusResponse::fromMap($this->doRPCRequest('ChangeChatAgentStatus', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeChatAgentStatusRequest $request
     *
     * @return ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeChatAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param GenerateWebSocketSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateWebSocketSignResponse
     */
    public function generateWebSocketSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateWebSocketSignResponse::fromMap($this->doRPCRequest('GenerateWebSocketSign', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateWebSocketSignRequest $request
     *
     * @return GenerateWebSocketSignResponse
     */
    public function generateWebSocketSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateWebSocketSignWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRingStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRingStatusResponse
     */
    public function updateRingStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRingStatusResponse::fromMap($this->doRPCRequest('UpdateRingStatus', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRingStatusRequest $request
     *
     * @return UpdateRingStatusResponse
     */
    public function updateRingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRingStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAgentResponse::fromMap($this->doRPCRequest('CreateAgent', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAgentRequest $request
     *
     * @return CreateAgentResponse
     */
    public function createAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEntityRouteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEntityRouteResponse
     */
    public function deleteEntityRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEntityRouteResponse::fromMap($this->doRPCRequest('DeleteEntityRoute', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEntityRouteRequest $request
     *
     * @return DeleteEntityRouteResponse
     */
    public function deleteEntityRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEntityRouteWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineGroupDetailReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineGroupDetailReportResponse::fromMap($this->doRPCRequest('GetHotlineGroupDetailReport', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineGroupDetailReportRequest $request
     *
     * @return GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineGroupDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTicketResponse::fromMap($this->doRPCRequest('CreateTicket', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCustomerResponse
     */
    public function updateCustomerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCustomerResponse::fromMap($this->doRPCRequest('UpdateCustomer', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCustomerRequest $request
     *
     * @return UpdateCustomerResponse
     */
    public function updateCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomerWithOptions($request, $runtime);
    }

    /**
     * @param AnswerCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AnswerCallResponse::fromMap($this->doRPCRequest('AnswerCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AnswerCallRequest $request
     *
     * @return AnswerCallResponse
     */
    public function answerCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->answerCallWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAgentResponse::fromMap($this->doRPCRequest('DeleteAgent', '2020-07-02', 'HTTPS', 'DELETE', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAgentRequest $request
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentWithOptions($request, $runtime);
    }

    /**
     * @param GetEntityTagRelationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEntityTagRelationResponse
     */
    public function getEntityTagRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEntityTagRelationResponse::fromMap($this->doRPCRequest('GetEntityTagRelation', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEntityTagRelationRequest $request
     *
     * @return GetEntityTagRelationResponse
     */
    public function getEntityTagRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEntityTagRelationWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineAgentDetailResponse::fromMap($this->doRPCRequest('GetHotlineAgentDetail', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineAgentDetailRequest $request
     *
     * @return GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentDetailWithOptions($request, $runtime);
    }

    /**
     * @param SuspendHotlineServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SuspendHotlineServiceResponse
     */
    public function suspendHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendHotlineServiceResponse::fromMap($this->doRPCRequest('SuspendHotlineService', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SuspendHotlineServiceRequest $request
     *
     * @return SuspendHotlineServiceResponse
     */
    public function suspendHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param GetCallsPerDayRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCallsPerDayResponse
     */
    public function getCallsPerDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetCallsPerDayResponse::fromMap($this->doRPCRequest('GetCallsPerDay', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCallsPerDayRequest $request
     *
     * @return GetCallsPerDayResponse
     */
    public function getCallsPerDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallsPerDayWithOptions($request, $runtime);
    }

    /**
     * @param FetchCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FetchCallResponse
     */
    public function fetchCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchCallResponse::fromMap($this->doRPCRequest('FetchCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FetchCallRequest $request
     *
     * @return FetchCallResponse
     */
    public function fetchCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchCallWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentDetailReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineAgentDetailReportResponse::fromMap($this->doRPCRequest('GetHotlineAgentDetailReport', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineAgentDetailReportRequest $request
     *
     * @return GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param QueryTicketCountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTicketCountResponse
     */
    public function queryTicketCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTicketCountResponse::fromMap($this->doRPCRequest('QueryTicketCount', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTicketCountRequest $request
     *
     * @return QueryTicketCountResponse
     */
    public function queryTicketCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketCountWithOptions($request, $runtime);
    }

    /**
     * @param AppMessagePushRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AppMessagePushResponse
     */
    public function appMessagePushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AppMessagePushResponse::fromMap($this->doRPCRequest('AppMessagePush', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AppMessagePushRequest $request
     *
     * @return AppMessagePushResponse
     */
    public function appMessagePush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appMessagePushWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineAgentStatusResponse::fromMap($this->doRPCRequest('GetHotlineAgentStatus', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineAgentStatusRequest $request
     *
     * @return GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineWaitingNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineWaitingNumberResponse::fromMap($this->doRPCRequest('GetHotlineWaitingNumber', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineWaitingNumberRequest $request
     *
     * @return GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineWaitingNumberWithOptions($request, $runtime);
    }

    /**
     * @param StartCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartCallResponse
     */
    public function startCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCallResponse::fromMap($this->doRPCRequest('StartCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartCallRequest $request
     *
     * @return StartCallResponse
     */
    public function startCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCallWithOptions($request, $runtime);
    }

    /**
     * @param AssignTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AssignTicketResponse
     */
    public function assignTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignTicketResponse::fromMap($this->doRPCRequest('AssignTicket', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssignTicketRequest $request
     *
     * @return AssignTicketResponse
     */
    public function assignTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignTicketWithOptions($request, $runtime);
    }

    /**
     * @param HangupCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return HangupCallResponse
     */
    public function hangupCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HangupCallResponse::fromMap($this->doRPCRequest('HangupCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HangupCallRequest $request
     *
     * @return HangupCallResponse
     */
    public function hangupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupCallWithOptions($request, $runtime);
    }

    /**
     * @param GetOutbounNumListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetOutbounNumListResponse
     */
    public function getOutbounNumListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOutbounNumListResponse::fromMap($this->doRPCRequest('GetOutbounNumList', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOutbounNumListRequest $request
     *
     * @return GetOutbounNumListResponse
     */
    public function getOutbounNumList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOutbounNumListWithOptions($request, $runtime);
    }

    /**
     * @param CreateTicketWithBizDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTicketWithBizDataResponse
     */
    public function createTicketWithBizDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTicketWithBizDataResponse::fromMap($this->doRPCRequest('createTicketWithBizData', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTicketWithBizDataRequest $request
     *
     * @return CreateTicketWithBizDataResponse
     */
    public function createTicketWithBizData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithBizDataWithOptions($request, $runtime);
    }

    /**
     * @param SearchTicketByPhoneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchTicketByPhoneResponse
     */
    public function searchTicketByPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SearchTicketByPhoneResponse::fromMap($this->doRPCRequest('SearchTicketByPhone', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTicketByPhoneRequest $request
     *
     * @return SearchTicketByPhoneResponse
     */
    public function searchTicketByPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTicketByPhoneWithOptions($request, $runtime);
    }

    /**
     * @param CreateThirdSsoAgentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateThirdSsoAgentResponse::fromMap($this->doRPCRequest('CreateThirdSsoAgent', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateThirdSsoAgentRequest $request
     *
     * @return CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createThirdSsoAgentWithOptions($request, $runtime);
    }

    /**
     * @param CreateEntityIvrRouteRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEntityIvrRouteResponse
     */
    public function createEntityIvrRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEntityIvrRouteResponse::fromMap($this->doRPCRequest('CreateEntityIvrRoute', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEntityIvrRouteRequest $request
     *
     * @return CreateEntityIvrRouteResponse
     */
    public function createEntityIvrRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEntityIvrRouteWithOptions($request, $runtime);
    }

    /**
     * @param CloseTicketRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseTicketResponse
     */
    public function closeTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseTicketResponse::fromMap($this->doRPCRequest('CloseTicket', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloseTicketRequest $request
     *
     * @return CloseTicketResponse
     */
    public function closeTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeTicketWithOptions($request, $runtime);
    }

    /**
     * @param HoldCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return HoldCallResponse
     */
    public function holdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HoldCallResponse::fromMap($this->doRPCRequest('HoldCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HoldCallRequest $request
     *
     * @return HoldCallResponse
     */
    public function holdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->holdCallWithOptions($request, $runtime);
    }

    /**
     * @param QueryRingDetailListRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryRingDetailListResponse
     */
    public function queryRingDetailListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryRingDetailListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fromPhoneNumList)) {
            $request->fromPhoneNumListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fromPhoneNumList, 'FromPhoneNumList', 'json');
        }
        if (!Utils::isUnset($tmpReq->toPhoneNumList)) {
            $request->toPhoneNumListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toPhoneNumList, 'ToPhoneNumList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRingDetailListResponse::fromMap($this->doRPCRequest('QueryRingDetailList', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRingDetailListRequest $request
     *
     * @return QueryRingDetailListResponse
     */
    public function queryRingDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRingDetailListWithOptions($request, $runtime);
    }

    /**
     * @param SearchTicketByIdRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchTicketByIdResponse
     */
    public function searchTicketByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SearchTicketByIdResponse::fromMap($this->doRPCRequest('SearchTicketById', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTicketByIdRequest $request
     *
     * @return SearchTicketByIdResponse
     */
    public function searchTicketById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTicketByIdWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSkillGroupResponse
     */
    public function updateSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSkillGroupResponse::fromMap($this->doRPCRequest('UpdateSkillGroup', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSkillGroupRequest $request
     *
     * @return UpdateSkillGroupResponse
     */
    public function updateSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryServiceConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryServiceConfigResponse
     */
    public function queryServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryServiceConfigResponse::fromMap($this->doRPCRequest('QueryServiceConfig', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryServiceConfigRequest $request
     *
     * @return QueryServiceConfigResponse
     */
    public function queryServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param DisableRoleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableRoleResponse
     */
    public function disableRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableRoleResponse::fromMap($this->doRPCRequest('DisableRole', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableRoleRequest $request
     *
     * @return DisableRoleResponse
     */
    public function disableRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRoleWithOptions($request, $runtime);
    }

    /**
     * @param GetEntityRouteListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetEntityRouteListResponse
     */
    public function getEntityRouteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEntityRouteListResponse::fromMap($this->doRPCRequest('GetEntityRouteList', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEntityRouteListRequest $request
     *
     * @return GetEntityRouteListResponse
     */
    public function getEntityRouteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEntityRouteListWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAuthInfoResponse
     */
    public function getAuthInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthInfoResponse::fromMap($this->doRPCRequest('GetAuthInfo', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAuthInfoRequest $request
     *
     * @return GetAuthInfoResponse
     */
    public function getAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRoleResponse::fromMap($this->doRPCRequest('UpdateRole', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }

    /**
     * @param GetTicketTemplateSchemaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTicketTemplateSchemaResponse
     */
    public function getTicketTemplateSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetTicketTemplateSchemaResponse::fromMap($this->doRPCRequest('GetTicketTemplateSchema', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTicketTemplateSchemaRequest $request
     *
     * @return GetTicketTemplateSchemaResponse
     */
    public function getTicketTemplateSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketTemplateSchemaWithOptions($request, $runtime);
    }

    /**
     * @param TransferCallToPhoneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TransferCallToPhoneResponse
     */
    public function transferCallToPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferCallToPhoneResponse::fromMap($this->doRPCRequest('TransferCallToPhone', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferCallToPhoneRequest $request
     *
     * @return TransferCallToPhoneResponse
     */
    public function transferCallToPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferCallToPhoneWithOptions($request, $runtime);
    }

    /**
     * @param QuerySkillGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySkillGroupsResponse
     */
    public function querySkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySkillGroupsResponse::fromMap($this->doRPCRequest('QuerySkillGroups', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySkillGroupsRequest $request
     *
     * @return QuerySkillGroupsResponse
     */
    public function querySkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param GetEntityRouteRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetEntityRouteResponse
     */
    public function getEntityRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEntityRouteResponse::fromMap($this->doRPCRequest('GetEntityRoute', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEntityRouteRequest $request
     *
     * @return GetEntityRouteResponse
     */
    public function getEntityRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEntityRouteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEntityTagRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateEntityTagRelationResponse
     */
    public function updateEntityTagRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEntityTagRelationResponse::fromMap($this->doRPCRequest('UpdateEntityTagRelation', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEntityTagRelationRequest $request
     *
     * @return UpdateEntityTagRelationResponse
     */
    public function updateEntityTagRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEntityTagRelationWithOptions($request, $runtime);
    }

    /**
     * @param CreateOuterCallCenterDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateOuterCallCenterDataResponse
     */
    public function createOuterCallCenterDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOuterCallCenterDataResponse::fromMap($this->doRPCRequest('CreateOuterCallCenterData', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateOuterCallCenterDataRequest $request
     *
     * @return CreateOuterCallCenterDataResponse
     */
    public function createOuterCallCenterData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOuterCallCenterDataWithOptions($request, $runtime);
    }

    /**
     * @param SendOutboundCommandRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SendOutboundCommandResponse
     */
    public function sendOutboundCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendOutboundCommandResponse::fromMap($this->doRPCRequest('SendOutboundCommand', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendOutboundCommandRequest $request
     *
     * @return SendOutboundCommandResponse
     */
    public function sendOutboundCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendOutboundCommandWithOptions($request, $runtime);
    }

    /**
     * @param CreateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRoleResponse::fromMap($this->doRPCRequest('CreateRole', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSkillGroupResponse
     */
    public function listSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListSkillGroupResponse::fromMap($this->doRPCRequest('ListSkillGroup', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSkillGroupRequest $request
     *
     * @return ListSkillGroupResponse
     */
    public function listSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param GrantRolesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GrantRolesResponse
     */
    public function grantRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantRolesResponse::fromMap($this->doRPCRequest('GrantRoles', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantRolesRequest $request
     *
     * @return GrantRolesResponse
     */
    public function grantRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantRolesWithOptions($request, $runtime);
    }

    /**
     * @param GetOuterCallCenterDataListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetOuterCallCenterDataListResponse
     */
    public function getOuterCallCenterDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOuterCallCenterDataListResponse::fromMap($this->doRPCRequest('GetOuterCallCenterDataList', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOuterCallCenterDataListRequest $request
     *
     * @return GetOuterCallCenterDataListResponse
     */
    public function getOuterCallCenterDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOuterCallCenterDataListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTicketsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return QueryTicketsResponse
     */
    public function queryTicketsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryTicketsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTicketsResponse::fromMap($this->doRPCRequest('QueryTickets', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTicketsRequest $request
     *
     * @return QueryTicketsResponse
     */
    public function queryTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTicketActionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryTicketActionsResponse
     */
    public function queryTicketActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTicketActionsResponse::fromMap($this->doRPCRequest('QueryTicketActions', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTicketActionsRequest $request
     *
     * @return QueryTicketActionsResponse
     */
    public function queryTicketActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketActionsWithOptions($request, $runtime);
    }

    /**
     * @param TransferCallToAgentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TransferCallToAgentResponse
     */
    public function transferCallToAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferCallToAgentResponse::fromMap($this->doRPCRequest('TransferCallToAgent', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferCallToAgentRequest $request
     *
     * @return TransferCallToAgentResponse
     */
    public function transferCallToAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferCallToAgentWithOptions($request, $runtime);
    }

    /**
     * @param FinishHotlineServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FinishHotlineServiceResponse
     */
    public function finishHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FinishHotlineServiceResponse::fromMap($this->doRPCRequest('FinishHotlineService', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FinishHotlineServiceRequest $request
     *
     * @return FinishHotlineServiceResponse
     */
    public function finishHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param JoinThirdCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return JoinThirdCallResponse
     */
    public function joinThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinThirdCallResponse::fromMap($this->doRPCRequest('JoinThirdCall', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinThirdCallRequest $request
     *
     * @return JoinThirdCallResponse
     */
    public function joinThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteActivityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteActivityResponse
     */
    public function executeActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteActivityResponse::fromMap($this->doRPCRequest('ExecuteActivity', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteActivityRequest $request
     *
     * @return ExecuteActivityResponse
     */
    public function executeActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeActivityWithOptions($request, $runtime);
    }

    /**
     * @param GetGrantedRoleIdsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetGrantedRoleIdsResponse
     */
    public function getGrantedRoleIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetGrantedRoleIdsResponse::fromMap($this->doRPCRequest('GetGrantedRoleIds', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGrantedRoleIdsRequest $request
     *
     * @return GetGrantedRoleIdsResponse
     */
    public function getGrantedRoleIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGrantedRoleIdsWithOptions($request, $runtime);
    }

    /**
     * @param ListHotlineRecordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHotlineRecordResponse
     */
    public function listHotlineRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListHotlineRecordResponse::fromMap($this->doRPCRequest('ListHotlineRecord', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHotlineRecordRequest $request
     *
     * @return ListHotlineRecordResponse
     */
    public function listHotlineRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineRecordWithOptions($request, $runtime);
    }

    /**
     * @param GetNumLocationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNumLocationResponse
     */
    public function getNumLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetNumLocationResponse::fromMap($this->doRPCRequest('GetNumLocation', '2020-07-02', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNumLocationRequest $request
     *
     * @return GetNumLocationResponse
     */
    public function getNumLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumLocationWithOptions($request, $runtime);
    }

    /**
     * @param CreateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSkillGroupResponse::fromMap($this->doRPCRequest('CreateSkillGroup', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSkillGroupRequest $request
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCustomerResponse
     */
    public function createCustomerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCustomerResponse::fromMap($this->doRPCRequest('CreateCustomer', '2020-07-02', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCustomerRequest $request
     *
     * @return CreateCustomerResponse
     */
    public function createCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerWithOptions($request, $runtime);
    }
}
