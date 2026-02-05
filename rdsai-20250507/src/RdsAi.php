<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesTaskStopRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesTaskStopResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateCustomAgentShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateInspectionTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateInspectionTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteScheduledTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteScheduledTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstancesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstancesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEventsListRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEventsListResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceRAGConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceRAGConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetConversationsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetConversationsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetInspectionReportRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetInspectionReportResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledInstancesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledInstancesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledReportsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetScheduledReportsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetStandAloneReportsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetStandAloneReportsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentToolsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListScheduledTasksRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListScheduledTasksResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstancesSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstancesSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstancesSSLShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyMessagesFeedbacksRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyMessagesFeedbacksResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyScheduledTaskRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstancePasswordRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstancePasswordResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StopInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StopInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateCustomAgentRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateCustomAgentResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateCustomAgentShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RdsAi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rdsai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Sends chat messages.
     *
     * @param tmpReq - ChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatMessagesResponse
     *
     * @param ChatMessagesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ChatMessagesResponse
     */
    public function chatMessagesWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatMessagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputs) {
            $request->inputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }

        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->eventMode) {
            @$query['EventMode'] = $request->eventMode;
        }

        if (null !== $request->inputsShrink) {
            @$query['Inputs'] = $request->inputsShrink;
        }

        if (null !== $request->parentMessageId) {
            @$query['ParentMessageId'] = $request->parentMessageId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatMessages',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield ChatMessagesResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * Sends chat messages.
     *
     * @param tmpReq - ChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatMessagesResponse
     *
     * @param ChatMessagesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ChatMessagesResponse
     */
    public function chatMessagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatMessagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputs) {
            $request->inputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }

        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->eventMode) {
            @$query['EventMode'] = $request->eventMode;
        }

        if (null !== $request->inputsShrink) {
            @$query['Inputs'] = $request->inputsShrink;
        }

        if (null !== $request->parentMessageId) {
            @$query['ParentMessageId'] = $request->parentMessageId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatMessages',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends chat messages.
     *
     * @param request - ChatMessagesRequest
     *
     * @returns ChatMessagesResponse
     *
     * @param ChatMessagesRequest $request
     *
     * @return ChatMessagesResponse
     */
    public function chatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatMessagesWithOptions($request, $runtime);
    }

    /**
     * Stops a conversation.
     *
     * @param request - ChatMessagesTaskStopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatMessagesTaskStopResponse
     *
     * @param ChatMessagesTaskStopRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ChatMessagesTaskStopResponse
     */
    public function chatMessagesTaskStopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatMessagesTaskStop',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatMessagesTaskStopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a conversation.
     *
     * @param request - ChatMessagesTaskStopRequest
     *
     * @returns ChatMessagesTaskStopResponse
     *
     * @param ChatMessagesTaskStopRequest $request
     *
     * @return ChatMessagesTaskStopResponse
     */
    public function chatMessagesTaskStop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatMessagesTaskStopWithOptions($request, $runtime);
    }

    /**
     * Creates an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the related topics.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - CreateAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->DBInstanceConfig) {
            $request->DBInstanceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceConfig, 'DBInstanceConfig', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceConfigShrink) {
            @$query['DBInstanceConfig'] = $request->DBInstanceConfigShrink;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dashboardPassword) {
            @$query['DashboardPassword'] = $request->dashboardPassword;
        }

        if (null !== $request->dashboardUsername) {
            @$query['DashboardUsername'] = $request->dashboardUsername;
        }

        if (null !== $request->databasePassword) {
            @$query['DatabasePassword'] = $request->databasePassword;
        }

        if (null !== $request->initializeWithExistingData) {
            @$query['InitializeWithExistingData'] = $request->initializeWithExistingData;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->publicEndpointEnabled) {
            @$query['PublicEndpointEnabled'] = $request->publicEndpointEnabled;
        }

        if (null !== $request->publicNetworkAccessEnabled) {
            @$query['PublicNetworkAccessEnabled'] = $request->publicNetworkAccessEnabled;
        }

        if (null !== $request->RAGEnabled) {
            @$query['RAGEnabled'] = $request->RAGEnabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the related topics.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - CreateAppInstanceRequest
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $request
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a dedicated agent.
     *
     * @param tmpReq - CreateCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomAgentResponse
     *
     * @param CreateCustomAgentRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomAgentResponse
     */
    public function createCustomAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCustomAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->skillIds) {
            $request->skillIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skillIds, 'SkillIds', 'json');
        }

        if (null !== $tmpReq->tools) {
            $request->toolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tools, 'Tools', 'json');
        }

        $query = [];
        if (null !== $request->enableTools) {
            @$query['EnableTools'] = $request->enableTools;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillIdsShrink) {
            @$query['SkillIds'] = $request->skillIdsShrink;
        }

        if (null !== $request->systemPrompt) {
            @$query['SystemPrompt'] = $request->systemPrompt;
        }

        if (null !== $request->toolsShrink) {
            @$query['Tools'] = $request->toolsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a dedicated agent.
     *
     * @param request - CreateCustomAgentRequest
     *
     * @returns CreateCustomAgentResponse
     *
     * @param CreateCustomAgentRequest $request
     *
     * @return CreateCustomAgentResponse
     */
    public function createCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomAgentWithOptions($request, $runtime);
    }

    /**
     * 创建一个批量实例巡检任务
     *
     * @param request - CreateInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInspectionTaskResponse
     *
     * @param CreateInspectionTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateInspectionTaskResponse
     */
    public function createInspectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->inspectionItems) {
            @$query['InspectionItems'] = $request->inspectionItems;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInspectionTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个批量实例巡检任务
     *
     * @param request - CreateInspectionTaskRequest
     *
     * @returns CreateInspectionTaskResponse
     *
     * @param CreateInspectionTaskRequest $request
     *
     * @return CreateInspectionTaskResponse
     */
    public function createInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * 创建一个新的批量实例巡检任务
     *
     * @param request - CreateScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个新的批量实例巡检任务
     *
     * @param request - CreateScheduledTaskRequest
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

        return $this->createScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the related topics.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  If you delete an RDS Supabase instance, the created RDS for PostgreSQL instance and the created NAT gateway are not automatically deleted. You must manually release the instance and delete the Internet NAT gateway and EIP.
     *
     * @param request - DeleteAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInstanceResponse
     *
     * @param DeleteAppInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAppInstanceResponse
     */
    public function deleteAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the related topics.
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  If you delete an RDS Supabase instance, the created RDS for PostgreSQL instance and the created NAT gateway are not automatically deleted. You must manually release the instance and delete the Internet NAT gateway and EIP.
     *
     * @param request - DeleteAppInstanceRequest
     *
     * @returns DeleteAppInstanceResponse
     *
     * @param DeleteAppInstanceRequest $request
     *
     * @return DeleteAppInstanceResponse
     */
    public function deleteAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes the dedicated agent created by a user.
     *
     * @param request - DeleteCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomAgentResponse
     *
     * @param DeleteCustomAgentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomAgentResponse
     */
    public function deleteCustomAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customAgentId) {
            @$query['CustomAgentId'] = $request->customAgentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the dedicated agent created by a user.
     *
     * @param request - DeleteCustomAgentRequest
     *
     * @returns DeleteCustomAgentResponse
     *
     * @param DeleteCustomAgentRequest $request
     *
     * @return DeleteCustomAgentResponse
     */
    public function deleteCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAgentWithOptions($request, $runtime);
    }

    /**
     * 删除指定的巡检任务
     *
     * @param request - DeleteScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledTaskResponse
     *
     * @param DeleteScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定的巡检任务
     *
     * @param request - DeleteScheduledTaskRequest
     *
     * @returns DeleteScheduledTaskResponse
     *
     * @param DeleteScheduledTaskRequest $request
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstanceAttributeResponse
     *
     * @param DescribeAppInstanceAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppInstanceAttributeResponse
     */
    public function describeAppInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppInstanceAttribute',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstanceAttributeRequest
     *
     * @returns DescribeAppInstanceAttributeResponse
     *
     * @param DescribeAppInstanceAttributeRequest $request
     *
     * @return DescribeAppInstanceAttributeResponse
     */
    public function describeAppInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the RDS Supabase instances.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstancesResponse
     *
     * @param DescribeAppInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAppInstancesResponse
     */
    public function describeAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppInstances',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the RDS Supabase instances.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeAppInstancesRequest
     *
     * @returns DescribeAppInstancesResponse
     *
     * @param DescribeAppInstancesRequest $request
     *
     * @return DescribeAppInstancesResponse
     */
    public function describeAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the events.
     *
     * @param request - DescribeEventsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsListResponse
     *
     * @param DescribeEventsListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEventsListResponse
     */
    public function describeEventsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventsList',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the events.
     *
     * @param request - DescribeEventsListRequest
     *
     * @returns DescribeEventsListResponse
     *
     * @param DescribeEventsListRequest $request
     *
     * @return DescribeEventsListResponse
     */
    public function describeEventsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsListWithOptions($request, $runtime);
    }

    /**
     * Queries the authentication information about an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceAuthInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAuthInfoResponse
     *
     * @param DescribeInstanceAuthInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAuthInfoResponse
     */
    public function describeInstanceAuthInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAuthInfo',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAuthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authentication information about an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceAuthInfoRequest
     *
     * @returns DescribeInstanceAuthInfoResponse
     *
     * @param DescribeInstanceAuthInfoRequest $request
     *
     * @return DescribeInstanceAuthInfoResponse
     */
    public function describeInstanceAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAuthInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the endpoint of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceEndpointsResponse
     *
     * @param DescribeInstanceEndpointsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceEndpointsResponse
     */
    public function describeInstanceEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceEndpoints',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the endpoint of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceEndpointsRequest
     *
     * @returns DescribeInstanceEndpointsResponse
     *
     * @param DescribeInstanceEndpointsRequest $request
     *
     * @return DescribeInstanceEndpointsResponse
     */
    public function describeInstanceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries the IP address whitelists of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceIpWhitelistResponse
     *
     * @param DescribeInstanceIpWhitelistRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceIpWhitelistResponse
     */
    public function describeInstanceIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceIpWhitelist',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP address whitelists of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceIpWhitelistRequest
     *
     * @returns DescribeInstanceIpWhitelistResponse
     *
     * @param DescribeInstanceIpWhitelistRequest $request
     *
     * @return DescribeInstanceIpWhitelistResponse
     */
    public function describeInstanceIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * Queries the RAG agent configurations of an RDS Supabase instance.
     *
     * @param request - DescribeInstanceRAGConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceRAGConfigResponse
     *
     * @param DescribeInstanceRAGConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceRAGConfigResponse
     */
    public function describeInstanceRAGConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceRAGConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRAGConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the RAG agent configurations of an RDS Supabase instance.
     *
     * @param request - DescribeInstanceRAGConfigRequest
     *
     * @returns DescribeInstanceRAGConfigResponse
     *
     * @param DescribeInstanceRAGConfigRequest $request
     *
     * @return DescribeInstanceRAGConfigResponse
     */
    public function describeInstanceRAGConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRAGConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the SSL settings of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SSL settings of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - DescribeInstanceSSLRequest
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * Queries the storage configurations of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  Only Object Storage Service (OSS) is supported for the storage of RDS Supabase.
     *
     * @param request - DescribeInstanceStorageConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceStorageConfigResponse
     *
     * @param DescribeInstanceStorageConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceStorageConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceStorageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage configurations of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  Only Object Storage Service (OSS) is supported for the storage of RDS Supabase.
     *
     * @param request - DescribeInstanceStorageConfigRequest
     *
     * @returns DescribeInstanceStorageConfigResponse
     *
     * @param DescribeInstanceStorageConfigRequest $request
     *
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStorageConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the history conversations of a user.
     *
     * @param request - GetConversationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConversationsResponse
     *
     * @param GetConversationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetConversationsResponse
     */
    public function getConversationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lastId) {
            @$query['LastId'] = $request->lastId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->pinned) {
            @$query['Pinned'] = $request->pinned;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConversations',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the history conversations of a user.
     *
     * @param request - GetConversationsRequest
     *
     * @returns GetConversationsResponse
     *
     * @param GetConversationsRequest $request
     *
     * @return GetConversationsResponse
     */
    public function getConversations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationsWithOptions($request, $runtime);
    }

    /**
     * Queries the dedicated agents created by a user.
     *
     * @param request - GetCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomAgentResponse
     *
     * @param GetCustomAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCustomAgentResponse
     */
    public function getCustomAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customAgentId) {
            @$query['CustomAgentId'] = $request->customAgentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the dedicated agents created by a user.
     *
     * @param request - GetCustomAgentRequest
     *
     * @returns GetCustomAgentResponse
     *
     * @param GetCustomAgentRequest $request
     *
     * @return GetCustomAgentResponse
     */
    public function getCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomAgentWithOptions($request, $runtime);
    }

    /**
     * 获取巡检任务报告结果.
     *
     * @param request - GetInspectionReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInspectionReportResponse
     *
     * @param GetInspectionReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetInspectionReportResponse
     */
    public function getInspectionReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInspectionReport',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInspectionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取巡检任务报告结果.
     *
     * @param request - GetInspectionReportRequest
     *
     * @returns GetInspectionReportResponse
     *
     * @param GetInspectionReportRequest $request
     *
     * @return GetInspectionReportResponse
     */
    public function getInspectionReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInspectionReportWithOptions($request, $runtime);
    }

    /**
     * Queries specific conversation messages.
     *
     * @param request - GetMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessagesResponse
     *
     * @param GetMessagesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetMessagesResponse
     */
    public function getMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->eventMode) {
            @$query['EventMode'] = $request->eventMode;
        }

        if (null !== $request->firstId) {
            @$query['FirstId'] = $request->firstId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMessages',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries specific conversation messages.
     *
     * @param request - GetMessagesRequest
     *
     * @returns GetMessagesResponse
     *
     * @param GetMessagesRequest $request
     *
     * @return GetMessagesResponse
     */
    public function getMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessagesWithOptions($request, $runtime);
    }

    /**
     * 查询指定定时任务配置中包含的所有实例ID列表，支持分页.
     *
     * @param request - GetScheduledInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledInstancesResponse
     *
     * @param GetScheduledInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetScheduledInstancesResponse
     */
    public function getScheduledInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledInstances',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScheduledInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定定时任务配置中包含的所有实例ID列表，支持分页.
     *
     * @param request - GetScheduledInstancesRequest
     *
     * @returns GetScheduledInstancesResponse
     *
     * @param GetScheduledInstancesRequest $request
     *
     * @return GetScheduledInstancesResponse
     */
    public function getScheduledInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduledInstancesWithOptions($request, $runtime);
    }

    /**
     * 获取定时任务的所有巡检报告，支持分页.
     *
     * @param request - GetScheduledReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledReportsResponse
     *
     * @param GetScheduledReportsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScheduledReportsResponse
     */
    public function getScheduledReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledReports',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScheduledReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取定时任务的所有巡检报告，支持分页.
     *
     * @param request - GetScheduledReportsRequest
     *
     * @returns GetScheduledReportsResponse
     *
     * @param GetScheduledReportsRequest $request
     *
     * @return GetScheduledReportsResponse
     */
    public function getScheduledReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduledReportsWithOptions($request, $runtime);
    }

    /**
     * 查询指定用户下所有非定时任务的单独巡检报告列表，支持分页.
     *
     * @param request - GetStandAloneReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStandAloneReportsResponse
     *
     * @param GetStandAloneReportsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetStandAloneReportsResponse
     */
    public function getStandAloneReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStandAloneReports',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStandAloneReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定用户下所有非定时任务的单独巡检报告列表，支持分页.
     *
     * @param request - GetStandAloneReportsRequest
     *
     * @returns GetStandAloneReportsResponse
     *
     * @param GetStandAloneReportsRequest $request
     *
     * @return GetStandAloneReportsResponse
     */
    public function getStandAloneReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStandAloneReportsWithOptions($request, $runtime);
    }

    /**
     * Queries the dedicated agents created by a user.
     *
     * @param request - ListCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomAgentResponse
     *
     * @param ListCustomAgentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCustomAgentResponse
     */
    public function listCustomAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the dedicated agents created by a user.
     *
     * @param request - ListCustomAgentRequest
     *
     * @returns ListCustomAgentResponse
     *
     * @param ListCustomAgentRequest $request
     *
     * @return ListCustomAgentResponse
     */
    public function listCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomAgentWithOptions($request, $runtime);
    }

    /**
     * Queries the custom agent tools of the user.
     *
     * @param request - ListCustomAgentToolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomAgentToolsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListCustomAgentToolsResponse
     */
    public function listCustomAgentToolsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListCustomAgentTools',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomAgentToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the custom agent tools of the user.
     *
     * @returns ListCustomAgentToolsResponse
     *
     * @return ListCustomAgentToolsResponse
     */
    public function listCustomAgentTools()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomAgentToolsWithOptions($runtime);
    }

    /**
     * 查询指定用户UID下所有巡检任务的基本信息列表.
     *
     * @param request - ListScheduledTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledTasksResponse
     *
     * @param ListScheduledTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledTasks',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定用户UID下所有巡检任务的基本信息列表.
     *
     * @param request - ListScheduledTasksRequest
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

        return $this->listScheduledTasksWithOptions($request, $runtime);
    }

    /**
     * Modifies the authentication configurations of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - ModifyInstanceAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAuthConfigResponse
     *
     * @param ModifyInstanceAuthConfigRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceAuthConfigResponse
     */
    public function modifyInstanceAuthConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceAuthConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAuthConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the authentication configurations of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceAuthConfigRequest
     *
     * @returns ModifyInstanceAuthConfigResponse
     *
     * @param ModifyInstanceAuthConfigRequest $request
     *
     * @return ModifyInstanceAuthConfigResponse
     */
    public function modifyInstanceAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the general configurations of an instance, such as the EIP and NAT settings.
     *
     * @param request - ModifyInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the general configurations of an instance, such as the EIP and NAT settings.
     *
     * @param request - ModifyInstanceConfigRequest
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP address whitelist of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceIpWhitelistResponse
     *
     * @param ModifyInstanceIpWhitelistRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceIpWhitelistResponse
     */
    public function modifyInstanceIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ipWhitelist) {
            @$query['IpWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceIpWhitelist',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelist of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceIpWhitelistRequest
     *
     * @returns ModifyInstanceIpWhitelistResponse
     *
     * @param ModifyInstanceIpWhitelistRequest $request
     *
     * @return ModifyInstanceIpWhitelistResponse
     */
    public function modifyInstanceIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * Modifies the RAG agent configurations of an RDS Supabase instance.
     *
     * @param tmpReq - ModifyInstanceRAGConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceRAGConfigResponse
     *
     * @param ModifyInstanceRAGConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceRAGConfigResponse
     */
    public function modifyInstanceRAGConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceRAGConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceRAGConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceRAGConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the RAG agent configurations of an RDS Supabase instance.
     *
     * @param request - ModifyInstanceRAGConfigRequest
     *
     * @returns ModifyInstanceRAGConfigResponse
     *
     * @param ModifyInstanceRAGConfigRequest $request
     *
     * @return ModifyInstanceRAGConfigResponse
     */
    public function modifyInstanceRAGConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRAGConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the SSL settings of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CAType) {
            @$query['CAType'] = $request->CAType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        if (null !== $request->serverCert) {
            @$query['ServerCert'] = $request->serverCert;
        }

        if (null !== $request->serverKey) {
            @$query['ServerKey'] = $request->serverKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the SSL settings of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstanceSSLRequest
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * Modifies the storage configurations of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  Only Object Storage Service (OSS) is supported for the storage of RDS Supabase.
     *
     * @param tmpReq - ModifyInstanceStorageConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceStorageConfigResponse
     *
     * @param ModifyInstanceStorageConfigRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceStorageConfigResponse
     */
    public function modifyInstanceStorageConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceStorageConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceStorageConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceStorageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the storage configurations of an RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  Only Object Storage Service (OSS) is supported for the storage of RDS Supabase.
     *
     * @param request - ModifyInstanceStorageConfigRequest
     *
     * @returns ModifyInstanceStorageConfigResponse
     *
     * @param ModifyInstanceStorageConfigRequest $request
     *
     * @return ModifyInstanceStorageConfigResponse
     */
    public function modifyInstanceStorageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceStorageConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the SSL settings of RDS Supabase instances in batches.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param tmpReq - ModifyInstancesSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstancesSSLResponse
     *
     * @param ModifyInstancesSSLRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstancesSSLResponse
     */
    public function modifyInstancesSSLWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstancesSSLShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceNames) {
            $request->instanceNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceNames, 'InstanceNames', 'json');
        }

        $query = [];
        if (null !== $request->CAType) {
            @$query['CAType'] = $request->CAType;
        }

        if (null !== $request->instanceNamesShrink) {
            @$query['InstanceNames'] = $request->instanceNamesShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        if (null !== $request->serverCert) {
            @$query['ServerCert'] = $request->serverCert;
        }

        if (null !== $request->serverKey) {
            @$query['ServerKey'] = $request->serverKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstancesSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstancesSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the SSL settings of RDS Supabase instances in batches.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - ModifyInstancesSSLRequest
     *
     * @returns ModifyInstancesSSLResponse
     *
     * @param ModifyInstancesSSLRequest $request
     *
     * @return ModifyInstancesSSLResponse
     */
    public function modifyInstancesSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstancesSSLWithOptions($request, $runtime);
    }

    /**
     * Modifies the returned messages.
     *
     * @param request - ModifyMessagesFeedbacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMessagesFeedbacksResponse
     *
     * @param ModifyMessagesFeedbacksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyMessagesFeedbacksResponse
     */
    public function modifyMessagesFeedbacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->rating) {
            @$query['Rating'] = $request->rating;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMessagesFeedbacks',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMessagesFeedbacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the returned messages.
     *
     * @param request - ModifyMessagesFeedbacksRequest
     *
     * @returns ModifyMessagesFeedbacksResponse
     *
     * @param ModifyMessagesFeedbacksRequest $request
     *
     * @return ModifyMessagesFeedbacksResponse
     */
    public function modifyMessagesFeedbacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMessagesFeedbacksWithOptions($request, $runtime);
    }

    /**
     * 修改已存在的巡检任务信息.
     *
     * @param request - ModifyScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param ModifyScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->scheduledId) {
            @$query['ScheduledId'] = $request->scheduledId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScheduledTask',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改已存在的巡检任务信息.
     *
     * @param request - ModifyScheduledTaskRequest
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param ModifyScheduledTaskRequest $request
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Resets the logon password of the RDS Supabase instance and the access password of the database.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  You can only change the password of a RDS Supabase Dashboard user.
     *
     * @param request - ResetInstancePasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetInstancePasswordResponse
     *
     * @param ResetInstancePasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResetInstancePasswordResponse
     */
    public function resetInstancePasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dashboardPassword) {
            @$query['DashboardPassword'] = $request->dashboardPassword;
        }

        if (null !== $request->databasePassword) {
            @$query['DatabasePassword'] = $request->databasePassword;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetInstancePassword',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetInstancePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the logon password of the RDS Supabase instance and the access password of the database.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     * >  You can only change the password of a RDS Supabase Dashboard user.
     *
     * @param request - ResetInstancePasswordRequest
     *
     * @returns ResetInstancePasswordResponse
     *
     * @param ResetInstancePasswordRequest $request
     *
     * @return ResetInstancePasswordResponse
     */
    public function resetInstancePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetInstancePasswordWithOptions($request, $runtime);
    }

    /**
     * Restarts an RDS Supabase instance that is in the Running state.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - RestartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an RDS Supabase instance that is in the Running state.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * Starts a stopped RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a stopped RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * Stops a running RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a running RDS Supabase instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * RDS PostgreSQL
     * ### [](#)References
     * [RDS Supabase](https://help.aliyun.com/document_detail/2938735.html)
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates the custom agent.
     *
     * @param tmpReq - UpdateCustomAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomAgentResponse
     *
     * @param UpdateCustomAgentRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCustomAgentResponse
     */
    public function updateCustomAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCustomAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->skillIds) {
            $request->skillIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skillIds, 'SkillIds', 'json');
        }

        if (null !== $tmpReq->tools) {
            $request->toolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tools, 'Tools', 'json');
        }

        $query = [];
        if (null !== $request->customAgentId) {
            @$query['CustomAgentId'] = $request->customAgentId;
        }

        if (null !== $request->enableTools) {
            @$query['EnableTools'] = $request->enableTools;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->skillIdsShrink) {
            @$query['SkillIds'] = $request->skillIdsShrink;
        }

        if (null !== $request->systemPrompt) {
            @$query['SystemPrompt'] = $request->systemPrompt;
        }

        if (null !== $request->toolsShrink) {
            @$query['Tools'] = $request->toolsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomAgent',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the custom agent.
     *
     * @param request - UpdateCustomAgentRequest
     *
     * @returns UpdateCustomAgentResponse
     *
     * @param UpdateCustomAgentRequest $request
     *
     * @return UpdateCustomAgentResponse
     */
    public function updateCustomAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomAgentWithOptions($request, $runtime);
    }
}
