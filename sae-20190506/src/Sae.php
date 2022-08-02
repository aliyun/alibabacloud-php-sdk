<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortAndRollbackChangeOrderRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortAndRollbackChangeOrderResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortChangeOrderRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortChangeOrderResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStartApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStartApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStopApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStopApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BindSlbRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BindSlbResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ConfirmPipelineBatchRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ConfirmPipelineBatchResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateConfigMapRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateConfigMapResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateGreyTagRouteRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateGreyTagRouteResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateIngressRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateIngressResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteConfigMapRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteConfigMapResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteGreyTagRouteRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteGreyTagRouteResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteIngressRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteIngressResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeployApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeployApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationGroupsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationGroupsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationImageRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationImageResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationStatusRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationStatusResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeComponentsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeComponentsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigMapRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigMapResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeEdasContainersResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeInstanceLogRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeInstanceLogResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeInstanceSpecificationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobStatusRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobStatusResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceListRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceListResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceResourcesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceResourcesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DisableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DisableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\EnableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\EnableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ExecJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ExecJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesPageRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesPageResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppVersionsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppVersionsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListChangeOrdersRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListChangeOrdersResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListConsumedServicesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListConsumedServicesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespaceChangeOrdersRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespaceChangeOrdersResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListPublishedServicesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListPublishedServicesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\OpenSaeServiceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ReduceApplicationCapacityByInstanceIdsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ReduceApplicationCapacityByInstanceIdsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\RescaleApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\RescaleApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\RescaleApplicationVerticallyRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\RescaleApplicationVerticallyResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\RestartApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\RestartApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\RestartInstancesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\RestartInstancesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\RollbackApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\RollbackApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\StartApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\StartApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\StopApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\StopApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UnbindSlbRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UnbindSlbResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationDescriptionRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationDescriptionResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationVswitchesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationVswitchesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateAppSecurityGroupRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateAppSecurityGroupResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateConfigMapRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateConfigMapResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateGreyTagRouteRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateGreyTagRouteResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateIngressRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateIngressResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceVpcRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceVpcResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sae extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sae', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbortAndRollbackChangeOrderRequest $request
     *
     * @return AbortAndRollbackChangeOrderResponse
     */
    public function abortAndRollbackChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortAndRollbackChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AbortAndRollbackChangeOrderRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AbortAndRollbackChangeOrderResponse
     */
    public function abortAndRollbackChangeOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortAndRollbackChangeOrder',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/AbortAndRollbackChangeOrder',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AbortAndRollbackChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbortChangeOrderRequest $request
     *
     * @return AbortChangeOrderResponse
     */
    public function abortChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AbortChangeOrderRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AbortChangeOrderResponse
     */
    public function abortChangeOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortChangeOrder',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/AbortChangeOrder',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AbortChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStartApplicationsRequest $request
     *
     * @return BatchStartApplicationsResponse
     */
    public function batchStartApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchStartApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchStartApplicationsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return BatchStartApplicationsResponse
     */
    public function batchStartApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStartApplications',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/batchStartApplications',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchStartApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStopApplicationsRequest $request
     *
     * @return BatchStopApplicationsResponse
     */
    public function batchStopApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchStopApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchStopApplicationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BatchStopApplicationsResponse
     */
    public function batchStopApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStopApplications',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/batchStopApplications',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchStopApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindSlbRequest $request
     *
     * @return BindSlbResponse
     */
    public function bindSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BindSlbRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BindSlbResponse
     */
    public function bindSlbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->internet)) {
            $query['Internet'] = $request->internet;
        }
        if (!Utils::isUnset($request->internetSlbId)) {
            $query['InternetSlbId'] = $request->internetSlbId;
        }
        if (!Utils::isUnset($request->intranet)) {
            $query['Intranet'] = $request->intranet;
        }
        if (!Utils::isUnset($request->intranetSlbId)) {
            $query['IntranetSlbId'] = $request->intranetSlbId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindSlb',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/slb',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmPipelineBatchRequest $request
     *
     * @return ConfirmPipelineBatchResponse
     */
    public function confirmPipelineBatch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmPipelineBatchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ConfirmPipelineBatchRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ConfirmPipelineBatchResponse
     */
    public function confirmPipelineBatchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->confirm)) {
            $query['Confirm'] = $request->confirm;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmPipelineBatch',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/ConfirmPipelineBatch',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfirmPipelineBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrAssumeRoleArn)) {
            $query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }
        if (!Utils::isUnset($request->appDescription)) {
            $query['AppDescription'] = $request->appDescription;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->autoConfig)) {
            $query['AutoConfig'] = $request->autoConfig;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            $query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->customHostAlias)) {
            $query['CustomHostAlias'] = $request->customHostAlias;
        }
        if (!Utils::isUnset($request->deploy)) {
            $query['Deploy'] = $request->deploy;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            $query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->jarStartArgs)) {
            $query['JarStartArgs'] = $request->jarStartArgs;
        }
        if (!Utils::isUnset($request->jarStartOptions)) {
            $query['JarStartOptions'] = $request->jarStartOptions;
        }
        if (!Utils::isUnset($request->jdk)) {
            $query['Jdk'] = $request->jdk;
        }
        if (!Utils::isUnset($request->kafkaConfigs)) {
            $query['KafkaConfigs'] = $request->kafkaConfigs;
        }
        if (!Utils::isUnset($request->liveness)) {
            $query['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->mountDesc)) {
            $query['MountDesc'] = $request->mountDesc;
        }
        if (!Utils::isUnset($request->mountHost)) {
            $query['MountHost'] = $request->mountHost;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->nasId)) {
            $query['NasId'] = $request->nasId;
        }
        if (!Utils::isUnset($request->packageType)) {
            $query['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->packageUrl)) {
            $query['PackageUrl'] = $request->packageUrl;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            $query['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->phpArmsConfigLocation)) {
            $query['PhpArmsConfigLocation'] = $request->phpArmsConfigLocation;
        }
        if (!Utils::isUnset($request->phpConfigLocation)) {
            $query['PhpConfigLocation'] = $request->phpConfigLocation;
        }
        if (!Utils::isUnset($request->postStart)) {
            $query['PostStart'] = $request->postStart;
        }
        if (!Utils::isUnset($request->preStop)) {
            $query['PreStop'] = $request->preStop;
        }
        if (!Utils::isUnset($request->programmingLanguage)) {
            $query['ProgrammingLanguage'] = $request->programmingLanguage;
        }
        if (!Utils::isUnset($request->readiness)) {
            $query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            $query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->timezone)) {
            $query['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->tomcatConfig)) {
            $query['TomcatConfig'] = $request->tomcatConfig;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->warStartOptions)) {
            $query['WarStartOptions'] = $request->warStartOptions;
        }
        if (!Utils::isUnset($request->webContainer)) {
            $query['WebContainer'] = $request->webContainer;
        }
        $body = [];
        if (!Utils::isUnset($request->acrInstanceId)) {
            $body['AcrInstanceId'] = $request->acrInstanceId;
        }
        if (!Utils::isUnset($request->associateEip)) {
            $body['AssociateEip'] = $request->associateEip;
        }
        if (!Utils::isUnset($request->configMapMountDesc)) {
            $body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }
        if (!Utils::isUnset($request->ossAkId)) {
            $body['OssAkId'] = $request->ossAkId;
        }
        if (!Utils::isUnset($request->ossAkSecret)) {
            $body['OssAkSecret'] = $request->ossAkSecret;
        }
        if (!Utils::isUnset($request->ossMountDescs)) {
            $body['OssMountDescs'] = $request->ossMountDescs;
        }
        if (!Utils::isUnset($request->phpConfig)) {
            $body['PhpConfig'] = $request->phpConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/createApplication',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApplicationScalingRuleRequest $request
     *
     * @return CreateApplicationScalingRuleResponse
     */
    public function createApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateApplicationScalingRuleResponse
     */
    public function createApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->minReadyInstanceRatio)) {
            $query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }
        if (!Utils::isUnset($request->minReadyInstances)) {
            $query['MinReadyInstances'] = $request->minReadyInstances;
        }
        if (!Utils::isUnset($request->scalingRuleEnable)) {
            $query['ScalingRuleEnable'] = $request->scalingRuleEnable;
        }
        if (!Utils::isUnset($request->scalingRuleMetric)) {
            $query['ScalingRuleMetric'] = $request->scalingRuleMetric;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        if (!Utils::isUnset($request->scalingRuleTimer)) {
            $query['ScalingRuleTimer'] = $request->scalingRuleTimer;
        }
        if (!Utils::isUnset($request->scalingRuleType)) {
            $query['ScalingRuleType'] = $request->scalingRuleType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicationScalingRule',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/applicationScalingRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigMapRequest $request
     *
     * @return CreateConfigMapResponse
     */
    public function createConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateConfigMapRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateConfigMapResponse
     */
    public function createConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigMap',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/configmap/configMap',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGreyTagRouteRequest $request
     *
     * @return CreateGreyTagRouteResponse
     */
    public function createGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateGreyTagRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateGreyTagRouteResponse
     */
    public function createGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dubboRules)) {
            $query['DubboRules'] = $request->dubboRules;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scRules)) {
            $query['ScRules'] = $request->scRules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGreyTagRoute',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/tagroute/greyTagRoute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIngressRequest $request
     *
     * @return CreateIngressResponse
     */
    public function createIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIngressRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateIngressResponse
     */
    public function createIngressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->defaultRule)) {
            $query['DefaultRule'] = $request->defaultRule;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalanceType)) {
            $query['LoadBalanceType'] = $request->loadBalanceType;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        $body = [];
        if (!Utils::isUnset($request->rules)) {
            $body['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIngress',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/ingress/Ingress',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceDescription)) {
            $query['NamespaceDescription'] = $request->namespaceDescription;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->namespaceName)) {
            $query['NamespaceName'] = $request->namespaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/namespace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/deleteApplication',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApplicationScalingRuleRequest $request
     *
     * @return DeleteApplicationScalingRuleResponse
     */
    public function deleteApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteApplicationScalingRuleResponse
     */
    public function deleteApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplicationScalingRule',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/applicationScalingRule',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConfigMapRequest $request
     *
     * @return DeleteConfigMapResponse
     */
    public function deleteConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteConfigMapRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteConfigMapResponse
     */
    public function deleteConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configMapId)) {
            $query['ConfigMapId'] = $request->configMapId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigMap',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/configmap/configMap',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGreyTagRouteRequest $request
     *
     * @return DeleteGreyTagRouteResponse
     */
    public function deleteGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteGreyTagRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteGreyTagRouteResponse
     */
    public function deleteGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->greyTagRouteId)) {
            $query['GreyTagRouteId'] = $request->greyTagRouteId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGreyTagRoute',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/tagroute/greyTagRoute',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIngressRequest $request
     *
     * @return DeleteIngressResponse
     */
    public function deleteIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteIngressRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteIngressResponse
     */
    public function deleteIngressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ingressId)) {
            $query['IngressId'] = $request->ingressId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIngress',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/ingress/Ingress',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/namespace',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployApplicationRequest $request
     *
     * @return DeployApplicationResponse
     */
    public function deployApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeployApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeployApplicationResponse
     */
    public function deployApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrAssumeRoleArn)) {
            $query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoEnableApplicationScalingRule)) {
            $query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            $query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->changeOrderDesc)) {
            $query['ChangeOrderDesc'] = $request->changeOrderDesc;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            $query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->customHostAlias)) {
            $query['CustomHostAlias'] = $request->customHostAlias;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            $query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->enableAhas)) {
            $query['EnableAhas'] = $request->enableAhas;
        }
        if (!Utils::isUnset($request->enableGreyTagRoute)) {
            $query['EnableGreyTagRoute'] = $request->enableGreyTagRoute;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->jarStartArgs)) {
            $query['JarStartArgs'] = $request->jarStartArgs;
        }
        if (!Utils::isUnset($request->jarStartOptions)) {
            $query['JarStartOptions'] = $request->jarStartOptions;
        }
        if (!Utils::isUnset($request->jdk)) {
            $query['Jdk'] = $request->jdk;
        }
        if (!Utils::isUnset($request->kafkaConfigs)) {
            $query['KafkaConfigs'] = $request->kafkaConfigs;
        }
        if (!Utils::isUnset($request->liveness)) {
            $query['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->minReadyInstanceRatio)) {
            $query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }
        if (!Utils::isUnset($request->minReadyInstances)) {
            $query['MinReadyInstances'] = $request->minReadyInstances;
        }
        if (!Utils::isUnset($request->mountDesc)) {
            $query['MountDesc'] = $request->mountDesc;
        }
        if (!Utils::isUnset($request->mountHost)) {
            $query['MountHost'] = $request->mountHost;
        }
        if (!Utils::isUnset($request->nasId)) {
            $query['NasId'] = $request->nasId;
        }
        if (!Utils::isUnset($request->packageUrl)) {
            $query['PackageUrl'] = $request->packageUrl;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            $query['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->phpArmsConfigLocation)) {
            $query['PhpArmsConfigLocation'] = $request->phpArmsConfigLocation;
        }
        if (!Utils::isUnset($request->phpConfigLocation)) {
            $query['PhpConfigLocation'] = $request->phpConfigLocation;
        }
        if (!Utils::isUnset($request->postStart)) {
            $query['PostStart'] = $request->postStart;
        }
        if (!Utils::isUnset($request->preStop)) {
            $query['PreStop'] = $request->preStop;
        }
        if (!Utils::isUnset($request->readiness)) {
            $query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            $query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->timezone)) {
            $query['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->tomcatConfig)) {
            $query['TomcatConfig'] = $request->tomcatConfig;
        }
        if (!Utils::isUnset($request->updateStrategy)) {
            $query['UpdateStrategy'] = $request->updateStrategy;
        }
        if (!Utils::isUnset($request->warStartOptions)) {
            $query['WarStartOptions'] = $request->warStartOptions;
        }
        if (!Utils::isUnset($request->webContainer)) {
            $query['WebContainer'] = $request->webContainer;
        }
        $body = [];
        if (!Utils::isUnset($request->acrInstanceId)) {
            $body['AcrInstanceId'] = $request->acrInstanceId;
        }
        if (!Utils::isUnset($request->associateEip)) {
            $body['AssociateEip'] = $request->associateEip;
        }
        if (!Utils::isUnset($request->configMapMountDesc)) {
            $body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }
        if (!Utils::isUnset($request->ossAkId)) {
            $body['OssAkId'] = $request->ossAkId;
        }
        if (!Utils::isUnset($request->ossAkSecret)) {
            $body['OssAkSecret'] = $request->ossAkSecret;
        }
        if (!Utils::isUnset($request->ossMountDescs)) {
            $body['OssMountDescs'] = $request->ossMountDescs;
        }
        if (!Utils::isUnset($request->phpConfig)) {
            $body['PhpConfig'] = $request->phpConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/deployApplication',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppServiceDetailRequest $request
     *
     * @return DescribeAppServiceDetailResponse
     */
    public function describeAppServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppServiceDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAppServiceDetailRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAppServiceDetailResponse
     */
    public function describeAppServiceDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serviceGroup)) {
            $query['ServiceGroup'] = $request->serviceGroup;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppServiceDetail',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/service/describeAppServiceDetail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationConfigRequest $request
     *
     * @return DescribeApplicationConfigResponse
     */
    public function describeApplicationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApplicationConfigResponse
     */
    public function describeApplicationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationConfig',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/describeApplicationConfig',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationGroupsRequest $request
     *
     * @return DescribeApplicationGroupsResponse
     */
    public function describeApplicationGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationGroupsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApplicationGroupsResponse
     */
    public function describeApplicationGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationGroups',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/describeApplicationGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationImageRequest $request
     *
     * @return DescribeApplicationImageResponse
     */
    public function describeApplicationImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationImageRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeApplicationImageResponse
     */
    public function describeApplicationImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationImage',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/container/describeApplicationImage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationInstancesRequest $request
     *
     * @return DescribeApplicationInstancesResponse
     */
    public function describeApplicationInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationInstancesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApplicationInstancesResponse
     */
    public function describeApplicationInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationInstances',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/describeApplicationInstances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationScalingRuleRequest $request
     *
     * @return DescribeApplicationScalingRuleResponse
     */
    public function describeApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationScalingRuleRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeApplicationScalingRuleResponse
     */
    public function describeApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationScalingRule',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/applicationScalingRule',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationScalingRulesRequest $request
     *
     * @return DescribeApplicationScalingRulesResponse
     */
    public function describeApplicationScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationScalingRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationScalingRulesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeApplicationScalingRulesResponse
     */
    public function describeApplicationScalingRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationScalingRules',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/applicationScalingRules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationSlbsRequest $request
     *
     * @return DescribeApplicationSlbsResponse
     */
    public function describeApplicationSlbs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationSlbsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationSlbsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApplicationSlbsResponse
     */
    public function describeApplicationSlbsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationSlbs',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/slb',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationSlbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationStatusRequest $request
     *
     * @return DescribeApplicationStatusResponse
     */
    public function describeApplicationStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationStatusRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApplicationStatusResponse
     */
    public function describeApplicationStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationStatus',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/describeApplicationStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChangeOrderRequest $request
     *
     * @return DescribeChangeOrderResponse
     */
    public function describeChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChangeOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeChangeOrderResponse
     */
    public function describeChangeOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChangeOrder',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/DescribeChangeOrder',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeComponentsRequest $request
     *
     * @return DescribeComponentsResponse
     */
    public function describeComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeComponentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeComponentsResponse
     */
    public function describeComponentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponents',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/resource/components',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConfigMapRequest $request
     *
     * @return DescribeConfigMapResponse
     */
    public function describeConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigMapRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeConfigMapResponse
     */
    public function describeConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configMapId)) {
            $query['ConfigMapId'] = $request->configMapId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigMap',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/configmap/configMap',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConfigurationPriceRequest $request
     *
     * @return DescribeConfigurationPriceResponse
     */
    public function describeConfigurationPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigurationPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigurationPriceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeConfigurationPriceResponse
     */
    public function describeConfigurationPriceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->workload)) {
            $query['Workload'] = $request->workload;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigurationPrice',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/configurationPrice',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigurationPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeEdasContainersResponse
     */
    public function describeEdasContainers()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdasContainersWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEdasContainersResponse
     */
    public function describeEdasContainersWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeEdasContainers',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/resource/edasContainers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEdasContainersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGreyTagRouteRequest $request
     *
     * @return DescribeGreyTagRouteResponse
     */
    public function describeGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeGreyTagRouteRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGreyTagRouteResponse
     */
    public function describeGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->greyTagRouteId)) {
            $query['GreyTagRouteId'] = $request->greyTagRouteId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGreyTagRoute',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/tagroute/greyTagRoute',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIngressRequest $request
     *
     * @return DescribeIngressResponse
     */
    public function describeIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeIngressRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeIngressResponse
     */
    public function describeIngressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ingressId)) {
            $query['IngressId'] = $request->ingressId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIngress',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/ingress/Ingress',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceLogRequest $request
     *
     * @return DescribeInstanceLogResponse
     */
    public function describeInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceLogWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeInstanceLogRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceLogResponse
     */
    public function describeInstanceLogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceLog',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/instance/describeInstanceLog',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeInstanceSpecificationsResponse
     */
    public function describeInstanceSpecifications()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceSpecificationsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceSpecificationsResponse
     */
    public function describeInstanceSpecificationsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpecifications',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/quota/instanceSpecifications',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSpecificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeJobStatusRequest $request
     *
     * @return DescribeJobStatusResponse
     */
    public function describeJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeJobStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeJobStatusRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeJobStatusResponse
     */
    public function describeJobStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJobStatus',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/describeJobStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespaceRequest $request
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespace',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/namespace',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespaceListRequest $request
     *
     * @return DescribeNamespaceListResponse
     */
    public function describeNamespaceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceListRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNamespaceListResponse
     */
    public function describeNamespaceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containCustom)) {
            $query['ContainCustom'] = $request->containCustom;
        }
        if (!Utils::isUnset($request->hybridCloudExclude)) {
            $query['HybridCloudExclude'] = $request->hybridCloudExclude;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaceList',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/namespace/describeNamespaceList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespaceResourcesRequest $request
     *
     * @return DescribeNamespaceResourcesResponse
     */
    public function describeNamespaceResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceResourcesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeNamespaceResourcesResponse
     */
    public function describeNamespaceResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaceResources',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/namespace/describeNamespaceResources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespaceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespacesRequest $request
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespacesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaces',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/namespaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePipelineRequest $request
     *
     * @return DescribePipelineResponse
     */
    public function describePipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribePipelineRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePipelineResponse
     */
    public function describePipelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePipeline',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/DescribePipeline',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/regionConfig',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableApplicationScalingRuleRequest $request
     *
     * @return DisableApplicationScalingRuleResponse
     */
    public function disableApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableApplicationScalingRuleRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableApplicationScalingRuleResponse
     */
    public function disableApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableApplicationScalingRule',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/disableApplicationScalingRule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableApplicationScalingRuleRequest $request
     *
     * @return EnableApplicationScalingRuleResponse
     */
    public function enableApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return EnableApplicationScalingRuleResponse
     */
    public function enableApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableApplicationScalingRule',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/enableApplicationScalingRule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecJobRequest $request
     *
     * @return ExecJobResponse
     */
    public function execJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExecJobRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ExecJobResponse
     */
    public function execJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            $query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->jarStartArgs)) {
            $query['JarStartArgs'] = $request->jarStartArgs;
        }
        if (!Utils::isUnset($request->jarStartOptions)) {
            $query['JarStartOptions'] = $request->jarStartOptions;
        }
        if (!Utils::isUnset($request->warStartOptions)) {
            $query['WarStartOptions'] = $request->warStartOptions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/execJob',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppEventsRequest $request
     *
     * @return ListAppEventsResponse
     */
    public function listAppEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppEventsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAppEventsResponse
     */
    public function listAppEventsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->objectKind)) {
            $query['ObjectKind'] = $request->objectKind;
        }
        if (!Utils::isUnset($request->objectName)) {
            $query['ObjectName'] = $request->objectName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppEvents',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/listAppEvents',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppServicesPageRequest $request
     *
     * @return ListAppServicesPageResponse
     */
    public function listAppServicesPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppServicesPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppServicesPageRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppServicesPageResponse
     */
    public function listAppServicesPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppServicesPage',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/service/listAppServicesPage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppServicesPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppVersionsRequest $request
     *
     * @return ListAppVersionsResponse
     */
    public function listAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppVersionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppVersionsResponse
     */
    public function listAppVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppVersions',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/listAppVersions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListApplicationsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fieldType)) {
            $query['FieldType'] = $request->fieldType;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/listApplications',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChangeOrdersRequest $request
     *
     * @return ListChangeOrdersResponse
     */
    public function listChangeOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangeOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChangeOrdersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListChangeOrdersResponse
     */
    public function listChangeOrdersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->coStatus)) {
            $query['CoStatus'] = $request->coStatus;
        }
        if (!Utils::isUnset($request->coType)) {
            $query['CoType'] = $request->coType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChangeOrders',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/ListChangeOrders',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChangeOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConsumedServicesRequest $request
     *
     * @return ListConsumedServicesResponse
     */
    public function listConsumedServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumedServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListConsumedServicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListConsumedServicesResponse
     */
    public function listConsumedServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConsumedServices',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/service/listConsumedServices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConsumedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGreyTagRouteRequest $request
     *
     * @return ListGreyTagRouteResponse
     */
    public function listGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListGreyTagRouteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListGreyTagRouteResponse
     */
    public function listGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGreyTagRoute',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/tagroute/greyTagRouteList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIngressesRequest $request
     *
     * @return ListIngressesResponse
     */
    public function listIngresses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIngressesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIngressesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListIngressesResponse
     */
    public function listIngressesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIngresses',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/ingress/IngressList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIngressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogConfigsRequest $request
     *
     * @return ListLogConfigsResponse
     */
    public function listLogConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListLogConfigsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListLogConfigsResponse
     */
    public function listLogConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogConfigs',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/log/listLogConfigs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNamespaceChangeOrdersRequest $request
     *
     * @return ListNamespaceChangeOrdersResponse
     */
    public function listNamespaceChangeOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNamespaceChangeOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListNamespaceChangeOrdersRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListNamespaceChangeOrdersResponse
     */
    public function listNamespaceChangeOrdersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coStatus)) {
            $query['CoStatus'] = $request->coStatus;
        }
        if (!Utils::isUnset($request->coType)) {
            $query['CoType'] = $request->coType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamespaceChangeOrders',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/changeorder/listNamespaceChangeOrders',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNamespaceChangeOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNamespacedConfigMapsRequest $request
     *
     * @return ListNamespacedConfigMapsResponse
     */
    public function listNamespacedConfigMaps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNamespacedConfigMapsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListNamespacedConfigMapsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNamespacedConfigMapsResponse
     */
    public function listNamespacedConfigMapsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamespacedConfigMaps',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/configmap/listNamespacedConfigMaps',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNamespacedConfigMapsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublishedServicesRequest $request
     *
     * @return ListPublishedServicesResponse
     */
    public function listPublishedServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPublishedServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListPublishedServicesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPublishedServicesResponse
     */
    public function listPublishedServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublishedServices',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/service/listPublishedServices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPublishedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenSaeServiceResponse
     */
    public function openSaeService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openSaeServiceWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return OpenSaeServiceResponse
     */
    public function openSaeServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'OpenSaeService',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/service/open',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenSaeServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryResourceStaticsRequest $request
     *
     * @return QueryResourceStaticsResponse
     */
    public function queryResourceStatics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryResourceStaticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryResourceStaticsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryResourceStaticsResponse
     */
    public function queryResourceStaticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryResourceStatics',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/quota/queryResourceStatics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryResourceStaticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReduceApplicationCapacityByInstanceIdsRequest $request
     *
     * @return ReduceApplicationCapacityByInstanceIdsResponse
     */
    public function reduceApplicationCapacityByInstanceIds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reduceApplicationCapacityByInstanceIdsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ReduceApplicationCapacityByInstanceIdsRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return ReduceApplicationCapacityByInstanceIdsResponse
     */
    public function reduceApplicationCapacityByInstanceIdsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReduceApplicationCapacityByInstanceIds',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/ScaleInApplicationWithInstanceIds',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReduceApplicationCapacityByInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RescaleApplicationRequest $request
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rescaleApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RescaleApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoEnableApplicationScalingRule)) {
            $query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }
        if (!Utils::isUnset($request->minReadyInstanceRatio)) {
            $query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }
        if (!Utils::isUnset($request->minReadyInstances)) {
            $query['MinReadyInstances'] = $request->minReadyInstances;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RescaleApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/rescaleApplication',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RescaleApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RescaleApplicationVerticallyRequest $request
     *
     * @return RescaleApplicationVerticallyResponse
     */
    public function rescaleApplicationVertically($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rescaleApplicationVerticallyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RescaleApplicationVerticallyRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return RescaleApplicationVerticallyResponse
     */
    public function rescaleApplicationVerticallyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RescaleApplicationVertically',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/rescaleApplicationVertically',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RescaleApplicationVerticallyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartApplicationRequest $request
     *
     * @return RestartApplicationResponse
     */
    public function restartApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RestartApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RestartApplicationResponse
     */
    public function restartApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->minReadyInstanceRatio)) {
            $query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }
        if (!Utils::isUnset($request->minReadyInstances)) {
            $query['MinReadyInstances'] = $request->minReadyInstances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/restartApplication',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartInstancesRequest $request
     *
     * @return RestartInstancesResponse
     */
    public function restartInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RestartInstancesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartInstancesResponse
     */
    public function restartInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartInstances',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/restartInstances',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackApplicationRequest $request
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RollbackApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoEnableApplicationScalingRule)) {
            $query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            $query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->minReadyInstanceRatio)) {
            $query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }
        if (!Utils::isUnset($request->minReadyInstances)) {
            $query['MinReadyInstances'] = $request->minReadyInstances;
        }
        if (!Utils::isUnset($request->updateStrategy)) {
            $query['UpdateStrategy'] = $request->updateStrategy;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/rollbackApplication',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RollbackApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartApplicationRequest $request
     *
     * @return StartApplicationResponse
     */
    public function startApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StartApplicationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartApplicationResponse
     */
    public function startApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/startApplication',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopApplicationRequest $request
     *
     * @return StopApplicationResponse
     */
    public function stopApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StopApplicationRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopApplicationResponse
     */
    public function stopApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/stopApplication',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindSlbRequest $request
     *
     * @return UnbindSlbResponse
     */
    public function unbindSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UnbindSlbRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindSlbResponse
     */
    public function unbindSlbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->internet)) {
            $query['Internet'] = $request->internet;
        }
        if (!Utils::isUnset($request->intranet)) {
            $query['Intranet'] = $request->intranet;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindSlb',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/slb',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteAll)) {
            $query['DeleteAll'] = $request->deleteAll;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $query['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppSecurityGroupRequest $request
     *
     * @return UpdateAppSecurityGroupResponse
     */
    public function updateAppSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppSecurityGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAppSecurityGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAppSecurityGroupResponse
     */
    public function updateAppSecurityGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppSecurityGroup',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/updateAppSecurityGroup',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAppSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateApplicationDescriptionRequest $request
     *
     * @return UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationDescriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateApplicationDescriptionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appDescription)) {
            $query['AppDescription'] = $request->appDescription;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationDescription',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/updateAppDescription',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateApplicationScalingRuleRequest $request
     *
     * @return UpdateApplicationScalingRuleResponse
     */
    public function updateApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApplicationScalingRuleResponse
     */
    public function updateApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->minReadyInstanceRatio)) {
            $query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }
        if (!Utils::isUnset($request->minReadyInstances)) {
            $query['MinReadyInstances'] = $request->minReadyInstances;
        }
        if (!Utils::isUnset($request->scalingRuleMetric)) {
            $query['ScalingRuleMetric'] = $request->scalingRuleMetric;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        if (!Utils::isUnset($request->scalingRuleTimer)) {
            $query['ScalingRuleTimer'] = $request->scalingRuleTimer;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationScalingRule',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/scale/applicationScalingRule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateApplicationVswitchesRequest $request
     *
     * @return UpdateApplicationVswitchesResponse
     */
    public function updateApplicationVswitches($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationVswitchesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateApplicationVswitchesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateApplicationVswitchesResponse
     */
    public function updateApplicationVswitchesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationVswitches',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/app/updateAppVswitches',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationVswitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConfigMapRequest $request
     *
     * @return UpdateConfigMapResponse
     */
    public function updateConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateConfigMapRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateConfigMapResponse
     */
    public function updateConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configMapId)) {
            $query['ConfigMapId'] = $request->configMapId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigMap',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/configmap/configMap',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGreyTagRouteRequest $request
     *
     * @return UpdateGreyTagRouteResponse
     */
    public function updateGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateGreyTagRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateGreyTagRouteResponse
     */
    public function updateGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dubboRules)) {
            $query['DubboRules'] = $request->dubboRules;
        }
        if (!Utils::isUnset($request->greyTagRouteId)) {
            $query['GreyTagRouteId'] = $request->greyTagRouteId;
        }
        if (!Utils::isUnset($request->scRules)) {
            $query['ScRules'] = $request->scRules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGreyTagRoute',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/tagroute/greyTagRoute',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIngressRequest $request
     *
     * @return UpdateIngressResponse
     */
    public function updateIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateIngressRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateIngressResponse
     */
    public function updateIngressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->defaultRule)) {
            $query['DefaultRule'] = $request->defaultRule;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ingressId)) {
            $query['IngressId'] = $request->ingressId;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalanceType)) {
            $query['LoadBalanceType'] = $request->loadBalanceType;
        }
        $body = [];
        if (!Utils::isUnset($request->rules)) {
            $body['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIngress',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/ingress/Ingress',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceDescription)) {
            $query['NamespaceDescription'] = $request->namespaceDescription;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->namespaceName)) {
            $query['NamespaceName'] = $request->namespaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNamespace',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/paas/namespace',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNamespaceVpcRequest $request
     *
     * @return UpdateNamespaceVpcResponse
     */
    public function updateNamespaceVpc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceVpcWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateNamespaceVpcRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateNamespaceVpcResponse
     */
    public function updateNamespaceVpcWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNamespaceVpc',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/namespace/updateNamespaceVpc',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateNamespaceVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
