<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListAIAgentEventRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListAIAgentEventResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AISC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-zhangjiakou' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-wulanchabu' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-shanghai' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-nanjing' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-huhehaote' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-guangzhou' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-beijing' => 'aisc.cn-shanghai.aliyuncs.com',
            'ap-southeast-7' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-southeast-6' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'eu-central-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-hangzhou-finance' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-heyuan-acdr-1' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-shanghai-finance-1' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'aisc.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aisc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Initiates batch detection for user-defined skills.
     *
     * @param request - CreateSkillFileCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillFileCheckResponse
     *
     * @param CreateSkillFileCheckRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSkillFileCheckResponse
     */
    public function createSkillFileCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->files) {
            @$query['Files'] = $request->files;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSkillFileCheck',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillFileCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates batch detection for user-defined skills.
     *
     * @param request - CreateSkillFileCheckRequest
     *
     * @returns CreateSkillFileCheckResponse
     *
     * @param CreateSkillFileCheckRequest $request
     *
     * @return CreateSkillFileCheckResponse
     */
    public function createSkillFileCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillFileCheckWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of agent risk events.
     *
     * @param request - ListAIAgentEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAIAgentEventResponse
     *
     * @param ListAIAgentEventRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAIAgentEventResponse
     */
    public function listAIAgentEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->assetName) {
            @$query['AssetName'] = $request->assetName;
        }

        if (null !== $request->assetType) {
            @$query['AssetType'] = $request->assetType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->infraInstanceId) {
            @$query['InfraInstanceId'] = $request->infraInstanceId;
        }

        if (null !== $request->infraName) {
            @$query['InfraName'] = $request->infraName;
        }

        if (null !== $request->infraRegionId) {
            @$query['InfraRegionId'] = $request->infraRegionId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->riskName) {
            @$query['RiskName'] = $request->riskName;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        if (null !== $request->vendor) {
            @$query['Vendor'] = $request->vendor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAIAgentEvent',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAIAgentEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of agent risk events.
     *
     * @param request - ListAIAgentEventRequest
     *
     * @returns ListAIAgentEventResponse
     *
     * @param ListAIAgentEventRequest $request
     *
     * @return ListAIAgentEventResponse
     */
    public function listAIAgentEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIAgentEventWithOptions($request, $runtime);
    }

    /**
     * Get subtask information.
     *
     * @param request - ListSubTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubTasksResponse
     *
     * @param ListSubTasksRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubTasksResponse
     */
    public function listSubTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->rootTaskId) {
            @$query['RootTaskId'] = $request->rootTaskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubTasks',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSubTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get subtask information.
     *
     * @param request - ListSubTasksRequest
     *
     * @returns ListSubTasksResponse
     *
     * @param ListSubTasksRequest $request
     *
     * @return ListSubTasksResponse
     */
    public function listSubTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubTasksWithOptions($request, $runtime);
    }
}
