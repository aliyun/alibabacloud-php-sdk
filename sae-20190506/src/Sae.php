<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortAndRollbackChangeOrderRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortAndRollbackChangeOrderResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortChangeOrderRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\AbortChangeOrderResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStartApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStartApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStopApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStopApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BindNlbRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BindNlbResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\BindSlbRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\BindSlbResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ConfirmPipelineBatchRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ConfirmPipelineBatchResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationShrinkRequest;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneGroupShrinkRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneShrinkRequest;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteInstancesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteInstancesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationRevisionRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebApplicationRevisionResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebCustomDomainRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeleteWebCustomDomainResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeployApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeployApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DeployApplicationShrinkRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationGroupsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationGroupsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationImageRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationImageResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationMseServiceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationMseServiceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationNlbsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationNlbsResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\DowngradeApplicationApmServiceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\DowngradeApplicationApmServiceResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\EnableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\EnableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ExecJobRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ExecJobResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetApplicationResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\GetWebshellTokenRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\GetWebshellTokenResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsForSwimmingLaneRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsForSwimmingLaneResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesPageRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesPageResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGatewayRoutesRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGatewayRoutesResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGroupTagsRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGroupTagsResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryArmsEnableRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryArmsEnableResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\UnbindNlbRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UnbindNlbResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateAppModeRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateAppModeResponse;
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
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSwimmingLaneEnableAttributeRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSwimmingLaneEnableAttributeResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationScalingConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationScalingConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationTrafficConfigRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebApplicationTrafficConfigResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebCustomDomainRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateWebCustomDomainResponse;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpgradeApplicationApmServiceRequest;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpgradeApplicationApmServiceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Terminates a change order and rolls back the corresponding application.
     *
     * @param request - AbortAndRollbackChangeOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbortAndRollbackChangeOrderResponse
     *
     * @param AbortAndRollbackChangeOrderRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AbortAndRollbackChangeOrderResponse
     */
    public function abortAndRollbackChangeOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeOrderId) {
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortAndRollbackChangeOrder',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/AbortAndRollbackChangeOrder',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AbortAndRollbackChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a change order and rolls back the corresponding application.
     *
     * @param request - AbortAndRollbackChangeOrderRequest
     *
     * @returns AbortAndRollbackChangeOrderResponse
     *
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
     * Terminate a change order.
     *
     * @param request - AbortChangeOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbortChangeOrderResponse
     *
     * @param AbortChangeOrderRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AbortChangeOrderResponse
     */
    public function abortChangeOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeOrderId) {
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }

        if (null !== $request->rollback) {
            @$query['Rollback'] = $request->rollback;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortChangeOrder',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/AbortChangeOrder',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AbortChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminate a change order.
     *
     * @param request - AbortChangeOrderRequest
     *
     * @returns AbortChangeOrderResponse
     *
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
     * Starts multiple applications at a time.
     *
     * @param request - BatchStartApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStartApplicationsResponse
     *
     * @param BatchStartApplicationsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return BatchStartApplicationsResponse
     */
    public function batchStartApplicationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStartApplications',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/batchStartApplications',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchStartApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts multiple applications at a time.
     *
     * @param request - BatchStartApplicationsRequest
     *
     * @returns BatchStartApplicationsResponse
     *
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
     * Stop applications in batches.
     *
     * @param request - BatchStopApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStopApplicationsResponse
     *
     * @param BatchStopApplicationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BatchStopApplicationsResponse
     */
    public function batchStopApplicationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStopApplications',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/batchStopApplications',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchStopApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stop applications in batches.
     *
     * @param request - BatchStopApplicationsRequest
     *
     * @returns BatchStopApplicationsResponse
     *
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
     * Associates a Network Load Balancer (NLB) instance with an application.
     *
     * @param request - BindNlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindNlbResponse
     *
     * @param BindNlbRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BindNlbResponse
     */
    public function bindNlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        if (null !== $request->nlbId) {
            @$query['NlbId'] = $request->nlbId;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindNlb',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/nlb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindNlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a Network Load Balancer (NLB) instance with an application.
     *
     * @param request - BindNlbRequest
     *
     * @returns BindNlbResponse
     *
     * @param BindNlbRequest $request
     *
     * @return BindNlbResponse
     */
    public function bindNlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindNlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - BindSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindSlbResponse
     *
     * @param BindSlbRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BindSlbResponse
     */
    public function bindSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->internet) {
            @$query['Internet'] = $request->internet;
        }

        if (null !== $request->internetSlbChargeType) {
            @$query['InternetSlbChargeType'] = $request->internetSlbChargeType;
        }

        if (null !== $request->internetSlbId) {
            @$query['InternetSlbId'] = $request->internetSlbId;
        }

        if (null !== $request->intranet) {
            @$query['Intranet'] = $request->intranet;
        }

        if (null !== $request->intranetSlbChargeType) {
            @$query['IntranetSlbChargeType'] = $request->intranetSlbChargeType;
        }

        if (null !== $request->intranetSlbId) {
            @$query['IntranetSlbId'] = $request->intranetSlbId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindSlb',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/slb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindSlbRequest
     *
     * @returns BindSlbResponse
     *
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
     * Confirms whether to start the next batch.
     *
     * @param request - ConfirmPipelineBatchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmPipelineBatchResponse
     *
     * @param ConfirmPipelineBatchRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ConfirmPipelineBatchResponse
     */
    public function confirmPipelineBatchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->confirm) {
            @$query['Confirm'] = $request->confirm;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmPipelineBatch',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/ConfirmPipelineBatch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ConfirmPipelineBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Confirms whether to start the next batch.
     *
     * @param request - ConfirmPipelineBatchRequest
     *
     * @returns ConfirmPipelineBatchResponse
     *
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
     * Creates an application.
     *
     * @param tmpReq - CreateApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->initContainersConfig) {
            $request->initContainersConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->initContainersConfig, 'InitContainersConfig', 'json');
        }

        if (null !== $tmpReq->sidecarContainersConfig) {
            $request->sidecarContainersConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sidecarContainersConfig, 'SidecarContainersConfig', 'json');
        }

        $query = [];
        if (null !== $request->acrAssumeRoleArn) {
            @$query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }

        if (null !== $request->appDescription) {
            @$query['AppDescription'] = $request->appDescription;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->autoConfig) {
            @$query['AutoConfig'] = $request->autoConfig;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->commandArgs) {
            @$query['CommandArgs'] = $request->commandArgs;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->customHostAlias) {
            @$query['CustomHostAlias'] = $request->customHostAlias;
        }

        if (null !== $request->customImageNetworkType) {
            @$query['CustomImageNetworkType'] = $request->customImageNetworkType;
        }

        if (null !== $request->deploy) {
            @$query['Deploy'] = $request->deploy;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->dotnet) {
            @$query['Dotnet'] = $request->dotnet;
        }

        if (null !== $request->edasContainerVersion) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }

        if (null !== $request->enableCpuBurst) {
            @$query['EnableCpuBurst'] = $request->enableCpuBurst;
        }

        if (null !== $request->enableEbpf) {
            @$query['EnableEbpf'] = $request->enableEbpf;
        }

        if (null !== $request->enableNewArms) {
            @$query['EnableNewArms'] = $request->enableNewArms;
        }

        if (null !== $request->enablePrometheus) {
            @$query['EnablePrometheus'] = $request->enablePrometheus;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->gpuConfig) {
            @$query['GpuConfig'] = $request->gpuConfig;
        }

        if (null !== $request->headlessPvtzDiscoverySvc) {
            @$query['HeadlessPvtzDiscoverySvc'] = $request->headlessPvtzDiscoverySvc;
        }

        if (null !== $request->html) {
            @$query['Html'] = $request->html;
        }

        if (null !== $request->imagePullSecrets) {
            @$query['ImagePullSecrets'] = $request->imagePullSecrets;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->isStateful) {
            @$query['IsStateful'] = $request->isStateful;
        }

        if (null !== $request->jarStartArgs) {
            @$query['JarStartArgs'] = $request->jarStartArgs;
        }

        if (null !== $request->jarStartOptions) {
            @$query['JarStartOptions'] = $request->jarStartOptions;
        }

        if (null !== $request->jdk) {
            @$query['Jdk'] = $request->jdk;
        }

        if (null !== $request->kafkaConfigs) {
            @$query['KafkaConfigs'] = $request->kafkaConfigs;
        }

        if (null !== $request->liveness) {
            @$query['Liveness'] = $request->liveness;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->microRegistration) {
            @$query['MicroRegistration'] = $request->microRegistration;
        }

        if (null !== $request->microserviceEngineConfig) {
            @$query['MicroserviceEngineConfig'] = $request->microserviceEngineConfig;
        }

        if (null !== $request->mountDesc) {
            @$query['MountDesc'] = $request->mountDesc;
        }

        if (null !== $request->mountHost) {
            @$query['MountHost'] = $request->mountHost;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->nasConfigs) {
            @$query['NasConfigs'] = $request->nasConfigs;
        }

        if (null !== $request->nasId) {
            @$query['NasId'] = $request->nasId;
        }

        if (null !== $request->newSaeVersion) {
            @$query['NewSaeVersion'] = $request->newSaeVersion;
        }

        if (null !== $request->oidcRoleName) {
            @$query['OidcRoleName'] = $request->oidcRoleName;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->packageUrl) {
            @$query['PackageUrl'] = $request->packageUrl;
        }

        if (null !== $request->packageVersion) {
            @$query['PackageVersion'] = $request->packageVersion;
        }

        if (null !== $request->phpArmsConfigLocation) {
            @$query['PhpArmsConfigLocation'] = $request->phpArmsConfigLocation;
        }

        if (null !== $request->phpConfigLocation) {
            @$query['PhpConfigLocation'] = $request->phpConfigLocation;
        }

        if (null !== $request->postStart) {
            @$query['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$query['PreStop'] = $request->preStop;
        }

        if (null !== $request->programmingLanguage) {
            @$query['ProgrammingLanguage'] = $request->programmingLanguage;
        }

        if (null !== $request->pvtzDiscoverySvc) {
            @$query['PvtzDiscoverySvc'] = $request->pvtzDiscoverySvc;
        }

        if (null !== $request->python) {
            @$query['Python'] = $request->python;
        }

        if (null !== $request->pythonModules) {
            @$query['PythonModules'] = $request->pythonModules;
        }

        if (null !== $request->readiness) {
            @$query['Readiness'] = $request->readiness;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->saeVersion) {
            @$query['SaeVersion'] = $request->saeVersion;
        }

        if (null !== $request->secretMountDesc) {
            @$query['SecretMountDesc'] = $request->secretMountDesc;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->slsConfigs) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }

        if (null !== $request->startupProbe) {
            @$query['StartupProbe'] = $request->startupProbe;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->timezone) {
            @$query['Timezone'] = $request->timezone;
        }

        if (null !== $request->tomcatConfig) {
            @$query['TomcatConfig'] = $request->tomcatConfig;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->warStartOptions) {
            @$query['WarStartOptions'] = $request->warStartOptions;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        $body = [];
        if (null !== $request->acrInstanceId) {
            @$body['AcrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->associateEip) {
            @$body['AssociateEip'] = $request->associateEip;
        }

        if (null !== $request->baseAppId) {
            @$body['BaseAppId'] = $request->baseAppId;
        }

        if (null !== $request->configMapMountDesc) {
            @$body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }

        if (null !== $request->emptyDirDesc) {
            @$body['EmptyDirDesc'] = $request->emptyDirDesc;
        }

        if (null !== $request->enableSidecarResourceIsolated) {
            @$body['EnableSidecarResourceIsolated'] = $request->enableSidecarResourceIsolated;
        }

        if (null !== $request->initContainersConfigShrink) {
            @$body['InitContainersConfig'] = $request->initContainersConfigShrink;
        }

        if (null !== $request->microRegistrationConfig) {
            @$body['MicroRegistrationConfig'] = $request->microRegistrationConfig;
        }

        if (null !== $request->ossAkId) {
            @$body['OssAkId'] = $request->ossAkId;
        }

        if (null !== $request->ossAkSecret) {
            @$body['OssAkSecret'] = $request->ossAkSecret;
        }

        if (null !== $request->ossMountDescs) {
            @$body['OssMountDescs'] = $request->ossMountDescs;
        }

        if (null !== $request->php) {
            @$body['Php'] = $request->php;
        }

        if (null !== $request->phpConfig) {
            @$body['PhpConfig'] = $request->phpConfig;
        }

        if (null !== $request->serviceTags) {
            @$body['ServiceTags'] = $request->serviceTags;
        }

        if (null !== $request->sidecarContainersConfigShrink) {
            @$body['SidecarContainersConfig'] = $request->sidecarContainersConfigShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/createApplication',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
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
     * Null.
     *
     * @remarks
     * The HTTP status code. Take note of the following rules:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *
     * @param request - CreateApplicationScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationScalingRuleResponse
     *
     * @param CreateApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateApplicationScalingRuleResponse
     */
    public function createApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->enableIdle) {
            @$query['EnableIdle'] = $request->enableIdle;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['MinReadyInstances'] = $request->minReadyInstances;
        }

        if (null !== $request->scalingRuleEnable) {
            @$query['ScalingRuleEnable'] = $request->scalingRuleEnable;
        }

        if (null !== $request->scalingRuleMetric) {
            @$query['ScalingRuleMetric'] = $request->scalingRuleMetric;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        if (null !== $request->scalingRuleTimer) {
            @$query['ScalingRuleTimer'] = $request->scalingRuleTimer;
        }

        if (null !== $request->scalingRuleType) {
            @$query['ScalingRuleType'] = $request->scalingRuleType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationScalingRule',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/applicationScalingRule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Null.
     *
     * @remarks
     * The HTTP status code. Take note of the following rules:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *
     * @param request - CreateApplicationScalingRuleRequest
     *
     * @returns CreateApplicationScalingRuleResponse
     *
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
     * Create a ConfigMap in a namespace.
     *
     * @param request - CreateConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigMapResponse
     *
     * @param CreateConfigMapRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateConfigMapResponse
     */
    public function createConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConfigMap',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/configmap/configMap',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a ConfigMap in a namespace.
     *
     * @param request - CreateConfigMapRequest
     *
     * @returns CreateConfigMapResponse
     *
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
     * Creates a canary release rule for a Spring Cloud or Dubbo application.
     *
     * @remarks
     * >  You can configure only one canary release rule for each application.
     *
     * @param request - CreateGreyTagRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGreyTagRouteResponse
     *
     * @param CreateGreyTagRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateGreyTagRouteResponse
     */
    public function createGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->albRules) {
            @$query['AlbRules'] = $request->albRules;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dubboRules) {
            @$query['DubboRules'] = $request->dubboRules;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->scRules) {
            @$query['ScRules'] = $request->scRules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGreyTagRoute',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/tagroute/greyTagRoute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a canary release rule for a Spring Cloud or Dubbo application.
     *
     * @remarks
     * >  You can configure only one canary release rule for each application.
     *
     * @param request - CreateGreyTagRouteRequest
     *
     * @returns CreateGreyTagRouteResponse
     *
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
     * Creates a routing rule.
     *
     * @param request - CreateIngressRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIngressResponse
     *
     * @param CreateIngressRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateIngressResponse
     */
    public function createIngressWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->certIds) {
            @$query['CertIds'] = $request->certIds;
        }

        if (null !== $request->corsConfig) {
            @$query['CorsConfig'] = $request->corsConfig;
        }

        if (null !== $request->defaultRule) {
            @$query['DefaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableXForwardedFor) {
            @$query['EnableXForwardedFor'] = $request->enableXForwardedFor;
        }

        if (null !== $request->enableXForwardedForClientSrcPort) {
            @$query['EnableXForwardedForClientSrcPort'] = $request->enableXForwardedForClientSrcPort;
        }

        if (null !== $request->enableXForwardedForProto) {
            @$query['EnableXForwardedForProto'] = $request->enableXForwardedForProto;
        }

        if (null !== $request->enableXForwardedForSlbId) {
            @$query['EnableXForwardedForSlbId'] = $request->enableXForwardedForSlbId;
        }

        if (null !== $request->enableXForwardedForSlbPort) {
            @$query['EnableXForwardedForSlbPort'] = $request->enableXForwardedForSlbPort;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalanceType) {
            @$query['LoadBalanceType'] = $request->loadBalanceType;
        }

        if (null !== $request->loadBalancerEdition) {
            @$query['LoadBalancerEdition'] = $request->loadBalancerEdition;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->securityPolicyId) {
            @$query['SecurityPolicyId'] = $request->securityPolicyId;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        if (null !== $request->zoneMappings) {
            @$query['ZoneMappings'] = $request->zoneMappings;
        }

        $body = [];
        if (null !== $request->rules) {
            @$body['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIngress',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/ingress/Ingress',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routing rule.
     *
     * @param request - CreateIngressRequest
     *
     * @returns CreateIngressResponse
     *
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
     * Create a job template.
     *
     * @param request - CreateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrAssumeRoleArn) {
            @$query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }

        if (null !== $request->appDescription) {
            @$query['AppDescription'] = $request->appDescription;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->autoConfig) {
            @$query['AutoConfig'] = $request->autoConfig;
        }

        if (null !== $request->backoffLimit) {
            @$query['BackoffLimit'] = $request->backoffLimit;
        }

        if (null !== $request->bestEffortType) {
            @$query['BestEffortType'] = $request->bestEffortType;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->commandArgs) {
            @$query['CommandArgs'] = $request->commandArgs;
        }

        if (null !== $request->concurrencyPolicy) {
            @$query['ConcurrencyPolicy'] = $request->concurrencyPolicy;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->customHostAlias) {
            @$query['CustomHostAlias'] = $request->customHostAlias;
        }

        if (null !== $request->edasContainerVersion) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->imagePullSecrets) {
            @$query['ImagePullSecrets'] = $request->imagePullSecrets;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->jarStartArgs) {
            @$query['JarStartArgs'] = $request->jarStartArgs;
        }

        if (null !== $request->jarStartOptions) {
            @$query['JarStartOptions'] = $request->jarStartOptions;
        }

        if (null !== $request->jdk) {
            @$query['Jdk'] = $request->jdk;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->mountDesc) {
            @$query['MountDesc'] = $request->mountDesc;
        }

        if (null !== $request->mountHost) {
            @$query['MountHost'] = $request->mountHost;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->nasConfigs) {
            @$query['NasConfigs'] = $request->nasConfigs;
        }

        if (null !== $request->nasId) {
            @$query['NasId'] = $request->nasId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->packageUrl) {
            @$query['PackageUrl'] = $request->packageUrl;
        }

        if (null !== $request->packageVersion) {
            @$query['PackageVersion'] = $request->packageVersion;
        }

        if (null !== $request->phpConfigLocation) {
            @$query['PhpConfigLocation'] = $request->phpConfigLocation;
        }

        if (null !== $request->postStart) {
            @$query['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$query['PreStop'] = $request->preStop;
        }

        if (null !== $request->programmingLanguage) {
            @$query['ProgrammingLanguage'] = $request->programmingLanguage;
        }

        if (null !== $request->python) {
            @$query['Python'] = $request->python;
        }

        if (null !== $request->pythonModules) {
            @$query['PythonModules'] = $request->pythonModules;
        }

        if (null !== $request->refAppId) {
            @$query['RefAppId'] = $request->refAppId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->slice) {
            @$query['Slice'] = $request->slice;
        }

        if (null !== $request->sliceEnvs) {
            @$query['SliceEnvs'] = $request->sliceEnvs;
        }

        if (null !== $request->slsConfigs) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->timezone) {
            @$query['Timezone'] = $request->timezone;
        }

        if (null !== $request->tomcatConfig) {
            @$query['TomcatConfig'] = $request->tomcatConfig;
        }

        if (null !== $request->triggerConfig) {
            @$query['TriggerConfig'] = $request->triggerConfig;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->warStartOptions) {
            @$query['WarStartOptions'] = $request->warStartOptions;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        if (null !== $request->workload) {
            @$query['Workload'] = $request->workload;
        }

        $body = [];
        if (null !== $request->acrInstanceId) {
            @$body['AcrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->configMapMountDesc) {
            @$body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }

        if (null !== $request->enableImageAccl) {
            @$body['EnableImageAccl'] = $request->enableImageAccl;
        }

        if (null !== $request->ossAkId) {
            @$body['OssAkId'] = $request->ossAkId;
        }

        if (null !== $request->ossAkSecret) {
            @$body['OssAkSecret'] = $request->ossAkSecret;
        }

        if (null !== $request->ossMountDescs) {
            @$body['OssMountDescs'] = $request->ossMountDescs;
        }

        if (null !== $request->phpConfig) {
            @$body['PhpConfig'] = $request->phpConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/createJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a job template.
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Create a namespace.
     *
     * @param request - CreateNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableMicroRegistration) {
            @$query['EnableMicroRegistration'] = $request->enableMicroRegistration;
        }

        if (null !== $request->nameSpaceShortId) {
            @$query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }

        if (null !== $request->namespaceDescription) {
            @$query['NamespaceDescription'] = $request->namespaceDescription;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/namespace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a namespace.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
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
     * 创建或者更新泳道.
     *
     * @param tmpReq - CreateOrUpdateSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrUpdateSwimmingLaneResponse
     *
     * @param CreateOrUpdateSwimmingLaneRequest $tmpReq
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLaneWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrUpdateSwimmingLaneShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appEntryRule) {
            $request->appEntryRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appEntryRule, 'AppEntryRule', 'json');
        }

        if (null !== $tmpReq->mseGatewayEntryRule) {
            $request->mseGatewayEntryRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mseGatewayEntryRule, 'MseGatewayEntryRule', 'json');
        }

        $query = [];
        if (null !== $request->appEntryRuleShrink) {
            @$query['AppEntryRule'] = $request->appEntryRuleShrink;
        }

        if (null !== $request->canaryModel) {
            @$query['CanaryModel'] = $request->canaryModel;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        if (null !== $request->laneName) {
            @$query['LaneName'] = $request->laneName;
        }

        if (null !== $request->laneTag) {
            @$query['LaneTag'] = $request->laneTag;
        }

        if (null !== $request->mseGatewayEntryRuleShrink) {
            @$query['MseGatewayEntryRule'] = $request->mseGatewayEntryRuleShrink;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrUpdateSwimmingLane',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/createOrUpdateSwimmingLane',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOrUpdateSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建或者更新泳道.
     *
     * @param request - CreateOrUpdateSwimmingLaneRequest
     *
     * @returns CreateOrUpdateSwimmingLaneResponse
     *
     * @param CreateOrUpdateSwimmingLaneRequest $request
     *
     * @return CreateOrUpdateSwimmingLaneResponse
     */
    public function createOrUpdateSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOrUpdateSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建或者更新泳道组.
     *
     * @param tmpReq - CreateOrUpdateSwimmingLaneGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrUpdateSwimmingLaneGroupResponse
     *
     * @param CreateOrUpdateSwimmingLaneGroupRequest $tmpReq
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroupWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrUpdateSwimmingLaneGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appIds) {
            $request->appIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appIds, 'AppIds', 'json');
        }

        $query = [];
        if (null !== $request->appIdsShrink) {
            @$query['AppIds'] = $request->appIdsShrink;
        }

        if (null !== $request->entryAppId) {
            @$query['EntryAppId'] = $request->entryAppId;
        }

        if (null !== $request->entryAppType) {
            @$query['EntryAppType'] = $request->entryAppType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->swimVersion) {
            @$query['SwimVersion'] = $request->swimVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrUpdateSwimmingLaneGroup',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/createOrUpdateSwimmingLaneGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOrUpdateSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建或者更新泳道组.
     *
     * @param request - CreateOrUpdateSwimmingLaneGroupRequest
     *
     * @returns CreateOrUpdateSwimmingLaneGroupResponse
     *
     * @param CreateOrUpdateSwimmingLaneGroupRequest $request
     *
     * @return CreateOrUpdateSwimmingLaneGroupResponse
     */
    public function createOrUpdateSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOrUpdateSwimmingLaneGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a Secret in a namespace.
     *
     * @param tmpReq - CreateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSecretShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->secretData) {
            $request->secretDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->secretData, 'SecretData', 'json');
        }

        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->secretDataShrink) {
            @$query['SecretData'] = $request->secretDataShrink;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->secretType) {
            @$query['SecretType'] = $request->secretType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecret',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/secret/secret',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Secret in a namespace.
     *
     * @param request - CreateSecretRequest
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     *
     * @return CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Create a web application.
     *
     * @remarks
     * Call the CreateWebApplication operation to create a web application.
     *
     * @param request - CreateWebApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWebApplicationResponse
     *
     * @param CreateWebApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateWebApplicationResponse
     */
    public function createWebApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateWebApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a web application.
     *
     * @remarks
     * Call the CreateWebApplication operation to create a web application.
     *
     * @param request - CreateWebApplicationRequest
     *
     * @returns CreateWebApplicationResponse
     *
     * @param CreateWebApplicationRequest $request
     *
     * @return CreateWebApplicationResponse
     */
    public function createWebApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWebApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * Create a custom domain name for the web application.
     *
     * @remarks
     * Create a custom domain name for the web application.
     *
     * @param request - CreateWebCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWebCustomDomainResponse
     *
     * @param CreateWebCustomDomainRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateWebCustomDomainResponse
     */
    public function createWebCustomDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateWebCustomDomain',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/custom-domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a custom domain name for the web application.
     *
     * @remarks
     * Create a custom domain name for the web application.
     *
     * @param request - CreateWebCustomDomainRequest
     *
     * @returns CreateWebCustomDomainResponse
     *
     * @param CreateWebCustomDomainRequest $request
     *
     * @return CreateWebCustomDomainResponse
     */
    public function createWebCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWebCustomDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an application.
     *
     * @param request - DeleteApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/deleteApplication',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application.
     *
     * @param request - DeleteApplicationRequest
     *
     * @returns DeleteApplicationResponse
     *
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
     * 7171a6ca-d1cd-4928-8642-7d5cfe69\\*\\*\\*\\*.
     *
     * @param request - DeleteApplicationScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationScalingRuleResponse
     *
     * @param DeleteApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteApplicationScalingRuleResponse
     */
    public function deleteApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplicationScalingRule',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/applicationScalingRule',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 7171a6ca-d1cd-4928-8642-7d5cfe69\\*\\*\\*\\*.
     *
     * @param request - DeleteApplicationScalingRuleRequest
     *
     * @returns DeleteApplicationScalingRuleResponse
     *
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
     * Deletes a ConfigMap.
     *
     * @param request - DeleteConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigMapResponse
     *
     * @param DeleteConfigMapRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteConfigMapResponse
     */
    public function deleteConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configMapId) {
            @$query['ConfigMapId'] = $request->configMapId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigMap',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/configmap/configMap',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a ConfigMap.
     *
     * @param request - DeleteConfigMapRequest
     *
     * @returns DeleteConfigMapResponse
     *
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
     * Deletes a canary release rule based on the specified rule ID.
     *
     * @param request - DeleteGreyTagRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGreyTagRouteResponse
     *
     * @param DeleteGreyTagRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteGreyTagRouteResponse
     */
    public function deleteGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->greyTagRouteId) {
            @$query['GreyTagRouteId'] = $request->greyTagRouteId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGreyTagRoute',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/tagroute/greyTagRoute',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a canary release rule based on the specified rule ID.
     *
     * @param request - DeleteGreyTagRouteRequest
     *
     * @returns DeleteGreyTagRouteResponse
     *
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
     * Delete a job.
     *
     * @param request - DeleteHistoryJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHistoryJobResponse
     *
     * @param DeleteHistoryJobRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHistoryJobResponse
     */
    public function deleteHistoryJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHistoryJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/deleteHistoryJob',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a job.
     *
     * @param request - DeleteHistoryJobRequest
     *
     * @returns DeleteHistoryJobResponse
     *
     * @param DeleteHistoryJobRequest $request
     *
     * @return DeleteHistoryJobResponse
     */
    public function deleteHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHistoryJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a routing rule.
     *
     * @param request - DeleteIngressRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIngressResponse
     *
     * @param DeleteIngressRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteIngressResponse
     */
    public function deleteIngressWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ingressId) {
            @$query['IngressId'] = $request->ingressId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIngress',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/ingress/Ingress',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a routing rule.
     *
     * @param request - DeleteIngressRequest
     *
     * @returns DeleteIngressResponse
     *
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
     * 删除实例.
     *
     * @param request - DeleteInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstancesResponse
     *
     * @param DeleteInstancesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstances',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/deleteInstances',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstancesRequest
     *
     * @returns DeleteInstancesResponse
     *
     * @param DeleteInstancesRequest $request
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Delete a job template.
     *
     * @param request - DeleteJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobResponse
     *
     * @param DeleteJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/deleteJob',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a job template.
     *
     * @param request - DeleteJobRequest
     *
     * @returns DeleteJobResponse
     *
     * @param DeleteJobRequest $request
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a namespace.
     *
     * @param request - DeleteNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nameSpaceShortId) {
            @$query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/namespace',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a namespace.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
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
     * Deletes a Secret.
     *
     * @param request - DeleteSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretResponse
     *
     * @param DeleteSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecret',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/secret/secret',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Secret.
     *
     * @param request - DeleteSecretRequest
     *
     * @returns DeleteSecretResponse
     *
     * @param DeleteSecretRequest $request
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除泳道组.
     *
     * @param request - DeleteSwimmingLaneGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSwimmingLaneGroupResponse
     *
     * @param DeleteSwimmingLaneGroupRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSwimmingLaneGroup',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/deleteSwimmingLaneGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除泳道组.
     *
     * @param request - DeleteSwimmingLaneGroupRequest
     *
     * @returns DeleteSwimmingLaneGroupResponse
     *
     * @param DeleteSwimmingLaneGroupRequest $request
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSwimmingLaneGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Delete a web application.
     *
     * @remarks
     * Call the DeleteWebApplication operation to delete a web application.
     *
     * @param request - DeleteWebApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebApplicationResponse
     *
     * @param string                      $ApplicationId
     * @param DeleteWebApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteWebApplicationResponse
     */
    public function deleteWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a web application.
     *
     * @remarks
     * Call the DeleteWebApplication operation to delete a web application.
     *
     * @param request - DeleteWebApplicationRequest
     *
     * @returns DeleteWebApplicationResponse
     *
     * @param string                      $ApplicationId
     * @param DeleteWebApplicationRequest $request
     *
     * @return DeleteWebApplicationResponse
     */
    public function deleteWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Delete a web application version.
     *
     * @remarks
     * Delete a web application version.
     *
     * @param request - DeleteWebApplicationRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebApplicationRevisionResponse
     *
     * @param string                              $ApplicationId
     * @param string                              $RevisionId
     * @param DeleteWebApplicationRevisionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteWebApplicationRevisionResponse
     */
    public function deleteWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebApplicationRevision',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-revisions/' . Url::percentEncode($ApplicationId) . '/revisions/' . Url::percentEncode($RevisionId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWebApplicationRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a web application version.
     *
     * @remarks
     * Delete a web application version.
     *
     * @param request - DeleteWebApplicationRevisionRequest
     *
     * @returns DeleteWebApplicationRevisionResponse
     *
     * @param string                              $ApplicationId
     * @param string                              $RevisionId
     * @param DeleteWebApplicationRevisionRequest $request
     *
     * @return DeleteWebApplicationRevisionResponse
     */
    public function deleteWebApplicationRevision($ApplicationId, $RevisionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime);
    }

    /**
     * Delete a custom domain name.
     *
     * @remarks
     * Delete a custom domain name.
     *
     * @param request - DeleteWebCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebCustomDomainResponse
     *
     * @param string                       $DomainName
     * @param DeleteWebCustomDomainRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteWebCustomDomainResponse
     */
    public function deleteWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWebCustomDomain',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/custom-domains/' . Url::percentEncode($DomainName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a custom domain name.
     *
     * @remarks
     * Delete a custom domain name.
     *
     * @param request - DeleteWebCustomDomainRequest
     *
     * @returns DeleteWebCustomDomainResponse
     *
     * @param string                       $DomainName
     * @param DeleteWebCustomDomainRequest $request
     *
     * @return DeleteWebCustomDomainResponse
     */
    public function deleteWebCustomDomain($DomainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime);
    }

    /**
     * Deploys an application.
     *
     * @param tmpReq - DeployApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployApplicationResponse
     *
     * @param DeployApplicationRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeployApplicationResponse
     */
    public function deployApplicationWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeployApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->initContainersConfig) {
            $request->initContainersConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->initContainersConfig, 'InitContainersConfig', 'json');
        }

        if (null !== $tmpReq->sidecarContainersConfig) {
            $request->sidecarContainersConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sidecarContainersConfig, 'SidecarContainersConfig', 'json');
        }

        $query = [];
        if (null !== $request->acrAssumeRoleArn) {
            @$query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoEnableApplicationScalingRule) {
            @$query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }

        if (null !== $request->batchWaitTime) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }

        if (null !== $request->changeOrderDesc) {
            @$query['ChangeOrderDesc'] = $request->changeOrderDesc;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->commandArgs) {
            @$query['CommandArgs'] = $request->commandArgs;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->customHostAlias) {
            @$query['CustomHostAlias'] = $request->customHostAlias;
        }

        if (null !== $request->customImageNetworkType) {
            @$query['CustomImageNetworkType'] = $request->customImageNetworkType;
        }

        if (null !== $request->deploy) {
            @$query['Deploy'] = $request->deploy;
        }

        if (null !== $request->dotnet) {
            @$query['Dotnet'] = $request->dotnet;
        }

        if (null !== $request->edasContainerVersion) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }

        if (null !== $request->enableAhas) {
            @$query['EnableAhas'] = $request->enableAhas;
        }

        if (null !== $request->enableCpuBurst) {
            @$query['EnableCpuBurst'] = $request->enableCpuBurst;
        }

        if (null !== $request->enableGreyTagRoute) {
            @$query['EnableGreyTagRoute'] = $request->enableGreyTagRoute;
        }

        if (null !== $request->enableNewArms) {
            @$query['EnableNewArms'] = $request->enableNewArms;
        }

        if (null !== $request->enablePrometheus) {
            @$query['EnablePrometheus'] = $request->enablePrometheus;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->gpuConfig) {
            @$query['GpuConfig'] = $request->gpuConfig;
        }

        if (null !== $request->html) {
            @$query['Html'] = $request->html;
        }

        if (null !== $request->imagePullSecrets) {
            @$query['ImagePullSecrets'] = $request->imagePullSecrets;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->jarStartArgs) {
            @$query['JarStartArgs'] = $request->jarStartArgs;
        }

        if (null !== $request->jarStartOptions) {
            @$query['JarStartOptions'] = $request->jarStartOptions;
        }

        if (null !== $request->jdk) {
            @$query['Jdk'] = $request->jdk;
        }

        if (null !== $request->kafkaConfigs) {
            @$query['KafkaConfigs'] = $request->kafkaConfigs;
        }

        if (null !== $request->liveness) {
            @$query['Liveness'] = $request->liveness;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->microRegistration) {
            @$query['MicroRegistration'] = $request->microRegistration;
        }

        if (null !== $request->microserviceEngineConfig) {
            @$query['MicroserviceEngineConfig'] = $request->microserviceEngineConfig;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['MinReadyInstances'] = $request->minReadyInstances;
        }

        if (null !== $request->mountDesc) {
            @$query['MountDesc'] = $request->mountDesc;
        }

        if (null !== $request->mountHost) {
            @$query['MountHost'] = $request->mountHost;
        }

        if (null !== $request->nasConfigs) {
            @$query['NasConfigs'] = $request->nasConfigs;
        }

        if (null !== $request->nasId) {
            @$query['NasId'] = $request->nasId;
        }

        if (null !== $request->newSaeVersion) {
            @$query['NewSaeVersion'] = $request->newSaeVersion;
        }

        if (null !== $request->oidcRoleName) {
            @$query['OidcRoleName'] = $request->oidcRoleName;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->packageUrl) {
            @$query['PackageUrl'] = $request->packageUrl;
        }

        if (null !== $request->packageVersion) {
            @$query['PackageVersion'] = $request->packageVersion;
        }

        if (null !== $request->phpArmsConfigLocation) {
            @$query['PhpArmsConfigLocation'] = $request->phpArmsConfigLocation;
        }

        if (null !== $request->phpConfigLocation) {
            @$query['PhpConfigLocation'] = $request->phpConfigLocation;
        }

        if (null !== $request->postStart) {
            @$query['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$query['PreStop'] = $request->preStop;
        }

        if (null !== $request->pvtzDiscoverySvc) {
            @$query['PvtzDiscoverySvc'] = $request->pvtzDiscoverySvc;
        }

        if (null !== $request->python) {
            @$query['Python'] = $request->python;
        }

        if (null !== $request->pythonModules) {
            @$query['PythonModules'] = $request->pythonModules;
        }

        if (null !== $request->readiness) {
            @$query['Readiness'] = $request->readiness;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->secretMountDesc) {
            @$query['SecretMountDesc'] = $request->secretMountDesc;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->slsConfigs) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }

        if (null !== $request->startupProbe) {
            @$query['StartupProbe'] = $request->startupProbe;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->timezone) {
            @$query['Timezone'] = $request->timezone;
        }

        if (null !== $request->tomcatConfig) {
            @$query['TomcatConfig'] = $request->tomcatConfig;
        }

        if (null !== $request->updateStrategy) {
            @$query['UpdateStrategy'] = $request->updateStrategy;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->warStartOptions) {
            @$query['WarStartOptions'] = $request->warStartOptions;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        $body = [];
        if (null !== $request->acrInstanceId) {
            @$body['AcrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->associateEip) {
            @$body['AssociateEip'] = $request->associateEip;
        }

        if (null !== $request->configMapMountDesc) {
            @$body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }

        if (null !== $request->emptyDirDesc) {
            @$body['EmptyDirDesc'] = $request->emptyDirDesc;
        }

        if (null !== $request->enableSidecarResourceIsolated) {
            @$body['EnableSidecarResourceIsolated'] = $request->enableSidecarResourceIsolated;
        }

        if (null !== $request->initContainersConfigShrink) {
            @$body['InitContainersConfig'] = $request->initContainersConfigShrink;
        }

        if (null !== $request->microRegistrationConfig) {
            @$body['MicroRegistrationConfig'] = $request->microRegistrationConfig;
        }

        if (null !== $request->ossAkId) {
            @$body['OssAkId'] = $request->ossAkId;
        }

        if (null !== $request->ossAkSecret) {
            @$body['OssAkSecret'] = $request->ossAkSecret;
        }

        if (null !== $request->ossMountDescs) {
            @$body['OssMountDescs'] = $request->ossMountDescs;
        }

        if (null !== $request->php) {
            @$body['Php'] = $request->php;
        }

        if (null !== $request->phpConfig) {
            @$body['PhpConfig'] = $request->phpConfig;
        }

        if (null !== $request->serviceTags) {
            @$body['ServiceTags'] = $request->serviceTags;
        }

        if (null !== $request->sidecarContainersConfigShrink) {
            @$body['SidecarContainersConfig'] = $request->sidecarContainersConfigShrink;
        }

        if (null !== $request->swimlanePvtzDiscoverySvc) {
            @$body['SwimlanePvtzDiscoverySvc'] = $request->swimlanePvtzDiscoverySvc;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/deployApplication',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an application.
     *
     * @param request - DeployApplicationRequest
     *
     * @returns DeployApplicationResponse
     *
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
     * Queries the metadata details of the service of an application.
     *
     * @param request - DescribeAppServiceDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppServiceDetailResponse
     *
     * @param DescribeAppServiceDetailRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAppServiceDetailResponse
     */
    public function describeAppServiceDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->nacosInstanceId) {
            @$query['NacosInstanceId'] = $request->nacosInstanceId;
        }

        if (null !== $request->nacosNamespaceId) {
            @$query['NacosNamespaceId'] = $request->nacosNamespaceId;
        }

        if (null !== $request->serviceGroup) {
            @$query['ServiceGroup'] = $request->serviceGroup;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppServiceDetail',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/service/describeAppServiceDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAppServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metadata details of the service of an application.
     *
     * @param request - DescribeAppServiceDetailRequest
     *
     * @returns DescribeAppServiceDetailResponse
     *
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
     * Queries the configurations of an application.
     *
     * @param request - DescribeApplicationConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationConfigResponse
     *
     * @param DescribeApplicationConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApplicationConfigResponse
     */
    public function describeApplicationConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationConfig',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/describeApplicationConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an application.
     *
     * @param request - DescribeApplicationConfigRequest
     *
     * @returns DescribeApplicationConfigResponse
     *
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
     * Queries the instance groups of an application.
     *
     * @param request - DescribeApplicationGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationGroupsResponse
     *
     * @param DescribeApplicationGroupsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApplicationGroupsResponse
     */
    public function describeApplicationGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationGroups',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/describeApplicationGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance groups of an application.
     *
     * @param request - DescribeApplicationGroupsRequest
     *
     * @returns DescribeApplicationGroupsResponse
     *
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
     * Queries the information about the image of an application.
     *
     * @param request - DescribeApplicationImageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationImageResponse
     *
     * @param DescribeApplicationImageRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeApplicationImageResponse
     */
    public function describeApplicationImageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationImage',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/container/describeApplicationImage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the image of an application.
     *
     * @param request - DescribeApplicationImageRequest
     *
     * @returns DescribeApplicationImageResponse
     *
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
     * Queries a list of application instances.
     *
     * @param request - DescribeApplicationInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationInstancesResponse
     *
     * @param DescribeApplicationInstancesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApplicationInstancesResponse
     */
    public function describeApplicationInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationInstances',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/describeApplicationInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of application instances.
     *
     * @param request - DescribeApplicationInstancesRequest
     *
     * @returns DescribeApplicationInstancesResponse
     *
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
     * @param request - DescribeApplicationMseServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationMseServiceResponse
     *
     * @param DescribeApplicationMseServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeApplicationMseServiceResponse
     */
    public function describeApplicationMseServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->enableAhas) {
            @$query['EnableAhas'] = $request->enableAhas;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationMseService',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/applicationMseService',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationMseServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeApplicationMseServiceRequest
     *
     * @returns DescribeApplicationMseServiceResponse
     *
     * @param DescribeApplicationMseServiceRequest $request
     *
     * @return DescribeApplicationMseServiceResponse
     */
    public function describeApplicationMseService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationMseServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the Network Load Balancer (NLB) instances bound to an application and their listeners.
     *
     * @param request - DescribeApplicationNlbsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationNlbsResponse
     *
     * @param DescribeApplicationNlbsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApplicationNlbsResponse
     */
    public function describeApplicationNlbsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationNlbs',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/nlb',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationNlbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Network Load Balancer (NLB) instances bound to an application and their listeners.
     *
     * @param request - DescribeApplicationNlbsRequest
     *
     * @returns DescribeApplicationNlbsResponse
     *
     * @param DescribeApplicationNlbsRequest $request
     *
     * @return DescribeApplicationNlbsResponse
     */
    public function describeApplicationNlbs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationNlbsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries an Auto Scaling policy of an application.
     *
     * @param request - DescribeApplicationScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationScalingRuleResponse
     *
     * @param DescribeApplicationScalingRuleRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeApplicationScalingRuleResponse
     */
    public function describeApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationScalingRule',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/applicationScalingRule',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an Auto Scaling policy of an application.
     *
     * @param request - DescribeApplicationScalingRuleRequest
     *
     * @returns DescribeApplicationScalingRuleResponse
     *
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
     * Queries the auto scaling policies of an application.
     *
     * @param request - DescribeApplicationScalingRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationScalingRulesResponse
     *
     * @param DescribeApplicationScalingRulesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeApplicationScalingRulesResponse
     */
    public function describeApplicationScalingRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationScalingRules',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/applicationScalingRules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the auto scaling policies of an application.
     *
     * @param request - DescribeApplicationScalingRulesRequest
     *
     * @returns DescribeApplicationScalingRulesResponse
     *
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
     * 017f39b8-dfa4-4e16-a84b-1dcee4b1\\*\\*\\*\\*.
     *
     * @param request - DescribeApplicationSlbsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationSlbsResponse
     *
     * @param DescribeApplicationSlbsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApplicationSlbsResponse
     */
    public function describeApplicationSlbsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationSlbs',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/slb',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationSlbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 017f39b8-dfa4-4e16-a84b-1dcee4b1\\*\\*\\*\\*.
     *
     * @param request - DescribeApplicationSlbsRequest
     *
     * @returns DescribeApplicationSlbsResponse
     *
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
     * Queries the status of an application.
     *
     * @param request - DescribeApplicationStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationStatusResponse
     *
     * @param DescribeApplicationStatusRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApplicationStatusResponse
     */
    public function describeApplicationStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationStatus',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/describeApplicationStatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an application.
     *
     * @param request - DescribeApplicationStatusRequest
     *
     * @returns DescribeApplicationStatusResponse
     *
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
     * Queries the information of a change order.
     *
     * @param request - DescribeChangeOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChangeOrderResponse
     *
     * @param DescribeChangeOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeChangeOrderResponse
     */
    public function describeChangeOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeOrderId) {
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChangeOrder',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/DescribeChangeOrder',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a change order.
     *
     * @param request - DescribeChangeOrderRequest
     *
     * @returns DescribeChangeOrderResponse
     *
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
     * Queries the version of the component that is required when you create and deploy an application.
     *
     * @param request - DescribeComponentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentsResponse
     *
     * @param DescribeComponentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeComponentsResponse
     */
    public function describeComponentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponents',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/resource/components',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the version of the component that is required when you create and deploy an application.
     *
     * @param request - DescribeComponentsRequest
     *
     * @returns DescribeComponentsResponse
     *
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
     * Queries the details of a ConfigMap.
     *
     * @param request - DescribeConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigMapResponse
     *
     * @param DescribeConfigMapRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeConfigMapResponse
     */
    public function describeConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configMapId) {
            @$query['ConfigMapId'] = $request->configMapId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConfigMap',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/configmap/configMap',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a ConfigMap.
     *
     * @param request - DescribeConfigMapRequest
     *
     * @returns DescribeConfigMapResponse
     *
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
     * Query configuration price.
     *
     * @param request - DescribeConfigurationPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigurationPriceResponse
     *
     * @param DescribeConfigurationPriceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeConfigurationPriceResponse
     */
    public function describeConfigurationPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bestEffortType) {
            @$query['BestEffortType'] = $request->bestEffortType;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->newSaeVersion) {
            @$query['NewSaeVersion'] = $request->newSaeVersion;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->workload) {
            @$query['Workload'] = $request->workload;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConfigurationPrice',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/configurationPrice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeConfigurationPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query configuration price.
     *
     * @param request - DescribeConfigurationPriceRequest
     *
     * @returns DescribeConfigurationPriceResponse
     *
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
     * Queries the container components of a microservices application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEdasContainersResponse
     *
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
            'action' => 'DescribeEdasContainers',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/resource/edasContainers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeEdasContainersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the container components of a microservices application.
     *
     * @returns DescribeEdasContainersResponse
     *
     * @return DescribeEdasContainersResponse
     */
    public function describeEdasContainers()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdasContainersWithOptions($headers, $runtime);
    }

    /**
     * Queries the details of a canary release rule based on the specified rule ID.
     *
     * @param request - DescribeGreyTagRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGreyTagRouteResponse
     *
     * @param DescribeGreyTagRouteRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGreyTagRouteResponse
     */
    public function describeGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->greyTagRouteId) {
            @$query['GreyTagRouteId'] = $request->greyTagRouteId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGreyTagRoute',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/tagroute/greyTagRoute',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a canary release rule based on the specified rule ID.
     *
     * @param request - DescribeGreyTagRouteRequest
     *
     * @returns DescribeGreyTagRouteResponse
     *
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
     * Call the DescribeIngress operation to query the details of an Ingress.
     *
     * @param request - DescribeIngressRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIngressResponse
     *
     * @param DescribeIngressRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeIngressResponse
     */
    public function describeIngressWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ingressId) {
            @$query['IngressId'] = $request->ingressId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIngress',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/ingress/Ingress',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the DescribeIngress operation to query the details of an Ingress.
     *
     * @param request - DescribeIngressRequest
     *
     * @returns DescribeIngressResponse
     *
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
     * Queries the logs of a sidecar container instance.
     *
     * @param request - DescribeInstanceLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceLogResponse
     *
     * @param DescribeInstanceLogRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceLogResponse
     */
    public function describeInstanceLogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerId) {
            @$query['ContainerId'] = $request->containerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceLog',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/instance/describeInstanceLog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a sidecar container instance.
     *
     * @param request - DescribeInstanceLogRequest
     *
     * @returns DescribeInstanceLogResponse
     *
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
     * Queries all instance types.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSpecificationsResponse
     *
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
            'action' => 'DescribeInstanceSpecifications',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/quota/instanceSpecifications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSpecificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all instance types.
     *
     * @returns DescribeInstanceSpecificationsResponse
     *
     * @return DescribeInstanceSpecificationsResponse
     */
    public function describeInstanceSpecifications()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceSpecificationsWithOptions($headers, $runtime);
    }

    /**
     * Queries the configurations of a job template.
     *
     * @param request - DescribeJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobResponse
     *
     * @param DescribeJobRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeJobResponse
     */
    public function describeJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/describeJob',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a job template.
     *
     * @param request - DescribeJobRequest
     *
     * @returns DescribeJobResponse
     *
     * @param DescribeJobRequest $request
     *
     * @return DescribeJobResponse
     */
    public function describeJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Query the information about jobs.
     *
     * @param request - DescribeJobHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobHistoryResponse
     *
     * @param DescribeJobHistoryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeJobHistoryResponse
     */
    public function describeJobHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobHistory',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/describeJobHistory',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeJobHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the information about jobs.
     *
     * @param request - DescribeJobHistoryRequest
     *
     * @returns DescribeJobHistoryResponse
     *
     * @param DescribeJobHistoryRequest $request
     *
     * @return DescribeJobHistoryResponse
     */
    public function describeJobHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeJobHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the status of a job.
     *
     * @param request - DescribeJobStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobStatusResponse
     *
     * @param DescribeJobStatusRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeJobStatusResponse
     */
    public function describeJobStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobStatus',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/describeJobStatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a job.
     *
     * @param request - DescribeJobStatusRequest
     *
     * @returns DescribeJobStatusResponse
     *
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
     * Queries the details of a namespace.
     *
     * @param request - DescribeNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespaceResponse
     *
     * @param DescribeNamespaceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nameSpaceShortId) {
            @$query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespace',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/namespace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a namespace.
     *
     * @param request - DescribeNamespaceRequest
     *
     * @returns DescribeNamespaceResponse
     *
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
     * Queries a list of namespaces.
     *
     * @param request - DescribeNamespaceListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespaceListResponse
     *
     * @param DescribeNamespaceListRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNamespaceListResponse
     */
    public function describeNamespaceListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containCustom) {
            @$query['ContainCustom'] = $request->containCustom;
        }

        if (null !== $request->hybridCloudExclude) {
            @$query['HybridCloudExclude'] = $request->hybridCloudExclude;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespaceList',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/namespace/describeNamespaceList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNamespaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of namespaces.
     *
     * @param request - DescribeNamespaceListRequest
     *
     * @returns DescribeNamespaceListResponse
     *
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
     * Query the information about resources in a namespace.
     *
     * @param request - DescribeNamespaceResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespaceResourcesResponse
     *
     * @param DescribeNamespaceResourcesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeNamespaceResourcesResponse
     */
    public function describeNamespaceResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nameSpaceShortId) {
            @$query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespaceResources',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/namespace/describeNamespaceResources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNamespaceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the information about resources in a namespace.
     *
     * @param request - DescribeNamespaceResourcesRequest
     *
     * @returns DescribeNamespaceResourcesResponse
     *
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
     * Queries a list of namespaces.
     *
     * @param request - DescribeNamespacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespacesResponse
     *
     * @param DescribeNamespacesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespaces',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/namespaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of namespaces.
     *
     * @param request - DescribeNamespacesRequest
     *
     * @returns DescribeNamespacesResponse
     *
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
     * View batch information.
     *
     * @param request - DescribePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePipelineResponse
     *
     * @param DescribePipelineRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePipelineResponse
     */
    public function describePipelineWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePipeline',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/DescribePipeline',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View batch information.
     *
     * @param request - DescribePipelineRequest
     *
     * @returns DescribePipelineResponse
     *
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
     * Queries available regions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
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
            'action' => 'DescribeRegions',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/regionConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available regions.
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * Queries the details of a Secret.
     *
     * @param request - DescribeSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecretResponse
     *
     * @param DescribeSecretRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSecretResponse
     */
    public function describeSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecret',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/secret/secret',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Secret.
     *
     * @param request - DescribeSecretRequest
     *
     * @returns DescribeSecretResponse
     *
     * @param DescribeSecretRequest $request
     *
     * @return DescribeSecretResponse
     */
    public function describeSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询泳道详情.
     *
     * @param request - DescribeSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSwimmingLaneResponse
     *
     * @param DescribeSwimmingLaneRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSwimmingLaneResponse
     */
    public function describeSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSwimmingLane',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/describeSwimmingLane',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询泳道详情.
     *
     * @param request - DescribeSwimmingLaneRequest
     *
     * @returns DescribeSwimmingLaneResponse
     *
     * @param DescribeSwimmingLaneRequest $request
     *
     * @return DescribeSwimmingLaneResponse
     */
    public function describeSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * Query web applications.
     *
     * @remarks
     * Call the DescribeWebApplication operation to query web applications.
     *
     * @param request - DescribeWebApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebApplicationResponse
     *
     * @param string                        $ApplicationId
     * @param DescribeWebApplicationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebApplicationResponse
     */
    public function describeWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query web applications.
     *
     * @remarks
     * Call the DescribeWebApplication operation to query web applications.
     *
     * @param request - DescribeWebApplicationRequest
     *
     * @returns DescribeWebApplicationResponse
     *
     * @param string                        $ApplicationId
     * @param DescribeWebApplicationRequest $request
     *
     * @return DescribeWebApplicationResponse
     */
    public function describeWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Query the resource usage of a web application.
     *
     * @remarks
     * Query the resource usage of a web application.
     *
     * @param request - DescribeWebApplicationResourceStaticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebApplicationResourceStaticsResponse
     *
     * @param string                                       $ApplicationId
     * @param DescribeWebApplicationResourceStaticsRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeWebApplicationResourceStaticsResponse
     */
    public function describeWebApplicationResourceStaticsWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebApplicationResourceStatics',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications-observability/' . Url::percentEncode($ApplicationId) . '/resource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebApplicationResourceStaticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the resource usage of a web application.
     *
     * @remarks
     * Query the resource usage of a web application.
     *
     * @param request - DescribeWebApplicationResourceStaticsRequest
     *
     * @returns DescribeWebApplicationResourceStaticsResponse
     *
     * @param string                                       $ApplicationId
     * @param DescribeWebApplicationResourceStaticsRequest $request
     *
     * @return DescribeWebApplicationResourceStaticsResponse
     */
    public function describeWebApplicationResourceStatics($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationResourceStaticsWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Describe a web application version.
     *
     * @remarks
     * Describe a web application version.
     *
     * @param request - DescribeWebApplicationRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebApplicationRevisionResponse
     *
     * @param string                                $ApplicationId
     * @param string                                $RevisionId
     * @param DescribeWebApplicationRevisionRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeWebApplicationRevisionResponse
     */
    public function describeWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebApplicationRevision',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-revisions/' . Url::percentEncode($ApplicationId) . '/revisions/' . Url::percentEncode($RevisionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebApplicationRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describe a web application version.
     *
     * @remarks
     * Describe a web application version.
     *
     * @param request - DescribeWebApplicationRevisionRequest
     *
     * @returns DescribeWebApplicationRevisionResponse
     *
     * @param string                                $ApplicationId
     * @param string                                $RevisionId
     * @param DescribeWebApplicationRevisionRequest $request
     *
     * @return DescribeWebApplicationRevisionResponse
     */
    public function describeWebApplicationRevision($ApplicationId, $RevisionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationRevisionWithOptions($ApplicationId, $RevisionId, $request, $headers, $runtime);
    }

    /**
     * Describe the scaling configuration of a web application.
     *
     * @remarks
     * Call the DescribeWebApplicationScalingConfig operation to obtain the scaling configuration of a web application.
     *
     * @param request - DescribeWebApplicationScalingConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebApplicationScalingConfigResponse
     *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationScalingConfigRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeWebApplicationScalingConfigResponse
     */
    public function describeWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebApplicationScalingConfig',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-scaling/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebApplicationScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describe the scaling configuration of a web application.
     *
     * @remarks
     * Call the DescribeWebApplicationScalingConfig operation to obtain the scaling configuration of a web application.
     *
     * @param request - DescribeWebApplicationScalingConfigRequest
     *
     * @returns DescribeWebApplicationScalingConfigResponse
     *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationScalingConfigRequest $request
     *
     * @return DescribeWebApplicationScalingConfigResponse
     */
    public function describeWebApplicationScalingConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Query the traffic configurations of a web application.
     *
     * @remarks
     * Call the DescribeWebApplicationTrafficConfig operation to query the traffic configurations of a web application.
     *
     * @param request - DescribeWebApplicationTrafficConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebApplicationTrafficConfigResponse
     *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationTrafficConfigRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeWebApplicationTrafficConfigResponse
     */
    public function describeWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebApplicationTrafficConfig',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-traffic/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebApplicationTrafficConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the traffic configurations of a web application.
     *
     * @remarks
     * Call the DescribeWebApplicationTrafficConfig operation to query the traffic configurations of a web application.
     *
     * @param request - DescribeWebApplicationTrafficConfigRequest
     *
     * @returns DescribeWebApplicationTrafficConfigResponse
     *
     * @param string                                     $ApplicationId
     * @param DescribeWebApplicationTrafficConfigRequest $request
     *
     * @return DescribeWebApplicationTrafficConfigResponse
     */
    public function describeWebApplicationTrafficConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Query the details of a custom domain name for a web application.
     *
     * @remarks
     * Query the details of a custom domain name for a web application.
     *
     * @param request - DescribeWebCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebCustomDomainResponse
     *
     * @param string                         $DomainName
     * @param DescribeWebCustomDomainRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebCustomDomainResponse
     */
    public function describeWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebCustomDomain',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/custom-domains/' . Url::percentEncode($DomainName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the details of a custom domain name for a web application.
     *
     * @remarks
     * Query the details of a custom domain name for a web application.
     *
     * @param request - DescribeWebCustomDomainRequest
     *
     * @returns DescribeWebCustomDomainResponse
     *
     * @param string                         $DomainName
     * @param DescribeWebCustomDomainRequest $request
     *
     * @return DescribeWebCustomDomainResponse
     */
    public function describeWebCustomDomain($DomainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime);
    }

    /**
     * Obtain the logs of web application instances.
     *
     * @remarks
     * Obtain the logs of web application instances.
     *
     * @param request - DescribeWebInstanceLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWebInstanceLogsResponse
     *
     * @param string                         $ApplicationId
     * @param string                         $InstanceId
     * @param DescribeWebInstanceLogsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebInstanceLogsResponse
     */
    public function describeWebInstanceLogsWithOptions($ApplicationId, $InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWebInstanceLogs',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications-observability/' . Url::percentEncode($ApplicationId) . '/instances/' . Url::percentEncode($InstanceId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWebInstanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the logs of web application instances.
     *
     * @remarks
     * Obtain the logs of web application instances.
     *
     * @param request - DescribeWebInstanceLogsRequest
     *
     * @returns DescribeWebInstanceLogsResponse
     *
     * @param string                         $ApplicationId
     * @param string                         $InstanceId
     * @param DescribeWebInstanceLogsRequest $request
     *
     * @return DescribeWebInstanceLogsResponse
     */
    public function describeWebInstanceLogs($ApplicationId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWebInstanceLogsWithOptions($ApplicationId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - DisableApplicationScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApplicationScalingRuleResponse
     *
     * @param DisableApplicationScalingRuleRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableApplicationScalingRuleResponse
     */
    public function disableApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableApplicationScalingRule',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/disableApplicationScalingRule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableApplicationScalingRuleRequest
     *
     * @returns DisableApplicationScalingRuleResponse
     *
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
     * Disables the advanced monitoring feature of Application Real-Time Monitoring Service (ARMS).
     *
     * @param request - DowngradeApplicationApmServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DowngradeApplicationApmServiceResponse
     *
     * @param DowngradeApplicationApmServiceRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DowngradeApplicationApmServiceResponse
     */
    public function downgradeApplicationApmServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DowngradeApplicationApmService',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/applicationApmService',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DowngradeApplicationApmServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the advanced monitoring feature of Application Real-Time Monitoring Service (ARMS).
     *
     * @param request - DowngradeApplicationApmServiceRequest
     *
     * @returns DowngradeApplicationApmServiceResponse
     *
     * @param DowngradeApplicationApmServiceRequest $request
     *
     * @return DowngradeApplicationApmServiceResponse
     */
    public function downgradeApplicationApmService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downgradeApplicationApmServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables an auto scaling policy for an application.
     *
     * @param request - EnableApplicationScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApplicationScalingRuleResponse
     *
     * @param EnableApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return EnableApplicationScalingRuleResponse
     */
    public function enableApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableApplicationScalingRule',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/enableApplicationScalingRule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an auto scaling policy for an application.
     *
     * @param request - EnableApplicationScalingRuleRequest
     *
     * @returns EnableApplicationScalingRuleResponse
     *
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
     * @param request - ExecJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecJobResponse
     *
     * @param ExecJobRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ExecJobResponse
     */
    public function execJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->commandArgs) {
            @$query['CommandArgs'] = $request->commandArgs;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->jarStartArgs) {
            @$query['JarStartArgs'] = $request->jarStartArgs;
        }

        if (null !== $request->jarStartOptions) {
            @$query['JarStartOptions'] = $request->jarStartOptions;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        if (null !== $request->warStartOptions) {
            @$query['WarStartOptions'] = $request->warStartOptions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/execJob',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExecJobRequest
     *
     * @returns ExecJobResponse
     *
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
     * Queries the basic information of an application.
     *
     * @param request - GetApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/getApplication',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information of an application.
     *
     * @param request - GetApplicationRequest
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * The application name.
     *
     * @param request - GetArmsTopNMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArmsTopNMetricResponse
     *
     * @param GetArmsTopNMetricRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetArmsTopNMetricResponse
     */
    public function getArmsTopNMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->cpuStrategy) {
            @$query['CpuStrategy'] = $request->cpuStrategy;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArmsTopNMetric',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/getArmsTopNMetric',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetArmsTopNMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The application name.
     *
     * @param request - GetArmsTopNMetricRequest
     *
     * @returns GetArmsTopNMetricResponse
     *
     * @param GetArmsTopNMetricRequest $request
     *
     * @return GetArmsTopNMetricResponse
     */
    public function getArmsTopNMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getArmsTopNMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the top N applications in which abnormal instances exist. The applications are sorted by the total number of abnormal instances.
     *
     * @param request - GetAvailabilityMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAvailabilityMetricResponse
     *
     * @param GetAvailabilityMetricRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetAvailabilityMetricResponse
     */
    public function getAvailabilityMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->cpuStrategy) {
            @$query['CpuStrategy'] = $request->cpuStrategy;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAvailabilityMetric',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/getAvailabilityMetric',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAvailabilityMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the top N applications in which abnormal instances exist. The applications are sorted by the total number of abnormal instances.
     *
     * @param request - GetAvailabilityMetricRequest
     *
     * @returns GetAvailabilityMetricResponse
     *
     * @param GetAvailabilityMetricRequest $request
     *
     * @return GetAvailabilityMetricResponse
     */
    public function getAvailabilityMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAvailabilityMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries top N applications in abnormal change orders.
     *
     * @param request - GetChangeOrderMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChangeOrderMetricResponse
     *
     * @param GetChangeOrderMetricRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetChangeOrderMetricResponse
     */
    public function getChangeOrderMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->coType) {
            @$query['CoType'] = $request->coType;
        }

        if (null !== $request->cpuStrategy) {
            @$query['CpuStrategy'] = $request->cpuStrategy;
        }

        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChangeOrderMetric',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/getChangeOrderMetric',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChangeOrderMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries top N applications in abnormal change orders.
     *
     * @param request - GetChangeOrderMetricRequest
     *
     * @returns GetChangeOrderMetricResponse
     *
     * @param GetChangeOrderMetricRequest $request
     *
     * @return GetChangeOrderMetricResponse
     */
    public function getChangeOrderMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChangeOrderMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the top N applications in which auto scaling takes effect.
     *
     * @param request - GetScaleAppMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScaleAppMetricResponse
     *
     * @param GetScaleAppMetricRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetScaleAppMetricResponse
     */
    public function getScaleAppMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->cpuStrategy) {
            @$query['CpuStrategy'] = $request->cpuStrategy;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScaleAppMetric',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/getScaleAppMetric',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScaleAppMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the top N applications in which auto scaling takes effect.
     *
     * @param request - GetScaleAppMetricRequest
     *
     * @returns GetScaleAppMetricResponse
     *
     * @param GetScaleAppMetricRequest $request
     *
     * @return GetScaleAppMetricResponse
     */
    public function getScaleAppMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScaleAppMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * The number of Warning events.
     *
     * @param request - GetWarningEventMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWarningEventMetricResponse
     *
     * @param GetWarningEventMetricRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetWarningEventMetricResponse
     */
    public function getWarningEventMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->cpuStrategy) {
            @$query['CpuStrategy'] = $request->cpuStrategy;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWarningEventMetric',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/getWarningEventMetric',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWarningEventMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of Warning events.
     *
     * @param request - GetWarningEventMetricRequest
     *
     * @returns GetWarningEventMetricResponse
     *
     * @param GetWarningEventMetricRequest $request
     *
     * @return GetWarningEventMetricResponse
     */
    public function getWarningEventMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWarningEventMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains the token used to remotely log on to the Webshell of an instance.
     *
     * @param request - GetWebshellTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWebshellTokenResponse
     *
     * @param GetWebshellTokenRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetWebshellTokenResponse
     */
    public function getWebshellTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->containerName) {
            @$query['ContainerName'] = $request->containerName;
        }

        if (null !== $request->podName) {
            @$query['PodName'] = $request->podName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWebshellToken',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/instance/webshellToken',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWebshellTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the token used to remotely log on to the Webshell of an instance.
     *
     * @param request - GetWebshellTokenRequest
     *
     * @returns GetWebshellTokenResponse
     *
     * @param GetWebshellTokenRequest $request
     *
     * @return GetWebshellTokenResponse
     */
    public function getWebshellToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWebshellTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询所有泳道组.
     *
     * @param request - ListAllSwimmingLaneGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllSwimmingLaneGroupsResponse
     *
     * @param ListAllSwimmingLaneGroupsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAllSwimmingLaneGroupsResponse
     */
    public function listAllSwimmingLaneGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllSwimmingLaneGroups',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/listSwimmingLaneGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAllSwimmingLaneGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有泳道组.
     *
     * @param request - ListAllSwimmingLaneGroupsRequest
     *
     * @returns ListAllSwimmingLaneGroupsResponse
     *
     * @param ListAllSwimmingLaneGroupsRequest $request
     *
     * @return ListAllSwimmingLaneGroupsResponse
     */
    public function listAllSwimmingLaneGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllSwimmingLaneGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询所有泳道.
     *
     * @param request - ListAllSwimmingLanesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllSwimmingLanesResponse
     *
     * @param ListAllSwimmingLanesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAllSwimmingLanesResponse
     */
    public function listAllSwimmingLanesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllSwimmingLanes',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/listSwimmingLanes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAllSwimmingLanesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有泳道.
     *
     * @param request - ListAllSwimmingLanesRequest
     *
     * @returns ListAllSwimmingLanesResponse
     *
     * @param ListAllSwimmingLanesRequest $request
     *
     * @return ListAllSwimmingLanesResponse
     */
    public function listAllSwimmingLanes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllSwimmingLanesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the events that occurred in an application.
     *
     * @param request - ListAppEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppEventsResponse
     *
     * @param ListAppEventsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAppEventsResponse
     */
    public function listAppEventsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->objectKind) {
            @$query['ObjectKind'] = $request->objectKind;
        }

        if (null !== $request->objectName) {
            @$query['ObjectName'] = $request->objectName;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppEvents',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/listAppEvents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAppEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the events that occurred in an application.
     *
     * @param request - ListAppEventsRequest
     *
     * @returns ListAppEventsResponse
     *
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
     * Queries the list of microservices.
     *
     * @param request - ListAppServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppServicesResponse
     *
     * @param ListAppServicesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppServicesResponse
     */
    public function listAppServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->nacosInstanceId) {
            @$query['NacosInstanceId'] = $request->nacosInstanceId;
        }

        if (null !== $request->nacosNamespaceId) {
            @$query['NacosNamespaceId'] = $request->nacosNamespaceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->registryType) {
            @$query['RegistryType'] = $request->registryType;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppServices',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/service/listAppServices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAppServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of microservices.
     *
     * @param request - ListAppServicesRequest
     *
     * @returns ListAppServicesResponse
     *
     * @param ListAppServicesRequest $request
     *
     * @return ListAppServicesResponse
     */
    public function listAppServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the services of an application.
     *
     * @param request - ListAppServicesPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppServicesPageResponse
     *
     * @param ListAppServicesPageRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppServicesPageResponse
     */
    public function listAppServicesPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppServicesPage',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/service/listAppServicesPage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAppServicesPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the services of an application.
     *
     * @param request - ListAppServicesPageRequest
     *
     * @returns ListAppServicesPageResponse
     *
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
     * Queries the deployment versions of an application.
     *
     * @param request - ListAppVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppVersionsResponse
     *
     * @param ListAppVersionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppVersionsResponse
     */
    public function listAppVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppVersions',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/listAppVersions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deployment versions of an application.
     *
     * @param request - ListAppVersionsRequest
     *
     * @returns ListAppVersionsResponse
     *
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
     * Queries a list of applications.
     *
     * @param request - ListApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appSource) {
            @$query['AppSource'] = $request->appSource;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->fieldType) {
            @$query['FieldType'] = $request->fieldType;
        }

        if (null !== $request->fieldValue) {
            @$query['FieldValue'] = $request->fieldValue;
        }

        if (null !== $request->isStateful) {
            @$query['IsStateful'] = $request->isStateful;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplications',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/listApplications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of applications.
     *
     * @param request - ListApplicationsRequest
     *
     * @returns ListApplicationsResponse
     *
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
     * 获取应用列表，供全链路灰度拉取应用列表.
     *
     * @param request - ListApplicationsForSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForSwimmingLaneResponse
     *
     * @param ListApplicationsForSwimmingLaneRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListApplicationsForSwimmingLaneResponse
     */
    public function listApplicationsForSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForSwimmingLane',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/listApplicationsForSwimmingLane',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用列表，供全链路灰度拉取应用列表.
     *
     * @param request - ListApplicationsForSwimmingLaneRequest
     *
     * @returns ListApplicationsForSwimmingLaneResponse
     *
     * @param ListApplicationsForSwimmingLaneRequest $request
     *
     * @return ListApplicationsForSwimmingLaneResponse
     */
    public function listApplicationsForSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationsForSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * Query a list of change orders.
     *
     * @param request - ListChangeOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChangeOrdersResponse
     *
     * @param ListChangeOrdersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListChangeOrdersResponse
     */
    public function listChangeOrdersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->coStatus) {
            @$query['CoStatus'] = $request->coStatus;
        }

        if (null !== $request->coType) {
            @$query['CoType'] = $request->coType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChangeOrders',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/ListChangeOrders',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChangeOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a list of change orders.
     *
     * @param request - ListChangeOrdersRequest
     *
     * @returns ListChangeOrdersResponse
     *
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
     * Queries a list of microservices that are subscribed.
     *
     * @param request - ListConsumedServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumedServicesResponse
     *
     * @param ListConsumedServicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListConsumedServicesResponse
     */
    public function listConsumedServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumedServices',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/service/listConsumedServices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of microservices that are subscribed.
     *
     * @param request - ListConsumedServicesRequest
     *
     * @returns ListConsumedServicesResponse
     *
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
     * Queries the details of a canary release rule based on an application ID.
     *
     * @remarks
     * >  You can configure only one canary release rule for each application.
     *
     * @param request - ListGreyTagRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGreyTagRouteResponse
     *
     * @param ListGreyTagRouteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListGreyTagRouteResponse
     */
    public function listGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGreyTagRoute',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/tagroute/greyTagRouteList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a canary release rule based on an application ID.
     *
     * @remarks
     * >  You can configure only one canary release rule for each application.
     *
     * @param request - ListGreyTagRouteRequest
     *
     * @returns ListGreyTagRouteResponse
     *
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
     * Use ListIngress API call to query Ingress list.
     *
     * @param request - ListIngressesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIngressesResponse
     *
     * @param ListIngressesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListIngressesResponse
     */
    public function listIngressesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIngresses',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/ingress/IngressList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIngressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Use ListIngress API call to query Ingress list.
     *
     * @param request - ListIngressesRequest
     *
     * @returns ListIngressesResponse
     *
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
     * Queries the information about job templates.
     *
     * @param request - ListJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->fieldType) {
            @$query['FieldType'] = $request->fieldType;
        }

        if (null !== $request->fieldValue) {
            @$query['FieldValue'] = $request->fieldValue;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->workload) {
            @$query['Workload'] = $request->workload;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/listJobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about job templates.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of application logs.
     *
     * @param request - ListLogConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogConfigsResponse
     *
     * @param ListLogConfigsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListLogConfigsResponse
     */
    public function listLogConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogConfigs',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/log/listLogConfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of application logs.
     *
     * @param request - ListLogConfigsRequest
     *
     * @returns ListLogConfigsResponse
     *
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
     * Queries a list of change orders in a namespace.
     *
     * @param request - ListNamespaceChangeOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespaceChangeOrdersResponse
     *
     * @param ListNamespaceChangeOrdersRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListNamespaceChangeOrdersResponse
     */
    public function listNamespaceChangeOrdersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coStatus) {
            @$query['CoStatus'] = $request->coStatus;
        }

        if (null !== $request->coType) {
            @$query['CoType'] = $request->coType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespaceChangeOrders',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/changeorder/listNamespaceChangeOrders',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNamespaceChangeOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of change orders in a namespace.
     *
     * @param request - ListNamespaceChangeOrdersRequest
     *
     * @returns ListNamespaceChangeOrdersResponse
     *
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
     * Queries the ConfigMap instances in a namespace.
     *
     * @param request - ListNamespacedConfigMapsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespacedConfigMapsResponse
     *
     * @param ListNamespacedConfigMapsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNamespacedConfigMapsResponse
     */
    public function listNamespacedConfigMapsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespacedConfigMaps',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/configmap/listNamespacedConfigMaps',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNamespacedConfigMapsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ConfigMap instances in a namespace.
     *
     * @param request - ListNamespacedConfigMapsRequest
     *
     * @returns ListNamespacedConfigMapsResponse
     *
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
     * Queries a list of microservices that are published.
     *
     * @param request - ListPublishedServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedServicesResponse
     *
     * @param ListPublishedServicesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPublishedServicesResponse
     */
    public function listPublishedServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishedServices',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/service/listPublishedServices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPublishedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of microservices that are published.
     *
     * @param request - ListPublishedServicesRequest
     *
     * @returns ListPublishedServicesResponse
     *
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
     * Queries the information about Secrets in a namespace.
     *
     * @param request - ListSecretsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecrets',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/secret/secrets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Secrets in a namespace.
     *
     * @param request - ListSecretsRequest
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     *
     * @return ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询泳道可选的网关路由.
     *
     * @param request - ListSwimmingLaneGatewayRoutesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSwimmingLaneGatewayRoutesResponse
     *
     * @param ListSwimmingLaneGatewayRoutesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSwimmingLaneGatewayRoutesResponse
     */
    public function listSwimmingLaneGatewayRoutesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayUniqueId) {
            @$query['GatewayUniqueId'] = $request->gatewayUniqueId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSwimmingLaneGatewayRoutes',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/listSwimmingLaneGatewayRoutes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSwimmingLaneGatewayRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询泳道可选的网关路由.
     *
     * @param request - ListSwimmingLaneGatewayRoutesRequest
     *
     * @returns ListSwimmingLaneGatewayRoutesResponse
     *
     * @param ListSwimmingLaneGatewayRoutesRequest $request
     *
     * @return ListSwimmingLaneGatewayRoutesResponse
     */
    public function listSwimmingLaneGatewayRoutes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSwimmingLaneGatewayRoutesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询所有泳道标签列表.
     *
     * @param request - ListSwimmingLaneGroupTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSwimmingLaneGroupTagsResponse
     *
     * @param ListSwimmingLaneGroupTagsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSwimmingLaneGroupTagsResponse
     */
    public function listSwimmingLaneGroupTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSwimmingLaneGroupTags',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/listSwimmingLaneGroupTags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSwimmingLaneGroupTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有泳道标签列表.
     *
     * @param request - ListSwimmingLaneGroupTagsRequest
     *
     * @returns ListSwimmingLaneGroupTagsResponse
     *
     * @param ListSwimmingLaneGroupTagsRequest $request
     *
     * @return ListSwimmingLaneGroupTagsResponse
     */
    public function listSwimmingLaneGroupTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSwimmingLaneGroupTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the mapping relationships between applications and tags.
     *
     * @param request - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the mapping relationships between applications and tags.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * Query the list of web application instances.
     *
     * @remarks
     * Query the list of web application instances.
     *
     * @param tmpReq - ListWebApplicationInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWebApplicationInstancesResponse
     *
     * @param string                             $ApplicationId
     * @param ListWebApplicationInstancesRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListWebApplicationInstancesResponse
     */
    public function listWebApplicationInstancesWithOptions($ApplicationId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWebApplicationInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->statuses) {
            $request->statusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statuses, 'Statuses', 'json');
        }

        if (null !== $tmpReq->versionIds) {
            $request->versionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->versionIds, 'VersionIds', 'json');
        }

        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statusesShrink) {
            @$query['Statuses'] = $request->statusesShrink;
        }

        if (null !== $request->versionIdsShrink) {
            @$query['VersionIds'] = $request->versionIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWebApplicationInstances',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications-observability/' . Url::percentEncode($ApplicationId) . '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWebApplicationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of web application instances.
     *
     * @remarks
     * Query the list of web application instances.
     *
     * @param request - ListWebApplicationInstancesRequest
     *
     * @returns ListWebApplicationInstancesResponse
     *
     * @param string                             $ApplicationId
     * @param ListWebApplicationInstancesRequest $request
     *
     * @return ListWebApplicationInstancesResponse
     */
    public function listWebApplicationInstances($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebApplicationInstancesWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Query the list of web application versions.
     *
     * @remarks
     * Query the list of web application versions.
     *
     * @param request - ListWebApplicationRevisionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWebApplicationRevisionsResponse
     *
     * @param string                             $ApplicationId
     * @param ListWebApplicationRevisionsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListWebApplicationRevisionsResponse
     */
    public function listWebApplicationRevisionsWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWebApplicationRevisions',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-revisions/' . Url::percentEncode($ApplicationId) . '/revisions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWebApplicationRevisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of web application versions.
     *
     * @remarks
     * Query the list of web application versions.
     *
     * @param request - ListWebApplicationRevisionsRequest
     *
     * @returns ListWebApplicationRevisionsResponse
     *
     * @param string                             $ApplicationId
     * @param ListWebApplicationRevisionsRequest $request
     *
     * @return ListWebApplicationRevisionsResponse
     */
    public function listWebApplicationRevisions($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebApplicationRevisionsWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Query the list of web applications.
     *
     * @remarks
     * Call the ListWebApplications operation to query the list of web applications.
     *
     * @param request - ListWebApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWebApplicationsResponse
     *
     * @param ListWebApplicationsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListWebApplicationsResponse
     */
    public function listWebApplicationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWebApplications',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWebApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of web applications.
     *
     * @remarks
     * Call the ListWebApplications operation to query the list of web applications.
     *
     * @param request - ListWebApplicationsRequest
     *
     * @returns ListWebApplicationsResponse
     *
     * @param ListWebApplicationsRequest $request
     *
     * @return ListWebApplicationsResponse
     */
    public function listWebApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * Query available custom domain names.
     *
     * @remarks
     * Query available custom domain names.
     *
     * @param request - ListWebCustomDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWebCustomDomainsResponse
     *
     * @param ListWebCustomDomainsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListWebCustomDomainsResponse
     */
    public function listWebCustomDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWebCustomDomains',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/custom-domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWebCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query available custom domain names.
     *
     * @remarks
     * Query available custom domain names.
     *
     * @param request - ListWebCustomDomainsRequest
     *
     * @returns ListWebCustomDomainsResponse
     *
     * @param ListWebCustomDomainsRequest $request
     *
     * @return ListWebCustomDomainsResponse
     */
    public function listWebCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWebCustomDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * Activates Serverless App Engine (SAE) for free.
     *
     * @remarks
     * > Make sure that your account balance is greater than 0. Otherwise, the SAE service cannot be activated.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenSaeServiceResponse
     *
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
            'action' => 'OpenSaeService',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/service/open',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenSaeServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Serverless App Engine (SAE) for free.
     *
     * @remarks
     * > Make sure that your account balance is greater than 0. Otherwise, the SAE service cannot be activated.
     *
     * @returns OpenSaeServiceResponse
     *
     * @return OpenSaeServiceResponse
     */
    public function openSaeService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openSaeServiceWithOptions($headers, $runtime);
    }

    /**
     * Publish a web application version.
     *
     * @remarks
     * Publish a web application version. You can change the configurations of the version and create a new version.
     *
     * @param request - PublishWebApplicationRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishWebApplicationRevisionResponse
     *
     * @param string                               $ApplicationId
     * @param PublishWebApplicationRevisionRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return PublishWebApplicationRevisionResponse
     */
    public function publishWebApplicationRevisionWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PublishWebApplicationRevision',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-revisions/' . Url::percentEncode($ApplicationId) . '/revisions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishWebApplicationRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publish a web application version.
     *
     * @remarks
     * Publish a web application version. You can change the configurations of the version and create a new version.
     *
     * @param request - PublishWebApplicationRevisionRequest
     *
     * @returns PublishWebApplicationRevisionResponse
     *
     * @param string                               $ApplicationId
     * @param PublishWebApplicationRevisionRequest $request
     *
     * @return PublishWebApplicationRevisionResponse
     */
    public function publishWebApplicationRevision($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishWebApplicationRevisionWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * @param request - QueryArmsEnableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryArmsEnableResponse
     *
     * @param QueryArmsEnableRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryArmsEnableResponse
     */
    public function queryArmsEnableWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryArmsEnable',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/arms/queryArms',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryArmsEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryArmsEnableRequest
     *
     * @returns QueryArmsEnableResponse
     *
     * @param QueryArmsEnableRequest $request
     *
     * @return QueryArmsEnableResponse
     */
    public function queryArmsEnable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryArmsEnableWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the resource usage of an application.
     *
     * @param request - QueryResourceStaticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryResourceStaticsResponse
     *
     * @param QueryResourceStaticsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryResourceStaticsResponse
     */
    public function queryResourceStaticsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryResourceStatics',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/quota/queryResourceStatics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryResourceStaticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource usage of an application.
     *
     * @param request - QueryResourceStaticsRequest
     *
     * @returns QueryResourceStaticsResponse
     *
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
     * Scales in an application based on instance IDs.
     *
     * @param request - ReduceApplicationCapacityByInstanceIdsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReduceApplicationCapacityByInstanceIdsResponse
     *
     * @param ReduceApplicationCapacityByInstanceIdsRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return ReduceApplicationCapacityByInstanceIdsResponse
     */
    public function reduceApplicationCapacityByInstanceIdsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReduceApplicationCapacityByInstanceIds',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/ScaleInApplicationWithInstanceIds',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReduceApplicationCapacityByInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales in an application based on instance IDs.
     *
     * @param request - ReduceApplicationCapacityByInstanceIdsRequest
     *
     * @returns ReduceApplicationCapacityByInstanceIdsResponse
     *
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
     * Rescale an application.
     *
     * @param request - RescaleApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RescaleApplicationResponse
     *
     * @param RescaleApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoEnableApplicationScalingRule) {
            @$query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['MinReadyInstances'] = $request->minReadyInstances;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RescaleApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/rescaleApplication',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RescaleApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rescale an application.
     *
     * @param request - RescaleApplicationRequest
     *
     * @returns RescaleApplicationResponse
     *
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
     * Changes the instance specifications of an application.
     *
     * @param request - RescaleApplicationVerticallyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RescaleApplicationVerticallyResponse
     *
     * @param RescaleApplicationVerticallyRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return RescaleApplicationVerticallyResponse
     */
    public function rescaleApplicationVerticallyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->autoEnableApplicationScalingRule) {
            @$query['autoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['minReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['minReadyInstances'] = $request->minReadyInstances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RescaleApplicationVertically',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/rescaleApplicationVertically',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RescaleApplicationVerticallyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the instance specifications of an application.
     *
     * @param request - RescaleApplicationVerticallyRequest
     *
     * @returns RescaleApplicationVerticallyResponse
     *
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
     * Restarts an application.
     *
     * @param request - RestartApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartApplicationResponse
     *
     * @param RestartApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RestartApplicationResponse
     */
    public function restartApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoEnableApplicationScalingRule) {
            @$query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['MinReadyInstances'] = $request->minReadyInstances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/restartApplication',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an application.
     *
     * @param request - RestartApplicationRequest
     *
     * @returns RestartApplicationResponse
     *
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
     * Restarts one or more instances in an application.
     *
     * @param request - RestartInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstancesResponse
     *
     * @param RestartInstancesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartInstancesResponse
     */
    public function restartInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstances',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/restartInstances',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts one or more instances in an application.
     *
     * @param request - RestartInstancesRequest
     *
     * @returns RestartInstancesResponse
     *
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
     * Rolls back an application.
     *
     * @param request - RollbackApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackApplicationResponse
     *
     * @param RollbackApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoEnableApplicationScalingRule) {
            @$query['AutoEnableApplicationScalingRule'] = $request->autoEnableApplicationScalingRule;
        }

        if (null !== $request->batchWaitTime) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['MinReadyInstances'] = $request->minReadyInstances;
        }

        if (null !== $request->updateStrategy) {
            @$query['UpdateStrategy'] = $request->updateStrategy;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/rollbackApplication',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RollbackApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back an application.
     *
     * @param request - RollbackApplicationRequest
     *
     * @returns RollbackApplicationResponse
     *
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
     * Starts an application.
     *
     * @param request - StartApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartApplicationResponse
     *
     * @param StartApplicationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartApplicationResponse
     */
    public function startApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/startApplication',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an application.
     *
     * @param request - StartApplicationRequest
     *
     * @returns StartApplicationResponse
     *
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
     * Start a web application.
     *
     * @remarks
     * Call the StartWebApplication operation to start a web application.
     *
     * @param request - StartWebApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartWebApplicationResponse
     *
     * @param string                     $ApplicationId
     * @param StartWebApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartWebApplicationResponse
     */
    public function startWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartWebApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-ops/' . Url::percentEncode($ApplicationId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start a web application.
     *
     * @remarks
     * Call the StartWebApplication operation to start a web application.
     *
     * @param request - StartWebApplicationRequest
     *
     * @returns StartWebApplicationResponse
     *
     * @param string                     $ApplicationId
     * @param StartWebApplicationRequest $request
     *
     * @return StartWebApplicationResponse
     */
    public function startWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Stops an application.
     *
     * @param request - StopApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopApplicationResponse
     *
     * @param StopApplicationRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopApplicationResponse
     */
    public function stopApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/stopApplication',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an application.
     *
     * @param request - StopApplicationRequest
     *
     * @returns StopApplicationResponse
     *
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
     * Stop a web application.
     *
     * @remarks
     * Call the StopWebApplication operation to stop a web application.
     *
     * @param request - StopWebApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopWebApplicationResponse
     *
     * @param string                    $ApplicationId
     * @param StopWebApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StopWebApplicationResponse
     */
    public function stopWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopWebApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-ops/' . Url::percentEncode($ApplicationId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stop a web application.
     *
     * @remarks
     * Call the StopWebApplication operation to stop a web application.
     *
     * @param request - StopWebApplicationRequest
     *
     * @returns StopWebApplicationResponse
     *
     * @param string                    $ApplicationId
     * @param StopWebApplicationRequest $request
     *
     * @return StopWebApplicationResponse
     */
    public function stopWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Suspends one or more jobs.
     *
     * @param request - SuspendJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendJobResponse
     *
     * @param SuspendJobRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SuspendJobResponse
     */
    public function suspendJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->suspend) {
            @$query['Suspend'] = $request->suspend;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/suspendJob',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SuspendJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends one or more jobs.
     *
     * @param request - SuspendJobRequest
     *
     * @returns SuspendJobResponse
     *
     * @param SuspendJobRequest $request
     *
     * @return SuspendJobResponse
     */
    public function suspendJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->suspendJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds tags to resources.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to resources.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Calls the UnbindNlb operation to delete an NLB listener bound for application access.
     *
     * @param request - UnbindNlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindNlbResponse
     *
     * @param UnbindNlbRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindNlbResponse
     */
    public function unbindNlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->nlbId) {
            @$query['NlbId'] = $request->nlbId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindNlb',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/nlb',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindNlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the UnbindNlb operation to delete an NLB listener bound for application access.
     *
     * @param request - UnbindNlbRequest
     *
     * @returns UnbindNlbResponse
     *
     * @param UnbindNlbRequest $request
     *
     * @return UnbindNlbResponse
     */
    public function unbindNlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindNlbWithOptions($request, $headers, $runtime);
    }

    /**
     * Disassociates an internal-facing or Internet-facing SLB instance from an application.
     *
     * @param request - UnbindSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindSlbResponse
     *
     * @param UnbindSlbRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindSlbResponse
     */
    public function unbindSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->internet) {
            @$query['Internet'] = $request->internet;
        }

        if (null !== $request->intranet) {
            @$query['Intranet'] = $request->intranet;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindSlb',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/slb',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an internal-facing or Internet-facing SLB instance from an application.
     *
     * @param request - UnbindSlbRequest
     *
     * @returns UnbindSlbResponse
     *
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
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteAll) {
            @$query['DeleteAll'] = $request->deleteAll;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * 应用闲置模式更新.
     *
     * @param request - UpdateAppModeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppModeResponse
     *
     * @param UpdateAppModeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppModeResponse
     */
    public function updateAppModeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->enableIdle) {
            @$query['EnableIdle'] = $request->enableIdle;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppMode',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/updateAppMode',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAppModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用闲置模式更新.
     *
     * @param request - UpdateAppModeRequest
     *
     * @returns UpdateAppModeResponse
     *
     * @param UpdateAppModeRequest $request
     *
     * @return UpdateAppModeResponse
     */
    public function updateAppMode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppModeWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the security group of an application.
     *
     * @param request - UpdateAppSecurityGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppSecurityGroupResponse
     *
     * @param UpdateAppSecurityGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAppSecurityGroupResponse
     */
    public function updateAppSecurityGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppSecurityGroup',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/updateAppSecurityGroup',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAppSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the security group of an application.
     *
     * @param request - UpdateAppSecurityGroupRequest
     *
     * @returns UpdateAppSecurityGroupResponse
     *
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
     * Updates the description of an application.
     *
     * @param request - UpdateApplicationDescriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationDescriptionResponse
     *
     * @param UpdateApplicationDescriptionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApplicationDescriptionResponse
     */
    public function updateApplicationDescriptionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appDescription) {
            @$query['AppDescription'] = $request->appDescription;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationDescription',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/updateAppDescription',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description of an application.
     *
     * @param request - UpdateApplicationDescriptionRequest
     *
     * @returns UpdateApplicationDescriptionResponse
     *
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
     * Updates the auto scaling policy of an application.
     *
     * @remarks
     * ##
     * If you want to configure more than 50 instances for an application, you must submit a [ticket](https://workorder.console.aliyun.com/#/ticket/createIndex) to add your account to the whitelist.
     *
     * @param request - UpdateApplicationScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationScalingRuleResponse
     *
     * @param UpdateApplicationScalingRuleRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApplicationScalingRuleResponse
     */
    public function updateApplicationScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->enableIdle) {
            @$query['EnableIdle'] = $request->enableIdle;
        }

        if (null !== $request->minReadyInstanceRatio) {
            @$query['MinReadyInstanceRatio'] = $request->minReadyInstanceRatio;
        }

        if (null !== $request->minReadyInstances) {
            @$query['MinReadyInstances'] = $request->minReadyInstances;
        }

        if (null !== $request->scalingRuleMetric) {
            @$query['ScalingRuleMetric'] = $request->scalingRuleMetric;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        if (null !== $request->scalingRuleTimer) {
            @$query['ScalingRuleTimer'] = $request->scalingRuleTimer;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationScalingRule',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/scale/applicationScalingRule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the auto scaling policy of an application.
     *
     * @remarks
     * ##
     * If you want to configure more than 50 instances for an application, you must submit a [ticket](https://workorder.console.aliyun.com/#/ticket/createIndex) to add your account to the whitelist.
     *
     * @param request - UpdateApplicationScalingRuleRequest
     *
     * @returns UpdateApplicationScalingRuleResponse
     *
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
     * Update the configuration of a vSwitch.
     *
     * @param request - UpdateApplicationVswitchesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationVswitchesResponse
     *
     * @param UpdateApplicationVswitchesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateApplicationVswitchesResponse
     */
    public function updateApplicationVswitchesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationVswitches',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/updateAppVswitches',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationVswitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the configuration of a vSwitch.
     *
     * @param request - UpdateApplicationVswitchesRequest
     *
     * @returns UpdateApplicationVswitchesResponse
     *
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
     * Updates a ConfigMap instance.
     *
     * @param request - UpdateConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigMapResponse
     *
     * @param UpdateConfigMapRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateConfigMapResponse
     */
    public function updateConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configMapId) {
            @$query['ConfigMapId'] = $request->configMapId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfigMap',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/configmap/configMap',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a ConfigMap instance.
     *
     * @param request - UpdateConfigMapRequest
     *
     * @returns UpdateConfigMapResponse
     *
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
     * Updates a canary release rule.
     *
     * @param request - UpdateGreyTagRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGreyTagRouteResponse
     *
     * @param UpdateGreyTagRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateGreyTagRouteResponse
     */
    public function updateGreyTagRouteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->albRules) {
            @$query['AlbRules'] = $request->albRules;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dubboRules) {
            @$query['DubboRules'] = $request->dubboRules;
        }

        if (null !== $request->greyTagRouteId) {
            @$query['GreyTagRouteId'] = $request->greyTagRouteId;
        }

        if (null !== $request->scRules) {
            @$query['ScRules'] = $request->scRules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGreyTagRoute',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/tagroute/greyTagRoute',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGreyTagRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a canary release rule.
     *
     * @param request - UpdateGreyTagRouteRequest
     *
     * @returns UpdateGreyTagRouteResponse
     *
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
     * Update the configurations of an Ingress instance.
     *
     * @param request - UpdateIngressRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIngressResponse
     *
     * @param UpdateIngressRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateIngressResponse
     */
    public function updateIngressWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->certIds) {
            @$query['CertIds'] = $request->certIds;
        }

        if (null !== $request->corsConfig) {
            @$query['CorsConfig'] = $request->corsConfig;
        }

        if (null !== $request->defaultRule) {
            @$query['DefaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableXForwardedFor) {
            @$query['EnableXForwardedFor'] = $request->enableXForwardedFor;
        }

        if (null !== $request->enableXForwardedForClientSrcPort) {
            @$query['EnableXForwardedForClientSrcPort'] = $request->enableXForwardedForClientSrcPort;
        }

        if (null !== $request->enableXForwardedForProto) {
            @$query['EnableXForwardedForProto'] = $request->enableXForwardedForProto;
        }

        if (null !== $request->enableXForwardedForSlbId) {
            @$query['EnableXForwardedForSlbId'] = $request->enableXForwardedForSlbId;
        }

        if (null !== $request->enableXForwardedForSlbPort) {
            @$query['EnableXForwardedForSlbPort'] = $request->enableXForwardedForSlbPort;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->ingressId) {
            @$query['IngressId'] = $request->ingressId;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalanceType) {
            @$query['LoadBalanceType'] = $request->loadBalanceType;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->securityPolicyId) {
            @$query['SecurityPolicyId'] = $request->securityPolicyId;
        }

        $body = [];
        if (null !== $request->rules) {
            @$body['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIngress',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/ingress/Ingress',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIngressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the configurations of an Ingress instance.
     *
     * @param request - UpdateIngressRequest
     *
     * @returns UpdateIngressResponse
     *
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
     * Updates a job template.
     *
     * @param request - UpdateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrAssumeRoleArn) {
            @$query['AcrAssumeRoleArn'] = $request->acrAssumeRoleArn;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backoffLimit) {
            @$query['BackoffLimit'] = $request->backoffLimit;
        }

        if (null !== $request->bestEffortType) {
            @$query['BestEffortType'] = $request->bestEffortType;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->commandArgs) {
            @$query['CommandArgs'] = $request->commandArgs;
        }

        if (null !== $request->concurrencyPolicy) {
            @$query['ConcurrencyPolicy'] = $request->concurrencyPolicy;
        }

        if (null !== $request->customHostAlias) {
            @$query['CustomHostAlias'] = $request->customHostAlias;
        }

        if (null !== $request->edasContainerVersion) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->imagePullSecrets) {
            @$query['ImagePullSecrets'] = $request->imagePullSecrets;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->jarStartArgs) {
            @$query['JarStartArgs'] = $request->jarStartArgs;
        }

        if (null !== $request->jarStartOptions) {
            @$query['JarStartOptions'] = $request->jarStartOptions;
        }

        if (null !== $request->jdk) {
            @$query['Jdk'] = $request->jdk;
        }

        if (null !== $request->mountDesc) {
            @$query['MountDesc'] = $request->mountDesc;
        }

        if (null !== $request->mountHost) {
            @$query['MountHost'] = $request->mountHost;
        }

        if (null !== $request->nasConfigs) {
            @$query['NasConfigs'] = $request->nasConfigs;
        }

        if (null !== $request->nasId) {
            @$query['NasId'] = $request->nasId;
        }

        if (null !== $request->packageUrl) {
            @$query['PackageUrl'] = $request->packageUrl;
        }

        if (null !== $request->packageVersion) {
            @$query['PackageVersion'] = $request->packageVersion;
        }

        if (null !== $request->phpConfigLocation) {
            @$query['PhpConfigLocation'] = $request->phpConfigLocation;
        }

        if (null !== $request->postStart) {
            @$query['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$query['PreStop'] = $request->preStop;
        }

        if (null !== $request->programmingLanguage) {
            @$query['ProgrammingLanguage'] = $request->programmingLanguage;
        }

        if (null !== $request->python) {
            @$query['Python'] = $request->python;
        }

        if (null !== $request->pythonModules) {
            @$query['PythonModules'] = $request->pythonModules;
        }

        if (null !== $request->refAppId) {
            @$query['RefAppId'] = $request->refAppId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->slice) {
            @$query['Slice'] = $request->slice;
        }

        if (null !== $request->sliceEnvs) {
            @$query['SliceEnvs'] = $request->sliceEnvs;
        }

        if (null !== $request->slsConfigs) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->timezone) {
            @$query['Timezone'] = $request->timezone;
        }

        if (null !== $request->tomcatConfig) {
            @$query['TomcatConfig'] = $request->tomcatConfig;
        }

        if (null !== $request->triggerConfig) {
            @$query['TriggerConfig'] = $request->triggerConfig;
        }

        if (null !== $request->warStartOptions) {
            @$query['WarStartOptions'] = $request->warStartOptions;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        $body = [];
        if (null !== $request->acrInstanceId) {
            @$body['AcrInstanceId'] = $request->acrInstanceId;
        }

        if (null !== $request->configMapMountDesc) {
            @$body['ConfigMapMountDesc'] = $request->configMapMountDesc;
        }

        if (null !== $request->enableImageAccl) {
            @$body['EnableImageAccl'] = $request->enableImageAccl;
        }

        if (null !== $request->ossAkId) {
            @$body['OssAkId'] = $request->ossAkId;
        }

        if (null !== $request->ossAkSecret) {
            @$body['OssAkSecret'] = $request->ossAkSecret;
        }

        if (null !== $request->ossMountDescs) {
            @$body['OssMountDescs'] = $request->ossMountDescs;
        }

        if (null !== $request->php) {
            @$body['Php'] = $request->php;
        }

        if (null !== $request->phpConfig) {
            @$body['PhpConfig'] = $request->phpConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJob',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/job/updateJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a job template.
     *
     * @param request - UpdateJobRequest
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the information about a namespace.
     *
     * @param request - UpdateNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableMicroRegistration) {
            @$query['EnableMicroRegistration'] = $request->enableMicroRegistration;
        }

        if (null !== $request->nameSpaceShortId) {
            @$query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }

        if (null !== $request->namespaceDescription) {
            @$query['NamespaceDescription'] = $request->namespaceDescription;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespace',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/paas/namespace',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a namespace.
     *
     * @param request - UpdateNamespaceRequest
     *
     * @returns UpdateNamespaceResponse
     *
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
     * cn-beijing:test.
     *
     * @param request - UpdateNamespaceVpcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceVpcResponse
     *
     * @param UpdateNamespaceVpcRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateNamespaceVpcResponse
     */
    public function updateNamespaceVpcWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nameSpaceShortId) {
            @$query['NameSpaceShortId'] = $request->nameSpaceShortId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespaceVpc',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/namespace/updateNamespaceVpc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNamespaceVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * cn-beijing:test.
     *
     * @param request - UpdateNamespaceVpcRequest
     *
     * @returns UpdateNamespaceVpcResponse
     *
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
     * The HTTP status code. Valid values:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *
     * @param tmpReq - UpdateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretResponse
     *
     * @param UpdateSecretRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSecretShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->secretData) {
            $request->secretDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->secretData, 'SecretData', 'json');
        }

        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->secretDataShrink) {
            @$query['SecretData'] = $request->secretDataShrink;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecret',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/secret/secret',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The HTTP status code. Valid values:
     * *   **2xx**: The call was successful.
     * *   **3xx**: The call was redirected.
     * *   **4xx**: The call failed.
     * *   **5xx**: A server error occurred.
     *
     * @param request - UpdateSecretRequest
     *
     * @returns UpdateSecretResponse
     *
     * @param UpdateSecretRequest $request
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新泳道的启用属性.
     *
     * @param request - UpdateSwimmingLaneEnableAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSwimmingLaneEnableAttributeResponse
     *
     * @param UpdateSwimmingLaneEnableAttributeRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateSwimmingLaneEnableAttributeResponse
     */
    public function updateSwimmingLaneEnableAttributeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSwimmingLaneEnableAttribute',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/cas/gray/updateSwimmingLaneEnableAttribute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSwimmingLaneEnableAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新泳道的启用属性.
     *
     * @param request - UpdateSwimmingLaneEnableAttributeRequest
     *
     * @returns UpdateSwimmingLaneEnableAttributeResponse
     *
     * @param UpdateSwimmingLaneEnableAttributeRequest $request
     *
     * @return UpdateSwimmingLaneEnableAttributeResponse
     */
    public function updateSwimmingLaneEnableAttribute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSwimmingLaneEnableAttributeWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the configuration at the web application level.
     *
     * @remarks
     * You can call the UpdateWebApplication operation to update the configuration at the web application level.
     *
     * @param request - UpdateWebApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWebApplicationResponse
     *
     * @param string                      $ApplicationId
     * @param UpdateWebApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateWebApplicationResponse
     */
    public function updateWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateWebApplication',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/applications/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWebApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration at the web application level.
     *
     * @remarks
     * You can call the UpdateWebApplication operation to update the configuration at the web application level.
     *
     * @param request - UpdateWebApplicationRequest
     *
     * @returns UpdateWebApplicationResponse
     *
     * @param string                      $ApplicationId
     * @param UpdateWebApplicationRequest $request
     *
     * @return UpdateWebApplicationResponse
     */
    public function updateWebApplication($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebApplicationWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Update the scaling configuration of a web application.
     *
     * @remarks
     * You can call the UpdateWebApplicationScalingConfig operation to update the scaling configurations of a web application.
     *
     * @param request - UpdateWebApplicationScalingConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWebApplicationScalingConfigResponse
     *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationScalingConfigRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateWebApplicationScalingConfigResponse
     */
    public function updateWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateWebApplicationScalingConfig',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-scaling/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWebApplicationScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the scaling configuration of a web application.
     *
     * @remarks
     * You can call the UpdateWebApplicationScalingConfig operation to update the scaling configurations of a web application.
     *
     * @param request - UpdateWebApplicationScalingConfigRequest
     *
     * @returns UpdateWebApplicationScalingConfigResponse
     *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationScalingConfigRequest $request
     *
     * @return UpdateWebApplicationScalingConfigResponse
     */
    public function updateWebApplicationScalingConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebApplicationScalingConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Update the traffic configurations of a web application.
     *
     * @remarks
     * Call the UpdateWebApplicationTrafficConfig operation to update the traffic configurations of a web application.
     *
     * @param request - UpdateWebApplicationTrafficConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWebApplicationTrafficConfigResponse
     *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationTrafficConfigRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateWebApplicationTrafficConfigResponse
     */
    public function updateWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateWebApplicationTrafficConfig',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/application-traffic/' . Url::percentEncode($ApplicationId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWebApplicationTrafficConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the traffic configurations of a web application.
     *
     * @remarks
     * Call the UpdateWebApplicationTrafficConfig operation to update the traffic configurations of a web application.
     *
     * @param request - UpdateWebApplicationTrafficConfigRequest
     *
     * @returns UpdateWebApplicationTrafficConfigResponse
     *
     * @param string                                   $ApplicationId
     * @param UpdateWebApplicationTrafficConfigRequest $request
     *
     * @return UpdateWebApplicationTrafficConfigResponse
     */
    public function updateWebApplicationTrafficConfig($ApplicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebApplicationTrafficConfigWithOptions($ApplicationId, $request, $headers, $runtime);
    }

    /**
     * Update a custom domain name.
     *
     * @remarks
     * Update a custom domain name.
     *
     * @param request - UpdateWebCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWebCustomDomainResponse
     *
     * @param string                       $DomainName
     * @param UpdateWebCustomDomainRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateWebCustomDomainResponse
     */
    public function updateWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateWebCustomDomain',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v2/api/web/custom-domains/' . Url::percentEncode($DomainName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWebCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a custom domain name.
     *
     * @remarks
     * Update a custom domain name.
     *
     * @param request - UpdateWebCustomDomainRequest
     *
     * @returns UpdateWebCustomDomainResponse
     *
     * @param string                       $DomainName
     * @param UpdateWebCustomDomainRequest $request
     *
     * @return UpdateWebCustomDomainResponse
     */
    public function updateWebCustomDomain($DomainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWebCustomDomainWithOptions($DomainName, $request, $headers, $runtime);
    }

    /**
     * Enables the advanced monitoring feature of Application Real-Time Monitoring Service (ARMS).
     *
     * @remarks
     * You are charged when you use the ARMS advanced monitoring feature. Enable this feature based on your business requirements. For more information, see [Billing overview](https://icms.alibaba-inc.com/content/arms/arms?l=1\\&m=16992\\&n=3183148).
     *
     * @param request - UpgradeApplicationApmServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeApplicationApmServiceResponse
     *
     * @param UpgradeApplicationApmServiceRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpgradeApplicationApmServiceResponse
     */
    public function upgradeApplicationApmServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeApplicationApmService',
            'version' => '2019-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/sam/app/applicationApmService',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeApplicationApmServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the advanced monitoring feature of Application Real-Time Monitoring Service (ARMS).
     *
     * @remarks
     * You are charged when you use the ARMS advanced monitoring feature. Enable this feature based on your business requirements. For more information, see [Billing overview](https://icms.alibaba-inc.com/content/arms/arms?l=1\\&m=16992\\&n=3183148).
     *
     * @param request - UpgradeApplicationApmServiceRequest
     *
     * @returns UpgradeApplicationApmServiceResponse
     *
     * @param UpgradeApplicationApmServiceRequest $request
     *
     * @return UpgradeApplicationApmServiceResponse
     */
    public function upgradeApplicationApmService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeApplicationApmServiceWithOptions($request, $headers, $runtime);
    }
}
