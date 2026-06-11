<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckResponse;
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
        $this->_endpointRule = '';
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
     * 批量发起用户自定义Skill检测.
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
     * 批量发起用户自定义Skill检测.
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
     * 获取子任务信息.
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
     * 获取子任务信息.
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
