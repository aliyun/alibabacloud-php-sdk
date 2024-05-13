<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Adcp\V20220101\Models\AttachClusterToHubRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\AttachClusterToHubResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteHubClusterRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteHubClusterResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteHubClusterShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeletePolicyInstanceRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeletePolicyInstanceResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeletePolicyInstanceShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteUserPermissionRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteUserPermissionResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeployPolicyInstanceRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeployPolicyInstanceResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeployPolicyInstanceShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterKubeconfigRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterKubeconfigResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterLogsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterLogsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePoliciesResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyDetailsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyDetailsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeUserPermissionsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeUserPermissionsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DetachClusterFromHubRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DetachClusterFromHubResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\GrantUserPermissionRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\GrantUserPermissionResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\GrantUserPermissionsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\GrantUserPermissionsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\GrantUserPermissionsShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateHubClusterFeatureRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateHubClusterFeatureResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateHubClusterFeatureShrinkRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateUserPermissionRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateUserPermissionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Adcp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-beijing'            => 'adcp.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'        => 'adcp.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'           => 'adcp.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'adcp.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'adcp.cn-shenzhen.aliyuncs.com',
            'cn-heyuan'             => 'adcp.cn-heyuan.aliyuncs.com',
            'cn-hongkong'           => 'adcp.cn-hongkong.aliyuncs.com',
            'ap-northeast-1'        => 'adcp.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1'        => 'adcp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'adcp.ap-southeast-5.aliyuncs.com',
            'ap-south-1'            => 'adcp.ap-south-1.aliyuncs.com',
            'ap-southeast-2'        => 'adcp.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'adcp.ap-southeast-3.aliyuncs.com',
            'cn-chengdu'            => 'adcp-vpc.cn-chengdu.aliyuncs.com',
            'cn-huhehaote'          => 'adcp.cn-huhehaote.aliyuncs.com',
            'cn-qingdao'            => 'adcp.cn-qingdao.aliyuncs.com',
            'cn-shanghai-finance-1' => 'adcp-vpc.cn-shanghai-finance-1.aliyuncs.com',
            'cn-wulanchabu'         => 'adcp.cn-wulanchabu.aliyuncs.com',
            'eu-central-1'          => 'adcp.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'adcp-vpc.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'adcp.me-east-1.aliyuncs.com',
            'us-east-1'             => 'adcp.us-east-1.aliyuncs.com',
            'us-west-1'             => 'adcp.us-west-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adcp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary You can search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *  *
     * @param AttachClusterToHubRequest $request AttachClusterToHubRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachClusterToHubResponse AttachClusterToHubResponse
     */
    public function attachClusterToHubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachToMesh)) {
            $query['AttachToMesh'] = $request->attachToMesh;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $body['ClusterIds'] = $request->clusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachClusterToHub',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachClusterToHubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *  *
     * @param AttachClusterToHubRequest $request AttachClusterToHubRequest
     *
     * @return AttachClusterToHubResponse AttachClusterToHubResponse
     */
    public function attachClusterToHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachClusterToHubWithOptions($request, $runtime);
    }

    /**
     * @summary 更新资源组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新资源组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a master instance in Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *  *
     * @param CreateHubClusterRequest $tmpReq  CreateHubClusterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHubClusterResponse CreateHubClusterResponse
     */
    public function createHubClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateHubClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->apiServerPublicEip)) {
            $body['ApiServerPublicEip'] = $request->apiServerPublicEip;
        }
        if (!Utils::isUnset($request->argoServerEnabled)) {
            $body['ArgoServerEnabled'] = $request->argoServerEnabled;
        }
        if (!Utils::isUnset($request->auditLogEnabled)) {
            $body['AuditLogEnabled'] = $request->auditLogEnabled;
        }
        if (!Utils::isUnset($request->isEnterpriseSecurityGroup)) {
            $body['IsEnterpriseSecurityGroup'] = $request->isEnterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->priceLimit)) {
            $body['PriceLimit'] = $request->priceLimit;
        }
        if (!Utils::isUnset($request->profile)) {
            $body['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupID)) {
            $body['ResourceGroupID'] = $request->resourceGroupID;
        }
        if (!Utils::isUnset($request->vSwitches)) {
            $body['VSwitches'] = $request->vSwitches;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->workflowScheduleMode)) {
            $body['WorkflowScheduleMode'] = $request->workflowScheduleMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHubCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHubClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a master instance in Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *  *
     * @param CreateHubClusterRequest $request CreateHubClusterRequest
     *
     * @return CreateHubClusterResponse CreateHubClusterResponse
     */
    public function createHubCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHubClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a master cluster in Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *  *
     * @param DeleteHubClusterRequest $tmpReq  DeleteHubClusterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHubClusterResponse DeleteHubClusterResponse
     */
    public function deleteHubClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteHubClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->retainResources)) {
            $request->retainResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retainResources, 'RetainResources', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->retainResourcesShrink)) {
            $query['RetainResources'] = $request->retainResourcesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHubCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHubClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a master cluster in Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *  *
     * @param DeleteHubClusterRequest $request DeleteHubClusterRequest
     *
     * @return DeleteHubClusterResponse DeleteHubClusterResponse
     */
    public function deleteHubCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHubClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a policy for associated clusters.
     *  *
     * @param DeletePolicyInstanceRequest $tmpReq  DeletePolicyInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyInstanceResponse DeletePolicyInstanceResponse
     */
    public function deletePolicyInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeletePolicyInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clusterIds)) {
            $request->clusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterIds, 'ClusterIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterIdsShrink)) {
            $query['ClusterIds'] = $request->clusterIdsShrink;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a policy for associated clusters.
     *  *
     * @param DeletePolicyInstanceRequest $request DeletePolicyInstanceRequest
     *
     * @return DeletePolicyInstanceResponse DeletePolicyInstanceResponse
     */
    public function deletePolicyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the role-based access control (RBAC) permissions of a RAM user.
     *  *
     * @param DeleteUserPermissionRequest $request DeleteUserPermissionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserPermissionResponse DeleteUserPermissionResponse
     */
    public function deleteUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserPermission',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the role-based access control (RBAC) permissions of a RAM user.
     *  *
     * @param DeleteUserPermissionRequest $request DeleteUserPermissionRequest
     *
     * @return DeleteUserPermissionResponse DeleteUserPermissionResponse
     */
    public function deleteUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Deploys a policy instance in the clusters that are associated with a master instance.
     *  *
     * @param DeployPolicyInstanceRequest $tmpReq  DeployPolicyInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployPolicyInstanceResponse DeployPolicyInstanceResponse
     */
    public function deployPolicyInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeployPolicyInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clusterIds)) {
            $request->clusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterIds, 'ClusterIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->namespaces)) {
            $request->namespacesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaces, 'Namespaces', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterIdsShrink)) {
            $query['ClusterIds'] = $request->clusterIdsShrink;
        }
        if (!Utils::isUnset($request->namespacesShrink)) {
            $query['Namespaces'] = $request->namespacesShrink;
        }
        if (!Utils::isUnset($request->policyAction)) {
            $query['PolicyAction'] = $request->policyAction;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployPolicyInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployPolicyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deploys a policy instance in the clusters that are associated with a master instance.
     *  *
     * @param DeployPolicyInstanceRequest $request DeployPolicyInstanceRequest
     *
     * @return DeployPolicyInstanceResponse DeployPolicyInstanceResponse
     */
    public function deployPolicyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployPolicyInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a master instance in Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *  *
     * @param DescribeHubClusterDetailsRequest $request DescribeHubClusterDetailsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHubClusterDetailsResponse DescribeHubClusterDetailsResponse
     */
    public function describeHubClusterDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusterDetails',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClusterDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a master instance in Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *  *
     * @param DescribeHubClusterDetailsRequest $request DescribeHubClusterDetailsRequest
     *
     * @return DescribeHubClusterDetailsResponse DescribeHubClusterDetailsResponse
     */
    public function describeHubClusterDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClusterDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the kubeconfig file of a master instance.
     *  *
     * @param DescribeHubClusterKubeconfigRequest $request DescribeHubClusterKubeconfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHubClusterKubeconfigResponse DescribeHubClusterKubeconfigResponse
     */
    public function describeHubClusterKubeconfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusterKubeconfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClusterKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the kubeconfig file of a master instance.
     *  *
     * @param DescribeHubClusterKubeconfigRequest $request DescribeHubClusterKubeconfigRequest
     *
     * @return DescribeHubClusterKubeconfigResponse DescribeHubClusterKubeconfigResponse
     */
    public function describeHubClusterKubeconfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClusterKubeconfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查查HUB集群日志
     *  *
     * @param DescribeHubClusterLogsRequest $request DescribeHubClusterLogsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHubClusterLogsResponse DescribeHubClusterLogsResponse
     */
    public function describeHubClusterLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusterLogs',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查查HUB集群日志
     *  *
     * @param DescribeHubClusterLogsRequest $request DescribeHubClusterLogsRequest
     *
     * @return DescribeHubClusterLogsResponse DescribeHubClusterLogsResponse
     */
    public function describeHubClusterLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClusterLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Distributed Cloud Container Platform for Kubernetes (ACK One) clusters that are created by the current user.
     *  *
     * @param DescribeHubClustersRequest $tmpReq  DescribeHubClustersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHubClustersResponse DescribeHubClustersResponse
     */
    public function describeHubClustersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeHubClustersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->profile)) {
            $query['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusters',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Distributed Cloud Container Platform for Kubernetes (ACK One) clusters that are created by the current user.
     *  *
     * @param DescribeHubClustersRequest $request DescribeHubClustersRequest
     *
     * @return DescribeHubClustersResponse DescribeHubClustersResponse
     */
    public function describeHubClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Alibaba Cloud CLI allows you to search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *  *
     * @param DescribeManagedClustersRequest $request DescribeManagedClustersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeManagedClustersResponse DescribeManagedClustersResponse
     */
    public function describeManagedClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeManagedClusters',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeManagedClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Alibaba Cloud CLI allows you to search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *  *
     * @param DescribeManagedClustersRequest $request DescribeManagedClustersRequest
     *
     * @return DescribeManagedClustersResponse DescribeManagedClustersResponse
     */
    public function describeManagedClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeManagedClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of policies.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePoliciesResponse DescribePoliciesResponse
     */
    public function describePoliciesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribePolicies',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of policies.
     *  *
     * @return DescribePoliciesResponse DescribePoliciesResponse
     */
    public function describePolicies()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePoliciesWithOptions($runtime);
    }

    /**
     * @summary Queries detailed information about a policy.
     *  *
     * @param DescribePolicyDetailsRequest $request DescribePolicyDetailsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyDetailsResponse DescribePolicyDetailsResponse
     */
    public function describePolicyDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyDetails',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about a policy.
     *  *
     * @param DescribePolicyDetailsRequest $request DescribePolicyDetailsRequest
     *
     * @return DescribePolicyDetailsResponse DescribePolicyDetailsResponse
     */
    public function describePolicyDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about the policies used by the clusters that are associated with a master instance.
     *  *
     * @param DescribePolicyGovernanceInClusterRequest $request DescribePolicyGovernanceInClusterRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyGovernanceInClusterResponse DescribePolicyGovernanceInClusterResponse
     */
    public function describePolicyGovernanceInClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyGovernanceInCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyGovernanceInClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about the policies used by the clusters that are associated with a master instance.
     *  *
     * @param DescribePolicyGovernanceInClusterRequest $request DescribePolicyGovernanceInClusterRequest
     *
     * @return DescribePolicyGovernanceInClusterResponse DescribePolicyGovernanceInClusterResponse
     */
    public function describePolicyGovernanceInCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyGovernanceInClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries policy instances that are deployed in the clusters associated with a master instance.
     *  *
     * @param DescribePolicyInstancesRequest $request DescribePolicyInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyInstancesResponse DescribePolicyInstancesResponse
     */
    public function describePolicyInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyInstances',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries policy instances that are deployed in the clusters associated with a master instance.
     *  *
     * @param DescribePolicyInstancesRequest $request DescribePolicyInstancesRequest
     *
     * @return DescribePolicyInstancesResponse DescribePolicyInstancesResponse
     */
    public function describePolicyInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about policy instances that are deployed in the clusters associated with a master instance.
     *  *
     * @param DescribePolicyInstancesStatusRequest $request DescribePolicyInstancesStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyInstancesStatusResponse DescribePolicyInstancesStatusResponse
     */
    public function describePolicyInstancesStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyInstancesStatus',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyInstancesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about policy instances that are deployed in the clusters associated with a master instance.
     *  *
     * @param DescribePolicyInstancesStatusRequest $request DescribePolicyInstancesStatusRequest
     *
     * @return DescribePolicyInstancesStatusResponse DescribePolicyInstancesStatusResponse
     */
    public function describePolicyInstancesStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyInstancesStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询地域列表
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询地域列表
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Query the permissions of a Resource Access Management (RAM) user.
     *  *
     * @param DescribeUserPermissionsRequest $request DescribeUserPermissionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserPermissionsResponse DescribeUserPermissionsResponse
     */
    public function describeUserPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserPermissions',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the permissions of a Resource Access Management (RAM) user.
     *  *
     * @param DescribeUserPermissionsRequest $request DescribeUserPermissionsRequest
     *
     * @return DescribeUserPermissionsResponse DescribeUserPermissionsResponse
     */
    public function describeUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @summary Alibaba Cloud CLI allows you to search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *  *
     * @param DetachClusterFromHubRequest $request DetachClusterFromHubRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachClusterFromHubResponse DetachClusterFromHubResponse
     */
    public function detachClusterFromHubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->detachFromMesh)) {
            $query['DetachFromMesh'] = $request->detachFromMesh;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $body['ClusterIds'] = $request->clusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachClusterFromHub',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachClusterFromHubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Alibaba Cloud CLI allows you to search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
     *  *
     * @param DetachClusterFromHubRequest $request DetachClusterFromHubRequest
     *
     * @return DetachClusterFromHubResponse DetachClusterFromHubResponse
     */
    public function detachClusterFromHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachClusterFromHubWithOptions($request, $runtime);
    }

    /**
     * @summary Schema of Response
     *  *
     * @param GrantUserPermissionRequest $request GrantUserPermissionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantUserPermissionResponse GrantUserPermissionResponse
     */
    public function grantUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->isRamRole)) {
            $query['IsRamRole'] = $request->isRamRole;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantUserPermission',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Schema of Response
     *  *
     * @param GrantUserPermissionRequest $request GrantUserPermissionRequest
     *
     * @return GrantUserPermissionResponse GrantUserPermissionResponse
     */
    public function grantUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI GrantUserPermissions is deprecated, please use adcp::2022-01-01::GrantUserPermission instead
     *  *
     * @summary Grant permissions to a Resource Access Management (RAM) user.
     *  *
     * Deprecated
     *
     * @param GrantUserPermissionsRequest $tmpReq  GrantUserPermissionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantUserPermissionsResponse GrantUserPermissionsResponse
     */
    public function grantUserPermissionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GrantUserPermissionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permissions)) {
            $request->permissionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->permissionsShrink)) {
            $query['Permissions'] = $request->permissionsShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantUserPermissions',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI GrantUserPermissions is deprecated, please use adcp::2022-01-01::GrantUserPermission instead
     *  *
     * @summary Grant permissions to a Resource Access Management (RAM) user.
     *  *
     * Deprecated
     *
     * @param GrantUserPermissionsRequest $request GrantUserPermissionsRequest
     *
     * @return GrantUserPermissionsResponse GrantUserPermissionsResponse
     */
    public function grantUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of a Container Service for Kubernetes (ACK) cluster that serves as a master instance.
     *  *
     * @param UpdateHubClusterFeatureRequest $tmpReq  UpdateHubClusterFeatureRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHubClusterFeatureResponse UpdateHubClusterFeatureResponse
     */
    public function updateHubClusterFeatureWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHubClusterFeatureShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accessControlList)) {
            $request->accessControlListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accessControlList, 'AccessControlList', 'json');
        }
        if (!Utils::isUnset($tmpReq->vSwitches)) {
            $request->vSwitchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitches, 'VSwitches', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessControlListShrink)) {
            $query['AccessControlList'] = $request->accessControlListShrink;
        }
        if (!Utils::isUnset($request->apiServerEipId)) {
            $query['ApiServerEipId'] = $request->apiServerEipId;
        }
        if (!Utils::isUnset($request->argoCDEnabled)) {
            $query['ArgoCDEnabled'] = $request->argoCDEnabled;
        }
        if (!Utils::isUnset($request->argoCDHAEnabled)) {
            $query['ArgoCDHAEnabled'] = $request->argoCDHAEnabled;
        }
        if (!Utils::isUnset($request->argoEventsEnabled)) {
            $query['ArgoEventsEnabled'] = $request->argoEventsEnabled;
        }
        if (!Utils::isUnset($request->argoServerEnabled)) {
            $query['ArgoServerEnabled'] = $request->argoServerEnabled;
        }
        if (!Utils::isUnset($request->auditLogEnabled)) {
            $query['AuditLogEnabled'] = $request->auditLogEnabled;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->enableMesh)) {
            $query['EnableMesh'] = $request->enableMesh;
        }
        if (!Utils::isUnset($request->gatewayEnabled)) {
            $query['GatewayEnabled'] = $request->gatewayEnabled;
        }
        if (!Utils::isUnset($request->monitorEnabled)) {
            $query['MonitorEnabled'] = $request->monitorEnabled;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->priceLimit)) {
            $query['PriceLimit'] = $request->priceLimit;
        }
        if (!Utils::isUnset($request->publicAccessEnabled)) {
            $query['PublicAccessEnabled'] = $request->publicAccessEnabled;
        }
        if (!Utils::isUnset($request->publicApiServerEnabled)) {
            $query['PublicApiServerEnabled'] = $request->publicApiServerEnabled;
        }
        if (!Utils::isUnset($request->vSwitchesShrink)) {
            $query['VSwitches'] = $request->vSwitchesShrink;
        }
        if (!Utils::isUnset($request->workflowScheduleMode)) {
            $query['WorkflowScheduleMode'] = $request->workflowScheduleMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHubClusterFeature',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHubClusterFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of a Container Service for Kubernetes (ACK) cluster that serves as a master instance.
     *  *
     * @param UpdateHubClusterFeatureRequest $request UpdateHubClusterFeatureRequest
     *
     * @return UpdateHubClusterFeatureResponse UpdateHubClusterFeatureResponse
     */
    public function updateHubClusterFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHubClusterFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the role-based access control (RBAC) permissions of a RAM user.
     *  *
     * @param UpdateUserPermissionRequest $request UpdateUserPermissionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserPermissionResponse UpdateUserPermissionResponse
     */
    public function updateUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserPermission',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the role-based access control (RBAC) permissions of a RAM user.
     *  *
     * @param UpdateUserPermissionRequest $request UpdateUserPermissionRequest
     *
     * @return UpdateUserPermissionResponse UpdateUserPermissionResponse
     */
    public function updateUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserPermissionWithOptions($request, $runtime);
    }
}
