<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddContextsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddContextsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddMemoriesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddMemoriesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAlertWebhookRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAlertWebhookResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateBizTraceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateContextStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateContextStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateMemoryStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateMemoryStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusVirtualInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusVirtualInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceObservabilityRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceRecordRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceRecordResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAlertWebhooksRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAlertWebhooksResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAlertWebhooksShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteBizTraceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteContextStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteEntityStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteMemoriesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteMemoriesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteMemoryRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteMemoryStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteMemoryStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusVirtualInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusVirtualInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceRecordRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceRecordResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelCommonSchemaRefRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelCommonSchemaRefResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeMetricMetaListRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeMetricMetaListResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeMetricMetaListShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ExecuteQueryRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ExecuteQueryResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonCodeTemplateRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonCodeTemplateResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetBizTraceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCloudResourceDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCloudResourceDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCmsServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCmsServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataHeaders;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationVersionForCSRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationVersionForCSResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoriesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoriesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryHistoryRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryHistoryResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusUserSettingRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusUserSettingResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceRecordRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceRecordResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelCommonSchemaRefRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelCommonSchemaRefResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertRobotsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertRobotsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertRobotsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertWebhooksRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertWebhooksResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertWebhooksShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListBizTracesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListBizTracesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactGroupsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactGroupsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactGroupsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContextStoreAPIKeysRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContextStoreAPIKeysResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContextStoresRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContextStoresResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDeliveryTasksRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDeliveryTasksResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDeliveryTasksShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyAddonsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyAddonsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyDashboardsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyDashboardsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListMemoryStoresRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListMemoryStoresResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusDashboardsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusDashboardsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusInstancesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusInstancesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusInstancesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusVirtualInstancesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusVirtualInstancesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServiceRecordsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServiceRecordsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ManageAlertRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ManageAlertRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ManageAlertRulesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\OpenCmsServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\OpenCmsServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\QueryAlertRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\QueryAlertRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\QueryAlertRulesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\SearchContextRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\SearchContextResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\SearchMemoriesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\SearchMemoriesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupStatusRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupStatusResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAlertWebhookRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAlertWebhookResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateBizTraceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateNotifyStrategyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateNotifyStrategyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusUserSettingRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusUserSettingResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRecordRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRecordResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelCommonSchemaRefRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelCommonSchemaRefResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'metrics.us-west-1.aliyuncs.com',
            'us-southeast-1' => 'metrics.us-southeast-1.aliyuncs.com',
            'us-east-1' => 'metrics.us-east-1.aliyuncs.com',
            'na-south-1' => 'metrics.na-south-1.aliyuncs.com',
            'me-east-1' => 'metrics.me-east-1.aliyuncs.com',
            'me-central-1' => 'metrics.me-central-1.aliyuncs.com',
            'eu-west-2' => 'metrics.eu-west-2.aliyuncs.com',
            'eu-west-1' => 'metrics.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'metrics.eu-central-1.aliyuncs.com',
            'cn-zhongwei' => 'metrics.cn-zhongwei.aliyuncs.com',
            'cn-zhengzhou-jva' => 'metrics.cn-zhengzhou-jva.aliyuncs.com',
            'cn-zhangjiakou' => 'metrics.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu-gic-1' => 'metrics.cn-wulanchabu-gic-1.aliyuncs.com',
            'cn-wulanchabu' => 'metrics.cn-wulanchabu.aliyuncs.com',
            'cn-wuhan-lr' => 'metrics.cn-wuhan-lr.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'metrics.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-shenzhen' => 'metrics.cn-shenzhen.aliyuncs.com',
            'cn-shanghai-finance-1' => 'metrics.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'metrics.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'metrics.cn-qingdao.aliyuncs.com',
            'cn-north-2-gov-1' => 'metrics.cn-north-2-gov-1.aliyuncs.com',
            'cn-nanjing' => 'metrics.cn-nanjing.aliyuncs.com',
            'cn-huhehaote' => 'metrics.cn-huhehaote.aliyuncs.com',
            'cn-hongkong' => 'metrics.cn-hongkong.aliyuncs.com',
            'cn-heyuan-acdr-1' => 'metrics.cn-heyuan-acdr-1.aliyuncs.com',
            'cn-heyuan' => 'metrics.cn-heyuan.aliyuncs.com',
            'cn-hangzhou-finance' => 'metrics.cn-hangzhou-finance.aliyuncs.com',
            'cn-hangzhou' => 'metrics.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'metrics.cn-guangzhou.aliyuncs.com',
            'cn-fuzhou' => 'metrics.cn-fuzhou.aliyuncs.com',
            'cn-chengdu' => 'metrics.cn-chengdu.aliyuncs.com',
            'cn-beijing-finance-1' => 'metrics.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing' => 'metrics.cn-beijing.aliyuncs.com',
            'ap-southeast-8' => 'metrics.ap-southeast-8.aliyuncs.com',
            'ap-southeast-7' => 'metrics.ap-southeast-7.aliyuncs.com',
            'ap-southeast-6' => 'metrics.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'metrics.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'metrics.ap-southeast-3.aliyuncs.com',
            'ap-southeast-2' => 'metrics.ap-southeast-2.aliyuncs.com',
            'ap-southeast-1' => 'metrics.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'metrics.ap-south-1.aliyuncs.com',
            'ap-northeast-2' => 'metrics.ap-northeast-2.aliyuncs.com',
            'ap-northeast-1' => 'metrics.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Write to the context.
     *
     * @param request - AddContextsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddContextsResponse
     *
     * @param string             $workspace
     * @param string             $contextStoreName
     * @param AddContextsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddContextsResponse
     */
    public function addContextsWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contextType) {
            @$body['contextType'] = $request->contextType;
        }

        if (null !== $request->items) {
            @$body['items'] = $request->items;
        }

        if (null !== $request->memoryType) {
            @$body['memoryType'] = $request->memoryType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddContexts',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddContextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Write to the context.
     *
     * @param request - AddContextsRequest
     *
     * @returns AddContextsResponse
     *
     * @param string             $workspace
     * @param string             $contextStoreName
     * @param AddContextsRequest $request
     *
     * @return AddContextsResponse
     */
    public function addContexts($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addContextsWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Add new facts, messages, or metadata to a user’s memory store. The AddMemories endpoint accepts raw text or conversation turns and commits them asynchronously, preparing the memories for subsequent search, retrieval, and graph queries.
     *
     * @param request - AddMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMemoriesResponse
     *
     * @param string             $workspace
     * @param string             $memoryStoreName
     * @param AddMemoriesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddMemoriesResponse
     */
    public function addMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->asyncMode) {
            @$body['asyncMode'] = $request->asyncMode;
        }

        if (null !== $request->customInstructions) {
            @$body['customInstructions'] = $request->customInstructions;
        }

        if (null !== $request->infer) {
            @$body['infer'] = $request->infer;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->timestamp) {
            @$body['timestamp'] = $request->timestamp;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMemories',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add new facts, messages, or metadata to a user’s memory store. The AddMemories endpoint accepts raw text or conversation turns and commits them asynchronously, preparing the memories for subsequent search, retrieval, and graph queries.
     *
     * @param request - AddMemoriesRequest
     *
     * @returns AddMemoriesResponse
     *
     * @param string             $workspace
     * @param string             $memoryStoreName
     * @param AddMemoriesRequest $request
     *
     * @return AddMemoriesResponse
     */
    public function addMemories($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Changes the resource group of a resource.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/resourcegroup',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group of a resource.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Installs an add-on.
     *
     * @remarks
     * Creates a release for an add-on.
     *
     * @param request - CreateAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param CreateAddonReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAddonReleaseResponse
     */
    public function createAddonReleaseWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addonName) {
            @$body['addonName'] = $request->addonName;
        }

        if (null !== $request->aliyunLang) {
            @$body['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->entityRules) {
            @$body['entityRules'] = $request->entityRules;
        }

        if (null !== $request->envType) {
            @$body['envType'] = $request->envType;
        }

        if (null !== $request->parentAddonReleaseId) {
            @$body['parentAddonReleaseId'] = $request->parentAddonReleaseId;
        }

        if (null !== $request->releaseName) {
            @$body['releaseName'] = $request->releaseName;
        }

        if (null !== $request->values) {
            @$body['values'] = $request->values;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs an add-on.
     *
     * @remarks
     * Creates a release for an add-on.
     *
     * @param request - CreateAddonReleaseRequest
     *
     * @returns CreateAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param CreateAddonReleaseRequest $request
     *
     * @return CreateAddonReleaseResponse
     */
    public function createAddonRelease($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAddonReleaseWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Create an aggregation task group.
     *
     * @param request - CreateAggTaskGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param CreateAggTaskGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAggTaskGroupResponse
     */
    public function createAggTaskGroupWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->overrideIfExists) {
            @$query['overrideIfExists'] = $request->overrideIfExists;
        }

        $body = [];
        if (null !== $request->aggTaskGroupConfig) {
            @$body['aggTaskGroupConfig'] = $request->aggTaskGroupConfig;
        }

        if (null !== $request->aggTaskGroupConfigType) {
            @$body['aggTaskGroupConfigType'] = $request->aggTaskGroupConfigType;
        }

        if (null !== $request->aggTaskGroupName) {
            @$body['aggTaskGroupName'] = $request->aggTaskGroupName;
        }

        if (null !== $request->cronExpr) {
            @$body['cronExpr'] = $request->cronExpr;
        }

        if (null !== $request->delay) {
            @$body['delay'] = $request->delay;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->fromTime) {
            @$body['fromTime'] = $request->fromTime;
        }

        if (null !== $request->maxRetries) {
            @$body['maxRetries'] = $request->maxRetries;
        }

        if (null !== $request->maxRunTimeInSeconds) {
            @$body['maxRunTimeInSeconds'] = $request->maxRunTimeInSeconds;
        }

        if (null !== $request->precheckString) {
            @$body['precheckString'] = $request->precheckString;
        }

        if (null !== $request->scheduleMode) {
            @$body['scheduleMode'] = $request->scheduleMode;
        }

        if (null !== $request->scheduleTimeExpr) {
            @$body['scheduleTimeExpr'] = $request->scheduleTimeExpr;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->targetPrometheusId) {
            @$body['targetPrometheusId'] = $request->targetPrometheusId;
        }

        if (null !== $request->toTime) {
            @$body['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an aggregation task group.
     *
     * @param request - CreateAggTaskGroupRequest
     *
     * @returns CreateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param CreateAggTaskGroupRequest $request
     *
     * @return CreateAggTaskGroupResponse
     */
    public function createAggTaskGroup($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAggTaskGroupWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Create a webhook.
     *
     * @remarks
     * Creates an alert webhook to use as a notification recipient.
     *
     * @param request - CreateAlertWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlertWebhookResponse
     *
     * @param CreateAlertWebhookRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAlertWebhookResponse
     */
    public function createAlertWebhookWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->headers) {
            @$body['headers'] = $request->headers;
        }

        if (null !== $request->lang) {
            @$body['lang'] = $request->lang;
        }

        if (null !== $request->method) {
            @$body['method'] = $request->method;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        if (null !== $request->webhookId) {
            @$body['webhookId'] = $request->webhookId;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlertWebhook',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/webhook',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAlertWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a webhook.
     *
     * @remarks
     * Creates an alert webhook to use as a notification recipient.
     *
     * @param request - CreateAlertWebhookRequest
     *
     * @returns CreateAlertWebhookResponse
     *
     * @param CreateAlertWebhookRequest $request
     *
     * @return CreateAlertWebhookResponse
     */
    public function createAlertWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlertWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a business trace.
     *
     * @param request - CreateBizTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBizTraceResponse
     *
     * @param CreateBizTraceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateBizTraceResponse
     */
    public function createBizTraceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->advancedConfig) {
            @$body['advancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->bizTraceCode) {
            @$body['bizTraceCode'] = $request->bizTraceCode;
        }

        if (null !== $request->bizTraceName) {
            @$body['bizTraceName'] = $request->bizTraceName;
        }

        if (null !== $request->ruleConfig) {
            @$body['ruleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a business trace.
     *
     * @param request - CreateBizTraceRequest
     *
     * @returns CreateBizTraceResponse
     *
     * @param CreateBizTraceRequest $request
     *
     * @return CreateBizTraceResponse
     */
    public function createBizTrace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBizTraceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a cloud resource.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudResourceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateCloudResourceResponse
     */
    public function createCloudResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateCloudResource',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud resource.
     *
     * @returns CreateCloudResourceResponse
     *
     * @return CreateCloudResourceResponse
     */
    public function createCloudResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCloudResourceWithOptions($headers, $runtime);
    }

    /**
     * Creates a context store.
     *
     * @param request - CreateContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextStoreResponse
     *
     * @param string                    $workspace
     * @param CreateContextStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateContextStoreResponse
     */
    public function createContextStoreWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->contextStoreName) {
            @$body['contextStoreName'] = $request->contextStoreName;
        }

        if (null !== $request->contextType) {
            @$body['contextType'] = $request->contextType;
        }

        if (null !== $request->dataset) {
            @$body['dataset'] = $request->dataset;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateContextStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a context store.
     *
     * @param request - CreateContextStoreRequest
     *
     * @returns CreateContextStoreResponse
     *
     * @param string                    $workspace
     * @param CreateContextStoreRequest $request
     *
     * @return CreateContextStoreResponse
     */
    public function createContextStore($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContextStoreWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Creates an API key for a context store.
     *
     * @param request - CreateContextStoreAPIKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextStoreAPIKeyResponse
     *
     * @param string                          $workspace
     * @param string                          $contextStoreName
     * @param CreateContextStoreAPIKeyRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateContextStoreAPIKeyResponse
     */
    public function createContextStoreAPIKeyWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateContextStoreAPIKey',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateContextStoreAPIKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API key for a context store.
     *
     * @param request - CreateContextStoreAPIKeyRequest
     *
     * @returns CreateContextStoreAPIKeyResponse
     *
     * @param string                          $workspace
     * @param string                          $contextStoreName
     * @param CreateContextStoreAPIKeyRequest $request
     *
     * @return CreateContextStoreAPIKeyResponse
     */
    public function createContextStoreAPIKey($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContextStoreAPIKeyWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Creates a dataset.
     *
     * @param request - CreateDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasetResponse
     *
     * @param string               $workspace
     * @param CreateDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetName) {
            @$body['datasetName'] = $request->datasetName;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->schema) {
            @$body['schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataset',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/dataset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a dataset.
     *
     * @param request - CreateDatasetRequest
     *
     * @returns CreateDatasetResponse
     *
     * @param string               $workspace
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Create a data delivery task to deliver metric data from a data source to a storage destination or message queue. This task supports three delivery types: Prometheus Remote Write, Kafka, and MaxCompute. You can also use tags to filter which metrics are delivered and attach custom tags to them.
     *
     * @param request - CreateDeliveryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeliveryTaskResponse
     *
     * @param CreateDeliveryTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDeliveryTaskResponse
     */
    public function createDeliveryTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->externalLabels) {
            @$body['externalLabels'] = $request->externalLabels;
        }

        if (null !== $request->labelFilters) {
            @$body['labelFilters'] = $request->labelFilters;
        }

        if (null !== $request->labelFiltersType) {
            @$body['labelFiltersType'] = $request->labelFiltersType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sinkList) {
            @$body['sinkList'] = $request->sinkList;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        if (null !== $request->taskName) {
            @$body['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeliveryTask',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/delivery-tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a data delivery task to deliver metric data from a data source to a storage destination or message queue. This task supports three delivery types: Prometheus Remote Write, Kafka, and MaxCompute. You can also use tags to filter which metrics are delivered and attach custom tags to them.
     *
     * @param request - CreateDeliveryTaskRequest
     *
     * @returns CreateDeliveryTaskResponse
     *
     * @param CreateDeliveryTaskRequest $request
     *
     * @return CreateDeliveryTaskResponse
     */
    public function createDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeliveryTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates storage for an EntityStore.
     *
     * @param request - CreateEntityStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEntityStoreResponse
     *
     * @param string                   $workspaceName
     * @param CreateEntityStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEntityStoreResponse
     */
    public function createEntityStoreWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates storage for an EntityStore.
     *
     * @param request - CreateEntityStoreRequest
     *
     * @returns CreateEntityStoreResponse
     *
     * @param string                   $workspaceName
     * @param CreateEntityStoreRequest $request
     *
     * @return CreateEntityStoreResponse
     */
    public function createEntityStore($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEntityStoreWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Creates an Integration Center policy.
     *
     * @remarks
     * This operation creates an event integration.
     *
     * @param request - CreateIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIntegrationPolicyResponse
     *
     * @param CreateIntegrationPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIntegrationPolicyResponse
     */
    public function createIntegrationPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->entityGroup) {
            @$body['entityGroup'] = $request->entityGroup;
        }

        if (null !== $request->policyName) {
            @$body['policyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$body['policyType'] = $request->policyType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Integration Center policy.
     *
     * @remarks
     * This operation creates an event integration.
     *
     * @param request - CreateIntegrationPolicyRequest
     *
     * @returns CreateIntegrationPolicyResponse
     *
     * @param CreateIntegrationPolicyRequest $request
     *
     * @return CreateIntegrationPolicyResponse
     */
    public function createIntegrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIntegrationPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a MemoryStore.
     *
     * @param request - CreateMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryStoreResponse
     *
     * @param string                   $workspace
     * @param CreateMemoryStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMemoryStoreResponse
     */
    public function createMemoryStoreWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customExtractionStrategies) {
            @$body['customExtractionStrategies'] = $request->customExtractionStrategies;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->extractionStrategies) {
            @$body['extractionStrategies'] = $request->extractionStrategies;
        }

        if (null !== $request->memoryStoreName) {
            @$body['memoryStoreName'] = $request->memoryStoreName;
        }

        if (null !== $request->shortTermTtl) {
            @$body['shortTermTtl'] = $request->shortTermTtl;
        }

        if (null !== $request->sourceType) {
            @$body['sourceType'] = $request->sourceType;
        }

        if (null !== $request->traceSourceConfig) {
            @$body['traceSourceConfig'] = $request->traceSourceConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMemoryStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a MemoryStore.
     *
     * @param request - CreateMemoryStoreRequest
     *
     * @returns CreateMemoryStoreResponse
     *
     * @param string                   $workspace
     * @param CreateMemoryStoreRequest $request
     *
     * @return CreateMemoryStoreResponse
     */
    public function createMemoryStore($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryStoreWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Create a pipeline.
     *
     * @param request - CreatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePipelineResponse
     *
     * @param string                $workspace
     * @param CreatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->executePolicy) {
            @$body['executePolicy'] = $request->executePolicy;
        }

        if (null !== $request->pipeline) {
            @$body['pipeline'] = $request->pipeline;
        }

        if (null !== $request->pipelineName) {
            @$body['pipelineName'] = $request->pipelineName;
        }

        if (null !== $request->sink) {
            @$body['sink'] = $request->sink;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePipeline',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/pipeline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a pipeline.
     *
     * @param request - CreatePipelineRequest
     *
     * @returns CreatePipelineResponse
     *
     * @param string                $workspace
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Creates a Managed Service for Prometheus instance.
     *
     * @param request - CreatePrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->archiveDuration) {
            @$body['archiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->authFreeWritePolicy) {
            @$body['authFreeWritePolicy'] = $request->authFreeWritePolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthFreeWrite) {
            @$body['enableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->prometheusInstanceName) {
            @$body['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->storageDuration) {
            @$body['storageDuration'] = $request->storageDuration;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Managed Service for Prometheus instance.
     *
     * @param request - CreatePrometheusInstanceRequest
     *
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a Prometheus view.
     *
     * @remarks
     * Creates a site monitoring task.
     *
     * @param request - CreatePrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusViewResponse
     *
     * @param CreatePrometheusViewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePrometheusViewResponse
     */
    public function createPrometheusViewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->prometheusInstances) {
            @$body['prometheusInstances'] = $request->prometheusInstances;
        }

        if (null !== $request->prometheusViewName) {
            @$body['prometheusViewName'] = $request->prometheusViewName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Prometheus view.
     *
     * @remarks
     * Creates a site monitoring task.
     *
     * @param request - CreatePrometheusViewRequest
     *
     * @returns CreatePrometheusViewResponse
     *
     * @param CreatePrometheusViewRequest $request
     *
     * @return CreatePrometheusViewResponse
     */
    public function createPrometheusView($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusViewWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a virtual instance for Prometheus monitoring.
     *
     * @remarks
     * Creates a virtual instance for Prometheus monitoring.
     *
     * @param request - CreatePrometheusVirtualInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusVirtualInstanceResponse
     *
     * @param CreatePrometheusVirtualInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreatePrometheusVirtualInstanceResponse
     */
    public function createPrometheusVirtualInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusVirtualInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/virtual-instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusVirtualInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual instance for Prometheus monitoring.
     *
     * @remarks
     * Creates a virtual instance for Prometheus monitoring.
     *
     * @param request - CreatePrometheusVirtualInstanceRequest
     *
     * @returns CreatePrometheusVirtualInstanceResponse
     *
     * @param CreatePrometheusVirtualInstanceRequest $request
     *
     * @return CreatePrometheusVirtualInstanceResponse
     */
    public function createPrometheusVirtualInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusVirtualInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a service for application observability.
     *
     * @param request - CreateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceResponse
     *
     * @param string               $workspace
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->pid) {
            @$body['pid'] = $request->pid;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceName) {
            @$body['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceStatus) {
            @$body['serviceStatus'] = $request->serviceStatus;
        }

        if (null !== $request->serviceType) {
            @$body['serviceType'] = $request->serviceType;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service for application observability.
     *
     * @param request - CreateServiceRequest
     *
     * @returns CreateServiceResponse
     *
     * @param string               $workspace
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Creates application observability and prepares the prerequisite resources required for integration.
     *
     * @param request - CreateServiceObservabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceObservabilityResponse
     *
     * @param string                            $workspace
     * @param string                            $type
     * @param CreateServiceObservabilityRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateServiceObservabilityResponse
     */
    public function createServiceObservabilityWithOptions($workspace, $type, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateServiceObservability',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service-observability/' . Url::percentEncode($type) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceObservabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates application observability and prepares the prerequisite resources required for integration.
     *
     * @param request - CreateServiceObservabilityRequest
     *
     * @returns CreateServiceObservabilityResponse
     *
     * @param string                            $workspace
     * @param string                            $type
     * @param CreateServiceObservabilityRequest $request
     *
     * @return CreateServiceObservabilityResponse
     */
    public function createServiceObservability($workspace, $type, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceObservabilityWithOptions($workspace, $type, $request, $headers, $runtime);
    }

    /**
     * Creates a service-linked entry for associating configurations with the application monitoring service, such as log association.
     *
     * @param request - CreateServiceRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceRecordResponse
     *
     * @param string                     $workspace
     * @param string                     $serviceId
     * @param CreateServiceRecordRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateServiceRecordResponse
     */
    public function createServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->recordContent) {
            @$body['recordContent'] = $request->recordContent;
        }

        if (null !== $request->recordType) {
            @$body['recordType'] = $request->recordType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceRecord',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '/record',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked entry for associating configurations with the application monitoring service, such as log association.
     *
     * @param request - CreateServiceRecordRequest
     *
     * @returns CreateServiceRecordResponse
     *
     * @param string                     $workspace
     * @param string                     $serviceId
     * @param CreateServiceRecordRequest $request
     *
     * @return CreateServiceRecordResponse
     */
    public function createServiceRecord($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * To share a console page or embed it into a third-party system without requiring a password, you can call the CreateTicket operation to generate a ticket. You can then use the ticket to create a password-free link.
     *
     * @param request - CreateTicketRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenExpirationTime) {
            @$query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }

        if (null !== $request->expirationTime) {
            @$query['expirationTime'] = $request->expirationTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tickets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To share a console page or embed it into a third-party system without requiring a password, you can call the CreateTicket operation to generate a ticket. You can then use the ticket to create a password-free link.
     *
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a Umodel configuration.
     *
     * @remarks
     * Creates a Umodel configuration in a specified workspace.
     *
     * @param request - CreateUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUmodelResponse
     *
     * @param string              $workspace
     * @param CreateUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateUmodelResponse
     */
    public function createUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Umodel configuration.
     *
     * @remarks
     * Creates a Umodel configuration in a specified workspace.
     *
     * @param request - CreateUmodelRequest
     *
     * @returns CreateUmodelResponse
     *
     * @param string              $workspace
     * @param CreateUmodelRequest $request
     *
     * @return CreateUmodelResponse
     */
    public function createUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Deletes add-on release information.
     *
     * @param request - DeleteAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param DeleteAddonReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAddonReleaseResponse
     */
    public function deleteAddonReleaseWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        if (null !== $request->releaseName) {
            @$query['releaseName'] = $request->releaseName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes add-on release information.
     *
     * @param request - DeleteAddonReleaseRequest
     *
     * @returns DeleteAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param DeleteAddonReleaseRequest $request
     *
     * @return DeleteAddonReleaseResponse
     */
    public function deleteAddonRelease($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAddonReleaseWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Deletes an aggregation task group.
     *
     * @param request - DeleteAggTaskGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param string                    $groupId
     * @param DeleteAggTaskGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAggTaskGroupResponse
     */
    public function deleteAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an aggregation task group.
     *
     * @param request - DeleteAggTaskGroupRequest
     *
     * @returns DeleteAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param string                    $groupId
     * @param DeleteAggTaskGroupRequest $request
     *
     * @return DeleteAggTaskGroupResponse
     */
    public function deleteAggTaskGroup($instanceId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Deletes one or more alert webhooks.
     *
     * @param tmpReq - DeleteAlertWebhooksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlertWebhooksResponse
     *
     * @param DeleteAlertWebhooksRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAlertWebhooksResponse
     */
    public function deleteAlertWebhooksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAlertWebhooksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->webhookIds) {
            $request->webhookIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->webhookIds, 'webhookIds', 'json');
        }

        $query = [];
        if (null !== $request->webhookIdsShrink) {
            @$query['webhookIds'] = $request->webhookIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlertWebhooks',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/webhooks',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAlertWebhooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more alert webhooks.
     *
     * @param request - DeleteAlertWebhooksRequest
     *
     * @returns DeleteAlertWebhooksResponse
     *
     * @param DeleteAlertWebhooksRequest $request
     *
     * @return DeleteAlertWebhooksResponse
     */
    public function deleteAlertWebhooks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertWebhooksWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a business trace.
     *
     * @param request - DeleteBizTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBizTraceResponse
     *
     * @param string                $bizTraceId
     * @param DeleteBizTraceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBizTraceResponse
     */
    public function deleteBizTraceWithOptions($bizTraceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace/' . Url::percentEncode($bizTraceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a business trace.
     *
     * @param request - DeleteBizTraceRequest
     *
     * @returns DeleteBizTraceResponse
     *
     * @param string                $bizTraceId
     * @param DeleteBizTraceRequest $request
     *
     * @return DeleteBizTraceResponse
     */
    public function deleteBizTrace($bizTraceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBizTraceWithOptions($bizTraceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a cloud resource.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudResourceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCloudResourceResponse
     */
    public function deleteCloudResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCloudResource',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cloud resource.
     *
     * @returns DeleteCloudResourceResponse
     *
     * @return DeleteCloudResourceResponse
     */
    public function deleteCloudResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCloudResourceWithOptions($headers, $runtime);
    }

    /**
     * Deletes a context.
     *
     * @param request - DeleteContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextResponse
     *
     * @param string               $workspace
     * @param string               $contextStoreName
     * @param string               $contextId
     * @param DeleteContextRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContextResponse
     */
    public function deleteContextWithOptions($workspace, $contextStoreName, $contextId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteContext',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context/' . Url::percentEncode($contextId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a context.
     *
     * @param request - DeleteContextRequest
     *
     * @returns DeleteContextResponse
     *
     * @param string               $workspace
     * @param string               $contextStoreName
     * @param string               $contextId
     * @param DeleteContextRequest $request
     *
     * @return DeleteContextResponse
     */
    public function deleteContext($workspace, $contextStoreName, $contextId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContextWithOptions($workspace, $contextStoreName, $contextId, $request, $headers, $runtime);
    }

    /**
     * Deletes a context store.
     *
     * @param request - DeleteContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextStoreResponse
     *
     * @param string                    $workspace
     * @param string                    $contextStoreName
     * @param DeleteContextStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteContextStoreResponse
     */
    public function deleteContextStoreWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteContextStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a context store.
     *
     * @param request - DeleteContextStoreRequest
     *
     * @returns DeleteContextStoreResponse
     *
     * @param string                    $workspace
     * @param string                    $contextStoreName
     * @param DeleteContextStoreRequest $request
     *
     * @return DeleteContextStoreResponse
     */
    public function deleteContextStore($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContextStoreWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Deletes an API key.
     *
     * @param request - DeleteContextStoreAPIKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextStoreAPIKeyResponse
     *
     * @param string                          $workspace
     * @param string                          $contextStoreName
     * @param string                          $name
     * @param DeleteContextStoreAPIKeyRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteContextStoreAPIKeyResponse
     */
    public function deleteContextStoreAPIKeyWithOptions($workspace, $contextStoreName, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteContextStoreAPIKey',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteContextStoreAPIKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API key.
     *
     * @param request - DeleteContextStoreAPIKeyRequest
     *
     * @returns DeleteContextStoreAPIKeyResponse
     *
     * @param string                          $workspace
     * @param string                          $contextStoreName
     * @param string                          $name
     * @param DeleteContextStoreAPIKeyRequest $request
     *
     * @return DeleteContextStoreAPIKeyResponse
     */
    public function deleteContextStoreAPIKey($workspace, $contextStoreName, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContextStoreAPIKeyWithOptions($workspace, $contextStoreName, $name, $request, $headers, $runtime);
    }

    /**
     * Deletes contexts in bulk.
     *
     * @param request - DeleteContextsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextsResponse
     *
     * @param string                $workspace
     * @param string                $contextStoreName
     * @param DeleteContextsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteContextsResponse
     */
    public function deleteContextsWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contextIds) {
            @$query['contextIds'] = $request->contextIds;
        }

        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContexts',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteContextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes contexts in bulk.
     *
     * @param request - DeleteContextsRequest
     *
     * @returns DeleteContextsResponse
     *
     * @param string                $workspace
     * @param string                $contextStoreName
     * @param DeleteContextsRequest $request
     *
     * @return DeleteContextsResponse
     */
    public function deleteContexts($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContextsWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Deletes a dataset.
     *
     * @param request - DeleteDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetResponse
     *
     * @param string               $workspace
     * @param string               $datasetName
     * @param DeleteDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($workspace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDataset',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/dataset/' . Url::percentEncode($datasetName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a dataset.
     *
     * @param request - DeleteDatasetRequest
     *
     * @returns DeleteDatasetResponse
     *
     * @param string               $workspace
     * @param string               $datasetName
     * @param DeleteDatasetRequest $request
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($workspace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetWithOptions($workspace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * Deletes a delivery task.
     *
     * @param request - DeleteDeliveryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeliveryTaskResponse
     *
     * @param string                    $taskId
     * @param DeleteDeliveryTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDeliveryTaskResponse
     */
    public function deleteDeliveryTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDeliveryTask',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/delivery-task/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a delivery task.
     *
     * @param request - DeleteDeliveryTaskRequest
     *
     * @returns DeleteDeliveryTaskResponse
     *
     * @param string                    $taskId
     * @param DeleteDeliveryTaskRequest $request
     *
     * @return DeleteDeliveryTaskResponse
     */
    public function deleteDeliveryTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeliveryTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Deletes an EntityStore.
     *
     * @param request - DeleteEntityStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEntityStoreResponse
     *
     * @param string                   $workspaceName
     * @param DeleteEntityStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEntityStoreResponse
     */
    public function deleteEntityStoreWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an EntityStore.
     *
     * @param request - DeleteEntityStoreRequest
     *
     * @returns DeleteEntityStoreResponse
     *
     * @param string                   $workspaceName
     * @param DeleteEntityStoreRequest $request
     *
     * @return DeleteEntityStoreResponse
     */
    public function deleteEntityStore($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEntityStoreWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Deletes an Integration Center policy.
     *
     * @param request - DeleteIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIntegrationPolicyResponse
     *
     * @param string                         $policyId
     * @param DeleteIntegrationPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIntegrationPolicyResponse
     */
    public function deleteIntegrationPolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Integration Center policy.
     *
     * @param request - DeleteIntegrationPolicyRequest
     *
     * @returns DeleteIntegrationPolicyResponse
     *
     * @param string                         $policyId
     * @param DeleteIntegrationPolicyRequest $request
     *
     * @return DeleteIntegrationPolicyResponse
     */
    public function deleteIntegrationPolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIntegrationPolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Deletes memories based on filter properties. You must set at least one filter property. If no filter properties are set, a validation error is returned.
     *
     * @param request - DeleteMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoriesResponse
     *
     * @param string                $workspace
     * @param string                $memoryStoreName
     * @param DeleteMemoriesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMemoriesResponse
     */
    public function deleteMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agentId'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$query['appId'] = $request->appId;
        }

        if (null !== $request->runId) {
            @$query['runId'] = $request->runId;
        }

        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMemories',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes memories based on filter properties. You must set at least one filter property. If no filter properties are set, a validation error is returned.
     *
     * @param request - DeleteMemoriesRequest
     *
     * @returns DeleteMemoriesResponse
     *
     * @param string                $workspace
     * @param string                $memoryStoreName
     * @param DeleteMemoriesRequest $request
     *
     * @return DeleteMemoriesResponse
     */
    public function deleteMemories($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Deletes a memory.
     *
     * @param request - DeleteMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspace
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory/' . Url::percentEncode($memoryId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a memory.
     *
     * @param request - DeleteMemoryRequest
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspace
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($workspace, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Deletes a Memory Store.
     *
     * @param request - DeleteMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryStoreResponse
     *
     * @param string                   $workspace
     * @param string                   $memoryStoreName
     * @param DeleteMemoryStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMemoryStoreResponse
     */
    public function deleteMemoryStoreWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemoryStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Memory Store.
     *
     * @param request - DeleteMemoryStoreRequest
     *
     * @returns DeleteMemoryStoreResponse
     *
     * @param string                   $workspace
     * @param string                   $memoryStoreName
     * @param DeleteMemoryStoreRequest $request
     *
     * @return DeleteMemoryStoreResponse
     */
    public function deleteMemoryStore($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryStoreWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Deletes a pipeline.
     *
     * @param request - DeletePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelineResponse
     *
     * @param string                $workspace
     * @param string                $pipelineName
     * @param DeletePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($workspace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePipeline',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/pipeline/' . Url::percentEncode($pipelineName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a pipeline.
     *
     * @param request - DeletePipelineRequest
     *
     * @returns DeletePipelineResponse
     *
     * @param string                $workspace
     * @param string                $pipelineName
     * @param DeletePipelineRequest $request
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($workspace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($workspace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Deletes a Prometheus instance.
     *
     * @remarks
     * Deletes a Prometheus instance.
     *
     * @param request - DeletePrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrometheusInstanceResponse
     *
     * @param string                          $prometheusInstanceId
     * @param DeletePrometheusInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeletePrometheusInstanceResponse
     */
    public function deletePrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Prometheus instance.
     *
     * @remarks
     * Deletes a Prometheus instance.
     *
     * @param request - DeletePrometheusInstanceRequest
     *
     * @returns DeletePrometheusInstanceResponse
     *
     * @param string                          $prometheusInstanceId
     * @param DeletePrometheusInstanceRequest $request
     *
     * @return DeletePrometheusInstanceResponse
     */
    public function deletePrometheusInstance($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a Prometheus view instance.
     *
     * @remarks
     * Deletes a Prometheus view instance.
     *
     * @param request - DeletePrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrometheusViewResponse
     *
     * @param string                      $prometheusViewId
     * @param DeletePrometheusViewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePrometheusViewResponse
     */
    public function deletePrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views/' . Url::percentEncode($prometheusViewId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Prometheus view instance.
     *
     * @remarks
     * Deletes a Prometheus view instance.
     *
     * @param request - DeletePrometheusViewRequest
     *
     * @returns DeletePrometheusViewResponse
     *
     * @param string                      $prometheusViewId
     * @param DeletePrometheusViewRequest $request
     *
     * @return DeletePrometheusViewResponse
     */
    public function deletePrometheusView($prometheusViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime);
    }

    /**
     * Deletes a Prometheus virtual instance by its ID.
     *
     * @param request - DeletePrometheusVirtualInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrometheusVirtualInstanceResponse
     *
     * @param string                                 $prometheusInstanceId
     * @param DeletePrometheusVirtualInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DeletePrometheusVirtualInstanceResponse
     */
    public function deletePrometheusVirtualInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePrometheusVirtualInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/virtual-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePrometheusVirtualInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Prometheus virtual instance by its ID.
     *
     * @param request - DeletePrometheusVirtualInstanceRequest
     *
     * @returns DeletePrometheusVirtualInstanceResponse
     *
     * @param string                                 $prometheusInstanceId
     * @param DeletePrometheusVirtualInstanceRequest $request
     *
     * @return DeletePrometheusVirtualInstanceResponse
     */
    public function deletePrometheusVirtualInstance($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePrometheusVirtualInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes an Application Monitoring service.
     *
     * @param request - DeleteServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceResponse
     *
     * @param string               $workspace
     * @param string               $serviceId
     * @param DeleteServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Application Monitoring service.
     *
     * @param request - DeleteServiceRequest
     *
     * @returns DeleteServiceResponse
     *
     * @param string               $workspace
     * @param string               $serviceId
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a service association entry.
     *
     * @remarks
     * Deletes a created service association entry.
     *
     * @param request - DeleteServiceRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceRecordResponse
     *
     * @param string                     $workspace
     * @param string                     $serviceId
     * @param DeleteServiceRecordRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteServiceRecordResponse
     */
    public function deleteServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordType) {
            @$query['recordType'] = $request->recordType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceRecord',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '/record',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service association entry.
     *
     * @remarks
     * Deletes a created service association entry.
     *
     * @param request - DeleteServiceRecordRequest
     *
     * @returns DeleteServiceRecordResponse
     *
     * @param string                     $workspace
     * @param string                     $serviceId
     * @param DeleteServiceRecordRequest $request
     *
     * @return DeleteServiceRecordResponse
     */
    public function deleteServiceRecord($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a Umodel configuration.
     *
     * @remarks
     * Deletes a Umodel from a specified workspace.
     *
     * @param request - DeleteUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelResponse
     *
     * @param string              $workspace
     * @param DeleteUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteUmodelResponse
     */
    public function deleteUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Umodel configuration.
     *
     * @remarks
     * Deletes a Umodel from a specified workspace.
     *
     * @param request - DeleteUmodelRequest
     *
     * @returns DeleteUmodelResponse
     *
     * @param string              $workspace
     * @param DeleteUmodelRequest $request
     *
     * @return DeleteUmodelResponse
     */
    public function deleteUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Deletes a public Umodel schema reference.
     *
     * @param request - DeleteUmodelCommonSchemaRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param DeleteUmodelCommonSchemaRefRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteUmodelCommonSchemaRefResponse
     */
    public function deleteUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUmodelCommonSchemaRef',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/common-schema-ref',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelCommonSchemaRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a public Umodel schema reference.
     *
     * @param request - DeleteUmodelCommonSchemaRefRequest
     *
     * @returns DeleteUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param DeleteUmodelCommonSchemaRefRequest $request
     *
     * @return DeleteUmodelCommonSchemaRefResponse
     */
    public function deleteUmodelCommonSchemaRef($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Deletes Umodel elements.
     *
     * @remarks
     * Deletes Umodel data from a specified workspace.
     *
     * @param request - DeleteUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelDataResponse
     *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteUmodelDataResponse
     */
    public function deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['domain'] = $request->domain;
        }

        if (null !== $request->kind) {
            @$query['kind'] = $request->kind;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/data',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes Umodel elements.
     *
     * @remarks
     * Deletes Umodel data from a specified workspace.
     *
     * @param request - DeleteUmodelDataRequest
     *
     * @returns DeleteUmodelDataResponse
     *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request
     *
     * @return DeleteUmodelDataResponse
     */
    public function deleteUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Deletes a workspace.
     *
     * @param request - DeleteWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceName
     * @param DeleteWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workspace.
     *
     * @param request - DeleteWorkspaceRequest
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceName
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Queries metric metadata.
     *
     * @remarks
     * Queries the details of CloudMonitor monitoring metrics metadata.
     *
     * @param tmpReq - DescribeMetricMetaListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricMetaListResponse
     *
     * @param DescribeMetricMetaListRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaListWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeMetricMetaListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'labels', 'json');
        }

        $query = [];
        if (null !== $request->keywords) {
            @$query['keywords'] = $request->keywords;
        }

        if (null !== $request->labelsShrink) {
            @$query['labels'] = $request->labelsShrink;
        }

        if (null !== $request->metaFormat) {
            @$query['metaFormat'] = $request->metaFormat;
        }

        if (null !== $request->metricName) {
            @$query['metricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricMetaList',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/describe-metric-meta-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeMetricMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries metric metadata.
     *
     * @remarks
     * Queries the details of CloudMonitor monitoring metrics metadata.
     *
     * @param request - DescribeMetricMetaListRequest
     *
     * @returns DescribeMetricMetaListResponse
     *
     * @param DescribeMetricMetaListRequest $request
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeMetricMetaListWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of regions.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Executes SQL and SPL queries.
     *
     * @param request - ExecuteQueryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteQueryResponse
     *
     * @param string              $workspace
     * @param string              $datasetName
     * @param ExecuteQueryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ExecuteQueryResponse
     */
    public function executeQueryWithOptions($workspace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteQuery',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/dataset/' . Url::percentEncode($datasetName) . '/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes SQL and SPL queries.
     *
     * @param request - ExecuteQueryRequest
     *
     * @returns ExecuteQueryResponse
     *
     * @param string              $workspace
     * @param string              $datasetName
     * @param ExecuteQueryRequest $request
     *
     * @return ExecuteQueryResponse
     */
    public function executeQuery($workspace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeQueryWithOptions($workspace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an add-on.
     *
     * @remarks
     * Retrieves the details of an add-on.
     *
     * @param request - GetAddonRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonResponse
     *
     * @param string          $addonName
     * @param GetAddonRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetAddonResponse
     */
    public function getAddonWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddon',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an add-on.
     *
     * @remarks
     * Retrieves the details of an add-on.
     *
     * @param request - GetAddonRequest
     *
     * @returns GetAddonResponse
     *
     * @param string          $addonName
     * @param GetAddonRequest $request
     *
     * @return GetAddonResponse
     */
    public function getAddon($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * Details of an add-on schema.
     *
     * @remarks
     * This topic provides an example of how to modify version `1` of alert template `123456`. In this example, the alert level is set to `Critical`, the statistical method is set to `Average`, the comparison operator for the alert threshold is set to `GreaterThanOrEqualToThreshold`, the alert threshold is set to `90`, and the number of retries is set to `3`. The response indicates that the alert template was successfully modified.
     *
     * @param request - GetAddonCodeTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonCodeTemplateResponse
     *
     * @param string                      $addonName
     * @param GetAddonCodeTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAddonCodeTemplateResponse
     */
    public function getAddonCodeTemplateWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentType) {
            @$query['environmentType'] = $request->environmentType;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddonCodeTemplate',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '/alert-code-template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonCodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Details of an add-on schema.
     *
     * @remarks
     * This topic provides an example of how to modify version `1` of alert template `123456`. In this example, the alert level is set to `Critical`, the statistical method is set to `Average`, the comparison operator for the alert threshold is set to `GreaterThanOrEqualToThreshold`, the alert threshold is set to `90`, and the number of retries is set to `3`. The response indicates that the alert template was successfully modified.
     *
     * @param request - GetAddonCodeTemplateRequest
     *
     * @returns GetAddonCodeTemplateResponse
     *
     * @param string                      $addonName
     * @param GetAddonCodeTemplateRequest $request
     *
     * @return GetAddonCodeTemplateResponse
     */
    public function getAddonCodeTemplate($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonCodeTemplateWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * Queries the details and accessed state of an add-on release.
     *
     * @param request - GetAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonReleaseResponse
     *
     * @param string                 $releaseName
     * @param string                 $policyId
     * @param GetAddonReleaseRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetAddonReleaseResponse
     */
    public function getAddonReleaseWithOptions($releaseName, $policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases/' . Url::percentEncode($releaseName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details and accessed state of an add-on release.
     *
     * @param request - GetAddonReleaseRequest
     *
     * @returns GetAddonReleaseResponse
     *
     * @param string                 $releaseName
     * @param string                 $policyId
     * @param GetAddonReleaseRequest $request
     *
     * @return GetAddonReleaseResponse
     */
    public function getAddonRelease($releaseName, $policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonReleaseWithOptions($releaseName, $policyId, $request, $headers, $runtime);
    }

    /**
     * The details of an add-on schema.
     *
     * @remarks
     * Retrieves the schema of an add-on.
     *
     * @param request - GetAddonSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonSchemaResponse
     *
     * @param string                $addonName
     * @param GetAddonSchemaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetAddonSchemaResponse
     */
    public function getAddonSchemaWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentType) {
            @$query['environmentType'] = $request->environmentType;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddonSchema',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '/schema',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The details of an add-on schema.
     *
     * @remarks
     * Retrieves the schema of an add-on.
     *
     * @param request - GetAddonSchemaRequest
     *
     * @returns GetAddonSchemaResponse
     *
     * @param string                $addonName
     * @param GetAddonSchemaRequest $request
     *
     * @return GetAddonSchemaResponse
     */
    public function getAddonSchema($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonSchemaWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * Queries an aggregation task group.
     *
     * @param request - GetAggTaskGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggTaskGroupResponse
     *
     * @param string                 $instanceId
     * @param string                 $groupId
     * @param GetAggTaskGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetAggTaskGroupResponse
     */
    public function getAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an aggregation task group.
     *
     * @param request - GetAggTaskGroupRequest
     *
     * @returns GetAggTaskGroupResponse
     *
     * @param string                 $instanceId
     * @param string                 $groupId
     * @param GetAggTaskGroupRequest $request
     *
     * @return GetAggTaskGroupResponse
     */
    public function getAggTaskGroup($instanceId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Queries a business trace.
     *
     * @param request - GetBizTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBizTraceResponse
     *
     * @param string             $bizTraceId
     * @param GetBizTraceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetBizTraceResponse
     */
    public function getBizTraceWithOptions($bizTraceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace/' . Url::percentEncode($bizTraceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a business trace.
     *
     * @param request - GetBizTraceRequest
     *
     * @returns GetBizTraceResponse
     *
     * @param string             $bizTraceId
     * @param GetBizTraceRequest $request
     *
     * @return GetBizTraceResponse
     */
    public function getBizTrace($bizTraceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBizTraceWithOptions($bizTraceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves information about cloud resources.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudResourceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCloudResourceResponse
     */
    public function getCloudResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCloudResource',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about cloud resources.
     *
     * @returns GetCloudResourceResponse
     *
     * @return GetCloudResourceResponse
     */
    public function getCloudResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCloudResourceWithOptions($headers, $runtime);
    }

    /**
     * Queries all entity information of a specific cloud service within a specified time range.
     *
     * @remarks
     * ## Operation description
     * - This operation queries all entities of a specific cloud service within a specified time range.
     * - The `from` and `to` parameters specify the time range of the query in seconds-level timestamps.
     * - The `spl` parameter supports entityStore query statements to filter or select the required entities and their properties.
     * - If you need only specific fields, use the `project` clause in `spl` to filter them.
     * - The response contains the specific property values of each entity and the corresponding list of property names for easy parsing and processing.
     *
     * @param request - GetCloudResourceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudResourceDataResponse
     *
     * @param GetCloudResourceDataRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetCloudResourceDataResponse
     */
    public function getCloudResourceDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudResourceData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource/data',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCloudResourceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all entity information of a specific cloud service within a specified time range.
     *
     * @remarks
     * ## Operation description
     * - This operation queries all entities of a specific cloud service within a specified time range.
     * - The `from` and `to` parameters specify the time range of the query in seconds-level timestamps.
     * - The `spl` parameter supports entityStore query statements to filter or select the required entities and their properties.
     * - If you need only specific fields, use the `project` clause in `spl` to filter them.
     * - The response contains the specific property values of each entity and the corresponding list of property names for easy parsing and processing.
     *
     * @param request - GetCloudResourceDataRequest
     *
     * @returns GetCloudResourceDataResponse
     *
     * @param GetCloudResourceDataRequest $request
     *
     * @return GetCloudResourceDataResponse
     */
    public function getCloudResourceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCloudResourceDataWithOptions($request, $headers, $runtime);
    }

    /**
     * Checks whether a Prometheus service or product is activated.
     *
     * @remarks
     * The product and service request parameters cannot be specified in the same request.
     *
     * @param request - GetCmsServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCmsServiceResponse
     *
     * @param GetCmsServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCmsServiceResponse
     */
    public function getCmsServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        if (null !== $request->service) {
            @$query['service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCmsService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cmsservice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a Prometheus service or product is activated.
     *
     * @remarks
     * The product and service request parameters cannot be specified in the same request.
     *
     * @param request - GetCmsServiceRequest
     *
     * @returns GetCmsServiceResponse
     *
     * @param GetCmsServiceRequest $request
     *
     * @return GetCmsServiceResponse
     */
    public function getCmsService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCmsServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a single context.
     *
     * @param request - GetContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextResponse
     *
     * @param string            $workspace
     * @param string            $contextStoreName
     * @param string            $contextId
     * @param GetContextRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetContextResponse
     */
    public function getContextWithOptions($workspace, $contextStoreName, $contextId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->formatted) {
            @$query['formatted'] = $request->formatted;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContext',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context/' . Url::percentEncode($contextId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a single context.
     *
     * @param request - GetContextRequest
     *
     * @returns GetContextResponse
     *
     * @param string            $workspace
     * @param string            $contextStoreName
     * @param string            $contextId
     * @param GetContextRequest $request
     *
     * @return GetContextResponse
     */
    public function getContext($workspace, $contextStoreName, $contextId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextWithOptions($workspace, $contextStoreName, $contextId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specified context store.
     *
     * @param request - GetContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextStoreResponse
     *
     * @param string                 $workspace
     * @param string                 $contextStoreName
     * @param GetContextStoreRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetContextStoreResponse
     */
    public function getContextStoreWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetContextStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified context store.
     *
     * @param request - GetContextStoreRequest
     *
     * @returns GetContextStoreResponse
     *
     * @param string                 $workspace
     * @param string                 $contextStoreName
     * @param GetContextStoreRequest $request
     *
     * @return GetContextStoreResponse
     */
    public function getContextStore($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextStoreWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specified dataset.
     *
     * @param request - GetDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetResponse
     *
     * @param string            $workspace
     * @param string            $datasetName
     * @param GetDatasetRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($workspace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDataset',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/dataset/' . Url::percentEncode($datasetName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified dataset.
     *
     * @param request - GetDatasetRequest
     *
     * @returns GetDatasetResponse
     *
     * @param string            $workspace
     * @param string            $datasetName
     * @param GetDatasetRequest $request
     *
     * @return GetDatasetResponse
     */
    public function getDataset($workspace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetWithOptions($workspace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a data delivery task.
     *
     * @remarks
     * Deletes a specified site monitoring task.
     *
     * @param request - GetDeliveryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeliveryTaskResponse
     *
     * @param string                 $taskId
     * @param GetDeliveryTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeliveryTaskResponse
     */
    public function getDeliveryTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDeliveryTask',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/delivery-task/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a data delivery task.
     *
     * @remarks
     * Deletes a specified site monitoring task.
     *
     * @param request - GetDeliveryTaskRequest
     *
     * @returns GetDeliveryTaskResponse
     *
     * @param string                 $taskId
     * @param GetDeliveryTaskRequest $request
     *
     * @return GetDeliveryTaskResponse
     */
    public function getDeliveryTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeliveryTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the storage information of an EntityStore.
     *
     * @param request - GetEntityStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEntityStoreResponse
     *
     * @param string                $workspaceName
     * @param GetEntityStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetEntityStoreResponse
     */
    public function getEntityStoreWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the storage information of an EntityStore.
     *
     * @param request - GetEntityStoreRequest
     *
     * @returns GetEntityStoreResponse
     *
     * @param string                $workspaceName
     * @param GetEntityStoreRequest $request
     *
     * @return GetEntityStoreResponse
     */
    public function getEntityStore($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEntityStoreWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Queries the entity and relational data in a specified workspace to retrieve entity data for a specific time range.
     *
     * @param request - GetEntityStoreDataRequest
     * @param headers - GetEntityStoreDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEntityStoreDataResponse
     *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request
     * @param GetEntityStoreDataHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEntityStoreDataResponse
     */
    public function getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->acceptEncoding) {
            @$realHeaders['acceptEncoding'] = '' . $headers->acceptEncoding;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEntityStoreData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/entitiesAndRelations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the entity and relational data in a specified workspace to retrieve entity data for a specific time range.
     *
     * @param request - GetEntityStoreDataRequest
     *
     * @returns GetEntityStoreDataResponse
     *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request
     *
     * @return GetEntityStoreDataResponse
     */
    public function getEntityStoreData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEntityStoreDataHeaders([]);

        return $this->getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Query integration center policy information.
     *
     * @param request - GetIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntegrationPolicyResponse
     *
     * @param string                      $policyId
     * @param GetIntegrationPolicyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetIntegrationPolicyResponse
     */
    public function getIntegrationPolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query integration center policy information.
     *
     * @param request - GetIntegrationPolicyRequest
     *
     * @returns GetIntegrationPolicyResponse
     *
     * @param string                      $policyId
     * @param GetIntegrationPolicyRequest $request
     *
     * @return GetIntegrationPolicyResponse
     */
    public function getIntegrationPolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIntegrationPolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Queries the Integration Center version for a container cluster.
     *
     * @remarks
     * This operation is not available in the API Explorer.
     *
     * @param request - GetIntegrationVersionForCSRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntegrationVersionForCSResponse
     *
     * @param GetIntegrationVersionForCSRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIntegrationVersionForCSResponse
     */
    public function getIntegrationVersionForCSWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['clusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['clusterType'] = $request->clusterType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIntegrationVersionForCS',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-version/cs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIntegrationVersionForCSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Integration Center version for a container cluster.
     *
     * @remarks
     * This operation is not available in the API Explorer.
     *
     * @param request - GetIntegrationVersionForCSRequest
     *
     * @returns GetIntegrationVersionForCSResponse
     *
     * @param GetIntegrationVersionForCSRequest $request
     *
     * @return GetIntegrationVersionForCSResponse
     */
    public function getIntegrationVersionForCS($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIntegrationVersionForCSWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves all memories.
     *
     * @param request - GetMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoriesResponse
     *
     * @param string             $workspace
     * @param string             $memoryStoreName
     * @param GetMemoriesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetMemoriesResponse
     */
    public function getMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->filters) {
            @$body['filters'] = $request->filters;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMemories',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all memories.
     *
     * @param request - GetMemoriesRequest
     *
     * @returns GetMemoriesResponse
     *
     * @param string             $workspace
     * @param string             $memoryStoreName
     * @param GetMemoriesRequest $request
     *
     * @return GetMemoriesResponse
     */
    public function getMemories($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a single memory.
     *
     * @param request - GetMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspace
     * @param string           $memoryStoreName
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemoryResponse
     */
    public function getMemoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemory',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory/' . Url::percentEncode($memoryId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a single memory.
     *
     * @param request - GetMemoryRequest
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspace
     * @param string           $memoryStoreName
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     *
     * @return GetMemoryResponse
     */
    public function getMemory($workspace, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Retrieve memory history.
     *
     * @param request - GetMemoryHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryHistoryResponse
     *
     * @param string                  $workspace
     * @param string                  $memoryStoreName
     * @param string                  $memoryId
     * @param GetMemoryHistoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMemoryHistoryResponse
     */
    public function getMemoryHistoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryHistory',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory/' . Url::percentEncode($memoryId) . '/history',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve memory history.
     *
     * @param request - GetMemoryHistoryRequest
     *
     * @returns GetMemoryHistoryResponse
     *
     * @param string                  $workspace
     * @param string                  $memoryStoreName
     * @param string                  $memoryId
     * @param GetMemoryHistoryRequest $request
     *
     * @return GetMemoryHistoryResponse
     */
    public function getMemoryHistory($workspace, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryHistoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Queries a memory store.
     *
     * @remarks
     * Typically used together with the QueryMetricMeta operation for querying metrics and the QueryMetricList/QueryMetricLast operation for querying monitoring data.
     * ## Request type
     * POST|GET.
     *
     * @param request - GetMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryStoreResponse
     *
     * @param string                $workspace
     * @param string                $memoryStoreName
     * @param GetMemoryStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMemoryStoreResponse
     */
    public function getMemoryStoreWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a memory store.
     *
     * @remarks
     * Typically used together with the QueryMetricMeta operation for querying metrics and the QueryMetricList/QueryMetricLast operation for querying monitoring data.
     * ## Request type
     * POST|GET.
     *
     * @param request - GetMemoryStoreRequest
     *
     * @returns GetMemoryStoreResponse
     *
     * @param string                $workspace
     * @param string                $memoryStoreName
     * @param GetMemoryStoreRequest $request
     *
     * @return GetMemoryStoreResponse
     */
    public function getMemoryStore($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryStoreWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Query pipeline.
     *
     * @param request - GetPipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineResponse
     *
     * @param string             $workspace
     * @param string             $pipelineName
     * @param GetPipelineRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($workspace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipeline',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/pipeline/' . Url::percentEncode($pipelineName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query pipeline.
     *
     * @param request - GetPipelineRequest
     *
     * @returns GetPipelineResponse
     *
     * @param string             $workspace
     * @param string             $pipelineName
     * @param GetPipelineRequest $request
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($workspace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($workspace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified Managed Service for Prometheus instance.
     *
     * @remarks
     * Retrieves the details of a Managed Service for Prometheus instance.
     *
     * @param request - GetPrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrometheusInstanceResponse
     *
     * @param string                       $prometheusInstanceId
     * @param GetPrometheusInstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetPrometheusInstanceResponse
     */
    public function getPrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified Managed Service for Prometheus instance.
     *
     * @remarks
     * Retrieves the details of a Managed Service for Prometheus instance.
     *
     * @param request - GetPrometheusInstanceRequest
     *
     * @returns GetPrometheusInstanceResponse
     *
     * @param string                       $prometheusInstanceId
     * @param GetPrometheusInstanceRequest $request
     *
     * @return GetPrometheusInstanceResponse
     */
    public function getPrometheusInstance($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the user settings for Prometheus.
     *
     * @param request - GetPrometheusUserSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrometheusUserSettingResponse
     *
     * @param GetPrometheusUserSettingRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPrometheusUserSettingResponse
     */
    public function getPrometheusUserSettingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrometheusUserSetting',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-user-setting',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPrometheusUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the user settings for Prometheus.
     *
     * @param request - GetPrometheusUserSettingRequest
     *
     * @returns GetPrometheusUserSettingResponse
     *
     * @param GetPrometheusUserSettingRequest $request
     *
     * @return GetPrometheusUserSettingResponse
     */
    public function getPrometheusUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPrometheusUserSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified Prometheus view instance.
     *
     * @remarks
     * Queries a specified Prometheus view instance.
     *
     * @param request - GetPrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrometheusViewResponse
     *
     * @param string                   $prometheusViewId
     * @param GetPrometheusViewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetPrometheusViewResponse
     */
    public function getPrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views/' . Url::percentEncode($prometheusViewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified Prometheus view instance.
     *
     * @remarks
     * Queries a specified Prometheus view instance.
     *
     * @param request - GetPrometheusViewRequest
     *
     * @returns GetPrometheusViewResponse
     *
     * @param string                   $prometheusViewId
     * @param GetPrometheusViewRequest $request
     *
     * @return GetPrometheusViewResponse
     */
    public function getPrometheusView($prometheusViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an Application Monitoring service.
     *
     * @param request - GetServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param string            $workspace
     * @param string            $serviceId
     * @param GetServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an Application Monitoring service.
     *
     * @param request - GetServiceRequest
     *
     * @returns GetServiceResponse
     *
     * @param string            $workspace
     * @param string            $serviceId
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves an application observability instance.
     *
     * @param request - GetServiceObservabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceObservabilityResponse
     *
     * @param string                         $workspace
     * @param string                         $type
     * @param GetServiceObservabilityRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetServiceObservabilityResponse
     */
    public function getServiceObservabilityWithOptions($workspace, $type, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceObservability',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service-observability/' . Url::percentEncode($type) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceObservabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an application observability instance.
     *
     * @param request - GetServiceObservabilityRequest
     *
     * @returns GetServiceObservabilityResponse
     *
     * @param string                         $workspace
     * @param string                         $type
     * @param GetServiceObservabilityRequest $request
     *
     * @return GetServiceObservabilityResponse
     */
    public function getServiceObservability($workspace, $type, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceObservabilityWithOptions($workspace, $type, $request, $headers, $runtime);
    }

    /**
     * Queries a service-linked entry.
     *
     * @remarks
     * Retrieves a service-linked entry.
     *
     * @param request - GetServiceRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceRecordResponse
     *
     * @param string                  $workspace
     * @param string                  $serviceId
     * @param GetServiceRecordRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetServiceRecordResponse
     */
    public function getServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordType) {
            @$query['recordType'] = $request->recordType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceRecord',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '/record',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a service-linked entry.
     *
     * @remarks
     * Retrieves a service-linked entry.
     *
     * @param request - GetServiceRecordRequest
     *
     * @returns GetServiceRecordResponse
     *
     * @param string                  $workspace
     * @param string                  $serviceId
     * @param GetServiceRecordRequest $request
     *
     * @return GetServiceRecordResponse
     */
    public function getServiceRecord($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the configuration of a Umodel.
     *
     * @remarks
     * Retrieves the configuration of a Umodel.
     *
     * @param request - GetUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelResponse
     *
     * @param string           $workspace
     * @param GetUmodelRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetUmodelResponse
     */
    public function getUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the configuration of a Umodel.
     *
     * @remarks
     * Retrieves the configuration of a Umodel.
     *
     * @param request - GetUmodelRequest
     *
     * @returns GetUmodelResponse
     *
     * @param string           $workspace
     * @param GetUmodelRequest $request
     *
     * @return GetUmodelResponse
     */
    public function getUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Retrieves the referenced common Umodel schema.
     *
     * @param request - GetUmodelCommonSchemaRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelCommonSchemaRefResponse
     *
     * @param string                          $workspace
     * @param GetUmodelCommonSchemaRefRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUmodelCommonSchemaRefResponse
     */
    public function getUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUmodelCommonSchemaRef',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/common-schema-ref',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelCommonSchemaRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the referenced common Umodel schema.
     *
     * @param request - GetUmodelCommonSchemaRefRequest
     *
     * @returns GetUmodelCommonSchemaRefResponse
     *
     * @param string                          $workspace
     * @param GetUmodelCommonSchemaRefRequest $request
     *
     * @return GetUmodelCommonSchemaRefResponse
     */
    public function getUmodelCommonSchemaRef($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Retrieves graph data associated with a Umodel.
     *
     * @remarks
     * This operation retrieves the graph data associated with a Umodel.
     *
     * @param request - GetUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelDataResponse
     *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetUmodelDataResponse
     */
    public function getUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/graph',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves graph data associated with a Umodel.
     *
     * @remarks
     * This operation retrieves the graph data associated with a Umodel.
     *
     * @param request - GetUmodelDataRequest
     *
     * @returns GetUmodelDataResponse
     *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request
     *
     * @return GetUmodelDataResponse
     */
    public function getUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Retrieves a workspace.
     *
     * @param request - GetWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param GetWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a workspace.
     *
     * @param request - GetWorkspaceRequest
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Lists the releases for an add-on.
     *
     * @remarks
     * This operation retrieves a list of integration configurations.
     *
     * @param request - ListAddonReleasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddonReleasesResponse
     *
     * @param string                   $policyId
     * @param ListAddonReleasesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAddonReleasesResponse
     */
    public function listAddonReleasesWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->parentAddonReleaseId) {
            @$query['parentAddonReleaseId'] = $request->parentAddonReleaseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddonReleases',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAddonReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the releases for an add-on.
     *
     * @remarks
     * This operation retrieves a list of integration configurations.
     *
     * @param request - ListAddonReleasesRequest
     *
     * @returns ListAddonReleasesResponse
     *
     * @param string                   $policyId
     * @param ListAddonReleasesRequest $request
     *
     * @return ListAddonReleasesResponse
     */
    public function listAddonReleases($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddonReleasesWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Lists the products in the new Integration Center by group.
     *
     * @remarks
     * Creates a site monitoring job.
     *
     * @param request - ListAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAddonsResponse
     */
    public function listAddonsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->regexp) {
            @$query['regexp'] = $request->regexp;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddons',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the products in the new Integration Center by group.
     *
     * @remarks
     * Creates a site monitoring job.
     *
     * @param request - ListAddonsRequest
     *
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     *
     * @return ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of aggregation task groups.
     *
     * @param tmpReq - ListAggTaskGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggTaskGroupsResponse
     *
     * @param string                   $instanceId
     * @param ListAggTaskGroupsRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAggTaskGroupsResponse
     */
    public function listAggTaskGroupsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAggTaskGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->filterAggTaskGroupIds) {
            @$query['filterAggTaskGroupIds'] = $request->filterAggTaskGroupIds;
        }

        if (null !== $request->filterAggTaskGroupNames) {
            @$query['filterAggTaskGroupNames'] = $request->filterAggTaskGroupNames;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetPrometheusId) {
            @$query['targetPrometheusId'] = $request->targetPrometheusId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggTaskGroups',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAggTaskGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of aggregation task groups.
     *
     * @param request - ListAggTaskGroupsRequest
     *
     * @returns ListAggTaskGroupsResponse
     *
     * @param string                   $instanceId
     * @param ListAggTaskGroupsRequest $request
     *
     * @return ListAggTaskGroupsResponse
     */
    public function listAggTaskGroups($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAggTaskGroupsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries alert action integrations.
     *
     * @param tmpReq - ListAlertActionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertActionsResponse
     *
     * @param ListAlertActionsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAlertActionsResponse
     */
    public function listAlertActionsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAlertActionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alertActionIds) {
            $request->alertActionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertActionIds, 'alertActionIds', 'json');
        }

        $query = [];
        if (null !== $request->alertActionIdsShrink) {
            @$query['alertActionIds'] = $request->alertActionIdsShrink;
        }

        if (null !== $request->alertActionName) {
            @$query['alertActionName'] = $request->alertActionName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertActions',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alertActions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert action integrations.
     *
     * @param request - ListAlertActionsRequest
     *
     * @returns ListAlertActionsResponse
     *
     * @param ListAlertActionsRequest $request
     *
     * @return ListAlertActionsResponse
     */
    public function listAlertActions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertActionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries alert chatbots.
     *
     * @param tmpReq - ListAlertRobotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertRobotsResponse
     *
     * @param ListAlertRobotsRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlertRobotsResponse
     */
    public function listAlertRobotsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAlertRobotsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->robotIds) {
            $request->robotIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->robotIds, 'robotIds', 'json');
        }

        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'types', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->robotIdsShrink) {
            @$query['robotIds'] = $request->robotIdsShrink;
        }

        if (null !== $request->typesShrink) {
            @$query['types'] = $request->typesShrink;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertRobots',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/robots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertRobotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert chatbots.
     *
     * @param request - ListAlertRobotsRequest
     *
     * @returns ListAlertRobotsResponse
     *
     * @param ListAlertRobotsRequest $request
     *
     * @return ListAlertRobotsResponse
     */
    public function listAlertRobots($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertRobotsWithOptions($request, $headers, $runtime);
    }

    /**
     * Query webhooks.
     *
     * @param tmpReq - ListAlertWebhooksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertWebhooksResponse
     *
     * @param ListAlertWebhooksRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAlertWebhooksResponse
     */
    public function listAlertWebhooksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAlertWebhooksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->webhookIds) {
            $request->webhookIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->webhookIds, 'webhookIds', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->webhookIdsShrink) {
            @$query['webhookIds'] = $request->webhookIdsShrink;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertWebhooks',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/webhooks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertWebhooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query webhooks.
     *
     * @param request - ListAlertWebhooksRequest
     *
     * @returns ListAlertWebhooksResponse
     *
     * @param ListAlertWebhooksRequest $request
     *
     * @return ListAlertWebhooksResponse
     */
    public function listAlertWebhooks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertWebhooksWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists business traces.
     *
     * @param request - ListBizTracesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBizTracesResponse
     *
     * @param ListBizTracesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListBizTracesResponse
     */
    public function listBizTracesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBizTraces',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTraces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBizTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists business traces.
     *
     * @param request - ListBizTracesRequest
     *
     * @returns ListBizTracesResponse
     *
     * @param ListBizTracesRequest $request
     *
     * @return ListBizTracesResponse
     */
    public function listBizTraces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBizTracesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries contact groups.
     *
     * @param tmpReq - ListContactGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContactGroupsResponse
     *
     * @param ListContactGroupsRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListContactGroupsResponse
     */
    public function listContactGroupsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListContactGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactGroupIds) {
            $request->contactGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactGroupIds, 'contactGroupIds', 'json');
        }

        $query = [];
        if (null !== $request->contactGroupIdsShrink) {
            @$query['contactGroupIds'] = $request->contactGroupIdsShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContactGroups',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/contactGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListContactGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries contact groups.
     *
     * @param request - ListContactGroupsRequest
     *
     * @returns ListContactGroupsResponse
     *
     * @param ListContactGroupsRequest $request
     *
     * @return ListContactGroupsResponse
     */
    public function listContactGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContactGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Query contacts.
     *
     * @param tmpReq - ListContactsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContactsResponse
     *
     * @param ListContactsRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListContactsResponse
     */
    public function listContactsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListContactsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactIds) {
            $request->contactIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactIds, 'contactIds', 'json');
        }

        $query = [];
        if (null !== $request->contactIdsShrink) {
            @$query['contactIds'] = $request->contactIdsShrink;
        }

        if (null !== $request->email) {
            @$query['email'] = $request->email;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->phone) {
            @$query['phone'] = $request->phone;
        }

        if (null !== $request->queryUngroupedContacts) {
            @$query['queryUngroupedContacts'] = $request->queryUngroupedContacts;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContacts',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/contact',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query contacts.
     *
     * @param request - ListContactsRequest
     *
     * @returns ListContactsResponse
     *
     * @param ListContactsRequest $request
     *
     * @return ListContactsResponse
     */
    public function listContacts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContactsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists API keys.
     *
     * @param request - ListContextStoreAPIKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextStoreAPIKeysResponse
     *
     * @param string                         $workspace
     * @param string                         $contextStoreName
     * @param ListContextStoreAPIKeysRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListContextStoreAPIKeysResponse
     */
    public function listContextStoreAPIKeysWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextStoreAPIKeys',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListContextStoreAPIKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists API keys.
     *
     * @param request - ListContextStoreAPIKeysRequest
     *
     * @returns ListContextStoreAPIKeysResponse
     *
     * @param string                         $workspace
     * @param string                         $contextStoreName
     * @param ListContextStoreAPIKeysRequest $request
     *
     * @return ListContextStoreAPIKeysResponse
     */
    public function listContextStoreAPIKeys($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContextStoreAPIKeysWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of context stores.
     *
     * @param request - ListContextStoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextStoresResponse
     *
     * @param string                   $workspace
     * @param ListContextStoresRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListContextStoresResponse
     */
    public function listContextStoresWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contextStoreName) {
            @$query['contextStoreName'] = $request->contextStoreName;
        }

        if (null !== $request->contextType) {
            @$query['contextType'] = $request->contextType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextStores',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListContextStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of context stores.
     *
     * @param request - ListContextStoresRequest
     *
     * @returns ListContextStoresResponse
     *
     * @param string                   $workspace
     * @param ListContextStoresRequest $request
     *
     * @return ListContextStoresResponse
     */
    public function listContextStores($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContextStoresWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of datasets in a specified workspace.
     *
     * @param request - ListDatasetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasetsResponse
     *
     * @param string              $workspace
     * @param ListDatasetsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['datasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatasets',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/dataset',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of datasets in a specified workspace.
     *
     * @param request - ListDatasetsRequest
     *
     * @returns ListDatasetsResponse
     *
     * @param string              $workspace
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetsWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of data delivery tasks.
     *
     * @remarks
     * Deletes a specified site monitoring task.
     *
     * @param tmpReq - ListDeliveryTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeliveryTasksResponse
     *
     * @param ListDeliveryTasksRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListDeliveryTasksResponse
     */
    public function listDeliveryTasksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDeliveryTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->keyWords) {
            @$query['keyWords'] = $request->keyWords;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeliveryTasks',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/delivery-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of data delivery tasks.
     *
     * @remarks
     * Deletes a specified site monitoring task.
     *
     * @param request - ListDeliveryTasksRequest
     *
     * @returns ListDeliveryTasksResponse
     *
     * @param ListDeliveryTasksRequest $request
     *
     * @return ListDeliveryTasksResponse
     */
    public function listDeliveryTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeliveryTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of access center policies.
     *
     * @remarks
     * Queries the integration list.
     *
     * @param tmpReq - ListIntegrationPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPoliciesResponse
     *
     * @param ListIntegrationPoliciesRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIntegrationPoliciesResponse
     */
    public function listIntegrationPoliciesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListIntegrationPoliciesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->bindResourceId) {
            @$query['bindResourceId'] = $request->bindResourceId;
        }

        if (null !== $request->entityGroupIds) {
            @$query['entityGroupIds'] = $request->entityGroupIds;
        }

        if (null !== $request->filterRegionIds) {
            @$query['filterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->policyId) {
            @$query['policyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$query['policyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['policyType'] = $request->policyType;
        }

        if (null !== $request->prometheusInstanceId) {
            @$query['prometheusInstanceId'] = $request->prometheusInstanceId;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicies',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of access center policies.
     *
     * @remarks
     * Queries the integration list.
     *
     * @param request - ListIntegrationPoliciesRequest
     *
     * @returns ListIntegrationPoliciesResponse
     *
     * @param ListIntegrationPoliciesRequest $request
     *
     * @return ListIntegrationPoliciesResponse
     */
    public function listIntegrationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the add-ons that are installed for a specified policy.
     *
     * @remarks
     * Lists the add-ons that are installed for a specified policy.
     *
     * @param request - ListIntegrationPolicyAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyAddonsResponse
     *
     * @param string                             $policyId
     * @param ListIntegrationPolicyAddonsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIntegrationPolicyAddonsResponse
     */
    public function listIntegrationPolicyAddonsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyAddons',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addons',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the add-ons that are installed for a specified policy.
     *
     * @remarks
     * Lists the add-ons that are installed for a specified policy.
     *
     * @param request - ListIntegrationPolicyAddonsRequest
     *
     * @returns ListIntegrationPolicyAddonsResponse
     *
     * @param string                             $policyId
     * @param ListIntegrationPolicyAddonsRequest $request
     *
     * @return ListIntegrationPolicyAddonsResponse
     */
    public function listIntegrationPolicyAddons($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyAddonsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Returns information about collectors for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyCollectorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyCollectorsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyCollectorsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIntegrationPolicyCollectorsResponse
     */
    public function listIntegrationPolicyCollectorsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->collectorType) {
            @$query['collectorType'] = $request->collectorType;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyCollectors',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/collectors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyCollectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns information about collectors for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyCollectorsRequest
     *
     * @returns ListIntegrationPolicyCollectorsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyCollectorsRequest $request
     *
     * @return ListIntegrationPolicyCollectorsResponse
     */
    public function listIntegrationPolicyCollectors($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyCollectorsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Lists the custom service discovery rules for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyCustomScrapeJobRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyCustomScrapeJobRulesResponse
     *
     * @param string                                           $policyId
     * @param ListIntegrationPolicyCustomScrapeJobRulesRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListIntegrationPolicyCustomScrapeJobRulesResponse
     */
    public function listIntegrationPolicyCustomScrapeJobRulesWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->encryptYaml) {
            @$query['encryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyCustomScrapeJobRules',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/custom-scrape-job-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyCustomScrapeJobRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the custom service discovery rules for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyCustomScrapeJobRulesRequest
     *
     * @returns ListIntegrationPolicyCustomScrapeJobRulesResponse
     *
     * @param string                                           $policyId
     * @param ListIntegrationPolicyCustomScrapeJobRulesRequest $request
     *
     * @return ListIntegrationPolicyCustomScrapeJobRulesResponse
     */
    public function listIntegrationPolicyCustomScrapeJobRules($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyCustomScrapeJobRulesWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of integration policy dashboards.
     *
     * @remarks
     * This topic provides an example of how to query a list of integration policy dashboards.
     *
     * @param request - ListIntegrationPolicyDashboardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyDashboardsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyDashboardsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIntegrationPolicyDashboardsResponse
     */
    public function listIntegrationPolicyDashboardsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyDashboards',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of integration policy dashboards.
     *
     * @remarks
     * This topic provides an example of how to query a list of integration policy dashboards.
     *
     * @param request - ListIntegrationPolicyDashboardsRequest
     *
     * @returns ListIntegrationPolicyDashboardsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyDashboardsRequest $request
     *
     * @return ListIntegrationPolicyDashboardsResponse
     */
    public function listIntegrationPolicyDashboards($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyDashboardsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Lists the PodMonitor resources for an Integration Center policy.
     *
     * @remarks
     * This topic provides an example of how to list the PodMonitor resources for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyPodMonitorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyPodMonitorsResponse
     *
     * @param string                                  $policyId
     * @param ListIntegrationPolicyPodMonitorsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListIntegrationPolicyPodMonitorsResponse
     */
    public function listIntegrationPolicyPodMonitorsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->encryptYaml) {
            @$query['encryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyPodMonitors',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/pod-monitors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyPodMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the PodMonitor resources for an Integration Center policy.
     *
     * @remarks
     * This topic provides an example of how to list the PodMonitor resources for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyPodMonitorsRequest
     *
     * @returns ListIntegrationPolicyPodMonitorsResponse
     *
     * @param string                                  $policyId
     * @param ListIntegrationPolicyPodMonitorsRequest $request
     *
     * @return ListIntegrationPolicyPodMonitorsResponse
     */
    public function listIntegrationPolicyPodMonitors($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyPodMonitorsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the ServiceMonitor information for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyServiceMonitorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyServiceMonitorsResponse
     *
     * @param string                                      $policyId
     * @param ListIntegrationPolicyServiceMonitorsRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListIntegrationPolicyServiceMonitorsResponse
     */
    public function listIntegrationPolicyServiceMonitorsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->encryptYaml) {
            @$query['encryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyServiceMonitors',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/service-monitors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyServiceMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the ServiceMonitor information for an Integration Center policy.
     *
     * @param request - ListIntegrationPolicyServiceMonitorsRequest
     *
     * @returns ListIntegrationPolicyServiceMonitorsResponse
     *
     * @param string                                      $policyId
     * @param ListIntegrationPolicyServiceMonitorsRequest $request
     *
     * @return ListIntegrationPolicyServiceMonitorsResponse
     */
    public function listIntegrationPolicyServiceMonitors($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyServiceMonitorsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Lists the storage requirements for an Integration Center policy.
     *
     * @remarks
     * When a policy is active, alert notifications are not sent for alerts that occur in the application group.
     * This topic provides an example of creating a policy named `PauseNotify`. This policy pauses alert notifications for application group `7301****` from `1622949300000` to `1623208500000` (from `2021-06-06 11:15:00` to `2021-06-09 11:15:00` UTC+8).
     *
     * @param request - ListIntegrationPolicyStorageRequirementsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyStorageRequirementsResponse
     *
     * @param string                                          $policyId
     * @param ListIntegrationPolicyStorageRequirementsRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListIntegrationPolicyStorageRequirementsResponse
     */
    public function listIntegrationPolicyStorageRequirementsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->storageType) {
            @$query['storageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyStorageRequirements',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/storage-requirements',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyStorageRequirementsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the storage requirements for an Integration Center policy.
     *
     * @remarks
     * When a policy is active, alert notifications are not sent for alerts that occur in the application group.
     * This topic provides an example of creating a policy named `PauseNotify`. This policy pauses alert notifications for application group `7301****` from `1622949300000` to `1623208500000` (from `2021-06-06 11:15:00` to `2021-06-09 11:15:00` UTC+8).
     *
     * @param request - ListIntegrationPolicyStorageRequirementsRequest
     *
     * @returns ListIntegrationPolicyStorageRequirementsResponse
     *
     * @param string                                          $policyId
     * @param ListIntegrationPolicyStorageRequirementsRequest $request
     *
     * @return ListIntegrationPolicyStorageRequirementsResponse
     */
    public function listIntegrationPolicyStorageRequirements($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyStorageRequirementsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of memory stores.
     *
     * @param request - ListMemoryStoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryStoresResponse
     *
     * @param string                  $workspace
     * @param ListMemoryStoresRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMemoryStoresResponse
     */
    public function listMemoryStoresWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->memoryStoreName) {
            @$query['memoryStoreName'] = $request->memoryStoreName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemoryStores',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of memory stores.
     *
     * @param request - ListMemoryStoresRequest
     *
     * @returns ListMemoryStoresResponse
     *
     * @param string                  $workspace
     * @param ListMemoryStoresRequest $request
     *
     * @return ListMemoryStoresResponse
     */
    public function listMemoryStores($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryStoresWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Lists pipelines.
     *
     * @param request - ListPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelinesResponse
     *
     * @param string               $workspace
     * @param ListPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pipelineName) {
            @$query['pipelineName'] = $request->pipelineName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelines',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/pipeline',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists pipelines.
     *
     * @param request - ListPipelinesRequest
     *
     * @returns ListPipelinesResponse
     *
     * @param string               $workspace
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of dashboards for a Prometheus instance.
     *
     * @remarks
     * Retrieves a list of dashboards for a Prometheus instance.
     *
     * @param request - ListPrometheusDashboardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusDashboardsResponse
     *
     * @param string                          $prometheusInstanceId
     * @param ListPrometheusDashboardsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusDashboardsResponse
     */
    public function listPrometheusDashboardsWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusDashboards',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of dashboards for a Prometheus instance.
     *
     * @remarks
     * Retrieves a list of dashboards for a Prometheus instance.
     *
     * @param request - ListPrometheusDashboardsRequest
     *
     * @returns ListPrometheusDashboardsResponse
     *
     * @param string                          $prometheusInstanceId
     * @param ListPrometheusDashboardsRequest $request
     *
     * @return ListPrometheusDashboardsResponse
     */
    public function listPrometheusDashboards($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusDashboardsWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of Managed Service for Prometheus instances.
     *
     * @remarks
     * Retrieves a list of Managed Service for Prometheus instances.
     *
     * @param tmpReq - ListPrometheusInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusInstancesResponse
     *
     * @param ListPrometheusInstancesRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPrometheusInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->filterRegionIds) {
            @$query['filterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prometheusInstanceIds) {
            @$query['prometheusInstanceIds'] = $request->prometheusInstanceIds;
        }

        if (null !== $request->prometheusInstanceName) {
            @$query['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusInstances',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of Managed Service for Prometheus instances.
     *
     * @remarks
     * Retrieves a list of Managed Service for Prometheus instances.
     *
     * @param request - ListPrometheusInstancesRequest
     *
     * @returns ListPrometheusInstancesResponse
     *
     * @param ListPrometheusInstancesRequest $request
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of Prometheus view instances.
     *
     * @remarks
     * Queries the list of Prometheus view instances.
     *
     * @param tmpReq - ListPrometheusViewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusViewsResponse
     *
     * @param ListPrometheusViewsRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPrometheusViewsResponse
     */
    public function listPrometheusViewsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPrometheusViewsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->filterRegionIds) {
            @$query['filterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prometheusViewIds) {
            @$query['prometheusViewIds'] = $request->prometheusViewIds;
        }

        if (null !== $request->prometheusViewName) {
            @$query['prometheusViewName'] = $request->prometheusViewName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusViews',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Prometheus view instances.
     *
     * @remarks
     * Queries the list of Prometheus view instances.
     *
     * @param request - ListPrometheusViewsRequest
     *
     * @returns ListPrometheusViewsResponse
     *
     * @param ListPrometheusViewsRequest $request
     *
     * @return ListPrometheusViewsResponse
     */
    public function listPrometheusViews($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusViewsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves Prometheus virtual instances.
     *
     * @param request - ListPrometheusVirtualInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusVirtualInstancesResponse
     *
     * @param ListPrometheusVirtualInstancesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListPrometheusVirtualInstancesResponse
     */
    public function listPrometheusVirtualInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusVirtualInstances',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/virtual-instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusVirtualInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves Prometheus virtual instances.
     *
     * @param request - ListPrometheusVirtualInstancesRequest
     *
     * @returns ListPrometheusVirtualInstancesResponse
     *
     * @param ListPrometheusVirtualInstancesRequest $request
     *
     * @return ListPrometheusVirtualInstancesResponse
     */
    public function listPrometheusVirtualInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusVirtualInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists service-linked entries.
     *
     * @remarks
     * Queries a paginated list of service-linked entries.
     *
     * @param request - ListServiceRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceRecordsResponse
     *
     * @param string                    $workspace
     * @param ListServiceRecordsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListServiceRecordsResponse
     */
    public function listServiceRecordsWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->recordType) {
            @$query['recordType'] = $request->recordType;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceRecords',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service-records',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists service-linked entries.
     *
     * @remarks
     * Queries a paginated list of service-linked entries.
     *
     * @param request - ListServiceRecordsRequest
     *
     * @returns ListServiceRecordsResponse
     *
     * @param string                    $workspace
     * @param ListServiceRecordsRequest $request
     *
     * @return ListServiceRecordsResponse
     */
    public function listServiceRecords($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceRecordsWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Queries a list of application observability services.
     *
     * @param tmpReq - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspace
     * @param ListServicesRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($workspace, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListServicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of application observability services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspace
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Queries the tags attached to resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-03-30',
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
     * Queries the tags attached to resources.
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
     * Retrieves a list of workspaces.
     *
     * @param tmpReq - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workspaceNameList) {
            $request->workspaceNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workspaceNameList, 'workspaceNameList', 'simple');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        if (null !== $request->workspaceNameListShrink) {
            @$query['workspaceNameList'] = $request->workspaceNameListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of workspaces.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * Manages alert rules.
     *
     * @param tmpReq - ManageAlertRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManageAlertRulesResponse
     *
     * @param ManageAlertRulesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ManageAlertRulesResponse
     */
    public function manageAlertRulesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ManageAlertRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ManageAlertRules',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/manageAlertRules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManageAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manages alert rules.
     *
     * @param request - ManageAlertRulesRequest
     *
     * @returns ManageAlertRulesResponse
     *
     * @param ManageAlertRulesRequest $request
     *
     * @return ManageAlertRulesResponse
     */
    public function manageAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->manageAlertRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Activates CloudMonitor services, including Hybrid Cloud Monitoring, Managed Service for Prometheus, and Simple Log Service (SLS).
     *
     * @param request - OpenCmsServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenCmsServiceResponse
     *
     * @param OpenCmsServiceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return OpenCmsServiceResponse
     */
    public function openCmsServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'OpenCmsService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cmsservice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenCmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates CloudMonitor services, including Hybrid Cloud Monitoring, Managed Service for Prometheus, and Simple Log Service (SLS).
     *
     * @param request - OpenCmsServiceRequest
     *
     * @returns OpenCmsServiceResponse
     *
     * @param OpenCmsServiceRequest $request
     *
     * @return OpenCmsServiceResponse
     */
    public function openCmsService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openCmsServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a workspace.
     *
     * @param request - PutWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PutWorkspaceResponse
     */
    public function putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->slsProject) {
            @$body['slsProject'] = $request->slsProject;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PutWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workspace.
     *
     * @param request - PutWorkspaceRequest
     *
     * @returns PutWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request
     *
     * @return PutWorkspaceResponse
     */
    public function putWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Queries alert rules.
     *
     * @remarks
     * This topic provides an example on how to query a list of alert templates. The response shows that the alert template list contains two alert templates: `ECS_Template1` and `ECS_Template2`.
     *
     * @param tmpReq - QueryAlertRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAlertRulesResponse
     *
     * @param QueryAlertRulesRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAlertRulesResponse
     */
    public function queryAlertRulesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryAlertRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAlertRules',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/queryAlertRules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert rules.
     *
     * @remarks
     * This topic provides an example on how to query a list of alert templates. The response shows that the alert template list contains two alert templates: `ECS_Template1` and `ECS_Template2`.
     *
     * @param request - QueryAlertRulesRequest
     *
     * @returns QueryAlertRulesResponse
     *
     * @param QueryAlertRulesRequest $request
     *
     * @return QueryAlertRulesResponse
     */
    public function queryAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAlertRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Search context.
     *
     * @param request - SearchContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchContextResponse
     *
     * @param string               $workspace
     * @param string               $contextStoreName
     * @param SearchContextRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchContextResponse
     */
    public function searchContextWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filter) {
            @$body['filter'] = $request->filter;
        }

        if (null !== $request->formatted) {
            @$body['formatted'] = $request->formatted;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->retrievalOption) {
            @$body['retrievalOption'] = $request->retrievalOption;
        }

        if (null !== $request->threshold) {
            @$body['threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchContext',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Search context.
     *
     * @param request - SearchContextRequest
     *
     * @returns SearchContextResponse
     *
     * @param string               $workspace
     * @param string               $contextStoreName
     * @param SearchContextRequest $request
     *
     * @return SearchContextResponse
     */
    public function searchContext($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchContextWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Searches for memories based on query conditions and filters.
     *
     * @remarks
     * This topic provides an example on how to create a threshold alert rule for the cpu_total metric of the Elastic Computing Service `acs_ecs_dashboard` instance `i-uf6j91r34rnwawoo****`. The alert contact group of the alert rule is `ECS_Group`, the alert rule name is `test123`, the alert rule ID is `a151cd6023eacee2f0978e03863cc1697c89508****`, the statistical method for the Critical level is `Average`, the comparison operator for the Critical level is `GreaterThanOrEqualToThreshold`, the threshold for the Critical level is `90`, and the retry count for the Critical level is `3`.
     * > 2024-08-15: Statistics validation is added. Only the Statistics value that corresponds to the metric can be specified. For information about how to obtain the value of this parameter, see [Cloud service monitoring metrics](https://www.alibabacloud.com/help/en/cms/support/appendix-1-metrics).
     *
     * @param request - SearchMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMemoriesResponse
     *
     * @param string                $workspace
     * @param string                $memoryStoreName
     * @param SearchMemoriesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SearchMemoriesResponse
     */
    public function searchMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->filters) {
            @$body['filters'] = $request->filters;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->rerank) {
            @$body['rerank'] = $request->rerank;
        }

        if (null !== $request->retrievalOption) {
            @$body['retrievalOption'] = $request->retrievalOption;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->searchType) {
            @$body['searchType'] = $request->searchType;
        }

        if (null !== $request->threshold) {
            @$body['threshold'] = $request->threshold;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchMemories',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for memories based on query conditions and filters.
     *
     * @remarks
     * This topic provides an example on how to create a threshold alert rule for the cpu_total metric of the Elastic Computing Service `acs_ecs_dashboard` instance `i-uf6j91r34rnwawoo****`. The alert contact group of the alert rule is `ECS_Group`, the alert rule name is `test123`, the alert rule ID is `a151cd6023eacee2f0978e03863cc1697c89508****`, the statistical method for the Critical level is `Average`, the comparison operator for the Critical level is `GreaterThanOrEqualToThreshold`, the threshold for the Critical level is `90`, and the retry count for the Critical level is `3`.
     * > 2024-08-15: Statistics validation is added. Only the Statistics value that corresponds to the metric can be specified. For information about how to obtain the value of this parameter, see [Cloud service monitoring metrics](https://www.alibabacloud.com/help/en/cms/support/appendix-1-metrics).
     *
     * @param request - SearchMemoriesRequest
     *
     * @returns SearchMemoriesResponse
     *
     * @param string                $workspace
     * @param string                $memoryStoreName
     * @param SearchMemoriesRequest $request
     *
     * @return SearchMemoriesResponse
     */
    public function searchMemories($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchMemoriesWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Adds tags to one or more resources.
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
        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to one or more resources.
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
     * Deletes a tag.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'tagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['tagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2024-03-30',
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
     * Deletes a tag.
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
     * Upgrades an add-on component.
     *
     * @param request - UpdateAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAddonReleaseResponse
     *
     * @param string                    $releaseName
     * @param string                    $policyId
     * @param UpdateAddonReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAddonReleaseResponse
     */
    public function updateAddonReleaseWithOptions($releaseName, $policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addonVersion) {
            @$body['addonVersion'] = $request->addonVersion;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->entityRules) {
            @$body['entityRules'] = $request->entityRules;
        }

        if (null !== $request->values) {
            @$body['values'] = $request->values;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases/' . Url::percentEncode($releaseName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades an add-on component.
     *
     * @param request - UpdateAddonReleaseRequest
     *
     * @returns UpdateAddonReleaseResponse
     *
     * @param string                    $releaseName
     * @param string                    $policyId
     * @param UpdateAddonReleaseRequest $request
     *
     * @return UpdateAddonReleaseResponse
     */
    public function updateAddonRelease($releaseName, $policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAddonReleaseWithOptions($releaseName, $policyId, $request, $headers, $runtime);
    }

    /**
     * Updates an aggregation task group.
     *
     * @param request - UpdateAggTaskGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param string                    $groupId
     * @param UpdateAggTaskGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAggTaskGroupResponse
     */
    public function updateAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggTaskGroupConfig) {
            @$body['aggTaskGroupConfig'] = $request->aggTaskGroupConfig;
        }

        if (null !== $request->aggTaskGroupConfigType) {
            @$body['aggTaskGroupConfigType'] = $request->aggTaskGroupConfigType;
        }

        if (null !== $request->aggTaskGroupName) {
            @$body['aggTaskGroupName'] = $request->aggTaskGroupName;
        }

        if (null !== $request->cronExpr) {
            @$body['cronExpr'] = $request->cronExpr;
        }

        if (null !== $request->delay) {
            @$body['delay'] = $request->delay;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->fromTime) {
            @$body['fromTime'] = $request->fromTime;
        }

        if (null !== $request->maxRetries) {
            @$body['maxRetries'] = $request->maxRetries;
        }

        if (null !== $request->maxRunTimeInSeconds) {
            @$body['maxRunTimeInSeconds'] = $request->maxRunTimeInSeconds;
        }

        if (null !== $request->precheckString) {
            @$body['precheckString'] = $request->precheckString;
        }

        if (null !== $request->scheduleMode) {
            @$body['scheduleMode'] = $request->scheduleMode;
        }

        if (null !== $request->scheduleTimeExpr) {
            @$body['scheduleTimeExpr'] = $request->scheduleTimeExpr;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->targetPrometheusId) {
            @$body['targetPrometheusId'] = $request->targetPrometheusId;
        }

        if (null !== $request->toTime) {
            @$body['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an aggregation task group.
     *
     * @param request - UpdateAggTaskGroupRequest
     *
     * @returns UpdateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param string                    $groupId
     * @param UpdateAggTaskGroupRequest $request
     *
     * @return UpdateAggTaskGroupResponse
     */
    public function updateAggTaskGroup($instanceId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Updates the status of an aggregation task group.
     *
     * @param request - UpdateAggTaskGroupStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggTaskGroupStatusResponse
     *
     * @param string                          $instanceId
     * @param string                          $groupId
     * @param UpdateAggTaskGroupStatusRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAggTaskGroupStatusResponse
     */
    public function updateAggTaskGroupStatusWithOptions($instanceId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggTaskGroupStatus',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '/status',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAggTaskGroupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of an aggregation task group.
     *
     * @param request - UpdateAggTaskGroupStatusRequest
     *
     * @returns UpdateAggTaskGroupStatusResponse
     *
     * @param string                          $instanceId
     * @param string                          $groupId
     * @param UpdateAggTaskGroupStatusRequest $request
     *
     * @return UpdateAggTaskGroupStatusResponse
     */
    public function updateAggTaskGroupStatus($instanceId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAggTaskGroupStatusWithOptions($instanceId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Updates a webhook.
     *
     * @param request - UpdateAlertWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlertWebhookResponse
     *
     * @param string                    $webhookId
     * @param UpdateAlertWebhookRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAlertWebhookResponse
     */
    public function updateAlertWebhookWithOptions($webhookId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->headers) {
            @$body['headers'] = $request->headers;
        }

        if (null !== $request->lang) {
            @$body['lang'] = $request->lang;
        }

        if (null !== $request->method) {
            @$body['method'] = $request->method;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlertWebhook',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/webhook/' . Url::percentEncode($webhookId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAlertWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a webhook.
     *
     * @param request - UpdateAlertWebhookRequest
     *
     * @returns UpdateAlertWebhookResponse
     *
     * @param string                    $webhookId
     * @param UpdateAlertWebhookRequest $request
     *
     * @return UpdateAlertWebhookResponse
     */
    public function updateAlertWebhook($webhookId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertWebhookWithOptions($webhookId, $request, $headers, $runtime);
    }

    /**
     * Modifies a business trace.
     *
     * @param request - UpdateBizTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBizTraceResponse
     *
     * @param string                $bizTraceId
     * @param UpdateBizTraceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBizTraceResponse
     */
    public function updateBizTraceWithOptions($bizTraceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->advancedConfig) {
            @$body['advancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->bizTraceName) {
            @$body['bizTraceName'] = $request->bizTraceName;
        }

        if (null !== $request->ruleConfig) {
            @$body['ruleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace/' . Url::percentEncode($bizTraceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a business trace.
     *
     * @param request - UpdateBizTraceRequest
     *
     * @returns UpdateBizTraceResponse
     *
     * @param string                $bizTraceId
     * @param UpdateBizTraceRequest $request
     *
     * @return UpdateBizTraceResponse
     */
    public function updateBizTrace($bizTraceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBizTraceWithOptions($bizTraceId, $request, $headers, $runtime);
    }

    /**
     * Updates a context.
     *
     * @param request - UpdateContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextResponse
     *
     * @param string               $workspace
     * @param string               $contextStoreName
     * @param string               $contextId
     * @param UpdateContextRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateContextResponse
     */
    public function updateContextWithOptions($workspace, $contextStoreName, $contextId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->experience) {
            @$body['experience'] = $request->experience;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->payload) {
            @$body['payload'] = $request->payload;
        }

        if (null !== $request->triggerCondition) {
            @$body['triggerCondition'] = $request->triggerCondition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateContext',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context/' . Url::percentEncode($contextId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a context.
     *
     * @param request - UpdateContextRequest
     *
     * @returns UpdateContextResponse
     *
     * @param string               $workspace
     * @param string               $contextStoreName
     * @param string               $contextId
     * @param UpdateContextRequest $request
     *
     * @return UpdateContextResponse
     */
    public function updateContext($workspace, $contextStoreName, $contextId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContextWithOptions($workspace, $contextStoreName, $contextId, $request, $headers, $runtime);
    }

    /**
     * Modifies the configuration of a context store.
     *
     * @remarks
     * Only Alibaba Cloud accounts that have activated Network Analysis and Monitoring can create one-time detection tasks.
     * This topic provides an example of how to create a one-time detection task. The detection task is named `task1`, the detection address is `http://www.aliyun.com`, the detection type is `HTTP`, and the number of detection points is `1`.
     *
     * @param request - UpdateContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextStoreResponse
     *
     * @param string                    $workspace
     * @param string                    $contextStoreName
     * @param UpdateContextStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateContextStoreResponse
     */
    public function updateContextStoreWithOptions($workspace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->contextType) {
            @$body['contextType'] = $request->contextType;
        }

        if (null !== $request->dataset) {
            @$body['dataset'] = $request->dataset;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateContextStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a context store.
     *
     * @remarks
     * Only Alibaba Cloud accounts that have activated Network Analysis and Monitoring can create one-time detection tasks.
     * This topic provides an example of how to create a one-time detection task. The detection task is named `task1`, the detection address is `http://www.aliyun.com`, the detection type is `HTTP`, and the number of detection points is `1`.
     *
     * @param request - UpdateContextStoreRequest
     *
     * @returns UpdateContextStoreResponse
     *
     * @param string                    $workspace
     * @param string                    $contextStoreName
     * @param UpdateContextStoreRequest $request
     *
     * @return UpdateContextStoreResponse
     */
    public function updateContextStore($workspace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContextStoreWithOptions($workspace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * Updates a dataset.
     *
     * @param request - UpdateDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDatasetResponse
     *
     * @param string               $workspace
     * @param string               $datasetName
     * @param UpdateDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($workspace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataset',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/dataset/' . Url::percentEncode($datasetName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a dataset.
     *
     * @param request - UpdateDatasetRequest
     *
     * @returns UpdateDatasetResponse
     *
     * @param string               $workspace
     * @param string               $datasetName
     * @param UpdateDatasetRequest $request
     *
     * @return UpdateDatasetResponse
     */
    public function updateDataset($workspace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetWithOptions($workspace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * Updates a data delivery task. The update uses patch semantics: fields that are not specified remain unchanged.
     *
     * @remarks
     * Deletes a specified site monitoring task.
     *
     * @param request - UpdateDeliveryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeliveryTaskResponse
     *
     * @param string                    $taskId
     * @param UpdateDeliveryTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDeliveryTaskResponse
     */
    public function updateDeliveryTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->externalLabels) {
            @$body['externalLabels'] = $request->externalLabels;
        }

        if (null !== $request->labelFilters) {
            @$body['labelFilters'] = $request->labelFilters;
        }

        if (null !== $request->labelFiltersType) {
            @$body['labelFiltersType'] = $request->labelFiltersType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sinkList) {
            @$body['sinkList'] = $request->sinkList;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        if (null !== $request->taskName) {
            @$body['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeliveryTask',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/delivery-task/' . Url::percentEncode($taskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a data delivery task. The update uses patch semantics: fields that are not specified remain unchanged.
     *
     * @remarks
     * Deletes a specified site monitoring task.
     *
     * @param request - UpdateDeliveryTaskRequest
     *
     * @returns UpdateDeliveryTaskResponse
     *
     * @param string                    $taskId
     * @param UpdateDeliveryTaskRequest $request
     *
     * @return UpdateDeliveryTaskResponse
     */
    public function updateDeliveryTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeliveryTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Updates the specified policy.
     *
     * @param request - UpdateIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIntegrationPolicyResponse
     *
     * @param string                         $integrationPolicyId
     * @param UpdateIntegrationPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateIntegrationPolicyResponse
     */
    public function updateIntegrationPolicyWithOptions($integrationPolicyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->feePackage) {
            @$body['feePackage'] = $request->feePackage;
        }

        if (null !== $request->policyName) {
            @$body['policyName'] = $request->policyName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($integrationPolicyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the specified policy.
     *
     * @param request - UpdateIntegrationPolicyRequest
     *
     * @returns UpdateIntegrationPolicyResponse
     *
     * @param string                         $integrationPolicyId
     * @param UpdateIntegrationPolicyRequest $request
     *
     * @return UpdateIntegrationPolicyResponse
     */
    public function updateIntegrationPolicy($integrationPolicyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIntegrationPolicyWithOptions($integrationPolicyId, $request, $headers, $runtime);
    }

    /**
     * Updates a specific Memory.
     *
     * @param request - UpdateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspace
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '/memory/' . Url::percentEncode($memoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a specific Memory.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspace
     * @param string              $memoryStoreName
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($workspace, $memoryStoreName, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryWithOptions($workspace, $memoryStoreName, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Modify a memory store.
     *
     * @param request - UpdateMemoryStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryStoreResponse
     *
     * @param string                   $workspace
     * @param string                   $memoryStoreName
     * @param UpdateMemoryStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMemoryStoreResponse
     */
    public function updateMemoryStoreWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customExtractionStrategies) {
            @$body['customExtractionStrategies'] = $request->customExtractionStrategies;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->extractionStrategies) {
            @$body['extractionStrategies'] = $request->extractionStrategies;
        }

        if (null !== $request->shortTermTtl) {
            @$body['shortTermTtl'] = $request->shortTermTtl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemoryStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/memorystore/' . Url::percentEncode($memoryStoreName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify a memory store.
     *
     * @param request - UpdateMemoryStoreRequest
     *
     * @returns UpdateMemoryStoreResponse
     *
     * @param string                   $workspace
     * @param string                   $memoryStoreName
     * @param UpdateMemoryStoreRequest $request
     *
     * @return UpdateMemoryStoreResponse
     */
    public function updateMemoryStore($workspace, $memoryStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryStoreWithOptions($workspace, $memoryStoreName, $request, $headers, $runtime);
    }

    /**
     * Updates a notification policy.
     *
     * @param request - UpdateNotifyStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNotifyStrategyResponse
     *
     * @param string                      $notifyStrategyId
     * @param UpdateNotifyStrategyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateNotifyStrategyResponse
     */
    public function updateNotifyStrategyWithOptions($notifyStrategyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateNotifyStrategy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/notifyStrategies/' . Url::percentEncode($notifyStrategyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNotifyStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a notification policy.
     *
     * @param request - UpdateNotifyStrategyRequest
     *
     * @returns UpdateNotifyStrategyResponse
     *
     * @param string                      $notifyStrategyId
     * @param UpdateNotifyStrategyRequest $request
     *
     * @return UpdateNotifyStrategyResponse
     */
    public function updateNotifyStrategy($notifyStrategyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNotifyStrategyWithOptions($notifyStrategyId, $request, $headers, $runtime);
    }

    /**
     * Update pipeline.
     *
     * @param request - UpdatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineResponse
     *
     * @param string                $workspace
     * @param string                $pipelineName
     * @param UpdatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($workspace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->executePolicy) {
            @$body['executePolicy'] = $request->executePolicy;
        }

        if (null !== $request->pipeline) {
            @$body['pipeline'] = $request->pipeline;
        }

        if (null !== $request->sink) {
            @$body['sink'] = $request->sink;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePipeline',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/pipeline/' . Url::percentEncode($pipelineName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update pipeline.
     *
     * @param request - UpdatePipelineRequest
     *
     * @returns UpdatePipelineResponse
     *
     * @param string                $workspace
     * @param string                $pipelineName
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($workspace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineWithOptions($workspace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Updates the information of a Managed Service for Prometheus instance.
     *
     * @remarks
     * Updates the information of a Managed Service for Prometheus instance.
     *
     * @param request - UpdatePrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrometheusInstanceResponse
     *
     * @param string                          $prometheusInstanceId
     * @param UpdatePrometheusInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->archiveDuration) {
            @$body['archiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->authFreeWritePolicy) {
            @$body['authFreeWritePolicy'] = $request->authFreeWritePolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthFreeWrite) {
            @$body['enableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->prometheusInstanceName) {
            @$body['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->storageDuration) {
            @$body['storageDuration'] = $request->storageDuration;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a Managed Service for Prometheus instance.
     *
     * @remarks
     * Updates the information of a Managed Service for Prometheus instance.
     *
     * @param request - UpdatePrometheusInstanceRequest
     *
     * @returns UpdatePrometheusInstanceResponse
     *
     * @param string                          $prometheusInstanceId
     * @param UpdatePrometheusInstanceRequest $request
     *
     * @return UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstance($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the user settings for Prometheus. Note: If you set `settingKey` to `financeUsageRegion`, Prometheus usage data is sent to Simple Log Service (SLS) in the specified region. Historical usage data will no longer be available in the Prometheus console.
     *
     * @param request - UpdatePrometheusUserSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrometheusUserSettingResponse
     *
     * @param string                             $settingKey
     * @param UpdatePrometheusUserSettingRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdatePrometheusUserSettingResponse
     */
    public function updatePrometheusUserSettingWithOptions($settingKey, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->settingValue) {
            @$query['settingValue'] = $request->settingValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePrometheusUserSetting',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-user-setting/' . Url::percentEncode($settingKey) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrometheusUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the user settings for Prometheus. Note: If you set `settingKey` to `financeUsageRegion`, Prometheus usage data is sent to Simple Log Service (SLS) in the specified region. Historical usage data will no longer be available in the Prometheus console.
     *
     * @param request - UpdatePrometheusUserSettingRequest
     *
     * @returns UpdatePrometheusUserSettingResponse
     *
     * @param string                             $settingKey
     * @param UpdatePrometheusUserSettingRequest $request
     *
     * @return UpdatePrometheusUserSettingResponse
     */
    public function updatePrometheusUserSetting($settingKey, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrometheusUserSettingWithOptions($settingKey, $request, $headers, $runtime);
    }

    /**
     * Updates the information about a Prometheus view instance.
     *
     * @remarks
     * Updates the information about a Prometheus view instance.
     *
     * @param request - UpdatePrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrometheusViewResponse
     *
     * @param string                      $prometheusViewId
     * @param UpdatePrometheusViewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePrometheusViewResponse
     */
    public function updatePrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->prometheusInstances) {
            @$body['prometheusInstances'] = $request->prometheusInstances;
        }

        if (null !== $request->prometheusViewName) {
            @$body['prometheusViewName'] = $request->prometheusViewName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views/' . Url::percentEncode($prometheusViewId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a Prometheus view instance.
     *
     * @remarks
     * Updates the information about a Prometheus view instance.
     *
     * @param request - UpdatePrometheusViewRequest
     *
     * @returns UpdatePrometheusViewResponse
     *
     * @param string                      $prometheusViewId
     * @param UpdatePrometheusViewRequest $request
     *
     * @return UpdatePrometheusViewResponse
     */
    public function updatePrometheusView($prometheusViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime);
    }

    /**
     * Updates an application observability service.
     *
     * @param request - UpdateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $workspace
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->serviceStatus) {
            @$body['serviceStatus'] = $request->serviceStatus;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an application observability service.
     *
     * @param request - UpdateServiceRequest
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $workspace
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * Updates a service-linked entry.
     *
     * @remarks
     * Updates an existing service-linked entry.
     *
     * @param request - UpdateServiceRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceRecordResponse
     *
     * @param string                     $workspace
     * @param string                     $serviceId
     * @param UpdateServiceRecordRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServiceRecordResponse
     */
    public function updateServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->recordContent) {
            @$body['recordContent'] = $request->recordContent;
        }

        if (null !== $request->recordType) {
            @$body['recordType'] = $request->recordType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceRecord',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '/record',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a service-linked entry.
     *
     * @remarks
     * Updates an existing service-linked entry.
     *
     * @param request - UpdateServiceRecordRequest
     *
     * @returns UpdateServiceRecordResponse
     *
     * @param string                     $workspace
     * @param string                     $serviceId
     * @param UpdateServiceRecordRequest $request
     *
     * @return UpdateServiceRecordResponse
     */
    public function updateServiceRecord($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceRecordWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * Updates a subscription.
     *
     * @param request - UpdateSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param string                    $subscriptionId
     * @param UpdateSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($subscriptionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateSubscription',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/subscriptions/' . Url::percentEncode($subscriptionId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a subscription.
     *
     * @param request - UpdateSubscriptionRequest
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param string                    $subscriptionId
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($subscriptionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSubscriptionWithOptions($subscriptionId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a Umodel.
     *
     * @remarks
     * Updates the configuration of a Umodel.
     *
     * @param request - UpdateUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUmodelResponse
     *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateUmodelResponse
     */
    public function updateUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a Umodel.
     *
     * @remarks
     * Updates the configuration of a Umodel.
     *
     * @param request - UpdateUmodelRequest
     *
     * @returns UpdateUmodelResponse
     *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request
     *
     * @return UpdateUmodelResponse
     */
    public function updateUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Upserts a common Umodel schema reference.
     *
     * @param request - UpsertUmodelCommonSchemaRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param UpsertUmodelCommonSchemaRefRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpsertUmodelCommonSchemaRefResponse
     */
    public function upsertUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpsertUmodelCommonSchemaRef',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/common-schema-ref',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpsertUmodelCommonSchemaRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upserts a common Umodel schema reference.
     *
     * @param request - UpsertUmodelCommonSchemaRefRequest
     *
     * @returns UpsertUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param UpsertUmodelCommonSchemaRefRequest $request
     *
     * @return UpsertUmodelCommonSchemaRefResponse
     */
    public function upsertUmodelCommonSchemaRef($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Inserts or updates Umodel elements.
     *
     * @param request - UpsertUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertUmodelDataResponse
     *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpsertUmodelDataResponse
     */
    public function upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        $body = [];
        if (null !== $request->elements) {
            @$body['elements'] = $request->elements;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/data',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpsertUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Inserts or updates Umodel elements.
     *
     * @param request - UpsertUmodelDataRequest
     *
     * @returns UpsertUmodelDataResponse
     *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request
     *
     * @return UpsertUmodelDataResponse
     */
    public function upsertUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }
}
