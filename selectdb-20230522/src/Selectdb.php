<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckCreateDBInstanceRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckCreateDBInstanceResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckIpExistsInSecurityIpListRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckIpExistsInSecurityIpListResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterBindingRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterBindingResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceShrinkRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateElasticRuleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateElasticRuleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateServiceLinkedRoleForSelectDBRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateServiceLinkedRoleForSelectDBResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateVirtualClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateVirtualClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBClusterBindingRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBClusterBindingResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteElasticRuleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteElasticRuleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteVirtualClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteVirtualClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterStorageLimitationRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterStorageLimitationResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesShrinkRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeElasticRulesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeElasticRulesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\EnDisableScalingRulesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\EnDisableScalingRulesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\GetCreateBEClusterInquiryRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\GetCreateBEClusterInquiryResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\GetModifyBEClusterInquiryRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\GetModifyBEClusterInquiryResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyBEClusterAttributeRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyBEClusterAttributeResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyDBClusterConfigRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyDBClusterConfigResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyElasticRuleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyElasticRuleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifySecurityIPListRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifySecurityIPListResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyVirtualClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ModifyVirtualClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\RestartDBClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\RestartDBClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\StartBEClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\StartBEClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\StopBEClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\StopBEClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceDeploySchemeRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceDeploySchemeResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceDeploySchemeShrinkRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceEngineVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Selectdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('selectdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Applies for a public endpoint for an ApsaraDB for SelectDB instance.
     *
     * @param request - AllocateInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateInstancePublicConnection',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a public endpoint for an ApsaraDB for SelectDB instance.
     *
     * @param request - AllocateInstancePublicConnectionRequest
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
     * @param AllocateInstancePublicConnectionRequest $request
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * 资源转组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 资源转组.
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

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * SelectDB实例创建前检查.
     *
     * @param request - CheckCreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCreateDBInstanceResponse
     *
     * @param CheckCreateDBInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckCreateDBInstanceResponse
     */
    public function checkCreateDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheSize) {
            @$query['CacheSize'] = $request->cacheSize;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCreateDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SelectDB实例创建前检查.
     *
     * @param request - CheckCreateDBInstanceRequest
     *
     * @returns CheckCreateDBInstanceResponse
     *
     * @param CheckCreateDBInstanceRequest $request
     *
     * @return CheckCreateDBInstanceResponse
     */
    public function checkCreateDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreateDBInstanceWithOptions($request, $runtime);
    }

    /**
     * 判断指定 IP 是否已经存在于网络白名单组.
     *
     * @param request - CheckIpExistsInSecurityIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckIpExistsInSecurityIpListResponse
     *
     * @param CheckIpExistsInSecurityIpListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CheckIpExistsInSecurityIpListResponse
     */
    public function checkIpExistsInSecurityIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckIpExistsInSecurityIpList',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckIpExistsInSecurityIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 判断指定 IP 是否已经存在于网络白名单组.
     *
     * @param request - CheckIpExistsInSecurityIpListRequest
     *
     * @returns CheckIpExistsInSecurityIpListResponse
     *
     * @param CheckIpExistsInSecurityIpListRequest $request
     *
     * @return CheckIpExistsInSecurityIpListResponse
     */
    public function checkIpExistsInSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkIpExistsInSecurityIpListWithOptions($request, $runtime);
    }

    /**
     * 检查服务关联角色.
     *
     * @param request - CheckServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceLinkedRole',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查服务关联角色.
     *
     * @param request - CheckServiceLinkedRoleRequest
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * Creates a cluster in an ApsaraDB for SelectDB instance.
     *
     * @remarks
     * > : For an instance that uses the pay-as-you-go billing method, you can create only pay-as-you-go clusters. For an instance that uses the subscription billing method, you can create pay-as-you-go or subscription clusters.
     *
     * @param request - CreateDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBClusterResponse
     *
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheSize) {
            @$query['CacheSize'] = $request->cacheSize;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterNodeCount) {
            @$query['ClusterNodeCount'] = $request->clusterNodeCount;
        }

        if (null !== $request->clusterNodeType) {
            @$query['ClusterNodeType'] = $request->clusterNodeType;
        }

        if (null !== $request->DBClusterClass) {
            @$query['DBClusterClass'] = $request->DBClusterClass;
        }

        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $body = [];
        if (null !== $request->DBInstanceId) {
            @$body['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDBCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster in an ApsaraDB for SelectDB instance.
     *
     * @remarks
     * > : For an instance that uses the pay-as-you-go billing method, you can create only pay-as-you-go clusters. For an instance that uses the subscription billing method, you can create pay-as-you-go or subscription clusters.
     *
     * @param request - CreateDBClusterRequest
     *
     * @returns CreateDBClusterResponse
     *
     * @param CreateDBClusterRequest $request
     *
     * @return CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a binding relationship for clusters. If the zone-redundant storage (ZRS) deployment method is used, you can create a binding relationship between two clusters.
     *
     * @remarks
     * This operation is supported only for instances that use the zone-redundant storage (ZRS) feature and meet the following requirements:
     * *   The instance clusters reside in different zones.
     * *   The billing method of the instance clusters is consistent.
     *
     * @param request - CreateDBClusterBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBClusterBindingResponse
     *
     * @param CreateDBClusterBindingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDBClusterBindingResponse
     */
    public function createDBClusterBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBClusterIdBak) {
            @$query['DBClusterIdBak'] = $request->DBClusterIdBak;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBClusterBinding',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBClusterBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a binding relationship for clusters. If the zone-redundant storage (ZRS) deployment method is used, you can create a binding relationship between two clusters.
     *
     * @remarks
     * This operation is supported only for instances that use the zone-redundant storage (ZRS) feature and meet the following requirements:
     * *   The instance clusters reside in different zones.
     * *   The billing method of the instance clusters is consistent.
     *
     * @param request - CreateDBClusterBindingRequest
     *
     * @returns CreateDBClusterBindingResponse
     *
     * @param CreateDBClusterBindingRequest $request
     *
     * @return CreateDBClusterBindingResponse
     */
    public function createDBClusterBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterBindingWithOptions($request, $runtime);
    }

    /**
     * Creates an ApsaraDB for SelectDB instance.
     *
     * @param tmpReq - CreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDBInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->multiZone) {
            $request->multiZoneShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiZone, 'MultiZone', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->addVPCIPs) {
            @$query['AddVPCIPs'] = $request->addVPCIPs;
        }

        if (null !== $request->cacheSize) {
            @$query['CacheSize'] = $request->cacheSize;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterNodeCount) {
            @$query['ClusterNodeCount'] = $request->clusterNodeCount;
        }

        if (null !== $request->clusterNodeType) {
            @$query['ClusterNodeType'] = $request->clusterNodeType;
        }

        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->deployScheme) {
            @$query['DeployScheme'] = $request->deployScheme;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->multiZoneShrink) {
            @$query['MultiZone'] = $request->multiZoneShrink;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraDB for SelectDB instance.
     *
     * @param request - CreateDBInstanceRequest
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a scheduled scaling rule.
     *
     * @param request - CreateElasticRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateElasticRuleResponse
     *
     * @param CreateElasticRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateElasticRuleResponse
     */
    public function createElasticRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterClass) {
            @$query['ClusterClass'] = $request->clusterClass;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->elasticRuleStartTime) {
            @$query['ElasticRuleStartTime'] = $request->elasticRuleStartTime;
        }

        if (null !== $request->executionPeriod) {
            @$query['ExecutionPeriod'] = $request->executionPeriod;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateElasticRule',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateElasticRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled scaling rule.
     *
     * @param request - CreateElasticRuleRequest
     *
     * @returns CreateElasticRuleResponse
     *
     * @param CreateElasticRuleRequest $request
     *
     * @return CreateElasticRuleResponse
     */
    public function createElasticRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a service-linked role for ApsaraDB for SelectDB.
     *
     * @param request - CreateServiceLinkedRoleForSelectDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleForSelectDBResponse
     *
     * @param CreateServiceLinkedRoleForSelectDBRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateServiceLinkedRoleForSelectDBResponse
     */
    public function createServiceLinkedRoleForSelectDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRoleForSelectDB',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleForSelectDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role for ApsaraDB for SelectDB.
     *
     * @param request - CreateServiceLinkedRoleForSelectDBRequest
     *
     * @returns CreateServiceLinkedRoleForSelectDBResponse
     *
     * @param CreateServiceLinkedRoleForSelectDBRequest $request
     *
     * @return CreateServiceLinkedRoleForSelectDBResponse
     */
    public function createServiceLinkedRoleForSelectDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleForSelectDBWithOptions($request, $runtime);
    }

    /**
     * 创建虚拟集群.
     *
     * @param request - CreateVirtualClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirtualClusterResponse
     *
     * @param CreateVirtualClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateVirtualClusterResponse
     */
    public function createVirtualClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activeClusterId) {
            @$query['ActiveClusterId'] = $request->activeClusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->standbyClusterId) {
            @$query['StandbyClusterId'] = $request->standbyClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVirtualCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirtualClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建虚拟集群.
     *
     * @param request - CreateVirtualClusterRequest
     *
     * @returns CreateVirtualClusterResponse
     *
     * @param CreateVirtualClusterRequest $request
     *
     * @return CreateVirtualClusterResponse
     */
    public function createVirtualCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes a cluster from an instance.
     *
     * @param request - DeleteDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBClusterResponse
     *
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $body = [];
        if (null !== $request->DBInstanceId) {
            @$body['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDBCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cluster from an instance.
     *
     * @param request - DeleteDBClusterRequest
     *
     * @returns DeleteDBClusterResponse
     *
     * @param DeleteDBClusterRequest $request
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes the binding relationship between two clusters for mutual backup.
     *
     * @param request - DeleteDBClusterBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBClusterBindingResponse
     *
     * @param DeleteDBClusterBindingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDBClusterBindingResponse
     */
    public function deleteDBClusterBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBClusterIdBak) {
            @$query['DBClusterIdBak'] = $request->DBClusterIdBak;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBClusterBinding',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBClusterBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the binding relationship between two clusters for mutual backup.
     *
     * @param request - DeleteDBClusterBindingRequest
     *
     * @returns DeleteDBClusterBindingResponse
     *
     * @param DeleteDBClusterBindingRequest $request
     *
     * @return DeleteDBClusterBindingResponse
     */
    public function deleteDBClusterBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterBindingWithOptions($request, $runtime);
    }

    /**
     * 删除DB实例.
     *
     * @param request - DeleteDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $body = [];
        if (null !== $request->DBInstanceId) {
            @$body['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除DB实例.
     *
     * @param request - DeleteDBInstanceRequest
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a scheduled scaling rule.
     *
     * @param request - DeleteElasticRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteElasticRuleResponse
     *
     * @param DeleteElasticRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteElasticRuleResponse
     */
    public function deleteElasticRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteElasticRule',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteElasticRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scheduled scaling rule.
     *
     * @param request - DeleteElasticRuleRequest
     *
     * @returns DeleteElasticRuleResponse
     *
     * @param DeleteElasticRuleRequest $request
     *
     * @return DeleteElasticRuleResponse
     */
    public function deleteElasticRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticRuleWithOptions($request, $runtime);
    }

    /**
     * 删除虚拟集群.
     *
     * @param request - DeleteVirtualClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualClusterResponse
     *
     * @param DeleteVirtualClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteVirtualClusterResponse
     */
    public function deleteVirtualClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirtualClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除虚拟集群.
     *
     * @param request - DeleteVirtualClusterRequest
     *
     * @returns DeleteVirtualClusterResponse
     *
     * @param DeleteVirtualClusterRequest $request
     *
     * @return DeleteVirtualClusterResponse
     */
    public function deleteVirtualCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all instance specifications.
     *
     * @param request - DescribeAllDBInstanceClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllDBInstanceClassResponse
     *
     * @param DescribeAllDBInstanceClassRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAllDBInstanceClassResponse
     */
    public function describeAllDBInstanceClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAllDBInstanceClass',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all instance specifications.
     *
     * @param request - DescribeAllDBInstanceClassRequest
     *
     * @returns DescribeAllDBInstanceClassResponse
     *
     * @param DescribeAllDBInstanceClassRequest $request
     *
     * @return DescribeAllDBInstanceClassResponse
     */
    public function describeAllDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information about a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBClusterConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterConfigResponse
     *
     * @param DescribeDBClusterConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configKey) {
            @$query['ConfigKey'] = $request->configKey;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterConfig',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information about a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBClusterConfigRequest
     *
     * @returns DescribeDBClusterConfigResponse
     *
     * @param DescribeDBClusterConfigRequest $request
     *
     * @return DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration change logs of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBClusterConfigChangeLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterConfigChangeLogsResponse
     *
     * @param DescribeDBClusterConfigChangeLogsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDBClusterConfigChangeLogsResponse
     */
    public function describeDBClusterConfigChangeLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configKey) {
            @$query['ConfigKey'] = $request->configKey;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterConfigChangeLogs',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterConfigChangeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration change logs of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBClusterConfigChangeLogsRequest
     *
     * @returns DescribeDBClusterConfigChangeLogsResponse
     *
     * @param DescribeDBClusterConfigChangeLogsRequest $request
     *
     * @return DescribeDBClusterConfigChangeLogsResponse
     */
    public function describeDBClusterConfigChangeLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigChangeLogsWithOptions($request, $runtime);
    }

    /**
     * 获取集群的各规格缓存限制.
     *
     * @param request - DescribeDBClusterStorageLimitationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterStorageLimitationResponse
     *
     * @param DescribeDBClusterStorageLimitationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDBClusterStorageLimitationResponse
     */
    public function describeDBClusterStorageLimitationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterStorageLimitation',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterStorageLimitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取集群的各规格缓存限制.
     *
     * @param request - DescribeDBClusterStorageLimitationRequest
     *
     * @returns DescribeDBClusterStorageLimitationResponse
     *
     * @param DescribeDBClusterStorageLimitationRequest $request
     *
     * @return DescribeDBClusterStorageLimitationResponse
     */
    public function describeDBClusterStorageLimitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterStorageLimitationWithOptions($request, $runtime);
    }

    /**
     * Queries the details about an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceAttribute',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBInstanceAttributeRequest
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the network information about an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBInstanceNetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceNetInfoResponse
     *
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceNetInfo',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network information about an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeDBInstanceNetInfoRequest
     *
     * @returns DescribeDBInstanceNetInfoResponse
     *
     * @param DescribeDBInstanceNetInfoRequest $request
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information about ApsaraDB for SelectDB instances.
     *
     * @param tmpReq - DescribeDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeDBInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceIds) {
            @$query['DBInstanceIds'] = $request->DBInstanceIds;
        }

        if (null !== $request->DBInstanceStatus) {
            @$query['DBInstanceStatus'] = $request->DBInstanceStatus;
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstances',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about ApsaraDB for SelectDB instances.
     *
     * @param request - DescribeDBInstancesRequest
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $request
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries scheduled scaling rules.
     *
     * @param request - DescribeElasticRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticRulesResponse
     *
     * @param DescribeElasticRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeElasticRulesResponse
     */
    public function describeElasticRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticRules',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scheduled scaling rules.
     *
     * @param request - DescribeElasticRulesRequest
     *
     * @returns DescribeElasticRulesResponse
     *
     * @param DescribeElasticRulesRequest $request
     *
     * @return DescribeElasticRulesResponse
     */
    public function describeElasticRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticRulesWithOptions($request, $runtime);
    }

    /**
     * Queries available regions and zones.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available regions and zones.
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

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the IP addresses in the whitelists of an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeSecurityIPListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIPListResponse
     *
     * @param DescribeSecurityIPListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityIPListResponse
     */
    public function describeSecurityIPListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIPList',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP addresses in the whitelists of an ApsaraDB for SelectDB instance.
     *
     * @param request - DescribeSecurityIPListRequest
     *
     * @returns DescribeSecurityIPListResponse
     *
     * @param DescribeSecurityIPListRequest $request
     *
     * @return DescribeSecurityIPListResponse
     */
    public function describeSecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIPListWithOptions($request, $runtime);
    }

    /**
     * DescribeVSwitches.
     *
     * @param request - DescribeVSwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVSwitches',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeVSwitches.
     *
     * @param request - DescribeVSwitchesRequest
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * DescribeZones.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeZones.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * Uses the scheduled scaling policy.
     *
     * @param request - EnDisableScalingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnDisableScalingRulesResponse
     *
     * @param EnDisableScalingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnDisableScalingRulesResponse
     */
    public function enDisableScalingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingRulesEnable) {
            @$query['ScalingRulesEnable'] = $request->scalingRulesEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnDisableScalingRules',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnDisableScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uses the scheduled scaling policy.
     *
     * @param request - EnDisableScalingRulesRequest
     *
     * @returns EnDisableScalingRulesResponse
     *
     * @param EnDisableScalingRulesRequest $request
     *
     * @return EnDisableScalingRulesResponse
     */
    public function enDisableScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enDisableScalingRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the pricing for creating a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - GetCreateBEClusterInquiryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCreateBEClusterInquiryResponse
     *
     * @param GetCreateBEClusterInquiryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetCreateBEClusterInquiryResponse
     */
    public function getCreateBEClusterInquiryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCreateBEClusterInquiry',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCreateBEClusterInquiryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the pricing for creating a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - GetCreateBEClusterInquiryRequest
     *
     * @returns GetCreateBEClusterInquiryResponse
     *
     * @param GetCreateBEClusterInquiryRequest $request
     *
     * @return GetCreateBEClusterInquiryResponse
     */
    public function getCreateBEClusterInquiry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateBEClusterInquiryWithOptions($request, $runtime);
    }

    /**
     * Queries the pricing for changing the specifications of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - GetModifyBEClusterInquiryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModifyBEClusterInquiryResponse
     *
     * @param GetModifyBEClusterInquiryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetModifyBEClusterInquiryResponse
     */
    public function getModifyBEClusterInquiryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModifyBEClusterInquiry',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModifyBEClusterInquiryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the pricing for changing the specifications of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - GetModifyBEClusterInquiryRequest
     *
     * @returns GetModifyBEClusterInquiryResponse
     *
     * @param GetModifyBEClusterInquiryRequest $request
     *
     * @return GetModifyBEClusterInquiryResponse
     */
    public function getModifyBEClusterInquiry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModifyBEClusterInquiryWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifyBEClusterAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBEClusterAttributeResponse
     *
     * @param ModifyBEClusterAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyBEClusterAttributeResponse
     */
    public function modifyBEClusterAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->instanceAttributeType) {
            @$query['InstanceAttributeType'] = $request->instanceAttributeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBEClusterAttribute',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBEClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifyBEClusterAttributeRequest
     *
     * @returns ModifyBEClusterAttributeResponse
     *
     * @param ModifyBEClusterAttributeRequest $request
     *
     * @return ModifyBEClusterAttributeResponse
     */
    public function modifyBEClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBEClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * 集群变配.
     *
     * @param request - ModifyDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterResponse
     *
     * @param ModifyDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheSize) {
            @$query['CacheSize'] = $request->cacheSize;
        }

        if (null !== $request->clusterNodeCount) {
            @$query['ClusterNodeCount'] = $request->clusterNodeCount;
        }

        if (null !== $request->clusterNodeType) {
            @$query['ClusterNodeType'] = $request->clusterNodeType;
        }

        if (null !== $request->DBClusterClass) {
            @$query['DBClusterClass'] = $request->DBClusterClass;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 集群变配.
     *
     * @param request - ModifyDBClusterRequest
     *
     * @returns ModifyDBClusterResponse
     *
     * @param ModifyDBClusterRequest $request
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifyDBClusterConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterConfigResponse
     *
     * @param ModifyDBClusterConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configKey) {
            @$query['ConfigKey'] = $request->configKey;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->parallelOperation) {
            @$query['ParallelOperation'] = $request->parallelOperation;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterConfig',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifyDBClusterConfigRequest
     *
     * @returns ModifyDBClusterConfigResponse
     *
     * @param ModifyDBClusterConfigRequest $request
     *
     * @return ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the maintenance window or description of an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifyDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceAttributeResponse
     *
     * @param ModifyDBInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->instanceAttributeType) {
            @$query['InstanceAttributeType'] = $request->instanceAttributeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceAttribute',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the maintenance window or description of an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifyDBInstanceAttributeRequest
     *
     * @returns ModifyDBInstanceAttributeResponse
     *
     * @param ModifyDBInstanceAttributeRequest $request
     *
     * @return ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies a scheduled scaling rule.
     *
     * @param request - ModifyElasticRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticRuleResponse
     *
     * @param ModifyElasticRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyElasticRuleResponse
     */
    public function modifyElasticRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterClass) {
            @$query['ClusterClass'] = $request->clusterClass;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->elasticRuleStartTime) {
            @$query['ElasticRuleStartTime'] = $request->elasticRuleStartTime;
        }

        if (null !== $request->executionPeriod) {
            @$query['ExecutionPeriod'] = $request->executionPeriod;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticRule',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyElasticRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a scheduled scaling rule.
     *
     * @param request - ModifyElasticRuleRequest
     *
     * @returns ModifyElasticRuleResponse
     *
     * @param ModifyElasticRuleRequest $request
     *
     * @return ModifyElasticRuleResponse
     */
    public function modifyElasticRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP addresses in a whitelist of an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifySecurityIPListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityIPListResponse
     *
     * @param ModifySecurityIPListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifySecurityIPListResponse
     */
    public function modifySecurityIPListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIPList',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP addresses in a whitelist of an ApsaraDB for SelectDB instance.
     *
     * @param request - ModifySecurityIPListRequest
     *
     * @returns ModifySecurityIPListResponse
     *
     * @param ModifySecurityIPListRequest $request
     *
     * @return ModifySecurityIPListResponse
     */
    public function modifySecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIPListWithOptions($request, $runtime);
    }

    /**
     * 修改虚拟集群.
     *
     * @param request - ModifyVirtualClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVirtualClusterResponse
     *
     * @param ModifyVirtualClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyVirtualClusterResponse
     */
    public function modifyVirtualClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activeClusterId) {
            @$query['ActiveClusterId'] = $request->activeClusterId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->standbyClusterId) {
            @$query['StandbyClusterId'] = $request->standbyClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVirtualCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVirtualClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改虚拟集群.
     *
     * @param request - ModifyVirtualClusterRequest
     *
     * @returns ModifyVirtualClusterResponse
     *
     * @param ModifyVirtualClusterRequest $request
     *
     * @return ModifyVirtualClusterResponse
     */
    public function modifyVirtualCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualClusterWithOptions($request, $runtime);
    }

    /**
     * Releases the public endpoint of an ApsaraDB for SelectDB instance.
     *
     * @param request - ReleaseInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstancePublicConnection',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the public endpoint of an ApsaraDB for SelectDB instance.
     *
     * @param request - ReleaseInstancePublicConnectionRequest
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
     * @param ReleaseInstancePublicConnectionRequest $request
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * Resets the password of an account for an ApsaraDB for SelectDB instance.
     *
     * @param request - ResetAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the password of an account for an ApsaraDB for SelectDB instance.
     *
     * @param request - ResetAccountPasswordRequest
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * Restarts a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - RestartDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBClusterResponse
     *
     * @param RestartDBClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RestartDBClusterResponse
     */
    public function restartDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->parallelOperation) {
            @$query['ParallelOperation'] = $request->parallelOperation;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $body = [];
        if (null !== $request->DBInstanceId) {
            @$body['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartDBCluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a cluster in an ApsaraDB for SelectDB instance.
     *
     * @param request - RestartDBClusterRequest
     *
     * @returns RestartDBClusterResponse
     *
     * @param RestartDBClusterRequest $request
     *
     * @return RestartDBClusterResponse
     */
    public function restartDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBClusterWithOptions($request, $runtime);
    }

    /**
     * 暂停后恢复集群.
     *
     * @param request - StartBEClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartBEClusterResponse
     *
     * @param StartBEClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartBEClusterResponse
     */
    public function startBEClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartBECluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartBEClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停后恢复集群.
     *
     * @param request - StartBEClusterRequest
     *
     * @returns StartBEClusterResponse
     *
     * @param StartBEClusterRequest $request
     *
     * @return StartBEClusterResponse
     */
    public function startBECluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBEClusterWithOptions($request, $runtime);
    }

    /**
     * 暂停BE集群.
     *
     * @param request - StopBEClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopBEClusterResponse
     *
     * @param StopBEClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopBEClusterResponse
     */
    public function stopBEClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopBECluster',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopBEClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停BE集群.
     *
     * @param request - StopBEClusterRequest
     *
     * @returns StopBEClusterResponse
     *
     * @param StopBEClusterRequest $request
     *
     * @return StopBEClusterResponse
     */
    public function stopBECluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopBEClusterWithOptions($request, $runtime);
    }

    /**
     * 资源打用户标签.
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
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-05-22',
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
     * 资源打用户标签.
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
     * 资源去除用户标签.
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
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2023-05-22',
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
     * 资源去除用户标签.
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
     * UpgradeDBInstanceDeployScheme.
     *
     * @param tmpReq - UpgradeDBInstanceDeploySchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBInstanceDeploySchemeResponse
     *
     * @param UpgradeDBInstanceDeploySchemeRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpgradeDBInstanceDeploySchemeResponse
     */
    public function upgradeDBInstanceDeploySchemeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradeDBInstanceDeploySchemeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->multiZone) {
            $request->multiZoneShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiZone, 'MultiZone', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->multiZoneShrink) {
            @$query['MultiZone'] = $request->multiZoneShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBInstanceDeployScheme',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBInstanceDeploySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpgradeDBInstanceDeployScheme.
     *
     * @param request - UpgradeDBInstanceDeploySchemeRequest
     *
     * @returns UpgradeDBInstanceDeploySchemeResponse
     *
     * @param UpgradeDBInstanceDeploySchemeRequest $request
     *
     * @return UpgradeDBInstanceDeploySchemeResponse
     */
    public function upgradeDBInstanceDeployScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceDeploySchemeWithOptions($request, $runtime);
    }

    /**
     * Updates the database engine version of an ApsaraDB for SelectDB instance.
     *
     * @param request - UpgradeDBInstanceEngineVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBInstanceEngineVersionResponse
     *
     * @param UpgradeDBInstanceEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->parallelOperation) {
            @$query['ParallelOperation'] = $request->parallelOperation;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBInstanceEngineVersion',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the database engine version of an ApsaraDB for SelectDB instance.
     *
     * @param request - UpgradeDBInstanceEngineVersionRequest
     *
     * @returns UpgradeDBInstanceEngineVersionResponse
     *
     * @param UpgradeDBInstanceEngineVersionRequest $request
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceEngineVersionWithOptions($request, $runtime);
    }
}
