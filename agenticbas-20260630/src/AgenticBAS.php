<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgenticBAS\V20260630;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\CreatePentestTaskRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\CreatePentestTaskResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\CreatePentestTaskShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestReportContentRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestReportContentResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestReportContentShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestTaskListRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestTaskListResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestTaskListShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnListRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnListResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnListShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgenticBAS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agenticbas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建渗透测试任务
     *
     * @param tmpReq - CreatePentestTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePentestTaskResponse
     *
     * @param CreatePentestTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePentestTaskResponse
     */
    public function createPentestTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePentestTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePentestTask',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePentestTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建渗透测试任务
     *
     * @param request - CreatePentestTaskRequest
     *
     * @returns CreatePentestTaskResponse
     *
     * @param CreatePentestTaskRequest $request
     *
     * @return CreatePentestTaskResponse
     */
    public function createPentestTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPentestTaskWithOptions($request, $runtime);
    }

    /**
     * 查询渗透测试报告内容.
     *
     * @param tmpReq - DescribePentestReportContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestReportContentResponse
     *
     * @param DescribePentestReportContentRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePentestReportContentResponse
     */
    public function describePentestReportContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestReportContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestReportContent',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestReportContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询渗透测试报告内容.
     *
     * @param request - DescribePentestReportContentRequest
     *
     * @returns DescribePentestReportContentResponse
     *
     * @param DescribePentestReportContentRequest $request
     *
     * @return DescribePentestReportContentResponse
     */
    public function describePentestReportContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestReportContentWithOptions($request, $runtime);
    }

    /**
     * 查询渗透测试任务列表.
     *
     * @param tmpReq - DescribePentestTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestTaskListResponse
     *
     * @param DescribePentestTaskListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePentestTaskListResponse
     */
    public function describePentestTaskListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestTaskListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestTaskList',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询渗透测试任务列表.
     *
     * @param request - DescribePentestTaskListRequest
     *
     * @returns DescribePentestTaskListResponse
     *
     * @param DescribePentestTaskListRequest $request
     *
     * @return DescribePentestTaskListResponse
     */
    public function describePentestTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestTaskListWithOptions($request, $runtime);
    }

    /**
     * 查询渗透测试漏洞列表.
     *
     * @param tmpReq - DescribePentestVulnListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestVulnListResponse
     *
     * @param DescribePentestVulnListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePentestVulnListResponse
     */
    public function describePentestVulnListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestVulnListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestVulnList',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestVulnListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询渗透测试漏洞列表.
     *
     * @param request - DescribePentestVulnListRequest
     *
     * @returns DescribePentestVulnListResponse
     *
     * @param DescribePentestVulnListRequest $request
     *
     * @return DescribePentestVulnListResponse
     */
    public function describePentestVulnList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestVulnListWithOptions($request, $runtime);
    }
}
