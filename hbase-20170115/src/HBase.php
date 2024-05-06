<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\HBase\V20170115\Models\AddUserHdfsInfoRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\AddUserHdfsInfoResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\AllocatePublicNetworkAddressRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\AllocatePublicNetworkAddressResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\CloseBackupRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\CloseBackupResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ConvertClusterRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ConvertClusterResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateClusterRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateClusterResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateGlobalResourceRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateGlobalResourceResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateHbaseSlbServerRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateHbaseSlbServerResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateSubscriptionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\CreateSubscriptionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteGlobalResourceRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteGlobalResourceResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteHbaseSlbServerRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteHbaseSlbServerResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteServerlessInstanceRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteServerlessInstanceResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteUserHdfsInfoRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DeleteUserHdfsInfoResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterListRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterListResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterModelRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterModelResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterWhiteListRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterWhiteListResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeColdStorageRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeColdStorageResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeMultiModDbAttributeRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeMultiModDbAttributeResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeRdsVSwitchsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeRdsVSwitchsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeServerlessInstanceRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeServerlessInstanceResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionInitializeProgressRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionInitializeProgressResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPermissionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPermissionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\EnableServerlessPublicConnectionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\EnableServerlessPublicConnectionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\GetMultimodeCmsUrlRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\GetMultimodeCmsUrlResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigHistoryRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigHistoryResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListHbaseInstancesRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListHbaseInstancesResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterNameRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterNameResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterNetTypeRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterNetTypeResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterSecurityIpListRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterSecurityIpListResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterServiceConfigRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyClusterServiceConfigResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyHasRootPasswordRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyHasRootPasswordResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyRestartClusterRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyRestartClusterResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyRollbackHasForHbaseRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyRollbackHasForHbaseResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifySubscriptionDescriptionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifySubscriptionDescriptionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifySubscriptionMappingRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifySubscriptionMappingResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifySubscriptionPermissionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifySubscriptionPermissionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyUIProxyAccountPasswordRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyUIProxyAccountPasswordResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyUpgradeToHasForHbaseRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ModifyUpgradeToHasForHbaseResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\MultimodAddComponentsRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\MultimodAddComponentsResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\OpenBackupRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\OpenBackupResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\QueryHBaseHaDBRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\QueryHBaseHaDBResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\QuerySparkRelateHBaseRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\QuerySparkRelateHBaseResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\QueryXpackRelatedDBRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\QueryXpackRelatedDBResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\RelateDbForHBaseHaRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\RelateDbForHBaseHaResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ReleasePublicNetworkAddressRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ReleasePublicNetworkAddressResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ReleaseSubscriptionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ReleaseSubscriptionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\RenewClusterRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\RenewClusterResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\ResizeClusterRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\ResizeClusterResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\SparkRelateHBaseRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\SparkRelateHBaseResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\TagResourcesRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\TagResourcesResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\UpgradeMinorVersionRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\UpgradeMinorVersionResponse;
use AlibabaCloud\SDK\HBase\V20170115\Models\XpackRelateDBRequest;
use AlibabaCloud\SDK\HBase\V20170115\Models\XpackRelateDBResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class HBase extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-southeast-1'        => 'hbase.aliyuncs.com',
            'cn-beijing'            => 'hbase.aliyuncs.com',
            'cn-hangzhou'           => 'hbase.aliyuncs.com',
            'cn-hangzhou-finance'   => 'hbase.aliyuncs.com',
            'cn-hongkong'           => 'hbase.aliyuncs.com',
            'cn-north-2-gov-1'      => 'hbase.aliyuncs.com',
            'cn-qingdao'            => 'hbase.aliyuncs.com',
            'cn-shanghai'           => 'hbase.aliyuncs.com',
            'cn-shanghai-finance-1' => 'hbase.aliyuncs.com',
            'cn-shenzhen'           => 'hbase.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'hbase.aliyuncs.com',
            'cn-guangzhou'          => 'hbase.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hbase', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddUserHdfsInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddUserHdfsInfoResponse
     */
    public function addUserHdfsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserHdfsInfo',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserHdfsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserHdfsInfoRequest $request
     *
     * @return AddUserHdfsInfoResponse
     */
    public function addUserHdfsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserHdfsInfoWithOptions($request, $runtime);
    }

    /**
     * @param AllocatePublicNetworkAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocatePublicNetworkAddress',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocatePublicNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocatePublicNetworkAddressRequest $request
     *
     * @return AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param CheckVersionsOfComponentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckVersionsOfComponentsResponse
     */
    public function checkVersionsOfComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckVersionsOfComponents',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckVersionsOfComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckVersionsOfComponentsRequest $request
     *
     * @return CheckVersionsOfComponentsResponse
     */
    public function checkVersionsOfComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVersionsOfComponentsWithOptions($request, $runtime);
    }

    /**
     * @param CloseBackupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseBackupResponse
     */
    public function closeBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseBackup',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseBackupRequest $request
     *
     * @return CloseBackupResponse
     */
    public function closeBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeBackupWithOptions($request, $runtime);
    }

    /**
     * @param ConvertClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConvertClusterResponse
     */
    public function convertClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertCluster',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConvertClusterRequest $request
     *
     * @return ConvertClusterResponse
     */
    public function convertCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $query['CloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->coldStorageSize)) {
            $query['ColdStorageSize'] = $request->coldStorageSize;
        }
        if (!Utils::isUnset($request->coreDiskQuantity)) {
            $query['CoreDiskQuantity'] = $request->coreDiskQuantity;
        }
        if (!Utils::isUnset($request->coreDiskSize)) {
            $query['CoreDiskSize'] = $request->coreDiskSize;
        }
        if (!Utils::isUnset($request->coreDiskType)) {
            $query['CoreDiskType'] = $request->coreDiskType;
        }
        if (!Utils::isUnset($request->coreInstanceQuantity)) {
            $query['CoreInstanceQuantity'] = $request->coreInstanceQuantity;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->dbInstanceConnType)) {
            $query['DbInstanceConnType'] = $request->dbInstanceConnType;
        }
        if (!Utils::isUnset($request->dbInstanceType)) {
            $query['DbInstanceType'] = $request->dbInstanceType;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->depMode)) {
            $query['DepMode'] = $request->depMode;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->isColdStorage)) {
            $query['IsColdStorage'] = $request->isColdStorage;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
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
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->srcDBInstanceId)) {
            $query['SrcDBInstanceId'] = $request->srcDBInstanceId;
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
            'action'      => 'CreateCluster',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateGlobalResourceResponse
     */
    public function createGlobalResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGlobalResource',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGlobalResourceRequest $request
     *
     * @return CreateGlobalResourceResponse
     */
    public function createGlobalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalResourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateHbaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHbaseSlbServerResponse
     */
    public function createHbaseSlbServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->slbServer)) {
            $query['SlbServer'] = $request->slbServer;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHbaseSlbServer',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHbaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHbaseSlbServerRequest $request
     *
     * @return CreateHbaseSlbServerResponse
     */
    public function createHbaseSlbServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHbaseSlbServerWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationInstanceId)) {
            $query['DestinationInstanceId'] = $request->destinationInstanceId;
        }
        if (!Utils::isUnset($request->destinationInstanceRegionId)) {
            $query['DestinationInstanceRegionId'] = $request->destinationInstanceRegionId;
        }
        if (!Utils::isUnset($request->extraContext)) {
            $query['ExtraContext'] = $request->extraContext;
        }
        if (!Utils::isUnset($request->mapping)) {
            $query['Mapping'] = $request->mapping;
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
        if (!Utils::isUnset($request->slbServer)) {
            $query['SlbServer'] = $request->slbServer;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->sourceInstanceRegionId)) {
            $query['SourceInstanceRegionId'] = $request->sourceInstanceRegionId;
        }
        if (!Utils::isUnset($request->subscriptionDescription)) {
            $query['SubscriptionDescription'] = $request->subscriptionDescription;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscription',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubscriptionRequest $request
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGlobalResourceResponse
     */
    public function deleteGlobalResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGlobalResource',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGlobalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGlobalResourceRequest $request
     *
     * @return DeleteGlobalResourceResponse
     */
    public function deleteGlobalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHbaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHbaseSlbServerResponse
     */
    public function deleteHbaseSlbServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->slbServer)) {
            $query['SlbServer'] = $request->slbServer;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHbaseSlbServer',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHbaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHbaseSlbServerRequest $request
     *
     * @return DeleteHbaseSlbServerResponse
     */
    public function deleteHbaseSlbServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHbaseSlbServerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServerlessInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteServerlessInstanceResponse
     */
    public function deleteServerlessInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServerlessInstance',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServerlessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServerlessInstanceRequest $request
     *
     * @return DeleteServerlessInstanceResponse
     */
    public function deleteServerlessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerlessInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserHdfsInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteUserHdfsInfoResponse
     */
    public function deleteUserHdfsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nameService)) {
            $query['NameService'] = $request->nameService;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserHdfsInfo',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserHdfsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserHdfsInfoRequest $request
     *
     * @return DeleteUserHdfsInfoResponse
     */
    public function deleteUserHdfsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserHdfsInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endTimeUTC)) {
            $query['EndTimeUTC'] = $request->endTimeUTC;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->startTimeUTC)) {
            $query['StartTimeUTC'] = $request->startTimeUTC;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackups',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupsRequest $request
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterAttributeResponse
     */
    public function describeClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAttribute',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterAttributeRequest $request
     *
     * @return DescribeClusterAttributeResponse
     */
    public function describeClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterConnectAddrsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeClusterConnectAddrsResponse
     */
    public function describeClusterConnectAddrsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterConnectAddrs',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterConnectAddrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterConnectAddrsRequest $request
     *
     * @return DescribeClusterConnectAddrsResponse
     */
    public function describeClusterConnectAddrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterConnectAddrsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeClusterListResponse
     */
    public function describeClusterListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterList',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterListRequest $request
     *
     * @return DescribeClusterListResponse
     */
    public function describeClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterModelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterModelResponse
     */
    public function describeClusterModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterModel',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterModelRequest $request
     *
     * @return DescribeClusterModelResponse
     */
    public function describeClusterModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterModelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterWhiteListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterWhiteListResponse
     */
    public function describeClusterWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterWhiteList',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterWhiteListRequest $request
     *
     * @return DescribeClusterWhiteListResponse
     */
    public function describeClusterWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeColdStorageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeColdStorageResponse
     */
    public function describeColdStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeColdStorage',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeColdStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeColdStorageRequest $request
     *
     * @return DescribeColdStorageResponse
     */
    public function describeColdStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColdStorageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMultiModDbAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMultiModDbAttributeResponse
     */
    public function describeMultiModDbAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMultiModDbAttribute',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMultiModDbAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMultiModDbAttributeRequest $request
     *
     * @return DescribeMultiModDbAttributeResponse
     */
    public function describeMultiModDbAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiModDbAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
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
            'action'      => 'DescribeRdsVSwitchs',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVSwitchsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-01-15',
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
     * @param DescribeServerlessInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeServerlessInstanceResponse
     */
    public function describeServerlessInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServerlessInstance',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServerlessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServerlessInstanceRequest $request
     *
     * @return DescribeServerlessInstanceResponse
     */
    public function describeServerlessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerlessInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubscriptionInitializeProgressRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeSubscriptionInitializeProgressResponse
     */
    public function describeSubscriptionInitializeProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $query['SubscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionInitializeProgress',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionInitializeProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSubscriptionInitializeProgressRequest $request
     *
     * @return DescribeSubscriptionInitializeProgressResponse
     */
    public function describeSubscriptionInitializeProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInitializeProgressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubscriptionPerformanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSubscriptionPerformanceResponse
     */
    public function describeSubscriptionPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
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
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $query['SubscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionPerformance',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSubscriptionPerformanceRequest $request
     *
     * @return DescribeSubscriptionPerformanceResponse
     */
    public function describeSubscriptionPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubscriptionPermissionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSubscriptionPermissionResponse
     */
    public function describeSubscriptionPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionPermission',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSubscriptionPermissionRequest $request
     *
     * @return DescribeSubscriptionPermissionResponse
     */
    public function describeSubscriptionPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionPermissionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubscriptionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSubscriptionsResponse
     */
    public function describeSubscriptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $query['SubscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptions',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSubscriptionsRequest $request
     *
     * @return DescribeSubscriptionsResponse
     */
    public function describeSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionsWithOptions($request, $runtime);
    }

    /**
     * @param EnableServerlessPublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnableServerlessPublicConnectionResponse
     */
    public function enableServerlessPublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableServerlessPublicConnection',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableServerlessPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableServerlessPublicConnectionRequest $request
     *
     * @return EnableServerlessPublicConnectionResponse
     */
    public function enableServerlessPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServerlessPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetMultimodeCmsUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMultimodeCmsUrlResponse
     */
    public function getMultimodeCmsUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultimodeCmsUrl',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultimodeCmsUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMultimodeCmsUrlRequest $request
     *
     * @return GetMultimodeCmsUrlResponse
     */
    public function getMultimodeCmsUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultimodeCmsUrlWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterServiceConfigResponse
     */
    public function listClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceConfig',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceConfigRequest $request
     *
     * @return ListClusterServiceConfigResponse
     */
    public function listClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceConfigHistory',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ListHbaseInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListHbaseInstancesResponse
     */
    public function listHbaseInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListHbaseInstances',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHbaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHbaseInstancesRequest $request
     *
     * @return ListHbaseInstancesResponse
     */
    public function listHbaseInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHbaseInstancesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2017-01-15',
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
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->preferredBackupEndTimeUTC)) {
            $query['PreferredBackupEndTimeUTC'] = $request->preferredBackupEndTimeUTC;
        }
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupStartTimeUTC)) {
            $query['PreferredBackupStartTimeUTC'] = $request->preferredBackupStartTimeUTC;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterName',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterNameRequest $request
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterNetTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyClusterNetTypeResponse
     */
    public function modifyClusterNetTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
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
            'action'      => 'ModifyClusterNetType',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterNetTypeRequest $request
     *
     * @return ModifyClusterNetTypeResponse
     */
    public function modifyClusterNetType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterNetTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterSecurityIpListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyClusterSecurityIpListResponse
     */
    public function modifyClusterSecurityIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->securityIpList)) {
            $query['SecurityIpList'] = $request->securityIpList;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterSecurityIpList',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterSecurityIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterSecurityIpListRequest $request
     *
     * @return ModifyClusterSecurityIpListResponse
     */
    public function modifyClusterSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterSecurityIpListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
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
        if (!Utils::isUnset($request->restart)) {
            $query['Restart'] = $request->restart;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterServiceConfig',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHasRootPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyHasRootPasswordResponse
     */
    public function modifyHasRootPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hasPassword)) {
            $query['HasPassword'] = $request->hasPassword;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHasRootPassword',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHasRootPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHasRootPasswordRequest $request
     *
     * @return ModifyHasRootPasswordResponse
     */
    public function modifyHasRootPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHasRootPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRestartClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyRestartClusterResponse
     */
    public function modifyRestartClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRestartCluster',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRestartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRestartClusterRequest $request
     *
     * @return ModifyRestartClusterResponse
     */
    public function modifyRestartCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRestartClusterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRollbackHasForHbaseRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRollbackHasForHbaseResponse
     */
    public function modifyRollbackHasForHbaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRollbackHasForHbase',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRollbackHasForHbaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRollbackHasForHbaseRequest $request
     *
     * @return ModifyRollbackHasForHbaseResponse
     */
    public function modifyRollbackHasForHbase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRollbackHasForHbaseWithOptions($request, $runtime);
    }

    /**
     * @param ModifySubscriptionDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifySubscriptionDescriptionResponse
     */
    public function modifySubscriptionDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subscriptionDescription)) {
            $query['SubscriptionDescription'] = $request->subscriptionDescription;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $query['SubscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySubscriptionDescription',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySubscriptionDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySubscriptionDescriptionRequest $request
     *
     * @return ModifySubscriptionDescriptionResponse
     */
    public function modifySubscriptionDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifySubscriptionMappingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifySubscriptionMappingResponse
     */
    public function modifySubscriptionMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mapping)) {
            $query['Mapping'] = $request->mapping;
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
        if (!Utils::isUnset($request->subscriptionId)) {
            $query['SubscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySubscriptionMapping',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySubscriptionMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySubscriptionMappingRequest $request
     *
     * @return ModifySubscriptionMappingResponse
     */
    public function modifySubscriptionMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionMappingWithOptions($request, $runtime);
    }

    /**
     * @param ModifySubscriptionPermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySubscriptionPermissionResponse
     */
    public function modifySubscriptionPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySubscriptionPermission',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySubscriptionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySubscriptionPermissionRequest $request
     *
     * @return ModifySubscriptionPermissionResponse
     */
    public function modifySubscriptionPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionPermissionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUIProxyAccountPasswordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyUIProxyAccountPasswordResponse
     */
    public function modifyUIProxyAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUIProxyAccountPassword',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUIProxyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUIProxyAccountPasswordRequest $request
     *
     * @return ModifyUIProxyAccountPasswordResponse
     */
    public function modifyUIProxyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUIProxyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUpgradeToHasForHbaseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyUpgradeToHasForHbaseResponse
     */
    public function modifyUpgradeToHasForHbaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hasPassword)) {
            $query['HasPassword'] = $request->hasPassword;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUpgradeToHasForHbase',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUpgradeToHasForHbaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUpgradeToHasForHbaseRequest $request
     *
     * @return ModifyUpgradeToHasForHbaseResponse
     */
    public function modifyUpgradeToHasForHbase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUpgradeToHasForHbaseWithOptions($request, $runtime);
    }

    /**
     * @param MultimodAddComponentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MultimodAddComponentsResponse
     */
    public function multimodAddComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MultimodAddComponents',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MultimodAddComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MultimodAddComponentsRequest $request
     *
     * @return MultimodAddComponentsResponse
     */
    public function multimodAddComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multimodAddComponentsWithOptions($request, $runtime);
    }

    /**
     * @param OpenBackupRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return OpenBackupResponse
     */
    public function openBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenBackup',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenBackupRequest $request
     *
     * @return OpenBackupResponse
     */
    public function openBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openBackupWithOptions($request, $runtime);
    }

    /**
     * @param QueryHBaseHaDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryHBaseHaDBResponse
     */
    public function queryHBaseHaDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHBaseHaDB',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHBaseHaDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHBaseHaDBRequest $request
     *
     * @return QueryHBaseHaDBResponse
     */
    public function queryHBaseHaDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHBaseHaDBWithOptions($request, $runtime);
    }

    /**
     * @param QuerySparkRelateHBaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySparkRelateHBaseResponse
     */
    public function querySparkRelateHBaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySparkRelateHBase',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySparkRelateHBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySparkRelateHBaseRequest $request
     *
     * @return QuerySparkRelateHBaseResponse
     */
    public function querySparkRelateHBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySparkRelateHBaseWithOptions($request, $runtime);
    }

    /**
     * @param QueryXpackRelatedDBRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryXpackRelatedDBResponse
     */
    public function queryXpackRelatedDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->relateDbType)) {
            $query['RelateDbType'] = $request->relateDbType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryXpackRelatedDB',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryXpackRelatedDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryXpackRelatedDBRequest $request
     *
     * @return QueryXpackRelatedDBResponse
     */
    public function queryXpackRelatedDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryXpackRelatedDBWithOptions($request, $runtime);
    }

    /**
     * @param RelateDbForHBaseHaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RelateDbForHBaseHaResponse
     */
    public function relateDbForHBaseHaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->haActive)) {
            $query['HaActive'] = $request->haActive;
        }
        if (!Utils::isUnset($request->haActiveClusterKey)) {
            $query['HaActiveClusterKey'] = $request->haActiveClusterKey;
        }
        if (!Utils::isUnset($request->haActiveDBType)) {
            $query['HaActiveDBType'] = $request->haActiveDBType;
        }
        if (!Utils::isUnset($request->haActiveHbaseFsDir)) {
            $query['HaActiveHbaseFsDir'] = $request->haActiveHbaseFsDir;
        }
        if (!Utils::isUnset($request->haActiveHdfsUri)) {
            $query['HaActiveHdfsUri'] = $request->haActiveHdfsUri;
        }
        if (!Utils::isUnset($request->haActivePassword)) {
            $query['HaActivePassword'] = $request->haActivePassword;
        }
        if (!Utils::isUnset($request->haActiveUser)) {
            $query['HaActiveUser'] = $request->haActiveUser;
        }
        if (!Utils::isUnset($request->haActiveVersion)) {
            $query['HaActiveVersion'] = $request->haActiveVersion;
        }
        if (!Utils::isUnset($request->haMigrateType)) {
            $query['HaMigrateType'] = $request->haMigrateType;
        }
        if (!Utils::isUnset($request->haStandby)) {
            $query['HaStandby'] = $request->haStandby;
        }
        if (!Utils::isUnset($request->haStandbyClusterKey)) {
            $query['HaStandbyClusterKey'] = $request->haStandbyClusterKey;
        }
        if (!Utils::isUnset($request->haStandbyDBType)) {
            $query['HaStandbyDBType'] = $request->haStandbyDBType;
        }
        if (!Utils::isUnset($request->haStandbyHbaseFsDir)) {
            $query['HaStandbyHbaseFsDir'] = $request->haStandbyHbaseFsDir;
        }
        if (!Utils::isUnset($request->haStandbyHdfsUri)) {
            $query['HaStandbyHdfsUri'] = $request->haStandbyHdfsUri;
        }
        if (!Utils::isUnset($request->haStandbyPassword)) {
            $query['HaStandbyPassword'] = $request->haStandbyPassword;
        }
        if (!Utils::isUnset($request->haStandbyUser)) {
            $query['HaStandbyUser'] = $request->haStandbyUser;
        }
        if (!Utils::isUnset($request->haStandbyVersion)) {
            $query['HaStandbyVersion'] = $request->haStandbyVersion;
        }
        if (!Utils::isUnset($request->haTables)) {
            $query['HaTables'] = $request->haTables;
        }
        if (!Utils::isUnset($request->isActiveStandard)) {
            $query['IsActiveStandard'] = $request->isActiveStandard;
        }
        if (!Utils::isUnset($request->isStandbyStandard)) {
            $query['IsStandbyStandard'] = $request->isStandbyStandard;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RelateDbForHBaseHa',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RelateDbForHBaseHaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RelateDbForHBaseHaRequest $request
     *
     * @return RelateDbForHBaseHaResponse
     */
    public function relateDbForHBaseHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->relateDbForHBaseHaWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePublicNetworkAddressRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePublicNetworkAddress',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePublicNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleasePublicNetworkAddressRequest $request
     *
     * @return ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseSubscriptionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReleaseSubscriptionResponse
     */
    public function releaseSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $query['SubscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseSubscription',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseSubscriptionRequest $request
     *
     * @return ReleaseSubscriptionResponse
     */
    public function releaseSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @param RenewClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RenewClusterResponse
     */
    public function renewClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewCluster',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewClusterRequest $request
     *
     * @return RenewClusterResponse
     */
    public function renewCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewClusterWithOptions($request, $runtime);
    }

    /**
     * @param ResizeClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResizeClusterResponse
     */
    public function resizeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $query['CloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->coldStorageSize)) {
            $query['ColdStorageSize'] = $request->coldStorageSize;
        }
        if (!Utils::isUnset($request->coreDiskQuantity)) {
            $query['CoreDiskQuantity'] = $request->coreDiskQuantity;
        }
        if (!Utils::isUnset($request->coreDiskSize)) {
            $query['CoreDiskSize'] = $request->coreDiskSize;
        }
        if (!Utils::isUnset($request->coreDiskType)) {
            $query['CoreDiskType'] = $request->coreDiskType;
        }
        if (!Utils::isUnset($request->coreInstanceQuantity)) {
            $query['CoreInstanceQuantity'] = $request->coreInstanceQuantity;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->isColdStorage)) {
            $query['IsColdStorage'] = $request->isColdStorage;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ResizeCluster',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResizeClusterRequest $request
     *
     * @return ResizeClusterResponse
     */
    public function resizeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeClusterWithOptions($request, $runtime);
    }

    /**
     * @param SparkRelateHBaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SparkRelateHBaseResponse
     */
    public function sparkRelateHBaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->HBaseClusterIds)) {
            $query['HBaseClusterIds'] = $request->HBaseClusterIds;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SparkRelateHBase',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SparkRelateHBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SparkRelateHBaseRequest $request
     *
     * @return SparkRelateHBaseResponse
     */
    public function sparkRelateHBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sparkRelateHBaseWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-01-15',
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
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-01-15',
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
     * @param UpgradeMinorVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
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
        if (!Utils::isUnset($request->upgradeVersion)) {
            $query['UpgradeVersion'] = $request->upgradeVersion;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMinorVersion',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeMinorVersionRequest $request
     *
     * @return UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMinorVersionWithOptions($request, $runtime);
    }

    /**
     * @param XpackRelateDBRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return XpackRelateDBResponse
     */
    public function xpackRelateDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dbClusterIds)) {
            $query['DbClusterIds'] = $request->dbClusterIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->relateDbType)) {
            $query['RelateDbType'] = $request->relateDbType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'XpackRelateDB',
            'version'     => '2017-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return XpackRelateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param XpackRelateDBRequest $request
     *
     * @return XpackRelateDBResponse
     */
    public function xpackRelateDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->xpackRelateDBWithOptions($request, $runtime);
    }
}
