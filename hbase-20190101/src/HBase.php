<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserHdfsInfo',
            'version'     => '2019-01-01',
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocatePublicNetworkAddress',
            'version'     => '2019-01-01',
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
     * @param CancelActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
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
            'action'      => 'CancelActiveOperationTasks',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckComponentsVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckComponentsVersionResponse
     */
    public function checkComponentsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckComponentsVersion',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckComponentsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseBackup',
            'version'     => '2019-01-01',
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
     * @param ConvertInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertInstance',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupPlan',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->coldStorageSize)) {
            $query['ColdStorageSize'] = $request->coldStorageSize;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        if (!Utils::isUnset($request->nodeCount)) {
            $query['NodeCount'] = $request->nodeCount;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
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
            'version'     => '2019-01-01',
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGlobalResource',
            'version'     => '2019-01-01',
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
     * @param CreateHBaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHBaseSlbServerResponse
     */
    public function createHBaseSlbServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->slbServer)) {
            $query['SlbServer'] = $request->slbServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHBaseSlbServer',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHBaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateHbaseHaSlbResponse
     */
    public function createHbaseHaSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bdsId)) {
            $query['BdsId'] = $request->bdsId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->haId)) {
            $query['HaId'] = $request->haId;
        }
        if (!Utils::isUnset($request->haTypes)) {
            $query['HaTypes'] = $request->haTypes;
        }
        if (!Utils::isUnset($request->hbaseType)) {
            $query['HbaseType'] = $request->hbaseType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHbaseHaSlb',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHbaseHaSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMultiZoneClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMultiZoneClusterResponse
     */
    public function createMultiZoneClusterWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->coreDiskSize)) {
            $query['CoreDiskSize'] = $request->coreDiskSize;
        }
        if (!Utils::isUnset($request->coreDiskType)) {
            $query['CoreDiskType'] = $request->coreDiskType;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->coreNodeCount)) {
            $query['CoreNodeCount'] = $request->coreNodeCount;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->logDiskSize)) {
            $query['LogDiskSize'] = $request->logDiskSize;
        }
        if (!Utils::isUnset($request->logDiskType)) {
            $query['LogDiskType'] = $request->logDiskType;
        }
        if (!Utils::isUnset($request->logInstanceType)) {
            $query['LogInstanceType'] = $request->logInstanceType;
        }
        if (!Utils::isUnset($request->logNodeCount)) {
            $query['LogNodeCount'] = $request->logNodeCount;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        if (!Utils::isUnset($request->multiZoneCombination)) {
            $query['MultiZoneCombination'] = $request->multiZoneCombination;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
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
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->standbyVSwitchId)) {
            $query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }
        if (!Utils::isUnset($request->standbyZoneId)) {
            $query['StandbyZoneId'] = $request->standbyZoneId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMultiZoneCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateRestorePlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRestorePlanResponse
     */
    public function createRestorePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->restoreAllTable)) {
            $query['RestoreAllTable'] = $request->restoreAllTable;
        }
        if (!Utils::isUnset($request->restoreByCopy)) {
            $query['RestoreByCopy'] = $request->restoreByCopy;
        }
        if (!Utils::isUnset($request->restoreToDate)) {
            $query['RestoreToDate'] = $request->restoreToDate;
        }
        if (!Utils::isUnset($request->tables)) {
            $query['Tables'] = $request->tables;
        }
        if (!Utils::isUnset($request->targetClusterId)) {
            $query['TargetClusterId'] = $request->targetClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRestorePlan',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRestorePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateServerlessClusterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServerlessClusterResponse
     */
    public function createServerlessClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serverlessCapability)) {
            $query['ServerlessCapability'] = $request->serverlessCapability;
        }
        if (!Utils::isUnset($request->serverlessSpec)) {
            $query['ServerlessSpec'] = $request->serverlessSpec;
        }
        if (!Utils::isUnset($request->serverlessStorage)) {
            $query['ServerlessStorage'] = $request->serverlessStorage;
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
            'action'      => 'CreateServerlessCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServerlessClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGlobalResource',
            'version'     => '2019-01-01',
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
     * @param DeleteHBaseHaDBRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteHBaseHaDBResponse
     */
    public function deleteHBaseHaDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bdsId)) {
            $query['BdsId'] = $request->bdsId;
        }
        if (!Utils::isUnset($request->haId)) {
            $query['HaId'] = $request->haId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHBaseHaDB',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHBaseHaDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteHBaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHBaseSlbServerResponse
     */
    public function deleteHBaseSlbServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->slbServer)) {
            $query['SlbServer'] = $request->slbServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHBaseSlbServer',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHBaseSlbServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHbaseHaSlbResponse
     */
    public function deleteHbaseHaSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bdsId)) {
            $query['BdsId'] = $request->bdsId;
        }
        if (!Utils::isUnset($request->haId)) {
            $query['HaId'] = $request->haId;
        }
        if (!Utils::isUnset($request->haTypes)) {
            $query['HaTypes'] = $request->haTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHbaseHaSlb',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHbaseHaSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->immediateDeleteFlag)) {
            $query['ImmediateDeleteFlag'] = $request->immediateDeleteFlag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMultiZoneClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMultiZoneClusterResponse
     */
    public function deleteMultiZoneClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->immediateDeleteFlag)) {
            $query['ImmediateDeleteFlag'] = $request->immediateDeleteFlag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMultiZoneCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteServerlessClusterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServerlessClusterResponse
     */
    public function deleteServerlessClusterWithOptions($request, $runtime)
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
            'action'      => 'DeleteServerlessCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServerlessClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserHdfsInfo',
            'version'     => '2019-01-01',
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
     * @param DescribeActiveOperationTaskTypeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeActiveOperationTaskTypeResponse
     */
    public function describeActiveOperationTaskTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isHistory)) {
            $query['IsHistory'] = $request->isHistory;
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
            'action'      => 'DescribeActiveOperationTaskType',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTaskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeActiveOperationTasksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowCancel)) {
            $query['AllowCancel'] = $request->allowCancel;
        }
        if (!Utils::isUnset($request->allowChange)) {
            $query['AllowChange'] = $request->allowChange;
        }
        if (!Utils::isUnset($request->changeLevel)) {
            $query['ChangeLevel'] = $request->changeLevel;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
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
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationTasks',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
            'action'      => 'DescribeAvailableResource',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupPlanConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBackupPlanConfigResponse
     */
    public function describeBackupPlanConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPlanConfig',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPlanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2019-01-01',
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
     * @param DescribeBackupStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupStatusResponse
     */
    public function describeBackupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupStatus',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupSummaryResponse
     */
    public function describeBackupSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSummary',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupTablesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupTablesResponse
     */
    public function describeBackupTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupRecordId)) {
            $query['BackupRecordId'] = $request->backupRecordId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupTables',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->startTimeUTC)) {
            $query['StartTimeUTC'] = $request->startTimeUTC;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackups',
            'version'     => '2019-01-01',
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
     * @param DescribeClusterConnectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterConnectionResponse
     */
    public function describeClusterConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterConnection',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeColdStorage',
            'version'     => '2019-01-01',
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
     * @param DescribeDBInstanceUsageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBInstanceUsageResponse
     */
    public function describeDBInstanceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceUsage',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDeletedInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDeletedInstancesResponse
     */
    public function describeDeletedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeletedInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeletedInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDiskWarningLineRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDiskWarningLineResponse
     */
    public function describeDiskWarningLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskWarningLine',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskWarningLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeEndpointsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndpoints',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceTypeResponse
     */
    public function describeInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceType',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeIpWhitelistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeIpWhitelistResponse
     */
    public function describeIpWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpWhitelist',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeMultiZoneAvailableRegionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMultiZoneAvailableRegionsResponse
     */
    public function describeMultiZoneAvailableRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMultiZoneAvailableRegions',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMultiZoneAvailableRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeMultiZoneAvailableResourceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeMultiZoneAvailableResourceResponse
     */
    public function describeMultiZoneAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneCombination)) {
            $query['ZoneCombination'] = $request->zoneCombination;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMultiZoneAvailableResource',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMultiZoneAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeMultiZoneClusterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMultiZoneClusterResponse
     */
    public function describeMultiZoneClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMultiZoneCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRecoverableTimeRangeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeRecoverableTimeRangeResponse
     */
    public function describeRecoverableTimeRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecoverableTimeRange',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecoverableTimeRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-01-01',
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
     * @param DescribeRestoreFullDetailsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRestoreFullDetailsResponse
     */
    public function describeRestoreFullDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->restoreRecordId)) {
            $query['RestoreRecordId'] = $request->restoreRecordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreFullDetails',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreFullDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRestoreIncrDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRestoreIncrDetailResponse
     */
    public function describeRestoreIncrDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->restoreRecordId)) {
            $query['RestoreRecordId'] = $request->restoreRecordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreIncrDetail',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreIncrDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRestoreSchemaDetailsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeRestoreSchemaDetailsResponse
     */
    public function describeRestoreSchemaDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->restoreRecordId)) {
            $query['RestoreRecordId'] = $request->restoreRecordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreSchemaDetails',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreSchemaDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRestoreSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRestoreSummaryResponse
     */
    public function describeRestoreSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreSummary',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRestoreTablesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRestoreTablesResponse
     */
    public function describeRestoreTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->restoreRecordId)) {
            $query['RestoreRecordId'] = $request->restoreRecordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreTables',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroups',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeServerlessClusterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServerlessClusterResponse
     */
    public function describeServerlessClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServerlessCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServerlessClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSubDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSubDomainResponse
     */
    public function describeSubDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeSubDomain',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableHBaseueBackupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableHBaseueBackupResponse
     */
    public function enableHBaseueBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->coldStorageSize)) {
            $query['ColdStorageSize'] = $request->coldStorageSize;
        }
        if (!Utils::isUnset($request->hbaseueClusterId)) {
            $query['HbaseueClusterId'] = $request->hbaseueClusterId;
        }
        if (!Utils::isUnset($request->nodeCount)) {
            $query['NodeCount'] = $request->nodeCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableHBaseueBackup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableHBaseueBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableHBaseueModuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableHBaseueModuleResponse
     */
    public function enableHBaseueModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->bdsId)) {
            $query['BdsId'] = $request->bdsId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->hbaseueClusterId)) {
            $query['HbaseueClusterId'] = $request->hbaseueClusterId;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        if (!Utils::isUnset($request->moduleClusterName)) {
            $query['ModuleClusterName'] = $request->moduleClusterName;
        }
        if (!Utils::isUnset($request->moduleTypeName)) {
            $query['ModuleTypeName'] = $request->moduleTypeName;
        }
        if (!Utils::isUnset($request->nodeCount)) {
            $query['NodeCount'] = $request->nodeCount;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableHBaseueModule',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableHBaseueModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EvaluateMultiZoneResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EvaluateMultiZoneResourceResponse
     */
    public function evaluateMultiZoneResourceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->coreDiskSize)) {
            $query['CoreDiskSize'] = $request->coreDiskSize;
        }
        if (!Utils::isUnset($request->coreDiskType)) {
            $query['CoreDiskType'] = $request->coreDiskType;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->coreNodeCount)) {
            $query['CoreNodeCount'] = $request->coreNodeCount;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->logDiskSize)) {
            $query['LogDiskSize'] = $request->logDiskSize;
        }
        if (!Utils::isUnset($request->logDiskType)) {
            $query['LogDiskType'] = $request->logDiskType;
        }
        if (!Utils::isUnset($request->logInstanceType)) {
            $query['LogInstanceType'] = $request->logInstanceType;
        }
        if (!Utils::isUnset($request->logNodeCount)) {
            $query['LogNodeCount'] = $request->logNodeCount;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        if (!Utils::isUnset($request->multiZoneCombination)) {
            $query['MultiZoneCombination'] = $request->multiZoneCombination;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
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
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->standbyVSwitchId)) {
            $query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }
        if (!Utils::isUnset($request->standbyZoneId)) {
            $query['StandbyZoneId'] = $request->standbyZoneId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EvaluateMultiZoneResource',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EvaluateMultiZoneResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultimodeCmsUrl',
            'version'     => '2019-01-01',
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
     * @param ListHBaseInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListHBaseInstancesResponse
     */
    public function listHBaseInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHBaseInstances',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHBaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstanceServiceConfigHistoriesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListInstanceServiceConfigHistoriesResponse
     */
    public function listInstanceServiceConfigHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceServiceConfigHistories',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceServiceConfigHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstanceServiceConfigurationsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListInstanceServiceConfigurationsResponse
     */
    public function listInstanceServiceConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceServiceConfigurations',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceServiceConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-01-01',
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
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTags',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->immediateStart)) {
            $query['ImmediateStart'] = $request->immediateStart;
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyActiveOperationTasks',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupPlanConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBackupPlanConfigResponse
     */
    public function modifyBackupPlanConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->fullBackupCycle)) {
            $query['FullBackupCycle'] = $request->fullBackupCycle;
        }
        if (!Utils::isUnset($request->minHFileBackupCount)) {
            $query['MinHFileBackupCount'] = $request->minHFileBackupCount;
        }
        if (!Utils::isUnset($request->nextFullBackupDate)) {
            $query['NextFullBackupDate'] = $request->nextFullBackupDate;
        }
        if (!Utils::isUnset($request->tables)) {
            $query['Tables'] = $request->tables;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPlanConfig',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPlanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2019-01-01',
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
     * @param ModifyClusterDeletionProtectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyClusterDeletionProtectionResponse
     */
    public function modifyClusterDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->protection)) {
            $query['Protection'] = $request->protection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterDeletionProtection',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDiskWarningLineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDiskWarningLineResponse
     */
    public function modifyDiskWarningLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->warningLine)) {
            $query['WarningLine'] = $request->warningLine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiskWarningLine',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDiskWarningLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->maintainEndTime)) {
            $query['MaintainEndTime'] = $request->maintainEndTime;
        }
        if (!Utils::isUnset($request->maintainStartTime)) {
            $query['MaintainStartTime'] = $request->maintainStartTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceMaintainTime',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
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
            'action'      => 'ModifyInstanceName',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceServiceConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceServiceConfigResponse
     */
    public function modifyInstanceServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configureName)) {
            $query['ConfigureName'] = $request->configureName;
        }
        if (!Utils::isUnset($request->configureValue)) {
            $query['ConfigureValue'] = $request->configureValue;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->restart)) {
            $query['Restart'] = $request->restart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceServiceConfig',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceTypeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceTypeResponse
     */
    public function modifyInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceType',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyIpWhitelistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyIpWhitelistResponse
     */
    public function modifyIpWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpWhitelist',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyMultiZoneClusterNodeTypeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyMultiZoneClusterNodeTypeResponse
     */
    public function modifyMultiZoneClusterNodeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->coreInstanceType)) {
            $query['CoreInstanceType'] = $request->coreInstanceType;
        }
        if (!Utils::isUnset($request->logInstanceType)) {
            $query['LogInstanceType'] = $request->logInstanceType;
        }
        if (!Utils::isUnset($request->masterInstanceType)) {
            $query['MasterInstanceType'] = $request->masterInstanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMultiZoneClusterNodeType',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMultiZoneClusterNodeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifySecurityGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifySecurityGroupsResponse
     */
    public function modifySecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityGroups',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyUIAccountPasswordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyUIAccountPasswordResponse
     */
    public function modifyUIAccountPasswordWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUIAccountPassword',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUIAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenBackup',
            'version'     => '2019-01-01',
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
     * @param PurgeInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PurgeInstanceResponse
     */
    public function purgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PurgeInstance',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryHBaseHaDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryHBaseHaDBResponse
     */
    public function queryHBaseHaDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bdsId)) {
            $query['BdsId'] = $request->bdsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHBaseHaDB',
            'version'     => '2019-01-01',
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
     * @param QueryXpackRelateDBRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryXpackRelateDBResponse
     */
    public function queryXpackRelateDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hasSingleNode)) {
            $query['HasSingleNode'] = $request->hasSingleNode;
        }
        if (!Utils::isUnset($request->relateDbType)) {
            $query['RelateDbType'] = $request->relateDbType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryXpackRelateDB',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryXpackRelateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RelateDbForHBaseHa',
            'version'     => '2019-01-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePublicNetworkAddress',
            'version'     => '2019-01-01',
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
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ResizeColdStorageSizeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResizeColdStorageSizeResponse
     */
    public function resizeColdStorageSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->coldStorageSize)) {
            $query['ColdStorageSize'] = $request->coldStorageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeColdStorageSize',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeColdStorageSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ResizeDiskSizeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResizeDiskSizeResponse
     */
    public function resizeDiskSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeDiskSize)) {
            $query['NodeDiskSize'] = $request->nodeDiskSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeDiskSize',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ResizeMultiZoneClusterDiskSizeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ResizeMultiZoneClusterDiskSizeResponse
     */
    public function resizeMultiZoneClusterDiskSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->coreDiskSize)) {
            $query['CoreDiskSize'] = $request->coreDiskSize;
        }
        if (!Utils::isUnset($request->logDiskSize)) {
            $query['LogDiskSize'] = $request->logDiskSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeMultiZoneClusterDiskSize',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeMultiZoneClusterDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ResizeMultiZoneClusterNodeCountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ResizeMultiZoneClusterNodeCountResponse
     */
    public function resizeMultiZoneClusterNodeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arbiterVSwitchId)) {
            $query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->coreNodeCount)) {
            $query['CoreNodeCount'] = $request->coreNodeCount;
        }
        if (!Utils::isUnset($request->logNodeCount)) {
            $query['LogNodeCount'] = $request->logNodeCount;
        }
        if (!Utils::isUnset($request->primaryCoreNodeCount)) {
            $query['PrimaryCoreNodeCount'] = $request->primaryCoreNodeCount;
        }
        if (!Utils::isUnset($request->primaryVSwitchId)) {
            $query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }
        if (!Utils::isUnset($request->standbyCoreNodeCount)) {
            $query['StandbyCoreNodeCount'] = $request->standbyCoreNodeCount;
        }
        if (!Utils::isUnset($request->standbyVSwitchId)) {
            $query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeMultiZoneClusterNodeCount',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeMultiZoneClusterNodeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ResizeNodeCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResizeNodeCountResponse
     */
    public function resizeNodeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeCount)) {
            $query['NodeCount'] = $request->nodeCount;
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
            'action'      => 'ResizeNodeCount',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeNodeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartInstance',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SwitchHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SwitchHbaseHaSlbResponse
     */
    public function switchHbaseHaSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bdsId)) {
            $query['BdsId'] = $request->bdsId;
        }
        if (!Utils::isUnset($request->haId)) {
            $query['HaId'] = $request->haId;
        }
        if (!Utils::isUnset($request->haTypes)) {
            $query['HaTypes'] = $request->haTypes;
        }
        if (!Utils::isUnset($request->hbaseType)) {
            $query['HbaseType'] = $request->hbaseType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchHbaseHaSlb',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchHbaseHaSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SwitchServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SwitchServiceResponse
     */
    public function switchServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->operate)) {
            $query['Operate'] = $request->operate;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchService',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-01-01',
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
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnTagResources',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpgradeMinorVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMinorVersion',
            'version'     => '2019-01-01',
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
     * @param UpgradeMultiZoneClusterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpgradeMultiZoneClusterResponse
     */
    public function upgradeMultiZoneClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
        }
        if (!Utils::isUnset($request->restartComponents)) {
            $query['RestartComponents'] = $request->restartComponents;
        }
        if (!Utils::isUnset($request->runMode)) {
            $query['RunMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->upgradeInsName)) {
            $query['UpgradeInsName'] = $request->upgradeInsName;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['Versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMultiZoneCluster',
            'version'     => '2019-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeMultiZoneClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->relateDbType)) {
            $query['RelateDbType'] = $request->relateDbType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'XpackRelateDB',
            'version'     => '2019-01-01',
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
