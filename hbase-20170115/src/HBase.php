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
            'ap-northeast-2-pop'          => 'hbase.aliyuncs.com',
            'ap-south-1'                  => 'hbase.aliyuncs.com',
            'ap-southeast-2'              => 'hbase.aliyuncs.com',
            'cn-beijing-finance-1'        => 'hbase.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'hbase.aliyuncs.com',
            'cn-beijing-gov-1'            => 'hbase.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'hbase.aliyuncs.com',
            'cn-edge-1'                   => 'hbase.aliyuncs.com',
            'cn-fujian'                   => 'hbase.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'hbase.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hbase.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'hbase.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'hbase.aliyuncs.com',
            'cn-qingdao-nebula'           => 'hbase.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'hbase.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'hbase.aliyuncs.com',
            'cn-shanghai-inner'           => 'hbase.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hbase.aliyuncs.com',
            'cn-shenzhen-inner'           => 'hbase.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'hbase.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'hbase.aliyuncs.com',
            'cn-wuhan'                    => 'hbase.aliyuncs.com',
            'cn-wulanchabu'               => 'hbase.aliyuncs.com',
            'cn-yushanfang'               => 'hbase.aliyuncs.com',
            'cn-zhangbei'                 => 'hbase.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'hbase.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'hbase.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'hbase.aliyuncs.com',
            'eu-west-1-oxs'               => 'hbase.aliyuncs.com',
            'rus-west-1-pop'              => 'hbase.aliyuncs.com',
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
     * @param AddUserHdfsInfoRequest $request AddUserHdfsInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserHdfsInfoResponse AddUserHdfsInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddUserHdfsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddUserHdfsInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param AddUserHdfsInfoRequest $request AddUserHdfsInfoRequest
     *
     * @return AddUserHdfsInfoResponse AddUserHdfsInfoResponse
     */
    public function addUserHdfsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserHdfsInfoWithOptions($request, $runtime);
    }

    /**
     * @param AllocatePublicNetworkAddressRequest $request AllocatePublicNetworkAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocatePublicNetworkAddressResponse AllocatePublicNetworkAddressResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AllocatePublicNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AllocatePublicNetworkAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param AllocatePublicNetworkAddressRequest $request AllocatePublicNetworkAddressRequest
     *
     * @return AllocatePublicNetworkAddressResponse AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param CheckVersionsOfComponentsRequest $request CheckVersionsOfComponentsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckVersionsOfComponentsResponse CheckVersionsOfComponentsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckVersionsOfComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckVersionsOfComponentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CheckVersionsOfComponentsRequest $request CheckVersionsOfComponentsRequest
     *
     * @return CheckVersionsOfComponentsResponse CheckVersionsOfComponentsResponse
     */
    public function checkVersionsOfComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVersionsOfComponentsWithOptions($request, $runtime);
    }

    /**
     * @param CloseBackupRequest $request CloseBackupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseBackupResponse CloseBackupResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CloseBackupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseBackupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CloseBackupRequest $request CloseBackupRequest
     *
     * @return CloseBackupResponse CloseBackupResponse
     */
    public function closeBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeBackupWithOptions($request, $runtime);
    }

    /**
     * @param ConvertClusterRequest $request ConvertClusterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ConvertClusterResponse ConvertClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConvertClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConvertClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConvertClusterRequest $request ConvertClusterRequest
     *
     * @return ConvertClusterResponse ConvertClusterResponse
     */
    public function convertCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalResourceRequest $request CreateGlobalResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGlobalResourceResponse CreateGlobalResourceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateGlobalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGlobalResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateGlobalResourceRequest $request CreateGlobalResourceRequest
     *
     * @return CreateGlobalResourceResponse CreateGlobalResourceResponse
     */
    public function createGlobalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalResourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateHbaseSlbServerRequest $request CreateHbaseSlbServerRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHbaseSlbServerResponse CreateHbaseSlbServerResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHbaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHbaseSlbServerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateHbaseSlbServerRequest $request CreateHbaseSlbServerRequest
     *
     * @return CreateHbaseSlbServerResponse CreateHbaseSlbServerResponse
     */
    public function createHbaseSlbServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHbaseSlbServerWithOptions($request, $runtime);
    }

    /**
     * @summary 创建订阅
     *  *
     * @param CreateSubscriptionRequest $request CreateSubscriptionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubscriptionResponse CreateSubscriptionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSubscriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建订阅
     *  *
     * @param CreateSubscriptionRequest $request CreateSubscriptionRequest
     *
     * @return CreateSubscriptionResponse CreateSubscriptionResponse
     */
    public function createSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalResourceRequest $request DeleteGlobalResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGlobalResourceResponse DeleteGlobalResourceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteGlobalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGlobalResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteGlobalResourceRequest $request DeleteGlobalResourceRequest
     *
     * @return DeleteGlobalResourceResponse DeleteGlobalResourceResponse
     */
    public function deleteGlobalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHbaseSlbServerRequest $request DeleteHbaseSlbServerRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHbaseSlbServerResponse DeleteHbaseSlbServerResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHbaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHbaseSlbServerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteHbaseSlbServerRequest $request DeleteHbaseSlbServerRequest
     *
     * @return DeleteHbaseSlbServerResponse DeleteHbaseSlbServerResponse
     */
    public function deleteHbaseSlbServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHbaseSlbServerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServerlessInstanceRequest $request DeleteServerlessInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServerlessInstanceResponse DeleteServerlessInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteServerlessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServerlessInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteServerlessInstanceRequest $request DeleteServerlessInstanceRequest
     *
     * @return DeleteServerlessInstanceResponse DeleteServerlessInstanceResponse
     */
    public function deleteServerlessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerlessInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserHdfsInfoRequest $request DeleteUserHdfsInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserHdfsInfoResponse DeleteUserHdfsInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteUserHdfsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUserHdfsInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteUserHdfsInfoRequest $request DeleteUserHdfsInfoRequest
     *
     * @return DeleteUserHdfsInfoResponse DeleteUserHdfsInfoResponse
     */
    public function deleteUserHdfsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserHdfsInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupsRequest $request DescribeBackupsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupsResponse DescribeBackupsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupsRequest $request DescribeBackupsRequest
     *
     * @return DescribeBackupsResponse DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterAttributeRequest $request DescribeClusterAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAttributeResponse DescribeClusterAttributeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterAttributeRequest $request DescribeClusterAttributeRequest
     *
     * @return DescribeClusterAttributeResponse DescribeClusterAttributeResponse
     */
    public function describeClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterConnectAddrsRequest $request DescribeClusterConnectAddrsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterConnectAddrsResponse DescribeClusterConnectAddrsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterConnectAddrsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterConnectAddrsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterConnectAddrsRequest $request DescribeClusterConnectAddrsRequest
     *
     * @return DescribeClusterConnectAddrsResponse DescribeClusterConnectAddrsResponse
     */
    public function describeClusterConnectAddrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterConnectAddrsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterListRequest $request DescribeClusterListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterListResponse DescribeClusterListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterListRequest $request DescribeClusterListRequest
     *
     * @return DescribeClusterListResponse DescribeClusterListResponse
     */
    public function describeClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterModelRequest $request DescribeClusterModelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterModelResponse DescribeClusterModelResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterModelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterModelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterModelRequest $request DescribeClusterModelRequest
     *
     * @return DescribeClusterModelResponse DescribeClusterModelResponse
     */
    public function describeClusterModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterModelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterWhiteListRequest $request DescribeClusterWhiteListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterWhiteListResponse DescribeClusterWhiteListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClusterWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClusterWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterWhiteListRequest $request DescribeClusterWhiteListRequest
     *
     * @return DescribeClusterWhiteListResponse DescribeClusterWhiteListResponse
     */
    public function describeClusterWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeColdStorageRequest $request DescribeColdStorageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeColdStorageResponse DescribeColdStorageResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeColdStorageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeColdStorageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeColdStorageRequest $request DescribeColdStorageRequest
     *
     * @return DescribeColdStorageResponse DescribeColdStorageResponse
     */
    public function describeColdStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColdStorageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMultiModDbAttributeRequest $request DescribeMultiModDbAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMultiModDbAttributeResponse DescribeMultiModDbAttributeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeMultiModDbAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMultiModDbAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeMultiModDbAttributeRequest $request DescribeMultiModDbAttributeRequest
     *
     * @return DescribeMultiModDbAttributeResponse DescribeMultiModDbAttributeResponse
     */
    public function describeMultiModDbAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiModDbAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request DescribeRdsVSwitchsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsVSwitchsResponse DescribeRdsVSwitchsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRdsVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRdsVSwitchsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request DescribeRdsVSwitchsRequest
     *
     * @return DescribeRdsVSwitchsResponse DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVSwitchsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param DescribeServerlessInstanceRequest $request DescribeServerlessInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServerlessInstanceResponse DescribeServerlessInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeServerlessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeServerlessInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeServerlessInstanceRequest $request DescribeServerlessInstanceRequest
     *
     * @return DescribeServerlessInstanceResponse DescribeServerlessInstanceResponse
     */
    public function describeServerlessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerlessInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询订阅进度
     *  *
     * @param DescribeSubscriptionInitializeProgressRequest $request DescribeSubscriptionInitializeProgressRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionInitializeProgressResponse DescribeSubscriptionInitializeProgressResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSubscriptionInitializeProgressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSubscriptionInitializeProgressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询订阅进度
     *  *
     * @param DescribeSubscriptionInitializeProgressRequest $request DescribeSubscriptionInitializeProgressRequest
     *
     * @return DescribeSubscriptionInitializeProgressResponse DescribeSubscriptionInitializeProgressResponse
     */
    public function describeSubscriptionInitializeProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInitializeProgressWithOptions($request, $runtime);
    }

    /**
     * @summary 查询订阅
     *  *
     * @param DescribeSubscriptionPerformanceRequest $request DescribeSubscriptionPerformanceRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionPerformanceResponse DescribeSubscriptionPerformanceResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSubscriptionPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSubscriptionPerformanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询订阅
     *  *
     * @param DescribeSubscriptionPerformanceRequest $request DescribeSubscriptionPerformanceRequest
     *
     * @return DescribeSubscriptionPerformanceResponse DescribeSubscriptionPerformanceResponse
     */
    public function describeSubscriptionPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询订阅权限
     *  *
     * @param DescribeSubscriptionPermissionRequest $request DescribeSubscriptionPermissionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionPermissionResponse DescribeSubscriptionPermissionResponse
     */
    public function describeSubscriptionPermissionWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSubscriptionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSubscriptionPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询订阅权限
     *  *
     * @param DescribeSubscriptionPermissionRequest $request DescribeSubscriptionPermissionRequest
     *
     * @return DescribeSubscriptionPermissionResponse DescribeSubscriptionPermissionResponse
     */
    public function describeSubscriptionPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询订阅列表
     *  *
     * @param DescribeSubscriptionsRequest $request DescribeSubscriptionsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionsResponse DescribeSubscriptionsResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSubscriptionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询订阅列表
     *  *
     * @param DescribeSubscriptionsRequest $request DescribeSubscriptionsRequest
     *
     * @return DescribeSubscriptionsResponse DescribeSubscriptionsResponse
     */
    public function describeSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionsWithOptions($request, $runtime);
    }

    /**
     * @param EnableServerlessPublicConnectionRequest $request EnableServerlessPublicConnectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableServerlessPublicConnectionResponse EnableServerlessPublicConnectionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableServerlessPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableServerlessPublicConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param EnableServerlessPublicConnectionRequest $request EnableServerlessPublicConnectionRequest
     *
     * @return EnableServerlessPublicConnectionResponse EnableServerlessPublicConnectionResponse
     */
    public function enableServerlessPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServerlessPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetMultimodeCmsUrlRequest $request GetMultimodeCmsUrlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMultimodeCmsUrlResponse GetMultimodeCmsUrlResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMultimodeCmsUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultimodeCmsUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param GetMultimodeCmsUrlRequest $request GetMultimodeCmsUrlRequest
     *
     * @return GetMultimodeCmsUrlResponse GetMultimodeCmsUrlResponse
     */
    public function getMultimodeCmsUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultimodeCmsUrlWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceConfigRequest $request ListClusterServiceConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterServiceConfigResponse ListClusterServiceConfigResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterServiceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceConfigRequest $request ListClusterServiceConfigRequest
     *
     * @return ListClusterServiceConfigResponse ListClusterServiceConfigResponse
     */
    public function listClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request ListClusterServiceConfigHistoryRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterServiceConfigHistoryResponse ListClusterServiceConfigHistoryResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClusterServiceConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterServiceConfigHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request ListClusterServiceConfigHistoryRequest
     *
     * @return ListClusterServiceConfigHistoryResponse ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary 查询hbase实例列表
     *  *
     * @param ListHbaseInstancesRequest $request ListHbaseInstancesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHbaseInstancesResponse ListHbaseInstancesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHbaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHbaseInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询hbase实例列表
     *  *
     * @param ListHbaseInstancesRequest $request ListHbaseInstancesRequest
     *
     * @return ListHbaseInstancesResponse ListHbaseInstancesResponse
     */
    public function listHbaseInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHbaseInstancesWithOptions($request, $runtime);
    }

    /**
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyBackupPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterNameRequest $request ModifyClusterNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterNameResponse ModifyClusterNameResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterNameRequest $request ModifyClusterNameRequest
     *
     * @return ModifyClusterNameResponse ModifyClusterNameResponse
     */
    public function modifyClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterNetTypeRequest $request ModifyClusterNetTypeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterNetTypeResponse ModifyClusterNetTypeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterNetTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterNetTypeRequest $request ModifyClusterNetTypeRequest
     *
     * @return ModifyClusterNetTypeResponse ModifyClusterNetTypeResponse
     */
    public function modifyClusterNetType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterNetTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterSecurityIpListRequest $request ModifyClusterSecurityIpListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterSecurityIpListResponse ModifyClusterSecurityIpListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterSecurityIpListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterSecurityIpListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterSecurityIpListRequest $request ModifyClusterSecurityIpListRequest
     *
     * @return ModifyClusterSecurityIpListResponse ModifyClusterSecurityIpListResponse
     */
    public function modifyClusterSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterSecurityIpListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request ModifyClusterServiceConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterServiceConfigResponse ModifyClusterServiceConfigResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyClusterServiceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request ModifyClusterServiceConfigRequest
     *
     * @return ModifyClusterServiceConfigResponse ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHasRootPasswordRequest $request ModifyHasRootPasswordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHasRootPasswordResponse ModifyHasRootPasswordResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyHasRootPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyHasRootPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyHasRootPasswordRequest $request ModifyHasRootPasswordRequest
     *
     * @return ModifyHasRootPasswordResponse ModifyHasRootPasswordResponse
     */
    public function modifyHasRootPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHasRootPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRestartClusterRequest $request ModifyRestartClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRestartClusterResponse ModifyRestartClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyRestartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyRestartClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyRestartClusterRequest $request ModifyRestartClusterRequest
     *
     * @return ModifyRestartClusterResponse ModifyRestartClusterResponse
     */
    public function modifyRestartCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRestartClusterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRollbackHasForHbaseRequest $request ModifyRollbackHasForHbaseRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRollbackHasForHbaseResponse ModifyRollbackHasForHbaseResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyRollbackHasForHbaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyRollbackHasForHbaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyRollbackHasForHbaseRequest $request ModifyRollbackHasForHbaseRequest
     *
     * @return ModifyRollbackHasForHbaseResponse ModifyRollbackHasForHbaseResponse
     */
    public function modifyRollbackHasForHbase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRollbackHasForHbaseWithOptions($request, $runtime);
    }

    /**
     * @summary 更新订阅描述
     *  *
     * @param ModifySubscriptionDescriptionRequest $request ModifySubscriptionDescriptionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySubscriptionDescriptionResponse ModifySubscriptionDescriptionResponse
     */
    public function modifySubscriptionDescriptionWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifySubscriptionDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySubscriptionDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新订阅描述
     *  *
     * @param ModifySubscriptionDescriptionRequest $request ModifySubscriptionDescriptionRequest
     *
     * @return ModifySubscriptionDescriptionResponse ModifySubscriptionDescriptionResponse
     */
    public function modifySubscriptionDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新订阅
     *  *
     * @param ModifySubscriptionMappingRequest $request ModifySubscriptionMappingRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySubscriptionMappingResponse ModifySubscriptionMappingResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifySubscriptionMappingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySubscriptionMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新订阅
     *  *
     * @param ModifySubscriptionMappingRequest $request ModifySubscriptionMappingRequest
     *
     * @return ModifySubscriptionMappingResponse ModifySubscriptionMappingResponse
     */
    public function modifySubscriptionMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionMappingWithOptions($request, $runtime);
    }

    /**
     * @summary 更新订阅权限
     *  *
     * @param ModifySubscriptionPermissionRequest $request ModifySubscriptionPermissionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySubscriptionPermissionResponse ModifySubscriptionPermissionResponse
     */
    public function modifySubscriptionPermissionWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifySubscriptionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySubscriptionPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新订阅权限
     *  *
     * @param ModifySubscriptionPermissionRequest $request ModifySubscriptionPermissionRequest
     *
     * @return ModifySubscriptionPermissionResponse ModifySubscriptionPermissionResponse
     */
    public function modifySubscriptionPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionPermissionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUIProxyAccountPasswordRequest $request ModifyUIProxyAccountPasswordRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUIProxyAccountPasswordResponse ModifyUIProxyAccountPasswordResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyUIProxyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyUIProxyAccountPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyUIProxyAccountPasswordRequest $request ModifyUIProxyAccountPasswordRequest
     *
     * @return ModifyUIProxyAccountPasswordResponse ModifyUIProxyAccountPasswordResponse
     */
    public function modifyUIProxyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUIProxyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUpgradeToHasForHbaseRequest $request ModifyUpgradeToHasForHbaseRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUpgradeToHasForHbaseResponse ModifyUpgradeToHasForHbaseResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyUpgradeToHasForHbaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyUpgradeToHasForHbaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyUpgradeToHasForHbaseRequest $request ModifyUpgradeToHasForHbaseRequest
     *
     * @return ModifyUpgradeToHasForHbaseResponse ModifyUpgradeToHasForHbaseResponse
     */
    public function modifyUpgradeToHasForHbase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUpgradeToHasForHbaseWithOptions($request, $runtime);
    }

    /**
     * @param MultimodAddComponentsRequest $request MultimodAddComponentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return MultimodAddComponentsResponse MultimodAddComponentsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return MultimodAddComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MultimodAddComponentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param MultimodAddComponentsRequest $request MultimodAddComponentsRequest
     *
     * @return MultimodAddComponentsResponse MultimodAddComponentsResponse
     */
    public function multimodAddComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multimodAddComponentsWithOptions($request, $runtime);
    }

    /**
     * @param OpenBackupRequest $request OpenBackupRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenBackupResponse OpenBackupResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenBackupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenBackupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param OpenBackupRequest $request OpenBackupRequest
     *
     * @return OpenBackupResponse OpenBackupResponse
     */
    public function openBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openBackupWithOptions($request, $runtime);
    }

    /**
     * @param QueryHBaseHaDBRequest $request QueryHBaseHaDBRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryHBaseHaDBResponse QueryHBaseHaDBResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryHBaseHaDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryHBaseHaDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param QueryHBaseHaDBRequest $request QueryHBaseHaDBRequest
     *
     * @return QueryHBaseHaDBResponse QueryHBaseHaDBResponse
     */
    public function queryHBaseHaDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHBaseHaDBWithOptions($request, $runtime);
    }

    /**
     * @param QuerySparkRelateHBaseRequest $request QuerySparkRelateHBaseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySparkRelateHBaseResponse QuerySparkRelateHBaseResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QuerySparkRelateHBaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySparkRelateHBaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param QuerySparkRelateHBaseRequest $request QuerySparkRelateHBaseRequest
     *
     * @return QuerySparkRelateHBaseResponse QuerySparkRelateHBaseResponse
     */
    public function querySparkRelateHBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySparkRelateHBaseWithOptions($request, $runtime);
    }

    /**
     * @param QueryXpackRelatedDBRequest $request QueryXpackRelatedDBRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryXpackRelatedDBResponse QueryXpackRelatedDBResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryXpackRelatedDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryXpackRelatedDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param QueryXpackRelatedDBRequest $request QueryXpackRelatedDBRequest
     *
     * @return QueryXpackRelatedDBResponse QueryXpackRelatedDBResponse
     */
    public function queryXpackRelatedDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryXpackRelatedDBWithOptions($request, $runtime);
    }

    /**
     * @param RelateDbForHBaseHaRequest $request RelateDbForHBaseHaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RelateDbForHBaseHaResponse RelateDbForHBaseHaResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RelateDbForHBaseHaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RelateDbForHBaseHaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RelateDbForHBaseHaRequest $request RelateDbForHBaseHaRequest
     *
     * @return RelateDbForHBaseHaResponse RelateDbForHBaseHaResponse
     */
    public function relateDbForHBaseHa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->relateDbForHBaseHaWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePublicNetworkAddressRequest $request ReleasePublicNetworkAddressRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleasePublicNetworkAddressResponse ReleasePublicNetworkAddressResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleasePublicNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleasePublicNetworkAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ReleasePublicNetworkAddressRequest $request ReleasePublicNetworkAddressRequest
     *
     * @return ReleasePublicNetworkAddressResponse ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 是否订阅
     *  *
     * @param ReleaseSubscriptionRequest $request ReleaseSubscriptionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseSubscriptionResponse ReleaseSubscriptionResponse
     */
    public function releaseSubscriptionWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleaseSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseSubscriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 是否订阅
     *  *
     * @param ReleaseSubscriptionRequest $request ReleaseSubscriptionRequest
     *
     * @return ReleaseSubscriptionResponse ReleaseSubscriptionResponse
     */
    public function releaseSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @param RenewClusterRequest $request RenewClusterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewClusterResponse RenewClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RenewClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenewClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RenewClusterRequest $request RenewClusterRequest
     *
     * @return RenewClusterResponse RenewClusterResponse
     */
    public function renewCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewClusterWithOptions($request, $runtime);
    }

    /**
     * @param ResizeClusterRequest $request ResizeClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResizeClusterResponse ResizeClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ResizeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResizeClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ResizeClusterRequest $request ResizeClusterRequest
     *
     * @return ResizeClusterResponse ResizeClusterResponse
     */
    public function resizeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeClusterWithOptions($request, $runtime);
    }

    /**
     * @param SparkRelateHBaseRequest $request SparkRelateHBaseRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SparkRelateHBaseResponse SparkRelateHBaseResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SparkRelateHBaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SparkRelateHBaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param SparkRelateHBaseRequest $request SparkRelateHBaseRequest
     *
     * @return SparkRelateHBaseResponse SparkRelateHBaseResponse
     */
    public function sparkRelateHBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sparkRelateHBaseWithOptions($request, $runtime);
    }

    /**
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param UpgradeMinorVersionRequest $request UpgradeMinorVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeMinorVersionResponse UpgradeMinorVersionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeMinorVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UpgradeMinorVersionRequest $request UpgradeMinorVersionRequest
     *
     * @return UpgradeMinorVersionResponse UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMinorVersionWithOptions($request, $runtime);
    }

    /**
     * @param XpackRelateDBRequest $request XpackRelateDBRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return XpackRelateDBResponse XpackRelateDBResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return XpackRelateDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return XpackRelateDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param XpackRelateDBRequest $request XpackRelateDBRequest
     *
     * @return XpackRelateDBResponse XpackRelateDBResponse
     */
    public function xpackRelateDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->xpackRelateDBWithOptions($request, $runtime);
    }
}
