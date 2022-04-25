<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceResponse;
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
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'hitsdb.aliyuncs.com',
            'cn-beijing'                  => 'hitsdb.aliyuncs.com',
            'cn-hangzhou'                 => 'hitsdb.aliyuncs.com',
            'cn-shanghai'                 => 'hitsdb.aliyuncs.com',
            'cn-shenzhen'                 => 'hitsdb.aliyuncs.com',
            'cn-hongkong'                 => 'hitsdb.aliyuncs.com',
            'ap-southeast-1'              => 'hitsdb.aliyuncs.com',
            'us-west-1'                   => 'hitsdb.aliyuncs.com',
            'us-east-1'                   => 'hitsdb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'hitsdb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'hitsdb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'hitsdb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'hitsdb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'hitsdb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'hitsdb.aliyuncs.com',
            'cn-chengdu'                  => 'hitsdb.aliyuncs.com',
            'cn-edge-1'                   => 'hitsdb.aliyuncs.com',
            'cn-fujian'                   => 'hitsdb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'hitsdb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'hitsdb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'hitsdb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'hitsdb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'hitsdb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'hitsdb.aliyuncs.com',
            'cn-shanghai-inner'           => 'hitsdb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'hitsdb.aliyuncs.com',
            'cn-wuhan'                    => 'hitsdb.aliyuncs.com',
            'cn-wulanchabu'               => 'hitsdb.aliyuncs.com',
            'cn-yushanfang'               => 'hitsdb.aliyuncs.com',
            'cn-zhangbei'                 => 'hitsdb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'hitsdb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'hitsdb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'hitsdb.aliyuncs.com',
            'eu-west-1-oxs'               => 'hitsdb.aliyuncs.com',
            'me-east-1'                   => 'hitsdb.aliyuncs.com',
            'rus-west-1-pop'              => 'hitsdb.aliyuncs.com',
        ];
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
     * @param CreateLindormInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLindormInstanceResponse
     */
    public function createLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coldStorage)) {
            $query['ColdStorage'] = $request->coldStorage;
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
        if (!Utils::isUnset($request->solrNum)) {
            $query['SolrNum'] = $request->solrNum;
        }
        if (!Utils::isUnset($request->solrSpec)) {
            $query['SolrSpec'] = $request->solrSpec;
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
     * @param CreateLindormInstanceRequest $request
     *
     * @return CreateLindormInstanceResponse
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
     * @param ReleaseLindormInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstanceWithOptions($request, $runtime)
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
     * @param UpgradeLindormInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeLindormInstanceResponse
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
        if (!Utils::isUnset($request->coreNum)) {
            $query['CoreNum'] = $request->coreNum;
        }
        if (!Utils::isUnset($request->coreSpec)) {
            $query['CoreSpec'] = $request->coreSpec;
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
        if (!Utils::isUnset($request->phoenixCoreNum)) {
            $query['PhoenixCoreNum'] = $request->phoenixCoreNum;
        }
        if (!Utils::isUnset($request->phoenixCoreSpec)) {
            $query['PhoenixCoreSpec'] = $request->phoenixCoreSpec;
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
     * @param UpgradeLindormInstanceRequest $request
     *
     * @return UpgradeLindormInstanceResponse
     */
    public function upgradeLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeLindormInstanceWithOptions($request, $runtime);
    }
}
