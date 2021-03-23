<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AddShardingNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AddShardingNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateDirectConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateDirectConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateCacheAnalysisTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateCacheAnalysisTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalDistributeCacheRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalDistributeCacheResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateUserClusterHostRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateUserClusterHostResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteShardingNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteShardingNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteUserClusterHostRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteUserClusterHostResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryMonitorValuesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryMonitorValuesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceConfigRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceConfigResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceSSLRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceSSLResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeIntranetAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeIntranetAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRunningLogRecordsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRunningLogRecordsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\EnableAdditionalBandwidthRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\EnableAdditionalBandwidthResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushExpireKeysRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushExpireKeysResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\InitializeKvstorePermissionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\InitializeKvstorePermissionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyActiveOperationTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyActiveOperationTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAuditLogConfigRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAuditLogConfigResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceMajorVersionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceMajorVersionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceMinorVersionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceMinorVersionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceNetExpireTimeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceNetExpireTimeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSSLRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSSLResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceVpcAuthModeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceVpcAuthModeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyIntranetAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyIntranetAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyNodeSpecRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyNodeSpecResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyUserClusterHostRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyUserClusterHostResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseDirectConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseDirectConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReplaceUserClusterHostRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReplaceUserClusterHostResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceHARequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceHAResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchNetworkRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchNetworkResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SyncDtsStatusRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SyncDtsStatusResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToPrePaidRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToPrePaidResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Rkvstore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'r-kvstore.aliyuncs.com',
            'cn-beijing'                  => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou'                 => 'r-kvstore.aliyuncs.com',
            'cn-shanghai'                 => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen'                 => 'r-kvstore.aliyuncs.com',
            'cn-heyuan'                   => 'r-kvstore.aliyuncs.com',
            'ap-southeast-1'              => 'r-kvstore.aliyuncs.com',
            'us-west-1'                   => 'r-kvstore.aliyuncs.com',
            'us-east-1'                   => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-finance'         => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'r-kvstore.aliyuncs.com',
            'cn-north-2-gov-1'            => 'r-kvstore.aliyuncs.com',
            'ap-northeast-2-pop'          => 'r-kvstore.aliyuncs.com',
            'cn-beijing-finance-1'        => 'r-kvstore.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'r-kvstore.aliyuncs.com',
            'cn-beijing-gov-1'            => 'r-kvstore.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'r-kvstore.aliyuncs.com',
            'cn-edge-1'                   => 'r-kvstore.aliyuncs.com',
            'cn-fujian'                   => 'r-kvstore.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'r-kvstore.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'r-kvstore.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'r-kvstore.aliyuncs.com',
            'cn-qingdao-nebula'           => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-inner'           => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-inner'           => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-wuhan'                    => 'r-kvstore.aliyuncs.com',
            'cn-wulanchabu'               => 'r-kvstore.aliyuncs.com',
            'cn-yushanfang'               => 'r-kvstore.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'r-kvstore.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'r-kvstore.aliyuncs.com',
            'eu-west-1-oxs'               => 'r-kvstore.aliyuncs.com',
            'rus-west-1-pop'              => 'r-kvstore.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('r-kvstore', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddShardingNodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddShardingNodeResponse
     */
    public function addShardingNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddShardingNodeResponse::fromMap($this->doRPCRequest('AddShardingNode', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddShardingNodeRequest $request
     *
     * @return AddShardingNodeResponse
     */
    public function addShardingNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShardingNodeWithOptions($request, $runtime);
    }

    /**
     * @param AllocateDirectConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateDirectConnectionResponse
     */
    public function allocateDirectConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateDirectConnectionResponse::fromMap($this->doRPCRequest('AllocateDirectConnection', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateDirectConnectionRequest $request
     *
     * @return AllocateDirectConnectionResponse
     */
    public function allocateDirectConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateDirectConnectionWithOptions($request, $runtime);
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->doRPCRequest('AllocateInstancePublicConnection', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccountResponse::fromMap($this->doRPCRequest('CreateAccount', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupResponse::fromMap($this->doRPCRequest('CreateBackup', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBackupRequest $request
     *
     * @return CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param CreateCacheAnalysisTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCacheAnalysisTaskResponse::fromMap($this->doRPCRequest('CreateCacheAnalysisTask', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCacheAnalysisTaskRequest $request
     *
     * @return CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalDistributeCacheRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalDistributeCacheResponse
     */
    public function createGlobalDistributeCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGlobalDistributeCacheResponse::fromMap($this->doRPCRequest('CreateGlobalDistributeCache', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGlobalDistributeCacheRequest $request
     *
     * @return CreateGlobalDistributeCacheResponse
     */
    public function createGlobalDistributeCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalDistributeCacheWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateTairInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTairInstanceResponse
     */
    public function createTairInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTairInstanceResponse::fromMap($this->doRPCRequest('CreateTairInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTairInstanceRequest $request
     *
     * @return CreateTairInstanceResponse
     */
    public function createTairInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTairInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserClusterHostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateUserClusterHostResponse
     */
    public function createUserClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserClusterHostResponse::fromMap($this->doRPCRequest('CreateUserClusterHost', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserClusterHostRequest $request
     *
     * @return CreateUserClusterHostResponse
     */
    public function createUserClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAccountResponse::fromMap($this->doRPCRequest('DeleteAccount', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteShardingNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteShardingNodeResponse
     */
    public function deleteShardingNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteShardingNodeResponse::fromMap($this->doRPCRequest('DeleteShardingNode', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteShardingNodeRequest $request
     *
     * @return DeleteShardingNodeResponse
     */
    public function deleteShardingNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShardingNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserClusterHostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserClusterHostResponse
     */
    public function deleteUserClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserClusterHostResponse::fromMap($this->doRPCRequest('DeleteUserClusterHost', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserClusterHostRequest $request
     *
     * @return DeleteUserClusterHostResponse
     */
    public function deleteUserClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeActiveOperationTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeActiveOperationTaskResponse
     */
    public function describeActiveOperationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeActiveOperationTaskResponse::fromMap($this->doRPCRequest('DescribeActiveOperationTask', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeActiveOperationTaskRequest $request
     *
     * @return DescribeActiveOperationTaskResponse
     */
    public function describeActiveOperationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditRecordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAuditRecordsResponse
     */
    public function describeAuditRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditRecordsResponse::fromMap($this->doRPCRequest('DescribeAuditRecords', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditRecordsRequest $request
     *
     * @return DescribeAuditRecordsResponse
     */
    public function describeAuditRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditRecordsWithOptions($request, $runtime);
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

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupTasksResponse::fromMap($this->doRPCRequest('DescribeBackupTasks', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupTasksRequest $request
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCacheAnalysisReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCacheAnalysisReportResponse
     */
    public function describeCacheAnalysisReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCacheAnalysisReportResponse::fromMap($this->doRPCRequest('DescribeCacheAnalysisReport', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCacheAnalysisReportRequest $request
     *
     * @return DescribeCacheAnalysisReportResponse
     */
    public function describeCacheAnalysisReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCacheAnalysisReportListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCacheAnalysisReportListResponse
     */
    public function describeCacheAnalysisReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCacheAnalysisReportListResponse::fromMap($this->doRPCRequest('DescribeCacheAnalysisReportList', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCacheAnalysisReportListRequest $request
     *
     * @return DescribeCacheAnalysisReportListResponse
     */
    public function describeCacheAnalysisReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisReportListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterMemberInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterMemberInfoResponse
     */
    public function describeClusterMemberInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterMemberInfoResponse::fromMap($this->doRPCRequest('DescribeClusterMemberInfo', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterMemberInfoRequest $request
     *
     * @return DescribeClusterMemberInfoResponse
     */
    public function describeClusterMemberInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterMemberInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->doRPCRequest('DescribeDBInstanceNetInfo', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceNetInfoRequest $request
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedClusterInstanceListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedClusterInstanceListResponse::fromMap($this->doRPCRequest('DescribeDedicatedClusterInstanceList', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedClusterInstanceListRequest $request
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEngineVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEngineVersionResponse
     */
    public function describeEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEngineVersionResponse::fromMap($this->doRPCRequest('DescribeEngineVersion', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEngineVersionRequest $request
     *
     * @return DescribeEngineVersionResponse
     */
    public function describeEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEngineVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalDistributeCacheRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalDistributeCacheResponse
     */
    public function describeGlobalDistributeCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGlobalDistributeCacheResponse::fromMap($this->doRPCRequest('DescribeGlobalDistributeCache', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGlobalDistributeCacheRequest $request
     *
     * @return DescribeGlobalDistributeCacheResponse
     */
    public function describeGlobalDistributeCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDistributeCacheWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHistoryMonitorValuesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHistoryMonitorValuesResponse
     */
    public function describeHistoryMonitorValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHistoryMonitorValuesResponse::fromMap($this->doRPCRequest('DescribeHistoryMonitorValues', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHistoryMonitorValuesRequest $request
     *
     * @return DescribeHistoryMonitorValuesResponse
     */
    public function describeHistoryMonitorValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryMonitorValuesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAutoRenewalAttribute', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAutoRenewalAttributeRequest $request
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceConfigResponse
     */
    public function describeInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceConfigResponse::fromMap($this->doRPCRequest('DescribeInstanceConfig', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceConfigRequest $request
     *
     * @return DescribeInstanceConfigResponse
     */
    public function describeInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceConfigWithOptions($request, $runtime);
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

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->doRPCRequest('DescribeInstanceSSL', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceSSLRequest $request
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIntranetAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIntranetAttributeResponse
     */
    public function describeIntranetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIntranetAttributeResponse::fromMap($this->doRPCRequest('DescribeIntranetAttribute', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIntranetAttributeRequest $request
     *
     * @return DescribeIntranetAttributeResponse
     */
    public function describeIntranetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntranetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogicInstanceTopologyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLogicInstanceTopologyResponse
     */
    public function describeLogicInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogicInstanceTopologyResponse::fromMap($this->doRPCRequest('DescribeLogicInstanceTopology', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLogicInstanceTopologyRequest $request
     *
     * @return DescribeLogicInstanceTopologyResponse
     */
    public function describeLogicInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogicInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorItemsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMonitorItemsResponse
     */
    public function describeMonitorItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMonitorItemsResponse::fromMap($this->doRPCRequest('DescribeMonitorItems', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMonitorItemsRequest $request
     *
     * @return DescribeMonitorItemsResponse
     */
    public function describeMonitorItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorItemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParametersResponse::fromMap($this->doRPCRequest('DescribeParameters', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParametersRequest $request
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->doRPCRequest('DescribeParameterTemplates', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterTemplatesRequest $request
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePriceResponse::fromMap($this->doRPCRequest('DescribePrice', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRoleZoneInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRoleZoneInfoResponse::fromMap($this->doRPCRequest('DescribeRoleZoneInfo', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRoleZoneInfoRequest $request
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoleZoneInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRunningLogRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRunningLogRecordsResponse::fromMap($this->doRPCRequest('DescribeRunningLogRecords', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRunningLogRecordsRequest $request
     *
     * @return DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRunningLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupConfigurationResponse::fromMap($this->doRPCRequest('DescribeSecurityGroupConfiguration', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupConfigurationRequest $request
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityIpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityIpsResponse::fromMap($this->doRPCRequest('DescribeSecurityIps', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityIpsRequest $request
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSlowLogRecords', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTasksResponse::fromMap($this->doRPCRequest('DescribeTasks', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserClusterHostRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeUserClusterHostResponse
     */
    public function describeUserClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserClusterHostResponse::fromMap($this->doRPCRequest('DescribeUserClusterHost', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserClusterHostRequest $request
     *
     * @return DescribeUserClusterHostResponse
     */
    public function describeUserClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserClusterHostInstanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeUserClusterHostInstanceResponse
     */
    public function describeUserClusterHostInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserClusterHostInstanceResponse::fromMap($this->doRPCRequest('DescribeUserClusterHostInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserClusterHostInstanceRequest $request
     *
     * @return DescribeUserClusterHostInstanceResponse
     */
    public function describeUserClusterHostInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserClusterHostInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param EnableAdditionalBandwidthRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableAdditionalBandwidthResponse
     */
    public function enableAdditionalBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableAdditionalBandwidthResponse::fromMap($this->doRPCRequest('EnableAdditionalBandwidth', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableAdditionalBandwidthRequest $request
     *
     * @return EnableAdditionalBandwidthResponse
     */
    public function enableAdditionalBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAdditionalBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param FlushExpireKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return FlushExpireKeysResponse
     */
    public function flushExpireKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FlushExpireKeysResponse::fromMap($this->doRPCRequest('FlushExpireKeys', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FlushExpireKeysRequest $request
     *
     * @return FlushExpireKeysResponse
     */
    public function flushExpireKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flushExpireKeysWithOptions($request, $runtime);
    }

    /**
     * @param FlushInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FlushInstanceResponse
     */
    public function flushInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FlushInstanceResponse::fromMap($this->doRPCRequest('FlushInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FlushInstanceRequest $request
     *
     * @return FlushInstanceResponse
     */
    public function flushInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flushInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GrantAccountPrivilegeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->doRPCRequest('GrantAccountPrivilege', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantAccountPrivilegeRequest $request
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param InitializeKvstorePermissionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return InitializeKvstorePermissionResponse
     */
    public function initializeKvstorePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitializeKvstorePermissionResponse::fromMap($this->doRPCRequest('InitializeKvstorePermission', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InitializeKvstorePermissionRequest $request
     *
     * @return InitializeKvstorePermissionResponse
     */
    public function initializeKvstorePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeKvstorePermissionWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param MigrateToOtherZoneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->doRPCRequest('MigrateToOtherZone', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MigrateToOtherZoneRequest $request
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateToOtherZoneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->doRPCRequest('ModifyAccountDescription', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->doRPCRequest('ModifyAccountPassword', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyActiveOperationTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyActiveOperationTaskResponse
     */
    public function modifyActiveOperationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyActiveOperationTaskResponse::fromMap($this->doRPCRequest('ModifyActiveOperationTask', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyActiveOperationTaskRequest $request
     *
     * @return ModifyActiveOperationTaskResponse
     */
    public function modifyActiveOperationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTaskWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAuditLogConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAuditLogConfigResponse::fromMap($this->doRPCRequest('ModifyAuditLogConfig', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAuditLogConfigRequest $request
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogConfigWithOptions($request, $runtime);
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

        return ModifyBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyBackupPolicy', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->doRPCRequest('ModifyDBInstanceConnectionString', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAutoRenewalAttribute', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->doRPCRequest('ModifyInstanceConfig', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceConfigRequest $request
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceConfigWithOptions($request, $runtime);
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

        return ModifyInstanceMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyInstanceMaintainTime', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyInstanceMajorVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMajorVersionResponse
     */
    public function modifyInstanceMajorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMajorVersionResponse::fromMap($this->doRPCRequest('ModifyInstanceMajorVersion', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceMajorVersionRequest $request
     *
     * @return ModifyInstanceMajorVersionResponse
     */
    public function modifyInstanceMajorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMajorVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceMinorVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMinorVersionResponse
     */
    public function modifyInstanceMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMinorVersionResponse::fromMap($this->doRPCRequest('ModifyInstanceMinorVersion', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceMinorVersionRequest $request
     *
     * @return ModifyInstanceMinorVersionResponse
     */
    public function modifyInstanceMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMinorVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceNetExpireTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceNetExpireTimeResponse
     */
    public function modifyInstanceNetExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceNetExpireTimeResponse::fromMap($this->doRPCRequest('ModifyInstanceNetExpireTime', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceNetExpireTimeRequest $request
     *
     * @return ModifyInstanceNetExpireTimeResponse
     */
    public function modifyInstanceNetExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNetExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyInstanceSpec', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceSSLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->doRPCRequest('ModifyInstanceSSL', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceSSLRequest $request
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceVpcAuthModeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceVpcAuthModeResponse::fromMap($this->doRPCRequest('ModifyInstanceVpcAuthMode', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceVpcAuthModeRequest $request
     *
     * @return ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVpcAuthModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIntranetAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyIntranetAttributeResponse
     */
    public function modifyIntranetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIntranetAttributeResponse::fromMap($this->doRPCRequest('ModifyIntranetAttribute', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyIntranetAttributeRequest $request
     *
     * @return ModifyIntranetAttributeResponse
     */
    public function modifyIntranetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIntranetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNodeSpecRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyNodeSpecResponse
     */
    public function modifyNodeSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNodeSpecResponse::fromMap($this->doRPCRequest('ModifyNodeSpec', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyNodeSpecRequest $request
     *
     * @return ModifyNodeSpecResponse
     */
    public function modifyNodeSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodeSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourceGroupResponse::fromMap($this->doRPCRequest('ModifyResourceGroup', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyResourceGroupRequest $request
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupConfigurationResponse::fromMap($this->doRPCRequest('ModifySecurityGroupConfiguration', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupConfigurationRequest $request
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityIpsResponse::fromMap($this->doRPCRequest('ModifySecurityIps', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityIpsRequest $request
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserClusterHostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyUserClusterHostResponse
     */
    public function modifyUserClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUserClusterHostResponse::fromMap($this->doRPCRequest('ModifyUserClusterHost', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyUserClusterHostRequest $request
     *
     * @return ModifyUserClusterHostResponse
     */
    public function modifyUserClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseDirectConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleaseDirectConnectionResponse
     */
    public function releaseDirectConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseDirectConnectionResponse::fromMap($this->doRPCRequest('ReleaseDirectConnection', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseDirectConnectionRequest $request
     *
     * @return ReleaseDirectConnectionResponse
     */
    public function releaseDirectConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDirectConnectionWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->doRPCRequest('ReleaseInstancePublicConnection', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
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

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReplaceUserClusterHostRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReplaceUserClusterHostResponse
     */
    public function replaceUserClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceUserClusterHostResponse::fromMap($this->doRPCRequest('ReplaceUserClusterHost', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReplaceUserClusterHostRequest $request
     *
     * @return ReplaceUserClusterHostResponse
     */
    public function replaceUserClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceUserClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAccountPasswordResponse::fromMap($this->doRPCRequest('ResetAccountPassword', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
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

        return RestartInstanceResponse::fromMap($this->doRPCRequest('RestartInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RestoreInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreInstanceResponse::fromMap($this->doRPCRequest('RestoreInstance', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestoreInstanceRequest $request
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchInstanceHARequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SwitchInstanceHAResponse
     */
    public function switchInstanceHAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchInstanceHAResponse::fromMap($this->doRPCRequest('SwitchInstanceHA', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SwitchInstanceHARequest $request
     *
     * @return SwitchInstanceHAResponse
     */
    public function switchInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchInstanceHAWithOptions($request, $runtime);
    }

    /**
     * @param SwitchNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SwitchNetworkResponse
     */
    public function switchNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchNetworkResponse::fromMap($this->doRPCRequest('SwitchNetwork', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SwitchNetworkRequest $request
     *
     * @return SwitchNetworkResponse
     */
    public function switchNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchNetworkWithOptions($request, $runtime);
    }

    /**
     * @param SyncDtsStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SyncDtsStatusResponse
     */
    public function syncDtsStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncDtsStatusResponse::fromMap($this->doRPCRequest('SyncDtsStatus', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncDtsStatusRequest $request
     *
     * @return SyncDtsStatusResponse
     */
    public function syncDtsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDtsStatusWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TransformToPrePaidRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TransformToPrePaidResponse
     */
    public function transformToPrePaidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransformToPrePaidResponse::fromMap($this->doRPCRequest('TransformToPrePaid', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransformToPrePaidRequest $request
     *
     * @return TransformToPrePaidResponse
     */
    public function transformToPrePaid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformToPrePaidWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
