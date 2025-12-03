<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class HBase extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'hbase.aliyuncs.com',
            'ap-south-1' => 'hbase.aliyuncs.com',
            'ap-southeast-2' => 'hbase.aliyuncs.com',
            'cn-beijing-finance-1' => 'hbase.aliyuncs.com',
            'cn-beijing-finance-pop' => 'hbase.aliyuncs.com',
            'cn-beijing-gov-1' => 'hbase.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'hbase.aliyuncs.com',
            'cn-edge-1' => 'hbase.aliyuncs.com',
            'cn-fujian' => 'hbase.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'hbase.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hbase.aliyuncs.com',
            'cn-hangzhou-test-306' => 'hbase.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'hbase.aliyuncs.com',
            'cn-qingdao-nebula' => 'hbase.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'hbase.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'hbase.aliyuncs.com',
            'cn-shanghai-inner' => 'hbase.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hbase.aliyuncs.com',
            'cn-shenzhen-inner' => 'hbase.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'hbase.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'hbase.aliyuncs.com',
            'cn-wuhan' => 'hbase.aliyuncs.com',
            'cn-wulanchabu' => 'hbase.aliyuncs.com',
            'cn-yushanfang' => 'hbase.aliyuncs.com',
            'cn-zhangbei' => 'hbase.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'hbase.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'hbase.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'hbase.aliyuncs.com',
            'eu-west-1-oxs' => 'hbase.aliyuncs.com',
            'rus-west-1-pop' => 'hbase.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AddUserHdfsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserHdfsInfoResponse
     *
     * @param AddUserHdfsInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddUserHdfsInfoResponse
     */
    public function addUserHdfsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserHdfsInfo',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserHdfsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddUserHdfsInfoRequest
     *
     * @returns AddUserHdfsInfoResponse
     *
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
     * @param request - AllocatePublicNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocatePublicNetworkAddressResponse
     *
     * @param AllocatePublicNetworkAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocatePublicNetworkAddress',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocatePublicNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AllocatePublicNetworkAddressRequest
     *
     * @returns AllocatePublicNetworkAddressResponse
     *
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
     * @param request - CheckVersionsOfComponentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckVersionsOfComponentsResponse
     *
     * @param CheckVersionsOfComponentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckVersionsOfComponentsResponse
     */
    public function checkVersionsOfComponentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckVersionsOfComponents',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckVersionsOfComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckVersionsOfComponentsRequest
     *
     * @returns CheckVersionsOfComponentsResponse
     *
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
     * @param request - CloseBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseBackupResponse
     *
     * @param CloseBackupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseBackupResponse
     */
    public function closeBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseBackup',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CloseBackupRequest
     *
     * @returns CloseBackupResponse
     *
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
     * @param request - ConvertClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertClusterResponse
     *
     * @param ConvertClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConvertClusterResponse
     */
    public function convertClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertCluster',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ConvertClusterRequest
     *
     * @returns ConvertClusterResponse
     *
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
     * 创建实例.
     *
     * @param request - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudType) {
            @$query['CloudType'] = $request->cloudType;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->coldStorageSize) {
            @$query['ColdStorageSize'] = $request->coldStorageSize;
        }

        if (null !== $request->coreDiskQuantity) {
            @$query['CoreDiskQuantity'] = $request->coreDiskQuantity;
        }

        if (null !== $request->coreDiskSize) {
            @$query['CoreDiskSize'] = $request->coreDiskSize;
        }

        if (null !== $request->coreDiskType) {
            @$query['CoreDiskType'] = $request->coreDiskType;
        }

        if (null !== $request->coreInstanceQuantity) {
            @$query['CoreInstanceQuantity'] = $request->coreInstanceQuantity;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->dbInstanceConnType) {
            @$query['DbInstanceConnType'] = $request->dbInstanceConnType;
        }

        if (null !== $request->dbInstanceType) {
            @$query['DbInstanceType'] = $request->dbInstanceType;
        }

        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->depMode) {
            @$query['DepMode'] = $request->depMode;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->isColdStorage) {
            @$query['IsColdStorage'] = $request->isColdStorage;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->srcDBInstanceId) {
            @$query['SrcDBInstanceId'] = $request->srcDBInstanceId;
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
            'action' => 'CreateCluster',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
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
     * @param request - CreateGlobalResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGlobalResourceResponse
     *
     * @param CreateGlobalResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateGlobalResourceResponse
     */
    public function createGlobalResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGlobalResource',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGlobalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateGlobalResourceRequest
     *
     * @returns CreateGlobalResourceResponse
     *
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
     * @param request - CreateHbaseSlbServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHbaseSlbServerResponse
     *
     * @param CreateHbaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHbaseSlbServerResponse
     */
    public function createHbaseSlbServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->slbServer) {
            @$query['SlbServer'] = $request->slbServer;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHbaseSlbServer',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHbaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateHbaseSlbServerRequest
     *
     * @returns CreateHbaseSlbServerResponse
     *
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
     * 创建订阅.
     *
     * @param request - CreateSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubscriptionResponse
     *
     * @param CreateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationInstanceId) {
            @$query['DestinationInstanceId'] = $request->destinationInstanceId;
        }

        if (null !== $request->destinationInstanceRegionId) {
            @$query['DestinationInstanceRegionId'] = $request->destinationInstanceRegionId;
        }

        if (null !== $request->extraContext) {
            @$query['ExtraContext'] = $request->extraContext;
        }

        if (null !== $request->mapping) {
            @$query['Mapping'] = $request->mapping;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->slbServer) {
            @$query['SlbServer'] = $request->slbServer;
        }

        if (null !== $request->sourceInstanceId) {
            @$query['SourceInstanceId'] = $request->sourceInstanceId;
        }

        if (null !== $request->sourceInstanceRegionId) {
            @$query['SourceInstanceRegionId'] = $request->sourceInstanceRegionId;
        }

        if (null !== $request->subscriptionDescription) {
            @$query['SubscriptionDescription'] = $request->subscriptionDescription;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSubscription',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建订阅.
     *
     * @param request - CreateSubscriptionRequest
     *
     * @returns CreateSubscriptionResponse
     *
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
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
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
     * @param request - DeleteGlobalResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGlobalResourceResponse
     *
     * @param DeleteGlobalResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGlobalResourceResponse
     */
    public function deleteGlobalResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGlobalResource',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGlobalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteGlobalResourceRequest
     *
     * @returns DeleteGlobalResourceResponse
     *
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
     * @param request - DeleteHbaseSlbServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHbaseSlbServerResponse
     *
     * @param DeleteHbaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHbaseSlbServerResponse
     */
    public function deleteHbaseSlbServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->slbServer) {
            @$query['SlbServer'] = $request->slbServer;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHbaseSlbServer',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHbaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteHbaseSlbServerRequest
     *
     * @returns DeleteHbaseSlbServerResponse
     *
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
     * @param request - DeleteServerlessInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServerlessInstanceResponse
     *
     * @param DeleteServerlessInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteServerlessInstanceResponse
     */
    public function deleteServerlessInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServerlessInstance',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServerlessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteServerlessInstanceRequest
     *
     * @returns DeleteServerlessInstanceResponse
     *
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
     * @param request - DeleteUserHdfsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserHdfsInfoResponse
     *
     * @param DeleteUserHdfsInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteUserHdfsInfoResponse
     */
    public function deleteUserHdfsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nameService) {
            @$query['NameService'] = $request->nameService;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserHdfsInfo',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserHdfsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteUserHdfsInfoRequest
     *
     * @returns DeleteUserHdfsInfoResponse
     *
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
     * @param request - DescribeBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupPolicyRequest
     *
     * @returns DescribeBackupPolicyResponse
     *
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
     * @param request - DescribeBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupsResponse
     *
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endTimeUTC) {
            @$query['EndTimeUTC'] = $request->endTimeUTC;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeUTC) {
            @$query['StartTimeUTC'] = $request->startTimeUTC;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupsRequest
     *
     * @returns DescribeBackupsResponse
     *
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
     * @param request - DescribeClusterAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAttributeResponse
     *
     * @param DescribeClusterAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterAttributeResponse
     */
    public function describeClusterAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAttribute',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeClusterAttributeRequest
     *
     * @returns DescribeClusterAttributeResponse
     *
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
     * @param request - DescribeClusterConnectAddrsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterConnectAddrsResponse
     *
     * @param DescribeClusterConnectAddrsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeClusterConnectAddrsResponse
     */
    public function describeClusterConnectAddrsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterConnectAddrs',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterConnectAddrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeClusterConnectAddrsRequest
     *
     * @returns DescribeClusterConnectAddrsResponse
     *
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
     * @param request - DescribeClusterListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterListResponse
     *
     * @param DescribeClusterListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeClusterListResponse
     */
    public function describeClusterListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterList',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeClusterListRequest
     *
     * @returns DescribeClusterListResponse
     *
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
     * @param request - DescribeClusterModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterModelResponse
     *
     * @param DescribeClusterModelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterModelResponse
     */
    public function describeClusterModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterModel',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeClusterModelRequest
     *
     * @returns DescribeClusterModelResponse
     *
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
     * @param request - DescribeClusterWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterWhiteListResponse
     *
     * @param DescribeClusterWhiteListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterWhiteListResponse
     */
    public function describeClusterWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterWhiteList',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeClusterWhiteListRequest
     *
     * @returns DescribeClusterWhiteListResponse
     *
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
     * @param request - DescribeColdStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeColdStorageResponse
     *
     * @param DescribeColdStorageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeColdStorageResponse
     */
    public function describeColdStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeColdStorage',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeColdStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeColdStorageRequest
     *
     * @returns DescribeColdStorageResponse
     *
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
     * @param request - DescribeMultiModDbAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiModDbAttributeResponse
     *
     * @param DescribeMultiModDbAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMultiModDbAttributeResponse
     */
    public function describeMultiModDbAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiModDbAttribute',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiModDbAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMultiModDbAttributeRequest
     *
     * @returns DescribeMultiModDbAttributeResponse
     *
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
     * @param request - DescribeRdsVSwitchsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsVSwitchsResponse
     *
     * @param DescribeRdsVSwitchsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
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
            'action' => 'DescribeRdsVSwitchs',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRdsVSwitchsRequest
     *
     * @returns DescribeRdsVSwitchsResponse
     *
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
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param request - DescribeServerlessInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServerlessInstanceResponse
     *
     * @param DescribeServerlessInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeServerlessInstanceResponse
     */
    public function describeServerlessInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServerlessInstance',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServerlessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeServerlessInstanceRequest
     *
     * @returns DescribeServerlessInstanceResponse
     *
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
     * 查询订阅进度.
     *
     * @param request - DescribeSubscriptionInitializeProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionInitializeProgressResponse
     *
     * @param DescribeSubscriptionInitializeProgressRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeSubscriptionInitializeProgressResponse
     */
    public function describeSubscriptionInitializeProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionInitializeProgress',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionInitializeProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订阅进度.
     *
     * @param request - DescribeSubscriptionInitializeProgressRequest
     *
     * @returns DescribeSubscriptionInitializeProgressResponse
     *
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
     * 查询订阅.
     *
     * @param request - DescribeSubscriptionPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionPerformanceResponse
     *
     * @param DescribeSubscriptionPerformanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSubscriptionPerformanceResponse
     */
    public function describeSubscriptionPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceInstanceId) {
            @$query['SourceInstanceId'] = $request->sourceInstanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionPerformance',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订阅.
     *
     * @param request - DescribeSubscriptionPerformanceRequest
     *
     * @returns DescribeSubscriptionPerformanceResponse
     *
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
     * 查询订阅权限.
     *
     * @param request - DescribeSubscriptionPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionPermissionResponse
     *
     * @param DescribeSubscriptionPermissionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSubscriptionPermissionResponse
     */
    public function describeSubscriptionPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionPermission',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订阅权限.
     *
     * @param request - DescribeSubscriptionPermissionRequest
     *
     * @returns DescribeSubscriptionPermissionResponse
     *
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
     * 查询订阅列表.
     *
     * @param request - DescribeSubscriptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionsResponse
     *
     * @param DescribeSubscriptionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSubscriptionsResponse
     */
    public function describeSubscriptionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptions',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订阅列表.
     *
     * @param request - DescribeSubscriptionsRequest
     *
     * @returns DescribeSubscriptionsResponse
     *
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
     * @param request - EnableServerlessPublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableServerlessPublicConnectionResponse
     *
     * @param EnableServerlessPublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnableServerlessPublicConnectionResponse
     */
    public function enableServerlessPublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableServerlessPublicConnection',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableServerlessPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableServerlessPublicConnectionRequest
     *
     * @returns EnableServerlessPublicConnectionResponse
     *
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
     * @param request - GetMultimodeCmsUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultimodeCmsUrlResponse
     *
     * @param GetMultimodeCmsUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMultimodeCmsUrlResponse
     */
    public function getMultimodeCmsUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMultimodeCmsUrl',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultimodeCmsUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMultimodeCmsUrlRequest
     *
     * @returns GetMultimodeCmsUrlResponse
     *
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
     * @param request - ListClusterServiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterServiceConfigResponse
     *
     * @param ListClusterServiceConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterServiceConfigResponse
     */
    public function listClusterServiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterServiceConfig',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListClusterServiceConfigRequest
     *
     * @returns ListClusterServiceConfigResponse
     *
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
     * @param request - ListClusterServiceConfigHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterServiceConfigHistoryResponse
     *
     * @param ListClusterServiceConfigHistoryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterServiceConfigHistory',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClusterServiceConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListClusterServiceConfigHistoryRequest
     *
     * @returns ListClusterServiceConfigHistoryResponse
     *
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
     * 查询hbase实例列表.
     *
     * @param request - ListHbaseInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHbaseInstancesResponse
     *
     * @param ListHbaseInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListHbaseInstancesResponse
     */
    public function listHbaseInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
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
            'action' => 'ListHbaseInstances',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHbaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询hbase实例列表.
     *
     * @param request - ListHbaseInstancesRequest
     *
     * @returns ListHbaseInstancesResponse
     *
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
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'ListTagResources',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * @param request - ModifyBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupPolicyResponse
     *
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->preferredBackupEndTimeUTC) {
            @$query['PreferredBackupEndTimeUTC'] = $request->preferredBackupEndTimeUTC;
        }

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupStartTimeUTC) {
            @$query['PreferredBackupStartTimeUTC'] = $request->preferredBackupStartTimeUTC;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPolicy',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyBackupPolicyRequest
     *
     * @returns ModifyBackupPolicyResponse
     *
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
     * @param request - ModifyClusterNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterNameResponse
     *
     * @param ModifyClusterNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterName',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyClusterNameRequest
     *
     * @returns ModifyClusterNameResponse
     *
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
     * @param request - ModifyClusterNetTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterNetTypeResponse
     *
     * @param ModifyClusterNetTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyClusterNetTypeResponse
     */
    public function modifyClusterNetTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'ModifyClusterNetType',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyClusterNetTypeRequest
     *
     * @returns ModifyClusterNetTypeResponse
     *
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
     * @param request - ModifyClusterSecurityIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterSecurityIpListResponse
     *
     * @param ModifyClusterSecurityIpListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyClusterSecurityIpListResponse
     */
    public function modifyClusterSecurityIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityIpList) {
            @$query['SecurityIpList'] = $request->securityIpList;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterSecurityIpList',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterSecurityIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyClusterSecurityIpListRequest
     *
     * @returns ModifyClusterSecurityIpListResponse
     *
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
     * @param request - ModifyClusterServiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterServiceConfigResponse
     *
     * @param ModifyClusterServiceConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restart) {
            @$query['Restart'] = $request->restart;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterServiceConfig',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyClusterServiceConfigRequest
     *
     * @returns ModifyClusterServiceConfigResponse
     *
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
     * @param request - ModifyHasRootPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHasRootPasswordResponse
     *
     * @param ModifyHasRootPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyHasRootPasswordResponse
     */
    public function modifyHasRootPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->hasPassword) {
            @$query['HasPassword'] = $request->hasPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHasRootPassword',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHasRootPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyHasRootPasswordRequest
     *
     * @returns ModifyHasRootPasswordResponse
     *
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
     * @param request - ModifyRestartClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRestartClusterResponse
     *
     * @param ModifyRestartClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyRestartClusterResponse
     */
    public function modifyRestartClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRestartCluster',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRestartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyRestartClusterRequest
     *
     * @returns ModifyRestartClusterResponse
     *
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
     * @param request - ModifyRollbackHasForHbaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRollbackHasForHbaseResponse
     *
     * @param ModifyRollbackHasForHbaseRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRollbackHasForHbaseResponse
     */
    public function modifyRollbackHasForHbaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRollbackHasForHbase',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRollbackHasForHbaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyRollbackHasForHbaseRequest
     *
     * @returns ModifyRollbackHasForHbaseResponse
     *
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
     * 更新订阅描述.
     *
     * @param request - ModifySubscriptionDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySubscriptionDescriptionResponse
     *
     * @param ModifySubscriptionDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifySubscriptionDescriptionResponse
     */
    public function modifySubscriptionDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subscriptionDescription) {
            @$query['SubscriptionDescription'] = $request->subscriptionDescription;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySubscriptionDescription',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySubscriptionDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新订阅描述.
     *
     * @param request - ModifySubscriptionDescriptionRequest
     *
     * @returns ModifySubscriptionDescriptionResponse
     *
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
     * 更新订阅.
     *
     * @param request - ModifySubscriptionMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySubscriptionMappingResponse
     *
     * @param ModifySubscriptionMappingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifySubscriptionMappingResponse
     */
    public function modifySubscriptionMappingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mapping) {
            @$query['Mapping'] = $request->mapping;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySubscriptionMapping',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySubscriptionMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新订阅.
     *
     * @param request - ModifySubscriptionMappingRequest
     *
     * @returns ModifySubscriptionMappingResponse
     *
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
     * 更新订阅权限.
     *
     * @param request - ModifySubscriptionPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySubscriptionPermissionResponse
     *
     * @param ModifySubscriptionPermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySubscriptionPermissionResponse
     */
    public function modifySubscriptionPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySubscriptionPermission',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySubscriptionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新订阅权限.
     *
     * @param request - ModifySubscriptionPermissionRequest
     *
     * @returns ModifySubscriptionPermissionResponse
     *
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
     * @param request - ModifyUIProxyAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUIProxyAccountPasswordResponse
     *
     * @param ModifyUIProxyAccountPasswordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyUIProxyAccountPasswordResponse
     */
    public function modifyUIProxyAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUIProxyAccountPassword',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUIProxyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyUIProxyAccountPasswordRequest
     *
     * @returns ModifyUIProxyAccountPasswordResponse
     *
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
     * @param request - ModifyUpgradeToHasForHbaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUpgradeToHasForHbaseResponse
     *
     * @param ModifyUpgradeToHasForHbaseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyUpgradeToHasForHbaseResponse
     */
    public function modifyUpgradeToHasForHbaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->hasPassword) {
            @$query['HasPassword'] = $request->hasPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUpgradeToHasForHbase',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUpgradeToHasForHbaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyUpgradeToHasForHbaseRequest
     *
     * @returns ModifyUpgradeToHasForHbaseResponse
     *
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
     * @param request - MultimodAddComponentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultimodAddComponentsResponse
     *
     * @param MultimodAddComponentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MultimodAddComponentsResponse
     */
    public function multimodAddComponentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MultimodAddComponents',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultimodAddComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MultimodAddComponentsRequest
     *
     * @returns MultimodAddComponentsResponse
     *
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
     * @param request - OpenBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenBackupResponse
     *
     * @param OpenBackupRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return OpenBackupResponse
     */
    public function openBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenBackup',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OpenBackupRequest
     *
     * @returns OpenBackupResponse
     *
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
     * @param request - QueryHBaseHaDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryHBaseHaDBResponse
     *
     * @param QueryHBaseHaDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryHBaseHaDBResponse
     */
    public function queryHBaseHaDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryHBaseHaDB',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryHBaseHaDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryHBaseHaDBRequest
     *
     * @returns QueryHBaseHaDBResponse
     *
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
     * @param request - QuerySparkRelateHBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySparkRelateHBaseResponse
     *
     * @param QuerySparkRelateHBaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySparkRelateHBaseResponse
     */
    public function querySparkRelateHBaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySparkRelateHBase',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySparkRelateHBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySparkRelateHBaseRequest
     *
     * @returns QuerySparkRelateHBaseResponse
     *
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
     * @param request - QueryXpackRelatedDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryXpackRelatedDBResponse
     *
     * @param QueryXpackRelatedDBRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryXpackRelatedDBResponse
     */
    public function queryXpackRelatedDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relateDbType) {
            @$query['RelateDbType'] = $request->relateDbType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryXpackRelatedDB',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryXpackRelatedDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryXpackRelatedDBRequest
     *
     * @returns QueryXpackRelatedDBResponse
     *
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
     * @param request - RelateDbForHBaseHaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RelateDbForHBaseHaResponse
     *
     * @param RelateDbForHBaseHaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RelateDbForHBaseHaResponse
     */
    public function relateDbForHBaseHaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->haActive) {
            @$query['HaActive'] = $request->haActive;
        }

        if (null !== $request->haActiveClusterKey) {
            @$query['HaActiveClusterKey'] = $request->haActiveClusterKey;
        }

        if (null !== $request->haActiveDBType) {
            @$query['HaActiveDBType'] = $request->haActiveDBType;
        }

        if (null !== $request->haActiveHbaseFsDir) {
            @$query['HaActiveHbaseFsDir'] = $request->haActiveHbaseFsDir;
        }

        if (null !== $request->haActiveHdfsUri) {
            @$query['HaActiveHdfsUri'] = $request->haActiveHdfsUri;
        }

        if (null !== $request->haActivePassword) {
            @$query['HaActivePassword'] = $request->haActivePassword;
        }

        if (null !== $request->haActiveUser) {
            @$query['HaActiveUser'] = $request->haActiveUser;
        }

        if (null !== $request->haActiveVersion) {
            @$query['HaActiveVersion'] = $request->haActiveVersion;
        }

        if (null !== $request->haMigrateType) {
            @$query['HaMigrateType'] = $request->haMigrateType;
        }

        if (null !== $request->haStandby) {
            @$query['HaStandby'] = $request->haStandby;
        }

        if (null !== $request->haStandbyClusterKey) {
            @$query['HaStandbyClusterKey'] = $request->haStandbyClusterKey;
        }

        if (null !== $request->haStandbyDBType) {
            @$query['HaStandbyDBType'] = $request->haStandbyDBType;
        }

        if (null !== $request->haStandbyHbaseFsDir) {
            @$query['HaStandbyHbaseFsDir'] = $request->haStandbyHbaseFsDir;
        }

        if (null !== $request->haStandbyHdfsUri) {
            @$query['HaStandbyHdfsUri'] = $request->haStandbyHdfsUri;
        }

        if (null !== $request->haStandbyPassword) {
            @$query['HaStandbyPassword'] = $request->haStandbyPassword;
        }

        if (null !== $request->haStandbyUser) {
            @$query['HaStandbyUser'] = $request->haStandbyUser;
        }

        if (null !== $request->haStandbyVersion) {
            @$query['HaStandbyVersion'] = $request->haStandbyVersion;
        }

        if (null !== $request->haTables) {
            @$query['HaTables'] = $request->haTables;
        }

        if (null !== $request->isActiveStandard) {
            @$query['IsActiveStandard'] = $request->isActiveStandard;
        }

        if (null !== $request->isStandbyStandard) {
            @$query['IsStandbyStandard'] = $request->isStandbyStandard;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RelateDbForHBaseHa',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RelateDbForHBaseHaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RelateDbForHBaseHaRequest
     *
     * @returns RelateDbForHBaseHaResponse
     *
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
     * @param request - ReleasePublicNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleasePublicNetworkAddressResponse
     *
     * @param ReleasePublicNetworkAddressRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleasePublicNetworkAddress',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleasePublicNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleasePublicNetworkAddressRequest
     *
     * @returns ReleasePublicNetworkAddressResponse
     *
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
     * 是否订阅.
     *
     * @param request - ReleaseSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseSubscriptionResponse
     *
     * @param ReleaseSubscriptionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReleaseSubscriptionResponse
     */
    public function releaseSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseSubscription',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 是否订阅.
     *
     * @param request - ReleaseSubscriptionRequest
     *
     * @returns ReleaseSubscriptionResponse
     *
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
     * @param request - RenewClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewClusterResponse
     *
     * @param RenewClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RenewClusterResponse
     */
    public function renewClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewCluster',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RenewClusterRequest
     *
     * @returns RenewClusterResponse
     *
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
     * @param request - ResizeClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeClusterResponse
     *
     * @param ResizeClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResizeClusterResponse
     */
    public function resizeClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloudType) {
            @$query['CloudType'] = $request->cloudType;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coldStorageSize) {
            @$query['ColdStorageSize'] = $request->coldStorageSize;
        }

        if (null !== $request->coreDiskQuantity) {
            @$query['CoreDiskQuantity'] = $request->coreDiskQuantity;
        }

        if (null !== $request->coreDiskSize) {
            @$query['CoreDiskSize'] = $request->coreDiskSize;
        }

        if (null !== $request->coreDiskType) {
            @$query['CoreDiskType'] = $request->coreDiskType;
        }

        if (null !== $request->coreInstanceQuantity) {
            @$query['CoreInstanceQuantity'] = $request->coreInstanceQuantity;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->isColdStorage) {
            @$query['IsColdStorage'] = $request->isColdStorage;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->upgradeType) {
            @$query['UpgradeType'] = $request->upgradeType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeCluster',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResizeClusterRequest
     *
     * @returns ResizeClusterResponse
     *
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
     * @param request - SparkRelateHBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SparkRelateHBaseResponse
     *
     * @param SparkRelateHBaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SparkRelateHBaseResponse
     */
    public function sparkRelateHBaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->HBaseClusterIds) {
            @$query['HBaseClusterIds'] = $request->HBaseClusterIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SparkRelateHBase',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SparkRelateHBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SparkRelateHBaseRequest
     *
     * @returns SparkRelateHBaseResponse
     *
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2017-01-15',
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2017-01-15',
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
     * @param request - UpgradeMinorVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeMinorVersionResponse
     *
     * @param UpgradeMinorVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->upgradeVersion) {
            @$query['UpgradeVersion'] = $request->upgradeVersion;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeMinorVersion',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpgradeMinorVersionRequest
     *
     * @returns UpgradeMinorVersionResponse
     *
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
     * @param request - XpackRelateDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns XpackRelateDBResponse
     *
     * @param XpackRelateDBRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return XpackRelateDBResponse
     */
    public function xpackRelateDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dbClusterIds) {
            @$query['DbClusterIds'] = $request->dbClusterIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relateDbType) {
            @$query['RelateDbType'] = $request->relateDbType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'XpackRelateDB',
            'version' => '2017-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return XpackRelateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - XpackRelateDBRequest
     *
     * @returns XpackRelateDBResponse
     *
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
