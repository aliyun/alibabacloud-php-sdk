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
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOrderForCreateDBNodesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOrderForCreateDBNodesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOrderForCreateDBNodesShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOrderForDeleteDBNodesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOrderForDeleteDBNodesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOrderForDeleteDBNodesShrinkRequest;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateYouhuiForOrderRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateYouhuiForOrderResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCurrentModifyOrderRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCurrentModifyOrderResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCustinsResourceInfoRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCustinsResourceInfoResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceConnectivityRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceConnectivityResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHostGroupElasticStrategyParametersRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHostGroupElasticStrategyParametersResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMarketingActivityRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMarketingActivityResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeQuickSaleConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeQuickSaleConfigResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceDetailsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceDetailsResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\EvaluateLocalExtendDiskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\EvaluateLocalExtendDiskResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyCustinsResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyCustinsResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDasInstanceConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDasInstanceConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDatabaseConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDatabaseConfigResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBNodeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBNodeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBNodeShrinkRequest;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForCreateDBNodesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForCreateDBNodesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForCreateDBNodesShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesShrinkRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryRecommendByCodeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryRecommendByCodeResponse;
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the cloud migration feature](~~365562~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the cloud migration feature](~~365562~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * *   Each tag consists of a tag key and a tag value. The tag key is required, and the tag value is optional.
     *   * *   The tag key and tag value cannot start with aliyun.
     *   * *   The tag key and tag value are not case-sensitive.
     *   * *   The maximum length of a tag key is 64 characters, and the maximum length of a tag value is 128 characters.
     *   * *   A maximum of 10 tags can be added to each instance. Each tag that is added to the same instance must have a unique tag key. If you add a new tag to the instance and the key of the new tag is the same as that of an existing tag, the new tag overwrites the existing tag.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * *   Each tag consists of a tag key and a tag value. The tag key is required, and the tag value is optional.
     *   * *   The tag key and tag value cannot start with aliyun.
     *   * *   The tag key and tag value are not case-sensitive.
     *   * *   The maximum length of a tag key is 64 characters, and the maximum length of a tag value is 128 characters.
     *   * *   A maximum of 10 tags can be added to each instance. Each tag that is added to the same instance must have a unique tag key. If you add a new tag to the instance and the key of the new tag is the same as that of an existing tag, the new tag overwrites the existing tag.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for MySQL instance](~~26128~~)
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for PostgreSQL instance](~~97738~~)
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for SQL Server instance](~~97736~~)
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for MariaDB instance](~~97740~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for MySQL instance](~~26128~~)
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for PostgreSQL instance](~~97738~~)
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for SQL Server instance](~~97736~~)
     *   * *   [Apply for a public endpoint for an ApsaraDB RDS for MariaDB instance](~~97740~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server.
     *   *
     * @param AttachWhitelistTemplateToInstanceRequest $request AttachWhitelistTemplateToInstanceRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachWhitelistTemplateToInstanceResponse AttachWhitelistTemplateToInstanceResponse
     */
    public function attachWhitelistTemplateToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server.
     *   *
     * @param AttachWhitelistTemplateToInstanceRequest $request AttachWhitelistTemplateToInstanceRequest
     *
     * @return AttachWhitelistTemplateToInstanceResponse AttachWhitelistTemplateToInstanceResponse
     */
    public function attachWhitelistTemplateToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachWhitelistTemplateToInstanceWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)Feature description
     *   * When the [read/write splitting](~~51073~~) feature is enabled, this operation is used to calculate system-assigned read weights. For more information about custom read weights, see [DescribeDBInstanceNetInfo](~~610423~~).
     *   * ### [](#)Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   If the instance runs MySQL, the instance uses a shared proxy.
     *   * *   The instance runs one of the following MySQL versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local disks)
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)Feature description
     *   * When the [read/write splitting](~~51073~~) feature is enabled, this operation is used to calculate system-assigned read weights. For more information about custom read weights, see [DescribeDBInstanceNetInfo](~~610423~~).
     *   * ### [](#)Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   If the instance runs MySQL, the instance uses a shared proxy.
     *   * *   The instance runs one of the following MySQL versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local disks)
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
     *   * >  This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
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
     *   * >  This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   * > : If your RDS instance uses the new architecture and is created after October 10, 2022, this feature is not supported for the RDS instance. For more information, see [\\[Notice\\] SLR authorization is required to create an ApsaraDB RDS for PostgreSQL instance from October 10, 2022](~~452313~~).
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
     * Before you call this operation, make sure that the instance runs one of the following database engines:
     *   * *   MySQL. For more information, see [Back up an ApsaraDB RDS for MySQL instance across regions](~~120824~~).
     *   * *   SQL Server. For more information, see [Back up an ApsaraDB RDS for SQL Server instance across regions](~~187923~~).
     *   * *   PostgreSQL. For more information, see [Enable cross-region backups for an ApsaraDB RDS for PostgreSQL instance](~~206671~~).
     *   * > : If your RDS instance uses the new architecture and is created after October 10, 2022, this feature is not supported for the RDS instance. For more information, see [\\[Notice\\] SLR authorization is required to create an ApsaraDB RDS for PostgreSQL instance from October 10, 2022](~~452313~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
     * @param CheckDBNameAvailableRequest $request CheckDBNameAvailableRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDBNameAvailableResponse CheckDBNameAvailableResponse
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
     * @param CheckDBNameAvailableRequest $request CheckDBNameAvailableRequest
     *
     * @return CheckDBNameAvailableResponse CheckDBNameAvailableResponse
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
     *   *
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Restore data of an ApsaraDB RDS for MySQL instance](~~96147~~)
     *   * *   [Restore data of an ApsaraDB RDS for PostgreSQL instance](~~96776~~)
     *   * *   [Restore data of an ApsaraDB RDS for SQL Server instance](~~95722~~)
     *   * *   [Restore data of an ApsaraDB RDS for MariaDB instance](~~97151~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Restore data of an ApsaraDB RDS for MySQL instance](~~96147~~)
     *   * *   [Restore data of an ApsaraDB RDS for PostgreSQL instance](~~96776~~)
     *   * *   [Restore data of an ApsaraDB RDS for SQL Server instance](~~95722~~)
     *   * *   [Restore data of an ApsaraDB RDS for MariaDB instance](~~97151~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### Supported database engines
     *   * RDS SQL Server
     *   * ### References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Replicate databases between ApsaraDB RDS for SQL Server instances](~~95702~~).
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
     * ### Supported database engines
     *   * RDS SQL Server
     *   * ### References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Replicate databases between ApsaraDB RDS for SQL Server instances](~~95702~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Create an account on an ApsaraDB RDS for MySQL instance](~~96089~~)
     *   * *   [Create an account on an ApsaraDB RDS for PostgreSQL instance](~~96753~~)
     *   * *   [Create an account on an ApsaraDB RDS for SQL Server instance](~~95810~~)
     *   * *   [Create an account on an ApsaraDB RDS for MariaDB instance](~~97132~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Create an account on an ApsaraDB RDS for MySQL instance](~~96089~~)
     *   * *   [Create an account on an ApsaraDB RDS for PostgreSQL instance](~~96753~~)
     *   * *   [Create an account on an ApsaraDB RDS for SQL Server instance](~~95810~~)
     *   * *   [Create an account on an ApsaraDB RDS for MariaDB instance](~~97132~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * This operation uses the backup feature of ApsaraDB RDS to create a backup set. You can also use an operation of Database Backup (DBS) to create a backup set. For more information, see [List of operations by function of DBS](~~437245~~).
     *   * ### [](#)Precautions
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing backup tasks.
     *   * *   The number of backup files that are created per day for an instance cannot exceed 20.
     *   * ### [](#)References
     *   * *   [Use the data backup feature for an ApsaraDB RDS for MySQL instance](~~378074~~)
     *   * *   [Use the data backup feature for an ApsaraDB RDS for PostgreSQL instance](~~96772~~)
     *   * *   [Use the data backup feature for an ApsaraDB RDS for SQL Server instance](~~95717~~)
     *   * *   [Use the data backup feature for an ApsaraDB RDS for MariaDB instance](~~97147~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * This operation uses the backup feature of ApsaraDB RDS to create a backup set. You can also use an operation of Database Backup (DBS) to create a backup set. For more information, see [List of operations by function of DBS](~~437245~~).
     *   * ### [](#)Precautions
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing backup tasks.
     *   * *   The number of backup files that are created per day for an instance cannot exceed 20.
     *   * ### [](#)References
     *   * *   [Use the data backup feature for an ApsaraDB RDS for MySQL instance](~~378074~~)
     *   * *   [Use the data backup feature for an ApsaraDB RDS for PostgreSQL instance](~~96772~~)
     *   * *   [Use the data backup feature for an ApsaraDB RDS for SQL Server instance](~~95717~~)
     *   * *   [Use the data backup feature for an ApsaraDB RDS for MariaDB instance](~~97147~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cloud migration feature](~~365562~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cloud migration feature](~~365562~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the cloud migration feature](~~365562~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the cloud migration feature](~~365562~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Fees are generated if the call is successful. Before you call this operation, carefully read the following documentation:
     *   * *   [Create an ApsaraDB RDS for MySQL instance](~~148036~~)
     *   * *   [Create a serverless ApsaraDB RDS for MySQL instance](~~412231~~)
     *   * *   [Create an ApsaraDB RDS for PostgreSQL instance](~~148038~~)
     *   * *   [Create a serverless ApsaraDB RDS for PostgreSQL instance](~~607753~~)
     *   * *   [Enable Babelfish for an ApsaraDB RDS for PostgreSQL instance](~~428615~~)
     *   * *   [Create an ApsaraDB RDS for SQL Server instance](~~148037~~)
     *   * *   [Create a serverless ApsaraDB RDS for SQL Server instance](~~603465~~)
     *   * *   [Create an ApsaraDB RDS for MariaDB instance](~~148040~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Fees are generated if the call is successful. Before you call this operation, carefully read the following documentation:
     *   * *   [Create an ApsaraDB RDS for MySQL instance](~~148036~~)
     *   * *   [Create a serverless ApsaraDB RDS for MySQL instance](~~412231~~)
     *   * *   [Create an ApsaraDB RDS for PostgreSQL instance](~~148038~~)
     *   * *   [Create a serverless ApsaraDB RDS for PostgreSQL instance](~~607753~~)
     *   * *   [Enable Babelfish for an ApsaraDB RDS for PostgreSQL instance](~~428615~~)
     *   * *   [Create an ApsaraDB RDS for SQL Server instance](~~148037~~)
     *   * *   [Create a serverless ApsaraDB RDS for SQL Server instance](~~603465~~)
     *   * *   [Create an ApsaraDB RDS for MariaDB instance](~~148040~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * [Add a read-only endpoint for a cluster](~~464132~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * [Add a read-only endpoint for a cluster](~~464132~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * ### Precautions
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
     * ### Supported database engine
     *   * MySQL
     *   * ### Precautions
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Fees are generated if the call is successful. Before you call this operation, carefully read the following documentation:
     *   * *   [Manage ApsaraDB RDS for MySQL instances in the recycle bin](~~96065~~)
     *   * *   [Manage ApsaraDB RDS for PostgreSQL instances in the recycle bin](~~96752~~)
     *   * *   [Manage ApsaraDB RDS for SQL Server instances in the recycle bin](~~95669~~)
     *   * *   [Manage ApsaraDB RDS for MariaDB instances in the recycle bin](~~97131~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Fees are generated if the call is successful. Before you call this operation, carefully read the following documentation:
     *   * *   [Manage ApsaraDB RDS for MySQL instances in the recycle bin](~~96065~~)
     *   * *   [Manage ApsaraDB RDS for PostgreSQL instances in the recycle bin](~~96752~~)
     *   * *   [Manage ApsaraDB RDS for SQL Server instances in the recycle bin](~~95669~~)
     *   * *   [Manage ApsaraDB RDS for MariaDB instances in the recycle bin](~~97131~~).
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
     * ### Supported database engines
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Add a node to an ApsaraDB RDS for MySQL cluster](~~464129~~).
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
     * ### Supported database engines
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Add a node to an ApsaraDB RDS for MySQL cluster](~~464129~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for MySQL instance](~~184921~~)
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for PostgreSQL instance](~~418274~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for MySQL instance](~~184921~~)
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for PostgreSQL instance](~~418274~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Create a database in an ApsaraDB RDS for MySQL instance](~~96105~~)
     *   * *   [Create a database in an ApsaraDB RDS for PostgreSQL instance](~~96758~~)
     *   * *   [Create a database in an ApsaraDB RDS for SQL Server instance](~~95698~~)
     *   * *   [Create a database in an ApsaraDB RDS for MariaDB instance](~~97136~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Create a database in an ApsaraDB RDS for MySQL instance](~~96105~~)
     *   * *   [Create a database in an ApsaraDB RDS for PostgreSQL instance](~~96758~~)
     *   * *   [Create a database in an ApsaraDB RDS for SQL Server instance](~~95698~~)
     *   * *   [Create a database in an ApsaraDB RDS for MariaDB instance](~~97136~~).
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
     * >  Before restoration, you can call the [CheckCreateDdrDBInstance](~~121721~~) operation to check whether a cross-region backup set can be used for cross-region restoration.
     *   * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * >  Before restoration, you can call the [CheckCreateDdrDBInstance](~~121721~~) operation to check whether a cross-region backup set can be used for cross-region restoration.
     *   * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### [](#)Supported database engine
     *   * *   MySQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Create and release an ApsaraDB RDS global active database cluster](~~328592~~).
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
     * ### [](#)Supported database engine
     *   * *   MySQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Create and release an ApsaraDB RDS global active database cluster](~~328592~~).
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
     * ## [](#)Prerequisites
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
     * ## [](#)Prerequisites
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
     * ### [](#)Supported database engines
     *   * SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Migrate data from a self-managed SQL Server instance to an ApsaraDB RDS for SQL Server instance](~~100019~~).
     *   *
     * @param CreateMigrateTaskRequest $request CreateMigrateTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMigrateTaskResponse CreateMigrateTaskResponse
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
     * ### [](#)Supported database engines
     *   * SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Migrate data from a self-managed SQL Server instance to an ApsaraDB RDS for SQL Server instance](~~100019~~).
     *   *
     * @param CreateMigrateTaskRequest $request CreateMigrateTaskRequest
     *
     * @return CreateMigrateTaskResponse CreateMigrateTaskResponse
     */
    public function createMigrateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrateTaskWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * This operation is used to migrate backup data to the cloud. Before you call this operation, make sure that you understand the descriptions in the following topics:
     *   * *   [Migrate the full backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2008 R2](~~95737~~)
     *   * *   [Migrate full backup data of SQL Server 2012, 2014, 2016, 2017, or 2019 databases](~~95738~~)
     *   * *   [Migrate incremental backup data to ApsaraDB RDS for SQL Server 2012, 2014, 2016, 2017, or 2019](~~95736~~).
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
     * ### [](#)Supported database engines
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * This operation is used to migrate backup data to the cloud. Before you call this operation, make sure that you understand the descriptions in the following topics:
     *   * *   [Migrate the full backup data of a self-managed SQL Server database to an ApsaraDB RDS instance that runs SQL Server 2008 R2](~~95737~~)
     *   * *   [Migrate full backup data of SQL Server 2012, 2014, 2016, 2017, or 2019 databases](~~95738~~)
     *   * *   [Migrate incremental backup data to ApsaraDB RDS for SQL Server 2012, 2014, 2016, 2017, or 2019](~~95736~~).
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
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Add a node to an ApsaraDB RDS for MySQL cluster](~~464129~~).
     *   *
     * @param CreateOrderForCreateDBNodesRequest $tmpReq  CreateOrderForCreateDBNodesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrderForCreateDBNodesResponse CreateOrderForCreateDBNodesResponse
     */
    public function createOrderForCreateDBNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrderForCreateDBNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNode)) {
            $request->DBNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNode, 'DBNode', 'json');
        }
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
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNodeShrink)) {
            $query['DBNode'] = $request->DBNodeShrink;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $query['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderForCreateDBNodes',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderForCreateDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Add a node to an ApsaraDB RDS for MySQL cluster](~~464129~~).
     *   *
     * @param CreateOrderForCreateDBNodesRequest $request CreateOrderForCreateDBNodesRequest
     *
     * @return CreateOrderForCreateDBNodesResponse CreateOrderForCreateDBNodesResponse
     */
    public function createOrderForCreateDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderForCreateDBNodesWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Delete a node from an ApsaraDB RDS for MySQL instance that runs RDS Cluster Edition](~~464130~~).
     *   *
     * @param CreateOrderForDeleteDBNodesRequest $tmpReq  CreateOrderForDeleteDBNodesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrderForDeleteDBNodesResponse CreateOrderForDeleteDBNodesResponse
     */
    public function createOrderForDeleteDBNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrderForDeleteDBNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNodeId)) {
            $request->DBNodeIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNodeId, 'DBNodeId', 'json');
        }
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
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNodeIdShrink)) {
            $query['DBNodeId'] = $request->DBNodeIdShrink;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $query['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderForDeleteDBNodes',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderForDeleteDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Delete a node from an ApsaraDB RDS for MySQL instance that runs RDS Cluster Edition](~~464130~~).
     *   *
     * @param CreateOrderForDeleteDBNodesRequest $request CreateOrderForDeleteDBNodesRequest
     *
     * @return CreateOrderForDeleteDBNodesResponse CreateOrderForDeleteDBNodesResponse
     */
    public function createOrderForDeleteDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderForDeleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~)
     *   * ### [](#)Precautions
     *   * Install only the plug-ins that are supported by the major engine version of the instance. Otherwise, the installation fails.
     *   * *   For more information, see [Extensions supported by ApsaraDB RDS for PostgreSQL](~~142340~~).
     *   * *   You can call the [DescribeDBInstanceAttribute](~~610394~~) operation to query the major engine version of an instance.
     *   *
     * @param CreatePostgresExtensionsRequest $request CreatePostgresExtensionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePostgresExtensionsResponse CreatePostgresExtensionsResponse
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~)
     *   * ### [](#)Precautions
     *   * Install only the plug-ins that are supported by the major engine version of the instance. Otherwise, the installation fails.
     *   * *   For more information, see [Extensions supported by ApsaraDB RDS for PostgreSQL](~~142340~~).
     *   * *   You can call the [DescribeDBInstanceAttribute](~~610394~~) operation to query the major engine version of an instance.
     *   *
     * @param CreatePostgresExtensionsRequest $request CreatePostgresExtensionsRequest
     *
     * @return CreatePostgresExtensionsResponse CreatePostgresExtensionsResponse
     */
    public function createPostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Create a read-only ApsaraDB RDS for MySQL instance](~~56991~~)
     *   * *   [Create a read-only ApsaraDB RDS for PostgreSQL instance](~~108959~~)
     *   * *   [Create a read-only ApsaraDB RDS for SQL Server instance](~~99005~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Create a read-only ApsaraDB RDS for MySQL instance](~~56991~~)
     *   * *   [Create a read-only ApsaraDB RDS for PostgreSQL instance](~~108959~~)
     *   * *   [Create a read-only ApsaraDB RDS for SQL Server instance](~~99005~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL.
     *   *
     * @param CreateSecretRequest $request CreateSecretRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecretResponse CreateSecretResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL.
     *   *
     * @param CreateSecretRequest $request CreateSecretRequest
     *
     * @return CreateSecretResponse CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Service-linked roles](~~342840~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Service-linked roles](~~342840~~).
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
     * ### [](#)Supported database engines
     *   * Your RDS instance runs SQL Server 2008 R2 with local disks.
     *   * ### [](#)Description
     *   * You can create a temporary instance based on a backup set or a point in time within the past seven days. Before you call this operation, make sure that the following requirements are met:
     *   * *   Your instance runs SQL Server 2008 R2 with local disks.
     *   * *   Your instance is in the Running state.
     *   * *   Your instance does not have ongoing migration tasks.
     *   * *   The last creation of a backup file is complete.
     *   * >  After a temporary instance is created, the temporary instance inherits the accounts and databases in the backup set.
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
     * ### [](#)Supported database engines
     *   * Your RDS instance runs SQL Server 2008 R2 with local disks.
     *   * ### [](#)Description
     *   * You can create a temporary instance based on a backup set or a point in time within the past seven days. Before you call this operation, make sure that the following requirements are met:
     *   * *   Your instance runs SQL Server 2008 R2 with local disks.
     *   * *   Your instance is in the Running state.
     *   * *   Your instance does not have ongoing migration tasks.
     *   * *   The last creation of a backup file is complete.
     *   * >  After a temporary instance is created, the temporary instance inherits the accounts and databases in the backup set.
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
     * @param CreateYouhuiForOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateYouhuiForOrderResponse
     */
    public function createYouhuiForOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
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
            'action'      => 'CreateYouhuiForOrder',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateYouhuiForOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateYouhuiForOrderRequest $request
     *
     * @return CreateYouhuiForOrderResponse
     */
    public function createYouhuiForOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createYouhuiForOrderWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Delete a database account from an ApsaraDB RDS for MySQL instance](~~96104~~)
     *   * *   [Delete a database account from an ApsaraDB RDS for PostgreSQL instance](~~147649~~)
     *   * *   [Delete a database account from an ApsaraDB RDS for SQL Server instance](~~95694~~)
     *   * *   [Delete a database account from an ApsaraDB RDS for MariaDB instance](~~97135~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Delete a database account from an ApsaraDB RDS for MySQL instance](~~96104~~)
     *   * *   [Delete a database account from an ApsaraDB RDS for PostgreSQL instance](~~147649~~)
     *   * *   [Delete a database account from an ApsaraDB RDS for SQL Server instance](~~95694~~)
     *   * *   [Delete a database account from an ApsaraDB RDS for MariaDB instance](~~97135~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * > Only instances that run RDS High-availability Edition are supported.
     *   * ### Description
     *   * You can call this operation to delete backup sets of the instance itself. Backup sets of the associated instances such as read-only, disaster recovery, and cloned instances are not deleted.
     *   * ### Precautions
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * > Only instances that run RDS High-availability Edition are supported.
     *   * ### Description
     *   * You can call this operation to delete backup sets of the instance itself. Backup sets of the associated instances such as read-only, disaster recovery, and cloned instances are not deleted.
     *   * ### Precautions
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
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
     * ### Supported database engine
     *   * SQL Server
     *   * ### Usage notes
     *   * This operation is available for users whose accounts are added to the whitelist. If your account is not added to the whitelist, you can join the Database Backup (DBS) DingTalk group whose ID is 35585947 and contact the on-duty engineer to add your account to the whitelist.
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
     * ### Supported database engine
     *   * SQL Server
     *   * ### Usage notes
     *   * This operation is available for users whose accounts are added to the whitelist. If your account is not added to the whitelist, you can join the Database Backup (DBS) DingTalk group whose ID is 35585947 and contact the on-duty engineer to add your account to the whitelist.
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Delete the read-only endpoint of an ApsaraDB RDS for MySQL cluster](~~464133~~).
     *   *
     * @param DeleteDBInstanceEndpointRequest $request DeleteDBInstanceEndpointRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceEndpointResponse DeleteDBInstanceEndpointResponse
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Delete the read-only endpoint of an ApsaraDB RDS for MySQL cluster](~~464133~~).
     *   *
     * @param DeleteDBInstanceEndpointRequest $request DeleteDBInstanceEndpointRequest
     *
     * @return DeleteDBInstanceEndpointResponse DeleteDBInstanceEndpointResponse
     */
    public function deleteDBInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engine
     *   * MySQL
     *   * ### Precautions
     *   * You can delete only the public endpoint of each endpoint type from the instance. If you want to delete an internal endpoint of any endpoint type, you can delete the type of endpoint.
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
     * ### Supported database engine
     *   * MySQL
     *   * ### Precautions
     *   * You can delete only the public endpoint of each endpoint type from the instance. If you want to delete an internal endpoint of any endpoint type, you can delete the type of endpoint.
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Delete a node from an ApsaraDB RDS for MySQL instance that runs RDS Cluster Edition](~~464130~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Delete a node from an ApsaraDB RDS for MySQL instance that runs RDS Cluster Edition](~~464130~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Delete a database from an ApsaraDB RDS for MySQL instance](~~96106~~)
     *   * *   [Delete a database from an ApsaraDB RDS for PostgreSQL instance](~~96759~~)
     *   * *   [Delete a database from an ApsaraDB RDS for SQL Server instance](~~95699~~)
     *   * *   [Delete a database from an ApsaraDB RDS for MariaDB instance](~~97137~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Delete a database from an ApsaraDB RDS for MySQL instance](~~96106~~)
     *   * *   [Delete a database from an ApsaraDB RDS for PostgreSQL instance](~~96759~~)
     *   * *   [Delete a database from an ApsaraDB RDS for SQL Server instance](~~95699~~)
     *   * *   [Delete a database from an ApsaraDB RDS for MariaDB instance](~~97137~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [Usage notes](#)
     *   * *   A global active database cluster cannot be restored after it is deleted. Proceed with caution.
     *   * *   If you delete a global active database cluster, the system removes all nodes and Data Transmission Service (DTS) synchronization tasks from the cluster. However, the system does not release the ApsaraDB RDS for MySQL instances that run as nodes in the cluster. If you no longer need the ApsaraDB RDS for MySQL instances, you can call the [DeleteDBInstance](~~26229~~) to release the instances one after another.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [Usage notes](#)
     *   * *   A global active database cluster cannot be restored after it is deleted. Proceed with caution.
     *   * *   If you delete a global active database cluster, the system removes all nodes and Data Transmission Service (DTS) synchronization tasks from the cluster. However, the system does not release the ApsaraDB RDS for MySQL instances that run as nodes in the cluster. If you no longer need the ApsaraDB RDS for MySQL instances, you can call the [DeleteDBInstance](~~26229~~) to release the instances one after another.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### Supported database engines
     *   * RDS PostgreSQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~).
     *   *
     * @param DeletePostgresExtensionsRequest $request DeletePostgresExtensionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePostgresExtensionsResponse DeletePostgresExtensionsResponse
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
     * ### Supported database engines
     *   * RDS PostgreSQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~).
     *   *
     * @param DeletePostgresExtensionsRequest $request DeletePostgresExtensionsRequest
     *
     * @return DeletePostgresExtensionsResponse DeletePostgresExtensionsResponse
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
     * ### [](#)Supported database engine
     *   * *   PostgreSQL
     *   * ### [](#)Precautions
     *   * You can delete a replication slot only when the status of the slot is **INACTIVE**. You can call the DescribeSlots operation to query the status of a replication slot.
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
     * ### [](#)Supported database engine
     *   * *   PostgreSQL
     *   * ### [](#)Precautions
     *   * You can delete a replication slot only when the status of the slot is **INACTIVE**. You can call the DescribeSlots operation to query the status of a replication slot.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)Description
     *   * *   A full backup file contains the data of a self-managed MySQL instance. You can restore the data of a self-managed MySQL instance from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   This operation deletes full backup files only from the ApsaraDB RDS console. This operation does not affect the full backup files that are stored as objects in Object Storage Service (OSS) buckets. After you call this operation to delete a full backup file, you can call the [ImportUserBackupFile](~~260266~~) operation to import the full backup file again.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)Description
     *   * *   A full backup file contains the data of a self-managed MySQL instance. You can restore the data of a self-managed MySQL instance from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   This operation deletes full backup files only from the ApsaraDB RDS console. This operation does not affect the full backup files that are stored as objects in Object Storage Service (OSS) buckets. After you call this operation to delete a full backup file, you can call the [ImportUserBackupFile](~~260266~~) operation to import the full backup file again.
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
     * ### [](#)Supported database engines
     *   * *   MySQL.
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
     * ### [](#)Supported database engines
     *   * *   MySQL.
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeAllWhitelistTemplateRequest $request DescribeAllWhitelistTemplateRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllWhitelistTemplateResponse DescribeAllWhitelistTemplateResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeAllWhitelistTemplateRequest $request DescribeAllWhitelistTemplateRequest
     *
     * @return DescribeAllWhitelistTemplateResponse DescribeAllWhitelistTemplateResponse
     */
    public function describeAllWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * [Create and view an analytic instance](~~155180~~).
     *   *
     * @param DescribeAnalyticdbByPrimaryDBInstanceRequest $request DescribeAnalyticdbByPrimaryDBInstanceRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnalyticdbByPrimaryDBInstanceResponse DescribeAnalyticdbByPrimaryDBInstanceResponse
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
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * [Create and view an analytic instance](~~155180~~).
     *   *
     * @param DescribeAnalyticdbByPrimaryDBInstanceRequest $request DescribeAnalyticdbByPrimaryDBInstanceRequest
     *
     * @return DescribeAnalyticdbByPrimaryDBInstanceResponse DescribeAnalyticdbByPrimaryDBInstanceResponse
     */
    public function describeAnalyticdbByPrimaryDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnalyticdbByPrimaryDBInstanceWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeAvailableClassesRequest $request DescribeAvailableClassesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableClassesResponse DescribeAvailableClassesResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeAvailableClassesRequest $request DescribeAvailableClassesRequest
     *
     * @return DescribeAvailableClassesResponse DescribeAvailableClassesResponse
     */
    public function describeAvailableClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableClassesWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [View the Enhanced Monitoring metrics](~~299200~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [View the Enhanced Monitoring metrics](~~299200~~).
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
     * >  To view the time range within which you can restore data from a standard backup set, see [DescribeBackups](~~26273~~)
     *   * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~).
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
     * >  To view the time range within which you can restore data from a standard backup set, see [DescribeBackups](~~26273~~)
     *   * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeAvailableZonesRequest $request DescribeAvailableZonesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableZonesResponse DescribeAvailableZonesResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeAvailableZonesRequest $request DescribeAvailableZonesRequest
     *
     * @return DescribeAvailableZonesResponse DescribeAvailableZonesResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   MariaDB
     *   * ### Usage notes
     *   * *   If the return value of the **DownloadLink** parameter is NULL, ApsaraDB RDS does not provide a download URL.
     *   * *   If the return value of the **DownloadLink** parameter is not NULL, ApsaraDB RDS provides a URL for you to download backup files. The expiration time of the URL is specified by the **LinkExpiredTime** parameter. You must download the backup files before the expiration time.
     *   * *   If you use a RAM user to download backup files, you must grant permissions to the RAM user. For more information, see [Grant backup file download permissions to a RAM user with read-only permissions](~~100043~~).
     *   * *   Each log file that is returned by this operation contains the log entries that are generated over the time range that is specified by the StartTime and EndTime parameters.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   MariaDB
     *   * ### Usage notes
     *   * *   If the return value of the **DownloadLink** parameter is NULL, ApsaraDB RDS does not provide a download URL.
     *   * *   If the return value of the **DownloadLink** parameter is not NULL, ApsaraDB RDS provides a URL for you to download backup files. The expiration time of the URL is specified by the **LinkExpiredTime** parameter. You must download the backup files before the expiration time.
     *   * *   If you use a RAM user to download backup files, you must grant permissions to the RAM user. For more information, see [Grant backup file download permissions to a RAM user with read-only permissions](~~100043~~).
     *   * *   Each log file that is returned by this operation contains the log entries that are generated over the time range that is specified by the StartTime and EndTime parameters.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeCharacterSetNameRequest $request DescribeCharacterSetNameRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCharacterSetNameResponse DescribeCharacterSetNameResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeCharacterSetNameRequest $request DescribeCharacterSetNameRequest
     *
     * @return DescribeCharacterSetNameResponse DescribeCharacterSetNameResponse
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
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
     * ### Supported database engine
     *   * SQL Server.
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
     * ### Supported database engine
     *   * SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * >  For more information about how to query cross-region log backup files, see [DescribeCrossRegionLogBackupFiles](~~121734~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * >  For more information about how to query cross-region log backup files, see [DescribeCrossRegionLogBackupFiles](~~121734~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * >  For more information about how to query cross-region data backup files, see [DescribeCrossRegionBackups](~~121733~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * >  For more information about how to query cross-region data backup files, see [DescribeCrossRegionBackups](~~121733~~).
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
     * @param DescribeCurrentModifyOrderRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCurrentModifyOrderResponse
     */
    public function describeCurrentModifyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
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
            'action'      => 'DescribeCurrentModifyOrder',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCurrentModifyOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCurrentModifyOrderRequest $request
     *
     * @return DescribeCurrentModifyOrderResponse
     */
    public function describeCurrentModifyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCurrentModifyOrderWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustinsResourceInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCustinsResourceInfoResponse
     */
    public function describeCustinsResourceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
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
            'action'      => 'DescribeCustinsResourceInfo',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustinsResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustinsResourceInfoRequest $request
     *
     * @return DescribeCustinsResourceInfoResponse
     */
    public function describeCustinsResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustinsResourceInfoWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDBInstanceByTagsRequest $request DescribeDBInstanceByTagsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceByTagsResponse DescribeDBInstanceByTagsResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDBInstanceByTagsRequest $request DescribeDBInstanceByTagsRequest
     *
     * @return DescribeDBInstanceByTagsResponse DescribeDBInstanceByTagsResponse
     */
    public function describeDBInstanceByTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceByTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceConnectivityRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDBInstanceConnectivityResponse
     */
    public function describeDBInstanceConnectivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceConnectivity',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceConnectivityRequest $request
     *
     * @return DescribeDBInstanceConnectivityResponse
     */
    public function describeDBInstanceConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceConnectivityWithOptions($request, $runtime);
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
     * ### [](#)Supported database engines
     *   * RDS MySQL.
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
     * ### [](#)Supported database engines
     *   * RDS MySQL.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Query the data replication mode of an ApsaraDB RDS for MySQL instance](~~96055~~)
     *   * *   [Query the data replication mode of an ApsaraDB RDS for PostgreSQL instance](~~151265~~)
     *   * *   [Query the data replication mode of an ApsaraDB RDS for SQL Server instance](~~415433~~).
     *   *
     * @param DescribeDBInstanceHAConfigRequest $request DescribeDBInstanceHAConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceHAConfigResponse DescribeDBInstanceHAConfigResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Query the data replication mode of an ApsaraDB RDS for MySQL instance](~~96055~~)
     *   * *   [Query the data replication mode of an ApsaraDB RDS for PostgreSQL instance](~~151265~~)
     *   * *   [Query the data replication mode of an ApsaraDB RDS for SQL Server instance](~~415433~~).
     *   *
     * @param DescribeDBInstanceHAConfigRequest $request DescribeDBInstanceHAConfigRequest
     *
     * @return DescribeDBInstanceHAConfigResponse DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceHAConfigWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
     * @param DescribeDBInstanceIPArrayListRequest $request DescribeDBInstanceIPArrayListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceIPArrayListResponse DescribeDBInstanceIPArrayListResponse
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
     * @param DescribeDBInstanceIPArrayListRequest $request DescribeDBInstanceIPArrayListRequest
     *
     * @return DescribeDBInstanceIPArrayListResponse DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIPArrayListWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * RDS SQL Server
     *   * ### [](#)Prerequisites
     *   * *   The RDS instance runs RDS Basic Edition, RDS High-availability Edition, or RDS Cluster Edition. If your RDS instance runs RDS High-availability Edition, make sure that the instance runs SQL Server 2012 or later.
     *   * *   The RDS instance belongs to a general-purpose or dedicated instance family. The shared instance family is not supported.
     *   * *   If the RDS instance runs RDS Basic Edition, the instance is created on or after September 02, 2022. You can view the Creation Time
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Configure a distributed transaction whitelist](~~124321~~).
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
     * ### [](#)Supported database engines
     *   * RDS SQL Server
     *   * ### [](#)Prerequisites
     *   * *   The RDS instance runs RDS Basic Edition, RDS High-availability Edition, or RDS Cluster Edition. If your RDS instance runs RDS High-availability Edition, make sure that the instance runs SQL Server 2012 or later.
     *   * *   The RDS instance belongs to a general-purpose or dedicated instance family. The shared instance family is not supported.
     *   * *   If the RDS instance runs RDS Basic Edition, the instance is created on or after September 02, 2022. You can view the Creation Time
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Configure a distributed transaction whitelist](~~124321~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [View the Enhanced Monitoring metrics](~~299200~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [View the Enhanced Monitoring metrics](~~299200~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDBInstanceNetInfoRequest $request DescribeDBInstanceNetInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfoResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDBInstanceNetInfoForChannelRequest $request DescribeDBInstanceNetInfoForChannelRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceNetInfoForChannelResponse DescribeDBInstanceNetInfoForChannelResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeDBInstanceNetInfoForChannelRequest $request DescribeDBInstanceNetInfoForChannelRequest
     *
     * @return DescribeDBInstanceNetInfoForChannelResponse DescribeDBInstanceNetInfoForChannelResponse
     */
    public function describeDBInstanceNetInfoForChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoForChannelWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     *   * **
     *   * **Description:** This operation is phased out. Use the [DescribeDBInstances](~~610396~~) operation instead.
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
     *   * **
     *   * **Description:** This operation is phased out. Use the [DescribeDBInstances](~~610396~~) operation instead.
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * Before you purchase or upgrade an instance that runs MySQL or PostgreSQL, you can call the DescribeDBMiniEngineVersions operation to query the minor engine versions that are available for the instance.
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
     * Before you purchase or upgrade an instance that runs MySQL or PostgreSQL, you can call the DescribeDBMiniEngineVersions operation to query the minor engine versions that are available for the instance.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * >  Starting October 17, 2023, ApsaraDB RDS provides a dedicated proxy free of charge for each ApsaraDB RDS for MySQL instance on RDS Cluster Edition. For more information, see [\\[Special offers/Price changes\\] One proxy is provided free of charge for ApsaraDB RDS for MySQL instances on RDS Cluster Edition](~~2555466~~).
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [View the monitoring data of an ApsaraDB RDS for MySQL instance](~~194241~~)
     *   * *   [View the monitoring data of an ApsaraDB RDS for PostgreSQL instance](~~418275~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * >  Starting October 17, 2023, ApsaraDB RDS provides a dedicated proxy free of charge for each ApsaraDB RDS for MySQL instance on RDS Cluster Edition. For more information, see [\\[Special offers/Price changes\\] One proxy is provided free of charge for ApsaraDB RDS for MySQL instances on RDS Cluster Edition](~~2555466~~).
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [View the monitoring data of an ApsaraDB RDS for MySQL instance](~~194241~~)
     *   * *   [View the monitoring data of an ApsaraDB RDS for PostgreSQL instance](~~418275~~).
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
     * ### [](#)Supported database engines
     *   * SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Configures a distributed transaction whitelist for an ApsaraDB RDS for SQL Server instance](~~124321~~).
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
     * ### [](#)Supported database engines
     *   * SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Configures a distributed transaction whitelist for an ApsaraDB RDS for SQL Server instance](~~124321~~).
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
     * Dedicated clusters allow you to manage a number of instances in a cluster at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
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
     * Dedicated clusters allow you to manage a number of instances in a cluster at a time. You can create multiple dedicated clusters in a single region. Each dedicated cluster consists of multiple hosts. You can create multiple instances on each host. For more information, see [What is ApsaraDB MyBase?](~~141455~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * > This operation is available only for instances that use local disks.
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * For more information about how to retain the data backup files of an instance after the instance is released, see [Configure automatic backup](~~98818~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * > This operation is available only for instances that use local disks.
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * For more information about how to retain the data backup files of an instance after the instance is released, see [Configure automatic backup](~~98818~~).
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
     *   * >  This operation is phased out.
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
     *   * >  This operation is phased out.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Historical events of an ApsaraDB RDS for MySQL instance](~~129759~~)
     *   * *   [Historical events of an ApsaraDB RDS for PostgreSQL instance](~~131008~~)
     *   * *   [Historical events of an ApsaraDB RDS for SQL Server instance](~~131013~~)
     *   * *   [Historical events of an ApsaraDB RDS for MariaDB instance](~~131010~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Historical events of an ApsaraDB RDS for MySQL instance](~~129759~~)
     *   * *   [Historical events of an ApsaraDB RDS for PostgreSQL instance](~~131008~~)
     *   * *   [Historical events of an ApsaraDB RDS for SQL Server instance](~~131013~~)
     *   * *   [Historical events of an ApsaraDB RDS for MariaDB instance](~~131010~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL.
     *   *
     * @param DescribeGadInstancesRequest $request DescribeGadInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGadInstancesResponse DescribeGadInstancesResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL.
     *   *
     * @param DescribeGadInstancesRequest $request DescribeGadInstancesRequest
     *
     * @return DescribeGadInstancesResponse DescribeGadInstancesResponse
     */
    public function describeGadInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGadInstancesWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * [What is availability detection?](~~207467~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * [What is availability detection?](~~207467~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Tasks of an ApsaraDB RDS for MySQL instance](~~474275~~)
     *   * *   [Tasks of an ApsaraDB RDS for PostrgreSQL instance](~~474537~~)
     *   * *   [Tasks of an ApsaraDB RDS for SQL Server instance](~~614826~~).
     *   *
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Tasks of an ApsaraDB RDS for MySQL instance](~~474275~~)
     *   * *   [Tasks of an ApsaraDB RDS for PostrgreSQL instance](~~474537~~)
     *   * *   [Tasks of an ApsaraDB RDS for SQL Server instance](~~614826~~).
     *   *
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
     * @param DescribeHostGroupElasticStrategyParametersRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeHostGroupElasticStrategyParametersResponse
     */
    public function describeHostGroupElasticStrategyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupName)) {
            $query['DedicatedHostGroupName'] = $request->dedicatedHostGroupName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHostGroupElasticStrategyParameters',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHostGroupElasticStrategyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHostGroupElasticStrategyParametersRequest $request
     *
     * @return DescribeHostGroupElasticStrategyParametersResponse
     */
    public function describeHostGroupElasticStrategyParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostGroupElasticStrategyParametersWithOptions($request, $runtime);
    }

    /**
     * >  This operation is available only for instances that run SQL Server. If you require this operation, contact **Alibaba Cloud technical support**.
     *   * ### [](#)Prerequisites
     *   * The instance meets the following requirements:
     *   * *   The instance resides in a region other than the China (Zhangjiakou) region.
     *   * *   The instance runs RDS Basic Edition, RDS Cluster Edition, or RDS High-availability Edition. If your instance runs RDS High-availability Edition, make sure that the instance runs SQL Server 2012 or later.
     *   * *   The instance belongs to the general-purpose or dedicated instance family. The shared instance family is not supported.
     *   * *   The instance resides in a virtual private cloud (VPC). For more information about how to change the network type of an RDS instance, see [Change the network type](~~95707~~).
     *   * *   If the instance runs RDS High-availability Edition or RDS Cluster Edition, the instance is created on or after January 1, 2021. If the instance runs RDS Basic Edition, the instance is created on or after September 02, 2022. You can view the **Creation Time** parameter of an instance in the **Status** section of the **Basic Information** page in the ApsaraDB RDS console.
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
     * >  This operation is available only for instances that run SQL Server. If you require this operation, contact **Alibaba Cloud technical support**.
     *   * ### [](#)Prerequisites
     *   * The instance meets the following requirements:
     *   * *   The instance resides in a region other than the China (Zhangjiakou) region.
     *   * *   The instance runs RDS Basic Edition, RDS Cluster Edition, or RDS High-availability Edition. If your instance runs RDS High-availability Edition, make sure that the instance runs SQL Server 2012 or later.
     *   * *   The instance belongs to the general-purpose or dedicated instance family. The shared instance family is not supported.
     *   * *   The instance resides in a virtual private cloud (VPC). For more information about how to change the network type of an RDS instance, see [Change the network type](~~95707~~).
     *   * *   If the instance runs RDS High-availability Edition or RDS Cluster Edition, the instance is created on or after January 1, 2021. If the instance runs RDS Basic Edition, the instance is created on or after September 02, 2022. You can view the **Creation Time** parameter of an instance in the **Status** section of the **Basic Information** page in the ApsaraDB RDS console.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeInstanceLinkedWhitelistTemplateRequest $request DescribeInstanceLinkedWhitelistTemplateRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceLinkedWhitelistTemplateResponse DescribeInstanceLinkedWhitelistTemplateResponse
     */
    public function describeInstanceLinkedWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeInstanceLinkedWhitelistTemplateRequest $request DescribeInstanceLinkedWhitelistTemplateRequest
     *
     * @return DescribeInstanceLinkedWhitelistTemplateResponse DescribeInstanceLinkedWhitelistTemplateResponse
     */
    public function describeInstanceLinkedWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceLinkedWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   MariaDB.
     *   *
     * @param DescribeLocalAvailableRecoveryTimeRequest $request DescribeLocalAvailableRecoveryTimeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse DescribeLocalAvailableRecoveryTimeResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   MariaDB.
     *   *
     * @param DescribeLocalAvailableRecoveryTimeRequest $request DescribeLocalAvailableRecoveryTimeRequest
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse DescribeLocalAvailableRecoveryTimeResponse
     */
    public function describeLocalAvailableRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLocalAvailableRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * RDS SQL Server
     *   * >  You can call the [DescribeBinlogFiles](~~610550~~) operation to query the log files of other database engines.
     *   *
     * @param DescribeLogBackupFilesRequest $request DescribeLogBackupFilesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogBackupFilesResponse DescribeLogBackupFilesResponse
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
     * ### [](#)Supported database engines
     *   * RDS SQL Server
     *   * >  You can call the [DescribeBinlogFiles](~~610550~~) operation to query the log files of other database engines.
     *   *
     * @param DescribeLogBackupFilesRequest $request DescribeLogBackupFilesRequest
     *
     * @return DescribeLogBackupFilesResponse DescribeLogBackupFilesResponse
     */
    public function describeLogBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMarketingActivityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMarketingActivityResponse
     */
    public function describeMarketingActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->upgradeCode)) {
            $query['UpgradeCode'] = $request->upgradeCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMarketingActivity',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMarketingActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMarketingActivityRequest $request
     *
     * @return DescribeMarketingActivityResponse
     */
    public function describeMarketingActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMarketingActivityWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * MySQL
     *   * > This operation is available for RDS instances that run MySQL 8.0, MySQL 5.7, and MySQL 5.6 on RDS High-availability Edition with local disks.
     *   * ### [](#)Description
     *   * Before you call the [RestoreTable](~~131510~~) operation to restore individual databases or tables of an ApsaraDB RDS for MySQL instance, you can call this operation to query the information about the databases and tables that can be restored. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
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
     * ### [](#)Supported database engines
     *   * MySQL
     *   * > This operation is available for RDS instances that run MySQL 8.0, MySQL 5.7, and MySQL 5.6 on RDS High-availability Edition with local disks.
     *   * ### [](#)Description
     *   * Before you call the [RestoreTable](~~131510~~) operation to restore individual databases or tables of an ApsaraDB RDS for MySQL instance, you can call this operation to query the information about the databases and tables that can be restored. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
     *   *
     * @param DescribeMigrateTaskByIdRequest $request DescribeMigrateTaskByIdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMigrateTaskByIdResponse DescribeMigrateTaskByIdResponse
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
     *   *
     * @param DescribeMigrateTaskByIdRequest $request DescribeMigrateTaskByIdRequest
     *
     * @return DescribeMigrateTaskByIdResponse DescribeMigrateTaskByIdResponse
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL.
     *   *
     * @param DescribeModifyPGHbaConfigLogRequest $request DescribeModifyPGHbaConfigLogRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeModifyPGHbaConfigLogResponse DescribeModifyPGHbaConfigLogResponse
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL.
     *   *
     * @param DescribeModifyPGHbaConfigLogRequest $request DescribeModifyPGHbaConfigLogRequest
     *
     * @return DescribeModifyPGHbaConfigLogResponse DescribeModifyPGHbaConfigLogResponse
     */
    public function describeModifyPGHbaConfigLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyPGHbaConfigLogWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeModifyParameterLogRequest $request DescribeModifyParameterLogRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeModifyParameterLogResponse DescribeModifyParameterLogResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeModifyParameterLogRequest $request DescribeModifyParameterLogRequest
     *
     * @return DescribeModifyParameterLogResponse DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyParameterLogWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   SQL Server
     *   * ### [Usage notes](#)
     *   * This operation is not supported for instances that run SQL Server 2017 EE or SQL Server 2019 EE.
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
     * ### [](#)Supported database engines
     *   * *   SQL Server
     *   * ### [Usage notes](#)
     *   * This operation is not supported for instances that run SQL Server 2017 EE or SQL Server 2019 EE.
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL.
     *   *
     * @param DescribePGHbaConfigRequest $request DescribePGHbaConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePGHbaConfigResponse DescribePGHbaConfigResponse
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL.
     *   *
     * @param DescribePGHbaConfigRequest $request DescribePGHbaConfigRequest
     *
     * @return DescribePGHbaConfigResponse DescribePGHbaConfigResponse
     */
    public function describePGHbaConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePGHbaConfigWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template for an ApsaraDB RDS for MySQL instance](~~130565~~)
     *   * *   [Use a parameter template for an ApsaraDB RDS for PostgreSQL instance](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template for an ApsaraDB RDS for MySQL instance](~~130565~~)
     *   * *   [Use a parameter template for an ApsaraDB RDS for PostgreSQL instance](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Applicable engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Applicable engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Supported database engines
     *   * RDS PostgreSQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~).
     *   *
     * @param DescribePostgresExtensionsRequest $request DescribePostgresExtensionsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePostgresExtensionsResponse DescribePostgresExtensionsResponse
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
     * ### Supported database engines
     *   * RDS PostgreSQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~).
     *   *
     * @param DescribePostgresExtensionsRequest $request DescribePostgresExtensionsRequest
     *
     * @return DescribePostgresExtensionsResponse DescribePostgresExtensionsResponse
     */
    public function describePostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribePriceRequest $tmpReq  DescribePriceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceResponse DescribePriceResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
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
     * @param DescribeQuickSaleConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeQuickSaleConfigResponse
     */
    public function describeQuickSaleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQuickSaleConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQuickSaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQuickSaleConfigRequest $request
     *
     * @return DescribeQuickSaleConfigResponse
     */
    public function describeQuickSaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQuickSaleConfigWithOptions($request, $runtime);
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeRegionInfosRequest $request DescribeRegionInfosRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionInfosResponse DescribeRegionInfosResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeRegionInfosRequest $request DescribeRegionInfosRequest
     *
     * @return DescribeRegionInfosResponse DescribeRegionInfosResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * @param DescribeResourceDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeResourceDetailsResponse
     */
    public function describeResourceDetailsWithOptions($request, $runtime)
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
            'action'      => 'DescribeResourceDetails',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceDetailsRequest $request
     *
     * @return DescribeResourceDetailsResponse
     */
    public function describeResourceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceDetailsWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeResourceUsageRequest $request DescribeResourceUsageRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceUsageResponse DescribeResourceUsageResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeResourceUsageRequest $request DescribeResourceUsageRequest
     *
     * @return DescribeResourceUsageResponse DescribeResourceUsageResponse
     */
    public function describeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server.
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
     * ### [](#)Supported database engine
     *   * *   MySQL.
     *   *
     * @param DescribeSecretsRequest $request DescribeSecretsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecretsResponse DescribeSecretsResponse
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
     * ### [](#)Supported database engine
     *   * *   MySQL.
     *   *
     * @param DescribeSecretsRequest $request DescribeSecretsRequest
     *
     * @return DescribeSecretsResponse DescribeSecretsResponse
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### Precautions
     *   * The response parameters returned by this operation are updated every minute.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### Precautions
     *   * The response parameters returned by this operation are updated every minute.
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
     * ### Supported database engines
     *   * *   MySQL.
     *   *     **
     *   *     **Note**MySQL 5.7 on RDS Basic Edition is not supported.
     *   * *   SQL Server
     *   *     **
     *   *     **Note**Only SQL Server 2008 R2 is supported.
     *   * *   MariaDB
     *   * ### Usage notes
     *   * Slow query logs are not collected in real time and may show a latency of 6 hours to 8 hours.
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
     * ### Supported database engines
     *   * *   MySQL.
     *   *     **
     *   *     **Note**MySQL 5.7 on RDS Basic Edition is not supported.
     *   * *   SQL Server
     *   *     **
     *   *     **Note**Only SQL Server 2008 R2 is supported.
     *   * *   MariaDB
     *   * ### Usage notes
     *   * Slow query logs are not collected in real time and may show a latency of 6 hours to 8 hours.
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
     * ### Supported database engine
     *   * SQL Server.
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
     * ### Supported database engine
     *   * SQL Server.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [Usage notes](#)
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [Usage notes](#)
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
     * ### [](#)Supported database engines
     *   * PostgreSQL.
     *   *
     * @param DescribeUpgradeMajorVersionTasksRequest $request DescribeUpgradeMajorVersionTasksRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUpgradeMajorVersionTasksResponse DescribeUpgradeMajorVersionTasksResponse
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
     * ### [](#)Supported database engines
     *   * PostgreSQL.
     *   *
     * @param DescribeUpgradeMajorVersionTasksRequest $request DescribeUpgradeMajorVersionTasksRequest
     *
     * @return DescribeUpgradeMajorVersionTasksResponse DescribeUpgradeMajorVersionTasksResponse
     */
    public function describeUpgradeMajorVersionTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpgradeMajorVersionTasksWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeWhitelistTemplateRequest $request DescribeWhitelistTemplateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWhitelistTemplateResponse DescribeWhitelistTemplateResponse
     */
    public function describeWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeWhitelistTemplateRequest $request DescribeWhitelistTemplateRequest
     *
     * @return DescribeWhitelistTemplateResponse DescribeWhitelistTemplateResponse
     */
    public function describeWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeWhitelistTemplateLinkedInstanceRequest $request DescribeWhitelistTemplateLinkedInstanceRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWhitelistTemplateLinkedInstanceResponse DescribeWhitelistTemplateLinkedInstanceResponse
     */
    public function describeWhitelistTemplateLinkedInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DescribeWhitelistTemplateLinkedInstanceRequest $request DescribeWhitelistTemplateLinkedInstanceRequest
     *
     * @return DescribeWhitelistTemplateLinkedInstanceResponse DescribeWhitelistTemplateLinkedInstanceResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [Usage notes](#)
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [Usage notes](#)
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DetachWhitelistTemplateToInstanceRequest $request DetachWhitelistTemplateToInstanceRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachWhitelistTemplateToInstanceResponse DetachWhitelistTemplateToInstanceResponse
     */
    public function detachWhitelistTemplateToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insName)) {
            $query['InsName'] = $request->insName;
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param DetachWhitelistTemplateToInstanceRequest $request DetachWhitelistTemplateToInstanceRequest
     *
     * @return DetachWhitelistTemplateToInstanceResponse DetachWhitelistTemplateToInstanceResponse
     */
    public function detachWhitelistTemplateToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachWhitelistTemplateToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param EvaluateLocalExtendDiskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EvaluateLocalExtendDiskResponse
     */
    public function evaluateLocalExtendDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
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
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EvaluateLocalExtendDisk',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EvaluateLocalExtendDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EvaluateLocalExtendDiskRequest $request
     *
     * @return EvaluateLocalExtendDiskResponse
     */
    public function evaluateLocalExtendDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateLocalExtendDiskWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
     * @param GetDBInstanceTopologyRequest $request GetDBInstanceTopologyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDBInstanceTopologyResponse GetDBInstanceTopologyResponse
     */
    public function getDBInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
     *   *
     * @param GetDBInstanceTopologyRequest $request GetDBInstanceTopologyRequest
     *
     * @return GetDBInstanceTopologyResponse GetDBInstanceTopologyResponse
     */
    public function getDBInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * RDS MySQL.
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
     * ### [](#)Supported database engines
     *   * RDS MySQL.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for MySQL instance](~~96102~~)
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for SQL Server instance](~~95693~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for MySQL instance](~~96102~~)
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for SQL Server instance](~~95693~~).
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
     * ### [](#)Supported database engine
     *   * *   SQL Server
     *   * ### [](#)Description
     *   * We recommend that you use Data Transmission Service (DTS). DTS provides data migration, subscription, and synchronization features that allow you to establish stable, secure transmission links. For more information, see [DTS API overview](~~49456~~).
     *   * ### [](#)Precautions
     *   * *   During the migration, the source instance is in the **Migrating** state, and the destination instance is in the **Importing** state.
     *   * *   Before you call this operation, make sure that the following requirements are met:
     *   *     *   The source and destination instances must run SQL Server and belong to the dedicated or dedicated host instance family. For more information about the supported instance types, see [Primary instance types](~~26312~~).
     *   *     *   The source and destination instances must be created by using the same user credentials.
     *   *     *   The instance is in the Running state.
     *   *     *   The source and destination databases must be in the Running state.
     *   *     *   The remaining storage of the destination instance must be greater than the storage capacity of the source instance.
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
     * ### [](#)Supported database engine
     *   * *   SQL Server
     *   * ### [](#)Description
     *   * We recommend that you use Data Transmission Service (DTS). DTS provides data migration, subscription, and synchronization features that allow you to establish stable, secure transmission links. For more information, see [DTS API overview](~~49456~~).
     *   * ### [](#)Precautions
     *   * *   During the migration, the source instance is in the **Migrating** state, and the destination instance is in the **Importing** state.
     *   * *   Before you call this operation, make sure that the following requirements are met:
     *   *     *   The source and destination instances must run SQL Server and belong to the dedicated or dedicated host instance family. For more information about the supported instance types, see [Primary instance types](~~26312~~).
     *   *     *   The source and destination instances must be created by using the same user credentials.
     *   *     *   The instance is in the Running state.
     *   *     *   The source and destination databases must be in the Running state.
     *   *     *   The remaining storage of the destination instance must be greater than the storage capacity of the source instance.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)Description
     *   * A full backup file contains the data of a self-managed MySQL instance. You can restore the data of a self-managed MySQL instance from a full backup file to an ApsaraDB RDS for MySQL instance.
     *   * ### [](#)Usage notes
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The self-managed MySQL instance runs MySQL 5.7 and is backed up by using XtraBackup. The name of the backup file ends with `_qp.xb`. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   The full backup file of the self-managed MySQL instance is uploaded to an Object Storage Service (OSS) bucket in the region of the ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * >  This operation is supported only for MySQL 5.7.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)Description
     *   * A full backup file contains the data of a self-managed MySQL instance. You can restore the data of a self-managed MySQL instance from a full backup file to an ApsaraDB RDS for MySQL instance.
     *   * ### [](#)Usage notes
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The self-managed MySQL instance runs MySQL 5.7 and is backed up by using XtraBackup. The name of the backup file ends with `_qp.xb`. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * *   The full backup file of the self-managed MySQL instance is uploaded to an Object Storage Service (OSS) bucket in the region of the ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 instance to the cloud](~~251779~~).
     *   * >  This operation is supported only for MySQL 5.7.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param ListClassesRequest $request ListClassesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClassesResponse ListClassesResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
     *   *
     * @param ListClassesRequest $request ListClassesRequest
     *
     * @return ListClassesResponse ListClassesResponse
     */
    public function listClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassesWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)Feature description
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)Feature description
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Migrate an ApsaraDB RDS for MySQL instance across zones in the same region](~~96746~~)
     *   * *   [Migrate an ApsaraDB RDS for PostgreSQL instance across zones in the same region](~~96746~~)
     *   * *   [Migrate an ApsaraDB RDS for SQL Server instance across zones in the same region](~~95658~~).
     *   *
     * @param MigrateConnectionToOtherZoneRequest $request MigrateConnectionToOtherZoneRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateConnectionToOtherZoneResponse MigrateConnectionToOtherZoneResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Migrate an ApsaraDB RDS for MySQL instance across zones in the same region](~~96746~~)
     *   * *   [Migrate an ApsaraDB RDS for PostgreSQL instance across zones in the same region](~~96746~~)
     *   * *   [Migrate an ApsaraDB RDS for SQL Server instance across zones in the same region](~~95658~~).
     *   *
     * @param MigrateConnectionToOtherZoneRequest $request MigrateConnectionToOtherZoneRequest
     *
     * @return MigrateConnectionToOtherZoneResponse MigrateConnectionToOtherZoneResponse
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Migrate an ApsaraDB RDS for MySQL instance across zones in the same region](~~96053~~)
     *   * *   [Migrate an ApsaraDB RDS for PostgreSQL instance across zones in the same region](~~96746~~)
     *   * *   [Migrate an ApsaraDB RDS for SQL Server instance across zones in the same region](~~95658~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Migrate an ApsaraDB RDS for MySQL instance across zones in the same region](~~96053~~)
     *   * *   [Migrate an ApsaraDB RDS for PostgreSQL instance across zones in the same region](~~96746~~)
     *   * *   [Migrate an ApsaraDB RDS for SQL Server instance across zones in the same region](~~95658~~).
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
     * ### [](#)Supported database engine
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Connect an RDS instance to a self-managed domain](~~170734~~).
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
     * ### [](#)Supported database engine
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Connect an RDS instance to a self-managed domain](~~170734~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Scheduled events for ApsaraDB RDS for MySQL instances](~~104183~~)
     *   * *   [Scheduled events for ApsaraDB RDS for PostgreSQL instances](~~104452~~)
     *   * *   [Scheduled events for ApsaraDB RDS for SQL Server instances](~~104451~~)
     *   * *   [Scheduled events for ApsaraDB RDS for MariaDB instances](~~104454~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Scheduled events for ApsaraDB RDS for MySQL instances](~~104183~~)
     *   * *   [Scheduled events for ApsaraDB RDS for PostgreSQL instances](~~104452~~)
     *   * *   [Scheduled events for ApsaraDB RDS for SQL Server instances](~~104451~~)
     *   * *   [Scheduled events for ApsaraDB RDS for MariaDB instances](~~104454~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for MySQL instance](~~98818~~)
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for PostgreSQL instance](~~96772~~)
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for SQL Server instance](~~95717~~)
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for MariaDB instance](~~97147~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for MySQL instance](~~98818~~)
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for PostgreSQL instance](~~96772~~)
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for SQL Server instance](~~95717~~)
     *   * *   [Configure an automatic backup policy for an ApsaraDB RDS for MariaDB instance](~~97147~~).
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
     * @param ModifyCustinsResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCustinsResourceResponse
     */
    public function modifyCustinsResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adjustDeadline)) {
            $query['AdjustDeadline'] = $request->adjustDeadline;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->increaseRatio)) {
            $query['IncreaseRatio'] = $request->increaseRatio;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->restoreOriginalSpecification)) {
            $query['RestoreOriginalSpecification'] = $request->restoreOriginalSpecification;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCustinsResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCustinsResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCustinsResourceRequest $request
     *
     * @return ModifyCustinsResourceResponse
     */
    public function modifyCustinsResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustinsResourceWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Modify automatic update settings for an ApsaraDB RDS for MySQL instance](~~96059~~)
     *   * *   [Modify automatic update settings for an ApsaraDB RDS for PostgreSQL instance](~~146895~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Modify automatic update settings for an ApsaraDB RDS for MySQL instance](~~96059~~)
     *   * *   [Modify automatic update settings for an ApsaraDB RDS for PostgreSQL instance](~~146895~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * >  The configuration item that is supported is [PgBouncer](~~2398301~~) of ApsaraDB RDS for PostgreSQL instances.
     *   *
     * @param ModifyDBInstanceConfigRequest $request ModifyDBInstanceConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConfigResponse ModifyDBInstanceConfigResponse
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * >  The configuration item that is supported is [PgBouncer](~~2398301~~) of ApsaraDB RDS for PostgreSQL instances.
     *   *
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for MySQL instance](~~96163~~)
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for PostgreSQL instance](~~96788~~)
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for SQL Server instance](~~95740~~)
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for MariaDB instance](~~97157~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for MySQL instance](~~96163~~)
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for PostgreSQL instance](~~96788~~)
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for SQL Server instance](~~95740~~)
     *   * *   [Change the endpoint and port number of an ApsaraDB RDS for MariaDB instance](~~97157~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure a data replication latency for a read-only ApsaraDB RDS for MySQL instance](~~96056~~).
     *   *
     * @param ModifyDBInstanceDelayedReplicationTimeRequest $request ModifyDBInstanceDelayedReplicationTimeRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceDelayedReplicationTimeResponse ModifyDBInstanceDelayedReplicationTimeResponse
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure a data replication latency for a read-only ApsaraDB RDS for MySQL instance](~~96056~~).
     *   *
     * @param ModifyDBInstanceDelayedReplicationTimeRequest $request ModifyDBInstanceDelayedReplicationTimeRequest
     *
     * @return ModifyDBInstanceDelayedReplicationTimeResponse ModifyDBInstanceDelayedReplicationTimeResponse
     */
    public function modifyDBInstanceDelayedReplicationTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDelayedReplicationTimeWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Enable and disable instance release protection for an ApsaraDB RDS for MySQL instance](~~414512~~)
     *   * *   [Enable and disable instance release protection for an ApsaraDB RDS for PostgreSQL instance](~~471512~~)
     *   * *   [Enable and disable instance release protection for an ApsaraDB RDS for SQL Server instance](~~416209~~)
     *   * *   [Enable and disable release protection for an ApsaraDB RDS for MariaDB instance](~~414512~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Enable and disable instance release protection for an ApsaraDB RDS for MySQL instance](~~414512~~)
     *   * *   [Enable and disable instance release protection for an ApsaraDB RDS for PostgreSQL instance](~~471512~~)
     *   * *   [Enable and disable instance release protection for an ApsaraDB RDS for SQL Server instance](~~416209~~)
     *   * *   [Enable and disable release protection for an ApsaraDB RDS for MariaDB instance](~~414512~~).
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
     * ### [](#)Supported database engines
     *   * RDS MySQL.
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
     * ### [](#)Supported database engines
     *   * RDS MySQL.
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
     * ### [](#)Supported database engines
     *   * RDS MySQL
     *   * ### [](#)Precautions
     *   * *   You can modify the following information about the endpoint of an instance: the public and internal endpoints, the public and internal ports, and the virtual private cloud (VPC), vSwitch, and IP address of the internal endpoint.
     *   * *   The VPC and vSwitch must be modified at the same time. If you specify the VPC, vSwitch, and IP address of the internal endpoint, you do not need to specify the endpoint and port. If you specify the endpoint and port, you do not need to specify the VPC, vSwitch, and IP address of the internal endpoint.
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
     * ### [](#)Supported database engines
     *   * RDS MySQL
     *   * ### [](#)Precautions
     *   * *   You can modify the following information about the endpoint of an instance: the public and internal endpoints, the public and internal ports, and the virtual private cloud (VPC), vSwitch, and IP address of the internal endpoint.
     *   * *   The VPC and vSwitch must be modified at the same time. If you specify the VPC, vSwitch, and IP address of the internal endpoint, you do not need to specify the endpoint and port. If you specify the endpoint and port, you do not need to specify the VPC, vSwitch, and IP address of the internal endpoint.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Set a maintenance window for an ApsaraDB RDS for MySQL instance](~~96052~~)
     *   * *   [Set a maintenance window for an ApsaraDB RDS for PostgreSQL instance](~~96799~~)
     *   * *   [Set a maintenance window for an ApsaraDB RDS for SQL Sever instance](~~95657~~)
     *   * *   [Set a maintenance window for an ApsaraDB RDS for MariaDB instance](~~97473~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Set a maintenance window for an ApsaraDB RDS for MySQL instance](~~96052~~)
     *   * *   [Set a maintenance window for an ApsaraDB RDS for PostgreSQL instance](~~96799~~)
     *   * *   [Set a maintenance window for an ApsaraDB RDS for SQL Sever instance](~~95657~~)
     *   * *   [Set a maintenance window for an ApsaraDB RDS for MariaDB instance](~~97473~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [View the Enhanced Monitoring metrics](~~299200~~).
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
     * ### [](#)Supported database engines
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [View the Enhanced Monitoring metrics](~~299200~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)Usage notes
     *   * If you use the Every 5 Seconds monitoring frequency, you are charged additional fees. Before you call this operation, make sure that you understand the [billing methods and pricing](~~45020~~) of ApsaraDB RDS.
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure the monitoring frequency for an ApsaraDB RDS for MySQL instance](~~96112~~)
     *   * *   [Configure the monitoring frequency for an ApsaraDB RDS for SQL Server instance](~~95710~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)Usage notes
     *   * If you use the Every 5 Seconds monitoring frequency, you are charged additional fees. Before you call this operation, make sure that you understand the [billing methods and pricing](~~45020~~) of ApsaraDB RDS.
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure the monitoring frequency for an ApsaraDB RDS for MySQL instance](~~96112~~)
     *   * *   [Configure the monitoring frequency for an ApsaraDB RDS for SQL Server instance](~~95710~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * *   [Configure the hybrid access solution for an ApsaraDB RDS for MySQL instance](~~96110~~)
     *   * *   [Configure the hybrid access solution for an ApsaraDB RDS for SQL Server instance](~~95708~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * *   [Configure the hybrid access solution for an ApsaraDB RDS for MySQL instance](~~96110~~)
     *   * *   [Configure the hybrid access solution for an ApsaraDB RDS for SQL Server instance](~~95708~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Change the network type of an ApsaraDB RDS for MySQL instance](~~96109~~)
     *   * *   [Change the network type of an ApsaraDB RDS for PostgreSQL instance](~~96761~~)
     *   * *   [Change the network type of an ApsaraDB RDS for SQL Server instance](~~95707~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Change the network type of an ApsaraDB RDS for MySQL instance](~~96109~~)
     *   * *   [Change the network type of an ApsaraDB RDS for PostgreSQL instance](~~96761~~)
     *   * *   [Change the network type of an ApsaraDB RDS for SQL Server instance](~~95707~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the following topics:
     *   * *   [Change the billing method of an ApsaraDB RDS for MySQL instance from pay-as-you-go to subscription](~~96048~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for PostgreSQL instance from pay-as-you-go to subscription](~~96743~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for SQL Server instance from pay-as-you-go to subscription](~~95631~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for MariaDB instance from pay-as-you-go to subscription](~~97120~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the following topics:
     *   * *   [Change the billing method of an ApsaraDB RDS for MySQL instance from pay-as-you-go to subscription](~~96048~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for PostgreSQL instance from pay-as-you-go to subscription](~~96743~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for SQL Server instance from pay-as-you-go to subscription](~~95631~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for MariaDB instance from pay-as-you-go to subscription](~~97120~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the SSL encryption feature for an ApsaraDB RDS for MySQL instance](~~96120~~)
     *   * *   [Use the SSL encryption feature for an ApsaraDB RDS for PostgreSQL instance](~~229517~~)
     *   * *   [Use the SSL encryption feature for an ApsaraDB RDS for SQL Server instance](~~95715~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the SSL encryption feature for an ApsaraDB RDS for MySQL instance](~~96120~~)
     *   * *   [Use the SSL encryption feature for an ApsaraDB RDS for PostgreSQL instance](~~229517~~)
     *   * *   [Use the SSL encryption feature for an ApsaraDB RDS for SQL Server instance](~~95715~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Fees are generated if the call is successful. Before you call this operation, carefully read the following documentation:
     *   * *   [Change the specifications of an ApsaraDB RDS for MySQL instance](~~96061~~)
     *   * *   [Change the specifications of an ApsaraDB RDS for PostgreSQL instance](~~96750~~)
     *   * *   [Change the specifications of an ApsaraDB RDS for SQL Server instance](~~95665~~)
     *   * *   [Change the specifications of an ApsaraDB RDS for MariaDB instance](~~97129~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Fees are generated if the call is successful. Before you call this operation, carefully read the following documentation:
     *   * *   [Change the specifications of an ApsaraDB RDS for MySQL instance](~~96061~~)
     *   * *   [Change the specifications of an ApsaraDB RDS for PostgreSQL instance](~~96750~~)
     *   * *   [Change the specifications of an ApsaraDB RDS for SQL Server instance](~~95665~~)
     *   * *   [Change the specifications of an ApsaraDB RDS for MariaDB instance](~~97129~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure TDE for an ApsaraDB RDS for MySQL instance](~~96121~~)
     *   * *   [Configure TDE for an ApsaraDB RDS for PostgreSQL instance](~~465652~~)
     *   * *   [Configure TDE for an ApsaraDB RDS for SQL Server instance](~~95716~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure TDE for an ApsaraDB RDS for MySQL instance](~~96121~~)
     *   * *   [Configure TDE for an ApsaraDB RDS for PostgreSQL instance](~~465652~~)
     *   * *   [Configure TDE for an ApsaraDB RDS for SQL Server instance](~~95716~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)References
     *   * > Fees are generated if the call is successful. Before you call this operation, carefully read the following topics:
     *   * *   [Change the specifications of an ApsaraDB RDS for MySQL instance](~~96061~~).
     *   *
     * @param ModifyDBNodeRequest $tmpReq  ModifyDBNodeRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBNodeResponse ModifyDBNodeResponse
     */
    public function modifyDBNodeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDBNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNode)) {
            $request->DBNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNode, 'DBNode', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->produceAsync)) {
            $query['ProduceAsync'] = $request->produceAsync;
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
            'action'      => 'ModifyDBNode',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * ### [](#)References
     *   * > Fees are generated if the call is successful. Before you call this operation, carefully read the following topics:
     *   * *   [Change the specifications of an ApsaraDB RDS for MySQL instance](~~96061~~).
     *   *
     * @param ModifyDBNodeRequest $request ModifyDBNodeRequest
     *
     * @return ModifyDBNodeResponse ModifyDBNodeResponse
     */
    public function modifyDBNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodeWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * >  Starting October 17, 2023, ApsaraDB RDS provides a dedicated proxy free of charge for each ApsaraDB RDS for MySQL instance on RDS Cluster Edition. For more information, see [\\[Special offers/Price changes\\] One proxy is provided free of charge for ApsaraDB RDS for MySQL instances on RDS Cluster Edition](~~2555466~~).
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Enable and configure the dedicated proxy feature for an ApsaraDB RDS for MySQL instance](~~197456~~)
     *   * *   [Enable and configure the dedicated proxy feature for an ApsaraDB RDS for PostgreSQL instance](~~418272~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * >  Starting October 17, 2023, ApsaraDB RDS provides a dedicated proxy free of charge for each ApsaraDB RDS for MySQL instance on RDS Cluster Edition. For more information, see [\\[Special offers/Price changes\\] One proxy is provided free of charge for ApsaraDB RDS for MySQL instances on RDS Cluster Edition](~~2555466~~).
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Enable and configure the dedicated proxy feature for an ApsaraDB RDS for MySQL instance](~~197456~~)
     *   * *   [Enable and configure the dedicated proxy feature for an ApsaraDB RDS for PostgreSQL instance](~~418272~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Enable and configure the dedicated proxy feature](~~197456~~)
     *   * *   [Create a database proxy terminal for an ApsaraDB RDS for PostgreSQL instance](~~418273~~).
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
     * ### [](#)Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Enable and configure the dedicated proxy feature](~~197456~~)
     *   * *   [Create a database proxy terminal for an ApsaraDB RDS for PostgreSQL instance](~~418273~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for MySQL instance](~~184921~~)
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for PostgreSQL instance](~~418274~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for MySQL instance](~~184921~~)
     *   * *   [Configure the dedicated proxy endpoint of an ApsaraDB RDS for PostgreSQL instance](~~418274~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure automatic storage expansion for ApsaraDB RDS for MySQL](~~173826~~)
     *   * *   [Configure automatic storage expansion for ApsaraDB RDS for PostgreSQL](~~432496~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Configure automatic storage expansion for ApsaraDB RDS for MySQL](~~173826~~)
     *   * *   [Configure automatic storage expansion for ApsaraDB RDS for PostgreSQL](~~432496~~).
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
     * ### [](#)Supported database engine
     *   * *   SQL Server.
     *   *
     * @param ModifyDatabaseConfigRequest $request ModifyDatabaseConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseConfigResponse ModifyDatabaseConfigResponse
     */
    public function modifyDatabaseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->databasePropertyName)) {
            $query['DatabasePropertyName'] = $request->databasePropertyName;
        }
        if (!Utils::isUnset($request->databasePropertyValue)) {
            $query['DatabasePropertyValue'] = $request->databasePropertyValue;
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
            'action'      => 'ModifyDatabaseConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Supported database engine
     *   * *   SQL Server.
     *   *
     * @param ModifyDatabaseConfigRequest $request ModifyDatabaseConfigRequest
     *
     * @return ModifyDatabaseConfigResponse ModifyDatabaseConfigResponse
     */
    public function modifyDatabaseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseConfigWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * RDS MySQL
     *   * ### [](#)References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * [Configure SSL encryption for a proxy endpoint](~~188164~~).
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
     * ### [](#)Supported database engines
     *   * RDS MySQL
     *   * ### [](#)References
     *   * > : Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * [Configure SSL encryption for a proxy endpoint](~~188164~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [What is availability check?](~~207467~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [What is availability check?](~~207467~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for MySQL instance](~~96054~~)
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for PostgreSQL instance](~~96747~~)
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for SQL Server instance](~~95659~~)
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for MariaDB instance](~~97127~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for MySQL instance](~~96054~~)
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for PostgreSQL instance](~~96747~~)
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for SQL Server instance](~~95659~~)
     *   * *   [Use the automatic primary/secondary switchover feature for an ApsaraDB RDS for MariaDB instance](~~97127~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### [](#)References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the cross-region backup feature of an ApsaraDB RDS for MySQL instance](~~120824~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for PostgreSQL instance](~~206671~~)
     *   * *   [Use the cross-region backup feature for an ApsaraDB RDS for SQL Server instance](~~187923~~).
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Connect an ApsaraDB RDS for PostgreSQL instance to a self-managed AD domain](~~349288~~)
     *   * *   [The pg_hba.conf File](https://www.postgresql.org/docs/11/auth-pg-hba-conf.html).
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
     * ### [](#)Supported database engines
     *   * RDS PostgreSQL
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Connect an ApsaraDB RDS for PostgreSQL instance to a self-managed AD domain](~~349288~~)
     *   * *   [The pg_hba.conf File](https://www.postgresql.org/docs/11/auth-pg-hba-conf.html).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### [](#)References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for MySQL instances](~~130565~~)
     *   * *   [Use a parameter template to configure the parameters of ApsaraDB RDS for PostgreSQL instances](~~457176~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The read/write splitting feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local disks
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### [](#)Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The read/write splitting feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition with local disks
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
     * ### Supported database engines
     *   * RDS MySQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Set the data replication latency of a read-only ApsaraDB RDS for MySQL instance](~~96056~~).
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
     * ### Supported database engines
     *   * RDS MySQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Set the data replication latency of a read-only ApsaraDB RDS for MySQL instance](~~96056~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Transfer resources across resource groups](~~94487~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Transfer resources across resource groups](~~94487~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the SQL Explorer and Audit feature for an ApsaraDB RDS for MySQL instance](~~476574~~)
     *   * *   [Use the SQL Audit feature for an ApsaraDB RDS for PostgreSQL instance](~~96766~~)
     *   * *   [Use the SQL Audit feature for an ApsaraDB RDS for SQL Server instance](~~95712~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Use the SQL Explorer and Audit feature for an ApsaraDB RDS for MySQL instance](~~476574~~)
     *   * *   [Use the SQL Audit feature for an ApsaraDB RDS for PostgreSQL instance](~~96766~~)
     *   * *   [Use the SQL Audit feature for an ApsaraDB RDS for SQL Server instance](~~95712~~).
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
     * ### Supported database engines
     *   * RDS MySQL
     *   * ### Precautions
     *   * After you shorten the log backup retention period, log backup files that are stored longer than the specified log backup retention period are immediately deleted.
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the SQL Explorer and Audit feature](~~476574~~).
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
     * ### Supported database engines
     *   * RDS MySQL
     *   * ### Precautions
     *   * After you shorten the log backup retention period, log backup files that are stored longer than the specified log backup retention period are immediately deleted.
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Use the SQL Explorer and Audit feature](~~476574~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for MySQL instance](~~96118~~)
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for PostgreSQL instance](~~43187~~)
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for SQL Server instance](~~43186~~)
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for MariaDB instance](~~90336~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for MySQL instance](~~96118~~)
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for PostgreSQL instance](~~43187~~)
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for SQL Server instance](~~43186~~)
     *   * *   [Configure an IP address whitelist for an ApsaraDB RDS for MariaDB instance](~~90336~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param ModifyWhitelistTemplateRequest $request ModifyWhitelistTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWhitelistTemplateResponse ModifyWhitelistTemplateResponse
     */
    public function modifyWhitelistTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipWhitelist)) {
            $query['IpWhitelist'] = $request->ipWhitelist;
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server.
     *   *
     * @param ModifyWhitelistTemplateRequest $request ModifyWhitelistTemplateRequest
     *
     * @return ModifyWhitelistTemplateResponse ModifyWhitelistTemplateResponse
     */
    public function modifyWhitelistTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWhitelistTemplateWithOptions($request, $runtime);
    }

    /**
     * @param PreCheckCreateOrderForCreateDBNodesRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return PreCheckCreateOrderForCreateDBNodesResponse
     */
    public function preCheckCreateOrderForCreateDBNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PreCheckCreateOrderForCreateDBNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNode)) {
            $request->DBNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNode, 'DBNode', 'json');
        }
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
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNodeShrink)) {
            $query['DBNode'] = $request->DBNodeShrink;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $query['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
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
            'action'      => 'PreCheckCreateOrderForCreateDBNodes',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreCheckCreateOrderForCreateDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreCheckCreateOrderForCreateDBNodesRequest $request
     *
     * @return PreCheckCreateOrderForCreateDBNodesResponse
     */
    public function preCheckCreateOrderForCreateDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preCheckCreateOrderForCreateDBNodesWithOptions($request, $runtime);
    }

    /**
     * @param PreCheckCreateOrderForDeleteDBNodesRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return PreCheckCreateOrderForDeleteDBNodesResponse
     */
    public function preCheckCreateOrderForDeleteDBNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PreCheckCreateOrderForDeleteDBNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBNodeId)) {
            $request->DBNodeIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBNodeId, 'DBNodeId', 'json');
        }
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
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNodeIdShrink)) {
            $query['DBNodeId'] = $request->DBNodeIdShrink;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $query['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
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
            'action'      => 'PreCheckCreateOrderForDeleteDBNodes',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreCheckCreateOrderForDeleteDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreCheckCreateOrderForDeleteDBNodesRequest $request
     *
     * @return PreCheckCreateOrderForDeleteDBNodesResponse
     */
    public function preCheckCreateOrderForDeleteDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preCheckCreateOrderForDeleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### Description
     *   * The system automatically uploads log backup files to Object Storage Service (OSS) buckets. If the remaining storage of an instance is insufficient, you can call this operation to upload the log backup files of the instance to OSS buckets. After the upload is complete, the system deletes these files from the instance to release storage. This operation is called to upload log backup files from an instance to OSS buckets and then delete these files from the instance. If the instance runs SQL Server, transaction log backup files are compressed before they are uploaded.
     *   * ### Precautions
     *   * *   When you upload log backup files, the data restoration feature is not affected.
     *   * *   This operation is called to release storage. The backup storage usage is not reduced.
     *   * *   The OSS buckets to which log backup files are uploaded are provided by the system. You do not need to purchase these OSS buckets. In addition, you cannot access these OSS buckets.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### Description
     *   * The system automatically uploads log backup files to Object Storage Service (OSS) buckets. If the remaining storage of an instance is insufficient, you can call this operation to upload the log backup files of the instance to OSS buckets. After the upload is complete, the system deletes these files from the instance to release storage. This operation is called to upload log backup files from an instance to OSS buckets and then delete these files from the instance. If the instance runs SQL Server, transaction log backup files are compressed before they are uploaded.
     *   * ### Precautions
     *   * *   When you upload log backup files, the data restoration feature is not affected.
     *   * *   This operation is called to release storage. The backup storage usage is not reduced.
     *   * *   The OSS buckets to which log backup files are uploaded are provided by the system. You do not need to purchase these OSS buckets. In addition, you cannot access these OSS buckets.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### Feature description
     *   * The notifications are highlighted at the top of the ApsaraDB RDS console. The notifications include renewal reminders and reminders of instance creation failures.
     *   * After you call this operation to query notifications, you can call the [ConfirmNotify](~~610444~~) operation to mark the notifications as confirmed, which means that you understand the content of the notifications.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### Feature description
     *   * The notifications are highlighted at the top of the ApsaraDB RDS console. The notifications include renewal reminders and reminders of instance creation failures.
     *   * After you call this operation to query notifications, you can call the [ConfirmNotify](~~610444~~) operation to mark the notifications as confirmed, which means that you understand the content of the notifications.
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
     * @param QueryRecommendByCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRecommendByCodeResponse
     */
    public function queryRecommendByCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
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
            'action'      => 'QueryRecommendByCode',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecommendByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRecommendByCodeRequest $request
     *
     * @return QueryRecommendByCodeResponse
     */
    public function queryRecommendByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecommendByCodeWithOptions($request, $runtime);
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
     * The operation is phased out.
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
     * The operation is phased out.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * *   [Release the public endpoint of an ApsaraDB RDS for MySQL instance](~~26128~~)
     *   * *   [Release the public endpoint of an ApsaraDB RDS for PostgreSQL instance](~~97738~~)
     *   * *   [Release the public endpoint of an ApsaraDB RDS for SQL Server instance](~~97736~~)
     *   * *   [Release the public endpoint of an ApsaraDB RDS for MariaDB instance](~~97740~~).
     *   *
     * @param ReleaseInstanceConnectionRequest $request ReleaseInstanceConnectionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceConnectionResponse ReleaseInstanceConnectionResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * *   [Release the public endpoint of an ApsaraDB RDS for MySQL instance](~~26128~~)
     *   * *   [Release the public endpoint of an ApsaraDB RDS for PostgreSQL instance](~~97738~~)
     *   * *   [Release the public endpoint of an ApsaraDB RDS for SQL Server instance](~~97736~~)
     *   * *   [Release the public endpoint of an ApsaraDB RDS for MariaDB instance](~~97740~~).
     *   *
     * @param ReleaseInstanceConnectionRequest $request ReleaseInstanceConnectionRequest
     *
     * @return ReleaseInstanceConnectionResponse ReleaseInstanceConnectionResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The read/write splitting feature is enabled for the instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local disks)
     *   *     *   MySQL 5.6
     *   *     *   SQL Server on RDS Cluster Edition.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### Prerequisites
     *   * Before you call this operation, make sure that the following requirements are met:
     *   * *   The shared proxy feature is enabled for your ApsaraDB RDS for MySQL instance.
     *   * *   The read/write splitting feature is enabled for the instance.
     *   * *   The instance must run one of the following database engine versions and RDS editions:
     *   *     *   MySQL 5.7 on RDS High-availability Edition (with local disks)
     *   *     *   MySQL 5.6
     *   *     *   SQL Server on RDS Cluster Edition.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * *   A maximum of 10 tags can be removed in a single request.
     *   * *   If a tag is removed from all instances to which the tag is added, the tag is automatically deleted.
     *   * *   If you specify only TagKey, all tags that match the TagKey condition are removed.
     *   * *   You must specify at least TagKey or a pair of TagKey and TagValue.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * *   A maximum of 10 tags can be removed in a single request.
     *   * *   If a tag is removed from all instances to which the tag is added, the tag is automatically deleted.
     *   * *   If you specify only TagKey, all tags that match the TagKey condition are removed.
     *   * *   You must specify at least TagKey or a pair of TagKey and TagValue.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the following topics:
     *   * *   [Manually renew an ApsaraDB RDS for MySQL instance](~~96050~~)
     *   * *   [Manually renew an ApsaraDB RDS for PostgreSQL instance](~~96741~~)
     *   * *   [Manually renew an ApsaraDB RDS for SQL Server instance](~~95637~~)
     *   * *   [Manually renew an ApsaraDB RDS for MariaDB instance](~~97122~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * >  Fees of an instance are changed if the call is successful. Before you call this operation, carefully read the following topics:
     *   * *   [Manually renew an ApsaraDB RDS for MySQL instance](~~96050~~)
     *   * *   [Manually renew an ApsaraDB RDS for PostgreSQL instance](~~96741~~)
     *   * *   [Manually renew an ApsaraDB RDS for SQL Server instance](~~95637~~)
     *   * *   [Manually renew an ApsaraDB RDS for MariaDB instance](~~97122~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Reset of the permissions of privileged accounts](~~140724~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Reset of the permissions of privileged accounts](~~140724~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Reset the password of an ApsaraDB RDS for MySQL instance](~~96100~~)
     *   * *   [Reset the password of an ApsaraDB RDS for PostgreSQL instance](~~96814~~)
     *   * *   [Reset the password of an ApsaraDB RDS for SQL Server instance](~~95691~~)
     *   * *   [Reset the password of an ApsaraDB RDS for MariaDB instance](~~97133~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Reset the password of an ApsaraDB RDS for MySQL instance](~~96100~~)
     *   * *   [Reset the password of an ApsaraDB RDS for PostgreSQL instance](~~96814~~)
     *   * *   [Reset the password of an ApsaraDB RDS for SQL Server instance](~~95691~~)
     *   * *   [Reset the password of an ApsaraDB RDS for MariaDB instance](~~97133~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Restart an ApsaraDB RDS for MySQL instance](~~96051~~)
     *   * *   [Restart an ApsaraDB RDS for PostgreSQL instance](~~96798~~)
     *   * *   [Restart an ApsaraDB RDS for SQL Server instance](~~95656~~)
     *   * *   [Restart an ApsaraDB RDS for MariaDB instance](~~97472~~).
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
     * ### Supported database engines
     *   * *   RDS MySQL
     *   * *   RDS PostgreSQL
     *   * *   RDS SQL Server
     *   * *   RDS MariaDB
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Restart an ApsaraDB RDS for MySQL instance](~~96051~~)
     *   * *   [Restart an ApsaraDB RDS for PostgreSQL instance](~~96798~~)
     *   * *   [Restart an ApsaraDB RDS for SQL Server instance](~~95656~~)
     *   * *   [Restart an ApsaraDB RDS for MariaDB instance](~~97472~~).
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
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)Description
     *   * ApsaraDB RDS for MySQL supports the restoration of individual databases and tables. If you delete databases or tables from an instance, you can restore the databases or tables by using a backup file. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~). Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing migration tasks.
     *   * *   If you want to restore data to a specific point in time, make sure that the log backup feature is enabled for the instance. For more information, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~).
     *   * *   The restoration of individual databases or tables is enabled, and new backups are created. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * *   The names that you want to use for the restored tables do not exist in the instance.
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
     * ### [](#)Supported database engines
     *   * MySQL
     *   * ### [](#)Description
     *   * ApsaraDB RDS for MySQL supports the restoration of individual databases and tables. If you delete databases or tables from an instance, you can restore the databases or tables by using a backup file. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~). Before you call this operation, make sure that the following requirements are met:
     *   * *   The instance is in the Running state.
     *   * *   The instance does not have ongoing migration tasks.
     *   * *   If you want to restore data to a specific point in time, make sure that the log backup feature is enabled for the instance. For more information, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~).
     *   * *   The restoration of individual databases or tables is enabled, and new backups are created. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   * *   The names that you want to use for the restored tables do not exist in the instance.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Prerequisites
     *   * *   The instance is in the Running state.
     *   * *   The database is in the Running state.
     *   * ### [](#)Precautions
     *   * *   The permissions that can be revoked include SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, REFERENCES, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, and TRIGGER.
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition and run PostgreSQL.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Prerequisites
     *   * *   The instance is in the Running state.
     *   * *   The database is in the Running state.
     *   * ### [](#)Precautions
     *   * *   The permissions that can be revoked include SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, REFERENCES, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, and TRIGGER.
     *   * *   This operation is not supported for instances that run SQL Server 2017 on RDS Cluster Edition and run PostgreSQL.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for MySQL instance](~~96102~~)
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for PostgreSQL instance](~~146887~~)
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for SQL Server instance](~~95693~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for MySQL instance](~~96102~~)
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for PostgreSQL instance](~~146887~~)
     *   * *   [Grant permissions to the service account of an ApsaraDB RDS for SQL Server instance](~~95693~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * *   [Resume an ApsaraDB RDS for MySQL instance](~~427093~~)
     *   * *   [Resume an ApsaraDB RDS for PostgreSQL instance](~~452314~~)
     *   * *   [Resume an ApsaraDB RDS for SQL Server instance](~~462504~~).
     *   *
     * @param StartDBInstanceRequest $request StartDBInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDBInstanceResponse StartDBInstanceResponse
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation:
     *   * *   [Resume an ApsaraDB RDS for MySQL instance](~~427093~~)
     *   * *   [Resume an ApsaraDB RDS for PostgreSQL instance](~~452314~~)
     *   * *   [Resume an ApsaraDB RDS for SQL Server instance](~~462504~~).
     *   *
     * @param StartDBInstanceRequest $request StartDBInstanceRequest
     *
     * @return StartDBInstanceResponse StartDBInstanceResponse
     */
    public function startDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDBInstanceWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Suspend an ApsaraDB RDS for MySQL instance](~~427093~~)
     *   * *   [Suspend an ApsaraDB RDS for PostgreSQL instance](~~452314~~)
     *   * *   [Suspend an ApsaraDB RDS for SQL Server instance](~~462504~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Suspend an ApsaraDB RDS for MySQL instance](~~427093~~)
     *   * *   [Suspend an ApsaraDB RDS for PostgreSQL instance](~~452314~~)
     *   * *   [Suspend an ApsaraDB RDS for SQL Server instance](~~462504~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for MySQL instances](~~96054~~)
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for PostgreSQL instances](~~96747~~)
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for SQL Server instances](~~95659~~)
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for MariaDB instances](~~97127~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for MySQL instances](~~96054~~)
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for PostgreSQL instances](~~96747~~)
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for SQL Server instances](~~95659~~)
     *   * *   [Switch workloads between primary and secondary ApsaraDB RDS for MariaDB instances](~~97127~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### Prerequisites
     *   * *   The instance is connected by using its internal or public endpoint.
     *   * *   The instance is in the Running state.
     *   * *   The number of times that you have switched the instance between its internal and public endpoints within the last 24 hours does not reach 20.
     *   * *   The instance resides in the classic network.
     *   * ### Usage notes
     *   * After the endpoint that is used to connect to the instance is changed, you must update the endpoint information in the code of your application and restart the application.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   SQL Server
     *   * ### Prerequisites
     *   * *   The instance is connected by using its internal or public endpoint.
     *   * *   The instance is in the Running state.
     *   * *   The number of times that you have switched the instance between its internal and public endpoints within the last 24 hours does not reach 20.
     *   * *   The instance resides in the classic network.
     *   * ### Usage notes
     *   * After the endpoint that is used to connect to the instance is changed, you must update the endpoint information in the code of your application and restart the application.
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Change the VPC and vSwitch for an ApsaraDB RDS for MySQL instance](~~137567~~)
     *   * *   [Change the vSwitch for an ApsaraDB RDS for PostgreSQL instance](~~146885~~)
     *   * *   [Change the VPC and vSwitch for an ApsaraDB RDS for SQL Server instance](~~347675~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Change the VPC and vSwitch for an ApsaraDB RDS for MySQL instance](~~137567~~)
     *   * *   [Change the vSwitch for an ApsaraDB RDS for PostgreSQL instance](~~146885~~)
     *   * *   [Change the VPC and vSwitch for an ApsaraDB RDS for SQL Server instance](~~347675~~).
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
     * This operation is phased out.
     *   *
     * @param SwitchGuardToMasterInstanceRequest $request SwitchGuardToMasterInstanceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchGuardToMasterInstanceResponse SwitchGuardToMasterInstanceResponse
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
     * This operation is phased out.
     *   *
     * @param SwitchGuardToMasterInstanceRequest $request SwitchGuardToMasterInstanceRequest
     *
     * @return SwitchGuardToMasterInstanceResponse SwitchGuardToMasterInstanceResponse
     */
    public function switchGuardToMasterInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGuardToMasterInstanceWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Create tags for an ApsaraDB RDS for MySQL instance](~~96149~~)
     *   * *   [Create tags for an ApsaraDB RDS for PostgreSQL instance](~~96777~~)
     *   * *   [Create tags for an ApsaraDB RDS for SQL Server instance](~~95726~~)
     *   * *   [Create tags for an ApsaraDB RDS for MariaDB instance](~~97152~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * *   [Create tags for an ApsaraDB RDS for MySQL instance](~~96149~~)
     *   * *   [Create tags for an ApsaraDB RDS for PostgreSQL instance](~~96777~~)
     *   * *   [Create tags for an ApsaraDB RDS for SQL Server instance](~~95726~~)
     *   * *   [Create tags for an ApsaraDB RDS for MariaDB instance](~~97152~~).
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
     *   *
     * @param TerminateMigrateTaskRequest $request TerminateMigrateTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return TerminateMigrateTaskResponse TerminateMigrateTaskResponse
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
     * ### [](#)Supported database engines
     *   * *   SQL Server.
     *   *
     * @param TerminateMigrateTaskRequest $request TerminateMigrateTaskRequest
     *
     * @return TerminateMigrateTaskResponse TerminateMigrateTaskResponse
     */
    public function terminateMigrateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateMigrateTaskWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Fees are generated if the call is successful. Before you call this operation, you must read the following documentation.
     *   * *   [Change the billing method of an ApsaraDB RDS for MySQL instance from pay-as-you-go to subscription](~~96048~~) or [Change the billing method of an ApsaraDB RDS for MySQL instance from subscription to pay-as-you-go](~~161875~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for PostgreSQL instance from pay-as-you-go to subscription](~~96743~~) or [Change the billing method of an ApsaraDB RDS for PostgreSQL instance from subscription to pay-as-you-go](~~162756~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for SQL Server instance from pay-as-you-go to subscription](~~95631~~) or [Change the billing method of an ApsaraDB RDS for SQL Server instance from subscription to pay-as-you-go](~~162755~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for MariaDB instance from pay-as-you-go to subscription](~~97120~~) or [Change the billing method of an ApsaraDB RDS for MariaDB instance from subscription to pay-as-you-go](~~169252~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### References
     *   * > Fees are generated if the call is successful. Before you call this operation, you must read the following documentation.
     *   * *   [Change the billing method of an ApsaraDB RDS for MySQL instance from pay-as-you-go to subscription](~~96048~~) or [Change the billing method of an ApsaraDB RDS for MySQL instance from subscription to pay-as-you-go](~~161875~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for PostgreSQL instance from pay-as-you-go to subscription](~~96743~~) or [Change the billing method of an ApsaraDB RDS for PostgreSQL instance from subscription to pay-as-you-go](~~162756~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for SQL Server instance from pay-as-you-go to subscription](~~95631~~) or [Change the billing method of an ApsaraDB RDS for SQL Server instance from subscription to pay-as-you-go](~~162755~~)
     *   * *   [Change the billing method of an ApsaraDB RDS for MariaDB instance from pay-as-you-go to subscription](~~97120~~) or [Change the billing method of an ApsaraDB RDS for MariaDB instance from subscription to pay-as-you-go](~~169252~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Lock an account of an ApsaraDB RDS for PostgreSQL instance](~~147649~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Lock an account of an ApsaraDB RDS for PostgreSQL instance](~~147649~~).
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * *   You can remove up to 20 tags at a time.
     *   * *   If a tag is removed from an instance and is not added to other instances, the tag is automatically deleted.
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
     * ### [](#)Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * *   MariaDB
     *   * ### [](#)Usage notes
     *   * *   You can remove up to 20 tags at a time.
     *   * *   If a tag is removed from an instance and is not added to other instances, the tag is automatically deleted.
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
     * ### Supported database engines
     *   * RDS PostgreSQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~).
     *   *
     * @param UpdatePostgresExtensionsRequest $request UpdatePostgresExtensionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePostgresExtensionsResponse UpdatePostgresExtensionsResponse
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
     * ### Supported database engines
     *   * RDS PostgreSQL
     *   * ### References
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Manage extensions](~~2402409~~).
     *   *
     * @param UpdatePostgresExtensionsRequest $request UpdatePostgresExtensionsRequest
     *
     * @return UpdatePostgresExtensionsResponse UpdatePostgresExtensionsResponse
     */
    public function updatePostgresExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePostgresExtensionsWithOptions($request, $runtime);
    }

    /**
     * ### Supported database engines
     *   * RDS MySQL
     *   * ### References
     *   * A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 or MySQL 8.0 instance to an ApsaraDB RDS for MySQL instance](~~251779~~).
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
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
     * ### Supported database engines
     *   * RDS MySQL
     *   * ### References
     *   * A full backup file contains the data of a self-managed MySQL database. You can restore the data of a self-managed MySQL database from a full backup file to an ApsaraDB RDS for MySQL instance. For more information, see [Migrate the data of a self-managed MySQL 5.7 or MySQL 8.0 instance to an ApsaraDB RDS for MySQL instance](~~251779~~).
     *   * > : Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Upgrade the major engine version of an ApsaraDB RDS for MySQL instance](~~96058~~).
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
     * ### Supported database engine
     *   * MySQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * [Upgrade the major engine version of an ApsaraDB RDS for MySQL instance](~~96058~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Update the minor engine version of an ApsaraDB RDS for MySQL instance](~~96059~~)
     *   * *   [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](~~146895~~)
     *   * *   [Update the minor engine version of an ApsaraDB RDS for SQL Server instance](~~213582~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * *   SQL Server
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Update the minor engine version of an ApsaraDB RDS for MySQL instance](~~96059~~)
     *   * *   [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](~~146895~~)
     *   * *   [Update the minor engine version of an ApsaraDB RDS for SQL Server instance](~~213582~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * Fees are generated if the call is successful. Before you call this operation, read the following documentation and make sure that you fully understand the billing rules, prerequisites, and impacts of this operation.
     *   * [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * Fees are generated if the call is successful. Before you call this operation, read the following documentation and make sure that you fully understand the billing rules, prerequisites, and impacts of this operation.
     *   * [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
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
     * ### Supported database engine
     *   * PostgreSQL
     *   * ### References
     *   * > Before you call this operation, carefully read the following documentation. Make sure that you fully understand the prerequisites and impacts for calling this operation.
     *   * [Upgrade the major engine version of an ApsaraDB RDS for PostgreSQL instance](~~203309~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Upgrade the dedicated proxy version of an ApsaraDB RDS for MySQL instance](~~197465~~)
     *   * *   [Upgrade the dedicated proxy version of an ApsaraDB RDS for PostgreSQL instance](~~418469~~).
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
     * ### Supported database engines
     *   * *   MySQL
     *   * *   PostgreSQL
     *   * ### References
     *   * > Before you call this operation, read the following documentation and make sure that you fully understand the prerequisites and impacts of this operation.
     *   * *   [Upgrade the dedicated proxy version of an ApsaraDB RDS for MySQL instance](~~197465~~)
     *   * *   [Upgrade the dedicated proxy version of an ApsaraDB RDS for PostgreSQL instance](~~418469~~).
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
