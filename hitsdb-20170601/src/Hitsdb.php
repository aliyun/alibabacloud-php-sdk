<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\CreateHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\CreateHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DeleteHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DeleteHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceSecurityIpListRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceSecurityIpListResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceClassRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceClassResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceSecurityIpListRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceSecurityIpListResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenameHiTSDBInstanceAliasRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenameHiTSDBInstanceAliasResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenewTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenewTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RestartHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RestartHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\SwitchHiTSDBInstancePublicNetRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\SwitchHiTSDBInstancePublicNetResponse;
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
     * @param CreateHiTSDBInstanceRequest $request CreateHiTSDBInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHiTSDBInstanceResponse CreateHiTSDBInstanceResponse
     */
    public function createHiTSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->diskCategory)) {
            $query['DiskCategory'] = $request->diskCategory;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceAlias)) {
            $query['InstanceAlias'] = $request->instanceAlias;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceStorage)) {
            $query['InstanceStorage'] = $request->instanceStorage;
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
            'action'      => 'CreateHiTSDBInstance',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHiTSDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHiTSDBInstanceRequest $request CreateHiTSDBInstanceRequest
     *
     * @return CreateHiTSDBInstanceResponse CreateHiTSDBInstanceResponse
     */
    public function createHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Time Series Database (TSDB) instance.
     *  *
     * @param DeleteHiTSDBInstanceRequest $request DeleteHiTSDBInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHiTSDBInstanceResponse DeleteHiTSDBInstanceResponse
     */
    public function deleteHiTSDBInstanceWithOptions($request, $runtime)
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
            'action'      => 'DeleteHiTSDBInstance',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHiTSDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Time Series Database (TSDB) instance.
     *  *
     * @param DeleteHiTSDBInstanceRequest $request DeleteHiTSDBInstanceRequest
     *
     * @return DeleteHiTSDBInstanceResponse DeleteHiTSDBInstanceResponse
     */
    public function deleteHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a Time Series Database (TSDB) instance.
     *  *
     * @param DescribeHiTSDBInstanceRequest $request DescribeHiTSDBInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHiTSDBInstanceResponse DescribeHiTSDBInstanceResponse
     */
    public function describeHiTSDBInstanceWithOptions($request, $runtime)
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
            'action'      => 'DescribeHiTSDBInstance',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHiTSDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a Time Series Database (TSDB) instance.
     *  *
     * @param DescribeHiTSDBInstanceRequest $request DescribeHiTSDBInstanceRequest
     *
     * @return DescribeHiTSDBInstanceResponse DescribeHiTSDBInstanceResponse
     */
    public function describeHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHiTSDBInstanceListRequest $request DescribeHiTSDBInstanceListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHiTSDBInstanceListResponse DescribeHiTSDBInstanceListResponse
     */
    public function describeHiTSDBInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHiTSDBInstanceList',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHiTSDBInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHiTSDBInstanceListRequest $request DescribeHiTSDBInstanceListRequest
     *
     * @return DescribeHiTSDBInstanceListResponse DescribeHiTSDBInstanceListResponse
     */
    public function describeHiTSDBInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiTSDBInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHiTSDBInstanceSecurityIpListRequest $request DescribeHiTSDBInstanceSecurityIpListRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHiTSDBInstanceSecurityIpListResponse DescribeHiTSDBInstanceSecurityIpListResponse
     */
    public function describeHiTSDBInstanceSecurityIpListWithOptions($request, $runtime)
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
            'action'      => 'DescribeHiTSDBInstanceSecurityIpList',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHiTSDBInstanceSecurityIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHiTSDBInstanceSecurityIpListRequest $request DescribeHiTSDBInstanceSecurityIpListRequest
     *
     * @return DescribeHiTSDBInstanceSecurityIpListResponse DescribeHiTSDBInstanceSecurityIpListResponse
     */
    public function describeHiTSDBInstanceSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiTSDBInstanceSecurityIpListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions in which Time Series Database (TSDB) instances can be deployed.
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
            'version'     => '2017-06-01',
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
     * @summary Queries the regions in which Time Series Database (TSDB) instances can be deployed.
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
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
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
            'action'      => 'DescribeZones',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHiTSDBInstanceClassRequest $request ModifyHiTSDBInstanceClassRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHiTSDBInstanceClassResponse ModifyHiTSDBInstanceClassResponse
     */
    public function modifyHiTSDBInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceStorage)) {
            $query['InstanceStorage'] = $request->instanceStorage;
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
            'action'      => 'ModifyHiTSDBInstanceClass',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHiTSDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHiTSDBInstanceClassRequest $request ModifyHiTSDBInstanceClassRequest
     *
     * @return ModifyHiTSDBInstanceClassResponse ModifyHiTSDBInstanceClassResponse
     */
    public function modifyHiTSDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHiTSDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHiTSDBInstanceSecurityIpListRequest $request ModifyHiTSDBInstanceSecurityIpListRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHiTSDBInstanceSecurityIpListResponse ModifyHiTSDBInstanceSecurityIpListResponse
     */
    public function modifyHiTSDBInstanceSecurityIpListWithOptions($request, $runtime)
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
            'action'      => 'ModifyHiTSDBInstanceSecurityIpList',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHiTSDBInstanceSecurityIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHiTSDBInstanceSecurityIpListRequest $request ModifyHiTSDBInstanceSecurityIpListRequest
     *
     * @return ModifyHiTSDBInstanceSecurityIpListResponse ModifyHiTSDBInstanceSecurityIpListResponse
     */
    public function modifyHiTSDBInstanceSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHiTSDBInstanceSecurityIpListWithOptions($request, $runtime);
    }

    /**
     * @summary Invoke RenameHiTSDBInstanceAlias to modify the instance alias.
     *  *
     * @param RenameHiTSDBInstanceAliasRequest $request RenameHiTSDBInstanceAliasRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameHiTSDBInstanceAliasResponse RenameHiTSDBInstanceAliasResponse
     */
    public function renameHiTSDBInstanceAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceAlias)) {
            $query['InstanceAlias'] = $request->instanceAlias;
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
            'action'      => 'RenameHiTSDBInstanceAlias',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameHiTSDBInstanceAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Invoke RenameHiTSDBInstanceAlias to modify the instance alias.
     *  *
     * @param RenameHiTSDBInstanceAliasRequest $request RenameHiTSDBInstanceAliasRequest
     *
     * @return RenameHiTSDBInstanceAliasResponse RenameHiTSDBInstanceAliasResponse
     */
    public function renameHiTSDBInstanceAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameHiTSDBInstanceAliasWithOptions($request, $runtime);
    }

    /**
     * @param RenewTSDBInstanceRequest $request RenewTSDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewTSDBInstanceResponse RenewTSDBInstanceResponse
     */
    public function renewTSDBInstanceWithOptions($request, $runtime)
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
            'action'      => 'RenewTSDBInstance',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewTSDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewTSDBInstanceRequest $request RenewTSDBInstanceRequest
     *
     * @return RenewTSDBInstanceResponse RenewTSDBInstanceResponse
     */
    public function renewTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a Time Series Database (TSDB) instance.
     *  *
     * @param RestartHiTSDBInstanceRequest $request RestartHiTSDBInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartHiTSDBInstanceResponse RestartHiTSDBInstanceResponse
     */
    public function restartHiTSDBInstanceWithOptions($request, $runtime)
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
            'action'      => 'RestartHiTSDBInstance',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartHiTSDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts a Time Series Database (TSDB) instance.
     *  *
     * @param RestartHiTSDBInstanceRequest $request RestartHiTSDBInstanceRequest
     *
     * @return RestartHiTSDBInstanceResponse RestartHiTSDBInstanceResponse
     */
    public function restartHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Switches the Internet connection status of a Time Series Database (TSDB) instance.
     *  *
     * @param SwitchHiTSDBInstancePublicNetRequest $request SwitchHiTSDBInstancePublicNetRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchHiTSDBInstancePublicNetResponse SwitchHiTSDBInstancePublicNetResponse
     */
    public function switchHiTSDBInstancePublicNetWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->switchAction)) {
            $query['SwitchAction'] = $request->switchAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchHiTSDBInstancePublicNet',
            'version'     => '2017-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchHiTSDBInstancePublicNetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Switches the Internet connection status of a Time Series Database (TSDB) instance.
     *  *
     * @param SwitchHiTSDBInstancePublicNetRequest $request SwitchHiTSDBInstancePublicNetRequest
     *
     * @return SwitchHiTSDBInstancePublicNetResponse SwitchHiTSDBInstancePublicNetResponse
     */
    public function switchHiTSDBInstancePublicNet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchHiTSDBInstancePublicNetWithOptions($request, $runtime);
    }
}
