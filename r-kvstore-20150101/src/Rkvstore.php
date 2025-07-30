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
        $this->_endpointMap = [
            'cn-qingdao' => 'r-kvstore.aliyuncs.com',
            'cn-beijing' => 'r-kvstore.aliyuncs.com',
            'cn-wulanchabu' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen' => 'r-kvstore.aliyuncs.com',
            'cn-heyuan' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-finance' => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-finance-1' => 'r-kvstore.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds one or more data shards to a Tair cluster instance.
     *  *
     * @description This operation is available only for cluster instances that use cloud disks.
     *  *
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
     * @summary Adds one or more data shards to a Tair cluster instance.
     *  *
     * @description This operation is available only for cluster instances that use cloud disks.
     *  *
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
     * @summary Applies for a private endpoint for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Clients can bypass proxy nodes and use private endpoints to connect to cluster instances. This is similar to the connection to native Redis clusters. The direct connection mode can reduce communication overheads and the response time of Tair (Redis OSS-compatible).
     * To call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a cluster instance.
     * *   The instance is deployed in classic mode.
     * *   The instance is deployed in a virtual private cloud (VPC). If the instance is deployed in the classic network, you can call the [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html) operation to change the network type to VPC.
     * *   SSL encryption is disabled for the instance. If SSL encryption is enabled, you can call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation to disable SSL encryption.
     *  *
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
     * @summary Applies for a private endpoint for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Clients can bypass proxy nodes and use private endpoints to connect to cluster instances. This is similar to the connection to native Redis clusters. The direct connection mode can reduce communication overheads and the response time of Tair (Redis OSS-compatible).
     * To call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a cluster instance.
     * *   The instance is deployed in classic mode.
     * *   The instance is deployed in a virtual private cloud (VPC). If the instance is deployed in the classic network, you can call the [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html) operation to change the network type to VPC.
     * *   SSL encryption is disabled for the instance. If SSL encryption is enabled, you can call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation to disable SSL encryption.
     *  *
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
     * @summary Applies for a public endpoint for an ApsaraDB for Redis instance.
     *  *
     * @description You can also apply for public endpoints in the ApsaraDB for Redis console. For more information, see [Use a public endpoint to connect to an ApsaraDB for Redis instance](https://help.aliyun.com/document_detail/43850.html).
     *  *
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
     * @summary Applies for a public endpoint for an ApsaraDB for Redis instance.
     *  *
     * @description You can also apply for public endpoints in the ApsaraDB for Redis console. For more information, see [Use a public endpoint to connect to an ApsaraDB for Redis instance](https://help.aliyun.com/document_detail/43850.html).
     *  *
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
     * @summary Cancels O\\\\\\&M events at a time.
     *  *
     * @description O\\&M events cannot be canceled in the following scenarios:
     * *   The allowCancel parameter is set to 0.
     * *   The current time is later than the start time of the O\\&M event.
     * *   The state value of the O\\&M event is not 3.
     *  *
     * @param CancelActiveOperationTasksRequest $request CancelActiveOperationTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelActiveOperationTasksResponse CancelActiveOperationTasksResponse
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
     * @summary Cancels O\\\\\\&M events at a time.
     *  *
     * @description O\\&M events cannot be canceled in the following scenarios:
     * *   The allowCancel parameter is set to 0.
     * *   The current time is later than the start time of the O\\&M event.
     * *   The state value of the O\\&M event is not 3.
     *  *
     * @param CancelActiveOperationTasksRequest $request CancelActiveOperationTasksRequest
     *
     * @return CancelActiveOperationTasksResponse CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a Tair (Redis OSS-compatible) instance has the permissions to use Key Management Service (KMS).
     *  *
     * @description *   For information about Transparent Data Encryption (TDE) and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * *   If the Tair (Redis OSS-compatible) instance is authorized to use KMS, you can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable TDE.
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
     * @summary Queries whether a Tair (Redis OSS-compatible) instance has the permissions to use Key Management Service (KMS).
     *  *
     * @description *   For information about Transparent Data Encryption (TDE) and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * *   If the Tair (Redis OSS-compatible) instance is authorized to use KMS, you can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable TDE.
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
     * @summary Creates an account that has specific permissions for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the running state.
     * *   You can create up to 18 accounts for an instance.
     * >  For more information about how to create an account in the console, see [Manage database accounts](https://help.aliyun.com/document_detail/92665.html).
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an account that has specific permissions for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the running state.
     * *   You can create up to 18 accounts for an instance.
     * >  For more information about how to create an account in the console, see [Manage database accounts](https://help.aliyun.com/document_detail/92665.html).
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
     * @summary Backs up a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also back up an instance in the Tair (Redis OSS-compatible) console. For more information, see [Backup and recovery](https://help.aliyun.com/document_detail/43886.html).
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
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
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
     * @summary Backs up a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also back up an instance in the Tair (Redis OSS-compatible) console. For more information, see [Backup and recovery](https://help.aliyun.com/document_detail/43886.html).
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
     * @summary Creates a cache analysis task.
     *  *
     * @description This operation is no longer available. Use the new operation. For more information, see [Real-time key statistics and offline key analysis](https://help.aliyun.com/document_detail/184226.html).
     *  *
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
     * @summary Creates a cache analysis task.
     *  *
     * @description This operation is no longer available. Use the new operation. For more information, see [Real-time key statistics and offline key analysis](https://help.aliyun.com/document_detail/184226.html).
     *  *
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
     * @summary Converts an existing Tair DRAM-based classic instance to the first child instance of a distributed instance.
     *  *
     * @description You can call this operation to convert an existing instance to the first child instance of a distributed instance. After the instance is converted, the distributed instance is created. Before you call this operation, make sure that the following requirements are met:
     * *   The instance that you want to convert must be a Tair [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses the classic deployment mode.
     * *   If the existing instance is a cluster instance, the direct connection mode must be disabled for the instance. For more information, see [Release a private endpoint](https://help.aliyun.com/document_detail/150047.html).
     * >  You can also call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation to create an instance that is specified as the first child instance of a distributed instance. After the child instance is created, the distributed instance to which the child instance belongs is created.
     *  *
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
     * @summary Converts an existing Tair DRAM-based classic instance to the first child instance of a distributed instance.
     *  *
     * @description You can call this operation to convert an existing instance to the first child instance of a distributed instance. After the instance is converted, the distributed instance is created. Before you call this operation, make sure that the following requirements are met:
     * *   The instance that you want to convert must be a Tair [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses the classic deployment mode.
     * *   If the existing instance is a cluster instance, the direct connection mode must be disabled for the instance. For more information, see [Release a private endpoint](https://help.aliyun.com/document_detail/150047.html).
     * >  You can also call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation to create an instance that is specified as the first child instance of a distributed instance. After the child instance is created, the distributed instance to which the child instance belongs is created.
     *  *
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
     * @summary Creates a Tair (Redis OSS-compatible) instance. If you want to create a Tair (Enterprise Edition) cloud-native instance, you can call the CreateTairInstance operation.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * You can call this operation to create a Tair (Redis OSS-compatible) instance or a classic Tair DRAM-based instance. To create a cloud-native Tair instance, call the [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation.
     * > For more information about how to create an instance that meets your requirements in the Tair (Redis OSS-compatible) console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     *  *
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
        if (!Utils::isUnset($request->recoverConfigMode)) {
            $query['RecoverConfigMode'] = $request->recoverConfigMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaCount)) {
            $query['ReplicaCount'] = $request->replicaCount;
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
        if (!Utils::isUnset($request->slaveReadOnlyCount)) {
            $query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }
        if (!Utils::isUnset($request->slaveReplicaCount)) {
            $query['SlaveReplicaCount'] = $request->slaveReplicaCount;
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
     * @summary Creates a Tair (Redis OSS-compatible) instance. If you want to create a Tair (Enterprise Edition) cloud-native instance, you can call the CreateTairInstance operation.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * You can call this operation to create a Tair (Redis OSS-compatible) instance or a classic Tair DRAM-based instance. To create a cloud-native Tair instance, call the [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation.
     * > For more information about how to create an instance that meets your requirements in the Tair (Redis OSS-compatible) console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     *  *
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
     * @summary Creates multiple Tair (Redis OSS-compatible) instances at a time.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >  You can call this operation to create classic Redis Open-Source Edition instances or classic Tair DRAM-based instances. We recommend that you use an API operation for creating a single instance:
     * *   [CreateInstance](https://help.aliyun.com/document_detail/473757.html): creates a Redis Open-Source instance or a classic Tair DRAM-based instance.
     * *   [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html): creates a Tair (Enterprise Edition) instance. The instance can be a DRAM-based, persistent memory-optimized, or ESSD/SSD-based instance.
     *  *
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
     * @summary Creates multiple Tair (Redis OSS-compatible) instances at a time.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >  You can call this operation to create classic Redis Open-Source Edition instances or classic Tair DRAM-based instances. We recommend that you use an API operation for creating a single instance:
     * *   [CreateInstance](https://help.aliyun.com/document_detail/473757.html): creates a Redis Open-Source instance or a classic Tair DRAM-based instance.
     * *   [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html): creates a Tair (Enterprise Edition) instance. The instance can be a DRAM-based, persistent memory-optimized, or ESSD/SSD-based instance.
     *  *
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
     * @summary Creates a parameter template.
     *  *
     * @param CreateParameterGroupRequest $request CreateParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateParameterGroupResponse CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
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
        if (!Utils::isUnset($request->parameterGroupDesc)) {
            $query['ParameterGroupDesc'] = $request->parameterGroupDesc;
        }
        if (!Utils::isUnset($request->parameterGroupName)) {
            $query['ParameterGroupName'] = $request->parameterGroupName;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates a parameter template.
     *  *
     * @param CreateParameterGroupRequest $request CreateParameterGroupRequest
     *
     * @return CreateParameterGroupResponse CreateParameterGroupResponse
     */
    public function createParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建TairCustom实例
     *  *
     * @param CreateTCInstanceRequest $request CreateTCInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTCInstanceResponse CreateTCInstanceResponse
     */
    public function createTCInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
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
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->needEni)) {
            $query['NeedEni'] = $request->needEni;
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
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
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
     * @summary 创建TairCustom实例
     *  *
     * @param CreateTCInstanceRequest $request CreateTCInstanceRequest
     *
     * @return CreateTCInstanceResponse CreateTCInstanceResponse
     */
    public function createTCInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTCInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Tair (Enterprise Edition) cloud-native instance.
     *  *
     * @description For information about instance selection, see [Instructions for selecting an appropriate Tair (Redis OSS-compatible) instance](https://help.aliyun.com/document_detail/223808.html).
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >
     * *   For information about how to create an instance in the console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     * *   To create other types of instances, such as Redis Open-Source Edition instances or [Tair DRAM-based](https://help.aliyun.com/document_detail/126164.html) instances, you can call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation.
     *  *
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
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
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
        if (!Utils::isUnset($request->recoverConfigMode)) {
            $query['RecoverConfigMode'] = $request->recoverConfigMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaCount)) {
            $query['ReplicaCount'] = $request->replicaCount;
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
        if (!Utils::isUnset($request->slaveReplicaCount)) {
            $query['SlaveReplicaCount'] = $request->slaveReplicaCount;
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
     * @summary Creates a Tair (Enterprise Edition) cloud-native instance.
     *  *
     * @description For information about instance selection, see [Instructions for selecting an appropriate Tair (Redis OSS-compatible) instance](https://help.aliyun.com/document_detail/223808.html).
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of Tair (Redis OSS-compatible).
     * >
     * *   For information about how to create an instance in the console, see [Step 1: Create an instance](https://help.aliyun.com/document_detail/26351.html).
     * *   To create other types of instances, such as Redis Open-Source Edition instances or [Tair DRAM-based](https://help.aliyun.com/document_detail/126164.html) instances, you can call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) operation.
     *  *
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
     * @summary Deletes an account from a Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the Running state.
     *  *
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes an account from a Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   This operation is supported only for instances that are compatible with Redis 4.0 or later.
     * *   The instance must be in the Running state.
     *  *
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
     * @summary 删除指定备份集
     *  *
     * @param DeleteBackupRequest $request DeleteBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupResponse DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
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
     * @summary 删除指定备份集
     *  *
     * @param DeleteBackupRequest $request DeleteBackupRequest
     *
     * @return DeleteBackupResponse DeleteBackupResponse
     */
    public function deleteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a global IP whitelist template.
     *  *
     * @description Before you delete an IP whitelist template, you must unbind (disassociate) the instances that are currently associated with the template.
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
     * @summary Deletes a global IP whitelist template.
     *  *
     * @description Before you delete an IP whitelist template, you must unbind (disassociate) the instances that are currently associated with the template.
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
     * @summary Release the Redis instance.
     *  *
     * @description For more information about how to perform the corresponding operation in the console, see [Release an instance](https://help.aliyun.com/document_detail/43882.html).
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is charged on a pay-as-you-go basis.
     * >  You cannot call this operation to release a subscription instance, which is automatically released when it expires. To release a subscription instance before it expires, submit a ticket.
     *  *
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
     * @summary Release the Redis instance.
     *  *
     * @description For more information about how to perform the corresponding operation in the console, see [Release an instance](https://help.aliyun.com/document_detail/43882.html).
     * Before you call this operation, make sure that the following requirements are met:
     * *   The instance is in the running state.
     * *   The instance is charged on a pay-as-you-go basis.
     * >  You cannot call this operation to release a subscription instance, which is automatically released when it expires. To release a subscription instance before it expires, submit a ticket.
     *  *
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
     * @summary Deletes a parameter template.
     *  *
     * @param DeleteParameterGroupRequest $request DeleteParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteParameterGroupResponse DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
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
     * @summary Deletes a parameter template.
     *  *
     * @param DeleteParameterGroupRequest $request DeleteParameterGroupRequest
     *
     * @return DeleteParameterGroupResponse DeleteParameterGroupResponse
     */
    public function deleteParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more data shards from a Tair (Redis OSS-compatible) cluster instance.
     *  *
     * @description You can also remove data shards from an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the number of shards for an instance with cloud disks](https://help.aliyun.com/document_detail/198082.html).\\
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a persistent memory-optimized instance in the cluster architecture. For more information about persistent memory-optimized instances, see [Persistent memory-optimized instances](https://help.aliyun.com/document_detail/183956.html).
     * *   The instance has more than one data shard.
     *  *
     * @param DeleteShardingNodeRequest $request DeleteShardingNodeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteShardingNodeResponse DeleteShardingNodeResponse
     */
    public function deleteShardingNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
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
     * @summary Removes one or more data shards from a Tair (Redis OSS-compatible) cluster instance.
     *  *
     * @description You can also remove data shards from an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the number of shards for an instance with cloud disks](https://help.aliyun.com/document_detail/198082.html).\\
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The instance is a persistent memory-optimized instance in the cluster architecture. For more information about persistent memory-optimized instances, see [Persistent memory-optimized instances](https://help.aliyun.com/document_detail/183956.html).
     * *   The instance has more than one data shard.
     *  *
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
     * @summary Queries a specified account of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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
     * @summary Queries a specified account of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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
     * @summary Queries the details of the O\\&M tasks of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description After you have called this API operation and queried the information about a specific O&M task, you can also call the [ModifyActiveOperationTask](https://help.aliyun.com/document_detail/473864.html) operation to modify the scheduled switchover time of the O&M task.
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
     * @summary Queries the details of the O\\&M tasks of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description After you have called this API operation and queried the information about a specific O&M task, you can also call the [ModifyActiveOperationTask](https://help.aliyun.com/document_detail/473864.html) operation to modify the scheduled switchover time of the O&M task.
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
     * @summary Queries the O\\\\\\\\\\\\&M event details of an instance.
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
     * @summary Queries the O\\\\\\\\\\\\&M event details of an instance.
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
     * @summary Queries the audit log configurations of a Tair (Redis OSS-compatible) instance. The configurations include whether the audit log feature is enabled and the retention period of audit logs.
     *  *
     * @description Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html) or [Enable the audit log feature](https://help.aliyun.com/document_detail/102015.html).
     *  *
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
     * @summary Queries the audit log configurations of a Tair (Redis OSS-compatible) instance. The configurations include whether the audit log feature is enabled and the retention period of audit logs.
     *  *
     * @description Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html) or [Enable the audit log feature](https://help.aliyun.com/document_detail/102015.html).
     *  *
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
     * @summary Queries the audit logs of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html).
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
     * @summary Queries the audit logs of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Before you call this operation, you must enable the audit log feature for the instance. For more information, see [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/473829.html).
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
     * @summary Queries the types of Tair (Redis OSS-compatible) instances that can be created in a specified zone.
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
     * @summary Queries the types of Tair (Redis OSS-compatible) instances that can be created in a specified zone.
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
     * @summary Queries the backup policy of a Tair (Redis OSS-compatible) instance, including the backup cycle and backup time.
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
     * @summary Queries the backup policy of a Tair (Redis OSS-compatible) instance, including the backup cycle and backup time.
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
     * @summary Queries the execution status of backup tasks for a Tair (Redis OSS-compatible) instance.
     *  *
     * @param DescribeBackupTasksRequest $request DescribeBackupTasksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupTasksResponse DescribeBackupTasksResponse
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
     * @summary Queries the execution status of backup tasks for a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the backup files of the Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the backup files of the Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the cache analysis report of an instance on a specified date.
     *  *
     * @description > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *  *
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
     * @summary Queries the cache analysis report of an instance on a specified date.
     *  *
     * @description > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *  *
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
     * @summary Queries a list of cache analysis reports for an instance.
     *  *
     * @description > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *  *
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
     * @summary Queries a list of cache analysis reports for an instance.
     *  *
     * @description > Tair (Redis OSS-compatible) has optimized the cache analytics feature to improve user experience. This API operation is phased out. You can use the new API operation for cache analytics. For more information, see [API operations for cache analytics are upgraded](https://help.aliyun.com/document_detail/186019.html).
     * Before you call this operation, make sure that the instance meets the following requirements:
     * *   The engine version of the instance is Redis 4.0 or later.
     * *   The instance uses the latest minor version. For more information about how to check whether to update the minor version of an instance, see [How do I check whether the minor version of a Tair (Redis OSS-compatible) instance is the latest?](https://help.aliyun.com/document_detail/129203.html)
     *  *
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
     * @summary Queries the backup sets of a Tair (Redis OSS-compatible) cluster instance.
     *  *
     * @description This operation is applicable only to cloud-native instances.
     *  *
     * @param DescribeClusterBackupListRequest $request DescribeClusterBackupListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterBackupListResponse DescribeClusterBackupListResponse
     */
    public function describeClusterBackupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the backup sets of a Tair (Redis OSS-compatible) cluster instance.
     *  *
     * @description This operation is applicable only to cloud-native instances.
     *  *
     * @param DescribeClusterBackupListRequest $request DescribeClusterBackupListRequest
     *
     * @return DescribeClusterBackupListResponse DescribeClusterBackupListResponse
     */
    public function describeClusterBackupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBackupListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration information of nodes in a Tair (Redis OSS-compatible) cluster instance, such as the specifications and the maximum number of connections.
     *  *
     * @description > This API operation is applicable only to Tair (Redis OSS-compatible) instances that use [cloud disks](https://help.aliyun.com/document_detail/188068.html) and the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     *  *
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
     * @summary Queries the configuration information of nodes in a Tair (Redis OSS-compatible) cluster instance, such as the specifications and the maximum number of connections.
     *  *
     * @description > This API operation is applicable only to Tair (Redis OSS-compatible) instances that use [cloud disks](https://help.aliyun.com/document_detail/188068.html) and the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     *  *
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
     * @summary Queries the network information of an ApsaraDB for Redis instance.
     *  *
     * @param DescribeDBInstanceNetInfoRequest $request DescribeDBInstanceNetInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfoResponse
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
     * @summary Queries the network information of an ApsaraDB for Redis instance.
     *  *
     * @param DescribeDBInstanceNetInfoRequest $request DescribeDBInstanceNetInfoRequest
     *
     * @return DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about virtual IP addresses (VIPs) of child instances of a cluster instance in direct connection mode.
     *  *
     * @description > Only instances that use cloud disks support this operation.
     *  *
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
     * @summary Queries the information about virtual IP addresses (VIPs) of child instances of a cluster instance in direct connection mode.
     *  *
     * @description > Only instances that use cloud disks support this operation.
     *  *
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
     * @summary Queries the information of Tair (Redis OSS-compatible) instances deployed in a dedicated cluster.
     *  *
     * @description > If you want to query the information about Tair (Redis OSS-compatible) instances that are not deployed in a dedicated cluster, call the [DescribeInstanceAttribute](https://help.aliyun.com/document_detail/473779.html) operation.
     *  *
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
     * @summary Queries the information of Tair (Redis OSS-compatible) instances deployed in a dedicated cluster.
     *  *
     * @description > If you want to query the information about Tair (Redis OSS-compatible) instances that are not deployed in a dedicated cluster, call the [DescribeInstanceAttribute](https://help.aliyun.com/document_detail/473779.html) operation.
     *  *
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
     * @summary Queries the details of a custom key for a Tair (Redis OSS-compatible) instance to use transparent data encryption (TDE).
     *  *
     * @description Before you call this operation, TDE must be enabled for the Tair (Redis OSS-compatible) instance by using a custom key. For more information, see [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html).
     * > For more information about TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *  *
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
     * @summary Queries the details of a custom key for a Tair (Redis OSS-compatible) instance to use transparent data encryption (TDE).
     *  *
     * @description Before you call this operation, TDE must be enabled for the Tair (Redis OSS-compatible) instance by using a custom key. For more information, see [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html).
     * > For more information about TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *  *
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
     * @summary Queries a list of custom keys used by Tair (Redis OSS-compatible) instances.
     *  *
     * @description *   You can specify a custom key when you call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable Transparent Data Encryption (TDE). You can call the DescribeEncryptionKeyList operation to query the custom keys that are in use. To create a custom key, you can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation of Key Management Service (KMS).
     * *   For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *  *
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
     * @summary Queries a list of custom keys used by Tair (Redis OSS-compatible) instances.
     *  *
     * @description *   You can specify a custom key when you call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) operation to enable Transparent Data Encryption (TDE). You can call the DescribeEncryptionKeyList operation to query the custom keys that are in use. To create a custom key, you can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation of Key Management Service (KMS).
     * *   For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *  *
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
     * @summary Queries the major version and minor version of a Tair (Redis OSS-compatible) instance and the release notes for minor versions.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeEngineVersion\\&type=RPC\\&version=2015-01-01)
     *  *
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
     * @summary Queries the major version and minor version of a Tair (Redis OSS-compatible) instance and the release notes for minor versions.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeEngineVersion\\&type=RPC\\&version=2015-01-01)
     *  *
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
     * @summary Queries the details of a distributed Tair (Redis OSS-compatible) instance.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeGlobalDistributeCache\\&type=RPC\\&version=2015-01-01)
     *  *
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
     * @summary Queries the details of a distributed Tair (Redis OSS-compatible) instance.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=R-kvstore\\&api=DescribeGlobalDistributeCache\\&type=RPC\\&version=2015-01-01)
     *  *
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
     * @summary Queries global IP whitelist templates.
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
     * @summary Queries global IP whitelist templates.
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
     * @summary Queries information about the global IP whitelist templates associated with an instance.
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
     * @summary Queries information about the global IP whitelist templates associated with an instance.
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
     * @summary Queries the performance monitoring data of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also query the performance monitoring data of an instance in the Tair console. For more information, see [Metrics](https://help.aliyun.com/document_detail/43887.html).
     *  *
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the performance monitoring data of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also query the performance monitoring data of an instance in the Tair console. For more information, see [Metrics](https://help.aliyun.com/document_detail/43887.html).
     *  *
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
     * @summary Queries the attribute of Tair (Redis OSS-compatible) instances.
     *  *
     * @param DescribeInstanceAttributeRequest $request DescribeInstanceAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceAttributeResponse DescribeInstanceAttributeResponse
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
     * @summary Queries the attribute of Tair (Redis OSS-compatible) instances.
     *  *
     * @param DescribeInstanceAttributeRequest $request DescribeInstanceAttributeRequest
     *
     * @return DescribeInstanceAttributeResponse DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether auto-renewal is enabled for a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries whether auto-renewal is enabled for a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the default parameter configurations of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This operation is available only for instances that use cloud disks.
     * > You can call the [DescribeParameters](https://help.aliyun.com/document_detail/473847.html) operation to query the parameter settings of instances that use local disks.
     *  *
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
     * @summary Queries the default parameter configurations of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This operation is available only for instances that use cloud disks.
     * > You can call the [DescribeParameters](https://help.aliyun.com/document_detail/473847.html) operation to query the parameter settings of instances that use local disks.
     *  *
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
     * @summary Queries whether TLS (SSL) encryption is enabled for an instance.
     *  *
     * @description SSL encryption is supported for Tair (Redis OSS-compatible) 2.8 standard master-replica instances, Tair (Redis OSS-compatible) 2.8 master-replica cluster instances, and Tair (Redis OSS-compatible) 4.0 master-replica cluster instances. You can enable SSL encryption to enhance data transmission security.
     * You can use one of the following methods to enable or disable SSL encryption or update the SSL certificate for a Tair (Redis OSS-compatible) instance:
     * *   Call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation.
     * *   Enable or disable SSL encryption or update the SSL certificate in the Tair (Redis OSS-compatible) console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * > After SSL encryption is enabled, the instance may respond slower.
     *  *
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
     * @summary Queries whether TLS (SSL) encryption is enabled for an instance.
     *  *
     * @description SSL encryption is supported for Tair (Redis OSS-compatible) 2.8 standard master-replica instances, Tair (Redis OSS-compatible) 2.8 master-replica cluster instances, and Tair (Redis OSS-compatible) 4.0 master-replica cluster instances. You can enable SSL encryption to enhance data transmission security.
     * You can use one of the following methods to enable or disable SSL encryption or update the SSL certificate for a Tair (Redis OSS-compatible) instance:
     * *   Call the [ModifyInstanceSSL](https://help.aliyun.com/document_detail/473838.html) operation.
     * *   Enable or disable SSL encryption or update the SSL certificate in the Tair (Redis OSS-compatible) console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * > After SSL encryption is enabled, the instance may respond slower.
     *  *
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
     * @summary Queries whether transparent data encryption (TDE) is enabled for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * >  You can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) to enable or disable TDE.
     *  *
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
     * @summary Queries whether transparent data encryption (TDE) is enabled for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about TDE and the usage notes of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     * >  You can call the [ModifyInstanceTDE](https://help.aliyun.com/document_detail/473859.html) to enable or disable TDE.
     *  *
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
     * @summary Queries the information about one or more Tair (Redis OSS-compatible) instances.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
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
     * @summary Queries the information about one or more Tair (Redis OSS-compatible) instances.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the overview information of one or more Tair (Redis OSS-compatible) instances.
     *  *
     * @description If you do not specify the InstanceIds parameter when you call this operation, the overview information of all instances is returned.
     * > This operation returns non-paged results.
     *  *
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
     * @summary Queries the overview information of one or more Tair (Redis OSS-compatible) instances.
     *  *
     * @description If you do not specify the InstanceIds parameter when you call this operation, the overview information of all instances is returned.
     * > This operation returns non-paged results.
     *  *
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
     * @summary Queries the internal bandwidth of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to increase the internal bandwidth of an instance.
     *  *
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
     * @summary Queries the internal bandwidth of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to increase the internal bandwidth of an instance.
     *  *
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
     * @summary Queries the logical topology of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This parameter is supported only for cluster and read/write splitting instances.
     *  *
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
     * @summary Queries the logical topology of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This parameter is supported only for cluster and read/write splitting instances.
     *  *
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
     * @summary Queries the metrics of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  To improve user experience, Tair has upgraded the monitoring metrics. The DescribeMonitorItems operation is phased out. For more information, see [The DescribeMonitorItems operation of Tair (Redis OSS-compatible) is phased out](https://help.aliyun.com/document_detail/189893.html).
     * After you call this operation to retrieve a list of metrics for a specified instance, you can call the [DescribeHistoryMonitorValues](https://help.aliyun.com/document_detail/473827.html) operation to query the monitoring history of the instance.
     *  *
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
     * @summary Queries the metrics of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  To improve user experience, Tair has upgraded the monitoring metrics. The DescribeMonitorItems operation is phased out. For more information, see [The DescribeMonitorItems operation of Tair (Redis OSS-compatible) is phased out](https://help.aliyun.com/document_detail/189893.html).
     * After you call this operation to retrieve a list of metrics for a specified instance, you can call the [DescribeHistoryMonitorValues](https://help.aliyun.com/document_detail/473827.html) operation to query the monitoring history of the instance.
     *  *
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
     * @summary Queries the basic information about a parameter template.
     *  *
     * @param DescribeParameterGroupRequest $request DescribeParameterGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupResponse DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
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
     * @summary Queries the basic information about a parameter template.
     *  *
     * @param DescribeParameterGroupRequest $request DescribeParameterGroupRequest
     *
     * @return DescribeParameterGroupResponse DescribeParameterGroupResponse
     */
    public function describeParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameters that can be configured in parameter templates across different database versions.
     *  *
     * @param DescribeParameterGroupSupportParamRequest $request DescribeParameterGroupSupportParamRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupSupportParamResponse DescribeParameterGroupSupportParamResponse
     */
    public function describeParameterGroupSupportParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the parameters that can be configured in parameter templates across different database versions.
     *  *
     * @param DescribeParameterGroupSupportParamRequest $request DescribeParameterGroupSupportParamRequest
     *
     * @return DescribeParameterGroupSupportParamResponse DescribeParameterGroupSupportParamResponse
     */
    public function describeParameterGroupSupportParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupSupportParamWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the parameters that can be configured in a parameter template, such as the default values, value ranges, and descriptions.
     *  *
     * @param DescribeParameterGroupTemplateListRequest $request DescribeParameterGroupTemplateListRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupTemplateListResponse DescribeParameterGroupTemplateListResponse
     */
    public function describeParameterGroupTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the information about the parameters that can be configured in a parameter template, such as the default values, value ranges, and descriptions.
     *  *
     * @param DescribeParameterGroupTemplateListRequest $request DescribeParameterGroupTemplateListRequest
     *
     * @return DescribeParameterGroupTemplateListResponse DescribeParameterGroupTemplateListResponse
     */
    public function describeParameterGroupTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupTemplateListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of available parameter templates.
     *  *
     * @param DescribeParameterGroupsRequest $request DescribeParameterGroupsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupsResponse DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
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
     * @summary Queries a list of available parameter templates.
     *  *
     * @param DescribeParameterGroupsRequest $request DescribeParameterGroupsRequest
     *
     * @return DescribeParameterGroupsResponse DescribeParameterGroupsResponse
     */
    public function describeParameterGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameter modification history of a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the parameter modification history of a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the parameters and their default values that are supported by Tair (Redis OSS-compatible) instances of different architectures and major versions.
     *  *
     * @description After you call this operation to query the parameters and default values of an instance, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to reconfigure the parameters of the instance.
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
     * @summary Queries the parameters and their default values that are supported by Tair (Redis OSS-compatible) instances of different architectures and major versions.
     *  *
     * @description After you call this operation to query the parameters and default values of an instance, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to reconfigure the parameters of the instance.
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
     * @summary Queries the configuration parameters and running parameters of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This operation is applicable only to classic instances.
     * >  If the instance is deployed in cloud-native mode, you can use the [DescribeInstanceConfig](https://help.aliyun.com/document_detail/473846.html) operation to query the configuration and operational parameters of the instance.
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
     * @summary Queries the configuration parameters and running parameters of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This operation is applicable only to classic instances.
     * >  If the instance is deployed in cloud-native mode, you can use the [DescribeInstanceConfig](https://help.aliyun.com/document_detail/473846.html) operation to query the configuration and operational parameters of the instance.
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
     * @summary Queries the fees that you must pay when you create, upgrade, or renew a Tair (Redis OSS-compatible) instance.
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
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->shardCount)) {
            $query['ShardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the fees that you must pay when you create, upgrade, or renew a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the regions in which ApsaraDB for Redis instances can be created.
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
     * @summary Queries the regions in which ApsaraDB for Redis instances can be created.
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
     * @summary Queries the role, type, minor version, and zone of each node in a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the role, type, minor version, and zone of each node in a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the operational logs of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about how to view the operational logs of an instance in the Tair (Redis OSS-compatible) console, see [View active logs](https://help.aliyun.com/document_detail/101713.html).
     * This operation can be called up to 100 times per minute.
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
     * @summary Queries the operational logs of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about how to view the operational logs of an instance in the Tair (Redis OSS-compatible) console, see [View active logs](https://help.aliyun.com/document_detail/101713.html).
     * This operation can be called up to 100 times per minute.
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
     * @summary Queries the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the IP address whitelists of a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the IP address whitelists of a Tair (Redis OSS-compatible) instance.
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
     * @summary Queries the slow query logs of a Tair (Redis OSS-compatible) instance that are generated within a specified period of time.
     *  *
     * @description You can also query slow logs in the Tair (Redis OSS-compatible) console. For more information, see [Query slow logs of an instance](https://help.aliyun.com/document_detail/95874.html). This operation can be called up to 100 times per minute.
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
     * @summary Queries the slow query logs of a Tair (Redis OSS-compatible) instance that are generated within a specified period of time.
     *  *
     * @description You can also query slow logs in the Tair (Redis OSS-compatible) console. For more information, see [Query slow logs of an instance](https://help.aliyun.com/document_detail/95874.html). This operation can be called up to 100 times per minute.
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
     * @summary 查看TairCustom实例
     *  *
     * @param DescribeTairKVCacheCustomInstanceAttributeRequest $request DescribeTairKVCacheCustomInstanceAttributeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTairKVCacheCustomInstanceAttributeResponse DescribeTairKVCacheCustomInstanceAttributeResponse
     */
    public function describeTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看TairCustom实例
     *  *
     * @param DescribeTairKVCacheCustomInstanceAttributeRequest $request DescribeTairKVCacheCustomInstanceAttributeRequest
     *
     * @return DescribeTairKVCacheCustomInstanceAttributeResponse DescribeTairKVCacheCustomInstanceAttributeResponse
     */
    public function describeTairKVCacheCustomInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询TairCustom主机监控
     *  *
     * @param DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest $request DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest
     * @param RuntimeOptions                                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse
     */
    public function describeTairKVCacheCustomInstanceHistoryMonitorValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询TairCustom主机监控
     *  *
     * @param DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest $request DescribeTairKVCacheCustomInstanceHistoryMonitorValuesRequest
     *
     * @return DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponse
     */
    public function describeTairKVCacheCustomInstanceHistoryMonitorValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheCustomInstanceHistoryMonitorValuesWithOptions($request, $runtime);
    }

    /**
     * @summary 查看TairCustom实例
     *  *
     * @param DescribeTairKVCacheCustomInstancesRequest $request DescribeTairKVCacheCustomInstancesRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTairKVCacheCustomInstancesResponse DescribeTairKVCacheCustomInstancesResponse
     */
    public function describeTairKVCacheCustomInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看TairCustom实例
     *  *
     * @param DescribeTairKVCacheCustomInstancesRequest $request DescribeTairKVCacheCustomInstancesRequest
     *
     * @return DescribeTairKVCacheCustomInstancesResponse DescribeTairKVCacheCustomInstancesResponse
     */
    public function describeTairKVCacheCustomInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheCustomInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查看TairInfer实例
     *  *
     * @param DescribeTairKVCacheInferInstanceAttributeRequest $request DescribeTairKVCacheInferInstanceAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTairKVCacheInferInstanceAttributeResponse DescribeTairKVCacheInferInstanceAttributeResponse
     */
    public function describeTairKVCacheInferInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看TairInfer实例
     *  *
     * @param DescribeTairKVCacheInferInstanceAttributeRequest $request DescribeTairKVCacheInferInstanceAttributeRequest
     *
     * @return DescribeTairKVCacheInferInstanceAttributeResponse DescribeTairKVCacheInferInstanceAttributeResponse
     */
    public function describeTairKVCacheInferInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheInferInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 查看TairInfer实例列表
     *  *
     * @param DescribeTairKVCacheInferInstancesRequest $request DescribeTairKVCacheInferInstancesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTairKVCacheInferInstancesResponse DescribeTairKVCacheInferInstancesResponse
     */
    public function describeTairKVCacheInferInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看TairInfer实例列表
     *  *
     * @param DescribeTairKVCacheInferInstancesRequest $request DescribeTairKVCacheInferInstancesRequest
     *
     * @return DescribeTairKVCacheInferInstancesResponse DescribeTairKVCacheInferInstancesResponse
     */
    public function describeTairKVCacheInferInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTairKVCacheInferInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the zones available for Tair (Redis OSS-compatible).
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
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
     * @summary Queries the zones available for Tair (Redis OSS-compatible).
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Adjusts the bandwidth of a Tair (Redis OSS-compatible) instance. Only the pay-as-you-go billing method is supported for bandwidth adjustment. You need to specify the InstanceId, NodeId (optional), Bandwidth, and ChargeType parameters.
     *  *
     * @description If you enable the bandwidth auto scaling feature and call this operation at the same time, bandwidth auto scaling takes precedence. During bandwidth scale-back, the instance is scaled back to the default bandwidth of the instance type. For more information about the limits, costs, and FAQ about this feature, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html).
     * >  Before you call this operation, you can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/473782.html) operation to query the current bandwidth of each data node in an instance.
     *  *
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
     * @summary Adjusts the bandwidth of a Tair (Redis OSS-compatible) instance. Only the pay-as-you-go billing method is supported for bandwidth adjustment. You need to specify the InstanceId, NodeId (optional), Bandwidth, and ChargeType parameters.
     *  *
     * @description If you enable the bandwidth auto scaling feature and call this operation at the same time, bandwidth auto scaling takes precedence. During bandwidth scale-back, the instance is scaled back to the default bandwidth of the instance type. For more information about the limits, costs, and FAQ about this feature, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html).
     * >  Before you call this operation, you can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/473782.html) operation to query the current bandwidth of each data node in an instance.
     *  *
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
     * @summary Clears all expired keys in a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about how to clear the expired keys in the Tair (Redis OSS-compatible) console, see [Clear data](https://help.aliyun.com/document_detail/43881.html).
     * >  Expired keys cannot be recovered after they are deleted. Exercise caution when you call this operation.
     *  *
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
     * @summary Clears all expired keys in a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about how to clear the expired keys in the Tair (Redis OSS-compatible) console, see [Clear data](https://help.aliyun.com/document_detail/43881.html).
     * >  Expired keys cannot be recovered after they are deleted. Exercise caution when you call this operation.
     *  *
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
     * @summary Clears the data of a Tair (Redis OSS-compatible) instance. The cleared data cannot be restored.
     *  *
     * @param FlushInstanceRequest $request FlushInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return FlushInstanceResponse FlushInstanceResponse
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
     * @summary Clears the data of a Tair (Redis OSS-compatible) instance. The cleared data cannot be restored.
     *  *
     * @param FlushInstanceRequest $request FlushInstanceRequest
     *
     * @return FlushInstanceResponse FlushInstanceResponse
     */
    public function flushInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flushInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Cleans the data of specified databases in a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Each Tair (Redis OSS-compatible) instance can contain up to 256 databases named from DB0 to DB255. Each database does not have a separate memory usage limit. The memory capacity that a database can use is subject to the total memory limit of the instance. You can execute the `SELECT` statement to switch between databases. For more information, see [What is the size of each database on a Tair (Redis OSS-compatible) instance, and how can I choose databases?](https://help.aliyun.com/document_detail/38688.html)
     * >  This operation is available only for cloud-native instances that use cloud disks.
     *  *
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
     * @summary Cleans the data of specified databases in a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Each Tair (Redis OSS-compatible) instance can contain up to 256 databases named from DB0 to DB255. Each database does not have a separate memory usage limit. The memory capacity that a database can use is subject to the total memory limit of the instance. You can execute the `SELECT` statement to switch between databases. For more information, see [What is the size of each database on a Tair (Redis OSS-compatible) instance, and how can I choose databases?](https://help.aliyun.com/document_detail/38688.html)
     * >  This operation is available only for cloud-native instances that use cloud disks.
     *  *
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
     * @summary Modifies the permissions of an account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >
     * *   Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
     * *   The Tair (Redis OSS-compatible) instance must be in the running state.
     *  *
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the permissions of an account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >
     * *   Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
     * *   The Tair (Redis OSS-compatible) instance must be in the running state.
     *  *
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
     * @summary Assigns a service-linked role to Tair (Redis OSS-compatible).
     *  *
     * @description The log management feature of Tair (Redis OSS-compatible) requires the resources of [Simple Log Service](https://help.aliyun.com/document_detail/48869.html). To use the log management feature, you can call this operation to assign the AliyunServiceRoleForKvstore service-linked role to Tair (Redis OSS-compatible). For more information, see [Service-linked role of Tair (Redis OSS-compatible)](https://help.aliyun.com/document_detail/184337.html).
     *  *
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
     * @summary Assigns a service-linked role to Tair (Redis OSS-compatible).
     *  *
     * @description The log management feature of Tair (Redis OSS-compatible) requires the resources of [Simple Log Service](https://help.aliyun.com/document_detail/48869.html). To use the log management feature, you can call this operation to assign the AliyunServiceRoleForKvstore service-linked role to Tair (Redis OSS-compatible). For more information, see [Service-linked role of Tair (Redis OSS-compatible)](https://help.aliyun.com/document_detail/184337.html).
     *  *
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
     * @summary Queries the relationships between Tair (Redis OSS-compatible) instances and tags.
     *  *
     * @description You can also query the relationships between instances and tags in the Tair (Redis OSS-compatible) console. For more information, see [Filter Tair (Redis OSS-compatible) instances by tag](https://help.aliyun.com/document_detail/119160.html) and [View tags bound to an instance](https://help.aliyun.com/document_detail/134038.html).
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
     * @summary Queries the relationships between Tair (Redis OSS-compatible) instances and tags.
     *  *
     * @description You can also query the relationships between instances and tags in the Tair (Redis OSS-compatible) console. For more information, see [Filter Tair (Redis OSS-compatible) instances by tag](https://help.aliyun.com/document_detail/119160.html) and [View tags bound to an instance](https://help.aliyun.com/document_detail/134038.html).
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
     * @summary Places a write lock on an instance. After the instance is locked, it supports only read operations.
     *  *
     * @param LockDBInstanceWriteRequest $request LockDBInstanceWriteRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return LockDBInstanceWriteResponse LockDBInstanceWriteResponse
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
     * @summary Places a write lock on an instance. After the instance is locked, it supports only read operations.
     *  *
     * @param LockDBInstanceWriteRequest $request LockDBInstanceWriteRequest
     *
     * @return LockDBInstanceWriteResponse LockDBInstanceWriteResponse
     */
    public function lockDBInstanceWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockDBInstanceWriteWithOptions($request, $runtime);
    }

    /**
     * @summary Simulates database node failures.
     *  *
     * @param MasterNodeShutDownFailOverRequest $request MasterNodeShutDownFailOverRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterNodeShutDownFailOverResponse MasterNodeShutDownFailOverResponse
     */
    public function masterNodeShutDownFailOverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->DBFaultMode)) {
            $query['DBFaultMode'] = $request->DBFaultMode;
        }
        if (!Utils::isUnset($request->DBNodes)) {
            $query['DBNodes'] = $request->DBNodes;
        }
        if (!Utils::isUnset($request->failMode)) {
            $query['FailMode'] = $request->failMode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->proxyFaultMode)) {
            $query['ProxyFaultMode'] = $request->proxyFaultMode;
        }
        if (!Utils::isUnset($request->proxyInstanceIds)) {
            $query['ProxyInstanceIds'] = $request->proxyInstanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Simulates database node failures.
     *  *
     * @param MasterNodeShutDownFailOverRequest $request MasterNodeShutDownFailOverRequest
     *
     * @return MasterNodeShutDownFailOverResponse MasterNodeShutDownFailOverResponse
     */
    public function masterNodeShutDownFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->masterNodeShutDownFailOverWithOptions($request, $runtime);
    }

    /**
     * @summary Migrates a Tair (Redis OSS-compatible) instance to another zone in the same region.
     *  *
     * @description Before you call this operation, you must release the public endpoint (if any) of the instance. For more information, see [Migrate an instance across zones](https://help.aliyun.com/document_detail/106272.html).
     * >
     * *   If the network type of an Tair (Redis OSS-compatible) instance is switched from classic network to Virtual Private Cloud (VPC), and the classic network endpoint is retained, you can migrate the instance across zones only after the classic network endpoint is released upon expiration.
     * *   After the instance is migrated, the endpoint of the instance remains unchanged. However, the virtual IP address (VIP) is changed. We recommend that you use the endpoint instead of the VIP to connect to the instance.
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
        if (!Utils::isUnset($request->readOnlyCount)) {
            $query['ReadOnlyCount'] = $request->readOnlyCount;
        }
        if (!Utils::isUnset($request->replicaCount)) {
            $query['ReplicaCount'] = $request->replicaCount;
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
        if (!Utils::isUnset($request->slaveReadOnlyCount)) {
            $query['SlaveReadOnlyCount'] = $request->slaveReadOnlyCount;
        }
        if (!Utils::isUnset($request->slaveReplicaCount)) {
            $query['SlaveReplicaCount'] = $request->slaveReplicaCount;
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
     * @summary Migrates a Tair (Redis OSS-compatible) instance to another zone in the same region.
     *  *
     * @description Before you call this operation, you must release the public endpoint (if any) of the instance. For more information, see [Migrate an instance across zones](https://help.aliyun.com/document_detail/106272.html).
     * >
     * *   If the network type of an Tair (Redis OSS-compatible) instance is switched from classic network to Virtual Private Cloud (VPC), and the classic network endpoint is retained, you can migrate the instance across zones only after the classic network endpoint is released upon expiration.
     * *   After the instance is migrated, the endpoint of the instance remains unchanged. However, the virtual IP address (VIP) is changed. We recommend that you use the endpoint instead of the VIP to connect to the instance.
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
     * @summary Modifies the description of an account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This operation is supported only for instances that run Redis 4.0 or later.
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the description of an account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description This operation is supported only for instances that run Redis 4.0 or later.
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
     * @summary Changes the password of a specific account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @param ModifyAccountPasswordRequest $request ModifyAccountPasswordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountPasswordResponse ModifyAccountPasswordResponse
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Changes the password of a specific account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @param ModifyAccountPasswordRequest $request ModifyAccountPasswordRequest
     *
     * @return ModifyAccountPasswordResponse ModifyAccountPasswordResponse
     */
    public function modifyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the scheduled switchover time of an O&M task.
     *  *
     * @description You can receive notifications for Tair (Redis OSS-compatible) events such as instance migration and version upgrade by text message, phone call, email, internal message, or by using the console. You can also change the scheduled switchover time of a task by using the console. For more information, see [Query or manage pending events](https://help.aliyun.com/document_detail/187022.html).
     *  *
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
     * @summary Changes the scheduled switchover time of an O&M task.
     *  *
     * @description You can receive notifications for Tair (Redis OSS-compatible) events such as instance migration and version upgrade by text message, phone call, email, internal message, or by using the console. You can also change the scheduled switchover time of a task by using the console. For more information, see [Query or manage pending events](https://help.aliyun.com/document_detail/187022.html).
     *  *
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
     * @summary Modifies the switching time of scheduled O\\\\\\&M events for an instance.
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
     * @summary Modifies the switching time of scheduled O\\\\\\&M events for an instance.
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
     * @summary Enables the audit log feature or modifies the audit log settings for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of the audit log feature.
     * Before you call this operation, make sure that the Tair (Redis OSS-compatible) instance meets the following requirements:
     * *   The instance is a Tair (Redis OSS-compatible) Community Edition instance or Tair [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html).
     * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to check whether the instance uses the latest major version and minor version.
     *  *
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
     * @summary Enables the audit log feature or modifies the audit log settings for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/54532.html) of the audit log feature.
     * Before you call this operation, make sure that the Tair (Redis OSS-compatible) instance meets the following requirements:
     * *   The instance is a Tair (Redis OSS-compatible) Community Edition instance or Tair [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html).
     * *   The engine version of the instance is Redis 4.0 or later, and the latest minor version is used. You can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to check whether the instance uses the latest major version and minor version.
     *  *
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
     * @summary 修改备份集过期时间
     *  *
     * @param ModifyBackupExpireTimeRequest $request ModifyBackupExpireTimeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupExpireTimeResponse ModifyBackupExpireTimeResponse
     */
    public function modifyBackupExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->expectExpireTime)) {
            $query['ExpectExpireTime'] = $request->expectExpireTime;
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
     * @summary 修改备份集过期时间
     *  *
     * @param ModifyBackupExpireTimeRequest $request ModifyBackupExpireTimeRequest
     *
     * @return ModifyBackupExpireTimeResponse ModifyBackupExpireTimeResponse
     */
    public function modifyBackupExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the automatic backup policy of a Tair (Redis OSS-compatible) instance.
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
     * @summary Modifies the automatic backup policy of a Tair (Redis OSS-compatible) instance.
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
     * @summary Modifies the setting related to the automatic update of minor versions for an instance.
     *  *
     * @param ModifyDBInstanceAutoUpgradeRequest $request ModifyDBInstanceAutoUpgradeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceAutoUpgradeResponse ModifyDBInstanceAutoUpgradeResponse
     */
    public function modifyDBInstanceAutoUpgradeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the setting related to the automatic update of minor versions for an instance.
     *  *
     * @param ModifyDBInstanceAutoUpgradeRequest $request ModifyDBInstanceAutoUpgradeRequest
     *
     * @return ModifyDBInstanceAutoUpgradeResponse ModifyDBInstanceAutoUpgradeResponse
     */
    public function modifyDBInstanceAutoUpgrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAutoUpgradeWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the endpoint or port number of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also modify the endpoint or port number of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change the endpoint or port number of an instance](https://help.aliyun.com/document_detail/85683.html).
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
     * @summary Changes the endpoint or port number of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also modify the endpoint or port number of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change the endpoint or port number of an instance](https://help.aliyun.com/document_detail/85683.html).
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
     * @summary Modifies a global IP whitelist template.
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
     * @summary Modifies a global IP whitelist template.
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
     * @summary Modifies the name of a global IP whitelist template.
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
     * @summary Modifies the name of a global IP whitelist template.
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
     * @summary Adds a specified instance to a specified IP whitelist template.
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
     * @summary Adds a specified instance to a specified IP whitelist template.
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
     * @summary Modifies the specific information of a Tair (Redis OSS-compatible) instance, such as the password and the name.
     *  *
     * @description You can also modify the information of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change or reset the password](https://help.aliyun.com/document_detail/43874.html).
     *  *
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
     * @summary Modifies the specific information of a Tair (Redis OSS-compatible) instance, such as the password and the name.
     *  *
     * @description You can also modify the information of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Change or reset the password](https://help.aliyun.com/document_detail/43874.html).
     *  *
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
     * @summary Enables or disables auto-renewal for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description > Auto-renewal is triggered seven days before the expiration date of the instance.
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
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
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
     * @summary Enables or disables auto-renewal for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description > Auto-renewal is triggered seven days before the expiration date of the instance.
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
     * @summary Sets the intended bandwidth value of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   Before you call this operation, make sure that you understand the billing methods and pricing of instance bandwidth. Tair (Redis OSS-compatible) charges fees per hour based on the amount and usage duration of the extra bandwidth that you purchase. The fees vary based on the region that you select. For more information, see [Billable items](https://help.aliyun.com/document_detail/54532.html).
     * *   The bandwidth of an instance or a shard can be increased by up to six times the default bandwidth of the instance, but the increase in bandwidth cannot exceed 192 Mbit/s. For example, if the default bandwidth of a Tair DRAM-based master-replica instance equipped with 2 GB of memory is 96 Mbit/s, you can increase the bandwidth of the instance by up to 192 Mbit/s. As a result, the maximum bandwidth of the instance is 288 Mbit/s. If the default bandwidth of a Redis Open-Source Edition master-replica instance equipped with 256 MB of memory is 10 Mbit/s, you can increase the bandwidth of the instance by up to 60 Mbit/s. As a result, the maximum bandwidth of the instance is 70 Mbit/s.
     *  *
     * @param ModifyInstanceBandwidthRequest $request ModifyInstanceBandwidthRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceBandwidthResponse ModifyInstanceBandwidthResponse
     */
    public function modifyInstanceBandwidthWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->targetIntranetBandwidth)) {
            $query['TargetIntranetBandwidth'] = $request->targetIntranetBandwidth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Sets the intended bandwidth value of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   Before you call this operation, make sure that you understand the billing methods and pricing of instance bandwidth. Tair (Redis OSS-compatible) charges fees per hour based on the amount and usage duration of the extra bandwidth that you purchase. The fees vary based on the region that you select. For more information, see [Billable items](https://help.aliyun.com/document_detail/54532.html).
     * *   The bandwidth of an instance or a shard can be increased by up to six times the default bandwidth of the instance, but the increase in bandwidth cannot exceed 192 Mbit/s. For example, if the default bandwidth of a Tair DRAM-based master-replica instance equipped with 2 GB of memory is 96 Mbit/s, you can increase the bandwidth of the instance by up to 192 Mbit/s. As a result, the maximum bandwidth of the instance is 288 Mbit/s. If the default bandwidth of a Redis Open-Source Edition master-replica instance equipped with 256 MB of memory is 10 Mbit/s, you can increase the bandwidth of the instance by up to 60 Mbit/s. As a result, the maximum bandwidth of the instance is 70 Mbit/s.
     *  *
     * @param ModifyInstanceBandwidthRequest $request ModifyInstanceBandwidthRequest
     *
     * @return ModifyInstanceBandwidthResponse ModifyInstanceBandwidthResponse
     */
    public function modifyInstanceBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceBandwidthWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the parameter settings of a Tair (Redis OSS-compatible) instance.
     *  *
     * @param ModifyInstanceConfigRequest $request ModifyInstanceConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceConfigResponse ModifyInstanceConfigResponse
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
        if (!Utils::isUnset($request->paramNoLooseSentinelEnabled)) {
            $query['ParamNoLooseSentinelEnabled'] = $request->paramNoLooseSentinelEnabled;
        }
        if (!Utils::isUnset($request->paramNoLooseSentinelPasswordFreeAccess)) {
            $query['ParamNoLooseSentinelPasswordFreeAccess'] = $request->paramNoLooseSentinelPasswordFreeAccess;
        }
        if (!Utils::isUnset($request->paramNoLooseSentinelPasswordFreeCommands)) {
            $query['ParamNoLooseSentinelPasswordFreeCommands'] = $request->paramNoLooseSentinelPasswordFreeCommands;
        }
        if (!Utils::isUnset($request->paramReplMode)) {
            $query['ParamReplMode'] = $request->paramReplMode;
        }
        if (!Utils::isUnset($request->paramSemisyncReplTimeout)) {
            $query['ParamSemisyncReplTimeout'] = $request->paramSemisyncReplTimeout;
        }
        if (!Utils::isUnset($request->paramSentinelCompatEnable)) {
            $query['ParamSentinelCompatEnable'] = $request->paramSentinelCompatEnable;
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
     * @summary Modifies the parameter settings of a Tair (Redis OSS-compatible) instance.
     *  *
     * @param ModifyInstanceConfigRequest $request ModifyInstanceConfigRequest
     *
     * @return ModifyInstanceConfigResponse ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the maintenance window of an Tair (Redis OSS-compatible) instance. Alibaba Cloud maintains Tair (Redis OSS-compatible) instances during the specified maintenance window.
     *  *
     * @description You can also modify the maintenance window of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Set a maintenance window](https://help.aliyun.com/document_detail/55252.html).
     *  *
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
     * @summary Modifies the maintenance window of an Tair (Redis OSS-compatible) instance. Alibaba Cloud maintains Tair (Redis OSS-compatible) instances during the specified maintenance window.
     *  *
     * @description You can also modify the maintenance window of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Set a maintenance window](https://help.aliyun.com/document_detail/55252.html).
     *  *
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
     * @summary Upgrades the major version of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about the precautions and impacts of the upgrade, see [Upgrade the major version](https://help.aliyun.com/document_detail/101764.html).
     *  *
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
     * @summary Upgrades the major version of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description For more information about the precautions and impacts of the upgrade, see [Upgrade the major version](https://help.aliyun.com/document_detail/101764.html).
     *  *
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
     * @summary Updates the minor version of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description The procedure to update the minor version of an instance varies based on types of Tair (Redis OSS-compatible) instances. For more information, see [Upgrade the minor version](https://help.aliyun.com/document_detail/56450.html).
     * >
     * *   Before you call this operation, you can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to query the minor version of the current instance.
     * *   When you switch your workloads over from the original instance to a new instance or from the master node to the replica node in the original instance, you may experience disconnections that last a few seconds. The original instance stays in the read-only state within 60 seconds until all data is synchronized. We recommend that you upgrade the original instance during off-peak hours and make sure that your application is configured to automatically reconnect to the original instance.
     *  *
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
     * @summary Updates the minor version of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description The procedure to update the minor version of an instance varies based on types of Tair (Redis OSS-compatible) instances. For more information, see [Upgrade the minor version](https://help.aliyun.com/document_detail/56450.html).
     * >
     * *   Before you call this operation, you can call the [DescribeEngineVersion](https://help.aliyun.com/document_detail/473781.html) operation to query the minor version of the current instance.
     * *   When you switch your workloads over from the original instance to a new instance or from the master node to the replica node in the original instance, you may experience disconnections that last a few seconds. The original instance stays in the read-only state within 60 seconds until all data is synchronized. We recommend that you upgrade the original instance during off-peak hours and make sure that your application is configured to automatically reconnect to the original instance.
     *  *
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
     * @summary Extends the retention period of the classic network endpoint of a Tair (Redis OSS-compatible) instance. You can call this operation after you change the network type of the Tair (Redis OSS-compatible) instance from classic network to Virtual Private Cloud (VPC) with the classic network endpoint retained.
     *  *
     * @description You can also perform this operation in the Tair (Redis OSS-compatible) console. For more information, see [Change the expiration time for the endpoint of the classic network](https://help.aliyun.com/document_detail/60062.html).
     * > For more information about how to switch the network type of a Tair (Redis OSS-compatible) instance from classic network to VPC, see [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html).
     *  *
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
     * @summary Extends the retention period of the classic network endpoint of a Tair (Redis OSS-compatible) instance. You can call this operation after you change the network type of the Tair (Redis OSS-compatible) instance from classic network to Virtual Private Cloud (VPC) with the classic network endpoint retained.
     *  *
     * @description You can also perform this operation in the Tair (Redis OSS-compatible) console. For more information, see [Change the expiration time for the endpoint of the classic network](https://help.aliyun.com/document_detail/60062.html).
     * > For more information about how to switch the network type of a Tair (Redis OSS-compatible) instance from classic network to VPC, see [SwitchNetwork](https://help.aliyun.com/document_detail/473797.html).
     *  *
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
     * @summary Applies a parameter template to specific instances. This indicates that the parameter values in the template take effect on the instances. After you modify a parameter template, you must reapply it to specific instances for the new parameter values to take effect on the instances.
     *  *
     * @param ModifyInstanceParameterRequest $request ModifyInstanceParameterRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceParameterResponse ModifyInstanceParameterResponse
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
     * @summary Applies a parameter template to specific instances. This indicates that the parameter values in the template take effect on the instances. After you modify a parameter template, you must reapply it to specific instances for the new parameter values to take effect on the instances.
     *  *
     * @param ModifyInstanceParameterRequest $request ModifyInstanceParameterRequest
     *
     * @return ModifyInstanceParameterResponse ModifyInstanceParameterResponse
     */
    public function modifyInstanceParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceParameterWithOptions($request, $runtime);
    }

    /**
     * @summary Enables Transport Layer Security (TLS) for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also configure SSL encryption in the console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * >  To specify the earliest supported SSL version, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to modify the required parameter.
     *  *
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
     * @summary Enables Transport Layer Security (TLS) for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also configure SSL encryption in the console. For more information, see [Configure SSL encryption](https://help.aliyun.com/document_detail/84898.html).
     * >  To specify the earliest supported SSL version, you can call the [ModifyInstanceConfig](https://help.aliyun.com/document_detail/473844.html) operation to modify the required parameter.
     *  *
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
     * @summary Changes the configurations of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  For more information about the procedure, impacts, limits, and fees of this operation, see [Change the configurations of an instance](https://help.aliyun.com/document_detail/26353.html).
     *  *
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
        if (!Utils::isUnset($request->replicaCount)) {
            $query['ReplicaCount'] = $request->replicaCount;
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
        if (!Utils::isUnset($request->slaveReplicaCount)) {
            $query['SlaveReplicaCount'] = $request->slaveReplicaCount;
        }
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Changes the configurations of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  For more information about the procedure, impacts, limits, and fees of this operation, see [Change the configurations of an instance](https://help.aliyun.com/document_detail/26353.html).
     *  *
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
     * @summary Enables transparent data encryption (TDE) for a Tair (Redis OSS-compatible) instance. You can use existing custom keys.
     *  *
     * @description > For more information about TDE and the impact of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *  *
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
     * @summary Enables transparent data encryption (TDE) for a Tair (Redis OSS-compatible) instance. You can use existing custom keys.
     *  *
     * @description > For more information about TDE and the impact of TDE, see [Enable TDE](https://help.aliyun.com/document_detail/265913.html).
     *  *
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
     * @summary Enables or disables password-free access for a Tair (Redis OSS-compatible) instance. This way, you can connect to a database in a convenient and secure manner.
     *  *
     * @description When the password-free access feature is enabled, Elastic Compute Service (ECS) instances in the same virtual private cloud (VPC) can connect to the Tair instance without a password. You can also use the username and password to connect to the Tair instance.
     * > The Tair instance is deployed in a VPC. For more information, see [Enable password-free access](https://help.aliyun.com/document_detail/85168.html).
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
     * @summary Enables or disables password-free access for a Tair (Redis OSS-compatible) instance. This way, you can connect to a database in a convenient and secure manner.
     *  *
     * @description When the password-free access feature is enabled, Elastic Compute Service (ECS) instances in the same virtual private cloud (VPC) can connect to the Tair instance without a password. You can also use the username and password to connect to the Tair instance.
     * > The Tair instance is deployed in a VPC. For more information, see [Enable password-free access](https://help.aliyun.com/document_detail/85168.html).
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
     * @summary Temporarily adjusts the internal bandwidth of a Tair (Redis OSS-compatible) instance that is deployed in a dedicated cluster.
     *  *
     * @description >
     * *   This operation is applicable only to an instance that is deployed in a dedicated cluster. To adjust the bandwidth of a standard instance, call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation.
     *  *
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
     * @summary Temporarily adjusts the internal bandwidth of a Tair (Redis OSS-compatible) instance that is deployed in a dedicated cluster.
     *  *
     * @description >
     * *   This operation is applicable only to an instance that is deployed in a dedicated cluster. To adjust the bandwidth of a standard instance, call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation.
     *  *
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
     * @summary Modifies the settings of a parameter template.
     *  *
     * @param ModifyParameterGroupRequest $request ModifyParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParameterGroupResponse ModifyParameterGroupResponse
     */
    public function modifyParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupDesc)) {
            $query['ParameterGroupDesc'] = $request->parameterGroupDesc;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
        }
        if (!Utils::isUnset($request->parameterGroupName)) {
            $query['ParameterGroupName'] = $request->parameterGroupName;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the settings of a parameter template.
     *  *
     * @param ModifyParameterGroupRequest $request ModifyParameterGroupRequest
     *
     * @return ModifyParameterGroupResponse ModifyParameterGroupResponse
     */
    public function modifyParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which a Tair (Redis OSS-compatible) instance belongs.
     *  *
     * @description You can also perform this operation in the [Resource Management](https://resourcemanager.console.aliyun.com/resource-center) console. For more information, see [Transfer resources across resource groups](https://help.aliyun.com/document_detail/94487.html).
     * >  Resource Group allows you to sort resources owned by your Alibaba Cloud account into groups. This simplifies the resource and permission management within your Alibaba Cloud account. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
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
     * @summary Changes the resource group to which a Tair (Redis OSS-compatible) instance belongs.
     *  *
     * @description You can also perform this operation in the [Resource Management](https://resourcemanager.console.aliyun.com/resource-center) console. For more information, see [Transfer resources across resource groups](https://help.aliyun.com/document_detail/94487.html).
     * >  Resource Group allows you to sort resources owned by your Alibaba Cloud account into groups. This simplifies the resource and permission management within your Alibaba Cloud account. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
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
     * @summary Resets the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description > After you call this operation, the security groups that are added to the whitelists of the Tair instance are deleted, and the security group specified by the **SecurityGroupId** parameter is added to the whitelists. For more information about how to reset security groups in the Tair console, see [Add security groups](https://help.aliyun.com/document_detail/148267.html).
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Resets the security groups that are added to the whitelists of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description > After you call this operation, the security groups that are added to the whitelists of the Tair instance are deleted, and the security group specified by the **SecurityGroupId** parameter is added to the whitelists. For more information about how to reset security groups in the Tair console, see [Add security groups](https://help.aliyun.com/document_detail/148267.html).
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
     * @summary Modifies the IP address whitelists of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also modify the whitelists of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Configure a whitelist for an instance](https://help.aliyun.com/document_detail/56464.html).
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
     * @summary Modifies the IP address whitelists of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also modify the whitelists of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Configure a whitelist for an instance](https://help.aliyun.com/document_detail/56464.html).
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
     * @summary 修改TairCustom实例基本参数
     *  *
     * @param ModifyTairKVCacheCustomInstanceAttributeRequest $request ModifyTairKVCacheCustomInstanceAttributeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTairKVCacheCustomInstanceAttributeResponse ModifyTairKVCacheCustomInstanceAttributeResponse
     */
    public function modifyTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
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
     * @summary 修改TairCustom实例基本参数
     *  *
     * @param ModifyTairKVCacheCustomInstanceAttributeRequest $request ModifyTairKVCacheCustomInstanceAttributeRequest
     *
     * @return ModifyTairKVCacheCustomInstanceAttributeResponse ModifyTairKVCacheCustomInstanceAttributeResponse
     */
    public function modifyTairKVCacheCustomInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTairKVCacheCustomInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the task information, such as the task execution time.
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
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
     * @summary Modifies the task information, such as the task execution time.
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
     * @summary Releases the private endpoint of an ApsaraDB for Redis cluster instance.
     *  *
     * @description In direct connection mode, clients can bypass proxy nodes and use private endpoints to connect to ApsaraDB for Redis instances. This is similar to the connection to a native Redis cluster. The direct connection mode can reduce communication overheads and the response time of ApsaraDB for Redis. For more information, see [Enable the direct connection mode](https://help.aliyun.com/document_detail/146901.html).
     *  *
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
     * @summary Releases the private endpoint of an ApsaraDB for Redis cluster instance.
     *  *
     * @description In direct connection mode, clients can bypass proxy nodes and use private endpoints to connect to ApsaraDB for Redis instances. This is similar to the connection to a native Redis cluster. The direct connection mode can reduce communication overheads and the response time of ApsaraDB for Redis. For more information, see [Enable the direct connection mode](https://help.aliyun.com/document_detail/146901.html).
     *  *
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
     * @summary Releases the public endpoint of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also release the public endpoint for an instance in the Tair (Redis OSS-compatible) console. For more information, see [Release public endpoints](https://help.aliyun.com/document_detail/125424.html).
     *  *
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
     * @summary Releases the public endpoint of a Tair (Redis OSS-compatible) instance.
     *  *
     * @description You can also release the public endpoint for an instance in the Tair (Redis OSS-compatible) console. For more information, see [Release public endpoints](https://help.aliyun.com/document_detail/125424.html).
     *  *
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
     * @summary Removes a child instance from a distributed instance.
     *  *
     * @description The operation that you want to perform. Set the value to **RemoveSubInstance**.
     *  *
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
     * @summary Removes a child instance from a distributed instance.
     *  *
     * @description The operation that you want to perform. Set the value to **RemoveSubInstance**.
     *  *
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
     * @summary This operation is not recommended now. The billing method for bandwidth of a Tair (Redis OSS-compatible) instance is changed to pay-as-you-go.
     *  *
     * @description You can adjust the bandwidth of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html). You can also call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to purchase bandwidth for an instance.
     *  *
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
     * @summary This operation is not recommended now. The billing method for bandwidth of a Tair (Redis OSS-compatible) instance is changed to pay-as-you-go.
     *  *
     * @description You can adjust the bandwidth of an instance in the Tair (Redis OSS-compatible) console. For more information, see [Adjust the bandwidth of an instance](https://help.aliyun.com/document_detail/102588.html). You can also call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/473771.html) operation to purchase bandwidth for an instance.
     *  *
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
     * @summary Renews an ApsaraDB for Redis instance.
     *  *
     * @description This operation is applicable only to subscription instances.
     *  *
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
     * @summary Renews an ApsaraDB for Redis instance.
     *  *
     * @description This operation is applicable only to subscription instances.
     *  *
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
     * @summary Resets the password of an account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Resets the password of an account for a Tair (Redis OSS-compatible) instance.
     *  *
     * @description >  Only Tair (Redis OSS-compatible) instances of Redis 4.0 or later are supported.
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
     * @summary 重置TairCustom上主机密码
     *  *
     * @param ResetTairKVCacheCustomInstancePasswordRequest $request ResetTairKVCacheCustomInstancePasswordRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetTairKVCacheCustomInstancePasswordResponse ResetTairKVCacheCustomInstancePasswordResponse
     */
    public function resetTairKVCacheCustomInstancePasswordWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
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
     * @summary 重置TairCustom上主机密码
     *  *
     * @param ResetTairKVCacheCustomInstancePasswordRequest $request ResetTairKVCacheCustomInstancePasswordRequest
     *
     * @return ResetTairKVCacheCustomInstancePasswordResponse ResetTairKVCacheCustomInstancePasswordResponse
     */
    public function resetTairKVCacheCustomInstancePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetTairKVCacheCustomInstancePasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 变配TairCustom的主机的磁盘
     *  *
     * @param ResizeTairKVCacheCustomInstanceDiskRequest $request ResizeTairKVCacheCustomInstanceDiskRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ResizeTairKVCacheCustomInstanceDiskResponse ResizeTairKVCacheCustomInstanceDiskResponse
     */
    public function resizeTairKVCacheCustomInstanceDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $query['DiskSize'] = $request->diskSize;
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
     * @summary 变配TairCustom的主机的磁盘
     *  *
     * @param ResizeTairKVCacheCustomInstanceDiskRequest $request ResizeTairKVCacheCustomInstanceDiskRequest
     *
     * @return ResizeTairKVCacheCustomInstanceDiskResponse ResizeTairKVCacheCustomInstanceDiskResponse
     */
    public function resizeTairKVCacheCustomInstanceDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeTairKVCacheCustomInstanceDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a running ApsaraDB for Redis instance.
     *  *
     * @param RestartInstanceRequest $request RestartInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartInstanceResponse RestartInstanceResponse
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
     * @summary Restarts a running ApsaraDB for Redis instance.
     *  *
     * @param RestartInstanceRequest $request RestartInstanceRequest
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 重启TairCustom的主机
     *  *
     * @param RestartTairKVCacheCustomInstanceRequest $request RestartTairKVCacheCustomInstanceRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartTairKVCacheCustomInstanceResponse RestartTairKVCacheCustomInstanceResponse
     */
    public function restartTairKVCacheCustomInstanceWithOptions($request, $runtime)
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
     * @summary 重启TairCustom的主机
     *  *
     * @param RestartTairKVCacheCustomInstanceRequest $request RestartTairKVCacheCustomInstanceRequest
     *
     * @return RestartTairKVCacheCustomInstanceResponse RestartTairKVCacheCustomInstanceResponse
     */
    public function restartTairKVCacheCustomInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartTairKVCacheCustomInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Restores the data in a backup file to a specified Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   If your instance is a [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html) or a [persistent memory-optimized instance](https://help.aliyun.com/document_detail/183956.html) and has the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature enabled, you can call this operation to restore the entire instance or specific keys to a specific point in time accurate to the second. This way, you can achieve more fine-grained data restoration.
     * *   For other types of instances, we recommend that you call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) or [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation to restore the backup data to a new instance.
     *  *
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
     * @summary Restores the data in a backup file to a specified Tair (Redis OSS-compatible) instance.
     *  *
     * @description *   If your instance is a [DRAM-based instance](https://help.aliyun.com/document_detail/126164.html) or a [persistent memory-optimized instance](https://help.aliyun.com/document_detail/183956.html) and has the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature enabled, you can call this operation to restore the entire instance or specific keys to a specific point in time accurate to the second. This way, you can achieve more fine-grained data restoration.
     * *   For other types of instances, we recommend that you call the [CreateInstance](https://help.aliyun.com/document_detail/473757.html) or [CreateTairInstance](https://help.aliyun.com/document_detail/473770.html) operation to restore the backup data to a new instance.
     *  *
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
     * @summary 启动TairCustom的主机
     *  *
     * @param StartTairKVCacheCustomInstanceRequest $request StartTairKVCacheCustomInstanceRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartTairKVCacheCustomInstanceResponse StartTairKVCacheCustomInstanceResponse
     */
    public function startTairKVCacheCustomInstanceWithOptions($request, $runtime)
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
     * @summary 启动TairCustom的主机
     *  *
     * @param StartTairKVCacheCustomInstanceRequest $request StartTairKVCacheCustomInstanceRequest
     *
     * @return StartTairKVCacheCustomInstanceResponse StartTairKVCacheCustomInstanceResponse
     */
    public function startTairKVCacheCustomInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTairKVCacheCustomInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 停止TairCustom的主机
     *  *
     * @param StopTairKVCacheCustomInstanceRequest $request StopTairKVCacheCustomInstanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTairKVCacheCustomInstanceResponse StopTairKVCacheCustomInstanceResponse
     */
    public function stopTairKVCacheCustomInstanceWithOptions($request, $runtime)
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
     * @summary 停止TairCustom的主机
     *  *
     * @param StopTairKVCacheCustomInstanceRequest $request StopTairKVCacheCustomInstanceRequest
     *
     * @return StopTairKVCacheCustomInstanceResponse StopTairKVCacheCustomInstanceResponse
     */
    public function stopTairKVCacheCustomInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTairKVCacheCustomInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a master-replica switchover to switch node roles. This operation is applicable to disaster recovery drills and nearby access to applications that are deployed across zones.
     *  *
     * @description > For more information about nearby access to applications that are deployed across zones, see [Switch node roles](https://help.aliyun.com/document_detail/164222.html).
     * The instance must be a Redis Open-Source Edition instance or Tair (Enterprise Edition) [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses local disks.
     * A call to this operation has the following impacts on your instance:
     * *   The data shards in the instance may change to the read-only state and experience transient connections within seconds. Make sure that your application is configured to automatically reconnect to the instance.
     * *   If the instance enters the switching state, you cannot manage this instance. For example, you cannot modify the instance configurations or migrate the instance to another zone.
     *  *
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
     * @summary Performs a master-replica switchover to switch node roles. This operation is applicable to disaster recovery drills and nearby access to applications that are deployed across zones.
     *  *
     * @description > For more information about nearby access to applications that are deployed across zones, see [Switch node roles](https://help.aliyun.com/document_detail/164222.html).
     * The instance must be a Redis Open-Source Edition instance or Tair (Enterprise Edition) [DRAM-based](https://help.aliyun.com/document_detail/126164.html) instance that uses local disks.
     * A call to this operation has the following impacts on your instance:
     * *   The data shards in the instance may change to the read-only state and experience transient connections within seconds. Make sure that your application is configured to automatically reconnect to the instance.
     * *   If the instance enters the switching state, you cannot manage this instance. For example, you cannot modify the instance configurations or migrate the instance to another zone.
     *  *
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
     * @summary Enables or disables the proxy mode for a Tair (Redis OSS-compatible) cluster instance in a dedicated cluster.
     *  *
     * @description For more information about the proxy mode, see [Features of proxy servers](https://help.aliyun.com/document_detail/142959.html). Before you call this operation, make sure that the following requirements are met:
     * *   The instance is created by using a dedicated cluster. For more information, see [What is ApsaraDB for MyBase?](https://help.aliyun.com/document_detail/141455.html)
     * *   The instance uses the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     * >  Before you call the SwitchInstanceProxy operation, you must call the [DescribeDedicatedClusterInstanceList](https://help.aliyun.com/document_detail/473867.html) operation and view the value of the **ProxyCount** response parameter to check whether the proxy mode is enabled. A value of 0 indicates that the proxy mode is disabled. A value that is greater than 0 indicates that the proxy mode is enabled.
     *  *
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
     * @summary Enables or disables the proxy mode for a Tair (Redis OSS-compatible) cluster instance in a dedicated cluster.
     *  *
     * @description For more information about the proxy mode, see [Features of proxy servers](https://help.aliyun.com/document_detail/142959.html). Before you call this operation, make sure that the following requirements are met:
     * *   The instance is created by using a dedicated cluster. For more information, see [What is ApsaraDB for MyBase?](https://help.aliyun.com/document_detail/141455.html)
     * *   The instance uses the [cluster architecture](https://help.aliyun.com/document_detail/52228.html).
     * >  Before you call the SwitchInstanceProxy operation, you must call the [DescribeDedicatedClusterInstanceList](https://help.aliyun.com/document_detail/473867.html) operation and view the value of the **ProxyCount** response parameter to check whether the proxy mode is enabled. A value of 0 indicates that the proxy mode is disabled. A value that is greater than 0 indicates that the proxy mode is enabled.
     *  *
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
     * @summary Switches an instance from the current zone to the specified zone in the event of a fault.
     *  *
     * @param SwitchInstanceZoneFailOverRequest $request SwitchInstanceZoneFailOverRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchInstanceZoneFailOverResponse SwitchInstanceZoneFailOverResponse
     */
    public function switchInstanceZoneFailOverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->siteFaultTime)) {
            $query['SiteFaultTime'] = $request->siteFaultTime;
        }
        if (!Utils::isUnset($request->targetZoneId)) {
            $query['TargetZoneId'] = $request->targetZoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Switches an instance from the current zone to the specified zone in the event of a fault.
     *  *
     * @param SwitchInstanceZoneFailOverRequest $request SwitchInstanceZoneFailOverRequest
     *
     * @return SwitchInstanceZoneFailOverResponse SwitchInstanceZoneFailOverResponse
     */
    public function switchInstanceZoneFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchInstanceZoneFailOverWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the VPC or vSwitch of a Tair (Redis OSS-compatible) instance. If the instance is deployed in the classic network, the network type of the instance is changed from the classic network to VPC.
     *  *
     * @param SwitchNetworkRequest $request SwitchNetworkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchNetworkResponse SwitchNetworkResponse
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
     * @summary Changes the VPC or vSwitch of a Tair (Redis OSS-compatible) instance. If the instance is deployed in the classic network, the network type of the instance is changed from the classic network to VPC.
     *  *
     * @param SwitchNetworkRequest $request SwitchNetworkRequest
     *
     * @return SwitchNetworkResponse SwitchNetworkResponse
     */
    public function switchNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Disables configuration changes for a Tair (Redis OSS-compatible) instance before you use Data Transmission Service (DTS) to migrate or synchronize data of the instance. This prevents migration and synchronization task failures due to configuration changes.
     *  *
     * @param SyncDtsStatusRequest $request SyncDtsStatusRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncDtsStatusResponse SyncDtsStatusResponse
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
     * @summary Disables configuration changes for a Tair (Redis OSS-compatible) instance before you use Data Transmission Service (DTS) to migrate or synchronize data of the instance. This prevents migration and synchronization task failures due to configuration changes.
     *  *
     * @param SyncDtsStatusRequest $request SyncDtsStatusRequest
     *
     * @return SyncDtsStatusResponse SyncDtsStatusResponse
     */
    public function syncDtsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDtsStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to Tair (Redis OSS-compatible) instances.
     *  *
     * @description If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to each instance.
     * *   You can add tags to up to 50 instances in each request.
     * You can also add tags to instances in the Tair (Redis OSS-compatible) console. For more information, see [Create a tag](https://help.aliyun.com/document_detail/118779.html).
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
     * @summary Adds tags to Tair (Redis OSS-compatible) instances.
     *  *
     * @description If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to each instance.
     * *   You can add tags to up to 50 instances in each request.
     * You can also add tags to instances in the Tair (Redis OSS-compatible) console. For more information, see [Create a tag](https://help.aliyun.com/document_detail/118779.html).
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
     * @summary Changes the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go or from pay-as-you-go to subscription.
     *  *
     * @description Before you call this operation, make sure that you understand relevant precautions and billing rules. For more information, see the following topics:
     * *   [Change the billing method to subscription](https://help.aliyun.com/document_detail/54542.html).
     * *   [Change the billing method to pay-as-you-go](https://help.aliyun.com/document_detail/211549.html).
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
     * @summary Changes the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go or from pay-as-you-go to subscription.
     *  *
     * @description Before you call this operation, make sure that you understand relevant precautions and billing rules. For more information, see the following topics:
     * *   [Change the billing method to subscription](https://help.aliyun.com/document_detail/54542.html).
     * *   [Change the billing method to pay-as-you-go](https://help.aliyun.com/document_detail/211549.html).
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
     * @summary Changes a pay-as-you-go Tair (Redis OSS-compatible) instance to a subscription instance.
     *  *
     * @description For more information about how to change the billing method in the Tair (Redis OSS-compatible) console, see [Switch to subscription](https://help.aliyun.com/document_detail/54542.html).
     * >  You cannot change the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go.
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
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
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
     * @summary Changes a pay-as-you-go Tair (Redis OSS-compatible) instance to a subscription instance.
     *  *
     * @description For more information about how to change the billing method in the Tair (Redis OSS-compatible) console, see [Switch to subscription](https://help.aliyun.com/document_detail/54542.html).
     * >  You cannot change the billing method of a Tair (Redis OSS-compatible) instance from subscription to pay-as-you-go.
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
     * @summary Removes the write lock from an instance. After the instance is unlocked, it supports both read and write operations.
     *  *
     * @param UnlockDBInstanceWriteRequest $request UnlockDBInstanceWriteRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockDBInstanceWriteResponse UnlockDBInstanceWriteResponse
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
     * @summary Removes the write lock from an instance. After the instance is unlocked, it supports both read and write operations.
     *  *
     * @param UnlockDBInstanceWriteRequest $request UnlockDBInstanceWriteRequest
     *
     * @return UnlockDBInstanceWriteResponse UnlockDBInstanceWriteResponse
     */
    public function unlockDBInstanceWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockDBInstanceWriteWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from Tair (Redis OSS-compatible) instances.
     *  *
     * @description *   You can remove up to 20 tags at a time.
     * *   If a tag is removed from an instance and is not added to other instances, the tag is deleted.
     * You can also remove tags from instances in the Tair (Redis OSS-compatible) console. For more information, see [Remove a tag](https://help.aliyun.com/document_detail/119157.html).
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
     * @summary Removes tags from Tair (Redis OSS-compatible) instances.
     *  *
     * @description *   You can remove up to 20 tags at a time.
     * *   If a tag is removed from an instance and is not added to other instances, the tag is deleted.
     * You can also remove tags from instances in the Tair (Redis OSS-compatible) console. For more information, see [Remove a tag](https://help.aliyun.com/document_detail/119157.html).
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
}
