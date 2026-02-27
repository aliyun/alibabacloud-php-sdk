<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\AddGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\AddGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Response;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesShrinkRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DisableSSLConnectionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DisableSSLConnectionResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableSSLConnectionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableSSLConnectionResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\GetInstanceFeatureGateRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\GetInstanceFeatureGateResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\IsolateLeaderRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\IsolateLeaderResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyChargeTypeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyChargeTypeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskNumberRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskNumberResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskPerformanceLevelRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskPerformanceLevelResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskSizeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskSizeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskTypeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskTypeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUpgradableVersionsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUpgradableVersionsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodeGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodeGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TogglePublicSlbRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TogglePublicSlbResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpgradeVersionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpgradeVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Starrocks extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('starrocks', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 新建网关.
     *
     * @param request - AddGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayResponse
     *
     * @param AddGatewayRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddGatewayResponse
     */
    public function addGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feNodeNumber) {
            @$query['FeNodeNumber'] = $request->feNodeNumber;
        }

        if (null !== $request->gatewayName) {
            @$query['GatewayName'] = $request->gatewayName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建网关.
     *
     * @param request - AddGatewayRequest
     *
     * @returns AddGatewayResponse
     *
     * @param AddGatewayRequest $request
     *
     * @return AddGatewayResponse
     */
    public function addGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to modify the resource group of a Serverless StarRocks instance.
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
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceGroup/change',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to modify the resource group of a Serverless StarRocks instance.
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
     * 创建StarRocks集群.
     *
     * @param request - CreateInstanceV1Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceV1Response
     *
     * @param CreateInstanceV1Request $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateInstanceV1Response
     */
    public function createInstanceV1WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adminPassword) {
            @$body['AdminPassword'] = $request->adminPassword;
        }

        if (null !== $request->agentNodeGroup) {
            @$body['AgentNodeGroup'] = $request->agentNodeGroup;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backendNodeGroups) {
            @$body['BackendNodeGroups'] = $request->backendNodeGroups;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dlfCatalogName) {
            @$body['DlfCatalogName'] = $request->dlfCatalogName;
        }

        if (null !== $request->dlfCatalogType) {
            @$body['DlfCatalogType'] = $request->dlfCatalogType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->encrypted) {
            @$body['Encrypted'] = $request->encrypted;
        }

        if (null !== $request->frontendNodeGroups) {
            @$body['FrontendNodeGroups'] = $request->frontendNodeGroups;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->kmsKeyId) {
            @$body['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->linkedRamUserName) {
            @$body['LinkedRamUserName'] = $request->linkedRamUserName;
        }

        if (null !== $request->observerNodeGroups) {
            @$body['ObserverNodeGroups'] = $request->observerNodeGroups;
        }

        if (null !== $request->ossAccessingRoleName) {
            @$body['OssAccessingRoleName'] = $request->ossAccessingRoleName;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->payType) {
            @$body['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->promotionOptionNo) {
            @$body['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->ramUserId) {
            @$body['RamUserId'] = $request->ramUserId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->runMode) {
            @$body['RunMode'] = $request->runMode;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitches) {
            @$body['VSwitches'] = $request->vSwitches;
        }

        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceV1',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/createV1',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建StarRocks集群.
     *
     * @param request - CreateInstanceV1Request
     *
     * @returns CreateInstanceV1Response
     *
     * @param CreateInstanceV1Request $request
     *
     * @return CreateInstanceV1Response
     */
    public function createInstanceV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceV1WithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to create the AliyunServiceRoleForEMRStarRocks role for users.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/user/create_default_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to create the AliyunServiceRoleForEMRStarRocks role for users.
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceLinkedRoleWithOptions($headers, $runtime);
    }

    /**
     * 删除网关.
     *
     * @param request - DeleteGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param DeleteGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除网关.
     *
     * @param request - DeleteGatewayRequest
     *
     * @returns DeleteGatewayResponse
     *
     * @param DeleteGatewayRequest $request
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * This operation is used to query Serverless StarRocks instances, supporting filtering based on instance name or tags and other information.
     *
     * @param tmpReq - DescribeInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/describeInstances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to query Serverless StarRocks instances, supporting filtering based on instance name or tags and other information.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取节点组信息.
     *
     * @param request - DescribeNodeGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeGroupsResponse
     *
     * @param DescribeNodeGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNodeGroupsResponse
     */
    public function describeNodeGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->componentType) {
            @$body['componentType'] = $request->componentType;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupIds) {
            @$body['nodeGroupIds'] = $request->nodeGroupIds;
        }

        if (null !== $request->nodeGroupName) {
            @$body['nodeGroupName'] = $request->nodeGroupName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeGroups',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/nodegroup/describeNodeGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNodeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取节点组信息.
     *
     * @param request - DescribeNodeGroupsRequest
     *
     * @returns DescribeNodeGroupsResponse
     *
     * @param DescribeNodeGroupsRequest $request
     *
     * @return DescribeNodeGroupsResponse
     */
    public function describeNodeGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNodeGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks关闭SSL.
     *
     * @param request - DisableSSLConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSSLConnectionResponse
     *
     * @param DisableSSLConnectionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DisableSSLConnectionResponse
     */
    public function disableSSLConnectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSSLConnection',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/disableSSLConnection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableSSLConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks关闭SSL.
     *
     * @param request - DisableSSLConnectionRequest
     *
     * @returns DisableSSLConnectionResponse
     *
     * @param DisableSSLConnectionRequest $request
     *
     * @return DisableSSLConnectionResponse
     */
    public function disableSSLConnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSSLConnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks开启SSL.
     *
     * @param request - EnableSSLConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSSLConnectionResponse
     *
     * @param EnableSSLConnectionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return EnableSSLConnectionResponse
     */
    public function enableSSLConnectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customSSLCertificate) {
            @$body['CustomSSLCertificate'] = $request->customSSLCertificate;
        }

        if (null !== $request->enableCustom) {
            @$body['EnableCustom'] = $request->enableCustom;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->renewal) {
            @$body['Renewal'] = $request->renewal;
        }

        if (null !== $request->sslKeyPassword) {
            @$body['SslKeyPassword'] = $request->sslKeyPassword;
        }

        if (null !== $request->sslKeystorePassword) {
            @$body['SslKeystorePassword'] = $request->sslKeystorePassword;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableSSLConnection',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/enableSSLConnection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableSSLConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks开启SSL.
     *
     * @param request - EnableSSLConnectionRequest
     *
     * @returns EnableSSLConnectionResponse
     *
     * @param EnableSSLConnectionRequest $request
     *
     * @return EnableSSLConnectionResponse
     */
    public function enableSSLConnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSSLConnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取StarRocks集群实例的特性开关.
     *
     * @param request - GetInstanceFeatureGateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceFeatureGateResponse
     *
     * @param GetInstanceFeatureGateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceFeatureGateResponse
     */
    public function getInstanceFeatureGateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceFeatureGate',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/features/featureGate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceFeatureGateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取StarRocks集群实例的特性开关.
     *
     * @param request - GetInstanceFeatureGateRequest
     *
     * @returns GetInstanceFeatureGateResponse
     *
     * @param GetInstanceFeatureGateRequest $request
     *
     * @return GetInstanceFeatureGateResponse
     */
    public function getInstanceFeatureGate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceFeatureGateWithOptions($request, $headers, $runtime);
    }

    /**
     * 默认网关开启内网SLB.
     *
     * @param request - IsolateLeaderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsolateLeaderResponse
     *
     * @param IsolateLeaderRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return IsolateLeaderResponse
     */
    public function isolateLeaderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isolateLeader) {
            @$query['IsolateLeader'] = $request->isolateLeader;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IsolateLeader',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/isolateLeader',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IsolateLeaderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 默认网关开启内网SLB.
     *
     * @param request - IsolateLeaderRequest
     *
     * @returns IsolateLeaderResponse
     *
     * @param IsolateLeaderRequest $request
     *
     * @return IsolateLeaderResponse
     */
    public function isolateLeader($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->isolateLeaderWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网关列表.
     *
     * @param request - ListGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListGatewayResponse
     */
    public function listGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网关列表.
     *
     * @param request - ListGatewayRequest
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $request
     *
     * @return ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改实例的付费类型.
     *
     * @param request - ModifyChargeTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyChargeTypeResponse
     *
     * @param ModifyChargeTypeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyChargeTypeResponse
     */
    public function modifyChargeTypeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->billingInstanceIds) {
            @$query['BillingInstanceIds'] = $request->billingInstanceIds;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyChargeType',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/modifyChargeType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例的付费类型.
     *
     * @param request - ModifyChargeTypeRequest
     *
     * @returns ModifyChargeTypeResponse
     *
     * @param ModifyChargeTypeRequest $request
     *
     * @return ModifyChargeTypeResponse
     */
    public function modifyChargeType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyChargeTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the number of CUs for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the number of CUs for a warehouse of only StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you modify the number of CUs for a warehouse, the billing of CUs has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of CUs.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of CUs before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyCuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCuResponse
     *
     * @param ModifyCuRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ModifyCuResponse
     */
    public function modifyCuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCu',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyCu',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyCuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the number of CUs for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the number of CUs for a warehouse of only StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you modify the number of CUs for a warehouse, the billing of CUs has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of CUs.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of CUs before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyCuRequest
     *
     * @returns ModifyCuResponse
     *
     * @param ModifyCuRequest $request
     *
     * @return ModifyCuResponse
     */
    public function modifyCu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyCuWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a precheck before you modify the number of CUs for a warehouse.
     *
     * @param request - ModifyCuPreCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCuPreCheckResponse
     *
     * @param ModifyCuPreCheckRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCuPreCheckResponse
     */
    public function modifyCuPreCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCuPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyCuPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyCuPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a precheck before you modify the number of CUs for a warehouse.
     *
     * @param request - ModifyCuPreCheckRequest
     *
     * @returns ModifyCuPreCheckResponse
     *
     * @param ModifyCuPreCheckRequest $request
     *
     * @return ModifyCuPreCheckResponse
     */
    public function modifyCuPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyCuPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Increases the number of disks for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can increase the number of disks only for StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you increase the number of disks for a warehouse, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of disks before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskNumberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskNumberResponse
     *
     * @param ModifyDiskNumberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDiskNumberResponse
     */
    public function modifyDiskNumberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskNumber',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Increases the number of disks for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can increase the number of disks only for StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you increase the number of disks for a warehouse, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of disks before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskNumberRequest
     *
     * @returns ModifyDiskNumberResponse
     *
     * @param ModifyDiskNumberRequest $request
     *
     * @return ModifyDiskNumberResponse
     */
    public function modifyDiskNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the disk performance level for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/en/product/ecs?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.47c9281fkIZGiB#pricing) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the disk performance level only for StarRocks instances of Standard Edition.
     * *   You can modify the disk performance level only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * *   You cannot downgrade the performance level to PL0.
     * *   The performance level of an Enterprise SSD (ESSD) is limited by the ESSD disk size. If you cannot upgrade the performance level of an ESSD, expand the ESSD and try again. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     * After the disk performance level is changed, the billing of the disk has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk performance level before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskPerformanceLevelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskPerformanceLevelResponse
     *
     * @param ModifyDiskPerformanceLevelRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDiskPerformanceLevelResponse
     */
    public function modifyDiskPerformanceLevelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskPerformanceLevel',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskPerformanceLevel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskPerformanceLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the disk performance level for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/en/product/ecs?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.47c9281fkIZGiB#pricing) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the disk performance level only for StarRocks instances of Standard Edition.
     * *   You can modify the disk performance level only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * *   You cannot downgrade the performance level to PL0.
     * *   The performance level of an Enterprise SSD (ESSD) is limited by the ESSD disk size. If you cannot upgrade the performance level of an ESSD, expand the ESSD and try again. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     * After the disk performance level is changed, the billing of the disk has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk performance level before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskPerformanceLevelRequest
     *
     * @returns ModifyDiskPerformanceLevelResponse
     *
     * @param ModifyDiskPerformanceLevelRequest $request
     *
     * @return ModifyDiskPerformanceLevelResponse
     */
    public function modifyDiskPerformanceLevel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskPerformanceLevelWithOptions($request, $headers, $runtime);
    }

    /**
     * Expands the disk size for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can expand the disk size only for StarRocks instances of Standard Edition.
     * *   You can expand the disk size only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you expand the disk size, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk size.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk size before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskSizeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskSizeResponse
     *
     * @param ModifyDiskSizeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskSizeResponse
     */
    public function modifyDiskSizeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskSize',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskSize',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Expands the disk size for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can expand the disk size only for StarRocks instances of Standard Edition.
     * *   You can expand the disk size only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you expand the disk size, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk size.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk size before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskSizeRequest
     *
     * @returns ModifyDiskSizeResponse
     *
     * @param ModifyDiskSizeRequest $request
     *
     * @return ModifyDiskSizeResponse
     */
    public function modifyDiskSize($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskSizeWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组的节点磁盘类型.
     *
     * @param request - ModifyDiskTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskTypeResponse
     *
     * @param ModifyDiskTypeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskTypeResponse
     */
    public function modifyDiskTypeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->targetDiskType) {
            @$query['TargetDiskType'] = $request->targetDiskType;
        }

        if (null !== $request->targetPerformanceLevel) {
            @$query['TargetPerformanceLevel'] = $request->targetPerformanceLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskType',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组的节点磁盘类型.
     *
     * @param request - ModifyDiskTypeRequest
     *
     * @returns ModifyDiskTypeResponse
     *
     * @param ModifyDiskTypeRequest $request
     *
     * @return ModifyDiskTypeResponse
     */
    public function modifyDiskType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can modify the number of nodes in a warehouse of only StarRocks instances of Standard Edition.
     * *   The instance must be in the Running state.
     * *   The number of frontend nodes (FEs) cannot be an even number, and you cannot reduce the number of FE nodes.
     * After you modify the number of nodes in a warehouse, the billing of nodes has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of nodes.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of nodes before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyNodeNumberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeNumberResponse
     *
     * @param ModifyNodeNumberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyNodeNumberResponse
     */
    public function modifyNodeNumberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeNumber',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyNodeNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can modify the number of nodes in a warehouse of only StarRocks instances of Standard Edition.
     * *   The instance must be in the Running state.
     * *   The number of frontend nodes (FEs) cannot be an even number, and you cannot reduce the number of FE nodes.
     * After you modify the number of nodes in a warehouse, the billing of nodes has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of nodes.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of nodes before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyNodeNumberRequest
     *
     * @returns ModifyNodeNumberResponse
     *
     * @param ModifyNodeNumberRequest $request
     *
     * @return ModifyNodeNumberResponse
     */
    public function modifyNodeNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a precheck before you modify the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - ModifyNodeNumberPreCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeNumberPreCheckResponse
     *
     * @param ModifyNodeNumberPreCheckRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyNodeNumberPreCheckResponse
     */
    public function modifyNodeNumberPreCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeNumberPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyNodeNumberPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeNumberPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a precheck before you modify the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - ModifyNodeNumberPreCheckRequest
     *
     * @returns ModifyNodeNumberPreCheckResponse
     *
     * @param ModifyNodeNumberPreCheckRequest $request
     *
     * @return ModifyNodeNumberPreCheckResponse
     */
    public function modifyNodeNumberPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeNumberPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the versions of an E-MapReduce (EMR) Serverless StarRocks instance that the versions that you can upgrade to. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. You can call this operation to query the minor versions or major versions that the versions that you can upgrade to.
     *
     * @param request - QueryUpgradableVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUpgradableVersionsResponse
     *
     * @param QueryUpgradableVersionsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryUpgradableVersionsResponse
     */
    public function queryUpgradableVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minor) {
            @$query['Minor'] = $request->minor;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUpgradableVersions',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/queryUpgradableVersions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryUpgradableVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of an E-MapReduce (EMR) Serverless StarRocks instance that the versions that you can upgrade to. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. You can call this operation to query the minor versions or major versions that the versions that you can upgrade to.
     *
     * @param request - QueryUpgradableVersionsRequest
     *
     * @returns QueryUpgradableVersionsResponse
     *
     * @param QueryUpgradableVersionsRequest $request
     *
     * @return QueryUpgradableVersionsResponse
     */
    public function queryUpgradableVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUpgradableVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Releases a pay-as-you-go E-MapReduce (EMR) Serverless StarRocks instance. To unsubscribe from a subscription instance, go to the Unsubscribe page of the Expenses and Costs console.
     *
     * @remarks
     * *
     * **Warning:** After an instance is released, all physical resources used by the instance are recycled. Relevant data is erased and cannot be restored.
     *
     * @param request - ReleaseInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/release',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go E-MapReduce (EMR) Serverless StarRocks instance. To unsubscribe from a subscription instance, go to the Unsubscribe page of the Expenses and Costs console.
     *
     * @remarks
     * *
     * **Warning:** After an instance is released, all physical resources used by the instance are recycled. Relevant data is erased and cannot be restored.
     *
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * This operation is an asynchronous operation. After you call this operation to restart a StarRocks instance, the operation sets the status of the instance to Restarting and begins the restart process. When the status of the instance changes to Running, the instance is restarted.
     *
     * @param request - RestartInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/restartCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * This operation is an asynchronous operation. After you call this operation to restart a StarRocks instance, the operation sets the status of the instance to Restarting and begins the restart process. When the status of the instance changes to Running, the instance is restarted.
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 重启指定的node group.
     *
     * @param request - RestartNodeGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartNodeGroupResponse
     *
     * @param RestartNodeGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartNodeGroupResponse
     */
    public function restartNodeGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartNodeGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/nodegroup/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启指定的node group.
     *
     * @param request - RestartNodeGroupRequest
     *
     * @returns RestartNodeGroupResponse
     *
     * @param RestartNodeGroupRequest $request
     *
     * @return RestartNodeGroupResponse
     */
    public function restartNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartNodeGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 重启集群中的节点.
     *
     * @param request - RestartNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartNodesResponse
     *
     * @param RestartNodesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RestartNodesResponse
     */
    public function restartNodesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->restartNodeGroups) {
            @$body['RestartNodeGroups'] = $request->restartNodeGroups;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartNodes',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/restart/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启集群中的节点.
     *
     * @param request - RestartNodesRequest
     *
     * @returns RestartNodesResponse
     *
     * @param RestartNodesRequest $request
     *
     * @return RestartNodesResponse
     */
    public function restartNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * 从备份中恢复实例.
     *
     * @param request - RestoreInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adminPassword) {
            @$body['AdminPassword'] = $request->adminPassword;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupTaskId) {
            @$body['BackupTaskId'] = $request->backupTaskId;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->payType) {
            @$body['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitches) {
            @$body['VSwitches'] = $request->vSwitches;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestoreInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/restore/restoreInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从备份中恢复实例.
     *
     * @param request - RestoreInstanceRequest
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 该接口用于恢复来自openlake自动停机的实例。
     *
     * @param request - ResumeInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/lifecycle/resumeInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 该接口用于恢复来自openlake自动停机的实例。
     *
     * @param request - ResumeInstanceRequest
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds a tag to a resource.
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
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a tag to a resource.
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
     * 公网SLB开关.
     *
     * @param request - TogglePublicSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TogglePublicSlbResponse
     *
     * @param TogglePublicSlbRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TogglePublicSlbResponse
     */
    public function togglePublicSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enablePublicSlb) {
            @$query['EnablePublicSlb'] = $request->enablePublicSlb;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TogglePublicSlb',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/togglePublicSlb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TogglePublicSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 公网SLB开关.
     *
     * @param request - TogglePublicSlbRequest
     *
     * @returns TogglePublicSlbResponse
     *
     * @param TogglePublicSlbRequest $request
     *
     * @return TogglePublicSlbResponse
     */
    public function togglePublicSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->togglePublicSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes tags from specified resources.
     *
     * @param tmpReq - UnTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UnTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['TagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from specified resources.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新网关.
     *
     * @param request - UpdateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayResponse
     *
     * @param UpdateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateGatewayResponse
     */
    public function updateGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feNodeNumber) {
            @$query['FeNodeNumber'] = $request->feNodeNumber;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayName) {
            @$query['GatewayName'] = $request->gatewayName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新网关.
     *
     * @param request - UpdateGatewayRequest
     *
     * @returns UpdateGatewayResponse
     *
     * @param UpdateGatewayRequest $request
     *
     * @return UpdateGatewayResponse
     */
    public function updateGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the name of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - UpdateInstanceNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceName',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/update_name',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - UpdateInstanceNameRequest
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNameWithOptions($request, $headers, $runtime);
    }

    /**
     * Upgrades the version of an E-MapReduce (EMR) Serverless StarRocks instance. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. This operation can be used to upgrade the minor version or major version of a StarRocks instance. You can call the QueryUpgradableVersions operation to query the versions that you can upgrade to.
     *
     * @remarks
     * The instance must be in the Running state when you call this operation.
     *
     * @param request - UpgradeVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeVersionResponse
     *
     * @param UpgradeVersionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeVersionResponse
     */
    public function upgradeVersionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minor) {
            @$query['Minor'] = $request->minor;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeVersion',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/upgradeVersion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the version of an E-MapReduce (EMR) Serverless StarRocks instance. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. This operation can be used to upgrade the minor version or major version of a StarRocks instance. You can call the QueryUpgradableVersions operation to query the versions that you can upgrade to.
     *
     * @remarks
     * The instance must be in the Running state when you call this operation.
     *
     * @param request - UpgradeVersionRequest
     *
     * @returns UpgradeVersionResponse
     *
     * @param UpgradeVersionRequest $request
     *
     * @return UpgradeVersionResponse
     */
    public function upgradeVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeVersionWithOptions($request, $headers, $runtime);
    }
}
