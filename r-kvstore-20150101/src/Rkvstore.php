<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AddShardingNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AddShardingNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateDirectConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateDirectConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CancelActiveOperationTasksResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateParameterGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateParameterGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairKVCacheVNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairKVCacheVNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTCInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTCInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteParameterGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteParameterGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteShardingNodeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DeleteShardingNodeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTasksResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupSupportParamRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupSupportParamResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupTemplateListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupTemplateListResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstancesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstancesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstanceAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstanceAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\MasterNodeShutDownFailOverRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\MasterNodeShutDownFailOverResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyActiveOperationTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyActiveOperationTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAuditLogConfigRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyAuditLogConfigResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyBackupExpireTimeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyBackupExpireTimeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyDBInstanceAutoUpgradeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyDBInstanceAutoUpgradeResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceBandwidthRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceBandwidthResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyParameterGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyParameterGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyTairKVCacheCustomInstanceAttributeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyTairKVCacheCustomInstanceAttributeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyTaskInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyTaskInfoResponse;
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
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResetTairKVCacheCustomInstancePasswordRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResetTairKVCacheCustomInstancePasswordResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResizeTairKVCacheCustomInstanceDiskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ResizeTairKVCacheCustomInstanceDiskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartTairKVCacheCustomInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestartTairKVCacheCustomInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\StartTairKVCacheCustomInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\StartTairKVCacheCustomInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\StopTairKVCacheCustomInstanceRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\StopTairKVCacheCustomInstanceResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceHARequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceHAResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceProxyRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceProxyResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceZoneFailOverRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchInstanceZoneFailOverResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchNetworkRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SwitchNetworkResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SyncDtsStatusRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\SyncDtsStatusResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToEcsRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToEcsResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToPrePaidRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\TransformToPrePaidResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UnlockDBInstanceWriteRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UnlockDBInstanceWriteResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\UntagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Rkvstore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'r-kvstore.aliyuncs.com',
            'cn-beijing' => 'r-kvstore.aliyuncs.com',
            'cn-wulanchabu' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen' => 'r-kvstore.aliyuncs.com',
            'cn-heyuan' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-finance' => 'r-kvstore.aliyuncs.com',
            'ap-northeast-2-pop' => 'r-kvstore.aliyuncs.com',
            'cn-beijing-finance-1' => 'r-kvstore.aliyuncs.com',
            'cn-beijing-finance-pop' => 'r-kvstore.aliyuncs.com',
            'cn-beijing-gov-1' => 'r-kvstore.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'r-kvstore.aliyuncs.com',
            'cn-edge-1' => 'r-kvstore.aliyuncs.com',
            'cn-fujian' => 'r-kvstore.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-test-306' => 'r-kvstore.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'r-kvstore.aliyuncs.com',
            'cn-qingdao-nebula' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-inner' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-inner' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'r-kvstore.aliyuncs.com',
            'cn-wuhan' => 'r-kvstore.aliyuncs.com',
            'cn-yushanfang' => 'r-kvstore.aliyuncs.com',
            'cn-zhangbei' => 'r-kvstore.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'r-kvstore.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'r-kvstore.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'r-kvstore.aliyuncs.com',
            'eu-west-1-oxs' => 'r-kvstore.aliyuncs.com',
            'rus-west-1-pop' => 'r-kvstore.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds one or more data shards to a Tair cluster instance.
     *
     * @remarks
     * This operation is available only for cluster instances that use cloud disks.
     *
     * @param request - AddShardingNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddShardingNodeResponse
     *
     * @param AddShardingNodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddShardingNodeResponse
     */
    public function addShardingNodeWithOptions($request, $runtime)
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

        if (null !== $request->forceTrans) {
            @$query['ForceTrans'] = $request->forceTrans;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddShardingNode',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddShardingNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more data shards to a Tair cluster instance.
     *
     * @remarks
     * This operation is available only for cluster instances that use cloud disks.
     *
     * @param request - AddShardingNodeRequest
     *
     * @returns AddShardingNodeResponse
     *
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
     * Applies for a private endpoint for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Clients can bypass proxy nodes and use private endpoints to connect to cluster instances. This is similar to the connection to native Redis clusters. The direct connection mode can reduce communication overheads and the response time of Tair (Redis OSS-compatible).
     * To call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a cluster instance.
     * *   The instance is deployed in classic mode.
     * *   The instance is deployed in a virtual private cloud (VPC). If the instance is deployed in the classic network, you can call the [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html) operation to change the network type to VPC.
     * *   SSL encryption is disabled for the instance. If SSL encryption is enabled, you can call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation to disable SSL encryption.
     *
     * @param request - AllocateDirectConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateDirectConnectionResponse
     *
     * @param AllocateDirectConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateDirectConnectionResponse
     */
    public function allocateDirectConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
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

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
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
            'action' => 'AllocateDirectConnection',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateDirectConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a private endpoint for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Clients can bypass proxy nodes and use private endpoints to connect to cluster instances. This is similar to the connection to native Redis clusters. The direct connection mode can reduce communication overheads and the response time of Tair (Redis OSS-compatible).
     * To call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a cluster instance.
     * *   The instance is deployed in classic mode.
     * *   The instance is deployed in a virtual private cloud (VPC). If the instance is deployed in the classic network, you can call the [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html) operation to change the network type to VPC.
     * *   SSL encryption is disabled for the instance. If SSL encryption is enabled, you can call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation to disable SSL encryption.
     *
     * @param request - AllocateDirectConnectionRequest
     *
     * @returns AllocateDirectConnectionResponse
     *
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
     * Applies for a public endpoint for an ApsaraDB for Redis instance.
     *
     * @remarks
     * You can also apply for public endpoints in the ApsaraDB for Redis console. For more information, see [Use a public endpoint to connect to an ApsaraDB for Redis instance](https://help.aliyun.com/document_detail/43850.html).
     *
     * @param request - AllocateInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
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

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
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
            'action' => 'AllocateInstancePublicConnection',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a public endpoint for an ApsaraDB for Redis instance.
     *
     * @remarks
     * You can also apply for public endpoints in the ApsaraDB for Redis console. For more information, see [Use a public endpoint to connect to an ApsaraDB for Redis instance](https://help.aliyun.com/document_detail/43850.html).
     *
     * @param request - AllocateInstancePublicConnectionRequest
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
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
     * Cancels O\\\\\\&M events at a time.
     *
     * @remarks
     * O\\&M events cannot be canceled in the following scenarios:
     * *   The allowCancel parameter is set to 0.
     * *   The current time is later than the start time of the O\\&M event.
     * *   The state value of the O\\&M event is not 3.
     *
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
            'version' => '2015-01-01',
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
     * Cancels O\\\\\\&M events at a time.
     *
     * @remarks
     * O\\&M events cannot be canceled in the following scenarios:
     * *   The allowCancel parameter is set to 0.
     * *   The current time is later than the start time of the O\\&M event.
     * *   The state value of the O\\&M event is not 3.
     *
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
     * Queries whether a Tair (Redis OSS-compatible) instance has the permissions to use Key Management Service (KMS).
     *
     * @remarks
     *   For information about Transparent Data Encryption (TDE) and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * *   If the Tair (Redis OSS-compatible) instance is authorized to use KMS, you can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable TDE.
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

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCloudResourceAuthorized',
            'version' => '2015-01-01',
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
     * Queries whether a Tair (Redis OSS-compatible) instance has the permissions to use Key Management Service (KMS).
     *
     * @remarks
     *   For information about Transparent Data Encryption (TDE) and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * *   If the Tair (Redis OSS-compatible) instance is authorized to use KMS, you can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable TDE.
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
     * Creates an account that has specific permissions for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the running state.
     * *   You can create up to 18 accounts for an instance.
     * >  For more information about how to create an account in the console, see [Manage database accounts](https://help.aliyun.com/document_detail/92665.html).
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
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2015-01-01',
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
     * Creates an account that has specific permissions for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the running state.
     * *   You can create up to 18 accounts for an instance.
     * >  For more information about how to create an account in the console, see [Manage database accounts](https://help.aliyun.com/document_detail/92665.html).
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
     * Backs up a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also back up an instance in the Tair (Redis OSS-compatible) console. For more information, see [Backup and recovery](https://help.aliyun.com/document_detail/43886.html).
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
        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackup',
            'version' => '2015-01-01',
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
     * Backs up a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also back up an instance in the Tair (Redis OSS-compatible) console. For more information, see [Backup and recovery](https://help.aliyun.com/document_detail/43886.html).
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
     * Creates a cache analysis task.
     *
     * @remarks
     * This operation is no longer available. Use the new operation. For more information, see [Real-time key statistics and offline key analysis](https://help.aliyun.com/document_detail/184226.html).
     *
     * @param request - CreateCacheAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCacheAnalysisTaskResponse
     *
     * @param CreateCacheAnalysisTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCacheAnalysisTask',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCacheAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cache analysis task.
     *
     * @remarks
     * This operation is no longer available. Use the new operation. For more information, see [Real-time key statistics and offline key analysis](https://help.aliyun.com/document_detail/184226.html).
     *
     * @param request - CreateCacheAnalysisTaskRequest
     *
     * @returns CreateCacheAnalysisTaskResponse
     *
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
     * Converts an existing Tair DRAM-based classic instance to the first child instance of a distributed instance.
     *
     * @remarks
     * You can call this operation to convert an existing instance to the first child instance of a distributed instance. After the instance is converted, the distributed instance is created. Before you call this operation, make sure that the following requirements are met:
     * *   The instance that you want to convert must be a Tair [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses the classic deployment mode.
     * *   If the existing instance is a cluster instance, the direct connection mode must be disabled for the instance. For more information, see [Release a private endpoint](https://help.aliyun.com/document_detail/150047.html).
     * >  You can also call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation to create an instance that is specified as the first child instance of a distributed instance. After the child instance is created, the distributed instance to which the child instance belongs is created.
     *
     * @param request - CreateGlobalDistributeCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGlobalDistributeCacheResponse
     *
     * @param CreateGlobalDistributeCacheRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalDistributeCacheResponse
     */
    public function createGlobalDistributeCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
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

        if (null !== $request->seedSubInstanceId) {
            @$query['SeedSubInstanceId'] = $request->seedSubInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGlobalDistributeCache',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGlobalDistributeCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts an existing Tair DRAM-based classic instance to the first child instance of a distributed instance.
     *
     * @remarks
     * You can call this operation to convert an existing instance to the first child instance of a distributed instance. After the instance is converted, the distributed instance is created. Before you call this operation, make sure that the following requirements are met:
     * *   The instance that you want to convert must be a Tair [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses the classic deployment mode.
     * *   If the existing instance is a cluster instance, the direct connection mode must be disabled for the instance. For more information, see [Release a private endpoint](https://help.aliyun.com/document_detail/150047.html).
     * >  You can also call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation to create an instance that is specified as the first child instance of a distributed instance. After the child instance is created, the distributed instance to which the child instance belongs is created.
     *
     * @param request - CreateGlobalDistributeCacheRequest
     *
     * @returns CreateGlobalDistributeCacheResponse
     *
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
            'action' => 'CreateGlobalSecurityIPGroup',
            'version' => '2015-01-01',
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
     * Creates a Tair (Redis OSS-compatible) instance. If you want to create a Tair (Enterprise Edition) cloud-native instance, you can call the CreateTairInstance operation.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * You can call this operation to create a Tair (Redis OSS-compatible) instance or a classic Tair DRAM-based instance. To create a cloud-native Tair instance, call the [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation.
     * > For more information about how to create an instance that meets your requirements in the Tair (Redis OSS-compatible) console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appendonly) {
            @$query['Appendonly'] = $request->appendonly;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterBackupId) {
            @$query['ClusterBackupId'] = $request->clusterBackupId;
        }

        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->globalInstance) {
            @$query['GlobalInstance'] = $request->globalInstance;
        }

        if (null !== $request->globalInstanceId) {
            @$query['GlobalInstanceId'] = $request->globalInstanceId;
        }

        if (null !== $request->globalSecurityGroupIds) {
            @$query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
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

        if (null !== $request->paramGroupId) {
            @$query['ParamGroupId'] = $request->paramGroupId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->readOnlyCount) {
            @$query['ReadOnlyCount'] = $request->readOnlyCount;
        }

        if (null !== $request->recoverConfigMode) {
            @$query['RecoverConfigMode'] = $request->recoverConfigMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaCount) {
            @$query['ReplicaCount'] = $request->replicaCount;
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

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        if (null !== $request->slaveReadOnlyCount) {
            @$query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }

        if (null !== $request->slaveReplicaCount) {
            @$query['SlaveReplicaCount'] = $request->slaveReplicaCount;
        }

        if (null !== $request->srcDBInstanceId) {
            @$query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
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
            'action' => 'CreateInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Tair (Redis OSS-compatible) instance. If you want to create a Tair (Enterprise Edition) cloud-native instance, you can call the CreateTairInstance operation.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * You can call this operation to create a Tair (Redis OSS-compatible) instance or a classic Tair DRAM-based instance. To create a cloud-native Tair instance, call the [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation.
     * > For more information about how to create an instance that meets your requirements in the Tair (Redis OSS-compatible) console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
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
     * Creates multiple Tair (Redis OSS-compatible) instances at a time.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >  You can call this operation to create classic Redis Open-Source Edition instances or classic Tair DRAM-based instances. We recommend that you use an API operation for creating a single instance:
     * *   [CreateInstance](https://help.aliyun.com/document_detail/473757.html): creates a Redis Open-Source instance or a classic Tair DRAM-based instance.
     * *   [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html): creates a Tair (Enterprise Edition) instance. The instance can be a DRAM-based, persistent memory-optimized, or ESSD/SSD-based instance.
     *
     * @param request - CreateInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstancesResponse
     *
     * @param CreateInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateInstancesResponse
     */
    public function createInstancesWithOptions($request, $runtime)
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

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rebuildInstance) {
            @$query['RebuildInstance'] = $request->rebuildInstance;
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

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstances',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates multiple Tair (Redis OSS-compatible) instances at a time.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >  You can call this operation to create classic Redis Open-Source Edition instances or classic Tair DRAM-based instances. We recommend that you use an API operation for creating a single instance:
     * *   [CreateInstance](https://help.aliyun.com/document_detail/473757.html): creates a Redis Open-Source instance or a classic Tair DRAM-based instance.
     * *   [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html): creates a Tair (Enterprise Edition) instance. The instance can be a DRAM-based, persistent memory-optimized, or ESSD/SSD-based instance.
     *
     * @param request - CreateInstancesRequest
     *
     * @returns CreateInstancesResponse
     *
     * @param CreateInstancesRequest $request
     *
     * @return CreateInstancesResponse
     */
    public function createInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancesWithOptions($request, $runtime);
    }

    /**
     * Creates a parameter template.
     *
     * @param request - CreateParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParameterGroupResponse
     *
     * @param CreateParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
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

        if (null !== $request->parameterGroupDesc) {
            @$query['ParameterGroupDesc'] = $request->parameterGroupDesc;
        }

        if (null !== $request->parameterGroupName) {
            @$query['ParameterGroupName'] = $request->parameterGroupName;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateParameterGroup',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a parameter template.
     *
     * @param request - CreateParameterGroupRequest
     *
     * @returns CreateParameterGroupResponse
     *
     * @param CreateParameterGroupRequest $request
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterGroupWithOptions($request, $runtime);
    }

    /**
     * 创建TairCustom实例.
     *
     * @param request - CreateTCInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTCInstanceResponse
     *
     * @param CreateTCInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTCInstanceResponse
     */
    public function createTCInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
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

        if (null !== $request->dataDisk) {
            @$query['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->needEni) {
            @$query['NeedEni'] = $request->needEni;
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

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
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
            'action' => 'CreateTCInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTCInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建TairCustom实例.
     *
     * @param request - CreateTCInstanceRequest
     *
     * @returns CreateTCInstanceResponse
     *
     * @param CreateTCInstanceRequest $request
     *
     * @return CreateTCInstanceResponse
     */
    public function createTCInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTCInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a Tair (Enterprise Edition) cloud-native instance.
     *
     * @remarks
     * For information about instance selection, see [Instructions for selecting an appropriate Tair (Redis OSS-compatible) instance](https://help.aliyun.com/document_detail/223808.html).
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >
     * *   For information about how to create an instance in the console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     * *   To create other types of instances, such as Redis Open-Source Edition instances or [Tair DRAM-based](https://help.aliyun.com/document_detail/126164.html) instances, you can call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation.
     *
     * @param request - CreateTairInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTairInstanceResponse
     *
     * @param CreateTairInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTairInstanceResponse
     */
    public function createTairInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
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

        if (null !== $request->clusterBackupId) {
            @$query['ClusterBackupId'] = $request->clusterBackupId;
        }

        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->globalInstanceId) {
            @$query['GlobalInstanceId'] = $request->globalInstanceId;
        }

        if (null !== $request->globalSecurityGroupIds) {
            @$query['GlobalSecurityGroupIds'] = $request->globalSecurityGroupIds;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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

        if (null !== $request->paramGroupId) {
            @$query['ParamGroupId'] = $request->paramGroupId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->readOnlyCount) {
            @$query['ReadOnlyCount'] = $request->readOnlyCount;
        }

        if (null !== $request->recoverConfigMode) {
            @$query['RecoverConfigMode'] = $request->recoverConfigMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaCount) {
            @$query['ReplicaCount'] = $request->replicaCount;
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

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        if (null !== $request->shardType) {
            @$query['ShardType'] = $request->shardType;
        }

        if (null !== $request->slaveReadOnlyCount) {
            @$query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }

        if (null !== $request->slaveReplicaCount) {
            @$query['SlaveReplicaCount'] = $request->slaveReplicaCount;
        }

        if (null !== $request->srcDBInstanceId) {
            @$query['SrcDBInstanceId'] = $request->srcDBInstanceId;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
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
            'action' => 'CreateTairInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTairInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Tair (Enterprise Edition) cloud-native instance.
     *
     * @remarks
     * For information about instance selection, see [Instructions for selecting an appropriate Tair (Redis OSS-compatible) instance](https://help.aliyun.com/document_detail/223808.html).
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >
     * *   For information about how to create an instance in the console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     * *   To create other types of instances, such as Redis Open-Source Edition instances or [Tair DRAM-based](https://help.aliyun.com/document_detail/126164.html) instances, you can call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation.
     *
     * @param request - CreateTairInstanceRequest
     *
     * @returns CreateTairInstanceResponse
     *
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
     * 创建Tair VNode实例.
     *
     * @param request - CreateTairKVCacheVNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTairKVCacheVNodeResponse
     *
     * @param CreateTairKVCacheVNodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateTairKVCacheVNodeResponse
     */
    public function createTairKVCacheVNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
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

        if (null !== $request->computeUnitNum) {
            @$query['ComputeUnitNum'] = $request->computeUnitNum;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vkName) {
            @$query['VkName'] = $request->vkName;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTairKVCacheVNode',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTairKVCacheVNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Tair VNode实例.
     *
     * @param request - CreateTairKVCacheVNodeRequest
     *
     * @returns CreateTairKVCacheVNodeResponse
     *
     * @param CreateTairKVCacheVNodeRequest $request
     *
     * @return CreateTairKVCacheVNodeResponse
     */
    public function createTairKVCacheVNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTairKVCacheVNodeWithOptions($request, $runtime);
    }

    /**
     * Deletes an account from a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the Running state.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2015-01-01',
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
     * Deletes an account from a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the Running state.
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
     * 删除指定备份集.
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackup',
            'version' => '2015-01-01',
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
     * 删除指定备份集.
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
     * Deletes a global IP whitelist template.
     *
     * @remarks
     * Before you delete an IP whitelist template, you must unbind (disassociate) the instances that are currently associated with the template.
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
            'action' => 'DeleteGlobalSecurityIPGroup',
            'version' => '2015-01-01',
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
     * @remarks
     * Before you delete an IP whitelist template, you must unbind (disassociate) the instances that are currently associated with the template.
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
     * Release the Redis instance.
     *
     * @remarks
     * For more information about how to perform the corresponding operation in the console, see [Release an instance](https://help.aliyun.com/document_detail/43882.html).
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is charged on a pay-as-you-go basis.
     * >  You cannot call this operation to release a subscription instance, which is automatically released when it expires. To release a subscription instance before it expires, submit a ticket.
     *
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
        if (null !== $request->globalInstanceId) {
            @$query['GlobalInstanceId'] = $request->globalInstanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2015-01-01',
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
     * Release the Redis instance.
     *
     * @remarks
     * For more information about how to perform the corresponding operation in the console, see [Release an instance](https://help.aliyun.com/document_detail/43882.html).
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is charged on a pay-as-you-go basis.
     * >  You cannot call this operation to release a subscription instance, which is automatically released when it expires. To release a subscription instance before it expires, submit a ticket.
     *
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
     * Deletes a parameter template.
     *
     * @param request - DeleteParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParameterGroupResponse
     *
     * @param DeleteParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
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
            'action' => 'DeleteParameterGroup',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a parameter template.
     *
     * @param request - DeleteParameterGroupRequest
     *
     * @returns DeleteParameterGroupResponse
     *
     * @param DeleteParameterGroupRequest $request
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterGroupWithOptions($request, $runtime);
    }

    /**
     * Removes one or more data shards from a Tair (Redis OSS-compatible) cluster instance.
     *
     * @remarks
     * You can also remove data shards from an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the number of shards for an instance with cloud disks](https://help.aliyun.com/document_detail/198082.html).\\
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a persistent memory-optimized instance in the cluster architecture. For more information about persistent memory-optimized instances, see [Persistent memory-optimized instances](https://help.aliyun.com/document_detail/183956.html).
     * *   The instance has more than one data shard.
     *
     * @param request - DeleteShardingNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteShardingNodeResponse
     *
     * @param DeleteShardingNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteShardingNodeResponse
     */
    public function deleteShardingNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->forceTrans) {
            @$query['ForceTrans'] = $request->forceTrans;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteShardingNode',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteShardingNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes one or more data shards from a Tair (Redis OSS-compatible) cluster instance.
     *
     * @remarks
     * You can also remove data shards from an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the number of shards for an instance with cloud disks](https://help.aliyun.com/document_detail/198082.html).\\
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a persistent memory-optimized instance in the cluster architecture. For more information about persistent memory-optimized instances, see [Persistent memory-optimized instances](https://help.aliyun.com/document_detail/183956.html).
     * *   The instance has more than one data shard.
     *
     * @param request - DeleteShardingNodeRequest
     *
     * @returns DeleteShardingNodeResponse
     *
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
     * Queries a specified account of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2015-01-01',
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
     * Queries a specified account of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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
     * Queries the details of the O\\&M tasks of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * After you have called this API operation and queried the information about a specific O&M task, you can also call the [ModifyActiveOperationTask](https://help.aliyun.com/document_detail/473864.html) operation to modify the scheduled switchover time of the O&M task.
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

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTask',
            'version' => '2015-01-01',
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
     * Queries the details of the O\\&M tasks of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * After you have called this API operation and queried the information about a specific O&M task, you can also call the [ModifyActiveOperationTask](https://help.aliyun.com/document_detail/473864.html) operation to modify the scheduled switchover time of the O&M task.
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
     * Queries the O\\\\\\\\\\\\&M event details of an instance.
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
            'version' => '2015-01-01',
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
     * Queries the O\\\\\\\\\\\\&M event details of an instance.
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
     * Queries the audit log configurations of a Tair (Redis OSS-compatible) instance. The configurations include whether the audit log feature is enabled and the retention period of audit logs.
     *
     * @remarks
     * Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html) or [Enable the audit log feature](https://help.aliyun.com/document_detail/102015.html).
     *
     * @param request - DescribeAuditLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditLogConfigResponse
     *
     * @param DescribeAuditLogConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'DescribeAuditLogConfig',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the audit log configurations of a Tair (Redis OSS-compatible) instance. The configurations include whether the audit log feature is enabled and the retention period of audit logs.
     *
     * @remarks
     * Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html) or [Enable the audit log feature](https://help.aliyun.com/document_detail/102015.html).
     *
     * @param request - DescribeAuditLogConfigRequest
     *
     * @returns DescribeAuditLogConfigResponse
     *
     * @param DescribeAuditLogConfigRequest $request
     *
     * @return DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the audit logs of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html).
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
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->hostAddress) {
            @$query['HostAddress'] = $request->hostAddress;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditRecords',
            'version' => '2015-01-01',
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
     * Queries the audit logs of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html).
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
     * Queries the types of Tair (Redis OSS-compatible) instances that can be created in a specified zone.
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceScene) {
            @$query['InstanceScene'] = $request->instanceScene;
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

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableResource',
            'version' => '2015-01-01',
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
     * Queries the types of Tair (Redis OSS-compatible) instances that can be created in a specified zone.
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
     * Queries the backup policy of a Tair (Redis OSS-compatible) instance, including the backup cycle and backup time.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2015-01-01',
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
     * Queries the backup policy of a Tair (Redis OSS-compatible) instance, including the backup cycle and backup time.
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
     * Queries the execution status of backup tasks for a Tair (Redis OSS-compatible) instance.
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

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobMode) {
            @$query['JobMode'] = $request->jobMode;
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
            'version' => '2015-01-01',
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
     * Queries the execution status of backup tasks for a Tair (Redis OSS-compatible) instance.
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
     * Queries the backup files of the Tair (Redis OSS-compatible) instance.
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

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needAof) {
            @$query['NeedAof'] = $request->needAof;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2015-01-01',
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
     * Queries the backup files of the Tair (Redis OSS-compatible) instance.
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
     * Queries the cache analysis report of an instance on a specified date.
     *
     * @remarks
     * > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *
     * @param request - DescribeCacheAnalysisReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCacheAnalysisReportResponse
     *
     * @param DescribeCacheAnalysisReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCacheAnalysisReportResponse
     */
    public function describeCacheAnalysisReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisType) {
            @$query['AnalysisType'] = $request->analysisType;
        }

        if (null !== $request->date) {
            @$query['Date'] = $request->date;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->pageNumbers) {
            @$query['PageNumbers'] = $request->pageNumbers;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCacheAnalysisReport',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCacheAnalysisReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cache analysis report of an instance on a specified date.
     *
     * @remarks
     * > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *
     * @param request - DescribeCacheAnalysisReportRequest
     *
     * @returns DescribeCacheAnalysisReportResponse
     *
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
     * Queries a list of cache analysis reports for an instance.
     *
     * @remarks
     * > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *
     * @param request - DescribeCacheAnalysisReportListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCacheAnalysisReportListResponse
     *
     * @param DescribeCacheAnalysisReportListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCacheAnalysisReportListResponse
     */
    public function describeCacheAnalysisReportListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->days) {
            @$query['Days'] = $request->days;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->pageNumbers) {
            @$query['PageNumbers'] = $request->pageNumbers;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCacheAnalysisReportList',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCacheAnalysisReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of cache analysis reports for an instance.
     *
     * @remarks
     * > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *
     * @param request - DescribeCacheAnalysisReportListRequest
     *
     * @returns DescribeCacheAnalysisReportListResponse
     *
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
     * Queries the backup sets of a Tair (Redis OSS-compatible) cluster instance.
     *
     * @remarks
     * This operation is applicable only to cloud-native instances.
     *
     * @param request - DescribeClusterBackupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterBackupListResponse
     *
     * @param DescribeClusterBackupListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterBackupListResponse
     */
    public function describeClusterBackupListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterBackupList',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterBackupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup sets of a Tair (Redis OSS-compatible) cluster instance.
     *
     * @remarks
     * This operation is applicable only to cloud-native instances.
     *
     * @param request - DescribeClusterBackupListRequest
     *
     * @returns DescribeClusterBackupListResponse
     *
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
     * Queries the configuration information of nodes in a Tair (Redis OSS-compatible) cluster instance, such as the specifications and the maximum number of connections.
     *
     * @remarks
     * > This API operation is applicable only to Tair (Redis OSS-compatible) instances that use [cloud disks](https://help.aliyun.com/document_detail/188068.html) and the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     *
     * @param request - DescribeClusterMemberInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterMemberInfoResponse
     *
     * @param DescribeClusterMemberInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterMemberInfoResponse
     */
    public function describeClusterMemberInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterMemberInfo',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterMemberInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information of nodes in a Tair (Redis OSS-compatible) cluster instance, such as the specifications and the maximum number of connections.
     *
     * @remarks
     * > This API operation is applicable only to Tair (Redis OSS-compatible) instances that use [cloud disks](https://help.aliyun.com/document_detail/188068.html) and the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     *
     * @param request - DescribeClusterMemberInfoRequest
     *
     * @returns DescribeClusterMemberInfoResponse
     *
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
     * Queries the network information of an ApsaraDB for Redis instance.
     *
     * @param request - DescribeDBInstanceNetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceNetInfoResponse
     *
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceNetInfo',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network information of an ApsaraDB for Redis instance.
     *
     * @param request - DescribeDBInstanceNetInfoRequest
     *
     * @returns DescribeDBInstanceNetInfoResponse
     *
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
     * Queries the information about virtual IP addresses (VIPs) of child instances of a cluster instance in direct connection mode.
     *
     * @remarks
     * > Only instances that use cloud disks support this operation.
     *
     * @param request - DescribeDBNodeDirectVipInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBNodeDirectVipInfoResponse
     *
     * @param DescribeDBNodeDirectVipInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBNodeDirectVipInfoResponse
     */
    public function describeDBNodeDirectVipInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBNodeDirectVipInfo',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBNodeDirectVipInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about virtual IP addresses (VIPs) of child instances of a cluster instance in direct connection mode.
     *
     * @remarks
     * > Only instances that use cloud disks support this operation.
     *
     * @param request - DescribeDBNodeDirectVipInfoRequest
     *
     * @returns DescribeDBNodeDirectVipInfoResponse
     *
     * @param DescribeDBNodeDirectVipInfoRequest $request
     *
     * @return DescribeDBNodeDirectVipInfoResponse
     */
    public function describeDBNodeDirectVipInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodeDirectVipInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information of Tair (Redis OSS-compatible) instances deployed in a dedicated cluster.
     *
     * @remarks
     * > If you want to query the information about Tair (Redis OSS-compatible) instances that are not deployed in a dedicated cluster, call the [DescribeInstanceAttribute](https://help.aliyun.com/document_detail/473779.html) operation.
     *
     * @param request - DescribeDedicatedClusterInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedClusterInstanceListResponse
     *
     * @param DescribeDedicatedClusterInstanceListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dedicatedHostName) {
            @$query['DedicatedHostName'] = $request->dedicatedHostName;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceNetType) {
            @$query['InstanceNetType'] = $request->instanceNetType;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDedicatedClusterInstanceList',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedClusterInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of Tair (Redis OSS-compatible) instances deployed in a dedicated cluster.
     *
     * @remarks
     * > If you want to query the information about Tair (Redis OSS-compatible) instances that are not deployed in a dedicated cluster, call the [DescribeInstanceAttribute](https://help.aliyun.com/document_detail/473779.html) operation.
     *
     * @param request - DescribeDedicatedClusterInstanceListRequest
     *
     * @returns DescribeDedicatedClusterInstanceListResponse
     *
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
     * Queries the details of a custom key for a Tair (Redis OSS-compatible) instance to use transparent data encryption (TDE).
     *
     * @remarks
     * Before you call this operation, TDE must be enabled for the Tair (Redis OSS-compatible) instance by using a custom key. For more information, see [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html).
     * > For more information about TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *
     * @param request - DescribeEncryptionKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEncryptionKeyResponse
     *
     * @param DescribeEncryptionKeyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEncryptionKeyResponse
     */
    public function describeEncryptionKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEncryptionKey',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEncryptionKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom key for a Tair (Redis OSS-compatible) instance to use transparent data encryption (TDE).
     *
     * @remarks
     * Before you call this operation, TDE must be enabled for the Tair (Redis OSS-compatible) instance by using a custom key. For more information, see [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html).
     * > For more information about TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *
     * @param request - DescribeEncryptionKeyRequest
     *
     * @returns DescribeEncryptionKeyResponse
     *
     * @param DescribeEncryptionKeyRequest $request
     *
     * @return DescribeEncryptionKeyResponse
     */
    public function describeEncryptionKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEncryptionKeyWithOptions($request, $runtime);
    }

    /**
     * Queries a list of custom keys used by Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     *   You can specify a custom key when you call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable Transparent Data Encryption (TDE). You can call the DescribeEncryptionKeyList operation to query the custom keys that are in use. To create a custom key, you can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation of Key Management Service (KMS).
     * *   For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *
     * @param request - DescribeEncryptionKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEncryptionKeyListResponse
     *
     * @param DescribeEncryptionKeyListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEncryptionKeyListResponse
     */
    public function describeEncryptionKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEncryptionKeyList',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of custom keys used by Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     *   You can specify a custom key when you call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable Transparent Data Encryption (TDE). You can call the DescribeEncryptionKeyList operation to query the custom keys that are in use. To create a custom key, you can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation of Key Management Service (KMS).
     * *   For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *
     * @param request - DescribeEncryptionKeyListRequest
     *
     * @returns DescribeEncryptionKeyListResponse
     *
     * @param DescribeEncryptionKeyListRequest $request
     *
     * @return DescribeEncryptionKeyListResponse
     */
    public function describeEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * Queries the major version and minor version of a Tair (Redis OSS-compatible) instance and the release notes for minor versions.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeEngineVersion\\&type=RPC\\&version=2015-01-01)
     *
     * @param request - DescribeEngineVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEngineVersionResponse
     *
     * @param DescribeEngineVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEngineVersionResponse
     */
    public function describeEngineVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEngineVersion',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the major version and minor version of a Tair (Redis OSS-compatible) instance and the release notes for minor versions.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeEngineVersion\\&type=RPC\\&version=2015-01-01)
     *
     * @param request - DescribeEngineVersionRequest
     *
     * @returns DescribeEngineVersionResponse
     *
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
     * Queries the details of a distributed Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeGlobalDistributeCache\\&type=RPC\\&version=2015-01-01)
     *
     * @param request - DescribeGlobalDistributeCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalDistributeCacheResponse
     *
     * @param DescribeGlobalDistributeCacheRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalDistributeCacheResponse
     */
    public function describeGlobalDistributeCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalInstanceId) {
            @$query['GlobalInstanceId'] = $request->globalInstanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->subInstanceId) {
            @$query['SubInstanceId'] = $request->subInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalDistributeCache',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalDistributeCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a distributed Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeGlobalDistributeCache\\&type=RPC\\&version=2015-01-01)
     *
     * @param request - DescribeGlobalDistributeCacheRequest
     *
     * @returns DescribeGlobalDistributeCacheResponse
     *
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
     * Queries global IP whitelist templates.
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
            'version' => '2015-01-01',
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
     * Queries global IP whitelist templates.
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
     * Queries information about the global IP whitelist templates associated with an instance.
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalSecurityIPGroupRelation',
            'version' => '2015-01-01',
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
     * Queries information about the global IP whitelist templates associated with an instance.
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
     * Queries the performance monitoring data of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also query the performance monitoring data of an instance in the Tair console. For more information, see [Metrics](https://help.aliyun.com/document_detail/43887.html).
     *
     * @param request - DescribeHistoryMonitorValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryMonitorValuesResponse
     *
     * @param DescribeHistoryMonitorValuesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHistoryMonitorValuesResponse
     */
    public function describeHistoryMonitorValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intervalForHistory) {
            @$query['IntervalForHistory'] = $request->intervalForHistory;
        }

        if (null !== $request->monitorKeys) {
            @$query['MonitorKeys'] = $request->monitorKeys;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->nodeRole) {
            @$query['NodeRole'] = $request->nodeRole;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryMonitorValues',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryMonitorValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the performance monitoring data of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also query the performance monitoring data of an instance in the Tair console. For more information, see [Metrics](https://help.aliyun.com/document_detail/43887.html).
     *
     * @param request - DescribeHistoryMonitorValuesRequest
     *
     * @returns DescribeHistoryMonitorValuesResponse
     *
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
            'version' => '2015-01-01',
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
     * Queries the attribute of Tair (Redis OSS-compatible) instances.
     *
     * @param request - DescribeInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAttributeResponse
     *
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attribute of Tair (Redis OSS-compatible) instances.
     *
     * @param request - DescribeInstanceAttributeRequest
     *
     * @returns DescribeInstanceAttributeResponse
     *
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
     * Queries whether auto-renewal is enabled for a Tair (Redis OSS-compatible) instance.
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
            'version' => '2015-01-01',
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
     * Queries whether auto-renewal is enabled for a Tair (Redis OSS-compatible) instance.
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
     * Queries the default parameter configurations of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This operation is available only for instances that use cloud disks.
     * > You can call the [DescribeParameters](https://help.aliyun.com/document_detail/473847.html) operation to query the parameter settings of instances that use local disks.
     *
     * @param request - DescribeInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceConfigResponse
     *
     * @param DescribeInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceConfigResponse
     */
    public function describeInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceConfig',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the default parameter configurations of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This operation is available only for instances that use cloud disks.
     * > You can call the [DescribeParameters](https://help.aliyun.com/document_detail/473847.html) operation to query the parameter settings of instances that use local disks.
     *
     * @param request - DescribeInstanceConfigRequest
     *
     * @returns DescribeInstanceConfigResponse
     *
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
     * Queries whether TLS (SSL) encryption is enabled for an instance.
     *
     * @remarks
     * SSL encryption is supported for Tair (Redis OSS-compatible) 2.8 standard master-replica instances, Tair (Redis OSS-compatible) 2.8 master-replica cluster instances, and Tair (Redis OSS-compatible) 4.0 master-replica cluster instances. You can enable SSL encryption to enhance data transmission security.
     * You can use one of the following methods to enable or disable SSL encryption or update the SSL certificate for a Tair (Redis OSS-compatible) instance:
     * *   Call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation.
     * *   Enable or disable SSL encryption or update the SSL certificate in the Tair (Redis OSS-compatible) console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * > After SSL encryption is enabled, the instance may respond slower.
     *
     * @param request - DescribeInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSSL',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether TLS (SSL) encryption is enabled for an instance.
     *
     * @remarks
     * SSL encryption is supported for Tair (Redis OSS-compatible) 2.8 standard master-replica instances, Tair (Redis OSS-compatible) 2.8 master-replica cluster instances, and Tair (Redis OSS-compatible) 4.0 master-replica cluster instances. You can enable SSL encryption to enhance data transmission security.
     * You can use one of the following methods to enable or disable SSL encryption or update the SSL certificate for a Tair (Redis OSS-compatible) instance:
     * *   Call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation.
     * *   Enable or disable SSL encryption or update the SSL certificate in the Tair (Redis OSS-compatible) console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * > After SSL encryption is enabled, the instance may respond slower.
     *
     * @param request - DescribeInstanceSSLRequest
     *
     * @returns DescribeInstanceSSLResponse
     *
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
     * Queries whether transparent data encryption (TDE) is enabled for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * >  You can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) to enable or disable TDE.
     *
     * @param request - DescribeInstanceTDEStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTDEStatusResponse
     *
     * @param DescribeInstanceTDEStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceTDEStatusResponse
     */
    public function describeInstanceTDEStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceTDEStatus',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceTDEStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether transparent data encryption (TDE) is enabled for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * >  You can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) to enable or disable TDE.
     *
     * @param request - DescribeInstanceTDEStatusRequest
     *
     * @returns DescribeInstanceTDEStatusResponse
     *
     * @param DescribeInstanceTDEStatusRequest $request
     *
     * @return DescribeInstanceTDEStatusResponse
     */
    public function describeInstanceTDEStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTDEStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more Tair (Redis OSS-compatible) instances.
     *
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
        if (null !== $request->architectureType) {
            @$query['ArchitectureType'] = $request->architectureType;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->editionType) {
            @$query['EditionType'] = $request->editionType;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->expired) {
            @$query['Expired'] = $request->expired;
        }

        if (null !== $request->globalInstance) {
            @$query['GlobalInstance'] = $request->globalInstance;
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

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
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

        if (null !== $request->privateIp) {
            @$query['PrivateIp'] = $request->privateIp;
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

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
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
            'action' => 'DescribeInstances',
            'version' => '2015-01-01',
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
     * Queries the information about one or more Tair (Redis OSS-compatible) instances.
     *
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
     * Queries the overview information of one or more Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     * If you do not specify the InstanceIds parameter when you call this operation, the overview information of all instances is returned.
     * > This operation returns non-paged results.
     *
     * @param request - DescribeInstancesOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesOverviewResponse
     *
     * @param DescribeInstancesOverviewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstancesOverviewResponse
     */
    public function describeInstancesOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->architectureType) {
            @$query['ArchitectureType'] = $request->architectureType;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->editionType) {
            @$query['EditionType'] = $request->editionType;
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

        if (null !== $request->privateIp) {
            @$query['PrivateIp'] = $request->privateIp;
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

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
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
            'action' => 'DescribeInstancesOverview',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the overview information of one or more Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     * If you do not specify the InstanceIds parameter when you call this operation, the overview information of all instances is returned.
     * > This operation returns non-paged results.
     *
     * @param request - DescribeInstancesOverviewRequest
     *
     * @returns DescribeInstancesOverviewResponse
     *
     * @param DescribeInstancesOverviewRequest $request
     *
     * @return DescribeInstancesOverviewResponse
     */
    public function describeInstancesOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesOverviewWithOptions($request, $runtime);
    }

    /**
     * Queries the internal bandwidth of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to increase the internal bandwidth of an instance.
     *
     * @param request - DescribeIntranetAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIntranetAttributeResponse
     *
     * @param DescribeIntranetAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIntranetAttributeResponse
     */
    public function describeIntranetAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIntranetAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIntranetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the internal bandwidth of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to increase the internal bandwidth of an instance.
     *
     * @param request - DescribeIntranetAttributeRequest
     *
     * @returns DescribeIntranetAttributeResponse
     *
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
     * Queries the logical topology of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This parameter is supported only for cluster and read/write splitting instances.
     *
     * @param request - DescribeLogicInstanceTopologyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogicInstanceTopologyResponse
     *
     * @param DescribeLogicInstanceTopologyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLogicInstanceTopologyResponse
     */
    public function describeLogicInstanceTopologyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogicInstanceTopology',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogicInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logical topology of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This parameter is supported only for cluster and read/write splitting instances.
     *
     * @param request - DescribeLogicInstanceTopologyRequest
     *
     * @returns DescribeLogicInstanceTopologyResponse
     *
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
     * Queries the metrics of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  To improve user experience, Tair has upgraded the monitoring metrics. The DescribeMonitorItems operation is phased out. For more information, see [The DescribeMonitorItems operation of Tair (Redis OSS-compatible) is phased out](https://help.aliyun.com/document_detail/189893.html).
     * After you call this operation to retrieve a list of metrics for a specified instance, you can call the [DescribeHistoryMonitorValues](https://help.aliyun.com/document_detail/473827.html) operation to query the monitoring history of the instance.
     *
     * @param request - DescribeMonitorItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMonitorItemsResponse
     *
     * @param DescribeMonitorItemsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMonitorItemsResponse
     */
    public function describeMonitorItemsWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMonitorItems',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMonitorItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metrics of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  To improve user experience, Tair has upgraded the monitoring metrics. The DescribeMonitorItems operation is phased out. For more information, see [The DescribeMonitorItems operation of Tair (Redis OSS-compatible) is phased out](https://help.aliyun.com/document_detail/189893.html).
     * After you call this operation to retrieve a list of metrics for a specified instance, you can call the [DescribeHistoryMonitorValues](https://help.aliyun.com/document_detail/473827.html) operation to query the monitoring history of the instance.
     *
     * @param request - DescribeMonitorItemsRequest
     *
     * @returns DescribeMonitorItemsResponse
     *
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
     * Queries the basic information about a parameter template.
     *
     * @param request - DescribeParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterGroupResponse
     *
     * @param DescribeParameterGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
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
            'action' => 'DescribeParameterGroup',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about a parameter template.
     *
     * @param request - DescribeParameterGroupRequest
     *
     * @returns DescribeParameterGroupResponse
     *
     * @param DescribeParameterGroupRequest $request
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the parameters that can be configured in parameter templates across different database versions.
     *
     * @param request - DescribeParameterGroupSupportParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterGroupSupportParamResponse
     *
     * @param DescribeParameterGroupSupportParamRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeParameterGroupSupportParamResponse
     */
    public function describeParameterGroupSupportParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterGroupSupportParam',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterGroupSupportParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameters that can be configured in parameter templates across different database versions.
     *
     * @param request - DescribeParameterGroupSupportParamRequest
     *
     * @returns DescribeParameterGroupSupportParamResponse
     *
     * @param DescribeParameterGroupSupportParamRequest $request
     *
     * @return DescribeParameterGroupSupportParamResponse
     */
    public function describeParameterGroupSupportParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupSupportParamWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the parameters that can be configured in a parameter template, such as the default values, value ranges, and descriptions.
     *
     * @param request - DescribeParameterGroupTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterGroupTemplateListResponse
     *
     * @param DescribeParameterGroupTemplateListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeParameterGroupTemplateListResponse
     */
    public function describeParameterGroupTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterGroupTemplateList',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterGroupTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the parameters that can be configured in a parameter template, such as the default values, value ranges, and descriptions.
     *
     * @param request - DescribeParameterGroupTemplateListRequest
     *
     * @returns DescribeParameterGroupTemplateListResponse
     *
     * @param DescribeParameterGroupTemplateListRequest $request
     *
     * @return DescribeParameterGroupTemplateListResponse
     */
    public function describeParameterGroupTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupTemplateListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available parameter templates.
     *
     * @param request - DescribeParameterGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterGroupsResponse
     *
     * @param DescribeParameterGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
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
            'action' => 'DescribeParameterGroups',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of available parameter templates.
     *
     * @param request - DescribeParameterGroupsRequest
     *
     * @returns DescribeParameterGroupsResponse
     *
     * @param DescribeParameterGroupsRequest $request
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the parameter modification history of a Tair (Redis OSS-compatible) instance.
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
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->parameterName) {
            @$query['ParameterName'] = $request->parameterName;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterModificationHistory',
            'version' => '2015-01-01',
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
     * Queries the parameter modification history of a Tair (Redis OSS-compatible) instance.
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
     * Queries the parameters and their default values that are supported by Tair (Redis OSS-compatible) instances of different architectures and major versions.
     *
     * @remarks
     * After you call this operation to query the parameters and default values of an instance, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to reconfigure the parameters of the instance.
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
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterTemplates',
            'version' => '2015-01-01',
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
     * Queries the parameters and their default values that are supported by Tair (Redis OSS-compatible) instances of different architectures and major versions.
     *
     * @remarks
     * After you call this operation to query the parameters and default values of an instance, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to reconfigure the parameters of the instance.
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
     * Queries the configuration parameters and running parameters of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This operation is applicable only to classic instances.
     * >  If the instance is deployed in cloud-native mode, you can use the [DescribeInstanceConfig](https://help.aliyun.com/document_detail/473846.html) operation to query the configuration and operational parameters of the instance.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameters',
            'version' => '2015-01-01',
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
     * Queries the configuration parameters and running parameters of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This operation is applicable only to classic instances.
     * >  If the instance is deployed in cloud-native mode, you can use the [DescribeInstanceConfig](https://help.aliyun.com/document_detail/473846.html) operation to query the configuration and operational parameters of the instance.
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
     * Queries the fees that you must pay when you create, upgrade, or renew a Tair (Redis OSS-compatible) instance.
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

        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->forceUpgrade) {
            @$query['ForceUpgrade'] = $request->forceUpgrade;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
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

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
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

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrice',
            'version' => '2015-01-01',
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
     * Queries the fees that you must pay when you create, upgrade, or renew a Tair (Redis OSS-compatible) instance.
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
     * Queries the regions in which ApsaraDB for Redis instances can be created.
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
            'action' => 'DescribeRegions',
            'version' => '2015-01-01',
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
     * Queries the regions in which ApsaraDB for Redis instances can be created.
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
     * Queries the role, type, minor version, and zone of each node in a Tair (Redis OSS-compatible) instance.
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
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
            'action' => 'DescribeRoleZoneInfo',
            'version' => '2015-01-01',
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
     * Queries the role, type, minor version, and zone of each node in a Tair (Redis OSS-compatible) instance.
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
     * Queries the operational logs of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about how to view the operational logs of an instance in the Tair (Redis OSS-compatible) console, see [View active logs](https://help.aliyun.com/document_detail/101713.html).
     * This operation can be called up to 100 times per minute.
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
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->queryKeyword) {
            @$query['QueryKeyword'] = $request->queryKeyword;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRunningLogRecords',
            'version' => '2015-01-01',
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
     * Queries the operational logs of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about how to view the operational logs of an instance in the Tair (Redis OSS-compatible) console, see [View active logs](https://help.aliyun.com/document_detail/101713.html).
     * This operation can be called up to 100 times per minute.
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
     * Queries the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityGroupConfiguration',
            'version' => '2015-01-01',
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
     * Queries the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
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
     * Queries the IP address whitelists of a Tair (Redis OSS-compatible) instance.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIps',
            'version' => '2015-01-01',
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
     * Queries the IP address whitelists of a Tair (Redis OSS-compatible) instance.
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
     * Queries the slow query logs of a Tair (Redis OSS-compatible) instance that are generated within a specified period of time.
     *
     * @remarks
     * You can also query slow logs in the Tair (Redis OSS-compatible) console. For more information, see [Query slow logs of an instance](https://help.aliyun.com/document_detail/95874.html). This operation can be called up to 100 times per minute.
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
        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
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

        if (null !== $request->queryKeyword) {
            @$query['QueryKeyword'] = $request->queryKeyword;
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

        if (null !== $request->slowLogRecordType) {
            @$query['SlowLogRecordType'] = $request->slowLogRecordType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogRecords',
            'version' => '2015-01-01',
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
     * Queries the slow query logs of a Tair (Redis OSS-compatible) instance that are generated within a specified period of time.
     *
     * @remarks
     * You can also query slow logs in the Tair (Redis OSS-compatible) console. For more information, see [Query slow logs of an instance](https://help.aliyun.com/document_detail/95874.html). This operation can be called up to 100 times per minute.
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
     * 查看TairCustom实例.
     *
     * @param request - DescribeTairKVCacheCustomInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTairKVCacheCustomInstanceAttributeResponse
     *
     * @param DescribeTairKVCacheCustomInstanceAttributeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeTairKVCacheCustomInstanceAttributeResponse
     */
    public function describeTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTairKVCacheCustomInstanceAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTairKVCacheCustomInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看TairCustom实例.
     *
     * @param request - DescribeTairKVCacheCustomInstanceAttributeRequest
     *
     * @returns DescribeTairKVCacheCustomInstanceAttributeResponse
     *
     * @param DescribeTairKVCacheCustomInstanceAttributeRequest $request
     *
     * @return DescribeTairKVCacheCustomInstanceAttributeResponse
     */
    public function describeTairKVCacheCustomInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询TairCustom主机监控.
     *
     * @param request - DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse
     *
     * @param DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse
     */
    public function describeTairKVCacheCustomInstanceHistoryMonitorValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTairKVCacheCustomInstanceHistoryMonitorValues',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询TairCustom主机监控.
     *
     * @param request - DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest
     *
     * @returns DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse
     *
     * @param DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest $request
     *
     * @return DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse
     */
    public function describeTairKVCacheCustomInstanceHistoryMonitorValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheCustomInstanceHistoryMonitorValuesWithOptions($request, $runtime);
    }

    /**
     * 查看TairCustom实例.
     *
     * @param request - DescribeTairKVCacheCustomInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTairKVCacheCustomInstancesResponse
     *
     * @param DescribeTairKVCacheCustomInstancesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeTairKVCacheCustomInstancesResponse
     */
    public function describeTairKVCacheCustomInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTairKVCacheCustomInstances',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTairKVCacheCustomInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看TairCustom实例.
     *
     * @param request - DescribeTairKVCacheCustomInstancesRequest
     *
     * @returns DescribeTairKVCacheCustomInstancesResponse
     *
     * @param DescribeTairKVCacheCustomInstancesRequest $request
     *
     * @return DescribeTairKVCacheCustomInstancesResponse
     */
    public function describeTairKVCacheCustomInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheCustomInstancesWithOptions($request, $runtime);
    }

    /**
     * 查看TairInfer实例.
     *
     * @param request - DescribeTairKVCacheInferInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTairKVCacheInferInstanceAttributeResponse
     *
     * @param DescribeTairKVCacheInferInstanceAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeTairKVCacheInferInstanceAttributeResponse
     */
    public function describeTairKVCacheInferInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTairKVCacheInferInstanceAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTairKVCacheInferInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看TairInfer实例.
     *
     * @param request - DescribeTairKVCacheInferInstanceAttributeRequest
     *
     * @returns DescribeTairKVCacheInferInstanceAttributeResponse
     *
     * @param DescribeTairKVCacheInferInstanceAttributeRequest $request
     *
     * @return DescribeTairKVCacheInferInstanceAttributeResponse
     */
    public function describeTairKVCacheInferInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheInferInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 查看TairInfer实例列表.
     *
     * @param request - DescribeTairKVCacheInferInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTairKVCacheInferInstancesResponse
     *
     * @param DescribeTairKVCacheInferInstancesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeTairKVCacheInferInstancesResponse
     */
    public function describeTairKVCacheInferInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTairKVCacheInferInstances',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTairKVCacheInferInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看TairInfer实例列表.
     *
     * @param request - DescribeTairKVCacheInferInstancesRequest
     *
     * @returns DescribeTairKVCacheInferInstancesResponse
     *
     * @param DescribeTairKVCacheInferInstancesRequest $request
     *
     * @return DescribeTairKVCacheInferInstancesResponse
     */
    public function describeTairKVCacheInferInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheInferInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the zones available for Tair (Redis OSS-compatible).
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones available for Tair (Redis OSS-compatible).
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
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
     * Adjusts the bandwidth of a Tair (Redis OSS-compatible) instance. Only the pay-as-you-go billing method is supported for bandwidth adjustment. You need to specify the InstanceId, NodeId (optional), Bandwidth, and ChargeType parameters.
     *
     * @remarks
     * If you enable the bandwidth auto scaling feature and call this operation at the same time, bandwidth auto scaling takes precedence. During bandwidth scale-back, the instance is scaled back to the default bandwidth of the instance type. For more information about the limits, costs, and FAQ about this feature, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html).
     * >  Before you call this operation, you can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/473782.html) operation to query the current bandwidth of each data node in an instance.
     *
     * @param request - EnableAdditionalBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAdditionalBandwidthResponse
     *
     * @param EnableAdditionalBandwidthRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableAdditionalBandwidthResponse
     */
    public function enableAdditionalBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
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

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderTimeLength) {
            @$query['OrderTimeLength'] = $request->orderTimeLength;
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

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAdditionalBandwidth',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAdditionalBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adjusts the bandwidth of a Tair (Redis OSS-compatible) instance. Only the pay-as-you-go billing method is supported for bandwidth adjustment. You need to specify the InstanceId, NodeId (optional), Bandwidth, and ChargeType parameters.
     *
     * @remarks
     * If you enable the bandwidth auto scaling feature and call this operation at the same time, bandwidth auto scaling takes precedence. During bandwidth scale-back, the instance is scaled back to the default bandwidth of the instance type. For more information about the limits, costs, and FAQ about this feature, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html).
     * >  Before you call this operation, you can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/473782.html) operation to query the current bandwidth of each data node in an instance.
     *
     * @param request - EnableAdditionalBandwidthRequest
     *
     * @returns EnableAdditionalBandwidthResponse
     *
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
     * Clears all expired keys in a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about how to clear the expired keys in the Tair (Redis OSS-compatible) console, see [Clear data](https://help.aliyun.com/document_detail/43881.html).
     * >  Expired keys cannot be recovered after they are deleted. Exercise caution when you call this operation.
     *
     * @param request - FlushExpireKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlushExpireKeysResponse
     *
     * @param FlushExpireKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return FlushExpireKeysResponse
     */
    public function flushExpireKeysWithOptions($request, $runtime)
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlushExpireKeys',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlushExpireKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears all expired keys in a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about how to clear the expired keys in the Tair (Redis OSS-compatible) console, see [Clear data](https://help.aliyun.com/document_detail/43881.html).
     * >  Expired keys cannot be recovered after they are deleted. Exercise caution when you call this operation.
     *
     * @param request - FlushExpireKeysRequest
     *
     * @returns FlushExpireKeysResponse
     *
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
     * Clears the data of a Tair (Redis OSS-compatible) instance. The cleared data cannot be restored.
     *
     * @param request - FlushInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlushInstanceResponse
     *
     * @param FlushInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FlushInstanceResponse
     */
    public function flushInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlushInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlushInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the data of a Tair (Redis OSS-compatible) instance. The cleared data cannot be restored.
     *
     * @param request - FlushInstanceRequest
     *
     * @returns FlushInstanceResponse
     *
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
     * Cleans the data of specified databases in a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Each Tair (Redis OSS-compatible) instance can contain up to 256 databases named from DB0 to DB255. Each database does not have a separate memory usage limit. The memory capacity that a database can use is subject to the total memory limit of the instance. You can execute the `SELECT` statement to switch between databases. For more information, see [What is the size of each database on a Tair (Redis OSS-compatible) instance, and how can I choose databases?](https://help.aliyun.com/document_detail/38688.html)
     * >  This operation is available only for cloud-native instances that use cloud disks.
     *
     * @param request - FlushInstanceForDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlushInstanceForDBResponse
     *
     * @param FlushInstanceForDBRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return FlushInstanceForDBResponse
     */
    public function flushInstanceForDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbIndex) {
            @$query['DbIndex'] = $request->dbIndex;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlushInstanceForDB',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlushInstanceForDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cleans the data of specified databases in a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Each Tair (Redis OSS-compatible) instance can contain up to 256 databases named from DB0 to DB255. Each database does not have a separate memory usage limit. The memory capacity that a database can use is subject to the total memory limit of the instance. You can execute the `SELECT` statement to switch between databases. For more information, see [What is the size of each database on a Tair (Redis OSS-compatible) instance, and how can I choose databases?](https://help.aliyun.com/document_detail/38688.html)
     * >  This operation is available only for cloud-native instances that use cloud disks.
     *
     * @param request - FlushInstanceForDBRequest
     *
     * @returns FlushInstanceForDBResponse
     *
     * @param FlushInstanceForDBRequest $request
     *
     * @return FlushInstanceForDBResponse
     */
    public function flushInstanceForDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flushInstanceForDBWithOptions($request, $runtime);
    }

    /**
     * Modifies the permissions of an account for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >
     * *   Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
     * *   The Tair (Redis OSS-compatible) instance must be in the running state.
     *
     * @param request - GrantAccountPrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantAccountPrivilegeResponse
     *
     * @param GrantAccountPrivilegeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantAccountPrivilege',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the permissions of an account for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >
     * *   Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
     * *   The Tair (Redis OSS-compatible) instance must be in the running state.
     *
     * @param request - GrantAccountPrivilegeRequest
     *
     * @returns GrantAccountPrivilegeResponse
     *
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
     * Assigns a service-linked role to Tair (Redis OSS-compatible).
     *
     * @remarks
     * The log management feature of Tair (Redis OSS-compatible) requires the resources of [Simple Log Service](https://help.aliyun.com/document_detail/48869.html). To use the log management feature, you can call this operation to assign the AliyunServiceRoleForKvstore service-linked role to Tair (Redis OSS-compatible). For more information, see [Service-linked role of Tair (Redis OSS-compatible)](https://help.aliyun.com/document_detail/184337.html).
     *
     * @param request - InitializeKvstorePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeKvstorePermissionResponse
     *
     * @param InitializeKvstorePermissionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return InitializeKvstorePermissionResponse
     */
    public function initializeKvstorePermissionWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitializeKvstorePermission',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeKvstorePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns a service-linked role to Tair (Redis OSS-compatible).
     *
     * @remarks
     * The log management feature of Tair (Redis OSS-compatible) requires the resources of [Simple Log Service](https://help.aliyun.com/document_detail/48869.html). To use the log management feature, you can call this operation to assign the AliyunServiceRoleForKvstore service-linked role to Tair (Redis OSS-compatible). For more information, see [Service-linked role of Tair (Redis OSS-compatible)](https://help.aliyun.com/document_detail/184337.html).
     *
     * @param request - InitializeKvstorePermissionRequest
     *
     * @returns InitializeKvstorePermissionResponse
     *
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
     * Queries the relationships between Tair (Redis OSS-compatible) instances and tags.
     *
     * @remarks
     * You can also query the relationships between instances and tags in the Tair (Redis OSS-compatible) console. For more information, see [Filter Tair (Redis OSS-compatible) instances by tag](https://help.aliyun.com/document_detail/119160.html) and [View tags bound to an instance](https://help.aliyun.com/document_detail/134038.html).
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
            'version' => '2015-01-01',
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
     * Queries the relationships between Tair (Redis OSS-compatible) instances and tags.
     *
     * @remarks
     * You can also query the relationships between instances and tags in the Tair (Redis OSS-compatible) console. For more information, see [Filter Tair (Redis OSS-compatible) instances by tag](https://help.aliyun.com/document_detail/119160.html) and [View tags bound to an instance](https://help.aliyun.com/document_detail/134038.html).
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
     * Places a write lock on an instance. After the instance is locked, it supports only read operations.
     *
     * @param request - LockDBInstanceWriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LockDBInstanceWriteResponse
     *
     * @param LockDBInstanceWriteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return LockDBInstanceWriteResponse
     */
    public function lockDBInstanceWriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->lockReason) {
            @$query['LockReason'] = $request->lockReason;
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
            'action' => 'LockDBInstanceWrite',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockDBInstanceWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Places a write lock on an instance. After the instance is locked, it supports only read operations.
     *
     * @param request - LockDBInstanceWriteRequest
     *
     * @returns LockDBInstanceWriteResponse
     *
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
     * Simulates database node failures.
     *
     * @param request - MasterNodeShutDownFailOverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MasterNodeShutDownFailOverResponse
     *
     * @param MasterNodeShutDownFailOverRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return MasterNodeShutDownFailOverResponse
     */
    public function masterNodeShutDownFailOverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->DBFaultMode) {
            @$query['DBFaultMode'] = $request->DBFaultMode;
        }

        if (null !== $request->DBNodes) {
            @$query['DBNodes'] = $request->DBNodes;
        }

        if (null !== $request->failMode) {
            @$query['FailMode'] = $request->failMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->proxyFaultMode) {
            @$query['ProxyFaultMode'] = $request->proxyFaultMode;
        }

        if (null !== $request->proxyInstanceIds) {
            @$query['ProxyInstanceIds'] = $request->proxyInstanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MasterNodeShutDownFailOver',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MasterNodeShutDownFailOverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Simulates database node failures.
     *
     * @param request - MasterNodeShutDownFailOverRequest
     *
     * @returns MasterNodeShutDownFailOverResponse
     *
     * @param MasterNodeShutDownFailOverRequest $request
     *
     * @return MasterNodeShutDownFailOverResponse
     */
    public function masterNodeShutDownFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->masterNodeShutDownFailOverWithOptions($request, $runtime);
    }

    /**
     * Migrates a Tair (Redis OSS-compatible) instance to another zone in the same region.
     *
     * @remarks
     * Before you call this operation, you must release the public endpoint (if any) of the instance. For more information, see [Migrate an instance across zones](https://help.aliyun.com/document_detail/106272.html).
     * >
     * *   If the network type of an Tair (Redis OSS-compatible) instance is switched from classic network to Virtual Private Cloud (VPC), and the classic network endpoint is retained, you can migrate the instance across zones only after the classic network endpoint is released upon expiration.
     * *   After the instance is migrated, the endpoint of the instance remains unchanged. However, the virtual IP address (VIP) is changed. We recommend that you use the endpoint instead of the VIP to connect to the instance.
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->readOnlyCount) {
            @$query['ReadOnlyCount'] = $request->readOnlyCount;
        }

        if (null !== $request->replicaCount) {
            @$query['ReplicaCount'] = $request->replicaCount;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->slaveReadOnlyCount) {
            @$query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }

        if (null !== $request->slaveReplicaCount) {
            @$query['SlaveReplicaCount'] = $request->slaveReplicaCount;
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
            'version' => '2015-01-01',
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
     * Migrates a Tair (Redis OSS-compatible) instance to another zone in the same region.
     *
     * @remarks
     * Before you call this operation, you must release the public endpoint (if any) of the instance. For more information, see [Migrate an instance across zones](https://help.aliyun.com/document_detail/106272.html).
     * >
     * *   If the network type of an Tair (Redis OSS-compatible) instance is switched from classic network to Virtual Private Cloud (VPC), and the classic network endpoint is retained, you can migrate the instance across zones only after the classic network endpoint is released upon expiration.
     * *   After the instance is migrated, the endpoint of the instance remains unchanged. However, the virtual IP address (VIP) is changed. We recommend that you use the endpoint instead of the VIP to connect to the instance.
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
     * Modifies the description of an account for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This operation is supported only for instances that run Redis 4.0 or later.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2015-01-01',
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
     * Modifies the description of an account for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * This operation is supported only for instances that run Redis 4.0 or later.
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
     * Changes the password of a specific account for a Tair (Redis OSS-compatible) instance.
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

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->newAccountPassword) {
            @$query['NewAccountPassword'] = $request->newAccountPassword;
        }

        if (null !== $request->oldAccountPassword) {
            @$query['OldAccountPassword'] = $request->oldAccountPassword;
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

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountPassword',
            'version' => '2015-01-01',
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
     * Changes the password of a specific account for a Tair (Redis OSS-compatible) instance.
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
     * Changes the scheduled switchover time of an O&M task.
     *
     * @remarks
     * You can receive notifications for Tair (Redis OSS-compatible) events such as instance migration and version upgrade by text message, phone call, email, internal message, or by using the console. You can also change the scheduled switchover time of a task by using the console. For more information, see [Query or manage pending events](https://help.aliyun.com/document_detail/187022.html).
     *
     * @param request - ModifyActiveOperationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationTaskResponse
     *
     * @param ModifyActiveOperationTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyActiveOperationTaskResponse
     */
    public function modifyActiveOperationTaskWithOptions($request, $runtime)
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

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationTask',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyActiveOperationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the scheduled switchover time of an O&M task.
     *
     * @remarks
     * You can receive notifications for Tair (Redis OSS-compatible) events such as instance migration and version upgrade by text message, phone call, email, internal message, or by using the console. You can also change the scheduled switchover time of a task by using the console. For more information, see [Query or manage pending events](https://help.aliyun.com/document_detail/187022.html).
     *
     * @param request - ModifyActiveOperationTaskRequest
     *
     * @returns ModifyActiveOperationTaskResponse
     *
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
     * Modifies the switching time of scheduled O\\\\\\&M events for an instance.
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
            'version' => '2015-01-01',
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
     * Modifies the switching time of scheduled O\\\\\\&M events for an instance.
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
     * Enables the audit log feature or modifies the audit log settings for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of the audit log feature.
     * Before you call this operation, make sure that the Tair (Redis OSS-compatible) instance meets the following requirements:
     * *   The instance is a Tair (Redis OSS-compatible) Community Edition instance or Tair [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html).
     * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to check whether the instance uses the latest major version and minor version.
     *
     * @param request - ModifyAuditLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAuditLogConfigResponse
     *
     * @param ModifyAuditLogConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbAudit) {
            @$query['DbAudit'] = $request->dbAudit;
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

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAuditLogConfig',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the audit log feature or modifies the audit log settings for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of the audit log feature.
     * Before you call this operation, make sure that the Tair (Redis OSS-compatible) instance meets the following requirements:
     * *   The instance is a Tair (Redis OSS-compatible) Community Edition instance or Tair [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html).
     * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to check whether the instance uses the latest major version and minor version.
     *
     * @param request - ModifyAuditLogConfigRequest
     *
     * @returns ModifyAuditLogConfigResponse
     *
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
     * 修改备份集过期时间.
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
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->expectExpireTime) {
            @$query['ExpectExpireTime'] = $request->expectExpireTime;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupExpireTime',
            'version' => '2015-01-01',
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
     * 修改备份集过期时间.
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
     * Modifies the automatic backup policy of a Tair (Redis OSS-compatible) instance.
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
        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->enableBackupLog) {
            @$query['EnableBackupLog'] = $request->enableBackupLog;
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

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
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
            'action' => 'ModifyBackupPolicy',
            'version' => '2015-01-01',
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
     * Modifies the automatic backup policy of a Tair (Redis OSS-compatible) instance.
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
     * Modifies the setting related to the automatic update of minor versions for an instance.
     *
     * @param request - ModifyDBInstanceAutoUpgradeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceAutoUpgradeResponse
     *
     * @param ModifyDBInstanceAutoUpgradeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceAutoUpgradeResponse
     */
    public function modifyDBInstanceAutoUpgradeWithOptions($request, $runtime)
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceAutoUpgrade',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceAutoUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the setting related to the automatic update of minor versions for an instance.
     *
     * @param request - ModifyDBInstanceAutoUpgradeRequest
     *
     * @returns ModifyDBInstanceAutoUpgradeResponse
     *
     * @param ModifyDBInstanceAutoUpgradeRequest $request
     *
     * @return ModifyDBInstanceAutoUpgradeResponse
     */
    public function modifyDBInstanceAutoUpgrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAutoUpgradeWithOptions($request, $runtime);
    }

    /**
     * Changes the endpoint or port number of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also modify the endpoint or port number of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change the endpoint or port number of an instance](https://help.aliyun.com/document_detail/85683.html).
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

        if (null !== $request->IPType) {
            @$query['IPType'] = $request->IPType;
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

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
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
            'action' => 'ModifyDBInstanceConnectionString',
            'version' => '2015-01-01',
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
     * Changes the endpoint or port number of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also modify the endpoint or port number of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change the endpoint or port number of an instance](https://help.aliyun.com/document_detail/85683.html).
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
     * Modifies a global IP whitelist template.
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
            'action' => 'ModifyGlobalSecurityIPGroup',
            'version' => '2015-01-01',
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
     * Modifies a global IP whitelist template.
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
     * Modifies the name of a global IP whitelist template.
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
            'action' => 'ModifyGlobalSecurityIPGroupName',
            'version' => '2015-01-01',
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
     * Modifies the name of a global IP whitelist template.
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
     * Adds a specified instance to a specified IP whitelist template.
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
            'action' => 'ModifyGlobalSecurityIPGroupRelation',
            'version' => '2015-01-01',
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
     * Adds a specified instance to a specified IP whitelist template.
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
     * Modifies the specific information of a Tair (Redis OSS-compatible) instance, such as the password and the name.
     *
     * @remarks
     * You can also modify the information of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change or reset the password](https://help.aliyun.com/document_detail/43874.html).
     *
     * @param request - ModifyInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceReleaseProtection) {
            @$query['InstanceReleaseProtection'] = $request->instanceReleaseProtection;
        }

        if (null !== $request->newPassword) {
            @$query['NewPassword'] = $request->newPassword;
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
            'action' => 'ModifyInstanceAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the specific information of a Tair (Redis OSS-compatible) instance, such as the password and the name.
     *
     * @remarks
     * You can also modify the information of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change or reset the password](https://help.aliyun.com/document_detail/43874.html).
     *
     * @param request - ModifyInstanceAttributeRequest
     *
     * @returns ModifyInstanceAttributeResponse
     *
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
     * Enables or disables auto-renewal for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * > Auto-renewal is triggered seven days before the expiration date of the instance.
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

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
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
            'action' => 'ModifyInstanceAutoRenewalAttribute',
            'version' => '2015-01-01',
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
     * Enables or disables auto-renewal for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * > Auto-renewal is triggered seven days before the expiration date of the instance.
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
     * Sets the intended bandwidth value of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   Before you call this operation, make sure that you understand the billing methods and pricing of instance bandwidth. Tair (Redis OSS-compatible) charges fees per hour based on the amount and usage duration of the extra bandwidth that you purchase. The fees vary based on the region that you select. For more information, see [Billable items](https://help.aliyun.com/document_detail/54532.html).
     * *   The bandwidth of an instance or a shard can be increased by up to six times the default bandwidth of the instance, but the increase in bandwidth cannot exceed 192 Mbit/s. For example, if the default bandwidth of a Tair DRAM-based master-replica instance equipped with 2 GB of memory is 96 Mbit/s, you can increase the bandwidth of the instance by up to 192 Mbit/s. As a result, the maximum bandwidth of the instance is 288 Mbit/s. If the default bandwidth of a Redis Open-Source Edition master-replica instance equipped with 256 MB of memory is 10 Mbit/s, you can increase the bandwidth of the instance by up to 60 Mbit/s. As a result, the maximum bandwidth of the instance is 70 Mbit/s.
     *
     * @param request - ModifyInstanceBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceBandwidthResponse
     *
     * @param ModifyInstanceBandwidthRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceBandwidthResponse
     */
    public function modifyInstanceBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->targetIntranetBandwidth) {
            @$query['TargetIntranetBandwidth'] = $request->targetIntranetBandwidth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceBandwidth',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the intended bandwidth value of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   Before you call this operation, make sure that you understand the billing methods and pricing of instance bandwidth. Tair (Redis OSS-compatible) charges fees per hour based on the amount and usage duration of the extra bandwidth that you purchase. The fees vary based on the region that you select. For more information, see [Billable items](https://help.aliyun.com/document_detail/54532.html).
     * *   The bandwidth of an instance or a shard can be increased by up to six times the default bandwidth of the instance, but the increase in bandwidth cannot exceed 192 Mbit/s. For example, if the default bandwidth of a Tair DRAM-based master-replica instance equipped with 2 GB of memory is 96 Mbit/s, you can increase the bandwidth of the instance by up to 192 Mbit/s. As a result, the maximum bandwidth of the instance is 288 Mbit/s. If the default bandwidth of a Redis Open-Source Edition master-replica instance equipped with 256 MB of memory is 10 Mbit/s, you can increase the bandwidth of the instance by up to 60 Mbit/s. As a result, the maximum bandwidth of the instance is 70 Mbit/s.
     *
     * @param request - ModifyInstanceBandwidthRequest
     *
     * @returns ModifyInstanceBandwidthResponse
     *
     * @param ModifyInstanceBandwidthRequest $request
     *
     * @return ModifyInstanceBandwidthResponse
     */
    public function modifyInstanceBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceBandwidthWithOptions($request, $runtime);
    }

    /**
     * Modifies the parameter settings of a Tair (Redis OSS-compatible) instance.
     *
     * @param request - ModifyInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
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

        if (null !== $request->paramNoLooseSentinelEnabled) {
            @$query['ParamNoLooseSentinelEnabled'] = $request->paramNoLooseSentinelEnabled;
        }

        if (null !== $request->paramNoLooseSentinelPasswordFreeAccess) {
            @$query['ParamNoLooseSentinelPasswordFreeAccess'] = $request->paramNoLooseSentinelPasswordFreeAccess;
        }

        if (null !== $request->paramNoLooseSentinelPasswordFreeCommands) {
            @$query['ParamNoLooseSentinelPasswordFreeCommands'] = $request->paramNoLooseSentinelPasswordFreeCommands;
        }

        if (null !== $request->paramReplMode) {
            @$query['ParamReplMode'] = $request->paramReplMode;
        }

        if (null !== $request->paramSemisyncReplTimeout) {
            @$query['ParamSemisyncReplTimeout'] = $request->paramSemisyncReplTimeout;
        }

        if (null !== $request->paramSentinelCompatEnable) {
            @$query['ParamSentinelCompatEnable'] = $request->paramSentinelCompatEnable;
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
            'action' => 'ModifyInstanceConfig',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the parameter settings of a Tair (Redis OSS-compatible) instance.
     *
     * @param request - ModifyInstanceConfigRequest
     *
     * @returns ModifyInstanceConfigResponse
     *
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
     * Modifies the maintenance window of an Tair (Redis OSS-compatible) instance. Alibaba Cloud maintains Tair (Redis OSS-compatible) instances during the specified maintenance window.
     *
     * @remarks
     * You can also modify the maintenance window of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Set a maintenance window](https://help.aliyun.com/document_detail/55252.html).
     *
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceMaintainTime',
            'version' => '2015-01-01',
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
     * Modifies the maintenance window of an Tair (Redis OSS-compatible) instance. Alibaba Cloud maintains Tair (Redis OSS-compatible) instances during the specified maintenance window.
     *
     * @remarks
     * You can also modify the maintenance window of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Set a maintenance window](https://help.aliyun.com/document_detail/55252.html).
     *
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
     * Upgrades the major version of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about the precautions and impacts of the upgrade, see [Upgrade the major version](https://help.aliyun.com/document_detail/101764.html).
     *
     * @param request - ModifyInstanceMajorVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceMajorVersionResponse
     *
     * @param ModifyInstanceMajorVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMajorVersionResponse
     */
    public function modifyInstanceMajorVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->majorVersion) {
            @$query['MajorVersion'] = $request->majorVersion;
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
            'action' => 'ModifyInstanceMajorVersion',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceMajorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the major version of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * For more information about the precautions and impacts of the upgrade, see [Upgrade the major version](https://help.aliyun.com/document_detail/101764.html).
     *
     * @param request - ModifyInstanceMajorVersionRequest
     *
     * @returns ModifyInstanceMajorVersionResponse
     *
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
     * Updates the minor version of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * The procedure to update the minor version of an instance varies based on types of Tair (Redis OSS-compatible) instances. For more information, see [Upgrade the minor version](https://help.aliyun.com/document_detail/56450.html).
     * >
     * *   Before you call this operation, you can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to query the minor version of the current instance.
     * *   When you switch your workloads over from the original instance to a new instance or from the master node to the replica node in the original instance, you may experience disconnections that last a few seconds. The original instance stays in the read-only state within 60 seconds until all data is synchronized. We recommend that you upgrade the original instance during off-peak hours and make sure that your application is configured to automatically reconnect to the original instance.
     *
     * @param request - ModifyInstanceMinorVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceMinorVersionResponse
     *
     * @param ModifyInstanceMinorVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMinorVersionResponse
     */
    public function modifyInstanceMinorVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minorversion) {
            @$query['Minorversion'] = $request->minorversion;
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
            'action' => 'ModifyInstanceMinorVersion',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the minor version of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * The procedure to update the minor version of an instance varies based on types of Tair (Redis OSS-compatible) instances. For more information, see [Upgrade the minor version](https://help.aliyun.com/document_detail/56450.html).
     * >
     * *   Before you call this operation, you can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to query the minor version of the current instance.
     * *   When you switch your workloads over from the original instance to a new instance or from the master node to the replica node in the original instance, you may experience disconnections that last a few seconds. The original instance stays in the read-only state within 60 seconds until all data is synchronized. We recommend that you upgrade the original instance during off-peak hours and make sure that your application is configured to automatically reconnect to the original instance.
     *
     * @param request - ModifyInstanceMinorVersionRequest
     *
     * @returns ModifyInstanceMinorVersionResponse
     *
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
     * Extends the retention period of the classic network endpoint of a Tair (Redis OSS-compatible) instance. You can call this operation after you change the network type of the Tair (Redis OSS-compatible) instance from classic network to Virtual Private Cloud (VPC) with the classic network endpoint retained.
     *
     * @remarks
     * You can also perform this operation in the Tair (Redis OSS-compatible) console. For more information, see [Change the expiration time for the endpoint of the classic network](https://help.aliyun.com/document_detail/60062.html).
     * > For more information about how to switch the network type of a Tair (Redis OSS-compatible) instance from classic network to VPC, see [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html).
     *
     * @param request - ModifyInstanceNetExpireTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceNetExpireTimeResponse
     *
     * @param ModifyInstanceNetExpireTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceNetExpireTimeResponse
     */
    public function modifyInstanceNetExpireTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classicExpiredDays) {
            @$query['ClassicExpiredDays'] = $request->classicExpiredDays;
        }

        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceNetExpireTime',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceNetExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Extends the retention period of the classic network endpoint of a Tair (Redis OSS-compatible) instance. You can call this operation after you change the network type of the Tair (Redis OSS-compatible) instance from classic network to Virtual Private Cloud (VPC) with the classic network endpoint retained.
     *
     * @remarks
     * You can also perform this operation in the Tair (Redis OSS-compatible) console. For more information, see [Change the expiration time for the endpoint of the classic network](https://help.aliyun.com/document_detail/60062.html).
     * > For more information about how to switch the network type of a Tair (Redis OSS-compatible) instance from classic network to VPC, see [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html).
     *
     * @param request - ModifyInstanceNetExpireTimeRequest
     *
     * @returns ModifyInstanceNetExpireTimeResponse
     *
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
     * Applies a parameter template to specific instances. This indicates that the parameter values in the template take effect on the instances. After you modify a parameter template, you must reapply it to specific instances for the new parameter values to take effect on the instances.
     *
     * @param request - ModifyInstanceParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceParameterResponse
     *
     * @param ModifyInstanceParameterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceParameterResponse
     */
    public function modifyInstanceParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceParameter',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies a parameter template to specific instances. This indicates that the parameter values in the template take effect on the instances. After you modify a parameter template, you must reapply it to specific instances for the new parameter values to take effect on the instances.
     *
     * @param request - ModifyInstanceParameterRequest
     *
     * @returns ModifyInstanceParameterResponse
     *
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
     * Enables Transport Layer Security (TLS) for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also configure SSL encryption in the console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * >  To specify the earliest supported SSL version, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to modify the required parameter.
     *
     * @param request - ModifyInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSSL',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables Transport Layer Security (TLS) for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also configure SSL encryption in the console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * >  To specify the earliest supported SSL version, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to modify the required parameter.
     *
     * @param request - ModifyInstanceSSLRequest
     *
     * @returns ModifyInstanceSSLResponse
     *
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
     * Changes the configurations of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  For more information about the procedure, impacts, limits, and fees of this operation, see [Change the configurations of an instance](https://help.aliyun.com/document_detail/26353.html).
     *
     * @param request - ModifyInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSpecResponse
     *
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
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

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->forceTrans) {
            @$query['ForceTrans'] = $request->forceTrans;
        }

        if (null !== $request->forceUpgrade) {
            @$query['ForceUpgrade'] = $request->forceUpgrade;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->majorVersion) {
            @$query['MajorVersion'] = $request->majorVersion;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
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

        if (null !== $request->readOnlyCount) {
            @$query['ReadOnlyCount'] = $request->readOnlyCount;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaCount) {
            @$query['ReplicaCount'] = $request->replicaCount;
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

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        if (null !== $request->slaveReadOnlyCount) {
            @$query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }

        if (null !== $request->slaveReplicaCount) {
            @$query['SlaveReplicaCount'] = $request->slaveReplicaCount;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSpec',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the configurations of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  For more information about the procedure, impacts, limits, and fees of this operation, see [Change the configurations of an instance](https://help.aliyun.com/document_detail/26353.html).
     *
     * @param request - ModifyInstanceSpecRequest
     *
     * @returns ModifyInstanceSpecResponse
     *
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
     * Enables transparent data encryption (TDE) for a Tair (Redis OSS-compatible) instance. You can use existing custom keys.
     *
     * @remarks
     * > For more information about TDE and the impact of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *
     * @param request - ModifyInstanceTDERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceTDEResponse
     *
     * @param ModifyInstanceTDERequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyInstanceTDEResponse
     */
    public function modifyInstanceTDEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->encryptionName) {
            @$query['EncryptionName'] = $request->encryptionName;
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

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->TDEStatus) {
            @$query['TDEStatus'] = $request->TDEStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceTDE',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables transparent data encryption (TDE) for a Tair (Redis OSS-compatible) instance. You can use existing custom keys.
     *
     * @remarks
     * > For more information about TDE and the impact of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *
     * @param request - ModifyInstanceTDERequest
     *
     * @returns ModifyInstanceTDEResponse
     *
     * @param ModifyInstanceTDERequest $request
     *
     * @return ModifyInstanceTDEResponse
     */
    public function modifyInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * Enables or disables password-free access for a Tair (Redis OSS-compatible) instance. This way, you can connect to a database in a convenient and secure manner.
     *
     * @remarks
     * When the password-free access feature is enabled, Elastic Compute Service (ECS) instances in the same virtual private cloud (VPC) can connect to the Tair instance without a password. You can also use the username and password to connect to the Tair instance.
     * > The Tair instance is deployed in a VPC. For more information, see [Enable password-free access](https://help.aliyun.com/document_detail/85168.html).
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcAuthMode) {
            @$query['VpcAuthMode'] = $request->vpcAuthMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceVpcAuthMode',
            'version' => '2015-01-01',
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
     * Enables or disables password-free access for a Tair (Redis OSS-compatible) instance. This way, you can connect to a database in a convenient and secure manner.
     *
     * @remarks
     * When the password-free access feature is enabled, Elastic Compute Service (ECS) instances in the same virtual private cloud (VPC) can connect to the Tair instance without a password. You can also use the username and password to connect to the Tair instance.
     * > The Tair instance is deployed in a VPC. For more information, see [Enable password-free access](https://help.aliyun.com/document_detail/85168.html).
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
     * Temporarily adjusts the internal bandwidth of a Tair (Redis OSS-compatible) instance that is deployed in a dedicated cluster.
     *
     * @remarks
     * >
     * *   This operation is applicable only to an instance that is deployed in a dedicated cluster. To adjust the bandwidth of a standard instance, call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation.
     *
     * @param request - ModifyIntranetAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIntranetAttributeResponse
     *
     * @param ModifyIntranetAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyIntranetAttributeResponse
     */
    public function modifyIntranetAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandWidth) {
            @$query['BandWidth'] = $request->bandWidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIntranetAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIntranetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Temporarily adjusts the internal bandwidth of a Tair (Redis OSS-compatible) instance that is deployed in a dedicated cluster.
     *
     * @remarks
     * >
     * *   This operation is applicable only to an instance that is deployed in a dedicated cluster. To adjust the bandwidth of a standard instance, call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation.
     *
     * @param request - ModifyIntranetAttributeRequest
     *
     * @returns ModifyIntranetAttributeResponse
     *
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
     * Modifies the settings of a parameter template.
     *
     * @param request - ModifyParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyParameterGroupResponse
     *
     * @param ModifyParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyParameterGroupResponse
     */
    public function modifyParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupDesc) {
            @$query['ParameterGroupDesc'] = $request->parameterGroupDesc;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
        }

        if (null !== $request->parameterGroupName) {
            @$query['ParameterGroupName'] = $request->parameterGroupName;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyParameterGroup',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the settings of a parameter template.
     *
     * @param request - ModifyParameterGroupRequest
     *
     * @returns ModifyParameterGroupResponse
     *
     * @param ModifyParameterGroupRequest $request
     *
     * @return ModifyParameterGroupResponse
     */
    public function modifyParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterGroupWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which a Tair (Redis OSS-compatible) instance belongs.
     *
     * @remarks
     * You can also perform this operation in the [Resource Management](https://resourcemanager.console.aliyun.com/resource-center) console. For more information, see [Transfer resources across resource groups](https://help.aliyun.com/document_detail/94487.html).
     * >  Resource Group allows you to sort resources owned by your Alibaba Cloud account into groups. This simplifies the resource and permission management within your Alibaba Cloud account. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
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
            'version' => '2015-01-01',
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
     * Changes the resource group to which a Tair (Redis OSS-compatible) instance belongs.
     *
     * @remarks
     * You can also perform this operation in the [Resource Management](https://resourcemanager.console.aliyun.com/resource-center) console. For more information, see [Transfer resources across resource groups](https://help.aliyun.com/document_detail/94487.html).
     * >  Resource Group allows you to sort resources owned by your Alibaba Cloud account into groups. This simplifies the resource and permission management within your Alibaba Cloud account. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
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
     * Resets the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * > After you call this operation, the security groups that are added to the whitelists of the Tair instance are deleted, and the security group specified by the **SecurityGroupId** parameter is added to the whitelists. For more information about how to reset security groups in the Tair console, see [Add security groups](https://help.aliyun.com/document_detail/148267.html).
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityGroupConfiguration',
            'version' => '2015-01-01',
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
     * Resets the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * > After you call this operation, the security groups that are added to the whitelists of the Tair instance are deleted, and the security group specified by the **SecurityGroupId** parameter is added to the whitelists. For more information about how to reset security groups in the Tair console, see [Add security groups](https://help.aliyun.com/document_detail/148267.html).
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
     * Modifies the IP address whitelists of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also modify the whitelists of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Configure a whitelist for an instance](https://help.aliyun.com/document_detail/56464.html).
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIps',
            'version' => '2015-01-01',
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
     * Modifies the IP address whitelists of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also modify the whitelists of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Configure a whitelist for an instance](https://help.aliyun.com/document_detail/56464.html).
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
     * 修改TairCustom实例基本参数.
     *
     * @param request - ModifyTairKVCacheCustomInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTairKVCacheCustomInstanceAttributeResponse
     *
     * @param ModifyTairKVCacheCustomInstanceAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ModifyTairKVCacheCustomInstanceAttributeResponse
     */
    public function modifyTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTairKVCacheCustomInstanceAttribute',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTairKVCacheCustomInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改TairCustom实例基本参数.
     *
     * @param request - ModifyTairKVCacheCustomInstanceAttributeRequest
     *
     * @returns ModifyTairKVCacheCustomInstanceAttributeResponse
     *
     * @param ModifyTairKVCacheCustomInstanceAttributeRequest $request
     *
     * @return ModifyTairKVCacheCustomInstanceAttributeResponse
     */
    public function modifyTairKVCacheCustomInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the task information, such as the task execution time.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
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
            'version' => '2015-01-01',
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
     * Modifies the task information, such as the task execution time.
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
     * Releases the private endpoint of an ApsaraDB for Redis cluster instance.
     *
     * @remarks
     * In direct connection mode, clients can bypass proxy nodes and use private endpoints to connect to ApsaraDB for Redis instances. This is similar to the connection to a native Redis cluster. The direct connection mode can reduce communication overheads and the response time of ApsaraDB for Redis. For more information, see [Enable the direct connection mode](https://help.aliyun.com/document_detail/146901.html).
     *
     * @param request - ReleaseDirectConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseDirectConnectionResponse
     *
     * @param ReleaseDirectConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleaseDirectConnectionResponse
     */
    public function releaseDirectConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseDirectConnection',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseDirectConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the private endpoint of an ApsaraDB for Redis cluster instance.
     *
     * @remarks
     * In direct connection mode, clients can bypass proxy nodes and use private endpoints to connect to ApsaraDB for Redis instances. This is similar to the connection to a native Redis cluster. The direct connection mode can reduce communication overheads and the response time of ApsaraDB for Redis. For more information, see [Enable the direct connection mode](https://help.aliyun.com/document_detail/146901.html).
     *
     * @param request - ReleaseDirectConnectionRequest
     *
     * @returns ReleaseDirectConnectionResponse
     *
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
     * Releases the public endpoint of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also release the public endpoint for an instance in the Tair (Redis OSS-compatible) console. For more information, see [Release public endpoints](https://help.aliyun.com/document_detail/125424.html).
     *
     * @param request - ReleaseInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentConnectionString) {
            @$query['CurrentConnectionString'] = $request->currentConnectionString;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstancePublicConnection',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the public endpoint of a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * You can also release the public endpoint for an instance in the Tair (Redis OSS-compatible) console. For more information, see [Release public endpoints](https://help.aliyun.com/document_detail/125424.html).
     *
     * @param request - ReleaseInstancePublicConnectionRequest
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
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
     * Removes a child instance from a distributed instance.
     *
     * @remarks
     * The operation that you want to perform. Set the value to **RemoveSubInstance**.
     *
     * @param request - RemoveSubInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSubInstanceResponse
     *
     * @param RemoveSubInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveSubInstanceResponse
     */
    public function removeSubInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveSubInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveSubInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a child instance from a distributed instance.
     *
     * @remarks
     * The operation that you want to perform. Set the value to **RemoveSubInstance**.
     *
     * @param request - RemoveSubInstanceRequest
     *
     * @returns RemoveSubInstanceResponse
     *
     * @param RemoveSubInstanceRequest $request
     *
     * @return RemoveSubInstanceResponse
     */
    public function removeSubInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSubInstanceWithOptions($request, $runtime);
    }

    /**
     * This operation is not recommended now. The billing method for bandwidth of a Tair (Redis OSS-compatible) instance is changed to pay-as-you-go.
     *
     * @remarks
     * You can adjust the bandwidth of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html). You can also call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to purchase bandwidth for an instance.
     *
     * @param request - RenewAdditionalBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAdditionalBandwidthResponse
     *
     * @param RenewAdditionalBandwidthRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RenewAdditionalBandwidthResponse
     */
    public function renewAdditionalBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderTimeLength) {
            @$query['OrderTimeLength'] = $request->orderTimeLength;
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

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAdditionalBandwidth',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAdditionalBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is not recommended now. The billing method for bandwidth of a Tair (Redis OSS-compatible) instance is changed to pay-as-you-go.
     *
     * @remarks
     * You can adjust the bandwidth of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html). You can also call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to purchase bandwidth for an instance.
     *
     * @param request - RenewAdditionalBandwidthRequest
     *
     * @returns RenewAdditionalBandwidthResponse
     *
     * @param RenewAdditionalBandwidthRequest $request
     *
     * @return RenewAdditionalBandwidthResponse
     */
    public function renewAdditionalBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAdditionalBandwidthWithOptions($request, $runtime);
    }

    /**
     * Renews an ApsaraDB for Redis instance.
     *
     * @remarks
     * This operation is applicable only to subscription instances.
     *
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
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->businessInfo) {
            @$query['BusinessInfo'] = $request->businessInfo;
        }

        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->fromApp) {
            @$query['FromApp'] = $request->fromApp;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2015-01-01',
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
     * Renews an ApsaraDB for Redis instance.
     *
     * @remarks
     * This operation is applicable only to subscription instances.
     *
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
     * Resets the password of an account for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2015-01-01',
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
     * Resets the password of an account for a Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     * >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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
     * 重置TairCustom上主机密码
     *
     * @param request - ResetTairKVCacheCustomInstancePasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetTairKVCacheCustomInstancePasswordResponse
     *
     * @param ResetTairKVCacheCustomInstancePasswordRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ResetTairKVCacheCustomInstancePasswordResponse
     */
    public function resetTairKVCacheCustomInstancePasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
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

        if (null !== $request->sourceBiz) {
            @$query['SourceBiz'] = $request->sourceBiz;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetTairKVCacheCustomInstancePassword',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetTairKVCacheCustomInstancePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置TairCustom上主机密码
     *
     * @param request - ResetTairKVCacheCustomInstancePasswordRequest
     *
     * @returns ResetTairKVCacheCustomInstancePasswordResponse
     *
     * @param ResetTairKVCacheCustomInstancePasswordRequest $request
     *
     * @return ResetTairKVCacheCustomInstancePasswordResponse
     */
    public function resetTairKVCacheCustomInstancePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetTairKVCacheCustomInstancePasswordWithOptions($request, $runtime);
    }

    /**
     * 变配TairCustom的主机的磁盘.
     *
     * @param request - ResizeTairKVCacheCustomInstanceDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeTairKVCacheCustomInstanceDiskResponse
     *
     * @param ResizeTairKVCacheCustomInstanceDiskRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ResizeTairKVCacheCustomInstanceDiskResponse
     */
    public function resizeTairKVCacheCustomInstanceDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->diskSize) {
            @$query['DiskSize'] = $request->diskSize;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeTairKVCacheCustomInstanceDisk',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeTairKVCacheCustomInstanceDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变配TairCustom的主机的磁盘.
     *
     * @param request - ResizeTairKVCacheCustomInstanceDiskRequest
     *
     * @returns ResizeTairKVCacheCustomInstanceDiskResponse
     *
     * @param ResizeTairKVCacheCustomInstanceDiskRequest $request
     *
     * @return ResizeTairKVCacheCustomInstanceDiskResponse
     */
    public function resizeTairKVCacheCustomInstanceDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeTairKVCacheCustomInstanceDiskWithOptions($request, $runtime);
    }

    /**
     * Restarts a running ApsaraDB for Redis instance.
     *
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->upgradeMinorVersion) {
            @$query['UpgradeMinorVersion'] = $request->upgradeMinorVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2015-01-01',
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
     * Restarts a running ApsaraDB for Redis instance.
     *
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
     * 重启TairCustom的主机.
     *
     * @param request - RestartTairKVCacheCustomInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartTairKVCacheCustomInstanceResponse
     *
     * @param RestartTairKVCacheCustomInstanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RestartTairKVCacheCustomInstanceResponse
     */
    public function restartTairKVCacheCustomInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartTairKVCacheCustomInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartTairKVCacheCustomInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启TairCustom的主机.
     *
     * @param request - RestartTairKVCacheCustomInstanceRequest
     *
     * @returns RestartTairKVCacheCustomInstanceResponse
     *
     * @param RestartTairKVCacheCustomInstanceRequest $request
     *
     * @return RestartTairKVCacheCustomInstanceResponse
     */
    public function restartTairKVCacheCustomInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartTairKVCacheCustomInstanceWithOptions($request, $runtime);
    }

    /**
     * Restores the data in a backup file to a specified Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   If your instance is a [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html) or a [persistent memory-optimized instance](https://help.aliyun.com/document_detail/183956.html) and has the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature enabled, you can call this operation to restore the entire instance or specific keys to a specific point in time accurate to the second. This way, you can achieve more fine-grained data restoration.
     * *   For other types of instances, we recommend that you call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) or [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation to restore the backup data to a new instance.
     *
     * @param request - RestoreInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->filterKey) {
            @$query['FilterKey'] = $request->filterKey;
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

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->timeShift) {
            @$query['TimeShift'] = $request->timeShift;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores the data in a backup file to a specified Tair (Redis OSS-compatible) instance.
     *
     * @remarks
     *   If your instance is a [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html) or a [persistent memory-optimized instance](https://help.aliyun.com/document_detail/183956.html) and has the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature enabled, you can call this operation to restore the entire instance or specific keys to a specific point in time accurate to the second. This way, you can achieve more fine-grained data restoration.
     * *   For other types of instances, we recommend that you call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) or [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation to restore the backup data to a new instance.
     *
     * @param request - RestoreInstanceRequest
     *
     * @returns RestoreInstanceResponse
     *
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
     * 启动TairCustom的主机.
     *
     * @param request - StartTairKVCacheCustomInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTairKVCacheCustomInstanceResponse
     *
     * @param StartTairKVCacheCustomInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return StartTairKVCacheCustomInstanceResponse
     */
    public function startTairKVCacheCustomInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartTairKVCacheCustomInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartTairKVCacheCustomInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动TairCustom的主机.
     *
     * @param request - StartTairKVCacheCustomInstanceRequest
     *
     * @returns StartTairKVCacheCustomInstanceResponse
     *
     * @param StartTairKVCacheCustomInstanceRequest $request
     *
     * @return StartTairKVCacheCustomInstanceResponse
     */
    public function startTairKVCacheCustomInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTairKVCacheCustomInstanceWithOptions($request, $runtime);
    }

    /**
     * 停止TairCustom的主机.
     *
     * @param request - StopTairKVCacheCustomInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTairKVCacheCustomInstanceResponse
     *
     * @param StopTairKVCacheCustomInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return StopTairKVCacheCustomInstanceResponse
     */
    public function stopTairKVCacheCustomInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopTairKVCacheCustomInstance',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopTairKVCacheCustomInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止TairCustom的主机.
     *
     * @param request - StopTairKVCacheCustomInstanceRequest
     *
     * @returns StopTairKVCacheCustomInstanceResponse
     *
     * @param StopTairKVCacheCustomInstanceRequest $request
     *
     * @return StopTairKVCacheCustomInstanceResponse
     */
    public function stopTairKVCacheCustomInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTairKVCacheCustomInstanceWithOptions($request, $runtime);
    }

    /**
     * Performs a master-replica switchover to switch node roles. This operation is applicable to disaster recovery drills and nearby access to applications that are deployed across zones.
     *
     * @remarks
     * > For more information about nearby access to applications that are deployed across zones, see [Switch node roles](https://help.aliyun.com/document_detail/164222.html).
     * The instance must be a Redis Open-Source Edition instance or Tair (Enterprise Edition) [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses local disks.
     * A call to this operation has the following impacts on your instance:
     * *   The data shards in the instance may change to the read-only state and experience transient connections within seconds. Make sure that your application is configured to automatically reconnect to the instance.
     * *   If the instance enters the switching state, you cannot manage this instance. For example, you cannot modify the instance configurations or migrate the instance to another zone.
     *
     * @param request - SwitchInstanceHARequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchInstanceHAResponse
     *
     * @param SwitchInstanceHARequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SwitchInstanceHAResponse
     */
    public function switchInstanceHAWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        if (null !== $request->switchType) {
            @$query['SwitchType'] = $request->switchType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchInstanceHA',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a master-replica switchover to switch node roles. This operation is applicable to disaster recovery drills and nearby access to applications that are deployed across zones.
     *
     * @remarks
     * > For more information about nearby access to applications that are deployed across zones, see [Switch node roles](https://help.aliyun.com/document_detail/164222.html).
     * The instance must be a Redis Open-Source Edition instance or Tair (Enterprise Edition) [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses local disks.
     * A call to this operation has the following impacts on your instance:
     * *   The data shards in the instance may change to the read-only state and experience transient connections within seconds. Make sure that your application is configured to automatically reconnect to the instance.
     * *   If the instance enters the switching state, you cannot manage this instance. For example, you cannot modify the instance configurations or migrate the instance to another zone.
     *
     * @param request - SwitchInstanceHARequest
     *
     * @returns SwitchInstanceHAResponse
     *
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
     * Enables or disables the proxy mode for a Tair (Redis OSS-compatible) cluster instance in a dedicated cluster.
     *
     * @remarks
     * For more information about the proxy mode, see [Features of proxy servers](https://help.aliyun.com/document_detail/142959.html). Before you call this operation, make sure that the following requirements are met:
     * *   The instance is created by using a dedicated cluster. For more information, see [What is ApsaraDB for MyBase?](https://help.aliyun.com/document_detail/141455.html)
     * *   The instance uses the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     * >  Before you call the SwitchInstanceProxy operation, you must call the [DescribeDedicatedClusterInstanceList](https://help.aliyun.com/document_detail/473867.html) operation and view the value of the **ProxyCount** response parameter to check whether the proxy mode is enabled. A value of 0 indicates that the proxy mode is disabled. A value that is greater than 0 indicates that the proxy mode is enabled.
     *
     * @param request - SwitchInstanceProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchInstanceProxyResponse
     *
     * @param SwitchInstanceProxyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchInstanceProxyResponse
     */
    public function switchInstanceProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchInstanceProxy',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchInstanceProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the proxy mode for a Tair (Redis OSS-compatible) cluster instance in a dedicated cluster.
     *
     * @remarks
     * For more information about the proxy mode, see [Features of proxy servers](https://help.aliyun.com/document_detail/142959.html). Before you call this operation, make sure that the following requirements are met:
     * *   The instance is created by using a dedicated cluster. For more information, see [What is ApsaraDB for MyBase?](https://help.aliyun.com/document_detail/141455.html)
     * *   The instance uses the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     * >  Before you call the SwitchInstanceProxy operation, you must call the [DescribeDedicatedClusterInstanceList](https://help.aliyun.com/document_detail/473867.html) operation and view the value of the **ProxyCount** response parameter to check whether the proxy mode is enabled. A value of 0 indicates that the proxy mode is disabled. A value that is greater than 0 indicates that the proxy mode is enabled.
     *
     * @param request - SwitchInstanceProxyRequest
     *
     * @returns SwitchInstanceProxyResponse
     *
     * @param SwitchInstanceProxyRequest $request
     *
     * @return SwitchInstanceProxyResponse
     */
    public function switchInstanceProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchInstanceProxyWithOptions($request, $runtime);
    }

    /**
     * Switches an instance from the current zone to the specified zone in the event of a fault.
     *
     * @param request - SwitchInstanceZoneFailOverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchInstanceZoneFailOverResponse
     *
     * @param SwitchInstanceZoneFailOverRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SwitchInstanceZoneFailOverResponse
     */
    public function switchInstanceZoneFailOverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->siteFaultTime) {
            @$query['SiteFaultTime'] = $request->siteFaultTime;
        }

        if (null !== $request->targetZoneId) {
            @$query['TargetZoneId'] = $request->targetZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchInstanceZoneFailOver',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchInstanceZoneFailOverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches an instance from the current zone to the specified zone in the event of a fault.
     *
     * @param request - SwitchInstanceZoneFailOverRequest
     *
     * @returns SwitchInstanceZoneFailOverResponse
     *
     * @param SwitchInstanceZoneFailOverRequest $request
     *
     * @return SwitchInstanceZoneFailOverResponse
     */
    public function switchInstanceZoneFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchInstanceZoneFailOverWithOptions($request, $runtime);
    }

    /**
     * Changes the VPC or vSwitch of a Tair (Redis OSS-compatible) instance. If the instance is deployed in the classic network, the network type of the instance is changed from the classic network to VPC.
     *
     * @param request - SwitchNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchNetworkResponse
     *
     * @param SwitchNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SwitchNetworkResponse
     */
    public function switchNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classicExpiredDays) {
            @$query['ClassicExpiredDays'] = $request->classicExpiredDays;
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

        if (null !== $request->retainClassic) {
            @$query['RetainClassic'] = $request->retainClassic;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->targetNetworkType) {
            @$query['TargetNetworkType'] = $request->targetNetworkType;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchNetwork',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the VPC or vSwitch of a Tair (Redis OSS-compatible) instance. If the instance is deployed in the classic network, the network type of the instance is changed from the classic network to VPC.
     *
     * @param request - SwitchNetworkRequest
     *
     * @returns SwitchNetworkResponse
     *
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
     * Disables configuration changes for a Tair (Redis OSS-compatible) instance before you use Data Transmission Service (DTS) to migrate or synchronize data of the instance. This prevents migration and synchronization task failures due to configuration changes.
     *
     * @param request - SyncDtsStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncDtsStatusResponse
     *
     * @param SyncDtsStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SyncDtsStatusResponse
     */
    public function syncDtsStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncDtsStatus',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncDtsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables configuration changes for a Tair (Redis OSS-compatible) instance before you use Data Transmission Service (DTS) to migrate or synchronize data of the instance. This prevents migration and synchronization task failures due to configuration changes.
     *
     * @param request - SyncDtsStatusRequest
     *
     * @returns SyncDtsStatusResponse
     *
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
     * Adds tags to Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to each instance.
     * *   You can add tags to up to 50 instances in each request.
     * You can also add tags to instances in the Tair (Redis OSS-compatible) console. For more information, see [Create a tag](https://help.aliyun.com/document_detail/118779.html).
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
            'version' => '2015-01-01',
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
     * Adds tags to Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to each instance.
     * *   You can add tags to up to 50 instances in each request.
     * You can also add tags to instances in the Tair (Redis OSS-compatible) console. For more information, see [Create a tag](https://help.aliyun.com/document_detail/118779.html).
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
     * Changes the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go or from pay-as-you-go to subscription.
     *
     * @remarks
     * Before you call this operation, make sure that you understand relevant precautions and billing rules. For more information, see the following topics:
     * *   [Change the billing method to subscription](https://help.aliyun.com/document_detail/54542.html).
     * *   [Change the billing method to pay-as-you-go](https://help.aliyun.com/document_detail/211549.html).
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

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransformInstanceChargeType',
            'version' => '2015-01-01',
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
     * Changes the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go or from pay-as-you-go to subscription.
     *
     * @remarks
     * Before you call this operation, make sure that you understand relevant precautions and billing rules. For more information, see the following topics:
     * *   [Change the billing method to subscription](https://help.aliyun.com/document_detail/54542.html).
     * *   [Change the billing method to pay-as-you-go](https://help.aliyun.com/document_detail/211549.html).
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
     * 转换本地盘到云原生
     *
     * @param request - TransformToEcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransformToEcsResponse
     *
     * @param TransformToEcsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TransformToEcsResponse
     */
    public function transformToEcsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->effectiveTime) {
            @$query['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
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

        if (null !== $request->shardCount) {
            @$query['ShardCount'] = $request->shardCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransformToEcs',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransformToEcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 转换本地盘到云原生
     *
     * @param request - TransformToEcsRequest
     *
     * @returns TransformToEcsResponse
     *
     * @param TransformToEcsRequest $request
     *
     * @return TransformToEcsResponse
     */
    public function transformToEcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformToEcsWithOptions($request, $runtime);
    }

    /**
     * Changes a pay-as-you-go Tair (Redis OSS-compatible) instance to a subscription instance.
     *
     * @remarks
     * For more information about how to change the billing method in the Tair (Redis OSS-compatible) console, see [Switch to subscription](https://help.aliyun.com/document_detail/54542.html).
     * >  You cannot change the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go.
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

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransformToPrePaid',
            'version' => '2015-01-01',
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
     * Changes a pay-as-you-go Tair (Redis OSS-compatible) instance to a subscription instance.
     *
     * @remarks
     * For more information about how to change the billing method in the Tair (Redis OSS-compatible) console, see [Switch to subscription](https://help.aliyun.com/document_detail/54542.html).
     * >  You cannot change the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go.
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
     * Removes the write lock from an instance. After the instance is unlocked, it supports both read and write operations.
     *
     * @param request - UnlockDBInstanceWriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockDBInstanceWriteResponse
     *
     * @param UnlockDBInstanceWriteRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnlockDBInstanceWriteResponse
     */
    public function unlockDBInstanceWriteWithOptions($request, $runtime)
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockDBInstanceWrite',
            'version' => '2015-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockDBInstanceWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the write lock from an instance. After the instance is unlocked, it supports both read and write operations.
     *
     * @param request - UnlockDBInstanceWriteRequest
     *
     * @returns UnlockDBInstanceWriteResponse
     *
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
     * Removes tags from Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     *   You can remove up to 20 tags at a time.
     * *   If a tag is removed from an instance and is not added to other instances, the tag is deleted.
     * You can also remove tags from instances in the Tair (Redis OSS-compatible) console. For more information, see [Remove a tag](https://help.aliyun.com/document_detail/119157.html).
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
            'version' => '2015-01-01',
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
     * Removes tags from Tair (Redis OSS-compatible) instances.
     *
     * @remarks
     *   You can remove up to 20 tags at a time.
     * *   If a tag is removed from an instance and is not added to other instances, the tag is deleted.
     * You can also remove tags from instances in the Tair (Redis OSS-compatible) console. For more information, see [Remove a tag](https://help.aliyun.com/document_detail/119157.html).
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
}
