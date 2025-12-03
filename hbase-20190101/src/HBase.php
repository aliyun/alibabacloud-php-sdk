<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\HBase\V20190101\Models\AddUserHdfsInfoRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\AddUserHdfsInfoResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\AllocatePublicNetworkAddressRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\AllocatePublicNetworkAddressResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CancelActiveOperationTasksResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CheckComponentsVersionRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CheckComponentsVersionResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CloseBackupRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CloseBackupResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ConvertInstanceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ConvertInstanceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateAccountRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateAccountResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateGlobalResourceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateGlobalResourceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateHbaseHaSlbRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateHbaseHaSlbResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateHBaseSlbServerRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateHBaseSlbServerResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateMultiZoneClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateMultiZoneClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateRestorePlanRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateRestorePlanResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateServerlessClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\CreateServerlessClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteGlobalResourceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteGlobalResourceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteHBaseHaDBRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteHBaseHaDBResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteHbaseHaSlbRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteHbaseHaSlbResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteHBaseSlbServerRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteHBaseSlbServerResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteMultiZoneClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteMultiZoneClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteServerlessClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteServerlessClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteUserHdfsInfoRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DeleteUserHdfsInfoResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeActiveOperationTaskTypeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeActiveOperationTaskTypeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPlanConfigRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPlanConfigResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupStatusRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupStatusResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeColdStorageRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeColdStorageResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDBInstanceUsageRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDBInstanceUsageResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDeletedInstancesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDeletedInstancesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDiskWarningLineRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDiskWarningLineResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRecoverableTimeRangeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRecoverableTimeRangeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreIncrDetailRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreIncrDetailResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeServerlessClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeServerlessClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeSubDomainRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeSubDomainResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\EnableHBaseueBackupRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\EnableHBaseueBackupResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\EnableHBaseueModuleRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\EnableHBaseueModuleResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\EvaluateMultiZoneResourceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\EvaluateMultiZoneResourceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\GetMultimodeCmsUrlRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\GetMultimodeCmsUrlResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\GrantRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\GrantResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListHBaseInstancesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListHBaseInstancesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigHistoriesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigHistoriesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigurationsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigurationsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListTagsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ListTagsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyBackupPlanConfigRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyBackupPlanConfigResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyClusterDeletionProtectionRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyClusterDeletionProtectionResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyDiskWarningLineRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyDiskWarningLineResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceNameRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceNameResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceServiceConfigRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceServiceConfigResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceTypeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyInstanceTypeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyIpWhitelistRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyIpWhitelistResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyMultiZoneClusterNodeTypeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyMultiZoneClusterNodeTypeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifySecurityGroupsRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifySecurityGroupsResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyUIAccountPasswordRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ModifyUIAccountPasswordResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\OpenBackupRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\OpenBackupResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\PurgeInstanceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\PurgeInstanceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\QueryXpackRelateDBRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\QueryXpackRelateDBResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\RelateDbForHBaseHaRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\RelateDbForHBaseHaResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ReleasePublicNetworkAddressRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ReleasePublicNetworkAddressResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeColdStorageSizeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeColdStorageSizeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeDiskSizeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeDiskSizeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeMultiZoneClusterDiskSizeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeMultiZoneClusterDiskSizeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeMultiZoneClusterNodeCountRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeMultiZoneClusterNodeCountResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeNodeCountRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\ResizeNodeCountResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\RevokeRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\RevokeResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\SwitchHbaseHaSlbRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\SwitchHbaseHaSlbResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\SwitchServiceRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\SwitchServiceResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\UpgradeMinorVersionRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\UpgradeMinorVersionResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\UpgradeMultiZoneClusterRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\UpgradeMultiZoneClusterResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\XpackRelateDBRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\XpackRelateDBResponse;
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserHdfsInfo',
            'version' => '2019-01-01',
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocatePublicNetworkAddress',
            'version' => '2019-01-01',
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
     * @param request - CancelActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelActiveOperationTasks',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelActiveOperationTasksRequest
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckComponentsVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckComponentsVersionResponse
     *
     * @param CheckComponentsVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckComponentsVersionResponse
     */
    public function checkComponentsVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckComponentsVersion',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckComponentsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckComponentsVersionRequest
     *
     * @returns CheckComponentsVersionResponse
     *
     * @param CheckComponentsVersionRequest $request
     *
     * @return CheckComponentsVersionResponse
     */
    public function checkComponentsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkComponentsVersionWithOptions($request, $runtime);
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseBackup',
            'version' => '2019-01-01',
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
     * @param request - ConvertInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertInstanceResponse
     *
     * @param ConvertInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertInstance',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ConvertInstanceRequest
     *
     * @returns ConvertInstanceResponse
     *
     * @param ConvertInstanceRequest $request
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertInstanceWithOptions($request, $runtime);
    }

    /**
     * 新建账户.
     *
     * @param request - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建账户.
     *
     * @param request - CreateAccountRequest
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupPlanResponse
     *
     * @param CreateBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackupPlan',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateBackupPlanRequest
     *
     * @returns CreateBackupPlanResponse
     *
     * @param CreateBackupPlanRequest $request
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPlanWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->coldStorageSize) {
            @$query['ColdStorageSize'] = $request->coldStorageSize;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        if (null !== $request->nodeCount) {
            @$query['NodeCount'] = $request->nodeCount;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
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
            'version' => '2019-01-01',
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGlobalResource',
            'version' => '2019-01-01',
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
     * @param request - CreateHBaseSlbServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHBaseSlbServerResponse
     *
     * @param CreateHBaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHBaseSlbServerResponse
     */
    public function createHBaseSlbServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->slbServer) {
            @$query['SlbServer'] = $request->slbServer;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHBaseSlbServer',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHBaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateHBaseSlbServerRequest
     *
     * @returns CreateHBaseSlbServerResponse
     *
     * @param CreateHBaseSlbServerRequest $request
     *
     * @return CreateHBaseSlbServerResponse
     */
    public function createHBaseSlbServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHBaseSlbServerWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateHbaseHaSlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHbaseHaSlbResponse
     *
     * @param CreateHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateHbaseHaSlbResponse
     */
    public function createHbaseHaSlbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bdsId) {
            @$query['BdsId'] = $request->bdsId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->haId) {
            @$query['HaId'] = $request->haId;
        }

        if (null !== $request->haTypes) {
            @$query['HaTypes'] = $request->haTypes;
        }

        if (null !== $request->hbaseType) {
            @$query['HbaseType'] = $request->hbaseType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHbaseHaSlb',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHbaseHaSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateHbaseHaSlbRequest
     *
     * @returns CreateHbaseHaSlbResponse
     *
     * @param CreateHbaseHaSlbRequest $request
     *
     * @return CreateHbaseHaSlbResponse
     */
    public function createHbaseHaSlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHbaseHaSlbWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMultiZoneClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultiZoneClusterResponse
     *
     * @param CreateMultiZoneClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMultiZoneClusterResponse
     */
    public function createMultiZoneClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arbiterVSwitchId) {
            @$query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }

        if (null !== $request->arbiterZoneId) {
            @$query['ArbiterZoneId'] = $request->arbiterZoneId;
        }

        if (null !== $request->archVersion) {
            @$query['ArchVersion'] = $request->archVersion;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->coreDiskSize) {
            @$query['CoreDiskSize'] = $request->coreDiskSize;
        }

        if (null !== $request->coreDiskType) {
            @$query['CoreDiskType'] = $request->coreDiskType;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->coreNodeCount) {
            @$query['CoreNodeCount'] = $request->coreNodeCount;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->logDiskSize) {
            @$query['LogDiskSize'] = $request->logDiskSize;
        }

        if (null !== $request->logDiskType) {
            @$query['LogDiskType'] = $request->logDiskType;
        }

        if (null !== $request->logInstanceType) {
            @$query['LogInstanceType'] = $request->logInstanceType;
        }

        if (null !== $request->logNodeCount) {
            @$query['LogNodeCount'] = $request->logNodeCount;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        if (null !== $request->multiZoneCombination) {
            @$query['MultiZoneCombination'] = $request->multiZoneCombination;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->primaryVSwitchId) {
            @$query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }

        if (null !== $request->primaryZoneId) {
            @$query['PrimaryZoneId'] = $request->primaryZoneId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultiZoneCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMultiZoneClusterRequest
     *
     * @returns CreateMultiZoneClusterResponse
     *
     * @param CreateMultiZoneClusterRequest $request
     *
     * @return CreateMultiZoneClusterResponse
     */
    public function createMultiZoneCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultiZoneClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateRestorePlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRestorePlanResponse
     *
     * @param CreateRestorePlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRestorePlanResponse
     */
    public function createRestorePlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->restoreAllTable) {
            @$query['RestoreAllTable'] = $request->restoreAllTable;
        }

        if (null !== $request->restoreByCopy) {
            @$query['RestoreByCopy'] = $request->restoreByCopy;
        }

        if (null !== $request->restoreToDate) {
            @$query['RestoreToDate'] = $request->restoreToDate;
        }

        if (null !== $request->tables) {
            @$query['Tables'] = $request->tables;
        }

        if (null !== $request->targetClusterId) {
            @$query['TargetClusterId'] = $request->targetClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRestorePlan',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRestorePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateRestorePlanRequest
     *
     * @returns CreateRestorePlanResponse
     *
     * @param CreateRestorePlanRequest $request
     *
     * @return CreateRestorePlanResponse
     */
    public function createRestorePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestorePlanWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateServerlessClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServerlessClusterResponse
     *
     * @param CreateServerlessClusterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServerlessClusterResponse
     */
    public function createServerlessClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serverlessCapability) {
            @$query['ServerlessCapability'] = $request->serverlessCapability;
        }

        if (null !== $request->serverlessSpec) {
            @$query['ServerlessSpec'] = $request->serverlessSpec;
        }

        if (null !== $request->serverlessStorage) {
            @$query['ServerlessStorage'] = $request->serverlessStorage;
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
            'action' => 'CreateServerlessCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServerlessClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateServerlessClusterRequest
     *
     * @returns CreateServerlessClusterResponse
     *
     * @param CreateServerlessClusterRequest $request
     *
     * @return CreateServerlessClusterResponse
     */
    public function createServerlessCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerlessClusterWithOptions($request, $runtime);
    }

    /**
     * 删除账户.
     *
     * @param request - DeleteAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除账户.
     *
     * @param request - DeleteAccountRequest
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGlobalResource',
            'version' => '2019-01-01',
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
     * @param request - DeleteHBaseHaDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHBaseHaDBResponse
     *
     * @param DeleteHBaseHaDBRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteHBaseHaDBResponse
     */
    public function deleteHBaseHaDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bdsId) {
            @$query['BdsId'] = $request->bdsId;
        }

        if (null !== $request->haId) {
            @$query['HaId'] = $request->haId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHBaseHaDB',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHBaseHaDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteHBaseHaDBRequest
     *
     * @returns DeleteHBaseHaDBResponse
     *
     * @param DeleteHBaseHaDBRequest $request
     *
     * @return DeleteHBaseHaDBResponse
     */
    public function deleteHBaseHaDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHBaseHaDBWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteHBaseSlbServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHBaseSlbServerResponse
     *
     * @param DeleteHBaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHBaseSlbServerResponse
     */
    public function deleteHBaseSlbServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->slbServer) {
            @$query['SlbServer'] = $request->slbServer;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHBaseSlbServer',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHBaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteHBaseSlbServerRequest
     *
     * @returns DeleteHBaseSlbServerResponse
     *
     * @param DeleteHBaseSlbServerRequest $request
     *
     * @return DeleteHBaseSlbServerResponse
     */
    public function deleteHBaseSlbServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHBaseSlbServerWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteHbaseHaSlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHbaseHaSlbResponse
     *
     * @param DeleteHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHbaseHaSlbResponse
     */
    public function deleteHbaseHaSlbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bdsId) {
            @$query['BdsId'] = $request->bdsId;
        }

        if (null !== $request->haId) {
            @$query['HaId'] = $request->haId;
        }

        if (null !== $request->haTypes) {
            @$query['HaTypes'] = $request->haTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHbaseHaSlb',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHbaseHaSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteHbaseHaSlbRequest
     *
     * @returns DeleteHbaseHaSlbResponse
     *
     * @param DeleteHbaseHaSlbRequest $request
     *
     * @return DeleteHbaseHaSlbResponse
     */
    public function deleteHbaseHaSlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHbaseHaSlbWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->immediateDeleteFlag) {
            @$query['ImmediateDeleteFlag'] = $request->immediateDeleteFlag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMultiZoneClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMultiZoneClusterResponse
     *
     * @param DeleteMultiZoneClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMultiZoneClusterResponse
     */
    public function deleteMultiZoneClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->immediateDeleteFlag) {
            @$query['ImmediateDeleteFlag'] = $request->immediateDeleteFlag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMultiZoneCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMultiZoneClusterRequest
     *
     * @returns DeleteMultiZoneClusterResponse
     *
     * @param DeleteMultiZoneClusterRequest $request
     *
     * @return DeleteMultiZoneClusterResponse
     */
    public function deleteMultiZoneCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultiZoneClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteServerlessClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServerlessClusterResponse
     *
     * @param DeleteServerlessClusterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServerlessClusterResponse
     */
    public function deleteServerlessClusterWithOptions($request, $runtime)
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
            'action' => 'DeleteServerlessCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServerlessClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteServerlessClusterRequest
     *
     * @returns DeleteServerlessClusterResponse
     *
     * @param DeleteServerlessClusterRequest $request
     *
     * @return DeleteServerlessClusterResponse
     */
    public function deleteServerlessCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerlessClusterWithOptions($request, $runtime);
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserHdfsInfo',
            'version' => '2019-01-01',
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
     * 查询账户列表.
     *
     * @param request - DescribeAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountsResponse
     *
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询账户列表.
     *
     * @param request - DescribeAccountsRequest
     *
     * @returns DescribeAccountsResponse
     *
     * @param DescribeAccountsRequest $request
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeActiveOperationTaskTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTaskTypeResponse
     *
     * @param DescribeActiveOperationTaskTypeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeActiveOperationTaskTypeResponse
     */
    public function describeActiveOperationTaskTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isHistory) {
            @$query['IsHistory'] = $request->isHistory;
        }

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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTaskType',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTaskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeActiveOperationTaskTypeRequest
     *
     * @returns DescribeActiveOperationTaskTypeResponse
     *
     * @param DescribeActiveOperationTaskTypeRequest $request
     *
     * @return DescribeActiveOperationTaskTypeResponse
     */
    public function describeActiveOperationTaskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskTypeWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowCancel) {
            @$query['AllowCancel'] = $request->allowCancel;
        }

        if (null !== $request->allowChange) {
            @$query['AllowChange'] = $request->allowChange;
        }

        if (null !== $request->changeLevel) {
            @$query['ChangeLevel'] = $request->changeLevel;
        }

        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->insName) {
            @$query['InsName'] = $request->insName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTasks',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeActiveOperationTasksRequest
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
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
            'action' => 'DescribeAvailableResource',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAvailableResourceRequest
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBackupPlanConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPlanConfigResponse
     *
     * @param DescribeBackupPlanConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBackupPlanConfigResponse
     */
    public function describeBackupPlanConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPlanConfig',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPlanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupPlanConfigRequest
     *
     * @returns DescribeBackupPlanConfigResponse
     *
     * @param DescribeBackupPlanConfigRequest $request
     *
     * @return DescribeBackupPlanConfigResponse
     */
    public function describeBackupPlanConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlanConfigWithOptions($request, $runtime);
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2019-01-01',
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
     * @param request - DescribeBackupStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupStatusResponse
     *
     * @param DescribeBackupStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupStatusResponse
     */
    public function describeBackupStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupStatus',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupStatusRequest
     *
     * @returns DescribeBackupStatusResponse
     *
     * @param DescribeBackupStatusRequest $request
     *
     * @return DescribeBackupStatusResponse
     */
    public function describeBackupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBackupSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupSummaryResponse
     *
     * @param DescribeBackupSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupSummaryResponse
     */
    public function describeBackupSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupSummary',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupSummaryRequest
     *
     * @returns DescribeBackupSummaryResponse
     *
     * @param DescribeBackupSummaryRequest $request
     *
     * @return DescribeBackupSummaryResponse
     */
    public function describeBackupSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBackupTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupTablesResponse
     *
     * @param DescribeBackupTablesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupTablesResponse
     */
    public function describeBackupTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupRecordId) {
            @$query['BackupRecordId'] = $request->backupRecordId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupTables',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupTablesRequest
     *
     * @returns DescribeBackupTablesResponse
     *
     * @param DescribeBackupTablesRequest $request
     *
     * @return DescribeBackupTablesResponse
     */
    public function describeBackupTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTablesWithOptions($request, $runtime);
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeUTC) {
            @$query['StartTimeUTC'] = $request->startTimeUTC;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2019-01-01',
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
     * @param request - DescribeClusterConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterConnectionResponse
     *
     * @param DescribeClusterConnectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterConnectionResponse
     */
    public function describeClusterConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterConnection',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeClusterConnectionRequest
     *
     * @returns DescribeClusterConnectionResponse
     *
     * @param DescribeClusterConnectionRequest $request
     *
     * @return DescribeClusterConnectionResponse
     */
    public function describeClusterConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterConnectionWithOptions($request, $runtime);
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeColdStorage',
            'version' => '2019-01-01',
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
     * @param request - DescribeDBInstanceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceUsageResponse
     *
     * @param DescribeDBInstanceUsageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBInstanceUsageResponse
     */
    public function describeDBInstanceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceUsage',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceUsageRequest
     *
     * @returns DescribeDBInstanceUsageResponse
     *
     * @param DescribeDBInstanceUsageRequest $request
     *
     * @return DescribeDBInstanceUsageResponse
     */
    public function describeDBInstanceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceUsageWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDeletedInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeletedInstancesResponse
     *
     * @param DescribeDeletedInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDeletedInstancesResponse
     */
    public function describeDeletedInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeletedInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeletedInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDeletedInstancesRequest
     *
     * @returns DescribeDeletedInstancesResponse
     *
     * @param DescribeDeletedInstancesRequest $request
     *
     * @return DescribeDeletedInstancesResponse
     */
    public function describeDeletedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeletedInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDiskWarningLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskWarningLineResponse
     *
     * @param DescribeDiskWarningLineRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDiskWarningLineResponse
     */
    public function describeDiskWarningLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskWarningLine',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskWarningLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDiskWarningLineRequest
     *
     * @returns DescribeDiskWarningLineResponse
     *
     * @param DescribeDiskWarningLineRequest $request
     *
     * @return DescribeDiskWarningLineResponse
     */
    public function describeDiskWarningLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskWarningLineWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEndpointsResponse
     *
     * @param DescribeEndpointsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEndpoints',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeEndpointsRequest
     *
     * @returns DescribeEndpointsResponse
     *
     * @param DescribeEndpointsRequest $request
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceRequest
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTypeResponse
     *
     * @param DescribeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceTypeResponse
     */
    public function describeInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceType',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceTypeRequest
     *
     * @returns DescribeInstanceTypeResponse
     *
     * @param DescribeInstanceTypeRequest $request
     *
     * @return DescribeInstanceTypeResponse
     */
    public function describeInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpWhitelistResponse
     *
     * @param DescribeIpWhitelistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeIpWhitelistResponse
     */
    public function describeIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpWhitelist',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeIpWhitelistRequest
     *
     * @returns DescribeIpWhitelistResponse
     *
     * @param DescribeIpWhitelistRequest $request
     *
     * @return DescribeIpWhitelistResponse
     */
    public function describeIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMultiZoneAvailableRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiZoneAvailableRegionsResponse
     *
     * @param DescribeMultiZoneAvailableRegionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMultiZoneAvailableRegionsResponse
     */
    public function describeMultiZoneAvailableRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiZoneAvailableRegions',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiZoneAvailableRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMultiZoneAvailableRegionsRequest
     *
     * @returns DescribeMultiZoneAvailableRegionsResponse
     *
     * @param DescribeMultiZoneAvailableRegionsRequest $request
     *
     * @return DescribeMultiZoneAvailableRegionsResponse
     */
    public function describeMultiZoneAvailableRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiZoneAvailableRegionsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMultiZoneAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiZoneAvailableResourceResponse
     *
     * @param DescribeMultiZoneAvailableResourceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeMultiZoneAvailableResourceResponse
     */
    public function describeMultiZoneAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneCombination) {
            @$query['ZoneCombination'] = $request->zoneCombination;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiZoneAvailableResource',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiZoneAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMultiZoneAvailableResourceRequest
     *
     * @returns DescribeMultiZoneAvailableResourceResponse
     *
     * @param DescribeMultiZoneAvailableResourceRequest $request
     *
     * @return DescribeMultiZoneAvailableResourceResponse
     */
    public function describeMultiZoneAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiZoneAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMultiZoneClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiZoneClusterResponse
     *
     * @param DescribeMultiZoneClusterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMultiZoneClusterResponse
     */
    public function describeMultiZoneClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiZoneCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMultiZoneClusterRequest
     *
     * @returns DescribeMultiZoneClusterResponse
     *
     * @param DescribeMultiZoneClusterRequest $request
     *
     * @return DescribeMultiZoneClusterResponse
     */
    public function describeMultiZoneCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiZoneClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRecoverableTimeRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecoverableTimeRangeResponse
     *
     * @param DescribeRecoverableTimeRangeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeRecoverableTimeRangeResponse
     */
    public function describeRecoverableTimeRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecoverableTimeRange',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecoverableTimeRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRecoverableTimeRangeRequest
     *
     * @returns DescribeRecoverableTimeRangeResponse
     *
     * @param DescribeRecoverableTimeRangeRequest $request
     *
     * @return DescribeRecoverableTimeRangeResponse
     */
    public function describeRecoverableTimeRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecoverableTimeRangeWithOptions($request, $runtime);
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-01-01',
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
     * @param request - DescribeRestoreFullDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreFullDetailsResponse
     *
     * @param DescribeRestoreFullDetailsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRestoreFullDetailsResponse
     */
    public function describeRestoreFullDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->restoreRecordId) {
            @$query['RestoreRecordId'] = $request->restoreRecordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreFullDetails',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreFullDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRestoreFullDetailsRequest
     *
     * @returns DescribeRestoreFullDetailsResponse
     *
     * @param DescribeRestoreFullDetailsRequest $request
     *
     * @return DescribeRestoreFullDetailsResponse
     */
    public function describeRestoreFullDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreFullDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRestoreIncrDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreIncrDetailResponse
     *
     * @param DescribeRestoreIncrDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRestoreIncrDetailResponse
     */
    public function describeRestoreIncrDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->restoreRecordId) {
            @$query['RestoreRecordId'] = $request->restoreRecordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreIncrDetail',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreIncrDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRestoreIncrDetailRequest
     *
     * @returns DescribeRestoreIncrDetailResponse
     *
     * @param DescribeRestoreIncrDetailRequest $request
     *
     * @return DescribeRestoreIncrDetailResponse
     */
    public function describeRestoreIncrDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreIncrDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRestoreSchemaDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreSchemaDetailsResponse
     *
     * @param DescribeRestoreSchemaDetailsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeRestoreSchemaDetailsResponse
     */
    public function describeRestoreSchemaDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->restoreRecordId) {
            @$query['RestoreRecordId'] = $request->restoreRecordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreSchemaDetails',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreSchemaDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRestoreSchemaDetailsRequest
     *
     * @returns DescribeRestoreSchemaDetailsResponse
     *
     * @param DescribeRestoreSchemaDetailsRequest $request
     *
     * @return DescribeRestoreSchemaDetailsResponse
     */
    public function describeRestoreSchemaDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreSchemaDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRestoreSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreSummaryResponse
     *
     * @param DescribeRestoreSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRestoreSummaryResponse
     */
    public function describeRestoreSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreSummary',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRestoreSummaryRequest
     *
     * @returns DescribeRestoreSummaryResponse
     *
     * @param DescribeRestoreSummaryRequest $request
     *
     * @return DescribeRestoreSummaryResponse
     */
    public function describeRestoreSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRestoreTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreTablesResponse
     *
     * @param DescribeRestoreTablesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRestoreTablesResponse
     */
    public function describeRestoreTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->restoreRecordId) {
            @$query['RestoreRecordId'] = $request->restoreRecordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreTables',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRestoreTablesRequest
     *
     * @returns DescribeRestoreTablesResponse
     *
     * @param DescribeRestoreTablesRequest $request
     *
     * @return DescribeRestoreTablesResponse
     */
    public function describeRestoreTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreTablesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityGroupsResponse
     *
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityGroups',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSecurityGroupsRequest
     *
     * @returns DescribeSecurityGroupsResponse
     *
     * @param DescribeSecurityGroupsRequest $request
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeServerlessClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServerlessClusterResponse
     *
     * @param DescribeServerlessClusterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServerlessClusterResponse
     */
    public function describeServerlessClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServerlessCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServerlessClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeServerlessClusterRequest
     *
     * @returns DescribeServerlessClusterResponse
     *
     * @param DescribeServerlessClusterRequest $request
     *
     * @return DescribeServerlessClusterResponse
     */
    public function describeServerlessCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerlessClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSubDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubDomainResponse
     *
     * @param DescribeSubDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSubDomainResponse
     */
    public function describeSubDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeSubDomain',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSubDomainRequest
     *
     * @returns DescribeSubDomainResponse
     *
     * @param DescribeSubDomainRequest $request
     *
     * @return DescribeSubDomainResponse
     */
    public function describeSubDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableHBaseueBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHBaseueBackupResponse
     *
     * @param EnableHBaseueBackupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableHBaseueBackupResponse
     */
    public function enableHBaseueBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->coldStorageSize) {
            @$query['ColdStorageSize'] = $request->coldStorageSize;
        }

        if (null !== $request->hbaseueClusterId) {
            @$query['HbaseueClusterId'] = $request->hbaseueClusterId;
        }

        if (null !== $request->nodeCount) {
            @$query['NodeCount'] = $request->nodeCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHBaseueBackup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableHBaseueBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableHBaseueBackupRequest
     *
     * @returns EnableHBaseueBackupResponse
     *
     * @param EnableHBaseueBackupRequest $request
     *
     * @return EnableHBaseueBackupResponse
     */
    public function enableHBaseueBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHBaseueBackupWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableHBaseueModuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHBaseueModuleResponse
     *
     * @param EnableHBaseueModuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableHBaseueModuleResponse
     */
    public function enableHBaseueModuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->bdsId) {
            @$query['BdsId'] = $request->bdsId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->hbaseueClusterId) {
            @$query['HbaseueClusterId'] = $request->hbaseueClusterId;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        if (null !== $request->moduleClusterName) {
            @$query['ModuleClusterName'] = $request->moduleClusterName;
        }

        if (null !== $request->moduleTypeName) {
            @$query['ModuleTypeName'] = $request->moduleTypeName;
        }

        if (null !== $request->nodeCount) {
            @$query['NodeCount'] = $request->nodeCount;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHBaseueModule',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableHBaseueModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableHBaseueModuleRequest
     *
     * @returns EnableHBaseueModuleResponse
     *
     * @param EnableHBaseueModuleRequest $request
     *
     * @return EnableHBaseueModuleResponse
     */
    public function enableHBaseueModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHBaseueModuleWithOptions($request, $runtime);
    }

    /**
     * @param request - EvaluateMultiZoneResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateMultiZoneResourceResponse
     *
     * @param EvaluateMultiZoneResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EvaluateMultiZoneResourceResponse
     */
    public function evaluateMultiZoneResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arbiterVSwitchId) {
            @$query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }

        if (null !== $request->arbiterZoneId) {
            @$query['ArbiterZoneId'] = $request->arbiterZoneId;
        }

        if (null !== $request->archVersion) {
            @$query['ArchVersion'] = $request->archVersion;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->coreDiskSize) {
            @$query['CoreDiskSize'] = $request->coreDiskSize;
        }

        if (null !== $request->coreDiskType) {
            @$query['CoreDiskType'] = $request->coreDiskType;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->coreNodeCount) {
            @$query['CoreNodeCount'] = $request->coreNodeCount;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->logDiskSize) {
            @$query['LogDiskSize'] = $request->logDiskSize;
        }

        if (null !== $request->logDiskType) {
            @$query['LogDiskType'] = $request->logDiskType;
        }

        if (null !== $request->logInstanceType) {
            @$query['LogInstanceType'] = $request->logInstanceType;
        }

        if (null !== $request->logNodeCount) {
            @$query['LogNodeCount'] = $request->logNodeCount;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        if (null !== $request->multiZoneCombination) {
            @$query['MultiZoneCombination'] = $request->multiZoneCombination;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->primaryVSwitchId) {
            @$query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }

        if (null !== $request->primaryZoneId) {
            @$query['PrimaryZoneId'] = $request->primaryZoneId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EvaluateMultiZoneResource',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluateMultiZoneResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EvaluateMultiZoneResourceRequest
     *
     * @returns EvaluateMultiZoneResourceResponse
     *
     * @param EvaluateMultiZoneResourceRequest $request
     *
     * @return EvaluateMultiZoneResourceResponse
     */
    public function evaluateMultiZoneResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateMultiZoneResourceWithOptions($request, $runtime);
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMultimodeCmsUrl',
            'version' => '2019-01-01',
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
     * 授权账户权限.
     *
     * @param request - GrantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantResponse
     *
     * @param GrantRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return GrantResponse
     */
    public function grantWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->aclActions) {
            @$query['AclActions'] = $request->aclActions;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Grant',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权账户权限.
     *
     * @param request - GrantRequest
     *
     * @returns GrantResponse
     *
     * @param GrantRequest $request
     *
     * @return GrantResponse
     */
    public function grant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantWithOptions($request, $runtime);
    }

    /**
     * @param request - ListHBaseInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHBaseInstancesResponse
     *
     * @param ListHBaseInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListHBaseInstancesResponse
     */
    public function listHBaseInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHBaseInstances',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHBaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListHBaseInstancesRequest
     *
     * @returns ListHBaseInstancesResponse
     *
     * @param ListHBaseInstancesRequest $request
     *
     * @return ListHBaseInstancesResponse
     */
    public function listHBaseInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHBaseInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListInstanceServiceConfigHistoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceServiceConfigHistoriesResponse
     *
     * @param ListInstanceServiceConfigHistoriesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListInstanceServiceConfigHistoriesResponse
     */
    public function listInstanceServiceConfigHistoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceServiceConfigHistories',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceServiceConfigHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListInstanceServiceConfigHistoriesRequest
     *
     * @returns ListInstanceServiceConfigHistoriesResponse
     *
     * @param ListInstanceServiceConfigHistoriesRequest $request
     *
     * @return ListInstanceServiceConfigHistoriesResponse
     */
    public function listInstanceServiceConfigHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceServiceConfigHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListInstanceServiceConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceServiceConfigurationsResponse
     *
     * @param ListInstanceServiceConfigurationsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListInstanceServiceConfigurationsResponse
     */
    public function listInstanceServiceConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceServiceConfigurations',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceServiceConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListInstanceServiceConfigurationsRequest
     *
     * @returns ListInstanceServiceConfigurationsResponse
     *
     * @param ListInstanceServiceConfigurationsRequest $request
     *
     * @return ListInstanceServiceConfigurationsResponse
     */
    public function listInstanceServiceConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceServiceConfigurationsWithOptions($request, $runtime);
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-01-01',
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
     * @param request - ListTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * 更改账户密码
     *
     * @param request - ModifyAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountPasswordResponse
     *
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->newAccountPassword) {
            @$query['NewAccountPassword'] = $request->newAccountPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountPassword',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更改账户密码
     *
     * @param request - ModifyAccountPasswordRequest
     *
     * @returns ModifyAccountPasswordResponse
     *
     * @param ModifyAccountPasswordRequest $request
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->immediateStart) {
            @$query['ImmediateStart'] = $request->immediateStart;
        }

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

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationTasks',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyActiveOperationTasksRequest
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyBackupPlanConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupPlanConfigResponse
     *
     * @param ModifyBackupPlanConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBackupPlanConfigResponse
     */
    public function modifyBackupPlanConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->fullBackupCycle) {
            @$query['FullBackupCycle'] = $request->fullBackupCycle;
        }

        if (null !== $request->minHFileBackupCount) {
            @$query['MinHFileBackupCount'] = $request->minHFileBackupCount;
        }

        if (null !== $request->nextFullBackupDate) {
            @$query['NextFullBackupDate'] = $request->nextFullBackupDate;
        }

        if (null !== $request->tables) {
            @$query['Tables'] = $request->tables;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPlanConfig',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupPlanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyBackupPlanConfigRequest
     *
     * @returns ModifyBackupPlanConfigResponse
     *
     * @param ModifyBackupPlanConfigRequest $request
     *
     * @return ModifyBackupPlanConfigResponse
     */
    public function modifyBackupPlanConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPlanConfigWithOptions($request, $runtime);
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
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPolicy',
            'version' => '2019-01-01',
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
     * @param request - ModifyClusterDeletionProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterDeletionProtectionResponse
     *
     * @param ModifyClusterDeletionProtectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyClusterDeletionProtectionResponse
     */
    public function modifyClusterDeletionProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->protection) {
            @$query['Protection'] = $request->protection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterDeletionProtection',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyClusterDeletionProtectionRequest
     *
     * @returns ModifyClusterDeletionProtectionResponse
     *
     * @param ModifyClusterDeletionProtectionRequest $request
     *
     * @return ModifyClusterDeletionProtectionResponse
     */
    public function modifyClusterDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDiskWarningLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskWarningLineResponse
     *
     * @param ModifyDiskWarningLineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDiskWarningLineResponse
     */
    public function modifyDiskWarningLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->warningLine) {
            @$query['WarningLine'] = $request->warningLine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskWarningLine',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDiskWarningLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDiskWarningLineRequest
     *
     * @returns ModifyDiskWarningLineResponse
     *
     * @param ModifyDiskWarningLineRequest $request
     *
     * @return ModifyDiskWarningLineResponse
     */
    public function modifyDiskWarningLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskWarningLineWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyInstanceMaintainTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceMaintainTimeResponse
     *
     * @param ModifyInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maintainEndTime) {
            @$query['MaintainEndTime'] = $request->maintainEndTime;
        }

        if (null !== $request->maintainStartTime) {
            @$query['MaintainStartTime'] = $request->maintainStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceMaintainTime',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceMaintainTimeRequest
     *
     * @returns ModifyInstanceMaintainTimeResponse
     *
     * @param ModifyInstanceMaintainTimeRequest $request
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceNameResponse
     *
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
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
            'action' => 'ModifyInstanceName',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceNameRequest
     *
     * @returns ModifyInstanceNameResponse
     *
     * @param ModifyInstanceNameRequest $request
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNameWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyInstanceServiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceServiceConfigResponse
     *
     * @param ModifyInstanceServiceConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceServiceConfigResponse
     */
    public function modifyInstanceServiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->configureName) {
            @$query['ConfigureName'] = $request->configureName;
        }

        if (null !== $request->configureValue) {
            @$query['ConfigureValue'] = $request->configureValue;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->restart) {
            @$query['Restart'] = $request->restart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceServiceConfig',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceServiceConfigRequest
     *
     * @returns ModifyInstanceServiceConfigResponse
     *
     * @param ModifyInstanceServiceConfigRequest $request
     *
     * @return ModifyInstanceServiceConfigResponse
     */
    public function modifyInstanceServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceTypeResponse
     *
     * @param ModifyInstanceTypeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceTypeResponse
     */
    public function modifyInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceType',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceTypeRequest
     *
     * @returns ModifyInstanceTypeResponse
     *
     * @param ModifyInstanceTypeRequest $request
     *
     * @return ModifyInstanceTypeResponse
     */
    public function modifyInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIpWhitelistResponse
     *
     * @param ModifyIpWhitelistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyIpWhitelistResponse
     */
    public function modifyIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ipList) {
            @$query['IpList'] = $request->ipList;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIpWhitelist',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyIpWhitelistRequest
     *
     * @returns ModifyIpWhitelistResponse
     *
     * @param ModifyIpWhitelistRequest $request
     *
     * @return ModifyIpWhitelistResponse
     */
    public function modifyIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyMultiZoneClusterNodeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMultiZoneClusterNodeTypeResponse
     *
     * @param ModifyMultiZoneClusterNodeTypeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyMultiZoneClusterNodeTypeResponse
     */
    public function modifyMultiZoneClusterNodeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coreInstanceType) {
            @$query['CoreInstanceType'] = $request->coreInstanceType;
        }

        if (null !== $request->logInstanceType) {
            @$query['LogInstanceType'] = $request->logInstanceType;
        }

        if (null !== $request->masterInstanceType) {
            @$query['MasterInstanceType'] = $request->masterInstanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMultiZoneClusterNodeType',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMultiZoneClusterNodeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyMultiZoneClusterNodeTypeRequest
     *
     * @returns ModifyMultiZoneClusterNodeTypeResponse
     *
     * @param ModifyMultiZoneClusterNodeTypeRequest $request
     *
     * @return ModifyMultiZoneClusterNodeTypeResponse
     */
    public function modifyMultiZoneClusterNodeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMultiZoneClusterNodeTypeWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifySecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityGroupsResponse
     *
     * @param ModifySecurityGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifySecurityGroupsResponse
     */
    public function modifySecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityGroups',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifySecurityGroupsRequest
     *
     * @returns ModifySecurityGroupsResponse
     *
     * @param ModifySecurityGroupsRequest $request
     *
     * @return ModifySecurityGroupsResponse
     */
    public function modifySecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyUIAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUIAccountPasswordResponse
     *
     * @param ModifyUIAccountPasswordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyUIAccountPasswordResponse
     */
    public function modifyUIAccountPasswordWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUIAccountPassword',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUIAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyUIAccountPasswordRequest
     *
     * @returns ModifyUIAccountPasswordResponse
     *
     * @param ModifyUIAccountPasswordRequest $request
     *
     * @return ModifyUIAccountPasswordResponse
     */
    public function modifyUIAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUIAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenBackup',
            'version' => '2019-01-01',
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
     * @param request - PurgeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PurgeInstanceResponse
     *
     * @param PurgeInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PurgeInstanceResponse
     */
    public function purgeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PurgeInstance',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PurgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PurgeInstanceRequest
     *
     * @returns PurgeInstanceResponse
     *
     * @param PurgeInstanceRequest $request
     *
     * @return PurgeInstanceResponse
     */
    public function purgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeInstanceWithOptions($request, $runtime);
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
        if (null !== $request->bdsId) {
            @$query['BdsId'] = $request->bdsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryHBaseHaDB',
            'version' => '2019-01-01',
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
     * @param request - QueryXpackRelateDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryXpackRelateDBResponse
     *
     * @param QueryXpackRelateDBRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryXpackRelateDBResponse
     */
    public function queryXpackRelateDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->hasSingleNode) {
            @$query['HasSingleNode'] = $request->hasSingleNode;
        }

        if (null !== $request->relateDbType) {
            @$query['RelateDbType'] = $request->relateDbType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryXpackRelateDB',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryXpackRelateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryXpackRelateDBRequest
     *
     * @returns QueryXpackRelateDBResponse
     *
     * @param QueryXpackRelateDBRequest $request
     *
     * @return QueryXpackRelateDBResponse
     */
    public function queryXpackRelateDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryXpackRelateDBWithOptions($request, $runtime);
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RelateDbForHBaseHa',
            'version' => '2019-01-01',
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleasePublicNetworkAddress',
            'version' => '2019-01-01',
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
     * @param request - RenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - ResizeColdStorageSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeColdStorageSizeResponse
     *
     * @param ResizeColdStorageSizeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResizeColdStorageSizeResponse
     */
    public function resizeColdStorageSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coldStorageSize) {
            @$query['ColdStorageSize'] = $request->coldStorageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeColdStorageSize',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeColdStorageSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResizeColdStorageSizeRequest
     *
     * @returns ResizeColdStorageSizeResponse
     *
     * @param ResizeColdStorageSizeRequest $request
     *
     * @return ResizeColdStorageSizeResponse
     */
    public function resizeColdStorageSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeColdStorageSizeWithOptions($request, $runtime);
    }

    /**
     * @param request - ResizeDiskSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeDiskSizeResponse
     *
     * @param ResizeDiskSizeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResizeDiskSizeResponse
     */
    public function resizeDiskSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeDiskSize) {
            @$query['NodeDiskSize'] = $request->nodeDiskSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeDiskSize',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResizeDiskSizeRequest
     *
     * @returns ResizeDiskSizeResponse
     *
     * @param ResizeDiskSizeRequest $request
     *
     * @return ResizeDiskSizeResponse
     */
    public function resizeDiskSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDiskSizeWithOptions($request, $runtime);
    }

    /**
     * @param request - ResizeMultiZoneClusterDiskSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeMultiZoneClusterDiskSizeResponse
     *
     * @param ResizeMultiZoneClusterDiskSizeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ResizeMultiZoneClusterDiskSizeResponse
     */
    public function resizeMultiZoneClusterDiskSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coreDiskSize) {
            @$query['CoreDiskSize'] = $request->coreDiskSize;
        }

        if (null !== $request->logDiskSize) {
            @$query['LogDiskSize'] = $request->logDiskSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeMultiZoneClusterDiskSize',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeMultiZoneClusterDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResizeMultiZoneClusterDiskSizeRequest
     *
     * @returns ResizeMultiZoneClusterDiskSizeResponse
     *
     * @param ResizeMultiZoneClusterDiskSizeRequest $request
     *
     * @return ResizeMultiZoneClusterDiskSizeResponse
     */
    public function resizeMultiZoneClusterDiskSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeMultiZoneClusterDiskSizeWithOptions($request, $runtime);
    }

    /**
     * @param request - ResizeMultiZoneClusterNodeCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeMultiZoneClusterNodeCountResponse
     *
     * @param ResizeMultiZoneClusterNodeCountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ResizeMultiZoneClusterNodeCountResponse
     */
    public function resizeMultiZoneClusterNodeCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arbiterVSwitchId) {
            @$query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coreNodeCount) {
            @$query['CoreNodeCount'] = $request->coreNodeCount;
        }

        if (null !== $request->logNodeCount) {
            @$query['LogNodeCount'] = $request->logNodeCount;
        }

        if (null !== $request->primaryCoreNodeCount) {
            @$query['PrimaryCoreNodeCount'] = $request->primaryCoreNodeCount;
        }

        if (null !== $request->primaryVSwitchId) {
            @$query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }

        if (null !== $request->standbyCoreNodeCount) {
            @$query['StandbyCoreNodeCount'] = $request->standbyCoreNodeCount;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeMultiZoneClusterNodeCount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeMultiZoneClusterNodeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResizeMultiZoneClusterNodeCountRequest
     *
     * @returns ResizeMultiZoneClusterNodeCountResponse
     *
     * @param ResizeMultiZoneClusterNodeCountRequest $request
     *
     * @return ResizeMultiZoneClusterNodeCountResponse
     */
    public function resizeMultiZoneClusterNodeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeMultiZoneClusterNodeCountWithOptions($request, $runtime);
    }

    /**
     * @param request - ResizeNodeCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeNodeCountResponse
     *
     * @param ResizeNodeCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResizeNodeCountResponse
     */
    public function resizeNodeCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeCount) {
            @$query['NodeCount'] = $request->nodeCount;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeNodeCount',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeNodeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResizeNodeCountRequest
     *
     * @returns ResizeNodeCountResponse
     *
     * @param ResizeNodeCountRequest $request
     *
     * @return ResizeNodeCountResponse
     */
    public function resizeNodeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeNodeCountWithOptions($request, $runtime);
    }

    /**
     * @param request - RestartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * 回收账户权限.
     *
     * @param request - RevokeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeResponse
     *
     * @param RevokeRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return RevokeResponse
     */
    public function revokeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->aclActions) {
            @$query['AclActions'] = $request->aclActions;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Revoke',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 回收账户权限.
     *
     * @param request - RevokeRequest
     *
     * @returns RevokeResponse
     *
     * @param RevokeRequest $request
     *
     * @return RevokeResponse
     */
    public function revoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeWithOptions($request, $runtime);
    }

    /**
     * @param request - SwitchHbaseHaSlbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchHbaseHaSlbResponse
     *
     * @param SwitchHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SwitchHbaseHaSlbResponse
     */
    public function switchHbaseHaSlbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bdsId) {
            @$query['BdsId'] = $request->bdsId;
        }

        if (null !== $request->haId) {
            @$query['HaId'] = $request->haId;
        }

        if (null !== $request->haTypes) {
            @$query['HaTypes'] = $request->haTypes;
        }

        if (null !== $request->hbaseType) {
            @$query['HbaseType'] = $request->hbaseType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchHbaseHaSlb',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchHbaseHaSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SwitchHbaseHaSlbRequest
     *
     * @returns SwitchHbaseHaSlbResponse
     *
     * @param SwitchHbaseHaSlbRequest $request
     *
     * @return SwitchHbaseHaSlbResponse
     */
    public function switchHbaseHaSlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchHbaseHaSlbWithOptions($request, $runtime);
    }

    /**
     * 开通/关闭 扩展服务
     *
     * @param request - SwitchServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchServiceResponse
     *
     * @param SwitchServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SwitchServiceResponse
     */
    public function switchServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->operate) {
            @$query['Operate'] = $request->operate;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchService',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通/关闭 扩展服务
     *
     * @param request - SwitchServiceRequest
     *
     * @returns SwitchServiceResponse
     *
     * @param SwitchServiceRequest $request
     *
     * @return SwitchServiceResponse
     */
    public function switchService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchServiceWithOptions($request, $runtime);
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-01-01',
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
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
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
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeMinorVersion',
            'version' => '2019-01-01',
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
     * @param request - UpgradeMultiZoneClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeMultiZoneClusterResponse
     *
     * @param UpgradeMultiZoneClusterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpgradeMultiZoneClusterResponse
     */
    public function upgradeMultiZoneClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->components) {
            @$query['Components'] = $request->components;
        }

        if (null !== $request->restartComponents) {
            @$query['RestartComponents'] = $request->restartComponents;
        }

        if (null !== $request->runMode) {
            @$query['RunMode'] = $request->runMode;
        }

        if (null !== $request->upgradeInsName) {
            @$query['UpgradeInsName'] = $request->upgradeInsName;
        }

        if (null !== $request->versions) {
            @$query['Versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeMultiZoneCluster',
            'version' => '2019-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpgradeMultiZoneClusterRequest
     *
     * @returns UpgradeMultiZoneClusterResponse
     *
     * @param UpgradeMultiZoneClusterRequest $request
     *
     * @return UpgradeMultiZoneClusterResponse
     */
    public function upgradeMultiZoneCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMultiZoneClusterWithOptions($request, $runtime);
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

        if (null !== $request->relateDbType) {
            @$query['RelateDbType'] = $request->relateDbType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'XpackRelateDB',
            'version' => '2019-01-01',
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
