<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\HBase\V20190101\Models\AddUserHdfsInfoRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\AddUserHdfsInfoResponse;
use AlibabaCloud\SDK\HBase\V20190101\Models\AllocatePublicNetworkAddressRequest;
use AlibabaCloud\SDK\HBase\V20190101\Models\AllocatePublicNetworkAddressResponse;
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
use Darabonba\OpenApi\OpenApiClient;

class HBase extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'hbase.aliyuncs.com',
            'ap-southeast-1'              => 'hbase.aliyuncs.com',
            'cn-beijing'                  => 'hbase.aliyuncs.com',
            'cn-beijing-finance-1'        => 'hbase.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'hbase.aliyuncs.com',
            'cn-beijing-gov-1'            => 'hbase.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'hbase.aliyuncs.com',
            'cn-edge-1'                   => 'hbase.aliyuncs.com',
            'cn-fujian'                   => 'hbase.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'hbase.aliyuncs.com',
            'cn-hangzhou'                 => 'hbase.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'hbase.aliyuncs.com',
            'cn-hangzhou-finance'         => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hbase.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hbase.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'hbase.aliyuncs.com',
            'cn-hongkong'                 => 'hbase.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'hbase.aliyuncs.com',
            'cn-north-2-gov-1'            => 'hbase.aliyuncs.com',
            'cn-qingdao'                  => 'hbase.aliyuncs.com',
            'cn-qingdao-nebula'           => 'hbase.aliyuncs.com',
            'cn-shanghai'                 => 'hbase.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'hbase.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'hbase.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'hbase.aliyuncs.com',
            'cn-shanghai-inner'           => 'hbase.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hbase.aliyuncs.com',
            'cn-shenzhen'                 => 'hbase.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'hbase.aliyuncs.com',
            'cn-shenzhen-inner'           => 'hbase.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'hbase.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'hbase.aliyuncs.com',
            'cn-wuhan'                    => 'hbase.aliyuncs.com',
            'cn-yushanfang'               => 'hbase.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'hbase.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'hbase.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'hbase.aliyuncs.com',
            'eu-west-1-oxs'               => 'hbase.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'hbase.ap-northeast-1.aliyuncs.com',
            'us-east-1'                   => 'hbase.aliyuncs.com',
            'us-west-1'                   => 'hbase.aliyuncs.com',
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUserHdfsInfoResponse::fromMap($this->doRPCRequest('AddUserHdfsInfo', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocatePublicNetworkAddressResponse::fromMap($this->doRPCRequest('AllocatePublicNetworkAddress', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckComponentsVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckComponentsVersionResponse
     */
    public function checkComponentsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckComponentsVersionResponse::fromMap($this->doRPCRequest('CheckComponentsVersion', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseBackupResponse::fromMap($this->doRPCRequest('CloseBackup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertInstanceResponse::fromMap($this->doRPCRequest('ConvertInstance', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupPlanResponse::fromMap($this->doRPCRequest('CreateBackupPlan', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterResponse::fromMap($this->doRPCRequest('CreateCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGlobalResourceResponse::fromMap($this->doRPCRequest('CreateGlobalResource', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateHbaseHaSlbResponse
     */
    public function createHbaseHaSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHbaseHaSlbResponse::fromMap($this->doRPCRequest('CreateHbaseHaSlb', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateHBaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHBaseSlbServerResponse
     */
    public function createHBaseSlbServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHBaseSlbServerResponse::fromMap($this->doRPCRequest('CreateHBaseSlbServer', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateMultiZoneClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMultiZoneClusterResponse
     */
    public function createMultiZoneClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMultiZoneClusterResponse::fromMap($this->doRPCRequest('CreateMultiZoneCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRestorePlanResponse::fromMap($this->doRPCRequest('CreateRestorePlan', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServerlessClusterResponse::fromMap($this->doRPCRequest('CreateServerlessCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGlobalResourceResponse::fromMap($this->doRPCRequest('DeleteGlobalResource', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHBaseHaDBResponse::fromMap($this->doRPCRequest('DeleteHBaseHaDB', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHbaseHaSlbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHbaseHaSlbResponse
     */
    public function deleteHbaseHaSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHbaseHaSlbResponse::fromMap($this->doRPCRequest('DeleteHbaseHaSlb', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHBaseSlbServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHBaseSlbServerResponse
     */
    public function deleteHBaseSlbServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHBaseSlbServerResponse::fromMap($this->doRPCRequest('DeleteHBaseSlbServer', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMultiZoneClusterResponse::fromMap($this->doRPCRequest('DeleteMultiZoneCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServerlessClusterResponse::fromMap($this->doRPCRequest('DeleteServerlessCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserHdfsInfoResponse::fromMap($this->doRPCRequest('DeleteUserHdfsInfo', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPlanConfigResponse::fromMap($this->doRPCRequest('DescribeBackupPlanConfig', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBackupStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupStatusResponse
     */
    public function describeBackupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupStatusResponse::fromMap($this->doRPCRequest('DescribeBackupStatus', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupSummaryResponse::fromMap($this->doRPCRequest('DescribeBackupSummary', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupTablesResponse::fromMap($this->doRPCRequest('DescribeBackupTables', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeClusterConnectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterConnectionResponse
     */
    public function describeClusterConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterConnectionResponse::fromMap($this->doRPCRequest('DescribeClusterConnection', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeColdStorageResponse::fromMap($this->doRPCRequest('DescribeColdStorage', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceUsageResponse::fromMap($this->doRPCRequest('DescribeDBInstanceUsage', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeletedInstancesResponse::fromMap($this->doRPCRequest('DescribeDeletedInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDiskWarningLineResponse::fromMap($this->doRPCRequest('DescribeDiskWarningLine', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEndpointsResponse::fromMap($this->doRPCRequest('DescribeEndpoints', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceResponse::fromMap($this->doRPCRequest('DescribeInstance', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceTypeResponse
     */
    public function describeInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceTypeResponse::fromMap($this->doRPCRequest('DescribeInstanceType', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeIpWhitelistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeIpWhitelistResponse
     */
    public function describeIpWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpWhitelistResponse::fromMap($this->doRPCRequest('DescribeIpWhitelist', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMultiZoneAvailableRegionsResponse::fromMap($this->doRPCRequest('DescribeMultiZoneAvailableRegions', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMultiZoneAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeMultiZoneAvailableResource', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMultiZoneClusterResponse::fromMap($this->doRPCRequest('DescribeMultiZoneCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecoverableTimeRangeResponse::fromMap($this->doRPCRequest('DescribeRecoverableTimeRange', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreFullDetailsResponse::fromMap($this->doRPCRequest('DescribeRestoreFullDetails', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreIncrDetailResponse::fromMap($this->doRPCRequest('DescribeRestoreIncrDetail', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreSchemaDetailsResponse::fromMap($this->doRPCRequest('DescribeRestoreSchemaDetails', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreSummaryResponse::fromMap($this->doRPCRequest('DescribeRestoreSummary', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreTablesResponse::fromMap($this->doRPCRequest('DescribeRestoreTables', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->doRPCRequest('DescribeSecurityGroups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSubDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSubDomainResponse
     */
    public function describeSubDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSubDomainResponse::fromMap($this->doRPCRequest('DescribeSubDomain', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableHBaseueBackupResponse::fromMap($this->doRPCRequest('EnableHBaseueBackup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableHBaseueModuleResponse::fromMap($this->doRPCRequest('EnableHBaseueModule', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EvaluateMultiZoneResourceResponse::fromMap($this->doRPCRequest('EvaluateMultiZoneResource', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMultimodeCmsUrlResponse::fromMap($this->doRPCRequest('GetMultimodeCmsUrl', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHBaseInstancesResponse::fromMap($this->doRPCRequest('ListHBaseInstances', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstanceServiceConfigHistoriesResponse::fromMap($this->doRPCRequest('ListInstanceServiceConfigHistories', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstanceServiceConfigurationsResponse::fromMap($this->doRPCRequest('ListInstanceServiceConfigurations', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagsResponse::fromMap($this->doRPCRequest('ListTags', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyBackupPlanConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBackupPlanConfigResponse
     */
    public function modifyBackupPlanConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPlanConfigResponse::fromMap($this->doRPCRequest('ModifyBackupPlanConfig', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyBackupPolicy', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterDeletionProtectionResponse::fromMap($this->doRPCRequest('ModifyClusterDeletionProtection', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDiskWarningLineResponse::fromMap($this->doRPCRequest('ModifyDiskWarningLine', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyInstanceMaintainTime', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceNameResponse::fromMap($this->doRPCRequest('ModifyInstanceName', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceServiceConfigResponse::fromMap($this->doRPCRequest('ModifyInstanceServiceConfig', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceTypeResponse::fromMap($this->doRPCRequest('ModifyInstanceType', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpWhitelistResponse::fromMap($this->doRPCRequest('ModifyIpWhitelist', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMultiZoneClusterNodeTypeResponse::fromMap($this->doRPCRequest('ModifyMultiZoneClusterNodeType', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupsResponse::fromMap($this->doRPCRequest('ModifySecurityGroups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUIAccountPasswordResponse::fromMap($this->doRPCRequest('ModifyUIAccountPassword', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenBackupResponse::fromMap($this->doRPCRequest('OpenBackup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PurgeInstanceResponse::fromMap($this->doRPCRequest('PurgeInstance', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryHBaseHaDBResponse::fromMap($this->doRPCRequest('QueryHBaseHaDB', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryXpackRelateDBResponse::fromMap($this->doRPCRequest('QueryXpackRelateDB', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RelateDbForHBaseHaResponse::fromMap($this->doRPCRequest('RelateDbForHBaseHa', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleasePublicNetworkAddressResponse::fromMap($this->doRPCRequest('ReleasePublicNetworkAddress', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeColdStorageSizeResponse::fromMap($this->doRPCRequest('ResizeColdStorageSize', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeDiskSizeResponse::fromMap($this->doRPCRequest('ResizeDiskSize', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeMultiZoneClusterDiskSizeResponse::fromMap($this->doRPCRequest('ResizeMultiZoneClusterDiskSize', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeMultiZoneClusterNodeCountResponse::fromMap($this->doRPCRequest('ResizeMultiZoneClusterNodeCount', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeNodeCountResponse::fromMap($this->doRPCRequest('ResizeNodeCount', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartInstanceResponse::fromMap($this->doRPCRequest('RestartInstance', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchHbaseHaSlbResponse::fromMap($this->doRPCRequest('SwitchHbaseHaSlb', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnTagResourcesResponse::fromMap($this->doRPCRequest('UnTagResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeMinorVersionResponse::fromMap($this->doRPCRequest('UpgradeMinorVersion', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeMultiZoneClusterResponse::fromMap($this->doRPCRequest('UpgradeMultiZoneCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return XpackRelateDBResponse::fromMap($this->doRPCRequest('XpackRelateDB', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
