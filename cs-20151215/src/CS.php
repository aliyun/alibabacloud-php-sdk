<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesToNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesToNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelOperationPlanResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelTaskResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CheckControlPlaneLogEnableResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CleanClusterUserPermissionsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CleanClusterUserPermissionsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CleanUserPermissionsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CleanUserPermissionsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CleanUserPermissionsShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoRepairPolicyRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoRepairPolicyResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoscalingConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoscalingConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterDiagnosisRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterDiagnosisResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterInspectConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterInspectConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateNodePoolComponentInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateNodePoolComponentInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactGroupShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteAutoRepairPolicyResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterInspectConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodepoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodepoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteNodePoolComponentInstanceRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteNodePoolComponentInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteNodePoolComponentInstanceShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeletePolicyInstanceRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeletePolicyInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeployPolicyInstanceRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeployPolicyInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonMetadataRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonMetadataResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1Request;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1Response;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterVulsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsForRegionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsForRegionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePoliciesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyDetailsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeResourcesDeleteProtectionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeResourcesDeleteProtectionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeSubaccountK8sClusterUserConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeSubaccountK8sClusterUserConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserClusterNamespacesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserPermissionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAuditProjectResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterCheckResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisResultRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisResultResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallNodePoolComponentsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallNodePoolComponentsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAutoRepairPoliciesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstanceResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstanceNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstanceNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstanceNodesShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentsShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansForRegionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansForRegionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListUserKubeConfigStatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListUserKubeConfigStatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\MigrateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\MigrateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyAutoRepairPolicyRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyAutoRepairPolicyResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterAddonRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterAddonResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyPolicyInstanceRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyPolicyInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\OpenAckServiceRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\OpenAckServiceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseTaskResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveNodePoolNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveNodePoolNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveNodePoolNodesShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeTaskResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RevokeK8sClusterKubeConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RunClusterCheckRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RunClusterCheckResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RunClusterInspectRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RunClusterInspectResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RunNodeOperationRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RunNodeOperationResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScanClusterVulsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\StartAlertRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\StartAlertResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\StopAlertRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\StopAlertResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\SyncClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\TagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\TagResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateClusterAuditLogConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateClusterAuditLogConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateClusterInspectConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateClusterInspectConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateContactGroupForAlertRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateContactGroupForAlertResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateControlPlaneLogRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateControlPlaneLogResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateKMSEncryptionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateKMSEncryptionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentInstanceRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateResourcesDeleteProtectionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateResourcesDeleteProtectionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateUserPermissionsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateUserPermissionsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterNodepoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterNodepoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'cs.aliyuncs.com',
            'cn-beijing-finance-pop' => 'cs.aliyuncs.com',
            'cn-beijing-gov-1' => 'cs.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'cs.aliyuncs.com',
            'cn-edge-1' => 'cs.aliyuncs.com',
            'cn-fujian' => 'cs.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'cs.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cs.aliyuncs.com',
            'cn-hangzhou-test-306' => 'cs.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'cs.aliyuncs.com',
            'cn-qingdao-nebula' => 'cs.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'cs.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'cs.aliyuncs.com',
            'cn-shanghai-inner' => 'cs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cs.aliyuncs.com',
            'cn-shenzhen-inner' => 'cs.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'cs.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'cs.aliyuncs.com',
            'cn-wuhan' => 'cs.aliyuncs.com',
            'cn-yushanfang' => 'cs.aliyuncs.com',
            'cn-zhangbei' => 'cs.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'cs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'cs.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'cs.aliyuncs.com',
            'eu-west-1-oxs' => 'cs.aliyuncs.com',
            'rus-west-1-pop' => 'cs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds existing ECS instances to an ACK cluster. You can invoke this operation if you need to add a purchased cloud server to an ACK cluster as a worker node, or re-add a removed worker node instance to a node pool.
     *
     * @remarks
     * Read [Limits](https://help.aliyun.com/document_detail/86919.html) before calling this operation to ensure that the ECS instances to be added meet the requirements.
     *
     * @param request - AttachInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachInstancesResponse
     *
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cpuPolicy) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }

        if (null !== $request->formatDisk) {
            @$body['format_disk'] = $request->formatDisk;
        }

        if (null !== $request->imageId) {
            @$body['image_id'] = $request->imageId;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        if (null !== $request->isEdgeWorker) {
            @$body['is_edge_worker'] = $request->isEdgeWorker;
        }

        if (null !== $request->keepInstanceName) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }

        if (null !== $request->keyPair) {
            @$body['key_pair'] = $request->keyPair;
        }

        if (null !== $request->nodepoolId) {
            @$body['nodepool_id'] = $request->nodepoolId;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->rdsInstances) {
            @$body['rds_instances'] = $request->rdsInstances;
        }

        if (null !== $request->runtime) {
            @$body['runtime'] = $request->runtime;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->userData) {
            @$body['user_data'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/attach',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds existing ECS instances to an ACK cluster. You can invoke this operation if you need to add a purchased cloud server to an ACK cluster as a worker node, or re-add a removed worker node instance to a node pool.
     *
     * @remarks
     * Read [Limits](https://help.aliyun.com/document_detail/86919.html) before calling this operation to ensure that the ECS instances to be added meet the requirements.
     *
     * @param request - AttachInstancesRequest
     *
     * @returns AttachInstancesResponse
     *
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     *
     * @return AttachInstancesResponse
     */
    public function attachInstances($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachInstancesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Adds existing ECS instances to a node pool as worker nodes in an ACK cluster, or re-adds removed worker nodes to a node pool.
     *
     * @param request - AttachInstancesToNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachInstancesToNodePoolResponse
     *
     * @param string                           $ClusterId
     * @param string                           $NodepoolId
     * @param AttachInstancesToNodePoolRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return AttachInstancesToNodePoolResponse
     */
    public function attachInstancesToNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->formatDisk) {
            @$body['format_disk'] = $request->formatDisk;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        if (null !== $request->keepInstanceName) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachInstancesToNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '/attach',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AttachInstancesToNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds existing ECS instances to a node pool as worker nodes in an ACK cluster, or re-adds removed worker nodes to a node pool.
     *
     * @param request - AttachInstancesToNodePoolRequest
     *
     * @returns AttachInstancesToNodePoolResponse
     *
     * @param string                           $ClusterId
     * @param string                           $NodepoolId
     * @param AttachInstancesToNodePoolRequest $request
     *
     * @return AttachInstancesToNodePoolResponse
     */
    public function attachInstancesToNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachInstancesToNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * Cancels the upgrade of an ACK cluster.
     *
     * @deprecated OpenAPI CancelClusterUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelClusterUpgradeResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgradeWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelClusterUpgrade',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '/upgrade/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CancelClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Cancels the upgrade of an ACK cluster.
     *
     * @deprecated OpenAPI CancelClusterUpgrade is deprecated
     *
     * @returns CancelClusterUpgradeResponse
     *
     * @param string $ClusterId
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgrade($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelClusterUpgradeWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Cancels the upgrade of a cluster component.
     *
     * @deprecated OpenAPI CancelComponentUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelComponentUpgradeResponse
     *
     * @param string         $clusterId
     * @param string         $componentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgradeWithOptions($clusterId, $componentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelComponentUpgrade',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/components/' . Url::percentEncode($componentId) . '/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CancelComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Cancels the upgrade of a cluster component.
     *
     * @deprecated OpenAPI CancelComponentUpgrade is deprecated
     *
     * @returns CancelComponentUpgradeResponse
     *
     * @param string $clusterId
     * @param string $componentId
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgrade($clusterId, $componentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelComponentUpgradeWithOptions($clusterId, $componentId, $headers, $runtime);
    }

    /**
     * Cancels an existing but unexecuted automated O&M task execution plan.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOperationPlanResponse
     *
     * @param string         $planId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelOperationPlanResponse
     */
    public function cancelOperationPlanWithOptions($planId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelOperationPlan',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/operation/plans/' . Url::percentEncode($planId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelOperationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an existing but unexecuted automated O&M task execution plan.
     *
     * @returns CancelOperationPlanResponse
     *
     * @param string $planId
     *
     * @return CancelOperationPlanResponse
     */
    public function cancelOperationPlan($planId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelOperationPlanWithOptions($planId, $headers, $runtime);
    }

    /**
     * Cancels the execution of a cluster task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelTask',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the execution of a cluster task.
     *
     * @returns CancelTaskResponse
     *
     * @param string $taskId
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * Queries the log configuration of control plane components in an ACK managed cluster. ACK managed clusters support collecting control plane component logs and delivering them to your Simple Log Service (SLS) project. Control plane components include core components such as Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager. You can call this operation to query the current log configuration of control plane components, including the log retention period and collected components.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckControlPlaneLogEnableResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CheckControlPlaneLogEnableResponse
     */
    public function checkControlPlaneLogEnableWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CheckControlPlaneLogEnable',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/controlplanelog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckControlPlaneLogEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log configuration of control plane components in an ACK managed cluster. ACK managed clusters support collecting control plane component logs and delivering them to your Simple Log Service (SLS) project. Control plane components include core components such as Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager. You can call this operation to query the current log configuration of control plane components, including the log retention period and collected components.
     *
     * @returns CheckControlPlaneLogEnableResponse
     *
     * @param string $ClusterId
     *
     * @return CheckControlPlaneLogEnableResponse
     */
    public function checkControlPlaneLogEnable($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkControlPlaneLogEnableWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Checks whether the current service account is granted the specified service role permissions. Container Service for Kubernetes can call other cloud services related to the service role, such as ECS, OSS, NAS, and SLB, only after the corresponding role permissions are granted.
     *
     * @param request - CheckServiceRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceRoleResponse
     *
     * @param CheckServiceRoleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CheckServiceRoleResponse
     */
    public function checkServiceRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roles) {
            @$body['roles'] = $request->roles;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckServiceRole',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/ram/check-service-role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckServiceRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the current service account is granted the specified service role permissions. Container Service for Kubernetes can call other cloud services related to the service role, such as ECS, OSS, NAS, and SLB, only after the corresponding role permissions are granted.
     *
     * @param request - CheckServiceRoleRequest
     *
     * @returns CheckServiceRoleResponse
     *
     * @param CheckServiceRoleRequest $request
     *
     * @return CheckServiceRoleResponse
     */
    public function checkServiceRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkServiceRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * Clears the issued KubeConfig credentials and Role-Based Access Control (RBAC) permissions of a specified user in a specified cluster. You can call this operation to clean up and revoke authorization for KubeConfig files that pose security risks.
     *
     * @remarks
     * > 1. You must have the permissions to manage Container Service for Kubernetes (CS). The required policy is AliyunCSFullAccess.
     * > 2. You cannot clear the permissions of an Alibaba Cloud account.
     * > 3. You cannot clear the permissions of the user who performs this operation.
     *
     * @param request - CleanClusterUserPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CleanClusterUserPermissionsResponse
     *
     * @param string                             $ClusterId
     * @param string                             $Uid
     * @param CleanClusterUserPermissionsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CleanClusterUserPermissionsResponse
     */
    public function cleanClusterUserPermissionsWithOptions($ClusterId, $Uid, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CleanClusterUserPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/cluster/' . Url::percentEncode($ClusterId) . '/user/' . Url::percentEncode($Uid) . '/permissions',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CleanClusterUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the issued KubeConfig credentials and Role-Based Access Control (RBAC) permissions of a specified user in a specified cluster. You can call this operation to clean up and revoke authorization for KubeConfig files that pose security risks.
     *
     * @remarks
     * > 1. You must have the permissions to manage Container Service for Kubernetes (CS). The required policy is AliyunCSFullAccess.
     * > 2. You cannot clear the permissions of an Alibaba Cloud account.
     * > 3. You cannot clear the permissions of the user who performs this operation.
     *
     * @param request - CleanClusterUserPermissionsRequest
     *
     * @returns CleanClusterUserPermissionsResponse
     *
     * @param string                             $ClusterId
     * @param string                             $Uid
     * @param CleanClusterUserPermissionsRequest $request
     *
     * @return CleanClusterUserPermissionsResponse
     */
    public function cleanClusterUserPermissions($ClusterId, $Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cleanClusterUserPermissionsWithOptions($ClusterId, $Uid, $request, $headers, $runtime);
    }

    /**
     * Cleans up and revokes the KubeConfig credentials and RBAC permissions issued to a specified user, such as resigned employees or users with frozen accounts.
     *
     * @remarks
     * >- Requires the permissions to manage Container Service for Kubernetes (CS) (AliyunCSFullAccess).
     * >- Clearing the permissions of Alibaba Cloud accounts is not supported.
     * >- Clearing the permissions of the calling user is not supported.
     *
     * @param tmpReq - CleanUserPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CleanUserPermissionsResponse
     *
     * @param string                      $Uid
     * @param CleanUserPermissionsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CleanUserPermissionsResponse
     */
    public function cleanUserPermissionsWithOptions($Uid, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CleanUserPermissionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clusterIds) {
            $request->clusterIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterIds, 'ClusterIds', 'simple');
        }

        $query = [];
        if (null !== $request->clusterIdsShrink) {
            @$query['ClusterIds'] = $request->clusterIdsShrink;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CleanUserPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/users/' . Url::percentEncode($Uid) . '/permissions',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CleanUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cleans up and revokes the KubeConfig credentials and RBAC permissions issued to a specified user, such as resigned employees or users with frozen accounts.
     *
     * @remarks
     * >- Requires the permissions to manage Container Service for Kubernetes (CS) (AliyunCSFullAccess).
     * >- Clearing the permissions of Alibaba Cloud accounts is not supported.
     * >- Clearing the permissions of the calling user is not supported.
     *
     * @param request - CleanUserPermissionsRequest
     *
     * @returns CleanUserPermissionsResponse
     *
     * @param string                      $Uid
     * @param CleanUserPermissionsRequest $request
     *
     * @return CleanUserPermissionsResponse
     */
    public function cleanUserPermissions($Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cleanUserPermissionsWithOptions($Uid, $request, $headers, $runtime);
    }

    /**
     * Creates a self-healing rule.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param request - CreateAutoRepairPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoRepairPolicyResponse
     *
     * @param string                        $clusterId
     * @param CreateAutoRepairPolicyRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAutoRepairPolicyResponse
     */
    public function createAutoRepairPolicyWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceSubType) {
            @$body['resource_sub_type'] = $request->resourceSubType;
        }

        if (null !== $request->resourceType) {
            @$body['resource_type'] = $request->resourceType;
        }

        if (null !== $request->rules) {
            @$body['rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAutoRepairPolicy',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/auto_repair_policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAutoRepairPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a self-healing rule.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param request - CreateAutoRepairPolicyRequest
     *
     * @returns CreateAutoRepairPolicyResponse
     *
     * @param string                        $clusterId
     * @param CreateAutoRepairPolicyRequest $request
     *
     * @return CreateAutoRepairPolicyResponse
     */
    public function createAutoRepairPolicy($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAutoRepairPolicyWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Creates an elastic scaling configuration that enables the system to automatically increase or decrease compute resources based on the configured scaling rules to meet the workload demands of your cluster. During the creation procedure, you can specify scaling metrics and thresholds, scale-out order, cool-down period, and more.
     *
     * @param request - CreateAutoscalingConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoscalingConfigResponse
     *
     * @param string                         $ClusterId
     * @param CreateAutoscalingConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAutoscalingConfigResponse
     */
    public function createAutoscalingConfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->coolDownDuration) {
            @$body['cool_down_duration'] = $request->coolDownDuration;
        }

        if (null !== $request->daemonsetEvictionForNodes) {
            @$body['daemonset_eviction_for_nodes'] = $request->daemonsetEvictionForNodes;
        }

        if (null !== $request->expander) {
            @$body['expander'] = $request->expander;
        }

        if (null !== $request->gpuUtilizationThreshold) {
            @$body['gpu_utilization_threshold'] = $request->gpuUtilizationThreshold;
        }

        if (null !== $request->maxGracefulTerminationSec) {
            @$body['max_graceful_termination_sec'] = $request->maxGracefulTerminationSec;
        }

        if (null !== $request->minReplicaCount) {
            @$body['min_replica_count'] = $request->minReplicaCount;
        }

        if (null !== $request->priorities) {
            @$body['priorities'] = $request->priorities;
        }

        if (null !== $request->recycleNodeDeletionEnabled) {
            @$body['recycle_node_deletion_enabled'] = $request->recycleNodeDeletionEnabled;
        }

        if (null !== $request->scaleDownEnabled) {
            @$body['scale_down_enabled'] = $request->scaleDownEnabled;
        }

        if (null !== $request->scaleUpFromZero) {
            @$body['scale_up_from_zero'] = $request->scaleUpFromZero;
        }

        if (null !== $request->scalerType) {
            @$body['scaler_type'] = $request->scalerType;
        }

        if (null !== $request->scanInterval) {
            @$body['scan_interval'] = $request->scanInterval;
        }

        if (null !== $request->skipNodesWithLocalStorage) {
            @$body['skip_nodes_with_local_storage'] = $request->skipNodesWithLocalStorage;
        }

        if (null !== $request->skipNodesWithSystemPods) {
            @$body['skip_nodes_with_system_pods'] = $request->skipNodesWithSystemPods;
        }

        if (null !== $request->unneededDuration) {
            @$body['unneeded_duration'] = $request->unneededDuration;
        }

        if (null !== $request->utilizationThreshold) {
            @$body['utilization_threshold'] = $request->utilizationThreshold;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAutoscalingConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/cluster/' . Url::percentEncode($ClusterId) . '/autoscale/config/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAutoscalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an elastic scaling configuration that enables the system to automatically increase or decrease compute resources based on the configured scaling rules to meet the workload demands of your cluster. During the creation procedure, you can specify scaling metrics and thresholds, scale-out order, cool-down period, and more.
     *
     * @param request - CreateAutoscalingConfigRequest
     *
     * @returns CreateAutoscalingConfigResponse
     *
     * @param string                         $ClusterId
     * @param CreateAutoscalingConfigRequest $request
     *
     * @return CreateAutoscalingConfigResponse
     */
    public function createAutoscalingConfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAutoscalingConfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Creates an ACK cluster, including ACK managed clusters, ACK Serverless clusters, ACK Edge clusters, and registered clusters. When you create a cluster, you configure cluster information, cluster components, and ACK-related cloud resources.
     *
     * @remarks
     * ### Generate OpenAPI request parameters by using the console
     * When you call the CreateCluster operation to create a cluster, if the API call fails due to incorrect combinations of request parameters, you can use the console to generate the required request parameter combinations. Perform the following steps:
     * 1. Log on to the [Container Service for Kubernetes (ACK) console](https://csnew.console.aliyun.com) and choose **Clusters** in the left-side navigation pane.
     * 1. On the **Clusters** page, click **Cluster Template**.
     * 1. In the dialog box, select the cluster type that you want to create, click Create, and then configure the cluster information on the cluster configuration page.
     * 1. After the configuration is complete, on the **Confirm Configuration** page, click **Equivalent Code** in the upper-right corner. The dialog box displays the parameter combinations required for creating the cluster. You can copy and use them.
     * >Notice: Starting from July 04, 2026, some request parameters will no longer take effect. For details about the changes and replacement parameter descriptions, see [Notice on changes to OpenAPI request and response parameters for ACK cluster management and OpenAPI offline](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - CreateClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessControlList) {
            @$body['access_control_list'] = $request->accessControlList;
        }

        if (null !== $request->addons) {
            @$body['addons'] = $request->addons;
        }

        if (null !== $request->apiAudiences) {
            @$body['api_audiences'] = $request->apiAudiences;
        }

        if (null !== $request->auditLogConfig) {
            @$body['audit_log_config'] = $request->auditLogConfig;
        }

        if (null !== $request->autoMode) {
            @$body['auto_mode'] = $request->autoMode;
        }

        if (null !== $request->autoRenew) {
            @$body['auto_renew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$body['auto_renew_period'] = $request->autoRenewPeriod;
        }

        if (null !== $request->chargeType) {
            @$body['charge_type'] = $request->chargeType;
        }

        if (null !== $request->cisEnabled) {
            @$body['cis_enabled'] = $request->cisEnabled;
        }

        if (null !== $request->clientToken) {
            @$body['client_token'] = $request->clientToken;
        }

        if (null !== $request->cloudMonitorFlags) {
            @$body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }

        if (null !== $request->clusterDomain) {
            @$body['cluster_domain'] = $request->clusterDomain;
        }

        if (null !== $request->clusterSpec) {
            @$body['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->clusterType) {
            @$body['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->containerCidr) {
            @$body['container_cidr'] = $request->containerCidr;
        }

        if (null !== $request->controlPlaneConfig) {
            @$body['control_plane_config'] = $request->controlPlaneConfig;
        }

        if (null !== $request->controlPlaneEndpointsConfig) {
            @$body['control_plane_endpoints_config'] = $request->controlPlaneEndpointsConfig;
        }

        if (null !== $request->controlplaneLogComponents) {
            @$body['controlplane_log_components'] = $request->controlplaneLogComponents;
        }

        if (null !== $request->controlplaneLogProject) {
            @$body['controlplane_log_project'] = $request->controlplaneLogProject;
        }

        if (null !== $request->controlplaneLogTtl) {
            @$body['controlplane_log_ttl'] = $request->controlplaneLogTtl;
        }

        if (null !== $request->cpuPolicy) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }

        if (null !== $request->customSan) {
            @$body['custom_san'] = $request->customSan;
        }

        if (null !== $request->deletionProtection) {
            @$body['deletion_protection'] = $request->deletionProtection;
        }

        if (null !== $request->disableRollback) {
            @$body['disable_rollback'] = $request->disableRollback;
        }

        if (null !== $request->enableRrsa) {
            @$body['enable_rrsa'] = $request->enableRrsa;
        }

        if (null !== $request->encryptionProviderKey) {
            @$body['encryption_provider_key'] = $request->encryptionProviderKey;
        }

        if (null !== $request->endpointPublicAccess) {
            @$body['endpoint_public_access'] = $request->endpointPublicAccess;
        }

        if (null !== $request->extraSans) {
            @$body['extra_sans'] = $request->extraSans;
        }

        if (null !== $request->formatDisk) {
            @$body['format_disk'] = $request->formatDisk;
        }

        if (null !== $request->imageId) {
            @$body['image_id'] = $request->imageId;
        }

        if (null !== $request->imageType) {
            @$body['image_type'] = $request->imageType;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        if (null !== $request->ipStack) {
            @$body['ip_stack'] = $request->ipStack;
        }

        if (null !== $request->isEnterpriseSecurityGroup) {
            @$body['is_enterprise_security_group'] = $request->isEnterpriseSecurityGroup;
        }

        if (null !== $request->keepInstanceName) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }

        if (null !== $request->keyPair) {
            @$body['key_pair'] = $request->keyPair;
        }

        if (null !== $request->kubernetesVersion) {
            @$body['kubernetes_version'] = $request->kubernetesVersion;
        }

        if (null !== $request->loadBalancerId) {
            @$body['load_balancer_id'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerSpec) {
            @$body['load_balancer_spec'] = $request->loadBalancerSpec;
        }

        if (null !== $request->loggingType) {
            @$body['logging_type'] = $request->loggingType;
        }

        if (null !== $request->loginPassword) {
            @$body['login_password'] = $request->loginPassword;
        }

        if (null !== $request->maintenanceWindow) {
            @$body['maintenance_window'] = $request->maintenanceWindow;
        }

        if (null !== $request->masterAutoRenew) {
            @$body['master_auto_renew'] = $request->masterAutoRenew;
        }

        if (null !== $request->masterAutoRenewPeriod) {
            @$body['master_auto_renew_period'] = $request->masterAutoRenewPeriod;
        }

        if (null !== $request->masterCount) {
            @$body['master_count'] = $request->masterCount;
        }

        if (null !== $request->masterInstanceChargeType) {
            @$body['master_instance_charge_type'] = $request->masterInstanceChargeType;
        }

        if (null !== $request->masterInstanceTypes) {
            @$body['master_instance_types'] = $request->masterInstanceTypes;
        }

        if (null !== $request->masterPeriod) {
            @$body['master_period'] = $request->masterPeriod;
        }

        if (null !== $request->masterPeriodUnit) {
            @$body['master_period_unit'] = $request->masterPeriodUnit;
        }

        if (null !== $request->masterSystemDiskCategory) {
            @$body['master_system_disk_category'] = $request->masterSystemDiskCategory;
        }

        if (null !== $request->masterSystemDiskPerformanceLevel) {
            @$body['master_system_disk_performance_level'] = $request->masterSystemDiskPerformanceLevel;
        }

        if (null !== $request->masterSystemDiskSize) {
            @$body['master_system_disk_size'] = $request->masterSystemDiskSize;
        }

        if (null !== $request->masterSystemDiskSnapshotPolicyId) {
            @$body['master_system_disk_snapshot_policy_id'] = $request->masterSystemDiskSnapshotPolicyId;
        }

        if (null !== $request->masterVswitchIds) {
            @$body['master_vswitch_ids'] = $request->masterVswitchIds;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->natGateway) {
            @$body['nat_gateway'] = $request->natGateway;
        }

        if (null !== $request->nodeCidrMask) {
            @$body['node_cidr_mask'] = $request->nodeCidrMask;
        }

        if (null !== $request->nodeNameMode) {
            @$body['node_name_mode'] = $request->nodeNameMode;
        }

        if (null !== $request->nodePortRange) {
            @$body['node_port_range'] = $request->nodePortRange;
        }

        if (null !== $request->nodepools) {
            @$body['nodepools'] = $request->nodepools;
        }

        if (null !== $request->numOfNodes) {
            @$body['num_of_nodes'] = $request->numOfNodes;
        }

        if (null !== $request->operationPolicy) {
            @$body['operation_policy'] = $request->operationPolicy;
        }

        if (null !== $request->osType) {
            @$body['os_type'] = $request->osType;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['period_unit'] = $request->periodUnit;
        }

        if (null !== $request->platform) {
            @$body['platform'] = $request->platform;
        }

        if (null !== $request->podVswitchIds) {
            @$body['pod_vswitch_ids'] = $request->podVswitchIds;
        }

        if (null !== $request->profile) {
            @$body['profile'] = $request->profile;
        }

        if (null !== $request->proxyMode) {
            @$body['proxy_mode'] = $request->proxyMode;
        }

        if (null !== $request->rdsInstances) {
            @$body['rds_instances'] = $request->rdsInstances;
        }

        if (null !== $request->regionId) {
            @$body['region_id'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resource_group_id'] = $request->resourceGroupId;
        }

        if (null !== $request->rrsaConfig) {
            @$body['rrsa_config'] = $request->rrsaConfig;
        }

        if (null !== $request->runtime) {
            @$body['runtime'] = $request->runtime;
        }

        if (null !== $request->securityGroupId) {
            @$body['security_group_id'] = $request->securityGroupId;
        }

        if (null !== $request->securityHardeningOs) {
            @$body['security_hardening_os'] = $request->securityHardeningOs;
        }

        if (null !== $request->serviceAccountIssuer) {
            @$body['service_account_issuer'] = $request->serviceAccountIssuer;
        }

        if (null !== $request->serviceCidr) {
            @$body['service_cidr'] = $request->serviceCidr;
        }

        if (null !== $request->serviceDiscoveryTypes) {
            @$body['service_discovery_types'] = $request->serviceDiscoveryTypes;
        }

        if (null !== $request->snatEntry) {
            @$body['snat_entry'] = $request->snatEntry;
        }

        if (null !== $request->socEnabled) {
            @$body['soc_enabled'] = $request->socEnabled;
        }

        if (null !== $request->sshFlags) {
            @$body['ssh_flags'] = $request->sshFlags;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->taints) {
            @$body['taints'] = $request->taints;
        }

        if (null !== $request->timeoutMins) {
            @$body['timeout_mins'] = $request->timeoutMins;
        }

        if (null !== $request->timezone) {
            @$body['timezone'] = $request->timezone;
        }

        if (null !== $request->userCa) {
            @$body['user_ca'] = $request->userCa;
        }

        if (null !== $request->userData) {
            @$body['user_data'] = $request->userData;
        }

        if (null !== $request->vpcid) {
            @$body['vpcid'] = $request->vpcid;
        }

        if (null !== $request->vswitchIds) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }

        if (null !== $request->workerAutoRenew) {
            @$body['worker_auto_renew'] = $request->workerAutoRenew;
        }

        if (null !== $request->workerAutoRenewPeriod) {
            @$body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }

        if (null !== $request->workerDataDisks) {
            @$body['worker_data_disks'] = $request->workerDataDisks;
        }

        if (null !== $request->workerInstanceChargeType) {
            @$body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }

        if (null !== $request->workerInstanceTypes) {
            @$body['worker_instance_types'] = $request->workerInstanceTypes;
        }

        if (null !== $request->workerPeriod) {
            @$body['worker_period'] = $request->workerPeriod;
        }

        if (null !== $request->workerPeriodUnit) {
            @$body['worker_period_unit'] = $request->workerPeriodUnit;
        }

        if (null !== $request->workerSystemDiskCategory) {
            @$body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }

        if (null !== $request->workerSystemDiskPerformanceLevel) {
            @$body['worker_system_disk_performance_level'] = $request->workerSystemDiskPerformanceLevel;
        }

        if (null !== $request->workerSystemDiskSize) {
            @$body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }

        if (null !== $request->workerSystemDiskSnapshotPolicyId) {
            @$body['worker_system_disk_snapshot_policy_id'] = $request->workerSystemDiskSnapshotPolicyId;
        }

        if (null !== $request->workerVswitchIds) {
            @$body['worker_vswitch_ids'] = $request->workerVswitchIds;
        }

        if (null !== $request->zoneId) {
            @$body['zone_id'] = $request->zoneId;
        }

        if (null !== $request->zoneIds) {
            @$body['zone_ids'] = $request->zoneIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ACK cluster, including ACK managed clusters, ACK Serverless clusters, ACK Edge clusters, and registered clusters. When you create a cluster, you configure cluster information, cluster components, and ACK-related cloud resources.
     *
     * @remarks
     * ### Generate OpenAPI request parameters by using the console
     * When you call the CreateCluster operation to create a cluster, if the API call fails due to incorrect combinations of request parameters, you can use the console to generate the required request parameter combinations. Perform the following steps:
     * 1. Log on to the [Container Service for Kubernetes (ACK) console](https://csnew.console.aliyun.com) and choose **Clusters** in the left-side navigation pane.
     * 1. On the **Clusters** page, click **Cluster Template**.
     * 1. In the dialog box, select the cluster type that you want to create, click Create, and then configure the cluster information on the cluster configuration page.
     * 1. After the configuration is complete, on the **Confirm Configuration** page, click **Equivalent Code** in the upper-right corner. The dialog box displays the parameter combinations required for creating the cluster. You can copy and use them.
     * >Notice: Starting from July 04, 2026, some request parameters will no longer take effect. For details about the changes and replacement parameter descriptions, see [Notice on changes to OpenAPI request and response parameters for ACK cluster management and OpenAPI offline](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * Initiates a cluster diagnosis.
     *
     * @param request - CreateClusterDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterDiagnosisResponse
     *
     * @param string                        $clusterId
     * @param CreateClusterDiagnosisRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateClusterDiagnosisResponse
     */
    public function createClusterDiagnosisWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->target) {
            @$body['target'] = $request->target;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClusterDiagnosis',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/diagnosis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateClusterDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a cluster diagnosis.
     *
     * @param request - CreateClusterDiagnosisRequest
     *
     * @returns CreateClusterDiagnosisResponse
     *
     * @param string                        $clusterId
     * @param CreateClusterDiagnosisRequest $request
     *
     * @return CreateClusterDiagnosisResponse
     */
    public function createClusterDiagnosis($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterDiagnosisWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Creates a cluster inspection configuration.
     *
     * @param request - CreateClusterInspectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterInspectConfigResponse
     *
     * @param string                            $clusterId
     * @param CreateClusterInspectConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateClusterInspectConfigResponse
     */
    public function createClusterInspectConfigWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->disabledCheckItems) {
            @$body['disabledCheckItems'] = $request->disabledCheckItems;
        }

        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->recurrence) {
            @$body['recurrence'] = $request->recurrence;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClusterInspectConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectConfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateClusterInspectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster inspection configuration.
     *
     * @param request - CreateClusterInspectConfigRequest
     *
     * @returns CreateClusterInspectConfigResponse
     *
     * @param string                            $clusterId
     * @param CreateClusterInspectConfigRequest $request
     *
     * @return CreateClusterInspectConfigResponse
     */
    public function createClusterInspectConfig($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterInspectConfigWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Creates a node pool. A node pool is a logical collection of nodes with the same property, which allows unified management and O&M of nodes, such as node upgrades and elastic scaling. You can further use the automated O&M features of node pools, such as automatic repair of OS CVE vulnerabilities, automatic recovery of faulty nodes, and automatic upgrades of kubelet and containerd versions, to reduce O&M costs. You can invoke CreateClusterNodePool to create a node pool for a cluster.
     *
     * @param request - CreateClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterNodePoolResponse
     *
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClusterNodePoolResponse
     */
    public function createClusterNodePoolWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoMode) {
            @$body['auto_mode'] = $request->autoMode;
        }

        if (null !== $request->autoScaling) {
            @$body['auto_scaling'] = $request->autoScaling;
        }

        if (null !== $request->count) {
            @$body['count'] = $request->count;
        }

        if (null !== $request->efloNodeGroup) {
            @$body['eflo_node_group'] = $request->efloNodeGroup;
        }

        if (null !== $request->hostNetwork) {
            @$body['host_network'] = $request->hostNetwork;
        }

        if (null !== $request->interconnectConfig) {
            @$body['interconnect_config'] = $request->interconnectConfig;
        }

        if (null !== $request->interconnectMode) {
            @$body['interconnect_mode'] = $request->interconnectMode;
        }

        if (null !== $request->intranet) {
            @$body['intranet'] = $request->intranet;
        }

        if (null !== $request->kubernetesConfig) {
            @$body['kubernetes_config'] = $request->kubernetesConfig;
        }

        if (null !== $request->management) {
            @$body['management'] = $request->management;
        }

        if (null !== $request->maxNodes) {
            @$body['max_nodes'] = $request->maxNodes;
        }

        if (null !== $request->nodeComponents) {
            @$body['node_components'] = $request->nodeComponents;
        }

        if (null !== $request->nodeConfig) {
            @$body['node_config'] = $request->nodeConfig;
        }

        if (null !== $request->nodepoolInfo) {
            @$body['nodepool_info'] = $request->nodepoolInfo;
        }

        if (null !== $request->scalingGroup) {
            @$body['scaling_group'] = $request->scalingGroup;
        }

        if (null !== $request->teeConfig) {
            @$body['tee_config'] = $request->teeConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a node pool. A node pool is a logical collection of nodes with the same property, which allows unified management and O&M of nodes, such as node upgrades and elastic scaling. You can further use the automated O&M features of node pools, such as automatic repair of OS CVE vulnerabilities, automatic recovery of faulty nodes, and automatic upgrades of kubelet and containerd versions, to reduce O&M costs. You can invoke CreateClusterNodePool to create a node pool for a cluster.
     *
     * @param request - CreateClusterNodePoolRequest
     *
     * @returns CreateClusterNodePoolResponse
     *
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request
     *
     * @return CreateClusterNodePoolResponse
     */
    public function createClusterNodePool($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterNodePoolWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Creates a trigger for an application.
     *
     * @deprecated OpenAPI CreateKubernetesTrigger is deprecated
     *
     * @param request - CreateKubernetesTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKubernetesTriggerResponse
     *
     * @param CreateKubernetesTriggerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTriggerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->clusterId) {
            @$body['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->projectId) {
            @$body['project_id'] = $request->projectId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKubernetesTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/triggers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Creates a trigger for an application.
     *
     * @deprecated OpenAPI CreateKubernetesTrigger is deprecated
     *
     * @param request - CreateKubernetesTriggerRequest
     *
     * @returns CreateKubernetesTriggerResponse
     *
     * @param CreateKubernetesTriggerRequest $request
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTrigger($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKubernetesTriggerWithOptions($request, $headers, $runtime);
    }

    /**
     * Installs node components.
     *
     * @param request - CreateNodePoolComponentInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNodePoolComponentInstancesResponse
     *
     * @param string                                  $clusterId
     * @param string                                  $nodepoolId
     * @param CreateNodePoolComponentInstancesRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateNodePoolComponentInstancesResponse
     */
    public function createNodePoolComponentInstancesWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->nodeNames) {
            @$body['node_names'] = $request->nodeNames;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rolling_policy'] = $request->rollingPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNodePoolComponentInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/component_instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateNodePoolComponentInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs node components.
     *
     * @param request - CreateNodePoolComponentInstancesRequest
     *
     * @returns CreateNodePoolComponentInstancesResponse
     *
     * @param string                                  $clusterId
     * @param string                                  $nodepoolId
     * @param CreateNodePoolComponentInstancesRequest $request
     *
     * @return CreateNodePoolComponentInstancesResponse
     */
    public function createNodePoolComponentInstances($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNodePoolComponentInstancesWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * Creates an orchestration template. An orchestration template defines and describes a set of Kubernetes cluster resources in a declarative manner to specify how applications should run or be configured. You can use these templates to automate deployment and cluster management of resources, such as Pods, Services, Deployments, ConfigMaps, and PersistentVolumes. You can invoke the CreateTemplate API operation to create an orchestration template.
     *
     * @param request - CreateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        if (null !== $request->templateType) {
            @$body['template_type'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an orchestration template. An orchestration template defines and describes a set of Kubernetes cluster resources in a declarative manner to specify how applications should run or be configured. You can use these templates to automate deployment and cluster management of resources, such as Pods, Services, Deployments, ConfigMaps, and PersistentVolumes. You can invoke the CreateTemplate API operation to create an orchestration template.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * Configures a trigger for a cluster application to redeploy pods when specific conditions are met.
     *
     * @remarks
     * > Creating a trigger only supports pod redeployment.
     *
     * @param request - CreateTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTriggerResponse
     *
     * @param string               $clusterId
     * @param CreateTriggerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
     */
    public function createTriggerWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->clusterId) {
            @$body['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->projectId) {
            @$body['project_id'] = $request->projectId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/triggers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a trigger for a cluster application to redeploy pods when specific conditions are met.
     *
     * @remarks
     * > Creating a trigger only supports pod redeployment.
     *
     * @param request - CreateTriggerRequest
     *
     * @returns CreateTriggerResponse
     *
     * @param string               $clusterId
     * @param CreateTriggerRequest $request
     *
     * @return CreateTriggerResponse
     */
    public function createTrigger($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTriggerWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Deletes ACK alert contacts.
     *
     * @param tmpReq - DeleteAlertContactRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlertContactResponse
     *
     * @param DeleteAlertContactRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAlertContactShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactIds) {
            $request->contactIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactIds, 'contact_ids', 'json');
        }

        $query = [];
        if (null !== $request->contactIdsShrink) {
            @$query['contact_ids'] = $request->contactIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlertContact',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/contacts',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes ACK alert contacts.
     *
     * @param request - DeleteAlertContactRequest
     *
     * @returns DeleteAlertContactResponse
     *
     * @param DeleteAlertContactRequest $request
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertContactWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes ACK alert contact groups.
     *
     * @param tmpReq - DeleteAlertContactGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlertContactGroupResponse
     *
     * @param DeleteAlertContactGroupRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAlertContactGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactGroupIds) {
            $request->contactGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactGroupIds, 'contact_group_ids', 'json');
        }

        $query = [];
        if (null !== $request->contactGroupIdsShrink) {
            @$query['contact_group_ids'] = $request->contactGroupIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlertContactGroup',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/contact_groups',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes ACK alert contact groups.
     *
     * @param request - DeleteAlertContactGroupRequest
     *
     * @returns DeleteAlertContactGroupResponse
     *
     * @param DeleteAlertContactGroupRequest $request
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertContactGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a self-healing rule.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoRepairPolicyResponse
     *
     * @param string         $clusterId
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAutoRepairPolicyResponse
     */
    public function deleteAutoRepairPolicyWithOptions($clusterId, $policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAutoRepairPolicy',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/auto_repair_policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAutoRepairPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a self-healing rule.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @returns DeleteAutoRepairPolicyResponse
     *
     * @param string $clusterId
     * @param string $policyId
     *
     * @return DeleteAutoRepairPolicyResponse
     */
    public function deleteAutoRepairPolicy($clusterId, $policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAutoRepairPolicyWithOptions($clusterId, $policyId, $headers, $runtime);
    }

    /**
     * Deletes a cluster and specifies whether to delete or retain the associated resources of the cluster. Before you delete a cluster, manually clean up workloads such as stateless, stateful, job, and cron job workloads. Otherwise, the cluster deletion may fail.
     *
     * @remarks
     * Risk warnings:
     * - Subscription ECS instances and Lingjun computing nodes in the cluster cannot be automatically released. To avoid unnecessary costs, perform a manual release. For more information, see Cluster deletion and node release rules.
     * - Subscription API server SLB resources cannot be automatically released. To avoid unnecessary costs, perform a manual release.
     * - VPCs, vSwitches, security groups, and RAM roles are retained by default if they are used by other resources and cannot be deleted. Perform a manual release.
     * - Elastic Container Instance (ECI) pods created by using virtual nodes are automatically released.
     * - Some cloud resources created by the cluster are not automatically released when the cluster is deleted. These resources continue to incur charges after the cluster is deleted. Release or retain them based on your business requirements. These resources include: Simple Log Service (SLS) projects automatically created by the cluster, and cloud disks purchased by using dynamic volumes.
     *
     * @param tmpReq - DeleteClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param string               $ClusterId
     * @param DeleteClusterRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($ClusterId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deleteOptions) {
            $request->deleteOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deleteOptions, 'delete_options', 'json');
        }

        if (null !== $tmpReq->retainResources) {
            $request->retainResourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->retainResources, 'retain_resources', 'json');
        }

        $query = [];
        if (null !== $request->deleteOptionsShrink) {
            @$query['delete_options'] = $request->deleteOptionsShrink;
        }

        if (null !== $request->keepSlb) {
            @$query['keep_slb'] = $request->keepSlb;
        }

        if (null !== $request->retainAllResources) {
            @$query['retain_all_resources'] = $request->retainAllResources;
        }

        if (null !== $request->retainResourcesShrink) {
            @$query['retain_resources'] = $request->retainResourcesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cluster and specifies whether to delete or retain the associated resources of the cluster. Before you delete a cluster, manually clean up workloads such as stateless, stateful, job, and cron job workloads. Otherwise, the cluster deletion may fail.
     *
     * @remarks
     * Risk warnings:
     * - Subscription ECS instances and Lingjun computing nodes in the cluster cannot be automatically released. To avoid unnecessary costs, perform a manual release. For more information, see Cluster deletion and node release rules.
     * - Subscription API server SLB resources cannot be automatically released. To avoid unnecessary costs, perform a manual release.
     * - VPCs, vSwitches, security groups, and RAM roles are retained by default if they are used by other resources and cannot be deleted. Perform a manual release.
     * - Elastic Container Instance (ECI) pods created by using virtual nodes are automatically released.
     * - Some cloud resources created by the cluster are not automatically released when the cluster is deleted. These resources continue to incur charges after the cluster is deleted. Release or retain them based on your business requirements. These resources include: Simple Log Service (SLS) projects automatically created by the cluster, and cloud disks purchased by using dynamic volumes.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
     * @param string               $ClusterId
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Deletes the cluster inspection configuration.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterInspectConfigResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteClusterInspectConfigResponse
     */
    public function deleteClusterInspectConfigWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteClusterInspectConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectConfig',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteClusterInspectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the cluster inspection configuration.
     *
     * @returns DeleteClusterInspectConfigResponse
     *
     * @param string $clusterId
     *
     * @return DeleteClusterInspectConfigResponse
     */
    public function deleteClusterInspectConfig($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterInspectConfigWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Deletes a node pool that is no longer in use. When a node pool is deleted, all pods on its nodes are deleted, which may trigger rescheduling. If rescheduling fails, your services may be affected. Ensure that the cluster has sufficient resources for rescheduling.
     *
     * @param request - DeleteClusterNodepoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterNodepoolResponse
     *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param DeleteClusterNodepoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteClusterNodepoolResponse
     */
    public function deleteClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
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
            'action' => 'DeleteClusterNodepool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a node pool that is no longer in use. When a node pool is deleted, all pods on its nodes are deleted, which may trigger rescheduling. If rescheduling fails, your services may be affected. Ensure that the cluster has sufficient resources for rescheduling.
     *
     * @param request - DeleteClusterNodepoolRequest
     *
     * @returns DeleteClusterNodepoolResponse
     *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param DeleteClusterNodepoolRequest $request
     *
     * @return DeleteClusterNodepoolResponse
     */
    public function deleteClusterNodepool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * Removes nodes from a cluster. When you remove nodes, you can specify whether to release the associated ECS instances and whether to automatically drain the nodes.
     *
     * @remarks
     * - When removing nodes, perform standard operations by calling this API operation or using the [Container Service console](https://cs.console.aliyun.com). Do not manually remove nodes by running the `kubectl delete node` command.
     * - Do not manually release nodes or remove instances in the ECS or Auto Scaling (ESS) console or by calling related API operations, or passively release nodes when a subscription instance expires. In these cases, the nodes are directly shut down and automatically removed from the Container Service console.
     * - If the expected number of nodes is configured for a node pool, the node pool automatically scales out other instances based on the corresponding configurations to maintain the expected number of nodes.
     * - Removing nodes involves pod migration and may affect your services. Perform this operation during off-peak hours. Unexpected risks may occur during the operation. Back up your data in advance.
     * - When you remove nodes, ACK executes drain operations. Make sure that other nodes in the cluster have sufficient resources to avoid application pod scheduling failures.
     * - Check the node affinity rules and scheduling policies of the pods on the nodes to be removed to ensure that the pods can be scheduled to other nodes after the nodes are removed.
     *
     * @param request - DeleteClusterNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterNodesResponse
     *
     * @param string                    $ClusterId
     * @param DeleteClusterNodesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->drainNode) {
            @$body['drain_node'] = $request->drainNode;
        }

        if (null !== $request->nodes) {
            @$body['nodes'] = $request->nodes;
        }

        if (null !== $request->releaseNode) {
            @$body['release_node'] = $request->releaseNode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteClusterNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes nodes from a cluster. When you remove nodes, you can specify whether to release the associated ECS instances and whether to automatically drain the nodes.
     *
     * @remarks
     * - When removing nodes, perform standard operations by calling this API operation or using the [Container Service console](https://cs.console.aliyun.com). Do not manually remove nodes by running the `kubectl delete node` command.
     * - Do not manually release nodes or remove instances in the ECS or Auto Scaling (ESS) console or by calling related API operations, or passively release nodes when a subscription instance expires. In these cases, the nodes are directly shut down and automatically removed from the Container Service console.
     * - If the expected number of nodes is configured for a node pool, the node pool automatically scales out other instances based on the corresponding configurations to maintain the expected number of nodes.
     * - Removing nodes involves pod migration and may affect your services. Perform this operation during off-peak hours. Unexpected risks may occur during the operation. Back up your data in advance.
     * - When you remove nodes, ACK executes drain operations. Make sure that other nodes in the cluster have sufficient resources to avoid application pod scheduling failures.
     * - Check the node affinity rules and scheduling policies of the pods on the nodes to be removed to ensure that the pods can be scheduled to other nodes after the nodes are removed.
     *
     * @param request - DeleteClusterNodesRequest
     *
     * @returns DeleteClusterNodesResponse
     *
     * @param string                    $ClusterId
     * @param DeleteClusterNodesRequest $request
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Deletes an application trigger based on the application trigger ID.
     *
     * @deprecated OpenAPI DeleteKubernetesTrigger is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKubernetesTriggerResponse
     *
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTriggerWithOptions($Id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteKubernetesTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/triggers/revoke/' . Url::percentEncode($Id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Deletes an application trigger based on the application trigger ID.
     *
     * @deprecated OpenAPI DeleteKubernetesTrigger is deprecated
     *
     * @returns DeleteKubernetesTriggerResponse
     *
     * @param string $Id
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTrigger($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKubernetesTriggerWithOptions($Id, $headers, $runtime);
    }

    /**
     * Uninstalls a node component.
     *
     * @param tmpReq - DeleteNodePoolComponentInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNodePoolComponentInstanceResponse
     *
     * @param string                                 $clusterId
     * @param string                                 $nodepoolId
     * @param string                                 $name
     * @param DeleteNodePoolComponentInstanceRequest $tmpReq
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteNodePoolComponentInstanceResponse
     */
    public function deleteNodePoolComponentInstanceWithOptions($clusterId, $nodepoolId, $name, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteNodePoolComponentInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeNames) {
            $request->nodeNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeNames, 'node_names', 'json');
        }

        $query = [];
        if (null !== $request->batchInterval) {
            @$query['batch_interval'] = $request->batchInterval;
        }

        if (null !== $request->maxFailedNodes) {
            @$query['max_failed_nodes'] = $request->maxFailedNodes;
        }

        if (null !== $request->maxParallelism) {
            @$query['max_parallelism'] = $request->maxParallelism;
        }

        if (null !== $request->nodeNamesShrink) {
            @$query['node_names'] = $request->nodeNamesShrink;
        }

        if (null !== $request->pausePolicy) {
            @$query['pause_policy'] = $request->pausePolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNodePoolComponentInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/component_instances/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteNodePoolComponentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls a node component.
     *
     * @param request - DeleteNodePoolComponentInstanceRequest
     *
     * @returns DeleteNodePoolComponentInstanceResponse
     *
     * @param string                                 $clusterId
     * @param string                                 $nodepoolId
     * @param string                                 $name
     * @param DeleteNodePoolComponentInstanceRequest $request
     *
     * @return DeleteNodePoolComponentInstanceResponse
     */
    public function deleteNodePoolComponentInstance($clusterId, $nodepoolId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteNodePoolComponentInstanceWithOptions($clusterId, $nodepoolId, $name, $request, $headers, $runtime);
    }

    /**
     * Deletes a policy rule instance in a specified cluster.
     *
     * @param request - DeletePolicyInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyInstanceResponse
     *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeletePolicyInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePolicyInstanceResponse
     */
    public function deletePolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['instance_name'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/policies/' . Url::percentEncode($policyName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy rule instance in a specified cluster.
     *
     * @param request - DeletePolicyInstanceRequest
     *
     * @returns DeletePolicyInstanceResponse
     *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeletePolicyInstanceRequest $request
     *
     * @return DeletePolicyInstanceResponse
     */
    public function deletePolicyInstance($clusterId, $policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime);
    }

    /**
     * Deletes an orchestration template.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param string         $TemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an orchestration template.
     *
     * @returns DeleteTemplateResponse
     *
     * @param string $TemplateId
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($TemplateId, $headers, $runtime);
    }

    /**
     * Deletes an application trigger.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTriggerResponse
     *
     * @param string         $clusterId
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($clusterId, $Id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/triggers/' . Url::percentEncode($Id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application trigger.
     *
     * @returns DeleteTriggerResponse
     *
     * @param string $clusterId
     * @param string $Id
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger($clusterId, $Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTriggerWithOptions($clusterId, $Id, $headers, $runtime);
    }

    /**
     * Deploys a policy rule instance in a specified namespace of an ACK cluster. You can select the security policy type, configure the governance action (alert or block) for the policy instance, and specify the namespace scope.
     *
     * @param request - DeployPolicyInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployPolicyInstanceResponse
     *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeployPolicyInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeployPolicyInstanceResponse
     */
    public function deployPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->namespaces) {
            @$body['namespaces'] = $request->namespaces;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployPolicyInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/policies/' . Url::percentEncode($policyName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys a policy rule instance in a specified namespace of an ACK cluster. You can select the security policy type, configure the governance action (alert or block) for the policy instance, and specify the namespace scope.
     *
     * @param request - DeployPolicyInstanceRequest
     *
     * @returns DeployPolicyInstanceResponse
     *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeployPolicyInstanceRequest $request
     *
     * @return DeployPolicyInstanceResponse
     */
    public function deployPolicyInstance($clusterId, $policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime);
    }

    /**
     * Queries the information about a target component based on parameters such as the specified region, cluster type, cluster profile, cluster version, and component name. The information includes whether the component is managed, the component category, the supported custom parameter schema, the compatible operating system architecture, and the minimum cluster version required by the component version.
     *
     * @param request - DescribeAddonRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAddonResponse
     *
     * @param string               $addonName
     * @param DescribeAddonRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeAddonResponse
     */
    public function describeAddonWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->clusterSpec) {
            @$query['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->clusterType) {
            @$query['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->clusterVersion) {
            @$query['cluster_version'] = $request->clusterVersion;
        }

        if (null !== $request->profile) {
            @$query['profile'] = $request->profile;
        }

        if (null !== $request->regionId) {
            @$query['region_id'] = $request->regionId;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAddon',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a target component based on parameters such as the specified region, cluster type, cluster profile, cluster version, and component name. The information includes whether the component is managed, the component category, the supported custom parameter schema, the compatible operating system architecture, and the minimum cluster version required by the component version.
     *
     * @param request - DescribeAddonRequest
     *
     * @returns DescribeAddonResponse
     *
     * @param string               $addonName
     * @param DescribeAddonRequest $request
     *
     * @return DescribeAddonResponse
     */
    public function describeAddon($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAddonWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of all components supported by the platform.
     *
     * @deprecated OpenAPI DescribeAddons is deprecated
     *
     * @param request - DescribeAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAddonsResponse
     *
     * @param DescribeAddonsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddonsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterProfile) {
            @$query['cluster_profile'] = $request->clusterProfile;
        }

        if (null !== $request->clusterSpec) {
            @$query['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->clusterType) {
            @$query['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->clusterVersion) {
            @$query['cluster_version'] = $request->clusterVersion;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/components/metadata',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the details of all components supported by the platform.
     *
     * @deprecated OpenAPI DescribeAddons is deprecated
     *
     * @param request - DescribeAddonsRequest
     *
     * @returns DescribeAddonsResponse
     *
     * @param DescribeAddonsRequest $request
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries self-healing rules.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoRepairPolicyResponse
     *
     * @param string         $clusterId
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAutoRepairPolicyResponse
     */
    public function describeAutoRepairPolicyWithOptions($clusterId, $policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeAutoRepairPolicy',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/auto_repair_policies/' . Url::percentEncode($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAutoRepairPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries self-healing rules.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @returns DescribeAutoRepairPolicyResponse
     *
     * @param string $clusterId
     * @param string $policyId
     *
     * @return DescribeAutoRepairPolicyResponse
     */
    public function describeAutoRepairPolicy($clusterId, $policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAutoRepairPolicyWithOptions($clusterId, $policyId, $headers, $runtime);
    }

    /**
     * Queries the version, state, and configuration of installed cluster add-ons.
     *
     * @deprecated OpenAPI DescribeClusterAddonInstance is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAddonInstanceResponse
     *
     * @param string         $ClusterID
     * @param string         $AddonName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterAddonInstanceResponse
     */
    public function describeClusterAddonInstanceWithOptions($ClusterID, $AddonName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAddonInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterID) . '/components/' . Url::percentEncode($AddonName) . '/instance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the version, state, and configuration of installed cluster add-ons.
     *
     * @deprecated OpenAPI DescribeClusterAddonInstance is deprecated
     *
     * @returns DescribeClusterAddonInstanceResponse
     *
     * @param string $ClusterID
     * @param string $AddonName
     *
     * @return DescribeClusterAddonInstanceResponse
     */
    public function describeClusterAddonInstance($ClusterID, $AddonName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonInstanceWithOptions($ClusterID, $AddonName, $headers, $runtime);
    }

    /**
     * Queries the metadata of a specified component version available for a specific cluster, including the component version and configurable parameters.
     *
     * @deprecated OpenAPI DescribeClusterAddonMetadata is deprecated
     *
     * @param request - DescribeClusterAddonMetadataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAddonMetadataResponse
     *
     * @param string                              $clusterId
     * @param string                              $componentId
     * @param DescribeClusterAddonMetadataRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAddonMetadataResponse
     */
    public function describeClusterAddonMetadataWithOptions($clusterId, $componentId, $request, $headers, $runtime)
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
            'action' => 'DescribeClusterAddonMetadata',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/components/' . Url::percentEncode($componentId) . '/metadata',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAddonMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the metadata of a specified component version available for a specific cluster, including the component version and configurable parameters.
     *
     * @deprecated OpenAPI DescribeClusterAddonMetadata is deprecated
     *
     * @param request - DescribeClusterAddonMetadataRequest
     *
     * @returns DescribeClusterAddonMetadataResponse
     *
     * @param string                              $clusterId
     * @param string                              $componentId
     * @param DescribeClusterAddonMetadataRequest $request
     *
     * @return DescribeClusterAddonMetadataResponse
     */
    public function describeClusterAddonMetadata($clusterId, $componentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonMetadataWithOptions($clusterId, $componentId, $request, $headers, $runtime);
    }

    /**
     * Queries the upgrade status of cluster add-ons.
     *
     * @deprecated OpenAPI DescribeClusterAddonUpgradeStatus is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAddonUpgradeStatusResponse
     *
     * @param string         $ClusterId
     * @param string         $ComponentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAddonUpgradeStatus',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/components/' . Url::percentEncode($ComponentId) . '/upgradestatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the upgrade status of cluster add-ons.
     *
     * @deprecated OpenAPI DescribeClusterAddonUpgradeStatus is deprecated
     *
     * @returns DescribeClusterAddonUpgradeStatusResponse
     *
     * @param string $ClusterId
     * @param string $ComponentId
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatus($ClusterId, $ComponentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $headers, $runtime);
    }

    /**
     * Queries the upgrade status of a component by name.
     *
     * @deprecated OpenAPI DescribeClusterAddonsUpgradeStatus is deprecated
     *
     * @param tmpReq - DescribeClusterAddonsUpgradeStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAddonsUpgradeStatusResponse
     *
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $tmpReq
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeClusterAddonsUpgradeStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->componentIds) {
            $request->componentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->componentIds, 'componentIds', 'json');
        }

        $query = [];
        if (null !== $request->componentIdsShrink) {
            @$query['componentIds'] = $request->componentIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAddonsUpgradeStatus',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/components/upgradestatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the upgrade status of a component by name.
     *
     * @deprecated OpenAPI DescribeClusterAddonsUpgradeStatus is deprecated
     *
     * @param request - DescribeClusterAddonsUpgradeStatusRequest
     *
     * @returns DescribeClusterAddonsUpgradeStatusResponse
     *
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $request
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatus($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of all installed components in a cluster by cluster ID.
     *
     * @deprecated OpenAPI DescribeClusterAddonsVersion is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAddonsVersionResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersionWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAddonsVersion',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/components/version',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAddonsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the details of all installed components in a cluster by cluster ID.
     *
     * @deprecated OpenAPI DescribeClusterAddonsVersion is deprecated
     *
     * @returns DescribeClusterAddonsVersionResponse
     *
     * @param string $ClusterId
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersion($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsVersionWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Retrieves the script used to add existing ECS instances to an ACK cluster as worker nodes, or to re-add removed worker nodes to a node pool. ACK supports manually adding existing nodes to a node pool. You can invoke the DescribeClusterAttachScripts operation to obtain the script for adding existing nodes.
     *
     * @param request - DescribeClusterAttachScriptsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAttachScriptsResponse
     *
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->arch) {
            @$body['arch'] = $request->arch;
        }

        if (null !== $request->expired) {
            @$body['expired'] = $request->expired;
        }

        if (null !== $request->formatDisk) {
            @$body['format_disk'] = $request->formatDisk;
        }

        if (null !== $request->keepInstanceName) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }

        if (null !== $request->nodepoolId) {
            @$body['nodepool_id'] = $request->nodepoolId;
        }

        if (null !== $request->oneTimeToken) {
            @$body['one_time_token'] = $request->oneTimeToken;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->rdsInstances) {
            @$body['rds_instances'] = $request->rdsInstances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAttachScripts',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/attachscript',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return DescribeClusterAttachScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the script used to add existing ECS instances to an ACK cluster as worker nodes, or to re-add removed worker nodes to a node pool. ACK supports manually adding existing nodes to a node pool. You can invoke the DescribeClusterAttachScripts operation to obtain the script for adding existing nodes.
     *
     * @param request - DescribeClusterAttachScriptsRequest
     *
     * @returns DescribeClusterAttachScriptsResponse
     *
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScripts($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified cluster by cluster ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterDetailResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterDetail',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified cluster by cluster ID.
     *
     * @returns DescribeClusterDetailResponse
     *
     * @param string $ClusterId
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterDetailWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Queries the events of a specified cluster. Cluster operation events include cluster creation, cluster modification, node pool creation, node pool scaling, add-on installation, and cluster upgrades. You can call this operation to retrieve a list of events that occurred in the cluster and query event details, including the event level, event status, and event time.
     *
     * @param request - DescribeClusterEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterEventsResponse
     *
     * @param string                       $ClusterId
     * @param DescribeClusterEventsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterEventsResponse
     */
    public function describeClusterEventsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterEvents',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the events of a specified cluster. Cluster operation events include cluster creation, cluster modification, node pool creation, node pool scaling, add-on installation, and cluster upgrades. You can call this operation to retrieve a list of events that occurred in the cluster and query event details, including the event level, event status, and event time.
     *
     * @param request - DescribeClusterEventsRequest
     *
     * @returns DescribeClusterEventsResponse
     *
     * @param string                       $ClusterId
     * @param DescribeClusterEventsRequest $request
     *
     * @return DescribeClusterEventsResponse
     */
    public function describeClusterEvents($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterEventsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the log data of a cluster for root cause analysis and tracing when cluster issues occur.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterLogsResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogsWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterLogs',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the log data of a cluster for root cause analysis and tracing when cluster issues occur.
     *
     * @returns DescribeClusterLogsResponse
     *
     * @param string $ClusterId
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogs($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterLogsWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Queries the configuration of a specified node pool in a cluster.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterNodePoolDetailResponse
     *
     * @param string         $ClusterId
     * @param string         $NodepoolId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterNodePoolDetailResponse
     */
    public function describeClusterNodePoolDetailWithOptions($ClusterId, $NodepoolId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterNodePoolDetail',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterNodePoolDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of a specified node pool in a cluster.
     *
     * @returns DescribeClusterNodePoolDetailResponse
     *
     * @param string $ClusterId
     * @param string $NodepoolId
     *
     * @return DescribeClusterNodePoolDetailResponse
     */
    public function describeClusterNodePoolDetail($ClusterId, $NodepoolId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolDetailWithOptions($ClusterId, $NodepoolId, $headers, $runtime);
    }

    /**
     * Queries all node pools in a cluster.
     *
     * @remarks
     * - When you remove a node, perform standard operations by using this API operation or the [Container Service console](https://cs.console.aliyun.com). Do not manually remove nodes by running the `kubectl delete node` command.
     * - Do not release nodes or remove instances in the ECS or Auto Scaling console, or by calling related API operations, or passively release nodes when a subscription instance expires. In these cases, the nodes are directly shut down and automatically removed from the Container Service console.
     * - If the expected number of nodes is configured for a node pool, the node pool automatically scales out other instances based on the corresponding configurations to maintain the expected number of nodes.
     * - Removing a node involves pod migration, which may affect your services. Perform this operation during off-peak hours. Unexpected risks may occur during the operation. Back up your data in advance.
     * - When a node is removed, ACK drains the node. Make sure that other nodes in the cluster have sufficient resources to prevent application pods from failing to be scheduled.
     * - Check the node affinity rules and scheduling policies of the pods on the node to be removed. Make sure that the pods can be scheduled to other nodes after the node is removed.
     *
     * @param request - DescribeClusterNodePoolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterNodePoolsResponse
     *
     * @param string                          $ClusterId
     * @param DescribeClusterNodePoolsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePoolsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nodepoolName) {
            @$query['NodepoolName'] = $request->nodepoolName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterNodePools',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterNodePoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all node pools in a cluster.
     *
     * @remarks
     * - When you remove a node, perform standard operations by using this API operation or the [Container Service console](https://cs.console.aliyun.com). Do not manually remove nodes by running the `kubectl delete node` command.
     * - Do not release nodes or remove instances in the ECS or Auto Scaling console, or by calling related API operations, or passively release nodes when a subscription instance expires. In these cases, the nodes are directly shut down and automatically removed from the Container Service console.
     * - If the expected number of nodes is configured for a node pool, the node pool automatically scales out other instances based on the corresponding configurations to maintain the expected number of nodes.
     * - Removing a node involves pod migration, which may affect your services. Perform this operation during off-peak hours. Unexpected risks may occur during the operation. Back up your data in advance.
     * - When a node is removed, ACK drains the node. Make sure that other nodes in the cluster have sufficient resources to prevent application pods from failing to be scheduled.
     * - Check the node affinity rules and scheduling policies of the pods on the node to be removed. Make sure that the pods can be scheduled to other nodes after the node is removed.
     *
     * @param request - DescribeClusterNodePoolsRequest
     *
     * @returns DescribeClusterNodePoolsResponse
     *
     * @param string                          $ClusterId
     * @param DescribeClusterNodePoolsRequest $request
     *
     * @return DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePools($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of nodes that meet the specified conditions.
     *
     * @param request - DescribeClusterNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterNodesResponse
     *
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['instanceIds'] = $request->instanceIds;
        }

        if (null !== $request->nodeIps) {
            @$query['nodeIps'] = $request->nodeIps;
        }

        if (null !== $request->nodeLabels) {
            @$query['nodeLabels'] = $request->nodeLabels;
        }

        if (null !== $request->nodeNames) {
            @$query['nodeNames'] = $request->nodeNames;
        }

        if (null !== $request->nodepoolId) {
            @$query['nodepool_id'] = $request->nodepoolId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of nodes that meet the specified conditions.
     *
     * @param request - DescribeClusterNodesRequest
     *
     * @returns DescribeClusterNodesResponse
     *
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the associated resources of a specified cluster. When you use Container Service for Kubernetes (ACK), you also use resources of other associated Alibaba Cloud services. You can call this operation to query these associated resources, such as VPCs and SLB instances. To query node pools or nodes, call the DescribeClusterNodePools or DescribeClusterNodes operation.
     *
     * @param request - DescribeClusterResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterResourcesResponse
     *
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResourcesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withAddonResources) {
            @$query['with_addon_resources'] = $request->withAddonResources;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterResources',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeClusterResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the associated resources of a specified cluster. When you use Container Service for Kubernetes (ACK), you also use resources of other associated Alibaba Cloud services. You can call this operation to query these associated resources, such as VPCs and SLB instances. To query node pools or nodes, call the DescribeClusterNodePools or DescribeClusterNodes operation.
     *
     * @param request - DescribeClusterResourcesRequest
     *
     * @returns DescribeClusterResourcesResponse
     *
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResources($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterResourcesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of tasks in a cluster.
     *
     * @param request - DescribeClusterTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterTasksResponse
     *
     * @param string                      $clusterId
     * @param DescribeClusterTasksRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterTasksResponse
     */
    public function describeClusterTasksWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterTasks',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tasks in a cluster.
     *
     * @param request - DescribeClusterTasksRequest
     *
     * @returns DescribeClusterTasksResponse
     *
     * @param string                      $clusterId
     * @param DescribeClusterTasksRequest $request
     *
     * @return DescribeClusterTasksResponse
     */
    public function describeClusterTasks($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterTasksWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the kubeconfig of a cluster.
     *
     * @remarks
     * - The default validity period of a certificate issued for a kubeconfig file is three years. Within 180 days before expiration, you can obtain a refreshed kubeconfig file with rotated certificates through the Container Service for Kubernetes console or by calling the API operation to retrieve the cluster kubeconfig. The new kubeconfig certificate remains valid for three years. The old kubeconfig credentials remain valid until the certificate expires. Obtain the rotated credentials promptly based on the kubeconfig expiration time displayed in the console or returned by the API operation.
     * - Properly manage the kubeconfig credentials for cluster management and revoke them promptly when they are no longer needed to prevent security risks such as data leaks caused by kubeconfig exposure.
     *
     * @param request - DescribeClusterUserKubeconfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterUserKubeconfigResponse
     *
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->temporaryDurationMinutes) {
            @$query['TemporaryDurationMinutes'] = $request->temporaryDurationMinutes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterUserKubeconfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . Url::percentEncode($ClusterId) . '/user_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterUserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the kubeconfig of a cluster.
     *
     * @remarks
     * - The default validity period of a certificate issued for a kubeconfig file is three years. Within 180 days before expiration, you can obtain a refreshed kubeconfig file with rotated certificates through the Container Service for Kubernetes console or by calling the API operation to retrieve the cluster kubeconfig. The new kubeconfig certificate remains valid for three years. The old kubeconfig credentials remain valid until the certificate expires. Obtain the rotated credentials promptly based on the kubeconfig expiration time displayed in the console or returned by the API operation.
     * - Properly manage the kubeconfig credentials for cluster management and revoke them promptly when they are no longer needed to prevent security risks such as data leaks caused by kubeconfig exposure.
     *
     * @param request - DescribeClusterUserKubeconfigRequest
     *
     * @returns DescribeClusterUserKubeconfigResponse
     *
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the kubeconfig for a cluster.
     *
     * @deprecated OpenAPI DescribeClusterV2UserKubeconfig is deprecated
     *
     * @param request - DescribeClusterV2UserKubeconfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterV2UserKubeconfigResponse
     *
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->temporaryDurationMinutes) {
            @$query['TemporaryDurationMinutes'] = $request->temporaryDurationMinutes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterV2UserKubeconfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/k8s/' . Url::percentEncode($ClusterId) . '/user_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves the kubeconfig for a cluster.
     *
     * @deprecated OpenAPI DescribeClusterV2UserKubeconfig is deprecated
     *
     * @param request - DescribeClusterV2UserKubeconfigRequest
     *
     * @returns DescribeClusterV2UserKubeconfigResponse
     *
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Invokes the DescribeClusterVuls operation to query the security vulnerability details of a cluster by cluster ID, including the vulnerability name, type, and severity level. Regularly scan clusters for security vulnerabilities to improve cluster security.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterVulsResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterVulsResponse
     */
    public function describeClusterVulsWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeClusterVuls',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/vuls',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the DescribeClusterVuls operation to query the security vulnerability details of a cluster by cluster ID, including the vulnerability name, type, and severity level. Regularly scan clusters for security vulnerabilities to improve cluster security.
     *
     * @returns DescribeClusterVulsResponse
     *
     * @param string $clusterId
     *
     * @return DescribeClusterVulsResponse
     */
    public function describeClusterVuls($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterVulsWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Queries all clusters created in Container Service, including Swarm and Kubernetes clusters.
     *
     * @deprecated OpenAPI DescribeClusters is deprecated
     *
     * @param request - DescribeClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClustersResponse
     *
     * @param DescribeClustersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['clusterType'] = $request->clusterType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resource_group_id'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusters',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries all clusters created in Container Service, including Swarm and Kubernetes clusters.
     *
     * @deprecated OpenAPI DescribeClusters is deprecated
     *
     * @param request - DescribeClustersRequest
     *
     * @returns DescribeClustersResponse
     *
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of all clusters in a specified region.
     *
     * @param request - DescribeClustersForRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClustersForRegionResponse
     *
     * @param string                           $regionId
     * @param DescribeClustersForRegionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClustersForRegionResponse
     */
    public function describeClustersForRegionWithOptions($regionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->clusterSpec) {
            @$query['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->clusterType) {
            @$query['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->profile) {
            @$query['profile'] = $request->profile;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClustersForRegion',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/regions/' . Url::percentEncode($regionId) . '/clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClustersForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of all clusters in a specified region.
     *
     * @param request - DescribeClustersForRegionRequest
     *
     * @returns DescribeClustersForRegionResponse
     *
     * @param string                           $regionId
     * @param DescribeClustersForRegionRequest $request
     *
     * @return DescribeClustersForRegionResponse
     */
    public function describeClustersForRegion($regionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersForRegionWithOptions($regionId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of ACK clusters that match specified conditions, such as cluster type and cluster specifications, under the current account.
     *
     * @param request - DescribeClustersV1Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClustersV1Response
     *
     * @param DescribeClustersV1Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeClustersV1Response
     */
    public function describeClustersV1WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->clusterSpec) {
            @$query['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->clusterType) {
            @$query['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->profile) {
            @$query['profile'] = $request->profile;
        }

        if (null !== $request->regionId) {
            @$query['region_id'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClustersV1',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeClustersV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of ACK clusters that match specified conditions, such as cluster type and cluster specifications, under the current account.
     *
     * @param request - DescribeClustersV1Request
     *
     * @returns DescribeClustersV1Response
     *
     * @param DescribeClustersV1Request $request
     *
     * @return DescribeClustersV1Response
     */
    public function describeClustersV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersV1WithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details of cluster operation events, such as cluster creation, cluster modification, node pool creation, node pool scale-out, add-on installation, and cluster upgrade. This operation allows you to query the details of specific events, including the event level, status, and occurrence time.
     *
     * @param request - DescribeEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEvents',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of cluster operation events, such as cluster creation, cluster modification, node pool creation, node pool scale-out, add-on installation, and cluster upgrade. This operation allows you to query the details of specific events, including the event level, status, and occurrence time.
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
        $headers = [];

        return $this->describeEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of all events in a specified region.
     *
     * @param request - DescribeEventsForRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsForRegionResponse
     *
     * @param string                         $regionId
     * @param DescribeEventsForRegionRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEventsForRegionResponse
     */
    public function describeEventsForRegionWithOptions($regionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventsForRegion',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/regions/' . Url::percentEncode($regionId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeEventsForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of all events in a specified region.
     *
     * @param request - DescribeEventsForRegionRequest
     *
     * @returns DescribeEventsForRegionResponse
     *
     * @param string                         $regionId
     * @param DescribeEventsForRegionRequest $request
     *
     * @return DescribeEventsForRegionResponse
     */
    public function describeEventsForRegion($regionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEventsForRegionWithOptions($regionId, $request, $headers, $runtime);
    }

    /**
     * Queries the agent configuration deployed in a registered cluster based on the cluster ID.
     *
     * @remarks
     * For more information about cluster registration, see [Register an external Kubernetes cluster](https://help.aliyun.com/document_detail/121053.html).
     *
     * @deprecated OpenAPI DescribeExternalAgent is deprecated
     *
     * @param request - DescribeExternalAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExternalAgentResponse
     *
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentMode) {
            @$query['AgentMode'] = $request->agentMode;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExternalAgent',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . Url::percentEncode($ClusterId) . '/external/agent/deployment',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the agent configuration deployed in a registered cluster based on the cluster ID.
     *
     * @remarks
     * For more information about cluster registration, see [Register an external Kubernetes cluster](https://help.aliyun.com/document_detail/121053.html).
     *
     * @deprecated OpenAPI DescribeExternalAgent is deprecated
     *
     * @param request - DescribeExternalAgentRequest
     *
     * @returns DescribeExternalAgentResponse
     *
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgent($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of Kubernetes versions, including version information, release dates, expiration dates, compatible operating systems, and supported runtimes.
     *
     * @param request - DescribeKubernetesVersionMetadataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKubernetesVersionMetadataResponse
     *
     * @param DescribeKubernetesVersionMetadataRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeKubernetesVersionMetadataResponse
     */
    public function describeKubernetesVersionMetadataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->kubernetesVersion) {
            @$query['KubernetesVersion'] = $request->kubernetesVersion;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->profile) {
            @$query['Profile'] = $request->profile;
        }

        if (null !== $request->queryUpgradableVersion) {
            @$query['QueryUpgradableVersion'] = $request->queryUpgradableVersion;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->runtime) {
            @$query['runtime'] = $request->runtime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKubernetesVersionMetadata',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/metadata/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeKubernetesVersionMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of Kubernetes versions, including version information, release dates, expiration dates, compatible operating systems, and supported runtimes.
     *
     * @param request - DescribeKubernetesVersionMetadataRequest
     *
     * @returns DescribeKubernetesVersionMetadataResponse
     *
     * @param DescribeKubernetesVersionMetadataRequest $request
     *
     * @return DescribeKubernetesVersionMetadataResponse
     */
    public function describeKubernetesVersionMetadata($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeKubernetesVersionMetadataWithOptions($request, $headers, $runtime);
    }

    /**
     * Invokes the DescribeNodePoolVuls API operation to query the security vulnerability details of a node pool by node pool ID, including the vulnerability name and level. Regularly scan node pools for security vulnerabilities to improve cluster security.
     *
     * @param request - DescribeNodePoolVulsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodePoolVulsResponse
     *
     * @param string                      $clusterId
     * @param string                      $nodepoolId
     * @param DescribeNodePoolVulsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNodePoolVulsResponse
     */
    public function describeNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->necessity) {
            @$query['necessity'] = $request->necessity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNodePoolVuls',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/vuls',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the DescribeNodePoolVuls API operation to query the security vulnerability details of a node pool by node pool ID, including the vulnerability name and level. Regularly scan node pools for security vulnerabilities to improve cluster security.
     *
     * @param request - DescribeNodePoolVulsRequest
     *
     * @returns DescribeNodePoolVulsResponse
     *
     * @param string                      $clusterId
     * @param string                      $nodepoolId
     * @param DescribeNodePoolVulsRequest $request
     *
     * @return DescribeNodePoolVulsResponse
     */
    public function describeNodePoolVuls($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * Provides a comprehensive set of built-in rule libraries for container security policies in ACK clusters, including Compliance, Infra, K8s-general, and PSP, to ensure secure container operations in production environments. You can call the DescribePolicies operation to query the list of policy governance rule libraries.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePoliciesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribePoliciesResponse
     */
    public function describePoliciesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribePolicies',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a comprehensive set of built-in rule libraries for container security policies in ACK clusters, including Compliance, Infra, K8s-general, and PSP, to ensure secure container operations in production environments. You can call the DescribePolicies operation to query the list of policy governance rule libraries.
     *
     * @returns DescribePoliciesResponse
     *
     * @return DescribePoliciesResponse
     */
    public function describePolicies()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePoliciesWithOptions($headers, $runtime);
    }

    /**
     * Provides a comprehensive built-in rule library for container security policies in ACK clusters, including Compliance, Infra, K8s-general, and PSP, to ensure the secure operation of containers in production environments. You can call the DescribePolicyDetails operation to query the details of specific policy governance rules, such as the rule template description, rule governance action, and rule governance level.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyDetailsResponse
     *
     * @param string         $policyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribePolicyDetailsResponse
     */
    public function describePolicyDetailsWithOptions($policyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribePolicyDetails',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/policies/' . Url::percentEncode($policyName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePolicyDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a comprehensive built-in rule library for container security policies in ACK clusters, including Compliance, Infra, K8s-general, and PSP, to ensure the secure operation of containers in production environments. You can call the DescribePolicyDetails operation to query the details of specific policy governance rules, such as the rule template description, rule governance action, and rule governance level.
     *
     * @returns DescribePolicyDetailsResponse
     *
     * @param string $policyName
     *
     * @return DescribePolicyDetailsResponse
     */
    public function describePolicyDetails($policyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyDetailsWithOptions($policyName, $headers, $runtime);
    }

    /**
     * Queries the details of policy governance for a specified ACK cluster. Container security policies for ACK clusters provide a comprehensive set of built-in rule libraries, including Compliance, Infra, K8s-general, and PSP, to ensure the secure operation of containers in production environments. You can use this operation to retrieve information such as the counts of enabled policies at different severity levels, policy governance audit logs, and interception and alerting statistics.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyGovernanceInClusterResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribePolicyGovernanceInClusterResponse
     */
    public function describePolicyGovernanceInClusterWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribePolicyGovernanceInCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/policygovernance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePolicyGovernanceInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of policy governance for a specified ACK cluster. Container security policies for ACK clusters provide a comprehensive set of built-in rule libraries, including Compliance, Infra, K8s-general, and PSP, to ensure the secure operation of containers in production environments. You can use this operation to retrieve information such as the counts of enabled policies at different severity levels, policy governance audit logs, and interception and alerting statistics.
     *
     * @returns DescribePolicyGovernanceInClusterResponse
     *
     * @param string $clusterId
     *
     * @return DescribePolicyGovernanceInClusterResponse
     */
    public function describePolicyGovernanceInCluster($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyGovernanceInClusterWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Queries the details of specified policy rule instances in an ACK cluster, such as policy descriptions and governance levels. You can select a security policy type, configure related enforcement actions and scopes, and create and deploy a policy instance in the ACK cluster.
     *
     * @param request - DescribePolicyInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyInstancesResponse
     *
     * @param string                         $clusterId
     * @param DescribePolicyInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePolicyInstancesResponse
     */
    public function describePolicyInstancesWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['instance_name'] = $request->instanceName;
        }

        if (null !== $request->policyName) {
            @$query['policy_name'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolicyInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribePolicyInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of specified policy rule instances in an ACK cluster, such as policy descriptions and governance levels. You can select a security policy type, configure related enforcement actions and scopes, and create and deploy a policy instance in the ACK cluster.
     *
     * @param request - DescribePolicyInstancesRequest
     *
     * @returns DescribePolicyInstancesResponse
     *
     * @param string                         $clusterId
     * @param DescribePolicyInstancesRequest $request
     *
     * @return DescribePolicyInstancesResponse
     */
    public function describePolicyInstances($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyInstancesWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the instance deployment status for different policy types in a cluster, including the number of enabled instances for each policy rule and the number of enabled policy types at different governance levels.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyInstancesStatusResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribePolicyInstancesStatusResponse
     */
    public function describePolicyInstancesStatusWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribePolicyInstancesStatus',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/policies/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePolicyInstancesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance deployment status for different policy types in a cluster, including the number of enabled instances for each policy rule and the number of enabled policy types at different governance levels.
     *
     * @returns DescribePolicyInstancesStatusResponse
     *
     * @param string $clusterId
     *
     * @return DescribePolicyInstancesStatusResponse
     */
    public function describePolicyInstancesStatus($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyInstancesStatusWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Queries the list of regions.
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
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clusterType) {
            @$query['clusterType'] = $request->clusterType;
        }

        if (null !== $request->profile) {
            @$query['profile'] = $request->profile;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2015-12-15',
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
     * Queries the list of regions.
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
     * Queries whether deletion protection is enabled for specified resources in a cluster. Supported resources include namespaces and services.
     *
     * @param request - DescribeResourcesDeleteProtectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourcesDeleteProtectionResponse
     *
     * @param string                                   $ClusterId
     * @param string                                   $ResourceType
     * @param DescribeResourcesDeleteProtectionRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeResourcesDeleteProtectionResponse
     */
    public function describeResourcesDeleteProtectionWithOptions($ClusterId, $ResourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->resources) {
            @$query['resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourcesDeleteProtection',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/resources/' . Url::percentEncode($ResourceType) . '/protection',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeResourcesDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether deletion protection is enabled for specified resources in a cluster. Supported resources include namespaces and services.
     *
     * @param request - DescribeResourcesDeleteProtectionRequest
     *
     * @returns DescribeResourcesDeleteProtectionResponse
     *
     * @param string                                   $ClusterId
     * @param string                                   $ResourceType
     * @param DescribeResourcesDeleteProtectionRequest $request
     *
     * @return DescribeResourcesDeleteProtectionResponse
     */
    public function describeResourcesDeleteProtection($ClusterId, $ResourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourcesDeleteProtectionWithOptions($ClusterId, $ResourceType, $request, $headers, $runtime);
    }

    /**
     * As an administrator responsible for cluster permission management, you can use an Alibaba Cloud account to issue KubeConfig credentials that contain identity information for a specified Resource Access Management (RAM) user or RAM role within the account to connect to an ACK cluster. You can invoke the DescribeSubaccountK8sClusterUserConfig operation to issue or obtain the KubeConfig for any RAM user or role within the account.
     *
     * @remarks
     * This API operation can be called only by an Alibaba Cloud account.
     *
     * @param request - DescribeSubaccountK8sClusterUserConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubaccountK8sClusterUserConfigResponse
     *
     * @param string                                        $ClusterId
     * @param string                                        $Uid
     * @param DescribeSubaccountK8sClusterUserConfigRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeSubaccountK8sClusterUserConfigResponse
     */
    public function describeSubaccountK8sClusterUserConfigWithOptions($ClusterId, $Uid, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->temporaryDurationMinutes) {
            @$query['TemporaryDurationMinutes'] = $request->temporaryDurationMinutes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubaccountK8sClusterUserConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . Url::percentEncode($ClusterId) . '/users/' . Url::percentEncode($Uid) . '/user_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSubaccountK8sClusterUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * As an administrator responsible for cluster permission management, you can use an Alibaba Cloud account to issue KubeConfig credentials that contain identity information for a specified Resource Access Management (RAM) user or RAM role within the account to connect to an ACK cluster. You can invoke the DescribeSubaccountK8sClusterUserConfig operation to issue or obtain the KubeConfig for any RAM user or role within the account.
     *
     * @remarks
     * This API operation can be called only by an Alibaba Cloud account.
     *
     * @param request - DescribeSubaccountK8sClusterUserConfigRequest
     *
     * @returns DescribeSubaccountK8sClusterUserConfigResponse
     *
     * @param string                                        $ClusterId
     * @param string                                        $Uid
     * @param DescribeSubaccountK8sClusterUserConfigRequest $request
     *
     * @return DescribeSubaccountK8sClusterUserConfigResponse
     */
    public function describeSubaccountK8sClusterUserConfig($ClusterId, $Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSubaccountK8sClusterUserConfigWithOptions($ClusterId, $Uid, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a cluster task, such as the task type, running status, and running stage.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskInfoResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfoWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeTaskInfo',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a cluster task, such as the task type, running status, and running stage.
     *
     * @returns DescribeTaskInfoResponse
     *
     * @param string $taskId
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfo($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskInfoWithOptions($taskId, $headers, $runtime);
    }

    /**
     * Queries the details of a specified orchestration template, including access permissions, YAML content, and tags. An orchestration template defines and describes a set of Kubernetes cluster resources in a declarative manner to specify how applications should run or be configured.
     *
     * @param request - DescribeTemplateAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateAttributeResponse
     *
     * @param string                           $TemplateId
     * @param DescribeTemplateAttributeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttributeWithOptions($TemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateType) {
            @$query['template_type'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateAttribute',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified orchestration template, including access permissions, YAML content, and tags. An orchestration template defines and describes a set of Kubernetes cluster resources in a declarative manner to specify how applications should run or be configured.
     *
     * @param request - DescribeTemplateAttributeRequest
     *
     * @returns DescribeTemplateAttributeResponse
     *
     * @param string                           $TemplateId
     * @param DescribeTemplateAttributeRequest $request
     *
     * @return DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttribute($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplateAttributeWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of orchestration templates and retrieves their details, including access permissions, YAML content, and tags. An orchestration template defines and describes a set of Kubernetes cluster resources in a declarative manner to specify how an application should run or be configured.
     *
     * @param request - DescribeTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplatesResponse
     *
     * @param DescribeTemplatesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['page_num'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->templateType) {
            @$query['template_type'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplates',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of orchestration templates and retrieves their details, including access permissions, YAML content, and tags. An orchestration template defines and describes a set of Kubernetes cluster resources in a declarative manner to specify how an application should run or be configured.
     *
     * @param request - DescribeTemplatesRequest
     *
     * @returns DescribeTemplatesResponse
     *
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries triggers that meet the specified conditions.
     *
     * @param request - DescribeTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTriggerResponse
     *
     * @param string                 $clusterId
     * @param DescribeTriggerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTriggerResponse
     */
    public function describeTriggerWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/triggers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries triggers that meet the specified conditions.
     *
     * @param request - DescribeTriggerRequest
     *
     * @returns DescribeTriggerResponse
     *
     * @param string                 $clusterId
     * @param DescribeTriggerRequest $request
     *
     * @return DescribeTriggerResponse
     */
    public function describeTrigger($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTriggerWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the RBAC access permissions to resources in namespaces granted to the current Resource Access Management (RAM) user or role in a specified ACK cluster. In ACK clusters, Kubernetes namespaces ensure that permissions and resources for cluster users are logically isolated. Users granted RBAC permissions only for a specific namespace cannot access resources in other namespaces of the cluster. You can invoke the DescribeUserClusterNamespaces operation to view the namespaces for which the current RAM user or role has been granted access permissions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserClusterNamespacesResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserClusterNamespacesResponse
     */
    public function describeUserClusterNamespacesWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeUserClusterNamespaces',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/k8s/' . Url::percentEncode($ClusterId) . '/namespaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeUserClusterNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the RBAC access permissions to resources in namespaces granted to the current Resource Access Management (RAM) user or role in a specified ACK cluster. In ACK clusters, Kubernetes namespaces ensure that permissions and resources for cluster users are logically isolated. Users granted RBAC permissions only for a specific namespace cannot access resources in other namespaces of the cluster. You can invoke the DescribeUserClusterNamespaces operation to view the namespaces for which the current RAM user or role has been granted access permissions.
     *
     * @returns DescribeUserClusterNamespacesResponse
     *
     * @param string $ClusterId
     *
     * @return DescribeUserClusterNamespacesResponse
     */
    public function describeUserClusterNamespaces($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserClusterNamespacesWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * In ACK clusters, you can create and assign different access permissions to different Resource Access Management (RAM) users or roles to ensure secure access control and resource isolation. You can invoke the DescribeUserPermission operation to query the details of cluster permissions granted to a Resource Access Management (RAM) user or role, including accessible resources, permission scope, preset role types, and permission sources.
     *
     * @remarks
     * *Precautions**:
     * - If the account that invokes this API operation is a Resource Access Management (RAM) user or RAM role, the API operation returns only the permissions for clusters on which the calling account has RBAC administrator permissions. To list permissions for all clusters, the calling account must have RBAC administrator permissions on all clusters.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserPermissionResponse
     *
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserPermissionResponse
     */
    public function describeUserPermissionWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeUserPermission',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/permissions/users/' . Url::percentEncode($uid) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return DescribeUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In ACK clusters, you can create and assign different access permissions to different Resource Access Management (RAM) users or roles to ensure secure access control and resource isolation. You can invoke the DescribeUserPermission operation to query the details of cluster permissions granted to a Resource Access Management (RAM) user or role, including accessible resources, permission scope, preset role types, and permission sources.
     *
     * @remarks
     * *Precautions**:
     * - If the account that invokes this API operation is a Resource Access Management (RAM) user or RAM role, the API operation returns only the permissions for clusters on which the calling account has RBAC administrator permissions. To list permissions for all clusters, the calling account must have RBAC administrator permissions on all clusters.
     *
     * @returns DescribeUserPermissionResponse
     *
     * @param string $uid
     *
     * @return DescribeUserPermissionResponse
     */
    public function describeUserPermission($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserPermissionWithOptions($uid, $headers, $runtime);
    }

    /**
     * Queries the quotas for ACK clusters, node pools, and nodes. To increase a quota, apply in Quota Center.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserQuotaResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuotaWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeUserQuota',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/quota',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quotas for ACK clusters, node pools, and nodes. To increase a quota, apply in Quota Center.
     *
     * @returns DescribeUserQuotaResponse
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserQuotaWithOptions($headers, $runtime);
    }

    /**
     * Fixes security vulnerability on nodes in a specified node pool of a cluster to improve cluster security. Alibaba Cloud security products regularly scan Elastic Compute Service (ECS) nodes for security vulnerability and provide corresponding fix suggestions and methods. Fixing certain Common Vulnerabilities and Exposures (CVEs) may require node restarts. Ensure that the cluster has sufficient nodes for drain operations. You can invoke the FixNodePoolVuls operation to fix security vulnerability on nodes in a specified node pool and improve the security of cluster nodes.
     *
     * @remarks
     * - CVE compatibility is guaranteed by Security Center. Ensure that you have activated the Ultimate edition of Security Center or [purchased vulnerability fixes (pay-as-you-go)](https://help.aliyun.com/document_detail/42308.html).
     * - Fixing certain CVEs requires node restarts. Container Service performs drain operations on a node before it restarts. Ensure that the cluster has sufficient idle resources for drain operations, such as scaling out the node pool in advance.
     * - Pay attention to the compatibility between your applications and CVEs. CVE fixes are performed in batches. During the fix process, you can pause or cancel the task. After you pause or cancel the task, the batches to which fix tasks have been delivered continue to run until completion. The delivery of fix tasks to undelivered batches is paused or canceled.
     *
     * @param request - FixNodePoolVulsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FixNodePoolVulsResponse
     *
     * @param string                 $clusterId
     * @param string                 $nodepoolId
     * @param FixNodePoolVulsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return FixNodePoolVulsResponse
     */
    public function fixNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRestart) {
            @$body['auto_restart'] = $request->autoRestart;
        }

        if (null !== $request->nodes) {
            @$body['nodes'] = $request->nodes;
        }

        if (null !== $request->rolloutPolicy) {
            @$body['rollout_policy'] = $request->rolloutPolicy;
        }

        if (null !== $request->vuls) {
            @$body['vuls'] = $request->vuls;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FixNodePoolVuls',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/vuls/fix',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FixNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Fixes security vulnerability on nodes in a specified node pool of a cluster to improve cluster security. Alibaba Cloud security products regularly scan Elastic Compute Service (ECS) nodes for security vulnerability and provide corresponding fix suggestions and methods. Fixing certain Common Vulnerabilities and Exposures (CVEs) may require node restarts. Ensure that the cluster has sufficient nodes for drain operations. You can invoke the FixNodePoolVuls operation to fix security vulnerability on nodes in a specified node pool and improve the security of cluster nodes.
     *
     * @remarks
     * - CVE compatibility is guaranteed by Security Center. Ensure that you have activated the Ultimate edition of Security Center or [purchased vulnerability fixes (pay-as-you-go)](https://help.aliyun.com/document_detail/42308.html).
     * - Fixing certain CVEs requires node restarts. Container Service performs drain operations on a node before it restarts. Ensure that the cluster has sufficient idle resources for drain operations, such as scaling out the node pool in advance.
     * - Pay attention to the compatibility between your applications and CVEs. CVE fixes are performed in batches. During the fix process, you can pause or cancel the task. After you pause or cancel the task, the batches to which fix tasks have been delivered continue to run until completion. The delivery of fix tasks to undelivered batches is paused or canceled.
     *
     * @param request - FixNodePoolVulsRequest
     *
     * @returns FixNodePoolVulsResponse
     *
     * @param string                 $clusterId
     * @param string                 $nodepoolId
     * @param FixNodePoolVulsRequest $request
     *
     * @return FixNodePoolVulsResponse
     */
    public function fixNodePoolVuls($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fixNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * Invokes the GetClusterAddonInstance operation to query the details of a specified add-on in a cluster, including the version, parameter settings, and log feature enabling status of the add-on instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterAddonInstanceResponse
     *
     * @param string         $clusterId
     * @param string         $instanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterAddonInstanceResponse
     */
    public function getClusterAddonInstanceWithOptions($clusterId, $instanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetClusterAddonInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/addon_instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the GetClusterAddonInstance operation to query the details of a specified add-on in a cluster, including the version, parameter settings, and log feature enabling status of the add-on instance.
     *
     * @returns GetClusterAddonInstanceResponse
     *
     * @param string $clusterId
     * @param string $instanceName
     *
     * @return GetClusterAddonInstanceResponse
     */
    public function getClusterAddonInstance($clusterId, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterAddonInstanceWithOptions($clusterId, $instanceName, $headers, $runtime);
    }

    /**
     * Queries whether the API server audit feature is enabled for a cluster and the Simple Log Service (SLS) project associated with the API server audit logs.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterAuditProjectResponse
     *
     * @param string         $clusterid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterAuditProjectResponse
     */
    public function getClusterAuditProjectWithOptions($clusterid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetClusterAuditProject',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterid) . '/audit',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterAuditProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the API server audit feature is enabled for a cluster and the Simple Log Service (SLS) project associated with the API server audit logs.
     *
     * @returns GetClusterAuditProjectResponse
     *
     * @param string $clusterid
     *
     * @return GetClusterAuditProjectResponse
     */
    public function getClusterAuditProject($clusterid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterAuditProjectWithOptions($clusterid, $headers, $runtime);
    }

    /**
     * Queries the details of a specific check task for a Kubernetes cluster. The intelligent O&M platform for containers provides comprehensive cluster check capabilities, including cluster upgrade, cluster migration, component installation, component upgrade, and node pool checks. You can retrieve information such as the check status, specific check items, and the creation and completion time of the check task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterCheckResponse
     *
     * @param string         $clusterId
     * @param string         $checkId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterCheckResponse
     */
    public function getClusterCheckWithOptions($clusterId, $checkId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetClusterCheck',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/checks/' . Url::percentEncode($checkId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific check task for a Kubernetes cluster. The intelligent O&M platform for containers provides comprehensive cluster check capabilities, including cluster upgrade, cluster migration, component installation, component upgrade, and node pool checks. You can retrieve information such as the check status, specific check items, and the creation and completion time of the check task.
     *
     * @returns GetClusterCheckResponse
     *
     * @param string $clusterId
     * @param string $checkId
     *
     * @return GetClusterCheckResponse
     */
    public function getClusterCheck($clusterId, $checkId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterCheckWithOptions($clusterId, $checkId, $headers, $runtime);
    }

    /**
     * Retrieves the check items for cluster diagnostics.
     *
     * @param request - GetClusterDiagnosisCheckItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterDiagnosisCheckItemsResponse
     *
     * @param string                               $clusterId
     * @param string                               $diagnosisId
     * @param GetClusterDiagnosisCheckItemsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetClusterDiagnosisCheckItemsResponse
     */
    public function getClusterDiagnosisCheckItemsWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime)
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
            'action' => 'GetClusterDiagnosisCheckItems',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/diagnosis/' . Url::percentEncode($diagnosisId) . '/check_items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterDiagnosisCheckItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the check items for cluster diagnostics.
     *
     * @param request - GetClusterDiagnosisCheckItemsRequest
     *
     * @returns GetClusterDiagnosisCheckItemsResponse
     *
     * @param string                               $clusterId
     * @param string                               $diagnosisId
     * @param GetClusterDiagnosisCheckItemsRequest $request
     *
     * @return GetClusterDiagnosisCheckItemsResponse
     */
    public function getClusterDiagnosisCheckItems($clusterId, $diagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDiagnosisCheckItemsWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the cluster diagnosis results.
     *
     * @param request - GetClusterDiagnosisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterDiagnosisResultResponse
     *
     * @param string                           $clusterId
     * @param string                           $diagnosisId
     * @param GetClusterDiagnosisResultRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetClusterDiagnosisResultResponse
     */
    public function getClusterDiagnosisResultWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime)
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
            'action' => 'GetClusterDiagnosisResult',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/diagnosis/' . Url::percentEncode($diagnosisId) . '/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the cluster diagnosis results.
     *
     * @param request - GetClusterDiagnosisResultRequest
     *
     * @returns GetClusterDiagnosisResultResponse
     *
     * @param string                           $clusterId
     * @param string                           $diagnosisId
     * @param GetClusterDiagnosisResultRequest $request
     *
     * @return GetClusterDiagnosisResultResponse
     */
    public function getClusterDiagnosisResult($clusterId, $diagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDiagnosisResultWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the cluster inspection configuration.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterInspectConfigResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterInspectConfigResponse
     */
    public function getClusterInspectConfigWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetClusterInspectConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterInspectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the cluster inspection configuration.
     *
     * @returns GetClusterInspectConfigResponse
     *
     * @param string $clusterId
     *
     * @return GetClusterInspectConfigResponse
     */
    public function getClusterInspectConfig($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterInspectConfigWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Retrieves the details of a cluster inspection report.
     *
     * @param request - GetClusterInspectReportDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterInspectReportDetailResponse
     *
     * @param string                               $clusterId
     * @param string                               $reportId
     * @param GetClusterInspectReportDetailRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetClusterInspectReportDetailResponse
     */
    public function getClusterInspectReportDetailWithOptions($clusterId, $reportId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->enableFilter) {
            @$query['enableFilter'] = $request->enableFilter;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->level) {
            @$query['level'] = $request->level;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->targetType) {
            @$query['targetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClusterInspectReportDetail',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectReports/' . Url::percentEncode($reportId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterInspectReportDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a cluster inspection report.
     *
     * @param request - GetClusterInspectReportDetailRequest
     *
     * @returns GetClusterInspectReportDetailResponse
     *
     * @param string                               $clusterId
     * @param string                               $reportId
     * @param GetClusterInspectReportDetailRequest $request
     *
     * @return GetClusterInspectReportDetailResponse
     */
    public function getClusterInspectReportDetail($clusterId, $reportId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterInspectReportDetailWithOptions($clusterId, $reportId, $request, $headers, $runtime);
    }

    /**
     * Queries the triggers of an application by name.
     *
     * @deprecated OpenAPI GetKubernetesTrigger is deprecated
     *
     * @param request - GetKubernetesTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKubernetesTriggerResponse
     *
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKubernetesTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/triggers/' . Url::percentEncode($ClusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the triggers of an application by name.
     *
     * @deprecated OpenAPI GetKubernetesTrigger is deprecated
     *
     * @param request - GetKubernetesTriggerRequest
     *
     * @returns GetKubernetesTriggerResponse
     *
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTrigger($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the upgrade status of a cluster based on the cluster ID.
     *
     * @deprecated OpenAPI GetUpgradeStatus is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUpgradeStatusResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatusWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUpgradeStatus',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '/upgrade/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the upgrade status of a cluster based on the cluster ID.
     *
     * @deprecated OpenAPI GetUpgradeStatus is deprecated
     *
     * @returns GetUpgradeStatusResponse
     *
     * @param string $ClusterId
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUpgradeStatusWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * By default, Resource Access Management (RAM) users or roles that are not cluster creators and have not been granted access permissions on all cluster dimensions do not have any RBAC permissions in a cluster. You can invoke the GrantPermissions operation to update the RBAC access permissions of a RAM user or role, including accessible resources, permission scope, and preset role types, to better manage cluster management security access control.
     *
     * @remarks
     * - If the account that invokes this API operation is a Resource Access Management (RAM) user, make sure that the account has been granted permissions to modify the cluster authorization information of other RAM users or RAM roles. Otherwise, the API returns the `StatusForbidden` or `ForbiddenGrantPermissions` fault code. For more information, see [Grant RBAC authorization to other RAM users](https://help.aliyun.com/document_detail/119035.html).
     * - The operation of updating all RBAC permissions of a RAM user or RAM role overwrites the existing cluster permissions of the target RAM user or RAM role. The request must include all permission configurations that you want to grant to the target RAM user or RAM role.
     *
     * @param request - GrantPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantPermissionsResponse
     *
     * @param string                  $uid
     * @param GrantPermissionsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GrantPermissionsResponse
     */
    public function grantPermissionsWithOptions($uid, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'GrantPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/permissions/users/' . Url::percentEncode($uid) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return GrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, Resource Access Management (RAM) users or roles that are not cluster creators and have not been granted access permissions on all cluster dimensions do not have any RBAC permissions in a cluster. You can invoke the GrantPermissions operation to update the RBAC access permissions of a RAM user or role, including accessible resources, permission scope, and preset role types, to better manage cluster management security access control.
     *
     * @remarks
     * - If the account that invokes this API operation is a Resource Access Management (RAM) user, make sure that the account has been granted permissions to modify the cluster authorization information of other RAM users or RAM roles. Otherwise, the API returns the `StatusForbidden` or `ForbiddenGrantPermissions` fault code. For more information, see [Grant RBAC authorization to other RAM users](https://help.aliyun.com/document_detail/119035.html).
     * - The operation of updating all RBAC permissions of a RAM user or RAM role overwrites the existing cluster permissions of the target RAM user or RAM role. The request must include all permission configurations that you want to grant to the target RAM user or RAM role.
     *
     * @param request - GrantPermissionsRequest
     *
     * @returns GrantPermissionsResponse
     *
     * @param string                  $uid
     * @param GrantPermissionsRequest $request
     *
     * @return GrantPermissionsResponse
     */
    public function grantPermissions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantPermissionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * To enhance Kubernetes capabilities, ACK clusters support various components, such as managed core components, and application, logging and monitoring, networking, storage, and security components. You can call the InstallClusterAddons operation to install components by specifying the component name and version.
     *
     * @param request - InstallClusterAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallClusterAddonsResponse
     *
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'InstallClusterAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/components/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To enhance Kubernetes capabilities, ACK clusters support various components, such as managed core components, and application, logging and monitoring, networking, storage, and security components. You can call the InstallClusterAddons operation to install components by specifying the component name and version.
     *
     * @param request - InstallClusterAddonsRequest
     *
     * @returns InstallClusterAddonsResponse
     *
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Installs node components on specified nodes with custom configurations.
     *
     * @param request - InstallNodePoolComponentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallNodePoolComponentsResponse
     *
     * @param string                           $clusterId
     * @param string                           $nodePoolId
     * @param InstallNodePoolComponentsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return InstallNodePoolComponentsResponse
     */
    public function installNodePoolComponentsWithOptions($clusterId, $nodePoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->nodeNames) {
            @$body['nodeNames'] = $request->nodeNames;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rollingPolicy'] = $request->rollingPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallNodePoolComponents',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodePoolId) . '/components',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallNodePoolComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs node components on specified nodes with custom configurations.
     *
     * @param request - InstallNodePoolComponentsRequest
     *
     * @returns InstallNodePoolComponentsResponse
     *
     * @param string                           $clusterId
     * @param string                           $nodePoolId
     * @param InstallNodePoolComponentsRequest $request
     *
     * @return InstallNodePoolComponentsResponse
     */
    public function installNodePoolComponents($clusterId, $nodePoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installNodePoolComponentsWithOptions($clusterId, $nodePoolId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of available components and retrieves detailed component information based on parameters such as the region, cluster type, cluster profile, and cluster version. The detailed information includes whether the component is managed, the schema of supported custom parameters, and compatible operating system architectures.
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
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->clusterSpec) {
            @$query['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->clusterType) {
            @$query['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->clusterVersion) {
            @$query['cluster_version'] = $request->clusterVersion;
        }

        if (null !== $request->profile) {
            @$query['profile'] = $request->profile;
        }

        if (null !== $request->regionId) {
            @$query['region_id'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddons',
            'version' => '2015-12-15',
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
     * Queries a list of available components and retrieves detailed component information based on parameters such as the region, cluster type, cluster profile, and cluster version. The detailed information includes whether the component is managed, the schema of supported custom parameters, and compatible operating system architectures.
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
     * Retrieves a list of self-healing rules.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoRepairPoliciesResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAutoRepairPoliciesResponse
     */
    public function listAutoRepairPoliciesWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListAutoRepairPolicies',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/auto_repair_policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAutoRepairPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of self-healing rules.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @returns ListAutoRepairPoliciesResponse
     *
     * @param string $clusterId
     *
     * @return ListAutoRepairPoliciesResponse
     */
    public function listAutoRepairPolicies($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAutoRepairPoliciesWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Queries the list of resources contained in an installed cluster component instance, including Kubernetes cluster resources and Helm release instances.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterAddonInstanceResourcesResponse
     *
     * @param string         $clusterId
     * @param string         $instanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListClusterAddonInstanceResourcesResponse
     */
    public function listClusterAddonInstanceResourcesWithOptions($clusterId, $instanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListClusterAddonInstanceResources',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/addon_instances/' . Url::percentEncode($instanceName) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterAddonInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resources contained in an installed cluster component instance, including Kubernetes cluster resources and Helm release instances.
     *
     * @returns ListClusterAddonInstanceResourcesResponse
     *
     * @param string $clusterId
     * @param string $instanceName
     *
     * @return ListClusterAddonInstanceResourcesResponse
     */
    public function listClusterAddonInstanceResources($clusterId, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterAddonInstanceResourcesWithOptions($clusterId, $instanceName, $headers, $runtime);
    }

    /**
     * Queries a list of installed add-on instances in a specified cluster and retrieves related information about the add-on instances, such as the add-on version and status.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterAddonInstancesResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListClusterAddonInstancesResponse
     */
    public function listClusterAddonInstancesWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListClusterAddonInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/addon_instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterAddonInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of installed add-on instances in a specified cluster and retrieves related information about the add-on instances, such as the add-on version and status.
     *
     * @returns ListClusterAddonInstancesResponse
     *
     * @param string $clusterId
     *
     * @return ListClusterAddonInstancesResponse
     */
    public function listClusterAddonInstances($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterAddonInstancesWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Queries the list of cluster checks and related information, such as the check type, status, creation time, and completion time, based on the cluster ID. The container intelligent O&M platform provides comprehensive Kubernetes cluster check capabilities, including cluster upgrade checks, cluster migration checks, component installation checks, component upgrade checks, and node pool checks.
     *
     * @param request - ListClusterChecksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterChecksResponse
     *
     * @param string                   $clusterId
     * @param ListClusterChecksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListClusterChecksResponse
     */
    public function listClusterChecksWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->target) {
            @$query['target'] = $request->target;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterChecks',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/checks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterChecksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of cluster checks and related information, such as the check type, status, creation time, and completion time, based on the cluster ID. The container intelligent O&M platform provides comprehensive Kubernetes cluster check capabilities, including cluster upgrade checks, cluster migration checks, component installation checks, component upgrade checks, and node pool checks.
     *
     * @param request - ListClusterChecksRequest
     *
     * @returns ListClusterChecksResponse
     *
     * @param string                   $clusterId
     * @param ListClusterChecksRequest $request
     *
     * @return ListClusterChecksResponse
     */
    public function listClusterChecks($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterChecksWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of cluster inspection reports.
     *
     * @param request - ListClusterInspectReportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterInspectReportsResponse
     *
     * @param string                           $clusterId
     * @param ListClusterInspectReportsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListClusterInspectReportsResponse
     */
    public function listClusterInspectReportsWithOptions($clusterId, $request, $headers, $runtime)
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
            'action' => 'ListClusterInspectReports',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectReports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterInspectReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of cluster inspection reports.
     *
     * @param request - ListClusterInspectReportsRequest
     *
     * @returns ListClusterInspectReportsResponse
     *
     * @param string                           $clusterId
     * @param ListClusterInspectReportsRequest $request
     *
     * @return ListClusterInspectReportsResponse
     */
    public function listClusterInspectReports($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterInspectReportsWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the list and status of user KubeConfigs issued for the current cluster.
     *
     * @remarks
     * > - You must have the ram:ListUsers and ram:ListRoles permissions.
     * > - You must have the permissions to manage Container Service for Kubernetes (CS) (AliyunCSFullAccess).
     *
     * @param request - ListClusterKubeconfigStatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterKubeconfigStatesResponse
     *
     * @param string                             $ClusterId
     * @param ListClusterKubeconfigStatesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterKubeconfigStatesResponse
     */
    public function listClusterKubeconfigStatesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudServiceKubeConfig) {
            @$query['cloudServiceKubeConfig'] = $request->cloudServiceKubeConfig;
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
            'action' => 'ListClusterKubeconfigStates',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/kubeconfig/states',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterKubeconfigStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list and status of user KubeConfigs issued for the current cluster.
     *
     * @remarks
     * > - You must have the ram:ListUsers and ram:ListRoles permissions.
     * > - You must have the permissions to manage Container Service for Kubernetes (CS) (AliyunCSFullAccess).
     *
     * @param request - ListClusterKubeconfigStatesRequest
     *
     * @returns ListClusterKubeconfigStatesResponse
     *
     * @param string                             $ClusterId
     * @param ListClusterKubeconfigStatesRequest $request
     *
     * @return ListClusterKubeconfigStatesResponse
     */
    public function listClusterKubeconfigStates($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterKubeconfigStatesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the status of node components on nodes.
     *
     * @param tmpReq - ListNodePoolComponentInstanceNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodePoolComponentInstanceNodesResponse
     *
     * @param string                                    $clusterId
     * @param string                                    $nodepoolId
     * @param string                                    $name
     * @param ListNodePoolComponentInstanceNodesRequest $tmpReq
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListNodePoolComponentInstanceNodesResponse
     */
    public function listNodePoolComponentInstanceNodesWithOptions($clusterId, $nodepoolId, $name, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNodePoolComponentInstanceNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeNames) {
            $request->nodeNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeNames, 'node_names', 'json');
        }

        $query = [];
        if (null !== $request->configRevision) {
            @$query['config_revision'] = $request->configRevision;
        }

        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->nodeNamesShrink) {
            @$query['node_names'] = $request->nodeNamesShrink;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodePoolComponentInstanceNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/component_instances/' . Url::percentEncode($name) . '/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodePoolComponentInstanceNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of node components on nodes.
     *
     * @param request - ListNodePoolComponentInstanceNodesRequest
     *
     * @returns ListNodePoolComponentInstanceNodesResponse
     *
     * @param string                                    $clusterId
     * @param string                                    $nodepoolId
     * @param string                                    $name
     * @param ListNodePoolComponentInstanceNodesRequest $request
     *
     * @return ListNodePoolComponentInstanceNodesResponse
     */
    public function listNodePoolComponentInstanceNodes($clusterId, $nodepoolId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodePoolComponentInstanceNodesWithOptions($clusterId, $nodepoolId, $name, $request, $headers, $runtime);
    }

    /**
     * Queries the list of node component instances.
     *
     * @param request - ListNodePoolComponentInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodePoolComponentInstancesResponse
     *
     * @param string                                $clusterId
     * @param string                                $nodepoolId
     * @param ListNodePoolComponentInstancesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListNodePoolComponentInstancesResponse
     */
    public function listNodePoolComponentInstancesWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodePoolComponentInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/component_instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodePoolComponentInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of node component instances.
     *
     * @param request - ListNodePoolComponentInstancesRequest
     *
     * @returns ListNodePoolComponentInstancesResponse
     *
     * @param string                                $clusterId
     * @param string                                $nodepoolId
     * @param ListNodePoolComponentInstancesRequest $request
     *
     * @return ListNodePoolComponentInstancesResponse
     */
    public function listNodePoolComponentInstances($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodePoolComponentInstancesWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * Queries the node components that can be installed in a node pool.
     *
     * @param tmpReq - ListNodePoolComponentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodePoolComponentsResponse
     *
     * @param string                        $clusterId
     * @param ListNodePoolComponentsRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListNodePoolComponentsResponse
     */
    public function listNodePoolComponentsWithOptions($clusterId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNodePoolComponentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceTypes) {
            $request->instanceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceTypes, 'instance_types', 'json');
        }

        $query = [];
        if (null !== $request->imageId) {
            @$query['image_id'] = $request->imageId;
        }

        if (null !== $request->imageType) {
            @$query['image_type'] = $request->imageType;
        }

        if (null !== $request->instanceTypesShrink) {
            @$query['instance_types'] = $request->instanceTypesShrink;
        }

        if (null !== $request->maxResults) {
            @$query['max_results'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->nodepoolId) {
            @$query['nodepool_id'] = $request->nodepoolId;
        }

        if (null !== $request->nodepoolType) {
            @$query['nodepool_type'] = $request->nodepoolType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodePoolComponents',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepool_components',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodePoolComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the node components that can be installed in a node pool.
     *
     * @param request - ListNodePoolComponentsRequest
     *
     * @returns ListNodePoolComponentsResponse
     *
     * @param string                        $clusterId
     * @param ListNodePoolComponentsRequest $request
     *
     * @return ListNodePoolComponentsResponse
     */
    public function listNodePoolComponents($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodePoolComponentsWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of automated O&M execution plans.
     *
     * @param request - ListOperationPlansRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOperationPlansResponse
     *
     * @param ListOperationPlansRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListOperationPlansResponse
     */
    public function listOperationPlansWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOperationPlans',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/operation/plans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOperationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of automated O&M execution plans.
     *
     * @param request - ListOperationPlansRequest
     *
     * @returns ListOperationPlansResponse
     *
     * @param ListOperationPlansRequest $request
     *
     * @return ListOperationPlansResponse
     */
    public function listOperationPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the latest 100 automated O&M execution plans in a specified region. When features such as Auto Mode for intelligent cluster management, automatic cluster upgrades, and automated O&M for node pools are enabled, you can use this operation to query system-generated O&M plans and their execution status, such as cluster upgrades and node pool CVE fixes.
     *
     * @param request - ListOperationPlansForRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOperationPlansForRegionResponse
     *
     * @param string                             $regionId
     * @param ListOperationPlansForRegionRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListOperationPlansForRegionResponse
     */
    public function listOperationPlansForRegionWithOptions($regionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOperationPlansForRegion',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/regions/' . Url::percentEncode($regionId) . '/operation/plans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOperationPlansForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest 100 automated O&M execution plans in a specified region. When features such as Auto Mode for intelligent cluster management, automatic cluster upgrades, and automated O&M for node pools are enabled, you can use this operation to query system-generated O&M plans and their execution status, such as cluster upgrades and node pool CVE fixes.
     *
     * @param request - ListOperationPlansForRegionRequest
     *
     * @returns ListOperationPlansForRegionResponse
     *
     * @param string                             $regionId
     * @param ListOperationPlansForRegionRequest $request
     *
     * @return ListOperationPlansForRegionResponse
     */
    public function listOperationPlansForRegion($regionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationPlansForRegionWithOptions($regionId, $request, $headers, $runtime);
    }

    /**
     * Queries the tag list of clusters. You can add tag key-value pairs to clusters so that developers and O&M engineers can classify and manage clusters more flexibly. This better supports requirements such as monitoring, cost analysis, and tenant isolation. You can call the ListTagResources operation to obtain the list of resource tags and query tag details, such as key-value pairs and associated clusters.
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
        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'resource_ids', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->nextToken) {
            @$query['next_token'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['region_id'] = $request->regionId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['resource_ids'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resource_type'] = $request->resourceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2015-12-15',
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
     * Queries the tag list of clusters. You can add tag key-value pairs to clusters so that developers and O&M engineers can classify and manage clusters more flexibly. This better supports requirements such as monitoring, cost analysis, and tenant isolation. You can call the ListTagResources operation to obtain the list of resource tags and query tag details, such as key-value pairs and associated clusters.
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
     * Queries the KubeConfig status list of all clusters for the current user.
     *
     * @remarks
     * > To call this operation, you must have the permissions to manage Container Service (CS) (AliyunCSFullAccess).
     *
     * @param request - ListUserKubeConfigStatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserKubeConfigStatesResponse
     *
     * @param string                          $Uid
     * @param ListUserKubeConfigStatesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListUserKubeConfigStatesResponse
     */
    public function listUserKubeConfigStatesWithOptions($Uid, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserKubeConfigStates',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/users/' . Url::percentEncode($Uid) . '/kubeconfig/states',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserKubeConfigStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the KubeConfig status list of all clusters for the current user.
     *
     * @remarks
     * > To call this operation, you must have the permissions to manage Container Service (CS) (AliyunCSFullAccess).
     *
     * @param request - ListUserKubeConfigStatesRequest
     *
     * @returns ListUserKubeConfigStatesResponse
     *
     * @param string                          $Uid
     * @param ListUserKubeConfigStatesRequest $request
     *
     * @return ListUserKubeConfigStatesResponse
     */
    public function listUserKubeConfigStates($Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserKubeConfigStatesWithOptions($Uid, $request, $headers, $runtime);
    }

    /**
     * Migrates a cluster.
     *
     * @remarks
     * After you migrate an ACK basic managed cluster to an ACK Pro managed cluster, a [cluster management fee](https://help.aliyun.com/document_detail/462278.html) charged by ACK is added. The billing of other cloud resources remains unchanged.
     *
     * @param request - MigrateClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateClusterResponse
     *
     * @param string                $clusterId
     * @param MigrateClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return MigrateClusterResponse
     */
    public function migrateClusterWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ossBucketEndpoint) {
            @$body['oss_bucket_endpoint'] = $request->ossBucketEndpoint;
        }

        if (null !== $request->ossBucketName) {
            @$body['oss_bucket_name'] = $request->ossBucketName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MigrateCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/migrate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates a cluster.
     *
     * @remarks
     * After you migrate an ACK basic managed cluster to an ACK Pro managed cluster, a [cluster management fee](https://help.aliyun.com/document_detail/462278.html) charged by ACK is added. The billing of other cloud resources remains unchanged.
     *
     * @param request - MigrateClusterRequest
     *
     * @returns MigrateClusterResponse
     *
     * @param string                $clusterId
     * @param MigrateClusterRequest $request
     *
     * @return MigrateClusterResponse
     */
    public function migrateCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateClusterWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Modifies a self-healing rule.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param request - ModifyAutoRepairPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoRepairPolicyResponse
     *
     * @param string                        $clusterId
     * @param string                        $policyId
     * @param ModifyAutoRepairPolicyRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAutoRepairPolicyResponse
     */
    public function modifyAutoRepairPolicyWithOptions($clusterId, $policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->rules) {
            @$body['rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoRepairPolicy',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/auto_repair_policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyAutoRepairPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a self-healing rule.
     *
     * @remarks
     * >Notice: This API is not yet available. Stay tuned.
     *
     * @param request - ModifyAutoRepairPolicyRequest
     *
     * @returns ModifyAutoRepairPolicyResponse
     *
     * @param string                        $clusterId
     * @param string                        $policyId
     * @param ModifyAutoRepairPolicyRequest $request
     *
     * @return ModifyAutoRepairPolicyResponse
     */
    public function modifyAutoRepairPolicy($clusterId, $policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAutoRepairPolicyWithOptions($clusterId, $policyId, $request, $headers, $runtime);
    }

    /**
     * Modifies the configuration of an ACK cluster.
     *
     * @remarks
     * <notice>Starting from July 4, 2026, the request parameters instance_deletion_protection, ingress_loadbalancer_id, and access_control_list will no longer take effect. For more information about the changes, see [Announcement on changes to OpenAPI request and response parameters and OpenAPI deprecation for ACK cluster management](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - ModifyClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterResponse
     *
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessControlList) {
            @$body['access_control_list'] = $request->accessControlList;
        }

        if (null !== $request->apiServerCustomCertSans) {
            @$body['api_server_custom_cert_sans'] = $request->apiServerCustomCertSans;
        }

        if (null !== $request->apiServerEip) {
            @$body['api_server_eip'] = $request->apiServerEip;
        }

        if (null !== $request->apiServerEipId) {
            @$body['api_server_eip_id'] = $request->apiServerEipId;
        }

        if (null !== $request->clientToken) {
            @$body['client_token'] = $request->clientToken;
        }

        if (null !== $request->clusterName) {
            @$body['cluster_name'] = $request->clusterName;
        }

        if (null !== $request->clusterSpec) {
            @$body['cluster_spec'] = $request->clusterSpec;
        }

        if (null !== $request->controlPlaneConfig) {
            @$body['control_plane_config'] = $request->controlPlaneConfig;
        }

        if (null !== $request->controlPlaneEndpointsConfig) {
            @$body['control_plane_endpoints_config'] = $request->controlPlaneEndpointsConfig;
        }

        if (null !== $request->deletionProtection) {
            @$body['deletion_protection'] = $request->deletionProtection;
        }

        if (null !== $request->enableRrsa) {
            @$body['enable_rrsa'] = $request->enableRrsa;
        }

        if (null !== $request->ingressDomainRebinding) {
            @$body['ingress_domain_rebinding'] = $request->ingressDomainRebinding;
        }

        if (null !== $request->ingressLoadbalancerId) {
            @$body['ingress_loadbalancer_id'] = $request->ingressLoadbalancerId;
        }

        if (null !== $request->instanceDeletionProtection) {
            @$body['instance_deletion_protection'] = $request->instanceDeletionProtection;
        }

        if (null !== $request->maintenanceWindow) {
            @$body['maintenance_window'] = $request->maintenanceWindow;
        }

        if (null !== $request->operationPolicy) {
            @$body['operation_policy'] = $request->operationPolicy;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resource_group_id'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$body['security_group_id'] = $request->securityGroupId;
        }

        if (null !== $request->systemEventsLogging) {
            @$body['system_events_logging'] = $request->systemEventsLogging;
        }

        if (null !== $request->timezone) {
            @$body['timezone'] = $request->timezone;
        }

        if (null !== $request->vswitchIds) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of an ACK cluster.
     *
     * @remarks
     * <notice>Starting from July 4, 2026, the request parameters instance_deletion_protection, ingress_loadbalancer_id, and access_control_list will no longer take effect. For more information about the changes, see [Announcement on changes to OpenAPI request and response parameters and OpenAPI deprecation for ACK cluster management](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - ModifyClusterRequest
     *
     * @returns ModifyClusterResponse
     *
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Modifies the configuration of an installed cluster add-on instance. Modifying the configuration may affect your services. Evaluate the impact, perform the operation during off-peak hours, and back up your data in advance.
     *
     * @remarks
     * You can call this operation to modify the configuration of add-ons in common clusters and the control plane parameter settings of ACK Pro clusters:
     * - You can call the DescribeClusterAddonMetadata API operation to query the list of configurable parameters for common add-ons. For details, see [Query cluster add-on version metadata](https://help.aliyun.com/document_detail/2667944.html).
     * - For the list of configurable parameters for the control plane components of ACK Pro clusters, see [Customize the control plane parameter settings of an ACK Pro cluster](https://help.aliyun.com/document_detail/199588.html).
     * Modifying the configuration may cause add-on redeployment and restart. Evaluate the impact before you proceed.
     *
     * @param request - ModifyClusterAddonRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterAddonResponse
     *
     * @param string                    $clusterId
     * @param string                    $componentId
     * @param ModifyClusterAddonRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyClusterAddonResponse
     */
    public function modifyClusterAddonWithOptions($clusterId, $componentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterAddon',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/components/' . Url::percentEncode($componentId) . '/config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ModifyClusterAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of an installed cluster add-on instance. Modifying the configuration may affect your services. Evaluate the impact, perform the operation during off-peak hours, and back up your data in advance.
     *
     * @remarks
     * You can call this operation to modify the configuration of add-ons in common clusters and the control plane parameter settings of ACK Pro clusters:
     * - You can call the DescribeClusterAddonMetadata API operation to query the list of configurable parameters for common add-ons. For details, see [Query cluster add-on version metadata](https://help.aliyun.com/document_detail/2667944.html).
     * - For the list of configurable parameters for the control plane components of ACK Pro clusters, see [Customize the control plane parameter settings of an ACK Pro cluster](https://help.aliyun.com/document_detail/199588.html).
     * Modifying the configuration may cause add-on redeployment and restart. Evaluate the impact before you proceed.
     *
     * @param request - ModifyClusterAddonRequest
     *
     * @returns ModifyClusterAddonResponse
     *
     * @param string                    $clusterId
     * @param string                    $componentId
     * @param ModifyClusterAddonRequest $request
     *
     * @return ModifyClusterAddonResponse
     */
    public function modifyClusterAddon($clusterId, $componentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterAddonWithOptions($clusterId, $componentId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a node pool based on the node pool ID by calling the ModifyClusterNodePool operation.
     *
     * @remarks
     * <notice>Starting July 4, 2026, the request parameters instance_deletion_protection, ingress_loadbalancer_id, and access_control_list will no longer take effect. For more information about the changes, see [Announcement on changes to input and output parameters of ACK cluster management OpenAPI operations and deprecation of OpenAPI operations](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - ModifyClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterNodePoolResponse
     *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param ModifyClusterNodePoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyClusterNodePoolResponse
     */
    public function modifyClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoScaling) {
            @$body['auto_scaling'] = $request->autoScaling;
        }

        if (null !== $request->concurrency) {
            @$body['concurrency'] = $request->concurrency;
        }

        if (null !== $request->efloNodeGroup) {
            @$body['eflo_node_group'] = $request->efloNodeGroup;
        }

        if (null !== $request->kubernetesConfig) {
            @$body['kubernetes_config'] = $request->kubernetesConfig;
        }

        if (null !== $request->management) {
            @$body['management'] = $request->management;
        }

        if (null !== $request->nodepoolInfo) {
            @$body['nodepool_info'] = $request->nodepoolInfo;
        }

        if (null !== $request->scalingGroup) {
            @$body['scaling_group'] = $request->scalingGroup;
        }

        if (null !== $request->teeConfig) {
            @$body['tee_config'] = $request->teeConfig;
        }

        if (null !== $request->updateNodes) {
            @$body['update_nodes'] = $request->updateNodes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a node pool based on the node pool ID by calling the ModifyClusterNodePool operation.
     *
     * @remarks
     * <notice>Starting July 4, 2026, the request parameters instance_deletion_protection, ingress_loadbalancer_id, and access_control_list will no longer take effect. For more information about the changes, see [Announcement on changes to input and output parameters of ACK cluster management OpenAPI operations and deprecation of OpenAPI operations](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - ModifyClusterNodePoolRequest
     *
     * @returns ModifyClusterNodePoolResponse
     *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param ModifyClusterNodePoolRequest $request
     *
     * @return ModifyClusterNodePoolResponse
     */
    public function modifyClusterNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * Updates the tags of a cluster. You can add tag key-value pairs to a cluster to help developers and O&M engineers classify and manage clusters more flexibly, and better support requirements such as monitoring, cost analysis, and tenant isolation. You can call the ModifyClusterTags operation to modify cluster tags.
     *
     * @remarks
     * - This operation performs a full update. When you call this operation, specify all target tags in the request parameters to avoid losing existing tags. To perform an incremental update, use the [TagResources](https://help.aliyun.com/document_detail/2667969.html) operation to add tags to the cluster.
     *
     * @param request - ModifyClusterTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterTagsResponse
     *
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterTags',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ModifyClusterTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the tags of a cluster. You can add tag key-value pairs to a cluster to help developers and O&M engineers classify and manage clusters more flexibly, and better support requirements such as monitoring, cost analysis, and tenant isolation. You can call the ModifyClusterTags operation to modify cluster tags.
     *
     * @remarks
     * - This operation performs a full update. When you call this operation, specify all target tags in the request parameters to avoid losing existing tags. To perform an incremental update, use the [TagResources](https://help.aliyun.com/document_detail/2667969.html) operation to add tags to the cluster.
     *
     * @param request - ModifyClusterTagsRequest
     *
     * @returns ModifyClusterTagsResponse
     *
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTags($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Modifies the node configurations in a cluster node pool, such as kubelet configurations and rolling update configurations. Modifying node configurations applies changes in batches and restarts kubelet, which may affect node operations and workload execution. Perform this operation during off-peak hours.
     *
     * @remarks
     * > ACK supports modifying the kubelet configurations of nodes in a node pool. After the modification is complete, the configurations automatically take effect on existing nodes in the node pool, and new nodes added to the node pool also use the new configurations.
     *
     * @param request - ModifyNodePoolNodeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodePoolNodeConfigResponse
     *
     * @param string                          $ClusterId
     * @param string                          $NodepoolId
     * @param ModifyNodePoolNodeConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyNodePoolNodeConfigResponse
     */
    public function modifyNodePoolNodeConfigWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->containerdConfig) {
            @$body['containerd_config'] = $request->containerdConfig;
        }

        if (null !== $request->kubeletConfig) {
            @$body['kubelet_config'] = $request->kubeletConfig;
        }

        if (null !== $request->nodeNames) {
            @$body['node_names'] = $request->nodeNames;
        }

        if (null !== $request->osConfig) {
            @$body['os_config'] = $request->osConfig;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rolling_policy'] = $request->rollingPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNodePoolNodeConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '/node_config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodePoolNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the node configurations in a cluster node pool, such as kubelet configurations and rolling update configurations. Modifying node configurations applies changes in batches and restarts kubelet, which may affect node operations and workload execution. Perform this operation during off-peak hours.
     *
     * @remarks
     * > ACK supports modifying the kubelet configurations of nodes in a node pool. After the modification is complete, the configurations automatically take effect on existing nodes in the node pool, and new nodes added to the node pool also use the new configurations.
     *
     * @param request - ModifyNodePoolNodeConfigRequest
     *
     * @returns ModifyNodePoolNodeConfigResponse
     *
     * @param string                          $ClusterId
     * @param string                          $NodepoolId
     * @param ModifyNodePoolNodeConfigRequest $request
     *
     * @return ModifyNodePoolNodeConfigResponse
     */
    public function modifyNodePoolNodeConfig($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodePoolNodeConfigWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * Updates a policy rule instance in a specified cluster. You can modify the governance action, such as alert or block, and the namespace scope of the policy instance.
     *
     * @param request - ModifyPolicyInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyInstanceResponse
     *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param ModifyPolicyInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyPolicyInstanceResponse
     */
    public function modifyPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->instanceName) {
            @$body['instance_name'] = $request->instanceName;
        }

        if (null !== $request->namespaces) {
            @$body['namespaces'] = $request->namespaces;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicyInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/policies/' . Url::percentEncode($policyName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a policy rule instance in a specified cluster. You can modify the governance action, such as alert or block, and the namespace scope of the policy instance.
     *
     * @param request - ModifyPolicyInstanceRequest
     *
     * @returns ModifyPolicyInstanceResponse
     *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param ModifyPolicyInstanceRequest $request
     *
     * @return ModifyPolicyInstanceResponse
     */
    public function modifyPolicyInstance($clusterId, $policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime);
    }

    /**
     * Activates Container Service for Kubernetes (ACK) for first-time users.
     *
     * @remarks
     * - An Alibaba Cloud account can activate Container Service for Kubernetes (ACK).
     * - A Resource Access Management (RAM) user to which the AdministratorAccess policy is attached can activate the service.
     *
     * @param request - OpenAckServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenAckServiceResponse
     *
     * @param OpenAckServiceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return OpenAckServiceResponse
     */
    public function openAckServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenAckService',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/service/open',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenAckServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Container Service for Kubernetes (ACK) for first-time users.
     *
     * @remarks
     * - An Alibaba Cloud account can activate Container Service for Kubernetes (ACK).
     * - A Resource Access Management (RAM) user to which the AdministratorAccess policy is attached can activate the service.
     *
     * @param request - OpenAckServiceRequest
     *
     * @returns OpenAckServiceResponse
     *
     * @param OpenAckServiceRequest $request
     *
     * @return OpenAckServiceResponse
     */
    public function openAckService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openAckServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Pauses a cluster upgrade.
     *
     * @deprecated OpenAPI PauseClusterUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseClusterUpgradeResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgradeWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'PauseClusterUpgrade',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '/upgrade/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PauseClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Pauses a cluster upgrade.
     *
     * @deprecated OpenAPI PauseClusterUpgrade is deprecated
     *
     * @returns PauseClusterUpgradeResponse
     *
     * @param string $ClusterId
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgrade($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseClusterUpgradeWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Pauses a component upgrade.
     *
     * @deprecated OpenAPI PauseComponentUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseComponentUpgradeResponse
     *
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'PauseComponentUpgrade',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterid) . '/components/' . Url::percentEncode($componentid) . '/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PauseComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Pauses a component upgrade.
     *
     * @deprecated OpenAPI PauseComponentUpgrade is deprecated
     *
     * @returns PauseComponentUpgradeResponse
     *
     * @param string $clusterid
     * @param string $componentid
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * Pauses a running cluster task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PauseTaskResponse
     */
    public function pauseTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'PauseTask',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PauseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a running cluster task.
     *
     * @returns PauseTaskResponse
     *
     * @param string $taskId
     *
     * @return PauseTaskResponse
     */
    public function pauseTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * 移除集群节点.
     *
     * @deprecated OpenAPI RemoveClusterNodes is deprecated
     *
     * @param request - RemoveClusterNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveClusterNodesResponse
     *
     * @param string                    $ClusterId
     * @param RemoveClusterNodesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->drainNode) {
            @$body['drain_node'] = $request->drainNode;
        }

        if (null !== $request->nodes) {
            @$body['nodes'] = $request->nodes;
        }

        if (null !== $request->releaseNode) {
            @$body['release_node'] = $request->releaseNode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveClusterNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '/nodes/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RemoveClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 移除集群节点.
     *
     * @deprecated OpenAPI RemoveClusterNodes is deprecated
     *
     * @param request - RemoveClusterNodesRequest
     *
     * @returns RemoveClusterNodesResponse
     *
     * @param string                    $ClusterId
     * @param RemoveClusterNodesRequest $request
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Removes nodes from a node pool in a cluster and adjusts the expected number of nodes when the nodes are no longer needed. When removing nodes, you can specify whether to release the associated ECS instances and whether to automatically drain the nodes. Node removal involves pod migration, which may affect your workloads. Perform this operation during off-peak hours and back up your data in advance.
     *
     * @remarks
     * - Node removal involves pod migration, which may affect your workloads. Perform this operation during off-peak hours.
     * - Unexpected risks may occur during the operation. Back up your data in advance.
     * - During the operation, the system sets the nodes to the unschedulable state.
     * - Only worker nodes are removed. Master nodes are not removed.
     * - Even if you choose to release nodes (by setting release_node to true), subscription nodes are not released. You must release them manually in the [ECS console](https://ecs.console.aliyun.com/) after removing them from the node pool.
     *
     * @param tmpReq - RemoveNodePoolNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveNodePoolNodesResponse
     *
     * @param string                     $ClusterId
     * @param string                     $NodepoolId
     * @param RemoveNodePoolNodesRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveNodePoolNodesResponse
     */
    public function removeNodePoolNodesWithOptions($ClusterId, $NodepoolId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveNodePoolNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'instance_ids', 'json');
        }

        if (null !== $tmpReq->nodes) {
            $request->nodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'nodes', 'json');
        }

        $query = [];
        if (null !== $request->concurrency) {
            @$query['concurrency'] = $request->concurrency;
        }

        if (null !== $request->drainNode) {
            @$query['drain_node'] = $request->drainNode;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['instance_ids'] = $request->instanceIdsShrink;
        }

        if (null !== $request->nodesShrink) {
            @$query['nodes'] = $request->nodesShrink;
        }

        if (null !== $request->releaseNode) {
            @$query['release_node'] = $request->releaseNode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveNodePoolNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '/nodes',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveNodePoolNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes nodes from a node pool in a cluster and adjusts the expected number of nodes when the nodes are no longer needed. When removing nodes, you can specify whether to release the associated ECS instances and whether to automatically drain the nodes. Node removal involves pod migration, which may affect your workloads. Perform this operation during off-peak hours and back up your data in advance.
     *
     * @remarks
     * - Node removal involves pod migration, which may affect your workloads. Perform this operation during off-peak hours.
     * - Unexpected risks may occur during the operation. Back up your data in advance.
     * - During the operation, the system sets the nodes to the unschedulable state.
     * - Only worker nodes are removed. Master nodes are not removed.
     * - Even if you choose to release nodes (by setting release_node to true), subscription nodes are not released. You must release them manually in the [ECS console](https://ecs.console.aliyun.com/) after removing them from the node pool.
     *
     * @param request - RemoveNodePoolNodesRequest
     *
     * @returns RemoveNodePoolNodesResponse
     *
     * @param string                     $ClusterId
     * @param string                     $NodepoolId
     * @param RemoveNodePoolNodesRequest $request
     *
     * @return RemoveNodePoolNodesResponse
     */
    public function removeNodePoolNodes($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeNodePoolNodesWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * Repairs a node pool in a cluster.
     *
     * @param request - RepairClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RepairClusterNodePoolResponse
     *
     * @param string                       $clusterId
     * @param string                       $nodepoolId
     * @param RepairClusterNodePoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RepairClusterNodePoolResponse
     */
    public function repairClusterNodePoolWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRestart) {
            @$body['auto_restart'] = $request->autoRestart;
        }

        if (null !== $request->nodes) {
            @$body['nodes'] = $request->nodes;
        }

        if (null !== $request->operations) {
            @$body['operations'] = $request->operations;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RepairClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/repair',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RepairClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Repairs a node pool in a cluster.
     *
     * @param request - RepairClusterNodePoolRequest
     *
     * @returns RepairClusterNodePoolResponse
     *
     * @param string                       $clusterId
     * @param string                       $nodepoolId
     * @param RepairClusterNodePoolRequest $request
     *
     * @return RepairClusterNodePoolResponse
     */
    public function repairClusterNodePool($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->repairClusterNodePoolWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * Resumes a paused component upgrade task.
     *
     * @deprecated OpenAPI ResumeComponentUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeComponentUpgradeResponse
     *
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeComponentUpgrade',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterid) . '/components/' . Url::percentEncode($componentid) . '/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ResumeComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Resumes a paused component upgrade task.
     *
     * @deprecated OpenAPI ResumeComponentUpgrade is deprecated
     *
     * @returns ResumeComponentUpgradeResponse
     *
     * @param string $clusterid
     * @param string $componentid
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * Resumes a paused cluster task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeTaskResponse
     */
    public function resumeTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeTask',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a paused cluster task.
     *
     * @returns ResumeTaskResponse
     *
     * @param string $taskId
     *
     * @return ResumeTaskResponse
     */
    public function resumeTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * Resumes the upgrade of a cluster that is in the upgrade-paused state based on the cluster ID.
     *
     * @deprecated OpenAPI ResumeUpgradeCluster is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeUpgradeClusterResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeClusterWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeUpgradeCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '/upgrade/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ResumeUpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Resumes the upgrade of a cluster that is in the upgrade-paused state based on the cluster ID.
     *
     * @deprecated OpenAPI ResumeUpgradeCluster is deprecated
     *
     * @returns ResumeUpgradeClusterResponse
     *
     * @param string $ClusterId
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeCluster($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeUpgradeClusterWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * If you want to revoke the cluster KubeConfig credential owned by the currently logged-on Alibaba Cloud account or Resource Access Management (RAM) user, you can call the RevokeK8sClusterKubeConfig operation to revoke it. After the revocation succeeds, the cluster generates a new KubeConfig, and the original KubeConfig becomes invalid.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeK8sClusterKubeConfigResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RevokeK8sClusterKubeConfigResponse
     */
    public function revokeK8sClusterKubeConfigWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RevokeK8sClusterKubeConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . Url::percentEncode($ClusterId) . '/certs',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeK8sClusterKubeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you want to revoke the cluster KubeConfig credential owned by the currently logged-on Alibaba Cloud account or Resource Access Management (RAM) user, you can call the RevokeK8sClusterKubeConfig operation to revoke it. After the revocation succeeds, the cluster generates a new KubeConfig, and the original KubeConfig becomes invalid.
     *
     * @returns RevokeK8sClusterKubeConfigResponse
     *
     * @param string $ClusterId
     *
     * @return RevokeK8sClusterKubeConfigResponse
     */
    public function revokeK8sClusterKubeConfig($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeK8sClusterKubeConfigWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Initiates a check for a Kubernetes cluster. The Container Intelligent O&M Platform provides comprehensive check capabilities for Kubernetes clusters, including cluster upgrade, cluster migration, component installation, component upgrade, and node pool checks. The platform automatically triggers a check before an upgrade, migration, or installation. You can perform the change operation only after the check passes. You can also manually call the RunClusterCheck operation to perform a cluster check. Regularly check and maintain your clusters to prevent security risks.
     *
     * @param request - RunClusterCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunClusterCheckResponse
     *
     * @param string                 $clusterId
     * @param RunClusterCheckRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RunClusterCheckResponse
     */
    public function runClusterCheckWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->target) {
            @$body['target'] = $request->target;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunClusterCheck',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/checks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a check for a Kubernetes cluster. The Container Intelligent O&M Platform provides comprehensive check capabilities for Kubernetes clusters, including cluster upgrade, cluster migration, component installation, component upgrade, and node pool checks. The platform automatically triggers a check before an upgrade, migration, or installation. You can perform the change operation only after the check passes. You can also manually call the RunClusterCheck operation to perform a cluster check. Regularly check and maintain your clusters to prevent security risks.
     *
     * @param request - RunClusterCheckRequest
     *
     * @returns RunClusterCheckResponse
     *
     * @param string                 $clusterId
     * @param RunClusterCheckRequest $request
     *
     * @return RunClusterCheckResponse
     */
    public function runClusterCheck($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runClusterCheckWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Initiates a cluster inspection and creates an inspection report.
     *
     * @param request - RunClusterInspectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunClusterInspectResponse
     *
     * @param string                   $clusterId
     * @param RunClusterInspectRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunClusterInspectResponse
     */
    public function runClusterInspectWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunClusterInspect',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectReports',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunClusterInspectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a cluster inspection and creates an inspection report.
     *
     * @param request - RunClusterInspectRequest
     *
     * @returns RunClusterInspectResponse
     *
     * @param string                   $clusterId
     * @param RunClusterInspectRequest $request
     *
     * @return RunClusterInspectResponse
     */
    public function runClusterInspect($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runClusterInspectWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Executes O&M operations on a node.
     *
     * @param request - RunNodeOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunNodeOperationResponse
     *
     * @param string                  $clusterId
     * @param string                  $nodepoolId
     * @param string                  $nodeName
     * @param RunNodeOperationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RunNodeOperationResponse
     */
    public function runNodeOperationWithOptions($clusterId, $nodepoolId, $nodeName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operationAction) {
            @$body['operationAction'] = $request->operationAction;
        }

        if (null !== $request->operationArgs) {
            @$body['operationArgs'] = $request->operationArgs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunNodeOperation',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/nodes/' . Url::percentEncode($nodeName) . '/operation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunNodeOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes O&M operations on a node.
     *
     * @param request - RunNodeOperationRequest
     *
     * @returns RunNodeOperationResponse
     *
     * @param string                  $clusterId
     * @param string                  $nodepoolId
     * @param string                  $nodeName
     * @param RunNodeOperationRequest $request
     *
     * @return RunNodeOperationResponse
     */
    public function runNodeOperation($clusterId, $nodepoolId, $nodeName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runNodeOperationWithOptions($clusterId, $nodepoolId, $nodeName, $request, $headers, $runtime);
    }

    /**
     * Scales out the nodes in a node pool to ensure sufficient node capacity for workloads.
     *
     * @param request - ScaleClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleClusterNodePoolResponse
     *
     * @param string                      $ClusterId
     * @param string                      $NodepoolId
     * @param ScaleClusterNodePoolRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ScaleClusterNodePoolResponse
     */
    public function scaleClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->count) {
            @$body['count'] = $request->count;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales out the nodes in a node pool to ensure sufficient node capacity for workloads.
     *
     * @param request - ScaleClusterNodePoolRequest
     *
     * @returns ScaleClusterNodePoolResponse
     *
     * @param string                      $ClusterId
     * @param string                      $NodepoolId
     * @param ScaleClusterNodePoolRequest $request
     *
     * @return ScaleClusterNodePoolResponse
     */
    public function scaleClusterNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * 扩容Kubernetes集群.
     *
     * @param request - ScaleOutClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleOutClusterResponse
     *
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudMonitorFlags) {
            @$body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }

        if (null !== $request->count) {
            @$body['count'] = $request->count;
        }

        if (null !== $request->cpuPolicy) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }

        if (null !== $request->imageId) {
            @$body['image_id'] = $request->imageId;
        }

        if (null !== $request->keyPair) {
            @$body['key_pair'] = $request->keyPair;
        }

        if (null !== $request->loginPassword) {
            @$body['login_password'] = $request->loginPassword;
        }

        if (null !== $request->rdsInstances) {
            @$body['rds_instances'] = $request->rdsInstances;
        }

        if (null !== $request->runtime) {
            @$body['runtime'] = $request->runtime;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->taints) {
            @$body['taints'] = $request->taints;
        }

        if (null !== $request->userData) {
            @$body['user_data'] = $request->userData;
        }

        if (null !== $request->vswitchIds) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }

        if (null !== $request->workerAutoRenew) {
            @$body['worker_auto_renew'] = $request->workerAutoRenew;
        }

        if (null !== $request->workerAutoRenewPeriod) {
            @$body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }

        if (null !== $request->workerDataDisks) {
            @$body['worker_data_disks'] = $request->workerDataDisks;
        }

        if (null !== $request->workerInstanceChargeType) {
            @$body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }

        if (null !== $request->workerInstanceTypes) {
            @$body['worker_instance_types'] = $request->workerInstanceTypes;
        }

        if (null !== $request->workerPeriod) {
            @$body['worker_period'] = $request->workerPeriod;
        }

        if (null !== $request->workerPeriodUnit) {
            @$body['worker_period_unit'] = $request->workerPeriodUnit;
        }

        if (null !== $request->workerSystemDiskCategory) {
            @$body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }

        if (null !== $request->workerSystemDiskSize) {
            @$body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleOutCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleOutClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 扩容Kubernetes集群.
     *
     * @param request - ScaleOutClusterRequest
     *
     * @returns ScaleOutClusterResponse
     *
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Invokes the ScanClusterVuls API operation to scan ACK clusters for potential security vulnerabilities, including container workload vulnerabilities, third-party software vulnerabilities, CVE vulnerabilities, WebCMS vulnerabilities, and Windows operating system vulnerabilities. Regularly scan clusters for security vulnerabilities to improve cluster security.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScanClusterVulsResponse
     *
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ScanClusterVulsResponse
     */
    public function scanClusterVulsWithOptions($clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ScanClusterVuls',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/vuls/scan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScanClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the ScanClusterVuls API operation to scan ACK clusters for potential security vulnerabilities, including container workload vulnerabilities, third-party software vulnerabilities, CVE vulnerabilities, WebCMS vulnerabilities, and Windows operating system vulnerabilities. Regularly scan clusters for security vulnerabilities to improve cluster security.
     *
     * @returns ScanClusterVulsResponse
     *
     * @param string $clusterId
     *
     * @return ScanClusterVulsResponse
     */
    public function scanClusterVuls($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scanClusterVulsWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * Starts the specified alert rule.
     *
     * @param request - StartAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAlertResponse
     *
     * @param string            $ClusterId
     * @param StartAlertRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return StartAlertResponse
     */
    public function startAlertWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertRuleGroupName) {
            @$body['alert_rule_group_name'] = $request->alertRuleGroupName;
        }

        if (null !== $request->alertRuleName) {
            @$body['alert_rule_name'] = $request->alertRuleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartAlert',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/' . Url::percentEncode($ClusterId) . '/alert_rule/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the specified alert rule.
     *
     * @param request - StartAlertRequest
     *
     * @returns StartAlertResponse
     *
     * @param string            $ClusterId
     * @param StartAlertRequest $request
     *
     * @return StartAlertResponse
     */
    public function startAlert($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAlertWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Disables alert rules in the ACK Alert Center. You can disable an entire alert rule group or an individual alert rule.
     *
     * @param request - StopAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAlertResponse
     *
     * @param string           $ClusterId
     * @param StopAlertRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return StopAlertResponse
     */
    public function stopAlertWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertRuleGroupName) {
            @$body['alert_rule_group_name'] = $request->alertRuleGroupName;
        }

        if (null !== $request->alertRuleName) {
            @$body['alert_rule_name'] = $request->alertRuleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopAlert',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/' . Url::percentEncode($ClusterId) . '/alert_rule/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables alert rules in the ACK Alert Center. You can disable an entire alert rule group or an individual alert rule.
     *
     * @param request - StopAlertRequest
     *
     * @returns StopAlertResponse
     *
     * @param string           $ClusterId
     * @param StopAlertRequest $request
     *
     * @return StopAlertResponse
     */
    public function stopAlert($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAlertWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Synchronizes a cluster node pool, including node pool metadata and node information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncClusterNodePoolResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SyncClusterNodePoolResponse
     */
    public function syncClusterNodePoolWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'SyncClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/sync_nodepools',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes a cluster node pool, including node pool metadata and node information.
     *
     * @returns SyncClusterNodePoolResponse
     *
     * @param string $ClusterId
     *
     * @return SyncClusterNodePoolResponse
     */
    public function syncClusterNodePool($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncClusterNodePoolWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Binds tags to a cluster. Adding tag key-value pairs allows cluster developers and O&M engineers to classify and manage clusters more flexibly, and better supports requirements such as monitoring, cost analysis, and tenant isolation. You can call the TagResources operation to bind tags to a cluster.
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
            @$body['region_id'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$body['resource_ids'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resource_type'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds tags to a cluster. Adding tag key-value pairs allows cluster developers and O&M engineers to classify and manage clusters more flexibly, and better supports requirements such as monitoring, cost analysis, and tenant isolation. You can call the TagResources operation to bind tags to a cluster.
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
     * Uninstalls specified components from a cluster and specifies whether to delete the associated Alibaba Cloud resources.
     *
     * @param request - UnInstallClusterAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnInstallClusterAddonsResponse
     *
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->addons),
        ]);
        $params = new Params([
            'action' => 'UnInstallClusterAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/components/uninstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnInstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls specified components from a cluster and specifies whether to delete the associated Alibaba Cloud resources.
     *
     * @param request - UnInstallClusterAddonsRequest
     *
     * @returns UnInstallClusterAddonsResponse
     *
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Deletes resource tags when the tag key-value pairs of a cluster are no longer needed.
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
        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'resource_ids', 'json');
        }

        if (null !== $tmpReq->tagKeys) {
            $request->tagKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'tag_keys', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['region_id'] = $request->regionId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['resource_ids'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resource_type'] = $request->resourceType;
        }

        if (null !== $request->tagKeysShrink) {
            @$query['tag_keys'] = $request->tagKeysShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2015-12-15',
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
     * Deletes resource tags when the tag key-value pairs of a cluster are no longer needed.
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
     * Enables or disables the audit log feature for a specified ACK cluster, or updates the audit log configurations to record requests to the Kubernetes API and the corresponding results for tracing cluster operation history and troubleshooting cluster faults.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of <props="china">[Simple Log Service](https://www.aliyun.com/price/product#/sls/detail/sls)<props="intl">[Simple Log Service](https://www.alibabacloud.com/product/log-service/pricing).
     *
     * @param request - UpdateClusterAuditLogConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterAuditLogConfigResponse
     *
     * @param string                             $clusterid
     * @param UpdateClusterAuditLogConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateClusterAuditLogConfigResponse
     */
    public function updateClusterAuditLogConfigWithOptions($clusterid, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->disable) {
            @$body['disable'] = $request->disable;
        }

        if (null !== $request->slsProjectName) {
            @$body['sls_project_name'] = $request->slsProjectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateClusterAuditLogConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterid) . '/audit_log',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateClusterAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the audit log feature for a specified ACK cluster, or updates the audit log configurations to record requests to the Kubernetes API and the corresponding results for tracing cluster operation history and troubleshooting cluster faults.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of <props="china">[Simple Log Service](https://www.aliyun.com/price/product#/sls/detail/sls)<props="intl">[Simple Log Service](https://www.alibabacloud.com/product/log-service/pricing).
     *
     * @param request - UpdateClusterAuditLogConfigRequest
     *
     * @returns UpdateClusterAuditLogConfigResponse
     *
     * @param string                             $clusterid
     * @param UpdateClusterAuditLogConfigRequest $request
     *
     * @return UpdateClusterAuditLogConfigResponse
     */
    public function updateClusterAuditLogConfig($clusterid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateClusterAuditLogConfigWithOptions($clusterid, $request, $headers, $runtime);
    }

    /**
     * Updates the cluster inspection configuration.
     *
     * @param request - UpdateClusterInspectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterInspectConfigResponse
     *
     * @param string                            $clusterId
     * @param UpdateClusterInspectConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateClusterInspectConfigResponse
     */
    public function updateClusterInspectConfigWithOptions($clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->disabledCheckItems) {
            @$body['disabledCheckItems'] = $request->disabledCheckItems;
        }

        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->scheduleTime) {
            @$body['scheduleTime'] = $request->scheduleTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateClusterInspectConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/inspectConfig',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateClusterInspectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the cluster inspection configuration.
     *
     * @param request - UpdateClusterInspectConfigRequest
     *
     * @returns UpdateClusterInspectConfigResponse
     *
     * @param string                            $clusterId
     * @param UpdateClusterInspectConfigRequest $request
     *
     * @return UpdateClusterInspectConfigResponse
     */
    public function updateClusterInspectConfig($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateClusterInspectConfigWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * Updates the contact group for an alert rule set in an ACK cluster.
     *
     * @param request - UpdateContactGroupForAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContactGroupForAlertResponse
     *
     * @param string                            $ClusterId
     * @param UpdateContactGroupForAlertRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateContactGroupForAlertResponse
     */
    public function updateContactGroupForAlertWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertRuleGroupName) {
            @$body['alert_rule_group_name'] = $request->alertRuleGroupName;
        }

        if (null !== $request->contactGroupIds) {
            @$body['contact_group_ids'] = $request->contactGroupIds;
        }

        if (null !== $request->crName) {
            @$body['cr_name'] = $request->crName;
        }

        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateContactGroupForAlert',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/' . Url::percentEncode($ClusterId) . '/alert_rule/contact_groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateContactGroupForAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the contact group for an alert rule set in an ACK cluster.
     *
     * @param request - UpdateContactGroupForAlertRequest
     *
     * @returns UpdateContactGroupForAlertResponse
     *
     * @param string                            $ClusterId
     * @param UpdateContactGroupForAlertRequest $request
     *
     * @return UpdateContactGroupForAlertResponse
     */
    public function updateContactGroupForAlert($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContactGroupForAlertWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Modifies the control plane component log configurations for an ACK managed cluster. ACK managed clusters support collecting control plane component logs and delivering them to your Simple Log Service (SLS) project. Control plane components include core components such as Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager. You can call the UpdateControlPlaneLog operation to modify the control plane component log configurations, such as the log retention period and the components to collect.
     *
     * @param request - UpdateControlPlaneLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateControlPlaneLogResponse
     *
     * @param string                       $ClusterId
     * @param UpdateControlPlaneLogRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateControlPlaneLogResponse
     */
    public function updateControlPlaneLogWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliuid) {
            @$body['aliuid'] = $request->aliuid;
        }

        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->logProject) {
            @$body['log_project'] = $request->logProject;
        }

        if (null !== $request->logTtl) {
            @$body['log_ttl'] = $request->logTtl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateControlPlaneLog',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/controlplanelog',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateControlPlaneLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the control plane component log configurations for an ACK managed cluster. ACK managed clusters support collecting control plane component logs and delivering them to your Simple Log Service (SLS) project. Control plane components include core components such as Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager. You can call the UpdateControlPlaneLog operation to modify the control plane component log configurations, such as the log retention period and the components to collect.
     *
     * @param request - UpdateControlPlaneLogRequest
     *
     * @returns UpdateControlPlaneLogResponse
     *
     * @param string                       $ClusterId
     * @param UpdateControlPlaneLogRequest $request
     *
     * @return UpdateControlPlaneLogResponse
     */
    public function updateControlPlaneLog($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateControlPlaneLogWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Updates the expiration time of the KubeConfig issued by an ACK cluster. By default, the KubeConfig expires in three years. You can use an Alibaba Cloud account to invoke the UpdateK8sClusterUserConfigExpire operation to specify the expiration time of the KubeConfig issued to a Resource Access Management (RAM) user or role in the ACK cluster. Valid values: 1 to 876000 hours.
     *
     * @remarks
     * - Only Alibaba Cloud accounts can call this operation.
     * - If the KubeConfig credential used for the cluster is revoked, the custom expiration time configured for the cluster KubeConfig is also reset. You must call this operation to reconfigure the expiration time.
     *
     * @param request - UpdateK8sClusterUserConfigExpireRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateK8sClusterUserConfigExpireResponse
     *
     * @param string                                  $ClusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpireWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireHour) {
            @$body['expire_hour'] = $request->expireHour;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sClusterUserConfigExpire',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . Url::percentEncode($ClusterId) . '/user_config/expire',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the expiration time of the KubeConfig issued by an ACK cluster. By default, the KubeConfig expires in three years. You can use an Alibaba Cloud account to invoke the UpdateK8sClusterUserConfigExpire operation to specify the expiration time of the KubeConfig issued to a Resource Access Management (RAM) user or role in the ACK cluster. Valid values: 1 to 876000 hours.
     *
     * @remarks
     * - Only Alibaba Cloud accounts can call this operation.
     * - If the KubeConfig credential used for the cluster is revoked, the custom expiration time configured for the cluster KubeConfig is also reset. You must call this operation to reconfigure the expiration time.
     *
     * @param request - UpdateK8sClusterUserConfigExpireRequest
     *
     * @returns UpdateK8sClusterUserConfigExpireResponse
     *
     * @param string                                  $ClusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request
     *
     * @return UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpire($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sClusterUserConfigExpireWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Updates the encryption at rest configuration for Secrets in a specified cluster.
     *
     * @remarks
     * Do not disable or delete the KMS key used for encryption at rest in the KMS console or by calling API operations while enabling or disabling the feature, or after the feature is enabled. Otherwise, the API server of the cluster becomes unavailable. As a result, objects such as Secrets and ServiceAccounts cannot be retrieved, which affects the normal operation of your applications. For more information, see [Use Alibaba Cloud KMS to encrypt Secrets at rest](https://help.aliyun.com/document_detail/177372.html).
     * * The user or role that calls this API operation must be granted the required cluster RBAC permissions, such as the O&M engineer or administrator permissions. Otherwise, the "ForbiddenUpdateKMSState" error code is returned.
     * * After this API operation is successfully called, the cluster status changes to "Updating". After the update is complete, the cluster status changes back to "Running". You must wait at least 5 minutes after an update is complete before you can call this API operation for the same cluster again. Otherwise, the "409" status code is returned.
     *
     * @param request - UpdateKMSEncryptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKMSEncryptionResponse
     *
     * @param string                     $ClusterId
     * @param UpdateKMSEncryptionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateKMSEncryptionResponse
     */
    public function updateKMSEncryptionWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->disableEncryption) {
            @$body['disable_encryption'] = $request->disableEncryption;
        }

        if (null !== $request->kmsKeyId) {
            @$body['kms_key_id'] = $request->kmsKeyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKMSEncryption',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/kms',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateKMSEncryptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the encryption at rest configuration for Secrets in a specified cluster.
     *
     * @remarks
     * Do not disable or delete the KMS key used for encryption at rest in the KMS console or by calling API operations while enabling or disabling the feature, or after the feature is enabled. Otherwise, the API server of the cluster becomes unavailable. As a result, objects such as Secrets and ServiceAccounts cannot be retrieved, which affects the normal operation of your applications. For more information, see [Use Alibaba Cloud KMS to encrypt Secrets at rest](https://help.aliyun.com/document_detail/177372.html).
     * * The user or role that calls this API operation must be granted the required cluster RBAC permissions, such as the O&M engineer or administrator permissions. Otherwise, the "ForbiddenUpdateKMSState" error code is returned.
     * * After this API operation is successfully called, the cluster status changes to "Updating". After the update is complete, the cluster status changes back to "Running". You must wait at least 5 minutes after an update is complete before you can call this API operation for the same cluster again. Otherwise, the "409" status code is returned.
     *
     * @param request - UpdateKMSEncryptionRequest
     *
     * @returns UpdateKMSEncryptionResponse
     *
     * @param string                     $ClusterId
     * @param UpdateKMSEncryptionRequest $request
     *
     * @return UpdateKMSEncryptionResponse
     */
    public function updateKMSEncryption($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKMSEncryptionWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Updates a node component.
     *
     * @param request - UpdateNodePoolComponentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNodePoolComponentResponse
     *
     * @param string                         $clusterId
     * @param string                         $nodepoolId
     * @param UpdateNodePoolComponentRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNodePoolComponentResponse
     */
    public function updateNodePoolComponentWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->disableRolling) {
            @$body['disableRolling'] = $request->disableRolling;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->nodeNames) {
            @$body['nodeNames'] = $request->nodeNames;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rollingPolicy'] = $request->rollingPolicy;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNodePoolComponent',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/component',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNodePoolComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a node component.
     *
     * @param request - UpdateNodePoolComponentRequest
     *
     * @returns UpdateNodePoolComponentResponse
     *
     * @param string                         $clusterId
     * @param string                         $nodepoolId
     * @param UpdateNodePoolComponentRequest $request
     *
     * @return UpdateNodePoolComponentResponse
     */
    public function updateNodePoolComponent($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNodePoolComponentWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * Updates a node component.
     *
     * @param request - UpdateNodePoolComponentInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNodePoolComponentInstanceResponse
     *
     * @param string                                 $clusterId
     * @param string                                 $nodepoolId
     * @param string                                 $name
     * @param UpdateNodePoolComponentInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateNodePoolComponentInstanceResponse
     */
    public function updateNodePoolComponentInstanceWithOptions($clusterId, $nodepoolId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->disableRolling) {
            @$body['disable_rolling'] = $request->disableRolling;
        }

        if (null !== $request->nodeNames) {
            @$body['node_names'] = $request->nodeNames;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rolling_policy'] = $request->rollingPolicy;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNodePoolComponentInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($clusterId) . '/nodepools/' . Url::percentEncode($nodepoolId) . '/component_instances/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNodePoolComponentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a node component.
     *
     * @param request - UpdateNodePoolComponentInstanceRequest
     *
     * @returns UpdateNodePoolComponentInstanceResponse
     *
     * @param string                                 $clusterId
     * @param string                                 $nodepoolId
     * @param string                                 $name
     * @param UpdateNodePoolComponentInstanceRequest $request
     *
     * @return UpdateNodePoolComponentInstanceResponse
     */
    public function updateNodePoolComponentInstance($clusterId, $nodepoolId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNodePoolComponentInstanceWithOptions($clusterId, $nodepoolId, $name, $request, $headers, $runtime);
    }

    /**
     * Updates the deletion protection status of a specified resource. Supported resource types include namespaces and services. You can enable deletion protection for namespaces or services that involve critical workloads or sensitive data to prevent accidental deletion and reduce maintenance costs.
     *
     * @remarks
     * Before you call this operation, you must install or upgrade the security policy component for the cluster. For more information, see [Enable security policy management](https://help.aliyun.com/document_detail/359818.html).
     *
     * @param request - UpdateResourcesDeleteProtectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourcesDeleteProtectionResponse
     *
     * @param string                                 $ClusterId
     * @param UpdateResourcesDeleteProtectionRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateResourcesDeleteProtectionResponse
     */
    public function updateResourcesDeleteProtectionWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        if (null !== $request->resourceType) {
            @$body['resource_type'] = $request->resourceType;
        }

        if (null !== $request->resources) {
            @$body['resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourcesDeleteProtection',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/resources/protection',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourcesDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the deletion protection status of a specified resource. Supported resource types include namespaces and services. You can enable deletion protection for namespaces or services that involve critical workloads or sensitive data to prevent accidental deletion and reduce maintenance costs.
     *
     * @remarks
     * Before you call this operation, you must install or upgrade the security policy component for the cluster. For more information, see [Enable security policy management](https://help.aliyun.com/document_detail/359818.html).
     *
     * @param request - UpdateResourcesDeleteProtectionRequest
     *
     * @returns UpdateResourcesDeleteProtectionResponse
     *
     * @param string                                 $ClusterId
     * @param UpdateResourcesDeleteProtectionRequest $request
     *
     * @return UpdateResourcesDeleteProtectionResponse
     */
    public function updateResourcesDeleteProtection($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourcesDeleteProtectionWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of an orchestration template. An orchestration template defines and describes a set of Kubernetes cluster resources declaratively to specify how an application should run or be configured.
     *
     * @param request - UpdateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        if (null !== $request->templateType) {
            @$body['template_type'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of an orchestration template. An orchestration template defines and describes a set of Kubernetes cluster resources declaratively to specify how an application should run or be configured.
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * Updates the Role-Based Access Control (RBAC) access permissions of a Resource Access Management (RAM) user or RAM role in an ACK cluster. By default, RAM users, RAM roles, and users other than the cluster creator do not have any RBAC access permissions in the cluster. You can invoke the UpdateUserPermissions operation to update the RBAC access permissions of a RAM user or RAM role, including the accessible resources, the scope of the permissions, and the preset role types, to improve secure access control in cluster management.
     *
     * @remarks
     * You can update the cluster authorization information of a target Resource Access Management (RAM) user or RAM role by using a full update or an incremental update. A full update overwrites the existing cluster permissions of the target RAM user or RAM role. The request must include all permission configurations that you want to grant to the target RAM user or RAM role. An incremental update includes add and delete operations. It only modifies the permissions based on the cluster authorization information included in the request and does not affect other cluster permissions of the RAM user or RAM role.
     *
     * @param request - UpdateUserPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserPermissionsResponse
     *
     * @param string                       $uid
     * @param UpdateUserPermissionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateUserPermissionsResponse
     */
    public function updateUserPermissionsWithOptions($uid, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mode) {
            @$query['mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/permissions/users/' . Url::percentEncode($uid) . '/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Role-Based Access Control (RBAC) access permissions of a Resource Access Management (RAM) user or RAM role in an ACK cluster. By default, RAM users, RAM roles, and users other than the cluster creator do not have any RBAC access permissions in the cluster. You can invoke the UpdateUserPermissions operation to update the RBAC access permissions of a RAM user or RAM role, including the accessible resources, the scope of the permissions, and the preset role types, to improve secure access control in cluster management.
     *
     * @remarks
     * You can update the cluster authorization information of a target Resource Access Management (RAM) user or RAM role by using a full update or an incremental update. A full update overwrites the existing cluster permissions of the target RAM user or RAM role. The request must include all permission configurations that you want to grant to the target RAM user or RAM role. An incremental update includes add and delete operations. It only modifies the permissions based on the cluster authorization information included in the request and does not affect other cluster permissions of the RAM user or RAM role.
     *
     * @param request - UpdateUserPermissionsRequest
     *
     * @returns UpdateUserPermissionsResponse
     *
     * @param string                       $uid
     * @param UpdateUserPermissionsRequest $request
     *
     * @return UpdateUserPermissionsResponse
     */
    public function updateUserPermissions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserPermissionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * Upgrades an ACK cluster to mitigate potential security and stability risks associated with outdated versions and enable new features of the latest cluster version. You can call the UpgradeCluster operation to manually upgrade the cluster.
     *
     * @remarks
     * After you successfully call the UpgradeCluster operation, the API returns the task_id of the upgrade task. You can manage the task by calling the following task operations:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a paused task](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     * >Notice: Starting from July 4, 2026, the request parameters rolling_policy and rolling_policy.max_parallelism no longer take effect. Use [UpgradeClusterNodepool](https://help.aliyun.com/document_detail/2667922.html) to upgrade worker nodes. For more information about the changes, see [Announcement on changes to request and response parameters of ACK cluster management operations and operation deprecation](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - UpgradeClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeClusterResponse
     *
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentName) {
            @$body['component_name'] = $request->componentName;
        }

        if (null !== $request->masterOnly) {
            @$body['master_only'] = $request->masterOnly;
        }

        if (null !== $request->nextVersion) {
            @$body['next_version'] = $request->nextVersion;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rolling_policy'] = $request->rollingPolicy;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . Url::percentEncode($ClusterId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades an ACK cluster to mitigate potential security and stability risks associated with outdated versions and enable new features of the latest cluster version. You can call the UpgradeCluster operation to manually upgrade the cluster.
     *
     * @remarks
     * After you successfully call the UpgradeCluster operation, the API returns the task_id of the upgrade task. You can manage the task by calling the following task operations:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a paused task](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     * >Notice: Starting from July 4, 2026, the request parameters rolling_policy and rolling_policy.max_parallelism no longer take effect. Use [UpgradeClusterNodepool](https://help.aliyun.com/document_detail/2667922.html) to upgrade worker nodes. For more information about the changes, see [Announcement on changes to request and response parameters of ACK cluster management operations and operation deprecation](https://help.aliyun.com/document_detail/2932733.html).</notice>
     *
     * @param request - UpgradeClusterRequest
     *
     * @returns UpgradeClusterResponse
     *
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Upgrades the versions of cluster component instances so that you can benefit from the feature optimizations in the new versions.
     *
     * @remarks
     * - Upgrading cluster component instance versions may affect your business. Assess the impact before performing the operation during off-peak hours and back up relevant data in advance.
     * - Before upgrading a component, refer to [Component release notes](https://help.aliyun.com/document_detail/176087.html) to learn about the changes and their impact for the specified component.
     * - Upgrade components one at a time. Confirm that one component has been successfully upgraded before upgrading the next.
     *
     * @param request - UpgradeClusterAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeClusterAddonsResponse
     *
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpgradeClusterAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/components/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the versions of cluster component instances so that you can benefit from the feature optimizations in the new versions.
     *
     * @remarks
     * - Upgrading cluster component instance versions may affect your business. Assess the impact before performing the operation during off-peak hours and back up relevant data in advance.
     * - Before upgrading a component, refer to [Component release notes](https://help.aliyun.com/document_detail/176087.html) to learn about the changes and their impact for the specified component.
     * - Upgrade components one at a time. Confirm that one component has been successfully upgraded before upgrading the next.
     *
     * @param request - UpgradeClusterAddonsRequest
     *
     * @returns UpgradeClusterAddonsResponse
     *
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Upgrades the kubelet version (recommended to match the control plane version), operating system version, or container runtime version of a specified cluster node pool.
     *
     * @remarks
     * Upgrades the Kubernetes version, operating system version, or container runtime version of nodes in a specified cluster node pool. After you successfully call the UpgradeClusterNodepool operation, the API returns a `task_id` for the upgrade task. You can manage the task by calling the following task API operations:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a paused task](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     *
     * @param request - UpgradeClusterNodepoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeClusterNodepoolResponse
     *
     * @param string                        $ClusterId
     * @param string                        $NodepoolId
     * @param UpgradeClusterNodepoolRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeClusterNodepoolResponse
     */
    public function upgradeClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ignoreWarningCheck) {
            @$body['ignore_warning_check'] = $request->ignoreWarningCheck;
        }

        if (null !== $request->imageId) {
            @$body['image_id'] = $request->imageId;
        }

        if (null !== $request->kubernetesVersion) {
            @$body['kubernetes_version'] = $request->kubernetesVersion;
        }

        if (null !== $request->nodeNames) {
            @$body['node_names'] = $request->nodeNames;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rolling_policy'] = $request->rollingPolicy;
        }

        if (null !== $request->runtimeType) {
            @$body['runtime_type'] = $request->runtimeType;
        }

        if (null !== $request->runtimeVersion) {
            @$body['runtime_version'] = $request->runtimeVersion;
        }

        if (null !== $request->useReplace) {
            @$body['use_replace'] = $request->useReplace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeClusterNodepool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . Url::percentEncode($ClusterId) . '/nodepools/' . Url::percentEncode($NodepoolId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the kubelet version (recommended to match the control plane version), operating system version, or container runtime version of a specified cluster node pool.
     *
     * @remarks
     * Upgrades the Kubernetes version, operating system version, or container runtime version of nodes in a specified cluster node pool. After you successfully call the UpgradeClusterNodepool operation, the API returns a `task_id` for the upgrade task. You can manage the task by calling the following task API operations:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a paused task](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     *
     * @param request - UpgradeClusterNodepoolRequest
     *
     * @returns UpgradeClusterNodepoolResponse
     *
     * @param string                        $ClusterId
     * @param string                        $NodepoolId
     * @param UpgradeClusterNodepoolRequest $request
     *
     * @return UpgradeClusterNodepoolResponse
     */
    public function upgradeClusterNodepool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }
}
