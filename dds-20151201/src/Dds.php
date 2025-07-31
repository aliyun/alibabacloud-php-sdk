<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateNodePrivateNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateNodePrivateNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocatePublicNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocatePublicNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckCloudResourceAuthorizedRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckCloudResourceAuthorizedResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckRecoveryConditionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckRecoveryConditionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeBatchRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeBatchResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteNodeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteNodeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationMaintenanceConfigRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationMaintenanceConfigResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskCountRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskCountResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskRegionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskRegionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditLogFilterRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditLogFilterResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailabilityZonesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailabilityZonesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupDBsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupDBsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupStorageRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupStorageResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupTasksRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupTasksResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterRecoverTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterRecoverTimeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceEncryptionKeyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceEncryptionKeyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSpecInfoRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSpecInfoResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSwitchLogRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSwitchLogResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceTDEInfoRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceTDEInfoResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksStatRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksStatResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceRecoverTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceRecoverTimeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKmsKeysRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKmsKeysResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeMongoDBLogConfigRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeMongoDBLogConfigResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRestoreDBInstanceListRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRestoreDBInstanceListResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRunningLogRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRunningLogRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DestroyInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DestroyInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\EvaluateResourceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\EvaluateResourceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateAvailableZoneRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateAvailableZoneResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditLogFilterRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditLogFilterResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceConfigRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceConfigResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceDiskTypeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceDiskTypeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetExpireTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetExpireTimeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSpecRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSpecResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceTDERequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceTDEResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupNameRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupNameResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceVpcAuthModeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceVpcAuthModeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecBatchRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecBatchResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyTaskInfoRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyTaskInfoResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleaseNodePrivateNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleaseNodePrivateNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleasePublicNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleasePublicNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\RenewDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\RenewDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestartNodeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestartNodeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\SwitchDBInstanceHARequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\SwitchDBInstanceHAResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransferClusterBackupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransferClusterBackupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransformInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransformInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransformToPrePaidRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransformToPrePaidResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'mongodb.aliyuncs.com',
            'cn-beijing' => 'mongodb.aliyuncs.com',
            'cn-zhangjiakou' => 'mongodb.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote' => 'mongodb.cn-huhehaote.aliyuncs.com',
            'cn-wulanchabu' => 'mongodb.aliyuncs.com',
            'cn-hangzhou' => 'mongodb.aliyuncs.com',
            'cn-shanghai' => 'mongodb.aliyuncs.com',
            'cn-shenzhen' => 'mongodb.aliyuncs.com',
            'cn-heyuan' => 'mongodb.aliyuncs.com',
            'cn-guangzhou' => 'mongodb.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'mongodb.cn-chengdu.aliyuncs.com',
            'cn-hongkong' => 'mongodb.cn-hongkong.aliyuncs.com',
            'ap-northeast-1' => 'mongodb.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1' => 'mongodb.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'mongodb.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'mongodb.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'mongodb.ap-southeast-5.aliyuncs.com',
            'us-east-1' => 'mongodb.us-east-1.aliyuncs.com',
            'us-west-1' => 'mongodb.us-west-1.aliyuncs.com',
            'eu-west-1' => 'mongodb.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'mongodb.eu-central-1.aliyuncs.com',
            'ap-south-1' => 'mongodb.ap-south-1.aliyuncs.com',
            'me-east-1' => 'mongodb.me-east-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'mongodb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'mongodb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'mongodb.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-north-2-gov-1' => 'mongodb.cn-north-2-gov-1.aliyuncs.com',
            'ap-northeast-2-pop' => 'mongodb.aliyuncs.com',
            'cn-beijing-finance-1' => 'mongodb.aliyuncs.com',
            'cn-beijing-finance-pop' => 'mongodb.aliyuncs.com',
            'cn-beijing-gov-1' => 'mongodb.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'mongodb.aliyuncs.com',
            'cn-edge-1' => 'mongodb.aliyuncs.com',
            'cn-fujian' => 'mongodb.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-test-306' => 'mongodb.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'mongodb.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'mongodb.aliyuncs.com',
            'cn-qingdao-nebula' => 'mongodb.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'mongodb.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'mongodb.aliyuncs.com',
            'cn-shanghai-inner' => 'mongodb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mongodb.aliyuncs.com',
            'cn-shenzhen-inner' => 'mongodb.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'mongodb.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'mongodb.aliyuncs.com',
            'cn-wuhan' => 'mongodb.aliyuncs.com',
            'cn-yushanfang' => 'mongodb.aliyuncs.com',
            'cn-zhangbei' => 'mongodb.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'mongodb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'mongodb.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'mongodb.aliyuncs.com',
            'eu-west-1-oxs' => 'mongodb.aliyuncs.com',
            'rus-west-1-pop' => 'mongodb.aliyuncs.com',
            'na-south-1' => 'mongodb.na-south-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Applies for an internal endpoint for a shard or Configserver node in an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description This operation is applicable only to sharded cluster instances. For more information, see [Apply for an endpoint for a shard or Configserver node](https://help.aliyun.com/document_detail/134037.html).
     * >  The allocated endpoints can be used only for internal access. To gain Internet access, you must call the [AllocatePublicNetworkAddress](https://help.aliyun.com/document_detail/67602.html) operation to apply for public endpoints.
     *  *
     * @param AllocateNodePrivateNetworkAddressRequest $request AllocateNodePrivateNetworkAddressRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateNodePrivateNetworkAddressResponse AllocateNodePrivateNetworkAddressResponse
     */
    public function allocateNodePrivateNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
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
            'action' => 'AllocateNodePrivateNetworkAddress',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateNodePrivateNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies for an internal endpoint for a shard or Configserver node in an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description This operation is applicable only to sharded cluster instances. For more information, see [Apply for an endpoint for a shard or Configserver node](https://help.aliyun.com/document_detail/134037.html).
     * >  The allocated endpoints can be used only for internal access. To gain Internet access, you must call the [AllocatePublicNetworkAddress](https://help.aliyun.com/document_detail/67602.html) operation to apply for public endpoints.
     *  *
     * @param AllocateNodePrivateNetworkAddressRequest $request AllocateNodePrivateNetworkAddressRequest
     *
     * @return AllocateNodePrivateNetworkAddressResponse AllocateNodePrivateNetworkAddressResponse
     */
    public function allocateNodePrivateNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateNodePrivateNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Allocates a public endpoint to an instance.
     *  *
     * @param AllocatePublicNetworkAddressRequest $request AllocatePublicNetworkAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocatePublicNetworkAddressResponse AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddressWithOptions($request, $runtime)
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
            'action' => 'AllocatePublicNetworkAddress',
            'version' => '2015-12-01',
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
     * @summary Allocates a public endpoint to an instance.
     *  *
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
     * @summary You can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *  *
     * @description Before you enable Transparent Data Encryption (TDE) by calling the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation, you can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *  *
     * @param CheckCloudResourceAuthorizedRequest $request CheckCloudResourceAuthorizedRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCloudResourceAuthorizedResponse CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->targetRegionId)) {
            $query['TargetRegionId'] = $request->targetRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCloudResourceAuthorized',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCloudResourceAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *  *
     * @description Before you enable Transparent Data Encryption (TDE) by calling the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation, you can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *  *
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
     * @summary Queries whether the data of an ApsaraDB for MongoDB instance can be restored.
     *  *
     * @description This operation is applicable to replica set instances and sharded cluster instances.
     * >  After you call this operation to confirm that the data of the instance can be restored, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore data to a new instance.
     *  *
     * @param CheckRecoveryConditionRequest $request CheckRecoveryConditionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckRecoveryConditionResponse CheckRecoveryConditionResponse
     */
    public function checkRecoveryConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->databaseNames)) {
            $query['DatabaseNames'] = $request->databaseNames;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->sourceDBInstance)) {
            $query['SourceDBInstance'] = $request->sourceDBInstance;
        }
        if (!Utils::isUnset($request->sourceDBInstance)) {
            $query['SourceDBInstance'] = $request->sourceDBInstance;
        }
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckRecoveryCondition',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckRecoveryConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the data of an ApsaraDB for MongoDB instance can be restored.
     *  *
     * @description This operation is applicable to replica set instances and sharded cluster instances.
     * >  After you call this operation to confirm that the data of the instance can be restored, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore data to a new instance.
     *  *
     * @param CheckRecoveryConditionRequest $request CheckRecoveryConditionRequest
     *
     * @return CheckRecoveryConditionResponse CheckRecoveryConditionResponse
     */
    public function checkRecoveryCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRecoveryConditionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a service-linked role is created.
     *  *
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceLinkedRole',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether a service-linked role is created.
     *  *
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an account that is granted read-only permissions for shard nodes in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *  *
     * @description *   You can create an account for shard nodes only in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     * *   The account is granted read-only permissions.
     *  *
     * @param CreateAccountRequest $request CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
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
            'action' => 'CreateAccount',
            'version' => '2015-12-01',
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
     * @summary Creates an account that is granted read-only permissions for shard nodes in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *  *
     * @description *   You can create an account for shard nodes only in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     * *   The account is granted read-only permissions.
     *  *
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
     * @summary Creates a backup set for an ApsaraDB for MongoDB instance.
     *  *
     * @description When you call this operation, the instance must be in the Running state.
     *  *
     * @param CreateBackupRequest $request CreateBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupMethod)) {
            $query['BackupMethod'] = $request->backupMethod;
        }
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
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
            'action' => 'CreateBackup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup set for an ApsaraDB for MongoDB instance.
     *  *
     * @description When you call this operation, the instance must be in the Running state.
     *  *
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
     * @summary Creates or clones an ApsaraDB for MongoDB replica set instance.
     *  *
     * @description Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * For more information about the instance types of ApsaraDB for MongoDB instances, see [Instance types](https://www.alibabacloud.com/help/en/mongodb/product-overview/instance-types-1).
     * To create sharded cluster instances, you can call the [CreateShardingDBInstance](~~CreateShardingDBInstance~~) operation.
     *  *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
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
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceStorage)) {
            $query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }
        if (!Utils::isUnset($request->databaseNames)) {
            $query['DatabaseNames'] = $request->databaseNames;
        }
        if (!Utils::isUnset($request->encrypted)) {
            $query['Encrypted'] = $request->encrypted;
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
        if (!Utils::isUnset($request->globalSecurityGroupIds)) {
            $query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }
        if (!Utils::isUnset($request->hiddenZoneId)) {
            $query['HiddenZoneId'] = $request->hiddenZoneId;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->provisionedIops)) {
            $query['ProvisionedIops'] = $request->provisionedIops;
        }
        if (!Utils::isUnset($request->readonlyReplicas)) {
            $query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
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
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->secondaryZoneId)) {
            $query['SecondaryZoneId'] = $request->secondaryZoneId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->srcDBInstanceId)) {
            $query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        if (!Utils::isUnset($request->storageEngine)) {
            $query['StorageEngine'] = $request->storageEngine;
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
            'action' => 'CreateDBInstance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or clones an ApsaraDB for MongoDB replica set instance.
     *  *
     * @description Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * For more information about the instance types of ApsaraDB for MongoDB instances, see [Instance types](https://www.alibabacloud.com/help/en/mongodb/product-overview/instance-types-1).
     * To create sharded cluster instances, you can call the [CreateShardingDBInstance](~~CreateShardingDBInstance~~) operation.
     *  *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a global IP whitelist template.
     *  *
     * @param CreateGlobalSecurityIPGroupRequest $request CreateGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGlobalSecurityIPGroupResponse CreateGlobalSecurityIPGroupResponse
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
            'action' => 'CreateGlobalSecurityIPGroup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a global IP whitelist template.
     *  *
     * @param CreateGlobalSecurityIPGroupRequest $request CreateGlobalSecurityIPGroupRequest
     *
     * @return CreateGlobalSecurityIPGroupResponse CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a shard or mongos node to an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to sharded cluster instances.
     *  *
     * @param CreateNodeRequest $request CreateNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeResponse CreateNodeResponse
     */
    public function createNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->nodeClass)) {
            $query['NodeClass'] = $request->nodeClass;
        }
        if (!Utils::isUnset($request->nodeStorage)) {
            $query['NodeStorage'] = $request->nodeStorage;
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
        if (!Utils::isUnset($request->readonlyReplicas)) {
            $query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->shardDirect)) {
            $query['ShardDirect'] = $request->shardDirect;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNode',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a shard or mongos node to an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to sharded cluster instances.
     *  *
     * @param CreateNodeRequest $request CreateNodeRequest
     *
     * @return CreateNodeResponse CreateNodeResponse
     */
    public function createNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Batch adds mongos or shard nodes for a sharded cluster instance.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation is applicable only to sharded cluster instances.
     *  *
     * @param CreateNodeBatchRequest $request CreateNodeBatchRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeBatchResponse CreateNodeBatchResponse
     */
    public function createNodeBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->nodesInfo)) {
            $query['NodesInfo'] = $request->nodesInfo;
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
        if (!Utils::isUnset($request->shardDirect)) {
            $query['ShardDirect'] = $request->shardDirect;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNodeBatch',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNodeBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Batch adds mongos or shard nodes for a sharded cluster instance.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation is applicable only to sharded cluster instances.
     *  *
     * @param CreateNodeBatchRequest $request CreateNodeBatchRequest
     *
     * @return CreateNodeBatchResponse CreateNodeBatchResponse
     */
    public function createNodeBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or clones an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description *   Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * *   For more information about the instance types of ApsaraDB for MongoDB, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * *   To create standalone instances and replica set instances, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation.
     *  *
     * @param CreateShardingDBInstanceRequest $request CreateShardingDBInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateShardingDBInstanceResponse CreateShardingDBInstanceResponse
     */
    public function createShardingDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configServer)) {
            $query['ConfigServer'] = $request->configServer;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->encrypted)) {
            $query['Encrypted'] = $request->encrypted;
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
        if (!Utils::isUnset($request->globalSecurityGroupIds)) {
            $query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }
        if (!Utils::isUnset($request->hiddenZoneId)) {
            $query['HiddenZoneId'] = $request->hiddenZoneId;
        }
        if (!Utils::isUnset($request->mongos)) {
            $query['Mongos'] = $request->mongos;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->provisionedIops)) {
            $query['ProvisionedIops'] = $request->provisionedIops;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaSet)) {
            $query['ReplicaSet'] = $request->replicaSet;
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
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->secondaryZoneId)) {
            $query['SecondaryZoneId'] = $request->secondaryZoneId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->srcDBInstanceId)) {
            $query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        if (!Utils::isUnset($request->storageEngine)) {
            $query['StorageEngine'] = $request->storageEngine;
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
            'action' => 'CreateShardingDBInstance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateShardingDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or clones an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description *   Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * *   For more information about the instance types of ApsaraDB for MongoDB, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * *   To create standalone instances and replica set instances, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation.
     *  *
     * @param CreateShardingDBInstanceRequest $request CreateShardingDBInstanceRequest
     *
     * @return CreateShardingDBInstanceResponse CreateShardingDBInstanceResponse
     */
    public function createShardingDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShardingDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements
     * *   The instance is in the Running state.
     * *   The billing method of the instance is pay-as-you-go.
     * > After an instance is released, all data in the instance is cleared and cannot be recovered. Proceed with caution.
     *  *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
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
            'action' => 'DeleteDBInstance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements
     * *   The instance is in the Running state.
     * *   The billing method of the instance is pay-as-you-go.
     * > After an instance is released, all data in the instance is cleared and cannot be recovered. Proceed with caution.
     *  *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a global IP whitelist template.
     *  *
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
            'action' => 'DeleteGlobalSecurityIPGroup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a global IP whitelist template.
     *  *
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
     * @summary Deletes a shard or mongos node from an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a sharded cluster instance.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The number of the shard or mongos nodes in the instance is greater than two.
     *  *
     * @param DeleteNodeRequest $request DeleteNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNodeResponse DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action' => 'DeleteNode',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a shard or mongos node from an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a sharded cluster instance.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The number of the shard or mongos nodes in the instance is greater than two.
     *  *
     * @param DeleteNodeRequest $request DeleteNodeRequest
     *
     * @return DeleteNodeResponse DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database accounts of an ApsaraDB for MongoDB instance.
     *  *
     * @description >  This operation can be used to query only the information of the root account.
     *  *
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2015-12-01',
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
     * @summary Queries the database accounts of an ApsaraDB for MongoDB instance.
     *  *
     * @description >  This operation can be used to query only the information of the root account.
     *  *
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
     * @param DescribeActiveOperationMaintenanceConfigRequest $request DescribeActiveOperationMaintenanceConfigRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationMaintenanceConfigResponse DescribeActiveOperationMaintenanceConfigResponse
     */
    public function describeActiveOperationMaintenanceConfigWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationMaintenanceConfig',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationMaintenanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActiveOperationMaintenanceConfigRequest $request DescribeActiveOperationMaintenanceConfigRequest
     *
     * @return DescribeActiveOperationMaintenanceConfigResponse DescribeActiveOperationMaintenanceConfigResponse
     */
    public function describeActiveOperationMaintenanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationMaintenanceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about  tasks of an ApsaraDB for MongoDB instance.
     *  *
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTask',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about  tasks of an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Queries the number of operation and maintenance tasks on an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeActiveOperationTaskCountRequest $request DescribeActiveOperationTaskCountRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTaskCountResponse DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTaskCount',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of operation and maintenance tasks on an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeActiveOperationTaskCountRequest $request DescribeActiveOperationTaskCountRequest
     *
     * @return DescribeActiveOperationTaskCountResponse DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveOperationTaskRegionRequest $request DescribeActiveOperationTaskRegionRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTaskRegionResponse DescribeActiveOperationTaskRegionResponse
     */
    public function describeActiveOperationTaskRegionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTaskRegion',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTaskRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActiveOperationTaskRegionRequest $request DescribeActiveOperationTaskRegionRequest
     *
     * @return DescribeActiveOperationTaskRegionResponse DescribeActiveOperationTaskRegionResponse
     */
    public function describeActiveOperationTaskRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types of Operation and Maintenance tasks and the number of tasks of each type for an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is no longer updated and will be unavailable.
     *  *
     * @param DescribeActiveOperationTaskTypeRequest $request DescribeActiveOperationTaskTypeRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTaskTypeResponse DescribeActiveOperationTaskTypeResponse
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
            'action' => 'DescribeActiveOperationTaskType',
            'version' => '2015-12-01',
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
     * @summary Queries the types of Operation and Maintenance tasks and the number of tasks of each type for an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is no longer updated and will be unavailable.
     *  *
     * @param DescribeActiveOperationTaskTypeRequest $request DescribeActiveOperationTaskTypeRequest
     *
     * @return DescribeActiveOperationTaskTypeResponse DescribeActiveOperationTaskTypeResponse
     */
    public function describeActiveOperationTaskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of operation and maintenance tasks initiated for an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeActiveOperationTasksRequest $request DescribeActiveOperationTasksRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTasksResponse DescribeActiveOperationTasksResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTasks',
            'version' => '2015-12-01',
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
     * @summary Queries a list of operation and maintenance tasks initiated for an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeActiveOperationTasksRequest $request DescribeActiveOperationTasksRequest
     *
     * @return DescribeActiveOperationTasksResponse DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types of entries in the audit log collected for an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeAuditLogFilterRequest $request DescribeAuditLogFilterRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditLogFilterResponse DescribeAuditLogFilterResponse
     */
    public function describeAuditLogFilterWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditLogFilter',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditLogFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the types of entries in the audit log collected for an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeAuditLogFilterRequest $request DescribeAuditLogFilterRequest
     *
     * @return DescribeAuditLogFilterResponse DescribeAuditLogFilterResponse
     */
    public function describeAuditLogFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the audit log feature is enabled for an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeAuditPolicyRequest $request DescribeAuditPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditPolicyResponse DescribeAuditPolicyResponse
     */
    public function describeAuditPolicyWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditPolicy',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the audit log feature is enabled for an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeAuditPolicyRequest $request DescribeAuditPolicyRequest
     *
     * @return DescribeAuditPolicyResponse DescribeAuditPolicyResponse
     */
    public function describeAuditPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the audit logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   When you call this operation, ensure that the audit log feature of the instance is enabled. Otherwise, the operation returns an empty audit log.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeAuditRecordsRequest $request DescribeAuditRecordsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditRecordsResponse DescribeAuditRecordsResponse
     */
    public function describeAuditRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->form)) {
            $query['Form'] = $request->form;
        }
        if (!Utils::isUnset($request->logicalOperator)) {
            $query['LogicalOperator'] = $request->logicalOperator;
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
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
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
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditRecords',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the audit logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   When you call this operation, ensure that the audit log feature of the instance is enabled. Otherwise, the operation returns an empty audit log.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
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
     * @summary Queries a list of the zones that are supported by an ApsaraDB for MongoDB instance.
     *  *
     * @description Queries the zones in which an ApsaraDB for MongoDB instance can be deployed under specified purchase conditions. The region ID is required in the purchase condition.
     *  *
     * @param DescribeAvailabilityZonesRequest $request DescribeAvailabilityZonesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailabilityZonesResponse DescribeAvailabilityZonesResponse
     */
    public function describeAvailabilityZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->excludeSecondaryZoneId)) {
            $query['ExcludeSecondaryZoneId'] = $request->excludeSecondaryZoneId;
        }
        if (!Utils::isUnset($request->excludeZoneId)) {
            $query['ExcludeZoneId'] = $request->excludeZoneId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->mongoType)) {
            $query['MongoType'] = $request->mongoType;
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
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
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
        if (!Utils::isUnset($request->storageSupport)) {
            $query['StorageSupport'] = $request->storageSupport;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailabilityZones',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailabilityZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of the zones that are supported by an ApsaraDB for MongoDB instance.
     *  *
     * @description Queries the zones in which an ApsaraDB for MongoDB instance can be deployed under specified purchase conditions. The region ID is required in the purchase condition.
     *  *
     * @param DescribeAvailabilityZonesRequest $request DescribeAvailabilityZonesRequest
     *
     * @return DescribeAvailabilityZonesResponse DescribeAvailabilityZonesResponse
     */
    public function describeAvailabilityZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailabilityZonesWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the engine versions to which an ApsaraDB for MongoDB instance can be upgraded.
     *  *
     * @param DescribeAvailableEngineVersionRequest $request DescribeAvailableEngineVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableEngineVersionResponse DescribeAvailableEngineVersionResponse
     */
    public function describeAvailableEngineVersionWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableEngineVersion',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the engine versions to which an ApsaraDB for MongoDB instance can be upgraded.
     *  *
     * @param DescribeAvailableEngineVersionRequest $request DescribeAvailableEngineVersionRequest
     *
     * @return DescribeAvailableEngineVersionResponse DescribeAvailableEngineVersionResponse
     */
    public function describeAvailableEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableEngineVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available resources in the specified zone.
     *  *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
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
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
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
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableResource',
            'version' => '2015-12-01',
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
     * @summary Queries the available resources in the specified zone.
     *  *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases at a specified time or the databases in a specified backup set before you restore a database for an ApsaraDB for MongoDB instance.
     *  *
     * @description You can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore a database for an ApsaraDB for MongoDB instance. For more information, see [Restore one database of an ApsaraDB for MongoDB instance](https://help.aliyun.com/document_detail/112274.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance was created after March 26, 2019.
     * *   The instance is located in the China (Qingdao), China (Beijing), China (Zhangjiakou), China (Hohhot), China (Hangzhou), China (Shanghai), China (Shenzhen), or Singapore region. Other regions are not supported.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4, MongoDB 4.0, or MongoDB 4.2. In addition, the instance uses local disks to store data.
     * *   The storage engine of the instance is WiredTiger.
     *  *
     * @param DescribeBackupDBsRequest $request DescribeBackupDBsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupDBsResponse DescribeBackupDBsResponse
     */
    public function describeBackupDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
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
        if (!Utils::isUnset($request->sourceDBInstance)) {
            $query['SourceDBInstance'] = $request->sourceDBInstance;
        }
        if (!Utils::isUnset($request->sourceDBInstance)) {
            $query['SourceDBInstance'] = $request->sourceDBInstance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupDBs',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupDBsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the databases at a specified time or the databases in a specified backup set before you restore a database for an ApsaraDB for MongoDB instance.
     *  *
     * @description You can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore a database for an ApsaraDB for MongoDB instance. For more information, see [Restore one database of an ApsaraDB for MongoDB instance](https://help.aliyun.com/document_detail/112274.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance was created after March 26, 2019.
     * *   The instance is located in the China (Qingdao), China (Beijing), China (Zhangjiakou), China (Hohhot), China (Hangzhou), China (Shanghai), China (Shenzhen), or Singapore region. Other regions are not supported.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4, MongoDB 4.0, or MongoDB 4.2. In addition, the instance uses local disks to store data.
     * *   The storage engine of the instance is WiredTiger.
     *  *
     * @param DescribeBackupDBsRequest $request DescribeBackupDBsRequest
     *
     * @return DescribeBackupDBsResponse DescribeBackupDBsResponse
     */
    public function describeBackupDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDBsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup policy of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2015-12-01',
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
     * @summary Queries the backup policy of an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Queries the storage used for backup in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks. Note that you are charged only for the backup-used storage of each shard in a sharded cluster instance. You can call this operation only to query the storage used by a single shard in the instance for backup.
     *  *
     * @param DescribeBackupStorageRequest $request DescribeBackupStorageRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupStorageResponse DescribeBackupStorageResponse
     */
    public function describeBackupStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupStorage',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage used for backup in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks. Note that you are charged only for the backup-used storage of each shard in a sharded cluster instance. You can call this operation only to query the storage used by a single shard in the instance for backup.
     *  *
     * @param DescribeBackupStorageRequest $request DescribeBackupStorageRequest
     *
     * @return DescribeBackupStorageResponse DescribeBackupStorageResponse
     */
    public function describeBackupStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries backup tasks running in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks.
     *  *
     * @param DescribeBackupTasksRequest $request DescribeBackupTasksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupTasksResponse DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupTasks',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries backup tasks running in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks.
     *  *
     * @param DescribeBackupTasksRequest $request DescribeBackupTasksRequest
     *
     * @return DescribeBackupTasksResponse DescribeBackupTasksResponse
     */
    public function describeBackupTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup sets of an ApsaraDB for MongoDB instance.
     *  *
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2015-12-01',
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
     * @summary Queries the backup sets of an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Queries the backup sets of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *  *
     * @description For a sharded cluster instance that is created before October 19, 2023 and uses cloud disks, you must call the [TransferClusterBackup](https://help.aliyun.com/document_detail/2587931.html) operation to switch the instance from the shard backup mode to the cluster backup mode before you call the DescribeClusterBackups operation.
     * By default, cloud disk-based sharded cluster instances that are created after October 19, 2023 are in the cluster backup mode.
     *  *
     * @param DescribeClusterBackupsRequest $request DescribeClusterBackupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterBackupsResponse DescribeClusterBackupsResponse
     */
    public function describeClusterBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isOnlyGetClusterBackUp)) {
            $query['IsOnlyGetClusterBackUp'] = $request->isOnlyGetClusterBackUp;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterBackups',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the backup sets of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *  *
     * @description For a sharded cluster instance that is created before October 19, 2023 and uses cloud disks, you must call the [TransferClusterBackup](https://help.aliyun.com/document_detail/2587931.html) operation to switch the instance from the shard backup mode to the cluster backup mode before you call the DescribeClusterBackups operation.
     * By default, cloud disk-based sharded cluster instances that are created after October 19, 2023 are in the cluster backup mode.
     *  *
     * @param DescribeClusterBackupsRequest $request DescribeClusterBackupsRequest
     *
     * @return DescribeClusterBackupsResponse DescribeClusterBackupsResponse
     */
    public function describeClusterBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBackupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the time range to which you can restore the data of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *  *
     * @description *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. The DescribeClusterRecoverTime operation is applicable only to instances that are switched to the cluster backup mode or instances that are created on or after October 19, 2023.
     *  *
     * @param DescribeClusterRecoverTimeRequest $request DescribeClusterRecoverTimeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterRecoverTimeResponse DescribeClusterRecoverTimeResponse
     */
    public function describeClusterRecoverTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterRecoverTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterRecoverTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the time range to which you can restore the data of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *  *
     * @description *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. The DescribeClusterRecoverTime operation is applicable only to instances that are switched to the cluster backup mode or instances that are created on or after October 19, 2023.
     *  *
     * @param DescribeClusterRecoverTimeRequest $request DescribeClusterRecoverTimeRequest
     *
     * @return DescribeClusterRecoverTimeResponse DescribeClusterRecoverTimeResponse
     */
    public function describeClusterRecoverTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterRecoverTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->isDelete)) {
            $query['IsDelete'] = $request->isDelete;
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
            'action' => 'DescribeDBInstanceAttribute',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a key for an ApsaraDB for MongoDB instance.
     *  *
     * @description When you call the DescribeDBInstanceEncryptionKey operation, the instance must have transparent data encryption (TDE) enabled in BYOK mode. You can call the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation to enable TDE.
     *  *
     * @param DescribeDBInstanceEncryptionKeyRequest $request DescribeDBInstanceEncryptionKeyRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceEncryptionKeyResponse DescribeDBInstanceEncryptionKeyResponse
     */
    public function describeDBInstanceEncryptionKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
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
            'action' => 'DescribeDBInstanceEncryptionKey',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceEncryptionKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a key for an ApsaraDB for MongoDB instance.
     *  *
     * @description When you call the DescribeDBInstanceEncryptionKey operation, the instance must have transparent data encryption (TDE) enabled in BYOK mode. You can call the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation to enable TDE.
     *  *
     * @param DescribeDBInstanceEncryptionKeyRequest $request DescribeDBInstanceEncryptionKeyRequest
     *
     * @return DescribeDBInstanceEncryptionKeyResponse DescribeDBInstanceEncryptionKeyResponse
     */
    public function describeDBInstanceEncryptionKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceEncryptionKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the collection frequency of monitoring data for an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeDBInstanceMonitorRequest $request DescribeDBInstanceMonitorRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceMonitorResponse DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitorWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceMonitor',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the collection frequency of monitoring data for an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeDBInstanceMonitorRequest $request DescribeDBInstanceMonitorRequest
     *
     * @return DescribeDBInstanceMonitorResponse DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the performance data of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeDBInstancePerformanceRequest $request DescribeDBInstancePerformanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancePerformanceResponse DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
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
        if (!Utils::isUnset($request->replicaSetRole)) {
            $query['ReplicaSetRole'] = $request->replicaSetRole;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstancePerformance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the performance data of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeDBInstancePerformanceRequest $request DescribeDBInstancePerformanceRequest
     *
     * @return DescribeDBInstancePerformanceResponse DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Secure Sockets Layer (SSL) settings of an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the Running state.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4 or later.
     *  *
     * @param DescribeDBInstanceSSLRequest $request DescribeDBInstanceSSLRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceSSLResponse DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceSSL',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Secure Sockets Layer (SSL) settings of an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the Running state.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4 or later.
     *  *
     * @param DescribeDBInstanceSSLRequest $request DescribeDBInstanceSSLRequest
     *
     * @return DescribeDBInstanceSSLResponse DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @summary 查看规格信息详情
     *  *
     * @param DescribeDBInstanceSpecInfoRequest $request DescribeDBInstanceSpecInfoRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceSpecInfoResponse DescribeDBInstanceSpecInfoResponse
     */
    public function describeDBInstanceSpecInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
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
            'action' => 'DescribeDBInstanceSpecInfo',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看规格信息详情
     *  *
     * @param DescribeDBInstanceSpecInfoRequest $request DescribeDBInstanceSpecInfoRequest
     *
     * @return DescribeDBInstanceSpecInfoResponse DescribeDBInstanceSpecInfoResponse
     */
    public function describeDBInstanceSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSpecInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the primary/secondary switching logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The instance uses local physical disks to store data.
     *  *
     * @param DescribeDBInstanceSwitchLogRequest $request DescribeDBInstanceSwitchLogRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceSwitchLogResponse DescribeDBInstanceSwitchLogResponse
     */
    public function describeDBInstanceSwitchLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceSwitchLog',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceSwitchLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the primary/secondary switching logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The instance uses local physical disks to store data.
     *  *
     * @param DescribeDBInstanceSwitchLogRequest $request DescribeDBInstanceSwitchLogRequest
     *
     * @return DescribeDBInstanceSwitchLogResponse DescribeDBInstanceSwitchLogResponse
     */
    public function describeDBInstanceSwitchLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSwitchLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Transparent Data Encryption (TDE) is enabled for an ApsaraDB for MongoDB instance.
     *  *
     * @description >  For more information about TDE, see [TDE](https://help.aliyun.com/document_detail/131048.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The storage engine of the instance is WiredTiger.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *  *
     * @param DescribeDBInstanceTDEInfoRequest $request DescribeDBInstanceTDEInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceTDEInfoResponse DescribeDBInstanceTDEInfoResponse
     */
    public function describeDBInstanceTDEInfoWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceTDEInfo',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceTDEInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether Transparent Data Encryption (TDE) is enabled for an ApsaraDB for MongoDB instance.
     *  *
     * @description >  For more information about TDE, see [TDE](https://help.aliyun.com/document_detail/131048.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The storage engine of the instance is WiredTiger.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *  *
     * @param DescribeDBInstanceTDEInfoRequest $request DescribeDBInstanceTDEInfoRequest
     *
     * @return DescribeDBInstanceTDEInfoResponse DescribeDBInstanceTDEInfoResponse
     */
    public function describeDBInstanceTDEInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of ApsaraDB for MongoDB instances.
     *  *
     * @description The list of replica set and standalone instances is displayed when the **DBInstanceType** parameter uses the default value **replicate**. To query a list of sharded cluster instances, you must set the **DBInstanceType** parameter to **sharding**.
     *  *
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->connectionDomain)) {
            $query['ConnectionDomain'] = $request->connectionDomain;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceStatus)) {
            $query['DBInstanceStatus'] = $request->DBInstanceStatus;
        }
        if (!Utils::isUnset($request->DBInstanceType)) {
            $query['DBInstanceType'] = $request->DBInstanceType;
        }
        if (!Utils::isUnset($request->DBNodeType)) {
            $query['DBNodeType'] = $request->DBNodeType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
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
            'action' => 'DescribeDBInstances',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of ApsaraDB for MongoDB instances.
     *  *
     * @description The list of replica set and standalone instances is displayed when the **DBInstanceType** parameter uses the default value **replicate**. To query a list of sharded cluster instances, you must set the **DBInstanceType** parameter to **sharding**.
     *  *
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the overview information of one or more ApsaraDB for MongoDB instances.
     *  *
     * @description *   If you do not specify an instance when you call this operation, the overview information of all instances in a specific region within this account is returned.
     * *   Paged query is disabled for this operation.
     *  *
     * @param DescribeDBInstancesOverviewRequest $request DescribeDBInstancesOverviewRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesOverviewResponse DescribeDBInstancesOverviewResponse
     */
    public function describeDBInstancesOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
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
        if (!Utils::isUnset($request->showTags)) {
            $query['ShowTags'] = $request->showTags;
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
            'action' => 'DescribeDBInstancesOverview',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancesOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the overview information of one or more ApsaraDB for MongoDB instances.
     *  *
     * @description *   If you do not specify an instance when you call this operation, the overview information of all instances in a specific region within this account is returned.
     * *   Paged query is disabled for this operation.
     *  *
     * @param DescribeDBInstancesOverviewRequest $request DescribeDBInstancesOverviewRequest
     *
     * @return DescribeDBInstancesOverviewResponse DescribeDBInstancesOverviewResponse
     */
    public function describeDBInstancesOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesOverviewWithOptions($request, $runtime);
    }

    /**
     * @summary Queries entries in error logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeErrorLogRecordsRequest $request DescribeErrorLogRecordsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeErrorLogRecordsResponse DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->logicalOperator)) {
            $query['LogicalOperator'] = $request->logicalOperator;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeErrorLogRecords',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeErrorLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries entries in error logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeErrorLogRecordsRequest $request DescribeErrorLogRecordsRequest
     *
     * @return DescribeErrorLogRecordsResponse DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the global IP whitelist template of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeGlobalSecurityIPGroupRequest $request DescribeGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalSecurityIPGroupResponse DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalSecurityIPGroup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the global IP whitelist template of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeGlobalSecurityIPGroupRequest $request DescribeGlobalSecurityIPGroupRequest
     *
     * @return DescribeGlobalSecurityIPGroupResponse DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the global IP whitelist templates associated with an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request DescribeGlobalSecurityIPGroupRelationRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalSecurityIPGroupRelation',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the global IP whitelist templates associated with an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request DescribeGlobalSecurityIPGroupRelationRequest
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tasks in the task center.
     *  *
     * @param DescribeHistoryTasksRequest $request DescribeHistoryTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHistoryTasksResponse DescribeHistoryTasksResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'DescribeHistoryTasks',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tasks in the task center.
     *  *
     * @param DescribeHistoryTasksRequest $request DescribeHistoryTasksRequest
     *
     * @return DescribeHistoryTasksResponse DescribeHistoryTasksResponse
     */
    public function describeHistoryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the overview of a task in the task center.
     *  *
     * @param DescribeHistoryTasksStatRequest $request DescribeHistoryTasksStatRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHistoryTasksStatResponse DescribeHistoryTasksStatResponse
     */
    public function describeHistoryTasksStatWithOptions($request, $runtime)
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
            'action' => 'DescribeHistoryTasksStat',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryTasksStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the overview of a task in the task center.
     *  *
     * @param DescribeHistoryTasksStatRequest $request DescribeHistoryTasksStatRequest
     *
     * @return DescribeHistoryTasksStatResponse DescribeHistoryTasksStatResponse
     */
    public function describeHistoryTasksStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksStatWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query whether auto-renewal is enabled for an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to subscription instances.
     *  *
     * @param DescribeInstanceAutoRenewalAttributeRequest $request DescribeInstanceAutoRenewalAttributeRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceType)) {
            $query['DBInstanceType'] = $request->DBInstanceType;
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
            'action' => 'DescribeInstanceAutoRenewalAttribute',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAutoRenewalAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query whether auto-renewal is enabled for an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to subscription instances.
     *  *
     * @param DescribeInstanceAutoRenewalAttributeRequest $request DescribeInstanceAutoRenewalAttributeRequest
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the time required to restore the data of an ApsaraDB for MongoDB replica set instance that uses cloud disks.
     *  *
     * @param DescribeInstanceRecoverTimeRequest $request DescribeInstanceRecoverTimeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceRecoverTimeResponse DescribeInstanceRecoverTimeResponse
     */
    public function describeInstanceRecoverTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceRecoverTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRecoverTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the time required to restore the data of an ApsaraDB for MongoDB replica set instance that uses cloud disks.
     *  *
     * @param DescribeInstanceRecoverTimeRequest $request DescribeInstanceRecoverTimeRequest
     *
     * @return DescribeInstanceRecoverTimeResponse DescribeInstanceRecoverTimeResponse
     */
    public function describeInstanceRecoverTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRecoverTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the release notes of the minor versions of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeKernelReleaseNotesRequest $request DescribeKernelReleaseNotesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKernelReleaseNotesResponse DescribeKernelReleaseNotesResponse
     */
    public function describeKernelReleaseNotesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->kernelVersion)) {
            $query['KernelVersion'] = $request->kernelVersion;
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
            'action' => 'DescribeKernelReleaseNotes',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKernelReleaseNotesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the release notes of the minor versions of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeKernelReleaseNotesRequest $request DescribeKernelReleaseNotesRequest
     *
     * @return DescribeKernelReleaseNotesResponse DescribeKernelReleaseNotesResponse
     */
    public function describeKernelReleaseNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKernelReleaseNotesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Key Management Service (KMS) keys that are available for disk encryption.
     *  *
     * @description Queried keys are available only for disk encryption.
     *  *
     * @param DescribeKmsKeysRequest $request DescribeKmsKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKmsKeysResponse DescribeKmsKeysResponse
     */
    public function describeKmsKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action' => 'DescribeKmsKeys',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKmsKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Key Management Service (KMS) keys that are available for disk encryption.
     *  *
     * @description Queried keys are available only for disk encryption.
     *  *
     * @param DescribeKmsKeysRequest $request DescribeKmsKeysRequest
     *
     * @return DescribeKmsKeysResponse DescribeKmsKeysResponse
     */
    public function describeKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logging configurations of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * This operation depends on the audit log feature of ApsaraDB for MongoDB. You can enable the audit log feature based on your business requirements. For more information, see [Enable the audit log feature](https://help.aliyun.com/document_detail/59903.html).
     * *   Starting from January 6, 2022, the official edition of the audit log feature has been launched in all regions, and new applications for the free trial edition have ended. For more information, see [Notice on official launch of the pay-as-you-go audit log feature and no more application for the free trial edition](https://help.aliyun.com/document_detail/377480.html)
     * *   You are charged for the official edition of the audit log feature based on the storage capacity that is consumed by audit logs and the retention period of the audit logs. For more information, see [Pricing of ApsaraDB for MongoDB instances](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     *  *
     * @param DescribeMongoDBLogConfigRequest $request DescribeMongoDBLogConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMongoDBLogConfigResponse DescribeMongoDBLogConfigResponse
     */
    public function describeMongoDBLogConfigWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMongoDBLogConfig',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMongoDBLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logging configurations of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * This operation depends on the audit log feature of ApsaraDB for MongoDB. You can enable the audit log feature based on your business requirements. For more information, see [Enable the audit log feature](https://help.aliyun.com/document_detail/59903.html).
     * *   Starting from January 6, 2022, the official edition of the audit log feature has been launched in all regions, and new applications for the free trial edition have ended. For more information, see [Notice on official launch of the pay-as-you-go audit log feature and no more application for the free trial edition](https://help.aliyun.com/document_detail/377480.html)
     * *   You are charged for the official edition of the audit log feature based on the storage capacity that is consumed by audit logs and the retention period of the audit logs. For more information, see [Pricing of ApsaraDB for MongoDB instances](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     *  *
     * @param DescribeMongoDBLogConfigRequest $request DescribeMongoDBLogConfigRequest
     *
     * @return DescribeMongoDBLogConfigResponse DescribeMongoDBLogConfigResponse
     */
    public function describeMongoDBLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMongoDBLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameter modification records of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeParameterModificationHistoryRequest $request DescribeParameterModificationHistoryRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterModificationHistoryResponse DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterModificationHistory',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterModificationHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the parameter modification records of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeParameterModificationHistoryRequest $request DescribeParameterModificationHistoryRequest
     *
     * @return DescribeParameterModificationHistoryResponse DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterModificationHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of default parameter templates for ApsaraDB for MongoDB instances.
     *  *
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterTemplates',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of default parameter templates for ApsaraDB for MongoDB instances.
     *  *
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
     * @summary Queries the parameter settings of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeParametersRequest $request DescribeParametersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParametersResponse DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->extraParam)) {
            $query['ExtraParam'] = $request->extraParam;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameters',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the parameter settings of an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Queries the pricing information of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribePriceRequest $request DescribePriceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceResponse DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->DBInstances)) {
            $query['DBInstances'] = $request->DBInstances;
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
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
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
            'action' => 'DescribePrice',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the pricing information of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribePriceRequest $request DescribePriceRequest
     *
     * @return DescribePriceResponse DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all regions and zones supported for an ApsaraDB for MongoDB instance.
     *  *
     * @description >  To query available regions and zones in which an ApsaraDB for MongoDB instance can be created, call the [DescribeAvailableResource](https://help.aliyun.com/document_detail/149719.html) operation.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
            'action' => 'DescribeRegions',
            'version' => '2015-12-01',
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
     * @summary Queries all regions and zones supported for an ApsaraDB for MongoDB instance.
     *  *
     * @description >  To query available regions and zones in which an ApsaraDB for MongoDB instance can be created, call the [DescribeAvailableResource](https://help.aliyun.com/document_detail/149719.html) operation.
     *  *
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
     * @summary Queries the monthly renewal price of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to subscription instances.
     *  *
     * @param DescribeRenewalPriceRequest $request DescribeRenewalPriceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRenewalPriceResponse DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
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
            'action' => 'DescribeRenewalPrice',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monthly renewal price of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to subscription instances.
     *  *
     * @param DescribeRenewalPriceRequest $request DescribeRenewalPriceRequest
     *
     * @return DescribeRenewalPriceResponse DescribeRenewalPriceResponse
     */
    public function describeRenewalPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewalPriceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the role and connection information of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to replica set instances and standalone instances, but not to sharded cluster instances.
     *  *
     * @param DescribeReplicaSetRoleRequest $request DescribeReplicaSetRoleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeReplicaSetRoleResponse DescribeReplicaSetRoleResponse
     */
    public function describeReplicaSetRoleWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeReplicaSetRole',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeReplicaSetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the role and connection information of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to replica set instances and standalone instances, but not to sharded cluster instances.
     *  *
     * @param DescribeReplicaSetRoleRequest $request DescribeReplicaSetRoleRequest
     *
     * @return DescribeReplicaSetRoleResponse DescribeReplicaSetRoleResponse
     */
    public function describeReplicaSetRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicaSetRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries ApsaraDB for MongoDB instances whose backups are restored within seven days.
     *  *
     * @param DescribeRestoreDBInstanceListRequest $request DescribeRestoreDBInstanceListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRestoreDBInstanceListResponse DescribeRestoreDBInstanceListResponse
     */
    public function describeRestoreDBInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creationTimeAfter)) {
            $query['CreationTimeAfter'] = $request->creationTimeAfter;
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
            'action' => 'DescribeRestoreDBInstanceList',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreDBInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries ApsaraDB for MongoDB instances whose backups are restored within seven days.
     *  *
     * @param DescribeRestoreDBInstanceListRequest $request DescribeRestoreDBInstanceListRequest
     *
     * @return DescribeRestoreDBInstanceListResponse DescribeRestoreDBInstanceListResponse
     */
    public function describeRestoreDBInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreDBInstanceListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the role and zone of each node in an ApsaraDB for MongoDB instance.
     *  *
     * @description > For more information, see [View the zone of a node](https://help.aliyun.com/document_detail/123825.html).
     * This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     *  *
     * @param DescribeRoleZoneInfoRequest $request DescribeRoleZoneInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRoleZoneInfoResponse DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfoWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRoleZoneInfo',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoleZoneInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the role and zone of each node in an ApsaraDB for MongoDB instance.
     *  *
     * @description > For more information, see [View the zone of a node](https://help.aliyun.com/document_detail/123825.html).
     * This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     *  *
     * @param DescribeRoleZoneInfoRequest $request DescribeRoleZoneInfoRequest
     *
     * @return DescribeRoleZoneInfoResponse DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoleZoneInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries entries in operational logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeRunningLogRecordsRequest $request DescribeRunningLogRecordsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRunningLogRecordsResponse DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->logicalOperator)) {
            $query['LogicalOperator'] = $request->logicalOperator;
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
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
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
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRunningLogRecords',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRunningLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries entries in operational logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
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
     * @summary You can call this operation to query ECS security groups that are bound to an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeSecurityGroupConfigurationRequest $request DescribeSecurityGroupConfigurationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityGroupConfigurationResponse DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfigurationWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityGroupConfiguration',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityGroupConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query ECS security groups that are bound to an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeSecurityGroupConfigurationRequest $request DescribeSecurityGroupConfigurationRequest
     *
     * @return DescribeSecurityGroupConfigurationResponse DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the IP whitelists of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeSecurityIpsRequest $request DescribeSecurityIpsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityIpsResponse DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->showHDMIps)) {
            $query['ShowHDMIps'] = $request->showHDMIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIps',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the IP whitelists of an ApsaraDB for MongoDB instance.
     *  *
     * @param DescribeSecurityIpsRequest $request DescribeSecurityIpsRequest
     *
     * @return DescribeSecurityIpsResponse DescribeSecurityIpsResponse
     */
    public function describeSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries connection information about an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description This operation is applicable only to sharded cluster instances.
     *  *
     * @param DescribeShardingNetworkAddressRequest $request DescribeShardingNetworkAddressRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeShardingNetworkAddressResponse DescribeShardingNetworkAddressResponse
     */
    public function describeShardingNetworkAddressWithOptions($request, $runtime)
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
            'action' => 'DescribeShardingNetworkAddress',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeShardingNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries connection information about an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description This operation is applicable only to sharded cluster instances.
     *  *
     * @param DescribeShardingNetworkAddressRequest $request DescribeShardingNetworkAddressRequest
     *
     * @return DescribeShardingNetworkAddressResponse DescribeShardingNetworkAddressResponse
     */
    public function describeShardingNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardingNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of entries in slow query logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->logicalOperator)) {
            $query['LogicalOperator'] = $request->logicalOperator;
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
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogRecords',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of entries in slow query logs of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
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
     * @summary Queries all tags in a specified region.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all tags in a specified region.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of custom keys for an ApsaraDB for MongoDB instance.
     *  *
     * @description You can use the custom key obtained by calling the DescribeUserEncryptionKeyList operation to enable TDE. For more information, see [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html).
     *  *
     * @param DescribeUserEncryptionKeyListRequest $request DescribeUserEncryptionKeyListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserEncryptionKeyListResponse DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->targetRegionId)) {
            $query['TargetRegionId'] = $request->targetRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserEncryptionKeyList',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of custom keys for an ApsaraDB for MongoDB instance.
     *  *
     * @description You can use the custom key obtained by calling the DescribeUserEncryptionKeyList operation to enable TDE. For more information, see [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html).
     *  *
     * @param DescribeUserEncryptionKeyListRequest $request DescribeUserEncryptionKeyListRequest
     *
     * @return DescribeUserEncryptionKeyListResponse DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * @summary Destroys an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set instance or a sharded cluster instance that uses local disks.
     * *   The billing method of the instance is subscription.
     * *   The instance has expired and is in the **Locking** state.
     * **
     * **Warning** Data cannot be restored after the instance is destroyed. Proceed with caution.
     *  *
     * @param DestroyInstanceRequest $request DestroyInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DestroyInstanceResponse DestroyInstanceResponse
     */
    public function destroyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DestroyInstance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DestroyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Destroys an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set instance or a sharded cluster instance that uses local disks.
     * *   The billing method of the instance is subscription.
     * *   The instance has expired and is in the **Locking** state.
     * **
     * **Warning** Data cannot be restored after the instance is destroyed. Proceed with caution.
     *  *
     * @param DestroyInstanceRequest $request DestroyInstanceRequest
     *
     * @return DestroyInstanceResponse DestroyInstanceResponse
     */
    public function destroyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether sufficient resources are available in a region in which you want to create or upgrade an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to replica set instances and sharded cluster instances. You can call this operation to check whether resources are sufficient for creating an instance, upgrading a replica set or sharded cluster instance, or upgrading a single node of the sharded cluster instance.
     * > You can call this operation a maximum of 200 times per minute.
     *  *
     * @param EvaluateResourceRequest $request EvaluateResourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EvaluateResourceResponse EvaluateResourceResponse
     */
    public function evaluateResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readonlyReplicas)) {
            $query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->shardsInfo)) {
            $query['ShardsInfo'] = $request->shardsInfo;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'EvaluateResource',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether sufficient resources are available in a region in which you want to create or upgrade an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to replica set instances and sharded cluster instances. You can call this operation to check whether resources are sufficient for creating an instance, upgrading a replica set or sharded cluster instance, or upgrading a single node of the sharded cluster instance.
     * > You can call this operation a maximum of 200 times per minute.
     *  *
     * @param EvaluateResourceRequest $request EvaluateResourceRequest
     *
     * @return EvaluateResourceResponse EvaluateResourceResponse
     */
    public function evaluateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the relationship between ApsaraDB for MongoDB instances and tags.
     *  *
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
            'action' => 'ListTagResources',
            'version' => '2015-12-01',
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
     * @summary Queries the relationship between ApsaraDB for MongoDB instances and tags.
     *  *
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
     * @summary Migrates an ApsaraDB for MongoDB instance to a specific zone.
     *  *
     * @description *   This operation is available only for replica set instances that run MongoDB 4.2 or earlier and sharded cluster instances.
     * *   If you have applied for a public endpoint for the ApsaraDB for MongoDB instance, you must call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint before you call the MigrateAvailableZone operation.
     * *   Transparent data encryption (TDE) is disabled for the ApsaraDB for MongoDB instance.
     * *   The source zone and the destination zone belong to the same region.
     * *   A vSwitch is created in the destination zone. This prerequisite must be met if the instance resides in a virtual private cloud (VPC). For more information about how to create a vSwitch, see [Work with vSwitches](https://help.aliyun.com/document_detail/65387.html).
     *  *
     * @param MigrateAvailableZoneRequest $request MigrateAvailableZoneRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateAvailableZoneResponse MigrateAvailableZoneResponse
     */
    public function migrateAvailableZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->hiddenZoneId)) {
            $query['HiddenZoneId'] = $request->hiddenZoneId;
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
        if (!Utils::isUnset($request->vswitch)) {
            $query['Vswitch'] = $request->vswitch;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateAvailableZone',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MigrateAvailableZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Migrates an ApsaraDB for MongoDB instance to a specific zone.
     *  *
     * @description *   This operation is available only for replica set instances that run MongoDB 4.2 or earlier and sharded cluster instances.
     * *   If you have applied for a public endpoint for the ApsaraDB for MongoDB instance, you must call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint before you call the MigrateAvailableZone operation.
     * *   Transparent data encryption (TDE) is disabled for the ApsaraDB for MongoDB instance.
     * *   The source zone and the destination zone belong to the same region.
     * *   A vSwitch is created in the destination zone. This prerequisite must be met if the instance resides in a virtual private cloud (VPC). For more information about how to create a vSwitch, see [Work with vSwitches](https://help.aliyun.com/document_detail/65387.html).
     *  *
     * @param MigrateAvailableZoneRequest $request MigrateAvailableZoneRequest
     *
     * @return MigrateAvailableZoneResponse MigrateAvailableZoneResponse
     */
    public function migrateAvailableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateAvailableZoneWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to migrate an ApsaraDB for MongoDB instance to another zone.
     *  *
     * @description This operation is applicable only to replica set instances, but not to standalone instances or sharded cluster instances.
     * >  If you have applied for a public endpoint of the instance, you must first call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint.
     *  *
     * @param MigrateToOtherZoneRequest $request MigrateToOtherZoneRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateToOtherZoneResponse MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($request, $runtime)
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
            'action' => 'MigrateToOtherZone',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to migrate an ApsaraDB for MongoDB instance to another zone.
     *  *
     * @description This operation is applicable only to replica set instances, but not to standalone instances or sharded cluster instances.
     * >  If you have applied for a public endpoint of the instance, you must first call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint.
     *  *
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
     * @summary Modifies the description of the root account in an ApsaraDB for MongoDB instance.
     *  *
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
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
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
            'action' => 'ModifyAccountDescription',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of the root account in an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Modifies the switching time of scheduled O\\\\\\&M tasks for an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyActiveOperationTasksRequest $request ModifyActiveOperationTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyActiveOperationTasksResponse ModifyActiveOperationTasksResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationTasks',
            'version' => '2015-12-01',
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
     * @summary Modifies the switching time of scheduled O\\\\\\&M tasks for an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyActiveOperationTasksRequest $request ModifyActiveOperationTasksRequest
     *
     * @return ModifyActiveOperationTasksResponse ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types of logs collected by the audit log feature of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** or **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param ModifyAuditLogFilterRequest $request ModifyAuditLogFilterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAuditLogFilterResponse ModifyAuditLogFilterResponse
     */
    public function modifyAuditLogFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
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
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAuditLogFilter',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAuditLogFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the types of logs collected by the audit log feature of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** or **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param ModifyAuditLogFilterRequest $request ModifyAuditLogFilterRequest
     *
     * @return ModifyAuditLogFilterResponse ModifyAuditLogFilterResponse
     */
    public function modifyAuditLogFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the audit log feature or configures the log storage duration for an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param ModifyAuditPolicyRequest $request ModifyAuditPolicyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAuditPolicyResponse ModifyAuditPolicyResponse
     */
    public function modifyAuditPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditLogSwitchSource)) {
            $query['AuditLogSwitchSource'] = $request->auditLogSwitchSource;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->storagePeriod)) {
            $query['StoragePeriod'] = $request->storagePeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAuditPolicy',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAuditPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the audit log feature or configures the log storage duration for an ApsaraDB for MongoDB instance.
     *  *
     * @description *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *  *
     * @param ModifyAuditPolicyRequest $request ModifyAuditPolicyRequest
     *
     * @return ModifyAuditPolicyResponse ModifyAuditPolicyResponse
     */
    public function modifyAuditPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a backup policy for an ApsaraDB for MongoDB instance.
     *  *
     * @description The cross-region backup feature is suitable only for replica set or sharded cluster instances that use cloud disks.
     *  *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupInterval)) {
            $query['BackupInterval'] = $request->backupInterval;
        }
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->backupRetentionPolicyOnClusterDeletion)) {
            $query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }
        if (!Utils::isUnset($request->crossBackupPeriod)) {
            $query['CrossBackupPeriod'] = $request->crossBackupPeriod;
        }
        if (!Utils::isUnset($request->crossBackupType)) {
            $query['CrossBackupType'] = $request->crossBackupType;
        }
        if (!Utils::isUnset($request->crossLogRetentionType)) {
            $query['CrossLogRetentionType'] = $request->crossLogRetentionType;
        }
        if (!Utils::isUnset($request->crossLogRetentionValue)) {
            $query['CrossLogRetentionValue'] = $request->crossLogRetentionValue;
        }
        if (!Utils::isUnset($request->crossRetentionType)) {
            $query['CrossRetentionType'] = $request->crossRetentionType;
        }
        if (!Utils::isUnset($request->crossRetentionValue)) {
            $query['CrossRetentionValue'] = $request->crossRetentionValue;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->enableBackupLog)) {
            $query['EnableBackupLog'] = $request->enableBackupLog;
        }
        if (!Utils::isUnset($request->enableCrossLogBackup)) {
            $query['EnableCrossLogBackup'] = $request->enableCrossLogBackup;
        }
        if (!Utils::isUnset($request->highFrequencyBackupRetention)) {
            $query['HighFrequencyBackupRetention'] = $request->highFrequencyBackupRetention;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->logBackupRetentionPeriod)) {
            $query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
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
        if (!Utils::isUnset($request->preserveOneEachHour)) {
            $query['PreserveOneEachHour'] = $request->preserveOneEachHour;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->snapshotBackupType)) {
            $query['SnapshotBackupType'] = $request->snapshotBackupType;
        }
        if (!Utils::isUnset($request->srcRegion)) {
            $query['SrcRegion'] = $request->srcRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPolicy',
            'version' => '2015-12-01',
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
     * @summary Modifies a backup policy for an ApsaraDB for MongoDB instance.
     *  *
     * @description The cross-region backup feature is suitable only for replica set or sharded cluster instances that use cloud disks.
     *  *
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
     * @param ModifyDBInstanceAttributeRequest $request ModifyDBInstanceAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceAttributeResponse ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceReleaseProtection)) {
            $query['DBInstanceReleaseProtection'] = $request->DBInstanceReleaseProtection;
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
            'action' => 'ModifyDBInstanceAttribute',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceAttributeRequest $request ModifyDBInstanceAttributeRequest
     *
     * @return ModifyDBInstanceAttributeResponse ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例配置
     *  *
     * @param ModifyDBInstanceConfigRequest $request ModifyDBInstanceConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConfigResponse ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configName)) {
            $query['ConfigName'] = $request->configName;
        }
        if (!Utils::isUnset($request->configValue)) {
            $query['ConfigValue'] = $request->configValue;
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
            'action' => 'ModifyDBInstanceConfig',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例配置
     *  *
     * @param ModifyDBInstanceConfigRequest $request ModifyDBInstanceConfigRequest
     *
     * @return ModifyDBInstanceConfigResponse ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the endpoint that is used to connect to an ApsaraDB for MongoDB instance.
     *  *
     * @description You can modify the connection strings and ports of the following instances:
     * *   You can modify the connection strings of instances that use local or cloud disks.
     * *   You can only modify the ports of instances that use cloud disks.
     *  *
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
        if (!Utils::isUnset($request->newConnectionString)) {
            $query['NewConnectionString'] = $request->newConnectionString;
        }
        if (!Utils::isUnset($request->newPort)) {
            $query['NewPort'] = $request->newPort;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceConnectionString',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the endpoint that is used to connect to an ApsaraDB for MongoDB instance.
     *  *
     * @description You can modify the connection strings and ports of the following instances:
     * *   You can modify the connection strings of instances that use local or cloud disks.
     * *   You can only modify the ports of instances that use cloud disks.
     *  *
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
     * @summary Modifies the name of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyDBInstanceDescriptionRequest $request ModifyDBInstanceDescriptionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
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
            'action' => 'ModifyDBInstanceDescription',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyDBInstanceDescriptionRequest $request ModifyDBInstanceDescriptionRequest
     *
     * @return ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the disk type of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyDBInstanceDiskTypeRequest $request ModifyDBInstanceDiskTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceDiskTypeResponse ModifyDBInstanceDiskTypeResponse
     */
    public function modifyDBInstanceDiskTypeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dbInstanceStorageType)) {
            $query['DbInstanceStorageType'] = $request->dbInstanceStorageType;
        }
        if (!Utils::isUnset($request->extraParam)) {
            $query['ExtraParam'] = $request->extraParam;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->provisionedIops)) {
            $query['ProvisionedIops'] = $request->provisionedIops;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceDiskType',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceDiskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the disk type of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyDBInstanceDiskTypeRequest $request ModifyDBInstanceDiskTypeRequest
     *
     * @return ModifyDBInstanceDiskTypeResponse ModifyDBInstanceDiskTypeResponse
     */
    public function modifyDBInstanceDiskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDiskTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the maintenance window of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyDBInstanceMaintainTimeRequest $request ModifyDBInstanceMaintainTimeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceMaintainTimeResponse ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceMaintainTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the maintenance window of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyDBInstanceMaintainTimeRequest $request ModifyDBInstanceMaintainTimeRequest
     *
     * @return ModifyDBInstanceMaintainTimeResponse ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to set the monitoring granularity for an ApsaraDB for MongoDB instance.
     *  *
     * @description >  This operation is applicable only to the ApsaraDB for MongoDB console of the previous version due to the change in the feature of adjusting collection intervals of monitoring data.
     * Before you call this operation, make sure that the following requirements are met:
     * *   A replica set or sharded cluster instance is used.
     * *   MongoDB 3.4 (the latest minor version) or MongoDB 4.0 is selected.
     *  *
     * @param ModifyDBInstanceMonitorRequest $request ModifyDBInstanceMonitorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceMonitorResponse ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
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
            'action' => 'ModifyDBInstanceMonitor',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to set the monitoring granularity for an ApsaraDB for MongoDB instance.
     *  *
     * @description >  This operation is applicable only to the ApsaraDB for MongoDB console of the previous version due to the change in the feature of adjusting collection intervals of monitoring data.
     * Before you call this operation, make sure that the following requirements are met:
     * *   A replica set or sharded cluster instance is used.
     * *   MongoDB 3.4 (the latest minor version) or MongoDB 4.0 is selected.
     *  *
     * @param ModifyDBInstanceMonitorRequest $request ModifyDBInstanceMonitorRequest
     *
     * @return ModifyDBInstanceMonitorResponse ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Extends the retention period of the classic network endpoint of an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The network of the instance is in hybrid access mode.
     * >  This operation is supported by replica set instances and sharded cluster instances. This operation is not supported by standalone instances.
     *  *
     * @param ModifyDBInstanceNetExpireTimeRequest $request ModifyDBInstanceNetExpireTimeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceNetExpireTimeResponse ModifyDBInstanceNetExpireTimeResponse
     */
    public function modifyDBInstanceNetExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classicExpendExpiredDays)) {
            $query['ClassicExpendExpiredDays'] = $request->classicExpendExpiredDays;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
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
            'action' => 'ModifyDBInstanceNetExpireTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceNetExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Extends the retention period of the classic network endpoint of an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The network of the instance is in hybrid access mode.
     * >  This operation is supported by replica set instances and sharded cluster instances. This operation is not supported by standalone instances.
     *  *
     * @param ModifyDBInstanceNetExpireTimeRequest $request ModifyDBInstanceNetExpireTimeRequest
     *
     * @return ModifyDBInstanceNetExpireTimeResponse ModifyDBInstanceNetExpireTimeResponse
     */
    public function modifyDBInstanceNetExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the network type of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to replica set instances and sharded cluster instances, but not standalone instances. You can call this operation to change the network of an instance from a classic network to a VPC.
     *  *
     * @param ModifyDBInstanceNetworkTypeRequest $request ModifyDBInstanceNetworkTypeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceNetworkTypeResponse ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classicExpiredDays)) {
            $query['ClassicExpiredDays'] = $request->classicExpiredDays;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retainClassic)) {
            $query['RetainClassic'] = $request->retainClassic;
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
            'action' => 'ModifyDBInstanceNetworkType',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the network type of an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation is applicable to replica set instances and sharded cluster instances, but not standalone instances. You can call this operation to change the network of an instance from a classic network to a VPC.
     *  *
     * @param ModifyDBInstanceNetworkTypeRequest $request ModifyDBInstanceNetworkTypeRequest
     *
     * @return ModifyDBInstanceNetworkTypeResponse ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the SSL settings of an ApsaraDB for MongoDB instance.
     *  *
     * @description ## Usage
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is a replica set instance.
     * *   The engine version of the instance is 3.4 or 4.0.
     * >  When you enable or disable SSL encryption or update the SSL certificate, the instance restarts. We recommend that you call this operation during off-peak hours.
     *  *
     * @param ModifyDBInstanceSSLRequest $request ModifyDBInstanceSSLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceSSLResponse ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->SSLAction)) {
            $query['SSLAction'] = $request->SSLAction;
        }
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceSSL',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the SSL settings of an ApsaraDB for MongoDB instance.
     *  *
     * @description ## Usage
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is a replica set instance.
     * *   The engine version of the instance is 3.4 or 4.0.
     * >  When you enable or disable SSL encryption or update the SSL certificate, the instance restarts. We recommend that you call this operation during off-peak hours.
     *  *
     * @param ModifyDBInstanceSSLRequest $request ModifyDBInstanceSSLRequest
     *
     * @return ModifyDBInstanceSSLResponse ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the specifications or storage space of an ApsaraDB for MongoDB standalone, replica set, or serverless instance. Serverless instances are available only on the China site (aliyun.com).
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to standalone and replica set instances. To modify the specifications of sharded cluster instances, you can call the [ModifyNodeSpec](https://help.aliyun.com/document_detail/61911.html), [CreateNode](https://help.aliyun.com/document_detail/61922.html), [DeleteNode](https://help.aliyun.com/document_detail/61816.html), or [ModifyNodeSpecBatch](https://help.aliyun.com/document_detail/61923.html) operation.
     *  *
     * @param ModifyDBInstanceSpecRequest $request ModifyDBInstanceSpecRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceSpecResponse ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpecWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceStorage)) {
            $query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->extraParam)) {
            $query['ExtraParam'] = $request->extraParam;
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
        if (!Utils::isUnset($request->readonlyReplicas)) {
            $query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }
        if (!Utils::isUnset($request->replicationFactor)) {
            $query['ReplicationFactor'] = $request->replicationFactor;
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
            'action' => 'ModifyDBInstanceSpec',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the specifications or storage space of an ApsaraDB for MongoDB standalone, replica set, or serverless instance. Serverless instances are available only on the China site (aliyun.com).
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to standalone and replica set instances. To modify the specifications of sharded cluster instances, you can call the [ModifyNodeSpec](https://help.aliyun.com/document_detail/61911.html), [CreateNode](https://help.aliyun.com/document_detail/61922.html), [DeleteNode](https://help.aliyun.com/document_detail/61816.html), or [ModifyNodeSpecBatch](https://help.aliyun.com/document_detail/61923.html) operation.
     *  *
     * @param ModifyDBInstanceSpecRequest $request ModifyDBInstanceSpecRequest
     *
     * @return ModifyDBInstanceSpecResponse ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the transparent data encryption (TDE) status of an ApsaraDB for MongoDB instance.
     *  *
     * @description TDE allows you to perform real-time I/O encryption and decryption on data files. Data is encrypted before it is written to a disk and is decrypted when it is read from the disk to the memory. For more information, see [Configure TDE](https://help.aliyun.com/document_detail/131048.html).
     * >  TDE cannot be disabled after it is enabled.
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   A replica set or sharded cluster instance is used.
     * *   The storage engine of the instance is WiredTiger.
     * *   The instance uses local disks to store data.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *  *
     * @param ModifyDBInstanceTDERequest $request ModifyDBInstanceTDERequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceTDEResponse ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->encryptorName)) {
            $query['EncryptorName'] = $request->encryptorName;
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
        if (!Utils::isUnset($request->roleARN)) {
            $query['RoleARN'] = $request->roleARN;
        }
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        if (!Utils::isUnset($request->TDEStatus)) {
            $query['TDEStatus'] = $request->TDEStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceTDE',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the transparent data encryption (TDE) status of an ApsaraDB for MongoDB instance.
     *  *
     * @description TDE allows you to perform real-time I/O encryption and decryption on data files. Data is encrypted before it is written to a disk and is decrypted when it is read from the disk to the memory. For more information, see [Configure TDE](https://help.aliyun.com/document_detail/131048.html).
     * >  TDE cannot be disabled after it is enabled.
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   A replica set or sharded cluster instance is used.
     * *   The storage engine of the instance is WiredTiger.
     * *   The instance uses local disks to store data.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *  *
     * @param ModifyDBInstanceTDERequest $request ModifyDBInstanceTDERequest
     *
     * @return ModifyDBInstanceTDEResponse ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyGlobalSecurityIPGroupRequest $request ModifyGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalSecurityIPGroupResponse ModifyGlobalSecurityIPGroupResponse
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
            'action' => 'ModifyGlobalSecurityIPGroup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyGlobalSecurityIPGroupRequest $request ModifyGlobalSecurityIPGroupRequest
     *
     * @return ModifyGlobalSecurityIPGroupResponse ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request ModifyGlobalSecurityIPGroupNameRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse ModifyGlobalSecurityIPGroupNameResponse
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
            'action' => 'ModifyGlobalSecurityIPGroupName',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of a global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request ModifyGlobalSecurityIPGroupNameRequest
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the mapping between a global whitelist template and an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request ModifyGlobalSecurityIPGroupRelationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse ModifyGlobalSecurityIPGroupRelationResponse
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
            'action' => 'ModifyGlobalSecurityIPGroupRelation',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the mapping between a global whitelist template and an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request ModifyGlobalSecurityIPGroupRelationRequest
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables auto-renewal for an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is applicable to subscription instances.
     * >  When auto-renewal is enabled, your payment will be collected nine days before the expiration date of ApsaraDB for MongoDB. Ensure that your account has sufficient balance.
     *  *
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
            'action' => 'ModifyInstanceAutoRenewalAttribute',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables auto-renewal for an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is applicable to subscription instances.
     * >  When auto-renewal is enabled, your payment will be collected nine days before the expiration date of ApsaraDB for MongoDB. Ensure that your account has sufficient balance.
     *  *
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
     * @summary Disables password-free access over Virtual Private Cloud (VPC) for an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The database engine version of the instance is 4.0 (with the minor version of mongodb_20190408_3.0.11 or later) or 4.2. You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/62010.html) operation to view the database engine version of the instance. If necessary, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine version of the instance.
     * *   The network type of the instance must be VPC. If the network type of the instance is classic network, you must call the [ModifyDBInstanceNetworkType](https://help.aliyun.com/document_detail/62138.html) operation to change the network type to VPC.
     * *   You can only disable but not enable password-free access over VPC.
     *  *
     * @param ModifyInstanceVpcAuthModeRequest $request ModifyInstanceVpcAuthModeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceVpcAuthModeResponse ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthModeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpcAuthMode)) {
            $query['VpcAuthMode'] = $request->vpcAuthMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceVpcAuthMode',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceVpcAuthModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables password-free access over Virtual Private Cloud (VPC) for an ApsaraDB for MongoDB instance.
     *  *
     * @description Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The database engine version of the instance is 4.0 (with the minor version of mongodb_20190408_3.0.11 or later) or 4.2. You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/62010.html) operation to view the database engine version of the instance. If necessary, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine version of the instance.
     * *   The network type of the instance must be VPC. If the network type of the instance is classic network, you must call the [ModifyDBInstanceNetworkType](https://help.aliyun.com/document_detail/62138.html) operation to change the network type to VPC.
     * *   You can only disable but not enable password-free access over VPC.
     *  *
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
     * @summary Changes the specifications and storage capacity of a node of an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * > This operation is applicable only to sharded cluster instances.
     *  *
     * @param ModifyNodeSpecRequest $request ModifyNodeSpecRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNodeSpecResponse ModifyNodeSpecResponse
     */
    public function modifyNodeSpecWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->nodeClass)) {
            $query['NodeClass'] = $request->nodeClass;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeStorage)) {
            $query['NodeStorage'] = $request->nodeStorage;
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
        if (!Utils::isUnset($request->readonlyReplicas)) {
            $query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeSpec',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNodeSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the specifications and storage capacity of a node of an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * > This operation is applicable only to sharded cluster instances.
     *  *
     * @param ModifyNodeSpecRequest $request ModifyNodeSpecRequest
     *
     * @return ModifyNodeSpecResponse ModifyNodeSpecResponse
     */
    public function modifyNodeSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodeSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the configurations of mongos or shard nodes in an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * This operation is applicable only to sharded cluster instances.
     * When you upgrade or downgrade the configurations of multiple sharded cluster instances in batches, the specifications of the instances are limited. For example, if you want to expand the storage capacity of the instances, the storage capacity of the instances after expansion must be greater than the current capacity. When the specifications of multiple sharded cluster instances are different, limits are defined based on the specifications of a random sharded cluster instance. In this case, you may be unable to upgrade or downgrade the configurations of the instances. In this case, we recommend that you call the ModifyNodeSpec operation to individually change the configurations of each sharded cluster instance.
     *  *
     * @param ModifyNodeSpecBatchRequest $request ModifyNodeSpecBatchRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNodeSpecBatchResponse ModifyNodeSpecBatchResponse
     */
    public function modifyNodeSpecBatchWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->nodesInfo)) {
            $query['NodesInfo'] = $request->nodesInfo;
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
            'action' => 'ModifyNodeSpecBatch',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNodeSpecBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the configurations of mongos or shard nodes in an ApsaraDB for MongoDB sharded cluster instance.
     *  *
     * @description Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * This operation is applicable only to sharded cluster instances.
     * When you upgrade or downgrade the configurations of multiple sharded cluster instances in batches, the specifications of the instances are limited. For example, if you want to expand the storage capacity of the instances, the storage capacity of the instances after expansion must be greater than the current capacity. When the specifications of multiple sharded cluster instances are different, limits are defined based on the specifications of a random sharded cluster instance. In this case, you may be unable to upgrade or downgrade the configurations of the instances. In this case, we recommend that you call the ModifyNodeSpec operation to individually change the configurations of each sharded cluster instance.
     *  *
     * @param ModifyNodeSpecBatchRequest $request ModifyNodeSpecBatchRequest
     *
     * @return ModifyNodeSpecBatchResponse ModifyNodeSpecBatchResponse
     */
    public function modifyNodeSpecBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodeSpecBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the parameters of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the Running state when you call this operation.
     * *   If you call this operation to modify specific instance parameters and the modification for part of the parameters can take effect only after an instance restart, the instance is automatically restarted after this operation is called. You can call the [DescribeParameterTemplates](https://help.aliyun.com/document_detail/67618.html) operation to query the parameters that take effect only after the instance is restarted.
     *  *
     * @param ModifyParametersRequest $request ModifyParametersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParametersResponse ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
        }
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
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyParameters',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the parameters of an ApsaraDB for MongoDB instance.
     *  *
     * @description *   The instance must be in the Running state when you call this operation.
     * *   If you call this operation to modify specific instance parameters and the modification for part of the parameters can take effect only after an instance restart, the instance is automatically restarted after this operation is called. You can call the [DescribeParameterTemplates](https://help.aliyun.com/document_detail/67618.html) operation to query the parameters that take effect only after the instance is restarted.
     *  *
     * @param ModifyParametersRequest $request ModifyParametersRequest
     *
     * @return ModifyParametersResponse ModifyParametersResponse
     */
    public function modifyParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Moves an ApsaraDB for MongoDB instance to a specified resource group.
     *  *
     * @description Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *  *
     * @param ModifyResourceGroupRequest $request ModifyResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyResourceGroupResponse ModifyResourceGroupResponse
     */
    public function modifyResourceGroupWithOptions($request, $runtime)
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
            'action' => 'ModifyResourceGroup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves an ApsaraDB for MongoDB instance to a specified resource group.
     *  *
     * @description Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *  *
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
     * @summary You can call this operation to modify an ECS Security group that is bound to an ApsaraDB for MongoDB instance.
     *  *
     * @description >  For a sharded cluster instance, the bound ECS security group takes effect only for mongos nodes.
     *  *
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityGroupConfiguration',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityGroupConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify an ECS Security group that is bound to an ApsaraDB for MongoDB instance.
     *  *
     * @description >  For a sharded cluster instance, the bound ECS security group takes effect only for mongos nodes.
     *  *
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
     * @summary Modifies the IP address whitelist of an ApsaraDB for MongoDB instance.
     *  *
     * @param ModifySecurityIpsRequest $request ModifySecurityIpsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityIpsResponse ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIps',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IP address whitelist of an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Modifies the information of a task in the task center for an ApsaraDB for MongoDB instance.
     *  *
     * @description The actions performed by this operation for a task vary based on the current state of the task. The supported actions for a task can be obtained from the value of the actionInfo parameter in the DescribeHistoryTasks operation.
     *  *
     * @param ModifyTaskInfoRequest $request ModifyTaskInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTaskInfoResponse ModifyTaskInfoResponse
     */
    public function modifyTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionParams)) {
            $query['ActionParams'] = $request->actionParams;
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
        if (!Utils::isUnset($request->stepName)) {
            $query['StepName'] = $request->stepName;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $query['TaskAction'] = $request->taskAction;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTaskInfo',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information of a task in the task center for an ApsaraDB for MongoDB instance.
     *  *
     * @description The actions performed by this operation for a task vary based on the current state of the task. The supported actions for a task can be obtained from the value of the actionInfo parameter in the DescribeHistoryTasks operation.
     *  *
     * @param ModifyTaskInfoRequest $request ModifyTaskInfoRequest
     *
     * @return ModifyTaskInfoResponse ModifyTaskInfoResponse
     */
    public function modifyTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the internal endpoint of a shard or Configserver node in a sharded cluster instance.
     *  *
     * @description *   This operation can be used to release the internal endpoint of a shard or Configserver node in a sharded cluster instance. For more information, see [Release the endpoint of a shard or Configserver node](https://help.aliyun.com/document_detail/134067.html).
     * *   To release the public endpoint of a shard or Configserver node in a sharded cluster instance, you can call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation.
     *  *
     * @param ReleaseNodePrivateNetworkAddressRequest $request ReleaseNodePrivateNetworkAddressRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseNodePrivateNetworkAddressResponse ReleaseNodePrivateNetworkAddressResponse
     */
    public function releaseNodePrivateNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionType)) {
            $query['ConnectionType'] = $request->connectionType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseNodePrivateNetworkAddress',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseNodePrivateNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases the internal endpoint of a shard or Configserver node in a sharded cluster instance.
     *  *
     * @description *   This operation can be used to release the internal endpoint of a shard or Configserver node in a sharded cluster instance. For more information, see [Release the endpoint of a shard or Configserver node](https://help.aliyun.com/document_detail/134067.html).
     * *   To release the public endpoint of a shard or Configserver node in a sharded cluster instance, you can call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation.
     *  *
     * @param ReleaseNodePrivateNetworkAddressRequest $request ReleaseNodePrivateNetworkAddressRequest
     *
     * @return ReleaseNodePrivateNetworkAddressResponse ReleaseNodePrivateNetworkAddressResponse
     */
    public function releaseNodePrivateNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseNodePrivateNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of an ApsaraDB for MongoDB instance.
     *  *
     * @param ReleasePublicNetworkAddressRequest $request ReleasePublicNetworkAddressRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleasePublicNetworkAddressResponse ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionType)) {
            $query['ConnectionType'] = $request->connectionType;
        }
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
            'action' => 'ReleasePublicNetworkAddress',
            'version' => '2015-12-01',
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
     * @summary Releases the public endpoint of an ApsaraDB for MongoDB instance.
     *  *
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
     * @summary Manually renews an ApsaraDB for MongoDB subscription instance.
     *  *
     * @description Make sure that you fully understand the billing methods and pricing of ApsaraDB for MongoDB before you call this operation. For more information about the pricing of ApsaraDB for MongoDB, visit the [pricing tab of the product buy page](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is only applicable to instances that use the subscription billing method.
     *  *
     * @param RenewDBInstanceRequest $request RenewDBInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewDBInstanceResponse RenewDBInstanceResponse
     */
    public function renewDBInstanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
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
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action' => 'RenewDBInstance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Manually renews an ApsaraDB for MongoDB subscription instance.
     *  *
     * @description Make sure that you fully understand the billing methods and pricing of ApsaraDB for MongoDB before you call this operation. For more information about the pricing of ApsaraDB for MongoDB, visit the [pricing tab of the product buy page](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is only applicable to instances that use the subscription billing method.
     *  *
     * @param RenewDBInstanceRequest $request RenewDBInstanceRequest
     *
     * @return RenewDBInstanceResponse RenewDBInstanceResponse
     */
    public function renewDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the password of the root account in an ApsaraDB for MongoDB instance.
     *  *
     * @description >  This operation can be used to reset only the password of the root account of an instance.
     *  *
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
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
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
            'action' => 'ResetAccountPassword',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets the password of the root account in an ApsaraDB for MongoDB instance.
     *  *
     * @description >  This operation can be used to reset only the password of the root account of an instance.
     *  *
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
     * @summary Restarts an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation can also be used to restart an instance, or restart a shard or mongos node in a sharded cluster instance.
     *  *
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartDBInstance',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts an ApsaraDB for MongoDB instance.
     *  *
     * @description This operation can also be used to restart an instance, or restart a shard or mongos node in a sharded cluster instance.
     *  *
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a node in an ApsaraDB for MongoDB instance.
     *  *
     * @description You can call this operation to restart a node in a replica set instance or a child instance in a sharded cluster instance.
     * >  When you call this operation, the instance must meet the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a replica set or sharded cluster instance of the standard edition.
     *  *
     * @param RestartNodeRequest $request RestartNodeRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartNodeResponse RestartNodeResponse
     */
    public function restartNodeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartNode',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts a node in an ApsaraDB for MongoDB instance.
     *  *
     * @description You can call this operation to restart a node in a replica set instance or a child instance in a sharded cluster instance.
     * >  When you call this operation, the instance must meet the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a replica set or sharded cluster instance of the standard edition.
     *  *
     * @param RestartNodeRequest $request RestartNodeRequest
     *
     * @return RestartNodeResponse RestartNodeResponse
     */
    public function restartNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Switches the primary and secondary nodes for an ApsaraDB for MongoDB instance.
     *  *
     * @description The instance must be running when you call this operation.
     * >
     * *   This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     * *   On replica set instances, the switch is performed between instances. On sharded cluster instances, the switch is performed between shards.
     *  *
     * @param SwitchDBInstanceHARequest $request SwitchDBInstanceHARequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchDBInstanceHAResponse SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleIds)) {
            $query['RoleIds'] = $request->roleIds;
        }
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchDBInstanceHA',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Switches the primary and secondary nodes for an ApsaraDB for MongoDB instance.
     *  *
     * @description The instance must be running when you call this operation.
     * >
     * *   This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     * *   On replica set instances, the switch is performed between instances. On sharded cluster instances, the switch is performed between shards.
     *  *
     * @param SwitchDBInstanceHARequest $request SwitchDBInstanceHARequest
     *
     * @return SwitchDBInstanceHAResponse SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * @summary Binds tags to ApsaraDB for MongoDB instances.
     *  *
     * @description If you have a large number of instances, you can create multiple tags, bind the tags to the instances, and filter the instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and bound to the specified instance.
     * *   If a tag that has the same key is already bound to the instance, the new tag overwrites the existing tag.
     * *   You can bind up to 20 tags to each instance.
     * *   You can bind tags to up to 50 instances each time you call the operation.
     *  *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'TagResources',
            'version' => '2015-12-01',
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
     * @summary Binds tags to ApsaraDB for MongoDB instances.
     *  *
     * @description If you have a large number of instances, you can create multiple tags, bind the tags to the instances, and filter the instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and bound to the specified instance.
     * *   If a tag that has the same key is already bound to the instance, the new tag overwrites the existing tag.
     * *   You can bind up to 20 tags to each instance.
     * *   You can bind tags to up to 50 instances each time you call the operation.
     *  *
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
     * @summary Switches the backup mode of an ApsaraDB for MongoDB sharded cluster instance to the cluster backup mode. After the instance is switched to the cluster backup mode, the instance supports high-frequency backup.
     *  *
     * @description *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. Cloud disk-based sharded cluster instances that are created on or after October 19, 2023 are set to the cluster backup mode by default.
     *  *
     * @param TransferClusterBackupRequest $request TransferClusterBackupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferClusterBackupResponse TransferClusterBackupResponse
     */
    public function transferClusterBackupWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferClusterBackup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferClusterBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Switches the backup mode of an ApsaraDB for MongoDB sharded cluster instance to the cluster backup mode. After the instance is switched to the cluster backup mode, the instance supports high-frequency backup.
     *  *
     * @description *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. Cloud disk-based sharded cluster instances that are created on or after October 19, 2023 are set to the cluster backup mode by default.
     *  *
     * @param TransferClusterBackupRequest $request TransferClusterBackupRequest
     *
     * @return TransferClusterBackupResponse TransferClusterBackupResponse
     */
    public function transferClusterBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferClusterBackupWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of an instance from pay-as-you-go to subscription or from subscription to pay-as-you-go.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   Your instance has no unpaid billing method change orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * > To change the billing method of an instance whose instance type is no longer available to purchase, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to change the instance type first.
     *  *
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
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action' => 'TransformInstanceChargeType',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransformInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the billing method of an instance from pay-as-you-go to subscription or from subscription to pay-as-you-go.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   Your instance has no unpaid billing method change orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * > To change the billing method of an instance whose instance type is no longer available to purchase, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to change the instance type first.
     *  *
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
     * @summary Changes the billing method of an ApsaraDB for MongoDB instance from pay-as-you-go to subscription.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * A subscription instance cannot be changed to a pay-as-you-go instance. To avoid wasting resources, proceed with caution.
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the running state.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The instance has no unpaid subscription orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * >  To change the billing method of an instance whose instance type is no longer available to subscription, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to first change the instance type.
     *  *
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
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'TransformToPrePaid',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransformToPrePaidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the billing method of an ApsaraDB for MongoDB instance from pay-as-you-go to subscription.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * A subscription instance cannot be changed to a pay-as-you-go instance. To avoid wasting resources, proceed with caution.
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the running state.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The instance has no unpaid subscription orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * >  To change the billing method of an instance whose instance type is no longer available to subscription, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to first change the instance type.
     *  *
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
     * @summary Removes a tag if the tag is not added to another instance.
     *  *
     * @description >
     * *   You can remove up to 20 tags at a time.
     * *   If you remove a tag from all instances, the tag is automatically deleted.
     *  *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'UntagResources',
            'version' => '2015-12-01',
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
     * @summary Removes a tag if the tag is not added to another instance.
     *  *
     * @description >
     * *   You can remove up to 20 tags at a time.
     * *   If you remove a tag from all instances, the tag is automatically deleted.
     *  *
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
     * @summary Upgrades the database version of an ApsaraDB for MongoDB instance.
     *  *
     * @description The instance must be in the running state when you call this operation.
     * > * The available database versions depend on the storage engine used by the instance. For more information, see [Upgrades of MongoDB major versions](https://help.aliyun.com/document_detail/398673.html). You can also call the [DescribeAvailableEngineVersion](https://help.aliyun.com/document_detail/141355.html) operation to query the available database versions.
     * > * You cannot downgrade the MongoDB version of an instance after you upgrade it.
     * > * The instance is automatically restarted for two to three times during the upgrade process. Make sure that you upgrade the instance during off-peak hours.
     *  *
     * @param UpgradeDBInstanceEngineVersionRequest $request UpgradeDBInstanceEngineVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBInstanceEngineVersion',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the database version of an ApsaraDB for MongoDB instance.
     *  *
     * @description The instance must be in the running state when you call this operation.
     * > * The available database versions depend on the storage engine used by the instance. For more information, see [Upgrades of MongoDB major versions](https://help.aliyun.com/document_detail/398673.html). You can also call the [DescribeAvailableEngineVersion](https://help.aliyun.com/document_detail/141355.html) operation to query the available database versions.
     * > * You cannot downgrade the MongoDB version of an instance after you upgrade it.
     * > * The instance is automatically restarted for two to three times during the upgrade process. Make sure that you upgrade the instance during off-peak hours.
     *  *
     * @param UpgradeDBInstanceEngineVersionRequest $request UpgradeDBInstanceEngineVersionRequest
     *
     * @return UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceEngineVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades the minor version of an ApsaraDB for MongoDB instance.
     *  *
     * @description When you call the UpgradeDBInstanceKernelVersion operation, the instance must be in the Running state.
     * > * The UpgradeDBInstanceKernelVersion operation is applicable to replica set and sharded cluster instances, but not to standalone instances.
     * > * The instance will be restarted once during the upgrade. Call this operation during off-peak hours.
     *  *
     * @param UpgradeDBInstanceKernelVersionRequest $request UpgradeDBInstanceKernelVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBInstanceKernelVersion',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the minor version of an ApsaraDB for MongoDB instance.
     *  *
     * @description When you call the UpgradeDBInstanceKernelVersion operation, the instance must be in the Running state.
     * > * The UpgradeDBInstanceKernelVersion operation is applicable to replica set and sharded cluster instances, but not to standalone instances.
     * > * The instance will be restarted once during the upgrade. Call this operation during off-peak hours.
     *  *
     * @param UpgradeDBInstanceKernelVersionRequest $request UpgradeDBInstanceKernelVersionRequest
     *
     * @return UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }
}
