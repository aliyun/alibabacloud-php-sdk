<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\URL;
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
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoscalingConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoscalingConfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterDiagnosisRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterDiagnosisResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateEdgeMachineRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateEdgeMachineResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodepoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodepoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteEdgeMachineRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteEdgeMachineResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineActiveProcessResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineModelsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineTunnelConfigDetailResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\EdgeClusterAddEdgeMachineRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\EdgeClusterAddEdgeMachineResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAuditProjectResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterCheckResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisResultRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisResultResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GrantPermissionsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListUserKubeConfigStatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListUserKubeConfigStatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\MigrateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\MigrateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterAddonRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterAddonResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateContactGroupForAlertRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateContactGroupForAlertResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateControlPlaneLogRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateControlPlaneLogResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireResponse;
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
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'ap-northeast-2-pop'          => 'cs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cs.aliyuncs.com',
            'cn-edge-1'                   => 'cs.aliyuncs.com',
            'cn-fujian'                   => 'cs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cs.aliyuncs.com',
            'cn-shanghai-inner'           => 'cs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cs.aliyuncs.com',
            'cn-wuhan'                    => 'cs.aliyuncs.com',
            'cn-yushanfang'               => 'cs.aliyuncs.com',
            'cn-zhangbei'                 => 'cs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cs.aliyuncs.com',
            'eu-west-1-oxs'               => 'cs.aliyuncs.com',
            'rus-west-1-pop'              => 'cs.aliyuncs.com',
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
     * Adds existing Elastic Compute Service (ECS) instances to a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - AttachInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachInstances',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/attach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds existing Elastic Compute Service (ECS) instances to a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - AttachInstancesRequest
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
     * Adds existing nodes to a specific node pool. You can add existing ECS instances to a specific node pool in a Container Service for Kubernetes (ACK) cluster as worker nodes. You can also add removed worker nodes back to the node pool.
     *
     * @param request - AttachInstancesToNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachInstancesToNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '/attach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachInstancesToNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachInstancesToNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds existing nodes to a specific node pool. You can add existing ECS instances to a specific node pool in a Container Service for Kubernetes (ACK) cluster as worker nodes. You can also add removed worker nodes back to the node pool.
     *
     * @param request - AttachInstancesToNodePoolRequest
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

    // Deprecated

    /**
     * You can call the CancelClusterUpgrade operation to cancel the update of a cluster.
     *
     * @deprecated OpenAPI CancelClusterUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CancelClusterUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '/upgrade/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelClusterUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the CancelClusterUpgrade operation to cancel the update of a cluster.
     *
     * @deprecated OpenAPI CancelClusterUpgrade is deprecated
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

    // Deprecated

    /**
     * You can call the CancelComponentUpgrade operation to cancel the update of a component.
     *
     * @deprecated OpenAPI CancelComponentUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CancelComponentUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/components/' . URL::percentEncode($componentId) . '/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelComponentUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the CancelComponentUpgrade operation to cancel the update of a component.
     *
     * @deprecated OpenAPI CancelComponentUpgrade is deprecated
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
     * You can call the CancelOperationPlan operation to cancel a pending auto O\\\\\\\\\\\\&M plan.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CancelOperationPlan',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/operation/plans/' . URL::percentEncode($planId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelOperationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelOperationPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the CancelOperationPlan operation to cancel a pending auto O\\\\\\\\\\\\&M plan.
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
            'action'      => 'CancelTask',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . URL::percentEncode($taskId) . '/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
     * Queries the current log configuration of control plane components, including the log retention period and the log collection component. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CheckControlPlaneLogEnable',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/controlplanelog',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckControlPlaneLogEnableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckControlPlaneLogEnableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the current log configuration of control plane components, including the log retention period and the log collection component. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager.
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
     * Checks whether the specified service role is granted required permissions within the current Alibaba Cloud account.
     *
     * @param request - CheckServiceRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceRole',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ram/check-service-role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckServiceRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckServiceRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Checks whether the specified service role is granted required permissions within the current Alibaba Cloud account.
     *
     * @param request - CheckServiceRoleRequest
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
     * Deletes kubeconfig files that may pose potential risks from a user and revokes Role-Based Access Control (RBAC) permissions on a cluster.
     *
     * @remarks
     * >
     * *   To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * *   You cannot revoke the permissions of an Alibaba Cloud account.
     * *   You cannot revoke the permissions of the account that you use to call this operation.
     *
     * @param request - CleanClusterUserPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CleanClusterUserPermissions',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cluster/' . URL::percentEncode($ClusterId) . '/user/' . URL::percentEncode($Uid) . '/permissions',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CleanClusterUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CleanClusterUserPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes kubeconfig files that may pose potential risks from a user and revokes Role-Based Access Control (RBAC) permissions on a cluster.
     *
     * @remarks
     * >
     * *   To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * *   You cannot revoke the permissions of an Alibaba Cloud account.
     * *   You cannot revoke the permissions of the account that you use to call this operation.
     *
     * @param request - CleanClusterUserPermissionsRequest
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
     * You can call the CleanUserPermissions operation to delete the kubeconfig files of the specified users and revoke the relevant Role-Based Access Control (RBAC) permissions. This API operation is suitable for scenarios where employees have resigned or the accounts of employees are locked.
     *
     * @remarks
     * > - To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * > - You cannot revoke the permissions of an Alibaba Cloud account.
     * > - You cannot revoke the permissions of the account that you use to call this operation.
     *
     * @param tmpReq - CleanUserPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CleanUserPermissions',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/users/' . URL::percentEncode($Uid) . '/permissions',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CleanUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CleanUserPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the CleanUserPermissions operation to delete the kubeconfig files of the specified users and revoke the relevant Role-Based Access Control (RBAC) permissions. This API operation is suitable for scenarios where employees have resigned or the accounts of employees are locked.
     *
     * @remarks
     * > - To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * > - You cannot revoke the permissions of an Alibaba Cloud account.
     * > - You cannot revoke the permissions of the account that you use to call this operation.
     *
     * @param request - CleanUserPermissionsRequest
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
     * Creates a scaling configuration to allow the system to scale resources based on the given scaling rules. When you create a scaling configuration, you can specify the scaling metrics, thresholds, scaling order, and scaling interval.
     *
     * @param request - CreateAutoscalingConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAutoscalingConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cluster/' . URL::percentEncode($ClusterId) . '/autoscale/config/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAutoscalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAutoscalingConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a scaling configuration to allow the system to scale resources based on the given scaling rules. When you create a scaling configuration, you can specify the scaling metrics, thresholds, scaling order, and scaling interval.
     *
     * @param request - CreateAutoscalingConfigRequest
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
     * You can call the CreateCluster operation to create a Container Service for Kubernetes (ACK) cluster. ACK clusters include ACK managed clusters, ACK dedicated clusters, ACK Serverless clusters, ACK Edge clusters, ACK clusters that support sandboxed containers, and registered clusters. For more information about how to create different types of ACK clusters, see the following usage notes.
     *
     * @remarks
     * This topic describes all request parameters for creating a Container Service for Kubernetes (ACK) cluster. For more information about how to call the API to create each type of ACK cluster, refer to the following topics:
     * *   [Call the API to create an ACK managed cluster](https://help.aliyun.com/document_detail/90776.html)
     * *   [Call the API to create an ACK dedicated cluster](https://help.aliyun.com/document_detail/197620.html)
     * *   [Call the API to create an ACK Serverless cluster](https://help.aliyun.com/document_detail/144246.html)
     * *   [Call the API to create an ACK Edge cluster](https://help.aliyun.com/document_detail/128204.html)
     * *   [Call the API to create an ACK Basic cluster that supports sandboxed containers](https://help.aliyun.com/document_detail/196321.html)
     * *   [Call the API to create an ACK Pro cluster that supports sandboxed containers](https://help.aliyun.com/document_detail/140623.html)
     *
     * @param request - CreateClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the CreateCluster operation to create a Container Service for Kubernetes (ACK) cluster. ACK clusters include ACK managed clusters, ACK dedicated clusters, ACK Serverless clusters, ACK Edge clusters, ACK clusters that support sandboxed containers, and registered clusters. For more information about how to create different types of ACK clusters, see the following usage notes.
     *
     * @remarks
     * This topic describes all request parameters for creating a Container Service for Kubernetes (ACK) cluster. For more information about how to call the API to create each type of ACK cluster, refer to the following topics:
     * *   [Call the API to create an ACK managed cluster](https://help.aliyun.com/document_detail/90776.html)
     * *   [Call the API to create an ACK dedicated cluster](https://help.aliyun.com/document_detail/197620.html)
     * *   [Call the API to create an ACK Serverless cluster](https://help.aliyun.com/document_detail/144246.html)
     * *   [Call the API to create an ACK Edge cluster](https://help.aliyun.com/document_detail/128204.html)
     * *   [Call the API to create an ACK Basic cluster that supports sandboxed containers](https://help.aliyun.com/document_detail/196321.html)
     * *   [Call the API to create an ACK Pro cluster that supports sandboxed containers](https://help.aliyun.com/document_detail/140623.html)
     *
     * @param request - CreateClusterRequest
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
     * Starts a cluster diagnostic.
     *
     * @param request - CreateClusterDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterDiagnosis',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateClusterDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterDiagnosisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a cluster diagnostic.
     *
     * @param request - CreateClusterDiagnosisRequest
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
     * Creates a node pool for a Container Service for Kubernetes (ACK) cluster. You can use node pools to facilitate node management. For example, you can schedule, configure, or maintain nodes by node pool, and enable auto scaling for a node pool. We recommend that you use a managed node pool, which can help automate specific O\\\\\\&M tasks for nodes, such as Common Vulnerabilities and Exposures (CVE) patching and node repair. This reduces your O\\\\\\&M workload.
     *
     * @param request - CreateClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->autoScaling) {
            @$body['auto_scaling'] = $request->autoScaling;
        }

        if (null !== $request->count) {
            @$body['count'] = $request->count;
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a node pool for a Container Service for Kubernetes (ACK) cluster. You can use node pools to facilitate node management. For example, you can schedule, configure, or maintain nodes by node pool, and enable auto scaling for a node pool. We recommend that you use a managed node pool, which can help automate specific O\\\\\\&M tasks for nodes, such as Common Vulnerabilities and Exposures (CVE) patching and node repair. This reduces your O\\\\\\&M workload.
     *
     * @param request - CreateClusterNodePoolRequest
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
     * You can call the CreateEdgeMachine operation to activate a cloud-native box.
     *
     * @param request - CreateEdgeMachineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateEdgeMachineResponse
     *
     * @param CreateEdgeMachineRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEdgeMachineResponse
     */
    public function createEdgeMachineWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hostname) {
            @$body['hostname'] = $request->hostname;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->sn) {
            @$body['sn'] = $request->sn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeMachine',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/edge_machines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEdgeMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the CreateEdgeMachine operation to activate a cloud-native box.
     *
     * @param request - CreateEdgeMachineRequest
     * @returns CreateEdgeMachineResponse
     *
     * @param CreateEdgeMachineRequest $request
     *
     * @return CreateEdgeMachineResponse
     */
    public function createEdgeMachine($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEdgeMachineWithOptions($request, $headers, $runtime);
    }

    // Deprecated

    /**
     * You can call the CreateKubernetesTrigger operation to create a trigger for an application.
     *
     * @deprecated OpenAPI CreateKubernetesTrigger is deprecated
     *
     * @param request - CreateKubernetesTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateKubernetesTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/triggers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKubernetesTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the CreateKubernetesTrigger operation to create a trigger for an application.
     *
     * @deprecated OpenAPI CreateKubernetesTrigger is deprecated
     *
     * @param request - CreateKubernetesTriggerRequest
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
     * Creates an orchestration template. An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can use orchestration templates to manage resources in Kubernetes clusters and automate resource deployment, such as pods, Services, Deployments, ConfigMaps, and persistent volumes (PVs).
     *
     * @param request - CreateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an orchestration template. An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can use orchestration templates to manage resources in Kubernetes clusters and automate resource deployment, such as pods, Services, Deployments, ConfigMaps, and persistent volumes (PVs).
     *
     * @param request - CreateTemplateRequest
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
     * Creates a trigger for an application to redeploy the application pods when specific conditions are met.
     *
     * @param request - CreateTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/triggers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a trigger for an application to redeploy the application pods when specific conditions are met.
     *
     * @param request - CreateTriggerRequest
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
     * Deletes one or more ACK alert contacts.
     *
     * @param tmpReq - DeleteAlertContactRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContact',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/contacts',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes one or more ACK alert contacts.
     *
     * @param request - DeleteAlertContactRequest
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
     * Deletes an ACK alert contact group.
     *
     * @param tmpReq - DeleteAlertContactGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContactGroup',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/contact_groups',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an ACK alert contact group.
     *
     * @param request - DeleteAlertContactGroupRequest
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
     * You can call the DeleteCluster operation to delete a cluster and specify whether to delete or retain the relevant cluster resources. Before you delete a cluster, you must manually delete workloads in the cluster, such as Deployments, StatefulSets, Jobs, and CronJobs. Otherwise, you may fail to delete the cluster.
     *
     * @param tmpReq - DeleteClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DeleteCluster operation to delete a cluster and specify whether to delete or retain the relevant cluster resources. Before you delete a cluster, you must manually delete workloads in the cluster, such as Deployments, StatefulSets, Jobs, and CronJobs. Otherwise, you may fail to delete the cluster.
     *
     * @param request - DeleteClusterRequest
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
     * null.
     *
     * @param request - DeleteClusterNodepoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterNodepool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterNodepoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - DeleteClusterNodepoolRequest
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
     * Removes nodes from a Container Service for Kubernetes (ACK) cluster. When you remove nodes, you can specify whether to release the Elastic Compute Service (ECS) instances and drain the nodes. When you remove nodes, pods on the nodes are migrated. This may adversely affect your businesses. We recommend that you back up data and perform this operation during off-peak hours.
     *
     * @remarks
     *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   When you remove a node, the system sets the status of the node to Unschedulable.
     *
     * @param request - DeleteClusterNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes nodes from a Container Service for Kubernetes (ACK) cluster. When you remove nodes, you can specify whether to release the Elastic Compute Service (ECS) instances and drain the nodes. When you remove nodes, pods on the nodes are migrated. This may adversely affect your businesses. We recommend that you back up data and perform this operation during off-peak hours.
     *
     * @remarks
     *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   When you remove a node, the system sets the status of the node to Unschedulable.
     *
     * @param request - DeleteClusterNodesRequest
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
     * You can call the DeleteEdgeMachine operation to delete a cloud-native box.
     *
     * @param request - DeleteEdgeMachineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEdgeMachineResponse
     *
     * @param string                   $edgeMachineid
     * @param DeleteEdgeMachineRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEdgeMachineResponse
     */
    public function deleteEdgeMachineWithOptions($edgeMachineid, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEdgeMachine',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/edge_machines/%5Bedge_machineid%5D',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEdgeMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DeleteEdgeMachine operation to delete a cloud-native box.
     *
     * @param request - DeleteEdgeMachineRequest
     * @returns DeleteEdgeMachineResponse
     *
     * @param string                   $edgeMachineid
     * @param DeleteEdgeMachineRequest $request
     *
     * @return DeleteEdgeMachineResponse
     */
    public function deleteEdgeMachine($edgeMachineid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEdgeMachineWithOptions($edgeMachineid, $request, $headers, $runtime);
    }

    // Deprecated

    /**
     * You can call the DeleteKubernetesTrigger operation to delete an application trigger by trigger ID.
     *
     * @deprecated OpenAPI DeleteKubernetesTrigger is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteKubernetesTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/triggers/revoke/' . URL::percentEncode($Id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKubernetesTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DeleteKubernetesTrigger operation to delete an application trigger by trigger ID.
     *
     * @deprecated OpenAPI DeleteKubernetesTrigger is deprecated
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
     * Deletes policy instances in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DeletePolicyInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/policies/' . URL::percentEncode($policyName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePolicyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes policy instances in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DeletePolicyInstanceRequest
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
     * Deletes the orchestration templates that you no longer need.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteTemplate',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates/' . URL::percentEncode($TemplateId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the orchestration templates that you no longer need.
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
            'action'      => 'DeleteTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/triggers/' . URL::percentEncode($Id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTriggerResponse::fromMap($this->execute($params, $req, $runtime));
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
     * Deploys a policy in the specified namespaces of a specific Container Service for Kubernetes (ACK) cluster. You can create and deploy a security policy by specifying the policy type, action of the policy such as alerting or denying, and namespaces to which the policy applies.
     *
     * @param request - DeployPolicyInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployPolicyInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/policies/' . URL::percentEncode($policyName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeployPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeployPolicyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deploys a policy in the specified namespaces of a specific Container Service for Kubernetes (ACK) cluster. You can create and deploy a security policy by specifying the policy type, action of the policy such as alerting or denying, and namespaces to which the policy applies.
     *
     * @param request - DeployPolicyInstanceRequest
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
     * Queries the information about a component based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, cluster version, and component name. The information includes whether the component is managed, the component type, supported custom parameter schema, compatible operating system architecture, and earliest supported cluster version.
     *
     * @param request - DescribeAddonRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddon',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/addons/' . URL::percentEncode($addonName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAddonResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAddonResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a component based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, cluster version, and component name. The information includes whether the component is managed, the component type, supported custom parameter schema, compatible operating system architecture, and earliest supported cluster version.
     *
     * @param request - DescribeAddonRequest
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

    // Deprecated

    /**
     * You can call the DescribeAddons operation to query the details about all components that are supported by Container Service for Kubernetes (ACK).
     *
     * @deprecated OpenAPI DescribeAddons is deprecated
     *
     * @param request - DescribeAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/components/metadata',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeAddons operation to query the details about all components that are supported by Container Service for Kubernetes (ACK).
     *
     * @deprecated OpenAPI DescribeAddons is deprecated
     *
     * @param request - DescribeAddonsRequest
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

    // Deprecated

    /**
     * You can call the DescribeClusterAddonInstance operation to query the information about a cluster component, including the version, status, and configuration of the component.
     *
     * @deprecated OpenAPI DescribeClusterAddonInstance is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterAddonInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterID) . '/components/' . URL::percentEncode($AddonName) . '/instance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeClusterAddonInstance operation to query the information about a cluster component, including the version, status, and configuration of the component.
     *
     * @deprecated OpenAPI DescribeClusterAddonInstance is deprecated
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

    // Deprecated

    /**
     * You can call the DescribeClusterAddonMetadata operation to query the metadata of a component version. The metadata includes the component version and available parameters.
     *
     * @deprecated OpenAPI DescribeClusterAddonMetadata is deprecated
     *
     * @param request - DescribeClusterAddonMetadataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAddonMetadata',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/components/' . URL::percentEncode($componentId) . '/metadata',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterAddonMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonMetadataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeClusterAddonMetadata operation to query the metadata of a component version. The metadata includes the component version and available parameters.
     *
     * @deprecated OpenAPI DescribeClusterAddonMetadata is deprecated
     *
     * @param request - DescribeClusterAddonMetadataRequest
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

    // Deprecated

    /**
     * You can call the DescribeClusterAddonUpgradeStatus operation to query the update progress of a cluster component.
     *
     * @deprecated OpenAPI DescribeClusterAddonUpgradeStatus is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterAddonUpgradeStatus',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/components/' . URL::percentEncode($ComponentId) . '/upgradestatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeClusterAddonUpgradeStatus operation to query the update progress of a cluster component.
     *
     * @deprecated OpenAPI DescribeClusterAddonUpgradeStatus is deprecated
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

    // Deprecated

    /**
     * You can call the DescribeClusterAddonsUpgradeStatus operation to query the update progress of a component by component name.
     *
     * @deprecated OpenAPI DescribeClusterAddonsUpgradeStatus is deprecated
     *
     * @param tmpReq - DescribeClusterAddonsUpgradeStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAddonsUpgradeStatus',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/components/upgradestatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeClusterAddonsUpgradeStatus operation to query the update progress of a component by component name.
     *
     * @deprecated OpenAPI DescribeClusterAddonsUpgradeStatus is deprecated
     *
     * @param request - DescribeClusterAddonsUpgradeStatusRequest
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

    // Deprecated

    /**
     * You can call the DescribeClusterAddonsVersion operation to query the details about all components in a cluster by cluster ID.
     *
     * @deprecated OpenAPI DescribeClusterAddonsVersion is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterAddonsVersion',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/components/version',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterAddonsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonsVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeClusterAddonsVersion operation to query the details about all components in a cluster by cluster ID.
     *
     * @deprecated OpenAPI DescribeClusterAddonsVersion is deprecated
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
     * Queries the scripts used to add existing nodes to a Container Service for Kubernetes (ACK) cluster. ACK allows you to manually add existing Elastic Compute Service (ECS) instances to an ACK cluster as worker nodes or re-add worker nodes that you remove from the cluster to a node pool.
     *
     * @param request - DescribeClusterAttachScriptsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->formatDisk) {
            @$body['format_disk'] = $request->formatDisk;
        }

        if (null !== $request->keepInstanceName) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }

        if (null !== $request->nodepoolId) {
            @$body['nodepool_id'] = $request->nodepoolId;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->rdsInstances) {
            @$body['rds_instances'] = $request->rdsInstances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAttachScripts',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/attachscript',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterAttachScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAttachScriptsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the scripts used to add existing nodes to a Container Service for Kubernetes (ACK) cluster. ACK allows you to manually add existing Elastic Compute Service (ECS) instances to an ACK cluster as worker nodes or re-add worker nodes that you remove from the cluster to a node pool.
     *
     * @param request - DescribeClusterAttachScriptsRequest
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
     * You can call the DescribeClusterDetail operation to query the details of a Container Service for Kubernetes (ACK) cluster by cluster ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterDetail',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DescribeClusterDetail operation to query the details of a Container Service for Kubernetes (ACK) cluster by cluster ID.
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
     * Queries events and event details in a Container Service for Kubernetes (ACK) cluster, including the severity level, status, and start time of each event. Events are generated when clusters created, modified, and updated, node pools are created and scaled out, and components are installed.
     *
     * @param request - DescribeClusterEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterEvents',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries events and event details in a Container Service for Kubernetes (ACK) cluster, including the severity level, status, and start time of each event. Events are generated when clusters created, modified, and updated, node pools are created and scaled out, and components are installed.
     *
     * @param request - DescribeClusterEventsRequest
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
     * Queries the cluster log to help analyze cluster issues and locate the cause.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterLogs',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the cluster log to help analyze cluster issues and locate the cause.
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
     * You can call the DescribeClusterNodePoolDetail.html operation to query the details about a node pool in a cluster by node pool ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterNodePoolDetail',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterNodePoolDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterNodePoolDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DescribeClusterNodePoolDetail.html operation to query the details about a node pool in a cluster by node pool ID.
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
     * Queries the information about all node pools in a cluster.
     *
     * @param request - DescribeClusterNodePoolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterNodePools',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterNodePoolsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterNodePoolsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about all node pools in a cluster.
     *
     * @param request - DescribeClusterNodePoolsRequest
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
     * null.
     *
     * @param request - DescribeClusterNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - DescribeClusterNodesRequest
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
     * You can call the DescribeClusterResources operation to query all resources in a cluster by cluster ID.
     *
     * @param request - DescribeClusterResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterResources',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DescribeClusterResources operation to query all resources in a cluster by cluster ID.
     *
     * @param request - DescribeClusterResourcesRequest
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
     * Queries tasks in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DescribeClusterTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterTasks',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries tasks in a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - DescribeClusterTasksRequest
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
     * Kubeconfig files store identity and authentication information that is used by clients to access Container Service for Kubernetes (ACK) clusters. To use a kubectl client to manage an ACK cluster, you need to use the corresponding kubeconfig file to connect to the ACK cluster. We recommend that you keep kubeconfig files confidential and revoke kubeconfig files that are not in use. This helps prevent data leaks caused by the disclosure of kubeconfig files.
     *
     * @remarks
     * >  The default validity period of a kubeconfig file is 3 years. 180 days before a kubeconfig file expires, you can renew it in the Container Service for Kubernetes (ACK) console or by calling API operations. After a kubeconfig file is renewed, the kubeconfig file is valid for 3 years. The previous kubeconfig file still remains valid until expiration. We recommend that you renew your kubeconfig file at the earliest opportunity.
     *
     * @param request - DescribeClusterUserKubeconfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterUserKubeconfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . URL::percentEncode($ClusterId) . '/user_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterUserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterUserKubeconfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Kubeconfig files store identity and authentication information that is used by clients to access Container Service for Kubernetes (ACK) clusters. To use a kubectl client to manage an ACK cluster, you need to use the corresponding kubeconfig file to connect to the ACK cluster. We recommend that you keep kubeconfig files confidential and revoke kubeconfig files that are not in use. This helps prevent data leaks caused by the disclosure of kubeconfig files.
     *
     * @remarks
     * >  The default validity period of a kubeconfig file is 3 years. 180 days before a kubeconfig file expires, you can renew it in the Container Service for Kubernetes (ACK) console or by calling API operations. After a kubeconfig file is renewed, the kubeconfig file is valid for 3 years. The previous kubeconfig file still remains valid until expiration. We recommend that you renew your kubeconfig file at the earliest opportunity.
     *
     * @param request - DescribeClusterUserKubeconfigRequest
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

    // Deprecated

    /**
     * 获取集群kubeconfig接口.
     *
     * @deprecated OpenAPI DescribeClusterV2UserKubeconfig is deprecated
     *
     * @param request - DescribeClusterV2UserKubeconfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterV2UserKubeconfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/k8s/' . URL::percentEncode($ClusterId) . '/user_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterV2UserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 获取集群kubeconfig接口.
     *
     * @deprecated OpenAPI DescribeClusterV2UserKubeconfig is deprecated
     *
     * @param request - DescribeClusterV2UserKubeconfigRequest
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
     * Queries the security vulnerability details of a cluster by cluster ID. The details include vulnerability name, vulnerability type, and vulnerability severity. We recommend that you scan your cluster on a regular basis to ensure cluster security.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeClusterVuls',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/vuls',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the security vulnerability details of a cluster by cluster ID. The details include vulnerability name, vulnerability type, and vulnerability severity. We recommend that you scan your cluster on a regular basis to ensure cluster security.
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

    // Deprecated

    /**
     * Queries all the clusters that belong to the current Alibaba Cloud account, including Kubernetes clusters and Swarm clusters.
     *
     * @deprecated OpenAPI DescribeClusters is deprecated
     *
     * @param request - DescribeClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusters',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Queries all the clusters that belong to the current Alibaba Cloud account, including Kubernetes clusters and Swarm clusters.
     *
     * @deprecated OpenAPI DescribeClusters is deprecated
     *
     * @param request - DescribeClustersRequest
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
     * Queries all clusters in a specified region.
     *
     * @param request - DescribeClustersForRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClustersForRegion',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/regions/' . URL::percentEncode($regionId) . '/clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClustersForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClustersForRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all clusters in a specified region.
     *
     * @param request - DescribeClustersForRegionRequest
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
     * Queries the details about Container Service for Kubernetes (ACK) clusters of specified types or specifications within an account.
     *
     * @param request - DescribeClustersV1Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClustersV1',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeClustersV1Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClustersV1Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details about Container Service for Kubernetes (ACK) clusters of specified types or specifications within an account.
     *
     * @param request - DescribeClustersV1Request
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

    // Deprecated

    /**
     * You can call the DescribeEdgeMachineActiveProcess operation to query the activation progress of a cloud-native box.
     *
     * @deprecated OpenAPI DescribeEdgeMachineActiveProcess is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEdgeMachineActiveProcessResponse
     *
     * @param string         $edgeMachineid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEdgeMachineActiveProcessResponse
     */
    public function describeEdgeMachineActiveProcessWithOptions($edgeMachineid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeEdgeMachineActiveProcess',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/edge_machines/%5Bedge_machineid%5D/activeprocess',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEdgeMachineActiveProcessResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachineActiveProcessResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the DescribeEdgeMachineActiveProcess operation to query the activation progress of a cloud-native box.
     *
     * @deprecated OpenAPI DescribeEdgeMachineActiveProcess is deprecated
     * @returns DescribeEdgeMachineActiveProcessResponse
     *
     * @param string $edgeMachineid
     *
     * @return DescribeEdgeMachineActiveProcessResponse
     */
    public function describeEdgeMachineActiveProcess($edgeMachineid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineActiveProcessWithOptions($edgeMachineid, $headers, $runtime);
    }

    /**
     * You can call the DescribeEdgeMachineModels operation to query the cloud-native box models.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEdgeMachineModelsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEdgeMachineModelsResponse
     */
    public function describeEdgeMachineModelsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeEdgeMachineModels',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/edge_machines/models',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEdgeMachineModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachineModelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DescribeEdgeMachineModels operation to query the cloud-native box models.
     *
     * @returns DescribeEdgeMachineModelsResponse
     *
     * @return DescribeEdgeMachineModelsResponse
     */
    public function describeEdgeMachineModels()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineModelsWithOptions($headers, $runtime);
    }

    /**
     * You can call the DescribeEdgeMachineTunnelConfigDetail operation to obtain the SSH token of a cloud-native box.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEdgeMachineTunnelConfigDetailResponse
     *
     * @param string         $edgeMachineid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEdgeMachineTunnelConfigDetailResponse
     */
    public function describeEdgeMachineTunnelConfigDetailWithOptions($edgeMachineid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeEdgeMachineTunnelConfigDetail',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/edge_machines/%5Bedge_machineid%5D/tunnelconfig',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEdgeMachineTunnelConfigDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachineTunnelConfigDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DescribeEdgeMachineTunnelConfigDetail operation to obtain the SSH token of a cloud-native box.
     *
     * @returns DescribeEdgeMachineTunnelConfigDetailResponse
     *
     * @param string $edgeMachineid
     *
     * @return DescribeEdgeMachineTunnelConfigDetailResponse
     */
    public function describeEdgeMachineTunnelConfigDetail($edgeMachineid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineTunnelConfigDetailWithOptions($edgeMachineid, $headers, $runtime);
    }

    /**
     * You can call the DescribeEdgeMachines operation to query a list of cloud-native boxes.
     *
     * @param request - DescribeEdgeMachinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEdgeMachinesResponse
     *
     * @param DescribeEdgeMachinesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEdgeMachinesResponse
     */
    public function describeEdgeMachinesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hostname) {
            @$query['hostname'] = $request->hostname;
        }

        if (null !== $request->lifeState) {
            @$query['life_state'] = $request->lifeState;
        }

        if (null !== $request->model) {
            @$query['model'] = $request->model;
        }

        if (null !== $request->onlineState) {
            @$query['online_state'] = $request->onlineState;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEdgeMachines',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/edge_machines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEdgeMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the DescribeEdgeMachines operation to query a list of cloud-native boxes.
     *
     * @param request - DescribeEdgeMachinesRequest
     * @returns DescribeEdgeMachinesResponse
     *
     * @param DescribeEdgeMachinesRequest $request
     *
     * @return DescribeEdgeMachinesResponse
     */
    public function describeEdgeMachines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachinesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the detailed information about a type of events, including the severity level, status, and time. Events are generated when clusters are created, modified, and updated, node pools are created and scaled out, and components are installed.
     *
     * @param request - DescribeEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a type of events, including the severity level, status, and time. Events are generated when clusters are created, modified, and updated, node pools are created and scaled out, and components are installed.
     *
     * @param request - DescribeEventsRequest
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
     * Queries all events in a specified region.
     *
     * @param request - DescribeEventsForRegionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventsForRegion',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/regions/' . URL::percentEncode($regionId) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEventsForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventsForRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all events in a specified region.
     *
     * @param request - DescribeEventsForRegionRequest
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

    // Deprecated

    /**
     * Queries the proxy configurations of a registered cluster based on the cluster ID.
     *
     * @remarks
     * For more information, see [Register an external Kubernetes cluster](https://help.aliyun.com/document_detail/121053.html).
     *
     * @deprecated OpenAPI DescribeExternalAgent is deprecated
     *
     * @param request - DescribeExternalAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExternalAgent',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . URL::percentEncode($ClusterId) . '/external/agent/deployment',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeExternalAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Queries the proxy configurations of a registered cluster based on the cluster ID.
     *
     * @remarks
     * For more information, see [Register an external Kubernetes cluster](https://help.aliyun.com/document_detail/121053.html).
     *
     * @deprecated OpenAPI DescribeExternalAgent is deprecated
     *
     * @param request - DescribeExternalAgentRequest
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
     * Queries the detailed information about Kubernetes versions, including the version number, release date, expiration date, compatible OSs, and runtime.
     *
     * @param request - DescribeKubernetesVersionMetadataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKubernetesVersionMetadata',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metadata/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeKubernetesVersionMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeKubernetesVersionMetadataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about Kubernetes versions, including the version number, release date, expiration date, compatible OSs, and runtime.
     *
     * @param request - DescribeKubernetesVersionMetadataRequest
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
     * Queries the vulnerability information of a node pool, such as vulnerability names and severity levels, by specifying the ID of the node pool. We recommend that you periodically scan node pools for vulnerabilities to enhance cluster security.
     *
     * @param request - DescribeNodePoolVulsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodePoolVuls',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/nodepools/' . URL::percentEncode($nodepoolId) . '/vuls',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNodePoolVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the vulnerability information of a node pool, such as vulnerability names and severity levels, by specifying the ID of the node pool. We recommend that you periodically scan node pools for vulnerabilities to enhance cluster security.
     *
     * @param request - DescribeNodePoolVulsRequest
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
     * Queries a list of security policies. Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribePolicies',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of security policies. Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment.
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
     * Queries the detailed information about a policy. The information includes the content, action, and severity level of the policy. Container Service for Kubernetes (ACK) provides the following types of predefined security policies: Compliance, Infra, K8s-general, and pod security policy (PSP). These policies ensure that containers are running in the production environment in a secure manner.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribePolicyDetails',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policies/' . URL::percentEncode($policyName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePolicyDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a policy. The information includes the content, action, and severity level of the policy. Container Service for Kubernetes (ACK) provides the following types of predefined security policies: Compliance, Infra, K8s-general, and pod security policy (PSP). These policies ensure that containers are running in the production environment in a secure manner.
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
     * Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment. You can call the DescribePolicyGovernanceInCluster operation to query the details of policies for an ACK cluster. For example, you can query the number of policies that are enabled per severity level, the audit logs of policies, and the blocking and alerting information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribePolicyGovernanceInCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/policygovernance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePolicyGovernanceInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyGovernanceInClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment. You can call the DescribePolicyGovernanceInCluster operation to query the details of policies for an ACK cluster. For example, you can query the number of policies that are enabled per severity level, the audit logs of policies, and the blocking and alerting information.
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
     * Queries the detailed information about policy instances of the specified type in a Container Service for Kubernetes (ACK) cluster, such as the policy description and severity level. You can choose a type of security policy for an ACK cluster, specify the action and applicable scope of the policy, and then create and deploy a policy instance.
     *
     * @param request - DescribePolicyInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyInstances',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/policies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePolicyInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about policy instances of the specified type in a Container Service for Kubernetes (ACK) cluster, such as the policy description and severity level. You can choose a type of security policy for an ACK cluster, specify the action and applicable scope of the policy, and then create and deploy a policy instance.
     *
     * @param request - DescribePolicyInstancesRequest
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
     * Queries the deployment of policy instances in the current Container Service for Kubernetes (ACK) cluster, including the number of policy instances of each type and the number of policy types of each severity level.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribePolicyInstancesStatus',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/policies/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePolicyInstancesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyInstancesStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the deployment of policy instances in the current Container Service for Kubernetes (ACK) cluster, including the number of policy instances of each type and the number of policy types of each severity level.
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
     * Queries whether the deletion protection feature is enabled for the specified resources. The resources that you can query include namespaces and Services.
     *
     * @param request - DescribeResourcesDeleteProtectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourcesDeleteProtection',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/resources/' . URL::percentEncode($ResourceType) . '/protection',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeResourcesDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeResourcesDeleteProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries whether the deletion protection feature is enabled for the specified resources. The resources that you can query include namespaces and Services.
     *
     * @param request - DescribeResourcesDeleteProtectionRequest
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
     * Queries or issues the kubeconfig credentials of a Resource Access Management (RAM) user or RAM role of the account. If you are the permission manager of a Container Service for Kubernetes (ACK) cluster, you can issue the kubeconfig credentials to a specific RAM user or RAM role of the account by using the Alibaba Cloud account. The kubeconfig credentials, which are used to connect to the ACK cluster, contain the identity information about the RAM user or RAM role.
     *
     * @remarks
     * You can call this operation only by using an Alibaba Cloud account.
     *
     * @param request - DescribeSubaccountK8sClusterUserConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubaccountK8sClusterUserConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . URL::percentEncode($ClusterId) . '/users/' . URL::percentEncode($Uid) . '/user_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSubaccountK8sClusterUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSubaccountK8sClusterUserConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries or issues the kubeconfig credentials of a Resource Access Management (RAM) user or RAM role of the account. If you are the permission manager of a Container Service for Kubernetes (ACK) cluster, you can issue the kubeconfig credentials to a specific RAM user or RAM role of the account by using the Alibaba Cloud account. The kubeconfig credentials, which are used to connect to the ACK cluster, contain the identity information about the RAM user or RAM role.
     *
     * @remarks
     * You can call this operation only by using an Alibaba Cloud account.
     *
     * @param request - DescribeSubaccountK8sClusterUserConfigRequest
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
     * Queries detailed information about a task, such as the task type, status, and progress.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeTaskInfo',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . URL::percentEncode($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTaskInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries detailed information about a task, such as the task type, status, and progress.
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
     * An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *
     * @param request - DescribeTemplateAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateAttribute',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates/' . URL::percentEncode($TemplateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTemplateAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *
     * @param request - DescribeTemplateAttributeRequest
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
     * An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *
     * @param request - DescribeTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplates',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *
     * @param request - DescribeTemplatesRequest
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
     * Queries triggers that match specific conditions.
     *
     * @param request - DescribeTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/triggers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries triggers that match specific conditions.
     *
     * @param request - DescribeTriggerRequest
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
     * You can use Kubernetes namespaces to limit users from accessing resources in a Container Service for Kubernetes (ACK) cluster. Users that are granted Role-Based Access Control (RBAC) permissions only on one namespace cannot access resources in other namespaces. Queries the RBAC permissions that are granted to the current Resource Access Management (RAM) user or RAM role on an ACK cluster.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeUserClusterNamespaces',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/k8s/' . URL::percentEncode($ClusterId) . '/namespaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeUserClusterNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserClusterNamespacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can use Kubernetes namespaces to limit users from accessing resources in a Container Service for Kubernetes (ACK) cluster. Users that are granted Role-Based Access Control (RBAC) permissions only on one namespace cannot access resources in other namespaces. Queries the RBAC permissions that are granted to the current Resource Access Management (RAM) user or RAM role on an ACK cluster.
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
     * In an Container Service for Kubernetes (ACK) cluster, you can create and specify different Resource Access Management (RAM) users or roles to have different access permissions. This ensures access control and resource isolation. You can call the DescribeUserPermission operation to query the permissions that are granted to a RAM user or RAM role on ACK clusters, including the resources that are allowed to access, the scope of the permissions, the predefined role, and the permission source.
     *
     * @remarks
     * *Precautions**:
     * *   If you call this operation as a Resource Access Management (RAM) user or by assuming a RAM role, only the permissions granted on the clusters on which the current account has the role-based access control (RBAC) administrator permissions are returned. If you want to query the permissions on all clusters, you must use an account that has the RBAC administrator permissions on all clusters.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeUserPermission',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/permissions/users/' . URL::percentEncode($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * In an Container Service for Kubernetes (ACK) cluster, you can create and specify different Resource Access Management (RAM) users or roles to have different access permissions. This ensures access control and resource isolation. You can call the DescribeUserPermission operation to query the permissions that are granted to a RAM user or RAM role on ACK clusters, including the resources that are allowed to access, the scope of the permissions, the predefined role, and the permission source.
     *
     * @remarks
     * *Precautions**:
     * *   If you call this operation as a Resource Access Management (RAM) user or by assuming a RAM role, only the permissions granted on the clusters on which the current account has the role-based access control (RBAC) administrator permissions are returned. If you want to query the permissions on all clusters, you must use an account that has the RBAC administrator permissions on all clusters.
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
     * Queries quotas related to Container Service for Kubernetes (ACK) clusters, node pools, and nodes. To increase a quota, submit an application in the Quota Center console.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeUserQuota',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/quota',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries quotas related to Container Service for Kubernetes (ACK) clusters, node pools, and nodes. To increase a quota, submit an application in the Quota Center console.
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

    // Deprecated

    /**
     * You can call the EdgeClusterAddEdgeMachine operation to add a cloud-native box to a Container Service for Kubernetes (ACK) Edge cluster.
     *
     * @deprecated OpenAPI EdgeClusterAddEdgeMachine is deprecated
     *
     * @param request - EdgeClusterAddEdgeMachineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EdgeClusterAddEdgeMachineResponse
     *
     * @param string                           $clusterid
     * @param string                           $edgeMachineid
     * @param EdgeClusterAddEdgeMachineRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return EdgeClusterAddEdgeMachineResponse
     */
    public function edgeClusterAddEdgeMachineWithOptions($clusterid, $edgeMachineid, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expired) {
            @$body['expired'] = $request->expired;
        }

        if (null !== $request->nodepoolId) {
            @$body['nodepool_id'] = $request->nodepoolId;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EdgeClusterAddEdgeMachine',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/%5Bclusterid%5D/attachedgemachine/%5Bedge_machineid%5D',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EdgeClusterAddEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EdgeClusterAddEdgeMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the EdgeClusterAddEdgeMachine operation to add a cloud-native box to a Container Service for Kubernetes (ACK) Edge cluster.
     *
     * @deprecated OpenAPI EdgeClusterAddEdgeMachine is deprecated
     *
     * @param request - EdgeClusterAddEdgeMachineRequest
     * @returns EdgeClusterAddEdgeMachineResponse
     *
     * @param string                           $clusterid
     * @param string                           $edgeMachineid
     * @param EdgeClusterAddEdgeMachineRequest $request
     *
     * @return EdgeClusterAddEdgeMachineResponse
     */
    public function edgeClusterAddEdgeMachine($clusterid, $edgeMachineid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->edgeClusterAddEdgeMachineWithOptions($clusterid, $edgeMachineid, $request, $headers, $runtime);
    }

    /**
     * Patches node vulnerabilities in a node pool to enhance node security. Cloud Security provided by Alibaba Cloud periodically scans Elastic Compute Service (ECS) instances for vulnerabilities and provides suggestions on how to patch the detected vulnerabilities. Vulnerability patching may require node restarts. Make sure that your cluster has sufficient idle nodes for node draining.
     *
     * @remarks
     * 1.  The Common Vulnerabilities and Exposures (CVE) patching feature is developed based on Security Center. To use this feature, you must purchase the Security Center Ultimate Edition that supports Container Service for Kubernetes (ACK).
     * 2.  ACK may need to restart nodes to patch certain vulnerabilities. ACK drains a node before the node restarts. Make sure that the ACK cluster has sufficient idle nodes to host the pods evicted from the trained nodes. For example, you can scale out a node pool before you patch vulnerabilities for the nodes in the node pool.
     * 3.  Security Center ensures the compatibility of CVE patches. We recommend that you check the compatibility of a CVE patch with your application before you install the patch. You can pause or cancel a CVE patching task anytime.
     * 4.  CVE patching is a progressive task that consists of multiple batches. After you pause or cancel a CVE patching task, ACK continues to process the dispatched batches. Only the batches that have not been dispatched are paused or canceled.
     *
     * @param request - FixNodePoolVulsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FixNodePoolVuls',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/nodepools/' . URL::percentEncode($nodepoolId) . '/vuls/fix',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return FixNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FixNodePoolVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Patches node vulnerabilities in a node pool to enhance node security. Cloud Security provided by Alibaba Cloud periodically scans Elastic Compute Service (ECS) instances for vulnerabilities and provides suggestions on how to patch the detected vulnerabilities. Vulnerability patching may require node restarts. Make sure that your cluster has sufficient idle nodes for node draining.
     *
     * @remarks
     * 1.  The Common Vulnerabilities and Exposures (CVE) patching feature is developed based on Security Center. To use this feature, you must purchase the Security Center Ultimate Edition that supports Container Service for Kubernetes (ACK).
     * 2.  ACK may need to restart nodes to patch certain vulnerabilities. ACK drains a node before the node restarts. Make sure that the ACK cluster has sufficient idle nodes to host the pods evicted from the trained nodes. For example, you can scale out a node pool before you patch vulnerabilities for the nodes in the node pool.
     * 3.  Security Center ensures the compatibility of CVE patches. We recommend that you check the compatibility of a CVE patch with your application before you install the patch. You can pause or cancel a CVE patching task anytime.
     * 4.  CVE patching is a progressive task that consists of multiple batches. After you pause or cancel a CVE patching task, ACK continues to process the dispatched batches. Only the batches that have not been dispatched are paused or canceled.
     *
     * @param request - FixNodePoolVulsRequest
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
     * You can call the GetClusterAddonInstance operation to query the information of a component instance in a cluster, including the version, configurations, and log status of the component instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetClusterAddonInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/addon_instances/' . URL::percentEncode($instanceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterAddonInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the GetClusterAddonInstance operation to query the information of a component instance in a cluster, including the version, configurations, and log status of the component instance.
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
     * You can call the GetClusterAuditProject operation to query the Simple Log Service (SLS) project that stores the audit logs of the API server of a cluster.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetClusterAuditProject',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterid) . '/audit',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterAuditProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterAuditProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the GetClusterAuditProject operation to query the Simple Log Service (SLS) project that stores the audit logs of the API server of a cluster.
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
     * Queries a cluster check task by cluster ID and task ID. You can view the status, check items, creation time, and end time of the task. Container Intelligence Service (CIS) provides a variety of Kubernetes cluster check features, including cluster update check, cluster migration check, component installation check, component update check, and node pool check.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetClusterCheck',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/checks/' . URL::percentEncode($checkId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a cluster check task by cluster ID and task ID. You can view the status, check items, creation time, and end time of the task. Container Intelligence Service (CIS) provides a variety of Kubernetes cluster check features, including cluster update check, cluster migration check, component installation check, component update check, and node pool check.
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
     * Queries cluster diagnostic items.
     *
     * @param request - GetClusterDiagnosisCheckItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterDiagnosisCheckItems',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/diagnosis/' . URL::percentEncode($diagnosisId) . '/check_items',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterDiagnosisCheckItemsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterDiagnosisCheckItemsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries cluster diagnostic items.
     *
     * @param request - GetClusterDiagnosisCheckItemsRequest
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
     * Queries cluster diagnostic results.
     *
     * @param request - GetClusterDiagnosisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterDiagnosisResult',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/diagnosis/' . URL::percentEncode($diagnosisId) . '/result',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterDiagnosisResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries cluster diagnostic results.
     *
     * @param request - GetClusterDiagnosisResultRequest
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

    // Deprecated

    /**
     * You can call the GetKubernetesTrigger operationto query the triggers of an application by application name.
     *
     * @deprecated OpenAPI GetKubernetesTrigger is deprecated
     *
     * @param request - GetKubernetesTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKubernetesTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/triggers/' . URL::percentEncode($ClusterId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKubernetesTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the GetKubernetesTrigger operationto query the triggers of an application by application name.
     *
     * @deprecated OpenAPI GetKubernetesTrigger is deprecated
     *
     * @param request - GetKubernetesTriggerRequest
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

    // Deprecated

    /**
     * You can call the GetUpgradeStatus operation to query the update progress of a cluster by cluster ID.
     *
     * @deprecated OpenAPI GetUpgradeStatus is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetUpgradeStatus',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '/upgrade/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUpgradeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the GetUpgradeStatus operation to query the update progress of a cluster by cluster ID.
     *
     * @deprecated OpenAPI GetUpgradeStatus is deprecated
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
     * Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *
     * @remarks
     * *Precautions**:
     * *   If you use a Resource Access Management (RAM) user to call the operation, make sure that the RAM user has the permissions to modify the permissions of other RAM users or RAM roles. Otherwise, the `StatusForbidden` or `ForbiddenGrantPermissions` error code is returned after you call the operation. For more information, see [Use a RAM user to grant RBAC permissions to other RAM users](https://help.aliyun.com/document_detail/119035.html).
     * *   If you update full permissions, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation.
     *
     * @param request - GrantPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'GrantPermissions',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/permissions/users/' . URL::percentEncode($uid) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GrantPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *
     * @remarks
     * *Precautions**:
     * *   If you use a Resource Access Management (RAM) user to call the operation, make sure that the RAM user has the permissions to modify the permissions of other RAM users or RAM roles. Otherwise, the `StatusForbidden` or `ForbiddenGrantPermissions` error code is returned after you call the operation. For more information, see [Use a RAM user to grant RBAC permissions to other RAM users](https://help.aliyun.com/document_detail/119035.html).
     * *   If you update full permissions, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation.
     *
     * @param request - GrantPermissionsRequest
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
     * Installs a component by specifying the name and version of the component. To enhance Kubernetes capabilities, you can install a variety of components in Container Service for Kubernetes (ACK) clusters, such as fully-managed core components and application, logging and monitoring, network, storage, and security group components.
     *
     * @param request - InstallClusterAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'InstallClusterAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/components/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallClusterAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Installs a component by specifying the name and version of the component. To enhance Kubernetes capabilities, you can install a variety of components in Container Service for Kubernetes (ACK) clusters, such as fully-managed core components and application, logging and monitoring, network, storage, and security group components.
     *
     * @param request - InstallClusterAddonsRequest
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
     * Queries the available components based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, and cluster version and queries the detailed information about a component. The information includes whether the component is managed, the supported custom parameter schema, and compatible operating system architecture.
     *
     * @param request - ListAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/addons',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the available components based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, and cluster version and queries the detailed information about a component. The information includes whether the component is managed, the supported custom parameter schema, and compatible operating system architecture.
     *
     * @param request - ListAddonsRequest
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
     * Queries the component instances that are running in the specified cluster and the information about the component instances. The information includes the component version and status.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListClusterAddonInstances',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/addon_instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterAddonInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterAddonInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the component instances that are running in the specified cluster and the information about the component instances. The information includes the component version and status.
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
     * You can call the ListClusterChecks operation to query all the cluster check results of a cluster.
     *
     * @param request - ListClusterChecksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterChecks',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/checks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterChecksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterChecksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the ListClusterChecks operation to query all the cluster check results of a cluster.
     *
     * @param request - ListClusterChecksRequest
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
     * Queries the kubeconfig files that are issued to users for the current cluster and the status of the kubeconfig files.
     *
     * @remarks
     * > - To call this operation, make sure that you have ram:ListUsers and ram:ListRoles permissions.
     * > - To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *
     * @param request - ListClusterKubeconfigStatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterKubeconfigStates',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/kubeconfig/states',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterKubeconfigStatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterKubeconfigStatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the kubeconfig files that are issued to users for the current cluster and the status of the kubeconfig files.
     *
     * @remarks
     * > - To call this operation, make sure that you have ram:ListUsers and ram:ListRoles permissions.
     * > - To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *
     * @param request - ListClusterKubeconfigStatesRequest
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
     * Queries the automated maintenance schedules of a cluster.
     *
     * @param request - ListOperationPlansRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperationPlans',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/operation/plans',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOperationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOperationPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the automated maintenance schedules of a cluster.
     *
     * @param request - ListOperationPlansRequest
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
     * Queries resource labels and the detailed information, such as the key-value pairs of the labels and the clusters to which the labels are added. You can use labels to classify and manage Container Service for Kubernetes (ACK) clusters in order to meet monitoring, cost analysis, and tenant isolation requirements.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries resource labels and the detailed information, such as the key-value pairs of the labels and the clusters to which the labels are added. You can use labels to classify and manage Container Service for Kubernetes (ACK) clusters in order to meet monitoring, cost analysis, and tenant isolation requirements.
     *
     * @param request - ListTagResourcesRequest
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
     * You can call the ListUserKubeConfigStates operation to query the status of the kubeconfig files of all clusters managed by the current user.
     *
     * @remarks
     * >  To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *
     * @param request - ListUserKubeConfigStatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserKubeConfigStates',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/users/' . URL::percentEncode($Uid) . '/kubeconfig/states',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserKubeConfigStatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserKubeConfigStatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the ListUserKubeConfigStates operation to query the status of the kubeconfig files of all clusters managed by the current user.
     *
     * @remarks
     * >  To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *
     * @param request - ListUserKubeConfigStatesRequest
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
     * Container Service for Kubernetes (ACK) Pro clusters are developed based on ACK Basic clusters. ACK Pro clusters provide all benefits of ACK managed clusters, such as fully-managed control planes and control plane high availability. In addition, ACK Pro clusters provide you with enhanced reliability, security, and schedulability. ACK Pro clusters are covered by the SLA that supports compensation clauses. ACK Pro clusters are suitable for large-scale businesses that require high stability and security in production environments. We recommend that you migrate from ACK Basic clusters to ACK Pro clusters.
     *
     * @param request - MigrateClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MigrateCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/migrate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MigrateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MigrateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Container Service for Kubernetes (ACK) Pro clusters are developed based on ACK Basic clusters. ACK Pro clusters provide all benefits of ACK managed clusters, such as fully-managed control planes and control plane high availability. In addition, ACK Pro clusters provide you with enhanced reliability, security, and schedulability. ACK Pro clusters are covered by the SLA that supports compensation clauses. ACK Pro clusters are suitable for large-scale businesses that require high stability and security in production environments. We recommend that you migrate from ACK Basic clusters to ACK Pro clusters.
     *
     * @param request - MigrateClusterRequest
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
     * You can call the ModifyCluster operation to modify the cluster configurations by cluster ID.
     *
     * @param request - ModifyClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->clusterName) {
            @$body['cluster_name'] = $request->clusterName;
        }

        if (null !== $request->controlPlaneConfig) {
            @$body['control_plane_config'] = $request->controlPlaneConfig;
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

        if (null !== $request->systemEventsLogging) {
            @$body['system_events_logging'] = $request->systemEventsLogging;
        }

        if (null !== $request->vswitchIds) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the ModifyCluster operation to modify the cluster configurations by cluster ID.
     *
     * @param request - ModifyClusterRequest
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
     * Modifies the configuration of a cluster component. This operation may affect your businesses. We recommend that you assess the impact, back up data, and perform the operation during off-peak hours.
     *
     * @remarks
     * You can call this API operation to modify the component parameters of an ACK Basic cluster or the control plane parameters of an ACK Pro cluster:
     * *   To view the component parameters of an ACK Basic cluster, call the DescribeClusterAddonMetadata API operation. For more information, see [Query the metadata of a cluster component](https://help.aliyun.com/document_detail/2667944.html).
     * *   To view the control plane parameters of an ACK Pro cluster, see [Customize the control plane parameters of an ACK Pro cluster](https://help.aliyun.com/document_detail/199588.html).
     * After you call this operation, the component may be redeployed and restarted. We recommend that you assess the impact before you call this operation.
     *
     * @param request - ModifyClusterAddonRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterAddon',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/components/' . URL::percentEncode($componentId) . '/config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyClusterAddonResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterAddonResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a cluster component. This operation may affect your businesses. We recommend that you assess the impact, back up data, and perform the operation during off-peak hours.
     *
     * @remarks
     * You can call this API operation to modify the component parameters of an ACK Basic cluster or the control plane parameters of an ACK Pro cluster:
     * *   To view the component parameters of an ACK Basic cluster, call the DescribeClusterAddonMetadata API operation. For more information, see [Query the metadata of a cluster component](https://help.aliyun.com/document_detail/2667944.html).
     * *   To view the control plane parameters of an ACK Pro cluster, see [Customize the control plane parameters of an ACK Pro cluster](https://help.aliyun.com/document_detail/199588.html).
     * After you call this operation, the component may be redeployed and restarted. We recommend that you assess the impact before you call this operation.
     *
     * @param request - ModifyClusterAddonRequest
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

    // Deprecated

    /**
     * This API operation applies only to Container Service for Kubernetes (ACK) managed clusters.
     *
     * @deprecated OpenAPI ModifyClusterConfiguration is deprecated
     *
     * @param request - ModifyClusterConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyClusterConfigurationResponse
     *
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customizeConfig) {
            @$body['customize_config'] = $request->customizeConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterConfiguration',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/configuration',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyClusterConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * This API operation applies only to Container Service for Kubernetes (ACK) managed clusters.
     *
     * @deprecated OpenAPI ModifyClusterConfiguration is deprecated
     *
     * @param request - ModifyClusterConfigurationRequest
     * @returns ModifyClusterConfigurationResponse
     *
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     *
     * @return ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfiguration($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * You can call the ModifyClusterNodePool operation to modify the configuration of a node pool with the specified node pool ID.
     *
     * @param request - ModifyClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the ModifyClusterNodePool operation to modify the configuration of a node pool with the specified node pool ID.
     *
     * @param request - ModifyClusterNodePoolRequest
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
     * You can add labels in key-value pairs to clusters. This allows cluster developers or O\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the ModifyClusterTags operation to modify the labels of a cluster.
     *
     * @param request - ModifyClusterTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterTags',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyClusterTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can add labels in key-value pairs to clusters. This allows cluster developers or O\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the ModifyClusterTags operation to modify the labels of a cluster.
     *
     * @param request - ModifyClusterTagsRequest
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
     * Modifies the configuration of a node pool, such as the kubelet configuration and node rolling update configuration. After you modify the node pool configuration, nodes are batch updated and the kubelet on each node is restarted. This may adversely affect the nodes and workloads. We recommend that you perform this operation during off-peak hours.
     *
     * @remarks
     * >  Container Service for Kubernetes (ACK) allows you to modify the kubelet configuration of nodes in a node pool. After you modify the kubelet configuration, the new configuration immediately takes effect on existing nodes in the node pool and is automatically applied to newly added nodes.
     *
     * @param request - ModifyNodePoolNodeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->kubeletConfig) {
            @$body['kubelet_config'] = $request->kubeletConfig;
        }

        if (null !== $request->osConfig) {
            @$body['os_config'] = $request->osConfig;
        }

        if (null !== $request->rollingPolicy) {
            @$body['rolling_policy'] = $request->rollingPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodePoolNodeConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '/node_config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyNodePoolNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyNodePoolNodeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a node pool, such as the kubelet configuration and node rolling update configuration. After you modify the node pool configuration, nodes are batch updated and the kubelet on each node is restarted. This may adversely affect the nodes and workloads. We recommend that you perform this operation during off-peak hours.
     *
     * @remarks
     * >  Container Service for Kubernetes (ACK) allows you to modify the kubelet configuration of nodes in a node pool. After you modify the kubelet configuration, the new configuration immediately takes effect on existing nodes in the node pool and is automatically applied to newly added nodes.
     *
     * @param request - ModifyNodePoolNodeConfigRequest
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
     * Updates a policy in a specific Container Service for Kubernetes (ACK) cluster. You can modify the action of the policy such as alerting or denying and namespaces to which the policy applies.
     *
     * @param request - ModifyPolicyInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/policies/' . URL::percentEncode($policyName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPolicyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a policy in a specific Container Service for Kubernetes (ACK) cluster. You can modify the action of the policy such as alerting or denying and namespaces to which the policy applies.
     *
     * @param request - ModifyPolicyInstanceRequest
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
     * When you use Container Service for Kubernetes (ACK) for the first time, you must activate ACK by using an Alibaba Cloud account or RAM user with the required permissions and complete ACK authorization.
     *
     * @remarks
     *   You can activate ACK by using Alibaba Cloud accounts.
     * *   To activate ACK by using RAM users, you need to grant the AdministratorAccess permission to the RAM users.
     *
     * @param request - OpenAckServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenAckService',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/service/open',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenAckServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenAckServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When you use Container Service for Kubernetes (ACK) for the first time, you must activate ACK by using an Alibaba Cloud account or RAM user with the required permissions and complete ACK authorization.
     *
     * @remarks
     *   You can activate ACK by using Alibaba Cloud accounts.
     * *   To activate ACK by using RAM users, you need to grant the AdministratorAccess permission to the RAM users.
     *
     * @param request - OpenAckServiceRequest
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

    // Deprecated

    /**
     * You can call the PauseClusterUpgrade operation to pause the update of a Container Service for Kubernetes (ACK) cluster.
     *
     * @deprecated OpenAPI PauseClusterUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'PauseClusterUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '/upgrade/pause',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PauseClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseClusterUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the PauseClusterUpgrade operation to pause the update of a Container Service for Kubernetes (ACK) cluster.
     *
     * @deprecated OpenAPI PauseClusterUpgrade is deprecated
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

    // Deprecated

    /**
     * You can call the PauseComponentUpgrade operation to pause the update of a component.
     *
     * @deprecated OpenAPI PauseComponentUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'PauseComponentUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterid) . '/components/' . URL::percentEncode($componentid) . '/pause',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PauseComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseComponentUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the PauseComponentUpgrade operation to pause the update of a component.
     *
     * @deprecated OpenAPI PauseComponentUpgrade is deprecated
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
     * Pauses an on-going task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'PauseTask',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . URL::percentEncode($taskId) . '/pause',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PauseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Pauses an on-going task.
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

    // Deprecated

    /**
     * You can call the RemoveClusterNodes operation to remove nodes from a Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * ***
     * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   Unknown errors may occur when you remove nodes. Before you remove nodes, back up the data on the nodes.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   You can remove only worker nodes. You cannot remove master nodes.
     *
     * @deprecated OpenAPI RemoveClusterNodes is deprecated
     *
     * @param request - RemoveClusterNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveClusterNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '/nodes/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveClusterNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the RemoveClusterNodes operation to remove nodes from a Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * ***
     * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   Unknown errors may occur when you remove nodes. Before you remove nodes, back up the data on the nodes.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   You can remove only worker nodes. You cannot remove master nodes.
     *
     * @deprecated OpenAPI RemoveClusterNodes is deprecated
     *
     * @param request - RemoveClusterNodesRequest
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
     * Removes nodes from a node pool.
     *
     * @remarks
     *   When you remove a node, the pods on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   The system removes only worker nodes. It does not remove master nodes.
     * *   Even if you set the `release_node` parameter to `true`, subscription nodes are not released. You must release the subscription nodes in the [ECS console](https://ecs.console.aliyun.com/) after you remove the nodes.
     *
     * @param tmpReq - RemoveNodePoolNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveNodePoolNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '/nodes',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveNodePoolNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveNodePoolNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes nodes from a node pool.
     *
     * @remarks
     *   When you remove a node, the pods on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   The system removes only worker nodes. It does not remove master nodes.
     * *   Even if you set the `release_node` parameter to `true`, subscription nodes are not released. You must release the subscription nodes in the [ECS console](https://ecs.console.aliyun.com/) after you remove the nodes.
     *
     * @param request - RemoveNodePoolNodesRequest
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
     * Repairs a node pool.
     *
     * @param request - RepairClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RepairClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/nodepools/' . URL::percentEncode($nodepoolId) . '/repair',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RepairClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RepairClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Repairs a node pool.
     *
     * @param request - RepairClusterNodePoolRequest
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

    // Deprecated

    /**
     * You can call the ResumeComponentUpgrade operation to resume the update of a component.
     *
     * @deprecated OpenAPI ResumeComponentUpgrade is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ResumeComponentUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterid) . '/components/' . URL::percentEncode($componentid) . '/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeComponentUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the ResumeComponentUpgrade operation to resume the update of a component.
     *
     * @deprecated OpenAPI ResumeComponentUpgrade is deprecated
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
     * Resumes a task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ResumeTask',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . URL::percentEncode($taskId) . '/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resumes a task.
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

    // Deprecated

    /**
     * You can call the ResumeUpgradeCluster operation to resume the update of a cluster by cluster ID.
     *
     * @deprecated OpenAPI ResumeUpgradeCluster is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ResumeUpgradeCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '/upgrade/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeUpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeUpgradeClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * You can call the ResumeUpgradeCluster operation to resume the update of a cluster by cluster ID.
     *
     * @deprecated OpenAPI ResumeUpgradeCluster is deprecated
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
     * You can call the RevokeK8sClusterKubeConfig operation to revoke the kubeconfig file of a cluster that belongs to the current Alibaba Cloud account or RAM user. After the kubeconfig file is revoked, the cluster generates a new kubeconfig file, and the original kubeconfig file becomes invalid.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'RevokeK8sClusterKubeConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . URL::percentEncode($ClusterId) . '/certs',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevokeK8sClusterKubeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeK8sClusterKubeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the RevokeK8sClusterKubeConfig operation to revoke the kubeconfig file of a cluster that belongs to the current Alibaba Cloud account or RAM user. After the kubeconfig file is revoked, the cluster generates a new kubeconfig file, and the original kubeconfig file becomes invalid.
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
     * Container Intelligence Service (CIS) provides a variety of cluster check capabilities to allow you to perform cluster update check, cluster migration check, component installation check, component update check, and node pool check. A precheck is automatically triggered before an update, migration, or installation is performed. You can perform changes only if the cluster passes the precheck. You can also manually call the RunClusterCheck operation to initiate cluster checks. We recommend that you periodically check and maintain your cluster to mitigate potential risks.
     *
     * @param request - RunClusterCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunClusterCheck',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/checks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunClusterCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Container Intelligence Service (CIS) provides a variety of cluster check capabilities to allow you to perform cluster update check, cluster migration check, component installation check, component update check, and node pool check. A precheck is automatically triggered before an update, migration, or installation is performed. You can perform changes only if the cluster passes the precheck. You can also manually call the RunClusterCheck operation to initiate cluster checks. We recommend that you periodically check and maintain your cluster to mitigate potential risks.
     *
     * @param request - RunClusterCheckRequest
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

    // Deprecated

    /**
     * 扩容Kubernetes集群.
     *
     * @deprecated OpenAPI ScaleCluster is deprecated
     *
     * @param request - ScaleClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ScaleClusterResponse
     *
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ScaleClusterResponse
     */
    public function scaleClusterWithOptions($ClusterId, $request, $headers, $runtime)
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

        if (null !== $request->disableRollback) {
            @$body['disable_rollback'] = $request->disableRollback;
        }

        if (null !== $request->keyPair) {
            @$body['key_pair'] = $request->keyPair;
        }

        if (null !== $request->loginPassword) {
            @$body['login_password'] = $request->loginPassword;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->taints) {
            @$body['taints'] = $request->taints;
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

        if (null !== $request->workerDataDisk) {
            @$body['worker_data_disk'] = $request->workerDataDisk;
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ScaleClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 扩容Kubernetes集群.
     *
     * @deprecated OpenAPI ScaleCluster is deprecated
     *
     * @param request - ScaleClusterRequest
     * @returns ScaleClusterResponse
     *
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request
     *
     * @return ScaleClusterResponse
     */
    public function scaleCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Scales out a node pool.
     *
     * @param request - ScaleClusterNodePoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ScaleClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Scales out a node pool.
     *
     * @param request - ScaleClusterNodePoolRequest
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
     * You can call the ScaleOutCluster operation to scale out a cluster by cluster ID.
     *
     * @remarks
     * *
     * ****The ScaleOutCluster API operation is phased out. You must call the node pool-related API operations to manage nodes. If you want to add worker nodes to a Container Service for Kubernetes (ACK) cluster, call the ScaleClusterNodePool API operation. For more information, see [ScaleClusterNodePool](https://help.aliyun.com/document_detail/184928.html).
     *
     * @param request - ScaleOutClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleOutCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ScaleOutClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleOutClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the ScaleOutCluster operation to scale out a cluster by cluster ID.
     *
     * @remarks
     * *
     * ****The ScaleOutCluster API operation is phased out. You must call the node pool-related API operations to manage nodes. If you want to add worker nodes to a Container Service for Kubernetes (ACK) cluster, call the ScaleClusterNodePool API operation. For more information, see [ScaleClusterNodePool](https://help.aliyun.com/document_detail/184928.html).
     *
     * @param request - ScaleOutClusterRequest
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
     * Scans for vulnerabilities in a Container Service for Kubernetes (ACK) cluster, including workload vulnerabilities, third-party software vulnerabilities, CVE vulnerabilities, WebCMS vulnerabilities, and Windows vulnerabilities. We recommend that you scan your cluster on a regular basis to ensure cluster security.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ScanClusterVuls',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterId) . '/vuls/scan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ScanClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScanClusterVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Scans for vulnerabilities in a Container Service for Kubernetes (ACK) cluster, including workload vulnerabilities, third-party software vulnerabilities, CVE vulnerabilities, WebCMS vulnerabilities, and Windows vulnerabilities. We recommend that you scan your cluster on a regular basis to ensure cluster security.
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
     * @param request - StartAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartAlert',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/' . URL::percentEncode($ClusterId) . '/alert_rule/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - StartAlertRequest
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
     * You can call the StopAlert operation to disable an alert rule or an alert rule set in the alert center of Container Service for Kubernetes (ACK).
     *
     * @param request - StopAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopAlert',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/' . URL::percentEncode($ClusterId) . '/alert_rule/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the StopAlert operation to disable an alert rule or an alert rule set in the alert center of Container Service for Kubernetes (ACK).
     *
     * @param request - StopAlertRequest
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
     * Synchronizes the information about a node pool, including the metadata and node information of the node pool.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'SyncClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/sync_nodepools',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SyncClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Synchronizes the information about a node pool, including the metadata and node information of the node pool.
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
     * You can add labels in key-value pairs to clusters. This allows cluster developers or O\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the TagResources operation to add labels to a cluster.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can add labels in key-value pairs to clusters. This allows cluster developers or O\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the TagResources operation to add labels to a cluster.
     *
     * @param request - TagResourcesRequest
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
     * Uninstalls components that you no longer need from a cluster. You must specify the name of the components and specify whether to release associated Alibaba Cloud resources from the cluster.
     *
     * @param request - UnInstallClusterAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::toArray($request->addons),
        ]);
        $params = new Params([
            'action'      => 'UnInstallClusterAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/components/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnInstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnInstallClusterAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Uninstalls components that you no longer need from a cluster. You must specify the name of the components and specify whether to release associated Alibaba Cloud resources from the cluster.
     *
     * @param request - UnInstallClusterAddonsRequest
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
     * If you no longer need the labels (key-value pairs) of a cluster, you can call the UntagResources operation to delete the labels.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you no longer need the labels (key-value pairs) of a cluster, you can call the UntagResources operation to delete the labels.
     *
     * @param request - UntagResourcesRequest
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
     * You can call the UpdateClusterAuditLogConfig operation to enable or disable the audit log feature in a Container Service for Kubernetes (ACK) cluster and update the audit log configuration. This operation also allows you to record requests to the Kubernetes API and the responses, which can be used to trace cluster operation history and troubleshoot cluster issues.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the billing methods and pricing of [Simple Log Service](https://www.alibabacloud.com/product/log-service/pricing) (SLS).
     *
     * @param request - UpdateClusterAuditLogConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateClusterAuditLogConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($clusterid) . '/audit_log',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateClusterAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateClusterAuditLogConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the UpdateClusterAuditLogConfig operation to enable or disable the audit log feature in a Container Service for Kubernetes (ACK) cluster and update the audit log configuration. This operation also allows you to record requests to the Kubernetes API and the responses, which can be used to trace cluster operation history and troubleshoot cluster issues.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the billing methods and pricing of [Simple Log Service](https://www.alibabacloud.com/product/log-service/pricing) (SLS).
     *
     * @param request - UpdateClusterAuditLogConfigRequest
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
     * null.
     *
     * @param request - UpdateContactGroupForAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateContactGroupForAlert',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/' . URL::percentEncode($ClusterId) . '/alert_rule/contact_groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateContactGroupForAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateContactGroupForAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - UpdateContactGroupForAlertRequest
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
     * Modifies the log configurations of control plane components. The configurations include the log retention period and components whose logs that you want to collect. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube-apiserver, kube-scheduler, Kubernetes controller manager, and cloud controller manager (CCM).
     *
     * @param request - UpdateControlPlaneLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateControlPlaneLog',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/controlplanelog',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateControlPlaneLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateControlPlaneLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the log configurations of control plane components. The configurations include the log retention period and components whose logs that you want to collect. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube-apiserver, kube-scheduler, Kubernetes controller manager, and cloud controller manager (CCM).
     *
     * @param request - UpdateControlPlaneLogRequest
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
     * Sets the validity period of a kubeconfig file used by a Resource Access Management (RAM) user or RAM role to connect to a Container Service for Kubernetes (ACK) cluster. The validity period ranges from 1 to 876,000 hours. You can call this API operation when you customize configurations by using an Alibaba Cloud account. The default validity period of a kubeconfig file is three years.
     *
     * @remarks
     *   You can call this operation only with an Alibaba Cloud account.
     * *   If the kubeconfig file used by your cluster is revoked, the custom validity period of the kubeconfig file is reset. In this case, you need to call this API operation to reconfigure the validity period of the kubeconfig file.
     *
     * @param request - UpdateK8sClusterUserConfigExpireRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sClusterUserConfigExpire',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . URL::percentEncode($ClusterId) . '/user_config/expire',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets the validity period of a kubeconfig file used by a Resource Access Management (RAM) user or RAM role to connect to a Container Service for Kubernetes (ACK) cluster. The validity period ranges from 1 to 876,000 hours. You can call this API operation when you customize configurations by using an Alibaba Cloud account. The default validity period of a kubeconfig file is three years.
     *
     * @remarks
     *   You can call this operation only with an Alibaba Cloud account.
     * *   If the kubeconfig file used by your cluster is revoked, the custom validity period of the kubeconfig file is reset. In this case, you need to call this API operation to reconfigure the validity period of the kubeconfig file.
     *
     * @param request - UpdateK8sClusterUserConfigExpireRequest
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
     * Updates the deletion protection status of the specified resources. You can enable or disable deletion protection for namespaces and Services.
     *
     * @param request - UpdateResourcesDeleteProtectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourcesDeleteProtection',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/resources/protection',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateResourcesDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateResourcesDeleteProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the deletion protection status of the specified resources. You can enable or disable deletion protection for namespaces and Services.
     *
     * @param request - UpdateResourcesDeleteProtectionRequest
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
     * Updates the configurations of an orchestration template. An orchestration template defines and describes a group of Container Service for Kubernetes (ACK) resources. An orchestration template describes the configurations of an application or how an application runs in a declarative manner.
     *
     * @param request - UpdateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates/' . URL::percentEncode($TemplateId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configurations of an orchestration template. An orchestration template defines and describes a group of Container Service for Kubernetes (ACK) resources. An orchestration template describes the configurations of an application or how an application runs in a declarative manner.
     *
     * @param request - UpdateTemplateRequest
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
     * Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *
     * @remarks
     * *Precautions**:
     * *   You can update the permissions of a RAM user or RAM role on a cluster by using full update or incremental update. If you use full update, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation. If you use incremental update, you can grant permissions to or revoke permissions from the RAM user or RAM role on the cluster. In this case, only the permissions that you specify in the request parameters when you call the operation are granted or revoked, other permissions of the RAM user or RAM role on the cluster are not affected.
     *
     * @param request - UpdateUserPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'query'   => Utils::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserPermissions',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/permissions/users/' . URL::percentEncode($uid) . '/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *
     * @remarks
     * *Precautions**:
     * *   You can update the permissions of a RAM user or RAM role on a cluster by using full update or incremental update. If you use full update, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation. If you use incremental update, you can grant permissions to or revoke permissions from the RAM user or RAM role on the cluster. In this case, only the permissions that you specify in the request parameters when you call the operation are granted or revoked, other permissions of the RAM user or RAM role on the cluster are not affected.
     *
     * @param request - UpdateUserPermissionsRequest
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
     * You can call the UpgradeCluster operation to upgrade a cluster by cluster ID.
     *
     * @remarks
     * After successfully calling the UpgradeCluster interface, this API returns the `task_id` of the upgrade task. You can manage this operation task by calling the following task APIs:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a task that has been paused](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     *
     * @param request - UpgradeClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . URL::percentEncode($ClusterId) . '/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the UpgradeCluster operation to upgrade a cluster by cluster ID.
     *
     * @remarks
     * After successfully calling the UpgradeCluster interface, this API returns the `task_id` of the upgrade task. You can manage this operation task by calling the following task APIs:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a task that has been paused](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     *
     * @param request - UpgradeClusterRequest
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
     * Updates cluster components to use new features and patch vulnerabilities. You must update cluster components one after one and update a component only after the previous one is successfully updated. Before you update a component, we recommend that you read the update notes for each component. Cluster component updates may affect your businesses. Assess the impact, back up data, and perform the update during off-peak hours.
     *
     * @param request - UpgradeClusterAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClusterAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/components/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates cluster components to use new features and patch vulnerabilities. You must update cluster components one after one and update a component only after the previous one is successfully updated. Before you update a component, we recommend that you read the update notes for each component. Cluster component updates may affect your businesses. Assess the impact, back up data, and perform the update during off-peak hours.
     *
     * @param request - UpgradeClusterAddonsRequest
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
     * You can call the UpgradeClusterNodepool operation to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *
     * @remarks
     * This operation allows you to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *
     * @param request - UpgradeClusterNodepoolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClusterNodepool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . URL::percentEncode($ClusterId) . '/nodepools/' . URL::percentEncode($NodepoolId) . '/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterNodepoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the UpgradeClusterNodepool operation to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *
     * @remarks
     * This operation allows you to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *
     * @param request - UpgradeClusterNodepoolRequest
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
