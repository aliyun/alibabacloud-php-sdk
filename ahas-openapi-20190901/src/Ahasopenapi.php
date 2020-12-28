<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\AddApplicationEmpIdRelationRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\AddApplicationEmpIdRelationResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CheckExperimentPermissionForMkRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CheckExperimentPermissionForMkResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CheckExperimentRunnableRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CheckExperimentRunnableResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateDegradeRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateDegradeRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateExperimentRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateExperimentResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateFlowRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateFlowRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateHotParamItemsRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateHotParamItemsResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateHotParamRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateHotParamRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateIsolationRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateIsolationRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateSystemRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\CreateSystemRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteApplicationEmpIdRelationRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteApplicationEmpIdRelationResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteDegradeRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteDegradeRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteFlowRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteFlowRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteHotParamRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteHotParamRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteIsolationRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteIsolationRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteSystemRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DeleteSystemRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableDegradeRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableDegradeRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableFlowRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableFlowRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableHotParamRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableHotParamRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableIsolationRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableIsolationRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableSystemRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\DisableSystemRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableDegradeRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableDegradeRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableFlowRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableFlowRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableHotParamRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableHotParamRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableIsolationRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableIsolationRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableSystemRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\EnableSystemRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ExecuteExperimentRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ExecuteExperimentResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\FinishExperimentTaskRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\FinishExperimentTaskResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetActivityTaskRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetActivityTaskResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetApplicationEmpIdRelationRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetApplicationEmpIdRelationResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetExperimentMetaRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetExperimentMetaResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetExperimentTaskRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetExperimentTaskResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetHitCountRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetHitCountResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetLicenseKeyRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetLicenseKeyResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfAppRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfAppResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfResourceRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfResourceResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetSentinelAppSumMetricRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetSentinelAppSumMetricResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetUserApplicationsRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetUserApplicationsResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ImportExperimentFromMkRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ImportExperimentFromMkResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListActiveAppsRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListActiveAppsResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListDegradeRulesOfAppRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListDegradeRulesOfAppResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListDegradeRulesOfResourceRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListDegradeRulesOfResourceResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListExperimentMetasRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListExperimentMetasResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListFlowRulesOfAppRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListFlowRulesOfAppResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListFlowRulesOfResourceRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListFlowRulesOfResourceResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfAppRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfAppResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfResourceRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfResourceResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListIsolationRulesOfAppRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListIsolationRulesOfAppResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListIsolationRulesOfResourceRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListIsolationRulesOfResourceResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListSystemRulesRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListSystemRulesResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyDegradeRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyDegradeRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyFlowRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyFlowRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyHotParamRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyHotParamRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyIsolationRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyIsolationRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifySystemRuleRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifySystemRuleResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\OpenAhasServiceRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\OpenAhasServiceResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\PushExperimentTaskRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\PushExperimentTaskResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentsByEmpIdRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentsByEmpIdResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentTaskIdByExpIdRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentTaskIdByExpIdResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\SearchApplicationScopesRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\SearchApplicationScopesResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\SearchUserApplicationsRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\SearchUserApplicationsResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\UpdateExperimentBasicInfoRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\UpdateExperimentBasicInfoResponse;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\UpdateExperimentRequest;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\UpdateExperimentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ahasopenapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'     => 'ahas.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou' => 'ahas.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'    => 'ahas.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'    => 'ahas.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'    => 'ahas.cn-shenzhen.aliyuncs.com',
            'ap-southeast-1' => 'ahas.ap-southeast-1.aliyuncs.com',
            'cn-hongkong'    => 'ahas.cn-hongkong.aliyuncs.com',
            'eu-central-1'   => 'ahas.eu-central-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ahas-openapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddApplicationEmpIdRelationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddApplicationEmpIdRelationResponse
     */
    public function addApplicationEmpIdRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddApplicationEmpIdRelationResponse::fromMap($this->doRPCRequest('AddApplicationEmpIdRelation', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddApplicationEmpIdRelationRequest $request
     *
     * @return AddApplicationEmpIdRelationResponse
     */
    public function addApplicationEmpIdRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApplicationEmpIdRelationWithOptions($request, $runtime);
    }

    /**
     * @param CheckExperimentPermissionForMkRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CheckExperimentPermissionForMkResponse
     */
    public function checkExperimentPermissionForMkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckExperimentPermissionForMkResponse::fromMap($this->doRPCRequest('CheckExperimentPermissionForMk', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckExperimentPermissionForMkRequest $request
     *
     * @return CheckExperimentPermissionForMkResponse
     */
    public function checkExperimentPermissionForMk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExperimentPermissionForMkWithOptions($request, $runtime);
    }

    /**
     * @param CheckExperimentRunnableRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckExperimentRunnableResponse
     */
    public function checkExperimentRunnableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckExperimentRunnableResponse::fromMap($this->doRPCRequest('CheckExperimentRunnable', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckExperimentRunnableRequest $request
     *
     * @return CheckExperimentRunnableResponse
     */
    public function checkExperimentRunnable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExperimentRunnableWithOptions($request, $runtime);
    }

    /**
     * @param CreateDegradeRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDegradeRuleResponse
     */
    public function createDegradeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDegradeRuleResponse::fromMap($this->doRPCRequest('CreateDegradeRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDegradeRuleRequest $request
     *
     * @return CreateDegradeRuleResponse
     */
    public function createDegradeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDegradeRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateExperimentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateExperimentResponse::fromMap($this->doRPCRequest('CreateExperiment', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateExperimentRequest $request
     *
     * @return CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExperimentWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFlowRuleResponse
     */
    public function createFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowRuleResponse::fromMap($this->doRPCRequest('CreateFlowRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowRuleRequest $request
     *
     * @return CreateFlowRuleResponse
     */
    public function createFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateHotParamItemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHotParamItemsResponse
     */
    public function createHotParamItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHotParamItemsResponse::fromMap($this->doRPCRequest('CreateHotParamItems', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateHotParamItemsRequest $request
     *
     * @return CreateHotParamItemsResponse
     */
    public function createHotParamItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHotParamItemsWithOptions($request, $runtime);
    }

    /**
     * @param CreateHotParamRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHotParamRuleResponse
     */
    public function createHotParamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHotParamRuleResponse::fromMap($this->doRPCRequest('CreateHotParamRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateHotParamRuleRequest $request
     *
     * @return CreateHotParamRuleResponse
     */
    public function createHotParamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHotParamRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateIsolationRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateIsolationRuleResponse
     */
    public function createIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIsolationRuleResponse::fromMap($this->doRPCRequest('CreateIsolationRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateIsolationRuleRequest $request
     *
     * @return CreateIsolationRuleResponse
     */
    public function createIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSystemRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSystemRuleResponse
     */
    public function createSystemRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSystemRuleResponse::fromMap($this->doRPCRequest('CreateSystemRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSystemRuleRequest $request
     *
     * @return CreateSystemRuleResponse
     */
    public function createSystemRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSystemRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApplicationEmpIdRelationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteApplicationEmpIdRelationResponse
     */
    public function deleteApplicationEmpIdRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteApplicationEmpIdRelationResponse::fromMap($this->doRPCRequest('DeleteApplicationEmpIdRelation', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteApplicationEmpIdRelationRequest $request
     *
     * @return DeleteApplicationEmpIdRelationResponse
     */
    public function deleteApplicationEmpIdRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationEmpIdRelationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDegradeRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDegradeRuleResponse
     */
    public function deleteDegradeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDegradeRuleResponse::fromMap($this->doRPCRequest('DeleteDegradeRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDegradeRuleRequest $request
     *
     * @return DeleteDegradeRuleResponse
     */
    public function deleteDegradeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDegradeRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFlowRuleResponse
     */
    public function deleteFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowRuleResponse::fromMap($this->doRPCRequest('DeleteFlowRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowRuleRequest $request
     *
     * @return DeleteFlowRuleResponse
     */
    public function deleteFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHotParamRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHotParamRuleResponse
     */
    public function deleteHotParamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHotParamRuleResponse::fromMap($this->doRPCRequest('DeleteHotParamRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHotParamRuleRequest $request
     *
     * @return DeleteHotParamRuleResponse
     */
    public function deleteHotParamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHotParamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIsolationRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteIsolationRuleResponse
     */
    public function deleteIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIsolationRuleResponse::fromMap($this->doRPCRequest('DeleteIsolationRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteIsolationRuleRequest $request
     *
     * @return DeleteIsolationRuleResponse
     */
    public function deleteIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSystemRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSystemRuleResponse
     */
    public function deleteSystemRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSystemRuleResponse::fromMap($this->doRPCRequest('DeleteSystemRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSystemRuleRequest $request
     *
     * @return DeleteSystemRuleResponse
     */
    public function deleteSystemRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSystemRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DisableDegradeRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableDegradeRuleResponse
     */
    public function disableDegradeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDegradeRuleResponse::fromMap($this->doRPCRequest('DisableDegradeRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableDegradeRuleRequest $request
     *
     * @return DisableDegradeRuleResponse
     */
    public function disableDegradeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDegradeRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableFlowRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableFlowRuleResponse
     */
    public function disableFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableFlowRuleResponse::fromMap($this->doRPCRequest('DisableFlowRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableFlowRuleRequest $request
     *
     * @return DisableFlowRuleResponse
     */
    public function disableFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableHotParamRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableHotParamRuleResponse
     */
    public function disableHotParamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableHotParamRuleResponse::fromMap($this->doRPCRequest('DisableHotParamRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableHotParamRuleRequest $request
     *
     * @return DisableHotParamRuleResponse
     */
    public function disableHotParamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableHotParamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableIsolationRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DisableIsolationRuleResponse
     */
    public function disableIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableIsolationRuleResponse::fromMap($this->doRPCRequest('DisableIsolationRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableIsolationRuleRequest $request
     *
     * @return DisableIsolationRuleResponse
     */
    public function disableIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableSystemRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableSystemRuleResponse
     */
    public function disableSystemRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSystemRuleResponse::fromMap($this->doRPCRequest('DisableSystemRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableSystemRuleRequest $request
     *
     * @return DisableSystemRuleResponse
     */
    public function disableSystemRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSystemRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableDegradeRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableDegradeRuleResponse
     */
    public function enableDegradeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableDegradeRuleResponse::fromMap($this->doRPCRequest('EnableDegradeRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableDegradeRuleRequest $request
     *
     * @return EnableDegradeRuleResponse
     */
    public function enableDegradeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDegradeRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableFlowRuleResponse
     */
    public function enableFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableFlowRuleResponse::fromMap($this->doRPCRequest('EnableFlowRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableFlowRuleRequest $request
     *
     * @return EnableFlowRuleResponse
     */
    public function enableFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableHotParamRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableHotParamRuleResponse
     */
    public function enableHotParamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableHotParamRuleResponse::fromMap($this->doRPCRequest('EnableHotParamRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableHotParamRuleRequest $request
     *
     * @return EnableHotParamRuleResponse
     */
    public function enableHotParamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHotParamRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableIsolationRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableIsolationRuleResponse
     */
    public function enableIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableIsolationRuleResponse::fromMap($this->doRPCRequest('EnableIsolationRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableIsolationRuleRequest $request
     *
     * @return EnableIsolationRuleResponse
     */
    public function enableIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableSystemRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnableSystemRuleResponse
     */
    public function enableSystemRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSystemRuleResponse::fromMap($this->doRPCRequest('EnableSystemRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableSystemRuleRequest $request
     *
     * @return EnableSystemRuleResponse
     */
    public function enableSystemRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSystemRuleWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteExperimentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteExperimentResponse
     */
    public function executeExperimentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteExperimentResponse::fromMap($this->doRPCRequest('ExecuteExperiment', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteExperimentRequest $request
     *
     * @return ExecuteExperimentResponse
     */
    public function executeExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeExperimentWithOptions($request, $runtime);
    }

    /**
     * @param FinishExperimentTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FinishExperimentTaskResponse
     */
    public function finishExperimentTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FinishExperimentTaskResponse::fromMap($this->doRPCRequest('FinishExperimentTask', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FinishExperimentTaskRequest $request
     *
     * @return FinishExperimentTaskResponse
     */
    public function finishExperimentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishExperimentTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetActivityTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetActivityTaskResponse
     */
    public function getActivityTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetActivityTaskResponse::fromMap($this->doRPCRequest('GetActivityTask', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetActivityTaskRequest $request
     *
     * @return GetActivityTaskResponse
     */
    public function getActivityTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getActivityTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetApplicationEmpIdRelationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetApplicationEmpIdRelationResponse
     */
    public function getApplicationEmpIdRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetApplicationEmpIdRelationResponse::fromMap($this->doRPCRequest('GetApplicationEmpIdRelation', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetApplicationEmpIdRelationRequest $request
     *
     * @return GetApplicationEmpIdRelationResponse
     */
    public function getApplicationEmpIdRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationEmpIdRelationWithOptions($request, $runtime);
    }

    /**
     * @param GetExperimentMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetExperimentMetaResponse
     */
    public function getExperimentMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetExperimentMetaResponse::fromMap($this->doRPCRequest('GetExperimentMeta', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetExperimentMetaRequest $request
     *
     * @return GetExperimentMetaResponse
     */
    public function getExperimentMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetExperimentTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetExperimentTaskResponse
     */
    public function getExperimentTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetExperimentTaskResponse::fromMap($this->doRPCRequest('GetExperimentTask', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetExperimentTaskRequest $request
     *
     * @return GetExperimentTaskResponse
     */
    public function getExperimentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExperimentTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetHitCountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetHitCountResponse
     */
    public function getHitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHitCountResponse::fromMap($this->doRPCRequest('GetHitCount', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHitCountRequest $request
     *
     * @return GetHitCountResponse
     */
    public function getHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHitCountWithOptions($request, $runtime);
    }

    /**
     * @param GetLicenseKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLicenseKeyResponse
     */
    public function getLicenseKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLicenseKeyResponse::fromMap($this->doRPCRequest('GetLicenseKey', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLicenseKeyRequest $request
     *
     * @return GetLicenseKeyResponse
     */
    public function getLicenseKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLicenseKeyWithOptions($request, $runtime);
    }

    /**
     * @param GetMetricsOfAppRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMetricsOfAppResponse
     */
    public function getMetricsOfAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMetricsOfAppResponse::fromMap($this->doRPCRequest('GetMetricsOfApp', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMetricsOfAppRequest $request
     *
     * @return GetMetricsOfAppResponse
     */
    public function getMetricsOfApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetricsOfAppWithOptions($request, $runtime);
    }

    /**
     * @param GetMetricsOfResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetricsOfResourceResponse
     */
    public function getMetricsOfResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMetricsOfResourceResponse::fromMap($this->doRPCRequest('GetMetricsOfResource', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMetricsOfResourceRequest $request
     *
     * @return GetMetricsOfResourceResponse
     */
    public function getMetricsOfResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetricsOfResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetSentinelAppSumMetricRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSentinelAppSumMetricResponse
     */
    public function getSentinelAppSumMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSentinelAppSumMetricResponse::fromMap($this->doRPCRequest('GetSentinelAppSumMetric', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSentinelAppSumMetricRequest $request
     *
     * @return GetSentinelAppSumMetricResponse
     */
    public function getSentinelAppSumMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSentinelAppSumMetricWithOptions($request, $runtime);
    }

    /**
     * @param GetUserApplicationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserApplicationsResponse
     */
    public function getUserApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserApplicationsResponse::fromMap($this->doRPCRequest('GetUserApplications', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserApplicationsRequest $request
     *
     * @return GetUserApplicationsResponse
     */
    public function getUserApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param ImportExperimentFromMkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ImportExperimentFromMkResponse
     */
    public function importExperimentFromMkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportExperimentFromMkResponse::fromMap($this->doRPCRequest('ImportExperimentFromMk', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportExperimentFromMkRequest $request
     *
     * @return ImportExperimentFromMkResponse
     */
    public function importExperimentFromMk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importExperimentFromMkWithOptions($request, $runtime);
    }

    /**
     * @param ListActiveAppsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListActiveAppsResponse
     */
    public function listActiveAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListActiveAppsResponse::fromMap($this->doRPCRequest('ListActiveApps', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListActiveAppsRequest $request
     *
     * @return ListActiveAppsResponse
     */
    public function listActiveApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActiveAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListDegradeRulesOfAppRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDegradeRulesOfAppResponse
     */
    public function listDegradeRulesOfAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDegradeRulesOfAppResponse::fromMap($this->doRPCRequest('ListDegradeRulesOfApp', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDegradeRulesOfAppRequest $request
     *
     * @return ListDegradeRulesOfAppResponse
     */
    public function listDegradeRulesOfApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDegradeRulesOfAppWithOptions($request, $runtime);
    }

    /**
     * @param ListDegradeRulesOfResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDegradeRulesOfResourceResponse
     */
    public function listDegradeRulesOfResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDegradeRulesOfResourceResponse::fromMap($this->doRPCRequest('ListDegradeRulesOfResource', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDegradeRulesOfResourceRequest $request
     *
     * @return ListDegradeRulesOfResourceResponse
     */
    public function listDegradeRulesOfResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDegradeRulesOfResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListExperimentMetasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListExperimentMetasResponse
     */
    public function listExperimentMetasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExperimentMetasResponse::fromMap($this->doRPCRequest('ListExperimentMetas', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListExperimentMetasRequest $request
     *
     * @return ListExperimentMetasResponse
     */
    public function listExperimentMetas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExperimentMetasWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRulesOfAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowRulesOfAppResponse
     */
    public function listFlowRulesOfAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowRulesOfAppResponse::fromMap($this->doRPCRequest('ListFlowRulesOfApp', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowRulesOfAppRequest $request
     *
     * @return ListFlowRulesOfAppResponse
     */
    public function listFlowRulesOfApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowRulesOfAppWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRulesOfResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFlowRulesOfResourceResponse
     */
    public function listFlowRulesOfResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowRulesOfResourceResponse::fromMap($this->doRPCRequest('ListFlowRulesOfResource', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowRulesOfResourceRequest $request
     *
     * @return ListFlowRulesOfResourceResponse
     */
    public function listFlowRulesOfResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowRulesOfResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListHotParamRulesOfAppRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListHotParamRulesOfAppResponse
     */
    public function listHotParamRulesOfAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHotParamRulesOfAppResponse::fromMap($this->doRPCRequest('ListHotParamRulesOfApp', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHotParamRulesOfAppRequest $request
     *
     * @return ListHotParamRulesOfAppResponse
     */
    public function listHotParamRulesOfApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotParamRulesOfAppWithOptions($request, $runtime);
    }

    /**
     * @param ListHotParamRulesOfResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListHotParamRulesOfResourceResponse
     */
    public function listHotParamRulesOfResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHotParamRulesOfResourceResponse::fromMap($this->doRPCRequest('ListHotParamRulesOfResource', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHotParamRulesOfResourceRequest $request
     *
     * @return ListHotParamRulesOfResourceResponse
     */
    public function listHotParamRulesOfResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotParamRulesOfResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListIsolationRulesOfAppRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIsolationRulesOfAppResponse
     */
    public function listIsolationRulesOfAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIsolationRulesOfAppResponse::fromMap($this->doRPCRequest('ListIsolationRulesOfApp', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIsolationRulesOfAppRequest $request
     *
     * @return ListIsolationRulesOfAppResponse
     */
    public function listIsolationRulesOfApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIsolationRulesOfAppWithOptions($request, $runtime);
    }

    /**
     * @param ListIsolationRulesOfResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListIsolationRulesOfResourceResponse
     */
    public function listIsolationRulesOfResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIsolationRulesOfResourceResponse::fromMap($this->doRPCRequest('ListIsolationRulesOfResource', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIsolationRulesOfResourceRequest $request
     *
     * @return ListIsolationRulesOfResourceResponse
     */
    public function listIsolationRulesOfResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIsolationRulesOfResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSystemRulesResponse
     */
    public function listSystemRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSystemRulesResponse::fromMap($this->doRPCRequest('ListSystemRules', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSystemRulesRequest $request
     *
     * @return ListSystemRulesResponse
     */
    public function listSystemRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemRulesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDegradeRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDegradeRuleResponse
     */
    public function modifyDegradeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDegradeRuleResponse::fromMap($this->doRPCRequest('ModifyDegradeRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDegradeRuleRequest $request
     *
     * @return ModifyDegradeRuleResponse
     */
    public function modifyDegradeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDegradeRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyFlowRuleResponse
     */
    public function modifyFlowRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowRuleResponse::fromMap($this->doRPCRequest('ModifyFlowRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowRuleRequest $request
     *
     * @return ModifyFlowRuleResponse
     */
    public function modifyFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHotParamRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyHotParamRuleResponse
     */
    public function modifyHotParamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHotParamRuleResponse::fromMap($this->doRPCRequest('ModifyHotParamRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHotParamRuleRequest $request
     *
     * @return ModifyHotParamRuleResponse
     */
    public function modifyHotParamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHotParamRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIsolationRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyIsolationRuleResponse
     */
    public function modifyIsolationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIsolationRuleResponse::fromMap($this->doRPCRequest('ModifyIsolationRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyIsolationRuleRequest $request
     *
     * @return ModifyIsolationRuleResponse
     */
    public function modifyIsolationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIsolationRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifySystemRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySystemRuleResponse
     */
    public function modifySystemRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySystemRuleResponse::fromMap($this->doRPCRequest('ModifySystemRule', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySystemRuleRequest $request
     *
     * @return ModifySystemRuleResponse
     */
    public function modifySystemRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySystemRuleWithOptions($request, $runtime);
    }

    /**
     * @param OpenAhasServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenAhasServiceResponse
     */
    public function openAhasServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenAhasServiceResponse::fromMap($this->doRPCRequest('OpenAhasService', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenAhasServiceRequest $request
     *
     * @return OpenAhasServiceResponse
     */
    public function openAhasService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAhasServiceWithOptions($request, $runtime);
    }

    /**
     * @param PushExperimentTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PushExperimentTaskResponse
     */
    public function pushExperimentTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushExperimentTaskResponse::fromMap($this->doRPCRequest('PushExperimentTask', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushExperimentTaskRequest $request
     *
     * @return PushExperimentTaskResponse
     */
    public function pushExperimentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushExperimentTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryExperimentsByEmpIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryExperimentsByEmpIdResponse
     */
    public function queryExperimentsByEmpIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryExperimentsByEmpIdResponse::fromMap($this->doRPCRequest('QueryExperimentsByEmpId', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryExperimentsByEmpIdRequest $request
     *
     * @return QueryExperimentsByEmpIdResponse
     */
    public function queryExperimentsByEmpId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExperimentsByEmpIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryExperimentSimpleInfoForMkRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryExperimentSimpleInfoForMkResponse
     */
    public function queryExperimentSimpleInfoForMkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryExperimentSimpleInfoForMkResponse::fromMap($this->doRPCRequest('QueryExperimentSimpleInfoForMk', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryExperimentSimpleInfoForMkRequest $request
     *
     * @return QueryExperimentSimpleInfoForMkResponse
     */
    public function queryExperimentSimpleInfoForMk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExperimentSimpleInfoForMkWithOptions($request, $runtime);
    }

    /**
     * @param QueryExperimentTaskIdByExpIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryExperimentTaskIdByExpIdResponse
     */
    public function queryExperimentTaskIdByExpIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryExperimentTaskIdByExpIdResponse::fromMap($this->doRPCRequest('QueryExperimentTaskIdByExpId', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryExperimentTaskIdByExpIdRequest $request
     *
     * @return QueryExperimentTaskIdByExpIdResponse
     */
    public function queryExperimentTaskIdByExpId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExperimentTaskIdByExpIdWithOptions($request, $runtime);
    }

    /**
     * @param SearchApplicationScopesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchApplicationScopesResponse
     */
    public function searchApplicationScopesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchApplicationScopesResponse::fromMap($this->doRPCRequest('SearchApplicationScopes', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchApplicationScopesRequest $request
     *
     * @return SearchApplicationScopesResponse
     */
    public function searchApplicationScopes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchApplicationScopesWithOptions($request, $runtime);
    }

    /**
     * @param SearchUserApplicationsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchUserApplicationsResponse
     */
    public function searchUserApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchUserApplicationsResponse::fromMap($this->doRPCRequest('SearchUserApplications', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchUserApplicationsRequest $request
     *
     * @return SearchUserApplicationsResponse
     */
    public function searchUserApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchUserApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateExperimentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateExperimentResponse
     */
    public function updateExperimentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateExperimentResponse::fromMap($this->doRPCRequest('UpdateExperiment', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateExperimentRequest $request
     *
     * @return UpdateExperimentResponse
     */
    public function updateExperiment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExperimentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateExperimentBasicInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateExperimentBasicInfoResponse
     */
    public function updateExperimentBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateExperimentBasicInfoResponse::fromMap($this->doRPCRequest('UpdateExperimentBasicInfo', '2019-09-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateExperimentBasicInfoRequest $request
     *
     * @return UpdateExperimentBasicInfoResponse
     */
    public function updateExperimentBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExperimentBasicInfoWithOptions($request, $runtime);
    }
}
