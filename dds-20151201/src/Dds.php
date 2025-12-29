<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateDBInstanceSrvNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateDBInstanceSrvNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateNodePrivateNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateNodePrivateNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocatePublicNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocatePublicNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CancelActiveOperationTasksResponse;
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
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeRoleTagRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeRoleTagResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteBackupResponse;
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
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRdsVpcsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRdsVpcsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRdsVSwitchsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRdsVSwitchsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRestoreDBInstanceListRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRestoreDBInstanceListResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleTagStatusRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleTagStatusResponse;
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
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeVpcsForMongoDBRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeVpcsForMongoDBResponse;
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
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyActiveOperationMaintenanceConfigRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyActiveOperationMaintenanceConfigResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditLogFilterRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditLogFilterResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyBackupExpireTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyBackupExpireTimeResponse;
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
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySrvNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySrvNetworkAddressResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
            'cn-shenzhen' => 'mongodb.cn-shenzhen.aliyuncs.com',
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
            'cn-shanghai-finance-1' => 'mongodb.cn-shanghai-finance-1.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AllocateDBInstanceSrvNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateDBInstanceSrvNetworkAddressResponse
     *
     * @param AllocateDBInstanceSrvNetworkAddressRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return AllocateDBInstanceSrvNetworkAddressResponse
     */
    public function allocateDBInstanceSrvNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->srvConnectionType) {
            @$query['SrvConnectionType'] = $request->srvConnectionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateDBInstanceSrvNetworkAddress',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateDBInstanceSrvNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AllocateDBInstanceSrvNetworkAddressRequest
     *
     * @returns AllocateDBInstanceSrvNetworkAddressResponse
     *
     * @param AllocateDBInstanceSrvNetworkAddressRequest $request
     *
     * @return AllocateDBInstanceSrvNetworkAddressResponse
     */
    public function allocateDBInstanceSrvNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateDBInstanceSrvNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * Applies for an internal endpoint for a shard or Configserver node in an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * This operation is applicable only to sharded cluster instances. For more information, see [Apply for an endpoint for a shard or Configserver node](https://help.aliyun.com/document_detail/134037.html).
     * >  The allocated endpoints can be used only for internal access. To gain Internet access, you must call the [AllocatePublicNetworkAddress](https://help.aliyun.com/document_detail/67602.html) operation to apply for public endpoints.
     *
     * @param request - AllocateNodePrivateNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateNodePrivateNetworkAddressResponse
     *
     * @param AllocateNodePrivateNetworkAddressRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return AllocateNodePrivateNetworkAddressResponse
     */
    public function allocateNodePrivateNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Applies for an internal endpoint for a shard or Configserver node in an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * This operation is applicable only to sharded cluster instances. For more information, see [Apply for an endpoint for a shard or Configserver node](https://help.aliyun.com/document_detail/134037.html).
     * >  The allocated endpoints can be used only for internal access. To gain Internet access, you must call the [AllocatePublicNetworkAddress](https://help.aliyun.com/document_detail/67602.html) operation to apply for public endpoints.
     *
     * @param request - AllocateNodePrivateNetworkAddressRequest
     *
     * @returns AllocateNodePrivateNetworkAddressResponse
     *
     * @param AllocateNodePrivateNetworkAddressRequest $request
     *
     * @return AllocateNodePrivateNetworkAddressResponse
     */
    public function allocateNodePrivateNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateNodePrivateNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * Allocates a public endpoint to an instance.
     *
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Allocates a public endpoint to an instance.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'CancelActiveOperationTasks',
            'version' => '2015-12-01',
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
     * You can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *
     * @remarks
     * Before you enable Transparent Data Encryption (TDE) by calling the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation, you can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *
     * @param request - CheckCloudResourceAuthorizedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCloudResourceAuthorizedResponse
     *
     * @param CheckCloudResourceAuthorizedRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->targetRegionId) {
            @$query['TargetRegionId'] = $request->targetRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * You can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *
     * @remarks
     * Before you enable Transparent Data Encryption (TDE) by calling the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation, you can call this operation to check whether KMS keys are authorized to ApsaraDB for MongoDB instances.
     *
     * @param request - CheckCloudResourceAuthorizedRequest
     *
     * @returns CheckCloudResourceAuthorizedResponse
     *
     * @param CheckCloudResourceAuthorizedRequest $request
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCloudResourceAuthorizedWithOptions($request, $runtime);
    }

    /**
     * Queries whether the data of an ApsaraDB for MongoDB instance can be restored.
     *
     * @remarks
     * This operation is applicable to replica set instances and sharded cluster instances.
     * >  After you call this operation to confirm that the data of the instance can be restored, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore data to a new instance.
     *
     * @param request - CheckRecoveryConditionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckRecoveryConditionResponse
     *
     * @param CheckRecoveryConditionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckRecoveryConditionResponse
     */
    public function checkRecoveryConditionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->databaseNames) {
            @$query['DatabaseNames'] = $request->databaseNames;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->sourceDBInstance) {
            @$query['SourceDBInstance'] = $request->sourceDBInstance;
        }

        if (null !== $request->sourceDBInstance) {
            @$query['SourceDBInstance'] = $request->sourceDBInstance;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether the data of an ApsaraDB for MongoDB instance can be restored.
     *
     * @remarks
     * This operation is applicable to replica set instances and sharded cluster instances.
     * >  After you call this operation to confirm that the data of the instance can be restored, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore data to a new instance.
     *
     * @param request - CheckRecoveryConditionRequest
     *
     * @returns CheckRecoveryConditionResponse
     *
     * @param CheckRecoveryConditionRequest $request
     *
     * @return CheckRecoveryConditionResponse
     */
    public function checkRecoveryCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRecoveryConditionWithOptions($request, $runtime);
    }

    /**
     * Queries whether a service-linked role is created.
     *
     * @param request - CheckServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether a service-linked role is created.
     *
     * @param request - CheckServiceLinkedRoleRequest
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * Creates an account that is granted read-only permissions for shard nodes in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *
     * @remarks
     *   You can create an account for shard nodes only in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     * *   The account is granted read-only permissions.
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

        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates an account that is granted read-only permissions for shard nodes in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *
     * @remarks
     *   You can create an account for shard nodes only in an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     * *   The account is granted read-only permissions.
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
     * Creates a backup set for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * When you call this operation, the instance must be in the Running state.
     *
     * @param request - CreateBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupResponse
     *
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a backup set for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * When you call this operation, the instance must be in the Running state.
     *
     * @param request - CreateBackupRequest
     *
     * @returns CreateBackupResponse
     *
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
     * Creates or clones an ApsaraDB for MongoDB replica set instance.
     *
     * @remarks
     * Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * For more information about the instance types of ApsaraDB for MongoDB instances, see [Instance types](https://www.alibabacloud.com/help/en/mongodb/product-overview/instance-types-1).
     * To create sharded cluster instances, you can call the [CreateShardingDBInstance](~~CreateShardingDBInstance~~) operation.
     *
     * @param request - CreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceStorage) {
            @$query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }

        if (null !== $request->databaseNames) {
            @$query['DatabaseNames'] = $request->databaseNames;
        }

        if (null !== $request->encrypted) {
            @$query['Encrypted'] = $request->encrypted;
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

        if (null !== $request->globalSecurityGroupIds) {
            @$query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }

        if (null !== $request->hiddenZoneId) {
            @$query['HiddenZoneId'] = $request->hiddenZoneId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->provisionedIops) {
            @$query['ProvisionedIops'] = $request->provisionedIops;
        }

        if (null !== $request->readonlyReplicas) {
            @$query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->srcDBInstanceId) {
            @$query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        if (null !== $request->storageEngine) {
            @$query['StorageEngine'] = $request->storageEngine;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
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
     * Creates or clones an ApsaraDB for MongoDB replica set instance.
     *
     * @remarks
     * Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * For more information about the instance types of ApsaraDB for MongoDB instances, see [Instance types](https://www.alibabacloud.com/help/en/mongodb/product-overview/instance-types-1).
     * To create sharded cluster instances, you can call the [CreateShardingDBInstance](~~CreateShardingDBInstance~~) operation.
     *
     * @param request - CreateDBInstanceRequest
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a global IP whitelist template.
     *
     * @param request - CreateGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGlobalSecurityIPGroupResponse
     *
     * @param CreateGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GIpList) {
            @$query['GIpList'] = $request->GIpList;
        }

        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
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
     * Creates a global IP whitelist template.
     *
     * @param request - CreateGlobalSecurityIPGroupRequest
     *
     * @returns CreateGlobalSecurityIPGroupResponse
     *
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
     * Adds a shard or mongos node to an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to sharded cluster instances.
     *
     * @param request - CreateNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNodeResponse
     *
     * @param CreateNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateNodeResponse
     */
    public function createNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeClass) {
            @$query['NodeClass'] = $request->nodeClass;
        }

        if (null !== $request->nodeStorage) {
            @$query['NodeStorage'] = $request->nodeStorage;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->readonlyReplicas) {
            @$query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->shardDirect) {
            @$query['ShardDirect'] = $request->shardDirect;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Adds a shard or mongos node to an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to sharded cluster instances.
     *
     * @param request - CreateNodeRequest
     *
     * @returns CreateNodeResponse
     *
     * @param CreateNodeRequest $request
     *
     * @return CreateNodeResponse
     */
    public function createNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeWithOptions($request, $runtime);
    }

    /**
     * Batch adds mongos or shard nodes for a sharded cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation is applicable only to sharded cluster instances.
     *
     * @param request - CreateNodeBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNodeBatchResponse
     *
     * @param CreateNodeBatchRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNodeBatchResponse
     */
    public function createNodeBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->fromApp) {
            @$query['FromApp'] = $request->fromApp;
        }

        if (null !== $request->nodesInfo) {
            @$query['NodesInfo'] = $request->nodesInfo;
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

        if (null !== $request->shardDirect) {
            @$query['ShardDirect'] = $request->shardDirect;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Batch adds mongos or shard nodes for a sharded cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation is applicable only to sharded cluster instances.
     *
     * @param request - CreateNodeBatchRequest
     *
     * @returns CreateNodeBatchResponse
     *
     * @param CreateNodeBatchRequest $request
     *
     * @return CreateNodeBatchResponse
     */
    public function createNodeBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeBatchWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateNodeRoleTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNodeRoleTagResponse
     *
     * @param CreateNodeRoleTagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNodeRoleTagResponse
     */
    public function createNodeRoleTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->shardList) {
            @$query['ShardList'] = $request->shardList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNodeRoleTag',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNodeRoleTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateNodeRoleTagRequest
     *
     * @returns CreateNodeRoleTagResponse
     *
     * @param CreateNodeRoleTagRequest $request
     *
     * @return CreateNodeRoleTagResponse
     */
    public function createNodeRoleTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeRoleTagWithOptions($request, $runtime);
    }

    /**
     * Creates or clones an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     *   Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * *   For more information about the instance types of ApsaraDB for MongoDB, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * *   To create standalone instances and replica set instances, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation.
     *
     * @param request - CreateShardingDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateShardingDBInstanceResponse
     *
     * @param CreateShardingDBInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateShardingDBInstanceResponse
     */
    public function createShardingDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configServer) {
            @$query['ConfigServer'] = $request->configServer;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->encrypted) {
            @$query['Encrypted'] = $request->encrypted;
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

        if (null !== $request->globalSecurityGroupIds) {
            @$query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }

        if (null !== $request->hiddenZoneId) {
            @$query['HiddenZoneId'] = $request->hiddenZoneId;
        }

        if (null !== $request->mongos) {
            @$query['Mongos'] = $request->mongos;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->provisionedIops) {
            @$query['ProvisionedIops'] = $request->provisionedIops;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaSet) {
            @$query['ReplicaSet'] = $request->replicaSet;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->srcDBInstanceId) {
            @$query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        if (null !== $request->storageEngine) {
            @$query['StorageEngine'] = $request->storageEngine;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
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
     * Creates or clones an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     *   Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * *   For more information about the instance types of ApsaraDB for MongoDB, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * *   To create standalone instances and replica set instances, you can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation.
     *
     * @param request - CreateShardingDBInstanceRequest
     *
     * @returns CreateShardingDBInstanceResponse
     *
     * @param CreateShardingDBInstanceRequest $request
     *
     * @return CreateShardingDBInstanceResponse
     */
    public function createShardingDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShardingDBInstanceWithOptions($request, $runtime);
    }

    /**
     * 删除MongoDB备份集.
     *
     * @param request - DeleteBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackup',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除MongoDB备份集.
     *
     * @param request - DeleteBackupRequest
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * Releases an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements
     * *   The instance is in the Running state.
     * *   The billing method of the instance is pay-as-you-go.
     * > After an instance is released, all data in the instance is cleared and cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Releases an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements
     * *   The instance is in the Running state.
     * *   The billing method of the instance is pay-as-you-go.
     * > After an instance is released, all data in the instance is cleared and cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteDBInstanceRequest
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a global IP whitelist template.
     *
     * @param request - DeleteGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGlobalSecurityIPGroupResponse
     *
     * @param DeleteGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
     * Deletes a global IP whitelist template.
     *
     * @param request - DeleteGlobalSecurityIPGroupRequest
     *
     * @returns DeleteGlobalSecurityIPGroupResponse
     *
     * @param DeleteGlobalSecurityIPGroupRequest $request
     *
     * @return DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a shard or mongos node from an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a sharded cluster instance.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The number of the shard or mongos nodes in the instance is greater than two.
     *
     * @param request - DeleteNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNodeResponse
     *
     * @param DeleteNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a shard or mongos node from an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a sharded cluster instance.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The number of the shard or mongos nodes in the instance is greater than two.
     *
     * @param request - DeleteNodeRequest
     *
     * @returns DeleteNodeResponse
     *
     * @param DeleteNodeRequest $request
     *
     * @return DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * Queries the database accounts of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  This operation can be used to query only the information of the root account.
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
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the database accounts of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  This operation can be used to query only the information of the root account.
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
     * @param request - DescribeActiveOperationMaintenanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationMaintenanceConfigResponse
     *
     * @param DescribeActiveOperationMaintenanceConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeActiveOperationMaintenanceConfigResponse
     */
    public function describeActiveOperationMaintenanceConfigWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeActiveOperationMaintenanceConfigRequest
     *
     * @returns DescribeActiveOperationMaintenanceConfigResponse
     *
     * @param DescribeActiveOperationMaintenanceConfigRequest $request
     *
     * @return DescribeActiveOperationMaintenanceConfigResponse
     */
    public function describeActiveOperationMaintenanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationMaintenanceConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about  tasks of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeActiveOperationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTaskResponse
     *
     * @param DescribeActiveOperationTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeActiveOperationTaskResponse
     */
    public function describeActiveOperationTaskWithOptions($request, $runtime)
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

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the detailed information about  tasks of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeActiveOperationTaskRequest
     *
     * @returns DescribeActiveOperationTaskResponse
     *
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
     * Queries the number of operation and maintenance tasks on an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeActiveOperationTaskCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTaskCountResponse
     *
     * @param DescribeActiveOperationTaskCountRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Queries the number of operation and maintenance tasks on an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeActiveOperationTaskCountRequest
     *
     * @returns DescribeActiveOperationTaskCountResponse
     *
     * @param DescribeActiveOperationTaskCountRequest $request
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskCountWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeActiveOperationTaskRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTaskRegionResponse
     *
     * @param DescribeActiveOperationTaskRegionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeActiveOperationTaskRegionResponse
     */
    public function describeActiveOperationTaskRegionWithOptions($request, $runtime)
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

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeActiveOperationTaskRegionRequest
     *
     * @returns DescribeActiveOperationTaskRegionResponse
     *
     * @param DescribeActiveOperationTaskRegionRequest $request
     *
     * @return DescribeActiveOperationTaskRegionResponse
     */
    public function describeActiveOperationTaskRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the types of Operation and Maintenance tasks and the number of tasks of each type for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is no longer updated and will be unavailable.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Queries the types of Operation and Maintenance tasks and the number of tasks of each type for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is no longer updated and will be unavailable.
     *
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
     * Queries a list of operation and maintenance tasks initiated for an ApsaraDB for MongoDB instance.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of operation and maintenance tasks initiated for an ApsaraDB for MongoDB instance.
     *
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
     * Queries the types of entries in the audit log collected for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeAuditLogFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditLogFilterResponse
     *
     * @param DescribeAuditLogFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuditLogFilterResponse
     */
    public function describeAuditLogFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the types of entries in the audit log collected for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeAuditLogFilterRequest
     *
     * @returns DescribeAuditLogFilterResponse
     *
     * @param DescribeAuditLogFilterRequest $request
     *
     * @return DescribeAuditLogFilterResponse
     */
    public function describeAuditLogFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogFilterWithOptions($request, $runtime);
    }

    /**
     * Queries whether the audit log feature is enabled for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeAuditPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditPolicyResponse
     *
     * @param DescribeAuditPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAuditPolicyResponse
     */
    public function describeAuditPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether the audit log feature is enabled for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeAuditPolicyRequest
     *
     * @returns DescribeAuditPolicyResponse
     *
     * @param DescribeAuditPolicyRequest $request
     *
     * @return DescribeAuditPolicyResponse
     */
    public function describeAuditPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the audit logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   When you call this operation, ensure that the audit log feature of the instance is enabled. Otherwise, the operation returns an empty audit log.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeAuditRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditRecordsResponse
     *
     * @param DescribeAuditRecordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAuditRecordsResponse
     */
    public function describeAuditRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->form) {
            @$query['Form'] = $request->form;
        }

        if (null !== $request->logicalOperator) {
            @$query['LogicalOperator'] = $request->logicalOperator;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
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

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the audit logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   When you call this operation, ensure that the audit log feature of the instance is enabled. Otherwise, the operation returns an empty audit log.
     * *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeAuditRecordsRequest
     *
     * @returns DescribeAuditRecordsResponse
     *
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
     * Queries a list of the zones that are supported by an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Queries the zones in which an ApsaraDB for MongoDB instance can be deployed under specified purchase conditions. The region ID is required in the purchase condition.
     *
     * @param request - DescribeAvailabilityZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailabilityZonesResponse
     *
     * @param DescribeAvailabilityZonesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailabilityZonesResponse
     */
    public function describeAvailabilityZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->excludeSecondaryZoneId) {
            @$query['ExcludeSecondaryZoneId'] = $request->excludeSecondaryZoneId;
        }

        if (null !== $request->excludeZoneId) {
            @$query['ExcludeZoneId'] = $request->excludeZoneId;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->mongoType) {
            @$query['MongoType'] = $request->mongoType;
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

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageSupport) {
            @$query['StorageSupport'] = $request->storageSupport;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of the zones that are supported by an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Queries the zones in which an ApsaraDB for MongoDB instance can be deployed under specified purchase conditions. The region ID is required in the purchase condition.
     *
     * @param request - DescribeAvailabilityZonesRequest
     *
     * @returns DescribeAvailabilityZonesResponse
     *
     * @param DescribeAvailabilityZonesRequest $request
     *
     * @return DescribeAvailabilityZonesResponse
     */
    public function describeAvailabilityZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailabilityZonesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the engine versions to which an ApsaraDB for MongoDB instance can be upgraded.
     *
     * @param request - DescribeAvailableEngineVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableEngineVersionResponse
     *
     * @param DescribeAvailableEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAvailableEngineVersionResponse
     */
    public function describeAvailableEngineVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * You can call this operation to query the engine versions to which an ApsaraDB for MongoDB instance can be upgraded.
     *
     * @param request - DescribeAvailableEngineVersionRequest
     *
     * @returns DescribeAvailableEngineVersionResponse
     *
     * @param DescribeAvailableEngineVersionRequest $request
     *
     * @return DescribeAvailableEngineVersionResponse
     */
    public function describeAvailableEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableEngineVersionWithOptions($request, $runtime);
    }

    /**
     * Queries the available resources in the specified zone.
     *
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
        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
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

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the available resources in the specified zone.
     *
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
     * Queries the databases at a specified time or the databases in a specified backup set before you restore a database for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore a database for an ApsaraDB for MongoDB instance. For more information, see [Restore one database of an ApsaraDB for MongoDB instance](https://help.aliyun.com/document_detail/112274.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance was created after March 26, 2019.
     * *   The instance is located in the China (Qingdao), China (Beijing), China (Zhangjiakou), China (Hohhot), China (Hangzhou), China (Shanghai), China (Shenzhen), or Singapore region. Other regions are not supported.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4, MongoDB 4.0, or MongoDB 4.2. In addition, the instance uses local disks to store data.
     * *   The storage engine of the instance is WiredTiger.
     *
     * @param request - DescribeBackupDBsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupDBsResponse
     *
     * @param DescribeBackupDBsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupDBsResponse
     */
    public function describeBackupDBsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->sourceDBInstance) {
            @$query['SourceDBInstance'] = $request->sourceDBInstance;
        }

        if (null !== $request->sourceDBInstance) {
            @$query['SourceDBInstance'] = $request->sourceDBInstance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the databases at a specified time or the databases in a specified backup set before you restore a database for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can call the [CreateDBInstance](https://help.aliyun.com/document_detail/61763.html) operation to restore a database for an ApsaraDB for MongoDB instance. For more information, see [Restore one database of an ApsaraDB for MongoDB instance](https://help.aliyun.com/document_detail/112274.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance was created after March 26, 2019.
     * *   The instance is located in the China (Qingdao), China (Beijing), China (Zhangjiakou), China (Hohhot), China (Hangzhou), China (Shanghai), China (Shenzhen), or Singapore region. Other regions are not supported.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4, MongoDB 4.0, or MongoDB 4.2. In addition, the instance uses local disks to store data.
     * *   The storage engine of the instance is WiredTiger.
     *
     * @param request - DescribeBackupDBsRequest
     *
     * @returns DescribeBackupDBsResponse
     *
     * @param DescribeBackupDBsRequest $request
     *
     * @return DescribeBackupDBsResponse
     */
    public function describeBackupDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDBsWithOptions($request, $runtime);
    }

    /**
     * Queries the backup policy of an ApsaraDB for MongoDB instance.
     *
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
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

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the backup policy of an ApsaraDB for MongoDB instance.
     *
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
     * Queries the storage used for backup in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks. Note that you are charged only for the backup-used storage of each shard in a sharded cluster instance. You can call this operation only to query the storage used by a single shard in the instance for backup.
     *
     * @param request - DescribeBackupStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupStorageResponse
     *
     * @param DescribeBackupStorageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupStorageResponse
     */
    public function describeBackupStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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
            'action' => 'DescribeBackupStorage',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage used for backup in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks. Note that you are charged only for the backup-used storage of each shard in a sharded cluster instance. You can call this operation only to query the storage used by a single shard in the instance for backup.
     *
     * @param request - DescribeBackupStorageRequest
     *
     * @returns DescribeBackupStorageResponse
     *
     * @param DescribeBackupStorageRequest $request
     *
     * @return DescribeBackupStorageResponse
     */
    public function describeBackupStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupStorageWithOptions($request, $runtime);
    }

    /**
     * Queries backup tasks running in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks.
     *
     * @param request - DescribeBackupTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupTasksResponse
     *
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupJobId) {
            @$query['BackupJobId'] = $request->backupJobId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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
            'action' => 'DescribeBackupTasks',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries backup tasks running in an ApsaraDB for MongoDB replica set or sharded cluster instance that uses cloud disks.
     *
     * @param request - DescribeBackupTasksRequest
     *
     * @returns DescribeBackupTasksResponse
     *
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
     * Queries the backup sets of an ApsaraDB for MongoDB instance.
     *
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

        if (null !== $request->backupJobId) {
            @$query['BackupJobId'] = $request->backupJobId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the backup sets of an ApsaraDB for MongoDB instance.
     *
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
     * Queries the backup sets of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *
     * @remarks
     * For a sharded cluster instance that is created before October 19, 2023 and uses cloud disks, you must call the [TransferClusterBackup](https://help.aliyun.com/document_detail/2587931.html) operation to switch the instance from the shard backup mode to the cluster backup mode before you call the DescribeClusterBackups operation.
     * By default, cloud disk-based sharded cluster instances that are created after October 19, 2023 are in the cluster backup mode.
     *
     * @param request - DescribeClusterBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterBackupsResponse
     *
     * @param DescribeClusterBackupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterBackupsResponse
     */
    public function describeClusterBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupJobId) {
            @$query['BackupJobId'] = $request->backupJobId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isOnlyGetClusterBackUp) {
            @$query['IsOnlyGetClusterBackUp'] = $request->isOnlyGetClusterBackUp;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the backup sets of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *
     * @remarks
     * For a sharded cluster instance that is created before October 19, 2023 and uses cloud disks, you must call the [TransferClusterBackup](https://help.aliyun.com/document_detail/2587931.html) operation to switch the instance from the shard backup mode to the cluster backup mode before you call the DescribeClusterBackups operation.
     * By default, cloud disk-based sharded cluster instances that are created after October 19, 2023 are in the cluster backup mode.
     *
     * @param request - DescribeClusterBackupsRequest
     *
     * @returns DescribeClusterBackupsResponse
     *
     * @param DescribeClusterBackupsRequest $request
     *
     * @return DescribeClusterBackupsResponse
     */
    public function describeClusterBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBackupsWithOptions($request, $runtime);
    }

    /**
     * Queries the time range to which you can restore the data of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *
     * @remarks
     *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. The DescribeClusterRecoverTime operation is applicable only to instances that are switched to the cluster backup mode or instances that are created on or after October 19, 2023.
     *
     * @param request - DescribeClusterRecoverTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterRecoverTimeResponse
     *
     * @param DescribeClusterRecoverTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeClusterRecoverTimeResponse
     */
    public function describeClusterRecoverTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterRecoverTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterRecoverTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the time range to which you can restore the data of an ApsaraDB for MongoDB sharded cluster instance that uses cloud disks.
     *
     * @remarks
     *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. The DescribeClusterRecoverTime operation is applicable only to instances that are switched to the cluster backup mode or instances that are created on or after October 19, 2023.
     *
     * @param request - DescribeClusterRecoverTimeRequest
     *
     * @returns DescribeClusterRecoverTimeResponse
     *
     * @param DescribeClusterRecoverTimeRequest $request
     *
     * @return DescribeClusterRecoverTimeResponse
     */
    public function describeClusterRecoverTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterRecoverTimeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->isDelete) {
            @$query['IsDelete'] = $request->isDelete;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Queries the details of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeDBInstanceAttributeRequest
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a key for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * When you call the DescribeDBInstanceEncryptionKey operation, the instance must have transparent data encryption (TDE) enabled in BYOK mode. You can call the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation to enable TDE.
     *
     * @param request - DescribeDBInstanceEncryptionKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceEncryptionKeyResponse
     *
     * @param DescribeDBInstanceEncryptionKeyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDBInstanceEncryptionKeyResponse
     */
    public function describeDBInstanceEncryptionKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the details of a key for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * When you call the DescribeDBInstanceEncryptionKey operation, the instance must have transparent data encryption (TDE) enabled in BYOK mode. You can call the [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html) operation to enable TDE.
     *
     * @param request - DescribeDBInstanceEncryptionKeyRequest
     *
     * @returns DescribeDBInstanceEncryptionKeyResponse
     *
     * @param DescribeDBInstanceEncryptionKeyRequest $request
     *
     * @return DescribeDBInstanceEncryptionKeyResponse
     */
    public function describeDBInstanceEncryptionKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceEncryptionKeyWithOptions($request, $runtime);
    }

    /**
     * Queries the collection frequency of monitoring data for an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeDBInstanceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceMonitorResponse
     *
     * @param DescribeDBInstanceMonitorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the collection frequency of monitoring data for an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeDBInstanceMonitorRequest
     *
     * @returns DescribeDBInstanceMonitorResponse
     *
     * @param DescribeDBInstanceMonitorRequest $request
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the performance data of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeDBInstancePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancePerformanceResponse
     *
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replicaSetRole) {
            @$query['ReplicaSetRole'] = $request->replicaSetRole;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->searchId) {
            @$query['SearchId'] = $request->searchId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the performance data of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeDBInstancePerformanceRequest
     *
     * @returns DescribeDBInstancePerformanceResponse
     *
     * @param DescribeDBInstancePerformanceRequest $request
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the Secure Sockets Layer (SSL) settings of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the Running state.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4 or later.
     *
     * @param request - DescribeDBInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceSSLResponse
     *
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the Secure Sockets Layer (SSL) settings of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the Running state.
     * *   The instance is a replica set instance.
     * *   The instance runs MongoDB 3.4 or later.
     *
     * @param request - DescribeDBInstanceSSLRequest
     *
     * @returns DescribeDBInstanceSSLResponse
     *
     * @param DescribeDBInstanceSSLRequest $request
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * 查看规格信息详情.
     *
     * @param request - DescribeDBInstanceSpecInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceSpecInfoResponse
     *
     * @param DescribeDBInstanceSpecInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceSpecInfoResponse
     */
    public function describeDBInstanceSpecInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
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
     * 查看规格信息详情.
     *
     * @param request - DescribeDBInstanceSpecInfoRequest
     *
     * @returns DescribeDBInstanceSpecInfoResponse
     *
     * @param DescribeDBInstanceSpecInfoRequest $request
     *
     * @return DescribeDBInstanceSpecInfoResponse
     */
    public function describeDBInstanceSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSpecInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the primary/secondary switching logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The instance uses local physical disks to store data.
     *
     * @param request - DescribeDBInstanceSwitchLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceSwitchLogResponse
     *
     * @param DescribeDBInstanceSwitchLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceSwitchLogResponse
     */
    public function describeDBInstanceSwitchLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the primary/secondary switching logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The instance uses local physical disks to store data.
     *
     * @param request - DescribeDBInstanceSwitchLogRequest
     *
     * @returns DescribeDBInstanceSwitchLogResponse
     *
     * @param DescribeDBInstanceSwitchLogRequest $request
     *
     * @return DescribeDBInstanceSwitchLogResponse
     */
    public function describeDBInstanceSwitchLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSwitchLogWithOptions($request, $runtime);
    }

    /**
     * Queries whether Transparent Data Encryption (TDE) is enabled for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  For more information about TDE, see [TDE](https://help.aliyun.com/document_detail/131048.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The storage engine of the instance is WiredTiger.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *
     * @param request - DescribeDBInstanceTDEInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceTDEInfoResponse
     *
     * @param DescribeDBInstanceTDEInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceTDEInfoResponse
     */
    public function describeDBInstanceTDEInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries whether Transparent Data Encryption (TDE) is enabled for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  For more information about TDE, see [TDE](https://help.aliyun.com/document_detail/131048.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The storage engine of the instance is WiredTiger.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *
     * @param request - DescribeDBInstanceTDEInfoRequest
     *
     * @returns DescribeDBInstanceTDEInfoResponse
     *
     * @param DescribeDBInstanceTDEInfoRequest $request
     *
     * @return DescribeDBInstanceTDEInfoResponse
     */
    public function describeDBInstanceTDEInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEInfoWithOptions($request, $runtime);
    }

    /**
     * Queries a list of ApsaraDB for MongoDB instances.
     *
     * @remarks
     * The list of replica set and standalone instances is displayed when the **DBInstanceType** parameter uses the default value **replicate**. To query a list of sharded cluster instances, you must set the **DBInstanceType** parameter to **sharding**.
     *
     * @param request - DescribeDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->connectionDomain) {
            @$query['ConnectionDomain'] = $request->connectionDomain;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceStatus) {
            @$query['DBInstanceStatus'] = $request->DBInstanceStatus;
        }

        if (null !== $request->DBInstanceType) {
            @$query['DBInstanceType'] = $request->DBInstanceType;
        }

        if (null !== $request->DBNodeType) {
            @$query['DBNodeType'] = $request->DBNodeType;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->expired) {
            @$query['Expired'] = $request->expired;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
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
     * Queries a list of ApsaraDB for MongoDB instances.
     *
     * @remarks
     * The list of replica set and standalone instances is displayed when the **DBInstanceType** parameter uses the default value **replicate**. To query a list of sharded cluster instances, you must set the **DBInstanceType** parameter to **sharding**.
     *
     * @param request - DescribeDBInstancesRequest
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $request
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the overview information of one or more ApsaraDB for MongoDB instances.
     *
     * @remarks
     *   If you do not specify an instance when you call this operation, the overview information of all instances in a specific region within this account is returned.
     * *   Paged query is disabled for this operation.
     *
     * @param request - DescribeDBInstancesOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancesOverviewResponse
     *
     * @param DescribeDBInstancesOverviewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstancesOverviewResponse
     */
    public function describeDBInstancesOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->showTags) {
            @$query['ShowTags'] = $request->showTags;
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
     * Queries the overview information of one or more ApsaraDB for MongoDB instances.
     *
     * @remarks
     *   If you do not specify an instance when you call this operation, the overview information of all instances in a specific region within this account is returned.
     * *   Paged query is disabled for this operation.
     *
     * @param request - DescribeDBInstancesOverviewRequest
     *
     * @returns DescribeDBInstancesOverviewResponse
     *
     * @param DescribeDBInstancesOverviewRequest $request
     *
     * @return DescribeDBInstancesOverviewResponse
     */
    public function describeDBInstancesOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesOverviewWithOptions($request, $runtime);
    }

    /**
     * Queries entries in error logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeErrorLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeErrorLogRecordsResponse
     *
     * @param DescribeErrorLogRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->logicalOperator) {
            @$query['LogicalOperator'] = $request->logicalOperator;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries entries in error logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeErrorLogRecordsRequest
     *
     * @returns DescribeErrorLogRecordsResponse
     *
     * @param DescribeErrorLogRecordsRequest $request
     *
     * @return DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the global IP whitelist template of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalSecurityIPGroupResponse
     *
     * @param DescribeGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the global IP whitelist template of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeGlobalSecurityIPGroupRequest
     *
     * @returns DescribeGlobalSecurityIPGroupResponse
     *
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
     * Queries the global IP whitelist templates associated with an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeGlobalSecurityIPGroupRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalSecurityIPGroupRelationResponse
     *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'DescribeGlobalSecurityIPGroupRelation',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the global IP whitelist templates associated with an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeGlobalSecurityIPGroupRelationRequest
     *
     * @returns DescribeGlobalSecurityIPGroupRelationResponse
     *
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
     * Queries a list of tasks in the task center.
     *
     * @param request - DescribeHistoryTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryTasksResponse
     *
     * @param DescribeHistoryTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromExecTime) {
            @$query['FromExecTime'] = $request->fromExecTime;
        }

        if (null !== $request->fromStartTime) {
            @$query['FromStartTime'] = $request->fromStartTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->toExecTime) {
            @$query['ToExecTime'] = $request->toExecTime;
        }

        if (null !== $request->toStartTime) {
            @$query['ToStartTime'] = $request->toStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of tasks in the task center.
     *
     * @param request - DescribeHistoryTasksRequest
     *
     * @returns DescribeHistoryTasksResponse
     *
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
     * Queries the overview of a task in the task center.
     *
     * @param request - DescribeHistoryTasksStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryTasksStatResponse
     *
     * @param DescribeHistoryTasksStatRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHistoryTasksStatResponse
     */
    public function describeHistoryTasksStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromExecTime) {
            @$query['FromExecTime'] = $request->fromExecTime;
        }

        if (null !== $request->fromStartTime) {
            @$query['FromStartTime'] = $request->fromStartTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->toExecTime) {
            @$query['ToExecTime'] = $request->toExecTime;
        }

        if (null !== $request->toStartTime) {
            @$query['ToStartTime'] = $request->toStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the overview of a task in the task center.
     *
     * @param request - DescribeHistoryTasksStatRequest
     *
     * @returns DescribeHistoryTasksStatResponse
     *
     * @param DescribeHistoryTasksStatRequest $request
     *
     * @return DescribeHistoryTasksStatResponse
     */
    public function describeHistoryTasksStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksStatWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query whether auto-renewal is enabled for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to subscription instances.
     *
     * @param request - DescribeInstanceAutoRenewalAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAutoRenewalAttributeResponse
     *
     * @param DescribeInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceType) {
            @$query['DBInstanceType'] = $request->DBInstanceType;
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
     * You can call this operation to query whether auto-renewal is enabled for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to subscription instances.
     *
     * @param request - DescribeInstanceAutoRenewalAttributeRequest
     *
     * @returns DescribeInstanceAutoRenewalAttributeResponse
     *
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
     * Queries the time required to restore the data of an ApsaraDB for MongoDB replica set instance that uses cloud disks.
     *
     * @param request - DescribeInstanceRecoverTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceRecoverTimeResponse
     *
     * @param DescribeInstanceRecoverTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceRecoverTimeResponse
     */
    public function describeInstanceRecoverTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceRecoverTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRecoverTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the time required to restore the data of an ApsaraDB for MongoDB replica set instance that uses cloud disks.
     *
     * @param request - DescribeInstanceRecoverTimeRequest
     *
     * @returns DescribeInstanceRecoverTimeResponse
     *
     * @param DescribeInstanceRecoverTimeRequest $request
     *
     * @return DescribeInstanceRecoverTimeResponse
     */
    public function describeInstanceRecoverTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRecoverTimeWithOptions($request, $runtime);
    }

    /**
     * Queries the release notes of the minor versions of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeKernelReleaseNotesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKernelReleaseNotesResponse
     *
     * @param DescribeKernelReleaseNotesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeKernelReleaseNotesResponse
     */
    public function describeKernelReleaseNotesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kernelVersion) {
            @$query['KernelVersion'] = $request->kernelVersion;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the release notes of the minor versions of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeKernelReleaseNotesRequest
     *
     * @returns DescribeKernelReleaseNotesResponse
     *
     * @param DescribeKernelReleaseNotesRequest $request
     *
     * @return DescribeKernelReleaseNotesResponse
     */
    public function describeKernelReleaseNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKernelReleaseNotesWithOptions($request, $runtime);
    }

    /**
     * Queries Key Management Service (KMS) keys that are available for disk encryption.
     *
     * @remarks
     * Queried keys are available only for disk encryption.
     *
     * @param request - DescribeKmsKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKmsKeysResponse
     *
     * @param DescribeKmsKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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
     * Queries Key Management Service (KMS) keys that are available for disk encryption.
     *
     * @remarks
     * Queried keys are available only for disk encryption.
     *
     * @param request - DescribeKmsKeysRequest
     *
     * @returns DescribeKmsKeysResponse
     *
     * @param DescribeKmsKeysRequest $request
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the logging configurations of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * This operation depends on the audit log feature of ApsaraDB for MongoDB. You can enable the audit log feature based on your business requirements. For more information, see [Enable the audit log feature](https://help.aliyun.com/document_detail/59903.html).
     * *   Starting from January 6, 2022, the official edition of the audit log feature has been launched in all regions, and new applications for the free trial edition have ended. For more information, see [Notice on official launch of the pay-as-you-go audit log feature and no more application for the free trial edition](https://help.aliyun.com/document_detail/377480.html)
     * *   You are charged for the official edition of the audit log feature based on the storage capacity that is consumed by audit logs and the retention period of the audit logs. For more information, see [Pricing of ApsaraDB for MongoDB instances](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     *
     * @param request - DescribeMongoDBLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMongoDBLogConfigResponse
     *
     * @param DescribeMongoDBLogConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMongoDBLogConfigResponse
     */
    public function describeMongoDBLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the logging configurations of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * This operation depends on the audit log feature of ApsaraDB for MongoDB. You can enable the audit log feature based on your business requirements. For more information, see [Enable the audit log feature](https://help.aliyun.com/document_detail/59903.html).
     * *   Starting from January 6, 2022, the official edition of the audit log feature has been launched in all regions, and new applications for the free trial edition have ended. For more information, see [Notice on official launch of the pay-as-you-go audit log feature and no more application for the free trial edition](https://help.aliyun.com/document_detail/377480.html)
     * *   You are charged for the official edition of the audit log feature based on the storage capacity that is consumed by audit logs and the retention period of the audit logs. For more information, see [Pricing of ApsaraDB for MongoDB instances](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     *
     * @param request - DescribeMongoDBLogConfigRequest
     *
     * @returns DescribeMongoDBLogConfigResponse
     *
     * @param DescribeMongoDBLogConfigRequest $request
     *
     * @return DescribeMongoDBLogConfigResponse
     */
    public function describeMongoDBLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMongoDBLogConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the parameter modification records of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeParameterModificationHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterModificationHistoryResponse
     *
     * @param DescribeParameterModificationHistoryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the parameter modification records of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeParameterModificationHistoryRequest
     *
     * @returns DescribeParameterModificationHistoryResponse
     *
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
     * Queries the list of default parameter templates for ApsaraDB for MongoDB instances.
     *
     * @param request - DescribeParameterTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterTemplatesResponse
     *
     * @param DescribeParameterTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of default parameter templates for ApsaraDB for MongoDB instances.
     *
     * @param request - DescribeParameterTemplatesRequest
     *
     * @returns DescribeParameterTemplatesResponse
     *
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
     * Queries the parameter settings of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParametersResponse
     *
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->extraParam) {
            @$query['ExtraParam'] = $request->extraParam;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the parameter settings of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeParametersRequest
     *
     * @returns DescribeParametersResponse
     *
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
     * Queries the pricing information of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstances) {
            @$query['DBInstances'] = $request->DBInstances;
        }

        if (null !== $request->orderParamOut) {
            @$query['OrderParamOut'] = $request->orderParamOut;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Queries the pricing information of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribePriceRequest
     *
     * @returns DescribePriceResponse
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2015-12-01',
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
     * @param request - DescribeRdsVpcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsVpcsResponse
     *
     * @param DescribeRdsVpcsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'DescribeRdsVpcs',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRdsVpcsRequest
     *
     * @returns DescribeRdsVpcsResponse
     *
     * @param DescribeRdsVpcsRequest $request
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVpcsWithOptions($request, $runtime);
    }

    /**
     * Queries all regions and zones supported for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  To query available regions and zones in which an ApsaraDB for MongoDB instance can be created, call the [DescribeAvailableResource](https://help.aliyun.com/document_detail/149719.html) operation.
     *
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries all regions and zones supported for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  To query available regions and zones in which an ApsaraDB for MongoDB instance can be created, call the [DescribeAvailableResource](https://help.aliyun.com/document_detail/149719.html) operation.
     *
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
     * Queries the monthly renewal price of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to subscription instances.
     *
     * @param request - DescribeRenewalPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRenewalPriceResponse
     *
     * @param DescribeRenewalPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the monthly renewal price of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to subscription instances.
     *
     * @param request - DescribeRenewalPriceRequest
     *
     * @returns DescribeRenewalPriceResponse
     *
     * @param DescribeRenewalPriceRequest $request
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewalPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the role and connection information of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to replica set instances and standalone instances, but not to sharded cluster instances.
     *
     * @param request - DescribeReplicaSetRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeReplicaSetRoleResponse
     *
     * @param DescribeReplicaSetRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeReplicaSetRoleResponse
     */
    public function describeReplicaSetRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the role and connection information of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to replica set instances and standalone instances, but not to sharded cluster instances.
     *
     * @param request - DescribeReplicaSetRoleRequest
     *
     * @returns DescribeReplicaSetRoleResponse
     *
     * @param DescribeReplicaSetRoleRequest $request
     *
     * @return DescribeReplicaSetRoleResponse
     */
    public function describeReplicaSetRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicaSetRoleWithOptions($request, $runtime);
    }

    /**
     * Queries ApsaraDB for MongoDB instances whose backups are restored within seven days.
     *
     * @param request - DescribeRestoreDBInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreDBInstanceListResponse
     *
     * @param DescribeRestoreDBInstanceListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRestoreDBInstanceListResponse
     */
    public function describeRestoreDBInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creationTimeAfter) {
            @$query['CreationTimeAfter'] = $request->creationTimeAfter;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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
     * Queries ApsaraDB for MongoDB instances whose backups are restored within seven days.
     *
     * @param request - DescribeRestoreDBInstanceListRequest
     *
     * @returns DescribeRestoreDBInstanceListResponse
     *
     * @param DescribeRestoreDBInstanceListRequest $request
     *
     * @return DescribeRestoreDBInstanceListResponse
     */
    public function describeRestoreDBInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreDBInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRoleTagStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoleTagStatusResponse
     *
     * @param DescribeRoleTagStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRoleTagStatusResponse
     */
    public function describeRoleTagStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRoleTagStatus',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoleTagStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRoleTagStatusRequest
     *
     * @returns DescribeRoleTagStatusResponse
     *
     * @param DescribeRoleTagStatusRequest $request
     *
     * @return DescribeRoleTagStatusResponse
     */
    public function describeRoleTagStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoleTagStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the role and zone of each node in an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * > For more information, see [View the zone of a node](https://help.aliyun.com/document_detail/123825.html).
     * This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     *
     * @param request - DescribeRoleZoneInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoleZoneInfoResponse
     *
     * @param DescribeRoleZoneInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the role and zone of each node in an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * > For more information, see [View the zone of a node](https://help.aliyun.com/document_detail/123825.html).
     * This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     *
     * @param request - DescribeRoleZoneInfoRequest
     *
     * @returns DescribeRoleZoneInfoResponse
     *
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
     * Queries entries in operational logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeRunningLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRunningLogRecordsResponse
     *
     * @param DescribeRunningLogRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->logicalOperator) {
            @$query['LogicalOperator'] = $request->logicalOperator;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries entries in operational logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeRunningLogRecordsRequest
     *
     * @returns DescribeRunningLogRecordsResponse
     *
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
     * You can call this operation to query ECS security groups that are bound to an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeSecurityGroupConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityGroupConfigurationResponse
     *
     * @param DescribeSecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * You can call this operation to query ECS security groups that are bound to an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeSecurityGroupConfigurationRequest
     *
     * @returns DescribeSecurityGroupConfigurationResponse
     *
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
     * You can call this operation to query the IP whitelists of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeSecurityIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIpsResponse
     *
     * @param DescribeSecurityIpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->showHDMIps) {
            @$query['ShowHDMIps'] = $request->showHDMIps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * You can call this operation to query the IP whitelists of an ApsaraDB for MongoDB instance.
     *
     * @param request - DescribeSecurityIpsRequest
     *
     * @returns DescribeSecurityIpsResponse
     *
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
     * Queries connection information about an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * This operation is applicable only to sharded cluster instances.
     *
     * @param request - DescribeShardingNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeShardingNetworkAddressResponse
     *
     * @param DescribeShardingNetworkAddressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeShardingNetworkAddressResponse
     */
    public function describeShardingNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries connection information about an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * This operation is applicable only to sharded cluster instances.
     *
     * @param request - DescribeShardingNetworkAddressRequest
     *
     * @returns DescribeShardingNetworkAddressResponse
     *
     * @param DescribeShardingNetworkAddressRequest $request
     *
     * @return DescribeShardingNetworkAddressResponse
     */
    public function describeShardingNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardingNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * Queries the details of entries in slow query logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeSlowLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogRecordsResponse
     *
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->logicalOperator) {
            @$query['LogicalOperator'] = $request->logicalOperator;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the details of entries in slow query logs of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - DescribeSlowLogRecordsRequest
     *
     * @returns DescribeSlowLogRecordsResponse
     *
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
     * Queries all tags in a specified region.
     *
     * @param request - DescribeTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries all tags in a specified region.
     *
     * @param request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of custom keys for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can use the custom key obtained by calling the DescribeUserEncryptionKeyList operation to enable TDE. For more information, see [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html).
     *
     * @param request - DescribeUserEncryptionKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->roleARN) {
            @$query['RoleARN'] = $request->roleARN;
        }

        if (null !== $request->targetRegionId) {
            @$query['TargetRegionId'] = $request->targetRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the list of custom keys for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can use the custom key obtained by calling the DescribeUserEncryptionKeyList operation to enable TDE. For more information, see [ModifyDBInstanceTDE](https://help.aliyun.com/document_detail/131267.html).
     *
     * @param request - DescribeUserEncryptionKeyListRequest
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVpcsForMongoDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcsForMongoDBResponse
     *
     * @param DescribeVpcsForMongoDBRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVpcsForMongoDBResponse
     */
    public function describeVpcsForMongoDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'DescribeVpcsForMongoDB',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcsForMongoDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVpcsForMongoDBRequest
     *
     * @returns DescribeVpcsForMongoDBResponse
     *
     * @param DescribeVpcsForMongoDBRequest $request
     *
     * @return DescribeVpcsForMongoDBResponse
     */
    public function describeVpcsForMongoDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsForMongoDBWithOptions($request, $runtime);
    }

    /**
     * Destroys an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set instance or a sharded cluster instance that uses local disks.
     * *   The billing method of the instance is subscription.
     * *   The instance has expired and is in the **Locking** state.
     * **
     * **Warning** Data cannot be restored after the instance is destroyed. Proceed with caution.
     *
     * @param request - DestroyInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DestroyInstanceResponse
     *
     * @param DestroyInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DestroyInstanceResponse
     */
    public function destroyInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Destroys an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a replica set instance or a sharded cluster instance that uses local disks.
     * *   The billing method of the instance is subscription.
     * *   The instance has expired and is in the **Locking** state.
     * **
     * **Warning** Data cannot be restored after the instance is destroyed. Proceed with caution.
     *
     * @param request - DestroyInstanceRequest
     *
     * @returns DestroyInstanceResponse
     *
     * @param DestroyInstanceRequest $request
     *
     * @return DestroyInstanceResponse
     */
    public function destroyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyInstanceWithOptions($request, $runtime);
    }

    /**
     * Checks whether sufficient resources are available in a region in which you want to create or upgrade an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to replica set instances and sharded cluster instances. You can call this operation to check whether resources are sufficient for creating an instance, upgrading a replica set or sharded cluster instance, or upgrading a single node of the sharded cluster instance.
     * > You can call this operation a maximum of 200 times per minute.
     *
     * @param request - EvaluateResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateResourceResponse
     *
     * @param EvaluateResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EvaluateResourceResponse
     */
    public function evaluateResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->readonlyReplicas) {
            @$query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->shardsInfo) {
            @$query['ShardsInfo'] = $request->shardsInfo;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Checks whether sufficient resources are available in a region in which you want to create or upgrade an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to replica set instances and sharded cluster instances. You can call this operation to check whether resources are sufficient for creating an instance, upgrading a replica set or sharded cluster instance, or upgrading a single node of the sharded cluster instance.
     * > You can call this operation a maximum of 200 times per minute.
     *
     * @param request - EvaluateResourceRequest
     *
     * @returns EvaluateResourceResponse
     *
     * @param EvaluateResourceRequest $request
     *
     * @return EvaluateResourceResponse
     */
    public function evaluateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the relationship between ApsaraDB for MongoDB instances and tags.
     *
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
     * Queries the relationship between ApsaraDB for MongoDB instances and tags.
     *
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
     * Migrates an ApsaraDB for MongoDB instance to a specific zone.
     *
     * @remarks
     *   This operation is available only for replica set instances that run MongoDB 4.2 or earlier and sharded cluster instances.
     * *   If you have applied for a public endpoint for the ApsaraDB for MongoDB instance, you must call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint before you call the MigrateAvailableZone operation.
     * *   Transparent data encryption (TDE) is disabled for the ApsaraDB for MongoDB instance.
     * *   The source zone and the destination zone belong to the same region.
     * *   A vSwitch is created in the destination zone. This prerequisite must be met if the instance resides in a virtual private cloud (VPC). For more information about how to create a vSwitch, see [Work with vSwitches](https://help.aliyun.com/document_detail/65387.html).
     *
     * @param request - MigrateAvailableZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateAvailableZoneResponse
     *
     * @param MigrateAvailableZoneRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MigrateAvailableZoneResponse
     */
    public function migrateAvailableZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->hiddenZoneId) {
            @$query['HiddenZoneId'] = $request->hiddenZoneId;
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

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->vswitch) {
            @$query['Vswitch'] = $request->vswitch;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Migrates an ApsaraDB for MongoDB instance to a specific zone.
     *
     * @remarks
     *   This operation is available only for replica set instances that run MongoDB 4.2 or earlier and sharded cluster instances.
     * *   If you have applied for a public endpoint for the ApsaraDB for MongoDB instance, you must call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint before you call the MigrateAvailableZone operation.
     * *   Transparent data encryption (TDE) is disabled for the ApsaraDB for MongoDB instance.
     * *   The source zone and the destination zone belong to the same region.
     * *   A vSwitch is created in the destination zone. This prerequisite must be met if the instance resides in a virtual private cloud (VPC). For more information about how to create a vSwitch, see [Work with vSwitches](https://help.aliyun.com/document_detail/65387.html).
     *
     * @param request - MigrateAvailableZoneRequest
     *
     * @returns MigrateAvailableZoneResponse
     *
     * @param MigrateAvailableZoneRequest $request
     *
     * @return MigrateAvailableZoneResponse
     */
    public function migrateAvailableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateAvailableZoneWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to migrate an ApsaraDB for MongoDB instance to another zone.
     *
     * @remarks
     * This operation is applicable only to replica set instances, but not to standalone instances or sharded cluster instances.
     * >  If you have applied for a public endpoint of the instance, you must first call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint.
     *
     * @param request - MigrateToOtherZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateToOtherZoneResponse
     *
     * @param MigrateToOtherZoneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
     * You can call this operation to migrate an ApsaraDB for MongoDB instance to another zone.
     *
     * @remarks
     * This operation is applicable only to replica set instances, but not to standalone instances or sharded cluster instances.
     * >  If you have applied for a public endpoint of the instance, you must first call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation to release the public endpoint.
     *
     * @param request - MigrateToOtherZoneRequest
     *
     * @returns MigrateToOtherZoneResponse
     *
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
     * Modifies the description of the root account in an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyAccountDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the description of the root account in an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyAccountDescriptionRequest
     *
     * @returns ModifyAccountDescriptionResponse
     *
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
     * @param request - ModifyActiveOperationMaintenanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationMaintenanceConfigResponse
     *
     * @param ModifyActiveOperationMaintenanceConfigRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ModifyActiveOperationMaintenanceConfigResponse
     */
    public function modifyActiveOperationMaintenanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cycleTime) {
            @$query['CycleTime'] = $request->cycleTime;
        }

        if (null !== $request->cycleType) {
            @$query['CycleType'] = $request->cycleType;
        }

        if (null !== $request->maintainEndTime) {
            @$query['MaintainEndTime'] = $request->maintainEndTime;
        }

        if (null !== $request->maintainStartTime) {
            @$query['MaintainStartTime'] = $request->maintainStartTime;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationMaintenanceConfig',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyActiveOperationMaintenanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyActiveOperationMaintenanceConfigRequest
     *
     * @returns ModifyActiveOperationMaintenanceConfigResponse
     *
     * @param ModifyActiveOperationMaintenanceConfigRequest $request
     *
     * @return ModifyActiveOperationMaintenanceConfigResponse
     */
    public function modifyActiveOperationMaintenanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationMaintenanceConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the switching time of scheduled O\\\\\\&M tasks for an ApsaraDB for MongoDB instance.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the switching time of scheduled O\\\\\\&M tasks for an ApsaraDB for MongoDB instance.
     *
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
     * Queries the types of logs collected by the audit log feature of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** or **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - ModifyAuditLogFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAuditLogFilterResponse
     *
     * @param ModifyAuditLogFilterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogFilterResponse
     */
    public function modifyAuditLogFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the types of logs collected by the audit log feature of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the running state when you call this operation.
     * *   This operation is applicable only to **general-purpose local-disk** or **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - ModifyAuditLogFilterRequest
     *
     * @returns ModifyAuditLogFilterResponse
     *
     * @param ModifyAuditLogFilterRequest $request
     *
     * @return ModifyAuditLogFilterResponse
     */
    public function modifyAuditLogFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogFilterWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the audit log feature or configures the log storage duration for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - ModifyAuditPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAuditPolicyResponse
     *
     * @param ModifyAuditPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAuditPolicyResponse
     */
    public function modifyAuditPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditLogSwitchSource) {
            @$query['AuditLogSwitchSource'] = $request->auditLogSwitchSource;
        }

        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->storagePeriod) {
            @$query['StoragePeriod'] = $request->storagePeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Enables or disables the audit log feature or configures the log storage duration for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   This operation is applicable only to **general-purpose local-disk** and **dedicated local-disk** instances.
     * *   You can call this operation up to 30 times per minute. To call this operation at a higher frequency, use a Logstore. For more information, see [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - ModifyAuditPolicyRequest
     *
     * @returns ModifyAuditPolicyResponse
     *
     * @param ModifyAuditPolicyRequest $request
     *
     * @return ModifyAuditPolicyResponse
     */
    public function modifyAuditPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditPolicyWithOptions($request, $runtime);
    }

    /**
     * 修改MongoDB备份集的过期时间.
     *
     * @param request - ModifyBackupExpireTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupExpireTimeResponse
     *
     * @param ModifyBackupExpireTimeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBackupExpireTimeResponse
     */
    public function modifyBackupExpireTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupExpireTime) {
            @$query['BackupExpireTime'] = $request->backupExpireTime;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupExpireTime',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改MongoDB备份集的过期时间.
     *
     * @param request - ModifyBackupExpireTimeRequest
     *
     * @returns ModifyBackupExpireTimeResponse
     *
     * @param ModifyBackupExpireTimeRequest $request
     *
     * @return ModifyBackupExpireTimeResponse
     */
    public function modifyBackupExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupExpireTimeWithOptions($request, $runtime);
    }

    /**
     * Modifies a backup policy for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The cross-region backup feature is suitable only for replica set or sharded cluster instances that use cloud disks.
     *
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
        if (null !== $request->backupInterval) {
            @$query['BackupInterval'] = $request->backupInterval;
        }

        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->backupRetentionPolicyOnClusterDeletion) {
            @$query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $request->crossBackupPeriod) {
            @$query['CrossBackupPeriod'] = $request->crossBackupPeriod;
        }

        if (null !== $request->crossBackupType) {
            @$query['CrossBackupType'] = $request->crossBackupType;
        }

        if (null !== $request->crossLogRetentionType) {
            @$query['CrossLogRetentionType'] = $request->crossLogRetentionType;
        }

        if (null !== $request->crossLogRetentionValue) {
            @$query['CrossLogRetentionValue'] = $request->crossLogRetentionValue;
        }

        if (null !== $request->crossRetentionType) {
            @$query['CrossRetentionType'] = $request->crossRetentionType;
        }

        if (null !== $request->crossRetentionValue) {
            @$query['CrossRetentionValue'] = $request->crossRetentionValue;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->enableBackupLog) {
            @$query['EnableBackupLog'] = $request->enableBackupLog;
        }

        if (null !== $request->enableCrossLogBackup) {
            @$query['EnableCrossLogBackup'] = $request->enableCrossLogBackup;
        }

        if (null !== $request->highFrequencyBackupRetention) {
            @$query['HighFrequencyBackupRetention'] = $request->highFrequencyBackupRetention;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->logBackupRetentionPeriod) {
            @$query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
        }

        if (null !== $request->preserveOneEachHour) {
            @$query['PreserveOneEachHour'] = $request->preserveOneEachHour;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->snapshotBackupType) {
            @$query['SnapshotBackupType'] = $request->snapshotBackupType;
        }

        if (null !== $request->srcRegion) {
            @$query['SrcRegion'] = $request->srcRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies a backup policy for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The cross-region backup feature is suitable only for replica set or sharded cluster instances that use cloud disks.
     *
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
     * @param request - ModifyDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceAttributeResponse
     *
     * @param ModifyDBInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceReleaseProtection) {
            @$query['DBInstanceReleaseProtection'] = $request->DBInstanceReleaseProtection;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyDBInstanceAttributeRequest
     *
     * @returns ModifyDBInstanceAttributeResponse
     *
     * @param ModifyDBInstanceAttributeRequest $request
     *
     * @return ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 修改实例配置.
     *
     * @param request - ModifyDBInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConfigResponse
     *
     * @param ModifyDBInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 修改实例配置.
     *
     * @param request - ModifyDBInstanceConfigRequest
     *
     * @returns ModifyDBInstanceConfigResponse
     *
     * @param ModifyDBInstanceConfigRequest $request
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the endpoint that is used to connect to an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can modify the connection strings and ports of the following instances:
     * *   You can modify the connection strings of instances that use local or cloud disks.
     * *   You can only modify the ports of instances that use cloud disks.
     *
     * @param request - ModifyDBInstanceConnectionStringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentConnectionString) {
            @$query['CurrentConnectionString'] = $request->currentConnectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->newConnectionString) {
            @$query['NewConnectionString'] = $request->newConnectionString;
        }

        if (null !== $request->newPort) {
            @$query['NewPort'] = $request->newPort;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the endpoint that is used to connect to an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can modify the connection strings and ports of the following instances:
     * *   You can modify the connection strings of instances that use local or cloud disks.
     * *   You can only modify the ports of instances that use cloud disks.
     *
     * @param request - ModifyDBInstanceConnectionStringRequest
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
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
     * Modifies the name of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyDBInstanceDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceDescriptionResponse
     *
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the name of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyDBInstanceDescriptionRequest
     *
     * @returns ModifyDBInstanceDescriptionResponse
     *
     * @param ModifyDBInstanceDescriptionRequest $request
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * Modifies the disk type of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyDBInstanceDiskTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceDiskTypeResponse
     *
     * @param ModifyDBInstanceDiskTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDBInstanceDiskTypeResponse
     */
    public function modifyDBInstanceDiskTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dbInstanceStorageType) {
            @$query['DbInstanceStorageType'] = $request->dbInstanceStorageType;
        }

        if (null !== $request->extraParam) {
            @$query['ExtraParam'] = $request->extraParam;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->provisionedIops) {
            @$query['ProvisionedIops'] = $request->provisionedIops;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the disk type of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyDBInstanceDiskTypeRequest
     *
     * @returns ModifyDBInstanceDiskTypeResponse
     *
     * @param ModifyDBInstanceDiskTypeRequest $request
     *
     * @return ModifyDBInstanceDiskTypeResponse
     */
    public function modifyDBInstanceDiskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDiskTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the maintenance window of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyDBInstanceMaintainTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceMaintainTimeResponse
     *
     * @param ModifyDBInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->maintainEndTime) {
            @$query['MaintainEndTime'] = $request->maintainEndTime;
        }

        if (null !== $request->maintainStartTime) {
            @$query['MaintainStartTime'] = $request->maintainStartTime;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the maintenance window of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyDBInstanceMaintainTimeRequest
     *
     * @returns ModifyDBInstanceMaintainTimeResponse
     *
     * @param ModifyDBInstanceMaintainTimeRequest $request
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to set the monitoring granularity for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  This operation is applicable only to the ApsaraDB for MongoDB console of the previous version due to the change in the feature of adjusting collection intervals of monitoring data.
     * Before you call this operation, make sure that the following requirements are met:
     * *   A replica set or sharded cluster instance is used.
     * *   MongoDB 3.4 (the latest minor version) or MongoDB 4.0 is selected.
     *
     * @param request - ModifyDBInstanceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceMonitorResponse
     *
     * @param ModifyDBInstanceMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * You can call this operation to set the monitoring granularity for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  This operation is applicable only to the ApsaraDB for MongoDB console of the previous version due to the change in the feature of adjusting collection intervals of monitoring data.
     * Before you call this operation, make sure that the following requirements are met:
     * *   A replica set or sharded cluster instance is used.
     * *   MongoDB 3.4 (the latest minor version) or MongoDB 4.0 is selected.
     *
     * @param request - ModifyDBInstanceMonitorRequest
     *
     * @returns ModifyDBInstanceMonitorResponse
     *
     * @param ModifyDBInstanceMonitorRequest $request
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * Extends the retention period of the classic network endpoint of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The network of the instance is in hybrid access mode.
     * >  This operation is supported by replica set instances and sharded cluster instances. This operation is not supported by standalone instances.
     *
     * @param request - ModifyDBInstanceNetExpireTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceNetExpireTimeResponse
     *
     * @param ModifyDBInstanceNetExpireTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDBInstanceNetExpireTimeResponse
     */
    public function modifyDBInstanceNetExpireTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classicExpendExpiredDays) {
            @$query['ClassicExpendExpiredDays'] = $request->classicExpendExpiredDays;
        }

        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Extends the retention period of the classic network endpoint of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   The network of the instance is in hybrid access mode.
     * >  This operation is supported by replica set instances and sharded cluster instances. This operation is not supported by standalone instances.
     *
     * @param request - ModifyDBInstanceNetExpireTimeRequest
     *
     * @returns ModifyDBInstanceNetExpireTimeResponse
     *
     * @param ModifyDBInstanceNetExpireTimeRequest $request
     *
     * @return ModifyDBInstanceNetExpireTimeResponse
     */
    public function modifyDBInstanceNetExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetExpireTimeWithOptions($request, $runtime);
    }

    /**
     * Changes the network type of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to replica set instances and sharded cluster instances, but not standalone instances. You can call this operation to change the network of an instance from a classic network to a VPC.
     *
     * @param request - ModifyDBInstanceNetworkTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceNetworkTypeResponse
     *
     * @param ModifyDBInstanceNetworkTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classicExpiredDays) {
            @$query['ClassicExpiredDays'] = $request->classicExpiredDays;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
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

        if (null !== $request->retainClassic) {
            @$query['RetainClassic'] = $request->retainClassic;
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
     * Changes the network type of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation is applicable to replica set instances and sharded cluster instances, but not standalone instances. You can call this operation to change the network of an instance from a classic network to a VPC.
     *
     * @param request - ModifyDBInstanceNetworkTypeRequest
     *
     * @returns ModifyDBInstanceNetworkTypeResponse
     *
     * @param ModifyDBInstanceNetworkTypeRequest $request
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the SSL settings of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * ## Usage
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is a replica set instance.
     * *   The engine version of the instance is 3.4 or 4.0.
     * >  When you enable or disable SSL encryption or update the SSL certificate, the instance restarts. We recommend that you call this operation during off-peak hours.
     *
     * @param request - ModifyDBInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceSSLResponse
     *
     * @param ModifyDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->forceEncryption) {
            @$query['ForceEncryption'] = $request->forceEncryption;
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

        if (null !== $request->SSLAction) {
            @$query['SSLAction'] = $request->SSLAction;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the SSL settings of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * ## Usage
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is a replica set instance.
     * *   The engine version of the instance is 3.4 or 4.0.
     * >  When you enable or disable SSL encryption or update the SSL certificate, the instance restarts. We recommend that you call this operation during off-peak hours.
     *
     * @param request - ModifyDBInstanceSSLRequest
     *
     * @returns ModifyDBInstanceSSLResponse
     *
     * @param ModifyDBInstanceSSLRequest $request
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * Modifies the specifications or storage space of an ApsaraDB for MongoDB standalone, replica set, or serverless instance. Serverless instances are available only on the China site (aliyun.com).
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to standalone and replica set instances. To modify the specifications of sharded cluster instances, you can call the [ModifyNodeSpec](https://help.aliyun.com/document_detail/61911.html), [CreateNode](https://help.aliyun.com/document_detail/61922.html), [DeleteNode](https://help.aliyun.com/document_detail/61816.html), or [ModifyNodeSpecBatch](https://help.aliyun.com/document_detail/61923.html) operation.
     *
     * @param request - ModifyDBInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceSpecResponse
     *
     * @param ModifyDBInstanceSpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceStorage) {
            @$query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->extraParam) {
            @$query['ExtraParam'] = $request->extraParam;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->readonlyReplicas) {
            @$query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }

        if (null !== $request->replicationFactor) {
            @$query['ReplicationFactor'] = $request->replicationFactor;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->searchNodeClass) {
            @$query['SearchNodeClass'] = $request->searchNodeClass;
        }

        if (null !== $request->searchNodeCount) {
            @$query['SearchNodeCount'] = $request->searchNodeCount;
        }

        if (null !== $request->searchNodeStorage) {
            @$query['SearchNodeStorage'] = $request->searchNodeStorage;
        }

        if (null !== $request->targetHiddenZoneId) {
            @$query['TargetHiddenZoneId'] = $request->targetHiddenZoneId;
        }

        if (null !== $request->targetSecondaryZoneId) {
            @$query['TargetSecondaryZoneId'] = $request->targetSecondaryZoneId;
        }

        if (null !== $request->targetVswitchId) {
            @$query['TargetVswitchId'] = $request->targetVswitchId;
        }

        if (null !== $request->targetZoneId) {
            @$query['TargetZoneId'] = $request->targetZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the specifications or storage space of an ApsaraDB for MongoDB standalone, replica set, or serverless instance. Serverless instances are available only on the China site (aliyun.com).
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * This operation applies only to standalone and replica set instances. To modify the specifications of sharded cluster instances, you can call the [ModifyNodeSpec](https://help.aliyun.com/document_detail/61911.html), [CreateNode](https://help.aliyun.com/document_detail/61922.html), [DeleteNode](https://help.aliyun.com/document_detail/61816.html), or [ModifyNodeSpecBatch](https://help.aliyun.com/document_detail/61923.html) operation.
     *
     * @param request - ModifyDBInstanceSpecRequest
     *
     * @returns ModifyDBInstanceSpecResponse
     *
     * @param ModifyDBInstanceSpecRequest $request
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * Modifies the transparent data encryption (TDE) status of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * TDE allows you to perform real-time I/O encryption and decryption on data files. Data is encrypted before it is written to a disk and is decrypted when it is read from the disk to the memory. For more information, see [Configure TDE](https://help.aliyun.com/document_detail/131048.html).
     * >  TDE cannot be disabled after it is enabled.
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   A replica set or sharded cluster instance is used.
     * *   The storage engine of the instance is WiredTiger.
     * *   The instance uses local disks to store data.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *
     * @param request - ModifyDBInstanceTDERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceTDEResponse
     *
     * @param ModifyDBInstanceTDERequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->encryptorName) {
            @$query['EncryptorName'] = $request->encryptorName;
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

        if (null !== $request->roleARN) {
            @$query['RoleARN'] = $request->roleARN;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        if (null !== $request->TDEStatus) {
            @$query['TDEStatus'] = $request->TDEStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the transparent data encryption (TDE) status of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * TDE allows you to perform real-time I/O encryption and decryption on data files. Data is encrypted before it is written to a disk and is decrypted when it is read from the disk to the memory. For more information, see [Configure TDE](https://help.aliyun.com/document_detail/131048.html).
     * >  TDE cannot be disabled after it is enabled.
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   A replica set or sharded cluster instance is used.
     * *   The storage engine of the instance is WiredTiger.
     * *   The instance uses local disks to store data.
     * *   The database engine version of the instance is 4.0 or 4.2. If the database engine version is earlier than 4.0, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine.
     *
     * @param request - ModifyDBInstanceTDERequest
     *
     * @returns ModifyDBInstanceTDEResponse
     *
     * @param ModifyDBInstanceTDERequest $request
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * Modifies the global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalSecurityIPGroupResponse
     *
     * @param ModifyGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GIpList) {
            @$query['GIpList'] = $request->GIpList;
        }

        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
     * Modifies the global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyGlobalSecurityIPGroupRequest
     *
     * @returns ModifyGlobalSecurityIPGroupResponse
     *
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
     * Modifies the name of a global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyGlobalSecurityIPGroupNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalSecurityIPGroupNameResponse
     *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
     * Modifies the name of a global IP whitelist template associated with an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyGlobalSecurityIPGroupNameRequest
     *
     * @returns ModifyGlobalSecurityIPGroupNameResponse
     *
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
     * Modifies the mapping between a global whitelist template and an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyGlobalSecurityIPGroupRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalSecurityIPGroupRelationResponse
     *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
     * Modifies the mapping between a global whitelist template and an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifyGlobalSecurityIPGroupRelationRequest
     *
     * @returns ModifyGlobalSecurityIPGroupRelationResponse
     *
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
     * Enables or disables auto-renewal for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is applicable to subscription instances.
     * >  When auto-renewal is enabled, your payment will be collected nine days before the expiration date of ApsaraDB for MongoDB. Ensure that your account has sufficient balance.
     *
     * @param request - ModifyInstanceAutoRenewalAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAutoRenewalAttributeResponse
     *
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
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
     * Enables or disables auto-renewal for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is applicable to subscription instances.
     * >  When auto-renewal is enabled, your payment will be collected nine days before the expiration date of ApsaraDB for MongoDB. Ensure that your account has sufficient balance.
     *
     * @param request - ModifyInstanceAutoRenewalAttributeRequest
     *
     * @returns ModifyInstanceAutoRenewalAttributeResponse
     *
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
     * Disables password-free access over Virtual Private Cloud (VPC) for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The database engine version of the instance is 4.0 (with the minor version of mongodb_20190408_3.0.11 or later) or 4.2. You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/62010.html) operation to view the database engine version of the instance. If necessary, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine version of the instance.
     * *   The network type of the instance must be VPC. If the network type of the instance is classic network, you must call the [ModifyDBInstanceNetworkType](https://help.aliyun.com/document_detail/62138.html) operation to change the network type to VPC.
     * *   You can only disable but not enable password-free access over VPC.
     *
     * @param request - ModifyInstanceVpcAuthModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceVpcAuthModeResponse
     *
     * @param ModifyInstanceVpcAuthModeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->vpcAuthMode) {
            @$query['VpcAuthMode'] = $request->vpcAuthMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Disables password-free access over Virtual Private Cloud (VPC) for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * Before you call this operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is a replica set or sharded cluster instance.
     * *   The database engine version of the instance is 4.0 (with the minor version of mongodb_20190408_3.0.11 or later) or 4.2. You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/62010.html) operation to view the database engine version of the instance. If necessary, you can call the [UpgradeDBInstanceEngineVersion](https://help.aliyun.com/document_detail/67608.html) operation to upgrade the database engine version of the instance.
     * *   The network type of the instance must be VPC. If the network type of the instance is classic network, you must call the [ModifyDBInstanceNetworkType](https://help.aliyun.com/document_detail/62138.html) operation to change the network type to VPC.
     * *   You can only disable but not enable password-free access over VPC.
     *
     * @param request - ModifyInstanceVpcAuthModeRequest
     *
     * @returns ModifyInstanceVpcAuthModeResponse
     *
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
     * Changes the specifications and storage capacity of a node of an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * > This operation is applicable only to sharded cluster instances.
     *
     * @param request - ModifyNodeSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeSpecResponse
     *
     * @param ModifyNodeSpecRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyNodeSpecResponse
     */
    public function modifyNodeSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->fromApp) {
            @$query['FromApp'] = $request->fromApp;
        }

        if (null !== $request->nodeClass) {
            @$query['NodeClass'] = $request->nodeClass;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->nodeStorage) {
            @$query['NodeStorage'] = $request->nodeStorage;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->readonlyReplicas) {
            @$query['ReadonlyReplicas'] = $request->readonlyReplicas;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->targetHiddenZoneId) {
            @$query['TargetHiddenZoneId'] = $request->targetHiddenZoneId;
        }

        if (null !== $request->targetSecondaryZoneId) {
            @$query['TargetSecondaryZoneId'] = $request->targetSecondaryZoneId;
        }

        if (null !== $request->targetVswitchId) {
            @$query['TargetVswitchId'] = $request->targetVswitchId;
        }

        if (null !== $request->targetZoneId) {
            @$query['TargetZoneId'] = $request->targetZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the specifications and storage capacity of a node of an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB.
     * > This operation is applicable only to sharded cluster instances.
     *
     * @param request - ModifyNodeSpecRequest
     *
     * @returns ModifyNodeSpecResponse
     *
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
     * Changes the configurations of mongos or shard nodes in an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * This operation is applicable only to sharded cluster instances.
     * When you upgrade or downgrade the configurations of multiple sharded cluster instances in batches, the specifications of the instances are limited. For example, if you want to expand the storage capacity of the instances, the storage capacity of the instances after expansion must be greater than the current capacity. When the specifications of multiple sharded cluster instances are different, limits are defined based on the specifications of a random sharded cluster instance. In this case, you may be unable to upgrade or downgrade the configurations of the instances. In this case, we recommend that you call the ModifyNodeSpec operation to individually change the configurations of each sharded cluster instance.
     *
     * @param request - ModifyNodeSpecBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeSpecBatchResponse
     *
     * @param ModifyNodeSpecBatchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyNodeSpecBatchResponse
     */
    public function modifyNodeSpecBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->nodesInfo) {
            @$query['NodesInfo'] = $request->nodesInfo;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->targetHiddenZoneId) {
            @$query['TargetHiddenZoneId'] = $request->targetHiddenZoneId;
        }

        if (null !== $request->targetSecondaryZoneId) {
            @$query['TargetSecondaryZoneId'] = $request->targetSecondaryZoneId;
        }

        if (null !== $request->targetVswitchId) {
            @$query['TargetVswitchId'] = $request->targetVswitchId;
        }

        if (null !== $request->targetZoneId) {
            @$query['TargetZoneId'] = $request->targetZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Changes the configurations of mongos or shard nodes in an ApsaraDB for MongoDB sharded cluster instance.
     *
     * @remarks
     * Make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB before you call this operation.
     * This operation is applicable only to sharded cluster instances.
     * When you upgrade or downgrade the configurations of multiple sharded cluster instances in batches, the specifications of the instances are limited. For example, if you want to expand the storage capacity of the instances, the storage capacity of the instances after expansion must be greater than the current capacity. When the specifications of multiple sharded cluster instances are different, limits are defined based on the specifications of a random sharded cluster instance. In this case, you may be unable to upgrade or downgrade the configurations of the instances. In this case, we recommend that you call the ModifyNodeSpec operation to individually change the configurations of each sharded cluster instance.
     *
     * @param request - ModifyNodeSpecBatchRequest
     *
     * @returns ModifyNodeSpecBatchResponse
     *
     * @param ModifyNodeSpecBatchRequest $request
     *
     * @return ModifyNodeSpecBatchResponse
     */
    public function modifyNodeSpecBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodeSpecBatchWithOptions($request, $runtime);
    }

    /**
     * Modifies the parameters of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the Running state when you call this operation.
     * *   If you call this operation to modify specific instance parameters and the modification for part of the parameters can take effect only after an instance restart, the instance is automatically restarted after this operation is called. You can call the [DescribeParameterTemplates](https://help.aliyun.com/document_detail/67618.html) operation to query the parameters that take effect only after the instance is restarted.
     *
     * @param request - ModifyParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyParametersResponse
     *
     * @param ModifyParametersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the parameters of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     *   The instance must be in the Running state when you call this operation.
     * *   If you call this operation to modify specific instance parameters and the modification for part of the parameters can take effect only after an instance restart, the instance is automatically restarted after this operation is called. You can call the [DescribeParameterTemplates](https://help.aliyun.com/document_detail/67618.html) operation to query the parameters that take effect only after the instance is restarted.
     *
     * @param request - ModifyParametersRequest
     *
     * @returns ModifyParametersResponse
     *
     * @param ModifyParametersRequest $request
     *
     * @return ModifyParametersResponse
     */
    public function modifyParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParametersWithOptions($request, $runtime);
    }

    /**
     * Moves an ApsaraDB for MongoDB instance to a specified resource group.
     *
     * @remarks
     * Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * @param request - ModifyResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyResourceGroupResponse
     *
     * @param ModifyResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Moves an ApsaraDB for MongoDB instance to a specified resource group.
     *
     * @remarks
     * Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * @param request - ModifyResourceGroupRequest
     *
     * @returns ModifyResourceGroupResponse
     *
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
     * You can call this operation to modify an ECS Security group that is bound to an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  For a sharded cluster instance, the bound ECS security group takes effect only for mongos nodes.
     *
     * @param request - ModifySecurityGroupConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityGroupConfigurationResponse
     *
     * @param ModifySecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * You can call this operation to modify an ECS Security group that is bound to an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  For a sharded cluster instance, the bound ECS security group takes effect only for mongos nodes.
     *
     * @param request - ModifySecurityGroupConfigurationRequest
     *
     * @returns ModifySecurityGroupConfigurationResponse
     *
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
     * Modifies the IP address whitelist of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifySecurityIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityIpsResponse
     *
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
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

        if (null !== $request->securityIpGroupAttribute) {
            @$query['SecurityIpGroupAttribute'] = $request->securityIpGroupAttribute;
        }

        if (null !== $request->securityIpGroupName) {
            @$query['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        if (null !== $request->securityIps) {
            @$query['SecurityIps'] = $request->securityIps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the IP address whitelist of an ApsaraDB for MongoDB instance.
     *
     * @param request - ModifySecurityIpsRequest
     *
     * @returns ModifySecurityIpsResponse
     *
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
     * 修改MongoDB实例的SRV连接地址
     *
     * @param request - ModifySrvNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySrvNetworkAddressResponse
     *
     * @param ModifySrvNetworkAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySrvNetworkAddressResponse
     */
    public function modifySrvNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionType) {
            @$query['ConnectionType'] = $request->connectionType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->newConnectionString) {
            @$query['NewConnectionString'] = $request->newConnectionString;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySrvNetworkAddress',
            'version' => '2015-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySrvNetworkAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改MongoDB实例的SRV连接地址
     *
     * @param request - ModifySrvNetworkAddressRequest
     *
     * @returns ModifySrvNetworkAddressResponse
     *
     * @param ModifySrvNetworkAddressRequest $request
     *
     * @return ModifySrvNetworkAddressResponse
     */
    public function modifySrvNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySrvNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * Modifies the information of a task in the task center for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The actions performed by this operation for a task vary based on the current state of the task. The supported actions for a task can be obtained from the value of the actionInfo parameter in the DescribeHistoryTasks operation.
     *
     * @param request - ModifyTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTaskInfoResponse
     *
     * @param ModifyTaskInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyTaskInfoResponse
     */
    public function modifyTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionParams) {
            @$query['ActionParams'] = $request->actionParams;
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

        if (null !== $request->stepName) {
            @$query['StepName'] = $request->stepName;
        }

        if (null !== $request->taskAction) {
            @$query['TaskAction'] = $request->taskAction;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Modifies the information of a task in the task center for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The actions performed by this operation for a task vary based on the current state of the task. The supported actions for a task can be obtained from the value of the actionInfo parameter in the DescribeHistoryTasks operation.
     *
     * @param request - ModifyTaskInfoRequest
     *
     * @returns ModifyTaskInfoResponse
     *
     * @param ModifyTaskInfoRequest $request
     *
     * @return ModifyTaskInfoResponse
     */
    public function modifyTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTaskInfoWithOptions($request, $runtime);
    }

    /**
     * Releases the internal endpoint of a shard or Configserver node in a sharded cluster instance.
     *
     * @remarks
     *   This operation can be used to release the internal endpoint of a shard or Configserver node in a sharded cluster instance. For more information, see [Release the endpoint of a shard or Configserver node](https://help.aliyun.com/document_detail/134067.html).
     * *   To release the public endpoint of a shard or Configserver node in a sharded cluster instance, you can call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation.
     *
     * @param request - ReleaseNodePrivateNetworkAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseNodePrivateNetworkAddressResponse
     *
     * @param ReleaseNodePrivateNetworkAddressRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ReleaseNodePrivateNetworkAddressResponse
     */
    public function releaseNodePrivateNetworkAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionType) {
            @$query['ConnectionType'] = $request->connectionType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Releases the internal endpoint of a shard or Configserver node in a sharded cluster instance.
     *
     * @remarks
     *   This operation can be used to release the internal endpoint of a shard or Configserver node in a sharded cluster instance. For more information, see [Release the endpoint of a shard or Configserver node](https://help.aliyun.com/document_detail/134067.html).
     * *   To release the public endpoint of a shard or Configserver node in a sharded cluster instance, you can call the [ReleasePublicNetworkAddress](https://help.aliyun.com/document_detail/67604.html) operation.
     *
     * @param request - ReleaseNodePrivateNetworkAddressRequest
     *
     * @returns ReleaseNodePrivateNetworkAddressResponse
     *
     * @param ReleaseNodePrivateNetworkAddressRequest $request
     *
     * @return ReleaseNodePrivateNetworkAddressResponse
     */
    public function releaseNodePrivateNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseNodePrivateNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * Releases the public endpoint of an ApsaraDB for MongoDB instance.
     *
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
        if (null !== $request->connectionType) {
            @$query['ConnectionType'] = $request->connectionType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Releases the public endpoint of an ApsaraDB for MongoDB instance.
     *
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
     * Manually renews an ApsaraDB for MongoDB subscription instance.
     *
     * @remarks
     * Make sure that you fully understand the billing methods and pricing of ApsaraDB for MongoDB before you call this operation. For more information about the pricing of ApsaraDB for MongoDB, visit the [pricing tab of the product buy page](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is only applicable to instances that use the subscription billing method.
     *
     * @param request - RenewDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewDBInstanceResponse
     *
     * @param RenewDBInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RenewDBInstanceResponse
     */
    public function renewDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
     * Manually renews an ApsaraDB for MongoDB subscription instance.
     *
     * @remarks
     * Make sure that you fully understand the billing methods and pricing of ApsaraDB for MongoDB before you call this operation. For more information about the pricing of ApsaraDB for MongoDB, visit the [pricing tab of the product buy page](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * This operation is only applicable to instances that use the subscription billing method.
     *
     * @param request - RenewDBInstanceRequest
     *
     * @returns RenewDBInstanceResponse
     *
     * @param RenewDBInstanceRequest $request
     *
     * @return RenewDBInstanceResponse
     */
    public function renewDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Resets the password of the root account in an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  This operation can be used to reset only the password of the root account of an instance.
     *
     * @param request - ResetAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Resets the password of the root account in an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * >  This operation can be used to reset only the password of the root account of an instance.
     *
     * @param request - ResetAccountPasswordRequest
     *
     * @returns ResetAccountPasswordResponse
     *
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
     * Restarts an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation can also be used to restart an instance, or restart a shard or mongos node in a sharded cluster instance.
     *
     * @param request - RestartDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBInstanceResponse
     *
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Restarts an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * This operation can also be used to restart an instance, or restart a shard or mongos node in a sharded cluster instance.
     *
     * @param request - RestartDBInstanceRequest
     *
     * @returns RestartDBInstanceResponse
     *
     * @param RestartDBInstanceRequest $request
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Restarts a node in an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can call this operation to restart a node in a replica set instance or a child instance in a sharded cluster instance.
     * >  When you call this operation, the instance must meet the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a replica set or sharded cluster instance of the standard edition.
     *
     * @param request - RestartNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartNodeResponse
     *
     * @param RestartNodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RestartNodeResponse
     */
    public function restartNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Restarts a node in an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * You can call this operation to restart a node in a replica set instance or a child instance in a sharded cluster instance.
     * >  When you call this operation, the instance must meet the following requirements:
     * *   The instance is in the Running state.
     * *   The instance is a replica set or sharded cluster instance of the standard edition.
     *
     * @param request - RestartNodeRequest
     *
     * @returns RestartNodeResponse
     *
     * @param RestartNodeRequest $request
     *
     * @return RestartNodeResponse
     */
    public function restartNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartNodeWithOptions($request, $runtime);
    }

    /**
     * Switches the primary and secondary nodes for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The instance must be running when you call this operation.
     * >
     * *   This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     * *   On replica set instances, the switch is performed between instances. On sharded cluster instances, the switch is performed between shards.
     *
     * @param request - SwitchDBInstanceHARequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchDBInstanceHAResponse
     *
     * @param SwitchDBInstanceHARequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
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

        if (null !== $request->roleIds) {
            @$query['RoleIds'] = $request->roleIds;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Switches the primary and secondary nodes for an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The instance must be running when you call this operation.
     * >
     * *   This operation is applicable to replica set instances and sharded cluster instances, but cannot be performed on standalone instances.
     * *   On replica set instances, the switch is performed between instances. On sharded cluster instances, the switch is performed between shards.
     *
     * @param request - SwitchDBInstanceHARequest
     *
     * @returns SwitchDBInstanceHAResponse
     *
     * @param SwitchDBInstanceHARequest $request
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * Binds tags to ApsaraDB for MongoDB instances.
     *
     * @remarks
     * If you have a large number of instances, you can create multiple tags, bind the tags to the instances, and filter the instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and bound to the specified instance.
     * *   If a tag that has the same key is already bound to the instance, the new tag overwrites the existing tag.
     * *   You can bind up to 20 tags to each instance.
     * *   You can bind tags to up to 50 instances each time you call the operation.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Binds tags to ApsaraDB for MongoDB instances.
     *
     * @remarks
     * If you have a large number of instances, you can create multiple tags, bind the tags to the instances, and filter the instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and bound to the specified instance.
     * *   If a tag that has the same key is already bound to the instance, the new tag overwrites the existing tag.
     * *   You can bind up to 20 tags to each instance.
     * *   You can bind tags to up to 50 instances each time you call the operation.
     *
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
     * Switches the backup mode of an ApsaraDB for MongoDB sharded cluster instance to the cluster backup mode. After the instance is switched to the cluster backup mode, the instance supports high-frequency backup.
     *
     * @remarks
     *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. Cloud disk-based sharded cluster instances that are created on or after October 19, 2023 are set to the cluster backup mode by default.
     *
     * @param request - TransferClusterBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferClusterBackupResponse
     *
     * @param TransferClusterBackupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TransferClusterBackupResponse
     */
    public function transferClusterBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Switches the backup mode of an ApsaraDB for MongoDB sharded cluster instance to the cluster backup mode. After the instance is switched to the cluster backup mode, the instance supports high-frequency backup.
     *
     * @remarks
     *   The instance is an ApsaraDB for MongoDB sharded cluster instance that runs MongoDB 4.4 or later and uses enhanced SSDs (ESSDs) to store data.
     * *   You can call the TransferClusterBackup operation only for instances that are created before October 19, 2023 to switch the instances to the cluster backup mode. Cloud disk-based sharded cluster instances that are created on or after October 19, 2023 are set to the cluster backup mode by default.
     *
     * @param request - TransferClusterBackupRequest
     *
     * @returns TransferClusterBackupResponse
     *
     * @param TransferClusterBackupRequest $request
     *
     * @return TransferClusterBackupResponse
     */
    public function transferClusterBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferClusterBackupWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of an instance from pay-as-you-go to subscription or from subscription to pay-as-you-go.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   Your instance has no unpaid billing method change orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * > To change the billing method of an instance whose instance type is no longer available to purchase, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to change the instance type first.
     *
     * @param request - TransformInstanceChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransformInstanceChargeTypeResponse
     *
     * @param TransformInstanceChargeTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TransformInstanceChargeTypeResponse
     */
    public function transformInstanceChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
     * Changes the billing method of an instance from pay-as-you-go to subscription or from subscription to pay-as-you-go.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/product/apsaradb-for-mongodb/pricing) of ApsaraDB for MongoDB
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the Running state.
     * *   Your instance has no unpaid billing method change orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * > To change the billing method of an instance whose instance type is no longer available to purchase, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to change the instance type first.
     *
     * @param request - TransformInstanceChargeTypeRequest
     *
     * @returns TransformInstanceChargeTypeResponse
     *
     * @param TransformInstanceChargeTypeRequest $request
     *
     * @return TransformInstanceChargeTypeResponse
     */
    public function transformInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of an ApsaraDB for MongoDB instance from pay-as-you-go to subscription.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * A subscription instance cannot be changed to a pay-as-you-go instance. To avoid wasting resources, proceed with caution.
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the running state.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The instance has no unpaid subscription orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * >  To change the billing method of an instance whose instance type is no longer available to subscription, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to first change the instance type.
     *
     * @param request - TransformToPrePaidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransformToPrePaidResponse
     *
     * @param TransformToPrePaidRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TransformToPrePaidResponse
     */
    public function transformToPrePaidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
     * Changes the billing method of an ApsaraDB for MongoDB instance from pay-as-you-go to subscription.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing).
     * A subscription instance cannot be changed to a pay-as-you-go instance. To avoid wasting resources, proceed with caution.
     * Before you call this API operation, make sure that the ApsaraDB for MongoDB instance meets the following requirements:
     * *   The instance is in the running state.
     * *   The billing method of the instance is pay-as-you-go.
     * *   The instance has no unpaid subscription orders.
     * *   The instance type is available for purchase. For more information about unavailable instance types, see [Instance types](https://help.aliyun.com/document_detail/57141.html).
     * >  To change the billing method of an instance whose instance type is no longer available to subscription, call the [ModifyDBInstanceSpec](https://help.aliyun.com/document_detail/61816.html) or [ModifyNodeSpec](https://help.aliyun.com/document_detail/61923.html) operation to first change the instance type.
     *
     * @param request - TransformToPrePaidRequest
     *
     * @returns TransformToPrePaidResponse
     *
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
     * Removes a tag if the tag is not added to another instance.
     *
     * @remarks
     * >
     * *   You can remove up to 20 tags at a time.
     * *   If you remove a tag from all instances, the tag is automatically deleted.
     *
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Removes a tag if the tag is not added to another instance.
     *
     * @remarks
     * >
     * *   You can remove up to 20 tags at a time.
     * *   If you remove a tag from all instances, the tag is automatically deleted.
     *
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
     * Upgrades the database version of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The instance must be in the running state when you call this operation.
     * > * The available database versions depend on the storage engine used by the instance. For more information, see [Upgrades of MongoDB major versions](https://help.aliyun.com/document_detail/398673.html). You can also call the [DescribeAvailableEngineVersion](https://help.aliyun.com/document_detail/141355.html) operation to query the available database versions.
     * > * You cannot downgrade the MongoDB version of an instance after you upgrade it.
     * > * The instance is automatically restarted for two to three times during the upgrade process. Make sure that you upgrade the instance during off-peak hours.
     *
     * @param request - UpgradeDBInstanceEngineVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBInstanceEngineVersionResponse
     *
     * @param UpgradeDBInstanceEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
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

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Upgrades the database version of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * The instance must be in the running state when you call this operation.
     * > * The available database versions depend on the storage engine used by the instance. For more information, see [Upgrades of MongoDB major versions](https://help.aliyun.com/document_detail/398673.html). You can also call the [DescribeAvailableEngineVersion](https://help.aliyun.com/document_detail/141355.html) operation to query the available database versions.
     * > * You cannot downgrade the MongoDB version of an instance after you upgrade it.
     * > * The instance is automatically restarted for two to three times during the upgrade process. Make sure that you upgrade the instance during off-peak hours.
     *
     * @param request - UpgradeDBInstanceEngineVersionRequest
     *
     * @returns UpgradeDBInstanceEngineVersionResponse
     *
     * @param UpgradeDBInstanceEngineVersionRequest $request
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceEngineVersionWithOptions($request, $runtime);
    }

    /**
     * Upgrades the minor version of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * When you call the UpgradeDBInstanceKernelVersion operation, the instance must be in the Running state.
     * > * The UpgradeDBInstanceKernelVersion operation is applicable to replica set and sharded cluster instances, but not to standalone instances.
     * > * The instance will be restarted once during the upgrade. Call this operation during off-peak hours.
     *
     * @param request - UpgradeDBInstanceKernelVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBInstanceKernelVersionResponse
     *
     * @param UpgradeDBInstanceKernelVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Upgrades the minor version of an ApsaraDB for MongoDB instance.
     *
     * @remarks
     * When you call the UpgradeDBInstanceKernelVersion operation, the instance must be in the Running state.
     * > * The UpgradeDBInstanceKernelVersion operation is applicable to replica set and sharded cluster instances, but not to standalone instances.
     * > * The instance will be restarted once during the upgrade. Call this operation during off-peak hours.
     *
     * @param request - UpgradeDBInstanceKernelVersionRequest
     *
     * @returns UpgradeDBInstanceKernelVersionResponse
     *
     * @param UpgradeDBInstanceKernelVersionRequest $request
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }
}
