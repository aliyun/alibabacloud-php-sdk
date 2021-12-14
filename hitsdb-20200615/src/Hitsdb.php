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
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceResponse;
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
        $query                         = [];
        $query['ColdStorage']          = $request->coldStorage;
        $query['CoreSpec']             = $request->coreSpec;
        $query['DiskCategory']         = $request->diskCategory;
        $query['Duration']             = $request->duration;
        $query['FilestoreNum']         = $request->filestoreNum;
        $query['FilestoreSpec']        = $request->filestoreSpec;
        $query['InstanceAlias']        = $request->instanceAlias;
        $query['InstanceStorage']      = $request->instanceStorage;
        $query['LindormNum']           = $request->lindormNum;
        $query['LindormSpec']          = $request->lindormSpec;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['PayType']              = $request->payType;
        $query['PricingCycle']         = $request->pricingCycle;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $query['SolrNum']              = $request->solrNum;
        $query['SolrSpec']             = $request->solrSpec;
        $query['TsdbNum']              = $request->tsdbNum;
        $query['TsdbSpec']             = $request->tsdbSpec;
        $query['VPCId']                = $request->VPCId;
        $query['VSwitchId']            = $request->vSwitchId;
        $query['ZoneId']               = $request->zoneId;
        $req                           = new OpenApiRequest([
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
        $query                         = [];
        $query['AcceptLanguage']       = $request->acceptLanguage;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $req                           = new OpenApiRequest([
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
        $query                         = [];
        $query['GroupName']            = $request->groupName;
        $query['InstanceId']           = $request->instanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $req                           = new OpenApiRequest([
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
        $query                         = [];
        $query['InstanceId']           = $request->instanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $req                           = new OpenApiRequest([
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
        $query                         = [];
        $query['InstanceId']           = $request->instanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $req                           = new OpenApiRequest([
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
        $query                         = [];
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['PageNumber']           = $request->pageNumber;
        $query['PageSize']             = $request->pageSize;
        $query['QueryStr']             = $request->queryStr;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $query['ServiceType']          = $request->serviceType;
        $query['SupportEngine']        = $request->supportEngine;
        $req                           = new OpenApiRequest([
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
     * @param ReleaseLindormInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['InstanceId']           = $request->instanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $req                           = new OpenApiRequest([
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
     * @param UpdateInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['GroupName']            = $request->groupName;
        $query['InstanceId']           = $request->instanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityIpList']       = $request->securityIpList;
        $query['SecurityToken']        = $request->securityToken;
        $req                           = new OpenApiRequest([
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
        $query                         = [];
        $query['ClusterStorage']       = $request->clusterStorage;
        $query['ColdStorage']          = $request->coldStorage;
        $query['CoreNum']              = $request->coreNum;
        $query['CoreSpec']             = $request->coreSpec;
        $query['FilestoreNum']         = $request->filestoreNum;
        $query['FilestoreSpec']        = $request->filestoreSpec;
        $query['InstanceId']           = $request->instanceId;
        $query['LindormNum']           = $request->lindormNum;
        $query['LindormSpec']          = $request->lindormSpec;
        $query['LtsCoreNum']           = $request->ltsCoreNum;
        $query['LtsCoreSpec']          = $request->ltsCoreSpec;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoenixCoreNum']       = $request->phoenixCoreNum;
        $query['PhoenixCoreSpec']      = $request->phoenixCoreSpec;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SecurityToken']        = $request->securityToken;
        $query['SolrNum']              = $request->solrNum;
        $query['SolrSpec']             = $request->solrSpec;
        $query['TsdbNum']              = $request->tsdbNum;
        $query['TsdbSpec']             = $request->tsdbSpec;
        $query['UpgradeType']          = $request->upgradeType;
        $query['ZoneId']               = $request->zoneId;
        $req                           = new OpenApiRequest([
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
