<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentPlanTemplateRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentPlanTemplateResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourcePredictResultRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourcePredictResultResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetWorkloadRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetWorkloadResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansShrinkRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\StopExperimentRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\StopExperimentResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceRequest;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceResponse;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eflocnp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eflo-cnp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 资源转组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 资源转组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Create Experiment Plan
     *  *
     * @param CreateExperimentPlanRequest $tmpReq  CreateExperimentPlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentPlanResponse CreateExperimentPlanResponse
     */
    public function createExperimentPlanWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateExperimentPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->externalParams)) {
            $request->externalParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalParams, 'ExternalParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->externalParamsShrink)) {
            $query['ExternalParams'] = $request->externalParamsShrink;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExperimentPlan',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create Experiment Plan
     *  *
     * @param CreateExperimentPlanRequest $request CreateExperimentPlanRequest
     *
     * @return CreateExperimentPlanResponse CreateExperimentPlanResponse
     */
    public function createExperimentPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExperimentPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 创建/更新测试计划模板
     *  *
     * @param CreateExperimentPlanTemplateRequest $tmpReq  CreateExperimentPlanTemplateRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentPlanTemplateResponse CreateExperimentPlanTemplateResponse
     */
    public function createExperimentPlanTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateExperimentPlanTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templatePipeline)) {
            $request->templatePipelineShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templatePipeline, 'TemplatePipeline', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->privacyLevel)) {
            $query['PrivacyLevel'] = $request->privacyLevel;
        }
        if (!Utils::isUnset($request->templateDescription)) {
            $query['TemplateDescription'] = $request->templateDescription;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $body = [];
        if (!Utils::isUnset($request->templatePipelineShrink)) {
            $body['TemplatePipeline'] = $request->templatePipelineShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperimentPlanTemplate',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentPlanTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建/更新测试计划模板
     *  *
     * @param CreateExperimentPlanTemplateRequest $request CreateExperimentPlanTemplateRequest
     *
     * @return CreateExperimentPlanTemplateResponse CreateExperimentPlanTemplateResponse
     */
    public function createExperimentPlanTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExperimentPlanTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Create Evaluation Resource
     *  *
     * @param CreateResourceRequest $tmpReq  CreateResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->machineTypes)) {
            $request->machineTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->machineTypes, 'MachineTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->userAccessParam)) {
            $request->userAccessParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userAccessParam, 'UserAccessParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterDesc)) {
            $query['ClusterDesc'] = $request->clusterDesc;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $body = [];
        if (!Utils::isUnset($request->machineTypesShrink)) {
            $body['MachineTypes'] = $request->machineTypesShrink;
        }
        if (!Utils::isUnset($request->userAccessParamShrink)) {
            $body['UserAccessParam'] = $request->userAccessParamShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResource',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create Evaluation Resource
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除实验
     *  *
     * @param DeleteExperimentRequest $request DeleteExperimentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExperiment',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实验
     *  *
     * @param DeleteExperimentRequest $request DeleteExperimentRequest
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExperimentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除测试计划模板
     *  *
     * @param DeleteExperimentPlanTemplateRequest $request DeleteExperimentPlanTemplateRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentPlanTemplateResponse DeleteExperimentPlanTemplateResponse
     */
    public function deleteExperimentPlanTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExperimentPlanTemplate',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentPlanTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除测试计划模板
     *  *
     * @param DeleteExperimentPlanTemplateRequest $request DeleteExperimentPlanTemplateRequest
     *
     * @return DeleteExperimentPlanTemplateResponse DeleteExperimentPlanTemplateResponse
     */
    public function deleteExperimentPlanTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExperimentPlanTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实验详情
     *  *
     * @param GetExperimentRequest $request GetExperimentRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperimentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperiment',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验详情
     *  *
     * @param GetExperimentRequest $request GetExperimentRequest
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentWithOptions($request, $runtime);
    }

    /**
     * @summary Get Experiment Plan Details
     *  *
     * @param GetExperimentPlanRequest $request GetExperimentPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExperimentPlanResponse GetExperimentPlanResponse
     */
    public function getExperimentPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperimentPlan',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExperimentPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Experiment Plan Details
     *  *
     * @param GetExperimentPlanRequest $request GetExperimentPlanRequest
     *
     * @return GetExperimentPlanResponse GetExperimentPlanResponse
     */
    public function getExperimentPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实验结果数据
     *  *
     * @param GetExperimentResultDataRequest $request GetExperimentResultDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExperimentResultDataResponse GetExperimentResultDataResponse
     */
    public function getExperimentResultDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
        }
        if (!Utils::isUnset($request->hostname)) {
            $query['Hostname'] = $request->hostname;
        }
        if (!Utils::isUnset($request->workloadType)) {
            $query['WorkloadType'] = $request->workloadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperimentResultData',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExperimentResultDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验结果数据
     *  *
     * @param GetExperimentResultDataRequest $request GetExperimentResultDataRequest
     *
     * @return GetExperimentResultDataResponse GetExperimentResultDataResponse
     */
    public function getExperimentResultData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentResultDataWithOptions($request, $runtime);
    }

    /**
     * @summary Get Resource Information
     *  *
     * @param GetResourceRequest $request GetResourceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResource',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Resource Information
     *  *
     * @param GetResourceRequest $request GetResourceRequest
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询测试计划模板资源预测结果
     *  *
     * @param GetResourcePredictResultRequest $request GetResourcePredictResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourcePredictResultResponse GetResourcePredictResultResponse
     */
    public function getResourcePredictResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourcePredictResult',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourcePredictResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询测试计划模板资源预测结果
     *  *
     * @param GetResourcePredictResultRequest $request GetResourcePredictResultRequest
     *
     * @return GetResourcePredictResultResponse GetResourcePredictResultResponse
     */
    public function getResourcePredictResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePredictResultWithOptions($request, $runtime);
    }

    /**
     * @summary 通过id获取负载信息
     *  *
     * @param GetWorkloadRequest $request GetWorkloadRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkloadResponse GetWorkloadResponse
     */
    public function getWorkloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workloadId)) {
            $query['WorkloadId'] = $request->workloadId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkload',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过id获取负载信息
     *  *
     * @param GetWorkloadRequest $request GetWorkloadRequest
     *
     * @return GetWorkloadResponse GetWorkloadResponse
     */
    public function getWorkload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadWithOptions($request, $runtime);
    }

    /**
     * @summary Query Test Plan Template List
     *  *
     * @param ListExperimentPlanTemplatesRequest $request ListExperimentPlanTemplatesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentPlanTemplatesResponse ListExperimentPlanTemplatesResponse
     */
    public function listExperimentPlanTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privacyLevel)) {
            $query['PrivacyLevel'] = $request->privacyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperimentPlanTemplates',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExperimentPlanTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Test Plan Template List
     *  *
     * @param ListExperimentPlanTemplatesRequest $request ListExperimentPlanTemplatesRequest
     *
     * @return ListExperimentPlanTemplatesResponse ListExperimentPlanTemplatesResponse
     */
    public function listExperimentPlanTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentPlanTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Query Experiment Plan List
     *  *
     * @param ListExperimentPlansRequest $tmpReq  ListExperimentPlansRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentPlansResponse ListExperimentPlansResponse
     */
    public function listExperimentPlansWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListExperimentPlansShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->planTaskStatus)) {
            $request->planTaskStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->planTaskStatus, 'PlanTaskStatus', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceName)) {
            $request->resourceNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceName, 'ResourceName', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->creatTimeOrder)) {
            $query['CreatTimeOrder'] = $request->creatTimeOrder;
        }
        if (!Utils::isUnset($request->endTimeOrder)) {
            $query['EndTimeOrder'] = $request->endTimeOrder;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTimeOrder)) {
            $query['StartTimeOrder'] = $request->startTimeOrder;
        }
        $body = [];
        if (!Utils::isUnset($request->planTaskStatusShrink)) {
            $body['PlanTaskStatus'] = $request->planTaskStatusShrink;
        }
        if (!Utils::isUnset($request->resourceNameShrink)) {
            $body['ResourceName'] = $request->resourceNameShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListExperimentPlans',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExperimentPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Experiment Plan List
     *  *
     * @param ListExperimentPlansRequest $request ListExperimentPlansRequest
     *
     * @return ListExperimentPlansResponse ListExperimentPlansResponse
     */
    public function listExperimentPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentPlansWithOptions($request, $runtime);
    }

    /**
     * @summary Query the experiment list based on the plan ID
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperiments',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the experiment list based on the plan ID
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取负载列表
     *  *
     * @param ListWorkloadsRequest $request ListWorkloadsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkloadsResponse ListWorkloadsResponse
     */
    public function listWorkloadsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkloads',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取负载列表
     *  *
     * @param ListWorkloadsRequest $request ListWorkloadsRequest
     *
     * @return ListWorkloadsResponse ListWorkloadsResponse
     */
    public function listWorkloads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkloadsWithOptions($request, $runtime);
    }

    /**
     * @summary 停止实验
     *  *
     * @param StopExperimentRequest $request StopExperimentRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopExperimentResponse StopExperimentResponse
     */
    public function stopExperimentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopExperiment',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止实验
     *  *
     * @param StopExperimentRequest $request StopExperimentRequest
     *
     * @return StopExperimentResponse StopExperimentResponse
     */
    public function stopExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopExperimentWithOptions($request, $runtime);
    }

    /**
     * @summary Resource Connectivity Test
     *  *
     * @param ValidateResourceRequest $tmpReq  ValidateResourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateResourceResponse ValidateResourceResponse
     */
    public function validateResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ValidateResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userAccessParam)) {
            $request->userAccessParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userAccessParam, 'UserAccessParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->userAccessParamShrink)) {
            $body['UserAccessParam'] = $request->userAccessParamShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValidateResource',
            'version'     => '2023-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resource Connectivity Test
     *  *
     * @param ValidateResourceRequest $request ValidateResourceRequest
     *
     * @return ValidateResourceResponse ValidateResourceResponse
     */
    public function validateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateResourceWithOptions($request, $runtime);
    }
}
