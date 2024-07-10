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
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateSecretRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateSecretResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateSecretShrinkRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateWebCustomDomainRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateWebCustomDomainResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteConfigMapRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteConfigMapResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteGreyTagRouteRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteGreyTagRouteResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteHistoryJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteHistoryJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteIngressRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteIngressResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationRevisionRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationRevisionResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebCustomDomainRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebCustomDomainResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobHistoryRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobHistoryResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSecretRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSecretResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationResourceStaticsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationResourceStaticsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationRevisionRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationRevisionResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationScalingConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationScalingConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationTrafficConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebApplicationTrafficConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebCustomDomainRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebCustomDomainResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebInstanceLogsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeWebInstanceLogsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DisableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DisableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\EnableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\EnableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ExecJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ExecJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetArmsTopNMetricRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetArmsTopNMetricResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetAvailabilityMetricRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetAvailabilityMetricResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetChangeOrderMetricRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetChangeOrderMetricResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetScaleAppMetricRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetScaleAppMetricResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetWarningEventMetricRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetWarningEventMetricResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\ListJobsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListJobsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespaceChangeOrdersRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespaceChangeOrdersResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListPublishedServicesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListPublishedServicesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationInstancesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationInstancesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationInstancesShrinkRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationRevisionsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationRevisionsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebCustomDomainsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListWebCustomDomainsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\OpenSaeServiceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\PublishWebApplicationRevisionRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\PublishWebApplicationRevisionResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\StartWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\StartWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\StopApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\StopApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\StopWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\StopWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\SuspendJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\SuspendJobResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceVpcRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateNamespaceVpcResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretShrinkRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationScalingConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationScalingConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationTrafficConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationTrafficConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebCustomDomainRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebCustomDomainResponse;
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
     * @summary ba386059-69b1-4e65-b1e5-0682d9fa\\*\\*\\*\\*
     *  *
     * @param AbortAndRollbackChangeOrderRequest $request AbortAndRollbackChangeOrderRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AbortAndRollbackChangeOrderResponse AbortAndRollbackChangeOrderResponse
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
     * @summary ba386059-69b1-4e65-b1e5-0682d9fa\\*\\*\\*\\*
     *  *
     * @param AbortAndRollbackChangeOrderRequest $request AbortAndRollbackChangeOrderRequest
     *
     * @return AbortAndRollbackChangeOrderResponse AbortAndRollbackChangeOrderResponse
     */
    public function abortAndRollbackChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortAndRollbackChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AbortChangeOrderRequest $request AbortChangeOrderRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AbortChangeOrderResponse AbortChangeOrderResponse
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
     * @param AbortChangeOrderRequest $request AbortChangeOrderRequest
     *
     * @return AbortChangeOrderResponse AbortChangeOrderResponse
     */
    public function abortChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary cn-shanghai
     *  *
     * @param BatchStartApplicationsRequest $request BatchStartApplicationsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStartApplicationsResponse BatchStartApplicationsResponse
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
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
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
     * @summary cn-shanghai
     *  *
     * @param BatchStartApplicationsRequest $request BatchStartApplicationsRequest
     *
     * @return BatchStartApplicationsResponse BatchStartApplicationsResponse
     */
    public function batchStartApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchStartApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchStopApplicationsRequest $request BatchStopApplicationsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStopApplicationsResponse BatchStopApplicationsResponse
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
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
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
     * @param BatchStopApplicationsRequest $request BatchStopApplicationsRequest
     *
     * @return BatchStopApplicationsResponse BatchStopApplicationsResponse
     */
    public function batchStopApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchStopApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BindSlbRequest $request BindSlbRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return BindSlbResponse BindSlbResponse
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
     * @param BindSlbRequest $request BindSlbRequest
     *
     * @return BindSlbResponse BindSlbResponse
     */
    public function bindSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ConfirmPipelineBatchRequest $request ConfirmPipelineBatchRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmPipelineBatchResponse ConfirmPipelineBatchResponse
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
     * @param ConfirmPipelineBatchRequest $request ConfirmPipelineBatchRequest
     *
     * @return ConfirmPipelineBatchResponse ConfirmPipelineBatchResponse
     */
    public function confirmPipelineBatch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmPipelineBatchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request CreateApplicationRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
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
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
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
        if (!Utils::isUnset($request->enableEbpf)) {
            $query['EnableEbpf'] = $request->enableEbpf;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imagePullSecrets)) {
            $query['ImagePullSecrets'] = $request->imagePullSecrets;
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
        if (!Utils::isUnset($request->microRegistration)) {
            $query['MicroRegistration'] = $request->microRegistration;
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
        if (!Utils::isUnset($request->nasConfigs)) {
            $query['NasConfigs'] = $request->nasConfigs;
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
        if (!Utils::isUnset($request->pvtzDiscoverySvc)) {
            $query['PvtzDiscoverySvc'] = $request->pvtzDiscoverySvc;
        }
        if (!Utils::isUnset($request->python)) {
            $query['Python'] = $request->python;
        }
        if (!Utils::isUnset($request->pythonModules)) {
            $query['PythonModules'] = $request->pythonModules;
        }
        if (!Utils::isUnset($request->readiness)) {
            $query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->saeVersion)) {
            $query['SaeVersion'] = $request->saeVersion;
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
        if (!Utils::isUnset($request->baseAppId)) {
            $body['BaseAppId'] = $request->baseAppId;
        }
        if (!Utils::isUnset($request->configMapMountDesc)) {
            $body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }
        if (!Utils::isUnset($request->microRegistrationConfig)) {
            $body['MicroRegistrationConfig'] = $request->microRegistrationConfig;
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
        if (!Utils::isUnset($request->php)) {
            $body['Php'] = $request->php;
        }
        if (!Utils::isUnset($request->phpConfig)) {
            $body['PhpConfig'] = $request->phpConfig;
        }
        if (!Utils::isUnset($request->serviceTags)) {
            $body['ServiceTags'] = $request->serviceTags;
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
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Null
     *  *
     * @description The HTTP status code. Take note of the following rules:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *  *
     * @param CreateApplicationScalingRuleRequest $request CreateApplicationScalingRuleRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationScalingRuleResponse CreateApplicationScalingRuleResponse
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
     * @summary Null
     *  *
     * @description The HTTP status code. Take note of the following rules:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *  *
     * @param CreateApplicationScalingRuleRequest $request CreateApplicationScalingRuleRequest
     *
     * @return CreateApplicationScalingRuleResponse CreateApplicationScalingRuleResponse
     */
    public function createApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary name
     *  *
     * @param CreateConfigMapRequest $request CreateConfigMapRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigMapResponse CreateConfigMapResponse
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
     * @summary name
     *  *
     * @param CreateConfigMapRequest $request CreateConfigMapRequest
     *
     * @return CreateConfigMapResponse CreateConfigMapResponse
     */
    public function createConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a canary release rule for a Spring Cloud or Dubbo application.
     *  *
     * @description >  You can configure only one canary release rule for each application.
     *  *
     * @param CreateGreyTagRouteRequest $request CreateGreyTagRouteRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGreyTagRouteResponse CreateGreyTagRouteResponse
     */
    public function createGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->albRules)) {
            $query['AlbRules'] = $request->albRules;
        }
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
     * @summary Creates a canary release rule for a Spring Cloud or Dubbo application.
     *  *
     * @description >  You can configure only one canary release rule for each application.
     *  *
     * @param CreateGreyTagRouteRequest $request CreateGreyTagRouteRequest
     *
     * @return CreateGreyTagRouteResponse CreateGreyTagRouteResponse
     */
    public function createGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary {"appId":"395b60e4-0550-458d-9c54-a265d036\\*\\*\\*\\*","containerPort":8080}
     *  *
     * @param CreateIngressRequest $request CreateIngressRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIngressResponse CreateIngressResponse
     */
    public function createIngressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certIds)) {
            $query['CertIds'] = $request->certIds;
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
     * @summary {"appId":"395b60e4-0550-458d-9c54-a265d036\\*\\*\\*\\*","containerPort":8080}
     *  *
     * @param CreateIngressRequest $request CreateIngressRequest
     *
     * @return CreateIngressResponse CreateIngressResponse
     */
    public function createIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates a job template.
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->backoffLimit)) {
            $query['BackoffLimit'] = $request->backoffLimit;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            $query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->concurrencyPolicy)) {
            $query['ConcurrencyPolicy'] = $request->concurrencyPolicy;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->customHostAlias)) {
            $query['CustomHostAlias'] = $request->customHostAlias;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            $query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imagePullSecrets)) {
            $query['ImagePullSecrets'] = $request->imagePullSecrets;
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
        if (!Utils::isUnset($request->python)) {
            $query['Python'] = $request->python;
        }
        if (!Utils::isUnset($request->pythonModules)) {
            $query['PythonModules'] = $request->pythonModules;
        }
        if (!Utils::isUnset($request->refAppId)) {
            $query['RefAppId'] = $request->refAppId;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->slice)) {
            $query['Slice'] = $request->slice;
        }
        if (!Utils::isUnset($request->sliceEnvs)) {
            $query['SliceEnvs'] = $request->sliceEnvs;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            $query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->timezone)) {
            $query['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->tomcatConfig)) {
            $query['TomcatConfig'] = $request->tomcatConfig;
        }
        if (!Utils::isUnset($request->triggerConfig)) {
            $query['TriggerConfig'] = $request->triggerConfig;
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
        if (!Utils::isUnset($request->workload)) {
            $query['Workload'] = $request->workload;
        }
        $body = [];
        if (!Utils::isUnset($request->acrInstanceId)) {
            $body['AcrInstanceId'] = $request->acrInstanceId;
        }
        if (!Utils::isUnset($request->configMapMountDesc)) {
            $body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }
        if (!Utils::isUnset($request->enableImageAccl)) {
            $body['EnableImageAccl'] = $request->enableImageAccl;
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
            'action'      => 'CreateJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/createJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a job template.
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary desc
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableMicroRegistration)) {
            $query['EnableMicroRegistration'] = $request->enableMicroRegistration;
        }
        if (!Utils::isUnset($request->nameSpaceShortId)) {
            $query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }
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
     * @summary desc
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Null
     *  *
     * @param CreateSecretRequest $tmpReq  CreateSecretRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecretResponse CreateSecretResponse
     */
    public function createSecretWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSecretShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->secretData)) {
            $request->secretDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->secretData, 'SecretData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->secretDataShrink)) {
            $query['SecretData'] = $request->secretDataShrink;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->secretType)) {
            $query['SecretType'] = $request->secretType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecret',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/secret/secret',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Null
     *  *
     * @param CreateSecretRequest $request CreateSecretRequest
     *
     * @return CreateSecretResponse CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建应用
     *  *
     * @param CreateWebApplicationRequest $request CreateWebApplicationRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWebApplicationResponse CreateWebApplicationResponse
     */
    public function createWebApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateWebApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建应用
     *  *
     * @param CreateWebApplicationRequest $request CreateWebApplicationRequest
     *
     * @return CreateWebApplicationResponse CreateWebApplicationResponse
     */
    public function createWebApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWebApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新建自定义域名
     *  *
     * @param CreateWebCustomDomainRequest $request CreateWebCustomDomainRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWebCustomDomainResponse CreateWebCustomDomainResponse
     */
    public function createWebCustomDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateWebCustomDomain',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/custom-domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建自定义域名
     *  *
     * @param CreateWebCustomDomainRequest $request CreateWebCustomDomainRequest
     *
     * @return CreateWebCustomDomainResponse CreateWebCustomDomainResponse
     */
    public function createWebCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWebCustomDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
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
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 7171a6ca-d1cd-4928-8642-7d5cfe69\\*\\*\\*\\*
     *  *
     * @param DeleteApplicationScalingRuleRequest $request DeleteApplicationScalingRuleRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationScalingRuleResponse DeleteApplicationScalingRuleResponse
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
     * @summary 7171a6ca-d1cd-4928-8642-7d5cfe69\\*\\*\\*\\*
     *  *
     * @param DeleteApplicationScalingRuleRequest $request DeleteApplicationScalingRuleRequest
     *
     * @return DeleteApplicationScalingRuleResponse DeleteApplicationScalingRuleResponse
     */
    public function deleteApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteConfigMapRequest $request DeleteConfigMapRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigMapResponse DeleteConfigMapResponse
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
     * @param DeleteConfigMapRequest $request DeleteConfigMapRequest
     *
     * @return DeleteConfigMapResponse DeleteConfigMapResponse
     */
    public function deleteConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 1
     *  *
     * @param DeleteGreyTagRouteRequest $request DeleteGreyTagRouteRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGreyTagRouteResponse DeleteGreyTagRouteResponse
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
     * @summary 1
     *  *
     * @param DeleteGreyTagRouteRequest $request DeleteGreyTagRouteRequest
     *
     * @return DeleteGreyTagRouteResponse DeleteGreyTagRouteResponse
     */
    public function deleteGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a job.
     *  *
     * @param DeleteHistoryJobRequest $request DeleteHistoryJobRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHistoryJobResponse DeleteHistoryJobResponse
     */
    public function deleteHistoryJobWithOptions($request, $headers, $runtime)
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
            'action'      => 'DeleteHistoryJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/deleteHistoryJob',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a job.
     *  *
     * @param DeleteHistoryJobRequest $request DeleteHistoryJobRequest
     *
     * @return DeleteHistoryJobResponse DeleteHistoryJobResponse
     */
    public function deleteHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHistoryJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteIngressRequest $request DeleteIngressRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIngressResponse DeleteIngressResponse
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
     * @param DeleteIngressRequest $request DeleteIngressRequest
     *
     * @return DeleteIngressResponse DeleteIngressResponse
     */
    public function deleteIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a job template.
     *  *
     * @param DeleteJobRequest $request DeleteJobRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJobWithOptions($request, $headers, $runtime)
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
            'action'      => 'DeleteJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/deleteJob',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a job template.
     *  *
     * @param DeleteJobRequest $request DeleteJobRequest
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nameSpaceShortId)) {
            $query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }
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
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a Secret.
     *  *
     * @param DeleteSecretRequest $request DeleteSecretRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecretResponse DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecret',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/secret/secret',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Secret.
     *  *
     * @param DeleteSecretRequest $request DeleteSecretRequest
     *
     * @return DeleteSecretResponse DeleteSecretResponse
     */
    public function deleteSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除应用
     *  *
     * @param string                      $ApplicationId
     * @param DeleteWebApplicationRequest $request       DeleteWebApplicationRequest
     * @param string[]                    $headers       map
     * @param RuntimeOptions              $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteWebApplicationResponse DeleteWebApplicationResponse
     */
    public function deleteWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
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
            'action'      => 'DeleteWebApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除应用
     *  *
     * @param string                      $ApplicationId
     * @param DeleteWebApplicationRequest $request       DeleteWebApplicationRequest
     *
     * @return DeleteWebApplicationResponse DeleteWebApplicationResponse
     */
    public function deleteWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除应用版本
     *  *
     * @param string                              $ApplicationId
     * @param string                              $RevisionId
     * @param DeleteWebApplicationRevisionRequest $request       DeleteWebApplicationRevisionRequest
     * @param string[]                            $headers       map
     * @param RuntimeOptions                      $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteWebApplicationRevisionResponse DeleteWebApplicationRevisionResponse
     */
    public function deleteWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime)
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
            'action'      => 'DeleteWebApplicationRevision',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-revisions/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/revisions/' . OpenApiUtilClient::getEncodeParam($RevisionId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWebApplicationRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除应用版本
     *  *
     * @param string                              $ApplicationId
     * @param string                              $RevisionId
     * @param DeleteWebApplicationRevisionRequest $request       DeleteWebApplicationRevisionRequest
     *
     * @return DeleteWebApplicationRevisionResponse DeleteWebApplicationRevisionResponse
     */
    public function deleteWebApplicationRevision($ApplicationId, $RevisionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除自定义域名
     *  *
     * @param string                       $DomainName
     * @param DeleteWebCustomDomainRequest $request    DeleteWebCustomDomainRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteWebCustomDomainResponse DeleteWebCustomDomainResponse
     */
    public function deleteWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime)
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
            'action'      => 'DeleteWebCustomDomain',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/custom-domains/' . OpenApiUtilClient::getEncodeParam($DomainName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义域名
     *  *
     * @param string                       $DomainName
     * @param DeleteWebCustomDomainRequest $request    DeleteWebCustomDomainRequest
     *
     * @return DeleteWebCustomDomainResponse DeleteWebCustomDomainResponse
     */
    public function deleteWebCustomDomain($DomainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime);
    }

    /**
     * @summary Deploys an application.
     *  *
     * @param DeployApplicationRequest $request DeployApplicationRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployApplicationResponse DeployApplicationResponse
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
        if (!Utils::isUnset($request->enableAhas)) {
            $query['EnableAhas'] = $request->enableAhas;
        }
        if (!Utils::isUnset($request->enableGreyTagRoute)) {
            $query['EnableGreyTagRoute'] = $request->enableGreyTagRoute;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imagePullSecrets)) {
            $query['ImagePullSecrets'] = $request->imagePullSecrets;
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
        if (!Utils::isUnset($request->microRegistration)) {
            $query['MicroRegistration'] = $request->microRegistration;
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
        if (!Utils::isUnset($request->nasConfigs)) {
            $query['NasConfigs'] = $request->nasConfigs;
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
        if (!Utils::isUnset($request->pvtzDiscoverySvc)) {
            $query['PvtzDiscoverySvc'] = $request->pvtzDiscoverySvc;
        }
        if (!Utils::isUnset($request->python)) {
            $query['Python'] = $request->python;
        }
        if (!Utils::isUnset($request->pythonModules)) {
            $query['PythonModules'] = $request->pythonModules;
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
        if (!Utils::isUnset($request->updateStrategy)) {
            $query['UpdateStrategy'] = $request->updateStrategy;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
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
        if (!Utils::isUnset($request->microRegistrationConfig)) {
            $body['MicroRegistrationConfig'] = $request->microRegistrationConfig;
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
        if (!Utils::isUnset($request->php)) {
            $body['Php'] = $request->php;
        }
        if (!Utils::isUnset($request->phpConfig)) {
            $body['PhpConfig'] = $request->phpConfig;
        }
        if (!Utils::isUnset($request->serviceTags)) {
            $body['ServiceTags'] = $request->serviceTags;
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
     * @summary Deploys an application.
     *  *
     * @param DeployApplicationRequest $request DeployApplicationRequest
     *
     * @return DeployApplicationResponse DeployApplicationResponse
     */
    public function deployApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the metadata details of the service of an application.
     *  *
     * @param DescribeAppServiceDetailRequest $request DescribeAppServiceDetailRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppServiceDetailResponse DescribeAppServiceDetailResponse
     */
    public function describeAppServiceDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->nacosInstanceId)) {
            $query['NacosInstanceId'] = $request->nacosInstanceId;
        }
        if (!Utils::isUnset($request->nacosNamespaceId)) {
            $query['NacosNamespaceId'] = $request->nacosNamespaceId;
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
     * @summary Queries the metadata details of the service of an application.
     *  *
     * @param DescribeAppServiceDetailRequest $request DescribeAppServiceDetailRequest
     *
     * @return DescribeAppServiceDetailResponse DescribeAppServiceDetailResponse
     */
    public function describeAppServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppServiceDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationConfigRequest $request DescribeApplicationConfigRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationConfigResponse DescribeApplicationConfigResponse
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
     * @param DescribeApplicationConfigRequest $request DescribeApplicationConfigRequest
     *
     * @return DescribeApplicationConfigResponse DescribeApplicationConfigResponse
     */
    public function describeApplicationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationGroupsRequest $request DescribeApplicationGroupsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationGroupsResponse DescribeApplicationGroupsResponse
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
     * @param DescribeApplicationGroupsRequest $request DescribeApplicationGroupsRequest
     *
     * @return DescribeApplicationGroupsResponse DescribeApplicationGroupsResponse
     */
    public function describeApplicationGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationImageRequest $request DescribeApplicationImageRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationImageResponse DescribeApplicationImageResponse
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
     * @param DescribeApplicationImageRequest $request DescribeApplicationImageRequest
     *
     * @return DescribeApplicationImageResponse DescribeApplicationImageResponse
     */
    public function describeApplicationImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries application instances.
     *  *
     * @param DescribeApplicationInstancesRequest $request DescribeApplicationInstancesRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationInstancesResponse DescribeApplicationInstancesResponse
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
     * @summary Queries application instances.
     *  *
     * @param DescribeApplicationInstancesRequest $request DescribeApplicationInstancesRequest
     *
     * @return DescribeApplicationInstancesResponse DescribeApplicationInstancesResponse
     */
    public function describeApplicationInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a specified auto scaling policy of an application.
     *  *
     * @param DescribeApplicationScalingRuleRequest $request DescribeApplicationScalingRuleRequest
     * @param string[]                              $headers map
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationScalingRuleResponse DescribeApplicationScalingRuleResponse
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
     * @summary Queries a specified auto scaling policy of an application.
     *  *
     * @param DescribeApplicationScalingRuleRequest $request DescribeApplicationScalingRuleRequest
     *
     * @return DescribeApplicationScalingRuleResponse DescribeApplicationScalingRuleResponse
     */
    public function describeApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the auto scaling policies of an application.
     *  *
     * @param DescribeApplicationScalingRulesRequest $request DescribeApplicationScalingRulesRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationScalingRulesResponse DescribeApplicationScalingRulesResponse
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
     * @summary Queries the auto scaling policies of an application.
     *  *
     * @param DescribeApplicationScalingRulesRequest $request DescribeApplicationScalingRulesRequest
     *
     * @return DescribeApplicationScalingRulesResponse DescribeApplicationScalingRulesResponse
     */
    public function describeApplicationScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationScalingRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 017f39b8-dfa4-4e16-a84b-1dcee4b1\\*\\*\\*\\*
     *  *
     * @param DescribeApplicationSlbsRequest $request DescribeApplicationSlbsRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationSlbsResponse DescribeApplicationSlbsResponse
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
     * @summary 017f39b8-dfa4-4e16-a84b-1dcee4b1\\*\\*\\*\\*
     *  *
     * @param DescribeApplicationSlbsRequest $request DescribeApplicationSlbsRequest
     *
     * @return DescribeApplicationSlbsResponse DescribeApplicationSlbsResponse
     */
    public function describeApplicationSlbs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationSlbsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationStatusRequest $request DescribeApplicationStatusRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationStatusResponse DescribeApplicationStatusResponse
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
     * @param DescribeApplicationStatusRequest $request DescribeApplicationStatusRequest
     *
     * @return DescribeApplicationStatusResponse DescribeApplicationStatusResponse
     */
    public function describeApplicationStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChangeOrderRequest $request DescribeChangeOrderRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChangeOrderResponse DescribeChangeOrderResponse
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
     * @param DescribeChangeOrderRequest $request DescribeChangeOrderRequest
     *
     * @return DescribeChangeOrderResponse DescribeChangeOrderResponse
     */
    public function describeChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeComponentsRequest $request DescribeComponentsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentsResponse DescribeComponentsResponse
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
     * @param DescribeComponentsRequest $request DescribeComponentsRequest
     *
     * @return DescribeComponentsResponse DescribeComponentsResponse
     */
    public function describeComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigMapRequest $request DescribeConfigMapRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConfigMapResponse DescribeConfigMapResponse
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
     * @param DescribeConfigMapRequest $request DescribeConfigMapRequest
     *
     * @return DescribeConfigMapResponse DescribeConfigMapResponse
     */
    public function describeConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigurationPriceRequest $request DescribeConfigurationPriceRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConfigurationPriceResponse DescribeConfigurationPriceResponse
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
     * @param DescribeConfigurationPriceRequest $request DescribeConfigurationPriceRequest
     *
     * @return DescribeConfigurationPriceResponse DescribeConfigurationPriceResponse
     */
    public function describeConfigurationPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigurationPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEdasContainersResponse DescribeEdasContainersResponse
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
     * @return DescribeEdasContainersResponse DescribeEdasContainersResponse
     */
    public function describeEdasContainers()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdasContainersWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries the details of a canary release rule based on the specified rule ID.
     *  *
     * @param DescribeGreyTagRouteRequest $request DescribeGreyTagRouteRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGreyTagRouteResponse DescribeGreyTagRouteResponse
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
     * @summary Queries the details of a canary release rule based on the specified rule ID.
     *  *
     * @param DescribeGreyTagRouteRequest $request DescribeGreyTagRouteRequest
     *
     * @return DescribeGreyTagRouteResponse DescribeGreyTagRouteResponse
     */
    public function describeGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeIngressRequest $request DescribeIngressRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIngressResponse DescribeIngressResponse
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
     * @param DescribeIngressRequest $request DescribeIngressRequest
     *
     * @return DescribeIngressResponse DescribeIngressResponse
     */
    public function describeIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeInstanceLogRequest $request DescribeInstanceLogRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceLogResponse DescribeInstanceLogResponse
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
     * @param DescribeInstanceLogRequest $request DescribeInstanceLogRequest
     *
     * @return DescribeInstanceLogResponse DescribeInstanceLogResponse
     */
    public function describeInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceLogWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSpecificationsResponse DescribeInstanceSpecificationsResponse
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
     * @return DescribeInstanceSpecificationsResponse DescribeInstanceSpecificationsResponse
     */
    public function describeInstanceSpecifications()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceSpecificationsWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries the configurations of a job template.
     *  *
     * @param DescribeJobRequest $request DescribeJobRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobResponse DescribeJobResponse
     */
    public function describeJobWithOptions($request, $headers, $runtime)
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
            'action'      => 'DescribeJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/describeJob',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a job template.
     *  *
     * @param DescribeJobRequest $request DescribeJobRequest
     *
     * @return DescribeJobResponse DescribeJobResponse
     */
    public function describeJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Query the information about jobs.
     *  *
     * @param DescribeJobHistoryRequest $request DescribeJobHistoryRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobHistoryResponse DescribeJobHistoryResponse
     */
    public function describeJobHistoryWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJobHistory',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/describeJobHistory',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeJobHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the information about jobs.
     *  *
     * @param DescribeJobHistoryRequest $request DescribeJobHistoryRequest
     *
     * @return DescribeJobHistoryResponse DescribeJobHistoryResponse
     */
    public function describeJobHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeJobHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the status of a job.
     *  *
     * @param DescribeJobStatusRequest $request DescribeJobStatusRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobStatusResponse DescribeJobStatusResponse
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
     * @summary Queries the status of a job.
     *  *
     * @param DescribeJobStatusRequest $request DescribeJobStatusRequest
     *
     * @return DescribeJobStatusResponse DescribeJobStatusResponse
     */
    public function describeJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeJobStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a namespace.
     *  *
     * @param DescribeNamespaceRequest $request DescribeNamespaceRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespaceResponse DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nameSpaceShortId)) {
            $query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }
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
     * @summary Queries the details of a namespace.
     *  *
     * @param DescribeNamespaceRequest $request DescribeNamespaceRequest
     *
     * @return DescribeNamespaceResponse DescribeNamespaceResponse
     */
    public function describeNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceListRequest $request DescribeNamespaceListRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespaceListResponse DescribeNamespaceListResponse
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
     * @param DescribeNamespaceListRequest $request DescribeNamespaceListRequest
     *
     * @return DescribeNamespaceListResponse DescribeNamespaceListResponse
     */
    public function describeNamespaceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceResourcesRequest $request DescribeNamespaceResourcesRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespaceResourcesResponse DescribeNamespaceResourcesResponse
     */
    public function describeNamespaceResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nameSpaceShortId)) {
            $query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }
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
     * @param DescribeNamespaceResourcesRequest $request DescribeNamespaceResourcesRequest
     *
     * @return DescribeNamespaceResourcesResponse DescribeNamespaceResourcesResponse
     */
    public function describeNamespaceResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of namespaces.
     *  *
     * @param DescribeNamespacesRequest $request DescribeNamespacesRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespacesResponse DescribeNamespacesResponse
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
     * @summary Queries the details of namespaces.
     *  *
     * @param DescribeNamespacesRequest $request DescribeNamespacesRequest
     *
     * @return DescribeNamespacesResponse DescribeNamespacesResponse
     */
    public function describeNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of a batch.
     *  *
     * @param DescribePipelineRequest $request DescribePipelineRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePipelineResponse DescribePipelineResponse
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
     * @summary Queries the information of a batch.
     *  *
     * @param DescribePipelineRequest $request DescribePipelineRequest
     *
     * @return DescribePipelineResponse DescribePipelineResponse
     */
    public function describePipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries available regions.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries available regions.
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries the details of a Secret instance.
     *  *
     * @param DescribeSecretRequest $request DescribeSecretRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecretResponse DescribeSecretResponse
     */
    public function describeSecretWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecret',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/secret/secret',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Secret instance.
     *  *
     * @param DescribeSecretRequest $request DescribeSecretRequest
     *
     * @return DescribeSecretResponse DescribeSecretResponse
     */
    public function describeSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取应用信息
     *  *
     * @param string                        $ApplicationId
     * @param DescribeWebApplicationRequest $request       DescribeWebApplicationRequest
     * @param string[]                      $headers       map
     * @param RuntimeOptions                $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeWebApplicationResponse DescribeWebApplicationResponse
     */
    public function describeWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
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
            'action'      => 'DescribeWebApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用信息
     *  *
     * @param string                        $ApplicationId
     * @param DescribeWebApplicationRequest $request       DescribeWebApplicationRequest
     *
     * @return DescribeWebApplicationResponse DescribeWebApplicationResponse
     */
    public function describeWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 应用资源用量统计
     *  *
     * @param string                                       $ApplicationId
     * @param DescribeWebApplicationResourceStaticsRequest $request       DescribeWebApplicationResourceStaticsRequest
     * @param string[]                                     $headers       map
     * @param RuntimeOptions                               $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeWebApplicationResourceStaticsResponse DescribeWebApplicationResourceStaticsResponse
     */
    public function describeWebApplicationResourceStaticsWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebApplicationResourceStatics',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications-observability/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/resource',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebApplicationResourceStaticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用资源用量统计
     *  *
     * @param string                                       $ApplicationId
     * @param DescribeWebApplicationResourceStaticsRequest $request       DescribeWebApplicationResourceStaticsRequest
     *
     * @return DescribeWebApplicationResourceStaticsResponse DescribeWebApplicationResourceStaticsResponse
     */
    public function describeWebApplicationResourceStatics($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationResourceStaticsWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取应用版本
     *  *
     * @param string                                $ApplicationId
     * @param string                                $RevisionId
     * @param DescribeWebApplicationRevisionRequest $request       DescribeWebApplicationRevisionRequest
     * @param string[]                              $headers       map
     * @param RuntimeOptions                        $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeWebApplicationRevisionResponse DescribeWebApplicationRevisionResponse
     */
    public function describeWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime)
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
            'action'      => 'DescribeWebApplicationRevision',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-revisions/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/revisions/' . OpenApiUtilClient::getEncodeParam($RevisionId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebApplicationRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用版本
     *  *
     * @param string                                $ApplicationId
     * @param string                                $RevisionId
     * @param DescribeWebApplicationRevisionRequest $request       DescribeWebApplicationRevisionRequest
     *
     * @return DescribeWebApplicationRevisionResponse DescribeWebApplicationRevisionResponse
     */
    public function describeWebApplicationRevision($ApplicationId, $RevisionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime);
    }

    /**
     * @summary 弹性配置详情
     *  *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationScalingConfigRequest $request       DescribeWebApplicationScalingConfigRequest
     * @param string[]                                   $headers       map
     * @param RuntimeOptions                             $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeWebApplicationScalingConfigResponse DescribeWebApplicationScalingConfigResponse
     */
    public function describeWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime)
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
            'action'      => 'DescribeWebApplicationScalingConfig',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-scaling/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebApplicationScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 弹性配置详情
     *  *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationScalingConfigRequest $request       DescribeWebApplicationScalingConfigRequest
     *
     * @return DescribeWebApplicationScalingConfigResponse DescribeWebApplicationScalingConfigResponse
     */
    public function describeWebApplicationScalingConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 流量配置详情
     *  *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationTrafficConfigRequest $request       DescribeWebApplicationTrafficConfigRequest
     * @param string[]                                   $headers       map
     * @param RuntimeOptions                             $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeWebApplicationTrafficConfigResponse DescribeWebApplicationTrafficConfigResponse
     */
    public function describeWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime)
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
            'action'      => 'DescribeWebApplicationTrafficConfig',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-traffic/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebApplicationTrafficConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 流量配置详情
     *  *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationTrafficConfigRequest $request       DescribeWebApplicationTrafficConfigRequest
     *
     * @return DescribeWebApplicationTrafficConfigResponse DescribeWebApplicationTrafficConfigResponse
     */
    public function describeWebApplicationTrafficConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取域名.
     *  *
     * @param string                         $DomainName
     * @param DescribeWebCustomDomainRequest $request    DescribeWebCustomDomainRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeWebCustomDomainResponse DescribeWebCustomDomainResponse
     */
    public function describeWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime)
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
            'action'      => 'DescribeWebCustomDomain',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/custom-domains/' . OpenApiUtilClient::getEncodeParam($DomainName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取域名.
     *  *
     * @param string                         $DomainName
     * @param DescribeWebCustomDomainRequest $request    DescribeWebCustomDomainRequest
     *
     * @return DescribeWebCustomDomainResponse DescribeWebCustomDomainResponse
     */
    public function describeWebCustomDomain($DomainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime);
    }

    /**
     * @summary 应用实例日志
     *  *
     * @param string                         $ApplicationId
     * @param string                         $InstanceId
     * @param DescribeWebInstanceLogsRequest $request       DescribeWebInstanceLogsRequest
     * @param string[]                       $headers       map
     * @param RuntimeOptions                 $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeWebInstanceLogsResponse DescribeWebInstanceLogsResponse
     */
    public function describeWebInstanceLogsWithOptions($ApplicationId, $InstanceId, $request, $headers, $runtime)
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
            'action'      => 'DescribeWebInstanceLogs',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications-observability/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWebInstanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用实例日志
     *  *
     * @param string                         $ApplicationId
     * @param string                         $InstanceId
     * @param DescribeWebInstanceLogsRequest $request       DescribeWebInstanceLogsRequest
     *
     * @return DescribeWebInstanceLogsResponse DescribeWebInstanceLogsResponse
     */
    public function describeWebInstanceLogs($ApplicationId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebInstanceLogsWithOptions($ApplicationId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param DisableApplicationScalingRuleRequest $request DisableApplicationScalingRuleRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableApplicationScalingRuleResponse DisableApplicationScalingRuleResponse
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
     * @param DisableApplicationScalingRuleRequest $request DisableApplicationScalingRuleRequest
     *
     * @return DisableApplicationScalingRuleResponse DisableApplicationScalingRuleResponse
     */
    public function disableApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Enables an auto scaling policy for an application.
     *  *
     * @param EnableApplicationScalingRuleRequest $request EnableApplicationScalingRuleRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableApplicationScalingRuleResponse EnableApplicationScalingRuleResponse
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
     * @summary Enables an auto scaling policy for an application.
     *  *
     * @param EnableApplicationScalingRuleRequest $request EnableApplicationScalingRuleRequest
     *
     * @return EnableApplicationScalingRuleResponse EnableApplicationScalingRuleResponse
     */
    public function enableApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExecJobRequest $request ExecJobRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecJobResponse ExecJobResponse
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
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
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
     * @param ExecJobRequest $request ExecJobRequest
     *
     * @return ExecJobResponse ExecJobResponse
     */
    public function execJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the top N applications in Application Monitoring.
     *  *
     * @param GetArmsTopNMetricRequest $request GetArmsTopNMetricRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetArmsTopNMetricResponse GetArmsTopNMetricResponse
     */
    public function getArmsTopNMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
        }
        if (!Utils::isUnset($request->cpuStrategy)) {
            $query['CpuStrategy'] = $request->cpuStrategy;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArmsTopNMetric',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/getArmsTopNMetric',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetArmsTopNMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top N applications in Application Monitoring.
     *  *
     * @param GetArmsTopNMetricRequest $request GetArmsTopNMetricRequest
     *
     * @return GetArmsTopNMetricResponse GetArmsTopNMetricResponse
     */
    public function getArmsTopNMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getArmsTopNMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the top N applications in which abnormal instances exist. The applications are sorted by the total number of abnormal instances.
     *  *
     * @param GetAvailabilityMetricRequest $request GetAvailabilityMetricRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAvailabilityMetricResponse GetAvailabilityMetricResponse
     */
    public function getAvailabilityMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
        }
        if (!Utils::isUnset($request->cpuStrategy)) {
            $query['CpuStrategy'] = $request->cpuStrategy;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAvailabilityMetric',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/getAvailabilityMetric',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAvailabilityMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top N applications in which abnormal instances exist. The applications are sorted by the total number of abnormal instances.
     *  *
     * @param GetAvailabilityMetricRequest $request GetAvailabilityMetricRequest
     *
     * @return GetAvailabilityMetricResponse GetAvailabilityMetricResponse
     */
    public function getAvailabilityMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAvailabilityMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries top N applications in abnormal change orders.
     *  *
     * @param GetChangeOrderMetricRequest $request GetChangeOrderMetricRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChangeOrderMetricResponse GetChangeOrderMetricResponse
     */
    public function getChangeOrderMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
        }
        if (!Utils::isUnset($request->cpuStrategy)) {
            $query['CpuStrategy'] = $request->cpuStrategy;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChangeOrderMetric',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/getChangeOrderMetric',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetChangeOrderMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries top N applications in abnormal change orders.
     *  *
     * @param GetChangeOrderMetricRequest $request GetChangeOrderMetricRequest
     *
     * @return GetChangeOrderMetricResponse GetChangeOrderMetricResponse
     */
    public function getChangeOrderMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChangeOrderMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the top N applications in which auto scaling takes effect.
     *  *
     * @param GetScaleAppMetricRequest $request GetScaleAppMetricRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScaleAppMetricResponse GetScaleAppMetricResponse
     */
    public function getScaleAppMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
        }
        if (!Utils::isUnset($request->cpuStrategy)) {
            $query['CpuStrategy'] = $request->cpuStrategy;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScaleAppMetric',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/getScaleAppMetric',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScaleAppMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top N applications in which auto scaling takes effect.
     *  *
     * @param GetScaleAppMetricRequest $request GetScaleAppMetricRequest
     *
     * @return GetScaleAppMetricResponse GetScaleAppMetricResponse
     */
    public function getScaleAppMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScaleAppMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the top N applications in which Warning events occur.
     *  *
     * @param GetWarningEventMetricRequest $request GetWarningEventMetricRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWarningEventMetricResponse GetWarningEventMetricResponse
     */
    public function getWarningEventMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
        }
        if (!Utils::isUnset($request->cpuStrategy)) {
            $query['CpuStrategy'] = $request->cpuStrategy;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWarningEventMetric',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/getWarningEventMetric',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWarningEventMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top N applications in which Warning events occur.
     *  *
     * @param GetWarningEventMetricRequest $request GetWarningEventMetricRequest
     *
     * @return GetWarningEventMetricResponse GetWarningEventMetricResponse
     */
    public function getWarningEventMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWarningEventMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the events that occurred in an application.
     *  *
     * @param ListAppEventsRequest $request ListAppEventsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppEventsResponse ListAppEventsResponse
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
     * @summary Queries the events that occurred in an application.
     *  *
     * @param ListAppEventsRequest $request ListAppEventsRequest
     *
     * @return ListAppEventsResponse ListAppEventsResponse
     */
    public function listAppEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 6dcc8c9e-d3da-478a-a066-86dcf820\\*\\*\\*\\*
     *  *
     * @param ListAppServicesPageRequest $request ListAppServicesPageRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppServicesPageResponse ListAppServicesPageResponse
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
     * @summary 6dcc8c9e-d3da-478a-a066-86dcf820\\*\\*\\*\\*
     *  *
     * @param ListAppServicesPageRequest $request ListAppServicesPageRequest
     *
     * @return ListAppServicesPageResponse ListAppServicesPageResponse
     */
    public function listAppServicesPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppServicesPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 7171a6ca-d1cd-4928-8642-7d5cfe69\\*\\*\\*\\*
     *  *
     * @param ListAppVersionsRequest $request ListAppVersionsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppVersionsResponse ListAppVersionsResponse
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
     * @summary 7171a6ca-d1cd-4928-8642-7d5cfe69\\*\\*\\*\\*
     *  *
     * @param ListAppVersionsRequest $request ListAppVersionsRequest
     *
     * @return ListAppVersionsResponse ListAppVersionsResponse
     */
    public function listAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary The ID of the namespace.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appSource)) {
            $query['AppSource'] = $request->appSource;
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
     * @summary The ID of the namespace.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChangeOrdersRequest $request ListChangeOrdersRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChangeOrdersResponse ListChangeOrdersResponse
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
     * @param ListChangeOrdersRequest $request ListChangeOrdersRequest
     *
     * @return ListChangeOrdersResponse ListChangeOrdersResponse
     */
    public function listChangeOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangeOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary b2a8a925-477a-4ed7-b825-d5e22500\\*\\*\\*\\*
     *  *
     * @param ListConsumedServicesRequest $request ListConsumedServicesRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConsumedServicesResponse ListConsumedServicesResponse
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
     * @summary b2a8a925-477a-4ed7-b825-d5e22500\\*\\*\\*\\*
     *  *
     * @param ListConsumedServicesRequest $request ListConsumedServicesRequest
     *
     * @return ListConsumedServicesResponse ListConsumedServicesResponse
     */
    public function listConsumedServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumedServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a canary release rule based on an application ID.
     *  *
     * @description >  You can configure only one canary release rule for each application.
     *  *
     * @param ListGreyTagRouteRequest $request ListGreyTagRouteRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGreyTagRouteResponse ListGreyTagRouteResponse
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
     * @summary Queries the details of a canary release rule based on an application ID.
     *  *
     * @description >  You can configure only one canary release rule for each application.
     *  *
     * @param ListGreyTagRouteRequest $request ListGreyTagRouteRequest
     *
     * @return ListGreyTagRouteResponse ListGreyTagRouteResponse
     */
    public function listGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary The returned message.
     * *   **success** is returned when the request succeeds.
     * *   An error code is returned when the request fails.
     *  *
     * @param ListIngressesRequest $request ListIngressesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIngressesResponse ListIngressesResponse
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
     * @summary The returned message.
     * *   **success** is returned when the request succeeds.
     * *   An error code is returned when the request fails.
     *  *
     * @param ListIngressesRequest $request ListIngressesRequest
     *
     * @return ListIngressesResponse ListIngressesResponse
     */
    public function listIngresses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIngressesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about job templates.
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->workload)) {
            $query['Workload'] = $request->workload;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/listJobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about job templates.
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 56f77b65-788d-442a-9885-7f20d91f\\*\\*\\*\\*
     *  *
     * @param ListLogConfigsRequest $request ListLogConfigsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogConfigsResponse ListLogConfigsResponse
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
     * @summary 56f77b65-788d-442a-9885-7f20d91f\\*\\*\\*\\*
     *  *
     * @param ListLogConfigsRequest $request ListLogConfigsRequest
     *
     * @return ListLogConfigsResponse ListLogConfigsResponse
     */
    public function listLogConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListNamespaceChangeOrdersRequest $request ListNamespaceChangeOrdersRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNamespaceChangeOrdersResponse ListNamespaceChangeOrdersResponse
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
     * @param ListNamespaceChangeOrdersRequest $request ListNamespaceChangeOrdersRequest
     *
     * @return ListNamespaceChangeOrdersResponse ListNamespaceChangeOrdersResponse
     */
    public function listNamespaceChangeOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNamespaceChangeOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the ConfigMap instances in a namespace.
     *  *
     * @param ListNamespacedConfigMapsRequest $request ListNamespacedConfigMapsRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNamespacedConfigMapsResponse ListNamespacedConfigMapsResponse
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
     * @summary Queries the ConfigMap instances in a namespace.
     *  *
     * @param ListNamespacedConfigMapsRequest $request ListNamespacedConfigMapsRequest
     *
     * @return ListNamespacedConfigMapsResponse ListNamespacedConfigMapsResponse
     */
    public function listNamespacedConfigMaps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNamespacedConfigMapsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary b2a8a925-477a-4ed7-b825-d5e22500\\*\\*\\*\\*
     *  *
     * @param ListPublishedServicesRequest $request ListPublishedServicesRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublishedServicesResponse ListPublishedServicesResponse
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
     * @summary b2a8a925-477a-4ed7-b825-d5e22500\\*\\*\\*\\*
     *  *
     * @param ListPublishedServicesRequest $request ListPublishedServicesRequest
     *
     * @return ListPublishedServicesResponse ListPublishedServicesResponse
     */
    public function listPublishedServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPublishedServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about Secrets in a namespace.
     *  *
     * @param ListSecretsRequest $request ListSecretsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecretsResponse ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $headers, $runtime)
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
            'action'      => 'ListSecrets',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/secret/secrets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about Secrets in a namespace.
     *  *
     * @param ListSecretsRequest $request ListSecretsRequest
     *
     * @return ListSecretsResponse ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the mapping relationships between applications and tags.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the mapping relationships between applications and tags.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 应用实例列表
     *  *
     * @param string                             $ApplicationId
     * @param ListWebApplicationInstancesRequest $tmpReq        ListWebApplicationInstancesRequest
     * @param string[]                           $headers       map
     * @param RuntimeOptions                     $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListWebApplicationInstancesResponse ListWebApplicationInstancesResponse
     */
    public function listWebApplicationInstancesWithOptions($ApplicationId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWebApplicationInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->statuses)) {
            $request->statusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statuses, 'Statuses', 'json');
        }
        if (!Utils::isUnset($tmpReq->versionIds)) {
            $request->versionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->versionIds, 'VersionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statusesShrink)) {
            $query['Statuses'] = $request->statusesShrink;
        }
        if (!Utils::isUnset($request->versionIdsShrink)) {
            $query['VersionIds'] = $request->versionIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWebApplicationInstances',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications-observability/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWebApplicationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用实例列表
     *  *
     * @param string                             $ApplicationId
     * @param ListWebApplicationInstancesRequest $request       ListWebApplicationInstancesRequest
     *
     * @return ListWebApplicationInstancesResponse ListWebApplicationInstancesResponse
     */
    public function listWebApplicationInstances($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebApplicationInstancesWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 版本列表
     *  *
     * @param string                             $ApplicationId
     * @param ListWebApplicationRevisionsRequest $request       ListWebApplicationRevisionsRequest
     * @param string[]                           $headers       map
     * @param RuntimeOptions                     $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListWebApplicationRevisionsResponse ListWebApplicationRevisionsResponse
     */
    public function listWebApplicationRevisionsWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWebApplicationRevisions',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-revisions/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/revisions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWebApplicationRevisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 版本列表
     *  *
     * @param string                             $ApplicationId
     * @param ListWebApplicationRevisionsRequest $request       ListWebApplicationRevisionsRequest
     *
     * @return ListWebApplicationRevisionsResponse ListWebApplicationRevisionsResponse
     */
    public function listWebApplicationRevisions($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebApplicationRevisionsWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 应用列表
     *  *
     * @param ListWebApplicationsRequest $request ListWebApplicationsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWebApplicationsResponse ListWebApplicationsResponse
     */
    public function listWebApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWebApplications',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWebApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用列表
     *  *
     * @param ListWebApplicationsRequest $request ListWebApplicationsRequest
     *
     * @return ListWebApplicationsResponse ListWebApplicationsResponse
     */
    public function listWebApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 自定义域名列表.
     *  *
     * @param ListWebCustomDomainsRequest $request ListWebCustomDomainsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWebCustomDomainsResponse ListWebCustomDomainsResponse
     */
    public function listWebCustomDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWebCustomDomains',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/custom-domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWebCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义域名列表.
     *  *
     * @param ListWebCustomDomainsRequest $request ListWebCustomDomainsRequest
     *
     * @return ListWebCustomDomainsResponse ListWebCustomDomainsResponse
     */
    public function listWebCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebCustomDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Activates the Serverless App Engine (SAE) service for free.
     *  *
     * @description > Make sure that your account balance is greater than 0. Otherwise, the SAE service cannot be activated.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenSaeServiceResponse OpenSaeServiceResponse
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
     * @summary Activates the Serverless App Engine (SAE) service for free.
     *  *
     * @description > Make sure that your account balance is greater than 0. Otherwise, the SAE service cannot be activated.
     *  *
     * @return OpenSaeServiceResponse OpenSaeServiceResponse
     */
    public function openSaeService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openSaeServiceWithOptions($headers, $runtime);
    }

    /**
     * @summary 新建版本
     *  *
     * @param string                               $ApplicationId
     * @param PublishWebApplicationRevisionRequest $request       PublishWebApplicationRevisionRequest
     * @param string[]                             $headers       map
     * @param RuntimeOptions                       $runtime       runtime options for this request RuntimeOptions
     *
     * @return PublishWebApplicationRevisionResponse PublishWebApplicationRevisionResponse
     */
    public function publishWebApplicationRevisionWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PublishWebApplicationRevision',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-revisions/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/revisions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishWebApplicationRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建版本
     *  *
     * @param string                               $ApplicationId
     * @param PublishWebApplicationRevisionRequest $request       PublishWebApplicationRevisionRequest
     *
     * @return PublishWebApplicationRevisionResponse PublishWebApplicationRevisionResponse
     */
    public function publishWebApplicationRevision($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishWebApplicationRevisionWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the resource usage of an application.
     *  *
     * @param QueryResourceStaticsRequest $request QueryResourceStaticsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryResourceStaticsResponse QueryResourceStaticsResponse
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
     * @summary Queries the resource usage of an application.
     *  *
     * @param QueryResourceStaticsRequest $request QueryResourceStaticsRequest
     *
     * @return QueryResourceStaticsResponse QueryResourceStaticsResponse
     */
    public function queryResourceStatics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryResourceStaticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Reduces capacity by instance IDs.
     *  *
     * @param ReduceApplicationCapacityByInstanceIdsRequest $request ReduceApplicationCapacityByInstanceIdsRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ReduceApplicationCapacityByInstanceIdsResponse ReduceApplicationCapacityByInstanceIdsResponse
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
     * @summary Reduces capacity by instance IDs.
     *  *
     * @param ReduceApplicationCapacityByInstanceIdsRequest $request ReduceApplicationCapacityByInstanceIdsRequest
     *
     * @return ReduceApplicationCapacityByInstanceIdsResponse ReduceApplicationCapacityByInstanceIdsResponse
     */
    public function reduceApplicationCapacityByInstanceIds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reduceApplicationCapacityByInstanceIdsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Scales an application.
     *  *
     * @param RescaleApplicationRequest $request RescaleApplicationRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RescaleApplicationResponse RescaleApplicationResponse
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
     * @summary Scales an application.
     *  *
     * @param RescaleApplicationRequest $request RescaleApplicationRequest
     *
     * @return RescaleApplicationResponse RescaleApplicationResponse
     */
    public function rescaleApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rescaleApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Changes the instance specifications of an application.
     *  *
     * @param RescaleApplicationVerticallyRequest $request RescaleApplicationVerticallyRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RescaleApplicationVerticallyResponse RescaleApplicationVerticallyResponse
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
     * @summary Changes the instance specifications of an application.
     *  *
     * @param RescaleApplicationVerticallyRequest $request RescaleApplicationVerticallyRequest
     *
     * @return RescaleApplicationVerticallyResponse RescaleApplicationVerticallyResponse
     */
    public function rescaleApplicationVertically($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rescaleApplicationVerticallyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Restarts an application.
     *  *
     * @param RestartApplicationRequest $request RestartApplicationRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartApplicationResponse RestartApplicationResponse
     */
    public function restartApplicationWithOptions($request, $headers, $runtime)
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
     * @summary Restarts an application.
     *  *
     * @param RestartApplicationRequest $request RestartApplicationRequest
     *
     * @return RestartApplicationResponse RestartApplicationResponse
     */
    public function restartApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Restarts one or more instances in an application.
     *  *
     * @param RestartInstancesRequest $request RestartInstancesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartInstancesResponse RestartInstancesResponse
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
     * @summary Restarts one or more instances in an application.
     *  *
     * @param RestartInstancesRequest $request RestartInstancesRequest
     *
     * @return RestartInstancesResponse RestartInstancesResponse
     */
    public function restartInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Rolls back an application.
     *  *
     * @param RollbackApplicationRequest $request RollbackApplicationRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackApplicationResponse RollbackApplicationResponse
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
     * @summary Rolls back an application.
     *  *
     * @param RollbackApplicationRequest $request RollbackApplicationRequest
     *
     * @return RollbackApplicationResponse RollbackApplicationResponse
     */
    public function rollbackApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Starts an application.
     *  *
     * @param StartApplicationRequest $request StartApplicationRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StartApplicationResponse StartApplicationResponse
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
     * @summary Starts an application.
     *  *
     * @param StartApplicationRequest $request StartApplicationRequest
     *
     * @return StartApplicationResponse StartApplicationResponse
     */
    public function startApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 启动应用
     *  *
     * @param string                     $ApplicationId
     * @param StartWebApplicationRequest $request       StartWebApplicationRequest
     * @param string[]                   $headers       map
     * @param RuntimeOptions             $runtime       runtime options for this request RuntimeOptions
     *
     * @return StartWebApplicationResponse StartWebApplicationResponse
     */
    public function startWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
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
            'action'      => 'StartWebApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-ops/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动应用
     *  *
     * @param string                     $ApplicationId
     * @param StartWebApplicationRequest $request       StartWebApplicationRequest
     *
     * @return StartWebApplicationResponse StartWebApplicationResponse
     */
    public function startWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 0099b7be-5f5b-4512-a7fc-56049ef1\\*\\*\\*\\*
     *  *
     * @param StopApplicationRequest $request StopApplicationRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StopApplicationResponse StopApplicationResponse
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
     * @summary 0099b7be-5f5b-4512-a7fc-56049ef1\\*\\*\\*\\*
     *  *
     * @param StopApplicationRequest $request StopApplicationRequest
     *
     * @return StopApplicationResponse StopApplicationResponse
     */
    public function stopApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 停止应用
     *  *
     * @param string                    $ApplicationId
     * @param StopWebApplicationRequest $request       StopWebApplicationRequest
     * @param string[]                  $headers       map
     * @param RuntimeOptions            $runtime       runtime options for this request RuntimeOptions
     *
     * @return StopWebApplicationResponse StopWebApplicationResponse
     */
    public function stopWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
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
            'action'      => 'StopWebApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-ops/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止应用
     *  *
     * @param string                    $ApplicationId
     * @param StopWebApplicationRequest $request       StopWebApplicationRequest
     *
     * @return StopWebApplicationResponse StopWebApplicationResponse
     */
    public function stopWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary Suspends a job.
     *  *
     * @param SuspendJobRequest $request SuspendJobRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendJobResponse SuspendJobResponse
     */
    public function suspendJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->suspend)) {
            $query['Suspend'] = $request->suspend;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/suspendJob',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SuspendJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Suspends a job.
     *  *
     * @param SuspendJobRequest $request SuspendJobRequest
     *
     * @return SuspendJobResponse SuspendJobResponse
     */
    public function suspendJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->suspendJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary cn-beijing
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary cn-beijing
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 0099b7be-5f5b-4512-a7fc-56049ef1\\*\\*\\*\\*
     *  *
     * @param UnbindSlbRequest $request UnbindSlbRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindSlbResponse UnbindSlbResponse
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
     * @summary 0099b7be-5f5b-4512-a7fc-56049ef1\\*\\*\\*\\*
     *  *
     * @param UnbindSlbRequest $request UnbindSlbRequest
     *
     * @return UnbindSlbResponse UnbindSlbResponse
     */
    public function unbindSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 017f39b8-dfa4-4e16-a84b-1dcee4b1\\*\\*\\*\\*
     *  *
     * @param UpdateAppSecurityGroupRequest $request UpdateAppSecurityGroupRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppSecurityGroupResponse UpdateAppSecurityGroupResponse
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
     * @summary 017f39b8-dfa4-4e16-a84b-1dcee4b1\\*\\*\\*\\*
     *  *
     * @param UpdateAppSecurityGroupRequest $request UpdateAppSecurityGroupRequest
     *
     * @return UpdateAppSecurityGroupResponse UpdateAppSecurityGroupResponse
     */
    public function updateAppSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppSecurityGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新应用描述信息
     *  *
     * @param UpdateApplicationDescriptionRequest $request UpdateApplicationDescriptionRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationDescriptionResponse UpdateApplicationDescriptionResponse
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
     * @summary 更新应用描述信息
     *  *
     * @param UpdateApplicationDescriptionRequest $request UpdateApplicationDescriptionRequest
     *
     * @return UpdateApplicationDescriptionResponse UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationDescriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates the auto scaling policy of an application.
     *  *
     * @description ##
     * If you want to configure more than 50 instances for an application, you must submit a [ticket](https://workorder.console.aliyun.com/#/ticket/createIndex) to add your account to the whitelist.
     *  *
     * @param UpdateApplicationScalingRuleRequest $request UpdateApplicationScalingRuleRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationScalingRuleResponse UpdateApplicationScalingRuleResponse
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
     * @summary Updates the auto scaling policy of an application.
     *  *
     * @description ##
     * If you want to configure more than 50 instances for an application, you must submit a [ticket](https://workorder.console.aliyun.com/#/ticket/createIndex) to add your account to the whitelist.
     *  *
     * @param UpdateApplicationScalingRuleRequest $request UpdateApplicationScalingRuleRequest
     *
     * @return UpdateApplicationScalingRuleResponse UpdateApplicationScalingRuleResponse
     */
    public function updateApplicationScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateApplicationVswitchesRequest $request UpdateApplicationVswitchesRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationVswitchesResponse UpdateApplicationVswitchesResponse
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
     * @param UpdateApplicationVswitchesRequest $request UpdateApplicationVswitchesRequest
     *
     * @return UpdateApplicationVswitchesResponse UpdateApplicationVswitchesResponse
     */
    public function updateApplicationVswitches($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationVswitchesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 1
     *  *
     * @param UpdateConfigMapRequest $request UpdateConfigMapRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigMapResponse UpdateConfigMapResponse
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
     * @summary 1
     *  *
     * @param UpdateConfigMapRequest $request UpdateConfigMapRequest
     *
     * @return UpdateConfigMapResponse UpdateConfigMapResponse
     */
    public function updateConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates a canary release rule.
     *  *
     * @param UpdateGreyTagRouteRequest $request UpdateGreyTagRouteRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGreyTagRouteResponse UpdateGreyTagRouteResponse
     */
    public function updateGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->albRules)) {
            $query['AlbRules'] = $request->albRules;
        }
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
     * @summary Updates a canary release rule.
     *  *
     * @param UpdateGreyTagRouteRequest $request UpdateGreyTagRouteRequest
     *
     * @return UpdateGreyTagRouteResponse UpdateGreyTagRouteResponse
     */
    public function updateGreyTagRoute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGreyTagRouteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateIngressRequest $request UpdateIngressRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIngressResponse UpdateIngressResponse
     */
    public function updateIngressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certIds)) {
            $query['CertIds'] = $request->certIds;
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
     * @param UpdateIngressRequest $request UpdateIngressRequest
     *
     * @return UpdateIngressResponse UpdateIngressResponse
     */
    public function updateIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIngressWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates a job template.
     *  *
     * @param UpdateJobRequest $request UpdateJobRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrAssumeRoleArn)) {
            $query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backoffLimit)) {
            $query['BackoffLimit'] = $request->backoffLimit;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            $query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->concurrencyPolicy)) {
            $query['ConcurrencyPolicy'] = $request->concurrencyPolicy;
        }
        if (!Utils::isUnset($request->customHostAlias)) {
            $query['CustomHostAlias'] = $request->customHostAlias;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            $query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imagePullSecrets)) {
            $query['ImagePullSecrets'] = $request->imagePullSecrets;
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
        if (!Utils::isUnset($request->python)) {
            $query['Python'] = $request->python;
        }
        if (!Utils::isUnset($request->pythonModules)) {
            $query['PythonModules'] = $request->pythonModules;
        }
        if (!Utils::isUnset($request->refAppId)) {
            $query['RefAppId'] = $request->refAppId;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->slice)) {
            $query['Slice'] = $request->slice;
        }
        if (!Utils::isUnset($request->sliceEnvs)) {
            $query['SliceEnvs'] = $request->sliceEnvs;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            $query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->timezone)) {
            $query['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->tomcatConfig)) {
            $query['TomcatConfig'] = $request->tomcatConfig;
        }
        if (!Utils::isUnset($request->triggerConfig)) {
            $query['TriggerConfig'] = $request->triggerConfig;
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
        if (!Utils::isUnset($request->configMapMountDesc)) {
            $body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }
        if (!Utils::isUnset($request->enableImageAccl)) {
            $body['EnableImageAccl'] = $request->enableImageAccl;
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
        if (!Utils::isUnset($request->php)) {
            $body['Php'] = $request->php;
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
            'action'      => 'UpdateJob',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/job/updateJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a job template.
     *  *
     * @param UpdateJobRequest $request UpdateJobRequest
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates the information about a namespace.
     *  *
     * @param UpdateNamespaceRequest $request UpdateNamespaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNamespaceResponse UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableMicroRegistration)) {
            $query['EnableMicroRegistration'] = $request->enableMicroRegistration;
        }
        if (!Utils::isUnset($request->nameSpaceShortId)) {
            $query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }
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
     * @summary Updates the information about a namespace.
     *  *
     * @param UpdateNamespaceRequest $request UpdateNamespaceRequest
     *
     * @return UpdateNamespaceResponse UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary cn-beijing:test
     *  *
     * @param UpdateNamespaceVpcRequest $request UpdateNamespaceVpcRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNamespaceVpcResponse UpdateNamespaceVpcResponse
     */
    public function updateNamespaceVpcWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nameSpaceShortId)) {
            $query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }
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

    /**
     * @summary cn-beijing:test
     *  *
     * @param UpdateNamespaceVpcRequest $request UpdateNamespaceVpcRequest
     *
     * @return UpdateNamespaceVpcResponse UpdateNamespaceVpcResponse
     */
    public function updateNamespaceVpc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceVpcWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary The HTTP status code. Valid values:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *  *
     * @param UpdateSecretRequest $tmpReq  UpdateSecretRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecretResponse UpdateSecretResponse
     */
    public function updateSecretWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSecretShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->secretData)) {
            $request->secretDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->secretData, 'SecretData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->secretDataShrink)) {
            $query['SecretData'] = $request->secretDataShrink;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecret',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/sam/secret/secret',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The HTTP status code. Valid values:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *  *
     * @param UpdateSecretRequest $request UpdateSecretRequest
     *
     * @return UpdateSecretResponse UpdateSecretResponse
     */
    public function updateSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新应用
     *  *
     * @param string                      $ApplicationId
     * @param UpdateWebApplicationRequest $request       UpdateWebApplicationRequest
     * @param string[]                    $headers       map
     * @param RuntimeOptions              $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateWebApplicationResponse UpdateWebApplicationResponse
     */
    public function updateWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebApplication',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/applications/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新应用
     *  *
     * @param string                      $ApplicationId
     * @param UpdateWebApplicationRequest $request       UpdateWebApplicationRequest
     *
     * @return UpdateWebApplicationResponse UpdateWebApplicationResponse
     */
    public function updateWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新弹性配置
     *  *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationScalingConfigRequest $request       UpdateWebApplicationScalingConfigRequest
     * @param string[]                                 $headers       map
     * @param RuntimeOptions                           $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateWebApplicationScalingConfigResponse UpdateWebApplicationScalingConfigResponse
     */
    public function updateWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebApplicationScalingConfig',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-scaling/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWebApplicationScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新弹性配置
     *  *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationScalingConfigRequest $request       UpdateWebApplicationScalingConfigRequest
     *
     * @return UpdateWebApplicationScalingConfigResponse UpdateWebApplicationScalingConfigResponse
     */
    public function updateWebApplicationScalingConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流量配置
     *  *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationTrafficConfigRequest $request       UpdateWebApplicationTrafficConfigRequest
     * @param string[]                                 $headers       map
     * @param RuntimeOptions                           $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateWebApplicationTrafficConfigResponse UpdateWebApplicationTrafficConfigResponse
     */
    public function updateWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebApplicationTrafficConfig',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/application-traffic/' . OpenApiUtilClient::getEncodeParam($ApplicationId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWebApplicationTrafficConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流量配置
     *  *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationTrafficConfigRequest $request       UpdateWebApplicationTrafficConfigRequest
     *
     * @return UpdateWebApplicationTrafficConfigResponse UpdateWebApplicationTrafficConfigResponse
     */
    public function updateWebApplicationTrafficConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新自定义域名.
     *  *
     * @param string                       $DomainName
     * @param UpdateWebCustomDomainRequest $request    UpdateWebCustomDomainRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateWebCustomDomainResponse UpdateWebCustomDomainResponse
     */
    public function updateWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebCustomDomain',
            'version'     => '2019-05-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v2/api/web/custom-domains/' . OpenApiUtilClient::getEncodeParam($DomainName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新自定义域名.
     *  *
     * @param string                       $DomainName
     * @param UpdateWebCustomDomainRequest $request    UpdateWebCustomDomainRequest
     *
     * @return UpdateWebCustomDomainResponse UpdateWebCustomDomainResponse
     */
    public function updateWebCustomDomain($DomainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime);
    }
}
