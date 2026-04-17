<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDigitalEmployeeRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDigitalEmployeeSkillResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateMemoryStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateMemoryStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusVirtualInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusVirtualInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceObservabilityRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateThreadRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateThreadResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDigitalEmployeeRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDigitalEmployeeSkillResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusVirtualInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusVirtualInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteThreadRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteThreadResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelCommonSchemaRefRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelCommonSchemaRefResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeSkillResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusUserSettingRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusUserSettingResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDeliveryTasksRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDeliveryTasksResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDeliveryTasksShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeeSkillsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeeSkillsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeeSkillVersionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeeSkillVersionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesShrinkRequest;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListThreadsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListThreadsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListThreadsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ManageAlertRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ManageAlertRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ManageAlertRulesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\QueryAlertRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\QueryAlertRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\QueryAlertRulesShrinkRequest;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDeliveryTaskRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDeliveryTaskResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeSkillResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryStoreRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateMemoryStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateNotifyStrategyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateNotifyStrategyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusUserSettingRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusUserSettingResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateThreadRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateThreadResponse;
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
        $this->_endpointRule = '';
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
     * 添加记忆.
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
     * 添加记忆.
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
     * 修改资源所属资源组.
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
     * 修改资源所属资源组.
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
     * Install the access component, representing a single access attempt.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Install the access component, representing a single access attempt.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Create Aggregation Task Group.
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
     * Create Aggregation Task Group.
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
     * 创建Webhook.
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
     * 创建Webhook.
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
     * 创建业务链路.
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
     * 创建业务链路.
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
     * 创建对话.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->digitalEmployeeName) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield CreateChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->digitalEmployeeName) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     *
     * @return CreateChatResponse
     */
    public function createChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建云资源中心.
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
     * 创建云资源中心.
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
     * 创建数据集.
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
     * 创建数据集.
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
     * 创建数据投递任务
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
     * 创建数据投递任务
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
     * 创建DigitalEmployee.
     *
     * @param request - CreateDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalEmployeeResponse
     *
     * @param CreateDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDigitalEmployeeResponse
     */
    public function createDigitalEmployeeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defaultRule) {
            @$body['defaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->knowledges) {
            @$body['knowledges'] = $request->knowledges;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建DigitalEmployee.
     *
     * @param request - CreateDigitalEmployeeRequest
     *
     * @returns CreateDigitalEmployeeResponse
     *
     * @param CreateDigitalEmployeeRequest $request
     *
     * @return CreateDigitalEmployeeResponse
     */
    public function createDigitalEmployee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDigitalEmployeeWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建技能.
     *
     * @param request - CreateDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param CreateDigitalEmployeeSkillRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDigitalEmployeeSkillResponse
     */
    public function createDigitalEmployeeSkillWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->skillName) {
            @$body['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalEmployeeSkill',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建技能.
     *
     * @param request - CreateDigitalEmployeeSkillRequest
     *
     * @returns CreateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param CreateDigitalEmployeeSkillRequest $request
     *
     * @return CreateDigitalEmployeeSkillResponse
     */
    public function createDigitalEmployeeSkill($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDigitalEmployeeSkillWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Create storage related to EntityStore.
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
     * Create storage related to EntityStore.
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
     * Create Access Center Policy.
     *
     * @remarks
     * This interface is used to support users in creating event integration.
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
     * Create Access Center Policy.
     *
     * @remarks
     * This interface is used to support users in creating event integration.
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
     * 创建记忆库.
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
     * 创建记忆库.
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
     * Create a Prometheus monitoring instance.
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
     * Create a Prometheus monitoring instance.
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
     * Create Prometheus View.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Create Prometheus View.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Create Prometheus Monitoring Instance.
     *
     * @remarks
     * Create a Prometheus monitoring virtual instance.
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
     * Create Prometheus Monitoring Instance.
     *
     * @remarks
     * Create a Prometheus monitoring virtual instance.
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
     * Create Service.
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
     * Create Service.
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
     * 创建应用可观测实例.
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
     * 创建应用可观测实例.
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
     * 创建会话.
     *
     * @param request - CreateThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateThreadResponse
     *
     * @param string              $name
     * @param CreateThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateThreadResponse
     */
    public function createThreadWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建会话.
     *
     * @param request - CreateThreadRequest
     *
     * @returns CreateThreadResponse
     *
     * @param string              $name
     * @param CreateThreadRequest $request
     *
     * @return CreateThreadResponse
     */
    public function createThread($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createThreadWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Create Ticket.
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
     * Create Ticket.
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
     * Create Umodel configuration.
     *
     * @remarks
     * Create Umodel configuration in the specified workspace
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
     * Create Umodel configuration.
     *
     * @remarks
     * Create Umodel configuration in the specified workspace
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
     * Delete addon release information.
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
     * Delete addon release information.
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
     * Delete Aggregation Task Group.
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
     * Delete Aggregation Task Group.
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
     * 删除Webhook.
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
     * 删除Webhook.
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
     * 删除业务链路.
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
     * 删除业务链路.
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
     * 删除云资源中心.
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
     * 删除云资源中心.
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
     * 删除数据集.
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
     * 删除数据集.
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
     * 删除数据投递任务
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
     * 删除数据投递任务
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
     * 删除DigitalEmployee.
     *
     * @param request - DeleteDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param DeleteDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDigitalEmployeeResponse
     */
    public function deleteDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除DigitalEmployee.
     *
     * @param request - DeleteDigitalEmployeeRequest
     *
     * @returns DeleteDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param DeleteDigitalEmployeeRequest $request
     *
     * @return DeleteDigitalEmployeeResponse
     */
    public function deleteDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 删除技能.
     *
     * @param request - DeleteDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param DeleteDigitalEmployeeSkillRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDigitalEmployeeSkillResponse
     */
    public function deleteDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDigitalEmployeeSkill',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除技能.
     *
     * @param request - DeleteDigitalEmployeeSkillRequest
     *
     * @returns DeleteDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param DeleteDigitalEmployeeSkillRequest $request
     *
     * @return DeleteDigitalEmployeeSkillResponse
     */
    public function deleteDigitalEmployeeSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * Delete EntityStore related storage.
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
     * Delete EntityStore related storage.
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
     * Delete Access Center Policy.
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
     * Delete Access Center Policy.
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
     * 批量删除记忆.
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
     * 批量删除记忆.
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
     * 删除记忆.
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
     * 删除记忆.
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
     * 删除记忆库.
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
     * 删除记忆库.
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
     * Delete prom instance.
     *
     * @remarks
     * Delete a Prometheus instance.
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
     * Delete prom instance.
     *
     * @remarks
     * Delete a Prometheus instance.
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
     * Delete prometheus view instance.
     *
     * @remarks
     * Delete prometheus view instance.
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
     * Delete prometheus view instance.
     *
     * @remarks
     * Delete prometheus view instance.
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
     * 删除 Prometheus 虚拟实例.
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
     * 删除 Prometheus 虚拟实例.
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
     * Delete Service.
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
     * Delete Service.
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
     * 删除会话.
     *
     * @param request - DeleteThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param DeleteThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteThreadResponse
     */
    public function deleteThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除会话.
     *
     * @param request - DeleteThreadRequest
     *
     * @returns DeleteThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param DeleteThreadRequest $request
     *
     * @return DeleteThreadResponse
     */
    public function deleteThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * Delete Umodel configuration information.
     *
     * @remarks
     * Delete the Umodel under the specified workspace
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
     * Delete Umodel configuration information.
     *
     * @remarks
     * Delete the Umodel under the specified workspace
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
     * 删除Umodel配置信息.
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
     * 删除Umodel配置信息.
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
     * Delete Umodel Elements.
     *
     * @remarks
     * Delete the Umodel Data under a specified workspace
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
     * Delete Umodel Elements.
     *
     * @remarks
     * Delete the Umodel Data under a specified workspace
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
     * Delete Workspace.
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
     * Delete Workspace.
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
     * 查询地域信息列表.
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
     * 查询地域信息列表.
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
     * 执行查询语句.
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
     * 执行查询语句.
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
     * 插件详情(Addon).
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
     * 插件详情(Addon).
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
     * 插件schema详情(Addon).
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
     * 插件schema详情(Addon).
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
     * Check addon release (view connection status).
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
     * Check addon release (view connection status).
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
     * 插件schema详情(Addon).
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
     * 插件schema详情(Addon).
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
     * Describes the aggregation task group.
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
     * Describes the aggregation task group.
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
     * 查询业务链路.
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
     * 查询业务链路.
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
     * 查询云资源中心.
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
     * 查询云资源中心.
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
     * 查询云资源中心数据.
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
     * 查询云资源中心数据.
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
     * 获取云监控开通状态
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
     * 获取云监控开通状态
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
     * 查询数据集.
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
     * 查询数据集.
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
     * 获取数据投递任务详情.
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
     * 获取数据投递任务详情.
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
     * 查询 DigitalEmployee.
     *
     * @param request - GetDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDigitalEmployeeResponse
     *
     * @param string                    $name
     * @param GetDigitalEmployeeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDigitalEmployeeResponse
     */
    public function getDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 DigitalEmployee.
     *
     * @param request - GetDigitalEmployeeRequest
     *
     * @returns GetDigitalEmployeeResponse
     *
     * @param string                    $name
     * @param GetDigitalEmployeeRequest $request
     *
     * @return GetDigitalEmployeeResponse
     */
    public function getDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 获取技能详情.
     *
     * @param request - GetDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDigitalEmployeeSkillResponse
     *
     * @param string                         $name
     * @param string                         $skillName
     * @param GetDigitalEmployeeSkillRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDigitalEmployeeSkillResponse
     */
    public function getDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDigitalEmployeeSkill',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取技能详情.
     *
     * @param request - GetDigitalEmployeeSkillRequest
     *
     * @returns GetDigitalEmployeeSkillResponse
     *
     * @param string                         $name
     * @param string                         $skillName
     * @param GetDigitalEmployeeSkillRequest $request
     *
     * @return GetDigitalEmployeeSkillResponse
     */
    public function getDigitalEmployeeSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * Get EntityStore related storage information.
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
     * Get EntityStore related storage information.
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
     * Query the entity and relationship data under a specified Workspace, returning the entity data within a certain time range (the returned result is transmitted after compression).
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
     * Query the entity and relationship data under a specified Workspace, returning the entity data within a certain time range (the returned result is transmitted after compression).
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
     * Query the list of access center policies.
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
     * Query the list of access center policies.
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
     * 查询接入中心在CS的版本.
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
     * 查询接入中心在CS的版本.
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
     * 查询全部记忆.
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
     * 查询全部记忆.
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
     * 查询记忆.
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
     * 查询记忆.
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
     * 查询记忆历史记录.
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
     * 查询记忆历史记录.
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
     * 查询记忆库.
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
     * 查询记忆库.
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
     * Query the instance in a specified environment.
     *
     * @remarks
     * Retrieve details of a Prometheus instance.
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
     * Query the instance in a specified environment.
     *
     * @remarks
     * Retrieve details of a Prometheus instance.
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
     * 查询指定环境实例.
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
     * 查询指定环境实例.
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
     * Query a specified Prometheus view instance.
     *
     * @remarks
     * Query a specified Prometheus view instance.
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
     * Query a specified Prometheus view instance.
     *
     * @remarks
     * Query a specified Prometheus view instance.
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
     * Query Service.
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
     * Query Service.
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
     * Get Application Observability Instance.
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
     * Get Application Observability Instance.
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
     * 获取会话.
     *
     * @param request - GetThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetThreadResponse
     *
     * @param string           $name
     * @param string           $threadId
     * @param GetThreadRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetThreadResponse
     */
    public function getThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话.
     *
     * @param request - GetThreadRequest
     *
     * @returns GetThreadResponse
     *
     * @param string           $name
     * @param string           $threadId
     * @param GetThreadRequest $request
     *
     * @return GetThreadResponse
     */
    public function getThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * 获取会话数据.
     *
     * @param request - GetThreadDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetThreadDataResponse
     *
     * @param string               $name
     * @param string               $threadId
     * @param GetThreadDataRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetThreadDataResponse
     */
    public function getThreadDataWithOptions($name, $threadId, $request, $headers, $runtime)
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
            'action' => 'GetThreadData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '/data',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetThreadDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话数据.
     *
     * @param request - GetThreadDataRequest
     *
     * @returns GetThreadDataResponse
     *
     * @param string               $name
     * @param string               $threadId
     * @param GetThreadDataRequest $request
     *
     * @return GetThreadDataResponse
     */
    public function getThreadData($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getThreadDataWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * Get Umodel configuration information.
     *
     * @remarks
     * Get Umodel configuration information
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
     * Get Umodel configuration information.
     *
     * @remarks
     * Get Umodel configuration information
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
     * 获取Umodel配置信息.
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
     * 获取Umodel配置信息.
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
     * Retrieve associated Umodel graph data.
     *
     * @remarks
     * Find Umodel
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
     * Retrieve associated Umodel graph data.
     *
     * @remarks
     * Find Umodel
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
     * Get Workspace.
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
     * Get Workspace.
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
     * List of addon releases.
     *
     * @remarks
     * Query the list of access configurations
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
     * List of addon releases.
     *
     * @remarks
     * Query the list of access configurations
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
     * 新版接入中心产品列表(分组).
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
     * 新版接入中心产品列表(分组).
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
     * List Aggregation Task Groups.
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
     * List Aggregation Task Groups.
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
     * Query Alert Actions.
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
     * Query Alert Actions.
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
     * 查询机器人.
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
     * 查询机器人.
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
     * 查询Webhook.
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
     * 查询Webhook.
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
     * 业务链路列表.
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
     * 业务链路列表.
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
     * 查询联系人组.
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
     * 查询联系人组.
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
     * 查询联系人.
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
     * 查询联系人.
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
     * 查询数据集列表.
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
     * 查询数据集列表.
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
     * 获取数据投递任务列表.
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
     * 获取数据投递任务列表.
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
     * 列出技能版本.
     *
     * @param request - ListDigitalEmployeeSkillVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeeSkillVersionsResponse
     *
     * @param string                                  $name
     * @param string                                  $skillName
     * @param ListDigitalEmployeeSkillVersionsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListDigitalEmployeeSkillVersionsResponse
     */
    public function listDigitalEmployeeSkillVersionsWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployeeSkillVersions',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeeSkillVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出技能版本.
     *
     * @param request - ListDigitalEmployeeSkillVersionsRequest
     *
     * @returns ListDigitalEmployeeSkillVersionsResponse
     *
     * @param string                                  $name
     * @param string                                  $skillName
     * @param ListDigitalEmployeeSkillVersionsRequest $request
     *
     * @return ListDigitalEmployeeSkillVersionsResponse
     */
    public function listDigitalEmployeeSkillVersions($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeeSkillVersionsWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * 列出技能.
     *
     * @param request - ListDigitalEmployeeSkillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeeSkillsResponse
     *
     * @param string                           $name
     * @param ListDigitalEmployeeSkillsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDigitalEmployeeSkillsResponse
     */
    public function listDigitalEmployeeSkillsWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->skillName) {
            @$query['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployeeSkills',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skills',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeeSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出技能.
     *
     * @param request - ListDigitalEmployeeSkillsRequest
     *
     * @returns ListDigitalEmployeeSkillsResponse
     *
     * @param string                           $name
     * @param ListDigitalEmployeeSkillsRequest $request
     *
     * @return ListDigitalEmployeeSkillsResponse
     */
    public function listDigitalEmployeeSkills($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeeSkillsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 列出资源DigitalEmployee.
     *
     * @param tmpReq - ListDigitalEmployeesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeesResponse
     *
     * @param ListDigitalEmployeesRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDigitalEmployeesResponse
     */
    public function listDigitalEmployeesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDigitalEmployeesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->displayName) {
            @$query['displayName'] = $request->displayName;
        }

        if (null !== $request->employeeType) {
            @$query['employeeType'] = $request->employeeType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployees',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源DigitalEmployee.
     *
     * @param request - ListDigitalEmployeesRequest
     *
     * @returns ListDigitalEmployeesResponse
     *
     * @param ListDigitalEmployeesRequest $request
     *
     * @return ListDigitalEmployeesResponse
     */
    public function listDigitalEmployees($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeesWithOptions($request, $headers, $runtime);
    }

    /**
     * Query Access Center Policy List Information.
     *
     * @remarks
     * Query integration list
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
     * Query Access Center Policy List Information.
     *
     * @remarks
     * Query integration list
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
     * 策略addon列表.
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
     * 策略addon列表.
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
     * 获取接入中心策略的存储要求信息.
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
     * 获取接入中心策略的存储要求信息.
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
     * Get storage requirement information for the access center policy.
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
     * Get storage requirement information for the access center policy.
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
     * Policy Dashboard List.
     *
     * @remarks
     * This article provides an example of querying the alarm template list. The result shows that there are 2 alarm templates in the list, which are `ECS_Template1` and `ECS_Template2`.
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
     * Policy Dashboard List.
     *
     * @remarks
     * This article provides an example of querying the alarm template list. The result shows that there are 2 alarm templates in the list, which are `ECS_Template1` and `ECS_Template2`.
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
     * Get PodMonitor Resources of Access Center Policy.
     *
     * @remarks
     * This article provides an example to query the alarm template list. The result shows that there are 2 alarm templates in the alarm template list, which are `ECS_Template1` and `ECS_Template2`.
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
     * Get PodMonitor Resources of Access Center Policy.
     *
     * @remarks
     * This article provides an example to query the alarm template list. The result shows that there are 2 alarm templates in the alarm template list, which are `ECS_Template1` and `ECS_Template2`.
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
     * 获取接入中心策略的存储要求信息.
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
     * 获取接入中心策略的存储要求信息.
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
     * Get Storage Requirements Information for Access Center Policy.
     *
     * @remarks
     * During the effective period of the policy, all alarms within the application group will no longer send notifications.
     *
     * This article provides an example of creating a pause alarm notification policy `PauseNotify` for the application group `7301****`. This application group will pause alarms from `1622949300000` to `1623208500000` (Beijing Time `2021-06-06 11:15:00` to `2021-06-09 11:15:00`).
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
     * Get Storage Requirements Information for Access Center Policy.
     *
     * @remarks
     * During the effective period of the policy, all alarms within the application group will no longer send notifications.
     *
     * This article provides an example of creating a pause alarm notification policy `PauseNotify` for the application group `7301****`. This application group will pause alarms from `1622949300000` to `1623208500000` (Beijing Time `2021-06-06 11:15:00` to `2021-06-09 11:15:00`).
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
     * 查询记忆库列表.
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
     * 查询记忆库列表.
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
     * Get Prometheus Instance Dashboard List.
     *
     * @remarks
     * Get the list of Prometheus instance dashboards.
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
     * Get Prometheus Instance Dashboard List.
     *
     * @remarks
     * Get the list of Prometheus instance dashboards.
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
     * Get the list of Prometheus instance information.
     *
     * @remarks
     * Get the list of Prometheus instances.
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
     * Get the list of Prometheus instance information.
     *
     * @remarks
     * Get the list of Prometheus instances.
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
     * Retrieve a list of Prometheus view instance information.
     *
     * @remarks
     * Retrieve a list of Prometheus view instance information.
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
     * Retrieve a list of Prometheus view instance information.
     *
     * @remarks
     * Retrieve a list of Prometheus view instance information.
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
     * Get Prometheus Virtual Instance.
     *
     * @remarks
     * Used for creating a site monitoring task
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
        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
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
     * Get Prometheus Virtual Instance.
     *
     * @remarks
     * Used for creating a site monitoring task
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
     * List Resource Services.
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
     * List Resource Services.
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
     * 查标签接口.
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
     * 查标签接口.
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
     * 列出会话.
     *
     * @param tmpReq - ListThreadsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListThreadsResponse
     *
     * @param string             $name
     * @param ListThreadsRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListThreadsResponse
     */
    public function listThreadsWithOptions($name, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListThreadsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->threadId) {
            @$query['threadId'] = $request->threadId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListThreads',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/threads',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListThreadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出会话.
     *
     * @param request - ListThreadsRequest
     *
     * @returns ListThreadsResponse
     *
     * @param string             $name
     * @param ListThreadsRequest $request
     *
     * @return ListThreadsResponse
     */
    public function listThreads($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listThreadsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Get Workspace List.
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
     * Get Workspace List.
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
     * 管理告警规则.
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
     * 管理告警规则.
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
     * Create Workspace.
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
     * Create Workspace.
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
     * 查询告警规则.
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
     * 查询告警规则.
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
     * 搜索记忆.
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

        if (null !== $request->retrieveLevel) {
            @$body['retrieveLevel'] = $request->retrieveLevel;
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
     * 搜索记忆.
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
     * 打标签接口.
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
     * 打标签接口.
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
     * 删标签接口.
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
     * 删标签接口.
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
     * Upgrade Access Component.
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
     * Upgrade Access Component.
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
     * Apply Aggregation Task Group.
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
     * Apply Aggregation Task Group.
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
     * Update Aggregation Task Group Status.
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
     * Update Aggregation Task Group Status.
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
     * 修改已存在的告警 Webhook 通知配置。
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
     * 修改已存在的告警 Webhook 通知配置。
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
     * 修改业务链路.
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
     * 修改业务链路.
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
     * 更新数据集.
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
     * 更新数据集.
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
     * 更新数据投递任务
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
     * 更新数据投递任务
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
     * 更新UpdateDigitalEmployee.
     *
     * @param request - UpdateDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param UpdateDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDigitalEmployeeResponse
     */
    public function updateDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defaultRule) {
            @$body['defaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->knowledges) {
            @$body['knowledges'] = $request->knowledges;
        }

        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新UpdateDigitalEmployee.
     *
     * @param request - UpdateDigitalEmployeeRequest
     *
     * @returns UpdateDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param UpdateDigitalEmployeeRequest $request
     *
     * @return UpdateDigitalEmployeeResponse
     */
    public function updateDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 更新技能.
     *
     * @param request - UpdateDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param UpdateDigitalEmployeeSkillRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDigitalEmployeeSkillResponse
     */
    public function updateDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDigitalEmployeeSkill',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新技能.
     *
     * @param request - UpdateDigitalEmployeeSkillRequest
     *
     * @returns UpdateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param UpdateDigitalEmployeeSkillRequest $request
     *
     * @return UpdateDigitalEmployeeSkillResponse
     */
    public function updateDigitalEmployeeSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * Update the specified policy.
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
     * Update the specified policy.
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
     * 修改记忆.
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
     * 修改记忆.
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
     * 修改记忆库配置.
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
     * 修改记忆库配置.
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
     * 修改已存在的告警通知策略.
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
     * 修改已存在的告警通知策略.
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
     * Update Prometheus instance information.
     *
     * @remarks
     * Update Prometheus instance information.
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
     * Update Prometheus instance information.
     *
     * @remarks
     * Update Prometheus instance information.
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
     * 更新Prom实例信息.
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
     * 更新Prom实例信息.
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
     * Update Prometheus view instance information.
     *
     * @remarks
     * Update Prometheus view instance information.
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
     * Update Prometheus view instance information.
     *
     * @remarks
     * Update Prometheus view instance information.
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
     * Update Service.
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
     * Update Service.
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
     * 更新一个已存在的订阅配置.
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
     * 更新一个已存在的订阅配置.
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
     * 更新会话.
     *
     * @param request - UpdateThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param UpdateThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateThreadResponse
     */
    public function updateThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新会话.
     *
     * @param request - UpdateThreadRequest
     *
     * @returns UpdateThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param UpdateThreadRequest $request
     *
     * @return UpdateThreadResponse
     */
    public function updateThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * Update Umodel configuration information.
     *
     * @remarks
     * Update Umodel configuration information
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
     * Update Umodel configuration information.
     *
     * @remarks
     * Update Umodel configuration information
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
     * 更新Umodel配置信息.
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
     * 更新Umodel配置信息.
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
     * Write Umodel Elements.
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
     * Write Umodel Elements.
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
