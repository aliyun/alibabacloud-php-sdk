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
use AlibabaCloud\SDK\CS\V20151215\Models\CancelWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CheckControlPlaneLogEnableResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoscalingConfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateAutoscalingConfigResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\DescirbeWorkflowResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\EdgeClusterAddEdgeMachineRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\EdgeClusterAddEdgeMachineResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterCheckResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesShrinkRequest;
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
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeTaskResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateContactGroupForAlertResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateControlPlaneLogRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateControlPlaneLogResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireResponse;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachInstances',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/attach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachInstancesToNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/attach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachInstancesToNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   *
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
            'action'      => 'CancelClusterUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CancelClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($componentId) . '/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CancelComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/operation/plans/' . OpenApiUtilClient::getEncodeParam($planId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelOperationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $workflowName
     * @param CancelWorkflowRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CancelWorkflowResponse
     */
    public function cancelWorkflowWithOptions($workflowName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelWorkflow',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gs/workflow/' . OpenApiUtilClient::getEncodeParam($workflowName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CancelWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $workflowName
     * @param CancelWorkflowRequest $request
     *
     * @return CancelWorkflowResponse
     */
    public function cancelWorkflow($workflowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelWorkflowWithOptions($workflowName, $request, $headers, $runtime);
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/controlplanelog',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckControlPlaneLogEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $ClusterId
     * @param CreateAutoscalingConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAutoscalingConfigResponse
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
        if (!Utils::isUnset($request->recycleNodeDeletionEnabled)) {
            $body['recycle_node_deletion_enabled'] = $request->recycleNodeDeletionEnabled;
        }
        if (!Utils::isUnset($request->scaleDownEnabled)) {
            $body['scale_down_enabled'] = $request->scaleDownEnabled;
        }
        if (!Utils::isUnset($request->scaleUpFromZero)) {
            $body['scale_up_from_zero'] = $request->scaleUpFromZero;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAutoscalingConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cluster/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/autoscale/config/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateAutoscalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This topic describes all parameters for creating an ACK cluster. You can create the following types of ACK clusters.
     *   * *   [Create an ACK managed cluster](~~90776~~)
     *   * *   [Create an ACK dedicated cluster](~~197620~~)
     *   * *   [Create an ACK Serverless cluster](~~144246~~)
     *   * *   [Create an ACK Edge cluster](~~128204~~)
     *   * *   [Create an ACK Basic cluster that supports sandboxed containers](~~196321~~)
     *   * *   [Create an ACK Pro cluster that supports sandboxed containers](~~140623~~).
     *   *
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
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $body['load_balancer_spec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->loggingType)) {
            $body['logging_type'] = $request->loggingType;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['login_password'] = $request->loginPassword;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
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

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes all parameters for creating an ACK cluster. You can create the following types of ACK clusters.
     *   * *   [Create an ACK managed cluster](~~90776~~)
     *   * *   [Create an ACK dedicated cluster](~~197620~~)
     *   * *   [Create an ACK Serverless cluster](~~144246~~)
     *   * *   [Create an ACK Edge cluster](~~128204~~)
     *   * *   [Create an ACK Basic cluster that supports sandboxed containers](~~196321~~)
     *   * *   [Create an ACK Pro cluster that supports sandboxed containers](~~140623~~).
     *   *
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
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClusterNodePoolResponse
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
        if (!Utils::isUnset($request->interconnectConfig)) {
            $body['interconnect_config'] = $request->interconnectConfig;
        }
        if (!Utils::isUnset($request->interconnectMode)) {
            $body['interconnect_mode'] = $request->interconnectMode;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateEdgeMachineRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEdgeMachineResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
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

        return CreateEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

    /**
     * @param CreateKubernetesTriggerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKubernetesTriggerResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
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

        return CreateKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
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

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $clusterId
     * @param CreateTriggerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/triggers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteAlertContactRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertContactResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteAlertContactGroupRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAlertContactGroupResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $ClusterId
     * @param DeleteClusterRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($ClusterId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->retainResources)) {
            $request->retainResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retainResources, 'retain_resources', 'json');
        }
        $query = [];
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterNodepool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * >
     *   * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours. - The operation may have unexpected risks. Back up the data before you perform this operation. - When the system removes a node, it sets the status of the node to Unschedulable. - The system removes only worker nodes. It does not remove master nodes.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours. - The operation may have unexpected risks. Back up the data before you perform this operation. - When the system removes a node, it sets the status of the node to Unschedulable. - The system removes only worker nodes. It does not remove master nodes.
     *   *
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
     * @param string                   $edgeMachineid
     * @param DeleteEdgeMachineRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEdgeMachineResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DeleteEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

    /**
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
            'pathname'    => '/triggers/revoke/' . OpenApiUtilClient::getEncodeParam($Id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['instance_name'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/triggers/' . OpenApiUtilClient::getEncodeParam($Id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployPolicyInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeployPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $workflowName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescirbeWorkflowResponse
     */
    public function descirbeWorkflowWithOptions($workflowName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescirbeWorkflow',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gs/workflow/' . OpenApiUtilClient::getEncodeParam($workflowName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescirbeWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workflowName
     *
     * @return DescirbeWorkflowResponse
     */
    public function descirbeWorkflow($workflowName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->descirbeWorkflowWithOptions($workflowName, $headers, $runtime);
    }

    /**
     * @param string               $addonName
     * @param DescribeAddonRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeAddonResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddon',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/addons/' . OpenApiUtilClient::getEncodeParam($addonName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @deprecated
     *   *
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
            'action'      => 'DescribeClusterAddonInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterID) . '/components/' . OpenApiUtilClient::getEncodeParam($AddonName) . '/instance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @deprecated
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAddonMetadata',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($componentId) . '/metadata',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAddonMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @deprecated
     *   *
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
            'action'      => 'DescribeClusterAddonUpgradeStatus',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($ComponentId) . '/upgradestatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @deprecated
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAddonsUpgradeStatus',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/upgradestatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @deprecated
     *   *
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
            'action'      => 'DescribeClusterAddonsVersion',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/version',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAddonsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->arch)) {
            $body['arch'] = $request->arch;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAttachScripts',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/attachscript',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return DescribeClusterAttachScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $ClusterId
     * @param DescribeClusterEventsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterEventsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterEvents',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribeClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterNodePoolDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePoolsWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterNodePools',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterNodePoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePools($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolsWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterNodesResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterResourcesResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterResources',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribeClusterResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $clusterId
     * @param DescribeClusterTasksRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterTasksResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterTasks',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **
     *   * ****The default validity period of a kubeconfig file is 3 years. Two months before a kubeconfig file expires, you can renew it in the Container Service for Kubernetes (ACK) console or by calling API operations. After a kubeconfig file is renewed, the secret is valid for 3 years. The previous kubeconfig secret remains valid until expiration. We recommend that you renew your kubeconfig file at the earliest opportunity.
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterUserKubeconfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterUserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   * ****The default validity period of a kubeconfig file is 3 years. Two months before a kubeconfig file expires, you can renew it in the Container Service for Kubernetes (ACK) console or by calling API operations. After a kubeconfig file is renewed, the secret is valid for 3 years. The previous kubeconfig secret remains valid until expiration. We recommend that you renew your kubeconfig file at the earliest opportunity.
     *   *
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
     * @deprecated
     *   *
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterV2UserKubeconfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/vuls',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   *
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @param DescribeClustersV1Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeClustersV1Response
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeClustersV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DescribeEdgeMachineActiveProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DescribeEdgeMachineModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeEdgeMachineModelsResponse
     */
    public function describeEdgeMachineModels()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEdgeMachineModelsWithOptions($headers, $runtime);
    }

    /**
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

        return DescribeEdgeMachineTunnelConfigDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeEdgeMachinesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEdgeMachinesResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeEdgeMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeEventsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * For more information, see [Register an external Kubernetes cluster](~~121053~~).
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExternalAgent',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/external/agent/deployment',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeExternalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information, see [Register an external Kubernetes cluster](~~121053~~).
     *   *
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
     * @param DescribeKubernetesVersionMetadataRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeKubernetesVersionMetadataResponse
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->runtime)) {
            $query['runtime'] = $request->runtime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeKubernetesVersionMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->necessity)) {
            $query['necessity'] = $request->necessity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodePoolVuls',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($nodepoolId) . '/vuls',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DescribePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribePoliciesResponse
     */
    public function describePolicies()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePoliciesWithOptions($headers, $runtime);
    }

    /**
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
            'pathname'    => '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policygovernance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyGovernanceInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $clusterId
     * @param DescribePolicyInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePolicyInstancesResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyInstances',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribePolicyInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyInstancesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **
     *   * ****Only Alibaba Cloud accounts can call this API operation.
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubaccountK8sClusterUserConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/users/' . OpenApiUtilClient::getEncodeParam($Uid) . '/user_config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSubaccountK8sClusterUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   * ****Only Alibaba Cloud accounts can call this API operation.
     *   *
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
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                           $TemplateId
     * @param DescribeTemplateAttributeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTemplateAttributeResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateAttribute',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribeTemplateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTemplatesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $clusterId
     * @param DescribeTriggerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTriggerResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/triggers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/api/v2/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/namespaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribeUserClusterNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/permissions/users/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return DescribeUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DescribeUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserQuotaWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflowsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkflows',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gs/workflows',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflows()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWorkflowsWithOptions($headers, $runtime);
    }

    /**
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
            'body'    => OpenApiUtilClient::parseToMap($body),
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

        return EdgeClusterAddEdgeMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 1.  The Common Vulnerabilities and Exposures (CVE) patching feature is developed based on Security Center. To use this feature, you must purchase the Security Center Ultimate Edition that supports Container Service for Kubernetes (ACK).
     *   * 2.  ACK may need to restart nodes to patch certain vulnerabilities. ACK drains a node before the node restarts. Make sure that the ACK cluster has sufficient idle nodes to host the pods evicted from the trained nodes. For example, you can scale out a node pool before you patch vulnerabilities for the nodes in the node pool.
     *   * 3.  Security Center ensures the compatibility of CVE patches. We recommend that you check the compatibility of a CVE patch with your application before you install the patch. You can pause or cancel a CVE patching task anytime.
     *   * 4.  CVE patching is a progressive task that consists of multiple batches. After you pause or cancel a CVE patching task, ACK continues to process the dispatched batches. Only the batches that have not been dispatched are paused or canceled.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FixNodePoolVuls',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($nodepoolId) . '/vuls/fix',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FixNodePoolVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1.  The Common Vulnerabilities and Exposures (CVE) patching feature is developed based on Security Center. To use this feature, you must purchase the Security Center Ultimate Edition that supports Container Service for Kubernetes (ACK).
     *   * 2.  ACK may need to restart nodes to patch certain vulnerabilities. ACK drains a node before the node restarts. Make sure that the ACK cluster has sufficient idle nodes to host the pods evicted from the trained nodes. For example, you can scale out a node pool before you patch vulnerabilities for the nodes in the node pool.
     *   * 3.  Security Center ensures the compatibility of CVE patches. We recommend that you check the compatibility of a CVE patch with your application before you install the patch. You can pause or cancel a CVE patching task anytime.
     *   * 4.  CVE patching is a progressive task that consists of multiple batches. After you pause or cancel a CVE patching task, ACK continues to process the dispatched batches. Only the batches that have not been dispatched are paused or canceled.
     *   *
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/addon_instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterAddonInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/checks/' . OpenApiUtilClient::getEncodeParam($checkId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetKubernetesTriggerResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKubernetesTrigger',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/triggers/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetKubernetesTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ****
     *   * *   Make sure that you have granted the RAM user at least read-only permissions on the desired ACK clusters in the RAM console. Otherwise, the `ErrorRamPolicyConfig` error code is returned. For more information about how to authorize a RAM user by attaching RAM policies, see [Create a custom RAM policy](~~86485~~).
     *   * *   If you use a RAM user to call this API operation, make sure that the RAM user is authorized to modify the permissions of other RAM users on the desired ACK clusters. Otherwise, the `StatusForbidden` or `ForbiddenGrantPermissions` error code is returned. For more information, see [Use a RAM user to grant RBAC permissions to other RAM users](~~119035~~).
     *   * *   This operation overwrites the permissions that have been granted to the specified RAM user. When you call this operation, make sure that the required permissions are included.
     *   *
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
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'GrantPermissions',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/permissions/users/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   * *   Make sure that you have granted the RAM user at least read-only permissions on the desired ACK clusters in the RAM console. Otherwise, the `ErrorRamPolicyConfig` error code is returned. For more information about how to authorize a RAM user by attaching RAM policies, see [Create a custom RAM policy](~~86485~~).
     *   * *   If you use a RAM user to call this API operation, make sure that the RAM user is authorized to modify the permissions of other RAM users on the desired ACK clusters. Otherwise, the `StatusForbidden` or `ForbiddenGrantPermissions` error code is returned. For more information, see [Use a RAM user to grant RBAC permissions to other RAM users](~~119035~~).
     *   * *   This operation overwrites the permissions that have been granted to the specified RAM user. When you call this operation, make sure that the required permissions are included.
     *   *
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
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'InstallClusterAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return InstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAddonsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAddonsResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/addon_instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterAddonInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $clusterId
     * @param ListClusterChecksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListClusterChecksResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterChecks',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/checks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterChecksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListOperationPlansRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListOperationPlansResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return ListOperationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string                $clusterId
     * @param MigrateClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return MigrateClusterResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MigrateCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/migrate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
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
        if (!Utils::isUnset($request->systemEventsLogging)) {
            $body['system_events_logging'] = $request->systemEventsLogging;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can use this API operation to modify the components in a Container Service for Kubernetes (ACK) cluster or the control plane components in an ACK Pro cluster.
     *   * *   To query the customizable parameters of a component, call the `DescribeClusterAddonMetadata` API operation. For more information, see [Query the metadata of a specified component version](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/query).
     *   * *   For more information about the customizable parameters of control plane components in ACK Pro clusters, see [Customize the parameters of control plane components in ACK Pro clusters](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/customize-control-plane-parameters-for-a-professional-kubernetes-cluster).
     *   * After you call this operation, the component may be redeployed and restarted. We recommend that you assess the impact before you call this operation.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterAddon',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/components/' . OpenApiUtilClient::getEncodeParam($componentId) . '/config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ModifyClusterAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this API operation to modify the components in a Container Service for Kubernetes (ACK) cluster or the control plane components in an ACK Pro cluster.
     *   * *   To query the customizable parameters of a component, call the `DescribeClusterAddonMetadata` API operation. For more information, see [Query the metadata of a specified component version](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/query).
     *   * *   For more information about the customizable parameters of control plane components in ACK Pro clusters, see [Customize the parameters of control plane components in ACK Pro clusters](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/customize-control-plane-parameters-for-a-professional-kubernetes-cluster).
     *   * After you call this operation, the component may be redeployed and restarted. We recommend that you assess the impact before you call this operation.
     *   *
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
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterConfigurationResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterConfiguration',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/configuration',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ModifyClusterConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterTags',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ModifyClusterTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * >  Container Service for Kubernetes (ACK) allows you to modify the kubelet configuration of nodes in a node pool. After you modify the kubelet configuration, the new configuration immediately takes effect on existing nodes in the node pool and is automatically applied to newly added nodes.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodePoolNodeConfig',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/node_config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyNodePoolNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Container Service for Kubernetes (ACK) allows you to modify the kubelet configuration of nodes in a node pool. After you modify the kubelet configuration, the new configuration immediately takes effect on existing nodes in the node pool and is automatically applied to newly added nodes.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyInstance',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/policies/' . OpenApiUtilClient::getEncodeParam($policyName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   You can activate ACK by using Alibaba Cloud accounts.
     *   * *   To activate ACK by using RAM users, you need to grant the AdministratorAccess permission to the RAM users.
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
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

        return OpenAckServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can activate ACK by using Alibaba Cloud accounts.
     *   * *   To activate ACK by using RAM users, you need to grant the AdministratorAccess permission to the RAM users.
     *   *
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
     * @deprecated
     *   *
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
            'action'      => 'PauseClusterUpgrade',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/pause',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PauseClusterUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterid) . '/components/' . OpenApiUtilClient::getEncodeParam($componentid) . '/pause',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PauseComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/pause',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PauseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   * ****
     *   * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     *   * *   Unknown errors may occur when you remove nodes. Before you remove nodes, back up the data on the nodes.
     *   * *   Nodes remain in the Unschedulable state when they are being removed.
     *   * *   You can remove only worker nodes. You cannot remove master nodes.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveClusterNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodes/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return RemoveClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   * ****
     *   * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours.
     *   * *   Unknown errors may occur when you remove nodes. Before you remove nodes, back up the data on the nodes.
     *   * *   Nodes remain in the Unschedulable state when they are being removed.
     *   * *   You can remove only worker nodes. You cannot remove master nodes.
     *   *
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
     * **
     *   * ****
     *   * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours. - The operation may have unexpected risks. Back up the data before you perform this operation. - When the system removes a node, it sets the status of the node to Unschedulable. - The system removes only worker nodes. It does not remove master nodes.
     *   *
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveNodePoolNodes',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/nodes',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveNodePoolNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   * ****
     *   * *   When you remove a node, the pods that run on the node are migrated to other nodes. This may cause service interruptions. We recommend that you remove nodes during off-peak hours. - The operation may have unexpected risks. Back up the data before you perform this operation. - When the system removes a node, it sets the status of the node to Unschedulable. - The system removes only worker nodes. It does not remove master nodes.
     *   *
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
     * @param string         $workflowName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveWorkflowResponse
     */
    public function removeWorkflowWithOptions($workflowName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveWorkflow',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gs/workflow/' . OpenApiUtilClient::getEncodeParam($workflowName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return RemoveWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workflowName
     *
     * @return RemoveWorkflowResponse
     */
    public function removeWorkflow($workflowName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeWorkflowWithOptions($workflowName, $headers, $runtime);
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRestart)) {
            $body['auto_restart'] = $request->autoRestart;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['nodes'] = $request->nodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RepairClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($nodepoolId) . '/repair',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RepairClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterid) . '/components/' . OpenApiUtilClient::getEncodeParam($componentid) . '/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ResumeComponentUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   *
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
            'action'      => 'ResumeUpgradeCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ResumeUpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
     * @param string                 $clusterId
     * @param RunClusterCheckRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RunClusterCheckResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunClusterCheck',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/checks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunClusterCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->count)) {
            $body['count'] = $request->count;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleClusterNodePool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **
     *   * ****The ScaleOutCluster API operation is phased out. You must call the node pool-related API operations to manage nodes. If you want to add worker nodes to a Container Service for Kubernetes (ACK) cluster, call the ScaleClusterNodePool API operation. For more information, see [ScaleClusterNodePool](~~184928~~).
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleOutCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleOutClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   * ****The ScaleOutCluster API operation is phased out. You must call the node pool-related API operations to manage nodes. If you want to add worker nodes to a Container Service for Kubernetes (ACK) cluster, call the ScaleClusterNodePool API operation. For more information, see [ScaleClusterNodePool](~~184928~~).
     *   *
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterId) . '/vuls/scan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScanClusterVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $ClusterId
     * @param StartAlertRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return StartAlertResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartAlert',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/alert_rule/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartWorkflowRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflowWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mappingBamOutFilename)) {
            $body['mapping_bam_out_filename'] = $request->mappingBamOutFilename;
        }
        if (!Utils::isUnset($request->mappingBamOutPath)) {
            $body['mapping_bam_out_path'] = $request->mappingBamOutPath;
        }
        if (!Utils::isUnset($request->mappingBucketName)) {
            $body['mapping_bucket_name'] = $request->mappingBucketName;
        }
        if (!Utils::isUnset($request->mappingFastqFirstFilename)) {
            $body['mapping_fastq_first_filename'] = $request->mappingFastqFirstFilename;
        }
        if (!Utils::isUnset($request->mappingFastqPath)) {
            $body['mapping_fastq_path'] = $request->mappingFastqPath;
        }
        if (!Utils::isUnset($request->mappingFastqSecondFilename)) {
            $body['mapping_fastq_second_filename'] = $request->mappingFastqSecondFilename;
        }
        if (!Utils::isUnset($request->mappingIsMarkDup)) {
            $body['mapping_is_mark_dup'] = $request->mappingIsMarkDup;
        }
        if (!Utils::isUnset($request->mappingOssRegion)) {
            $body['mapping_oss_region'] = $request->mappingOssRegion;
        }
        if (!Utils::isUnset($request->mappingReferencePath)) {
            $body['mapping_reference_path'] = $request->mappingReferencePath;
        }
        if (!Utils::isUnset($request->service)) {
            $body['service'] = $request->service;
        }
        if (!Utils::isUnset($request->wgsBucketName)) {
            $body['wgs_bucket_name'] = $request->wgsBucketName;
        }
        if (!Utils::isUnset($request->wgsFastqFirstFilename)) {
            $body['wgs_fastq_first_filename'] = $request->wgsFastqFirstFilename;
        }
        if (!Utils::isUnset($request->wgsFastqPath)) {
            $body['wgs_fastq_path'] = $request->wgsFastqPath;
        }
        if (!Utils::isUnset($request->wgsFastqSecondFilename)) {
            $body['wgs_fastq_second_filename'] = $request->wgsFastqSecondFilename;
        }
        if (!Utils::isUnset($request->wgsOssRegion)) {
            $body['wgs_oss_region'] = $request->wgsOssRegion;
        }
        if (!Utils::isUnset($request->wgsReferencePath)) {
            $body['wgs_reference_path'] = $request->wgsReferencePath;
        }
        if (!Utils::isUnset($request->wgsVcfOutFilename)) {
            $body['wgs_vcf_out_filename'] = $request->wgsVcfOutFilename;
        }
        if (!Utils::isUnset($request->wgsVcfOutPath)) {
            $body['wgs_vcf_out_path'] = $request->wgsVcfOutPath;
        }
        if (!Utils::isUnset($request->workflowType)) {
            $body['workflow_type'] = $request->workflowType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartWorkflow',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gs/workflow',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartWorkflowRequest $request
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startWorkflowWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string           $ClusterId
     * @param StopAlertRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return StopAlertResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopAlert',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/alert_rule/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/sync_nodepools',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SyncClusterNodePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->addons),
        ]);
        $params = new Params([
            'action'      => 'UnInstallClusterAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UnInstallClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
            'query'   => OpenApiUtilClient::query($query),
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateContactGroupForAlertResponse
     */
    public function updateContactGroupForAlertWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateContactGroupForAlert',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alert/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/alert_rule/contact_groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateContactGroupForAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return UpdateContactGroupForAlertResponse
     */
    public function updateContactGroupForAlert($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContactGroupForAlertWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param UpdateControlPlaneLogRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateControlPlaneLogResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateControlPlaneLog',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/controlplanelog',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateControlPlaneLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * **
     *   * ****
     *   * *   You can call this operation only with an Alibaba Cloud account. - If the kubeconfig file used by your cluster is revoked, the custom validity period of the kubeconfig file is reset. In this case, you need to call this API operation to reconfigure the validity period of the kubeconfig file.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateK8sClusterUserConfigExpire',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/k8s/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/user_config/expire',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   * ****
     *   * *   You can call this operation only with an Alibaba Cloud account. - If the kubeconfig file used by your cluster is revoked, the custom validity period of the kubeconfig file is reset. In this case, you need to call this API operation to reconfigure the validity period of the kubeconfig file.
     *   *
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
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $uid
     * @param UpdateUserPermissionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateUserPermissionsResponse
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
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserPermissions',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/permissions/users/' . OpenApiUtilClient::getEncodeParam($uid) . '/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
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
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeCluster',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClusterAddons',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/components/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpgradeClusterAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This operation allows you to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *   *
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClusterNodepool',
            'version'     => '2015-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/nodepools/' . OpenApiUtilClient::getEncodeParam($NodepoolId) . '/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeClusterNodepoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation allows you to update the Kubernetes version, OS version, or container runtime version of the nodes in a node pool.
     *   *
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
