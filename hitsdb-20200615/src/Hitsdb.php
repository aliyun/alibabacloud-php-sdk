<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsNamespaceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsNamespaceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetClientSourceIpRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetClientSourceIpResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetEngineDefaultAuthRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetEngineDefaultAuthResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsComputeGroupResponse;
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
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyInstancePayTypeRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyInstancePayTypeResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputeEngineRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputeEngineResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputePreCheckRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputePreCheckResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RenewLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RenewLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RestartLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RestartLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SwitchLSQLV3MySQLServiceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SwitchLSQLV3MySQLServiceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLdpsComputeGroupResponse;
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
     * @param CreateLdpsComputeGroupRequest $request CreateLdpsComputeGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLdpsComputeGroupResponse CreateLdpsComputeGroupResponse
     */
    public function createLdpsComputeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->properties)) {
            $query['Properties'] = $request->properties;
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
            'action'      => 'CreateLdpsComputeGroup',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLdpsComputeGroupRequest $request CreateLdpsComputeGroupRequest
     *
     * @return CreateLdpsComputeGroupResponse CreateLdpsComputeGroupResponse
     */
    public function createLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateLdpsNamespaceRequest $request CreateLdpsNamespaceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLdpsNamespaceResponse CreateLdpsNamespaceResponse
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
     * @param CreateLdpsNamespaceRequest $request CreateLdpsNamespaceRequest
     *
     * @return CreateLdpsNamespaceResponse CreateLdpsNamespaceResponse
     */
    public function createLdpsNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLdpsNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Lindorm instance.
     *  *
     * @description You must select at least one engine when you create a Lindorm instance. For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine types](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *  *
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
        if (!Utils::isUnset($request->autoRenewDuration)) {
            $query['AutoRenewDuration'] = $request->autoRenewDuration;
        }
        if (!Utils::isUnset($request->autoRenewal)) {
            $query['AutoRenewal'] = $request->autoRenewal;
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
        if (!Utils::isUnset($request->ltsNum)) {
            $query['LtsNum'] = $request->ltsNum;
        }
        if (!Utils::isUnset($request->ltsSpec)) {
            $query['LtsSpec'] = $request->ltsSpec;
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
     * @summary Creates a Lindorm instance.
     *  *
     * @description You must select at least one engine when you create a Lindorm instance. For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine types](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *  *
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
     * @param DeleteLdpsComputeGroupRequest $request DeleteLdpsComputeGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLdpsComputeGroupResponse DeleteLdpsComputeGroupResponse
     */
    public function deleteLdpsComputeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DeleteLdpsComputeGroup',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLdpsComputeGroupRequest $request DeleteLdpsComputeGroupRequest
     *
     * @return DeleteLdpsComputeGroupResponse DeleteLdpsComputeGroupResponse
     */
    public function deleteLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the regions supported by Lindorm.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Obtains the regions supported by Lindorm.
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
     * @param GetClientSourceIpRequest $request GetClientSourceIpRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClientSourceIpResponse GetClientSourceIpResponse
     */
    public function getClientSourceIpWithOptions($request, $runtime)
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
            'action'      => 'GetClientSourceIp',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClientSourceIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClientSourceIpRequest $request GetClientSourceIpRequest
     *
     * @return GetClientSourceIpResponse GetClientSourceIpResponse
     */
    public function getClientSourceIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientSourceIpWithOptions($request, $runtime);
    }

    /**
     * @param GetEngineDefaultAuthRequest $request GetEngineDefaultAuthRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEngineDefaultAuthResponse GetEngineDefaultAuthResponse
     */
    public function getEngineDefaultAuthWithOptions($request, $runtime)
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
            'action'      => 'GetEngineDefaultAuth',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEngineDefaultAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEngineDefaultAuthRequest $request GetEngineDefaultAuthRequest
     *
     * @return GetEngineDefaultAuthResponse GetEngineDefaultAuthResponse
     */
    public function getEngineDefaultAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEngineDefaultAuthWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the whitelists configured for a Lindorm instance.
     *  *
     * @param GetInstanceIpWhiteListRequest $request GetInstanceIpWhiteListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceIpWhiteListResponse GetInstanceIpWhiteListResponse
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
     * @summary Queries the whitelists configured for a Lindorm instance.
     *  *
     * @param GetInstanceIpWhiteListRequest $request GetInstanceIpWhiteListRequest
     *
     * @return GetInstanceIpWhiteListResponse GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceSecurityGroupsRequest $request GetInstanceSecurityGroupsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceSecurityGroupsResponse GetInstanceSecurityGroupsResponse
     */
    public function getInstanceSecurityGroupsWithOptions($request, $runtime)
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
            'action'      => 'GetInstanceSecurityGroups',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceSecurityGroupsRequest $request GetInstanceSecurityGroupsRequest
     *
     * @return GetInstanceSecurityGroupsResponse GetInstanceSecurityGroupsResponse
     */
    public function getInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param GetLdpsComputeGroupRequest $request GetLdpsComputeGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLdpsComputeGroupResponse GetLdpsComputeGroupResponse
     */
    public function getLdpsComputeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'GetLdpsComputeGroup',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLdpsComputeGroupRequest $request GetLdpsComputeGroupRequest
     *
     * @return GetLdpsComputeGroupResponse GetLdpsComputeGroupResponse
     */
    public function getLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetLdpsNamespacedQuotaRequest $request GetLdpsNamespacedQuotaRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLdpsNamespacedQuotaResponse GetLdpsNamespacedQuotaResponse
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
     * @param GetLdpsNamespacedQuotaRequest $request GetLdpsNamespacedQuotaRequest
     *
     * @return GetLdpsNamespacedQuotaResponse GetLdpsNamespacedQuotaResponse
     */
    public function getLdpsNamespacedQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsNamespacedQuotaWithOptions($request, $runtime);
    }

    /**
     * @param GetLdpsResourceCostRequest $request GetLdpsResourceCostRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLdpsResourceCostResponse GetLdpsResourceCostResponse
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
     * @param GetLdpsResourceCostRequest $request GetLdpsResourceCostRequest
     *
     * @return GetLdpsResourceCostResponse GetLdpsResourceCostResponse
     */
    public function getLdpsResourceCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsResourceCostWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the detailed information about a Lindorm instance, including the instance type, billing method, and VPC.
     *  *
     * @param GetLindormInstanceRequest $request GetLindormInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLindormInstanceResponse GetLindormInstanceResponse
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
     * @summary Obtains the detailed information about a Lindorm instance, including the instance type, billing method, and VPC.
     *  *
     * @param GetLindormInstanceRequest $request GetLindormInstanceRequest
     *
     * @return GetLindormInstanceResponse GetLindormInstanceResponse
     */
    public function getLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceEngineListRequest $request GetLindormInstanceEngineListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLindormInstanceEngineListResponse GetLindormInstanceEngineListResponse
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
     * @param GetLindormInstanceEngineListRequest $request GetLindormInstanceEngineListRequest
     *
     * @return GetLindormInstanceEngineListResponse GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceEngineListWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceListRequest $request GetLindormInstanceListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLindormInstanceListResponse GetLindormInstanceListResponse
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
     * @param GetLindormInstanceListRequest $request GetLindormInstanceListRequest
     *
     * @return GetLindormInstanceListResponse GetLindormInstanceListResponse
     */
    public function getLindormInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param ListLdpsComputeGroupsRequest $request ListLdpsComputeGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLdpsComputeGroupsResponse ListLdpsComputeGroupsResponse
     */
    public function listLdpsComputeGroupsWithOptions($request, $runtime)
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
            'action'      => 'ListLdpsComputeGroups',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLdpsComputeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLdpsComputeGroupsRequest $request ListLdpsComputeGroupsRequest
     *
     * @return ListLdpsComputeGroupsResponse ListLdpsComputeGroupsResponse
     */
    public function listLdpsComputeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLdpsComputeGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags associated with the specified Lindorm instance.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the tags associated with the specified Lindorm instance.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of the specified Lindorm instance.
     *  *
     * @description You can call this operation to change the billing method of an instance to subscription or pay-as-you-go.
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.6345281fu63xJ3#/hitsdb/detail/hitsdb_lindormpre_public_cn) of Lindorm.
     *  *
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
     * @summary Changes the billing method of the specified Lindorm instance.
     *  *
     * @description You can call this operation to change the billing method of an instance to subscription or pay-as-you-go.
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.6345281fu63xJ3#/hitsdb/detail/hitsdb_lindormpre_public_cn) of Lindorm.
     *  *
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
     * @param OpenComputeEngineRequest $request OpenComputeEngineRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenComputeEngineResponse OpenComputeEngineResponse
     */
    public function openComputeEngineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cpuLimit)) {
            $query['CpuLimit'] = $request->cpuLimit;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memoryLimit)) {
            $query['MemoryLimit'] = $request->memoryLimit;
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
            'action'      => 'OpenComputeEngine',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenComputeEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenComputeEngineRequest $request OpenComputeEngineRequest
     *
     * @return OpenComputeEngineResponse OpenComputeEngineResponse
     */
    public function openComputeEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openComputeEngineWithOptions($request, $runtime);
    }

    /**
     * @param OpenComputePreCheckRequest $request OpenComputePreCheckRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenComputePreCheckResponse OpenComputePreCheckResponse
     */
    public function openComputePreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cpuLimit)) {
            $query['CpuLimit'] = $request->cpuLimit;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memoryLimit)) {
            $query['MemoryLimit'] = $request->memoryLimit;
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
            'action'      => 'OpenComputePreCheck',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenComputePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenComputePreCheckRequest $request OpenComputePreCheckRequest
     *
     * @return OpenComputePreCheckResponse OpenComputePreCheckResponse
     */
    public function openComputePreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openComputePreCheckWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseLindormInstanceRequest $request ReleaseLindormInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseLindormInstanceResponse ReleaseLindormInstanceResponse
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
     * @param ReleaseLindormInstanceRequest $request ReleaseLindormInstanceRequest
     *
     * @return ReleaseLindormInstanceResponse ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Renews a subscription Lindorm instance.
     *  *
     * @description You can call this operation to renew a subscription Lindorm instance for 1 to 9 months or 1 to 3 years.
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Lindorm.
     *  *
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
     * @summary Renews a subscription Lindorm instance.
     *  *
     * @description You can call this operation to renew a subscription Lindorm instance for 1 to 9 months or 1 to 3 years.
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Lindorm.
     *  *
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
     * @param RestartLdpsComputeGroupRequest $request RestartLdpsComputeGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartLdpsComputeGroupResponse RestartLdpsComputeGroupResponse
     */
    public function restartLdpsComputeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'RestartLdpsComputeGroup',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartLdpsComputeGroupRequest $request RestartLdpsComputeGroupRequest
     *
     * @return RestartLdpsComputeGroupResponse RestartLdpsComputeGroupResponse
     */
    public function restartLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the MySQL compatibility feature for a Lindorm instance.
     *  *
     * @description Prerequisites
     * *   The LindormTable version of your instance is 2.6.0 or later.
     * *   The LindormTable of your instance supports LindormSQL V3. The value of the EnableLsqlVersionV3 parameter in the response of the GetLindormInstance operation is true for Lindorm instances purchased after Oct 24, 2023, which indicates that LindormSQL is supported by these instances by default. If you want to enable LindormSQL for instances purchased before Oct 24, 2023, contact the on-duty technical support.
     * You can enable the MySQL compatibility feature for a Lindorm instance only when the instance meets the preceding requirements.
     *  *
     * @param SwitchLSQLV3MySQLServiceRequest $request SwitchLSQLV3MySQLServiceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchLSQLV3MySQLServiceResponse SwitchLSQLV3MySQLServiceResponse
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
     * @summary Enables or disables the MySQL compatibility feature for a Lindorm instance.
     *  *
     * @description Prerequisites
     * *   The LindormTable version of your instance is 2.6.0 or later.
     * *   The LindormTable of your instance supports LindormSQL V3. The value of the EnableLsqlVersionV3 parameter in the response of the GetLindormInstance operation is true for Lindorm instances purchased after Oct 24, 2023, which indicates that LindormSQL is supported by these instances by default. If you want to enable LindormSQL for instances purchased before Oct 24, 2023, contact the on-duty technical support.
     * You can enable the MySQL compatibility feature for a Lindorm instance only when the instance meets the preceding requirements.
     *  *
     * @param SwitchLSQLV3MySQLServiceRequest $request SwitchLSQLV3MySQLServiceRequest
     *
     * @return SwitchLSQLV3MySQLServiceResponse SwitchLSQLV3MySQLServiceResponse
     */
    public function switchLSQLV3MySQLService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchLSQLV3MySQLServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Associates tags with a single or multiple Lindorm instances.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary Associates tags with a single or multiple Lindorm instances.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from a Lindorm instance.
     *  *
     * @description If a tag is not added to any Lindorm instance, it is deleted.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @summary Removes tags from a Lindorm instance.
     *  *
     * @description If a tag is not added to any Lindorm instance, it is deleted.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Configures an IP address whitelist for a Lindorm instance.
     *  *
     * @param UpdateInstanceIpWhiteListRequest $request UpdateInstanceIpWhiteListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceIpWhiteListResponse UpdateInstanceIpWhiteListResponse
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
     * @summary Configures an IP address whitelist for a Lindorm instance.
     *  *
     * @param UpdateInstanceIpWhiteListRequest $request UpdateInstanceIpWhiteListRequest
     *
     * @return UpdateInstanceIpWhiteListResponse UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceSecurityGroupsRequest $request UpdateInstanceSecurityGroupsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceSecurityGroupsResponse UpdateInstanceSecurityGroupsResponse
     */
    public function updateInstanceSecurityGroupsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->securityGroups)) {
            $query['SecurityGroups'] = $request->securityGroups;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceSecurityGroups',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceSecurityGroupsRequest $request UpdateInstanceSecurityGroupsRequest
     *
     * @return UpdateInstanceSecurityGroupsResponse UpdateInstanceSecurityGroupsResponse
     */
    public function updateInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLdpsComputeGroupRequest $request UpdateLdpsComputeGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLdpsComputeGroupResponse UpdateLdpsComputeGroupResponse
     */
    public function updateLdpsComputeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->properties)) {
            $query['Properties'] = $request->properties;
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
            'action'      => 'UpdateLdpsComputeGroup',
            'version'     => '2020-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLdpsComputeGroupRequest $request UpdateLdpsComputeGroupRequest
     *
     * @return UpdateLdpsComputeGroupResponse UpdateLdpsComputeGroupResponse
     */
    public function updateLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades, scales up, or enable cold storage for a Lindorm instance.
     *  *
     * @description For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine typpes](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *  *
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
     * @summary Upgrades, scales up, or enable cold storage for a Lindorm instance.
     *  *
     * @description For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine typpes](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *  *
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
