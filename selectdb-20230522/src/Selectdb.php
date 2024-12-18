<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckCreateDBInstanceRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckCreateDBInstanceResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceShrinkRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateElasticRuleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateElasticRuleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateServiceLinkedRoleForSelectDBRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateServiceLinkedRoleForSelectDBResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteElasticRuleRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DeleteElasticRuleResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesShrinkRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeElasticRulesRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeElasticRulesResponse;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListResponse;
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
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Applies for a public endpoint for an ApsaraDB for SelectDB instance.
     *  *
     * @param AllocateInstancePublicConnectionRequest $request AllocateInstancePublicConnectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies for a public endpoint for an ApsaraDB for SelectDB instance.
     *  *
     * @param AllocateInstancePublicConnectionRequest $request AllocateInstancePublicConnectionRequest
     *
     * @return AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary SelectDB实例创建前检查
     *  *
     * @param CheckCreateDBInstanceRequest $request CheckCreateDBInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCreateDBInstanceResponse CheckCreateDBInstanceResponse
     */
    public function checkCreateDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheSize)) {
            $query['CacheSize'] = $request->cacheSize;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCreateDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary SelectDB实例创建前检查
     *  *
     * @param CheckCreateDBInstanceRequest $request CheckCreateDBInstanceRequest
     *
     * @return CheckCreateDBInstanceResponse CheckCreateDBInstanceResponse
     */
    public function checkCreateDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreateDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 检查服务关联角色
     *  *
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查服务关联角色
     *  *
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @description > : For an instance that uses the pay-as-you-go billing method, you can create only pay-as-you-go clusters. For an instance that uses the subscription billing method, you can create pay-as-you-go or subscription clusters.
     *  *
     * @param CreateDBClusterRequest $request CreateDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBClusterResponse CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheSize)) {
            $query['CacheSize'] = $request->cacheSize;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->DBClusterClass)) {
            $query['DBClusterClass'] = $request->DBClusterClass;
        }
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $body = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $body['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDBCluster',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @description > : For an instance that uses the pay-as-you-go billing method, you can create only pay-as-you-go clusters. For an instance that uses the subscription billing method, you can create pay-as-you-go or subscription clusters.
     *  *
     * @param CreateDBClusterRequest $request CreateDBClusterRequest
     *
     * @return CreateDBClusterResponse CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 创建SelectDB实例
     *  *
     * @param CreateDBInstanceRequest $tmpReq  CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cacheSize)) {
            $query['CacheSize'] = $request->cacheSize;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建SelectDB实例
     *  *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建分时弹性规则
     *  *
     * @param CreateElasticRuleRequest $request CreateElasticRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateElasticRuleResponse CreateElasticRuleResponse
     */
    public function createElasticRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterClass)) {
            $query['ClusterClass'] = $request->clusterClass;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->elasticRuleStartTime)) {
            $query['ElasticRuleStartTime'] = $request->elasticRuleStartTime;
        }
        if (!Utils::isUnset($request->executionPeriod)) {
            $query['ExecutionPeriod'] = $request->executionPeriod;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateElasticRule',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateElasticRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建分时弹性规则
     *  *
     * @param CreateElasticRuleRequest $request CreateElasticRuleRequest
     *
     * @return CreateElasticRuleResponse CreateElasticRuleResponse
     */
    public function createElasticRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a service-linked role for ApsaraDB for SelectDB.
     *  *
     * @param CreateServiceLinkedRoleForSelectDBRequest $request CreateServiceLinkedRoleForSelectDBRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleForSelectDBResponse CreateServiceLinkedRoleForSelectDBResponse
     */
    public function createServiceLinkedRoleForSelectDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRoleForSelectDB',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleForSelectDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a service-linked role for ApsaraDB for SelectDB.
     *  *
     * @param CreateServiceLinkedRoleForSelectDBRequest $request CreateServiceLinkedRoleForSelectDBRequest
     *
     * @return CreateServiceLinkedRoleForSelectDBResponse CreateServiceLinkedRoleForSelectDBResponse
     */
    public function createServiceLinkedRoleForSelectDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleForSelectDBWithOptions($request, $runtime);
    }

    /**
     * @summary 释放实例下集群
     *  *
     * @param DeleteDBClusterRequest $request DeleteDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBClusterResponse DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $body['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBCluster',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放实例下集群
     *  *
     * @param DeleteDBClusterRequest $request DeleteDBClusterRequest
     *
     * @return DeleteDBClusterResponse DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 删除DB实例
     *  *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $body['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除DB实例
     *  *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除分时弹性规则
     *  *
     * @param DeleteElasticRuleRequest $request DeleteElasticRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteElasticRuleResponse DeleteElasticRuleResponse
     */
    public function deleteElasticRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteElasticRule',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteElasticRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除分时弹性规则
     *  *
     * @param DeleteElasticRuleRequest $request DeleteElasticRuleRequest
     *
     * @return DeleteElasticRuleResponse DeleteElasticRuleResponse
     */
    public function deleteElasticRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all instance specifications.
     *  *
     * @param DescribeAllDBInstanceClassRequest $request DescribeAllDBInstanceClassRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllDBInstanceClassResponse DescribeAllDBInstanceClassResponse
     */
    public function describeAllDBInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllDBInstanceClass',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all instance specifications.
     *  *
     * @param DescribeAllDBInstanceClassRequest $request DescribeAllDBInstanceClassRequest
     *
     * @return DescribeAllDBInstanceClassResponse DescribeAllDBInstanceClassResponse
     */
    public function describeAllDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration information about a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBClusterConfigRequest $request DescribeDBClusterConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterConfigResponse DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configKey)) {
            $query['ConfigKey'] = $request->configKey;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterConfig',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration information about a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBClusterConfigRequest $request DescribeDBClusterConfigRequest
     *
     * @return DescribeDBClusterConfigResponse DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration change logs of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBClusterConfigChangeLogsRequest $request DescribeDBClusterConfigChangeLogsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterConfigChangeLogsResponse DescribeDBClusterConfigChangeLogsResponse
     */
    public function describeDBClusterConfigChangeLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configKey)) {
            $query['ConfigKey'] = $request->configKey;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterConfigChangeLogs',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterConfigChangeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration change logs of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBClusterConfigChangeLogsRequest $request DescribeDBClusterConfigChangeLogsRequest
     *
     * @return DescribeDBClusterConfigChangeLogsResponse DescribeDBClusterConfigChangeLogsResponse
     */
    public function describeDBClusterConfigChangeLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigChangeLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network information about an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBInstanceNetInfoRequest $request DescribeDBInstanceNetInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceNetInfo',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network information about an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeDBInstanceNetInfoRequest $request DescribeDBInstanceNetInfoRequest
     *
     * @return DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about ApsaraDB for SelectDB instances.
     *  *
     * @param DescribeDBInstancesRequest $tmpReq  DescribeDBInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeDBInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
        }
        if (!Utils::isUnset($request->DBInstanceStatus)) {
            $query['DBInstanceStatus'] = $request->DBInstanceStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about ApsaraDB for SelectDB instances.
     *  *
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询分时弹性规则
     *  *
     * @param DescribeElasticRulesRequest $request DescribeElasticRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticRulesResponse DescribeElasticRulesResponse
     */
    public function describeElasticRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticRules',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询分时弹性规则
     *  *
     * @param DescribeElasticRulesRequest $request DescribeElasticRulesRequest
     *
     * @return DescribeElasticRulesResponse DescribeElasticRulesResponse
     */
    public function describeElasticRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP addresses in the whitelists of an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeSecurityIPListRequest $request DescribeSecurityIPListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityIPListResponse DescribeSecurityIPListResponse
     */
    public function describeSecurityIPListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityIPList',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP addresses in the whitelists of an ApsaraDB for SelectDB instance.
     *  *
     * @param DescribeSecurityIPListRequest $request DescribeSecurityIPListRequest
     *
     * @return DescribeSecurityIPListResponse DescribeSecurityIPListResponse
     */
    public function describeSecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIPListWithOptions($request, $runtime);
    }

    /**
     * @summary 开关分时弹性策略
     *  *
     * @param EnDisableScalingRulesRequest $request EnDisableScalingRulesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return EnDisableScalingRulesResponse EnDisableScalingRulesResponse
     */
    public function enDisableScalingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingRulesEnable)) {
            $query['ScalingRulesEnable'] = $request->scalingRulesEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnDisableScalingRules',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnDisableScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开关分时弹性策略
     *  *
     * @param EnDisableScalingRulesRequest $request EnDisableScalingRulesRequest
     *
     * @return EnDisableScalingRulesResponse EnDisableScalingRulesResponse
     */
    public function enDisableScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enDisableScalingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the pricing for creating a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param GetCreateBEClusterInquiryRequest $request GetCreateBEClusterInquiryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCreateBEClusterInquiryResponse GetCreateBEClusterInquiryResponse
     */
    public function getCreateBEClusterInquiryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreateBEClusterInquiry',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreateBEClusterInquiryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the pricing for creating a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param GetCreateBEClusterInquiryRequest $request GetCreateBEClusterInquiryRequest
     *
     * @return GetCreateBEClusterInquiryResponse GetCreateBEClusterInquiryResponse
     */
    public function getCreateBEClusterInquiry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateBEClusterInquiryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the pricing for changing the specifications of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param GetModifyBEClusterInquiryRequest $request GetModifyBEClusterInquiryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetModifyBEClusterInquiryResponse GetModifyBEClusterInquiryResponse
     */
    public function getModifyBEClusterInquiryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetModifyBEClusterInquiry',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetModifyBEClusterInquiryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the pricing for changing the specifications of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param GetModifyBEClusterInquiryRequest $request GetModifyBEClusterInquiryRequest
     *
     * @return GetModifyBEClusterInquiryResponse GetModifyBEClusterInquiryResponse
     */
    public function getModifyBEClusterInquiry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModifyBEClusterInquiryWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifyBEClusterAttributeRequest $request ModifyBEClusterAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBEClusterAttributeResponse ModifyBEClusterAttributeResponse
     */
    public function modifyBEClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instanceAttributeType)) {
            $query['InstanceAttributeType'] = $request->instanceAttributeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBEClusterAttribute',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBEClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifyBEClusterAttributeRequest $request ModifyBEClusterAttributeRequest
     *
     * @return ModifyBEClusterAttributeResponse ModifyBEClusterAttributeResponse
     */
    public function modifyBEClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBEClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 集群变配
     *  *
     * @param ModifyDBClusterRequest $request ModifyDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterResponse ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheSize)) {
            $query['CacheSize'] = $request->cacheSize;
        }
        if (!Utils::isUnset($request->DBClusterClass)) {
            $query['DBClusterClass'] = $request->DBClusterClass;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBCluster',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 集群变配
     *  *
     * @param ModifyDBClusterRequest $request ModifyDBClusterRequest
     *
     * @return ModifyDBClusterResponse ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifyDBClusterConfigRequest $request ModifyDBClusterConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterConfigResponse ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configKey)) {
            $query['ConfigKey'] = $request->configKey;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterConfig',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifyDBClusterConfigRequest $request ModifyDBClusterConfigRequest
     *
     * @return ModifyDBClusterConfigResponse ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the maintenance window or description of an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifyDBInstanceAttributeRequest $request ModifyDBInstanceAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceAttributeResponse ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instanceAttributeType)) {
            $query['InstanceAttributeType'] = $request->instanceAttributeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceAttribute',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the maintenance window or description of an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifyDBInstanceAttributeRequest $request ModifyDBInstanceAttributeRequest
     *
     * @return ModifyDBInstanceAttributeResponse ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改分时弹性规则
     *  *
     * @param ModifyElasticRuleRequest $request ModifyElasticRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyElasticRuleResponse ModifyElasticRuleResponse
     */
    public function modifyElasticRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterClass)) {
            $query['ClusterClass'] = $request->clusterClass;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->elasticRuleStartTime)) {
            $query['ElasticRuleStartTime'] = $request->elasticRuleStartTime;
        }
        if (!Utils::isUnset($request->executionPeriod)) {
            $query['ExecutionPeriod'] = $request->executionPeriod;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticRule',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyElasticRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改分时弹性规则
     *  *
     * @param ModifyElasticRuleRequest $request ModifyElasticRuleRequest
     *
     * @return ModifyElasticRuleResponse ModifyElasticRuleResponse
     */
    public function modifyElasticRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the IP addresses in a whitelist of an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifySecurityIPListRequest $request ModifySecurityIPListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityIPListResponse ModifySecurityIPListResponse
     */
    public function modifySecurityIPListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIPList',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IP addresses in a whitelist of an ApsaraDB for SelectDB instance.
     *  *
     * @param ModifySecurityIPListRequest $request ModifySecurityIPListRequest
     *
     * @return ModifySecurityIPListResponse ModifySecurityIPListResponse
     */
    public function modifySecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIPListWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of an ApsaraDB for SelectDB instance.
     *  *
     * @param ReleaseInstancePublicConnectionRequest $request ReleaseInstancePublicConnectionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases the public endpoint of an ApsaraDB for SelectDB instance.
     *  *
     * @param ReleaseInstancePublicConnectionRequest $request ReleaseInstancePublicConnectionRequest
     *
     * @return ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the password of an account for an ApsaraDB for SelectDB instance.
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets the password of an account for an ApsaraDB for SelectDB instance.
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param RestartDBClusterRequest $request RestartDBClusterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBClusterResponse RestartDBClusterResponse
     */
    public function restartDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $body['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestartDBCluster',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts a cluster in an ApsaraDB for SelectDB instance.
     *  *
     * @param RestartDBClusterRequest $request RestartDBClusterRequest
     *
     * @return RestartDBClusterResponse RestartDBClusterResponse
     */
    public function restartDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停后恢复集群
     *  *
     * @param StartBEClusterRequest $request StartBEClusterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartBEClusterResponse StartBEClusterResponse
     */
    public function startBEClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartBECluster',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartBEClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停后恢复集群
     *  *
     * @param StartBEClusterRequest $request StartBEClusterRequest
     *
     * @return StartBEClusterResponse StartBEClusterResponse
     */
    public function startBECluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBEClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停BE集群
     *  *
     * @param StopBEClusterRequest $request StopBEClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopBEClusterResponse StopBEClusterResponse
     */
    public function stopBEClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopBECluster',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopBEClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停BE集群
     *  *
     * @param StopBEClusterRequest $request StopBEClusterRequest
     *
     * @return StopBEClusterResponse StopBEClusterResponse
     */
    public function stopBECluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopBEClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the database engine version of an ApsaraDB for SelectDB instance.
     *  *
     * @param UpgradeDBInstanceEngineVersionRequest $request UpgradeDBInstanceEngineVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceEngineVersion',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the database engine version of an ApsaraDB for SelectDB instance.
     *  *
     * @param UpgradeDBInstanceEngineVersionRequest $request UpgradeDBInstanceEngineVersionRequest
     *
     * @return UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceEngineVersionWithOptions($request, $runtime);
    }
}
