<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterV2Request;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterV2Response;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2Request;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2Response;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ReleaseClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ReleaseClusterResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ddi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-qingdao'     => 'ddi.cn-qingdao.aliyuncs.com',
            'cn-chengdu'     => 'ddi.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou' => 'ddi.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'   => 'ddi.cn-huhehaote.aliyuncs.com',
            'cn-hongkong'    => 'ddi.cn-hongkong.aliyuncs.com',
            'ap-southeast-2' => 'ddi.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'ddi.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'ddi.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1' => 'ddi.ap-northeast-1.aliyuncs.com',
            'eu-west-1'      => 'ddi.eu-west-1.aliyuncs.com',
            'us-east-1'      => 'ddi.us-east-1.aliyuncs.com',
            'eu-central-1'   => 'ddi.eu-central-1.aliyuncs.com',
            'me-east-1'      => 'ddi.me-east-1.aliyuncs.com',
            'ap-south-1'     => 'ddi.ap-south-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateClusterV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['AuthorizeContent']       = $request->authorizeContent;
        $query['Auto']                   = $request->auto;
        $query['AutoPayOrder']           = $request->autoPayOrder;
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ChargeType']             = $request->chargeType;
        $query['ClickHouseConf']         = $request->clickHouseConf;
        $query['ClientToken']            = $request->clientToken;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['DepositType']            = $request->depositType;
        $query['EmrVer']                 = $request->emrVer;
        $query['EnableEas']              = $request->enableEas;
        $query['EnableHighAvailability'] = $request->enableHighAvailability;
        $query['EnableSsh']              = $request->enableSsh;
        $query['ExtraAttributes']        = $request->extraAttributes;
        $query['HostComponentInfo']      = $request->hostComponentInfo;
        $query['HostGroup']              = $request->hostGroup;
        $query['InitCustomHiveMetaDB']   = $request->initCustomHiveMetaDB;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['KeyPairName']            = $request->keyPairName;
        $query['LogPath']                = $request->logPath;
        $query['MachineType']            = $request->machineType;
        $query['MasterPwd']              = $request->masterPwd;
        $query['MetaStoreConf']          = $request->metaStoreConf;
        $query['MetaStoreType']          = $request->metaStoreType;
        $query['Name']                   = $request->name;
        $query['NetType']                = $request->netType;
        $query['Period']                 = $request->period;
        $query['PromotionInfo']          = $request->promotionInfo;
        $query['RegionId']               = $request->regionId;
        $query['RelatedClusterId']       = $request->relatedClusterId;
        $query['ResourceGroupId']        = $request->resourceGroupId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['SecurityGroupName']      = $request->securityGroupName;
        $query['ServiceInfo']            = $request->serviceInfo;
        $query['Tag']                    = $request->tag;
        $query['UseCustomHiveMetaDB']    = $request->useCustomHiveMetaDB;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['UserInfo']               = $request->userInfo;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['WhiteListType']          = $request->whiteListType;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterV2',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterV2Request $request
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterV2',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterV2Request $request
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterTypeList'] = $request->clusterTypeList;
        $query['CreateType']      = $request->createType;
        $query['DefaultStatus']   = $request->defaultStatus;
        $query['DepositType']     = $request->depositType;
        $query['ExpiredTagList']  = $request->expiredTagList;
        $query['IsDesc']          = $request->isDesc;
        $query['MachineType']     = $request->machineType;
        $query['Name']            = $request->name;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StatusList']      = $request->statusList;
        $query['Tag']             = $request->tag;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseClusterResponse
     */
    public function releaseClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ForceRelease']    = $request->forceRelease;
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCluster',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseClusterRequest $request
     *
     * @return ReleaseClusterResponse
     */
    public function releaseCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterWithOptions($request, $runtime);
    }
}
