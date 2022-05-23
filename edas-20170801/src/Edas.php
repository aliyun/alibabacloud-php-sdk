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
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\DisableMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByConsumerAppIdRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByConsumerAppIdResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\RemoveMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\RemoveMockRuleResponse;
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
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateMockRuleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateMockRuleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSlsLogStoreRequest;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSlsLogStoreResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Edas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
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
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortAndRollbackChangeOrder',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/change_order_abort_and_rollback',
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/change_order_abort',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AbortChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddLogPath',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/log/popListLogDirs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLogPathResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->consumerAppsJson)) {
            $query['ConsumerAppsJson'] = $request->consumerAppsJson;
        }
        if (!Utils::isUnset($request->dubboMockItemJson)) {
            $query['DubboMockItemJson'] = $request->dubboMockItemJson;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->extraJson)) {
            $query['ExtraJson'] = $request->extraJson;
        }
        if (!Utils::isUnset($request->mockType)) {
            $query['MockType'] = $request->mockType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->providerAppId)) {
            $query['ProviderAppId'] = $request->providerAppId;
        }
        if (!Utils::isUnset($request->providerAppName)) {
            $query['ProviderAppName'] = $request->providerAppName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->scMockItemJson)) {
            $query['ScMockItemJson'] = $request->scMockItemJson;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMockRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/addMockRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/authorize_app',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AuthorizeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeResourceGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/authorize_res_group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AuthorizeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->roleIds)) {
            $query['RoleIds'] = $request->roleIds;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeRole',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/authorize_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AuthorizeRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deployGroupId)) {
            $query['DeployGroupId'] = $request->deployGroupId;
        }
        if (!Utils::isUnset($request->listenerHealthCheckUrl)) {
            $query['ListenerHealthCheckUrl'] = $request->listenerHealthCheckUrl;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->VForwardingUrlRule)) {
            $query['VForwardingUrlRule'] = $request->VForwardingUrlRule;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        if (!Utils::isUnset($request->VServerGroupName)) {
            $query['VServerGroupName'] = $request->VServerGroupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindEcsSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/slb/bind_slb',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindEcsSlbResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->servicePortInfos)) {
            $query['ServicePortInfos'] = $request->servicePortInfos;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->slbProtocol)) {
            $query['SlbProtocol'] = $request->slbProtocol;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->targetPort)) {
            $query['TargetPort'] = $request->targetPort;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindK8sSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_slb_binding',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindK8sSlbResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->slbIp)) {
            $query['SlbIp'] = $request->slbIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->VServerGroupId)) {
            $query['VServerGroupId'] = $request->VServerGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/app/bind_slb_json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindSlbResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            $query['EccInfo'] = $request->eccInfo;
        }
        if (!Utils::isUnset($request->forceStatus)) {
            $query['ForceStatus'] = $request->forceStatus;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeDeployGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_change_group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'ContinuePipeline',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/pipeline_batch_confirm',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ContinuePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertK8sResource',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/k8s_resource_convert',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConvertK8sResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->scalingRuleTrigger)) {
            $query['ScalingRuleTrigger'] = $request->scalingRuleTrigger;
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/eam/scale/application_scaling_rule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateConfigTemplateResponse
     */
    public function createConfigTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigTemplate',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/config_template',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIDCImportCommand',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/create_idc_import_command',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIDCImportCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateK8sConfigMapRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateK8sConfigMapResponse
     */
    public function createK8sConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateK8sConfigMap',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_config_map',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateK8sConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ingressConf)) {
            $query['IngressConf'] = $request->ingressConf;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateK8sIngressRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_ingress',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateK8sIngressRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateK8sSecretRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateK8sSecretResponse
     */
    public function createK8sSecretWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->base64Encoded)) {
            $body['Base64Encoded'] = $request->base64Encoded;
        }
        if (!Utils::isUnset($request->certId)) {
            $body['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certRegionId)) {
            $body['CertRegionId'] = $request->certRegionId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateK8sSecret',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_secret',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateK8sSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->servicePorts)) {
            $query['ServicePorts'] = $request->servicePorts;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateK8sService',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_service',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateK8sServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_delete_app',
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/eam/scale/application_scaling_rule',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterMemberId)) {
            $query['ClusterMemberId'] = $request->clusterMemberId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterMember',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster_member',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteConfigTemplateResponse
     */
    public function deleteConfigTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigTemplate',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/config_template',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeployGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/deploy_group',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['EcuId'] = $request->ecuId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEcu',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/delete_ecu',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEcuResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_apps',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteK8sConfigMapRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteK8sConfigMapResponse
     */
    public function deleteK8sConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteK8sConfigMap',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_config_map',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteK8sConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteK8sIngressRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_ingress',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteK8sIngressRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteK8sSecretRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteK8sSecretResponse
     */
    public function deleteK8sSecretWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteK8sSecret',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_secret',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteK8sSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteK8sService',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_service',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteK8sServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogPath',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/log/popListLogDirs',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLogPathResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['RoleId'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRole',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/delete_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/service/serviceGroups',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionTag)) {
            $query['RegionTag'] = $request->regionTag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserDefineRegion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/user_region_def',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUserDefineRegionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appEnv)) {
            $query['AppEnv'] = $request->appEnv;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->batch)) {
            $query['Batch'] = $request->batch;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            $query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            $query['BuildPackId'] = $request->buildPackId;
        }
        if (!Utils::isUnset($request->componentIds)) {
            $query['ComponentIds'] = $request->componentIds;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->gray)) {
            $query['Gray'] = $request->gray;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            $query['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->releaseType)) {
            $query['ReleaseType'] = $request->releaseType;
        }
        if (!Utils::isUnset($request->trafficControlStrategy)) {
            $query['TrafficControlStrategy'] = $request->trafficControlStrategy;
        }
        if (!Utils::isUnset($request->warUrl)) {
            $query['WarUrl'] = $request->warUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_deploy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->args)) {
            $query['Args'] = $request->args;
        }
        if (!Utils::isUnset($request->batchTimeout)) {
            $query['BatchTimeout'] = $request->batchTimeout;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            $query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            $query['BuildPackId'] = $request->buildPackId;
        }
        if (!Utils::isUnset($request->changeOrderDesc)) {
            $query['ChangeOrderDesc'] = $request->changeOrderDesc;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->configMountDescs)) {
            $query['ConfigMountDescs'] = $request->configMountDescs;
        }
        if (!Utils::isUnset($request->cpuLimit)) {
            $query['CpuLimit'] = $request->cpuLimit;
        }
        if (!Utils::isUnset($request->cpuRequest)) {
            $query['CpuRequest'] = $request->cpuRequest;
        }
        if (!Utils::isUnset($request->customAffinity)) {
            $query['CustomAffinity'] = $request->customAffinity;
        }
        if (!Utils::isUnset($request->customTolerations)) {
            $query['CustomTolerations'] = $request->customTolerations;
        }
        if (!Utils::isUnset($request->deployAcrossNodes)) {
            $query['DeployAcrossNodes'] = $request->deployAcrossNodes;
        }
        if (!Utils::isUnset($request->deployAcrossZones)) {
            $query['DeployAcrossZones'] = $request->deployAcrossZones;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            $query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->emptyDirs)) {
            $query['EmptyDirs'] = $request->emptyDirs;
        }
        if (!Utils::isUnset($request->enableAhas)) {
            $query['EnableAhas'] = $request->enableAhas;
        }
        if (!Utils::isUnset($request->enableEmptyPushReject)) {
            $query['EnableEmptyPushReject'] = $request->enableEmptyPushReject;
        }
        if (!Utils::isUnset($request->enableLosslessRule)) {
            $query['EnableLosslessRule'] = $request->enableLosslessRule;
        }
        if (!Utils::isUnset($request->envFroms)) {
            $query['EnvFroms'] = $request->envFroms;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->imageTag)) {
            $query['ImageTag'] = $request->imageTag;
        }
        if (!Utils::isUnset($request->JDK)) {
            $query['JDK'] = $request->JDK;
        }
        if (!Utils::isUnset($request->javaStartUpConfig)) {
            $query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->liveness)) {
            $query['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->localVolume)) {
            $query['LocalVolume'] = $request->localVolume;
        }
        if (!Utils::isUnset($request->losslessRuleAligned)) {
            $query['LosslessRuleAligned'] = $request->losslessRuleAligned;
        }
        if (!Utils::isUnset($request->losslessRuleDelayTime)) {
            $query['LosslessRuleDelayTime'] = $request->losslessRuleDelayTime;
        }
        if (!Utils::isUnset($request->losslessRuleFuncType)) {
            $query['LosslessRuleFuncType'] = $request->losslessRuleFuncType;
        }
        if (!Utils::isUnset($request->losslessRuleRelated)) {
            $query['LosslessRuleRelated'] = $request->losslessRuleRelated;
        }
        if (!Utils::isUnset($request->losslessRuleWarmupTime)) {
            $query['LosslessRuleWarmupTime'] = $request->losslessRuleWarmupTime;
        }
        if (!Utils::isUnset($request->mcpuLimit)) {
            $query['McpuLimit'] = $request->mcpuLimit;
        }
        if (!Utils::isUnset($request->mcpuRequest)) {
            $query['McpuRequest'] = $request->mcpuRequest;
        }
        if (!Utils::isUnset($request->memoryLimit)) {
            $query['MemoryLimit'] = $request->memoryLimit;
        }
        if (!Utils::isUnset($request->memoryRequest)) {
            $query['MemoryRequest'] = $request->memoryRequest;
        }
        if (!Utils::isUnset($request->mountDescs)) {
            $query['MountDescs'] = $request->mountDescs;
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
        if (!Utils::isUnset($request->packageVersionId)) {
            $query['PackageVersionId'] = $request->packageVersionId;
        }
        if (!Utils::isUnset($request->postStart)) {
            $query['PostStart'] = $request->postStart;
        }
        if (!Utils::isUnset($request->preStop)) {
            $query['PreStop'] = $request->preStop;
        }
        if (!Utils::isUnset($request->pvcMountDescs)) {
            $query['PvcMountDescs'] = $request->pvcMountDescs;
        }
        if (!Utils::isUnset($request->readiness)) {
            $query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->runtimeClassName)) {
            $query['RuntimeClassName'] = $request->runtimeClassName;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            $query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->trafficControlStrategy)) {
            $query['TrafficControlStrategy'] = $request->trafficControlStrategy;
        }
        if (!Utils::isUnset($request->updateStrategy)) {
            $query['UpdateStrategy'] = $request->updateStrategy;
        }
        if (!Utils::isUnset($request->uriEncoding)) {
            $query['UriEncoding'] = $request->uriEncoding;
        }
        if (!Utils::isUnset($request->useBodyEncoding)) {
            $query['UseBodyEncoding'] = $request->useBodyEncoding;
        }
        if (!Utils::isUnset($request->volumesStr)) {
            $query['VolumesStr'] = $request->volumesStr;
        }
        if (!Utils::isUnset($request->webContainer)) {
            $query['WebContainer'] = $request->webContainer;
        }
        if (!Utils::isUnset($request->webContainerConfig)) {
            $query['WebContainerConfig'] = $request->webContainerConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_apps',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeployK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeAppInstanceListRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAppInstanceListResponse
     */
    public function describeAppInstanceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->withNodeInfo)) {
            $query['WithNodeInfo'] = $request->withNodeInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppInstanceList',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/app_instance_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/eam/scale/application_scaling_rules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/eam/scale/disable_application_scaling_rule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableMockRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/disableMockRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/eam/scale/enable_application_scaling_rule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableMockRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/enableMockRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->consumerAppName)) {
            $query['ConsumerAppName'] = $request->consumerAppName;
        }
        if (!Utils::isUnset($request->mockType)) {
            $query['MockType'] = $request->mockType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->providerAppName)) {
            $query['ProviderAppName'] = $request->providerAppName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountMockRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/getAccountMockRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAccountMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAppDeploymentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAppDeploymentResponse
     */
    public function getAppDeploymentWithOptions($request, $headers, $runtime)
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
            'action'      => 'GetAppDeployment',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/app_deployment',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/app_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChangeOrderInfo',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/change_order_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetChangeOrderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContainerConfiguration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/container_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetContainerConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetJavaStartUpConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetJavaStartUpConfigResponse
     */
    public function getJavaStartUpConfigWithOptions($request, $headers, $runtime)
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
            'action'      => 'GetJavaStartUpConfig',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/java_start_up_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJavaStartUpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJvmConfiguration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/app_jvm_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJvmConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_application',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionTag)) {
            $query['RegionTag'] = $request->regionTag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetK8sCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s_clusters',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetK8sClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetK8sServices',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_service',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetK8sServicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->consumerAppId)) {
            $query['ConsumerAppId'] = $request->consumerAppId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMockRuleByConsumerAppId',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/getMockRuleByConsumerAppId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMockRuleByConsumerAppIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->providerAppId)) {
            $query['ProviderAppId'] = $request->providerAppId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMockRuleByProviderAppId',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/getMockRuleByProviderAppId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMockRuleByProviderAppIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'GetPackageStorageCredential',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/package_storage_credential',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPackageStorageCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScalingRules',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/scalingRules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecureToken',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/secure_token',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSecureTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            $query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->registryType)) {
            $query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceConsumersPage',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mseForOam/getServiceConsumersPage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceConsumersPageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            $query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->registryType)) {
            $query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceDetail',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mseForOam/getServiceDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['searchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $query['searchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->side)) {
            $query['side'] = $request->side;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceListPage',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mseForOam/getServiceListPage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceListPageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            $query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->methodController)) {
            $query['methodController'] = $request->methodController;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['path'] = $request->path;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->registryType)) {
            $query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceMethodPage',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mseForOam/getServiceMethodPage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceMethodPageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            $query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->registryType)) {
            $query['registryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['serviceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceProvidersPage',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mseForOam/getServiceProvidersPage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceProvidersPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetWebContainerConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetWebContainerConfigResponse
     */
    public function getWebContainerConfigWithOptions($request, $headers, $runtime)
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
            'action'      => 'GetWebContainerConfig',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/web_container_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWebContainerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->enableAsm)) {
            $query['EnableAsm'] = $request->enableAsm;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportK8sCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/import_k8s_cluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImportK8sClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            $query['BuildPackId'] = $request->buildPackId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentIds)) {
            $query['ComponentIds'] = $request->componentIds;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ecuInfo)) {
            $query['EcuInfo'] = $request->ecuInfo;
        }
        if (!Utils::isUnset($request->enablePortCheck)) {
            $query['EnablePortCheck'] = $request->enablePortCheck;
        }
        if (!Utils::isUnset($request->enableUrlCheck)) {
            $query['EnableUrlCheck'] = $request->enableUrlCheck;
        }
        if (!Utils::isUnset($request->healthCheckURL)) {
            $query['HealthCheckURL'] = $request->healthCheckURL;
        }
        if (!Utils::isUnset($request->healthCheckUrl)) {
            $query['HealthCheckUrl'] = $request->healthCheckUrl;
        }
        if (!Utils::isUnset($request->hooks)) {
            $query['Hooks'] = $request->hooks;
        }
        if (!Utils::isUnset($request->jdk)) {
            $query['Jdk'] = $request->jdk;
        }
        if (!Utils::isUnset($request->jvmOptions)) {
            $query['JvmOptions'] = $request->jvmOptions;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->maxHeapSize)) {
            $query['MaxHeapSize'] = $request->maxHeapSize;
        }
        if (!Utils::isUnset($request->maxPermSize)) {
            $query['MaxPermSize'] = $request->maxPermSize;
        }
        if (!Utils::isUnset($request->mem)) {
            $query['Mem'] = $request->mem;
        }
        if (!Utils::isUnset($request->minHeapSize)) {
            $query['MinHeapSize'] = $request->minHeapSize;
        }
        if (!Utils::isUnset($request->packageType)) {
            $query['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->reservedPortStr)) {
            $query['ReservedPortStr'] = $request->reservedPortStr;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->webContainer)) {
            $query['WebContainer'] = $request->webContainer;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_create_app',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->iaasProvider)) {
            $query['IaasProvider'] = $request->iaasProvider;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->networkMode)) {
            $query['NetworkMode'] = $request->networkMode;
        }
        if (!Utils::isUnset($request->oversoldFactor)) {
            $query['OversoldFactor'] = $request->oversoldFactor;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['clusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['instanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->password)) {
            $query['password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertClusterMember',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster_member',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertClusterMemberResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->initPackageVersionId)) {
            $query['InitPackageVersionId'] = $request->initPackageVersionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertDeployGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/deploy_group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->applicationDescription)) {
            $query['ApplicationDescription'] = $request->applicationDescription;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            $query['BuildPackId'] = $request->buildPackId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->commandArgs)) {
            $query['CommandArgs'] = $request->commandArgs;
        }
        if (!Utils::isUnset($request->configMountDescs)) {
            $query['ConfigMountDescs'] = $request->configMountDescs;
        }
        if (!Utils::isUnset($request->csClusterId)) {
            $query['CsClusterId'] = $request->csClusterId;
        }
        if (!Utils::isUnset($request->customAffinity)) {
            $query['CustomAffinity'] = $request->customAffinity;
        }
        if (!Utils::isUnset($request->customTolerations)) {
            $query['CustomTolerations'] = $request->customTolerations;
        }
        if (!Utils::isUnset($request->deployAcrossNodes)) {
            $query['DeployAcrossNodes'] = $request->deployAcrossNodes;
        }
        if (!Utils::isUnset($request->deployAcrossZones)) {
            $query['DeployAcrossZones'] = $request->deployAcrossZones;
        }
        if (!Utils::isUnset($request->edasContainerVersion)) {
            $query['EdasContainerVersion'] = $request->edasContainerVersion;
        }
        if (!Utils::isUnset($request->emptyDirs)) {
            $query['EmptyDirs'] = $request->emptyDirs;
        }
        if (!Utils::isUnset($request->enableAhas)) {
            $query['EnableAhas'] = $request->enableAhas;
        }
        if (!Utils::isUnset($request->enableAsm)) {
            $query['EnableAsm'] = $request->enableAsm;
        }
        if (!Utils::isUnset($request->enableEmptyPushReject)) {
            $query['EnableEmptyPushReject'] = $request->enableEmptyPushReject;
        }
        if (!Utils::isUnset($request->enableLosslessRule)) {
            $query['EnableLosslessRule'] = $request->enableLosslessRule;
        }
        if (!Utils::isUnset($request->envFroms)) {
            $query['EnvFroms'] = $request->envFroms;
        }
        if (!Utils::isUnset($request->envs)) {
            $query['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->internetSlbId)) {
            $query['InternetSlbId'] = $request->internetSlbId;
        }
        if (!Utils::isUnset($request->internetSlbPort)) {
            $query['InternetSlbPort'] = $request->internetSlbPort;
        }
        if (!Utils::isUnset($request->internetSlbProtocol)) {
            $query['InternetSlbProtocol'] = $request->internetSlbProtocol;
        }
        if (!Utils::isUnset($request->internetTargetPort)) {
            $query['InternetTargetPort'] = $request->internetTargetPort;
        }
        if (!Utils::isUnset($request->intranetSlbId)) {
            $query['IntranetSlbId'] = $request->intranetSlbId;
        }
        if (!Utils::isUnset($request->intranetSlbPort)) {
            $query['IntranetSlbPort'] = $request->intranetSlbPort;
        }
        if (!Utils::isUnset($request->intranetSlbProtocol)) {
            $query['IntranetSlbProtocol'] = $request->intranetSlbProtocol;
        }
        if (!Utils::isUnset($request->intranetTargetPort)) {
            $query['IntranetTargetPort'] = $request->intranetTargetPort;
        }
        if (!Utils::isUnset($request->isMultilingualApp)) {
            $query['IsMultilingualApp'] = $request->isMultilingualApp;
        }
        if (!Utils::isUnset($request->JDK)) {
            $query['JDK'] = $request->JDK;
        }
        if (!Utils::isUnset($request->javaStartUpConfig)) {
            $query['JavaStartUpConfig'] = $request->javaStartUpConfig;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->limitCpu)) {
            $query['LimitCpu'] = $request->limitCpu;
        }
        if (!Utils::isUnset($request->limitMem)) {
            $query['LimitMem'] = $request->limitMem;
        }
        if (!Utils::isUnset($request->limitmCpu)) {
            $query['LimitmCpu'] = $request->limitmCpu;
        }
        if (!Utils::isUnset($request->liveness)) {
            $query['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->localVolume)) {
            $query['LocalVolume'] = $request->localVolume;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->losslessRuleAligned)) {
            $query['LosslessRuleAligned'] = $request->losslessRuleAligned;
        }
        if (!Utils::isUnset($request->losslessRuleDelayTime)) {
            $query['LosslessRuleDelayTime'] = $request->losslessRuleDelayTime;
        }
        if (!Utils::isUnset($request->losslessRuleFuncType)) {
            $query['LosslessRuleFuncType'] = $request->losslessRuleFuncType;
        }
        if (!Utils::isUnset($request->losslessRuleRelated)) {
            $query['LosslessRuleRelated'] = $request->losslessRuleRelated;
        }
        if (!Utils::isUnset($request->losslessRuleWarmupTime)) {
            $query['LosslessRuleWarmupTime'] = $request->losslessRuleWarmupTime;
        }
        if (!Utils::isUnset($request->mountDescs)) {
            $query['MountDescs'] = $request->mountDescs;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
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
        if (!Utils::isUnset($request->postStart)) {
            $query['PostStart'] = $request->postStart;
        }
        if (!Utils::isUnset($request->preStop)) {
            $query['PreStop'] = $request->preStop;
        }
        if (!Utils::isUnset($request->pvcMountDescs)) {
            $query['PvcMountDescs'] = $request->pvcMountDescs;
        }
        if (!Utils::isUnset($request->readiness)) {
            $query['Readiness'] = $request->readiness;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->requestsCpu)) {
            $query['RequestsCpu'] = $request->requestsCpu;
        }
        if (!Utils::isUnset($request->requestsMem)) {
            $query['RequestsMem'] = $request->requestsMem;
        }
        if (!Utils::isUnset($request->requestsmCpu)) {
            $query['RequestsmCpu'] = $request->requestsmCpu;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->runtimeClassName)) {
            $query['RuntimeClassName'] = $request->runtimeClassName;
        }
        if (!Utils::isUnset($request->slsConfigs)) {
            $query['SlsConfigs'] = $request->slsConfigs;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->uriEncoding)) {
            $query['UriEncoding'] = $request->uriEncoding;
        }
        if (!Utils::isUnset($request->useBodyEncoding)) {
            $query['UseBodyEncoding'] = $request->useBodyEncoding;
        }
        if (!Utils::isUnset($request->webContainer)) {
            $query['WebContainer'] = $request->webContainer;
        }
        if (!Utils::isUnset($request->webContainerConfig)) {
            $query['WebContainerConfig'] = $request->webContainerConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/create_k8s_app',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->debugEnable)) {
            $query['DebugEnable'] = $request->debugEnable;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionName)) {
            $query['RegionName'] = $request->regionName;
        }
        if (!Utils::isUnset($request->regionTag)) {
            $query['RegionTag'] = $request->regionTag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertOrUpdateRegion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/user_region_def',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertOrUpdateRegionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->actionData)) {
            $query['ActionData'] = $request->actionData;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertRole',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/create_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertServiceGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/service/serviceGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsertServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->doAsync)) {
            $query['DoAsync'] = $request->doAsync;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallAgent',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/ecss/install_agent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallAgentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListAliyunRegion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/region_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAliyunRegionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->logicalRegionIdFilter)) {
            $query['LogicalRegionIdFilter'] = $request->logicalRegionIdFilter;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/app_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationEcu',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/ecu_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApplicationEcuResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListAuthority',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/authority_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListBuildPack',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/build_pack_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBuildPackResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ecsList)) {
            $query['EcsList'] = $request->ecsList;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterMembers',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/cluster_member_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterMembersResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListComponents',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/components',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListConfigTemplatesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListConfigTemplatesResponse
     */
    public function listConfigTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigTemplates',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/config_template',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConfigTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/service/listConsumedServices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConsumedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['clusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConvertableEcu',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/convertable_ecu_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConvertableEcuResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/deploy_group_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeployGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['NetworkMode'] = $request->networkMode;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcsNotInCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/ecs_not_in_cluster',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsNotInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->act)) {
            $query['Act'] = $request->act;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcuByRegion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/ecu_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcuByRegionResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHistoryDeployVersion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/deploy_history_version_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHistoryDeployVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListK8sConfigMapsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListK8sConfigMapsResponse
     */
    public function listK8sConfigMapsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->showRelatedApps)) {
            $query['ShowRelatedApps'] = $request->showRelatedApps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListK8sConfigMaps',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_config_map',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListK8sConfigMapsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListK8sIngressRules',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_ingress',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListK8sIngressRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListK8sSecretsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListK8sSecretsResponse
     */
    public function listK8sSecretsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->showRelatedApps)) {
            $query['ShowRelatedApps'] = $request->showRelatedApps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListK8sSecrets',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_secret',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListK8sSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMethods',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/service/list_methods',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMethodsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/service/listPublishedServices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPublishedServicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecentChangeOrder',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/change_order_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRecentChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListResourceGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/reg_group_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListRole',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/role_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'ListRootStacks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/s2i/list_root_stack',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRootStacksResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceNum)) {
            $query['InstanceNum'] = $request->instanceNum;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        if (!Utils::isUnset($request->mem)) {
            $query['Mem'] = $request->mem;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScaleOutEcu',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/scale_out_ecu_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScaleOutEcuResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListServiceGroups',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/service/serviceGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/slb_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSlbResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListSubAccount',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/sub_account_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/tag/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['DebugEnable'] = $request->debugEnable;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserDefineRegion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/user_region_defs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserDefineRegionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'ListVpc',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/vpc_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVpcResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->logicalRegionId)) {
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateEcu',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/migrate_ecu',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateEcuResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->acceptEULA)) {
            $query['AcceptEULA'] = $request->acceptEULA;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->inCondition)) {
            $query['InCondition'] = $request->inCondition;
        }
        if (!Utils::isUnset($request->inCpu)) {
            $query['InCpu'] = $request->inCpu;
        }
        if (!Utils::isUnset($request->inDuration)) {
            $query['InDuration'] = $request->inDuration;
        }
        if (!Utils::isUnset($request->inEnable)) {
            $query['InEnable'] = $request->inEnable;
        }
        if (!Utils::isUnset($request->inInstanceNum)) {
            $query['InInstanceNum'] = $request->inInstanceNum;
        }
        if (!Utils::isUnset($request->inLoad)) {
            $query['InLoad'] = $request->inLoad;
        }
        if (!Utils::isUnset($request->inRT)) {
            $query['InRT'] = $request->inRT;
        }
        if (!Utils::isUnset($request->inStep)) {
            $query['InStep'] = $request->inStep;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->multiAzPolicy)) {
            $query['MultiAzPolicy'] = $request->multiAzPolicy;
        }
        if (!Utils::isUnset($request->outCPU)) {
            $query['OutCPU'] = $request->outCPU;
        }
        if (!Utils::isUnset($request->outCondition)) {
            $query['OutCondition'] = $request->outCondition;
        }
        if (!Utils::isUnset($request->outDuration)) {
            $query['OutDuration'] = $request->outDuration;
        }
        if (!Utils::isUnset($request->outEnable)) {
            $query['OutEnable'] = $request->outEnable;
        }
        if (!Utils::isUnset($request->outInstanceNum)) {
            $query['OutInstanceNum'] = $request->outInstanceNum;
        }
        if (!Utils::isUnset($request->outLoad)) {
            $query['OutLoad'] = $request->outLoad;
        }
        if (!Utils::isUnset($request->outRT)) {
            $query['OutRT'] = $request->outRT;
        }
        if (!Utils::isUnset($request->outStep)) {
            $query['OutStep'] = $request->outStep;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->resourceFrom)) {
            $query['ResourceFrom'] = $request->resourceFrom;
        }
        if (!Utils::isUnset($request->scalingPolicy)) {
            $query['ScalingPolicy'] = $request->scalingPolicy;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateInstanceId)) {
            $query['TemplateInstanceId'] = $request->templateInstanceId;
        }
        if (!Utils::isUnset($request->templateInstanceName)) {
            $query['TemplateInstanceName'] = $request->templateInstanceName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/scaling_rules',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryApplicationStatus',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/app_status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryApplicationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['EccId'] = $request->eccId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEccInfo',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/ecc',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryEccInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMigrateEcuList',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/migrate_ecu_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryMigrateEcuListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['LogicalRegionId'] = $request->logicalRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMigrateRegionList',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/migrate_region_select',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryMigrateRegionListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $params = new Params([
            'action'      => 'QueryRegionConfig',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/region_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryRegionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySlsLogStoreList',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/sls/query_sls_log_store_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySlsLogStoreListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveMockRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/removeMockRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            $query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_reset',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->eccInfo)) {
            $query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/restart_k8s_app',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RetryChangeOrderTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RetryChangeOrderTaskResponse
     */
    public function retryChangeOrderTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->retryStatus)) {
            $query['RetryStatus'] = $request->retryStatus;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryChangeOrderTask',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/task_retry',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryChangeOrderTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->batch)) {
            $query['Batch'] = $request->batch;
        }
        if (!Utils::isUnset($request->batchWaitTime)) {
            $query['BatchWaitTime'] = $request->batchWaitTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_rollback',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RollbackApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackChangeOrder',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/changeorder/rollback',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RollbackChangeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->eccInfo)) {
            $query['EccInfo'] = $request->eccInfo;
        }
        if (!Utils::isUnset($request->forceStatus)) {
            $query['ForceStatus'] = $request->forceStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleInApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_scale_in',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleInApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_apps',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deployGroup)) {
            $query['DeployGroup'] = $request->deployGroup;
        }
        if (!Utils::isUnset($request->ecuInfo)) {
            $query['EcuInfo'] = $request->ecuInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleOutApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_scale_out',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleOutApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceChargePeriod)) {
            $query['InstanceChargePeriod'] = $request->instanceChargePeriod;
        }
        if (!Utils::isUnset($request->instanceChargePeriodUnit)) {
            $query['InstanceChargePeriodUnit'] = $request->instanceChargePeriodUnit;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->scalingNum)) {
            $query['ScalingNum'] = $request->scalingNum;
        }
        if (!Utils::isUnset($request->scalingPolicy)) {
            $query['ScalingPolicy'] = $request->scalingPolicy;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateInstanceId)) {
            $query['TemplateInstanceId'] = $request->templateInstanceId;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleoutApplicationWithNewInstances',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/scaling/scale_out',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleoutApplicationWithNewInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->eccInfo)) {
            $query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/start_k8s_app',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->eccInfo)) {
            $query['EccInfo'] = $request->eccInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopK8sApplication',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/stop_k8s_app',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopK8sApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->enableAdvancedMonitoring)) {
            $query['EnableAdvancedMonitoring'] = $request->enableAdvancedMonitoring;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchAdvancedMonitoring',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/monitor/advancedMonitorInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SwitchAdvancedMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SynchronizeResource',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/pop_sync_resource',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SynchronizeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
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
            'action'      => 'TagResources',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/tag/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->targetClusterId)) {
            $query['TargetClusterId'] = $request->targetClusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransformClusterMember',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/resource/transform_cluster_member',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransformClusterMemberResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->slbName)) {
            $query['SlbName'] = $request->slbName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindK8sSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_slb_binding',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindK8sSlbResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->deleteListener)) {
            $query['DeleteListener'] = $request->deleteListener;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/app/unbind_slb_json',
            'method'      => 'POST',
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
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
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
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/tag/tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccountInfo',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/edit_account_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationBaseInfo',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/update_app_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->scalingRuleTrigger)) {
            $query['ScalingRuleTrigger'] = $request->scalingRuleTrigger;
        }
        if (!Utils::isUnset($request->scalingRuleType)) {
            $query['ScalingRuleType'] = $request->scalingRuleType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationScalingRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v1/eam/scale/application_scaling_rule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateConfigTemplateResponse
     */
    public function updateConfigTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigTemplate',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/config_template',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->buildPackId)) {
            $query['BuildPackId'] = $request->buildPackId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateContainer',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/changeorder/co_update_container',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateContainerResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->contextPath)) {
            $query['ContextPath'] = $request->contextPath;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->httpPort)) {
            $query['HttpPort'] = $request->httpPort;
        }
        if (!Utils::isUnset($request->maxThreads)) {
            $query['MaxThreads'] = $request->maxThreads;
        }
        if (!Utils::isUnset($request->URIEncoding)) {
            $query['URIEncoding'] = $request->URIEncoding;
        }
        if (!Utils::isUnset($request->useBodyEncoding)) {
            $query['UseBodyEncoding'] = $request->useBodyEncoding;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateContainerConfiguration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/container_config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateContainerConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->hcURL)) {
            $query['hcURL'] = $request->hcURL;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHealthCheckUrl',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/modify_hc_url',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHealthCheckUrlResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->hooks)) {
            $query['Hooks'] = $request->hooks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHookConfiguration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/app/config_app_hook_json',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHookConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxHeapSize)) {
            $query['MaxHeapSize'] = $request->maxHeapSize;
        }
        if (!Utils::isUnset($request->maxPermSize)) {
            $query['MaxPermSize'] = $request->maxPermSize;
        }
        if (!Utils::isUnset($request->minHeapSize)) {
            $query['MinHeapSize'] = $request->minHeapSize;
        }
        if (!Utils::isUnset($request->options)) {
            $query['Options'] = $request->options;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateJvmConfiguration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/app/app_jvm_config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateJvmConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sApplicationBaseInfo',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/update_app_basic_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sApplicationBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->cpuLimit)) {
            $query['CpuLimit'] = $request->cpuLimit;
        }
        if (!Utils::isUnset($request->cpuRequest)) {
            $query['CpuRequest'] = $request->cpuRequest;
        }
        if (!Utils::isUnset($request->mcpuLimit)) {
            $query['McpuLimit'] = $request->mcpuLimit;
        }
        if (!Utils::isUnset($request->mcpuRequest)) {
            $query['McpuRequest'] = $request->mcpuRequest;
        }
        if (!Utils::isUnset($request->memoryLimit)) {
            $query['MemoryLimit'] = $request->memoryLimit;
        }
        if (!Utils::isUnset($request->memoryRequest)) {
            $query['MemoryRequest'] = $request->memoryRequest;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sApplicationConfig',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_app_configuration',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sApplicationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateK8sConfigMapRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateK8sConfigMapResponse
     */
    public function updateK8sConfigMapWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sConfigMap',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_config_map',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sConfigMapResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ingressConf)) {
            $query['IngressConf'] = $request->ingressConf;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sIngressRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_ingress',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sIngressRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resourceContent)) {
            $body['ResourceContent'] = $request->resourceContent;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sResource',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/oam/update_k8s_resource_config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateK8sSecretRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateK8sSecretResponse
     */
    public function updateK8sSecretWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->base64Encoded)) {
            $body['Base64Encoded'] = $request->base64Encoded;
        }
        if (!Utils::isUnset($request->certId)) {
            $body['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certRegionId)) {
            $body['CertRegionId'] = $request->certRegionId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sSecret',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_secret',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->servicePorts)) {
            $query['ServicePorts'] = $request->servicePorts;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sService',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_service',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->disableForceOverride)) {
            $query['DisableForceOverride'] = $request->disableForceOverride;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->servicePortInfos)) {
            $query['ServicePortInfos'] = $request->servicePortInfos;
        }
        if (!Utils::isUnset($request->slbName)) {
            $query['SlbName'] = $request->slbName;
        }
        if (!Utils::isUnset($request->slbProtocol)) {
            $query['SlbProtocol'] = $request->slbProtocol;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->targetPort)) {
            $query['TargetPort'] = $request->targetPort;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sSlb',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/acs/k8s_slb_binding',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateK8sSlbResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->dubboMockItemJson)) {
            $query['DubboMockItemJson'] = $request->dubboMockItemJson;
        }
        if (!Utils::isUnset($request->extraJson)) {
            $query['ExtraJson'] = $request->extraJson;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->scMockItemJson)) {
            $query['ScMockItemJson'] = $request->scMockItemJson;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMockRule',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/sp/api/mock/updateMockRule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMockRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->actionData)) {
            $query['ActionData'] = $request->actionData;
        }
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRole',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/account/edit_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->configs)) {
            $body['Configs'] = $request->configs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSlsLogStore',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pop/v5/k8s/sls/update_sls_log_store',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSlsLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
