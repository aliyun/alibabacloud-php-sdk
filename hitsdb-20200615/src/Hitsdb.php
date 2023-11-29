<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsNamespaceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsNamespaceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsResourceCostRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsResourceCostResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyInstancePayTypeRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyInstancePayTypeResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RenewLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RenewLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SwitchLSQLV3MySQLServiceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SwitchLSQLV3MySQLServiceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpgradeLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpgradeLindormInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Hitsdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hitsdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateLdpsNamespaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLdpsNamespaceResponse
     */
    public function createLdpsNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLdpsNamespace',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLdpsNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLdpsNamespaceRequest $request
     *
     * @return CreateLdpsNamespaceResponse
     */
    public function createLdpsNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLdpsNamespaceWithOptions($request, $runtime);
    }

    /**
     * You must select at least one engine when you create a Lindorm instance. For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine types](~~181971~~) and [Select storage types](~~174643~~).
     *   *
     * @param CreateLindormInstanceRequest $request CreateLindormInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLindormInstanceResponse CreateLindormInstanceResponse
     */
    public function createLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arbiterVSwitchId)) {
            $query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }
        if (!Utils::isUnset($request->arbiterZoneId)) {
            $query['ArbiterZoneId'] = $request->arbiterZoneId;
        }
        if (!Utils::isUnset($request->archVersion)) {
            $query['ArchVersion'] = $request->archVersion;
        }
        if (!Utils::isUnset($request->coldStorage)) {
            $query['ColdStorage'] = $request->coldStorage;
        }
        if (!Utils::isUnset($request->coreSingleStorage)) {
            $query['CoreSingleStorage'] = $request->coreSingleStorage;
        }
        if (!Utils::isUnset($request->coreSpec)) {
            $query['CoreSpec'] = $request->coreSpec;
        }
        if (!Utils::isUnset($request->diskCategory)) {
            $query['DiskCategory'] = $request->diskCategory;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->filestoreNum)) {
            $query['FilestoreNum'] = $request->filestoreNum;
        }
        if (!Utils::isUnset($request->filestoreSpec)) {
            $query['FilestoreSpec'] = $request->filestoreSpec;
        }
        if (!Utils::isUnset($request->instanceAlias)) {
            $query['InstanceAlias'] = $request->instanceAlias;
        }
        if (!Utils::isUnset($request->instanceStorage)) {
            $query['InstanceStorage'] = $request->instanceStorage;
        }
        if (!Utils::isUnset($request->lindormNum)) {
            $query['LindormNum'] = $request->lindormNum;
        }
        if (!Utils::isUnset($request->lindormSpec)) {
            $query['LindormSpec'] = $request->lindormSpec;
        }
        if (!Utils::isUnset($request->logDiskCategory)) {
            $query['LogDiskCategory'] = $request->logDiskCategory;
        }
        if (!Utils::isUnset($request->logNum)) {
            $query['LogNum'] = $request->logNum;
        }
        if (!Utils::isUnset($request->logSingleStorage)) {
            $query['LogSingleStorage'] = $request->logSingleStorage;
        }
        if (!Utils::isUnset($request->logSpec)) {
            $query['LogSpec'] = $request->logSpec;
        }
        if (!Utils::isUnset($request->multiZoneCombination)) {
            $query['MultiZoneCombination'] = $request->multiZoneCombination;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->primaryVSwitchId)) {
            $query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }
        if (!Utils::isUnset($request->primaryZoneId)) {
            $query['PrimaryZoneId'] = $request->primaryZoneId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->solrNum)) {
            $query['SolrNum'] = $request->solrNum;
        }
        if (!Utils::isUnset($request->solrSpec)) {
            $query['SolrSpec'] = $request->solrSpec;
        }
        if (!Utils::isUnset($request->standbyVSwitchId)) {
            $query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }
        if (!Utils::isUnset($request->standbyZoneId)) {
            $query['StandbyZoneId'] = $request->standbyZoneId;
        }
        if (!Utils::isUnset($request->streamNum)) {
            $query['StreamNum'] = $request->streamNum;
        }
        if (!Utils::isUnset($request->streamSpec)) {
            $query['StreamSpec'] = $request->streamSpec;
        }
        if (!Utils::isUnset($request->tsdbNum)) {
            $query['TsdbNum'] = $request->tsdbNum;
        }
        if (!Utils::isUnset($request->tsdbSpec)) {
            $query['TsdbSpec'] = $request->tsdbSpec;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLindormInstance',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must select at least one engine when you create a Lindorm instance. For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine types](~~181971~~) and [Select storage types](~~174643~~).
     *   *
     * @param CreateLindormInstanceRequest $request CreateLindormInstanceRequest
     *
     * @return CreateLindormInstanceResponse CreateLindormInstanceResponse
     */
    public function createLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceIpWhiteList',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceIpWhiteListRequest $request
     *
     * @return GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetLdpsNamespacedQuotaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLdpsNamespacedQuotaResponse
     */
    public function getLdpsNamespacedQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLdpsNamespacedQuota',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLdpsNamespacedQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLdpsNamespacedQuotaRequest $request
     *
     * @return GetLdpsNamespacedQuotaResponse
     */
    public function getLdpsNamespacedQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsNamespacedQuotaWithOptions($request, $runtime);
    }

    /**
     * @param GetLdpsResourceCostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLdpsResourceCostResponse
     */
    public function getLdpsResourceCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLdpsResourceCost',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLdpsResourceCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLdpsResourceCostRequest $request
     *
     * @return GetLdpsResourceCostResponse
     */
    public function getLdpsResourceCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsResourceCostWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLindormInstanceResponse
     */
    public function getLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLindormInstance',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLindormInstanceRequest $request
     *
     * @return GetLindormInstanceResponse
     */
    public function getLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceEngineListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLindormInstanceEngineList',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLindormInstanceEngineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLindormInstanceEngineListRequest $request
     *
     * @return GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceEngineListWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLindormInstanceListResponse
     */
    public function getLindormInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryStr)) {
            $query['QueryStr'] = $request->queryStr;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->supportEngine)) {
            $query['SupportEngine'] = $request->supportEngine;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLindormInstanceList',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLindormInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLindormInstanceListRequest $request
     *
     * @return GetLindormInstanceListResponse
     */
    public function getLindormInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to change the billing method of an instance to subscription or pay-as-you-go.
     *   * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.6345281fu63xJ3#/hitsdb/detail/hitsdb_lindormpre_public_cn) of Lindorm.
     *   *
     * @param ModifyInstancePayTypeRequest $request ModifyInstancePayTypeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstancePayTypeResponse ModifyInstancePayTypeResponse
     */
    public function modifyInstancePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstancePayType',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to change the billing method of an instance to subscription or pay-as-you-go.
     *   * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.6345281fu63xJ3#/hitsdb/detail/hitsdb_lindormpre_public_cn) of Lindorm.
     *   *
     * @param ModifyInstancePayTypeRequest $request ModifyInstancePayTypeRequest
     *
     * @return ModifyInstancePayTypeResponse ModifyInstancePayTypeResponse
     */
    public function modifyInstancePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseLindormInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->immediately)) {
            $query['Immediately'] = $request->immediately;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseLindormInstance',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseLindormInstanceRequest $request
     *
     * @return ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to renew a subscription Lindorm instance for 1 to 9 months or 1 to 3 years.
     *   * Before you call this operation, make sure that you fully understand the billing methods and pricing of Lindorm.
     *   *
     * @param RenewLindormInstanceRequest $request RenewLindormInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewLindormInstanceResponse RenewLindormInstanceResponse
     */
    public function renewLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewLindormInstance',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to renew a subscription Lindorm instance for 1 to 9 months or 1 to 3 years.
     *   * Before you call this operation, make sure that you fully understand the billing methods and pricing of Lindorm.
     *   *
     * @param RenewLindormInstanceRequest $request RenewLindormInstanceRequest
     *
     * @return RenewLindormInstanceResponse RenewLindormInstanceResponse
     */
    public function renewLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchLSQLV3MySQLServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SwitchLSQLV3MySQLServiceResponse
     */
    public function switchLSQLV3MySQLServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchLSQLV3MySQLService',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchLSQLV3MySQLServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchLSQLV3MySQLServiceRequest $request
     *
     * @return SwitchLSQLV3MySQLServiceResponse
     */
    public function switchLSQLV3MySQLService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchLSQLV3MySQLServiceWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delete)) {
            $query['Delete'] = $request->delete;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityIpList)) {
            $query['SecurityIpList'] = $request->securityIpList;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceIpWhiteList',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceIpWhiteListRequest $request
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine typpes](~~181971~~) and [Select storage types](~~174643~~).
     *   *
     * @param UpgradeLindormInstanceRequest $request UpgradeLindormInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeLindormInstanceResponse UpgradeLindormInstanceResponse
     */
    public function upgradeLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterStorage)) {
            $query['ClusterStorage'] = $request->clusterStorage;
        }
        if (!Utils::isUnset($request->coldStorage)) {
            $query['ColdStorage'] = $request->coldStorage;
        }
        if (!Utils::isUnset($request->coreSingleStorage)) {
            $query['CoreSingleStorage'] = $request->coreSingleStorage;
        }
        if (!Utils::isUnset($request->filestoreNum)) {
            $query['FilestoreNum'] = $request->filestoreNum;
        }
        if (!Utils::isUnset($request->filestoreSpec)) {
            $query['FilestoreSpec'] = $request->filestoreSpec;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lindormNum)) {
            $query['LindormNum'] = $request->lindormNum;
        }
        if (!Utils::isUnset($request->lindormSpec)) {
            $query['LindormSpec'] = $request->lindormSpec;
        }
        if (!Utils::isUnset($request->logNum)) {
            $query['LogNum'] = $request->logNum;
        }
        if (!Utils::isUnset($request->logSingleStorage)) {
            $query['LogSingleStorage'] = $request->logSingleStorage;
        }
        if (!Utils::isUnset($request->logSpec)) {
            $query['LogSpec'] = $request->logSpec;
        }
        if (!Utils::isUnset($request->ltsCoreNum)) {
            $query['LtsCoreNum'] = $request->ltsCoreNum;
        }
        if (!Utils::isUnset($request->ltsCoreSpec)) {
            $query['LtsCoreSpec'] = $request->ltsCoreSpec;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->solrNum)) {
            $query['SolrNum'] = $request->solrNum;
        }
        if (!Utils::isUnset($request->solrSpec)) {
            $query['SolrSpec'] = $request->solrSpec;
        }
        if (!Utils::isUnset($request->streamNum)) {
            $query['StreamNum'] = $request->streamNum;
        }
        if (!Utils::isUnset($request->streamSpec)) {
            $query['StreamSpec'] = $request->streamSpec;
        }
        if (!Utils::isUnset($request->tsdbNum)) {
            $query['TsdbNum'] = $request->tsdbNum;
        }
        if (!Utils::isUnset($request->tsdbSpec)) {
            $query['TsdbSpec'] = $request->tsdbSpec;
        }
        if (!Utils::isUnset($request->upgradeType)) {
            $query['UpgradeType'] = $request->upgradeType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeLindormInstance',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine typpes](~~181971~~) and [Select storage types](~~174643~~).
     *   *
     * @param UpgradeLindormInstanceRequest $request UpgradeLindormInstanceRequest
     *
     * @return UpgradeLindormInstanceResponse UpgradeLindormInstanceResponse
     */
    public function upgradeLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeLindormInstanceWithOptions($request, $runtime);
    }
}
