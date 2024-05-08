<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AddShardingNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AddShardingNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateDirectConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateDirectConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CheckCloudResourceAuthorizedRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CheckCloudResourceAuthorizedResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateCacheAnalysisTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateCacheAnalysisTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalDistributeCacheRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalDistributeCacheResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstancesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstancesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteShardingNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteShardingNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditLogConfigRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditLogConfigResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEncryptionKeyListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEncryptionKeyListResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEncryptionKeyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEncryptionKeyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryMonitorValuesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryMonitorValuesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryTasksRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryTasksResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceConfigRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceConfigResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesOverviewRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesOverviewResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceSSLRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceSSLResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceTDEStatusRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceTDEStatusResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeIntranetAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeIntranetAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\EnableAdditionalBandwidthRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\EnableAdditionalBandwidthResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushExpireKeysRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushExpireKeysResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushInstanceForDBRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushInstanceForDBResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\FlushInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\InitializeKvstorePermissionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\InitializeKvstorePermissionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\LockDBInstanceWriteRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\LockDBInstanceWriteResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyGlobalSecurityIPGroupNameRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyGlobalSecurityIPGroupNameResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyGlobalSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyGlobalSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyGlobalSecurityIPGroupResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceParameterRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceParameterResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSSLRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceSSLResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceTDERequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceTDEResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceVpcAuthModeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceVpcAuthModeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyIntranetAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyIntranetAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseDirectConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseDirectConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RemoveSubInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RemoveSubInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RenewAdditionalBandwidthRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RenewAdditionalBandwidthResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceHARequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceHAResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceProxyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceProxyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchNetworkRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchNetworkResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SyncDtsStatusRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SyncDtsStatusResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToPrePaidRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToPrePaidResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UnlockDBInstanceWriteRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UnlockDBInstanceWriteResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
            'cn-wulanchabu'               => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou'                 => 'r-kvstore.aliyuncs.com',
            'cn-shanghai'                 => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen'                 => 'r-kvstore.aliyuncs.com',
            'cn-heyuan'                   => 'r-kvstore.aliyuncs.com',
            'cn-guangzhou'                => 'r-kvstore.aliyuncs.com',
            'cn-hongkong'                 => 'r-kvstore.aliyuncs.com',
            'ap-southeast-1'              => 'r-kvstore.aliyuncs.com',
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
            'cn-qingdao-nebula'           => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-inner'           => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-inner'           => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-wuhan'                    => 'r-kvstore.aliyuncs.com',
            'cn-yushanfang'               => 'r-kvstore.aliyuncs.com',
            'cn-zhangbei'                 => 'r-kvstore.aliyuncs.com',
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
     * This operation is available only for cluster instances that use cloud disks.
     *   *
     * @param AddShardingNodeRequest $request AddShardingNodeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddShardingNodeResponse AddShardingNodeResponse
     */
    public function addShardingNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->forceTrans)) {
            $query['ForceTrans'] = $request->forceTrans;
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
        if (!Utils::isUnset($request->shardCount)) {
            $query['ShardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddShardingNode',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddShardingNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for cluster instances that use cloud disks.
     *   *
     * @param AddShardingNodeRequest $request AddShardingNodeRequest
     *
     * @return AddShardingNodeResponse AddShardingNodeResponse
     */
    public function addShardingNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShardingNodeWithOptions($request, $runtime);
    }

    /**
     * In direct connection mode, you can use private endpoints to bypass proxy nodes and connect to ApsaraDB for Redis instances from clients in the same manner as you connect to native Redis clusters. The direct connection mode can reduce communication overheads and accelerate the response speed. For more information, see [Enable the direct connection mode](~~146901~~).
     *   * To call this operation, the instance must meet the following requirements:
     *   * *   The instance is an ApsaraDB for Redis cluster instance.
     *   * *   The instance is a Community Edition instance that runs Redis 4.0 or 5.0, or an Enhanced Edition instance (Tair) that runs Redis 5.0.
     *   * *   The instance is deployed in a virtual private cloud (VPC). If the instance is deployed in the classic network, call the [SwitchNetwork](~~61005~~) operation to change the network type to VPC.
     *   * *   SSL encryption is disabled for the instance. If SSL encryption is enabled, you can call the [ModifyInstanceSSL](~~96194~~) operation to disable it.
     *   * *   The vSwitch to which the instance is connected has sufficient IP addresses to be allocated. For more information, see [Obtain the number of available IP addresses in the vSwitch to which an ApsaraDB for Redis instance is connected](~~183151~~).
     *   *
     * @param AllocateDirectConnectionRequest $request AllocateDirectConnectionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateDirectConnectionResponse AllocateDirectConnectionResponse
     */
    public function allocateDirectConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'AllocateDirectConnection',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateDirectConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In direct connection mode, you can use private endpoints to bypass proxy nodes and connect to ApsaraDB for Redis instances from clients in the same manner as you connect to native Redis clusters. The direct connection mode can reduce communication overheads and accelerate the response speed. For more information, see [Enable the direct connection mode](~~146901~~).
     *   * To call this operation, the instance must meet the following requirements:
     *   * *   The instance is an ApsaraDB for Redis cluster instance.
     *   * *   The instance is a Community Edition instance that runs Redis 4.0 or 5.0, or an Enhanced Edition instance (Tair) that runs Redis 5.0.
     *   * *   The instance is deployed in a virtual private cloud (VPC). If the instance is deployed in the classic network, call the [SwitchNetwork](~~61005~~) operation to change the network type to VPC.
     *   * *   SSL encryption is disabled for the instance. If SSL encryption is enabled, you can call the [ModifyInstanceSSL](~~96194~~) operation to disable it.
     *   * *   The vSwitch to which the instance is connected has sufficient IP addresses to be allocated. For more information, see [Obtain the number of available IP addresses in the vSwitch to which an ApsaraDB for Redis instance is connected](~~183151~~).
     *   *
     * @param AllocateDirectConnectionRequest $request AllocateDirectConnectionRequest
     *
     * @return AllocateDirectConnectionResponse AllocateDirectConnectionResponse
     */
    public function allocateDirectConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateDirectConnectionWithOptions($request, $runtime);
    }

    /**
     * You can also apply for public endpoints in the ApsaraDB for Redis console. For more information, see [Use a public endpoint to connect to an ApsaraDB for Redis instance](~~43850~~).
     *   *
     * @param AllocateInstancePublicConnectionRequest $request AllocateInstancePublicConnectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also apply for public endpoints in the ApsaraDB for Redis console. For more information, see [Use a public endpoint to connect to an ApsaraDB for Redis instance](~~43850~~).
     *   *
     * @param AllocateInstancePublicConnectionRequest $request AllocateInstancePublicConnectionRequest
     *
     * @return AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * *   For information about Transparent Data Encryption (TDE) and the usage notes of TDE, see [Enable TDE](~~265913~~).
     *   * *   If the ApsaraDB for Redis instance is authorized to use KMS, you can call the [ModifyInstanceTDE](~~302337~~) operation to enable TDE.
     *   *
     * @param CheckCloudResourceAuthorizedRequest $request CheckCloudResourceAuthorizedRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCloudResourceAuthorizedResponse CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCloudResourceAuthorized',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCloudResourceAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   For information about Transparent Data Encryption (TDE) and the usage notes of TDE, see [Enable TDE](~~265913~~).
     *   * *   If the ApsaraDB for Redis instance is authorized to use KMS, you can call the [ModifyInstanceTDE](~~302337~~) operation to enable TDE.
     *   *
     * @param CheckCloudResourceAuthorizedRequest $request CheckCloudResourceAuthorizedRequest
     *
     * @return CheckCloudResourceAuthorizedResponse CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCloudResourceAuthorizedWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation is supported only for ApsaraDB for Redis instances that run Redis 4.0 or later.
     *   * *   The ApsaraDB for Redis instance for which you want to call this operation must be in the running state.
     *   * *   You can create up to 18 accounts for an ApsaraDB for Redis instance.
     *   * You can also create an account in the ApsaraDB for Redis console. For more information, see [Manage database accounts](~~92665~~).
     *   *
     * @param CreateAccountRequest $request CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
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
            'action'      => 'CreateAccount',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation is supported only for ApsaraDB for Redis instances that run Redis 4.0 or later.
     *   * *   The ApsaraDB for Redis instance for which you want to call this operation must be in the running state.
     *   * *   You can create up to 18 accounts for an ApsaraDB for Redis instance.
     *   * You can also create an account in the ApsaraDB for Redis console. For more information, see [Manage database accounts](~~92665~~).
     *   *
     * @param CreateAccountRequest $request CreateAccountRequest
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * You can also back up an instance in the ApsaraDB for Redis console. For more information, see [Backup and recovery](~~43886~~).
     *   *
     * @param CreateBackupRequest $request CreateBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
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
            'action'      => 'CreateBackup',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also back up an instance in the ApsaraDB for Redis console. For more information, see [Backup and recovery](~~43886~~).
     *   *
     * @param CreateBackupRequest $request CreateBackupRequest
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * > ApsaraDB for Redis has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](~~186019~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The instance is a Community Edition instance or an Enhanced Edition (Tair) [DRAM-based instance](~~126164~~).
     *   * This feature is unavailable for cloud disk-based cluster instances. For more information, see [Comparison between ApsaraDB for Redis instances that use local disks and those that use cloud disks](~~188068~~).
     *   * *   The instance is of the latest minor version. For more information about whether you must update the minor version of an instance, see [How do I check whether the minor version of an ApsaraDB for Redis instance is the latest?](~~129203~~)
     *   * After you call this operation, you can call the [DescribeCacheAnalysisReport](~~128808~~) operation to view the analytic results.
     *   *
     * @param CreateCacheAnalysisTaskRequest $request CreateCacheAnalysisTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCacheAnalysisTaskResponse CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTaskWithOptions($request, $runtime)
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
            'action'      => 'CreateCacheAnalysisTask',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCacheAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > ApsaraDB for Redis has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](~~186019~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The instance is a Community Edition instance or an Enhanced Edition (Tair) [DRAM-based instance](~~126164~~).
     *   * This feature is unavailable for cloud disk-based cluster instances. For more information, see [Comparison between ApsaraDB for Redis instances that use local disks and those that use cloud disks](~~188068~~).
     *   * *   The instance is of the latest minor version. For more information about whether you must update the minor version of an instance, see [How do I check whether the minor version of an ApsaraDB for Redis instance is the latest?](~~129203~~)
     *   * After you call this operation, you can call the [DescribeCacheAnalysisReport](~~128808~~) operation to view the analytic results.
     *   *
     * @param CreateCacheAnalysisTaskRequest $request CreateCacheAnalysisTaskRequest
     *
     * @return CreateCacheAnalysisTaskResponse CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * You cannot directly create a distributed instance. If you require a distributed instance, you must call this operation to convert an existing instance to the first child instance of the distributed instance. After the instance is converted, the distributed instance is created. Before you call this operation, make sure that the following requirements are met:
     *   * *   A [DRAM-based instance](~~126164~~) of Enhanced Edition is used.
     *   * *   If the existing instance is a cluster instance, the direct connection mode must be disabled for the instance. For more information, see [Release a private endpoint](~~150047~~).
     *   * > You can also call the [CreateInstance](~~60873~~) operation to create an instance that is specified as the first child instance of a distributed instance. After the child instance is created, the distributed instance to which the child instance belongs is created.
     *   *
     * @param CreateGlobalDistributeCacheRequest $request CreateGlobalDistributeCacheRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGlobalDistributeCacheResponse CreateGlobalDistributeCacheResponse
     */
    public function createGlobalDistributeCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->seedSubInstanceId)) {
            $query['SeedSubInstanceId'] = $request->seedSubInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGlobalDistributeCache',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalDistributeCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot directly create a distributed instance. If you require a distributed instance, you must call this operation to convert an existing instance to the first child instance of the distributed instance. After the instance is converted, the distributed instance is created. Before you call this operation, make sure that the following requirements are met:
     *   * *   A [DRAM-based instance](~~126164~~) of Enhanced Edition is used.
     *   * *   If the existing instance is a cluster instance, the direct connection mode must be disabled for the instance. For more information, see [Release a private endpoint](~~150047~~).
     *   * > You can also call the [CreateInstance](~~60873~~) operation to create an instance that is specified as the first child instance of a distributed instance. After the child instance is created, the distributed instance to which the child instance belongs is created.
     *   *
     * @param CreateGlobalDistributeCacheRequest $request CreateGlobalDistributeCacheRequest
     *
     * @return CreateGlobalDistributeCacheResponse CreateGlobalDistributeCacheResponse
     */
    public function createGlobalDistributeCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalDistributeCacheWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GIpList)) {
            $query['GIpList'] = $request->GIpList;
        }
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'CreateGlobalSecurityIPGroup',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGlobalSecurityIPGroupRequest $request
     *
     * @return CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * You can call this operation to create an ApsaraDB for Redis instance or a classic Tair DRAM-based instance. To create a cloud-native Tair instance, call the [CreateTairInstance](~~208271~~) operation.
     *   * > For more information about how to create an instance that meets your requirements in the ApsaraDB for Redis console, see [Step 1: Create an ApsaraDB for Redis instance](~~26351~~).
     *   *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appendonly)) {
            $query['Appendonly'] = $request->appendonly;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clusterBackupId)) {
            $query['ClusterBackupId'] = $request->clusterBackupId;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->globalInstance)) {
            $query['GlobalInstance'] = $request->globalInstance;
        }
        if (!Utils::isUnset($request->globalInstanceId)) {
            $query['GlobalInstanceId'] = $request->globalInstanceId;
        }
        if (!Utils::isUnset($request->globalSecurityGroupIds)) {
            $query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->paramGroupId)) {
            $query['ParamGroupId'] = $request->paramGroupId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->readOnlyCount)) {
            $query['ReadOnlyCount'] = $request->readOnlyCount;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->secondaryZoneId)) {
            $query['SecondaryZoneId'] = $request->secondaryZoneId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $query['ShardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->srcDBInstanceId)) {
            $query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
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
            'action'      => 'CreateInstance',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * You can call this operation to create an ApsaraDB for Redis instance or a classic Tair DRAM-based instance. To create a cloud-native Tair instance, call the [CreateTairInstance](~~208271~~) operation.
     *   * > For more information about how to create an instance that meets your requirements in the ApsaraDB for Redis console, see [Step 1: Create an ApsaraDB for Redis instance](~~26351~~).
     *   *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * >  For more information about how to create an instance that meets your requirements in the ApsaraDB for Redis console, see Step 1: Create an ApsaraDB for Redis instance.[](~~26351~~)
     *   * This operation can only be used to create ApsaraDB for Redis Community Edition instances and ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based classic instances.
     *   *
     * @param CreateInstancesRequest $request CreateInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstancesResponse CreateInstancesResponse
     */
    public function createInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rebuildInstance)) {
            $query['RebuildInstance'] = $request->rebuildInstance;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstances',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * >  For more information about how to create an instance that meets your requirements in the ApsaraDB for Redis console, see Step 1: Create an ApsaraDB for Redis instance.[](~~26351~~)
     *   * This operation can only be used to create ApsaraDB for Redis Community Edition instances and ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based classic instances.
     *   *
     * @param CreateInstancesRequest $request CreateInstancesRequest
     *
     * @return CreateInstancesResponse CreateInstancesResponse
     */
    public function createInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancesWithOptions($request, $runtime);
    }

    /**
     * For information about instance selection, see [Select an ApsaraDB for Redis instance](~~223808~~).
     *   * Before you call this operation, make sure that you are familiar with the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * *   For information about how to create a Tair instance in the Tair console, see [Create a Tair instance](~~443863~~).
     *   * *   If you want to create other types of instances, such as Community Edition instances or [Tair DRAM-based](~~126164~~) instances, you can call the [CreateInstance](~~60873~~) operation.
     *   *
     * @param CreateTairInstanceRequest $request CreateTairInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTairInstanceResponse CreateTairInstanceResponse
     */
    public function createTairInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterBackupId)) {
            $query['ClusterBackupId'] = $request->clusterBackupId;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->globalInstanceId)) {
            $query['GlobalInstanceId'] = $request->globalInstanceId;
        }
        if (!Utils::isUnset($request->globalSecurityGroupIds)) {
            $query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->paramGroupId)) {
            $query['ParamGroupId'] = $request->paramGroupId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->readOnlyCount)) {
            $query['ReadOnlyCount'] = $request->readOnlyCount;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->secondaryZoneId)) {
            $query['SecondaryZoneId'] = $request->secondaryZoneId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $query['ShardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->shardType)) {
            $query['ShardType'] = $request->shardType;
        }
        if (!Utils::isUnset($request->slaveReadOnlyCount)) {
            $query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }
        if (!Utils::isUnset($request->srcDBInstanceId)) {
            $query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
            'action'      => 'CreateTairInstance',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTairInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For information about instance selection, see [Select an ApsaraDB for Redis instance](~~223808~~).
     *   * Before you call this operation, make sure that you are familiar with the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * *   For information about how to create a Tair instance in the Tair console, see [Create a Tair instance](~~443863~~).
     *   * *   If you want to create other types of instances, such as Community Edition instances or [Tair DRAM-based](~~126164~~) instances, you can call the [CreateInstance](~~60873~~) operation.
     *   *
     * @param CreateTairInstanceRequest $request CreateTairInstanceRequest
     *
     * @return CreateTairInstanceResponse CreateTairInstanceResponse
     */
    public function createTairInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTairInstanceWithOptions($request, $runtime);
    }

    /**
     * *   This operation is supported only for ApsaraDB for Redis instances that run Redis 4.0.
     *   * *   The ApsaraDB for Redis instance must be in the Running state.
     *   *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
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
            'action'      => 'DeleteAccount',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is supported only for ApsaraDB for Redis instances that run Redis 4.0.
     *   * *   The ApsaraDB for Redis instance must be in the Running state.
     *   *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * Before you delete an IP whitelist template, you must unbind (disassociate) the instances that are currently associated with the template.
     *   *
     * @param DeleteGlobalSecurityIPGroupRequest $request DeleteGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGlobalSecurityIPGroupResponse DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DeleteGlobalSecurityIPGroup',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete an IP whitelist template, you must unbind (disassociate) the instances that are currently associated with the template.
     *   *
     * @param DeleteGlobalSecurityIPGroupRequest $request DeleteGlobalSecurityIPGroupRequest
     *
     * @return DeleteGlobalSecurityIPGroupResponse DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * For more information about how to perform the corresponding operation in the console, see [Release an instance](~~43882~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the running state.
     *   * *   The instance is charged on a pay-as-you-go basis.
     *   * >  You cannot call this operation to release a subscription instance, which is automatically released when it expires. To release a subscription instance before it expires, submit a ticket.
     *   *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalInstanceId)) {
            $query['GlobalInstanceId'] = $request->globalInstanceId;
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
            'action'      => 'DeleteInstance',
            'version'     => '2015-01-01',
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
     * For more information about how to perform the corresponding operation in the console, see [Release an instance](~~43882~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the running state.
     *   * *   The instance is charged on a pay-as-you-go basis.
     *   * >  You cannot call this operation to release a subscription instance, which is automatically released when it expires. To release a subscription instance before it expires, submit a ticket.
     *   *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * You can also remove data shards from an instance in the ApsaraDB for Redis console. For more information, see [Adjust the number of shards for an ApsaraDB for Redis instance with cloud disks](~~198082~~).\\
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The instance is a persistent memory-optimized instance in the cluster architecture. For more information about persistent memory-optimized instances, see [Persistent memory-optimized instances](~~183956~~).
     *   * *   The instance has more than one data shard.
     *   *
     * @param DeleteShardingNodeRequest $request DeleteShardingNodeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteShardingNodeResponse DeleteShardingNodeResponse
     */
    public function deleteShardingNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceTrans)) {
            $query['ForceTrans'] = $request->forceTrans;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
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
        if (!Utils::isUnset($request->shardCount)) {
            $query['ShardCount'] = $request->shardCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteShardingNode',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteShardingNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also remove data shards from an instance in the ApsaraDB for Redis console. For more information, see [Adjust the number of shards for an ApsaraDB for Redis instance with cloud disks](~~198082~~).\\
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The instance is a persistent memory-optimized instance in the cluster architecture. For more information about persistent memory-optimized instances, see [Persistent memory-optimized instances](~~183956~~).
     *   * *   The instance has more than one data shard.
     *   *
     * @param DeleteShardingNodeRequest $request DeleteShardingNodeRequest
     *
     * @return DeleteShardingNodeResponse DeleteShardingNodeResponse
     */
    public function deleteShardingNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShardingNodeWithOptions($request, $runtime);
    }

    /**
     * >  Only ApsaraDB for Redis instances of Redis 4.0 or later are supported.
     *   *
     * @param DescribeAccountsRequest $request DescribeAccountsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountsResponse DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
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
            'action'      => 'DescribeAccounts',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Only ApsaraDB for Redis instances of Redis 4.0 or later are supported.
     *   *
     * @param DescribeAccountsRequest $request DescribeAccountsRequest
     *
     * @return DescribeAccountsResponse DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * After you have called this API operation and queried the information about a specific O&M task, you can also call the [ModifyActiveOperationTask](~~ModifyActiveOperationTask~~) operation to modify the scheduled switchover time of the O&M task.
     *   *
     * @param DescribeActiveOperationTaskRequest $request DescribeActiveOperationTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTaskResponse DescribeActiveOperationTaskResponse
     */
    public function describeActiveOperationTaskWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationTask',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you have called this API operation and queried the information about a specific O&M task, you can also call the [ModifyActiveOperationTask](~~ModifyActiveOperationTask~~) operation to modify the scheduled switchover time of the O&M task.
     *   *
     * @param DescribeActiveOperationTaskRequest $request DescribeActiveOperationTaskRequest
     *
     * @return DescribeActiveOperationTaskResponse DescribeActiveOperationTaskResponse
     */
    public function describeActiveOperationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskWithOptions($request, $runtime);
    }

    /**
     * > You can call the [ModifyAuditLogConfig](~~130206~~) operation to enable or disable the audit log feature for an ApsaraDB for Redis instance. For more information, see [Enable the new audit log feature](~~102015~~).
     *   * Before you call this operation, make sure that the ApsaraDB for Redis instance meets the following requirements:
     *   * *   The instance is an ApsaraDB for Redis Community Edition instance or ApsaraDB for Redis Enhanced Edition (Tair) [DRAM-based instance](~~126164~~).
     *   * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](~~95268~~) operation to check whether the instance uses the latest minor version.
     *   * *   The audit log feature is enabled for the instance. For more information, see [ModifyAuditLogConfig](~~130206~~).
     *   *
     * @param DescribeAuditLogConfigRequest $request DescribeAuditLogConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditLogConfigResponse DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeAuditLogConfig',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call the [ModifyAuditLogConfig](~~130206~~) operation to enable or disable the audit log feature for an ApsaraDB for Redis instance. For more information, see [Enable the new audit log feature](~~102015~~).
     *   * Before you call this operation, make sure that the ApsaraDB for Redis instance meets the following requirements:
     *   * *   The instance is an ApsaraDB for Redis Community Edition instance or ApsaraDB for Redis Enhanced Edition (Tair) [DRAM-based instance](~~126164~~).
     *   * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](~~95268~~) operation to check whether the instance uses the latest minor version.
     *   * *   The audit log feature is enabled for the instance. For more information, see [ModifyAuditLogConfig](~~130206~~).
     *   *
     * @param DescribeAuditLogConfigRequest $request DescribeAuditLogConfigRequest
     *
     * @return DescribeAuditLogConfigResponse DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * This operation can be called up to 100 times per minute. You can also query audit logs in the ApsaraDB for Redis console. For more information, see [Query audit logs of an instance](~~101937~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The instance is an ApsaraDB for Redis Community Edition instance or an ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance.
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The audit log feature is enabled for the instance. For more information, see [ModifyAuditLogConfig](~~130206~~).
     *   *
     * @param DescribeAuditRecordsRequest $request DescribeAuditRecordsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditRecordsResponse DescribeAuditRecordsResponse
     */
    public function describeAuditRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
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
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditRecords',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation can be called up to 100 times per minute. You can also query audit logs in the ApsaraDB for Redis console. For more information, see [Query audit logs of an instance](~~101937~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The instance is an ApsaraDB for Redis Community Edition instance or an ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance.
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The audit log feature is enabled for the instance. For more information, see [ModifyAuditLogConfig](~~130206~~).
     *   *
     * @param DescribeAuditRecordsRequest $request DescribeAuditRecordsRequest
     *
     * @return DescribeAuditRecordsResponse DescribeAuditRecordsResponse
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
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceScene)) {
            $query['InstanceScene'] = $request->instanceScene;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2015-01-01',
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
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
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
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2015-01-01',
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
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupJobId)) {
            $query['BackupJobId'] = $request->backupJobId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobMode)) {
            $query['JobMode'] = $request->jobMode;
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
            'action'      => 'DescribeBackupTasks',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupTasksResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->backupJobId)) {
            $query['BackupJobId'] = $request->backupJobId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needAof)) {
            $query['NeedAof'] = $request->needAof;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackups',
            'version'     => '2015-01-01',
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
     * > ApsaraDB for Redis has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](~~186019~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of an ApsaraDB for Redis instance is the latest?](~~129203~~).
     *   *
     * @param DescribeCacheAnalysisReportRequest $request DescribeCacheAnalysisReportRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCacheAnalysisReportResponse DescribeCacheAnalysisReportResponse
     */
    public function describeCacheAnalysisReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisType)) {
            $query['AnalysisType'] = $request->analysisType;
        }
        if (!Utils::isUnset($request->date)) {
            $query['Date'] = $request->date;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumbers)) {
            $query['PageNumbers'] = $request->pageNumbers;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCacheAnalysisReport',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCacheAnalysisReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > ApsaraDB for Redis has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](~~186019~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of an ApsaraDB for Redis instance is the latest?](~~129203~~).
     *   *
     * @param DescribeCacheAnalysisReportRequest $request DescribeCacheAnalysisReportRequest
     *
     * @return DescribeCacheAnalysisReportResponse DescribeCacheAnalysisReportResponse
     */
    public function describeCacheAnalysisReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisReportWithOptions($request, $runtime);
    }

    /**
     * > ApsaraDB for Redis has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](~~186019~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of an ApsaraDB for Redis instance is the latest?](~~129203~~).
     *   *
     * @param DescribeCacheAnalysisReportListRequest $request DescribeCacheAnalysisReportListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCacheAnalysisReportListResponse DescribeCacheAnalysisReportListResponse
     */
    public function describeCacheAnalysisReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumbers)) {
            $query['PageNumbers'] = $request->pageNumbers;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCacheAnalysisReportList',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCacheAnalysisReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > ApsaraDB for Redis has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](~~186019~~).
     *   * Before you call this operation, make sure that the instance meets the following requirements:
     *   * *   The engine version of the instance is Redis 4.0 or later.
     *   * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of an ApsaraDB for Redis instance is the latest?](~~129203~~).
     *   *
     * @param DescribeCacheAnalysisReportListRequest $request DescribeCacheAnalysisReportListRequest
     *
     * @return DescribeCacheAnalysisReportListResponse DescribeCacheAnalysisReportListResponse
     */
    public function describeCacheAnalysisReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisReportListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterBackupListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterBackupListResponse
     */
    public function describeClusterBackupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterBackupList',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterBackupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterBackupListRequest $request
     *
     * @return DescribeClusterBackupListResponse
     */
    public function describeClusterBackupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBackupListWithOptions($request, $runtime);
    }

    /**
     * > This API operation is applicable only to ApsaraDB for Redis instances that use [cloud disks](~~188068~~) and the [cluster architecture](~~52228~~).
     *   *
     * @param DescribeClusterMemberInfoRequest $request DescribeClusterMemberInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterMemberInfoResponse DescribeClusterMemberInfoResponse
     */
    public function describeClusterMemberInfoWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterMemberInfo',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterMemberInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This API operation is applicable only to ApsaraDB for Redis instances that use [cloud disks](~~188068~~) and the [cluster architecture](~~52228~~).
     *   *
     * @param DescribeClusterMemberInfoRequest $request DescribeClusterMemberInfoRequest
     *
     * @return DescribeClusterMemberInfoResponse DescribeClusterMemberInfoResponse
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
            'action'      => 'DescribeDBInstanceNetInfo',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * > Only instances that use cloud disks support this operation.
     *   *
     * @param DescribeDBNodeDirectVipInfoRequest $request DescribeDBNodeDirectVipInfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBNodeDirectVipInfoResponse DescribeDBNodeDirectVipInfoResponse
     */
    public function describeDBNodeDirectVipInfoWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBNodeDirectVipInfo',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBNodeDirectVipInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Only instances that use cloud disks support this operation.
     *   *
     * @param DescribeDBNodeDirectVipInfoRequest $request DescribeDBNodeDirectVipInfoRequest
     *
     * @return DescribeDBNodeDirectVipInfoResponse DescribeDBNodeDirectVipInfoResponse
     */
    public function describeDBNodeDirectVipInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodeDirectVipInfoWithOptions($request, $runtime);
    }

    /**
     * > If you want to query the information about ApsaraDB for Redis instances that are not deployed in a dedicated cluster, call the [DescribeInstanceAttribute](~~60996~~) operation.
     *   *
     * @param DescribeDedicatedClusterInstanceListRequest $request DescribeDedicatedClusterInstanceListRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedClusterInstanceListResponse DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostName)) {
            $query['DedicatedHostName'] = $request->dedicatedHostName;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceNetType)) {
            $query['InstanceNetType'] = $request->instanceNetType;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedClusterInstanceList',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedClusterInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > If you want to query the information about ApsaraDB for Redis instances that are not deployed in a dedicated cluster, call the [DescribeInstanceAttribute](~~60996~~) operation.
     *   *
     * @param DescribeDedicatedClusterInstanceListRequest $request DescribeDedicatedClusterInstanceListRequest
     *
     * @return DescribeDedicatedClusterInstanceListResponse DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterInstanceListWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, TDE must be enabled for the ApsaraDB for Redis instance by using a custom key. For more information, see [ModifyInstanceTDE](~~302337~~).
     *   * > For more information about TDE, see [Enable TDE](~~265913~~).
     *   *
     * @param DescribeEncryptionKeyRequest $request DescribeEncryptionKeyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEncryptionKeyResponse DescribeEncryptionKeyResponse
     */
    public function describeEncryptionKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
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
            'action'      => 'DescribeEncryptionKey',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEncryptionKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, TDE must be enabled for the ApsaraDB for Redis instance by using a custom key. For more information, see [ModifyInstanceTDE](~~302337~~).
     *   * > For more information about TDE, see [Enable TDE](~~265913~~).
     *   *
     * @param DescribeEncryptionKeyRequest $request DescribeEncryptionKeyRequest
     *
     * @return DescribeEncryptionKeyResponse DescribeEncryptionKeyResponse
     */
    public function describeEncryptionKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEncryptionKeyWithOptions($request, $runtime);
    }

    /**
     * *   You can specify a custom key when you call the [ModifyInstanceTDE](~~302337~~) operation to enable Transparent Data Encryption (TDE). You can call the DescribeEncryptionKeyList operation to query the custom keys that are in use. To create a custom key, you can call the [CreateKey](~~28947~~) operation of Key Management Service (KMS).
     *   * *   For more information about TDE and the usage notes of TDE, see [Enable TDE](~~265913~~).
     *   *
     * @param DescribeEncryptionKeyListRequest $request DescribeEncryptionKeyListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEncryptionKeyListResponse DescribeEncryptionKeyListResponse
     */
    public function describeEncryptionKeyListWithOptions($request, $runtime)
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
            'action'      => 'DescribeEncryptionKeyList',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can specify a custom key when you call the [ModifyInstanceTDE](~~302337~~) operation to enable Transparent Data Encryption (TDE). You can call the DescribeEncryptionKeyList operation to query the custom keys that are in use. To create a custom key, you can call the [CreateKey](~~28947~~) operation of Key Management Service (KMS).
     *   * *   For more information about TDE and the usage notes of TDE, see [Enable TDE](~~265913~~).
     *   *
     * @param DescribeEncryptionKeyListRequest $request DescribeEncryptionKeyListRequest
     *
     * @return DescribeEncryptionKeyListResponse DescribeEncryptionKeyListResponse
     */
    public function describeEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * ## Debugging
     *   * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeEngineVersion\\&type=RPC\\&version=2015-01-01).
     *   *
     * @param DescribeEngineVersionRequest $request DescribeEngineVersionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEngineVersionResponse DescribeEngineVersionResponse
     */
    public function describeEngineVersionWithOptions($request, $runtime)
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
            'action'      => 'DescribeEngineVersion',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Debugging
     *   * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeEngineVersion\\&type=RPC\\&version=2015-01-01).
     *   *
     * @param DescribeEngineVersionRequest $request DescribeEngineVersionRequest
     *
     * @return DescribeEngineVersionResponse DescribeEngineVersionResponse
     */
    public function describeEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEngineVersionWithOptions($request, $runtime);
    }

    /**
     * ## Debugging
     *   * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeGlobalDistributeCache\\&type=RPC\\&version=2015-01-01).
     *   *
     * @param DescribeGlobalDistributeCacheRequest $request DescribeGlobalDistributeCacheRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalDistributeCacheResponse DescribeGlobalDistributeCacheResponse
     */
    public function describeGlobalDistributeCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalInstanceId)) {
            $query['GlobalInstanceId'] = $request->globalInstanceId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->subInstanceId)) {
            $query['SubInstanceId'] = $request->subInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalDistributeCache',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalDistributeCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Debugging
     *   * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeGlobalDistributeCache\\&type=RPC\\&version=2015-01-01).
     *   *
     * @param DescribeGlobalDistributeCacheRequest $request DescribeGlobalDistributeCacheRequest
     *
     * @return DescribeGlobalDistributeCacheResponse DescribeGlobalDistributeCacheResponse
     */
    public function describeGlobalDistributeCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDistributeCacheWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalSecurityIPGroup',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGlobalSecurityIPGroupRequest $request
     *
     * @return DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalSecurityIPGroupRelation',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * You can also query the performance monitoring data of an instance in the ApsaraDB for Redis console. For more information, see [Metrics](~~43887~~).
     *   *
     * @param DescribeHistoryMonitorValuesRequest $request DescribeHistoryMonitorValuesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHistoryMonitorValuesResponse DescribeHistoryMonitorValuesResponse
     */
    public function describeHistoryMonitorValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intervalForHistory)) {
            $query['IntervalForHistory'] = $request->intervalForHistory;
        }
        if (!Utils::isUnset($request->monitorKeys)) {
            $query['MonitorKeys'] = $request->monitorKeys;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeRole)) {
            $query['NodeRole'] = $request->nodeRole;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryMonitorValues',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHistoryMonitorValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also query the performance monitoring data of an instance in the ApsaraDB for Redis console. For more information, see [Metrics](~~43887~~).
     *   *
     * @param DescribeHistoryMonitorValuesRequest $request DescribeHistoryMonitorValuesRequest
     *
     * @return DescribeHistoryMonitorValuesResponse DescribeHistoryMonitorValuesResponse
     */
    public function describeHistoryMonitorValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryMonitorValuesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHistoryTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromExecTime)) {
            $query['FromExecTime'] = $request->fromExecTime;
        }
        if (!Utils::isUnset($request->fromStartTime)) {
            $query['FromStartTime'] = $request->fromStartTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->toExecTime)) {
            $query['ToExecTime'] = $request->toExecTime;
        }
        if (!Utils::isUnset($request->toStartTime)) {
            $query['ToStartTime'] = $request->toStartTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryTasks',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHistoryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHistoryTasksRequest $request
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksWithOptions($request, $runtime);
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
            'action'      => 'DescribeInstanceAttribute',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeInstanceAutoRenewalAttribute',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAutoRenewalAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * This operation is available only for instances that use cloud disks.
     *   * > You can call the [DescribeParameters](~~473847~~) operation to query the parameter settings of instances that use local disks.
     *   *
     * @param DescribeInstanceConfigRequest $request DescribeInstanceConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceConfigResponse DescribeInstanceConfigResponse
     */
    public function describeInstanceConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeInstanceConfig',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for instances that use cloud disks.
     *   * > You can call the [DescribeParameters](~~473847~~) operation to query the parameter settings of instances that use local disks.
     *   *
     * @param DescribeInstanceConfigRequest $request DescribeInstanceConfigRequest
     *
     * @return DescribeInstanceConfigResponse DescribeInstanceConfigResponse
     */
    public function describeInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * SSL encryption is supported for ApsaraDB for Redis 2.8 standard master-replica instances, ApsaraDB for Redis 2.8 master-replica cluster instances, and ApsaraDB for Redis 4.0 master-replica cluster instances. You can enable SSL encryption to enhance data transmission security.
     *   * You can use one of the following methods to enable or disable SSL encryption or update the SSL certificate for an ApsaraDB for Redis instance:
     *   * *   Call the [ModifyInstanceSSL](~~96194~~) operation.
     *   * *   Enable or disable SSL encryption or update the SSL certificate in the ApsaraDB for Redis console. For more information, see [Configure SSL encryption](~~84898~~).
     *   * > After SSL encryption is enabled, the instance may respond slower.
     *   *
     * @param DescribeInstanceSSLRequest $request DescribeInstanceSSLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSSLResponse DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
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
            'action'      => 'DescribeInstanceSSL',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SSL encryption is supported for ApsaraDB for Redis 2.8 standard master-replica instances, ApsaraDB for Redis 2.8 master-replica cluster instances, and ApsaraDB for Redis 4.0 master-replica cluster instances. You can enable SSL encryption to enhance data transmission security.
     *   * You can use one of the following methods to enable or disable SSL encryption or update the SSL certificate for an ApsaraDB for Redis instance:
     *   * *   Call the [ModifyInstanceSSL](~~96194~~) operation.
     *   * *   Enable or disable SSL encryption or update the SSL certificate in the ApsaraDB for Redis console. For more information, see [Configure SSL encryption](~~84898~~).
     *   * > After SSL encryption is enabled, the instance may respond slower.
     *   *
     * @param DescribeInstanceSSLRequest $request DescribeInstanceSSLRequest
     *
     * @return DescribeInstanceSSLResponse DescribeInstanceSSLResponse
     */
    public function describeInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * For more information about TDE and the usage notes of TDE, see [Enable TDE](~~265913~~).
     *   * >  You can call the [ModifyInstanceTDE](~~302337~~) to enable or disable TDE.
     *   *
     * @param DescribeInstanceTDEStatusRequest $request DescribeInstanceTDEStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTDEStatusResponse DescribeInstanceTDEStatusResponse
     */
    public function describeInstanceTDEStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeInstanceTDEStatus',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTDEStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about TDE and the usage notes of TDE, see [Enable TDE](~~265913~~).
     *   * >  You can call the [ModifyInstanceTDE](~~302337~~) to enable or disable TDE.
     *   *
     * @param DescribeInstanceTDEStatusRequest $request DescribeInstanceTDEStatusRequest
     *
     * @return DescribeInstanceTDEStatusResponse DescribeInstanceTDEStatusResponse
     */
    public function describeInstanceTDEStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTDEStatusWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->architectureType)) {
            $query['ArchitectureType'] = $request->architectureType;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->editionType)) {
            $query['EditionType'] = $request->editionType;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->globalInstance)) {
            $query['GlobalInstance'] = $request->globalInstance;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
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
        if (!Utils::isUnset($request->privateIp)) {
            $query['PrivateIp'] = $request->privateIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
            'action'      => 'DescribeInstances',
            'version'     => '2015-01-01',
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
     * If you do not specify the InstanceIds parameter when you call this operation, the overview information of all instances is returned.
     *   * > This operation returns non-paged results.
     *   *
     * @param DescribeInstancesOverviewRequest $request DescribeInstancesOverviewRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesOverviewResponse DescribeInstancesOverviewResponse
     */
    public function describeInstancesOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->architectureType)) {
            $query['ArchitectureType'] = $request->architectureType;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->editionType)) {
            $query['EditionType'] = $request->editionType;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privateIp)) {
            $query['PrivateIp'] = $request->privateIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
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
            'action'      => 'DescribeInstancesOverview',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you do not specify the InstanceIds parameter when you call this operation, the overview information of all instances is returned.
     *   * > This operation returns non-paged results.
     *   *
     * @param DescribeInstancesOverviewRequest $request DescribeInstancesOverviewRequest
     *
     * @return DescribeInstancesOverviewResponse DescribeInstancesOverviewResponse
     */
    public function describeInstancesOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesOverviewWithOptions($request, $runtime);
    }

    /**
     * You can call the [EnableAdditionalBandwidth](~~206173~~) operation to increase the internal bandwidth of an instance.
     *   *
     * @param DescribeIntranetAttributeRequest $request DescribeIntranetAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIntranetAttributeResponse DescribeIntranetAttributeResponse
     */
    public function describeIntranetAttributeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeIntranetAttribute',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIntranetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the [EnableAdditionalBandwidth](~~206173~~) operation to increase the internal bandwidth of an instance.
     *   *
     * @param DescribeIntranetAttributeRequest $request DescribeIntranetAttributeRequest
     *
     * @return DescribeIntranetAttributeResponse DescribeIntranetAttributeResponse
     */
    public function describeIntranetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntranetAttributeWithOptions($request, $runtime);
    }

    /**
     * This parameter is supported only for cluster and read/write splitting instances.
     *   *
     * @param DescribeLogicInstanceTopologyRequest $request DescribeLogicInstanceTopologyRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogicInstanceTopologyResponse DescribeLogicInstanceTopologyResponse
     */
    public function describeLogicInstanceTopologyWithOptions($request, $runtime)
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
            'action'      => 'DescribeLogicInstanceTopology',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogicInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This parameter is supported only for cluster and read/write splitting instances.
     *   *
     * @param DescribeLogicInstanceTopologyRequest $request DescribeLogicInstanceTopologyRequest
     *
     * @return DescribeLogicInstanceTopologyResponse DescribeLogicInstanceTopologyResponse
     */
    public function describeLogicInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogicInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * >  ApsaraDB for Redis has upgraded the monitoring metrics. The DescribeMonitorItems operation is phased out. For more information, see [The DescribeMonitorItems operation supported by ApsaraDB for Redis is phased out](~~189893~~).
     *   * After you call this operation to retrieve a list of metrics for a specified ApsaraDB for Redis instance, you can call the [DescribeHistoryMonitorValues](~~DescribeHistoryMonitorValues~~) operation to query monitoring history of the instance.
     *   *
     * @param DescribeMonitorItemsRequest $request DescribeMonitorItemsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorItemsResponse DescribeMonitorItemsResponse
     */
    public function describeMonitorItemsWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorItems',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  ApsaraDB for Redis has upgraded the monitoring metrics. The DescribeMonitorItems operation is phased out. For more information, see [The DescribeMonitorItems operation supported by ApsaraDB for Redis is phased out](~~189893~~).
     *   * After you call this operation to retrieve a list of metrics for a specified ApsaraDB for Redis instance, you can call the [DescribeHistoryMonitorValues](~~DescribeHistoryMonitorValues~~) operation to query monitoring history of the instance.
     *   *
     * @param DescribeMonitorItemsRequest $request DescribeMonitorItemsRequest
     *
     * @return DescribeMonitorItemsResponse DescribeMonitorItemsResponse
     */
    public function describeMonitorItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorItemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterModificationHistoryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterName)) {
            $query['ParameterName'] = $request->parameterName;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterModificationHistory',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterModificationHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParameterModificationHistoryRequest $request
     *
     * @return DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterModificationHistoryWithOptions($request, $runtime);
    }

    /**
     * After you call this operation to query the parameters and default values of an instance, you can call the [ModifyInstanceConfig](~~61113~~) operation to reconfigure the parameters of the instance.
     *   *
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeParameterTemplates',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you call this operation to query the parameters and default values of an instance, you can call the [ModifyInstanceConfig](~~61113~~) operation to reconfigure the parameters of the instance.
     *   *
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * This operation is available only for instances that use local disks.
     *   * > You can call the [DescribeInstanceConfig](~~473846~~) operation to query the parameter settings of instances that use cloud disks.
     *   *
     * @param DescribeParametersRequest $request DescribeParametersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParametersResponse DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
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
            'action'      => 'DescribeParameters',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for instances that use local disks.
     *   * > You can call the [DescribeInstanceConfig](~~473846~~) operation to query the parameter settings of instances that use cloud disks.
     *   *
     * @param DescribeParametersRequest $request DescribeParametersRequest
     *
     * @return DescribeParametersResponse DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->forceUpgrade)) {
            $query['ForceUpgrade'] = $request->forceUpgrade;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->orderParamOut)) {
            $query['OrderParamOut'] = $request->orderParamOut;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2015-01-01',
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
     * @param DescribeRoleZoneInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfoWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
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
            'action'      => 'DescribeRoleZoneInfo',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoleZoneInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * For more information about how to view the operational logs of an instance in the ApsaraDB for Redis console, see [View active logs](~~101713~~).
     *   * This operation can be called up to 100 times per minute.
     *   *
     * @param DescribeRunningLogRecordsRequest $request DescribeRunningLogRecordsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRunningLogRecordsResponse DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
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
        if (!Utils::isUnset($request->queryKeyword)) {
            $query['QueryKeyword'] = $request->queryKeyword;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRunningLogRecords',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRunningLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to view the operational logs of an instance in the ApsaraDB for Redis console, see [View active logs](~~101713~~).
     *   * This operation can be called up to 100 times per minute.
     *   *
     * @param DescribeRunningLogRecordsRequest $request DescribeRunningLogRecordsRequest
     *
     * @return DescribeRunningLogRecordsResponse DescribeRunningLogRecordsResponse
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
            'action'      => 'DescribeSecurityGroupConfiguration',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'DescribeSecurityIps',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can also query slow logs in the ApsaraDB for Redis console. For more information, see [Query slow logs of an instance](~~95874~~). This operation can be called up to 100 times per minute.
     *   *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
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
        if (!Utils::isUnset($request->queryKeyword)) {
            $query['QueryKeyword'] = $request->queryKeyword;
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
        if (!Utils::isUnset($request->slowLogRecordType)) {
            $query['SlowLogRecordType'] = $request->slowLogRecordType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also query slow logs in the ApsaraDB for Redis console. For more information, see [Query slow logs of an instance](~~95874~~). This operation can be called up to 100 times per minute.
     *   *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the progress of a task when you perform time-consuming operations. You can also log on to the ApsaraDB for Redis console and click the Tasks icon in the upper-right corner of the **Instance Information** page to view the progress of the current task.
     *   *
     * @param DescribeTasksRequest $request DescribeTasksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the progress of a task when you perform time-consuming operations. You can also log on to the ApsaraDB for Redis console and click the Tasks icon in the upper-right corner of the **Instance Information** page to view the progress of the current task.
     *   *
     * @param DescribeTasksRequest $request DescribeTasksRequest
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
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
            'action'      => 'DescribeZones',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * If you enable the bandwidth auto scaling feature and call this operation at the same time, bandwidth auto scaling takes precedence. During bandwidth scale-back, the instance is scaled back to the default bandwidth of the instance type. For more information about the limits, costs, and FAQ about this feature, see [Adjust the bandwidth of an instance](~~102588~~).
     *   * >  Before you call this operation, you can call the [DescribeRoleZoneInfo](~~190794~~) operation to query the current bandwidth of each data node in an instance.
     *   *
     * @param EnableAdditionalBandwidthRequest $request EnableAdditionalBandwidthRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAdditionalBandwidthResponse EnableAdditionalBandwidthResponse
     */
    public function enableAdditionalBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderTimeLength)) {
            $query['OrderTimeLength'] = $request->orderTimeLength;
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableAdditionalBandwidth',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAdditionalBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you enable the bandwidth auto scaling feature and call this operation at the same time, bandwidth auto scaling takes precedence. During bandwidth scale-back, the instance is scaled back to the default bandwidth of the instance type. For more information about the limits, costs, and FAQ about this feature, see [Adjust the bandwidth of an instance](~~102588~~).
     *   * >  Before you call this operation, you can call the [DescribeRoleZoneInfo](~~190794~~) operation to query the current bandwidth of each data node in an instance.
     *   *
     * @param EnableAdditionalBandwidthRequest $request EnableAdditionalBandwidthRequest
     *
     * @return EnableAdditionalBandwidthResponse EnableAdditionalBandwidthResponse
     */
    public function enableAdditionalBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAdditionalBandwidthWithOptions($request, $runtime);
    }

    /**
     * For more information about how to clear the expired keys in the ApsaraDB for Redis console, see [Clear data](~~43881~~).
     *   * >  Expired keys cannot be recovered after they are deleted. Exercise caution when you call this operation.
     *   *
     * @param FlushExpireKeysRequest $request FlushExpireKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return FlushExpireKeysResponse FlushExpireKeysResponse
     */
    public function flushExpireKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
            'action'      => 'FlushExpireKeys',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlushExpireKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to clear the expired keys in the ApsaraDB for Redis console, see [Clear data](~~43881~~).
     *   * >  Expired keys cannot be recovered after they are deleted. Exercise caution when you call this operation.
     *   *
     * @param FlushExpireKeysRequest $request FlushExpireKeysRequest
     *
     * @return FlushExpireKeysResponse FlushExpireKeysResponse
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
            'action'      => 'FlushInstance',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlushInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Each ApsaraDB for Redis or Tair instance can contain up to 256 databases. Each database does not have a separate memory usage limit. The memory capacity that a database can use is subject to the total memory limit of the instance. You can execute the `SELECT` statement to switch between databases. For more information, see [What is the size of each database on an ApsaraDB for Redis instance, and how can I choose databases?](~~38688~~)
     *   * >  This operation is available only for cloud-native instances that use cloud disks.
     *   *
     * @param FlushInstanceForDBRequest $request FlushInstanceForDBRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return FlushInstanceForDBResponse FlushInstanceForDBResponse
     */
    public function flushInstanceForDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbIndex)) {
            $query['DbIndex'] = $request->dbIndex;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlushInstanceForDB',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlushInstanceForDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Each ApsaraDB for Redis or Tair instance can contain up to 256 databases. Each database does not have a separate memory usage limit. The memory capacity that a database can use is subject to the total memory limit of the instance. You can execute the `SELECT` statement to switch between databases. For more information, see [What is the size of each database on an ApsaraDB for Redis instance, and how can I choose databases?](~~38688~~)
     *   * >  This operation is available only for cloud-native instances that use cloud disks.
     *   *
     * @param FlushInstanceForDBRequest $request FlushInstanceForDBRequest
     *
     * @return FlushInstanceForDBResponse FlushInstanceForDBResponse
     */
    public function flushInstanceForDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flushInstanceForDBWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Only ApsaraDB for Redis instances of Redis 4.0 or later are supported.
     *   * *   The ApsaraDB for Redis instance must be in the running state.
     *   *
     * @param GrantAccountPrivilegeRequest $request GrantAccountPrivilegeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantAccountPrivilegeResponse GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
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
            'action'      => 'GrantAccountPrivilege',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Only ApsaraDB for Redis instances of Redis 4.0 or later are supported.
     *   * *   The ApsaraDB for Redis instance must be in the running state.
     *   *
     * @param GrantAccountPrivilegeRequest $request GrantAccountPrivilegeRequest
     *
     * @return GrantAccountPrivilegeResponse GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * The log management feature of ApsaraDB for Redis requires the resources of [Log Service](~~48869~~). To use the log management feature of ApsaraDB for Redis, you can call this operation to associate the RAM role named AliyunServiceRoleForKvstore with the ApsaraDB for Redis instance. For more information, see [Associated RAM roles of ApsaraDB for Redis](~~184337~~).
     *   *
     * @param InitializeKvstorePermissionRequest $request InitializeKvstorePermissionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeKvstorePermissionResponse InitializeKvstorePermissionResponse
     */
    public function initializeKvstorePermissionWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitializeKvstorePermission',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeKvstorePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The log management feature of ApsaraDB for Redis requires the resources of [Log Service](~~48869~~). To use the log management feature of ApsaraDB for Redis, you can call this operation to associate the RAM role named AliyunServiceRoleForKvstore with the ApsaraDB for Redis instance. For more information, see [Associated RAM roles of ApsaraDB for Redis](~~184337~~).
     *   *
     * @param InitializeKvstorePermissionRequest $request InitializeKvstorePermissionRequest
     *
     * @return InitializeKvstorePermissionResponse InitializeKvstorePermissionResponse
     */
    public function initializeKvstorePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeKvstorePermissionWithOptions($request, $runtime);
    }

    /**
     * You can also query the relationships between instances and tags in the ApsaraDB for Redis console. For more information, see [Filter ApsaraDB for Redis instances by tag](~~119160~~) and [View tags bound to an instance](~~134038~~).
     *   *
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
            'version'     => '2015-01-01',
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
     * You can also query the relationships between instances and tags in the ApsaraDB for Redis console. For more information, see [Filter ApsaraDB for Redis instances by tag](~~119160~~) and [View tags bound to an instance](~~134038~~).
     *   *
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
     * @param LockDBInstanceWriteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return LockDBInstanceWriteResponse
     */
    public function lockDBInstanceWriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->lockReason)) {
            $query['LockReason'] = $request->lockReason;
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
            'action'      => 'LockDBInstanceWrite',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockDBInstanceWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockDBInstanceWriteRequest $request
     *
     * @return LockDBInstanceWriteResponse
     */
    public function lockDBInstanceWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockDBInstanceWriteWithOptions($request, $runtime);
    }

    /**
     * For more information about how to migrate an instance across zones in the ApsaraDB for Redis console, see [Migrate an instance across zones](~~106272~~).
     *   * > *   If the network type of an ApsaraDB for Redis instance is switched from classic network to Virtual Private Cloud (VPC), and the endpoint of the classic network is retained, you can migrate the instance across zones only after the classic network endpoint is released upon expiration.
     *   * > *   After the data is migrated, the endpoint of an instance remains unchanged. However, the virtual IP address (VIP) is changed. We recommend that you use the endpoint instead of the VIP to connect to the instance.
     *   *
     * @param MigrateToOtherZoneRequest $request MigrateToOtherZoneRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateToOtherZoneResponse MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
        if (!Utils::isUnset($request->secondaryZoneId)) {
            $query['SecondaryZoneId'] = $request->secondaryZoneId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
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
            'action'      => 'MigrateToOtherZone',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to migrate an instance across zones in the ApsaraDB for Redis console, see [Migrate an instance across zones](~~106272~~).
     *   * > *   If the network type of an ApsaraDB for Redis instance is switched from classic network to Virtual Private Cloud (VPC), and the endpoint of the classic network is retained, you can migrate the instance across zones only after the classic network endpoint is released upon expiration.
     *   * > *   After the data is migrated, the endpoint of an instance remains unchanged. However, the virtual IP address (VIP) is changed. We recommend that you use the endpoint instead of the VIP to connect to the instance.
     *   *
     * @param MigrateToOtherZoneRequest $request MigrateToOtherZoneRequest
     *
     * @return MigrateToOtherZoneResponse MigrateToOtherZoneResponse
     */
    public function migrateToOtherZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateToOtherZoneWithOptions($request, $runtime);
    }

    /**
     * > This operation is supported only for instances that run Redis 4.0 or later.
     *   *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
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
            'action'      => 'ModifyAccountDescription',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is supported only for instances that run Redis 4.0 or later.
     *   *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
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
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->newAccountPassword)) {
            $query['NewAccountPassword'] = $request->newAccountPassword;
        }
        if (!Utils::isUnset($request->oldAccountPassword)) {
            $query['OldAccountPassword'] = $request->oldAccountPassword;
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
            'action'      => 'ModifyAccountPassword',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can receive notifications for ApsaraDB for Redis events such as instance migration and version upgrade by text message, phone call, email, internal message, or by using the ApsaraDB for Redis console. You can also change the scheduled switchover time of a task in the ApsaraDB for Redis console. For more information, see [Query or manage pending events](~~187022~~).
     *   *
     * @param ModifyActiveOperationTaskRequest $request ModifyActiveOperationTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyActiveOperationTaskResponse ModifyActiveOperationTaskResponse
     */
    public function modifyActiveOperationTaskWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyActiveOperationTask',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyActiveOperationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can receive notifications for ApsaraDB for Redis events such as instance migration and version upgrade by text message, phone call, email, internal message, or by using the ApsaraDB for Redis console. You can also change the scheduled switchover time of a task in the ApsaraDB for Redis console. For more information, see [Query or manage pending events](~~187022~~).
     *   *
     * @param ModifyActiveOperationTaskRequest $request ModifyActiveOperationTaskRequest
     *
     * @return ModifyActiveOperationTaskResponse ModifyActiveOperationTaskResponse
     */
    public function modifyActiveOperationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTaskWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of the audit log feature.
     *   * Before you call this operation, make sure that the ApsaraDB for Redis instance meets the following requirements:
     *   * *   The instance is an ApsaraDB for Redis Community Edition instance or ApsaraDB for Redis Enhanced Edition (Tair) [DRAM-based instance](~~126164~~).
     *   * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](~~95268~~) operation to check whether the instance uses the latest major version and minor version.
     *   *
     * @param ModifyAuditLogConfigRequest $request ModifyAuditLogConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAuditLogConfigResponse ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbAudit)) {
            $query['DbAudit'] = $request->dbAudit;
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
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAuditLogConfig',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of the audit log feature.
     *   * Before you call this operation, make sure that the ApsaraDB for Redis instance meets the following requirements:
     *   * *   The instance is an ApsaraDB for Redis Community Edition instance or ApsaraDB for Redis Enhanced Edition (Tair) [DRAM-based instance](~~126164~~).
     *   * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](~~95268~~) operation to check whether the instance uses the latest major version and minor version.
     *   *
     * @param ModifyAuditLogConfigRequest $request ModifyAuditLogConfigRequest
     *
     * @return ModifyAuditLogConfigResponse ModifyAuditLogConfigResponse
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
        $query = [];
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->enableBackupLog)) {
            $query['EnableBackupLog'] = $request->enableBackupLog;
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
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
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
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2015-01-01',
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
     * You can also modify the endpoint or port number of an instance in the ApsaraDB for Redis console. For more information, see [Change the endpoint or port number of an instance](~~85683~~).
     *   *
     * @param ModifyDBInstanceConnectionStringRequest $request ModifyDBInstanceConnectionStringRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->IPType)) {
            $query['IPType'] = $request->IPType;
        }
        if (!Utils::isUnset($request->newConnectionString)) {
            $query['NewConnectionString'] = $request->newConnectionString;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also modify the endpoint or port number of an instance in the ApsaraDB for Redis console. For more information, see [Change the endpoint or port number of an instance](~~85683~~).
     *   *
     * @param ModifyDBInstanceConnectionStringRequest $request ModifyDBInstanceConnectionStringRequest
     *
     * @return ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GIpList)) {
            $query['GIpList'] = $request->GIpList;
        }
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'ModifyGlobalSecurityIPGroup',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGlobalSecurityIPGroupRequest $request
     *
     * @return ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalSecurityIPGroupNameRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'ModifyGlobalSecurityIPGroupName',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGlobalSecurityIPGroupNameRequest $request
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'ModifyGlobalSecurityIPGroupRelation',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * You can also modify the information of an instance in the ApsaraDB for Redis console. For more information, see [Change or reset the password](~~43874~~).
     *   *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceReleaseProtection)) {
            $query['InstanceReleaseProtection'] = $request->instanceReleaseProtection;
        }
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
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
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also modify the information of an instance in the ApsaraDB for Redis console. For more information, see [Change or reset the password](~~43874~~).
     *   *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * > Auto-renewal is triggered seven days before the expiration date of the instance.
     *   *
     * @param ModifyInstanceAutoRenewalAttributeRequest $request ModifyInstanceAutoRenewalAttributeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
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
            'action'      => 'ModifyInstanceAutoRenewalAttribute',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Auto-renewal is triggered seven days before the expiration date of the instance.
     *   *
     * @param ModifyInstanceAutoRenewalAttributeRequest $request ModifyInstanceAutoRenewalAttributeRequest
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse ModifyInstanceAutoRenewalAttributeResponse
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
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
            'action'      => 'ModifyInstanceConfig',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can also modify the maintenance window of an instance in the ApsaraDB for Redis console. For more information, see [Set a maintenance window](~~55252~~).
     *   *
     * @param ModifyInstanceMaintainTimeRequest $request ModifyInstanceMaintainTimeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceMaintainTimeResponse ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maintainEndTime)) {
            $query['MaintainEndTime'] = $request->maintainEndTime;
        }
        if (!Utils::isUnset($request->maintainStartTime)) {
            $query['MaintainStartTime'] = $request->maintainStartTime;
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
            'action'      => 'ModifyInstanceMaintainTime',
            'version'     => '2015-01-01',
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
     * You can also modify the maintenance window of an instance in the ApsaraDB for Redis console. For more information, see [Set a maintenance window](~~55252~~).
     *   *
     * @param ModifyInstanceMaintainTimeRequest $request ModifyInstanceMaintainTimeRequest
     *
     * @return ModifyInstanceMaintainTimeResponse ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * For more information about how to perform the corresponding operation in the console, see [Upgrade the major version](~~101764~~).
     *   *
     * @param ModifyInstanceMajorVersionRequest $request ModifyInstanceMajorVersionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceMajorVersionResponse ModifyInstanceMajorVersionResponse
     */
    public function modifyInstanceMajorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->majorVersion)) {
            $query['MajorVersion'] = $request->majorVersion;
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
            'action'      => 'ModifyInstanceMajorVersion',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMajorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to perform the corresponding operation in the console, see [Upgrade the major version](~~101764~~).
     *   *
     * @param ModifyInstanceMajorVersionRequest $request ModifyInstanceMajorVersionRequest
     *
     * @return ModifyInstanceMajorVersionResponse ModifyInstanceMajorVersionResponse
     */
    public function modifyInstanceMajorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMajorVersionWithOptions($request, $runtime);
    }

    /**
     * The procedure to update the minor version of an instance varies based on types of ApsaraDB for Redis instances. For more information, see [Upgrade the minor version](~~56450~~).
     *   * >
     *   * *   Before you call this operation, you can call the [DescribeEngineVersion](~~95268~~) operation to query the minor version of the current instance.
     *   * *   When you switch your workloads over from the original instance to a new instance or from the master node to the replica node in the original instance, you may experience disconnections that last a few seconds. The original instance stays in the read-only state within 60 seconds until all data is synchronized. We recommend that you upgrade the original instance during off-peak hours and make sure that your application is configured to automatically reconnect to the original instance.
     *   *
     * @param ModifyInstanceMinorVersionRequest $request ModifyInstanceMinorVersionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceMinorVersionResponse ModifyInstanceMinorVersionResponse
     */
    public function modifyInstanceMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->minorversion)) {
            $query['Minorversion'] = $request->minorversion;
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
            'action'      => 'ModifyInstanceMinorVersion',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The procedure to update the minor version of an instance varies based on types of ApsaraDB for Redis instances. For more information, see [Upgrade the minor version](~~56450~~).
     *   * >
     *   * *   Before you call this operation, you can call the [DescribeEngineVersion](~~95268~~) operation to query the minor version of the current instance.
     *   * *   When you switch your workloads over from the original instance to a new instance or from the master node to the replica node in the original instance, you may experience disconnections that last a few seconds. The original instance stays in the read-only state within 60 seconds until all data is synchronized. We recommend that you upgrade the original instance during off-peak hours and make sure that your application is configured to automatically reconnect to the original instance.
     *   *
     * @param ModifyInstanceMinorVersionRequest $request ModifyInstanceMinorVersionRequest
     *
     * @return ModifyInstanceMinorVersionResponse ModifyInstanceMinorVersionResponse
     */
    public function modifyInstanceMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMinorVersionWithOptions($request, $runtime);
    }

    /**
     * You can also perform this operation in the ApsaraDB for Redis console. For more information, see [Change the expiration time for the endpoint of the classic network](~~60062~~).
     *   * > For more information about how to switch the network type of an ApsaraDB for Redis instance from classic network to VPC, see [SwitchNetwork](~~61005~~).
     *   *
     * @param ModifyInstanceNetExpireTimeRequest $request ModifyInstanceNetExpireTimeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceNetExpireTimeResponse ModifyInstanceNetExpireTimeResponse
     */
    public function modifyInstanceNetExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classicExpiredDays)) {
            $query['ClassicExpiredDays'] = $request->classicExpiredDays;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
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
            'action'      => 'ModifyInstanceNetExpireTime',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceNetExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also perform this operation in the ApsaraDB for Redis console. For more information, see [Change the expiration time for the endpoint of the classic network](~~60062~~).
     *   * > For more information about how to switch the network type of an ApsaraDB for Redis instance from classic network to VPC, see [SwitchNetwork](~~61005~~).
     *   *
     * @param ModifyInstanceNetExpireTimeRequest $request ModifyInstanceNetExpireTimeRequest
     *
     * @return ModifyInstanceNetExpireTimeResponse ModifyInstanceNetExpireTimeResponse
     */
    public function modifyInstanceNetExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNetExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceParameterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceParameterResponse
     */
    public function modifyInstanceParameterWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
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
            'action'      => 'ModifyInstanceParameter',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceParameterRequest $request
     *
     * @return ModifyInstanceParameterResponse
     */
    public function modifyInstanceParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceParameterWithOptions($request, $runtime);
    }

    /**
     * You can also modify SSL encryption configurations in the ApsaraDB for Redis console. For more information, see [Configure SSL encryption](~~84898~~).
     *   * >  To specify the earliest supported SSL version, you can call the [ModifyInstanceConfig](~~ModifyInstanceConfig~~) operation to modify the required parameter.
     *   *
     * @param ModifyInstanceSSLRequest $request ModifyInstanceSSLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceSSLResponse ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->SSLEnabled)) {
            $query['SSLEnabled'] = $request->SSLEnabled;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceSSL',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also modify SSL encryption configurations in the ApsaraDB for Redis console. For more information, see [Configure SSL encryption](~~84898~~).
     *   * >  To specify the earliest supported SSL version, you can call the [ModifyInstanceConfig](~~ModifyInstanceConfig~~) operation to modify the required parameter.
     *   *
     * @param ModifyInstanceSSLRequest $request ModifyInstanceSSLRequest
     *
     * @return ModifyInstanceSSLResponse ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * >  For more information about the procedure, impacts, limits, and fees of this operation, see [Change the configurations of an instance](~~26353~~).
     *   *
     * @param ModifyInstanceSpecRequest $request ModifyInstanceSpecRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceSpecResponse ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->forceTrans)) {
            $query['ForceTrans'] = $request->forceTrans;
        }
        if (!Utils::isUnset($request->forceUpgrade)) {
            $query['ForceUpgrade'] = $request->forceUpgrade;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->majorVersion)) {
            $query['MajorVersion'] = $request->majorVersion;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readOnlyCount)) {
            $query['ReadOnlyCount'] = $request->readOnlyCount;
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
        if (!Utils::isUnset($request->shardCount)) {
            $query['ShardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->slaveReadOnlyCount)) {
            $query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceSpec',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  For more information about the procedure, impacts, limits, and fees of this operation, see [Change the configurations of an instance](~~26353~~).
     *   *
     * @param ModifyInstanceSpecRequest $request ModifyInstanceSpecRequest
     *
     * @return ModifyInstanceSpecResponse ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * > For more information about TDE and the impact of TDE, see [Enable TDE](~~265913~~).
     *   *
     * @param ModifyInstanceTDERequest $request ModifyInstanceTDERequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceTDEResponse ModifyInstanceTDEResponse
     */
    public function modifyInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->encryptionName)) {
            $query['EncryptionName'] = $request->encryptionName;
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
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->TDEStatus)) {
            $query['TDEStatus'] = $request->TDEStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceTDE',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > For more information about TDE and the impact of TDE, see [Enable TDE](~~265913~~).
     *   *
     * @param ModifyInstanceTDERequest $request ModifyInstanceTDERequest
     *
     * @return ModifyInstanceTDEResponse ModifyInstanceTDEResponse
     */
    public function modifyInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * When the password-free access feature is enabled, Elastic Compute Service (ECS) instances in the same virtual private cloud (VPC) can connect to the ApsaraDB for Redis instance without a password. You can also use the username and password to connect to the ApsaraDB for Redis instance.
     *   * > The ApsaraDB for Redis instance is deployed in a VPC. For more information, see [Enable password-free access](~~85168~~).
     *   *
     * @param ModifyInstanceVpcAuthModeRequest $request ModifyInstanceVpcAuthModeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceVpcAuthModeResponse ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthModeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->vpcAuthMode)) {
            $query['VpcAuthMode'] = $request->vpcAuthMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceVpcAuthMode',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceVpcAuthModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When the password-free access feature is enabled, Elastic Compute Service (ECS) instances in the same virtual private cloud (VPC) can connect to the ApsaraDB for Redis instance without a password. You can also use the username and password to connect to the ApsaraDB for Redis instance.
     *   * > The ApsaraDB for Redis instance is deployed in a VPC. For more information, see [Enable password-free access](~~85168~~).
     *   *
     * @param ModifyInstanceVpcAuthModeRequest $request ModifyInstanceVpcAuthModeRequest
     *
     * @return ModifyInstanceVpcAuthModeResponse ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVpcAuthModeWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation is applicable only to an ApsaraDB for Redis instance that is deployed in a dedicated cluster. To adjust the bandwidth of a standard ApsaraDB for Redis instance, call the [EnableAdditionalBandwidth](~~206173~~) operation.
     *   *
     * @param ModifyIntranetAttributeRequest $request ModifyIntranetAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyIntranetAttributeResponse ModifyIntranetAttributeResponse
     */
    public function modifyIntranetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandWidth)) {
            $query['BandWidth'] = $request->bandWidth;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
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
            'action'      => 'ModifyIntranetAttribute',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIntranetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation is applicable only to an ApsaraDB for Redis instance that is deployed in a dedicated cluster. To adjust the bandwidth of a standard ApsaraDB for Redis instance, call the [EnableAdditionalBandwidth](~~206173~~) operation.
     *   *
     * @param ModifyIntranetAttributeRequest $request ModifyIntranetAttributeRequest
     *
     * @return ModifyIntranetAttributeResponse ModifyIntranetAttributeResponse
     */
    public function modifyIntranetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIntranetAttributeWithOptions($request, $runtime);
    }

    /**
     * Resource groups allow you to sort resources owned by your Alibaba Cloud account into groups. This simplifies resource and permission management within your Alibaba Cloud account. For more information, see [What is Resource Management?](~~94475~~)
     *   * > For more information about resource group API operations, see [Resource Management API overview](~~160024~~).
     *   *
     * @param ModifyResourceGroupRequest $request ModifyResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyResourceGroupResponse ModifyResourceGroupResponse
     */
    public function modifyResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'ModifyResourceGroup',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resource groups allow you to sort resources owned by your Alibaba Cloud account into groups. This simplifies resource and permission management within your Alibaba Cloud account. For more information, see [What is Resource Management?](~~94475~~)
     *   * > For more information about resource group API operations, see [Resource Management API overview](~~160024~~).
     *   *
     * @param ModifyResourceGroupRequest $request ModifyResourceGroupRequest
     *
     * @return ModifyResourceGroupResponse ModifyResourceGroupResponse
     */
    public function modifyResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceGroupWithOptions($request, $runtime);
    }

    /**
     * > After you call this operation, the security groups that are added to the whitelists of the ApsaraDB for Redis instance are deleted, and the security group specified by the **SecurityGroupId** parameter is added to the whitelists. For more information about how to reset security groups in the ApsaraDB for Redis console, see [Add security groups](~~148267~~).
     *   *
     * @param ModifySecurityGroupConfigurationRequest $request ModifySecurityGroupConfigurationRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityGroupConfigurationResponse ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityGroupConfiguration',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityGroupConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > After you call this operation, the security groups that are added to the whitelists of the ApsaraDB for Redis instance are deleted, and the security group specified by the **SecurityGroupId** parameter is added to the whitelists. For more information about how to reset security groups in the ApsaraDB for Redis console, see [Add security groups](~~148267~~).
     *   *
     * @param ModifySecurityGroupConfigurationRequest $request ModifySecurityGroupConfigurationRequest
     *
     * @return ModifySecurityGroupConfigurationResponse ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * You can also modify the whitelists of an instance in the ApsaraDB for Redis console. For more information, see [Configure a whitelist for an instance](~~56464~~).
     *   *
     * @param ModifySecurityIpsRequest $request ModifySecurityIpsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityIpsResponse ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
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
        if (!Utils::isUnset($request->securityIpGroupAttribute)) {
            $query['SecurityIpGroupAttribute'] = $request->securityIpGroupAttribute;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $query['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also modify the whitelists of an instance in the ApsaraDB for Redis console. For more information, see [Configure a whitelist for an instance](~~56464~~).
     *   *
     * @param ModifySecurityIpsRequest $request ModifySecurityIpsRequest
     *
     * @return ModifySecurityIpsResponse ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * In direct connection mode, clients can bypass proxy nodes and use private endpoints to connect to ApsaraDB for Redis instances. This is similar to the connection to a native Redis cluster. The direct connection mode can reduce communication overheads and the response time of ApsaraDB for Redis. For more information, see [Enable the direct connection mode](~~146901~~).
     *   *
     * @param ReleaseDirectConnectionRequest $request ReleaseDirectConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseDirectConnectionResponse ReleaseDirectConnectionResponse
     */
    public function releaseDirectConnectionWithOptions($request, $runtime)
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
            'action'      => 'ReleaseDirectConnection',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseDirectConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In direct connection mode, clients can bypass proxy nodes and use private endpoints to connect to ApsaraDB for Redis instances. This is similar to the connection to a native Redis cluster. The direct connection mode can reduce communication overheads and the response time of ApsaraDB for Redis. For more information, see [Enable the direct connection mode](~~146901~~).
     *   *
     * @param ReleaseDirectConnectionRequest $request ReleaseDirectConnectionRequest
     *
     * @return ReleaseDirectConnectionResponse ReleaseDirectConnectionResponse
     */
    public function releaseDirectConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDirectConnectionWithOptions($request, $runtime);
    }

    /**
     * For more information about how to perform the API operation in the ApsaraDB for Redis console, see [Release public endpoints](~~125424~~).
     *   *
     * @param ReleaseInstancePublicConnectionRequest $request ReleaseInstancePublicConnectionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
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
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to perform the API operation in the ApsaraDB for Redis console, see [Release public endpoints](~~125424~~).
     *   *
     * @param ReleaseInstancePublicConnectionRequest $request ReleaseInstancePublicConnectionRequest
     *
     * @return ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to **RemoveSubInstance**.
     *   *
     * @param RemoveSubInstanceRequest $request RemoveSubInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveSubInstanceResponse RemoveSubInstanceResponse
     */
    public function removeSubInstanceWithOptions($request, $runtime)
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
            'action'      => 'RemoveSubInstance',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSubInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **RemoveSubInstance**.
     *   *
     * @param RemoveSubInstanceRequest $request RemoveSubInstanceRequest
     *
     * @return RemoveSubInstanceResponse RemoveSubInstanceResponse
     */
    public function removeSubInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSubInstanceWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * You can adjust the bandwidth of an instance in the ApsaraDB for Redis console. For more information, see [Adjust the bandwidth of an ApsaraDB for Redis instance](~~102588~~). You can also call the [EnableAdditionalBandwidth](~~206173~~) operation to adjust the bandwidth of an instance. If you want to continue using the bandwidth that you purchase after the validity period of the bandwidth, you must call the RenewAdditionalBandwidth operation to renew the bandwidth before the bandwidth expires.
     *   * > Before you call this operation, you can call the [DescribeIntranetAttribute](~~128715~~) operation, which returns the expiration time of the purchased bandwidth in the **BandwidthExpireTime** parameter.
     *   *
     * @param RenewAdditionalBandwidthRequest $request RenewAdditionalBandwidthRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewAdditionalBandwidthResponse RenewAdditionalBandwidthResponse
     */
    public function renewAdditionalBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderTimeLength)) {
            $query['OrderTimeLength'] = $request->orderTimeLength;
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewAdditionalBandwidth',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewAdditionalBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and [pricing](~~54532~~) of ApsaraDB for Redis.
     *   * You can adjust the bandwidth of an instance in the ApsaraDB for Redis console. For more information, see [Adjust the bandwidth of an ApsaraDB for Redis instance](~~102588~~). You can also call the [EnableAdditionalBandwidth](~~206173~~) operation to adjust the bandwidth of an instance. If you want to continue using the bandwidth that you purchase after the validity period of the bandwidth, you must call the RenewAdditionalBandwidth operation to renew the bandwidth before the bandwidth expires.
     *   * > Before you call this operation, you can call the [DescribeIntranetAttribute](~~128715~~) operation, which returns the expiration time of the purchased bandwidth in the **BandwidthExpireTime** parameter.
     *   *
     * @param RenewAdditionalBandwidthRequest $request RenewAdditionalBandwidthRequest
     *
     * @return RenewAdditionalBandwidthResponse RenewAdditionalBandwidthResponse
     */
    public function renewAdditionalBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAdditionalBandwidthWithOptions($request, $runtime);
    }

    /**
     * This operation is applicable only to subscription instances.
     *   *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action'      => 'RenewInstance',
            'version'     => '2015-01-01',
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
     * This operation is applicable only to subscription instances.
     *   *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * >  Only ApsaraDB for Redis instances of Redis 4.0 or later are supported.
     *   *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
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
            'action'      => 'ResetAccountPassword',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Only ApsaraDB for Redis instances of Redis 4.0 or later are supported.
     *   *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
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
        $query = [];
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
        if (!Utils::isUnset($request->upgradeMinorVersion)) {
            $query['UpgradeMinorVersion'] = $request->upgradeMinorVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartInstance',
            'version'     => '2015-01-01',
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
     * *   If your instance is a [persistent memory-optimized instance](~~443828~~) or [DRAM-based instance](~~443827~~) that is compatible with Redis 5.0 and the [data flashback](~~443784~~) feature is enabled, you can call this operation to restore the data of a specified key to a specified point in time that is accurate to the second. Other keys are not affected. This way, you can achieve more fine-grained data restoration.
     *   * *   For other instance series, this operation overwrites the existing data of your instance with the backup data. Proceed with caution. We recommend that you call the [CreateInstance](~~60873~~) operation to create an instance. Then, you can restore data to the new instance.
     *   *
     * @param RestoreInstanceRequest $request RestoreInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreInstanceResponse RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->filterKey)) {
            $query['FilterKey'] = $request->filterKey;
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
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->timeShift)) {
            $query['TimeShift'] = $request->timeShift;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreInstance',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If your instance is a [persistent memory-optimized instance](~~443828~~) or [DRAM-based instance](~~443827~~) that is compatible with Redis 5.0 and the [data flashback](~~443784~~) feature is enabled, you can call this operation to restore the data of a specified key to a specified point in time that is accurate to the second. Other keys are not affected. This way, you can achieve more fine-grained data restoration.
     *   * *   For other instance series, this operation overwrites the existing data of your instance with the backup data. Proceed with caution. We recommend that you call the [CreateInstance](~~60873~~) operation to create an instance. Then, you can restore data to the new instance.
     *   *
     * @param RestoreInstanceRequest $request RestoreInstanceRequest
     *
     * @return RestoreInstanceResponse RestoreInstanceResponse
     */
    public function restoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreInstanceWithOptions($request, $runtime);
    }

    /**
     * > For more information about nearby access to applications that are deployed across zones, see [Switch node roles](~~164222~~).
     *   * The instance must be an ApsaraDB for Redis Community Edition instance or Enhanced Edition (Tair) [DRAM-based](~~126164~~) instance that uses local disks.
     *   * A call to this operation has the following impacts on your instance:
     *   * *   The data shards in the instance may change to the read-only state and experience transient connections within seconds. Make sure that your application is configured to automatically reconnect to the instance.
     *   * *   If the instance enters the switching state, you cannot manage this instance. For example, you cannot modify the instance configurations or migrate the instance to another zone.
     *   *
     * @param SwitchInstanceHARequest $request SwitchInstanceHARequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchInstanceHAResponse SwitchInstanceHAResponse
     */
    public function switchInstanceHAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
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
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        if (!Utils::isUnset($request->switchType)) {
            $query['SwitchType'] = $request->switchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchInstanceHA',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > For more information about nearby access to applications that are deployed across zones, see [Switch node roles](~~164222~~).
     *   * The instance must be an ApsaraDB for Redis Community Edition instance or Enhanced Edition (Tair) [DRAM-based](~~126164~~) instance that uses local disks.
     *   * A call to this operation has the following impacts on your instance:
     *   * *   The data shards in the instance may change to the read-only state and experience transient connections within seconds. Make sure that your application is configured to automatically reconnect to the instance.
     *   * *   If the instance enters the switching state, you cannot manage this instance. For example, you cannot modify the instance configurations or migrate the instance to another zone.
     *   *
     * @param SwitchInstanceHARequest $request SwitchInstanceHARequest
     *
     * @return SwitchInstanceHAResponse SwitchInstanceHAResponse
     */
    public function switchInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchInstanceHAWithOptions($request, $runtime);
    }

    /**
     * For more information about the proxy mode, see [Features of proxy nodes](~~142959~~). Before you call this operation, make sure that the following requirements are met:
     *   * *   Your ApsaraDB for Redis instance is created by using a dedicated cluster. For more information, see [What is ApsaraDB MyBase?](~~141455~~)
     *   * *   The instance uses the cluster architecture. For more information about the cluster architecture, see [Cluster master-replica instances](~~52228~~).
     *   * > Before you call the SwitchInstanceProxy operation, you must call the [DescribeDedicatedClusterInstanceList](~~229522~~) operation and view the value of the **ProxyCount** response parameter to check whether the proxy mode is enabled. A value of 0 indicates that the proxy mode is disabled. A value that is greater than 0 indicates that the proxy mode is enabled.
     *   *
     * @param SwitchInstanceProxyRequest $request SwitchInstanceProxyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchInstanceProxyResponse SwitchInstanceProxyResponse
     */
    public function switchInstanceProxyWithOptions($request, $runtime)
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
            'action'      => 'SwitchInstanceProxy',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchInstanceProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about the proxy mode, see [Features of proxy nodes](~~142959~~). Before you call this operation, make sure that the following requirements are met:
     *   * *   Your ApsaraDB for Redis instance is created by using a dedicated cluster. For more information, see [What is ApsaraDB MyBase?](~~141455~~)
     *   * *   The instance uses the cluster architecture. For more information about the cluster architecture, see [Cluster master-replica instances](~~52228~~).
     *   * > Before you call the SwitchInstanceProxy operation, you must call the [DescribeDedicatedClusterInstanceList](~~229522~~) operation and view the value of the **ProxyCount** response parameter to check whether the proxy mode is enabled. A value of 0 indicates that the proxy mode is disabled. A value that is greater than 0 indicates that the proxy mode is enabled.
     *   *
     * @param SwitchInstanceProxyRequest $request SwitchInstanceProxyRequest
     *
     * @return SwitchInstanceProxyResponse SwitchInstanceProxyResponse
     */
    public function switchInstanceProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchInstanceProxyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->classicExpiredDays)) {
            $query['ClassicExpiredDays'] = $request->classicExpiredDays;
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
        if (!Utils::isUnset($request->retainClassic)) {
            $query['RetainClassic'] = $request->retainClassic;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->targetNetworkType)) {
            $query['TargetNetworkType'] = $request->targetNetworkType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchNetwork',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncDtsStatus',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncDtsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter instances by tag.
     *   * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     *   * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     *   * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     *   * *   You can add up to 20 tags to each instance.
     *   * *   You can add tags to up to 50 instances in each request.
     *   * You can also add tags to instances in the ApsaraDB for Redis console. For more information, see [Create a tag](~~118779~~).
     *   *
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
            'version'     => '2015-01-01',
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
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter instances by tag.
     *   * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     *   * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     *   * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     *   * *   You can add up to 20 tags to each instance.
     *   * *   You can add tags to up to 50 instances in each request.
     *   * You can also add tags to instances in the ApsaraDB for Redis console. For more information, see [Create a tag](~~118779~~).
     *   *
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
     * Before you call this operation, make sure that you understand relevant precautions and billing rules. For more information, see the following topics:
     *   * *   [Change the billing method to subscription](~~54542~~).
     *   * *   [Change the billing method to pay-as-you-go](~~211549~~).
     *   *
     * @param TransformInstanceChargeTypeRequest $request TransformInstanceChargeTypeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return TransformInstanceChargeTypeResponse TransformInstanceChargeTypeResponse
     */
    public function transformInstanceChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action'      => 'TransformInstanceChargeType',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand relevant precautions and billing rules. For more information, see the following topics:
     *   * *   [Change the billing method to subscription](~~54542~~).
     *   * *   [Change the billing method to pay-as-you-go](~~211549~~).
     *   *
     * @param TransformInstanceChargeTypeRequest $request TransformInstanceChargeTypeRequest
     *
     * @return TransformInstanceChargeTypeResponse TransformInstanceChargeTypeResponse
     */
    public function transformInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * For more information about how to change the billing method in the ApsaraDB for Redis console, see [Switch to subscription](~~54542~~).
     *   * >  You cannot change the billing method of an ApsaraDB for Redis instance from subscription to pay-as-you-go.
     *   *
     * @param TransformToPrePaidRequest $request TransformToPrePaidRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TransformToPrePaidResponse TransformToPrePaidResponse
     */
    public function transformToPrePaidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action'      => 'TransformToPrePaid',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformToPrePaidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to change the billing method in the ApsaraDB for Redis console, see [Switch to subscription](~~54542~~).
     *   * >  You cannot change the billing method of an ApsaraDB for Redis instance from subscription to pay-as-you-go.
     *   *
     * @param TransformToPrePaidRequest $request TransformToPrePaidRequest
     *
     * @return TransformToPrePaidResponse TransformToPrePaidResponse
     */
    public function transformToPrePaid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformToPrePaidWithOptions($request, $runtime);
    }

    /**
     * @param UnlockDBInstanceWriteRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnlockDBInstanceWriteResponse
     */
    public function unlockDBInstanceWriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'UnlockDBInstanceWrite',
            'version'     => '2015-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockDBInstanceWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockDBInstanceWriteRequest $request
     *
     * @return UnlockDBInstanceWriteResponse
     */
    public function unlockDBInstanceWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockDBInstanceWriteWithOptions($request, $runtime);
    }

    /**
     * *   You can remove up to 20 tags at a time.
     *   * *   If a tag is removed from an instance and is not added to other instances, the tag is deleted.
     *   * You can also remove tags from instances in the ApsaraDB for Redis console. For more information, see [Remove a tag](~~119157~~).
     *   *
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
            'version'     => '2015-01-01',
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
     * *   You can remove up to 20 tags at a time.
     *   * *   If a tag is removed from an instance and is not added to other instances, the tag is deleted.
     *   * You can also remove tags from instances in the ApsaraDB for Redis console. For more information, see [Remove a tag](~~119157~~).
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
