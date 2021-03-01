<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortAndRollbackChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortAndRollbackChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddLogPathRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddLogPathResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddServiceTimeConfigRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddServiceTimeConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AuthorizeApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AuthorizeApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AuthorizeResourceGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AuthorizeResourceGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AuthorizeRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AuthorizeRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\BindEcsSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\BindEcsSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\BindK8sSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\BindK8sSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\BindSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\BindSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ChangeDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ChangeDeployGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ContinuePipelineRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ContinuePipelineResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ConvertK8sResourceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ConvertK8sResourceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateIDCImportCommandRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateIDCImportCommandResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sIngressRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sIngressRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sServiceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sServiceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DelegateAdminRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DelegateAdminRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterMemberRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterMemberResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteConfigCenterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteConfigCenterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteDegradeControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteDegradeControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteDeployGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteFlowControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteFlowControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sIngressRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sIngressRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sServiceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sServiceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteLogPathRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteLogPathResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceTimeConfigRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceTimeConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteSwimmingLaneResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableDegradeControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableDegradeControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableFlowControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableFlowControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableDegradeControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableDegradeControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableFlowControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableFlowControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ExecuteStatusRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ExecuteStatusResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetContainerConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetContainerConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJvmConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJvmConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByConsumerAppIdRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByConsumerAppIdResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByIdRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByIdResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByProviderAppIdRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByProviderAppIdResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetPackageStorageCredentialResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceDetailRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceDetailResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListPageRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListPageResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceMethodPageRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceMethodPageResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetSubAccountInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetSubAccountInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetSwimmingLaneResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ImportK8sClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ImportK8sClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterMemberRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterMemberResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertConfigCenterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertConfigCenterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDegradeControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDegradeControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertFlowControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertFlowControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertOrUpdateRegionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertOrUpdateRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertServiceGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertServiceGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListAliyunRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListChildrenStacksRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListChildrenStacksResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigCentersRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigCentersResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConvertableEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConvertableEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListCSBGatewayRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListCSBGatewayResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListOperationLogsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListOperationLogsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListStatusRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListStatusResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\MigrateEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\MigrateEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ModifyScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ModifyScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryConfigCenterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryConfigCenterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryEccInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryEccInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryK8sClusterLogProjectInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryK8sClusterLogProjectInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateRegionListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateRegionListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMonitorInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMonitorInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryServiceTimeConfigRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryServiceTimeConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RemoveMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RemoveMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ResetApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ResetApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RollbackApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RollbackApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RollbackChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RollbackChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleInApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleInApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleOutApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleOutApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleoutApplicationWithNewInstancesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ScaleoutApplicationWithNewInstancesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\StartApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\StartApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\StartK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\StartK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\StopApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\StopApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\StopK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\StopK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\SwitchAdvancedMonitoringRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\SwitchAdvancedMonitoringResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\SynchronizeResourceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\SynchronizeResourceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\TransformClusterMemberRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\TransformClusterMemberResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UnbindK8sSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UnbindK8sSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UnbindSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UnbindSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateAccountInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateAccountInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationBaseInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationBaseInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateDegradeControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateDegradeControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateFlowControlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateFlowControlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHealthCheckUrlRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHealthCheckUrlResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHookConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHookConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateJvmConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateJvmConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sApplicationBaseInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sApplicationBaseInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sApplicationConfigRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sApplicationConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sIngressRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sIngressRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sResourceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sResourceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sServiceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sServiceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSlsLogStoreRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSlsLogStoreResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Edas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-south-1'                  => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'edas.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'edas.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'edas.aliyuncs.com',
            'cn-beijing-gov-1'            => 'edas.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'edas.aliyuncs.com',
            'cn-chengdu'                  => 'edas.aliyuncs.com',
            'cn-edge-1'                   => 'edas.aliyuncs.com',
            'cn-fujian'                   => 'edas.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'edas.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'edas.aliyuncs.com',
            'cn-hangzhou-finance'         => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'edas.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'edas.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'edas.aliyuncs.com',
            'cn-huhehaote'                => 'edas.aliyuncs.com',
            'cn-qingdao-nebula'           => 'edas.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'edas.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'edas.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'edas.aliyuncs.com',
            'cn-shanghai-inner'           => 'edas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'edas.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'edas.aliyuncs.com',
            'cn-shenzhen-inner'           => 'edas.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'edas.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'edas.aliyuncs.com',
            'cn-wuhan'                    => 'edas.aliyuncs.com',
            'cn-yushanfang'               => 'edas.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'edas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'edas.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'edas.aliyuncs.com',
            'eu-west-1'                   => 'edas.ap-northeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'edas.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'edas.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'edas.ap-northeast-1.aliyuncs.com',
            'us-west-1'                   => 'edas.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('edas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AbortAndRollbackChangeOrderResponse::fromMap($this->doROARequest('AbortAndRollbackChangeOrder', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/changeorder/change_order_abort_and_rollback', 'json', $req, $runtime));
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
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AbortChangeOrderResponse::fromMap($this->doROARequest('AbortChangeOrder', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/changeorder/change_order_abort', 'json', $req, $runtime));
    }

    /**
     * @param AddLogPathRequest $request
     *
     * @return AddLogPathResponse
     */
    public function addLogPath($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addLogPathWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddLogPathRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddLogPathResponse
     */
    public function addLogPathWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            @$body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->path)) {
            @$body['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return AddLogPathResponse::fromMap($this->doROARequestWithForm('AddLogPath', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/log/popListLogDirs', 'json', $req, $runtime));
    }

    /**
     * @param AddMockRuleRequest $request
     *
     * @return AddMockRuleResponse
     */
    public function addMockRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMockRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddMockRuleRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddMockRuleResponse
     */
    public function addMockRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->providerAppId)) {
            @$query['ProviderAppId'] = $request->providerAppId;
        }
        if (!Utils::isUnset($request->providerAppName)) {
            @$query['ProviderAppName'] = $request->providerAppName;
        }
        if (!Utils::isUnset($request->extraJson)) {
            @$query['ExtraJson'] = $request->extraJson;
        }
        if (!Utils::isUnset($request->scMockItemJson)) {
            @$query['ScMockItemJson'] = $request->scMockItemJson;
        }
        if (!Utils::isUnset($request->dubboMockItemJson)) {
            @$query['DubboMockItemJson'] = $request->dubboMockItemJson;
        }
        if (!Utils::isUnset($request->consumerAppsJson)) {
            @$query['ConsumerAppsJson'] = $request->consumerAppsJson;
        }
        if (!Utils::isUnset($request->enable)) {
            @$query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddMockRuleResponse::fromMap($this->doROARequest('AddMockRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/addMockRule', 'json', $req, $runtime));
    }

    /**
     * @param AddServiceTimeConfigRequest $request
     *
     * @return AddServiceTimeConfigResponse
     */
    public function addServiceTimeConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addServiceTimeConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddServiceTimeConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AddServiceTimeConfigResponse
     */
    public function addServiceTimeConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->serviceGroup)) {
            @$query['ServiceGroup'] = $request->serviceGroup;
        }
        if (!Utils::isUnset($request->path)) {
            @$query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->consumerAppName)) {
            @$query['ConsumerAppName'] = $request->consumerAppName;
        }
        if (!Utils::isUnset($request->consumerAppId)) {
            @$query['ConsumerAppId'] = $request->consumerAppId;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddServiceTimeConfigResponse::fromMap($this->doROARequest('AddServiceTimeConfig', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/timeout/add', 'json', $req, $runtime));
    }

    /**
     * @param AuthorizeApplicationRequest $request
     *
     * @return AuthorizeApplicationResponse
     */
    public function authorizeApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authorizeApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthorizeApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AuthorizeApplicationResponse
     */
    public function authorizeApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetUserId)) {
            @$query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->appIds)) {
            @$query['AppIds'] = $request->appIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AuthorizeApplicationResponse::fromMap($this->doROARequest('AuthorizeApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/authorize_app', 'json', $req, $runtime));
    }

    /**
     * @param AuthorizeResourceGroupRequest $request
     *
     * @return AuthorizeResourceGroupResponse
     */
    public function authorizeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authorizeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthorizeResourceGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeResourceGroupResponse
     */
    public function authorizeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetUserId)) {
            @$query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AuthorizeResourceGroupResponse::fromMap($this->doROARequest('AuthorizeResourceGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/authorize_res_group', 'json', $req, $runtime));
    }

    /**
     * @param AuthorizeRoleRequest $request
     *
     * @return AuthorizeRoleResponse
     */
    public function authorizeRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authorizeRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthorizeRoleRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AuthorizeRoleResponse
     */
    public function authorizeRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetUserId)) {
            @$query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->roleIds)) {
            @$query['RoleIds'] = $request->roleIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AuthorizeRoleResponse::fromMap($this->doROARequest('AuthorizeRole', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/authorize_role', 'json', $req, $runtime));
    }

    /**
     * @param BindEcsSlbRequest $request
     *
     * @return BindEcsSlbResponse
     */
    public function bindEcsSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindEcsSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BindEcsSlbRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return BindEcsSlbResponse
     */
    public function bindEcsSlbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->slbId)) {
            @$query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            @$query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->deployGroupId)) {
            @$query['DeployGroupId'] = $request->deployGroupId;
        }
        if (!Utils::isUnset($request->VServerGroupName)) {
            @$query['VServerGroupName'] = $request->VServerGroupName;
        }
        if (!Utils::isUnset($request->listenerHealthCheckUrl)) {
            @$query['ListenerHealthCheckUrl'] = $request->listenerHealthCheckUrl;
        }
        if (!Utils::isUnset($request->VForwardingUrlRule)) {
            @$query['VForwardingUrlRule'] = $request->VForwardingUrlRule;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return BindEcsSlbResponse::fromMap($this->doROARequest('BindEcsSlb', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/slb/bind_slb', 'json', $req, $runtime));
    }

    /**
     * @param BindK8sSlbRequest $request
     *
     * @return BindK8sSlbResponse
     */
    public function bindK8sSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindK8sSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BindK8sSlbRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return BindK8sSlbResponse
     */
    public function bindK8sSlbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->slbId)) {
            @$query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->slbProtocol)) {
            @$query['SlbProtocol'] = $request->slbProtocol;
        }
        if (!Utils::isUnset($request->targetPort)) {
            @$query['TargetPort'] = $request->targetPort;
        }
        if (!Utils::isUnset($request->port)) {
            @$query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->servicePortInfos)) {
            @$query['ServicePortInfos'] = $request->servicePortInfos;
        }
        if (!Utils::isUnset($request->specification)) {
            @$query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->scheduler)) {
            @$query['Scheduler'] = $request->scheduler;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return BindK8sSlbResponse::fromMap($this->doROARequest('BindK8sSlb', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/k8s_slb_binding', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->slbId)) {
            @$query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->slbIp)) {
            @$query['SlbIp'] = $request->slbIp;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            @$query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return BindSlbResponse::fromMap($this->doROARequest('BindSlb', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/app/bind_slb_json', 'json', $req, $runtime));
    }

    /**
     * @param ChangeDeployGroupRequest $request
     *
     * @return ChangeDeployGroupResponse
     */
    public function changeDeployGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeDeployGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ChangeDeployGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeDeployGroupResponse
     */
    public function changeDeployGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            @$query['EccInfo'] = $request->eccInfo;
        }
        if (!Utils::isUnset($request->groupName)) {
            @$query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->forceStatus)) {
            @$query['ForceStatus'] = $request->forceStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ChangeDeployGroupResponse::fromMap($this->doROARequest('ChangeDeployGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_change_group', 'json', $req, $runtime));
    }

    /**
     * @param ContinuePipelineRequest $request
     *
     * @return ContinuePipelineResponse
     */
    public function continuePipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->continuePipelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ContinuePipelineRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuePipelineResponse
     */
    public function continuePipelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineId)) {
            @$query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->confirm)) {
            @$query['Confirm'] = $request->confirm;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ContinuePipelineResponse::fromMap($this->doROARequest('ContinuePipeline', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/changeorder/pipeline_batch_confirm', 'json', $req, $runtime));
    }

    /**
     * @param ConvertK8sResourceRequest $request
     *
     * @return ConvertK8sResourceResponse
     */
    public function convertK8sResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->convertK8sResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ConvertK8sResourceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ConvertK8sResourceResponse
     */
    public function convertK8sResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            @$query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resourceName)) {
            @$query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ConvertK8sResourceResponse::fromMap($this->doROARequest('ConvertK8sResource', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/oam/k8s_resource_convert', 'json', $req, $runtime));
    }

    /**
     * @param CreateIDCImportCommandRequest $request
     *
     * @return CreateIDCImportCommandResponse
     */
    public function createIDCImportCommand($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIDCImportCommandWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIDCImportCommandRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIDCImportCommandResponse
     */
    public function createIDCImportCommandWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateIDCImportCommandResponse::fromMap($this->doROARequestWithForm('CreateIDCImportCommand', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/create_idc_import_command', 'json', $req, $runtime));
    }

    /**
     * @param CreateK8sIngressRuleRequest $request
     *
     * @return CreateK8sIngressRuleResponse
     */
    public function createK8sIngressRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createK8sIngressRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateK8sIngressRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateK8sIngressRuleResponse
     */
    public function createK8sIngressRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->rules)) {
            @$query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateK8sIngressRuleResponse::fromMap($this->doROARequest('CreateK8sIngressRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/k8s_ingress', 'json', $req, $runtime));
    }

    /**
     * @param CreateK8sServiceRequest $request
     *
     * @return CreateK8sServiceResponse
     */
    public function createK8sService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createK8sServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateK8sServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateK8sServiceResponse
     */
    public function createK8sServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->servicePorts)) {
            @$query['ServicePorts'] = $request->servicePorts;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateK8sServiceResponse::fromMap($this->doROARequest('CreateK8sService', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/k8s_service', 'json', $req, $runtime));
    }

    /**
     * @param DelegateAdminRoleRequest $request
     *
     * @return DelegateAdminRoleResponse
     */
    public function delegateAdminRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->delegateAdminRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DelegateAdminRoleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DelegateAdminRoleResponse
     */
    public function delegateAdminRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetUserId)) {
            @$query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DelegateAdminRoleResponse::fromMap($this->doROARequest('DelegateAdminRole', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/account/delegate_admin_role', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteApplicationResponse::fromMap($this->doROARequest('DeleteApplication', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/changeorder/co_delete_app', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->mode)) {
            @$query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteClusterResponse::fromMap($this->doROARequest('DeleteCluster', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/resource/cluster', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClusterMemberRequest $request
     *
     * @return DeleteClusterMemberResponse
     */
    public function deleteClusterMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteClusterMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteClusterMemberResponse
     */
    public function deleteClusterMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterMemberId)) {
            @$query['ClusterMemberId'] = $request->clusterMemberId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteClusterMemberResponse::fromMap($this->doROARequest('DeleteClusterMember', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/resource/cluster_member', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConfigCenterRequest $request
     *
     * @return DeleteConfigCenterResponse
     */
    public function deleteConfigCenter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigCenterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteConfigCenterRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteConfigCenterResponse
     */
    public function deleteConfigCenterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            @$query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteConfigCenterResponse::fromMap($this->doROARequest('DeleteConfigCenter', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/configCenter', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDegradeControlRequest $request
     *
     * @return DeleteDegradeControlResponse
     */
    public function deleteDegradeControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDegradeControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteDegradeControlRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDegradeControlResponse
     */
    public function deleteDegradeControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteDegradeControlResponse::fromMap($this->doROARequest('DeleteDegradeControl', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/degradeControl', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDeployGroupRequest $request
     *
     * @return DeleteDeployGroupResponse
     */
    public function deleteDeployGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeployGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteDeployGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDeployGroupResponse
     */
    public function deleteDeployGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupName)) {
            @$query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteDeployGroupResponse::fromMap($this->doROARequest('DeleteDeployGroup', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/deploy_group', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEcuRequest $request
     *
     * @return DeleteEcuResponse
     */
    public function deleteEcu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEcuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteEcuRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteEcuResponse
     */
    public function deleteEcuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecuId)) {
            @$query['EcuId'] = $request->ecuId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteEcuResponse::fromMap($this->doROARequest('DeleteEcu', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/delete_ecu', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowControlRequest $request
     *
     * @return DeleteFlowControlResponse
     */
    public function deleteFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteFlowControlRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFlowControlResponse
     */
    public function deleteFlowControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteFlowControlResponse::fromMap($this->doROARequest('DeleteFlowControl', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/flowControl', 'json', $req, $runtime));
    }

    /**
     * @param DeleteK8sApplicationRequest $request
     *
     * @return DeleteK8sApplicationResponse
     */
    public function deleteK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteK8sApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteK8sApplicationResponse
     */
    public function deleteK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteK8sApplicationResponse::fromMap($this->doROARequest('DeleteK8sApplication', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/k8s/acs/k8s_apps', 'json', $req, $runtime));
    }

    /**
     * @param DeleteK8sIngressRuleRequest $request
     *
     * @return DeleteK8sIngressRuleResponse
     */
    public function deleteK8sIngressRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteK8sIngressRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteK8sIngressRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteK8sIngressRuleResponse
     */
    public function deleteK8sIngressRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteK8sIngressRuleResponse::fromMap($this->doROARequest('DeleteK8sIngressRule', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/k8s/acs/k8s_ingress', 'json', $req, $runtime));
    }

    /**
     * @param DeleteK8sServiceRequest $request
     *
     * @return DeleteK8sServiceResponse
     */
    public function deleteK8sService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteK8sServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteK8sServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteK8sServiceResponse
     */
    public function deleteK8sServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteK8sServiceResponse::fromMap($this->doROARequest('DeleteK8sService', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/k8s/acs/k8s_service', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLogPathRequest $request
     *
     * @return DeleteLogPathResponse
     */
    public function deleteLogPath($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogPathWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteLogPathRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteLogPathResponse
     */
    public function deleteLogPathWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->path)) {
            @$query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteLogPathResponse::fromMap($this->doROARequest('DeleteLogPath', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/log/popListLogDirs', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRoleRequest $request
     *
     * @return DeleteRoleResponse
     */
    public function deleteRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            @$query['RoleId'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRoleResponse::fromMap($this->doROARequest('DeleteRole', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/delete_role', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceGroupRequest $request
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteServiceGroupResponse::fromMap($this->doROARequest('DeleteServiceGroup', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/service/serviceGroups', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceTimeConfigRequest $request
     *
     * @return DeleteServiceTimeConfigResponse
     */
    public function deleteServiceTimeConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceTimeConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceTimeConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServiceTimeConfigResponse
     */
    public function deleteServiceTimeConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteServiceTimeConfigResponse::fromMap($this->doROARequest('DeleteServiceTimeConfig', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/timeout/remove', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSwimmingLaneRequest $request
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSwimmingLaneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->laneId)) {
            @$query['LaneId'] = $request->laneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteSwimmingLaneResponse::fromMap($this->doROARequest('DeleteSwimmingLane', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/trafficmgnt/swimming_lanes', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteSwimmingLaneGroupRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSwimmingLaneGroupResponse
     */
    public function deleteSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteSwimmingLaneGroupResponse::fromMap($this->doROARequest('DeleteSwimmingLaneGroup', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/trafficmgnt/swimming_lane_groups', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserDefineRegionRequest $request
     *
     * @return DeleteUserDefineRegionResponse
     */
    public function deleteUserDefineRegion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserDefineRegionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteUserDefineRegionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserDefineRegionResponse
     */
    public function deleteUserDefineRegionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionTag)) {
            @$query['RegionTag'] = $request->regionTag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteUserDefineRegionResponse::fromMap($this->doROARequest('DeleteUserDefineRegion', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/user_region_def', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            @$query['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->desc)) {
            @$query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->deployType)) {
            @$query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->warUrl)) {
            @$query['WarUrl'] = $request->warUrl;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            @$query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->batch)) {
            @$query['Batch'] = $request->batch;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->appEnv)) {
            @$query['AppEnv'] = $request->appEnv;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            @$query['BuildPackId'] = $request->buildPackId;
        }
        if (!Utils::isUnset($request->componentIds)) {
            @$query['ComponentIds'] = $request->componentIds;
        }
        if (!Utils::isUnset($request->releaseType)) {
            @$query['ReleaseType'] = $request->releaseType;
        }
        if (!Utils::isUnset($request->gray)) {
            @$query['Gray'] = $request->gray;
        }
        if (!Utils::isUnset($request->trafficControlStrategy)) {
            @$query['TrafficControlStrategy'] = $request->trafficControlStrategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeployApplicationResponse::fromMap($this->doROARequest('DeployApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_deploy', 'json', $req, $runtime));
    }

    /**
     * @param DeployK8sApplicationRequest $request
     *
     * @return DeployK8sApplicationResponse
     */
    public function deployK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeployK8sApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeployK8sApplicationResponse
     */
    public function deployK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->preStop)) {
            @$query['PreStop'] = $request->preStop;
        }
        if (!Utils::isUnset($request->envs)) {
            @$query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imageTag)) {
            @$query['ImageTag'] = $request->imageTag;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->command)) {
            @$query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->postStart)) {
            @$query['PostStart'] = $request->postStart;
        }
        if (!Utils::isUnset($request->readiness)) {
            @$query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->liveness)) {
            @$query['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->args)) {
            @$query['Args'] = $request->args;
        }
        if (!Utils::isUnset($request->replicas)) {
            @$query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->image)) {
            @$query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->cpuLimit)) {
            @$query['CpuLimit'] = $request->cpuLimit;
        }
        if (!Utils::isUnset($request->memoryLimit)) {
            @$query['MemoryLimit'] = $request->memoryLimit;
        }
        if (!Utils::isUnset($request->cpuRequest)) {
            @$query['CpuRequest'] = $request->cpuRequest;
        }
        if (!Utils::isUnset($request->memoryRequest)) {
            @$query['MemoryRequest'] = $request->memoryRequest;
        }
        if (!Utils::isUnset($request->nasId)) {
            @$query['NasId'] = $request->nasId;
        }
        if (!Utils::isUnset($request->mountDescs)) {
            @$query['MountDescs'] = $request->mountDescs;
        }
        if (!Utils::isUnset($request->storageType)) {
            @$query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->localVolume)) {
            @$query['LocalVolume'] = $request->localVolume;
        }
        if (!Utils::isUnset($request->packageUrl)) {
            @$query['PackageUrl'] = $request->packageUrl;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            @$query['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->JDK)) {
            @$query['JDK'] = $request->JDK;
        }
        if (!Utils::isUnset($request->webContainer)) {
            @$query['WebContainer'] = $request->webContainer;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->uriEncoding)) {
            @$query['UriEncoding'] = $request->uriEncoding;
        }
        if (!Utils::isUnset($request->useBodyEncoding)) {
            @$query['UseBodyEncoding'] = $request->useBodyEncoding;
        }
        if (!Utils::isUnset($request->updateStrategy)) {
            @$query['UpdateStrategy'] = $request->updateStrategy;
        }
        if (!Utils::isUnset($request->mcpuRequest)) {
            @$query['McpuRequest'] = $request->mcpuRequest;
        }
        if (!Utils::isUnset($request->mcpuLimit)) {
            @$query['McpuLimit'] = $request->mcpuLimit;
        }
        if (!Utils::isUnset($request->volumesStr)) {
            @$query['VolumesStr'] = $request->volumesStr;
        }
        if (!Utils::isUnset($request->packageVersionId)) {
            @$query['PackageVersionId'] = $request->packageVersionId;
        }
        if (!Utils::isUnset($request->changeOrderDesc)) {
            @$query['ChangeOrderDesc'] = $request->changeOrderDesc;
        }
        if (!Utils::isUnset($request->runtimeClassName)) {
            @$query['RuntimeClassName'] = $request->runtimeClassName;
        }
        if (!Utils::isUnset($request->deployAcrossZones)) {
            @$query['DeployAcrossZones'] = $request->deployAcrossZones;
        }
        if (!Utils::isUnset($request->batchTimeout)) {
            @$query['BatchTimeout'] = $request->batchTimeout;
        }
        if (!Utils::isUnset($request->enableAhas)) {
            @$query['EnableAhas'] = $request->enableAhas;
        }
        if (!Utils::isUnset($request->webContainerConfig)) {
            @$query['WebContainerConfig'] = $request->webContainerConfig;
        }
        if (!Utils::isUnset($request->javaStartUpConfig)) {
            @$query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->deployAcrossNodes)) {
            @$query['DeployAcrossNodes'] = $request->deployAcrossNodes;
        }
        if (!Utils::isUnset($request->trafficControlStrategy)) {
            @$query['TrafficControlStrategy'] = $request->trafficControlStrategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeployK8sApplicationResponse::fromMap($this->doROARequest('DeployK8sApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/k8s_apps', 'json', $req, $runtime));
    }

    /**
     * @param DisableDegradeControlRequest $request
     *
     * @return DisableDegradeControlResponse
     */
    public function disableDegradeControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableDegradeControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableDegradeControlRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DisableDegradeControlResponse
     */
    public function disableDegradeControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DisableDegradeControlResponse::fromMap($this->doROARequest('DisableDegradeControl', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/degradecontrol/disable', 'json', $req, $runtime));
    }

    /**
     * @param DisableFlowControlRequest $request
     *
     * @return DisableFlowControlResponse
     */
    public function disableFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableFlowControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableFlowControlRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DisableFlowControlResponse
     */
    public function disableFlowControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DisableFlowControlResponse::fromMap($this->doROARequest('DisableFlowControl', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/flowcontrol/disable', 'json', $req, $runtime));
    }

    /**
     * @param DisableMockRuleRequest $request
     *
     * @return DisableMockRuleResponse
     */
    public function disableMockRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableMockRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableMockRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DisableMockRuleResponse
     */
    public function disableMockRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DisableMockRuleResponse::fromMap($this->doROARequest('DisableMockRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/disableMockRule', 'json', $req, $runtime));
    }

    /**
     * @param EnableDegradeControlRequest $request
     *
     * @return EnableDegradeControlResponse
     */
    public function enableDegradeControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableDegradeControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableDegradeControlRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EnableDegradeControlResponse
     */
    public function enableDegradeControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return EnableDegradeControlResponse::fromMap($this->doROARequest('EnableDegradeControl', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/degradecontrol/enable', 'json', $req, $runtime));
    }

    /**
     * @param EnableFlowControlRequest $request
     *
     * @return EnableFlowControlResponse
     */
    public function enableFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableFlowControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableFlowControlRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return EnableFlowControlResponse
     */
    public function enableFlowControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return EnableFlowControlResponse::fromMap($this->doROARequest('EnableFlowControl', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/flowcontrol/enable', 'json', $req, $runtime));
    }

    /**
     * @param EnableMockRuleRequest $request
     *
     * @return EnableMockRuleResponse
     */
    public function enableMockRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableMockRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableMockRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return EnableMockRuleResponse
     */
    public function enableMockRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return EnableMockRuleResponse::fromMap($this->doROARequest('EnableMockRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/enableMockRule', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteStatusRequest $request
     *
     * @return ExecuteStatusResponse
     */
    public function executeStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExecuteStatusRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ExecuteStatusResponse
     */
    public function executeStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            @$query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->accountId)) {
            @$query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->podName)) {
            @$query['PodName'] = $request->podName;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ExecuteStatusResponse::fromMap($this->doROARequest('ExecuteStatus', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mse/status/execute', 'json', $req, $runtime));
    }

    /**
     * @param GetAccountMockRuleRequest $request
     *
     * @return GetAccountMockRuleResponse
     */
    public function getAccountMockRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAccountMockRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAccountMockRuleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetAccountMockRuleResponse
     */
    public function getAccountMockRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->consumerAppName)) {
            @$query['ConsumerAppName'] = $request->consumerAppName;
        }
        if (!Utils::isUnset($request->providerAppName)) {
            @$query['ProviderAppName'] = $request->providerAppName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetAccountMockRuleResponse::fromMap($this->doROARequest('GetAccountMockRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/getAccountMockRule', 'json', $req, $runtime));
    }

    /**
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
     * @param GetApplicationRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetApplicationResponse::fromMap($this->doROARequest('GetApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/app_info', 'json', $req, $runtime));
    }

    /**
     * @param GetChangeOrderInfoRequest $request
     *
     * @return GetChangeOrderInfoResponse
     */
    public function getChangeOrderInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChangeOrderInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetChangeOrderInfoRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetChangeOrderInfoResponse
     */
    public function getChangeOrderInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetChangeOrderInfoResponse::fromMap($this->doROARequest('GetChangeOrderInfo', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/change_order_info', 'json', $req, $runtime));
    }

    /**
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetClusterRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetClusterResponse::fromMap($this->doROARequest('GetCluster', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/cluster', 'json', $req, $runtime));
    }

    /**
     * @param GetContainerConfigurationRequest $request
     *
     * @return GetContainerConfigurationResponse
     */
    public function getContainerConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContainerConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetContainerConfigurationRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetContainerConfigurationResponse
     */
    public function getContainerConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetContainerConfigurationResponse::fromMap($this->doROARequest('GetContainerConfiguration', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/container_config', 'json', $req, $runtime));
    }

    /**
     * @param GetJvmConfigurationRequest $request
     *
     * @return GetJvmConfigurationResponse
     */
    public function getJvmConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJvmConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetJvmConfigurationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetJvmConfigurationResponse
     */
    public function getJvmConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetJvmConfigurationResponse::fromMap($this->doROARequest('GetJvmConfiguration', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/app_jvm_config', 'json', $req, $runtime));
    }

    /**
     * @param GetK8sApplicationRequest $request
     *
     * @return GetK8sApplicationResponse
     */
    public function getK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetK8sApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetK8sApplicationResponse
     */
    public function getK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->from)) {
            @$query['From'] = $request->from;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetK8sApplicationResponse::fromMap($this->doROARequest('GetK8sApplication', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/changeorder/co_application', 'json', $req, $runtime));
    }

    /**
     * @param GetK8sClusterRequest $request
     *
     * @return GetK8sClusterResponse
     */
    public function getK8sCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getK8sClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetK8sClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetK8sClusterResponse
     */
    public function getK8sClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionTag)) {
            @$query['RegionTag'] = $request->regionTag;
        }
        if (!Utils::isUnset($request->currentPage)) {
            @$query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$query['ClusterType'] = $request->clusterType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetK8sClusterResponse::fromMap($this->doROARequest('GetK8sCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s_clusters', 'json', $req, $runtime));
    }

    /**
     * @param GetK8sServicesRequest $request
     *
     * @return GetK8sServicesResponse
     */
    public function getK8sServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getK8sServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetK8sServicesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetK8sServicesResponse
     */
    public function getK8sServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetK8sServicesResponse::fromMap($this->doROARequest('GetK8sServices', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/k8s/acs/k8s_service', 'json', $req, $runtime));
    }

    /**
     * @param GetMockRuleByConsumerAppIdRequest $request
     *
     * @return GetMockRuleByConsumerAppIdResponse
     */
    public function getMockRuleByConsumerAppId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMockRuleByConsumerAppIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetMockRuleByConsumerAppIdRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMockRuleByConsumerAppIdResponse
     */
    public function getMockRuleByConsumerAppIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->consumerAppId)) {
            @$query['ConsumerAppId'] = $request->consumerAppId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetMockRuleByConsumerAppIdResponse::fromMap($this->doROARequest('GetMockRuleByConsumerAppId', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/getMockRuleByConsumerAppId', 'json', $req, $runtime));
    }

    /**
     * @param GetMockRuleByIdRequest $request
     *
     * @return GetMockRuleByIdResponse
     */
    public function getMockRuleById($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMockRuleByIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetMockRuleByIdRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetMockRuleByIdResponse
     */
    public function getMockRuleByIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetMockRuleByIdResponse::fromMap($this->doROARequest('GetMockRuleById', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/getMockRuleById', 'json', $req, $runtime));
    }

    /**
     * @param GetMockRuleByProviderAppIdRequest $request
     *
     * @return GetMockRuleByProviderAppIdResponse
     */
    public function getMockRuleByProviderAppId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMockRuleByProviderAppIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetMockRuleByProviderAppIdRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMockRuleByProviderAppIdResponse
     */
    public function getMockRuleByProviderAppIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->providerAppId)) {
            @$query['ProviderAppId'] = $request->providerAppId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetMockRuleByProviderAppIdResponse::fromMap($this->doROARequest('GetMockRuleByProviderAppId', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/getMockRuleByProviderAppId', 'json', $req, $runtime));
    }

    /**
     * @return GetPackageStorageCredentialResponse
     */
    public function getPackageStorageCredential()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPackageStorageCredentialWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPackageStorageCredentialResponse
     */
    public function getPackageStorageCredentialWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetPackageStorageCredentialResponse::fromMap($this->doROARequest('GetPackageStorageCredential', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/package_storage_credential', 'json', $req, $runtime));
    }

    /**
     * @param GetScalingRulesRequest $request
     *
     * @return GetScalingRulesResponse
     */
    public function getScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScalingRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetScalingRulesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetScalingRulesResponse
     */
    public function getScalingRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->mode)) {
            @$query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetScalingRulesResponse::fromMap($this->doROARequest('GetScalingRules', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/scalingRules', 'json', $req, $runtime));
    }

    /**
     * @param GetSecureTokenRequest $request
     *
     * @return GetSecureTokenResponse
     */
    public function getSecureToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecureTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSecureTokenRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetSecureTokenResponse
     */
    public function getSecureTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSecureTokenResponse::fromMap($this->doROARequest('GetSecureToken', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/secure_token', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceConsumersPageRequest $request
     *
     * @return GetServiceConsumersPageResponse
     */
    public function getServiceConsumersPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceConsumersPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceConsumersPageRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetServiceConsumersPageResponse
     */
    public function getServiceConsumersPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            @$query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->registryType)) {
            @$query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetServiceConsumersPageResponse::fromMap($this->doROARequest('GetServiceConsumersPage', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mseForOam/getServiceConsumersPage', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceDetailRequest $request
     *
     * @return GetServiceDetailResponse
     */
    public function getServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceDetailRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetServiceDetailResponse
     */
    public function getServiceDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            @$query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->registryType)) {
            @$query['registryType'] = $request->registryType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetServiceDetailResponse::fromMap($this->doROARequest('GetServiceDetail', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mseForOam/getServiceDetail', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceListRequest $request
     *
     * @return GetServiceListResponse
     */
    public function getServiceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceListRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetServiceListResponse
     */
    public function getServiceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            @$query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->searchType)) {
            @$query['searchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->searchValue)) {
            @$query['searchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->side)) {
            @$query['side'] = $request->side;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetServiceListResponse::fromMap($this->doROARequest('GetServiceList', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mseForOam/getServiceList', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceListPageRequest $request
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceListPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceListPageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            @$query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->searchType)) {
            @$query['searchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->searchValue)) {
            @$query['searchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->side)) {
            @$query['side'] = $request->side;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetServiceListPageResponse::fromMap($this->doROARequest('GetServiceListPage', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mseForOam/getServiceListPage', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceMethodPageRequest $request
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceMethodPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceMethodPageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            @$query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->registryType)) {
            @$query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->methodController)) {
            @$query['methodController'] = $request->methodController;
        }
        if (!Utils::isUnset($request->path)) {
            @$query['path'] = $request->path;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetServiceMethodPageResponse::fromMap($this->doROARequest('GetServiceMethodPage', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mseForOam/getServiceMethodPage', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceProvidersPageRequest $request
     *
     * @return GetServiceProvidersPageResponse
     */
    public function getServiceProvidersPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceProvidersPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceProvidersPageRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetServiceProvidersPageResponse
     */
    public function getServiceProvidersPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            @$query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['source'] = $request->source;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->registryType)) {
            @$query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetServiceProvidersPageResponse::fromMap($this->doROARequest('GetServiceProvidersPage', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mseForOam/getServiceProvidersPage', 'json', $req, $runtime));
    }

    /**
     * @param GetSubAccountInfoRequest $request
     *
     * @return GetSubAccountInfoResponse
     */
    public function getSubAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubAccountInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSubAccountInfoRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSubAccountInfoResponse
     */
    public function getSubAccountInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetUserId)) {
            @$query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSubAccountInfoResponse::fromMap($this->doROARequest('GetSubAccountInfo', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/sub_account_info', 'json', $req, $runtime));
    }

    /**
     * @param GetSwimmingLaneRequest $request
     *
     * @return GetSwimmingLaneResponse
     */
    public function getSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSwimmingLaneRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetSwimmingLaneResponse
     */
    public function getSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->laneId)) {
            @$query['LaneId'] = $request->laneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSwimmingLaneResponse::fromMap($this->doROARequest('GetSwimmingLane', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/trafficmgnt/swimming_lane', 'json', $req, $runtime));
    }

    /**
     * @param ImportK8sClusterRequest $request
     *
     * @return ImportK8sClusterResponse
     */
    public function importK8sCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importK8sClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImportK8sClusterRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ImportK8sClusterResponse
     */
    public function importK8sClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->mode)) {
            @$query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->enableAsm)) {
            @$query['EnableAsm'] = $request->enableAsm;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImportK8sClusterResponse::fromMap($this->doROARequest('ImportK8sCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/import_k8s_cluster', 'json', $req, $runtime));
    }

    /**
     * @param InsertApplicationRequest $request
     *
     * @return InsertApplicationResponse
     */
    public function insertApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsertApplicationResponse
     */
    public function insertApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            @$query['BuildPackId'] = $request->buildPackId;
        }
        if (!Utils::isUnset($request->description)) {
            @$query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->applicationName)) {
            @$query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->reservedPortStr)) {
            @$query['ReservedPortStr'] = $request->reservedPortStr;
        }
        if (!Utils::isUnset($request->ecuInfo)) {
            @$query['EcuInfo'] = $request->ecuInfo;
        }
        if (!Utils::isUnset($request->cpu)) {
            @$query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->mem)) {
            @$query['Mem'] = $request->mem;
        }
        if (!Utils::isUnset($request->healthCheckURL)) {
            @$query['HealthCheckURL'] = $request->healthCheckURL;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->jdk)) {
            @$query['Jdk'] = $request->jdk;
        }
        if (!Utils::isUnset($request->webContainer)) {
            @$query['WebContainer'] = $request->webContainer;
        }
        if (!Utils::isUnset($request->packageType)) {
            @$query['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->componentIds)) {
            @$query['ComponentIds'] = $request->componentIds;
        }
        if (!Utils::isUnset($request->hooks)) {
            @$query['Hooks'] = $request->hooks;
        }
        if (!Utils::isUnset($request->jvmOptions)) {
            @$query['JvmOptions'] = $request->jvmOptions;
        }
        if (!Utils::isUnset($request->minHeapSize)) {
            @$query['MinHeapSize'] = $request->minHeapSize;
        }
        if (!Utils::isUnset($request->maxPermSize)) {
            @$query['MaxPermSize'] = $request->maxPermSize;
        }
        if (!Utils::isUnset($request->maxHeapSize)) {
            @$query['MaxHeapSize'] = $request->maxHeapSize;
        }
        if (!Utils::isUnset($request->enableUrlCheck)) {
            @$query['EnableUrlCheck'] = $request->enableUrlCheck;
        }
        if (!Utils::isUnset($request->enablePortCheck)) {
            @$query['EnablePortCheck'] = $request->enablePortCheck;
        }
        if (!Utils::isUnset($request->healthCheckUrl)) {
            @$query['HealthCheckUrl'] = $request->healthCheckUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertApplicationResponse::fromMap($this->doROARequest('InsertApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_create_app', 'json', $req, $runtime));
    }

    /**
     * @param InsertClusterRequest $request
     *
     * @return InsertClusterResponse
     */
    public function insertCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InsertClusterResponse
     */
    public function insertClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            @$query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->networkMode)) {
            @$query['NetworkMode'] = $request->networkMode;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->oversoldFactor)) {
            @$query['OversoldFactor'] = $request->oversoldFactor;
        }
        if (!Utils::isUnset($request->iaasProvider)) {
            @$query['IaasProvider'] = $request->iaasProvider;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertClusterResponse::fromMap($this->doROARequest('InsertCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/cluster', 'json', $req, $runtime));
    }

    /**
     * @param InsertClusterMemberRequest $request
     *
     * @return InsertClusterMemberResponse
     */
    public function insertClusterMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertClusterMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertClusterMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return InsertClusterMemberResponse
     */
    public function insertClusterMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['clusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            @$query['instanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->password)) {
            @$query['password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertClusterMemberResponse::fromMap($this->doROARequest('InsertClusterMember', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/cluster_member', 'json', $req, $runtime));
    }

    /**
     * @param InsertConfigCenterRequest $request
     *
     * @return InsertConfigCenterResponse
     */
    public function insertConfigCenter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertConfigCenterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertConfigCenterRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InsertConfigCenterResponse
     */
    public function insertConfigCenterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            @$query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->data)) {
            @$query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->appName)) {
            @$query['AppName'] = $request->appName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertConfigCenterResponse::fromMap($this->doROARequest('InsertConfigCenter', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/configCenter', 'json', $req, $runtime));
    }

    /**
     * @param InsertDegradeControlRequest $request
     *
     * @return InsertDegradeControlResponse
     */
    public function insertDegradeControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertDegradeControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertDegradeControlRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InsertDegradeControlResponse
     */
    public function insertDegradeControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->duration)) {
            @$query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->methodName)) {
            @$query['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->rtThreshold)) {
            @$query['RtThreshold'] = $request->rtThreshold;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->urlVar)) {
            @$query['UrlVar'] = $request->urlVar;
        }
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertDegradeControlResponse::fromMap($this->doROARequest('InsertDegradeControl', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/degradeControl', 'json', $req, $runtime));
    }

    /**
     * @param InsertDeployGroupRequest $request
     *
     * @return InsertDeployGroupResponse
     */
    public function insertDeployGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertDeployGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertDeployGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsertDeployGroupResponse
     */
    public function insertDeployGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupName)) {
            @$query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->initPackageVersionId)) {
            @$query['InitPackageVersionId'] = $request->initPackageVersionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertDeployGroupResponse::fromMap($this->doROARequest('InsertDeployGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/deploy_group', 'json', $req, $runtime));
    }

    /**
     * @param InsertFlowControlRequest $request
     *
     * @return InsertFlowControlResponse
     */
    public function insertFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertFlowControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertFlowControlRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsertFlowControlResponse
     */
    public function insertFlowControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->consumerAppId)) {
            @$query['ConsumerAppId'] = $request->consumerAppId;
        }
        if (!Utils::isUnset($request->granularity)) {
            @$query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->methodName)) {
            @$query['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->strategy)) {
            @$query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->threshold)) {
            @$query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->urlVar)) {
            @$query['UrlVar'] = $request->urlVar;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertFlowControlResponse::fromMap($this->doROARequest('InsertFlowControl', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/flowControl', 'json', $req, $runtime));
    }

    /**
     * @param InsertK8sApplicationRequest $request
     *
     * @return InsertK8sApplicationResponse
     */
    public function insertK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertK8sApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InsertK8sApplicationResponse
     */
    public function insertK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->intranetTargetPort)) {
            @$query['IntranetTargetPort'] = $request->intranetTargetPort;
        }
        if (!Utils::isUnset($request->intranetSlbPort)) {
            @$query['IntranetSlbPort'] = $request->intranetSlbPort;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            @$query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->applicationDescription)) {
            @$query['ApplicationDescription'] = $request->applicationDescription;
        }
        if (!Utils::isUnset($request->repoId)) {
            @$query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->replicas)) {
            @$query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->limitCpu)) {
            @$query['LimitCpu'] = $request->limitCpu;
        }
        if (!Utils::isUnset($request->limitMem)) {
            @$query['LimitMem'] = $request->limitMem;
        }
        if (!Utils::isUnset($request->requestsCpu)) {
            @$query['RequestsCpu'] = $request->requestsCpu;
        }
        if (!Utils::isUnset($request->requestsMem)) {
            @$query['RequestsMem'] = $request->requestsMem;
        }
        if (!Utils::isUnset($request->command)) {
            @$query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            @$query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->appName)) {
            @$query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->intranetSlbProtocol)) {
            @$query['IntranetSlbProtocol'] = $request->intranetSlbProtocol;
        }
        if (!Utils::isUnset($request->intranetSlbId)) {
            @$query['IntranetSlbId'] = $request->intranetSlbId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->internetSlbId)) {
            @$query['InternetSlbId'] = $request->internetSlbId;
        }
        if (!Utils::isUnset($request->internetSlbProtocol)) {
            @$query['InternetSlbProtocol'] = $request->internetSlbProtocol;
        }
        if (!Utils::isUnset($request->internetSlbPort)) {
            @$query['InternetSlbPort'] = $request->internetSlbPort;
        }
        if (!Utils::isUnset($request->internetTargetPort)) {
            @$query['InternetTargetPort'] = $request->internetTargetPort;
        }
        if (!Utils::isUnset($request->envs)) {
            @$query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->preStop)) {
            @$query['PreStop'] = $request->preStop;
        }
        if (!Utils::isUnset($request->postStart)) {
            @$query['PostStart'] = $request->postStart;
        }
        if (!Utils::isUnset($request->liveness)) {
            @$query['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->readiness)) {
            @$query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->nasId)) {
            @$query['NasId'] = $request->nasId;
        }
        if (!Utils::isUnset($request->mountDescs)) {
            @$query['MountDescs'] = $request->mountDescs;
        }
        if (!Utils::isUnset($request->storageType)) {
            @$query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->localVolume)) {
            @$query['LocalVolume'] = $request->localVolume;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->packageType)) {
            @$query['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->packageUrl)) {
            @$query['PackageUrl'] = $request->packageUrl;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            @$query['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->JDK)) {
            @$query['JDK'] = $request->JDK;
        }
        if (!Utils::isUnset($request->webContainer)) {
            @$query['WebContainer'] = $request->webContainer;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->uriEncoding)) {
            @$query['UriEncoding'] = $request->uriEncoding;
        }
        if (!Utils::isUnset($request->useBodyEncoding)) {
            @$query['UseBodyEncoding'] = $request->useBodyEncoding;
        }
        if (!Utils::isUnset($request->requestsmCpu)) {
            @$query['RequestsmCpu'] = $request->requestsmCpu;
        }
        if (!Utils::isUnset($request->limitmCpu)) {
            @$query['LimitmCpu'] = $request->limitmCpu;
        }
        if (!Utils::isUnset($request->runtimeClassName)) {
            @$query['RuntimeClassName'] = $request->runtimeClassName;
        }
        if (!Utils::isUnset($request->deployAcrossZones)) {
            @$query['DeployAcrossZones'] = $request->deployAcrossZones;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->enableAhas)) {
            @$query['EnableAhas'] = $request->enableAhas;
        }
        if (!Utils::isUnset($request->webContainerConfig)) {
            @$query['WebContainerConfig'] = $request->webContainerConfig;
        }
        if (!Utils::isUnset($request->javaStartUpConfig)) {
            @$query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->isMultilingualApp)) {
            @$query['IsMultilingualApp'] = $request->isMultilingualApp;
        }
        if (!Utils::isUnset($request->deployAcrossNodes)) {
            @$query['DeployAcrossNodes'] = $request->deployAcrossNodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertK8sApplicationResponse::fromMap($this->doROARequest('InsertK8sApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/create_k8s_app', 'json', $req, $runtime));
    }

    /**
     * @param InsertOrUpdateRegionRequest $request
     *
     * @return InsertOrUpdateRegionResponse
     */
    public function insertOrUpdateRegion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertOrUpdateRegionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertOrUpdateRegionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InsertOrUpdateRegionResponse
     */
    public function insertOrUpdateRegionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionTag)) {
            @$query['RegionTag'] = $request->regionTag;
        }
        if (!Utils::isUnset($request->regionName)) {
            @$query['RegionName'] = $request->regionName;
        }
        if (!Utils::isUnset($request->description)) {
            @$query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->debugEnable)) {
            @$query['DebugEnable'] = $request->debugEnable;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertOrUpdateRegionResponse::fromMap($this->doROARequest('InsertOrUpdateRegion', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/user_region_def', 'json', $req, $runtime));
    }

    /**
     * @param InsertRoleRequest $request
     *
     * @return InsertRoleResponse
     */
    public function insertRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return InsertRoleResponse
     */
    public function insertRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            @$query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->actionData)) {
            @$query['ActionData'] = $request->actionData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertRoleResponse::fromMap($this->doROARequest('InsertRole', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/create_role', 'json', $req, $runtime));
    }

    /**
     * @param InsertServiceGroupRequest $request
     *
     * @return InsertServiceGroupResponse
     */
    public function insertServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InsertServiceGroupResponse
     */
    public function insertServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            @$query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertServiceGroupResponse::fromMap($this->doROARequest('InsertServiceGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/service/serviceGroups', 'json', $req, $runtime));
    }

    /**
     * @param InsertSwimmingLaneRequest $request
     *
     * @return InsertSwimmingLaneResponse
     */
    public function insertSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertSwimmingLaneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InsertSwimmingLaneResponse
     */
    public function insertSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tag)) {
            @$query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->entryRules)) {
            @$query['EntryRules'] = $request->entryRules;
        }
        if (!Utils::isUnset($request->enableRules)) {
            @$query['EnableRules'] = $request->enableRules;
        }
        if (!Utils::isUnset($request->appInfos)) {
            @$query['AppInfos'] = $request->appInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertSwimmingLaneResponse::fromMap($this->doROARequest('InsertSwimmingLane', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/trafficmgnt/swimming_lanes', 'json', $req, $runtime));
    }

    /**
     * @param InsertSwimmingLaneGroupRequest $request
     *
     * @return InsertSwimmingLaneGroupResponse
     */
    public function insertSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->insertSwimmingLaneGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertSwimmingLaneGroupRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InsertSwimmingLaneGroupResponse
     */
    public function insertSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->entryApp)) {
            @$query['EntryApp'] = $request->entryApp;
        }
        if (!Utils::isUnset($request->appIds)) {
            @$query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InsertSwimmingLaneGroupResponse::fromMap($this->doROARequest('InsertSwimmingLaneGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/trafficmgnt/swimming_lane_groups', 'json', $req, $runtime));
    }

    /**
     * @param InstallAgentRequest $request
     *
     * @return InstallAgentResponse
     */
    public function installAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InstallAgentRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InstallAgentResponse
     */
    public function installAgentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            @$query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->doAsync)) {
            @$query['DoAsync'] = $request->doAsync;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InstallAgentResponse::fromMap($this->doROARequest('InstallAgent', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/ecss/install_agent', 'json', $req, $runtime));
    }

    /**
     * @return ListAliyunRegionResponse
     */
    public function listAliyunRegion()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAliyunRegionWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAliyunRegionResponse
     */
    public function listAliyunRegionWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListAliyunRegionResponse::fromMap($this->doROARequest('ListAliyunRegion', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/region_list', 'json', $req, $runtime));
    }

    /**
     * @param ListApplicationRequest $request
     *
     * @return ListApplicationResponse
     */
    public function listApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListApplicationRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListApplicationResponse
     */
    public function listApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->appName)) {
            @$query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->logicalRegionIdFilter)) {
            @$query['LogicalRegionIdFilter'] = $request->logicalRegionIdFilter;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListApplicationResponse::fromMap($this->doROARequest('ListApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/app_list', 'json', $req, $runtime));
    }

    /**
     * @param ListApplicationEcuRequest $request
     *
     * @return ListApplicationEcuResponse
     */
    public function listApplicationEcu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationEcuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListApplicationEcuRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListApplicationEcuResponse
     */
    public function listApplicationEcuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListApplicationEcuResponse::fromMap($this->doROARequest('ListApplicationEcu', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/ecu_list', 'json', $req, $runtime));
    }

    /**
     * @return ListAuthorityResponse
     */
    public function listAuthority()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorityWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAuthorityResponse
     */
    public function listAuthorityWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListAuthorityResponse::fromMap($this->doROARequest('ListAuthority', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/authority_list', 'json', $req, $runtime));
    }

    /**
     * @return ListBuildPackResponse
     */
    public function listBuildPack()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBuildPackWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListBuildPackResponse
     */
    public function listBuildPackWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListBuildPackResponse::fromMap($this->doROARequest('ListBuildPack', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/build_pack_list', 'json', $req, $runtime));
    }

    /**
     * @param ListChildrenStacksRequest $request
     *
     * @return ListChildrenStacksResponse
     */
    public function listChildrenStacks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChildrenStacksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChildrenStacksRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListChildrenStacksResponse
     */
    public function listChildrenStacksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->stackId)) {
            @$query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            @$query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListChildrenStacksResponse::fromMap($this->doROARequest('ListChildrenStacks', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/s2i/list_children_stack', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterRequest $request
     *
     * @return ListClusterResponse
     */
    public function listCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListClusterRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListClusterResponse
     */
    public function listClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListClusterResponse::fromMap($this->doROARequest('ListCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/cluster_list', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterMembersRequest $request
     *
     * @return ListClusterMembersResponse
     */
    public function listClusterMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListClusterMembersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListClusterMembersResponse
     */
    public function listClusterMembersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            @$query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ecsList)) {
            @$query['EcsList'] = $request->ecsList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListClusterMembersResponse::fromMap($this->doROARequest('ListClusterMembers', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/cluster_member_list', 'json', $req, $runtime));
    }

    /**
     * @return ListComponentsResponse
     */
    public function listComponents()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListComponentsResponse::fromMap($this->doROARequest('ListComponents', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/components', 'json', $req, $runtime));
    }

    /**
     * @param ListConfigCentersRequest $request
     *
     * @return ListConfigCentersResponse
     */
    public function listConfigCenters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigCentersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListConfigCentersRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListConfigCentersResponse
     */
    public function listConfigCentersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataIdPattern)) {
            @$query['DataIdPattern'] = $request->dataIdPattern;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->appName)) {
            @$query['AppName'] = $request->appName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListConfigCentersResponse::fromMap($this->doROARequest('ListConfigCenters', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/configCenters', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListConsumedServicesResponse::fromMap($this->doROARequest('ListConsumedServices', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/service/listConsumedServices', 'json', $req, $runtime));
    }

    /**
     * @param ListConvertableEcuRequest $request
     *
     * @return ListConvertableEcuResponse
     */
    public function listConvertableEcu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConvertableEcuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListConvertableEcuRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListConvertableEcuResponse
     */
    public function listConvertableEcuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['clusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListConvertableEcuResponse::fromMap($this->doROARequest('ListConvertableEcu', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/convertable_ecu_list', 'json', $req, $runtime));
    }

    /**
     * @param ListCSBGatewayRequest $request
     *
     * @return ListCSBGatewayResponse
     */
    public function listCSBGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCSBGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCSBGatewayRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCSBGatewayResponse
     */
    public function listCSBGatewayWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListCSBGatewayResponse::fromMap($this->doROARequest('ListCSBGateway', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/csbgateway/gateway', 'json', $req, $runtime));
    }

    /**
     * @param ListDegradeControlsRequest $request
     *
     * @return ListDegradeControlsResponse
     */
    public function listDegradeControls($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDegradeControlsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDegradeControlsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDegradeControlsResponse
     */
    public function listDegradeControlsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDegradeControlsResponse::fromMap($this->doROARequest('ListDegradeControls', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/degradeControls', 'json', $req, $runtime));
    }

    /**
     * @param ListDeployGroupRequest $request
     *
     * @return ListDeployGroupResponse
     */
    public function listDeployGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeployGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDeployGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeployGroupResponse
     */
    public function listDeployGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDeployGroupResponse::fromMap($this->doROARequest('ListDeployGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/deploy_group_list', 'json', $req, $runtime));
    }

    /**
     * @param ListEcsNotInClusterRequest $request
     *
     * @return ListEcsNotInClusterResponse
     */
    public function listEcsNotInCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsNotInClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEcsNotInClusterRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListEcsNotInClusterResponse
     */
    public function listEcsNotInClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkMode)) {
            @$query['NetworkMode'] = $request->networkMode;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListEcsNotInClusterResponse::fromMap($this->doROARequest('ListEcsNotInCluster', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/ecs_not_in_cluster', 'json', $req, $runtime));
    }

    /**
     * @param ListEcuByRegionRequest $request
     *
     * @return ListEcuByRegionResponse
     */
    public function listEcuByRegion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcuByRegionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEcuByRegionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListEcuByRegionResponse
     */
    public function listEcuByRegionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->act)) {
            @$query['Act'] = $request->act;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListEcuByRegionResponse::fromMap($this->doROARequest('ListEcuByRegion', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/ecu_list', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowControlsRequest $request
     *
     * @return ListFlowControlsResponse
     */
    public function listFlowControls($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListFlowControlsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowControlsResponse
     */
    public function listFlowControlsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListFlowControlsResponse::fromMap($this->doROARequest('ListFlowControls', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/flowControls', 'json', $req, $runtime));
    }

    /**
     * @param ListHistoryDeployVersionRequest $request
     *
     * @return ListHistoryDeployVersionResponse
     */
    public function listHistoryDeployVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHistoryDeployVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHistoryDeployVersionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHistoryDeployVersionResponse
     */
    public function listHistoryDeployVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListHistoryDeployVersionResponse::fromMap($this->doROARequest('ListHistoryDeployVersion', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/deploy_history_version_list', 'json', $req, $runtime));
    }

    /**
     * @param ListK8sIngressRulesRequest $request
     *
     * @return ListK8sIngressRulesResponse
     */
    public function listK8sIngressRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listK8sIngressRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListK8sIngressRulesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListK8sIngressRulesResponse
     */
    public function listK8sIngressRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListK8sIngressRulesResponse::fromMap($this->doROARequest('ListK8sIngressRules', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/k8s/acs/k8s_ingress', 'json', $req, $runtime));
    }

    /**
     * @param ListMethodsRequest $request
     *
     * @return ListMethodsResponse
     */
    public function listMethods($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMethodsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMethodsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMethodsResponse
     */
    public function listMethodsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListMethodsResponse::fromMap($this->doROARequest('ListMethods', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/service/list_methods', 'json', $req, $runtime));
    }

    /**
     * @param ListOperationLogsRequest $request
     *
     * @return ListOperationLogsResponse
     */
    public function listOperationLogs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationLogsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListOperationLogsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListOperationLogsResponse
     */
    public function listOperationLogsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->beginTime)) {
            @$query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            @$query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListOperationLogsResponse::fromMap($this->doROARequest('ListOperationLogs', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/operationlog/log_list', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListPublishedServicesResponse::fromMap($this->doROARequest('ListPublishedServices', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/service/listPublishedServices', 'json', $req, $runtime));
    }

    /**
     * @param ListRecentChangeOrderRequest $request
     *
     * @return ListRecentChangeOrderResponse
     */
    public function listRecentChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecentChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRecentChangeOrderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRecentChangeOrderResponse
     */
    public function listRecentChangeOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRecentChangeOrderResponse::fromMap($this->doROARequest('ListRecentChangeOrder', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/change_order_list', 'json', $req, $runtime));
    }

    /**
     * @return ListResourceGroupResponse
     */
    public function listResourceGroup()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceGroupResponse
     */
    public function listResourceGroupWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListResourceGroupResponse::fromMap($this->doROARequest('ListResourceGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/reg_group_list', 'json', $req, $runtime));
    }

    /**
     * @return ListRoleResponse
     */
    public function listRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRoleWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRoleResponse
     */
    public function listRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListRoleResponse::fromMap($this->doROARequest('ListRole', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/role_list', 'json', $req, $runtime));
    }

    /**
     * @param ListRootStacksRequest $request
     *
     * @return ListRootStacksResponse
     */
    public function listRootStacks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRootStacksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRootStacksRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRootStacksResponse
     */
    public function listRootStacksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            @$query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRootStacksResponse::fromMap($this->doROARequest('ListRootStacks', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/s2i/list_root_stack', 'json', $req, $runtime));
    }

    /**
     * @param ListScaleOutEcuRequest $request
     *
     * @return ListScaleOutEcuResponse
     */
    public function listScaleOutEcu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScaleOutEcuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListScaleOutEcuRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListScaleOutEcuResponse
     */
    public function listScaleOutEcuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->cpu)) {
            @$query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->mem)) {
            @$query['Mem'] = $request->mem;
        }
        if (!Utils::isUnset($request->instanceNum)) {
            @$query['InstanceNum'] = $request->instanceNum;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListScaleOutEcuResponse::fromMap($this->doROARequest('ListScaleOutEcu', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/scale_out_ecu_list', 'json', $req, $runtime));
    }

    /**
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroups()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceGroupsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroupsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListServiceGroupsResponse::fromMap($this->doROARequest('ListServiceGroups', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/service/serviceGroups', 'json', $req, $runtime));
    }

    /**
     * @return ListSlbResponse
     */
    public function listSlb()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlbWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSlbResponse
     */
    public function listSlbWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSlbResponse::fromMap($this->doROARequest('ListSlb', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/slb_list', 'json', $req, $runtime));
    }

    /**
     * @param ListStatusRequest $request
     *
     * @return ListStatusResponse
     */
    public function listStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListStatusRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListStatusResponse
     */
    public function listStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            @$query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->accountId)) {
            @$query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->podName)) {
            @$query['PodName'] = $request->podName;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListStatusResponse::fromMap($this->doROARequest('ListStatus', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mse/status/list', 'json', $req, $runtime));
    }

    /**
     * @return ListSubAccountResponse
     */
    public function listSubAccount()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubAccountWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSubAccountResponse
     */
    public function listSubAccountWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSubAccountResponse::fromMap($this->doROARequest('ListSubAccount', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/sub_account_list', 'json', $req, $runtime));
    }

    /**
     * @param ListSwimmingLaneRequest $request
     *
     * @return ListSwimmingLaneResponse
     */
    public function listSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSwimmingLaneRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSwimmingLaneResponse
     */
    public function listSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSwimmingLaneResponse::fromMap($this->doROARequest('ListSwimmingLane', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/trafficmgnt/swimming_lanes', 'json', $req, $runtime));
    }

    /**
     * @param ListSwimmingLaneGroupRequest $request
     *
     * @return ListSwimmingLaneGroupResponse
     */
    public function listSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSwimmingLaneGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSwimmingLaneGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListSwimmingLaneGroupResponse
     */
    public function listSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSwimmingLaneGroupResponse::fromMap($this->doROARequest('ListSwimmingLaneGroup', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/trafficmgnt/swimming_lane_groups', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->resourceType)) {
            @$query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTagResourcesResponse::fromMap($this->doROARequest('ListTagResources', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/tag/tags', 'json', $req, $runtime));
    }

    /**
     * @param ListUserDefineRegionRequest $request
     *
     * @return ListUserDefineRegionResponse
     */
    public function listUserDefineRegion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserDefineRegionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserDefineRegionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListUserDefineRegionResponse
     */
    public function listUserDefineRegionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->debugEnable)) {
            @$query['DebugEnable'] = $request->debugEnable;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListUserDefineRegionResponse::fromMap($this->doROARequest('ListUserDefineRegion', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/user_region_defs', 'json', $req, $runtime));
    }

    /**
     * @return ListVpcResponse
     */
    public function listVpc()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListVpcResponse
     */
    public function listVpcWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListVpcResponse::fromMap($this->doROARequest('ListVpc', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/vpc_list', 'json', $req, $runtime));
    }

    /**
     * @param MigrateEcuRequest $request
     *
     * @return MigrateEcuResponse
     */
    public function migrateEcu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateEcuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param MigrateEcuRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return MigrateEcuResponse
     */
    public function migrateEcuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            @$query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return MigrateEcuResponse::fromMap($this->doROARequest('MigrateEcu', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/migrate_ecu', 'json', $req, $runtime));
    }

    /**
     * @param ModifyScalingRuleRequest $request
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ModifyScalingRuleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->inCondition)) {
            @$query['InCondition'] = $request->inCondition;
        }
        if (!Utils::isUnset($request->inEnable)) {
            @$query['InEnable'] = $request->inEnable;
        }
        if (!Utils::isUnset($request->inCpu)) {
            @$query['InCpu'] = $request->inCpu;
        }
        if (!Utils::isUnset($request->inDuration)) {
            @$query['InDuration'] = $request->inDuration;
        }
        if (!Utils::isUnset($request->inInstanceNum)) {
            @$query['InInstanceNum'] = $request->inInstanceNum;
        }
        if (!Utils::isUnset($request->inLoad)) {
            @$query['InLoad'] = $request->inLoad;
        }
        if (!Utils::isUnset($request->inRT)) {
            @$query['InRT'] = $request->inRT;
        }
        if (!Utils::isUnset($request->inStep)) {
            @$query['InStep'] = $request->inStep;
        }
        if (!Utils::isUnset($request->outCondition)) {
            @$query['OutCondition'] = $request->outCondition;
        }
        if (!Utils::isUnset($request->outCPU)) {
            @$query['OutCPU'] = $request->outCPU;
        }
        if (!Utils::isUnset($request->outDuration)) {
            @$query['OutDuration'] = $request->outDuration;
        }
        if (!Utils::isUnset($request->outEnable)) {
            @$query['OutEnable'] = $request->outEnable;
        }
        if (!Utils::isUnset($request->outInstanceNum)) {
            @$query['OutInstanceNum'] = $request->outInstanceNum;
        }
        if (!Utils::isUnset($request->outLoad)) {
            @$query['OutLoad'] = $request->outLoad;
        }
        if (!Utils::isUnset($request->outRT)) {
            @$query['OutRT'] = $request->outRT;
        }
        if (!Utils::isUnset($request->outStep)) {
            @$query['OutStep'] = $request->outStep;
        }
        if (!Utils::isUnset($request->resourceFrom)) {
            @$query['ResourceFrom'] = $request->resourceFrom;
        }
        if (!Utils::isUnset($request->multiAzPolicy)) {
            @$query['MultiAzPolicy'] = $request->multiAzPolicy;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }
        if (!Utils::isUnset($request->scalingPolicy)) {
            @$query['ScalingPolicy'] = $request->scalingPolicy;
        }
        if (!Utils::isUnset($request->templateInstanceId)) {
            @$query['TemplateInstanceId'] = $request->templateInstanceId;
        }
        if (!Utils::isUnset($request->templateInstanceName)) {
            @$query['TemplateInstanceName'] = $request->templateInstanceName;
        }
        if (!Utils::isUnset($request->password)) {
            @$query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            @$query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->acceptEULA)) {
            @$query['AcceptEULA'] = $request->acceptEULA;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifyScalingRuleResponse::fromMap($this->doROARequest('ModifyScalingRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/scaling_rules', 'json', $req, $runtime));
    }

    /**
     * @param QueryApplicationStatusRequest $request
     *
     * @return QueryApplicationStatusResponse
     */
    public function queryApplicationStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryApplicationStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryApplicationStatusRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryApplicationStatusResponse
     */
    public function queryApplicationStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryApplicationStatusResponse::fromMap($this->doROARequest('QueryApplicationStatus', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/app/app_status', 'json', $req, $runtime));
    }

    /**
     * @param QueryConfigCenterRequest $request
     *
     * @return QueryConfigCenterResponse
     */
    public function queryConfigCenter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryConfigCenterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryConfigCenterRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryConfigCenterResponse
     */
    public function queryConfigCenterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            @$query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryConfigCenterResponse::fromMap($this->doROARequest('QueryConfigCenter', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/configCenter', 'json', $req, $runtime));
    }

    /**
     * @param QueryEccInfoRequest $request
     *
     * @return QueryEccInfoResponse
     */
    public function queryEccInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryEccInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryEccInfoRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryEccInfoResponse
     */
    public function queryEccInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eccId)) {
            @$query['EccId'] = $request->eccId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryEccInfoResponse::fromMap($this->doROARequest('QueryEccInfo', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/ecc', 'json', $req, $runtime));
    }

    /**
     * @param QueryK8sClusterLogProjectInfoRequest $request
     *
     * @return QueryK8sClusterLogProjectInfoResponse
     */
    public function queryK8sClusterLogProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryK8sClusterLogProjectInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryK8sClusterLogProjectInfoRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryK8sClusterLogProjectInfoResponse
     */
    public function queryK8sClusterLogProjectInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryK8sClusterLogProjectInfoResponse::fromMap($this->doROARequest('QueryK8sClusterLogProjectInfo', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/k8s/sls/project', 'json', $req, $runtime));
    }

    /**
     * @param QueryMigrateEcuListRequest $request
     *
     * @return QueryMigrateEcuListResponse
     */
    public function queryMigrateEcuList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryMigrateEcuListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMigrateEcuListRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMigrateEcuListResponse
     */
    public function queryMigrateEcuListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryMigrateEcuListResponse::fromMap($this->doROARequest('QueryMigrateEcuList', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/migrate_ecu_list', 'json', $req, $runtime));
    }

    /**
     * @param QueryMigrateRegionListRequest $request
     *
     * @return QueryMigrateRegionListResponse
     */
    public function queryMigrateRegionList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryMigrateRegionListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMigrateRegionListRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryMigrateRegionListResponse
     */
    public function queryMigrateRegionListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicalRegionId)) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryMigrateRegionListResponse::fromMap($this->doROARequest('QueryMigrateRegionList', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/migrate_region_select', 'json', $req, $runtime));
    }

    /**
     * @param QueryMonitorInfoRequest $request
     *
     * @return QueryMonitorInfoResponse
     */
    public function queryMonitorInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryMonitorInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMonitorInfoRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMonitorInfoResponse
     */
    public function queryMonitorInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->start)) {
            @$query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->end)) {
            @$query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->metric)) {
            @$query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->aggregator)) {
            @$query['Aggregator'] = $request->aggregator;
        }
        if (!Utils::isUnset($request->interval)) {
            @$query['Interval'] = $request->interval;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryMonitorInfoResponse::fromMap($this->doROARequest('QueryMonitorInfo', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/monitor/queryMonitorInfo', 'json', $req, $runtime));
    }

    /**
     * @return QueryRegionConfigResponse
     */
    public function queryRegionConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRegionConfigWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryRegionConfigResponse
     */
    public function queryRegionConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return QueryRegionConfigResponse::fromMap($this->doROARequest('QueryRegionConfig', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/region_config', 'json', $req, $runtime));
    }

    /**
     * @param QueryServiceTimeConfigRequest $request
     *
     * @return QueryServiceTimeConfigResponse
     */
    public function queryServiceTimeConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryServiceTimeConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryServiceTimeConfigRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryServiceTimeConfigResponse
     */
    public function queryServiceTimeConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serviceType)) {
            @$query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->serviceGroup)) {
            @$query['ServiceGroup'] = $request->serviceGroup;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryServiceTimeConfigResponse::fromMap($this->doROARequest('QueryServiceTimeConfig', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/timeout/page', 'json', $req, $runtime));
    }

    /**
     * @param QuerySlsLogStoreListRequest $request
     *
     * @return QuerySlsLogStoreListResponse
     */
    public function querySlsLogStoreList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySlsLogStoreListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QuerySlsLogStoreListRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySlsLogStoreListResponse
     */
    public function querySlsLogStoreListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->currentPage)) {
            @$query['CurrentPage'] = $request->currentPage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QuerySlsLogStoreListResponse::fromMap($this->doROARequest('QuerySlsLogStoreList', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/k8s/sls/query_sls_log_store_list', 'json', $req, $runtime));
    }

    /**
     * @param RemoveMockRuleRequest $request
     *
     * @return RemoveMockRuleResponse
     */
    public function removeMockRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeMockRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveMockRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveMockRuleResponse
     */
    public function removeMockRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RemoveMockRuleResponse::fromMap($this->doROARequest('RemoveMockRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/removeMockRule', 'json', $req, $runtime));
    }

    /**
     * @param ResetApplicationRequest $request
     *
     * @return ResetApplicationResponse
     */
    public function resetApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ResetApplicationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ResetApplicationResponse
     */
    public function resetApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            @$query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ResetApplicationResponse::fromMap($this->doROARequest('ResetApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_reset', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            @$query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RestartApplicationResponse::fromMap($this->doROARequest('RestartApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_restart', 'json', $req, $runtime));
    }

    /**
     * @param RestartK8sApplicationRequest $request
     *
     * @return RestartK8sApplicationResponse
     */
    public function restartK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RestartK8sApplicationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RestartK8sApplicationResponse
     */
    public function restartK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RestartK8sApplicationResponse::fromMap($this->doROARequest('RestartK8sApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/restart_k8s_app', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            @$query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->batch)) {
            @$query['Batch'] = $request->batch;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RollbackApplicationResponse::fromMap($this->doROARequest('RollbackApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_rollback', 'json', $req, $runtime));
    }

    /**
     * @param RollbackChangeOrderRequest $request
     *
     * @return RollbackChangeOrderResponse
     */
    public function rollbackChangeOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackChangeOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RollbackChangeOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackChangeOrderResponse
     */
    public function rollbackChangeOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RollbackChangeOrderResponse::fromMap($this->doROARequest('RollbackChangeOrder', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/oam/changeorder/rollback', 'json', $req, $runtime));
    }

    /**
     * @param ScaleInApplicationRequest $request
     *
     * @return ScaleInApplicationResponse
     */
    public function scaleInApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleInApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScaleInApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ScaleInApplicationResponse
     */
    public function scaleInApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            @$query['EccInfo'] = $request->eccInfo;
        }
        if (!Utils::isUnset($request->forceStatus)) {
            @$query['ForceStatus'] = $request->forceStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ScaleInApplicationResponse::fromMap($this->doROARequest('ScaleInApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_scale_in', 'json', $req, $runtime));
    }

    /**
     * @param ScaleK8sApplicationRequest $request
     *
     * @return ScaleK8sApplicationResponse
     */
    public function scaleK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScaleK8sApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ScaleK8sApplicationResponse
     */
    public function scaleK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->replicas)) {
            @$query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ScaleK8sApplicationResponse::fromMap($this->doROARequest('ScaleK8sApplication', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/k8s/acs/k8s_apps', 'json', $req, $runtime));
    }

    /**
     * @param ScaleOutApplicationRequest $request
     *
     * @return ScaleOutApplicationResponse
     */
    public function scaleOutApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleOutApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScaleOutApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ScaleOutApplicationResponse
     */
    public function scaleOutApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ecuInfo)) {
            @$query['EcuInfo'] = $request->ecuInfo;
        }
        if (!Utils::isUnset($request->deployGroup)) {
            @$query['DeployGroup'] = $request->deployGroup;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ScaleOutApplicationResponse::fromMap($this->doROARequest('ScaleOutApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_scale_out', 'json', $req, $runtime));
    }

    /**
     * @param ScaleoutApplicationWithNewInstancesRequest $request
     *
     * @return ScaleoutApplicationWithNewInstancesResponse
     */
    public function scaleoutApplicationWithNewInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleoutApplicationWithNewInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScaleoutApplicationWithNewInstancesRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ScaleoutApplicationWithNewInstancesResponse
     */
    public function scaleoutApplicationWithNewInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->scalingNum)) {
            @$query['ScalingNum'] = $request->scalingNum;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->scalingPolicy)) {
            @$query['ScalingPolicy'] = $request->scalingPolicy;
        }
        if (!Utils::isUnset($request->templateInstanceId)) {
            @$query['TemplateInstanceId'] = $request->templateInstanceId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceChargePeriodUnit)) {
            @$query['InstanceChargePeriodUnit'] = $request->instanceChargePeriodUnit;
        }
        if (!Utils::isUnset($request->instanceChargePeriod)) {
            @$query['InstanceChargePeriod'] = $request->instanceChargePeriod;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            @$query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ScaleoutApplicationWithNewInstancesResponse::fromMap($this->doROARequest('ScaleoutApplicationWithNewInstances', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/scaling/scale_out', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            @$query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StartApplicationResponse::fromMap($this->doROARequest('StartApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_start', 'json', $req, $runtime));
    }

    /**
     * @param StartK8sApplicationRequest $request
     *
     * @return StartK8sApplicationResponse
     */
    public function startK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StartK8sApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartK8sApplicationResponse
     */
    public function startK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->replicas)) {
            @$query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StartK8sApplicationResponse::fromMap($this->doROARequest('StartK8sApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/start_k8s_app', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            @$query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopApplicationResponse::fromMap($this->doROARequest('StopApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_stop', 'json', $req, $runtime));
    }

    /**
     * @param StopK8sApplicationRequest $request
     *
     * @return StopK8sApplicationResponse
     */
    public function stopK8sApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopK8sApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StopK8sApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StopK8sApplicationResponse
     */
    public function stopK8sApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopK8sApplicationResponse::fromMap($this->doROARequest('StopK8sApplication', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/acs/stop_k8s_app', 'json', $req, $runtime));
    }

    /**
     * @param SwitchAdvancedMonitoringRequest $request
     *
     * @return SwitchAdvancedMonitoringResponse
     */
    public function switchAdvancedMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->switchAdvancedMonitoringWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SwitchAdvancedMonitoringRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SwitchAdvancedMonitoringResponse
     */
    public function switchAdvancedMonitoringWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->enableAdvancedMonitoring)) {
            @$query['EnableAdvancedMonitoring'] = $request->enableAdvancedMonitoring;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return SwitchAdvancedMonitoringResponse::fromMap($this->doROARequest('SwitchAdvancedMonitoring', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/monitor/advancedMonitorInfo', 'json', $req, $runtime));
    }

    /**
     * @param SynchronizeResourceRequest $request
     *
     * @return SynchronizeResourceResponse
     */
    public function synchronizeResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->synchronizeResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SynchronizeResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SynchronizeResourceResponse
     */
    public function synchronizeResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['ResourceIds'] = $request->resourceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return SynchronizeResourceResponse::fromMap($this->doROARequest('SynchronizeResource', '2017-08-01', 'HTTPS', 'GET', 'AK', '/pop/v5/resource/pop_sync_resource', 'json', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            @$query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TagResourcesResponse::fromMap($this->doROARequest('TagResources', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/tag/tags', 'json', $req, $runtime));
    }

    /**
     * @param TransformClusterMemberRequest $request
     *
     * @return TransformClusterMemberResponse
     */
    public function transformClusterMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transformClusterMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TransformClusterMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return TransformClusterMemberResponse
     */
    public function transformClusterMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            @$query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->targetClusterId)) {
            @$query['TargetClusterId'] = $request->targetClusterId;
        }
        if (!Utils::isUnset($request->password)) {
            @$query['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TransformClusterMemberResponse::fromMap($this->doROARequest('TransformClusterMember', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/resource/transform_cluster_member', 'json', $req, $runtime));
    }

    /**
     * @param UnbindK8sSlbRequest $request
     *
     * @return UnbindK8sSlbResponse
     */
    public function unbindK8sSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindK8sSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UnbindK8sSlbRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindK8sSlbResponse
     */
    public function unbindK8sSlbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->slbName)) {
            @$query['SlbName'] = $request->slbName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UnbindK8sSlbResponse::fromMap($this->doROARequest('UnbindK8sSlb', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/k8s/acs/k8s_slb_binding', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->slbId)) {
            @$query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UnbindSlbResponse::fromMap($this->doROARequest('UnbindSlb', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/app/unbind_slb_json', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->resourceRegionId)) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            @$query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            @$query['TagKeys'] = $request->tagKeys;
        }
        if (!Utils::isUnset($request->deleteAll)) {
            @$query['DeleteAll'] = $request->deleteAll;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UntagResourcesResponse::fromMap($this->doROARequest('UntagResources', '2017-08-01', 'HTTPS', 'DELETE', 'AK', '/pop/v5/tag/tags', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAccountInfoRequest $request
     *
     * @return UpdateAccountInfoResponse
     */
    public function updateAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAccountInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAccountInfoRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAccountInfoResponse
     */
    public function updateAccountInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->telephone)) {
            @$query['Telephone'] = $request->telephone;
        }
        if (!Utils::isUnset($request->email)) {
            @$query['Email'] = $request->email;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateAccountInfoResponse::fromMap($this->doROARequest('UpdateAccountInfo', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/edit_account_info', 'json', $req, $runtime));
    }

    /**
     * @param UpdateApplicationBaseInfoRequest $request
     *
     * @return UpdateApplicationBaseInfoResponse
     */
    public function updateApplicationBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationBaseInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateApplicationBaseInfoRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateApplicationBaseInfoResponse
     */
    public function updateApplicationBaseInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            @$query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->desc)) {
            @$query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->owner)) {
            @$query['Owner'] = $request->owner;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateApplicationBaseInfoResponse::fromMap($this->doROARequest('UpdateApplicationBaseInfo', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/update_app_info', 'json', $req, $runtime));
    }

    /**
     * @param UpdateContainerRequest $request
     *
     * @return UpdateContainerResponse
     */
    public function updateContainer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateContainerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateContainerResponse
     */
    public function updateContainerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            @$query['BuildPackId'] = $request->buildPackId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateContainerResponse::fromMap($this->doROARequest('UpdateContainer', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/changeorder/co_update_container', 'json', $req, $runtime));
    }

    /**
     * @param UpdateContainerConfigurationRequest $request
     *
     * @return UpdateContainerConfigurationResponse
     */
    public function updateContainerConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateContainerConfigurationRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateContainerConfigurationResponse
     */
    public function updateContainerConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->contextPath)) {
            @$query['ContextPath'] = $request->contextPath;
        }
        if (!Utils::isUnset($request->httpPort)) {
            @$query['HttpPort'] = $request->httpPort;
        }
        if (!Utils::isUnset($request->maxThreads)) {
            @$query['MaxThreads'] = $request->maxThreads;
        }
        if (!Utils::isUnset($request->URIEncoding)) {
            @$query['URIEncoding'] = $request->URIEncoding;
        }
        if (!Utils::isUnset($request->useBodyEncoding)) {
            @$query['UseBodyEncoding'] = $request->useBodyEncoding;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateContainerConfigurationResponse::fromMap($this->doROARequest('UpdateContainerConfiguration', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/container_config', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDegradeControlRequest $request
     *
     * @return UpdateDegradeControlResponse
     */
    public function updateDegradeControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDegradeControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateDegradeControlRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDegradeControlResponse
     */
    public function updateDegradeControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->duration)) {
            @$query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->methodName)) {
            @$query['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->rtThreshold)) {
            @$query['RtThreshold'] = $request->rtThreshold;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->urlVar)) {
            @$query['UrlVar'] = $request->urlVar;
        }
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateDegradeControlResponse::fromMap($this->doROARequest('UpdateDegradeControl', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/degradeControl', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlowControlRequest $request
     *
     * @return UpdateFlowControlResponse
     */
    public function updateFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateFlowControlRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateFlowControlResponse
     */
    public function updateFlowControlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            @$query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->consumerAppId)) {
            @$query['ConsumerAppId'] = $request->consumerAppId;
        }
        if (!Utils::isUnset($request->granularity)) {
            @$query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->methodName)) {
            @$query['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->strategy)) {
            @$query['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->threshold)) {
            @$query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->urlVar)) {
            @$query['UrlVar'] = $request->urlVar;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateFlowControlResponse::fromMap($this->doROARequest('UpdateFlowControl', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/flowControl', 'json', $req, $runtime));
    }

    /**
     * @param UpdateHealthCheckUrlRequest $request
     *
     * @return UpdateHealthCheckUrlResponse
     */
    public function updateHealthCheckUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHealthCheckUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateHealthCheckUrlRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateHealthCheckUrlResponse
     */
    public function updateHealthCheckUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->hcURL)) {
            @$query['hcURL'] = $request->hcURL;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateHealthCheckUrlResponse::fromMap($this->doROARequest('UpdateHealthCheckUrl', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/modify_hc_url', 'json', $req, $runtime));
    }

    /**
     * @param UpdateHookConfigurationRequest $request
     *
     * @return UpdateHookConfigurationResponse
     */
    public function updateHookConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHookConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateHookConfigurationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateHookConfigurationResponse
     */
    public function updateHookConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->hooks)) {
            @$query['Hooks'] = $request->hooks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateHookConfigurationResponse::fromMap($this->doROARequest('UpdateHookConfiguration', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/app/config_app_hook_json', 'json', $req, $runtime));
    }

    /**
     * @param UpdateJvmConfigurationRequest $request
     *
     * @return UpdateJvmConfigurationResponse
     */
    public function updateJvmConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJvmConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateJvmConfigurationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateJvmConfigurationResponse
     */
    public function updateJvmConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->options)) {
            @$query['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->minHeapSize)) {
            @$query['MinHeapSize'] = $request->minHeapSize;
        }
        if (!Utils::isUnset($request->maxPermSize)) {
            @$query['MaxPermSize'] = $request->maxPermSize;
        }
        if (!Utils::isUnset($request->maxHeapSize)) {
            @$query['MaxHeapSize'] = $request->maxHeapSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateJvmConfigurationResponse::fromMap($this->doROARequest('UpdateJvmConfiguration', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/app/app_jvm_config', 'json', $req, $runtime));
    }

    /**
     * @param UpdateK8sApplicationBaseInfoRequest $request
     *
     * @return UpdateK8sApplicationBaseInfoResponse
     */
    public function updateK8sApplicationBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sApplicationBaseInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateK8sApplicationBaseInfoRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateK8sApplicationBaseInfoResponse
     */
    public function updateK8sApplicationBaseInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            @$query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->owner)) {
            @$query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->email)) {
            @$query['Email'] = $request->email;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateK8sApplicationBaseInfoResponse::fromMap($this->doROARequest('UpdateK8sApplicationBaseInfo', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/oam/update_app_basic_info', 'json', $req, $runtime));
    }

    /**
     * @param UpdateK8sApplicationConfigRequest $request
     *
     * @return UpdateK8sApplicationConfigResponse
     */
    public function updateK8sApplicationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sApplicationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateK8sApplicationConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateK8sApplicationConfigResponse
     */
    public function updateK8sApplicationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->cpuLimit)) {
            @$query['CpuLimit'] = $request->cpuLimit;
        }
        if (!Utils::isUnset($request->memoryLimit)) {
            @$query['MemoryLimit'] = $request->memoryLimit;
        }
        if (!Utils::isUnset($request->mcpuLimit)) {
            @$query['McpuLimit'] = $request->mcpuLimit;
        }
        if (!Utils::isUnset($request->cpuRequest)) {
            @$query['CpuRequest'] = $request->cpuRequest;
        }
        if (!Utils::isUnset($request->mcpuRequest)) {
            @$query['McpuRequest'] = $request->mcpuRequest;
        }
        if (!Utils::isUnset($request->memoryRequest)) {
            @$query['MemoryRequest'] = $request->memoryRequest;
        }
        if (!Utils::isUnset($request->timeout)) {
            @$query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateK8sApplicationConfigResponse::fromMap($this->doROARequest('UpdateK8sApplicationConfig', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/k8s/acs/k8s_app_configuration', 'json', $req, $runtime));
    }

    /**
     * @param UpdateK8sIngressRuleRequest $request
     *
     * @return UpdateK8sIngressRuleResponse
     */
    public function updateK8sIngressRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sIngressRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateK8sIngressRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateK8sIngressRuleResponse
     */
    public function updateK8sIngressRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$query['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->rules)) {
            @$query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateK8sIngressRuleResponse::fromMap($this->doROARequest('UpdateK8sIngressRule', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/k8s/acs/k8s_ingress', 'json', $req, $runtime));
    }

    /**
     * @param UpdateK8sResourceRequest $request
     *
     * @return UpdateK8sResourceResponse
     */
    public function updateK8sResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateK8sResourceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateK8sResourceResponse
     */
    public function updateK8sResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            @$body['Namespace_'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resourceContent)) {
            @$body['ResourceContent'] = $request->resourceContent;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateK8sResourceResponse::fromMap($this->doROARequestWithForm('UpdateK8sResource', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/oam/update_k8s_resource_config', 'json', $req, $runtime));
    }

    /**
     * @param UpdateK8sServiceRequest $request
     *
     * @return UpdateK8sServiceResponse
     */
    public function updateK8sService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateK8sServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateK8sServiceResponse
     */
    public function updateK8sServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->servicePorts)) {
            @$query['ServicePorts'] = $request->servicePorts;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateK8sServiceResponse::fromMap($this->doROARequest('UpdateK8sService', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/k8s/acs/k8s_service', 'json', $req, $runtime));
    }

    /**
     * @param UpdateK8sSlbRequest $request
     *
     * @return UpdateK8sSlbResponse
     */
    public function updateK8sSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateK8sSlbRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateK8sSlbResponse
     */
    public function updateK8sSlbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->slbProtocol)) {
            @$query['SlbProtocol'] = $request->slbProtocol;
        }
        if (!Utils::isUnset($request->targetPort)) {
            @$query['TargetPort'] = $request->targetPort;
        }
        if (!Utils::isUnset($request->port)) {
            @$query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->servicePortInfos)) {
            @$query['ServicePortInfos'] = $request->servicePortInfos;
        }
        if (!Utils::isUnset($request->specification)) {
            @$query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->scheduler)) {
            @$query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->slbName)) {
            @$query['SlbName'] = $request->slbName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateK8sSlbResponse::fromMap($this->doROARequest('UpdateK8sSlb', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/k8s/acs/k8s_slb_binding', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMockRuleRequest $request
     *
     * @return UpdateMockRuleResponse
     */
    public function updateMockRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMockRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateMockRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateMockRuleResponse
     */
    public function updateMockRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->extraJson)) {
            @$query['ExtraJson'] = $request->extraJson;
        }
        if (!Utils::isUnset($request->scMockItemJson)) {
            @$query['ScMockItemJson'] = $request->scMockItemJson;
        }
        if (!Utils::isUnset($request->dubboMockItemJson)) {
            @$query['DubboMockItemJson'] = $request->dubboMockItemJson;
        }
        if (!Utils::isUnset($request->id)) {
            @$query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateMockRuleResponse::fromMap($this->doROARequest('UpdateMockRule', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/sp/api/mock/updateMockRule', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            @$query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->actionData)) {
            @$query['ActionData'] = $request->actionData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateRoleResponse::fromMap($this->doROARequest('UpdateRole', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/account/edit_role', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSlsLogStoreRequest $request
     *
     * @return UpdateSlsLogStoreResponse
     */
    public function updateSlsLogStore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSlsLogStoreWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateSlsLogStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSlsLogStoreResponse
     */
    public function updateSlsLogStoreWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            @$body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->configs)) {
            @$body['Configs'] = $request->configs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateSlsLogStoreResponse::fromMap($this->doROARequestWithForm('UpdateSlsLogStore', '2017-08-01', 'HTTPS', 'POST', 'AK', '/pop/v5/k8s/sls/update_sls_log_store', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSwimmingLaneRequest $request
     *
     * @return UpdateSwimmingLaneResponse
     */
    public function updateSwimmingLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSwimmingLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateSwimmingLaneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSwimmingLaneResponse
     */
    public function updateSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->laneId)) {
            @$query['LaneId'] = $request->laneId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->enableRules)) {
            @$query['EnableRules'] = $request->enableRules;
        }
        if (!Utils::isUnset($request->appInfos)) {
            @$query['AppInfos'] = $request->appInfos;
        }
        if (!Utils::isUnset($request->entryRules)) {
            @$query['EntryRules'] = $request->entryRules;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateSwimmingLaneResponse::fromMap($this->doROARequest('UpdateSwimmingLane', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/trafficmgnt/swimming_lanes', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSwimmingLaneGroupRequest $request
     *
     * @return UpdateSwimmingLaneGroupResponse
     */
    public function updateSwimmingLaneGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSwimmingLaneGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateSwimmingLaneGroupRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSwimmingLaneGroupResponse
     */
    public function updateSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->entryApp)) {
            @$query['EntryApp'] = $request->entryApp;
        }
        if (!Utils::isUnset($request->appIds)) {
            @$query['AppIds'] = $request->appIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateSwimmingLaneGroupResponse::fromMap($this->doROARequest('UpdateSwimmingLaneGroup', '2017-08-01', 'HTTPS', 'PUT', 'AK', '/pop/v5/trafficmgnt/swimming_lane_groups', 'json', $req, $runtime));
    }
}
