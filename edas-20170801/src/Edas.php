<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortAndRollbackChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortAndRollbackChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AbortChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddLogPathRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\AddLogPathResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateConfigTemplateRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateConfigTemplateResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateIDCImportCommandRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateIDCImportCommandResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sConfigMapRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sConfigMapResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sIngressRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sIngressRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sSecretRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sSecretResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sServiceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateK8sServiceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterMemberRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterMemberResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteConfigTemplateRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteConfigTemplateResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteDeployGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sConfigMapRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sConfigMapResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sIngressRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sIngressRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sSecretRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sSecretResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sServiceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteK8sServiceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteLogPathRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteLogPathResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteSwimmingLaneResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DeployK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeAppInstanceListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeAppInstanceListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAppDeploymentRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAppDeploymentResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetContainerConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetContainerConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJavaStartUpConfigRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJavaStartUpConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJvmConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetJvmConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceMethodPageRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceMethodPageResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetWebContainerConfigRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetWebContainerConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ImportK8sClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ImportK8sClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterMemberRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterMemberResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigTemplatesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigTemplatesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConvertableEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConvertableEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sNamespacesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sNamespacesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryEccInfoRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryEccInfoResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateRegionListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateRegionListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ResetApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ResetApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartK8sApplicationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RestartK8sApplicationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\RetryChangeOrderTaskRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RetryChangeOrderTaskResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\StartK8sAppPrecheckRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\StartK8sAppPrecheckResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateConfigTemplateRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateConfigTemplateResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sConfigMapRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sConfigMapResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sIngressRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sIngressRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sResourceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sResourceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sSecretRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sSecretResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sServiceRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sServiceResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sSlbRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateLocalitySettingRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateLocalitySettingResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSlsLogStoreRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSlsLogStoreResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneGroupRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneGroupResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Edas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-south-1' => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-southeast-3' => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-southeast-5' => 'edas.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'edas.aliyuncs.com',
            'cn-beijing-finance-pop' => 'edas.aliyuncs.com',
            'cn-beijing-gov-1' => 'edas.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'edas.aliyuncs.com',
            'cn-chengdu' => 'edas.aliyuncs.com',
            'cn-edge-1' => 'edas.aliyuncs.com',
            'cn-fujian' => 'edas.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'edas.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'edas.aliyuncs.com',
            'cn-hangzhou-finance' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'edas.aliyuncs.com',
            'cn-hangzhou-test-306' => 'edas.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'edas.aliyuncs.com',
            'cn-huhehaote' => 'edas.aliyuncs.com',
            'cn-qingdao-nebula' => 'edas.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'edas.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'edas.aliyuncs.com',
            'cn-shanghai-finance-1' => 'edas.aliyuncs.com',
            'cn-shanghai-inner' => 'edas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'edas.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'edas.aliyuncs.com',
            'cn-shenzhen-inner' => 'edas.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'edas.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'edas.aliyuncs.com',
            'cn-wuhan' => 'edas.aliyuncs.com',
            'cn-yushanfang' => 'edas.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'edas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'edas.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'edas.aliyuncs.com',
            'eu-west-1' => 'edas.ap-northeast-1.aliyuncs.com',
            'eu-west-1-oxs' => 'edas.ap-northeast-1.aliyuncs.com',
            'me-east-1' => 'edas.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop' => 'edas.ap-northeast-1.aliyuncs.com',
            'us-west-1' => 'edas.ap-northeast-1.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Terminates a change process and rolls back the application. This operation is applicable to applications that are deployed in Container Service for Kubernetes (ACK) clusters.
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/change_order_abort_and_rollback',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AbortAndRollbackChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a change process and rolls back the application. This operation is applicable to applications that are deployed in Container Service for Kubernetes (ACK) clusters.
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
     * Terminates a change process.
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortChangeOrder',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/change_order_abort',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AbortChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a change process.
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
     * Adds a log directory to an application. This operation is applicable to applications that are deployed in Alibaba Cloud Elastic Compute Service (ECS) clusters and hybrid cloud ECS clusters.
     *
     * @param request - AddLogPathRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddLogPathResponse
     *
     * @param AddLogPathRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddLogPathResponse
     */
    public function addLogPathWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddLogPath',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/log/popListLogDirs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddLogPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a log directory to an application. This operation is applicable to applications that are deployed in Alibaba Cloud Elastic Compute Service (ECS) clusters and hybrid cloud ECS clusters.
     *
     * @param request - AddLogPathRequest
     *
     * @returns AddLogPathResponse
     *
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
     * Grants a Resource Access Management (RAM) user the permissions on a specified application.
     *
     * @param request - AuthorizeApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeApplicationResponse
     *
     * @param AuthorizeApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AuthorizeApplicationResponse
     */
    public function authorizeApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/authorize_app',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuthorizeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants a Resource Access Management (RAM) user the permissions on a specified application.
     *
     * @param request - AuthorizeApplicationRequest
     *
     * @returns AuthorizeApplicationResponse
     *
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
     * Grants a Resource Access Management (RAM) user the permissions on a resource group.
     *
     * @param request - AuthorizeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResourceGroupResponse
     *
     * @param AuthorizeResourceGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeResourceGroupResponse
     */
    public function authorizeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeResourceGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/authorize_res_group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuthorizeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants a Resource Access Management (RAM) user the permissions on a resource group.
     *
     * @param request - AuthorizeResourceGroupRequest
     *
     * @returns AuthorizeResourceGroupResponse
     *
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
     * Assigns one or more roles to a RAM user.
     *
     * @param request - AuthorizeRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeRoleResponse
     *
     * @param AuthorizeRoleRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AuthorizeRoleResponse
     */
    public function authorizeRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleIds) {
            @$query['RoleIds'] = $request->roleIds;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeRole',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/authorize_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuthorizeRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns one or more roles to a RAM user.
     *
     * @param request - AuthorizeRoleRequest
     *
     * @returns AuthorizeRoleResponse
     *
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
     * Binds a Server Load Balancer (SLB) instance to an application that is deployed in an Elastic Compute Service (ECS) cluster.
     *
     * @param request - BindEcsSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindEcsSlbResponse
     *
     * @param BindEcsSlbRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return BindEcsSlbResponse
     */
    public function bindEcsSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->deployGroupId) {
            @$query['DeployGroupId'] = $request->deployGroupId;
        }

        if (null !== $request->listenerHealthCheckUrl) {
            @$query['ListenerHealthCheckUrl'] = $request->listenerHealthCheckUrl;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        if (null !== $request->VForwardingUrlRule) {
            @$query['VForwardingUrlRule'] = $request->VForwardingUrlRule;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->VServerGroupName) {
            @$query['VServerGroupName'] = $request->VServerGroupName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindEcsSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/slb/bind_slb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindEcsSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a Server Load Balancer (SLB) instance to an application that is deployed in an Elastic Compute Service (ECS) cluster.
     *
     * @param request - BindEcsSlbRequest
     *
     * @returns BindEcsSlbResponse
     *
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
     * Binds a Server Load Balancer (SLB) instance to an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - BindK8sSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindK8sSlbResponse
     *
     * @param BindK8sSlbRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return BindK8sSlbResponse
     */
    public function bindK8sSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->servicePortInfos) {
            @$query['ServicePortInfos'] = $request->servicePortInfos;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        if (null !== $request->slbProtocol) {
            @$query['SlbProtocol'] = $request->slbProtocol;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->targetPort) {
            @$query['TargetPort'] = $request->targetPort;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindK8sSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_slb_binding',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindK8sSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a Server Load Balancer (SLB) instance to an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - BindK8sSlbRequest
     *
     * @returns BindK8sSlbResponse
     *
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
     * Binds a Server Load Balancer (SLB) instance to an application in Enterprise Distributed Application Service (EDAS).
     *
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

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        if (null !== $request->slbIp) {
            @$query['SlbIp'] = $request->slbIp;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/app/bind_slb_json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a Server Load Balancer (SLB) instance to an application in Enterprise Distributed Application Service (EDAS).
     *
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
     * Changes the application instance group for an Elastic Compute Service (ECS) instance in an ECS cluster.
     *
     * @param request - ChangeDeployGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDeployGroupResponse
     *
     * @param ChangeDeployGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeDeployGroupResponse
     */
    public function changeDeployGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->eccInfo) {
            @$query['EccInfo'] = $request->eccInfo;
        }

        if (null !== $request->forceStatus) {
            @$query['ForceStatus'] = $request->forceStatus;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeDeployGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_change_group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the application instance group for an Elastic Compute Service (ECS) instance in an ECS cluster.
     *
     * @param request - ChangeDeployGroupRequest
     *
     * @returns ChangeDeployGroupResponse
     *
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
     * Manually confirms the release of the next batch.
     *
     * @param request - ContinuePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinuePipelineResponse
     *
     * @param ContinuePipelineRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuePipelineResponse
     */
    public function continuePipelineWithOptions($request, $headers, $runtime)
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
            'action' => 'ContinuePipeline',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/pipeline_batch_confirm',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ContinuePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually confirms the release of the next batch.
     *
     * @param request - ContinuePipelineRequest
     *
     * @returns ContinuePipelineResponse
     *
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
     * Converts a Deployment into an application.
     *
     * @param request - ConvertK8sResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertK8sResourceResponse
     *
     * @param ConvertK8sResourceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ConvertK8sResourceResponse
     */
    public function convertK8sResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertK8sResource',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/k8s_resource_convert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ConvertK8sResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts a Deployment into an application.
     *
     * @param request - ConvertK8sResourceRequest
     *
     * @returns ConvertK8sResourceResponse
     *
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
     * Creates an auto scaling policy for an application.
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

        if (null !== $request->scalingBehaviour) {
            @$query['ScalingBehaviour'] = $request->scalingBehaviour;
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

        if (null !== $request->scalingRuleTrigger) {
            @$query['ScalingRuleTrigger'] = $request->scalingRuleTrigger;
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/eam/scale/application_scaling_rule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an auto scaling policy for an application.
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
     * Creates a configuration template.
     *
     * @param request - CreateConfigTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigTemplateResponse
     *
     * @param CreateConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateConfigTemplateResponse
     */
    public function createConfigTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->format) {
            @$body['Format'] = $request->format;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConfigTemplate',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/config_template',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConfigTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a configuration template.
     *
     * @param request - CreateConfigTemplateRequest
     *
     * @returns CreateConfigTemplateResponse
     *
     * @param CreateConfigTemplateRequest $request
     *
     * @return CreateConfigTemplateResponse
     */
    public function createConfigTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * Generates a command that is used to import instances to a hybrid cloud Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * ## Description
     * You must call the CreateIDCImportCommand operation first to generate a command used to import hybrid cloud ECS instances to a hybrid cloud ECS cluster. Then, run this command on the instances to import the instances to the cluster.
     *
     * @param request - CreateIDCImportCommandRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIDCImportCommandResponse
     *
     * @param CreateIDCImportCommandRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIDCImportCommandResponse
     */
    public function createIDCImportCommandWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIDCImportCommand',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/create_idc_import_command',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIDCImportCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a command that is used to import instances to a hybrid cloud Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * ## Description
     * You must call the CreateIDCImportCommand operation first to generate a command used to import hybrid cloud ECS instances to a hybrid cloud ECS cluster. Then, run this command on the instances to import the instances to the cluster.
     *
     * @param request - CreateIDCImportCommandRequest
     *
     * @returns CreateIDCImportCommandResponse
     *
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
     * Creates a Kubernetes ConfigMap.
     *
     * @param request - CreateK8sConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateK8sConfigMapResponse
     *
     * @param CreateK8sConfigMapRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateK8sConfigMapResponse
     */
    public function createK8sConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateK8sConfigMap',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_config_map',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateK8sConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Kubernetes ConfigMap.
     *
     * @param request - CreateK8sConfigMapRequest
     *
     * @returns CreateK8sConfigMapResponse
     *
     * @param CreateK8sConfigMapRequest $request
     *
     * @return CreateK8sConfigMapResponse
     */
    public function createK8sConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createK8sConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an Ingress.
     *
     * @param request - CreateK8sIngressRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateK8sIngressRuleResponse
     *
     * @param CreateK8sIngressRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateK8sIngressRuleResponse
     */
    public function createK8sIngressRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ingressConf) {
            @$query['IngressConf'] = $request->ingressConf;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateK8sIngressRule',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_ingress',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateK8sIngressRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Ingress.
     *
     * @param request - CreateK8sIngressRuleRequest
     *
     * @returns CreateK8sIngressRuleResponse
     *
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
     * Creates a Kubernetes Secret.
     *
     * @param request - CreateK8sSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateK8sSecretResponse
     *
     * @param CreateK8sSecretRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateK8sSecretResponse
     */
    public function createK8sSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->base64Encoded) {
            @$body['Base64Encoded'] = $request->base64Encoded;
        }

        if (null !== $request->certId) {
            @$body['CertId'] = $request->certId;
        }

        if (null !== $request->certRegionId) {
            @$body['CertRegionId'] = $request->certRegionId;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateK8sSecret',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_secret',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateK8sSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Kubernetes Secret.
     *
     * @param request - CreateK8sSecretRequest
     *
     * @returns CreateK8sSecretResponse
     *
     * @param CreateK8sSecretRequest $request
     *
     * @return CreateK8sSecretResponse
     */
    public function createK8sSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createK8sSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an application service in a Kubernetes cluster.
     *
     * @param request - CreateK8sServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateK8sServiceResponse
     *
     * @param CreateK8sServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateK8sServiceResponse
     */
    public function createK8sServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->externalTrafficPolicy) {
            @$query['ExternalTrafficPolicy'] = $request->externalTrafficPolicy;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->servicePorts) {
            @$query['ServicePorts'] = $request->servicePorts;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateK8sService',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_service',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateK8sServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application service in a Kubernetes cluster.
     *
     * @param request - CreateK8sServiceRequest
     *
     * @returns CreateK8sServiceResponse
     *
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_delete_app',
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
     * Deletes an auto scaling policy for an application.
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/eam/scale/application_scaling_rule',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an auto scaling policy for an application.
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
     * Deletes an Elastic Compute Service (ECS) cluster or cancels the import of a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DeleteClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Elastic Compute Service (ECS) cluster or cancels the import of a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
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
     * Removes an Elastic Compute Service (ECS) instance from a cluster.
     *
     * @param request - DeleteClusterMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterMemberResponse
     *
     * @param DeleteClusterMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteClusterMemberResponse
     */
    public function deleteClusterMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterMemberId) {
            @$query['ClusterMemberId'] = $request->clusterMemberId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClusterMember',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster_member',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteClusterMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an Elastic Compute Service (ECS) instance from a cluster.
     *
     * @param request - DeleteClusterMemberRequest
     *
     * @returns DeleteClusterMemberResponse
     *
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
     * Deletes a configuration template.
     *
     * @param request - DeleteConfigTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigTemplateResponse
     *
     * @param DeleteConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteConfigTemplateResponse
     */
    public function deleteConfigTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigTemplate',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/config_template',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConfigTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a configuration template.
     *
     * @param request - DeleteConfigTemplateRequest
     *
     * @returns DeleteConfigTemplateResponse
     *
     * @param DeleteConfigTemplateRequest $request
     *
     * @return DeleteConfigTemplateResponse
     */
    public function deleteConfigTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an instance group for an application.
     *
     * @param request - DeleteDeployGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeployGroupResponse
     *
     * @param DeleteDeployGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDeployGroupResponse
     */
    public function deleteDeployGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDeployGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/deploy_group',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an instance group for an application.
     *
     * @param request - DeleteDeployGroupRequest
     *
     * @returns DeleteDeployGroupResponse
     *
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
     * Deletes an Elastic Compute Unit (ECU).
     *
     * @param request - DeleteEcuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEcuResponse
     *
     * @param DeleteEcuRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteEcuResponse
     */
    public function deleteEcuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecuId) {
            @$query['EcuId'] = $request->ecuId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEcu',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/delete_ecu',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEcuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Elastic Compute Unit (ECU).
     *
     * @param request - DeleteEcuRequest
     *
     * @returns DeleteEcuResponse
     *
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
     * Deletes an application from a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DeleteK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteK8sApplicationResponse
     *
     * @param DeleteK8sApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteK8sApplicationResponse
     */
    public function deleteK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_apps',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application from a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DeleteK8sApplicationRequest
     *
     * @returns DeleteK8sApplicationResponse
     *
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
     * Deletes a Kubernetes ConfigMap.
     *
     * @param request - DeleteK8sConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteK8sConfigMapResponse
     *
     * @param DeleteK8sConfigMapRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteK8sConfigMapResponse
     */
    public function deleteK8sConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteK8sConfigMap',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_config_map',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteK8sConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Kubernetes ConfigMap.
     *
     * @param request - DeleteK8sConfigMapRequest
     *
     * @returns DeleteK8sConfigMapResponse
     *
     * @param DeleteK8sConfigMapRequest $request
     *
     * @return DeleteK8sConfigMapResponse
     */
    public function deleteK8sConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteK8sConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an ingress.
     *
     * @param request - DeleteK8sIngressRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteK8sIngressRuleResponse
     *
     * @param DeleteK8sIngressRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteK8sIngressRuleResponse
     */
    public function deleteK8sIngressRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteK8sIngressRule',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_ingress',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteK8sIngressRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an ingress.
     *
     * @param request - DeleteK8sIngressRuleRequest
     *
     * @returns DeleteK8sIngressRuleResponse
     *
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
     * Deletes a Kubernetes Secret.
     *
     * @param request - DeleteK8sSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteK8sSecretResponse
     *
     * @param DeleteK8sSecretRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteK8sSecretResponse
     */
    public function deleteK8sSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteK8sSecret',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_secret',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteK8sSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Kubernetes Secret.
     *
     * @param request - DeleteK8sSecretRequest
     *
     * @returns DeleteK8sSecretResponse
     *
     * @param DeleteK8sSecretRequest $request
     *
     * @return DeleteK8sSecretResponse
     */
    public function deleteK8sSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteK8sSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an application service from a Kubernetes cluster.
     *
     * @param request - DeleteK8sServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteK8sServiceResponse
     *
     * @param DeleteK8sServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteK8sServiceResponse
     */
    public function deleteK8sServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteK8sService',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_service',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteK8sServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application service from a Kubernetes cluster.
     *
     * @param request - DeleteK8sServiceRequest
     *
     * @returns DeleteK8sServiceResponse
     *
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
     * Removes a log directory from an application. This operation is applicable to applications that are deployed in Alibaba Cloud Elastic Compute Service (ECS) clusters and hybrid cloud ECS clusters.
     *
     * @param request - DeleteLogPathRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogPathResponse
     *
     * @param DeleteLogPathRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteLogPathResponse
     */
    public function deleteLogPathWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLogPath',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/log/popListLogDirs',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLogPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a log directory from an application. This operation is applicable to applications that are deployed in Alibaba Cloud Elastic Compute Service (ECS) clusters and hybrid cloud ECS clusters.
     *
     * @param request - DeleteLogPathRequest
     *
     * @returns DeleteLogPathResponse
     *
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
     * Deletes a Resource Access Management (RAM) role.
     *
     * @param request - DeleteRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoleResponse
     *
     * @param DeleteRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRole',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/delete_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) role.
     *
     * @param request - DeleteRoleRequest
     *
     * @returns DeleteRoleResponse
     *
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
     * Deletes a service group.
     *
     * @param request - DeleteServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceGroupResponse
     *
     * @param DeleteServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/service/serviceGroups',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service group.
     *
     * @param request - DeleteServiceGroupRequest
     *
     * @returns DeleteServiceGroupResponse
     *
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
     * Deletes a lane.
     *
     * @param request - DeleteSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSwimmingLaneResponse
     *
     * @param DeleteSwimmingLaneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSwimmingLaneResponse
     */
    public function deleteSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSwimmingLane',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lanes',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a lane.
     *
     * @param request - DeleteSwimmingLaneRequest
     *
     * @returns DeleteSwimmingLaneResponse
     *
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
     * Deletes a specified custom namespace.
     *
     * @param request - DeleteUserDefineRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserDefineRegionResponse
     *
     * @param DeleteUserDefineRegionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserDefineRegionResponse
     */
    public function deleteUserDefineRegionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->regionTag) {
            @$query['RegionTag'] = $request->regionTag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserDefineRegion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/user_region_def',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUserDefineRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified custom namespace.
     *
     * @param request - DeleteUserDefineRegionRequest
     *
     * @returns DeleteUserDefineRegionResponse
     *
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
     * Deploys an application in an Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * > To deploy an application in a Container Service for Kubernetes (ACK) cluster that is imported into Enterprise Distributed Application Service (EDAS), call the DeployK8sApplication operation provided by EDAS. For more information, see [](~~149420~~)DeployK8sApplication.
     *
     * @param request - DeployApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployApplicationResponse
     *
     * @param DeployApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeployApplicationResponse
     */
    public function deployApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appEnv) {
            @$query['AppEnv'] = $request->appEnv;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->batch) {
            @$query['Batch'] = $request->batch;
        }

        if (null !== $request->batchWaitTime) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }

        if (null !== $request->buildPackId) {
            @$query['BuildPackId'] = $request->buildPackId;
        }

        if (null !== $request->componentIds) {
            @$query['ComponentIds'] = $request->componentIds;
        }

        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->gray) {
            @$query['Gray'] = $request->gray;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->packageVersion) {
            @$query['PackageVersion'] = $request->packageVersion;
        }

        if (null !== $request->releaseType) {
            @$query['ReleaseType'] = $request->releaseType;
        }

        if (null !== $request->trafficControlStrategy) {
            @$query['TrafficControlStrategy'] = $request->trafficControlStrategy;
        }

        if (null !== $request->warUrl) {
            @$query['WarUrl'] = $request->warUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an application in an Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * > To deploy an application in a Container Service for Kubernetes (ACK) cluster that is imported into Enterprise Distributed Application Service (EDAS), call the DeployK8sApplication operation provided by EDAS. For more information, see [](~~149420~~)DeployK8sApplication.
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
     * Deploys an application in a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster.
     *
     * @param request - DeployK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployK8sApplicationResponse
     *
     * @param DeployK8sApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeployK8sApplicationResponse
     */
    public function deployK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->args) {
            @$query['Args'] = $request->args;
        }

        if (null !== $request->batchTimeout) {
            @$query['BatchTimeout'] = $request->batchTimeout;
        }

        if (null !== $request->batchWaitTime) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }

        if (null !== $request->buildPackId) {
            @$query['BuildPackId'] = $request->buildPackId;
        }

        if (null !== $request->canaryRuleId) {
            @$query['CanaryRuleId'] = $request->canaryRuleId;
        }

        if (null !== $request->changeOrderDesc) {
            @$query['ChangeOrderDesc'] = $request->changeOrderDesc;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->configMountDescs) {
            @$query['ConfigMountDescs'] = $request->configMountDescs;
        }

        if (null !== $request->cpuLimit) {
            @$query['CpuLimit'] = $request->cpuLimit;
        }

        if (null !== $request->cpuRequest) {
            @$query['CpuRequest'] = $request->cpuRequest;
        }

        if (null !== $request->customAffinity) {
            @$query['CustomAffinity'] = $request->customAffinity;
        }

        if (null !== $request->customAgentVersion) {
            @$query['CustomAgentVersion'] = $request->customAgentVersion;
        }

        if (null !== $request->customTolerations) {
            @$query['CustomTolerations'] = $request->customTolerations;
        }

        if (null !== $request->deployAcrossNodes) {
            @$query['DeployAcrossNodes'] = $request->deployAcrossNodes;
        }

        if (null !== $request->deployAcrossZones) {
            @$query['DeployAcrossZones'] = $request->deployAcrossZones;
        }

        if (null !== $request->edasContainerVersion) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }

        if (null !== $request->emptyDirs) {
            @$query['EmptyDirs'] = $request->emptyDirs;
        }

        if (null !== $request->enableAhas) {
            @$query['EnableAhas'] = $request->enableAhas;
        }

        if (null !== $request->enableEmptyPushReject) {
            @$query['EnableEmptyPushReject'] = $request->enableEmptyPushReject;
        }

        if (null !== $request->enableLosslessRule) {
            @$query['EnableLosslessRule'] = $request->enableLosslessRule;
        }

        if (null !== $request->envFroms) {
            @$query['EnvFroms'] = $request->envFroms;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->imagePlatforms) {
            @$query['ImagePlatforms'] = $request->imagePlatforms;
        }

        if (null !== $request->imageTag) {
            @$query['ImageTag'] = $request->imageTag;
        }

        if (null !== $request->initContainers) {
            @$query['InitContainers'] = $request->initContainers;
        }

        if (null !== $request->JDK) {
            @$query['JDK'] = $request->JDK;
        }

        if (null !== $request->javaStartUpConfig) {
            @$query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->limitEphemeralStorage) {
            @$query['LimitEphemeralStorage'] = $request->limitEphemeralStorage;
        }

        if (null !== $request->liveness) {
            @$query['Liveness'] = $request->liveness;
        }

        if (null !== $request->localVolume) {
            @$query['LocalVolume'] = $request->localVolume;
        }

        if (null !== $request->losslessRuleAligned) {
            @$query['LosslessRuleAligned'] = $request->losslessRuleAligned;
        }

        if (null !== $request->losslessRuleDelayTime) {
            @$query['LosslessRuleDelayTime'] = $request->losslessRuleDelayTime;
        }

        if (null !== $request->losslessRuleFuncType) {
            @$query['LosslessRuleFuncType'] = $request->losslessRuleFuncType;
        }

        if (null !== $request->losslessRuleRelated) {
            @$query['LosslessRuleRelated'] = $request->losslessRuleRelated;
        }

        if (null !== $request->losslessRuleWarmupTime) {
            @$query['LosslessRuleWarmupTime'] = $request->losslessRuleWarmupTime;
        }

        if (null !== $request->mcpuLimit) {
            @$query['McpuLimit'] = $request->mcpuLimit;
        }

        if (null !== $request->mcpuRequest) {
            @$query['McpuRequest'] = $request->mcpuRequest;
        }

        if (null !== $request->memoryLimit) {
            @$query['MemoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->memoryRequest) {
            @$query['MemoryRequest'] = $request->memoryRequest;
        }

        if (null !== $request->mountDescs) {
            @$query['MountDescs'] = $request->mountDescs;
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

        if (null !== $request->packageVersionId) {
            @$query['PackageVersionId'] = $request->packageVersionId;
        }

        if (null !== $request->postStart) {
            @$query['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$query['PreStop'] = $request->preStop;
        }

        if (null !== $request->pvcMountDescs) {
            @$query['PvcMountDescs'] = $request->pvcMountDescs;
        }

        if (null !== $request->readiness) {
            @$query['Readiness'] = $request->readiness;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->requestsEphemeralStorage) {
            @$query['RequestsEphemeralStorage'] = $request->requestsEphemeralStorage;
        }

        if (null !== $request->runtimeClassName) {
            @$query['RuntimeClassName'] = $request->runtimeClassName;
        }

        if (null !== $request->sidecars) {
            @$query['Sidecars'] = $request->sidecars;
        }

        if (null !== $request->slsConfigs) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }

        if (null !== $request->startup) {
            @$query['Startup'] = $request->startup;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->terminateGracePeriod) {
            @$query['TerminateGracePeriod'] = $request->terminateGracePeriod;
        }

        if (null !== $request->trafficControlStrategy) {
            @$query['TrafficControlStrategy'] = $request->trafficControlStrategy;
        }

        if (null !== $request->updateStrategy) {
            @$query['UpdateStrategy'] = $request->updateStrategy;
        }

        if (null !== $request->uriEncoding) {
            @$query['UriEncoding'] = $request->uriEncoding;
        }

        if (null !== $request->useBodyEncoding) {
            @$query['UseBodyEncoding'] = $request->useBodyEncoding;
        }

        if (null !== $request->userBaseImageUrl) {
            @$query['UserBaseImageUrl'] = $request->userBaseImageUrl;
        }

        if (null !== $request->volumesStr) {
            @$query['VolumesStr'] = $request->volumesStr;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        if (null !== $request->webContainerConfig) {
            @$query['WebContainerConfig'] = $request->webContainerConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_apps',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an application in a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster.
     *
     * @param request - DeployK8sApplicationRequest
     *
     * @returns DeployK8sApplicationResponse
     *
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
     * Queries Kubernetes application instances.
     *
     * @param request - DescribeAppInstanceListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstanceListResponse
     *
     * @param DescribeAppInstanceListRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAppInstanceListResponse
     */
    public function describeAppInstanceListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->withNodeInfo) {
            @$query['WithNodeInfo'] = $request->withNodeInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppInstanceList',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/app_instance_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Kubernetes application instances.
     *
     * @param request - DescribeAppInstanceListRequest
     *
     * @returns DescribeAppInstanceListResponse
     *
     * @param DescribeAppInstanceListRequest $request
     *
     * @return DescribeAppInstanceListResponse
     */
    public function describeAppInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppInstanceListWithOptions($request, $headers, $runtime);
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/eam/scale/application_scaling_rules',
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
     * Disables an auto scaling policy for an application.
     *
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/eam/scale/disable_application_scaling_rule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an auto scaling policy for an application.
     *
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/eam/scale/enable_application_scaling_rule',
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
     * Queries the information about the Deployment of a Kubernetes application.
     *
     * @param request - GetAppDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppDeploymentResponse
     *
     * @param GetAppDeploymentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAppDeploymentResponse
     */
    public function getAppDeploymentWithOptions($request, $headers, $runtime)
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
            'action' => 'GetAppDeployment',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/app_deployment',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAppDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the Deployment of a Kubernetes application.
     *
     * @param request - GetAppDeploymentRequest
     *
     * @returns GetAppDeploymentResponse
     *
     * @param GetAppDeploymentRequest $request
     *
     * @return GetAppDeploymentResponse
     */
    public function getAppDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppDeploymentWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details about a specified application in an Elastic Compute Service (ECS) cluster.
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/app_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a specified application in an Elastic Compute Service (ECS) cluster.
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
     * Queries the details about a change process.
     *
     * @param request - GetChangeOrderInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChangeOrderInfoResponse
     *
     * @param GetChangeOrderInfoRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetChangeOrderInfoResponse
     */
    public function getChangeOrderInfoWithOptions($request, $headers, $runtime)
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
            'action' => 'GetChangeOrderInfo',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/change_order_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChangeOrderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a change process.
     *
     * @param request - GetChangeOrderInfoRequest
     *
     * @returns GetChangeOrderInfoResponse
     *
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
     * Queries a specific cluster.
     *
     * @param request - GetClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a specific cluster.
     *
     * @param request - GetClusterRequest
     *
     * @returns GetClusterResponse
     *
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
     * Queries the Tomcat configuration of an application or an instance group in which an application is deployed.
     *
     * @param request - GetContainerConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContainerConfigurationResponse
     *
     * @param GetContainerConfigurationRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetContainerConfigurationResponse
     */
    public function getContainerConfigurationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContainerConfiguration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/container_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetContainerConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Tomcat configuration of an application or an instance group in which an application is deployed.
     *
     * @param request - GetContainerConfigurationRequest
     *
     * @returns GetContainerConfigurationResponse
     *
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
     * Queries the configuration of Java startup parameters for an application.
     *
     * @param request - GetJavaStartUpConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJavaStartUpConfigResponse
     *
     * @param GetJavaStartUpConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetJavaStartUpConfigResponse
     */
    public function getJavaStartUpConfigWithOptions($request, $headers, $runtime)
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
            'action' => 'GetJavaStartUpConfig',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/java_start_up_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJavaStartUpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of Java startup parameters for an application.
     *
     * @param request - GetJavaStartUpConfigRequest
     *
     * @returns GetJavaStartUpConfigResponse
     *
     * @param GetJavaStartUpConfigRequest $request
     *
     * @return GetJavaStartUpConfigResponse
     */
    public function getJavaStartUpConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJavaStartUpConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the Java Virtual Machine (JVM) configuration of an application or an instance group in which an application is deployed.
     *
     * @param request - GetJvmConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJvmConfigurationResponse
     *
     * @param GetJvmConfigurationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetJvmConfigurationResponse
     */
    public function getJvmConfigurationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJvmConfiguration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/app_jvm_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJvmConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Java Virtual Machine (JVM) configuration of an application or an instance group in which an application is deployed.
     *
     * @param request - GetJvmConfigurationRequest
     *
     * @returns GetJvmConfigurationResponse
     *
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
     * Queries the precheck result of a Kubernetes application.
     *
     * @param request - GetK8sAppPrecheckResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetK8sAppPrecheckResultResponse
     *
     * @param GetK8sAppPrecheckResultRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetK8sAppPrecheckResultResponse
     */
    public function getK8sAppPrecheckResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetK8sAppPrecheckResult',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/app_precheck',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetK8sAppPrecheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the precheck result of a Kubernetes application.
     *
     * @param request - GetK8sAppPrecheckResultRequest
     *
     * @returns GetK8sAppPrecheckResultResponse
     *
     * @param GetK8sAppPrecheckResultRequest $request
     *
     * @return GetK8sAppPrecheckResultResponse
     */
    public function getK8sAppPrecheckResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getK8sAppPrecheckResultWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about applications deployed in a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster.
     *
     * @param request - GetK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetK8sApplicationResponse
     *
     * @param GetK8sApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetK8sApplicationResponse
     */
    public function getK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_application',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about applications deployed in a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster.
     *
     * @param request - GetK8sApplicationRequest
     *
     * @returns GetK8sApplicationResponse
     *
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
     * Queries Container Service for Kubernetes (ACK) clusters or Serverless Kubernetes clusters in a specified region.
     *
     * @param request - GetK8sClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetK8sClusterResponse
     *
     * @param GetK8sClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetK8sClusterResponse
     */
    public function getK8sClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionTag) {
            @$query['RegionTag'] = $request->regionTag;
        }

        if (null !== $request->subClusterType) {
            @$query['SubClusterType'] = $request->subClusterType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetK8sCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s_clusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetK8sClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Container Service for Kubernetes (ACK) clusters or Serverless Kubernetes clusters in a specified region.
     *
     * @param request - GetK8sClusterRequest
     *
     * @returns GetK8sClusterResponse
     *
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
     * Queries application services that are deployed in a Kubernetes cluster.
     *
     * @param request - GetK8sServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetK8sServicesResponse
     *
     * @param GetK8sServicesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetK8sServicesResponse
     */
    public function getK8sServicesWithOptions($request, $headers, $runtime)
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
            'action' => 'GetK8sServices',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_service',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetK8sServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries application services that are deployed in a Kubernetes cluster.
     *
     * @param request - GetK8sServicesRequest
     *
     * @returns GetK8sServicesResponse
     *
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
     * Queries the Security Token Service (STS) tokens that are required for temporary storage.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPackageStorageCredentialResponse
     *
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
        $params = new Params([
            'action' => 'GetPackageStorageCredential',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/package_storage_credential',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPackageStorageCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Security Token Service (STS) tokens that are required for temporary storage.
     *
     * @returns GetPackageStorageCredentialResponse
     *
     * @return GetPackageStorageCredentialResponse
     */
    public function getPackageStorageCredential()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPackageStorageCredentialWithOptions($headers, $runtime);
    }

    /**
     * Queries scaling rules.
     *
     * @param request - GetScalingRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScalingRulesResponse
     *
     * @param GetScalingRulesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetScalingRulesResponse
     */
    public function getScalingRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScalingRules',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/scalingRules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scaling rules.
     *
     * @param request - GetScalingRulesRequest
     *
     * @returns GetScalingRulesResponse
     *
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
     * Queries the security token information of a namespace. You can call this operation to query information, such as the AccessKey ID, AccessKey secret, tenant ID, and the domain name of Address Server, for the specified namespace.
     *
     * @param request - GetSecureTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecureTokenResponse
     *
     * @param GetSecureTokenRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetSecureTokenResponse
     */
    public function getSecureTokenWithOptions($request, $headers, $runtime)
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
            'action' => 'GetSecureToken',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/secure_token',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSecureTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the security token information of a namespace. You can call this operation to query information, such as the AccessKey ID, AccessKey secret, tenant ID, and the domain name of Address Server, for the specified namespace.
     *
     * @param request - GetSecureTokenRequest
     *
     * @returns GetSecureTokenResponse
     *
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
     * Queries service consumers.
     *
     * @param request - GetServiceConsumersPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceConsumersPageResponse
     *
     * @param GetServiceConsumersPageRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetServiceConsumersPageResponse
     */
    public function getServiceConsumersPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['appId'] = $request->appId;
        }

        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->origin) {
            @$query['origin'] = $request->origin;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->registryType) {
            @$query['registryType'] = $request->registryType;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceConsumersPage',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/sp/api/mseForOam/getServiceConsumersPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceConsumersPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service consumers.
     *
     * @param request - GetServiceConsumersPageRequest
     *
     * @returns GetServiceConsumersPageResponse
     *
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
     * Queries service details.
     *
     * @param request - GetServiceDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceDetailResponse
     *
     * @param GetServiceDetailRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetServiceDetailResponse
     */
    public function getServiceDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['appId'] = $request->appId;
        }

        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->origin) {
            @$query['origin'] = $request->origin;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->registryType) {
            @$query['registryType'] = $request->registryType;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceDetail',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/sp/api/mseForOam/getServiceDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service details.
     *
     * @param request - GetServiceDetailRequest
     *
     * @returns GetServiceDetailResponse
     *
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
     * Queries services.
     *
     * @param request - GetServiceListPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceListPageResponse
     *
     * @param GetServiceListPageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceListPageResponse
     */
    public function getServiceListPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->origin) {
            @$query['origin'] = $request->origin;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->searchType) {
            @$query['searchType'] = $request->searchType;
        }

        if (null !== $request->searchValue) {
            @$query['searchValue'] = $request->searchValue;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->side) {
            @$query['side'] = $request->side;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceListPage',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/sp/api/mseForOam/getServiceListPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries services.
     *
     * @param request - GetServiceListPageRequest
     *
     * @returns GetServiceListPageResponse
     *
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
     * Queries service methods.
     *
     * @param request - GetServiceMethodPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceMethodPageResponse
     *
     * @param GetServiceMethodPageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceMethodPageResponse
     */
    public function getServiceMethodPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['appId'] = $request->appId;
        }

        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->methodController) {
            @$query['methodController'] = $request->methodController;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->origin) {
            @$query['origin'] = $request->origin;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['path'] = $request->path;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->registryType) {
            @$query['registryType'] = $request->registryType;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceMethodPage',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/sp/api/mseForOam/getServiceMethodPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceMethodPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service methods.
     *
     * @param request - GetServiceMethodPageRequest
     *
     * @returns GetServiceMethodPageResponse
     *
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
     * Queries service providers.
     *
     * @param request - GetServiceProvidersPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceProvidersPageResponse
     *
     * @param GetServiceProvidersPageRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetServiceProvidersPageResponse
     */
    public function getServiceProvidersPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['appId'] = $request->appId;
        }

        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->origin) {
            @$query['origin'] = $request->origin;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->registryType) {
            @$query['registryType'] = $request->registryType;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['serviceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceProvidersPage',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/sp/api/mseForOam/getServiceProvidersPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceProvidersPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service providers.
     *
     * @param request - GetServiceProvidersPageRequest
     *
     * @returns GetServiceProvidersPageResponse
     *
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
     * Queries the Tomcat configurations of an application.
     *
     * @remarks
     *
     * @param request - GetWebContainerConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWebContainerConfigResponse
     *
     * @param GetWebContainerConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetWebContainerConfigResponse
     */
    public function getWebContainerConfigWithOptions($request, $headers, $runtime)
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
            'action' => 'GetWebContainerConfig',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/web_container_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWebContainerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Tomcat configurations of an application.
     *
     * @remarks
     *
     * @param request - GetWebContainerConfigRequest
     *
     * @returns GetWebContainerConfigResponse
     *
     * @param GetWebContainerConfigRequest $request
     *
     * @return GetWebContainerConfigResponse
     */
    public function getWebContainerConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWebContainerConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Imports a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster to Enterprise Distributed Application Service (EDAS).
     *
     * @param request - ImportK8sClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportK8sClusterResponse
     *
     * @param ImportK8sClusterRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ImportK8sClusterResponse
     */
    public function importK8sClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->enableAsm) {
            @$query['EnableAsm'] = $request->enableAsm;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportK8sCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/import_k8s_cluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportK8sClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster to Enterprise Distributed Application Service (EDAS).
     *
     * @param request - ImportK8sClusterRequest
     *
     * @returns ImportK8sClusterResponse
     *
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
     * Creates an application in an Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * > To create an application in a Kubernetes cluster, call the InsertK8sApplication operation provided by Enterprise Distributed Application Service (EDAS).
     *
     * @param request - InsertApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertApplicationResponse
     *
     * @param InsertApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsertApplicationResponse
     */
    public function insertApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->buildPackId) {
            @$query['BuildPackId'] = $request->buildPackId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentIds) {
            @$query['ComponentIds'] = $request->componentIds;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ecuInfo) {
            @$query['EcuInfo'] = $request->ecuInfo;
        }

        if (null !== $request->enablePortCheck) {
            @$query['EnablePortCheck'] = $request->enablePortCheck;
        }

        if (null !== $request->enableUrlCheck) {
            @$query['EnableUrlCheck'] = $request->enableUrlCheck;
        }

        if (null !== $request->healthCheckUrl) {
            @$query['HealthCheckUrl'] = $request->healthCheckUrl;
        }

        if (null !== $request->hooks) {
            @$query['Hooks'] = $request->hooks;
        }

        if (null !== $request->jdk) {
            @$query['Jdk'] = $request->jdk;
        }

        if (null !== $request->jvmOptions) {
            @$query['JvmOptions'] = $request->jvmOptions;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->maxHeapSize) {
            @$query['MaxHeapSize'] = $request->maxHeapSize;
        }

        if (null !== $request->maxPermSize) {
            @$query['MaxPermSize'] = $request->maxPermSize;
        }

        if (null !== $request->mem) {
            @$query['Mem'] = $request->mem;
        }

        if (null !== $request->minHeapSize) {
            @$query['MinHeapSize'] = $request->minHeapSize;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->reservedPortStr) {
            @$query['ReservedPortStr'] = $request->reservedPortStr;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_create_app',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application in an Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * > To create an application in a Kubernetes cluster, call the InsertK8sApplication operation provided by Enterprise Distributed Application Service (EDAS).
     *
     * @param request - InsertApplicationRequest
     *
     * @returns InsertApplicationResponse
     *
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
     * Creates a cluster.
     *
     * @param request - InsertClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertClusterResponse
     *
     * @param InsertClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InsertClusterResponse
     */
    public function insertClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->iaasProvider) {
            @$query['IaasProvider'] = $request->iaasProvider;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->networkMode) {
            @$query['NetworkMode'] = $request->networkMode;
        }

        if (null !== $request->oversoldFactor) {
            @$query['OversoldFactor'] = $request->oversoldFactor;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster.
     *
     * @param request - InsertClusterRequest
     *
     * @returns InsertClusterResponse
     *
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
     * Imports Elastic Compute Service (ECS) instances into an ECS cluster.
     *
     * @remarks
     * ##
     * If you call this operation to import an ECS instance, the operating system of the ECS instance is reinstalled. After the operating system is reinstalled, all original data of the ECS instance is deleted. In addition, you must set a logon password for the ECS instance. Make sure that no important data exists on the ECS instance that you want to import or data has been backed up for the ECS instance.
     * > We recommend that you call the InstallAgent operation instead of this operation. For more information, see [InstallAgent](https://help.aliyun.com/document_detail/127023.html).
     *
     * @param request - InsertClusterMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertClusterMemberResponse
     *
     * @param InsertClusterMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return InsertClusterMemberResponse
     */
    public function insertClusterMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['clusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceIds) {
            @$query['instanceIds'] = $request->instanceIds;
        }

        if (null !== $request->password) {
            @$query['password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertClusterMember',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster_member',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertClusterMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports Elastic Compute Service (ECS) instances into an ECS cluster.
     *
     * @remarks
     * ##
     * If you call this operation to import an ECS instance, the operating system of the ECS instance is reinstalled. After the operating system is reinstalled, all original data of the ECS instance is deleted. In addition, you must set a logon password for the ECS instance. Make sure that no important data exists on the ECS instance that you want to import or data has been backed up for the ECS instance.
     * > We recommend that you call the InstallAgent operation instead of this operation. For more information, see [InstallAgent](https://help.aliyun.com/document_detail/127023.html).
     *
     * @param request - InsertClusterMemberRequest
     *
     * @returns InsertClusterMemberResponse
     *
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
     * Creates an instance group for a specified application.
     *
     * @param request - InsertDeployGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertDeployGroupResponse
     *
     * @param InsertDeployGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsertDeployGroupResponse
     */
    public function insertDeployGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->initPackageVersionId) {
            @$query['InitPackageVersionId'] = $request->initPackageVersionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertDeployGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/deploy_group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance group for a specified application.
     *
     * @param request - InsertDeployGroupRequest
     *
     * @returns InsertDeployGroupResponse
     *
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
     * Creates an application in a Container Service for Kubernetes (ACK) cluster or serverless Kubernetes cluster.
     *
     * @param request - InsertK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertK8sApplicationResponse
     *
     * @param InsertK8sApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InsertK8sApplicationResponse
     */
    public function insertK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->appConfig) {
            @$query['AppConfig'] = $request->appConfig;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appTemplateName) {
            @$query['AppTemplateName'] = $request->appTemplateName;
        }

        if (null !== $request->applicationDescription) {
            @$query['ApplicationDescription'] = $request->applicationDescription;
        }

        if (null !== $request->buildPackId) {
            @$query['BuildPackId'] = $request->buildPackId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->commandArgs) {
            @$query['CommandArgs'] = $request->commandArgs;
        }

        if (null !== $request->configMountDescs) {
            @$query['ConfigMountDescs'] = $request->configMountDescs;
        }

        if (null !== $request->containerRegistryId) {
            @$query['ContainerRegistryId'] = $request->containerRegistryId;
        }

        if (null !== $request->csClusterId) {
            @$query['CsClusterId'] = $request->csClusterId;
        }

        if (null !== $request->customAffinity) {
            @$query['CustomAffinity'] = $request->customAffinity;
        }

        if (null !== $request->customAgentVersion) {
            @$query['CustomAgentVersion'] = $request->customAgentVersion;
        }

        if (null !== $request->customTolerations) {
            @$query['CustomTolerations'] = $request->customTolerations;
        }

        if (null !== $request->deployAcrossNodes) {
            @$query['DeployAcrossNodes'] = $request->deployAcrossNodes;
        }

        if (null !== $request->deployAcrossZones) {
            @$query['DeployAcrossZones'] = $request->deployAcrossZones;
        }

        if (null !== $request->edasContainerVersion) {
            @$query['EdasContainerVersion'] = $request->edasContainerVersion;
        }

        if (null !== $request->emptyDirs) {
            @$query['EmptyDirs'] = $request->emptyDirs;
        }

        if (null !== $request->enableAhas) {
            @$query['EnableAhas'] = $request->enableAhas;
        }

        if (null !== $request->enableAsm) {
            @$query['EnableAsm'] = $request->enableAsm;
        }

        if (null !== $request->enableEmptyPushReject) {
            @$query['EnableEmptyPushReject'] = $request->enableEmptyPushReject;
        }

        if (null !== $request->enableLosslessRule) {
            @$query['EnableLosslessRule'] = $request->enableLosslessRule;
        }

        if (null !== $request->envFroms) {
            @$query['EnvFroms'] = $request->envFroms;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->featureConfig) {
            @$query['FeatureConfig'] = $request->featureConfig;
        }

        if (null !== $request->imagePlatforms) {
            @$query['ImagePlatforms'] = $request->imagePlatforms;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->initContainers) {
            @$query['InitContainers'] = $request->initContainers;
        }

        if (null !== $request->internetSlbId) {
            @$query['InternetSlbId'] = $request->internetSlbId;
        }

        if (null !== $request->internetSlbPort) {
            @$query['InternetSlbPort'] = $request->internetSlbPort;
        }

        if (null !== $request->internetSlbProtocol) {
            @$query['InternetSlbProtocol'] = $request->internetSlbProtocol;
        }

        if (null !== $request->internetTargetPort) {
            @$query['InternetTargetPort'] = $request->internetTargetPort;
        }

        if (null !== $request->intranetSlbId) {
            @$query['IntranetSlbId'] = $request->intranetSlbId;
        }

        if (null !== $request->intranetSlbPort) {
            @$query['IntranetSlbPort'] = $request->intranetSlbPort;
        }

        if (null !== $request->intranetSlbProtocol) {
            @$query['IntranetSlbProtocol'] = $request->intranetSlbProtocol;
        }

        if (null !== $request->intranetTargetPort) {
            @$query['IntranetTargetPort'] = $request->intranetTargetPort;
        }

        if (null !== $request->isMultilingualApp) {
            @$query['IsMultilingualApp'] = $request->isMultilingualApp;
        }

        if (null !== $request->JDK) {
            @$query['JDK'] = $request->JDK;
        }

        if (null !== $request->javaStartUpConfig) {
            @$query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->limitCpu) {
            @$query['LimitCpu'] = $request->limitCpu;
        }

        if (null !== $request->limitEphemeralStorage) {
            @$query['LimitEphemeralStorage'] = $request->limitEphemeralStorage;
        }

        if (null !== $request->limitMem) {
            @$query['LimitMem'] = $request->limitMem;
        }

        if (null !== $request->limitmCpu) {
            @$query['LimitmCpu'] = $request->limitmCpu;
        }

        if (null !== $request->liveness) {
            @$query['Liveness'] = $request->liveness;
        }

        if (null !== $request->localVolume) {
            @$query['LocalVolume'] = $request->localVolume;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->losslessRuleAligned) {
            @$query['LosslessRuleAligned'] = $request->losslessRuleAligned;
        }

        if (null !== $request->losslessRuleDelayTime) {
            @$query['LosslessRuleDelayTime'] = $request->losslessRuleDelayTime;
        }

        if (null !== $request->losslessRuleFuncType) {
            @$query['LosslessRuleFuncType'] = $request->losslessRuleFuncType;
        }

        if (null !== $request->losslessRuleRelated) {
            @$query['LosslessRuleRelated'] = $request->losslessRuleRelated;
        }

        if (null !== $request->losslessRuleWarmupTime) {
            @$query['LosslessRuleWarmupTime'] = $request->losslessRuleWarmupTime;
        }

        if (null !== $request->mountDescs) {
            @$query['MountDescs'] = $request->mountDescs;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
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

        if (null !== $request->postStart) {
            @$query['PostStart'] = $request->postStart;
        }

        if (null !== $request->preStop) {
            @$query['PreStop'] = $request->preStop;
        }

        if (null !== $request->pvcMountDescs) {
            @$query['PvcMountDescs'] = $request->pvcMountDescs;
        }

        if (null !== $request->readiness) {
            @$query['Readiness'] = $request->readiness;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->requestsCpu) {
            @$query['RequestsCpu'] = $request->requestsCpu;
        }

        if (null !== $request->requestsEphemeralStorage) {
            @$query['RequestsEphemeralStorage'] = $request->requestsEphemeralStorage;
        }

        if (null !== $request->requestsMem) {
            @$query['RequestsMem'] = $request->requestsMem;
        }

        if (null !== $request->requestsmCpu) {
            @$query['RequestsmCpu'] = $request->requestsmCpu;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->runtimeClassName) {
            @$query['RuntimeClassName'] = $request->runtimeClassName;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->serviceConfigs) {
            @$query['ServiceConfigs'] = $request->serviceConfigs;
        }

        if (null !== $request->sidecars) {
            @$query['Sidecars'] = $request->sidecars;
        }

        if (null !== $request->slsConfigs) {
            @$query['SlsConfigs'] = $request->slsConfigs;
        }

        if (null !== $request->startup) {
            @$query['Startup'] = $request->startup;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->terminateGracePeriod) {
            @$query['TerminateGracePeriod'] = $request->terminateGracePeriod;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->uriEncoding) {
            @$query['UriEncoding'] = $request->uriEncoding;
        }

        if (null !== $request->useBodyEncoding) {
            @$query['UseBodyEncoding'] = $request->useBodyEncoding;
        }

        if (null !== $request->userBaseImageUrl) {
            @$query['UserBaseImageUrl'] = $request->userBaseImageUrl;
        }

        if (null !== $request->webContainer) {
            @$query['WebContainer'] = $request->webContainer;
        }

        if (null !== $request->webContainerConfig) {
            @$query['WebContainerConfig'] = $request->webContainerConfig;
        }

        if (null !== $request->workloadType) {
            @$query['WorkloadType'] = $request->workloadType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/create_k8s_app',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application in a Container Service for Kubernetes (ACK) cluster or serverless Kubernetes cluster.
     *
     * @param request - InsertK8sApplicationRequest
     *
     * @returns InsertK8sApplicationResponse
     *
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
     * Creates or edits a custom namespace.
     *
     * @param request - InsertOrUpdateRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertOrUpdateRegionResponse
     *
     * @param InsertOrUpdateRegionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InsertOrUpdateRegionResponse
     */
    public function insertOrUpdateRegionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->debugEnable) {
            @$query['DebugEnable'] = $request->debugEnable;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mseInstanceId) {
            @$query['MseInstanceId'] = $request->mseInstanceId;
        }

        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        if (null !== $request->regionTag) {
            @$query['RegionTag'] = $request->regionTag;
        }

        if (null !== $request->registryType) {
            @$query['RegistryType'] = $request->registryType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertOrUpdateRegion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/user_region_def',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertOrUpdateRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or edits a custom namespace.
     *
     * @param request - InsertOrUpdateRegionRequest
     *
     * @returns InsertOrUpdateRegionResponse
     *
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
     * Creates a role.
     *
     * @param request - InsertRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertRoleResponse
     *
     * @param InsertRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return InsertRoleResponse
     */
    public function insertRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionData) {
            @$query['ActionData'] = $request->actionData;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertRole',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/create_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a role.
     *
     * @param request - InsertRoleRequest
     *
     * @returns InsertRoleResponse
     *
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
     * Creates a service group.
     *
     * @param request - InsertServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertServiceGroupResponse
     *
     * @param InsertServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InsertServiceGroupResponse
     */
    public function insertServiceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertServiceGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/service/serviceGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service group.
     *
     * @param request - InsertServiceGroupRequest
     *
     * @returns InsertServiceGroupResponse
     *
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
     * Creates a lane.
     *
     * @param request - InsertSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertSwimmingLaneResponse
     *
     * @param InsertSwimmingLaneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InsertSwimmingLaneResponse
     */
    public function insertSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInfos) {
            @$query['AppInfos'] = $request->appInfos;
        }

        if (null !== $request->enableRules) {
            @$query['EnableRules'] = $request->enableRules;
        }

        if (null !== $request->entryRules) {
            @$query['EntryRules'] = $request->entryRules;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertSwimmingLane',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lanes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a lane.
     *
     * @param request - InsertSwimmingLaneRequest
     *
     * @returns InsertSwimmingLaneResponse
     *
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
     * Creates a lane group.
     *
     * @param request - InsertSwimmingLaneGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertSwimmingLaneGroupResponse
     *
     * @param InsertSwimmingLaneGroupRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InsertSwimmingLaneGroupResponse
     */
    public function insertSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->entryApp) {
            @$query['EntryApp'] = $request->entryApp;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertSwimmingLaneGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lane_groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsertSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a lane group.
     *
     * @param request - InsertSwimmingLaneGroupRequest
     *
     * @returns InsertSwimmingLaneGroupResponse
     *
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
     * Uses the Cloud Assistant provided by Elastic Compute Service (ECS) to install Enterprise Distributed Application Service (EDAS) Agent and imports ECS instances to EDAS.
     *
     * @remarks
     * If you call this operation to import an ECS instance into EDAS, the operating system of the ECS instance is not reinstalled. We recommend that you call this operation to import ECS instances into EDAS.
     *
     * @param request - InstallAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallAgentResponse
     *
     * @param InstallAgentRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InstallAgentResponse
     */
    public function installAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->doAsync) {
            @$query['DoAsync'] = $request->doAsync;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallAgent',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/ecss/install_agent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uses the Cloud Assistant provided by Elastic Compute Service (ECS) to install Enterprise Distributed Application Service (EDAS) Agent and imports ECS instances to EDAS.
     *
     * @remarks
     * If you call this operation to import an ECS instance into EDAS, the operating system of the ECS instance is not reinstalled. We recommend that you call this operation to import ECS instances into EDAS.
     *
     * @param request - InstallAgentRequest
     *
     * @returns InstallAgentResponse
     *
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
     * Queries Alibaba Cloud regions supported by Enterprise Distributed Application Service (EDAS).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAliyunRegionResponse
     *
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
        $params = new Params([
            'action' => 'ListAliyunRegion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/region_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAliyunRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Alibaba Cloud regions supported by Enterprise Distributed Application Service (EDAS).
     *
     * @returns ListAliyunRegionResponse
     *
     * @return ListAliyunRegionResponse
     */
    public function listAliyunRegion()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAliyunRegionWithOptions($headers, $runtime);
    }

    /**
     * Queries a list of applications.
     *
     * @param request - ListApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationResponse
     *
     * @param ListApplicationRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListApplicationResponse
     */
    public function listApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->logicalRegionIdFilter) {
            @$query['LogicalRegionIdFilter'] = $request->logicalRegionIdFilter;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/app_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of applications.
     *
     * @param request - ListApplicationRequest
     *
     * @returns ListApplicationResponse
     *
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
     * Queries elastic compute units (ECUs).
     *
     * @param request - ListApplicationEcuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationEcuResponse
     *
     * @param ListApplicationEcuRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListApplicationEcuResponse
     */
    public function listApplicationEcuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationEcu',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/ecu_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApplicationEcuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries elastic compute units (ECUs).
     *
     * @param request - ListApplicationEcuRequest
     *
     * @returns ListApplicationEcuResponse
     *
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
     * Queries all permissions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorityResponse
     *
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
        $params = new Params([
            'action' => 'ListAuthority',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/authority_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all permissions.
     *
     * @returns ListAuthorityResponse
     *
     * @return ListAuthorityResponse
     */
    public function listAuthority()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorityWithOptions($headers, $runtime);
    }

    /**
     * Queries Enterprise Distributed Application Service (EDAS) Container versions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBuildPackResponse
     *
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
        $params = new Params([
            'action' => 'ListBuildPack',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/build_pack_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBuildPackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Enterprise Distributed Application Service (EDAS) Container versions.
     *
     * @returns ListBuildPackResponse
     *
     * @return ListBuildPackResponse
     */
    public function listBuildPack()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBuildPackWithOptions($headers, $runtime);
    }

    /**
     * Queries clusters.
     *
     * @param request - ListClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterResponse
     *
     * @param ListClusterRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListClusterResponse
     */
    public function listClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries clusters.
     *
     * @param request - ListClusterRequest
     *
     * @returns ListClusterResponse
     *
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
     * Queries Elastic Compute Service (ECS) instances in a cluster.
     *
     * @param request - ListClusterMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterMembersResponse
     *
     * @param ListClusterMembersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListClusterMembersResponse
     */
    public function listClusterMembersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecsList) {
            @$query['EcsList'] = $request->ecsList;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterMembers',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/cluster_member_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Elastic Compute Service (ECS) instances in a cluster.
     *
     * @param request - ListClusterMembersRequest
     *
     * @returns ListClusterMembersResponse
     *
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
     * Queries the components that are related to applications in Elastic Compute Service (ECS) clusters.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentsResponse
     *
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
        $params = new Params([
            'action' => 'ListComponents',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/components',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the components that are related to applications in Elastic Compute Service (ECS) clusters.
     *
     * @returns ListComponentsResponse
     *
     * @return ListComponentsResponse
     */
    public function listComponents()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentsWithOptions($headers, $runtime);
    }

    /**
     * Queries configuration templates.
     *
     * @param request - ListConfigTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigTemplatesResponse
     *
     * @param ListConfigTemplatesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListConfigTemplatesResponse
     */
    public function listConfigTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigTemplates',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/config_template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConfigTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries configuration templates.
     *
     * @param request - ListConfigTemplatesRequest
     *
     * @returns ListConfigTemplatesResponse
     *
     * @param ListConfigTemplatesRequest $request
     *
     * @return ListConfigTemplatesResponse
     */
    public function listConfigTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the services that are consumed by an application.
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/service/listConsumedServices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the services that are consumed by an application.
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
     * Queries the Elastic Compute Service (ECS) instances that can be imported to a specified cluster. This operation is applicable to ECS clusters.
     *
     * @param request - ListConvertableEcuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConvertableEcuResponse
     *
     * @param ListConvertableEcuRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListConvertableEcuResponse
     */
    public function listConvertableEcuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['clusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConvertableEcu',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/convertable_ecu_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConvertableEcuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Elastic Compute Service (ECS) instances that can be imported to a specified cluster. This operation is applicable to ECS clusters.
     *
     * @param request - ListConvertableEcuRequest
     *
     * @returns ListConvertableEcuResponse
     *
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
     * Queries the instance groups to which an application is deployed.
     *
     * @param request - ListDeployGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeployGroupResponse
     *
     * @param ListDeployGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeployGroupResponse
     */
    public function listDeployGroupWithOptions($request, $headers, $runtime)
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
            'action' => 'ListDeployGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/deploy_group_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance groups to which an application is deployed.
     *
     * @param request - ListDeployGroupRequest
     *
     * @returns ListDeployGroupResponse
     *
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
     * Queries all Elastic Compute Service (ECS) instances that have not been imported to clusters.
     *
     * @param request - ListEcsNotInClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEcsNotInClusterResponse
     *
     * @param ListEcsNotInClusterRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListEcsNotInClusterResponse
     */
    public function listEcsNotInClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkMode) {
            @$query['NetworkMode'] = $request->networkMode;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEcsNotInCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/ecs_not_in_cluster',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEcsNotInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all Elastic Compute Service (ECS) instances that have not been imported to clusters.
     *
     * @param request - ListEcsNotInClusterRequest
     *
     * @returns ListEcsNotInClusterResponse
     *
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
     * Queries the available elastic compute units (ECUs) in a specified namespace.
     *
     * @remarks
     * ## Terms
     * *   **Namespace**: the logical concept that is used to isolate resources such as clusters, ECS instances, and applications, and microservices published in EDAS. This concept involves the default namespace and custom namespaces. Each region has a default namespace and supports multiple custom namespaces. By default, only the default namespace is available. You do not need to create a custom namespace if you do not want to isolate resources and microservices.
     * *   **Elastic compute unit (ECU)**: After an ECS instance is imported to a cluster, the instance becomes an ECU.
     * *   **Elastic compute container (ECC)**: After you deploy an application to an ECU in a cluster, the ECU becomes an ECC.
     *
     * @param request - ListEcuByRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEcuByRegionResponse
     *
     * @param ListEcuByRegionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListEcuByRegionResponse
     */
    public function listEcuByRegionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->act) {
            @$query['Act'] = $request->act;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEcuByRegion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/ecu_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEcuByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available elastic compute units (ECUs) in a specified namespace.
     *
     * @remarks
     * ## Terms
     * *   **Namespace**: the logical concept that is used to isolate resources such as clusters, ECS instances, and applications, and microservices published in EDAS. This concept involves the default namespace and custom namespaces. Each region has a default namespace and supports multiple custom namespaces. By default, only the default namespace is available. You do not need to create a custom namespace if you do not want to isolate resources and microservices.
     * *   **Elastic compute unit (ECU)**: After an ECS instance is imported to a cluster, the instance becomes an ECU.
     * *   **Elastic compute container (ECC)**: After you deploy an application to an ECU in a cluster, the ECU becomes an ECC.
     *
     * @param request - ListEcuByRegionRequest
     *
     * @returns ListEcuByRegionResponse
     *
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
     * Queries historical deployment packages of an application.
     *
     * @param request - ListHistoryDeployVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHistoryDeployVersionResponse
     *
     * @param ListHistoryDeployVersionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHistoryDeployVersionResponse
     */
    public function listHistoryDeployVersionWithOptions($request, $headers, $runtime)
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
            'action' => 'ListHistoryDeployVersion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/deploy_history_version_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHistoryDeployVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries historical deployment packages of an application.
     *
     * @param request - ListHistoryDeployVersionRequest
     *
     * @returns ListHistoryDeployVersionResponse
     *
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
     * Queries Kubernetes ConfigMaps.
     *
     * @param request - ListK8sConfigMapsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListK8sConfigMapsResponse
     *
     * @param ListK8sConfigMapsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListK8sConfigMapsResponse
     */
    public function listK8sConfigMapsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->condition) {
            @$query['Condition'] = $request->condition;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->showRelatedApps) {
            @$query['ShowRelatedApps'] = $request->showRelatedApps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListK8sConfigMaps',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_config_map',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListK8sConfigMapsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Kubernetes ConfigMaps.
     *
     * @param request - ListK8sConfigMapsRequest
     *
     * @returns ListK8sConfigMapsResponse
     *
     * @param ListK8sConfigMapsRequest $request
     *
     * @return ListK8sConfigMapsResponse
     */
    public function listK8sConfigMaps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listK8sConfigMapsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries ingresses.
     *
     * @param request - ListK8sIngressRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListK8sIngressRulesResponse
     *
     * @param ListK8sIngressRulesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListK8sIngressRulesResponse
     */
    public function listK8sIngressRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->condition) {
            @$query['Condition'] = $request->condition;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListK8sIngressRules',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_ingress',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListK8sIngressRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries ingresses.
     *
     * @param request - ListK8sIngressRulesRequest
     *
     * @returns ListK8sIngressRulesResponse
     *
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
     * Queries namespaces for a Kubernetes cluster.
     *
     * @param request - ListK8sNamespacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListK8sNamespacesResponse
     *
     * @param ListK8sNamespacesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListK8sNamespacesResponse
     */
    public function listK8sNamespacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListK8sNamespaces',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_namespace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListK8sNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries namespaces for a Kubernetes cluster.
     *
     * @param request - ListK8sNamespacesRequest
     *
     * @returns ListK8sNamespacesResponse
     *
     * @param ListK8sNamespacesRequest $request
     *
     * @return ListK8sNamespacesResponse
     */
    public function listK8sNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listK8sNamespacesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries Kubernetes Secrets.
     *
     * @param request - ListK8sSecretsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListK8sSecretsResponse
     *
     * @param ListK8sSecretsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListK8sSecretsResponse
     */
    public function listK8sSecretsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->condition) {
            @$query['Condition'] = $request->condition;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->showRelatedApps) {
            @$query['ShowRelatedApps'] = $request->showRelatedApps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListK8sSecrets',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_secret',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListK8sSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Kubernetes Secrets.
     *
     * @param request - ListK8sSecretsRequest
     *
     * @returns ListK8sSecretsResponse
     *
     * @param ListK8sSecretsRequest $request
     *
     * @return ListK8sSecretsResponse
     */
    public function listK8sSecrets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listK8sSecretsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries service methods.
     *
     * @param request - ListMethodsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMethodsResponse
     *
     * @param ListMethodsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMethodsResponse
     */
    public function listMethodsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMethods',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/service/list_methods',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMethodsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries service methods.
     *
     * @param request - ListMethodsRequest
     *
     * @returns ListMethodsResponse
     *
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
     * Queries the services that are published by an application.
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/service/listPublishedServices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPublishedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the services that are published by an application.
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
     * Queries the change processes of an application.
     *
     * @param request - ListRecentChangeOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentChangeOrderResponse
     *
     * @param ListRecentChangeOrderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRecentChangeOrderResponse
     */
    public function listRecentChangeOrderWithOptions($request, $headers, $runtime)
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
            'action' => 'ListRecentChangeOrder',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/change_order_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecentChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the change processes of an application.
     *
     * @param request - ListRecentChangeOrderRequest
     *
     * @returns ListRecentChangeOrderResponse
     *
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
     * Queries resource groups.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupResponse
     *
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
        $params = new Params([
            'action' => 'ListResourceGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/reg_group_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource groups.
     *
     * @returns ListResourceGroupResponse
     *
     * @return ListResourceGroupResponse
     */
    public function listResourceGroup()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupWithOptions($headers, $runtime);
    }

    /**
     * Queries roles.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoleResponse
     *
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
        $params = new Params([
            'action' => 'ListRole',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/role_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries roles.
     *
     * @returns ListRoleResponse
     *
     * @return ListRoleResponse
     */
    public function listRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRoleWithOptions($headers, $runtime);
    }

    /**
     * Queries elastic compute units (ECUs) available for scaling out an application in a specified cluster or the cluster where the application is deployed. This operation is applicable to Elastic Compute Service (ECS) clusters.
     *
     * @remarks
     * ## Terms
     * *   **Namespace**: the logical concept that is used to isolate resources such as clusters, ECS instances, and applications, and microservices published in EDAS. This concept involves the default namespace and custom namespaces. Each region has a default namespace and supports multiple custom namespaces. By default, only the default namespace is available. You do not need to create a custom namespace if you do not want to isolate resources and microservices.
     * *   **Elastic compute unit (ECU)**: After an ECS instance is imported to a cluster, the instance becomes an ECU.
     * *   **Elastic compute container (ECC)**: After you deploy an application to an ECU in a cluster, the ECU becomes an ECC.
     *
     * @param request - ListScaleOutEcuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScaleOutEcuResponse
     *
     * @param ListScaleOutEcuRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListScaleOutEcuResponse
     */
    public function listScaleOutEcuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceNum) {
            @$query['InstanceNum'] = $request->instanceNum;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        if (null !== $request->mem) {
            @$query['Mem'] = $request->mem;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScaleOutEcu',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/scale_out_ecu_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScaleOutEcuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries elastic compute units (ECUs) available for scaling out an application in a specified cluster or the cluster where the application is deployed. This operation is applicable to Elastic Compute Service (ECS) clusters.
     *
     * @remarks
     * ## Terms
     * *   **Namespace**: the logical concept that is used to isolate resources such as clusters, ECS instances, and applications, and microservices published in EDAS. This concept involves the default namespace and custom namespaces. Each region has a default namespace and supports multiple custom namespaces. By default, only the default namespace is available. You do not need to create a custom namespace if you do not want to isolate resources and microservices.
     * *   **Elastic compute unit (ECU)**: After an ECS instance is imported to a cluster, the instance becomes an ECU.
     * *   **Elastic compute container (ECC)**: After you deploy an application to an ECU in a cluster, the ECU becomes an ECC.
     *
     * @param request - ListScaleOutEcuRequest
     *
     * @returns ListScaleOutEcuResponse
     *
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
     * Queries the service groups of a High-Speed Service Framework (HSF) application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceGroupsResponse
     *
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
        $params = new Params([
            'action' => 'ListServiceGroups',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/service/serviceGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the service groups of a High-Speed Service Framework (HSF) application.
     *
     * @returns ListServiceGroupsResponse
     *
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroups()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceGroupsWithOptions($headers, $runtime);
    }

    /**
     * Queries Server Load Balancer (SLB) instances.
     *
     * @param request - ListSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSlbResponse
     *
     * @param ListSlbRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSlbResponse
     */
    public function listSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->slbType) {
            @$query['SlbType'] = $request->slbType;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/slb_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Server Load Balancer (SLB) instances.
     *
     * @param request - ListSlbRequest
     *
     * @returns ListSlbResponse
     *
     * @param ListSlbRequest $request
     *
     * @return ListSlbResponse
     */
    public function listSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the Resource Access Management (RAM) users.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubAccountResponse
     *
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
        $params = new Params([
            'action' => 'ListSubAccount',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/sub_account_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Resource Access Management (RAM) users.
     *
     * @returns ListSubAccountResponse
     *
     * @return ListSubAccountResponse
     */
    public function listSubAccount()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubAccountWithOptions($headers, $runtime);
    }

    /**
     * Queries lanes in a lane group.
     *
     * @param request - ListSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSwimmingLaneResponse
     *
     * @param ListSwimmingLaneRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSwimmingLaneResponse
     */
    public function listSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSwimmingLane',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lanes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries lanes in a lane group.
     *
     * @param request - ListSwimmingLaneRequest
     *
     * @returns ListSwimmingLaneResponse
     *
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
     * Queries lane groups.
     *
     * @param request - ListSwimmingLaneGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSwimmingLaneGroupResponse
     *
     * @param ListSwimmingLaneGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListSwimmingLaneGroupResponse
     */
    public function listSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSwimmingLaneGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lane_groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries lane groups.
     *
     * @param request - ListSwimmingLaneGroupRequest
     *
     * @returns ListSwimmingLaneGroupResponse
     *
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
     * Queries the tags that are added to resources.
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
        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/tag/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to resources.
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
     * Queries custom namespaces.
     *
     * @param request - ListUserDefineRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserDefineRegionResponse
     *
     * @param ListUserDefineRegionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListUserDefineRegionResponse
     */
    public function listUserDefineRegionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->debugEnable) {
            @$query['DebugEnable'] = $request->debugEnable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDefineRegion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/user_region_defs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserDefineRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom namespaces.
     *
     * @param request - ListUserDefineRegionRequest
     *
     * @returns ListUserDefineRegionResponse
     *
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
     * The HTTP status code returned.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcResponse
     *
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
        $params = new Params([
            'action' => 'ListVpc',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/vpc_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The HTTP status code returned.
     *
     * @returns ListVpcResponse
     *
     * @return ListVpcResponse
     */
    public function listVpc()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcWithOptions($headers, $runtime);
    }

    /**
     * Migrates an elastic compute unit (ECU) to the default cluster in a specified namespace.
     *
     * @remarks
     * ## Limits
     * We recommend that you do not call this operation. Instead, we recommend that you call the TransformClusterMember operation. For more information, see [TransformClusterMember](https://help.aliyun.com/document_detail/71514.html).
     * When you call this operation to import an Elastic Compute Service (ECS) instance, the operating system of the ECS instance is reinstalled. After the operating system is reinstalled, all data of the ECS instance is deleted. You must set a logon password for the ECS instance. Make sure that no important data exists on or data has been backed up for the ECS instance that you want to import.
     * ## Terms
     * *   **Namespace**: the logical concept that is used to isolate resources and microservices in Enterprise Distributed Application Service (EDAS). The resources include clusters, ECS instances, and applications. You can use a default or custom namespace. Each region has a default namespace and supports multiple custom namespaces. By default, only the default namespace is available. You do not need to create a custom namespace if you do not want to isolate resources or microservices.
     * *   **ECU**: After an ECS instance is imported to a cluster, the instance becomes an ECU.
     * *   **Elastic compute container (ECC)**: After you deploy an application to an ECU in a cluster, the ECU becomes an ECC.
     *
     * @param request - MigrateEcuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateEcuResponse
     *
     * @param MigrateEcuRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return MigrateEcuResponse
     */
    public function migrateEcuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateEcu',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/migrate_ecu',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateEcuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates an elastic compute unit (ECU) to the default cluster in a specified namespace.
     *
     * @remarks
     * ## Limits
     * We recommend that you do not call this operation. Instead, we recommend that you call the TransformClusterMember operation. For more information, see [TransformClusterMember](https://help.aliyun.com/document_detail/71514.html).
     * When you call this operation to import an Elastic Compute Service (ECS) instance, the operating system of the ECS instance is reinstalled. After the operating system is reinstalled, all data of the ECS instance is deleted. You must set a logon password for the ECS instance. Make sure that no important data exists on or data has been backed up for the ECS instance that you want to import.
     * ## Terms
     * *   **Namespace**: the logical concept that is used to isolate resources and microservices in Enterprise Distributed Application Service (EDAS). The resources include clusters, ECS instances, and applications. You can use a default or custom namespace. Each region has a default namespace and supports multiple custom namespaces. By default, only the default namespace is available. You do not need to create a custom namespace if you do not want to isolate resources or microservices.
     * *   **ECU**: After an ECS instance is imported to a cluster, the instance becomes an ECU.
     * *   **Elastic compute container (ECC)**: After you deploy an application to an ECU in a cluster, the ECU becomes an ECC.
     *
     * @param request - MigrateEcuRequest
     *
     * @returns MigrateEcuResponse
     *
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
     * Modifies the scaling rule for an application.
     *
     * @param request - ModifyScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScalingRuleResponse
     *
     * @param ModifyScalingRuleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptEULA) {
            @$query['AcceptEULA'] = $request->acceptEULA;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->inCondition) {
            @$query['InCondition'] = $request->inCondition;
        }

        if (null !== $request->inCpu) {
            @$query['InCpu'] = $request->inCpu;
        }

        if (null !== $request->inDuration) {
            @$query['InDuration'] = $request->inDuration;
        }

        if (null !== $request->inEnable) {
            @$query['InEnable'] = $request->inEnable;
        }

        if (null !== $request->inInstanceNum) {
            @$query['InInstanceNum'] = $request->inInstanceNum;
        }

        if (null !== $request->inLoad) {
            @$query['InLoad'] = $request->inLoad;
        }

        if (null !== $request->inRT) {
            @$query['InRT'] = $request->inRT;
        }

        if (null !== $request->inStep) {
            @$query['InStep'] = $request->inStep;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->multiAzPolicy) {
            @$query['MultiAzPolicy'] = $request->multiAzPolicy;
        }

        if (null !== $request->outCPU) {
            @$query['OutCPU'] = $request->outCPU;
        }

        if (null !== $request->outCondition) {
            @$query['OutCondition'] = $request->outCondition;
        }

        if (null !== $request->outDuration) {
            @$query['OutDuration'] = $request->outDuration;
        }

        if (null !== $request->outEnable) {
            @$query['OutEnable'] = $request->outEnable;
        }

        if (null !== $request->outInstanceNum) {
            @$query['OutInstanceNum'] = $request->outInstanceNum;
        }

        if (null !== $request->outLoad) {
            @$query['OutLoad'] = $request->outLoad;
        }

        if (null !== $request->outRT) {
            @$query['OutRT'] = $request->outRT;
        }

        if (null !== $request->outStep) {
            @$query['OutStep'] = $request->outStep;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->resourceFrom) {
            @$query['ResourceFrom'] = $request->resourceFrom;
        }

        if (null !== $request->scalingPolicy) {
            @$query['ScalingPolicy'] = $request->scalingPolicy;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateInstanceId) {
            @$query['TemplateInstanceId'] = $request->templateInstanceId;
        }

        if (null !== $request->templateInstanceName) {
            @$query['TemplateInstanceName'] = $request->templateInstanceName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScalingRule',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/scaling_rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the scaling rule for an application.
     *
     * @param request - ModifyScalingRuleRequest
     *
     * @returns ModifyScalingRuleResponse
     *
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
     * Queries the status of an application.
     *
     * @param request - QueryApplicationStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryApplicationStatusResponse
     *
     * @param QueryApplicationStatusRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryApplicationStatusResponse
     */
    public function queryApplicationStatusWithOptions($request, $headers, $runtime)
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
            'action' => 'QueryApplicationStatus',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/app_status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryApplicationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an application.
     *
     * @param request - QueryApplicationStatusRequest
     *
     * @returns QueryApplicationStatusResponse
     *
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
     * Queries details about an elastic compute container (ECC). This operation is applicable to Container Service for Kubernetes (ACK) clusters.
     *
     * @param request - QueryEccInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEccInfoResponse
     *
     * @param QueryEccInfoRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryEccInfoResponse
     */
    public function queryEccInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eccId) {
            @$query['EccId'] = $request->eccId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEccInfo',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/ecc',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryEccInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about an elastic compute container (ECC). This operation is applicable to Container Service for Kubernetes (ACK) clusters.
     *
     * @param request - QueryEccInfoRequest
     *
     * @returns QueryEccInfoResponse
     *
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
     * Queries the elastic compute units (ECUs) that can be migrated.
     *
     * @param request - QueryMigrateEcuListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMigrateEcuListResponse
     *
     * @param QueryMigrateEcuListRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMigrateEcuListResponse
     */
    public function queryMigrateEcuListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMigrateEcuList',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/migrate_ecu_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryMigrateEcuListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the elastic compute units (ECUs) that can be migrated.
     *
     * @param request - QueryMigrateEcuListRequest
     *
     * @returns QueryMigrateEcuListResponse
     *
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
     * Queries the namespaces to which an instance can be migrated.
     *
     * @param request - QueryMigrateRegionListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMigrateRegionListResponse
     *
     * @param QueryMigrateRegionListRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryMigrateRegionListResponse
     */
    public function queryMigrateRegionListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logicalRegionId) {
            @$query['LogicalRegionId'] = $request->logicalRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMigrateRegionList',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/migrate_region_select',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryMigrateRegionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the namespaces to which an instance can be migrated.
     *
     * @param request - QueryMigrateRegionListRequest
     *
     * @returns QueryMigrateRegionListResponse
     *
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
     * Queries the configurations of different regions that are supported by Enterprise Distributed Application Service (EDAS).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRegionConfigResponse
     *
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
        $params = new Params([
            'action' => 'QueryRegionConfig',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/region_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryRegionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of different regions that are supported by Enterprise Distributed Application Service (EDAS).
     *
     * @returns QueryRegionConfigResponse
     *
     * @return QueryRegionConfigResponse
     */
    public function queryRegionConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRegionConfigWithOptions($headers, $runtime);
    }

    /**
     * Queries the configuration details of Log Service for an application.
     *
     * @param request - QuerySlsLogStoreListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySlsLogStoreListResponse
     *
     * @param QuerySlsLogStoreListRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySlsLogStoreListResponse
     */
    public function querySlsLogStoreListWithOptions($request, $headers, $runtime)
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySlsLogStoreList',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/sls/query_sls_log_store_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QuerySlsLogStoreListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration details of Log Service for an application.
     *
     * @param request - QuerySlsLogStoreListRequest
     *
     * @returns QuerySlsLogStoreListResponse
     *
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
     * Resets an application.
     *
     * @param request - ResetApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetApplicationResponse
     *
     * @param ResetApplicationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ResetApplicationResponse
     */
    public function resetApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->eccInfo) {
            @$query['EccInfo'] = $request->eccInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_reset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets an application.
     *
     * @param request - ResetApplicationRequest
     *
     * @returns ResetApplicationResponse
     *
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
     * Restarts an application. This operation is applicable to applications that are deployed in Elastic Compute Service (ECS) clusters.
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

        if (null !== $request->eccInfo) {
            @$query['EccInfo'] = $request->eccInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an application. This operation is applicable to applications that are deployed in Elastic Compute Service (ECS) clusters.
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
     * Restarts an application that is deployed in a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster.
     *
     * @param request - RestartK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartK8sApplicationResponse
     *
     * @param RestartK8sApplicationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RestartK8sApplicationResponse
     */
    public function restartK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/restart_k8s_app',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an application that is deployed in a Container Service for Kubernetes (ACK) cluster or a serverless Kubernetes cluster.
     *
     * @param request - RestartK8sApplicationRequest
     *
     * @returns RestartK8sApplicationResponse
     *
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
     * Retries a failed process.
     *
     * @param request - RetryChangeOrderTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryChangeOrderTaskResponse
     *
     * @param RetryChangeOrderTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RetryChangeOrderTaskResponse
     */
    public function retryChangeOrderTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->retryStatus) {
            @$query['RetryStatus'] = $request->retryStatus;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryChangeOrderTask',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/task_retry',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetryChangeOrderTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retries a failed process.
     *
     * @param request - RetryChangeOrderTaskRequest
     *
     * @returns RetryChangeOrderTaskResponse
     *
     * @param RetryChangeOrderTaskRequest $request
     *
     * @return RetryChangeOrderTaskResponse
     */
    public function retryChangeOrderTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryChangeOrderTaskWithOptions($request, $headers, $runtime);
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

        if (null !== $request->batch) {
            @$query['Batch'] = $request->batch;
        }

        if (null !== $request->batchWaitTime) {
            @$query['BatchWaitTime'] = $request->batchWaitTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->historyVersion) {
            @$query['HistoryVersion'] = $request->historyVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_rollback',
            'method' => 'POST',
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
     * Terminates an application change process and rolls back the application. This operation is applicable to applications that are deployed in Elastic Compute Service (ECS) clusters.
     *
     * @param request - RollbackChangeOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackChangeOrderResponse
     *
     * @param RollbackChangeOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackChangeOrderResponse
     */
    public function rollbackChangeOrderWithOptions($request, $headers, $runtime)
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
            'action' => 'RollbackChangeOrder',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/changeorder/rollback',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RollbackChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates an application change process and rolls back the application. This operation is applicable to applications that are deployed in Elastic Compute Service (ECS) clusters.
     *
     * @param request - RollbackChangeOrderRequest
     *
     * @returns RollbackChangeOrderResponse
     *
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
     * Scales in an application.
     *
     * @param request - ScaleInApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleInApplicationResponse
     *
     * @param ScaleInApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ScaleInApplicationResponse
     */
    public function scaleInApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->eccInfo) {
            @$query['EccInfo'] = $request->eccInfo;
        }

        if (null !== $request->forceStatus) {
            @$query['ForceStatus'] = $request->forceStatus;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScaleInApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_scale_in',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleInApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales in an application.
     *
     * @param request - ScaleInApplicationRequest
     *
     * @returns ScaleInApplicationResponse
     *
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
     * Scales out or in an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - ScaleK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleK8sApplicationResponse
     *
     * @param ScaleK8sApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ScaleK8sApplicationResponse
     */
    public function scaleK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScaleK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_apps',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales out or in an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - ScaleK8sApplicationRequest
     *
     * @returns ScaleK8sApplicationResponse
     *
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
     * Scales out an application.
     *
     * @param request - ScaleOutApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleOutApplicationResponse
     *
     * @param ScaleOutApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ScaleOutApplicationResponse
     */
    public function scaleOutApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->deployGroup) {
            @$query['DeployGroup'] = $request->deployGroup;
        }

        if (null !== $request->ecuInfo) {
            @$query['EcuInfo'] = $request->ecuInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScaleOutApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_scale_out',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleOutApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales out an application.
     *
     * @param request - ScaleOutApplicationRequest
     *
     * @returns ScaleOutApplicationResponse
     *
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
     * Purchases Elastic Compute Service (ECS) instances in the Enterprise Distributed Application Service (EDAS) console and adds the purchased ECS instances to the specified instance group of an application.
     *
     * @remarks
     * ## Limits
     * Assume that the auto scaling feature is configured and enabled for an application. When an auto scale-in is triggered for the application, the ECS instances that are purchased by calling this operation are removed first.
     *
     * @param request - ScaleoutApplicationWithNewInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleoutApplicationWithNewInstancesResponse
     *
     * @param ScaleoutApplicationWithNewInstancesRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ScaleoutApplicationWithNewInstancesResponse
     */
    public function scaleoutApplicationWithNewInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceChargePeriod) {
            @$query['InstanceChargePeriod'] = $request->instanceChargePeriod;
        }

        if (null !== $request->instanceChargePeriodUnit) {
            @$query['InstanceChargePeriodUnit'] = $request->instanceChargePeriodUnit;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->scalingNum) {
            @$query['ScalingNum'] = $request->scalingNum;
        }

        if (null !== $request->scalingPolicy) {
            @$query['ScalingPolicy'] = $request->scalingPolicy;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateInstanceId) {
            @$query['TemplateInstanceId'] = $request->templateInstanceId;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScaleoutApplicationWithNewInstances',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/scaling/scale_out',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleoutApplicationWithNewInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchases Elastic Compute Service (ECS) instances in the Enterprise Distributed Application Service (EDAS) console and adds the purchased ECS instances to the specified instance group of an application.
     *
     * @remarks
     * ## Limits
     * Assume that the auto scaling feature is configured and enabled for an application. When an auto scale-in is triggered for the application, the ECS instances that are purchased by calling this operation are removed first.
     *
     * @param request - ScaleoutApplicationWithNewInstancesRequest
     *
     * @returns ScaleoutApplicationWithNewInstancesResponse
     *
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

        if (null !== $request->eccInfo) {
            @$query['EccInfo'] = $request->eccInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_start',
            'method' => 'POST',
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
     * Starts precheck for Kubernetes application changes.
     *
     * @param request - StartK8sAppPrecheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartK8sAppPrecheckResponse
     *
     * @param StartK8sAppPrecheckRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartK8sAppPrecheckResponse
     */
    public function startK8sAppPrecheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentIds) {
            @$query['ComponentIds'] = $request->componentIds;
        }

        if (null !== $request->configMountDescs) {
            @$query['ConfigMountDescs'] = $request->configMountDescs;
        }

        if (null !== $request->emptyDirs) {
            @$query['EmptyDirs'] = $request->emptyDirs;
        }

        if (null !== $request->envFroms) {
            @$query['EnvFroms'] = $request->envFroms;
        }

        if (null !== $request->envs) {
            @$query['Envs'] = $request->envs;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->javaStartUpConfig) {
            @$query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->limitEphemeralStorage) {
            @$query['LimitEphemeralStorage'] = $request->limitEphemeralStorage;
        }

        if (null !== $request->limitMem) {
            @$query['LimitMem'] = $request->limitMem;
        }

        if (null !== $request->limitmCpu) {
            @$query['LimitmCpu'] = $request->limitmCpu;
        }

        if (null !== $request->localVolume) {
            @$query['LocalVolume'] = $request->localVolume;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->packageUrl) {
            @$query['PackageUrl'] = $request->packageUrl;
        }

        if (null !== $request->pvcMountDescs) {
            @$query['PvcMountDescs'] = $request->pvcMountDescs;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->requestsEphemeralStorage) {
            @$query['RequestsEphemeralStorage'] = $request->requestsEphemeralStorage;
        }

        if (null !== $request->requestsMem) {
            @$query['RequestsMem'] = $request->requestsMem;
        }

        if (null !== $request->requestsmCpu) {
            @$query['RequestsmCpu'] = $request->requestsmCpu;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartK8sAppPrecheck',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/app_precheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartK8sAppPrecheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts precheck for Kubernetes application changes.
     *
     * @param request - StartK8sAppPrecheckRequest
     *
     * @returns StartK8sAppPrecheckResponse
     *
     * @param StartK8sAppPrecheckRequest $request
     *
     * @return StartK8sAppPrecheckResponse
     */
    public function startK8sAppPrecheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startK8sAppPrecheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Starts an application in a Container Service for Kubernetes (ACK) cluster or Serverless Kubernetes cluster.
     *
     * @param request - StartK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartK8sApplicationResponse
     *
     * @param StartK8sApplicationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartK8sApplicationResponse
     */
    public function startK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/start_k8s_app',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an application in a Container Service for Kubernetes (ACK) cluster or Serverless Kubernetes cluster.
     *
     * @param request - StartK8sApplicationRequest
     *
     * @returns StartK8sApplicationResponse
     *
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

        if (null !== $request->eccInfo) {
            @$query['EccInfo'] = $request->eccInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_stop',
            'method' => 'POST',
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
     * Stops an application in a Container Service for Kubernetes (ACK) cluster or a Serverless Kubernetes cluster.
     *
     * @param request - StopK8sApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopK8sApplicationResponse
     *
     * @param StopK8sApplicationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StopK8sApplicationResponse
     */
    public function stopK8sApplicationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopK8sApplication',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/stop_k8s_app',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an application in a Container Service for Kubernetes (ACK) cluster or a Serverless Kubernetes cluster.
     *
     * @param request - StopK8sApplicationRequest
     *
     * @returns StopK8sApplicationResponse
     *
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
     * Queries the status of the advanced application monitoring feature or configures this feature for an application that is deployed in an Elastic Compute Service (ECS) or Kubernetes cluster.
     *
     * @remarks
     * To call the SwitchAdvancedMonitoring operation, you must make sure that the version of Enterprise Distributed Application Service (EDAS) SDK for Java or Python is 3.15.2 or later.
     *
     * @param request - SwitchAdvancedMonitoringRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchAdvancedMonitoringResponse
     *
     * @param SwitchAdvancedMonitoringRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SwitchAdvancedMonitoringResponse
     */
    public function switchAdvancedMonitoringWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->enableAdvancedMonitoring) {
            @$query['EnableAdvancedMonitoring'] = $request->enableAdvancedMonitoring;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchAdvancedMonitoring',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/monitor/advancedMonitorInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SwitchAdvancedMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the advanced application monitoring feature or configures this feature for an application that is deployed in an Elastic Compute Service (ECS) or Kubernetes cluster.
     *
     * @remarks
     * To call the SwitchAdvancedMonitoring operation, you must make sure that the version of Enterprise Distributed Application Service (EDAS) SDK for Java or Python is 3.15.2 or later.
     *
     * @param request - SwitchAdvancedMonitoringRequest
     *
     * @returns SwitchAdvancedMonitoringResponse
     *
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
     * Synchronizes the basic Alibaba Cloud resources that belong to your account to Enterprise Distributed Application Service (EDAS). This operation is applicable to Elastic Compute Service (ECS) clusters.
     *
     * @remarks
     * If you call this operation to synchronize ECS resource information, all instance data is synchronized from ECS. If you have more than 100 ECS instances, we recommend that you do not frequently call this operation.
     *
     * @param request - SynchronizeResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SynchronizeResourceResponse
     *
     * @param SynchronizeResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SynchronizeResourceResponse
     */
    public function synchronizeResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SynchronizeResource',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/pop_sync_resource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SynchronizeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes the basic Alibaba Cloud resources that belong to your account to Enterprise Distributed Application Service (EDAS). This operation is applicable to Elastic Compute Service (ECS) clusters.
     *
     * @remarks
     * If you call this operation to synchronize ECS resource information, all instance data is synchronized from ECS. If you have more than 100 ECS instances, we recommend that you do not frequently call this operation.
     *
     * @param request - SynchronizeResourceRequest
     *
     * @returns SynchronizeResourceResponse
     *
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
     * Creates tags and adds the tags to resources at a time.
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
        $query = [];
        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
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
            'action' => 'TagResources',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/tag/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates tags and adds the tags to resources at a time.
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
     * Imports or migrates one or more Elastic Compute Service (ECS) instances to a cluster.
     *
     * @remarks
     * ## Limits
     * When you call this operation to import an ECS instance, the operating system of the ECS instance is reinstalled. After the operating system is reinstalled, all data of the ECS instance is deleted. You must set a logon password for the ECS instance. Make sure that no important data exists on or data has been backed up for the ECS instance that you want to import.
     *
     * @param request - TransformClusterMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransformClusterMemberResponse
     *
     * @param TransformClusterMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return TransformClusterMemberResponse
     */
    public function transformClusterMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->targetClusterId) {
            @$query['TargetClusterId'] = $request->targetClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransformClusterMember',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/resource/transform_cluster_member',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TransformClusterMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports or migrates one or more Elastic Compute Service (ECS) instances to a cluster.
     *
     * @remarks
     * ## Limits
     * When you call this operation to import an ECS instance, the operating system of the ECS instance is reinstalled. After the operating system is reinstalled, all data of the ECS instance is deleted. You must set a logon password for the ECS instance. Make sure that no important data exists on or data has been backed up for the ECS instance that you want to import.
     *
     * @param request - TransformClusterMemberRequest
     *
     * @returns TransformClusterMemberResponse
     *
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
     * Unbinds a Server Load Balancer (SLB) instance from an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - UnbindK8sSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindK8sSlbResponse
     *
     * @param UnbindK8sSlbRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindK8sSlbResponse
     */
    public function unbindK8sSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->slbName) {
            @$query['SlbName'] = $request->slbName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindK8sSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_slb_binding',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindK8sSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a Server Load Balancer (SLB) instance from an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - UnbindK8sSlbRequest
     *
     * @returns UnbindK8sSlbResponse
     *
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
     * Unbinds a Server Load Balancer (SLB) instance from an application.
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

        if (null !== $request->deleteListener) {
            @$query['DeleteListener'] = $request->deleteListener;
        }

        if (null !== $request->slbId) {
            @$query['SlbId'] = $request->slbId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/app/unbind_slb_json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a Server Load Balancer (SLB) instance from an application.
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
     * Removes one or more tags from one or more resources.
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

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
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
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/tag/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes one or more tags from one or more resources.
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
     * Modifies the information about an account.
     *
     * @param request - UpdateAccountInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccountInfoResponse
     *
     * @param UpdateAccountInfoRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAccountInfoResponse
     */
    public function updateAccountInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccountInfo',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/edit_account_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about an account.
     *
     * @param request - UpdateAccountInfoRequest
     *
     * @returns UpdateAccountInfoResponse
     *
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
     * Modifies the name, description, and owner of an application.
     *
     * @param request - UpdateApplicationBaseInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationBaseInfoResponse
     *
     * @param UpdateApplicationBaseInfoRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateApplicationBaseInfoResponse
     */
    public function updateApplicationBaseInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationBaseInfo',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/update_app_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, and owner of an application.
     *
     * @param request - UpdateApplicationBaseInfoRequest
     *
     * @returns UpdateApplicationBaseInfoResponse
     *
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
     * Modifies an auto scaling policy for an application.
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

        if (null !== $request->scalingBehaviour) {
            @$query['ScalingBehaviour'] = $request->scalingBehaviour;
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

        if (null !== $request->scalingRuleTrigger) {
            @$query['ScalingRuleTrigger'] = $request->scalingRuleTrigger;
        }

        if (null !== $request->scalingRuleType) {
            @$query['ScalingRuleType'] = $request->scalingRuleType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationScalingRule',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v1/eam/scale/application_scaling_rule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an auto scaling policy for an application.
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
     * Modifies a configuration template.
     *
     * @param request - UpdateConfigTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigTemplateResponse
     *
     * @param UpdateConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateConfigTemplateResponse
     */
    public function updateConfigTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->format) {
            @$body['Format'] = $request->format;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfigTemplate',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/config_template',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConfigTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a configuration template.
     *
     * @param request - UpdateConfigTemplateRequest
     *
     * @returns UpdateConfigTemplateResponse
     *
     * @param UpdateConfigTemplateRequest $request
     *
     * @return UpdateConfigTemplateResponse
     */
    public function updateConfigTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the Enterprise Distributed Application Service (EDAS) Container version of a High-Speed Service Framework (HSF) application. EDAS Container includes Ali-Tomcat and Pandora.
     *
     * @param request - UpdateContainerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContainerResponse
     *
     * @param UpdateContainerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateContainerResponse
     */
    public function updateContainerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->buildPackId) {
            @$query['BuildPackId'] = $request->buildPackId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContainer',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/changeorder/co_update_container',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateContainerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Enterprise Distributed Application Service (EDAS) Container version of a High-Speed Service Framework (HSF) application. EDAS Container includes Ali-Tomcat and Pandora.
     *
     * @param request - UpdateContainerRequest
     *
     * @returns UpdateContainerResponse
     *
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
     * Configures the Tomcat container for an application or application instance group in an Elastic Compute Service (ECS) cluster.
     *
     * @param request - UpdateContainerConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContainerConfigurationResponse
     *
     * @param UpdateContainerConfigurationRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateContainerConfigurationResponse
     */
    public function updateContainerConfigurationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->contextPath) {
            @$query['ContextPath'] = $request->contextPath;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->httpPort) {
            @$query['HttpPort'] = $request->httpPort;
        }

        if (null !== $request->maxThreads) {
            @$query['MaxThreads'] = $request->maxThreads;
        }

        if (null !== $request->URIEncoding) {
            @$query['URIEncoding'] = $request->URIEncoding;
        }

        if (null !== $request->useBodyEncoding) {
            @$query['UseBodyEncoding'] = $request->useBodyEncoding;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContainerConfiguration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/container_config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateContainerConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the Tomcat container for an application or application instance group in an Elastic Compute Service (ECS) cluster.
     *
     * @param request - UpdateContainerConfigurationRequest
     *
     * @returns UpdateContainerConfigurationResponse
     *
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
     * Changes the health check URL for an application.
     *
     * @param request - UpdateHealthCheckUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHealthCheckUrlResponse
     *
     * @param UpdateHealthCheckUrlRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateHealthCheckUrlResponse
     */
    public function updateHealthCheckUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->hcURL) {
            @$query['hcURL'] = $request->hcURL;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHealthCheckUrl',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/modify_hc_url',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHealthCheckUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the health check URL for an application.
     *
     * @param request - UpdateHealthCheckUrlRequest
     *
     * @returns UpdateHealthCheckUrlResponse
     *
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
     * Mounts a script to an application or application instance group.
     *
     * @param request - UpdateHookConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHookConfigurationResponse
     *
     * @param UpdateHookConfigurationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateHookConfigurationResponse
     */
    public function updateHookConfigurationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->hooks) {
            @$query['Hooks'] = $request->hooks;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHookConfiguration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/app/config_app_hook_json',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHookConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mounts a script to an application or application instance group.
     *
     * @param request - UpdateHookConfigurationRequest
     *
     * @returns UpdateHookConfigurationResponse
     *
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
     * Configures the Java virtual machine (JVM) parameters for an application or an instance group where the application is deployed.
     *
     * @param request - UpdateJvmConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJvmConfigurationResponse
     *
     * @param UpdateJvmConfigurationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateJvmConfigurationResponse
     */
    public function updateJvmConfigurationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxHeapSize) {
            @$query['MaxHeapSize'] = $request->maxHeapSize;
        }

        if (null !== $request->maxPermSize) {
            @$query['MaxPermSize'] = $request->maxPermSize;
        }

        if (null !== $request->minHeapSize) {
            @$query['MinHeapSize'] = $request->minHeapSize;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateJvmConfiguration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/app/app_jvm_config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateJvmConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the Java virtual machine (JVM) parameters for an application or an instance group where the application is deployed.
     *
     * @param request - UpdateJvmConfigurationRequest
     *
     * @returns UpdateJvmConfigurationResponse
     *
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
     * Modifies basic information about an application that is deployed in a Kubernetes cluster.
     *
     * @param request - UpdateK8sApplicationBaseInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sApplicationBaseInfoResponse
     *
     * @param UpdateK8sApplicationBaseInfoRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateK8sApplicationBaseInfoResponse
     */
    public function updateK8sApplicationBaseInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sApplicationBaseInfo',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/update_app_basic_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateK8sApplicationBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies basic information about an application that is deployed in a Kubernetes cluster.
     *
     * @param request - UpdateK8sApplicationBaseInfoRequest
     *
     * @returns UpdateK8sApplicationBaseInfoResponse
     *
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
     * Updates the configuration of an application in a Container Service for Kubernetes (ACK) or Serverless Kubernetes cluster.
     *
     * @param request - UpdateK8sApplicationConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sApplicationConfigResponse
     *
     * @param UpdateK8sApplicationConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateK8sApplicationConfigResponse
     */
    public function updateK8sApplicationConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->cpuLimit) {
            @$query['CpuLimit'] = $request->cpuLimit;
        }

        if (null !== $request->cpuRequest) {
            @$query['CpuRequest'] = $request->cpuRequest;
        }

        if (null !== $request->ephemeralStorageLimit) {
            @$query['EphemeralStorageLimit'] = $request->ephemeralStorageLimit;
        }

        if (null !== $request->ephemeralStorageRequest) {
            @$query['EphemeralStorageRequest'] = $request->ephemeralStorageRequest;
        }

        if (null !== $request->mcpuLimit) {
            @$query['McpuLimit'] = $request->mcpuLimit;
        }

        if (null !== $request->mcpuRequest) {
            @$query['McpuRequest'] = $request->mcpuRequest;
        }

        if (null !== $request->memoryLimit) {
            @$query['MemoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->memoryRequest) {
            @$query['MemoryRequest'] = $request->memoryRequest;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sApplicationConfig',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_app_configuration',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateK8sApplicationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of an application in a Container Service for Kubernetes (ACK) or Serverless Kubernetes cluster.
     *
     * @param request - UpdateK8sApplicationConfigRequest
     *
     * @returns UpdateK8sApplicationConfigResponse
     *
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
     * Modifies a Kubernetes ConfigMap.
     *
     * @param request - UpdateK8sConfigMapRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sConfigMapResponse
     *
     * @param UpdateK8sConfigMapRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateK8sConfigMapResponse
     */
    public function updateK8sConfigMapWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sConfigMap',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_config_map',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateK8sConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Kubernetes ConfigMap.
     *
     * @param request - UpdateK8sConfigMapRequest
     *
     * @returns UpdateK8sConfigMapResponse
     *
     * @param UpdateK8sConfigMapRequest $request
     *
     * @return UpdateK8sConfigMapResponse
     */
    public function updateK8sConfigMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sConfigMapWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates an ingress.
     *
     * @param request - UpdateK8sIngressRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sIngressRuleResponse
     *
     * @param UpdateK8sIngressRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateK8sIngressRuleResponse
     */
    public function updateK8sIngressRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ingressConf) {
            @$query['IngressConf'] = $request->ingressConf;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sIngressRule',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_ingress',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateK8sIngressRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an ingress.
     *
     * @param request - UpdateK8sIngressRuleRequest
     *
     * @returns UpdateK8sIngressRuleResponse
     *
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
     * Updates a specified resource in a Kubernetes cluster.
     *
     * @remarks
     * > You can update only Deployments.
     *
     * @param request - UpdateK8sResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sResourceResponse
     *
     * @param UpdateK8sResourceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateK8sResourceResponse
     */
    public function updateK8sResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->resourceContent) {
            @$body['ResourceContent'] = $request->resourceContent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sResource',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/oam/update_k8s_resource_config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateK8sResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a specified resource in a Kubernetes cluster.
     *
     * @remarks
     * > You can update only Deployments.
     *
     * @param request - UpdateK8sResourceRequest
     *
     * @returns UpdateK8sResourceResponse
     *
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
     * Modifies a Kubernetes Secret.
     *
     * @param request - UpdateK8sSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sSecretResponse
     *
     * @param UpdateK8sSecretRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateK8sSecretResponse
     */
    public function updateK8sSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->base64Encoded) {
            @$body['Base64Encoded'] = $request->base64Encoded;
        }

        if (null !== $request->certId) {
            @$body['CertId'] = $request->certId;
        }

        if (null !== $request->certRegionId) {
            @$body['CertRegionId'] = $request->certRegionId;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sSecret',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_secret',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateK8sSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Kubernetes Secret.
     *
     * @param request - UpdateK8sSecretRequest
     *
     * @returns UpdateK8sSecretResponse
     *
     * @param UpdateK8sSecretRequest $request
     *
     * @return UpdateK8sSecretResponse
     */
    public function updateK8sSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates an application service in a Kubernetes cluster.
     *
     * @param request - UpdateK8sServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sServiceResponse
     *
     * @param UpdateK8sServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateK8sServiceResponse
     */
    public function updateK8sServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->externalTrafficPolicy) {
            @$query['ExternalTrafficPolicy'] = $request->externalTrafficPolicy;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->servicePorts) {
            @$query['ServicePorts'] = $request->servicePorts;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sService',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_service',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateK8sServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an application service in a Kubernetes cluster.
     *
     * @param request - UpdateK8sServiceRequest
     *
     * @returns UpdateK8sServiceResponse
     *
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
     * Updates the Server Load Balancer (SLB) instance bound to an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - UpdateK8sSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sSlbResponse
     *
     * @param UpdateK8sSlbRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateK8sSlbResponse
     */
    public function updateK8sSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->disableForceOverride) {
            @$query['DisableForceOverride'] = $request->disableForceOverride;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->servicePortInfos) {
            @$query['ServicePortInfos'] = $request->servicePortInfos;
        }

        if (null !== $request->slbName) {
            @$query['SlbName'] = $request->slbName;
        }

        if (null !== $request->slbProtocol) {
            @$query['SlbProtocol'] = $request->slbProtocol;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->targetPort) {
            @$query['TargetPort'] = $request->targetPort;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sSlb',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/acs/k8s_slb_binding',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateK8sSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Server Load Balancer (SLB) instance bound to an application that is deployed in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - UpdateK8sSlbRequest
     *
     * @returns UpdateK8sSlbResponse
     *
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
     * 更新本地设置.
     *
     * @param request - UpdateLocalitySettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLocalitySettingResponse
     *
     * @param UpdateLocalitySettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateLocalitySettingResponse
     */
    public function updateLocalitySettingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLocalitySetting',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/sp/applications/locality/setting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLocalitySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新本地设置.
     *
     * @param request - UpdateLocalitySettingRequest
     *
     * @returns UpdateLocalitySettingResponse
     *
     * @param UpdateLocalitySettingRequest $request
     *
     * @return UpdateLocalitySettingResponse
     */
    public function updateLocalitySetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLocalitySettingWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies a role.
     *
     * @param request - UpdateRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionData) {
            @$query['ActionData'] = $request->actionData;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRole',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/account/edit_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a role.
     *
     * @param request - UpdateRoleRequest
     *
     * @returns UpdateRoleResponse
     *
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
     * Configures a Logstore for an application.
     *
     * @param request - UpdateSlsLogStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSlsLogStoreResponse
     *
     * @param UpdateSlsLogStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSlsLogStoreResponse
     */
    public function updateSlsLogStoreWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->configs) {
            @$body['Configs'] = $request->configs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSlsLogStore',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/k8s/sls/update_sls_log_store',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSlsLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a Logstore for an application.
     *
     * @param request - UpdateSlsLogStoreRequest
     *
     * @returns UpdateSlsLogStoreResponse
     *
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
     * 更新泳道.
     *
     * @param request - UpdateSwimmingLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSwimmingLaneResponse
     *
     * @param UpdateSwimmingLaneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSwimmingLaneResponse
     */
    public function updateSwimmingLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInfos) {
            @$query['AppInfos'] = $request->appInfos;
        }

        if (null !== $request->enableRules) {
            @$query['EnableRules'] = $request->enableRules;
        }

        if (null !== $request->entryRules) {
            @$query['EntryRules'] = $request->entryRules;
        }

        if (null !== $request->laneId) {
            @$query['LaneId'] = $request->laneId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSwimmingLane',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lanes',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSwimmingLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新泳道.
     *
     * @param request - UpdateSwimmingLaneRequest
     *
     * @returns UpdateSwimmingLaneResponse
     *
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
     * Updates a lane group.
     *
     * @param request - UpdateSwimmingLaneGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSwimmingLaneGroupResponse
     *
     * @param UpdateSwimmingLaneGroupRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSwimmingLaneGroupResponse
     */
    public function updateSwimmingLaneGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->entryApp) {
            @$query['EntryApp'] = $request->entryApp;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSwimmingLaneGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/v5/trafficmgnt/swimming_lane_groups',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSwimmingLaneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a lane group.
     *
     * @param request - UpdateSwimmingLaneGroupRequest
     *
     * @returns UpdateSwimmingLaneGroupResponse
     *
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
}
