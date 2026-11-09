<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AssignWuyingServerPrivateAddressesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AssignWuyingServerPrivateAddressesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeUsersForAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeUsersForAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeUsersForAppShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuilderImageByParentRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuilderImageByParentResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuilderImageByParentShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigResourceGroupModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigResourceGroupModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeChannelRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeChannelResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAndBindAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAndBindAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateExportTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateExportTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageByInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageByInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAdaptorRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAdaptorResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteLlmTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteLlmTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeliverToUserSlsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeliverToUserSlsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeExportTasksRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeExportTasksResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAgentRuntimeStatisticRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAgentRuntimeStatisticResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAuthCodeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAuthCodeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetFileUploadInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetFileUploadInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetMqttTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetMqttTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetMqttTicketShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceGroupAgentModelSettingsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceGroupAgentModelSettingsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceModifyPriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceModifyPriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceQuotaRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceQuotaResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeChannelRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeChannelResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAgentInstanceVersionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAgentInstanceVersionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppsByAppInstanceGroupIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppsByAppInstanceGroupIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppInstanceGroupByUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppInstanceGroupByUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppsByUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppsByUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUserGroupsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUserGroupsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUsersRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUsersResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserBookmarksRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserBookmarksResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserRestrictedURLsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserRestrictedURLsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderEndpointsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderEndpointsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderLlmCodesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderLlmCodesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplateResourceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplateResourceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTaskStepRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTaskStepResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerWorkloadTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerWorkloadTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListZonesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListZonesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupChargeTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupChargeTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupChargeTypeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyShareImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyShareImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyWuyingServerAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyWuyingServerAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryAppInstanceGroupReportListRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryAppInstanceGroupReportListResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryConnectionReportRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryConnectionReportResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryDauReportDataRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryDauReportDataResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryMauReportDataRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryMauReportDataResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryNetworkRttReportRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryNetworkRttReportResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryNodeReportDataRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryNodeReportDataResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QuerySessionDataRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QuerySessionDataResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QuerySessionReportDataRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QuerySessionReportDataResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserAppUsageAggregateByHourRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserAppUsageAggregateByHourResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserAppUsageTimeRankRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserAppUsageTimeRankResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserUsageReportRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserUsageReportResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveResourceGroupModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveResourceGroupModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeChannelRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeChannelResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RestartWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RestartWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartTaskForDistributeImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartTaskForDistributeImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StopWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StopWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnassignWuyingServerPrivateAddressesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnassignWuyingServerPrivateAddressesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAdaptorRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAdaptorResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAdaptorShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateImageTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateImageTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateWuyingServerImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateWuyingServerImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ValidateLlmTemplateConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ValidateLlmTemplateConfigResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'appstream-center';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Sets the execution time for an OTA upgrade.
     *
     * @param request - ApproveOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApproveOtaTaskResponse
     *
     * @param ApproveOtaTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ApproveOtaTaskResponse
     */
    public function approveOtaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->otaType) {
            @$body['OtaType'] = $request->otaType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApproveOtaTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the execution time for an OTA upgrade.
     *
     * @param request - ApproveOtaTaskRequest
     *
     * @returns ApproveOtaTaskResponse
     *
     * @param ApproveOtaTaskRequest $request
     *
     * @return ApproveOtaTaskResponse
     */
    public function approveOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOtaTaskWithOptions($request, $runtime);
    }

    /**
     * Assigns secondary private IP addresses to a development host.
     *
     * @param request - AssignWuyingServerPrivateAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignWuyingServerPrivateAddressesResponse
     *
     * @param AssignWuyingServerPrivateAddressesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AssignWuyingServerPrivateAddressesResponse
     */
    public function assignWuyingServerPrivateAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->secondaryPrivateIpAddressCount) {
            @$body['SecondaryPrivateIpAddressCount'] = $request->secondaryPrivateIpAddressCount;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignWuyingServerPrivateAddresses',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignWuyingServerPrivateAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns secondary private IP addresses to a development host.
     *
     * @param request - AssignWuyingServerPrivateAddressesRequest
     *
     * @returns AssignWuyingServerPrivateAddressesResponse
     *
     * @param AssignWuyingServerPrivateAddressesRequest $request
     *
     * @return AssignWuyingServerPrivateAddressesResponse
     */
    public function assignWuyingServerPrivateAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignWuyingServerPrivateAddressesWithOptions($request, $runtime);
    }

    /**
     * Adds or removes assigned users for a delivery group. Only users added as assigned users can access cloud applications.
     *
     * @remarks
     * > After you change assigned users, the selected users receive notification emails. Changes typically take about 2 minutes to take effect on the client.
     *
     * @param tmpReq - AuthorizeInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeInstanceGroupResponse
     *
     * @param AuthorizeInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AuthorizeInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userMeta) {
            $request->userMetaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userMeta, 'UserMeta', 'json');
        }

        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        $bodyFlat = [];
        if (null !== $request->authorizeUserGroupIds) {
            @$bodyFlat['AuthorizeUserGroupIds'] = $request->authorizeUserGroupIds;
        }

        if (null !== $request->authorizeUserIds) {
            @$bodyFlat['AuthorizeUserIds'] = $request->authorizeUserIds;
        }

        if (null !== $request->avatarId) {
            @$body['AvatarId'] = $request->avatarId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->unAuthorizeUserGroupIds) {
            @$bodyFlat['UnAuthorizeUserGroupIds'] = $request->unAuthorizeUserGroupIds;
        }

        if (null !== $request->unAuthorizeUserIds) {
            @$bodyFlat['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }

        if (null !== $request->userMetaShrink) {
            @$body['UserMeta'] = $request->userMetaShrink;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AuthorizeInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or removes assigned users for a delivery group. Only users added as assigned users can access cloud applications.
     *
     * @remarks
     * > After you change assigned users, the selected users receive notification emails. Changes typically take about 2 minutes to take effect on the client.
     *
     * @param request - AuthorizeInstanceGroupRequest
     *
     * @returns AuthorizeInstanceGroupResponse
     *
     * @param AuthorizeInstanceGroupRequest $request
     *
     * @return AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Adds or removes authorized users for a specified application deployed in an app instance group. Only authorized users can access the application.
     *
     * @remarks
     * ## Operation description
     * This operation manages user authorization for an app instance group at the application level. The authorization result applies only to the application specified by AppId and does not affect the authorization relationships of other applications in the app instance group. To authorize users for the entire app instance group, call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation.
     * ## Before you begin
     * - The app instance group is created, and **the application specified by AppId is deployed in the image used by the app instance group**. Otherwise, the error code `InvalidAppId.NotFound` is returned.
     * - The app instance group **is not added to an active app instance group set**. App instance groups added to a set cannot be authorized individually and must be authorized through the set. Otherwise, the error code `InvalidAppInstanceGroup.AuthorizeBlockedBySet` is returned.
     * - If the workspace to which the app instance group belongs is an AD workspace, **UserMeta must be specified**, the value of UserMeta.Type must be ad, and the value of UserMeta.AdDomain must be the same as the AD domain bound to the workspace.
     * - If the app instance group is already authorized through a user group and mixed authorization of users and user groups is not supported, you cannot authorize individual users. Otherwise, the error code `AuthAppInstanceGroup.MixNotSupported` is returned.
     * ## Parameter description
     * - **You must specify at least one of AuthorizeUserIds and UnAuthorizeUserIds**, or specify both. If both are empty, the system does not change any authorization relationships when you invoke this operation.
     * - When adding authorization, the sum of the current number of authorized users for the application and the number of newly added users cannot exceed the authorized user quota for the application. If the quota is exceeded, the error code `ExceedAppAuthUserQuota` is returned. Removing authorization is not subject to the quota limit.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the app instance group ID (AppInstanceGroupId) and the application IDs of the applications deployed in the app instance group (AppId in the Apps list).
     * 2. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the usernames of the users to be authorized or unauthorized.
     * 3. Call this operation to complete the authorization change.
     * > After the authorization is changed, the selected users will receive a notification email. It generally takes about 2 minutes for the changes to take effect on the terminal.
     *
     * @param tmpReq - AuthorizeUsersForAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeUsersForAppResponse
     *
     * @param AuthorizeUsersForAppRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return AuthorizeUsersForAppResponse
     */
    public function authorizeUsersForAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AuthorizeUsersForAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userMeta) {
            $request->userMetaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userMeta, 'UserMeta', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->authorizeUserIds) {
            @$body['AuthorizeUserIds'] = $request->authorizeUserIds;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->unAuthorizeUserIds) {
            @$body['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }

        if (null !== $request->userMetaShrink) {
            @$body['UserMeta'] = $request->userMetaShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AuthorizeUsersForApp',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeUsersForAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or removes authorized users for a specified application deployed in an app instance group. Only authorized users can access the application.
     *
     * @remarks
     * ## Operation description
     * This operation manages user authorization for an app instance group at the application level. The authorization result applies only to the application specified by AppId and does not affect the authorization relationships of other applications in the app instance group. To authorize users for the entire app instance group, call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation.
     * ## Before you begin
     * - The app instance group is created, and **the application specified by AppId is deployed in the image used by the app instance group**. Otherwise, the error code `InvalidAppId.NotFound` is returned.
     * - The app instance group **is not added to an active app instance group set**. App instance groups added to a set cannot be authorized individually and must be authorized through the set. Otherwise, the error code `InvalidAppInstanceGroup.AuthorizeBlockedBySet` is returned.
     * - If the workspace to which the app instance group belongs is an AD workspace, **UserMeta must be specified**, the value of UserMeta.Type must be ad, and the value of UserMeta.AdDomain must be the same as the AD domain bound to the workspace.
     * - If the app instance group is already authorized through a user group and mixed authorization of users and user groups is not supported, you cannot authorize individual users. Otherwise, the error code `AuthAppInstanceGroup.MixNotSupported` is returned.
     * ## Parameter description
     * - **You must specify at least one of AuthorizeUserIds and UnAuthorizeUserIds**, or specify both. If both are empty, the system does not change any authorization relationships when you invoke this operation.
     * - When adding authorization, the sum of the current number of authorized users for the application and the number of newly added users cannot exceed the authorized user quota for the application. If the quota is exceeded, the error code `ExceedAppAuthUserQuota` is returned. Removing authorization is not subject to the quota limit.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the app instance group ID (AppInstanceGroupId) and the application IDs of the applications deployed in the app instance group (AppId in the Apps list).
     * 2. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the usernames of the users to be authorized or unauthorized.
     * 3. Call this operation to complete the authorization change.
     * > After the authorization is changed, the selected users will receive a notification email. It generally takes about 2 minutes for the changes to take effect on the terminal.
     *
     * @param request - AuthorizeUsersForAppRequest
     *
     * @returns AuthorizeUsersForAppResponse
     *
     * @param AuthorizeUsersForAppRequest $request
     *
     * @return AuthorizeUsersForAppResponse
     */
    public function authorizeUsersForApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeUsersForAppWithOptions($request, $runtime);
    }

    /**
     * Creates multiple LLM templates.
     *
     * @remarks
     * You can create multiple model templates under a model provider template in the Wuying Agent Management Center. You can add multiple models at a time and specify one of them as the default model. Existing models are automatically skipped to prevent duplicate model creation.
     * Make sure that you are fully familiar with the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - BatchCreateLlmTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateLlmTemplatesResponse
     *
     * @param BatchCreateLlmTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchCreateLlmTemplatesResponse
     */
    public function batchCreateLlmTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmTemplateItems) {
            @$body['LlmTemplateItems'] = $request->llmTemplateItems;
        }

        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->providerTemplateId) {
            @$body['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateLlmTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateLlmTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates multiple LLM templates.
     *
     * @remarks
     * You can create multiple model templates under a model provider template in the Wuying Agent Management Center. You can add multiple models at a time and specify one of them as the default model. Existing models are automatically skipped to prevent duplicate model creation.
     * Make sure that you are fully familiar with the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - BatchCreateLlmTemplatesRequest
     *
     * @returns BatchCreateLlmTemplatesResponse
     *
     * @param BatchCreateLlmTemplatesRequest $request
     *
     * @return BatchCreateLlmTemplatesResponse
     */
    public function batchCreateLlmTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateLlmTemplatesWithOptions($request, $runtime);
    }

    /**
     * Creates a custom image based on an existing image and starts an image creation task.
     *
     * @remarks
     * Before you call this operation, make sure that the parent image is available and an available image distribution record exists in the region where the image is created.
     * 1. Call ListImage to obtain the parent image ID.
     * 2. Specify the creation mode, disk capacity, and resource type, and then call this operation.
     * 3. Save the returned ImageId, VersionId, and TaskId.
     * 4. Call GetTask to query the creation progress. **A successful request does not indicate that the image creation is complete.**
     *
     * @param tmpReq - BuilderImageByParentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuilderImageByParentResponse
     *
     * @param BuilderImageByParentRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return BuilderImageByParentResponse
     */
    public function builderImageByParentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BuilderImageByParentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->propertyMap) {
            $request->propertyMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->propertyMap, 'PropertyMap', 'json');
        }

        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->dataDiskSize) {
            @$body['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->distro) {
            @$body['Distro'] = $request->distro;
        }

        if (null !== $request->driverIdList) {
            @$body['DriverIdList'] = $request->driverIdList;
        }

        if (null !== $request->imageCreateMode) {
            @$body['ImageCreateMode'] = $request->imageCreateMode;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->nodeInstanceType) {
            @$body['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->parentImageId) {
            @$body['ParentImageId'] = $request->parentImageId;
        }

        if (null !== $request->performanceType) {
            @$body['PerformanceType'] = $request->performanceType;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->propertyMapShrink) {
            @$body['PropertyMap'] = $request->propertyMapShrink;
        }

        if (null !== $request->resourceList) {
            @$body['ResourceList'] = $request->resourceList;
        }

        if (null !== $request->runMode) {
            @$body['RunMode'] = $request->runMode;
        }

        if (null !== $request->sourceRegion) {
            @$body['SourceRegion'] = $request->sourceRegion;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->vSwitchIdList) {
            @$body['VSwitchIdList'] = $request->vSwitchIdList;
        }

        if (null !== $request->versionName) {
            @$body['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BuilderImageByParent',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BuilderImageByParentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom image based on an existing image and starts an image creation task.
     *
     * @remarks
     * Before you call this operation, make sure that the parent image is available and an available image distribution record exists in the region where the image is created.
     * 1. Call ListImage to obtain the parent image ID.
     * 2. Specify the creation mode, disk capacity, and resource type, and then call this operation.
     * 3. Save the returned ImageId, VersionId, and TaskId.
     * 4. Call GetTask to query the creation progress. **A successful request does not indicate that the image creation is complete.**
     *
     * @param request - BuilderImageByParentRequest
     *
     * @returns BuilderImageByParentResponse
     *
     * @param BuilderImageByParentRequest $request
     *
     * @return BuilderImageByParentResponse
     */
    public function builderImageByParent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->builderImageByParentWithOptions($request, $runtime);
    }

    /**
     * Configures the model group for a resource group.
     *
     * @remarks
     * You can assign a model group to the resource group that contains agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. The assigned model group serves as the inference engine for agents within the resource group to execute tasks.
     * If an agent runtime has a model group configured and its resource group also has a model group configured, the model group assigned to the resource group takes effect. The resource group settings take precedence over the agent runtime settings.
     * **Before you begin**
     * - The ResourceGroupId parameter in this operation specifically refers to the WUYING Enterprise Edition resource group ID, which starts with rg-. This resource group is managed by the WUYING Enterprise Edition management and control service. It must be created before you deploy agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent. You do not need to and cannot create it by using the API of this service. Although the account-level resource group ID in Alibaba Cloud Resource Manager also starts with rg-, it does not belong to WUYING resource groups and cannot be passed as this parameter.
     * - Before you call this operation, obtain an existing WUYING resource group ID by using one of the following methods:
     *   - Call the DescribeResourceGroups operation of WUYING Workspace eds-user (API version 2021-03-08). The ResourceGroup[].ResourceGroupId field in the response is the resource group ID required for this parameter. You can set the ResourceClassification request parameter to DesktopAgent and filter agent resource groups by AgentType (JVSClaw or HermesAgent). The AliyunResourceGroupId field in the response is the resource group ID of Alibaba Cloud Resource Manager and cannot be used in this operation.
     *   - Call the GetRuntimeModelConfig operation of this service. The Data.ResourceGroupId field in the response is the WUYING resource group ID to which the specified agent runtime currently belongs. If the runtime does not belong to any resource group, this field is null.
     *   - When you call the ListDesktopAgentRuntime operation of this service, you can use the ResourceGroupId request parameter to filter agent runtimes by resource group to confirm which runtimes are included in a specific resource group.
     * - The ListModelTemplateResourceGroup operation returns only the resource groups that have been authorized for a specified model group. It cannot be used to discover resource groups that have not been authorized for any model group.
     * Make sure that you are fully familiar with the operations and usage of the WUYING Agent Management Center before you use this operation.
     *
     * @param request - ConfigResourceGroupModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigResourceGroupModelTemplateResponse
     *
     * @param ConfigResourceGroupModelTemplateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ConfigResourceGroupModelTemplateResponse
     */
    public function configResourceGroupModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigResourceGroupModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigResourceGroupModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the model group for a resource group.
     *
     * @remarks
     * You can assign a model group to the resource group that contains agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. The assigned model group serves as the inference engine for agents within the resource group to execute tasks.
     * If an agent runtime has a model group configured and its resource group also has a model group configured, the model group assigned to the resource group takes effect. The resource group settings take precedence over the agent runtime settings.
     * **Before you begin**
     * - The ResourceGroupId parameter in this operation specifically refers to the WUYING Enterprise Edition resource group ID, which starts with rg-. This resource group is managed by the WUYING Enterprise Edition management and control service. It must be created before you deploy agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent. You do not need to and cannot create it by using the API of this service. Although the account-level resource group ID in Alibaba Cloud Resource Manager also starts with rg-, it does not belong to WUYING resource groups and cannot be passed as this parameter.
     * - Before you call this operation, obtain an existing WUYING resource group ID by using one of the following methods:
     *   - Call the DescribeResourceGroups operation of WUYING Workspace eds-user (API version 2021-03-08). The ResourceGroup[].ResourceGroupId field in the response is the resource group ID required for this parameter. You can set the ResourceClassification request parameter to DesktopAgent and filter agent resource groups by AgentType (JVSClaw or HermesAgent). The AliyunResourceGroupId field in the response is the resource group ID of Alibaba Cloud Resource Manager and cannot be used in this operation.
     *   - Call the GetRuntimeModelConfig operation of this service. The Data.ResourceGroupId field in the response is the WUYING resource group ID to which the specified agent runtime currently belongs. If the runtime does not belong to any resource group, this field is null.
     *   - When you call the ListDesktopAgentRuntime operation of this service, you can use the ResourceGroupId request parameter to filter agent runtimes by resource group to confirm which runtimes are included in a specific resource group.
     * - The ListModelTemplateResourceGroup operation returns only the resource groups that have been authorized for a specified model group. It cannot be used to discover resource groups that have not been authorized for any model group.
     * Make sure that you are fully familiar with the operations and usage of the WUYING Agent Management Center before you use this operation.
     *
     * @param request - ConfigResourceGroupModelTemplateRequest
     *
     * @returns ConfigResourceGroupModelTemplateResponse
     *
     * @param ConfigResourceGroupModelTemplateRequest $request
     *
     * @return ConfigResourceGroupModelTemplateResponse
     */
    public function configResourceGroupModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configResourceGroupModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Configures third-party channels for agent runtimes.
     *
     * @remarks
     * You can configure third-party channels for agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. These channels serve as extended agent communication methods in addition to the AgentIM channel.
     * Make sure that you are fully familiar with the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - ConfigRuntimeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigRuntimeChannelResponse
     *
     * @param ConfigRuntimeChannelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfigRuntimeChannelResponse
     */
    public function configRuntimeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentPlatform) {
            @$body['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$body['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->configMode) {
            @$body['ConfigMode'] = $request->configMode;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigRuntimeChannel',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigRuntimeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures third-party channels for agent runtimes.
     *
     * @remarks
     * You can configure third-party channels for agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. These channels serve as extended agent communication methods in addition to the AgentIM channel.
     * Make sure that you are fully familiar with the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - ConfigRuntimeChannelRequest
     *
     * @returns ConfigRuntimeChannelResponse
     *
     * @param ConfigRuntimeChannelRequest $request
     *
     * @return ConfigRuntimeChannelResponse
     */
    public function configRuntimeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configRuntimeChannelWithOptions($request, $runtime);
    }

    /**
     * Configures the model group for agent runtime resources.
     *
     * @remarks
     * You can authorize model groups for agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center to serve as inference engines for agent task execution.
     * Before you call this operation, make sure that you are fully familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ConfigRuntimeModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigRuntimeModelTemplateResponse
     *
     * @param ConfigRuntimeModelTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ConfigRuntimeModelTemplateResponse
     */
    public function configRuntimeModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigRuntimeModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigRuntimeModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the model group for agent runtime resources.
     *
     * @remarks
     * You can authorize model groups for agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center to serve as inference engines for agent task execution.
     * Before you call this operation, make sure that you are fully familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ConfigRuntimeModelTemplateRequest
     *
     * @returns ConfigRuntimeModelTemplateResponse
     *
     * @param ConfigRuntimeModelTemplateRequest $request
     *
     * @return ConfigRuntimeModelTemplateResponse
     */
    public function configRuntimeModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configRuntimeModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates an application and binds it to a specified image version.
     *
     * @remarks
     * Only custom images and community images that can be managed by the current account are supported. If VersionId is omitted, the current active version of the image is used. If specified, the version must belong to the image specified by ImageId.
     * Call ListImage to select an image first. After the application is created, save the returned AppId, AppVersionId, ImageId, and VersionId. To dissociate the application, call UnbindApp.
     *
     * @param request - CreateAndBindAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndBindAppResponse
     *
     * @param CreateAndBindAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAndBindAppResponse
     */
    public function createAndBindAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appIconUrl) {
            @$body['AppIconUrl'] = $request->appIconUrl;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->originAppType) {
            @$body['OriginAppType'] = $request->originAppType;
        }

        if (null !== $request->port) {
            @$body['Port'] = $request->port;
        }

        if (null !== $request->urlSuffix) {
            @$body['UrlSuffix'] = $request->urlSuffix;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAndBindApp',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndBindAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application and binds it to a specified image version.
     *
     * @remarks
     * Only custom images and community images that can be managed by the current account are supported. If VersionId is omitted, the current active version of the image is used. If specified, the version must belong to the image specified by ImageId.
     * Call ListImage to select an image first. After the application is created, save the returned AppId, AppVersionId, ImageId, and VersionId. To dissociate the application, call UnbindApp.
     *
     * @param request - CreateAndBindAppRequest
     *
     * @returns CreateAndBindAppResponse
     *
     * @param CreateAndBindAppRequest $request
     *
     * @return CreateAndBindAppResponse
     */
    public function createAndBindApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndBindAppWithOptions($request, $runtime);
    }

    /**
     * Creates a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING CloudApp.
     * A delivery group is a logical grouping for delivering cloud applications to end users. It includes the underlying cloud application resources, images that contain cloud applications, resource management policies, and user allocation settings. For details, see [Publish a delivery group](https://help.aliyun.com/document_detail/426046.html).
     *
     * @param tmpReq - CreateAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceGroupResponse
     *
     * @param CreateAppInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        if (null !== $tmpReq->runtimePolicy) {
            $request->runtimePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runtimePolicy, 'RuntimePolicy', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        if (null !== $tmpReq->userDefinePolicy) {
            $request->userDefinePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userDefinePolicy, 'UserDefinePolicy', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        if (null !== $tmpReq->videoPolicy) {
            $request->videoPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoPolicy, 'VideoPolicy', 'json');
        }

        $query = [];
        if (null !== $request->userDefinePolicyShrink) {
            @$query['UserDefinePolicy'] = $request->userDefinePolicyShrink;
        }

        $body = [];
        if (null !== $request->appCenterImageId) {
            @$body['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$body['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appPackageType) {
            @$body['AppPackageType'] = $request->appPackageType;
        }

        if (null !== $request->appPolicyId) {
            @$body['AppPolicyId'] = $request->appPolicyId;
        }

        if (null !== $request->authMode) {
            @$body['AuthMode'] = $request->authMode;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeResourceMode) {
            @$body['ChargeResourceMode'] = $request->chargeResourceMode;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->nodePoolShrink) {
            @$body['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->preOpenAppId) {
            @$body['PreOpenAppId'] = $request->preOpenAppId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->runtimePolicyShrink) {
            @$body['RuntimePolicy'] = $request->runtimePolicyShrink;
        }

        if (null !== $request->securityPolicyShrink) {
            @$body['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->sessionTimeout) {
            @$body['SessionTimeout'] = $request->sessionTimeout;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        if (null !== $request->subPayType) {
            @$body['SubPayType'] = $request->subPayType;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        if (null !== $request->videoPolicyShrink) {
            @$body['VideoPolicy'] = $request->videoPolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING CloudApp.
     * A delivery group is a logical grouping for delivering cloud applications to end users. It includes the underlying cloud application resources, images that contain cloud applications, resource management policies, and user allocation settings. For details, see [Publish a delivery group](https://help.aliyun.com/document_detail/426046.html).
     *
     * @param request - CreateAppInstanceGroupRequest
     *
     * @returns CreateAppInstanceGroupResponse
     *
     * @param CreateAppInstanceGroupRequest $request
     *
     * @return CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a cloud browser group billed by monthly active users (MAUs).
     *
     * @remarks
     * ## Before you begin
     * - Prepare available office networks, images, and specifications in the target business region, and ensure that your account has the corresponding browser configurations and resource quotas.
     * - Specify CloudBrowserName and BizRegionId. You must set OsType to Windows.
     * - The authorized users must be created in advance and match the account type. The authorized user groups must belong to the current account and match the account type of the office network.
     * - **Users and UserGroupIds cannot be specified at the same time.**
     * ## MAU billing parameters
     * - Set ChargeType to PostPaid.
     * - **You must explicitly set SubPayType to mau. Omitting this parameter does not enable MAU billing.**
     * - Set ChargeResourceMode to AppInstance.
     * - You do not need to specify Period, PeriodUnit, AppPackageType, AutoPay, AutoRenew, or NodePool.
     * ## Post-processing
     * **A successful API response does not indicate that the browser resources are ready.** After creation, query the status of the browser group and use it only after confirming that it is connectable.
     * This operation creates a new cloud browser group. You do not need to create a delivery group in advance.
     * ## Example descriptions
     * Field examples demonstrate how to specify parameters. Replace resource identifiers with actual values under your current account. Capacity examples do not represent default values or upper limits.
     * An example value of - indicates that the parameter is not required. When calling the API, omit the corresponding parameter instead of passing the - character.
     *
     * @param tmpReq - CreateBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBrowserInstanceGroupResponse
     *
     * @param CreateBrowserInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateBrowserInstanceGroupResponse
     */
    public function createBrowserInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBrowserInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->browserConfig) {
            $request->browserConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->browserConfig, 'BrowserConfig', 'json');
        }

        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        if (null !== $tmpReq->timers) {
            $request->timersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timers, 'Timers', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        if (null !== $tmpReq->users) {
            $request->usersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->users, 'Users', 'json');
        }

        $body = [];
        if (null !== $request->appPackageType) {
            @$body['AppPackageType'] = $request->appPackageType;
        }

        if (null !== $request->authNotificationEnabled) {
            @$body['AuthNotificationEnabled'] = $request->authNotificationEnabled;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->browserConfigShrink) {
            @$body['BrowserConfig'] = $request->browserConfigShrink;
        }

        if (null !== $request->chargeResourceMode) {
            @$body['ChargeResourceMode'] = $request->chargeResourceMode;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->cloudBrowserName) {
            @$body['CloudBrowserName'] = $request->cloudBrowserName;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->maxAmount) {
            @$body['MaxAmount'] = $request->maxAmount;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->nodePoolShrink) {
            @$body['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->securityPolicyShrink) {
            @$body['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        if (null !== $request->subPayType) {
            @$body['SubPayType'] = $request->subPayType;
        }

        if (null !== $request->tagShrink) {
            @$body['Tag'] = $request->tagShrink;
        }

        if (null !== $request->timersShrink) {
            @$body['Timers'] = $request->timersShrink;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        if (null !== $request->usersShrink) {
            @$body['Users'] = $request->usersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud browser group billed by monthly active users (MAUs).
     *
     * @remarks
     * ## Before you begin
     * - Prepare available office networks, images, and specifications in the target business region, and ensure that your account has the corresponding browser configurations and resource quotas.
     * - Specify CloudBrowserName and BizRegionId. You must set OsType to Windows.
     * - The authorized users must be created in advance and match the account type. The authorized user groups must belong to the current account and match the account type of the office network.
     * - **Users and UserGroupIds cannot be specified at the same time.**
     * ## MAU billing parameters
     * - Set ChargeType to PostPaid.
     * - **You must explicitly set SubPayType to mau. Omitting this parameter does not enable MAU billing.**
     * - Set ChargeResourceMode to AppInstance.
     * - You do not need to specify Period, PeriodUnit, AppPackageType, AutoPay, AutoRenew, or NodePool.
     * ## Post-processing
     * **A successful API response does not indicate that the browser resources are ready.** After creation, query the status of the browser group and use it only after confirming that it is connectable.
     * This operation creates a new cloud browser group. You do not need to create a delivery group in advance.
     * ## Example descriptions
     * Field examples demonstrate how to specify parameters. Replace resource identifiers with actual values under your current account. Capacity examples do not represent default values or upper limits.
     * An example value of - indicates that the parameter is not required. When calling the API, omit the corresponding parameter instead of passing the - character.
     *
     * @param request - CreateBrowserInstanceGroupRequest
     *
     * @returns CreateBrowserInstanceGroupResponse
     *
     * @param CreateBrowserInstanceGroupRequest $request
     *
     * @return CreateBrowserInstanceGroupResponse
     */
    public function createBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an asynchronous export task to export the WUYING server list, user usage report, cloud browser bookmarks, or URL whitelist.
     *
     * @remarks
     * Creates an export task and returns the task ID and initial status. The exported file is not returned synchronously.
     * After the task is created, save the TaskId and call DescribeExportTasks to query the task status and progress. We recommend a polling interval of 5 to 10 seconds. If the status is FINISHED, use the DownloadUrl in the latest query result to download the XLSX file. If the status is FAILED, check the ErrorMsg and stop polling.
     * The task is valid for 24 hours after creation. The download URL has an independent signature validity period of up to 1 hour, which does not exceed the remaining validity period of the task. Query the latest URL before downloading. You cannot obtain a valid download URL after the task expires.
     * The WUYING server list export only accepts the filter fields listed in QueryParamJson. Pagination is controlled by the server, and a single task can export up to 100,000 records. The cloud browser bookmarks and URL whitelist exports retrieve the complete list of the target delivery group, which is not affected by the list search terms or the current page. The ownership and product type of the delivery group are verified before execution. Data is read in pages during execution, and no consistent snapshot is provided. A successful creation does not guarantee that subsequent verification, query, or file generation will succeed.
     *
     * @param request - CreateExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExportTaskResponse
     *
     * @param CreateExportTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExportTaskResponse
     */
    public function createExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exportFields) {
            @$body['ExportFields'] = $request->exportFields;
        }

        if (null !== $request->queryParamJson) {
            @$body['QueryParamJson'] = $request->queryParamJson;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExportTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an asynchronous export task to export the WUYING server list, user usage report, cloud browser bookmarks, or URL whitelist.
     *
     * @remarks
     * Creates an export task and returns the task ID and initial status. The exported file is not returned synchronously.
     * After the task is created, save the TaskId and call DescribeExportTasks to query the task status and progress. We recommend a polling interval of 5 to 10 seconds. If the status is FINISHED, use the DownloadUrl in the latest query result to download the XLSX file. If the status is FAILED, check the ErrorMsg and stop polling.
     * The task is valid for 24 hours after creation. The download URL has an independent signature validity period of up to 1 hour, which does not exceed the remaining validity period of the task. Query the latest URL before downloading. You cannot obtain a valid download URL after the task expires.
     * The WUYING server list export only accepts the filter fields listed in QueryParamJson. Pagination is controlled by the server, and a single task can export up to 100,000 records. The cloud browser bookmarks and URL whitelist exports retrieve the complete list of the target delivery group, which is not affected by the list search terms or the current page. The ownership and product type of the delivery group are verified before execution. Data is read in pages during execution, and no consistent snapshot is provided. A successful creation does not guarantee that subsequent verification, query, or file generation will succeed.
     *
     * @param request - CreateExportTaskRequest
     *
     * @returns CreateExportTaskResponse
     *
     * @param CreateExportTaskRequest $request
     *
     * @return CreateExportTaskResponse
     */
    public function createExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExportTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a custom image from a deployed WUYING instance. You can use the custom image to quickly create more WUYING instances with the same configurations, without having to repeatedly configure the instance environment each time.
     *
     * @param request - CreateImageByInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageByInstanceResponse
     *
     * @param CreateImageByInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateImageByInstanceResponse
     */
    public function createImageByInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        $body = [];
        if (null !== $request->autoCleanUserdata) {
            @$body['AutoCleanUserdata'] = $request->autoCleanUserdata;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->copyProfile) {
            @$body['CopyProfile'] = $request->copyProfile;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->diskType) {
            @$body['DiskType'] = $request->diskType;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->subInstanceId) {
            @$body['SubInstanceId'] = $request->subInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageByInstance',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom image from a deployed WUYING instance. You can use the custom image to quickly create more WUYING instances with the same configurations, without having to repeatedly configure the instance environment each time.
     *
     * @param request - CreateImageByInstanceRequest
     *
     * @returns CreateImageByInstanceResponse
     *
     * @param CreateImageByInstanceRequest $request
     *
     * @return CreateImageByInstanceResponse
     */
    public function createImageByInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageByInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a new image by debugging a delivery group.
     *
     * @param request - CreateImageFromAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageFromAppInstanceGroupResponse
     *
     * @param CreateImageFromAppInstanceGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateImageFromAppInstanceGroupResponse
     */
    public function createImageFromAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appCenterImageName) {
            @$body['AppCenterImageName'] = $request->appCenterImageName;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageFromAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageFromAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new image by debugging a delivery group.
     *
     * @param request - CreateImageFromAppInstanceGroupRequest
     *
     * @returns CreateImageFromAppInstanceGroupResponse
     *
     * @param CreateImageFromAppInstanceGroupRequest $request
     *
     * @return CreateImageFromAppInstanceGroupResponse
     */
    public function createImageFromAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageFromAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a model provider template for model creation.
     *
     * @remarks
     * You can create a model provider template for model creation under the model templates in the Wuying Agent Management Center to configure the connection information and keys for model services (such as Alibaba Cloud Bailian, Token Plan, and Moonshot AI) that can be invoked by agents. The created model provider template is automatically associated with the specified model template.
     * Make sure that you fully understand the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - CreateModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelProviderTemplateResponse
     *
     * @param CreateModelProviderTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateModelProviderTemplateResponse
     */
    public function createModelProviderTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableWuyingProxy) {
            @$query['EnableWuyingProxy'] = $request->enableWuyingProxy;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        if (null !== $request->providerType) {
            @$query['ProviderType'] = $request->providerType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model provider template for model creation.
     *
     * @remarks
     * You can create a model provider template for model creation under the model templates in the Wuying Agent Management Center to configure the connection information and keys for model services (such as Alibaba Cloud Bailian, Token Plan, and Moonshot AI) that can be invoked by agents. The created model provider template is automatically associated with the specified model template.
     * Make sure that you fully understand the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - CreateModelProviderTemplateRequest
     *
     * @returns CreateModelProviderTemplateResponse
     *
     * @param CreateModelProviderTemplateRequest $request
     *
     * @return CreateModelProviderTemplateResponse
     */
    public function createModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a model template.
     *
     * @remarks
     * You can create a model group in the Wuying Agent Management Center to manage the model providers and model scope that an Agent can invoke. After model creation, you can attach the model group to a cloud computer as the inference engine configuration for Agent task execution.
     * Make sure that you are familiar with the operations and usage of the Wuying Agent Management Center before invoking this operation.
     *
     * @param request - CreateModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelTemplateResponse
     *
     * @param CreateModelTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModelTemplateResponse
     */
    public function createModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->refScope) {
            @$query['RefScope'] = $request->refScope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model template.
     *
     * @remarks
     * You can create a model group in the Wuying Agent Management Center to manage the model providers and model scope that an Agent can invoke. After model creation, you can attach the model group to a cloud computer as the inference engine configuration for Agent task execution.
     * Make sure that you are familiar with the operations and usage of the Wuying Agent Management Center before invoking this operation.
     *
     * @param request - CreateModelTemplateRequest
     *
     * @returns CreateModelTemplateResponse
     *
     * @param CreateModelTemplateRequest $request
     *
     * @return CreateModelTemplateResponse
     */
    public function createModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates one or more workstations.
     *
     * @remarks
     * 1. A project corresponds to the resource configuration module in the CloudFlow console.
     * 2. When the ContentId input parameter has multiple versions, this API <notice>uses the default version</notice> and bindss it at the same time.
     * 3. This operation succeeds only when the default version of the Content is in an available state.
     *
     * @param request - CreateWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWuyingServerResponse
     *
     * @param CreateWuyingServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateWuyingServerResponse
     */
    public function createWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['Amount'] = $request->amount;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        $bodyFlat = [];
        if (null !== $request->dataDisk) {
            @$bodyFlat['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->erdmaEnabled) {
            @$body['ErdmaEnabled'] = $request->erdmaEnabled;
        }

        if (null !== $request->gpuDriverVersion) {
            @$body['GpuDriverVersion'] = $request->gpuDriverVersion;
        }

        if (null !== $request->hostName) {
            @$body['HostName'] = $request->hostName;
        }

        if (null !== $request->idempotenceToken) {
            @$body['IdempotenceToken'] = $request->idempotenceToken;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->maxPrice) {
            @$body['MaxPrice'] = $request->maxPrice;
        }

        if (null !== $request->networkStrategyType) {
            @$body['NetworkStrategyType'] = $request->networkStrategyType;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->savingPlanId) {
            @$body['SavingPlanId'] = $request->savingPlanId;
        }

        if (null !== $request->serverInstanceType) {
            @$body['ServerInstanceType'] = $request->serverInstanceType;
        }

        if (null !== $request->serverPortRange) {
            @$body['ServerPortRange'] = $request->serverPortRange;
        }

        if (null !== $request->subPayType) {
            @$body['SubPayType'] = $request->subPayType;
        }

        if (null !== $request->systemDiskCategory) {
            @$body['SystemDiskCategory'] = $request->systemDiskCategory;
        }

        if (null !== $request->systemDiskPerformanceLevel) {
            @$body['SystemDiskPerformanceLevel'] = $request->systemDiskPerformanceLevel;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->vSwitchIds) {
            @$body['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->virtualNodePoolId) {
            @$body['VirtualNodePoolId'] = $request->virtualNodePoolId;
        }

        if (null !== $request->wuyingServerName) {
            @$body['WuyingServerName'] = $request->wuyingServerName;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates one or more workstations.
     *
     * @remarks
     * 1. A project corresponds to the resource configuration module in the CloudFlow console.
     * 2. When the ContentId input parameter has multiple versions, this API <notice>uses the default version</notice> and bindss it at the same time.
     * 3. This operation succeeds only when the default version of the Content is in an available state.
     *
     * @param request - CreateWuyingServerRequest
     *
     * @returns CreateWuyingServerResponse
     *
     * @param CreateWuyingServerRequest $request
     *
     * @return CreateWuyingServerResponse
     */
    public function createWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified application adaptation, or dissociates the adaptation from a specified image version.
     *
     * @remarks
     * *Confirm the deletion scope first.**
     * - If both ImageId and VersionId are specified: only the association between the adaptation and the specified image version is dissociated.
     * - If ImageId and VersionId are not both specified: the adaptation deletion process starts. The adaptation cannot be deleted if it is still referenced by multiple images. If the application still has other adaptations, the application cannot be deleted along with it.
     * **AdaptorId, AppVersionId, and AppId must be provided together and correspond to the same application adaptation.** Verify these identifiers by querying the application and image first.
     *
     * @param request - DeleteAdaptorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAdaptorResponse
     *
     * @param DeleteAdaptorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAdaptorResponse
     */
    public function deleteAdaptorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adaptorId) {
            @$body['AdaptorId'] = $request->adaptorId;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appVersionId) {
            @$body['AppVersionId'] = $request->appVersionId;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAdaptor',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAdaptorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified application adaptation, or dissociates the adaptation from a specified image version.
     *
     * @remarks
     * *Confirm the deletion scope first.**
     * - If both ImageId and VersionId are specified: only the association between the adaptation and the specified image version is dissociated.
     * - If ImageId and VersionId are not both specified: the adaptation deletion process starts. The adaptation cannot be deleted if it is still referenced by multiple images. If the application still has other adaptations, the application cannot be deleted along with it.
     * **AdaptorId, AppVersionId, and AppId must be provided together and correspond to the same application adaptation.** Verify these identifiers by querying the application and image first.
     *
     * @param request - DeleteAdaptorRequest
     *
     * @returns DeleteAdaptorResponse
     *
     * @param DeleteAdaptorRequest $request
     *
     * @return DeleteAdaptorResponse
     */
    public function deleteAdaptor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAdaptorWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified application version, or deletes the entire application and its adapters if the version ID is omitted.
     *
     * @remarks
     * *You must dissociate all image associations from the target application or version before deletion.**
     * 1. Call ListApp to obtain the AppId and confirm whether the application can be deleted.
     * 2. Use UnbindApp or DeleteAdaptor to dissociate the related image associations.
     * 3. Specify AppVersionId to delete a single application version, or omit this parameter to delete the entire application.
     * After an application version is deleted, if the application has no other valid adapters, the application record is also deleted.
     *
     * @param request - DeleteAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appVersionId) {
            @$body['AppVersionId'] = $request->appVersionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApp',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified application version, or deletes the entire application and its adapters if the version ID is omitted.
     *
     * @remarks
     * *You must dissociate all image associations from the target application or version before deletion.**
     * 1. Call ListApp to obtain the AppId and confirm whether the application can be deleted.
     * 2. Use UnbindApp or DeleteAdaptor to dissociate the related image associations.
     * 3. Specify AppVersionId to delete a single application version, or omit this parameter to delete the entire application.
     * After an application version is deleted, if the application has no other valid adapters, the application record is also deleted.
     *
     * @param request - DeleteAppRequest
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * Deletes a resource-based pay-as-you-go delivery group.
     *
     * @remarks
     * > This operation does not support deleting delivery groups that use subscription resources.
     *
     * @param request - DeleteAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInstanceGroupResponse
     *
     * @param DeleteAppInstanceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAppInstanceGroupResponse
     */
    public function deleteAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource-based pay-as-you-go delivery group.
     *
     * @remarks
     * > This operation does not support deleting delivery groups that use subscription resources.
     *
     * @param request - DeleteAppInstanceGroupRequest
     *
     * @returns DeleteAppInstanceGroupResponse
     *
     * @param DeleteAppInstanceGroupRequest $request
     *
     * @return DeleteAppInstanceGroupResponse
     */
    public function deleteAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes specified application instances.
     *
     * @remarks
     * Only instances in the initializing or idle state can be deleted. This operation is available only to specific customers.
     *
     * @param request - DeleteAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInstancesResponse
     *
     * @param DeleteAppInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAppInstancesResponse
     */
    public function deleteAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceIds) {
            @$body['AppInstanceIds'] = $request->appInstanceIds;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAppInstances',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes specified application instances.
     *
     * @remarks
     * Only instances in the initializing or idle state can be deleted. This operation is available only to specific customers.
     *
     * @param request - DeleteAppInstancesRequest
     *
     * @returns DeleteAppInstancesResponse
     *
     * @param DeleteAppInstancesRequest $request
     *
     * @return DeleteAppInstancesResponse
     */
    public function deleteAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom WUYING image.
     *
     * @remarks
     * - Only custom images that belong to your account can be deleted.
     * - For images associated with WUYING Workspace pools, WUYING Cloud Apps, or WUYING Workstations, ensure that no WUYING instances are using the image before you delete it.
     * - If a WUYING Cloud Desktop template references the image, the template is also deleted when you delete the image.
     * - If the image is available in multiple regions, deleting the image removes it from all regions.
     *
     * @param request - DeleteImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom WUYING image.
     *
     * @remarks
     * - Only custom images that belong to your account can be deleted.
     * - For images associated with WUYING Workspace pools, WUYING Cloud Apps, or WUYING Workstations, ensure that no WUYING instances are using the image before you delete it.
     * - If a WUYING Cloud Desktop template references the image, the template is also deleted when you delete the image.
     * - If the image is available in multiple regions, deleting the image removes it from all regions.
     *
     * @param request - DeleteImageRequest
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * Deletes an LLM template.
     *
     * @remarks
     * You can delete a model template created under a model service provider template in the Wuying Agent Management Center. Before you delete the template, make sure that the model is not the default model of an associated model group. Otherwise, the deletion fails. After the deletion, the model configurations of associated cloud computers are automatically refreshed. Make sure that you fully understand the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - DeleteLlmTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLlmTemplateResponse
     *
     * @param DeleteLlmTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteLlmTemplateResponse
     */
    public function deleteLlmTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->llmTemplateId) {
            @$query['LlmTemplateId'] = $request->llmTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLlmTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLlmTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an LLM template.
     *
     * @remarks
     * You can delete a model template created under a model service provider template in the Wuying Agent Management Center. Before you delete the template, make sure that the model is not the default model of an associated model group. Otherwise, the deletion fails. After the deletion, the model configurations of associated cloud computers are automatically refreshed. Make sure that you fully understand the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - DeleteLlmTemplateRequest
     *
     * @returns DeleteLlmTemplateResponse
     *
     * @param DeleteLlmTemplateRequest $request
     *
     * @return DeleteLlmTemplateResponse
     */
    public function deleteLlmTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLlmTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a model provider template.
     *
     * @remarks
     * You can delete a model provider template created under model templates in the Wuying Agent Management Center. Before deletion, ensure that the model provider is not the provider of the default model and is not a system-preset provider, such as the Wuying credit package. After deletion, the associated models and key configurations are also cleared.
     * Make sure that you fully understand the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - DeleteModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelProviderTemplateResponse
     *
     * @param DeleteModelProviderTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteModelProviderTemplateResponse
     */
    public function deleteModelProviderTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model provider template.
     *
     * @remarks
     * You can delete a model provider template created under model templates in the Wuying Agent Management Center. Before deletion, ensure that the model provider is not the provider of the default model and is not a system-preset provider, such as the Wuying credit package. After deletion, the associated models and key configurations are also cleared.
     * Make sure that you fully understand the operations and usage of the Wuying Agent Management Center before you call this operation.
     *
     * @param request - DeleteModelProviderTemplateRequest
     *
     * @returns DeleteModelProviderTemplateResponse
     *
     * @param DeleteModelProviderTemplateRequest $request
     *
     * @return DeleteModelProviderTemplateResponse
     */
    public function deleteModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a model template.
     *
     * @remarks
     * You can delete a model group created in the Wuying Agent Management Center. Before you delete the model group, make sure that the template is not authorized for any resources. Otherwise, the deletion fails. After the model group is deleted, the model providers and models in the model group are also removed.
     * Before you call this operation, make sure that you fully understand the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - DeleteModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelTemplateResponse
     *
     * @param DeleteModelTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteModelTemplateResponse
     */
    public function deleteModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model template.
     *
     * @remarks
     * You can delete a model group created in the Wuying Agent Management Center. Before you delete the model group, make sure that the template is not authorized for any resources. Otherwise, the deletion fails. After the model group is deleted, the model providers and models in the model group are also removed.
     * Before you call this operation, make sure that you fully understand the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - DeleteModelTemplateRequest
     *
     * @returns DeleteModelTemplateResponse
     *
     * @param DeleteModelTemplateRequest $request
     *
     * @return DeleteModelTemplateResponse
     */
    public function deleteModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a workstation.
     *
     * @remarks
     * Deletes a workstation.
     *
     * @param request - DeleteWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWuyingServerResponse
     *
     * @param DeleteWuyingServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteWuyingServerResponse
     */
    public function deleteWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workstation.
     *
     * @remarks
     * Deletes a workstation.
     *
     * @param request - DeleteWuyingServerRequest
     *
     * @returns DeleteWuyingServerResponse
     *
     * @param DeleteWuyingServerRequest $request
     *
     * @return DeleteWuyingServerResponse
     */
    public function deleteWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Configures SLS log delivery.
     *
     * @param request - DeliverToUserSlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeliverToUserSlsResponse
     *
     * @param DeliverToUserSlsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeliverToUserSlsResponse
     */
    public function deliverToUserSlsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deliveryScopes) {
            @$bodyFlat['DeliveryScopes'] = $request->deliveryScopes;
        }

        if (null !== $request->existedProjectName) {
            @$body['ExistedProjectName'] = $request->existedProjectName;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->slsRegionId) {
            @$body['SlsRegionId'] = $request->slsRegionId;
        }

        if (null !== $request->ttl) {
            @$body['Ttl'] = $request->ttl;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeliverToUserSls',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeliverToUserSlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures SLS log delivery.
     *
     * @param request - DeliverToUserSlsRequest
     *
     * @returns DeliverToUserSlsResponse
     *
     * @param DeliverToUserSlsRequest $request
     *
     * @return DeliverToUserSlsResponse
     */
    public function deliverToUserSls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deliverToUserSlsWithOptions($request, $runtime);
    }

    /**
     * Performs a paged query for the resource and session events of the current account within the last 30 days. Paging is supported.
     *
     * @remarks
     * Queries the resource and session events of the current account. Both StartTime and EndTime must be specified, and the time range is inclusive. The service only retrieves logs from 30 days before the call time to the current time, so events outside this window are not returned. If multiple filter parameters are specified, the intersection of the conditions is applied. The results are returned in descending order of the event log time. For pagination, specify PageSize and PageNumber. The current version does not use MaxResults and NextToken.
     *
     * @param request - DescribeEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$body['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->eventType) {
            @$body['EventType'] = $request->eventType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->memberEniIp) {
            @$body['MemberEniIp'] = $request->memberEniIp;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeEvents',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query for the resource and session events of the current account within the last 30 days. Paging is supported.
     *
     * @remarks
     * Queries the resource and session events of the current account. Both StartTime and EndTime must be specified, and the time range is inclusive. The service only retrieves logs from 30 days before the call time to the current time, so events outside this window are not returned. If multiple filter parameters are specified, the intersection of the conditions is applied. The results are returned in descending order of the event log time. For pagination, specify PageSize and PageNumber. The current version does not use MaxResults and NextToken.
     *
     * @param request - DescribeEventsRequest
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the execution status, progress, and download URLs of export tasks by paging.
     *
     * @remarks
     * You can call this operation to query export tasks under the current Alibaba Cloud account by paging, and obtain the task status, execution progress, export file name, and download URL. Export tasks are created by calling CreateExportTask. This operation only reads task information and does not create, modify, or retry tasks.
     * The query results are returned in descending order of task creation time, with the most recently created tasks listed first. Only tasks in the INIT, RUNNING, FINISHED, and FAILED states are returned. Tasks marked as EXPIRED are not included in the results.
     * When polling a single task by TaskId, set PageNumber to 1 and PageSize to 1, set the polling interval to 5 to 10 seconds, and stop polling after the task enters the FINISHED or FAILED state.
     * A task is valid for 24 hours after creation and is marked as expired by a background task after 25 hours. Therefore, within the 24- to 25-hour window, you may still query a FINISHED task, but the DownloadUrl is empty. After a task is marked as expired, the query result is an empty array.
     * If the query result is an empty array, it may be because there are no visible tasks under the current account, the task type does not match, the page number is out of bounds, or the tasks have expired. This operation always returns an array structure and does not return an error when the query result is empty.
     * The DownloadUrl is an OSS pre-signed URL. The default maximum validity period is 1 hour and does not exceed the remaining validity period of the task. The server automatically refreshes the URL when it is about to expire. Use the URL returned by the most recent query for downloading and do not cache the initially returned URL for a long time.
     *
     * @param request - DescribeExportTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExportTasksResponse
     *
     * @param DescribeExportTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeExportTasksResponse
     */
    public function describeExportTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExportTasks',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution status, progress, and download URLs of export tasks by paging.
     *
     * @remarks
     * You can call this operation to query export tasks under the current Alibaba Cloud account by paging, and obtain the task status, execution progress, export file name, and download URL. Export tasks are created by calling CreateExportTask. This operation only reads task information and does not create, modify, or retry tasks.
     * The query results are returned in descending order of task creation time, with the most recently created tasks listed first. Only tasks in the INIT, RUNNING, FINISHED, and FAILED states are returned. Tasks marked as EXPIRED are not included in the results.
     * When polling a single task by TaskId, set PageNumber to 1 and PageSize to 1, set the polling interval to 5 to 10 seconds, and stop polling after the task enters the FINISHED or FAILED state.
     * A task is valid for 24 hours after creation and is marked as expired by a background task after 25 hours. Therefore, within the 24- to 25-hour window, you may still query a FINISHED task, but the DownloadUrl is empty. After a task is marked as expired, the query result is an empty array.
     * If the query result is an empty array, it may be because there are no visible tasks under the current account, the task type does not match, the page number is out of bounds, or the tasks have expired. This operation always returns an array structure and does not return an error when the query result is empty.
     * The DownloadUrl is an OSS pre-signed URL. The default maximum validity period is 1 hour and does not exceed the remaining validity period of the task. The server automatically refreshes the URL when it is about to expire. Use the URL returned by the most recent query for downloading and do not cache the initially returned URL for a long time.
     *
     * @param request - DescribeExportTasksRequest
     *
     * @returns DescribeExportTasksResponse
     *
     * @param DescribeExportTasksRequest $request
     *
     * @return DescribeExportTasksResponse
     */
    public function describeExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a development host.
     *
     * @param request - DescribeWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWuyingServerResponse
     *
     * @param DescribeWuyingServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeWuyingServerResponse
     */
    public function describeWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a development host.
     *
     * @param request - DescribeWuyingServerRequest
     *
     * @returns DescribeWuyingServerResponse
     *
     * @param DescribeWuyingServerRequest $request
     *
     * @return DescribeWuyingServerResponse
     */
    public function describeWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Queries the Elastic IP Address (EIP) information of a Wuying workspace.
     *
     * @param request - DescribeWuyingServerEipInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWuyingServerEipInfoResponse
     *
     * @param DescribeWuyingServerEipInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeWuyingServerEipInfoResponse
     */
    public function describeWuyingServerEipInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isp) {
            @$body['Isp'] = $request->isp;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeWuyingServerEipInfo',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWuyingServerEipInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Elastic IP Address (EIP) information of a Wuying workspace.
     *
     * @param request - DescribeWuyingServerEipInfoRequest
     *
     * @returns DescribeWuyingServerEipInfoResponse
     *
     * @param DescribeWuyingServerEipInfoRequest $request
     *
     * @return DescribeWuyingServerEipInfoResponse
     */
    public function describeWuyingServerEipInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWuyingServerEipInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of runtimes of a specified type under the current Alibaba Cloud account, grouped by agent platform and agent provider, including the total count, the count of runtimes without model configurations, the count of runtimes without channel configurations, the count of risky runtimes, and the count of expired runtimes.
     *
     * @param request - GetAgentRuntimeStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentRuntimeStatisticResponse
     *
     * @param GetAgentRuntimeStatisticRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAgentRuntimeStatisticResponse
     */
    public function getAgentRuntimeStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->runtimeType) {
            @$query['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentRuntimeStatistic',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentRuntimeStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of runtimes of a specified type under the current Alibaba Cloud account, grouped by agent platform and agent provider, including the total count, the count of runtimes without model configurations, the count of runtimes without channel configurations, the count of risky runtimes, and the count of expired runtimes.
     *
     * @param request - GetAgentRuntimeStatisticRequest
     *
     * @returns GetAgentRuntimeStatisticResponse
     *
     * @param GetAgentRuntimeStatisticRequest $request
     *
     * @return GetAgentRuntimeStatisticResponse
     */
    public function getAgentRuntimeStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentRuntimeStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified delivery group.
     *
     * @param request - GetAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInstanceGroupResponse
     *
     * @param GetAppInstanceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAppInstanceGroupResponse
     */
    public function getAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified delivery group.
     *
     * @param request - GetAppInstanceGroupRequest
     *
     * @returns GetAppInstanceGroupResponse
     *
     * @param GetAppInstanceGroupRequest $request
     *
     * @return GetAppInstanceGroupResponse
     */
    public function getAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Retrieves the connection authorization code and required resource information for an existing image or application creation task.
     *
     * @remarks
     * Before calling this operation, you must create a task, and the creation or validation resources corresponding to the task must be available.
     * 1. Obtain the TaskId and actual TaskType from the response of the task creation operation or GetTask.
     * 2. Specify ResourceType to obtain the connection information for the creation or validation environment.
     * 3. Use the returned authorization code along with the user, resource group, and application identifiers in the same response for connection.
     * The authorization code is a sensitive connection credential. Do not record it in public documents or logs. When specifying AppId, you must also specify the matching AppVersionId.
     *
     * @param request - GetAuthCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthCodeResponse
     *
     * @param GetAuthCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAuthCodeResponse
     */
    public function getAuthCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appVersionId) {
            @$body['AppVersionId'] = $request->appVersionId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAuthCode',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the connection authorization code and required resource information for an existing image or application creation task.
     *
     * @remarks
     * Before calling this operation, you must create a task, and the creation or validation resources corresponding to the task must be available.
     * 1. Obtain the TaskId and actual TaskType from the response of the task creation operation or GetTask.
     * 2. Specify ResourceType to obtain the connection information for the creation or validation environment.
     * 3. Use the returned authorization code along with the user, resource group, and application identifiers in the same response for connection.
     * The authorization code is a sensitive connection credential. Do not record it in public documents or logs. When specifying AppId, you must also specify the matching AppVersionId.
     *
     * @param request - GetAuthCodeRequest
     *
     * @returns GetAuthCodeResponse
     *
     * @param GetAuthCodeRequest $request
     *
     * @return GetAuthCodeResponse
     */
    public function getAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthCodeWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration, status, and authorization statistics of a specified cloud browser group.
     *
     * @remarks
     * This topic describes how to use the query operation in the monthly active user (MAU) billing scenario.
     * ## Before you begin
     * Obtain the ID of a cloud browser group within the current account. You can call `ListBrowserInstanceGroup` to obtain the ID.
     * ## Response content
     * Returns the current configuration, status, and authorization statistics of the browser group. The bookmark and website access lists in the details return up to the first 20 entries each. To query the complete lists, call `ListBrowserBookmarks` and `ListBrowserRestrictedURLs` respectively.
     * ## What to do next
     * This operation only queries the configuration and does not modify resources. After reading the returned status, perform connection or management operations that match the status.
     * ## Example description
     * In the examples, `-` indicates that the current scenario does not apply or the field is not returned. It is not a string actually returned by the operation. Examples of common resource IDs are masked. Use the actual query results.
     *
     * @param request - GetBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBrowserInstanceGroupResponse
     *
     * @param GetBrowserInstanceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBrowserInstanceGroupResponse
     */
    public function getBrowserInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration, status, and authorization statistics of a specified cloud browser group.
     *
     * @remarks
     * This topic describes how to use the query operation in the monthly active user (MAU) billing scenario.
     * ## Before you begin
     * Obtain the ID of a cloud browser group within the current account. You can call `ListBrowserInstanceGroup` to obtain the ID.
     * ## Response content
     * Returns the current configuration, status, and authorization statistics of the browser group. The bookmark and website access lists in the details return up to the first 20 entries each. To query the complete lists, call `ListBrowserBookmarks` and `ListBrowserRestrictedURLs` respectively.
     * ## What to do next
     * This operation only queries the configuration and does not modify resources. After reading the returned status, perform connection or management operations that match the status.
     * ## Example description
     * In the examples, `-` indicates that the current scenario does not apply or the field is not returned. It is not a string actually returned by the operation. Examples of common resource IDs are masked. Use the actual query results.
     *
     * @param request - GetBrowserInstanceGroupRequest
     *
     * @returns GetBrowserInstanceGroupResponse
     *
     * @param GetBrowserInstanceGroupRequest $request
     *
     * @return GetBrowserInstanceGroupResponse
     */
    public function getBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Retrieves the connection credential for a cloud application.
     *
     * @remarks
     * Call protocol description: operation_type: polling, required_steps: 1.
     * This operation may require multiple calls (at least one) to obtain the connection credential.
     * On the first call, an application instance is allocated to the specified convenience account and the application is started. If a Ticket is returned, the result is obtained synchronously. If a startup task ID (`TaskId`) is returned, subsequent calls are required.
     * On subsequent calls, include the `TaskId` request parameter to invoke the operation and query whether the node is complete. When the returned node status (`TaskStatus`) is completed (`Finished`), the connection credential (`Ticket`) is also returned.
     * > Prerequisites
     * > - Before calling this operation, make sure that you have created a delivery group and authorized users for the delivery group:
     * > - 1. The API for creating a delivery group is CreateAppInstanceGroup. For more information about the parameters, see the corresponding API documentation.
     * > - 2. You can call the ListAppInstanceGroup operation to query the list of delivery groups. If the corresponding delivery group is not found, verify that the delivery group has been created and that the authentication credentials belong to the correct tenant.
     * > - 3. The API for authorizing users for a delivery group is AuthorizeInstanceGroup. For more information about the parameters, see the corresponding API documentation.
     *
     * @param request - GetConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessType) {
            @$body['AccessType'] = $request->accessType;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupIdList) {
            @$body['AppInstanceGroupIdList'] = $request->appInstanceGroupIdList;
        }

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        if (null !== $request->appPolicyId) {
            @$body['AppPolicyId'] = $request->appPolicyId;
        }

        if (null !== $request->appStartParam) {
            @$body['AppStartParam'] = $request->appStartParam;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->environmentConfig) {
            @$body['EnvironmentConfig'] = $request->environmentConfig;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetConnectionTicket',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the connection credential for a cloud application.
     *
     * @remarks
     * Call protocol description: operation_type: polling, required_steps: 1.
     * This operation may require multiple calls (at least one) to obtain the connection credential.
     * On the first call, an application instance is allocated to the specified convenience account and the application is started. If a Ticket is returned, the result is obtained synchronously. If a startup task ID (`TaskId`) is returned, subsequent calls are required.
     * On subsequent calls, include the `TaskId` request parameter to invoke the operation and query whether the node is complete. When the returned node status (`TaskStatus`) is completed (`Finished`), the connection credential (`Ticket`) is also returned.
     * > Prerequisites
     * > - Before calling this operation, make sure that you have created a delivery group and authorized users for the delivery group:
     * > - 1. The API for creating a delivery group is CreateAppInstanceGroup. For more information about the parameters, see the corresponding API documentation.
     * > - 2. You can call the ListAppInstanceGroup operation to query the list of delivery groups. If the corresponding delivery group is not found, verify that the delivery group has been created and that the authentication credentials belong to the correct tenant.
     * > - 3. The API for authorizing users for a delivery group is AuthorizeInstanceGroup. For more information about the parameters, see the corresponding API documentation.
     *
     * @param request - GetConnectionTicketRequest
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * Retrieves the information about a debug application instance.
     *
     * @param request - GetDebugAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDebugAppInstanceResponse
     *
     * @param GetDebugAppInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDebugAppInstanceResponse
     */
    public function getDebugAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDebugAppInstance',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDebugAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the information about a debug application instance.
     *
     * @param request - GetDebugAppInstanceRequest
     *
     * @returns GetDebugAppInstanceResponse
     *
     * @param GetDebugAppInstanceRequest $request
     *
     * @return GetDebugAppInstanceResponse
     */
    public function getDebugAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDebugAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Retrieves file upload information.
     *
     * @remarks
     * Visitor information is filled in on the lead capture page when visitors execute a cloud flow. Therefore, the usage mode of cloud applications does not generate visitor information.
     *
     * @param request - GetFileUploadInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileUploadInfoResponse
     *
     * @param GetFileUploadInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFileUploadInfoResponse
     */
    public function getFileUploadInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileUploadInfo',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves file upload information.
     *
     * @remarks
     * Visitor information is filled in on the lead capture page when visitors execute a cloud flow. Therefore, the usage mode of cloud applications does not generate visitor information.
     *
     * @param request - GetFileUploadInfoRequest
     *
     * @returns GetFileUploadInfoResponse
     *
     * @param GetFileUploadInfoRequest $request
     *
     * @return GetFileUploadInfoResponse
     */
    public function getFileUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileUploadInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a model provider template.
     *
     * @remarks
     * You can query the details of a specified model provider template in the WUYING Agent Management Center, including the provider name, description, and connection configuration list.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - GetModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelProviderTemplateResponse
     *
     * @param GetModelProviderTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetModelProviderTemplateResponse
     */
    public function getModelProviderTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a model provider template.
     *
     * @remarks
     * You can query the details of a specified model provider template in the WUYING Agent Management Center, including the provider name, description, and connection configuration list.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - GetModelProviderTemplateRequest
     *
     * @returns GetModelProviderTemplateResponse
     *
     * @param GetModelProviderTemplateRequest $request
     *
     * @return GetModelProviderTemplateResponse
     */
    public function getModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Retrieves the authentication credentials, access endpoints, and topic list required for a client to establish an MQTT connection.
     *
     * @remarks
     * Call this operation to retrieve the credentials and connection information required for a client to establish an MQTT connection.
     * 1. Use `MqttUsername` and `MqttPassword` as the username and password for the MQTT client connection.
     * 2. Use `MqttEndpoint` as the connection endpoint. If the VPC network access requirements are met, you can use `MqttVPCEndpoint`. `MqttInstanceId` is used for token authentication, and `MqttGroupId` is used to concatenate the MQTT ClientId.
     * 3. Distinguish between publish and subscribe topics based on the `topic`, `type`, and `permission` of each item in `TopicList`. `W` indicates the publish permission, and `R` indicates the subscribe permission.
     * 4. `ExpireTimeStamp` is the UNIX timestamp in milliseconds when the password expires. Credentials may be reused. Retrieve new credentials based on the expiration time returned by the operation.
     * The device identity and request IDs in the documentation are demo data. The domain name uses the `example.com` sample domain. Credentials and instance identity are exemplified or desensitized. These examples cannot be used directly for actual connections.
     *
     * @param tmpReq - GetMqttTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMqttTicketResponse
     *
     * @param GetMqttTicketRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetMqttTicketResponse
     */
    public function getMqttTicketWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMqttTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->properties) {
            $request->propertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }

        $body = [];
        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->propertiesShrink) {
            @$body['Properties'] = $request->propertiesShrink;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMqttTicket',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMqttTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the authentication credentials, access endpoints, and topic list required for a client to establish an MQTT connection.
     *
     * @remarks
     * Call this operation to retrieve the credentials and connection information required for a client to establish an MQTT connection.
     * 1. Use `MqttUsername` and `MqttPassword` as the username and password for the MQTT client connection.
     * 2. Use `MqttEndpoint` as the connection endpoint. If the VPC network access requirements are met, you can use `MqttVPCEndpoint`. `MqttInstanceId` is used for token authentication, and `MqttGroupId` is used to concatenate the MQTT ClientId.
     * 3. Distinguish between publish and subscribe topics based on the `topic`, `type`, and `permission` of each item in `TopicList`. `W` indicates the publish permission, and `R` indicates the subscribe permission.
     * 4. `ExpireTimeStamp` is the UNIX timestamp in milliseconds when the password expires. Credentials may be reused. Retrieve new credentials based on the expiration time returned by the operation.
     * The device identity and request IDs in the documentation are demo data. The domain name uses the `example.com` sample domain. Credentials and instance identity are exemplified or desensitized. These examples cannot be used directly for actual connections.
     *
     * @param request - GetMqttTicketRequest
     *
     * @returns GetMqttTicketResponse
     *
     * @param GetMqttTicketRequest $request
     *
     * @return GetMqttTicketResponse
     */
    public function getMqttTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMqttTicketWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an over-the-air update task, including the available version and release notes.
     *
     * @param request - GetOtaTaskByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOtaTaskByTaskIdResponse
     *
     * @param GetOtaTaskByTaskIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOtaTaskByTaskId',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOtaTaskByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an over-the-air update task, including the available version and release notes.
     *
     * @param request - GetOtaTaskByTaskIdRequest
     *
     * @returns GetOtaTaskByTaskIdResponse
     *
     * @param GetOtaTaskByTaskIdRequest $request
     *
     * @return GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOtaTaskByTaskIdWithOptions($request, $runtime);
    }

    /**
     * Queries the model settings of resource groups.
     *
     * @param request - GetResourceGroupAgentModelSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupAgentModelSettingsResponse
     *
     * @param GetResourceGroupAgentModelSettingsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetResourceGroupAgentModelSettingsResponse
     */
    public function getResourceGroupAgentModelSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupAgentModelSettings',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupAgentModelSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the model settings of resource groups.
     *
     * @param request - GetResourceGroupAgentModelSettingsRequest
     *
     * @returns GetResourceGroupAgentModelSettingsResponse
     *
     * @param GetResourceGroupAgentModelSettingsRequest $request
     *
     * @return GetResourceGroupAgentModelSettingsResponse
     */
    public function getResourceGroupAgentModelSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupAgentModelSettingsWithOptions($request, $runtime);
    }

    /**
     * Queries the pricing and discount information required to scale out a subscription delivery group to a specified total number of nodes.
     *
     * @remarks
     * This operation queries the resource scale-out price of an existing delivery group. A successful call returns only a quote and does not create an order or add nodes.
     * **Verify the following conditions before you call this operation:**
     * - The delivery group belongs to the current account and is located in a supported region in the Chinese mainland.
     * - The product type is WUYING Cloud App or Cloud Browser, and the billing method is subscription and billed by node. Pay-as-you-go or browser groups billed by monthly active user (MAU) are not supported.
     * - The order status of the delivery group is normal, a resource node pool is associated, and no paid but ineffective renewal or scale-in orders exist.
     * - The target total number of nodes is greater than the current number of purchased nodes and does not exceed the node quota for the account in the corresponding region, product, and billing method.
     * **Parameter relationships:**
     * - ProductType, AppInstanceGroupId, and Amount are all required and must be specified together.
     * - ProductType must match the product corresponding to AppInstanceGroupId.
     * - **Amount is the total number of nodes after the scale-out, not the number of nodes added in this operation.** The region, node specifications, and billing method are determined by the existing delivery group and do not need to be specified.
     * **Procedure:**
     * 1. Confirm the target delivery group and the current number of purchased nodes. For common scenarios of cloud apps, you can first invoke [ListAppInstanceGroup](https://api.aliyun.com/document/appstream-center/2021-09-01/ListAppInstanceGroup) to obtain the identity, and then invoke [GetAppInstanceGroup](https://api.aliyun.com/document/appstream-center/2021-09-01/GetAppInstanceGroup) to query the configuration and `NodePool.NodeAmount`.
     * 2. Invoke this operation with the same product type, delivery group identity, and target total number of nodes to read the price, coupons, and pricing rules.
     * 3. After confirming the quote, if you want to execute the scale-out, you can invoke [ModifyNodePoolAmount](https://api.aliyun.com/document/appstream-center/2021-09-01/ModifyNodePoolAmount) and specify the target total number in `NodePool.NodeAmount` as required by the operation. **A successful price inquiry does not mean that an order is created or the scale-out is completed.**
     * **Example scenario:**
     * If a cloud app delivery group currently has 1 purchased subscription node and you want to scale out to 2 nodes, specify ProductType=CloudApp, the AppInstanceGroupId of the delivery group, and Amount=2. Replace the masked resource IDs with the actual values under the current account. The example quantities do not represent default values or quota limits. The price examples only illustrate the relationship among the original price, discount amount, and final price, and do not represent the fixed selling price of the specifications.
     *
     * @param request - GetResourceModifyPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceModifyPriceResponse
     *
     * @param GetResourceModifyPriceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetResourceModifyPriceResponse
     */
    public function getResourceModifyPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceModifyPrice',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceModifyPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the pricing and discount information required to scale out a subscription delivery group to a specified total number of nodes.
     *
     * @remarks
     * This operation queries the resource scale-out price of an existing delivery group. A successful call returns only a quote and does not create an order or add nodes.
     * **Verify the following conditions before you call this operation:**
     * - The delivery group belongs to the current account and is located in a supported region in the Chinese mainland.
     * - The product type is WUYING Cloud App or Cloud Browser, and the billing method is subscription and billed by node. Pay-as-you-go or browser groups billed by monthly active user (MAU) are not supported.
     * - The order status of the delivery group is normal, a resource node pool is associated, and no paid but ineffective renewal or scale-in orders exist.
     * - The target total number of nodes is greater than the current number of purchased nodes and does not exceed the node quota for the account in the corresponding region, product, and billing method.
     * **Parameter relationships:**
     * - ProductType, AppInstanceGroupId, and Amount are all required and must be specified together.
     * - ProductType must match the product corresponding to AppInstanceGroupId.
     * - **Amount is the total number of nodes after the scale-out, not the number of nodes added in this operation.** The region, node specifications, and billing method are determined by the existing delivery group and do not need to be specified.
     * **Procedure:**
     * 1. Confirm the target delivery group and the current number of purchased nodes. For common scenarios of cloud apps, you can first invoke [ListAppInstanceGroup](https://api.aliyun.com/document/appstream-center/2021-09-01/ListAppInstanceGroup) to obtain the identity, and then invoke [GetAppInstanceGroup](https://api.aliyun.com/document/appstream-center/2021-09-01/GetAppInstanceGroup) to query the configuration and `NodePool.NodeAmount`.
     * 2. Invoke this operation with the same product type, delivery group identity, and target total number of nodes to read the price, coupons, and pricing rules.
     * 3. After confirming the quote, if you want to execute the scale-out, you can invoke [ModifyNodePoolAmount](https://api.aliyun.com/document/appstream-center/2021-09-01/ModifyNodePoolAmount) and specify the target total number in `NodePool.NodeAmount` as required by the operation. **A successful price inquiry does not mean that an order is created or the scale-out is completed.**
     * **Example scenario:**
     * If a cloud app delivery group currently has 1 purchased subscription node and you want to scale out to 2 nodes, specify ProductType=CloudApp, the AppInstanceGroupId of the delivery group, and Amount=2. Replace the masked resource IDs with the actual values under the current account. The example quantities do not represent default values or quota limits. The price examples only illustrate the relationship among the original price, discount amount, and final price, and do not represent the fixed selling price of the specifications.
     *
     * @param request - GetResourceModifyPriceRequest
     *
     * @returns GetResourceModifyPriceResponse
     *
     * @param GetResourceModifyPriceRequest $request
     *
     * @return GetResourceModifyPriceResponse
     */
    public function getResourceModifyPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceModifyPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the price information of a resource.
     *
     * @param request - GetResourcePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourcePriceResponse
     *
     * @param GetResourcePriceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourcePriceResponse
     */
    public function getResourcePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->appInstanceType) {
            @$query['AppInstanceType'] = $request->appInstanceType;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->nodeInstanceType) {
            @$query['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourcePrice',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourcePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price information of a resource.
     *
     * @param request - GetResourcePriceRequest
     *
     * @returns GetResourcePriceResponse
     *
     * @param GetResourcePriceRequest $request
     *
     * @return GetResourcePriceResponse
     */
    public function getResourcePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePriceWithOptions($request, $runtime);
    }

    /**
     * Queries the maximum quantity quota applicable to the current account for a specified product, resource type, business region, and billing method.
     *
     * @remarks
     * This operation queries the maximum quantity quota. It does not query the used quota, remaining quota, or real-time resource inventory.
     * **Parameter relationships:**
     * - ResourceType and ProductType are required.
     * - BizRegionId and ChargeType are optional query conditions and can be specified at the same time. They must be consistent with subsequent purchase or authorization operations.
     * - If the region or billing method is omitted, the general quota for the corresponding dimension is queried. The quotas of different regions or billing methods are not added together.
     * - If multiple quotas apply at the same time, the larger limit is returned.
     * **Call sequence:**
     * 1. Select the resource type, product, business region, and billing method for the payer based on subsequent business needs.
     * 2. Invoke this operation to read `Data`. Query `AppInstanceGroup` before creating a delivery group, query `AppAuthUser` before authorizing an authorized user, and query `PoolNodeAmount` before purchasing or scaling out nodes.
     * 3. Query the current usage in combination with the resources, and then verify the current operation through subsequent creation, authorization, or scale-out operations. **This query does not reserve quotas or guarantee the success of subsequent purchases.**
     * Data=2147483647 indicates that no smaller quota limit is obtained in this query. It does not mean that the physical inventory is unlimited.
     *
     * @param request - GetResourceQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceQuotaResponse
     *
     * @param GetResourceQuotaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceQuotaResponse
     */
    public function getResourceQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceQuota',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the maximum quantity quota applicable to the current account for a specified product, resource type, business region, and billing method.
     *
     * @remarks
     * This operation queries the maximum quantity quota. It does not query the used quota, remaining quota, or real-time resource inventory.
     * **Parameter relationships:**
     * - ResourceType and ProductType are required.
     * - BizRegionId and ChargeType are optional query conditions and can be specified at the same time. They must be consistent with subsequent purchase or authorization operations.
     * - If the region or billing method is omitted, the general quota for the corresponding dimension is queried. The quotas of different regions or billing methods are not added together.
     * - If multiple quotas apply at the same time, the larger limit is returned.
     * **Call sequence:**
     * 1. Select the resource type, product, business region, and billing method for the payer based on subsequent business needs.
     * 2. Invoke this operation to read `Data`. Query `AppInstanceGroup` before creating a delivery group, query `AppAuthUser` before authorizing an authorized user, and query `PoolNodeAmount` before purchasing or scaling out nodes.
     * 3. Query the current usage in combination with the resources, and then verify the current operation through subsequent creation, authorization, or scale-out operations. **This query does not reserve quotas or guarantee the success of subsequent purchases.**
     * Data=2147483647 indicates that no smaller quota limit is obtained in this query. It does not mean that the physical inventory is unlimited.
     *
     * @param request - GetResourceQuotaRequest
     *
     * @returns GetResourceQuotaResponse
     *
     * @param GetResourceQuotaRequest $request
     *
     * @return GetResourceQuotaResponse
     */
    public function getResourceQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceQuotaWithOptions($request, $runtime);
    }

    /**
     * Queries the renewal price of WUYING Cloud Application resources.
     *
     * @param request - GetResourceRenewPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceRenewPriceResponse
     *
     * @param GetResourceRenewPriceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceRenewPriceResponse
     */
    public function getResourceRenewPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceRenewPrice',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the renewal price of WUYING Cloud Application resources.
     *
     * @param request - GetResourceRenewPriceRequest
     *
     * @returns GetResourceRenewPriceResponse
     *
     * @param GetResourceRenewPriceRequest $request
     *
     * @return GetResourceRenewPriceResponse
     */
    public function getResourceRenewPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceRenewPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the third-party channel configurations of an Agent runtime.
     *
     * @remarks
     * You can query the third-party channel configuration status of Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - GetRuntimeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRuntimeChannelResponse
     *
     * @param GetRuntimeChannelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRuntimeChannelResponse
     */
    public function getRuntimeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->includeRiskInfo) {
            @$query['IncludeRiskInfo'] = $request->includeRiskInfo;
        }

        if (null !== $request->runtimeId) {
            @$query['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->runtimeType) {
            @$query['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRuntimeChannel',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuntimeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the third-party channel configurations of an Agent runtime.
     *
     * @remarks
     * You can query the third-party channel configuration status of Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - GetRuntimeChannelRequest
     *
     * @returns GetRuntimeChannelResponse
     *
     * @param GetRuntimeChannelRequest $request
     *
     * @return GetRuntimeChannelResponse
     */
    public function getRuntimeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuntimeChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the model configuration for a cloud desktop.
     *
     * @remarks
     * You can query the details of the model configuration currently bound to a specified cloud desktop in the Wuying Agent Management Center, including the model group, the list of model providers, and their associated model information. When the risk information mode is enabled, you can also identify discrepancies between the actual configuration of the end user and the configuration delivered by the administrator.
     *
     * @param request - GetRuntimeModelConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRuntimeModelConfigResponse
     *
     * @param GetRuntimeModelConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRuntimeModelConfigResponse
     */
    public function getRuntimeModelConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->includeRiskInfo) {
            @$query['IncludeRiskInfo'] = $request->includeRiskInfo;
        }

        if (null !== $request->runtimeId) {
            @$query['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->runtimeType) {
            @$query['RuntimeType'] = $request->runtimeType;
        }

        if (null !== $request->smartModel) {
            @$query['SmartModel'] = $request->smartModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRuntimeModelConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuntimeModelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the model configuration for a cloud desktop.
     *
     * @remarks
     * You can query the details of the model configuration currently bound to a specified cloud desktop in the Wuying Agent Management Center, including the model group, the list of model providers, and their associated model information. When the risk information mode is enabled, you can also identify discrepancies between the actual configuration of the end user and the configuration delivered by the administrator.
     *
     * @param request - GetRuntimeModelConfigRequest
     *
     * @returns GetRuntimeModelConfigResponse
     *
     * @param GetRuntimeModelConfigRequest $request
     *
     * @return GetRuntimeModelConfigResponse
     */
    public function getRuntimeModelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuntimeModelConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a task by task ID, or by resource information and task category.
     *
     * @remarks
     * Supports two query methods:
     * - **By task ID**: Pass the TaskId parameter. This method takes precedence over querying by resource information.
     * - **By resource**: Omit the TaskId parameter, and pass the EntityId, EntityType, and TaskCategory parameters at the same time. You can use the EntityVersionId parameter to specify the resource version.
     * The API returns the current task status and recorded step information. Determine the overall task result based on the Status parameter. The success of a single step does not mean the entire task is successful. You can call the ListTaskStep operation to query the names and categories of image creation and application adaptation steps.
     *
     * @param request - GetTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityType) {
            @$body['EntityType'] = $request->entityType;
        }

        if (null !== $request->entityVersionId) {
            @$body['EntityVersionId'] = $request->entityVersionId;
        }

        if (null !== $request->taskCategory) {
            @$body['TaskCategory'] = $request->taskCategory;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a task by task ID, or by resource information and task category.
     *
     * @remarks
     * Supports two query methods:
     * - **By task ID**: Pass the TaskId parameter. This method takes precedence over querying by resource information.
     * - **By resource**: Omit the TaskId parameter, and pass the EntityId, EntityType, and TaskCategory parameters at the same time. You can use the EntityVersionId parameter to specify the resource version.
     * The API returns the current task status and recorded step information. Determine the overall task result based on the Status parameter. The success of a single step does not mean the entire task is successful. You can call the ListTaskStep operation to query the names and categories of image creation and application adaptation steps.
     *
     * @param request - GetTaskRequest
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * Queries a deduplicated list of version numbers for undeleted agent instances under a specified tenant, aggregated by agent provider and optionally filtered by agent platform. The results are returned in ascending order by version number.
     *
     * @param request - ListAgentInstanceVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentInstanceVersionsResponse
     *
     * @param ListAgentInstanceVersionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAgentInstanceVersionsResponse
     */
    public function listAgentInstanceVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentInstanceVersions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentInstanceVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a deduplicated list of version numbers for undeleted agent instances under a specified tenant, aggregated by agent provider and optionally filtered by agent platform. The results are returned in ascending order by version number.
     *
     * @param request - ListAgentInstanceVersionsRequest
     *
     * @returns ListAgentInstanceVersionsResponse
     *
     * @param ListAgentInstanceVersionsRequest $request
     *
     * @return ListAgentInstanceVersionsResponse
     */
    public function listAgentInstanceVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentInstanceVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries the valid applications of the current account by paging based on conditions such as the application ID, name, type, and associated product.
     *
     * @remarks
     * When multiple filter conditions are specified at the same time, they take effect together. AppName supports contains matching. When a single-value filter and the corresponding list filter are specified at the same time, the intersection is used. To avoid empty results, specify only one of the forms.
     * If PageSize is omitted, the value is 10. Start from 1 for PageNumber and query page by page until the number of retrieved records reaches Count. Before deleting an application, check Deletable.
     *
     * @param tmpReq - ListAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppResponse
     *
     * @param ListAppRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ListAppResponse
     */
    public function listAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bizTypeList) {
            $request->bizTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bizTypeList, 'BizTypeList', 'json');
        }

        if (null !== $tmpReq->productTypeList) {
            $request->productTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->productTypeList, 'ProductTypeList', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->bizTypeListShrink) {
            @$body['BizTypeList'] = $request->bizTypeListShrink;
        }

        if (null !== $request->originAppType) {
            @$body['OriginAppType'] = $request->originAppType;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->productTypeListShrink) {
            @$body['ProductTypeList'] = $request->productTypeListShrink;
        }

        if (null !== $request->subAppType) {
            @$body['SubAppType'] = $request->subAppType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListApp',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the valid applications of the current account by paging based on conditions such as the application ID, name, type, and associated product.
     *
     * @remarks
     * When multiple filter conditions are specified at the same time, they take effect together. AppName supports contains matching. When a single-value filter and the corresponding list filter are specified at the same time, the intersection is used. To avoid empty results, specify only one of the forms.
     * If PageSize is omitted, the value is 10. Start from 1 for PageNumber and query page by page until the number of retrieved records reaches Count. Before deleting an application, check Deletable.
     *
     * @param request - ListAppRequest
     *
     * @returns ListAppResponse
     *
     * @param ListAppRequest $request
     *
     * @return ListAppResponse
     */
    public function listApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppWithOptions($request, $runtime);
    }

    /**
     * Queries the details of multiple delivery groups. This operation queries all delivery groups that meet the specified conditions instead of a specific delivery group.
     *
     * @param request - ListAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstanceGroupResponse
     *
     * @param ListAppInstanceGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCenterImageId) {
            @$query['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->nodeInstanceType) {
            @$query['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->excludedUserGroupIds) {
            @$body['ExcludedUserGroupIds'] = $request->excludedUserGroupIds;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of multiple delivery groups. This operation queries all delivery groups that meet the specified conditions instead of a specific delivery group.
     *
     * @param request - ListAppInstanceGroupRequest
     *
     * @returns ListAppInstanceGroupResponse
     *
     * @param ListAppInstanceGroupRequest $request
     *
     * @return ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the available session instance types for the current account by paging based on the product, region, operating system, and instance type conditions.
     *
     * @remarks
     * This operation is used to select session instance types and does not create resources. The returned results are affected by the available instance types for the account and the business region. An empty result does not indicate a request failure.
     * **Filtering and pagination:**
     * - `ProductType` is required. Explicitly specify `BizRegionId`, `PageNumber`, and `PageSize`.
     * - If `BizRegionId` is not provided, the region of the current request is used. You can call the [ListRegions](https://api.aliyun.com/document/appstream-center/2021-09-01/ListRegions) operation to obtain the business region.
     * - You can specify both `AppInstanceType` and `AppInstanceTypeList`. In this case, only the instance types that meet both conditions are returned. Neither parameter overrides the other. The list can contain up to 100 items.
     * - The instance type family, CPU, memory, GPU memory, operating system, and category conditions are filtered by intersection. The union is not automatically applied.
     * - Pass `PageNumber` starting from 1. Use `TotalCount`, `PageSize`, and `PageNumber` to continue pagination until all matching results are read.
     * **Inventory and subsequent calls:**
     * - Inventory is queried only when `QueryInventory` is set to `true`. If inventory information is not obtained, do not assume that the inventory is 0.
     * - The inventory reflects the current query result and does not indicate a successful reservation.
     * - After obtaining the `AppInstanceType`, you can query the price based on the session instance type parameter requirements of [GetResourcePrice](https://api.aliyun.com/document/appstream-center/2021-09-01/GetResourcePrice).
     * - The current query does not use `AppCenterImageId` to filter instance types. Do not use this parameter to determine the compatibility between images and instance types.
     * Field examples are used to demonstrate how to fill in the fields and do not guarantee that the example instance types exist in the selected region or account. The GPU count field currently does not provide a value. Use the GPU memory field to understand the instance type.
     *
     * @param request - ListAppInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstanceTypeResponse
     *
     * @param ListAppInstanceTypeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppInstanceTypeResponse
     */
    public function listAppInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCenterImageId) {
            @$query['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceType) {
            @$query['AppInstanceType'] = $request->appInstanceType;
        }

        if (null !== $request->appInstanceTypeFamily) {
            @$query['AppInstanceTypeFamily'] = $request->appInstanceTypeFamily;
        }

        if (null !== $request->appInstanceTypeList) {
            @$query['AppInstanceTypeList'] = $request->appInstanceTypeList;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->gpuMemory) {
            @$query['GpuMemory'] = $request->gpuMemory;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->queryInventory) {
            @$query['QueryInventory'] = $request->queryInventory;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppInstanceType',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available session instance types for the current account by paging based on the product, region, operating system, and instance type conditions.
     *
     * @remarks
     * This operation is used to select session instance types and does not create resources. The returned results are affected by the available instance types for the account and the business region. An empty result does not indicate a request failure.
     * **Filtering and pagination:**
     * - `ProductType` is required. Explicitly specify `BizRegionId`, `PageNumber`, and `PageSize`.
     * - If `BizRegionId` is not provided, the region of the current request is used. You can call the [ListRegions](https://api.aliyun.com/document/appstream-center/2021-09-01/ListRegions) operation to obtain the business region.
     * - You can specify both `AppInstanceType` and `AppInstanceTypeList`. In this case, only the instance types that meet both conditions are returned. Neither parameter overrides the other. The list can contain up to 100 items.
     * - The instance type family, CPU, memory, GPU memory, operating system, and category conditions are filtered by intersection. The union is not automatically applied.
     * - Pass `PageNumber` starting from 1. Use `TotalCount`, `PageSize`, and `PageNumber` to continue pagination until all matching results are read.
     * **Inventory and subsequent calls:**
     * - Inventory is queried only when `QueryInventory` is set to `true`. If inventory information is not obtained, do not assume that the inventory is 0.
     * - The inventory reflects the current query result and does not indicate a successful reservation.
     * - After obtaining the `AppInstanceType`, you can query the price based on the session instance type parameter requirements of [GetResourcePrice](https://api.aliyun.com/document/appstream-center/2021-09-01/GetResourcePrice).
     * - The current query does not use `AppCenterImageId` to filter instance types. Do not use this parameter to determine the compatibility between images and instance types.
     * Field examples are used to demonstrate how to fill in the fields and do not guarantee that the example instance types exist in the selected region or account. The GPU count field currently does not provide a value. Use the GPU memory field to understand the instance type.
     *
     * @param request - ListAppInstanceTypeRequest
     *
     * @returns ListAppInstanceTypeResponse
     *
     * @param ListAppInstanceTypeRequest $request
     *
     * @return ListAppInstanceTypeResponse
     */
    public function listAppInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of session instances in a delivery group, including instance IDs, instance statuses, creation time, update time, session statuses, and public IP addresses of primary network interface controllers (NICs).
     *
     * @param request - ListAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$query['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->includeDeleted) {
            @$query['IncludeDeleted'] = $request->includeDeleted;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userIdList) {
            @$query['UserIdList'] = $request->userIdList;
        }

        $body = [];
        if (null !== $request->appInstanceIdList) {
            @$body['AppInstanceIdList'] = $request->appInstanceIdList;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAppInstances',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of session instances in a delivery group, including instance IDs, instance statuses, creation time, update time, session statuses, and public IP addresses of primary network interface controllers (NICs).
     *
     * @param request - ListAppInstancesRequest
     *
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $request
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the deployed applications in the image used by a specified delivery group with paging and returns the number of users with per-application authorization for each application.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of deployed applications in the application image used by a specified delivery group, including the application ID, name, version, icon, and the number of users currently **authorized by application** for each application (AuthorizedUserCount).
     * The returned AppId is the input for per-application authorization: when you call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to add or remove authorized users for a specified application in a delivery group, pass in the AppId returned by this operation.
     * ## Before you begin
     * - The delivery group is created, and **ProductType matches the product type of the delivery group**. If the delivery group does not exist or the product type does not match, the error code `InvalidAppInstanceGroup.NotFound` is returned.
     * ## Parameter description
     * - **AppInstanceGroupId is required**. This parameter is marked as optional in the parameter table, but the error code `InvalidParameter.AppInstanceGroupId` is returned if it is not specified.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100. If the values are invalid, the error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize` are returned respectively.
     * - If no applications are deployed in the delivery group image, the operation returns normally: Apps is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID (AppInstanceGroupId).
     * 2. Call this operation to obtain the list of deployed applications in the delivery group and the AppId of each application.
     * 3. To authorize by application, call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation with the returned AppId.
     *
     * @param request - ListAppsByAppInstanceGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppsByAppInstanceGroupIdResponse
     *
     * @param ListAppsByAppInstanceGroupIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAppsByAppInstanceGroupIdResponse
     */
    public function listAppsByAppInstanceGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppsByAppInstanceGroupId',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppsByAppInstanceGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deployed applications in the image used by a specified delivery group with paging and returns the number of users with per-application authorization for each application.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of deployed applications in the application image used by a specified delivery group, including the application ID, name, version, icon, and the number of users currently **authorized by application** for each application (AuthorizedUserCount).
     * The returned AppId is the input for per-application authorization: when you call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to add or remove authorized users for a specified application in a delivery group, pass in the AppId returned by this operation.
     * ## Before you begin
     * - The delivery group is created, and **ProductType matches the product type of the delivery group**. If the delivery group does not exist or the product type does not match, the error code `InvalidAppInstanceGroup.NotFound` is returned.
     * ## Parameter description
     * - **AppInstanceGroupId is required**. This parameter is marked as optional in the parameter table, but the error code `InvalidParameter.AppInstanceGroupId` is returned if it is not specified.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100. If the values are invalid, the error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize` are returned respectively.
     * - If no applications are deployed in the delivery group image, the operation returns normally: Apps is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID (AppInstanceGroupId).
     * 2. Call this operation to obtain the list of deployed applications in the delivery group and the AppId of each application.
     * 3. To authorize by application, call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation with the returned AppId.
     *
     * @param request - ListAppsByAppInstanceGroupIdRequest
     *
     * @returns ListAppsByAppInstanceGroupIdResponse
     *
     * @param ListAppsByAppInstanceGroupIdRequest $request
     *
     * @return ListAppsByAppInstanceGroupIdResponse
     */
    public function listAppsByAppInstanceGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsByAppInstanceGroupIdWithOptions($request, $runtime);
    }

    /**
     * Performs a paging query on the delivery groups for which a specified user has obtained access permissions through delivery group-level authorization, with support for fuzzy filtering by delivery group ID, delivery group name, application ID, and application name.
     *
     * @remarks
     * ## Operation description
     * This operation queries the list of delivery groups for which a specified user (EndUserId) has been granted **delivery group-level authorization**. It returns the basic information of each delivery group (such as ID, name, status, region, creation time, and expiration time) and the list of applications deployed in the delivery group.
     * Return scope:
     * - Only delivery groups that are authorized to the user as a whole through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are returned. Records of individual application authorizations granted through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation are not included.
     * - Only delivery groups that match the specified ProductType and are not deleted are returned. If no applications are deployed in the delivery group image, the delivery group is not returned.
     * - Results are sorted in descending order based on the update time of the authorization records. The most recently authorized or modified delivery groups are listed first.
     * ## Before you begin
     * - The [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation has been called to authorize the delivery group to the user.
     * ## Metric description
     * - **ProductType and EndUserId are required**. If ProductType is not specified, the `InvalidParameter.ProductType` error code is returned. If EndUserId is not specified, the `InvalidParameter.UserId` error code is returned.
     * - EndUserId uses **exact match** based on the username. AppInstanceGroupId, AppInstanceGroupName, AppId, and AppName use **fuzzy match** (a match is hit if the string is contained). If multiple filter conditions are specified, all conditions must be met.
     * - PageNumber starts from 1. Valid values for PageSize: 1 to 100.
     * - If the user does not have any authorization delivery groups that meet the conditional requirements, the operation returns a normal response: AppInstanceGroupModels is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID, and then call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize the delivery group to the user.
     * 2. Call this operation to query the delivery groups authorized for the user and the applications deployed in the delivery groups.
     * 3. To obtain the application connection ticket for the user, call the [GetConnectionTicket](~~GetConnectionTicket~~) operation by using the returned AppInstanceGroupId and the AppId in Apps.
     *
     * @param request - ListAuthorizedAppInstanceGroupByUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedAppInstanceGroupByUserResponse
     *
     * @param ListAuthorizedAppInstanceGroupByUserRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAuthorizedAppInstanceGroupByUserResponse
     */
    public function listAuthorizedAppInstanceGroupByUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedAppInstanceGroupByUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedAppInstanceGroupByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query on the delivery groups for which a specified user has obtained access permissions through delivery group-level authorization, with support for fuzzy filtering by delivery group ID, delivery group name, application ID, and application name.
     *
     * @remarks
     * ## Operation description
     * This operation queries the list of delivery groups for which a specified user (EndUserId) has been granted **delivery group-level authorization**. It returns the basic information of each delivery group (such as ID, name, status, region, creation time, and expiration time) and the list of applications deployed in the delivery group.
     * Return scope:
     * - Only delivery groups that are authorized to the user as a whole through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are returned. Records of individual application authorizations granted through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation are not included.
     * - Only delivery groups that match the specified ProductType and are not deleted are returned. If no applications are deployed in the delivery group image, the delivery group is not returned.
     * - Results are sorted in descending order based on the update time of the authorization records. The most recently authorized or modified delivery groups are listed first.
     * ## Before you begin
     * - The [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation has been called to authorize the delivery group to the user.
     * ## Metric description
     * - **ProductType and EndUserId are required**. If ProductType is not specified, the `InvalidParameter.ProductType` error code is returned. If EndUserId is not specified, the `InvalidParameter.UserId` error code is returned.
     * - EndUserId uses **exact match** based on the username. AppInstanceGroupId, AppInstanceGroupName, AppId, and AppName use **fuzzy match** (a match is hit if the string is contained). If multiple filter conditions are specified, all conditions must be met.
     * - PageNumber starts from 1. Valid values for PageSize: 1 to 100.
     * - If the user does not have any authorization delivery groups that meet the conditional requirements, the operation returns a normal response: AppInstanceGroupModels is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID, and then call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize the delivery group to the user.
     * 2. Call this operation to query the delivery groups authorized for the user and the applications deployed in the delivery groups.
     * 3. To obtain the application connection ticket for the user, call the [GetConnectionTicket](~~GetConnectionTicket~~) operation by using the returned AppInstanceGroupId and the AppId in Apps.
     *
     * @param request - ListAuthorizedAppInstanceGroupByUserRequest
     *
     * @returns ListAuthorizedAppInstanceGroupByUserResponse
     *
     * @param ListAuthorizedAppInstanceGroupByUserRequest $request
     *
     * @return ListAuthorizedAppInstanceGroupByUserResponse
     */
    public function listAuthorizedAppInstanceGroupByUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedAppInstanceGroupByUserWithOptions($request, $runtime);
    }

    /**
     * Queries the applications for which a specified user has obtained access permissions through per-application authorization by paging. You can filter results by delivery group ID, delivery group name, application ID, or application name using fuzzy match.
     *
     * @remarks
     * ## Operation description
     * This operation queries the applications that a specified user is authorized to access at the application granularity. **Only records authorized at the application level are returned** (for example, authorizations completed through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation). Authorizations granted to an entire delivery group through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are not included in the response.
     * The results are deduplicated by the combination of delivery group and application. Each record corresponds to one application within one delivery group.
     * ## Before you begin
     * - The user must already exist under the current account. If the user does not exist, the error code `User.NotFound` is returned. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the username.
     * - The delivery group that contains the application must already be created, and the application must have been authorized to the user at the application level. If no per-application authorization has been performed, an empty application list is returned.
     * ## Parameter description
     * - **`EndUserId` and `ProductType` are required.** Set `ProductType` to `CloudApp`, which indicates WUYING Cloud Application.
     * - `AppInstanceGroupId`, `AppId`, `AppInstanceGroupName`, and `AppName` are optional filter conditions. All of them use fuzzy match and can be combined in any way. If all are omitted, all per-application authorization records for the user are returned.
     * - Use `PageNumber` and `PageSize` for paging. `PageNumber` starts from 1, and `PageSize` ranges from 1 to 100. Use the returned `TotalCount` to determine whether to continue querying.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the delivery group ID (AppInstanceGroupId) and the application IDs of deployed applications within the delivery group (AppId in the Apps list).
     * 2. Call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize the application to the target user.
     * 3. Call this operation to query the applications that the user is authorized to access.
     *
     * @param request - ListAuthorizedAppsByUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedAppsByUserResponse
     *
     * @param ListAuthorizedAppsByUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAuthorizedAppsByUserResponse
     */
    public function listAuthorizedAppsByUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedAppsByUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedAppsByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications for which a specified user has obtained access permissions through per-application authorization by paging. You can filter results by delivery group ID, delivery group name, application ID, or application name using fuzzy match.
     *
     * @remarks
     * ## Operation description
     * This operation queries the applications that a specified user is authorized to access at the application granularity. **Only records authorized at the application level are returned** (for example, authorizations completed through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation). Authorizations granted to an entire delivery group through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are not included in the response.
     * The results are deduplicated by the combination of delivery group and application. Each record corresponds to one application within one delivery group.
     * ## Before you begin
     * - The user must already exist under the current account. If the user does not exist, the error code `User.NotFound` is returned. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the username.
     * - The delivery group that contains the application must already be created, and the application must have been authorized to the user at the application level. If no per-application authorization has been performed, an empty application list is returned.
     * ## Parameter description
     * - **`EndUserId` and `ProductType` are required.** Set `ProductType` to `CloudApp`, which indicates WUYING Cloud Application.
     * - `AppInstanceGroupId`, `AppId`, `AppInstanceGroupName`, and `AppName` are optional filter conditions. All of them use fuzzy match and can be combined in any way. If all are omitted, all per-application authorization records for the user are returned.
     * - Use `PageNumber` and `PageSize` for paging. `PageNumber` starts from 1, and `PageSize` ranges from 1 to 100. Use the returned `TotalCount` to determine whether to continue querying.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the delivery group ID (AppInstanceGroupId) and the application IDs of deployed applications within the delivery group (AppId in the Apps list).
     * 2. Call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize the application to the target user.
     * 3. Call this operation to query the applications that the user is authorized to access.
     *
     * @param request - ListAuthorizedAppsByUserRequest
     *
     * @returns ListAuthorizedAppsByUserResponse
     *
     * @param ListAuthorizedAppsByUserRequest $request
     *
     * @return ListAuthorizedAppsByUserResponse
     */
    public function listAuthorizedAppsByUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedAppsByUserWithOptions($request, $runtime);
    }

    /**
     * Queries the list of user groups authorized by a specified delivery group.
     *
     * @param request - ListAuthorizedUserGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedUserGroupsResponse
     *
     * @param ListAuthorizedUserGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAuthorizedUserGroupsResponse
     */
    public function listAuthorizedUserGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedUserGroups',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of user groups authorized by a specified delivery group.
     *
     * @param request - ListAuthorizedUserGroupsRequest
     *
     * @returns ListAuthorizedUserGroupsResponse
     *
     * @param ListAuthorizedUserGroupsRequest $request
     *
     * @return ListAuthorizedUserGroupsResponse
     */
    public function listAuthorizedUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedUserGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of authorized users for a specified delivery group or delivery group set by using paging. Supports exact or fuzzy filtering by username.
     *
     * @remarks
     * ## Operation description
     * This operation queries the currently authorized users of a specified delivery group (AppInstanceGroupId) or delivery group set (AppInstanceGroupSetId). It returns each user\\"s username, account type, email address, phone number, and the authorization mode of the associated delivery group.
     * - This operation returns **authorization relationships** and does not indicate whether users are currently online or have established connections.
     * - In the Cloud Browser product, a delivery group corresponds to a cloud browser group, and a delivery group ID corresponds to a browser group ID.
     * The scope of results depends on the authorization mode of the delivery group (response parameter AuthMode):
     * - When the authorization mode is `App` (application-level authorization) or `AppInstanceGroup` (delivery group-level authorization): Returns users authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation at the delivery group level, as well as users authorized through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation at the application level. If AppId is specified, only users **authorized for that specific application** are returned.
     * - When the authorization mode is `Session` (session-level authorization): Returns users who have been granted persistent sessions. The AppInstancePersistentIds field lists all persistent session IDs granted to each user. If AppInstancePersistentId is specified, only users granted that session are returned.
     * - When querying by delivery group set: Returns users authorized for the set. The response parameter AppInstanceGroupId is the primary delivery group ID of the set, and AppInstanceGroupSetId is the queried set ID.
     * When querying by delivery group, results are sorted in descending order by authorization time, with the most recently authorized users listed first.
     * ## Before you begin
     * - The target delivery group or delivery group set must be created, belong to the current account, and match the specified ProductType. Otherwise, a resource-not-found error code is returned.
     * - Users must have been authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) or [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation. If no users have been authorized, the operation returns normally with an empty Users list and TotalCount of 0.
     * ## Parameter description
     * - **ProductType, PageNumber, and PageSize are required**. If ProductType has an invalid value, the error code `ProductTypeInvalid` is returned.
     * - **Exactly one of AppInstanceGroupId and AppInstanceGroupSetId must be specified**. If both or neither are specified, the error code `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId` is returned.
     * - **AppId and AppInstancePersistentId are not supported when querying by delivery group set**. If specified, the error codes `InvalidParameter.AppId` and `InvalidParameter.AppInstancePersistentId` are returned respectively.
     * - EndUserId performs **exact matching** by username. UserIdFuzzy performs **fuzzy matching** by username (a hit occurs if the username contains the keyword). Both can be specified simultaneously, in which case both conditions must be met.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100.
     * - When the authorization mode is `App` or `AppInstanceGroup`, TotalCount is the number of **authorization records** that match the conditions. If the same user has multiple authorization records (for example, authorized for multiple applications), the records are merged into a single user entry in Users. Therefore, the number of users returned on the current page may be less than PageSize. Use TotalCount to determine whether to continue paging. When the authorization mode is `Session`, TotalCount is the deduplicated user count.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID. For cloud browser groups, call the [ListBrowserInstanceGroup](~~ListBrowserInstanceGroup~~) operation.
     * 2. Call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize at the delivery group level, or call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize at the application level.
     * 3. Call this operation to query authorized users. To remove authorization, pass the returned EndUserId values to the UnAuthorizeUserIds parameter of the authorization operations mentioned above.
     * ## Error codes
     * - `ProductTypeInvalid`: The value of ProductType is invalid.
     * - `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId`: Both AppInstanceGroupId and AppInstanceGroupSetId are specified, or neither is specified.
     * - `InvalidParameter.AppId`: AppId is specified when querying by delivery group set.
     * - `InvalidParameter.AppInstancePersistentId`: AppInstancePersistentId is specified when querying by delivery group set.
     * - `InvalidAppInstanceGroupSpecItem.NotFound`: The delivery group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidBrowserInstanceGroup.NotFound`: When ProductType is `CloudBrowser`, the cloud browser group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidAppInstanceGroupSet.NotFound`: The delivery group set does not exist, does not belong to the current account, the product type does not match, or the set does not have an available primary delivery group.
     * - `InvalidAppInstanceGroupSet.ActivationFailed`: The delivery group set is not in an available state.
     *
     * @param request - ListAuthorizedUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedUsersResponse
     *
     * @param ListAuthorizedUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAuthorizedUsersResponse
     */
    public function listAuthorizedUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->userIdFuzzy) {
            @$query['UserIdFuzzy'] = $request->userIdFuzzy;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedUsers',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of authorized users for a specified delivery group or delivery group set by using paging. Supports exact or fuzzy filtering by username.
     *
     * @remarks
     * ## Operation description
     * This operation queries the currently authorized users of a specified delivery group (AppInstanceGroupId) or delivery group set (AppInstanceGroupSetId). It returns each user\\"s username, account type, email address, phone number, and the authorization mode of the associated delivery group.
     * - This operation returns **authorization relationships** and does not indicate whether users are currently online or have established connections.
     * - In the Cloud Browser product, a delivery group corresponds to a cloud browser group, and a delivery group ID corresponds to a browser group ID.
     * The scope of results depends on the authorization mode of the delivery group (response parameter AuthMode):
     * - When the authorization mode is `App` (application-level authorization) or `AppInstanceGroup` (delivery group-level authorization): Returns users authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation at the delivery group level, as well as users authorized through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation at the application level. If AppId is specified, only users **authorized for that specific application** are returned.
     * - When the authorization mode is `Session` (session-level authorization): Returns users who have been granted persistent sessions. The AppInstancePersistentIds field lists all persistent session IDs granted to each user. If AppInstancePersistentId is specified, only users granted that session are returned.
     * - When querying by delivery group set: Returns users authorized for the set. The response parameter AppInstanceGroupId is the primary delivery group ID of the set, and AppInstanceGroupSetId is the queried set ID.
     * When querying by delivery group, results are sorted in descending order by authorization time, with the most recently authorized users listed first.
     * ## Before you begin
     * - The target delivery group or delivery group set must be created, belong to the current account, and match the specified ProductType. Otherwise, a resource-not-found error code is returned.
     * - Users must have been authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) or [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation. If no users have been authorized, the operation returns normally with an empty Users list and TotalCount of 0.
     * ## Parameter description
     * - **ProductType, PageNumber, and PageSize are required**. If ProductType has an invalid value, the error code `ProductTypeInvalid` is returned.
     * - **Exactly one of AppInstanceGroupId and AppInstanceGroupSetId must be specified**. If both or neither are specified, the error code `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId` is returned.
     * - **AppId and AppInstancePersistentId are not supported when querying by delivery group set**. If specified, the error codes `InvalidParameter.AppId` and `InvalidParameter.AppInstancePersistentId` are returned respectively.
     * - EndUserId performs **exact matching** by username. UserIdFuzzy performs **fuzzy matching** by username (a hit occurs if the username contains the keyword). Both can be specified simultaneously, in which case both conditions must be met.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100.
     * - When the authorization mode is `App` or `AppInstanceGroup`, TotalCount is the number of **authorization records** that match the conditions. If the same user has multiple authorization records (for example, authorized for multiple applications), the records are merged into a single user entry in Users. Therefore, the number of users returned on the current page may be less than PageSize. Use TotalCount to determine whether to continue paging. When the authorization mode is `Session`, TotalCount is the deduplicated user count.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID. For cloud browser groups, call the [ListBrowserInstanceGroup](~~ListBrowserInstanceGroup~~) operation.
     * 2. Call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize at the delivery group level, or call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize at the application level.
     * 3. Call this operation to query authorized users. To remove authorization, pass the returned EndUserId values to the UnAuthorizeUserIds parameter of the authorization operations mentioned above.
     * ## Error codes
     * - `ProductTypeInvalid`: The value of ProductType is invalid.
     * - `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId`: Both AppInstanceGroupId and AppInstanceGroupSetId are specified, or neither is specified.
     * - `InvalidParameter.AppId`: AppId is specified when querying by delivery group set.
     * - `InvalidParameter.AppInstancePersistentId`: AppInstancePersistentId is specified when querying by delivery group set.
     * - `InvalidAppInstanceGroupSpecItem.NotFound`: The delivery group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidBrowserInstanceGroup.NotFound`: When ProductType is `CloudBrowser`, the cloud browser group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidAppInstanceGroupSet.NotFound`: The delivery group set does not exist, does not belong to the current account, the product type does not match, or the set does not have an available primary delivery group.
     * - `InvalidAppInstanceGroupSet.ActivationFailed`: The delivery group set is not in an available state.
     *
     * @param request - ListAuthorizedUsersRequest
     *
     * @returns ListAuthorizedUsersResponse
     *
     * @param ListAuthorizedUsersRequest $request
     *
     * @return ListAuthorizedUsersResponse
     */
    public function listAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedUsersWithOptions($request, $runtime);
    }

    /**
     * Queries the bindng information between users and resources.
     *
     * @param request - ListBindInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBindInfoResponse
     *
     * @param ListBindInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBindInfoResponse
     */
    public function listBindInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appIdList) {
            @$body['AppIdList'] = $request->appIdList;
        }

        if (null !== $request->appInstanceGroupIdList) {
            @$body['AppInstanceGroupIdList'] = $request->appInstanceGroupIdList;
        }

        if (null !== $request->appInstanceIdList) {
            @$body['AppInstanceIdList'] = $request->appInstanceIdList;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userIdList) {
            @$body['UserIdList'] = $request->userIdList;
        }

        if (null !== $request->wyIdList) {
            @$body['WyIdList'] = $request->wyIdList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBindInfo',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBindInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bindng information between users and resources.
     *
     * @param request - ListBindInfoRequest
     *
     * @returns ListBindInfoResponse
     *
     * @param ListBindInfoRequest $request
     *
     * @return ListBindInfoResponse
     */
    public function listBindInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindInfoWithOptions($request, $runtime);
    }

    /**
     * Performs a paging query to retrieve the list of bookmarks in a specified cloud browser group or delivery group set.
     *
     * @param request - ListBrowserBookmarksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBrowserBookmarksResponse
     *
     * @param ListBrowserBookmarksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBrowserBookmarksResponse
     */
    public function listBrowserBookmarksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->browserInstanceGroupId) {
            @$query['BrowserInstanceGroupId'] = $request->browserInstanceGroupId;
        }

        if (null !== $request->browserInstanceGroupSetId) {
            @$query['BrowserInstanceGroupSetId'] = $request->browserInstanceGroupSetId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBrowserBookmarks',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBrowserBookmarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query to retrieve the list of bookmarks in a specified cloud browser group or delivery group set.
     *
     * @param request - ListBrowserBookmarksRequest
     *
     * @returns ListBrowserBookmarksResponse
     *
     * @param ListBrowserBookmarksRequest $request
     *
     * @return ListBrowserBookmarksResponse
     */
    public function listBrowserBookmarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBrowserBookmarksWithOptions($request, $runtime);
    }

    /**
     * Performs a paging query of cloud browser groups and their current statuses.
     *
     * @remarks
     * This topic describes how paged query cloud browser groups in the monthly active user (MAU) billing scenario.
     * ## Query conditions
     * You can filter cloud browser groups by browser group ID, name, business region, office network, set, authorized user group, and status. You can specify only one status value at a time for status filtering.
     * ## Pagination
     * Use PageNumber and PageSize paged query data by page. You can determine whether paged query the next page based on the returned TotalCount.
     * ## What to do next
     * To view the detailed configurations of a single browser group, call GetBrowserInstanceGroup by using the returned ID.
     * ## Example notes
     * The hyphen (`-`) in the examples indicates that the field is not applicable or not returned in the current scenario, and is not an actual string returned by the API operation. The common resource IDs in the examples are desensitized. Use the actual query results when you use the API operation.
     *
     * @param request - ListBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBrowserInstanceGroupResponse
     *
     * @param ListBrowserInstanceGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListBrowserInstanceGroupResponse
     */
    public function listBrowserInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupSetId) {
            @$query['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->browserInstanceGroupId) {
            @$query['BrowserInstanceGroupId'] = $request->browserInstanceGroupId;
        }

        if (null !== $request->browserInstanceGroupName) {
            @$query['BrowserInstanceGroupName'] = $request->browserInstanceGroupName;
        }

        if (null !== $request->cloudBrowserName) {
            @$query['CloudBrowserName'] = $request->cloudBrowserName;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tier) {
            @$query['Tier'] = $request->tier;
        }

        $body = [];
        if (null !== $request->excludedUserGroupIds) {
            @$body['ExcludedUserGroupIds'] = $request->excludedUserGroupIds;
        }

        $bodyFlat = [];
        if (null !== $request->status) {
            @$bodyFlat['Status'] = $request->status;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query of cloud browser groups and their current statuses.
     *
     * @remarks
     * This topic describes how paged query cloud browser groups in the monthly active user (MAU) billing scenario.
     * ## Query conditions
     * You can filter cloud browser groups by browser group ID, name, business region, office network, set, authorized user group, and status. You can specify only one status value at a time for status filtering.
     * ## Pagination
     * Use PageNumber and PageSize paged query data by page. You can determine whether paged query the next page based on the returned TotalCount.
     * ## What to do next
     * To view the detailed configurations of a single browser group, call GetBrowserInstanceGroup by using the returned ID.
     * ## Example notes
     * The hyphen (`-`) in the examples indicates that the field is not applicable or not returned in the current scenario, and is not an actual string returned by the API operation. The common resource IDs in the examples are desensitized. Use the actual query results when you use the API operation.
     *
     * @param request - ListBrowserInstanceGroupRequest
     *
     * @returns ListBrowserInstanceGroupResponse
     *
     * @param ListBrowserInstanceGroupRequest $request
     *
     * @return ListBrowserInstanceGroupResponse
     */
    public function listBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the list of access restriction URLs configured for a specified browser delivery group or delivery group set by using paging.
     *
     * @remarks
     * You can call this operation to query the list of access restriction URLs configured for a cloud browser delivery group or delivery group set by using paging to view the details of the URLs configured in the current access control policy.
     * You must specify either BrowserInstanceGroupId or BrowserInstanceGroupSetId, but not both. If you specify BrowserInstanceGroupId, the restricted URLs for the delivery group are queried. If you specify BrowserInstanceGroupSetId, the restricted URLs for the delivery group set are queried. Specifying both or neither returns a parameter error.
     * You can use Keyword to filter restricted URLs by using a contains match. The match is case-insensitive for English characters. If you do not specify this parameter, all restricted URLs are returned. Pagination is controlled by PageNumber and PageSize. Valid values for PageSize: 1 to 200. Default value: 200. Default value for PageNumber: 0. If the value is less than 1, the first page is returned. In the response, TotalCount indicates the total number of records that meet the filter conditions, and Data contains the records on the current page. If no data is found, an empty array is returned.
     *
     * @param request - ListBrowserRestrictedURLsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBrowserRestrictedURLsResponse
     *
     * @param ListBrowserRestrictedURLsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListBrowserRestrictedURLsResponse
     */
    public function listBrowserRestrictedURLsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->browserInstanceGroupId) {
            @$query['BrowserInstanceGroupId'] = $request->browserInstanceGroupId;
        }

        if (null !== $request->browserInstanceGroupSetId) {
            @$query['BrowserInstanceGroupSetId'] = $request->browserInstanceGroupSetId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBrowserRestrictedURLs',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBrowserRestrictedURLsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of access restriction URLs configured for a specified browser delivery group or delivery group set by using paging.
     *
     * @remarks
     * You can call this operation to query the list of access restriction URLs configured for a cloud browser delivery group or delivery group set by using paging to view the details of the URLs configured in the current access control policy.
     * You must specify either BrowserInstanceGroupId or BrowserInstanceGroupSetId, but not both. If you specify BrowserInstanceGroupId, the restricted URLs for the delivery group are queried. If you specify BrowserInstanceGroupSetId, the restricted URLs for the delivery group set are queried. Specifying both or neither returns a parameter error.
     * You can use Keyword to filter restricted URLs by using a contains match. The match is case-insensitive for English characters. If you do not specify this parameter, all restricted URLs are returned. Pagination is controlled by PageNumber and PageSize. Valid values for PageSize: 1 to 200. Default value: 200. Default value for PageNumber: 0. If the value is less than 1, the first page is returned. In the response, TotalCount indicates the total number of records that meet the filter conditions, and Data contains the records on the current page. If no data is found, an empty array is returned.
     *
     * @param request - ListBrowserRestrictedURLsRequest
     *
     * @returns ListBrowserRestrictedURLsResponse
     *
     * @param ListBrowserRestrictedURLsRequest $request
     *
     * @return ListBrowserRestrictedURLsResponse
     */
    public function listBrowserRestrictedURLs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBrowserRestrictedURLsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of desktop Agent runtimes.
     *
     * @param request - ListDesktopAgentRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDesktopAgentRuntimeResponse
     *
     * @param ListDesktopAgentRuntimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDesktopAgentRuntimeResponse
     */
    public function listDesktopAgentRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentImOnlineStatus) {
            @$query['AgentImOnlineStatus'] = $request->agentImOnlineStatus;
        }

        if (null !== $request->agentInstanceStatuses) {
            @$query['AgentInstanceStatuses'] = $request->agentInstanceStatuses;
        }

        if (null !== $request->agentInstanceVersions) {
            @$query['AgentInstanceVersions'] = $request->agentInstanceVersions;
        }

        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentPlatformList) {
            @$query['AgentPlatformList'] = $request->agentPlatformList;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->agentProviderList) {
            @$query['AgentProviderList'] = $request->agentProviderList;
        }

        if (null !== $request->agentTemplateIds) {
            @$query['AgentTemplateIds'] = $request->agentTemplateIds;
        }

        if (null !== $request->authUsers) {
            @$query['AuthUsers'] = $request->authUsers;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->channelConfigure) {
            @$query['ChannelConfigure'] = $request->channelConfigure;
        }

        if (null !== $request->deploymentSource) {
            @$query['DeploymentSource'] = $request->deploymentSource;
        }

        if (null !== $request->desktopIds) {
            @$query['DesktopIds'] = $request->desktopIds;
        }

        if (null !== $request->desktopNames) {
            @$query['DesktopNames'] = $request->desktopNames;
        }

        if (null !== $request->desktopStatuses) {
            @$query['DesktopStatuses'] = $request->desktopStatuses;
        }

        if (null !== $request->hasAuthUser) {
            @$query['HasAuthUser'] = $request->hasAuthUser;
        }

        if (null !== $request->hasRisk) {
            @$query['HasRisk'] = $request->hasRisk;
        }

        if (null !== $request->includeRiskInfo) {
            @$query['IncludeRiskInfo'] = $request->includeRiskInfo;
        }

        if (null !== $request->managementStatus) {
            @$query['ManagementStatus'] = $request->managementStatus;
        }

        if (null !== $request->modelConfigure) {
            @$query['ModelConfigure'] = $request->modelConfigure;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDesktopAgentRuntime',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDesktopAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of desktop Agent runtimes.
     *
     * @param request - ListDesktopAgentRuntimeRequest
     *
     * @returns ListDesktopAgentRuntimeResponse
     *
     * @param ListDesktopAgentRuntimeRequest $request
     *
     * @return ListDesktopAgentRuntimeResponse
     */
    public function listDesktopAgentRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDesktopAgentRuntimeWithOptions($request, $runtime);
    }

    /**
     * Queries image information.
     *
     * @param request - ListImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageResponse
     *
     * @param ListImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListImageResponse
     */
    public function listImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->distro) {
            @$query['Distro'] = $request->distro;
        }

        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        $body = [];
        if (null !== $request->bizRegionIdList) {
            @$body['BizRegionIdList'] = $request->bizRegionIdList;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->bizTypeList) {
            @$body['BizTypeList'] = $request->bizTypeList;
        }

        if (null !== $request->featureList) {
            @$body['FeatureList'] = $request->featureList;
        }

        if (null !== $request->fotaVersion) {
            @$body['FotaVersion'] = $request->fotaVersion;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->imageType) {
            @$body['ImageType'] = $request->imageType;
        }

        if (null !== $request->languageType) {
            @$body['LanguageType'] = $request->languageType;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->platformName) {
            @$body['PlatformName'] = $request->platformName;
        }

        if (null !== $request->platformNameList) {
            @$body['PlatformNameList'] = $request->platformNameList;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->productTypeList) {
            @$body['ProductTypeList'] = $request->productTypeList;
        }

        if (null !== $request->protocolType) {
            @$body['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->resourceInstanceType) {
            @$body['ResourceInstanceType'] = $request->resourceInstanceType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries image information.
     *
     * @param request - ListImageRequest
     *
     * @returns ListImageResponse
     *
     * @param ListImageRequest $request
     *
     * @return ListImageResponse
     */
    public function listImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageWithOptions($request, $runtime);
    }

    /**
     * Queries a list of LLM templates.
     *
     * @remarks
     * You can use paging to perform a paged query of the model template list under a model provider template in the Wuying Agent Management Center. You can filter the results by model group ID, model provider template ID, model template ID, and model encoding. When you query by the model group dimension, the default model is automatically pinned to the top.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param tmpReq - ListLlmTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLlmTemplatesResponse
     *
     * @param ListLlmTemplatesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListLlmTemplatesResponse
     */
    public function listLlmTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListLlmTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->llmTemplateIds) {
            $request->llmTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->llmTemplateIds, 'LlmTemplateIds', 'json');
        }

        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->llmCode) {
            @$query['LlmCode'] = $request->llmCode;
        }

        if (null !== $request->llmTemplateIdsShrink) {
            @$query['LlmTemplateIds'] = $request->llmTemplateIdsShrink;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        if (null !== $request->smartModel) {
            @$query['SmartModel'] = $request->smartModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLlmTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLlmTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of LLM templates.
     *
     * @remarks
     * You can use paging to perform a paged query of the model template list under a model provider template in the Wuying Agent Management Center. You can filter the results by model group ID, model provider template ID, model template ID, and model encoding. When you query by the model group dimension, the default model is automatically pinned to the top.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ListLlmTemplatesRequest
     *
     * @returns ListLlmTemplatesResponse
     *
     * @param ListLlmTemplatesRequest $request
     *
     * @return ListLlmTemplatesResponse
     */
    public function listLlmTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLlmTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of model provider endpoints.
     *
     * @param request - ListModelProviderEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProviderEndpointsResponse
     *
     * @param ListModelProviderEndpointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListModelProviderEndpointsResponse
     */
    public function listModelProviderEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviderEndpoints',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelProviderEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of model provider endpoints.
     *
     * @param request - ListModelProviderEndpointsRequest
     *
     * @returns ListModelProviderEndpointsResponse
     *
     * @param ListModelProviderEndpointsRequest $request
     *
     * @return ListModelProviderEndpointsResponse
     */
    public function listModelProviderEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelProviderEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of available LLM model codes for a specified model provider. It supports filtering by LLM code, model brand, recommendation level, and recommendation status, and returns model information such as the model name, description, release time, features, inference modality, pricing, credit multiplier, and risk type.
     *
     * @param request - ListModelProviderLlmCodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProviderLlmCodesResponse
     *
     * @param ListModelProviderLlmCodesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListModelProviderLlmCodesResponse
     */
    public function listModelProviderLlmCodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->llmCode) {
            @$query['LlmCode'] = $request->llmCode;
        }

        if (null !== $request->modelBrands) {
            @$query['ModelBrands'] = $request->modelBrands;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        if (null !== $request->recommended) {
            @$query['Recommended'] = $request->recommended;
        }

        if (null !== $request->recommendedLevels) {
            @$query['RecommendedLevels'] = $request->recommendedLevels;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviderLlmCodes',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelProviderLlmCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of available LLM model codes for a specified model provider. It supports filtering by LLM code, model brand, recommendation level, and recommendation status, and returns model information such as the model name, description, release time, features, inference modality, pricing, credit multiplier, and risk type.
     *
     * @param request - ListModelProviderLlmCodesRequest
     *
     * @returns ListModelProviderLlmCodesResponse
     *
     * @param ListModelProviderLlmCodesRequest $request
     *
     * @return ListModelProviderLlmCodesResponse
     */
    public function listModelProviderLlmCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelProviderLlmCodesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of model provider templates.
     *
     * @remarks
     * You can perform a paged query to retrieve the list of model provider templates under a specified model group in the WUYING Agent Management Center. You can filter results by provider name, model group ID, and provider template ID. Paging is supported.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param tmpReq - ListModelProviderTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProviderTemplatesResponse
     *
     * @param ListModelProviderTemplatesRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListModelProviderTemplatesResponse
     */
    public function listModelProviderTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelProviderTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->providerTemplateIds) {
            $request->providerTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->providerTemplateIds, 'ProviderTemplateIds', 'json');
        }

        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        if (null !== $request->providerTemplateIdsShrink) {
            @$query['ProviderTemplateIds'] = $request->providerTemplateIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviderTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelProviderTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of model provider templates.
     *
     * @remarks
     * You can perform a paged query to retrieve the list of model provider templates under a specified model group in the WUYING Agent Management Center. You can filter results by provider name, model group ID, and provider template ID. Paging is supported.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListModelProviderTemplatesRequest
     *
     * @returns ListModelProviderTemplatesResponse
     *
     * @param ListModelProviderTemplatesRequest $request
     *
     * @return ListModelProviderTemplatesResponse
     */
    public function listModelProviderTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelProviderTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of resource groups associated with a model group.
     *
     * @remarks
     * You can call this operation to query the list of resource groups authorized by a model group in the WUYING Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListModelTemplateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelTemplateResourceGroupResponse
     *
     * @param ListModelTemplateResourceGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListModelTemplateResourceGroupResponse
     */
    public function listModelTemplateResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelTemplateResourceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelTemplateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resource groups associated with a model group.
     *
     * @remarks
     * You can call this operation to query the list of resource groups authorized by a model group in the WUYING Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListModelTemplateResourceGroupRequest
     *
     * @returns ListModelTemplateResourceGroupResponse
     *
     * @param ListModelTemplateResourceGroupRequest $request
     *
     * @return ListModelTemplateResourceGroupResponse
     */
    public function listModelTemplateResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelTemplateResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries a list of model templates.
     *
     * @remarks
     * You can use paged query to retrieve the list of model groups created in the Wuying Agent Management Center. You can filter results by Agent provider, Agent platform, template group ID, and whether models have been configured. Paging is supported.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param tmpReq - ListModelTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelTemplatesResponse
     *
     * @param ListModelTemplatesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListModelTemplatesResponse
     */
    public function listModelTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->modelTemplateIdList) {
            $request->modelTemplateIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelTemplateIdList, 'ModelTemplateIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentPlatformList) {
            @$query['AgentPlatformList'] = $request->agentPlatformList;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->agentProviderList) {
            @$query['AgentProviderList'] = $request->agentProviderList;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->hasModel) {
            @$query['HasModel'] = $request->hasModel;
        }

        if (null !== $request->modelTemplateIdListShrink) {
            @$query['ModelTemplateIdList'] = $request->modelTemplateIdListShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->refScope) {
            @$query['RefScope'] = $request->refScope;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of model templates.
     *
     * @remarks
     * You can use paged query to retrieve the list of model groups created in the Wuying Agent Management Center. You can filter results by Agent provider, Agent platform, template group ID, and whether models have been configured. Paging is supported.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ListModelTemplatesRequest
     *
     * @returns ListModelTemplatesResponse
     *
     * @param ListModelTemplatesRequest $request
     *
     * @return ListModelTemplatesResponse
     */
    public function listModelTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the resource specifications available for selection when creating a delivery group.
     *
     * @param request - ListNodeInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodeInstanceTypeResponse
     *
     * @param ListNodeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->gpu) {
            @$query['Gpu'] = $request->gpu;
        }

        if (null !== $request->gpuMemory) {
            @$query['GpuMemory'] = $request->gpuMemory;
        }

        if (null !== $request->instanceTypeForModify) {
            @$query['InstanceTypeForModify'] = $request->instanceTypeForModify;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->nodeInstanceType) {
            @$query['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->nodeInstanceTypeFamily) {
            @$query['NodeInstanceTypeFamily'] = $request->nodeInstanceTypeFamily;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodeInstanceType',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource specifications available for selection when creating a delivery group.
     *
     * @param request - ListNodeInstanceTypeRequest
     *
     * @returns ListNodeInstanceTypeResponse
     *
     * @param ListNodeInstanceTypeRequest $request
     *
     * @return ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the list of resource nodes.
     *
     * @param request - ListNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNodes',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resource nodes.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * Queries the history of over-the-air updates.
     *
     * @param request - ListOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOtaTaskResponse
     *
     * @param ListOtaTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListOtaTaskResponse
     */
    public function listOtaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->otaType) {
            @$body['OtaType'] = $request->otaType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOtaTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the history of over-the-air updates.
     *
     * @param request - ListOtaTaskRequest
     *
     * @returns ListOtaTaskResponse
     *
     * @param ListOtaTaskRequest $request
     *
     * @return ListOtaTaskResponse
     */
    public function listOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOtaTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the list of persistent session application instances in a delivery group.
     *
     * @param request - ListPersistentAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPersistentAppInstancesResponse
     *
     * @param ListPersistentAppInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListPersistentAppInstancesResponse
     */
    public function listPersistentAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstancePersistentIds) {
            @$query['AppInstancePersistentIds'] = $request->appInstancePersistentIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPersistentAppInstances',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPersistentAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of persistent session application instances in a delivery group.
     *
     * @param request - ListPersistentAppInstancesRequest
     *
     * @returns ListPersistentAppInstancesResponse
     *
     * @param ListPersistentAppInstancesRequest $request
     *
     * @return ListPersistentAppInstancesResponse
     */
    public function listPersistentAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersistentAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the published delivery groups and their application information for a specified product type under the current Alibaba Cloud account by using paging, and supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Prerequisites
     * When you call this operation as a RAM user or by using STS credentials, you must have the `appstreaming:ListPublishedAppInstanceGroup` permission.
     * Only delivery groups that are in the published state and have deployed applications in their images are included in the query results. This operation only queries information. It does not create delivery groups, assign users, or grant application access permissions.
     * ## Query and pagination
     * - **You must explicitly specify `ProductType`, `PageNumber`, and `PageSize`.** The page number starts from `1`, and the number of entries per page ranges from `1` to `100`.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support partial matching. You can specify them individually or in combination. If multiple conditions are specified, all conditions must be met. If both `AppId` and `AppName` are specified, they must be met by the same application.
     * - If an optional filter parameter is not specified or is set to an empty string, the results are not filtered by this condition. The query results are sorted in descending order of the delivery group creation time. A delivery group is not returned multiple times even if it contains multiple matched applications.
     * - `ExcludeUserId` is used to exclude delivery groups for which all applications have been directly authorized to a specified user. It cannot be used to determine whether the user has no access permissions at all.
     * - `AppId` and `AppName` only filter delivery groups and **do not restrict the returned `Apps` list to the matched applications**.
     * ## Invocation sequence
     * 1. Initiate a query with `PageNumber=1` and the desired `PageSize`. For common scenarios of Wuying Cloud App, set `ProductType` to `CloudApp`.
     * 2. Read `AppInstanceGroupModels`. To retrieve the next page, keep the product type and filter conditions unchanged, and increment `PageNumber`. If no delivery groups match the conditions, the total count is `0` and the list is empty. If the page number exceeds the range of the current results, the list may also be empty, but the total count still represents the total number of all matched delivery groups.
     * 3. To obtain the details of a single delivery group, pass the complete `AppInstanceGroupId` returned and the same `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identity in the examples is used to demonstrate the format. Replace it with your actual identity when you invoke the operation.
     *
     * @param request - ListPublishedAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAppInstanceGroupResponse
     *
     * @param ListPublishedAppInstanceGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListPublishedAppInstanceGroupResponse
     */
    public function listPublishedAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->excludeUserId) {
            @$query['ExcludeUserId'] = $request->excludeUserId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishedAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublishedAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the published delivery groups and their application information for a specified product type under the current Alibaba Cloud account by using paging, and supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Prerequisites
     * When you call this operation as a RAM user or by using STS credentials, you must have the `appstreaming:ListPublishedAppInstanceGroup` permission.
     * Only delivery groups that are in the published state and have deployed applications in their images are included in the query results. This operation only queries information. It does not create delivery groups, assign users, or grant application access permissions.
     * ## Query and pagination
     * - **You must explicitly specify `ProductType`, `PageNumber`, and `PageSize`.** The page number starts from `1`, and the number of entries per page ranges from `1` to `100`.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support partial matching. You can specify them individually or in combination. If multiple conditions are specified, all conditions must be met. If both `AppId` and `AppName` are specified, they must be met by the same application.
     * - If an optional filter parameter is not specified or is set to an empty string, the results are not filtered by this condition. The query results are sorted in descending order of the delivery group creation time. A delivery group is not returned multiple times even if it contains multiple matched applications.
     * - `ExcludeUserId` is used to exclude delivery groups for which all applications have been directly authorized to a specified user. It cannot be used to determine whether the user has no access permissions at all.
     * - `AppId` and `AppName` only filter delivery groups and **do not restrict the returned `Apps` list to the matched applications**.
     * ## Invocation sequence
     * 1. Initiate a query with `PageNumber=1` and the desired `PageSize`. For common scenarios of Wuying Cloud App, set `ProductType` to `CloudApp`.
     * 2. Read `AppInstanceGroupModels`. To retrieve the next page, keep the product type and filter conditions unchanged, and increment `PageNumber`. If no delivery groups match the conditions, the total count is `0` and the list is empty. If the page number exceeds the range of the current results, the list may also be empty, but the total count still represents the total number of all matched delivery groups.
     * 3. To obtain the details of a single delivery group, pass the complete `AppInstanceGroupId` returned and the same `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identity in the examples is used to demonstrate the format. Replace it with your actual identity when you invoke the operation.
     *
     * @param request - ListPublishedAppInstanceGroupRequest
     *
     * @returns ListPublishedAppInstanceGroupResponse
     *
     * @param ListPublishedAppInstanceGroupRequest $request
     *
     * @return ListPublishedAppInstanceGroupResponse
     */
    public function listPublishedAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries deployed applications in published delivery groups under the current Alibaba Cloud account for a specified product type by paging, and returns each application along with its delivery group and the number of authorized users by application. Supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Before you begin
     * When you call this operation by using a RAM user or Security Token Service (STS) credential, you must have the `appstreaming:ListPublishedApps` permission.
     * Only delivery groups in the published state whose images contain deployed applications are included in the query results. This operation only queries information. It does not create delivery groups or grant or revoke application access permissions.
     * ## Response granularity
     * Results are returned on a per-delivery-group-plus-application basis. If the same application is deployed in multiple published delivery groups, a separate record is returned for each combination. `TotalCount` also reflects the number of such combinations. The list is sorted by the creation time of the delivery group in descending order.
     * ## Query and pagination
     * - **You must explicitly specify `ProductType`, `PageNumber`, and `PageSize`.** Page numbers start from `1`, and the page size ranges from `1` to `100`. Invalid values return error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize`, respectively.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support substring matching. You can specify them individually or in combination. When multiple conditions are specified, all conditions must be met.
     * - If an optional filter parameter is not specified or is set to an empty string, filtering is not applied for that condition.
     * - `ExcludeUserId` excludes applications that have been authorized to the specified user by application, which helps you find applications that can still be authorized to that user. **Access permissions granted through delivery-group-level authorization or user groups are not evaluated by this condition.**
     * ## Invocation sequence
     * 1. Initiate a query with `PageNumber=1` and the desired `PageSize`. For WUYING Cloud Application common scenarios, use `ProductType=CloudApp`.
     * 2. Read `Apps`. To retrieve the next page, increment `PageNumber` while keeping the product type and filter conditions unchanged. If no results match, `TotalCount` is `0` and `Apps` is an empty list. If the page number exceeds the result range, `Apps` may also be empty, but `TotalCount` still indicates the total number of matching records.
     * 3. To authorize users for a specific application by application, pass the returned `AppInstanceGroupId`, `AppId`, and the same `ProductType` to [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~). To view delivery group details, pass `AppInstanceGroupId` and `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identities in the examples are for format demonstration purposes. Replace them with your actual identities when you invoke the operation.
     *
     * @param request - ListPublishedAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAppsResponse
     *
     * @param ListPublishedAppsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPublishedAppsResponse
     */
    public function listPublishedAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->excludeUserId) {
            @$query['ExcludeUserId'] = $request->excludeUserId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishedApps',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublishedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries deployed applications in published delivery groups under the current Alibaba Cloud account for a specified product type by paging, and returns each application along with its delivery group and the number of authorized users by application. Supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Before you begin
     * When you call this operation by using a RAM user or Security Token Service (STS) credential, you must have the `appstreaming:ListPublishedApps` permission.
     * Only delivery groups in the published state whose images contain deployed applications are included in the query results. This operation only queries information. It does not create delivery groups or grant or revoke application access permissions.
     * ## Response granularity
     * Results are returned on a per-delivery-group-plus-application basis. If the same application is deployed in multiple published delivery groups, a separate record is returned for each combination. `TotalCount` also reflects the number of such combinations. The list is sorted by the creation time of the delivery group in descending order.
     * ## Query and pagination
     * - **You must explicitly specify `ProductType`, `PageNumber`, and `PageSize`.** Page numbers start from `1`, and the page size ranges from `1` to `100`. Invalid values return error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize`, respectively.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support substring matching. You can specify them individually or in combination. When multiple conditions are specified, all conditions must be met.
     * - If an optional filter parameter is not specified or is set to an empty string, filtering is not applied for that condition.
     * - `ExcludeUserId` excludes applications that have been authorized to the specified user by application, which helps you find applications that can still be authorized to that user. **Access permissions granted through delivery-group-level authorization or user groups are not evaluated by this condition.**
     * ## Invocation sequence
     * 1. Initiate a query with `PageNumber=1` and the desired `PageSize`. For WUYING Cloud Application common scenarios, use `ProductType=CloudApp`.
     * 2. Read `Apps`. To retrieve the next page, increment `PageNumber` while keeping the product type and filter conditions unchanged. If no results match, `TotalCount` is `0` and `Apps` is an empty list. If the page number exceeds the result range, `Apps` may also be empty, but `TotalCount` still indicates the total number of matching records.
     * 3. To authorize users for a specific application by application, pass the returned `AppInstanceGroupId`, `AppId`, and the same `ProductType` to [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~). To view delivery group details, pass `AppInstanceGroupId` and `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identities in the examples are for format demonstration purposes. Replace them with your actual identities when you invoke the operation.
     *
     * @param request - ListPublishedAppsRequest
     *
     * @returns ListPublishedAppsResponse
     *
     * @param ListPublishedAppsRequest $request
     *
     * @return ListPublishedAppsResponse
     */
    public function listPublishedApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedAppsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of region IDs available for image services under a specified product for the current account.
     *
     * @remarks
     * The returned results are affected by the available region configurations of the account and the product type. If ProductType is omitted, the query is performed based on CloudApp.
     * This operation returns the regions available for image services. You cannot use this information to determine whether a specific image has been distributed to these regions. Before you create or distribute an image based on a parent image, you must also check the region information of the destination image.
     *
     * @param request - ListRegionIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionIdResponse
     *
     * @param ListRegionIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListRegionIdResponse
     */
    public function listRegionIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRegionId',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of region IDs available for image services under a specified product for the current account.
     *
     * @remarks
     * The returned results are affected by the available region configurations of the account and the product type. If ProductType is omitted, the query is performed based on CloudApp.
     * This operation returns the regions available for image services. You cannot use this information to determine whether a specific image has been distributed to these regions. Before you create or distribute an image based on a parent image, you must also check the region information of the destination image.
     *
     * @param request - ListRegionIdRequest
     *
     * @returns ListRegionIdResponse
     *
     * @param ListRegionIdRequest $request
     *
     * @return ListRegionIdResponse
     */
    public function listRegionId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionIdWithOptions($request, $runtime);
    }

    /**
     * Queries the regions supported by WUYING Cloud Application.
     *
     * @remarks
     * > The regions returned by this operation are not all available regions. For information about available regions, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizSource) {
            @$query['BizSource'] = $request->bizSource;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions supported by WUYING Cloud Application.
     *
     * @remarks
     * > The regions returned by this operation are not all available regions. For information about available regions, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
     *
     * @param request - ListRegionsRequest
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags of one or more specified cloud resources.
     *
     * @param request - ListTagCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagCloudResourcesResponse
     *
     * @param ListTagCloudResourcesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTagCloudResourcesResponse
     */
    public function listTagCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagCloudResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of one or more specified cloud resources.
     *
     * @param request - ListTagCloudResourcesRequest
     *
     * @returns ListTagCloudResourcesResponse
     *
     * @param ListTagCloudResourcesRequest $request
     *
     * @return ListTagCloudResourcesResponse
     */
    public function listTagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries tags bound to one or more delivery groups, or filters delivery groups that have specific tags bound by tag key-value pairs.
     *
     * @remarks
     * This operation complies with the Alibaba Cloud tagging standard and is used to query tags bound to Elastic Cloud Application (China) delivery groups. You can query tags bound to resources by resource ID, or filter resources that have specific tags bound by tag key-value pairs.
     * ## Before you begin
     * - A delivery group is created. You can call the ListAppInstanceGroup operation to obtain the delivery group ID.
     * - Tags are bound to the delivery group. You can bind tags by calling the TagResources operation, or by using the console or the Tag service.
     * ## Parameter description
     * - **ResourceType is required**. Only `APPINSTANCEGROUP` (delivery group) is supported. If you specify other values, the error code `InvalidResourceType.Invalid` is returned.
     * - **Specify at least one of ResourceId.N and Tag.N**. If neither is specified, the error code `MissingParameter.ResourceIdsOrTags` is returned.
     *   - If only ResourceId.N is specified: all tags attached to the specified resources are returned.
     *   - If only Tag.N is specified: all resources that have the specified tags attached and their matching tags are returned.
     *   - If both are specified: only records of the specified resources that have the specified tags attached are returned.
     * - Tag.N.Key is required. If it is empty, the error code `InvalidTagPolicy.KeyInvalid` is returned. Tag.N.Value is optional. If it is not specified, the value of the tag key is not restricted, which means any tag value under the key is matched.
     * - Multiple Tag.N conditions have an AND relationship. A resource is returned only if it has all specified tags attached.
     * ## Response description
     * - Each record in the response corresponds to a resource-tag key-value pair. If a resource has multiple tags bound, multiple records are returned.
     * - TotalCount indicates the number of records returned.
     * - This operation returns all matching results at a time. An empty NextToken value indicates that no more data is available.
     * ## Invocation sequence
     * 1. Invoke the ListAppInstanceGroup operation to obtain the delivery group ID.
     * 2. Invoke the TagResources operation to attach tags to the delivery group.
     * 3. Invoke this operation to query tag bindings by resource ID or tag conditions.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $bodyFlat = [];
        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tags bound to one or more delivery groups, or filters delivery groups that have specific tags bound by tag key-value pairs.
     *
     * @remarks
     * This operation complies with the Alibaba Cloud tagging standard and is used to query tags bound to Elastic Cloud Application (China) delivery groups. You can query tags bound to resources by resource ID, or filter resources that have specific tags bound by tag key-value pairs.
     * ## Before you begin
     * - A delivery group is created. You can call the ListAppInstanceGroup operation to obtain the delivery group ID.
     * - Tags are bound to the delivery group. You can bind tags by calling the TagResources operation, or by using the console or the Tag service.
     * ## Parameter description
     * - **ResourceType is required**. Only `APPINSTANCEGROUP` (delivery group) is supported. If you specify other values, the error code `InvalidResourceType.Invalid` is returned.
     * - **Specify at least one of ResourceId.N and Tag.N**. If neither is specified, the error code `MissingParameter.ResourceIdsOrTags` is returned.
     *   - If only ResourceId.N is specified: all tags attached to the specified resources are returned.
     *   - If only Tag.N is specified: all resources that have the specified tags attached and their matching tags are returned.
     *   - If both are specified: only records of the specified resources that have the specified tags attached are returned.
     * - Tag.N.Key is required. If it is empty, the error code `InvalidTagPolicy.KeyInvalid` is returned. Tag.N.Value is optional. If it is not specified, the value of the tag key is not restricted, which means any tag value under the key is matched.
     * - Multiple Tag.N conditions have an AND relationship. A resource is returned only if it has all specified tags attached.
     * ## Response description
     * - Each record in the response corresponds to a resource-tag key-value pair. If a resource has multiple tags bound, multiple records are returned.
     * - TotalCount indicates the number of records returned.
     * - This operation returns all matching results at a time. An empty NextToken value indicates that no more data is available.
     * ## Invocation sequence
     * 1. Invoke the ListAppInstanceGroup operation to obtain the delivery group ID.
     * 2. Invoke the TagResources operation to attach tags to the delivery group.
     * 3. Invoke this operation to query tag bindings by resource ID or tag conditions.
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

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the step identifiers, step categories, and interaction methods for application adaptation or image creation tasks.
     *
     * @remarks
     * Returns application adaptation steps when Type is set to ADAPTOR, and image creation steps when Type is set to IMAGE.
     * This operation returns step definitions, not the actual progress of a specific task. Read the step definitions first, and then combine them with the current step and step status returned by GetTask to display the task progress. The step sets vary across different task types. Do not use the step index as the completion percentage.
     *
     * @param request - ListTaskStepRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTaskStepResponse
     *
     * @param ListTaskStepRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTaskStepResponse
     */
    public function listTaskStepWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTaskStep',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTaskStepResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the step identifiers, step categories, and interaction methods for application adaptation or image creation tasks.
     *
     * @remarks
     * Returns application adaptation steps when Type is set to ADAPTOR, and image creation steps when Type is set to IMAGE.
     * This operation returns step definitions, not the actual progress of a specific task. Read the step definitions first, and then combine them with the current step and step status returned by GetTask to display the task progress. The step sets vary across different task types. Do not use the step index as the completion percentage.
     *
     * @param request - ListTaskStepRequest
     *
     * @returns ListTaskStepResponse
     *
     * @param ListTaskStepRequest $request
     *
     * @return ListTaskStepResponse
     */
    public function listTaskStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskStepWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information of an administrator account, such as whether resource expiration reminders are enabled.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTenantConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListTenantConfigResponse
     */
    public function listTenantConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListTenantConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information of an administrator account, such as whether resource expiration reminders are enabled.
     *
     * @returns ListTenantConfigResponse
     *
     * @return ListTenantConfigResponse
     */
    public function listTenantConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantConfigWithOptions($runtime);
    }

    /**
     * Queries a list of workstations.
     *
     * @remarks
     * Retrieves a list of WUYING workstations.
     *
     * @param request - ListWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWuyingServerResponse
     *
     * @param ListWuyingServerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListWuyingServerResponse
     */
    public function listWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->addVirtualNodePoolStatusList) {
            @$bodyFlat['AddVirtualNodePoolStatusList'] = $request->addVirtualNodePoolStatusList;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->createTimeEnd) {
            @$body['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$body['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->expiredTimeEnd) {
            @$body['ExpiredTimeEnd'] = $request->expiredTimeEnd;
        }

        if (null !== $request->expiredTimeStart) {
            @$body['ExpiredTimeStart'] = $request->expiredTimeStart;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->networkInterfaceIp) {
            @$body['NetworkInterfaceIp'] = $request->networkInterfaceIp;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->serverInstanceType) {
            @$body['ServerInstanceType'] = $request->serverInstanceType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->users) {
            @$bodyFlat['Users'] = $request->users;
        }

        if (null !== $request->virtualNodePoolId) {
            @$body['VirtualNodePoolId'] = $request->virtualNodePoolId;
        }

        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        if (null !== $request->wuyingServerNameOrId) {
            @$body['WuyingServerNameOrId'] = $request->wuyingServerNameOrId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of workstations.
     *
     * @remarks
     * Retrieves a list of WUYING workstations.
     *
     * @param request - ListWuyingServerRequest
     *
     * @returns ListWuyingServerResponse
     *
     * @param ListWuyingServerRequest $request
     *
     * @return ListWuyingServerResponse
     */
    public function listWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Queries the Wuying Workstation workload templates available for a specified virtual node pool.
     *
     * @remarks
     * Queries the workload templates available for a specified virtual node pool. Before calling this operation, call [ListWuyingServer](~~ListWuyingServer~~) to obtain the `VirtualNodePoolId` of the current account. The operation verifies the ownership of the node pool and returns up to 100 records sorted by template configuration order. The template content is Base64-encoded after being encoded in UTF-8. You must decode the Base64 string before use. The current version does not use `MaxResults` and `NextToken` for pagination.
     *
     * @param request - ListWuyingServerWorkloadTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWuyingServerWorkloadTemplateResponse
     *
     * @param ListWuyingServerWorkloadTemplateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListWuyingServerWorkloadTemplateResponse
     */
    public function listWuyingServerWorkloadTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->virtualNodePoolId) {
            @$query['VirtualNodePoolId'] = $request->virtualNodePoolId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWuyingServerWorkloadTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWuyingServerWorkloadTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Wuying Workstation workload templates available for a specified virtual node pool.
     *
     * @remarks
     * Queries the workload templates available for a specified virtual node pool. Before calling this operation, call [ListWuyingServer](~~ListWuyingServer~~) to obtain the `VirtualNodePoolId` of the current account. The operation verifies the ownership of the node pool and returns up to 100 records sorted by template configuration order. The template content is Base64-encoded after being encoded in UTF-8. You must decode the Base64 string before use. The current version does not use `MaxResults` and `NextToken` for pagination.
     *
     * @param request - ListWuyingServerWorkloadTemplateRequest
     *
     * @returns ListWuyingServerWorkloadTemplateResponse
     *
     * @param ListWuyingServerWorkloadTemplateRequest $request
     *
     * @return ListWuyingServerWorkloadTemplateResponse
     */
    public function listWuyingServerWorkloadTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWuyingServerWorkloadTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the list of available zone IDs for a specified region, product type, and operating system type.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of available zone IDs for the current Alibaba Cloud account based on the specified region, product type, and operating system type. A typical use case is to check which zones are available before creating a resource that requires a vSwitch, and then select a vSwitch in one of those zones.
     * This operation only queries information. It does not create resources or incur fees.
     * ## Before you begin
     * - When calling this operation with a RAM user or STS credential, the `appstreaming:ListAppInstanceType` permission is required. If the permission is insufficient, the error code `Forbidden.NoPermission` is returned.
     * - **`ProductType`, `BizRegionId`, and `OsType` are all required.** If any of these parameters is missing, empty, or set to an unrecognized value, the error code `InvalidParameter.ValueInvalid` is returned.
     * - `BizRegionId` must be a region ID supported by WUYING Cloud Application. Call [ListRegions](~~ListRegions~~) first to obtain the supported region IDs.
     * ## Call sequence
     * 1. Call [ListRegions](~~ListRegions~~) to obtain the supported region IDs.
     * 2. Call this operation with the region ID, target product type, and operating system type, and read the returned `ListZonesModel.Zones`.
     * 3. When creating a resource that requires a vSwitch, select a vSwitch in one of the returned zones. For example, pass the corresponding vSwitch ID when calling [CreateAppInstanceGroup](~~CreateAppInstanceGroup~~) or [CreateWuyingServer](~~CreateWuyingServer~~).
     * The returned zone list is determined by the available resources in the current region and may change over time. Query the list in real time before creating resources instead of caching it for extended periods.
     *
     * @param request - ListZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListZones',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of available zone IDs for a specified region, product type, and operating system type.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of available zone IDs for the current Alibaba Cloud account based on the specified region, product type, and operating system type. A typical use case is to check which zones are available before creating a resource that requires a vSwitch, and then select a vSwitch in one of those zones.
     * This operation only queries information. It does not create resources or incur fees.
     * ## Before you begin
     * - When calling this operation with a RAM user or STS credential, the `appstreaming:ListAppInstanceType` permission is required. If the permission is insufficient, the error code `Forbidden.NoPermission` is returned.
     * - **`ProductType`, `BizRegionId`, and `OsType` are all required.** If any of these parameters is missing, empty, or set to an unrecognized value, the error code `InvalidParameter.ValueInvalid` is returned.
     * - `BizRegionId` must be a region ID supported by WUYING Cloud Application. Call [ListRegions](~~ListRegions~~) first to obtain the supported region IDs.
     * ## Call sequence
     * 1. Call [ListRegions](~~ListRegions~~) to obtain the supported region IDs.
     * 2. Call this operation with the region ID, target product type, and operating system type, and read the returned `ListZonesModel.Zones`.
     * 3. When creating a resource that requires a vSwitch, select a vSwitch in one of the returned zones. For example, pass the corresponding vSwitch ID when calling [CreateAppInstanceGroup](~~CreateAppInstanceGroup~~) or [CreateWuyingServer](~~CreateWuyingServer~~).
     * The returned zone list is determined by the available resources in the current region and may change over time. Query the list in real time before creating resources instead of caching it for extended periods.
     *
     * @param request - ListZonesRequest
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZonesWithOptions($request, $runtime);
    }

    /**
     * Logs off all sessions in a pay-as-you-go delivery group that has scheduled auto scaling enabled.
     *
     * @remarks
     * > This operation applies only to pay-as-you-go resource delivery groups that have scheduled auto scaling enabled. The operation can be called only outside the scaling time periods specified in the scheduled auto scaling policy.
     *
     * @param request - LogOffAllSessionsInAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LogOffAllSessionsInAppInstanceGroupResponse
     *
     * @param LogOffAllSessionsInAppInstanceGroupRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return LogOffAllSessionsInAppInstanceGroupResponse
     */
    public function logOffAllSessionsInAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LogOffAllSessionsInAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Logs off all sessions in a pay-as-you-go delivery group that has scheduled auto scaling enabled.
     *
     * @remarks
     * > This operation applies only to pay-as-you-go resource delivery groups that have scheduled auto scaling enabled. The operation can be called only outside the scaling time periods specified in the scheduled auto scaling policy.
     *
     * @param request - LogOffAllSessionsInAppInstanceGroupRequest
     *
     * @returns LogOffAllSessionsInAppInstanceGroupResponse
     *
     * @param LogOffAllSessionsInAppInstanceGroupRequest $request
     *
     * @return LogOffAllSessionsInAppInstanceGroupResponse
     */
    public function logOffAllSessionsInAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->logOffAllSessionsInAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the General Policy of a delivery group, including the number of concurrent sessions and the session retention duration after disconnection.
     *
     * @param tmpReq - ModifyAppInstanceGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppInstanceGroupAttributeResponse
     *
     * @param ModifyAppInstanceGroupAttributeRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppInstanceGroupAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->nodePoolShrink) {
            @$query['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sessionTimeout) {
            @$query['SessionTimeout'] = $request->sessionTimeout;
        }

        $body = [];
        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->perSessionPerApp) {
            @$body['PerSessionPerApp'] = $request->perSessionPerApp;
        }

        if (null !== $request->preOpenAppId) {
            @$body['PreOpenAppId'] = $request->preOpenAppId;
        }

        if (null !== $request->preOpenMode) {
            @$body['PreOpenMode'] = $request->preOpenMode;
        }

        if (null !== $request->securityPolicyShrink) {
            @$body['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAppInstanceGroupAttribute',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInstanceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the General Policy of a delivery group, including the number of concurrent sessions and the session retention duration after disconnection.
     *
     * @param request - ModifyAppInstanceGroupAttributeRequest
     *
     * @returns ModifyAppInstanceGroupAttributeResponse
     *
     * @param ModifyAppInstanceGroupAttributeRequest $request
     *
     * @return ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of a specified delivery group to a target billing method and returns the ID of the billing conversion task to be created.
     *
     * @remarks
     * This operation performs billing method conversion, which may create orders and trigger subsequent billing changes. **A successful response or a returned task ID does not indicate that the new billing method has taken effect.**
     * **Prerequisites:**
     * - The resources belong to the current account, and the product and business region match the request. Only one delivery group can be specified per request.
     * - The target billing method must be different from the current billing method, and the target resource specifications must support the corresponding sales and Billable methods.
     * - Delivery groups that have been added to a valid collection cannot have their Billable methods converted individually.
     * - Multiple delivery groups created in the same batch of orders cannot have their Billable methods converted separately.
     * **Parameter relationships and call sequence:**
     * 1. Query the resource details first to confirm the product, business region, and current ChargeType. You can use [GetAppInstanceGroup](https://api.aliyun.com/document/appstream-center/2021-09-01/GetAppInstanceGroup) to query cloud application delivery groups.
     * 2. Explicitly specify the target ChargeType. If you need to purchase a subscription, specify the purchase duration by combining Period and PeriodUnit. The period combination must comply with the sales rules currently supported by the resource.
     * 3. Set AutoPay based on whether automatic payment is allowed. If auto-renewal is involved, explicitly set AutoRenew.
     * 4. After the call, save the returned AppInstanceGroupModel.TaskId. If there are unpaid orders, complete the payment first, and then query the resource details again to confirm that the billing method has been changed.
     * This operation does not accept an expiration time parameter. Do not pass the expiration time from other operations into this request. The task examples only illustrate the purpose of the ID and do not define a fixed prefix or length for real task IDs.
     *
     * @param tmpReq - ModifyAppInstanceGroupChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppInstanceGroupChargeTypeResponse
     *
     * @param ModifyAppInstanceGroupChargeTypeRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyAppInstanceGroupChargeTypeResponse
     */
    public function modifyAppInstanceGroupChargeTypeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppInstanceGroupChargeTypeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appInstanceGroupIds) {
            $request->appInstanceGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appInstanceGroupIds, 'AppInstanceGroupIds', 'json');
        }

        $body = [];
        if (null !== $request->appInstanceGroupIdsShrink) {
            @$body['AppInstanceGroupIds'] = $request->appInstanceGroupIdsShrink;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAppInstanceGroupChargeType',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInstanceGroupChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of a specified delivery group to a target billing method and returns the ID of the billing conversion task to be created.
     *
     * @remarks
     * This operation performs billing method conversion, which may create orders and trigger subsequent billing changes. **A successful response or a returned task ID does not indicate that the new billing method has taken effect.**
     * **Prerequisites:**
     * - The resources belong to the current account, and the product and business region match the request. Only one delivery group can be specified per request.
     * - The target billing method must be different from the current billing method, and the target resource specifications must support the corresponding sales and Billable methods.
     * - Delivery groups that have been added to a valid collection cannot have their Billable methods converted individually.
     * - Multiple delivery groups created in the same batch of orders cannot have their Billable methods converted separately.
     * **Parameter relationships and call sequence:**
     * 1. Query the resource details first to confirm the product, business region, and current ChargeType. You can use [GetAppInstanceGroup](https://api.aliyun.com/document/appstream-center/2021-09-01/GetAppInstanceGroup) to query cloud application delivery groups.
     * 2. Explicitly specify the target ChargeType. If you need to purchase a subscription, specify the purchase duration by combining Period and PeriodUnit. The period combination must comply with the sales rules currently supported by the resource.
     * 3. Set AutoPay based on whether automatic payment is allowed. If auto-renewal is involved, explicitly set AutoRenew.
     * 4. After the call, save the returned AppInstanceGroupModel.TaskId. If there are unpaid orders, complete the payment first, and then query the resource details again to confirm that the billing method has been changed.
     * This operation does not accept an expiration time parameter. Do not pass the expiration time from other operations into this request. The task examples only illustrate the purpose of the ID and do not define a fixed prefix or length for real task IDs.
     *
     * @param request - ModifyAppInstanceGroupChargeTypeRequest
     *
     * @returns ModifyAppInstanceGroupChargeTypeResponse
     *
     * @param ModifyAppInstanceGroupChargeTypeRequest $request
     *
     * @return ModifyAppInstanceGroupChargeTypeResponse
     */
    public function modifyAppInstanceGroupChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceGroupChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the display policy of a delivery group, including settings such as frame rate, resolution, and protocol type.
     *
     * @param tmpReq - ModifyAppPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppPolicyResponse
     *
     * @param ModifyAppPolicyRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAppPolicyResponse
     */
    public function modifyAppPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->videoPolicy) {
            $request->videoPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoPolicy, 'VideoPolicy', 'json');
        }

        $query = [];
        if (null !== $request->appPolicyId) {
            @$query['AppPolicyId'] = $request->appPolicyId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->videoPolicyShrink) {
            @$query['VideoPolicy'] = $request->videoPolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppPolicy',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the display policy of a delivery group, including settings such as frame rate, resolution, and protocol type.
     *
     * @param request - ModifyAppPolicyRequest
     *
     * @returns ModifyAppPolicyResponse
     *
     * @param ModifyAppPolicyRequest $request
     *
     * @return ModifyAppPolicyResponse
     */
    public function modifyAppPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a Wuying cloud browser.
     *
     * @remarks
     * Modifies the attributes of a Wuying cloud browser.
     *
     * @param tmpReq - ModifyBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBrowserInstanceGroupResponse
     *
     * @param ModifyBrowserInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBrowserInstanceGroupResponse
     */
    public function modifyBrowserInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBrowserInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->browserConfig) {
            $request->browserConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->browserConfig, 'BrowserConfig', 'json');
        }

        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        if (null !== $tmpReq->timers) {
            $request->timersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timers, 'Timers', 'json');
        }

        $query = [];
        if (null !== $request->browserConfigShrink) {
            @$query['BrowserConfig'] = $request->browserConfigShrink;
        }

        if (null !== $request->browserInstanceGroupId) {
            @$query['BrowserInstanceGroupId'] = $request->browserInstanceGroupId;
        }

        if (null !== $request->policyShrink) {
            @$query['Policy'] = $request->policyShrink;
        }

        if (null !== $request->timersShrink) {
            @$query['Timers'] = $request->timersShrink;
        }

        $body = [];
        if (null !== $request->authNotificationEnabled) {
            @$body['AuthNotificationEnabled'] = $request->authNotificationEnabled;
        }

        if (null !== $request->cloudBrowserName) {
            @$body['CloudBrowserName'] = $request->cloudBrowserName;
        }

        if (null !== $request->maxAmount) {
            @$body['MaxAmount'] = $request->maxAmount;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a Wuying cloud browser.
     *
     * @remarks
     * Modifies the attributes of a Wuying cloud browser.
     *
     * @param request - ModifyBrowserInstanceGroupRequest
     *
     * @returns ModifyBrowserInstanceGroupResponse
     *
     * @param ModifyBrowserInstanceGroupRequest $request
     *
     * @return ModifyBrowserInstanceGroupResponse
     */
    public function modifyBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Upgrades the number of nodes in a subscription delivery group.
     *
     * @param tmpReq - ModifyNodePoolAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodePoolAmountResponse
     *
     * @param ModifyNodePoolAmountRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyNodePoolAmountResponse
     */
    public function modifyNodePoolAmountWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyNodePoolAmountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->nodePoolShrink) {
            @$body['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNodePoolAmount',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNodePoolAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the number of nodes in a subscription delivery group.
     *
     * @param request - ModifyNodePoolAmountRequest
     *
     * @returns ModifyNodePoolAmountResponse
     *
     * @param ModifyNodePoolAmountRequest $request
     *
     * @return ModifyNodePoolAmountResponse
     */
    public function modifyNodePoolAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAmountWithOptions($request, $runtime);
    }

    /**
     * Modifies the elastic mode of a delivery group, including fixed quantity (no elastic scaling), scheduled scaling, and automatic scaling.
     *
     * @remarks
     * You can configure the elastic pattern for WUYING Cloud Application resources in Settings:
     * - Fixed quantity: Elastic scaling is not used.
     * - Automatic scaling: Automatically scales resources based on the number of connected sessions and the duration without session connections.
     * - Scheduled scaling: Executes resource scaling during specified time periods on specified dates.
     * Before using this operation, make sure that you fully understand the [billing method and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Cloud Application.
     *
     * @param tmpReq - ModifyNodePoolAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodePoolAttributeResponse
     *
     * @param ModifyNodePoolAttributeRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyNodePoolAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodePoolStrategy) {
            $request->nodePoolStrategyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePoolStrategy, 'NodePoolStrategy', 'json');
        }

        $body = [];
        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->nodeCapacity) {
            @$body['NodeCapacity'] = $request->nodeCapacity;
        }

        if (null !== $request->nodePoolStrategyShrink) {
            @$body['NodePoolStrategy'] = $request->nodePoolStrategyShrink;
        }

        if (null !== $request->poolId) {
            @$body['PoolId'] = $request->poolId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNodePoolAttribute',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNodePoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the elastic mode of a delivery group, including fixed quantity (no elastic scaling), scheduled scaling, and automatic scaling.
     *
     * @remarks
     * You can configure the elastic pattern for WUYING Cloud Application resources in Settings:
     * - Fixed quantity: Elastic scaling is not used.
     * - Automatic scaling: Automatically scales resources based on the number of connected sessions and the duration without session connections.
     * - Scheduled scaling: Executes resource scaling during specified time periods on specified dates.
     * Before using this operation, make sure that you fully understand the [billing method and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Cloud Application.
     *
     * @param request - ModifyNodePoolAttributeRequest
     *
     * @returns ModifyNodePoolAttributeResponse
     *
     * @param ModifyNodePoolAttributeRequest $request
     *
     * @return ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAttributeWithOptions($request, $runtime);
    }

    /**
     * Shares an image with other WUYING users or unshares a shared image.
     *
     * @param request - ModifyShareImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyShareImageResponse
     *
     * @param ModifyShareImageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyShareImageResponse
     */
    public function modifyShareImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addAccount) {
            @$body['AddAccount'] = $request->addAccount;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->removeAccount) {
            @$body['RemoveAccount'] = $request->removeAccount;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyShareImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyShareImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shares an image with other WUYING users or unshares a shared image.
     *
     * @param request - ModifyShareImageRequest
     *
     * @returns ModifyShareImageResponse
     *
     * @param ModifyShareImageRequest $request
     *
     * @return ModifyShareImageResponse
     */
    public function modifyShareImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyShareImageWithOptions($request, $runtime);
    }

    /**
     * Modifies the administrator account configuration, such as whether to enable resource expiration reminders.
     *
     * @param request - ModifyTenantConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantConfigResponse
     *
     * @param ModifyTenantConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyTenantConfigResponse
     */
    public function modifyTenantConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupExpireRemind) {
            @$body['AppInstanceGroupExpireRemind'] = $request->appInstanceGroupExpireRemind;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the administrator account configuration, such as whether to enable resource expiration reminders.
     *
     * @param request - ModifyTenantConfigRequest
     *
     * @returns ModifyTenantConfigResponse
     *
     * @param ModifyTenantConfigRequest $request
     *
     * @return ModifyTenantConfigResponse
     */
    public function modifyTenantConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the properties of a workstation.
     *
     * @param request - ModifyWuyingServerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWuyingServerAttributeResponse
     *
     * @param ModifyWuyingServerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyWuyingServerAttributeResponse
     */
    public function modifyWuyingServerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->erdmaEnabled) {
            @$body['ErdmaEnabled'] = $request->erdmaEnabled;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        if (null !== $request->wuyingServerName) {
            @$body['WuyingServerName'] = $request->wuyingServerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyWuyingServerAttribute',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWuyingServerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the properties of a workstation.
     *
     * @param request - ModifyWuyingServerAttributeRequest
     *
     * @returns ModifyWuyingServerAttributeResponse
     *
     * @param ModifyWuyingServerAttributeRequest $request
     *
     * @return ModifyWuyingServerAttributeResponse
     */
    public function modifyWuyingServerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWuyingServerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the allocated users added to a delivery group by paging.
     *
     * @param request - PageListAppInstanceGroupUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageListAppInstanceGroupUserResponse
     *
     * @param PageListAppInstanceGroupUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PageListAppInstanceGroupUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageListAppInstanceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the allocated users added to a delivery group by paging.
     *
     * @param request - PageListAppInstanceGroupUserRequest
     *
     * @returns PageListAppInstanceGroupUserResponse
     *
     * @param PageListAppInstanceGroupUserRequest $request
     *
     * @return PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListAppInstanceGroupUserWithOptions($request, $runtime);
    }

    /**
     * Queries app instance group reports by region, app instance group, status, user authorization relationship, or statistical date.
     *
     * @remarks
     * Queries the IDs, names, and statuses of app instance groups in app instance group reports. You can call [ListRegions](~~ListRegions~~) to obtain the business regions and then call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the app instance groups. `AppInstanceGroupId` matches the exact ID, and `AppInstanceGroupName` filters by inclusion. If multiple filter conditions are specified at the same time, the intersection is used. When filtering by date, `StatDate` specifies a single day, and `StartDate` and `EndDate` must be specified in pairs to represent a closed interval. If both a single day and an interval are specified, the results must meet both conditions. Before using `EndUserId`, make sure that the user has a valid authorization relationship.
     *
     * @param request - QueryAppInstanceGroupReportListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAppInstanceGroupReportListResponse
     *
     * @param QueryAppInstanceGroupReportListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryAppInstanceGroupReportListResponse
     */
    public function queryAppInstanceGroupReportListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$body['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->statDate) {
            @$body['StatDate'] = $request->statDate;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAppInstanceGroupReportList',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAppInstanceGroupReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries app instance group reports by region, app instance group, status, user authorization relationship, or statistical date.
     *
     * @remarks
     * Queries the IDs, names, and statuses of app instance groups in app instance group reports. You can call [ListRegions](~~ListRegions~~) to obtain the business regions and then call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the app instance groups. `AppInstanceGroupId` matches the exact ID, and `AppInstanceGroupName` filters by inclusion. If multiple filter conditions are specified at the same time, the intersection is used. When filtering by date, `StatDate` specifies a single day, and `StartDate` and `EndDate` must be specified in pairs to represent a closed interval. If both a single day and an interval are specified, the results must meet both conditions. Before using `EndUserId`, make sure that the user has a valid authorization relationship.
     *
     * @param request - QueryAppInstanceGroupReportListRequest
     *
     * @returns QueryAppInstanceGroupReportListResponse
     *
     * @param QueryAppInstanceGroupReportListRequest $request
     *
     * @return QueryAppInstanceGroupReportListResponse
     */
    public function queryAppInstanceGroupReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppInstanceGroupReportListWithOptions($request, $runtime);
    }

    /**
     * Queries the number of successful connections, the number of failed connections, the success rate, and the average connection duration within a specified time range.
     *
     * @remarks
     * Queries connection statistical reports. Before you invoke this operation, you can invoke [ListRegions](~~ListRegions~~) and [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the `BizRegionId` and `AppInstanceGroupId` parameters. The `ProductType`, `StartDate`, and `EndDate` parameters are required for server-side validation. The statistical interval is `[StartDate, EndDate)`, which includes the start time but excludes the end time. Results are returned by page, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryConnectionReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConnectionReportResponse
     *
     * @param QueryConnectionReportRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryConnectionReportResponse
     */
    public function queryConnectionReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConnectionReport',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryConnectionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of successful connections, the number of failed connections, the success rate, and the average connection duration within a specified time range.
     *
     * @remarks
     * Queries connection statistical reports. Before you invoke this operation, you can invoke [ListRegions](~~ListRegions~~) and [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the `BizRegionId` and `AppInstanceGroupId` parameters. The `ProductType`, `StartDate`, and `EndDate` parameters are required for server-side validation. The statistical interval is `[StartDate, EndDate)`, which includes the start time but excludes the end time. Results are returned by page, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryConnectionReportRequest
     *
     * @returns QueryConnectionReportResponse
     *
     * @param QueryConnectionReportRequest $request
     *
     * @return QueryConnectionReportResponse
     */
    public function queryConnectionReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConnectionReportWithOptions($request, $runtime);
    }

    /**
     * Queries the number of daily active users and streaming daily active users by date.
     *
     * @remarks
     * Queries the daily active user (DAU) report. StartDate and EndDate are required. The date range is inclusive and cannot exceed 180 days. If ProductType is not specified or is unrecognized, the query defaults to CloudApp. You can use BizRegionId and AppInstanceGroupId to narrow down the scope. If neither is specified, the query returns aggregated data for all business regions. Results are returned in pages, with a maximum of 1,500 records per page.
     *
     * @param request - QueryDauReportDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDauReportDataResponse
     *
     * @param QueryDauReportDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryDauReportDataResponse
     */
    public function queryDauReportDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDauReportData',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDauReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of daily active users and streaming daily active users by date.
     *
     * @remarks
     * Queries the daily active user (DAU) report. StartDate and EndDate are required. The date range is inclusive and cannot exceed 180 days. If ProductType is not specified or is unrecognized, the query defaults to CloudApp. You can use BizRegionId and AppInstanceGroupId to narrow down the scope. If neither is specified, the query returns aggregated data for all business regions. Results are returned in pages, with a maximum of 1,500 records per page.
     *
     * @param request - QueryDauReportDataRequest
     *
     * @returns QueryDauReportDataResponse
     *
     * @param QueryDauReportDataRequest $request
     *
     * @return QueryDauReportDataResponse
     */
    public function queryDauReportData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDauReportDataWithOptions($request, $runtime);
    }

    /**
     * Queries the number of monthly active users for each month within a specified time range.
     *
     * @remarks
     * Queries the monthly active user (MAU) report. `ProductType`, `StartDate`, and `EndDate` are required for server-side validation, and the time span cannot exceed 60 months. The API returns statistical values by month. To adapt to offline data generated on the next day, the last month in the query range uses the day before `EndDate` as the statistical cutoff date. Results are returned in pages, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryMauReportDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMauReportDataResponse
     *
     * @param QueryMauReportDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMauReportDataResponse
     */
    public function queryMauReportDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMauReportData',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMauReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of monthly active users for each month within a specified time range.
     *
     * @remarks
     * Queries the monthly active user (MAU) report. `ProductType`, `StartDate`, and `EndDate` are required for server-side validation, and the time span cannot exceed 60 months. The API returns statistical values by month. To adapt to offline data generated on the next day, the last month in the query range uses the day before `EndDate` as the statistical cutoff date. Results are returned in pages, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryMauReportDataRequest
     *
     * @returns QueryMauReportDataResponse
     *
     * @param QueryMauReportDataRequest $request
     *
     * @return QueryMauReportDataResponse
     */
    public function queryMauReportData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMauReportDataWithOptions($request, $runtime);
    }

    /**
     * Queries the network RTT and low-RTT user statistics within a specified time range.
     *
     * @remarks
     * Queries network round-trip time (RTT) reports. `ProductType`, `StartDate`, and `EndDate` are required for server-side validation. The statistical interval is `[StartDate, EndDate)`. The minimum, maximum, and average RTT values are measured in milliseconds. The low-RTT threshold is determined by the report statistical caliber, and the current API operation does not return this threshold. Results are returned in pages, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryNetworkRttReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryNetworkRttReportResponse
     *
     * @param QueryNetworkRttReportRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryNetworkRttReportResponse
     */
    public function queryNetworkRttReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryNetworkRttReport',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryNetworkRttReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network RTT and low-RTT user statistics within a specified time range.
     *
     * @remarks
     * Queries network round-trip time (RTT) reports. `ProductType`, `StartDate`, and `EndDate` are required for server-side validation. The statistical interval is `[StartDate, EndDate)`. The minimum, maximum, and average RTT values are measured in milliseconds. The low-RTT threshold is determined by the report statistical caliber, and the current API operation does not return this threshold. Results are returned in pages, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryNetworkRttReportRequest
     *
     * @returns QueryNetworkRttReportResponse
     *
     * @param QueryNetworkRttReportRequest $request
     *
     * @return QueryNetworkRttReportResponse
     */
    public function queryNetworkRttReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNetworkRttReportWithOptions($request, $runtime);
    }

    /**
     * Queries the total number of nodes, the number of subscription nodes, and the number of pay-as-you-go nodes by statistical granularity.
     *
     * @remarks
     * Queries node quantity reports. StartDate, EndDate, and StatDateType are required. The query span limit is determined by the statistical granularity: up to 1 day for 1m and 30m, up to 15 days for 6h, and up to 180 days for 1d. Both the start and end boundaries are included in the query range. Results are returned in pages, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryNodeReportDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryNodeReportDataResponse
     *
     * @param QueryNodeReportDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryNodeReportDataResponse
     */
    public function queryNodeReportDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->statDateType) {
            @$body['StatDateType'] = $request->statDateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryNodeReportData',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryNodeReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number of nodes, the number of subscription nodes, and the number of pay-as-you-go nodes by statistical granularity.
     *
     * @remarks
     * Queries node quantity reports. StartDate, EndDate, and StatDateType are required. The query span limit is determined by the statistical granularity: up to 1 day for 1m and 30m, up to 15 days for 6h, and up to 180 days for 1d. Both the start and end boundaries are included in the query range. Results are returned in pages, with a maximum of 1,500 entries per page.
     *
     * @param request - QueryNodeReportDataRequest
     *
     * @returns QueryNodeReportDataResponse
     *
     * @param QueryNodeReportDataRequest $request
     *
     * @return QueryNodeReportDataResponse
     */
    public function queryNodeReportData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNodeReportDataWithOptions($request, $runtime);
    }

    /**
     * Queries the trend of session counts at various time points on a specified date, returned in 10-minute intervals.
     *
     * @remarks
     * Call this operation to query the session count trend data for the current Alibaba Cloud account on a specified date. The data is an offline statistical result, organized by day, and returns the session counts at various time points on that date.
     * The returned results are aggregated in 10-minute intervals. Each data point is identified by an hour (Hh, values 00 to 23) and a minute (Mi, values 00, 10, 20, 30, 40, 50) representing a specific time point. SessionCntMi is the total number of sessions within the 10-minute interval of that time point. The results are sorted in ascending order by hour and minute.
     * You can specify a business region by using BizRegionId and filter by delivery group by using AppInstanceGroupId. If neither is provided, the summary of session data for all regions and all delivery groups under the current account is returned. The actual region used to filter session data is subject to BizRegionId.
     * StatDate is the statistical date in the yyyyMMdd format. If not provided, the data for yesterday is queried by default. Only dates within the last 90 days are supported. If there is no session data on the specified date, an empty list is returned, and the return code is NO_DATA.
     *
     * @param request - QuerySessionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySessionDataResponse
     *
     * @param QuerySessionDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySessionDataResponse
     */
    public function querySessionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->statDate) {
            @$body['StatDate'] = $request->statDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QuerySessionData',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySessionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the trend of session counts at various time points on a specified date, returned in 10-minute intervals.
     *
     * @remarks
     * Call this operation to query the session count trend data for the current Alibaba Cloud account on a specified date. The data is an offline statistical result, organized by day, and returns the session counts at various time points on that date.
     * The returned results are aggregated in 10-minute intervals. Each data point is identified by an hour (Hh, values 00 to 23) and a minute (Mi, values 00, 10, 20, 30, 40, 50) representing a specific time point. SessionCntMi is the total number of sessions within the 10-minute interval of that time point. The results are sorted in ascending order by hour and minute.
     * You can specify a business region by using BizRegionId and filter by delivery group by using AppInstanceGroupId. If neither is provided, the summary of session data for all regions and all delivery groups under the current account is returned. The actual region used to filter session data is subject to BizRegionId.
     * StatDate is the statistical date in the yyyyMMdd format. If not provided, the data for yesterday is queried by default. Only dates within the last 90 days are supported. If there is no session data on the specified date, an empty list is returned, and the return code is NO_DATA.
     *
     * @param request - QuerySessionDataRequest
     *
     * @returns QuerySessionDataResponse
     *
     * @param QuerySessionDataRequest $request
     *
     * @return QuerySessionDataResponse
     */
    public function querySessionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionDataWithOptions($request, $runtime);
    }

    /**
     * Queries the total number of sessions, connected sessions, and streaming sessions by statistical granularity.
     *
     * @remarks
     * Queries session quantity reports. `StartDate`, `EndDate`, and `StatDateType` are required. The query span limit is determined by the statistical granularity: up to 1 day for `1m` and `30m`, up to 15 days for `6h`, and up to 180 days for `1d`. Both the start and end boundaries are included in the query range. Results are returned in pages, with a maximum of 1,500 records per page.
     *
     * @param request - QuerySessionReportDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySessionReportDataResponse
     *
     * @param QuerySessionReportDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySessionReportDataResponse
     */
    public function querySessionReportDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->statDateType) {
            @$body['StatDateType'] = $request->statDateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QuerySessionReportData',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySessionReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number of sessions, connected sessions, and streaming sessions by statistical granularity.
     *
     * @remarks
     * Queries session quantity reports. `StartDate`, `EndDate`, and `StatDateType` are required. The query span limit is determined by the statistical granularity: up to 1 day for `1m` and `30m`, up to 15 days for `6h`, and up to 180 days for `1d`. Both the start and end boundaries are included in the query range. Results are returned in pages, with a maximum of 1,500 records per page.
     *
     * @param request - QuerySessionReportDataRequest
     *
     * @returns QuerySessionReportDataResponse
     *
     * @param QuerySessionReportDataRequest $request
     *
     * @return QuerySessionReportDataResponse
     */
    public function querySessionReportData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionReportDataWithOptions($request, $runtime);
    }

    /**
     * Queries the cumulative duration of application usage by a specified user on an hourly basis and returns the top five applications for each hour.
     *
     * @remarks
     * Queries the application usage of a specified user on an hourly basis. StartDate and EndDate use the yyyyMMdd format. If either parameter is not provided, it defaults to yesterday. Both dates must be within the last 90 days, and the start date cannot be later than the end date. The query range includes the start and end dates. UserId must be set to the ID of the user to query. A maximum of the top five applications by usage duration are returned for each hour.
     *
     * @param request - QueryUserAppUsageAggregateByHourRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserAppUsageAggregateByHourResponse
     *
     * @param QueryUserAppUsageAggregateByHourRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryUserAppUsageAggregateByHourResponse
     */
    public function queryUserAppUsageAggregateByHourWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryUserAppUsageAggregateByHour',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserAppUsageAggregateByHourResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cumulative duration of application usage by a specified user on an hourly basis and returns the top five applications for each hour.
     *
     * @remarks
     * Queries the application usage of a specified user on an hourly basis. StartDate and EndDate use the yyyyMMdd format. If either parameter is not provided, it defaults to yesterday. Both dates must be within the last 90 days, and the start date cannot be later than the end date. The query range includes the start and end dates. UserId must be set to the ID of the user to query. A maximum of the top five applications by usage duration are returned for each hour.
     *
     * @param request - QueryUserAppUsageAggregateByHourRequest
     *
     * @returns QueryUserAppUsageAggregateByHourResponse
     *
     * @param QueryUserAppUsageAggregateByHourRequest $request
     *
     * @return QueryUserAppUsageAggregateByHourResponse
     */
    public function queryUserAppUsageAggregateByHour($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserAppUsageAggregateByHourWithOptions($request, $runtime);
    }

    /**
     * Queries the ranking of cumulative application usage duration for a specified user within a date range.
     *
     * @remarks
     * Queries the ranking of application usage duration for a specified user within a statistical range. `StartDate` and `EndDate` use the `yyyyMMdd` format. If either parameter is not provided, it defaults to yesterday. Both dates must be within the last 90 days, and the start date cannot be later than the end date. The query range includes the start and end dates. `UserId` must be set to the ID of the user to be queried. The results are sorted in descending order of cumulative application usage duration.
     *
     * @param request - QueryUserAppUsageTimeRankRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserAppUsageTimeRankResponse
     *
     * @param QueryUserAppUsageTimeRankRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryUserAppUsageTimeRankResponse
     */
    public function queryUserAppUsageTimeRankWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryUserAppUsageTimeRank',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserAppUsageTimeRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ranking of cumulative application usage duration for a specified user within a date range.
     *
     * @remarks
     * Queries the ranking of application usage duration for a specified user within a statistical range. `StartDate` and `EndDate` use the `yyyyMMdd` format. If either parameter is not provided, it defaults to yesterday. Both dates must be within the last 90 days, and the start date cannot be later than the end date. The query range includes the start and end dates. `UserId` must be set to the ID of the user to be queried. The results are sorted in descending order of cumulative application usage duration.
     *
     * @param request - QueryUserAppUsageTimeRankRequest
     *
     * @returns QueryUserAppUsageTimeRankResponse
     *
     * @param QueryUserAppUsageTimeRankRequest $request
     *
     * @return QueryUserAppUsageTimeRankResponse
     */
    public function queryUserAppUsageTimeRank($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserAppUsageTimeRankWithOptions($request, $runtime);
    }

    /**
     * Queries the connection status, last connection time, cumulative usage duration, and session persistence duration of users.
     *
     * @remarks
     * Queries user usage reports. ProductType, StartDate, and EndDate are required for server-side validation, and the time span cannot exceed 60 months. During the query, the start and end times are converted to `yyyyMMdd` and aggregated by natural days in a closed interval. The results are paginated in descending order of cumulative usage duration, with a maximum of 1,500 records per page. You can combine ConnectionStatus, UserId, BizRegionId, and AppInstanceGroupId for filtering.
     *
     * @param request - QueryUserUsageReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserUsageReportResponse
     *
     * @param QueryUserUsageReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryUserUsageReportResponse
     */
    public function queryUserUsageReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->connectionStatus) {
            @$body['ConnectionStatus'] = $request->connectionStatus;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryUserUsageReport',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserUsageReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the connection status, last connection time, cumulative usage duration, and session persistence duration of users.
     *
     * @remarks
     * Queries user usage reports. ProductType, StartDate, and EndDate are required for server-side validation, and the time span cannot exceed 60 months. During the query, the start and end times are converted to `yyyyMMdd` and aggregated by natural days in a closed interval. The results are paginated in descending order of cumulative usage duration, with a maximum of 1,500 records per page. You can combine ConnectionStatus, UserId, BizRegionId, and AppInstanceGroupId for filtering.
     *
     * @param request - QueryUserUsageReportRequest
     *
     * @returns QueryUserUsageReportResponse
     *
     * @param QueryUserUsageReportRequest $request
     *
     * @return QueryUserUsageReportResponse
     */
    public function queryUserUsageReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserUsageReportWithOptions($request, $runtime);
    }

    /**
     * Removes model groups from a resource group.
     *
     * @remarks
     * You can authorize model groups for resources that belong to Agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. These model groups serve as inference engines for Agents to execute tasks within the resource group.
     * When an Agent runtime has its own model group configured and the resource group it belongs to also has a model group configured, the model group bound to the resource group takes effect. The resource group setting has a higher priority than the Agent runtime setting.
     * When you remove the model group from the resource group to which an Agent runtime belongs, the model group configured on the Agent runtime itself automatically takes effect.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - RemoveResourceGroupModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveResourceGroupModelTemplateResponse
     *
     * @param RemoveResourceGroupModelTemplateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveResourceGroupModelTemplateResponse
     */
    public function removeResourceGroupModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->resourceGroupIds) {
            @$body['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveResourceGroupModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveResourceGroupModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes model groups from a resource group.
     *
     * @remarks
     * You can authorize model groups for resources that belong to Agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. These model groups serve as inference engines for Agents to execute tasks within the resource group.
     * When an Agent runtime has its own model group configured and the resource group it belongs to also has a model group configured, the model group bound to the resource group takes effect. The resource group setting has a higher priority than the Agent runtime setting.
     * When you remove the model group from the resource group to which an Agent runtime belongs, the model group configured on the Agent runtime itself automatically takes effect.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - RemoveResourceGroupModelTemplateRequest
     *
     * @returns RemoveResourceGroupModelTemplateResponse
     *
     * @param RemoveResourceGroupModelTemplateRequest $request
     *
     * @return RemoveResourceGroupModelTemplateResponse
     */
    public function removeResourceGroupModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeResourceGroupModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Removes a third-party channel configuration from the Agent runtime.
     *
     * @remarks
     * You can call this operation to remove a specific third-party channel configuration from Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. After the removal, the Agent cannot use the third-party channel for conversations.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - RemoveRuntimeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveRuntimeChannelResponse
     *
     * @param RemoveRuntimeChannelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveRuntimeChannelResponse
     */
    public function removeRuntimeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentPlatform) {
            @$body['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$body['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveRuntimeChannel',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveRuntimeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a third-party channel configuration from the Agent runtime.
     *
     * @remarks
     * You can call this operation to remove a specific third-party channel configuration from Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. After the removal, the Agent cannot use the third-party channel for conversations.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - RemoveRuntimeChannelRequest
     *
     * @returns RemoveRuntimeChannelResponse
     *
     * @param RemoveRuntimeChannelRequest $request
     *
     * @return RemoveRuntimeChannelResponse
     */
    public function removeRuntimeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRuntimeChannelWithOptions($request, $runtime);
    }

    /**
     * Removes a model group from an Agent runtime resource.
     *
     * @remarks
     * You can remove model groups from Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. When an Agent runtime resource needs to switch to a different model group, call this operation first to remove the authorization relationship between the Agent runtime resource and the existing model group.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before calling this operation.
     *
     * @param request - RemoveRuntimeModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveRuntimeModelTemplateResponse
     *
     * @param RemoveRuntimeModelTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveRuntimeModelTemplateResponse
     */
    public function removeRuntimeModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveRuntimeModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveRuntimeModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a model group from an Agent runtime resource.
     *
     * @remarks
     * You can remove model groups from Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. When an Agent runtime resource needs to switch to a different model group, call this operation first to remove the authorization relationship between the Agent runtime resource and the existing model group.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before calling this operation.
     *
     * @param request - RemoveRuntimeModelTemplateRequest
     *
     * @returns RemoveRuntimeModelTemplateResponse
     *
     * @param RemoveRuntimeModelTemplateRequest $request
     *
     * @return RemoveRuntimeModelTemplateResponse
     */
    public function removeRuntimeModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRuntimeModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Renews a delivery group.
     *
     * @remarks
     * Make sure you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Workspace before calling this operation.
     * > Prerequisites:
     * > - The delivery group must be in the PUBLISHED state and ChargeType must be PrePaid.
     *
     * @param tmpReq - RenewAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAppInstanceGroupResponse
     *
     * @param RenewAppInstanceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RenewAppInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->renewNodes) {
            $request->renewNodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->renewNodes, 'RenewNodes', 'json');
        }

        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->renewAmount) {
            @$query['RenewAmount'] = $request->renewAmount;
        }

        if (null !== $request->renewMode) {
            @$query['RenewMode'] = $request->renewMode;
        }

        if (null !== $request->renewNodesShrink) {
            @$query['RenewNodes'] = $request->renewNodesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a delivery group.
     *
     * @remarks
     * Make sure you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Workspace before calling this operation.
     * > Prerequisites:
     * > - The delivery group must be in the PUBLISHED state and ChargeType must be PrePaid.
     *
     * @param request - RenewAppInstanceGroupRequest
     *
     * @returns RenewAppInstanceGroupResponse
     *
     * @param RenewAppInstanceGroupRequest $request
     *
     * @return RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Renews a workstation.
     *
     * @param request - RenewWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewWuyingServerResponse
     *
     * @param RenewWuyingServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RenewWuyingServerResponse
     */
    public function renewWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenewWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a workstation.
     *
     * @param request - RenewWuyingServerRequest
     *
     * @returns RenewWuyingServerResponse
     *
     * @param RenewWuyingServerRequest $request
     *
     * @return RenewWuyingServerResponse
     */
    public function renewWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Restarts a workstation.
     *
     * @param request - RestartWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartWuyingServerResponse
     *
     * @param RestartWuyingServerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartWuyingServerResponse
     */
    public function restartWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $bodyFlat = [];
        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a workstation.
     *
     * @param request - RestartWuyingServerRequest
     *
     * @returns RestartWuyingServerResponse
     *
     * @param RestartWuyingServerRequest $request
     *
     * @return RestartWuyingServerResponse
     */
    public function restartWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Initiates a task to copy an image to other regions.
     *
     * @param request - StartTaskForDistributeImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTaskForDistributeImageResponse
     *
     * @param StartTaskForDistributeImageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartTaskForDistributeImageResponse
     */
    public function startTaskForDistributeImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationRegionList) {
            @$body['DestinationRegionList'] = $request->destinationRegionList;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->retryType) {
            @$body['RetryType'] = $request->retryType;
        }

        if (null !== $request->sourceRegion) {
            @$body['SourceRegion'] = $request->sourceRegion;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartTaskForDistributeImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartTaskForDistributeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a task to copy an image to other regions.
     *
     * @param request - StartTaskForDistributeImageRequest
     *
     * @returns StartTaskForDistributeImageResponse
     *
     * @param StartTaskForDistributeImageRequest $request
     *
     * @return StartTaskForDistributeImageResponse
     */
    public function startTaskForDistributeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskForDistributeImageWithOptions($request, $runtime);
    }

    /**
     * Starts a workstation.
     *
     * @param request - StartWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartWuyingServerResponse
     *
     * @param StartWuyingServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartWuyingServerResponse
     */
    public function startWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $bodyFlat = [];
        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a workstation.
     *
     * @param request - StartWuyingServerRequest
     *
     * @returns StartWuyingServerResponse
     *
     * @param StartWuyingServerRequest $request
     *
     * @return StartWuyingServerResponse
     */
    public function startWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Stops a workstation.
     *
     * @param request - StopWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopWuyingServerResponse
     *
     * @param StopWuyingServerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopWuyingServerResponse
     */
    public function stopWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $bodyFlat = [];
        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a workstation.
     *
     * @param request - StopWuyingServerRequest
     *
     * @returns StopWuyingServerResponse
     *
     * @param StopWuyingServerRequest $request
     *
     * @return StopWuyingServerResponse
     */
    public function stopWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Creates and binds tags to cloud resources, and updates the values of existing tags.
     *
     * @param request - TagCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagCloudResourcesResponse
     *
     * @param TagCloudResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TagCloudResourcesResponse
     */
    public function tagCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagCloudResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and binds tags to cloud resources, and updates the values of existing tags.
     *
     * @param request - TagCloudResourcesRequest
     *
     * @returns TagCloudResourcesResponse
     *
     * @param TagCloudResourcesRequest $request
     *
     * @return TagCloudResourcesResponse
     */
    public function tagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Creates and binds tags to specified China Office (Chinese: Wuying) delivery groups in compliance with Alibaba Cloud tag specifications. If a tag key already exists on a resource, the tag value is updated to the value specified in the current request. Currently, only delivery group (`APPINSTANCEGROUP`) resource types are supported.
     *
     * @remarks
     * ## Before you begin
     * When you use a RAM user or Security Token Service (STS) credential to call this operation, you must have the `appstreaming:TagResources` permission.
     * The resources to which you want to bind tags must belong to the current Alibaba Cloud account. **This operation currently supports only delivery group resources.** You can set `ResourceType` only to `APPINSTANCEGROUP`. You can call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain delivery group IDs.
     * ## Tag rules
     * - In a single request, you can bind up to **20 tags** to up to **50 resources**. Duplicate resource IDs are automatically deduplicated.
     * - A tag key must be 1 to 128 characters in length. A tag value must be 0 to 256 characters in length. Both are case-sensitive.
     * - A tag key cannot start with `aliyun` or `acs:` (case-insensitive). Neither tag keys nor tag values can contain `http://` or `https://`.
     * - Tag keys in the same request must be unique. Otherwise, the error code `InvalidTag.Duplicated` is returned.
     * - Each tag key on a resource can correspond to only one tag value. If the tag key already exists on the resource, the tag value is updated to the new value.
     * - A maximum of 20 custom tags can be bound to a single resource. If this limit is exceeded, the error code `ResourceTag.CustomTagCountExceed` is returned.
     * ## Results
     * - **If any specified delivery group does not exist or does not belong to the current account, the entire request fails.** The error code `InvalidAppInstanceGroup.NotFound` is returned, and no tags are bound to any resource.
     * - If the binding succeeds, the response contains only `RequestId` and does not return tag details.
     * - If multiple resources are specified and only some of them fail to be bound, the operation still returns a success response without failure details. Call `ListTagResources` to verify the binding results. If only one resource is specified and the binding fails, the operation returns the corresponding error code.
     * ## Call sequence
     * 1. Call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the IDs of the delivery groups to which you want to add tags.
     * 2. Call this operation with `ResourceType=APPINSTANCEGROUP`, `ResourceId.N`, and `Tag.N.Key`/`Tag.N.Value`.
     * 3. To view the tags bound to resources, call `ListTagResources`. To unbind tags, call `UntagResources`.
     * The masked identifiers in the examples are used to demonstrate the format. Replace them with your actual identifiers when you call the operation.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and binds tags to specified China Office (Chinese: Wuying) delivery groups in compliance with Alibaba Cloud tag specifications. If a tag key already exists on a resource, the tag value is updated to the value specified in the current request. Currently, only delivery group (`APPINSTANCEGROUP`) resource types are supported.
     *
     * @remarks
     * ## Before you begin
     * When you use a RAM user or Security Token Service (STS) credential to call this operation, you must have the `appstreaming:TagResources` permission.
     * The resources to which you want to bind tags must belong to the current Alibaba Cloud account. **This operation currently supports only delivery group resources.** You can set `ResourceType` only to `APPINSTANCEGROUP`. You can call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain delivery group IDs.
     * ## Tag rules
     * - In a single request, you can bind up to **20 tags** to up to **50 resources**. Duplicate resource IDs are automatically deduplicated.
     * - A tag key must be 1 to 128 characters in length. A tag value must be 0 to 256 characters in length. Both are case-sensitive.
     * - A tag key cannot start with `aliyun` or `acs:` (case-insensitive). Neither tag keys nor tag values can contain `http://` or `https://`.
     * - Tag keys in the same request must be unique. Otherwise, the error code `InvalidTag.Duplicated` is returned.
     * - Each tag key on a resource can correspond to only one tag value. If the tag key already exists on the resource, the tag value is updated to the new value.
     * - A maximum of 20 custom tags can be bound to a single resource. If this limit is exceeded, the error code `ResourceTag.CustomTagCountExceed` is returned.
     * ## Results
     * - **If any specified delivery group does not exist or does not belong to the current account, the entire request fails.** The error code `InvalidAppInstanceGroup.NotFound` is returned, and no tags are bound to any resource.
     * - If the binding succeeds, the response contains only `RequestId` and does not return tag details.
     * - If multiple resources are specified and only some of them fail to be bound, the operation still returns a success response without failure details. Call `ListTagResources` to verify the binding results. If only one resource is specified and the binding fails, the operation returns the corresponding error code.
     * ## Call sequence
     * 1. Call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the IDs of the delivery groups to which you want to add tags.
     * 2. Call this operation with `ResourceType=APPINSTANCEGROUP`, `ResourceId.N`, and `Tag.N.Key`/`Tag.N.Value`.
     * 3. To view the tags bound to resources, call `ListTagResources`. To unbind tags, call `UntagResources`.
     * The masked identifiers in the examples are used to demonstrate the format. Replace them with your actual identifiers when you call the operation.
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbinds secondary private IP addresses from a development host.
     *
     * @param request - UnassignWuyingServerPrivateAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassignWuyingServerPrivateAddressesResponse
     *
     * @param UnassignWuyingServerPrivateAddressesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UnassignWuyingServerPrivateAddressesResponse
     */
    public function unassignWuyingServerPrivateAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->privateIpAddresses) {
            @$body['PrivateIpAddresses'] = $request->privateIpAddresses;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnassignWuyingServerPrivateAddresses',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassignWuyingServerPrivateAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds secondary private IP addresses from a development host.
     *
     * @param request - UnassignWuyingServerPrivateAddressesRequest
     *
     * @returns UnassignWuyingServerPrivateAddressesResponse
     *
     * @param UnassignWuyingServerPrivateAddressesRequest $request
     *
     * @return UnassignWuyingServerPrivateAddressesResponse
     */
    public function unassignWuyingServerPrivateAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignWuyingServerPrivateAddressesWithOptions($request, $runtime);
    }

    /**
     * Unbinds a user from a session.
     *
     * @param request - UnbindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindResponse
     *
     * @param UnbindRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return UnbindResponse
     */
    public function unbindWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Unbind',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a user from a session.
     *
     * @param request - UnbindRequest
     *
     * @returns UnbindResponse
     *
     * @param UnbindRequest $request
     *
     * @return UnbindResponse
     */
    public function unbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWithOptions($request, $runtime);
    }

    /**
     * Dissociates applications from a specified image version in batches.
     *
     * @remarks
     * Only custom images and community images manageable by the current account are supported. If VersionId is omitted, the current active version is used. If specified, the version must belong to the image specified by ImageId. Verify the association between the applications and the version through the image query results before submitting AppIdList. **Dissociating applications does not directly delete application records.** To delete applications, call DeleteApp separately.
     *
     * @param request - UnbindAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAppResponse
     *
     * @param UnbindAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindAppResponse
     */
    public function unbindAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->appIdList) {
            @$bodyFlat['AppIdList'] = $request->appIdList;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindApp',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates applications from a specified image version in batches.
     *
     * @remarks
     * Only custom images and community images manageable by the current account are supported. If VersionId is omitted, the current active version is used. If specified, the version must belong to the image specified by ImageId. Verify the association between the applications and the version through the image query results before submitting AppIdList. **Dissociating applications does not directly delete application records.** To delete applications, call DeleteApp separately.
     *
     * @param request - UnbindAppRequest
     *
     * @returns UnbindAppResponse
     *
     * @param UnbindAppRequest $request
     *
     * @return UnbindAppResponse
     */
    public function unbindApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAppWithOptions($request, $runtime);
    }

    /**
     * Unbinds tags from cloud resources in a unified manner.
     *
     * @param request - UntagCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagCloudResourcesResponse
     *
     * @param UntagCloudResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UntagCloudResourcesResponse
     */
    public function untagCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$body['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagCloudResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds tags from cloud resources in a unified manner.
     *
     * @param request - UntagCloudResourcesRequest
     *
     * @returns UntagCloudResourcesResponse
     *
     * @param UntagCloudResourcesRequest $request
     *
     * @return UntagCloudResourcesResponse
     */
    public function untagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Untags the specified Wuying app instance groups according to Alibaba Cloud tagging specifications. You can remove specific tags by specifying tag keys, or remove all custom tags from the resources at once by setting `All=true` without specifying tag keys. Currently, only the app instance group (`APPINSTANCEGROUP`) resource type is supported.
     *
     * @remarks
     * ## Prerequisites
     * To call this operation as a RAM user or by using STS credentials, you must have the `appstreaming:UntagResources` permission.
     * The resources to be untagged must belong to the current Alibaba Cloud account. **This operation currently supports only app instance group resources**. You must set `ResourceType` to `APPINSTANCEGROUP`. You can call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the app instance group ID, and call the [ListTagResources](~~ListTagResources~~) operation to query the tags bound to the resources.
     * ## Metric description
     * - A single request can detach labels from up to **50 resources**. Duplicate resource IDs are automatically deduplicated.
     * - **You must specify at least one of `TagKey.N` and `All`**: If neither is specified, or if `TagKey.N` is not specified and `All` is set to `false`, the operation returns the error code `InvalidParameter.TagKeyListOrAll`.
     *   - If `TagKey.N` is specified: Only the labels corresponding to these label keys are detached. A maximum of 20 label keys can be specified in a single request. In this case, the `All` parameter is ignored.
     *   - If `TagKey.N` is not specified and `All` is set to `true`: All custom labels on the resources are detached, including Wuying system labels that start with `System/` and were attached by calling the [TagResources](~~TagResources~~) operation.
     * - If a specified label key does not exist on a resource, the label key is skipped and no fault is returned.
     * - Label keys that start with `System/` are Wuying system labels. Only `System/Scheduler/GRAYSCALE` and `System/Scheduler/STOP_NEW_USER_CONNECTION` are supported. If you specify other label keys that start with `System/`, the operation returns the error code `InvalidTagPolicy.KeyInvalid` or `InvalidTag.SystemKeyNotAllow`.
     * ## Execution results
     * - **If any specified app instance group does not exist or does not belong to the current account, the entire request fails**, and the operation returns the error code `InvalidAppInstanceGroup.NotFound`. No resources are untagged.
     * - If the untagging is successful, the response contains only `RequestId` and does not return tag details.
     * - If multiple resources are specified and the untagging fails for only some of the resources, the operation still returns a success response, and the response does not contain failure details. Call the [ListTagResources](~~ListTagResources~~) operation to verify the untagging results. If only one resource is specified and the untagging fails, the operation directly returns the corresponding error code.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the app instance group ID. To confirm the tag keys bound to the resources, call the [ListTagResources](~~ListTagResources~~) operation.
     * 2. Call this operation, specify `ResourceType=APPINSTANCEGROUP` and `ResourceId.N`, and specify `TagKey.N` or set `All=true` to indicate the tags to be removed.
     * 3. To rebind tags, call the [TagResources](~~TagResources~~) operation.
     * The masked identifiers in the examples are used to demonstrate the format. Replace them with your actual identifiers when you call the operation.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$body['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Untags the specified Wuying app instance groups according to Alibaba Cloud tagging specifications. You can remove specific tags by specifying tag keys, or remove all custom tags from the resources at once by setting `All=true` without specifying tag keys. Currently, only the app instance group (`APPINSTANCEGROUP`) resource type is supported.
     *
     * @remarks
     * ## Prerequisites
     * To call this operation as a RAM user or by using STS credentials, you must have the `appstreaming:UntagResources` permission.
     * The resources to be untagged must belong to the current Alibaba Cloud account. **This operation currently supports only app instance group resources**. You must set `ResourceType` to `APPINSTANCEGROUP`. You can call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the app instance group ID, and call the [ListTagResources](~~ListTagResources~~) operation to query the tags bound to the resources.
     * ## Metric description
     * - A single request can detach labels from up to **50 resources**. Duplicate resource IDs are automatically deduplicated.
     * - **You must specify at least one of `TagKey.N` and `All`**: If neither is specified, or if `TagKey.N` is not specified and `All` is set to `false`, the operation returns the error code `InvalidParameter.TagKeyListOrAll`.
     *   - If `TagKey.N` is specified: Only the labels corresponding to these label keys are detached. A maximum of 20 label keys can be specified in a single request. In this case, the `All` parameter is ignored.
     *   - If `TagKey.N` is not specified and `All` is set to `true`: All custom labels on the resources are detached, including Wuying system labels that start with `System/` and were attached by calling the [TagResources](~~TagResources~~) operation.
     * - If a specified label key does not exist on a resource, the label key is skipped and no fault is returned.
     * - Label keys that start with `System/` are Wuying system labels. Only `System/Scheduler/GRAYSCALE` and `System/Scheduler/STOP_NEW_USER_CONNECTION` are supported. If you specify other label keys that start with `System/`, the operation returns the error code `InvalidTagPolicy.KeyInvalid` or `InvalidTag.SystemKeyNotAllow`.
     * ## Execution results
     * - **If any specified app instance group does not exist or does not belong to the current account, the entire request fails**, and the operation returns the error code `InvalidAppInstanceGroup.NotFound`. No resources are untagged.
     * - If the untagging is successful, the response contains only `RequestId` and does not return tag details.
     * - If multiple resources are specified and the untagging fails for only some of the resources, the operation still returns a success response, and the response does not contain failure details. Call the [ListTagResources](~~ListTagResources~~) operation to verify the untagging results. If only one resource is specified and the untagging fails, the operation directly returns the corresponding error code.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the app instance group ID. To confirm the tag keys bound to the resources, call the [ListTagResources](~~ListTagResources~~) operation.
     * 2. Call this operation, specify `ResourceType=APPINSTANCEGROUP` and `ResourceId.N`, and specify `TagKey.N` or set `All=true` to indicate the tags to be removed.
     * 3. To rebind tags, call the [TagResources](~~TagResources~~) operation.
     * The masked identifiers in the examples are used to demonstrate the format. Replace them with your actual identifiers when you call the operation.
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

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Modifies the runtime parameters, optimization configurations, and user configurations of a specified application adapter.
     *
     * @remarks
     * The AdaptorId must correspond to a valid application adapter manageable by the current account. Pass only the configurations that need to be modified in this request.
     * SilenceParam is used for application startup parameters. UserConfig is used for application runtime configurations. **This operation does not support modifying application scripts or executable file paths through AppScript or ExecuteFileAddress. Do not pass these two parameters.**
     *
     * @param tmpReq - UpdateAdaptorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAdaptorResponse
     *
     * @param UpdateAdaptorRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAdaptorResponse
     */
    public function updateAdaptorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAdaptorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userConfig) {
            $request->userConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userConfig, 'UserConfig', 'json');
        }

        $body = [];
        if (null !== $request->adaptorId) {
            @$body['AdaptorId'] = $request->adaptorId;
        }

        if (null !== $request->appScript) {
            @$body['AppScript'] = $request->appScript;
        }

        if (null !== $request->executeFileAddress) {
            @$body['ExecuteFileAddress'] = $request->executeFileAddress;
        }

        if (null !== $request->optimizeParam) {
            @$body['OptimizeParam'] = $request->optimizeParam;
        }

        if (null !== $request->silenceParam) {
            @$body['SilenceParam'] = $request->silenceParam;
        }

        if (null !== $request->userConfigShrink) {
            @$body['UserConfig'] = $request->userConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAdaptor',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAdaptorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the runtime parameters, optimization configurations, and user configurations of a specified application adapter.
     *
     * @remarks
     * The AdaptorId must correspond to a valid application adapter manageable by the current account. Pass only the configurations that need to be modified in this request.
     * SilenceParam is used for application startup parameters. UserConfig is used for application runtime configurations. **This operation does not support modifying application scripts or executable file paths through AppScript or ExecuteFileAddress. Do not pass these two parameters.**
     *
     * @param request - UpdateAdaptorRequest
     *
     * @returns UpdateAdaptorResponse
     *
     * @param UpdateAdaptorRequest $request
     *
     * @return UpdateAdaptorResponse
     */
    public function updateAdaptor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdaptorWithOptions($request, $runtime);
    }

    /**
     * Updates the image of a delivery group.
     *
     * @remarks
     * >Warning: After the image update starts, sessions of end users who are accessing cloud applications will be disconnected. Proceed with caution to avoid data loss for end users.
     * > Before calling this API, the delivery group must be in the PUBLISHED, DEPLOYED, or MAINTAIN_FAILED state. You can call GetAppInstanceGroup to query the current state of the delivery group.
     * > After the update is published, you typically need to wait about 2 minutes for the changes to take effect on the client.
     *
     * @param request - UpdateAppInstanceGroupImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppInstanceGroupImageResponse
     *
     * @param UpdateAppInstanceGroupImageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCenterImageId) {
            @$query['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppInstanceGroupImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the image of a delivery group.
     *
     * @remarks
     * >Warning: After the image update starts, sessions of end users who are accessing cloud applications will be disconnected. Proceed with caution to avoid data loss for end users.
     * > Before calling this API, the delivery group must be in the PUBLISHED, DEPLOYED, or MAINTAIN_FAILED state. You can call GetAppInstanceGroup to query the current state of the delivery group.
     * > After the update is published, you typically need to wait about 2 minutes for the changes to take effect on the client.
     *
     * @param request - UpdateAppInstanceGroupImageRequest
     *
     * @returns UpdateAppInstanceGroupImageResponse
     *
     * @param UpdateAppInstanceGroupImageRequest $request
     *
     * @return UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInstanceGroupImageWithOptions($request, $runtime);
    }

    /**
     * Modifies the name, description, version information, and associated application adapters of an image.
     *
     * @remarks
     * You can only modify images that are owned by the current account and allow modifications. Images shared with the current account cannot be modified.
     * You must provide at least one of ImageId and VersionId. If both are provided, they must point to the same image. If VersionId is omitted, the current effective version of the image is used. Passing a non-empty AdaptorIdList updates the application adapter associations for the selected version based on the complete list. Make sure to include the adapters that you still want to retain.
     *
     * @param request - UpdateImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adaptorIdList) {
            @$body['AdaptorIdList'] = $request->adaptorIdList;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->distro) {
            @$body['Distro'] = $request->distro;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        if (null !== $request->versionName) {
            @$body['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, version information, and associated application adapters of an image.
     *
     * @remarks
     * You can only modify images that are owned by the current account and allow modifications. Images shared with the current account cannot be modified.
     * You must provide at least one of ImageId and VersionId. If both are provided, they must point to the same image. If VersionId is omitted, the current effective version of the image is used. Passing a non-empty AdaptorIdList updates the application adapter associations for the selected version based on the complete list. Make sure to include the adapters that you still want to retain.
     *
     * @param request - UpdateImageRequest
     *
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }

    /**
     * Sends a status update request for an existing image creation task to the corresponding creation resource.
     *
     * @remarks
     * The task must exist before you call this operation, and the corresponding creation resource and resource node must be available. The TaskType must match the actual type of the task.
     * **This operation does not support modifying the task step, image version, or destination region by using TaskStep, VersionId, or BizRegionId. Do not pass these three parameters.** A successful request only indicates that the status update call is completed. To query the final status of the task, call GetTask.
     *
     * @param request - UpdateImageTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageTaskResponse
     *
     * @param UpdateImageTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateImageTaskResponse
     */
    public function updateImageTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStep) {
            @$body['TaskStep'] = $request->taskStep;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateImageTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a status update request for an existing image creation task to the corresponding creation resource.
     *
     * @remarks
     * The task must exist before you call this operation, and the corresponding creation resource and resource node must be available. The TaskType must match the actual type of the task.
     * **This operation does not support modifying the task step, image version, or destination region by using TaskStep, VersionId, or BizRegionId. Do not pass these three parameters.** A successful request only indicates that the status update call is completed. To query the final status of the task, call GetTask.
     *
     * @param request - UpdateImageTaskRequest
     *
     * @returns UpdateImageTaskResponse
     *
     * @param UpdateImageTaskRequest $request
     *
     * @return UpdateImageTaskResponse
     */
    public function updateImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageTaskWithOptions($request, $runtime);
    }

    /**
     * Updates a model provider template.
     *
     * @remarks
     * You can update a model provider template that has been created in the WUYING Agent Management Center, including the template name, description, model service connection configuration, and WUYING security proxy switch. Partial field updates are supported. You only need to pass in the fields that you want to modify.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param tmpReq - UpdateModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelProviderTemplateResponse
     *
     * @param UpdateModelProviderTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateModelProviderTemplateResponse
     */
    public function updateModelProviderTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateModelProviderTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->configShrink) {
            @$query['Config'] = $request->configShrink;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableWuyingProxy) {
            @$body['EnableWuyingProxy'] = $request->enableWuyingProxy;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->providerTemplateId) {
            @$body['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a model provider template.
     *
     * @remarks
     * You can update a model provider template that has been created in the WUYING Agent Management Center, including the template name, description, model service connection configuration, and WUYING security proxy switch. Partial field updates are supported. You only need to pass in the fields that you want to modify.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - UpdateModelProviderTemplateRequest
     *
     * @returns UpdateModelProviderTemplateResponse
     *
     * @param UpdateModelProviderTemplateRequest $request
     *
     * @return UpdateModelProviderTemplateResponse
     */
    public function updateModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates a model template.
     *
     * @remarks
     * You can update a model group that has been created in the Wuying Agent Management Center, including the group name, description, and model configuration information. You can modify the default model of a model group by updating the Config field. The updated configuration automatically takes effect on associated cloud desktops.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - UpdateModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelTemplateResponse
     *
     * @param UpdateModelTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateModelTemplateResponse
     */
    public function updateModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->refScope) {
            @$query['RefScope'] = $request->refScope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a model template.
     *
     * @remarks
     * You can update a model group that has been created in the Wuying Agent Management Center, including the group name, description, and model configuration information. You can modify the default model of a model group by updating the Config field. The updated configuration automatically takes effect on associated cloud desktops.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - UpdateModelTemplateRequest
     *
     * @returns UpdateModelTemplateResponse
     *
     * @param UpdateModelTemplateRequest $request
     *
     * @return UpdateModelTemplateResponse
     */
    public function updateModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates a workstation image.
     *
     * @param request - UpdateWuyingServerImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWuyingServerImageResponse
     *
     * @param UpdateWuyingServerImageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWuyingServerImageResponse
     */
    public function updateWuyingServerImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWuyingServerImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWuyingServerImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a workstation image.
     *
     * @param request - UpdateWuyingServerImageRequest
     *
     * @returns UpdateWuyingServerImageResponse
     *
     * @param UpdateWuyingServerImageRequest $request
     *
     * @return UpdateWuyingServerImageResponse
     */
    public function updateWuyingServerImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWuyingServerImageWithOptions($request, $runtime);
    }

    /**
     * Validates the LLM template configuration.
     *
     * @param request - ValidateLlmTemplateConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateLlmTemplateConfigResponse
     *
     * @param ValidateLlmTemplateConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ValidateLlmTemplateConfigResponse
     */
    public function validateLlmTemplateConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateLlmTemplateConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateLlmTemplateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the LLM template configuration.
     *
     * @param request - ValidateLlmTemplateConfigRequest
     *
     * @returns ValidateLlmTemplateConfigResponse
     *
     * @param ValidateLlmTemplateConfigRequest $request
     *
     * @return ValidateLlmTemplateConfigResponse
     */
    public function validateLlmTemplateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateLlmTemplateConfigWithOptions($request, $runtime);
    }
}
