<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListYunQiTaskByUidRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListYunQiTaskByUidResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CustomerService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('customerservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取我的企业支持计划.
     *
     * @param request - ListEnterpriseSupportPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterpriseSupportPlanResponse
     *
     * @param ListEnterpriseSupportPlanRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEnterpriseSupportPlanResponse
     */
    public function listEnterpriseSupportPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNum) {
            @$body['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEnterpriseSupportPlan',
            'version' => '2023-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/customerWorkbench/pop/api/enterpriseSupport/listEnterpriseSupportPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnterpriseSupportPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取我的企业支持计划.
     *
     * @param request - ListEnterpriseSupportPlanRequest
     *
     * @returns ListEnterpriseSupportPlanResponse
     *
     * @param ListEnterpriseSupportPlanRequest $request
     *
     * @return ListEnterpriseSupportPlanResponse
     */
    public function listEnterpriseSupportPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnterpriseSupportPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取我的企业支持计划(下拉).
     *
     * @param request - ListEnterpriseSupportPlanSimpleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterpriseSupportPlanSimpleResponse
     *
     * @param ListEnterpriseSupportPlanSimpleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListEnterpriseSupportPlanSimpleResponse
     */
    public function listEnterpriseSupportPlanSimpleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNum) {
            @$body['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEnterpriseSupportPlanSimple',
            'version' => '2023-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/customerWorkbench/pop/api/enterpriseSupport/listEnterpriseSupportPlanSimple',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnterpriseSupportPlanSimpleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取我的企业支持计划(下拉).
     *
     * @param request - ListEnterpriseSupportPlanSimpleRequest
     *
     * @returns ListEnterpriseSupportPlanSimpleResponse
     *
     * @param ListEnterpriseSupportPlanSimpleRequest $request
     *
     * @return ListEnterpriseSupportPlanSimpleResponse
     */
    public function listEnterpriseSupportPlanSimple($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnterpriseSupportPlanSimpleWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取专家服务列表.
     *
     * @param request - ListServiceApplyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceApplyResponse
     *
     * @param ListServiceApplyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListServiceApplyResponse
     */
    public function listServiceApplyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applyType) {
            @$body['applyType'] = $request->applyType;
        }

        if (null !== $request->endDate) {
            @$body['endDate'] = $request->endDate;
        }

        if (null !== $request->pageNum) {
            @$body['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$body['productCode'] = $request->productCode;
        }

        if (null !== $request->startDate) {
            @$body['startDate'] = $request->startDate;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServiceApply',
            'version' => '2023-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/customerWorkbench/pop/api/expert/service/listServiceApply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取专家服务列表.
     *
     * @param request - ListServiceApplyRequest
     *
     * @returns ListServiceApplyResponse
     *
     * @param ListServiceApplyRequest $request
     *
     * @return ListServiceApplyResponse
     */
    public function listServiceApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过UID分页获取云企任务单.
     *
     * @param request - ListYunQiTaskByUidRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListYunQiTaskByUidResponse
     *
     * @param ListYunQiTaskByUidRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListYunQiTaskByUidResponse
     */
    public function listYunQiTaskByUidWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->createTimeEnd) {
            @$body['createTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$body['createTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->freeOrderApplyCodes) {
            @$body['freeOrderApplyCodes'] = $request->freeOrderApplyCodes;
        }

        if (null !== $request->freeOrderApplyIds) {
            @$body['freeOrderApplyIds'] = $request->freeOrderApplyIds;
        }

        if (null !== $request->orderIds) {
            @$body['orderIds'] = $request->orderIds;
        }

        if (null !== $request->pageNum) {
            @$body['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->statusList) {
            @$body['statusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListYunQiTaskByUid',
            'version' => '2023-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/customerWorkbench/pop/api/record/listYunQiTaskByUid',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListYunQiTaskByUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过UID分页获取云企任务单.
     *
     * @param request - ListYunQiTaskByUidRequest
     *
     * @returns ListYunQiTaskByUidResponse
     *
     * @param ListYunQiTaskByUidRequest $request
     *
     * @return ListYunQiTaskByUidResponse
     */
    public function listYunQiTaskByUid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listYunQiTaskByUidWithOptions($request, $headers, $runtime);
    }
}
