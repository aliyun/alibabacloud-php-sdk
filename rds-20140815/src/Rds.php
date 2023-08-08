<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Rds\V20140815\Models\ActivateMigrationTargetInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ActivateMigrationTargetInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateReadWriteSplittingConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AttachWhitelistTemplateToInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AttachWhitelistTemplateToInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CancelImportRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CancelImportResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckAccountNameAvailableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckAccountNameAvailableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckCloudResourceAuthorizedRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckCloudResourceAuthorizedResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckCreateDdrDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckCreateDdrDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckDBNameAvailableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckDBNameAvailableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckInstanceExistRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckInstanceExistResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ConfirmNotifyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ConfirmNotifyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ConfirmNotifyShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseBetweenInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseBetweenInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateCloudMigrationPrecheckTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateCloudMigrationPrecheckTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateCloudMigrationTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateCloudMigrationTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceForRebuildRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceForRebuildResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBNodesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBNodesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBNodesShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBProxyEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBProxyEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDdrInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDdrInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDiagnosticReportRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDiagnosticReportResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOnlineDatabaseTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOnlineDatabaseTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreatePostgresExtensionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreatePostgresExtensionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateReadOnlyDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateReadOnlyDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateSecretRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateSecretResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateTempDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateTempDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteADSettingRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteADSettingResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBNodesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBNodesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBNodesShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBProxyEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBProxyEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteGadInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteGadInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeletePostgresExtensionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeletePostgresExtensionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteSlotRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteSlotResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteUserBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteUserBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActionEventPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActionEventPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeADInfoRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeADInfoResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAllWhitelistTemplateRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAllWhitelistTemplateResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAnalyticdbByPrimaryDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAnalyticdbByPrimaryDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableMetricsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableMetricsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableRecoveryTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableRecoveryTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeClassDetailsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeClassDetailsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationPrecheckResultRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationPrecheckResultResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationResultRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationResultResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceDetailRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceDetailResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIpHostnameRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIpHostnameResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMetricsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMetricsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePromoteActivityRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePromoteActivityResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceProxyConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceProxyConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDERequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHADiagnoseConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHADiagnoseConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHASwitchConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHASwitchConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHostWebShellRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHostWebShellResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceCrossBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceCrossBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceLinkedWhitelistTemplateRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceLinkedWhitelistTemplateResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLocalAvailableRecoveryTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLocalAvailableRecoveryTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTaskByIdRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTaskByIdResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionInfosRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionInfosResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceUsageRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceUsageResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecretsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecretsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlotsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlotsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorRetentionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorRetentionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSupportOnlineResizeDiskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSupportOnlineResizeDiskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionPrecheckTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionPrecheckTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateLinkedInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateLinkedInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DestroyDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DestroyDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DetachGadInstanceMemberRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DetachGadInstanceMemberResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DetachWhitelistTemplateToInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DetachWhitelistTemplateToInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDBInstanceTopologyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantOperatorPermissionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantOperatorPermissionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ImportDatabaseBetweenInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ImportDatabaseBetweenInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ImportUserBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ImportUserBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListClassesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListClassesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListUserBackupFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListUserBackupFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\LockAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\LockAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateConnectionToOtherZoneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateConnectionToOtherZoneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateSecurityIPModeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateSecurityIPModeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActionEventPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActionEventPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyADInfoRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyADInfoResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyCollationTimeZoneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyCollationTimeZoneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDasInstanceConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDasInstanceConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceAutoUpgradeMinorVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceAutoUpgradeMinorVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionModeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionModeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDelayedReplicationTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDelayedReplicationTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDeletionProtectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDeletionProtectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceHAConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceHAConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMetricsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMetricsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkExpireTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkExpireTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstancePayTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstancePayTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceProxyConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceProxyConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSpecRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSpecResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceTDERequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceTDEResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDbProxyInstanceSslRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDbProxyInstanceSslResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDTCSecurityIpHostsForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDTCSecurityIpHostsForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyHADiagnoseConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyHADiagnoseConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyHASwitchConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyHASwitchConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceCrossBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceCrossBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyPGHbaConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyPGHbaConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadonlyInstanceDelayReplicationTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadonlyInstanceDelayReplicationTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadWriteSplittingConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorRetentionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorRetentionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyWhitelistTemplateRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyWhitelistTemplateResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RebuildDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RebuildDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReceiveDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReceiveDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RecoveryDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RecoveryDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstanceConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstanceConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseReadWriteSplittingConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RemoveTagsFromResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RemoveTagsFromResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreDdrTableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreDdrTableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreTableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreTableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeAccountPrivilegeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeAccountPrivilegeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeOperatorPermissionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeOperatorPermissionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\StartDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\StartDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\StopDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\StopDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceHARequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceHAResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceNetTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceNetTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceVpcRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceVpcResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchGuardToMasterInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchGuardToMasterInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\TerminateMigrateTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\TerminateMigrateTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\TransformDBInstancePayTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\TransformDBInstancePayTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UnlockAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UnlockAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpdatePostgresExtensionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpdatePostgresExtensionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpdateUserBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpdateUserBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceMajorVersionPrecheckRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceMajorVersionPrecheckResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceMajorVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceMajorVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBProxyInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBProxyInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Rds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'rds.aliyuncs.com',
            'cn-beijing'                  => 'rds.aliyuncs.com',
            'cn-hangzhou'                 => 'rds.aliyuncs.com',
            'cn-shanghai'                 => 'rds.aliyuncs.com',
            'cn-shenzhen'                 => 'rds.aliyuncs.com',
            'cn-heyuan'                   => 'rds.aliyuncs.com',
            'cn-hongkong'                 => 'rds.aliyuncs.com',
            'ap-southeast-1'              => 'rds.aliyuncs.com',
            'us-west-1'                   => 'rds.aliyuncs.com',
            'us-east-1'                   => 'rds.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'rds.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'rds.aliyuncs.com',
            'cn-north-2-gov-1'            => 'rds.aliyuncs.com',
            'ap-northeast-2-pop'          => 'rds.aliyuncs.com',
            'cn-beijing-finance-1'        => 'rds.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'rds.aliyuncs.com',
            'cn-beijing-gov-1'            => 'rds.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'rds.aliyuncs.com',
            'cn-edge-1'                   => 'rds.aliyuncs.com',
            'cn-fujian'                   => 'rds.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'rds.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'rds.aliyuncs.com',
            'cn-hangzhou-finance'         => 'rds-vpc.cn-hangzhou-finance.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'rds.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'rds.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'rds.aliyuncs.com',
            'cn-qingdao-nebula'           => 'rds.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'rds.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'rds.aliyuncs.com',
            'cn-shanghai-inner'           => 'rds.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'rds.aliyuncs.com',
            'cn-shenzhen-inner'           => 'rds.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'rds.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'rds.aliyuncs.com',
            'cn-wuhan'                    => 'rds.aliyuncs.com',
            'cn-yushanfang'               => 'rds.aliyuncs.com',
            'cn-zhangbei'                 => 'rds.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'rds.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'rds.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'rds.aliyuncs.com',
            'eu-west-1-oxs'               => 'rds.aliyuncs.com',
            'rus-west-1-pop'              => 'rds.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * ## Prerequisites
     *   * Before you call the ActivateMigrationTargetInstance operation, make sure that a cloud migration task is created by calling the [CreateCloudMigrationTask](~~411690~~) operation. In addition, make sure that the value that is returned for the **MigrateStage** parameter from the call of the [DescribeCloudMigrationResult](~~412150~~) operation is **increment**.
     *   *
     * @param ActivateMigrationTargetInstanceRequest $request ActivateMigrationTargetInstanceRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateMigrationTargetInstanceResponse ActivateMigrationTargetInstanceResponse
     */
    public function activateMigrationTargetInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->forceSwitch)) {
            $query['ForceSwitch'] = $request->forceSwitch;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateMigrationTargetInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateMigrationTargetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * Before you call the ActivateMigrationTargetInstance operation, make sure that a cloud migration task is created by calling the [CreateCloudMigrationTask](~~411690~~) operation. In addition, make sure that the value that is returned for the **MigrateStage** parameter from the call of the [DescribeCloudMigrationResult](~~412150~~) operation is **increment**.
     *   *
     * @param ActivateMigrationTargetInstanceRequest $request ActivateMigrationTargetInstanceRequest
     *
     * @return ActivateMigrationTargetInstanceResponse ActivateMigrationTargetInstanceResponse
     */
    public function activateMigrationTargetInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateMigrationTargetInstanceWithOptions($request, $runtime);
    }

    /**
     * This operation has the following limits:
     *   * *   Each tag consists of a TagKey and a TagValue. The TagKey is required, and the TagValue is optional.
     *   * *   The values of TagKey and TagValue cannot start with aliyun.
     *   * *   The values of TagKey and TagValue are not case-sensitive.
     *   * *   The maximum length of a TagKey is 64 characters, and the maximum length of a TagValue is 128 characters.
     *   * *   Each instance can be bound to a maximum of 10 tags. Each tag that is bound to the same instance must have a unique TagKey. If you bind a new tag to the instance and the TagKey of the new tag is the same as that of an existing tag, the new tag overwrites the existing tag.
     *   *
     * @param AddTagsToResourceRequest $request AddTagsToResourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTagsToResourceResponse AddTagsToResourceResponse
     */
    public function addTagsToResourceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTagsToResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagsToResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation has the following limits:
     *   * *   Each tag consists of a TagKey and a TagValue. The TagKey is required, and the TagValue is optional.
     *   * *   The values of TagKey and TagValue cannot start with aliyun.
     *   * *   The values of TagKey and TagValue are not case-sensitive.
     *   * *   The maximum length of a TagKey is 64 characters, and the maximum length of a TagValue is 128 characters.
     *   * *   Each instance can be bound to a maximum of 10 tags. Each tag that is bound to the same instance must have a unique TagKey. If you bind a new tag to the instance and the TagKey of the new tag is the same as that of an existing tag, the new tag overwrites the existing tag.
     *   *
     * @param AddTagsToResourceRequest $request AddTagsToResourceRequest
     *
     * @return AddTagsToResourceResponse AddTagsToResourceResponse
     */
    public function addTagsToResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsToResourceWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * You can apply for only one public endpoint for an instance.
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
        if (!Utils::isUnset($request->babelfishPort)) {
            $query['BabelfishPort'] = $request->babelfishPort;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->generalGroupName)) {
            $query['GeneralGroupName'] = $request->generalGroupName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->PGBouncerPort)) {
            $query['PGBouncerPort'] = $request->PGBouncerPort;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2014-08-15',
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
     * ###
     *   * You can apply for only one public endpoint for an instance.
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
     * If read-only instances are attached to a primary ApsaraDB RDS for SQL Server instance, you can call this operation to apply for a unified read-only routing endpoint for the primary instance. After you apply for a read-only routing endpoint for a primary instance, the existing endpoints of the primary instance and its read-only instances remain valid. In addition, you can still apply for internal and public endpoints.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   If the instance runs MySQL, the instance uses a shared proxy.
     *   * *   The instance is in the Running state.
     *   * *   Read-only instances are attached to the primary instance.
     *   * *   The instance does not have an ongoing Data Transmission Service (DTS) migration task.
     *   * *   The instance runs one of the following database versions and RDS editions:
     *   *     *   SQL Server (cluster edition)
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.6.
     *   *
     * @param AllocateReadWriteSplittingConnectionRequest $request AllocateReadWriteSplittingConnectionRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateReadWriteSplittingConnectionResponse AllocateReadWriteSplittingConnectionResponse
     */
    public function allocateReadWriteSplittingConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->distributionType)) {
            $query['DistributionType'] = $request->distributionType;
        }
        if (!Utils::isUnset($request->maxDelayTime)) {
            $query['MaxDelayTime'] = $request->maxDelayTime;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
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
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateReadWriteSplittingConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateReadWriteSplittingConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If read-only instances are attached to a primary ApsaraDB RDS for SQL Server instance, you can call this operation to apply for a unified read-only routing endpoint for the primary instance. After you apply for a read-only routing endpoint for a primary instance, the existing endpoints of the primary instance and its read-only instances remain valid. In addition, you can still apply for internal and public endpoints.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   If the instance runs MySQL, the instance uses a shared proxy.
     *   * *   The instance is in the Running state.
     *   * *   Read-only instances are attached to the primary instance.
     *   * *   The instance does not have an ongoing Data Transmission Service (DTS) migration task.
     *   * *   The instance runs one of the following database versions and RDS editions:
     *   *     *   SQL Server (cluster edition)
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.6.
     *   *
     * @param AllocateReadWriteSplittingConnectionRequest $request AllocateReadWriteSplittingConnectionRequest
     *
     * @return AllocateReadWriteSplittingConnectionResponse AllocateReadWriteSplittingConnectionResponse
     */
    public function allocateReadWriteSplittingConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * @param AttachWhitelistTemplateToInstanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return AttachWhitelistTemplateToInstanceResponse
     */
    public function attachWhitelistTemplateToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachWhitelistTemplateToInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachWhitelistTemplateToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachWhitelistTemplateToInstanceRequest $request
     *
     * @return AttachWhitelistTemplateToInstanceResponse
     */
    public function attachWhitelistTemplateToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachWhitelistTemplateToInstanceWithOptions($request, $runtime);
    }

    /**
     * When the [read/write splitting](~~51073~~) feature is enabled, this operation is used to calculate system-assigned read weights. For more information about custom read weights, see [DescribeDBInstanceNetInfo](~~26237~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local SSDs)
     *   *     *   MySQL 5.6
     *   *     *   SQL Server on RDS Cluster Edition.
     *   *
     * @param CalculateDBInstanceWeightRequest $request CalculateDBInstanceWeightRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CalculateDBInstanceWeightResponse CalculateDBInstanceWeightResponse
     */
    public function calculateDBInstanceWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CalculateDBInstanceWeight',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CalculateDBInstanceWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When the [read/write splitting](~~51073~~) feature is enabled, this operation is used to calculate system-assigned read weights. For more information about custom read weights, see [DescribeDBInstanceNetInfo](~~26237~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local SSDs)
     *   *     *   MySQL 5.6
     *   *     *   SQL Server on RDS Cluster Edition.
     *   *
     * @param CalculateDBInstanceWeightRequest $request CalculateDBInstanceWeightRequest
     *
     * @return CalculateDBInstanceWeightResponse CalculateDBInstanceWeightResponse
     */
    public function calculateDBInstanceWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calculateDBInstanceWeightWithOptions($request, $runtime);
    }

    /**
     * This operation is supported for instances that run SQL Server and belong to the dedicated or dedicated host instance family. For more information about how to start a migration task, see [ImportDatabaseBetweenInstances](~~26301~~).
     *   * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   *
     * @param CancelImportRequest $request CancelImportRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelImportResponse CancelImportResponse
     */
    public function cancelImportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->importId)) {
            $query['ImportId'] = $request->importId;
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
            'action'      => 'CancelImport',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelImportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is supported for instances that run SQL Server and belong to the dedicated or dedicated host instance family. For more information about how to start a migration task, see [ImportDatabaseBetweenInstances](~~26301~~).
     *   * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   *
     * @param CancelImportRequest $request CancelImportRequest
     *
     * @return CancelImportResponse CancelImportResponse
     */
    public function cancelImport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelImportWithOptions($request, $runtime);
    }

    /**
     * @param CheckAccountNameAvailableRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckAccountNameAvailableResponse
     */
    public function checkAccountNameAvailableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAccountNameAvailable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAccountNameAvailableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckAccountNameAvailableRequest $request
     *
     * @return CheckAccountNameAvailableResponse
     */
    public function checkAccountNameAvailable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountNameAvailableWithOptions($request, $runtime);
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckCloudResourceAuthorizedResponse
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
        if (!Utils::isUnset($request->targetRegionId)) {
            $query['TargetRegionId'] = $request->targetRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCloudResourceAuthorized',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the source instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param CheckCreateDdrDBInstanceRequest $request CheckCreateDdrDBInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCreateDdrDBInstanceResponse CheckCreateDdrDBInstanceResponse
     */
    public function checkCreateDdrDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceStorage)) {
            $query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->sourceDBInstanceName)) {
            $query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        }
        if (!Utils::isUnset($request->sourceRegion)) {
            $query['SourceRegion'] = $request->sourceRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCreateDdrDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCreateDdrDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the source instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param CheckCreateDdrDBInstanceRequest $request CheckCreateDdrDBInstanceRequest
     *
     * @return CheckCreateDdrDBInstanceResponse CheckCreateDdrDBInstanceResponse
     */
    public function checkCreateDdrDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreateDdrDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CheckDBNameAvailableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckDBNameAvailableResponse
     */
    public function checkDBNameAvailableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
            'action'      => 'CheckDBNameAvailable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDBNameAvailableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDBNameAvailableRequest $request
     *
     * @return CheckDBNameAvailableResponse
     */
    public function checkDBNameAvailable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDBNameAvailableWithOptions($request, $runtime);
    }

    /**
     * @param CheckInstanceExistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckInstanceExistResponse
     */
    public function checkInstanceExistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'CheckInstanceExist',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckInstanceExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckInstanceExistRequest $request
     *
     * @return CheckInstanceExistResponse
     */
    public function checkInstanceExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkInstanceExistWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->serviceLinkedRole)) {
            $query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The original instance is in the Running state.
     *   * *   The original instance does not have ongoing migration tasks.
     *   * *   The log backup feature is enabled for the original instance to support point-in-time recovery.
     *   * *   If you want to clone the original instance by using backup sets, the original instance must have at least one backup set.
     *   * > ApsaraDB RDS allows you to create a cloned instance by using the credentials of your RAM user. Make sure that your RAM user is granted the permissions that are required to clone an instance. For more information, see [Use RAM to manage ApsaraDB RDS permissions](~~58932~~).
     *   * Take note of the following information:
     *   * *   The new instance has the same IP address whitelist, SQL Explorer (SQL Audit), alert threshold, backup, and parameter settings as the original instance.
     *   * *   The data and account information of the new instance is the same as that indicated by the backup set or point in time used for restoration of the original instance.
     *   *
     * @param CloneDBInstanceRequest $tmpReq  CloneDBInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneDBInstanceResponse CloneDBInstanceResponse
     */
    public function cloneDBInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CloneDBInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverlessConfig)) {
            $request->serverlessConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->bpeEnabled)) {
            $query['BpeEnabled'] = $request->bpeEnabled;
        }
        if (!Utils::isUnset($request->burstingEnabled)) {
            $query['BurstingEnabled'] = $request->burstingEnabled;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
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
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->dbNames)) {
            $query['DbNames'] = $request->dbNames;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTable)) {
            $query['RestoreTable'] = $request->restoreTable;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->serverlessConfigShrink)) {
            $query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }
        if (!Utils::isUnset($request->tableMeta)) {
            $query['TableMeta'] = $request->tableMeta;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIdSlave1)) {
            $query['ZoneIdSlave1'] = $request->zoneIdSlave1;
        }
        if (!Utils::isUnset($request->zoneIdSlave2)) {
            $query['ZoneIdSlave2'] = $request->zoneIdSlave2;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The original instance is in the Running state.
     *   * *   The original instance does not have ongoing migration tasks.
     *   * *   The log backup feature is enabled for the original instance to support point-in-time recovery.
     *   * *   If you want to clone the original instance by using backup sets, the original instance must have at least one backup set.
     *   * > ApsaraDB RDS allows you to create a cloned instance by using the credentials of your RAM user. Make sure that your RAM user is granted the permissions that are required to clone an instance. For more information, see [Use RAM to manage ApsaraDB RDS permissions](~~58932~~).
     *   * Take note of the following information:
     *   * *   The new instance has the same IP address whitelist, SQL Explorer (SQL Audit), alert threshold, backup, and parameter settings as the original instance.
     *   * *   The data and account information of the new instance is the same as that indicated by the backup set or point in time used for restoration of the original instance.
     *   *
     * @param CloneDBInstanceRequest $request CloneDBInstanceRequest
     *
     * @return CloneDBInstanceResponse CloneDBInstanceResponse
     */
    public function cloneDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneDBInstanceWithOptions($request, $runtime);
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to an instance. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * > This operation is supported only when your instance runs MySQL or PostgreSQL.
     *   *
     * @param CloneParameterGroupRequest $request CloneParameterGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneParameterGroupResponse CloneParameterGroupResponse
     */
    public function cloneParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->targetRegionId)) {
            $query['TargetRegionId'] = $request->targetRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to an instance. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * > This operation is supported only when your instance runs MySQL or PostgreSQL.
     *   *
     * @param CloneParameterGroupRequest $request CloneParameterGroupRequest
     *
     * @return CloneParameterGroupResponse CloneParameterGroupResponse
     */
    public function cloneParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneParameterGroupWithOptions($request, $runtime);
    }

    /**
     * After you call the QueryNotify operation to query notifications for an instance, you can call this operation to mark the notifications as confirmed. For more information, see [Query notifications for an ApsaraDB RDS instance](~~427959~~).
     *   *
     * @param ConfirmNotifyRequest $tmpReq  ConfirmNotifyRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmNotifyResponse ConfirmNotifyResponse
     */
    public function confirmNotifyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ConfirmNotifyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notifyIdList)) {
            $request->notifyIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notifyIdList, 'NotifyIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->confirmor)) {
            $body['Confirmor'] = $request->confirmor;
        }
        if (!Utils::isUnset($request->notifyIdListShrink)) {
            $body['NotifyIdList'] = $request->notifyIdListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmNotify',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmNotifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you call the QueryNotify operation to query notifications for an instance, you can call this operation to mark the notifications as confirmed. For more information, see [Query notifications for an ApsaraDB RDS instance](~~427959~~).
     *   *
     * @param ConfirmNotifyRequest $request ConfirmNotifyRequest
     *
     * @return ConfirmNotifyResponse ConfirmNotifyResponse
     */
    public function confirmNotify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmNotifyWithOptions($request, $runtime);
    }

    /**
     * This operation is phased out.
     *   *
     * @param CopyDatabaseRequest $request CopyDatabaseRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyDatabaseResponse CopyDatabaseResponse
     */
    public function copyDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'CopyDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is phased out.
     *   *
     * @param CopyDatabaseRequest $request CopyDatabaseRequest
     *
     * @return CopyDatabaseResponse CopyDatabaseResponse
     */
    public function copyDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDatabaseWithOptions($request, $runtime);
    }

    /**
     * You can also call this operation to restore specific databases to an existing instance by point in time or backup set. For more information, see [Restore the data of an ApsaraDB RDS for SQL Server instance](~~95722~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The source and destination instances belong to the same account.
     *   * *   The source and destination instances run the same version of database engine.
     *   * *   The source and destination instances reside in the same region and use the same network type. The instances can reside in different zones.
     *   * *   The source and destination instances do not have databases whose names are the same.
     *   * *   The available storage of the destination instance is larger than the total size of the databases that you want to replicate from the source instance.
     *   * > This operation is supported only for instances that run SQL Server 2012 and later.
     *   *
     * @param CopyDatabaseBetweenInstancesRequest $request CopyDatabaseBetweenInstancesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyDatabaseBetweenInstancesResponse CopyDatabaseBetweenInstancesResponse
     */
    public function copyDatabaseBetweenInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dbNames)) {
            $query['DbNames'] = $request->dbNames;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->syncUserPrivilege)) {
            $query['SyncUserPrivilege'] = $request->syncUserPrivilege;
        }
        if (!Utils::isUnset($request->targetDBInstanceId)) {
            $query['TargetDBInstanceId'] = $request->targetDBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyDatabaseBetweenInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyDatabaseBetweenInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also call this operation to restore specific databases to an existing instance by point in time or backup set. For more information, see [Restore the data of an ApsaraDB RDS for SQL Server instance](~~95722~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The source and destination instances belong to the same account.
     *   * *   The source and destination instances run the same version of database engine.
     *   * *   The source and destination instances reside in the same region and use the same network type. The instances can reside in different zones.
     *   * *   The source and destination instances do not have databases whose names are the same.
     *   * *   The available storage of the destination instance is larger than the total size of the databases that you want to replicate from the source instance.
     *   * > This operation is supported only for instances that run SQL Server 2012 and later.
     *   *
     * @param CopyDatabaseBetweenInstancesRequest $request CopyDatabaseBetweenInstancesRequest
     *
     * @return CopyDatabaseBetweenInstancesResponse CopyDatabaseBetweenInstancesResponse
     */
    public function copyDatabaseBetweenInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDatabaseBetweenInstancesWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The database is in the Running state.
     *   * *   The number of accounts that are created on the instance does not exceed the upper limit. For more information, see [Limits](~~41872~~).
     *   * >
     *   * *   This operation is supported for instances that run MySQL, MariaDB, PostgreSQL, and SQL Server. However, if the instance runs SQL Server 2017 or SQL Server 2019 on RDS Cluster Edition, this operation is not supported.
     *   * *   You can create multiple privileged accounts and standard accounts on an instance that runs PostgreSQL.
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
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
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
            'action'      => 'CreateAccount',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The database is in the Running state.
     *   * *   The number of accounts that are created on the instance does not exceed the upper limit. For more information, see [Limits](~~41872~~).
     *   * >
     *   * *   This operation is supported for instances that run MySQL, MariaDB, PostgreSQL, and SQL Server. However, if the instance runs SQL Server 2017 or SQL Server 2019 on RDS Cluster Edition, this operation is not supported.
     *   * *   You can create multiple privileged accounts and standard accounts on an instance that runs PostgreSQL.
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
     * This operation uses the backup feature of ApsaraDB RDS to create a backup set. You can also use an operation of Database Backup (DBS) to create a backup set. For more information, see [List of operations by function of DBS](~~437245~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The original instance is in the Running state.
     *   * *   The instance does not have ongoing backup tasks.
     *   * *   The number of backup files that are created per day for an instance cannot exceed 20.
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
        if (!Utils::isUnset($request->backupMethod)) {
            $query['BackupMethod'] = $request->backupMethod;
        }
        if (!Utils::isUnset($request->backupStrategy)) {
            $query['BackupStrategy'] = $request->backupStrategy;
        }
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackup',
            'version'     => '2014-08-15',
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
     * This operation uses the backup feature of ApsaraDB RDS to create a backup set. You can also use an operation of Database Backup (DBS) to create a backup set. For more information, see [List of operations by function of DBS](~~437245~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The original instance is in the Running state.
     *   * *   The instance does not have ongoing backup tasks.
     *   * *   The number of backup files that are created per day for an instance cannot exceed 20.
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
     * ## Prerequisites
     *   * The RDS instance meets the following requirements:
     *   * * The RDS instance and the self-managed PostgreSQL instance run the same PostgreSQL version, which can be PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15.
     *   * * The RDS instance is a primary instance. Read-only RDS instances do not support cloud migration.
     *   * * The RDS instance uses cloud disks.
     *   * * The RDS instance is empty. The available storage of the RDS instance is greater than or equal to the size of the data in the self-managed PostgreSQL instance.
     *   * The self-managed PostgreSQL instance meets the following requirements:
     *   * * Network configurations
     *   * |Migration source|Network configuration|
     *   * |:---|---|
     *   * |Self-managed ECS-based PostgreSQL Database|If the self-managed PostgreSQL instance resides on an Elastic Compute Service (ECS) instance, the ECS instance and the RDS instance must reside in the same virtual private cloud (VPC). If the ECS instance and the RDS instance reside in different VPCs, use Cloud Enterprise Network (CEN) to connect the VPCs. For more information, see [What is CEN?](~~181681~~)|
     *   * |Self-managed PostgreSQL database in a data center (within the same VPC as the destination database)|The data center is able to communicate with the VPC to which the destination RDS instance belongs. For more information, see [Connect a data center to a VPC](~~97768~~).|
     *   * * If the self-managed PostgreSQL instance resides on an ECS instance, an ECS security group is configured. For more information, see [(Optional) Configure an ECS security group on a self-managed PostgreSQL instance](~~369726~~).
     *   * * The configurations that are described in [Configure a self-managed PostgreSQL instance to listen to remote connections](~~369727~~) are complete.
     *   * * The configurations that are described in [Create an account for cloud migration on a self-managed PostgreSQL instance](~~369500~~) are complete.
     *   * * The configurations that are described in [Update the pg\\_hba.conf file of a self-managed PostgreSQL instance](~~369728~~) are complete.
     *   * * The configurations that are described in [Configure the firewall of the server on which a self-managed PostgreSQL instance resides](~~369729~~) are complete.
     *   *
     * @param CreateCloudMigrationPrecheckTaskRequest $request CreateCloudMigrationPrecheckTaskRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudMigrationPrecheckTaskResponse CreateCloudMigrationPrecheckTaskResponse
     */
    public function createCloudMigrationPrecheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceAccount)) {
            $query['SourceAccount'] = $request->sourceAccount;
        }
        if (!Utils::isUnset($request->sourceCategory)) {
            $query['SourceCategory'] = $request->sourceCategory;
        }
        if (!Utils::isUnset($request->sourceIpAddress)) {
            $query['SourceIpAddress'] = $request->sourceIpAddress;
        }
        if (!Utils::isUnset($request->sourcePassword)) {
            $query['SourcePassword'] = $request->sourcePassword;
        }
        if (!Utils::isUnset($request->sourcePort)) {
            $query['SourcePort'] = $request->sourcePort;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudMigrationPrecheckTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudMigrationPrecheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * The RDS instance meets the following requirements:
     *   * * The RDS instance and the self-managed PostgreSQL instance run the same PostgreSQL version, which can be PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15.
     *   * * The RDS instance is a primary instance. Read-only RDS instances do not support cloud migration.
     *   * * The RDS instance uses cloud disks.
     *   * * The RDS instance is empty. The available storage of the RDS instance is greater than or equal to the size of the data in the self-managed PostgreSQL instance.
     *   * The self-managed PostgreSQL instance meets the following requirements:
     *   * * Network configurations
     *   * |Migration source|Network configuration|
     *   * |:---|---|
     *   * |Self-managed ECS-based PostgreSQL Database|If the self-managed PostgreSQL instance resides on an Elastic Compute Service (ECS) instance, the ECS instance and the RDS instance must reside in the same virtual private cloud (VPC). If the ECS instance and the RDS instance reside in different VPCs, use Cloud Enterprise Network (CEN) to connect the VPCs. For more information, see [What is CEN?](~~181681~~)|
     *   * |Self-managed PostgreSQL database in a data center (within the same VPC as the destination database)|The data center is able to communicate with the VPC to which the destination RDS instance belongs. For more information, see [Connect a data center to a VPC](~~97768~~).|
     *   * * If the self-managed PostgreSQL instance resides on an ECS instance, an ECS security group is configured. For more information, see [(Optional) Configure an ECS security group on a self-managed PostgreSQL instance](~~369726~~).
     *   * * The configurations that are described in [Configure a self-managed PostgreSQL instance to listen to remote connections](~~369727~~) are complete.
     *   * * The configurations that are described in [Create an account for cloud migration on a self-managed PostgreSQL instance](~~369500~~) are complete.
     *   * * The configurations that are described in [Update the pg\\_hba.conf file of a self-managed PostgreSQL instance](~~369728~~) are complete.
     *   * * The configurations that are described in [Configure the firewall of the server on which a self-managed PostgreSQL instance resides](~~369729~~) are complete.
     *   *
     * @param CreateCloudMigrationPrecheckTaskRequest $request CreateCloudMigrationPrecheckTaskRequest
     *
     * @return CreateCloudMigrationPrecheckTaskResponse CreateCloudMigrationPrecheckTaskResponse
     */
    public function createCloudMigrationPrecheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudMigrationPrecheckTaskWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * Before you call this operation, make sure that the ApsaraDB RDS for PostgreSQL instance passes the cloud migration assessment.
     *   *
     * @param CreateCloudMigrationTaskRequest $request CreateCloudMigrationTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudMigrationTaskResponse CreateCloudMigrationTaskResponse
     */
    public function createCloudMigrationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceAccount)) {
            $query['SourceAccount'] = $request->sourceAccount;
        }
        if (!Utils::isUnset($request->sourceCategory)) {
            $query['SourceCategory'] = $request->sourceCategory;
        }
        if (!Utils::isUnset($request->sourceIpAddress)) {
            $query['SourceIpAddress'] = $request->sourceIpAddress;
        }
        if (!Utils::isUnset($request->sourcePassword)) {
            $query['SourcePassword'] = $request->sourcePassword;
        }
        if (!Utils::isUnset($request->sourcePort)) {
            $query['SourcePort'] = $request->sourcePort;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudMigrationTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudMigrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * Before you call this operation, make sure that the ApsaraDB RDS for PostgreSQL instance passes the cloud migration assessment.
     *   *
     * @param CreateCloudMigrationTaskRequest $request CreateCloudMigrationTaskRequest
     *
     * @return CreateCloudMigrationTaskResponse CreateCloudMigrationTaskResponse
     */
    public function createCloudMigrationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudMigrationTaskWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * For more information about ApsaraDB RDS instance types, see [Primary ApsaraDB RDS instance types](~~26312~~).
     *   *
     * @param CreateDBInstanceRequest $tmpReq  CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverlessConfig)) {
            $request->serverlessConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->babelfishConfig)) {
            $query['BabelfishConfig'] = $request->babelfishConfig;
        }
        if (!Utils::isUnset($request->bpeEnabled)) {
            $query['BpeEnabled'] = $request->bpeEnabled;
        }
        if (!Utils::isUnset($request->burstingEnabled)) {
            $query['BurstingEnabled'] = $request->burstingEnabled;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionMode)) {
            $query['ConnectionMode'] = $request->connectionMode;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->createStrategy)) {
            $query['CreateStrategy'] = $request->createStrategy;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceNetType)) {
            $query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }
        if (!Utils::isUnset($request->DBInstanceStorage)) {
            $query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->DBIsIgnoreCase)) {
            $query['DBIsIgnoreCase'] = $request->DBIsIgnoreCase;
        }
        if (!Utils::isUnset($request->DBParamGroupId)) {
            $query['DBParamGroupId'] = $request->DBParamGroupId;
        }
        if (!Utils::isUnset($request->DBTimeZone)) {
            $query['DBTimeZone'] = $request->DBTimeZone;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
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
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleARN)) {
            $query['RoleARN'] = $request->roleARN;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->serverlessConfigShrink)) {
            $query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }
        if (!Utils::isUnset($request->storageAutoScale)) {
            $query['StorageAutoScale'] = $request->storageAutoScale;
        }
        if (!Utils::isUnset($request->storageThreshold)) {
            $query['StorageThreshold'] = $request->storageThreshold;
        }
        if (!Utils::isUnset($request->storageUpperBound)) {
            $query['StorageUpperBound'] = $request->storageUpperBound;
        }
        if (!Utils::isUnset($request->systemDBCharset)) {
            $query['SystemDBCharset'] = $request->systemDBCharset;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForLog)) {
            $query['TargetDedicatedHostIdForLog'] = $request->targetDedicatedHostIdForLog;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForMaster)) {
            $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForSlave)) {
            $query['TargetDedicatedHostIdForSlave'] = $request->targetDedicatedHostIdForSlave;
        }
        if (!Utils::isUnset($request->targetMinorVersion)) {
            $query['TargetMinorVersion'] = $request->targetMinorVersion;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->userBackupId)) {
            $query['UserBackupId'] = $request->userBackupId;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIdSlave1)) {
            $query['ZoneIdSlave1'] = $request->zoneIdSlave1;
        }
        if (!Utils::isUnset($request->zoneIdSlave2)) {
            $query['ZoneIdSlave2'] = $request->zoneIdSlave2;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * For more information about ApsaraDB RDS instance types, see [Primary ApsaraDB RDS instance types](~~26312~~).
     *   *
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
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   Each type of endpoint can contain an internal endpoint and an external endpoint. When you create any type of endpoint, an internal endpoint is automatically created for the endpoint.
     *   * *   If the instance runs MySQL, you must specify VPCId, VSwitchId, and NodeItems.
     *   *
     * @param CreateDBInstanceEndpointRequest $tmpReq  CreateDBInstanceEndpointRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceEndpointResponse CreateDBInstanceEndpointResponse
     */
    public function createDBInstanceEndpointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBInstanceEndpointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeItems)) {
            $request->nodeItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeItems, 'NodeItems', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointDescription)) {
            $query['DBInstanceEndpointDescription'] = $request->DBInstanceEndpointDescription;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointType)) {
            $query['DBInstanceEndpointType'] = $request->DBInstanceEndpointType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->nodeItemsShrink)) {
            $query['NodeItems'] = $request->nodeItemsShrink;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstanceEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   Each type of endpoint can contain an internal endpoint and an external endpoint. When you create any type of endpoint, an internal endpoint is automatically created for the endpoint.
     *   * *   If the instance runs MySQL, you must specify VPCId, VSwitchId, and NodeItems.
     *   *
     * @param CreateDBInstanceEndpointRequest $request CreateDBInstanceEndpointRequest
     *
     * @return CreateDBInstanceEndpointResponse CreateDBInstanceEndpointResponse
     */
    public function createDBInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   You can create a public endpoint of an endpoint type only when no public endpoint is created for this endpoint type.
     *   * *   The node weights and other configurations are the same as those of the internal endpoint of this endpoint type. Only one public endpoint and one internal endpoint can be created for each endpoint type.
     *   *
     * @param CreateDBInstanceEndpointAddressRequest $request CreateDBInstanceEndpointAddressRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceEndpointAddressResponse CreateDBInstanceEndpointAddressResponse
     */
    public function createDBInstanceEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointId)) {
            $query['DBInstanceEndpointId'] = $request->DBInstanceEndpointId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstanceEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   You can create a public endpoint of an endpoint type only when no public endpoint is created for this endpoint type.
     *   * *   The node weights and other configurations are the same as those of the internal endpoint of this endpoint type. Only one public endpoint and one internal endpoint can be created for each endpoint type.
     *   *
     * @param CreateDBInstanceEndpointAddressRequest $request CreateDBInstanceEndpointAddressRequest
     *
     * @return CreateDBInstanceEndpointAddressResponse CreateDBInstanceEndpointAddressResponse
     */
    public function createDBInstanceEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * **Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Pricing, billable items, and billing methods](~~45020~~).**
     *   * You can call this operation only for instances that are moved to the recycle bin. For more information about instances that can be moved to the recycle bin, see [Recycle bin](~~96065~~).
     *   *
     * @param CreateDBInstanceForRebuildRequest $request CreateDBInstanceForRebuildRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceForRebuildResponse CreateDBInstanceForRebuildResponse
     */
    public function createDBInstanceForRebuildWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceNetType)) {
            $query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIdSlave1)) {
            $query['ZoneIdSlave1'] = $request->zoneIdSlave1;
        }
        if (!Utils::isUnset($request->zoneIdSlave2)) {
            $query['ZoneIdSlave2'] = $request->zoneIdSlave2;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstanceForRebuild',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceForRebuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Pricing, billable items, and billing methods](~~45020~~).**
     *   * You can call this operation only for instances that are moved to the recycle bin. For more information about instances that can be moved to the recycle bin, see [Recycle bin](~~96065~~).
     *   *
     * @param CreateDBInstanceForRebuildRequest $request CreateDBInstanceForRebuildRequest
     *
     * @return CreateDBInstanceForRebuildResponse CreateDBInstanceForRebuildResponse
     */
    public function createDBInstanceForRebuild($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceForRebuildWithOptions($request, $runtime);
    }

    /**
     * ## Background information
     *   * This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition. These RDS instances are referred to as RDS clusters.
     *   *
     * @param CreateDBNodesRequest $tmpReq  CreateDBNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBNodesResponse CreateDBNodesResponse
     */
    public function createDBNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNode)) {
            $request->DBNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNode, 'DBNode', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNodeShrink)) {
            $query['DBNode'] = $request->DBNodeShrink;
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
            'action'      => 'CreateDBNodes',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition. These RDS instances are referred to as RDS clusters.
     *   *
     * @param CreateDBNodesRequest $request CreateDBNodesRequest
     *
     * @return CreateDBNodesResponse CreateDBNodesResponse
     */
    public function createDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBNodesWithOptions($request, $runtime);
    }

    /**
     * After you enable the dedicated proxy feature for an ApsaraDB RDS for MySQL instance or enable the database proxy feature for an ApsaraDB RDS for PostgreSQL instance, a default proxy endpoint is created. You can call this operation to create proxy endpoints of different network types. For more information, see [Activate and configure the database proxy feature for an ApsaraDB RDS for PostgreSQL instance](~~418272~~) and [What are database proxies?](~~138705~~)
     *   * >
     *   * *   The following network types are supported for ApsaraDB RDS for MySQL instances that use local disks: virtual private cloud (VPC), Classic, and Public.
     *   * *   The following network types are supported for instances that use cloud disks: VPC and Public. If you want to create a proxy endpoint of the public network type, you must configure IP address whitelists for the instance and its read-only instances to ensure connectivity between the client and the instance. You can call the [ModifySecurityIps](~~26242~~) operation to configure an IP address whitelist for an instance.
     *   *
     * @param CreateDBProxyEndpointAddressRequest $request CreateDBProxyEndpointAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBProxyEndpointAddressResponse CreateDBProxyEndpointAddressResponse
     */
    public function createDBProxyEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyConnectStringNetType)) {
            $query['DBProxyConnectStringNetType'] = $request->DBProxyConnectStringNetType;
        }
        if (!Utils::isUnset($request->DBProxyEndpointId)) {
            $query['DBProxyEndpointId'] = $request->DBProxyEndpointId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->DBProxyNewConnectStringPort)) {
            $query['DBProxyNewConnectStringPort'] = $request->DBProxyNewConnectStringPort;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBProxyEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBProxyEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you enable the dedicated proxy feature for an ApsaraDB RDS for MySQL instance or enable the database proxy feature for an ApsaraDB RDS for PostgreSQL instance, a default proxy endpoint is created. You can call this operation to create proxy endpoints of different network types. For more information, see [Activate and configure the database proxy feature for an ApsaraDB RDS for PostgreSQL instance](~~418272~~) and [What are database proxies?](~~138705~~)
     *   * >
     *   * *   The following network types are supported for ApsaraDB RDS for MySQL instances that use local disks: virtual private cloud (VPC), Classic, and Public.
     *   * *   The following network types are supported for instances that use cloud disks: VPC and Public. If you want to create a proxy endpoint of the public network type, you must configure IP address whitelists for the instance and its read-only instances to ensure connectivity between the client and the instance. You can call the [ModifySecurityIps](~~26242~~) operation to configure an IP address whitelist for an instance.
     *   *
     * @param CreateDBProxyEndpointAddressRequest $request CreateDBProxyEndpointAddressRequest
     *
     * @return CreateDBProxyEndpointAddressResponse CreateDBProxyEndpointAddressResponse
     */
    public function createDBProxyEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * If you want to perform data management tasks such as data change and schema design, use Data Management (DMS). For more information, see [List of operations by function of DMS](~~97965~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The maximum number of databases that can be created on an instance is not reached. You can call the [DescribeDBInstanceAttribute](~~26231~~) operation to query the maximum number of databases that can be created on an instance.
     *   * *   The instance is not a read-only instance.
     *   * > This operation is not supported for instances that run PostgreSQL with local SSDs or SQL Server 2017 (cluster edition). You can execute the CREATE DATABASE statement to create a database.
     *   *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterSetName)) {
            $query['CharacterSetName'] = $request->characterSetName;
        }
        if (!Utils::isUnset($request->DBDescription)) {
            $query['DBDescription'] = $request->DBDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
            'action'      => 'CreateDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you want to perform data management tasks such as data change and schema design, use Data Management (DMS). For more information, see [List of operations by function of DMS](~~97965~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The maximum number of databases that can be created on an instance is not reached. You can call the [DescribeDBInstanceAttribute](~~26231~~) operation to query the maximum number of databases that can be created on an instance.
     *   * *   The instance is not a read-only instance.
     *   * > This operation is not supported for instances that run PostgreSQL with local SSDs or SQL Server 2017 (cluster edition). You can execute the CREATE DATABASE statement to create a database.
     *   *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, you can call the [CheckCreateDdrDBInstance](~~121721~~) operation to check whether the data of the source instance can be restored from a cross-region backup set.
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param CreateDdrInstanceRequest $request CreateDdrInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDdrInstanceResponse CreateDdrInstanceResponse
     */
    public function createDdrInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionMode)) {
            $query['ConnectionMode'] = $request->connectionMode;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceNetType)) {
            $query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }
        if (!Utils::isUnset($request->DBInstanceStorage)) {
            $query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->sourceDBInstanceName)) {
            $query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        }
        if (!Utils::isUnset($request->sourceRegion)) {
            $query['SourceRegion'] = $request->sourceRegion;
        }
        if (!Utils::isUnset($request->systemDBCharset)) {
            $query['SystemDBCharset'] = $request->systemDBCharset;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
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
            'action'      => 'CreateDdrInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDdrInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, you can call the [CheckCreateDdrDBInstance](~~121721~~) operation to check whether the data of the source instance can be restored from a cross-region backup set.
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param CreateDdrInstanceRequest $request CreateDdrInstanceRequest
     *
     * @return CreateDdrInstanceResponse CreateDdrInstanceResponse
     */
    public function createDdrInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDdrInstanceWithOptions($request, $runtime);
    }

    /**
     * > This operation is no longer maintained. You can use the CreateDiagnosticReport operation of Database Autonomy Service (DAS) to create a diagnostic report.
     *   * After you call this operation to create a diagnostic report, you can call the DescribeDiagnosticReportList operation to download the diagnostic report.
     *   *
     * @param CreateDiagnosticReportRequest $request CreateDiagnosticReportRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiagnosticReportResponse CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnosticReport',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is no longer maintained. You can use the CreateDiagnosticReport operation of Database Autonomy Service (DAS) to create a diagnostic report.
     *   * After you call this operation to create a diagnostic report, you can call the DescribeDiagnosticReportList operation to download the diagnostic report.
     *   *
     * @param CreateDiagnosticReportRequest $request CreateDiagnosticReportRequest
     *
     * @return CreateDiagnosticReportResponse CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * ### Prerequisites
     *   * *   Your Alibaba Cloud account is used.
     *   * *   The balance in your Alibaba Cloud account is greater than or equal to USD 100.
     *   * *   A primary ApsaraDB RDS for MySQL instance is created, and the instance is not running as a node in a global active database cluster. You can call the [CreateDBInstance](~~26228~~) operation to create an instance.
     *   * > You must create a primary ApsaraDB RDS for MySQL instance in one of the following regions: China (Hangzhou), China (Shanghai), China (Qingdao), China (Beijing), China (Zhangjiakou), China (Shenzhen), and China (Chengdu).
     *   * For more information, see [Create and release an ApsaraDB RDS global active database cluster](~~328592~~).
     *   *
     * @param CreateGADInstanceRequest $request CreateGADInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGADInstanceResponse CreateGADInstanceResponse
     */
    public function createGADInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->centralDBInstanceId)) {
            $query['CentralDBInstanceId'] = $request->centralDBInstanceId;
        }
        if (!Utils::isUnset($request->centralRdsDtsAdminAccount)) {
            $query['CentralRdsDtsAdminAccount'] = $request->centralRdsDtsAdminAccount;
        }
        if (!Utils::isUnset($request->centralRdsDtsAdminPassword)) {
            $query['CentralRdsDtsAdminPassword'] = $request->centralRdsDtsAdminPassword;
        }
        if (!Utils::isUnset($request->centralRegionId)) {
            $query['CentralRegionId'] = $request->centralRegionId;
        }
        if (!Utils::isUnset($request->DBList)) {
            $query['DBList'] = $request->DBList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unitNode)) {
            $query['UnitNode'] = $request->unitNode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGADInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGADInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * *   Your Alibaba Cloud account is used.
     *   * *   The balance in your Alibaba Cloud account is greater than or equal to USD 100.
     *   * *   A primary ApsaraDB RDS for MySQL instance is created, and the instance is not running as a node in a global active database cluster. You can call the [CreateDBInstance](~~26228~~) operation to create an instance.
     *   * > You must create a primary ApsaraDB RDS for MySQL instance in one of the following regions: China (Hangzhou), China (Shanghai), China (Qingdao), China (Beijing), China (Zhangjiakou), China (Shenzhen), and China (Chengdu).
     *   * For more information, see [Create and release an ApsaraDB RDS global active database cluster](~~328592~~).
     *   *
     * @param CreateGADInstanceRequest $request CreateGADInstanceRequest
     *
     * @return CreateGADInstanceResponse CreateGADInstanceResponse
     */
    public function createGADInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGADInstanceWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * An ApsaraDB RDS global active database cluster is created. You can call the [CreateGADInstance](~~336893~~) operation to create a global active database cluster.
     *   * For more information, see [Add unit nodes to or move unit nodes from an ApsaraDB RDS global active database cluster](~~331851~~).
     *   *
     * @param CreateGadInstanceMemberRequest $request CreateGadInstanceMemberRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGadInstanceMemberResponse CreateGadInstanceMemberResponse
     */
    public function createGadInstanceMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->centralDBInstanceId)) {
            $query['CentralDBInstanceId'] = $request->centralDBInstanceId;
        }
        if (!Utils::isUnset($request->centralRdsDtsAdminAccount)) {
            $query['CentralRdsDtsAdminAccount'] = $request->centralRdsDtsAdminAccount;
        }
        if (!Utils::isUnset($request->centralRdsDtsAdminPassword)) {
            $query['CentralRdsDtsAdminPassword'] = $request->centralRdsDtsAdminPassword;
        }
        if (!Utils::isUnset($request->centralRegionId)) {
            $query['CentralRegionId'] = $request->centralRegionId;
        }
        if (!Utils::isUnset($request->DBList)) {
            $query['DBList'] = $request->DBList;
        }
        if (!Utils::isUnset($request->gadInstanceId)) {
            $query['GadInstanceId'] = $request->gadInstanceId;
        }
        if (!Utils::isUnset($request->unitNode)) {
            $query['UnitNode'] = $request->unitNode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGadInstanceMember',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGadInstanceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * An ApsaraDB RDS global active database cluster is created. You can call the [CreateGADInstance](~~336893~~) operation to create a global active database cluster.
     *   * For more information, see [Add unit nodes to or move unit nodes from an ApsaraDB RDS global active database cluster](~~331851~~).
     *   *
     * @param CreateGadInstanceMemberRequest $request CreateGadInstanceMemberRequest
     *
     * @return CreateGadInstanceMemberResponse CreateGadInstanceMemberResponse
     */
    public function createGadInstanceMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGadInstanceMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateMigrateTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMigrateTaskResponse
     */
    public function createMigrateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->checkDBMode)) {
            $query['CheckDBMode'] = $request->checkDBMode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->isOnlineDB)) {
            $query['IsOnlineDB'] = $request->isOnlineDB;
        }
        if (!Utils::isUnset($request->migrateTaskId)) {
            $query['MigrateTaskId'] = $request->migrateTaskId;
        }
        if (!Utils::isUnset($request->OSSUrls)) {
            $query['OSSUrls'] = $request->OSSUrls;
        }
        if (!Utils::isUnset($request->ossObjectPositions)) {
            $query['OssObjectPositions'] = $request->ossObjectPositions;
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
            'action'      => 'CreateMigrateTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMigrateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMigrateTaskRequest $request
     *
     * @return CreateMigrateTaskResponse
     */
    public function createMigrateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrateTaskWithOptions($request, $runtime);
    }

    /**
     * This operation is used to migrate backup data to the cloud. Before you call this operation, make sure that you understand the descriptions in [Migrate the full backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2008 R2](~~95737~~), [Migrate the full backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2012, SQL Server 2014, SQL Server 2016, SQL Server 2017, or SQL Server 2019](~~95738~~), and [Migrate the incremental backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2012, SQL Server 2014, SQL Server 2016, SQL Server 2017, or SQL Server 2019](~~95736~~).
     *   *
     * @param CreateOnlineDatabaseTaskRequest $request CreateOnlineDatabaseTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOnlineDatabaseTaskResponse CreateOnlineDatabaseTaskResponse
     */
    public function createOnlineDatabaseTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkDBMode)) {
            $query['CheckDBMode'] = $request->checkDBMode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->migrateTaskId)) {
            $query['MigrateTaskId'] = $request->migrateTaskId;
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
            'action'      => 'CreateOnlineDatabaseTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOnlineDatabaseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to migrate backup data to the cloud. Before you call this operation, make sure that you understand the descriptions in [Migrate the full backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2008 R2](~~95737~~), [Migrate the full backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2012, SQL Server 2014, SQL Server 2016, SQL Server 2017, or SQL Server 2019](~~95738~~), and [Migrate the incremental backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2012, SQL Server 2014, SQL Server 2016, SQL Server 2017, or SQL Server 2019](~~95736~~).
     *   *
     * @param CreateOnlineDatabaseTaskRequest $request CreateOnlineDatabaseTaskRequest
     *
     * @return CreateOnlineDatabaseTaskResponse CreateOnlineDatabaseTaskResponse
     */
    public function createOnlineDatabaseTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOnlineDatabaseTaskWithOptions($request, $runtime);
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to an instance. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) and [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * > This operation is supported only when your instance runs MySQL or PostgreSQL.
     *   *
     * @param CreateParameterGroupRequest $request CreateParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateParameterGroupResponse CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
            'action'      => 'CreateParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to an instance. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) and [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * > This operation is supported only when your instance runs MySQL or PostgreSQL.
     *   *
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
     * @param CreatePostgresExtensionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePostgresExtensionsResponse
     */
    public function createPostgresExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNames)) {
            $query['DBNames'] = $request->DBNames;
        }
        if (!Utils::isUnset($request->extensions)) {
            $query['Extensions'] = $request->extensions;
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
        if (!Utils::isUnset($request->sourceDatabase)) {
            $query['SourceDatabase'] = $request->sourceDatabase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePostgresExtensions',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePostgresExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePostgresExtensionsRequest $request
     *
     * @return CreatePostgresExtensionsResponse
     */
    public function createPostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * **Before you call this operation, take note of the following limits:**
     *   * *   The primary instance cannot belong to a dedicated cluster and must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 8.0 on RDS High-availability Edition or RDS Enterprise Edition.
     *   *     *   MySQL 5.7 on RDS High-availability Edition or RDS Enterprise Edition.
     *   *     *   MySQL 5.6.
     *   *     *   SQL Server 2017 on RDS Cluster Edition.
     *   *     *   PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15 on RDS High-availability Edition. If the primary instance runs PostgreSQL 10, the instance must use local disks and must be a dedicated instance that provides at least 8 cores and 32 GB of memory.
     *   * *   If the primary instance runs MySQL, you can create up to 10 read-only instances.
     *   * *   If the primary instance runs SQL Server, you can create up to seven read-only instances.
     *   * *   If the primary instance runs PostgreSQL with local disks, you can create up to five read-only instances. If the primary instance runs PostgreSQL with cloud disks, you can create up to 32 read-only instances.
     *   *
     * @param CreateReadOnlyDBInstanceRequest $request CreateReadOnlyDBInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstanceResponse
     */
    public function createReadOnlyDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bpeEnabled)) {
            $query['BpeEnabled'] = $request->bpeEnabled;
        }
        if (!Utils::isUnset($request->burstingEnabled)) {
            $query['BurstingEnabled'] = $request->burstingEnabled;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->DBInstanceStorage)) {
            $query['DBInstanceStorage'] = $request->DBInstanceStorage;
        }
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->gdnInstanceName)) {
            $query['GdnInstanceName'] = $request->gdnInstanceName;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->instructionSetArch)) {
            $query['InstructionSetArch'] = $request->instructionSetArch;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
        if (!Utils::isUnset($request->targetDedicatedHostIdForMaster)) {
            $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        }
        if (!Utils::isUnset($request->tddlBizType)) {
            $query['TddlBizType'] = $request->tddlBizType;
        }
        if (!Utils::isUnset($request->tddlRegionConfig)) {
            $query['TddlRegionConfig'] = $request->tddlRegionConfig;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
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
            'action'      => 'CreateReadOnlyDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReadOnlyDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Before you call this operation, take note of the following limits:**
     *   * *   The primary instance cannot belong to a dedicated cluster and must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 8.0 on RDS High-availability Edition or RDS Enterprise Edition.
     *   *     *   MySQL 5.7 on RDS High-availability Edition or RDS Enterprise Edition.
     *   *     *   MySQL 5.6.
     *   *     *   SQL Server 2017 on RDS Cluster Edition.
     *   *     *   PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15 on RDS High-availability Edition. If the primary instance runs PostgreSQL 10, the instance must use local disks and must be a dedicated instance that provides at least 8 cores and 32 GB of memory.
     *   * *   If the primary instance runs MySQL, you can create up to 10 read-only instances.
     *   * *   If the primary instance runs SQL Server, you can create up to seven read-only instances.
     *   * *   If the primary instance runs PostgreSQL with local disks, you can create up to five read-only instances. If the primary instance runs PostgreSQL with cloud disks, you can create up to 32 read-only instances.
     *   *
     * @param CreateReadOnlyDBInstanceRequest $request CreateReadOnlyDBInstanceRequest
     *
     * @return CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstanceResponse
     */
    public function createReadOnlyDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReadOnlyDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbNames)) {
            $query['DbNames'] = $request->dbNames;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
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
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecret',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSecretRequest $request
     *
     * @return CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS supports the following service-linked roles:
     *   * *   The AliyunServiceRoleForRdsPgsqlOnEcs role is used for ApsaraDB RDS for PostgreSQL instances.
     *   * *   The AliyunServiceRoleForRDSProxyOnEcs role is used for the database proxy feature of ApsaraDB RDS instances.
     *   *
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->serviceLinkedRole)) {
            $query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS supports the following service-linked roles:
     *   * *   The AliyunServiceRoleForRdsPgsqlOnEcs role is used for ApsaraDB RDS for PostgreSQL instances.
     *   * *   The AliyunServiceRoleForRDSProxyOnEcs role is used for the database proxy feature of ApsaraDB RDS instances.
     *   *
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * You can create a temporary instance based on a backup file or a point in time within the past seven days.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   Your instance runs SQL Server 2008 R2.
     *   * *   Your instance is in the Running state.
     *   * *   Your instance does not have ongoing migration tasks.
     *   * *   The last creation of a backup file is completed.
     *   * > After a temporary instance is created, the temporary instance inherits the data in the backup file.
     *   *
     * @param CreateTempDBInstanceRequest $request CreateTempDBInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTempDBInstanceResponse CreateTempDBInstanceResponse
     */
    public function createTempDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTempDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTempDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create a temporary instance based on a backup file or a point in time within the past seven days.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   Your instance runs SQL Server 2008 R2.
     *   * *   Your instance is in the Running state.
     *   * *   Your instance does not have ongoing migration tasks.
     *   * *   The last creation of a backup file is completed.
     *   * > After a temporary instance is created, the temporary instance inherits the data in the backup file.
     *   *
     * @param CreateTempDBInstanceRequest $request CreateTempDBInstanceRequest
     *
     * @return CreateTempDBInstanceResponse CreateTempDBInstanceResponse
     */
    public function createTempDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTempDBInstanceWithOptions($request, $runtime);
    }

    /**
     * This operation is available only for ApsaraDB RDS for SQL Server instances.
     *   *
     * @param DeleteADSettingRequest $request DeleteADSettingRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteADSettingResponse DeleteADSettingResponse
     */
    public function deleteADSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DeleteADSetting',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteADSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for ApsaraDB RDS for SQL Server instances.
     *   *
     * @param DeleteADSettingRequest $request DeleteADSettingRequest
     *
     * @return DeleteADSettingResponse DeleteADSettingResponse
     */
    public function deleteADSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteADSettingWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the instance is in the Running state. If the instance is not in the Running state, the operation fails.
     *   * >
     *   * *   This operation is not supported for instances that run SQL Server 2017 EE, PostgreSQL with local SSDs.
     *   * *   If you want to delete an account from an instance that runs PostgreSQL with standard SSDs or enhanced SSDs (ESSDs) and the account has permissions on specific objects such as databases and tables, this operation reports the "`Some objects depend on account`" error. Before you can delete the account, you must remove the permissions from the account.
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
            'action'      => 'DeleteAccount',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the instance is in the Running state. If the instance is not in the Running state, the operation fails.
     *   * >
     *   * *   This operation is not supported for instances that run SQL Server 2017 EE, PostgreSQL with local SSDs.
     *   * *   If you want to delete an account from an instance that runs PostgreSQL with standard SSDs or enhanced SSDs (ESSDs) and the account has permissions on specific objects such as databases and tables, this operation reports the "`Some objects depend on account`" error. Before you can delete the account, you must remove the permissions from the account.
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
     * Backup sets of only the instance itself are deleted. Backup sets of the associated instances such as read-only, disaster recovery, and cloned instances are not deleted.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance runs PostgreSQL or MySQL on RDS High-availability.
     *   * *   If the log backup feature is disabled, instances cannot be restored by point in time. You can delete data backup sets that are retained for more than seven days.
     *   * *   If the log backup feature is enabled and the log backup retention period is shorter than the data backup retention period, you can delete the data backup files that are retained for a period longer than the log backup retention period.
     *   *
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
            'action'      => 'DeleteBackup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Backup sets of only the instance itself are deleted. Backup sets of the associated instances such as read-only, disaster recovery, and cloned instances are not deleted.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance runs PostgreSQL or MySQL on RDS High-availability.
     *   * *   If the log backup feature is disabled, instances cannot be restored by point in time. You can delete data backup sets that are retained for more than seven days.
     *   * *   If the log backup feature is enabled and the log backup retention period is shorter than the data backup retention period, you can delete the data backup files that are retained for a period longer than the log backup retention period.
     *   *
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
     * This operation is available for users whose accounts are added to the whitelist of an ApsaraDB RDS for SQL Server instance. If your account is not added to the whitelist of the instance, you can join the Database Backup (DBS) DingTalk group whose ID is 35585947 and contact the on-duty engineer to add your account to the whitelist.
     *   *
     * @param DeleteBackupFileRequest $request DeleteBackupFileRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupFileResponse DeleteBackupFileResponse
     */
    public function deleteBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupTime)) {
            $query['BackupTime'] = $request->backupTime;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
            'action'      => 'DeleteBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available for users whose accounts are added to the whitelist of an ApsaraDB RDS for SQL Server instance. If your account is not added to the whitelist of the instance, you can join the Database Backup (DBS) DingTalk group whose ID is 35585947 and contact the on-duty engineer to add your account to the whitelist.
     *   *
     * @param DeleteBackupFileRequest $request DeleteBackupFileRequest
     *
     * @return DeleteBackupFileResponse DeleteBackupFileResponse
     */
    public function deleteBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupFileWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Note Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Release an ApsaraDB RDS for MySQL instance](~~96057~~)
     *   * *   [Release an ApsaraDB RDS for PostgreSQL instance](~~96749~~)
     *   * *   [Release an ApsaraDB RDS for SQL Server instance](~~95662~~)
     *   * *   [Release an ApsaraDB RDS for MariaDB instance](~~97128~~).
     *   *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->releasedKeepPolicy)) {
            $query['ReleasedKeepPolicy'] = $request->releasedKeepPolicy;
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
            'action'      => 'DeleteDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Note Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Release an ApsaraDB RDS for MySQL instance](~~96057~~)
     *   * *   [Release an ApsaraDB RDS for PostgreSQL instance](~~96749~~)
     *   * *   [Release an ApsaraDB RDS for SQL Server instance](~~95662~~)
     *   * *   [Release an ApsaraDB RDS for MariaDB instance](~~97128~~).
     *   *
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
     * @param DeleteDBInstanceEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDBInstanceEndpointResponse
     */
    public function deleteDBInstanceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointId)) {
            $query['DBInstanceEndpointId'] = $request->DBInstanceEndpointId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstanceEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBInstanceEndpointRequest $request
     *
     * @return DeleteDBInstanceEndpointResponse
     */
    public function deleteDBInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   You can delete only the public endpoint of each endpoint type from the instance. If you want to delete an internal endpoint of any endpoint type, you can delete the type of endpoint.
     *   *
     * @param DeleteDBInstanceEndpointAddressRequest $request DeleteDBInstanceEndpointAddressRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceEndpointAddressResponse DeleteDBInstanceEndpointAddressResponse
     */
    public function deleteDBInstanceEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->connectionString)) {
            $body['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointId)) {
            $body['DBInstanceEndpointId'] = $request->DBInstanceEndpointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstanceEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   You can delete only the public endpoint of each endpoint type from the instance. If you want to delete an internal endpoint of any endpoint type, you can delete the type of endpoint.
     *   *
     * @param DeleteDBInstanceEndpointAddressRequest $request DeleteDBInstanceEndpointAddressRequest
     *
     * @return DeleteDBInstanceEndpointAddressResponse DeleteDBInstanceEndpointAddressResponse
     */
    public function deleteDBInstanceEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * ## Background information
     *   * This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition. These RDS instances are referred to as RDS clusters.
     *   *
     * @param DeleteDBNodesRequest $tmpReq  DeleteDBNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBNodesResponse DeleteDBNodesResponse
     */
    public function deleteDBNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDBNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNodeId)) {
            $request->DBNodeIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNodeId, 'DBNodeId', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNodeIdShrink)) {
            $query['DBNodeId'] = $request->DBNodeIdShrink;
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
            'action'      => 'DeleteDBNodes',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition. These RDS instances are referred to as RDS clusters.
     *   *
     * @param DeleteDBNodesRequest $request DeleteDBNodesRequest
     *
     * @return DeleteDBNodesResponse DeleteDBNodesResponse
     */
    public function deleteDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for MySQL instance](~~184921~~)
     *   * *   [Configure the dedicated proxy endpoint for an ApsaraDB RDS for PostgreSQL instance](~~418274~~).
     *   *
     * @param DeleteDBProxyEndpointAddressRequest $request DeleteDBProxyEndpointAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBProxyEndpointAddressResponse DeleteDBProxyEndpointAddressResponse
     */
    public function deleteDBProxyEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyConnectStringNetType)) {
            $query['DBProxyConnectStringNetType'] = $request->DBProxyConnectStringNetType;
        }
        if (!Utils::isUnset($request->DBProxyEndpointId)) {
            $query['DBProxyEndpointId'] = $request->DBProxyEndpointId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBProxyEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBProxyEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for MySQL instance](~~184921~~)
     *   * *   [Configure the dedicated proxy endpoint for an ApsaraDB RDS for PostgreSQL instance](~~418274~~).
     *   *
     * @param DeleteDBProxyEndpointAddressRequest $request DeleteDBProxyEndpointAddressRequest
     *
     * @return DeleteDBProxyEndpointAddressResponse DeleteDBProxyEndpointAddressResponse
     */
    public function deleteDBProxyEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance is a primary instance.
     *   * *   The instance runs MySQL, SQL Server, or MariaDB.
     *   * > This operation is not supported for instances that run PostgreSQL. You can execute the DROP DATABASE statement to drop a database from an ApsaraDB RDS for PostgreSQL instance.
     *   *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance is a primary instance.
     *   * *   The instance runs MySQL, SQL Server, or MariaDB.
     *   * > This operation is not supported for instances that run PostgreSQL. You can execute the DROP DATABASE statement to drop a database from an ApsaraDB RDS for PostgreSQL instance.
     *   *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * ## Precautions
     *   * *   A global active database cluster cannot be restored after it is deleted. Proceed with caution when you delete a global active database cluster.
     *   * *   If you delete a global active database cluster, the system removes all nodes and Data Transmission Service (DTS) synchronization tasks from the cluster. However, the system does not release the ApsaraDB RDS for MySQL instances that run as nodes in the cluster. If you no longer need the ApsaraDB RDS for MySQL instances, you can call the [DeleteDBInstance](~~26229~~) to delete the instances one after another.
     *   *
     * @param DeleteGadInstanceRequest $request DeleteGadInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGadInstanceResponse DeleteGadInstanceResponse
     */
    public function deleteGadInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gadInstanceName)) {
            $query['GadInstanceName'] = $request->gadInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGadInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGadInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Precautions
     *   * *   A global active database cluster cannot be restored after it is deleted. Proceed with caution when you delete a global active database cluster.
     *   * *   If you delete a global active database cluster, the system removes all nodes and Data Transmission Service (DTS) synchronization tasks from the cluster. However, the system does not release the ApsaraDB RDS for MySQL instances that run as nodes in the cluster. If you no longer need the ApsaraDB RDS for MySQL instances, you can call the [DeleteDBInstance](~~26229~~) to delete the instances one after another.
     *   *
     * @param DeleteGadInstanceRequest $request DeleteGadInstanceRequest
     *
     * @return DeleteGadInstanceResponse DeleteGadInstanceResponse
     */
    public function deleteGadInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGadInstanceWithOptions($request, $runtime);
    }

    /**
     * You can apply a parameter template to an instance to manage a number of parameters at a time. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * >
     *   * *   If you delete a parameter template, the instances to which the parameter template is applied are not affected.
     *   * *   Before you can delete a parameter template in ApsaraDB RDS for PostgreSQL, you must apply another parameter template to the ApsaraDB RDS for PostgreSQL instances to which the parameter template is applied. You can call the [DescribeParameterGroup](~~144842~~) operation to query the instances to which a parameter template is applied.
     *   *
     * @param DeleteParameterGroupRequest $request DeleteParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteParameterGroupResponse DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
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
            'action'      => 'DeleteParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can apply a parameter template to an instance to manage a number of parameters at a time. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * >
     *   * *   If you delete a parameter template, the instances to which the parameter template is applied are not affected.
     *   * *   Before you can delete a parameter template in ApsaraDB RDS for PostgreSQL, you must apply another parameter template to the ApsaraDB RDS for PostgreSQL instances to which the parameter template is applied. You can call the [DescribeParameterGroup](~~144842~~) operation to query the instances to which a parameter template is applied.
     *   *
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
     * @param DeletePostgresExtensionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeletePostgresExtensionsResponse
     */
    public function deletePostgresExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNames)) {
            $query['DBNames'] = $request->DBNames;
        }
        if (!Utils::isUnset($request->extensions)) {
            $query['Extensions'] = $request->extensions;
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
            'action'      => 'DeletePostgresExtensions',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePostgresExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePostgresExtensionsRequest $request
     *
     * @return DeletePostgresExtensionsResponse
     */
    public function deletePostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
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
        if (!Utils::isUnset($request->secretArn)) {
            $query['SecretArn'] = $request->secretArn;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecret',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSecretRequest $request
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretWithOptions($request, $runtime);
    }

    /**
     * *   This operation is available only for ApsaraDB RDS for PostgreSQL instances.
     *   * *   A replication slot can be deleted only when SlotStatus is **INACTIVE**. You can call the DescribeSlots operation to query the status of a replication slot.
     *   *
     * @param DeleteSlotRequest $request DeleteSlotRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSlotResponse DeleteSlotResponse
     */
    public function deleteSlotWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->slotName)) {
            $query['SlotName'] = $request->slotName;
        }
        if (!Utils::isUnset($request->slotStatus)) {
            $query['SlotStatus'] = $request->slotStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSlot',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is available only for ApsaraDB RDS for PostgreSQL instances.
     *   * *   A replication slot can be deleted only when SlotStatus is **INACTIVE**. You can call the DescribeSlots operation to query the status of a replication slot.
     *   *
     * @param DeleteSlotRequest $request DeleteSlotRequest
     *
     * @return DeleteSlotResponse DeleteSlotResponse
     */
    public function deleteSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSlotWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   This operation deletes full backup files only from the ApsaraDB RDS console. This operation does not affect the full backup files that are stored as objects in Object Storage Service (OSS) buckets. After you call this operation to delete a full backup file, you can call the [ImportUserBackupFile](~~260266~~) operation to reimport the full backup file.
     *   *
     * @param DeleteUserBackupFileRequest $request DeleteUserBackupFileRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserBackupFileResponse DeleteUserBackupFileResponse
     */
    public function deleteUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
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
            'action'      => 'DeleteUserBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   This operation deletes full backup files only from the ApsaraDB RDS console. This operation does not affect the full backup files that are stored as objects in Object Storage Service (OSS) buckets. After you call this operation to delete a full backup file, you can call the [ImportUserBackupFile](~~260266~~) operation to reimport the full backup file.
     *   *
     * @param DeleteUserBackupFileRequest $request DeleteUserBackupFileRequest
     *
     * @return DeleteUserBackupFileResponse DeleteUserBackupFileResponse
     */
    public function deleteUserBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserBackupFileWithOptions($request, $runtime);
    }

    /**
     * This operation is suitable only for the instances that run MySQL or SQL Server. For more information about how to run a migration task, see [ImportDatabaseBetweenInstances](~~26301~~).
     *   *
     * @param DescibeImportsFromDatabaseRequest $request DescibeImportsFromDatabaseRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescibeImportsFromDatabaseResponse DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->importId)) {
            $query['ImportId'] = $request->importId;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescibeImportsFromDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescibeImportsFromDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is suitable only for the instances that run MySQL or SQL Server. For more information about how to run a migration task, see [ImportDatabaseBetweenInstances](~~26301~~).
     *   *
     * @param DescibeImportsFromDatabaseRequest $request DescibeImportsFromDatabaseRequest
     *
     * @return DescibeImportsFromDatabaseResponse DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descibeImportsFromDatabaseWithOptions($request, $runtime);
    }

    /**
     * This operation is available only for ApsaraDB RDS for SQL Server instances.
     *   *
     * @param DescribeADInfoRequest $request DescribeADInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeADInfoResponse DescribeADInfoResponse
     */
    public function describeADInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeADInfo',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeADInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for ApsaraDB RDS for SQL Server instances.
     *   *
     * @param DescribeADInfoRequest $request DescribeADInfoRequest
     *
     * @return DescribeADInfoResponse DescribeADInfoResponse
     */
    public function describeADInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeADInfoWithOptions($request, $runtime);
    }

    /**
     * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeAccounts',
            'version'     => '2014-08-15',
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
     * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
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
     * The event history feature enables you to view the events that occurred in a region over a specific time range. The events include instance creation and parameter reconfiguration. For more information, see [Event history](~~129759~~).
     *   *
     * @param DescribeActionEventPolicyRequest $request DescribeActionEventPolicyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActionEventPolicyResponse DescribeActionEventPolicyResponse
     */
    public function describeActionEventPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeActionEventPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActionEventPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The event history feature enables you to view the events that occurred in a region over a specific time range. The events include instance creation and parameter reconfiguration. For more information, see [Event history](~~129759~~).
     *   *
     * @param DescribeActionEventPolicyRequest $request DescribeActionEventPolicyRequest
     *
     * @return DescribeActionEventPolicyResponse DescribeActionEventPolicyResponse
     */
    public function describeActionEventPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActionEventPolicyWithOptions($request, $runtime);
    }

    /**
     * After you call this operation and obtain the information about a specific O\\&M task, you can call the [ModifyActiveOperationTask](~~611454~~) operation to modify the scheduled switching time of the O\\&M task. You can also view the task and modify the scheduled switching time on the Task Center page of the ApsaraDB RDS console.
     *   *
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
            'action'      => 'DescribeActiveOperationTasks',
            'version'     => '2014-08-15',
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
     * After you call this operation and obtain the information about a specific O\\&M task, you can call the [ModifyActiveOperationTask](~~611454~~) operation to modify the scheduled switching time of the O\\&M task. You can also view the task and modify the scheduled switching time on the Task Center page of the ApsaraDB RDS console.
     *   *
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
     * @param DescribeAllWhitelistTemplateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAllWhitelistTemplateResponse
     */
    public function describeAllWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fuzzySearch)) {
            $query['FuzzySearch'] = $request->fuzzySearch;
        }
        if (!Utils::isUnset($request->maxRecordsPerPage)) {
            $query['MaxRecordsPerPage'] = $request->maxRecordsPerPage;
        }
        if (!Utils::isUnset($request->pageNumbers)) {
            $query['PageNumbers'] = $request->pageNumbers;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllWhitelistTemplate',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllWhitelistTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllWhitelistTemplateRequest $request
     *
     * @return DescribeAllWhitelistTemplateResponse
     */
    public function describeAllWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAnalyticdbByPrimaryDBInstanceRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAnalyticdbByPrimaryDBInstanceResponse
     */
    public function describeAnalyticdbByPrimaryDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeAnalyticdbByPrimaryDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnalyticdbByPrimaryDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAnalyticdbByPrimaryDBInstanceRequest $request
     *
     * @return DescribeAnalyticdbByPrimaryDBInstanceResponse
     */
    public function describeAnalyticdbByPrimaryDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalyticdbByPrimaryDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableClassesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAvailableClassesResponse
     */
    public function describeAvailableClassesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'DescribeAvailableClasses',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableClassesRequest $request
     *
     * @return DescribeAvailableClassesResponse
     */
    public function describeAvailableClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableClassesWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param DescribeAvailableCrossRegionRequest $request DescribeAvailableCrossRegionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableCrossRegionResponse DescribeAvailableCrossRegionResponse
     */
    public function describeAvailableCrossRegionWithOptions($request, $runtime)
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
            'action'      => 'DescribeAvailableCrossRegion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableCrossRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param DescribeAvailableCrossRegionRequest $request DescribeAvailableCrossRegionRequest
     *
     * @return DescribeAvailableCrossRegionResponse DescribeAvailableCrossRegionResponse
     */
    public function describeAvailableCrossRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableCrossRegionWithOptions($request, $runtime);
    }

    /**
     * ### Prerequisites
     *   * The instance runs PostgreSQL.
     *   * For more information, see [View the Enhanced Monitoring metrics of an ApsaraDB RDS for PostgreSQL instance](~~299200~~).
     *   *
     * @param DescribeAvailableMetricsRequest $request DescribeAvailableMetricsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableMetricsResponse DescribeAvailableMetricsResponse
     */
    public function describeAvailableMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableMetrics',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * The instance runs PostgreSQL.
     *   * For more information, see [View the Enhanced Monitoring metrics of an ApsaraDB RDS for PostgreSQL instance](~~299200~~).
     *   *
     * @param DescribeAvailableMetricsRequest $request DescribeAvailableMetricsRequest
     *
     * @return DescribeAvailableMetricsResponse DescribeAvailableMetricsResponse
     */
    public function describeAvailableMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableMetricsWithOptions($request, $runtime);
    }

    /**
     * To query the time range to which you can restore data by using a common backup file, see [DescribeBackups](~~26273~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param DescribeAvailableRecoveryTimeRequest $request DescribeAvailableRecoveryTimeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTimeResponse
     */
    public function describeAvailableRecoveryTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->crossBackupId)) {
            $query['CrossBackupId'] = $request->crossBackupId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeAvailableRecoveryTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableRecoveryTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To query the time range to which you can restore data by using a common backup file, see [DescribeBackups](~~26273~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param DescribeAvailableRecoveryTimeRequest $request DescribeAvailableRecoveryTimeRequest
     *
     * @return DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTimeResponse
     */
    public function describeAvailableRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableZonesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dispenseMode)) {
            $query['DispenseMode'] = $request->dispenseMode;
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
            'action'      => 'DescribeAvailableZones',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableZonesRequest $request
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * > This operation is phased out.
     *   *
     * @param DescribeBackupDatabaseRequest $request DescribeBackupDatabaseRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupDatabaseResponse DescribeBackupDatabaseResponse
     */
    public function describeBackupDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeBackupDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is phased out.
     *   *
     * @param DescribeBackupDatabaseRequest $request DescribeBackupDatabaseRequest
     *
     * @return DescribeBackupDatabaseResponse DescribeBackupDatabaseResponse
     */
    public function describeBackupDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDatabaseWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->backupPolicyMode)) {
            $query['BackupPolicyMode'] = $request->backupPolicyMode;
        }
        if (!Utils::isUnset($request->compressType)) {
            $query['CompressType'] = $request->compressType;
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
        if (!Utils::isUnset($request->releasedKeepPolicy)) {
            $query['ReleasedKeepPolicy'] = $request->releasedKeepPolicy;
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
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2014-08-15',
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
        if (!Utils::isUnset($request->backupJobStatus)) {
            $query['BackupJobStatus'] = $request->backupJobStatus;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
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
            'action'      => 'DescribeBackupTasks',
            'version'     => '2014-08-15',
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
     * > A backup set can be used to restore data only when **BackupStatus** of the backup set is **Success**.
     *   *
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
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->backupStatus)) {
            $query['BackupStatus'] = $request->backupStatus;
        }
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeBackups',
            'version'     => '2014-08-15',
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
     * > A backup set can be used to restore data only when **BackupStatus** of the backup set is **Success**.
     *   *
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
     * *   If the return value of the **DownloadLink** parameter is NULL, ApsaraDB RDS does not provide a URL for you to download binary log files.
     *   * *   If the return value of the **DownloadLink** parameter is not NULL, ApsaraDB RDS provides a URL for you to download binary log files. The expiration time of the URL is specified by the **LinkExpiredTime** parameter. You must download the binary log files before the expiration time.
     *   * *   Each binary log file that is returned by this operation contains the log entries that are generated over the time range specified by the StartTime and EndTime parameters.
     *   * > This operation is not supported for instances that run SQL Server.
     *   *
     * @param DescribeBinlogFilesRequest $request DescribeBinlogFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBinlogFilesResponse DescribeBinlogFilesResponse
     */
    public function describeBinlogFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBinlogFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBinlogFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If the return value of the **DownloadLink** parameter is NULL, ApsaraDB RDS does not provide a URL for you to download binary log files.
     *   * *   If the return value of the **DownloadLink** parameter is not NULL, ApsaraDB RDS provides a URL for you to download binary log files. The expiration time of the URL is specified by the **LinkExpiredTime** parameter. You must download the binary log files before the expiration time.
     *   * *   Each binary log file that is returned by this operation contains the log entries that are generated over the time range specified by the StartTime and EndTime parameters.
     *   * > This operation is not supported for instances that run SQL Server.
     *   *
     * @param DescribeBinlogFilesRequest $request DescribeBinlogFilesRequest
     *
     * @return DescribeBinlogFilesResponse DescribeBinlogFilesResponse
     */
    public function describeBinlogFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBinlogFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCharacterSetNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
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
            'action'      => 'DescribeCharacterSetName',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCharacterSetNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCharacterSetNameRequest $request
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetNameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClassDetailsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClassDetailsResponse
     */
    public function describeClassDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classCode)) {
            $query['ClassCode'] = $request->classCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
            'action'      => 'DescribeClassDetails',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClassDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClassDetailsRequest $request
     *
     * @return DescribeClassDetailsResponse
     */
    public function describeClassDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClassDetailsWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * Before you call the DescribeCloudMigrationPrecheckResult operation, make sure that the CreateCloudMigrationPrecheckTask operation is called to create a cloud migration assessment task for the ApsaraDB RDS for PostgreSQL instance.
     *   *
     * @param DescribeCloudMigrationPrecheckResultRequest $request DescribeCloudMigrationPrecheckResultRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudMigrationPrecheckResultResponse DescribeCloudMigrationPrecheckResultResponse
     */
    public function describeCloudMigrationPrecheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
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
        if (!Utils::isUnset($request->sourceIpAddress)) {
            $query['SourceIpAddress'] = $request->sourceIpAddress;
        }
        if (!Utils::isUnset($request->sourcePort)) {
            $query['SourcePort'] = $request->sourcePort;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudMigrationPrecheckResult',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudMigrationPrecheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * Before you call the DescribeCloudMigrationPrecheckResult operation, make sure that the CreateCloudMigrationPrecheckTask operation is called to create a cloud migration assessment task for the ApsaraDB RDS for PostgreSQL instance.
     *   *
     * @param DescribeCloudMigrationPrecheckResultRequest $request DescribeCloudMigrationPrecheckResultRequest
     *
     * @return DescribeCloudMigrationPrecheckResultResponse DescribeCloudMigrationPrecheckResultResponse
     */
    public function describeCloudMigrationPrecheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudMigrationPrecheckResultWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * Before you call the DescribeCloudMigrationResult operation, make sure that cloud migration tasks are created by calling the [CreateCloudMigrationTask](~~411690~~) operation.
     *   *
     * @param DescribeCloudMigrationResultRequest $request DescribeCloudMigrationResultRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudMigrationResultResponse DescribeCloudMigrationResultResponse
     */
    public function describeCloudMigrationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
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
        if (!Utils::isUnset($request->sourceIpAddress)) {
            $query['SourceIpAddress'] = $request->sourceIpAddress;
        }
        if (!Utils::isUnset($request->sourcePort)) {
            $query['SourcePort'] = $request->sourcePort;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudMigrationResult',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudMigrationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * Before you call the DescribeCloudMigrationResult operation, make sure that cloud migration tasks are created by calling the [CreateCloudMigrationTask](~~411690~~) operation.
     *   *
     * @param DescribeCloudMigrationResultRequest $request DescribeCloudMigrationResultRequest
     *
     * @return DescribeCloudMigrationResultResponse DescribeCloudMigrationResultResponse
     */
    public function describeCloudMigrationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudMigrationResultWithOptions($request, $runtime);
    }

    /**
     * >  This operation is supported only for instances that run SQL Server 2012 or later.
     *   *
     * @param DescribeCollationTimeZonesRequest $request DescribeCollationTimeZonesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCollationTimeZonesResponse DescribeCollationTimeZonesResponse
     */
    public function describeCollationTimeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeCollationTimeZones',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCollationTimeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  This operation is supported only for instances that run SQL Server 2012 or later.
     *   *
     * @param DescribeCollationTimeZonesRequest $request DescribeCollationTimeZonesRequest
     *
     * @return DescribeCollationTimeZonesResponse DescribeCollationTimeZonesResponse
     */
    public function describeCollationTimeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCollationTimeZonesWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS for MySQL instances support cross-region backup and restoration. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~) and [Restore the data of an ApsaraDB RDS for MySQL instance across regions](~~120875~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param DescribeCrossBackupMetaListRequest $request DescribeCrossBackupMetaListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCrossBackupMetaListResponse DescribeCrossBackupMetaListResponse
     */
    public function describeCrossBackupMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->getDbName)) {
            $query['GetDbName'] = $request->getDbName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pattern)) {
            $query['Pattern'] = $request->pattern;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossBackupMetaList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossBackupMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS for MySQL instances support cross-region backup and restoration. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~) and [Restore the data of an ApsaraDB RDS for MySQL instance across regions](~~120875~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param DescribeCrossBackupMetaListRequest $request DescribeCrossBackupMetaListRequest
     *
     * @return DescribeCrossBackupMetaListResponse DescribeCrossBackupMetaListResponse
     */
    public function describeCrossBackupMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossBackupMetaListWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param DescribeCrossRegionBackupDBInstanceRequest $request DescribeCrossRegionBackupDBInstanceRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCrossRegionBackupDBInstanceResponse DescribeCrossRegionBackupDBInstanceResponse
     */
    public function describeCrossRegionBackupDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeCrossRegionBackupDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossRegionBackupDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param DescribeCrossRegionBackupDBInstanceRequest $request DescribeCrossRegionBackupDBInstanceRequest
     *
     * @return DescribeCrossRegionBackupDBInstanceResponse DescribeCrossRegionBackupDBInstanceResponse
     */
    public function describeCrossRegionBackupDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionBackupDBInstanceWithOptions($request, $runtime);
    }

    /**
     * For more information about how to query the cross-region log backup files of an RDS instance, see [DescribeCrossRegionLogBackupFiles](~~121734~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param DescribeCrossRegionBackupsRequest $request DescribeCrossRegionBackupsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCrossRegionBackupsResponse DescribeCrossRegionBackupsResponse
     */
    public function describeCrossRegionBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->crossBackupId)) {
            $query['CrossBackupId'] = $request->crossBackupId;
        }
        if (!Utils::isUnset($request->crossBackupRegion)) {
            $query['CrossBackupRegion'] = $request->crossBackupRegion;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'DescribeCrossRegionBackups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossRegionBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to query the cross-region log backup files of an RDS instance, see [DescribeCrossRegionLogBackupFiles](~~121734~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Back up an ApsaraDB RDS for PostgreSQL instance across regions](~~206671~~).
     *   *
     * @param DescribeCrossRegionBackupsRequest $request DescribeCrossRegionBackupsRequest
     *
     * @return DescribeCrossRegionBackupsResponse DescribeCrossRegionBackupsResponse
     */
    public function describeCrossRegionBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionBackupsWithOptions($request, $runtime);
    }

    /**
     * For more information about how to query the cross-region data backup files of an RDS instance, see [DescribeCrossRegionBackups](~~121733~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engine versions and RDS editions:
     *   * *   MySQL 8.0 on RDS High-availability Edition (with local SSDs)
     *   * *   MySQL 5.7 on RDS High-availability Edition (with local SSDs)
     *   * *   MySQL 5.6.
     *   *
     * @param DescribeCrossRegionLogBackupFilesRequest $request DescribeCrossRegionLogBackupFilesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCrossRegionLogBackupFilesResponse DescribeCrossRegionLogBackupFilesResponse
     */
    public function describeCrossRegionLogBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->crossBackupRegion)) {
            $query['CrossBackupRegion'] = $request->crossBackupRegion;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossRegionLogBackupFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossRegionLogBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about how to query the cross-region data backup files of an RDS instance, see [DescribeCrossRegionBackups](~~121733~~).
     *   * Before you call this operation, make sure that the instance runs one of the following database engine versions and RDS editions:
     *   * *   MySQL 8.0 on RDS High-availability Edition (with local SSDs)
     *   * *   MySQL 5.7 on RDS High-availability Edition (with local SSDs)
     *   * *   MySQL 5.6.
     *   *
     * @param DescribeCrossRegionLogBackupFilesRequest $request DescribeCrossRegionLogBackupFilesRequest
     *
     * @return DescribeCrossRegionLogBackupFilesResponse DescribeCrossRegionLogBackupFilesResponse
     */
    public function describeCrossRegionLogBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionLogBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBInstanceByTagsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstanceByTagsResponse
     */
    public function describeDBInstanceByTagsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceByTags',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceByTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceByTagsRequest $request
     *
     * @return DescribeDBInstanceByTagsResponse
     */
    public function describeDBInstanceByTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceByTagsWithOptions($request, $runtime);
    }

    /**
     * This operation is phased out.
     *   *
     * @param DescribeDBInstanceDetailRequest $request DescribeDBInstanceDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceDetailResponse DescribeDBInstanceDetailResponse
     */
    public function describeDBInstanceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeDBInstanceDetail',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is phased out.
     *   *
     * @param DescribeDBInstanceDetailRequest $request DescribeDBInstanceDetailRequest
     *
     * @return DescribeDBInstanceDetailResponse DescribeDBInstanceDetailResponse
     */
    public function describeDBInstanceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceEncryptionKeyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDBInstanceEncryptionKeyResponse
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
        if (!Utils::isUnset($request->targetRegionId)) {
            $query['TargetRegionId'] = $request->targetRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceEncryptionKey',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceEncryptionKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Background information
     *   * *   An ApsaraDB RDS for MySQL instance that runs RDS Cluster Edition is created. The instance is referred to as a cluster.
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   *
     * @param DescribeDBInstanceEndpointsRequest $request DescribeDBInstanceEndpointsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceEndpointsResponse DescribeDBInstanceEndpointsResponse
     */
    public function describeDBInstanceEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointId)) {
            $query['DBInstanceEndpointId'] = $request->DBInstanceEndpointId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceEndpoints',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * *   An ApsaraDB RDS for MySQL instance that runs RDS Cluster Edition is created. The instance is referred to as a cluster.
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   *
     * @param DescribeDBInstanceEndpointsRequest $request DescribeDBInstanceEndpointsRequest
     *
     * @return DescribeDBInstanceEndpointsResponse DescribeDBInstanceEndpointsResponse
     */
    public function describeDBInstanceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceHAConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBInstanceHAConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceHAConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceHAConfigRequest $request
     *
     * @return DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceHAConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceIPArrayListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->whitelistNetworkType)) {
            $query['WhitelistNetworkType'] = $request->whitelistNetworkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceIPArrayList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceIPArrayListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceIPArrayListRequest $request
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIPArrayListWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS instances are deployed based on ECS instances. This operation is used to query the hostname of the ECS instance where an ApsaraDB RDS instance resides. The hostname is required when you [configure a distributed transaction whitelist](~~124321~~).
     *   * This operation is applicable to instances that run one of the following SQL Server versions on RDS High-availability Edition: SQL Server 2012 SE, SQL Server 2012 EE, SQL Server 2014 SE, SQL Server 2016 SE, SQL Server 2016 EE, and SQL Server 2017 SE.
     *   *
     * @param DescribeDBInstanceIpHostnameRequest $request DescribeDBInstanceIpHostnameRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceIpHostnameResponse DescribeDBInstanceIpHostnameResponse
     */
    public function describeDBInstanceIpHostnameWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBInstanceIpHostname',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceIpHostnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS instances are deployed based on ECS instances. This operation is used to query the hostname of the ECS instance where an ApsaraDB RDS instance resides. The hostname is required when you [configure a distributed transaction whitelist](~~124321~~).
     *   * This operation is applicable to instances that run one of the following SQL Server versions on RDS High-availability Edition: SQL Server 2012 SE, SQL Server 2012 EE, SQL Server 2014 SE, SQL Server 2016 SE, SQL Server 2016 EE, and SQL Server 2017 SE.
     *   *
     * @param DescribeDBInstanceIpHostnameRequest $request DescribeDBInstanceIpHostnameRequest
     *
     * @return DescribeDBInstanceIpHostnameResponse DescribeDBInstanceIpHostnameResponse
     */
    public function describeDBInstanceIpHostname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIpHostnameWithOptions($request, $runtime);
    }

    /**
     * ### Prerequisites
     *   * The instance runs PostgreSQL.
     *   * For more information, see [View the Enhanced Monitoring metrics of an ApsaraDB RDS for PostgreSQL instance](~~299200~~).
     *   *
     * @param DescribeDBInstanceMetricsRequest $request DescribeDBInstanceMetricsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceMetricsResponse DescribeDBInstanceMetricsResponse
     */
    public function describeDBInstanceMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceMetrics',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * The instance runs PostgreSQL.
     *   * For more information, see [View the Enhanced Monitoring metrics of an ApsaraDB RDS for PostgreSQL instance](~~299200~~).
     *   *
     * @param DescribeDBInstanceMetricsRequest $request DescribeDBInstanceMetricsRequest
     *
     * @return DescribeDBInstanceMetricsResponse DescribeDBInstanceMetricsResponse
     */
    public function describeDBInstanceMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceMetricsWithOptions($request, $runtime);
    }

    /**
     * >  This operation is not supported for RDS instances that run PostgreSQL. The monitoring frequency of such an instance varies based on the query time range. For more information, see [Query performance metrics](~~26280~~).
     *   *
     * @param DescribeDBInstanceMonitorRequest $request DescribeDBInstanceMonitorRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceMonitorResponse DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitorWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBInstanceMonitor',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  This operation is not supported for RDS instances that run PostgreSQL. The monitoring frequency of such an instance varies based on the query time range. For more information, see [Query performance metrics](~~26280~~).
     *   *
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
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceNetRWSplitType)) {
            $query['DBInstanceNetRWSplitType'] = $request->DBInstanceNetRWSplitType;
        }
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
        }
        if (!Utils::isUnset($request->generalGroupName)) {
            $query['GeneralGroupName'] = $request->generalGroupName;
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
            'action'      => 'DescribeDBInstanceNetInfo',
            'version'     => '2014-08-15',
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
     * @param DescribeDBInstanceNetInfoForChannelRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDBInstanceNetInfoForChannelResponse
     */
    public function describeDBInstanceNetInfoForChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceNetRWSplitType)) {
            $query['DBInstanceNetRWSplitType'] = $request->DBInstanceNetRWSplitType;
        }
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
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
            'action'      => 'DescribeDBInstanceNetInfoForChannel',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceNetInfoForChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceNetInfoForChannelRequest $request
     *
     * @return DescribeDBInstanceNetInfoForChannelResponse
     */
    public function describeDBInstanceNetInfoForChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoForChannelWithOptions($request, $runtime);
    }

    /**
     * You can query the performance of an instance over a specific time range based on its performance metrics. Performance metrics are generated by using one of the following methods based on the database engine and version, RDS edition, [monitoring frequency](~~26200~~) ([ModifyDBInstanceMonitor](~~26282~~)), and query time range:
     *   * *   For instances that do not run MySQL on RDS High-availability Edition with standard SSDs or enhanced SSDs (ESSDs) and those that do not run MariaDB:
     *   *     *   5-second monitoring frequency
     *   *         *   If the query time range is greater than seven days, performance metrics are collected at 1-day intervals.
     *   *         *   If the query time range is greater than one day but less than or equal to seven days, performance metrics are collected at 1-hour intervals.
     *   *         *   If the query time range is greater than or equal to an hour but less than or equal to one day, performance metrics are collected at 1-minute intervals.
     *   *         *   If the query time range is less than an hour, performance metrics are collected at 5-second intervals.
     *   *     *   60-second monitoring frequency
     *   *         *   If the query time range is greater than 30 days, performance metrics are collected at 1-day intervals.
     *   *         *   If the query time range is greater than seven days but less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *         *   If the query time range is less than or equal to seven days, performance metrics are collected at 1-minute intervals.
     *   *     *   300-second monitoring frequency
     *   *         *   If the query time range is greater than 30 days, performance metrics are collected at 1-day intervals.
     *   *         *   If the query time range is greater than seven days but less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *         *   If the query time range is less than or equal to seven days, performance metrics are collected at 5-minute intervals.
     *   * *   For instances that are running MySQL on RDS High-availability Edition with standard SSDs or ESSDs and those that are running MariaDB:
     *   *     *   If the query time range is greater than 30 days, performance metrics are collected at 1-day intervals.
     *   *     *   If the query time range is greater than seven days but less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *     *   If the query time range is less than or equal to seven days, performance metrics are collected at 1-minute intervals.
     *   * *   For instances that run PostgreSQL with local SSDs, standard SSDs, or ESSDs:
     *   *     *   If the query time range is less than or equal to an hour, performance metrics are collected at 5-second intervals.
     *   *     *   If the query time range is less than or equal to 2 hours, performance metrics are collected at 10-second intervals.
     *   *     *   If the query time range is less than or equal to 6 hours, performance metrics are collected at 30-second intervals.
     *   *     *   If the query time range is less than or equal to 12 hours, performance metrics are collected at 1-minute intervals.
     *   *     *   If the query time range is less than or equal to one day, performance metrics are collected at 2-minute intervals.
     *   *     *   If the query time range is less than or equal to five days, performance metrics are collected at 10-minute intervals.
     *   *     *   If the query time range is less than or equal to 15 days, performance metrics are collected at 30-minute intervals.
     *   *     *   If the query time range is less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *
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
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
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
            'action'      => 'DescribeDBInstancePerformance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query the performance of an instance over a specific time range based on its performance metrics. Performance metrics are generated by using one of the following methods based on the database engine and version, RDS edition, [monitoring frequency](~~26200~~) ([ModifyDBInstanceMonitor](~~26282~~)), and query time range:
     *   * *   For instances that do not run MySQL on RDS High-availability Edition with standard SSDs or enhanced SSDs (ESSDs) and those that do not run MariaDB:
     *   *     *   5-second monitoring frequency
     *   *         *   If the query time range is greater than seven days, performance metrics are collected at 1-day intervals.
     *   *         *   If the query time range is greater than one day but less than or equal to seven days, performance metrics are collected at 1-hour intervals.
     *   *         *   If the query time range is greater than or equal to an hour but less than or equal to one day, performance metrics are collected at 1-minute intervals.
     *   *         *   If the query time range is less than an hour, performance metrics are collected at 5-second intervals.
     *   *     *   60-second monitoring frequency
     *   *         *   If the query time range is greater than 30 days, performance metrics are collected at 1-day intervals.
     *   *         *   If the query time range is greater than seven days but less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *         *   If the query time range is less than or equal to seven days, performance metrics are collected at 1-minute intervals.
     *   *     *   300-second monitoring frequency
     *   *         *   If the query time range is greater than 30 days, performance metrics are collected at 1-day intervals.
     *   *         *   If the query time range is greater than seven days but less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *         *   If the query time range is less than or equal to seven days, performance metrics are collected at 5-minute intervals.
     *   * *   For instances that are running MySQL on RDS High-availability Edition with standard SSDs or ESSDs and those that are running MariaDB:
     *   *     *   If the query time range is greater than 30 days, performance metrics are collected at 1-day intervals.
     *   *     *   If the query time range is greater than seven days but less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *     *   If the query time range is less than or equal to seven days, performance metrics are collected at 1-minute intervals.
     *   * *   For instances that run PostgreSQL with local SSDs, standard SSDs, or ESSDs:
     *   *     *   If the query time range is less than or equal to an hour, performance metrics are collected at 5-second intervals.
     *   *     *   If the query time range is less than or equal to 2 hours, performance metrics are collected at 10-second intervals.
     *   *     *   If the query time range is less than or equal to 6 hours, performance metrics are collected at 30-second intervals.
     *   *     *   If the query time range is less than or equal to 12 hours, performance metrics are collected at 1-minute intervals.
     *   *     *   If the query time range is less than or equal to one day, performance metrics are collected at 2-minute intervals.
     *   *     *   If the query time range is less than or equal to five days, performance metrics are collected at 10-minute intervals.
     *   *     *   If the query time range is less than or equal to 15 days, performance metrics are collected at 30-minute intervals.
     *   *     *   If the query time range is less than or equal to 30 days, performance metrics are collected at 1-hour intervals.
     *   *
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeDBInstancePromoteActivityRequest $request DescribeDBInstancePromoteActivityRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancePromoteActivityResponse DescribeDBInstancePromoteActivityResponse
     */
    public function describeDBInstancePromoteActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->dbInstanceName)) {
            $query['DbInstanceName'] = $request->dbInstanceName;
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
            'action'      => 'DescribeDBInstancePromoteActivity',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancePromoteActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeDBInstancePromoteActivityRequest $request DescribeDBInstancePromoteActivityRequest
     *
     * @return DescribeDBInstancePromoteActivityResponse DescribeDBInstancePromoteActivityResponse
     */
    public function describeDBInstancePromoteActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePromoteActivityWithOptions($request, $runtime);
    }

    /**
     * This operation is used to query the original settings of shared proxies rather than the latest settings of dedicated proxies. For more information about how to query the settings of dedicated proxies, see [DescribeDBProxy](~~141055~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature must be enabled for the primary instance.
     *   * *   The read/write splitting feature must be enabled for the primary instance.
     *   *
     * @param DescribeDBInstanceProxyConfigurationRequest $request DescribeDBInstanceProxyConfigurationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceProxyConfigurationResponse DescribeDBInstanceProxyConfigurationResponse
     */
    public function describeDBInstanceProxyConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeDBInstanceProxyConfiguration',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceProxyConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to query the original settings of shared proxies rather than the latest settings of dedicated proxies. For more information about how to query the settings of dedicated proxies, see [DescribeDBProxy](~~141055~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature must be enabled for the primary instance.
     *   * *   The read/write splitting feature must be enabled for the primary instance.
     *   *
     * @param DescribeDBInstanceProxyConfigurationRequest $request DescribeDBInstanceProxyConfigurationRequest
     *
     * @return DescribeDBInstanceProxyConfigurationResponse DescribeDBInstanceProxyConfigurationResponse
     */
    public function describeDBInstanceProxyConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that your instance is one of the following instances:
     *   * *   ApsaraDB RDS for MySQL instances that do not run RDS Basic Edition
     *   * *   ApsaraDB RDS for SQL Server instances
     *   * *   ApsaraDB RDS for PostgreSQL instances that use cloud disks.
     *   *
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
            'action'      => 'DescribeDBInstanceSSL',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that your instance is one of the following instances:
     *   * *   ApsaraDB RDS for MySQL instances that do not run RDS Basic Edition
     *   * *   ApsaraDB RDS for SQL Server instances
     *   * *   ApsaraDB RDS for PostgreSQL instances that use cloud disks.
     *   *
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
     * This operation is used to view the [Transparent Data Encryption (TDE)](~~96121~~) configuration of an instance.
     *   * The TDE feature is enabled for the instance by calling the [ModifyDBInstanceTDE](~~26256~~) operation.
     *   *
     * @param DescribeDBInstanceTDERequest $request DescribeDBInstanceTDERequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceTDEResponse DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBInstanceTDE',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to view the [Transparent Data Encryption (TDE)](~~96121~~) configuration of an instance.
     *   * The TDE feature is enabled for the instance by calling the [ModifyDBInstanceTDE](~~26256~~) operation.
     *   *
     * @param DescribeDBInstanceTDERequest $request DescribeDBInstanceTDERequest
     *
     * @return DescribeDBInstanceTDEResponse DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * You can use one of the following methods to check the response:
     *   * *   Method 1: Use **MaxResults** to specify the number of entries per page. Then, use **NextToken** to specify the token that is used to display the next page. **NextToken** is set to the value that is returned from the most recent call of the **DescribeDBInstances** operation for **NextToken**.
     *   *     > The first time you call the DescribeDBInstances operation to perform a paged query, you need only to specify **MaxResults**. In this case, the operation returns the data of the first page and the value of **NextToken**.
     *   * *   Method 2: Use **PageSize** to specify the number of entries per page. Then, use **PageNumber** to display the next page.
     *   * > You can use only one of the preceding methods. If a large number of entries are returned, we recommend that you use Method 1 to increase the query speed.
     *   *
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionMode)) {
            $query['ConnectionMode'] = $request->connectionMode;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
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
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceLevel)) {
            $query['InstanceLevel'] = $request->instanceLevel;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use one of the following methods to check the response:
     *   * *   Method 1: Use **MaxResults** to specify the number of entries per page. Then, use **NextToken** to specify the token that is used to display the next page. **NextToken** is set to the value that is returned from the most recent call of the **DescribeDBInstances** operation for **NextToken**.
     *   *     > The first time you call the DescribeDBInstances operation to perform a paged query, you need only to specify **MaxResults**. In this case, the operation returns the data of the first page and the value of **NextToken**.
     *   * *   Method 2: Use **PageSize** to specify the number of entries per page. Then, use **PageNumber** to display the next page.
     *   * > You can use only one of the preceding methods. If a large number of entries are returned, we recommend that you use Method 1 to increase the query speed.
     *   *
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
     * @deprecated : DescribeDBInstancesAsCsv is deprecated, please use Rds::2014-08-15::DescribeDBInstances instead.
     *   * This operation is no longer available. You can call the DescribeDBInstanceAttribute operation to query information about an instance.
     *   *
     * Deprecated
     *
     * @param DescribeDBInstancesAsCsvRequest $request DescribeDBInstancesAsCsvRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesAsCsvResponse DescribeDBInstancesAsCsvResponse
     */
    public function describeDBInstancesAsCsvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cachedAsync)) {
            $query['CachedAsync'] = $request->cachedAsync;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->exportKey)) {
            $query['ExportKey'] = $request->exportKey;
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
            'action'      => 'DescribeDBInstancesAsCsv',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesAsCsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : DescribeDBInstancesAsCsv is deprecated, please use Rds::2014-08-15::DescribeDBInstances instead.
     *   * This operation is no longer available. You can call the DescribeDBInstanceAttribute operation to query information about an instance.
     *   *
     * Deprecated
     *
     * @param DescribeDBInstancesAsCsvRequest $request DescribeDBInstancesAsCsvRequest
     *
     * @return DescribeDBInstancesAsCsvResponse DescribeDBInstancesAsCsvResponse
     */
    public function describeDBInstancesAsCsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesAsCsvWithOptions($request, $runtime);
    }

    /**
     * > This operation is available only for subscription instances.
     *   *
     * @param DescribeDBInstancesByExpireTimeRequest $request DescribeDBInstancesByExpireTimeRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesByExpireTimeResponse DescribeDBInstancesByExpireTimeResponse
     */
    public function describeDBInstancesByExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expirePeriod)) {
            $query['ExpirePeriod'] = $request->expirePeriod;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesByExpireTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesByExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is available only for subscription instances.
     *   *
     * @param DescribeDBInstancesByExpireTimeRequest $request DescribeDBInstancesByExpireTimeRequest
     *
     * @return DescribeDBInstancesByExpireTimeResponse DescribeDBInstancesByExpireTimeResponse
     */
    public function describeDBInstancesByExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesByExpireTimeWithOptions($request, $runtime);
    }

    /**
     * This operation is phased out.
     *   *
     * @param DescribeDBInstancesByPerformanceRequest $request DescribeDBInstancesByPerformanceRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesByPerformanceResponse DescribeDBInstancesByPerformanceResponse
     */
    public function describeDBInstancesByPerformanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->sortMethod)) {
            $query['SortMethod'] = $request->sortMethod;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesByPerformance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesByPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is phased out.
     *   *
     * @param DescribeDBInstancesByPerformanceRequest $request DescribeDBInstancesByPerformanceRequest
     *
     * @return DescribeDBInstancesByPerformanceResponse DescribeDBInstancesByPerformanceResponse
     */
    public function describeDBInstancesByPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesByPerformanceWithOptions($request, $runtime);
    }

    /**
     * This operation is phased out.
     *   *
     * @param DescribeDBInstancesForCloneRequest $request DescribeDBInstancesForCloneRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesForCloneResponse DescribeDBInstancesForCloneResponse
     */
    public function describeDBInstancesForCloneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionMode)) {
            $query['ConnectionMode'] = $request->connectionMode;
        }
        if (!Utils::isUnset($request->currentInstanceId)) {
            $query['CurrentInstanceId'] = $request->currentInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
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
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesForClone',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesForCloneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is phased out.
     *   *
     * @param DescribeDBInstancesForCloneRequest $request DescribeDBInstancesForCloneRequest
     *
     * @return DescribeDBInstancesForCloneResponse DescribeDBInstancesForCloneResponse
     */
    public function describeDBInstancesForClone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesForCloneWithOptions($request, $runtime);
    }

    /**
     * Before you purchase or upgrade an ApsaraDB RDS for MySQL instance or an ApsaraDB RDS for PostgreSQL instance, you can call the DescribeDBMiniEngineVersions operation to query the minor engine versions that are available for the instance.
     *   *
     * @param DescribeDBMiniEngineVersionsRequest $request DescribeDBMiniEngineVersionsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBMiniEngineVersionsResponse DescribeDBMiniEngineVersionsResponse
     */
    public function describeDBMiniEngineVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->minorVersionTag)) {
            $query['MinorVersionTag'] = $request->minorVersionTag;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBMiniEngineVersions',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBMiniEngineVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you purchase or upgrade an ApsaraDB RDS for MySQL instance or an ApsaraDB RDS for PostgreSQL instance, you can call the DescribeDBMiniEngineVersions operation to query the minor engine versions that are available for the instance.
     *   *
     * @param DescribeDBMiniEngineVersionsRequest $request DescribeDBMiniEngineVersionsRequest
     *
     * @return DescribeDBMiniEngineVersionsResponse DescribeDBMiniEngineVersionsResponse
     */
    public function describeDBMiniEngineVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBMiniEngineVersionsWithOptions($request, $runtime);
    }

    /**
     * Before you call the ModifyDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param DescribeDBProxyRequest $request DescribeDBProxyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBProxyResponse DescribeDBProxyResponse
     */
    public function describeDBProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
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
            'action'      => 'DescribeDBProxy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the ModifyDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param DescribeDBProxyRequest $request DescribeDBProxyRequest
     *
     * @return DescribeDBProxyResponse DescribeDBProxyResponse
     */
    public function describeDBProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyWithOptions($request, $runtime);
    }

    /**
     * Before you call the DescribeDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param DescribeDBProxyEndpointRequest $request DescribeDBProxyEndpointRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBProxyEndpointResponse DescribeDBProxyEndpointResponse
     */
    public function describeDBProxyEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyConnectString)) {
            $query['DBProxyConnectString'] = $request->DBProxyConnectString;
        }
        if (!Utils::isUnset($request->DBProxyEndpointId)) {
            $query['DBProxyEndpointId'] = $request->DBProxyEndpointId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
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
            'action'      => 'DescribeDBProxyEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the DescribeDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param DescribeDBProxyEndpointRequest $request DescribeDBProxyEndpointRequest
     *
     * @return DescribeDBProxyEndpointResponse DescribeDBProxyEndpointResponse
     */
    public function describeDBProxyEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyEndpointWithOptions($request, $runtime);
    }

    /**
     * Before you call the DescribeDBProxyPerformance operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param DescribeDBProxyPerformanceRequest $request DescribeDBProxyPerformanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBProxyPerformanceResponse DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->DBProxyInstanceType)) {
            $query['DBProxyInstanceType'] = $request->DBProxyInstanceType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricsName)) {
            $query['MetricsName'] = $request->metricsName;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBProxyPerformance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the DescribeDBProxyPerformance operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param DescribeDBProxyPerformanceRequest $request DescribeDBProxyPerformanceRequest
     *
     * @return DescribeDBProxyPerformanceResponse DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyPerformanceWithOptions($request, $runtime);
    }

    /**
     * For more information, see [Configure a distributed transaction whitelist](~~124321~~).
     *   * This operation is applicable to instances that run one of the following SQL Server versions on RDS High-Availability Edition: SQL Server 2012 SE, SQL Server 2012 EE, SQL Server 2014 SE, SQL Server 2016 SE, SQL Server 2016 EE, and SQL Server 2017 SE.
     *   *
     * @param DescribeDTCSecurityIpHostsForSQLServerRequest $request DescribeDTCSecurityIpHostsForSQLServerRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public function describeDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDTCSecurityIpHostsForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDTCSecurityIpHostsForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information, see [Configure a distributed transaction whitelist](~~124321~~).
     *   * This operation is applicable to instances that run one of the following SQL Server versions on RDS High-Availability Edition: SQL Server 2012 SE, SQL Server 2012 EE, SQL Server 2014 SE, SQL Server 2016 SE, SQL Server 2016 EE, and SQL Server 2017 SE.
     *   *
     * @param DescribeDTCSecurityIpHostsForSQLServerRequest $request DescribeDTCSecurityIpHostsForSQLServerRequest
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public function describeDTCSecurityIpHostsForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDatabasesRequest $request DescribeDatabasesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabasesResponse DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->DBStatus)) {
            $query['DBStatus'] = $request->DBStatus;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabases',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDatabasesRequest $request DescribeDatabasesRequest
     *
     * @return DescribeDatabasesResponse DescribeDatabasesResponse
     */
    public function describeDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabasesWithOptions($request, $runtime);
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param DescribeDedicatedHostGroupsRequest $request DescribeDedicatedHostGroupsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedHostGroupsResponse DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
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
            'action'      => 'DescribeDedicatedHostGroups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param DescribeDedicatedHostGroupsRequest $request DescribeDedicatedHostGroupsRequest
     *
     * @return DescribeDedicatedHostGroupsResponse DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostGroupsWithOptions($request, $runtime);
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param DescribeDedicatedHostsRequest $request DescribeDedicatedHostsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedHostsResponse DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationStatus)) {
            $query['AllocationStatus'] = $request->allocationStatus;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->hostStatus)) {
            $query['HostStatus'] = $request->hostStatus;
        }
        if (!Utils::isUnset($request->hostType)) {
            $query['HostType'] = $request->hostType;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
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
            'action'      => 'DescribeDedicatedHosts',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param DescribeDedicatedHostsRequest $request DescribeDedicatedHostsRequest
     *
     * @return DescribeDedicatedHostsResponse DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * This operation is supported for instances that run MySQL with local SSDs. For more information about how to retain the data backup files of an instance after the instance is released, see [Configure automatic backup](~~98818~~).
     *   *
     * @param DescribeDetachedBackupsRequest $request DescribeDetachedBackupsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDetachedBackupsResponse DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->backupStatus)) {
            $query['BackupStatus'] = $request->backupStatus;
        }
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeDetachedBackups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDetachedBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is supported for instances that run MySQL with local SSDs. For more information about how to retain the data backup files of an instance after the instance is released, see [Configure automatic backup](~~98818~~).
     *   *
     * @param DescribeDetachedBackupsRequest $request DescribeDetachedBackupsRequest
     *
     * @return DescribeDetachedBackupsResponse DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetachedBackupsWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   * > This operation is no longer maintained. You can use the [DescribeDiagnosticReportList](~~443006~~) operation of Database Autonomy Service (DAS) to query a list of diagnostic reports.
     *   * *   The returned diagnosis reports include data collection time, data generation time, and download URLs. The system retains the reports for 15 days.
     *   * *   This operation is not suitable for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   *
     * Deprecated
     *
     * @param DescribeDiagnosticReportListRequest $request DescribeDiagnosticReportListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosticReportListResponse DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosticReportList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosticReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   * > This operation is no longer maintained. You can use the [DescribeDiagnosticReportList](~~443006~~) operation of Database Autonomy Service (DAS) to query a list of diagnostic reports.
     *   * *   The returned diagnosis reports include data collection time, data generation time, and download URLs. The system retains the reports for 15 days.
     *   * *   This operation is not suitable for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   *
     * Deprecated
     *
     * @param DescribeDiagnosticReportListRequest $request DescribeDiagnosticReportListRequest
     *
     * @return DescribeDiagnosticReportListResponse DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * Error logs contain the time when they were generated and the error messages.
     *   *
     * @param DescribeErrorLogsRequest $request DescribeErrorLogsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeErrorLogsResponse DescribeErrorLogsResponse
     */
    public function describeErrorLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeErrorLogs',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeErrorLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Error logs contain the time when they were generated and the error messages.
     *   *
     * @param DescribeErrorLogsRequest $request DescribeErrorLogsRequest
     *
     * @return DescribeErrorLogsResponse DescribeErrorLogsResponse
     */
    public function describeErrorLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogsWithOptions($request, $runtime);
    }

    /**
     * The event history feature enables you to view the events that occurred within a region over a specific time range. Historical events include instance creation and parameter modification. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *   * Before you call this operation, make sure that the event history feature is enabled. Otherwise, this operation fails.
     *   *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The event history feature enables you to view the events that occurred within a region over a specific time range. Historical events include instance creation and parameter modification. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *   * Before you call this operation, make sure that the event history feature is enabled. Otherwise, this operation fails.
     *   *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGadInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGadInstancesResponse
     */
    public function describeGadInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gadInstanceName)) {
            $query['GadInstanceName'] = $request->gadInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGadInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGadInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGadInstancesRequest $request
     *
     * @return DescribeGadInstancesResponse
     */
    public function describeGadInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGadInstancesWithOptions($request, $runtime);
    }

    /**
     * By default, Alibaba Cloud uses persistent connections to check the availability of an instance. For more information, see [What is availability detection?](~~207467~~).
     *   *
     * @param DescribeHADiagnoseConfigRequest $request DescribeHADiagnoseConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHADiagnoseConfigResponse DescribeHADiagnoseConfigResponse
     */
    public function describeHADiagnoseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeHADiagnoseConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHADiagnoseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, Alibaba Cloud uses persistent connections to check the availability of an instance. For more information, see [What is availability detection?](~~207467~~).
     *   *
     * @param DescribeHADiagnoseConfigRequest $request DescribeHADiagnoseConfigRequest
     *
     * @return DescribeHADiagnoseConfigResponse DescribeHADiagnoseConfigResponse
     */
    public function describeHADiagnoseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHADiagnoseConfigWithOptions($request, $runtime);
    }

    /**
     * After a primary/secondary switchover is complete, the primary instance is demoted to the secondary instance and the secondary instance is promoted to primary. For more information, see [Switch workloads over between primary and secondary ApsaraDB RDS instances](~~96054~~).
     *   * When you call this operation, you must make sure that the instance runs RDS High-availability Edition, RDS Enterprise Edition, and RDS Cluster Edition. RDS Cluster Edition is supported for ApsaraDB RDS for MySQL and ApsaraDB RDS for SQL Server.
     *   *
     * @param DescribeHASwitchConfigRequest $request DescribeHASwitchConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHASwitchConfigResponse DescribeHASwitchConfigResponse
     */
    public function describeHASwitchConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeHASwitchConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHASwitchConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a primary/secondary switchover is complete, the primary instance is demoted to the secondary instance and the secondary instance is promoted to primary. For more information, see [Switch workloads over between primary and secondary ApsaraDB RDS instances](~~96054~~).
     *   * When you call this operation, you must make sure that the instance runs RDS High-availability Edition, RDS Enterprise Edition, and RDS Cluster Edition. RDS Cluster Edition is supported for ApsaraDB RDS for MySQL and ApsaraDB RDS for SQL Server.
     *   *
     * @param DescribeHASwitchConfigRequest $request DescribeHASwitchConfigRequest
     *
     * @return DescribeHASwitchConfigResponse DescribeHASwitchConfigResponse
     */
    public function describeHASwitchConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHASwitchConfigWithOptions($request, $runtime);
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
            'version'     => '2014-08-15',
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
     * > This operation supports only for ApsaraDB RDS for SQL Server instances and is available only to specific customers. If you want to call this operation, contact **Alibaba Cloud technical support**.
     *   * ### Prerequisites
     *   * The instance meets the following requirements:
     *   * *   The instance resides in a region other than the China (Zhangjiakou) region.
     *   * *   The instance runs RDS Basic Edition, runs SQL Server 2012 or later on RDS High-availability Edition, or runs RDS Cluster Edition.
     *   * *   The instance belongs to the general-purpose or dedicated instance family. The shared instance family is not supported.
     *   * *   The instance resides in a virtual private cloud (VPC). For more information about how to change the network type of an instance, see [Change the network type of an ApsaraDB RDS for SQL Server instance](~~95707~~).
     *   * *   If the instance runs RDS High-availability Edition or RDS Cluster Edition, make sure that the instance is created on or after January 01, 2021. If the instance runs RDS Basic Edition, make sure that the instance is created on or after September 02, 2022. You can view the **Creation Time** parameter of an instance in the **Status** section of the **Basic Information** page in the ApsaraDB RDS console.
     *   * Your **Alibaba Cloud account** is used for logons.
     *   *
     * @param DescribeHostWebShellRequest $request DescribeHostWebShellRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHostWebShellResponse DescribeHostWebShellResponse
     */
    public function describeHostWebShellWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionID)) {
            $query['RegionID'] = $request->regionID;
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
            'action'      => 'DescribeHostWebShell',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHostWebShellResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation supports only for ApsaraDB RDS for SQL Server instances and is available only to specific customers. If you want to call this operation, contact **Alibaba Cloud technical support**.
     *   * ### Prerequisites
     *   * The instance meets the following requirements:
     *   * *   The instance resides in a region other than the China (Zhangjiakou) region.
     *   * *   The instance runs RDS Basic Edition, runs SQL Server 2012 or later on RDS High-availability Edition, or runs RDS Cluster Edition.
     *   * *   The instance belongs to the general-purpose or dedicated instance family. The shared instance family is not supported.
     *   * *   The instance resides in a virtual private cloud (VPC). For more information about how to change the network type of an instance, see [Change the network type of an ApsaraDB RDS for SQL Server instance](~~95707~~).
     *   * *   If the instance runs RDS High-availability Edition or RDS Cluster Edition, make sure that the instance is created on or after January 01, 2021. If the instance runs RDS Basic Edition, make sure that the instance is created on or after September 02, 2022. You can view the **Creation Time** parameter of an instance in the **Status** section of the **Basic Information** page in the ApsaraDB RDS console.
     *   * Your **Alibaba Cloud account** is used for logons.
     *   *
     * @param DescribeHostWebShellRequest $request DescribeHostWebShellRequest
     *
     * @return DescribeHostWebShellResponse DescribeHostWebShellResponse
     */
    public function describeHostWebShell($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostWebShellWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAutoRenewalAttribute',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param DescribeInstanceCrossBackupPolicyRequest $request DescribeInstanceCrossBackupPolicyRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceCrossBackupPolicyResponse DescribeInstanceCrossBackupPolicyResponse
     */
    public function describeInstanceCrossBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeInstanceCrossBackupPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceCrossBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param DescribeInstanceCrossBackupPolicyRequest $request DescribeInstanceCrossBackupPolicyRequest
     *
     * @return DescribeInstanceCrossBackupPolicyResponse DescribeInstanceCrossBackupPolicyResponse
     */
    public function describeInstanceCrossBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCrossBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceKeywordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceKeywordsResponse
     */
    public function describeInstanceKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
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
            'action'      => 'DescribeInstanceKeywords',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceKeywordsRequest $request
     *
     * @return DescribeInstanceKeywordsResponse
     */
    public function describeInstanceKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceKeywordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceLinkedWhitelistTemplateRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeInstanceLinkedWhitelistTemplateResponse
     */
    public function describeInstanceLinkedWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
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
            'action'      => 'DescribeInstanceLinkedWhitelistTemplate',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceLinkedWhitelistTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceLinkedWhitelistTemplateRequest $request
     *
     * @return DescribeInstanceLinkedWhitelistTemplateResponse
     */
    public function describeInstanceLinkedWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceLinkedWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLocalAvailableRecoveryTimeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse
     */
    public function describeLocalAvailableRecoveryTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLocalAvailableRecoveryTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLocalAvailableRecoveryTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLocalAvailableRecoveryTimeRequest $request
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse
     */
    public function describeLocalAvailableRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLocalAvailableRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogBackupFilesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLogBackupFilesResponse
     */
    public function describeLogBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogBackupFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogBackupFilesRequest $request
     *
     * @return DescribeLogBackupFilesResponse
     */
    public function describeLogBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupFilesWithOptions($request, $runtime);
    }

    /**
     * Before you call the [RestoreTable](~~131510~~) operation to restore individual databases or tables of an ApsaraDB RDS for MySQL instance, you can call this operation to query the information about the databases and tables that can be restored. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * > This operation is supported only when the instance runs MySQL 8.0, MySQL 5.7, or MySQL 5.6 on RDS High-availability Edition with local disks.
     *   *
     * @param DescribeMetaListRequest $request DescribeMetaListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetaListResponse DescribeMetaListResponse
     */
    public function describeMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetID)) {
            $query['BackupSetID'] = $request->backupSetID;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->getDbName)) {
            $query['GetDbName'] = $request->getDbName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pattern)) {
            $query['Pattern'] = $request->pattern;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetaList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the [RestoreTable](~~131510~~) operation to restore individual databases or tables of an ApsaraDB RDS for MySQL instance, you can call this operation to query the information about the databases and tables that can be restored. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * > This operation is supported only when the instance runs MySQL 8.0, MySQL 5.7, or MySQL 5.6 on RDS High-availability Edition with local disks.
     *   *
     * @param DescribeMetaListRequest $request DescribeMetaListRequest
     *
     * @return DescribeMetaListResponse DescribeMetaListResponse
     */
    public function describeMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMigrateTaskByIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMigrateTaskByIdResponse
     */
    public function describeMigrateTaskByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->migrateTaskId)) {
            $query['MigrateTaskId'] = $request->migrateTaskId;
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
            'action'      => 'DescribeMigrateTaskById',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrateTaskByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrateTaskByIdRequest $request
     *
     * @return DescribeMigrateTaskByIdResponse
     */
    public function describeMigrateTaskById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTaskByIdWithOptions($request, $runtime);
    }

    /**
     * This operation allows you to query the migration tasks that are created for the instance over the last week.
     *   * >
     *   * *   This operation is supported only for migration tasks that are created to migrate full backup files.
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   *
     * @param DescribeMigrateTasksRequest $request DescribeMigrateTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMigrateTasksResponse DescribeMigrateTasksResponse
     */
    public function describeMigrateTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrateTasks',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrateTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation allows you to query the migration tasks that are created for the instance over the last week.
     *   * >
     *   * *   This operation is supported only for migration tasks that are created to migrate full backup files.
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   *
     * @param DescribeMigrateTasksRequest $request DescribeMigrateTasksRequest
     *
     * @return DescribeMigrateTasksResponse DescribeMigrateTasksResponse
     */
    public function describeMigrateTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModifyPGHbaConfigLogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeModifyPGHbaConfigLogResponse
     */
    public function describeModifyPGHbaConfigLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeModifyPGHbaConfigLog',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModifyPGHbaConfigLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeModifyPGHbaConfigLogRequest $request
     *
     * @return DescribeModifyPGHbaConfigLogResponse
     */
    public function describeModifyPGHbaConfigLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyPGHbaConfigLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModifyParameterLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeModifyParameterLog',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModifyParameterLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeModifyParameterLogRequest $request
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyParameterLogWithOptions($request, $runtime);
    }

    /**
     * >  This operation is not supported for instances that run SQL Server 2017 EE or SQL Server 2019 EE.
     *   *
     * @param DescribeOssDownloadsRequest $request DescribeOssDownloadsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssDownloadsResponse DescribeOssDownloadsResponse
     */
    public function describeOssDownloadsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->migrateTaskId)) {
            $query['MigrateTaskId'] = $request->migrateTaskId;
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
            'action'      => 'DescribeOssDownloads',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssDownloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  This operation is not supported for instances that run SQL Server 2017 EE or SQL Server 2019 EE.
     *   *
     * @param DescribeOssDownloadsRequest $request DescribeOssDownloadsRequest
     *
     * @return DescribeOssDownloadsResponse DescribeOssDownloadsResponse
     */
    public function describeOssDownloads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssDownloadsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePGHbaConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePGHbaConfigResponse
     */
    public function describePGHbaConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribePGHbaConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePGHbaConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePGHbaConfigRequest $request
     *
     * @return DescribePGHbaConfigResponse
     */
    public function describePGHbaConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePGHbaConfigWithOptions($request, $runtime);
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to instances. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * >  You can apply parameter templates only to ApsaraDB RDS for MySQL instances and ApsaraDB RDS for PostgreSQL instances.
     *   *
     * @param DescribeParameterGroupRequest $request DescribeParameterGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupResponse DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to instances. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * >  You can apply parameter templates only to ApsaraDB RDS for MySQL instances and ApsaraDB RDS for PostgreSQL instances.
     *   *
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
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to instances. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * >  You can apply parameter templates only to ApsaraDB RDS for MySQL instances and ApsaraDB RDS for PostgreSQL instances.
     *   *
     * @param DescribeParameterGroupsRequest $request DescribeParameterGroupsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupsResponse DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeParameterGroups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to instances. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * >  You can apply parameter templates only to ApsaraDB RDS for MySQL instances and ApsaraDB RDS for PostgreSQL instances.
     *   *
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL 5.5, 5.6, 5.7, and 8.0
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL 9.4, 10, 11, and 12
     *   * *   MariaDB 10.3.
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
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'DescribeParameterTemplates',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL 5.5, 5.6, 5.7, and 8.0
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL 9.4, 10, 11, and 12
     *   * *   MariaDB 10.3.
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL 5.5, MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15
     *   * *   MariaDB 10.3.
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
            'action'      => 'DescribeParameters',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL 5.5, MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15
     *   * *   MariaDB 10.3.
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
     * @param DescribePostgresExtensionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePostgresExtensionsResponse
     */
    public function describePostgresExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
            'action'      => 'DescribePostgresExtensions',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePostgresExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePostgresExtensionsRequest $request
     *
     * @return DescribePostgresExtensionsResponse
     */
    public function describePostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNode)) {
            $request->DBNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNode, 'DBNode', 'json');
        }
        if (!Utils::isUnset($tmpReq->serverlessConfig)) {
            $request->serverlessConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfig, 'ServerlessConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
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
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->DBNodeShrink)) {
            $query['DBNode'] = $request->DBNodeShrink;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceUsedType)) {
            $query['InstanceUsedType'] = $request->instanceUsedType;
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->serverlessConfigShrink)) {
            $query['ServerlessConfig'] = $request->serverlessConfigShrink;
        }
        if (!Utils::isUnset($request->timeType)) {
            $query['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2014-08-15',
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRdsResourceSettingsRequest $request DescribeRdsResourceSettingsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsResourceSettingsResponse DescribeRdsResourceSettingsResponse
     */
    public function describeRdsResourceSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceNiche)) {
            $query['ResourceNiche'] = $request->resourceNiche;
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
            'action'      => 'DescribeRdsResourceSettings',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsResourceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRdsResourceSettingsRequest $request DescribeRdsResourceSettingsRequest
     *
     * @return DescribeRdsResourceSettingsResponse DescribeRdsResourceSettingsResponse
     */
    public function describeRdsResourceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsResourceSettingsWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The primary instance must run the MySQL or PostgreSQL database engine.
     *   * *   The primary instance must be attached with a read-only instance.
     *   *
     * @param DescribeReadDBInstanceDelayRequest $request DescribeReadDBInstanceDelayRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeReadDBInstanceDelayResponse DescribeReadDBInstanceDelayResponse
     */
    public function describeReadDBInstanceDelayWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->readInstanceId)) {
            $query['ReadInstanceId'] = $request->readInstanceId;
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
            'action'      => 'DescribeReadDBInstanceDelay',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReadDBInstanceDelayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The primary instance must run the MySQL or PostgreSQL database engine.
     *   * *   The primary instance must be attached with a read-only instance.
     *   *
     * @param DescribeReadDBInstanceDelayRequest $request DescribeReadDBInstanceDelayRequest
     *
     * @return DescribeReadDBInstanceDelayResponse DescribeReadDBInstanceDelayResponse
     */
    public function describeReadDBInstanceDelay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReadDBInstanceDelayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionInfosRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRegionInfosResponse
     */
    public function describeRegionInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'DescribeRegionInfos',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionInfosRequest $request
     *
     * @return DescribeRegionInfosResponse
     */
    public function describeRegionInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionInfosWithOptions($request, $runtime);
    }

    /**
     * Before you call the [CreateDBInstance](~~26228~~) operation to create an RDS instance, you can call the DescribeRegions operation to query the available regions and zones.
     *   * >  If a zone supports the multi-zone deployment method, the value of the ZoneId parameter for the zone contains an MAZ part. Examples: cn-hangzhou-MAZ6(b,f) and cn-hangzhou-MAZ5(b,e,f).
     *   *
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
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2014-08-15',
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
     * Before you call the [CreateDBInstance](~~26228~~) operation to create an RDS instance, you can call the DescribeRegions operation to query the available regions and zones.
     *   * >  If a zone supports the multi-zone deployment method, the value of the ZoneId parameter for the zone contains an MAZ part. Examples: cn-hangzhou-MAZ6(b,f) and cn-hangzhou-MAZ5(b,e,f).
     *   *
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
     * This operation is supported only for subscription instances.
     *   *
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
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
        if (!Utils::isUnset($request->timeType)) {
            $query['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRenewalPrice',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is supported only for subscription instances.
     *   *
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
     * @param DescribeResourceUsageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsageWithOptions($request, $runtime)
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
            'action'      => 'DescribeResourceUsage',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceUsageRequest $request
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageWithOptions($request, $runtime);
    }

    /**
     * This operation is applicable to the following database engine versions:
     *   * *   MySQL
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL.
     *   *
     * @param DescribeSQLCollectorPolicyRequest $request DescribeSQLCollectorPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLCollectorPolicyResponse DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicyWithOptions($request, $runtime)
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
            'action'      => 'DescribeSQLCollectorPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is applicable to the following database engine versions:
     *   * *   MySQL
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL.
     *   *
     * @param DescribeSQLCollectorPolicyRequest $request DescribeSQLCollectorPolicyRequest
     *
     * @return DescribeSQLCollectorPolicyResponse DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * The SQL explorer feature must be enabled for the instance.
     *   * The instance must run MySQL. For more information, see [SQL Explorer](~~96123~~).
     *   *
     * @param DescribeSQLCollectorRetentionRequest $request DescribeSQLCollectorRetentionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLCollectorRetentionResponse DescribeSQLCollectorRetentionResponse
     */
    public function describeSQLCollectorRetentionWithOptions($request, $runtime)
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
            'action'      => 'DescribeSQLCollectorRetention',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLCollectorRetentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The SQL explorer feature must be enabled for the instance.
     *   * The instance must run MySQL. For more information, see [SQL Explorer](~~96123~~).
     *   *
     * @param DescribeSQLCollectorRetentionRequest $request DescribeSQLCollectorRetentionRequest
     *
     * @return DescribeSQLCollectorRetentionResponse DescribeSQLCollectorRetentionResponse
     */
    public function describeSQLCollectorRetention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorRetentionWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL
     *   * >
     *   * *   The DescribeSQLLogFiles operation cannot be called to query the log files that are generated by SQL Explorer Trial Edition for an ApsaraDB RDS for MySQL instance.
     *   * *   The DescribeSQLLogFiles operation cannot be called to query the log files that are generated by the SQL Explorer feature and manually exported from the ApsaraDB RDS console. The DescribeSQLLogFiles operation can be called to query the SQL Explorer log files that are generated by calling the [DescribeSQLLogRecords](~~610533~~) operation with the request parameter **Form** set to **File**.
     *   *
     * @param DescribeSQLLogFilesRequest $request DescribeSQLLogFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLLogFilesResponse DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
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
            'action'      => 'DescribeSQLLogFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server 2008 R2
     *   * *   PostgreSQL
     *   * >
     *   * *   The DescribeSQLLogFiles operation cannot be called to query the log files that are generated by SQL Explorer Trial Edition for an ApsaraDB RDS for MySQL instance.
     *   * *   The DescribeSQLLogFiles operation cannot be called to query the log files that are generated by the SQL Explorer feature and manually exported from the ApsaraDB RDS console. The DescribeSQLLogFiles operation can be called to query the SQL Explorer log files that are generated by calling the [DescribeSQLLogRecords](~~610533~~) operation with the request parameter **Form** set to **File**.
     *   *
     * @param DescribeSQLLogFilesRequest $request DescribeSQLLogFilesRequest
     *
     * @return DescribeSQLLogFilesResponse DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogFilesWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL
     *   * >
     *   * *   You can call this operation up to 1,000 times per minute per account. The calls initiated by using both your Alibaba Cloud account and RAM users within your Alibaba Cloud account are counted.
     *   * *   This operation cannot be used to query the logs that are generated by SQL Explorer Trial Edition for an ApsaraDB RDS for MySQL instance.
     *   * *   When you call this operation and set the **Form** parameter to **File** to generate an audit file, a maximum of 1 million log entries can be recorded in the audit file, and you cannot filter log entries by keyword.
     *   *
     * @param DescribeSQLLogRecordsRequest $request DescribeSQLLogRecordsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLLogRecordsResponse DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
        if (!Utils::isUnset($request->SQLId)) {
            $query['SQLId'] = $request->SQLId;
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
            'action'      => 'DescribeSQLLogRecords',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL
     *   * >
     *   * *   You can call this operation up to 1,000 times per minute per account. The calls initiated by using both your Alibaba Cloud account and RAM users within your Alibaba Cloud account are counted.
     *   * *   This operation cannot be used to query the logs that are generated by SQL Explorer Trial Edition for an ApsaraDB RDS for MySQL instance.
     *   * *   When you call this operation and set the **Form** parameter to **File** to generate an audit file, a maximum of 1 million log entries can be recorded in the audit file, and you cannot filter log entries by keyword.
     *   *
     * @param DescribeSQLLogRecordsRequest $request DescribeSQLLogRecordsRequest
     *
     * @return DescribeSQLLogRecordsResponse DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogReportListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSQLLogReportListResponse
     */
    public function describeSQLLogReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogReportList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogReportListRequest $request
     *
     * @return DescribeSQLLogReportListResponse
     */
    public function describeSQLLogReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogReportListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecretsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSecretsResponse
     */
    public function describeSecretsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
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
            'action'      => 'DescribeSecrets',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecretsRequest $request
     *
     * @return DescribeSecretsResponse
     */
    public function describeSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecretsWithOptions($request, $runtime);
    }

    /**
     * After an RDS instance is added to an ECS security group, all ECS instances in the security group can access the RDS instance. For more information, see [Configure a whitelist for an RDS instance](~~96118~~).
     *   *
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
            'action'      => 'DescribeSecurityGroupConfiguration',
            'version'     => '2014-08-15',
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
     * After an RDS instance is added to an ECS security group, all ECS instances in the security group can access the RDS instance. For more information, see [Configure a whitelist for an RDS instance](~~96118~~).
     *   *
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
     * This operation is available only for ApsaraDB RDS for PostgreSQL instances.
     *   *
     * @param DescribeSlotsRequest $request DescribeSlotsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlotsResponse DescribeSlotsResponse
     */
    public function describeSlotsWithOptions($request, $runtime)
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
            'action'      => 'DescribeSlots',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for ApsaraDB RDS for PostgreSQL instances.
     *   *
     * @param DescribeSlotsRequest $request DescribeSlotsRequest
     *
     * @return DescribeSlotsResponse DescribeSlotsResponse
     */
    public function describeSlots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlotsWithOptions($request, $runtime);
    }

    /**
     * The unique ID of the SQL statement.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
        if (!Utils::isUnset($request->SQLHASH)) {
            $query['SQLHASH'] = $request->SQLHASH;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2014-08-15',
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
     * The unique ID of the SQL statement.
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
     * Before you call this operation, make sure that the instance runs one of the following database engine versions:
     *   * *   All MySQL versions except MySQL 5.7 that is used with RDS Basic edition
     *   * *   SQL Server 2008 R2
     *   * *   MariaDB 10.3
     *   * >  Slow query logs are not collected in real time and may show a latency of 6 hours to 8 hours.
     *   *
     * @param DescribeSlowLogsRequest $request DescribeSlowLogsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogsResponse DescribeSlowLogsResponse
     */
    public function describeSlowLogsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogs',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engine versions:
     *   * *   All MySQL versions except MySQL 5.7 that is used with RDS Basic edition
     *   * *   SQL Server 2008 R2
     *   * *   MariaDB 10.3
     *   * >  Slow query logs are not collected in real time and may show a latency of 6 hours to 8 hours.
     *   *
     * @param DescribeSlowLogsRequest $request DescribeSlowLogsRequest
     *
     * @return DescribeSlowLogsResponse DescribeSlowLogsResponse
     */
    public function describeSlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogsWithOptions($request, $runtime);
    }

    /**
     * This operation is supported only for instances that run SQL Server.
     *   *
     * @param DescribeSupportOnlineResizeDiskRequest $request DescribeSupportOnlineResizeDiskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupportOnlineResizeDiskResponse DescribeSupportOnlineResizeDiskResponse
     */
    public function describeSupportOnlineResizeDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupportOnlineResizeDisk',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportOnlineResizeDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is supported only for instances that run SQL Server.
     *   *
     * @param DescribeSupportOnlineResizeDiskRequest $request DescribeSupportOnlineResizeDiskRequest
     *
     * @return DescribeSupportOnlineResizeDiskResponse DescribeSupportOnlineResizeDiskResponse
     */
    public function describeSupportOnlineResizeDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportOnlineResizeDiskWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   If an instance ID is specified, all tags that are added to this instance are queried, and other filter conditions are invalid.
     *   * *   If you specify only TagKey, the results that match the specified TagKey are returned. If you specify both TagKey and TagValue, the results that match both the specified TagKey and TagValue are returned.
     *   *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   If an instance ID is specified, all tags that are added to this instance are queried, and other filter conditions are invalid.
     *   * *   If you specify only TagKey, the results that match the specified TagKey are returned. If you specify both TagKey and TagValue, the results that match both the specified TagKey and TagValue are returned.
     *   *
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
     * This operation is phased out.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $query['TaskAction'] = $request->taskAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2014-08-15',
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
     * This operation is phased out.
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
     * Before you upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance, you must perform an upgrade check and make sure that the check result is **Success**. You can call this operation to query the upgrade check report.
     *   * If the check result is **Fail**, you must handle the errors that occurred. For more information about how to handle common errors, see [Introduction to the check report for a major engine version upgrade to an ApsaraDB RDS for PostgreSQL instance](https://www.alibabacloud.com/help/en/apsaradb-for-rds/latest/introduction-to-the-check-report-of-a-major-engine-version-upgrade-for-an-apsaradb-rds-for-postgresql-instance).
     *   *
     * @param DescribeUpgradeMajorVersionPrecheckTaskRequest $request DescribeUpgradeMajorVersionPrecheckTaskRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUpgradeMajorVersionPrecheckTaskResponse DescribeUpgradeMajorVersionPrecheckTaskResponse
     */
    public function describeUpgradeMajorVersionPrecheckTaskWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->targetMajorVersion)) {
            $query['TargetMajorVersion'] = $request->targetMajorVersion;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpgradeMajorVersionPrecheckTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpgradeMajorVersionPrecheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance, you must perform an upgrade check and make sure that the check result is **Success**. You can call this operation to query the upgrade check report.
     *   * If the check result is **Fail**, you must handle the errors that occurred. For more information about how to handle common errors, see [Introduction to the check report for a major engine version upgrade to an ApsaraDB RDS for PostgreSQL instance](https://www.alibabacloud.com/help/en/apsaradb-for-rds/latest/introduction-to-the-check-report-of-a-major-engine-version-upgrade-for-an-apsaradb-rds-for-postgresql-instance).
     *   *
     * @param DescribeUpgradeMajorVersionPrecheckTaskRequest $request DescribeUpgradeMajorVersionPrecheckTaskRequest
     *
     * @return DescribeUpgradeMajorVersionPrecheckTaskResponse DescribeUpgradeMajorVersionPrecheckTaskResponse
     */
    public function describeUpgradeMajorVersionPrecheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpgradeMajorVersionPrecheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpgradeMajorVersionTasksRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeUpgradeMajorVersionTasksResponse
     */
    public function describeUpgradeMajorVersionTasksWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->targetMajorVersion)) {
            $query['TargetMajorVersion'] = $request->targetMajorVersion;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpgradeMajorVersionTasks',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpgradeMajorVersionTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpgradeMajorVersionTasksRequest $request
     *
     * @return DescribeUpgradeMajorVersionTasksResponse
     */
    public function describeUpgradeMajorVersionTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpgradeMajorVersionTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
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
            'action'      => 'DescribeVSwitches',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWhitelistTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWhitelistTemplateResponse
     */
    public function describeWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWhitelistTemplate',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWhitelistTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWhitelistTemplateRequest $request
     *
     * @return DescribeWhitelistTemplateResponse
     */
    public function describeWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWhitelistTemplateLinkedInstanceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeWhitelistTemplateLinkedInstanceResponse
     */
    public function describeWhitelistTemplateLinkedInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWhitelistTemplateLinkedInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWhitelistTemplateLinkedInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWhitelistTemplateLinkedInstanceRequest $request
     *
     * @return DescribeWhitelistTemplateLinkedInstanceResponse
     */
    public function describeWhitelistTemplateLinkedInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistTemplateLinkedInstanceWithOptions($request, $runtime);
    }

    /**
     * The DestroyDBInstance operation is phased out.
     *   *
     * @param DestroyDBInstanceRequest $request DestroyDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DestroyDBInstanceResponse DestroyDBInstanceResponse
     */
    public function destroyDBInstanceWithOptions($request, $runtime)
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
            'action'      => 'DestroyDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestroyDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The DestroyDBInstance operation is phased out.
     *   *
     * @param DestroyDBInstanceRequest $request DestroyDBInstanceRequest
     *
     * @return DestroyDBInstanceResponse DestroyDBInstanceResponse
     */
    public function destroyDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyDBInstanceWithOptions($request, $runtime);
    }

    /**
     * ## Precautions
     *   * This operation can be used to remove only unit nodes.
     *   *
     * @param DetachGadInstanceMemberRequest $request DetachGadInstanceMemberRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachGadInstanceMemberResponse DetachGadInstanceMemberResponse
     */
    public function detachGadInstanceMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gadInstanceName)) {
            $query['GadInstanceName'] = $request->gadInstanceName;
        }
        if (!Utils::isUnset($request->memberInstanceName)) {
            $query['MemberInstanceName'] = $request->memberInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachGadInstanceMember',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachGadInstanceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Precautions
     *   * This operation can be used to remove only unit nodes.
     *   *
     * @param DetachGadInstanceMemberRequest $request DetachGadInstanceMemberRequest
     *
     * @return DetachGadInstanceMemberResponse DetachGadInstanceMemberResponse
     */
    public function detachGadInstanceMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachGadInstanceMemberWithOptions($request, $runtime);
    }

    /**
     * @param DetachWhitelistTemplateToInstanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DetachWhitelistTemplateToInstanceResponse
     */
    public function detachWhitelistTemplateToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachWhitelistTemplateToInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachWhitelistTemplateToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachWhitelistTemplateToInstanceRequest $request
     *
     * @return DetachWhitelistTemplateToInstanceResponse
     */
    public function detachWhitelistTemplateToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachWhitelistTemplateToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetDBInstanceTopologyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDBInstanceTopologyResponse
     */
    public function getDBInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDBInstanceTopology',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDBInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDBInstanceTopologyRequest $request
     *
     * @return GetDBInstanceTopologyResponse
     */
    public function getDBInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS provides the dedicated proxy feature. You can configure SSL encryption for the dedicated proxy endpoint of an instance. This allows you to ensure the data security of the instance. For more information about the dedicated proxy feature, see [Dedicated proxy](~~138705~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The dedicated proxy feature must be enabled for the instance.
     *   * *   The minor engine version that the dedicated proxies of the instance run must be 1.12.8 or later.
     *   * *   The minor engine version of the instance must be 20200831 or later, and the instance must run the following MySQL versions and RDS editions:
     *   *     *   MySQL 8.0 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.6 on RDS High-availability Edition with local SSDs.
     *   *
     * @param GetDbProxyInstanceSslRequest $request GetDbProxyInstanceSslRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDbProxyInstanceSslResponse GetDbProxyInstanceSslResponse
     */
    public function getDbProxyInstanceSslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDbProxyInstanceSsl',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDbProxyInstanceSslResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS provides the dedicated proxy feature. You can configure SSL encryption for the dedicated proxy endpoint of an instance. This allows you to ensure the data security of the instance. For more information about the dedicated proxy feature, see [Dedicated proxy](~~138705~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The dedicated proxy feature must be enabled for the instance.
     *   * *   The minor engine version that the dedicated proxies of the instance run must be 1.12.8 or later.
     *   * *   The minor engine version of the instance must be 20200831 or later, and the instance must run the following MySQL versions and RDS editions:
     *   *     *   MySQL 8.0 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.6 on RDS High-availability Edition with local SSDs.
     *   *
     * @param GetDbProxyInstanceSslRequest $request GetDbProxyInstanceSslRequest
     *
     * @return GetDbProxyInstanceSslResponse GetDbProxyInstanceSslResponse
     */
    public function getDbProxyInstanceSsl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDbProxyInstanceSslWithOptions($request, $runtime);
    }

    /**
     * Each account can be granted permissions on one or more databases. Before you call this operation, make sure that the instance is in the Running state.
     *   * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition or run PostgreSQL with local disks.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantAccountPrivilege',
            'version'     => '2014-08-15',
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
     * Each account can be granted permissions on one or more databases. Before you call this operation, make sure that the instance is in the Running state.
     *   * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition or run PostgreSQL with local disks.
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
     * When you seek help from Alibaba Cloud technical support to troubleshoot instance exceptions, you need to grant permissions to the service account of your instance. The service account is used by Alibaba Cloud technical support to perform operations on the databases of your instance.
     *   * This operation is available only when your instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL
     *   * For more information, see [Grant permissions to the service account of an ApsaraDB RDS for MySQL instance](~~96102~~), [Grant permissions to the service account of an ApsaraDB RDS for SQL Server instance](~~95693~~), and [Grant permissions to the service account of an ApsaraDB RDS for PostgreSQL instance](~~146887~~).
     *   *
     * @param GrantOperatorPermissionRequest $request GrantOperatorPermissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantOperatorPermissionResponse GrantOperatorPermissionResponse
     */
    public function grantOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privileges)) {
            $query['Privileges'] = $request->privileges;
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
            'action'      => 'GrantOperatorPermission',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you seek help from Alibaba Cloud technical support to troubleshoot instance exceptions, you need to grant permissions to the service account of your instance. The service account is used by Alibaba Cloud technical support to perform operations on the databases of your instance.
     *   * This operation is available only when your instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL
     *   * For more information, see [Grant permissions to the service account of an ApsaraDB RDS for MySQL instance](~~96102~~), [Grant permissions to the service account of an ApsaraDB RDS for SQL Server instance](~~95693~~), and [Grant permissions to the service account of an ApsaraDB RDS for PostgreSQL instance](~~146887~~).
     *   *
     * @param GrantOperatorPermissionRequest $request GrantOperatorPermissionRequest
     *
     * @return GrantOperatorPermissionResponse GrantOperatorPermissionResponse
     */
    public function grantOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * We recommend that you use Data Transmission Service (DTS). DTS provides data migration, subscription, and synchronization features that allow you to establish stable, secure transmission links. For more information, see [DTS API overview](~~49456~~).
     *   * During the migration, the source instance is in the **Migrating** state, and the destination instance is in the **Importing** state.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The source and destination instances must run SQL Server and belong to the dedicated or dedicated host instance family. For more information about the supported instance types, see [Primary instance types](~~26312~~).
     *   * *   The source and destination instances must be created by using the same user credentials.
     *   * *   The instance is in the Running state.
     *   * *   The source and destination databases must be in the Running state.
     *   * *   The remaining storage of the destination instance must be greater than the storage capacity of the source instance.
     *   * >
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   * *   You can migrate the data of multiple databases at a time.
     *   *
     * @param ImportDatabaseBetweenInstancesRequest $request ImportDatabaseBetweenInstancesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportDatabaseBetweenInstancesResponse ImportDatabaseBetweenInstancesResponse
     */
    public function importDatabaseBetweenInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInfo)) {
            $query['DBInfo'] = $request->DBInfo;
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
        if (!Utils::isUnset($request->sourceDBInstanceId)) {
            $query['SourceDBInstanceId'] = $request->sourceDBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportDatabaseBetweenInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportDatabaseBetweenInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * We recommend that you use Data Transmission Service (DTS). DTS provides data migration, subscription, and synchronization features that allow you to establish stable, secure transmission links. For more information, see [DTS API overview](~~49456~~).
     *   * During the migration, the source instance is in the **Migrating** state, and the destination instance is in the **Importing** state.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The source and destination instances must run SQL Server and belong to the dedicated or dedicated host instance family. For more information about the supported instance types, see [Primary instance types](~~26312~~).
     *   * *   The source and destination instances must be created by using the same user credentials.
     *   * *   The instance is in the Running state.
     *   * *   The source and destination databases must be in the Running state.
     *   * *   The remaining storage of the destination instance must be greater than the storage capacity of the source instance.
     *   * >
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     *   * *   You can migrate the data of multiple databases at a time.
     *   *
     * @param ImportDatabaseBetweenInstancesRequest $request ImportDatabaseBetweenInstancesRequest
     *
     * @return ImportDatabaseBetweenInstancesResponse ImportDatabaseBetweenInstancesResponse
     */
    public function importDatabaseBetweenInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDatabaseBetweenInstancesWithOptions($request, $runtime);
    }

    /**
     * > A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The self-managed MySQL database runs MySQL 5.7 and is backed up by using XtraBackup. The name of the backup file ends with `_qp.xb`. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   The full backup file of the self-managed MySQL database is uploaded to an Object Storage Service (OSS) bucket in the region of the ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * > This operation is supported only for MySQL 5.7.
     *   *
     * @param ImportUserBackupFileRequest $request ImportUserBackupFileRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportUserBackupFileResponse ImportUserBackupFileResponse
     */
    public function importUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupFile)) {
            $query['BackupFile'] = $request->backupFile;
        }
        if (!Utils::isUnset($request->bucketRegion)) {
            $query['BucketRegion'] = $request->bucketRegion;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->restoreSize)) {
            $query['RestoreSize'] = $request->restoreSize;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportUserBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportUserBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The self-managed MySQL database runs MySQL 5.7 and is backed up by using XtraBackup. The name of the backup file ends with `_qp.xb`. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   The full backup file of the self-managed MySQL database is uploaded to an Object Storage Service (OSS) bucket in the region of the ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * > This operation is supported only for MySQL 5.7.
     *   *
     * @param ImportUserBackupFileRequest $request ImportUserBackupFileRequest
     *
     * @return ImportUserBackupFileResponse ImportUserBackupFileResponse
     */
    public function importUserBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importUserBackupFileWithOptions($request, $runtime);
    }

    /**
     * @param ListClassesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListClassesResponse
     */
    public function listClassesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
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
            'action'      => 'ListClasses',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClassesRequest $request
     *
     * @return ListClassesResponse
     */
    public function listClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassesWithOptions($request, $runtime);
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
            'version'     => '2014-08-15',
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
     * >
     *   * *   A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   Before you call the [CreateDBInstance](~~26228~~) operation to create an ApsaraDB RDS for MySQL instance into which you want to import full backup files, you can call this operation to query the IDs of full backup files.
     *   * *   You can call the [ImportUserBackupFile](~~260266~~) operation to import a full backup file into an ApsaraDB RDS for MySQL instance.
     *   *
     * @param ListUserBackupFilesRequest $request ListUserBackupFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserBackupFilesResponse ListUserBackupFilesResponse
     */
    public function listUserBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->ossUrl)) {
            $query['OssUrl'] = $request->ossUrl;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserBackupFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   Before you call the [CreateDBInstance](~~26228~~) operation to create an ApsaraDB RDS for MySQL instance into which you want to import full backup files, you can call this operation to query the IDs of full backup files.
     *   * *   You can call the [ImportUserBackupFile](~~260266~~) operation to import a full backup file into an ApsaraDB RDS for MySQL instance.
     *   *
     * @param ListUserBackupFilesRequest $request ListUserBackupFilesRequest
     *
     * @return ListUserBackupFilesResponse ListUserBackupFilesResponse
     */
    public function listUserBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBackupFilesWithOptions($request, $runtime);
    }

    /**
     * You cannot use a locked account to log on to the corresponding instance. You must first unlock the account. For more information, see [Lock and delete an account](~~147649~~).
     *   *
     * @param LockAccountRequest $request LockAccountRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return LockAccountResponse LockAccountResponse
     */
    public function lockAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'LockAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot use a locked account to log on to the corresponding instance. You must first unlock the account. For more information, see [Lock and delete an account](~~147649~~).
     *   *
     * @param LockAccountRequest $request LockAccountRequest
     *
     * @return LockAccountResponse LockAccountResponse
     */
    public function lockAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockAccountWithOptions($request, $runtime);
    }

    /**
     * @param MigrateConnectionToOtherZoneRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return MigrateConnectionToOtherZoneResponse
     */
    public function migrateConnectionToOtherZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateConnectionToOtherZone',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateConnectionToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MigrateConnectionToOtherZoneRequest $request
     *
     * @return MigrateConnectionToOtherZoneResponse
     */
    public function migrateConnectionToOtherZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateConnectionToOtherZoneWithOptions($request, $runtime);
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param MigrateDBInstanceRequest $request MigrateDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateDBInstanceResponse MigrateDBInstanceResponse
     */
    public function migrateDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
        if (!Utils::isUnset($request->specifiedTime)) {
            $query['SpecifiedTime'] = $request->specifiedTime;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForMaster)) {
            $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForSlave)) {
            $query['TargetDedicatedHostIdForSlave'] = $request->targetDedicatedHostIdForSlave;
        }
        if (!Utils::isUnset($request->zoneIdForFollower)) {
            $query['ZoneIdForFollower'] = $request->zoneIdForFollower;
        }
        if (!Utils::isUnset($request->zoneIdForLog)) {
            $query['ZoneIdForLog'] = $request->zoneIdForLog;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param MigrateDBInstanceRequest $request MigrateDBInstanceRequest
     *
     * @return MigrateDBInstanceResponse MigrateDBInstanceResponse
     */
    public function migrateDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDBInstanceWithOptions($request, $runtime);
    }

    /**
     * *   In standard whitelist mode, IP addresses in the whitelist apply to both the classic network and VPCs. To minimize security risks, we recommend that you use the enhanced whitelist mode.
     *   * *   In enhanced whitelist mode, IP addresses in the whitelist are divided into VPC IP addresses and IP addresses of the classic network and Internet.
     *   * >
     *   * *   You cannot change the whitelist mode from the enhanced whitelist mode to the standard whitelist mode.
     *   * *   This operation is not supported for instances that run SQL Server and MariaDB.
     *   *
     * @param MigrateSecurityIPModeRequest $request MigrateSecurityIPModeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateSecurityIPModeResponse MigrateSecurityIPModeResponse
     */
    public function migrateSecurityIPModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'MigrateSecurityIPMode',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateSecurityIPModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   In standard whitelist mode, IP addresses in the whitelist apply to both the classic network and VPCs. To minimize security risks, we recommend that you use the enhanced whitelist mode.
     *   * *   In enhanced whitelist mode, IP addresses in the whitelist are divided into VPC IP addresses and IP addresses of the classic network and Internet.
     *   * >
     *   * *   You cannot change the whitelist mode from the enhanced whitelist mode to the standard whitelist mode.
     *   * *   This operation is not supported for instances that run SQL Server and MariaDB.
     *   *
     * @param MigrateSecurityIPModeRequest $request MigrateSecurityIPModeRequest
     *
     * @return MigrateSecurityIPModeResponse MigrateSecurityIPModeResponse
     */
    public function migrateSecurityIPMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateSecurityIPModeWithOptions($request, $runtime);
    }

    /**
     * The prerequisites for this operation vary based on the database engine of the instance. For more information, see the following topics:
     *   * *   [RDS MySQL](~~96053~~)
     *   * *   [RDS PostgreSQL](~~96746~~)
     *   * *   [RDS SQL Server](~~95658~~)
     *   * > This operation allows you to migrate an instance across zones in the same region. This operation does not allow you to migrate an instance across zones in different regions. For example, you cannot migrate an instance from a zone in the China (Hangzhou) region to a zone in the China (Qingdao) region.
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
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
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
        if (!Utils::isUnset($request->isModifySpec)) {
            $query['IsModifySpec'] = $request->isModifySpec;
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIdSlave1)) {
            $query['ZoneIdSlave1'] = $request->zoneIdSlave1;
        }
        if (!Utils::isUnset($request->zoneIdSlave2)) {
            $query['ZoneIdSlave2'] = $request->zoneIdSlave2;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateToOtherZone',
            'version'     => '2014-08-15',
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
     * The prerequisites for this operation vary based on the database engine of the instance. For more information, see the following topics:
     *   * *   [RDS MySQL](~~96053~~)
     *   * *   [RDS PostgreSQL](~~96746~~)
     *   * *   [RDS SQL Server](~~95658~~)
     *   * > This operation allows you to migrate an instance across zones in the same region. This operation does not allow you to migrate an instance across zones in different regions. For example, you cannot migrate an instance from a zone in the China (Hangzhou) region to a zone in the China (Qingdao) region.
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
     * This operation is available only for ApsaraDB RDS for SQL Server instances.
     *   *
     * @param ModifyADInfoRequest $request ModifyADInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyADInfoResponse ModifyADInfoResponse
     */
    public function modifyADInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ADAccountName)) {
            $query['ADAccountName'] = $request->ADAccountName;
        }
        if (!Utils::isUnset($request->ADDNS)) {
            $query['ADDNS'] = $request->ADDNS;
        }
        if (!Utils::isUnset($request->ADPassword)) {
            $query['ADPassword'] = $request->ADPassword;
        }
        if (!Utils::isUnset($request->ADServerIpAddress)) {
            $query['ADServerIpAddress'] = $request->ADServerIpAddress;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'ModifyADInfo',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyADInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for ApsaraDB RDS for SQL Server instances.
     *   *
     * @param ModifyADInfoRequest $request ModifyADInfoRequest
     *
     * @return ModifyADInfoResponse ModifyADInfoResponse
     */
    public function modifyADInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyADInfoWithOptions($request, $runtime);
    }

    /**
     * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition or run PostgreSQL.
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
            'action'      => 'ModifyAccountDescription',
            'version'     => '2014-08-15',
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
     * > This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition or run PostgreSQL.
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
     * The event history feature enables you to view historical events that occurred in a region over a specific time range. These events include instance creation and parameter reconfiguration. For more information, see [Event history](~~129759~~).
     *   *
     * @param ModifyActionEventPolicyRequest $request ModifyActionEventPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyActionEventPolicyResponse ModifyActionEventPolicyResponse
     */
    public function modifyActionEventPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableEventLog)) {
            $query['EnableEventLog'] = $request->enableEventLog;
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
            'action'      => 'ModifyActionEventPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyActionEventPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The event history feature enables you to view historical events that occurred in a region over a specific time range. These events include instance creation and parameter reconfiguration. For more information, see [Event history](~~129759~~).
     *   *
     * @param ModifyActionEventPolicyRequest $request ModifyActionEventPolicyRequest
     *
     * @return ModifyActionEventPolicyResponse ModifyActionEventPolicyResponse
     */
    public function modifyActionEventPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActionEventPolicyWithOptions($request, $runtime);
    }

    /**
     * O\\&M tasks such as instance migration and version upgrades are notified by text message, phone call, email, internal message, or in the ApsaraDB RDS console. You can call this operation to change the scheduled switching time. You can also view the task and change the switching time on the Task Center page.
     *   *
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
            'action'      => 'ModifyActiveOperationTasks',
            'version'     => '2014-08-15',
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
     * O\\&M tasks such as instance migration and version upgrades are notified by text message, phone call, email, internal message, or in the ApsaraDB RDS console. You can call this operation to change the scheduled switching time. You can also view the task and change the switching time on the Task Center page.
     *   *
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is not a read-only instance.
     *   * *   The instance is in the Running state.
     *   *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->archiveBackupKeepCount)) {
            $query['ArchiveBackupKeepCount'] = $request->archiveBackupKeepCount;
        }
        if (!Utils::isUnset($request->archiveBackupKeepPolicy)) {
            $query['ArchiveBackupKeepPolicy'] = $request->archiveBackupKeepPolicy;
        }
        if (!Utils::isUnset($request->archiveBackupRetentionPeriod)) {
            $query['ArchiveBackupRetentionPeriod'] = $request->archiveBackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->backupInterval)) {
            $query['BackupInterval'] = $request->backupInterval;
        }
        if (!Utils::isUnset($request->backupLog)) {
            $query['BackupLog'] = $request->backupLog;
        }
        if (!Utils::isUnset($request->backupMethod)) {
            $query['BackupMethod'] = $request->backupMethod;
        }
        if (!Utils::isUnset($request->backupPolicyMode)) {
            $query['BackupPolicyMode'] = $request->backupPolicyMode;
        }
        if (!Utils::isUnset($request->backupPriority)) {
            $query['BackupPriority'] = $request->backupPriority;
        }
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->compressType)) {
            $query['CompressType'] = $request->compressType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->enableBackupLog)) {
            $query['EnableBackupLog'] = $request->enableBackupLog;
        }
        if (!Utils::isUnset($request->enableIncrementDataBackup)) {
            $query['EnableIncrementDataBackup'] = $request->enableIncrementDataBackup;
        }
        if (!Utils::isUnset($request->highSpaceUsageProtection)) {
            $query['HighSpaceUsageProtection'] = $request->highSpaceUsageProtection;
        }
        if (!Utils::isUnset($request->localLogRetentionHours)) {
            $query['LocalLogRetentionHours'] = $request->localLogRetentionHours;
        }
        if (!Utils::isUnset($request->localLogRetentionSpace)) {
            $query['LocalLogRetentionSpace'] = $request->localLogRetentionSpace;
        }
        if (!Utils::isUnset($request->logBackupFrequency)) {
            $query['LogBackupFrequency'] = $request->logBackupFrequency;
        }
        if (!Utils::isUnset($request->logBackupLocalRetentionNumber)) {
            $query['LogBackupLocalRetentionNumber'] = $request->logBackupLocalRetentionNumber;
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
        if (!Utils::isUnset($request->releasedKeepPolicy)) {
            $query['ReleasedKeepPolicy'] = $request->releasedKeepPolicy;
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
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is not a read-only instance.
     *   * *   The instance is in the Running state.
     *   *
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
     * > This operation is phased out.
     *   *
     * @param ModifyCollationTimeZoneRequest $request ModifyCollationTimeZoneRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCollationTimeZoneResponse ModifyCollationTimeZoneResponse
     */
    public function modifyCollationTimeZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collation)) {
            $query['Collation'] = $request->collation;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->timezone)) {
            $query['Timezone'] = $request->timezone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCollationTimeZone',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCollationTimeZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is phased out.
     *   *
     * @param ModifyCollationTimeZoneRequest $request ModifyCollationTimeZoneRequest
     *
     * @return ModifyCollationTimeZoneResponse ModifyCollationTimeZoneResponse
     */
    public function modifyCollationTimeZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCollationTimeZoneWithOptions($request, $runtime);
    }

    /**
     * > This operation is not applicable to instances that run PostgreSQL.
     *   *
     * @param ModifyDBDescriptionRequest $request ModifyDBDescriptionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBDescriptionResponse ModifyDBDescriptionResponse
     */
    public function modifyDBDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBDescription)) {
            $query['DBDescription'] = $request->DBDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
            'action'      => 'ModifyDBDescription',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is not applicable to instances that run PostgreSQL.
     *   *
     * @param ModifyDBDescriptionRequest $request ModifyDBDescriptionRequest
     *
     * @return ModifyDBDescriptionResponse ModifyDBDescriptionResponse
     */
    public function modifyDBDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBDescriptionWithOptions($request, $runtime);
    }

    /**
     * This operation is supported only for instances that run MySQL.
     *   *
     * @param ModifyDBInstanceAutoUpgradeMinorVersionRequest $request ModifyDBInstanceAutoUpgradeMinorVersionRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceAutoUpgradeMinorVersionResponse ModifyDBInstanceAutoUpgradeMinorVersionResponse
     */
    public function modifyDBInstanceAutoUpgradeMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoUpgradeMinorVersion)) {
            $query['AutoUpgradeMinorVersion'] = $request->autoUpgradeMinorVersion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'ModifyDBInstanceAutoUpgradeMinorVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceAutoUpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is supported only for instances that run MySQL.
     *   *
     * @param ModifyDBInstanceAutoUpgradeMinorVersionRequest $request ModifyDBInstanceAutoUpgradeMinorVersionRequest
     *
     * @return ModifyDBInstanceAutoUpgradeMinorVersionResponse ModifyDBInstanceAutoUpgradeMinorVersionResponse
     */
    public function modifyDBInstanceAutoUpgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAutoUpgradeMinorVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
            'action'      => 'ModifyDBInstanceConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > The API has been taken offline.
     *   *
     * @param ModifyDBInstanceConnectionModeRequest $request ModifyDBInstanceConnectionModeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConnectionModeResponse ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionMode)) {
            $query['ConnectionMode'] = $request->connectionMode;
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
            'action'      => 'ModifyDBInstanceConnectionMode',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The API has been taken offline.
     *   *
     * @param ModifyDBInstanceConnectionModeRequest $request ModifyDBInstanceConnectionModeRequest
     *
     * @return ModifyDBInstanceConnectionModeResponse ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionModeWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS provides the internal and public endpoints. ApsaraDB RDS also allows hybrid access by using both a virtual private cloud (VPC) endpoint and a classic network endpoint.
     *   * *   You can change only the prefix of an endpoint.
     *   * *   The read/write splitting endpoint cannot be changed.
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
        if (!Utils::isUnset($request->babelfishPort)) {
            $query['BabelfishPort'] = $request->babelfishPort;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->generalGroupName)) {
            $query['GeneralGroupName'] = $request->generalGroupName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->PGBouncerPort)) {
            $query['PGBouncerPort'] = $request->PGBouncerPort;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2014-08-15',
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
     * ApsaraDB RDS provides the internal and public endpoints. ApsaraDB RDS also allows hybrid access by using both a virtual private cloud (VPC) endpoint and a classic network endpoint.
     *   * *   You can change only the prefix of an endpoint.
     *   * *   The read/write splitting endpoint cannot be changed.
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
     * @param ModifyDBInstanceDelayedReplicationTimeRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ModifyDBInstanceDelayedReplicationTimeResponse
     */
    public function modifyDBInstanceDelayedReplicationTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readSQLReplicationTime)) {
            $query['ReadSQLReplicationTime'] = $request->readSQLReplicationTime;
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
            'action'      => 'ModifyDBInstanceDelayedReplicationTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceDelayedReplicationTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceDelayedReplicationTimeRequest $request
     *
     * @return ModifyDBInstanceDelayedReplicationTimeResponse
     */
    public function modifyDBInstanceDelayedReplicationTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDelayedReplicationTimeWithOptions($request, $runtime);
    }

    /**
     * For more information, see [Enable or disable the release protection feature for an ApsaraDB RDS for MySQL instance](~~414512~~).
     *   *
     * @param ModifyDBInstanceDeletionProtectionRequest $request ModifyDBInstanceDeletionProtectionRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceDeletionProtectionResponse ModifyDBInstanceDeletionProtectionResponse
     */
    public function modifyDBInstanceDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
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
            'action'      => 'ModifyDBInstanceDeletionProtection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information, see [Enable or disable the release protection feature for an ApsaraDB RDS for MySQL instance](~~414512~~).
     *   *
     * @param ModifyDBInstanceDeletionProtectionRequest $request ModifyDBInstanceDeletionProtectionRequest
     *
     * @return ModifyDBInstanceDeletionProtectionResponse ModifyDBInstanceDeletionProtectionResponse
     */
    public function modifyDBInstanceDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
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
            'action'      => 'ModifyDBInstanceDescription',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   When you modify information about the endpoint of an instance, you can modify the settings only of common parameters of the endpoint, such as the weight and description. This operation is called to manage an endpoint.
     *   *
     * @param ModifyDBInstanceEndpointRequest $tmpReq  ModifyDBInstanceEndpointRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceEndpointResponse ModifyDBInstanceEndpointResponse
     */
    public function modifyDBInstanceEndpointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDBInstanceEndpointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeItems)) {
            $request->nodeItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeItems, 'NodeItems', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointDescription)) {
            $query['DBInstanceEndpointDescription'] = $request->DBInstanceEndpointDescription;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointId)) {
            $query['DBInstanceEndpointId'] = $request->DBInstanceEndpointId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->nodeItemsShrink)) {
            $query['NodeItems'] = $request->nodeItemsShrink;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   When you modify information about the endpoint of an instance, you can modify the settings only of common parameters of the endpoint, such as the weight and description. This operation is called to manage an endpoint.
     *   *
     * @param ModifyDBInstanceEndpointRequest $request ModifyDBInstanceEndpointRequest
     *
     * @return ModifyDBInstanceEndpointResponse ModifyDBInstanceEndpointResponse
     */
    public function modifyDBInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   You can modify the following information about the endpoint of an instance: the public and internal endpoints, the public and internal ports, and the virtual private cloud (VPC), vSwitch, and IP address of the internal endpoint.
     *   * *   The VPC and vSwitch must be modified at the same time. If you specify the VPC, vSwitch, and IP address of the internal endpoint, you do not need to specify the endpoint and port. If you specify the endpoint and port of the internal endpoint, you do not need to specify the VPC, vSwitch, and IP address.
     *   *
     * @param ModifyDBInstanceEndpointAddressRequest $request ModifyDBInstanceEndpointAddressRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceEndpointAddressResponse ModifyDBInstanceEndpointAddressResponse
     */
    public function modifyDBInstanceEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceEndpointId)) {
            $query['DBInstanceEndpointId'] = $request->DBInstanceEndpointId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Background information
     *   * *   This operation is suitable only for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     *   * *   You can modify the following information about the endpoint of an instance: the public and internal endpoints, the public and internal ports, and the virtual private cloud (VPC), vSwitch, and IP address of the internal endpoint.
     *   * *   The VPC and vSwitch must be modified at the same time. If you specify the VPC, vSwitch, and IP address of the internal endpoint, you do not need to specify the endpoint and port. If you specify the endpoint and port of the internal endpoint, you do not need to specify the VPC, vSwitch, and IP address.
     *   *
     * @param ModifyDBInstanceEndpointAddressRequest $request ModifyDBInstanceEndpointAddressRequest
     *
     * @return ModifyDBInstanceEndpointAddressResponse ModifyDBInstanceEndpointAddressResponse
     */
    public function modifyDBInstanceEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceHAConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDBInstanceHAConfigResponse
     */
    public function modifyDBInstanceHAConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->HAMode)) {
            $query['HAMode'] = $request->HAMode;
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
        if (!Utils::isUnset($request->syncMode)) {
            $query['SyncMode'] = $request->syncMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceHAConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceHAConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceHAConfigRequest $request
     *
     * @return ModifyDBInstanceHAConfigResponse
     */
    public function modifyDBInstanceHAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceHAConfigWithOptions($request, $runtime);
    }

    /**
     * You can set the maintenance time to a period of time during off-peak hours. Alibaba Cloud performs routine maintenance within the maintenance time to minimize impacts on your business.
     *   *
     * @param ModifyDBInstanceMaintainTimeRequest $request ModifyDBInstanceMaintainTimeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceMaintainTimeResponse ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->maintainTime)) {
            $query['MaintainTime'] = $request->maintainTime;
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
            'action'      => 'ModifyDBInstanceMaintainTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can set the maintenance time to a period of time during off-peak hours. Alibaba Cloud performs routine maintenance within the maintenance time to minimize impacts on your business.
     *   *
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
     * ## Prerequisites
     *   * Before you call this operation, make sure that the instance runs PostgreSQL.
     *   * For more information, see [View the Enhanced Monitoring metrics of an ApsaraDB RDS for PostgreSQL instance](~~299200~~).
     *   *
     * @param ModifyDBInstanceMetricsRequest $request ModifyDBInstanceMetricsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceMetricsResponse ModifyDBInstanceMetricsResponse
     */
    public function modifyDBInstanceMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->metricsConfig)) {
            $query['MetricsConfig'] = $request->metricsConfig;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceMetrics',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * Before you call this operation, make sure that the instance runs PostgreSQL.
     *   * For more information, see [View the Enhanced Monitoring metrics of an ApsaraDB RDS for PostgreSQL instance](~~299200~~).
     *   *
     * @param ModifyDBInstanceMetricsRequest $request ModifyDBInstanceMetricsRequest
     *
     * @return ModifyDBInstanceMetricsResponse ModifyDBInstanceMetricsResponse
     */
    public function modifyDBInstanceMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMetricsWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * Alibaba Cloud provides different monitoring frequencies for different instances. For more information, see [Set monitoring frequencies](~~26200~~).
     *   * > * If your want to set the monitoring frequency to every few seconds, you are charged additional fees. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * > * This operation is not supported for ApsaraDB RDS for PostgreSQL instances. The monitoring frequency of an ApsaraDB RDS for PostgreSQL instance varies based on the query time range. For more information, see [Query performance metrics](~~26280~~).
     *   *
     * @param ModifyDBInstanceMonitorRequest $request ModifyDBInstanceMonitorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceMonitorResponse ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitorWithOptions($request, $runtime)
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
            'action'      => 'ModifyDBInstanceMonitor',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * Alibaba Cloud provides different monitoring frequencies for different instances. For more information, see [Set monitoring frequencies](~~26200~~).
     *   * > * If your want to set the monitoring frequency to every few seconds, you are charged additional fees. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * > * This operation is not supported for ApsaraDB RDS for PostgreSQL instances. The monitoring frequency of an ApsaraDB RDS for PostgreSQL instance varies based on the query time range. For more information, see [Query performance metrics](~~26280~~).
     *   *
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
     * When an ApsaraDB for RDS instance is in the hybrid access mode, which uses both a VPC endpoint and a classic network endpoint, this operation is used to extend the expiration time of the classic network endpoint.
     *   *
     * @param ModifyDBInstanceNetworkExpireTimeRequest $request ModifyDBInstanceNetworkExpireTimeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceNetworkExpireTimeResponse ModifyDBInstanceNetworkExpireTimeResponse
     */
    public function modifyDBInstanceNetworkExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classicExpiredDays)) {
            $query['ClassicExpiredDays'] = $request->classicExpiredDays;
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
            'action'      => 'ModifyDBInstanceNetworkExpireTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceNetworkExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When an ApsaraDB for RDS instance is in the hybrid access mode, which uses both a VPC endpoint and a classic network endpoint, this operation is used to extend the expiration time of the classic network endpoint.
     *   *
     * @param ModifyDBInstanceNetworkExpireTimeRequest $request ModifyDBInstanceNetworkExpireTimeRequest
     *
     * @return ModifyDBInstanceNetworkExpireTimeResponse ModifyDBInstanceNetworkExpireTimeResponse
     */
    public function modifyDBInstanceNetworkExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkExpireTimeWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * The network type of the instance is classic network.
     *   *
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
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->readWriteSplittingClassicExpiredDays)) {
            $query['ReadWriteSplittingClassicExpiredDays'] = $request->readWriteSplittingClassicExpiredDays;
        }
        if (!Utils::isUnset($request->readWriteSplittingPrivateIpAddress)) {
            $query['ReadWriteSplittingPrivateIpAddress'] = $request->readWriteSplittingPrivateIpAddress;
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
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceNetworkType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * The network type of the instance is classic network.
     *   *
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
     * This operation is used to change only the billing method of an instance from pay-as-you-go to subscription.
     *   * The following requirements must be met:
     *   * *   The instance belongs to the current account.
     *   * *   The instance uses one of the most recent instance types. For more information, see [Instance types](~~26312~~).
     *   *     **
     *   *     **Note**You cannot change the billing method of an instance that uses a phased-out instance type from pay-as-you-go to subscription. If you want to change the billing method of an instance that uses a phased-out instance type from pay-as-you-go to subscription, you must change the instance type of the instance to one of the most recent instance types. Then, you can change the billing method of the instance from pay-as-you-go to subscription. To change the instance type of an instance, you can change the instance specifications of the instance. For more information, see [Change the specifications of an ApsaraDB RDS instance](~~96061~~).
     *   * *   The instance uses the pay-as-you-go billing method and is in the Running state.
     *   * *   Your Alibaba Cloud account has no unpaid orders for the instance for which you want to change the billing method.
     *   *
     * @param ModifyDBInstancePayTypeRequest $request ModifyDBInstancePayTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstancePayTypeResponse ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstancePayType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to change only the billing method of an instance from pay-as-you-go to subscription.
     *   * The following requirements must be met:
     *   * *   The instance belongs to the current account.
     *   * *   The instance uses one of the most recent instance types. For more information, see [Instance types](~~26312~~).
     *   *     **
     *   *     **Note**You cannot change the billing method of an instance that uses a phased-out instance type from pay-as-you-go to subscription. If you want to change the billing method of an instance that uses a phased-out instance type from pay-as-you-go to subscription, you must change the instance type of the instance to one of the most recent instance types. Then, you can change the billing method of the instance from pay-as-you-go to subscription. To change the instance type of an instance, you can change the instance specifications of the instance. For more information, see [Change the specifications of an ApsaraDB RDS instance](~~96061~~).
     *   * *   The instance uses the pay-as-you-go billing method and is in the Running state.
     *   * *   Your Alibaba Cloud account has no unpaid orders for the instance for which you want to change the billing method.
     *   *
     * @param ModifyDBInstancePayTypeRequest $request ModifyDBInstancePayTypeRequest
     *
     * @return ModifyDBInstancePayTypeResponse ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * > This operation is phased out.
     *   *
     * @param ModifyDBInstanceProxyConfigurationRequest $request ModifyDBInstanceProxyConfigurationRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceProxyConfigurationResponse ModifyDBInstanceProxyConfigurationResponse
     */
    public function modifyDBInstanceProxyConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->proxyConfigurationKey)) {
            $query['ProxyConfigurationKey'] = $request->proxyConfigurationKey;
        }
        if (!Utils::isUnset($request->proxyConfigurationValue)) {
            $query['ProxyConfigurationValue'] = $request->proxyConfigurationValue;
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
            'action'      => 'ModifyDBInstanceProxyConfiguration',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceProxyConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is phased out.
     *   *
     * @param ModifyDBInstanceProxyConfigurationRequest $request ModifyDBInstanceProxyConfigurationRequest
     *
     * @return ModifyDBInstanceProxyConfigurationResponse ModifyDBInstanceProxyConfigurationResponse
     */
    public function modifyDBInstanceProxyConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * This operation is used to configure SSL encryption for an instance. For more information, see [](~~32474~~).
     *   * >
     *   * *   Before you call this operation, make sure that your instance is one of the following instances:
     *   *     *   ApsaraDB RDS for MySQL instances that do not run RDS Basic Edition
     *   *     *   ApsaraDB RDS for SQL Server instances
     *   *     *   ApsaraDB RDS for PostgreSQL instances that use cloud disks
     *   * *   SSL encryption is not supported for the connections to the read/write splitting endpoint of an instance.
     *   *
     * @param ModifyDBInstanceSSLRequest $request ModifyDBInstanceSSLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceSSLResponse ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ACL)) {
            $query['ACL'] = $request->ACL;
        }
        if (!Utils::isUnset($request->CAType)) {
            $query['CAType'] = $request->CAType;
        }
        if (!Utils::isUnset($request->clientCACert)) {
            $query['ClientCACert'] = $request->clientCACert;
        }
        if (!Utils::isUnset($request->clientCAEnabled)) {
            $query['ClientCAEnabled'] = $request->clientCAEnabled;
        }
        if (!Utils::isUnset($request->clientCertRevocationList)) {
            $query['ClientCertRevocationList'] = $request->clientCertRevocationList;
        }
        if (!Utils::isUnset($request->clientCrlEnabled)) {
            $query['ClientCrlEnabled'] = $request->clientCrlEnabled;
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
        if (!Utils::isUnset($request->replicationACL)) {
            $query['ReplicationACL'] = $request->replicationACL;
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
        if (!Utils::isUnset($request->serverCert)) {
            $query['ServerCert'] = $request->serverCert;
        }
        if (!Utils::isUnset($request->serverKey)) {
            $query['ServerKey'] = $request->serverKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSSL',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to configure SSL encryption for an instance. For more information, see [](~~32474~~).
     *   * >
     *   * *   Before you call this operation, make sure that your instance is one of the following instances:
     *   *     *   ApsaraDB RDS for MySQL instances that do not run RDS Basic Edition
     *   *     *   ApsaraDB RDS for SQL Server instances
     *   *     *   ApsaraDB RDS for PostgreSQL instances that use cloud disks
     *   * *   SSL encryption is not supported for the connections to the read/write splitting endpoint of an instance.
     *   *
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance has no ongoing backup tasks.
     *   * *   At least one of DBInstanceClass and DBInstanceStorage is specified in the request.
     *   * *   If you want to decrease the storage capacity, the new storage capacity that you specify must be greater than or equal to 1.1 times the used storage.
     *   * *   The instance is a primary instance or read-only instance.
     *   * > If you want to upgrade the RDS edition of the instance, you must select an instance type that supports the new RDS edition. For example, if you want to upgrade the RDS edition of the instance from RDS Basic Edition to RDS High-availability Edition, you must select an instance type that supports RDS High-availability Edition.
     *   *
     * @param ModifyDBInstanceSpecRequest $tmpReq  ModifyDBInstanceSpecRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceSpecResponse ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDBInstanceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverlessConfiguration)) {
            $request->serverlessConfigurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverlessConfiguration, 'ServerlessConfiguration', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->burstingEnabled)) {
            $query['BurstingEnabled'] = $request->burstingEnabled;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
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
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->serverlessConfigurationShrink)) {
            $query['ServerlessConfiguration'] = $request->serverlessConfigurationShrink;
        }
        if (!Utils::isUnset($request->sourceBiz)) {
            $query['SourceBiz'] = $request->sourceBiz;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->targetMinorVersion)) {
            $query['TargetMinorVersion'] = $request->targetMinorVersion;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSpec',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance has no ongoing backup tasks.
     *   * *   At least one of DBInstanceClass and DBInstanceStorage is specified in the request.
     *   * *   If you want to decrease the storage capacity, the new storage capacity that you specify must be greater than or equal to 1.1 times the used storage.
     *   * *   The instance is a primary instance or read-only instance.
     *   * > If you want to upgrade the RDS edition of the instance, you must select an instance type that supports the new RDS edition. For example, if you want to upgrade the RDS edition of the instance from RDS Basic Edition to RDS High-availability Edition, you must select an instance type that supports RDS High-availability Edition.
     *   *
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
     * TDE can perform real-time I/O encryption and decryption on data files. TDE encrypts data before the data is written to a disk, and decrypts data before the data is read from a disk and written to the memory. For more information, see [Configure TDE for an ApsaraDB RDS for MySQL instance](~~96121~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   Key Management Service (KMS) is activated. If KMS is not activated, you can activate KMS when you enable TDE.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 8.0 (with a minor engine version of 20191015 or later) on RDS High-availability Edition with local disks
     *   *     *   MySQL 5.7 (with a minor engine version of 20191015 or later) on RDS High-availability Edition with local disks
     *   *     *   MySQL 5.6
     *   *     *   SQL Server 2019 SE or an Enterprise Edition of SQL Server
     *   *     *   PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, PostgreSQL 15 with cloud disks and a minor engine version of 20221030 or later.
     *   *
     * @param ModifyDBInstanceTDERequest $request ModifyDBInstanceTDERequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceTDEResponse ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->isRotate)) {
            $query['IsRotate'] = $request->isRotate;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->passWord)) {
            $query['PassWord'] = $request->passWord;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
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
        if (!Utils::isUnset($request->TDEStatus)) {
            $query['TDEStatus'] = $request->TDEStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceTDE',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * TDE can perform real-time I/O encryption and decryption on data files. TDE encrypts data before the data is written to a disk, and decrypts data before the data is read from a disk and written to the memory. For more information, see [Configure TDE for an ApsaraDB RDS for MySQL instance](~~96121~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   Key Management Service (KMS) is activated. If KMS is not activated, you can activate KMS when you enable TDE.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 8.0 (with a minor engine version of 20191015 or later) on RDS High-availability Edition with local disks
     *   *     *   MySQL 5.7 (with a minor engine version of 20191015 or later) on RDS High-availability Edition with local disks
     *   *     *   MySQL 5.6
     *   *     *   SQL Server 2019 SE or an Enterprise Edition of SQL Server
     *   *     *   PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, PostgreSQL 15 with cloud disks and a minor engine version of 20221030 or later.
     *   *
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
     * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~)
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * If the instance runs MySQL, the instance must run one of the following MySQL versions and RDS editions:
     *   * *   MySQL 8.0 with a minor engine version of 20191204 or later on RDS Enterprise Edition
     *   * *   MySQL 8.0 with a minor engine version of 20190915 or later on RDS High-availability Edition
     *   * *   MySQL 5.7 with a minor engine version of 20191128 or later on RDS Enterprise Edition
     *   * *   MySQL 5.7 with a minor engine version of 20190925 or later on RDS High-availability Edition
     *   * *   MySQL 5.6 with a minor engine version of 20200229 or later on RDS High-availability Edition
     *   * If the instance runs PostgreSQL, the instance must meet the following requirements:
     *   * *   The instance runs PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15.
     *   * *   The instance uses cloud disks.
     *   * *   The instance runs RDS High-availability Edition.
     *   * *   The instance is a primary instance.
     *   *
     * @param ModifyDBProxyRequest $request ModifyDBProxyRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBProxyResponse ModifyDBProxyResponse
     */
    public function modifyDBProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configDBProxyService)) {
            $query['ConfigDBProxyService'] = $request->configDBProxyService;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->DBProxyInstanceNum)) {
            $query['DBProxyInstanceNum'] = $request->DBProxyInstanceNum;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
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
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBProxy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~)
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * If the instance runs MySQL, the instance must run one of the following MySQL versions and RDS editions:
     *   * *   MySQL 8.0 with a minor engine version of 20191204 or later on RDS Enterprise Edition
     *   * *   MySQL 8.0 with a minor engine version of 20190915 or later on RDS High-availability Edition
     *   * *   MySQL 5.7 with a minor engine version of 20191128 or later on RDS Enterprise Edition
     *   * *   MySQL 5.7 with a minor engine version of 20190925 or later on RDS High-availability Edition
     *   * *   MySQL 5.6 with a minor engine version of 20200229 or later on RDS High-availability Edition
     *   * If the instance runs PostgreSQL, the instance must meet the following requirements:
     *   * *   The instance runs PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, PostgreSQL 13, PostgreSQL 14, or PostgreSQL 15.
     *   * *   The instance uses cloud disks.
     *   * *   The instance runs RDS High-availability Edition.
     *   * *   The instance is a primary instance.
     *   *
     * @param ModifyDBProxyRequest $request ModifyDBProxyRequest
     *
     * @return ModifyDBProxyResponse ModifyDBProxyResponse
     */
    public function modifyDBProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyWithOptions($request, $runtime);
    }

    /**
     * Before you call the ModifyDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param ModifyDBProxyEndpointRequest $request ModifyDBProxyEndpointRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBProxyEndpointResponse ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configDBProxyFeatures)) {
            $query['ConfigDBProxyFeatures'] = $request->configDBProxyFeatures;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyEndpointId)) {
            $query['DBProxyEndpointId'] = $request->DBProxyEndpointId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->dbEndpointAliases)) {
            $query['DbEndpointAliases'] = $request->dbEndpointAliases;
        }
        if (!Utils::isUnset($request->dbEndpointOperator)) {
            $query['DbEndpointOperator'] = $request->dbEndpointOperator;
        }
        if (!Utils::isUnset($request->dbEndpointReadWriteMode)) {
            $query['DbEndpointReadWriteMode'] = $request->dbEndpointReadWriteMode;
        }
        if (!Utils::isUnset($request->dbEndpointType)) {
            $query['DbEndpointType'] = $request->dbEndpointType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readOnlyInstanceDistributionType)) {
            $query['ReadOnlyInstanceDistributionType'] = $request->readOnlyInstanceDistributionType;
        }
        if (!Utils::isUnset($request->readOnlyInstanceMaxDelayTime)) {
            $query['ReadOnlyInstanceMaxDelayTime'] = $request->readOnlyInstanceMaxDelayTime;
        }
        if (!Utils::isUnset($request->readOnlyInstanceWeight)) {
            $query['ReadOnlyInstanceWeight'] = $request->readOnlyInstanceWeight;
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
            'action'      => 'ModifyDBProxyEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the ModifyDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param ModifyDBProxyEndpointRequest $request ModifyDBProxyEndpointRequest
     *
     * @return ModifyDBProxyEndpointResponse ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyEndpointWithOptions($request, $runtime);
    }

    /**
     * After you enable the database proxy feature, a default proxy endpoint is generated. The proxy terminal feature is bound to the default proxy endpoint. You can create, modify, or delete a proxy endpoint.
     *   *
     * @param ModifyDBProxyEndpointAddressRequest $request ModifyDBProxyEndpointAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBProxyEndpointAddressResponse ModifyDBProxyEndpointAddressResponse
     */
    public function modifyDBProxyEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyConnectStringNetType)) {
            $query['DBProxyConnectStringNetType'] = $request->DBProxyConnectStringNetType;
        }
        if (!Utils::isUnset($request->DBProxyEndpointId)) {
            $query['DBProxyEndpointId'] = $request->DBProxyEndpointId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->DBProxyNewConnectString)) {
            $query['DBProxyNewConnectString'] = $request->DBProxyNewConnectString;
        }
        if (!Utils::isUnset($request->DBProxyNewConnectStringPort)) {
            $query['DBProxyNewConnectStringPort'] = $request->DBProxyNewConnectStringPort;
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
            'action'      => 'ModifyDBProxyEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you enable the database proxy feature, a default proxy endpoint is generated. The proxy terminal feature is bound to the default proxy endpoint. You can create, modify, or delete a proxy endpoint.
     *   *
     * @param ModifyDBProxyEndpointAddressRequest $request ModifyDBProxyEndpointAddressRequest
     *
     * @return ModifyDBProxyEndpointAddressResponse ModifyDBProxyEndpointAddressResponse
     */
    public function modifyDBProxyEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * Before you call the ModifyDBProxyInstance operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param ModifyDBProxyInstanceRequest $request ModifyDBProxyInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBProxyInstanceResponse ModifyDBProxyInstanceResponse
     */
    public function modifyDBProxyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->DBProxyInstanceNum)) {
            $query['DBProxyInstanceNum'] = $request->DBProxyInstanceNum;
        }
        if (!Utils::isUnset($request->DBProxyInstanceType)) {
            $query['DBProxyInstanceType'] = $request->DBProxyInstanceType;
        }
        if (!Utils::isUnset($request->effectiveSpecificTime)) {
            $query['EffectiveSpecificTime'] = $request->effectiveSpecificTime;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
            'action'      => 'ModifyDBProxyInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the ModifyDBProxyInstance operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param ModifyDBProxyInstanceRequest $request ModifyDBProxyInstanceRequest
     *
     * @return ModifyDBProxyInstanceResponse ModifyDBProxyInstanceResponse
     */
    public function modifyDBProxyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyInstanceWithOptions($request, $runtime);
    }

    /**
     * Distributed transaction whitelists allow for distributed transactions between an Elastic Compute Service (ECS) instance and an RDS instance. For more information, see [Configure a distributed transaction whitelist](~~124321~~).
     *   * This operation is applicable to instances that run one of the following SQL Server versions in the RDS High-Availability Edition: 2012 SE, 2012 EE, 2014 SE, 2016 SE, 2016 EE, and 2017 SE.
     *   *
     * @param ModifyDTCSecurityIpHostsForSQLServerRequest $request ModifyDTCSecurityIpHostsForSQLServerRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public function modifyDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityIpHosts)) {
            $query['SecurityIpHosts'] = $request->securityIpHosts;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->whiteListGroupName)) {
            $query['WhiteListGroupName'] = $request->whiteListGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDTCSecurityIpHostsForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDTCSecurityIpHostsForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Distributed transaction whitelists allow for distributed transactions between an Elastic Compute Service (ECS) instance and an RDS instance. For more information, see [Configure a distributed transaction whitelist](~~124321~~).
     *   * This operation is applicable to instances that run one of the following SQL Server versions in the RDS High-Availability Edition: 2012 SE, 2012 EE, 2014 SE, 2016 SE, 2016 EE, and 2017 SE.
     *   *
     * @param ModifyDTCSecurityIpHostsForSQLServerRequest $request ModifyDTCSecurityIpHostsForSQLServerRequest
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public function modifyDTCSecurityIpHostsForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * This operation is supported for ApsaraDB RDS for MySQL instances that run RDS High-availability Edition and use standard SSDs or enhanced SSDs (ESSDs) and ApsaraDB RDS for PostgreSQL instances that use standard SSDs or ESSDs. If the available storage reaches the specified threshold, ApsaraDB RDS increases the storage capacity of the instance to meet your storage requirements. In most cases, no transient connections occur during the expansion process. For more information, see [Configure automatic storage expansion for an ApsaraDB RDS for MySQL instance](~~173826~~) and [Configure automatic storage expansion for an ApsaraDB RDS for PostgreSQL instance](~~432496~~).
     *   * >  If an automatic storage expansion is triggered, ApsaraDB RDS increases the storage capacity based on the larger value between 15% of the purchased storage capacity and 5 GB.
     *   *
     * @param ModifyDasInstanceConfigRequest $request ModifyDasInstanceConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDasInstanceConfigResponse ModifyDasInstanceConfigResponse
     */
    public function modifyDasInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->storageAutoScale)) {
            $query['StorageAutoScale'] = $request->storageAutoScale;
        }
        if (!Utils::isUnset($request->storageThreshold)) {
            $query['StorageThreshold'] = $request->storageThreshold;
        }
        if (!Utils::isUnset($request->storageUpperBound)) {
            $query['StorageUpperBound'] = $request->storageUpperBound;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDasInstanceConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDasInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is supported for ApsaraDB RDS for MySQL instances that run RDS High-availability Edition and use standard SSDs or enhanced SSDs (ESSDs) and ApsaraDB RDS for PostgreSQL instances that use standard SSDs or ESSDs. If the available storage reaches the specified threshold, ApsaraDB RDS increases the storage capacity of the instance to meet your storage requirements. In most cases, no transient connections occur during the expansion process. For more information, see [Configure automatic storage expansion for an ApsaraDB RDS for MySQL instance](~~173826~~) and [Configure automatic storage expansion for an ApsaraDB RDS for PostgreSQL instance](~~432496~~).
     *   * >  If an automatic storage expansion is triggered, ApsaraDB RDS increases the storage capacity based on the larger value between 15% of the purchased storage capacity and 5 GB.
     *   *
     * @param ModifyDasInstanceConfigRequest $request ModifyDasInstanceConfigRequest
     *
     * @return ModifyDasInstanceConfigResponse ModifyDasInstanceConfigResponse
     */
    public function modifyDasInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDasInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * The system provides the dedicated proxy feature. You can configure SSL encryption for the dedicated proxy endpoint of an instance. This allows you to ensure the data security of the instance. For more information about the dedicated proxy feature, see [Dedicated proxy](~~138705~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The dedicated proxy feature is enabled for the instance.
     *   * *   The minor engine version that the dedicated proxies of the instance run is 1.12.8 or later.
     *   * *   Your RDS instance runs one of the following MySQL versions:
     *   *     *   MySQL 8.0 on RDS High-availability Edition with local disks. The minor engine version is 20200831 or later.
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local disks. The minor engine version is 20200831 or later.
     *   *     *   MySQL 5.6 on RDS High-availability Edition with local disks. The minor engine version is 20200831 or later.
     *   * > Calling this operation causes your instance to restart. Proceed with caution.
     *   *
     * @param ModifyDbProxyInstanceSslRequest $request ModifyDbProxyInstanceSslRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDbProxyInstanceSslResponse ModifyDbProxyInstanceSslResponse
     */
    public function modifyDbProxyInstanceSslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbProxyConnectString)) {
            $query['DbProxyConnectString'] = $request->dbProxyConnectString;
        }
        if (!Utils::isUnset($request->dbProxyEndpointId)) {
            $query['DbProxyEndpointId'] = $request->dbProxyEndpointId;
        }
        if (!Utils::isUnset($request->dbProxySslEnabled)) {
            $query['DbProxySslEnabled'] = $request->dbProxySslEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDbProxyInstanceSsl',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDbProxyInstanceSslResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The system provides the dedicated proxy feature. You can configure SSL encryption for the dedicated proxy endpoint of an instance. This allows you to ensure the data security of the instance. For more information about the dedicated proxy feature, see [Dedicated proxy](~~138705~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The dedicated proxy feature is enabled for the instance.
     *   * *   The minor engine version that the dedicated proxies of the instance run is 1.12.8 or later.
     *   * *   Your RDS instance runs one of the following MySQL versions:
     *   *     *   MySQL 8.0 on RDS High-availability Edition with local disks. The minor engine version is 20200831 or later.
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local disks. The minor engine version is 20200831 or later.
     *   *     *   MySQL 5.6 on RDS High-availability Edition with local disks. The minor engine version is 20200831 or later.
     *   * > Calling this operation causes your instance to restart. Proceed with caution.
     *   *
     * @param ModifyDbProxyInstanceSslRequest $request ModifyDbProxyInstanceSslRequest
     *
     * @return ModifyDbProxyInstanceSslResponse ModifyDbProxyInstanceSslResponse
     */
    public function modifyDbProxyInstanceSsl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDbProxyInstanceSslWithOptions($request, $runtime);
    }

    /**
     * By default, Alibaba Cloud uses persistent connections to check the availability of an instance. For more information, see [What is availability detection?](~~207467~~).
     *   *
     * @param ModifyHADiagnoseConfigRequest $request ModifyHADiagnoseConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHADiagnoseConfigResponse ModifyHADiagnoseConfigResponse
     */
    public function modifyHADiagnoseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->tcpConnectionType)) {
            $query['TcpConnectionType'] = $request->tcpConnectionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHADiagnoseConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHADiagnoseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, Alibaba Cloud uses persistent connections to check the availability of an instance. For more information, see [What is availability detection?](~~207467~~).
     *   *
     * @param ModifyHADiagnoseConfigRequest $request ModifyHADiagnoseConfigRequest
     *
     * @return ModifyHADiagnoseConfigResponse ModifyHADiagnoseConfigResponse
     */
    public function modifyHADiagnoseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHADiagnoseConfigWithOptions($request, $runtime);
    }

    /**
     * After a switchover is complete, the original primary RDS instance runs as the secondary RDS instance. For more information, see [Switch workloads over between primary and secondary ApsaraDB RDS for MySQL instances](~~96054~~).
     *   * Before you call this operation, make sure that the instance does not run the RDS Basic Edition.
     *   *
     * @param ModifyHASwitchConfigRequest $request ModifyHASwitchConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHASwitchConfigResponse ModifyHASwitchConfigResponse
     */
    public function modifyHASwitchConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->HAConfig)) {
            $query['HAConfig'] = $request->HAConfig;
        }
        if (!Utils::isUnset($request->manualHATime)) {
            $query['ManualHATime'] = $request->manualHATime;
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
            'action'      => 'ModifyHASwitchConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHASwitchConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a switchover is complete, the original primary RDS instance runs as the secondary RDS instance. For more information, see [Switch workloads over between primary and secondary ApsaraDB RDS for MySQL instances](~~96054~~).
     *   * Before you call this operation, make sure that the instance does not run the RDS Basic Edition.
     *   *
     * @param ModifyHASwitchConfigRequest $request ModifyHASwitchConfigRequest
     *
     * @return ModifyHASwitchConfigResponse ModifyHASwitchConfigResponse
     */
    public function modifyHASwitchConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHASwitchConfigWithOptions($request, $runtime);
    }

    /**
     * If you enable auto-renewal for your instance, you do not need to manually renew your subscription or be concerned about business interruptions caused by subscription expiration. For more information, see [Configure auto-renewal](~~96049~~).
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'ModifyInstanceAutoRenewalAttribute',
            'version'     => '2014-08-15',
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
     * If you enable auto-renewal for your instance, you do not need to manually renew your subscription or be concerned about business interruptions caused by subscription expiration. For more information, see [Configure auto-renewal](~~96049~~).
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param ModifyInstanceCrossBackupPolicyRequest $request ModifyInstanceCrossBackupPolicyRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceCrossBackupPolicyResponse ModifyInstanceCrossBackupPolicyResponse
     */
    public function modifyInstanceCrossBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupEnabled)) {
            $query['BackupEnabled'] = $request->backupEnabled;
        }
        if (!Utils::isUnset($request->crossBackupRegion)) {
            $query['CrossBackupRegion'] = $request->crossBackupRegion;
        }
        if (!Utils::isUnset($request->crossBackupType)) {
            $query['CrossBackupType'] = $request->crossBackupType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->logBackupEnabled)) {
            $query['LogBackupEnabled'] = $request->logBackupEnabled;
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
        if (!Utils::isUnset($request->retentType)) {
            $query['RetentType'] = $request->retentType;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceCrossBackupPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceCrossBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   *
     * @param ModifyInstanceCrossBackupPolicyRequest $request ModifyInstanceCrossBackupPolicyRequest
     *
     * @return ModifyInstanceCrossBackupPolicyResponse ModifyInstanceCrossBackupPolicyResponse
     */
    public function modifyInstanceCrossBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceCrossBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS for PostgreSQL allows you to modify the pg_hba.conf file based on your business requirements. For more information, see [Introduction to the pg_hba.conf file](https://www.postgresql.org/docs/11/auth-pg-hba-conf.html).
     *   * You can modify the information of the Active Directory (AD) domain controller in the pg_hba.conf file of an instance. Then, you can connect the instance to a self-managed AD domain. For more information, see [Connect an ApsaraDB RDS for PostgreSQL instance to a self-managed AD domain](~~349288~~).
     *   *
     * @param ModifyPGHbaConfigRequest $request ModifyPGHbaConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPGHbaConfigResponse ModifyPGHbaConfigResponse
     */
    public function modifyPGHbaConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->hbaItem)) {
            $query['HbaItem'] = $request->hbaItem;
        }
        if (!Utils::isUnset($request->opsType)) {
            $query['OpsType'] = $request->opsType;
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
            'action'      => 'ModifyPGHbaConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPGHbaConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS for PostgreSQL allows you to modify the pg_hba.conf file based on your business requirements. For more information, see [Introduction to the pg_hba.conf file](https://www.postgresql.org/docs/11/auth-pg-hba-conf.html).
     *   * You can modify the information of the Active Directory (AD) domain controller in the pg_hba.conf file of an instance. Then, you can connect the instance to a self-managed AD domain. For more information, see [Connect an ApsaraDB RDS for PostgreSQL instance to a self-managed AD domain](~~349288~~).
     *   *
     * @param ModifyPGHbaConfigRequest $request ModifyPGHbaConfigRequest
     *
     * @return ModifyPGHbaConfigResponse ModifyPGHbaConfigResponse
     */
    public function modifyPGHbaConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPGHbaConfigWithOptions($request, $runtime);
    }

    /**
     * You can modify the parameters directly or by using a parameter template. After you submit the parameter modification request, ApsaraDB RDS starts a task to apply the new parameter values to the instance. If a new parameter value takes effect only after the instance restarts, ApsaraDB RDS restarts the instance. For information about configurable parameters, see [Configure the parameters of an ApsaraDB RDS for MySQL instance](~~96063~~).
     *   * > Before the system runs a parameter modification task, the system checks whether the parameters exist, whether they are configurable, and whether the new parameter values are valid.
     *   *
     * @param ModifyParameterRequest $request ModifyParameterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParameterResponse ModifyParameterResponse
     */
    public function modifyParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->forcerestart)) {
            $query['Forcerestart'] = $request->forcerestart;
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameter',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can modify the parameters directly or by using a parameter template. After you submit the parameter modification request, ApsaraDB RDS starts a task to apply the new parameter values to the instance. If a new parameter value takes effect only after the instance restarts, ApsaraDB RDS restarts the instance. For information about configurable parameters, see [Configure the parameters of an ApsaraDB RDS for MySQL instance](~~96063~~).
     *   * > Before the system runs a parameter modification task, the system checks whether the parameters exist, whether they are configurable, and whether the new parameter values are valid.
     *   *
     * @param ModifyParameterRequest $request ModifyParameterRequest
     *
     * @return ModifyParameterResponse ModifyParameterResponse
     */
    public function modifyParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to an instance. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * > This operation is supported only when your instance runs MySQL or PostgreSQL.
     *   *
     * @param ModifyParameterGroupRequest $request ModifyParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParameterGroupResponse ModifyParameterGroupResponse
     */
    public function modifyParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
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
            'action'      => 'ModifyParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can configure a number of parameters at a time by using a parameter template and then apply the parameter template to an instance. For more information, see [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~) or [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
     *   * > This operation is supported only when your instance runs MySQL or PostgreSQL.
     *   *
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The read/write splitting feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local disks)
     *   *     *   MySQL 5.6
     *   *     *   SQL Server on RDS Cluster Edition.
     *   *
     * @param ModifyReadWriteSplittingConnectionRequest $request ModifyReadWriteSplittingConnectionRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyReadWriteSplittingConnectionResponse ModifyReadWriteSplittingConnectionResponse
     */
    public function modifyReadWriteSplittingConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->distributionType)) {
            $query['DistributionType'] = $request->distributionType;
        }
        if (!Utils::isUnset($request->maxDelayTime)) {
            $query['MaxDelayTime'] = $request->maxDelayTime;
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
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyReadWriteSplittingConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReadWriteSplittingConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The read/write splitting feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local disks)
     *   *     *   MySQL 5.6
     *   *     *   SQL Server on RDS Cluster Edition.
     *   *
     * @param ModifyReadWriteSplittingConnectionRequest $request ModifyReadWriteSplittingConnectionRequest
     *
     * @return ModifyReadWriteSplittingConnectionResponse ModifyReadWriteSplittingConnectionResponse
     */
    public function modifyReadWriteSplittingConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * You can specify the latency at which your primary RDS instance replicates data to a read-only instance. For more information, see [Set a replication delay for an RDS MySQL read-only instance](~~96056~~).
     *   *
     * @param ModifyReadonlyInstanceDelayReplicationTimeRequest $request ModifyReadonlyInstanceDelayReplicationTimeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public function modifyReadonlyInstanceDelayReplicationTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readSQLReplicationTime)) {
            $query['ReadSQLReplicationTime'] = $request->readSQLReplicationTime;
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
            'action'      => 'ModifyReadonlyInstanceDelayReplicationTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReadonlyInstanceDelayReplicationTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can specify the latency at which your primary RDS instance replicates data to a read-only instance. For more information, see [Set a replication delay for an RDS MySQL read-only instance](~~96056~~).
     *   *
     * @param ModifyReadonlyInstanceDelayReplicationTimeRequest $request ModifyReadonlyInstanceDelayReplicationTimeRequest
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public function modifyReadonlyInstanceDelayReplicationTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadonlyInstanceDelayReplicationTimeWithOptions($request, $runtime);
    }

    /**
     * Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475~~).
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'ModifyResourceGroup',
            'version'     => '2014-08-15',
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
     * Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475~~).
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL
     *   * > If you call this operation by using the credentials of a RAM user, the RAM user must have the read and write permissions such as AliyunRDSFullAccess on the instance. If the RAM user does not have the read and write permissions on the instance, the system displays a message stating that you do not have the permissions to call this operation. For more information about how to grant permissions to a RAM user, see [Use RAM to manage ApsaraDB RDS permissions](~~58932~~).
     *   *
     * @param ModifySQLCollectorPolicyRequest $request ModifySQLCollectorPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySQLCollectorPolicyResponse ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->SQLCollectorStatus)) {
            $query['SQLCollectorStatus'] = $request->SQLCollectorStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySQLCollectorPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL
     *   * > If you call this operation by using the credentials of a RAM user, the RAM user must have the read and write permissions such as AliyunRDSFullAccess on the instance. If the RAM user does not have the read and write permissions on the instance, the system displays a message stating that you do not have the permissions to call this operation. For more information about how to grant permissions to a RAM user, see [Use RAM to manage ApsaraDB RDS permissions](~~58932~~).
     *   *
     * @param ModifySQLCollectorPolicyRequest $request ModifySQLCollectorPolicyRequest
     *
     * @return ModifySQLCollectorPolicyResponse ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * The SQL explorer must be enabled for the instance.
     *   * The instance must run MySQL. For more information, see [SQL Explorer](~~96123~~).
     *   * >  After you shorten the log backup retention period, log backpack files that are stored longer than the specified log backup retention period are immediately deleted.
     *   *
     * @param ModifySQLCollectorRetentionRequest $request ModifySQLCollectorRetentionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySQLCollectorRetentionResponse ModifySQLCollectorRetentionResponse
     */
    public function modifySQLCollectorRetentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ModifySQLCollectorRetention',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySQLCollectorRetentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The SQL explorer must be enabled for the instance.
     *   * The instance must run MySQL. For more information, see [SQL Explorer](~~96123~~).
     *   * >  After you shorten the log backup retention period, log backpack files that are stored longer than the specified log backup retention period are immediately deleted.
     *   *
     * @param ModifySQLCollectorRetentionRequest $request ModifySQLCollectorRetentionRequest
     *
     * @return ModifySQLCollectorRetentionResponse ModifySQLCollectorRetentionResponse
     */
    public function modifySQLCollectorRetention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorRetentionWithOptions($request, $runtime);
    }

    /**
     * After an RDS instance is added to an ECS security group, all ECS instances in the security group can access the RDS instance. For more information, see [Configure a whitelist for an RDS instance](~~96118~~).
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
            'action'      => 'ModifySecurityGroupConfiguration',
            'version'     => '2014-08-15',
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
     * After an RDS instance is added to an ECS security group, all ECS instances in the security group can access the RDS instance. For more information, see [Configure a whitelist for an RDS instance](~~96118~~).
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
     * An IP address whitelist contains the IP addresses and CIDR blocks that are granted access to the instance. For more information about how to configure an IP address whitelist, see [Configure an IP address whitelist for an ApsaraDB RDS instance](~~96118~~).
     *   * > Before you call this operation, make sure that the instance is in the Running state. If the instance is not in the Running state, the operation fails.
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
        if (!Utils::isUnset($request->DBInstanceIPArrayAttribute)) {
            $query['DBInstanceIPArrayAttribute'] = $request->DBInstanceIPArrayAttribute;
        }
        if (!Utils::isUnset($request->DBInstanceIPArrayName)) {
            $query['DBInstanceIPArrayName'] = $request->DBInstanceIPArrayName;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->freshWhiteListReadins)) {
            $query['FreshWhiteListReadins'] = $request->freshWhiteListReadins;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityIPType)) {
            $query['SecurityIPType'] = $request->securityIPType;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        if (!Utils::isUnset($request->whitelistNetworkType)) {
            $query['WhitelistNetworkType'] = $request->whitelistNetworkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2014-08-15',
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
     * An IP address whitelist contains the IP addresses and CIDR blocks that are granted access to the instance. For more information about how to configure an IP address whitelist, see [Configure an IP address whitelist for an ApsaraDB RDS instance](~~96118~~).
     *   * > Before you call this operation, make sure that the instance is in the Running state. If the instance is not in the Running state, the operation fails.
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
     * @param ModifyWhitelistTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyWhitelistTemplateResponse
     */
    public function modifyWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipWhitelist)) {
            $query['IpWhitelist'] = $request->ipWhitelist;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWhitelistTemplate',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWhitelistTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWhitelistTemplateRequest $request
     *
     * @return ModifyWhitelistTemplateResponse
     */
    public function modifyWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS automatically uploads log backup files to Object Storage Service (OSS) buckets. If the remaining storage of an instance is insufficient, you can upload the log backup files of the instance to OSS buckets. After you upload the log backup files of an instance, ApsaraDB RDS deletes these files from the instance to release storage. This operation is called to upload log backup files from an instance to OSS buckets and then delete these files from the instance. If the instance runs SQL Server, transaction log backup files are compressed before they are uploaded. For more information about log backups, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~) or [Back up an ApsaraDB RDS for SQL Server instance](~~95717~~).
     *   * >
     *   * *   This operation is available only for instances that run MySQL or SQL Server.
     *   * *   When you upload log backup files, the data restoration feature is not affected.
     *   * *   This operation is called to release storage. The backup storage usage is not reduced.
     *   * *   The OSS buckets to which log backup files are uploaded are provided by ApsaraDB RDS. You do not need to purchase these OSS buckets. In addition, you cannot access these OSS buckets.
     *   *
     * @param PurgeDBInstanceLogRequest $request PurgeDBInstanceLogRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PurgeDBInstanceLogResponse PurgeDBInstanceLogResponse
     */
    public function purgeDBInstanceLogWithOptions($request, $runtime)
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
            'action'      => 'PurgeDBInstanceLog',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurgeDBInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS automatically uploads log backup files to Object Storage Service (OSS) buckets. If the remaining storage of an instance is insufficient, you can upload the log backup files of the instance to OSS buckets. After you upload the log backup files of an instance, ApsaraDB RDS deletes these files from the instance to release storage. This operation is called to upload log backup files from an instance to OSS buckets and then delete these files from the instance. If the instance runs SQL Server, transaction log backup files are compressed before they are uploaded. For more information about log backups, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~) or [Back up an ApsaraDB RDS for SQL Server instance](~~95717~~).
     *   * >
     *   * *   This operation is available only for instances that run MySQL or SQL Server.
     *   * *   When you upload log backup files, the data restoration feature is not affected.
     *   * *   This operation is called to release storage. The backup storage usage is not reduced.
     *   * *   The OSS buckets to which log backup files are uploaded are provided by ApsaraDB RDS. You do not need to purchase these OSS buckets. In addition, you cannot access these OSS buckets.
     *   *
     * @param PurgeDBInstanceLogRequest $request PurgeDBInstanceLogRequest
     *
     * @return PurgeDBInstanceLogResponse PurgeDBInstanceLogResponse
     */
    public function purgeDBInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeDBInstanceLogWithOptions($request, $runtime);
    }

    /**
     * The notifications are highlighted at the top of the ApsaraDB RDS console. The notifications include renewal reminders and reminders of instance creation failures.
     *   * After you call this operation to query notifications, you can call the [ConfirmNotify](~~428005~~) operation to mark the notifications as confirmed, which means that you understand the content of the notifications.
     *   *
     * @param QueryNotifyRequest $request QueryNotifyRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryNotifyResponse QueryNotifyResponse
     */
    public function queryNotifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->to)) {
            $body['To'] = $request->to;
        }
        if (!Utils::isUnset($request->withConfirmed)) {
            $body['WithConfirmed'] = $request->withConfirmed;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryNotify',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryNotifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The notifications are highlighted at the top of the ApsaraDB RDS console. The notifications include renewal reminders and reminders of instance creation failures.
     *   * After you call this operation to query notifications, you can call the [ConfirmNotify](~~428005~~) operation to mark the notifications as confirmed, which means that you understand the content of the notifications.
     *   *
     * @param QueryNotifyRequest $request QueryNotifyRequest
     *
     * @return QueryNotifyResponse QueryNotifyResponse
     */
    public function queryNotify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNotifyWithOptions($request, $runtime);
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param RebuildDBInstanceRequest $request RebuildDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RebuildDBInstanceResponse RebuildDBInstanceResponse
     */
    public function rebuildDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rebuildNodeType)) {
            $query['RebuildNodeType'] = $request->rebuildNodeType;
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
            'action'      => 'RebuildDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebuildDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dedicated clusters allow you to manage a number of instances at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
     *   *
     * @param RebuildDBInstanceRequest $request RebuildDBInstanceRequest
     *
     * @return RebuildDBInstanceResponse RebuildDBInstanceResponse
     */
    public function rebuildDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildDBInstanceWithOptions($request, $runtime);
    }

    /**
     * ## Prerequisites
     *   * A disaster recovery instance is created.
     *   *
     * @param ReceiveDBInstanceRequest $request ReceiveDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ReceiveDBInstanceResponse ReceiveDBInstanceResponse
     */
    public function receiveDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->guardDBInstanceId)) {
            $query['GuardDBInstanceId'] = $request->guardDBInstanceId;
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
            'action'      => 'ReceiveDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReceiveDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Prerequisites
     *   * A disaster recovery instance is created.
     *   *
     * @param ReceiveDBInstanceRequest $request ReceiveDBInstanceRequest
     *
     * @return ReceiveDBInstanceResponse ReceiveDBInstanceResponse
     */
    public function receiveDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->receiveDBInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to restore databases to a new instance or an existing instance. If you want to restore databases to an existing instance, we recommend that you call the [Copy databases](~~88810~~) operation.
     *   * If you want to restore databases to a new instance, you must create an instance and then restore specific or all databases to the new instance.
     *   * *   If you specify the name of a database, only the specified database is restored to the new instance.
     *   * *   If you do not specify the name of a database, all databases are restored to the new instance.
     *   * > This operation is supported only for instances that run SQL Server 2012 or later.
     *   *
     * @param RecoveryDBInstanceRequest $request RecoveryDBInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RecoveryDBInstanceResponse RecoveryDBInstanceResponse
     */
    public function recoveryDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
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
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->dbNames)) {
            $query['DbNames'] = $request->dbNames;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->targetDBInstanceId)) {
            $query['TargetDBInstanceId'] = $request->targetDBInstanceId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoveryDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoveryDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to restore databases to a new instance or an existing instance. If you want to restore databases to an existing instance, we recommend that you call the [Copy databases](~~88810~~) operation.
     *   * If you want to restore databases to a new instance, you must create an instance and then restore specific or all databases to the new instance.
     *   * *   If you specify the name of a database, only the specified database is restored to the new instance.
     *   * *   If you do not specify the name of a database, all databases are restored to the new instance.
     *   * > This operation is supported only for instances that run SQL Server 2012 or later.
     *   *
     * @param RecoveryDBInstanceRequest $request RecoveryDBInstanceRequest
     *
     * @return RecoveryDBInstanceResponse RecoveryDBInstanceResponse
     */
    public function recoveryDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceConnectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReleaseInstanceConnectionResponse
     */
    public function releaseInstanceConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
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
            'action'      => 'ReleaseInstanceConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceConnectionRequest $request
     *
     * @return ReleaseInstanceConnectionResponse
     */
    public function releaseInstanceConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceConnectionWithOptions($request, $runtime);
    }

    /**
     * To ensure data security, you can release the public endpoint when you do not need to access the database from the Internet.
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
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2014-08-15',
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
     * To ensure data security, you can release the public endpoint when you do not need to access the database from the Internet.
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   If the instance runs MySQL, the instance uses a shared proxy.
     *   * *   The read/write splitting feature is enabled for the instance.
     *   * *   The instance runs one of the following database versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.6
     *   *     *   SQL Server (cluster edition).
     *   *
     * @param ReleaseReadWriteSplittingConnectionRequest $request ReleaseReadWriteSplittingConnectionRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseReadWriteSplittingConnectionResponse ReleaseReadWriteSplittingConnectionResponse
     */
    public function releaseReadWriteSplittingConnectionWithOptions($request, $runtime)
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
            'action'      => 'ReleaseReadWriteSplittingConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseReadWriteSplittingConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   If the instance runs MySQL, the instance uses a shared proxy.
     *   * *   The read/write splitting feature is enabled for the instance.
     *   * *   The instance runs one of the following database versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local SSDs
     *   *     *   MySQL 5.6
     *   *     *   SQL Server (cluster edition).
     *   *
     * @param ReleaseReadWriteSplittingConnectionRequest $request ReleaseReadWriteSplittingConnectionRequest
     *
     * @return ReleaseReadWriteSplittingConnectionResponse ReleaseReadWriteSplittingConnectionResponse
     */
    public function releaseReadWriteSplittingConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * This operation has the following limits:
     *   * *   A maximum of 10 tags can be unbound in a single request.
     *   * *   If a tag is unbound from all of the instances to which the tag has been bound, the tag is automatically deleted.
     *   * *   If you specify only a TagKey, all tags that match the TagKey condition are unbound.
     *   * *   You must specify at least a TagKey or a set of a TagKey and a TagValue.
     *   *
     * @param RemoveTagsFromResourceRequest $request RemoveTagsFromResourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTagsFromResourceResponse RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResourceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTagsFromResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTagsFromResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation has the following limits:
     *   * *   A maximum of 10 tags can be unbound in a single request.
     *   * *   If a tag is unbound from all of the instances to which the tag has been bound, the tag is automatically deleted.
     *   * *   If you specify only a TagKey, all tags that match the TagKey condition are unbound.
     *   * *   You must specify at least a TagKey or a set of a TagKey and a TagValue.
     *   *
     * @param RemoveTagsFromResourceRequest $request RemoveTagsFromResourceRequest
     *
     * @return RemoveTagsFromResourceResponse RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsFromResourceWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is a subscription instance.
     *   * *   Your account supports credit card payments or balance payments.
     *   *     **
     *   *     **Note**By default, coupons available for your account are preferentially used for payment.
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'RenewInstance',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that you understand the billing methods and pricing of ApsaraDB RDS. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is a subscription instance.
     *   * *   Your account supports credit card payments or balance payments.
     *   *     **
     *   *     **Note**By default, coupons available for your account are preferentially used for payment.
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
     * **
     *   * **This operation is not supported for instances that run SQL Server 2008 R2 because they do not have privileged accounts.
     *   *
     * @param ResetAccountRequest $request ResetAccountRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountResponse ResetAccountResponse
     */
    public function resetAccountWithOptions($request, $runtime)
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
            'action'      => 'ResetAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   * **This operation is not supported for instances that run SQL Server 2008 R2 because they do not have privileged accounts.
     *   *
     * @param ResetAccountRequest $request ResetAccountRequest
     *
     * @return ResetAccountResponse ResetAccountResponse
     */
    public function resetAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the instance is in the Running state.
     *   * > If the instance runs SQL Server 2017 on RDS Cluster Edition or runs PostgreSQL, you cannot call this operation to reset the passwords of accounts that are created by using SQL statements.
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
            'action'      => 'ResetAccountPassword',
            'version'     => '2014-08-15',
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
     * Before you call this operation, make sure that the instance is in the Running state.
     *   * > If the instance runs SQL Server 2017 on RDS Cluster Edition or runs PostgreSQL, you cannot call this operation to reset the passwords of accounts that are created by using SQL statements.
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
     * If a large number of transactions need to be submitted or rolled back, the restart process may be delayed for a minute.\\
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing backup tasks.
     *   *
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
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
            'action'      => 'RestartDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If a large number of transactions need to be submitted or rolled back, the restart process may be delayed for a minute.\\
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing backup tasks.
     *   *
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
     * @param RestoreDdrTableRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreDdrTableResponse
     */
    public function restoreDdrTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->sourceDBInstanceName)) {
            $query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        }
        if (!Utils::isUnset($request->sourceRegion)) {
            $query['SourceRegion'] = $request->sourceRegion;
        }
        if (!Utils::isUnset($request->tableMeta)) {
            $query['TableMeta'] = $request->tableMeta;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreDdrTable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreDdrTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreDdrTableRequest $request
     *
     * @return RestoreDdrTableResponse
     */
    public function restoreDdrTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreDdrTableWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS for MySQL supports the restoration of individual databases and tables. If you delete databases or tables from an instance, you can restore the databases or tables by using a backup file. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing migration tasks.
     *   * *   If you want to restore data to a specific point in time, make sure that the log backup feature is enabled for the instance. For more information, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~).
     *   * *   The restoration of individual databases or tables is enabled, and new backups are created. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * *   The names that you want to use for the restored tables do not exist in the instance.
     *   * > This operation is supported only for instances that run MySQL.
     *   *
     * @param RestoreTableRequest $request RestoreTableRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreTableResponse RestoreTableResponse
     */
    public function restoreTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instantRecovery)) {
            $query['InstantRecovery'] = $request->instantRecovery;
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
        if (!Utils::isUnset($request->tableMeta)) {
            $query['TableMeta'] = $request->tableMeta;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreTable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS for MySQL supports the restoration of individual databases and tables. If you delete databases or tables from an instance, you can restore the databases or tables by using a backup file. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing migration tasks.
     *   * *   If you want to restore data to a specific point in time, make sure that the log backup feature is enabled for the instance. For more information, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~).
     *   * *   The restoration of individual databases or tables is enabled, and new backups are created. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * *   The names that you want to use for the restored tables do not exist in the instance.
     *   * > This operation is supported only for instances that run MySQL.
     *   *
     * @param RestoreTableRequest $request RestoreTableRequest
     *
     * @return RestoreTableResponse RestoreTableResponse
     */
    public function restoreTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreTableWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The database is in the Running state.
     *   * >
     *   * *   The permissions that can be revoked include SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, REFERENCES, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, and TRIGGER.
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition or PostgreSQL.
     *   *
     * @param RevokeAccountPrivilegeRequest $request RevokeAccountPrivilegeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeAccountPrivilegeResponse RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
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
            'action'      => 'RevokeAccountPrivilege',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The database is in the Running state.
     *   * >
     *   * *   The permissions that can be revoked include SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, REFERENCES, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, and TRIGGER.
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition or PostgreSQL.
     *   *
     * @param RevokeAccountPrivilegeRequest $request RevokeAccountPrivilegeRequest
     *
     * @return RevokeAccountPrivilegeResponse RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * After Alibaba Cloud technical support resolves the issues on your instance, you can revoke permissions from the service account of your instance.
     *   * This operation is available only when your instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL.
     *   *
     * @param RevokeOperatorPermissionRequest $request RevokeOperatorPermissionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeOperatorPermissionResponse RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermissionWithOptions($request, $runtime)
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
            'action'      => 'RevokeOperatorPermission',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After Alibaba Cloud technical support resolves the issues on your instance, you can revoke permissions from the service account of your instance.
     *   * This operation is available only when your instance runs one of the following database engines:
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   PostgreSQL.
     *   *
     * @param RevokeOperatorPermissionRequest $request RevokeOperatorPermissionRequest
     *
     * @return RevokeOperatorPermissionResponse RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @param StartDBInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartDBInstanceResponse
     */
    public function startDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceTransType)) {
            $query['DBInstanceTransType'] = $request->DBInstanceTransType;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
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
        if (!Utils::isUnset($request->specifiedTime)) {
            $query['SpecifiedTime'] = $request->specifiedTime;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->targetDBInstanceClass)) {
            $query['TargetDBInstanceClass'] = $request->targetDBInstanceClass;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForLog)) {
            $query['TargetDedicatedHostIdForLog'] = $request->targetDedicatedHostIdForLog;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForMaster)) {
            $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        }
        if (!Utils::isUnset($request->targetDedicatedHostIdForSlave)) {
            $query['TargetDedicatedHostIdForSlave'] = $request->targetDedicatedHostIdForSlave;
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
            'action'      => 'StartDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartDBInstanceRequest $request
     *
     * @return StartDBInstanceResponse
     */
    public function startDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDBInstanceWithOptions($request, $runtime);
    }

    /**
     * *   You cannot stop a serverless ApsaraDB RDS for MySQL instance because serverless instances support the automatic start and stop feature. For more information, see [Configure a serverless instance](~~421557~~).
     *   * *   For more information about how to stop an ApsaraDB RDS for MySQL instance, see [Suspend an instance](~~427093~~).
     *   * *   For more information about how to stop an ApsaraDB RDS for PostgreSQL instance, see [Suspend an instance](~~452314~~).
     *   * *   For more information about how to stop a ApsaraDB RDS for SQL Server instance, see [Suspend an instance](~~462504~~).
     *   * *   The following list describes the usage notes when you stop an instance that is created in a dedicated cluster:
     *   *     *   After you stop an instance, the computing resources of the instance are released. However, the data of the instance is retained. The retained data can be used to start the instance.
     *   *     *   When you stop an instance, all the read-only instances that are attached to the instance are stopped at the same time.
     *   *     *   After you stop an instance, the storage resources of the instance are still retained. You do not need to pay extra fees for the storage of the retained data.
     *   *
     * @param StopDBInstanceRequest $request StopDBInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDBInstanceResponse StopDBInstanceResponse
     */
    public function stopDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'StopDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You cannot stop a serverless ApsaraDB RDS for MySQL instance because serverless instances support the automatic start and stop feature. For more information, see [Configure a serverless instance](~~421557~~).
     *   * *   For more information about how to stop an ApsaraDB RDS for MySQL instance, see [Suspend an instance](~~427093~~).
     *   * *   For more information about how to stop an ApsaraDB RDS for PostgreSQL instance, see [Suspend an instance](~~452314~~).
     *   * *   For more information about how to stop a ApsaraDB RDS for SQL Server instance, see [Suspend an instance](~~462504~~).
     *   * *   The following list describes the usage notes when you stop an instance that is created in a dedicated cluster:
     *   *     *   After you stop an instance, the computing resources of the instance are released. However, the data of the instance is retained. The retained data can be used to start the instance.
     *   *     *   When you stop an instance, all the read-only instances that are attached to the instance are stopped at the same time.
     *   *     *   After you stop an instance, the storage resources of the instance are still retained. You do not need to pay extra fees for the storage of the retained data.
     *   *
     * @param StopDBInstanceRequest $request StopDBInstanceRequest
     *
     * @return StopDBInstanceResponse StopDBInstanceResponse
     */
    public function stopDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDBInstanceWithOptions($request, $runtime);
    }

    /**
     * This operation switches workloads over between the primary and secondary instances that do not run RDS Basic Edition. After the switchover, the secondary instance serves as the primary instance.
     *   *
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
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
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
            'action'      => 'SwitchDBInstanceHA',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation switches workloads over between the primary and secondary instances that do not run RDS Basic Edition. After the switchover, the secondary instance serves as the primary instance.
     *   *
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
     * To save endpoint resources, you can call this operation to switch an instance between its internal and public endpoints. After the endpoint that is used to connect to the instance is changed, you must update the endpoint information in the code of your application and restart the application.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is connected by using its internal or public endpoint.
     *   * *   The instance is in the Running state.
     *   * *   The number of times that you have switched the instance between its internal and public endpoints within the last 24 hours does not reach 20.
     *   * *   The instance resides in the classic network.
     *   *
     * @param SwitchDBInstanceNetTypeRequest $request SwitchDBInstanceNetTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchDBInstanceNetTypeResponse SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->connectionStringType)) {
            $query['ConnectionStringType'] = $request->connectionStringType;
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'SwitchDBInstanceNetType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To save endpoint resources, you can call this operation to switch an instance between its internal and public endpoints. After the endpoint that is used to connect to the instance is changed, you must update the endpoint information in the code of your application and restart the application.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is connected by using its internal or public endpoint.
     *   * *   The instance is in the Running state.
     *   * *   The number of times that you have switched the instance between its internal and public endpoints within the last 24 hours does not reach 20.
     *   * *   The instance resides in the classic network.
     *   *
     * @param SwitchDBInstanceNetTypeRequest $request SwitchDBInstanceNetTypeRequest
     *
     * @return SwitchDBInstanceNetTypeResponse SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceNetTypeWithOptions($request, $runtime);
    }

    /**
     * The instance must run one of the following database engines:
     *   * *   MySQL with local SSDs, standard SSDs, or enhanced ESSDs (ESSDs)
     *   * *   SQL Server with standard SSDs or ESSDs
     *   * *   MariaDB with standard SSDs or ESSDs
     *   * *   PostgreSQL with standard SSDs or ESSDs
     *   * For more information about the impact of VPC and vSwitch changes, see [Switch an ApsaraDB RDS for MySQL instance to a new VPC and a new vSwitch](~~137567~~).
     *   *
     * @param SwitchDBInstanceVpcRequest $request SwitchDBInstanceVpcRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchDBInstanceVpcResponse SwitchDBInstanceVpcResponse
     */
    public function switchDBInstanceVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceVpc',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The instance must run one of the following database engines:
     *   * *   MySQL with local SSDs, standard SSDs, or enhanced ESSDs (ESSDs)
     *   * *   SQL Server with standard SSDs or ESSDs
     *   * *   MariaDB with standard SSDs or ESSDs
     *   * *   PostgreSQL with standard SSDs or ESSDs
     *   * For more information about the impact of VPC and vSwitch changes, see [Switch an ApsaraDB RDS for MySQL instance to a new VPC and a new vSwitch](~~137567~~).
     *   *
     * @param SwitchDBInstanceVpcRequest $request SwitchDBInstanceVpcRequest
     *
     * @return SwitchDBInstanceVpcResponse SwitchDBInstanceVpcResponse
     */
    public function switchDBInstanceVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceVpcWithOptions($request, $runtime);
    }

    /**
     * @param SwitchGuardToMasterInstanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SwitchGuardToMasterInstanceResponse
     */
    public function switchGuardToMasterInstanceWithOptions($request, $runtime)
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
            'action'      => 'SwitchGuardToMasterInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchGuardToMasterInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchGuardToMasterInstanceRequest $request
     *
     * @return SwitchGuardToMasterInstanceResponse
     */
    public function switchGuardToMasterInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGuardToMasterInstanceWithOptions($request, $runtime);
    }

    /**
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter these instances by tag.
     *   * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     *   * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     *   * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     *   * *   You can add up to 20 tags to an instance.
     *   * *   You can add tags to up to 50 instances in each call.
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
            'version'     => '2014-08-15',
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
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can filter these instances by tag.
     *   * *   A tag consists of a key and a value. Each key must be unique in a region for an Alibaba Cloud account. Different keys can be mapped to the same value.
     *   * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     *   * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     *   * *   You can add up to 20 tags to an instance.
     *   * *   You can add tags to up to 50 instances in each call.
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
     * @param TerminateMigrateTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TerminateMigrateTaskResponse
     */
    public function terminateMigrateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->migrateTaskId)) {
            $query['MigrateTaskId'] = $request->migrateTaskId;
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
            'action'      => 'TerminateMigrateTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateMigrateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TerminateMigrateTaskRequest $request
     *
     * @return TerminateMigrateTaskResponse
     */
    public function terminateMigrateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateMigrateTaskWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If you change the billing method of an instance from subscription to pay-as-you-go, a refund may be provided. The refund amount is equal to the remaining subscription fee deducted by an amount of service fee. For more information, see [Switch an ApsaraDB RDS for MySQL instance from subscription to pay-as-you-go](~~161875~~).
     *   * *   If the balance of your Alibaba Cloud account is insufficient, you cannot change the billing method of an instance from pay-as-you-go to subscription.
     *   * *   This operation is not supported for instances whose specification change orders are not completed.
     *   * *   This operation is not supported for instances that are created in dedicated clusters.
     *   * ApsaraDB RDS supports the following two billing methods:
     *   * *   Subscription: A subscription instance is an instance for which you pay an upfront fee. For long-term use, the subscription billing method is more cost-effective than the pay-as-you-go billing method. You are offered lower prices for longer subscription durations.
     *   * *   Pay-as-you-go: A pay-as-you-go instance is an instance for which you are charged per hour based on your resource usage. The hourly fee is calculated based on the instance type that you specify in the purchase order and is deducted from the balance of your Alibaba Cloud account. We recommend that you select the pay-as-you-go billing method for short-term use. If you no longer need your pay-as-you-go instance, you can release the instance to reduce costs.
     *   * For more information about the billing methods, see [Pricing, billable items, and billing methods](~~45020~~).
     *   *
     * @param TransformDBInstancePayTypeRequest $request TransformDBInstancePayTypeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return TransformDBInstancePayTypeResponse TransformDBInstancePayTypeResponse
     */
    public function transformDBInstancePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransformDBInstancePayType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformDBInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If you change the billing method of an instance from subscription to pay-as-you-go, a refund may be provided. The refund amount is equal to the remaining subscription fee deducted by an amount of service fee. For more information, see [Switch an ApsaraDB RDS for MySQL instance from subscription to pay-as-you-go](~~161875~~).
     *   * *   If the balance of your Alibaba Cloud account is insufficient, you cannot change the billing method of an instance from pay-as-you-go to subscription.
     *   * *   This operation is not supported for instances whose specification change orders are not completed.
     *   * *   This operation is not supported for instances that are created in dedicated clusters.
     *   * ApsaraDB RDS supports the following two billing methods:
     *   * *   Subscription: A subscription instance is an instance for which you pay an upfront fee. For long-term use, the subscription billing method is more cost-effective than the pay-as-you-go billing method. You are offered lower prices for longer subscription durations.
     *   * *   Pay-as-you-go: A pay-as-you-go instance is an instance for which you are charged per hour based on your resource usage. The hourly fee is calculated based on the instance type that you specify in the purchase order and is deducted from the balance of your Alibaba Cloud account. We recommend that you select the pay-as-you-go billing method for short-term use. If you no longer need your pay-as-you-go instance, you can release the instance to reduce costs.
     *   * For more information about the billing methods, see [Pricing, billable items, and billing methods](~~45020~~).
     *   *
     * @param TransformDBInstancePayTypeRequest $request TransformDBInstancePayTypeRequest
     *
     * @return TransformDBInstancePayTypeResponse TransformDBInstancePayTypeResponse
     */
    public function transformDBInstancePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformDBInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * You cannot use a locked account to log on to the corresponding instance. You must first unlock the account. For more information, see [Unlock and delete an account](~~147649~~).
     *   *
     * @param UnlockAccountRequest $request UnlockAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockAccountResponse UnlockAccountResponse
     */
    public function unlockAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'UnlockAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot use a locked account to log on to the corresponding instance. You must first unlock the account. For more information, see [Unlock and delete an account](~~147649~~).
     *   *
     * @param UnlockAccountRequest $request UnlockAccountRequest
     *
     * @return UnlockAccountResponse UnlockAccountResponse
     */
    public function unlockAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockAccountWithOptions($request, $runtime);
    }

    /**
     * > *   You can remove up to 20 tags at a time.
     *   * > *   If a tag is removed from an instance and is not added to other instances, the tag is automatically deleted.
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
            'version'     => '2014-08-15',
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
     * > *   You can remove up to 20 tags at a time.
     *   * > *   If a tag is removed from an instance and is not added to other instances, the tag is automatically deleted.
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

    /**
     * @param UpdatePostgresExtensionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdatePostgresExtensionsResponse
     */
    public function updatePostgresExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNames)) {
            $query['DBNames'] = $request->DBNames;
        }
        if (!Utils::isUnset($request->extensions)) {
            $query['Extensions'] = $request->extensions;
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
            'action'      => 'UpdatePostgresExtensions',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePostgresExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePostgresExtensionsRequest $request
     *
     * @return UpdatePostgresExtensionsResponse
     */
    public function updatePostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * > A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   *
     * @param UpdateUserBackupFileRequest $request UpdateUserBackupFileRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserBackupFileResponse UpdateUserBackupFileResponse
     */
    public function updateUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
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
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   *
     * @param UpdateUserBackupFileRequest $request UpdateUserBackupFileRequest
     *
     * @return UpdateUserBackupFileResponse UpdateUserBackupFileResponse
     */
    public function updateUserBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserBackupFileWithOptions($request, $runtime);
    }

    /**
     * > The fee that you must pay after the upgrade varies based on the instance types and storage types of the original instance and the new instance.
     *   * If the instance is a primary instance to which read-only instances or disaster recovery instances are attached, you must upgrade the major engine versions of the read-only instances or disaster recovery instances before you upgrade the major engine version of the primary instance.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance runs one of the following database versions:
     *   *     *   MySQL 5.7
     *   *     *   MySQL 5.6
     *   *     *   MySQL 5.5
     *   * You can call the [UpgradeDBInstanceMajorVersion](~~330972~~) operation to upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance.
     *   *
     * @param UpgradeDBInstanceEngineVersionRequest $request UpgradeDBInstanceEngineVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceEngineVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > The fee that you must pay after the upgrade varies based on the instance types and storage types of the original instance and the new instance.
     *   * If the instance is a primary instance to which read-only instances or disaster recovery instances are attached, you must upgrade the major engine versions of the read-only instances or disaster recovery instances before you upgrade the major engine version of the primary instance.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance runs one of the following database versions:
     *   *     *   MySQL 5.7
     *   *     *   MySQL 5.6
     *   *     *   MySQL 5.5
     *   * You can call the [UpgradeDBInstanceMajorVersion](~~330972~~) operation to upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance.
     *   *
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
     * An update to the minor engine version enhances performance, introduces new features, and fixes known bugs. For more information, see [Update the minor engine version of an ApsaraDB RDS for MySQL instance](~~96059~~), [Update the minor engine version of an ApsaraDB RDS for SQL Server instance](~~213582~~), and [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](~~146895~~).
     *   * > This operation is supported for instances that run MySQL, SQL Server, or PostgreSQL.
     *   *
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->targetMinorVersion)) {
            $query['TargetMinorVersion'] = $request->targetMinorVersion;
        }
        if (!Utils::isUnset($request->upgradeTime)) {
            $query['UpgradeTime'] = $request->upgradeTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceKernelVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An update to the minor engine version enhances performance, introduces new features, and fixes known bugs. For more information, see [Update the minor engine version of an ApsaraDB RDS for MySQL instance](~~96059~~), [Update the minor engine version of an ApsaraDB RDS for SQL Server instance](~~213582~~), and [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](~~146895~~).
     *   * > This operation is supported for instances that run MySQL, SQL Server, or PostgreSQL.
     *   *
     * @param UpgradeDBInstanceKernelVersionRequest $request UpgradeDBInstanceKernelVersionRequest
     *
     * @return UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }

    /**
     * During an upgrade, ApsaraDB RDS retains the original instance and creates an instance that runs the new major engine version. You are **charged** for the new instance based on the **pay-as-you-go** billing method after the instance is created. The new instance **does not inherit the discounts that are offered to the original instance**. Before you call this operation, make sure that you fully understand the billing methods and pricing of ApsaraDB RDS. You can decide whether to upgrade the major engine version based on your business requirements. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * Before you upgrade the major engine version, you must call the [UpgradeDBInstanceMajorVersionPrecheck](~~330050~~) operation to perform an upgrade check and then call the [DescribeUpgradeMajorVersionPrecheckTask](~~330088~~) operation to query the upgrade check report. You can call the UpgradeDBInstanceMajorVersion operation only when the check result is **Success**.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The original instance runs PostgreSQL 14, PostgreSQL 13, PostgreSQL 12, PostgreSQL 11, PostgreSQL 10, or PostgreSQL 9.4.
     *   * *   The instance runs RDS High-availability Edition or RDS Basic Edition.
     *   * *   The instance resides in a virtual private cloud (VPC). If the instance resides in the classic network, you must migrate the instance to a VPC before you call this operation. For more information about how to view or change the network type of an instance, see [Change the network type of an ApsaraDB RDS for PostgreSQL instance](~~96761~~).
     *   * *   The instance is not a read-only instance and is not created in a dedicated cluster.
     *   * An upgrade causes impacts such as a transient connection that lasts a few minutes. We recommend that you perform an upgrade during off-peak hours. Before you perform an upgrade, we recommend that you read the description in [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
     *   *
     * @param UpgradeDBInstanceMajorVersionRequest $request UpgradeDBInstanceMajorVersionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceMajorVersionResponse UpgradeDBInstanceMajorVersionResponse
     */
    public function upgradeDBInstanceMajorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collectStatMode)) {
            $query['CollectStatMode'] = $request->collectStatMode;
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
        if (!Utils::isUnset($request->DBInstanceStorageType)) {
            $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchOver)) {
            $query['SwitchOver'] = $request->switchOver;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        if (!Utils::isUnset($request->targetMajorVersion)) {
            $query['TargetMajorVersion'] = $request->targetMajorVersion;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIdSlave1)) {
            $query['ZoneIdSlave1'] = $request->zoneIdSlave1;
        }
        if (!Utils::isUnset($request->zoneIdSlave2)) {
            $query['ZoneIdSlave2'] = $request->zoneIdSlave2;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceMajorVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceMajorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * During an upgrade, ApsaraDB RDS retains the original instance and creates an instance that runs the new major engine version. You are **charged** for the new instance based on the **pay-as-you-go** billing method after the instance is created. The new instance **does not inherit the discounts that are offered to the original instance**. Before you call this operation, make sure that you fully understand the billing methods and pricing of ApsaraDB RDS. You can decide whether to upgrade the major engine version based on your business requirements. For more information, see [Billable items, billing methods, and pricing](~~45020~~).
     *   * Before you upgrade the major engine version, you must call the [UpgradeDBInstanceMajorVersionPrecheck](~~330050~~) operation to perform an upgrade check and then call the [DescribeUpgradeMajorVersionPrecheckTask](~~330088~~) operation to query the upgrade check report. You can call the UpgradeDBInstanceMajorVersion operation only when the check result is **Success**.
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The original instance runs PostgreSQL 14, PostgreSQL 13, PostgreSQL 12, PostgreSQL 11, PostgreSQL 10, or PostgreSQL 9.4.
     *   * *   The instance runs RDS High-availability Edition or RDS Basic Edition.
     *   * *   The instance resides in a virtual private cloud (VPC). If the instance resides in the classic network, you must migrate the instance to a VPC before you call this operation. For more information about how to view or change the network type of an instance, see [Change the network type of an ApsaraDB RDS for PostgreSQL instance](~~96761~~).
     *   * *   The instance is not a read-only instance and is not created in a dedicated cluster.
     *   * An upgrade causes impacts such as a transient connection that lasts a few minutes. We recommend that you perform an upgrade during off-peak hours. Before you perform an upgrade, we recommend that you read the description in [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
     *   *
     * @param UpgradeDBInstanceMajorVersionRequest $request UpgradeDBInstanceMajorVersionRequest
     *
     * @return UpgradeDBInstanceMajorVersionResponse UpgradeDBInstanceMajorVersionResponse
     */
    public function upgradeDBInstanceMajorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceMajorVersionWithOptions($request, $runtime);
    }

    /**
     * ApsaraDB RDS for PostgreSQL provides the major version upgrade feature. You can use this feature to upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance.
     *   * Before you perform an upgrade, you must perform an upgrade check and make sure that the check result is **Success**. You can call this operation to perform an upgrade check.
     *   * An upgrade brings impacts, such as a transient connection that lasts a few minutes. We recommend that you perform an upgrade during off-peak hours. Before you perform an upgrade, we recommend that you read [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
     *   *
     * @param UpgradeDBInstanceMajorVersionPrecheckRequest $request UpgradeDBInstanceMajorVersionPrecheckRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceMajorVersionPrecheckResponse UpgradeDBInstanceMajorVersionPrecheckResponse
     */
    public function upgradeDBInstanceMajorVersionPrecheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->targetMajorVersion)) {
            $query['TargetMajorVersion'] = $request->targetMajorVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceMajorVersionPrecheck',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceMajorVersionPrecheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraDB RDS for PostgreSQL provides the major version upgrade feature. You can use this feature to upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance.
     *   * Before you perform an upgrade, you must perform an upgrade check and make sure that the check result is **Success**. You can call this operation to perform an upgrade check.
     *   * An upgrade brings impacts, such as a transient connection that lasts a few minutes. We recommend that you perform an upgrade during off-peak hours. Before you perform an upgrade, we recommend that you read [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
     *   *
     * @param UpgradeDBInstanceMajorVersionPrecheckRequest $request UpgradeDBInstanceMajorVersionPrecheckRequest
     *
     * @return UpgradeDBInstanceMajorVersionPrecheckResponse UpgradeDBInstanceMajorVersionPrecheckResponse
     */
    public function upgradeDBInstanceMajorVersionPrecheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceMajorVersionPrecheckWithOptions($request, $runtime);
    }

    /**
     * Before you call the ModifyDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param UpgradeDBProxyInstanceKernelVersionRequest $request UpgradeDBProxyInstanceKernelVersionRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse UpgradeDBProxyInstanceKernelVersionResponse
     */
    public function upgradeDBProxyInstanceKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBProxyEngineType)) {
            $query['DBProxyEngineType'] = $request->DBProxyEngineType;
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->upgradeTime)) {
            $query['UpgradeTime'] = $request->upgradeTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBProxyInstanceKernelVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBProxyInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the ModifyDBProxyEndpoint operation, make sure that the [ModifyDBProxy](~~141054~~) operation is called to enable the database proxy feature for the instance.
     *   * *   The dedicated proxy feature of ApsaraDB RDS for MySQL provides capabilities such as read/write splitting and short-lived connection optimization. For more information, see [What are database proxies?](~~138705~~)
     *   * *   The database proxy feature of ApsaraDB RDS for PostgreSQL supports read/write splitting. For more information, see [What are database proxies?](~~412194~~).
     *   *
     * @param UpgradeDBProxyInstanceKernelVersionRequest $request UpgradeDBProxyInstanceKernelVersionRequest
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse UpgradeDBProxyInstanceKernelVersionResponse
     */
    public function upgradeDBProxyInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBProxyInstanceKernelVersionWithOptions($request, $runtime);
    }
}
