<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds existing Elastic Compute Service (ECS) instances to a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request   AttachInstancesRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return AttachInstancesResponse AttachInstancesResponse
     */
    public function attachInstancesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuPolicy)) {
            $body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->formatDisk)) {
            $body['format_disk'] = $request->formatDisk;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->isEdgeWorker)) {
            $body['is_edge_worker'] = $request->isEdgeWorker;
        }
        if (!Utils::isUnset($request->keepInstanceName)) {
            $body['keep_instance_name'] = $request->keepInstanceName;
        }
        if (!Utils::isUnset($request->keyPair)) {
            $body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->nodepoolId)) {
            $body['nodepool_id'] = $request->nodepoolId;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            $body['rds_instances'] = $request->rdsInstances;
        }
        if (!Utils::isUnset($request->runtime)) {
            $body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['user_data'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/attach',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds existing Elastic Compute Service (ECS) instances to a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request   AttachInstancesRequest
     *
     * @return AttachInstancesResponse AttachInstancesResponse
     */
    public function attachInstances($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachInstancesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Adds existing nodes to a specific node pool. You can add existing ECS instances to a specific node pool in a Container Service for Kubernetes (ACK) cluster as worker nodes. You can also add removed worker nodes back to the node pool.
     *  *
     * @param string                           $ClusterId
     * @param string                           $NodepoolId
     * @param AttachInstancesToNodePoolRequest $request    AttachInstancesToNodePoolRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return AttachInstancesToNodePoolResponse AttachInstancesToNodePoolResponse
     */
    public function attachInstancesToNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->formatDisk)) {
            $body['format_disk'] = $request->formatDisk;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->keepInstanceName)) {
            $body['keep_instance_name'] = $request->keepInstanceName;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachInstancesToNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/attach',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AttachInstancesToNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachInstancesToNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds existing nodes to a specific node pool. You can add existing ECS instances to a specific node pool in a Container Service for Kubernetes (ACK) cluster as worker nodes. You can also add removed worker nodes back to the node pool.
     *  *
     * @param string                           $ClusterId
     * @param string                           $NodepoolId
     * @param AttachInstancesToNodePoolRequest $request    AttachInstancesToNodePoolRequest
     *
     * @return AttachInstancesToNodePoolResponse AttachInstancesToNodePoolResponse
     */
    public function attachInstancesToNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachInstancesToNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI CancelClusterUpgrade is deprecated
     *  *
     * @summary You can call the CancelClusterUpgrade operation to cancel the update of a cluster.
     *  *
     * Deprecated
     *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return CancelClusterUpgradeResponse CancelClusterUpgradeResponse
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
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelClusterUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI CancelClusterUpgrade is deprecated
     *  *
     * @summary You can call the CancelClusterUpgrade operation to cancel the update of a cluster.
     *  *
     * Deprecated
     *
     * @param string $ClusterId
     *
     * @return CancelClusterUpgradeResponse CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgrade($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelClusterUpgradeWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI CancelComponentUpgrade is deprecated
     *  *
     * @summary You can call the CancelComponentUpgrade operation to cancel the update of a component.
     *  *
     * Deprecated
     *
     * @param string         $clusterId
     * @param string         $componentId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return CancelComponentUpgradeResponse CancelComponentUpgradeResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($componentId) . '/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelComponentUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI CancelComponentUpgrade is deprecated
     *  *
     * @summary You can call the CancelComponentUpgrade operation to cancel the update of a component.
     *  *
     * Deprecated
     *
     * @param string $clusterId
     * @param string $componentId
     *
     * @return CancelComponentUpgradeResponse CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgrade($clusterId, $componentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelComponentUpgradeWithOptions($clusterId, $componentId, $headers, $runtime);
    }

    /**
     * @summary You can call the CancelOperationPlan operation to cancel a pending auto O\\\\\\\\\\\\&M plan.
     *  *
     * @param string         $planId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelOperationPlanResponse CancelOperationPlanResponse
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
            'pathname' => '/operation/plans/' . OpenApiUtilClient::getEncodeParam($planId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelOperationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelOperationPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the CancelOperationPlan operation to cancel a pending auto O\\\\\\\\\\\\&M plan.
     *  *
     * @param string $planId
     *
     * @return CancelOperationPlanResponse CancelOperationPlanResponse
     */
    public function cancelOperationPlan($planId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelOperationPlanWithOptions($planId, $headers, $runtime);
    }

    /**
     * @summary Cancels the execution of a cluster task.
     *  *
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelTaskResponse CancelTaskResponse
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
            'pathname' => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels the execution of a cluster task.
     *  *
     * @param string $taskId
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @summary Queries the current log configuration of control plane components, including the log retention period and the log collection component. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return CheckControlPlaneLogEnableResponse CheckControlPlaneLogEnableResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/controlplanelog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckControlPlaneLogEnableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckControlPlaneLogEnableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the current log configuration of control plane components, including the log retention period and the log collection component. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube API Server, Kube Scheduler, Kube Controller Manager, and Cloud Controller Manager.
     *  *
     * @param string $ClusterId
     *
     * @return CheckControlPlaneLogEnableResponse CheckControlPlaneLogEnableResponse
     */
    public function checkControlPlaneLogEnable($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkControlPlaneLogEnableWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary Checks whether the specified service roles are granted to Container Service for Kubernetes (ACK) within the current Alibaba Cloud account. ACK can access other cloud services, such as Elastic Compute Service (ECS), Object Storage Service (OSS), File Storage NAS (NAS), and Server Load Balancer (SLB), only after ACK is assigned the required service roles.
     *  *
     * @param CheckServiceRoleRequest $request CheckServiceRoleRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceRoleResponse CheckServiceRoleResponse
     */
    public function checkServiceRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roles)) {
            $body['roles'] = $request->roles;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckServiceRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckServiceRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the specified service roles are granted to Container Service for Kubernetes (ACK) within the current Alibaba Cloud account. ACK can access other cloud services, such as Elastic Compute Service (ECS), Object Storage Service (OSS), File Storage NAS (NAS), and Server Load Balancer (SLB), only after ACK is assigned the required service roles.
     *  *
     * @param CheckServiceRoleRequest $request CheckServiceRoleRequest
     *
     * @return CheckServiceRoleResponse CheckServiceRoleResponse
     */
    public function checkServiceRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkServiceRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes kubeconfig files that may pose potential risks from a user and revokes Role-Based Access Control (RBAC) permissions on a cluster.
     *  *
     * @description >
     * *   To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * *   You cannot revoke the permissions of an Alibaba Cloud account.
     * *   You cannot revoke the permissions of the account that you use to call this operation.
     *  *
     * @param string                             $ClusterId
     * @param string                             $Uid
     * @param CleanClusterUserPermissionsRequest $request   CleanClusterUserPermissionsRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return CleanClusterUserPermissionsResponse CleanClusterUserPermissionsResponse
     */
    public function cleanClusterUserPermissionsWithOptions($ClusterId, $Uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CleanClusterUserPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/cluster/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user/' . OpenApiUtilClient::getEncodeParam($Uid) . '/permissions',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CleanClusterUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CleanClusterUserPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes kubeconfig files that may pose potential risks from a user and revokes Role-Based Access Control (RBAC) permissions on a cluster.
     *  *
     * @description >
     * *   To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * *   You cannot revoke the permissions of an Alibaba Cloud account.
     * *   You cannot revoke the permissions of the account that you use to call this operation.
     *  *
     * @param string                             $ClusterId
     * @param string                             $Uid
     * @param CleanClusterUserPermissionsRequest $request   CleanClusterUserPermissionsRequest
     *
     * @return CleanClusterUserPermissionsResponse CleanClusterUserPermissionsResponse
     */
    public function cleanClusterUserPermissions($ClusterId, $Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cleanClusterUserPermissionsWithOptions($ClusterId, $Uid, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the CleanUserPermissions operation to delete the kubeconfig files of the specified users and revoke the relevant Role-Based Access Control (RBAC) permissions. This API operation is suitable for scenarios where employees have resigned or the accounts of employees are locked.
     *  *
     * @description > - To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * > - You cannot revoke the permissions of an Alibaba Cloud account.
     * > - You cannot revoke the permissions of the account that you use to call this operation.
     *  *
     * @param string                      $Uid
     * @param CleanUserPermissionsRequest $tmpReq  CleanUserPermissionsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CleanUserPermissionsResponse CleanUserPermissionsResponse
     */
    public function cleanUserPermissionsWithOptions($Uid, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CleanUserPermissionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clusterIds)) {
            $request->clusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterIds, 'ClusterIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterIdsShrink)) {
            $query['ClusterIds'] = $request->clusterIdsShrink;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CleanUserPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/users/' . OpenApiUtilClient::getEncodeParam($Uid) . '/permissions',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CleanUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CleanUserPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the CleanUserPermissions operation to delete the kubeconfig files of the specified users and revoke the relevant Role-Based Access Control (RBAC) permissions. This API operation is suitable for scenarios where employees have resigned or the accounts of employees are locked.
     *  *
     * @description > - To call this operation, make sure that you have the AliyunCSFullAccess permission.
     * > - You cannot revoke the permissions of an Alibaba Cloud account.
     * > - You cannot revoke the permissions of the account that you use to call this operation.
     *  *
     * @param string                      $Uid
     * @param CleanUserPermissionsRequest $request CleanUserPermissionsRequest
     *
     * @return CleanUserPermissionsResponse CleanUserPermissionsResponse
     */
    public function cleanUserPermissions($Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cleanUserPermissionsWithOptions($Uid, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a scaling configuration to allow the system to scale resources based on the given scaling rules. When you create a scaling configuration, you can specify the scaling metrics, thresholds, scaling order, and scaling interval.
     *  *
     * @param string                         $ClusterId
     * @param CreateAutoscalingConfigRequest $request   CreateAutoscalingConfigRequest
     * @param string[]                       $headers   map
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateAutoscalingConfigResponse CreateAutoscalingConfigResponse
     */
    public function createAutoscalingConfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coolDownDuration)) {
            $body['cool_down_duration'] = $request->coolDownDuration;
        }
        if (!Utils::isUnset($request->daemonsetEvictionForNodes)) {
            $body['daemonset_eviction_for_nodes'] = $request->daemonsetEvictionForNodes;
        }
        if (!Utils::isUnset($request->expander)) {
            $body['expander'] = $request->expander;
        }
        if (!Utils::isUnset($request->gpuUtilizationThreshold)) {
            $body['gpu_utilization_threshold'] = $request->gpuUtilizationThreshold;
        }
        if (!Utils::isUnset($request->maxGracefulTerminationSec)) {
            $body['max_graceful_termination_sec'] = $request->maxGracefulTerminationSec;
        }
        if (!Utils::isUnset($request->minReplicaCount)) {
            $body['min_replica_count'] = $request->minReplicaCount;
        }
        if (!Utils::isUnset($request->priorities)) {
            $body['priorities'] = $request->priorities;
        }
        if (!Utils::isUnset($request->recycleNodeDeletionEnabled)) {
            $body['recycle_node_deletion_enabled'] = $request->recycleNodeDeletionEnabled;
        }
        if (!Utils::isUnset($request->scaleDownEnabled)) {
            $body['scale_down_enabled'] = $request->scaleDownEnabled;
        }
        if (!Utils::isUnset($request->scaleUpFromZero)) {
            $body['scale_up_from_zero'] = $request->scaleUpFromZero;
        }
        if (!Utils::isUnset($request->scalerType)) {
            $body['scaler_type'] = $request->scalerType;
        }
        if (!Utils::isUnset($request->scanInterval)) {
            $body['scan_interval'] = $request->scanInterval;
        }
        if (!Utils::isUnset($request->skipNodesWithLocalStorage)) {
            $body['skip_nodes_with_local_storage'] = $request->skipNodesWithLocalStorage;
        }
        if (!Utils::isUnset($request->skipNodesWithSystemPods)) {
            $body['skip_nodes_with_system_pods'] = $request->skipNodesWithSystemPods;
        }
        if (!Utils::isUnset($request->unneededDuration)) {
            $body['unneeded_duration'] = $request->unneededDuration;
        }
        if (!Utils::isUnset($request->utilizationThreshold)) {
            $body['utilization_threshold'] = $request->utilizationThreshold;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAutoscalingConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/cluster/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/autoscale/config/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAutoscalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAutoscalingConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a scaling configuration to allow the system to scale resources based on the given scaling rules. When you create a scaling configuration, you can specify the scaling metrics, thresholds, scaling order, and scaling interval.
     *  *
     * @param string                         $ClusterId
     * @param CreateAutoscalingConfigRequest $request   CreateAutoscalingConfigRequest
     *
     * @return CreateAutoscalingConfigResponse CreateAutoscalingConfigResponse
     */
    public function createAutoscalingConfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAutoscalingConfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a Container Service for Kubernetes (ACK) cluster. For example, you can create an ACK managed cluster, ACK Serverless cluster, ACK Edge cluster, or registered cluster. When you create an ACK cluster, you need to configure the cluster information, components, and cloud resources used by ACK.
     *  *
     * @description ### [](#-openapi-)Generate API request parameters in the ACK console
     * When you fail to create an ACK cluster by calling the CreateCluster operation due to invalid parameter settings, you can generate valid API request parameters in the ACK console. Procedure:
     * 1.  Log on to the [ACK console](javascript:void\\(0\\)). In the left-side navigation pane, click **Clusters**.
     * 2.  On the **Cluster** page, click **Cluster Templates**.
     * 3.  In the Select Cluster Template dialog box, select the type of cluster that you want to create and click Create. Then, configure the cluster setting parameters.
     * 4.  After you configure the cluster parameters, click **Generate API Request Parameters** in the **Confirm Order** step.
     *     The API request parameters are displayed in the API Request Parameters dialog box.
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessControlList)) {
            $body['access_control_list'] = $request->accessControlList;
        }
        if (!Utils::isUnset($request->addons)) {
            $body['addons'] = $request->addons;
        }
        if (!Utils::isUnset($request->apiAudiences)) {
            $body['api_audiences'] = $request->apiAudiences;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['auto_renew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $body['auto_renew_period'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['charge_type'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->cisEnabled)) {
            $body['cis_enabled'] = $request->cisEnabled;
        }
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            $body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->clusterDomain)) {
            $body['cluster_domain'] = $request->clusterDomain;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $body['cluster_spec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $body['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->containerCidr)) {
            $body['container_cidr'] = $request->containerCidr;
        }
        if (!Utils::isUnset($request->controlPlaneConfig)) {
            $body['control_plane_config'] = $request->controlPlaneConfig;
        }
        if (!Utils::isUnset($request->controlplaneLogComponents)) {
            $body['controlplane_log_components'] = $request->controlplaneLogComponents;
        }
        if (!Utils::isUnset($request->controlplaneLogProject)) {
            $body['controlplane_log_project'] = $request->controlplaneLogProject;
        }
        if (!Utils::isUnset($request->controlplaneLogTtl)) {
            $body['controlplane_log_ttl'] = $request->controlplaneLogTtl;
        }
        if (!Utils::isUnset($request->cpuPolicy)) {
            $body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->customSan)) {
            $body['custom_san'] = $request->customSan;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $body['deletion_protection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $body['disable_rollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->enableRrsa)) {
            $body['enable_rrsa'] = $request->enableRrsa;
        }
        if (!Utils::isUnset($request->encryptionProviderKey)) {
            $body['encryption_provider_key'] = $request->encryptionProviderKey;
        }
        if (!Utils::isUnset($request->endpointPublicAccess)) {
            $body['endpoint_public_access'] = $request->endpointPublicAccess;
        }
        if (!Utils::isUnset($request->formatDisk)) {
            $body['format_disk'] = $request->formatDisk;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageType)) {
            $body['image_type'] = $request->imageType;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->ipStack)) {
            $body['ip_stack'] = $request->ipStack;
        }
        if (!Utils::isUnset($request->isEnterpriseSecurityGroup)) {
            $body['is_enterprise_security_group'] = $request->isEnterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->keepInstanceName)) {
            $body['keep_instance_name'] = $request->keepInstanceName;
        }
        if (!Utils::isUnset($request->keyPair)) {
            $body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->kubernetesVersion)) {
            $body['kubernetes_version'] = $request->kubernetesVersion;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['load_balancer_id'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $body['load_balancer_spec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->loggingType)) {
            $body['logging_type'] = $request->loggingType;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['login_password'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->maintenanceWindow)) {
            $body['maintenance_window'] = $request->maintenanceWindow;
        }
        if (!Utils::isUnset($request->masterAutoRenew)) {
            $body['master_auto_renew'] = $request->masterAutoRenew;
        }
        if (!Utils::isUnset($request->masterAutoRenewPeriod)) {
            $body['master_auto_renew_period'] = $request->masterAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->masterCount)) {
            $body['master_count'] = $request->masterCount;
        }
        if (!Utils::isUnset($request->masterInstanceChargeType)) {
            $body['master_instance_charge_type'] = $request->masterInstanceChargeType;
        }
        if (!Utils::isUnset($request->masterInstanceTypes)) {
            $body['master_instance_types'] = $request->masterInstanceTypes;
        }
        if (!Utils::isUnset($request->masterPeriod)) {
            $body['master_period'] = $request->masterPeriod;
        }
        if (!Utils::isUnset($request->masterPeriodUnit)) {
            $body['master_period_unit'] = $request->masterPeriodUnit;
        }
        if (!Utils::isUnset($request->masterSystemDiskCategory)) {
            $body['master_system_disk_category'] = $request->masterSystemDiskCategory;
        }
        if (!Utils::isUnset($request->masterSystemDiskPerformanceLevel)) {
            $body['master_system_disk_performance_level'] = $request->masterSystemDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->masterSystemDiskSize)) {
            $body['master_system_disk_size'] = $request->masterSystemDiskSize;
        }
        if (!Utils::isUnset($request->masterSystemDiskSnapshotPolicyId)) {
            $body['master_system_disk_snapshot_policy_id'] = $request->masterSystemDiskSnapshotPolicyId;
        }
        if (!Utils::isUnset($request->masterVswitchIds)) {
            $body['master_vswitch_ids'] = $request->masterVswitchIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->natGateway)) {
            $body['nat_gateway'] = $request->natGateway;
        }
        if (!Utils::isUnset($request->nodeCidrMask)) {
            $body['node_cidr_mask'] = $request->nodeCidrMask;
        }
        if (!Utils::isUnset($request->nodeNameMode)) {
            $body['node_name_mode'] = $request->nodeNameMode;
        }
        if (!Utils::isUnset($request->nodePortRange)) {
            $body['node_port_range'] = $request->nodePortRange;
        }
        if (!Utils::isUnset($request->nodepools)) {
            $body['nodepools'] = $request->nodepools;
        }
        if (!Utils::isUnset($request->numOfNodes)) {
            $body['num_of_nodes'] = $request->numOfNodes;
        }
        if (!Utils::isUnset($request->operationPolicy)) {
            $body['operation_policy'] = $request->operationPolicy;
        }
        if (!Utils::isUnset($request->osType)) {
            $body['os_type'] = $request->osType;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['period_unit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->podVswitchIds)) {
            $body['pod_vswitch_ids'] = $request->podVswitchIds;
        }
        if (!Utils::isUnset($request->profile)) {
            $body['profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->proxyMode)) {
            $body['proxy_mode'] = $request->proxyMode;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            $body['rds_instances'] = $request->rdsInstances;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['region_id'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resource_group_id'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->runtime)) {
            $body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['security_group_id'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityHardeningOs)) {
            $body['security_hardening_os'] = $request->securityHardeningOs;
        }
        if (!Utils::isUnset($request->serviceAccountIssuer)) {
            $body['service_account_issuer'] = $request->serviceAccountIssuer;
        }
        if (!Utils::isUnset($request->serviceCidr)) {
            $body['service_cidr'] = $request->serviceCidr;
        }
        if (!Utils::isUnset($request->serviceDiscoveryTypes)) {
            $body['service_discovery_types'] = $request->serviceDiscoveryTypes;
        }
        if (!Utils::isUnset($request->snatEntry)) {
            $body['snat_entry'] = $request->snatEntry;
        }
        if (!Utils::isUnset($request->socEnabled)) {
            $body['soc_enabled'] = $request->socEnabled;
        }
        if (!Utils::isUnset($request->sshFlags)) {
            $body['ssh_flags'] = $request->sshFlags;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->taints)) {
            $body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->timeoutMins)) {
            $body['timeout_mins'] = $request->timeoutMins;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->userCa)) {
            $body['user_ca'] = $request->userCa;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['user_data'] = $request->userData;
        }
        if (!Utils::isUnset($request->vpcid)) {
            $body['vpcid'] = $request->vpcid;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            $body['vswitch_ids'] = $request->vswitchIds;
        }
        if (!Utils::isUnset($request->workerAutoRenew)) {
            $body['worker_auto_renew'] = $request->workerAutoRenew;
        }
        if (!Utils::isUnset($request->workerAutoRenewPeriod)) {
            $body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->workerDataDisks)) {
            $body['worker_data_disks'] = $request->workerDataDisks;
        }
        if (!Utils::isUnset($request->workerInstanceChargeType)) {
            $body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }
        if (!Utils::isUnset($request->workerInstanceTypes)) {
            $body['worker_instance_types'] = $request->workerInstanceTypes;
        }
        if (!Utils::isUnset($request->workerPeriod)) {
            $body['worker_period'] = $request->workerPeriod;
        }
        if (!Utils::isUnset($request->workerPeriodUnit)) {
            $body['worker_period_unit'] = $request->workerPeriodUnit;
        }
        if (!Utils::isUnset($request->workerSystemDiskCategory)) {
            $body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }
        if (!Utils::isUnset($request->workerSystemDiskPerformanceLevel)) {
            $body['worker_system_disk_performance_level'] = $request->workerSystemDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->workerSystemDiskSize)) {
            $body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }
        if (!Utils::isUnset($request->workerSystemDiskSnapshotPolicyId)) {
            $body['worker_system_disk_snapshot_policy_id'] = $request->workerSystemDiskSnapshotPolicyId;
        }
        if (!Utils::isUnset($request->workerVswitchIds)) {
            $body['worker_vswitch_ids'] = $request->workerVswitchIds;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['zone_id'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIds)) {
            $body['zone_ids'] = $request->zoneIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a Container Service for Kubernetes (ACK) cluster. For example, you can create an ACK managed cluster, ACK Serverless cluster, ACK Edge cluster, or registered cluster. When you create an ACK cluster, you need to configure the cluster information, components, and cloud resources used by ACK.
     *  *
     * @description ### [](#-openapi-)Generate API request parameters in the ACK console
     * When you fail to create an ACK cluster by calling the CreateCluster operation due to invalid parameter settings, you can generate valid API request parameters in the ACK console. Procedure:
     * 1.  Log on to the [ACK console](javascript:void\\(0\\)). In the left-side navigation pane, click **Clusters**.
     * 2.  On the **Cluster** page, click **Cluster Templates**.
     * 3.  In the Select Cluster Template dialog box, select the type of cluster that you want to create and click Create. Then, configure the cluster setting parameters.
     * 4.  After you configure the cluster parameters, click **Generate API Request Parameters** in the **Confirm Order** step.
     *     The API request parameters are displayed in the API Request Parameters dialog box.
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Starts a cluster diagnostic.
     *  *
     * @param string                        $clusterId
     * @param CreateClusterDiagnosisRequest $request   CreateClusterDiagnosisRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateClusterDiagnosisResponse CreateClusterDiagnosisResponse
     */
    public function createClusterDiagnosisWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->target)) {
            $body['target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClusterDiagnosis',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/diagnosis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClusterDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterDiagnosisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Starts a cluster diagnostic.
     *  *
     * @param string                        $clusterId
     * @param CreateClusterDiagnosisRequest $request   CreateClusterDiagnosisRequest
     *
     * @return CreateClusterDiagnosisResponse CreateClusterDiagnosisResponse
     */
    public function createClusterDiagnosis($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterDiagnosisWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a node pool for a Container Service for Kubernetes (ACK) cluster. You can use node pools to facilitate node management. For example, you can schedule, configure, or maintain nodes by node pool, and enable auto scaling for a node pool. We recommend that you use a managed node pool, which can help automate specific O\\\\\\&M tasks for nodes, such as Common Vulnerabilities and Exposures (CVE) patching and node repair. This reduces your O\\\\\\&M workload.
     *  *
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request   CreateClusterNodePoolRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateClusterNodePoolResponse CreateClusterNodePoolResponse
     */
    public function createClusterNodePoolWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoScaling)) {
            $body['auto_scaling'] = $request->autoScaling;
        }
        if (!Utils::isUnset($request->count)) {
            $body['count'] = $request->count;
        }
        if (!Utils::isUnset($request->hostNetwork)) {
            $body['host_network'] = $request->hostNetwork;
        }
        if (!Utils::isUnset($request->interconnectConfig)) {
            $body['interconnect_config'] = $request->interconnectConfig;
        }
        if (!Utils::isUnset($request->interconnectMode)) {
            $body['interconnect_mode'] = $request->interconnectMode;
        }
        if (!Utils::isUnset($request->intranet)) {
            $body['intranet'] = $request->intranet;
        }
        if (!Utils::isUnset($request->kubernetesConfig)) {
            $body['kubernetes_config'] = $request->kubernetesConfig;
        }
        if (!Utils::isUnset($request->management)) {
            $body['management'] = $request->management;
        }
        if (!Utils::isUnset($request->maxNodes)) {
            $body['max_nodes'] = $request->maxNodes;
        }
        if (!Utils::isUnset($request->nodeConfig)) {
            $body['node_config'] = $request->nodeConfig;
        }
        if (!Utils::isUnset($request->nodepoolInfo)) {
            $body['nodepool_info'] = $request->nodepoolInfo;
        }
        if (!Utils::isUnset($request->scalingGroup)) {
            $body['scaling_group'] = $request->scalingGroup;
        }
        if (!Utils::isUnset($request->teeConfig)) {
            $body['tee_config'] = $request->teeConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a node pool for a Container Service for Kubernetes (ACK) cluster. You can use node pools to facilitate node management. For example, you can schedule, configure, or maintain nodes by node pool, and enable auto scaling for a node pool. We recommend that you use a managed node pool, which can help automate specific O\\\\\\&M tasks for nodes, such as Common Vulnerabilities and Exposures (CVE) patching and node repair. This reduces your O\\\\\\&M workload.
     *  *
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request   CreateClusterNodePoolRequest
     *
     * @return CreateClusterNodePoolResponse CreateClusterNodePoolResponse
     */
    public function createClusterNodePool($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterNodePoolWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the CreateEdgeMachine operation to activate a cloud-native box.
     *  *
     * @param CreateEdgeMachineRequest $request CreateEdgeMachineRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEdgeMachineResponse CreateEdgeMachineResponse
     */
    public function createEdgeMachineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hostname)) {
            $body['hostname'] = $request->hostname;
        }
        if (!Utils::isUnset($request->model)) {
            $body['model'] = $request->model;
        }
        if (!Utils::isUnset($request->sn)) {
            $body['sn'] = $request->sn;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEdgeMachine',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/edge_machines',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEdgeMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the CreateEdgeMachine operation to activate a cloud-native box.
     *  *
     * @param CreateEdgeMachineRequest $request CreateEdgeMachineRequest
     *
     * @return CreateEdgeMachineResponse CreateEdgeMachineResponse
     */
    public function createEdgeMachine($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEdgeMachineWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI CreateKubernetesTrigger is deprecated
     *  *
     * @summary You can call the CreateKubernetesTrigger operation to create a trigger for an application.
     *  *
     * Deprecated
     *
     * @param CreateKubernetesTriggerRequest $request CreateKubernetesTriggerRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKubernetesTriggerResponse CreateKubernetesTriggerResponse
     */
    public function createKubernetesTriggerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['project_id'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKubernetesTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI CreateKubernetesTrigger is deprecated
     *  *
     * @summary You can call the CreateKubernetesTrigger operation to create a trigger for an application.
     *  *
     * Deprecated
     *
     * @param CreateKubernetesTriggerRequest $request CreateKubernetesTriggerRequest
     *
     * @return CreateKubernetesTriggerResponse CreateKubernetesTriggerResponse
     */
    public function createKubernetesTrigger($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKubernetesTriggerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates an orchestration template. An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can use orchestration templates to manage resources in Kubernetes clusters and automate resource deployment, such as pods, Services, Deployments, ConfigMaps, and persistent volumes (PVs).
     *  *
     * @param CreateTemplateRequest $request CreateTemplateRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an orchestration template. An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can use orchestration templates to manage resources in Kubernetes clusters and automate resource deployment, such as pods, Services, Deployments, ConfigMaps, and persistent volumes (PVs).
     *  *
     * @param CreateTemplateRequest $request CreateTemplateRequest
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a trigger for an application to redeploy the application pods when specific conditions are met.
     *  *
     * @param string               $clusterId
     * @param CreateTriggerRequest $request   CreateTriggerRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateTriggerResponse CreateTriggerResponse
     */
    public function createTriggerWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['project_id'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/triggers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a trigger for an application to redeploy the application pods when specific conditions are met.
     *  *
     * @param string               $clusterId
     * @param CreateTriggerRequest $request   CreateTriggerRequest
     *
     * @return CreateTriggerResponse CreateTriggerResponse
     */
    public function createTrigger($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTriggerWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes one or more ACK alert contacts.
     *  *
     * @param DeleteAlertContactRequest $tmpReq  DeleteAlertContactRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertContactResponse DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAlertContactShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contactIds)) {
            $request->contactIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactIds, 'contact_ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->contactIdsShrink)) {
            $query['contact_ids'] = $request->contactIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more ACK alert contacts.
     *  *
     * @param DeleteAlertContactRequest $request DeleteAlertContactRequest
     *
     * @return DeleteAlertContactResponse DeleteAlertContactResponse
     */
    public function deleteAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertContactWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes an ACK alert contact group.
     *  *
     * @param DeleteAlertContactGroupRequest $tmpReq  DeleteAlertContactGroupRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertContactGroupResponse DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAlertContactGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contactGroupIds)) {
            $request->contactGroupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactGroupIds, 'contact_group_ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->contactGroupIdsShrink)) {
            $query['contact_group_ids'] = $request->contactGroupIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an ACK alert contact group.
     *  *
     * @param DeleteAlertContactGroupRequest $request DeleteAlertContactGroupRequest
     *
     * @return DeleteAlertContactGroupResponse DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertContactGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary You can call the DeleteCluster operation to delete a cluster and specify whether to delete or retain the relevant cluster resources. Before you delete a cluster, you must manually delete workloads in the cluster, such as Deployments, StatefulSets, Jobs, and CronJobs. Otherwise, you may fail to delete the cluster.
     *  *
     * @description Warning:
     * *   Subscription ECS instances and Lingjun nodes in a cluster cannot be automatically released. To avoid unnecessary costs, we recommend that you manually release the resources. For more information, see \\<a href="{0}" target="_blank">Rules for deleting clusters and releasing nodes\\</a>.
     * *   If the SLB instance of the API server uses the subscription billing method, it cannot be automatically released. To avoid unnecessary costs, we recommend that you manually release it.
     * *   By default, virtual private clouds (VPCs), vSwitches, security groups, and RAM roles are retained if they are used by other resources. To avoid unnecessary costs, we recommend that you manually release the resources.
     * *   Elastic container instances created on virtual nodes are automatically released.
     * *   Some resources created together with a cluster are not automatically released when the cluster is deleted. After the cluster is deleted, you are still charged for the resources. Release or retain the resources based on your actual needs. The resources include Simple Log Service projects automatically created by the cluster and dynamically provisioned disks.
     *  *
     * @param string               $ClusterId
     * @param DeleteClusterRequest $tmpReq    DeleteClusterRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($ClusterId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deleteOptions)) {
            $request->deleteOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deleteOptions, 'delete_options', 'json');
        }
        if (!Utils::isUnset($tmpReq->retainResources)) {
            $request->retainResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retainResources, 'retain_resources', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deleteOptionsShrink)) {
            $query['delete_options'] = $request->deleteOptionsShrink;
        }
        if (!Utils::isUnset($request->keepSlb)) {
            $query['keep_slb'] = $request->keepSlb;
        }
        if (!Utils::isUnset($request->retainAllResources)) {
            $query['retain_all_resources'] = $request->retainAllResources;
        }
        if (!Utils::isUnset($request->retainResourcesShrink)) {
            $query['retain_resources'] = $request->retainResourcesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DeleteCluster operation to delete a cluster and specify whether to delete or retain the relevant cluster resources. Before you delete a cluster, you must manually delete workloads in the cluster, such as Deployments, StatefulSets, Jobs, and CronJobs. Otherwise, you may fail to delete the cluster.
     *  *
     * @description Warning:
     * *   Subscription ECS instances and Lingjun nodes in a cluster cannot be automatically released. To avoid unnecessary costs, we recommend that you manually release the resources. For more information, see \\<a href="{0}" target="_blank">Rules for deleting clusters and releasing nodes\\</a>.
     * *   If the SLB instance of the API server uses the subscription billing method, it cannot be automatically released. To avoid unnecessary costs, we recommend that you manually release it.
     * *   By default, virtual private clouds (VPCs), vSwitches, security groups, and RAM roles are retained if they are used by other resources. To avoid unnecessary costs, we recommend that you manually release the resources.
     * *   Elastic container instances created on virtual nodes are automatically released.
     * *   Some resources created together with a cluster are not automatically released when the cluster is deleted. After the cluster is deleted, you are still charged for the resources. Release or retain the resources based on your actual needs. The resources include Simple Log Service projects automatically created by the cluster and dynamically provisioned disks.
     *  *
     * @param string               $ClusterId
     * @param DeleteClusterRequest $request   DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary null
     *  *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param DeleteClusterNodepoolRequest $request    DeleteClusterNodepoolRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterNodepoolResponse DeleteClusterNodepoolResponse
     */
    public function deleteClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClusterNodepool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterNodepoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary null
     *  *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param DeleteClusterNodepoolRequest $request    DeleteClusterNodepoolRequest
     *
     * @return DeleteClusterNodepoolResponse DeleteClusterNodepoolResponse
     */
    public function deleteClusterNodepool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary Removes nodes from a Container Service for Kubernetes (ACK) cluster. When you remove nodes, you can specify whether to release the Elastic Compute Service (ECS) instances and drain the nodes. When you remove nodes, pods on the nodes are migrated. This may adversely affect your businesses. We recommend that you back up data and perform this operation during off-peak hours.
     *  *
     * @description *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   When you remove a node, the system sets the status of the node to Unschedulable.
     *  *
     * @param string                    $ClusterId
     * @param DeleteClusterNodesRequest $request   DeleteClusterNodesRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterNodesResponse DeleteClusterNodesResponse
     */
    public function deleteClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->drainNode)) {
            $body['drain_node'] = $request->drainNode;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->releaseNode)) {
            $body['release_node'] = $request->releaseNode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteClusterNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes nodes from a Container Service for Kubernetes (ACK) cluster. When you remove nodes, you can specify whether to release the Elastic Compute Service (ECS) instances and drain the nodes. When you remove nodes, pods on the nodes are migrated. This may adversely affect your businesses. We recommend that you back up data and perform this operation during off-peak hours.
     *  *
     * @description *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   When you remove a node, the system sets the status of the node to Unschedulable.
     *  *
     * @param string                    $ClusterId
     * @param DeleteClusterNodesRequest $request   DeleteClusterNodesRequest
     *
     * @return DeleteClusterNodesResponse DeleteClusterNodesResponse
     */
    public function deleteClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the DeleteEdgeMachine operation to delete a cloud-native box.
     *  *
     * @param string                   $edgeMachineid
     * @param DeleteEdgeMachineRequest $request       DeleteEdgeMachineRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteEdgeMachineResponse DeleteEdgeMachineResponse
     */
    public function deleteEdgeMachineWithOptions($edgeMachineid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEdgeMachine',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/edge_machines/%5Bedge_machineid%5D',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEdgeMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DeleteEdgeMachine operation to delete a cloud-native box.
     *  *
     * @param string                   $edgeMachineid
     * @param DeleteEdgeMachineRequest $request       DeleteEdgeMachineRequest
     *
     * @return DeleteEdgeMachineResponse DeleteEdgeMachineResponse
     */
    public function deleteEdgeMachine($edgeMachineid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEdgeMachineWithOptions($edgeMachineid, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteKubernetesTrigger is deprecated
     *  *
     * @summary You can call the DeleteKubernetesTrigger operation to delete an application trigger by trigger ID
     *  *
     * Deprecated
     *
     * @param string         $Id
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKubernetesTriggerResponse DeleteKubernetesTriggerResponse
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
            'pathname' => '/triggers/revoke/' . OpenApiUtilClient::getEncodeParam($Id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKubernetesTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteKubernetesTrigger is deprecated
     *  *
     * @summary You can call the DeleteKubernetesTrigger operation to delete an application trigger by trigger ID
     *  *
     * Deprecated
     *
     * @param string $Id
     *
     * @return DeleteKubernetesTriggerResponse DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTrigger($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKubernetesTriggerWithOptions($Id, $headers, $runtime);
    }

    /**
     * @summary Deletes policy instances in a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeletePolicyInstanceRequest $request    DeletePolicyInstanceRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyInstanceResponse DeletePolicyInstanceResponse
     */
    public function deletePolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['instance_name'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePolicyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes policy instances in a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeletePolicyInstanceRequest $request    DeletePolicyInstanceRequest
     *
     * @return DeletePolicyInstanceResponse DeletePolicyInstanceResponse
     */
    public function deletePolicyInstance($clusterId, $policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes the orchestration templates that you no longer need.
     *  *
     * @param string         $TemplateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
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
            'pathname' => '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes the orchestration templates that you no longer need.
     *  *
     * @param string $TemplateId
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($TemplateId, $headers, $runtime);
    }

    /**
     * @summary Deletes an application trigger.
     *  *
     * @param string         $clusterId
     * @param string         $Id
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteTriggerResponse DeleteTriggerResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/triggers/' . OpenApiUtilClient::getEncodeParam($Id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an application trigger.
     *  *
     * @param string $clusterId
     * @param string $Id
     *
     * @return DeleteTriggerResponse DeleteTriggerResponse
     */
    public function deleteTrigger($clusterId, $Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTriggerWithOptions($clusterId, $Id, $headers, $runtime);
    }

    /**
     * @summary Deploys a policy in the specified namespaces of a specific Container Service for Kubernetes (ACK) cluster. You can create and deploy a security policy by specifying the policy type, action of the policy such as alerting or denying, and namespaces to which the policy applies.
     *  *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeployPolicyInstanceRequest $request    DeployPolicyInstanceRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeployPolicyInstanceResponse DeployPolicyInstanceResponse
     */
    public function deployPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->namespaces)) {
            $body['namespaces'] = $request->namespaces;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployPolicyInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeployPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeployPolicyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deploys a policy in the specified namespaces of a specific Container Service for Kubernetes (ACK) cluster. You can create and deploy a security policy by specifying the policy type, action of the policy such as alerting or denying, and namespaces to which the policy applies.
     *  *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param DeployPolicyInstanceRequest $request    DeployPolicyInstanceRequest
     *
     * @return DeployPolicyInstanceResponse DeployPolicyInstanceResponse
     */
    public function deployPolicyInstance($clusterId, $policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a component based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, cluster version, and component name. The information includes whether the component is managed, the component type, supported custom parameter schema, compatible operating system architecture, and earliest supported cluster version.
     *  *
     * @param string               $addonName
     * @param DescribeAddonRequest $request   DescribeAddonRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeAddonResponse DescribeAddonResponse
     */
    public function describeAddonWithOptions($addonName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $query['cluster_spec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->clusterVersion)) {
            $query['cluster_version'] = $request->clusterVersion;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['region_id'] = $request->regionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAddon',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . OpenApiUtilClient::getEncodeParam($addonName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeAddonResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAddonResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a component based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, cluster version, and component name. The information includes whether the component is managed, the component type, supported custom parameter schema, compatible operating system architecture, and earliest supported cluster version.
     *  *
     * @param string               $addonName
     * @param DescribeAddonRequest $request   DescribeAddonRequest
     *
     * @return DescribeAddonResponse DescribeAddonResponse
     */
    public function describeAddon($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAddonWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeAddons is deprecated
     *  *
     * @summary You can call the DescribeAddons operation to query the details about all components that are supported by Container Service for Kubernetes (ACK).
     *  *
     * Deprecated
     *
     * @param DescribeAddonsRequest $request DescribeAddonsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAddonsResponse DescribeAddonsResponse
     */
    public function describeAddonsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterProfile)) {
            $query['cluster_profile'] = $request->clusterProfile;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $query['cluster_spec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->clusterVersion)) {
            $query['cluster_version'] = $request->clusterVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeAddons is deprecated
     *  *
     * @summary You can call the DescribeAddons operation to query the details about all components that are supported by Container Service for Kubernetes (ACK).
     *  *
     * Deprecated
     *
     * @param DescribeAddonsRequest $request DescribeAddonsRequest
     *
     * @return DescribeAddonsResponse DescribeAddonsResponse
     */
    public function describeAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonInstance is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonInstance operation to query the information about a cluster component, including the version, status, and configuration of the component.
     *  *
     * Deprecated
     *
     * @param string         $ClusterID
     * @param string         $AddonName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAddonInstanceResponse DescribeClusterAddonInstanceResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterID) . '/components/' . OpenApiUtilClient::getEncodeParam($AddonName) . '/instance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonInstance is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonInstance operation to query the information about a cluster component, including the version, status, and configuration of the component.
     *  *
     * Deprecated
     *
     * @param string $ClusterID
     * @param string $AddonName
     *
     * @return DescribeClusterAddonInstanceResponse DescribeClusterAddonInstanceResponse
     */
    public function describeClusterAddonInstance($ClusterID, $AddonName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonInstanceWithOptions($ClusterID, $AddonName, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonMetadata is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonMetadata operation to query the metadata of a component version. The metadata includes the component version and available parameters.
     *  *
     * Deprecated
     *
     * @param string                              $clusterId
     * @param string                              $componentId
     * @param DescribeClusterAddonMetadataRequest $request     DescribeClusterAddonMetadataRequest
     * @param string[]                            $headers     map
     * @param RuntimeOptions                      $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAddonMetadataResponse DescribeClusterAddonMetadataResponse
     */
    public function describeClusterAddonMetadataWithOptions($clusterId, $componentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAddonMetadata',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($componentId) . '/metadata',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAddonMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonMetadataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonMetadata is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonMetadata operation to query the metadata of a component version. The metadata includes the component version and available parameters.
     *  *
     * Deprecated
     *
     * @param string                              $clusterId
     * @param string                              $componentId
     * @param DescribeClusterAddonMetadataRequest $request     DescribeClusterAddonMetadataRequest
     *
     * @return DescribeClusterAddonMetadataResponse DescribeClusterAddonMetadataResponse
     */
    public function describeClusterAddonMetadata($clusterId, $componentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonMetadataWithOptions($clusterId, $componentId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonUpgradeStatus is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonUpgradeStatus operation to query the update progress of a cluster component.
     *  *
     * Deprecated
     *
     * @param string         $ClusterId
     * @param string         $ComponentId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAddonUpgradeStatusResponse DescribeClusterAddonUpgradeStatusResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($ComponentId) . '/upgradestatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonUpgradeStatus is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonUpgradeStatus operation to query the update progress of a cluster component.
     *  *
     * Deprecated
     *
     * @param string $ClusterId
     * @param string $ComponentId
     *
     * @return DescribeClusterAddonUpgradeStatusResponse DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatus($ClusterId, $ComponentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonsUpgradeStatus is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonsUpgradeStatus operation to query the update progress of a component by component name.
     *  *
     * Deprecated
     *
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $tmpReq    DescribeClusterAddonsUpgradeStatusRequest
     * @param string[]                                  $headers   map
     * @param RuntimeOptions                            $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeClusterAddonsUpgradeStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->componentIds)) {
            $request->componentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->componentIds, 'componentIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->componentIdsShrink)) {
            $query['componentIds'] = $request->componentIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAddonsUpgradeStatus',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/upgradestatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonsUpgradeStatus is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonsUpgradeStatus operation to query the update progress of a component by component name.
     *  *
     * Deprecated
     *
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $request   DescribeClusterAddonsUpgradeStatusRequest
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatus($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonsVersion is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonsVersion operation to query the details about all components in a cluster by cluster ID.
     *  *
     * Deprecated
     *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAddonsVersionResponse DescribeClusterAddonsVersionResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/version',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAddonsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAddonsVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusterAddonsVersion is deprecated
     *  *
     * @summary You can call the DescribeClusterAddonsVersion operation to query the details about all components in a cluster by cluster ID.
     *  *
     * Deprecated
     *
     * @param string $ClusterId
     *
     * @return DescribeClusterAddonsVersionResponse DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersion($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsVersionWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary Queries the scripts used to add existing nodes to a Container Service for Kubernetes (ACK) cluster. ACK allows you to manually add existing Elastic Compute Service (ECS) instances to an ACK cluster as worker nodes or re-add worker nodes that you remove from the cluster to a node pool.
     *  *
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request   DescribeClusterAttachScriptsRequest
     * @param string[]                            $headers   map
     * @param RuntimeOptions                      $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAttachScriptsResponse DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->arch)) {
            $body['arch'] = $request->arch;
        }
        if (!Utils::isUnset($request->expired)) {
            $body['expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->formatDisk)) {
            $body['format_disk'] = $request->formatDisk;
        }
        if (!Utils::isUnset($request->keepInstanceName)) {
            $body['keep_instance_name'] = $request->keepInstanceName;
        }
        if (!Utils::isUnset($request->nodepoolId)) {
            $body['nodepool_id'] = $request->nodepoolId;
        }
        if (!Utils::isUnset($request->options)) {
            $body['options'] = $request->options;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            $body['rds_instances'] = $request->rdsInstances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAttachScripts',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/attachscript',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAttachScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAttachScriptsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the scripts used to add existing nodes to a Container Service for Kubernetes (ACK) cluster. ACK allows you to manually add existing Elastic Compute Service (ECS) instances to an ACK cluster as worker nodes or re-add worker nodes that you remove from the cluster to a node pool.
     *  *
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request   DescribeClusterAttachScriptsRequest
     *
     * @return DescribeClusterAttachScriptsResponse DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScripts($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the DescribeClusterDetail operation to query the details of a Container Service for Kubernetes (ACK) cluster by cluster ID.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterDetailResponse DescribeClusterDetailResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeClusterDetail operation to query the details of a Container Service for Kubernetes (ACK) cluster by cluster ID.
     *  *
     * @param string $ClusterId
     *
     * @return DescribeClusterDetailResponse DescribeClusterDetailResponse
     */
    public function describeClusterDetail($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterDetailWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary Queries events and event details in a Container Service for Kubernetes (ACK) cluster, including the severity level, status, and start time of each event. Events are generated when clusters created, modified, and updated, node pools are created and scaled out, and components are installed.
     *  *
     * @param string                       $ClusterId
     * @param DescribeClusterEventsRequest $request   DescribeClusterEventsRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterEventsResponse DescribeClusterEventsResponse
     */
    public function describeClusterEventsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['task_id'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterEvents',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries events and event details in a Container Service for Kubernetes (ACK) cluster, including the severity level, status, and start time of each event. Events are generated when clusters created, modified, and updated, node pools are created and scaled out, and components are installed.
     *  *
     * @param string                       $ClusterId
     * @param DescribeClusterEventsRequest $request   DescribeClusterEventsRequest
     *
     * @return DescribeClusterEventsResponse DescribeClusterEventsResponse
     */
    public function describeClusterEvents($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterEventsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the cluster log to help analyze cluster issues and locate the cause.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterLogsResponse DescribeClusterLogsResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the cluster log to help analyze cluster issues and locate the cause.
     *  *
     * @param string $ClusterId
     *
     * @return DescribeClusterLogsResponse DescribeClusterLogsResponse
     */
    public function describeClusterLogs($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterLogsWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary You can call the DescribeClusterNodePoolDetail.html operation to query the details about a node pool in a cluster by node pool ID.
     *  *
     * @param string         $ClusterId
     * @param string         $NodepoolId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterNodePoolDetailResponse DescribeClusterNodePoolDetailResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterNodePoolDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterNodePoolDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeClusterNodePoolDetail.html operation to query the details about a node pool in a cluster by node pool ID.
     *  *
     * @param string $ClusterId
     * @param string $NodepoolId
     *
     * @return DescribeClusterNodePoolDetailResponse DescribeClusterNodePoolDetailResponse
     */
    public function describeClusterNodePoolDetail($ClusterId, $NodepoolId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolDetailWithOptions($ClusterId, $NodepoolId, $headers, $runtime);
    }

    /**
     * @summary Queries the information about all node pools in a cluster.
     *  *
     * @param string                          $ClusterId
     * @param DescribeClusterNodePoolsRequest $request   DescribeClusterNodePoolsRequest
     * @param string[]                        $headers   map
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterNodePoolsResponse DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePoolsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodepoolName)) {
            $query['NodepoolName'] = $request->nodepoolName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterNodePools',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterNodePoolsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterNodePoolsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all node pools in a cluster.
     *  *
     * @param string                          $ClusterId
     * @param DescribeClusterNodePoolsRequest $request   DescribeClusterNodePoolsRequest
     *
     * @return DescribeClusterNodePoolsResponse DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePools($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary null
     *  *
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request   DescribeClusterNodesRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterNodesResponse DescribeClusterNodesResponse
     */
    public function describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['instanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->nodepoolId)) {
            $query['nodepool_id'] = $request->nodepoolId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary null
     *  *
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request   DescribeClusterNodesRequest
     *
     * @return DescribeClusterNodesResponse DescribeClusterNodesResponse
     */
    public function describeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the DescribeClusterResources operation to query all resources in a cluster by cluster ID.
     *  *
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request   DescribeClusterResourcesRequest
     * @param string[]                        $headers   map
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterResourcesResponse DescribeClusterResourcesResponse
     */
    public function describeClusterResourcesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withAddonResources)) {
            $query['with_addon_resources'] = $request->withAddonResources;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterResources',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeClusterResources operation to query all resources in a cluster by cluster ID.
     *  *
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request   DescribeClusterResourcesRequest
     *
     * @return DescribeClusterResourcesResponse DescribeClusterResourcesResponse
     */
    public function describeClusterResources($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterResourcesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries tasks in a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param string                      $clusterId
     * @param DescribeClusterTasksRequest $request   DescribeClusterTasksRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterTasksResponse DescribeClusterTasksResponse
     */
    public function describeClusterTasksWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterTasks',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries tasks in a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param string                      $clusterId
     * @param DescribeClusterTasksRequest $request   DescribeClusterTasksRequest
     *
     * @return DescribeClusterTasksResponse DescribeClusterTasksResponse
     */
    public function describeClusterTasks($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterTasksWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Kubeconfig files store identity and authentication information that is used by clients to access Container Service for Kubernetes (ACK) clusters. To use a kubectl client to manage an ACK cluster, you need to use the corresponding kubeconfig file to connect to the ACK cluster. We recommend that you keep kubeconfig files confidential and revoke kubeconfig files that are not in use. This helps prevent data leaks caused by the disclosure of kubeconfig files.
     *  *
     * @description >  The default validity period of a kubeconfig file is 3 years. 180 days before a kubeconfig file expires, you can renew it in the Container Service for Kubernetes (ACK) console or by calling API operations. After a kubeconfig file is renewed, the kubeconfig file is valid for 3 years. The previous kubeconfig file still remains valid until expiration. We recommend that you renew your kubeconfig file at the earliest opportunity.
     *  *
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request   DescribeClusterUserKubeconfigRequest
     * @param string[]                             $headers   map
     * @param RuntimeOptions                       $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->temporaryDurationMinutes)) {
            $query['TemporaryDurationMinutes'] = $request->temporaryDurationMinutes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterUserKubeconfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterUserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterUserKubeconfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Kubeconfig files store identity and authentication information that is used by clients to access Container Service for Kubernetes (ACK) clusters. To use a kubectl client to manage an ACK cluster, you need to use the corresponding kubeconfig file to connect to the ACK cluster. We recommend that you keep kubeconfig files confidential and revoke kubeconfig files that are not in use. This helps prevent data leaks caused by the disclosure of kubeconfig files.
     *  *
     * @description >  The default validity period of a kubeconfig file is 3 years. 180 days before a kubeconfig file expires, you can renew it in the Container Service for Kubernetes (ACK) console or by calling API operations. After a kubeconfig file is renewed, the kubeconfig file is valid for 3 years. The previous kubeconfig file still remains valid until expiration. We recommend that you renew your kubeconfig file at the earliest opportunity.
     *  *
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request   DescribeClusterUserKubeconfigRequest
     *
     * @return DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusterV2UserKubeconfig is deprecated
     *  *
     * @summary 获取集群kubeconfig接口
     *  *
     * Deprecated
     *
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request   DescribeClusterV2UserKubeconfigRequest
     * @param string[]                               $headers   map
     * @param RuntimeOptions                         $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->temporaryDurationMinutes)) {
            $query['TemporaryDurationMinutes'] = $request->temporaryDurationMinutes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterV2UserKubeconfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterV2UserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusterV2UserKubeconfig is deprecated
     *  *
     * @summary 获取集群kubeconfig接口
     *  *
     * Deprecated
     *
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request   DescribeClusterV2UserKubeconfigRequest
     *
     * @return DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the security vulnerability details of a cluster by cluster ID. The details include vulnerability name, vulnerability type, and vulnerability severity. We recommend that you scan your cluster on a regular basis to ensure cluster security.
     *  *
     * @param string         $clusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterVulsResponse DescribeClusterVulsResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/vuls',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the security vulnerability details of a cluster by cluster ID. The details include vulnerability name, vulnerability type, and vulnerability severity. We recommend that you scan your cluster on a regular basis to ensure cluster security.
     *  *
     * @param string $clusterId
     *
     * @return DescribeClusterVulsResponse DescribeClusterVulsResponse
     */
    public function describeClusterVuls($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterVulsWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeClusters is deprecated
     *  *
     * @summary Queries all the clusters that belong to the current Alibaba Cloud account, including Kubernetes clusters and Swarm clusters.
     *  *
     * Deprecated
     *
     * @param DescribeClustersRequest $request DescribeClustersRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClustersResponse DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['clusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resource_group_id'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeClusters is deprecated
     *  *
     * @summary Queries all the clusters that belong to the current Alibaba Cloud account, including Kubernetes clusters and Swarm clusters.
     *  *
     * Deprecated
     *
     * @param DescribeClustersRequest $request DescribeClustersRequest
     *
     * @return DescribeClustersResponse DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries all clusters in a specified region.
     *  *
     * @param string                           $regionId
     * @param DescribeClustersForRegionRequest $request  DescribeClustersForRegionRequest
     * @param string[]                         $headers  map
     * @param RuntimeOptions                   $runtime  runtime options for this request RuntimeOptions
     *
     * @return DescribeClustersForRegionResponse DescribeClustersForRegionResponse
     */
    public function describeClustersForRegionWithOptions($regionId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $query['cluster_spec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['profile'] = $request->profile;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClustersForRegion',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/regions/' . OpenApiUtilClient::getEncodeParam($regionId) . '/clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClustersForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClustersForRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all clusters in a specified region.
     *  *
     * @param string                           $regionId
     * @param DescribeClustersForRegionRequest $request  DescribeClustersForRegionRequest
     *
     * @return DescribeClustersForRegionResponse DescribeClustersForRegionResponse
     */
    public function describeClustersForRegion($regionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersForRegionWithOptions($regionId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details about Container Service for Kubernetes (ACK) clusters of specified types or specifications within an account.
     *  *
     * @param DescribeClustersV1Request $request DescribeClustersV1Request
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClustersV1Response DescribeClustersV1Response
     */
    public function describeClustersV1WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $query['cluster_spec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['region_id'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClustersV1Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClustersV1Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about Container Service for Kubernetes (ACK) clusters of specified types or specifications within an account.
     *  *
     * @param DescribeClustersV1Request $request DescribeClustersV1Request
     *
     * @return DescribeClustersV1Response DescribeClustersV1Response
     */
    public function describeClustersV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersV1WithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeEdgeMachineActiveProcess is deprecated
     *  *
     * @summary You can call the DescribeEdgeMachineActiveProcess operation to query the activation progress of a cloud-native box.
     *  *
     * Deprecated
     *
     * @param string         $edgeMachineid
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeEdgeMachineActiveProcessResponse DescribeEdgeMachineActiveProcessResponse
     */
    public function describeEdgeMachineActiveProcessWithOptions($edgeMachineid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeMachineActiveProcess',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/edge_machines/%5Bedge_machineid%5D/activeprocess',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEdgeMachineActiveProcessResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachineActiveProcessResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeEdgeMachineActiveProcess is deprecated
     *  *
     * @summary You can call the DescribeEdgeMachineActiveProcess operation to query the activation progress of a cloud-native box.
     *  *
     * Deprecated
     *
     * @param string $edgeMachineid
     *
     * @return DescribeEdgeMachineActiveProcessResponse DescribeEdgeMachineActiveProcessResponse
     */
    public function describeEdgeMachineActiveProcess($edgeMachineid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineActiveProcessWithOptions($edgeMachineid, $headers, $runtime);
    }

    /**
     * @summary You can call the DescribeEdgeMachineModels operation to query the cloud-native box models.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEdgeMachineModelsResponse DescribeEdgeMachineModelsResponse
     */
    public function describeEdgeMachineModelsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeMachineModels',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/edge_machines/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEdgeMachineModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachineModelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeEdgeMachineModels operation to query the cloud-native box models.
     *  *
     * @return DescribeEdgeMachineModelsResponse DescribeEdgeMachineModelsResponse
     */
    public function describeEdgeMachineModels()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineModelsWithOptions($headers, $runtime);
    }

    /**
     * @summary You can call the DescribeEdgeMachineTunnelConfigDetail operation to obtain the SSH token of a cloud-native box.
     *  *
     * @param string         $edgeMachineid
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeEdgeMachineTunnelConfigDetailResponse DescribeEdgeMachineTunnelConfigDetailResponse
     */
    public function describeEdgeMachineTunnelConfigDetailWithOptions($edgeMachineid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeMachineTunnelConfigDetail',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/edge_machines/%5Bedge_machineid%5D/tunnelconfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEdgeMachineTunnelConfigDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachineTunnelConfigDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeEdgeMachineTunnelConfigDetail operation to obtain the SSH token of a cloud-native box.
     *  *
     * @param string $edgeMachineid
     *
     * @return DescribeEdgeMachineTunnelConfigDetailResponse DescribeEdgeMachineTunnelConfigDetailResponse
     */
    public function describeEdgeMachineTunnelConfigDetail($edgeMachineid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineTunnelConfigDetailWithOptions($edgeMachineid, $headers, $runtime);
    }

    /**
     * @summary You can call the DescribeEdgeMachines operation to query a list of cloud-native boxes.
     *  *
     * @param DescribeEdgeMachinesRequest $request DescribeEdgeMachinesRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEdgeMachinesResponse DescribeEdgeMachinesResponse
     */
    public function describeEdgeMachinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostname)) {
            $query['hostname'] = $request->hostname;
        }
        if (!Utils::isUnset($request->lifeState)) {
            $query['life_state'] = $request->lifeState;
        }
        if (!Utils::isUnset($request->model)) {
            $query['model'] = $request->model;
        }
        if (!Utils::isUnset($request->onlineState)) {
            $query['online_state'] = $request->onlineState;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeMachines',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/edge_machines',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEdgeMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeMachinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeEdgeMachines operation to query a list of cloud-native boxes.
     *  *
     * @param DescribeEdgeMachinesRequest $request DescribeEdgeMachinesRequest
     *
     * @return DescribeEdgeMachinesResponse DescribeEdgeMachinesResponse
     */
    public function describeEdgeMachines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the detailed information about a type of events, including the severity level, status, and time. Events are generated when clusters are created, modified, and updated, node pools are created and scaled out, and components are installed.
     *  *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a type of events, including the severity level, status, and time. Events are generated when clusters are created, modified, and updated, node pools are created and scaled out, and components are installed.
     *  *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries all events in a specified region.
     *  *
     * @param string                         $regionId
     * @param DescribeEventsForRegionRequest $request  DescribeEventsForRegionRequest
     * @param string[]                       $headers  map
     * @param RuntimeOptions                 $runtime  runtime options for this request RuntimeOptions
     *
     * @return DescribeEventsForRegionResponse DescribeEventsForRegionResponse
     */
    public function describeEventsForRegionWithOptions($regionId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventsForRegion',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/regions/' . OpenApiUtilClient::getEncodeParam($regionId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEventsForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventsForRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all events in a specified region.
     *  *
     * @param string                         $regionId
     * @param DescribeEventsForRegionRequest $request  DescribeEventsForRegionRequest
     *
     * @return DescribeEventsForRegionResponse DescribeEventsForRegionResponse
     */
    public function describeEventsForRegion($regionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEventsForRegionWithOptions($regionId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeExternalAgent is deprecated
     *  *
     * @summary Queries the proxy configurations of a registered cluster by cluster ID.
     *  *
     * @description For more information, see [Register an external Kubernetes cluster](https://help.aliyun.com/document_detail/121053.html).
     *  *
     * Deprecated
     *
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request   DescribeExternalAgentRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeExternalAgentResponse DescribeExternalAgentResponse
     */
    public function describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentMode)) {
            $query['AgentMode'] = $request->agentMode;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExternalAgent',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/external/agent/deployment',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeExternalAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeExternalAgent is deprecated
     *  *
     * @summary Queries the proxy configurations of a registered cluster by cluster ID.
     *  *
     * @description For more information, see [Register an external Kubernetes cluster](https://help.aliyun.com/document_detail/121053.html).
     *  *
     * Deprecated
     *
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request   DescribeExternalAgentRequest
     *
     * @return DescribeExternalAgentResponse DescribeExternalAgentResponse
     */
    public function describeExternalAgent($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the detailed information about Kubernetes versions, including the version number, release date, expiration date, compatible OSs, and runtime.
     *  *
     * @param DescribeKubernetesVersionMetadataRequest $request DescribeKubernetesVersionMetadataRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKubernetesVersionMetadataResponse DescribeKubernetesVersionMetadataResponse
     */
    public function describeKubernetesVersionMetadataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->kubernetesVersion)) {
            $query['KubernetesVersion'] = $request->kubernetesVersion;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->queryUpgradableVersion)) {
            $query['QueryUpgradableVersion'] = $request->queryUpgradableVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->runtime)) {
            $query['runtime'] = $request->runtime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeKubernetesVersionMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeKubernetesVersionMetadataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about Kubernetes versions, including the version number, release date, expiration date, compatible OSs, and runtime.
     *  *
     * @param DescribeKubernetesVersionMetadataRequest $request DescribeKubernetesVersionMetadataRequest
     *
     * @return DescribeKubernetesVersionMetadataResponse DescribeKubernetesVersionMetadataResponse
     */
    public function describeKubernetesVersionMetadata($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeKubernetesVersionMetadataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the vulnerability information of a node pool, such as vulnerability names and severity levels, by specifying the ID of the node pool. We recommend that you periodically scan node pools for vulnerabilities to enhance cluster security.
     *  *
     * @param string                      $clusterId
     * @param string                      $nodepoolId
     * @param DescribeNodePoolVulsRequest $request    DescribeNodePoolVulsRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeNodePoolVulsResponse DescribeNodePoolVulsResponse
     */
    public function describeNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->necessity)) {
            $query['necessity'] = $request->necessity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNodePoolVuls',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($nodepoolId) . '/vuls',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNodePoolVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the vulnerability information of a node pool, such as vulnerability names and severity levels, by specifying the ID of the node pool. We recommend that you periodically scan node pools for vulnerabilities to enhance cluster security.
     *  *
     * @param string                      $clusterId
     * @param string                      $nodepoolId
     * @param DescribeNodePoolVulsRequest $request    DescribeNodePoolVulsRequest
     *
     * @return DescribeNodePoolVulsResponse DescribeNodePoolVulsResponse
     */
    public function describeNodePoolVuls($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of security policies. Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePoliciesResponse DescribePoliciesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of security policies. Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment.
     *  *
     * @return DescribePoliciesResponse DescribePoliciesResponse
     */
    public function describePolicies()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePoliciesWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries the detailed information about a policy. The information includes the content, action, and severity level of the policy. Container Service for Kubernetes (ACK) provides the following types of predefined security policies: Compliance, Infra, K8s-general, and pod security policy (PSP). These policies ensure that containers are running in the production environment in a secure manner.
     *  *
     * @param string         $policyName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyDetailsResponse DescribePolicyDetailsResponse
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
            'pathname' => '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePolicyDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a policy. The information includes the content, action, and severity level of the policy. Container Service for Kubernetes (ACK) provides the following types of predefined security policies: Compliance, Infra, K8s-general, and pod security policy (PSP). These policies ensure that containers are running in the production environment in a secure manner.
     *  *
     * @param string $policyName
     *
     * @return DescribePolicyDetailsResponse DescribePolicyDetailsResponse
     */
    public function describePolicyDetails($policyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyDetailsWithOptions($policyName, $headers, $runtime);
    }

    /**
     * @summary Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment. You can call the DescribePolicyGovernanceInCluster operation to query the details of policies for an ACK cluster. For example, you can query the number of policies that are enabled per severity level, the audit logs of policies, and the blocking and alerting information.
     *  *
     * @param string         $clusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyGovernanceInClusterResponse DescribePolicyGovernanceInClusterResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policygovernance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePolicyGovernanceInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyGovernanceInClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Container Service for Kubernetes (ACK) clusters offer a variety of built-in container security policies, such as Compliance, Infra, K8s-general, and pod security policy (PSP). You can use these policies to ensure the security of containers running in a production environment. You can call the DescribePolicyGovernanceInCluster operation to query the details of policies for an ACK cluster. For example, you can query the number of policies that are enabled per severity level, the audit logs of policies, and the blocking and alerting information.
     *  *
     * @param string $clusterId
     *
     * @return DescribePolicyGovernanceInClusterResponse DescribePolicyGovernanceInClusterResponse
     */
    public function describePolicyGovernanceInCluster($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyGovernanceInClusterWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * @summary Queries the detailed information about policy instances of the specified type in a Container Service for Kubernetes (ACK) cluster, such as the policy description and severity level. You can choose a type of security policy for an ACK cluster, specify the action and applicable scope of the policy, and then create and deploy a policy instance.
     *  *
     * @param string                         $clusterId
     * @param DescribePolicyInstancesRequest $request   DescribePolicyInstancesRequest
     * @param string[]                       $headers   map
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyInstancesResponse DescribePolicyInstancesResponse
     */
    public function describePolicyInstancesWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['instance_name'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['policy_name'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolicyInstances',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePolicyInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about policy instances of the specified type in a Container Service for Kubernetes (ACK) cluster, such as the policy description and severity level. You can choose a type of security policy for an ACK cluster, specify the action and applicable scope of the policy, and then create and deploy a policy instance.
     *  *
     * @param string                         $clusterId
     * @param DescribePolicyInstancesRequest $request   DescribePolicyInstancesRequest
     *
     * @return DescribePolicyInstancesResponse DescribePolicyInstancesResponse
     */
    public function describePolicyInstances($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyInstancesWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the deployment of policy instances in the current Container Service for Kubernetes (ACK) cluster, including the number of policy instances of each type and the number of policy types of each severity level.
     *  *
     * @param string         $clusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyInstancesStatusResponse DescribePolicyInstancesStatusResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePolicyInstancesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyInstancesStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the deployment of policy instances in the current Container Service for Kubernetes (ACK) cluster, including the number of policy instances of each type and the number of policy types of each severity level.
     *  *
     * @param string $clusterId
     *
     * @return DescribePolicyInstancesStatusResponse DescribePolicyInstancesStatusResponse
     */
    public function describePolicyInstancesStatus($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePolicyInstancesStatusWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * @summary Queries whether the deletion protection feature is enabled for the specified resources. The resources that you can query include namespaces and Services.
     *  *
     * @param string                                   $ClusterId
     * @param string                                   $ResourceType
     * @param DescribeResourcesDeleteProtectionRequest $request      DescribeResourcesDeleteProtectionRequest
     * @param string[]                                 $headers      map
     * @param RuntimeOptions                           $runtime      runtime options for this request RuntimeOptions
     *
     * @return DescribeResourcesDeleteProtectionResponse DescribeResourcesDeleteProtectionResponse
     */
    public function describeResourcesDeleteProtectionWithOptions($ClusterId, $ResourceType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourcesDeleteProtection',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/resources/' . OpenApiUtilClient::getEncodeParam($ResourceType) . '/protection',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeResourcesDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeResourcesDeleteProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the deletion protection feature is enabled for the specified resources. The resources that you can query include namespaces and Services.
     *  *
     * @param string                                   $ClusterId
     * @param string                                   $ResourceType
     * @param DescribeResourcesDeleteProtectionRequest $request      DescribeResourcesDeleteProtectionRequest
     *
     * @return DescribeResourcesDeleteProtectionResponse DescribeResourcesDeleteProtectionResponse
     */
    public function describeResourcesDeleteProtection($ClusterId, $ResourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourcesDeleteProtectionWithOptions($ClusterId, $ResourceType, $request, $headers, $runtime);
    }

    /**
     * @summary Queries or issues the kubeconfig credentials of a Resource Access Management (RAM) user or RAM role of the account. If you are the permission manager of a Container Service for Kubernetes (ACK) cluster, you can issue the kubeconfig credentials to a specific RAM user or RAM role of the account by using the Alibaba Cloud account. The kubeconfig credentials, which are used to connect to the ACK cluster, contain the identity information about the RAM user or RAM role.
     *  *
     * @description You can call this operation only by using an Alibaba Cloud account.
     *  *
     * @param string                                        $ClusterId
     * @param string                                        $Uid
     * @param DescribeSubaccountK8sClusterUserConfigRequest $request   DescribeSubaccountK8sClusterUserConfigRequest
     * @param string[]                                      $headers   map
     * @param RuntimeOptions                                $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeSubaccountK8sClusterUserConfigResponse DescribeSubaccountK8sClusterUserConfigResponse
     */
    public function describeSubaccountK8sClusterUserConfigWithOptions($ClusterId, $Uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->temporaryDurationMinutes)) {
            $query['TemporaryDurationMinutes'] = $request->temporaryDurationMinutes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubaccountK8sClusterUserConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/users/' . OpenApiUtilClient::getEncodeParam($Uid) . '/user_config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSubaccountK8sClusterUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSubaccountK8sClusterUserConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries or issues the kubeconfig credentials of a Resource Access Management (RAM) user or RAM role of the account. If you are the permission manager of a Container Service for Kubernetes (ACK) cluster, you can issue the kubeconfig credentials to a specific RAM user or RAM role of the account by using the Alibaba Cloud account. The kubeconfig credentials, which are used to connect to the ACK cluster, contain the identity information about the RAM user or RAM role.
     *  *
     * @description You can call this operation only by using an Alibaba Cloud account.
     *  *
     * @param string                                        $ClusterId
     * @param string                                        $Uid
     * @param DescribeSubaccountK8sClusterUserConfigRequest $request   DescribeSubaccountK8sClusterUserConfigRequest
     *
     * @return DescribeSubaccountK8sClusterUserConfigResponse DescribeSubaccountK8sClusterUserConfigResponse
     */
    public function describeSubaccountK8sClusterUserConfig($ClusterId, $Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSubaccountK8sClusterUserConfigWithOptions($ClusterId, $Uid, $request, $headers, $runtime);
    }

    /**
     * @summary Queries detailed information about a task, such as the task type, status, and progress.
     *  *
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskInfoResponse DescribeTaskInfoResponse
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
            'pathname' => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTaskInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about a task, such as the task type, status, and progress.
     *  *
     * @param string $taskId
     *
     * @return DescribeTaskInfoResponse DescribeTaskInfoResponse
     */
    public function describeTaskInfo($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskInfoWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @summary An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *  *
     * @param string                           $TemplateId
     * @param DescribeTemplateAttributeRequest $request    DescribeTemplateAttributeRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateAttributeResponse DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttributeWithOptions($TemplateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateType)) {
            $query['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateAttribute',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTemplateAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *  *
     * @param string                           $TemplateId
     * @param DescribeTemplateAttributeRequest $request    DescribeTemplateAttributeRequest
     *
     * @return DescribeTemplateAttributeResponse DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttribute($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplateAttributeWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * @summary An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *  *
     * @param DescribeTemplatesRequest $request DescribeTemplatesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplatesResponse DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['page_num'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary An orchestration template defines and describes a group of Kubernetes resources. It declaratively describes the configuration of an application or how an application runs. You can call the DescribeTemplates API operation to query orchestration templates and their detailed information, including access permissions, YAML content, and labels.
     *  *
     * @param DescribeTemplatesRequest $request DescribeTemplatesRequest
     *
     * @return DescribeTemplatesResponse DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries triggers that match specific conditions.
     *  *
     * @param string                 $clusterId
     * @param DescribeTriggerRequest $request   DescribeTriggerRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeTriggerResponse DescribeTriggerResponse
     */
    public function describeTriggerWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/triggers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries triggers that match specific conditions.
     *  *
     * @param string                 $clusterId
     * @param DescribeTriggerRequest $request   DescribeTriggerRequest
     *
     * @return DescribeTriggerResponse DescribeTriggerResponse
     */
    public function describeTrigger($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTriggerWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can use Kubernetes namespaces to limit users from accessing resources in a Container Service for Kubernetes (ACK) cluster. Users that are granted Role-Based Access Control (RBAC) permissions only on one namespace cannot access resources in other namespaces. Queries the RBAC permissions that are granted to the current Resource Access Management (RAM) user or RAM role on an ACK cluster.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeUserClusterNamespacesResponse DescribeUserClusterNamespacesResponse
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
            'pathname' => '/api/v2/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/namespaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeUserClusterNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserClusterNamespacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can use Kubernetes namespaces to limit users from accessing resources in a Container Service for Kubernetes (ACK) cluster. Users that are granted Role-Based Access Control (RBAC) permissions only on one namespace cannot access resources in other namespaces. Queries the RBAC permissions that are granted to the current Resource Access Management (RAM) user or RAM role on an ACK cluster.
     *  *
     * @param string $ClusterId
     *
     * @return DescribeUserClusterNamespacesResponse DescribeUserClusterNamespacesResponse
     */
    public function describeUserClusterNamespaces($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserClusterNamespacesWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary In an Container Service for Kubernetes (ACK) cluster, you can create and specify different Resource Access Management (RAM) users or roles to have different access permissions. This ensures access control and resource isolation. You can call the DescribeUserPermission operation to query the permissions that are granted to a RAM user or RAM role on ACK clusters, including the resources that are allowed to access, the scope of the permissions, the predefined role, and the permission source.
     *  *
     * @description **Precautions**:
     * *   If you call this operation as a Resource Access Management (RAM) user or by assuming a RAM role, only the permissions granted on the clusters on which the current account has the role-based access control (RBAC) administrator permissions are returned. If you want to query the permissions on all clusters, you must use an account that has the RBAC administrator permissions on all clusters.
     *  *
     * @param string         $uid
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserPermissionResponse DescribeUserPermissionResponse
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
            'pathname' => '/permissions/users/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary In an Container Service for Kubernetes (ACK) cluster, you can create and specify different Resource Access Management (RAM) users or roles to have different access permissions. This ensures access control and resource isolation. You can call the DescribeUserPermission operation to query the permissions that are granted to a RAM user or RAM role on ACK clusters, including the resources that are allowed to access, the scope of the permissions, the predefined role, and the permission source.
     *  *
     * @description **Precautions**:
     * *   If you call this operation as a Resource Access Management (RAM) user or by assuming a RAM role, only the permissions granted on the clusters on which the current account has the role-based access control (RBAC) administrator permissions are returned. If you want to query the permissions on all clusters, you must use an account that has the RBAC administrator permissions on all clusters.
     *  *
     * @param string $uid
     *
     * @return DescribeUserPermissionResponse DescribeUserPermissionResponse
     */
    public function describeUserPermission($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserPermissionWithOptions($uid, $headers, $runtime);
    }

    /**
     * @summary Queries quotas related to Container Service for Kubernetes (ACK) clusters, node pools, and nodes. To increase a quota, submit an application in the Quota Center console.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserQuotaResponse DescribeUserQuotaResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries quotas related to Container Service for Kubernetes (ACK) clusters, node pools, and nodes. To increase a quota, submit an application in the Quota Center console.
     *  *
     * @return DescribeUserQuotaResponse DescribeUserQuotaResponse
     */
    public function describeUserQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserQuotaWithOptions($headers, $runtime);
    }

    /**
     * @deprecated OpenAPI EdgeClusterAddEdgeMachine is deprecated
     *  *
     * @summary You can call the EdgeClusterAddEdgeMachine operation to add a cloud-native box to a Container Service for Kubernetes (ACK) Edge cluster.
     *  *
     * Deprecated
     *
     * @param string                           $clusterid
     * @param string                           $edgeMachineid
     * @param EdgeClusterAddEdgeMachineRequest $request       EdgeClusterAddEdgeMachineRequest
     * @param string[]                         $headers       map
     * @param RuntimeOptions                   $runtime       runtime options for this request RuntimeOptions
     *
     * @return EdgeClusterAddEdgeMachineResponse EdgeClusterAddEdgeMachineResponse
     */
    public function edgeClusterAddEdgeMachineWithOptions($clusterid, $edgeMachineid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->expired)) {
            $body['expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->nodepoolId)) {
            $body['nodepool_id'] = $request->nodepoolId;
        }
        if (!Utils::isUnset($request->options)) {
            $body['options'] = $request->options;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EdgeClusterAddEdgeMachine',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/%5Bclusterid%5D/attachedgemachine/%5Bedge_machineid%5D',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EdgeClusterAddEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EdgeClusterAddEdgeMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI EdgeClusterAddEdgeMachine is deprecated
     *  *
     * @summary You can call the EdgeClusterAddEdgeMachine operation to add a cloud-native box to a Container Service for Kubernetes (ACK) Edge cluster.
     *  *
     * Deprecated
     *
     * @param string                           $clusterid
     * @param string                           $edgeMachineid
     * @param EdgeClusterAddEdgeMachineRequest $request       EdgeClusterAddEdgeMachineRequest
     *
     * @return EdgeClusterAddEdgeMachineResponse EdgeClusterAddEdgeMachineResponse
     */
    public function edgeClusterAddEdgeMachine($clusterid, $edgeMachineid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->edgeClusterAddEdgeMachineWithOptions($clusterid, $edgeMachineid, $request, $headers, $runtime);
    }

    /**
     * @summary Patches node vulnerabilities in a node pool to enhance node security. Cloud Security provided by Alibaba Cloud periodically scans Elastic Compute Service (ECS) instances for vulnerabilities and provides suggestions on how to patch the detected vulnerabilities. Vulnerability patching may require node restarts. Make sure that your cluster has sufficient idle nodes for node draining.
     *  *
     * @description 1.  The Common Vulnerabilities and Exposures (CVE) patching feature is developed based on Security Center. To use this feature, you must purchase the Security Center Ultimate Edition that supports Container Service for Kubernetes (ACK).
     * 2.  ACK may need to restart nodes to patch certain vulnerabilities. ACK drains a node before the node restarts. Make sure that the ACK cluster has sufficient idle nodes to host the pods evicted from the trained nodes. For example, you can scale out a node pool before you patch vulnerabilities for the nodes in the node pool.
     * 3.  Security Center ensures the compatibility of CVE patches. We recommend that you check the compatibility of a CVE patch with your application before you install the patch. You can pause or cancel a CVE patching task anytime.
     * 4.  CVE patching is a progressive task that consists of multiple batches. After you pause or cancel a CVE patching task, ACK continues to process the dispatched batches. Only the batches that have not been dispatched are paused or canceled.
     *  *
     * @param string                 $clusterId
     * @param string                 $nodepoolId
     * @param FixNodePoolVulsRequest $request    FixNodePoolVulsRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return FixNodePoolVulsResponse FixNodePoolVulsResponse
     */
    public function fixNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRestart)) {
            $body['auto_restart'] = $request->autoRestart;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->rolloutPolicy)) {
            $body['rollout_policy'] = $request->rolloutPolicy;
        }
        if (!Utils::isUnset($request->vuls)) {
            $body['vuls'] = $request->vuls;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FixNodePoolVuls',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($nodepoolId) . '/vuls/fix',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return FixNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FixNodePoolVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Patches node vulnerabilities in a node pool to enhance node security. Cloud Security provided by Alibaba Cloud periodically scans Elastic Compute Service (ECS) instances for vulnerabilities and provides suggestions on how to patch the detected vulnerabilities. Vulnerability patching may require node restarts. Make sure that your cluster has sufficient idle nodes for node draining.
     *  *
     * @description 1.  The Common Vulnerabilities and Exposures (CVE) patching feature is developed based on Security Center. To use this feature, you must purchase the Security Center Ultimate Edition that supports Container Service for Kubernetes (ACK).
     * 2.  ACK may need to restart nodes to patch certain vulnerabilities. ACK drains a node before the node restarts. Make sure that the ACK cluster has sufficient idle nodes to host the pods evicted from the trained nodes. For example, you can scale out a node pool before you patch vulnerabilities for the nodes in the node pool.
     * 3.  Security Center ensures the compatibility of CVE patches. We recommend that you check the compatibility of a CVE patch with your application before you install the patch. You can pause or cancel a CVE patching task anytime.
     * 4.  CVE patching is a progressive task that consists of multiple batches. After you pause or cancel a CVE patching task, ACK continues to process the dispatched batches. Only the batches that have not been dispatched are paused or canceled.
     *  *
     * @param string                 $clusterId
     * @param string                 $nodepoolId
     * @param FixNodePoolVulsRequest $request    FixNodePoolVulsRequest
     *
     * @return FixNodePoolVulsResponse FixNodePoolVulsResponse
     */
    public function fixNodePoolVuls($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fixNodePoolVulsWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the GetClusterAddonInstance operation to query the information of a component instance in a cluster, including the version, configurations, and log status of the component instance.
     *  *
     * @param string         $clusterId
     * @param string         $instanceName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetClusterAddonInstanceResponse GetClusterAddonInstanceResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/addon_instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterAddonInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the GetClusterAddonInstance operation to query the information of a component instance in a cluster, including the version, configurations, and log status of the component instance.
     *  *
     * @param string $clusterId
     * @param string $instanceName
     *
     * @return GetClusterAddonInstanceResponse GetClusterAddonInstanceResponse
     */
    public function getClusterAddonInstance($clusterId, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterAddonInstanceWithOptions($clusterId, $instanceName, $headers, $runtime);
    }

    /**
     * @summary You can call the GetClusterAuditProject operation to check whether the cluster has API Server auditing enabled and the corresponding Simple Log Service project that stores API Server audit logs.
     *  *
     * @param string         $clusterid
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetClusterAuditProjectResponse GetClusterAuditProjectResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterid) . '/audit',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClusterAuditProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterAuditProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the GetClusterAuditProject operation to check whether the cluster has API Server auditing enabled and the corresponding Simple Log Service project that stores API Server audit logs.
     *  *
     * @param string $clusterid
     *
     * @return GetClusterAuditProjectResponse GetClusterAuditProjectResponse
     */
    public function getClusterAuditProject($clusterid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterAuditProjectWithOptions($clusterid, $headers, $runtime);
    }

    /**
     * @summary Queries a cluster check task by cluster ID and task ID. You can view the status, check items, creation time, and end time of the task. Container Intelligence Service (CIS) provides a variety of Kubernetes cluster check features, including cluster update check, cluster migration check, component installation check, component update check, and node pool check.
     *  *
     * @param string         $clusterId
     * @param string         $checkId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetClusterCheckResponse GetClusterCheckResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/checks/' . OpenApiUtilClient::getEncodeParam($checkId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a cluster check task by cluster ID and task ID. You can view the status, check items, creation time, and end time of the task. Container Intelligence Service (CIS) provides a variety of Kubernetes cluster check features, including cluster update check, cluster migration check, component installation check, component update check, and node pool check.
     *  *
     * @param string $clusterId
     * @param string $checkId
     *
     * @return GetClusterCheckResponse GetClusterCheckResponse
     */
    public function getClusterCheck($clusterId, $checkId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterCheckWithOptions($clusterId, $checkId, $headers, $runtime);
    }

    /**
     * @summary Queries cluster diagnostic items.
     *  *
     * @param string                               $clusterId
     * @param string                               $diagnosisId
     * @param GetClusterDiagnosisCheckItemsRequest $request     GetClusterDiagnosisCheckItemsRequest
     * @param string[]                             $headers     map
     * @param RuntimeOptions                       $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetClusterDiagnosisCheckItemsResponse GetClusterDiagnosisCheckItemsResponse
     */
    public function getClusterDiagnosisCheckItemsWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClusterDiagnosisCheckItems',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/diagnosis/' . OpenApiUtilClient::getEncodeParam($diagnosisId) . '/check_items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClusterDiagnosisCheckItemsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterDiagnosisCheckItemsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries cluster diagnostic items.
     *  *
     * @param string                               $clusterId
     * @param string                               $diagnosisId
     * @param GetClusterDiagnosisCheckItemsRequest $request     GetClusterDiagnosisCheckItemsRequest
     *
     * @return GetClusterDiagnosisCheckItemsResponse GetClusterDiagnosisCheckItemsResponse
     */
    public function getClusterDiagnosisCheckItems($clusterId, $diagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDiagnosisCheckItemsWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries cluster diagnostic results.
     *  *
     * @param string                           $clusterId
     * @param string                           $diagnosisId
     * @param GetClusterDiagnosisResultRequest $request     GetClusterDiagnosisResultRequest
     * @param string[]                         $headers     map
     * @param RuntimeOptions                   $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetClusterDiagnosisResultResponse GetClusterDiagnosisResultResponse
     */
    public function getClusterDiagnosisResultWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClusterDiagnosisResult',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/diagnosis/' . OpenApiUtilClient::getEncodeParam($diagnosisId) . '/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClusterDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterDiagnosisResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries cluster diagnostic results.
     *  *
     * @param string                           $clusterId
     * @param string                           $diagnosisId
     * @param GetClusterDiagnosisResultRequest $request     GetClusterDiagnosisResultRequest
     *
     * @return GetClusterDiagnosisResultResponse GetClusterDiagnosisResultResponse
     */
    public function getClusterDiagnosisResult($clusterId, $diagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDiagnosisResultWithOptions($clusterId, $diagnosisId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetKubernetesTrigger is deprecated
     *  *
     * @summary You can call the GetKubernetesTrigger operationto query the triggers of an application by application name.
     *  *
     * Deprecated
     *
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request   GetKubernetesTriggerRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetKubernetesTriggerResponse GetKubernetesTriggerResponse
     */
    public function getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKubernetesTrigger',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/triggers/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKubernetesTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetKubernetesTrigger is deprecated
     *  *
     * @summary You can call the GetKubernetesTrigger operationto query the triggers of an application by application name.
     *  *
     * Deprecated
     *
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request   GetKubernetesTriggerRequest
     *
     * @return GetKubernetesTriggerResponse GetKubernetesTriggerResponse
     */
    public function getKubernetesTrigger($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetUpgradeStatus is deprecated
     *  *
     * @summary You can call the GetUpgradeStatus operation to query the update progress of a cluster by cluster ID.
     *  *
     * Deprecated
     *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetUpgradeStatusResponse GetUpgradeStatusResponse
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
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUpgradeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetUpgradeStatus is deprecated
     *  *
     * @summary You can call the GetUpgradeStatus operation to query the update progress of a cluster by cluster ID.
     *  *
     * Deprecated
     *
     * @param string $ClusterId
     *
     * @return GetUpgradeStatusResponse GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUpgradeStatusWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *  *
     * @description **Precautions**:
     * *   If you use a Resource Access Management (RAM) user to call the operation, make sure that the RAM user has the permissions to modify the permissions of other RAM users or RAM roles. Otherwise, the `StatusForbidden` or `ForbiddenGrantPermissions` error code is returned after you call the operation. For more information, see [Use a RAM user to grant RBAC permissions to other RAM users](https://help.aliyun.com/document_detail/119035.html).
     * *   If you update full permissions, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation.
     *  *
     * @param string                  $uid
     * @param GrantPermissionsRequest $request GrantPermissionsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantPermissionsResponse GrantPermissionsResponse
     */
    public function grantPermissionsWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'GrantPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/permissions/users/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GrantPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *  *
     * @description **Precautions**:
     * *   If you use a Resource Access Management (RAM) user to call the operation, make sure that the RAM user has the permissions to modify the permissions of other RAM users or RAM roles. Otherwise, the `StatusForbidden` or `ForbiddenGrantPermissions` error code is returned after you call the operation. For more information, see [Use a RAM user to grant RBAC permissions to other RAM users](https://help.aliyun.com/document_detail/119035.html).
     * *   If you update full permissions, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation.
     *  *
     * @param string                  $uid
     * @param GrantPermissionsRequest $request GrantPermissionsRequest
     *
     * @return GrantPermissionsResponse GrantPermissionsResponse
     */
    public function grantPermissions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantPermissionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @summary Installs a component by specifying the name and version of the component. To enhance Kubernetes capabilities, you can install a variety of components in Container Service for Kubernetes (ACK) clusters, such as fully-managed core components and application, logging and monitoring, network, storage, and security group components.
     *  *
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request   InstallClusterAddonsRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return InstallClusterAddonsResponse InstallClusterAddonsResponse
     */
    public function installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'InstallClusterAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallClusterAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Installs a component by specifying the name and version of the component. To enhance Kubernetes capabilities, you can install a variety of components in Container Service for Kubernetes (ACK) clusters, such as fully-managed core components and application, logging and monitoring, network, storage, and security group components.
     *  *
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request   InstallClusterAddonsRequest
     *
     * @return InstallClusterAddonsResponse InstallClusterAddonsResponse
     */
    public function installClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the available components based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, and cluster version and queries the detailed information about a component. The information includes whether the component is managed, the supported custom parameter schema, and compatible operating system architecture.
     *  *
     * @param ListAddonsRequest $request ListAddonsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddonsResponse ListAddonsResponse
     */
    public function listAddonsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $query['cluster_spec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->clusterVersion)) {
            $query['cluster_version'] = $request->clusterVersion;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['region_id'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the available components based on specific conditions such as the region, cluster type, cluster subtype defined by cluster profile, and cluster version and queries the detailed information about a component. The information includes whether the component is managed, the supported custom parameter schema, and compatible operating system architecture.
     *  *
     * @param ListAddonsRequest $request ListAddonsRequest
     *
     * @return ListAddonsResponse ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the component instances that are running in the specified cluster and the information about the component instances. The information includes the component version and status.
     *  *
     * @param string         $clusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListClusterAddonInstancesResponse ListClusterAddonInstancesResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/addon_instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClusterAddonInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterAddonInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the component instances that are running in the specified cluster and the information about the component instances. The information includes the component version and status.
     *  *
     * @param string $clusterId
     *
     * @return ListClusterAddonInstancesResponse ListClusterAddonInstancesResponse
     */
    public function listClusterAddonInstances($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterAddonInstancesWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * @summary You can call the ListClusterChecks operation to query all the cluster check results of a cluster.
     *  *
     * @param string                   $clusterId
     * @param ListClusterChecksRequest $request   ListClusterChecksRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListClusterChecksResponse ListClusterChecksResponse
     */
    public function listClusterChecksWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->target)) {
            $query['target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterChecks',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/checks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClusterChecksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterChecksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the ListClusterChecks operation to query all the cluster check results of a cluster.
     *  *
     * @param string                   $clusterId
     * @param ListClusterChecksRequest $request   ListClusterChecksRequest
     *
     * @return ListClusterChecksResponse ListClusterChecksResponse
     */
    public function listClusterChecks($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterChecksWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the kubeconfig files that are issued to users for the current cluster and the status of the kubeconfig files.
     *  *
     * @description > - To call this operation, make sure that you have ram:ListUsers and ram:ListRoles permissions.
     * > - To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *  *
     * @param string                             $ClusterId
     * @param ListClusterKubeconfigStatesRequest $request   ListClusterKubeconfigStatesRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListClusterKubeconfigStatesResponse ListClusterKubeconfigStatesResponse
     */
    public function listClusterKubeconfigStatesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterKubeconfigStates',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/kubeconfig/states',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClusterKubeconfigStatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterKubeconfigStatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the kubeconfig files that are issued to users for the current cluster and the status of the kubeconfig files.
     *  *
     * @description > - To call this operation, make sure that you have ram:ListUsers and ram:ListRoles permissions.
     * > - To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *  *
     * @param string                             $ClusterId
     * @param ListClusterKubeconfigStatesRequest $request   ListClusterKubeconfigStatesRequest
     *
     * @return ListClusterKubeconfigStatesResponse ListClusterKubeconfigStatesResponse
     */
    public function listClusterKubeconfigStates($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterKubeconfigStatesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the automated maintenance schedules of a cluster.
     *  *
     * @param ListOperationPlansRequest $request ListOperationPlansRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationPlansResponse ListOperationPlansResponse
     */
    public function listOperationPlansWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListOperationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOperationPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the automated maintenance schedules of a cluster.
     *  *
     * @param ListOperationPlansRequest $request ListOperationPlansRequest
     *
     * @return ListOperationPlansResponse ListOperationPlansResponse
     */
    public function listOperationPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries resource labels and the detailed information, such as the key-value pairs of the labels and the clusters to which the labels are added. You can use labels to classify and manage Container Service for Kubernetes (ACK) clusters in order to meet monitoring, cost analysis, and tenant isolation requirements.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'resource_ids', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['next_token'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['region_id'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIdsShrink)) {
            $query['resource_ids'] = $request->resourceIdsShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resource_type'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries resource labels and the detailed information, such as the key-value pairs of the labels and the clusters to which the labels are added. You can use labels to classify and manage Container Service for Kubernetes (ACK) clusters in order to meet monitoring, cost analysis, and tenant isolation requirements.
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
     * @summary You can call the ListUserKubeConfigStates operation to query the status of the kubeconfig files of all clusters managed by the current user.
     *  *
     * @description >  To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *  *
     * @param string                          $Uid
     * @param ListUserKubeConfigStatesRequest $request ListUserKubeConfigStatesRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserKubeConfigStatesResponse ListUserKubeConfigStatesResponse
     */
    public function listUserKubeConfigStatesWithOptions($Uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserKubeConfigStates',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/users/' . OpenApiUtilClient::getEncodeParam($Uid) . '/kubeconfig/states',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUserKubeConfigStatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserKubeConfigStatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the ListUserKubeConfigStates operation to query the status of the kubeconfig files of all clusters managed by the current user.
     *  *
     * @description >  To call this operation, make sure that you have the AliyunCSFullAccess permissions.
     *  *
     * @param string                          $Uid
     * @param ListUserKubeConfigStatesRequest $request ListUserKubeConfigStatesRequest
     *
     * @return ListUserKubeConfigStatesResponse ListUserKubeConfigStatesResponse
     */
    public function listUserKubeConfigStates($Uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserKubeConfigStatesWithOptions($Uid, $request, $headers, $runtime);
    }

    /**
     * @summary Container Service for Kubernetes (ACK) Pro clusters are developed based on ACK Basic clusters. ACK Pro clusters provide all benefits of ACK managed clusters, such as fully-managed control planes and control plane high availability. In addition, ACK Pro clusters provide you with enhanced reliability, security, and schedulability. ACK Pro clusters are covered by the SLA that supports compensation clauses. ACK Pro clusters are suitable for large-scale businesses that require high stability and security in production environments. We recommend that you migrate from ACK Basic clusters to ACK Pro clusters.
     *  *
     * @param string                $clusterId
     * @param MigrateClusterRequest $request   MigrateClusterRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return MigrateClusterResponse MigrateClusterResponse
     */
    public function migrateClusterWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ossBucketEndpoint)) {
            $body['oss_bucket_endpoint'] = $request->ossBucketEndpoint;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $body['oss_bucket_name'] = $request->ossBucketName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MigrateCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/migrate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return MigrateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MigrateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Container Service for Kubernetes (ACK) Pro clusters are developed based on ACK Basic clusters. ACK Pro clusters provide all benefits of ACK managed clusters, such as fully-managed control planes and control plane high availability. In addition, ACK Pro clusters provide you with enhanced reliability, security, and schedulability. ACK Pro clusters are covered by the SLA that supports compensation clauses. ACK Pro clusters are suitable for large-scale businesses that require high stability and security in production environments. We recommend that you migrate from ACK Basic clusters to ACK Pro clusters.
     *  *
     * @param string                $clusterId
     * @param MigrateClusterRequest $request   MigrateClusterRequest
     *
     * @return MigrateClusterResponse MigrateClusterResponse
     */
    public function migrateCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateClusterWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the ModifyCluster operation to modify the cluster configurations by cluster ID.
     *  *
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request   ModifyClusterRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterResponse ModifyClusterResponse
     */
    public function modifyClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessControlList)) {
            $body['access_control_list'] = $request->accessControlList;
        }
        if (!Utils::isUnset($request->apiServerCustomCertSans)) {
            $body['api_server_custom_cert_sans'] = $request->apiServerCustomCertSans;
        }
        if (!Utils::isUnset($request->apiServerEip)) {
            $body['api_server_eip'] = $request->apiServerEip;
        }
        if (!Utils::isUnset($request->apiServerEipId)) {
            $body['api_server_eip_id'] = $request->apiServerEipId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $body['cluster_name'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->controlPlaneConfig)) {
            $body['control_plane_config'] = $request->controlPlaneConfig;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $body['deletion_protection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->enableRrsa)) {
            $body['enable_rrsa'] = $request->enableRrsa;
        }
        if (!Utils::isUnset($request->ingressDomainRebinding)) {
            $body['ingress_domain_rebinding'] = $request->ingressDomainRebinding;
        }
        if (!Utils::isUnset($request->ingressLoadbalancerId)) {
            $body['ingress_loadbalancer_id'] = $request->ingressLoadbalancerId;
        }
        if (!Utils::isUnset($request->instanceDeletionProtection)) {
            $body['instance_deletion_protection'] = $request->instanceDeletionProtection;
        }
        if (!Utils::isUnset($request->maintenanceWindow)) {
            $body['maintenance_window'] = $request->maintenanceWindow;
        }
        if (!Utils::isUnset($request->operationPolicy)) {
            $body['operation_policy'] = $request->operationPolicy;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resource_group_id'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['security_group_id'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->systemEventsLogging)) {
            $body['system_events_logging'] = $request->systemEventsLogging;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            $body['vswitch_ids'] = $request->vswitchIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the ModifyCluster operation to modify the cluster configurations by cluster ID.
     *  *
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request   ModifyClusterRequest
     *
     * @return ModifyClusterResponse ModifyClusterResponse
     */
    public function modifyCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the configuration of a cluster component. This operation may affect your businesses. We recommend that you assess the impact, back up data, and perform the operation during off-peak hours.
     *  *
     * @description You can call this API operation to modify the component parameters of an ACK Basic cluster or the control plane parameters of an ACK Pro cluster:
     * *   To view the component parameters of an ACK Basic cluster, call the DescribeClusterAddonMetadata API operation. For more information, see [Query the metadata of a cluster component](https://help.aliyun.com/document_detail/2667944.html).
     * *   To view the control plane parameters of an ACK Pro cluster, see [Customize the control plane parameters of an ACK Pro cluster](https://help.aliyun.com/document_detail/199588.html).
     * After you call this operation, the component may be redeployed and restarted. We recommend that you assess the impact before you call this operation.
     *  *
     * @param string                    $clusterId
     * @param string                    $componentId
     * @param ModifyClusterAddonRequest $request     ModifyClusterAddonRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterAddonResponse ModifyClusterAddonResponse
     */
    public function modifyClusterAddonWithOptions($clusterId, $componentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterAddon',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($componentId) . '/config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterAddonResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterAddonResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of a cluster component. This operation may affect your businesses. We recommend that you assess the impact, back up data, and perform the operation during off-peak hours.
     *  *
     * @description You can call this API operation to modify the component parameters of an ACK Basic cluster or the control plane parameters of an ACK Pro cluster:
     * *   To view the component parameters of an ACK Basic cluster, call the DescribeClusterAddonMetadata API operation. For more information, see [Query the metadata of a cluster component](https://help.aliyun.com/document_detail/2667944.html).
     * *   To view the control plane parameters of an ACK Pro cluster, see [Customize the control plane parameters of an ACK Pro cluster](https://help.aliyun.com/document_detail/199588.html).
     * After you call this operation, the component may be redeployed and restarted. We recommend that you assess the impact before you call this operation.
     *  *
     * @param string                    $clusterId
     * @param string                    $componentId
     * @param ModifyClusterAddonRequest $request     ModifyClusterAddonRequest
     *
     * @return ModifyClusterAddonResponse ModifyClusterAddonResponse
     */
    public function modifyClusterAddon($clusterId, $componentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterAddonWithOptions($clusterId, $componentId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ModifyClusterConfiguration is deprecated
     *  *
     * @summary This API operation applies only to Container Service for Kubernetes (ACK) managed clusters.
     *  *
     * Deprecated
     *
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request   ModifyClusterConfigurationRequest
     * @param string[]                          $headers   map
     * @param RuntimeOptions                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterConfigurationResponse ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customizeConfig)) {
            $body['customize_config'] = $request->customizeConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterConfiguration',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/configuration',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ModifyClusterConfiguration is deprecated
     *  *
     * @summary This API operation applies only to Container Service for Kubernetes (ACK) managed clusters.
     *  *
     * Deprecated
     *
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request   ModifyClusterConfigurationRequest
     *
     * @return ModifyClusterConfigurationResponse ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfiguration($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the ModifyClusterNodePool operation to modify the configuration of a node pool with the specified node pool ID.
     *  *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param ModifyClusterNodePoolRequest $request    ModifyClusterNodePoolRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterNodePoolResponse ModifyClusterNodePoolResponse
     */
    public function modifyClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoScaling)) {
            $body['auto_scaling'] = $request->autoScaling;
        }
        if (!Utils::isUnset($request->concurrency)) {
            $body['concurrency'] = $request->concurrency;
        }
        if (!Utils::isUnset($request->kubernetesConfig)) {
            $body['kubernetes_config'] = $request->kubernetesConfig;
        }
        if (!Utils::isUnset($request->management)) {
            $body['management'] = $request->management;
        }
        if (!Utils::isUnset($request->nodepoolInfo)) {
            $body['nodepool_info'] = $request->nodepoolInfo;
        }
        if (!Utils::isUnset($request->scalingGroup)) {
            $body['scaling_group'] = $request->scalingGroup;
        }
        if (!Utils::isUnset($request->teeConfig)) {
            $body['tee_config'] = $request->teeConfig;
        }
        if (!Utils::isUnset($request->updateNodes)) {
            $body['update_nodes'] = $request->updateNodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the ModifyClusterNodePool operation to modify the configuration of a node pool with the specified node pool ID.
     *  *
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param ModifyClusterNodePoolRequest $request    ModifyClusterNodePoolRequest
     *
     * @return ModifyClusterNodePoolResponse ModifyClusterNodePoolResponse
     */
    public function modifyClusterNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary You can add labels in key-value pairs to clusters. This allows cluster developers or O\\\\\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the ModifyClusterTags operation to modify the labels of a cluster.
     *  *
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request   ModifyClusterTagsRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterTagsResponse ModifyClusterTagsResponse
     */
    public function modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterTags',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can add labels in key-value pairs to clusters. This allows cluster developers or O\\\\\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the ModifyClusterTags operation to modify the labels of a cluster.
     *  *
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request   ModifyClusterTagsRequest
     *
     * @return ModifyClusterTagsResponse ModifyClusterTagsResponse
     */
    public function modifyClusterTags($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the configuration of a node pool, such as the kubelet configuration and node rolling update configuration. After you modify the node pool configuration, nodes are batch updated and the kubelet on each node is restarted. This may adversely affect the nodes and workloads. We recommend that you perform this operation during off-peak hours.
     *  *
     * @description >  Container Service for Kubernetes (ACK) allows you to modify the kubelet configuration of nodes in a node pool. After you modify the kubelet configuration, the new configuration immediately takes effect on existing nodes in the node pool and is automatically applied to newly added nodes.
     *  *
     * @param string                          $ClusterId
     * @param string                          $NodepoolId
     * @param ModifyNodePoolNodeConfigRequest $request    ModifyNodePoolNodeConfigRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyNodePoolNodeConfigResponse ModifyNodePoolNodeConfigResponse
     */
    public function modifyNodePoolNodeConfigWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->containerdConfig)) {
            $body['containerd_config'] = $request->containerdConfig;
        }
        if (!Utils::isUnset($request->kubeletConfig)) {
            $body['kubelet_config'] = $request->kubeletConfig;
        }
        if (!Utils::isUnset($request->osConfig)) {
            $body['os_config'] = $request->osConfig;
        }
        if (!Utils::isUnset($request->rollingPolicy)) {
            $body['rolling_policy'] = $request->rollingPolicy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNodePoolNodeConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/node_config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyNodePoolNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyNodePoolNodeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of a node pool, such as the kubelet configuration and node rolling update configuration. After you modify the node pool configuration, nodes are batch updated and the kubelet on each node is restarted. This may adversely affect the nodes and workloads. We recommend that you perform this operation during off-peak hours.
     *  *
     * @description >  Container Service for Kubernetes (ACK) allows you to modify the kubelet configuration of nodes in a node pool. After you modify the kubelet configuration, the new configuration immediately takes effect on existing nodes in the node pool and is automatically applied to newly added nodes.
     *  *
     * @param string                          $ClusterId
     * @param string                          $NodepoolId
     * @param ModifyNodePoolNodeConfigRequest $request    ModifyNodePoolNodeConfigRequest
     *
     * @return ModifyNodePoolNodeConfigResponse ModifyNodePoolNodeConfigResponse
     */
    public function modifyNodePoolNodeConfig($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodePoolNodeConfigWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a policy in a specific Container Service for Kubernetes (ACK) cluster. You can modify the action of the policy such as alerting or denying and namespaces to which the policy applies.
     *  *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param ModifyPolicyInstanceRequest $request    ModifyPolicyInstanceRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyInstanceResponse ModifyPolicyInstanceResponse
     */
    public function modifyPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['instance_name'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->namespaces)) {
            $body['namespaces'] = $request->namespaces;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicyInstance',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPolicyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a policy in a specific Container Service for Kubernetes (ACK) cluster. You can modify the action of the policy such as alerting or denying and namespaces to which the policy applies.
     *  *
     * @param string                      $clusterId
     * @param string                      $policyName
     * @param ModifyPolicyInstanceRequest $request    ModifyPolicyInstanceRequest
     *
     * @return ModifyPolicyInstanceResponse ModifyPolicyInstanceResponse
     */
    public function modifyPolicyInstance($clusterId, $policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPolicyInstanceWithOptions($clusterId, $policyName, $request, $headers, $runtime);
    }

    /**
     * @summary When you use Container Service for Kubernetes (ACK) for the first time, you must activate ACK by using an Alibaba Cloud account or RAM user with the required permissions and complete ACK authorization.
     *  *
     * @description *   You can activate ACK by using Alibaba Cloud accounts.
     * *   To activate ACK by using RAM users, you need to grant the AdministratorAccess permission to the RAM users.
     *  *
     * @param OpenAckServiceRequest $request OpenAckServiceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenAckServiceResponse OpenAckServiceResponse
     */
    public function openAckServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenAckServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenAckServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary When you use Container Service for Kubernetes (ACK) for the first time, you must activate ACK by using an Alibaba Cloud account or RAM user with the required permissions and complete ACK authorization.
     *  *
     * @description *   You can activate ACK by using Alibaba Cloud accounts.
     * *   To activate ACK by using RAM users, you need to grant the AdministratorAccess permission to the RAM users.
     *  *
     * @param OpenAckServiceRequest $request OpenAckServiceRequest
     *
     * @return OpenAckServiceResponse OpenAckServiceResponse
     */
    public function openAckService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openAckServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI PauseClusterUpgrade is deprecated
     *  *
     * @summary You can call the PauseClusterUpgrade operation to pause the update of a Container Service for Kubernetes (ACK) cluster.
     *  *
     * Deprecated
     *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return PauseClusterUpgradeResponse PauseClusterUpgradeResponse
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
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PauseClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseClusterUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI PauseClusterUpgrade is deprecated
     *  *
     * @summary You can call the PauseClusterUpgrade operation to pause the update of a Container Service for Kubernetes (ACK) cluster.
     *  *
     * Deprecated
     *
     * @param string $ClusterId
     *
     * @return PauseClusterUpgradeResponse PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgrade($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseClusterUpgradeWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI PauseComponentUpgrade is deprecated
     *  *
     * @summary You can call the PauseComponentUpgrade operation to pause the update of a component.
     *  *
     * Deprecated
     *
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return PauseComponentUpgradeResponse PauseComponentUpgradeResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterid) . '/components/' . OpenApiUtilClient::getEncodeParam($componentid) . '/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PauseComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseComponentUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI PauseComponentUpgrade is deprecated
     *  *
     * @summary You can call the PauseComponentUpgrade operation to pause the update of a component.
     *  *
     * Deprecated
     *
     * @param string $clusterid
     * @param string $componentid
     *
     * @return PauseComponentUpgradeResponse PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * @summary Pauses an on-going task.
     *  *
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseTaskResponse PauseTaskResponse
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
            'pathname' => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PauseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Pauses an on-going task.
     *  *
     * @param string $taskId
     *
     * @return PauseTaskResponse PauseTaskResponse
     */
    public function pauseTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI RemoveClusterNodes is deprecated
     *  *
     * @summary You can call the RemoveClusterNodes operation to remove nodes from a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description ****
     * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   Unknown errors may occur when you remove nodes. Before you remove nodes, back up the data on the nodes.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   You can remove only worker nodes. You cannot remove master nodes.
     *  *
     * Deprecated
     *
     * @param string                    $ClusterId
     * @param RemoveClusterNodesRequest $request   RemoveClusterNodesRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return RemoveClusterNodesResponse RemoveClusterNodesResponse
     */
    public function removeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->drainNode)) {
            $body['drain_node'] = $request->drainNode;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->releaseNode)) {
            $body['release_node'] = $request->releaseNode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveClusterNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodes/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveClusterNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI RemoveClusterNodes is deprecated
     *  *
     * @summary You can call the RemoveClusterNodes operation to remove nodes from a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description ****
     * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   Unknown errors may occur when you remove nodes. Before you remove nodes, back up the data on the nodes.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   You can remove only worker nodes. You cannot remove master nodes.
     *  *
     * Deprecated
     *
     * @param string                    $ClusterId
     * @param RemoveClusterNodesRequest $request   RemoveClusterNodesRequest
     *
     * @return RemoveClusterNodesResponse RemoveClusterNodesResponse
     */
    public function removeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Removes nodes from a node pool.
     *  *
     * @description *   When you remove a node, the pods on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   The system removes only worker nodes. It does not remove master nodes.
     * *   Even if you set the `release_node` parameter to `true`, subscription nodes are not released. You must release the subscription nodes in the [ECS console](https://ecs.console.aliyun.com/) after you remove the nodes.
     *  *
     * @param string                     $ClusterId
     * @param string                     $NodepoolId
     * @param RemoveNodePoolNodesRequest $tmpReq     RemoveNodePoolNodesRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return RemoveNodePoolNodesResponse RemoveNodePoolNodesResponse
     */
    public function removeNodePoolNodesWithOptions($ClusterId, $NodepoolId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveNodePoolNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'instance_ids', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodes)) {
            $request->nodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'nodes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->concurrency)) {
            $query['concurrency'] = $request->concurrency;
        }
        if (!Utils::isUnset($request->drainNode)) {
            $query['drain_node'] = $request->drainNode;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['instance_ids'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->nodesShrink)) {
            $query['nodes'] = $request->nodesShrink;
        }
        if (!Utils::isUnset($request->releaseNode)) {
            $query['release_node'] = $request->releaseNode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveNodePoolNodes',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/nodes',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveNodePoolNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveNodePoolNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes nodes from a node pool.
     *  *
     * @description *   When you remove a node, the pods on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     * *   The operation may have unexpected risks. Back up the data before you perform this operation.
     * *   Nodes remain in the Unschedulable state when they are being removed.
     * *   The system removes only worker nodes. It does not remove master nodes.
     * *   Even if you set the `release_node` parameter to `true`, subscription nodes are not released. You must release the subscription nodes in the [ECS console](https://ecs.console.aliyun.com/) after you remove the nodes.
     *  *
     * @param string                     $ClusterId
     * @param string                     $NodepoolId
     * @param RemoveNodePoolNodesRequest $request    RemoveNodePoolNodesRequest
     *
     * @return RemoveNodePoolNodesResponse RemoveNodePoolNodesResponse
     */
    public function removeNodePoolNodes($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeNodePoolNodesWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary Repairs a node pool.
     *  *
     * @param string                       $clusterId
     * @param string                       $nodepoolId
     * @param RepairClusterNodePoolRequest $request    RepairClusterNodePoolRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return RepairClusterNodePoolResponse RepairClusterNodePoolResponse
     */
    public function repairClusterNodePoolWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRestart)) {
            $body['auto_restart'] = $request->autoRestart;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->operations)) {
            $body['operations'] = $request->operations;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RepairClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($nodepoolId) . '/repair',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RepairClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RepairClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Repairs a node pool.
     *  *
     * @param string                       $clusterId
     * @param string                       $nodepoolId
     * @param RepairClusterNodePoolRequest $request    RepairClusterNodePoolRequest
     *
     * @return RepairClusterNodePoolResponse RepairClusterNodePoolResponse
     */
    public function repairClusterNodePool($clusterId, $nodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->repairClusterNodePoolWithOptions($clusterId, $nodepoolId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ResumeComponentUpgrade is deprecated
     *  *
     * @summary You can call the ResumeComponentUpgrade operation to resume the update of a component.
     *  *
     * Deprecated
     *
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ResumeComponentUpgradeResponse ResumeComponentUpgradeResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterid) . '/components/' . OpenApiUtilClient::getEncodeParam($componentid) . '/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ResumeComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeComponentUpgradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ResumeComponentUpgrade is deprecated
     *  *
     * @summary You can call the ResumeComponentUpgrade operation to resume the update of a component.
     *  *
     * Deprecated
     *
     * @param string $clusterid
     * @param string $componentid
     *
     * @return ResumeComponentUpgradeResponse ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * @summary Resumes a task.
     *  *
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeTaskResponse ResumeTaskResponse
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
            'pathname' => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Resumes a task.
     *  *
     * @param string $taskId
     *
     * @return ResumeTaskResponse ResumeTaskResponse
     */
    public function resumeTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ResumeUpgradeCluster is deprecated
     *  *
     * @summary You can call the ResumeUpgradeCluster operation to resume the update of a cluster by cluster ID.
     *  *
     * Deprecated
     *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return ResumeUpgradeClusterResponse ResumeUpgradeClusterResponse
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
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ResumeUpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeUpgradeClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ResumeUpgradeCluster is deprecated
     *  *
     * @summary You can call the ResumeUpgradeCluster operation to resume the update of a cluster by cluster ID.
     *  *
     * Deprecated
     *
     * @param string $ClusterId
     *
     * @return ResumeUpgradeClusterResponse ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeCluster($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeUpgradeClusterWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary You can call the RevokeK8sClusterKubeConfig operation to revoke the kubeconfig file of a cluster that belongs to the current Alibaba Cloud account or RAM user. After the kubeconfig file is revoked, the cluster generates a new kubeconfig file, and the original kubeconfig file becomes invalid.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return RevokeK8sClusterKubeConfigResponse RevokeK8sClusterKubeConfigResponse
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
            'pathname' => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/certs',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RevokeK8sClusterKubeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeK8sClusterKubeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the RevokeK8sClusterKubeConfig operation to revoke the kubeconfig file of a cluster that belongs to the current Alibaba Cloud account or RAM user. After the kubeconfig file is revoked, the cluster generates a new kubeconfig file, and the original kubeconfig file becomes invalid.
     *  *
     * @param string $ClusterId
     *
     * @return RevokeK8sClusterKubeConfigResponse RevokeK8sClusterKubeConfigResponse
     */
    public function revokeK8sClusterKubeConfig($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeK8sClusterKubeConfigWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary Container Intelligence Service (CIS) provides a variety of cluster check capabilities to allow you to perform cluster update check, cluster migration check, component installation check, component update check, and node pool check. A precheck is automatically triggered before an update, migration, or installation is performed. You can perform changes only if the cluster passes the precheck. You can also manually call the RunClusterCheck operation to initiate cluster checks. We recommend that you periodically check and maintain your cluster to mitigate potential risks.
     *  *
     * @param string                 $clusterId
     * @param RunClusterCheckRequest $request   RunClusterCheckRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return RunClusterCheckResponse RunClusterCheckResponse
     */
    public function runClusterCheckWithOptions($clusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->options)) {
            $body['options'] = $request->options;
        }
        if (!Utils::isUnset($request->target)) {
            $body['target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunClusterCheck',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/checks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunClusterCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Container Intelligence Service (CIS) provides a variety of cluster check capabilities to allow you to perform cluster update check, cluster migration check, component installation check, component update check, and node pool check. A precheck is automatically triggered before an update, migration, or installation is performed. You can perform changes only if the cluster passes the precheck. You can also manually call the RunClusterCheck operation to initiate cluster checks. We recommend that you periodically check and maintain your cluster to mitigate potential risks.
     *  *
     * @param string                 $clusterId
     * @param RunClusterCheckRequest $request   RunClusterCheckRequest
     *
     * @return RunClusterCheckResponse RunClusterCheckResponse
     */
    public function runClusterCheck($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runClusterCheckWithOptions($clusterId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ScaleCluster is deprecated
     *  *
     * @summary 扩容Kubernetes集群
     *  *
     * Deprecated
     *
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request   ScaleClusterRequest
     * @param string[]            $headers   map
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return ScaleClusterResponse ScaleClusterResponse
     */
    public function scaleClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            $body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->count)) {
            $body['count'] = $request->count;
        }
        if (!Utils::isUnset($request->cpuPolicy)) {
            $body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            $body['disable_rollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->keyPair)) {
            $body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['login_password'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->taints)) {
            $body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            $body['vswitch_ids'] = $request->vswitchIds;
        }
        if (!Utils::isUnset($request->workerAutoRenew)) {
            $body['worker_auto_renew'] = $request->workerAutoRenew;
        }
        if (!Utils::isUnset($request->workerAutoRenewPeriod)) {
            $body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->workerDataDisk)) {
            $body['worker_data_disk'] = $request->workerDataDisk;
        }
        if (!Utils::isUnset($request->workerDataDisks)) {
            $body['worker_data_disks'] = $request->workerDataDisks;
        }
        if (!Utils::isUnset($request->workerInstanceChargeType)) {
            $body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }
        if (!Utils::isUnset($request->workerInstanceTypes)) {
            $body['worker_instance_types'] = $request->workerInstanceTypes;
        }
        if (!Utils::isUnset($request->workerPeriod)) {
            $body['worker_period'] = $request->workerPeriod;
        }
        if (!Utils::isUnset($request->workerPeriodUnit)) {
            $body['worker_period_unit'] = $request->workerPeriodUnit;
        }
        if (!Utils::isUnset($request->workerSystemDiskCategory)) {
            $body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }
        if (!Utils::isUnset($request->workerSystemDiskSize)) {
            $body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScaleClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ScaleCluster is deprecated
     *  *
     * @summary 扩容Kubernetes集群
     *  *
     * Deprecated
     *
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request   ScaleClusterRequest
     *
     * @return ScaleClusterResponse ScaleClusterResponse
     */
    public function scaleCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Scales out a node pool.
     *  *
     * @param string                      $ClusterId
     * @param string                      $NodepoolId
     * @param ScaleClusterNodePoolRequest $request    ScaleClusterNodePoolRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ScaleClusterNodePoolResponse ScaleClusterNodePoolResponse
     */
    public function scaleClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->count)) {
            $body['count'] = $request->count;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleClusterNodePool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScaleClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Scales out a node pool.
     *  *
     * @param string                      $ClusterId
     * @param string                      $NodepoolId
     * @param ScaleClusterNodePoolRequest $request    ScaleClusterNodePoolRequest
     *
     * @return ScaleClusterNodePoolResponse ScaleClusterNodePoolResponse
     */
    public function scaleClusterNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the ScaleOutCluster operation to scale out a cluster by cluster ID.
     *  *
     * @description **
     * ****The ScaleOutCluster API operation is phased out. You must call the node pool-related API operations to manage nodes. If you want to add worker nodes to a Container Service for Kubernetes (ACK) cluster, call the ScaleClusterNodePool API operation. For more information, see [ScaleClusterNodePool](https://help.aliyun.com/document_detail/184928.html).
     *  *
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request   ScaleOutClusterRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ScaleOutClusterResponse ScaleOutClusterResponse
     */
    public function scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            $body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->count)) {
            $body['count'] = $request->count;
        }
        if (!Utils::isUnset($request->cpuPolicy)) {
            $body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->keyPair)) {
            $body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['login_password'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            $body['rds_instances'] = $request->rdsInstances;
        }
        if (!Utils::isUnset($request->runtime)) {
            $body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->taints)) {
            $body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['user_data'] = $request->userData;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            $body['vswitch_ids'] = $request->vswitchIds;
        }
        if (!Utils::isUnset($request->workerAutoRenew)) {
            $body['worker_auto_renew'] = $request->workerAutoRenew;
        }
        if (!Utils::isUnset($request->workerAutoRenewPeriod)) {
            $body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->workerDataDisks)) {
            $body['worker_data_disks'] = $request->workerDataDisks;
        }
        if (!Utils::isUnset($request->workerInstanceChargeType)) {
            $body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }
        if (!Utils::isUnset($request->workerInstanceTypes)) {
            $body['worker_instance_types'] = $request->workerInstanceTypes;
        }
        if (!Utils::isUnset($request->workerPeriod)) {
            $body['worker_period'] = $request->workerPeriod;
        }
        if (!Utils::isUnset($request->workerPeriodUnit)) {
            $body['worker_period_unit'] = $request->workerPeriodUnit;
        }
        if (!Utils::isUnset($request->workerSystemDiskCategory)) {
            $body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }
        if (!Utils::isUnset($request->workerSystemDiskSize)) {
            $body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleOutCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScaleOutClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleOutClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the ScaleOutCluster operation to scale out a cluster by cluster ID.
     *  *
     * @description **
     * ****The ScaleOutCluster API operation is phased out. You must call the node pool-related API operations to manage nodes. If you want to add worker nodes to a Container Service for Kubernetes (ACK) cluster, call the ScaleClusterNodePool API operation. For more information, see [ScaleClusterNodePool](https://help.aliyun.com/document_detail/184928.html).
     *  *
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request   ScaleOutClusterRequest
     *
     * @return ScaleOutClusterResponse ScaleOutClusterResponse
     */
    public function scaleOutCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Scans for vulnerabilities in a Container Service for Kubernetes (ACK) cluster, including workload vulnerabilities, third-party software vulnerabilities, CVE vulnerabilities, WebCMS vulnerabilities, and Windows vulnerabilities. We recommend that you scan your cluster on a regular basis to ensure cluster security.
     *  *
     * @param string         $clusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return ScanClusterVulsResponse ScanClusterVulsResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/vuls/scan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScanClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScanClusterVulsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Scans for vulnerabilities in a Container Service for Kubernetes (ACK) cluster, including workload vulnerabilities, third-party software vulnerabilities, CVE vulnerabilities, WebCMS vulnerabilities, and Windows vulnerabilities. We recommend that you scan your cluster on a regular basis to ensure cluster security.
     *  *
     * @param string $clusterId
     *
     * @return ScanClusterVulsResponse ScanClusterVulsResponse
     */
    public function scanClusterVuls($clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scanClusterVulsWithOptions($clusterId, $headers, $runtime);
    }

    /**
     * @summary Activates the specified alert rule(s).
     *  *
     * @param string            $ClusterId
     * @param StartAlertRequest $request   StartAlertRequest
     * @param string[]          $headers   map
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return StartAlertResponse StartAlertResponse
     */
    public function startAlertWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertRuleGroupName)) {
            $body['alert_rule_group_name'] = $request->alertRuleGroupName;
        }
        if (!Utils::isUnset($request->alertRuleName)) {
            $body['alert_rule_name'] = $request->alertRuleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartAlert',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/alert_rule/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Activates the specified alert rule(s).
     *  *
     * @param string            $ClusterId
     * @param StartAlertRequest $request   StartAlertRequest
     *
     * @return StartAlertResponse StartAlertResponse
     */
    public function startAlert($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAlertWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the StopAlert operation to disable an alert rule or an alert rule set in the alert center of Container Service for Kubernetes (ACK).
     *  *
     * @param string           $ClusterId
     * @param StopAlertRequest $request   StopAlertRequest
     * @param string[]         $headers   map
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return StopAlertResponse StopAlertResponse
     */
    public function stopAlertWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertRuleGroupName)) {
            $body['alert_rule_group_name'] = $request->alertRuleGroupName;
        }
        if (!Utils::isUnset($request->alertRuleName)) {
            $body['alert_rule_name'] = $request->alertRuleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopAlert',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/alert_rule/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the StopAlert operation to disable an alert rule or an alert rule set in the alert center of Container Service for Kubernetes (ACK).
     *  *
     * @param string           $ClusterId
     * @param StopAlertRequest $request   StopAlertRequest
     *
     * @return StopAlertResponse StopAlertResponse
     */
    public function stopAlert($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAlertWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Synchronizes the information about a node pool, including the metadata and node information of the node pool.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return SyncClusterNodePoolResponse SyncClusterNodePoolResponse
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
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/sync_nodepools',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SyncClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncClusterNodePoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Synchronizes the information about a node pool, including the metadata and node information of the node pool.
     *  *
     * @param string $ClusterId
     *
     * @return SyncClusterNodePoolResponse SyncClusterNodePoolResponse
     */
    public function syncClusterNodePool($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncClusterNodePoolWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary You can add labels in key-value pairs to clusters. This allows cluster developers or O\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the TagResources operation to add labels to a cluster.
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
            $body['region_id'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['resource_ids'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resource_type'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can add labels in key-value pairs to clusters. This allows cluster developers or O\\&M engineers to classify and manage clusters in a more flexible manner. This also meets the requirements for monitoring, cost analysis, and tenant isolation. You can call the TagResources operation to add labels to a cluster.
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
     * @summary Uninstalls components that you no longer need from a cluster. You must specify the name of the components and specify whether to release associated Alibaba Cloud resources from the cluster.
     *  *
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request   UnInstallClusterAddonsRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return UnInstallClusterAddonsResponse UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->addons),
        ]);
        $params = new Params([
            'action' => 'UnInstallClusterAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/uninstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UnInstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnInstallClusterAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uninstalls components that you no longer need from a cluster. You must specify the name of the components and specify whether to release associated Alibaba Cloud resources from the cluster.
     *  *
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request   UnInstallClusterAddonsRequest
     *
     * @return UnInstallClusterAddonsResponse UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary If you no longer need the labels (key-value pairs) of a cluster, you can call the UntagResources operation to delete the labels.
     *  *
     * @param UntagResourcesRequest $tmpReq  UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UntagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'resource_ids', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKeys)) {
            $request->tagKeysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'tag_keys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['all'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['region_id'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIdsShrink)) {
            $query['resource_ids'] = $request->resourceIdsShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resource_type'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeysShrink)) {
            $query['tag_keys'] = $request->tagKeysShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary If you no longer need the labels (key-value pairs) of a cluster, you can call the UntagResources operation to delete the labels.
     *  *
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
     * @summary You can call the UpdateClusterAuditLogConfig operation to enable or disable the audit log feature in a Container Service for Kubernetes (ACK) cluster and update the audit log configuration. This operation also allows you to record requests to the Kubernetes API and the responses, which can be used to trace cluster operation history and troubleshoot cluster issues.
     *  *
     * @description Before you call this operation, ensure that you understand the billing methods and pricing of [Simple Log Service](https://www.alibabacloud.com/product/log-service/pricing).
     *  *
     * @param string                             $clusterid
     * @param UpdateClusterAuditLogConfigRequest $request   UpdateClusterAuditLogConfigRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterAuditLogConfigResponse UpdateClusterAuditLogConfigResponse
     */
    public function updateClusterAuditLogConfigWithOptions($clusterid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->disable)) {
            $body['disable'] = $request->disable;
        }
        if (!Utils::isUnset($request->slsProjectName)) {
            $body['sls_project_name'] = $request->slsProjectName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateClusterAuditLogConfig',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterid) . '/audit_log',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateClusterAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateClusterAuditLogConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the UpdateClusterAuditLogConfig operation to enable or disable the audit log feature in a Container Service for Kubernetes (ACK) cluster and update the audit log configuration. This operation also allows you to record requests to the Kubernetes API and the responses, which can be used to trace cluster operation history and troubleshoot cluster issues.
     *  *
     * @description Before you call this operation, ensure that you understand the billing methods and pricing of [Simple Log Service](https://www.alibabacloud.com/product/log-service/pricing).
     *  *
     * @param string                             $clusterid
     * @param UpdateClusterAuditLogConfigRequest $request   UpdateClusterAuditLogConfigRequest
     *
     * @return UpdateClusterAuditLogConfigResponse UpdateClusterAuditLogConfigResponse
     */
    public function updateClusterAuditLogConfig($clusterid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateClusterAuditLogConfigWithOptions($clusterid, $request, $headers, $runtime);
    }

    /**
     * @summary null
     *  *
     * @param string                            $ClusterId
     * @param UpdateContactGroupForAlertRequest $request   UpdateContactGroupForAlertRequest
     * @param string[]                          $headers   map
     * @param RuntimeOptions                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateContactGroupForAlertResponse UpdateContactGroupForAlertResponse
     */
    public function updateContactGroupForAlertWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertRuleGroupName)) {
            $body['alert_rule_group_name'] = $request->alertRuleGroupName;
        }
        if (!Utils::isUnset($request->contactGroupIds)) {
            $body['contact_group_ids'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->crName)) {
            $body['cr_name'] = $request->crName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateContactGroupForAlert',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/alert/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/alert_rule/contact_groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateContactGroupForAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateContactGroupForAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary null
     *  *
     * @param string                            $ClusterId
     * @param UpdateContactGroupForAlertRequest $request   UpdateContactGroupForAlertRequest
     *
     * @return UpdateContactGroupForAlertResponse UpdateContactGroupForAlertResponse
     */
    public function updateContactGroupForAlert($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContactGroupForAlertWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the log configurations of control plane components. The configurations include the log retention period and components whose logs that you want to collect. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube-apiserver, kube-scheduler, Kubernetes controller manager, and cloud controller manager (CCM).
     *  *
     * @param string                       $ClusterId
     * @param UpdateControlPlaneLogRequest $request   UpdateControlPlaneLogRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateControlPlaneLogResponse UpdateControlPlaneLogResponse
     */
    public function updateControlPlaneLogWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliuid)) {
            $body['aliuid'] = $request->aliuid;
        }
        if (!Utils::isUnset($request->components)) {
            $body['components'] = $request->components;
        }
        if (!Utils::isUnset($request->logProject)) {
            $body['log_project'] = $request->logProject;
        }
        if (!Utils::isUnset($request->logTtl)) {
            $body['log_ttl'] = $request->logTtl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateControlPlaneLog',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/controlplanelog',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateControlPlaneLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateControlPlaneLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the log configurations of control plane components. The configurations include the log retention period and components whose logs that you want to collect. Container Service for Kubernetes (ACK) managed clusters can collect the logs of control plane components and deliver the logs to projects in Simple Log Service. These control plane components include Kube-apiserver, kube-scheduler, Kubernetes controller manager, and cloud controller manager (CCM).
     *  *
     * @param string                       $ClusterId
     * @param UpdateControlPlaneLogRequest $request   UpdateControlPlaneLogRequest
     *
     * @return UpdateControlPlaneLogResponse UpdateControlPlaneLogResponse
     */
    public function updateControlPlaneLog($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateControlPlaneLogWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Sets the validity period of a kubeconfig file used by a Resource Access Management (RAM) user or RAM role to connect to a Container Service for Kubernetes (ACK) cluster. The validity period ranges from 1 to 876,000 hours. You can call this API operation when you customize configurations by using an Alibaba Cloud account. The default validity period of a kubeconfig file is three years.
     *  *
     * @description *   You can call this operation only with an Alibaba Cloud account.
     * *   If the kubeconfig file used by your cluster is revoked, the custom validity period of the kubeconfig file is reset. In this case, you need to call this API operation to reconfigure the validity period of the kubeconfig file.
     *  *
     * @param string                                  $ClusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request   UpdateK8sClusterUserConfigExpireRequest
     * @param string[]                                $headers   map
     * @param RuntimeOptions                          $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateK8sClusterUserConfigExpireResponse UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpireWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->expireHour)) {
            $body['expire_hour'] = $request->expireHour;
        }
        if (!Utils::isUnset($request->user)) {
            $body['user'] = $request->user;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateK8sClusterUserConfigExpire',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user_config/expire',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sets the validity period of a kubeconfig file used by a Resource Access Management (RAM) user or RAM role to connect to a Container Service for Kubernetes (ACK) cluster. The validity period ranges from 1 to 876,000 hours. You can call this API operation when you customize configurations by using an Alibaba Cloud account. The default validity period of a kubeconfig file is three years.
     *  *
     * @description *   You can call this operation only with an Alibaba Cloud account.
     * *   If the kubeconfig file used by your cluster is revoked, the custom validity period of the kubeconfig file is reset. In this case, you need to call this API operation to reconfigure the validity period of the kubeconfig file.
     *  *
     * @param string                                  $ClusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request   UpdateK8sClusterUserConfigExpireRequest
     *
     * @return UpdateK8sClusterUserConfigExpireResponse UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpire($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateK8sClusterUserConfigExpireWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the deletion protection status of the specified resources. You can enable or disable deletion protection for namespaces and Services. You can call this operation to enable deletion protection for namespaces or Services that involve businesses-critical and sensitive data to avoid incurring maintenance costs caused by accidental namespace or Service deletion.
     *  *
     * @param string                                 $ClusterId
     * @param UpdateResourcesDeleteProtectionRequest $request   UpdateResourcesDeleteProtectionRequest
     * @param string[]                               $headers   map
     * @param RuntimeOptions                         $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateResourcesDeleteProtectionResponse UpdateResourcesDeleteProtectionResponse
     */
    public function updateResourcesDeleteProtectionWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resource_type'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resources)) {
            $body['resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourcesDeleteProtection',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/resources/protection',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateResourcesDeleteProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateResourcesDeleteProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the deletion protection status of the specified resources. You can enable or disable deletion protection for namespaces and Services. You can call this operation to enable deletion protection for namespaces or Services that involve businesses-critical and sensitive data to avoid incurring maintenance costs caused by accidental namespace or Service deletion.
     *  *
     * @param string                                 $ClusterId
     * @param UpdateResourcesDeleteProtectionRequest $request   UpdateResourcesDeleteProtectionRequest
     *
     * @return UpdateResourcesDeleteProtectionResponse UpdateResourcesDeleteProtectionResponse
     */
    public function updateResourcesDeleteProtection($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourcesDeleteProtectionWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the configurations of an orchestration template. An orchestration template defines and describes a group of Container Service for Kubernetes (ACK) resources. An orchestration template describes the configurations of an application or how an application runs in a declarative manner.
     *  *
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request    UpdateTemplateRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of an orchestration template. An orchestration template defines and describes a group of Container Service for Kubernetes (ACK) resources. An orchestration template describes the configurations of an application or how an application runs in a declarative manner.
     *  *
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request    UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *  *
     * @description **Precautions**:
     * *   You can update the permissions of a RAM user or RAM role on a cluster by using full update or incremental update. If you use full update, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation. If you use incremental update, you can grant permissions to or revoke permissions from the RAM user or RAM role on the cluster. In this case, only the permissions that you specify in the request parameters when you call the operation are granted or revoked, other permissions of the RAM user or RAM role on the cluster are not affected.
     *  *
     * @param string                       $uid
     * @param UpdateUserPermissionsRequest $request UpdateUserPermissionsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserPermissionsResponse UpdateUserPermissionsResponse
     */
    public function updateUserPermissionsWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mode)) {
            $query['mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserPermissions',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/permissions/users/' . OpenApiUtilClient::getEncodeParam($uid) . '/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the role-based access control (RBAC) permissions of a Resource Access Management (RAM) user or RAM role. By default, you do not have the RBAC permissions on a Container Service for Kubernetes (ACK) cluster if you are not the cluster owner or you are not using an Alibaba Cloud account. You can call this operation to specify the resources that can be accessed, permission scope, and predefined roles. This helps you better manage the access control on resources in ACK clusters.
     *  *
     * @description **Precautions**:
     * *   You can update the permissions of a RAM user or RAM role on a cluster by using full update or incremental update. If you use full update, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation. If you use incremental update, you can grant permissions to or revoke permissions from the RAM user or RAM role on the cluster. In this case, only the permissions that you specify in the request parameters when you call the operation are granted or revoked, other permissions of the RAM user or RAM role on the cluster are not affected.
     *  *
     * @param string                       $uid
     * @param UpdateUserPermissionsRequest $request UpdateUserPermissionsRequest
     *
     * @return UpdateUserPermissionsResponse UpdateUserPermissionsResponse
     */
    public function updateUserPermissions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserPermissionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the UpgradeCluster operation to upgrade a cluster by cluster ID.
     *  *
     * @description After successfully calling the UpgradeCluster interface, this API returns the `task_id` of the upgrade task. You can manage this operation task by calling the following task APIs:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a task that has been paused](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     *  *
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request   UpgradeClusterRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpgradeClusterResponse UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentName)) {
            $body['component_name'] = $request->componentName;
        }
        if (!Utils::isUnset($request->masterOnly)) {
            $body['master_only'] = $request->masterOnly;
        }
        if (!Utils::isUnset($request->nextVersion)) {
            $body['next_version'] = $request->nextVersion;
        }
        if (!Utils::isUnset($request->rollingPolicy)) {
            $body['rolling_policy'] = $request->rollingPolicy;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeCluster',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the UpgradeCluster operation to upgrade a cluster by cluster ID.
     *  *
     * @description After successfully calling the UpgradeCluster interface, this API returns the `task_id` of the upgrade task. You can manage this operation task by calling the following task APIs:
     * - [Call DescribeTaskInfo to query task details](https://help.aliyun.com/document_detail/2667985.html)
     * - [Call PauseTask to pause a running task](https://help.aliyun.com/document_detail/2667986.html)
     * - [Call ResumeTask to resume a task that has been paused](https://help.aliyun.com/document_detail/2667987.html)
     * - [Call CancelTask to cancel a running task](https://help.aliyun.com/document_detail/2667988.html)
     *  *
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request   UpgradeClusterRequest
     *
     * @return UpgradeClusterResponse UpgradeClusterResponse
     */
    public function upgradeCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates cluster components to use new features and patch vulnerabilities. You must update cluster components one after one and update a component only after the previous one is successfully updated. Before you update a component, we recommend that you read the update notes for each component. Cluster component updates may affect your businesses. Assess the impact, back up data, and perform the update during off-peak hours.
     *  *
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request   UpgradeClusterAddonsRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpgradeClusterAddonsResponse UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpgradeClusterAddons',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates cluster components to use new features and patch vulnerabilities. You must update cluster components one after one and update a component only after the previous one is successfully updated. Before you update a component, we recommend that you read the update notes for each component. Cluster component updates may affect your businesses. Assess the impact, back up data, and perform the update during off-peak hours.
     *  *
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request   UpgradeClusterAddonsRequest
     *
     * @return UpgradeClusterAddonsResponse UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call the UpgradeClusterNodepool operation to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *  *
     * @description This operation allows you to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *  *
     * @param string                        $ClusterId
     * @param string                        $NodepoolId
     * @param UpgradeClusterNodepoolRequest $request    UpgradeClusterNodepoolRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpgradeClusterNodepoolResponse UpgradeClusterNodepoolResponse
     */
    public function upgradeClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageId)) {
            $body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->kubernetesVersion)) {
            $body['kubernetes_version'] = $request->kubernetesVersion;
        }
        if (!Utils::isUnset($request->nodeNames)) {
            $body['node_names'] = $request->nodeNames;
        }
        if (!Utils::isUnset($request->rollingPolicy)) {
            $body['rolling_policy'] = $request->rollingPolicy;
        }
        if (!Utils::isUnset($request->runtimeType)) {
            $body['runtime_type'] = $request->runtimeType;
        }
        if (!Utils::isUnset($request->runtimeVersion)) {
            $body['runtime_version'] = $request->runtimeVersion;
        }
        if (!Utils::isUnset($request->useReplace)) {
            $body['use_replace'] = $request->useReplace;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeClusterNodepool',
            'version' => '2015-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClusterNodepoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the UpgradeClusterNodepool operation to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *  *
     * @description This operation allows you to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *  *
     * @param string                        $ClusterId
     * @param string                        $NodepoolId
     * @param UpgradeClusterNodepoolRequest $request    UpgradeClusterNodepoolRequest
     *
     * @return UpgradeClusterNodepoolResponse UpgradeClusterNodepoolResponse
     */
    public function upgradeClusterNodepool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterNodepoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }
}
